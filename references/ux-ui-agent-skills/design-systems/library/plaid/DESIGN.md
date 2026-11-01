---
version: alpha
name: "Plaid"
category: "Banking & Insurance"
description: "Plaid (plaid.com) is a fintech data-network site: white canvas, navy #02294b ink, teal #05565c, footer #00172e, Plaid Sans and Cern, tightly tracked headings and fully rounded pill buttons with soft multi-layer shadows."
colors:
  canvas: "#ffffff"
  ink: "#02294b"
  primary: "#05565c"
  surface-footer: "#00172e"
  surface-night: "#0d0d3f"
  ink-near-black: "#111112"
  ink-deep-teal: "#012e37"
  ink-light: "#c5c5c5"
  link: "#003e4a"
  text-input-text: "#4b4b4b"
  footer-text: "#d8fef3"
typography:
  display:
    fontFamily: >-
      "Plaid Sans", Cern, "Avenir Next", Avenir, "Proxima Nova", "Jakarta Plus Sans", Futura, "Avant Garde", Montserrat, "Helvetica Neue", Helvetica, "Nimbus Sans", system-ui, -apple-system,
      "system-ui", Arial, "Segoe UI", Roboto, Oxygen, sans-serif
    fontSize: 70px
    fontWeight: 500
    lineHeight: 78.4px
    letterSpacing: "-2.8px"
  display-mobile:
    fontFamily: >-
      "Plaid Sans", Cern, "Avenir Next", Avenir, "Proxima Nova", "Jakarta Plus Sans", Futura, "Avant Garde", Montserrat, "Helvetica Neue", Helvetica, "Nimbus Sans", system-ui, -apple-system,
      "system-ui", Arial, "Segoe UI", Roboto, Oxygen, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: >-
      "Plaid Sans", Cern, "Avenir Next", Avenir, "Proxima Nova", "Jakarta Plus Sans", Futura, "Avant Garde", Montserrat, "Helvetica Neue", Helvetica, "Nimbus Sans", system-ui, -apple-system,
      "system-ui", Arial, "Segoe UI", Roboto, Oxygen, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: >-
      "Plaid Sans", Cern, "Avenir Next", Avenir, "Proxima Nova", "Jakarta Plus Sans", Futura, "Avant Garde", Montserrat, "Helvetica Neue", Helvetica, "Nimbus Sans", system-ui, -apple-system,
      "system-ui", Arial, "Segoe UI", Roboto, Oxygen, sans-serif
    fontSize: 26px
    fontWeight: 500
    lineHeight: 36.4px
    letterSpacing: "-0.5px"
  body:
    fontFamily: Cern, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  nav:
    fontFamily: Cern, "Helvetica Neue", Helvetica, "Nimbus Sans", system-ui, -apple-system, "system-ui", Arial, "Segoe UI", Roboto, Oxygen, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
    letterSpacing: "-0.75px"
  input:
    fontFamily: Cern, Helvetica, Arial, sans-serif
    fontSize: 16.5px
    fontWeight: 400
    lineHeight: 24.75px
rounded:
  xs: 2px
  sm: 6px
  md: 8px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 27.09px
  4xl: 35px
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
  s9: 13.5px
  s10: 16px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    padding: 12px 20px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 5px 0px inset
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    padding: 12px 20px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 1px 5px 0px inset
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 8px 8px 8px 16px
    height: 48px
    borderColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 5px
    boxShadow: rgba(243, 49, 247, 0.43) 0px 0px 36px 5px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.footer-text}"
    padding: 80px 100px
---

## Overview

Plaid (plaid.com, title "Plaid: Enabling all companies to build fintech solutions") is the financial-data network and API company. The measured home page opens with a deep blue-to-teal hero carrying an engraved portrait overlaid with color gradients and the headline "Turn data into revolutionary financial products", whose words are filled with a green-to-teal radial gradient. Under it: "Connect to real-time insights on the Plaid Network to create fast, safe, and smart financial experiences.", two pill buttons ("Talk with our team", pale cyan; "Start building", near-black with a gradient outline), a row of customer logos, and a "Fall Release" banner card ("New products just dropped" / "See what's new across Plaid"). Below the hero the page turns white and lavender: "Powered by the largest financial network. Built for every financial need.", a "See all products" button, and a grid of rounded gradient cards for Bank payments, Credit scoring & underwriting, Fraud protection, Instant onboarding and Personal financial management, each with a product UI illustration and a small circular arrow. Later sections cover "The AI infrastructure behind smarter financial products", "A network that makes your products better", "Want access to 12K banks? We've got the API keys." and "Start building better financial products". The footer is dark navy with rounded top corners.

Navigation labels are Products, Solutions, Developers, Resources, Pricing, Log in and Contact sales. Other calls to action: "Explore intelligent finance", "Get the API keys", "Read the docs". The voice is plain and confident with the occasional emoji.

## Colors

From `web/data/extracted/plaid.json`:

- **canvas `#ffffff`**: the largest area (weight 5,589).
- **ink `#02294b`**: Plaid navy, the most-read text (1,918 characters) and the input border.
- **primary `#05565c`**: deep teal, 624 characters of text (the generated primary); the link color `#003e4a` and `#012e37` text are darker teal relatives.
- **surface-footer `#00172e`**: the footer background (area 1,693).
- **surface-night `#0d0d3f`**: deep indigo (area 879).
- **ink-near-black `#111112`**: 587 characters.
- **ink-light `#c5c5c5`**: 246 characters on dark.
- **footer-text `#d8fef3`**: mint-white text in the footer.
- **text-input-text `#4b4b4b`**: input text.

Additional measured backgrounds: `#02294b` (777), `#0c1116` (264), `#eaddfd` lavender (135), `#ccf8ff` pale cyan (44, the "Talk with our team" pill and the banner hover surface). Text colors also include `#5c7695` (card descriptions, 191 characters) and `#383838` (body paragraphs). Border colors: #02294b (6), #a3a3ff (5), #11111114 (3).

The root variables (300 of them) declare a scale per hue: `--blue900 #0072cf`, `--blue700 #37b0f4`, `--blue400 #b1eefc`, `--blue200 #d4f9ff`, `--green1000 #1e8262`, `--green800 #23d09c`, `--purple1000 #4726a3`, `--purple900 #5c2ec7`, `--purple800 #7646ec`, `--purple600 #9986f7`, `--purple400 #c6befc`, `--red1000 #b72743`, `--red900 #d83d57`, `--red800 #f44e66`, `--yellow1000 #dba81b` and neutrals `--black200 #f6f6f6` to `--black900 #383838`, plus a "t5" scale `--t5-black-100 #fff` to `--t5-black-1000 #111112`. The hero gradient on mobile is `radial-gradient(circle at 0% 0%, rgb(134, 239, 90) 0.86%, rgb(16, 208, 183) 38.09%, rgb(255, 255, 255) 69.81%)`.

## Typography

Two sans families drive the page: **Plaid Sans** (2,639 characters, weights 400 to 600) for headlines, and **Cern** (3,453 characters, weights 400 to 800) for body, buttons and footer. Inconsolata (271 characters, 22px) appears for mono text and Bowery Street (16 characters, weight 300) as a script accent. The headline stack lists Plaid Sans, Cern, Avenir Next, Avenir, Proxima Nova, Jakarta Plus Sans, Futura, Avant Garde, Montserrat, Helvetica Neue, Helvetica, Nimbus Sans and system fonts.

- **display** (h1): Plaid Sans 70px / 78.4px, weight 500, letter-spacing -2.8px. Mobile: 32px / 32px, -1.28px.
- **subheading**: 26px / 36.4px, weight 500, letter-spacing -0.5px (card titles in `#5c7695`).
- **heading**: 20px / 22px, weight 600, letter-spacing -0.4px ("New products just dropped").
- **body**: Cern 24px / 36px, weight 400 (hero paragraph, 246 characters); mobile body measures 18px / 27px.
- **nav**: Cern 20px / 30px, weight 600, letter-spacing -0.75px (button and link labels).
- **input**: Cern 16.5px / 24.75px, weight 400.

The commonest sizes by character count are 30px (1,877), 16px (1,236), 20px (1,017), 13px (624), 14px (399), 26px (296), 22px (271) and 24px (246). Section titles at 30px use letter-spacing -0.9px (1,738 characters) and -1.2px (122). Other display spacings: 54px/-2px and 70px/-2px. Tight negative tracking is applied at every large size.

## Layout

The page is 1280px wide and 9,127px tall. The hero is a full-bleed 923px-high header region with content left-aligned at the top of a wide gradient image. The footer padding is 80px 100px and its height 1,323px. Body paragraphs carry 0px 100px 0px 0px padding to hold a measure. Measured gaps: 1px (88), 8px (88), 30px (80), 2px (72), 12px (46), 32px, 24px, 16px. Paddings: 8px (46), 12px, 1px, 24px, 3px, 40px, 13.5px and 32px. The product card grid uses two wide cards in the first row and three narrower cards in the second.

## Elevation & Depth

Shadows are soft and mostly low-contrast: `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` (4), a five-layer stack with `rgba(125,125,125,0.1) 0px 3.585px 7.887px` up to `rgba(125,125,125,0) 0px 86.756px 24.378px` (3, the large product cards), `rgba(0, 0, 0, 0.15) 0px 1px 5px 0px` (2) and the inset `rgba(0, 0, 0, 0.15) 0px 1px 5px 0px inset` on the cyan pill. Hover on the release banner raises the shadow from `rgba(0,0,0,0.14) 0px 1px 16.5px` to `rgba(0,0,0,0.4) 0px 1px 16.5px` and lightens the background from rgb(204,248,255) to rgb(229,252,255). Depth also comes from translucent gradient cards and blurred glows (a magenta glow shadow `rgba(243, 49, 247, 0.43) 0px 0px 36px 5px` was measured on one card).

## Shapes

Very rounded. Radii measured: 100px (100 elements, pills), 20px (40), 6px (18), 24px (13, large cards), 8px (6, inputs), 50% (5), 46px (3, the cyan pill), 16px (3). The footer has 40px 40px 0px 0px rounded top corners. Tokens: `xs 2px`, `sm 6px`, `md 8px`, `lg 16px`, `xl 20px`, `2xl 24px`, `3xl 27.09px`, `4xl 35px`, `pill 9999px`.

## Components

- **link / nav-link ("Talk with our team")**: pale cyan pill, label `#003e4a` Cern 20px / 30px weight 600, padding 12px 20px, height 48px, width 197px, radius 46px, inset shadow.
- **Start building**: near-black pill with a gradient outline, white label. Its colors were not captured by the extractor as a CTA candidate, so no token is declared for it.
- **text-input**: white fill, `#4b4b4b` text, 16.5px, 1px solid `#02294b` border, radius 8px, padding 8px 8px 8px 16px, height 48px.
- **card**: white or gradient panel, navy text, radius 20px or 24px, with a circular arrow button.
- **footer**: `#00172e`, `#d8fef3` text, 40px rounded top corners, padding 80px 100px.
- **Release banner**: pale cyan card with a "Fall Release" notebook tab and a two-line label; lifts on hover.

## Design System Architecture

No brand-guideline, press-kit or design-system page was found: the home page links only to a general Press page under About us, which was not opened. The shipped CSS is a tokenised system with 300 root variables: hue scales (`--blue200` to `--blue900`, `--green800`, `--purple400` to `--purple1000`, `--red200` to `--red1000`, `--yellow200` to `--yellow1000`, `--black200` to `--black900`), a component-token layer prefixed `--t5-` (`--t5-button-text-solid-resting`, `--t5-textinput-message-focused`, `--t5-button-icon-ghost-loading`, `--t5-black-100` to `--t5-black-1000`) and semantic tokens (`--color-fill-bg-tertiary`, `--color-border-state-focused`, `--input-border`, `--input-text-error`, `--tooltip-dark-text`). Source: https://plaid.com/ (measured with `web/scripts/extract-tokens.mjs`).

## Do's and Don'ts

- Do use navy #02294b for text on white and #00172e for dark footers.
- Do apply tight negative tracking to Plaid Sans headings.
- Do keep buttons as full pills; use the pale cyan with teal text for secondary actions.
- Do pair gradients (blue to teal, lavender) with white card surfaces.
- Don't use flat black for text; the darkest measured text is #111112.
- Don't use bold above 600 for UI labels.
- Don't use the magenta glow shadow beyond decorative cards.

## Responsive Behavior

Measured on the 390px pass: the hero h1 is Plaid Sans 32px / 32px weight 500, letter-spacing -1.28px, filled with the gradient above; body paragraphs are 18px / 27px; the most-read sizes are 20px (2,051 characters), 16px (1,213), 14px (1,150), 18px (928), 10px (348), 12px (271) and 32px (174). Navigation, card grid and image behavior on mobile are not measured.

## Iteration Guide

1. Canvas #ffffff, ink #02294b, footer #00172e, accent teal #05565c.
2. Headings in Plaid Sans 500 with the measured negative tracking; body in Cern 24px / 36px.
3. Buttons are pills 48px high; cards at 20px or 24px radius.
4. Run `node web/scripts/verify-designs.mjs --slug=plaid` after edits and never change measured values.
