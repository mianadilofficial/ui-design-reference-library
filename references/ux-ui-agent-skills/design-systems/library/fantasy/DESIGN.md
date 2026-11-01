---
version: alpha
name: Fantasy
category: "Agencies & Studios"
description: "Fantasy (fantasy.co), an AI-native digital product design agency: a black #000000 stage with white #ffffff text, one custom sans at weight 400 in 18px and 40px with negative tracking, a 10px radius on media frames and a Menu pill, dark device renders and client logos as the only colour."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#ffffff"
  hairline-dark: "#0000001a"
  footer-black: "#000000e6"
typography:
  display:
    fontFamily: sans
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: "-0.18px"
  display-mobile:
    fontFamily: sans
    fontSize: 18.1395px
    fontWeight: 400
    lineHeight: 25.3953px
    letterSpacing: "-0.181395px"
  heading:
    fontFamily: sans
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-0.8px"
rounded:
  xs: 10px
spacing:
  s1: 6px
  s2: 12px
  s3: 14px
  s4: 20px
  s5: 28px
  s6: 30px
  s7: 32px
  s8: 35px
  s9: 40px
  s10: 46px
components:
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.footer-black}"
    textColor: "{colors.page-largest}"
---

## Overview

Fantasy (https://fantasy.co/, title "Fantasy | AI-Native Digital Product Design Agency") is a design agency site that works as a dark showroom. The capture opens on a full-height black hero: the white X-shaped Fantasy logo mark with the letter-spaced wordmark "FANTASY" at the top left, a dark "Menu" pill at the top right, a vertical video of a blue phone interface at the centre, the line "Lead by Design" at the bottom left with a downward arrow at the bottom right, and a client logo card ("Microsoft") hanging from the lower right edge of the hero. Below it, a white section with a statement block (the measured h2 begins "We are Fantasy. The creative partner behind the world's bigg…") and then a large rounded black frame showing a rendered phone covered in app icons (Facebook, Google Play, WhatsApp, Spotify, Instagram, Messenger and others). The footer message, measured in the extraction, reads "Let's talk. We'd love to hear from you."

The site is a showcase for product work, so the interface itself is monochrome and recedes: black, white, a hairline and large imagery. Colour comes only from the project media and client logos. The tone is brisk and confident with short phrases ("Lead by Design", "Let's talk.").

## Colors

- Page-largest `#000000` is the dominant background (area weight 3347): the hero, header and footer region. Ink `#000000` is the text colour on white sections (73 characters).
- Canvas `#ffffff` is the colour of the white sections between the black stages (area 675) and the body background.
- Primary `#ffffff` is the text colour on black (87 characters): headings, nav and body copy over the dark stage. There is no filled CTA colour; the interface has no brand chroma.
- Footer black `#000000e6` (black at 90%, area 675) is the footer background.
- Hairline dark `#0000001a` (black at 10%) is the divider colour on white sections.
- Declared root variables: `--theme-text: #fff`, `--theme-background: #000`, plus text tints `--theme-text-60: hsla(0,0%,100%,.6)`, `--theme-text-70: hsla(0,0%,100%,.7)` and `--theme-text-15: hsla(0,0%,100%,.15)`; a measured `#ffffff26` (white at 15%) area corresponds to the 15% tint.

The palette is a strict theme pair (text and background) with opacity steps rather than additional hues. The Tailwind ring colour `rgba(59,130,246,.5)` in the root is a framework default and is not a brand colour.

## Typography

A single custom family, referenced in the CSS as `sans` (a font-face alias loaded at weight 500), is used for every one of the 160 measured characters. The measured text weight on roles is 400. The font name is generic so the real typeface is not identified by the stylesheet; no substitute is declared.

Measured scale (desktop):

- Display (the "Lead by Design" line): 18px, weight 400, line height 25.2px, letter spacing -0.18px (-0.01em).
- Heading (the statement and the footer message): 40px, weight 400, line height 44px, letter spacing -0.8px (-0.02em).
- Other frequent sizes by character count: 14px and 16px (the Menu label is 16px).

Type is regular weight throughout; hierarchy is made by size (18px, 40px) and by tracking tightening with size. The root declares a fluid base: `--global-font-size: clamp(1px, calc((100vw/var(--size))*10), var(--clamp))` with `--size: 430` and `--clamp: 10px`, meaning the base unit scales with viewport width up to 10px.

## Layout

The page is long (scroll height 13599px at 1280px) and alternates black and white bands. The header is a 110px-high black bar (measured nav role) holding the logo and a Menu button. Media frames run nearly edge to edge in the capture. The hero uses a centred vertical video, left-aligned label and right-aligned arrow. Spacing values measured: 6, 12, 14, 20, 28, 30, 32, 35, 40 and 46px. The footer is 528px high.

## Elevation & Depth

No box shadows or borders are measured. Depth is made by light: the hero video glows in blue against black, the rendered phone in the white section sits in a black frame, and a gradient transition fades the frame into the white band at its lower edge. The client logo card at the hero's lower right overlaps the boundary between black and white sections.

## Shapes

One radius is measured: 10px (xs); the elements carrying it are not individually identified. The capture shows rounded corners on the Menu pill, the project frame and the client card. Everything else is a rectangle. The logo mark is an X with rounded corners.

## Components

- Menu button: 16px text, white on a dark pill; the measured nav role has a black background and white text.
- Hero label: "Lead by Design" in 18px white with an arrow icon.
- Logo mark and wordmark: white X shape plus the letter-spaced word "FANTASY" in small caps-style tracking.
- Client card: a black rounded tab with a white client logo (Microsoft in the capture).
- Project frame: a large black rounded rectangle with a product render.
- Footer: `#000000e6` background, 40px white message "Let's talk. We'd love to hear from you."
- There are no buttons, forms or cards with borders in the measurement; the extractor found no primary CTA.

## Design System Architecture

No public design system or brand guideline was found: the page https://fantasy.co/ was opened and has no link to a design system, brand guideline, press kit or GitHub organisation, so none is cited. The de-facto system is a Tailwind project with a theme layer: the root carries Tailwind ring and shadow variables (`--tw-*`) and a small set of custom properties (`--theme-text`, `--theme-background`, `--theme-text-60`, `--theme-text-70`, `--theme-text-15`, `--global-font-size`, `--size`, `--clamp`). Sections switch between dark and light themes by swapping the `--theme-*` pair, and type scales with a viewport-based global font size referenced to a 430px design width.

## Do's and Don'ts

Do:
- Use black `#000000` and white `#ffffff` as the whole interface palette, with opacity steps for secondary text.
- Set all type at weight 400 in one sans, with tracking of -0.01em at 18px and -0.02em at 40px.
- Frame media in black rounded rectangles (10px radius token) and let it supply colour.
- Alternate black and white bands.

Don't:
- Add accent colours or filled coloured buttons.
- Add shadows or borders; none are measured.
- Use the Tailwind default ring blue as a brand colour.
- Put heavy weights on headlines; the measured headline is regular.

## Responsive Behavior

Measured with the 390px mobile pass: the first text role "Lead by Design" is 18.1395px at weight 400 on 25.3953px with -0.181395px letter spacing, white; the statement h2 is 29.9302px; the nav bar measures 100px high on a black background; frequent mobile font sizes by character count are 18.1395px, 29.9302px, 13.6047px and 16.3256px. These fractional sizes follow from the root `--global-font-size` rule, which scales with viewport width over a 430 reference. Menu, media and layout changes at mobile width are not otherwise measured.

## Iteration Guide

1. Build a black stage with white text and a white section for contrast; store them as a text and background pair.
2. Use one sans at weight 400: 18px with -0.01em for labels and 40px with -0.02em for statements.
3. Show work in large rounded frames with no borders or shadows.
4. Add a single dark Menu pill at the top right and a letter-spaced wordmark at the top left.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=fantasy --url=https://www.fantasy.co --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=fantasy`.
