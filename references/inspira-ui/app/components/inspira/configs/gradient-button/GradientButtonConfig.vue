<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    duration: range(2500, 500, 7000, 100),
    borderWidth: range(2, 1, 8),
    borderRadius: range(8, 0, 32),
    blur: range(4, 0, 16),
    bgColor: "#000000",
  },
  { id: "gradient-button", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <GradientButtonDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
