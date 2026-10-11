<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  initialValue: range(50, 0, 100),
  leftColor: "#e68a00",
  rightColor: "#ffffff",
  minShiftLimit: range(40, 0, 100),
  maxShiftLimit: range(68, 0, 100),
  leftContent: "COFFEE",
  rightContent: "MILK",
  indicatorColor: "#ffffff",
  borderRadius: range(8, 0, 24),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <BalanceSliderDemo
        :key="config.initialValue"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
