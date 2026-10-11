<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    speed: range(2, 0.5, 8, 0.1),
  },
  { id: "rainbow-button", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <RainbowButtonDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
