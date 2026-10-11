<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range, select } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    value: range(100, 0, 10000),
    duration: range(1000, 100, 5000, 50),
    delay: range(0, 0, 2000, 50),
    decimalPlaces: range(0, 0, 4),
    direction: select("up", ["up", "down"]),
  },
  { id: "number-ticker", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <NumberTickerDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
