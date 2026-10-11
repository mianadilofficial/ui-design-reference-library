<script lang="ts" setup>
import { refThrottled } from "@vueuse/core";
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  gridCols: range(4, 2, 8),
  gridRows: range(4, 2, 8),
  tileSize: range(3, 1, 6, 0.1),
  baseCameraZ: range(10, 5, 24, 0.5),
  distortionIntensity: range(-0.2, -1, 1, 0.05),
  vignetteDarkness: range(0, 0, 1, 0.05),
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
      <InfiniteGridDemo
        :key="throttledConfigKey"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
