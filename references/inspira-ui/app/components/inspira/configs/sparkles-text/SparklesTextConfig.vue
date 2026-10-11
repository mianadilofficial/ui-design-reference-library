<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "Inspira UI",
    sparklesCount: range(10, 0, 60),
    colors: {
      first: "#9e7aff",
      second: "#fe8bbb",
    },
  },
  { id: "sparkles-text", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <SparklesTextDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
