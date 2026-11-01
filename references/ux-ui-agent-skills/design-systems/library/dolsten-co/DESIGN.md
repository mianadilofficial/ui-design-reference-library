---
version: alpha
name: "Dolsten & Co."
category: "Agencies & Studios"
description: "Dolsten & Co. is an AI-first creative studio whose site uses a lavender #e3deea canvas, warm near-black #27231f ink, white 32px-tall square buttons, all-caps PP Neue Montreal headings and IBM Plex Mono 500 text, hairlines with plus-sign crosshairs and no shadows."
colors:
  canvas: "#e3deea"
  ink: "#27231f"
  primary: "#ffffff"
  on-primary: "#27231f"
  accent-orange: "#ff4c24"
  hairline: "#ffffff1a"
  glass-white: "#ffffff66"
  eerie-black: "#171c1c"
  gunmetal: "#31383b"
  ash-grey: "#acb7c1"
  anti-flash-white: "#eef0f2"
  honeydew: "#e1f7e1"
  pale-orange: "#edddd1"
  glass-light: "#ffffff99"
  glass-faint: "#ffffff4d"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: 0.32px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"PP Neue Montreal\", Arial, sans-serif"
    fontSize: 27.3px
    fontWeight: 400
    lineHeight: 24.57px
    letterSpacing: 0.273px
    textTransform: uppercase
  subheading:
    fontFamily: "\"PP Neue Montreal\", Arial, sans-serif"
    fontSize: 51.2px
    fontWeight: 400
    lineHeight: 46.08px
    letterSpacing: 0.512px
    textTransform: uppercase
  body:
    fontFamily: "\"IBM Plex Mono\", sans-serif"
    fontSize: 11.2px
    fontWeight: 500
    lineHeight: 14.56px
    letterSpacing: "-0.112px"
    textTransform: uppercase
  button:
    fontFamily: "\"IBM Plex Mono\", sans-serif"
    fontSize: 12.8px
    fontWeight: 500
    lineHeight: 11.52px
    letterSpacing: "-0.128px"
    textTransform: uppercase
rounded:
  xs: 12.8px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.6px
  s2: 3.2px
  s3: 6.4px
  s4: 9.6px
  s5: 11.2px
  s6: 12.8px
  s7: 19.2px
  s8: 20px
  s9: 24px
  s10: 25.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12.8px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12.8px
    height: 32px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12.8px
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.glass-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 12.8px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# Dolsten & Co.

## Overview

Dolsten & Co. is, in its own words, an "award-winning AI-first creative studio blending human intuition with machine intelligence"; the measured home page, `https://www.dolsten.com/`, is titled "Dolsten & Co. | AI-First Creative Studio". The navigation is only Awards, Work, About and Contact, split either side of a centered wordmark, and the page is built around a hero, a long awards ledger ("Awards & Recognitions": One Show Pencils, D&AD Pencils, Clios, ADC Cubes, Effies, London International Awards and more, each listed with counts), featured work films (Heineken x Serena Williams, Fi x Starlink, Autodesk), a manifesto ("AI is just a tool. Until it falls into the right hands.") and a four-part "AI agency model" (AI Creator Network, AI Production Department, Scale Up Systems, Business Effectiveness).

The look is quiet and technical. The canvas is a pale lavender-grey, `#e3deea`, with a warm near-black ink `#27231f`; white appears as the fill of buttons and as text over video. The hero in the capture is a single iridescent translucent flower rendered in 3D, with "WE MAKE AI" at the left and "LARGER THAN LIFE" at the right; the second phrase belongs to a cycling list of words in the page text (come alive, beautiful, emotional, larger than life, engaging, drive business, entertaining). A hairline rule with small plus-sign crosshairs spans the top and bottom of the hero, giving a drafting-sheet feel. All text is uppercase: a neo-grotesque (PP Neue Montreal) for headings and a monospace (IBM Plex Mono, weight 500) for everything else.

Voice is confident and plain: "We're not a special department or a deck capability. This is what we do, every day." Statistics are written as counts in capitals (rows such as "73 ONE SHOW PENCILS"), and buttons say "AGENCY PRESS", "SHOW MORE AWARDS", "SHOW ALL WORK", "LEARN MORE" and "SCROLL DOWN".

## Colors

- **Canvas `#e3deea`**: the page background, declared as `--_colors---swatch--silver`.
- **Ink `#27231f`**: warm near-black (declared `--_colors---swatch--black`); text on light surfaces and on buttons (1,679 measured characters). White `#ffffff` text is nearly as frequent (1,856) because it sits over video and image areas.
- **Primary `#ffffff`**: the fill of every measured button (`--_theme---button-background` is `--_colors---swatch--white`), with `#27231f` text (`--_theme---button-text`).
- **Glass white `#ffffff66`**: the translucent fill of the "SCROLL DOWN" pill; **hairline `#ffffff1a`** is the faint border color.
- **Accent `#ff4c24`**: a vivid orange-red measured on a small area (8 units); its element was not named by the extraction.
- **Declared swatches**: `#171c1c` eerie black, `#31383b` gunmetal (default-mode body text and outline), `#acb7c1` ash grey (button background in the default mode variables), `#eef0f2` anti-flash white (default-mode background variable), `#e1f7e1` honeydew (active state), `#edddd1` pale orange.
- **Surface translucents**: `#ffffff99`, `#ffffff4d` and `#ffffff26` appear as backgrounds, plus `#64646433`; their elements were not attributed.

The site declares color-mode variables (`--color-mode-default--*` and `--color-mode-dark--*`); which mode the page serves to a visitor was not measured beyond the default values above.

## Typography

Two families. PP Neue Montreal (declared `--_fonts---fonts--heading`, "PP Neue Montreal", Arial, sans-serif) carries 261 measured characters; IBM Plex Mono (declared as both the paragraph and eyebrow font) carries 3,274. Weights are 500 (3,241 characters, mono) and 400 (294).

- **Display**: PP Neue Montreal 32px / 28.8px, weight 400, letter-spacing 0.32px, uppercase ("WE MAKE AI", "MORE AWARDS"); 27.3px / 24.57px on the 390px mobile pass (`display-mobile`).
- **Subheading**: PP Neue Montreal 51.2px / 46.08px, weight 400, letter-spacing 0.512px, uppercase (work titles, footer contact lines).
- **Body**: IBM Plex Mono 11.2px / 14.56px, weight 500, letter-spacing -0.112px, uppercase.
- **Button**: IBM Plex Mono 12.8px / 11.52px, weight 500, letter-spacing -0.128px, uppercase.

The size list by character count is 11.2px (2,227), 9.6px (748), 12.8px (261), 25.6px (142), 32px (58), 83.2px (44), 12px, 51.2px and 12.6px. The 83.2px and 25.6px runs have no recorded family or weight, so they are not tokens. The root variables declare tight heading line heights (0.9em to 0.92em), `-.02em` tracking on extra-large headings and `.01em` on large ones.

## Layout

The desktop pass measured 1280px wide and a 10,851px page. The root variables declare a container that clamps between `--size-container-min: 992px` and `--size-container-max: 1600px`, a global page padding of 2em (1.5em at tablet), and size units based on 16. Common paddings are 12.8px (59 uses), 25.6px (38), 11.2px, 51.2px and 76.8px. The header sits over the hero: Awards and Work at the left, the DOLSTEN & CO. wordmark centered, About and Contact at the right, all in small mono caps, with the plus-marked rule beneath. Below the hero, sections stack as long vertical sequences: the awards ledger in columns, work films with timecodes ("00:00 / 00:00"), the manifesto, and the model grid. The footer measured 1280 × 586px with subheading-size contact lines ("hello@dolsten.com", "PR & NEW BUSINESS"). The capture shows a large empty lavender area under the hero where content had not rendered at capture time.

## Elevation & Depth

Flat. No box shadow was measured. The only depth cues are translucency (white at 40 percent on the "SCROLL DOWN" pill, `#ffffff99` fields), faint white borders and the 3D-rendered flower and video imagery itself.

## Shapes

Mostly square: buttons and nav measured 0px radius, while 12.8px was measured on 12 elements and a 50% circle on 10 (icons or dots). The root variables declare button radii of `.5em` desktop and `.25em` tablet and mobile, and `.25em` for labels, but the measured buttons are square, so the declared radius is not applied to them. Plus-sign crosshair marks and long hairlines replace ornamental shapes.

## Components

- **Button** (`button-primary`): white `#ffffff` fill, `#27231f` text, IBM Plex Mono 12.8px weight 500 uppercase, 0px radius, padding `0px 12.8px`, 32px tall; widths 120px ("LEARN MORE") to 166px ("AGENCY PRESS", "SHOW MORE AWARDS"). The declared `--element-button--height` is 3rem, which differs from the measured 32px.
- **Scroll pill** (`nav-link`): `#ffffff66` fill, 115 × 29px, with an arrow glyph; its hover keeps the fill and changes height from 29px to 27px.
- **Nav links**: mono caps at 11.2px to 12.8px, no fill.
- **Footer**: no fill, `#27231f` text, subheading-size contact lines.

## Design System Architecture

No public design system or brand guidelines were found: the home page links to work pages, news, a privacy statement and two credit links, not to guidelines. The site is built in Webflow (the font list includes `webflow-icons`) using a variable system with client-first style names: `--_colors---swatch--*`, `--_theme---button-background`, `--_fonts---fonts--heading`, `--_headings---heading-xl--*` through `heading-xs`, `--_paragraphs---paragraph-*`, `--_layout---padding-global--*`, `--element-button--*`, `--element-card--*`, `--element-label--*` and `--color-mode-default--*` / `--color-mode-dark--*` mode variables; 189 root variables were recorded, and some carry `<deleted|variable-...>` suffixes from deleted Webflow variables. Source: `https://www.dolsten.com/`.

## Do's and Don'ts

- Do set everything in uppercase, headings in PP Neue Montreal and the rest in IBM Plex Mono weight 500.
- Do keep the lavender `#e3deea` canvas with `#27231f` ink and white buttons.
- Do use hairlines and plus-sign crosshairs as structure instead of boxes.
- Do write counts, awards and short declarative claims.
- Don't add shadows or heavy fills; none were measured.
- Don't round the buttons: the measured radius is 0px even though the theme declares `.5em`.
- Don't use the accent `#ff4c24` as a large surface without measuring where it is used.

## Responsive Behavior

The 390px pass recorded: the h1 and h2 at 27.3px / 24.57px, body text at 11.7px / 15.21px, the "AGENCY PRESS" button at 11.7px / 10.53px with 8.775px side padding and 146 × 29px, and a header container 390px wide. The declared variables include tablet and mobile spacing, radius and padding steps (for example global padding 1.5em at tablet), but the mobile menu mechanism, column counts and breakpoints were not measured.

## Iteration Guide

1. Set canvas `#e3deea`, ink `#27231f`, and load PP Neue Montreal and IBM Plex Mono 500, all text uppercase.
2. Build the header as small mono links on both sides of a centered wordmark, with a hairline and plus-sign crosshairs.
3. Use white 32px-tall square buttons with 12.8px mono labels.
4. Present awards and work as long, quiet ledgers over the lavender field; use 3D or video imagery for color.
5. Keep depth to translucency, with no shadows.
6. Run `node web/scripts/verify-designs.mjs --slug=dolsten-co` after changes.
