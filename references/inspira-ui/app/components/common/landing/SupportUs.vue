<template>
  <div class="flex h-full flex-col">
    <div class="p-6 sm:p-8 lg:p-10">
      <div class="flex items-start justify-between gap-6">
        <div>
          <h3 class="text-highlighted text-2xl leading-tight font-semibold tracking-[-0.03em]">
            Keep Inspira UI growing.
          </h3>
        </div>
        <UIcon
          name="i-lucide-heart"
          class="text-toned size-5 shrink-0"
        />
      </div>

      <p class="text-muted mt-4 max-w-md text-sm leading-6 text-pretty">
        Sponsorship keeps docs, examples, bug fixes, and new Vue/Nuxt components moving.
      </p>
    </div>

    <NuxtLink
      to="https://github.com/sponsors/rahul-vashishtha"
      target="_blank"
      rel="noopener noreferrer"
      class="group border-default/70 bg-default text-highlighted hover:bg-elevated/35 focus-visible:ring-primary mt-auto flex min-h-20 items-center justify-between border-t px-6 text-sm font-medium transition-colors duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] focus-visible:ring-2 focus-visible:outline-none focus-visible:ring-inset motion-reduce:transition-none sm:px-8 lg:px-10"
    >
      Become a sponsor
      <UIcon
        name="i-lucide-arrow-up-right"
        class="size-4 transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 motion-reduce:transition-none"
      />
    </NuxtLink>
  </div>
</template>
