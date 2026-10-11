<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  sentence: "Focus is the key",
  manualMode: false,
  blurAmount: range(5, 0, 16, 0.5),
  borderColor: "#00C16A",
  animationDuration: range(1, 0.1, 3, 0.1),
  pauseBetweenAnimations: range(0.5, 0, 3, 0.1),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <FocusDemo
        :key="`${config.sentence}-${config.manualMode}-${config.animationDuration}-${config.pauseBetweenAnimations}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
