<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  enabled: false,
  densityDissipation: range(3.5, 0.5, 8, 0.1),
  velocityDissipation: range(2, 0.5, 6, 0.1),
  pressure: range(0.1, 0, 1, 0.01),
  curl: range(3, 0, 20, 0.5),
  splatRadius: range(0.2, 0.01, 1, 0.01),
  splatForce: range(6000, 500, 12000, 100),
  transparent: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <FluidCursorDemo
        :key="`${config.densityDissipation}-${config.velocityDissipation}-${config.pressure}-${config.curl}-${config.splatRadius}-${config.splatForce}-${config.transparent}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
