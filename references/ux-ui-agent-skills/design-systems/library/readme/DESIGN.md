---
version: alpha
name: ReadMe
category: "Developer Tools & IDEs"
description: "ReadMe's marketing site pairs an editorial serif (STKBureauSerif 64px/400 hero, 24px section heads) with STKBureauSans UI text, Geist Mono eyebrows and an Inter/system body stack; a deep-navy #000342 hero, white #ffffff canvas, electric-blue #012bff pill CTAs (9999px) and 8px-radius product cards with a layered hairline shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#000342"
  ink: "#000000d6"
  primary: "#012bff"
  on-primary: "#ffffff"
  surface-dark: "#131313"
  ink-on-dark-soft: "#e1e4e8"
  ink-navy: "#273584"
  ink-muted: "#04040480"
  ink-body: "#030303a3"
  hairline-navy: "#00135d"
typography:
  display:
    fontFamily: STKBureauSerif, "STKBureauSerif Fallback"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: STKBureauSerif, "STKBureauSerif Fallback"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.36px"
  heading:
    fontFamily: STKBureauSerif, "STKBureauSerif Fallback"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.24px"
  body:
    fontFamily: "-apple-system-, \"system-ui\", Inter, \"Inter Fallback\", system-ui, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: STKBureauSans, "STKBureauSans Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: "-apple-system-, \"system-ui\", Inter, \"Inter Fallback\", system-ui, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
  eyebrow-mono:
    fontFamily: Geist Mono, "Geist Mono Fallback", monospace
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 8.8px
  xl: 10px
  2xl: 13.2px
  3xl: 14px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px
    height: 56px
  button-primary-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px
    height: 36px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 8px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 4px
    height: 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 8px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.02)
      0px 1px 2px 0px, rgba(0, 0, 0, 0.02) 0px 2px 4px 0px, rgba(0, 0, 0, 0.02) 0px 8px 16px 0px, rgba(0, 0, 0, 0.03) 0px 32px 44px -12px
  footer:
    textColor: "{colors.ink-muted}"
    padding: 0px 0px 168px
---

# ReadMe

## Overview

ReadMe (readme.com) sells hosted API documentation and developer hubs, and its home page is built to look like the product it sells. The page title measured on the live site is "ReadMe · Developer-friendly API documentation", and the hero headline reads "Documentation built for agents", with the word "agents" set in a lighter blue and split into individually wrapped letters in the DOM. Directly under the headline sits a prompt bar ("Sign up via agent" with a monospace prompt and a blue "Copy prompt" pill), and below that the hero opens into a live-looking product frame: a docs sidebar (Getting started, ReadMe AI, Writing Docs, Syncing Docs, Version Control), a "Welcome to ReadMe" article with Quick Start and API Reference cards, an "Ask anything about ReadMe…" bar with a blue "Book a demo" pill, and an Assistant chat panel.

The overall mood is editorial-technical. A bookish serif carries every headline, a neutral sans carries the interface, and Geist Mono labels such as "02. OUR CUSTOMERS" number the sections like a technical manual. The page alternates between a white canvas with a faint grid of boxed cells and very deep navy bands (#000342) that read almost black, decorated with small blue square nodes and thin circuit-like lines. Customer logos (NVIDIA, Voyage AI, Asana, Visa) sit in a light ruled grid. The page is long — 21,256px of scroll height at a 1280px viewport — and is mostly product screenshots, code panes and feature grids rather than photography.

The voice is confident and concise: "Build docs that developers love and AI can actually read", "Trusted by teams who know good docs drive adoption", "Everything you need to create the docs". Italic serif words ("adoption", "great docs", "create the docs") are the main typographic flourish.

## Colors

The palette is three-part: white, deep navy and an electric blue action color, with greys for text.

- **Canvas `#ffffff`** — the body background and the dominant page color in the white sections (about 35% of the capture's pixels).
- **Page-largest `#000342`** — the deep navy that fills the hero frame and the long dark middle of the page; it covers the largest measured background area and about 47% of the capture. The site's own variable `--color-hero-surface-background` names this role.
- **Primary `#012bff`** — the fill of every primary pill: "Get started" in the header, "Copy prompt", "Book a demo", "Build site". Text on it is **on-primary `#ffffff`**.
- **Ink `#000000d6`** — black at 84% alpha, the most-read dark text: navigation, section headings and card titles. The site exposes it as `--color-section-text`.
- **Ink-body `#030303a3`** — a lighter alpha black for paragraph copy.
- **Ink-muted `#04040480`** — 50% black for footer links and secondary labels.
- **Ink-on-dark-soft `#e1e4e8`** — the light grey used for long copy on the navy bands; pure white `#ffffff` is the most-read text color overall because of those dark sections.
- **Ink-navy `#273584`** — a muted navy text color used for faint labels inside the hero and dark sections.
- **Hairline-navy `#00135d`** — the measured border color around panels on the navy bands.
- **Surface-dark `#131313`** — a near-black band near the bottom (the "Enterprise-ready docs, out of the box" section and footer area); the site's variable `--color-neutral-background` holds the same value.

The shipped stylesheet defines a full twelve-step `--color-primary-*` scale in Display-P3 plus parallel orange, green, pink and purple ramps, and `--color-accent: #fff67c`; only the colors above were measured as visible fills or text on the home page.

## Typography

ReadMe uses three licensed or open families plus a system stack, all loaded on the page:

- **STKBureauSerif** (400, with a 400 italic) — all display and section headings. The hero `display` is 64px/64px with -0.64px tracking; section headings (`heading`) are 24px/32px with -0.24px tracking. Other measured serif sizes on the page are 44px and 32px, each with tracking of -1% of the size (-0.44px, -0.32px).
- **STKBureauSans** (300 and 400) — the most-used family by character count. It sets navigation, buttons (`button`, 14px/20px, weight 400) and the footer (14px, weight 300, 0.07px tracking).
- **Geist Mono** — code panes, terminal mock-ups and the numbered eyebrows. The `eyebrow-mono` token reproduces the site's `--text-decorative-mono-eyebrow` variable: 12px, weight 500, 16px line height, 0.24px tracking.
- **Inter / system stack** — paragraph `body` copy at 14px/24px and form fields (`input`, 13px/20px), declared as `-apple-system-, "system-ui", Inter, "Inter Fallback", system-ui, "Helvetica Neue", Arial, sans-serif`.

Weights are light: 300 and 400 account for most characters, with 450, 500 and 550 used sparingly. Hierarchy comes from the serif/sans switch and size, never from bold weights. Substitutes if the STK Bureau faces are unavailable: a sharp transitional serif for headings (e.g. Newsreader or Source Serif) and a neutral grotesk for UI text; keep Geist Mono, which is open source.

## Layout

The desktop page is measured at a 1280px viewport. The header is a 100px band with six visible links centered around the ReadMe wordmark (Product, Solutions, Docs | Resources, Enterprise, Pricing) and "Log in" plus the blue "Get started" pill on the right. Content in the hero band spans from 24px to 1256px. Sections are framed by a faint ruled grid that draws visible cell outlines behind the content, giving the white bands a blueprint feel.

Section rhythm is generous: the most frequent paddings are 4px, 20px, 18px, 6px and 8px inside components, and 56px appears 46 times for larger section insets; gaps cluster at 4px, 12px, 16px, 8px and 20px, with 112px gaps between major blocks. Feature grids show up to four card columns on desktop. The spacing scale in the frontmatter lists the small steps from 1px to 16px that dominate component internals.

## Elevation & Depth

Depth is quiet. The product cards use a single layered shadow stack: a 1px ring at `rgba(0, 0, 0, 0.04)`, then 1px/2px, 2px/4px and 8px/16px blurs at 2% black, and a 32px/44px blur at 3% black offset -12px — a soft, diffuse lift that reads as a hairline plus a faint halo. A heavier shadow (`rgba(0, 0, 0, 0.06) 0px 1px 6px` with `rgba(0, 0, 0, 0.16) 0px 2px 32px`) was measured once. On the navy bands, depth comes from the `hairline-navy` borders and glowing blue square nodes rather than shadows. The hero frame itself is a large rounded navy panel that the product screenshot overlaps at its bottom edge, creating the main layering moment on the page.

## Shapes

The shape language mixes pill buttons with softly rounded rectangles:

- **Pill (9999px)** — every CTA, nav link hover target and the prompt bar; it is the most frequent radius on the page (119 elements).
- **8.8px** and **6px** — the next most common radii, on product-UI chips, inputs and small cards.
- **8px**, **16px**, **4px** — cards and panels.
- **13.2px**, **14px**, **10px** — less frequent container radii. Further radii (17.6px, 20px, 24px, 28px, 22px) were measured on a handful of elements and are not in the token set.

Small status tags ("New", "GET", "POST") are pill shaped. Icons come from Font Awesome (Pro, Duotone and Brands faces are loaded) and are thin-stroked.

## Components

- **button-primary** — `#012bff` fill, white STKBureauSans 14px/20px text, pill radius, 8px padding. The hero "Book a demo" measures 56px tall; header "Get started" is 32px with 6px padding.
- **button-primary-compact** — the same styling at 36px height for "Copy prompt", "Build site" and the second "Book a demo".
- **Secondary ghost button** — "Sign up via agent" is a white pill with 84%-black text and border; on hover its background shifts to 2% black (measured hover state).
- **nav / nav-link** — 84%-black STKBureauSans text, pill hover area with 6px 8px padding; dropdown chevrons on Product, Solutions and Resources.
- **text-input** — the product mock's search and ask fields use 13px Inter/system text at 20px line height with 0px 4px padding.
- **card** — white, 8px padding, the layered hairline shadow described above; used for Quick Start / API Reference tiles and feature cards with a small blue icon, a title and a muted description.
- **Eyebrow labels** — Geist Mono, uppercase, numbered ("02. OUR CUSTOMERS"), blue, inside a ruled cell.
- **footer** — 50%-black text, 168px bottom padding, columns of product links with "NEW" and "AI" tags.

Third-party widgets visible in the capture — the floating "Introducing Restless" video card and the blue chat bubble — are promotional or support overlays and are not part of this token set.

## Design System Architecture

ReadMe has no public design system or brand guideline page that I could find: https://readme.com/brand returns 404, https://readme.com/about links to no brand or press kit, and the public GitHub organisation https://github.com/readmeio lists code projects (markdown, rdme, oas, api) but no design-token or component-library repository. The de-facto system is visible in the shipped CSS: a Tailwind v4-style build (`--tw-*` variables) with about 400 root custom properties. Colors are organised as numbered ramps (`--color-primary-1` … `--color-primary-12`, plus blue, green, orange, pink, purple and neutral), semantic roles (`--color-section-text`, `--color-border-solid-muted`, `--color-background-solid-faint`, `--color-icon-solid-loud`) and a separate hero palette (`--color-hero-surface-background`, `--color-hero-text-loud`, `--color-hero-fill-default`). Type is tokenised by role: `--text-heading-h2` (56px) through `--text-heading-h6` (20px), `--text-body-default` (14px, weight 300), `--text-body-large` (16px), `--text-body-detail` (12px) and the `--text-decorative-mono-*` family for code and eyebrows.

## Do's and Don'ts

**Do**
- Set headlines in STKBureauSerif at weight 400 with tight negative tracking, and use the italic for one emphasised word.
- Keep every action a `#012bff` pill with white 14px sans text.
- Alternate white grid sections with deep `#000342` navy bands.
- Use Geist Mono for numbered eyebrows, prompts and code.
- Use alpha blacks (`#000000d6`, `#030303a3`, `#04040480`) for the text hierarchy instead of new grey hexes.
- Show the product UI itself — sidebars, cards, chat panels — as the main imagery.

**Don't**
- Don't bold the serif headings; the site's hierarchy uses weight 300–400.
- Don't square off buttons or use a second action color.
- Don't add heavy drop shadows; the measured card shadow is a 4% ring plus 2–3% blurs.
- Don't treat the promo video card or the chat bubble as brand components.
- Don't use the Display-P3 accent ramps (orange, pink, purple) as primary surfaces; they were not measured as page fills.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero heading drops from 64px to 36px with a 36px line height and -0.36px tracking (`display-mobile`); the "Trusted by teams…" section heading drops from 24px to 20px/28px with -0.2px tracking; the "Copy prompt" pill stays 36px tall but stretches to 268px wide; the header measures 76px tall (100px on desktop) with 2 header links visible and no menu toggle detected; up to 5 card columns were counted. Mobile font sizes recorded are 12px, 16px, 14px, 13px, 24px, 20px, 15px, 32px, 9px and 18px. Breakpoints, navigation behaviour and section reordering were not measured.

## Iteration Guide

1. Start with the canvas (`#ffffff`) and one navy band (`#000342`) so the white/navy rhythm is present before adding detail.
2. Set the hero headline in `display` (64px serif) and put one word in a lighter blue or italic; check it scales to `display-mobile` (36px).
3. Add a single `button-primary` pill in `#012bff`; check every other CTA reuses it rather than introducing new fills.
4. Build section heads as a Geist Mono `eyebrow-mono` label above a 24px `heading`.
5. Lay feature content in `card` tiles with the layered hairline shadow and 8px–8.8px radii.
6. Verify text colors against the alpha-black scale and `#e1e4e8` on navy; compare with the live page at https://readme.com before shipping.
