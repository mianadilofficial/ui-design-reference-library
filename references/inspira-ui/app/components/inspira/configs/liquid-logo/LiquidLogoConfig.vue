<script lang="ts" setup>
import { refThrottled } from "@vueuse/core";
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  imageUrl: "https://cdn.inspira-ui.com/images/apple-logo.svg",
  patternScale: range(2, 0.5, 6, 0.1),
  refraction: range(0.015, 0, 0.08, 0.001),
  edge: range(0.4, 0, 1, 0.01),
  patternBlur: range(0.005, 0, 0.05, 0.001),
  liquid: range(0.07, 0, 0.3, 0.01),
  speed: range(0.3, 0, 2, 0.1),
  showProcessing: true,
});

const configKey = computed(() => JSON.stringify(config.value));
const throttledConfigKey = refThrottled(configKey, 120);
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <LiquidLogoDemo
        :key="throttledConfigKey"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
