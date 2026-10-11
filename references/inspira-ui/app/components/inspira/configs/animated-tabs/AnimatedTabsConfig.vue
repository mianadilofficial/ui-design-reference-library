<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  initialTab: select("product", ["product", "services", "playground", "content", "random"]),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <AnimatedTabsDemo
        :key="config.initialTab"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
