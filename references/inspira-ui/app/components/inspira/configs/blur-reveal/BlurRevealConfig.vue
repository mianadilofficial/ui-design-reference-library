<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range, select } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    delay: range(0.2, 0, 1, 0.05),
    duration: range(0.75, 0.1, 2, 0.05),
    blur: select("20px", ["0px", "8px", "16px", "20px", "32px"]),
    yOffset: range(20, -80, 80),
  },
  { id: "blur-reveal", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <BlurRevealDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
