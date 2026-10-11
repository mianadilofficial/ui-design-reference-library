<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "Fast",
    shadowColor: "#ffffff",
  },
  { id: "line-shadow-text", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <LineShadowTextDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
