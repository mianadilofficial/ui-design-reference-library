---
version: alpha
name: Sharplink
category: "Product & SaaS"
description: "Sharplink (sharplink.com), an institutional-grade Ethereum treasury company listed on Nasdaq: Archivo 88px/84.48px display headings with tight negative tracking, Archivo Narrow 13px uppercase button labels, warm off-white canvas #f7f7f5, #f3f3f3 square CTA with a brand-blue #0e76ff arrow tile, and 0px radius everywhere."
colors:
  canvas: "#f7f7f5"
  ink: "#000000"
  primary: "#f3f3f3"
  on-primary: "#000000"
  brand-blue: "#0e76ff"
  ink-on-dark-muted: "#f3f3f399"
  ink-muted: "#00000099"
  hairline: "#00000026"
  surface-news-card: "#26262973"
typography:
  display:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\""
    fontSize: 88px
    fontWeight: 400
    lineHeight: 84.48px
    letterSpacing: "-2.64px"
  display-mobile:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\""
    fontSize: 52px
    fontWeight: 400
    lineHeight: 54.08px
    letterSpacing: "-1.3px"
  heading:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\""
    fontSize: 68px
    fontWeight: 400
    lineHeight: 72.08px
    letterSpacing: "-1.36px"
  subheading:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 37.12px
    letterSpacing: "-0.32px"
  body:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\""
    fontSize: 44px
    fontWeight: 400
    lineHeight: 54.12px
    letterSpacing: "-0.44px"
  button:
    fontFamily: "\"Archivo Narrow\", \"Archivo Narrow Fallback: Arial\""
    fontSize: 13px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: 1.04px
    textTransform: uppercase
  nav:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  input:
    fontFamily: "Archivo, \"Archivo Fallback: Arial\""
    fontSize: 19px
    fontWeight: 500
    lineHeight: 25.65px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 22px
  s9: 25px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 34px
  link:
    backgroundColor: "{colors.surface-news-card}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 64px 0px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 26px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

Sharplink (https://www.sharplink.com/, page title "Sharplink : Home") presents itself in the hero copy as "the institutional-grade Ethereum treasury platform giving investors a smarter, more productive access vehicle to ETH". The capture shows a "Proudly listed on Nasdaq" lockup, a company-news card ("Sharplink Reports Second Quarter 2026 Financial and Operating Results", dated Aug 10, 2026), and the headline "Ethereum with an Edge". The visual language is a dark, cinematic 3D hero (a chrome Ethereum octahedron floating in a field of rippling metallic bands, graded deep blue) that gives way to a warm off-white page (#f7f7f5) with large black Archivo headlines such as "The Stack for Stacking Ethereum" and "Built by Proven Pioneers". Small uppercase section labels ("PROPOSITIONS") with a tiny blue square and a dotted rule introduce each band.

The measured page is 1,280px wide and 8,488px tall. It is a financial brand that avoids finance clichés: no charts in the opening, no rounded SaaS cards, no gradients on the type. It uses technical, monospaced-feeling microcopy in uppercase Archivo Narrow with wide letter spacing for navigation and buttons, and large, tight, light-weight Archivo for statements. The tone is confident and compact: "Explore the dashboard", "See investor information", "Sign up to stay sharp:".

A cookie banner sits at the top of the raw capture; it is a consent overlay and is not documented as brand UI. The extractor hid it (`consentOverlaysHidden: cookie-banner theme-dark`) and the tokens were re-generated after a clean re-measurement.

## Colors

Colors come from measured roles and from the site's own custom-property palette, which uses named groups (`--surface-background`, `--surface-darker-tertiary`, `--brand-blue-primary`, `--brand-blue-secondary`, `--brand-beige`, `--off-white`, `--grey-secondary`, `--utility-error`).

- **Canvas #f7f7f5.** The body background and `--surface-background`.
- **Ink #000000.** Headlines and light-section text (794 characters).
- **Off-white #f3f3f3.** Text on the dark hero (1,382 characters) and the fill of the primary CTA, named `primary`; text on it is #000000.
- **Brand blue #0e76ff.** `--brand-blue-primary`; it fills the arrow tile at the end of the primary button and the tiny square markers. Named `brand-blue`. A lighter `--brand-blue-secondary` is rgba(153,197,255,*), published only with alpha values, so it is not a flat token here.
- **Off-white muted #f3f3f399.** Secondary text on dark (149 characters).
- **Ink muted #00000099.** Secondary text on light (14 characters).
- **Hairline #00000026.** The only measured border color (2 uses).
- **News card #26262973.** `--surface-darker-tertiary`, the translucent dark card behind the company-news link.
- **Other published tokens, not tokenised.** `--grey-secondary: #a9a9a9`, `--surface-lighter: #eeeef01a`, `--utility-error: rgba(255,14,82,.8)`, `--brand-beige` (hsla 33 33% 94%), all declared in the stylesheet; they were not measured on a rendered element except where listed above.

## Typography

Two Archivo cuts, loaded in weights 400 and 500: **Archivo** (proportional grotesque) for statements, and **Archivo Narrow** for labels. Both are open-source Google Fonts families, so they are directly available.

- **Display:** Archivo 88px / 84.48px, weight 400, letter spacing -2.64px (h1 "Ethereum with an Edge"); mobile 52px / 54.08px, -1.3px.
- **Heading:** Archivo 68px / 72.08px, weight 400, -1.36px (h2); mobile measured 44px / 54.12px, -0.44px.
- **Subheading:** Archivo 32px / 37.12px, weight 500, -0.32px (h3 "Built by Proven Pioneers").
- **Body (extracted role):** Archivo 44px / 54.12px, weight 400, -0.44px, the pull statement "Ethereum for Everyone, Engineered to Compound." Most characters on the page are smaller: 16px (898 characters), 13px (715), 19px (487), 32px (121), 24px (62), 68px (38), 88px (18).
- **Button and label:** Archivo Narrow 13px / 18.2px, weight 500, letter spacing 1.04px, uppercase.
- **Nav:** Archivo 16px, weight 400.
- **Input:** Archivo 19px / 25.65px, weight 500.

Weights are 500 (1,454 characters) and 400 (1,002 characters) only.

## Layout

Hero is full-bleed with a 98px-tall header (top padding 64px) containing the logo at left and boxed nav buttons at right: About, Investors, Opportunity, News, ETH Dashboard and an arrow button. The hero text is left-aligned with two stacked CTAs; a Nasdaq lockup sits bottom-left, a description paragraph bottom-center, and the news card bottom-right. Below, bands on #f7f7f5 use a left column for a large heading and a right column for a rendered 3D object (a chrome canister in the capture). The footer is 788px tall with a newsletter prompt ("Sign up to stay sharp:" and a SIGN UP button) and a Nasdaq statement.

Measured gaps: 2px (40 uses), 28px (36), 8px (21), 4px (20), 12px, 20px, 16px. Measured paddings: 28px (21), 20px (16), 16px (14), 22px, 52px, 8px. The generated spacing scale lists 2, 4, 5, 8, 12, 16, 20, 22, 25 and 28px.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth is created with translucent layers: the news card is #26262973 over imagery, nav buttons are #eeeef01a tinted blocks, and the page band uses 3D renders. There are thin hairlines (#00000026) and dotted section rules, no blur shadows.

## Shapes

`borderRadii` is empty: every rendered element computes a 0px radius. Buttons, nav pills, the news card, the input and the footer are all square. This is recorded as `rounded.none: 0px`. The stylesheet corpus contains 4px and 20px radii once each, but no rendered element uses them. Round and soft shapes appear only inside the 3D imagery, not the interface.

## Components

- **Primary button.** "EXPLORE THE DASHBOARD": #f3f3f3 fill, #000000 Archivo Narrow 13px/18.2px weight 500, 1.04px tracking, uppercase, 0px radius, 34px tall and 234px wide, with an adjoining square arrow tile in #0e76ff (visible in the capture).
- **Secondary button.** "SEE INVESTOR INFORMATION": #f3f3f3 text on a translucent #eeeef01a fill, same label typography.
- **Nav.** Header 98px tall, boxed uppercase labels in #f3f3f3 on translucent dark tiles; text uses Archivo Narrow 13px weight 500.
- **News link card.** #26262973 fill, 20px padding, 117px by 389px, 13px uppercase label "COMPANY NEWS" with a date and a title in off-white.
- **Text input.** Archivo 19px/25.65px weight 500, #f3f3f3 text on the dark footer, 26px tall, 236px wide.
- **Footer.** 788px tall, #f3f3f3 text on a dark surface.

## Design System Architecture

No public design system or brand guidelines were found; the home page was opened and contains no such link, and no search was run. The site's own CSS exposes a coherent internal token system through custom properties: color groups with alpha ramps in 5-point steps (`--brand-blue-primary-5` through `-95`, `--off-white-*`, `--surface-darker-*`, `--surface-lighter-*`, `--stroke-off-white-subtle-*`, `--grey-primary-*`, `--grey-secondary-*`, `--utility-grey-*`), an easing token (`--ease-in-out-back: cubic-bezier(.68,-.55,.265,1.55)`), and named surfaces. Font names carry the "Archivo Fallback: Arial" metric fallback pattern generated by a framework font loader.

## Do's and Don'ts

- Do set big statements in Archivo 400 with strongly negative tracking and tight line heights (88px/84.48px).
- Do set navigation and buttons in Archivo Narrow 13px uppercase with 1.04px tracking.
- Do keep every corner square (0px radius) and pair the off-white CTA with a blue arrow tile.
- Do use #f7f7f5 as the light canvas and cinematic 3D renders for the dark hero.
- Don't add drop shadows; none were measured.
- Don't treat the cookie banner or its dark theme as brand UI.
- Don't use pill buttons or rounded cards.
- Don't pad headings with extra weights; only 400 and 500 were measured.

## Responsive Behavior

The mobile pass measured: h1 52px / 54.08px (letter spacing -1.3px), h2 44px / 54.12px (-0.44px), the cookie text at 12px, and the primary CTA with the same Archivo Narrow styling. Mobile header layout, nav collapse and breakpoints were not measured.

## Iteration Guide

1. Use #f7f7f5 for light bands and a dark 3D hero for the opening.
2. Archivo 400 for headings (88px, 68px desktop), Archivo 500 for 32px subheads, Archivo Narrow 13px uppercase for labels.
3. CTAs: #f3f3f3 square button, black label, 34px tall, with a #0e76ff arrow tile.
4. Keep radius at 0px and avoid shadows.
5. Run `node web/scripts/verify-designs.mjs --slug=sharplink` after edits.
