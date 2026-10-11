<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  color: "#ffffff",
  baseThickness: range(30, 4, 80),
  speedMultiplier: range(0.5, 0.1, 2, 0.1),
  maxAge: range(500, 80, 1200, 20),
  enableFade: false,
  enableShaderEffect: false,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TailedCursorDemo
        :key="`${config.color}-${config.baseThickness}-${config.speedMultiplier}-${config.maxAge}-${config.enableFade}-${config.enableShaderEffect}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
