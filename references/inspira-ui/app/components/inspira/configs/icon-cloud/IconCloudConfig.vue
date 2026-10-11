<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  iconCount: range(30, 8, 30),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <IconCloudDemo
        :key="config.iconCount"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
