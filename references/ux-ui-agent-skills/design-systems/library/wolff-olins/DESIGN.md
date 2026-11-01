---
version: alpha
name: "Wolff Olins"
category: "Agencies & Studios"
description: "Global brand consultancy site: white and black with grey text ramp and one acid yellow #fff84b footer, Untitled Serif statement at 64px with -1.76px tracking, Monument Grotesk 20px and 16px interface text, full-bleed project carousel and pill-shaped controls."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#fff84b"
  surface: "#fff84b"
  surface-2: "#6aaae4"
  ink-2: "#616161"
  ink-4: "#959595"
  ink-5: "#5e5e5e"
typography:
  display:
    fontFamily: Untitled-Serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1.76px"
  display-mobile:
    fontFamily: Monument-Grotesk
    fontSize: 35px
    fontWeight: 400
    lineHeight: 38.5px
  heading:
    fontFamily: Monument-Grotesk
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: Monument-Grotesk
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 28px
  sm: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 28px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-5}"
    padding: 0px 62px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 8px
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
---

# Wolff Olins

## Overview

wolffolins.com is the website of Wolff Olins, a global brand consultancy, titled "Global Brand Consultancy — Wolff Olins". The measured home page is 6777px tall at 1280px wide. A white header holds the hand-drawn "Wolff Olins" wordmark at left and the links Work, About, News, Contact and a search icon at right. Under it a full-bleed rotating project carousel (counter "03/12" in the capture, a client name and a one-line headline such as "Benefit — Blazing new trails in beauty") fills the first screen. A large serif statement follows: "We create transformative brands that move businesses, people and the world forward." with the words "businesses", "people" and "the world forward" underlined as links. Next come a play-button video block, a "Selected Work" grid (Sandals & Beaches Resorts, Lloyds, Decathlon, Benefit, Blank Street), news items, and a yellow footer panel reading "Talk to us or ask us anything."

The page is restrained: white ground, black type, a neutral grotesque for interface text and a serif for the big statement, so that client work (saturated brand imagery) supplies the colour. The only interface hue is acid yellow `#fff84b`, used on the footer and on the play triangle.

The opened homepage lists twelve carousel projects: Blank Street ("Adding a spark to the coffee run"), Sandals & Beaches Resorts ("Rooted In Caribbean Soul"), Lloyds, Decathlon, Benefit, Ubisoft Anno, Bite Back, Patreon, LG Electronics, New York Botanical Garden, Bergdorf Goodman and The Met. A featured news block follows with six items, and the footer ends with a "Back to top" link and social links to LinkedIn, X, Instagram and YouTube. Copy is short and confident, in sentences that state what the studio does ("We create transformative brands...") and client headlines written as one memorable line.

## Colors

- `canvas` `#ffffff` is the page background. `ink` `#000000` is the primary text colour (1207 measured characters), while the greys `ink-2` `#616161` (1141 characters, body copy), `ink-4` `#959595` (461 characters, secondary labels and thin rules) and `ink-5` `#5e5e5e` (nav text, 20 characters) carry the hierarchy. White `#ffffff` text (582 characters) appears over imagery.
- `primary` is the acid yellow `#fff84b`, which fills the 800px footer panel (1024 area units) and appears as the video play triangle. The generated role detection had assigned `primary` to white because no button was found; it is reassigned to the measured yellow, and white remains as `canvas`.
- `surface-2` `#6aaae4` is a light blue measured on a small element (3 units) and is kept as measured without a specific role.
- The site's own CSS variables express the greys as `--page-fg-100` (black), `--page-fg-200` (rgb 36.954%) and `--page-fg-300` (46.633%).
- Client imagery (greens, pinks, oranges) is project content and is not interface colour.

## Typography

Three faces are in use. Monument-Grotesk (weights 400 and 500) is the interface and body face (3321 characters): navigation and links at 16px with a 24px line height, section labels and card titles at 20px with a 22px line height, body at 20px with a 24px or 30px line height. A 55px size appears for 440 characters (carousel and headline lines) and 35px (line height 38.5px) is the carousel headline on the measured mobile pass.

Untitled-Serif (weight 400, 79 characters) sets the large statement at 64px with a 64px line height and -1.76px letter spacing. A custom "WO" font draws the wordmark glyphs at 248.602px (11 characters). By character count 20px dominates (1791), then 16px (724), 55px (440) and 14px (307). Weights are 400 (3381 characters) and 500 (30). Both Monument Grotesk and Untitled Serif are commercial faces; a neutral grotesque and a transitional serif are the nearest alternatives.

## Layout

The CSS declares `--site-max-width` 100rem and `--site-padding` 1.5rem, and the header navigation has 62px side padding (`padding: 0px 62px`). The home page layout is single-column and full-bleed for the carousel and video, with the statement set as a wide paragraph beside its small label "Our Ambition". The "Selected Work" section opens with a thin black rule and a label, then a two-column grid of unequal tiles. The footer is an 800px yellow block. Spacing values measured include 4px, 8px, 12px, 16px, 20px, 24px, 28px, 32px, 40px and 48px, a 4px-based progression.

## Elevation & Depth

Almost flat. One soft shadow was measured on 2 elements, `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px`. Depth otherwise comes from full-bleed photography and video, thin rules (`#959595` 20 uses and `#000000` 2 uses) and the blurred grey video poster.

## Shapes

Radii are `pill` 9999px (24 elements, mainly circular and pill controls such as carousel pagination dots and icon buttons), `sm` 100px (2) and `xs` 28px (1). Photographs and tiles are square-cornered.

## Components

- **nav**: 16px Monument Grotesk links in `#5e5e5e`, black for the current or hovered item, with an 8px horizontal link padding, no background.
- **statement link**: serif text with a black underline whose colour changes on hover from `rgb(0, 0, 0)` to `rgb(119, 119, 119)`; border colour `rgb(191, 191, 191)`.
- **carousel caption**: white 20px client name above a headline, counter such as "03/12" at right.
- **play button**: a yellow triangle over the video poster.
- **selected work tile**: image with a client title and tagline beneath.
- **footer**: `#fff84b` background, black text, "Talk to us or ask us anything." and a "Contact Us" link; further links Cookie Policy, Privacy Notice, Archive and social links.
- **cookie control**: a small round green icon button at the lower left in the capture is a consent control and is not documented as brand UI.

## Design System Architecture

No public design system or brand guideline is linked from https://www.wolffolins.com/ (the opened page lists Work, About, News, Contact, cookie and privacy links and social channels). The de-facto system is a Tailwind-based stylesheet: the shipped CSS carries `--tw-*` variables, a `--site-padding`, `--site-max-width` and `--page-fg-100/200/300` greys, plus a Swiper carousel theme colour that is a library default and not a brand colour. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do set the statement in a serif at 64px with -1.76px tracking, and everything else in the grotesque at 20px or 16px.
- Do keep the interface white, black and grey and let client imagery add colour.
- Do use acid yellow `#fff84b` for the footer and the play triangle.
- Do underline linked words inside statements and shift them to grey on hover.
- Don't add buttons, cards or heavy shadows.
- Don't treat the cookie icon or the Swiper default `#007aff` as brand UI.
- Don't use more than weights 400 and 500.

## Responsive Behavior

The extraction's mobile pass recorded the carousel headline "Blazing new trails in beauty" at 35px with a 38.5px line height in Monument-Grotesk, 350px wide, and the "Our Ambition" label at 20px. Other mobile behaviour (navigation, grid stacking, touch targets) was not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#ffffff`, `#000000`, greys `#616161` and `#959595`, and the single accent `#fff84b`.
2. Set the statement in a serif at 64px with -1.76px tracking, interface text in a grotesque at 16px and 20px.
3. Make the first screen a full-bleed project carousel with a counter.
4. Close the page on a yellow footer with a one-line invitation to talk.
5. Re-run the extractor and gate after changes.
