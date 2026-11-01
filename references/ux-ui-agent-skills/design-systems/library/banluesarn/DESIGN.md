---
version: alpha
name: Banlue Group
category: "Thai Brands"
description: "Banlue Group (banluegroup.com), the Thai publishing and content group behind Banluesarn: a white and #f7f7f7 page with a hazy full-bleed hero, extra-light Ostrich Sans headings at 64px with 8px letter-spacing, widely tracked Roboto Condensed labels, grey #777777 Roboto body text and a taupe #9f8b7f theme accent."
colors:
  canvas: "#ffffff"
  page-body: "#f7f7f7"
  ink: "#000000"
  ink-body: "#777777"
  ink-faint: "#b4b5bb"
  primary: "#9f8b7f"
  on-primary: "#ffffff"
  link: "#21759b"
  surface-band: "#f5f5f5"
  surface-tint: "#7777770d"
  hairline: "#aaaaaa40"
  nav-wash: "#ffffff40"
  border-dark: "#333333"
  border-taupe: "#9b8c77"
  border-light: "#e8e8e8"
  footer-bg: "#111111"
  band-navy: "#11398c"
  band-blue: "#1568b2"
  band-azure: "#0079bf"
  band-sky: "#4fa3f3"
  band-orange: "#ee7258"
  band-yellow: "#f6d95b"
  band-red: "#d60019"
  band-brown: "#786053"
typography:
  display:
    fontFamily: "\"Ostrich Sans\""
    fontSize: 64px
    fontWeight: 400
    lineHeight: 54px
    letterSpacing: 8px
  heading:
    fontFamily: "\"Ostrich Sans\""
    fontSize: 44px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: 8px
  subheading:
    fontFamily: "\"Roboto Condensed\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: 4px
  body:
    fontFamily: Roboto, Helvetica, Arial, Verdana, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Roboto Condensed\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 4px
    textTransform: uppercase
  button-outline:
    fontFamily: "\"Roboto Condensed\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 4px
  link:
    fontFamily: Roboto, Helvetica, Arial, Verdana, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 23px
rounded:
  xs: 3px
  sm: 100px
  pill: 9999px
  circle: "50%"
spacing:
  s1: 4px
  s2: 10px
  s3: 12px
  s4: 15px
  s5: 18px
  s6: 22px
  s7: 23px
  s8: 24px
  s9: 35px
  s10: 40px
components:
  nav:
    textColor: "{colors.canvas}"
    padding: 0px 50px
    height: 150px
  nav-link:
    backgroundColor: "{colors.nav-wash}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 4px
    height: 29px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-outline}"
    padding: 12px 18px
    height: 42px
    borderColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 10px 0px
  icon-button:
    textColor: "{colors.canvas}"
    rounded: "{rounded.circle}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    height: 66px
---

## Overview

`https://www.banluegroup.com/` is the site of Banlue Group (page title "Banlue Group"; footer "© Banlue Group"), the parent of the Thai comic publisher Banluesarn. This file is named after the measured site, Banlue Group, because the queued brand, Banluesarn, appears on the page only as one of its publishing imprints. The page says the group is "a top multi-platform content provider", that its mission is "Enhance Your Happiness", that the business was founded by Banlue Utsahajit in 1955 and expanded under Vithit Utsahajit, and that it has seven subsidiaries: Banlue Publications, Vithita Animation, Salmon House, Minimore, Pixniq, Eventure and Integrated Insights.

It is a one-page, airy, light-themed corporate site (12,846px tall at 1280px wide). A tall pastel hero (soft blurred peach and mauve with a faint polygon mesh) carries the group logo, a hexagonal mark with the "BANLUE GROUP" wordmark. Under it come an "OUR MISSION" block with a photo and a bulleted subsidiary list, a `#f5f5f5` band of seven white logo tiles, and then the subsidiary sections, the first of which, "BANLUE PUBLICATIONS", opens with a full-width deep blue `#11398c` band with a small downward pointer. Every section title is set in extra-light capitals with very wide tracking; the mood is quiet and editorial rather than promotional.

Copy is English, short and declarative, with taglines such as "Hub for comic books, comic magazines, and comic-related contents" for Banluesarn and "make news relevant" for The Matter. Navigation is four items: HOME, ABOUT US, OUR BUSINESS, CONTACT.

## Colors

- **Surfaces:** `canvas` `#ffffff` (the largest background, 15,010 area units) holds content; `page-body` `#f7f7f7` is the declared page background; `surface-band` `#f5f5f5` (4,368) is the logo-tile band; `surface-tint` `#7777770d` is a 5%-alpha grey wash (1,816); `footer-bg` `#111111` is the footer.
- **Text:** `ink-body` `#777777` is the most-read colour (5,144 characters), `ink` `#000000` (1,054) is for headings and outline buttons, white (150) for the nav and footer, `ink-faint` `#b4b5bb` (133), `primary` `#9f8b7f` (20 characters) and `link` `#21759b` (15 characters, also the colour the `body` element inherits).
- **Accent:** `primary` `#9f8b7f` is a warm taupe. The stylesheet declares it twice, as `--the7-accent-color` and `--wp--preset--color--accent`, and it also appears as a measured border colour (alongside `border-taupe` `#9b8c77`), so it is used as the group's accent. `on-primary` is white.
- **Section bands:** eight further backgrounds each measure 159 area units: `band-navy` `#11398c` (the visible "BANLUE PUBLICATIONS" band), `band-blue` `#1568b2`, `band-azure` `#0079bf`, `band-sky` `#4fa3f3`, `band-orange` `#ee7258`, `band-yellow` `#f6d95b`, `band-red` `#d60019` and `band-brown` `#786053`. The mapping of each hex to a subsidiary was not measured.
- **Lines:** `hairline` `#aaaaaa40` (the declared input border colour, 14 uses), `border-dark` `#333333` (11), `border-light` `#e8e8e8`.
- **Nav wash:** `nav-wash` `#ffffff40` is the 25%-white fill behind the HOME link and the hover fill of the other items.

## Typography

Three families: Ostrich Sans (a loaded display face, 240 characters), Roboto Condensed (936) and Roboto (5,340). Ostrich Sans is declared with no fallback in the measured rule, so no substitute is documented. The stylesheet also loads several icon fonts (icomoon-the7-font, Font Awesome 5 Free, icomoon-pixeden-stroke-32x32, icomoon-icomoonfree-16x16).

- `display` Ostrich Sans 64px / 400 / 54px with 8px letter-spacing: "ENHANCE YOUR HAPPINESS" (the h1).
- `heading` Ostrich Sans 44px / 400 / 44px with 8px letter-spacing: "BANLUE PUBLICATIONS" (white on the blue band).
- `subheading` Roboto Condensed 14px / 400 / 16.8px with 4px letter-spacing: the "PORTFOLIO" label.
- `body` Roboto 15px / 400 / 27px in `ink-body`; `link` Roboto 13px / 400 / 23px for footer links.
- `button` Roboto Condensed 17px / 400 / 21px, 4px letter-spacing, uppercase, for the nav; `button-outline` is the same family at 14px / 400 / 16px.

Sizes by characters: 15px (5,153), 16px (605, with 4px tracking), 14px (216), 13px (172), 64px (141), 44px (99), 20px (99) and 17px (31). Weights: 400 (6,145) and 700 (371). Measured letter-spacings: 8px at 64px and 44px, 4px at 20px, 17px, 16px and 14px.

## Layout

The header is 1200px wide by 150px tall with `0px 50px` padding; it is transparent over the hero and shows four tracked uppercase links in white. The stylesheet declares `--the7-content-width` as 1300px and `--the7-box-width` as 1340px.

Below the hero, sections centre their title (an "OUR MISSION" label flanked by two hairlines, then the large tracked heading), followed by a two-column row: a photo on the left, a bulleted list on the right, each bullet marked by a circular arrow icon. The seven logo tiles are equal white squares in one row on the `#f5f5f5` band. The Banlue Publications section, the only subsidiary section visible in the capture, repeats a centred label-heading-tagline stack with two round icon buttons (a home icon and a Facebook icon) below, then an image on the left and bulleted copy on the right.

Measured paddings are 22px (54 uses), 24px (45), 35px (23), 60px (15), 4px (12), 40px (8), 12px, 18px and 50px. The footer is 1280px by 66px.

## Elevation & Depth

Depth is flat and tonal: white tiles sit on a `#f5f5f5` band and sections are separated by colour bands rather than shadows. Two shadows were measured: `rgba(0, 0, 0, 0) 0px 0px 10px 0px`, a zero-alpha glow on the outline button, and `rgba(0, 0, 0, 0.2) 0px 0px 1px 1px`, a 1px hairline ring on one element. Hover on nav links adds the 25%-white wash.

## Shapes

Corners are square except for two cases. The measured radii by frequency are 50% (50 elements), 500px (11), 3px (4, the nav link) and 100px (3). The outline button measured 0px, and `--the7-base-border-radius` and `--the7-input-border-radius` are both declared as 0px. Round shapes use `rounded.circle`; the nav link uses `rounded.xs`.

## Components

- **Nav link:** white Roboto Condensed 17px, uppercase, 4px tracking, 3px radius, 4px padding, 70px by 29px for "HOME", with a `{colors.nav-wash}` fill; hover on ABOUT US, OUR BUSINESS and CONTACT adds the same 25%-white fill.
- **Outline button ("THEMATTER.CO"):** transparent, 1px `{colors.ink}` border, black Roboto Condensed 14px / 400 / 16px with 4px tracking, `12px 18px` padding, 200px by 42px, square corners.
- **Icon button:** a small dark-grey circle with a white glyph (home, Facebook) under the Banlue Publications heading; its fill was not measured.
- **Logo tile:** a white square on `{colors.surface-band}` holding one subsidiary logo.
- **Section band:** a full-width colour band (`{colors.band-navy}` for Banlue Publications) with a white 44px Ostrich Sans title.
- **Footer:** `{colors.footer-bg}`, white 13px Roboto links ("Privacy Policy"), 66px tall.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page offers no brand guidelines, logo downloads, press kit or design system (the only downloads are portfolio PDFs and book-rights catalogues). The de-facto system is read from the shipped CSS: 400 custom properties on `:root`, mostly prefixed `--the7-` (for example `--the7-accent-color` `#9f8b7f`, `--the7-base-font-size` 14px, `--the7-text-big-font-size` 15px, `--the7-h1-font-size-desktop` 44px, `--the7-input-height` 38px, `--the7-body-bg-color` `#f7f7f7`, `--the7-page-bg-color` `#ffffff`) alongside WordPress block-editor `--wp--preset--*` variables. Icon fonts named `vc_grid_v1` and `vcpb-plugin-icons` are also declared. Brand values live in theme settings rather than a published token set; the measured h1 is 64px while `--the7-h1-font-size-desktop` declares 44px.

## Do's and Don'ts

- Do keep surfaces white and light grey, and use a saturated full-width band to introduce a subsidiary section, as the Banlue Publications band does.
- Do set titles in Ostrich Sans with 8px tracking and labels in uppercase Roboto Condensed with 4px tracking.
- Do keep body copy in `{colors.ink-body}` Roboto 15px / 27px.
- Do keep corners square, with 3px on nav links and full circles on icon buttons only.
- Don't add shadows: the measured system is flat.
- Don't use `{colors.link}` `#21759b` as an action colour; it is measured on only 15 characters and the declared accent is `{colors.primary}`.
- Don't assign a subsidiary to a band colour without checking the live section.

## Responsive Behavior

Measured at 390px: the h1 is still Ostrich Sans 64px / 400 / 54px with 8px letter-spacing, occupying 336px by 162px; the h2 is 44px / 44px (336px by 88px); body text is Roboto 15px / 400 / 27px (336px wide by 108px tall). The mobile pass detected no primary-button or nav role, so mobile navigation behaviour is not measured. Mobile font sizes by characters were 15px (5,153), 16px (636), 14px (216), 13px (172), 64px (141), 44px (99) and 20px (99). The stylesheet declares `--the7-mobile-menu-width` as 300px, `--the7-mobile-page-left-margin` as 20px, `--the7-bottom-bar-switch` as 990px, `--the7-second-switch` as 1200px and `--the7-switch-content-paddings` as 778px; what those variables do on this page was not measured.

## Iteration Guide

1. Set `canvas` `#ffffff`, `page-body` `#f7f7f7`, `ink` `#000000`, `ink-body` `#777777` and `primary` `#9f8b7f`.
2. Load Ostrich Sans, Roboto Condensed and Roboto; titles at 64px or 44px with 8px tracking.
3. Open with a tall, soft, full-bleed hero image and a four-link transparent header.
4. Build sections as: centred label, tracked heading, then image-plus-bulleted-text rows; separate sections with full-width colour bands.
5. Keep everything flat and square; only icon buttons are circles.
6. Check mobile against the 390px values above; the mobile menu is not measured.
