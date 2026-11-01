---
version: alpha
name: Base Brand Guidelines
category: "Architecture & Interiors"
description: "Base Brand Guidelines (brand.base.org, the open brand site behind Base's Brand in the Open campaign) measured 2026-10-09: white canvas with a left text sidebar, black coinbaseSans/Base Sans type at 24px with negative tracking, Base Blue #0000ff as the brand anchor (blue square logo and button hover), dark #323232 8px-radius buttons and #fafafa 12px-radius tiles."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  button-dark: "#323232"
  on-primary: "#ffffff"
  surface-card: "#fafafa"
  surface-muted: "#f2f2f2"
  gray-50: "#717886"
  primary: "#0000ff"
  cerulean: "#3c8aff"
  tan: "#b8a581"
  yellow: "#ffd12f"
  green: "#66c800"
  lime-green: "#b6f569"
  red: "#fc401f"
  pink: "#fea8cd"
  gray-10: "#eef0f3"
  gray-15: "#dee1e7"
  gray-30: "#b1b7c3"
  gray-60: "#5b616e"
  gray-80: "#32353d"
  gray-100: "#0a0b0d"
typography:
  display:
    fontFamily: coinbaseSans, "coinbaseSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
    letterSpacing: "-0.5px"
  subheading:
    fontFamily: coinbaseSans, "coinbaseSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
  button:
    fontFamily: coinbaseSans, "coinbaseSans Fallback", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 17.1px
  nav:
    fontFamily: coinbaseDisplay, "coinbaseDisplay Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
spacing:
  s1: 2px
  s2: 2.56px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28.8px
components:
  button-primary:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 16px
    height: 36px
    borderColor: "{colors.button-dark}"
  button-primary-hover:
    backgroundColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.button-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 52px
    borderColor: "{colors.button-dark}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 0px 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink}"
    padding: 128px 0px 0px
---

## Overview

The queued entry is "Brand in the Open", whose URL `http://brand.base.org` redirects to `https://brand.base.org/`, titled "Base | Brand" with the visible heading "Base Brand Guidelines". This is the brand-guidelines site of Base, the onchain platform that mirrors Coinbase; it is the parent site of the campaign. The page states that "Brand in the Open" is a campaign that preceded the new brand, in which Base invited 10 artists to reimagine the Base brand in their own styles, and that the campaign has its own site, brandintheopen.xyz. This DESIGN.md documents the measured site, brand.base.org, and is named after it.

The capture shows an editor-like documentation layout: a narrow left sidebar with a solid blue square logo, a vertical list of section links (Introduction, Messaging, Core Identifiers, Color, Typography, Sub Brands, Motion, Partnerships, In Use, most with a right chevron), and a dark "Download brand assets" button. The main column opens with the title "Base Brand Guidelines" over a large pale-gray, pixel-grid butterfly artwork with a small status chip at the top right ("6 Mwei" with a green dot). A hairline rule leads into one 24px paragraph: "Base began as an internal experiment, mirrored from Coinbase, and has grown into an open canvas for anyone building onchain" and continues that the guidelines are "less a rulebook than a starter kit". Below, a two-column grid of large tiles previews each section (Messaging, Core Identifiers, Color, Typography, Sub-brands, Motion), each with a small rounded gray label under it.

The voice is plain, direct and slightly playful ("Base is for [ ]."). The page is mostly white space with saturated blue as the single loud element. The measurement saw 312 visible elements at 1,280px and a 3,925px scroll height.

## Colors

The brand's own color page (https://brand.base.org/color) is the authority. It names **Base Blue `#0000ff`** as the anchor color, with the rule to reserve it for the most effective element and not to overuse it, and lists Cerulean `#3c8aff`, Tan `#b8a581`, Yellow `#ffd12f`, Green `#66c800`, Lime Green `#b6f569`, Red `#fc401f` and Pink `#fea8cd` as a secondary palette, plus a gray scale: Gray 0 `#ffffff`, Gray 10 `#eef0f3`, Gray 15 `#dee1e7`, Gray 30 `#b1b7c3`, Gray 50 `#717886`, Gray 60 `#5b616e`, Gray 80 `#32353d` and Gray 100 `#0a0b0d`. The page also lists a separate set of hex values alongside Pantone and CMYK (for example Base Blue `#0033a0`); this file uses the first, digital list because those are the values the site's own CSS uses.

Its rules are explicit: grays and negative space should carry more visual weight than Base Blue; do not lead with the secondary colors, use no more than three vibrant colors, and pair them with one muted color; do not lead with gradients; keep values locked and do not interpolate between shades. Digital use should meet WCAG AA Large contrast, and Base Blue on white (or white on Base Blue) is the one pairing the page confirms. The product uses a separate accessibility-optimized palette.

What the home page measured: white canvas `#ffffff` (area weight 5,024), card surface `#fafafa` (185), a muted `#f2f2f2` (30), dark button `#323232` (24), and Base Blue `#0000ff` (12; the logo square and the hover fill). Text is `#000000` (945 characters), `#717886` (136, Gray 50, used for the metadata line) and white (41) on the dark button. `#0a0b0d` (Gray 100) is a measured border color. The generated primary call to action is the dark `#323232` button; because the brand names Base Blue as the anchor and it is measured as the hover fill, `primary` is set to `#0000ff` and the dark resting fill is kept as `button-dark`.

## Typography

The guidelines (https://brand.base.org/typography) define three families: **Base Sans** (Thin, Light, Regular, Medium, Bold, Black, each with italics; headlines, subheadlines and body; ligatures off by default), **Base Mono** (Thin to Medium with italics; metadata, code and developer display) and the secondary **Doto** (variable weight and a roundness axis of 0, 50 or 100; always all caps, short messages only). Fallbacks listed are Inter Tight, Inter, Roboto Mono and Doto. The page documents sizes only as scale labels (xl, l, m, s) and gives these type-example rules: headline Medium with -3% or -2% kerning and 100% to 110% leading; subheadline Regular with -2% kerning and 120% leading; body Medium or Light with 140% leading; dates in Mono Light.

On the page, the CSS family names are `coinbaseSans` (985 characters), `coinbaseMono` (132, at weight 350), `coinbaseDisplay` (4) and `doto` (1); the stylesheet also declares `baseSans`, Inter, Inter Tight, Roboto Mono, DM Sans, Oxanium and Noto Sans Mono. Whether the `coinbase*` and Base files are the same is not verified. Measured roles:

| Role | Face | Size / line height | Weight / tracking |
| --- | --- | --- | --- |
| Display (h1, intro paragraph) | coinbaseSans | 24px / 26.4px (paragraph 28.8px) | 400, -0.5px (paragraph -0.6px) |
| Subheading and sidebar | coinbaseSans | 14px / 18.2px | 400, 0.14px on the sidebar |
| Button | coinbaseSans | 15px / 17.1px | 400 |
| Nav link | coinbaseDisplay | 16px / 24px | 400 |

By characters the sizes are 24px (749), 14px (257), 15px (115) and 16px (1); weights are 400 (989), 350 (132) and 700 (1, the Doto ticker). The page has no larger display size than 24px, so hierarchy comes from white space and the tile art. **Font substitutes:** the guidelines list Inter Tight and Inter as fallbacks for Base Sans, and Roboto Mono for Base Mono.

## Layout

A left column (logo, 14px section list, download button) sits beside a main column that starts after it, with the title at the top and a hairline rule under the hero artwork. Tiles run in two equal columns; each measured 485px wide by 376px high. The footer measured a 128px top padding and lists Explore, Apps, Builders, Tools, Basescan, Gas credits and Engineering, several in upper case.

Measured paddings are 10px (25 times), 4px (18), 16px (10), 32px (4), and one each of 8, 20, 24, 128 and 12px; measured gaps are 8px (24), 2.56px (8), 4px (6), 28.8px (4), 2px (2), 32px and 40px (1 each). The stylesheet carries Tailwind variables (`--tw-ring-shadow`, `--tw-shadow`); no breakpoint values were measured.

## Elevation & Depth

The page is flat. No box shadow was measured on a visible element (the shadow list is empty). Separation comes from white space, the `#fafafa` tile fill against white, a hairline rule, and 1px `#323232` outlines on the dark buttons. The stylesheet carries Tailwind ring and shadow variables and a few explicit shadows (`0px 2px 10px -3px #999`, `0px 0px 12px 2px #c7c5c7`, `-3px -3px 5px -2px #c7c5c7`, each 9 times); where they apply on this page was not measured. The brand's own color rules also say to avoid opacity, layering and other visual effects in core communications.

## Shapes

Measured radii: 8px (19 elements), 12px (2) and 6px (1), exposed as the tokens `xs` 6px, `sm` 8px and `md` 12px. The small primary button ("Download brand assets", 36px high) uses 8px; the larger button ("Explore the campaign", 52px high) and the tiles use 12px. The stylesheet also declares 20px (18 declarations), 2px, 3px, 4px, 10px, 24px, 40px and 9999px; none of these were assigned to a measured element. The capture shows square-block logo shapes in the tiles and a solid blue square in the sidebar.

## Components

**Primary button (small).** Fill `#323232`, white 15px/17.1px text, 8px radius, `0 16px` padding, 36px high, 1px solid `#323232` border. On hover the fill and border become `rgb(0, 0, 255)`, the Base Blue.

**Large button.** The same dark fill and text, 12px radius, `0 24px` padding, 52px high; at 390px it is 358px wide.

**Sidebar navigation.** 14px/15.96px text with 0.14px tracking in black, a right chevron on expandable items, a blue square logo `#0000ff` at the top. The nav links measured 16px coinbaseDisplay.

**Tile.** `#fafafa` fill, 12px radius, 485 by 376px, holding a section artwork; a small rounded gray label beneath the tile names the section.

**Metadata chip.** A small white chip with a green dot and the text "6 Mwei" in the Doto face at weight 700 (16px at 390px).

**Footer.** Black text, 14px/18.2px, 128px top padding.

No text input was detected; no card border was measured.

## Design System Architecture

The brand publishes its system at https://brand.base.org/ itself: sections for Introduction, Messaging, Core Identifiers, Color, Typography, Sub Brands, Motion, Partnerships and In Use, plus a "Download brand assets" link (`/base-brand.zip`) and a "Brand kit" link under Resources. The guidelines frame the system as a starter kit with non-negotiables and "flex zones" for the community. The site's footer also links to Base's builder resources (Tools, BaseScan, Gas credits, Engineering blog, Support).

In code, the `:root` carries `--ock-*` variables (for example `--ock-border-radius: .5rem`, `--ock-line-default: #d1d5db`, `--ock-text-foreground: #030712`) that belong to a third-party onchain component library, `--tw-*` Tailwind variables, `--font-coinbase-mono`, `--font-doto` and a `--hero-gradient-stop-point: 20%`. Those `--ock-*` grays are library defaults, not Base brand colors; the brand colors are the ones documented on the color page.

## Do's and Don'ts

**Do**
- Use white and the `#fafafa` tile fill as the field, black for text, and Base Blue `#0000ff` once per view for the most important element.
- Set headlines in Base Sans (coinbaseSans on this site) with negative tracking: -0.5px to -0.6px at 24px.
- Use all caps and short messages whenever Doto appears.
- Pair no more than three vibrant secondary colors with one muted color, after black, white and blue are in place.
- Meet WCAG AA Large contrast for digital use.

**Don't**
- Don't lead with the secondary palette, gradients, opacity or layering in core communications.
- Don't interpolate between shades of the locked color values.
- Don't hero any color other than blue, black, white or gray.
- Don't use the `--ock-*` library grays or Tailwind defaults as brand colors.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the h1 stays 24px/26.4px with -0.5px tracking (342px wide, 53px high); the intro paragraph is 20px/24px, 358px wide and 168px high (24px/28.8px on desktop); the large button measured 358 by 52px with a 12px radius and `0 24px` padding; the top bar measured 390px wide and 72px high with 16px padding and the Doto text "6 Mwei" at weight 700. Mobile sizes by character are 20px (729), 14px (171), 15px (94), 24px (20) and 16px (1). How the sidebar and the tile grid reflow was not measured.

## Iteration Guide

1. Set canvas `#ffffff`, card `#fafafa`, ink `#000000`, metadata `#717886`, dark button `#323232`, Base Blue `#0000ff` as the anchor.
2. Use Base Sans (or its listed fallbacks Inter Tight and Inter) with -0.5px to -0.6px tracking at 24px, 14px sidebar text, 15px buttons.
3. Build the sidebar, then the title, rule, 24px paragraph and two-column 12px-radius tile grid.
4. Add the dark 8px-radius button with a Base Blue hover.
5. Keep the secondary palette off the page unless black, white and blue are already present.
6. Measure any new component first with `node web/scripts/extract-tokens.mjs --slug=brand-in-the-open--<page> --url=<url> --force --no-motion`.
