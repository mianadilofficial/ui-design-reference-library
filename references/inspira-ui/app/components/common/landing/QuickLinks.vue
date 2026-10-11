<script lang="ts" setup>
import { Motion } from "motion-v";

const { locale } = useDocusI18n();
const preferredMotion = usePreferredReducedMotion();
const reduceMotion = computed(() => preferredMotion.value === "reduce");
const sectionInitial = computed(() => (reduceMotion.value ? false : { opacity: 0, y: 36 }));
const sectionInView = { opacity: 1, y: 0 };
const sectionTransition = computed(() =>
  reduceMotion.value
    ? { duration: 0 }
    : {
        duration: 0.72,
        ease: [0.16, 1, 0.3, 1],
      },
);

const links = [
  {
    label: "Learn",
    title: "Learn how Inspira UI works.",
    description: "Review requirements, project shape, and theming before adding components.",
    to: `/${locale.value}/getting-started`,
    icon: "i-lucide-book-open",
  },
  {
    label: "Install",
    title: "Set up your project.",
    description: "Add dependencies and wire the variables used by the component source.",
    to: `/${locale.value}/getting-started/installation`,
    icon: "i-lucide-terminal",
  },
  {
    label: "Browse",
    title: "Browse the components.",
    description: "Preview behavior, tune props, read API details, and copy the code.",
    to: `/${locale.value}/components`,
    icon: "i-lucide-layout-grid",
  },
];
</script>

<template>
  <Motion
    id="quickLinks"
    as="section"
    class="border-default/70 relative border-b py-20 sm:py-24 lg:py-32 lg:pb-40"
    :initial="sectionInitial"
    :while-in-view="sectionInView"
    :transition="sectionTransition"
    :viewport="{ once: true, amount: 0.32 }"
  >
    <div class="grid gap-12 lg:grid-cols-12">
      <div class="lg:col-span-4">
        <h2
          class="text-highlighted max-w-xl text-4xl leading-[0.98] font-semibold tracking-[-0.04em] text-balance sm:text-5xl"
        >
          From setup to your first component.
        </h2>
        <p class="text-muted mt-5 max-w-lg text-base leading-7 text-pretty">
          New to Inspira UI? Start with the guide. Otherwise, go straight to the component library.
        </p>
      </div>

      <div
        class="border-default/70 divide-default/70 divide-y border-y lg:col-span-7 lg:col-start-6"
      >
        <NuxtLink
          v-for="(link, index) in links"
          :key="link.to"
          :to="link.to"
          class="group hover:bg-elevated/35 focus-visible:ring-primary grid min-h-36 gap-5 px-1 py-6 transition-colors duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] focus-visible:ring-2 focus-visible:outline-none focus-visible:ring-inset motion-reduce:transition-none sm:grid-cols-[4rem_1fr_auto] sm:items-center sm:px-5"
        >
          <div class="flex items-center gap-3 sm:block">
            <p class="text-toned font-mono text-xs tabular-nums">0{{ index + 1 }}</p>
            <p class="text-muted font-mono text-xs tracking-[0.12em] sm:mt-3">
              {{ link.label }}
            </p>
          </div>
          <div
            class="transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] group-hover:translate-x-1 motion-reduce:transition-none"
          >
            <h3 class="text-highlighted text-xl font-medium tracking-[-0.02em] sm:text-2xl">
              {{ link.title }}
            </h3>
            <p class="text-muted mt-2 max-w-xl text-sm leading-6 text-pretty">
              {{ link.description }}
            </p>
          </div>
          <span class="text-toned flex size-11 items-center justify-center justify-self-end">
            <UIcon
              name="i-lucide-arrow-right"
              class="size-4 transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] group-hover:translate-x-1 motion-reduce:transition-none"
            />
          </span>
        </NuxtLink>
      </div>
    </div>
  </Motion>
</template>
