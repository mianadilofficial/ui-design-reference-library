<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  spread: range(40, 10, 100),
  proximity: range(64, 0, 160),
  blur: range(0, 0, 8),
  borderWidth: range(1, 1, 4),
  movementDuration: range(2, 0.1, 5, 0.1),
  variant: select("default", ["default", "white"]),
  glow: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <GlowingEffectDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
