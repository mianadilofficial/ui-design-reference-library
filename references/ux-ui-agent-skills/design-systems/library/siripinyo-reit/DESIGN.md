---
version: alpha
name: SIRIPINYO BUILDING
category: "Thai Brands"
description: "Leasing site for the 17-storey Siripinyo office building near BTS Phaya Thai, set in Sofia Sans Condensed (62px display, 22px light body) on a deep blue #144b83 canvas with brighter #0055ac header, white ink, 20px-radius buttons and 10-30px rounded blocks."
colors:
  canvas: "#144b83"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#144b83"
  on-primary: "#ffffff"
  surface-header: "#0055ac"
  surface-light: "#efefef"
  ink-black: "#000000"
  ink-icon: "#69727d"
  accent-orange: "#ff6600"
  link-green: "#00ba4b"
typography:
  display:
    fontFamily: "\"Sofia Sans Condensed\", sans-serif"
    fontSize: 62px
    fontWeight: 600
    lineHeight: 62px
  display-mobile:
    fontFamily: "\"Sofia Sans Condensed\", sans-serif"
    fontSize: 43px
    fontWeight: 600
    lineHeight: 43px
  body:
    fontFamily: "\"Sofia Sans Condensed\", sans-serif"
    fontSize: 22px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"Sofia Sans Condensed\", sans-serif"
    fontSize: 25px
    fontWeight: 500
    lineHeight: 40px
  nav:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  link:
    fontFamily: "\"Sofia Sans Condensed\", sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 35.2px
  button-secondary:
    fontFamily: "\"Sofia Sans Condensed\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 10px
  sm: 15px
  md: 20px
  lg: 30px
  xl: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 10px
  s4: 15px
  s5: 20px
  s6: 25px
  s7: 30px
  s8: 40px
  s9: 50px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 5px
    height: 50px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 46px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.link-green}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.page-body}"
---

## Overview

This is the leasing website of **SIRIPINYO BUILDING** (title: "SIRIPINYO BUILDING - Office space for rent near BTS Phaya Thai") at `https://siripinyo.com/` (the queue URL `www.siripinyo.com` redirects there). The page text names the building's owner-side entities: TSTE REIT Management Company Limited, the Siripinyo Real Estate Investment Trust ("SIRIPRT", with a "Visit SIRIPRT Website" button) and TSTE Public Company Limited. The site itself markets the building, not the trust, so it is named after the building.

The page is a one-page, dark-blue marketing sheet. A bright blue (#0055ac) header, 128px tall, carries a white rounded logo chip, four links (Home, Space For Rent, About Us, Contact Us; the active one sits in a darker pill), a white rounded control group with a language flag, three round icon buttons (phone, LINE, mail) and an outlined "SIRIPRT Website" button. Below it a hero is split: left, a translucent blue panel with the display heading "SIRIPINYO BUILDING", an italic condensed subtitle "Office space for rent near BTS Phaya Thai", a justified paragraph describing the location on Sri Ayutthaya Road (about 150 meters from BTS Phaya Thai Station and 250 meters from the Airport Rail Link station) and a white outlined "Contact Us" button; right, a tall photograph of the glass-and-steel building entrance with flags. Further sections run on the same blue: "17 storey office building, that located in the heart of Bangkok" and "PROVIDE COMFORT PRIVATE IN WORK" with a bulleted fact list (parking for more than 554 cars and 130 motorcycles, 24-hour security, shops and coffee shops, 8 passenger lifts, fully equipped facilities), then "CONVENIENT LOCATION", "UTILITY SYSTEM", "SPACE FOR RENT" and "COMMERCIAL SPACE FOR SELLING PRODUCTS" with "More Info" and "Booth Reservation" buttons. In the capture a large area of the page below the hero is empty blue (lazy-loaded blocks had not rendered).

Voice is brisk and literal: all-caps condensed headings, short utility statements, the English copy occasionally imperfect ("Shops snd Coffee shops").

## Colors

The page background is `canvas` #144b83 (also the fill of the buttons, so buttons are separated from the page by white text and rounded shape rather than by colour difference). `ink` and `on-primary` are #ffffff, the most-read text colour (2334 characters). `surface-header` #0055ac fills the header bar (1206 area weight) and the hover state of the round icon buttons. `surface-light` #efefef is a light grey background measured in lower sections. `ink-black` #000000 is used by 218 characters of text on light blocks; `ink-icon` #69727d colours the round contact icons before hover; `accent-orange` #ff6600 is a small text accent (20 characters).

`link-green` #00ba4b is measured as the colour of a navigation anchor and is also what the theme declares as its link and button colour (--mod-color-link, --mod-button-background-color #00ba4b, hover #005f06). In the capture no green UI is visible: buttons and links render in #144b83 and white. It is therefore tokenised as a measured value that the theme declares, but not as the visible brand colour. `page-body` #ffffff records the white body background that surfaces beneath the blue sections. The pink-violet outline visible on the "Contact Us" and "SIRIPRT Website" buttons in the capture was not recorded as a measured border colour, so no value is given for it.

## Typography

All brand text is Sofia Sans Condensed (2139 characters), with Sofia Sans Extra Condensed (480 characters) for subtitles and italic lines; the loaded files are Sofia Sans Condensed 300, 400, 500, 600, 700 plus italics, Sofia Sans Extra Condensed 300, 400, 500 plus italics, Nunito 400, Roboto 600 and Font Awesome 5 icons. System UI (16px / 25.6px) appears on a small amount of text (33 characters), recorded as `nav`.

Measured scale: `display` 62px / 62px at weight 600 for "SIRIPINYO BUILDING"; `display-mobile` 43px / 43px at 600 at 390px; `body` 22px / 24px at 300; `button` 25px / 40px at 500; `link` 22px / 35.2px at 500; `button-secondary` 16px / 25.6px at 400. Other measured sizes: 20px, 23px, 18px, 38px and 45px (the footer title). Weight 300 carries most text (1381 characters), 500 follows (717); the combination of a narrow face, light body weight and tight 1:1 heading line-heights gives the page its compact, poster-like voice.

## Layout

The measured page is 1280px wide and 7235px tall. The theme declares a content container of 1200px, a wide width of 1440px and a content width of 800px, plus a spacing scale of 8, 16, 24, 40, 64 and 96px (--mod-space-1 to -6). The hero is a two-column split with a text panel left and image right; later blocks are single left-aligned columns about 290px wide on the blue field in the capture. Measured gaps are 20px (38 uses), 5px, 50px and 10px; paddings 20px (98 uses), 10px (67), 5px, 30px and 50px.

## Elevation & Depth

No box shadows were measured on the page. Depth comes from colour layering: the brighter #0055ac header over the #144b83 canvas, a translucent blue panel over the hero photograph and white rounded chips (logo, control group) against blue. The theme declares WordPress shadow presets (for example a 12px 12px 50px rgba(0, 0, 0, 0.4) "deep" preset) but none were measured on rendered elements.

## Shapes

Measured radii: 20px (45 uses), 15px (20), 10px (5), 50% (3, round icon buttons), 100px (2) and 30px (1). The header controls are pills; the primary button radius is 20px, the "More Info" button 15px, the mobile menu-style buttons 10px. The theme also declares an 8px general radius (--mod-radius) and 8px image radius; the photograph in the capture has square corners.

## Components

**Header.** 128px tall, #0055ac, white text, 25px / 500 links; the current link has a darker rounded fill.

**Primary button.** `canvas` #144b83 fill with white 25px / 500 text, 20px radius, 50px tall, 5px padding ("Home" nav pill in the measurement).

**Secondary button ("More Info").** #144b83 fill, white 16px / 400 text, 15px radius, 10px 20px padding, 46px tall.

**Outline button.** White fill with blue text and a coloured outline ("Contact Us", "SIRIPRT Website") as seen in the capture; the outline colour was not measured.

**Round icon buttons.** 34px circles (phone, LINE, mail) in #144b83 with #69727d glyphs; on hover they become #0055ac with white glyphs at 0.9 opacity and grow to 37px.

**Fact list.** White 22px light bullets on the blue field.

## Design System Architecture

No public design system exists for this site: no brand guideline, press kit or design-system page is linked from the page that was read (https://siripinyo.com/). The site is a WordPress build: the stylesheet exposes `--wp--preset--*` variables and a theme token set named `--mod-*` (colours, fonts, 8px radius, form and button settings, container widths, spacing scale 8 to 96px, line-heights 1.20 for headings and 1.60 for body). Several of those theme values (for example --mod-color-primary #00ba4b and system-ui fonts) are not what the live page renders, which uses Sofia Sans Condensed and #144b83, so the live system is defined in page-level styles instead of the theme tokens.

## Do's and Don'ts

- Do keep the page on #144b83 with white condensed type and the brighter #0055ac header.
- Do use all-caps Sofia Sans Condensed headings at 62px with 1:1 line-height, and 300-weight body copy.
- Do mark the active nav link with a darker rounded fill and round contact icons with a hover change to #0055ac.
- Don't treat the theme's green #00ba4b as the brand colour; it is declared but not rendered on buttons.
- Don't leave empty blue blocks: the capture shows large unrendered areas where lazy content had not loaded.
- Don't invent shadows; none were measured.

## Responsive Behavior

Measured at 390px: the heading drops to 43px / 43px (weight 600) and the body paragraph is measured at 25px / 40px at weight 300; list-style buttons such as "Electrical System" render with a #0055ac fill, a 10px radius and 60px height. The mobile pass recorded no layout data (header link count, menu toggle, columns), so navigation and hero reflow are not measured.

## Iteration Guide

1. Keep #144b83 as canvas and #0055ac for the bar; use white ink.
2. Headings: Sofia Sans Condensed 600 at 62px, 1:1 line-height; body 300 at 22px.
3. Buttons: 20px radius, 50px tall, 25px type; secondary 15px radius, 46px tall.
4. Re-measure after lazy content loads if lower-page colours are needed.
5. Run `node web/scripts/verify-designs.mjs --slug=siripinyo-reit` after edits.
