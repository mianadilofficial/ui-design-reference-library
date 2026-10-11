<script setup lang="ts">
import type { InspiraChangelogEntry, InspiraChangelogType } from "~/data/inspira-changelog";
import { cn } from "@inspira-ui/plugins";
import { inspiraChangelog } from "~/data/inspira-changelog";

const { locale, isEnabled } = useDocusI18n();

const typeMeta: Record<
  InspiraChangelogType,
  {
    label: string;
    icon: string;
    chip: string;
    dot: string;
  }
> = {
  release: {
    label: "Release",
    icon: "i-lucide-rocket",
    chip: "border-primary/25 bg-primary/8 text-primary",
    dot: "bg-primary shadow-[0_0_24px_color-mix(in_oklab,var(--ui-primary)_50%,transparent)]",
  },
  added: {
    label: "Added",
    icon: "i-lucide-plus",
    chip: "border-success/25 bg-success/8 text-success",
    dot: "bg-success shadow-[0_0_24px_color-mix(in_oklab,var(--ui-success)_50%,transparent)]",
  },
  updated: {
    label: "Updated",
    icon: "i-lucide-refresh-cw",
    chip: "border-warning/25 bg-warning/8 text-warning",
    dot: "bg-warning shadow-[0_0_24px_color-mix(in_oklab,var(--ui-warning)_50%,transparent)]",
  },
  fixed: {
    label: "Fixed",
    icon: "i-lucide-wrench",
    chip: "border-secondary/25 bg-secondary/8 text-secondary",
    dot: "bg-secondary shadow-[0_0_24px_color-mix(in_oklab,var(--ui-secondary)_50%,transparent)]",
  },
  removed: {
    label: "Removed",
    icon: "i-lucide-trash-2",
    chip: "border-error/25 bg-error/8 text-error",
    dot: "bg-error shadow-[0_0_24px_color-mix(in_oklab,var(--ui-error)_50%,transparent)]",
  },
  migration: {
    label: "Milestone",
    icon: "i-lucide-git-branch",
    chip: "border-default/70 bg-elevated text-toned",
    dot: "bg-toned",
  },
};

const dateFormatter = new Intl.DateTimeFormat("en", {
  month: "short",
  day: "numeric",
  year: "numeric",
});

function formatDate(date: string) {
  return dateFormatter.format(new Date(`${date}T00:00:00Z`));
}

const changelogGroups = computed(() => {
  let index = 0;
  const groups = new Map<string, { entry: InspiraChangelogEntry; index: number }[]>();

  inspiraChangelog.forEach((entry) => {
    const year = entry.date.slice(0, 4);
    const entries = groups.get(year) ?? [];

    entries.push({ entry, index });
    groups.set(year, entries);
    index += 1;
  });

  return Array.from(groups, ([year, entries]) => ({ year, entries }));
});

const timelineRef = ref<HTMLElement | null>(null);
const entryRefs = ref<HTMLElement[]>([]);
const activeIndex = ref(0);
const progressScale = ref(0);
let observer: IntersectionObserver | undefined;

function resolvePath(to: string) {
  if (to.startsWith("http")) {
    return to;
  }

  return isEnabled.value ? `/${locale.value}${to}` : to;
}

function metaFor(entry: InspiraChangelogEntry) {
  return typeMeta[entry.type];
}

function setEntryRef(el: Element | null, index: number) {
  if (el instanceof HTMLElement) {
    entryRefs.value[index] = el;
  }
}

function updateProgress(index = activeIndex.value) {
  const timeline = timelineRef.value;
  const marker = entryRefs.value[index]?.querySelector<HTMLElement>("[data-timeline-marker]");

  if (!timeline || !marker) {
    return;
  }

  const timelineRect = timeline.getBoundingClientRect();
  const markerRect = marker.getBoundingClientRect();

  const progress = Math.max(0, markerRect.top - timelineRect.top + markerRect.height / 2);
  progressScale.value = timelineRect.height ? Math.min(1, progress / timelineRect.height) : 0;
}

useResizeObserver(timelineRef, () => updateProgress());

onMounted(async () => {
  await nextTick();

  observer = new IntersectionObserver(
    (entries) => {
      const entry = entries
        .filter((item) => item.isIntersecting)
        .toSorted((a, b) => {
          const anchor = window.innerHeight * 0.36;

          return (
            Math.abs(a.boundingClientRect.top - anchor) -
            Math.abs(b.boundingClientRect.top - anchor)
          );
        })[0];

      if (!entry) {
        return;
      }

      activeIndex.value = Number((entry.target as HTMLElement).dataset.index ?? 0);
      updateProgress(activeIndex.value);
    },
    {
      rootMargin: "-18% 0px -58% 0px",
      threshold: [0, 0.35, 1],
    },
  );

  entryRefs.value.forEach((entry) => observer?.observe(entry));

  updateProgress();
});

onBeforeUnmount(() => {
  observer?.disconnect();
});
</script>

<template>
  <section class="relative isolate py-4 sm:py-8">
    <div
      ref="timelineRef"
      class="relative mx-auto max-w-5xl"
    >
      <span
        aria-hidden="true"
        class="bg-default/60 absolute inset-y-0 left-[0.28rem] w-px"
      />
      <span
        aria-hidden="true"
        class="bg-primary absolute inset-y-0 left-[0.28rem] w-px origin-top transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] motion-reduce:transition-none"
        :style="{ transform: `scaleY(${progressScale})` }"
      />
      <div
        v-for="(group, i) in changelogGroups"
        :key="group.year"
        class="relative"
      >
        <div
          :class="
            cn(
              'mb-6 grid gap-4 pt-14 pb-3 first:pt-0 sm:grid-cols-[11rem_minmax(0,1fr)] sm:gap-8',
              i > 0 ? 'mt-16' : '',
            )
          "
        >
          <div class="pl-8">
            <p class="text-highlighted text-2xl leading-none font-semibold tracking-tight">
              {{ group.year }}
            </p>
          </div>
          <div class="flex items-center gap-3">
            <div class="bg-border/70 h-px flex-1" />
            <span class="text-muted font-mono text-xs tracking-[0.16em] uppercase">
              {{ group.entries.length }} milestones
            </span>
          </div>
        </div>

        <article
          v-for="{ entry, index } in group.entries"
          :key="`${entry.date}-${entry.title}`"
          :ref="(el) => setEntryRef(el as any, index)"
          :data-index="index"
          class="group relative grid gap-4 py-5 sm:grid-cols-[11rem_minmax(0,1fr)] sm:gap-8"
        >
          <span
            data-timeline-marker
            aria-hidden="true"
            class="ring-default absolute top-11.5 left-0 z-10 size-2.5 rounded-full ring-4 transition-[opacity,transform] duration-200 ease-[cubic-bezier(0.23,1,0.32,1)] motion-reduce:transition-none max-sm:top-6"
            :class="[
              metaFor(entry).dot,
              activeIndex === index ? 'scale-125 opacity-100' : 'opacity-55',
            ]"
          />
          <time
            :datetime="entry.date"
            class="text-muted pl-8 font-mono text-xs tracking-[0.16em] uppercase sm:pt-6"
          >
            {{ formatDate(entry.date) }}
          </time>

          <div
            class="border-default/70 bg-elevated/15 group-hover:border-default relative border p-5 transition-colors duration-200 motion-reduce:transition-none sm:p-6"
          >
            <div class="relative flex flex-col gap-5">
              <div class="flex flex-wrap items-center gap-3">
                <span
                  class="inline-flex h-7 items-center gap-1.5 rounded-none border px-2.5 font-mono text-[0.65rem] font-medium tracking-[0.08em] uppercase"
                  :class="metaFor(entry).chip"
                >
                  <UIcon
                    :name="metaFor(entry).icon"
                    class="size-3.5"
                  />
                  {{ metaFor(entry).label }}
                </span>
              </div>

              <div>
                <h2 class="text-highlighted text-xl leading-tight font-semibold sm:text-2xl">
                  {{ entry.title }}
                </h2>
                <p class="text-muted mt-3 max-w-2xl text-sm leading-6 sm:text-base sm:leading-7">
                  {{ entry.description }}
                </p>
              </div>

              <div
                v-if="entry.links?.length"
                class="flex flex-wrap gap-2"
              >
                <NuxtLink
                  v-for="link in entry.links"
                  :key="link.to"
                  :to="resolvePath(link.to)"
                  class="group/link border-default/70 bg-elevated/40 text-toned hover:bg-accented/70 hover:text-highlighted inline-flex h-8 items-center gap-2 rounded-none border px-3 text-xs font-medium transition-colors duration-200 motion-reduce:transition-none"
                >
                  {{ link.label }}
                  <UIcon
                    name="i-lucide-arrow-up-right"
                    class="size-3 transition-transform duration-200 group-hover/link:translate-x-0.5 group-hover/link:-translate-y-0.5"
                  />
                </NuxtLink>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>
</template>
