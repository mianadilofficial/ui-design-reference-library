---
version: alpha
name: Fender
category: "Music & Audio"
description: "Fender international store: a black (#000000) canvas with white text, TheFuture uppercase headlines at weight 900 (48px section heading), dark #191a1f pill buttons (100px radius, 32px high) and white 44px pill CTAs, over full-bleed music photography and video."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#191a1f"
  on-primary: "#ffffff"
  surface-light: "#eeeeee"
  ink-muted: "#bdbdbd"
  ink-faint: "#ffffff99"
  ink-link: "#f4f4f4"
  ink-nav: "#1a1b1b"
  primary-hover: "#333333"
typography:
  display:
    fontFamily: TheFuture, Futura, sans-serif
    fontSize: 20px
    fontWeight: 900
    lineHeight: 21px
    textTransform: uppercase
  display-mobile:
    fontFamily: TheFuture
    fontSize: 28px
    fontWeight: 900
    lineHeight: 28px
    textTransform: uppercase
  heading:
    fontFamily: TheFuture, "The Future", Futura, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 58px
    textTransform: uppercase
  body:
    fontFamily: TheFuture
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.14px
  button:
    fontFamily: TheFuture
    fontSize: 12px
    fontWeight: 700
    lineHeight: 12px
    textTransform: uppercase
  nav:
    fontFamily: TheFuture
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: TheFuture, "The Future", Futura, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.32px
    textTransform: uppercase
  input:
    fontFamily: TheFuture, "The Future", Futura, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 8px
  md: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 14px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 44px
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.page-body}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    height: 44px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    boxShadow: rgb(0, 0, 0) 0px 400px 0px 400px
---

## Overview
The measured page is the Fender international storefront at intl.fender.com. It reads as a stage rather than a shop floor: the canvas is pure black (#000000), and the content that sits on it is white text, full-bleed concert and product photography, and looping video. The capture shows a hero film of a guitarist at a microphone with the headline "THE ONE. FOR ALL." set in heavy uppercase, a thin dark strip of five editorial entry points beneath it (New Arrivals, Custom Shop, Fender Artists, Mod Shop, Collabs), and then alternating editorial blocks, each with a huge uppercase title that overlaps the photograph beside it. A promotional line about Klarna sits in a slim bar above the header. The voice is short, declarative and confident: "SHOP NOW", "STEP INTO THE SHOP", "DON'T MISS OUT!".

## Colors
The palette is almost entirely neutral. The most-read text color is white (#ffffff), followed by a light grey (#bdbdbd), a translucent white (#ffffff99) for secondary copy and a near-white (#f4f4f4) used for links. Backgrounds by area are dominated by #000000; a light grey (#eeeeee) and white (#ffffff) cover the remaining areas. The primary action color is the dark charcoal #191a1f, used as the fill of the pill-shaped ASK FENDER button, with white text (#ffffff) on it and #333333 as its measured hover fill. A second action style inverts the scheme: a white pill with black text. There is no saturated brand accent in the measured data; the identity comes from black, white and photography. The cookie-consent widget exposes its own variables (for example an orange-red link color), which belong to the third-party consent tool and are not documented here as brand tokens.

## Typography
Everything is set in one family, TheFuture, with Futura named as the fallback in the measured stack (`TheFuture, Futura, sans-serif`). Loaded weights are 400, 600, 700 and 900. The display style is 20px at weight 900 uppercase with a 21px line height (the first heading measured on desktop); the section heading is 48px at weight 900, 58px line height, uppercase; on a 390px viewport the first heading measured 28px at weight 900 with a 28px line height. Body copy is 14px with 20px line height and 0.14px letter spacing. Buttons are 12px at weight 700 uppercase for the dark pill, and 14px at weight 500 with 0.32px letter spacing for the white pill. Navigation links are 16px with a 20px line height, and form input text is 16px with a 24px line height. Character-weighted sizes on the page also include 66px and 83px for the largest headline text. The page additionally declares font faces for Instrument Sans, HelveticaNowDisplay, Pragmatica and Pragmatica Extended in its CSS; the measured text on the page is entirely TheFuture.

Font substitutes: TheFuture is a licensed face loaded by the site. Futura is already the declared fallback; where neither is available, any geometric sans with a heavy weight 900 cut is the nearest stand-in for headlines, and weights 400 and 700 cover body and buttons.

## Layout
The page is 1280px wide in the desktop measurement and 4709px tall. The header is 80px high with 24px horizontal padding and carries a menu control at the left, the Fender script logo centred, an ASK FENDER pill, a SEARCH pill field and bag and account icons at the right. Content blocks are full width on black, with copy aligned to a left margin and a photograph occupying the right half; titles run over the photograph's edge. The measured gaps are mostly 12px, 10px and 8px, and common paddings are 12px, 8px, 64px and 24px. The spacing scale in the frontmatter (2px to 20px) is the set of small values measured on controls.

## Elevation & Depth
Depth is made with photography, not shadow. The measured box-shadow list contains only `none` values; the single exception is a footer declaration of `rgb(0, 0, 0) 0px 400px 0px 400px`, a black fill extension rather than a visible shadow. Separation between areas comes from changes of image and from border colors of white (#ffffff) and #333333 on controls. Translucent black (#000000bf) appears over imagery behind overlaid UI.

## Shapes
Controls are pills. The dark ASK FENDER button, the SEARCH field and the white SIGN UP button all measure a 100px radius, and the token set keeps a 9999px pill value as well. Smaller radii measured in the CSS are 5px and 8px (present in the CSS corpus). Photographs are rectangular with square corners in the capture. Icon controls over video (mute and pause) are circular black buttons.

## Components
- **Primary button (ASK FENDER):** #191a1f fill, #ffffff text, 12px weight 700 uppercase, 32px high, 0 14px padding, 100px radius; hover fill #333333.
- **Secondary button (SIGN UP):** #ffffff fill, #000000 text, 14px weight 500 uppercase, 44px high, 0 24px padding, 100px radius.
- **Hero CTA (SHOP NOW):** a white rectangular button with an arrow, visible in the capture; its exact measurement was not recorded separately.
- **Search:** an outlined pill, 32px high, 12px uppercase placeholder.
- **Text input:** 44px high, 16px text, white text on dark.
- **Link:** #f4f4f4 text at 14px, as in "Learn More".
- **Editorial entry strip:** five columns of uppercase label plus one grey sub-line, on a near-black band.
- **Footer:** #000000 fill, white text, with a newsletter block headed "DON'T MISS OUT!" at the 48px heading style.

## Design System Architecture
No public or official design-system site for Fender was opened for this entry, and no brand-guidelines link appeared on the pages measured. The de-facto system is visible in the shipped CSS: a single type family with a small set of weights, a neutral palette, two pill button styles and a 100px radius. The page uses variables such as `--font-body-family` and sold-out badge color variables (`--color-soldout-badge`) while the cookie widget contributes its own `--osano-*` variables. Measured source: https://intl.fender.com/ (extraction of 2026-10-09).

## Do's and Don'ts
- Do keep the canvas black and let white text and photography carry the page.
- Do set headlines in TheFuture weight 900, uppercase, at the 48px heading size on desktop.
- Do use 100px-radius pills for every button, field and chip.
- Do keep copy short and imperative, with an arrow on directional CTAs.
- Don't add a saturated accent color; none was measured.
- Don't use shadows for elevation; the measured list is `none`.
- Don't treat the consent banner colors or the Klarna bar as brand UI.
- Don't mix in the secondary faces (Instrument Sans, Pragmatica) for page text; the measured copy is TheFuture only.

## Responsive Behavior
Only the mobile pass at a 390px viewport was measured. In it the first heading is 28px at weight 900 with a 28px line height and 260px wide; the sign-up button measured 358px wide and 44px high with a white fill; the header measured 68px high at 390px width (80px on desktop); body text in the top bar measured 12px with an 18px line height; and the most-read sizes were 16px, 14px and 12px. How navigation, grids and images rearrange between breakpoints was not measured, and no breakpoints were recorded.

## Iteration Guide
1. Start from the black canvas (#000000) and white ink (#ffffff).
2. Add one dark pill (#191a1f, 100px radius, 32px high) and one white pill (44px high) as the only button styles.
3. Set headlines in TheFuture 900 uppercase; 48px for section titles, 28px for the mobile hero.
4. Use full-bleed photography or video as the colored element; overlap titles onto images.
5. Keep secondary copy at #bdbdbd or translucent white (#ffffff99).
6. When extending, measure first: hover states other than the primary button's #333333 fill were not recorded.
