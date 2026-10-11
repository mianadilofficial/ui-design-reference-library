<script setup lang="ts">
interface RuntimeCodeGroupItem {
  label: string;
  code: string;
  filename?: string;
  icon?: string;
  language?: string;
}

defineProps<{
  items: RuntimeCodeGroupItem[];
  sync?: string;
}>();
</script>

<template>
  <ProseCodeGroup :sync="sync">
    <RuntimeCodeBlock
      v-for="item in items"
      :key="`${item.label}-${item.filename || item.language || 'code'}`"
      :label="item.label"
      :filename="item.filename || item.label"
      :icon="item.icon"
      :language="item.language"
      :code="item.code"
    />
  </ProseCodeGroup>
</template>
