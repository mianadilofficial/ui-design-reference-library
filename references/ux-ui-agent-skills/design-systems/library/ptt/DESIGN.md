---
version: alpha
name: PTT Public Company Limited
category: "Energy & Climate"
description: "PTT's corporate portal (pttplc.com/en) is set entirely in the proprietary PTT45Pride typeface (16px body, 44px hero), on a pale aqua canvas (#edfcfe) with navy ink (#183259, #002f5b), a white 9999px pill 'View All' button with a soft 4px 4px 8px shadow, and 16-25px radii on cards and inputs."
colors:
  canvas: "#ffffff"
  page-largest: "#edfcfe"
  ink: "#183259"
  primary: "#dce0e3"
  on-primary: "#0a2264"
  surface-grey: "#f0f0f0"
  ink-navy: "#002f5b"
  ink-black: "#000000"
  ink-indigo: "#1b1464"
  nav-bg: "#ffffff03"
typography:
  display:
    fontFamily: PTT45Pride, sans-serif
    fontSize: 44px
    fontWeight: 400
  display-mobile:
    fontFamily: PTT45Pride, sans-serif
    fontSize: 26px
    fontWeight: 400
  body:
    fontFamily: PTT45Pride, sans-serif
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: PTT45Pride, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 10.5px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 16px
  md: 18px
  lg: 20px
  xl: 25px
  2xl: 100px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 4.8px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 10.4px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10.4px 0px 0px
    height: 67px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.25) 4px 4px 8px 0px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 0px 20px
    height: 22px
  card:
    rounded: "{rounded.pill}"
    padding: 32px
    borderColor: "{colors.canvas}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview
This design system is measured from the English home page of PTT Public Company Limited (https://www.pttplc.com/en, document title "PTT Public Company Limited"). It is an investor-and-public corporate portal rather than a retail storefront: the top navigation reads Who we are, What we do, Sustainability, Investor Relations, Newsroom and Work with Us, and the footer carries Privacy Center, Contact Us, FAQ, Whistleblowing, Procurement and Site Map. The page is 6066px tall at the 1280px desktop pass. The look is airy and watery: pale aqua bands (#edfcfe is the largest background area by measured weight), wave-shaped section edges in the capture, aerial and illustrative photography of plants, cities and a stylised "1" built from refinery pipes, and a mascot chat widget at the lower right.

The voice is brief and corporate. Section labels are plain nouns ("Newsroom", "Media/ Activities", "View All"), and the only upbeat line is the banner's "Our world is the best." (banner alt text, from the opened page). Copy is bilingual: Thai and English headlines sit next to each other in the hero and in the Dow Jones sustainability block.

The capture also shows a promotional pop-up ("PTT in Action") over the hero and a cookie/chat-style widget. The extractor hid the scrim (`consentOverlaysHidden: scrim Modal-module__sR2AWG__backdrop`), and none of those overlay controls are documented as brand UI below.

## Colors
Measured text colors by character count: `ink` #183259 (351 chars), white #ffffff (242, used over photography and blue bands), `ink-navy` #002f5b (190, the body paragraph color), `ink-black` #000000 (47), `ink-indigo` #1b1464 (27, also the computed body color on the page root) and the CTA text color #0a2264 (7). A single #ffd02e appears once.

Background areas by weight: `page-largest` #edfcfe (2349), `surface-grey` #f0f0f0 (520), a near-transparent white #ffffff03 on the nav (72), a translucent navy #0b307980, #ffffff8d, `canvas` #ffffff, #dce0e3 (the Site Map button), #1b1464 and #0c335c. `canvas` is white because it is the detected page canvas; the page itself reads as aqua because the large bands use `page-largest`.

The detected CTA fill `primary` is #dce0e3 with `on-primary` #0a2264. This comes from the SITE MAP side button (66 x 67px, uppercase 14px), which is a navigation utility rather than a marketing action; the brand's visible action button in the capture is the white "View All" pill, recorded below as `button-secondary`. Nothing in the extraction names a saturated accent color, so none is declared. The UA-default link color #0000ee that the extractor reported on the nav link is not a brand color and was dropped.

## Typography
One family carries everything: PTT45Pride (fontFamilies by chars: PTT45Pride, 865 chars; loaded weights 200, 400 and 700). The fallback stack is `sans-serif`. It is a proprietary face; no public foundry source was found on the pages opened, so a neutral geometric sans such as Montserrat or Kanit is the nearest substitute for Latin and Thai text respectively, as a substitution suggestion only.

Measured sizes by characters: 16px (407 chars), 20px (76), 18px (72, the nav size), 46px (72), 32px (70), 14px (53, buttons), 40px (40, stock ticker numerals at weight 600), 24px (27), 22px (25), 34px (8), 44px (6, the h1-role "PTT" span), 12px (2). The `display` token is 44px/400; on the 390px mobile pass the same element is 26px (`display-mobile`). Body is 16px/400 with normal line height. Weights in use: 400 (696 chars), 500 (123), 300 (36), 600 (10). Letter-spacing is normal except 24px headings at 0.5px (21 chars) and 2px (5 chars). The button style is 14px, weight 500, 10.5px line height, uppercase for the Site Map button.

## Layout
The page is a long vertical stack of full-width bands: a media hero with a stock ticker (PTT 40.75, NGV 20.00 at measurement time), a sustainability quote band with the Dow Jones Best in Class block, a "Key Sustainability Performance" panel over a city photograph with economic / social / environment tabs, a video carousel, a Newsroom wave band with News and Media/Activities columns, a social strip and a large footer (400px tall). Band 0 is 1467px high, fill "media", with 2 columns. The measured layout reports the header links visible on desktop, no menu toggle visible, and a maximum of 3 card columns.

Spacing tokens from measured gaps and paddings: 4px, 4.8px, 6px, 8px (the most common gap, 16 uses), 10px, 10.4px, 12px, 16px, 20px, 24px; larger paddings of 32px, 128px and 160px also occur.

## Elevation & Depth
Depth is soft and mostly decorative. Measured shadows: `rgba(0, 0, 0, 0.25) 4px 4px 8px 0px` on the "View All" pills (the strongest and most used), `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px`, `rgba(255, 255, 255, 0.1) 5px 5px 10px 0px`, `rgba(30, 144, 255, 0.08) 0px 2px 8px 0px`, a large `rgba(0, 0, 0, 0.25) 0px 25px 50px -12px` and a focus ring `rgba(59, 130, 246, 0.6) 0px 0px 4px 1px`. Translucent navy (#0b307980) and white (#ffffff8d) overlays on photography provide the frosted panels seen in the sustainability block. Border colors are mostly white (#ffffff, 9 uses), with #808080, #d1d1d1 and #69bbf6 once each.

## Shapes
Measured border radii by weight: 50% (7, circular media), 25px (5, inputs), 20px (4), 100px (3), 9999px (3, pill buttons), 18px (2), 2px and 16px (1 each). The Site Map button and nav are square (0px). So the shape language is mixed: circular masks for imagery, large 16-25px rounded cards and fully round pills for secondary actions.

## Components
- **button-primary**: the Site Map button, #dce0e3 fill, #0a2264 text, 14px uppercase, 0px radius, 66 x 67px, padding 10.4px 0 0.
- **button-secondary**: "View All", white fill, #000000 text, 14px/500, pill (9999px), padding 0 12px, 50px high, shadow 4px 4px 8px at 25% black.
- **nav**: 56px high, 1280px wide, background #ffffff03, 18px/500 text; white link text over the hero.
- **text-input**: 22px high, 25px radius, padding 0 20px, #000000 text at 16px (the search field in the top bar).
- **card**: pill-rounded in the extraction, 32px padding, white border.
- **footer**: white text on a 400px band, 13.3333px base text.

Hover states were not captured (the extraction's hover list is empty). Focus: the text-size "A" buttons show a 1px auto outline after focus.

## Design System Architecture
The opened homepage links to no brand guidelines, design system or press kit, and no public design-system repository was found; this is the de-facto system. The shipped CSS exposes about 400 root custom properties, but most are third-party utility scales (Radix-style color ramps such as `--bronze-a12`, `--ruby-a10`, `--iris-11`, and widget variables such as `--button-accept-bg: #4a9eff`, `--border-radius-input: 8px`, `--height-input: 36px`). These come from embedded libraries and cookie/consent UI; they do not describe PTT's own visual language and are not used as tokens. The CSS-module class name `Modal-module__sR2AWG__backdrop` shows the pop-up is built with CSS modules.

## Do's and Don'ts
- Do set all text in PTT45Pride at weights 200, 400 or 700 and keep body at 16px.
- Do use #183259 and #002f5b for reading text on the pale aqua #edfcfe bands.
- Do use the white pill with the soft 4px 4px 8px shadow for "View All" style actions.
- Don't present the pop-up, chat mascot, cookie or back-to-top controls as brand components.
- Don't use #0000ee (the browser link default) as a link color.
- Don't invent a saturated accent: none was measured on this page.

## Responsive Behavior
Measured at a 390px mobile pass: the h1-role "PTT" drops from 44px to 26px, body text stays 16px, and the "View All" pill keeps its 110 x 50px size and 9999px radius. The mobile pass font-size distribution leads with 16px (292 chars), 14px (233), 12px (227), 64px (92) and 62px (72). Breakpoints, menu collapse and column behavior are not measured.

## Iteration Guide
1. Start from the aqua page background #edfcfe, white cards (`canvas`) and navy ink #183259.
2. Add one pill "View All" button per band; keep shadows to the measured 4px 4px 8px value.
3. Use 16-25px radii for cards and inputs and 50% for round images.
4. Typeset in PTT45Pride 16/400 body, 44px hero, 14px/500 buttons; ask the owner for the font files, as none are public.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=ptt --force --no-motion` after any change and re-run the gate.
