<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
const config = useDialKit("", {
  text: "Button",
  wide: false,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <InteractiveHoverButtonDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
