<template>
  <div class="bg-border/70 grid gap-px lg:grid-cols-12">
    <div class="bg-default p-6 sm:p-8 lg:col-span-4 lg:p-10">
      <div>
        <h3 class="text-highlighted text-3xl leading-tight font-semibold tracking-[-0.03em]">
          Amazing people behind Inspira UI.
        </h3>
        <p class="text-muted mt-3 max-w-md text-sm leading-6 text-pretty">
          Thanks to everyone who helped Inspira UI grow through code, docs, examples, fixes, and
          ideas.
        </p>
      </div>
      <NuxtLink
        to="https://github.com/unovue/inspira-ui/graphs/contributors"
        target="_blank"
        rel="noopener noreferrer"
        class="group text-highlighted focus-visible:ring-primary mt-7 inline-flex min-h-11 items-center gap-3 text-sm font-medium focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:outline-none"
      >
        View contributors
        <UIcon
          name="i-lucide-arrow-up-right"
          class="size-4 transition-transform duration-300 ease-[cubic-bezier(0.32,0.72,0,1)] group-hover:translate-x-0.5 group-hover:-translate-y-0.5 motion-reduce:transition-none"
        />
      </NuxtLink>
    </div>

    <div class="bg-default flex items-center p-6 sm:p-8 lg:col-span-8 lg:p-10">
      <NuxtImg
        class="mx-auto aspect-16/6 w-full max-w-4xl object-contain sm:aspect-16/5"
        src="https://contrib.rocks/image?repo=unovue/inspira-ui"
        alt="Inspira UI contributors"
        width="960"
        height="300"
        loading="lazy"
      />
    </div>
  </div>
</template>
