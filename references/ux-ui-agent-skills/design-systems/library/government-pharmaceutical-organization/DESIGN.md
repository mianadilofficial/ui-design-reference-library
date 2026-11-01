---
version: alpha
name: Government Pharmaceutical Organization (GPO)
category: "Thai Brands"
description: "Thai state pharmaceutical enterprise site measured at gpo.or.th: white canvas with #333333 text, a teal #00a99d top bar and pill buttons, a #f8f8f8 section band, the Iconic typeface at 20px body and 30px section headings, 7.5px card radius and soft Tailwind-style shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f8f8"
  ink: "#333333"
  primary: "#00a99d"
  on-primary: "#ffffff"
  link-blue: "#0078a8"
  accent-yellow: "#ffe500"
  hairline: "#efeded"
typography:
  display:
    fontFamily: __Iconic_7c777f, __Iconic_Fallback_7c777f
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: __Iconic_7c777f, __Iconic_Fallback_7c777f
    fontSize: 37.5px
    fontWeight: 500
    lineHeight: 45px
  body:
    fontFamily: __Iconic_7c777f, __Iconic_Fallback_7c777f
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: __Iconic_7c777f, __Iconic_Fallback_7c777f
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 25px
    textTransform: capitalize
  link:
    fontFamily: __Iconic_7c777f, __Iconic_Fallback_7c777f
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 5px
  sm: 7.5px
  md: 10px
  lg: 40px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7.5px
  s3: 9px
  s4: 10px
  s5: 12.5px
  s6: 15px
  s7: 20px
  s8: 25px
  s9: 35px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 5px 5px 5px 20px
    height: 35px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 30px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px
---

## Overview
The measured page is gpo.or.th, the home page of the Government Pharmaceutical Organization (องค์การเภสัชกรรม), loaded with lang th. The overall impression is a public-service portal that behaves like a news and procurement bulletin: a teal announcement strip at the very top carrying the organisation's mission line and the Contact Center number 1648, a white header with the round GPO logotype, a text-size control, an accessibility/contrast switcher and a TH language toggle, then a navigation row, a full-width photographic hero carousel, a row of five service tiles, a news block, and a tender-notice list. Teal #00a99d is the single brand voice; everything else is neutral white (#ffffff), pale grey (#f8f8f8) and near-black grey text (#333333). The tone of the copy is formal and institutional, with ceremonial imagery in the hero (a royal-merit Buddha-image campaign for the 60th anniversary banner) next to practical items such as flood-relief medicine kits.

The page carries a floating chat button and cookie button at the right edge; these are widget controls and are not part of the brand tokens. A QR block overlays the hero corner; it is campaign content, not a component.

## Colors
Canvas is {colors.canvas} (#ffffff) and the largest background area by measured area is {colors.page-largest} (#f8f8f8), used for the tender band at the bottom of the page. Primary is teal #00a99d: it is the fill of the detected CTA (the "ดูเพิ่มเติม" pill), of the top announcement bar, the section-title rules and the label strips under each service tile. The hover record shows a pagination dot switching from white (rgb 255,255,255) to teal (rgb 0,169,157). Text is #333333 almost everywhere (1785 characters weighted), white on teal (777), and teal itself for links and active nav (121). Two minor text colors were measured: #0078a8 (link-blue, 7 characters) and #ffe500 (accent-yellow, 1 character). The page also declares a CSS variable --primary: #ffe500, so yellow is a declared variable that the visible page barely uses. Hairline borders are #efeded. Dark and light-scheme variants were not measured.

## Typography
All text uses one family, Iconic (a self-hosted, hashed web font, family name `__Iconic_7c777f`, with a generated fallback). Measured sizes by character weight: 20px (2429), 17.5px (176), 37.5px (55), 30px (52), 15px (7), 22.5px (2). Weights: 400 (2059), 700 (607), 500 (55). Desktop display is 30px / 40px at weight 400 (the measured section heading "ผลิตภัณฑ์และบริการ"); body is 20px / 30px; button labels are 17.5px / 25px with text-transform capitalize; links are 20px weight 700. On the 390px mobile pass the display becomes 37.5px / 45px at weight 500 and body text 17.5px / 25px. Thai text is set without letter-spacing (letterSpacing normal). Font substitutes: the proprietary Iconic face is not licensed here; Noto Sans Thai or IBM Plex Sans Thai are neutral stand-ins that cover Thai script, but this substitution is a suggestion, not a measured fact.

## Layout
Page width in the measurement is 1280px with a scroll height of 3803px. Content sits in a centred column with generous side gutters; the service tiles run five across, the news block is a large lead card on the left beside a stacked list of three horizontal cards on the right, and tender notices are full-width list rows with a megaphone icon, title, category and date. Measured paddings: 10px (89 occurrences), 5px (28), 20px (9), 15px (7), 35px (6); gaps: 5px (40), 10px (18), 15px (12), 7.5px (4). Spacing scale in the tokens runs s1 5px to s10 40px.

## Elevation & Depth
Cards use a Tailwind-style soft shadow: `0 4px 6px -1px rgba(0,0,0,0.1), 0 2px 4px -2px rgba(0,0,0,0.1)` (72 uses), with lighter `0 1px 3px` (7) and a deeper `0 10px 15px -3px` (6) variant. One inset shadow `0 2px 4px rgba(0,0,0,0.05)` appears on the lead card caption. Depth is otherwise flat: photographs and white cards on a pale grey band.

## Shapes
Radii measured by weight: 9999px (46, pills and circular icon buttons), 7.5px (35, cards), 10px top/bottom variants (tile corners), 5px (8), 40px (2). Tokens: xs 5px, sm 7.5px, md 10px, lg 40px, pill 9999px. The primary button uses the pill radius; cards use 7.5px; the service tiles round their photo corners at 10px.

## Components
Button-primary: teal #00a99d fill, white label, pill radius, 35px tall, padding 5px 5px 5px 20px, label 17.5px; it ends with a circular white chevron badge. Link: #333333, 20px, weight 700. Text input: white fill, #333333 text, 20px / 30px, 30px tall, 0px radius as measured. Card: white fill, 7.5px radius, soft shadow, 20px bold title. Service tile: photo on top and a teal label strip beneath. Section header: 30px heading with a thin teal rule extending to the right edge. News meta row: author, date, view count and share, all with small teal icons.

## Design System Architecture
No public design system or brand guideline was found: the home page (opened via WebFetch) links to none. The de-facto system is a Tailwind CSS build, evident from the --tw-* custom properties in :root (--tw-ring-color rgba(59,130,246,.5), --tw-shadow and others) and the Tailwind-standard shadow values. The only brand-level variables found are --primary: #ffe500, --dark: #000 and --dark-gray: #000. The font name `__Iconic_7c777f` with `_Fallback_` suffix matches a framework-generated font loader.

## Do's and Don'ts
Do use teal #00a99d for the action and structure color and white text on it. Do keep Thai body text at 20px / 30px. Do use pill buttons with a trailing circular chevron. Do use 7.5px card radii with the soft shadow. Don't treat the floating chat and cookie buttons or the QR campaign block as brand components. Don't use the browser default blue for links; the page's own links are #333333 or teal. Don't introduce a second saturated hue; yellow #ffe500 and blue #0078a8 are measured only as marginal accents.

## Responsive Behavior
Only the 390px mobile pass was measured: h1 37.5px / 45px weight 500, body 17.5px / 25px, and the primary button unchanged at 35px height, 109px width, 9999px radius. Breakpoints, navigation collapse and grid changes were not measured.

## Iteration Guide
1. Start from canvas #ffffff, ink #333333, primary #00a99d. 2. Set Thai text in a Thai-capable sans at 20px / 30px; headings 30px / 40px. 3. Build cards at 7.5px radius with the 4px/6px soft shadow. 4. Make CTAs pill-shaped, 35px tall, with a circular chevron. 5. Add a #f8f8f8 band for list sections and #efeded hairlines. 6. Keep the yellow and blue accents rare. 7. Re-measure anything not listed above before relying on it, especially hover states and dark mode, which were not measured beyond the pagination-dot hover.

## Notes on Measurement Scope
The values above come from one desktop pass at a 1280px viewport and one mobile pass at 390px of the home page only. Interior pages (about, products, procurement, news articles) were not measured, so nothing here describes them. The detected h1 is a section heading rendered in a div, not a semantic h1; its measured style (30px, weight 400, line height 40px) is used for the display token, and the hero carries its message inside imagery rather than live text. The hover pass recorded only one change: a pagination dot filling teal. Navigation hover, focus rings, form validation states and the dark/high-contrast switcher visible in the header were not measured, so their appearance is not documented. The text-size control in the header (three small buttons) and the contrast switcher are accessibility utilities of the site; their existence is visible in the capture, but their resulting styles were not captured.
