---
version: alpha
name: Whimsical
category: "Design & Creative Tools"
description: "Whimsical (whimsical.com), \"the whiteboard for product builders\": Agrandir 700 headlines at 64px and 96px with slight negative tracking, Manrope 16px UI and body text, a #250835 deep-plum 12px-radius Get started free button with a soft plum shadow, a #f7f7f8 page, and huge 120px–160px-radius panels filled with grainy pastel sunset gradients."
colors:
  canvas: "#f7f7f8"
  ink: "#6a5b72"
  primary: "#250835"
  on-primary: "#ffffff"
  surface-footer: "#bbcfe4"
  surface-pink: "#e9bded"
  ink-strong: "#473054"
  link-violet: "#ab2fed"
  ink-faint: "#ebe6ee"
  card-bg: "#decaff"
typography:
  display:
    fontFamily: "Agrandir-0cfc125464d8d15e, \"Agrandir-0cfc125464d8d15e fallback: Arial\", Avenir, Montserrat, Corbel, \"URW Gothic\", source-sans-pro, sans-serif"
    fontSize: 64px
    fontWeight: 700
    letterSpacing: "-0.64px"
  display-xl:
    fontFamily: "Agrandir-0cfc125464d8d15e, \"Agrandir-0cfc125464d8d15e fallback: Arial\", Avenir, Montserrat, Corbel, \"URW Gothic\", source-sans-pro, sans-serif"
    fontSize: 96px
    fontWeight: 700
    lineHeight: 96px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: "Agrandir-0cfc125464d8d15e, \"Agrandir-0cfc125464d8d15e fallback: Arial\", Avenir, Montserrat, Corbel, \"URW Gothic\", source-sans-pro, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52.8px
    letterSpacing: "-0.24px"
  logo-heading:
    fontFamily: "Manrope-79d1da00e5f47c83, \"Manrope-79d1da00e5f47c83 fallback: Arial\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
  subheading:
    fontFamily: "Manrope-79d1da00e5f47c83, \"Manrope-79d1da00e5f47c83 fallback: Arial\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  button:
    fontFamily: "Manrope-79d1da00e5f47c83, \"Manrope-79d1da00e5f47c83 fallback: Arial\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 8px
  sm: 9px
  md: 12px
  lg: 16px
  xl: 40px
  2xl: 80px
  3xl: 120px
  4xl: 160px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 40px 8px 20px
    height: 48px
    boxShadow: rgba(37, 8, 53, 0.2) 0px 12px 16px -4px
  button-light:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 40px 8px 20px
    height: 48px
    boxShadow: rgba(37, 8, 53, 0.2) 0px 12px 16px -4px
  link:
    textColor: "{colors.link-violet}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.primary}"
    padding: 20px 40px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.logo-heading}"
    padding: 10px 12px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.primary}"
    rounded: "{rounded.3xl}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.primary}"
    padding: 40px
---

# Whimsical

## Overview

Whimsical (whimsical.com, title "Whimsical — The whiteboard for product builders") sells a visual workspace for diagrams, wireframes, mind maps and docs. The measured page is 1280px wide and 7569px tall on a very light grey `#f7f7f8`. A floating white header bar holds the Whimsical logo (a violet diamond-shaped mark and the bold wordmark), centred links (Product, Resources, Pricing, Download), and at the right "Contact sales", a light "Log in" button and a deep-plum "Sign up" button.

The hero is a giant rounded panel filled with a soft, grainy painted landscape — lavender sky, a coral sun-glow over dark blue hills. White Agrandir headline "The whiteboard for product builders", a short white Manrope line ("Design and document implementation with diagrams. Shape UI with wireframes. Collaborate with your team and AI.") and a plum "Get started free →" button sit above a large product screenshot (a flowchart board, a mind map, a phone wireframe and a dashboard). Customer logos (Klaviyo, Mercado Libre, New Relic, Octopus Deploy) run along its bottom edge in white.

The page then shows very large ghosted text ("Capture and share your ideas at the speed of thought") in a pale tint, alternating product sections (Diagrams, Wireframes) where screenshots sit inside huge asymmetric rounded gradient blobs, a "Features" grid ("The essentials, done right") with soft blurred colour illustrations, "An infinite canvas to capture all your ideas" with white product cards (Diagrams, Flowcharts, Mind maps, Whimsical AI, Wireframes), and a final gradient panel, "It's time to work differently.", that contains the footer. The tone is friendly, crafted and a little dreamy.

## Colors

- **canvas `#f7f7f8`** — the page background (`--base-10`).
- **primary `#250835`** — deep plum, the fill of "Sign up" and "Get started free" (the CSS reports it in display-p3 as `color(display-p3 0.133333 0.0392157 0.2)`); **on-primary `#ffffff`** for their labels. On hover "Sign up" swaps to a white fill with a plum label.
- **ink `#6a5b72`** — the most-read text colour (697 characters), body copy and descriptions.
- **ink-strong `#473054`** — darker plum-grey text (478 characters); `#918499` is a lighter grey (20 characters).
- **link-violet `#ab2fed`** — product links such as "Diagrams ›" and "Wireframes ›" (58 characters). Small accents also use `#0283ec` and `#4b38ee`.
- **ink-faint `#ebe6ee`** — the pale ghost text measured on 43 characters.
- **card-bg `#decaff`** — lavender fill behind the gradient panels; **surface-pink `#e9bded`** and **surface-footer `#bbcfe4`** — the two largest painted areas; `#bbcfe4` is the footer background. `#efe3ed`, `#f5f4f5` and translucent white `#ffffffe0` are also measured.
- "Log in" rests on `rgba(34, 10, 51, 0.05)` and turns plum with a white label on hover; nav links get a `rgba(34, 10, 51, 0.04)` hover fill.

The CSS defines full colour ramps in display-p3 (`--blue-*`, `--purple-*`, `--pink-*`, `--hot-pink-*`, `--orange-*`, `--yellow-*`, `--mint-*`, `--base-*`) and a `--gradient-primary-horizontal` that layers a grain texture over a deep-violet-to-blue gradient.

## Typography

Two self-hosted families: **Agrandir** 700 for headlines (`--hd-font-family`) and **Manrope** (variable 100–900, `--body-font-family`) for everything else. Manrope is the most-read family (1615 characters); Agrandir covers 244.

- **Display — Agrandir 700, 64px, -0.64px tracking**: "The whiteboard for product builders" (`--hd-h5--size: 64px`, `--hd-h5--letter-spacing: -.64px`).
- **Display XL — Agrandir 700, 96px / 96px, -0.96px**: the ghost statement and "It's time to work differently." (`--hd-h4--size: 96px`).
- **Section heading — Agrandir 700, 48px / 52.8px**: "Diagrams", "Wireframes" (`--hd-h6--size: 48px`); 24px with -0.24px is also measured (49 characters).
- **Body — Manrope**, 16px (the dominant size, 1504 characters), weight 500 as the base (`--body--base-font-weight: 500`), 600 for subheadings at 16px / 22.4px.
- **Button — Manrope 700, 16px / 16px** (`--btn--size: 16px`, `--btn--line-height: 1em`, `--btn--base-font-weight: 700`).
- **Kicker — 9px with 1.35px tracking** and **10px with 0.3px**, small labels (`--kicker-small--size: 9px`).
- **Logo heading — Manrope 700, 32px**: the empty h1 that wraps the header logo.

The CSS heading scale reaches far beyond the home page: `--hd-h1--size: 288px` (-8.64px), `--hd-h2--size: 192px` (-5.76px), `--hd-h3--size: 128px` (-2.56px). **Substitutes:** Manrope is free; Agrandir is a commercial face; a geometric grotesk such as Plus Jakarta Sans or Outfit at 700 is a close stand-in.

## Layout

Content sits in a centred column (`--max-content-width: 1320px`, with `--max-content-width-wider: 1360px` and `-x-wide: 1780px`), from x=100 to x=1224 in the measured band. The header bar is padded 20px 40px 0px. The hero panel spans almost the full width. Product sections alternate text and image left/right; feature and product-card grids use up to 4 columns, with three per row in the capture.

Spacing is generous: paddings of 24px and 11px are the most frequent, then 40px, 60px, 48px, 80px, 120px and 160px for the big panels. Gaps include 2px, 8px, 20px, 24px, 16px, 40px and 32px. The primary button uses 4px 12px in the header and 8px 40px 8px 20px in content (leaving room for the arrow chip). The footer panel is padded 40px.

## Elevation & Depth

Shadows are tinted with the brand plum rather than black. Measured: `rgba(37, 8, 53, 0.06) 0px 16px 32px -4px` (5 elements), `rgba(37, 8, 53, 0.2) 0px 12px 16px -4px` (3, the Get started buttons), `rgba(37, 8, 53, 0.04) 0px 8px 16px -4px` and `rgba(0, 0, 0, 0.05) 0px 16px 40px 0px`. On hover, "Get started free" deepens its shadow to `rgba(37, 8, 53, 0.24) 0px 16px 32px -8px`. The CSS names the levels `--ds-dark-low`, `--ds-dark-medium`, `--ds-light-low`, `--ds-light-medium`. Gradient panels are overlaid with a translucent plum (`rgba(37, 8, 53, 0.08)` and `0.2`) and a grain texture (`--grain-5-url`, `--grain-10-url`, `--grain-15-url`) that gives the painted look.

## Shapes

Small controls use modest radii and large surfaces use dramatic ones. Buttons use 12px (11 elements); other controls 8px (14) and 16px (7); avatars and icon chips 50%. The gradient panels use 120px and 160px (2 each), 80px and 40px, and some are rounded on only some corners, so the blobs read as soft asymmetric shapes. The logo is a violet faceted diamond mark. Illustrations are soft, blurred colour fields behind crisp UI fragments.

## Components

- **Sign up** — `#250835` fill, white Manrope 700 16px/16px, 12px radius, 4px 12px padding, 48px tall; hover inverts to white with a plum label.
- **Log in** — `rgba(34, 10, 51, 0.05)` fill, plum label, 12px radius, 4px 12px padding, 48px tall; hover fills plum with a white label.
- **Get started free** — `#250835`, white label, 12px radius, 8px 40px 8px 20px padding, 48px tall, a white arrow chip at the right, shadow `rgba(37, 8, 53, 0.2) 0px 12px 16px -4px`. A white variant with a plum label is used on dark panels.
- **Gradient panel** — `#decaff` base with a painted gradient image, plum overlay and grain, 120px radius, holding a product screenshot.
- **Product card** — white card with a screenshot thumbnail, a 24px Agrandir title, `#6a5b72` copy and a `#ab2fed` "Explore … ›" link.
- **Nav link** — Manrope plum text with a `rgba(34, 10, 51, 0.04)` hover fill.
- **Footer** — inside the final gradient panel: a white card with four link columns, an "Ask about Whimsical on" row of icons and legal links.

## Design System Architecture

No public Whimsical brand guideline could be opened: https://whimsical.com/brand redirected to http://whimsical.com/brand/ and then looped (curl stopped after 50 redirects). The shipped CSS exposes a thorough de-facto system in 285 root variables: display-p3 colour ramps (`--purple-200` … `--purple-500`, `--blue-100` … `--blue-600`, `--pink-600`, `--hot-pink-*`, `--orange-*`, `--yellow-*`, `--mint-600`, `--base-0`, `--base-10`, `--base-750`), a heading scale (`--hd-h1--size: 288px` down to `--hd-h8--size: 20px`, each with its letter-spacing), body sizes (`--body-tiny--size: 10px` to `--body-jumbo--size: 48px`), button sizes (`--btn-extra-small--size: 13px` to `--btn-large--size: 24px`), link and kicker scales, widths (`--max-content-width: 1320px`, `--max-article-content-width: 650px`), easing curves (`--base-easing: cubic-bezier(.3, .1, 0, 1)`, `--over-bounce-easing-out: cubic-bezier(.315, 1.85, .63, .795)`), shadow levels (`--ds-dark-*`, `--ds-light-*`) and grain textures. Asset paths (`/_astro/`, `/_next_public/abstract-bgs/tundra-sunset/`) show the painted backgrounds come from a named image set ("tundra-sunset").

## Do's and Don'ts

**Do**
- Use deep plum `#250835` for primary buttons and headings on light surfaces.
- Set headlines in Agrandir 700 with tracking of -1% of the size; set everything else in Manrope 500–700.
- Put product screenshots inside huge rounded gradient panels (80px–160px radius) with grain.
- Keep buttons at 12px radius and 48px tall, with a plum-tinted shadow.
- Use `#6a5b72` for body copy and `#ab2fed` for "Explore ›" links.
- Keep copy short, friendly and builder-focused.

**Don't**
- Don't use pure black text or black shadows; tint with plum.
- Don't use flat, saturated fills for large areas; the colour comes from soft painted gradients.
- Don't use sharp corners on panels.
- Don't make buttons pills; the measured button radius is 12px.
- Don't use Agrandir for body text.

## Responsive Behavior

The extractor's 390px mobile pass recorded: the hero h1 "The whiteboard for product builders" in white Agrandir 700 at 48px / 52.8px with -0.24px tracking (296px wide). Section headings ("Diagrams") stay 48px / 52.8px. Body copy stays Manrope 600 16px / 22.4px. The mobile primary CTA is "Get started free": `#250835`, white Manrope 700 16px/16px, 12px radius, 12px 44px 12px 20px padding, 56px tall (48px on desktop), with the same plum shadow. The layout probe recorded 0 visible header text links on mobile (6 on desktop), no menu toggle detected, and a maximum of 4 card columns on both. Mobile font sizes: 16px, 24px, 48px, 14px, 9px, 64px and 10px. CSS breakpoints include 375px, 720px, 860px, 992px, 1100px, 1280px, 1440px and 2200px. Panel shapes at mobile width were not measured.

## Iteration Guide

1. Start with a `#f7f7f8` page and a floating white header with plum text, a light "Log in" and a plum "Sign up".
2. Build the hero as a full-width rounded panel with a grainy pastel sunset gradient; centre a white Agrandir 700 64px headline, a short Manrope line and a plum 48px button.
3. Place a large product screenshot inside the hero panel.
4. Alternate product sections with screenshots inside 120px–160px-radius gradient blobs and 48px Agrandir headings.
5. Use Manrope 16px (500 base, 600 subheads, 700 buttons) in `#6a5b72` / `#473054`.
6. Tint shadows with `rgba(37, 8, 53, …)`.
7. End with a gradient panel, a 96px Agrandir statement and the footer card.
