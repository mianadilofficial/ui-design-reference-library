---
version: alpha
name: McKinsey & Company
category: "Business & Corporate"
description: "McKinsey & Company (mckinsey.com) sets light-weight McKinsey Sans (300) headlines and a Bower serif hero on Deep Blue #051c2c, with Electric Blue #2251ff square-cornered buttons, white #ffffff content bands, Cyan #00a9f4 hovers and almost no rounding (0px buttons, 2–16px elsewhere)."
colors:
  canvas: "#ffffff"
  page-largest: "#051c2c"
  ink: "#000000"
  primary: "#2251ff"
  on-primary: "#ffffff"
  royal-blue: "#042a76"
  cyan: "#00a9f4"
  gray-band: "#f0f0f0"
  footer-text: "#333333"
  hairline: "#d0d0d0"
typography:
  display:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 44px
    fontWeight: 300
    lineHeight: 52px
  heading-xl:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 76px
    fontWeight: 300
  subheading:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 64px
    fontWeight: 300
    lineHeight: 76.8px
  heading-section:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 52px
    fontWeight: 300
  card-title:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 36px
    fontWeight: 500
  body:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: "\"McKinsey Sans\", \"Helvetica Neue\", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  xs: 2px
  sm: 4px
  md: 16px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 47px
  button-secondary-hover:
    backgroundColor: "{colors.cyan}"
    borderColor: "{colors.cyan}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 7px 14px 0px
  button-social:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  nav-link-hover:
    textColor: "{colors.cyan}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 56px 8px 16px
    height: 48px
    borderColor: "{colors.canvas}"
  footer:
    textColor: "{colors.footer-text}"
    borderColor: "{colors.ink}"
---

## Overview

mckinsey.com (page title "Global management consulting | McKinsey & Company", measured at 1280px) presents the firm as a publisher as much as a consultancy. The home page opens on Deep Blue `#051c2c` with a serif question — "What's your next brilliant move?" — beside a mosaic of article tiles (ARTICLE, BLOG, CASE STUDY), and continues through a newsletter promotion, The McKinsey Podcast, "How we help clients", Careers, Societal impact and an app download block before a long footer.

The visual identity is cool, editorial and quiet. Large headlines are set in **McKinsey Sans Light (300)** at 44–76px, which gives the page an airy, almost whisper-weight voice; the hero uses the serif **Bower** for contrast. Colour comes from a narrow blue family: Deep Blue for grounds, **Electric Blue `#2251ff`** for actions and the societal-impact band, a royal blue `#042a76` background area, and **Cyan `#00a9f4`** as the hover colour. Corners are square.

Imagery mixes editorial photography (a cyclist, executives, a woman reading a phone in a car, a child for the economic-mobility story) with abstract 3D renders of glossy blue ribbons for the service tiles and colourful illustrated birds for McKinsey.org. A thin blue corner bracket graphic frames the Careers block.

## Colors

All colours below are both measured on the page and declared in the shipped `--mdc-color-*` variables.

- **Deep Blue `#051c2c`** (`page-largest`, `--mdc-color-palette-deep-blue`, `--mdc-color-deep-blue-900`) — the largest background area: header, hero and the "How we help clients" band.
- **Electric Blue `#2251ff`** (`primary`, `--mdc-color-palette-electric-blue`, `--button-primary-background`) — primary buttons, text links (`--link-color-default`), the Careers headline, and the full-width Societal impact band.
- **Royal blue `#042a76`** — the third-largest measured background area.
- **Cyan `#00a9f4`** (`--mdc-color-palette-cyan`) — measured as the hover colour of header navigation text and the fill of the secondary button on hover.
- **White `#ffffff`** (`canvas`) — Careers and app-download bands; also the most-read text colour (1,416 characters), since most copy sits on dark blue.
- **Black `#000000`** (`ink`) — copy on white bands and the secondary button label.
- **Grey `#f0f0f0`** — the band holding the "Deferred Prosecution Agreement…" notice; **`#333333`** footer text; **`#d0d0d0`** a hairline border.

The variable set also declares a status palette (`--mdc-color-status-dark-blue #1E32E6`, `--mdc-color-status-dark-yellow #6A4F00`) and a functional pink (`--mdc-color-functional-mckinsey-pink #E6A0C8`) that the home page does not render.

## Typography

- **McKinsey Sans** (loaded at 300, 400, 500) is the only family in measured text; the declared stack is `"McKinsey Sans", "Helvetica Neue", Calibri, Corbel, Helvetica, Roboto, Droid, sans-serif` (`--mdc-font-family-default-primary`).
- **Bower** (loaded at 300) is the secondary family, declared as `"Bower", Georgia, "Times New Roman", serif` (`--mdc-font-family-default-secondary`). In the capture it sets the hero question "What's your next brilliant move?".

Both are proprietary. The site's own fallbacks are Helvetica Neue for the sans and Georgia for the serif.

| Role | Size / line-height | Weight |
| --- | --- | --- |
| Podcast heading | 76px | 300 |
| Feature heading ("Insights to navigate what's next") | 64px / 76.8px | 300 |
| Section heading (centered) | 52px | 300 |
| Card / tile headline (h1 role) | 44px / 52px | 300 |
| Story title | 36px | 500 |
| Button | 18px / 28px | 400 |
| Body | 16px / 24px | 300 |
| Input | 16px / 24px | 400 |

24px is the most-used size by character count, then 16px and 20px. Weight 300 carries 1,425 of the measured characters; 500 is used for small bold labels and story titles. One letter-spacing was measured: 1.2px at 16px, used for the uppercase eyebrows (FEATURED NEWSLETTER, HOW WE HELP CLIENTS, CAREERS, SOCIETAL IMPACT). The variable `--mdc-font-weight-light: 300` names the default headline weight.

## Layout

The measured desktop page is 1,280px wide and 5,773px tall. Most bands hold content between x=96 and x=1184 (a 1,088px measure); the variables declare page wrappers of 76rem (1,216px) and 48rem (768px). Gaps step in a 4px/8px grid: 8px (66 times), 16px, 32px, 4px, 40px and 24px. Paddings are mostly 8px, 24px, 16px and 12px, with 64px for section padding.

Band sequence:

1. Header and hero on Deep Blue (1,437px): 12 header links, a menu toggle, sign-in and subscribe links; the serif question with a circular arrow button; a masonry of photo tiles with ARTICLE/BLOG labels; a large case-study tile with a white "Read the case study →" button; a newsletter subscription panel with an email field and Apple/Google/LinkedIn sign-in buttons.
2. Featured newsletter — a photo band with a 64px light headline, a short line and an email field with a white Subscribe button.
3. The McKinsey Podcast — 76px heading over the blue gradient, a white story card beside a video player, and a four-up list of episodes with thin top rules.
4. How we help clients — Deep Blue, centered 52px heading, a 3-column row of abstract render tiles (Industry expertise, Capabilities, Tech & AI).
5. Careers — white, left-aligned Electric Blue 44px headline, short copy and the "Explore Careers" button.
6. Societal impact — Electric Blue band, centered 52px heading, 3 columns.
7. App download — white, centered 52px heading, phone mock-ups and QR code.
8. Grey legal notice band, then the footer.

The maximum card column count measured on desktop is 4.

## Elevation & Depth

Flat by default. Two static shadows were measured once each: `rgba(0, 0, 0, 0.1) 0px 0px 10px 0px` and `rgb(128, 128, 128) 0px 0px 5px 0px`. The secondary button gains `rgba(0, 0, 0, 0.2) 0px 7px 14px 0px` on hover, the only interactive lift measured. A translucent white `#ffffff26` background was also measured. Otherwise depth comes from photography and the blue gradient behind the podcast section.

## Shapes

Buttons, inputs, tiles and cards are square (0px). Measured radii are rare: 4px (4 elements), 16px (1), 2px (1). The variables declare `--mdc-size-border-radius-2` (0.125rem), `-4` (0.25rem), `-10` (0.625rem) and `-20` (1.25rem). The only round shape in the capture is the circular arrow button in the hero and the video play button. Graphic accents are thin straight rules — under episode titles and in the Careers corner bracket.

## Components

- **Primary button** ("Explore Careers") — Electric Blue `#2251ff`, white McKinsey Sans 18px/400, padding 8px 24px, 48px tall, 0px radius. The variables declare its hover as an inversion: `--button-primary-background-hover: #FFFFFF`, `--button-primary-text-hover: #2251FF`, `--button-primary-border-hover: #2251FF`.
- **Secondary (white) button** ("Read the case study", "Subscribe") — white, black 18px/400 label, 47px tall, padding 8px 24px. Measured hover: fill and border `#00a9f4`, shadow `rgba(0,0,0,0.2) 0 7px 14px`.
- **Social sign-in buttons** (Apple, Google, LinkedIn) — transparent with a 1px white border, white 16px/400 text.
- **Email field** — white, 16px/400 black text, padding 8px 56px 8px 16px (the right side holds an Electric Blue arrow submit), 48px tall, 0px radius.
- **Header** — Deep Blue, white 16px/300 links with dropdown chevrons; measured hover turns link text and its border to `#00a9f4`.
- **Content tile** — photo with an uppercase eyebrow (ARTICLE, BLOG) and a short white headline ending in a chevron.
- **Inline link** — Electric Blue `#2251ff` (`--link-color-default`), hover border `#2251FF`.

## Design System Architecture

No official public design-system site for McKinsey could be opened: the fetch of https://www.mckinsey.com/about-us/media timed out (recorded in SOURCES.json). The shipped CSS exposes 297 root variables under an `--mdc-` prefix that form a complete token layer:

- **Palette**: `--mdc-color-palette-deep-blue`, `-electric-blue`, `-cyan`, each with a 50/100–900(–1000) ramp (`--mdc-color-electric-blue-500 #2251FF`, `--mdc-color-deep-blue-900 #051C2C`, `--mdc-color-cyan-500 #00A9F4`), neutral interaction greys (`--mdc-color-neutral-hover-gray #F1F3FD`, `-active-gray #E3E6FC`) and status colours.
- **Semantic aliases**: `--mdc-color-primary: var(--mdc-color-palette-electric-blue)`, `--link-color-default`, and a full button matrix (`--button-primary-*`, `--button-secondary-*`, `--button-tertiary-*`, `--button-minimal-*`, `--button-focus-default rgba(33, 85, 255, 0.4)`).
- **Type**: per-script family pairs (default, Japanese, Arabic, Russian, Vietnamese — e.g. Noto Sans JP / Noto Serif JP, TheSansArabic / Zeyn), sizes named by pixel value (`--mdc-size-font-28`, `-44`, `-76`), line heights (`--mdc-size-line-height-44`, `-52`, `-64`) and `--mdc-font-weight-light`.
- **Size**: spacing (`--mdc-size-spacing-4`, `-24`), icons (`--mdc-size-icon-10` … `-128`), page wrappers (`-768`, `-1216`) and radii.

## Do's and Don'ts

**Do**
- Set headlines in McKinsey Sans Light (300), large and loosely leaded; reserve Bower for a single editorial hero line.
- Use Deep Blue `#051c2c` as the dark ground and Electric Blue `#2251ff` for the one action and for links.
- Keep buttons and inputs square, 47–48px tall, with 24px horizontal padding.
- Use uppercase 16px eyebrows with 1.2px tracking above section headings.
- Use Cyan `#00a9f4` only as an interaction colour (hover).

**Don't**
- Don't bold headlines; the measured headline weight is 300 (500 only for story titles).
- Don't round buttons or cards.
- Don't add drop shadows to resting elements.
- Don't introduce colours outside the deep-blue / electric-blue / cyan ramps.
- Don't use the status or pink variables as decoration.

## Responsive Behavior

Not measured. The 390px mobile pass of the extractor received an "Access Denied" page (edgesuite error reference, Times 32px heading) instead of the site, so no mobile typography, layout or navigation values exist. The only responsive evidence is in the declared variables (page wrappers of 48rem and 76rem), whose breakpoint behaviour was not measured.

## Iteration Guide

1. Start on Deep Blue `#051c2c` with white McKinsey Sans 300 text, or on white with black text.
2. Add a 16px uppercase eyebrow with 1.2px tracking, then a 52px/300 centered heading for a section, or 44px/300 left-aligned for a feature.
3. Lay out tiles on the 1,088px measure (x=96 to x=1184) in 3 or 4 columns with 32px or 40px gaps.
4. Place one Electric Blue `#2251ff` square button (48px, 8px 24px padding). On dark photography use the white secondary button, which turns Cyan on hover.
5. For forms, pair a 48px white square email field with an attached Electric Blue arrow.
6. Pull any new colour from the `--mdc-color-*` ramps; anything else is outside the system.
