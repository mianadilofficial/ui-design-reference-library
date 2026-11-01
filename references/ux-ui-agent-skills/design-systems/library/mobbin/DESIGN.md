---
version: alpha
name: Mobbin
category: "Design & Creative Tools"
description: "Mobbin's design-reference-library site: one variable family, saans, with 80px/652 headlines and 16px/456 text, near-black #141414 ink and buttons on white, translucent #4040400f grey cards with 32px corners, 9999px pill buttons, a #707070 secondary grey and a #141414 footer — no brand hue."
colors:
  canvas: "#ffffff"
  ink: "#141414"
  primary: "#141414"
  on-primary: "#ffffff"
  surface-subtle: "#f7f7f7"
  ink-secondary: "#707070"
  ink-on-dark-muted: "#adadad"
  card-fill: "#4040400f"
  button-gray: "#40404014"
  button-gray-hover: "#4040401f"
  nav-bg: "#ffffffe6"
typography:
  display:
    fontFamily: saans, "saans Fallback"
    fontSize: 80px
    fontWeight: 652
    lineHeight: 80px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: saans, "saans Fallback"
    fontSize: 40px
    fontWeight: 652
    lineHeight: 40px
    letterSpacing: "-0.6px"
  heading:
    fontFamily: saans, "saans Fallback"
    fontSize: 44px
    fontWeight: 652
    lineHeight: 48px
    letterSpacing: "-0.4px"
  card-title:
    fontFamily: saans, "saans Fallback"
    fontSize: 24px
    fontWeight: 652
    lineHeight: 30px
  lead:
    fontFamily: saans, "saans Fallback"
    fontSize: 20px
    fontWeight: 440
    lineHeight: 26px
  body:
    fontFamily: saans, "saans Fallback"
    fontSize: 16px
    fontWeight: 456
    lineHeight: 22px
    letterSpacing: 0.2px
  button:
    fontFamily: saans, "saans Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: 0.2px
  nav:
    fontFamily: saans, "saans Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3.2px
  sm: 3.33px
  md: 8px
  lg: 18px
  xl: 20px
  2xl: 24px
  3xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 11px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28.8px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.button-gray}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 44px
  button-secondary-hover:
    backgroundColor: "{colors.button-gray-hover}"
  story-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.2xl}"
    padding: 40px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 12px
  card:
    backgroundColor: "{colors.card-fill}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-dark-muted}"
    padding: 160px 0px 40px
---

## Overview

Mobbin (https://mobbin.com/) is a reference library of real app and website screens for designers — "The design reference library for apps and sites. 621,500 shipped screens, new every week." The home page is strictly monochrome: white canvas, near-black type, pale grey card wells, black pill buttons. All colour comes from the content — app icons, screenshots, logos — which is exactly the point of a reference library.

The hero is a centered, three-line 80px headline, "Where teams and agents find designs that work", with real app icons (Airbnb, Duolingo and an orange dot) set inline between words. Under it: a grey subline, a black "Join for free" pill and a grey "See plans →" pill, then a large rounded grey well holding a product mock (search, category columns and screenshot thumbnails), then a monochrome logo row (Harvey, Uber, Spotify, Metalab, Wise). The page continues with a typed-search demo ("Design research took hours. Now, it's one search." with a grey second paragraph), a scrolling row of screenshots, a "One library for all your needs." grid of six category cards (Apps, Sites, Screens, Flows, Animations, UI Elements), an AI/MCP section ("Give your AI agents access to Mobbin."), customer story cards (Cursor, Sanctum, OKX), a large quote, a Finance+ promotion flanked by bank app icons, a closing "Find what works. Design what's next." and a black footer with an oversize dark "Mobbin" wordmark.

Copy is short and quiet, in sentence case with full stops, and the tone is understated.

## Colors

The palette is neutral, and the CSS names it semantically:

- **canvas #ffffff** — `--color-background-primary`, about half the capture.
- **ink #141414** — `--color-background-inverse` (hsl 0 0% 8%), used for text, the primary button and the footer. **primary** is the same #141414: Mobbin's action colour is near-black, with **on-primary #ffffff**.
- **ink-secondary #707070** — `--color-text-secondary` (hsl 0 0% 44%), for sublines and the grey half of two-tone headlines.
- **card-fill #4040400f** — a 6% translucent grey used for the large wells and category cards; over white it reads as a light grey (#f4f4f4 covers about 28% of the capture).
- **button-gray #40404014** (8%) and **button-gray-hover #4040401f** (12%) — the "See plans" pill and its measured hover.
- **surface-subtle #f7f7f7** — a solid light grey on a few elements.
- **ink-on-dark-muted #adadad** — footer link text on #141414.
- **nav-bg #ffffffe6** — the header is 90% white, translucent over content.

The CSS border token `--color-border-secondary` is hsl(0 0% 25% / 8%).

## Typography

One family: **saans** (with a `saans Fallback` metric face), loaded as a variable font covering 100–900, and Mobbin uses precise non-standard weights. The CSS sets `--default-font-feature-settings: "dlig" on, "ss07" on, "calt" off`, so discretionary ligatures and stylistic set 7 are on by default. A serif, `--font-serif: "Recital"`, is declared for other pages.

- **display** — 80px / 652 / 80px, −0.6px. A 64px size with the same tracking also appears.
- **heading** — 44px / 652 / 48px, −0.4px. It is the second most frequent size: section heads, the big quote and the two-tone search paragraph all use it.
- **card-title** — 24px / 652 / 30px for customer story titles.
- **lead** — 20px / 440 / 26px in #707070 for the hero subline.
- **body** — 16px / 456 / 22px with +0.2px tracking in #707070 for paragraphs; 14px/456/20px for the footer.
- **button** — 16px / 600 / 22px, +0.2px; **nav** — 16px / 400 / 24px.

Weights 652 (headings) and 456 (text) dominate. If saans is not available, use a neutral grotesque with variable weights and declare the substitute — and keep the two-weight contrast.

## Layout

At 1280px the page is 8,106px tall. The header is 92px tall with logo, MCP, Customers and Pricing at left and YouTube, X and "Log in" at right; seven header links are visible. Content is centered. Big wells span most of the width; category cards sit three across in two rows; customer stories three across.

Spacing is generous and coarse: gaps of 20px and 8px, then 40px, 80px and 200px between major blocks; paddings of 20px, 24px and 40px inside cards, and 160px top padding on the footer (160px 0 40px). The CSS includes breakpoint tokens up to `--breakpoint-min-1728` and `--breakpoint-min-1920`.

## Elevation & Depth

Depth is very soft. The main measured shadow is `rgba(0, 0, 0, 0.04) 0px 8px 24px 0px` on 18 elements. Images and logos get a half-pixel inset ring, `--shadow-image-inset-value: inset 0 0 0 .5px #0000001a`, to edge them against white. The CSS also defines `--shadow-dropdown: 0 8px 24px #0000001f` and `--shadow-value: 0 12px 80px #00000029` for overlays. Grey wells (6% black) do most of the separating.

## Shapes

Large, soft containers and pill controls. The most frequent radius is 30% (231 elements) — app-icon squircles — and the `12.22% / 5.65%` elliptical radius on 80 elements rounds device screenshots. In px: 8px (81 elements), 32px on the big grey wells and category cards, 24px on customer story cards, 18px (16) and 20px (9) elsewhere, and 9999px on every button. Split radii `0 0 32px 32px` and `20px 20px 0 0` appear once each.

## Components

- **Primary button** — #141414 pill, white saans 16px/600, +0.2px tracking, 0 16px padding, 44px tall ("Join for free").
- **Secondary button** — 8% grey pill (#40404014), #141414 text with a trailing arrow ("See plans →"), 44px; hover 12% (#4040401f).
- **Well** — #4040400f fill, 32px radius, holding a product mock or screenshot row.
- **Category card** — the same translucent grey with 32px radius, a centered label at the top and an illustration of screens below.
- **Customer story card** — white, 24px radius, 40px padding, a company logo at top and a 24px/652 headline at the bottom.
- **Quote block** — 44px/652 quote with an avatar, name and role at the right.
- **Header** — 90% white, 92px tall, 16px/400 links with 0 12px padding.
- **Footer** — #141414, 160px 0 40px padding, white column heads, #adadad 14px links, "New" badges, and a giant low-contrast "Mobbin" wordmark at the bottom.

## Design System Architecture

Mobbin's own brand page could not be read (https://mobbin.com/brand returned HTTP 403), and no public design-system documentation was found on the pages opened. The de-facto system is in the shipped CSS, a Tailwind-style build (`--tw-*` utilities) with semantic tokens: `--color-background-primary`, `--color-background-inverse`, `--color-text-secondary`, `--color-border-secondary`, `--color-overscroll-canvas`; font tokens `--font-sans`/`--font-saans` and `--font-serif`; font-feature defaults; shadows `--shadow-dropdown`, `--shadow-value`, `--shadow-image-inset-value`, `--shadow-logo-inset-value`; spacing (`--spacing-12`, `--spacing-16`) and breakpoint tokens.

## Do's and Don'ts

**Do**
- Keep the UI black, white and translucent grey; let screenshots and app icons provide colour.
- Use saans (or a declared substitute) at 652 for headings and ~456 for text, with dlig and ss07 on.
- Make every button a pill: black for primary, 8% grey for secondary.
- Contain content in big 32px-radius grey wells.
- Use two-tone headlines (black sentence, then grey sentence) for emphasis.

**Don't**
- Don't introduce a brand accent colour into the UI chrome.
- Don't use heavy shadows; keep to 4% blur shadows and 0.5px inset rings.
- Don't use square buttons.
- Don't use pure black #000000; ink is #141414.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the h1 at 40px / 652 / 40px with −0.6px tracking (80px on desktop), the h2 at 32px / 652 / 36px with normal tracking (44px / −0.4px on desktop), 32px becoming the most frequent text size, only 1 header link visible with a menu toggle labelled "Open menu" (7 links on desktop), and the widest card row measuring 8 columns versus 14 on desktop. The stylesheet's media queries include `min-width 768px`, `1024px`, `1200px` and `1440px`. Other mobile behaviour was not measured.

## Iteration Guide

1. Set canvas #ffffff and ink #141414; load saans with `"dlig" on, "ss07" on, "calt" off`.
2. Build the centered hero at 80px/652/80px with −0.6px tracking, inline app icons between words, and a 20px/440 #707070 subline.
3. Add the black pill (16px/600, 44px) and the 8% grey pill beside it.
4. Wrap product visuals in #4040400f wells with 32px radius.
5. Use 44px/652 section heads, 24px/652 card titles, 16px/456 body.
6. Finish with the #141414 footer (160px top padding) and its large wordmark.
7. Compare with https://mobbin.com/ at 1280px and 390px.
