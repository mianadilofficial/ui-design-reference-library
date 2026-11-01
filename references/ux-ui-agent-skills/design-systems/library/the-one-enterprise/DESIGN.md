---
version: alpha
name: The One Enterprise
category: "Thai Brands"
description: "ONEE, Thai media and entertainment group (theoneenterprise.com/en): white page, black ink and a square-cornered black READ MORE button, db-heavent in weights 100, 300 and 500 with 72px headings, dark #25262a showcase panels, and channel artwork supplying all color."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-hover: "#25262a"
  surface-dark: "#25272b"
  accent-blue: "#0056a7"
  border-blue: "#2b408d"
  hairline: "#000000cc"
typography:
  display:
    fontFamily: db-heavent, sans-serif
    fontSize: 72px
    fontWeight: 300
    lineHeight: 72px
  display-mobile:
    fontFamily: db-heavent, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 36px
  heading:
    fontFamily: db-heavent, sans-serif
    fontSize: 72px
    fontWeight: 100
    lineHeight: 72px
    textTransform: uppercase
  subheading:
    fontFamily: db-heavent, sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 48px
    textTransform: uppercase
  body:
    fontFamily: db-heavent, sans-serif
    fontSize: 27px
    fontWeight: 100
  button:
    fontFamily: db-heavent, sans-serif
    fontSize: 24px
    fontWeight: 500
    textTransform: uppercase
  nav:
    fontFamily: db-heavent, sans-serif
    fontSize: 21.12px
    fontWeight: 300
    textTransform: uppercase
  link:
    fontFamily: db-heavent, sans-serif
    fontSize: 24px
    fontWeight: 100
rounded:
  xs: 2px
  sm: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 20px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.surface-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 20px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

The One Enterprise Public Company Limited (ONEE) is a Thai media and entertainment group: its page title reads "The One Enterprise - Content creator and distribution company", and the measured h1 is "The ONE Enterprise Public Company Limited | ONEE". The URL measured is its English home page. This is a corporate site, not a streaming product: a header with the glossy "one" logo, a small ABOUT / INVESTOR RELATIONS / ESG / CAREER / NEWS menu, a language switch (EN), a large rotating hero mosaic of program and channel artwork, a long company statement, a black READ MORE button, and a dark "COMPANIES" showcase of logos (one31, GMM TV, CHANGE 2561, ATIME, GMM Media, GMM Studios, XACT, ACTS Studio).

The look is a restrained corporate shell around very busy, colorful artwork: a white page, black text and one black button, with the group's channel and show logos supplying all the color.

## Colors

- **Canvas `#ffffff`** with **ink `#000000`** (6,858 characters). White text (1,223 characters) is used on the dark sections and in the header menu.
- **Primary `#000000`** is the READ MORE button fill with white text (on-primary `#ffffff`); its hover fill is **`#25262a`** (surface-hover). By area the most-used background is `#000000` (7,664), followed by `#25262a` (1,166) and translucent grays `#bcbcbd1a` (1,091) and `#b2b0b059` (810); **surface-dark `#25272b`** is a near-duplicate dark gray (6).
- **Hairline `#000000cc`** is the measured border color (black at 80 percent).
- **Accent-blue `#0056a7`** (background, 2) and **border-blue `#2b408d`** (border, 1) are small blue values measured on the circular section icon next to the h1. `#008000` also appears as a child text color of the body, in a context that the capture does not show.

## Typography

One family is measured on 8,081 characters: **db-heavent**, the Thai/Latin face by DB Heavent, loaded in weights 100, 300 and 500. Weight use by characters: 100 (6,621), 500 (1,099), 300 (361). The look is a very thin, light sans at large sizes.

- **Display** (the h1) is db-heavent 300 at 72px with a 72px line height; 36px on mobile.
- **Heading** (the h2 "COMPANIES") is weight 100, 72px, uppercase, line height 72px.
- **Subheading** is 300, 48px, uppercase.
- **Body** is weight 100 at 27px; the mobile body paragraph measures 24px, weight 100. The most-read size on desktop is 24px (5,253 characters) followed by 27px (1,951) and 18px (457).
- **Button** is 500, 24px, uppercase; **nav** 300, 21.12px, uppercase; **link** 100, 24px.
- No letter-spacing was measured.

DB Heavent is a licensed Thai font; a light Thai-capable grotesque at 100 and 300 weight would substitute.

## Layout

The page is 1280px wide and 9,820px tall. A header holds the menu and centered logo; below it, a full-width hero mosaic with a dark caption bar ("THE ONE ENTERPRISE") and arrow controls at its lower right; then a left-aligned h1 with a round icon, a centered paragraph block (width about 1,200px for headings), a centered button, and a dark panel with a left logo and a right-hand grid of company logos. Section spacing uses 80px (8), 40px (19) and 20px (28) paddings; flex gaps of 20px and 40px are measured.

## Elevation & Depth

No box shadows are measured. Depth is from the dark panel against the white page and from translucent gray fills. The READ MORE button's hover is a change of fill only, from `rgb(0, 0, 0)` to `rgb(37, 38, 42)`.

## Shapes

Measured radii: **2px**, **10px** and **50%** (one element each); all the rest compute 0px. The READ MORE button, the nav and the links are square-cornered (0px). The 50% radius belongs to the round icon beside the h1.

## Components

- **Button (READ MORE).** Black fill, white text, db-heavent 500 24px uppercase, padding 10px 20px, height 49px, square corners; hover fill `#25262a`. The capture shows a thin multicolor line along its bottom edge, which is part of the group's rainbow-gradient logo styling and was not measured as a token.
- **Navigation.** Uppercase menu links at 21.12px weight 300, padding 20px; on hover a link's opacity falls to 0.5 (measured). The measured text color is white while the header in the capture is light, so the menu is faint.
- **Language switch.** A small bordered "EN" dropdown at the top right.
- **Hero slider.** Mosaic artwork with caption strip and previous/next chevrons.
- **Footer.** Black text on white per the measured role; the footer role is not otherwise detailed.
- A "Please accept the cookie consent" tooltip appears in the capture; consent controls are not brand UI and are not documented.

## Design System Architecture

No public design system or brand guideline was found; the pages opened are the English home page (https://www.theoneenterprise.com/en/) measured by the extractor, and the research log in SOURCES.json lists it. The system is a minimal corporate shell: one typeface family in three light weights, black and white, a single black button, and a square-cornered grid. All visual richness comes from supplied channel and show artwork.

## Do's and Don'ts

- Do keep the shell black on white and let artwork carry color.
- Do set headings in db-heavent at weight 100 or 300 and keep them large (72px).
- Do use a square-cornered black button with white uppercase 24px text.
- Do use opacity 0.5 as the hover signal for menu links.
- Don't round buttons; the button radius is 0px.
- Don't use `#008000`, `#0056a7` or `#2b408d` as general brand colors; they are measured only on minor elements.
- Don't document the cookie tooltip as brand UI.

## Responsive Behavior

Measured at 390px: the h1 falls from 72px to 36px (line height 36px, height 72px, 350px wide), the h2 from 72px to 36px at weight 100, and the body paragraph is 24px at weight 100 and 350px wide. The mobile CTA is a READ MORE link with white text on a `#000000` fill. The mobile size distribution is 24px (6,926 characters), 18px, 36px, 30px, 19.2px, 26.4px and 27px. Breakpoints and navigation behavior on mobile were not measured.

## Iteration Guide

1. White page, black text, one font family in weights 100, 300 and 500.
2. Headline 72px (36px mobile); body 27px weight 100 (24px mobile).
3. One black 49px-high button with 10px 20px padding and white uppercase 24px label; hover `#25262a`.
4. Put the colorful content in artwork panels over a dark `#25262a` surface.
5. Keep corners square.
6. Do not add shadows, dark mode or tablet rules; none were measured.

## Content and Voice

The copy is written in the first person plural as a listed company. The measured company statement describes ONEE as "Thailand's one-stop industry leader in media and entertainment", names its owned television channel one31, its marketing role for Channel GMM 25, its radio stations (EFM, Green Wave, Chill Online) and its OTT content production, and lists related businesses (event organizing, artist management, merchandising and filming equipment rental). It states a track record of leadership "for more than 30 years" and closes on a mission "to deliver happiness to audiences of all genders and ages". Menu labels are plain corporate sections (About, Investor Relations, ESG, Career, News). The hero caption strip repeats the company name. The tone is formal, long-form and investor-facing; imagery is the opposite, a dense collage of drama posters, channel logos and talent photography.
