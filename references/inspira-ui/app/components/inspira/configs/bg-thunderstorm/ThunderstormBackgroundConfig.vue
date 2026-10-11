<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { shaderToyControls } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit("", shaderToyControls(), {
  id: "bg-thunderstorm",
  persist: false,
});
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <ThunderstormBackgroundDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
