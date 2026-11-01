---
version: alpha
name: "Muzik Move"
category: "Thai Brands"
description: "Muzik Move (muzikmove.co.th), a Thai music label and entertainment company, measured live: AttenNew and DindanMai type at weights up to 900 in uppercase, a canary yellow #ffe600 field, black #000000 pill buttons, #262424 ink and white release cards with 18px corners and soft 25px shadows."
colors:
  canvas: "#ffffff"
  ink: "#262424"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#f6f6f6"
  ink-3: "#212529"
  brand-yellow: "#ffe600"
  overlay-black: "#000000f2"
typography:
  display:
    fontFamily: AttenNew, DindanMai, sans-serif
    fontSize: 96px
    fontWeight: 900
    lineHeight: 115.2px
    textTransform: uppercase
  display-mobile:
    fontFamily: AttenNew, DindanMai, sans-serif
    fontSize: 42px
    fontWeight: 900
    lineHeight: 42px
    textTransform: uppercase
  body:
    fontFamily: AttenNew, DindanMai, sans-serif
    fontSize: 21px
    fontWeight: 600
    lineHeight: 29.4px
  button:
    fontFamily: AttenNew, DindanMai, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  nav:
    fontFamily: AttenNew, DindanMai, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 18px
  sm: 20px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 14px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 36px
  s9: 48px
  s10: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 36px
    height: 51px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 24px 64px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 0px
  card:
    textColor: "{colors.ink-3}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 10px 25px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 64px 64px 8px
---

# Muzik Move

## Overview

Muzik Move is a Thai music label and entertainment company, and the page measured is its English home page at https://www.muzikmove.co.th/ (document title "Muzik Move - Home"; queued without the www). It is a long, colorful, music-catalogue page, 4,983px tall at 1280px width. The cookie-consent dialog (`cookieConsent`) was hidden before measuring and is not part of the system.

The page begins with a dark top bar carrying the yellow-and-white "MUZIK MOVE" logo, the navigation labels Our Company, Our Business, Our Artists, Article, Our Store and Contact Us in white capitals, and a row of circular white social buttons (Facebook, Instagram, TikTok, X, YouTube); a small EN and TH language tab sits at the right edge, with TH in yellow. The opening hero is an animated statement, "Muzik Move Your Feeling", in huge black letters on white, surrounded by circular label logos (BOXX Music, move records, ME Records, spacebar Music Hub, melodic corner, Pap Animal, Dazz Records, Mad Monster) on yellow, black and white discs, with vinyl-record and headphone illustrations and a yellow sunburst.

The "NEW RELEASE" section follows: a bright yellow field with a scalloped upper edge, the heading in black at 96px, and two rows of six white release cards. Each card has a square cover image, a bold title in Thai or English, the artist's name in smaller grey and two small circular buttons for YouTube and Spotify. A black pill button, "See All →", closes the section. The "ARTICLE" section on white has a large black heading over grey doodle shapes and four photographic article cards with white bold captions over the images, some framed in yellow.

The look is playful and graphic: yellow, black and white, circular logos, scalloped edges and pill buttons. The voice is short and mood-led ("Your Feeling", "New Release"); the cards mix Thai and English titles.

## Colors

The palette is three colors plus greys. The canvas is white, #ffffff (`canvas`). The brand's signature yellow, #ffe600 (`brand-yellow`), is the section field behind New Release, the article card frames and the sunburst; it appears in the shipped CSS corpus (four occurrences) and a sample of the capture's yellow area matches it within image compression, but it is not recorded as a computed element background, the way it is painted was not determined. The CSS corpus also holds #ffd84d (six occurrences), which is not used in the frontmatter.

Black carries structure. #000000 (`primary`) is the fill of the "See All →" pill button. A 95%-opacity black, #000000f2 (`overlay-black`), is the largest measured background by area (weight 1,024) and is the translucent dark header and overlay behind the navigation. #262424 (`ink`) is the main text color on white (334 characters), the footer background (area weight 558) and the nav label color measured on the desktop navigation role; #212529 (`ink-3`) is the card and body text color (242 characters). White text (594 characters) is used on dark areas and over photographs. #f6f6f6 (`surface-3`) is a light grey background (area weight 55).

The Bootstrap defaults in the CSS (#0d6efd, #6c757d, #dc3545, #198754, #ffc107 and the hover blue #0a58ca) are framework values and are not brand colors; #0d6efd measured as the unstyled link color and was dropped from the tokens.

## Typography

Two families share the work: "AttenNew" for Latin text and "DindanMai" for Thai, in the stack "AttenNew, DindanMai, sans-serif". AttenNew is loaded at 400, 700 and 900 and DindanMai at 400 and 900; AttenNew measured on 1,170 characters. By weight, 600 covers 580 characters, 400 covers 262, 900 covers 186 and 700 covers 142.

Measured roles:
- `display`: the "NEW RELEASE" heading at 96px, weight 900, line-height 115.2px, uppercase.
- `display-mobile`: 42px, weight 900, line-height 42px, uppercase.
- `body`: 21px, weight 600, line-height 29.4px.
- `button`: 15px, weight 400, line-height 22.5px.
- `nav`: 16px, weight 700, line-height 24px, uppercase.

Sizes by character count are 22px (391), 16px (220), 20px (214), 21px (189), 24px (93), 96px (32) and 128px (21, the opening statement), then 15px and 40px. Headings are always uppercase black at weight 900; card titles are bold; fine text such as artist names is regular weight in grey. No letter-spacing is measured. The scale jumps from 24px to 96px and 128px with nothing between, so the page has display type and body type but no middle heading tier.

## Layout

The page uses a 64px outer gutter: the desktop navigation has 24px vertical and 64px horizontal padding, and the footer has 64px on three sides (64px 64px 8px). Sections stack as full-width bands, each with a left-aligned big heading: hero statement, New Release on yellow, Article on white with doodles, then a dark footer.

The release grid is six equal cards per row, two rows, with small gutters, and the article grid is four cards per row. Spacing values measured as tokens are 8, 12, 14, 16, 20, 24, 32, 36, 48 and 60px. Density is medium-high in the card grids and loose around the headings; the yellow band has large empty space below the second card row.

## Elevation & Depth

Depth is a defining trait, in soft, large shadows. Four are measured: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px on 12 elements (the largest, with a negative spread), rgba(0, 0, 0, 0.15) 0px 1px 40px 0px on nine, rgba(0, 0, 0, 0.2) 0px 4px 15px 0px on eight, and rgba(0, 0, 0, 0.15) 0px 10px 25px 0px on six, which is the one recorded on the `card` token. The release cards sit above the yellow field on this last shadow. Other depth cues are the scalloped yellow edge and layered circular logos. No borders were measured.

## Shapes

Shapes are round. The measured radii are 50% on 43 elements (the circular label logos and social buttons), 20px on 16 (article cards), 18px on 14 (release cards, `rounded.xs`), a 20px top-only radius on 12 elements (the image halves of cards), an 18px left-only radius on two, and 999px on one (the pill button). The tokens are `xs` 18px, `sm` 20px and `pill` 9999px. Buttons are full pills; cards use 18px to 20px corners with the cover image rounded on its top edge only; logos and icon buttons are circles.

## Components

**Primary button** (`button-primary`): the "See All →" pill: #000000 fill, white 15px label with an arrow, padding 14px 36px, height 51px, 999px radius.

**Navigation** (`nav`, `nav-link`): the desktop measurement recorded a white bar with 24px 64px padding and 16px weight 700 uppercase links in #262424 with 8px vertical padding, and hover turns the label white; the capture shows the same links in white over a dark translucent bar. Both states belong to the same bar, which changes with scroll or intro state; which one applies at which scroll position was not measured.

**Release card** (`card`): white card, 18px radius, #212529 text, rgba(0, 0, 0, 0.15) 0px 10px 25px 0px shadow; a square cover on top, a bold title, a grey artist line and two small round buttons (YouTube and Spotify icons).

**Article card**: a photograph with a 20px radius and a bold white caption set over the lower part of the image.

**Social buttons**: 50% radius white discs with dark glyphs in the header.

**Footer** (`footer`): #262424 fill, white 24px text, padding 64px 64px 8px; items include Home, Privacy Policy, Cookie Settings and Article.

## Design System Architecture

No public Muzik Move design system or brand-guideline page was found linked from the home page, and none was opened for this document. The shipped CSS includes the full Bootstrap 5 variable set (`--bs-primary: #0d6efd`, `--bs-border-radius-sm: 0.25rem`, `--bs-border-radius-2xl: 2rem`, `--bs-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15)`, `--bs-link-hover-color: #0a58ca`) and Font Awesome 6 variables, but the rendered brand values (yellow field, black pills, 18px cards, AttenNew type) override the framework defaults, so the Bootstrap values are not part of the brand system. Source reviewed: https://www.muzikmove.co.th/ only.

## Do's and Don'ts

Do use #ffe600 yellow as the field for featured sections, with black headings at 96px weight 900 in uppercase.

Do make buttons full pills in black (#000000) with white labels, and make logo and social buttons circles.

Do set release cards on white with 18px corners and the 25px soft shadow.

Do pair AttenNew with DindanMai so Thai and Latin titles sit in the same weights.

Don't use Bootstrap's #0d6efd, #198754 or #ffc107 as brand colors.

Don't use a thin or light weight for headings; the measured headings are 900.

Don't record the cookie consent dialog as brand UI.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the "NEW RELEASE" heading is 42px, weight 900, line-height 42px, in #212529, with 24px 20px padding; body text is 14px, weight 600, line-height 17.5px; the "See All →" button is #000000 with a white 15px label, 14px 36px padding and a 999px radius at 180px width; and the navigation role measured 16px in #262424 on white with 24px 19.5px padding. Character counts by size on mobile are led by 14px (700) and 16px (287). Breakpoints, card column counts and how the header and social buttons are arranged on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #ffffff, `brand-yellow` #ffe600, `primary` #000000, `ink` #262424 and `ink-3` #212529.
2. Use AttenNew with DindanMai; 96px/900 uppercase headings, 21px/600 body, 15px buttons.
3. Build the order: dark header, big statement hero with circular label logos, yellow New Release band with two rows of white cards, white Article band, dark footer.
4. Use pill buttons, 18px cards, circular logos, and the four soft shadows.
5. Run `node web/scripts/verify-designs.mjs --slug=muzik-move-company-limited` after edits.
6. Leave out anything not in the frontmatter or `web/data/extracted/muzik-move-company-limited.json`.
