---
version: alpha
name: Radian
category: "Retail & E-commerce"
description: "Radian's EXR electric enduro site (rideradian.com) uses Instrument Sans at weight 500 with tight negative tracking (53.3333px h1 at -1.33333px, 12px body), warm off-white #f5f3ef over near-black green #121714, a flat #fdeb07 yellow Pre-order button with 0px radius, 640px pill controls and no shadows."
colors:
  canvas: "#f5f3ef"
  ink: "#121714"
  primary: "#fdeb07"
  on-primary: "#121714"
  surface-graphite: "#212623"
  ink-ghost: "#12171433"
  ink-white: "#ffffff"
  nav-bg: "#00000033"
  text-input-border: "#333333"
typography:
  display:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 53.3333px
    fontWeight: 500
    lineHeight: 53.3333px
    letterSpacing: "-1.33333px"
  display-mobile:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 39.0814px
    fontWeight: 500
    lineHeight: 39.0814px
    letterSpacing: "-0.977036px"
  heading:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 42.6667px
    fontWeight: 500
    lineHeight: 46.9333px
    letterSpacing: "-1.06667px"
  subheading:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 33.6px
    letterSpacing: "-0.8px"
  body:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: "-0.12px"
  button:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 14.4px
    letterSpacing: "-0.106667px"
  link:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 12.8px
    letterSpacing: "-0.106667px"
  input:
    fontFamily: Instrumentsans, Arial, sans-serif
    fontSize: 10.6667px
    fontWeight: 500
    lineHeight: 12.8px
rounded:
  xs: 2.67px
  sm: 3.5px
  md: 5.33px
  lg: 10.67px
  xl: 16px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.07px
  s2: 1.33px
  s3: 2.67px
  s4: 5.33px
  s5: 6px
  s6: 7.99px
  s7: 8px
  s8: 10.67px
  s9: 12px
  s10: 12.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 32px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.surface-graphite}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 13.3333px 37.3333px 13.3333px 10.6667px
    height: 41px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, -126.996)
---

## Overview
Measured from https://www.rideradian.com/ (document title "Radian | Electric Enduro Motorcycle | Pre-Order Now", scroll height 10041px). The capture opens on a full-bleed studio shot of the front of a yellow electric enduro motorcycle against a grey gradient, with the small mono label "THE RADIAN EXR", the h1 "A new era of enduro starts here." in off-white, the line "Made for those driven to explore beyond limits.", two pill buttons ("Explore the bike" in off-white and "Configure now" in yellow) and a thumbnail "Play release video" with a duration. The top bar carries "Discover EXR" at the left, the centered wide-spaced "RADIAN" wordmark and "Our story", "Support", "Careers" and a yellow "Pre-order" button with a plus-in-circle icon at the right. Further down the page, an off-white band shows the heading "Radian EXR" beside a photograph of gloved hands on the bike, and measured headings include "Swap in 30 seconds" and "Built by engineers. Driven by riders." The footer (508px tall, #121714) closes with "Explore beyond limits. Pre-order now". The voice is short, declarative and rider-focused.

A first WebFetch attempt failed with a session-limit error (recorded in SOURCES.json); a retry succeeded and supplies the product facts below.

## Colors
Backgrounds by area: #121714 (4826, near-black with a green cast, the footer and dark sections), translucent black #00000033 (1536, the nav overlay, `nav-bg`), #80808026 (49), `surface-graphite` #212623 (14, inputs), `primary` #fdeb07 (13, the signature yellow), #00000066 (10), `canvas` #f5f3ef (8, the warm off-white), #64646433, #ffffff80 and #ffffff26. The `canvas` token is the off-white #f5f3ef because it is the detected page canvas (the light bands in the capture); the dark #121714 is the largest measured background area, used as `ink` for text on light bands and as the footer fill.

Text colors by characters: #f5f3ef (2149, the dominant text, on dark and over photography), `ink-ghost` #12171433 (93), `ink-white` #ffffff (92), `ink` #121714 (88), and yellow #fdeb07 (10). Borders: #f5f3ef (7), #121714 (5), #ffffff1a (2), #fdeb07 (2), `text-input-border` #333333 (2). The site's root variables (216 of them; Webflow-style names) include `--_colors---swatch--dark-yellow: #d3c400` and an "eerie black" swatch `#171c1c`; only the measured #fdeb07 is the yellow used on the page.

## Typography
"Instrumentsans" (2397 chars; weights 400, 500 and 700 loaded) with Arial as fallback is used for everything except the small labels in "Ibmplexmono"/"IBM Plex Mono" (35 chars, weight 500) such as "THE RADIAN EXR". The signature is tight negative tracking at every size.

Roles: `display` 53.3333px/53.3333px weight 500, -1.33333px tracking (39.0814px, -0.977036px on mobile); `heading` 42.6667px/46.9333px weight 500, -1.06667px; `subheading` 32px/33.6px weight 500, -0.8px; `body` 12px/16.8px weight 400, -0.12px; `button` 12px/14.4px weight 500, -0.106667px; `link` and `input` 10.6667px/12.8px. Sizes by characters: 12px (1353), 16px (471, -0.16px), 10.6667px (229), 42.6667px (200), 32px (58), 21.3333px (35, -0.426667px), 53.3333px (31), 85.3333px (23, -2.56px), 10px (22), 8px (10). Weights: 400 (1878), 500 (520), 700 (34). Tracking equals about -1% to -2.5% of the font size throughout.

## Layout
A tall page (10041px) of full-bleed bands in dark and warm off-white. The nav element spans the full 1280px x 800px first screen as an overlay (translucent #00000033). The root variables set `--_layout---padding-global--page-padding: 4em` and use em spacing tokens (tablet 5em and 2.5em, mobile 1.5em). Gaps measured: 5.33333px (46 uses), 8px (26), 6px (22), 10.6667px (16), 16px (14), 21.3333px (12), 42.6667px, 26.6667px, 400px and 122.667px. Paddings: 1.06667px (14 uses), 6px (12), 8px and 32px (11 each), 13.3333px, 42.6667px, 5.33333px, 10.6667px, 21.3333px, 160px, 64px, 128px. Values are multiples of 1.06667 (the size scale is in units of 1.06667px). Header link counts and card columns are not recorded.

## Elevation & Depth
No visible shadows: only two transparent zero shadows are measured (`rgba(0, 0, 0, 0) 0px 0px 0px 0px`). Depth comes from photographic backgrounds, a translucent black nav layer (#00000033), translucent grey chips (#80808026) and tonal bands. The footer element carries a measured transform of `matrix(1, 0, 0, 1, 0, -126.996)`.

## Shapes
Radii by weight: 640px (19, pill buttons and chips), 5.33333px (18, cards and images), 10.6667px (5), 2.66667px (4), 50% (2, circular icon buttons), 16px (1), 3.5px (1, the input). The primary yellow "Pre-order" button computes 0px radius (a flat rectangle), while the hero buttons "Explore the bike" and "Configure now" and the release-video chip are pill shaped in the capture; images and cards use about 5px corners.

## Components
- **button-primary**: "Pre-order", #fdeb07 fill, #121714 text at 12px/500 with -0.106667px tracking, 0px radius, 32px tall (107px wide), with an icon.
- **text-input**: #212623 fill, #f5f3ef text 10.6667px/500, 1px #333333 border, 3.5px radius, padding 13.3333px 37.3333px 13.3333px 10.6667px, 41px tall, 337px wide.
- **nav / nav-link**: #00000033 overlay, #f5f3ef 12px/500 links (Discover EXR, Our story, Support, Careers); on hover the link opacity drops to 0.6 (measured).
- **link**: 10.6667px/400 #121714.
- **footer**: #121714 fill, #f5f3ef text, 508px tall, headline 32px/500.
- **hero pills**: off-white and yellow pills with a circular arrow icon, in the capture; their radius (640px) comes from the frequency list.

## Design System Architecture
The root variables are Webflow-exported design variables: names like `--_colors---swatch--dark-yellow`, `--_paragraphs---paragraph-regular--font-size: 1.125em`, `--_paragraphs---paragraph-m--letter-spacing: -.01em`, `--_paragraphs---paragraph-xs--line-height: 1.3em`, `--_layout---padding-global--page-padding: 4em`, `--_layout---grid--gap-tablet: 1.5em` and `--_theme---border`. Some are marked "deleted" in their names (for example `--spacing--tablet-96px<deleted|variable-...>=5em`), which are Webflow variables that were removed but still emitted. No public design system or brand guideline page exists on https://www.rideradian.com/; the opened page links only a press kit (https://we.tl/t-1g8gX75TQKJFvrvf, a file-transfer link, not opened) and a technical specs page (/exr/specs, not opened).

## Do's and Don'ts
- Do apply negative letter-spacing of roughly -1% at body sizes and up to -2.5% at display size.
- Do keep the yellow #fdeb07 for the Pre-order and Configure actions only.
- Do use warm off-white #f5f3ef and the near-black green #121714 for bands.
- Don't add drop shadows: none are visible.
- Don't set the Pre-order button with rounded corners; it computes 0px.
- Don't use pure black or white for large surfaces: the darks are tinted and the white is #f5f3ef.

## Responsive Behavior
At the 390px mobile pass the h1 is 39.0814px/39.0814px with -0.977036px tracking in a 324px column and body text is 14.6555px/20.5177px in a 351px column (larger than the 12px desktop body). Mobile sizes concentrate at 14.6555px (1195 chars), 13.0271px (229), 32.5678px (190), 16.2839px (186), 22.7975px (69), 39.0814px (52). No mobile CTA was detected. Menu collapse is not measured.

## Iteration Guide
1. Use #121714 and #f5f3ef bands with photography between.
2. Instrument Sans 500 headings with -2.5% to -1% tracking; IBM Plex Mono for small labels.
3. One flat #fdeb07 call to action per screen; pills for secondary actions.
4. Round images at about 5.33px.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=radian --url=https://www.rideradian.com/ --force --no-motion` after changes.

## Imagery and Content Notes
Per the opened page, the sections run Hero, Features (battery swapping, power, storage, quiet riding, low maintenance, tuning, confidence), a brand story, "Built for enduro" (forests, rocky climbs, long races), "Ready for racing" (fast battery swaps and the chassis), "Built by engineers" (the company's origins) and Pre-order. Product facts on the page are 70 hp, 1060 Nm of instant torque and a tool-free battery swap in 30 seconds; in Europe the bike starts at 14,450 euros with a 99 euro reservation, other regions such as the US, Canada and Australia join an interest list, and the page states that the motorcycle is pre-production and specifications may change. The capture's imagery is studio and action photography: a symmetrical front view of the bike with yellow hand guards and a dual round headlight, a close-up of gloved hands in a branded glove on the chassis, and a small release-video thumbnail. The copy uses short fragments and direct address ("Made for those driven to explore beyond limits"), which is why the type is set small and tight while the headlines are large.
