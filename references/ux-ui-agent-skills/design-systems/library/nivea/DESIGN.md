---
version: alpha
name: "Nivea Thailand"
category: "Beauty & Personal Care"
description: "Nivea Thailand home (nivea.co.th, reached from the nivea.com market chooser): NIVEABrandType Bold and ExtraBold uppercase headings in deep blue #0032a0 on a pale #ebf1fd canvas, electric blue #0f60ff pill buttons with 56px radius, circular product and editorial crops, and a solid blue footer."
colors:
  canvas: "#ebf1fd"
  ink: "#0032a0"
  primary: "#0f60ff"
  on-primary: "#ffffff"
  ink-muted: "#b7b7b7"
  primary-hover: "#c6d9ff"
typography:
  display:
    fontFamily: NIVEABrandType-Bold, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 45px
    fontWeight: 400
    lineHeight: 67.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: NIVEABrandType-Bold, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 42px
    textTransform: uppercase
  subheading:
    fontFamily: NIVEABrandType-Regular, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 24px
    fontWeight: 900
    lineHeight: 30px
  body:
    fontFamily: NIVEABrandType-Regular, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: NIVEABrandType-ExtraBold, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 56px
  xl: 86px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 11.01px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 4px 24px
    height: 55px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 21px 35px 8px 16px
    height: 55px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
---

# Nivea Thailand (nivea.co.th)

This file documents the Thai market site of Nivea, measured at https://www.nivea.co.th/. The queued URL, https://www.nivea.com/, is a "Site Chooser Page" (white headline on a #0032a0 field, a list of country links grouped by region), so the real home page was re-measured from the Thailand link on that chooser. Everything below is the measured Thai storefront; the chooser itself is only the global entry door.

## Overview

The page is a soft blue product-and-editorial home. The canvas is a pale periwinkle (`canvas` #ebf1fd), the text is the deep brand blue (`ink` #0032a0), and the single action color is a brighter electric blue (`primary` #0f60ff) used on pill buttons. White cards carry product tiles and article teasers; a solid #0032a0 footer closes the page with a newsletter block. Photography is warm skin-and-light beauty imagery, with a wide hero carousel at the top, circular crops for the editorial "news and highlights" tiles, and a large video still with a centred play button. The tone of the headings is Thai-language brand copy ("new product", "read more", "subscribe to the newsletter") set in uppercase where the script allows.

The extraction recorded the page at 5006px scroll height, 8 visible header links on desktop and a menu toggle on mobile. A cookie popup (`nx-cookie-policy-popup__container`) was hidden before measuring and is not part of the brand UI documented here.

## Colors

- `canvas` #ebf1fd: the largest background area by far (weight 1154 in the measured background areas), followed by white #ffffff (935) and the brand blue #0032a0 (864).
- `ink` #0032a0: the most-read text color (1362 characters), used for headings, body copy and the nav. The site's own CSS variable `--BaseFontColor` is the same #0032a0.
- `primary` #0f60ff: fill of the measured primary button (the "read more" and newsletter buttons) and the nav-link color; it is the site's `--BaseInteractionColor`.
- `on-primary` #ffffff: text on the primary button, and text on the #0032a0 footer.
- `primary-hover` #c6d9ff: the measured hover background of the primary button, where the text flips to #0f60ff and the border stays #0f60ff.
- `ink-muted` #b7b7b7: grey metadata text (review counts on product tiles).

Other measured values that are not tokens: #6e85bc (a muted blue panel, the notification banner), #f5f8fe (a third, near-white surface), #e5eaf5 (footer divider and a 1px border), and the CSS variables `--BaseLinkFontColorHover` #92B7FF, `--SecondaryHighlightColorHover` #64A70B, `--BadgeBackgroundColor` #FF009A and `--FormRatingStarCheckedColor` #FE9119. The third-party `--swiper-theme-color` #007aff belongs to the carousel library and is not a brand color.

## Typography

Three proprietary cuts of the brand typeface, loaded as web fonts: `NIVEABrandType-Regular`, `NIVEABrandType-Bold` and `NIVEABrandType-ExtraBold`. The measured role table is:

- `display`: 45px / 67.5px line height, weight 400 (the weight is carried by the Bold cut file), uppercase, color #0032a0. Used for the hero heading.
- `display-mobile`: 28px / 42px at the 390px mobile pass.
- `subheading`: 24px / 30px, weight 900, for section titles such as "new products".
- `body`: 18px / 25.2px in the Regular cut.
- `button`: 16px / 20px uppercase in the ExtraBold cut.

By character count the page is set mostly at 14px (927), 18px (484) and 16px (220), then 24px, 32px and 45px for headings. Because the weight is selected by choosing a different font file, every heading reads as weight 400 in computed style. The Thai script is rendered with the same family stack followed by system fonts. The generated stack begins with the NIVEA files and falls back to `system-ui`, Segoe UI, Roboto, Helvetica Neue and sans-serif.

Font substitutes: the NIVEABrandType files are proprietary and are not distributed as an open font. When they are unavailable, keep the fallback stack above and preserve the measured sizes, line heights and the uppercase transform; do not claim a specific open font as an equivalent, because none was identified from a source.

## Layout

The header is a white band 73px tall that holds the round blue logo, the nav links (products, advice, highlights, NIVEA WORLD) and the search, account and cookie icons. Below it a hero band 500px tall carries a full-bleed image with a centred two-line heading and an outline "read more" pill. The measured bands then run: a product-category row of six circular product thumbnails with an underline indicator, two rows of four product cards ("new products" and "best sellers"), a promotional heading with a large video still, a 2 by 2 grid of circular editorial tiles, a horizontally scrolling article carousel, and the footer.

The extractor counted up to 7 card columns at desktop. Measured paddings, by frequency: 8px (30), 20px (17), 5px (16), 16px (9), 24px (8), 14px (8) and 10px (7); gaps are 4px (16), 8px and 16px. The spacing tokens are copied from those measurements. Content sits inside a centred column with generous side margins rather than edge to edge, apart from the hero and the video still.

## Elevation & Depth

Depth is almost absent. The only measured box shadow is `rgb(224, 224, 224) 0px 0px 10px 0px`, a faint grey halo on two elements (the product cards). The CSS corpus also contains `0 0 20px 1px #e0e0e0` and a hairline `1px -1px 0 0` shadow, but they were not observed on rendered elements in the frequency pass. Separation comes from color: white cards on the #ebf1fd canvas, a #6e85bc banner, and the solid #0032a0 footer. Footer dividers are 1px lines in #e5eaf5.

## Shapes

The page mixes three shape families. Pill buttons: `rounded.lg` 56px on the primary button (4px 24px padding, 55px tall). Circles: `50%` radius on 18 elements, which are the product thumbnails and the circular editorial photos. Small corners: 4px, 5px and 6px on inputs and cards, and 86px (including a one-sided `86px 0px 0px 86px`) on the search field. Tokens: xs 4px, sm 5px, md 6px, lg 56px, xl 86px, pill 9999px. Borders are rare: a 1px solid #0f60ff on the primary button.

## Components

- Primary button: background #0f60ff, text #ffffff, ExtraBold 16px uppercase, 56px radius, padding 4px 24px, height 55px (230px wide in the capture), 1px solid #0f60ff border. Hover: background #c6d9ff and text #0f60ff.
- Nav: white background, text #0032a0, 18px uppercase Regular; nav links are measured in #0f60ff at 18px.
- Text input: height 55px, padding 21px 35px 8px 16px (room for a floating label), radius 4px, text #0f60ff; the form-field background variable is #f5f5f5.
- Product card: white tile on the pale canvas, small product pack shot at the right, a star rating, a grey review count, a category label and the product name in #0032a0, with a round blue icon button in the corner.
- Footer: #0032a0 background, white text, 31px vertical padding, with a newsletter field and a "subscribe" pill in the primary style, and white circular social icons.
- Notification banner: a #6e85bc rounded panel with a close icon, next to the "our products" heading.

## Design System Architecture

No public design system or brand guideline was opened for this brand, and the site does not link to one from the pages measured. The de-facto system is visible in the shipped CSS: a theme of CSS custom properties on `:root` with PascalCase names, for example `--BaseFontColor`, `--BaseInteractionColor`, `--SecondaryBackgroundColor`, `--ThirdBackgroundColor`, `--BaseLinkFontColorHover` and component-scoped ones such as `--NewsletterButtonBackgroundHoverColor` and `--FooterDividerLinesColor`. Utility classes use an `nx-` prefix (for example `nx-u-arrow-down` and `nx-cookie-policy-popup__container`), and the chooser page template is labelled `NiveaX_Com` in the page source. Styles are served from a shared `/dist/NiveaX/styles-ltr.css`, which indicates one multi-market codebase with per-market content. The footer credit reads Beiersdorf, the parent company.

## Do's and Don'ts

- Do set text in #0032a0 on the #ebf1fd or white surfaces; use white only on #0032a0 or on photography.
- Do reserve #0f60ff for actions: buttons, links and active indicators.
- Do use full pill buttons (56px radius) in uppercase ExtraBold.
- Do crop editorial and product imagery into circles where the page does so.
- Don't add drop shadows beyond the faint 10px grey halo; the page relies on color blocks.
- Don't treat the cookie popup, its buttons, or the carousel library color #007aff as brand UI.
- Don't use browser-default link blue; the link color is the site's #0f60ff.
- Don't invent heavier weights; the weight comes from choosing the Bold or ExtraBold file.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 drops from 45px / 67.5px to 28px / 42px; the header shows 3 links and a menu toggle (desktop shows 8 links and no toggle); the largest mobile font sizes by character are 18px, 14px, 16px, 22px, 12px and 28px. The maximum card column count reported by the extractor is 7 on both passes. Breakpoint widths, stacking order of the bands and tap-target sizes were not measured.

## Iteration Guide

1. Start from the tokens in the frontmatter; do not retune any measured value.
2. Build the page as bands: white header, hero, category circles, product cards, video, editorial circles, article carousel, blue footer.
3. Check the primary button against the measured box: 55px tall, 56px radius, 4px 24px padding, #0f60ff fill, hover #c6d9ff.
4. Verify headings are uppercase with the Bold file at 45px / 67.5px desktop and 28px / 42px mobile.
5. If the global entry is needed instead, the nivea.com chooser is a #0032a0 field with white 54px uppercase headings (36px on mobile) over a skin-cream photo and white country links; it was measured once and then replaced by this market site.
