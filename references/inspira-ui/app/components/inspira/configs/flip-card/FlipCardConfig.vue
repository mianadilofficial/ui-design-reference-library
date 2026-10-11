<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  title: "Inspira UI",
  rotate: select("y", ["x", "y"]),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <FlipCardDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
