<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
const config = useDialKit("", {
  label: "Hover over below input",
  placeholder: "Hover over me",
  wide: false,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <InputDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
