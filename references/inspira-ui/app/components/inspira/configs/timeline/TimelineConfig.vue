<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  title: "Beam me up",
  description: "Show the timeline in style",
  itemCount: range(6, 3, 6),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <TimelineDemo
        :key="config.itemCount"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
