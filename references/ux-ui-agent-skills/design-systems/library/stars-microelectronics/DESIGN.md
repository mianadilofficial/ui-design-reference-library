---
version: alpha
name: "Stars Microelectronics"
category: "Thai Brands"
description: "Stars Microelectronics (Thailand) PCL (starsmicro.com), an EMS, OSAT and photonics manufacturer: Gotham at 80px/500 for the hero and 20px/32px body, #00896b green from the site's own --primary-color, a blue-to-green gradient banner, white and #1e1e1e text, small 4-10px radii and a slanted white logo tab."
colors:
  canvas: "#ffffff"
  ink: "#1e1e1e"
  primary: "#00896b"
  surface-2: "#00896b"
  ink-3: "#ffffff80"
  hairline: "#f8f9fa"
  nav-link-text: "#000000e6"
typography:
  display:
    fontFamily: Gotham, sans-serif
    fontSize: 80px
    fontWeight: 500
    lineHeight: 96px
  display-mobile:
    fontFamily: Gotham, sans-serif
    fontSize: 44.8px
    fontWeight: 500
    lineHeight: 53.76px
  heading:
    fontFamily: Gotham, sans-serif
    fontSize: 43.84px
    fontWeight: 500
    lineHeight: 52.608px
  body:
    fontFamily: Gotham, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  link:
    fontFamily: Gotham, sans-serif
    fontSize: 13.6px
    fontWeight: 400
    lineHeight: 21.76px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
spacing:
  s1: 4px
  s2: 6.8px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 13.6px
  s7: 16px
  s8: 20px
  s9: 23.04px
  s10: 24px
components:
  link:
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
    padding: 0px 15px 0px 50px
  footer:
    textColor: "{colors.canvas}"
    padding: 48px 0px 16px
---

# Stars Microelectronics

The measured page is `https://www.starsmicro.com/`, titled "Stars Microelectronics (Thailand) PCL • Home", English, 3,122px tall with 292 visible elements. The footer reads "STARS MICROELECTRONICS (THAILAND) PUBLIC COMPANY L...". The page presents a Thai electronics manufacturer's services (EMS, OSAT, Photonics and engineering service) to business customers and investors. Top to bottom in the capture: a white slanted logo tab and a navigation row over a full-width dark-blue particle-network hero reading "STARS Microelectronics"; a gradient banner with the tagline "Unleashing Thai Innovation. Transforming Smarter Humanity."; the heading "BUSINESS & SERVICE" above four dark photo tiles (OSAT, EMS, PHOTONICS, ENGINEERING SERVICE) each with a line icon; "STARS MOVEMENT" with HIGHLIGHTS and LATEST NEWS cards; and "MARKET INDUSTRIES" with text ("We deliver world-class EMS, OSAT, and Photonics solutions across 7 high-impact industries.") and industry photos.

## Overview

The identity is technology-blue to growth-green. Large gradient-filled section headings (BUSINESS & SERVICE, STARS MOVEMENT, MARKET INDUSTRIES) shift from blue to green in the capture, the tagline band and the LATEST NEWS card use the same blue-to-green gradient, and the Contact US tab at the top right is green. The only solid brand color measured is `#00896b`; the gradient's end colors were not measured. Imagery is cool and technical: macro photography of wafers, circuit boards and glowing fibre-like lines, with white outline icons. Headings are uppercase and widely spaced in look; body text is set generously (line-height 1.6). The voice is corporate and mission-driven.

Content in the capture is organised around business lines and proof points. Under STARS MOVEMENT, a HIGHLIGHTS card announces "Join us at Electronica Munich 2026" with a booth graphic, and LATEST NEWS lists two stories with truncated titles (the STARS ARENA innovation contest and an environmental conservation activity by the SMT team). MARKET INDUSTRIES leads with a paragraph, then a row of tall photographs (medical monitoring, audio electronics, components) offset vertically, one with a small white plus button at its lower right. Headings are short uppercase noun phrases; paragraphs are one or two sentences.

## Colors

Background areas measured: `#21252940` (area weight 531, a translucent dark scrim over imagery), `#ffffff` (15), `#00896b` (11). Text by characters: `#ffffff` (774), `#1e1e1e` (262), `#ffffff80` (67), `#00896b` (2).

- `canvas` `#ffffff`; `ink` `#1e1e1e` (CSS `--font-100`), the body text on white; `ink-3` `#ffffff80` text on dark; `nav-link-text` `#000000e6` on the white logo tab.
- `primary` and `surface-2` `#00896b`: the green declared as `--primary-color: #00896B` in the stylesheet root; the Contact US tab fill (in the capture) and the color of the two characters of green text measured.
- `hairline` `#f8f9fa`: a border color on one element.

The generated file had set `primary` to `#0d6efd`, the Bootstrap default link color (`--bs-primary: #0d6efd`, also `--swiper-theme-color: #007aff` for slider controls), which is a framework default and not a brand color; it was replaced by the site's declared `--primary-color`. Other brand variables declared in `:root`: `--secondary-color #8fa7b5`, `--accent-color #f4f6f8`, `--highlight-color #ffefeb`, `--muted #8C8C8C`, `--font-400 #D6D7D9`, `--font-90 #2d2c3c`, `--font-pulple #292561`, `--text-dark #121417`; they are listed because they are in the shipped CSS, not because the measured elements use them.

## Typography

One family, Gotham (400, 500, 600; declared as `--font-family: "Gotham", sans-serif`), covers all 1,105 measured characters. Weights: 500 (649), 400 (386), 700 (70).

- `display`: 80px, weight 500, line-height 96px (h1 "STARS"); `display-mobile`: 44.8px, 53.76px.
- `heading`: 43.84px, weight 500, line-height 52.608px (h2 "Microelectronics").
- `body`: 20px, weight 400, line-height 32px (`--font-size-base: 20px`, `--line-height-base: 1.6`).
- `link`: 13.6px, 400, line-height 21.76px; navigation labels are 13.6px at weight 500, uppercase.

Other measured sizes: 20.16px (247 characters), 15.2px (190), 16px (148), 36.16px (110). The CSS defines fluid type with `clamp()`: `--fs-dp-1: clamp(2.8rem, 5vw + 1rem, 5.25rem)`, `--fs-dp-2: clamp(2.2rem, 3.5vw + 1rem, 4rem)`, `--fs-h1` to `--fs-h6`, `--fs-small` and `--fs-small-12`. Letter-spacing is `normal` in the measurement.

## Layout

The header is 103px tall: a white slanted tab at the left holding the logo (its edge is skewed, `transform: matrix(1, 0, -0.57735, 1, 0, 0)`, a 30-degree shear), navigation labels (ABOUT STARS, OUR BUSINESS, INVESTORS, ESG, NEWSROOM, CAREERS, an EN language selector) in the middle and the green Contact US tab at the right. The hero shows five vertical dot indicators at the right edge. Services are four equal full-height tiles side by side with no gap; STARS MOVEMENT is a white card with a soft shadow in the capture, containing a highlights column and a gradient news panel. Measured gaps: 10px (14 elements), 6.8px (14), 38.4px (4), 8px, 16px (4), 64px (2). Paddings: 12px (14), 25.6px (12), 16px (8), 38.4px (4), 20px (3), 50px (2). The CSS declares fluid spacing: `--space-16: 0.8em`, `--space-30: clamp(14px, 2vw, 30px)`, `--space-50: clamp(20px, 3.5vw, 50px)`, `--space-100: clamp(45px, 6vw, 100px)` and `--space-130`.

## Elevation & Depth

No box shadow was measured by the extractor (`boxShadows` is empty), although the STARS MOVEMENT card in the capture shows a soft edge. Depth in the hero comes from a `#21252940` scrim and the glowing photography; the news panel and tagline use gradient fills.

## Shapes

Radii measured: `10px`, `8px` and `4px`, one element each. Tokens `xs 4px`, `sm 8px`, `md 10px`. The service tiles and header are rectangular; the logo tab is a skewed polygon rather than a rounded one.

## Components

- **Logo tab**: white, skewed edge, "STARS MICROELECTRONICS" logotype with a two-tone S mark.
- **Navigation**: white 13.6px/500 uppercase labels on the hero; `nav` text `#ffffff`.
- **Contact tab**: green rectangle at the top right with a chat icon and "Contact US" in white.
- **Service tile**: dark photograph with a white outline icon and a white 20px uppercase label (OSAT, EMS, PHOTONICS, ENGINEERING SERVICE).
- **News panel**: blue-to-green gradient, white uppercase label "LATEST NEWS", two image cards with truncated white titles.
- **Footer**: white text, 14.4px bold company name, padding `48px 0px 16px`, 334px high.

## Design System Architecture

No official design system or brand guideline was found on the opened page; `_research` records none. The site is built on Bootstrap (`--bs-*` variables in `:root`) with Swiper sliders, and adds a small brand layer of custom properties: colors (`--primary-color`, `--secondary-color`, `--accent-color`, `--font-100`, `--font-400`), a fluid type scale (`--fs-dp-1` to `--fs-h6`, `--fs-small`), a fluid spacing scale (`--space-10` to `--space-130`) and `--font-family`. That layer is the de-facto system.

## Do's and Don'ts

Do use `#00896b` for solid accents and let headings carry a blue-to-green gradient. Do set text in Gotham 500 for headings and 400 at 20px/32px for body. Do place white outline icons over dark technical photography. Do use a skewed white tab for the logo.

Don't use Bootstrap blue as a link or accent color. Don't use heavy shadows. Don't round tiles beyond 10px. Don't state gradient stop colors as brand values without measuring them.

## Responsive Behavior

Mobile pass: h1 44.8px, line-height 53.76px (80px on desktop); h2 44px with 52.8px line-height; body 15px with 24px line-height (20px on desktop); navigation text 15px. Mobile font sizes by characters: 20px (247), 15px (235), 15.2px (190), 18px (148), 30px (110). Layout columns and the mobile navigation pattern are not measured.

## Iteration Guide

1. White canvas, `#1e1e1e` text, green `#00896b`; dark photographic heroes with white text.
2. Gotham only: 80px/500 hero, 20px/32px body, 13.6px/500 uppercase navigation.
3. Four-tile service row, gradient news panel, skewed logo tab.
4. Verify with `node web/scripts/verify-designs.mjs --slug=stars-microelectronics`.
