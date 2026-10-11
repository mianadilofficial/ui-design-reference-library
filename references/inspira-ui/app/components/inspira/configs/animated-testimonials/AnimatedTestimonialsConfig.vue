<script setup lang="ts">
import { useDialKit } from "dialkit/vue";

import { range } from "../../../common/dial-kit/dialkit-controls";
import DialKitConfigPanel from "../../../common/dial-kit/DialKitConfigPanel.vue";

const config = useDialKit(
  "",
  {
    autoplay: false,
    duration: range(5000, 1000, 10000, 250),
  },
  { id: "animated-testimonials", persist: false },
);
</script>

<template>
  <ComponentPlayground>
    <template #component>
      <AnimatedTestimonialsDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>

    <template #config>
      <DialKitConfigPanel />
    </template>
  </ComponentPlayground>
</template>
