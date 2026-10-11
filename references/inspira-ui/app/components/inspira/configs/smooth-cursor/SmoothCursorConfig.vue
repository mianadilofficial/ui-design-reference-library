<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  damping: range(45, 10, 100),
  stiffness: range(400, 100, 800),
  mass: range(1, 0.1, 4, 0.1),
  restDelta: range(0.001, 0.001, 0.05, 0.001),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <SmoothCursorDemo
        :key="`${config.damping}-${config.stiffness}-${config.mass}-${config.restDelta}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
