<script lang="ts" setup>
interface Props {
  isDev?: boolean;
  packageName?: string | string[];
}

const { isDev = false, packageName = "" } = defineProps<Props>();

const allPackageName = computed(
  () => `${Array.isArray(packageName) ? packageName.join(" ") : packageName}`,
);

const items = ref([
  {
    label: "pnpm",
    icon: "vscode-icons:file-type-pnpm",
    command: `pnpm add ${isDev ? "-D " : ""}${allPackageName.value}`,
  },
  {
    label: "npm",
    icon: "devicon:npm",
    command: `npm install ${isDev ? "-D " : ""}${allPackageName.value}`,
  },
  {
    label: "yarn",
    icon: "vscode-icons:file-type-yarn",
    command: `yarn add ${isDev ? "-D " : ""}${allPackageName.value}`,
  },
  {
    label: "bun",
    icon: "devicon:bun",
    command: `bun add ${isDev ? "-d " : ""}${allPackageName.value}`,
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
