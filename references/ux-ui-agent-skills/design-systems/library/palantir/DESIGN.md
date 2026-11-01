---
version: alpha
name: "Palantir"
category: "AI"
description: "Palantir home page measured live with Alliance No.1 and No.2 at weight 400, neutral surfaces #efefef, #f3f3f3, #ffffff, dark #1e2124 and hero #0d0e10, text #666666, white square Get Started button with #1e2124 text, 2 to 4px radii and tight negative tracking."
colors:
  canvas: "#efefef"
  ink: "#666666"
  primary: "#ffffff"
  on-primary: "#1e2124"
  surface-light: "#f3f3f3"
  ink-strong: "#1e1f2b"
  ink-muted: "#b9b9b9"
  ink-black: "#000000"
  hairline: "#aaaaaa"
  accent: "#2b5945"
  error: "#ff4136"
  hero-dark: "#0d0e10"
typography:
  display:
    fontFamily: "\"Alliance No.1\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 40.001px
  display-mobile:
    fontFamily: "\"Alliance No.1\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  eyebrow:
    fontFamily: "\"Alliance No.2\", \"Alliance No.1\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.5px
    textTransform: uppercase
  body:
    fontFamily: "\"Alliance No.1\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 68px
    fontWeight: 400
    lineHeight: 81.6px
    letterSpacing: "-2.72px"
  button:
    fontFamily: "\"Alliance No.1\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8576px
  button-secondary:
    fontFamily: "\"Alliance No.1\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 21.6px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 10px
  xl: 60px
  none: 0px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 10px
  s4: 10.29px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10.2857px
    height: 40px
    borderColor: "{colors.on-primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 10px
    height: 33px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    padding: 24px
  footer:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
    padding: 90px 0px 100px
---

# Palantir

## Overview

www.palantir.com (page title "Home | Palantir") is a corporate-technology home page that alternates a near-black interface with pale grey editorial bands. At the top of the 1280px capture sit a dark announcement strip ("Read CEO Alex Karp's Letter to Shareholders", with an underlined link and a close control) and a rounded dark header bar holding the Palantir wordmark, a white "Get Started" button, and square search and menu icon tiles. Below is a tall near-black hero (`#0d0e10` is a measured background area), then a row of white label buttons (ShipOS, Warp Speed, Systems Migration, DevCon 6, AIPCon 11, Interoperability, Maven Smart System, TITAN, Chain Reaction) with a "SEE ALL" outlined button, then a horizontally scrolling row of dark cards, one holding an isometric data-architecture illustration and another a photograph under a "MAVEN" label with the headline "AI Is Transforming the Battlefield". Further down a very large grey statement, "Our software powers real-time, AI-driven decisions", is set at 68px. The tone is sober and product-heavy: monochrome greys, one grotesque family, square corners, and diagrams and photography carrying all the colour.

## Colors

The palette is almost entirely neutral. Backgrounds by area: `#efefef` (page canvas, weight 7574), `#f3f3f3` (6480), `#ffffff` (5277), `#767676` (3347), `#1e2124` (2577, the dark card and button-text color), `#0d0e10` (1024, the hero), then `#ffffff33`, `#dbdbdb`, `#202426`, `#ababab1a` and `#1e1f2b`. Text by characters: `#666666` (10210, the main reading color on light bands), `#ffffff` (3105, on dark), `#1e1f2b` (2375, the large statement and footer), `#b9b9b9`, `#000000` and `#1e2124`. The primary button is a white fill with `#1e2124` text and a `#1e2124` border; on hover it inverts to `#1e1f2b` fill with white text. Hairlines are `#aaaaaa` (11 elements), `#f7f7f7`, `#1e1f2b` and `#1e2124`.

The site's root variables add a small system: `--accent-color: #2b5945` (a dark green) with 10% and 5% alpha companions and an opaque tint `#f4f7f6`; text colors `--text-color: #1e2124`, `--text-color-medium: #636363` and `--text-color-light: #767676`; surface colors `--body-color: #fff`, `--body-color-medium: #f3f3f3` and `--body-color-light: #f9f9f9`; `--error-color: #ff4136`; and ten qualitative data colors `--qualitative-0` to `--qualitative-9` (`#147eb3`, `#29a634`, `#d1980b`, `#d13913`, `#634dbf`, `#d17e09`, `#9f1239`, `#00a396`, `#5642a6`, `#728c23`) plus `--qualitative-default: #a7b6c2`. The tokens here keep `accent` (`#2b5945`), `error` (`#ff4136`) and `hero-dark` (`#0d0e10`) in addition to the generated colors; the qualitative set is documented but not tokenised because none of it was measured on a rendered element.

## Typography

Two faces from the Alliance family: Alliance No.1 (14927 characters) and Alliance No.2 (855 characters, used for the uppercase captions with 0.5px tracking and for the details/captions variable family), with a long system-ui fallback stack (`system-ui`, `-apple-system`, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif). The font list also names Apercu Mono Pro and Rosart and the CSS references SF Mono, but only Alliance No.1 and No.2 loaded on the page. All text is weight 400 (15782 characters). Sizes by characters: 18px (10987), 16px (1814), 34px (1756), 20px (620), 10px (229), 68px (155), 26px (90), 30px, 46px, 48px and 12px.

Measured roles: display (h1 "Sovereign AI") 34px / 40.001px, white; the h3 card headline 34px / 36px at -1.7px tracking; `eyebrow` (the generator's `heading`, an h2 "NAVIGATION") 10px / 16px, uppercase, 0.5px tracking, Alliance No.2; `body` is the detected 68px / 81.6px statement at -2.72px tracking, and the running text is 18px (the most-read size); the primary button is 16px / 22.8576px; the label chips are 18px / 21.6px. Tracking scales with size: 34px at -1.7px, 46px at -1.15px, 48px at -2px, 68px at -2.72px, 26px and 12px at -0.26px. Alliance is a commercial face; any neutral grotesque is a stand-in, which is also what the declared fallback stack provides.

## Layout

The page is 1280px wide and 6626px tall. Variables set the grid: `--max-width: 80rem`, a 12-column `--grid: repeat(12, minmax(10px, 1fr))`, `--gutter: 0.5555555556rem`, `--v-gutter` and `--h-spacing` of 1.1111111111rem, `--section-v-spacing: 3.3333333333rem`, and spacing steps `--spacing-tiny` 0.1666666667rem, `-xs` 0.5555555556rem, `-s` 1.1111111111rem, `-m` two gutters and `-l` four gutters. The rem-based font variables line up with the measured pixel sizes when 1rem is 18px (0.5555555556rem gives the measured 10px caption; 0.8888888889rem gives 16px; 1.1111111111rem gives 20px; 1.8888888889rem gives 34px), which is consistent with the measurements but is not itself a measured root font size. Measured paddings: 20px (115 elements), 24px (55), 8px (54), 32px (54), 10px, 12px, 30px, 72px; gaps: 10px (112), 20px, 30px, 16px, 50px. The footer pads 90px 0px 100px.

## Elevation & Depth

Almost flat. One shadow measured: `rgba(0, 0, 0, 0.1) 0px 2px 10px 0px`. Depth comes from the contrast of near-black cards and the hero against `#efefef` and `#ffffff` bands, and from the isometric illustration. The header bar is a rounded dark panel floating over the hero.

## Shapes

Radii: 4px (88 elements, cards and outlined buttons), 6px (27), 2px (9, the label chips), 60px (5), 10px (1), 50% (1). The primary "Get Started" button is square (0px). Tokens: `none` 0, `xs` 2px, `sm` 4px, `md` 6px, `lg` 10px, `xl` 60px, `pill` 9999px.

## Components

- **Primary button**: white fill, `#1e2124` text and border, 16px, 40px tall, padding 10.2857px, 0px radius. Hover: `#1e1f2b` fill, white text.
- **Label chip** (secondary, e.g. "Maven Smart System"): white fill, `#666666` text and border, 18px / 21.6px, padding 12px 10px, 33px tall, 2px radius. Hover: `#f5f5f5` fill, `#000000` text and border.
- **Outlined "SEE ALL"**: transparent, black text, 12px uppercase, -0.26px tracking, padding 6px 18px, 33px tall, 4px radius.
- **Card**: `#1e2124` fill, white text, 4px radius, 24px padding; label in uppercase (e.g. "SHIPOS") and a 34px headline.
- **Link**: white 16px on dark (e.g. "Letter to Shareholders").
- **Mobile action**: at 390px the CTA measured "Start Building →" at 36px, `#202426` fill, 4px radius, padding 18px 16px, 72px tall.
- **Footer**: `#1e1f2b` text, copyright "© 2026 Palantir Technologies Inc.".

## Design System Architecture

No public marketing-site design system or brand guideline was found: the WebFetch of https://www.palantir.com/ returned only the page title and a sitemap link (no usable content or design-system link), and no search was run. The de-facto system is a set of 66 CSS custom properties in a type-scale naming scheme: `--headline-100/200/300-size|line|family|letter`, `--body-100/200/300/400-size|line`, `--details-captions-size|line|letter|family`, `--details-earmark-family`, with line-heights as unitless ratios (1, 1.1765, 1.4286, 1.3889, 1.3, 1.6), plus `--hover-color: rgba(30,33,36,var(--hover-opacity))` with `--hover-opacity: 0.33`, spacing and grid variables, and the accent and qualitative palettes above.

## Do's and Don'ts

- Do keep surfaces neutral (`#efefef`, `#f3f3f3`, `#ffffff`, `#1e2124`, `#0d0e10`) and let imagery carry colour.
- Do use Alliance at weight 400 with negative tracking on large sizes.
- Do use square or 2 to 4px corners; use the 4px card radius.
- Do invert the primary button on hover (`#1e1f2b` fill, white text).
- Don't add heavy shadows; one 10% shadow was measured.
- Don't use bold weights; none were measured.
- Don't use the green accent `#2b5945` as a large fill unless a rendered use is measured.

## Responsive Behavior

Measured at 390px: h1 20px / 26px, body statement 24px / 24.0912px at -0.48px tracking, eyebrow 10px / 16px, the CTA 36px with 72px height and 4px radius. The text size list at that width is 18px (15860 characters), 16px, 20px, 10px, 24px, 30px, 26px, 36px, 72px. Breakpoints and navigation collapse were not measured.

## Iteration Guide

1. Canvas `#efefef`, ink `#666666` for text, `#1e1f2b` for statements, `#ffffff` on `#1e2124` or `#0d0e10`.
2. Alliance No.1 400 at 18px for text, 34px / 40.001px for headings, uppercase Alliance No.2 10px captions with 0.5px tracking.
3. White square primary button 40px tall with hover inversion; label chips 33px tall, 2px radius.
4. Cards at 4px radius, 24px padding.
5. Verify any new color against `web/data/extracted/palantir.json` first.
