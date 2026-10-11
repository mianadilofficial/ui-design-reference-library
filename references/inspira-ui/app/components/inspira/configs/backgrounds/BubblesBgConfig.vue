<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  blur: range(0, 0, 12),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <BubblesBgDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
