<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  baseCircleSize: range(210, 80, 360),
  baseCircleOpacity: range(0.24, 0.05, 0.8, 0.01),
  circleOpacityDowngradeRatio: range(0.03, 0.01, 0.12, 0.01),
  waveSpeed: range(80, 10, 240, 5),
  spaceBetweenCircle: range(70, 20, 140, 5),
  numberOfCircles: range(7, 2, 14),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <RippleDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
