<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    textColor: "#ffffff",
    strokeColor: "#000000",
    shadowColor: "#ffff00",
    strokeSize: range(20, 0, 40),
    shadow1Size: range(7, 0, 24),
    shadow2Size: range(10, 0, 32),
    animate: true,
    animationDuration: range(1500, 250, 5000, 50),
  },
  { id: "text-3d", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <Text3dDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
