---
version: alpha
name: Monomax
category: "Thai Brands"
description: "Monomax (monomax.me) is a Thai streaming service for series, movies, sport and live TV, set on a near-black #121212 canvas with white NotoSansThai text, a single orange #fa4616 action color, 8px-radius buttons and pill-shaped chips."
colors:
  canvas: "#121212"
  ink: "#ffffff"
  primary: "#fa4616"
  on-primary: "#ffffff"
  primary-hover: "#eb3606"
  accent-amber: "#faa542"
  surface-card: "#333333"
  surface-panel: "#262b2f"
  ink-muted: "#adadad"
  ink-soft: "#d5d5d5"
  ink-faint: "#6b6b6b"
typography:
  display:
    fontFamily: NotoSansThai, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  button:
    fontFamily: NotoSansThai, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: NotoSansThai, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 9px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 48px
  s9: 64px
  s10: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-login-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 40px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
---

## Overview

Monomax is the streaming arm of the Thai media group Mono (the queue lists https://www.mono.co.th as its source). The measured home page, https://www.monomax.me/ (title "ดูหนังออนไลน์ ซีรีส์ ดูบอลสด ถูกลิขสิทธิ์ | Monomax", page language attribute `en`), is a dark, poster-driven catalogue. The capture shows a top bar with the Monomax logo, the menu items Series, Movies, Sport, Live TV, Promotion and Package, a search icon, a language switcher reading "English", an orange "Join for free" button and an outlined "Login" button. Below it a full-width hero banner announces a volleyball fixture ("SV.League Women") with a timestamp and an orange "Login" call to action, followed by horizontally scrolling shelves titled "TV Show (Thai/Asia)", "Occult Action Collection", "New Series", "Newly Added", "Coming soon" and "What's Trending".

The look is cinema-lobby: the artwork carries all the color and the interface recedes. Every surface behind the posters is the near-black #121212, text is #ffffff, and the only saturated interface color is the orange #fa4616, reserved for actions, "New" badges, "view all »" links and the "EP." markers. The voice is plain English labels with Thai-language titles inside the artwork. The page measured 6274px tall at a 1280px viewport.

## Colors

Measured background areas rank as follows: #333333 (largest weighted area, used behind cards and panels), #121212 (the canvas), #fa4616 (action fills), #faa542 (a warm amber that appears as a background in the extraction), #262b2f and #3a3a3a. The canvas token is #121212 and is confirmed on the capture pixels.

- **canvas #121212** is the page background and the footer background.
- **ink #ffffff** is the most-read text color (2450 characters weighted) and the nav container color.
- **ink-soft #d5d5d5** colors the nav links and footer text; **ink-muted #adadad** is the second most-read text color (890 characters), used for secondary metadata; **ink-faint #6b6b6b** appears for very light text (40 characters).
- **primary #fa4616** is the fill of the "Join for free" button and the text color of accent links (226 characters). **primary-hover #eb3606** is the fill measured after hovering that button.
- **accent-amber #faa542** is a measured background color (weight 93); the extraction does not record which element carries it, so no role is assigned beyond "accent".
- **surface-card #333333** and **surface-panel #262b2f** are the lifted surfaces over the canvas.

A translucent black (#000000b3 as a background, #00000080 as text color) was also measured; it is treated as an overlay scrim and is not tokenised. The library color #007aff appears only as the Swiper carousel theme variable and is not used as brand color.

## Typography

One family carries everything: NotoSansThai, loaded in weights 400 and 700 (the loaded-font list also contains Font Awesome 6 Free/Brands for icons and swiper-icons). The stack is NotoSansThai, ui-sans-serif, system-ui, sans-serif plus emoji fallbacks. Measured sizes by character weight: 16px (2917), 24px (631), 30px (216), 14px (40) and 128px (11). Weights are 700 (2002 characters) and 400 (1813).

- **display**: 24px / 700 / line-height 32px, the shelf headings such as "TV Show (Thai/Asia)" (measured as an h2; the page has no visible h1).
- **button**: 16px / 700 / 24px.
- **nav**: 16px / 400 / 24px.
- Body copy is 16px / 400 / 24px at #ffffff.

NotoSansThai is the shipped font so no substitute is needed. Letter-spacing is `normal` on all measured roles.

## Layout

The page is a stack of full-width bands: top bar, hero banner, then shelves. Each shelf is a heading row (24px bold heading on the left, an orange "view all »" on the right for some shelves) above a horizontal carousel of cards that bleed off the right edge, with chevron arrows on the sides. Gaps measured most often are 16px (40 occurrences), 6px, 12px and 24px; paddings are 8px, 16px, 32px, 64px, 4px and 12px. The spacing tokens run 4, 6, 8, 12, 16, 24, 32, 48, 64 and 96px. Card ratios in the capture alternate between portrait posters and landscape tiles in the "Coming soon" shelf.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth comes from tonal steps: the #121212 canvas, #333333 and #262b2f surfaces, and image overlays. Dark gradients sit on the artwork. There is no drop shadow vocabulary to document.

## Shapes

Measured radii are 8px (332 occurrences, the dominant shape), 9999px (128, pills and circular carousel arrows), "8px 8px 0px 0px" and "0px 0px 8px 8px" (24 each, the image and caption halves of the "Coming soon" tiles) and one 9px. Tokens: xs 8px, sm 9px, pill 9999px. One border color was measured: #fa4616, which is the outline of the "Login" button in the top bar.

## Components

- **button-primary**: "Join for free" in the top bar. Fill #fa4616, text #ffffff, 16px/700, radius 8px, padding 8px 16px, height 44px. On hover the fill becomes #eb3606 (measured: rgb(235, 54, 6)); height and radius are unchanged.
- **button-login-link**: the orange "Login" link-button in the hero, same fill and text, height 40px, radius 8px, padding 8px 16px.
- **Outlined Login**: the top-bar "Login" button is outlined with a #fa4616 border.
- **nav-link**: 16px/400 in #d5d5d5. The measured link box is 60px tall.
- **Badges**: orange "New" chips on TV-show tiles and crown icons on "Newly Added" posters; their dimensions were not measured.
- **Footer**: #121212 background with #d5d5d5 text.

## Design System Architecture

No public Monomax design system, brand guideline or token package was found; the home page contains no link to one (searched the home page markup for brand, design, press and guideline links). The de-facto system is utility-class CSS: the root custom properties are Tailwind internals (`--tw-ring-*`, `--tw-shadow*`), Font Awesome 6 variables (`--fa-*`) and Swiper variables (`--swiper-navigation-size: 44px`, `--swiper-theme-color: #007aff`). There are no brand-named custom properties, so the colors above are recovered from computed styles rather than from published variables. Images are served from img.monomax.me.

## Do's and Don'ts

- Do keep the canvas #121212 and let artwork provide color.
- Do use #fa4616 for the single most important action on a band, and #eb3606 for its hover state.
- Do set shelf headings at 24px bold with 32px line height.
- Do use 8px radii for buttons and cards and the pill radius for circular controls.
- Don't introduce shadows; none are measured.
- Don't use the Swiper blue #007aff or the Tailwind ring color as brand colors.
- Don't place orange text on the orange fill; the button text is #ffffff.

## Responsive Behavior

The extraction's mobile pass recorded: the CTA "Join for free" keeps the same fill #fa4616, 16px/700 type, 8px radius, 8px 16px padding and 44px height; the heading role measured was a 24px/700/32px span; mobile font sizes by character weight were 16px (2727), 24px (593), 20px (254), 14px (234) and 96px (11). The mobile viewport width, column counts, menu behavior and breakpoints were not recorded: not measured.

## Iteration Guide

1. Start from canvas #121212 and ink #ffffff; add #fa4616 only for actions.
2. Reuse the NotoSansThai 400/700 pair; do not add a second family.
3. Build shelves as 24px/700 heading plus a horizontal card row with 16px gaps.
4. Check any new button against button-primary: 44px height, 8px radius, 8px 16px padding.
5. Dark mode vs. light mode: only the dark presentation was measured; a light theme is not measured.
6. Re-run `node web/scripts/verify-designs.mjs --slug=monomax` after edits.
