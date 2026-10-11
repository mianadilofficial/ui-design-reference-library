<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
const config = useDialKit("", {
  text: "Making UI beautiful using Inspira UI.",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TextScrollRevealDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
