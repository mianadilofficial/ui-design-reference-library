---
version: alpha
name: Gunkul Engineering
category: "Thai Brands"
description: "Gunkul Engineering Public Company Limited English homepage (gunkul.com/en/home): DB Airy typeface with 63.7683px bold uppercase hero headlines, deep ink #041d2c on white, navy #1e2864 footer, blue #1a5ed4 for circular arrow buttons, 20px-radius outlined news cards and 5px-radius ghost buttons."
colors:
  canvas: "#ffffff"
  ink: "#041d2c"
  primary: "#1a5ed4"
  surface-black: "#000000"
  navy: "#1e2864"
  ink-muted: "#9ba5ab"
  hairline: "#cdd2d5"
  button-secondary-border: "#eaeef180"
typography:
  display:
    fontFamily: "\"DB Airy\", sans-serif"
    fontSize: 63.7683px
    fontWeight: 700
    lineHeight: 63.7683px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"DB Airy\", sans-serif"
    fontSize: 31.8521px
    fontWeight: 700
    lineHeight: 31.8521px
    textTransform: uppercase
  body:
    fontFamily: "\"DB Airy\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 27.5px
  link:
    fontFamily: "\"DB Airy\", sans-serif"
    fontSize: 21px
    fontWeight: 700
    lineHeight: 26.25px
rounded:
  xs: 5px
  sm: 20px
  pill: 9999px
spacing:
  s1: 0.8px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 12px 16px 10.4px
    height: 51px
    borderColor: "{colors.button-secondary-border}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.canvas}"
    padding: 40px 0px
---

## Overview

Gunkul Engineering Public Company Limited (page title "Gunkul Engineering", logo "GUNKUL, not only the energy, we care") is a Thai electrical-equipment and renewable-energy group. The measured page is its English homepage, 6,536px tall at 1,280px wide. It opens on a dark-navy hero carousel whose slides carry large uppercase bold white headlines such as "SUSTAINABLE GROWTH" and "EMBRACE A FUTURE POWERED BY 100% GREEN ENERGY" and short claims ("MORE THAN 5,000 ITEMS of electrical system equipment", "TOTAL SOLUTIONS"). A white section follows with "GUNKUL INSIGHTS": three outlined news cards, each with a photograph, a date, a bold title and a "Corporate News" tag, then an "INVESTOR CORNER" with outlined cards for stock price and financial statement.

The capture shows an announcement pop-up (a company award notice) with a close button over the hero. It is a promotion, not brand UI. The extractor did not hide it on a forced second run, so some hero measurements (the black `#000000` area weight of 1,024) may include the dimmed backdrop; those values are documented as measured, not interpreted. The stock-price figures in the capture are live data and are not used.

The mood is confident, corporate-blue and clean: large light-on-dark headlines in a single sans family, a navy footer, and rounded outlined cards on white. Copy is plain English with title-case card headlines ("GUNKUL Receives 2026 Human Rights Model Organization Award for the Fifth Consecutive Year").

## Colors

- **Canvas `#ffffff`** is the largest background (weight 1,370 on the second run), used for the page and cards.
- **Ink `#041d2c`** is a very dark blue-black and the most-read text on white (1,154 characters); white `#ffffff` is the most-read overall (2,090 characters, mostly on the dark hero and navy footer).
- **Primary blue `#1a5ed4`** is a small-area measured background (weight 13). It is the hover fill (text turns white and the border becomes `#1a5ed4`) of the circular pop-up close button; the circular arrow buttons in the capture ("View All", stock and financial cards) are the same family of blue.
- **Navy `#1e2864`** (weight 603) is the footer background.
- **Muted `#9ba5ab`** is the gray used for dates and "Corporate News" tags (124 characters); **hairline `#cdd2d5`** is the 1px border of news cards.
- **Black `#000000`** (weight 1,024) is the dark hero base layer; **`#eaeef180`** is the half-transparent border of ghost buttons.

## Typography

One family: **DB Airy** (weights 400 and 700 loaded; an `icomoon` icon font), covering all 3,369 measured characters. The stylesheet declares no fallback beyond `sans-serif`.

- **Display** 63.7683px/700/63.7683px (line-height equal to size), uppercase; mobile 31.8521px.
- **Body** 22px/400/27.5px (1,815 characters, the most common size).
- **Link / button** 21px/700/26.25px.
- **Navigation** 19px/700/23.75px uppercase in the header container.
- Other measured sizes: 24.5061px (524 characters), 32.8598px (409), 41.2134px, 57.0854px, 20px, 19px and 16.5px.

Weights: 400 (2,042 characters), 700 (1,462) and one 100. No letter-spacing was recorded.

### Font substitutes

DB Airy is loaded as a web font by the site; the only declared fallback is `sans-serif`.

## Layout

The header is 67px high and transparent over the hero: the logo at left, then seven uppercase navigation items with chevrons (About, Businesses, Investors, Governance, Sustainability, News Center, Careers, Contact), a language selector (EN) and a search icon. The desktop pass counted 11 visible header links. Content sits in a container about 1,152px wide in the capture (cards 350px wide, 572px high). The news row is three equal cards; the investor row is a left stack of wide cards with the section title "INVESTOR CORNER" right-aligned beside them. The footer is 342px tall with 40px vertical padding. Spacing values: 0.8, 6, 8, 12, 15, 16, 20, 24, 30 and 32px; the maximum card columns counted was five.

## Elevation & Depth

Cards are mostly outlined, not shadowed; one soft shadow `rgba(0, 0, 0, 0.2) 0px 3px 15px 0px` was recorded on one element. The hero relies on dark navy photography and gradient light flares; text on it is white. The pop-up overlay lifts above the hero with a dimmed backdrop and is not a brand pattern.

## Shapes

Radii: 50% (21 elements; circular icon buttons), 20px (12; cards), 5px (11; ghost buttons), and `20px 20px 0px 0px` (3; card images rounded at the top). Cards are therefore 20px rounded with a 1px `#cdd2d5` border, and buttons are 5px rounded.

## Components

- **Ghost button ("Explore More").** Transparent over dark photography, white 21px/700 label, 1px solid `#eaeef180`, radius 5px, padding 12px 16px 10.4px, 171x51px.
- **View All.** A white button with a hairline border and a blue circular arrow icon in the capture; its numeric values were not isolated.
- **News card.** White, 1px `#cdd2d5` border, radius 20px, 350px wide; photograph on top, date and "Corporate News" in `#9ba5ab`, bold `#041d2c` headline.
- **Navigation.** Uppercase bold white links over the hero (19px); `#041d2c` 22px links on white.
- **Circular icon button.** 36px diameter; hover turns the fill to `#1a5ed4` with white text (measured on the close button).
- **Footer.** `#1e2864`, white text, 22px bold.
- **Not documented as brand UI:** the announcement pop-up and its close button.

## Design System Architecture

No public design system or brand guideline was found: the homepage was opened and links only to corporate content, and no search was run. No design tokens could be read from root variables in a reportable form, so the system is described from the shipped result: one proprietary typeface (DB Airy) at two weights, an ink/navy/blue palette on white, 20px cards and 5px buttons, and white-on-photography hero headlines. Source: https://www.gunkul.com/en/home as captured by the repository extractor.

## Do's and Don'ts

- Do set hero headlines in DB Airy 700 uppercase at about 64px with line-height equal to size, in white on dark imagery.
- Do keep body copy at 22px in `#041d2c` on white.
- Do use 20px-radius cards with a `#cdd2d5` hairline and gray `#9ba5ab` meta text.
- Do use the `#1e2864` navy for the footer.
- Don't treat the announcement pop-up as a component.
- Don't use heavy shadows; cards are outlined.
- Don't mix in a second typeface.

## Responsive Behavior

Measured on a 390px mobile pass: the h1 and h2 fall to 31.8521px (line-height equal to size; h2 box 360px by 96px); body text stays 22px/27.5px (360px by 193px); the header container measured 390px by 66px with 19px/400 uppercase text and only "EN" in the detected text. Header links visible fall from 11 to 3 and a menu toggle labeled "Toggle navigation" is detected (`menuToggleVisible: true`); the maximum card columns measured 5 on both passes. Other behavior is not measured.

## Iteration Guide

1. Use the frontmatter tokens as measured; extend only with new extractions.
2. White canvas, ink `#041d2c` DB Airy text at 22px, navy `#1e2864` footer.
3. Hero headlines: 63.7683px bold uppercase white; mobile 31.8521px.
4. Cards: 20px radius, 1px `#cdd2d5` border; buttons: 5px radius ghost style.
5. Run `node web/scripts/verify-designs.mjs --slug=gunkul` until it passes.

## Content and Voice Notes

The homepage headings are short noun phrases in uppercase ("GUNKUL INSIGHTS", "INVESTOR CORNER"), while card headlines are full sentences in title case that begin with the company name in capitals ("GUNKUL Receives", "GUNKUL awarded"). Dates are written day, month name, year ("24 September 2026"). Card tags use the plain label "Corporate News", and the footer opens with the full legal name, Gunkul Engineering Public Company Limited. Hero claims pair a bold uppercase lead ("MORE THAN 5,000 ITEMS") with a lighter descriptive line beneath in the capture.
