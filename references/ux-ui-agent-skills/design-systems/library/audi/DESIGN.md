---
version: alpha
name: Audi (audi.com corporate site)
category: "Automotive"
description: "Audi's corporate site audi.com/en measured live — a near-black #101319 dark theme with #020203 header and footer, translucent off-white text #fcfcfdb2 and #fcfcfd, slate-grey #657081 pill buttons (999px) that darken to #2c343f on hover, 10px media corners and 20px outlined tiles, all set in the variable Audi Type at a single 400 weight from 36px down to 12px."
colors:
  canvas: "#101319"
  ink: "#fcfcfdb2"
  primary: "#657081"
  on-primary: "#fcfcfd"
  surface-deepest: "#020203"
  surface-raised: "#181d25"
  surface-control: "#404a59"
  surface-tile: "#9aa3b11a"
  surface-glass: "#fcfcfd26"
  ink-pure: "#ffffff"
  hairline: "#2c343f"
  hairline-hover: "#dbdfe633"
  signal-red: "#cb0b36"
  signal-green: "#89ff89"
typography:
  display:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 52px
  heading:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 40px
  heading-mobile:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  subheading:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Audi Type Variable\", Verdana, Geneva, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
rounded:
  card: 10px
  tile: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 28px
  s7: 36px
  s8: 56px
  s9: 60px
  s10: 102px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.hairline}"
    borderColor: "{colors.hairline-hover}"
  button-dark:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    border: "1px solid #2c343f"
    padding: 12px 24px
    height: 50px
  language-switch-active:
    backgroundColor: "{colors.surface-control}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
    border: "1px solid #dbdfe633"
    padding: 12px 24px
    height: 46px
  link-tile:
    backgroundColor: "{colors.surface-tile}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.tile}"
    padding: 12px
    borderColor: "{colors.hairline}"
    height: 50px
  nav:
    backgroundColor: "{colors.surface-deepest}"
    textColor: "{colors.on-primary}"
    padding: 0px 48px 0px 36px
    height: 72px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-deepest}"
    textColor: "{colors.on-primary}"
---

## Overview

This document covers `https://www.audi.com/en`, Audi AG's corporate and brand site ("Discover Audi | audi.com"), measured live on 2026-10-17 at 1280px desktop width (6,206px tall) and in a mobile pass. It is not the consumer car configurator; it is the company portal — "Company. People. Innovations." — linking to models, Formula 1, investor relations, careers and the media centre.

The whole page is in dark mode. A #020203 header (72px) holds a "Menu" toggle on the left, the four rings logo centred and a search icon on the right, with DE / EN language pills below. The hero block on #101319 opens with "Discover Audi" and a six-tile grid of outlined quick links (Audi at a glance, Models, Formula 1®, Investor Relations, Careers, Media). A full-width video follows ("From Paris with love", the Eiffel Tower in backlight, an "AI modified" badge and a scrubber), then three news teasers with thumbnails and dates.

Below, a full-bleed studio shot of a grey Audi estate carries the "Audi Models" title and a horizontal row of model chips (A2 e-tron … Q9, Nuvolari). A raised card "Discover the Audi Models" links to the configurator. "Step into the world of Audi" is a two-column staggered editorial grid of large photographs — Formula 1, CEO statement, aerodynamics, careers, sustainability, innovation — each headed by a 20px title, a one-line dek and a "Learn more" link. The page closes with the Audi Media Center (three press releases and category pills), Social Media icons, a third-party video card, and a #020203 footer with legal links and DE/EN pills.

The mood is restrained, cinematic and technical: neutral greys only, no brand red in measured UI, single-weight type, and photography with warm natural light against the cool dark chrome.

## Colors

All colours are measured on rendered elements unless noted; the site publishes them as CSS custom properties (400 on `:root`).

- **canvas #101319** — the page background and the largest painted area (weight 6,067), 26% of the capture as a single flat colour; photography covers most of the rest.
- **surface-deepest #020203** — header and footer (`--color-surface-neutral-800`).
- **surface-raised #181d25** — the "Discover Audi Models" button fill and raised panels.
- **surface-control #404a59** — the active language pill (`--color-grey-35-solid`).
- **surface-tile #9aa3b11a** — the 10%-alpha grey fill of the quick-link tiles (weight 1,461), i.e. `--color-surface-neutral-300` #9aa3b1 at 10%.
- **surface-glass #fcfcfd26** — a 15%-alpha off-white overlay used on chips over imagery (weight 1,312).
- **ink #fcfcfdb2** — the most-read text colour (2,013 characters): off-white at 70% alpha, used for body copy, deks and nav links.
- **on-primary #fcfcfd** — full-strength off-white for headings, button labels and footer text (`--color-foreground-neutral-100`).
- **ink-pure #ffffff** — a handful of characters (8) in pure white.
- **primary #657081** — the slate grey filling "Learn more", "Information on the models" and "Open Audi Media Center" (`--color-grey-50-solid`).
- **hairline #2c343f** — tile and button borders and the hover fill of primary buttons (`--color-surface-neutral-600`).
- **hairline-hover #dbdfe633** — the 20%-alpha border that appears on hover.
- **signal-red #cb0b36** and **signal-green #89ff89** — declared in the CSS (`--color-red-300-solid`, `--color-green-300-solid`); they were not measured on a visible element and are recorded for status use only.

## Typography

One typeface, one weight. Every measured character is set in **Audi Type Variable** (loaded from `static.audi.com/assets/fonts/AudiTypeVF_4.033-…woff2`), with Verdana, Geneva, sans-serif as fallback, and every character is weight 400. The CSS also declares `--font-variation-extended: "wdth" 130`, the extended width axis of the variable font. If Audi Type is unavailable, the declared fallback Verdana keeps the wide, open proportions better than a condensed grotesk.

Scale (desktop):

- **display** 36px / 52px — the h1 "Discover Audi" (`--font-size-h1: 36px`).
- **heading** 28px / 40px — section titles such as "From Paris with love", "Audi Models", "Audi Media Center", centred. On mobile the h1 drops to this size too.
- **heading-mobile** 24px / 36px — section titles on the mobile pass.
- **subheading** 20px / 32px — editorial card titles ("Discover the Audi Models", "Formula 1® and Audi").
- **body** 16px / 24px — the most-read size (1,123 characters), deks and nav links.
- **link** 15px / 24px — quick-link tile labels.
- **button** 14px / 24px — pill button labels and footer text.

12px is the third most-read size (740 characters) and covers dates and legal footnotes. No letter-spacing and no uppercase styling were measured.

## Layout

Content sits in a single centred column with generous dark margins. The quick-link grid is three columns by two rows; the editorial "Step into the world of Audi" block is two staggered columns of tall image cards; the media centre uses three cards then a row of six category pills. The extractor recorded at most three card columns on desktop.

Measured spacing: gaps of 8px (most frequent), 28px, 16px, 12px, 4px and 24px; paddings of 12px (most frequent), 4px, 60px, 24px and 16px, with 56px and 102px on larger blocks. The CSS defines a fixed spacing ramp with names such as `--space-fixed-150: 12px`, `--space-fixed-250: 20px`, `--space-fixed-450: 36px`, `--space-fixed-500: 40px` and `--space-fixed-1600: 128px`, i.e. one unit = 8px × (name ÷ 100).

## Elevation & Depth

No box shadows were recorded on rendered elements. Depth comes from stepped dark surfaces — #020203 for chrome, #101319 for the page, #181d25 for raised cards — and from translucent off-white overlays (#fcfcfd26, #9aa3b11a) on top of imagery and tiles. The CSS defines `--shadow-elevation-popover: 0px 1px 4px rgba(0, 0, 0, .15), 0px 2px 8px rgba(0, 0, 0, .25)` for popovers, which did not appear in the measured state. Image cards rely on photography with dark gradients rather than shadows.

## Shapes

Three radii only. **pill 9999px** (999px measured) for every button, language switch and model chip; **tile 20px** for the outlined quick-link tiles (`--border-radius-md: 20px`); **card 10px** for photographs and media cards (the most frequent measured radius, 31 elements). The CSS also declares `--border-radius-xs: 4px` and a 2px radius used 94 times in stylesheets (form controls), not seen on the home page. Borders are 1px hairlines in #2c343f.

## Components

- **Primary pill (button-primary)** — "Learn more": #657081 fill, #fcfcfd 14px label, 12px 24px padding, 50px high, full pill. Hover changes the fill to #2c343f and adds a #dbdfe633 border; the label colour does not change.
- **Dark pill (button-dark)** — "Discover Audi Models", "Open in youtube": #181d25 fill with a 1px solid #2c343f border, same size, with a leading external-link icon in the capture.
- **Language switch** — DE/EN pills; the active one is #404a59 with a #dbdfe633 border, 46px high. Hovering the inactive one drops its text to 70% alpha and underlines EN.
- **Quick-link tile (link-tile)** — "Audi at a glance" and siblings: 15px label, 12px padding, 50px high, 20px radius, 1px #2c343f border on a 10% grey fill; hover lightens the border to #dbdfe633.
- **Header** — #020203, 72px, padding 0 48px 0 36px, "Menu" with a hamburger glyph, centred rings, search icon.
- **Editorial card** — 20px title, 16px dek in #fcfcfdb2, "Learn more" underlined text link, image with 10px corners.
- **Footer** — #020203, 14px legal links in a single row, DE/EN pills, long consumption disclaimer in 12px.

## Design System Architecture

Audi's GitHub organisation (https://github.com/audi) describes itself as "evolving a global interaction guideline for all Audi digital services", but it hosts no public UI, component or token repository (two repositories: MeshGPT and an OSS licence analysis). The corporate design page https://www.audi.com/en/design-299 discusses product and brand design philosophy ("clarity, technicality, intelligence and emotion") but publishes no colours, typefaces or UI specifications. No public digital design system documentation was found on the pages opened.

The shipped CSS shows a tokenised system nonetheless. The 400 root custom properties follow a layered naming scheme: a primitive grey ramp named by lightness and opacity (`--color-grey-50-solid` #657081, `--color-grey-35-solid` #404A59, `--color-grey-85-opa10`), semantic layers (`--color-surface-neutral-100…800`, `--color-foreground-neutral-100…800`, `--color-surface-interactive-form-controls-default-200-stroke`), component tokens (`--tag-label-color`, `--color-accordion-surface-focus`, `--checkbox-or-radio-selected-hover-label-color`), type tokens named by role (`--font-size-h1: 36px`, `--font-size-display3: 44px`, `--font-size-copy1: 1rem`, `--font-size-link2: .875rem`, `--font-size-label4: .625rem`), spacing (`--space-fixed-*`), radii (`--border-radius-xs/md`) and one easing (`--easing: cubic-bezier(.4, 0, .2, 1)`). Breakpoints are declared at 375, 768, 1024, 1440 and 1920px with `.98px` max-width counterparts. The icon set is a private font, `amtv-icons`.

## Do's and Don'ts

**Do**
- Keep the page dark: #101319 canvas, #020203 chrome, #181d25 raised surfaces.
- Set everything in Audi Type at weight 400; build hierarchy from size alone (36 / 28 / 20 / 16 / 15 / 14).
- Use 70%-alpha off-white #fcfcfdb2 for body copy and full #fcfcfd for headings and labels.
- Make every action a full pill; use #657081 for primary and #181d25 with a #2c343f hairline for secondary.
- Give photography 10px corners and let it dominate the page.

**Don't**
- Don't introduce bold weights; none were measured.
- Don't use Audi red as a UI accent; the declared #cb0b36 was not on any visible element.
- Don't add drop shadows to cards or buttons.
- Don't mix radii beyond 10px, 20px and pill.
- Don't use the light-theme greys in the CSS (#eceff3, #dbdfe6) as surfaces on this site; they were not measured as page areas.

## Responsive Behavior

From the mobile pass (content between x=16–38 and x=352–362 at 390px):

- The h1 "Discover Audi" drops from 36px / 52px to 28px / 40px.
- Section headings drop from 28px / 40px to 24px / 36px.
- Body copy stays 16px / 24px; the primary "Learn more" pill is unchanged (14px, 12px 24px, 50px, 999px radius).
- The header is 70px high with #020203 fill; the extractor recorded a visible "Menu" toggle on both desktop and mobile, with two header links visible on mobile against four on desktop.
- The extractor recorded at most two card columns on mobile, against three on desktop; the hero band holds two columns.
- The "Step into the world of Audi" band grows from 2,158px to 2,839px tall.

The stylesheet declares breakpoints at 375px, 768px, 1024px, 1440px and 1920px. Hover, focus and any light theme on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #101319, header/footer `surface-deepest` #020203.
2. Typeset with `display` for the one page title and `heading` for each section; keep weight 400.
3. Use `button-primary` (#657081 pill) for the main action in a block and `button-dark` for secondary or external actions; apply the #2c343f hover.
4. Navigation shortcuts are `link-tile`: 20px radius, #2c343f hairline, translucent fill.
5. Image cards: 10px radius, title in `subheading`, dek in `body` with `ink`.
6. Look up any new value in the site's `--color-*`, `--space-fixed-*` and `--font-size-*` variables in `web/data/extracted/audi.json` before inventing one.
