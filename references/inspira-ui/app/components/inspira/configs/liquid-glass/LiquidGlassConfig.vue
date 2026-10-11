<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  radius: range(16, 0, 48),
  border: range(0.07, 0, 0.3, 0.01),
  lightness: range(50, 0, 100),
  blend: select("difference", ["difference", "screen", "overlay", "hard-light", "multiply"]),
  alpha: range(0.93, 0.1, 1, 0.01),
  blur: range(11, 0, 24),
  scale: range(-180, -400, 200),
  frost: range(0.05, 0, 0.5, 0.01),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <LiquidGlassDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
