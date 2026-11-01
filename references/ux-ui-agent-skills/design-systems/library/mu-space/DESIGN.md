---
version: alpha
name: "mu Space Corp"
category: "Thai Brands"
description: "mu Space Corp (muspacecorp.com), a Thai satellite and space technology company, measured live: a pure black #000000 canvas, white Montserrat type with wide letter-spacing, translucent pill buttons with 25px and 30px radii, and a #0a0a0a header and footer."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#1ebbf0"
  on-primary: "#ffffff"
  surface-2: "#0a0a0a"
  surface-3: "#595959"
  ink-2: "#d2d2d2"
  ink-3: "#21759b"
  ink-4: "#69727d"
  ink-6: "#85868c"
  hairline: "#ffffff59"
  button-primary-bg: "#000000bf"
  text-input-border: "#aaaaaa40"
typography:
  display:
    fontFamily: Montserrat, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  display-mobile:
    fontFamily: Montserrat, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 1px
  button:
    fontFamily: Montserrat
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.914286px
  nav:
    fontFamily: Montserrat, Helvetica, Arial, Verdana, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 21px
  link:
    fontFamily: Montserrat
    fontSize: 16px
    fontWeight: 500
    lineHeight: 37px
  input:
    fontFamily: Montserrat, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.2px
rounded:
  xs: 3px
  sm: 25px
  md: 30px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 10px
  s4: 11px
  s5: 12px
  s6: 13px
  s7: 15px
  s8: 20px
  s9: 23px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 11px 32px
    height: 40px
  button-secondary:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 23px
    height: 41px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 23px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 0px 50px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 4px 12px
    height: 33px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.page-body}"
---

# mu Space Corp

## Overview

mu Space Corp is a Thailand-based satellite and space technology company. The measured page is https://muspacecorp.com/ (the queued address was the www form) and its document title is "mu Space Corp – Space technology and satellite company in Thailand". The home page is a dark, cinematic scroll about 3,161px tall at 1280px width. A near-black header carries a small white waveform mark at left and a single row of uppercase navigation links: About Us, Product & Tech, Solutions, Updates, Careers, IR, Private Roadshow and Contact, with a further "Moonrace the Game" entry. Below it a wide still from a mission-control video shows a dark control room with an oscilloscope-style interface and silhouetted viewers, followed by an italic quote: "Our mission is to solve the ever-diminishing natural resources problem on earth, by searching for alternative resources in space".

The next block is a satellite over Earth's limb with the lines "We are Building / The Next Generation of Satellites / For Your Mission." in widely tracked light type and an outlined "View Detail" button. After it, a full-width render of a spacecraft carries the heading "mu Space Corp", the line "We build High-Powered Satellites from the ground all the way to space." and a dark pill button labelled "The mu-b200". A centred heading "Our Partners and Customers" opens a logo section, and a dark footer closes the page.

Imagery is the whole visual identity: photoreal renders and mission footage on black, with almost no color outside the imagery. The voice is declarative and mission-led ("We are Building", "We build"). The measured document used Elementor and a theme named The7, and the consent overlays and two scrims (a sticky mobile-header overlay and an Elementor popup) were hidden before measuring; they are not part of the system.

## Colors

The identity is monochrome. The canvas is pure black, #000000 (`canvas`), the largest measured background (area weight 4,854). A translucent black, #0000008f, is measured at weight 1,053 (overlays on imagery), and #000000bf, black at 75% opacity, is the fill of the "The mu-b200" pill button (`button-primary-bg`). Header and footer use #0a0a0a (`surface-2`, background of the footer role and the theme's `--the7-float-menu-bg`). A mid grey #595959 (`surface-3`) is the fill of the form's Send button on the contact area and was measured on the mobile pass.

Text is white, #ffffff (`ink`, `page-body`), measured on 735 characters, with a light grey #d2d2d2 (`ink-2`) for the copyright line, and smaller greys #69727d (`ink-4`) and #85868c (`ink-6`). A muted teal blue #21759b (`ink-3`) is measured on 15 characters, and a bright cyan #1ebbf0 (`primary`) is the color of an icon-only 50px by 50px link (text size 0px); it is measured on nine characters and is the only saturated color the extractor found. It is recorded as the accent token because it is the sole measured accent, but it is not used for any filled button on this page.

Hairlines are translucent white: #ffffff59 (`hairline`) is the 2px border of the "View Detail" outline button; it measured as white at 35% opacity before hover and 75% on hover. An #aaaaaa40 border (`text-input-border`) outlines the one input. Theme variables show other greys (#5b5b5b, #a0a0a0) and the stock WordPress cyan #0693e3; they are theme defaults and are not placed in the frontmatter.

## Typography

One family, Montserrat, carries every measured character (919). Loaded weights are 300, 400, 500, 600 and 700 in normal style plus 400 italic; Font Awesome 5 Brands and FontAwesome supply icons. The declared stacks are "Montserrat, sans-serif" for content and "Montserrat, Helvetica, Arial, Verdana, sans-serif" for the header.

Measured roles:
- `display`: the quote and mission headings at 22px, weight 400, line-height 33px, white, italic in the quote.
- `display-mobile`: 12px, weight 400, line-height 18px, letter-spacing 1px.
- `button`: 16px, weight 400, line-height 18px, letter-spacing 0.914286px (the "The mu-b200" pill).
- `link`: 16px, weight 500, line-height 37px (the "View Detail" outline button).
- `nav`: the header at 17px, weight 500, line-height 21px, set in uppercase (the header measured `text-transform: uppercase`).
- `input`: 13px, weight 400, line-height 18.2px.

Size counts by character are 16px (219), 17px (174), 12px (138), 22px (130), 18px (70), 37px (46), 8px (42) and 27px (32). Weights are 400 (538), 500 (244), 600 (83), 300 (39) and 700 (15). Letter-spacing is a defining trait: the 37px and 27px heading lines are tracked at 2.74286px and 1.82857px, the 18px line at 1.82857px, and the 12px and 8px small text at 1px, while the 16px button text is 0.914286px. The effect is a spaced-out, technical, light-weight display style set in sentence case for headlines and uppercase for navigation.

## Layout

The page is a full-width, edge-to-edge sequence of image blocks. The header measures 200px tall with 50px of horizontal padding, containing the logo and nav links. Content blocks sit inside a column that is about the same width as the first still image, with text left-aligned over the imagery: the "We are Building" lines start about a tenth of the page width from the left edge, over the satellite render, and the "mu Space Corp" block overlaps the lower render. The partners section is centred.

Paddings by weight are 4px (37), 10px (20), 13px and 20px (9 each), 50px (3), 23px and 12px (2 each). Gaps measured are 5px (two) and 50px (one). The spacing tokens list 4, 5, 10, 11, 12, 13, 15, 20, 23 and 24px. Density is very low: large black areas separate each image and headline, so the page reads as a deck of full-bleed frames rather than a grid of cards.

## Elevation & Depth

Elevation is nearly absent. The only box shadows measured are rgba(0, 0, 0, 0.5) 0px 0px 0px 0px on four elements (a zero-size value with no visible effect) and rgba(0, 0, 0, 0.2) 0px 0px 1px 1px on one. Depth comes from photographic lighting: Earth's limb glow behind the satellite, white highlights on spacecraft hardware, and translucent black overlays (#0000008f, #000000bf) laid over images so that text stays readable. There are no cards, drop shadows or gradients in the measured CSS.

## Shapes

Shapes are pills and a few small radii. Measured radii are 10% (4 elements), 25px, 30px and 3px (one each). The "View Detail" button uses 25px (`rounded.sm`), the "The mu-b200" button uses 30px (`rounded.md`), and the Send button on the mobile pass uses 3px (`rounded.xs`). `rounded.pill` is 9999px. Pills are intentionally translucent or outlined so they sit lightly over imagery, with a 2px translucent white stroke on the outline version.

## Components

**Primary button** (`button-primary`): a pill with a #000000bf fill, white label at 16px weight 400 with 0.914286px tracking, padding 11px 32px, height 40px and a 30px radius. It labels a product page link ("The mu-b200") and sits on a render.

**Secondary button** (`button-secondary`) and **link**: "View Detail", a transparent pill with a 2px #ffffff59 border (75% white on hover), a white 16px weight 500 label, padding 0px 23px, height 41px, 25px radius. Hover changes only the border opacity.

**Navigation** (`nav`): the header, uppercase 17px weight 500 white text with 50px side padding. Hover on the nav links changes the text to a transparent color in the measured probe, so the hover state shows a decorative treatment from the theme that was not captured as a color value.

**Text input** (`text-input`): white fill, black text at 13px, padding 4px 12px, height 33px, an #aaaaaa40 border and a square (0px) radius. A "Send" button in #595959 with a 3px radius belongs to the same contact form (measured on the mobile pass).

**Footer** (`footer`): #0a0a0a fill, white 16px text, links About us, Product & Tech, Solutions, Updates and others, and the copyright line "Copyright ©2026 mu Space Corp. All rights reserved." at 12px in #d2d2d2.

## Design System Architecture

No public mu Space design system or brand-guideline page was found linked from the home page, and none was opened for this document. The site is built with the WordPress theme The7 and Elementor, evident from the shipped root custom properties: `--the7-*` variables (for example `--the7-h1-line-height: 54px`, `--the7-h1-font-weight: 400`, `--the7-float-menu-bg: #0a0a0a`, `--the7-bottom-color: #ffffff`), Elementor global typography variables (`--e-global-typography-the7_fonts_widget_title-font-size: 15px`) and WordPress presets (`--wp--preset--font-size--large: 36px`). The theme declares Roboto for its button and menu-element variables, but the measured pages render in Montserrat, so Roboto is not used on the home page. The brand layer is therefore a minimal, de-facto one: black, white, Montserrat and translucent pills. Source reviewed: https://muspacecorp.com/ only.

## Do's and Don'ts

Do keep the canvas black (#000000) and set text in white, with #d2d2d2 for fine print.

Do set Montserrat with generous letter-spacing (1px to 2.74px) on headlines and small text, and uppercase for navigation.

Do use outlined or translucent pill buttons (25px and 30px radii) over imagery.

Do let photographic renders of satellites and mission footage carry the color.

Don't add card shadows, gradients or bright fills; the measured system has none.

Don't use the stock WordPress cyan #0693e3 or the theme's grey #5b5b5b as brand colors.

Don't treat the Elementor popup, mobile header scrim or cookie overlays as UI.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the quote and heading measure 12px, weight 400, line-height 18px, letter-spacing 1px, white, in a 330px-wide box; the copyright line is 12px in #d2d2d2 in a 370px-wide box; and the Send button measures 15px, weight 400, white on #595959 with padding 12px 24px and a 3px radius at 370px width. Character counts by size on mobile are led by 12px (268) and 16px (223). Breakpoints, navigation form and image treatment on mobile were not measured.

## Iteration Guide

1. Start with `canvas` #000000, `ink` #ffffff, `surface-2` #0a0a0a and `ink-2` #d2d2d2.
2. Set all type in Montserrat; 22px/400 for statements, 16px for buttons, 17px/500 uppercase for navigation, tracked 1px or more.
3. Build buttons as pills: translucent black fill with 30px radius, or transparent with a 2px #ffffff59 border and 25px radius.
4. Sequence full-bleed render frames with short, mission-style statements on top; avoid cards.
5. Run `node web/scripts/verify-designs.mjs --slug=mu-space` after edits.
6. If a value is not in the frontmatter or `web/data/extracted/mu-space.json`, leave it out.
