<script lang="ts" setup>
interface Props {
  componentId: string;
}

const { componentId } = defineProps<Props>();

const command = `shadcn-vue@latest add "https://registry.inspira-ui.com/${componentId}.json"`;

const items = ref([
  {
    label: "pnpm",
    icon: "vscode-icons:file-type-pnpm",
    command: `pnpm dlx ${command}`,
  },
  {
    label: "npm",
    icon: "devicon:npm",
    command: `npx ${command}`,
  },
  {
    label: "yarn",
    icon: "vscode-icons:file-type-yarn",
    command: `yarn dlx ${command}`,
  },
  {
    label: "bun",
    icon: "devicon:bun",
    command: `bunx ${command}`,
  },
]);

const codeItems = computed(() =>
  items.value.map((pm) => ({
    label: pm.label,
    icon: pm.icon,
    language: "bash",
    code: pm.command,
  })),
);
</script>

<template>
  <RuntimeCodeGroup
    sync="package-manager"
    :items="codeItems"
  />
</template>
