<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  initialIndex: range(2, 0, 6),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <SpringCalendarDemo
        :key="config.initialIndex"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
