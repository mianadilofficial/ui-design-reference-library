---
version: alpha
name: Oracle
category: "Design Systems"
description: "Oracle.com runs on the variable OracleSansVF (base weight 350, light 300 headlines at 40px/52px) in near-black #161513 on a warm #f1efed page ground with white #ffffff 12px-radius split cards, #312d2a 4px-radius buttons (hover #3a3632) and #006b8f text links."
colors:
  canvas: "#ffffff"
  page-largest: "#f1efed"
  ink: "#161513"
  primary: "#312d2a"
  on-primary: "#ffffff"
  primary-hover: "#3a3632"
  primary-active: "#47423e"
  surface-banner: "#053242"
  link: "#006b8f"
  hairline: "#3f3a3633"
  text-input-border: "#d4cfca"
  focus: "#227e9e"
  error: "#d63b25"
typography:
  display:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 52px
  heading:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 30px
    fontWeight: 300
    lineHeight: 42px
  subheading:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
  button:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
  nav:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 350
    lineHeight: 22px
  link:
    fontFamily: OracleSansVF, OracleSansVFCyGr, OracleSansFB, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  pill: 9999px
spacing:
  s1: 3.43px
  s2: 3.92px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 44px
  button-inverse-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  product-tile:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 8px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 4px 8px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 12px 18px 12px 48px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
---

## Overview

Oracle's home page is a long, calm catalogue of the company's cloud and application businesses. The desktop capture opens with a white header — the red Oracle wordmark, a wide search field and utility icons — followed by an "Infrastructure / Applications" switcher whose product tiles ("Cloud", "Multicloud AI Database", "AI Data Platform", "Cloud @ Customer") float as small white cards with a soft shadow. Below it, a deep teal `#053242` event banner announces Oracle AI World with a white "Register now" button. The rest of the page is a sequence of large white split cards on a warm grey `#f1efed` ground, each pairing a photograph or illustration (a data-centre construction site, the night-side Earth, server racks, a DHL cargo aircraft, an ambulance) with a text column: a light 40px or 30px headline, short paragraphs, bold run-in labels, teal `#006b8f` links and one dark "Learn more" button. The page ends with an "Industry Specific Applications" link grid, a NetSuite block and a thin footer of policy links and social icons.

The voice is corporate and declarative — "Oracle offers the highest-performing cloud services at the lowest cost", "Building the World's Largest AI Cloud" — with statistics and customer names doing the persuading. Imagery mixes real industrial photography with dark diagrammatic illustration; there are no illustrated characters or decorative gradients.

The capture also shows a country-redirect dialog ("Would you like to visit an Oracle country site closer to you?") and a "Chat now / Call US Sales" widget. Both are site overlays, and their values are excluded from the tokens.

## Colors

- **Canvas `#ffffff`** — the body background, the header and every content card.
- **Page ground `#f1efed`** (`page-largest`) — the largest background by area; it shows between the cards and is declared as `--thm-base` and `--mode-tint`.
- **Ink `#161513`** — by far the most-read text color, also `--txtcolor`. Headlines, body copy and button labels on light surfaces all use it.
- **Primary `#312d2a`** — the fill of every "Learn more" button, declared as `--obttn1bg` (button style 1). Hover measured `#3a3632` (`--obttn1bghvr`); the active state is declared as `#47423e` (`--obttn1bgact`).
- **On-primary `#ffffff`** — button labels on the dark fill (`--obttn1clr`).
- **Banner teal `#053242`** (`surface-banner`) — the event banner background.
- **Link `#006b8f`** — inline links and link lists, `--linkcolor`; the dark-mode inverse link is declared as `#f0cc71` (`--linkinvert`).
- **Hairline `#3f3a3633`** — the translucent border on product tiles; `#d4cfca` borders the search input.
- **Focus `#227e9e`** — `--form-focusonlgt` / `--form-focusondrk`.
- **Error `#d63b25`** — `--form-error`.

The theme layer also declares `--thm-primary #2a2f2f`, `--thm-secondary #464f4f`, `--thm-medium #697778`, `--thm-accent #c2d4d4` and `--thm-accent-alt #8b9d9e`; of these only `#697778` was measured as a rendered background, in a small area.

## Typography

One variable family carries the site: **OracleSansVF**, loaded with a weight axis from 275 to 800, with `OracleSansVFCyGr` for Cyrillic/Greek and `OracleSansFB` before the system fallbacks. The root variable `--base-weight: 350` sets the default text weight, which is lighter than a regular 400 and is the most frequent weight measured (350, then 600, 300 and 500).

| Role | Size / line-height | Weight | Measured on |
|---|---|---|---|
| Display | 40px / 52px | 300 | "Oracle Cloud Infrastructure" card headline |
| Heading | 30px / 42px | 300 | "Infrastructure" switcher title |
| Subheading | 20px / 28px | 600 | "Building the World's Largest AI Cloud" |
| Body | 16px / 24px | 350 | card paragraphs |
| Button | 16px / 22px | 600 | "Learn more", "Register now" |
| Nav | 14px / 22px | 350 | header text |
| Link / tile label | 14px / 20px | 600 | product tiles |

Measured sizes by character count: 16px, 14px, 18px, 20px, 40px, 24px, 30px, 32px. Large headlines are light (300) and small labels are semibold (600) — the contrast between weights, not between sizes, creates hierarchy. Letter-spacing is `normal` everywhere and no uppercase transforms were measured. A serif stack is declared as `--oracleserif` ("Georgia", "Times", "Garamond", serif) but was not measured on the home page.

**Substitutes:** OracleSansVF is proprietary. The site's own fallback order is `-apple-system, "system-ui", "Segoe UI", "Helvetica Neue", sans-serif`; any substitute should offer a 300 and a 600 weight.

## Layout

Content sits in a wide centred container: the root variables declare `--cwidthmax: 1744px`, `--cwidthcontextmax: 1600px`, `--cwidthmin: 272px`, a horizontal container padding of `--cwidthpad: 72px` and `--cpad: 48px`, and a grid gap of `--cgrid-gap: 32px`. The header height is `--navHeight: 85px`. In the capture each product section is one full-width card split roughly in half between media and text, alternating sides from section to section. The extractor measured at most two card columns on desktop.

Measured paddings are led by 24px, 48px, 16px, 8px and 72px; measured gaps by 24px, 16px, 8px and 32px (plus fractional 3.92px/3.43px icon gaps). Text columns are short and scannable: a headline, a two- or three-sentence paragraph, bold run-in labels with one-line descriptions, then a single button. Density increases only in the "Industry Specific Applications" block, where two columns of teal links fill a tinted panel.

## Elevation & Depth

Elevation is used sparingly and only on floating elements. The one measured shadow, `rgba(0, 0, 0, 0.16) 0px 4px 8px 0px`, appears on the product tiles in the switcher (eight instances). The big content cards carry no shadow; they separate from the `#f1efed` ground by color alone. Photographs inside cards hold small white caption panels ("Building the World's Largest AI Cloud", "Oracle AI Database in 200+ Data Centers") that overlap the image's lower edge, which is the page's main layering device.

## Shapes

Measured radii: 12px (most frequent — tiles and the halves of split cards, measured as `0px 12px 12px 0px` and `12px 0px 0px 12px`), 4px (buttons), 6px (the search input), 8px, and 50% (round icon controls). Buttons are therefore crisp rectangles with slightly softened corners, while containers are noticeably rounder. Inputs fall in between at 6px. No pill-shaped text buttons were measured; `pill: 9999px` stands for the circular icon buttons.

## Components

- **Primary button** — "Learn more": `#312d2a` fill, white OracleSansVF 16px/600, 10px 16px padding, 44px tall, 4px radius. Hover `#3a3632`, active `#47423e` (declared). Each card has exactly one.
- **Inverse button** — "Register now" on the teal banner: white fill, `#161513` label, same metrics; on hover it measured an inverted `#161513` fill with white text.
- **Product tile** — white, 12px radius, 8px padding, `#3f3a3633` border, `rgba(0, 0, 0, 0.16) 0px 4px 8px 0px` shadow, a 14px/600 label centred.
- **Split card** — white panel, 12px outer corners, one half photograph, one half text; a white caption panel overlaps the bottom of the photograph.
- **Search input** — white, 1px `#d4cfca` border, 6px radius, 48px tall, 12px 18px 12px 48px padding to clear the magnifier icon, 16px/350 text.
- **Text link** — `#006b8f`, no underline at rest in the capture, used for product lists and "Oracle Multicloud solutions".
- **Header** — white, 85px declared height, wordmark left, search centre, icons right; the desktop pass found seven visible header links and a visible "Menu" toggle.
- **Footer** — a single line of small policy links ("Privacy / Do Not Sell My Info", "Cookie Preferences", "Ad Choices", "Careers") and social icons.

## Design System Architecture

No public design system or brand guideline could be opened for this document: oracle.com/corporate returned HTTP 403 to the fetch tool, and the pinned and listed repositories on Oracle's GitHub organisation (https://github.com/oracle) include no design-system, token or font project. The de-facto system is readable from the 99 root custom properties shipped on the home page. Buttons are numbered styles — `--obttn1*` (dark fill), `--obttn2*` (outlined, `--obttn2brdr: #161513`) and `--obttn3*` (translucent tint `rgba(22, 21, 19, 0.08)`) — each with `bg`, `clr`, `brdr`, `hvr`, `act` and `-inv` variants for dark sections. A `--thm-*` layer (`base`, `primary`, `secondary`, `medium`, `accent`, `accent-alt`, `strip`) themes sections, and `--mode-*` variables remap it (`--mode-tint: #f1efed`, `--mode-invert`). Form styling lives in `--form-*` (focus, error, border `1px solid rgba(22, 21, 19, 0.5)`, inline SVG check and select icons). Layout is governed by `--cwidth*`, `--cpad` and `--cgrid-gap`, and type by `--basefont-scale: 62.5%` and `--base-weight: 350`.

## Do's and Don'ts

**Do**
- Set headlines light (300) and labels semibold (600) in OracleSansVF; keep body at 350.
- Place white 12px-radius cards on the `#f1efed` ground and let color, not shadow, separate them.
- Give each section one dark `#312d2a` "Learn more" button with a 4px radius.
- Use `#006b8f` for inline and list links.
- Use real industrial and data-centre photography with a small overlapping caption panel.

**Don't**
- Don't use the red of the wordmark as a UI color; no red UI fill was measured.
- Don't put shadows on content cards — the only measured shadow belongs to floating tiles.
- Don't round buttons beyond 4px or make them pills.
- Don't treat the country-redirect dialog or the chat widget as page components.
- Don't set body text at 400 if OracleSansVF is available; the system's base weight is 350.

## Responsive Behavior

Not measured. The extractor's 390px mobile pass received a page reading "This site is experiencing technical difficulty" in Arial instead of the home page, and a later re-extraction returned HTTP 403, so no mobile typography or layout was recorded. The shipped stylesheet declares breakpoints at `max-width 1019px` / `min-width 1020px`, `max-width 599px` / `min-width 600px`, `max-width 1359px` / `min-width 1360px`, `min-width 760px`, `860px`/`861px` and several wide-screen steps from `min-width 1936px` to `2752px`; what changes at each was not captured.

## Iteration Guide

1. Lay a `#f1efed` ground, then white 12px-radius cards inside a container capped at 1744px with 72px side padding.
2. Split each card into media and text halves; alternate the media side between sections.
3. Headline in OracleSansVF 40px/300 (or 30px/300 for secondary sections), subheads 20px/600, body 16px/350 in `#161513`.
4. One `#312d2a` button per card (16px/600, 10px 16px, 44px tall, 4px radius); white inverse buttons only on dark banners such as `#053242`.
5. Links in `#006b8f`; focus rings in `#227e9e`; form errors in `#d63b25`.
6. Keep shadows to `rgba(0, 0, 0, 0.16) 0px 4px 8px 0px` and only on floating tiles.
7. Re-measure the 390px view from an unblocked network before writing mobile rules.
