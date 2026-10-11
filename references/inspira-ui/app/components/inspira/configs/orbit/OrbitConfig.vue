<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  duration: range(20, 4, 60),
  innerRadius: range(80, 40, 140),
  outerRadius: range(190, 120, 240),
  showPath: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <OrbitDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
