<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { shaderToyControls } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit(shaderToyControls());
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <StractiumBackgroundDemo
        :key="JSON.stringify(config)"
        v-bind="config"
      />
    </template>
  </ComponentPlayground>
</template>
