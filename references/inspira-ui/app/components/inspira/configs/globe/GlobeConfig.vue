<script lang="ts" setup>
import { refThrottled } from "@vueuse/core";
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  label: "Globe",
  dark: range(0, 0, 1, 0.01),
  diffuse: range(0.4, 0, 2, 0.05),
  mapBrightness: range(1.2, 0.2, 3, 0.1),
  mass: range(1, 0.2, 4, 0.1),
  tension: range(280, 80, 500, 10),
  friction: range(100, 20, 200, 5),
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
      <GlobeDemo
        :key="throttledConfigKey"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
