<script lang="ts" setup>
import { refThrottled } from "@vueuse/core";
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  pointSize: range(1, 0.2, 4, 0.1),
  arcTime: range(1000, 500, 5000, 100),
  arcLength: range(1, 0.1, 1, 0.05),
  rings: range(1, 0, 4),
  maxRings: range(10, 1, 20),
  autoRotateSpeed: range(2.5, 0, 8, 0.1),
  showAtmosphere: true,
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
      <GithubGlobeDemo
        :key="throttledConfigKey"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
