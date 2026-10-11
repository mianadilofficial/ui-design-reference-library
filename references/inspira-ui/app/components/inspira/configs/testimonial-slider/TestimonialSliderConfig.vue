<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  autoRotate: true,
  duration: range(5, 1, 12, 0.5),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TestimonialSliderDemo
        :key="`${config.autoRotate}-${config.duration}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
