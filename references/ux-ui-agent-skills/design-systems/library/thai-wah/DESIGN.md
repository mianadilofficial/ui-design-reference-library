---
version: alpha
name: Thai Wah
category: "Thai Brands"
description: "Thai Wah Public Company (TWPC) corporate site: a white page with full-bleed agricultural photography, 50%-black text panels, navy #0e1149 headings, sky-blue #00a1ed navigation, Poppins/Prompt type with a 42px weight-500 display style, and flat 4px-corner controls."

colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#00a1ed"
  ink-black: "#000000"
  navy: "#0e1149"
  hairline: "#dedede"
  overlay-scrim: "#00000080"
typography:
  display:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 42px
    fontWeight: 500
    lineHeight: 50.4px
  body:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Poppins, Prompt, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 10px
  pill: 9999px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 32px
  s8: 36.8px
  s9: 44.8px
  s10: 48px
components:
  button-secondary:
    textColor: "{colors.navy}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 6px 0px
    height: 38px
  link:
    textColor: "{colors.navy}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 6px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 20px 76px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.canvas}"
    padding: 60px 76px 40px
---

# Thai Wah — Design System

## Overview

Thai Wah Public Company (TWPC) is a Thai agriculture and food business whose corporate website reads as an annual-report-meets-brochure: full-bleed photographs, a few large headings, and short blocks of explanatory copy. The company describes itself as having operated in the agriculture business and food industry in Thailand for over 75 years, "creating innovation and sustainability from Farm to Shelf", with three core lines: tapioca starch and starch-related products, food products (bean vermicelli, rice noodles, instant noodles and meal kits) and biodegradable products such as its "ROSECO series" starch resin.

An important measurement note: opening https://www.thaiwah.com/ currently lands on an intro page (`/en/intro-page`) that marks 13 October, the memorial day of King Rama IX. It is a full-page gold-patterned tribute with a portrait, Thai text and an "Enter Site" button that links to `/en/home`. That seasonal page is not the everyday site, so all tokens in this document were re-measured on https://www.thaiwah.com/en/home. The home page opens with a white announcement slider (a CAC anti-corruption certification renewal with a blue swoosh graphic and an "Explore More" link), then an "About Thai Wah" band over a sunset cassava field, an "OUR PRODUCTS" title, and tall photographic product panels, for example flour being sifted over dough for the starch line.

## Colors

The system is white, navy and sky blue over photography. `{colors.canvas}` (#ffffff) is the page. Headings in the white sections and the "Explore More" links use `{colors.navy}` (#0e1149), a deep blue-black that is the clearest corporate ink. `{colors.primary}` (#00a1ed) is the bright sky blue measured on navigation links and used as the accent; it is the most saturated color on the page. Reading text on white is `{colors.ink}` (#212529), with pure black `{colors.ink-black}` (#000000) for a few strong labels, and `{colors.hairline}` (#dedede) draws 1px-style dividers and borders. White text is the most frequent text color overall because copy sits on photographs.

Photographic panels use a black scrim at 50% opacity, `{colors.overlay-scrim}` (#00000080), to carry white copy over images. The tribute intro page used a brown (#794a00) and gold palette; that belongs to the memorial page only and is not part of the everyday brand system.

## Typography

The site uses Poppins for Latin text with Prompt as the Thai companion, declared as `Poppins, Prompt, sans-serif`. Weights 300, 400, 500 and 700 are loaded for Poppins and 500 for Prompt. The display style `{typography.display}` is 42px at weight 500 on a 50.4px line, used for "About Thai Wah" (white on the field photograph) and the uppercase "OUR PRODUCTS" heading in navy. Body text `{typography.body}` is 16px at weight 300 on 24px, deliberately light for white-on-photo reading. Navigation `{typography.nav}` is 16px at weight 400, and links and "Explore More" calls to action `{typography.link}` are 16px at weight 700.

Thai headlines in the announcement slider (for example the CAC announcement) are set bold at a larger size in the same family, in a dark navy. The 54px and 32px sizes also appear in the measured data for large announcements and card titles.

Font substitutes: Poppins and Prompt are both delivered as webfonts, so no substitute is needed on this site. For fallback, pair any geometric sans with a Thai-capable sans so headings keep their weight.

## Layout

The page is organized as a stack of full-width bands. The navigation bar has 20px 76px padding and holds the logo and seven menu items: About Thai Wah, Products, Investor Relations, Corporate Governance, Sustainability, Career and Contact us. After the slider, each band is a photograph covering the full width, with a translucent dark text panel anchored to one side (centered for "About Thai Wah", flush left for the starch product). Titles are centered above text blocks on white. The footer is padded 60px 76px 40px, which also reveals the 76px side margin used for the header: left and right gutters are consistently 76px on desktop.

The spacing set in the live CSS runs 6px, 8px, 12px, 15px, 16px, 20px, 32px, 36.8px, 44.8px and 48px; the larger values (32px to 48px) are used for vertical rhythm between headings and copy.

## Elevation & Depth

Depth comes from layering text panels over photography, not from shadows. The scrim `{colors.overlay-scrim}` darkens the image under copy, and the slider's blue swoosh overlaps the white canvas. A single large shadow, `rgba(0, 0, 0, 0.2) 0px 13px 26px 0px`, appeared once in the measured data on a floating element; ordinary components are flat. Hairlines in `{colors.hairline}` separate list items and footer links.

## Shapes

Shape is restrained. `{rounded.xs}` (4px) is the common corner, used on links and small controls; `{rounded.sm}` (10px) appears once; and `{rounded.pill}` is used for circular icon buttons (the 50% radius appears 16 times in the measured data, for example the round arrow and hexagon-style icon outlines beside "Explore More"). Text panels over photographs have square corners. There are no large-radius cards on this site.

## Components

**Explore More link.** `{components.button-secondary}` and `{components.link}`: navy `{colors.navy}` 16px bold text, 6px 0px padding, 38px tall, with a small outlined hexagon icon containing a chevron before the label. On dark panels the same pattern appears in white. There is no filled primary button in the measured extraction.

**Navigation.** `{components.nav}` is a white bar with 20px 76px padding; `{components.nav-link}` uses the 16px regular style in sky blue `{colors.primary}`.

**Photographic panel.** A full-width image with a 50% black text panel containing a 42px or 32px heading, 16px light body text and an Explore More link.

**Footer.** `{components.footer}` carries white text, with 60px 76px 40px padding and social and partner-brand logos.

**Slider.** A white announcement carousel with small dash pagination at the bottom right.

## Design System Architecture

No public design system, token package or brand guideline was found: the pages opened (https://www.thaiwah.com/en/intro-page and https://www.thaiwah.com/en/home) are a corporate site, not a design-system site, so there is no official public system to cite. The de-facto system can be read from the shipped CSS: a Bootstrap-style variable set (`--primary` is #007bff, `--breakpoint-md` is 768px, `--breakpoint-lg` is 992px and `--breakpoint-xl` is 1200px), Swiper variables for the sliders, and an icomoon icon font. The visible brand colors (#0e1149 and #00a1ed) are applied by component rules, not through the root variables, whose default Bootstrap blue is not what the page shows. Design consistency comes from the repeated pattern of full-bleed photograph, translucent panel, large heading and an Explore More link.

## Do's and Don'ts

- Do set headings in Poppins 500 at 42px, white on photographs and navy (#0e1149) on white.
- Do carry copy over photos on a #00000080 scrim.
- Do use navy for text links and sky blue (#00a1ed) for navigation accents.
- Do keep corners at 4px or square, with circular icon buttons.
- Don't use the Bootstrap default blue #007bff; it is a framework variable, not the brand color.
- Don't use the gold and brown memorial palette outside the commemorative page.
- Don't add shadows to ordinary components.
- Don't set body copy heavier than weight 300 on photographs without checking contrast.

## Responsive Behavior

Breakpoints in the CSS follow 576px, 768px, 992px and 1200px (the page's `--breakpoint-sm`, `--breakpoint-md`, `--breakpoint-lg` and `--breakpoint-xl` variables). The measurement was taken at desktop width and no narrow-viewport sizes were recorded for the home page, so mobile type sizes should be verified before reuse. The 76px side gutter is a desktop value.

## Iteration Guide

1. Begin with white pages and full-bleed photography of crops, fields and ingredients.
2. Overlay copy on #00000080 panels with a 42px weight-500 heading and 16px weight-300 body.
3. On white, set headings in #0e1149 and body in #212529; use #00a1ed for navigation accents.
4. Use "Explore More" links in 16px bold navy with a hexagon chevron icon; keep corners 4px.
5. Keep side gutters at 76px and band spacing in the 32px to 48px range.
6. Check any new color against the measured list: #ffffff, #212529, #00a1ed, #000000, #0e1149, #dedede, #00000080.
