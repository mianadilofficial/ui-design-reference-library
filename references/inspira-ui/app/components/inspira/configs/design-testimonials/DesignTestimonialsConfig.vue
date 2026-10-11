<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  title: "Testimonials",
  duration: range(6000, 1500, 12000, 500),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <DesignTestimonialsDemo
        :key="config.duration"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
