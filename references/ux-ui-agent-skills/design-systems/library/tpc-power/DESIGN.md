---
version: alpha
name: TPC Power Holding
category: "Thai Brands"
description: "TPC Power Holding (tpcpower.co.th), a Thai holding company for biomass and other renewable power plants, uses a white canvas #ffffff, gold #c39831 and #bb8e25 headings and pills, lime #a3b808 secondary buttons, grey #666666 body text and a #313131 footer, all in Prompt with 30px/500 headings and 30px-radius pills."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#c39831"
  on-primary: "#ffffff"
  ink-strong: "#1d2129"
  ink-dark: "#333333"
  gold-text: "#c48e24"
  gold-deep: "#bb8e25"
  accent-lime: "#a3b808"
  surface-footer: "#313131"
  surface-dark: "#282828"
  hero-scrim: "#000000b3"
typography:
  display:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
  display-mobile:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 28.8px
  button:
    fontFamily: Prompt
    fontSize: 18px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: 1px
    textTransform: uppercase
  button-secondary:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 30.6px
  nav:
    fontFamily: Prompt, Helvetica, Arial, Lucida, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23px
rounded:
  xs: 3px
  sm: 4px
  md: 30px
spacing:
  s1: 5px
  s2: 5.4px
  s3: 6px
  s4: 7px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 18px
  s9: 20px
  s10: 25.59px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 30px
    height: 38px
  button-secondary:
    backgroundColor: "{colors.accent-lime}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 5.4px 18px
    height: 41px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.gold-deep}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 0px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

## Overview

TPC Power Holding Public Company Limited ("TPCH") describes itself on its home page (`https://www.tpcpower.co.th/`, title "หน้าหลัก - บริษัท ทีพีซี เพาเวอร์ โฮลดิ้ง จำกัด (มหาชน)", 532 visible elements, 4559px tall) as a holding company whose subsidiaries produce and sell electricity from renewable energy and provide supporting services. The measured page opens with a full-width video-style photograph of an industrial plant interior with a dark translucent box carrying the company name in gold and a gold pill "โครงการของเรา" (Our projects). The next band pairs a text introduction and an olive-green "อ่านต่อ" (Read more) button with a mosaic of seven photo tiles ending in a gold gradient: business nature, group structure, vision and mission, history, organisation, board of directors and executive committee. A "โครงการของเรา" gallery of aerial plant photographs with All, biomass and other-renewable filter tabs and a lime "โครงการทั้งหมด" (All projects) button follows. The footer is dark (1105px tall).

Voice is formal investor-relations Thai: long navigation of company, projects, investor relations, news room, sustainability, governance and contact pages. A consent banner was hidden by the extractor (it reports consentOverlaysHidden `s96c-banner`), so no cookie UI is part of the measurement.

## Colors

Background area by weight: white #ffffff (5543), footer #313131 (1332), black translucent #000000b3 (136, the hero heading box), #282828 (82), lime #a3b808 (25), gold #bb8e25 (18), gold #c39831 (8). Text colours by characters: white (1485), grey #666666 (1119), #1d2129 (245), #333333 (229), gold #c48e24 (93), gold #c39831 (85), translucent black #00000099 (79).

- **canvas #ffffff**: page background; the largest area.
- **ink #666666**: paragraph text.
- **primary #c39831**: the gold fill of the "โครงการของเรา" pill and the gold of the company-name heading (white text on it: on-primary #ffffff).
- **gold-deep #bb8e25**: navigation text and the border colour of six elements; **gold-text #c48e24**: gold text of 93 characters.
- **accent-lime #a3b808**: fill of the secondary buttons ("อ่านต่อ", "โครงการทั้งหมด", the investor home button).
- **ink-strong #1d2129** and **ink-dark #333333**: darker text for the 26px section headings and other copy.
- **surface-footer #313131**, **surface-dark #282828**: footer and dark blocks.
- **hero-scrim #000000b3**: the dark box behind the hero company name.

The page also exposes CSS variables from third-party plugins (`--color-primary: #4a8eff`, `--color-blue: #0073ff`, a download-manager palette, and `--s96c-*` consent-banner values); these belong to plugins and are not brand colours. The generator's #2ea3f2 link colour is a theme default and is dropped.

## Typography

**Prompt** is used for all measured text (3437 characters), with Helvetica, Arial, Lucida and sans-serif following it in the stack; FontAwesome (6 characters) and ETmodules (2) are icon fonts. Weights: 500 (2052 characters), 700 (1023), 600 (362), 900 (6) and 400 (2). Roles: company-name heading 500 30px/36px in gold; body 500 16px/28.8px, #666666; buttons 500 18px with 1px letter-spacing and uppercase transform on the gold pill; secondary button 500 18px/30.6px; navigation 16px weight 600 in the header (14px in the mobile pass). Most-read sizes: 16px (1448), 14.6667px (778), 18px (458), 26px (245), 14px (134), 20px (93), 23px (76). Prompt is loaded by the site; no substitute is named.

## Layout

Desktop viewport 1280px. The header is white with the TPC logo at left and a single row of menu labels (หน้าหลัก highlighted in gold, ข้อมูลบริษัท, โครงการของเรา, นักลงทุนสัมพันธ์, ห้องข่าว, การพัฒนาที่ยั่งยืน, ติดต่อเรา) and a Thai/English flag switch at right, each menu opening a sub-menu. Content sits in a centred container of three or four columns: a left text column beside a four-column tile grid, then a three-column photo gallery with centred tabs and a centred button. Paddings by frequency: 15px (15), 20px (12), 5px (12), 40px (7), 30px (6), 25.5938px (6), 6px (6).

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.3) 0px 12px 18px -6px` (7 elements; the photo tiles), `rgba(71, 74, 182, 0.12) -1px -1px 0px 0px inset` (2) and a 1px `rgba(0, 0, 0, 0.1) 0px 1px 0px 0px` header underline. Photo tiles are tinted with a gold gradient rising from the bottom edge and white text over it; the hero heading sits on a #000000b3 box.

## Shapes

Measured radii: 4px (3 elements), 3px (2) and 30px (1). The gold "โครงการของเรา" button is a 30px-radius pill; the lime buttons, tiles and gallery photographs have square corners in the capture and a 0px radius in the recorded hover state.

## Components

- **Primary pill:** "โครงการของเรา", fill #c39831, white Prompt 500 18px uppercase with 1px letter-spacing, padding 10px 30px, 203px by 38px, 30px radius.
- **Secondary button:** lime #a3b808, white Prompt 500 18px/30.6px, padding 5.4px 18px, 41px tall; "อ่านต่อ" keeps its fill on hover and only its border colour changes from white to rgba(255, 255, 255, 0.67).
- **Tiles:** seven photographic squares with line icons (solar panel, org chart, target, history clock, people) and white two-line Thai labels over a gold gradient.
- **Filter tabs:** All (grey chip), "โรงไฟฟ้าชีวมวล" and "โรงไฟฟ้าพลังงานหมุนเวียนอื่นๆ".
- **Header:** white with gold-deep labels, 1px bottom shadow.
- **Footer:** #313131 background, white text and a long link list repeating the company, project, investor and sustainability pages.
- The back-to-top arrow at the right edge of the capture is a utility control and not documented as brand UI.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened page https://www.tpcpower.co.th/ links to company, investor and news pages only. The de-facto system is a themed site with plugins: the extraction records ETmodules and FontAwesome icon fonts and plugin-prefixed variables (`--wpdm-font`, `--s96c-primary: #bb8e25`, `--fa-style-family-classic`). The consent plugin's `--s96c-primary` value is the same gold, #bb8e25.

## Do's and Don'ts

- Do use gold #c39831 for the main pill and company-name headings, with white text.
- Do use lime #a3b808 only for secondary read-more buttons.
- Do set Prompt 500 throughout; paragraph text is 16px/28.8px in #666666.
- Do put long headings on a dark translucent box over photography.
- Don't use plugin palette colours such as #4a8eff or #0073ff as brand colours.
- Don't document the consent banner or back-to-top arrow as brand UI.
- Don't round the lime buttons or tiles; only the gold pill is rounded.

## Responsive Behavior

Mobile was measured at 390px. The company-name heading is Prompt 500 30px/36px in gold in a 312px by 82px block; the body paragraph stays 16px/28.8px in a 312px by 202px block; the secondary lime button keeps 18px/30.6px, 227px by 41px; the header measures 390px by 80px with a 1px bottom shadow and its recorded text is empty, so mobile navigation labels were not captured. Mobile size frequencies: 16px (1495 characters), 14.6667px (778), 18px (311), 26px (245), 14px (134), 20px (93). Tile and gallery column counts at narrow widths were not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #666666, primary #c39831, gold-deep #bb8e25 and the footer #313131.
2. Set Prompt 500 everywhere: 30px/36px headings, 16px/28.8px body.
3. Primary action: a 30px-radius gold pill with 18px uppercase white text; secondary actions: square lime buttons.
4. Tile grids with line icons and a bottom gold gradient; gallery of aerial plant photographs with filter chips.
5. Overlay hero headings on a #000000b3 box.
6. Measure new components before adding tokens; unmeasured states stay "not measured".
