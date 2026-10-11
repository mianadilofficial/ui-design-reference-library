<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "Hyper Text",
    duration: range(800, 100, 2400, 50),
    animateOnLoad: true,
  },
  { id: "hyper-text", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <HyperTextDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
