<template>
  <div class="lg:col-span-7">
    <div class="flex items-start justify-between gap-6 px-1 py-8 sm:px-6 sm:py-10">
      <div>
        <h3 class="text-highlighted text-3xl leading-tight font-semibold tracking-[-0.03em]">
          Project activity.
        </h3>
        <p class="text-muted mt-3 max-w-xl text-sm leading-6 text-pretty">
          Check recent contributions, issues, and pull requests without leaving the docs.
        </p>
      </div>
      <UIcon
        name="i-lucide-activity"
        class="text-toned size-5 shrink-0"
      />
    </div>

    <div class="border-default/70 bg-muted/20 border-t p-3 sm:p-6">
      <NuxtImg
        class="mx-auto aspect-[16/7] w-full object-contain"
        src="https://repobeats.axiom.co/api/embed/da99e5e9c8ddaaff68b7f57b56ae21d5e0ea2ed2.svg"
        alt="Inspira UI repository activity chart"
        width="960"
        height="420"
        loading="lazy"
      />
    </div>
  </div>
</template>
