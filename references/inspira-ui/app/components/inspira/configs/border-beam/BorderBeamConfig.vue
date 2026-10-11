<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    size: range(250, 80, 420),
    duration: range(12, 2, 24, 0.5),
    delay: range(9, 0, 12, 0.5),
    borderWidth: range(2, 1, 8, 0.5),
    anchor: range(90, 0, 100),
    colorFrom: "#ffaa40",
    colorTo: "#9c40ff",
  },
  { id: "border-beam", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <BorderBeamDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
