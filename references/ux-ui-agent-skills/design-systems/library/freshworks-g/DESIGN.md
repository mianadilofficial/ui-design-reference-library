---
version: alpha
name: Freshworks
category: "Product & SaaS"
description: "Freshworks.com home: warm off-white #f7f7f4 canvas with full-black #000000 bands, Lora serif headlines (72px/80px, with bold-italic emphasis words), Inter and Roboto UI text in #1d2026 and #6c6c6a, black 9999px pill 'Get a demo' buttons, 12px-radius media cards and saturated testimonial panels in #ffb42d, #ff574a, #eb3da7 and #73bc29."
colors:
  canvas: "#f7f7f4"
  page-body: "#ffffff"
  ink: "#1d2026"
  ink-muted: "#6c6c6a"
  ink-strong: "#111111"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-inverse: "#000000"
  surface-soft: "#efefec"
  nav-bg: "#f7f7f4fc"
  hairline: "#cfcfcd"
  ink-on-dark-muted: "#dadada"
  accent-yellow: "#ffb42d"
  accent-red: "#ff574a"
  accent-pink: "#eb3da7"
  accent-green: "#73bc29"
typography:
  display:
    fontFamily: Lora, Georgia, "Times New Roman", serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 80px
  display-mobile:
    fontFamily: Lora, Georgia, "Times New Roman", serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
  section:
    fontFamily: Lora, Georgia, "Times New Roman", serif
    fontSize: 56px
    fontWeight: 400
    letterSpacing: "-1.12px"
  subheading:
    fontFamily: Lora, Georgia, "Times New Roman", serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.48px"
  eyebrow:
    fontFamily: Inter, "Helvetica Neue", Arial, sans-serif, Lora, Georgia, "Times New Roman", serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27.99px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  nav:
    fontFamily: Roboto, "Helvetica Neue", "Arial Nova", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button-sm:
    fontFamily: Roboto, "Helvetica Neue", "Arial Nova", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 24px
  xl: 30px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.lg}"
    padding: 12px 16px
    height: 48px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    boxShadow: rgb(228, 228, 225) 0px -1px 0px 0px inset
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.25) 0px -12px 16px 0px
  testimonial-card:
    backgroundColor: "{colors.accent-yellow}"
    textColor: "{colors.ink-strong}"
  dark-band:
    backgroundColor: "{colors.surface-inverse}"
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
---

# Freshworks

## Overview

This file documents the Freshworks home page at `https://www.freshworks.com/` (title "AI-Powered Customer & Employee Service Software | Freshworks"). The page alternates warm off-white and pure black bands. It opens with a thin announcement bar ("Lead the next era of IT | Join us Nov. 12 | Register now"), a 72px header (logo, "Products", "AI Platform", "Resources", "Pricing", then "Start for free" and a black "Get a demo" pill), and a hero: "Turn operational complexity into *coordinated action*" set in Lora with the last two words in bold italic, an Inter paragraph, two pill buttons, a "Trusted by 74,000+ businesses worldwide" logo strip, and a particle-swarm illustration in yellow, orange and magenta on the right.

A black band follows ("Unified platform for *IT & employee service*" with tabbed features, a "77% faster resolution" stat and an AI chat mock-up under "AI agents *that act*"). Back on off-white, "Chosen by agile teams. *Operating at scale.*" shows a carousel of tall testimonial panels in saturated yellow, red, pink and green; "Built to work with *your ecosystem*" shows integration logos as rounded tiles; "Trusted by *experts*" lists analyst badges (Gartner, Forrester, ITIL); and a black closing card ("Bring service and operations together") repeats the two CTAs before the footer.

Imagery is sparse and abstract: the hero and closing card use a glowing particle ribbon on transparent or black ground, the integration section uses real third-party app icons as rounded square tiles, and the testimonial panels pair a duotone photo strip with the customer's logo. The voice is editorial-enterprise: a classic serif with italic emphasis against plain sans-serif UI, crisp black-and-white contrast, and colour reserved for the illustration and the customer panels.

## Colors

Backgrounds by area: `#f7f7f4` (11052), `#000000` (6339), `#ffb42d` (440), `#ff574a`, `#eb3da7`, `#73bc29` (111 each), `#f7f7f4fc` (92), `#efefec` (61). Text by characters: `#6c6c6a` (933), `#1d2026` (735), `#ffffff` (532), `#111111` (438), `#000000` (279), `#dadada` (141).

- **canvas `#f7f7f4`** — the warm off-white of the page and footer.
- **page-body `#ffffff`** — the `<body>` element's background, hidden under the canvas bands.
- **ink `#1d2026`** — headings, nav and card text. Chosen over the most frequent `#6c6c6a` because the capture's headings and nav read near-black.
- **ink-muted `#6c6c6a`** — paragraph and microcopy grey (`--semantic-default-text-microcopy: #6c6c6a`).
- **ink-strong `#111111`** — footer and testimonial text.
- **primary `#000000` / on-primary `#ffffff`** — the black pill button (`--ds-button-primary-border: #000`, `--ds-button-primary-text: #fff`).
- **surface-inverse `#000000`** — the full-bleed dark bands.
- **surface-soft `#efefec`** — the announcement bar (`--semantic-inverse-surface-bg-neutral-solid-soft`); `--ds-button-primary-text-hover` uses the same value.
- **hairline `#cfcfcd`** — card and divider boundaries (`--semantic-default-boundary-card-inactive`).
- **accent-yellow / red / pink / green** — testimonial panel fills; the pink is `--semantic-default-surface-bg-brand-accent-pink: #eb3da7`.

The header link colour `#0000ee` is the browser default link blue and is excluded.

## Typography

Fonts loaded: Lora 400/500/700/700 italic, Inter 400/500/700, Roboto 400/700. By characters: Roboto 1598, Inter 1148, Lora 592. All three are open-source Google families. The variables name Lora as the heading face (`--ds-font-family-heading: "Lora", "Georgia", "Times New Roman", serif`).

- **display** — Lora 72px / 80px, 400; the emphasised phrase is Lora 700 italic at the same size.
- **section** — Lora 56px, 400, -1.12px ("Unified platform for", "Chosen by agile teams."), again with 700-italic emphasis.
- **subheading** — Lora 24px / 28px, 400, -0.48px (tab panel titles).
- **eyebrow** — Inter 16px / 19.2px, 700 ("Trusted by 74,000+ businesses worldwide").
- **body** — Inter 18px / 27.99px, 400.
- **button** — Inter 18px / 28px, 600. **button-sm** — Roboto 16px / 24px, 600.
- **nav** — Roboto 18px / 28px, 400.

Sizes by characters: 18px (945), 16px (873), 24px (396), 14px (385), 20px (228), 12px (159), 56px (131), 80px (54), 72px (50), 40px (18). Large sizes carry negative tracking (80px/-1.6px, 56px/-1.12px, 24px/-0.48px).

## Layout

Desktop capture: 1280px wide, 5944px tall. Content runs from x=48 to x=1232 (48px side margins). The hero text column spans x=48 to x=666 with the illustration to the right. The first black band is 915px tall; the off-white lower section is 3523px. The testimonial carousel shows one wide yellow panel beside narrower colour panels. The header shows 7 visible links. The root variables carry a responsive spacing system (`--responsive-desktop-padding-sub-section-2xs: 12px`, `--responsive-tablet-padding-section-xl: 56px`, `--responsive-tablet-padding-section-4xl: 80px`, `--responsive-mobile-padding-section-l: 40px`) and paragraph-spacing tokens (`--ds-h2-paragraph-spacing: 80px`).

## Elevation & Depth

The page relies on contrast rather than shadow. Measured shadows: the header's bottom hairline `rgb(228, 228, 225) 0px -1px 0px 0px inset`, and `rgba(0, 0, 0, 0.25) 0px -12px 16px 0px` on stacked 12px-radius media cards (an upward shadow that separates layered cards). Focus on the black button is measured as `2px solid rgb(57, 125, 203)` with a 3px white ring.

## Shapes

Measured radii: 12px (13 — media cards), 9999px and 999px (pills), 24px (4 — outlined and secondary buttons), 30px (2), 8px, 4px. The variables add `--ds-radius-xs: 4px`, `--ds-radius-l: 16px`, `--ds-radius-3xl: 40px`, `--ds-accordion-item-radius: 16px` and `--ds-button-radius-pill: 9999px`.

## Components

- **button-primary** — "Get a demo": black fill and border, white Inter 18px/600, 9999px pill, padding 12px 16px, 48px tall.
- **button-secondary** — "Start for free": transparent with 1px black border, black Roboto 16px/600, 24px radius, 48px tall. The variables give it a translucent surface `--ds-button-secondary-surface: #f7f7f466`.
- **nav** — near-opaque `#f7f7f4fc` bar with an inset bottom hairline; links in `#1d2026`. Header text links fade to opacity 0.72 on hover (measured on "Contact Sales" and "Login").
- **card** — 12px-radius media cards (500×500 and 438×438) with the upward shadow.
- **testimonial-card** — saturated panels; the open panel holds a quote in `#111111`, a name and title, "Read the story" and a "~2,000" stat at 40px/700.
- **dark-band** — black sections with white Lora headlines and tab buttons whose labels move from 75% white to full white on hover.
- **footer** — off-white, app-store badges, contact block, link columns ("Company", "Support & Success", "Products").

## Design System Architecture

Freshworks publishes Crayons (https://crayons.freshworks.com/), "a design library for developers who build apps for us", with its source at https://github.com/freshworks/crayons; it serves marketplace app builders, and its page does not state the marketing site's fonts or colours. The marketing site ships its own token layer of about 400 root variables in three tiers: `--semantic-*` (colour roles such as `--semantic-default-text-microcopy`, `--semantic-default-boundary-card-inactive`), `--responsive-{desktop|tablet|mobile}-*` (type and padding per breakpoint) and `--ds-*` component tokens (`--ds-button-primary-*`, `--ds-accordion-*`, `--ds-radius-*`).

## Do's and Don'ts

- Do pair a Lora headline with one bold-italic emphasis phrase.
- Do alternate `#f7f7f4` and `#000000` bands.
- Do use black pills for the primary action and an outlined button beside it.
- Do keep colour for illustration and customer panels.
- Don't set UI text in Lora; buttons, nav and body are Inter/Roboto.
- Don't use pure white as the page background; the canvas is warm `#f7f7f4`.
- Don't add drop shadows to buttons.

## Responsive Behavior

Measured at 390px: the hero headline drops from 72px/80px to 48px/52.8px; body copy from 18px/27.99px to 16px/24.88px. The mobile primary CTA measured as "Get a demo" in Roboto 18px/700, 24px radius, 50px tall and 278px wide. The mobile header showed 2 visible links and no menu toggle was detected. Mobile font sizes by characters: 16px, 14px, 18px, 20px, 12px, 36px, 24px, 40px, 48px, 56px. The root variables declare separate desktop, tablet and mobile type and padding values; their breakpoints were not measured.

## Iteration Guide

1. Set the canvas to `#f7f7f4` and plan alternating black bands.
2. Write headlines in Lora with an italic-bold emphasis phrase.
3. Place `button-primary` and `button-secondary` side by side.
4. Use `ink` for headings and `ink-muted` for paragraphs.
5. Add colour only through illustration and `testimonial-card` panels.
