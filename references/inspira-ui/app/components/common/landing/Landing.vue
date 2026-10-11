<script lang="ts" setup>
import { Motion } from "motion-v";

const preferredMotion = usePreferredReducedMotion();
const reduceMotion = computed(() => preferredMotion.value === "reduce");
const proofInitial = computed(() => (reduceMotion.value ? false : { opacity: 0, y: 40 }));
const proofInView = { opacity: 1, y: 0 };
const proofTransition = computed(() =>
  reduceMotion.value
    ? { duration: 0 }
    : {
        duration: 0.76,
        ease: [0.16, 1, 0.3, 1],
      },
);
</script>

<template>
  <div class="text-highlighted relative isolate pb-24 sm:pb-32">
    <Hero />
    <QuickLinks />

    <Motion
      as="section"
      class="relative py-20 sm:py-24 lg:py-56"
      :initial="proofInitial"
      :while-in-view="proofInView"
      :transition="proofTransition"
      :viewport="{ once: true, amount: 0.18 }"
    >
      <div class="grid gap-8 lg:grid-cols-12 lg:items-end">
        <h2
          class="text-highlighted text-4xl leading-[0.98] font-semibold tracking-[-0.04em] text-balance sm:text-5xl lg:col-span-7"
        >
          Built in public, supported by the community.
        </h2>
        <p class="text-muted max-w-xl text-base leading-7 text-pretty lg:col-span-4 lg:col-start-9">
          Meet the people supporting the project, join the community, or help fund what comes next.
        </p>
      </div>

      <div class="border-default/70 bg-border/70 mt-14 grid gap-px border">
        <div class="grid gap-px lg:grid-cols-12">
          <JoinTheCommunity class="bg-default lg:col-span-7" />
          <SupportUs class="bg-default lg:col-span-5" />
        </div>

        <ThanksSupporters />
      </div>
    </Motion>
  </div>
</template>
