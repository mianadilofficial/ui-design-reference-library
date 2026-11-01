---
version: alpha
name: Creative Giants
category: "Architecture & Interiors"
description: "Creative Giants (Brighton, UK) immersive-activation and public-art studio site: warm off-white #fffef7, black #000000 sections, grey #666666 body, Switzer at light 300 weight with tight negative tracking (-2.06379px at 51.59px) and fully round black Menu pill."
colors:
  canvas: "#fffef7"
  ink: "#666666"
  ink-strong: "#000000"
  ink-light: "#aaaaaa"
  primary: "#000000"
  on-primary: "#fffef7"
  white-glass: "#ffffff80"
  fill-pink: "#ffacea"
  fill-mint: "#a5ebd6"
  fill-navy: "#101731"
  ink-sky: "#a5c8eb"
  ink-plum: "#8a0467"
  ink-green: "#03624c"
  brand-pink: "#ee77cf"
  brand-blue: "#009fff"
  brand-orange: "#fc4c00"
  brand-teal: "#48d1d6"
  brand-yellow: "#ffd001"
typography:
  display:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 51.5947px
    fontWeight: 300
    lineHeight: 51.5947px
    letterSpacing: "-2.06379px"
  display-mobile:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 22.8828px
    fontWeight: 300
    lineHeight: 22.8828px
    letterSpacing: "-0.915314px"
  heading:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 61.1492px
    fontWeight: 300
    lineHeight: 61.1492px
    letterSpacing: "-2.44597px"
  subheading:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 19.1091px
    fontWeight: 300
    lineHeight: 26.7528px
    letterSpacing: "-0.764365px"
  body:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 17.1982px
    fontWeight: 300
    lineHeight: 24.0775px
    letterSpacing: "-0.305746px"
  link:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 15.2873px
    fontWeight: 400
    lineHeight: 15.2873px
    letterSpacing: "-0.305746px"
    textTransform: uppercase
  input:
    fontFamily: Switzer, Arial, sans-serif
    fontSize: 15.2873px
    fontWeight: 300
    lineHeight: 21.839px
rounded:
  none: 0px
  pill: 9999px
spacing:
  half-rem: 7.64365px
  three-quarter-rem: 11.4655px
  one-rem: 15.2873px
  one-half-rem: 22.931px
  two-rem: 30.5746px
  four-rem: 61.1492px
  five-rem: 76.4365px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 13.4528px 19.1091px
    height: 44px
    boxShadow: rgba(255, 255, 255, 0.2) 0px 0px 0px 1px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    height: 43px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    padding: 7.64365px 11.4655px 0px 0px
    height: 64px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    height: 721px
---

## Overview

Creative Giants is the website of Creative Giants Art Ltd, a Brighton, UK studio that makes "immersive activations" and "public art interventions" (page title "Creative Giants | Immersive Activations & Public Art Interventions UK"). It is a portfolio-and-enquiry site: a header with a round "G" badge and the tagline "UNIQUE PUBLIC INTERVENTIONS // IMMERSIVE ACTIVATIONS", a black "Menu" pill, a giant condensed "CREATIVE GIANTS" wordmark, a showreel hero ("PLAY SHOWREEL") with the label "BRIGHTON, UNITED KINGDOM" and the line "Production, design, and the art of the possible.", then a cream "What we do" statement, three stats, a black project carousel, testimonials, news and a contact form.

The copy is plain and confident. "We are artists, designers, producers, creatives, clients and technicians." The stats read "100+ Years of combined experience in creative production, design.", "2.5m People reached annually through art experiences and installations." and "20+ Large-scale projects delivered for festivals, agencies, and brands." Projects are numbered ("Project 01 Halo Masterpiece", "Project 02 Impossible to ignore", "Project 03 Silent Fall", with a "[ 1 / 6 ]" counter and "View all projects"). Section calls to action include "Learn more", "Get Started", "Let's make things happen." and "send enquiry". The footer repeats the tagline and credits the site: "Website by Phunk".

The page is 10,481px tall with 617 visible elements at 1280px. The design is typographic and photographic: very large light type, full-bleed video and photography, and a strict black/cream alternation. There are no shadows, no cards and almost no rounding.

## Colors

- **Canvas `#fffef7`** is the declared `--brand--white` and the body background (area weight 5,391); the cream sections and the form fields use it.
- **Ink `#666666`** is the most-read text colour (1,472 characters) and the declared `--neutral--neutral`; the paragraph copy is set in it. **Strong ink `#000000`** (734 characters) is for headings, the header tagline and links. **Light ink `#aaaaaa`** (361 characters) is `--neutral--neutral-light`.
- **Primary `#000000`** fills the "Menu" pill, the "SEND ENQUIRY" button and the footer, and is the black section background (area weight 7,128, the largest). **On-primary `#fffef7`** is text on black (818 characters), including the hero heading.
- **White glass `#ffffff80`** (area weight 1,011) is a half-transparent white fill.
- **Project colour pairs.** Three equal-area background fills (623 each) were measured, `#ffacea`, `#a5ebd6` and `#101731`, with text colours `#8a0467` (243 characters), `#03624c` (210) and `#a5c8eb` (286). The stylesheet holds many such light/dark pairs, for example `#a5e5eb` / `#103131`, `#ffe0e0` / `#a01414`, `#b0ffb0` / `#103112`, `#f7e8ce` / `#81331f` and `#c4fbed` / `#105f57`. Which page element carries which pair was not isolated.
- **Declared brand scale.** The root variables define `--brand--pink #ee77cf` (dark `#d32f9b`, light `#f9d1f1`), `--brand--blue #009fff` (dark `#007ad4`, light `#b6e2ff`), `--brand--orange #fc4c00` (dark `#cc3502`, light `#ffd3a5`), `--brand--teal #48d1d6` (dark `#1e8f9c`, light `#b0f0f1`) and `--brand--yellow #ffd001` (dark `#d19800`, light `#fffa86`), plus neutrals `#eee`, `#ccc`, `#444`, `#222` and `#111`, and system red `#b42318` and green `#027a48`. None of the five hues was measured on a core interface element; they are carried as declared tokens.

## Typography

A single family, **Switzer**, loaded at weights 300 and 400 with `Arial, sans-serif` as fallback; it covers all 4,124 measured characters. Weight is light (300) on 3,638 characters and regular (400) on 486, the uppercase labels and buttons. Letter-spacing is always negative.

The sizes follow a rem scale declared in the root variables (`--_typography---font-size--main: 1rem`, `large: 1.125rem`, `small: .875rem`, `h1: 5.25rem`, `h2: 4.625rem`, `h3: 4rem`, `h4: 3.375rem`, `h5: 2.75rem`, `h6: 2.125rem`, and letter-spacings `-.02em` and `-.04em`), and the measured pixel sizes equal those multiples of a 15.2873px root: 15.2873px (1rem), 17.1982px (large), 13.3764px (small), 51.5947px (h4), 61.1492px (h3), 80.2584px (h1), 32.4855px (h6).

- **Display, 51.5947px / 300, line-height equal to size, -2.06379px tracking:** the hero line "Production, design, and the art of the possible." in `#fffef7`. Mobile: 22.8828px / -0.915314px.
- **Heading, 61.1492px / 300, -2.44597px:** "We are artists, designers, producers, creatives..." in black. Mobile: 30.5105px.
- **Subheading, 19.1091px / 300, line-height 26.7528px, -0.764365px:** news and project titles such as "CALM Missed Birthdays Wins Big".
- **Body, 17.1982px / 300, line-height 24.0775px, -0.305746px:** the paragraph in grey; mobile 15.2552px / 21.3573px.
- **Link and label, 15.2873px / 400, uppercase, -0.305746px:** the header tagline and the "SEND ENQUIRY" label.
- **Giant sizes.** 80.2584px (98 characters, -3.21033px tracking) and 13.3764px (1,264 characters, the most numerous size).

**Substitutes.** Switzer is loaded by the site and the declared fallback is Arial.

## Layout

The page alternates cream (`#fffef7`) and black sections edge to edge with large photography and video. A 1,120px-tall hero block holds the tagline, the "BRIGHTON, UNITED KINGDOM" label and the white display line at the lower left over an aerial city image. The cream "What we do" section sets a very large left-aligned statement, then a narrower indented paragraph and three stat columns with line icons. Projects sit on black with a numbered label ("Project 01"), a large title and an image offset to the right.

Spacing is rem-based on the fluid root: gaps of 11.4655px (35 uses), 7.64365px (34), 15.2873px (34), 22.931px (28) and 61.1492px (12); paddings of 30.5746px (47), 7.64365px (18), 15.2873px (10), 45.8619px (6) and 107.011px (5). The header sits flush at the top with the badge at the left and the Menu pill at the right.

## Elevation & Depth

There is almost none. The only measured shadow is `rgba(255, 255, 255, 0.2) 0px 0px 0px 1px` (2 uses), a hairline white ring on the black Menu pill. Depth comes from full-bleed imagery, black/cream section changes and a translucent white fill (`#ffffff80`).

## Shapes

Everything is square (0px) except the pills: the computed radius `1280px` (10 uses) makes the "Menu" button fully round; the same value at 390px is `390px`. The round "G" badge is a circle. The "SEND ENQUIRY" button measures 0px radius.

## Components

- **Menu pill.** Black fill, `#fffef7` 17.1982px / 300 label, padding 13.4528px 19.1091px, height 44px, width 82px, with the ring shadow; the label toggles between "Menu" and "Close".
- **Enquiry button.** Black rectangle, `#fffef7` uppercase 15.2873px / 400 text, 175px by 43px, "SEND ENQUIRY".
- **Header tagline link.** Uppercase 15.2873px, black on cream, 277px wide.
- **Form field.** `#fffef7` background, black 15.2873px / 300 text, 64px high, 346px wide, padding 7.64365px 11.4655px 0 0 (labels: First name, Last name, Email Address, Phone number, Project details).
- **Project block.** A numbered label, a large title, a one-sentence description and credits (client and agency names), over a photograph.
- **Footer.** Black, 721px high, `#fffef7` text, address and e-mail, links Home, Projects, What we do, Latest News, Get in touch, and the credit "Website by Phunk".

## Design System Architecture

Creative Giants publishes no design system or brand guideline; the page opened at https://creativegiants.art/ contains none. The site is built in Webflow with a Relume-style variable system: root variables are named `--brand--*` (colour scales), `--neutral--*`, `--system--*`, `--_theme---*` (link, background, text and button roles such as `--_theme---button-secondary--button-icon`), and `--_typography---font-size--*` and `--_typography---letter-spacing--*`. `--_typography---font--primary-font` is `Switzer, Arial, sans-serif`. Font faces declared include `Switzer`, `swiper-icons` and `webflow-icons`.

## Do's and Don'ts

- Do alternate `#fffef7` and `#000000` sections, with `#666666` paragraph copy on cream.
- Do set everything in Switzer at weight 300 (400 for uppercase labels) with negative letter-spacing.
- Do keep the Menu button a full pill and all other corners square.
- Do let the hero and project imagery run full bleed.
- Don't add shadows, cards or borders beyond the 1px white ring on the Menu pill.
- Don't use the declared brand hues as interface fills unless a measured element uses them.

## Responsive Behavior

Measured at 390px: the h1 is 22.8828px / 300 (desktop 51.5947px); the h2 is 30.5105px (desktop 61.1492px); body is 15.2552px / 21.3573px; the Menu pill keeps 44px by 82px with padding 13.4246px 19.069px; the hero block measures 763px high (desktop 1,120px). Mobile font sizes by characters: 13.3483px (1,407), 15.2552px (1,305), 22.8828px (731), 17.1621px (338), 30.5105px (163), 38.1381px (98). Band layout at 390px was not measured.

## Iteration Guide

1. Set canvas `#fffef7`, ink `#666666`, strong ink and primary `#000000`.
2. Use Switzer 300 with the measured pixel tracking from the tokens (-2.06379px at 51.5947px equals the declared -.04em).
3. Build the header with a round badge, an uppercase tagline and a black 44px pill.
4. Alternate cream and black full-bleed sections; show numbered projects on black.
5. Add colour only as a per-project fill/ink pair from the measured pairs; measure new pairs before use.
