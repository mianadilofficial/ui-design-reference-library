---
version: alpha
name: ExxonMobil
category: "Energy & Climate"
description: "ExxonMobil corporate site (corporate.exxonmobil.com): white and light grey #f1f2f2 pages, signal red #fe000c square buttons (hover #d5000a), charcoal #333333 text, the EMprint family in Light 300 for 60px headlines, a deep navy statement band and photo-led story cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f2f2"
  ink: "#333333"
  primary: "#fe000c"
  on-primary: "#ffffff"
  surface-dark: "#292929"
  ink-muted: "#6d6e71"
  primary-hover: "#d5000a"
  footer-text: "#e6e7e8"
  ink-faint: "#b1b3b6"
  stock-up: "#00a14d"
typography:
  display:
    fontFamily: >-
      EMprint-Light, "Univers Next W23 Light", "Tahoma W01 Regular", "Saral W60", AxisStd-Light, "MHei HK Medium", "MHei PRC Medium", "Ergo LT W08", "YDGothic_120 Pro", HelveticaNeue-Light, "Helvetica
      Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 60px
    fontWeight: 300
    lineHeight: 70px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: >-
      EMprint-Light, "Univers Next W23 Light", "Tahoma W01 Regular", "Saral W60", AxisStd-Light, "MHei HK Medium", "MHei PRC Medium", "Ergo LT W08", "YDGothic_120 Pro", HelveticaNeue-Light, "Helvetica
      Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 46px
    letterSpacing: "-0.1px"
  subheading:
    fontFamily: >-
      EMprint-Semibold, "Univers Next W23 Bold", "Tahoma W01 Bold", "Saral W60 Bold", AxisStd-Medium, "MHei HK Bold", "MHei PRC Bold", "Ergo LT W01 Demi", "YDGothic_140 Pro", "Helvetica Neue",
      Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1px
    textTransform: uppercase
  body:
    fontFamily: >-
      EMprint-Regular, "Univers Next W23", "Tahoma W01 Regular", "Saral W60", AxisStd-Light, "MHei HK Medium", "MHei PRC Medium", "Ergo LT W08", "YDGothic_120 Pro", HelveticaNeue-Light, "Helvetica
      Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 28px
  button:
    fontFamily: >-
      EMprint-Semibold, "Univers Next W23 Bold", "Tahoma W01 Bold", "Saral W60 Bold", AxisStd-Medium, "MHei HK Bold", "MHei PRC Bold", "Ergo LT W01 Demi", "YDGothic_140 Pro", "Helvetica Neue",
      Helvetica, Arial, "Lucida Grande", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 15px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px 25px
    height: 59px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px 25px
    height: 59px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.footer-text}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is the corporate home page of ExxonMobil (title "ExxonMobil", https://corporate.exxonmobil.com/). It is an editorial, news-first corporate site: a white header with the red ExxonMobil wordmark and seven text links (Who we are, What we do, Sustainability, Community, Newsroom, Investors, Careers), a "Global" region selector and a search icon; a full-width hero carousel; a stock quote strip; a statement band; a "Trending topics" grid and a "Latest news" column. The hero in the capture reads "On the ground in the Permian with U.S. Energy Secretary Chris Wright" with a red button "Learn more about the visit". Four carousel captions sit under the image ("ExxonMobil Global Outlook: Our view to 2050", "ExxonMobil announces second-quarter 2026 results", "Delivering energy when it matters most") with a red progress line over the active one and a pause button at the right.

The visual identity is built from three things: a pure signal red, a restrained grey scale and photography of industrial sites and materials. The statement band shows the line "The need for energy is universal. That's why ExxonMobil scientists and engineers are pioneering new research and pursuing new technologies to reduce emissions while creating more efficient fuels." in light white type over a deep navy textured background, with a red "Who we are" button at the right. The tone is declarative and corporate, with short category tags (Guyana, Carbon capture, Materials for modern living, Europe, Investors) and read-time labels ("2 min read") on news items.

## Colors

- Canvas `#ffffff` is the body background; page-largest `#f1f2f2` is the largest measured background area (weight 1219), a light grey used for panels and section backgrounds.
- Ink `#333333` is the main text colour (1165 characters); `#6d6e71` (ink muted, 798 characters) is the body-paragraph grey; `#b1b3b6` (ink faint) is used for the lightest metadata.
- Primary `#fe000c` is the signal red: the fill of every measured button, of link text on hover, of the carousel progress line and of the section title "Latest news" in the capture. `#d5000a` is the red used for the button hover state and for tag text (174 characters) such as "Carbon capture".
- On-primary `#ffffff` is the label colour on red and the text colour on the hero image (966 characters).
- Surface dark `#292929` (116) and `#333333` (140) are the dark background areas, used by the footer.
- Footer text `#e6e7e8` is the colour of footer links on dark.
- Stock-up `#00a14d` is a green used for the share price and its change on the quote strip (text colour, 7 characters).
- The navy statement band is a background image, not a flat colour, so no hex token is declared for it.

Red is used with discipline: one action colour, no secondary accent.

## Typography

All text is set in the EMprint family as declared in the CSS: EMprint-Light (300), EMprint-Regular (300), EMprint-RegularItalic, EMprint-Semibold and EMprint (300 and 400), plus an icon font named "exxom". The CSS stacks fall back through Univers Next, Tahoma, Helvetica Neue, Helvetica, Arial and Lucida Grande to sans-serif, so Helvetica Neue Light or Arial are the nearest declared substitutes. By character count: EMprint-Regular 1572, EMprint-Semibold 741, EMprint 470, EMprint-Light 365.

Measured scale (desktop):

- Display: EMprint-Light 300, 60px on 70px, letter spacing -1px (the hero headline).
- Body: EMprint-Regular 300, 16px on 28px (generous 1.75 line height).
- Subheading: EMprint-Semibold, 13px on 20px, 1px letter spacing, uppercase, used for the carousel captions and small labels.
- Button: EMprint-Semibold 16px on 19px.

Other frequent sizes by character count: 16px, 20px, 14px, 13px, 36px, 24px, 12px and 48px. The headlines are light weight at large size, which gives the hero and the statement band a calm, open quality against the heavy photographic subject matter.

## Layout

A centred content column on a white page. The hero fills the first viewport with the headline anchored at the left. Under the hero, a quote strip shows "ExxonMobil Holdings Corporation (XOM)" with a large green price and a small change line and timestamp. The statement band uses a two-column split: a wide text column at the left and the red button at the right. "Trending topics" is a two-by-two image grid at the left with a narrower "Latest news" column at the right, separated by hairline rules. Spacing values measured: 1, 2, 3, 5, 6, 8, 10, 15, 20 and 22px, with button padding of 20px 25px. Page scroll height at 1280px is 5301px.

## Elevation & Depth

No box shadow is measured on any role. Hierarchy is made by flat colour blocks (white, `#f1f2f2`, navy band, `#292929` footer), photography and thin grey divider rules between news items. Tags are small pale-grey chips with red italic text.

## Shapes

The brand is square-cornered: every measured radius is 0px, including the primary button, secondary button, link and footer roles. Photographs in the Trending topics grid are rectangular with no rounding. The only curved forms in the capture are circular icon controls (the carousel pause button, the globe and search glyphs).

## Components

- Primary button: fill `#fe000c`, white text, EMprint-Semibold 16px, padding 20px 25px, height 59px, 0px radius, label followed by a right arrow. Measured labels include "Explore the report", "Explore our global brands" and "Who we are". Hover fill `#d5000a`.
- Secondary button: the same measured fill and size ("Explore our global brands"); no outlined variant was measured.
- Link: text colour `#fe000c` in EMprint-Semibold 16px; header links such as "Who we are" and "What we do" change from `#333333` (or white on the hero) to `#fe000c` on hover.
- Carousel: four captions in 13px uppercase-style labels, a red progress bar for the active slide and a circular pause control.
- Tag chip: small pale grey chip, red italic label.
- Footer: dark `#292929` area with link text `#e6e7e8` at 14px, weight 300 (links include Careers, News, Investors).
- Cards: image, a light 20px title and a tag; no border or shadow measured.

## Design System Architecture

No public design system or brand guideline was found: the page https://corporate.exxonmobil.com/ was opened and has no link to a design system, brand guidelines, press kit or developer GitHub organisation, so none is cited. The extractor found no CSS custom properties on the root (one entry only), so the system is expressed in class-based CSS with long font stacks. The stack ordering shows a global-reach approach: EMprint first, then regional fallbacks (Saral W60, MHei HK and MHei PRC, YDGothic, AxisStd, Ergo LT) for other scripts and locales, ending at Helvetica and Arial. Roles are consistent across the page: Light weight for display, Regular for body, Semibold for buttons and labels.

## Do's and Don'ts

Do:
- Use `#fe000c` as the only action colour and `#d5000a` for its hover.
- Keep every shape square: 0px radius on buttons, images and chips.
- Set headlines in EMprint-Light at 60px with -1px tracking and give body copy a 28px line height.
- Pair photographs of real operations with short, factual headlines.
- Tag stories with a category chip and a read time.

Don't:
- Add shadows or rounded corners; none are measured.
- Use red for body text; red is for actions, tags, rules and the "Latest news" heading.
- Put the stock-up green on anything other than the quote values.
- Set long paragraphs in the semibold weight.

## Responsive Behavior

Measured with the 390px mobile pass: the h1 is EMprint-Light 40px weight 300 on 46px line height with -0.1px letter spacing, in white (the hero headline "On the ground in the Permian with U.S. Energy…"); h2 "ExxonMobil Holdings Corporation (XOM)" is EMprint-Regular 24px in `#333333`; body text is EMprint-Regular 16px in `#6d6e71`; the primary button keeps `#fe000c`, 16px type, 59px height, 0px radius ("Learn more about the visit"). Frequent mobile font sizes by character count are 16px, 20px, 25.5px, 13px, 24px and 14px. How the header, carousel and grid reflow on mobile is not measured.

## Iteration Guide

1. Build on `#ffffff` with `#f1f2f2` section panels and `#333333` text.
2. Add red `#fe000c` buttons at 59px height, 20px 25px padding, 0px radius; make hover `#d5000a`.
3. Set the hero headline in a light weight at 60px with -1px tracking; keep body at 16px on 28px.
4. Use one deep navy photographic band for the mission statement with a single red button.
5. Compose news as a two-by-two image grid next to a narrow list of headlines with tags.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=exxonmobil --url=https://corporate.exxonmobil.com --force --no-motion`, then run `node web/scripts/verify-designs.mjs --slug=exxonmobil`.
