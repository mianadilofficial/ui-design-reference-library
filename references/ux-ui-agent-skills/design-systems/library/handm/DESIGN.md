---
version: alpha
name: H&M
category: "Fashion & Apparel"
description: "H&M's US home page is a white #ffffff, square-cornered (0px radius everywhere) fashion grid: full-bleed photography with uppercase HM Slussen headlines (36px/30.6px) reversed out in white, black #000000 text, #666666 inactive nav links, a #eb0010 red logo and promo line, #cccccc hairlines, and 'SHOP NOW →' white bars under every image."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#eb0010"
  ink-muted: "#666666"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: "\"HM Slussen\", \"ヒラギノ角ゴ Pro W3\", \"Hiragino Kaku Gothic Pro\", Osaka, メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", \"MS PGothic\", sans-serif"
    fontSize: 36px
    fontWeight: 100
    lineHeight: 30.6px
    textTransform: uppercase
  body:
    fontFamily: "\"HM Slussen\", \"ヒラギノ角ゴ Pro W3\", \"Hiragino Kaku Gothic Pro\", Osaka, メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", \"MS PGothic\", sans-serif"
    fontSize: 12px
    fontWeight: 100
    lineHeight: 16px
  nav:
    fontFamily: "\"HM Slussen\", \"ヒラギノ角ゴ Pro W3\", \"Hiragino Kaku Gothic Pro\", Osaka, メイリオ, Meiryo, \"ＭＳ Ｐゴシック\", \"MS PGothic\", sans-serif"
    fontSize: 14px
    fontWeight: 100
    lineHeight: 20px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 16px
  s4: 24px
  s5: 40px
  s6: 48px
  s7: 64px
components:
  promo-bar:
    textColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-inactive:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  shop-now-bar:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 48px 24px
---

# H&M

## Overview

H&M is the fashion brand whose site content the footer attributes to H&M Hennes & Mauritz AB; this file describes the US storefront home page, https://www2.hm.com/en_us/index.html ("H&M | Online Fashion, Homeware & Kids Clothes | H&M US"). The queued URL, https://www2.hm.com, first resolved to the country-selector entrance page (https://www.hm.com/entrance.ahtml), so the real home page was re-measured directly; earlier attempts were blocked by HTTP 403 (recorded in SOURCES.json).

The page is image-first and almost entirely black and white. A thin promotional line runs across the very top in red ("15% OFF $100 OR 20% OFF $125", with a red plus at the right). Below it, the header shows the red H&M script logo at left, the department tabs WOMEN (active, black), MEN, KIDS, HOME and BEAUTY (grey), and four icons at right (search, account, favourites, bag). The hero is a full-bleed photograph — a close crop of a woman in a cream ribbed sweater — with the headline "SWEATERS FROM $19.99" reversed out in white in a wide, heavy uppercase cut, a small pause control, and a white "SHOP NOW →" bar spanning the bottom of the image.

The rest of the page is a strict grid of photographs: a two-up row with "SHOP NOW" bars, a two-up row with "NEW FALL UNIFORM" and "H&M MOVES NEW YORK" over the images, a "NEW IN" row of twelve product cut-outs on light grey (six per row), and four large editorial tiles — "WORKWEAR EDIT", "DENIM EDIT", "BASICS EDIT", "NIGHT OUT EDIT" — with the titles set in very large black uppercase over studio shots on pale grey. A white footer closes the page with Shop, Corporate Info and Help link columns, a "Become a member" prompt, the H&M logo, "United States — CHANGE REGION", an accessibility statement, social icons and payment-method logos.

There are no buttons in the conventional sense: every action is an uppercase text link with an arrow.

## Colors

The palette is minimal and measured almost entirely from text, because the colour on the page comes from photography.

- **Canvas `#ffffff`** — the body and the only large background (the extractor recorded `#000000` as the only other background, on 3 small areas).
- **Ink `#000000`** — the dominant text colour: active nav, "SHOP NOW" links, footer and editorial titles.
- **Ink-muted `#666666`** — inactive department tabs (MEN, KIDS, HOME, BEAUTY); on hover they turn black, and black header items (logo, search, sign in, favourites) turn `#666666` on hover (measured).
- **Primary `#eb0010`** — H&M red: the logo and the promotional line. It is the brand colour, not a button fill; no filled button was detected on the page.
- **Hairline `#cccccc`** — the thin rule under the promo bar and other dividers.
- White `#ffffff` also serves as the reversed headline colour over photographs.

## Typography

- **HM Slussen**, H&M's own variable typeface (font file `HMSlussen[TITL,wdth,wght].woff2`, served from `fabric.hmgroup.com/fabric-fonts/…/northstar/`), sets every measured character. The stylesheet declares many named cuts — HM Slussen Regular, Semibold, Condensed, Wide, Extended and Headline variants — plus an editorial serif stack `--editorial-headline-font-family: "HM Sergel Headline", "Garamond", "Times New Roman", Times, serif`.
- `display`: 36px with a 30.6px line height (0.85), uppercase, for the hero line "SWEATERS FROM $19.99". A 26px size and 700 weight were also measured (54 characters).
- `nav`: 14px/20px uppercase for tabs, "SHOP NOW" and section labels such as "NEW IN"; `body`: 12px/16px for the footer's legal text.
- The computed `font-weight` reads 100 on almost all text (1,493 characters), while the capture shows a heavy, wide cut on headlines and a regular cut on navigation. Because the font is variable with TITL, wdth and wght axes, the rendered style is set by axis settings that the extractor did not record; reproduce it with the matching HM Slussen cut rather than a numeric weight.

HM Slussen is proprietary. Substitutes: a neo-grotesk family with wide and extended widths (for example Neue Haas Grotesk Display or Druk Wide for the headline cut) for display, and a neutral grotesk for the 12px–14px text.

## Layout

At 1280px the page is 5,345px tall. The header area is 106px (promo line plus navigation), with content from 16px to 1240px. Twelve header links/icons were counted, and a department menu toggle labelled "Women Menu" was detected.

The grid is edge-to-edge: the hero spans the full width; the next rows split exactly in half with no gutter; the "NEW IN" product rail shows six items per row (6 card columns measured). Spacing is sparse and regular — gaps of 8px (42 uses), 16px, 24px, 40px and 64px; paddings of 16px and 24px; the footer has `48px 24px` padding. Text sits 16px–24px in from image edges. Vertical rhythm between modules is a plain white gap rather than dividers.

## Elevation & Depth

There is no elevation: no box-shadows were measured on the page. The root declares `--shadow-static-color: rgba(0,0,0,0.1)`, but no element used it in the measured state. Depth comes only from photography — close crops, layered garments, and the contrast of white type over images.

## Shapes

Every rendered element computes a border radius of 0px — the extractor's `borderRadii` list is empty — so the token set records `rounded.none: 0px`. Images, bars, product tiles and the pause control are all square-cornered rectangles. Icons are thin line glyphs (magnifier, person, heart, bag, arrow, plus). The H&M script logo in red is the only curved, hand-drawn form in the interface.

## Components

- **promo-bar** — a white strip with red `#eb0010` uppercase text at left and a red plus at right, separated from the navigation by a `#cccccc` rule.
- **nav / nav-link** — uppercase HM Slussen 14px/20px; the active department is black, the others `#666666`, swapping to black on hover; right-side icons are black and turn grey on hover.
- **Hero** — a full-bleed photograph with a two-line uppercase white headline (36px/30.6px) at left and a small square pause button at bottom right.
- **shop-now-bar** — a white bar across the bottom of an image with "SHOP NOW" at left and an arrow at right, black 14px uppercase text, square corners.
- **Editorial tile** — a large studio photograph on pale grey with a very large black uppercase title ("DENIM EDIT") overlapping the model, then "SHOP NOW" below.
- **Product tile** — a garment cut-out on light grey, no text in the measured rail.
- **footer** — black text, uppercase column headings (Shop, Corporate Info, Help, Become a member), `48px 24px` padding, a "READ MORE" underlined link, payment logos in a row.

## Design System Architecture

H&M's front end runs on an internal design system whose assets are served from `fabric.hmgroup.com` and whose CSS custom properties use the `--fds-` prefix (for example `--fds-text-display-xl-…`, `--fds-text-nav-xl-…`, `--fds-text-editorial-heading-xl-…`, `--fds-text-label-l-link-…`, `--fds-global-color-vendors-snapchat`). The variable set is generated per locale and per breakpoint — names such as `--fds-text-nav-l-locale-fr-ch-size-desktop-line-height-px` or `--fds-text-editorial-heading-xl-locale-no-no-size-desktop-font-size-px: 64px` define the type scale for each market — and includes CJK fallbacks (`--interactive-input-text-locale-zh-tw-font-family: "Noto Sans TC Regular"…`). No public documentation could be opened: https://fabric.hmgroup.com/ returned HTTP 403 and https://hmgroup.com/brands/h-m/ returned 404, so no official guideline is cited.

## Do's and Don'ts

**Do**
- Let full-bleed photography carry the page; keep the UI black, white and grey.
- Set headlines in uppercase HM Slussen (a wide, heavy cut) reversed out of images or in black over pale studio backgrounds.
- Keep every corner square (0px).
- Use "SHOP NOW →" text bars instead of filled buttons.
- Reserve `#eb0010` red for the logo and promotional messaging.
- Lay modules edge to edge in halves and sixths, with plain white gaps between them.

**Don't**
- Don't add rounded corners, shadows or coloured buttons; none were measured.
- Don't use the red for navigation or body text.
- Don't set headlines in mixed case.
- Don't place text panels or cards over photographs; type sits directly on the image.

## Responsive Behavior

Not measured. The extractor's mobile pass at 390px was answered with an "Access Denied" error page (Times 32px heading, an `errors.edgesuite.net` reference), so no mobile values from the real storefront were recorded and none are used in this file. Breakpoint behaviour, mobile navigation and mobile type sizes were not measured.

## Iteration Guide

1. Start with a white canvas, a red promo line, and a black/grey uppercase department nav with the red logo.
2. Place one full-bleed hero image with a two-line uppercase white headline (36px/30.6px) and a "SHOP NOW →" bar.
3. Follow with two-up image rows split exactly in half, each with a "SHOP NOW" bar.
4. Add a six-across product rail on light grey and large editorial tiles with oversized black titles.
5. Verify that every radius is 0px and that no shadows were introduced.
6. Compare against https://www2.hm.com/en_us/index.html before shipping.
