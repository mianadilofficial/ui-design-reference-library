<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    text: "Inspira UI",
    speed: range(1, 0.1, 4, 0.1),
    enableShadows: true,
    enableOnHover: false,
  },
  { id: "text-glitch", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <TextGlitchDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
