<script lang="ts" setup>
import { useDialKit } from "dialkit/vue";
import { select } from "../../../common/dial-kit/dialkit-controls";

const config = useDialKit("", {
  selectedId: select("1", [
    { label: "Root", value: "1" },
    { label: "Button.vue", value: "4" },
    { label: "useTheme.ts", value: "11" },
    { label: "index.vue", value: "16" },
    { label: "nuxt.config.ts", value: "22" },
  ]),
  expanded: select("full", ["minimal", "components", "full"]),
  direction: select("ltr", ["ltr", "rtl"]),
  indicator: true,
});
</script>

<template>
  <ComponentPlayground>
    <template #config>
      <DialKitConfigPanel />
    </template>

    <template #component>
      <FileTreeDemo
        :key="JSON.stringify(config)"
        v-bind="config as any"
      />
    </template>
  </ComponentPlayground>
</template>
