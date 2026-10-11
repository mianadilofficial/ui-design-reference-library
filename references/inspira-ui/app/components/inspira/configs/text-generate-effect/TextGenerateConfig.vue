<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  words:
    "Nuxt is an open source framework that makes web development intuitive and powerful. Create performant and production-grade full-stack web apps and websites with confidence.",
  filter: true,
  duration: range(0.7, 0.1, 2, 0.1),
  delay: range(0, 0, 2000, 100),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TextGenerateDemo
        :key="`${config.words}-${config.duration}-${config.delay}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
