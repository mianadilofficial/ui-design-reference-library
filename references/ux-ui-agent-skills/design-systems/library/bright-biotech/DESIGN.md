---
version: alpha
name: Bright Biotech
category: "Retail & E-commerce"
description: "Bright Biotech home page (brightbiotech.co.uk) measured 2026-10-15: a deep green #03463b canvas with a lime #bbfd6a accent, #f5acff pink image cards, one family (Jeko at 500 to 700) with a 103.704px headline, lime pill buttons at a 74.0741px radius and viewport-scaled non-integer type sizes."
colors:
  canvas: "#03463b"
  page-largest: "#bbfd6a"
  ink: "#bbfd6a"
  primary: "#bbfd6a"
  on-primary: "#232222"
  surface-pink: "#f5acff"
  green: "#034638"
  green-mid: "#3a7d47"
  ink-black: "#000000"
  ink-white: "#ffffff"
typography:
  display:
    fontFamily: Jeko, Helvetica, Arial, sans-serif
    fontSize: 103.704px
    fontWeight: 500
    lineHeight: 103.704px
  display-mobile:
    fontFamily: Jeko, Helvetica, Arial, sans-serif
    fontSize: 53.6096px
    fontWeight: 500
    lineHeight: 53.6096px
  button:
    fontFamily: Jeko, Helvetica, Arial, sans-serif
    fontSize: 16.2963px
    fontWeight: 700
    lineHeight: 16.2963px
    letterSpacing: "-0.488889px"
  nav:
    fontFamily: Jeko, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: Jeko, Helvetica, Arial, sans-serif
    fontSize: 11.8519px
    fontWeight: 400
rounded:
  xs: 14.81px
  sm: 74.07px
  cta: 74.07px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.7px
  s3: 6px
  s4: 11.11px
  s5: 13.33px
  s6: 14.81px
  s7: 22.22px
  s8: 23.7px
  s9: 25.93px
  s10: 29.63px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 13.3333px 29.6296px
    height: 43px
  button-secondary:
    backgroundColor: "{colors.green}"
    textColor: "{colors.ink-white}"
    typography: "{typography.button}"
    padding: 13.3333px 29.6296px
    height: 43px
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    padding: 13.3333px 29.6296px
  nav:
    textColor: "{colors.green}"
    padding: 23.7037px
  text-input:
    textColor: "{colors.green}"
    typography: "{typography.input}"
    padding: 3.7037px 14.8148px 3.7037px 0px
    height: 19px
  card:
    backgroundColor: "{colors.surface-pink}"
    textColor: "{colors.ink-black}"
    transform: matrix(1, 0, 0, 1, 0, 228)
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.green}"
    padding: 22.2222px 25.9259px
    transform: matrix(1, 0, 0, 1, 0, 188.125)
---

## Overview

The measured page is the home page of Bright Biotech, `https://www.brightbiotech.co.uk/` (title "Bright Biotech", `lang` en), a Manchester biotechnology company. The page's own text describes what it does in a series of hero statements: "Growing a Better Future", "By Expressing Recombinant Proteins in Plant Chloroplasts", "High Quality Growth Factors", "Ultra Scalable, Sustainable, and Safe", "For Cell Culture & Regenerative Medicine", each paired with calls to action ("Technology & Products →", "Mission & Team →", "Careers →", "Contact us →"). The menu lists Homepage, Technology & Products, Mission & Team, Careers, an Information group (Resources, FAQ, Blog) and Contact.

The capture shows an unusually graphic, two-color site. The hero is a full-screen deep green field with a centered headline "Growing a Better Future" in large lime type over two lines, a lime sprouting-leaf logo at the top left, a white pill "Menu +" button at the top right, a column of lime dots with a down-arrow at the lower left and a circular lime badge with rotating "Contact Us" text and an arrow at the lower right. A lime block follows, carrying a "Subscribe for Updates" email line with an arrow, the address (Rutherford House Unit 16 Pencroft Way, Manchester, England, M15 6SZ), circular Instagram and LinkedIn buttons, "Copyright © 2026", "Your Data", "Terms and Conditions", "Design by Lyon & Lyon" and two ISO certification marks (ISO 9001 and ISO 45001). A pink rounded card with a photograph of a hand holding a seedling, with thin leaf outlines drawn over it, sits across the join between lime and green. A black vertical "Site of the Day" tab on the right edge is a third-party award badge, not part of the brand interface.

Some elements carry translate transforms in the extraction (the footer `matrix(1, 0, 0, 1, 0, 188.125)` and the pink card `matrix(1, 0, 0, 1, 0, 228)`); in the capture the footer block and the card appear directly under the hero. The measurement saw 434 visible elements and a 9,672px scroll height at 1,280px. The mood is optimistic and agricultural-tech: saturated lime against deep green, soft pink, rounded pills, and nature photography.

## Colors

The brand uses three colors plus neutrals, two of which the stylesheet names.

- **Canvas `#03463b`** is the deep green seen on screen (62.5 percent of the capture pixels); the root variable `--green` is `#034638`, a one-step-different value kept as `green` and used for text on lime (322 characters) and as the secondary button fill.
- **Lime `#bbfd6a`** (`--lime: #BBFD6A`) is the largest measured background area (weight 1,273) and the fill of the primary pill buttons, the footer and the circular badge; it is also the headline text color on green (247 characters). In the tokens, `ink`, `primary` and `page-largest` carry this value.
- **Button text `#232222`** (25 characters) sits on lime pills. **Pink `#f5acff`** (area weight 190) fills the photo card. **Mid green `#3a7d47`** colors 85 characters. Black `#000000` (21 characters) and white `#ffffff` (12) are the remaining text colors.
- Translucent lime `#bafe6b80` and `#bafe6b` appeared with zero area weight.

The extractor also reported `#0000ee` for an anchor with no text; that is the browser's default link color, not a brand color, and it is dropped. No gradient was measured, and no hover color was recorded. Colors appear as flat fills, and the contrast pairs measured are lime text on green and green text on lime.

## Typography

One family is measured: **Jeko** (712 of 712 characters), with the stack `Jeko, Helvetica, Arial, sans-serif`. The page loads two files, `Jeko-SemiBold.woff2` and `Jeko-ExtraBold.woff2` (registered as 600 and 700), from the site's WordPress theme assets; measured weights are 500 (332 characters), 600 (242), 400 (90) and 700 (48). No license page was opened, so treat Jeko as proprietary.

| Role | Size / line height | Weight / tracking |
| --- | --- | --- |
| Display (h1) | 103.704px / 103.704px | 500 |
| Display at 390px | 53.6096px / 53.6096px | 500 |
| Button | 16.2963px / 16.2963px | 700, -0.488889px |
| Nav | 20px / 20px | 600 |
| Input | 11.8519px | 400 |

Line height equals font size in every measured role. The most-read sizes are 74.0741px (255 characters; tracked at -2.96296px and -2.22222px), 8.88889px (174), 47.4074px (68; -0.2px), 16.2963px (37), 57.7778px (33; -1.73333px), 59.2593px (24; -1.77778px), 15.5556px (21), 13.3333px (21), 103.704px (20), 44.4444px (18), 23.7037px (16), 72px (14; -0.72px) and 14.8148px (11). These fractional sizes scale with the viewport: the same elements measured different values at 390px (for example the hero headline 103.704px to 53.6096px and the button text 16.2963px to 17.1926px), and the root variables include `--size: 1080` and `--vh: 8px`. Tracking tightens as size grows. **Font substitutes:** use a geometric sans with 500 and 700 weights, set line height equal to the font size, and scale sizes with the viewport instead of using fixed pixel steps.

## Layout

The layout is a sequence of full-screen scenes, each a flat field of green, lime or pink with one focal element. The header block measured 102px high with 23.7037px padding; the hero headline is centered and measured 741px wide. Spacing values are fractional because they scale with the viewport: paddings of 3.7037px (8 times), 23.7037px (6), 14.8148px (5), 13.3333px (3), 29.6296px (3), 11.1111px, 1px, 6px and 22.2222px (2 each), 40px and 25.9259px (1 each); one gap of 14.8148px (twice). The footer padding is `22.2222px 25.9259px` and 188px high.

The pink card measured 416px wide by 456px high, and one element measured a `0 0 160px 160px` radius (large lower-corner curve). On mobile the header block is 390px by 108px. A fixed 1,280px content width or a column grid was not measured.

## Elevation & Depth

The site is flat: no box shadow and no gradient was measured, and the stylesheet's only shadow declaration is `none !important`. Depth comes from scene changes between green, lime and pink fields, from the overlap of the pink card across the lime and green join. Borders are rare; the only measured border color is `#034638` on 4 elements.

## Shapes

Measured radii: 50% (8 elements; the round badge and icon buttons), 74.0741px (5; the pill buttons), `0 0 160px 160px` (1; a large lower-corner curve) and 14.8148px (1; the pink card). The stylesheet declares one other radius, 100px. Tokens: `xs` 14.81px, `sm` and `cta` 74.07px, and `pill` 9999px. Buttons are full pills; images sit in softly rounded rectangles; circles are used for the logo mark, social buttons and the rotating "Contact Us" badge. The leaf logo and the thin leaf outlines over the photo are line-drawn shapes.

## Components

**Primary pill button.** Lime `#bbfd6a` fill, `#232222` text, Jeko 16.2963px/700 with -0.488889px tracking, 74.0741px radius, padding `13.3333px 29.6296px`, 43px high ("Mission & Team →", 190px wide; "Careers →" uses the same style). At 390px it measured 200 by 45px with 17.1926px text, a 78.1481px radius and padding `14.0667px 31.2593px`.

**Secondary pill button.** Fill `#034638`, white text, same type, radius and padding, 43px high and 156px wide ("Contact us →").

**Menu button.** The header holds a "Menu +" control at 14.8148px/700 in `#034638`, rendered in the capture as a white pill; at 390px the header is 390 by 108px with 15.6296px text.

**Contact badge.** A circular lime badge with the text "Contact Us" running around its edge and an arrow in the center.

**Email field.** Jeko 11.8519px/400 in `#034638`, padding `3.7037px 14.8148px 3.7037px 0`, 19px high and 293px wide; the capture shows a line under it and an arrow button.

**Photo card.** `#f5acff` fill, 14.8148px radius, 416 by 456px, with a cut-out photograph and leaf outlines.

**Footer.** Lime fill, `#034638` 13.3333px/600 text, 188px high.

## Design System Architecture

No public design system or brand guideline was found: the home page HTML opened at https://www.brightbiotech.co.uk/ links only to the company's own pages (our-mission, technology, careers, contact, faq, resources, blog, terms-and-conditions), the Awwwards listing for the site, and WordPress API endpoints. The site is a WordPress theme (`/wp-content/themes/theme/assets/css/global.css` and `homes.css`, version 2.0.66) that serves the Jeko files from `/wp-content/themes/theme/assets/fonts/`; the footer credits "Design by Lyon & Lyon".

The de-facto system is minimal: the `:root` holds four variables, `--green: #034638`, `--lime: #BBFD6A`, `--size: 1080` and `--vh: 8px`. All other values (sizes, spacing, radii) are fractional numbers that follow from viewport scaling rather than from a published scale.

## Do's and Don'ts

**Do**
- Pair deep green and lime as the primary field and text colors; use pink `#f5acff` for photo cards only.
- Set display type in Jeko 500 with line height equal to font size and tightening letter spacing.
- Make every call to action a full pill with an arrow ("Mission & Team →").
- Keep scenes flat: one color field and one focal element at a time.
- Scale type, spacing and radii with the viewport.

**Don't**
- Don't use `#0000ee`; it is the browser's default link color and was dropped.
- Don't add shadows or gradients; none were measured.
- Don't present the Awwwards "Site of the Day" tab as part of the interface.
- Don't introduce a fourth brand color; the measured palette is green, lime and pink plus neutrals.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the h1 is 53.6096px/53.6096px at weight 500 and spans the full 390px width at 117px high; the primary pill is 17.1926px/700, 200 by 45px, radius 78.1481px, padding `14.0667px 31.2593px`; the header block is 390 by 108px with 25.0074px padding and 15.6296px text. The most-read mobile sizes are 38.2926px (244 characters), 9.37778px (174), 35.0104px (68), 17.1926px (37), 54.7037px (35), 29.8682px (33), 16.4111px (21) and 14.0667px (21). The mobile layout of the footer, card and badge was not measured.

## Iteration Guide

1. Set canvas `#03463b`, lime `#bbfd6a`, green `#034638`, pink `#f5acff`, button text `#232222`.
2. Load Jeko (500, 600, 700) and size the display headline at 103.704px on a 1,280px viewport, scaling with the viewport.
3. Build a full-screen green hero with a centered lime headline, a white "Menu +" pill, a lime "Contact Us" badge and a dot indicator.
4. Add lime pill buttons with arrows, a lime footer block, and a pink 14.81px-radius photo card.
5. Check mobile against the measured 53.6096px headline and 200 by 45px button.
6. Measure any new section first with `node web/scripts/extract-tokens.mjs --slug=bright-biotech--<page> --url=<url> --force --no-motion`.
