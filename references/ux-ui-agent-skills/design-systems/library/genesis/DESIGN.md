---
version: alpha
name: Genesis
category: "Automotive"
description: "Genesis (genesis.com/worldwide/en) is a luxury automotive site in GenesisSansHeadKr weight 300 (48px) and GenesisSansTextKr (14px body), with near-black #111111 2px-radius buttons, a translucent black header, white-on-photography captions, #535356 body text, copper #af6249 press labels and 4px-radius model cards."
colors:
  canvas: "#ffffff"
  ink: "#535356"
  primary: "#111111"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-footer: "#7f7f85"
  accent-copper: "#af6249"
  ink-date: "#69696e"
  nav-bg: "#000000b3"
typography:
  display:
    fontFamily: GenesisSansHeadKr, "Noto Sans", -apple-system, "system-ui", "Apple SD Gothic Neo", "Segoe UI", Roboto, sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 62px
    letterSpacing: "-0.48px"
  display-mobile:
    fontFamily: GenesisSansHeadKr, "Noto Sans", -apple-system, "system-ui", "Apple SD Gothic Neo", "Segoe UI", Roboto, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 44px
    letterSpacing: "-0.32px"
  body:
    fontFamily: GenesisSansTextKr, "Noto Sans", -apple-system, "system-ui", "Apple SD Gothic Neo", "Segoe UI", Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: GenesisSansTextKr, "Noto Sans", -apple-system, "system-ui", "Apple SD Gothic Neo", "Segoe UI", Roboto, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: GenesisSansTextKr, "Noto Sans", -apple-system, "system-ui", "Apple SD Gothic Neo", "Segoe UI", Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 9px
  lg: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.surface-black}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-footer}"
    padding: 48px 0px 60px
---

## Overview

The worldwide English home page of Genesis (https://www.genesis.com/worldwide/en, title "Official Genesis Worldwide | Luxury Sedans, SUVs & EVs", measured at 1280px wide and 3685px tall) is a cinematic luxury-automotive page. A full-bleed dark landscape hero shows a GV80 on a dirt road, with the small eyebrow "GENESIS", the model name "GV80" in white 48px light-weight type, the tagline "With Sense and Sensibility", a "Discover More" text link with a chevron, and carousel dots with a pause control. A translucent black header (58px) floats over it with the winged Genesis logo at the left and a globe (country/language) icon and menu icon at the right. Below, a white field holds a horizontally scrolling row of tall rounded model cards (GV60 "Take your Wonder Further", G70 Shooting Brake "The Way I am", G70 "Move Like No Other") whose photographs fade to black at the bottom under white captions; then "EXPLORE GENESIS NEWS" in uppercase light type, a black "Visit Genesis Newsroom" button with previous/next arrow circles, and three press-release cards with a copper "Press Release" label, a date (2026.10.07), an uppercase headline and a grey excerpt.

The voice is aspirational and short: model names with poetic taglines, restrained calls to action ("Discover More", "Read More"), and news headlines set in capital letters. The footer is #111111 with grey links (Home, Terms of Use, Country / Language) and a copyright line.

## Colors

The page alternates white sections with near-black imagery. `{colors.primary}` (#111111) is the button and footer fill (389 area weight, the dominant measured background) with `{colors.on-primary}` (#ffffff) text; `{colors.surface-2}` (#000000) and `{colors.nav-bg}` (#000000b3, the translucent header) cover the top bar; `{colors.surface-3}` (#7f7f85) is the grey footer text on #111111. A near-white #f5f5f5cc appears as a translucent surface (11 area).

Text: `{colors.ink}` (#535356, 1194 characters) for excerpts and body, #111111 (823) for headings on white, white (769) over photography, #000000 (216), `{colors.accent-copper}` (#af6249, 130) for the "Press Release" label and `{colors.ink-6}` (#69696e, 100) for dates. Root variables describe a Material-3-style tonal scale (for example `--grey-spectrum-60` #69696e, `--grey-spectrum-90` #252527, `--primary-highest` #3a3a3c, `--surface-lowest` #fafafb, `--badge-container` #f0e6e3, `--on-primary-high` #929296). The measured nav-link text colour #0000ee is a browser default link colour, not a brand colour, and is dropped.

## Typography

Two proprietary Genesis families are loaded: GenesisSansHeadKr (weights 300 and 400, 875 characters) for headings and GenesisSansTextKr (400, 500, 700; 2456 characters) for text, with fallbacks "Noto Sans", system fonts and Apple SD Gothic Neo. By weight: 400 (3109 characters), 500 (133), 300 (53), 700 (36). The display is 48px/62px weight 300 with -0.48px tracking (the "GV80" title); section titles are 40px with -0.4px tracking (45 characters, uppercase in the capture). Body is 14px/22px weight 400 (the most common size, 1625 characters), with 18px (753), 16px (414), 15px for buttons (24px line-height), 13px, 22px, 12px, 19px and 13.3333px (system-button size) also present. On mobile the hero drops to 32px/44px with -0.32px tracking, body to 13px/20px and the main size is 13px (1825 characters), with 28px headings.

## Layout

The header is 58px high on desktop and 56px on mobile. The hero fills the first viewport (about 800px tall in the DOM, body height 800 at measurement). The model-card carousel bleeds off both edges so adjacent cards are cropped; content below aligns to the page margin; the footer is 294px tall with 48px 0px 60px padding. Measured gaps: 20px (11), 32px, 10px, 6px, 14px, 24px, 26px, 30px, 16px; paddings 32px (25), 40px (12), 30px (6), 140px, 289.984px and 290px for the centred container. Three-up news cards follow the carousel.

## Imagery and Content

Photography is moody and filmic: low-key landscapes with a single vehicle in motion, side-on studio-quality shots of each model against architecture (a concrete wall, an ornate stone facade with wooden doors, a racetrack pit building at dusk) and editorial news images such as a silhouetted portrait lit by a lantern, an orange endurance race car and sculptures outside a museum. Cars are shown in muted greys and blues so the black gradient and white captions dominate. News entries combine corporate sponsorship (cinema, motorsport, art) with product news, set in uppercase headlines to match the formal luxury tone. The accessibility skip links at the top of the DOM ("Skip to gnb menu", "Skip to main content") show a conventional global-navigation structure behind the minimal visible header.

## Elevation & Depth

No box shadows or borders were measured. Depth is produced by photography and gradients: dark overlays at the bottom of model cards and the hero make white text legible, and a translucent black header blurs into the image. The hover state on the language button adds a translucent grey fill (rgba(83, 83, 86, 0.6)).

## Shapes

Radii: 4px (27 elements, cards and small controls), 50% (4, circular arrow buttons), 9px, 20px, and 2px. The primary button has a 2px radius, near-square, with the model and news imagery at a slightly larger rounding of about 4px according to the dominant measured value.

## Components

- Primary button ("Visit Genesis Newsroom"): #111111 fill, white 15px/24px text, 2px radius, 0px 24px padding, 48px high, 260px wide (200px by 40px at 13px on mobile).
- Text link ("Discover More"): white 15px/24px, with a chevron, 117px wide.
- Model card: tall photograph, 4px radius, bottom black gradient, white 22px-scale name and a 13px tagline.
- News card: image on top, copper "Press Release" label with grey date, uppercase headline, #535356 excerpt, "Read More" link.
- Arrow buttons: circular (50%), light grey #f5f5f5-tinted fill with an arrow icon.
- Header: translucent black bar with logo and globe/menu icons; language button hover fill rgba(83, 83, 86, 0.6).

## Design System Architecture

No public design-system or brand page was opened. The CSS publishes a Material-3-flavoured token layer as root variables: `--primary-*`, `--surface-container-*`, `--on-primary-*`, `--outline-ultimate` (#3a3a3c), `--grey-spectrum-0` to `--grey-spectrum-90` and `--badge-container`, which suggests a tonal grey scale with a single copper badge accent. The page also contains accessibility skip links ("Skip to gnb menu", "Skip to main content"). Values here are taken from rendered elements.

## Do's and Don'ts

- Do set large type in GenesisSansHeadKr weight 300 with slightly negative tracking.
- Do use black and #111111 for controls, white for text over photography and #535356 for body.
- Do give cards near-square corners (4px) and a dark gradient under white captions.
- Do use the copper #af6249 only for small editorial labels.
- Don't use #0000ee or other default link colours.
- Don't add shadows or borders; none were measured.
- Don't use bold for headings; heading weight is 300.

## Responsive Behavior

At 390px the hero title is 32px/44px weight 300 with -0.32px tracking, the body 13px/20px (298px wide), the primary button 13px/20px with 0px 24px padding, 200px by 40px, and the header 56px. Sizes by characters on mobile: 13px (1825), 16px (933), 14px (319), 18px (109), 11px (60), 28px (45), 13.3333px (32), 32px (8). Carousel, menu and card stacking behaviour were not measured.

## Iteration Guide

1. Start with a full-bleed dark photograph and a 48px weight-300 white model name.
2. Use #111111 buttons with 2px radii, 48px high, and white 15px text.
3. Present models as tall 4px-radius cards that fade to black under white captions.
4. Keep body text 14px/22px in #535356; dates in #69696e; labels in copper #af6249.
5. Hover colour for buttons, dark mode and motion were not measured beyond the language-button hover.
