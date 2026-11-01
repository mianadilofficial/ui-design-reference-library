---
version: alpha
name: Savills
category: "Real Estate & PropTech"
description: "Global real estate services site at savills.com. White canvas with #313131 ink, Savills yellow #ffdf00, navy #35384b footer, red #cd171e uppercase links, Domine serif 56px headlines over Gotham 16px body, and square corners with no shadows."
colors:
  canvas: "#ffffff"
  ink: "#313131"
  primary: "#ffdf00"
  surface-2: "#f2f2f2"
  surface-3: "#35384b"
  ink-secondary: "#a3a4a9"
  ink-4: "#cd171e"
  ink-5: "#252839"
  ink-6: "#555764"
  hairline: "#999795"
typography:
  display:
    fontFamily: DomineWebRegular, Georgia, "Palatino Linotype", serif
    fontSize: 56px
    fontWeight: 300
    lineHeight: 84px
  display-mobile:
    fontFamily: DomineWebRegular, Georgia, "Palatino Linotype", serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 42px
  heading:
    fontFamily: DomineWebRegular, Georgia, "Palatino Linotype", serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 20.7px
  subheading:
    fontFamily: DomineWebRegular, Georgia, "Palatino Linotype", serif
    fontSize: 35px
    fontWeight: 400
    lineHeight: 44.975px
  body:
    fontFamily: Gotham, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  link:
    fontFamily: Gotham, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15px
    textTransform: uppercase
rounded:
  xs: 2px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 32px
components:
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    padding: 0px 20px 0px 0px
  nav:
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
---

# Savills

## Overview
The measured page is https://www.savills.com/, titled "Savills | Global Real Estate Services", the global home of the property advisor. It is 1280px wide and 7053px tall. The top-left corner holds the yellow square logo with the lowercase red "savills" wordmark. The header is a translucent white band over a night-time city skyline photograph (Hong Kong in the capture), with tiny utility links (Global, Search, My Account) and the main navigation in white uppercase Gotham: FIND A PROPERTY, FIND A SERVICE, INVESTOR RELATIONS, WHY SAVILLS, INSIGHT & OPINION, CONTACT US. The hero headline "How can we help you?" is white Domine serif at 56px, followed by a short paragraph "As one of the world's leading property advisors, Savills services span the globe, with 42,000 experts working across more than 70 countries" and a location chooser sentence, "Take me to Savills in location", with the word "location" in yellow with a dotted underline and a chevron. Below it the page switches to white with "Here to help you thrive" in a thin sans headline and an alternating zig-zag of three blocks. Each block pairs a navy-tinted image panel carrying a statistic ("OVER 170 YEARS OF BEST-IN-CLASS ADVICE", "WE HAVE OVER 42,000 EXPERTS AT YOUR FINGERTIPS") with a white text panel under a yellow vertical rule, a serif headline, a short dash rule, a grey paragraph and a red uppercase link. Lower sections list regional offices in a dark footer.

## Colors
The brand pairs yellow with a deep navy and a red. Yellow `#ffdf00` is the logo block and the highlight word in the hero. Navy is `#35384b` for the footer and `#252839` for dark text and overlays; text on white is `#313131` for headlines and `#555764` for paragraphs (the mobile pass), with `#a3a4a9` for secondary text. Red `#cd171e` colors the uppercase links ("EXPLORE OUR LATEST RESEARCH", "FIND A PERSON OR OFFICE") and the "savills" wordmark. Surfaces: `#ffffff` canvas, `#f2f2f2` light panels. Borders are `#999795` (36 elements) and `#e2e3e5` (21). The extractor also read `#0000ee` for the navigation link color; that is the browser default for unstyled links, not a Savills color, and is dropped.

## Typography
Two families: Domine (loaded as DomineWebRegular 400 and DomineWebBold) is the serif for headlines, and Gotham (300, 500, 700) is the sans for everything else. The hero h1 is Domine 56px weight 300 on an 84px line height; the "Savills by region" footer headings are Domine 18px; section headlines such as "Spotlight: European Real Estate Logistics Census" are Domine 35px/44.975px at 400. Body copy is Gotham 300 at 16px on a 25.6px line; navigation is Gotham 500 at 12px uppercase; links are Gotham 700 at 12px on 15px, uppercase. The size ladder by characters: 11px (2211), 16, 20, 12, 10, 18, 14, 50, 35, 40, 56 and 65px. The large thin statistic numerals (50 to 65px) are set in Gotham on the image panels. On mobile the h1 is 28px/42px and body is 14px/21px.

## Layout
The home is built from full-bleed bands: hero, then a centered intro headline, then three alternating two-column blocks about 960px wide that overlap an image panel with a smaller inset photo. A yellow 3px-style vertical rule divides each pair in the capture. The footer is 873px tall on `#35384b` with white text and region-by-region lists (AFRICA: Botswana, Egypt, Kenya, Mauritius and so on). Header height is 89px on desktop and 50px on mobile. Spacing values measured: 3, 5, 6, 8, 10, 11, 12, 16, 18 and 32px.

## Imagery and Voice
Imagery is two-sided: an atmospheric dusk skyline in the hero, and bright, candid people photography in the content blocks. The people shots show a smiling woman holding a folder in a corridor, a diverse group laughing around a table, a small team reviewing plans, and two colleagues with a tablet, each cropped into overlapping rectangles. Copy is first-person plural and reassuring: "Empowering you with world-class research", "If it matters to you, it matters to us", "Making your progress our priority". Each statement is followed by a two-sentence paragraph and a red uppercase call to action such as "LEARN MORE ABOUT SAVILLS". Statistics are stated as plain claims in capitals ("OVER 170 YEARS OF BEST-IN-CLASS ADVICE", "OVER 42,000 EXPERTS"). The headline lines are short, sentence case and left aligned in the text panels, each followed by a small dash rule before the paragraph.

## Elevation & Depth
No drop shadows were measured. The single recorded shadow is `rgb(37, 40, 57) 0px 0px 0px 1px inset`, a 1px inset ring in dark navy. Depth is produced by navy-tinted image panels laid over photographs, overlapping photos within the zig-zag blocks, and the dark photographic hero beneath a translucent header.

## Shapes
`borderRadii` contains a single value, `0px 2px 2px 0px`, so nearly everything is square. The one 2px value is recorded as `rounded.xs`. Images, panels, rules and footers compute square corners; no pill or large radius was measured.

## Components
**Primary navigation:** Gotham 500 12px uppercase white labels on a translucent header; measured hover on a utility button (Search) changes its text from `rgb(255, 255, 255)` to `rgb(76, 77, 80)`. **Text link:** red `#cd171e`, Gotham 700 12px uppercase, 15px line, 20px right padding for a small triangle marker. **Location selector:** inline sentence with the yellow dotted-underline "location" word and chevron. **Statistic panel:** navy-tinted photograph with white uppercase Gotham text and very large numerals. **Footer:** `#35384b` with white Domine 18px region headings and Gotham link lists. No button, input or card role was detected, so no button or form tokens are declared.

## Design System Architecture
No public design system or brand guideline was opened; `_research` records `none: true`. No root CSS custom properties were measured (`rootVars` is empty). The de-facto system is a type pairing (Domine and Gotham), a yellow-navy-red palette, and consistent section blocks. Fonts are self-hosted. Source: https://www.savills.com/ measured into web/data/extracted/savills.json.

## Do's and Don'ts
- Do pair Domine serif headlines with Gotham sans text.
- Do use yellow `#ffdf00` as a highlight, not as large fills outside the logo block.
- Do use red `#cd171e` for uppercase text links.
- Do overlay navy-tinted panels on photography for statistics.
- Don't use the browser-default `#0000ee` link blue.
- Don't round corners beyond the 2px measured value; the page is square.
- Don't add drop shadows; only a 1px inset ring was measured.

## Responsive Behavior
The 390px mobile pass recorded the h1 at 28px/42px, body copy at 14px on a 21px line in `#555764`, and a 50px header in white (`#ffffff`) with `#4c4d50` text and a "Menu" control with a "CLOSE" label; the mobile menu entry text lists FIND A PROPERTY and FIND A SERVICE. Column layouts, image sizes and the zig-zag blocks on mobile are not measured.

## Iteration Guide
1. Canvas `#ffffff`, ink `#313131`, yellow `#ffdf00`, navy `#35384b` and `#252839`, link red `#cd171e`.
2. Domine 300 56px/84px hero headline; Domine 400 35px section headlines; Gotham 300 16px/25.6px body.
3. Uppercase Gotham 700 12px red links with a trailing marker.
4. Alternating image-and-text blocks with a thin yellow divider and navy-tinted statistic panels.
5. A dark navy footer with regional lists.
6. Run `node web/scripts/verify-designs.mjs --slug=savills`.
