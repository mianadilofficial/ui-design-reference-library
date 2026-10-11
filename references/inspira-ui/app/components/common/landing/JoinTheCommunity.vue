<script lang="ts" setup>
const links = [
  {
    icon: "i-simple-icons-discord",
    title: "Discord",
    description: "Ask questions and share work.",
    to: `https://discord.gg/Xbh5DwJRc9`,
    target: "_blank",
  },
  {
    icon: "i-simple-icons-x",
    title: "X",
    description: "Latest release updates.",
    to: `https://x.com/rahulv_dev`,
    target: "_blank",
  },
  {
    icon: "i-simple-icons-bluesky",
    title: "Bluesky",
    description: "Project notes and updates.",
    to: `http://bsky.app/profile/inspira-ui.com`,
    target: "_blank",
  },
  {
    icon: "i-simple-icons-github",
    title: "GitHub",
    description: "Source, issues, and PRs.",
    to: `https://github.com/unovue/inspira-ui`,
    target: "_blank",
  },
];
</script>

<template>
  <div class="flex h-full flex-col">
    <div class="flex items-start justify-between gap-6 p-6 sm:p-8 lg:p-10">
      <div>
        <h3 class="text-highlighted text-2xl leading-tight font-semibold tracking-[-0.03em]">
          Stay close to the project.
        </h3>
        <p class="text-muted mt-3 max-w-md text-sm leading-6 text-pretty">
          Follow the latest updates, ask questions, report issues, and share what you build.
        </p>
      </div>
      <UIcon
        name="i-lucide-users-round"
        class="text-toned size-5 shrink-0"
      />
    </div>

    <div class="border-default/70 bg-border/70 mt-auto grid gap-px border-t sm:grid-cols-2">
      <NuxtLink
        v-for="link in links"
        :key="link.to"
        :to="link.to"
        :target="link.target"
        rel="noopener noreferrer"
        class="group bg-default hover:bg-elevated/35 focus-visible:ring-primary flex min-h-20 items-center justify-between gap-4 px-6 transition-colors duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] focus-visible:ring-2 focus-visible:outline-none focus-visible:ring-inset motion-reduce:transition-none sm:px-8 lg:px-10"
      >
        <div class="flex items-center gap-4">
          <UIcon
            :name="link.icon"
            class="text-toned size-4 shrink-0"
          />
          <div class="py-3">
            <p class="text-highlighted text-sm font-medium">
              {{ link.title }}
            </p>
            <p class="text-muted mt-0.5 text-xs leading-5">
              {{ link.description }}
            </p>
          </div>
        </div>
        <UIcon
          name="i-lucide-arrow-up-right"
          class="text-toned size-4 shrink-0 transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 motion-reduce:transition-none"
        />
      </NuxtLink>
    </div>
  </div>
</template>
