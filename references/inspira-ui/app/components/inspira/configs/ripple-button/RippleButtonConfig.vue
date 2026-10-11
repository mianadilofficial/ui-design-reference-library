<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    rippleColor: "#add8e6",
    duration: range(600, 120, 2000, 20),
  },
  { id: "ripple-button", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <RippleButtonDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
