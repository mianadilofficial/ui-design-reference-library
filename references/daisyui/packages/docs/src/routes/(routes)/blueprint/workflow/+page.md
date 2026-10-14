---
title: How Blueprint MCP Works
desc: See how six Blueprint MCP tools give your LLM the resources it needs to build better daisyUI interfaces.
layout: docs
---

<script>
  import Translate from "$components/Translate.svelte"
</script>

<div class="flex flex-wrap items-center justify-center gap-2">
  <img src="https://img.daisyui.com/images/emoji/1280_mage_1f9d9.png" alt="Setup Expert" class="m-0! size-16 object-contain" width="40" height="40" />
  <img src="https://img.daisyui.com/images/emoji/1040_woman-police-officer_1f46e-200d-2640-fe0f.png" alt="Rules Enforcer" class="m-0! size-16 object-contain" width="40" height="40" />
  <img src="https://img.daisyui.com/images/emoji/0960_artist_1f9d1-200d-1f3a8.png" alt="Creative Director" class="m-0! size-16 object-contain" width="40" height="40" />
  <img src="https://img.daisyui.com/images/emoji/0800_woman-teacher_1f469-200d-1f3eb.png" alt="Page Architect" class="m-0! size-16 object-contain" width="40" height="40" />
  <img src="https://img.daisyui.com/images/emoji/0880_technologist_1f9d1-200d-1f4bb.png" alt="Component Syntax Expert" class="m-0! size-16 object-contain" width="40" height="40" />
  <img src="https://img.daisyui.com/images/emoji/1040_detective_1f575-fe0f.png" alt="Quality Inspector" class="m-0! size-16 object-contain" width="40" height="40" />
</div>

LLMs often produce generic AI slop by default. They can skim skill files, ignore difficult instructions, hallucinate component syntax, and settle for mediocre design. You then spend more time, effort, and tokens asking for edits.

Blueprint solves this with a guided MCP workflow. Six tools walk the LLM through the task, supply rules and resources one step at a time, and confirm the LLM understood them. The LLM then writes the code. A final inspection finds quality problems for the LLM to fix.

## 1. Setup Expert

<img src="https://img.daisyui.com/images/emoji/1280_mage_1f9d9.png" alt="Setup Expert" class="m-0! block size-48 rounded-[1rem] border border-base-300 bg-base-200 p-8 lg:float-end" width="192" height="192" loading="lazy" />

Provides project-specific setup resources:

- Framework and dependency information
- Tailwind CSS and daisyUI installation guidance
- Configuration, themes, colors, fonts, icons, and file structure

This helps the LLM work with your existing project instead of guessing its setup or adding conflicting configuration.

## 2. Rules Enforcer

<img src="https://img.daisyui.com/images/emoji/1040_woman-police-officer_1f46e-200d-2640-fe0f.png" alt="Rules Enforcer" class="m-0! block size-48 rounded-[1rem] border border-base-300 bg-base-200 p-8 lg:float-end" width="192" height="192" loading="lazy" />

Provides the complete daisyUI requirements for:

- Component implementation and syntax
- Accessibility and responsive behavior
- Themes, media, and code quality

This keeps the LLM from skimming the rules or dropping constraints once it starts coding.

## 3. Creative Director

<img src="https://img.daisyui.com/images/emoji/0960_artist_1f9d1-200d-1f3a8.png" alt="Creative Director" class="m-0! block size-48 rounded-[1rem] border border-base-300 bg-base-200 p-8 lg:float-end" width="192" height="192" loading="lazy" />

Provides design guidance for:

- Product content, audience, and user experience
- Design taste, originality, composition, color, and typography
- Components, icons, images, design trends, and motion

This gives the LLM one clear visual direction. It avoids disconnected choices and familiar AI-generated layouts.

## 4. Page Architect

<img src="https://img.daisyui.com/images/emoji/0800_woman-teacher_1f469-200d-1f3eb.png" alt="Page Architect" class="m-0! block size-48 rounded-[1rem] border border-base-300 bg-base-200 p-8 lg:float-end" width="192" height="192" loading="lazy" />

Provides a matching plan from 211 page architectures, including:

- Page purpose, sections, content order, and user goals
- Actions, navigation, and component composition
- Responsive behavior, interaction states, and edge cases

This helps the LLM plan the full page before writing markup, including states a short prompt may leave out.

## 5. Component Syntax Expert

<img src="https://img.daisyui.com/images/emoji/0880_technologist_1f9d1-200d-1f4bb.png" alt="Component Syntax Expert" class="m-0! block size-48 rounded-[1rem] border border-base-300 bg-base-200 p-8 lg:float-end" width="192" height="192" loading="lazy" />

Provides current daisyUI resources for each required component:

- Correct structure and class names
- Variants, sizes, states, and modifiers
- Rules, code snippets, and examples

This lets the LLM use maintained daisyUI syntax instead of recalling stale or invented classes from training data.

## 6. Quality Inspector

<img src="https://img.daisyui.com/images/emoji/1040_detective_1f575-fe0f.png" alt="Quality Inspector" class="m-0! block size-48 rounded-[1rem] border border-base-300 bg-base-200 p-8 lg:float-end" width="192" height="192" loading="lazy" />

Checks the finished source for:

- daisyUI syntax and rule violations
- Visual hierarchy, spacing, density, and composition
- Accessibility, responsive behavior, themes, and missing states

This gives the LLM a specific repair list. The work finishes after the LLM fixes the reported issues and verifies the result.

<div class="mt-12 flex justify-center not-prose">
  <a href="/blueprint/checkout/" class="btn btn-primary">Get Blueprint MCP</a>
</div>
