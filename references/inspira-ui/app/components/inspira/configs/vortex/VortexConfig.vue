<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  particleCount: range(700, 100, 2000, 50),
  rangeY: range(100, 20, 260),
  baseHue: range(220, 0, 360),
  baseSpeed: range(0, 0, 4, 0.1),
  rangeSpeed: range(1.5, 0.1, 6, 0.1),
  baseRadius: range(1, 0.2, 6, 0.1),
  rangeRadius: range(2, 0.2, 8, 0.1),
  backgroundColor: "#000000",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <VortexDemo
        :key="config.particleCount"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
