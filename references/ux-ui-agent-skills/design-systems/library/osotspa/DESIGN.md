---
version: alpha
name: "Osotspa"
category: "Thai Brands"
description: "Osotspa's English home page (osotspa.com/en/home) is a consumer-products corporate site in DB Heavent: white canvas, #131313 ink, teal #00a3ad hotline pill, brand blue #003087 buttons, #002871 footer, 40px pill radii and uppercase headings at 66px."
colors:
  canvas: "#ffffff"
  ink: "#131313"
  primary: "#00a3ad"
  on-primary: "#ffffff"
  surface-navy: "#002871"
  brand-blue: "#003087"
  ink-muted: "#626a72"
  on-dark-muted: "#ffffff80"
  teal-light: "#54c1c8"
  hairline: "#ebebec"
  card-bg: "#ffffff99"
typography:
  display:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 66px
    fontWeight: 500
    lineHeight: 66px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 59.0563px
    fontWeight: 500
    lineHeight: 59.0563px
    textTransform: uppercase
  heading:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 26px
    textTransform: uppercase
  button:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 22px
  nav:
    fontFamily: "\"DB Heavent\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 8px
  sm: 16px
  md: 24px
  lg: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 64px
  s10: 71.34px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 4px 16px
    height: 30px
  button-primary-hover:
    backgroundColor: "{colors.brand-blue}"
  button-secondary:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 48px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    rounded: "{rounded.pill}"
    padding: 40px 24px
    boxShadow: rgba(0, 0, 0, 0.1) 2px 4px 10px 0px
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
---

## Overview

Osotspa (https://www.osotspa.com/en/home, title "Osotspa") is the English home page of Osotspa Public Company Limited, which describes itself as "A Leading Consumer Products Company in Thailand". The measured final URL is the brand's own English home, so the language path needed no re-measure. The page is 1280px wide and 5595px tall. A teal pill in the header shows "Consumer Hotline: +66 (0) 2351 1111", an EN/TH toggle and a search icon sit beside it, and the nav lists About Us, Our Businesses, Our Brands, Investors, Sustainability, OSOTSPA for Society, News and Media, Careers and Contact.

The hero statement is "THE POWER TO ENHANCE LIFE" with the line "Through a culture of high performance, innovation, and sustainability" and an "About Us" button. Next comes "A LEADING CONSUMER PRODUCTS COMPANY IN THAILAND" with the copy "Osotspa innovates with purpose to improve health and well-being, anticipate future needs, and grow sustainably alongside our consumers and society.", two buttons ("OSOTSPA Today", "Business Overview") and a strip of brand logos (One Day Vitamins, HANGster, Babi Mild, Twelve Plus, Exit and others). A blue photographic section "ENHANCING SUSTAINABLE LIVING" presents three tall rounded translucent cards for Environment, Society and Governance (E, S, G). The voice is corporate and plain-spoken, with periods in yellow at the end of headlines in the capture. Photography is warm and people-led in the hero, product shots of bottles and tubes flank the business section, and a glass office building fills the sustainability panel. A cookie dialog overlays the capture and is not documented here as brand UI.

## Colors

Measured background areas: #ffffff (weight 4537), #002871 (355), #ffffff99 (248), #003087 (52), #00a3ad (22), #feda1d (9), #0030871a (2). Text colours by characters: #131313 (1583), #ffffff (1049), #626a72 (546), #003087 (385), #ffffff80 (152), #54c1c8 (35), #00a3ad (14).

- **Canvas #ffffff**, **ink #131313**, **ink-muted #626a72**: the light-page set.
- **Primary #00a3ad**: teal; fills the detected primary button (the hotline pill, 30px high). On hover the same pill turns to rgb(0, 48, 135), #003087.
- **Brand-blue #003087**: text on white (385 characters), the secondary buttons ("OSOTSPA Today", "Business Overview") and the hover fill. The site's variable `--blue-500` is #003087.
- **Surface-navy #002871**: footer and deep blue band (`--blue-600`).
- **Teal-light #54c1c8** (`--green-400`): the eyebrow words on dark ("OSOTSPA").
- **On-dark-muted #ffffff80**, **card-bg #ffffff99**: translucent whites for hero text and glass cards.
- **Hairline #ebebec**: the border colour (5 uses).

The yellow #feda1d appears on a small area (9 weight; the full stops after headlines in the capture) but is not a token. The site's CSS defines full blue, green, grey and red ramps (e.g. `--blue-700` #001d53, `--blue-900` #0f1b3c, `--green-300` #b4e3e8, `--green-700` #00727e, `--green-800` #005861, `--green-900` #00434a, `--red-500` #ed1c25, `--grey-900` #131313, `--grey-400` #9CA4AA) plus Bootstrap status colours; only those listed above were measured on screen.

## Typography

DB Heavent is the only text family (3868 characters), loaded in weights 300, 400 and 500; icon fonts Font Awesome 6 Pro and icomoon are also loaded. Weight 400 covers 3229 characters and 500 covers 639. Letter-spacing is default.

- **Display** 66px / 66px, weight 500, uppercase: "THE POWER TO ENHANCE LIFE" (mobile 59.0563px / 59.0563px).
- **Heading** 26px / 26px, weight 400, uppercase: the most-used size (1584 characters). The mobile h2 "OSOTSPA" measures 24.9875px.
- **Button** 22px / 22px, weight 500; **nav** 22px / 22px, weight 400.

Other measured sizes: 20px (984 characters), 18px, 32px, 38px, 55px, 46px and 95px. The line-height equals the font size throughout, which is compact for a Thai-capable face.

## Layout

The page uses a 101px header (`--header-height`), a full-bleed hero, and centred sections. Breakpoints are declared in the CSS as `--breakpoint-lg` 992px, `--breakpoint-xl` 1200px and `--breakpoint-xxl` 1640px. Measured gaps: 8px (36), 16px (24), 32px (9), 12px (8), 24px (7), 64px and 96px. Measured paddings: 71.3438px (40 uses), 16px (35), 8px (25), 64px (13), 24px (8), 242.109px (6). The business section places product imagery at both sides of the centred copy; the brand strip is a horizontal carousel with a circular arrow; the sustainability cards stand in a row of three.

## Elevation & Depth

Shadows are soft and light: `rgba(0, 0, 0, 0.1) 0px 4px 6px 0px` (40 uses, brand tiles), `rgba(0, 0, 0, 0.1) 2px 4px 10px 0px` (3, glass cards), `rgba(0, 0, 0, 0.1) 0px 4px 10px 0px` and `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px`. White translucent layers (#ffffff99, #ffffff80) provide the glass effect over photography.

## Shapes

Radii: 8px (50 uses), 50% (32), 40px (23), 500px (11), 16px (6), 24px (4) and 100% (2). Tokens: xs 8px, sm 16px, md 24px, lg 40px, pill 9999px. Buttons use 40px; the sustainability cards are tall pills (card radius pill, padding 40px 24px); brand tiles use 8px.

## Components

- **button-primary**: background #00a3ad, text #ffffff, DB Heavent 22px weight 500, padding 4px 16px, height 30px, radius 40px; hover background #003087.
- **button-secondary**: background #003087, white text, padding 8px 16px, height 48px, radius 40px, with a circular arrow icon in the capture.
- **link**: white background, #003087 text, padding 8px 16px, radius 40px (the hero "About Us" button).
- **nav**: links in #131313 at 22px / weight 400 with chevrons for dropdowns.
- **card**: translucent #ffffff99, radius pill, padding 40px 24px, shadow `rgba(0, 0, 0, 0.1) 2px 4px 10px 0px`.
- **footer**: background #002871, white text; the page lists company name, address, telephone, Follow Us (Facebook, YouTube) and legal links (Terms and Conditions, Personal Data Protection Policy, Privacy Notice, Cookie Policy, Sitemap).

## Design System Architecture

No brand-guideline or corporate-identity page is listed on the home page. The site links news releases (https://www.osotspa.com/en/newsroom/news-releases), galleries (https://www.osotspa.com/en/newsroom/galleries), videos (https://www.osotspa.com/en/video/videos-and-commercials) and the product portfolio (https://www.osotspa.com/en/our-brands/our-product-portfolio). The shipped CSS is Bootstrap-based (variables `--light`, `--success`, `--warning`, `--font-family-sans-serif`, breakpoints) with a custom palette of numbered ramps (`--blue-100` to `--blue-900`, `--green-200` to `--green-900`, `--grey-200`, `--grey-400`, `--grey-900`, `--red-500`), Font Awesome 6 Pro icons and Swiper (`--swiper-theme-color` #007aff, a framework default not used as brand).

## Do's and Don'ts

- Do use DB Heavent with uppercase headings and a plain, corporate voice.
- Do use #003087 for primary-weight actions and #00a3ad for the hotline pill and hover-linked accents.
- Do use 40px pill radii on buttons and tall pill cards for pillars.
- Do show products on white with light shadows.
- Don't use Swiper's #007aff or Bootstrap status colours as brand colours.
- Don't present the cookie dialog as part of the design system.
- Don't use heavy shadows; the measured values are 10% black.
- Don't set body copy below the 18px to 22px range the site uses.

## Responsive Behavior

The 390px pass measured the h1 at 59.0563px / 59.0563px (342px wide), the h2 "OSOTSPA" at 24.9875px and body copy at 24.9875px in white on the photographic hero. The declared CSS breakpoints are 992px, 1200px and 1640px. Navigation and card rearrangement at mobile width were not measured.

## Iteration Guide

1. Start with white, #131313, brand blue #003087 and teal #00a3ad; deep blue #002871 for the footer.
2. Use DB Heavent, uppercase 66px for hero titles and 26px for section titles.
3. Make buttons 40px-radius pills with an arrow in a circle.
4. Keep shadows at 10% black.
5. Measure other pages with the extractor (`--slug=osotspa--page --url=<url> --force --no-motion`) before adding tokens; hover on elements other than the hotline pill was not measured.
