<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { select } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    shimmerColor: "#ffffff",
    shimmerSize: select("2px", ["1px", "2px", "4px", "8px"]),
    borderRadius: select("100px", ["8px", "16px", "32px", "100px"]),
    shimmerDuration: select("3s", ["1s", "2s", "3s", "5s"]),
    background: "rgba(0, 0, 0, 1)",
  },
  { id: "shimmer-button", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <ShimmerButtonDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
