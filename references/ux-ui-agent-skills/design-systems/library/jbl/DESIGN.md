---
version: alpha
name: JBL Thailand
category: "Music & Audio"
description: "Harman's Thai storefront for JBL (th.jbl.com): white canvas with black text and a #ff3300 orange-red action color, Roc Grotesk headlines at 42px and 34px, Arial 14px body and uppercase 14px buttons with 1px tracking, 30px-radius pills and 10px/20px rounded tiles, a #111111 footer and glow shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff3300"
  on-primary: "#ffffff"
  surface-black: "#111111"
  ink-strong: "#222222"
  ink-muted: "#aeaeae"
  primary-dark: "#d12a00"
  on-primary-hover: "#df2d00"
  text-input-border: "#cccccc"
typography:
  display:
    fontFamily: roc-grotesk, "Roc Grotesk", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 42px
  display-mobile:
    fontFamily: roc-grotesk, "Roc Grotesk", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 26px
  heading:
    fontFamily: roc-grotesk, "Roc Grotesk", system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 37.4px
    textTransform: uppercase
  subheading:
    fontFamily: Arial, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 21px
  button:
    fontFamily: Arial, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1px
    textTransform: uppercase
  nav:
    fontFamily: >-
      Arial, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif, Arial, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto,
      Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: >-
      Arial, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif, Arial, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto,
      Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
    letterSpacing: 2px
    textTransform: uppercase
rounded:
  xs: 10px
  sm: 20px
  md: 30px
  lg: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 9px
  s3: 10px
  s4: 10.5px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 9px 30px
    height: 39px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 10px 15px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 5px 10px
    height: 54px
    borderColor: "{colors.text-input-border}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is `https://th.jbl.com/` (final URL `https://th.jbl.com/?`), titled "JBL Thailand Official Website - Speakers, Headphones & Sound Systems" (language `th`). It is the Thai-language consumer storefront for JBL, a Harman brand, so the file is named for the measured site, JBL Thailand. The page is 1,280px wide and 2,121px tall.

The capture is a classic electronics storefront. At the top, a thin utility row (a "ระดับมืออาชีพ" professional-level link with a chevron, "Buy Authentic" and "สนับสนุน" support) sits over a red hairline; beneath it the main bar holds the orange-red JBL logo tile at the left, the category links (ไวเลส wireless, เฮดโฟน headphones, โฮม ออดิโอ home audio, Gaming, Specialty Audio, Accessories) and a search icon at the right. A full-width promotional hero carousel follows: in the capture, a grey alarm-clock speaker on a blue and burgundy set with a "NEW! JBL HORIZON 3" lock-up, the price line "PRICE 5,290 THB", colour swatches, free-shipping and one-year-warranty badges, and an orange-red pill labelled "ดูเพิ่มเติม" (see more) over a row of progress segments. Below is a product carousel under the heading "สินค้ายอดนิยม" (popular products) with product photos (JBL Go 4, JBL Horizon 3, JBL Flip 7, JBL PartyBox Club 120), names and colour swatches, red arrows at each edge, then a newsletter strip ("ลงทะเบียนรับข่าวสาร JBL") with a pill input and a red "ส่ง" button, and a black footer with link columns (store, support, about, contact), opening hours, social icons and the Harman family logos (AKG, harman/kardon, Infinity, JBL, Lexicon, Mark Levinson, Revel).

Per the fetched page, hero slides rotate through JBL Quantum gaming headsets, Tour series earbuds and headphones, Flip 7 and Charge 6 speakers and the Summit home speakers. The tone is upbeat and promotional, with English product names and campaign lines inside Thai navigation and copy.

## Colors

- **Canvas `#ffffff`** (`colors.canvas`): the dominant background (2,750 area weight).
- **Ink `#000000`** (`colors.ink`): text on white (1,080 characters); **ink strong `#222222`** (`colors.ink-strong`, 362 characters) for product names.
- **Primary `#ff3300`** (`colors.primary`): the JBL orange-red, the fill of "ดูเพิ่มเติม" and "ส่ง", the logo tile and hover text on nav links; text on it is white (`colors.on-primary`). The 2px border of the secondary button, 36 borders in total, use the same orange-red.
- **Primary dark `#d12a00`** (`colors.primary-dark`, 10 characters) and **on-primary hover `#df2d00`** (`colors.on-primary-hover`): hover tint; the "ส่ง" button's text turns `rgb(223, 45, 0)` on hover while its fill stays `#ff3300`. `#c72800` also appears (8 characters).
- **Surface black `#111111`** (`colors.surface-black`, 1,017 area weight): the footer; white text on it carries 1,355 characters.
- **Ink muted `#aeaeae`** (`colors.ink-muted`, 74 characters) and **input border `#cccccc`** (`colors.text-input-border`). Another border color, `#aaaaaa`, appears 11 times; `#424242` once.
- Root variables published by the site include `--c-bg` `#f7f9fa`, `--c-navbar` `#fff`, `--c-tangerine` `#f6871f`, `--c-warning` `#f79062`, `--c-error` `#f04e5e`, `--c-button-hover-copy` `#db2c00` and text emphasis values (`--c-body` `rgba(0, 0, 0, .87)`, `--c-body-contrast` `rgba(255,255,255,.87)`). These were not all measured on rendered elements and are listed here as published, not tokenised.

## Typography

Fonts loaded: **roc-grotesk** (a variable face, weights 100 to 900), **JBL** (the brand's own icon/logo face) and snapchat-ghost (an icon font from a social widget). Body copy measured as Arial (2,680 characters) against roc-grotesk (301).

| Role | Font | Size / weight / line-height |
| --- | --- | --- |
| Display (h1 hero) | roc-grotesk | 42px / 400 / 42px |
| Display, 390px | roc-grotesk | 26px / 400 / 26px |
| Section heading (h2) | roc-grotesk | 34px / 500 / 37.4px, uppercase |
| Product name (h3) | Arial | 18px / 500 / 21px |
| Button | Arial | 14px / 400 / 20px, 1px tracking, uppercase |
| Secondary button | Arial | 12px / 400 / 17.1429px, 2px tracking, uppercase |
| Nav / body | Arial | 14px / 400 / 20px |

Other sizes by characters: 14px (1,716), 18px (386), 22px (304), 13px (220), 42px (161), 10px (74), 12px (54), 24px (23). Weights: 400 (2,312), 500 (398), 700 (271). The site's root variables define a type ramp `--f-2xs` 10px, `--f-xs` 12px, `--f-s` 14px, `--f-m` 16px, `--f-l` 20px, `--f-2xl` 33px, `--f-4xl` 53px and `--f-5xl` 72px, and `--font-headline` / `--font-body`. Roc Grotesk is a commercial family; the page's body stack falls through Arial, system-ui and Helvetica Neue.

## Layout

- Desktop 1,280px; the root defines `--base: 8px`, `--spacing-2xs` 4px, `--spacing-l` 32px, `--spacing-xl` 40px, `--spacing-2xl` 48px, `--spacing-4xl` 64px, `--side-offset` 48px, `--top-offset` 121px and `--margin-section` 24px.
- Measured paddings: 10px (64), 15px (45), 12px (18), 5px (17), 37px (17), 20px (10), 14px (4) and 48px (2).
- The header measured 121px high; the hero banner runs full bleed under it and the product carousel sits in a centred wide container with arrow controls at the edges. The footer is a 674px tall, 1,280px wide black block, and the newsletter strip is a white panel inset from the footer.

## Elevation & Depth

Three shadows were measured: `rgba(223, 45, 0, 0.7) 0px 0px 10px 7px` on 39 elements (an orange-red glow; which controls carry it was not identified), `rgba(0, 0, 0, 0.2) -2px 8px 27px 2px` (1) and `rgba(0, 0, 0, 0.4) 0px 5px 20px 0px` (1). Depth in the carousel is otherwise created by product photography against white and the black footer.

## Shapes

Radii: 20px (53 elements, `rounded.sm`), 10px (39, `rounded.xs`), 100px (19, `rounded.lg`), 50% (10, circular swatches and arrows) and 30px (3, `rounded.md`: the "ส่ง" button and pill input). The primary "ดูเพิ่มเติม" button has 0px radius in the measured role but appears pill-shaped in the carousel capture; the extractor's role was measured at 0px and the token `button-primary` keeps `rounded.none`. Cards and tiles use 10px or 20px.

## Components

- **Primary button**: `#ff3300` fill, white 14px/400 uppercase text with 1px tracking, 48px high, 139px wide ("ดูเพิ่มเติม"); measured radius 0px.
- **Secondary / submit button**: `#ff3300` fill, 2px `#ff3300` border, white 12px uppercase text with 2px tracking, 9px 30px padding, 39px high, 30px radius ("ส่ง").
- **Text input**: white fill, 1px `#cccccc` border, 30px radius, 5px 10px padding, 54px high.
- **Nav link**: black 14px Arial, padding 10px 15px, 38px high; hover changes the text to `#ff3300`.
- **Product tile**: photograph, 18px/500 `#222222` name, colour swatches (circles) with a plus chip for more colours.
- **Footer**: `#111111` background, white 14px roc-grotesk links, four columns, Harman brand logo row.

## Design System Architecture

No public JBL design system was found; the page links to none. The shipped CSS exposes a conventional token layer on `:root`: base unit `--base` 8px with a named spacing ramp (`--spacing-2xs` to `--spacing-5xl-negative`), a type ramp (`--f-*`), color roles (`--c-bg`, `--c-navbar`, `--c-body`, `--c-body-contrast`, `--c-em-*` emphasis levels, `--c-error`, `--c-warning`, `--c-tangerine`, `--c-button-hover-copy`) and layout offsets (`--side-offset`, `--top-offset`, `--navbar-offset`, `--pdp-sideOffset`). The tokens in this file are the measured computed values.

## Do's and Don'ts

- Do use JBL orange-red `#ff3300` for actions and the logo tile; keep the page white and the footer `#111111`.
- Do uppercase button labels with 1px tracking at 14px (2px at 12px).
- Do round input and submit controls to 30px and tiles to 10px or 20px.
- Do keep English product names alongside Thai category labels.
- Don't use `#ff3300` for large text blocks; it is an accent for actions and hover states.
- Don't treat the cookie settings link or social-widget icons as brand UI.
- Don't invent shadows beyond the orange-red glow and the two soft drops measured.

## Responsive Behavior

Measured at 390px: the h1 style drops to roc-grotesk 26px / 26px; body (footer) text stays 14px / 20px; the "ดูเพิ่มเติม" button becomes 12px / 17.1429px with 1px tracking, 45px by 131px and still `#ff3300`; the mobile navigation row shows "MENU" and the JBL logo, 69px high and 390px wide, with 12px text and 2.4px tracking in `#111111`. Mobile sizes by characters: 14px (1,330), 18px (318), 15px (304), 12px (231), 26px (174). Other breakpoints are not measured.

## Iteration Guide

1. White canvas, black text, `#ff3300` actions, `#111111` footer.
2. Headlines roc-grotesk 42px (hero) and 34px uppercase (sections); body Arial 14px/20px.
3. Buttons: 48px high with uppercase 14px labels and 1px tracking; pill inputs and submit buttons at 30px radius.
4. Tiles at 10px or 20px radius; use the orange-red glow `rgba(223, 45, 0, 0.7) 0px 0px 10px 7px` where the measured page does.
5. Space in 5, 10, 15, 20, 25px steps on an 8px base.
6. Mix Thai headings with English product names and keep campaign copy short and upbeat.
