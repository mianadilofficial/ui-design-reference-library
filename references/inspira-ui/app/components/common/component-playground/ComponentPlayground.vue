<script setup lang="ts">
const open = ref(false);
const refreshKey = ref(0);
const configBody = ref<HTMLElement | null>(null);

const isDesktop = useMediaQuery("(min-width: 768px)");
const labelSegmentSeparator = /\./g;
const labelCamelBoundary = /([a-z0-9])([A-Z])/g;
const labelAcronymBoundary = /([A-Z])([A-Z][a-z])/g;
const labelWordSeparator = /[_-]/g;
const labelWhitespace = /\s+/g;
const labelFirstCharacter = /^./;
const configControlStackClass = [
  "flex flex-col gap-2.5 p-3",
  "[&_.form-field]:grid [&_.form-field]:min-h-14 [&_.form-field]:grid-cols-[minmax(0,1fr)_minmax(8rem,auto)] [&_.form-field]:items-center [&_.form-field]:gap-4 [&_.form-field]:rounded-none [&_.form-field]:border-b [&_.form-field]:border-default/60 [&_.form-field]:bg-elevated/45 [&_.form-field]:px-3.5 [&_.form-field]:py-3 [&_.form-field]:transition-colors [&_.form-field]:duration-150 [&_.form-field]:ease-[cubic-bezier(0.23,1,0.32,1)] [&_.form-field:hover]:bg-elevated/60",
  "[&_.form-field:has(textarea)]:grid-cols-1 [&_.form-field:has(textarea)]:items-stretch",
  "[&_.form-field>div]:min-w-0 [&_.form-field>div:last-child]:mt-0 [&_.form-field>div:last-child]:flex [&_.form-field>div:last-child]:justify-end [&_.form-field:has(textarea)>div:last-child]:justify-stretch",
  "[&_.form-field_label]:text-muted [&_.form-field_label]:text-[0.8rem] [&_.form-field_label]:leading-[1.35] [&_.form-field_label]:font-medium [&_.form-field_label]:tracking-normal",
  "[&_.form-field_input]:text-[0.8125rem] [&_.form-field_textarea]:text-[0.8125rem]",
  "[&_.form-field>div:last-child>.relative.inline-flex]:max-w-[min(100%,13rem)] [&_.form-field>div:last-child>button]:max-w-[min(100%,13rem)] [&_.form-field>div:last-child>.relative.inline-flex]:rounded-none",
  "[&_.form-field>div:last-child>.relative.inline-flex_input]:min-h-9 [&_.form-field>div:last-child>.relative.inline-flex_input]:rounded-none [&_.form-field>div:last-child>button]:min-h-9 [&_.form-field>div:last-child>button]:rounded-none [&_.form-field_textarea]:min-h-26 [&_.form-field_textarea]:resize-y [&_.form-field_textarea]:rounded-none",
  "[&_.form-field>div:last-child>.relative.inline-flex]:bg-default/70 [&_.form-field>div:last-child>.relative.inline-flex]:ring [&_.form-field>div:last-child>.relative.inline-flex]:ring-muted/80",
  "max-[480px]:[&_.form-field]:grid-cols-1 max-[480px]:[&_.form-field]:items-stretch max-[480px]:[&_.form-field>div:last-child]:justify-stretch max-[480px]:[&_.form-field>div:last-child>.relative.inline-flex]:w-full max-[480px]:[&_.form-field>div:last-child>.relative.inline-flex]:max-w-none max-[480px]:[&_.form-field>div:last-child>button]:w-full max-[480px]:[&_.form-field>div:last-child>button]:max-w-none",
];

function refreshPreview() {
  refreshKey.value += 1;
}

function humanizeConfigLabel(value: string) {
  return value
    .replace(labelSegmentSeparator, " / ")
    .replace(labelCamelBoundary, "$1 $2")
    .replace(labelAcronymBoundary, "$1 $2")
    .replace(labelWordSeparator, " ")
    .replace(labelWhitespace, " ")
    .trim()
    .replace(labelFirstCharacter, (char) => char.toUpperCase());
}

function humanizeConfigLabels() {
  const root = configBody.value;
  if (!root) return;

  root.querySelectorAll<HTMLLabelElement>(".form-field label").forEach((label) => {
    label.dataset.rawLabel ||= label.textContent?.trim() ?? "";
    label.textContent = humanizeConfigLabel(label.dataset.rawLabel);
  });
}

watch(open, async (isOpen) => {
  if (!isOpen) return;

  await nextTick();
  humanizeConfigLabels();
});

onUpdated(() => {
  if (!open.value) return;

  nextTick(humanizeConfigLabels);
});
</script>

<template>
  <div class="flex w-full flex-col items-start justify-start gap-4">
    <div
      class="border-default/70 bg-default relative isolate w-full overflow-hidden rounded-none border"
    >
      <div class="absolute top-3 right-3 z-50 flex items-center gap-px">
        <UButton
          icon="i-lucide-refresh-cw"
          color="neutral"
          variant="subtle"
          size="sm"
          aria-label="Refresh preview"
          title="Refresh preview"
          class="border-default/70 bg-default/85 hover:bg-elevated grid size-9 place-items-center rounded-none border p-0 backdrop-blur transition-colors duration-150 motion-reduce:transition-none"
          :ui="{ leadingIcon: 'size-4 shrink-0' }"
          @click="refreshPreview"
        />
        <UButton
          v-if="$slots.config"
          icon="i-lucide-sliders-horizontal"
          color="neutral"
          variant="subtle"
          size="sm"
          aria-label="Customize props"
          title="Customize props"
          class="border-default/70 bg-default/85 hover:bg-elevated grid size-9 place-items-center rounded-none border p-0 backdrop-blur transition-colors duration-150 motion-reduce:transition-none"
          :ui="{ leadingIcon: 'size-4 shrink-0' }"
          @click="open = true"
        />
      </div>

      <div
        :key="`stageRefreshKey${refreshKey}`"
        class="relative z-0 flex min-h-88 items-center justify-center p-6 sm:min-h-96 sm:p-8"
      >
        <slot name="component" />
      </div>
    </div>

    <UDrawer
      v-if="$slots.config"
      v-model:open="open"
      :direction="isDesktop ? 'right' : 'bottom'"
      :overlay="!isDesktop"
      :dismissible="!isDesktop"
      :handle="!isDesktop"
      :modal="!isDesktop"
      :inset="isDesktop"
      :ui="{
        content:
          'border-default/70 bg-default/94 rounded-none border-s shadow-[0_32px_120px_-56px_rgba(15,23,42,0.72)] backdrop-blur-xl md:w-108 md:rounded-none',
        container: 'h-full gap-0 overflow-hidden p-0',
        header: 'border-muted/60 shrink-0 border-b px-5 py-4',
        body: 'bg-default min-h-0 flex-1 overflow-y-auto',
      }"
    >
      <template #header>
        <div class="flex items-start justify-between gap-4">
          <div class="min-w-0 pt-0.5">
            <div class="text-muted mb-1 text-[0.65rem] font-medium tracking-[0.18em] uppercase">
              Playground
            </div>
            <h2 class="text-highlighted text-base leading-tight font-semibold">Fine tune</h2>
            <p class="text-muted mt-1 text-xs">Every change updates the preview.</p>
          </div>

          <UButton
            color="neutral"
            variant="ghost"
            icon="i-lucide-x"
            aria-label="Close customize panel"
            class="border-default/70 hover:bg-elevated grid size-9 shrink-0 place-items-center rounded-none border p-0 transition-colors duration-150 motion-reduce:transition-none"
            :ui="{ leadingIcon: 'size-4 shrink-0' }"
            @click="open = false"
          />
        </div>
      </template>
      <template #body>
        <div
          ref="configBody"
          :class="configControlStackClass"
        >
          <slot name="config" />
        </div>
      </template>
    </UDrawer>
  </div>
</template>
