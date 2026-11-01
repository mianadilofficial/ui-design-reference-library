---
version: alpha
name: Karmarts
category: "Thai Brands"
description: "Karmarts is a Thai premium beauty e-commerce platform whose storefront is a quiet neutral shell around loud campaign artwork. The system is built on the Prompt typeface at 13px/14px, a near-black #0a0a0a primary, off-white #fafafa canvas, white cards, a #ebebeb hairline, a single magenta #e91e8c accent, and pill, 16px and 24px radii."
colors:
  canvas: "#fafafa"
  ink: "#525252"
  primary: "#0a0a0a"
  on-primary: "#ffffff"
  surface: "#ffffff"
  ink-muted: "#a3a3a3"
  ink-subtle: "#78787d"
  accent-magenta: "#e91e8c"
  hairline: "#ebebeb"
  link-bg: "#0000001a"
  nav-bg: "#ffffffcc"
typography:
  display:
    fontFamily: Prompt, "Prompt Fallback", system-ui, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
    letterSpacing: 0.325px
  nav:
    fontFamily: Prompt, "Prompt Fallback", system-ui, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: 0.3px
  body:
    fontFamily: Prompt, "Prompt Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.25px
  button:
    fontFamily: Prompt, "Prompt Fallback", system-ui, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  link:
    fontFamily: Prompt, "Prompt Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 10px
  sm: 16px
  md: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 34px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.sm}"
    padding: 8px 0px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.hairline}"
---

## Overview

Karmarts presents itself, in the page title measured from the live site, as "แพลตฟอร์มความงามพรีเมียม" (a premium beauty platform), and the home page of the online store describes a "Unique Beauty Solution" with the Thai tagline "ความงามที่ใช่...ในแบบของคุณ" (beauty that is right for you, in your own way). The store is Thai-first with Thai, English and Chinese available, uses Thai Baht pricing, and the www host redirects to online.karmarts.com, which is the page measured here.

The design stance is neutral shell, loud content. The interface chrome is almost colourless: an off-white #fafafa page, pure white surfaces, near-black #0a0a0a for text and the primary button, and a pale #ebebeb hairline. All the colour and personality arrive through the editorial artwork the merchandising team uploads: pink promotional banners, collaboration posters with celebrity talent, and campaign tiles for brands such as Cathy Doll, Baby Bright and Acca. The shell is deliberately designed to get out of the way of those images.

The home page after the first screen is a stack of full-width promotional banners and a two-column grid of campaign posters with rounded corners. There is very little interface text between the artwork, and the voice of the writing is promotional Thai ("รับของแถมฟรี", free gifts with a basket threshold) rather than technical.

## Colors

In short, the system reads as black, white and a single pink-magenta note, which keeps product photography and campaign banners the most saturated things on any screen.

The palette is a grayscale ladder plus one accent. Every colour below is measured from the live site's computed styles or the CSS custom properties it publishes.

- **Primary `#0a0a0a`** is the brand colour, published as the site's brand variable and measured as the fill of the pill buttons. Text on it is `on-primary` `#ffffff`.
- **Canvas `#fafafa`** is the page surface, with **surface `#ffffff`** reserved for cards, the footer and sheets so they lift slightly off the page without a shadow-heavy treatment.
- **Ink `#525252`** is the most-read body text colour (the site names it its secondary text variable). `ink-muted` `#a3a3a3` and `ink-subtle` `#78787d` are the quieter captions and placeholders.
- **Accent magenta `#e91e8c`** appears as a measured text colour and as the site's magenta variable; it is used sparingly and the main button is not filled with it.
- **Hairline `#ebebeb`** is the default border for cards and the footer rule.
- **`nav-bg` `#ffffffcc`** is the translucent white header, and **`link-bg` `#0000001a`** is the 10 percent black wash used behind link-style chips.

The site also publishes semantic status variables for success, warning, error and info; they are not used on the measured home page and are not carried as tokens.

## Typography

One family carries everything: **Prompt** (with the "Prompt Fallback" metric-matched face and system-ui as fallbacks), loaded in 400, 500 and 600 weights. Prompt is a Thai plus Latin sans serif from the Thai type foundry Cadson Demak, published under the SIL Open Font License 1.1 on its GitHub repository (github.com/cadsondemak/Prompt). Its Thai is loopless, which suits the compact sizes used here.

The scale is small and flat. The first heading-like role measured is the navigation label at 13px, weight 500, line-height 19.5px and 0.325px tracking (`display`). The body paragraph is 14px at weight 400 on a 19.25px line. Buttons use 13px at weight 400 on 19.5px. Link text is 16px on 24px, and the dense navigation variant is 12px on 12px with 0.3px tracking. There are no oversized display headings in the chrome: large type exists only inside the poster artwork.

Because Prompt is a free open font, no substitute is needed; in a Latin-only context fall back to system-ui, accepting looser Thai shaping.

## Layout

The page is a single vertical column of full-bleed content blocks inside a gutter, measured at a 1280px desktop viewport and about 4300px total scroll height. A sticky, translucent header sits on top; below it, banners span the container width and posters sit in an even two-column grid with a small gap. The spacing scale published by the site's utilities runs 2, 4, 6, 8, 10, 12, 14, 16, 20 and 24px (`s1` to `s10`), and components keep to that ladder.

Density is moderate to high: product and campaign artwork is the content, so rows follow each other with only a short gap and no decorative whitespace bands.

## Elevation & Depth

Depth is mostly flat. The card has the 1px `hairline` border and a transparent layered shadow stack, and the header carries a faint two-part shadow at the lower edge. A heavy dialog shadow exists on overlay surfaces. Overlays (a language and region picker and a campaign pop-up were present in the capture) dim and blur the page behind them; those are transient surfaces and are not part of the brand's resting UI.

## Shapes

Shapes are soft. The measured radius ladder is `xs` 10px, `sm` 16px, `md` 24px and `pill` 9999px, plus square (`none` 0px) for the navigation strip. Buttons are fully pill-shaped, cards and poster tiles use the 16px radius, and link chips use 24px. Square corners appear only on the header and footer bands.

## Components

- **Primary button:** `primary` fill, `on-primary` text, `pill` radius, 6px 16px padding, 34px high, 13px/400 Prompt. A promotional pill labelled for the BabyBright x TeeTeePor collaboration is the measured example.
- **Link chip:** 16px text on the `link-bg` wash with a 24px radius.
- **Navigation:** translucent white header, 12px Prompt links in near-black, square corners.
- **Card:** white, `hairline` border, 16px radius, 8px vertical padding, muted caption colour.
- **Footer:** white with a `hairline` rule and `ink` text.

## Design System Architecture

No public design system or brand guideline was found for Karmarts; the de-facto system is a Tailwind-style utility stack with shadcn-like variables. The shipped CSS publishes `--km-*` brand tokens (`--km-brand`, `--km-surface`, `--km-border`, `--km-text`, `--km-text-secondary`, `--km-text-muted`, `--km-magenta`, a radius ladder and three shadow levels), alongside shadcn-style `--primary`, `--card`, `--muted` and `--ring` variables and a `--font-prompt` family variable. Sources opened: https://online.karmarts.com/ (the live site) and https://github.com/cadsondemak/Prompt (the typeface).

## Do's and Don'ts

- Do keep the shell neutral and let campaign imagery supply the colour.
- Do use `primary` `#0a0a0a` pills for the main action and `pill` radius throughout.
- Do keep copy in Prompt at the measured 13px to 14px sizes with the listed line heights.
- Do reserve `accent-magenta` for emphasis, never for large fills.
- Don't add a second accent hue or gradients to the chrome.
- Don't use pure black text on `canvas` for long paragraphs; use `ink`.
- Don't treat the language/region dialog or promotional pop-up as brand UI.

## Responsive Behavior

The extractor measured both a 1280px desktop and a mobile viewport. The mobile measurement reuses the same small Prompt sizes (the 12px navigation style and 13px labels) and the same colour tokens, so the type scale does not change between viewports; only the width of the content changes.

## Iteration Guide

1. Start from `canvas`, `surface`, `ink` and `primary`; add magenta only for emphasis.
2. Build buttons as `pill` radius, 34px high, 13px Prompt.
3. Put cards on `surface` with a `hairline` border and 16px radius.
4. Let full-width artwork carry brand moments; keep type small and consistent.
5. Run `node web/scripts/verify-designs.mjs --slug=karmart` after any token change and keep values equal to the measurements.
