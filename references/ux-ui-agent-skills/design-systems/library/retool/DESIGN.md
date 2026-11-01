---
version: alpha
name: Retool
category: "Developer Tools & IDEs"
description: "Retool's homepage is a dark #151515 canvas with warm cream #e9ebdf type and pill buttons (hover #ffffff), Saans light-weight (300) headlines at 68.9231px with -0.022em tracking, PX Grotesk for small UI labels, a cream 20px-rounded AI prompt card with a deep 0px 68px 116px shadow, and #e9ebdf1f hairlines."
colors:
  canvas: "#151515"
  ink: "#e9ebdf"
  primary: "#e9ebdf"
  on-primary: "#151515"
  primary-hover: "#ffffff"
  surface-raised: "#242424"
  ink-muted: "#cbccc4"
  ink-subtle: "#b6b8af"
  ink-alpha-60: "#e9ebdf99"
  ink-dark-60: "#15151599"
  chip-bg: "#d9d9d9"
  chip-border: "#1515151f"
  blue: "#518dd2"
  paper: "#f7f8f4"
  hairline: "#e9ebdf1f"
  footer-border: "#e9ebdf33"
typography:
  display:
    fontFamily: saansFont, "saansFont Fallback", sans-serif
    fontSize: 68.9231px
    fontWeight: 300
    lineHeight: 72.3693px
    letterSpacing: "-1.51631px"
  display-mobile:
    fontFamily: saansFont, "saansFont Fallback", sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 42px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: saansFont, "saansFont Fallback", sans-serif
    fontSize: 44.9231px
    fontWeight: 300
    lineHeight: 47.1693px
    letterSpacing: "-0.449231px"
  prompt:
    fontFamily: saansFont, "saansFont Fallback", sans-serif
    fontSize: 16px
    fontWeight: 380
    lineHeight: 24px
    letterSpacing: 0.2016px
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: pxGroteskFont, "pxGroteskFont Fallback", sans-serif
    fontSize: 13.2308px
    fontWeight: 400
    lineHeight: 13.2308px
  caption:
    fontFamily: pxGroteskFont, "pxGroteskFont Fallback", sans-serif
    fontSize: 11.3846px
    fontWeight: 400
    lineHeight: 13.6615px
    letterSpacing: 0.113846px
  footer-label:
    fontFamily: pxGroteskFont, "pxGroteskFont Fallback", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
    letterSpacing: 0.12px
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 36px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 14.08px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  chip-button:
    backgroundColor: "{colors.chip-bg}"
    textColor: "{colors.ink-dark-60}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
    height: 38px
    borderColor: "{colors.chip-border}"
  prompt-card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.prompt}"
    rounded: "{rounded.2xl}"
    shadow: "rgba(0, 0, 0, 0.35) 0px 68px 116px 0px"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  announcement-chip:
    textColor: "{colors.on-primary}"
    typography: "{typography.caption}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-subtle}"
    typography: "{typography.footer-label}"
    borderColor: "{colors.footer-border}"
---

# Retool

## Overview

Retool (https://retool.com/) is a platform for building internal software; the page title is "Build internal software better, with AI. | Retool". The homepage is a dark, cinematic page: a near-black #151515 canvas, warm off-white (#e9ebdf) type in a light-weight grotesque, and big product imagery glowing in the dark.

The capture starts with a thin gradient announcement strip carrying two small chips ("A unified harness to run and govern AI agents" and "Get early access ↗"). The header holds the Retool logo, links (Solution, Audience and Resources with chevrons, Use cases, Pricing), a search icon, then "Sign in", an outlined "Book a demo" pill and a cream "Start for free" pill. The hero is a large rounded panel whose background is a tilted, dimmed collage of dashboards over a blue-to-rust gradient. In it: the headline "Secure your vibe-coded apps" in light 68.9231px type, a "NEW" chip ("Explore the new Retool app builder for free"), and a cream prompt box ("Build a simple KPI dashboard that pulls revenue and churn metrics from @Snowflake and refreshes daily.") with a "Starter prompts" selector and a blue round submit arrow; below it "Import code" and "Build with AI agents" chips and a "See what's new. Watch the film" pill.

Then: a logo grid (Philips, Pinterest, ramp, Brex, databricks, reckitt, Gong, Burger King) with small crosshair marks between cells; "Apps that mean business" over two rows of app screenshots; an outlined "View app gallery" pill; and a sequence of large rounded feature panels ("Securely connect to your production data" with "See the full list of integrations") containing product scenes and an integrations constellation on a pale lilac panel. A long stretch of the capture below the feature panels is empty canvas where scroll-driven content did not render in the static capture. The page closes with "Start today", a second prompt box over a 3D chrome rendering of the Retool mark and a hand, and a footer with a giant Retool wordmark.

The tone is concise and product-led ("Apps that mean business", "Start today").

## Colors

Retool's CSS has a raw palette (`--raw-*`) and component tokens (`--btn-*`, `--nav-items-*`, `--surface-details-*`). On the home page:

- **canvas #151515** — the page background (`--raw-dark-black-2` family; 6,847 measured units).
- **ink #e9ebdf** — the warm cream used for headlines, body text and links (the most-read colour, 2,028 characters).
- **primary #e9ebdf** — the "Start for free" pill fill (`--btn-primary-default-background: #e9ebdf`).
- **on-primary #151515** — text on cream.
- **primary-hover #ffffff** — the pill turns pure white on hover.
- **surface-raised #242424** — raised dark panels and the skip link.
- **ink-muted #cbccc4** — secondary copy (1,126 characters).
- **ink-subtle #b6b8af** — footer link text.
- **ink-alpha-60 #e9ebdf99** — 60% cream (`--surface-details-neutral-alpha-60`).
- **ink-dark-60 #15151599** — 60% black text on light chips.
- **chip-bg #d9d9d9** and **chip-border #1515151f** — the "Import code" / "Build with AI agents" chips.
- **blue #518dd2** — `--nav-items-active-selected`; the round prompt submit button.
- **paper #f7f8f4** — the lightest surface (`--raw-light-white-1` family).
- **hairline #e9ebdf1f** — 12% cream borders, the most frequent border colour (39 elements).
- **footer-border #e9ebdf33** — 20% cream divider in the footer.

The raw palette includes a full set of hues not used prominently on the home page (`--raw-yellow-primary: #eca438`, `--raw-orange-primary: #e8765e`, `--raw-pink-primary: #cc64ce`, `--raw-red-primary: #ef4444`, `--raw-purple-light: #ab8eda`, `--raw-blue-light: #71a2da`, `--raw-green-light: #6eac9c`, each with lighter/light/dark/darker steps). Colour on the page comes from imagery and gradients, not from UI fills.

## Typography

Three families are measured:

- **Saans** (`saansFont`, variable 100–900) — headlines and the prompt text (2,680 characters).
- **PX Grotesk** (`pxGroteskFont`, 400) — buttons, chips, captions and footer labels (701 characters).
- **ui-sans-serif** (the system stack) — some body paragraphs (566 characters).

Saans and PX Grotesk are licensed commercial typefaces; for substitutes use a neo-grotesque with a light 300 weight for headlines and a compact grotesque for labels.

The defining choice is light headlines: the CSS sets `--font-weight-headline: 300`, `--font-weight-headline-xxs: 380` and `--font-weight-title: 570`, with tracking from `--letter-spacing-headline-xl: -.022em` to `--letter-spacing-headline-md/xs: -.01em`.

- **display** — Saans 68.9231px / 72.3693px, weight 300, -1.51631px (-0.022em).
- **display-mobile** — Saans 40px / 42px, weight 300, -0.4px.
- **heading** — Saans 44.9231px / 47.1693px, weight 300, -0.449231px.
- **prompt** — Saans 16px / 24px, weight 380, 0.2016px (the prompt box text).
- **body** — system sans 16px / 24px, weight 400.
- **button** — PX Grotesk 13.2308px / 13.2308px, weight 400.
- **caption** — PX Grotesk 11.3846px / 13.6615px, 0.113846px (announcement chip).
- **footer-label** — PX Grotesk 12px / 14.4px, 0.12px (uppercase footer column titles such as "PLATFORM").

Other measured sizes: 22.4615px (1,223 characters, -0.224615px), 28.9231px, 56.9231px, 14px and 18px. Fractional sizes come from fluid scaling at 1,280px.

## Layout

The desktop capture is 1,280px wide and 11,308px tall. The main band starts at y 40 on #151515 with content from x 35 to x 1230; the hero panel and feature panels are inset with rounded corners rather than full-bleed. The logo grid is four columns by two rows. Feature sections pair a narrow text column on the left with a wide rounded media panel on the right. The CSS declares `--breakpoint-xxl: 1440px` and `--dvt-site-max-width: 2240px`.

Spacing tokens: 2px, 4px, 6px, 8px, 10px, 12px, 14px, 14.08px, 16px and 20px. The dominant padding is 4px (91 uses), then 8px; gaps are 8px and 24px (23 each), 16px and 40px. Section paddings of 80px, 120px and 160px give the dark page a slow rhythm.

## Elevation & Depth

Two shadows were measured. A 1px ring `rgb(233, 234, 231) 0px 0px 0px 1px` (24 elements) outlines light components. The prompt card carries a single, very deep shadow `rgba(0, 0, 0, 0.35) 0px 68px 116px 0px`, which makes it float above the hero collage. Depth otherwise comes from imagery: the dimmed, tilted dashboards behind the hero and the chrome 3D render at the end. Panels are separated from the canvas by lighter fills and rounding, not by shadows.

## Shapes

The radius scale is 4px, 5px, 8px, 12px, 16px, 20px, 24px, 36px and a pill. 4px is the most common (39 elements) for small UI and 5px for chips inside product scenes; buttons are pills (12 elements); the prompt card uses 20px; chips use 12px; the hero and feature panels use 36px, with 0px 0px 36px 36px on panels that join at the top.

## Components

**Primary button.** Cream #e9ebdf pill, #151515 PX Grotesk 13.2308px text, 0px 20px padding, 40px tall ("Start for free"); hover fill #ffffff.

**Outline pill.** Transparent pill with a light outline and cream text ("Book a demo", "View app gallery", "Watch the film").

**Prompt card.** Cream #e9ebdf, 20px radius, Saans 16px weight 380 text, an @-mention chip, a "Starter prompts" selector, a round blue #518dd2 submit button and the deep 0px 68px 116px shadow.

**Chip button.** #d9d9d9 fill, 1px #1515151f border, 12px radius, 8px 12px padding, 38px tall, 60% black text and small app icons ("Import code", "Build with AI agents"). On hover the related "Starter prompts" chip darkens from 6% to 12% black.

**NEW chip.** A small cream badge with dark text before a one-line announcement.

**Announcement chips.** PX Grotesk 11.3846px on cream chips in the top strip.

**Text link.** Cream underlined text ("See the full list of integrations").

**Footer.** #151515, uppercase PX Grotesk column titles, #b6b8af links, a 20% cream divider and a giant cream Retool wordmark.

## Design System Architecture

Retool does not publish public web brand guidelines: https://retool.com/brand and https://retool.com/press returned 404, and the newsroom (https://retool.com/newsroom) offers only "Brand resources" downloads (a logo ZIP and a product-visuals ZIP) and a press contact, with no colours or typefaces.

The shipped CSS shows a tokenised system on a Tailwind base:

- **Raw palette** — `--raw-{hue}-{primary|light|lighter|dark|darker}` for yellow, orange, red, pink, purple, blue and green; neutrals `--raw-dark-black-*`, `--raw-neutral-dark-black-4`, `--raw-light-white-*` with alpha variants (`--raw-dark-black-2-alpha-60: #15151599`, `--raw-light-white-1-alpha-12: #f7f8f41f`); semantic raw values (`--raw-semantic-success-10: #11997a`).
- **Component tokens** — buttons by variant, colour and state (`--btn-primary-default-background`, `--btn-primary-hover-icon`, `--btn-secondary-{red|pink|gray|blue|green|orange}-{default|hover|active}-{text|icon|stroke}`, `--btn-tertiary-default-icon`), navigation (`--nav-items-active-selected`, `--nav-items-inactive-stroke-accent`), surfaces (`--surface-details-neutral-alpha-60`).
- **Type tokens** — `--font-weight-headline`, `--font-weight-title`, `--letter-spacing-headline-{xs|md|lg|xl}`.
- **Motion and layout** — `--dvt-ease-out: cubic-bezier(.12,1,.72,1)`, `--dvt-ease-in-out`, `--dvt-sticky-offset: 2.5rem`, `--dvt-site-max-width`.

Class names such as `ActionNavLogo-module__cTIK-G__logo` show CSS-module components alongside Tailwind utilities.

## Do's and Don'ts

**Do**
- Use #151515 as the canvas and warm cream #e9ebdf for type and the primary button.
- Set headlines in a light 300 weight with -0.01em to -0.022em tracking.
- Use PX Grotesk-style compact labels for buttons, chips and footer titles.
- Make primary and secondary actions pills; hover the cream pill to white.
- Put product imagery in large 36px-rounded panels inset from the page edge.
- Reserve the deep shadow for the floating prompt card.

**Don't**
- Don't use pure white text on the dark canvas; the brand white is warm cream.
- Don't bold headlines.
- Don't use saturated UI fills; hues belong to imagery and the single blue submit button.
- Don't add shadows to every card.
- Don't square off panels; the system is rounded throughout.

## Responsive Behavior

At 390px the mobile pass measured the hero headline at Saans 40px / 42px, weight 300, -0.4px; the section heading at 28px / 29.4px; body paragraphs unchanged at 16px / 24px; and the "Start for free" pill at PX Grotesk 12px, 0px 20px padding, 40px tall. The hero band measured 445px tall on #151515. An "Open navigation" toggle was visible with three header links visible (the desktop pass counted sixteen visible header link elements).

The mobile capture shows the prompt box full width under the headline and the logo grid and feature panels in a single column.

The stylesheet is mobile-first: `min-width: 768px` (64 rules), `1024px` (33), `1280px` (15), `1440px` (9), `640px` (8). Behaviour at intermediate widths was not measured.

## Iteration Guide

1. Set the canvas to #151515 and all text to #e9ebdf (secondary #cbccc4, footer #b6b8af).
2. Load a light grotesque for headlines (display 68.9231px / 72.3693px at 300) and a compact grotesque for labels at 11px–13px.
3. Build cream pills (40px tall, 0px 20px padding) that hover to #ffffff, and outlined pills for secondary actions.
4. Place the cream prompt card at the centre of the hero with a 20px radius and the 0px 68px 116px shadow.
5. Inset 36px-rounded panels for product imagery; separate everything else with 12% cream hairlines.
6. Space with 4px / 8px inside components, 24px gaps and 80px–160px between sections.
7. Compare with the captures; theme variants, scroll-driven sections and intermediate widths were not measured.
