<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  initialColor: "#A35FFF",
  type: select("hsla", ["hex", "hsl", "hsla", "rgb", "rgba"]),
  open: false,
  hideContrastRatio: false,
  hideDefaultSwatches: false,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <ColorPickerDemo
        :key="`${config.initialColor}-${config.type}`"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
