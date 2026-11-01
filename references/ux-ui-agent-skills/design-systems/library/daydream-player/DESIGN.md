---
version: alpha
name: Daydream Player
category: "Tech & AI"
description: "Marketing site for Daydream, a social music player: near-black #080808 and #161616 surfaces, white and #d9d9d9 type in Archivo (48.8px headline) and Manrope (25px body), an ember red #ee4137 loader and footer, pill shapes and a frosted nav pill."
colors:
  canvas: "#080808"
  page-largest: "#161616"
  ink: "#ffffff"
  primary: "#ee4137"
  on-primary: "#161616"
  surface-black: "#000000"
  ink-soft: "#d9d9d9"
  ink-muted: "#707070"
  ink-light: "#e8e8e8"
  outline-grey: "#4f4f4f"
  glass-card: "#ffffff33"
typography:
  display:
    fontFamily: "\"Archivo Regular\""
    fontSize: 48.8px
    fontWeight: 400
    lineHeight: 48.8px
    letterSpacing: "-0.488px"
  display-mobile:
    fontFamily: "\"Archivo Regular\""
    fontSize: 36.6px
    fontWeight: 400
    lineHeight: 36.6px
    letterSpacing: "-0.366px"
  body:
    fontFamily: Manrope
    fontSize: 25px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: 0.75px
  body-mobile:
    fontFamily: Manrope
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.75px
  nav:
    fontFamily: Manrope
    fontSize: 16px
    fontWeight: 600
    letterSpacing: "-0.16px"
  button-secondary:
    fontFamily: "\"Archivo Regular\""
    fontSize: 20px
    fontWeight: 400
    letterSpacing: "-0.25px"
  footer-title:
    fontFamily: "\"Archivo SemiBold\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 1px
  sm: 20px
  md: 30px
  lg: 41px
  xl: 50px
  pill: 918.809px
spacing:
  s1: 1px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 11px
  s6: 12.8px
  s7: 14.4px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-secondary:
    textColor: "{colors.outline-grey}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 20px 50px
    height: 64px
    borderColor: "{colors.outline-grey}"
  nav-pill:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    height: 66px
  card:
    backgroundColor: "{colors.glass-card}"
    textColor: "{colors.surface-black}"
    rounded: "{rounded.sm}"
    padding: 33px 61px 52px 30px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.footer-title}"
---

## Overview

Daydream is the website for a music player product that describes itself in the hero as "Sound unchained. Music, redefined." and, further down, as "A music player built for the now. Seamless, social, and made to move with you." The measured page (title "DAYDREAM", 18577px tall at 1280px) is a dark, cinematic product site: a 3D-rendered handheld player floats above a purple-to-ember glow, a huge dark "DAYDREAM" wordmark runs behind the headline, and the rest of the page alternates black sections with rendered product shots and short uppercase captions such as "FROM THE WALKMAN TO THE IPOD, MUSIC PLAYERS HAVE ALWAYS SHAPED HOW WE LISTEN."

Three surfaces appear in the measured background areas: `#161616` (largest area), `#000000` and `#080808` (the body color declared in the stylesheet). Light greys (`#e1e1e1`, `#e0e0e0`, `#bfbfbf`, `#eaeaea`) also measure as background areas, but the capture shows no light page sections in the first screens, so they are not documented as the canvas. The one saturated color is an ember red `#ee4137`, used in the stylesheet for the loading screen background and a fog gradient, and for the footer, which is a full-width red block holding the site navigation, with a very large logo shape behind it.

The copy is confident and short. Card titles in the measured page pair an emoji with a plain-language title and a sentence ("Build Your Music Identity" and "Discover Through Your Circle", each followed by a line starting "Your taste defines you" and "New music finds you"). The only interactive labels read in the capture are "Main", "Gallery", "About", "Watch Teaser", and "Join Waitlist". A red "Site of the Day" ribbon from the Awwwards award widget is fixed to the right edge of the viewport; it is a third-party element and is not part of this system.

## Colors

- **Canvas `#080808`**: the `body` background declared in the stylesheet and measured as the body role background.
- **page-largest `#161616`**: the largest measured background area; it is also the footer wrapper background declared in CSS and the footer text color.
- **surface-black `#000000`**: the second measured surface, and the text color on the translucent cards.
- **Ink `#ffffff`**: the most-read text color (1770 characters), used for body paragraphs. **ink-soft `#d9d9d9`** is the color of the h1 "Sound unchained." and of the nav labels; **ink-light `#e8e8e8`** and **ink-muted `#707070`** are further measured text colors.
- **Primary `#ee4137`**: the ember red. It is the loader background, the footer background, the credits text color and the fill of the large footer logo, all found in the shipped stylesheet. On the measured page it also colors 213 text characters. **on-primary `#161616`** is the text color on the red footer.
- **outline-grey `#4f4f4f`**: text and 1px border of the outlined "Join Waitlist" button; its hover state fills with `#4f4f4f` and switches the text to `#eaeaea` (stylesheet rule).
- **glass-card `#ffffff33`**: the translucent white fill of the feature cards.

The hero background is a stylesheet gradient, `linear-gradient(155deg, #000 30%, #c25946)`, with grey fog layers (`#595959`, `#171717`, `#2a2a2a`). The purple at the top of the hero in the capture is part of the rendered 3D scene and was not measured as a CSS color. The site has no measured light theme.

## Typography

Two families, loaded in the site CSS: **Archivo** in two static faces named `Archivo Regular` and `Archivo SemiBold` (served from `Archivo_SemiExpanded-Regular.ttf` and `Archivo_SemiExpanded-SemiBold.ttf`), and **Manrope**, imported from Google Fonts as a variable face with weights 200 to 800.

| Role | Font | Size / line height | Tracking |
|---|---|---|---|
| display (h1 "Sound unchained.") | Archivo Regular | 48.8px / 48.8px | -0.488px |
| display-mobile | Archivo Regular | 36.6px / 36.6px | -0.366px |
| body | Manrope 400 | 25px / 25px | 0.75px |
| body-mobile | Manrope 400 | 20px / 20px | 0.75px |
| nav | Manrope 600 | 16px | -0.16px |
| button-secondary | Archivo Regular | 20px | -0.25px |
| footer-title | Archivo SemiBold | 24px / 24px | normal |

Line heights equal the font size (1.0), so every block is set solid. Tracking follows the family: Archivo headings are tracked by -1% of the size (0.488px of 48.8px), while Manrope body text is opened up by +0.75px at 25px. Other measured size and tracking pairs on the page are 42px at -0.5px, 41px at -0.44px, 16px at -0.216px and -0.16px, 20px at -0.2px, and 800px at -1.6px (132 characters). The 25px Manrope paragraph is the most-read size by characters (1145), followed by 16px and 20px. Weights measured are 400, 500, 600 and 700. The page sets some captions in uppercase at small size over the rendered product shots.

## Layout

The page is built from full-viewport sections. The hero fills 100vw by 100vh, with the player render centered high, the two-line headline centered below it (top 75% of the hero in the stylesheet), and the giant wordmark behind. The second section is a left-aligned, large-type statement with a centered "Watch Teaser" pill; the next sections place product renders with centered uppercase captions, and later sections use 627px by 670px translucent cards. The footer is a 720px-tall block (stylesheet) with a stack of links at the left, a disclaimer group at the bottom right, and credits text at the bottom.

Measured spacing values are 1px, 7px, 8px, 10px, 11px, 12.8px, 14.4px, 15px, 16px and 20px; frequent gaps are 25px, 8px and 10px, and common paddings are 11px, 33px, 20px and 128px. The navigation is a pill fixed to the bottom of the viewport, 20px above the bottom edge, centered, 300px wide and 66px high.

## Elevation & Depth

Depth is created with blur, translucency and rendered lighting. The navigation pill uses a `backdrop-filter: blur(15.75px)`, a fill of `rgba(32, 32, 32, 0.102)`, and a 1px gradient outline that fades from transparent to `hsla(0, 0%, 100%, 0.282)` (stylesheet). The cards use the translucent `#ffffff33` fill. One repeated element (102 nodes) measures a very soft double shadow, `rgba(0, 0, 0, 0.04) 0px 0.919px 0.919px -0.459px, rgba(0, 0, 0, 0.04) 0px 2.756px 2.756px -1.378px`, with a `#ffffff` border and a 918.809px radius. One element has a 100px inset ring in `rgb(8, 8, 8)`, the canvas color. The hero's fog layers fade the lower edge of the render into the black page. There are no heavy drop shadows.

## Shapes

Roundness is the signature. The measured radii are 1px (`xs`), 20px (`sm`, the cards), 30px (`md`), 41px (`lg`, the outlined button), 50px (`xl`, the navigation pill) and `pill` (918.809px, measured on 102 elements, which renders as a full pill). A 50% radius is also measured (28 uses), for example on a 300px by 340px element with a 3px border `#8082858a`. Corners on the product renders are rounded in the 3D artwork itself. The "Watch Teaser" control in the capture is a dark pill with a faint outline.

## Components

- **Outlined button (`button-secondary`)**: "Join Waitlist", transparent fill, text and 1px border `#4f4f4f`, Archivo Regular 20px with -0.25px tracking, padding 20px 50px, 64px high, 41px radius. Hover fills it `#4f4f4f` with `#eaeaea` text.
- **Navigation pill (`nav-pill`)**: fixed at the bottom center, 66px high, 50px radius, frosted background, a round star logo and three links "Main", "Gallery" and "About" in Manrope 600 16px, `#d9d9d9`. The measured hover state lowers link opacity from 1 to 0.65 with a 0.25s transition.
- **Glass card (`card`)**: `#ffffff33` fill, 20px radius, padding 33px 61px 52px 30px, 627px by 670px, with an emoji, a title and a sentence in `#000000`.
- **Footer (`footer`)**: `#ee4137` block with `#161616` text in Archivo SemiBold and Regular 24px; the link items slide up on hover (stylesheet: the item text moves from top 0 to top -25px while a bold copy slides in). The credits text link is underlined by a 2px line growing to full width on hover.
- **Teaser button**: "Watch Teaser", dark pill with white text, centered below the statement (qualitative from the capture; its measurements were not recorded).
- **Loader**: a full-screen `#ee4137` screen with logos and a fog gradient (stylesheet).

Not documented as brand UI: the Awwwards "Site of the Day" ribbon.

## Design System Architecture

No public design system, brand guideline or press kit is published for this site: the home page text lists only "Main", "Gallery" and "About" and no guideline link. The page opened for research was https://www.daydreamplayer.com/, together with its three shipped stylesheets under https://www.daydreamplayer.com/_next/static/css/ (`8fb3ca0764b01fed.css`, `60fa2960c1500a9c.css`, `f8ed1659e779aa49.css`).

The de-facto system is a Next.js application with CSS Modules: class names look like `nav_navWrapper__6aPrm`, `footernav_footer__GQiWI` and `alert_button__4DD9D`, one module per component (hero, nav, footernav, loader, alert). The `:root` declares no custom properties (the extraction found none), so values are written literally in each module: colors such as `#ee4137`, `#161616` and `#4f4f4f` repeat across modules. Fonts are declared in the global stylesheet. The shipped CSS declares breakpoints with `@media` at max-width 1324px, 1000px, 820px, 724px, 500px, 499px and 280px, plus height queries at max-height 650px and 570px and min-height 500px.

## Do's and Don'ts

Do:
- Keep the page dark: `#080808` canvas, `#161616` and `#000000` sections, with white and `#d9d9d9` text.
- Reserve the ember red `#ee4137` for the loader and the footer block.
- Set Archivo headlines solid (line height equals size) with slight negative tracking.
- Use Manrope for paragraphs at 25px with +0.75px tracking, and 16px 600 for nav labels.
- Round everything: 41px outlined buttons, a 50px frosted nav pill, 20px cards.
- Let rendered product imagery and glow provide color and depth.

Don't:
- Do not add heavy drop shadows; the only measured shadow is a near-invisible 0.04-alpha pair.
- Do not copy the Awwwards ribbon or its red as a brand control.
- Do not use light page backgrounds; none was seen on screen.
- Do not reproduce the purple from the hero as a token; it was not measured as a CSS value.
- Do not square the corners of buttons or cards.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured: the h1 "Sound unchained." is 36.6px with a 36.6px line height and -0.366px tracking (token `display-mobile`); the body paragraph is 20px with a 20px line height, +0.75px tracking and 0px 20px padding (token `body-mobile`). The most-read mobile sizes were 16px (986 characters), 20px (982), 14.348px (389), 21.4624px (372) and 25px (327); the 132-character run measured at 800px on desktop measures 844px on mobile. No navigation role or filled call-to-action was found by the extractor on mobile.

The shipped stylesheet declares the breakpoints listed above. For example, the footer's background logo changes from 700px square to 400px square at max-width 724px, and the footer link stack moves from `top: 100px` to other offsets in smaller queries. How the nav pill, sections and cards rearrange on a phone was not measured beyond these values.

## Iteration Guide

1. Set `#080808` as the body background; use `#161616` and `#000000` for sections.
2. Load Archivo (Regular and SemiBold) and Manrope (200 to 800); build the ladder 48.8px display, 25px body at +0.75px, 20px buttons, 16px nav.
3. Build the frosted nav pill: 300px by 66px, 50px radius, blur 15.75px, 1px fading outline.
4. Make the outlined button: 1px `#4f4f4f` border, 41px radius, padding 20px 50px, hover fill.
5. End the page with the `#ee4137` footer block carrying `#161616` text and a very large logo shape.
6. For mobile, use 36.6px headlines and 20px body, then verify the remaining breakpoints against the stylesheet queries.
