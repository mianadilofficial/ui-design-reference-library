<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  duration: range(1.5, 0.3, 4, 0.1),
  delay: range(2.5, 0.8, 6, 0.1),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <LogoOrigamiDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
