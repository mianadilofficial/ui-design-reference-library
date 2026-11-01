---
version: alpha
name: Procreate
category: "Design & Creative Tools"
description: "Procreate's home page is a black #000000 showcase set in the system UI font: 70px/600 headlines with -0.35px tracking, 20px/30px body, blue #0076ff 'Buy now' pills (100px radius, hover #2189ff) beside graphite #262626 'Learn more' pills, and #121212 product cards with 24px corners and a 10% white hairline, all built around vivid full-bleed artwork."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#0076ff"
  on-primary: "#ffffff"
  primary-hover: "#2189ff"
  graphite: "#262626"
  graphite-hover: "#343434"
  surface-card: "#121212"
  surface-footer: "#141414"
  ink-muted: "#a8a8a8"
  ink-subtle: "#a3a3a3"
  ink-dim: "#808080"
  ink-footer: "#787878"
  hairline: "#ffffff1a"
typography:
  display:
    fontFamily: system-ui, sans-serif
    fontSize: 70px
    fontWeight: 600
    lineHeight: 77px
    letterSpacing: "-0.35px"
  display-mobile:
    fontFamily: system-ui, sans-serif
    fontSize: 46px
    fontWeight: 600
    lineHeight: 50.6px
    letterSpacing: "-0.23px"
  subheading:
    fontFamily: system-ui, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 33px
    letterSpacing: "-0.15px"
  body:
    fontFamily: system-ui, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.496px"
  button:
    fontFamily: system-ui, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 19.6px
    letterSpacing: 0.28px
  link:
    fontFamily: system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 12px
  sm: 16px
  md: 24px
  lg: 60px
  xl: 72px
  2xl: 100px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 10px 20px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.graphite}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.graphite-hover}"
  text-link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-footer}"
    padding: 60px 0px 0px
---

# Procreate

## Overview

Procreate makes drawing and animation apps for iPad and iPhone. Its home page (procreate.com, 1280px wide, 4821px tall, `lang="en-US"`) is short, black and image-first. A transparent header floats over the hero with the "Procreate" wordmark at left and three dropdowns (Apps, Learning, Company) at right.

The hero is a full-bleed close-up photograph of an artist drawing on an iPad with an Apple Pencil, the screen glowing pink and blue. Over the darkened lower half sit an uppercase eyebrow "CREATIVE TOOLS MADE FOR YOU", the headline "Art is for everyone.", and a two-line description. Below, a grid of black product cards presents each app — Procreate ("Complete art studio."), Procreate Dreams ("Animate anywhere.") and Procreate Pocket ("Procreate on iPhone.") — each with its own sub-brand wordmark, a pair of pills ("Learn more" and blue "Buy now"), a one-time price line (for example "฿399.00 THB. Once.") and a device mock-up filled with vivid artwork. A large photo card links to the Help Center.

Then come "LEARN & SUPPORT" with two video cards (Procreate Beginners Series, Lesson ideas), a "We're hiring engineers." card with team avatars, "STORIES & INSIGHT" with two article cards, and a dark footer with "Art is for everyone." under the wordmark.

The copy is short and declarative — "Complete art studio.", "Animate anywhere.", "Once." — and the colour comes entirely from artwork; the interface is black, grey and one blue.

## Colors

Measured on the rendered page (`web/data/extracted/procreate.json`); most also appear as the site's CSS variables.

- **canvas `#000000`** — the body and largest area (5120).
- **ink `#ffffff`** — headlines and primary copy (907 characters); `--heading-font-color`, `--contrast-text`.
- **primary `#0076ff`** — the "Buy now" and "Apply" pills and blue text links; `--blue-500`, also `--nav-link-primary-color` and `--resource-link-color`. Hover fill: **primary-hover `#2189ff`** (the CSS declares `--nav-link-primary-hover-color: #1f87ff` for the nav variant).
- **graphite `#262626`** — the "Learn more" pill (`--neutral-800`); hover **graphite-hover `#343434`**.
- **surface-card `#121212`** — product and content cards (2208 by area).
- **surface-footer `#141414`** — the footer band.
- **ink-muted `#a8a8a8`** — card body text (447 characters); `--nav-mobile-section-link-color`.
- **ink-subtle `#a3a3a3`**, **ink-dim `#808080`** — secondary captions.
- **ink-footer `#787878`** — footer text; `--neutral-500`.
- **hairline `#ffffff1a`** — 10% white card borders (7 uses); `--alpha-w90`.

The CSS declares a full `--blue-100…900` ramp (`#d2e7ff` to `#061b33`), alpha-white and alpha-black ladders (`--alpha-w10…90`, `--alpha-b10…90`) and text roles such as `--copy-block-color: #bfbfbf` and `--divider-color: #232323`. Only the values above were measured as rendered colours. The Procreate Dreams sub-brand wordmark carries its own pink-red "Dreams"; its value was not measured.

## Typography

No web font is loaded: every measured character (1683) renders in **system-ui**, the operating system's UI font. Hierarchy comes from size, weight 600 and fine-tuned tracking that scales with size.

- **display** — 70px / 600 / 77px, -0.35px (-0.005em): "Art is for everyone."
- Section headlines measured 60px (-0.3px), 48px (-0.24px) and 40px (-0.2px and -0.992px).
- **subheading** — 30px / 600 / 33px, -0.15px: card titles such as "Procreate Beginners Series". 24px with -0.12px tracking carries article and card titles (133 characters).
- **body** — 20px / 400 / 30px, -0.496px: hero and lead copy.
- **button** — 14px / 600 / 19.6px with positive +0.28px tracking.
- **link** — 16px / 400 / 18.4px.
- Eyebrows ("CREATIVE TOOLS MADE FOR YOU", "LEARN & SUPPORT", "STORIES & INSIGHT") measured 18px uppercase with +0.9px tracking.

The rule is consistent: large type tracks slightly negative (-0.005em), body copy noticeably negative (-0.0248em at 16px and 20px), and small uppercase or button text positive. Weights: 400 (839 characters) and 600 (775).

**Substitute:** none needed — the site specifies `system-ui, sans-serif`.

## Layout

The CSS declares `--dynamic-container-max-width: 1366px`, `--dynamic-container-padding: 24px`, `--container-padding: 30px`, `--copy-block-max-width: 800px` and `--nav-height: 85px`. On the measured 1280px page the main band ran from x=40 to x=1240. Product cards sit two-up (584px wide, 714px tall), then a narrower 379px card beside a wide photo card; learning cards and article cards are two-up. The extractor counted up to 3 card columns.

Gaps: 12px (26 uses), 4px, 20px and 42px; paddings: 20px, 40px, 46px and 10px. Section rhythm is set by the eyebrow + headline pattern and generous black space between groups.

## Elevation & Depth

No box shadows were measured. Cards separate from the black page through a slightly lighter fill (`#121212`) and a 1px `#ffffff1a` border. All depth comes from photography and device mock-ups — iPads and iPhones shown at an angle, filled with saturated illustrations. The hero darkens toward the bottom so white text sits on the image.

## Shapes

- **24px (md)** — cards (15 uses), including bottom-only `0px 0px 24px 24px` on stacked card parts.
- **100px** — every button (10 uses): fully round pills at 40px height.
- **72px**, **60px** — large rounded media frames.
- **16px**, **12px** — small UI.
- The CSS sets `--media-block-border-radius: 8px` for media inside articles.

## Components

**Buy pill** — `#0076ff`, white 14px/600 label with +0.28px tracking, `10px 20px` padding, 40px tall, 100px radius. Hover `#2189ff`.

**Learn more pill** — `#262626` with white label, same size and radius; hover `#343434`. The two pills always sit together, grey first, blue second.

**Product card** — `#121212`, 24px radius, 1px `#ffffff1a` border; centred sub-brand wordmark, a 30px/600 title, the pill pair, a grey price line and a device mock-up bleeding off the bottom.

**Learning card** — a 16:9 photo with a round play or arrow button, a 24px title and grey description beneath.

**Hiring card** — `#121212`, a large headline, overlapping round avatars, a line of copy and the pill pair at right ("Learn more", "Apply").

**Footer** — `#141414`, the wordmark and "Art is for everyone.", product columns at left (Procreate for iPad, Procreate Dreams, Procreate Pocket), Company and Learn & Support at right, a language selector and the legal line "Made in Australia."

## Design System Architecture

Procreate publishes brand-use rules at https://procreate.com/brand-use, with a brand kit (https://assets.procreate.art/brand/Procreate-Logo-Assets.zip), a trademarks list and logo guidelines (https://assets.procreate.art/brand/Procreate-Logo-Guidelines.pdf). The logo guidelines (June 2026) cover the wordmark — clear space equal to the height of the "P", "Primarily use the white Wordmark on brand colors or dark backgrounds", no recolouring, stretching, rotating, outlines, drop shadows or glows — and the Procreate and Procreate Dreams app icons, which must keep their background frame and a 1:1 ratio. They name no UI colours or typefaces.

The web system lives in the site's CSS variables (155 at `:root`): colour ramps (`--blue-*`, `--neutral-*`, `--alpha-w*`, `--alpha-b*`), semantic roles (`--heading-font-color`, `--body-font-color: #989898`, `--caption-color`, `--divider-color`), navigation tokens (`--nav-link-color`, `--nav-dropdown-*`, `--nav-mobile-*`), layout constants (`--dynamic-container-max-width`, `--nav-height`) and declared breakpoints (`--md-breakpoint: 823px`, `--lg-breakpoint: 1080px`). Tailwind utility variables (`--tw-*`) are also present.

## Do's and Don'ts

**Do**
- Keep the UI black, grey and white; let artwork supply colour.
- Use system-ui at 600 for headlines with slight negative tracking.
- Pair a graphite "Learn more" pill with a blue `#0076ff` "Buy now" pill.
- Use `#121212` cards with 24px radius and a 10% white hairline.
- Show the products on real devices with vivid artwork.

**Don't**
- Don't load a custom web font for the interface; the site uses the system font.
- Don't add shadows to cards.
- Don't use blue for anything other than the primary action and links.
- Don't recolour, outline or add a glow to the wordmark (logo guidelines).
- Don't use square buttons.

## Responsive Behavior

From the extractor's 390px pass: the hero headline measured 46px / 600 with a 50.6px line height and -0.23px tracking; hero copy measured 16px / 24px with -0.3968px tracking; the "Buy now" pill kept its 99px × 40px size. Content measured from x=24 to x=366 (24px margins, matching `--dynamic-container-padding`). The extractor recorded a visible menu toggle labelled "Open Website Navigation Menu" and 2 header links. The CSS declares breakpoints at 823px and 1080px; layout changes at those widths were not measured.

## Iteration Guide

1. Black canvas, white system-ui headlines at 600 with -0.005em tracking, `#a8a8a8` secondary text.
2. Hero: full-bleed artwork photo, eyebrow, 70px headline, one line of copy.
3. Product cards: `#121212`, 24px radius, hairline border, wordmark, title, pill pair, price, device mock-up.
4. Pills: 40px tall, 100px radius; grey `#262626` then blue `#0076ff`.
5. New colours come from the declared `--blue-*` and `--neutral-*` ramps, checked against a measurement.
6. Run `node web/scripts/verify-designs.mjs --slug=procreate` after changes.
