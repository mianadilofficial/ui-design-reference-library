<script setup lang="ts">
const color = defineModel<string>();

const chip = computed(() => ({ backgroundColor: color.value }));
const label = computed(() => color.value || "Choose color");
</script>

<template>
  <UPopover
    :ui="{
      content:
        'border-default/80 rounded-none border bg-default/95 p-1 shadow-[0_20px_80px_-36px_rgba(15,23,42,0.58)] backdrop-blur-xl',
    }"
  >
    <UButton
      :label="label"
      color="neutral"
      variant="subtle"
      class="border-default/70 h-9 max-w-full justify-start rounded-none border px-2.5 font-mono text-xs uppercase tabular-nums"
    >
      <template #leading>
        <span
          :style="chip"
          class="border-default/80 size-4 rounded-none border"
        />
      </template>
    </UButton>

    <template #content>
      <UColorPicker
        v-model="color"
        class="p-2"
      />
    </template>
  </UPopover>
</template>
