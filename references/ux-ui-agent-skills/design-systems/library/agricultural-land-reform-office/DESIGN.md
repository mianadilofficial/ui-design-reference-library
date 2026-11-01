---
version: alpha
name: Agricultural Land Reform Office service gateway (สำนักงานการปฏิรูปที่ดินเพื่อเกษตรกรรม, ส.ป.ก. / ALRO)
category: "Thai Brands"
description: "ALRO (ส.ป.ก.) Thai-language service gateway at alro.go.th/th/ set in Prompt-Light and Prompt-Medium, with a #ffffff and #f6f6f6 canvas, #23312d ink, #00ad6e green accents, white pill labels at 10px radius with a green glow shadow over photographic six-tile cards, and a #36403d footer bar."
colors:
  canvas: "#ffffff"
  ink: "#23312d"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-gray: "#f6f6f6"
  charcoal-bar: "#36403d"
  ink-body: "#212529"
  ink-dark: "#202124"
  ink-heading: "#363f3d"
  accent-green: "#00ad6e"
  accent-orange: "#ff6600"
typography:
  display:
    fontFamily: Prompt-Medium
    fontSize: 44.8px
    fontWeight: 500
    lineHeight: 53.76px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt-Medium
    fontSize: 19.2px
    fontWeight: 500
    lineHeight: 23.04px
    textTransform: uppercase
  body:
    fontFamily: Prompt-Light
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 10px
  sm: 25px
  pill: 9999px
spacing:
  s1: 6px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 62px
    boxShadow: rgb(5, 126, 87) 0px 0px 15px 15px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 62px
    boxShadow: rgb(5, 126, 87) 0px 0px 15px 15px
  card:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
    padding: 349.047px 0px 0px
    borderColor: "{colors.surface-gray}"
---

## Overview

This file documents the page the extractor reached at https://alro.go.th/th/ (title "สปก. - สำนักงานการปฏิรูปที่ดินเพื่อเกษตรกรรม (ALRO)"). It is a gateway or launcher page rather than a full content portal: six large photographic tiles, each with a white label, below the office name. The labels are "คลิก" (a form-change notice), "เว็บไซต์ ส.ป.ก." (the office website), "ประกาศรายชื่อเกษตรกรผู้ได้รับการจัดที่ดินในเขตปฏิรูปที่ดิน" (announcement of farmers allocated land), "บริการประชาชน (E-Service)", "การประเมินคุณธรรมและความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ (ITA)" and "Facebook ถาม - ตอบ".

Important limit: the root address https://alro.go.th/ returned an Imperva hCaptcha challenge ("alro.go.th - Additional security check is required") to the extractor, and WebFetch received an empty body for both https://alro.go.th/th/ and https://www.alro.go.th/. The main office website therefore could not be measured, and everything below describes only this gateway page. The name of this file reflects that scope.

The capture shows a faded aerial photograph of buildings as the page background, the Thai name of the office centred at the top with the English name "Agricultural Land Reform Office" beneath it in green, a three-by-two grid of rounded tiles, and a dark charcoal bar fixed at the bottom with the office emblem, "Copyright@2026" and an orange "เข้าสู่ระบบ" (log in) link. A mourning ribbon is shown at the top-left corner of the capture; it is an overlay and not brand UI.

## Colors

The page uses a pale neutral field with green as the only brand hue. `canvas` is white (83 weight) and `surface-gray` #f6f6f6 is the dominant background (878 weight), also the tile-frame border colour. A translucent green #2cb78480 (249 weight) is a measured background area on the page. `charcoal-bar` #36403d (103 weight) is the bottom bar. `ink` is #23312d, a dark green-black, with `ink-body` #212529 (74 characters), `ink-dark` #202124, `ink-heading` #363f3d (the office name), and black for tile labels.

`accent-green` #00ad6e (31 characters) colours the English subtitle, with #0cad79 (31 characters) as a close second green. `accent-orange` #ff6600 (11 characters) is the hover colour of tile labels and the log-in link colour measured in the bar. `primary` #ffffff with `on-primary` #000000 text is the detected tile-label button: white fill, black text. The root CSS holds Bootstrap 4 defaults (--primary #007bff, --danger #dc3545, --success #28a745, --warning #ffc107); these are framework values and not brand colours.

## Typography

Two Prompt faces are loaded as separate families: Prompt-Light (393 measured characters) and Prompt-Medium (37). `display` is Prompt-Medium 44.8px / 53.76px weight 500 with uppercase transform (the office name); on mobile it is 19.2px / 23.04px. `body` is Prompt-Light 16px / 24px weight 700 (tile labels). Measured sizes: 16px (278 characters), 13.6px (53), 44.8px (37), 20.8px (31) and 12px (31). Weights: 700 (267 characters), 400 (95), 500 (37), 100 (31). The font stack in the root CSS is a system stack (-apple-system, Segoe UI, Roboto and so on), but the measured families on the page are the two Prompt faces.

## Layout

Measured at 1280px wide with a recorded height of 1175px. The page is a centred title block followed by a three-column, two-row grid of equal tiles, with a full-width bottom bar. Paddings measured: 15px (33 occurrences), 6px and 12px (6 each, label padding), 10px and 20px (once each). The generated card token has a fluid top padding of 349.047px, a measured value that places each tile label near the bottom of a tall image.

## Elevation & Depth

Each tile label carries a green outer glow: `rgb(5, 126, 87) 0px 0px 15px 15px` (6 occurrences), the only measured shadow. On hover a label changes text colour to rgb(255, 102, 0). Tiles sit in pale #f6f6f6 frames over the faded background photograph, so depth comes from the glow and from the photographic imagery rather than layered shadows.

## Shapes

Radii measured: 25px (12 occurrences, tile frames), 0px 0px 25px 25px (6, the lower label area of each tile), 10px (6, white labels) and 50% (1). The scale is 10px, 25px and a pill. Labels are therefore rounded rectangles inside tiles whose corners are rounded more generously.

## Components

**Tile label** (`button-primary`, `button-secondary`): white fill, 16px Prompt-Light weight 700, 6px 12px padding, 62px high, 10px radius, with the green glow shadow; primary text is black and secondary text is #23312d. On hover the text turns orange (rgb(255, 102, 0)).

**Tile** (`card`): #f6f6f6 background and border, 25px radius, containing a full-bleed illustration or photograph, the circular office emblem and the label. **Bottom bar**: #36403d with a small emblem, the office name in white and the English name in green, and the orange log-in link at the right.

## Design System Architecture

No public design system or brand-guideline page was found. Research pages could not be opened (see Overview). The extraction shows a Bootstrap 4 base (root variables --primary #007bff, --breakpoint-sm 576px, --breakpoint-md 768px, --breakpoint-lg 992px and the usual colour names) with two Prompt font files named Prompt-Light and Prompt-Medium. The brand layer consists of the green and orange accents and the emblem.

## Do's and Don'ts

- Do present entry points as large illustrated tiles with a white label at the bottom.
- Do use #00ad6e for the English office name and #ff6600 only for hover and log-in emphasis.
- Do keep tile frames at 25px radius and labels at 10px.
- Do put the office emblem in a circle on every tile.
- Don't use Bootstrap blue #007bff as a brand colour.
- Don't treat the mourning ribbon as part of the visual identity.
- Don't claim measurements for the main office website; it was not measured.

## Responsive Behavior

A mobile pass was recorded. On mobile the heading measured 19.2px / 23.04px weight 500 (against 44.8px on desktop), body copy stayed 16px / 24px weight 700, and the detected button was a tile label measured #212529 text on a #f8f9fa fill with 4px radius, 6px 12px padding, 62px high and a 1px solid #f8f9fa border. Breakpoint widths and the tile column count on mobile were not measured.

## Iteration Guide

1. Begin with the white and #f6f6f6 canvas, #23312d ink and Prompt-Light 16px.
2. Add green #00ad6e only as an accent; use orange #ff6600 for hover.
3. Keep labels at 10px radius and tiles at 25px.
4. Measure the main site separately once it is reachable.
5. Re-run `node web/scripts/verify-designs.mjs --slug=agricultural-land-reform-office` after changes.

## Measurement Notes

Additional measured values: text colours #000000 (73 characters), #ffffff (53), #202124 (40), #363f3d (37), #00ad6e (31), #0cad79 (31) and #ff6600 (11); the border colour #f6f6f6 appears six times; background areas are #f6f6f6 (878), #2cb78480 (249), #36403d (103) and #ffffff (83). The spacing scale in the frontmatter is 6px, 10px, 12px, 15px and 20px. No measurement exists for navigation, forms, tables or any inner page of the office website, so none are described here; any such value must be measured before it is added.

The capture itself shows how the tiles are composed: each tile fills its frame with a different full-bleed image (a green land document, a drone over a landscape, a purple announcement graphic, a service-desk scene, an integrity-assessment poster and a social-media Q and A graphic), the circular office emblem sits near the upper middle of every tile, and the white label with black Thai text sits below it. Voice is plain and directive: labels name the service ("บริการประชาชน (E-Service)", "Facebook ถาม - ตอบ") rather than describe it, and one tile uses the single word "คลิก" (click).
