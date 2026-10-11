<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    value: range(70, 0, 100),
    autoPlay: true,
    gaugePrimaryColor: "rgb(79 70 229)",
    gaugeSecondaryColor: "rgba(0, 0, 0, 0.1)",
    circleStrokeWidth: range(10, 2, 18),
    showPercentage: true,
    duration: range(1, 0.1, 3, 0.1),
  },
  { id: "animated-circular-progressbar", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <AnimatedCircularProgressBarDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
