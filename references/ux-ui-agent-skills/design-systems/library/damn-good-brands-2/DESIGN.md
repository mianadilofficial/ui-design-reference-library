---
version: alpha
name: Damn Good Brands
category: "Product & SaaS"
description: "Damn Good Brands (damngoodbrands.com), a Charlotte, NC (Ad)venture fund and creative agency site: pure black #000000 canvas, white #ffffff type, NeueMontreal 900 display at 32px, Chomsky blackletter initials, Nord 14px UI labels with 0.28px tracking, #131313 cards at 6.4px radius, and floating 3D props around an oversized DAMN GOOD wordmark."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-card: "#131313"
  ink-subdued: "#ffffff80"
  border-subtle: "#ffffff33"
typography:
  display:
    fontFamily: NeueMontreal, sans-serif
    fontSize: 32px
    fontWeight: 900
    lineHeight: 32px
  display-mobile:
    fontFamily: NeueMontreal, sans-serif
    fontSize: 28px
    fontWeight: 900
    lineHeight: 28px
  heading:
    fontFamily: Chomsky, NeueMontreal, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.768px
  nav:
    fontFamily: Nord, sans-serif
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.28px
  footer:
    fontFamily: Nord, sans-serif
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 0.24px
    textTransform: uppercase
  link:
    fontFamily: Nord, sans-serif
    fontSize: 51.2px
    fontWeight: 500
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 6.4px
  md: 10px
  lg: 16px
  xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 20.48px
  s9: 23px
  s10: 29.44px
  page-padding: 30px
  home-padding: 20px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    transform: matrix(0.999914, 0.0130896, -0.0130896, 0.999914, 0, 0)
  nav:
    textColor: "{colors.ink}"
    padding: 30px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.footer}"
    padding: 30px
---

## Overview

Damn Good Brands describes itself in its meta description as "an (Ad)venture™ fund and creative agency that specializes in launching products and brands in today's digital landscape, both online and in brick and mortar retail." The site at https://damngoodbrands.com/ is a black, monochrome stage: the document title is "Damn Good Brands | (Ad)venture™ Fund", the canvas is #000000 and almost every character is #ffffff (739 characters, against 15 at #ffffff80).

The first screen in the capture is dominated by a giant two-line wordmark, "DAMN" over "GOOD", in white heavy sans-serif. Around it float rendered objects: a white marble block top left, a dark stone top right, a black astronaut helmet with a chrome skull inside overlapping the "G", and a black chess knight at right. A top row of four uppercase labels (DASHBOARD, ABOUT, HYPEBOARD, LET'S WORK) frames a centered monogram. Small instrument-style readouts sit on either side of the wordmark: "12:36 AM / BORING DAMN WEATHER, 63°" at left and "VISIBILITY 6 MI / WINDS NE 7 MPH" at right. Under the hero a small globe icon sits above "UNAPOLOGETICALLY BOLD / CHARLOTTE — NC"; a toggle labelled "SHOOT THE SHIT" is at the lower left and the credit "MADEBYANALOGUE" with an Instagram icon and a sun icon is at the lower right.

The body copy is set as large bold centered statements. In the capture, some words are bright white and the rest are dimmed, so the paragraph reads as a progressive highlight: "Damn Good Brands is an (Ad)venture™ fund built around a simple belief: Hospitality is capital. We are an unruly group of creatives. Looking to shift the pendulum from what is → to what can be. We think different. We move different." A second statement reads "Damn good brands is unapologetically bold, driven by a rebellious spirit that thrives on being different. We're doers, thinkers, and disruptors, never afraid to take risks and push the limits." Initial capitals (the "D" and "W") are set in a blackletter face.

Between the statements are a large blurred black-and-white photograph and a sticker-style illustration of a black panther with flaming eyes and white brush strokes, the only saturated color in the capture. A bordered frame labelled "DAMN GOOD IDEAS" opens the next block. The footer text measured begins "SHOOT THE SHIT / HIT IT! / UNAPOLOGETICALLY BOLD / CHARLOTTE — N". The voice is irreverent, short and uppercase in the small print. A vertical "Site of the Day" badge at the right edge is a third-party widget and is excluded from the tokens.

## Colors

The palette is black, white and two alpha steps of white. Hexes are measured.

| Token | Value | Evidence |
|---|---|---|
| `canvas` | #000000 | Body background; root variable `--body-background: #000` |
| `ink` / `primary` | #ffffff | Text on 739 characters; `--body-color: #fff`. No filled primary button was detected, so primary equals ink |
| `surface-card` | #131313 | Background of the three measured cards (area weight 6317) |
| `ink-subdued` | #ffffff80 | White at 50%, 15 characters; `--body-subdued-color: rgba(var(--body-color-rgb),.5)` |
| `border-subtle` | #ffffff33 | White at 20% as a border color; `--body-border-color: rgba(var(--body-color-rgb),.2)` |

Measured border colors are #ffffff (5 elements) and #ffffff33 (1 element). The shipped CSS also contains accent colors whose use on screen was not measured: #ff4c24, #e1ff46, #ff4500, #ffff00 (and #ffff0080), #1db954, #0000ff and a root variable `--active-color: lime`. They are not tokens; the capture's only saturated element is the panther illustration, which is an image.

The system never mixes a second UI hue into the interface. Hierarchy comes from scale and opacity: the same white appears at full strength for bright words and at reduced strength for dimmed words and secondary text.

## Typography

Six font files are declared in the shipped CSS (Nord, NeueMontreal, Chomsky, InstrumentSerif, F37Stout, Mayonice); three carry the measured page. By characters: NeueMontreal 538, Nord 209, Chomsky 7.

| Token | Family | Size / line-height | Weight | Measured use |
|---|---|---|---|---|
| `display` | NeueMontreal | 32px / 32px | 900 | Hero wordmark letters and large statements (computed size) |
| `display-mobile` | NeueMontreal | 28px / 28px | 900 | The same role at the mobile pass |
| `heading` | Chomsky, NeueMontreal | 32px / 22.4px | 400 | The h2 statement; letter-spacing 0.768px |
| `nav` | Nord | 14px | 400 | Top navigation; letter-spacing 0.28px |
| `footer` | Nord | 12px | 400 | Footer and caption text, uppercase; letter-spacing 0.24px |
| `link` | Nord | 51.2px | 500 | "LET'S WORK" link, uppercase |

The extractor measured the hero letters as 32px computed type, while the capture shows them rendered at several hundred pixels; why the on-screen size differs from the computed size was not measured. Other sizes by character count are 12px (131), 14px (68), 83.2px (11, letter-spacing 1.9968px) and 51.2px (10). The line-height on the statement is 22.4px on 32px type (a ratio of 0.7). Weights are 900 (538 characters), 400 (206) and 500 (10).

Typeface roles are named in root variables: `--body`, `--heading` and `--sans` are NeueMontreal; `--ui` is Nord; `--blackletter` is "Chomsky", "NeueMontreal"; `--script` is "Mayonice"; `--serif` is "InstrumentSerif", "Georgia"; `--condensed` is "F37Stout"; `--square` is "LibertadMono"; `--mono` is "Courier". The font files are self-hosted under /fonts/ (for example NordRegular.woff2, NeueMontrealBold.woff2, Chomsky.woff2). Licensing of the files was not verified; use the weights and sizes above with any heavy grotesque for NeueMontreal and any geometric UI sans for Nord if the files are unavailable, noting that no substitute was measured against the site.

## Layout

The page is a single column on a 1280px desktop pass, 4,682px tall. The root variable `--padding` is 30px, and the nav and footer both measure 30px padding. `--home-padding` is 20px. Sizing variables are viewport-based: `--unit: 1vh`, `--grid-unit: calc(var(--unit)*3)` and `--slide-unit: 1.1vw`; `--hypeboard-unit` is 16px.

The nav is 99px tall and spans the full 1280px. In the capture its slots are spread to the edges: DASHBOARD at the far left, ABOUT toward the left, a centered monogram, HYPEBOARD toward the right and LET'S WORK at the far right. Hero content is centered; the two readouts (time and weather at the left edge, visibility and wind at the right edge) sit at the same vertical level as the wordmark's second line. The first statement paragraph is a centered column 563px wide (the measured h2 width); the second statement is left-aligned beside the panther image. The large photograph is a centered rectangle with black margins.

Measured paddings: 128px (8 elements), 30px (6), 20px (2), 23px (2), 8px (2) and 2px (2). Measured gaps: 10px, 20.48px, 102.4px, 15px, 44.8px, 29.44px, 16px and 12px (mostly 2 elements each). The page is sparse: large black gaps separate each statement, image and frame, and nothing competes with the one object on screen.

## Elevation & Depth

There are no box shadows on visible elements (the extraction's box-shadow list is empty). The shipped CSS contains hairline inset shadows (`inset 1px 1px #222`, `0 1px #222`, `1px 0 #222`, `inset 0 1px #222` and light-theme `#ddd` versions) plus `0 10px 20px #0000004d`, `0 10px 10px #0000000d` and `0 0 20px #ffff0080`; none was tied to a visible element. The root variable `--active-color: lime` is likewise not tied to an element in the measurement.

Depth in the capture is photographic: rendered 3D props with their own highlights, a motion-blurred photo, and the layering of the "GOOD" letters over the helmet. Surfaces are separated by the #131313 card color against #000000 and by 1px outlines at 20% white.

## Shapes

Radius is small except for pills. Measured values: 6.4px (108 elements), 4% (4), 100px (3), 16px (1), 5px (1) and 10px (1). Cards use 6.4px. A 100px radius was measured on 3 elements; the toggle at the lower left of the hero is a pill shape in the capture. The shipped CSS also lists 3px, 4px, 13px and 20px radii.

The "DAMN GOOD IDEAS" frame is drawn with a thin outline and small corner ticks rather than a rounded fill.

## Components

**Top navigation.** Four Nord 14px/400 labels with 0.28px tracking, white, in a 99px-tall bar with 30px padding; labels render in capitals in the capture. Link targets are /dashboard, /about, /hypeboard and /contact, and the logo links to /. On mobile the bar is 75px tall with a #00000099 background and 18px labels.

**Display link.** "LET'S WORK": Nord 51.2px, weight 500, uppercase, white, 66px tall and 337px wide, rotated with `transform: matrix(0.999914, 0.0130896, -0.0130896, 0.999914, 0, 0)`.

**Card.** A #131313 rectangle with 6.4px radius, 269px wide and 218px tall in the three measured cards, no border and no shadow.

**Readouts.** Small uppercase Nord captions (12px, tracking 0.24px) for time, weather, visibility and wind.

**Toggle and icons.** A pill toggle labelled "SHOOT THE SHIT", an Instagram icon and a sun icon sit in the strip under the hero; their function was not measured.

**Footer.** White Nord 12px uppercase text with 30px padding, 239px tall: "SHOOT THE SHIT / HIT IT!", "UNAPOLOGETICALLY BOLD", "CHARLOTTE — N...", plus the Madebyanalogue credit link (madebyanalogue.co.uk) and an Instagram link.

## Design System Architecture

No public design system, token package or brand guideline was found: the home page and /about (both opened) link to none, and the markup shows only nav, tagline, location, credit and social links. The de-facto system is visible in the shipped code at https://damngoodbrands.com/.

The site is a Nuxt application (assets under /_nuxt/, for example /_nuxt/entry.TQtisFPC.css) with images served from the Sanity CDN (cdn.sanity.io/images/leima53t/production/...). Styling is driven by CSS custom properties on the root: color (`--body-color`, `--body-color-rgb`, `--body-background`, `--body-background-rgb`, `--body-subdued-color`, `--body-border-color`, `--active-color`), type (`--body`, `--heading`, `--sans`, `--ui`, `--blackletter`, `--script`, `--serif`, `--condensed`, `--square`, `--mono`), and spacing (`--padding`, `--home-padding`, `--unit`, `--grid-unit`, `--slide-unit`, `--hypeboard-unit`, `--toggle-scale`, `--opacity`). The subdued and border colors are built from `--body-color-rgb` with an alpha (`.5` and `.2`).

The page credits Madebyanalogue (https://madebyanalogue.co.uk) in the footer. Font files are self-hosted in /fonts/.

## Do's and Don'ts

**Do**
- Keep the canvas pure #000000 and text #ffffff; make hierarchy with white at 50% (#ffffff80) and 20% (#ffffff33), not with new hues.
- Set the wordmark and statements in NeueMontreal 900 with very tight leading (22.4px on 32px for the statement).
- Use blackletter (Chomsky) only for initial capitals inside NeueMontreal statements.
- Surround one large wordmark with a few photographic 3D props; keep the rest of the page empty.
- Use Nord for all small UI text, uppercase for captions, with 0.24-0.28px tracking.
- Write microcopy in a loose, irreverent voice ("BORING DAMN WEATHER", "SHOOT THE SHIT", "HIT IT!").

**Don't**
- Don't add a UI accent color; the CSS contains accents (#ff4c24, #e1ff46, #ffff00), but none was measured on a visible interface element.
- Don't use drop shadows on cards; none were measured on visible elements.
- Don't round cards beyond the measured 6.4px; a 100px radius was measured on only 3 elements.
- Don't document the third-party "Site of the Day" badge as part of the brand UI.

## Responsive Behavior

The extractor re-loaded the page at 390px and recorded the h1, h2 and nav roles; the card, footer and image layout at that width are not measured.

Measured at 390px: the letters of the wordmark are NeueMontreal 900 at 28px / 28px (61px wide for the "amn" run; 69px at 32px on desktop). The h2 statement is Chomsky / NeueMontreal at 28px / 19.6px with 0.672px letter-spacing, 330px wide and 280px tall (563px by 224px on desktop). The nav is 390px wide and 75px tall with a #00000099 background and Nord 18px/400 labels with 0.36px letter-spacing, and it lists the same four items: Dashboard, About, Hypeboard, Let's Work. Character counts by size on mobile are 28px (534), 12px (82), 14px (35), 18px (33), 38.025px (11) and 23.4px (10).

Breakpoints, media queries and touch behavior were not measured.

## Iteration Guide

1. Start with the tokens: #000000 canvas, #ffffff ink, #131313 cards, #ffffff80 and #ffffff33 alpha steps, NeueMontreal 900 / Nord / Chomsky.
2. Build the nav as a 99px bar with 30px padding and spread the four labels and the monogram to the edges.
3. Build the hero: a very large two-line white wordmark with floating 3D-rendered objects, then the time and weather readouts on either side at the second line.
4. Set statements centered at about 563px wide, 32px/22.4px, with partial-white highlighting; use Chomsky for the initials.
5. If the hero type looks wrong, re-measure with `node web/scripts/extract-tokens.mjs --slug=damn-good-brands-2 --url=https://damngoodbrands.com/ --force --no-motion`, because the computed 32px size does not match the rendered size in the capture.
6. Run `node web/scripts/verify-designs.mjs --slug=damn-good-brands-2` after any token edit.
