---
version: alpha
name: Untitled UI
category: "Design Systems"
description: "Marketing site for the Untitled UI Figma kit and React library: white canvas, mid-gray #525252 text, one violet #7f56d9 primary, Inter at 400 and 600, 44px headings, 8px button radius and soft ring-and-lift shadows."
colors:
  canvas: "#ffffff"
  ink: "#525252"
  primary: "#7f56d9"
  on-primary: "#ffffff"
  surface-subtle: "#f5f5f5"
  ink-strong: "#171717"
  brand-700: "#6941c6"
  ink-muted: "#737373"
  ink-nav: "#404040"
typography:
  nav-label:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 45px
    letterSpacing: "-0.72px"
  display:
    fontFamily: Inter, sans-serif
    fontSize: 44px
    fontWeight: 600
    lineHeight: 55px
    letterSpacing: "-0.88px"
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
rounded:
  xs: 1px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 13px
  3xl: 16px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
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
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 14px
    height: 39px
  button-primary-hover:
    backgroundColor: "{colors.brand-700}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  nav:
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 2px 8px
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 1px, rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 0px 0.5px, rgba(0, 0, 0, 0.16) 18px 26px 64px -12px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
---

## Overview

Untitled UI is the marketing site for a Figma UI kit and a React component library. The page sells a design system, so the site is itself a specimen of it: white canvas, neutral grays, one violet brand color, and Inter in two weights. The capture opens on a split hero. On the left, a pill announcement ("Explore Untitled UI v8.0"), a 600-weight headline reading "The ultimate Figma UI kit and React component library", a gray paragraph, a row of avatars with a five-star rating ("5.0 From 3,650+ reviews") and three buttons: "Untitled UI React", "Untitled UI Figma" and a solid violet "Buy now". On the right, a tilted grid of product screenshots (dashboards, calendars, team pages, photography) bleeds off the edge of the viewport. The product imagery supplies all the visual richness; the interface chrome stays quiet.

Below the hero the page settles into a repeating rhythm: a large 44px heading in near-black, a short gray lead paragraph, then a four-column row of violet statistics ("900+", "10,000+", "420+", "2,000+") each with a bold label and a two-line gray description. Microcopy is plain and numeric: it states counts of things (styles, components, page examples, icons) rather than adjectives. A small violet eyebrow ("Untitled UI") above a centered headline ("Design fast. Build consistently.") opens the next band.

## Colors

The palette is a neutral ramp plus a single violet. `canvas` is {colors.canvas} white, measured as the background across roughly 80% of the viewport in the capture. `ink` is {colors.ink}, the most-read text color: paragraphs, descriptions and lead copy all use this mid-dark gray. Headlines and labels step up to `ink-strong` {colors.ink-strong}, nav and secondary button text uses `ink-nav` {colors.ink-nav}, and captions use `ink-muted` {colors.ink-muted}. Subtle panels use `surface-subtle` {colors.surface-subtle}.

`primary` is the violet {colors.primary} (#7f56d9), the fill of the "Buy now" button with white `on-primary` text. The deeper violet `brand-700` (#6941c6) is used as the hover fill in the measured hover state, and also for the large statistics and the small eyebrow text in the capture. The site's root CSS variables publish a brand ramp (`--brand25` through `--brand900`) and a neutral ramp (`--neutral25` through `--neutral900`) plus a `--green500` (#22c55e) used for the small status dot in the announcement pill; the measured values above are those variables resolved. Star ratings in the hero are amber, but that color is not in the extracted tokens and is left out.

The violet is used sparingly: one filled button per view, the statistics, and small accents. Everything else stays gray, so the product screenshots carry the color.

## Typography

One family: Inter, loaded in weights 400 and 600 only (the capture's loaded-font list shows "Inter 400" and "Inter 600"). Headings are 600, body is 400, and there is no 500 or 700 anywhere. The scale is `display` at 44px / 55px line height with -0.88px letter spacing for section headings, `display-mobile` at 36px / 45px with -0.72px at the 390px viewport, `subheading` at 18px / 27px for card labels, `body` at 16px / 24px, and `button` at 14px / 21px weight 600. `nav-label` is the 16px weight-600 style used for navigation items such as "Products".

Tight negative tracking is applied only to large headings; small text uses normal spacing. The extractor's automatic hero-heading detection picked a navigation label as the h1; the section heading at 44px is the measured display style, so it carries the `display` name.

### Font Substitutes

Inter is an open-source typeface, so no substitute is required. Where it is unavailable, the site's own font stack falls back to `sans-serif`; use a neutral grotesque of similar proportions.

## Layout

The page is a single-column marketing scroll about 1280px wide in the desktop capture. The hero text column occupying the left half and imagery taking the right half. Section blocks are generous: large vertical gaps (the hero image field alone is more than 800px tall) separate bands, and the statistics row uses four equal columns. Spacing tokens measured on the site run from 2px to 20px (`s1` to `s10`) and cover the gaps inside buttons, pills and cards; section-level spacing is larger and unmeasured as a token.

## Elevation & Depth

Depth comes from soft, low-opacity shadows rather than borders. Small controls (the secondary navigation buttons) carry a two-layer shadow of `rgba(0, 0, 0, 0.1) 0px 0px 0px 1px` and `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`, which reads as a hairline ring with a faint lift. The screenshot cards use a much larger offset shadow, `rgba(0, 0, 0, 0.16) 18px 26px 64px -12px`, which gives the tilted product grid its floating, diffuse look. The primary button adds an inset highlight, `rgba(255, 255, 255, 0.12) 0px 1px 0px 0px inset`, over a faint white-to-transparent gradient.

## Shapes

Radii form a short ladder: 4px, 6px, 8px, 12px, 16px, and a pill at 9999px (available in the measured ladder). The primary "Buy now" link measures 8px (`rounded.lg`); the secondary nav buttons and cards use 6px (`rounded.md`). Rectangles are never sharp in controls, but the page itself uses no heavy rounding.

## Components

**Primary button.** Violet {colors.primary} fill, white 14px / 600 text, 8px radius, padding 8px 14px, height 39px in the nav; the hero instance is 16px text with padding 10px 16px and height 46px. Hover darkens to `brand-700`. It has a 1px border in the same violet.

**Secondary buttons.** White fill, `ink-nav` text, 6px radius, a ring-and-lift shadow, with a small leading icon (React atom, Figma logo) before the label.

**Navigation.** A left-aligned logo tile and wordmark, then text links ("Products" and "Blog" with chevrons, "Pricing", "FAQs") in `ink-nav`, and right-aligned "Sign in", "Preview in Figma" and "Buy now".

**Cards.** Product screenshots on white with a large diffuse shadow; text blocks use `ink` on `canvas` with no card chrome at all.

## Design System Architecture

Untitled UI documents its own React library at https://www.untitledui.com/react: the docs describe it as built with Tailwind CSS and React Aria, distributed as source code you copy into your project rather than as a package dependency, and supporting dark mode through CSS variables. The library's published theme file defines a brand scale `--color-brand-50` through `--color-brand-950`, where `--color-brand-600` is `rgb(127 86 217)`, the same value as this site's measured primary, and `--font-body` and `--font-display` both start with Inter. The marketing site's own stylesheet names its variables differently (`--brand600`, `--neutral500`) and the capture shows no Tailwind or React Aria markers in the measured CSS, so the site reuses the library's palette values but is not demonstrated to ship the library itself. The de-facto system on the page is therefore: a 10-step brand ramp, a 10-step neutral ramp, one green, Inter 400/600, and a radius ladder topping out at pill.

## Do's and Don'ts

- Do keep a single violet {colors.primary} for the one primary action per view.
- Do set headings in Inter 600 with slight negative tracking, and body in Inter 400.
- Do let product imagery provide color; keep chrome gray and white.
- Do use {colors.ink} for paragraphs and {colors.ink-strong} for headlines.
- Don't add a second accent hue for buttons.
- Don't use weights other than 400 and 600.
- Don't use hard borders on cards; use the ring-and-lift or diffuse shadow.
- Don't round primary buttons beyond 8px.

## Responsive Behavior

The 390px mobile capture measures the display heading at 36px / 45px with -0.72px tracking, down from 44px / 55px on desktop. The mobile capture was measured for type only; layout changes at 390px are not documented here beyond the heading size change.

## Iteration Guide

1. Start from {colors.canvas} and {colors.ink}; add violet only for the main action and key numerals.
2. Choose headings from `display` (44px) or `subheading` (18px); never invent intermediate weights.
3. For a new button, copy `button-primary`: 8px radius, 14px / 600 text, 8px 14px padding.
4. Add depth with the documented shadows; avoid borders heavier than 1px.
5. Verify any new color against the brand and neutral ramps before adding it.
