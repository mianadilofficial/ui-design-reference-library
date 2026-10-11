<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  border: select("dashed", ["dashed", "solid"]),
  density: select("comfortable", ["compact", "comfortable"]),
  showGrid: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <FileUploadDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
