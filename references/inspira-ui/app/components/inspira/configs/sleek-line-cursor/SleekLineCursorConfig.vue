<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  friction: range(0.5, 0.1, 0.98, 0.01),
  trails: range(20, 2, 60),
  size: range(50, 10, 120),
  dampening: range(0.25, 0.05, 1, 0.01),
  tension: range(0.98, 0.5, 1, 0.01),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <SleekLineCursorDemo
        :key="`${config.friction}-${config.trails}-${config.size}-${config.dampening}-${config.tension}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
