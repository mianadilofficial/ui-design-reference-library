<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  text: "Lamp Effect",
  delay: range(0.5, 0, 2, 0.1),
  duration: range(0.8, 0.2, 3, 0.1),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <LampEffectDemo
        :key="`${config.delay}-${config.duration}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
