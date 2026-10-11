<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  text: "Inspira UI",
  minSize: range(0.4, 0.1, 3, 0.1),
  maxSize: range(1.4, 0.2, 6, 0.1),
  particleDensity: range(1200, 100, 2000, 50),
  particleColor: "#ffffff",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <SparklesDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
