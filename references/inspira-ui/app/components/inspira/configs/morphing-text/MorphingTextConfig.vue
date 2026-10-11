<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    morphTime: range(1.5, 0.2, 4, 0.1),
    coolDownTime: range(0.5, 0, 3, 0.1),
  },
  { id: "morphing-text", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <MorphingTextDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
