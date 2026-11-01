---
version: alpha
name: Burberry
category: "Luxury"
description: "Burberry's homepage measured at int.burberry.com: a white canvas (#ffffff) with a light-grey product band (#f6f6f6), black text (#000000), BurberrySerif at 20px and 24px for editorial copy, BurberrySansSerif for interface text, square corners with no measured radii, and an electric blue (#0000ff) used only for underlined text links."

colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f6"
  ink: "#000000"
  primary: "#0000ff"
  ink-2: "#666666"
  ink-4: "#0006cf"
  ink-6: "#999999"
typography:
  display:
    fontFamily: BurberrySerif, serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  heading:
    fontFamily: BurberrySerif, serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: BurberrySansSerif, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
  input:
    fontFamily: BurberrySansSerif, sans-serif
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    clipPath: inset(50%)
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 0px
    height: 40px
  footer:
    textColor: "{colors.ink}"
    padding: 24px 20px
---

## Overview

Burberry's homepage is an editorial fashion page rather than a product-led store front. The captured page opens with a thin black announcement strip ("Stay updated on our new collections, campaigns and stories. Sign Up") above a header carrying the knight crest and the BURBERRY wordmark in a serif capital style, followed by a row of category links: Women, Men, Children, Gifts, Outerwear, Scarves, Bags, Beauty. Under the header sits a full-width campaign video band for "170: The Anniversary Portraits": a dim, close-cropped portrait of a person with the white serif campaign title and an underlined "Discover the Campaign" link at the bottom-left.

After the video the page drops onto the white canvas (`{colors.canvas}`, #ffffff). A centred serif paragraph introduces the campaign and is followed by two underlined blue links, "Women's Outerwear" and "Men's Outerwear". Two edge-to-edge photographs follow side by side with a narrow gap between them: a woman in a quilted black coat on a London street with a blurred taxi, and a man in a grey coat and pinstriped suit before red-painted doors. Titles ("Seasonal Layers", "Coats in Focus") and underlined white links lie over the images at the top-left. A "Campaign Signatures" row follows, with Women / Men toggles in blue at the right and four product cut-outs (trench coat, black puffer, cream check puffer, car coat) on the pale grey band (`{colors.page-largest}`, #f6f6f6).

A newsletter panel ("Join Our Community") covers the right-hand side of the capture, including a "Sign Up" outlined button. It is a pop-up. A second extraction run with stealth enabled showed the same panel, so it could not be removed; none of its controls are documented here as brand UI.

**Key Characteristics:**
- Photography carries the page: models in outerwear on city streets, full-bleed and without borders.
- Serif for editorial copy (`{typography.display}` 20px, `{typography.heading}` 24px), sans-serif for interface and metadata.
- Square geometry. The extraction recorded no border radii and no box shadows.
- A single saturated hue, blue (`{colors.primary}`, #0000ff), appears only on underlined text links.
- Black (`{colors.ink}`, #000000) is the dominant text color; greys step down for secondary information.

## Colors

All values come from the live measurement of the page (`web/data/extracted/burberry.json`).

- **Canvas** (`{colors.canvas}`, #ffffff): body background beneath the video band.
- **Product grey** (`{colors.page-largest}`, #f6f6f6): the largest measured background by area, the product-row band.
- **Ink** (`{colors.ink}`, #000000): the most-read text color; headings, body copy and navigation in the capture.
- **Secondary grey** (`{colors.ink-2}`, #666666) and **light grey** (`{colors.ink-6}`, #999999): supporting text and placeholders.
- **Link blue** (`{colors.primary}`, #0000ff): the text color of underlined links such as "Women's Outerwear" and "Women / Men". There is no filled primary button on the measured page, so `primary` here is a link and action accent, not a button fill. A deeper blue (`{colors.ink-4}`, #0006cf) appears on the border and text of the sign-up control inside the pop-up and in some links.

The page's own CSS declares variables for white, black, greys, success and error states and a dark brand blue; only values present in the measured text, background or border tables were carried into the tokens. #0000ff is distinct from the browser's default link blue (#0000ee), and the links in the capture are explicitly underlined in blue.

## Typography

Two proprietary families are loaded by the page: **BurberrySerif** (a single weight, 400) and **BurberrySansSerif** (weights 100 to 900 in two loaded files). Serif carries editorial voice: the campaign title is 20px with 24px line-height (`{typography.display}`), and the centred introductory paragraph and section titles are 24px with 28px line-height (`{typography.heading}`). The navigation uses sans-serif at 12px with 12px line-height (`{typography.nav}`), and the form input text is 16px, weight 350, line-height 24px (`{typography.input}`). By character count the page is mostly 14px, 16px and 12px sans text, with 20px and 24px serif for statements.

The h1 measured as white text over the video, so the large serif voice is white on imagery while the body below is black on white. Both families are custom and not downloadable from the sources opened; fallbacks declared by the site are generic `serif` and `sans-serif`. Reasonable open stand-ins would be a transitional serif (for example Libre Caslon Text) and a neutral grotesque sans, but these are suggestions, not measurements.

## Layout

The page is full-bleed. Media tiles run to the viewport edges, with a narrow gap between the two campaign photos and no outer gutters; text blocks are narrow and centred (the intro paragraph measured 1030px wide on desktop). Paddings measured most often are 20px, 12px and 4px, and gaps 8px and 20px; the header height variable in the CSS is 5.6rem. The product row is a four-column grid of equal cells on grey. Spacing tokens listed (`{spacing.s1}` 2px to `{spacing.s10}` 25px) come directly from measured paddings and gaps.

## Elevation & Depth

Nothing is raised. The extraction recorded no shadows and no radii. Depth comes from photography, from the dark video band against the white page, and from the grey product band. The pop-up is a flat white panel over a dimmed page. Text overlays on images (white serif title, underlined link) rely on the photograph's tonal range rather than scrims or chips.

## Shapes

All corners are square (`{rounded.none}`, 0px). The input control is defined by a bottom hairline only. Links are signalled with underlines, not pill or box shapes. The only rectangle that carries an outline is the pop-up's blue sign-up control, which is not part of the brand surface.

## Components

- **Navigation**: BurberrySansSerif at 12px over the video band in the capture; crest and wordmark at the left.
- **Text link**: underlined; blue on white (`{colors.primary}`), white on photography.
- **Text input**: 40px high, 16px sans, padding 8px 0px, underline-only, black text (`{colors.ink}`).
- **Product cell**: cut-out garment on `{colors.page-largest}`, no border.
- **Campaign tile**: full-bleed photograph with serif title and underlined link overlaid at top-left.
- **Footer**: padding 24px 20px, black text.

## Design System Architecture

No public Burberry design-system documentation was opened for this entry, and none is cited. What can be said comes from the shipped CSS: the page declares custom properties with a consistent naming scheme: `--color-white`, `--color-black`, `--color-grey`, `--color-mid-grey`, `--color-light-grey`, `--color-error`, `--color-warning`, `--color-dark-brand`, font variables `--ff-serif` and `--ff-sans-serif`, weight variables `--fw-book`, `--fw-normal`, `--fw-bold`, spacing variables `--horizontal-padding` and `--vertical-padding` (both 1.2rem) and layer variables (`--layer-header` 400, `--layer-popover` 300, `--layer-overlay` 200). That is a de-facto token layer for color, type, spacing and z-order. Web searches for Burberry brand guidelines did not lead to a public guidelines page that I could open, so no official palette beyond the measured values is cited.

## Do's and Don'ts

**Do**
- Let photography fill the width of the page and set serif statements over or below it.
- Keep surfaces white or the pale grey band; use black for text.
- Reserve blue for underlined text links.
- Keep corners square.

**Don't**
- Don't add shadows, rounded corners or filled button chips; none were measured.
- Don't treat the newsletter pop-up controls as brand components.
- Don't use the default browser link colors in place of the measured blue.
- Don't mix more than two families.

## Responsive Behavior

Only the desktop layout is described from the capture. The measurement tool also loaded a 390px viewport, but no mobile-specific tokens were derived for this entry, so the behavior of the four-column product grid and the navigation at phone widths is not described here.

## Iteration Guide

1. Begin with `{colors.canvas}`, add `{colors.page-largest}` only behind product imagery.
2. Set statements in BurberrySerif 24px/28px, titles 20px/24px; interface text in BurberrySansSerif.
3. Use underlined `{colors.primary}` text for links; do not create filled buttons.
4. Keep corners square and avoid shadows.
5. Run `node web/scripts/verify-designs.mjs --slug=burberry` after each edit.
