<script setup lang="ts">
const route = useRoute();
const { localePath } = useDocusI18n();

const items = computed(() =>
  [
    { label: "Getting Started", to: localePath("/getting-started") },
    { label: "Components", to: localePath("/components") },
    { label: "Changelogs", to: localePath("/changelogs") },
  ].map((item) => ({
    ...item,
    active: route.path === item.to || route.path.startsWith(`${item.to}/`),
  })),
);
</script>

<template>
  <nav
    aria-label="Primary navigation"
    class="hidden h-full items-center justify-center lg:flex"
  >
    <NuxtLink
      v-for="item in items"
      :key="item.to"
      :to="item.to"
      :aria-current="item.active ? 'page' : undefined"
      class="focus-visible:ring-primary flex h-full min-h-11 items-center border-b px-4 text-sm font-medium transition-colors duration-150 focus-visible:ring-2 focus-visible:outline-none motion-reduce:transition-none"
      :class="
        item.active
          ? 'border-primary text-highlighted'
          : 'text-muted hover:bg-elevated/40 hover:text-highlighted border-transparent'
      "
    >
      {{ item.label }}
    </NuxtLink>
  </nav>
</template>
