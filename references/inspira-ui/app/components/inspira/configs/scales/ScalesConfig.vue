<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import ScalesDemo from "@/components/inspira/examples/scales/ScalesDemo.vue";

import { range, select } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    color: "#73737333",
    size: range(8, 1, 24),
    orientation: select("diagonal", ["horizontal", "vertical", "diagonal"]),
  },
  { id: "scales", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <ScalesDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
