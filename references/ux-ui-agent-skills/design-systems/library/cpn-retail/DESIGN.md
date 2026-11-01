---
version: alpha
name: CPN Retail Growth Leasehold REIT
category: "Thai Brands"
description: "Investor site of CPN Retail Growth Leasehold REIT (CPNREIT, SET: CPNREIT), the Central Pattana retail real-estate trust. Proprietary CPN typeface at 400 and 700 with a 130px wordmark headline, near-black #231f20 ink and buttons, brick-red #b33019 tiles, grey #595959 tiles and square corners on white."
colors:
  canvas: "#ffffff"
  ink: "#231f20"
  primary: "#231f20"
  on-primary: "#ffffff"
  surface-soft: "#fbfbfb"
  footer-black: "#000000"
  ink-faint: "#c0c2c3"
  tile-grey: "#595959"
  ink-grey: "#8a8c8c"
  hairline: "#e9e9e9"
  tile-red: "#b33019"
typography:
  display:
    fontFamily: CPN, sans-serif
    fontSize: 130px
    fontWeight: 700
    lineHeight: 162.5px
  display-mobile:
    fontFamily: CPN, sans-serif
    fontSize: 39.2062px
    fontWeight: 700
    lineHeight: 49.0078px
  heading:
    fontFamily: CPN, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
    textTransform: uppercase
  subheading:
    fontFamily: CPN, sans-serif
    fontSize: 33px
    fontWeight: 700
    lineHeight: 41.25px
    textTransform: uppercase
  body:
    fontFamily: CPN, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: CPN, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28.5px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 48px
  s8: 64px
  s9: 96px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 64px
    height: 61px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 48px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.tile-grey}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.footer-black}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 48px 0px 24px
---

## Overview

The measured site is `https://www.cpnreit.com/` (redirecting to `https://www.cpnreit.com/en/home`), titled "CPN Retail Growth Leasehold REIT", `lang="en"`. It is an investor-relations site for a real-estate investment trust whose assets are shopping malls. The header shows a small grey ticker pill ("SET: CPNREIT" with the price in THB), a centered CPNREIT logo (the letters "CPN" in black and "REIT" in red), a TH / EN language switch with the current language underlined in red and a search icon, then a single row of upper-case menu items: ABOUT CPNREIT, OUR PORTFOLIO, INVESTOR RELATIONS, SUSTAINABILITY, NEWSROOM, CONTACT INFO.

The first screen is typographic: the word "CPNREIT" at 130px in bold with "REIT" in red, a light-weight grey line "CPN RETAIL GROWTH LEASEHOLD REIT", and the sentence "Thailand's largest retail-focused real estate investment trust". Under it a four-column tile mosaic alternates photographs of malls (interior atrium, a facade, a rendered concourse) with solid text tiles: a near-black tile ("Trust — Confidence Built on Prime, Long-Term Assets"), a grey tile ("Performance — Steady Growth with High Operational Resilience") and a brick-red tile ("Sustainability Recognition — Internationally Recognized Sustainability & Governance Standards"), each with a line icon and a hairline rule at the bottom. Further down are "INVESTOR RELATIONS" and "CPNREIT INVESTMENT ASSETS" sections. A cookie-consent dialog and a vertical "Whistleblowing" tab appear in the capture; they are consent and compliance chrome and are not documented as brand components or tokens.

## Colors

`canvas` #ffffff is the largest area (3,527 units) followed by `surface-soft` #fbfbfb (1,930). `footer-black` #000000 fills the footer (764), `hairline` #e9e9e9 the rules and light bands (565), `ink` #231f20 the dark tile and button fill (401), `tile-grey` #595959 the grey tile (340) and `tile-red` #b33019 the red tile (259). The red wordmark letters and the underline of the active language are red as well; the exact red of the logo letters was not separated from the consent dialog's button red (#c5351c measured on small areas), so only #b33019, the tile fill, is a token.

Text colors: `ink` #231f20 (2,503 characters), white (1,068), `ink-faint` #c0c2c3 (659, light grey text such as the large "CPN RETAIL GROWTH LEASEHOLD REIT" line and the mobile menu), `tile-grey` #595959 (538, descriptive copy and menu links), `ink-grey` #8a8c8c (228) and black (204). `primary` and `ink` are the same near-black #231f20, which fills the two measured call-to-action buttons with white `on-primary` labels.

## Typography

CPN is a proprietary family loaded at weights 300, 400 and 700 (the page loads `CPN 300`, `CPN 400`, `CPN 700`); it sets all 5,264 measured characters. No public font file or licence page was opened, so no substitute is claimed; a geometric sans such as the system sans-serif fallback is what the stylesheet itself declares (`CPN, sans-serif`).

Scale (desktop): `display` 130px / 162.5px, weight 700 (the CPNREIT wordmark text); `heading` 48px / 60px, weight 700, upper case ("INVESTOR RELATIONS"); `subheading` 33px / 41.25px, weight 700, upper case ("CPNREIT INVESTMENT ASSETS"); `link` 19px / 28.5px, weight 400, upper case (footer and menu links); `body` 16px / 24px, weight 400, #595959. By character count the sizes are 19px (1,827), 16px (1,365), 14px (813), 23px (417) and 28px (333). Weights are 400 (4,152 characters) and 700 (1,112); the large light grey line is set in a lighter face than the 400 and 700 weights counted here.

## Layout

The desktop capture is 1280px wide and 7,761px tall; the header is 123px high. Content spans about 1,184px (the h2 box) with a 1,127px wordmark block; the mosaic is four equal columns of tiles with no gutters between tiles, two rows tall. Sections below use a left sidebar label ("OUR PORTFOLIO" with a red bullet) beside a wide content column. Spacing tokens measured: 4, 8, 12, 16, 24, 32, 48, 64 and 96px. The footer is 597px tall with padding 48px 0 24px and is black with white upper-case 19px links in columns (ABOUT CPNREIT and other groups).

## Elevation & Depth

Almost flat: the only recorded shadow is `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` on a single element. Depth comes from solid color tiles, photographs and the stacked tile mosaic; hairline rules (#e9e9e9) separate content.

## Shapes

The brand look is square-cornered: the buttons, nav, footer and tiles measure 0px radius. Small radii appear on minor controls: 4px (29 elements), 5px (7), 8px (3), 10px (2), the joined halves `4px 0px 0px 4px` and `0px 4px 4px 0px`, and one 50% circle. The `card` token uses 4px, the most frequent radius.

## Components

**Primary button** — `ink` fill, white 16px CPN 400 label ("CPNREIT Investment Assets"), padding 16px 64px, 61px tall, 355px wide, 0px radius. **Secondary button** — same fill, padding 12px 24px, 48px tall, 169px wide ("Explore More"). **Mosaic tile** — a square block of the mosaic, either a photograph or a solid `ink`, `tile-grey` or `tile-red` panel with a small line icon, a 14px bold label, a 28px-class light headline in white and a hairline rule near the bottom. **Ticker pill** — grey rounded label "SET: CPNREIT" with the live price. **Navigation** — centered upper-case menu in `tile-grey`. **Footer** — black with white upper-case links.

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site's stylesheet declares Bootstrap-style root variables (`--grey-500` #c0c2c3, `--grey-900` #231f20, `--red-600` #b33019, `--red-300` #e4a297, `--black` #000000, breakpoints `--breakpoint-md` 768px and `--breakpoint-xxl` 1640px) alongside Bootstrap's default palette entries (`--orange`, `--teal`, `--blue-500` #0064ff and others). The brand-specific names are the grey ramp and the red ramp; those match the measured ink (#231f20), faint grey text (#c0c2c3) and red tile (#b33019). Bootstrap's stock colors are not brand tokens. Icons come from Font Awesome 6 Pro and an `icomoon` set.

## Do's and Don'ts

Do set the wordmark and section headings in CPN 700, upper case for headings, with a lighter grey line for the long name. Do build the hero as a tile mosaic that alternates photography with solid `ink`, `tile-grey` and `tile-red` panels. Do keep corners square and rules at hairline weight. Do use near-black buttons with white labels.

Don't use the Bootstrap stock colors (blue #0064ff, orange, teal) as brand colors. Don't round the primary buttons. Don't treat the cookie dialog's red button or the vertical Whistleblowing tab as design tokens. Don't add drop shadows beyond the single 0.1-alpha one measured.

## Responsive Behavior

Measured at a 390px viewport: the display line drops from 130px to 39.2062px (line height 49.0078px, weight 700, 342px wide); the h2 drops from 48px to 31.8px (line height 39.75px); body stays 16px / 24px; the primary call-to-action shrinks to padding 12px 24px, 48px tall and 275px wide with a 0px radius; the header measures 73px tall with 14px / 17.5px text in #c0c2c3; the most frequent mobile sizes are 17.4813px, 16px, 14px and 19.4562px. Menu collapse behavior and tile reflow were not measured.

## Iteration Guide

Start from the tokens: near-black ink, white and #fbfbfb surfaces, one brick-red tile color. New sections should be introduced by an upper-case CPN 700 heading, a grey 16px description and one near-black rectangular button. Build mosaics from equal square tiles. Anything not measured here — hover and focus states, form inputs, dark mode — should be measured first; no hover data was recorded for this site.
