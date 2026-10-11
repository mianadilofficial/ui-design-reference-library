<script setup lang="ts">
import { useClipboard } from "@vueuse/core";

const route = useRoute();
const toast = useToast();
const runtimeConfig = useRuntimeConfig();
const { t } = useDocusI18n();
const { copy, copied } = useClipboard();

const appBaseURL = runtimeConfig.app?.baseURL || "/";
const origin = computed(() => (import.meta.client ? window.location.origin : ""));
const markdownLink = computed(() => `${origin.value}${appBaseURL}raw${route.path}.md`);

const items = computed(() => [
  [
    {
      label: t("docs.copy.link"),
      icon: "i-lucide-link",
      onSelect() {
        copy(markdownLink.value);
      },
    },
    {
      label: t("docs.copy.view"),
      icon: "i-simple-icons:markdown",
      target: "_blank",
      to: markdownLink.value,
    },
    {
      label: t("docs.copy.gpt"),
      icon: "i-simple-icons:openai",
      target: "_blank",
      to: `https://chatgpt.com/?hints=search&q=${encodeURIComponent(
        `Read ${markdownLink.value} so I can ask questions about it.`,
      )}`,
    },
    {
      label: t("docs.copy.claude"),
      icon: "i-simple-icons:anthropic",
      target: "_blank",
      to: `https://claude.ai/new?q=${encodeURIComponent(
        `Read ${markdownLink.value} so I can ask questions about it.`,
      )}`,
    },
  ],
  [
    {
      label: "Copy MCP Server URL",
      icon: "i-lucide-link",
      onSelect() {
        copy(`${origin.value}${appBaseURL}mcp`);
        toast.add({
          title: "Copied to clipboard",
          icon: "i-lucide-check-circle",
        });
      },
    },
    {
      label: "Add MCP Server",
      icon: "i-simple-icons:cursor",
      target: "_blank",
      to: "/mcp/deeplink",
    },
  ],
]);

async function copyPage() {
  const page = await $fetch<string>(`/raw${route.path}.md`);
  copy(page);
}
</script>

<template>
  <UFieldGroup size="sm">
    <UButton
      :label="t('docs.copy.page')"
      :icon="copied ? 'i-lucide-check' : 'i-lucide-copy'"
      color="neutral"
      variant="subtle"
      class="border-default/70 hover:bg-elevated/60 rounded-none border px-3 transition-colors duration-150 motion-reduce:transition-none"
      :ui="{
        leadingIcon: 'size-3.5',
      }"
      @click="copyPage"
    />

    <UDropdownMenu
      size="sm"
      :items="items"
      :content="{
        align: 'end',
        side: 'bottom',
        sideOffset: 8,
      }"
      :ui="{
        content:
          'rounded-none border border-default/80 bg-default/95 p-1 shadow-xl backdrop-blur-xl',
        group: 'p-0',
        item: 'rounded-none px-2.5 py-2 text-xs',
      }"
    >
      <UButton
        icon="i-lucide-chevron-down"
        color="neutral"
        variant="subtle"
        class="border-default/70 hover:bg-elevated/60 rounded-none border-y border-e px-2 transition-colors duration-150 motion-reduce:transition-none"
        :ui="{ leadingIcon: 'size-3.5' }"
      />
    </UDropdownMenu>
  </UFieldGroup>
</template>
