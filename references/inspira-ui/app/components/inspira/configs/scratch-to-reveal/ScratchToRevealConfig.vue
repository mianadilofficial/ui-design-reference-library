<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  width: range(250, 160, 420),
  height: range(250, 160, 420),
  minScratchPercentage: range(50, 10, 90),
  color1: "#A97CF8",
  color2: "#F38CB8",
  color3: "#FDCC92",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <ScratchToRevealDemo
        :key="`${config.width}-${config.height}-${config.color1}-${config.color2}-${config.color3}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
