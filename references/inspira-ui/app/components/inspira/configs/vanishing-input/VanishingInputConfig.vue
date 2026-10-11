<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
const config = useDialKit("", {
  title: "Ask Anything",
  firstPlaceholder: "How do I ship this faster?",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <VanishingInputDemo
        :key="`${config.title}-${config.firstPlaceholder}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
