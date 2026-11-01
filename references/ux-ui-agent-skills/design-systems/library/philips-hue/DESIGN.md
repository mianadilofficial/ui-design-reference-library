---
version: alpha
name: Philips Hue
category: "Consumer Electronics"
description: "Philips Hue US storefront: white canvas with #f9f9f9 bands, #101010 text, a Hue blue #0066f5 pill button (hover #0050a8), a #000826 midnight-blue nav, sohne type at weights 400 and 700, a 48px page title with 56px line height and 100px pill corners."
colors:
  canvas: "#ffffff"
  ink: "#101010"
  primary: "#0066f5"
  on-primary: "#ffffff"
  surface-2: "#f9f9f9"
  ink-gray: "#a9a9a9"
  ink-muted: "#727272"
  hairline: "#e7e7e7"
  primary-hover: "#0050a8"
  nav-bg: "#000826"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: sohne, noto, tahoma, arial, helvetica, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: sohne, noto, tahoma, arial, helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: sohne, noto, tahoma, arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: sohne, noto, tahoma, arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 10px
  md: 100px
spacing:
  s1: 2px
  s2: 4px
  s3: 5.05px
  s4: 6px
  s5: 7px
  s6: 7.81px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 15.66px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    height: 24px
  footer:
    textColor: "{colors.ink-gray}"
    padding: 64px 0px
---

## Overview

This is the United States storefront of Philips Hue, measured at https://www.philips-hue.com/en-us (title "Smart lights and home security | Philips Hue", 7790px tall at 1280px wide). The page is a product-category and campaign hub for smart lighting. A thin blue announcement bar reads "Get 25% off in the Hue Shop! Sign up for our newsletter*", above a dark midnight-blue navigation bar (`#000826`) with the items Shop, Indoor, Outdoor, Sync lights, Home controls at the left and Learn, Support, search, account and cart icons at the right. The multicoloured "hue" logo hangs from the bar in a small white tile with a thin shadow.

The first content block is a white hero: "Play screen sync" as a large bold title at the left, the tagline "A whole new way to sync TV and lights" at the right, a full-width dark photograph of a living room with a TV and tall lamps casting violet and orange light, a pause control in a white circle at the lower right, one sentence ("A new, simple way to seamlessly sync your lights with everything on your TV.") and a centred blue pill "Shop screen sync". A pale `#f9f9f9` band follows with "Smart lights and home security" and a row of five white product tiles (Bundles, LED Bulbs, Starter kits, Strip Lights, Home security) with an outlined pill "All smart home products" and a blue "See all" link. The next section, "New. And unmistakably Hue.", has two tall dark photographic cards ("Create your own starter kit", "Our guide to TV-light sync") with white outlined pills ("Create and save 20%", "Explore sync options").

## Colors

`canvas` is `#ffffff` (7982 area weight) and `surface-2` `#f9f9f9` (4219) is the alternating band. `ink` is `#101010` (2425 characters), white text (1129) sits on the nav and photo cards, `ink-muted` `#727272` and `ink-gray` `#a9a9a9` are secondary and footer text. `primary` `#0066f5` is the action blue (button fill, 2px button border, "See all" link and nav-link colour); `primary-hover` `#0050a8` is measured on hover (fill and border both change). `nav-bg` `#000826` is the midnight-blue bar. `hairline` `#e7e7e7` is the border of light controls such as the pause button.

The CSS root names the same colours: `--color-attention-500: #0066f5`, `--color-attention-700: #0050a8`, `--color-attention-100: #eef6ff`, `--color-midnight-blue: #000826`, `--color-black: #101010`, `--color-grey-100: #f9f9f9`, `--color-grey-300: #e7e7e7`, `--color-grey-500: #ccc`, `--color-grey-700: #a9a9a9`, `--color-grey-900: #727272`, with success (`#7bcc00`, `#4d8100`, `#f2fae5`) and warning (`#e63535`, `#d03131`, `#fdebeb`) scales that were not rendered on this page. The saturated colour in the page comes from photography of coloured light, not from interface fills.

## Typography

The family is sohne (Söhne, a commercial typeface), with a fallback chain of noto, tahoma, arial, helvetica and sans-serif; weights loaded are 100 to 500, 600, 700 to 900, plus Noto Sans at 400 and 600. The measured roles: `display` 48px/56px at weight 700 (the page's first heading and the hero title; 32px/40px on mobile), `heading` 16px/24px at 700 (card and section labels such as "Bundles"), `body` 16px/24px at 400. Other sizes: 12px (516 characters), 24px (214), 32px (145) and 20px (103). The CSS declares `--font-weight-light: 300`, `--font-weight-normal: 400`, `--font-weight-display: 600`, `--font-weight-bold: 700` and `--font-weight-boldest: 900`. Titles on the page are in a wide, geometric form of the face; letter spacing is not set in the measured roles.

## Layout

The page uses a centred container with about 60px side margins at the 960px capture width, with full-bleed photography. Sections alternate white and `#f9f9f9` bands. The category tiles are five equal columns of white cards with the product image above a bold 16px label. Campaign cards sit in two equal columns. Spacing variables in the CSS run on a scale: `--spacing-1: 2px`, `--spacing-4: 12px`, `--spacing-6: 20px`, `--spacing-9: 64px`, `--spacing-12: 128px`, `--spacing-13: 160px` and `--spacing-14: 192px`, with negative counterparts; the footer uses 64px vertical padding (372px tall).

## Elevation & Depth

Two shadows are measured: `rgba(0, 0, 0, 0.4) 0px -2px 2px 0px inset` (one element) and `rgba(0, 0, 0, 0.32) 0px 1.5px 12px 0px` (one element, the logo tile under the nav). The CSS defines `--shadow-1: 0 4px 8px 0 rgba(var(--shadow-color),0.16),0 1px 2px 0 rgba(var(--shadow-color),0.32)` and `--shadow-0: none`. Product tiles are flat white on the grey band, and photo cards use dark gradients under their white captions rather than shadows.

## Shapes

Radii measured: 100px (45 elements: all buttons, the pause control and the outlined pills), 10px (1) and 4px (1). The CSS scale is `--corner-radius-0: 0`, `--corner-radius-1: 2px`, `--corner-radius-2: 4px`, `--corner-radius-3: 6px` and `--corner-radius-4: 100px`. Buttons are pills; tiles, photographs and cards are square-cornered.

## Components

**Primary button.** `#0066f5` fill, `#ffffff` 16px bold text, 2px solid `#0066f5` border, 100px radius, padding 12px 24px, 48px high ("Shop screen sync"); on hover fill and border become `#0050a8`.

**Outlined pill.** Transparent or white fill, 2px border, 16px text, 48px high; blue outline on light bands ("All smart home products"), white outline on dark photo cards.

**Pause control.** A 40px round white button with a `#e7e7e7` border; on hover the fill becomes `#e7e7e7`.

**Navigation.** `#000826` bar, 48px tall, white 16px weight-400 items; the Hue logo sits in a white tile that overhangs the bar.

**Announcement bar.** A thin `#0066f5` strip with centred white 16px text and a bold "Sign up" link.

**Category tile.** White square card, product image, bold 16px label centred below.

**Footer.** Grey `#a9a9a9` text with a 64px vertical padding: "Connect with Philips Hue", location selector, legal links.

## Design System Architecture

No public Philips Hue design-system page was opened for this document, so there is no official token source to cite. The shipped CSS shows a named token layer on the root: colour scales by purpose (`--color-attention-*`, `--color-success-*`, `--color-warning-*`, `--color-grey-100` to `-900`), spacing numbers (`--spacing-1` to `--spacing-14` plus negatives), corner radii (`--corner-radius-0` to `-4`), shadows (`--shadow-0`, `--shadow-1`, `--shadow-color`), font weights and a z-index token (`--z-index-cta-element-link: 520`). A consent-manager variable (`--truste-popframe-height: 505px`) is also on the root; that belongs to a third-party privacy tool and is not a brand token.

## Do's and Don'ts

- Do use white and `#f9f9f9` bands with `#101010` text and let photography of coloured light carry the saturation.
- Do use one blue (`#0066f5`) for primary pills and links, darkening to `#0050a8` on hover.
- Do keep buttons at 100px radius and 48px height; keep cards and photos square.
- Do set titles in sohne bold with 56px line height at 48px.
- Do keep headlines short and benefit-led ("A whole new way to sync TV and lights").
- Don't use gradients or heavy shadows on interface elements.
- Don't use the green success or red warning scales as brand accents.
- Don't treat the consent-manager frame as part of the design.

## Responsive Behavior

The 390px mobile pass measured type only: the h1 becomes 32px/40px at weight 700, body text stays 16px/24px at 400, and the primary button stays 16px/20px at 700. Navigation, tile columns and card stacking at mobile width are not measured.

## Iteration Guide

1. Start with `canvas` `#ffffff`, `ink` `#101010` and a `#000826` nav bar under a `#0066f5` announcement strip.
2. Open with a 48px bold title, a one-line tagline and a full-width lifestyle photograph.
3. Centre a single blue pill button (48px, 100px radius) under the intro line.
4. Alternate sections with a `#f9f9f9` band holding five square product tiles.
5. Use two tall photo cards with white outlined pills for campaigns.
6. Verify with `node web/scripts/verify-designs.mjs --slug=philips-hue`.
