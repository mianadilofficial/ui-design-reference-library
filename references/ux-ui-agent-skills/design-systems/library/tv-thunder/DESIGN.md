---
version: alpha
name: "TV Thunder"
category: "Thai Brands"
description: "TV Thunder (บริษัท ทีวี ธันเดอร์ จำกัด (มหาชน)) home page: white canvas with charcoal text (#333333), a green footer (#126a3c) and green nav hover (#2fc142), uppercase Mitr section titles at 32px and DBHeavent body at 22px, with every element rendering square (0px radius)."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  surface: "#126a3c"
  ink-2: "#000000"
  ink-6: "#999999"
  primary: "#126a3c"
  on-primary: "#ffffff"
  nav-hover: "#2fc142"
  accent-red: "#ff0000"
typography:
  display:
    fontFamily: "\"Mitr Regular\", DBHeavent"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 35.2px
  display-mobile:
    fontFamily: "\"Mitr Regular\", DBHeavent"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 24.2px
  heading:
    fontFamily: DBHeavent
    fontSize: 30px
    fontWeight: 500
    lineHeight: 33px
    textTransform: uppercase
  body:
    fontFamily: DBHeavent
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28.6px
    letterSpacing: 1px
  nav:
    fontFamily: "\"Mitr Regular\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: DBHeavent
    fontSize: 18.6667px
    fontWeight: 400
    lineHeight: 24.2667px
rounded:
  none: 0px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 30px
  s6: 33px
  s7: 40px
  s8: 50px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 33px 0px
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
---

## Overview

TV Thunder's home page (http://www.tvthunder.co.th/, title "TV THUNDER") is the site of a Thai television production and media company; the footer reads "Copyright © 2026 TV Thunder All rights reserved." and the studio copy begins "บริษัท ทีวี ธันเดอร์ จำกัด (มหาชน)". The page is a long white scroll (7,724px tall at 1,280px) with a centered green-and-white "TVT" logo, a one-line uppercase navigation, a large banner, and then content blocks of thumbnails with captions.

Navigation items, as read from the page: "TV PROGRAMS", "DRAMAS", "OUR PARTNERS", "PUBLISHING", "STUDIOS", "นักลงทุนสัมพันธ์" (investor relations) and "ร่วมงานกับเรา" (join us), with "Thunder Story", "เกี่ยวกับเรา" and "ติดต่อเรา" also present. Sections follow the same order: "TV PROGRAMS" (six program posters in a three-column grid, each with an uppercase title such as "SHOW ME THE MONEY THAILAND"), "DRAMAS" (six series posters), "OUR PARTNERS" (a logo row), "PUBLISHING" and "STUDIOS", where "บริการให้เช่าสตูดิโอ" (studio rental) is introduced with "The Intelligent Studio", "TVT GREEN PARK STUDIO" and "THUNDER STUDIO". The studio copy says the company offers five studios and production support such as equipment rental for LED screens, mobile stages, lighting, cranes and dollies.

In the capture, the banner under the navigation is a black-and-white tribute image with Thai memorial text. It is content inside an image slot, not a scrim or a UI element; no color or token was taken from it. The WebFetch text of the page did not describe it (the image has no alt text), so this document makes no claim about its subject beyond that it is visible in the capture.

The design is plain by measurement, not by assumption: no shadows, no radii, no filled buttons, all emphasis carried by photography and uppercase type.

## Colors

The page has almost no UI color. The extraction found one filled background (the footer's #126a3c) over a white page.

- **canvas `#ffffff`**: the page background.
- **ink `#333333`**: the body, heading and nav text color (most-read).
- **ink-2 `#000000`**: the h1 section titles ("TV PROGRAMS").
- **ink-6 `#999999`**: light-grey text, used for the "เพิ่มเติม" (more) labels in the capture.
- **primary `#126a3c`**: the green of the footer and the logo's green family. It is the only filled UI surface measured, so it was promoted to primary; **on-primary `#ffffff`** is the footer text color.
- **nav-hover `#2fc142`**: a brighter green; the measured hover state of the nav items "TV PROGRAMS", "DRAMAS" and "OUR PARTNERS" changes the text from rgb(51, 51, 51) to rgb(47, 193, 66). It also appears in the by-character text colors.
- **accent-red `#ff0000`**: a pure red text color measured on a small number of characters.

The browser/framework link color #337ab7 (Bootstrap's default link color) appears on the e-mail link "nakajan@tvthunder.co.th" and is a framework default, so it is not tokenized.

The color-by-chars ranking is #333333, #000000, #ffffff, #337ab7, #ff0000, #999999, #2fc142.

## Typography

Two families: **Mitr Regular** (a Thai/Latin display face, loaded at one weight) and **DBHeavent** (a Thai-compatible condensed text face, also one loaded weight).

| Token | Family | Size / line height | Weight | Notes |
|---|---|---|---|---|
| display (h1) | Mitr Regular, DBHeavent | 32px / 35.2px | 500 | "TV PROGRAMS" |
| heading (h2) | DBHeavent | 30px / 33px | 500 | uppercase, "TVT GREENPARK STUDIO 1" |
| body | DBHeavent | 22px / 28.6px | 400 | letter spacing 1px |
| nav | Mitr Regular | 14px / 20px | 400 | uppercase labels; the header text itself measures 15px |
| link | DBHeavent | 18.6667px / 24.2667px | 400 | |
| display-mobile | Mitr Regular, DBHeavent | 22px / 24.2px | 500 | measured at 390px |

The by-character size ranking is 14px, 22px, 23px, 15px, 18.6667px, 21.3333px, 18px, 30px and 32px. The line-height ratio is 1.1 for display and heading and 1.3 for body. The body letter spacing is 1px; no other letter spacing was measured.

No font substitute is documented because both families are loaded by the site (`fontFaces`: Mitr Regular and DBHeavent).

## Layout

A centered container 1,180px wide holds everything (h1, h3 and body text are 1,180px wide); the header is 211px tall with 33px vertical padding. The logo is centered above a single centered line of navigation links. Content blocks are a three-column grid of 16:9 thumbnails with an uppercase caption beneath, each group ended by a grey "เพิ่มเติม" (more) link. Measured paddings are 10px, 30px, 20px, 40px, 5px, 50px, 33px and 15px; the only measured gap is 10px. The spacing tokens are 5, 10, 15, 20, 30, 33, 40 and 50px. The footer is a single green bar on #126a3c whose text is white 15px with a 40px line height.

## Elevation & Depth

No box shadows were measured and the extraction found none. Depth comes only from the photographs and posters; the interface has no layered surfaces. The measured boxShadows list is empty, there are no overlays or scrims in the interface layer, and the green footer is a flat band with no border above it. The only visual layering is the photograph inside each thumbnail, so any depth you add must come from artwork, not from CSS effects.

## Shapes

`desktop.frequencies.borderRadii` in the extraction is empty: every rendered element has a computed radius of 0px. The poster thumbnails, banner, inputs and footer are square. The rounded token is `none: 0px`.

## Components

**Navigation** (`nav`, `nav-link`): no fill, 33px vertical padding, #333333 Mitr 14px labels in uppercase; on hover the label turns #2fc142 with no background change.

**Link**: DBHeavent 18.6667px with the browser/Bootstrap blue; not tokenized.

**Thumbnail grid**: three columns of posters with uppercase DBHeavent captions; card background, radius and padding were not detected.

**Footer** (`footer`): green #126a3c background with white text, a thin 1,180px container.

There are no buttons, inputs or cards detected by the extractor.

## Design System Architecture

No public design system or brand guideline exists for TV Thunder: the home page http://www.tvthunder.co.th/, opened with WebFetch, links to no brand guidelines, and the extraction found no root CSS variables (`rootVars` is empty). The de-facto system is a Bootstrap-era stylesheet (the #337ab7 link color is Bootstrap's default) with two web fonts and no custom property layer. Colors and sizes are therefore described from the measured elements only.

## Do's and Don'ts

- Do keep the page white with charcoal #333333 text and let posters carry the color.
- Do set section titles in uppercase Mitr 32px and captions in uppercase DBHeavent.
- Do use green (#126a3c for surfaces, #2fc142 for hover) as the only interface accent.
- Do keep every corner square (0px).
- Don't add shadows, gradients or rounded cards; none were measured.
- Don't use the Bootstrap blue #337ab7 as a brand color.
- Don't take colors from the memorial image in the banner slot.

## Responsive Behavior

Measured at 390px: the h1 "TV PROGRAMS" is 22px / 24.2px (desktop 32px / 35.2px) at weight 500; the body text stays 22px / 28.6px with 1px letter spacing and its block is 370px wide; by-character sizes were 14px, 22px, 15px, 12px, 18.6667px and 21.3333px. Navigation form and column counts at mobile width were not measured.

## Iteration Guide

These steps apply the measurements in order of importance, from the page surface down to the smallest text style.

1. Start from white and #333333; use uppercase Mitr for section titles.
2. Add a single green accent: #126a3c for the footer, #2fc142 on hover.
3. Keep all radii at 0px and use no shadows.
4. Use a 1,180px centered container with a three-column thumbnail grid.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=tv-thunder`.

6. When adding a section, copy the existing pattern: uppercase title at 32px, a three-column thumbnail grid with 10px gaps, uppercase captions at 22px, and a grey 'เพิ่มเติม' link below the grid. Keep Thai and Latin text in the same two fonts so mixed-language captions stay consistent.
