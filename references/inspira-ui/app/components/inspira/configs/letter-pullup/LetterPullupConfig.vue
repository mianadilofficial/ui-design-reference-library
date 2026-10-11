<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    words: "Staggered Letter Pull Up",
    delay: range(0.05, 0, 0.25, 0.01),
  },
  { id: "letter-pullup", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <LetterPullupDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
