<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  base: range(15, 6, 28),
  squareColor: "#00C16A",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TetrisDemo
        :key="`${config.base}-${config.squareColor}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
