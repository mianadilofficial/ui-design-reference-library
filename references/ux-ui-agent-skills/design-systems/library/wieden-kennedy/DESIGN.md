---
version: alpha
name: "Wieden+Kennedy"
category: "Agencies & Studios"
description: "Wieden+Kennedy agency site: black and white bands, Univers LT Std Light (weight 300) at 68px display and 45px statements, grey #6c757d captions, full-bleed campaign imagery with +OFFICE tags, circular 50% controls and no shadows or filled buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#6c757d"
  primary: "#6c757d"
  surface-3: "#212529"
  ink-5: "#adb5bd"
  ink-on-dark: "#ffffff"
typography:
  display:
    fontFamily: "\"Univers LT Std\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 68px
    fontWeight: 300
    lineHeight: 81.6px
  display-mobile:
    fontFamily: "\"Univers LT Std\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 52px
    fontWeight: 300
    lineHeight: 62.4px
  heading:
    fontFamily: "\"Univers LT Std\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 51.2px
    fontWeight: 300
    lineHeight: 61.44px
  subheading:
    fontFamily: "\"Univers LT Std\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 24px
    fontWeight: 300
    lineHeight: 28.8px
  body:
    fontFamily: "\"Univers LT Std\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 45px
    fontWeight: 300
    lineHeight: 58.5px
  link:
    fontFamily: "\"Univers LT Std\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 20px
    fontWeight: 300
    lineHeight: 30px
rounded:
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 32px
  s6: 41.6px
  s7: 45px
  s8: 48px
  s9: 65px
  s10: 75px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  footer:
    textColor: "{colors.canvas}"
    padding: 0px 0px 0px 45px
---

# Wieden+Kennedy

## Overview

wk.com is the website of Wieden+Kennedy, an independent creative network, and its page title reads "An independent creative network | Wieden+Kennedy". The measured home page is 6884px tall at 1280px wide and is almost entirely typographic and photographic: a black stage, a light-weight Univers headline set very large, and film-still thumbnails of campaign work. The opening is a full-bleed reel with a single work title ("Nike: Never Slept, Always Dreamed.") and a small office tag ("+PDX") above it, followed by a work grid on white (LEGO "+AMS", McDonald's "+NYC"), and then an about statement set at 45px on black: "We were founded as an ad agency that didn't like advertising."

The interface has almost no chrome. The wordmark "Wieden Kennedy+" sits top left, with a search icon and a two-line menu icon at top right; titles are overlaid on or under imagery with a "View work →" label. Copy is conversational and plain, in the first person plural.

The opened homepage lists featured work with the office that made it: Nike "Never Slept, Always Dreamed" and "Rip The Script" (+PDX), LEGO "Everybody Wants a Piece" (+AMS), McDonald's "The World Cup Goes to McDonald's" and "Minecraft" (+NYC), Absolut Tabasco (+LDN), Cerveza Victoria (+MX), YETI (+PDX), Ford "Ready Set Ford" (+NYC), Travel Oregon (+PDX) and DoorDash (+PDX). The about blurb names three famous lines of work, "Just Do It", "This Is SportsCenter" and "Dilly Dilly". The site navigation is Work, About, Jobs, Contact, Search and an Instagram link.

## Colors

The palette is black, white and grey. By area, `page-largest` `#000000` dominates (23863 units against 5121 for white `#ffffff`), so the page reads as a black stage with white interludes. `canvas` `#ffffff` is the white panel behind the work grid, and the page body background itself measured `#e9ecef`.

Text is white `#ffffff` on black (1144 measured characters) and `#6c757d` grey (1267 characters) on white; the generated `ink` and `primary` roles both resolve to `#6c757d` because the site has no call-to-action button, and the measured grey is the colour of the captions and the interactive "View work" labels on the white grid. `ink-on-dark` `#ffffff` is added as a token for the dominant white-on-black text (a value measured in the extraction). Additional measured greys are `surface-3` `#212529` (borders and a dark panel) and `ink-5` `#adb5bd` (12 characters). Black text `#000000` appears in 153 characters. There are no brand hues in the interface; color comes from the campaign imagery.

## Typography

One family: Univers LT Std, at weights 300 (2543 characters) and 500 (54), with the system stack following it. Display is 68px at weight 300 with an 81.6px line height (52px with a 62.4px line height on the measured mobile pass). The work title heading is 51.2px, weight 300, line height 61.44px. The about statement (body role) is 45px, weight 300, line height 58.5px, and the page body is 32px with a 48px line height. Subheads such as "Offices" are 24px with a 28.8px line height; links and nav are 20px with a 30px line height; footer links are 14px uppercase with a 16.8px line height.

By character count the dominant size is 12.8px (1116 characters, the small meta text such as "+PDX" and "View work"), then 45px (685), 51.2px (263), 24px (164), 20px (114) and 32px (113). Letter spacing is normal throughout (no tracking was measured). Univers LT Std is a commercial typeface; Helvetica Neue Light or Arial approximates it, the declared fallbacks being "-apple-system, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial".

## Layout

The page alternates full-width black bands and white bands. Work thumbnails sit in a two-column row where one tile is full-bleed to the left edge and the other bleeds to the right edge, with titles beneath or over the images. The about text is a narrow centred column of very large light type. The header row is 134px high in the measurement, with the logo at left and icons at right. Spacing values measured include 5px, 8px, 10px, 15px, 32px, 41.6px, 45px, 48px, 65px and 75px; the footer has a 45px left padding and lists the ten offices (Portland, Amsterdam, New York, Tokyo, London, Shanghai, Toronto, São Paulo, Mexico, Sydney) as "+" tags.

## Elevation & Depth

No box shadows were measured. Depth is created by full-bleed photography and video, black-to-white section changes and text over a darkened image area. The only border colors measured are `#212529` (7 uses) and a faint `#0000001a`.

## Shapes

The only measured radius is 50% (20 elements), used for circular controls such as the scroll-down arrow and icon buttons. All images, cards and bands are square-cornered. The generated `pill` token 9999px reflects that circular treatment; no rounded rectangles were measured.

## Components

- **wordmark**: "Wieden Kennedy+" in two stacked lines, white on black, top left.
- **nav**: a search icon and a two-line menu icon at the right of the header; the measured nav link role is 68px light, the same as the display style, because the menu overlay items are headline-sized (Work, About, Jobs, Contact, Search, Instagram).
- **link**: 20px light white text with a 30px line height, such as "View work →", set at the 12.8px caption size below the title.
- **work tile**: image, a small "+OFFICE" tag, a 24px-to-51px light title and a "View work" link; no card background, border or radius.
- **footer**: white 14px uppercase links on black with 45px left padding, listing offices and legal links ("Legal Stuff", "Privacy Policy") and "© Wieden Kennedy 2026".
- **privacy notice**: a dismissible notice was present and hidden for measurement; it is not documented as brand UI.

No buttons, inputs or cards with fills were measured.

## Design System Architecture

No public design system or brand guideline is linked from https://www.wk.com/ (the opened page links to Work, About, Jobs, Contact, Search, Instagram and legal pages only). The page exposes no CSS custom properties (the measured rootVars list is empty), so the de-facto system is a set of utility-like measurements: one typeface, one weight (300) for nearly all text, a handful of greys (`#6c757d`, `#adb5bd`, `#212529`, `#e9ecef`) and a black and white banding. Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do set nearly everything in Univers LT Std Light (300) and let size, not weight, make hierarchy.
- Do use black and white bands and let the campaign imagery provide all color.
- Do tag each project with its office in the form "+PDX", "+AMS", "+NYC".
- Do write copy conversationally in the first person plural.
- Don't add shadows, rounded cards or filled buttons; none were measured.
- Don't introduce a brand accent color.
- Don't use tracking on the display type; letter spacing is normal.

## Responsive Behavior

The extraction's mobile pass recorded the display role at 52px with a 62.4px line height and 16px top padding (against 68px and 32px 0px padding on desktop). Other mobile values (the work grid columns, menu behaviour, touch targets) were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#000000` and `#ffffff` bands, with `#6c757d` for captions on white.
2. Set all type in Univers LT Std 300: 68px display, 51.2px titles, 45px statements, 12.8px meta.
3. Place work imagery full-bleed with a title and a "View work →" link, tagged with its office.
4. Keep controls circular (50%) and everything else square.
5. Re-run the extractor and gate after changes.
