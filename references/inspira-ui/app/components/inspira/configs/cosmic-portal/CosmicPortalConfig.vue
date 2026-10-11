<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { range } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  portalComplexity: range(4, 1, 8),
  crystalCount: range(12, 0, 32),
  primaryColor: "#9b59b6",
  secondaryColor: "#3498db",
  accentColor: "#e74c3c",
  vortexColor: "#2ecc71",
  rotationSpeed: range(0.3, 0, 2, 0.05),
  bloomStrength: range(1.2, 0, 3, 0.1),
  bloomRadius: range(0.7, 0, 2, 0.05),
  bloomThreshold: range(0.2, 0, 1, 0.05),
  dimensionShift: range(4, 0, 8, 0.1),
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <CosmicPortalDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
