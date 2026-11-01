---
version: alpha
name: Revolut
category: "Fintech & Crypto"
description: "Revolut's UK homepage as measured on the live site — a full-bleed photographic hero with white Aeonik Pro 500 display type at 84.6578px, a near-black #1f1f1f pill call-to-action (9999px radius, 10px 24px padding), Inter at 12px for running text, and alternating white, #000000 and #191c1f bands. Product UI is driven by a --rui-* token set shipped in the page CSS."

colors:
  canvas: "#ffffff"
  ink: "#1f1f1f"
  primary: "#1f1f1f"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-dark: "#191c1f"
  ink-on-dark: "#c9c9cd"
  ink-muted: "#717173"
  ink-soft: "#1f1f1fcc"
  grey-subtle: "#f7f7f7"
  blue: "#4275db"
  cold-blue: "#0666eb"
  teal: "#00a17a"
  danger: "#a90b1a"
  success: "#005f48"
  warning: "#774915"

typography:
  display:
    fontFamily: "\"Aeonik Pro\", sans-serif"
    fontSize: 84.6578px
    fontWeight: 500
    lineHeight: 84.6578px
    letterSpacing: "-2.08px"
  display-mobile:
    fontFamily: "\"Aeonik Pro\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
  heading:
    fontFamily: "\"Aeonik Pro\", sans-serif"
    fontSize: 50.3289px
    fontWeight: 500
    lineHeight: 50.3289px
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: "\"Aeonik Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.18px
  button:
    fontFamily: "\"Aeonik Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, Arial, Arimo, sans-serif"
    fontSize: 16px
    fontWeight: 400

rounded:
  xs: 12px
  sm: 20px
  md: 50px
  pill: 9999px

spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 26px
  s9: 32px
  s10: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-black}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink-on-dark}"
    padding: 40px 140px
---

## Overview

The Revolut UK homepage opens on a photograph, not on an interface. A woman in a linen shirt fills the first screen against a blue sky, the h1 "Banking & Beyond" is set in white Aeonik Pro at 84.6578px / weight 500, and a single dark pill reading "Download the app" is the only filled call to action in the hero. Beneath the hero, the page drops to a plain white band of social proof (app-store rank, Trustpilot score, award badges), then to a second full-bleed photograph of a hiker at dusk, and finally to a dark footer. The rhythm is image, white, image, dark: large atmospheric photography does the emotional work and the interface chrome stays almost invisible.

The microcopy is short and declarative: "This is your bank, redefined", "Join 80+ million customers worldwide and 13 million in the UK", "Your salary, reimagined". Section titles are sentence case and rarely longer than five words. Button labels are verbs or verb phrases: "Download the app", "Move your salary", "Explore Savings", "Start earning", "Learn more".

What the measurement shows is a restrained palette. The page background is #ffffff; the most-read ink is #1f1f1f; the large dark areas are #000000 and #191c1f. There are no gradients in the measured colour list and no measured box shadows on the homepage elements, so depth comes from photography and from contrast between bands rather than from elevation.

## Colors

Colour on this page is neutral by default and chromatic only inside photography and product imagery.

- **Canvas** `#ffffff` is the white band that carries the social-proof section and most card surfaces.
- **Ink** `#1f1f1f` is the dominant text colour on white and the fill of the primary button. It is also published in the shipped CSS as `--rui-color-black`. A 80% alpha variant, `#1f1f1fcc`, is used for secondary text on white.
- **Surface black** `#000000` and **surface dark** `#191c1f` are the two large dark areas by DOM area; `#191c1f` is the footer background.
- **Ink on dark** `#c9c9cd` is the most-read text colour by character count (the footer legal text) and is shipped as `--rui-color-grey-20`.
- **Ink muted** `#717173` is the caption grey used for the "Join 80+ million customers" line and for award captions (shipped as `--rui-color-grey-50`).
- **Grey subtle** `#f7f7f7` is `--rui-color-grey-2`, a very light neutral for grouped backgrounds.

The page CSS also declares a semantic palette as `--rui-color-*` custom properties. The values recorded here are read from those declarations on the live homepage: blue `#4275db`, cold blue `#0666eb`, teal `#00a17a`, danger `#a90b1a`, success `#005f48` and warning `#774915`. They are product-level colours (status, charts, category accents); on the homepage itself they do not appear as large fills. Other families in the same set include indigo, purple, pink, orange, lime and several "metal" and "premium" tones, which are not reproduced here.

## Typography

Two families are loaded: **Aeonik Pro** (weight 500 only) for display, headings, subheadings and buttons, and **Inter** (variable weight) for running text. Aeonik Pro is released by CoType Foundry, designed by Mark Bloom, and sold in seven weights from Air to Black (source: The Brand Identity article on the Aeonik Pro launch). The shipped CSS names two font roles, `--rui-font-brand` which resolves to Inter followed by the system stack, and `--rui-font-system`, which resolves to `--rui-font-default`, an `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue"…` stack. The nav links measured on the page use that system stack at 16px / 400.

Measured scale on desktop (1280px): display 84.6578px with line-height equal to the font size and -2.08px tracking; heading 50.3289px with -0.6px tracking; subheading 18px / 24px; button 16px / 22px at weight 500; body 12px / 18px with +0.18px tracking. On a 390px viewport the h1 becomes 48px / 48px. By character count the page is dominated by the 12px Inter legal copy, so the body token reflects the footer-weight reading size rather than a marketing paragraph size.

Display type uses tight negative tracking and a line-height of exactly 1.0 — headlines pack closely and rely on the photograph behind them for breathing room.

### Font substitutes

Aeonik Pro is a commercial typeface and is not provided here. Inter, which the page already uses for body, is a reasonable stand-in for Aeonik Pro at 500 weight where the licence is not available; expect slightly wider, less geometric forms and re-check the -2.08px tracking at large sizes.

## Layout

The page scroll height measured on desktop is 8071px at a 1280px viewport. Content in the hero and the social-proof band is left-aligned inside a container roughly 1000px wide (the h1 and the body paragraph both measure 1000px wide). Social-proof logos and badges sit in a four-up row followed by a three-up row, centred under a single muted caption.

Spacing values that recur in the measured gaps and paddings: 4, 8, 12, 16, 24, 32 and 56px for gaps, and 4, 8, 10, 20, 24 and 26px for paddings. The footer padding is 40px 140px. The hero places the 10px 24px pill button directly under a short paragraph with a large vertical gap above and below; text blocks never exceed about three lines.

A translucent phone-shaped outline with an account balance ("Personal £6,012") and an "Accounts" pill sits centred over the hero photograph, a layered treatment where product UI is composited onto the photo.

## Elevation & Depth

No box shadows were measured on the homepage's visible elements. The shipped CSS does define an elevation scale: `--rui-shadow-level1` through `--rui-shadow-level4` (for example level2 is `0 0.1875rem 0.5rem rgb(0 0 0/0.1)` and level4 is `0 1rem 4rem rgb(0 0 0/0.12)`), plus a `--website-shadow-level-5` built from three very faint `rgba(25,28,31,0.04)` layers. These belong to product and card components; the marketing page itself separates layers with full-bleed colour and photography instead. Hover is a pure opacity change: measured on the white "Sign up", the "Download the app" pill and the transparent "Log in" pill, opacity goes from 1 to 0.85 and nothing else (colour, border, height) changes; the "Log in" pill additionally gains a `rgba(255, 255, 255, 0.06)` background.

## Shapes

Radius is binary. Every measured button is `9999px` (the pill), 21 elements in the border-radius table. Cards and image containers use `20px` (8 elements, with a `20px 20px 0px 0px` top-only variant) and `12px` for smaller nested widgets; one `50px` radius appears four times. The CSS also publishes a radius ladder (`--rui-radius-rd100` 0.25rem through `--rui-radius-rd600` 1.5rem, plus `--rui-radius-round: 9999px`, `--rui-radius-widget` and `--rui-radius-nested-widget` pointing at 16px and 12px steps). Photography is cropped to full-bleed rectangles, never rounded on the hero.

## Components

- **Primary button.** `#1f1f1f` fill, white 16px Aeonik Pro 500 label, 9999px radius, padding 10px 24px, 42px tall. Measured on "Download the app" and "Move your salary".
- **Secondary button.** White fill with `#000000` text, same pill, same 10px 24px padding (one variant uses 10px 26px). Measured on "Explore Savings", "Start earning", "Learn more" and "Physical cards". The nav "Sign up" pill is the same white-on-dark treatment, 42px tall, with a `#000000` border.
- **Ghost button.** The nav "Log in" is a transparent pill with a white border over the hero image.
- **Nav.** White 16px system-stack links ("Personal", "Business", "Kids & Teens", "Company") over the hero, with the wordmark on the left and "Log in" / "Sign up" on the right.
- **Card.** White surface, `20px` radius, no shadow in the measured data.
- **Footer.** `#191c1f` background, `#c9c9cd` 12px legal text, padding 40px 140px.

## Design System Architecture

Revolut does not publish a public design system, token package or brand guidelines that could be opened for this entry: the pages searched for it either returned 403 to the fetcher or were third-party. What the live site does expose is its own CSS. The homepage stylesheet declares a `--rui-*` custom-property set (358 root variables were captured; what the prefix stands for is not stated by Revolut on any page that was read) covering colour (`--rui-color-*`, with semantic names such as danger, positive, warning and a numbered grey ramp from grey-2 to grey-50), radius (`--rui-radius-*`), spacing (`--rui-space-sp50` = 0.125rem, `--rui-space-sp600` = 1.5rem), type size (`--rui-font-size-marketing-display1` = 3.5rem, display2 = 2.5rem, display3 = 2rem, `--rui-font-size-heading1` = 1.5rem), button heights (`--rui-size-button-xs` 1.875rem, sm 2.5rem, md 3.25rem), and shadows. A small `--website-*` layer (for example `--website-color-grouped-background`) sits on top for marketing-only overrides. Marketing typography lives in a separate "marketing-display" scale from product headings, which is why the homepage h1 is far larger than the product `heading1` token.

Sources read: the Aeonik Pro foundry coverage at https://the-brandidentity.com/feed/cotype-foundry-launches-aeonik-pro-alongside-set-museum-inspired-specimen-books/ and the live page's own CSS (extraction of https://www.revolut.com).

## Do's and Don'ts

Do:
- Pair a photograph with white Aeonik Pro 500 display type at tight negative tracking; keep the hero to one headline, one short paragraph and one filled button.
- Use `#1f1f1f` for the one primary action and 9999px radius on every button.
- Alternate white and dark (`#000000`, `#191c1f`) bands to create rhythm.
- Express hover as an opacity drop to 0.85.
- Keep labels to a verb phrase.

Don't:
- Add box shadows or gradients to marketing buttons or cards; none were measured.
- Introduce a brand accent colour in large fills — the chromatic `--rui-color-*` values are for status and product charts.
- Mix radii on buttons; reserve 20px and 12px for cards and nested widgets.
- Set long paragraphs in Aeonik Pro; running text is Inter.

## Responsive Behavior

Two viewports were measured, 1280px and 390px. At 390px the h1 reduces from 84.6578px to 48px (line-height 48px, tracking returns to normal) and the h1 box becomes 350px wide, i.e. full width minus a 20px gutter on each side. The page keeps the single-column photographic hero, and the CTA stays a pill. The CSS exposes three button sizes (1.875rem, 2.5rem and 3.25rem tall) that product surfaces can switch between by density. Nothing else about breakpoints was measured, so no breakpoint pixel values are claimed here.

## Iteration Guide

1. Start from the white canvas `#ffffff`, ink `#1f1f1f`, and a full-bleed photograph; do not add a colour palette before the photography is chosen.
2. Build display type first: Aeonik Pro 500, 84.6578px, line-height equal to size, -2.08px tracking; drop to 48px for mobile.
3. Place one pill (`#1f1f1f`, 10px 24px, 9999px) under a short Inter paragraph; add a white pill only if a second action is needed.
4. Add proof sections on white with `#717173` captions, then close with a `#191c1f` footer.
5. When a status colour is needed, take it from the semantic set (danger `#a90b1a`, success `#005f48`, warning `#774915`, blue `#4275db`) rather than inventing one.
6. Verify after each change that every colour, size and radius used is in the front matter above.
