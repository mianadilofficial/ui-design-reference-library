---
version: alpha
name: "SCBX Group"
category: "Thai Brands"
description: "Dark corporate fintech hub in SCBX proprietary typefaces: #151a1f near-black ground, white #ffffff headings, #aeb3b4 secondary text, #d3adff lavender accent, square 1px white outlined buttons with no shadows and 4px radius only on one element."
colors:
  canvas: "#151a1f"
  ink: "#ffffff"
  primary: "#d3adff"
  surface-dark-a: "#15191a"
  surface-dark-b: "#13191a"
  ink-muted: "#aeb3b4"
  ink-subtle: "#71797c"
  ink-soft: "#e6e8e8"
typography:
  display:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 48.64px
    fontWeight: 400
    lineHeight: 58.368px
    letterSpacing: "-0.7296px"
  display-mobile:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 45.24px
    fontWeight: 400
    lineHeight: 54.288px
    letterSpacing: "-0.6786px"
  heading:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 16.6656px
    fontWeight: 400
    lineHeight: 23.3318px
    letterSpacing: "-0.249984px"
  subheading:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 15.36px
    fontWeight: 400
    lineHeight: 18.432px
    letterSpacing: "-0.2304px"
  body:
    fontFamily: SCBX-Beta2-Regular
    fontSize: 13.3376px
    fontWeight: 400
    lineHeight: 18.6726px
    letterSpacing: 0.24px
  link:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 10.88px
    fontWeight: 500
    lineHeight: 13.056px
    letterSpacing: 0.1632px
  button-secondary:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 13.3376px
    fontWeight: 500
    lineHeight: 16.0051px
    letterSpacing: 0.200064px
  input:
    fontFamily: Conv_SCBXBeta-Regular
    fontSize: 40.96px
    fontWeight: 400
    lineHeight: 65.536px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 2.5px
  s2: 6.4px
  s3: 7.5px
  s4: 8.96px
  s5: 10px
  s6: 12.8px
  s7: 13.93px
  s8: 15px
  s9: 15.36px
  s10: 17.92px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    padding: 13.9264px 6.4px
    height: 46px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 12.8px 6.4px
    borderColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 12.8px 0px 0px
    height: 79px
---

# SCBX Group

## Overview

The measured site is the English home page of SCB X Public Company Limited at scbx.com/en (the document title is "SCB X Public Company Limited | SCBX", language en-US). SCBX describes itself on the page as "the mothership of the financial technology business", and the site is a corporate and content hub built on a dark ground: a top navigation with SCBX Update, SCBX Business, Sustainability, Work with SCBX, About SCBX and Investor Relations (marked with an external-link arrow), a search icon and an EN language selector.

The capture begins with a hero carousel whose visible slide is a black-and-white royal tribute notice with a framed portrait and ornamental serif lettering. It is carousel content set in a different typographic style, not part of the SCBX interface, and it is not documented as brand UI here. A cookie consent popup and its scrim were detected and hidden for measurement (the extractor records `dpdpa--popup` and `scrim dpdpa--popup-bg` as hidden), and re-running the extractor with this handling left the generated tokens unchanged.

Below it: "Get Insights" with the line "Update financial technology trends with our articles", a horizontally scrolling row of bordered article columns (photo, title, author and role, a view count and date such as 06/10/2026), a full-bleed dark tunnel photograph carrying the mission statement ("SCBX is entering the future with the collective innovation and technology from our increasingly diversified group businesses and investment holdings. We are committed to becoming the most admired regional financial technology group.") with an outlined "About SCBX" button, and a light-grey section titled "SCBX as The "Mothership"" with 2025 highlight figures (Total Income 171.6 billion Baht, Net Profit 47.5 billion Baht).

## Colors

The ground is near-black blue-green: `#151a1f` (10112 area weight), `#15191a` (1448) and `#13191a` (983). Secondary areas are light grey `#e4e4e4` (908, the Mothership section), `#555b5d` (735) and `#414648` (227). Text by characters: white `#ffffff` (3868), light grey `#aeb3b4` (654), dark `#15191a` (351, on the light section), `#71797c` (228), `#e6e8e8` (150), lavender `#d3adff` (76), `#cccccc` (60) and `#e2e2e2` (11).

The lavender `#d3adff` is the one accent color found as text. No filled primary button exists in the measurement; the About SCBX button is an outlined control. On hover a circular "Discover" link recorded a fill of `rgb(134, 78, 185)` with a white border and white text. A purple `#643090` appears with zero weight in background areas. Borders are `#ffffff`, `#aeb3b4` and `#707070`. The generator assigned `primary` to the lavender because it was the only chromatic text color measured.

## Typography

SCBX ships its own typefaces: Conv_SCBXBeta in Light (300), Regular (400) and Bold (700), and SCBX-Beta2-Regular, plus Inter at 400, 500 and 700 as a body-level fallback (the body element itself lists Inter, Arial, Helvetica, sans-serif). By characters, Conv_SCBXBeta-Regular carries 2267, SCBX-Beta2-Regular 1584, Light 870, Bold 509 and Inter 168. If these proprietary files are unavailable, Inter is the measured fallback.

Measured roles: h1 "Get Insights" 48.64px at 400 with a 58.368px line height and -0.7296px letter spacing; h2 16.6656px; h3 15.36px; body paragraph 13.3376px in SCBX-Beta2-Regular with 0.24px letter spacing; secondary button label 13.3376px at 500; link 10.88px at 500; search input 40.96px. The most frequent sizes are small: 12.3136px (924 characters), 11.52px (874) and 10.88px (867), then 13.3376px, 17.8176px and 15.36px. Large display type is tracked slightly tight and small type slightly open.

## Layout

The desktop page is 4465px tall. A centered header carries the logo at left and the six navigation items. The insights section is a full-bleed band with five visible columns divided by hairlines, each with a photo, a title and metadata, scrolling off the right edge. The mission section is a full-bleed photograph with centered text and a centered outlined button. The Mothership section changes to a light ground and holds a boxed dark card with highlights. Spacing recorded: 2.5, 6.4, 7.5, 8.96, 10, 12.8, 13.93, 15, 15.36 and 17.92px.

## Elevation & Depth

No box shadows were measured (the list is empty). Depth comes from photography, the dark-to-light section change and a purple glow gradient visible at the top left of the page in the capture; the gradient values were not measured.

## Shapes

Mostly square: the outlined buttons have no radius. Measured radii are 50% (2 uses, the circular hover link) and 4px (1 use). Cards are separated by hairline borders rather than rounded corners.

## Components

- Outlined button ("About SCBX"): transparent, `1px solid #ffffff`, white 13.3376px text at 500, padding `13.9264px 6.4px`, 46px tall, no radius.
- Link button ("Learn More"): `1px solid #ffffff`, 10.88px label at 500, padding `12.8px 6.4px`, 41px tall.
- Search input: white 40.96px text, padding `12.8px 0px 0px`, 79px tall (the "Search in SCBX" panel).
- Article column: photo, three-line title, author line, eye icon with view count, date.
- Hover state: a circular "Discover" link fills `rgb(134, 78, 185)`.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and linked only to a press-release category and theme font assets. The site runs on WordPress with the Avada theme (the shipped CSS includes `--awb-*` custom properties and the Avada font-awesome path), with `--wp--preset--*` variables from WordPress core and an Avada button gradient set. The brand type files (Conv_SCBXBeta, SCBX-Beta2) are loaded as web fonts. The primary-color variables in the theme are hue-based `hsla(276, ...)` values, matching the purple hover.

## Do's and Don'ts

Do keep the page dark (`#151a1f`) with white `#ffffff` headings and `#aeb3b4` secondary text. Do use outlined, square buttons with white 1px borders. Do reserve lavender `#d3adff` for the rare accent and purple for hover. Do track display type tight.
Don't add rounded filled buttons or shadows; none were measured. Don't treat the royal tribute slide, cookie popup or its scrim as brand UI. Don't use Inter as the primary face when the SCBX files are available.

## Responsive Behavior

The 390px mobile pass measured: h1 45.24px at 400 (54px height), h2 "SCBX Update" 31.2px, and body text 17.16px in SCBX-Beta2-Regular (192px block height). Mobile font sizes include 16.6413px, 14.5587px, 20.7987px, 17.16px and 18.72px. The hamburger navigation, column count and hero crop on mobile were not measured.

## Iteration Guide

1. Set the page ground to `#151a1f` with white text.
2. Use Conv_SCBXBeta for headings (48.64px tight) and SCBX-Beta2 for body at 13.3376px.
3. Build square outlined buttons with `1px solid #ffffff`.
4. Use `#e4e4e4` as the single light section with `#15191a` text.
5. Re-measure before adding values.

### Imagery and voice

Article photography is editorial and conceptual: a robotic hand with a payment terminal, chefs in front of a countdown clock, a technician applying an eco-friendly certification sticker to server hardware, rows of glossy brain models, a quantum-themed countdown graphic. Titles are written as full English sentences or questions ("Crypto-Agility: The Recipe to Surviving Q-Day", "AI Is Getting Cheaper. Transformation Isn't.") with a byline that names the author and job title, which gives the content a thought-leadership tone. Corporate statements such as "The Most Admired Regional Financial Technology Group" are set large in light-weight type over a motion-blurred highway photograph with magenta streaks. Numbers in the highlights card are set very large with small unit labels beneath and a green or red year-on-year delta.
