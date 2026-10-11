<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "INSPIRA",
    strokeWidth: range(0.75, 0.1, 3, 0.05),
    duration: range(200, 50, 1000, 25),
    opacity: range(0.75, 0, 1, 0.05),
  },
  { id: "text-hover-effect", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <TextHoverEffectDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
