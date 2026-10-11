<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  perspective: range(100, 50, 300),
  beamsPerSide: range(3, 1, 8),
  beamSize: range(5, 2, 12),
  beamDelayMax: range(3, 0, 8, 0.1),
  beamDuration: range(3, 1, 10, 0.1),
  gridColor: "hsl(var(--border))",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <WarpBackgroundDemo
        :key="`${config.beamsPerSide}-${config.beamSize}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
