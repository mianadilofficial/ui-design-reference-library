---
version: alpha
name: Mayo Clinic
category: "Healthcare & Wellness"
description: "Mayo Clinic home page: mayo-display serif headlines (76px light hero, 32px and 24px bold), mayo-sans 20px/28px body, #080808 ink on #ffffff, Mayo blue #0057b8 square 52px buttons with #1371d5 hover, #8cc5ff hairlines, a #0d0d33 donations band, #012d61 footer and #e1f0ff legal strip, 8px image cards and capsule search."
colors:
  canvas: "#ffffff"
  page-largest: "#012d61"
  ink: "#080808"
  primary: "#0057b8"
  on-primary: "#ffffff"
  primary-hover: "#1371d5"
  primary-pressed: "#002443"
  ink-black: "#000000"
  surface-secondary: "#ebebeb"
  surface-donations: "#0d0d33"
  ink-muted: "#686868"
  hairline: "#8cc5ff"
  footer-bg: "#e1f0ff"
  signal-error: "#e4002b"
typography:
  display:
    fontFamily: mayo-display, Georgia, serif
    fontSize: 76px
    fontWeight: 300
    lineHeight: 79.9976px
  display-mobile:
    fontFamily: mayo-display, Georgia, serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 51.9984px
  heading:
    fontFamily: mayo-display, Georgia, serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: mayo-display, Georgia, serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 31.9992px
  body:
    fontFamily: mayo-sans, Arial, "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body-small:
    fontFamily: mayo-sans, Arial, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.4px
rounded:
  none: 0px
  xs: 8px
  sm: 16px
  md: 24px
  lg: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-black}"
    typography: "{typography.body-small}"
    rounded: "{rounded.none}"
    height: 88px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 2px 12px 48px
    height: 48px
  image-card:
    backgroundColor: "{colors.surface-secondary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  donations-band:
    backgroundColor: "{colors.surface-donations}"
    textColor: "{colors.on-primary}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Mayo Clinic

## Overview

The measured site is the Mayo Clinic home page at https://www.mayoclinic.org/ (title "The world's best hospital - Mayo Clinic"), 5,104px tall at 1280px. The header carries the stacked MAYO CLINIC shield logo and five dropdown sections (Care at Mayo Clinic, Health Library, For Medical Professionals, Research & Education at Mayo Clinic, Giving to Mayo Clinic) plus "Request appointment" and "Register/Log in". The hero is a photograph with the light serif line "Transforming your care", a white text link "Learn how we drive innovation" and an outlined "Request appointment" capsule.

Below the hero sits a symptom-checker style tool, "Find diseases & conditions by first letter", with a row of circular A–Z letter buttons and a capsule search field. Then come editorial blocks with large photographs and short serif headlines ("Healing starts here", "World-class care for global patients"), a "Locations" grid of photo cards (Mayo Clinic in Arizona, Florida, Minnesota, Mayo Clinic Health System, Mayo Clinic Healthcare in London), a two-column "Featured care areas" link list (Bone marrow transplant, Brain aneurysm, Breast cancer…), a deep navy "Thank a researcher today" donations band with a blue "Send a Message" button, a #012d61 footer of link columns, and a pale blue #e1f0ff legal strip. Photography is warm and human: clinicians in scrubs, parents and babies, campus buildings. The voice is calm and reassuring, with sentence-case headlines and plain statements ("Our experts diagnose and treat the toughest medical challenges.").

The cookie-consent dialog and its grey scrim appear in the capture (the scrim is why several bands measure #9c9c9c); the extraction was re-run once and the dialog persisted. It is not brand UI and is excluded.

## Colors

- **canvas #ffffff** — page background; `--mc-color-background-primary`.
- **ink #080808** — headings and body text; it is `--mc-color-action-tertiary-default` and `--mc-color-border-primary-default` as well.
- **primary #0057b8** — Mayo blue: `--mc-color-action-primary-default`, `--mc-color-background-brand` and `--mc-color-focus-primary`. Measured on the "Send a Message" button and as text colour for links and care-area items. **on-primary #ffffff**.
- **primary-hover #1371d5** and **primary-pressed #002443** — the shipped hover and pressed values for primary actions.
- **page-largest #012d61** — the footer (`--mc-color-background-footer`).
- **surface-donations #0d0d33** — the "Thank a researcher today" band (`--mc-color-background-donations`).
- **surface-secondary #ebebeb** — image placeholder behind cards (`--mc-color-background-secondary`).
- **footer-bg #e1f0ff** — the light blue legal strip at the very bottom; also the inverse hover colour in the action tokens.
- **hairline #8cc5ff** — measured border colour (light blue outlines on the letter buttons); it is `--mc-color-action-primary-inverse-pressed`.
- **ink-muted #686868** — secondary text; **ink-black #000000** header text.
- **signal-error #e4002b** — `--mc-color-signal-error-default`, the system's error red; not measured as rendered on the home page.

The token set also contains brand layers: `--mc-color-layer-brand-3-default` teal #009998 and `--mc-color-layer-brand-4-default` coral #f89e81, plus `--mc-color-signal-success-default` #008746. They were not measured on the home page.

## Typography

Three proprietary families are loaded:

- **mayo-display** (`mayo-display, Georgia, serif`; weights 300 and 700) — headlines. **display** 76px / 300 / 79.9976px for the hero; **heading** 32px / 700 / 40px; section titles such as "Healing starts here" and "Locations" are 40px / 700; **subheading** 24px / 700 / 31.9992px for location card titles.
- **mayo-sans** (`mayo-sans, Arial, "Helvetica Neue", sans-serif`; 400 and 700) — body and UI. **body** 20px / 400 / 28px, which is also the root size (`--mc-typography-font-size-root: var(--mc-typography-font-size-5x)` = 20); **body-small** 16px / 400 / 20.4px for header and footer links.
- **mayo-serif** (700) — loaded and declared as `--mc-typography-font-family-serif`; specific usage on this page was not isolated.

The shipped type scale is unit-based: `--mc-typography-font-size-3x` 12, `-4x` 16, `-5x` 20, `-6x` 24, `-8x` 32, `-10x` 40, `-12x` 48, `-15x` 60, `-19x` 76, with matching line-height ratios (1.0526 at 76, 1.1 at 40, 1.25 at 32, 1.4 at 20). The light 300 weight is used only for the largest display size.

**Substitutes:** the fonts are proprietary. The stacks fall back to Georgia for display and serif and Arial for sans.

## Layout

The shipped grid tokens set `--mc-grid-max-width: 1320px` and `--mc-max-site-width: 1296px`, with gutters `--mc-layout-gutter-size` 16, `-md` 24 and `-lg` 32. At 1280px, content runs from x 32 to x 1235. The header is 88px tall. Editorial blocks alternate image left and text right, then the reverse, with generous white space between; the Locations grid has 3 columns of photo cards; Featured care areas is a three-column layout with the heading and intro in the first column and two columns of bordered link rows. Spacing uses an 8-based scale (`--mc-spacing-1x` 8, `-2x` 0.8rem, `-3x` 1.2rem, `-4x` 1.6rem … `-64x` 25.6rem); measured gaps were 8, 16, 24 and 32px.

## Elevation & Depth

No box-shadows were measured. Depth comes from photography, from dark text overlays at the bottom of location cards, and from colour bands: white content, #0d0d33 donations, #012d61 footer, #e1f0ff legal strip. The system defines `--mc-color-layer-overlay: rgba(8,8,8,0.55)` for overlays and a radial brand gradient from #0057b8 to #002a95. Focus is shown with a 2px dashed outline offset 3px with 3px radius (`--mc-focus-outline-*`).

## Shapes

The radius scale is published in the tokens: `--mc-radius-none` 0, `-x-small` 4, `-small` 8, `-medium` 12, `-large` 16, `-x-large` 24, `-xx-large` 32, `-full` 1000. Measured on the page: 8px on image cards, 16px, 24px and 32px on panels, 1000px on capsule buttons and the circular A–Z letters, and `0px 1000px 1000px 0px` on the search field's right end. The "Send a Message" button is square (0px). So: capsules for outlined secondary actions and letter chips, square for the filled primary, softly rounded 8px images.

## Components

- **button-primary** — #0057b8 fill, white 20px mayo-sans label, 0px radius, 52px tall (286px wide in the donations band); hover #1371d5, pressed #002443 (shipped tokens).
- **outlined capsule** — "Request appointment", "Why choose Mayo Clinic", "International services", "Explore all locations": blue text in a 1000px-radius outline (radius and #0057b8 border colour measured on the page).
- **letter chip** — circular A–Z buttons with #8cc5ff outlines and #0057b8 letters.
- **text-input** — search field, 20px #080808 text, 48px tall, 12px 2px 12px 48px padding with an icon on the left; the field container is a capsule.
- **image-card** — 8px radius photo on #ebebeb with a white 24px/700 serif title and subtitle over the image's bottom edge.
- **care-area row** — blue 16px link with a chevron, separated by #d6d6d6 rules (`--mc-color-border-tertiary-default`).
- **donations-band** — #0d0d33 with a white serif headline and 20px body, primary button on the right.
- **footer** — #012d61 link columns with white text and outlined capsule quick links ("Find a doctor", "Explore careers"), then the #e1f0ff legal strip with #080808 16px links.

## Design System Architecture

No public Mayo Clinic design-system documentation is cited here: the about page returned HTTP 403 (recorded in SOURCES.json) and no design-system link appears in the captured footer. The shipped CSS on https://www.mayoclinic.org/ exposes a mature, fully namespaced token layer, `--mc-*`, generated in a three-level structure: categories (`color`, `radius`, `spacing`, `typography`, `grid`, `layout`, `icon`, `focus`, `transition`), roles (`action-primary`, `action-secondary`, `action-tertiary`, `background`, `border`, `icon-interactive`, `layer-brand-1…4`, `layer-primary/secondary/tertiary`, `signal-error/success/neutral`) and states (`default`, `hover`, `pressed`, `disabled`, `active`, `selected`, plus `-inverse` variants for dark backgrounds). Numeric tokens are unitless multiples (`--mc-spacing-1x: 8`, `--mc-radius-small: 8`, `--mc-typography-font-size-5x: 20`), and RTL helpers (`--mc-rtl-*`) exist for right-to-left locales. New components should consume these role/state tokens rather than raw hex values.

## Do's and Don'ts

- Do use Mayo blue #0057b8 for actions and links, with #1371d5 hover.
- Do set headlines in mayo-display; use the 300 weight only for the 76px hero.
- Do keep body copy large: 20px / 28px is the root size.
- Do use capsule outlines for secondary actions and a square filled button for the primary.
- Do round photographs at 8px.
- Do use the inverse token set (white actions, #e1f0ff hover) on dark bands.
- Don't add drop shadows; separate with colour bands and #d6d6d6 rules.
- Don't use the teal or coral brand layers without measuring where the site uses them.
- Don't treat the cookie dialog or its grey scrim as page design.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 48px / 300 / 51.9984px (from 76px); body text unchanged at 20px / 28px; the primary button unchanged at 20px text and 52px height with #0057b8 fill. The mobile header is 72px tall with 2 header links visible and a "Menu" toggle; up to 2 card columns were detected (3 on desktop). The mobile pass recorded a 408px band at #232336 and a 2,097px band at #1d334d before a final 576px band; these fills were measured under the cookie scrim. The stylesheet's main breakpoints are min-width 904.96px, 599.84px, 1440px and 359px, with `--top-navigation-up: 1200px`. Mobile menu contents were not measured.

## Iteration Guide

1. Start on #ffffff with #080808 text in mayo-sans at 20px / 28px.
2. Headline with mayo-display: 76px/300 for a hero, 40px/700 for sections, 24px/700 for card titles.
3. Use #0057b8 for the single filled action per block and outlined capsules for the rest.
4. Space with multiples of 8px and 32px page margins inside a 1296–1320px max width.
5. Round photo cards at 8px; keep the filled button square.
6. Use #0d0d33 for appeal bands and #012d61 for the footer, with the inverse action tokens.
7. Pull status colours from `--mc-color-signal-*`.
8. Re-measure without the cookie dialog before adding new surface colours.
