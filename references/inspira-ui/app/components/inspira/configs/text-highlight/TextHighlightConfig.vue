<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "f****ing great developer !",
    delay: range(0, 0, 2000, 100),
    duration: range(2000, 250, 5000, 100),
    textEndColor: "#111111",
  },
  { id: "text-highlight", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <TextHighlightDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
