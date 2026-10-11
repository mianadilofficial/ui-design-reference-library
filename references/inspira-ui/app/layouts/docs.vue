<script lang="ts" setup>
import "dialkit/styles.css";

const route = useRoute();
const isRoot = isRootPage();
const docsPageUi = useDocsPageUi();

const isComponentsIndex = computed(
  () => route.path.split("/").filter(Boolean).at(-1) === "components",
);
</script>

<template>
  <UMain class="bg-default relative -mt-16 pt-16">
    <UContainer class="relative">
      <div
        v-if="isComponentsIndex"
        class="border-default/70 min-h-[calc(100dvh-var(--ui-header-height))] border-x"
      >
        <slot />
      </div>
      <UPage
        v-else
        :key="route.fullPath"
        :ui="isRoot ? undefined : docsPageUi.shell"
      >
        <template #left>
          <UPageAside
            v-if="!isRoot"
            class="lg:top-[var(--ui-header-height)] lg:ms-0 lg:max-h-[calc(100dvh-var(--ui-header-height))] lg:px-5 lg:py-6"
          >
            <DocsAsideLeftTop />
            <DocsAsideLeftBody />
          </UPageAside>
          <UPageAside
            v-else
            class="lg:top-[var(--ui-header-height)] lg:max-h-[calc(100vh-var(--ui-header-height))]"
          >
            <DocsAsideLeftTop />
          </UPageAside>
        </template>
        <slot />
      </UPage>
    </UContainer>
  </UMain>
</template>
