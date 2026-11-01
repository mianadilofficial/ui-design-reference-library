---
version: alpha
name: David Alaba
category: "Culture & Events"
description: "Official site of footballer David Alaba: a white #ffffff canvas with near-black #0a0a0c type set entirely in TWK Lausanne 400, from 176px negative-tracked display headlines down to 12px uppercase navigation, with sharp 0px corners and photography as the only color."
colors:
  canvas: "#ffffff"
  ink: "#0a0a0c"
  primary: "#0a0a0c"
  accent-green: "#458b64"
  accent-red: "#d41d1f"
  accent-blue: "#6d6fbf"
typography:
  display:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 176px
    fontWeight: 400
    lineHeight: 149.6px
    letterSpacing: "-5.28px"
  display-mobile:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 93.6px
    fontWeight: 400
    lineHeight: 79.56px
    letterSpacing: "-2.808px"
  heading:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 150px
    fontWeight: 400
    lineHeight: 132px
    letterSpacing: "-4.5px"
    textTransform: uppercase
  statement:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 60px
    fontWeight: 400
    letterSpacing: "-1.2px"
  heading-mobile:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 68.64px
    fontWeight: 400
    lineHeight: 60.4032px
    letterSpacing: "-2.0592px"
    textTransform: uppercase
  body-mobile:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 12.48px
    fontWeight: 400
    lineHeight: 16.224px
    letterSpacing: "-0.1248px"
    textTransform: uppercase
  nav-mobile:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 15.6px
    fontWeight: 400
    lineHeight: 18.72px
    letterSpacing: "-0.156px"
  subheading:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 49.5px
    fontWeight: 400
    lineHeight: 54.45px
    letterSpacing: "-0.99px"
  body:
    fontFamily: "\"TWK Lausanne\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
    letterSpacing: "-0.12px"
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 1.25px
  s2: 2.5px
  s3: 5px
  s4: 6px
  s5: 6.25px
  s6: 10px
  s7: 20px
  s8: 30px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 6.25px
---

## Overview

David Alaba's official website presents the footballer as an editorial poster rather than a sports portal. The measured home page is built from only two colors that cover the screen, the white canvas `#ffffff` and the near-black ink `#0a0a0c`, and one typeface, TWK Lausanne at weight 400, used for every one of the 265 measured text characters. All visual drama comes from scale: the hero headline "The life of David Alaba" is measured at 176px with a 149.6px line height and -5.28px letter-spacing, and the section statement "MASTER OF HIS CRAFT" is set at 150px uppercase. Next to those giants, the navigation and body copy sit at 12px uppercase, so the page reads as two extremes with almost nothing between them.

The page title is "David Alaba — Official Website". The copy is short and promotional: a hero line, "One of the most decorated footballers of his generation, playing for Real Madrid and captain of Austria.", a "master of his craft" statement about "a multi-talented individual making an impact on and off the field", a call to see accomplishments, a gallery captioned "THROUGH THE LENS", and a newsletter sign-up that offers "a chance to win tickets to a Real Madrid game, a signed shirt and more." There is no product, shop or login; the brand is a person, and the interface stays out of the way of the headlines and the photographs.

In the capture, the hero headline is filled with a warm brown-to-gold image or video texture, while the measured text color of that heading is `#0a0a0c`; the fill is a rendering effect on top of the ink color and should not be copied as a flat color token. Thin horizontal rules separate the hero lines and run under the navigation row. Photography (trophy lifts in Real Madrid and Bayern kit) appears as small rectangular crops pinned to the left and right edges between the giant words.

## Colors

The palette is deliberately minimal and fully measured.

- **Canvas `#ffffff`** is the page background (body and header both measure `#ffffff`) and covers the large majority of the capture.
- **Ink `#0a0a0c`** is the only measured text color, covering all 265 text characters, and is also the color of the measured link, and `#0a0a0c` appears as a small measured background area. The site declares it as the `--color--dark` custom property; `--color--light` is declared as `white`.
- **Primary `#0a0a0c`** is the same value. The extractor found no filled call-to-action button on the page, so the brand's only "action color" is the ink itself: links are black type, not colored buttons.
- **accent-green `#458b64`, accent-red `#d41d1f`, accent-blue `#6d6fbf`** are declared on `:root` as `--color--green`, `--color--red` and `--color--blue`. They did not appear on any measured visible element of the home page, so treat them as available palette members of the Webflow project rather than as seen UI colors.

There is no measured dark theme, no hover color change (the hover probe list is empty), and no gradient token; the warm tones in the hero come from imagery. All other colors in the shipped stylesheet (greys such as `#dddddd`, `#222222`, `#333333`, and bright blues like `#3898ec`) belong to the platform's default form and slider styles and were not seen on the page, so they are not part of this system.

## Typography

One family carries everything: `"TWK Lausanne", sans-serif`, loaded as a single face, 400 normal. The system has no bold and no italic. Hierarchy is created entirely by size, case and tracking.

| Role | Size / line height | Tracking | Case |
|---|---|---|---|
| display (h1) | 176px / 149.6px | -5.28px | as written |
| heading (h2) | 150px / 132px | -4.5px | uppercase |
| statement | 60px | -1.2px | the most-read size by characters (85 of 265) |
| subheading (h3 and link) | 49.5px / 54.45px | -0.99px | as written |
| body and nav | 12px / 14.4px | -0.12px | uppercase |

Tracking is always negative and scales with size: the display and heading are set at -5.28px and -4.5px (3% of 176px and 150px), the statement and subheading at -1.2px and -0.99px (2% of 60px and 49.5px), and the 12px body at -0.12px (1%). The tight line heights of 0.85 for the display (149.6px over 176px) and 0.88 for the heading (132px over 150px) make multi-line headlines stack like blocks of type. The h1 is mixed case ("The life", "of", "David Alaba") while the h2 statement is uppercase.

TWK Lausanne is declared with `@font-face` in the site's CSS (the extraction lists it among the loaded fonts as `TWK Lausanne 400 normal`). The only fallback declared in the typography is the generic `sans-serif`; the stylesheet's other font lists mention Arial and Helvetica Neue. If TWK Lausanne is not available in your project, any substitute must be re-checked against the measured negative tracking, since widths will differ.

## Layout

The page is a single long scroll (scroll height 5469px at the 1280px measured viewport) built from full-width bands. The header is a 25px-high row spanning 1280px, with seven navigation items distributed edge to edge: HOME, JOURNEY, ABOUT, THE DAVID ALABA FOUNDATION, GALLERY, PRESS and CONTACT. A small "DA" monogram sits centered under it. The hero stacks three lines of the headline, each with a different horizontal alignment: "The life" centered, "of" centered, and "David" and "Alaba" pushed to the left and right page edges respectively.

Spacing is declared as custom properties: `--page-padding: 2rem`, `--gap-xs: 1rem`, `--gap-s: 1.2rem`, `--gap-m: 2rem`, `--gap-ml: 2.4rem`, `--gap-l: 4rem`, `--gap-xl: 6rem`, `--gap-xxl: 10rem`, `--nav-pad: 1.6rem`, `--nav-height: 5rem` and `--article-padding: 10rem`. The measured paddings are small (6.25px on nav links, 10px, 5px, 2.5px, 1.25px) and the measured gaps are 10px and 20px. The big white spaces in the capture are the generous empty bands between the hero and the statement section. Photographs attach to the page's left and right margins at the same line as the statement words.

## Elevation & Depth

The system is flat. No measured element has a box shadow (the shadow frequency list is empty) and none has a border radius or border color. Depth is suggested only by the images and by the hero's textured headline fill. The measured nav row has a background of `#ffffff` and no shadow; the capture shows a hairline rule beneath it and hairline rules between hero lines, but its width and color were not measured, so they are described qualitatively only.

The stylesheet contains a few shadows (for example `0 0 3px #3336` and `0 0 0 1px #0000001a,0 1px 3px #0000001a`), but these come from the Webflow platform's widget styles and no measured visible element used them. Do not add elevation to cards or buttons when reproducing this site.

## Shapes

Every measured element has a 0px border radius, expressed as the single token `rounded.none: 0px`. Images are rectangular crops with square corners, and the text blocks have no containers. The stylesheet declares other radii (8px, 3px, 2.5px, 4px and a pill value of 1600px) but none of them was measured on a visible element, so they are not tokens. The shape language is therefore purely typographic and rectilinear: rules, type and rectangular photographs.

## Components

- **Navigation bar (`nav`)**: a header row 1280px wide and 25px high, `#ffffff` background, `#0a0a0c` text, TWK Lausanne 12px uppercase with -0.12px tracking. Seven items are spread across the width.
- **Navigation link (`nav-link`)**: `#0a0a0c` text in the body style, 6.25px padding on every side. The measured HOME link is 48px wide and 29px high.
- **Link (`link`)**: the large call-to-action "See David's Accomplishments" is a plain text link in the subheading style (49.5px, 54.45px line height, -0.99px tracking), `#0a0a0c`, 382px wide and two lines high. It has no button fill, border or radius.
- **Sign-up label**: the newsletter heading "DAVID ALABA SIGN UP" is set in the 12px uppercase body style and preceded by a square bullet "■". The page uses the same square bullet as a section marker.
- **Gallery**: nine image links to the gallery page, each captioned "THROUGH THE LENS".
- **Sound toggle**: a text toggle that reads "Sound – On" or "Sound – Off".
- **Monogram**: a "DA" logomark centered at the top of the page.

No filled button, input, card or footer role was detected by the extractor.

## Design System Architecture

No public design system, brand guideline, or press kit is published for this site: the home page lists no design-credit or brand-guideline link, and the "press" navigation item leads to a press section, not a documented token set. The pages opened for research were https://www.davidalaba.com/ and https://www.davidalaba.com/about. The de-facto system is the site's own Webflow stylesheet, recognizable from the `webflow-icons` font face and the Webflow default form styles in the CSS.

Its naming is consistent and token-like. Colors are `--color--dark`, `--color--light`, `--color--green`, `--color--red`, `--color--blue`; spacing uses a size scale named `--gap-xxs` through `--gap-xxl` plus `--page-padding`, `--nav-pad`, `--nav-height` and `--article-padding`; motion is `--animation-main: cubic-bezier(0.65, 0.01, 0.05, 0.99)`. The stylesheet also declares `--css-mobile-mockup-width: 375`, `--css-tablet-mockup-width: 1200` and `--css-desktop-mockup-width: 2560`; what they control was not measured. The mobile type sizes are not one constant fraction of the desktop sizes (93.6px against 176px, 68.64px against 150px), so there is no single scale factor to apply.

## Do's and Don'ts

Do:
- Keep the page to white `#ffffff` and ink `#0a0a0c`, and let photography supply all other color.
- Use TWK Lausanne at weight 400 only, with negative letter-spacing at every size.
- Set statements in uppercase at 150px with a 132px line height so lines stack tightly.
- Keep corners square (0px) and containers invisible.
- Use plain text links, including the large 49.5px "See David's Accomplishments" link, instead of filled buttons.
- Mix alignments inside a headline (centered, left edge, right edge) as the hero does.

Don't:
- Do not introduce bold, italic, or a second typeface.
- Do not add shadows, rounded cards, or pill buttons; none were measured.
- Do not use the declared green, red or blue as large fills; they were not seen on the measured page.
- Do not document or copy the audio toggle, back-to-top link or cookie/consent layers as brand controls.
- Do not replace the hero's textured fill with a flat color token; the measured ink is `#0a0a0c`.

## Responsive Behavior

The extraction recorded a mobile pass at 390px width. Measured values: the h1 becomes 93.6px with a 79.56px line height and -2.808px tracking (token `display-mobile`); the h2 "MASTER OF" becomes 68.64px with a 60.4032px line height and -2.0592px tracking; body text becomes 12.48px with a 16.224px line height and -0.1248px tracking; the navigation text measures 15.6px with an 18.72px line height. The most-read mobile sizes were 12.48px (354 characters), 43.68px, 68.64px, 24.96px, 93.6px, 12px and 15.6px.

Mobile padding on the measured roles is 0px, and no filled call-to-action was found on mobile. Which navigation pattern the mobile view uses is not measured: the extractor did not record how the header is arranged, and the page's menu control text ("menu" and "close") was read from the page text, not from a measured mobile layout. The stylesheet declares mockup widths of 375, 1200 and 2560 as custom properties. Breakpoints, column changes and image behavior were not measured.

## Iteration Guide

1. Start from the white `#ffffff` canvas and `#0a0a0c` ink only; test a page with no color other than images before adding any accent.
2. Build the type scale first: 176px display, 150px uppercase heading, 60px statement, 49.5px subheading, 12px uppercase body, each with the measured negative tracking. Check the stacked-line look by comparing 149.6px and 132px line heights.
3. Add the navigation as one 25px-high row of seven 12px uppercase links with 6.25px padding.
4. Place photographs as square-cornered crops against the left and right margins between giant words.
5. For mobile, use the measured 93.6px and 68.64px values and mark everything else as not measured until you extract it.
6. If you need an accent, take it from the declared `--color--green`, `--color--red` or `--color--blue` values and verify on the live page before use.
