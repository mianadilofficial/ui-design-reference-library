---
version: alpha
name: Everland
category: "Thai Brands"
description: "Everland (everland.co.th) Thai residential developer site in DBHeavent 300 to 700: deep green #006341 headings and links, gold #c6893f price and rule accents, slate #545859 body text, near-black #1e1e1e header and hero on a white #ffffff canvas, 3px radius."
colors:
  canvas: "#ffffff"
  ink: "#545859"
  primary: "#006341"
  accent-green: "#00b388"
  surface-dark: "#1e1e1e"
  gold: "#c6893f"
  ink-muted: "#919d9d"
typography:
  display:
    fontFamily: DBHeavent, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 55px
  display-mobile:
    fontFamily: DBHeavent, sans-serif
    fontSize: 50px
    fontWeight: 500
    lineHeight: 50px
rounded:
  xs: 3px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 18px
  s6: 20px
  s7: 25px
  s8: 30px
  s9: 40px
  s10: 50px
components:
  link:
    textColor: "{colors.primary}"
---

## Overview

Everland's homepage (https://www.everland.co.th/, title "บริษัท เอเวอร์แลนด์ จำกัด (มหาชน) | บ้านเดี่ยว, ทาวน์โฮม, คอนโดมิเนียม | โทร : 0 2361 6156-60") is a project showcase for a Thai developer of houses, townhomes and condominiums. In the capture a dark header carries the EVERLAND wordmark with a stacked-stripe mark, three product links (บ้านเดี่ยว, ทาวน์โฮม, คอนโดมิเนียม), a phone icon, a search icon, an "EN" language link and a menu icon, over a dark hero area. A gold ceremonial invitation popup (a Royal Kathin robe offering at a temple in Nonthaburi) covers the hero in the capture; it is a temporary notice, so it contributes no colors, components or tokens to this document. The hero headline measured behind it reads "คอนโดมิเนียมคุณภาพที่ตอบโจทย์ทุกไลฟ์สไตล์การใช้ชีวิต ..." in white.

The body of the page is a green-headed section, "โครงการที่น่าสนใจ" (interesting projects), followed by full-width rows that alternate image right and image left. Each row has a pale grey band behind it, a grey project wordmark (THE POLITAN AQUA, THE POLITAN BREEZE, THE POLITAN RIVE), a short gold vertical rule, a two-line Thai tagline in dark text, a location line with a pin icon ("นนทบุรี 15 - สนามบินน้ำ"), a transit line with a train icon ("รถไฟฟ้าเอ็มอาร์ที สายสีม่วง"), then a gold price ("เริ่มต้น 1.89 ลบ.*", "เริ่มต้น 1.69 ลบ.*") separated by a thin divider from a green underlined link "รายละเอียดโครงการ". The photograph in each row has a gold bar under one edge. Imagery is lifestyle: a woman by a rooftop infinity pool, a man walking through a misty water garden, a couple on a pool daybed under a timber pergola. A circular back-to-top control sits at the right edge; it is a utility and not documented as a component.

## Colors

Measured background area is dominated by white #ffffff (7038), a translucent grey #909d9d26 (1636, the pale bands), near-black #1e1e1e (1024, header and hero), slate #545859 (943), black #000000 (922) and a translucent black #00000080 (390, a scrim). Measured text colors are white (1507 characters), slate #545859 (1431), deep green #006341 (206), gold #c6893f (139), bright green #00b388 (5) and grey #919d9d (2).

- **Primary deep green #006341**: section headings and the "รายละเอียดโครงการ" link. Chosen as primary because it carries 206 characters against 5 for the brighter green, which the extractor had picked as its most saturated color.
- **Accent green #00b388**: a bright green measured on very little text (5 characters).
- **Gold #c6893f**: price lines and the thin accent rules and bars around photographs.
- **Ink #545859**: body text.
- **Surface-dark #1e1e1e**: header and hero background.
- **Ink-muted #919d9d**: tertiary text; the same hue at low alpha (#909d9d26) forms the pale row bands.

The black scrim #00000080 and the popup's own yellow and brown are overlay and popup colors and are not tokens.

## Typography

One family, **DBHeavent**, loaded in regular, 300, 500 and 700; fallback is generic sans-serif. It is a compact Thai display-text face, so sizes run large. The display role is the hero headline at 60px, weight 700, line-height 55px, and 50px / 500 / 50px at the 390px mobile pass. The extractor recorded body text at 26px / 500 in white on the dark region (body element height 800 on desktop). No other type roles were produced by the extraction, so sizes for section headings, taglines, and price lines are not specified here beyond what the capture shows: the section heading is green and bold, taglines are dark and centered, and prices are gold. Noto Sans Thai or Sarabun are the nearest substitutes if DBHeavent is unavailable.

## Layout

The desktop pass is 1280px wide with up to three card columns counted by the extractor. The project section is a vertical list of full-width rows rather than a grid: each row splits into a text half and an image half, alternating sides, with the grey band extending the full viewport width and the photograph overlapping the band edge. Text halves are centered on their own axis (logo, tagline, location, price all center-aligned). Spacing steps recorded are 4, 5, 8, 10, 18, 20, 25, 30, 40 and 50px. The header sits on the dark hero rather than on a separate white bar.

A note on reading the measured palette: the hero and header region is the only large dark area in the measurements (#1e1e1e at 1024 weight), and white text (1507 characters) is concentrated there, so white-on-dark is the hero convention while slate-on-white is the content convention. The two greens differ sharply in usage, deep #006341 on 206 characters and bright #00b388 on 5, which is why the deeper one is treated as the working brand green and the brighter one as an occasional accent. Gold is measured on 139 characters of text, enough to be a deliberate price color rather than a one-off, and it is repeated by the thin rules and bars in the capture. The grey #919d9d is measured on only 2 characters as text, but its translucent form forms the large pale bands, so it is best read as a surface tint with a text fallback.

## Elevation & Depth

No box-shadows were recorded. Depth is created with a translucent black scrim (#00000080) over the hero, grey translucent row bands (#909d9d26) and the gold bar offset under each photograph, which reads as a flat offset accent rather than a shadow.

## Shapes

Two radii are measured: 50% (6 occurrences, circular controls and icon buttons) and 3px (2 occurrences). Photographs in the capture are square-cornered rectangles. The gold bar under each photograph is a flat rule, and the vertical gold divider is a thin line.

## Components

The extraction did not detect buttons, inputs, cards or a footer on the measured page (only the link token above is declared). What the capture shows, without token values:

- **Header navigation**: three product links, phone, search, language and menu icons on the dark hero.
- **Project row**: grey band, grey wordmark, gold rule, tagline, location and transit lines, gold price, green underlined text link, photograph with gold bar.
- **link**: "รายละเอียดโครงการ" in the deep green #006341 with underline (the token carries only the text color; size and weight were not measured).

## Design System Architecture

No public Everland design-system or brand page was opened; the research record is {none:true}. No :root color variables were captured and the extraction lists one loaded family (DBHeavent). The system is therefore a small de-facto one: three neutrals (#ffffff, #545859, #1e1e1e), a deep green, a bright green and a gold, a single typeface, and a repeated alternating-row pattern with grey bands.

## Do's and Don'ts

- Do use deep green #006341 for headings and text links and gold #c6893f for prices and rules.
- Do alternate image-left and image-right project rows on translucent grey bands.
- Do set Thai text in DBHeavent at generous sizes (hero 60px / 700).
- Do keep project wordmarks grey and small above the tagline.
- Don't use the temporary popup's gold or brown as brand colors.
- Don't add shadows; none were measured.
- Don't document the back-to-top control or popup close icon as components.

## Responsive Behavior

Measured at 390px: the hero headline is 50px / 500 / 50px, the maximum card columns fall from 3 to 2, and no menu toggle or visible header links were detected by the extractor (headerLinksVisible 0, menuToggleVisible false). The desktop pass also reported zero visible header links. How the navigation collapses on mobile is not measured. Tablet behavior and dark mode are not measured.

## Iteration Guide

1. White canvas, slate #545859 body text, DBHeavent throughout.
2. Dark #1e1e1e header and hero with a 60px / 700 white headline.
3. Section headings and text links in #006341.
4. Prices and thin accents in #c6893f.
5. Build project rows as alternating halves on pale grey bands.
6. At 390px set the headline to 50px / 500 and use two columns for cards.
