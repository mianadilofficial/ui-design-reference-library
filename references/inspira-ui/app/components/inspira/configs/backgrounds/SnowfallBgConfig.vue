<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  color: "#ADD8E6",
  quantity: range(100, 20, 300, 10),
  speed: range(0.5, 0.1, 3, 0.1),
  minRadius: range(0.2, 0.1, 2, 0.1),
  maxRadius: range(5, 1, 10, 0.1),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <SnowfallBgDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
