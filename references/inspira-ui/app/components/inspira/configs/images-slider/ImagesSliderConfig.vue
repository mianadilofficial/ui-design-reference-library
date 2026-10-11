<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  autoplay: range(5000, 0, 10000, 500),
  direction: select("vertical", ["vertical", "horizontal"]),
  hideOverlay: false,
  perspective: "1000px",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <ImagesSliderDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
