<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "✨ Introducing Inspira UI",
    duration: range(5, 1, 12, 0.25),
    radiantWidth: range(100, 24, 240),
  },
  { id: "radiant-text", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <RadiantTextDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
