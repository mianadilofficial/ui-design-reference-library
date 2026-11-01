---
version: alpha
name: "Apple"
category: "Media & Consumer Tech"
description: "apple.com is a cinematic product-tile gallery: alternating black #000000 and light #f5f5f7 tiles, SF Pro Display 56px/600 headlines with -0.28px tracking, SF Pro Text 17px buttons, a single blue #0071e3 on 44px full-pill (980px) CTAs, a 44px translucent nav #1d1d1fcc, and almost no shadow or border chrome."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#f5f5f7"
  primary: "#0071e3"
  on-primary: "#ffffff"
  surface-tint: "#f4f8fb"
  ink-footer-muted: "#0000008f"
  ink-footer-soft: "#000000b8"
  ink-on-light: "#1d1d1f"
  ink-footer-strong: "#000000e0"
  link-on-light: "#0066cc"
  link-on-dark: "#2997ff"
  surface-light: "#f5f5f7"
  surface-dark: "#161617"
  ink-tertiary: "#6e6e73"
  primary-hover: "#0076df"
  nav-bg: "#1d1d1fcc"
  nav-link-text: "#ffffffcc"
typography:
  display:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 60px
    letterSpacing: "-0.28px"
  display-mobile:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: 0.064px
  subheading:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
  body:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: 0.231px
  button:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 20.0002px
    letterSpacing: "-0.374px"
  nav:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 600
    lineHeight: 21.0012px
    letterSpacing: "-0.374px"
rounded:
  xs: 8px
  sm: 11px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 9px
  s4: 9.6px
  s5: 11px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 17px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 21px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link-dark:
    textColor: "{colors.link-on-dark}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.nav-link-text}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 0px 8px
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-footer-muted}"
---

# Apple

## Overview

apple.com is a product-launch gallery. The capture (a Thai-locale visit, so a country-picker banner with Thai copy and a "ต่อไป" button sits above the nav) shows a vertical stack of full-width "tiles", each one a single product: a 56px / 600 name ("iPhone 18 Pro"), a one-line tagline at 28px ("Pro further."), a pair of pill buttons, and then a huge hero photograph or render that takes most of the tile. Tiles alternate between pure black (#000000) and light grey (#f5f5f7), and two half-width tiles appear side by side lower down (Watch Ultra 4 on black, MacBook Air on a pale blue #f4f8fb wash).

The feeling is cinematic and restrained: almost no ornament, no borders, no card chrome. Product photography is the decoration; typography is SF Pro in tight, confident weights; the only chromatic UI colour is one blue (#0071e3). Copy is short and declarative ("Pro further.", "Hello, hello.", "Now supercharged by M5.", "A battery you can't outrun."), with price/date information in small grey type beneath.

Key characteristics:
- **Alternating tiles.** Black #000000 and light #f5f5f7 backgrounds, almost edge to edge, 580px-class hero content height (`--hero-content-height: 580px`).
- **One interactive blue.** #0071e3 fills the primary pill; #0066cc is the link blue on light, #2997ff the link blue on dark.
- **Pill buttons.** Radius 980px (a pill) on 44px high buttons, 17px SF Pro Text label.
- **Translucent global nav.** 44px high, background #1d1d1fcc with white 80% links.
- **SF Pro everywhere.** Display cut for headlines, Text cut for UI, an Icons cut for glyphs, and SF Pro TH for Thai.
- **No elevation system.** One soft shadow (`rgba(0, 0, 0, 0.22) 3px 5px 30px 0px`) appears in the measurement; the layout relies on contrast between tiles instead of shadows.

Important note: Apple's own trademark guidelines (https://www.apple.com/legal/intellectual-property/guidelinesfor3rdparties.html) state that you "may not imitate the distinctive Apple packaging, web site design, logos, or typefaces". This document describes the site for analysis; it is not a licence to reproduce it.

## Colors

All hexes are measured on apple.com (homepage) and cross-read against the site's own CSS custom properties (the `--sk-*` and `--r-*` variables on `:root`).

### Surfaces
- **Canvas** `{colors.canvas}` (#000000): the dominant tile background in the capture (about 47% of pixels) and the largest-area background in the DOM.
- **Page body** `{colors.page-body}` (#ffffff): the `<body>` background and `--sk-body-background-color` (rgb(255, 255, 255)); visible between and below tiles.
- **Surface light** `{colors.surface-light}` (#f5f5f7): light tiles and the footer (second largest background; `--sk-fill-tertiary` rgb(245, 245, 247)).
- **Surface tint** `{colors.surface-tint}` (#f4f8fb): the pale blue backdrop of the MacBook Air tile.
- **Surface dark** `{colors.surface-dark}` (#161617): dark nav-open background (`--r-globalnav-background-opened-dark`).
- **Nav background** `{colors.nav-bg}` (#1d1d1fcc): global nav, 80% opaque over the page.

### Ink
- **Ink** `{colors.ink}` (#f5f5f7): headline and body text on black tiles.
- **Ink on light** `{colors.ink-on-light}` (#1d1d1f): headline text on light tiles (`--sk-headline-text-color` rgb(29, 29, 31)).
- **Ink tertiary** `{colors.ink-tertiary}` (#6e6e73): secondary text on light (`--sk-glyph-gray-secondary`).
- **Footer ink** `{colors.ink-footer-muted}` (#0000008f), `{colors.ink-footer-soft}` (#000000b8), `{colors.ink-footer-strong}` (#000000e0): alpha-black text levels in the footer; the two most-read text colours on the page.
- **Nav link text** `{colors.nav-link-text}` (#ffffffcc): white at 80%.

### Action
- **Primary** `{colors.primary}` (#0071e3) with **on primary** `{colors.on-primary}` (#ffffff): the "Learn more" pills. `--sk-focus-color` is the same #0071e3.
- **Primary hover** `{colors.primary-hover}` (#0076df): measured after hovering "Learn more".
- **Link on light** `{colors.link-on-light}` (#0066cc): `--sk-body-link-color` and the border colour of outlined pills on light tiles.
- **Link on dark** `{colors.link-on-dark}` (#2997ff): links and outlined pill text on black tiles.

### Colour in imagery
Product renders carry the saturated colour (deep burgundy phone, green heart-rate glow, red heart). The UI never adopts those hues; they live inside photography.

## Typography

The measured families are `SF Pro Text` (4504 characters), `SF Pro Display` (867) and `SF Pro TH` (110, the Thai cut). The page also loads SF Pro Display 400/600/700 and SF Pro Text 300/400/600 and an SF Pro Icons 300 face.

| Role | Token | Size / weight / line | Letter-spacing |
|---|---|---|---|
| Tile headline | `{typography.display}` | 56px / 600 / 60px | -0.28px |
| Tile headline, mobile | `{typography.display-mobile}` | 32px / 600 / 36px | 0.064px |
| Half-tile headline | `{typography.subheading}` | 40px / 600 / 44px | normal |
| Tagline / body | `{typography.body}` | 21px / 400 / 25px | 0.231px |
| Button and link | `{typography.button}` | 17px / 400 / 20.0002px | -0.374px |
| Nav link | `{typography.nav}` | 17px / 600 / 21.0012px | -0.374px |

Other measured sizes: 12px dominates by character count (4016, footer legal text at 16.0005px line height and -0.12px tracking), then 21px, 14px, 17px, 28px, 40px, 19px and 56px.

### Font substitutes
SF Pro is Apple's own typeface and is not distributed as a web font for third parties. The HIG says the system font is SF Pro with dynamic optical sizes merging Text and Display into one continuous design. The site's own fallback chain is `"Helvetica Neue", Helvetica, Arial, sans-serif`; use that, or `-apple-system` on Apple devices.

### Principles
- Headlines are semibold (600), never light, and tracked slightly negative at 56px.
- Taglines step down to 21 to 28px regular.
- Buttons and links share 17px with -0.374px tracking.
- Footers drop to 12px with alpha-black ink.

## Layout

- Global nav 44px (`--globalnav-height: 44px`), full width: Apple logo, then Store, Mac, iPad, iPhone, Watch, Vision, AirPods, TV & Home, Entertainment, Accessories, Support, plus search and bag icons.
- Optional local nav height 52px (`--r-localnav-height`), stacked 66px.
- Local-nav breakpoints from rootVars: small 320 to 833px, medium 834 to 1023px, large 1024px and up.
- Each tile is a centred column of text (headline, tagline, buttons) followed by a wide image that may bleed to the edges. The measurement shows the viewport at 1280px and content roughly 1000px wide.
- Two-up tiles use a thin gap (the media gallery uses `--media-gallery-tile-gap: 13px`, tile size 930 x 523).
- Measured spacing values: 4, 8, 9, 9.6, 11, 12, 14, 15, 17 and 18px; headline-to-subhead gap 0.4em (`--sk-headline-plus-headline-margin`), paragraph margin 0.8em.

## Elevation & Depth

- There is effectively no elevation. Tiles are differentiated by background colour, not shadow.
- The only shadow measured: `rgba(0, 0, 0, 0.22) 3px 5px 30px 0px`, a soft diffuse drop used on product imagery.
- The nav is translucent (#1d1d1fcc) over scrolled content, which is the site's one depth cue.
- Outlined elements use hairline borders: colours measured are #0066cc, #2997ff and #ffffff14.
- Focus: `--sk-focus-offset: 1px` and `--sk-focus-offset-container: 3px` with `--sk-focus-color: #0071e3`.

## Shapes

- Measured radii: `{rounded.pill}` (980px reported as a pill; also 999px), `{rounded.sm}` 11px (the language picker box), `{rounded.xs}` 8px (small chips and the banner "ต่อไป" button).
- Primary and secondary CTAs are always full pills (radius 980px) at 44px height.
- Images are mostly square-cornered full-bleed tiles; avatars/icons use 50%.
- Never round the tile edges; the page reads as continuous bands.

## Components

### Buttons
- **Primary pill:** `{components.button-primary}`: #0071e3 fill, white 17px label, padding 11px 21px, 44px high, 980px radius. Hover fills #0076df (no shadow, no border change).
- **Secondary pill ("Buy", "View pricing"):** the same size, transparent fill, blue outline and blue text (#2997ff on dark, #0066cc on light; borders measured above).
- **Text link:** `{components.link-dark}`: 17px, #2997ff on dark.

### Navigation
`{components.nav}` and `{components.nav-link}`: 44px, links in 17px semibold at 80% white with 8px horizontal padding.

### Footer
`{components.footer}`: #f5f5f7 background, 12px text in alpha-black #0000008f, long legal footnotes ("Based on data from an Apple-conducted study of..."). The page footer is about 996px tall.

### Tile
Not a styled card: a section containing headline, tagline, button pair and media. Alternating colours give rhythm.

### Country/language banner
A 36px-high white or #f5f5f7 button with 8px radius (hover turns it white) inside a dark strip; the picker box has an 11px radius.

## Art Direction and Imagery

- **Photography as architecture.** Each tile's image is large enough to be the layout: the "PRO" lettering with the phone laid across it, two hands holding a folded phone (iPhone Duo), two watches side by side. Images sit on the tile colour with no frame.
- **Lighting.** Black tiles show products with rim light and glow; light tiles show soft, shadowless studio-grey backgrounds and hands.
- **Wordmarks as imagery.** Product names such as "WATCH SERIES 12" and "WATCH ULTRA 4" appear as logo-style lockups with the Apple glyph, wider tracked than body headlines.
- **Screens are shown real.** Device UI is rendered at fidelity (heart-rate graph, home screen), never abstracted.
- **Density.** Very low: one message per screenful. The first viewport holds the banner, nav, headline, tagline, two buttons and a hero image.

## Microcopy Patterns

| Pattern | Example from the capture |
|---|---|
| Product name headline | "iPhone 18 Pro", "iPhone Duo", "MacBook Air" |
| Two-word or sentence-fragment tagline | "Pro further.", "Hello, hello.", "Now supercharged by M5." |
| Benefit line | "The most accurate heart rate sensing in a wearable." (with a superscript footnote marker) |
| Availability line (small grey) | "Pre-order starting 5:00 a.m. PT on 10.16", "Available starting 10.23" |
| Button pair | "Learn more" + "Buy" (or "View pricing") |

Footnotes use a superscript marker and long legal text in the 12px footer.

## Measured Reference

| Item | Value |
|---|---|
| Viewport used for measurement | 1280px desktop, 390px mobile |
| Global nav height | 44px |
| Primary button | 44px high, padding 11px 21px, radius 980px |
| Button label | 17px / 400 / 20.0002px, tracking -0.374px |
| Tile headline | 56px / 600 / 60px, tracking -0.28px |
| Half-tile headline | 40px / 600 / 44px |
| Tagline | 21px / 400 / 25px, tracking 0.231px |
| Footer text | 12px / 400 / 16.0005px, tracking -0.12px |
| Black tile | #000000 |
| Light tile | #f5f5f7 |
| Primary blue / hover | #0071e3 / #0076df |
| Link blues | #0066cc (light), #2997ff (dark) |

## Design System Architecture

Apple has no public design system for apple.com. There is a public design system for apps, the Human Interface Guidelines (https://developer.apple.com/design/human-interface-guidelines/typography), which specifies SF Pro, text styles (Large Title 34/41, Title 1 28/34, Title 2 22/28, Title 3 20/25, Headline 17/22 semibold, Body 17/22, Callout 16/21, Subhead 15/20 in points on iOS) and says the system fonts use dynamic optical sizes. The marketing site does not publish its own tokens.

The de-facto system is visible in the shipped CSS:
- `--sk-*` variables hold semantic colour and typography values: fills (`--sk-fill: rgb(255, 255, 255)`, `--sk-fill-secondary` rgb(250, 250, 252), `--sk-fill-tertiary` rgb(245, 245, 247), `--sk-fill-gray` rgb(29, 29, 31), `--sk-fill-blue` rgb(0, 113, 227)), glyph colours (`--sk-glyph-gray-secondary` rgb(110, 110, 115), `--sk-glyph-blue` rgb(0, 102, 204)), body colours (`--sk-body-text-color` rgb(29, 29, 31), `--sk-body-link-color` rgb(0, 102, 204)) and footnote metrics (`--sk-footnote-font-size: 0.6em`).
- `--r-globalnav-*` and `--r-localnav-*` variables define the navigation (heights, breakpoints, backgrounds).
- Component-specific variables (`--media-gallery-*`, `--promo-content-height`, `--hero-content-height`) size gallery and promo modules.
- Trademark and imitation rules: https://www.apple.com/legal/intellectual-property/guidelinesfor3rdparties.html.
- Fonts: SF Pro is the system typeface per the HIG typography page above; no separate public web-font package for apple.com was found.

## Do's and Don'ts

### Do
- Give each tile one product, one headline, one tagline, two buttons.
- Alternate #000000 and #f5f5f7 tiles; use #1d1d1f ink on light, #f5f5f7 on dark.
- Use the single blue family: #0071e3 fills, #0066cc / #2997ff links by background.
- Keep button pills 44px high with the 17px label and -0.374px tracking.
- Let imagery carry colour and depth.
- Write copy in short, declarative fragments.

### Don't
- Don't add borders, cards, gradients or drop shadows to UI chrome.
- Don't use a second accent colour in the interface.
- Don't use light weights for headlines.
- Don't use square or 8px buttons for primary CTAs on a tile.
- Don't copy Apple's logo, product imagery or typefaces; Apple's guidelines forbid it.
- Don't place dark ink on dark tiles; the nav and tile ink swap with the background.

## Responsive Behavior

- The extractor measured a 390px mobile view: the tile headline drops from 56px to 32px (weight 600, line 36px, +0.064px tracking).
- Local-nav breakpoints 834px and 1024px (from `--r-localnav-viewport-*` variables).
- The two-up tiles and nav layout at narrow widths were not captured; only the mobile role measurements above are known.
- Button size stays 44px.
- Hero image heights shrink but remain the focus of each tile.

## Iteration Guide

1. Start with a black tile: 56px/600 headline in #f5f5f7, a 21px tagline, and a 44px pill in #0071e3.
2. Add a light tile in #f5f5f7 with #1d1d1f ink and #0066cc secondary pills.
3. Place large photography beneath the text; do not frame it.
4. Add the 44px translucent nav (#1d1d1fcc) and a 12px alpha-black footer.
5. Check headline tracking and button tracking; the negative values are what make it feel Apple-like.
6. For Thai or other locales, swap in the locale cut (SF Pro TH) without changing sizes.

### Quick checklist before shipping a tile
- Is there exactly one headline, one tagline and at most two buttons?
- Does the ink match the background (#f5f5f7 on black, #1d1d1f on light)?
- Are pills 44px high with 17px labels?
- Is the media large, unframed and the only source of saturated colour?
- Is the footnote text 12px with alpha-black ink?
