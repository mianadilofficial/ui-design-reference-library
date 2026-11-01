---
version: alpha
name: HOMERUN Creative Things
category: "Agencies & Studios"
description: "HOMERUN Creative Things (homerun.today), formerly ROSBEEF!, is a creative agency site measured live: near-black #181817 hero with cream #f8f7ec ink, oversized lilac #edd4f8 wordmark, orange #e56138, green #2d5a36 and sky #cdf0ff blocks, Space Grotesk headings, Figtree body, pill-shaped controls."
colors:
  canvas: "#181817"
  page-body: "#f8f7ec"
  ink: "#f8f7ec"
  primary: "#f8f7ec"
  surface: "#e56138"
  surface-2: "#2d5a36"
  surface-3: "#edd4f8"
  ink-2: "#26262699"
  ink-4: "#666666"
typography:
  display:
    fontFamily: "\"Space Grotesk Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  display-mobile:
    fontFamily: "\"Figtree Variable\", sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 18px
    textTransform: uppercase
  heading:
    fontFamily: "\"Space Grotesk Variable\", sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 72px
  body:
    fontFamily: "\"Figtree Variable\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Figtree Variable\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 11px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-body}"
    padding: 64px 0px 0px
  footer:
    textColor: "{colors.canvas}"
    padding: 90px 0px 10px
---

## Overview
HOMERUN Creative Things (https://homerun.today/, title "HOMERUN Creative Things", lang `en`) is the site of a creative and advertising agency. A ticker strip across the top of the capture repeats "ROSBEEF! IS NOW HOMERUN", which the measured mobile pass also recorded as its first heading, so the site announces a rename from ROSBEEF! to HOMERUN. The first screen is a near-black field (`#181817`) with a single oversized wordmark in pale lilac (`#edd4f8`) spanning the full width, "CREATIVE" and "THINGS" set small beneath its left and right ends, a tilted photo of a cartoon-faced apple slice overlapping the letters, and an orange pill "Menu" button at the top right.

Below the dark hero the page turns cream (`#f8f7ec`). The statement "At the crossroads of consulting & advertising, we design cultural innovations that create value and cross channel communications that spark conversations" is set as huge light-weight centred text, with underlined key phrases and small round photo thumbnails inlined between words. Further sections measured on the page use large coloured blocks in orange `#e56138`, forest green `#2d5a36`, lilac `#edd4f8` and sky blue `#cdf0ff` (by far the largest background areas after the dark hero). The copy is confident and playful: "Play beyond the limits. Score big." and "Ready to push beyond limits?" and sports references (HOMERUN United supporting the French Paralympic and Sport team).

## Colors
- **Canvas** `#181817`: the dark hero and footer-adjacent areas (area weight 3948) and the colour of body text on cream, which is why the extraction also reads it as the most-used text colour (11295 characters).
- **Cream / page body** `#f8f7ec`: the light page background of the content sections and the text colour on the dark hero and menu. In the tokens it is `page-body`, `ink` and `primary`; no filled call-to-action button was detected, so primary is the cream used for the interactive wordmark and menu text.
- **Orange** `#e56138`: the largest block by area (14672) and the "Menu" pill fill in the capture.
- **Forest green** `#2d5a36` (14601), **lilac** `#edd4f8` (8334) and **sky** `#cdf0ff` (7417): section blocks. Lilac is also the hero wordmark colour.
- **Muted greys**: `#26262699` (translucent dark text) and `#666666` (9 characters).

The palette is flat and saturated; there are no gradients in the measured backgrounds.

## Typography
Two variable fonts are loaded: "Space Grotesk Variable" (weights 300 to 700) and "Figtree Variable" (weights 300 to 900). Figtree carries almost all characters (11543) as body and link text; Space Grotesk (123 characters) sets the menu label, the large statements and the footer call to action.

- **display**: Space Grotesk 16px / 400 / 22px (the "Menu" label).
- **display-mobile**: Figtree 13px / 500 / 18px, uppercase (the ticker text in the mobile pass).
- **heading**: Space Grotesk 56px / 400 / 72px line height ("Play beyond the limits. Score big." and "Ready to push beyond limits?").
- **body**: Figtree 16px / 400 / 24px (HOMERUN United paragraph).
- **link**: Figtree 12px / 400 / 24px (credit and client links such as "LEOLEO").

The hero wordmark renders at 76.4444px per measured font-size frequency in the large display text (136 characters), and the page also uses 13px, 14px and 32px sizes. Weights are 400 (10786), 500 (840) and 700 (40). The loaded families are variable web fonts from the site's own bundle, so no substitute is needed.

## Layout
Desktop pass: 1280px wide, 4988px tall. The layout is full-bleed: the hero wordmark fills the viewport width edge to edge, the tagline sits in a centred column with narrow side margins, and colour blocks run the full width. The nav role is a 64px-tall block with 64px top padding; the footer has 90px top and 10px bottom padding and holds a 56px call to action ("Ready to push beyond limits?", "Contact us", "Say hello"). Spacing steps in the tokens are 4, 6, 8, 10, 11, 14, 16, 20, 24 and 25px. The scrollable page is short; most of the height is generous whitespace around very large type rather than dense content.

## Elevation & Depth
No box shadows were measured on the live page (the shadow frequency list is empty). Depth comes from layering and rotation instead: the tilted apple photo overlaps the wordmark, round thumbnails interrupt the sentence, and colour blocks stack against each other. The root variables include Tailwind-style shadow tokens such as `--shadow-xs: 0 1px 2px 0 rgba(0,0,0,.05098)` and `--shadow-md`, but no rendered element used them in the measurement.

## Shapes
The only measured radius is a fully rounded pill (`9999px`; the extraction reports 3.35544e+07px on 9 elements), applied to the "Menu" button and the circular photo thumbnails. Every other element renders square. Type is the dominant shape: huge uppercase wordmark letters and underlined phrases. Photos appear either as a tilted rectangular print or as small circles.

## Components
- **menu button**: orange (`#e56138`) pill with a cream "Menu" label in Space Grotesk 16px and an arrow icon, fixed at the top right of the dark hero.
- **ticker**: a lilac strip along the top carrying repeated uppercase "ROSBEEF! IS NOW HOMERUN" with a plus-in-circle icon, 13px Figtree 500 on mobile.
- **statement text**: large light-weight sentence with underlined phrases and inline circular images.
- **link**: Figtree 12px, dark (`#181817`), used for client names.
- **nav** and **footer**: text in cream on dark with the paddings listed above.
No form fields were detected, and no primary filled button was recognised by the extractor.

## Design System Architecture
No public design system or brand guideline was found. The shipped CSS is a Tailwind v4 build: root variables include `--container-md: 28rem`, `--breakpoint-xs: 500px`, shadow and blur tokens (`--blur-lg: 16px`), and a custom type scale named by role (for example `--text-h2: 5.6rem`, `--text-h1-mobile--line-height: 4.3rem`, `--text-taglil: 1.4rem`, `--text-tagbig--line-height: 2.4rem`, `--text-cta32-mobile--line-height: 3.2rem`). The site therefore has an in-house scale with separate mobile line heights for each heading level. In total 178 root variables are exposed.

## Do's and Don'ts
- Do set display statements in Space Grotesk at large sizes (56px measured) and everything else in Figtree.
- Do alternate full-bleed dark `#181817` and cream `#f8f7ec` sections with solid colour blocks.
- Do use pill-shaped controls (9999px) and keep every other box square.
- Do keep copy short, playful and confident.
- Don't add drop shadows; none were measured.
- Don't introduce gradients or additional hues beyond orange, green, lilac and sky.
- Don't treat the empty-looking dark hero in the capture as a layout; it holds animated content.

## Responsive Behavior
The mobile pass (390px) recorded: the first heading is the ticker text at Figtree 13px / 500, the second heading is Space Grotesk 34px / 400 (versus 56px on desktop), the body text is 16px, and the nav block is 390px wide and 50px tall. The large display size drops to 38px in the mobile frequency list (136 characters). No CTA button was detected at mobile. Other breakpoint behaviour is not measured.

## Iteration Guide
1. Fill the first screen with `#181817` and a full-width wordmark in `#edd4f8`.
2. Switch to `#f8f7ec` for statements, set at large light weight with underlined phrases.
3. Add solid colour sections in `#e56138`, `#2d5a36`, `#edd4f8` and `#cdf0ff`.
4. Use Space Grotesk for headings and Figtree for body; 56px headings on desktop and 34px on mobile.
5. Only pill radii; no shadows.

Further notes for rebuilding: the cream sections rely on very large type for hierarchy rather than rules or boxes, so spacing between statements is wide and every section is separated by a hard colour change instead of a divider. The ticker at the top is the only persistent element besides the menu button, and it loops the same rename announcement; keep it uppercase and small so the oversized wordmark below remains the dominant element.
