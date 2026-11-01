---
version: alpha
name: Beyond Design Into Experience (Plus X 15th Anniversary)
category: "Portfolio"
description: "Black-and-white scroll-story microsite for Plus X Creative's 15th anniversary: neue-haas-grotesk at 204.8px bold for hero words (-6.144px tracking), 93.44px and 33.28px uppercase statements, 17.92px outlined pill labels (1px border, 14px radius, 27px high), #ffffff and #000000 sections with #4c4c4c and #808080 dimmed text, a 12-column 16px-gap grid and WebGL 3D scenes."
colors:
  canvas: "#ffffff"
  page-body: "#000000"
  ink: "#000000"
  primary: "#ffffff"
  ink-tertiary: "#4c4c4c"
  ink-secondary: "#808080"
  ink-on-dark-muted: "#bbbbbb"
  ink-dim-on-dark: "#4d4d4d"
typography:
  display:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 204.8px
    fontWeight: 700
    lineHeight: 163.84px
    letterSpacing: "-6.144px"
  display-mobile:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 80px
    fontWeight: 700
    lineHeight: 64px
    letterSpacing: "-2.4px"
  headline:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 93.44px
    fontWeight: 500
    lineHeight: 84.096px
    letterSpacing: "-2.8032px"
    textTransform: uppercase
  statement:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 33.28px
    fontWeight: 500
    lineHeight: 33.28px
    textTransform: uppercase
  lead:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 32px
    fontWeight: 450
    lineHeight: 35.2px
  body:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 20.48px
    fontWeight: 450
    lineHeight: 24.576px
  label:
    fontFamily: neue-haas-grotesk-display, sans-serif
    fontSize: 17.92px
    fontWeight: 500
    lineHeight: 19.712px
    letterSpacing: 0.5px
    textTransform: uppercase
  caption:
    fontFamily: neue-haas-grotesk-text, sans-serif
    fontSize: 15.36px
    fontWeight: 500
    lineHeight: 16.896px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 14px
  xl: 20px
  2xl: 22px
spacing:
  s1: 4px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 14px
  s8: 16px
  s9: 22px
  s10: 24px
  gap-40: 40px
  gap-64: 64px
  gap-80: 80px
  gap-100: 100px
components:
  pill-outlined:
    textColor: "{colors.primary}"
    typography: "{typography.label}"
    rounded: "{rounded.lg}"
    height: 27px
    borderColor: "{colors.primary}"
  pill-outlined-light:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.lg}"
    height: 27px
    borderColor: "{colors.ink}"
---

## Overview

`https://15th.plus-ex.com/` is a single-page microsite for the 15th anniversary of Plus X Creative, a Korean brand-experience studio (the page title is "15th Anniversary", the Korean meta description reads "플러스엑스의 15주년", and the footer says "Plus X © 2010-2025"). The measured home page is titled by its own headline, "BEYOND DESIGN INTO EXPERIENCE", and covers 2020 to 2025. This DESIGN.md is named after that measured microsite, which is Plus X's own anniversary site, not the studio's main portfolio.

It is a long, scroll-driven essay (67,354px tall at 1280px wide) in pure black and white. It opens on a black viewport with four giant white words (BEYOND, DESIGN, INTO, EXPERIENCE) staggered left and right, a pill reading "2020—2025" beside a "+X" mark, a pill with a chevron reading "LAST FIVE YEARS OF PLUS X", and a "WATCH FULL VIDEO" pill under a framed video. Sections then alternate black and white: a mission statement in uppercase ("PLUS X CREATIVE® PIONEERED THE INTEGRATION OF BRAND EXPERIENCE..."), a 3D cross with pill labels around it (STRATEGIC, EXPLORATIVE, INTUITIVE, ARTICULATE, ENDURING), a word list (CURIOSITY, INQUISITIVE, EMPATHETIC, CREATIVELY, RATIONAL...), "REBIRTH FROM THE REFUSAL TO STAND STILL", "THE WORLD HAS CHANGED, TREMENDOUSLY." with three notes (NEW TOUCHPOINTS, NEW INDUSTRIES, NEW WORKFLOWS), a client strip (CHANNEL A, COM2US, DORCO, H FASHION), a ShareX section, an "ENVIRONMENT" photo section, a "WORKS" index grouped by industry and an awards block ("97 AWARDS", "56 PROJECTS ACROSS 20 INDUSTRIES"), and a footer with WEBSITE, ARTICLES, SHOWROOM, SHARE X and a contact e-mail.

The voice is manifesto-like and declarative in English capitals: "WE DON'T STAY YESTERDAY WHERE SUCCESS HAPPENED." "JUST REVEAL IT." Photography is mostly grey-toned (a storefront band) with the occasional warm image (a stage projection with orange line art in the ENVIRONMENT section), so the only color comes from the work shown.

The first full-page capture in the repository showed only a loading screen (a black cross on white). The page was re-measured once with the extractor, which produced the hero capture used here; scroll-triggered sections below the first viewport are still blank in that image, so lower sections are described from the page text, scrolled screenshots taken while writing, and the stylesheet, not from the capture.

## Colors

The stylesheet (`https://15th.plus-ex.com/assets/index-DC1dKYHC.css`) declares the whole palette as custom properties: `--text-color-black: #000`, `--text-color-white: #fff`, `--text-trirary-black-is-ready: #4c4c4c` (spelled this way in the source), `--text-secondary-black: #808080`, and `--background-color: #ffffff` with a `#000` override for dark sections.

- **Canvas `#ffffff`** and **page body `#000000`** are the two section grounds; background area is `#000000` 5583 and `#ffffff` 2382 weighted units, so black covers more of the page by DOM area even though the first capture is mostly white.
- **Ink `#000000`** is text on white (1690 weighted characters). **Primary `#ffffff`** is text, borders and the logo mark on black (1730 characters); the white pill outline sits on black.
- **Ink tertiary `#4c4c4c`** (706 characters) colors secondary lines on white, such as the client names under each project group. **Ink secondary `#808080`** (339) colors small metadata such as "Website". On black, **`#bbbbbb`** (425) is the muted client text and **`#4d4d4d`** (111) is the dimmed state of large statements, with one line set in white in the scrolled screenshots.
- A 3D scene and photography add grey gradients, but no hue was measured in any text, border or background.

There is no accent color. Emphasis is made by switching from `#808080` or `#4d4d4d` to full white or black, and by scale.

## Typography

Two families are measured: `neue-haas-grotesk-display` (3387 weighted characters) and `neue-haas-grotesk-text` (1752). The loaded faces recorded by the extractor are display at 400, 500, 600 and 700 and text at 500; the stylesheet itself contains no `@font-face`, and no font-loading link was found in the HTML head, CSS or main JavaScript bundle I opened, so the delivery source is not confirmed. Fallback is `sans-serif`. Weights 450 and 550 also occur (1841 and 116 characters), so the family is rendered at intermediate weights.

Measured text styles (1280px desktop, via computed styles):

| Token | Family | Size / line | Weight | Tracking | Notes |
|---|---|---|---|---|---|
| display | display | 204.8px / 163.84px | 700 | -6.144px | hero words (also `display-mobile` 80px / 64px, -2.4px at 390px) |
| headline | text | 93.44px / 84.096px | 500 | -2.8032px | uppercase, dimmed lines `#808080` or `#4d4d4d` |
| statement | text | 33.28px / 33.28px | 500 | normal | uppercase paragraphs in white or black (a variant has line height 39.936px) |
| lead | display | 32px / 35.2px | 450 | normal | "Touch-points keep multiplying..." |
| body | display | 20.48px / 24.576px | 450 | normal | client and project names |
| label | display | 17.92px / 19.712px | 500 | 0.5px | uppercase pill labels |
| caption | text | 15.36px / 16.896px | 500 | normal | uppercase category tags (a 0.5px tracked display variant also exists) |

Other measured styles: 18px at weight 450 with 0.5px tracking, capitalised ("Episode"), and 18px at weight 550 with 1px tracking, uppercase ("NEW TOUCHPOINTS"); 16px at weight 400 with 1px tracking, uppercase, in `#808080` ("Website"). By weighted characters the sizes are 33.28px (1235), 20.48px (1164), 17.92px (951), 18px (658), 93.44px (387), 204.8px (310), 15.36px (218), 32px (153) and 16px (63). The giant words sit at tight tracking of about -0.03em and tight line height (0.8 of the size).

Font substitutes: none was measured or cited. Rebuild with the same two family names if you have access to them.

## Layout

The stylesheet sets `--grid-columns: 12` and `--grid-gap: 16px` with derived column-span variables (`--grid-1` to `--grid-12`, plus half, third, quarter, fifth and sixth), computed from `100vw`, so every block is placed on a 12-column fluid grid. It also declares 35 spacing variables `--gap8` to `--gap500` (8, 16, 24, 32, 40, 48, 56, 60, 64, 112, 120, 128, 136, 140, 152, 158, 160, 168, 176, 180, 184, 200, 240, 300, 360, 500 and others). Measured gaps in use: 8px (98 elements), 24px (38), 16px (30), 40px (14), 80px (10), 64px (10), 100px (6). Paddings: 16px (122), 13px (46), 4px (11), 32px (11), and large section paddings of 146px, 180px, 240px, 320px, 360px and 400px.

The composition is typographic: hero words are staggered so each line is aligned to the left or right edge (the first line starts left, "INTO" right-aligned, "EXPERIENCE" spanning the width at 1217px). Sections are full-bleed bands with oversized words, small pills scattered around them, and photographs as full-width bands. Project lists give a project name and client in 20.48px text.

## Elevation & Depth

Flat. The measured `boxShadow` list is empty and the CSS corpus lists `0 8px 30px #00000026` and `0 0 0 2px #ffffff4d` once each, but neither was measured on an element. Depth is produced by three techniques: black and white band switching, the dimming of text between `#4d4d4d` and white, and WebGL scenes (the bundle includes `vendor-three`) such as a metallic 3D cross on black. In a scrolled screenshot, the framed video area sits on a vertical black-to-white gradient.

Motion is part of the depth: the stylesheet declares keyframes `slideInFromBottom`, `slideInFromTop`, `slideOutToTop`, `slideOutToBottom` (110% and 130% translations), `showIn` and `hideOut` (90px), `fadeIn`, and the root declares GSAP-style easings (`--power2InOut: cubic-bezier(.65, 0, .35, 1)`, `--power3Out: cubic-bezier(.25, 1, .5, 1)`, `--expoOut: cubic-bezier(.16, 1, .3, 1)` and others), with the bundle importing `vendor-gsap`.

## Shapes

Shapes are rectangles for media and fully rounded outlines for labels. Measured radii: 12px (92 elements), 14px (90), 20px (90), 4px (20), 22px (16) and 8px (2). The pill outline element is 27px high with a 1px solid border (`#ffffff` on black, `#000000` on white) and 14px radius, which makes it a full capsule; wider two-letter pills measure 45px by 27px with a 22px radius. The "+X" mark is two thin crossing lines, and the chevron beside "LAST FIVE YEARS OF PLUS X" is a thin line glyph. Video frames are sharp-cornered (0px).

## Components

**Outlined pill (`pill-outlined`, `pill-outlined-light`).** A bordered capsule behind a label: 17.92px / 19.712px, weight 500, 0.5px tracking, uppercase, 27px high, 1px border and 14px radius. White text and border on black (`pill-outlined`), black on white (`pill-outlined-light`). Each pill's label appears twice in the DOM, once in white (line height 19.712px) and once in black (line height 16.128px); the reason for the duplicate is not determined. Examples: "2020—2025", "LAST FIVE YEARS OF PLUS X", "WATCH FULL VIDEO", "THE REFUSAL TO STAND STILL", "WHAT KEEPS WE MOVING IS", "EXPLORATIVE", "ENVIRONMENT".

**Hero words.** Four words in 204.8px bold white on black, staggered left and right; at 390px the first word measures 80px / 64px.

**Statement blocks.** Uppercase 33.28px paragraphs in white on black or black on white, set in the narrower text family.

**Word list and cross.** A WebGL cross with pill labels around it, and statement sections where one line is white and the surrounding lines are dimmed to `#808080` or `#4d4d4d`.

**Project index.** Groups headed by industry (E-COMMERCE, FASHION, COSMETIC, FINANCE & INSURANCE, LIFESTYLE & CARE, ENTERTAINMENT & BROADCAST, PRODUCTIVITY, SPATIAL, PRODUCT, METAVERSE, TECHNOLOGY), each with the project name in 20.48px and the client beneath in `#4c4c4c` (on black `#bbbbbb`), and 15.36px uppercase tags.

**Footer.** "PLUS X © 2010-2025" at 18px, weight 400, 1px tracking, uppercase; links WEBSITE, ARTICLES, SHOWROOM, SHARE X; a phone number and a contact e-mail.

## Design System Architecture

Plus X publishes no design-system or brand-guidelines page for this microsite; the HTML head links none. The site is a React single-page app: the head preloads `vendor-react`, `vendor-gsap`, `vendor-styled` (styled-components) and `vendor-three` modules and one stylesheet, `https://15th.plus-ex.com/assets/index-DC1dKYHC.css` (about 48 KB), with the main script `https://15th.plus-ex.com/assets/index-DLsuJKUZ.js`. Styled-components class names (`sc-jqMYKt`) appear on the pill elements.

The system lives in `:root` custom properties: text colors (`--text-color-black`, `--text-color-white`, `--text-trirary-black-is-ready`, `--text-secondary-black`), `--background-color`, the 12-column grid variables, 35 `--gap*` spacing variables and a set of named easings (`--sineIn`, `--power1In` through `--power4InOut`, `--expoIn`, `--expoOut`). Components are styled-components rather than shared classes, so the pill, the statement blocks and the hero words repeat the same few values (17.92px label, 33.28px statement, 204.8px display).

Breakpoints declared in the CSS are `max-width: 480px`, `max-width: 1024px`, `min-width: 481px`, `min-width: 1025px`, `max-width: 1200px`, `max-width: 1440px` and `(hover: none) and (pointer: coarse)`. The main JavaScript bundle also contains styles for a fixed Courier New control panel and overlay at `z-index: 99999999`; it is not part of the visible design and is not documented.

## Do's and Don'ts

Do
- Use only black and white, with `#4c4c4c`, `#808080`, `#bbbbbb` and `#4d4d4d` as the dimmed text steps.
- Set key words at an enormous size in bold with tracking of about -0.03em and a line height near 0.8 of the font size.
- Use uppercase 33.28px statements for the narrative and 17.92px pill labels for annotations.
- Draw labels as 27px capsules with a 1px border in the opposite color to the ground.
- Alternate black and white full-bleed sections and keep photography grey-toned.
- Reveal content with vertical slide-ins and the declared GSAP-style easings.

Don't
- Do not add accent hues, drop shadows or filled buttons; none were measured.
- Do not fix the layout to a few columns; use the 12-column, 16px-gap fluid grid.
- Do not set long body copy in mixed case at small sizes; the page uses uppercase statements or short names.
- Do not document the debug panel or the loading screen cross as brand UI.
- Do not rely on the first capture of this site; it shows the loading screen.

## Responsive Behavior

Declared breakpoints are listed above (`max-width: 480px`, `481px` to `1024px`, `min-width: 1025px`, `1025px` to `1440px`, `max-width: 1200px`) with a touch query. The extractor's mobile pass at 390px measured: the first hero word at 80px / 64px with a 320px box (desktop 204.8px / 163.84px at 824px), and the size distribution by weighted characters 14px (2307), 30px (1198), 12px (598), 80px (296), 54.6px (276), 19px (153), 50.7px (112) and 16px (81). The mobile list also contains 10px (42) and 206.7px (8); the desktop sizes 93.44px, 33.28px, 20.48px and 17.92px are absent from it, and the mapping from each desktop style to its mobile size is not measured. No mobile capture image exists for this slug.

## Iteration Guide

1. Start with a black hero: four words in `neue-haas-grotesk-display` 700 at 204.8px / 163.84px and -6.144px tracking, staggered between the left and right edges, with `#ffffff` text.
2. Add outlined 27px pills (1px border, 14px radius, 17.92px / 500 uppercase, 0.5px tracking) for dates and section tags.
3. Write narrative as uppercase 33.28px statements in the text family and large 93.44px headlines that dim to `#808080` or `#4d4d4d` until active.
4. Alternate black and white sections on a 12-column grid with a 16px gap; use 20.48px weight-450 text for project lists, `#4c4c4c` on white and `#bbbbbb` on black.
5. Add motion last: slide-in keyframes from 110% below, fades, and easings such as `cubic-bezier(.16, 1, .3, 1)`.
6. Check any new value against `web/data/extracted/beyond-design-into-experience.json` or the recorded probes in SOURCES.json before adding a token.
