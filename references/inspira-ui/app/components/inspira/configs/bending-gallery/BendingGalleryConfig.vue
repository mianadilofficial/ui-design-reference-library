<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  bend: range(2, -6, 6, 0.1),
  borderRadius: range(0.1, 0, 0.5, 0.01),
  textColor: "#ffffff",
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <BendingGalleryDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
