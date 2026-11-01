---
version: alpha
name: ComPsych Brand Hub
category: "Business & Corporate"
description: "ComPsych Brand Hub (compsych.konpo.co), the ComPsych Design Guidelines microsite made by Konpo Studio. Sky blue #8dc9f4 with deep sea #070f36 type, sienna #9c4e23 and forest #164c3b section themes over soft gradients, Beatrice at 103.385px/500 with Bright Clones and Inter, and 14.77px cards."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1de6"
  ink-strong: "#1d1d1d"
  primary: "#8dc9f4"
  on-primary: "#070f36"
  deep-sea: "#070f36"
  deep-sea-surface: "#07103b"
  ink-faint: "#070f3666"
  ink-muted: "#070f3680"
  sienna: "#9c4e23"
  pale-yellow: "#fff58c"
  forest-green: "#264b3c"
  forest-ink: "#164c3b"
  mint: "#c4ffb2"
  sky-wash: "#b9dcff"
  sky-border: "#98bde2"
  sky-tint: "#f2fbfe"
  mint-tint: "#f1ffec"
  mint-border: "#8cc2b1"
  sun-tint: "#fbf1ed"
  sun-border: "#ddd79a"
  blueberry: "#5683ff"
  purple: "#979ebc"
  link: "#333333"
typography:
  display:
    fontFamily: Beatrice, Arial, sans-serif
    fontSize: 162.462px
    fontWeight: 500
    lineHeight: 162.462px
    letterSpacing: "-11.3723px"
  display-mobile:
    fontFamily: "\"Bright Clones\", \"Palatino Linotype\", sans-serif"
    fontSize: 33.28px
    fontWeight: 400
    lineHeight: 39.936px
  heading:
    fontFamily: Beatrice, Arial, sans-serif
    fontSize: 103.385px
    fontWeight: 500
    lineHeight: 124.062px
    letterSpacing: "-7.23692px"
  subheading:
    fontFamily: Beatrice, Arial, sans-serif
    fontSize: 73.8462px
    fontWeight: 100
    lineHeight: 96px
    letterSpacing: "-5.16923px"
  link:
    fontFamily: Inter, Arial, sans-serif
    fontSize: 11.8154px
    fontWeight: 400
    lineHeight: 17.7231px
rounded:
  xs: 7.38px
  sm: 14.77px
  md: 216px
  pill: 9999px
spacing:
  s1: 0.72px
  s2: 2.22px
  s3: 2.95px
  s4: 3.69px
  s5: 5.17px
  s6: 7.24px
  s7: 7.38px
  s8: 9.6px
  s9: 10.34px
  s10: 14.77px
components:
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  info-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.sm}"
    padding: 42.8308px 28.8px
    width: 437px
    height: 369px
  section-button:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.forest-ink}"
    rounded: "{rounded.pill}"
  section-button-circle:
    backgroundColor: "{colors.forest-ink}"
    textColor: "{colors.mint}"
    rounded: "{rounded.pill}"
---

## Overview

This is not ComPsych's marketing site: it is the company's brand-guidelines microsite, "Compsych • Design Guidelines", designed by Konpo Studio (the page text reads "Designed by Konpo Studio" and "Made by Konpo Studio"). Its own description says: "At Compsych, our Brand Guidelines help us infuse everything we make with identity." The home line is "A New Dawn for Human Potential." and the intro states that the ComPsych Design Guidelines are "our source of truth for expressing our brand with clarity, warmth, and purpose across every touchpoint." The guidelines are organised as six numbered chapters: 001 Brand Model & Story, 002 Tone of Voice, 003 Logo, 004 Typography, 005 Photography, 006 Color, each with its own page.

Because the site is itself the guidelines, its look is the ComPsych identity in use. The home page is a horizontal, section-by-section scroll. Each chapter fills a screen with a very large title and a soft vertical gradient background that belongs to one of three colour themes: sky blue, green or yellow. A ruler-style scrubber along the bottom shows the chapters (ComPsych, Brand Strategy, Tone of Voice, Logo, Typography, Photography, Color) with fine tick marks and a green progress thumb. The top bar shows the ComPsych wordmark with a rising-sun mark and the small label "Design Guidelines", the text "Made by Konpo Studio", and a circular menu button. In the capture, the Color chapter reads "Our colors reflect balance and energy. They help bring calm, focus, and emotional warmth to every experience." with a white pill button "Color" ending in a dark-green circle with an arrow, and half-circle colour swatches (blue, navy, brown, yellow, forest, mint) cut off at the right edge. A red "Site of the Day" ribbon on the right edge is a third-party awards badge and is not brand UI.

The Brand Model chapter gives the brand's why, how, what and who: "We live to champion human resilience", "By human-centered support at work and through life", "In a support system as vast as human needs" and "For organizations that believe people support drives business success", with the vision "Building a world where every workplace lifts people up". The tone is calm, confident and caring.

## Colors

The guidelines name the palette and give a ratio; the page's own CSS applies it in three themes.

- **Sky blue — `#8dc9f4`** (`--light-blue`, also the default theme's `--_theme---decor`). The guideline says sky blue (25%) "serves as the primary background". It is the largest chromatic background area measured (2337). It is stored as `primary`.
- **Deep sea — `#070f36`** (`--navy-blue`). "Deep sea blue (15%) is used for text and accents to reinforce readability"; the guideline also says the logo "should always be in Deep Sea or an accent color based on the background". Measured as text on 203 weighted characters and as a background area (1117). A near-identical `#07103b` (area 1453) is kept as `deep-sea-surface`. Translucent versions `#070f3666` and `#070f3680` are measured as muted text.
- **Yellow — `#fff58c`** (`--pale-yellow`) and **Green — `#c4ffb2`** "function as background highlights", with **Rustwood brown — `#9c4e23`** (`--sienna`) and **Forest green — `#264b3c`** (`--forest-green`, and `#164c3b` as the green theme's text) "applied to text for contrast and balance". The guideline's color chips on the home page publish `#8DC9F4`, `#070F36`, `#92522D`, `#fff58c` and `#264B3C`; the brown there (`#92522D`) differs slightly from the CSS value `#9c4e23`, and the measured and tokenised value is the CSS one.
- **White — `#ffffff`**: "White is the dominant color, ensuring a clean and minimal aesthetic."
- **Near black — `#1d1d1d`** (`--near-black`); body text is `#1d1d1de6` (497 weighted characters). Links measure `#333333`.
- **Other declared values:** `--blueberry: #5683ff` and `--purple: #979ebc`; they are not measured in a role on the home page.

Three themes, each defined as six variables (main background, sub background, decor, border, title, scrollbar) and applied by section class:
- Blue (default): `#b9dcff`, `#f2fbfe`, `#8dc9f4`, `#98bde2`, title and scrollbar `#070f36` (hero, Logo and Photography).
- Green: `#c4ffb2`, `#f1ffec`, `#164c3b`, `#8cc2b1`, title and scrollbar `#164c3b` (Tone of Voice and Color).
- Yellow: `#fff58c`, `#fbf1ed`, `#9c4e23`, `#ddd79a`, title and scrollbar `#9c4e23` (Brand and Typography).

Each section background is a `linear-gradient(180deg, main-bg, sub-bg)`, which is the soft green-to-white wash visible in the capture.

## Typography

The guidelines page names three families and their roles: **Beatrice** (the page text says it is "designed by Lucas Sharp with Connor Davenport" and links to https://www.sharptype.co/typefaces/beatrice-standard) is the primary typeface, "ideal for headlines, titles, and key brand messaging"; **Bright Clones** is a handwritten secondary typeface "used to highlight key words or phrases in titles and headings"; and **Inter** "ensures clarity and accessibility in digital environments". A section is headed "Why not using the Bold fonts?", and the type-scale section describes sizes, weights and spacing for headlines, subheadings, body text and captions.

Declared and loaded on the site: Beatrice in weights 100, 400 and 500, Bright Clones 400, and Inter in 300, 400, 500 and 600. The stylesheet sets `font-family: Beatrice, Arial, sans-serif` on 20 rules, `Inter, Arial, sans-serif` on 3, and `Bright Clones, Palatino Linotype, sans-serif` on 2. Beatrice and Bright Clones are not available as free system fonts; the declared fallbacks are Arial and Palatino Linotype respectively, and Inter is the guideline's own web family.

Measured roles (presentation sizes on a 1280px-wide page):

- **Display** — Beatrice 162.462px / 500, line-height 162.462px, letter-spacing -11.3723px, measured on the specimen word "Beatrice"; a 590.769px size with -41.3538px letter-spacing also appears (2 characters).
- **Heading** — Beatrice 103.385px / 500, line-height 124.062px, letter-spacing -7.23692px: the chapter titles (for example "Brand Model & Story", set vertically).
- **Subheading** — Beatrice 73.8462px / 100, line-height 96px, letter-spacing -5.16923px, in the thinnest weight.
- **Running text** — Inter, with 23.6308px the most-used size (664 weighted characters), then 14.7692px (78) and 11.8154px (65); weights measured are 500 (937 characters), 400 (48) and 300 (17).
- **Link / timeline label** — Inter 11.8154px / 400, line-height 17.7231px, `#333333`.
- **Mobile display** — Bright Clones 33.28px / 400, line-height 39.936px, `#1d1d1d` ("Design Guidelines").

The stylesheet scales type with a viewport-height unit, `--fs-global: 0.7692307692vh`, so the measured sizes are not round pixel values.

## Layout

The stylesheet defines a 16-column, 12-row grid (`--grid-col: 16`, `--grid-row: 12`) with a 2rem gap (`--one-gap`) and 4rem grid padding (`--grid-padding`), plus section spacing of 3rem, 4rem and 5rem (`--_inner-page---section-space--small / medium / large`) and block spacing of 0, 1.5rem, 3rem and 5rem. The home page is a horizontal strip of sections that are `flex: none`; the Color section is `position: sticky`. A thin bottom ruler tracks progress, and a 10rem by 1rem rounded thumb in the theme's scrollbar color slides along it. Detail pages have a sticky table of contents and a "next chapter" panel with a 2rem radius.

Measured gaps are 14.7692px (13), 3.69231px (12) and 40.6154px (12); paddings are 29.5385px (37), 0.723692px (12) and 7.23692px (6). Density is very low: one giant word, one short paragraph and one button per screen.

## Elevation & Depth

Depth is made with gradients, not shadows. The extractor recorded one box-shadow, a white glow `rgb(255, 255, 255) 0px 0px 22.1538px 36.9231px`, and the stylesheet defines a white glow system through `--sd-blur`, `--sd-spread` and `--sd-alpha`. Borders are none; the thin lines on the page (section dividers, ruler ticks) are 1px-or-0.1rem filled elements colored with each theme's border color (`#98bde2`, `#8cc2b1`, `#ddd79a`).

## Shapes

Shapes are round. Measured radii are 14.7692px (17 occurrences) for cards, 7.38462px (12) for small elements, 50% (9) for circles, 2400px (11) for stretched pills, and 216px (6) plus a left-only 216px variant (6) for the half-circle swatches at the screen edge. Stylesheet radii include 16px (38 declarations), 32px (24), 8px (8), and `border-radius: 100vmax` for the progress thumb and `2rem` for the next-chapter panel. The section button is a white pill with a circle (`border-radius: 50%`, `aspect-ratio: 1`) that slides across it on hover (`left` transition .5s `cubic-bezier(.785, .135, .15, .86)`).

## Components

- **Section button (`section-button`, `section-button-circle`).** A white pill with a theme-colored label (stylesheet classes `fs-20` and `fw-med`, padding 1.65rem 2.8rem) and a circle in the theme's title color containing a light arrow in the main-background color; on hover the circle slides across and the label shifts (`transform .45s cubic-bezier(.785, .135, .15, .86)`).
- **Info card (`info-card`).** White, 14.7692px radius, padding 42.8308px 28.8px, 437px by 369px; three such cards were measured on the home page.
- **Timeline ruler.** Fine vertical ticks with chapter labels in 11.8154px Inter and a rounded progress thumb.
- **Header.** The ComPsych wordmark and rising-sun mark, a small "Design Guidelines" label, "Made by Konpo Studio", and a circular outlined menu button with a three-dot icon.
- **Chapter navigation.** Numbered chapter links (001 to 006) in a navigation panel whose background (`.nav-bg`) uses the same theme gradient, where hovering a link switches the label to the theme's title color; measured hover: "Our Beautiful Type" turns from `#070f36` to `rgb(144, 73, 37)`, and "Our Rising Sun" shifts slightly from `rgb(22, 76, 59)` to `rgb(8, 18, 54)`.
- **Color chips.** Click-to-copy hex chips ("Copied!") on the Color page.

## Design System Architecture

This site is itself the brand's official guidelines (https://compsych.konpo.co/, with chapters at /brand-model-and-story, /tone-of-voice, /logo, /typography, /photography and /color), so it is the authoritative source, opened for this file. It is a Webflow project (`data-wf-domain="compsych.konpo.co"`) with the shared stylesheet https://cdn.prod.website-files.com/67ef60781796ac702e1c4e1e/css/compsych.shared.b48a4cb13.css (about 30 KB) and the Swiper 11 library for carousels. The system is expressed as palette variables on `:root` (`--navy-blue`, `--light-blue`, `--pale-yellow`, `--sienna`, `--forest-green`, `--near-black`, `--blueberry`, `--purple`, `--white`) and as a themeable set of six `--_theme---*` variables that Webflow variants override per section (`.home-hero`, `.home-brand`, `.home-voice`, `.home-logo`, `.home-typo`, `.home-photo`, `.home-color`, `.detail-theme`). Layout tokens (`--grid-col`, `--grid-row`, `--one-gap`, `--grid-padding`) and spacing tokens (`--_inner-page---section-space--*`, `--_inner-page---block-space--*`) complete the system. The Logo chapter adds usage rules: the ComPsych logo is a central sphere surrounded by gradient ripples, with clear space equal to the icon's height and a minimum size of 1 inch in print or 100px on screen, and no effects, distortion or low-contrast backgrounds. The Photography chapter describes authentic, calm, human imagery and gives prompt templates for AI-generated images (muted, warm earthy-toned cinematic scenes with soft natural light).

## Do's and Don'ts

Do:
- Use white as the dominant color, sky blue `#8dc9f4` as the main background, and deep sea `#070f36` for text and accents.
- Use yellow `#fff58c` and green `#c4ffb2` as background highlights with sienna `#9c4e23` or forest `#164c3b` text for legibility.
- Set headlines in Beatrice, use Bright Clones selectively for key words, and Inter for digital text.
- Keep the logo in Deep Sea or an accent color suited to the background, with clear space equal to the icon's height.
- Write in a calm, confident, caring tone, flexing between "product" and "purpose" voices.

Don't:
- Don't put the logo on low-contrast backgrounds or add effects to it.
- Don't set text in bold: the typography chapter carries a section titled "Why not using the Bold fonts?" (its answer was not in the text read) and the measured weights are 100, 300, 400 and 500.
- Don't put light type on yellow or green backgrounds: use their dark shades or deep blue.
- Don't document the Awwwards ribbon, the click-to-copy notice or the scrollbar thumb as brand components.
- Don't use `#92522D` and `#9c4e23` interchangeably in code: the guideline text and the stylesheet differ.

## Responsive Behavior

Measured at 390px wide: the page title "Design Guidelines" is set in Bright Clones 33.28px / 400 (line-height 39.936px) in a 158px-wide, 40px-tall block in `#1d1d1d`; no body text, navigation or call-to-action was found by the mobile pass. Character-weighted sizes on mobile are 20.8px (739), 14.56px (258), 18.72px (130), 58.24px (91), 33.28px (17), 24.96px (13), 54.08px (13) and 37.44px (13).

Declared in the Webflow stylesheet: `@media screen and (max-width: 991px)` (5 rules), `@media screen and (max-width: 767px)` (5), `@media screen and (max-width: 479px)` (3) and `@media (min-width: 768px)` (1). The stylesheet also defines mobile-only and desktop-only variants (`.only-mb`, `.hidden-mb`). How the horizontal chapter layout behaves on touch devices was not measured. Dark mode was not measured.

## Iteration Guide

1. Start from the three themes: blue (`#b9dcff` to `#f2fbfe`, title `#070f36`), green (`#c4ffb2` to `#f1ffec`, title `#164c3b`) and yellow (`#fff58c` to `#fbf1ed`, title `#9c4e23`), each as a top-to-bottom gradient.
2. Set one giant Beatrice title per screen (103.385px / 500 with -7.23692px tracking), one short Inter paragraph and one pill button.
3. Draw the pill button as a white capsule with a theme-colored circle that slides on hover over about 0.45s.
4. Use 14.7692px radius for cards and half-circle 216px swatches for decoration.
5. Add a bottom ruler with chapter labels and a rounded progress thumb.
6. Verify with `node web/scripts/verify-designs.mjs --slug=compsych-brand-hub`.
