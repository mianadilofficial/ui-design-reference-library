---
version: alpha
name: Lando Norris
category: "Culture & Events"
description: "Lando Norris official site (landonorris.com): dark green #282c20 and cream #f4f4ed with electric lime #d2ff00 buttons (6.4px radius), Brier serif and Mona Sans Variable, 86.67px Brier uppercase headlines at -2.59px tracking, oval and pill shapes, no shadows."
colors:
  canvas: "#282c20"
  ink: "#f4f4ed"
  primary: "#d2ff00"
  on-primary: "#282c20"
  surface: "#111112"
  lime-off: "#b2c73a"
  dark-green-tint: "#3b3c38"
  ink-muted: "#535450"
  grey-on-track: "#b9bbad"
  green-off-white: "#dde1d2"
  green-off-white-deep: "#b4b8a5"
typography:
  display:
    fontFamily: Brier, Arial, sans-serif
    fontSize: 86.6667px
    fontWeight: 700
    lineHeight: 70.2px
    letterSpacing: "-2.59259px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Brier, Arial, sans-serif
    fontSize: 43.3333px
    fontWeight: 700
    lineHeight: 35.1px
    letterSpacing: "-1.08333px"
    textTransform: uppercase
  label:
    fontFamily: "\"Mona Sans Variable\", Arial, sans-serif"
    fontSize: 7.40741px
    fontWeight: 400
    lineHeight: 7.40741px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Mona Sans Variable\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 600
    lineHeight: 13.3333px
  body:
    fontFamily: "\"Mona Sans Variable\", Arial, sans-serif"
    fontSize: 14.8148px
    fontWeight: 400
    lineHeight: 18.5185px
    letterSpacing: "-0.148148px"
  button:
    fontFamily: "\"Mona Sans Variable\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2.37px
  sm: 6.4px
  md: 8.77px
  lg: 39.3px
spacing:
  s1: 2.96px
  s2: 3.7px
  s3: 7.41px
  s4: 11.85px
  s5: 14.81px
  s6: 22.22px
  s7: 29.63px
  s8: 44.44px
  s9: 56px
  s10: 71.11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 11.8519px
    height: 53px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 11.8519px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
---

## Overview

landonorris.com is the official site of the McLaren Formula 1 driver (title "McLaren Formula 1 Driver — Lando Norris"; meta description "Official hub for British racing star Lando Norris: breaking news, 2025 race wins, exclusive merch, videos and behind-the-scenes access."). The measured page is 1280px wide and 12068px tall: a long, scroll-driven brand experience. It opens on a cream (#f4f4ed-family) field with soft grey organic blobs and topographic contour lines, the two-line "LANDO NORRIS" wordmark at top left (LANDO in a light serif, NORRIS in bold sans), the stylized "LN" mark centered, a lime "STORE" button with a bag icon and an outlined square menu button at the top right. At lower left is a small ticket-shaped "NEXT RACE" card (Singapore GP, with a track outline and a "MCLAREN F1 SINCE 2019" laurel badge).

Scrolling reaches a full-bleed dark-green section with a centered laurel emblem and a huge statement mixing two typefaces: "REDEFINING LIMITS, FIGHTING FOR WINS, BRINGING IT ALL IN ALL WAYS. DEFINING A LEGACY IN FORMULA 1 ON AND OFF THE TRACK." The words REDEFINING, WINS and LEGACY are set in a high-contrast serif in lime-off green, the rest in bold grotesque in cream. Other measured copy: "2025 MCLAREN FORMULA 1 D…", "Celebrate this incredible moment with a collection designed…", "view on track", "Season" and the race link "Singapore GP". The voice is high-energy, athletic and personal.

## Colors

The CSS names its palette in root variables:

- **Dark green #282c20** (`--color--dark-green`) is the body background and the main text color on light areas (1062 characters, 830 area-weight). **#111112** (`--color--black`) is the darkest surface (2594, the largest area). **#3b3c38** (`--color--dark-green-tint-1`) and **#535450** (`--color--dark-green-tint-2`) are tints.
- **Cream / white #f4f4ed** (`--color--white`, 1100 area-weight, the light canvas and light text on dark). Related off-whites: #efefe5 (`--color--cream`), #ebeee0 (`--color--grey-1`, `--color--green-light`), #dde1d2 (`--color--green-off-white-1`), #c8cbbd (`--color--grey-2`), #b4b8a5 (`--color--green-off-white-2`), #b9bbad (`--color--grey-on-track`).
- **Electric lime #d2ff00** (`--color--lime`) is the action color: the STORE button fill and border, and the "next race" track outline. **#b2c73a** (`--color--lime-off`) is the softer lime used for the serif emphasis words in the statement (70 characters).
- **Orange #ff6b00** (`--color--orange`) exists in the variables; where it is used was not measured on this page.

## Typography

Two families: **Brier**, a high-contrast display face loaded at 700 (396 characters), and **Mona Sans Variable** (weights 200 to 900 loaded) for everything else. The statement mixes Brier's serif forms with Mona Sans caps.

- Display: Brier 700 uppercase at 86.6667px on 70.2px line-height with -2.59259px tracking; mobile 43.3333px on 35.1px with -1.08333px. Other large sizes by characters: 94.0741px (-0.740741px, 90 characters), 82.963px, 97.7778px, 64.4444px, 62.2222px, 55.5556px and 53.3333px.
- Body: Mona Sans 400 at 14.8148px on 18.5185px, -0.148148px tracking (1049 characters). A 14px size is used for button and link text.
- Subheading: 10.6667px at weight 600 (for example "Season"). Eyebrow / label: 7.40741px uppercase, 400 (for example "NEXT RACE"). Other sizes: 17.7778px (+0.592593px) and 23.7037px (+0.592593px) with positive tracking.
- Weights in use: 400, 600, 700 and 800.

The fractional pixel sizes come from the site's fluid scale (`--fluid-font` computed from a 1728px design width on a 16px unit); they are listed as measured at 1280px.

Art direction pairs two moods. The light opening is playful and graphic: pale blob silhouettes, hand-drawn-looking contour lines and tiny interface details, all in near-white greys. The dark sections are serious and motorsport-driven, with the emblem and a full-width statement in cream and green. Small badge artwork (a helmet inside a laurel wreath captioned "MCLAREN F1 SINCE 2019") recurs as a credential mark. Interface text is tiny next to the headlines: the contrast between 7.4px eyebrow labels and 86.67px display lines is a core feature of the composition.

## Layout

The CSS defines a max width of 1920px, a minimum width of 992px, a base gap of 1.25rem, paddings from 1rem (mini) to 5rem (xlarge), a container padding of 2rem, a `--grid-col` of 25.4375rem and a nav height. Measured gaps are 7.40741px (50), 14.8148px (49), 29.6296px and 44.4444px; paddings 14.8148px and 11.8519px. Sections are full-bleed alternating light and dark; the statement section centers its text on the dark green, with a large leading spacer (`--grid-spacer: 31.51vh`).

The statement section is the clearest example of the grid: a single centered column about two thirds of the viewport wide, with lines breaking at natural phrase boundaries ("REDEFINING LIMITS," then "FIGHTING FOR WINS,") and line-height tighter than the font size so the lines nearly touch.

## Elevation & Depth

No box shadows were measured. Depth comes from layered organic blobs and contour lines in the hero, full-bleed color changes between sections, and a ticket-shaped "next race" card with a thin outline.

## Shapes

Measured radii: 39.3037px (7 elements, pills and ovals), 6.4px (6, buttons), 8.77px (1) and 2.37px (1). The CSS declares radius tokens `--radius--small` 1rem, `--radius--med` 3rem and `--radius--large` 6.25rem, and an `--oval-side-offset`. The STORE button is a softly rounded rectangle (6.4px) and the menu button is an outlined rounded square.

## Components

- **Primary button (STORE)**: lime #d2ff00 fill and border, #282c20 label at 14px, 6.4px radius, 53px tall, 11.85px horizontal padding, with a bag icon.
- **Secondary action ("view on track")**: same lime fill and radius at 36px tall.
- **Menu button**: outlined rounded square with a short dash icon.
- **Next-race ticket**: thin-outlined card with "NEXT RACE" label, track glyph in lime, "SINGAPORE GP" and a laurel badge.
- **Link**: grey #535450 14px text (for example "Singapore GP").
- **Statement block**: centered uppercase mix of Brier and Mona Sans in cream with lime-off emphasis.

## Design System Architecture

No public design system was found. https://landonorris.com/ was opened; `/about` and `/press` returned 404. The shipped CSS has a variable system of 61 properties: `--color--*` names, `--text--*` sizes (`--text--impact` 7.9375rem, `--text--h1` 4rem, `--text--h2` 4.5rem, `--text--h3` 2rem, `--text--reg` 1.6rem, `--text--eyebrow` .578125rem), `--padding--*`, `--radius--*`, `--gap`, an easing curve `--cubic-default: cubic-bezier(0.65, 0.05, 0, 1)` and `--duration-default: 0.75s`. That is a fully tokenized, fluid-scaling system.

## Do's and Don'ts

- Do pair dark green #282c20 with cream #f4f4ed and use lime #d2ff00 only for primary actions and key accents.
- Do mix Brier serif and Mona Sans in headline statements, emphasizing a few words in lime-off #b2c73a.
- Do keep buttons 6.4px-radius rectangles and use big ovals for sections.
- Do animate with the shared 0.75s ease `cubic-bezier(0.65, 0.05, 0, 1)`.
- Don't add shadows.
- Don't use orange #ff6b00 as a primary color: its usage was not measured.
- Don't set body copy below 14px; the 7.4px labels are for eyebrows only.
- Don't change the lime for a different green.

## Responsive Behavior

The 390px pass measured: Brier h2 43.3333px on 35.1px with -1.08333px tracking, body 14.0833px on 17.6042px with -0.135417px, label 8.66667px uppercase, and the primary button 14px with a 5.85px radius on lime. Common mobile sizes are 14px (763 characters), 13.5417px (537), 14.0833px (499), 8.66667px (244) and 37.9167px (109). The CSS declares a 992px minimum width for the fluid scale. Menu and layout reflow were not measured.

## Iteration Guide

1. Use the tokens: dark green canvas, cream ink, lime primary, Brier for display.
2. Headlines go uppercase with negative tracking; emphasize with lime-off serif words.
3. Add lime only for buttons and race highlights.
4. Confirm any new color against `web/data/extracted/lando-norris.json` root variables.
5. Run `node web/scripts/verify-designs.mjs --slug=lando-norris`.
