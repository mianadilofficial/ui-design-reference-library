---
version: alpha
name: Thai Oil
category: "Thai Brands"
description: "Thaioil Group corporate site (thaioilgroup.com): white canvas, DB Heavent Thai type at 72/48/24px, heading blue #1d4f86, cyan #4ccaf4 links with 2px radius, cyan glow card shadows and 8-10px photo-card corners over industrial photography."
colors:
  canvas: "#ffffff"
  ink: "#1d4f86"
  primary: "#4ccaf4"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-charcoal: "#1f1f1f"
  ink-body-muted: "#979aad"
  ink-body: "#4a4e61"
  ink-on-dark: "#ffffffc9"
  ink-footer: "#414042"
  link: "#181b31"
  nav-bg: "#ffffffcc"
  nav-link-text: "#5b7bfb"
  card-text: "#333333"
  brand-magenta: "#cc307e"
  brand-pink: "#ff4ea6"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 66px
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
  heading:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 57.6px
  body:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 29px
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.6px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  xl: 10px
  2xl: 16px
  3xl: 20px
  4xl: 26px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 5.5px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 3px 8px
    height: 30px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 3px 8px
    height: 30px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.surface-black}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.card-text}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(118, 207, 227, 0.78) 0px 4px 20px 0px
---

# Thai Oil (Thaioil Group)

## Overview
The measured site is thaioilgroup.com, the corporate site of Thaioil, a Thai refinery, petrochemical and power group. It is a WordPress build (the extracted root variables carry `--wp--preset` and Elementor-style names, plus a `--lqd-site-width` of 1140px). The page language is Thai (`lang` th), and the first screen is a full-width archival black-and-white photograph of the refinery with a Thai headline about the year 2507 and a distilling capacity of 35,000 barrels per day, under a thin pink-to-blue gradient strip at the very top of the page. Below it the page turns white and calm: a large blue section title, a short paragraph, and four tall photo cards (petrochemicals, power plant, other, refinery) with white labels over a dark fade.

The tone is institutional and proud rather than promotional. Copy is Thai, set in formal corporate register, with quoted mission lines ("สร้างสรรค์คุณภาพชีวิต ด้วยพลังงานและเคมีภัณฑ์ที่ยั่งยืน"). Statistics are given a hero treatment: a large gradient numeral "222,823" with the year "ปี 2569" above it in magenta. Imagery is industrial photography (plant at dusk, laboratory gloves and flask, polymer pellets in blue shades) so the blue brand color is echoed by the photos themselves.

## Colors
Measured roles: canvas `#ffffff`, heading ink `#1d4f86` (the most-read text color, used on the h1 and h2), and `primary` `#4ccaf4`, the fill of the detected call-to-action link with white text. Body-copy grays are `#979aad` (the measured body-text role) and `#4a4e61`; `#414042` appears in footer-weight text; `#ffffffc9` is the translucent white used on dark photo overlays. Backgrounds by area are `#ffffff` overwhelmingly, then `#000000` and `#1f1f1f` for dark bands, `#ffffffcc` for the translucent header bar, and `#cc307e26` for a faint magenta tint.

The logo and the "ดูเพิ่มเติม" button in the capture are magenta-pink. The CSS corpus of the extraction counts `#cc307e` 349 times and `#ff4ea6` 336 times, so they are recorded here as `brand-magenta` and `brand-pink`; the extractor did not tag a computed button fill with them, so they are brand accents found in the shipped stylesheet rather than a measured button background. The extractor-detected `primary` (`#4ccaf4`) is a light cyan that also appears as the glow of card shadows (`rgba(118, 207, 227, 0.78)`). The measured nav link color is `#5b7bfb` and the link role is `#181b31`.

Note that the stylesheet also contains framework defaults (`#0d6efd`, `#007aff`, `#0069e3`); these are not treated as brand colors.

## Typography
One family carries almost everything: DB Heavent (3,474 characters measured, against 3 for Roboto). The loaded fonts are DB Heavent at 400, 500 and 700, Roboto 400 and an icon font. DB Heavent is a Thai-and-Latin typeface; it is a commercial face, so a substitute such as Noto Sans Thai Looped or Sarabun is the practical fallback when licensing is not available (this is a suggestion, not something the site specifies).

Measured scale on desktop: display 72px / 66px line height, weight 500 (the "ธุรกิจของเรา" title); heading 48px / 57.6px weight 500; body 24px / 29px weight 400; button 20px / 24px; navigation 18px / 30.6px. At the 390px mobile pass, the h1 measures 60px / 66px, the h2 60px and the body 24px / 29px. The Thai headings are tight (line height below font size on the display) which is typical of DB Heavent's small x-height, and the body is unusually large (24px) for readability of Thai. The most used sizes by character count are 24px, 28px, 20px, 36px and 48px, so the working scale is 20 / 24 / 28 / 36 / 48 / 72. The letter-spacing frequency table shows 9.9px at 60px size and 3px at a 140px size, used on decorative numerals.

## Layout
The stylesheet declares a site width of 1140px (`--lqd-site-width`). The capture shows a left-aligned content column with generous top spacing, then a four-up row of tall portrait cards with about 20px gaps (the gap frequency table is led by 20px). Padding values most used are 30px, 10px, 5px, 24px and 16px. Sections alternate between an image-left/text-right feature (rounded photo with a cyan glow) and full-bleed blocks (a cyan photo panel with a white logo, beside a large statistic). The header is a translucent white bar with a hamburger at left, the logo in the center-left and a language selector with a search icon at right.

## Elevation & Depth
Depth is light and colored. Measured shadows: `rgba(118, 207, 227, 0.72) 0px 4px 20px 0px` (three uses), `rgba(118, 207, 227, 0.78) 0px 4px 20px 0px` on the card, `rgb(255, 255, 255) 0px 4px 15px 0px`, and a subtle `rgba(0, 0, 0, 0.16) 0px 10px 8px -8px`. The cyan glow is the signature: feature photos float above white with a pale blue halo instead of a gray drop shadow. A neon `rgb(255, 2, 205) 0px 0px 10px 3px` is also in the data but is a single use.

## Shapes
The measured radius scale runs from 2px to a pill: 2px, 3px, 4px, 8px (the most frequent, weight 25), 10px, 16px, 20px, 26px and 9999px. Cards and photo tiles use 8-10px corners; the feature image and some panels use asymmetric radii such as `10px 10px 64px` and `8px 8px 24px`, giving one oversized rounded corner. The detected primary button has only a 2px radius, while the magenta "ดูเพิ่มเติม" pill in the capture is fully rounded.

## Components
- **button-primary / button-secondary:** background `#4ccaf4`, white text, DB Heavent 20px / 24px, 2px radius, padding 3px 8px, height 30px (measured on the governance and environment links).
- **link:** color `#181b31`, 18px navigation type.
- **nav:** translucent white `#ffffffcc` bar; nav-link color `#5b7bfb`.
- **card:** text `#333333`, 10px radius, cyan glow shadow.
- **Photo tile:** portrait image, white label bottom-left over a dark gradient (seen in the capture; sizes not separately measured).
- **Statistic block:** large gradient numeral with a small magenta year label.

## Design System Architecture
No public design system or brand guideline was found: the homepage navigation and the pages opened expose corporate, investor and news links but no design-system, press-kit or brand-guideline link. The de-facto system is a WordPress theme with Elementor-style global color variables (`--e-global-color-text` falls back to `#626974`, `--color-link` is `#5b7bfb`, `--color-link-hover` is `#181b31`, a gradient pair `#007fff` to `#ff4d54`) layered over the default WordPress preset palette. Brand colors live as hard-coded values in the stylesheet rather than as a named token set.

## Do's and Don'ts
- Do set Thai text in DB Heavent at 24px for body with a 29px line height.
- Do use `#1d4f86` for headings and keep the body in gray `#979aad` / `#4a4e61`.
- Do use industrial photography and let the cyan glow shadow lift feature images.
- Do reserve the magenta-to-pink pair for the logo and primary pill actions.
- Don't use the WordPress preset colors (vivid purple, pale pink) or the Bootstrap blue.
- Don't use sharp-cornered photo cards; the measured system favors 8-10px or one large corner.
- Don't tint the page background; canvas is `#ffffff`.

## Responsive Behavior
Only a limited mobile pass was recorded (390px): the h1 is 60px / 66px, the h2 60px, the body 24px / 29px, and the call-to-action keeps its 20px type and 2px radius. Breakpoints, column collapse, and menu behavior beyond the hamburger visible in the desktop capture are not measured.

## Iteration Guide
1. Start from canvas `#ffffff`, ink `#1d4f86`, body gray `#979aad`.
2. Set all text in DB Heavent (or a Thai substitute) at 72 / 48 / 24 / 20 / 18px.
3. Add cyan `#4ccaf4` for small links and the cyan glow shadow for imagery.
4. Add magenta `#cc307e` and pink `#ff4ea6` only for logo-level accents.
5. Round photo cards 8-10px; keep link buttons at 2px.
6. Verify with `node web/scripts/verify-designs.mjs --slug=thai-oil`.
