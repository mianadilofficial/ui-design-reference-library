---
version: alpha
name: ทิพรส (Tiparos)
category: "Thai Brands"
description: Tiparos fish-sauce brand site by Tang Sang Hah Co., Ltd. - a white page under a solid red (#e22626) header band, navy (#1e3d7c) headings, yellow (#ffdd00) accent, set entirely in the Kanit family (SemiBold 28px h1, Regular 18px body) with 5px/10px/pill radii.
colors:
  canvas: "#ffffff"
  ink: "#1e3d7c"
  primary: "#e22626"
  accent-yellow: "#ffdd00"
  ink-black: "#000000"
  ink-muted: "#afafaf"
typography:
  display:
    fontFamily: Kanit-SemiBold
    fontSize: 28px
    fontWeight: 500
  display-mobile:
    fontFamily: Kanit-SemiBold
    fontSize: 22px
    fontWeight: 500
  body:
    fontFamily: Kanit-Regular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  nav:
    fontFamily: Kanit-Regular
    fontSize: 22.5px
    fontWeight: 400
    lineHeight: 33.75px
rounded:
  xs: 5px
  sm: 10px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 7px
  s4: 10px
  s5: 13px
  s6: 15px
  s7: 20px
  s8: 23px
  s9: 40px
  s10: 64px
components:
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
---

## Overview

Tiparos (ทิพรส) is the fish-sauce brand of Tang Sang Hah Co., Ltd. (บริษัท ไพโรจน์ (ทั่ง ซัง ฮะ) จำกัด), and its site at tiparos.com is a Thai-language brand and product page. The page title carries the Thai name, the English company name and the Chinese name 唐双合有限公司 side by side. The extraction recorded the document language attribute as `en` although the visible copy is Thai; the visible page switcher shows a Thai flag with "TH".

The first screen is a red header band holding a phone number (02-711-5710-11) and the language switcher, a white strip below with the logo hanging over both bands and a row of text navigation (home, about us, news and articles, Tiparos Challenge, products, Tiparos menu, careers, contact), and then a full-width hero photograph of oak fermentation barrels with the product bottles and sachets in front. The hero carries two lines of white Thai headline over the photo and a red arrow at each edge. Below it the page is a quiet white document: a navy centred h1, a short red-bodied paragraph, a section of three recipe video cards, and a news grid with thumbnails, titles and a clock icon with the post date in the Buddhist-era calendar.

The overall voice is warm and heritage-led. The about page, which was opened, tells the brand story from 1913, when the founder began experimenting with fish fermented in clay jars, to the 1919 factory at Hokkien pier in Chonburi. The design supports that story with barrel photography and a restrained palette rather than interface flourishes.

## Colors

Colors come from the extraction's text-color and area frequencies, not from CSS variable names. The homepage's `rootVars` are the unmodified Bootstrap 4 set (`--primary: #007bff`, `--danger: #dc3545` and so on); those are framework defaults and are not used as brand colors here.

- **Canvas `#ffffff`**: the dominant background by area (weight 7892 against 503 for yellow and 68 for red).
- **Ink `#1e3d7c`**: the most-read text color (899 characters). It is the colour of the h1, section headings and news titles.
- **Primary `#e22626`**: the red of the header band (the nav background is a hard-stop gradient of red from 0 to 55% and white from 55% to 100%), the arrows over the hero, the secondary line under each recipe title and the body paragraph captured as the body-text role.
- **Accent yellow `#ffdd00`**: a measured background area and the hover colour of the header phone link, which changes from white to rgb(255, 221, 0) with a matching border colour.
- **Ink black `#000000`**: nav link text on the white strip (627 characters).
- **Ink muted `#afafaf`**: a small amount of text (11 characters).

One more background value, `#003087`, appeared with a weight of 3 and is not used here because its element was not identified. White text (`#ffffff`, 85 characters) is used over the red band and the hero.

## Typography

The only primary family is Kanit, loaded as three static faces: Kanit-Regular, Kanit-Medium and Kanit-SemiBold; Font Awesome 5 Free supplies icons. The capture shows Thai script throughout. Character weights were Kanit-Regular 1176, Kanit-Medium 659 and Kanit-SemiBold 83, with a few characters of Roboto and Arial.

- **Display** (h1): Kanit-SemiBold, 28px, weight 500, line-height normal, navy `#1e3d7c`; 22px on the 390px mobile pass.
- **Body**: Kanit-Regular, 18px, weight 400, line-height 27px.
- **Nav links**: Kanit-Regular, 22.5px, line-height 33.75px, black.
- Other measured sizes by character weight are 20px (565), 22px (94), 30px (25), 21.6px (13), 14px (10), 34px (7), 11px (11) and 75px (2).

Substitutes were not researched.

## Layout

The page is 1280px wide in the desktop pass and 2960px tall. Content blocks sit in a centred column; the capture shows the h1 block at 920px wide and the card grids as three columns of equal thumbnails with the lower news row centred as two. Vertical rhythm is generous: large empty bands separate the intro, the Tiparos Challenge recipe row and the news section.

Measured spacing values are 3, 5, 7, 10, 13, 15, 20, 23, 40 and 64px. The header is 108px high on desktop and 109px on the mobile pass. The page background below the hero carries a soft golden-yellow glow image behind the cards rather than a flat fill; the recorded canvas stays `#ffffff`.

## Elevation & Depth

No box shadows were recorded on the measured roles (the body, h1, body text and nav all report `boxShadow: null`). Depth comes from photography: the hero's dark barrel room against white, and the logo hanging across the red band into the white strip. The thumbnails in the news grid sit flat on the glow background without borders in the capture.

## Shapes

Measured radii are 5px (`xs`), 10px (`sm`) and a pill value of 9999px. The roles that were sampled (body, h1, nav, nav link) all report 0px; which elements use the 5px, 10px and pill radii was not recorded, so no component mapping is claimed. The LINE shopping shortcut in the capture is a pill-shaped chip, but it is a third-party-style floating widget and is not documented as brand UI.

## Components

The extractor found no primary button, no input and no cards, so only navigation tokens are declared.

- **Header band**: red `#e22626` with the phone link and language switcher in white; hovering the phone link turns it yellow `#ffdd00`.
- **Nav**: a white strip carrying black Kanit-Regular links at 22.5px; the current item (home) renders in red in the capture.
- **Hero slider**: full-width photograph with white headline and red previous/next arrows.
- **Recipe cards**: thumbnail with a play glyph, a navy title and a red one-line teaser.
- **News cards**: thumbnail, navy bold title that ends in an ellipsis, a clock icon and a Thai-dated post line.

The floating LINE SHOPPING tab, the "Message us" chat bubble and the "Back to Top" tab visible in the capture are third-party or utility controls and are excluded from the tokens. The extraction hid a scrim overlay and a PDPA policy box before measuring.

## Design System Architecture

No public design system or brand guideline was found: the homepage links only to the about page and to Facebook and TikTok profiles, and no brand, press or design link appears. The de-facto system is a Bootstrap 4 site (the `rootVars` list the stock Bootstrap colour and breakpoint variables: `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) with custom styling layered on top: self-hosted Kanit static faces, a red/navy/yellow palette and Font Awesome 5 icons. A "BaanWebsite" label is printed under the chat bubble in the capture. Sources opened: https://www.tiparos.com and https://www.tiparos.com/aboutus/.

## Do's and Don'ts

- Do keep headings in navy `#1e3d7c` on white and use red `#e22626` for the header band, arrows and teaser lines.
- Do set Thai copy in Kanit-Regular at 18px with 27px line-height.
- Do lead with product and barrel photography; the brand story is told through images of the product in use.
- Do use yellow `#ffdd00` as a hover and highlight accent only.
- Don't use the Bootstrap blue `#007bff` or the other stock `rootVars` as brand colours.
- Don't introduce shadows; none were measured.
- Don't treat the floating chat, LINE or back-to-top widgets as part of the system.
- Don't state radii for specific components; only the three radius values were recorded.

## Responsive Behavior

Only two things were measured on the 390px mobile pass: the h1 drops from 28px to 22px (its box becomes 360px wide and 72px high), and the nav container is 109px high and 390px wide with the red `#e22626` background and black text. Body text stays 18px with 27px line-height. Mobile character-weight sizes recorded were 18px, 20px, 22px, 24px, 26px, 50px, 14px and 11px. How the navigation, hero and card grids rearrange on mobile was not measured.

## Iteration Guide

1. Start from the tokens: canvas, ink, primary and the Kanit Regular/SemiBold pair.
2. Keep the red header band, navy headings and white page; add yellow only for hover or highlight states.
3. If a button is needed, measure it first; the source page offered none, so the radii cannot be assigned to a button.
4. Thai text needs the line-height of 27px at 18px; do not tighten it.
5. Re-measure the site (`node web/scripts/extract-tokens.mjs`) before adding colours, and verify with `node web/scripts/verify-designs.mjs --slug=tiparos`.
