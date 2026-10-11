<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  squareSize: range(4, 1, 16),
  gridGap: range(6, 1, 24),
  color: "#60A5FA",
  maxOpacity: range(0.5, 0.05, 1, 0.05),
  flickerChance: range(0.1, 0.01, 1, 0.01),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <FlickeringGridDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
