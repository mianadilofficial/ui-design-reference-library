<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  duration: range(1000, 100, 3000, 50),
  color: select("zinc", ["zinc", "blue", "green", "orange", "red", "purple"]),
  size: select("md", ["sm", "md", "lg"]),
  radius: select("md", ["sm", "md", "lg", "xl"]),
  shadowSize: select("lg", ["sm", "md", "lg", "xl"]),
  isStatic: false,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <BookDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
