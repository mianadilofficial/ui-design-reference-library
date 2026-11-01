---
version: alpha
name: "DJI"
category: "Consumer Electronics"
description: "DJI's Thailand English storefront pairs a white #ffffff canvas and #ededed product tiles with a #272727 footer, DJI blue #0070d5 pill buttons, Open Sans at 32px/16px with negative tracking, 64px capsule outlines and studio product photography."
colors:
  canvas: "#ffffff"
  page-largest: "#ededed"
  ink: "#000000d9"
  primary: "#0070d5"
  on-primary: "#ffffff"
  surface-footer: "#272727"
  surface-blue: "#3b63a9"
  ink-on-dark: "#ffffffd9"
  ink-secondary: "#000000a6"
  ink-tertiary: "#00000073"
  ink-on-dark-muted: "#ffffffa6"
  primary-hover: "#2490e3"
  glass: "#ffffff14"
  input-border: "#6c7073"
  surface-light: "#f7f9fa"
  wash: "#0000000a"
  ink-charcoal: "#303233"
typography:
  display:
    fontFamily: "\"Open Sans\", \"PingFang SC\", \"Microsoft YaHei\", \"Helvetica Neue\", \"Hiragino Sans GB\", \"WenQuanYi Micro Hei\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-0.96px"
  body:
    fontFamily: "\"Open Sans\", \"PingFang SC\", \"Microsoft YaHei\", \"Helvetica Neue\", \"Hiragino Sans GB\", \"WenQuanYi Micro Hei\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
  button:
    fontFamily: "\"Open Sans\", \"PingFang SC\", \"Microsoft YaHei\", \"Helvetica Neue\", \"Hiragino Sans GB\", \"WenQuanYi Micro Hei\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.28px"
  input:
    fontFamily: sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 60px
  md: 64px
  lg: 99px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 17px
  s10: 19px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px 8px 34px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.glass}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 10px 16px
    height: 40px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 4px 0px 4px 12px
    height: 32px
    borderColor: "{colors.input-border}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 32px 16px
---

# DJI

## Overview

DJI is the consumer drone, handheld camera and creator-tech maker; the queued address `https://www.dji.com` resolves to the brand's own regional storefront `https://www.dji.com/th-en` (Thailand, English), titled "DJI - Official Website", and that is the site measured here. The page offers a country and region selector covering Asia Pacific, Europe, the Middle East, North America and South America, a primary navigation of Camera Drones, Handheld, Lifestyle Tech, Robot Vacuums, Specialized, Enterprise, Agriculture, Explore (Who We Are, SkyPixel, DJI Forum, DJI Blog, Careers), Support and Where to Buy, plus search, account, a region button reading "Thailand" and a blue "Store" button.

The look is product-photography first. The measured canvas is white `#ffffff`, but the page is mostly a sequence of large panels: a dark hero with a drone photograph and the title "DJI MAVIC 4 PRO" ("Spin Your World"), a 2 x 2 grid of light-grey tiles (`#ededed`, the largest measured background by area) each showing one product on a seamless pale backdrop with a small descriptor line, a big product name and two text links ("Learn More", "Buy Now"), then a full-bleed photo carousel ("Shot on Osmo 360 II") and a dark `#272727` footer. Tile titles pair a heavier weight for the brand prefix with a lighter weight for the model, as in "DJI LITO SERIES" and "OSMO POCKET 4" in the capture. Copy is short, imperative taglines: "Just Fly.", "Above It All, See It All", "Capture Every Detail", "Lead the Scene".

One extraction caveat: the page carries a hidden legacy-browser notice ("Please Change Your Browser ... Internet Explorer is no longer supported"). The extractor's h1 and body-text roles latched onto that notice, so those roles are overridden in `SOURCES.json` and no claim here rests on them.

## Colors

- **Canvas `#ffffff`**: the document background; the dominant visible surface is the light tile grey below.
- **Page largest `#ededed`**: the largest background area, the product tiles.
- **Surface light `#f7f9fa`**: a secondary pale surface (353 area units).
- **Ink `#000000d9`**: the main dark text, black at 85 percent opacity; **ink secondary `#000000a6`** and **ink tertiary `#00000073`** are the lighter tiers on light surfaces.
- **Ink on dark `#ffffffd9`** and **ink on dark muted `#ffffffa6`**: text over the dark hero and footer; pure `#ffffff` is also measured (728 characters).
- **Primary `#0070d5`**: DJI blue, the fill of the "Store" pill; **primary hover `#2490e3`** is its measured hover fill. On-primary is white.
- **Surface footer `#272727`**: the footer fill. **Surface blue `#3b63a9`**: a measured background of 516 area units whose element the extraction did not name.
- **Glass `#ffffff14`**: a 8 percent white fill used by the translucent "Download App" button. **Wash `#0000000a`** is a faint black overlay measured on a few elements.
- **Text-input border `#6c7073`**, **ink charcoal `#303233`**.

The browser-default link blue `#0000ee` appears in the extraction only as a user-agent color and is not a brand color.

## Typography

One family, Open Sans, carries all 2,136 measured characters; the declared stack continues with PingFang SC, Microsoft YaHei, Helvetica Neue, Hiragino Sans GB, WenQuanYi Micro Hei and Arial for Chinese coverage. Fonts loaded also include a "Dji" face, an atom icon font, FontAwesome and Swiper's icon font; what the "Dji" face is used for was not traced.

- **Display**: 32px / 36px, weight 600, letter-spacing -0.96px.
- **Body**: 16px / 24px, weight 400, letter-spacing -0.32px.
- **Button**: 14px / 14px, weight 400, letter-spacing -0.28px.
- **Input**: 14px sans-serif, weight 400.

Measured weights are 400 (1,603 characters), 500 (278), 600 (210) and 300 (45). The character-weighted size list is 12px (751), 16px (612), 14px (600), 32px (103), 20px, 18px and 40px; the 40px runs correspond to the oversized product titles in the capture, but their family and weight were not separately recorded, so they are not tokens. Tracking is a constant slightly negative value at each size (-0.02em).

## Layout

The desktop pass measured 1280px wide and a 4,193px page height. The primary navigation bar is 48px high and sits over the dark hero. The hero fills the full width; below it, tiles sit in two columns with a narrow gutter and a small page margin, each tile centered on its text stack with the product image beneath. A final carousel has left and right chevron arrows and neighbor slides peeking at the edges. The footer measured 1,280 × 833px with `32px 16px` padding and white text on `#272727`, opening with an app promotion ("Only in the DJI Store App"). Frequent paddings are 16px (34 uses), 5px, 32px, 6px, 24px and 72px.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.1) 0px 8px 16px 0px` on three elements and `rgba(0, 0, 0, 0.2) 0px 2px 8px 0px` on one, the soft dropdown-style kind. Most depth is photographic: studio-lit products with soft floor shadows on pale tiles, and a dark gradient hero. Borders are rare: 1px white outlines on the ghost buttons and a `#6c7073` outline on the search input.

## Shapes

Shapes are pills. The most common radius is 64px (27 elements, the ghost "Learn More"-style capsules), then 60px (11), 50% circles (10, icons and dots), and 4px on the input. The "Store" button measured a 1408px radius (fully round), the "Download App" button 99px, and one element 100px. The search input is squared at the left (`4px 0px 0px 4px`) with an attached button squared at the right (`0px 4px 4px 0px`). Product tiles are plain rectangles with no measured radius.

## Components

- **Store button** (`button-primary`): blue `#0070d5` fill, white 14px text, fully round, 32px tall, 83px wide, padding `8px 16px 8px 34px` (left padding leaves room for a bag icon). Hover: `#2490e3`.
- **Ghost capsule**: transparent fill, white 1px border, 14px text, 64px radius, 32px tall; the hero "Learn More" and "Buy Now" buttons.
- **Secondary button**: `#ffffff14` fill, white 16px text, 99px radius, 40px tall, padding `10px 16px` ("Download App").
- **Text links with chevrons**: "Learn More >" and "Buy Now >" under each tile, black on the light tiles.
- **Search input**: 14px, 32px tall, `#6c7073` border, 4px left radius, padding `4px 0px 4px 12px`.
- **Footer**: `#272727`, white text, headings at 18px / 24px weight 600.

## Design System Architecture

No public design system is published at the paths I checked: the home page links to the Explore properties (company page, SkyPixel, forum, blog, careers) but not to design guidelines, and `https://www.dji.com/brand` returned HTTP 404. The de-facto system is the shipped site: Open Sans with a Chinese-capable fallback stack, a dark-and-light panel pattern and an icon font ("DJI-atom-icon"). Root custom properties were not recorded (0 variables), so the values here come from computed styles. Source: `https://www.dji.com/th-en`.

## Do's and Don'ts

- Do let the product photograph lead: pale seamless backdrop, centered name, one short tagline and two chevron links.
- Do use DJI blue `#0070d5` only for the "Store" call to action and keep hover at `#2490e3`.
- Do use fully round pill shapes for buttons and 4px only for the search field.
- Do keep Open Sans with slight negative tracking at every size.
- Don't use `#0000ee`; it is a browser default.
- Don't treat the legacy-browser notice or its 32px heading as a brand heading.
- Don't add heavy shadows: only 8px 16px at 0.1 opacity and 2px 8px at 0.2 were measured.
- Don't round the product tiles.

## Responsive Behavior

The extraction's 390px pass did not capture a usable layout: its h1 and body roles repeat the legacy-browser notice at the same 32px and 16px sizes, no primary button was found and the nav measured 1250 × 48px. Breakpoints, the mobile menu and the tile grid on small screens were not measured.

## Iteration Guide

1. Start with Open Sans 400/500/600, ink `#000000d9` on light and `#ffffffd9` on dark.
2. Build the header as a 48px bar over the hero: logo, text links, search, account, a region pill and the blue Store pill.
3. Compose tiles in `#ededed` with a descriptor, a large model name, a tagline and two chevron links.
4. Use pill radii (64px capsules, fully round Store) and keep shadows to the two measured values.
5. End with the `#272727` footer with 32px 16px padding.
6. Re-run `node web/scripts/verify-designs.mjs --slug=dji` after changes.
