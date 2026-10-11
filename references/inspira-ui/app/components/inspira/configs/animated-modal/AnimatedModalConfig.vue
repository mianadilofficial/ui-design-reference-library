<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";

const config = useDialKit("", {
  triggerLabel: "Open modal",
  confirmLabel: "Confirm",
  closeOnEsc: true,
  closeOnOutside: true,
  lockScroll: false,
  showClose: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <AnimatedModalDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
