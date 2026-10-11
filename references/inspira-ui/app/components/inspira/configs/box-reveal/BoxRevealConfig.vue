<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    color: "#e1251b",
    duration: range(0.8, 0.1, 2, 0.05),
    delay: range(0.25, 0, 1, 0.05),
  },
  { id: "box-reveal", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <BoxRevealDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
