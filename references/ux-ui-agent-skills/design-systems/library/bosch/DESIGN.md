---
version: alpha
name: Bosch
category: "Automotive"
description: "Bosch Global (bosch.com) measured 2026-10-09: a white and cool-gray (#eff1f2, #e0e2e5) corporate page with Bosch blue #007bc0 links, near-square corners, black text, a charcoal #2e3033 footer, and one proprietary family, boschsans, at 400 and 700 with a 40px bold hero headline, 20px body and a token system of --g- color ramps and --sem__ semantic variables."
colors:
  canvas: "#ffffff"
  page-largest: "#eff1f2"
  ink: "#000000"
  primary: "#007bc0"
  surface-panel: "#e0e2e5"
  primary-deep: "#006ead"
  hairline: "#d0d4d8"
  link: "#00629a"
  footer-bg: "#2e3033"
typography:
  display:
    fontFamily: boschsans
    fontSize: 40px
    fontWeight: 700
    lineHeight: 52px
  display-mobile:
    fontFamily: boschsans
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  heading:
    fontFamily: boschsans
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
  subheading:
    fontFamily: boschsans
    fontSize: 32px
    fontWeight: 700
    lineHeight: 43.2px
  body:
    fontFamily: boschsans
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: boschsans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 30px
  s7: 32px
  s8: 56px
  s9: 64px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is Bosch Global's home page, `https://www.bosch.com/`, titled "Invented for life | Bosch Global" (`lang` en). It is a corporate portal for a technology company, and it reads as calm, factual and engineered. The capture shows a thin multicolor stripe across the very top edge, a white header holding the Bosch pictogram and red wordmark, three text links (Products and services, Company, Careers) and four icons (mail, search, globe, menu). Beneath it a full-bleed photo hero presents the story "Every second counts" with the line "Pro biker Alex Rudeau proves at the tough urban downhill race Cerro Abajo how Bosch eBike ABS Pro makes fast riders even faster." A white panel floats over the right of the hero with a story teaser ("Laser in top form") and a short list of links: About us, Our open positions, Get in touch.

Below the hero the page is a vertical stack of titled bands: "Our products for your home" with a swipeable row of gray product tiles (Home appliances, Power tools, Garden tools, Measuring tools, Cleaning tools), "Our solutions for business clients" with two large gray panels (Mobility; Industry and trades), and "Explore our stories" with image cards labeled "STORY | Bosch eBike ABS Pro" and "STORY | Career". Titles are large, bold and black; section links ("Show all products >", "Explore all stories >") are blue and right-aligned. The voice is plain, declarative English with chevron-suffixed calls to action. The measurement saw 499 visible elements, a 1,280px viewport and a 5,286px scroll height.

The look is defined by restraint: product cutouts on light gray tiles, documentary photography, a single blue accent, and almost no rounded corners. Visual interest comes from imagery, not from decoration in the interface.

## Colors

The measured palette is neutral with one blue.

- **Canvas `#ffffff`** is the header and page base; **page-largest `#eff1f2`** is by far the largest measured background area (weight 3,207) and fills product tiles and the story-card text areas; **panel `#e0e2e5`** (weight 839) fills the two business-client panels.
- **Ink `#000000`** is the most-read text color (1,167 characters), used for titles and body copy. White text (886 characters) is set on the hero photo and the footer.
- **Primary blue `#007bc0`** colors the nav links, "Show all products >" style links and the active pagination dot (area weight 341). It matches the root variable `--accent-pure__enabled__default__front`. **Deep blue `#006ead`** (18 characters) matches `--g-blue-45`; **link blue `#00629a`** matches `--accent-pure__enabled__hovered__front` and is the measured link role color.
- **Footer charcoal `#2e3033`** is the footer background (weight 412). **Hairline `#d0d4d8`** is the only measured border color.

The page's `:root` exposes a full primitive ramp named `--g-<hue>-<step>`: blues (`--g-blue-30: #004975`, `--g-blue-45: #006ead`, `--g-blue-55: #0088d4`, `--g-blue-95: #e8f1ff`), grays (`--g-gray-90: #e0e2e5`, `--g-gray-30: #43464a`), and also red (`--g-red-50: #ed0007`), green, yellow, turquoise and purple steps. Signal colors such as `--signal-warning-minor__enabled__default__fill: #ffdf95` exist in the CSS. Only the colors above were measured on rendered elements of the home page; the other ramp steps are declared but not seen in use here and are not tokens.

On hover, the product tiles measured a change of text and border color from `rgb(0, 0, 0)` to `rgb(0, 85, 135)`, with the tile background staying `rgb(239, 241, 242)`.

## Typography

One family is measured: **boschsans** (2,125 of 2,125 characters), loaded at 400 normal, 400 italic and 700 normal, with the icon fonts Bosch-Icon, Bosch-UI-Icon and Bosch-UI-Icon-RTL. The `:root` variable `--core__font-family__primary` is `"boschsans"`. boschsans is Bosch's own typeface and no download or license page was opened, so treat it as proprietary.

| Role | Size / line height | Weight | Example |
| --- | --- | --- | --- |
| Display (h1) | 40px / 52px | 700 | "Every second counts" (white on photo); 20px / 30px at 390px |
| Subheading (h3) | 32px / 43.2px | 700 | "Mobility", section titles |
| Heading (h2) | 24px / 33.6px | 700 | "Laser in top form" |
| Body | 20px / 30px | 400 | Lead paragraph |
| Nav / link | 16px / 24px | 400 | Header links |

The most-read sizes are 16px (924 characters), 12px (506), 20px (422), 40px (116), 32px (81) and 24px (76). Weights are only 400 (1,546 characters) and 700 (579). The root variables describe the same scale semantically as `--sem__typography__regular__m` (`normal 400 1rem/1.5 "boschsans"`), `--sem__typography__regular__l` (1.25rem/1.5), `--sem__typography__bold__xl` (700 1.5rem/1.4), `--sem__typography__bold__2xl` (700 2rem/1.35) and `--sem__typography__bold__4xl` (700 3rem/1.25). No letter spacing was measured, and `--sem__letter-spacing` is `0rem`.

**Font substitutes.** If boschsans is unavailable, use a neutral grotesque or humanist sans with real 400 and 700 weights and no letter spacing; keep the two-weight system and the line-height ratios above rather than adding new weights.

## Layout

Pages use a generous left gutter and left-aligned section titles over a wide content column; titles and their "see all" links share a row. The hero is full-bleed, with a floating white teaser panel anchored on the right. The product row is a horizontally scrolling set of equal-width tiles with a two-dot pager and previous/next chevrons, and the business panels are two equal columns. Tile height measured 352px.

The measured spacing is 6, 8, 12, 16, 24, 30, 32, 56 and 64px; paddings were 12px (29 times), 24px (24), 32px (16), 16px (12), 6px (3), 64px (2) and 56px (1), and gaps were 32px (17 times), 8px and 30px once each. The header measured 102px high; the footer 322px. Vertical rhythm is open, with 56 to 64px paddings between bands.

## Elevation & Depth

Resting surfaces are flat: no box shadow was measured on any visible element. Depth comes from tonal steps between `#ffffff`, `#eff1f2` and `#e0e2e5`, from photography, and from the white teaser panel overlapping the hero. The shipped CSS defines shadow tokens `--sem__box-shadow__small: 0 0 1rem 0rem #00000026` and `--sem__box-shadow__large: 0 0 4rem 0rem #00000026`, plus `0 0 1rem #00000040` and inset 1px ring shadows built from the accent variables for outlined states. Those definitions are in the stylesheet; their use on specific home-page elements was not measured.

## Shapes

Shapes are almost entirely square. The stylesheet's most frequent border radius is `0px` (48 declarations), and the root variables set `--sem__border-radius__0` and `--sem__border-radius__1` to `0rem`, and `--sem__border-radius__pill` to `62.5rem`. The only radius measured on rendered elements was 6px (2 elements), exposed as the single `xs` token. Other declared radii in the stylesheet are 12px and 16px (7 each), 4px (5), 8px, 10px and 32px, and no component was assigned to them.

Icons come from the Bosch-Icon and Bosch-UI-Icon fonts and are simple outlined glyphs (mail, magnifier, globe, menu, chevrons, external-link). Photos are cropped to rectangles with no rounding, and the multicolor stripe at the top is a flat band.

## Components

**Navigation.** A white `#ffffff` header 102px high with text links in primary blue `#007bc0` at 16px/24px, and icon buttons for mail, search, language and menu. A "Skip to main content" link is the first element in the DOM.

**Hero.** A full-bleed photograph with a gradient to black at the bottom, a white 40px/700 headline with a chevron, and a 16px supporting sentence. A white teaser panel carries a photo, a 24px bold title with a chevron, a short paragraph and three links separated by hairlines.

**Product tile.** A `#eff1f2` rectangle, 352px high, with a centered cutout photo and a centered 16px label. Hover changes the label and border color to `rgb(0, 85, 135)`.

**Business panel.** A `#e0e2e5` rectangle with a 32px/700 title and a 16px description ending in a chevron.

**Story card.** A photo above a `#eff1f2` text area with a 12px label ("STORY | Bosch eBike ABS Pro") and a bold title with a chevron.

**Pager.** Two small round dots (the active one in `#007bc0`) and two chevron buttons.

**Footer.** `#2e3033` background, 322px high, white 24px/33.6px text, beginning "Invented for life", "General contact info", "Questions and answers".

No filled primary button, input or card with a border was detected on this page, so those tokens are not declared.

## Design System Architecture

No separate public design-system site was reachable during this measurement: `https://www.boschdesignsystem.com/` failed to resolve and `https://www.bosch.com/brand/` returned 404 (both are recorded in SOURCES.json). The evidence is the site's own shipped code. The HTML of https://www.bosch.com/ links a family of stylesheets under `/media/tech/styles/frok/`: `frontend-kit-atoms.css`, `frontend-kit-foundations.css`, `frontend-kit-icons.css`, `frontend-kit-molecules.css` and `frontend-kit-organisms.css`, plus brand and mode files under `styles_1/brands/bosch/styles_2/backgrounds/` such as `light-mode-primary-schemes.css`, `light-mode-secondary-nested-schemes.css` and `light-mode-contrast-schemes.css`.

The tokens come in three tiers. Primitives: `--g-<hue>-<step>` color ramps (for example `--g-blue-45: #006ead`). Semantics: `--accent-<major|minor|pure>__<enabled|disabled>__<default|hovered|pressed>__<fill|front>` (for example `--accent-pure__enabled__default__front: #007bc0`, `--accent-major__enabled__pressed__fill: #004975`), `--sem__typography__<regular|bold|...>__<size>` and `--sem__border-radius__*`, `--sem__box-shadow__*`. Icons are exposed as `--boschicon-*` custom properties. The extraction recorded 400 root variables on this page following that naming, and the brand and light-mode scheme stylesheets are separate files from the `frontend-kit-*` files.

## Do's and Don'ts

**Do**
- Set everything in boschsans at 400 or 700; use bold for titles and regular for reading text.
- Keep surfaces white, `#eff1f2` and `#e0e2e5`, with black text and blue `#007bc0` for links and actions.
- Use chevron-suffixed text links ("Show all products >") rather than filled buttons for secondary navigation.
- Keep corners square, or at most the measured 6px.
- Let photography and product cutouts carry color.

**Don't**
- Don't add shadows to resting tiles or panels.
- Don't introduce additional weights, italics in headings, or letter spacing.
- Don't use ramp colors that were not measured (for example `--g-purple-50`) as interface accents.
- Don't round buttons into pills on the strength of `--sem__border-radius__pill`; no rendered use was measured on this page.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the h1 falls to 20px/30px (from 40px/52px), the h2 to 16px/24px weight 700 (from 24px/33.6px), body text stays 20px/30px, and the header measured 390px wide and 54px high with a white background and 16px/24px type in `#007bc0`. The most-read mobile sizes are 12px (672 characters), 16px (611), 20px (521) and 24px (158). Layout changes for the hero panel, tile row, business panels and footer at mobile width were not measured.

## Iteration Guide

1. Set canvas `#ffffff`, tonal surfaces `#eff1f2` and `#e0e2e5`, ink `#000000`, link/primary `#007bc0`, footer `#2e3033`.
2. Load boschsans (400, 700) and apply the 40/32/24/20/16px scale.
3. Build the white 102px header, then a full-bleed photo hero with the floating white teaser panel.
4. Add titled bands with bold black titles and blue right-aligned links, then flat gray tiles and panels with no shadow.
5. When a new component is needed, measure it first with `node web/scripts/extract-tokens.mjs --slug=bosch--<page> --url=<url> --force --no-motion` and take the numbers from that run, not from the ramp.
