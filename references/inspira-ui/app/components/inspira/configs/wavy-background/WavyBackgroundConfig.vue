<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  waveWidth: range(50, 10, 120),
  blur: range(10, 0, 24),
  speed: select("fast", ["slow", "fast"]),
  waveOpacity: range(0.5, 0.1, 1, 0.05),
  backgroundFill: "#000000",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <WavyBackgroundDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
