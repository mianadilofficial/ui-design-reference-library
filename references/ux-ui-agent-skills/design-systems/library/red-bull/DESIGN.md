---
version: alpha
name: Red Bull
category: "Food & Beverage"
description: "Red Bull (redbull.com US English) is a media-led brand site: light grey canvas (#f8f8f8) with white cards (#ffffff), deep navy ink (#000f1e), a single crimson action color (#db0a40), the Bull VF variable typeface at 18px body and 32px weight 700 headings, 8px card radii, pill-shaped controls (9999px) and a translucent navy navigation pill."
colors:
  canvas: "#f8f8f8"
  page-body: "#ffffff"
  ink: "#000f1e"
  primary: "#db0a40"
  on-primary: "#ffffff"
  surface-3: "#00162b"
  ink-2: "#000000"
  ink-4: "#1a1919"
  ink-5: "#000f1e99"
  ink-6: "#737477"
  hairline: "#000f1e33"
  nav-bg: "#000f1e73"
typography:
  display:
    fontFamily: "\"Bull VF\", Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"Bull VF\", Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: "\"Bull VF\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
  nav:
    fontFamily: "\"Bull VF\", Helvetica, sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 14px
  md: 16px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.ink-2}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.pill}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 7px 16px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-4}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 15, 30, 0.04) 0px 8px 12px 0px, rgba(0, 15, 30, 0.02) 0px 2px 4px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink-2}"
    rounded: "{rounded.none}"
---

## Overview

The page title is "Red Bull Energy Drink – Gives You Wiiings" and the measured URL is https://www.redbull.com/us-en/. The site works as a content hub for the Red Bull media house rather than a beverage shop: a full-bleed hero story ("Inside the bikes of Red Bull Rampage 2026", with the summary "Discover the suspension, tires, brakes and custom setups that help riders tackle the extreme terrain of Red Bull Rampage.", a "Read Story" button, an author chip and "MTB · 7 Min"), followed by rows of horizontal card carousels: "Energy Drinks", "Stories" and "Events" with "Upcoming" and "Past" tabs. A thin navy bar at the top offers regional content ("Want to see content from Thailand" with a "Continue" button); that regional notice is a banner, not part of the brand component set.

Photography is action sport at large scale: a mountain biker in red-and-blue gear on a desert ridge, a cyclist in a rainbow champion jersey, a skateboard event, a slackliner above a city. The interface keeps out of the way: white cards, navy text, one crimson accent, translucent glass navigation over the hero.

## Colors

- **Canvas:** `#f8f8f8`, the largest background area (8797); `#ffffff` is the page body and card fill (7293).
- **Ink:** `#000f1e`, a very dark navy and the most-read text color (1186 characters); alpha variants `#000f1e99` (secondary text) and `#000f1e33` (hairline borders) belong to the same family. `#1a1919` is the card title color and the heading color, and `#000000` is used for link and body-role text.
- **Primary:** `#db0a40`, a crimson red, fill of the "Read Story" and "Learn more" buttons with white text. It also underlines the active "Upcoming" tab in the capture.
- **Navy surfaces:** `#00162b` (area 3579) is the deep blue used by the top regional bar; `#001c39` is a related fill; `#000f1e73` (navy at about 45% alpha) is the navigation-pill fill over the hero photograph.
- **Muted text:** `#737477` for metadata such as "7 min read".

The extraction records `#0000ee` as the color of 2750 characters; it is the browser's default link color and is not a Red Bull brand color. The blue `#1b6aee` appears only in a focus ring (`inset 0 0 0 2px #1b6aee, 0 0 0 2px #fff`) and is a keyboard-focus style, not a brand color.

## Typography

One family carries the whole interface: "Bull VF" (a variable font), with Helvetica and sans-serif fallbacks. Other loaded faces are Bull Text, Bull and futura-pt-condensed.

- **Display (section headings):** 32px, weight 700, line height 44px ("Energy Drinks"); 26px / 32px on mobile.
- **Body:** 18px, weight 400, line height 18px (the root base font size is declared as 18 by `--cosmos-base-font-size`).
- **Navigation:** 17px, weight 500, line height 24px.

Sizes by character: 18px (3977), 17px (1514), 14px (532), 12px (453, letter spacing 0.25px for card category labels such as "CYCLING"), 32px (63), 20px, 16px. Weights: 400 (4286), 700 (1713), 500 (607). Bull VF is proprietary to Red Bull; Helvetica is the declared fallback.

## Layout

Desktop was measured at 1280px width, 6448px page height. The structure is a stack of full-width bands: the regional bar (navy),  the hero (a photo with overlaid navigation pill at the top center, logo at left, grid and account icons at the edges), then white-on-grey carousels. Each carousel has a heading at left and a "View all >" pill at the right. Cards are 270px wide by 360px high and the next card peeks at the right edge to signal horizontal scrolling. Story cards stack an image, a bold three-line title, a two-line grey summary and a footer row with an uppercase discipline label and read time.

Gaps measured: 8px (52), 16px, 4px, 12px, 24px, 32px, 2px, 20px. Paddings: 4px (140), 16px (58), 12px (28), 6px, 8px, 100px, 24px, 7px. The hero image sits under a rounded transition: the white content area has large rounded top corners (the 16px 16px 0px 0px radius measured once).

## Elevation & Depth

Cards use a very light two-layer shadow: `rgba(0, 15, 30, 0.04) 0px 8px 12px 0px, rgba(0, 15, 30, 0.02) 0px 2px 4px 0px` (31 elements). The CSS also lists the same shadow as `0 8px 12px #000f1e0a,0 2px 4px #000f1e05`. The navigation pill uses transparency (`#000f1e73`) over the photo rather than elevation.

## Shapes

Radii: 8px (79 elements; cards), 9999px (51; pills), `8px 8px 0px 0px` and `0px 0px 8px 8px` (21 each, the image and text halves of a card), 50% (2; avatars and round buttons), 14px and 16px (once each) and `0px 0px 6px 6px`. The button element wrapper reports 0px while its inner anchor reports 9999px, so the visible shape of the "Read Story" button is a pill; the token `button-primary` records the wrapper's 0px measurement.

## Components

- **Primary button ("Read Story", "Learn more"):** `#db0a40` fill, white text, Bull VF 18px, height 40px (36px for "Learn more"), anchor padding `0px 20px` (`0px 16px`), visually a pill.
- **Outlined pill ("View all >"):** transparent, `#000f1e` text, 1px solid `#000f1e33`, padding `0px 12px 0px 16px`, height 36px, 9999px radius.
- **Navigation pill:** `#000f1e73` background, white 17px weight 500 labels (Energy Drinks, Events, Athletes, Red Bull TV), item padding `7px 16px`, 38px high, 486px wide, 9999px radius.
- **Story card:** white fill, 8px radius, shadow above, 270px by 360px, image top (8px top corners) and text bottom (8px bottom corners).
- **Tabs:** "Upcoming" and "Past" in small text with a crimson underline on the active tab.
- **Footer:** 488px tall.

Microcopy is short and editorial: story titles run to a sentence ("How Demi Vollering turned time trial disappointment into road race success"), discipline labels are single words in capitals (CYCLING, MUSIC, SLACKLINING, SKATEBOARDING) and reading times are given in minutes. Two carousels in the capture were still showing blank white or grey placeholder cards when the page was recorded, so their final card content is not measured.

## Design System Architecture

No public design-system documentation was opened for this review. The shipped markup shows an internal component library called Cosmos: the button elements are custom tags named `cosmos-button-14-3-3` and `cosmos-button-14-3-4` (library version numbers appear in the tag names), the root variable `--cosmos-base-font-size` is 18, and font fallbacks are declared with `--fonts__family--title-fallback` and `--fonts__family--text-fallback`. The text family is referenced through `--font-family--text-default`. All values here come from `web/data/extracted/red-bull.json` for https://www.redbull.com/us-en/.

## Do's and Don'ts

- Do keep surfaces to `#f8f8f8` and `#ffffff` with navy `#000f1e` text.
- Do reserve `#db0a40` for the main story or action button and the active-tab underline.
- Do use pill shapes (9999px) for controls and 8px for content cards.
- Do let large action photography fill the hero under a translucent navy navigation pill.
- Don't use the browser's `#0000ee` link blue or the `#1b6aee` focus ring as brand colors.
- Don't add heavy shadows; the measured shadow is 4 percent and 2 percent navy.
- Don't treat the regional "Continue" banner as a brand component.

## Responsive Behavior

The 390px pass measured: section heading 26px with line height 32px; the "Read Story" button still 124px wide and 40px high at 18px; no navigation or body-text roles were captured at that width. Carousel behavior, menu pattern and image crops on mobile were not measured.

## Iteration Guide

1. Canvas `#f8f8f8`, cards `#ffffff`, ink `#000f1e`, action `#db0a40`.
2. Bull VF only: 32px weight 700 headings, 18px body, 12px uppercase labels with 0.25px tracking.
3. Pills for controls (36px to 40px high); 8px radius cards 270px by 360px.
4. Hero: full-bleed sport photo, bottom-left white title, crimson "Read Story" pill.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=red-bull --url=https://www.redbull.com/us-en/ --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=red-bull`.
