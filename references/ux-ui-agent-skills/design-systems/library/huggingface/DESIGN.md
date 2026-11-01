---
version: alpha
name: Hugging Face
category: "AI"
description: "Hugging Face (huggingface.co) measured home page: white canvas with a near-black #0b0f19 hero panel, Source Sans Pro 400/600/700 with IBM Plex Mono for repo names, a #101828 pill Sign Up button, 8px and 12px radii, and a Tailwind v4 token layer. Brand marks are yellow #ffd21e and orange #ff9d00."
colors:
  canvas: "#ffffff"
  ink: "#6a7282"
  primary: "#101828"
  on-primary: "#ffffff"
  surface-hero-dark: "#0b0f19"
  surface-subtle: "#f9fafb"
  ink-strong: "#000000"
  ink-muted: "#99a1af"
  border-input: "#e5e7eb"
  border-outline-button: "#4a5565"
  hairline: "#f3f4f6"
  brand-yellow: "#ffd21e"
  brand-orange: "#ff9d00"
  card-bg: "#ffffff66"
typography:
  display:
    fontFamily: "\"Source Sans Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Source Sans Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: "\"Source Sans Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28px
  subheading:
    fontFamily: "\"Source Sans Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "\"Source Sans Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Source Sans Pro\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 25px
  2xl: 25.6px
  3xl: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
    height: 30px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
  button-secondary:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 4px 14px
    height: 34px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 21.6px
    borderColor: "{colors.border-outline-button}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.1)
      0px 8px 10px -6px
  nav:
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 8px 12px 8px 32px
    height: 36px
    borderColor: "{colors.border-input}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.05) 0px 2px 4px 0px inset
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.lg}"
    padding: 12px
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

Hugging Face's home page is a developer-platform page that behaves like a product catalogue. The measured title is "Hugging Face – The AI community building the future." and the h1 repeats it at 48px weight 700 on a near-black (#0b0f19) rounded hero panel, with a yellow hugging-face emoji above it and a screenshot-like model-browser mock-up on the right. Below the hero the page is white (#ffffff) and is built from live-looking data: a "Trending on this week" band with three columns (Models, Spaces, Datasets), then "The Home of Machine Learning", then feature cards for the collaboration platform, the open source stack, modalities and portfolios. The voice is plain and community-first ("Explore AI Apps", "Browse 2M+ models", "Build your portfolio"); the numbers in the copy are product counts, not slogans.

The page is deliberately quiet in colour. Almost all text is grey on white (#6a7282 is the most-read text color by character count, #000000 second), the only saturated colour is inside the Spaces cards, which are filled with purple, blue and orange gradients, and the official brand yellow appears in the emoji logo. Chrome is thin: 1px hairlines (#f3f4f6, #e5e7eb), 8px and 12px radii and very light shadows.

## Colors

- **Canvas** `#ffffff` is the page background and the largest background area measured. A second large area is `#0b0f19` (the hero panel) and `#f9fafb` is a faint surface used for 96 area-weighted pixels of background.
- **Ink** is `#6a7282` (most-read text, footer and secondary copy), with `#000000` for headings and nav links and `#99a1af` for the lightest descriptive copy such as hero sub-text on cards. `#e5e7eb` and `#4a5565` appear as text colors too (on the dark hero) and as border colors.
- **Primary** is `#101828`, the fill of the pill "Sign Up" button in the header, with white (`#ffffff`) label text. On hover the measured state inverts: white fill, black text, black border.
- **Secondary action** is a pure black `#000000` fill with a white label and 8px radius ("Explore Models", "View pricing").
- **Brand colors** published at huggingface.co/brand under "HF Colors": `#FFD21E`, `#FF9D00` and `#6B7280` (page opened; no names or usage rules are given there). They are carried here as `brand-yellow` and `brand-orange`; the grey equals the Tailwind gray-500 family and is not duplicated.
- **Hairlines** are `#f3f4f6` (36 weighted occurrences) and `#e5e7eb` (14); on the dark hero the borders are translucent white, `#ffffff0d` and `#ffffff1a`.
- **Card background** is translucent white `#ffffff66`, and the measured nav surface sits on `#ffffffcc`.

The full Tailwind v4 palette (slate, gray, red, orange, amber, lime, emerald, teal, cyan, sky, blue, indigo, violet, fuchsia, pink, rose in steps 50-950) is declared as CSS custom properties on `:root`, so the page can use any of them; only the colors listed above were measured as rendered.

## Typography

One family carries the interface: **Source Sans Pro**, loaded at 400, 600 and a 700-900 variable range, with a system fallback chain (-apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Noto Sans, Arial, emoji fonts). The second family is **IBM Plex Mono** at 400, used for repository names inside the Models and Datasets cards (15.04px, line-height 24px).

| Role | Size / weight / line | Notes |
|---|---|---|
| Display (h1) | 48px / 700 / 48px | white on the dark hero; 36px / 700 / 40px at the 390px mobile pass |
| Subheading (h3) | 20px / 600 / 28px | feature card titles |
| Heading (h2) | 18px / 600 / 28px | "Models", "Spaces", "Datasets" column titles |
| Nav | 18px / 700 / 28px | header links |
| Body | 16px / 400 / 24px | buttons, inputs and paragraphs |
| Footer | 14px / 400 / 20px | grey #6a7282 |

The most-used sizes by character count are 16px (1622), 14px (765), 18px (391), 15.04px (323), 13.4px (252) and 20px (234); 48px is used for 37 characters, so the display size is rare and the page reads as a dense 14-18px interface. Letter-spacing is `normal` and text-transform is `none` everywhere measured.

## Layout

The desktop pass is 1280px wide and 5986px tall. The header is 65px high, holds the logo, a search field (36px high, 8px radius, 1px #e5e7eb border, padding 8px 12px 8px 32px for the leading icon) and the links Models, Datasets, Spaces, Buckets (with a NEW tag), Docs, Pricing, then Log In and Sign Up. The hero is a rounded panel inset from the page edges, text on the left and a product mock-up bleeding off the right. The trending section is a three-column grid of stacked cards; later sections use two- and three-up feature cards. Spacing values measured are 1, 2, 4, 6, 8, 10, 12, 14, 16 and 20px, so the system follows Tailwind's 4px scale with small increments.

## Elevation & Depth

Depth is minimal. The most common box shadow is `0 1px 2px rgba(0,0,0,0.05)` (25 elements), followed by `0 1px 3px rgba(0,0,0,0.1), 0 1px 2px -1px rgba(0,0,0,0.1)` (17). The outlined "Explore AI Apps" button on the hero carries a larger stack, `0 20px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.1)`. The search input uses an inset `0 2px 4px rgba(0,0,0,0.05)`. Separation is mostly achieved with hairline borders and the dark/light contrast of the hero.

## Shapes

Radii measured: 4px, 6px, 8px (most common, 41 elements), 12px (cards), 25px and 25.6px (12 elements), 32px on top corners of large panels, 50% for avatars and dots, and a pill (the computed 3.35544e+07px, normalised to 9999px) for the Sign Up button and the outlined hero button. Large panels also use asymmetric radii such as `32px 32px 0 0`.

## Components

- **button-primary**: `#101828` fill, white 16px/400 label, pill radius, padding 4px 12px, height 30px. Hover inverts to white fill with black text and a black border.
- **button-secondary**: `#000000` fill, white label, 8px radius, padding 4px 14px, height 34px.
- **Outlined hero link** ("Explore AI Apps"): transparent, white label, 1px `#4a5565` border, pill radius, padding 0 21.6px, height 42px, with the large shadow noted above.
- **Text input**: white, 8px radius, 1px #e5e7eb border, height 36px.
- **Cards**: translucent white (#ffffff66), 12px radius, 12px padding. Model and dataset cards use IBM Plex Mono titles and a grey meta line ("Updated 1 day ago", downloads, likes); Space cards use full-colour gradient fills with white text.
- **Footer**: 405px tall, grey #6a7282 text, 1px #f3f4f6 border, starting with a "System theme" control.

## Design System Architecture

No separate public design-system site was found: https://huggingface.co/brand offers logo downloads and three colour values only. The shipped CSS is Tailwind v4: 300 custom properties on `:root` include `--color-*` palettes, `--text-*` and `--leading-*` scales, `--radius-xs` to `--radius-4xl`, `--container-*`, `--blur-*`, `--ease-*`, `--drop-shadow-*` and `--tw-*` utility variables, plus `--d2h-*` variables from a diff-viewer library. Additional custom size `--text-smd` (.94rem) shows project-specific extension. The font stack also includes KaTeX families in the stylesheet corpus, which supports math rendering in content pages (not measured on the home page).

## Do's and Don'ts

- Do keep the page white and let the dark `#0b0f19` hero be the single large contrast block.
- Do use Source Sans Pro for UI and IBM Plex Mono for repository, model and dataset identifiers.
- Do use pill radius only for the header Sign Up and the hero outlined button; use 8px for other buttons and inputs, 12px for cards.
- Do show real counts and names in cards instead of placeholder art.
- Don't add heavy shadows; the measured maximum is the 20px/25px stack on one outlined button.
- Don't introduce new brand hues: the published marks are yellow `#FFD21E` and orange `#FF9D00`.
- Don't use browser default link blue; none was measured.

## Responsive Behavior

Measured at 390px wide: the h1 drops from 48px to 36px (line-height 40px), h2 stays at 18px, body stays 16px, and the detected primary button is "Explore Models" (black, 8px radius, padding 4px 14px, height 34px). The mobile font-size mix is 14px (1095), 16px (1033), 18px (343), 15.04px (321). The mobile header height is 65px. Breakpoint values, menu collapse behavior and grid changes were not measured.

## Iteration Guide

1. Start from `canvas` white, `ink` #6a7282 for body copy and `ink-strong` #000000 for headings.
2. Place one dark `surface-hero-dark` (#0b0f19) panel with white 48px/700 text and a pill outlined link.
3. Use `button-primary` (#101828, pill, 30px) for account actions and `button-secondary` (#000000, 8px, 34px) for page actions.
4. Render model and dataset cards with 12px radius, 12px padding, Plex Mono titles and a grey meta line.
5. Check every colour against the frontmatter before adding anything; add brand colors only from the three published values.
6. For mobile, use the measured 36px/40px h1 and leave other behaviors unspecified until measured.
