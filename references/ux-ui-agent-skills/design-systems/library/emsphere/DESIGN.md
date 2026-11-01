---
version: alpha
name: EmSphere
category: "Thai Brands"
description: "EmSphere, the Bangkok shopping centre from The Mall Group, on a light #f5f5f5 canvas with black #000000 ink, a white #ffffff button that carries a pink-and-violet glow shadow, Helvetica Neue LT Std at weight 300 for body and nav, aktiv-grotesk-extended 700 at 84px for section headings, and 20px, 24px and 40px corner radii over full-bleed photography."
colors:
  canvas: "#f5f5f5"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
typography:
  display:
    fontFamily: aktiv-grotesk-extended, Prompt, sans-serif
    fontSize: 84px
    fontWeight: 700
    lineHeight: 84px
  nav-label:
    fontFamily: "\"Helvetica Neue LT Std\", \"Helvetica Neue\", Helvetica, \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 24px
    textTransform: uppercase
  body-mobile:
    fontFamily: "\"Helvetica Neue LT Std\", \"Helvetica Neue\", Helvetica, \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  body:
    fontFamily: "\"Helvetica Neue LT Std\", \"Helvetica Neue\", Helvetica, \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 24px
rounded:
  md: 20px
  lg: 24px
  xl: 40px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 8px
  s4: 15px
  s5: 20px
  s6: 25px
  s7: 30px
  s8: 35px
  s9: 36px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body-mobile}"
    rounded: "{rounded.md}"
    padding: 15px 25px
    height: 40px
    borderColor: "{colors.primary}"
    boxShadow: rgba(255, 16, 202, 0.3) 9px 5px 10px 0px, rgba(90, 13, 255, 0.25) -7px -2px 15px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body-mobile}"
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav-label}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.primary}"
---

## Overview

EmSphere (emsphere.co.th) is the website of a shopping centre on Sukhumvit Road in Bangkok, operated by The Mall Group alongside EmDistrict, Emporium and EmQuartier. The site's own About page describes it as a "Future Retail" destination of more than 200,000 square meters, and the Thai home page calls it "ศูนย์การค้าแห่งอนาคตที่ไม่เคยหลับใหล", a shopping centre of the future that never sleeps. The design follows that brief: a quiet light-grey canvas, very little chrome, and large photographic panels that do most of the selling.

The measured page (1280px wide, Thai-language home page) opens on a dusk aerial photograph of the building with a huge translucent EMSPHERE wordmark in blocky, squared letterforms laid across the top of the image. The photograph fades out into the flat `#f5f5f5` canvas at the bottom of the first screen, so the transition from image to page reads as a soft gradient rather than a hard edge. Below it, a short Thai introduction sits in a narrow left column with a lot of empty space around it, followed by an edge-to-edge, saturated photograph of people sharing pizza around an orange table on a blue floor. The page scrolls to 11114px at desktop width, so it is a long single-column storytelling page rather than a dense catalogue.

Brand colour in the interface itself is almost absent. Ink is `#000000`, the canvas is `#f5f5f5`, and the only accent in measured CSS is a two-colour glow shadow on the button, pink `rgba(255, 16, 202, 0.3)` offset 9px 5px and violet `rgba(90, 13, 255, 0.25)` offset -7px -2px. Colour comes from photography and tenant signage instead.

## Colors

- **Canvas `#f5f5f5`** is the page background (largest background area by weight, 8109 against 901 for white).
- **Ink `#000000`** is the most-read text colour by character count (2379), used for body copy and headings on the canvas.
- **Primary `#ffffff`** is the measured fill of the primary call-to-action ("SHOW ALL"), with `#000000` text on it. White is also the colour of the navigation text and the language button text sitting on top of the hero photograph.
- **Glow shadow** on the white button: `rgba(255, 16, 202, 0.3) 9px 5px 10px 0px, rgba(90, 13, 255, 0.25) -7px -2px 15px 0px`. It appears six times in the measured CSS and is the most distinctive colour moment in the interface.

The stylesheet also exposes WordPress and Swiper default variables (for example `--wp--preset--color--vivid-purple` and `--swiper-theme-color`); these are framework defaults, not brand colours, and are not used as tokens here. A `--color-title` variable of `#907030` and a `--color-bg` of `#000` exist in the root variables, but the measured page does not show them in use, so they are not promoted to tokens.

## Typography

Three families are loaded or declared. Body copy and the navigation use `"Helvetica Neue LT Std"` with fallbacks Helvetica Neue, Helvetica, `"IBM Plex Sans Thai"` and sans-serif, at weight 300; this is the family for 2493 of the measured characters. Section headings use `aktiv-grotesk-extended` with Prompt as a fallback, at 84px, weight 700 and line height 84px (the heading "WHAT'S ON" is the measured example). A third loaded face, `Phage`, appears in the font list and in the character counts alongside a 104px size, and the loaded-font list also contains IBM Plex Sans Thai at 300, 400 and 700 for Thai text.

- Display: aktiv-grotesk-extended 700, 84px/84px (tight, line height equal to size).
- Navigation label: Helvetica Neue LT Std 300, 15px/24px, uppercase (DINING, ENTERTAINMENT, FASHION & LIFESTYLE, COMMUNITY, WHAT'S ON, ABOUT).
- Body: 18px/24px, weight 300; the most common sizes by character are 18px (1403) and 16px (1014).
- Mobile body and button text: 16px/24px, weight 300.

Font substitutes: Helvetica Neue LT Std and aktiv-grotesk-extended are licensed commercial faces. Helvetica or Arial approximate the body; a wide grotesque at bold weight approximates the heading. Thai text relies on IBM Plex Sans Thai, which is open source.

## Layout

The page is a full-width stack of sections. Root variables define a spacing scale of 5px (`--spacing-3xs`), 20px (`--spacing-sm`), 25px (`--spacing-2sm`), 30px (`--spacing-md`), 50px (`--spacing-2lg`), 60px (`--spacing-xl`), 80px (`--spacing-2xl`), 100px (`--spacing-3xl`) and 120px (`--spacing-4xl`), and `--container-padding` is 36px. The measured paddings by frequency are 8px, 50px, 15px, 25px and 36px; the measured gaps are 15px, 35px, 30px, 6px, 5px and 20px.

The navigation floats over the hero photograph rather than sitting on a bar: a wordmark at the left, six uppercase links, a TH language button with a flag, and a round white button at the far right with a sun icon. Text content is held to a narrow left column (the measured body paragraph is 492px wide) while photographic sections run the full width of the viewport.

## Elevation & Depth

Depth comes from photography and from a single shadow recipe. The primary button's two-colour offset glow is the only box shadow found in the measured CSS (six occurrences). WordPress preset shadows such as `12px 12px 50px rgba(0, 0, 0, 0.4)` exist as framework variables but are not seen on measured elements. The hero image dissolves into the canvas with a gradient, which gives an atmospheric rather than layered feel; there are no visible card elevations or borders on the content sections.

## Shapes

Radius is a mix of generous curves. The most frequent measured radius is 24px (28 elements), then 20px (6 elements), plus 50% (3 elements, circular icon buttons such as the sun toggle) and two asymmetrical radii, `40px 0px 0px 40px` and `0px 0px 0px 20px`. The primary button uses 20px. The tokens keep 20px, 24px, 40px and a 9999px pill value. Photographic panels run edge to edge with square outer edges.

## Components

- **Primary button ("SHOW ALL", "MORE"):** white `#ffffff` fill, `#000000` text, 1px white border, 16px weight 300 uppercase label, 15px 25px padding, 40px height, 20px radius and the pink and violet glow shadow. At 1280px it measures 176px wide.
- **Navigation:** white 15px uppercase links on the hero image; the language button text is white with a transparent background, and on hover its border changes from `rgb(0, 0, 0)` to `rgb(204, 204, 204)`.
- **Round utility button:** a white circle with a sun icon at the top right of the viewport. The floating cookie control at the bottom right and the consent banner that appears on first load are site utilities, not brand UI, and are excluded from the tokens.
- **Card:** white fill, black text, 40px radius token (from the measured `40px` radius).
- **Link:** black text at 16px weight 300.

## Design System Architecture

No public design system, brand guideline or press kit was found: `/brand` and `/press` on emsphere.co.th both returned HTTP 404. The de-facto system is visible in the shipped CSS. It is a WordPress theme (variables such as `--wp-admin-theme-color` and `--wp--preset--font-size--large: 36px`) with Swiper for carousels, and a small custom token layer: `--font-body`, `--font-size-md: 18px`, `--container-padding: 36px`, the `--spacing-*` scale listed above, and `--button-height` that resolves to `--input-height`. Source pages: https://emsphere.co.th/ and https://emsphere.co.th/about.

## Do's and Don'ts

- Do keep the canvas a flat `#f5f5f5` and let photography carry colour.
- Do set body copy in a light (300) grotesque and keep headings extended and bold.
- Do use the white button with its pink and violet glow for the main call to action.
- Do fade hero imagery into the canvas with a gradient.
- Don't add a saturated brand fill to buttons or backgrounds; the site has none.
- Don't use the cookie banner or floating cookie button as a pattern for brand components.
- Don't use WordPress or Swiper default colours as brand colours.
- Don't set Thai copy in a font without Thai glyphs; the stack falls back to IBM Plex Sans Thai.

## Responsive Behavior

The extraction also measured a 390px mobile viewport. There the first block of Thai copy and the body text are both 16px, and the section heading drops from 84px to 30px. The primary button label is 16px. At 390px the extractor found no visible nav text, so the desktop link row is not shown as-is on mobile. The `--container-padding` of 36px and the spacing variables are the horizontal rhythm to carry across breakpoints.

## Iteration Guide

1. Start from `canvas #f5f5f5`, `ink #000000`, `primary #ffffff` and the typography tokens; do not introduce new colours.
2. Build hero sections as a full-bleed photograph with a gradient fade into the canvas and a large wordmark overlay.
3. Set section titles with the `display` token (84px/700) and drop to roughly the measured 30px on narrow screens.
4. Use `button-primary` exactly as measured, including its two-part shadow.
5. Pair narrow text columns with wide edge-to-edge photos, using the 5px to 120px spacing variables.
6. Check Thai text rendering whenever the body font changes, and re-measure with the extractor if the live site is redesigned.
