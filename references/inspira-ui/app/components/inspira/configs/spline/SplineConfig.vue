<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  title: "Inspira UI",
  subtitle: "Build spline animations with style.",
  height: select("md", ["sm", "md", "lg"]),
  renderOnDemand: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <SplineDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
