<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
const config = useDialKit("", {
  lineColor: "#0EA5E9",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <WorldMapDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
