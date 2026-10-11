<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  text: "With Inspira UI, you can build beautiful websites powered by Vue and Nuxt in record time.",
  duration: range(0.6, 0.1, 2, 0.1),
  delay: range(0.2, 0, 2, 0.1),
  stagger: range(0.1, 0.02, 0.4, 0.01),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TextRevealDemo
        :key="`${config.text}-${config.duration}-${config.delay}-${config.stagger}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
