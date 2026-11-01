---
version: alpha
name: The Matter
category: "Thai Brands"
description: "Thai independent news and culture site (thematter.co, tagline 'Make News Relevant'). White canvas with black feature bands, coral-red #ff463d editor's-pick pills and pill buttons (25px radius), headlines in the custom 'The Matter' face at 600 weight (36px hero, 26px card), Poppins uppercase 11px/2px tracking labels."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#ff463d"
  on-primary: "#ffffff"
  ink-muted: "#999999"
  ink-label: "#8a9299"
  hairline: "#f3f3f3"
typography:
  display:
    fontFamily: "\"The Matter\", Helvetica, Arial, serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 43.2px
  display-mobile:
    fontFamily: "\"The Matter\", Helvetica, Arial, serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 26.4px
  subheading:
    fontFamily: "\"The Matter\", Helvetica, Arial, serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 33.8px
  body:
    fontFamily: Roboto
    fontSize: 10px
    fontWeight: 400
    lineHeight: 17px
    textTransform: uppercase
  button:
    fontFamily: Poppins, Taviraj, Helvetica, Arial, sans-serif
    fontSize: 11px
    fontWeight: 500
    lineHeight: 18.7px
    letterSpacing: 2px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 5px
  md: 25px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 14px
    height: 35px
---

## Overview

The Matter is a Thai-language news and explainer publication whose page title reads "The MATTER — Make News Relevant." The measured home page is an editorial magazine front: a full-width hero story over a photographic illustration, a black band of "Editor's Pick" stories, and then a white section of category blocks (Brief, Social, Lifestyle, Entertainment) each introduced by an uppercase heading, a chevron and a thin coral underline. The personality comes from the commissioned illustration that fills almost every thumbnail: flat, saturated, hand-drawn scenes rather than stock photography. The interface around that art is deliberately quiet: black, white, one coral-red accent, and a heavy custom Thai/Latin headline face.

The page is built on WordPress (the extraction records `--wp--preset--*` root variables, which are the stock WordPress palette presets and are not brand colors). The site-specific system lives in the theme CSS, not in published tokens.

## Colors

The color story is black and white with one hot accent.

- **Canvas `#ffffff`** is the reading background of the category blocks. By measured background area the largest color is **`#000000`** (page-largest), the black band that carries the Editor's Pick grid. A translucent black `#00000033` overlay is also measured on the hero image.
- **Ink `#000000`** is the most-read text color on white (2,857 characters weighted). White text appears on the black band and over the hero image (1,085 characters).
- **Primary `#ff463d`** is a coral red. It fills the "EDITOR'S PICK" pills and the pill CTA ("MORE VIDEOS ON FACEBOOK"), and also draws the thin underline beneath section headings. On-primary text is `#ffffff`.
- **Ink-muted `#999999`** carries post dates ("Posted On 8 October 2026") and small metadata. **Ink-label `#8a9299`** is the "ADVERTISEMENT" label above ad slots. **Hairline `#f3f3f3`** is the only measured border color.

Do not treat the WordPress preset colors in the root variables (vivid red, vivid cyan blue and so on) as brand colors; the capture never shows them.

## Typography

Three families are measured by character count: **The Matter** (3,204 characters, 600 weight) for headlines and story titles, **Poppins** (1,294 characters, 500/600) for navigation, category headings and labels, and a small amount of Anupark and Roboto. Anupark is the family declared on `body`; Roboto sets the 10px uppercase advertisement label that the generator picked as the body role.

- **Display** is The Matter 600 at 36px with 43.2px line height (the hero headline). On the 390px mobile pass the same role measures 22px with 26.4px line height.
- **Subheading** is The Matter 600 at 26px with 33.8px line height (the Editor's Pick lead story headline).
- **Body role** as measured is Roboto 400 at 10px, 17px line height, uppercase. It is a label style, not article copy. The measured size distribution by characters is 18px (the largest share, the card titles), 26px, 11px, 12px, 14px, 30px, 36px and 10px.
- **Button/label** is Poppins 500 at 11px, 18.7px line height, letter-spacing 2px, uppercase. The extraction records `11px/2px` as the only tracked combination, so wide-tracked small caps is the signature label voice.

The loaded font files are The Matter 600, Anupark 400 and 700, Poppins 500 and 600, Roboto 300 and 400, plus FontAwesome for icons. The Matter is a proprietary face; if it is unavailable, a Thai-capable bold serif or humanist sans at 600 weight is the closest practical stand-in, and the layout should be rechecked because Thai line heights are generous (1.2 at display size here).

## Layout

The hero is full-bleed with its headline stacked bottom-left over a darkened illustration. Below it, a black section holds a three-column grid: one large story (a wide image with pill, title and date) in the left column and two narrower columns of smaller stories to its right. Then the page returns to white with a two-column "Brief" list of small square thumbnails beside text, followed by a three-column row of category blocks with large rounded-corner thumbnails.

Measured padding values are 15px (most used), 10px, 18px, 3px, 12px, 27px, 43px and 60px. Measured gaps: none recorded. Page width in the desktop pass is 1280px and scroll height 6764px.

## Elevation & Depth

Depth is nearly absent. One box shadow is measured (`rgb(128, 128, 128) 0px 0px 5px 0px`), a soft gray glow used once. Hierarchy comes from the black-to-white section change and from image size, not from shadows or borders. Hover effects were not measured (the hover list is empty).

## Shapes

Measured radii: **5px** (35 occurrences, thumbnails and small cards), **25px** (7, the pill button and Editor's Pick pills), **2px** (1). The 25px pill is the brand's most distinctive shape and is the only radius used by the primary button. Thumbnails keep a small 5px rounding; do not round them further.

## Components

- **Primary button / pill.** Coral `#ff463d` fill, white text, Poppins 500 11px uppercase with 2px tracking, padding 8px 14px, height 35px, radius 25px. The same coral pill, smaller, labels each story "EDITOR'S PICK".
- **Section heading.** Uppercase Poppins/The Matter at heavy weight, followed by a chevron and a thin coral rule across the column width.
- **Story card.** Illustration thumbnail with 5px radius, then a coral pill, a title in The Matter 600, and a muted gray date line with a small clock glyph.
- **Navigation.** Logo (hexagon mark plus "The MATTER" wordmark) left, then Brief, Social, Lifestyle, Science & Tech, Entertainment, Thinkers with small chevrons, and Search plus Categories on the right, all over the hero image.
- **Ad slot.** Labeled "ADVERTISEMENT" in `#8a9299`; the advertisement creative itself, a reCAPTCHA badge and a cookie bar are third-party and are not brand UI.

## Design System Architecture

No public design system, token package or brand guideline was found: the pages opened (the home page via the extractor, which recorded its CSS corpus) show a WordPress theme with the stock `--wp--preset--*` variables and no brand-specific custom properties. The de-facto system is therefore the theme CSS: a small palette (black, white, coral, two grays), two heading families and a handful of radii. See the SOURCES.json for the research record.

## Do's and Don'ts

- Do use coral `#ff463d` for pills, the primary pill button and heading underlines only.
- Do set headlines in The Matter at 600 weight; keep labels in Poppins uppercase with 2px tracking.
- Do alternate black and white bands to separate featured from browsing content.
- Do let commissioned flat illustration carry personality.
- Don't add shadows or gradients to cards; the only measured shadow is a faint 5px glow.
- Don't use the WordPress preset palette as brand colors.
- Don't round thumbnails past 5px or squash the 25px pill into a rectangle.
- Don't document the ad creative, cookie bar or reCAPTCHA badge as brand components.

## Responsive Behavior

Measured only at the 390px mobile pass: the display headline drops from 36px to 22px (line height 26.4px) and the pill CTA measures 320px wide at 35px height with the same 11px/2px Poppins label, padding 8px 14px and 25px radius. The advertisement label and its 10px size are unchanged. Mobile font sizes by characters are 18px, 26px, 11px, 22px, 14px, 30px and 10px. Breakpoint values, navigation collapse behavior and column counts on mobile were not measured.

## Iteration Guide

1. Start from white and black blocks, then add coral only where an action or a category flag is needed.
2. Set the hero headline at 36px (22px on mobile) in The Matter 600; keep story titles at 18px or 26px per the measured size ladder.
3. Build pills at 35px height, 8px 14px padding, 25px radius, Poppins 500 11px uppercase with 2px tracking.
4. Keep metadata in `#999999`, ad labels in `#8a9299`, and borders at `#f3f3f3`.
5. Use 5px for image corners and 15px as the default padding step.
6. Re-measure any claim about hover, dark mode or tablet widths before adding it; none was measured here.
