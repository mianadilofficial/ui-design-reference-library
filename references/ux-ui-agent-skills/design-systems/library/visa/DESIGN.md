---
version: alpha
name: Visa
category: "Design Systems"
description: "Visa.com (en-US) marketing site — white canvas, near-black ink (#1a1a1a), the Visa Blue family (#1434cb primary, #0d2181 hover, #d9dffb tint) against a deep navy (#020f27) band, and one proprietary Dialect typeface at regular weight, with a 64px hero at -1.2px tracking, 1000px-radius pill buttons and photography-led three-up cards."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  ink-secondary: "#2c2c2c"
  ink-muted: "#656565"
  primary: "#1434cb"
  primary-hover: "#0d2181"
  on-primary: "#ffffff"
  brand-blue-100: "#d9dffb"
  surface-night: "#020f27"
typography:
  display:
    fontFamily: visa-font--dialect-latin-regular, visa-font--dialect-cyrillic-regular, visa-dialect-fallback, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 83.2px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: visa-font--dialect-latin-regular, visa-font--dialect-cyrillic-regular, visa-dialect-fallback, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 52px
    letterSpacing: "-1.2px"
  lead:
    fontFamily: visa-font--dialect-latin-regular, visa-font--dialect-cyrillic-regular, visa-dialect-fallback, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: visa-font--dialect-latin-regular, visa-font--dialect-cyrillic-regular, visa-dialect-fallback, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  nav:
    fontFamily: visa-font--dialect-latin-regular, visa-font--dialect-cyrillic-regular, visa-dialect-fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 24px
  s9: 26px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 16px 24px
    height: 48px
  link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
    padding: 16px 48px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-night}"
    textColor: "{colors.brand-blue-100}"
---

## Overview

The Visa home page is a confident, airy consumer-finance page. A white header carries the blue VISA wordmark at left, two text tabs ("Personal", "Business"), and a play and search icon at right. Directly under it a full-bleed photograph (a hand holding a latte and a gold Visa card over a speckled terrazzo surface) carries the 64px headline "Turning what's next into what's trusted" in white, a white pill "Watch the video", and a short paragraph. Below, a row of four small icon-and-text shortcuts ("Explore cards", "Browse offers and perks", "Set up purchase alerts", "Get support"), three tall portrait photo cards with a headline, a sentence, and an arrow link, and finally a deep-navy section with an abstract ribbon of blue-violet glass and a sentence-builder: "I am looking for a credit card with travel benefits" with underlined dropdowns and a white "Show results" pill.

The mood is calm and international. People are shown in real travel and daily-use moments (a market stall, a phone beside a laptop, an ATM), colour comes almost entirely from photography and the blue brand family, and the interface itself is deliberately plain: white, near-black text, thin arrow links, and pill buttons. The page measures as 14px text in the majority of copy and uses the Visa blue (`{colors.primary}`) mostly in the wordmark, icons and brand-coloured controls.

Copy is plain and benefit-first: "Plan ahead with our currency conversion tool", "Our ATMs are all over the globe", "Find an ATM". Links end with a short arrow and are verbs, not slogans.

## Colors

- **Canvas** `{colors.canvas}` is white and dominates the page by area.
- **Ink** `{colors.ink}` is the main text and the border color of the pill button; `{colors.ink-secondary}` is the link text color (it darkens to black on hover); `{colors.ink-muted}` is captions and descriptions.
- **Primary** `{colors.primary}` is Visa Blue. The site's CSS publishes it as `--color-btn-primary`, with `--color-btn-primary-hover` at `{colors.primary-hover}` and a disabled state at `{colors.brand-blue-100}`; the CSS also holds a ramp of brand blues from 100 to 800.
- **Surface night** `{colors.surface-night}` is the deep navy of the card-finder band and the footer; text on it is white or the pale blue `{colors.brand-blue-100}`.

On this capture the measured primary CTA is a white pill with dark text, because the prominent buttons sit on photography and on the dark band, so `button-primary` below describes that measured control; blue-filled buttons are defined in the CSS variables but not visible on the captured screen.

## Typography

Everything is set in one proprietary family, delivered as `visa-font--dialect-latin-regular` with a Cyrillic companion and a fallback (named Dialect in the family string). Open Sans also appears in the page's loaded fonts. Weight is regular (400) throughout the measurement: hero `{typography.display}` is 64px on an 83.2px line with -1.2px tracking, and `{typography.display-mobile}` is 40px on 52px with the same tracking. The 20px `{typography.lead}` level is measured on the page (and larger sizes appear in the dark band), body and button text at `{typography.body}` (14px), and navigation at `{typography.nav}` (16px).

Large display text is light in feel because it is regular weight at big size with tight tracking, not bold. Hierarchy comes from size and white-space. The font is proprietary; Open Sans (loaded by the site) or any neutral humanist sans is a reasonable substitute.

## Layout

The captured page is 1280px wide. The site's CSS publishes breakpoints at 768px, 1023px, 1439px and 1920px, gutters of 16px, 32px and 48px, and a desktop section spacing of 10rem, which matches the generous vertical rhythm between modules on the page. Sections are full-bleed bands (photograph hero, white content, navy finder), each with content aligned to a common left edge. The shortcut row has four equal columns; the card row has three equal portrait cards.

## Elevation & Depth

The page is flat. No box-shadows are measured on the captured elements. The site's CSS does define a shadow scale (for example `0 1px 2px` at very low alpha up to `0 20px 25px` at 10% black, and a bento-grid shadow), but those belong to other modules, not to anything visible on the home page. Depth is created by photography, the full-bleed dark band with a 3D ribbon artwork, and pill buttons outlined in ink.

## Shapes

Measured radii are 4px, 8px and 1000px. The pill (1000px, also published as `--text-image-border-radius-pill`) is used for buttons such as "Watch the video"; 8px is the CSS `--border-radius-md`; 4px appears in small elements. Photo cards in the capture are square-cornered rectangles, so media is angular while controls are fully round.

## Components

- **Pill button** — white fill, `{colors.ink}` text and 1px ink border, 48px tall, padding 16px 24px, `{rounded.pill}`, `{typography.body}`; hover lowers opacity to 0.8 and lightens the fill. It also carries a trailing arrow or play glyph.
- **Arrow link** — body-size text in `{colors.ink-secondary}`, no underline, trailing arrow; on hover the text becomes black.
- **Shortcut tile** — blue 3D-style icon at left, a small title and a two-line grey description.
- **Photo card** — portrait photograph, a headline, a 14px description, arrow link.
- **Sentence builder** — large (display-sized) white text on navy with underlined inline dropdown words and a white pill submit.
- **Header** — white bar with the wordmark and two tabs; the navigation role is measured as white text on the dark and photographic areas.
- **Cookie notice** — a consent banner is present on the design-system site but was not visible in this capture, so it is not documented here.

## Design System Architecture

Visa documents its Product Design System (VPDS) at [design.visa.com](https://design.visa.com). I opened its welcome page, "What is VPDS?" page and the Styles (CSS) getting-started page: it describes a toolkit for Visa products with Figma kits and code libraries for Angular, React, Styles (CSS) and Flutter, a current generation called Nova (installed with the npm package `@visa/nova-styles`, themes loaded from `themes/visa/index.css`, icons through `@visa/nova-icons-svg` and `@visa/nova-icons-sprite`, classes prefixed `v-`), and earlier generations Hamlet (2018), Vault and Vault Key+. It lists components such as Button, Chips, Content card and Top app bar, plus base elements for color, elevation, spacing, size and shape, typography and design tokens.

That documentation is real and official, but the marketing site measured here does not show Nova markers: the rendered visa.com page contained no elements with classes starting `v-`, and its stylesheets come from a different bundle, `headless-ui/styles/core/1.0.0` (with `vcom` and `classic` theme files). For that reason VPDS is not treated as the source of this site's tokens, and none of its values are used. The de-facto system of visa.com is instead its own CSS custom properties: spacing steps (`--spacing-s` .5rem through `--spacing-xxxl` 4rem), gutters, `--border-radius-md`, a type ramp from 11px to 110px (`--font-size-display` 6.875rem), brand-blue ramp variables and button variables named `--color-btn-primary`, `--color-btn-primary-hover` and `--color-btn-primary-disabled`.

## Do's and Don'ts

- Do keep the page white and let photography and the navy band supply color.
- Do use regular-weight type with tight tracking for display headlines.
- Do use fully round pills for buttons and square corners for photography.
- Do write link text as plain verbs with a trailing arrow.
- Don't add drop shadows to home-page modules; the measured page has none.
- Don't use bold display type; the measured hero is weight 400.
- Don't use color outside the Visa blue ramp, navy and neutrals for interface elements.
- Don't place text on photography without a clear contrast area, as the hero does with white text on a darkened scrim.

## Responsive Behavior

The CSS variables define breakpoints at 768px (extra small), 1023px (small), 1439px (medium) and 1920px (large), a mobile premium breakpoint of 767px, and separate desktop and mobile heading sizes (the h1 variable is 3.25rem on desktop and 2rem on mobile; the measured hero token goes from 64px down to 40px). Section spacing and gutters change by breakpoint.

## Iteration Guide

1. Begin with `{colors.canvas}`, `{colors.ink}` and `{colors.primary}`; use `{colors.surface-night}` for one dramatic band.
2. Set headlines in a regular-weight sans at 64px/-1.2px on desktop and 40px on mobile.
3. Build pills at 48px height with 16px 24px padding and ink outlines when on white; invert on dark.
4. Use three-up portrait photo cards with a short headline, short sentence and an arrow link.
5. Keep everything flat; add depth only with imagery.
6. Check each new color against the measured ramp before use.
