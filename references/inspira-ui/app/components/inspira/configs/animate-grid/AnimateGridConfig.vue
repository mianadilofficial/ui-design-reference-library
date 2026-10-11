<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    textGlowStartColor: "#38ef7d80",
    textGlowEndColor: "#38ef7d",
    perspective: range(600, 100, 1600, 10),
    rotateX: range(-1, -360, 360),
    rotateY: range(-15, -360, 360),
  },
  { id: "animate-grid", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <AnimateGridDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
