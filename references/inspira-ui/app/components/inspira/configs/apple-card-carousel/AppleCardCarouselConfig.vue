<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  initialScroll: range(0, 0, 1600, 50),
  visibleCards: range(6, 3, 6),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <AppleCardCarouselDemo
        :key="`${config.initialScroll}-${config.visibleCards}`"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
