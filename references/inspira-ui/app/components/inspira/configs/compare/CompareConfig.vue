<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  initialSliderPercentage: range(50, 0, 100),
  slideMode: select("hover", ["hover", "drag"]),
  showHandlebar: true,
  autoplay: false,
  autoplayDuration: range(5000, 1000, 10000, 500),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <CompareDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
