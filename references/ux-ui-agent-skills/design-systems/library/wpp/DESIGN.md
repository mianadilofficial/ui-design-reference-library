---
version: alpha
name: "WPP"
category: "Agencies & Studios"
description: "WPP: global communications group site on a white canvas with navy #000050 text and controls, wppSans weight 300 uppercase display at 52px, 4px-radius buttons, a floating navy pill nav, warm #fafaf0 footer and image-led case tiles."
colors:
  canvas: "#ffffff"
  ink: "#000050"
  primary: "#000050"
  on-primary: "#ffffff"
  surface-2: "#fafaf0"
  nav-border: "#ffffff1a"
typography:
  display:
    fontFamily: wppSans, "wppSans Fallback", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial
    fontSize: 52px
    fontWeight: 300
    lineHeight: 52px
    letterSpacing: "-0.4px"
    textTransform: uppercase
  display-mobile:
    fontFamily: wppSans, "wppSans Fallback", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial
    fontSize: 32px
    fontWeight: 300
    lineHeight: 35.2px
    letterSpacing: "-0.4px"
    textTransform: uppercase
  body:
    fontFamily: wppSans, "wppSans Fallback", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial
    fontSize: 18px
    fontWeight: 300
    lineHeight: 19.8px
    letterSpacing: "-0.45px"
  button:
    fontFamily: wppSans, "wppSans Fallback", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 56px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 58px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.pill}"
    padding: 0px 0px 0px 24px
    borderColor: "{colors.nav-border}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 40px 32px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

# WPP

## Overview

The WPP home page (https://www.wpp.com/en, title "WPP | Trusted growth partner for the world's leading brands") is the corporate site of the global communications and advertising group. The measured page is airy and almost monochrome: a white canvas, a single deep navy (#000050) used for all text and controls, and large, colourful photography and video carrying every hint of colour. The page opens with an uppercase, centred, light-weight headline in the proprietary wppSans face, "WPP IS THE TRUSTED GROWTH PARTNER FOR THE WORLD'S LEADING BRANDS", at 52px weight 300. A large rounded hero image (a spotted white flower in the capture) carries a floating navy pill navigation containing the "WPP" wordmark and a "Menu" control with a dotted-grid icon, plus a circular play button at the lower right. Below, "OUR WORK" introduces a masonry grid of client case tiles (Nike, TikTok, The Coca-Cola Company, Transit Days, Got Bag, Vaseline Originals, IWC Schaffhausen), each with a client name and the year "2026" in small type and, for videos, a circular play badge. The page is 6534px tall at 1280px width and later sections include a careers call to action ("Explore careers at WPP") and a pale cream footer.

## Colors

The palette is two colours plus a warm tint. `canvas` #ffffff covers by far the most area (weight 9251). `ink` and `primary` are the same navy #000050, the colour of 2280 of the 2446 text characters and the fill of the primary button and floating nav; `on-primary` is #ffffff (166 characters). `surface-2` #fafaf0 is a warm off-white used for the footer band (weight 623). `nav-border` #ffffff1a is a 10 percent white outline on the navy nav pill. Hover turns the nav pill background to rgb(10, 30, 120), which is #0a1e78 and appears in the area ranking with weight 0. A light grey #f3f3f3 (weight 31) and a lilac #d2beff (weight 0) were also seen. Published root variables include `--color-secondary-tint-700` #6464d2, `--color-tertiary-purple` #7800dc, `--color-new-web-colors-grey-4` #767676 and `--color-neutral-500` lab(48.496% 0 0); they are declared in the stylesheet but the measured page uses only the navy and white for text.

## Typography

One proprietary family, wppSans, loaded at weights 300, 400 and 500 (2446 characters), with a metric fallback and a system stack (system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial). Weight 400 covers 2170 characters and 300 covers 276. `display` is 52px, weight 300, line-height 52px, tracking -0.4px, uppercase; `display-mobile` is 32px with line-height 35.2px. `body` is 18px, weight 300, line-height 19.8px, tracking -0.45px; the most frequent measured size is 18px with -0.36px tracking (1188 characters). `button` is 16px, weight 400, line-height 16px. Other sizes: 14px (487 characters), 12px (237), 40px (70, section titles such as "OUR WORK"), 32px (34). All tracking is slightly negative: -0.28px at 14px, -0.32px at 16px, -0.4px on 32px, 40px and 52px. Root variables name text styles such as `--text-mobile-display-2--line-height` 110% and `--text-mobile-display-3--letter-spacing` -.4px, `--text-lg` 1.125rem.

## Layout

The root variable `--container-grid` declares a 1440px grid container, `--container-md` 28rem and `--spacing-3_5` 14px. The measured page uses generous vertical spacing: paddings of 24px (18 occurrences), 6px (14), 4px (13), 16px, 80px (3), 40px, 112px (2), 96px, 32px and 48px. Spacing tokens: 4px, 6px, 8px, 10px, 12px, 16px, 24px, 32px, 40px, 48px. The hero image spans nearly the full content width with rounded corners; the case grid mixes one wide tile with narrow portrait tiles in two rows (three then four), with consistent gutters and captions below each image.

## Elevation & Depth

Flat. The only measured shadow is a stack of fully transparent shadows (rgba(0, 0, 0, 0) 0px 0px 0px 0px repeated five times), which is the Tailwind default reset and draws nothing. Root variables show Tailwind v4 utilities (`--tw-ring-shadow` 0 0 #0000, `--tw-inset-shadow-alpha` 100%, `--blur-lg` 16px). Depth is created by imagery, the floating navy nav pill over the hero photograph, and the 1px translucent outline.

## Shapes

Mostly 4px corners (46 elements: buttons and image tiles, `rounded.sm`), 2px on 13 (`rounded.xs`), 9999px on 7 (the nav pill and circular play buttons), 24px on 6 (`rounded.xl`, large imagery), 8px on 2 and 6px on 1 (card, `rounded.md`).

## Components

- Primary button (`button-primary`): navy #000050 fill, white label, wppSans 16px weight 400, 16px 24px padding, 4px radius, 56px high ("Learn more").
- Secondary button (`button-secondary`): white fill, navy label, same type and padding, 4px radius, 58px high ("Explore careers at WPP").
- Floating nav (`nav`): navy pill, 9999px radius, 0px 0px 0px 24px padding, 10 percent white border, containing the wordmark and "Menu" with a grid icon; hover fills it with #0a1e78.
- Case tile: image, client name in navy 14px to 18px, year label, optional circular play badge.
- Text link: navy, underlined ("View all work").
- Card (`card`): white, 6px radius, 40px 32px padding.
- Footer (`footer`): #fafaf0 with navy text.

## Design System Architecture

No public design-system or brand-guideline link was found on the measured page. The shipped stylesheet is a Tailwind v4 build with a custom theme: named colours (`--color-secondary-tint-700`, `--color-tertiary-purple`, `--color-new-web-colors-grey-4`), named text styles (display, mobile-display, general-label uppercase and lowercase) and containers (`--container-grid` 1440px). Source: https://www.wpp.com/en and web/data/extracted/wpp.json.

## Do's and Don'ts

- Do set headlines in wppSans 300 uppercase with -0.4px tracking in navy #000050.
- Do keep the interface to navy on white, and let photography carry colour.
- Do use 4px-radius rectangular buttons and a pill nav.
- Do caption case tiles with a client name and a year.
- Don't add accent colours to text or buttons; only navy and white were measured.
- Don't add shadows.
- Don't use bold weights; the measured weights are 300, 400 and 500 (loaded).

## Responsive Behavior

The 390px mobile pass recorded the h1 at 32px weight 300 with 35.2px line-height, the body paragraph at 18px, and sizes 16px (1415 characters), 14px (487), 12px (237), 18px (141), 32px (132) and 24px (34). The mobile layout summary is not recorded. Grid columns, nav behaviour and image scaling on narrow screens were not measured.

## Iteration Guide

1. White canvas, navy #000050 text; headline in the `display` token.
2. A large rounded image or video hero with a floating navy pill nav and a play button.
3. "OUR WORK" at 40px weight 300 with a short sentence and an underlined link, then the tile grid.
4. Buttons at 4px radius, 16px 24px padding.
5. A #fafaf0 footer with navy links.
6. Run `node web/scripts/verify-designs.mjs --slug=wpp` after edits.
7. Voice: short declarative statements in uppercase, one sentence of support below each section title ("World-class ideas and how they deliver results for our clients.").
8. Section order in the capture, for composing a similar page: opening statement, hero media with the floating nav, "OUR WORK" with its link and case grid, then further sections down to the careers prompt and the footer; the measured scroll height of 6534px at 1280px shows the page continues well beyond the first two screens of the capture.
9. Image treatment: tiles keep their native portrait or landscape proportions inside the grid, show a single client name beneath, and use the same small navy caption style for the year. Video tiles carry a thin white circular play outline; photographic tiles carry nothing over the image.
10. Hover behaviour measured: the nav pill changes background from transparent to #0a1e78 while its white label stays unchanged; the "View all work" link keeps navy text. No other hover states were recorded.
11. Keep buttons textual and short, using a verb and a destination ("Learn more", "Explore careers at WPP"), set at 16px weight 400 inside a 56px or 58px tall target.
