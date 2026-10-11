<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    curvature: range(75, 0, 160),
    pathWidth: range(2, 1, 8, 0.5),
    pathOpacity: range(0.2, 0, 1, 0.05),
    duration: range(4, 1, 12, 0.25),
    delay: range(0, 0, 6, 0.25),
    reverse: false,
    gradientStartColor: "#ffaa40",
    gradientStopColor: "#9c40ff",
  },
  { id: "animated-beam", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <AnimatedBeamDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
