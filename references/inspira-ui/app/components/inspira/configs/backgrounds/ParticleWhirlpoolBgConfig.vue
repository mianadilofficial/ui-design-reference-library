<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  particleCount: range(2000, 500, 5000, 100),
  blur: range(2, 0, 12),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <ParticleWhirlpoolBgDemo
        :key="config.particleCount"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
