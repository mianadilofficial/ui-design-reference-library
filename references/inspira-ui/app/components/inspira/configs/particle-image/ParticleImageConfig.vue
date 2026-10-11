<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range, select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  renderer: select("default", ["default", "webgl"]),
  particleSize: range(1, 1, 8),
  particleGap: range(2, 1, 10),
  mouseForce: range(20, 0, 100),
  gravity: range(0.08, 0, 0.5, 0.01),
  initPosition: select("random", ["random", "top", "left", "bottom", "right", "misplaced", "none"]),
  fadePosition: select("explode", ["explode", "top", "left", "bottom", "right", "random", "none"]),
  responsiveWidth: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <ParticleImageDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
