<script lang="ts" setup>
import { cn } from "@inspira-ui/plugins";

const props = defineProps<{
  class?: string;
}>();
</script>

<template>
  <CarbonAdsScript
    :class="
      cn(
        'border-default/70 bg-elevated/20 text-default [&_.carbon-poweredby]:text-muted [&_.carbon-poweredby:hover]:text-highlighted w-fit gap-4 rounded-none border p-4 [&_.carbon-poweredby]:text-sm [&_.carbon-poweredby]:transition-colors',
        props.class,
      )
    "
    serve="CW7DEK37"
    placement="inspira-uicom"
    format="cover"
  />
</template>
