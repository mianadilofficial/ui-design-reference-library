---
version: alpha
name: Harper's Bazaar Thailand
category: "Thai Brands"
description: "Thai edition of Harper's Bazaar (harpersbazaar.co.th, published by Digizen Media): a white-canvas fashion magazine site in a Newspaper-theme WordPress build, with Anuphan and Noto Sans Thai for headlines and copy, #111111 headline ink, #767676 body ink, a 0px radius everywhere and full-bleed black feature heroes."
colors:
  canvas: "#ffffff"
  ink: "#767676"
  primary: "#767676"
  surface-dark: "#222222"
  surface-charcoal: "#333333"
  ink-strong: "#111111"
  ink-black: "#000000"
  ink-caption: "#7c7c7c"
  hairline: "#dcdcdc"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 0px
  subheading:
    fontFamily: Anuphan
    fontSize: 13px
    fontWeight: 500
    lineHeight: 18px
  body:
    fontFamily: "\"Noto Serif Thai\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.5px
  body-dominant:
    fontFamily: Noto Sans Thai
    fontSize: 13px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 13px
components:
  card-title:
    textColor: "{colors.ink-strong}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
  copy:
    textColor: "{colors.ink}"
    typography: "{typography.body-dominant}"
  footer-credit:
    textColor: "{colors.ink-caption}"
    typography: "{typography.body}"
---

## Overview

Harper's Bazaar Thailand is the Thai-language edition of the fashion magazine, served from harpersbazaar.co.th. The footer reads "© All Rights Reserved, Digizen Media", so the operator named on the page is Digizen Media. The home page measured at 1280px wide and 11450px tall in the desktop pass. It is a long editorial scroll: a thin utility strip (date, "Sign in / Join", "Privacy Policy", "Advertising"), a centred BAZAAR masthead, a single-row primary navigation, a leaderboard advertisement, one full-width black feature hero, then grids of story tiles under section tabs such as "TRENDING IN FASHION" and "COVER".

The mood comes from restraint around very strong photography. Everything that is not a photograph is white, black or grey. Text sits on #ffffff; headline ink is #111111; the most-read text colour by character count is #767676. Story tiles carry white headlines laid directly over photographs, and the lead story is a black 16:9-ish block with a large white headline in a heavy Thai sans. Colour in the page therefore arrives only from the editorial and advertising imagery (Chanel, Tiffany & Co., Cartier, Fendi and Hermès appear in the captured page).

The nav is set in small capitals-style uppercase Latin labels: FASHION, BEAUTY, WATCH & JEWELRY, ART & CULTURE, LIFESTYLE, BAZAAR MEN, each with small dropdown chevrons on some entries, plus social icons on the left and a search icon on the right. The navigation bar casts a soft shadow, measured as rgba(0, 0, 0, 0.1) 0px 2px 6px 0px.

## Colors

The palette is achromatic. Measured values only:

- **Canvas {colors.canvas}** (#ffffff): the page background, by far the largest background area.
- **Ink {colors.ink}** (#767676): the most-read text colour by character weight (8100), used for the long body of listing text. It is also the colour the generator recorded for `primary`, because the site exposes no filled button or saturated action colour in the extraction (ctaPrimary is null, no CTA candidates). No accent hue was measured, so this document does not invent one.
- **Strong ink {colors.ink-strong}** (#111111): card and headline text (the measured h3 colour) and the h1 colour.
- **Black {colors.ink-black}** (#000000): additional text and the black feature hero and tile areas.
- **Caption grey {colors.ink-caption}** (#7c7c7c): the footer credit line colour.
- **Dark surfaces {colors.surface-dark}** (#222222) and **{colors.surface-charcoal}** (#333333): measured background areas, used in header and overlay regions. The extractor also recorded #666666 and a 70% black overlay (#000000b3) as background colours; the overlay sits behind tile headlines.
- **Hairline {colors.hairline}** (#dcdcdc): the most common border colour (other measured borders are #eaeaea and #b7b7b7).

White text (#ffffff) accounts for 3417 characters on the page, which corresponds to headlines over dark photography and the black hero. The theme also declares a --td_mobile_text_active_color of #c44c4c in its root variables; it was not measured on a rendered element on the home page, so it is not promoted into the tokens.

## Typography

Four families are measured by character count: Noto Sans Thai (7618 characters), Anuphan (5091), Didot Pro (1915) and a small amount of Open Sans and Noto Serif Thai. The theme's default font variable is Anuphan. Roboto is declared for the h1 element ({typography.display}: Roboto, 28px, weight 400), but that h1 has empty text and a 0px line height, because the masthead is an image logo rather than set type. Treat it as the document structure, not as visible styling.

- **Subheading** {typography.subheading}: Anuphan 13px, weight 500, line-height 18px. This is the story-tile title style (measured on the Fendi Spring/Summer 2027 tile).
- **Body (credit)** {typography.body}: Noto Serif Thai 10px, weight 400, line-height 28px, letter-spacing 0.5px, measured on the footer copyright line.
- **Dominant copy** {typography.body-dominant}: Noto Sans Thai 13px, weight 400, the single most-used family and size pairing.

The size ladder by character count is 13px (8703), 11px (1570), 18px (1139), 21px (858), 17px (819), 48px (379), 14px (351), 15px (280), 20px (279), 10px (270), 27px (112), 12px (85), 9px (53). Letter-spacing pairs are 21px at 0.5px, 48px at 1px, 10px at 0.5px, 14px at 1px and 9px at 1px; this is the tracked uppercase treatment seen in the nav, category chips and dates. Weights used: 400 (9002), 500 (2472), 600 (2356), 700 (1052), 900 (16). The category chips ("BEAUTY", "WATCH & JEWELRY") and datelines ("OCTOBER 8, 2026") render in a Didot-style high-contrast serif in capitals, which is the Didot Pro family in the measurement. Roboto 400/500/700, Open Sans 400/600/700 and the icon font "newspaper" are the other loaded faces.

Didot Pro and Anuphan are the only faces that read as editorial choices; Noto Sans Thai and Noto Serif Thai are Google-hosted Thai-script families. For a rebuild without Didot Pro, a high-contrast Didone serif in capitals for chips and datelines is the closest substitute; the substitute is a recommendation, not a measurement.

## Layout

The page is a stack of full-bleed horizontal bands. The measured page width is 1280px. The masthead is centred; below it the nav row holds social icons left, six labels centred and the search icon right. The leaderboard ad is centred in a narrower column than the hero. The black feature hero runs nearly the full width, with a headline anchored bottom-left in heavy white Thai type and a small dateline beneath. Below, tiles come in a three-up row (one wide, two narrower) followed by a four-up row, within a narrower content column. Sections open with a black label tab ("TRENDING IN FASHION", "COVER") above a thin black rule that spans the column, and the right-hand rail carries the magazine cover thumbnail.

Spacing values recorded by the generator are 1, 2, 3, 5, 6, 7, 10, 11, 12 and 13px (see frontmatter); the most frequent paddings are 20px (33), 22px (29) and 24px (28), then 7px, 3px, 6px and 13px. No flex or grid gap values were recorded (gaps is empty).

## Elevation & Depth

Depth is almost absent. The only soft shadow is on the navigation bar: rgba(0, 0, 0, 0.1) 0px 2px 6px 0px (5 elements). The other recorded shadow is an inset 0px zero-blur shadow, a no-op. A circular "back to top" control sits at the right edge in the capture; it is a utility control and not documented as brand UI. Separation is done with the black tab and rule, with photographic contrast, and with #dcdcdc hairlines.

## Shapes

No border radius was measured: `desktop.frequencies.borderRadii` is empty, so every rendered element computes 0px. {rounded.none} is therefore 0px. Tiles, hero, tabs and ads are hard-edged rectangles; the only curved forms in the capture are inside photographs and the circular utility control, which is not measured as a radius.

## Components

Only roles the extractor actually found are declared:

- **card-title**: {colors.ink-strong} text in {typography.subheading}, 0px corners. In the dark overlay tiles the same headline is white; the white-on-photo colour is #ffffff, which the page uses for 3417 characters.
- **copy**: {colors.ink} in {typography.body-dominant}, the long-form listing text.
- **footer-credit**: {colors.ink-caption} in {typography.body}.

No primary button, input, nav-link role or card role was detected (ctaPrimary, input, nav and cards are null or empty in the roles), so none is invented. The visible navigation, section tabs, category chips and tile grid are described in Overview and Layout rather than tokenised. Cookie, consent and mobile-menu overlays were hidden during measurement (consentOverlaysHidden lists td-mobile-nav) and are not part of the brand UI.

## Design System Architecture

No public design system or brand guideline was found: the home page content shows no link to one (links found are Advertising https://harpersbazaar.co.th/advertising/ and Privacy Policy https://harpersbazaar.co.th/privacy-policy/), and no search was run. The de-facto system is a commercial "Newspaper" WordPress theme: root variables are prefixed --td_ (for example --td_header_color #222222, --td_mobile_text_active_color #c44c4c) together with WordPress preset variables (--wp--preset--font-size--large 32px) and --default-font Anuphan. The icon font is named "newspaper". Colour, type and spacing are therefore theme options plus per-post imagery rather than a token package.

## Do's and Don'ts

- Do keep the canvas #ffffff and let photography carry colour.
- Do set story titles in Anuphan 13px/500 in #111111 on white, or white on a darkened photograph.
- Do keep corners square: every measured radius is 0px.
- Do use black tab labels over a thin rule for section heads.
- Do use tracked uppercase Didone for chips and datelines.
- Don't add a saturated accent colour; none was measured.
- Don't round tiles or buttons.
- Don't add heavy shadows; the nav's 2px/6px 10% black shadow is the only one.
- Don't document the back-to-top, consent or mobile-menu controls as brand components.

## Responsive Behavior

The mobile extraction pass recorded only roles and font sizes, no layout geometry. Measured in that pass: the body copy stays Noto Serif Thai 10px at weight 400 with 0.5px letter-spacing and a 14px line-height (the desktop line-height was 28px); the h1 stays Roboto 28px; the size ladder is led by 13px (7898), 11px (1605), 18px (1518), 17px (819), 21px (806). No primary CTA was found on mobile either. The column counts, nav pattern and breakpoints are not measured.

## Iteration Guide

1. Start from the white canvas and the black feature hero; add story tiles with photography first.
2. Pull type from the measured ladder (13, 11, 18, 21, 17, 48px) and keep Thai copy in Noto Sans Thai or Anuphan.
3. Use #111111 for headlines, #767676 for running text, #7c7c7c for credits and #dcdcdc for rules.
4. Keep every radius at 0px.
5. To extend the system, measure another page with `node web/scripts/extract-tokens.mjs --slug=harpers-bazaar-thailand--<page> --url=<url> --force --no-motion` before adding any token, and cite it in SOURCES.json.
