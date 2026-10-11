<script setup lang="ts">
const appConfig = useAppConfig();
const site = useSiteConfig();

const { localePath, isEnabled, locales } = useDocusI18n();

const links = computed(() =>
  appConfig.github && appConfig.github.url
    ? [
        {
          icon: "i-simple-icons-github",
          to: appConfig.github.url,
          target: "_blank",
          "aria-label": "GitHub",
        },
      ]
    : [],
);
</script>

<template>
  <UHeader
    :ui="{
      root: 'border-b border-default/70 bg-default/85 backdrop-blur-xl',
      container: 'gap-4',
      left: 'lg:flex-1 flex items-center gap-2',
      center: 'hidden h-full flex-1 justify-center lg:flex',
      right: 'flex items-center justify-end lg:flex-1 gap-px',
      title:
        'transition-opacity duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] hover:opacity-75 active:opacity-60 motion-reduce:transition-none',
      toggle: 'lg:hidden',
      body: 'bg-default/90 p-4 backdrop-blur-xl sm:p-6',
    }"
    :to="localePath('/')"
    :title="appConfig.header?.title || site.name"
    mode="drawer"
  >
    <AppHeaderNav />

    <template #title>
      <AppHeaderLogo class="h-6 w-auto shrink-0" />
      <span class="text-highlighted hidden text-sm font-semibold tracking-[-0.02em] sm:inline">
        Inspira UI
      </span>
    </template>

    <template #right>
      <template v-if="isEnabled && locales.length > 1">
        <ClientOnly>
          <LanguageSelect />

          <template #fallback>
            <div class="bg-elevated/50 size-11 animate-pulse" />
          </template>
        </ClientOnly>

        <USeparator
          orientation="vertical"
          class="h-8"
        />
      </template>

      <UContentSearchButton
        tooltip
        aria-label="Search documentation"
        class="hover:bg-elevated/60 size-11 rounded-none transition-[transform,background-color] duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] active:scale-[0.94] motion-reduce:transition-none lg:size-9"
        :ui="{ leadingIcon: 'size-4' }"
      />

      <ClientOnly>
        <UColorModeButton
          color="neutral"
          variant="ghost"
          class="hover:bg-elevated/60 size-11 rounded-none transition-[transform,background-color] duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] active:scale-[0.94] motion-reduce:transition-none lg:size-9"
        />

        <template #fallback>
          <div class="bg-elevated/50 size-11 animate-pulse lg:size-9" />
        </template>
      </ClientOnly>

      <template v-if="links?.length">
        <UButton
          v-for="(link, index) of links"
          :key="index"
          v-bind="{ color: 'neutral', variant: 'ghost', ...link }"
          class="hover:bg-elevated/60 size-11 rounded-none transition-[transform,background-color] duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] active:scale-[0.94] motion-reduce:transition-none lg:size-9"
          :ui="{ leadingIcon: 'size-4' }"
        />
      </template>
    </template>

    <template #toggle="{ open, toggle }">
      <IconMenuToggle
        :open="open"
        class="rounded-none lg:hidden"
        @click="toggle"
      />
    </template>

    <template #body>
      <AppHeaderBody />
    </template>
  </UHeader>
</template>
