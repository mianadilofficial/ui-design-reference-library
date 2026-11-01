---
version: alpha
name: ICONSIAM
category: "Thai Brands"
description: "ICONSIAM (iconsiam.com/en) measured: a Bangkok riverside mall site in Gotham with Thai (DBAdmanX) and Chinese (NotoSansSC) companions, antique gold #8c7225 bars and footer, cream #f4edd7 bands, #475467 body copy, a #f7e907 yellow Register Now button, square 0px buttons 48px high and no shadows."
colors:
  canvas: "#ffffff"
  surface-off-white: "#fcfcfd"
  ink: "#475467"
  primary: "#fefdfb"
  on-primary: "#8c7225"
  surface-cream: "#f4edd7"
  surface-black: "#000000"
  ink-navy: "#020817"
  ink-grey: "#6b7280"
  accent-yellow: "#f7e907"
  button-secondary-border: "#dabf72"
typography:
  display:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.4px
  display-mobile:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.4px
  subheading:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: 0.4px
  body:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.4px
  button:
    fontFamily: Gotham, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.4px
    textTransform: uppercase
rounded:
  xs: 1.2px
  sm: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 32px
    height: 48px
    borderColor: "{colors.on-primary}"
  button-secondary:
    textColor: "{colors.surface-off-white}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 48px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink-navy}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.surface-off-white}"
    rounded: "{rounded.none}"
    padding: 0px 32px
  nav-link:
    textColor: "{colors.ink-navy}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.surface-off-white}"
    rounded: "{rounded.none}"
---

## Overview

ICONSIAM is the riverside shopping-and-culture destination in Bangkok; the measured page is the English home (https://www.iconsiam.com/en, title "Homepage"). A gold "TOURIST PROMOTIONS | Global Visitor Card" strip sits under a transparent header with the ICONSIAM wordmark in thin serif capitals and navigation EVENTS & ACTIVITIES, GETTING HERE, SHOPPING, DINING, ATTRACTION and MORE, a search icon and an English language button. A food photograph or video fills the hero. In the capture a dialog titled "Please select your customer type" (Chinese / 中国人, International / English, Thai) overlays the page with a dark scrim; it is a visitor-routing control, not brand UI, and is not documented below.

Beneath it the page reads as an editorial directory. "HAPPENING" shows event cards (for example "ICONSIAM PETs CARE Free Microchipping, Pet Registration an..." dated 7 Mar - 6 Dec 2026, and "The ICONIC Multimedia Water Features Show", 25 Dec 2022 - 31 Dec 2026), each with a small gold category tag. "ICONIC EXPERIENCE" is a staggered grid of nine photo tiles (SOOKSIAM, ALANGKARN, TASANA NAKORN TERRACE, TRUE ICON HALL, THE ICONIC MULTIMEDIA WATER FEATURES, NAPALAI TERRACE, RIVER PARK, ART & CULTURE, SIAM TAKASHIMAYA, ICONSIAM PAARK) over a pale rippled-gold background. "SAVOUR DINING" sits on a cream band with a restaurant carousel (Blue by Alain Ducasse, NARA, THIPSAMAI). Lower sections include a "SHOWCASE OF EXCELLENCE" fireworks banner with an "EXPLORE ATTRACTION" outlined button, a black "ONESIAM GLOBAL" marquee with the yellow "Register Now" button for the Global Visitor Card, and a ONESIAM SuperApp promotion with Google Play and App Store badges. The footer is solid gold with the address (299 Charoen Nakhon Soi 5, Charoen Nakhon Road, Khlong Ton Sai), a "GETTING HERE" button, links and award marks. Copy is polished, benefit-led and mostly uppercase for labels.

## Colors

- **Canvas** `#ffffff`, with off-white `#fcfcfd` the largest area fill (1143 units) and text on dark.
- **Gold** `#8c7225` (693 area units, also the text colour of the "GETTING HERE" button and the footer fill) is the brand colour. A lighter gold `#987b2c` (56) and a pale gold border `#dabf72` appear on buttons.
- **Cream** `#f4edd7` (889 units) is the dining band and secondary surface.
- **Primary** in the generated tokens is `#fefdfb` with gold `#8c7225` as on-primary: the measured header button "GETTING HERE" is a near-white fill with gold text and a gold border.
- **Accent yellow** `#f7e907` (22 units; 140 characters of text) is the fill of the "Register Now" button (black label) and the "ONESIAM GLOBAL" marquee text.
- **Ink**: `#475467` is the body colour (2284 characters), `#020817` the headline navy-black (453), `#6b7280` the grey captions (148); `#fcfcfd` text (885) sits on photography and gold.
- **Black** `#000000` (824 units) fills the Global Visitor Card section.
- **Borders**: `#8c7225` (9), `#dabf72`, `#c9c9cf`, `#ffffff`.
- Framework values (`--swiper-theme-color` `#007aff`, Tailwind ring `rgb(59 130 246/0.5)`) are defaults and not brand colours.

## Typography

**Gotham** at 300, 400, 500 and 600 is the English face (4159 characters), declared as `--font-english`. The root also declares `--font-thai` (DBAdmanX, a Thai typeface), `--font-chinese` (NotoSansSC) and Geist Sans/Mono, with `--font-sans` pointing to the Thai font. Letter-spacing is 0.4px on measured text.

| Role | Measured |
|---|---|
| Display (nav/top strip text) | Gotham 500, 16px / 24px, +0.4px; 20px / 28px at 390px |
| Subheading (h3 "HAPPENING") | 32px / 40px, 500; 20px / 28px at 390px |
| h2 (card titles) | 20px, weight 500 |
| Body | 16px / 400 / 24px, +0.4px; 14px at 390px |
| Button | 14px / 500 / 20px, uppercase, +0.4px |

Sizes by characters: 16px (2323), 20px (673), 14px (652), 24px (299), 32px (114), 12px (98). Weights: 400 (3020), 500 (806), 300 (333). Section headings are uppercase and widely tracked.

## Layout

The desktop page is 1280px wide and 6133px tall. The header floats over the hero with 32px horizontal padding; content sits in a centred container narrower than the viewport (its width in pixels was not measured), with cards left-aligned in "HAPPENING" and a deliberately staggered five-column mosaic for ICONIC EXPERIENCE (alternating tile heights). Spacing values: 4, 8, 10, 12, 16, 24, 32, 40, 48 and 64px. Photographs dominate; text overlays use uppercase labels with a small arrow icon at the right ("SOOKSIAM ↗").

## Elevation & Depth

No shadows were measured. Depth comes from photography, dark gradient overlays at the bottoms of tiles, the rippled gold background texture in the experience section, and flat colour bands (white, cream, black, gold).

## Shapes

The design is nearly square: the measured radii are 1.2px (10 elements), 4px (2), 9999px (4 elements), and 50% (1). Buttons, nav and footer compute 0px; the shared `--radius` variable is 0.2rem. Photo tiles are rectangular.

## Components

- **button-primary** ("GETTING HERE"): `#fefdfb` fill, gold `#8c7225` label, 14px/500 uppercase, +0.4px, padding 12px 32px, height 48px, 0px radius, 1px gold border.
- **Language button** ("English"): transparent with a pale-gold `#dabf72` border, `#fcfcfd` text, padding 0 10px, height 48px.
- **Register Now**: `#f7e907` fill, black 16px label, padding 12px 32px, height 48px, 0px radius (measured on the 390px pass).
- **Event card**: image, gold category tag ("HAPPENING"), 20px title, grey date line.
- **Photo tile**: image with a bottom label and arrow.
- **Footer**: gold `#8c7225`, `#fcfcfd` text.

## Design System Architecture

No public design-system or brand-guideline page was linked from the home page and none was searched. The site (https://www.iconsiam.com/en) uses Tailwind and shadcn-style CSS variables on `:root` (38 measured): `--background` 0 0% 100%, `--foreground` 222.2 84% 4.9%, `--primary` 222.2 47.4% 11.2%, `--card`, `--muted`, `--border` 240 6% 80%, `--radius` 0.2rem, plus `--success`, `--warning` and `--error`, and three per-language font variables. The shadcn `--primary` (dark navy HSL) is the template default and does not match the measured gold buttons, so the gold, cream and yellow values are taken from the rendered page rather than from those variables.

The overall effect is a luxury-hospitality register built from very few measured parts: one serif-free sans family, one gold, one cream, one yellow for conversion, square corners and full-bleed photography. Because the measured shadow list is empty and the radii are near zero, the polish comes from imagery, spacing and uppercase labelling, so a faithful rebuild should spend its effort on photographic content and generous vertical rhythm rather than on decorative effects.

## Do's and Don'ts

- Do use gold `#8c7225` for bars, footer and button text, and cream `#f4edd7` for bands.
- Do use Gotham for English, DBAdmanX for Thai and NotoSansSC for Chinese.
- Do keep buttons square (0px radius), 48px high, uppercase with 0.4px tracking.
- Do use `#f7e907` only for the Global Visitor Card call to action.
- Don't add shadows or rounded corners; none were measured beyond tiny tags.
- Don't document the customer-type dialog or scrim as brand UI.
- Don't use the shadcn default navy primary as a brand colour.

## Responsive Behavior

Measured at 390px: the first heading is 20px / 28px at weight 500, body copy 14px, the primary action is the yellow "Register Now" button (16px, padding 12px 32px, height 48px), and the mobile header shows "Getting here" and "Search". Mobile sizes by characters: 14px (2857), 12px (359), 16px (357), 20px (283), 24px (249). Other layout behavior was not measured.

## Iteration Guide

1. Start with white and off-white `#fcfcfd`, body in Gotham 16px/24px `#475467` with 0.4px tracking.
2. Add gold `#8c7225` bars and footer and a cream `#f4edd7` band for dining or editorial content.
3. Use square 48px buttons, uppercase 14px/500.
4. Build photo-tile mosaics with uppercase labels and a corner arrow.
5. Reserve `#f7e907` for the visitor-card sign-up.
6. Verify each value against the frontmatter; mark unmeasured behavior "not measured".
