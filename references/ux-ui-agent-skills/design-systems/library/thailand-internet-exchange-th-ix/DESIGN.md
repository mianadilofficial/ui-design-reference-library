---
version: alpha
name: "Thailand Internet Exchange (TH-IX)"
category: "Thai Brands"
description: "Neutral internet exchange of Thailand: NT type at weights 400 and 700, white canvas #ffffff, gray ink #4f4f4f, slate #52595f buttons, yellow-orange accents (#ffa800, #ffd100), 15px button radius and 40-50px card corners."
colors:
  canvas: "#ffffff"
  ink: "#4f4f4f"
  primary: "#52595f"
  on-primary: "#ffffff"
  surface-2: "#fbfbfb"
  ink-3: "#ffa800"
  ink-4: "#2e2e2e"
  ink-5: "#ffffff80"
  ink-6: "#f0506e"
  hairline: "#e5e5e5"
  nav-link-text: "#333333"
  footer-text: "#ffd100"
typography:
  display:
    fontFamily: NT, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 66px
  display-mobile:
    fontFamily: NT, sans-serif
    fontSize: 31.5px
    fontWeight: 700
    lineHeight: 47.25px
  heading:
    fontFamily: NT, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 42px
  subheading:
    fontFamily: NT, sans-serif
    fontSize: 28.8px
    fontWeight: 700
    lineHeight: 43.2px
  body:
    fontFamily: NT, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button:
    fontFamily: NT, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 42px
  nav:
    fontFamily: NT, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
rounded:
  xs: 10px
  sm: 15px
  md: 40px
  lg: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.5px
  s3: 5px
  s4: 6px
  s5: 7.04px
  s6: 10px
  s7: 10.72px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 30px
    height: 42px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 30px
    height: 44px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 30px
  nav:
    textColor: "{colors.ink-4}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.footer-text}"
    padding: 70px 0px 30px
    borderColor: "{colors.hairline}"
---

## Overview

Thailand Internet Exchange (TH-IX) is a neutral internet exchange point, and its English site at th-ix.net/en/ is a corporate and service-information site built on WordPress. The measured home page is organised as a hero headline ("Connect Your Business, Connect the World"), a short "Connecting without any compromise" pitch with two calls to action, a row of four statistic tiles (1Tbps+ peak traffic, 67 connected ASNs, 7 facilities, 99.99% service availability), an "Our Services" pair for Public Peering and Private Peering, a point-of-presence list, latest news, "Our Stories", a row of peering-member logos and a footer.

The visual identity is a warm yellow-to-orange gradient set against slate gray (#52595f) and a soft near-white (#fbfbfb) card surface. Everything is rounded: tiles and cards use large radii (40px and 50px), buttons use 15px. Type is a single family, NT, loaded in 400 and 700 weights. The mood is friendly infrastructure rather than austere telecom: big numbers, cheerful yellow, generous white space. When the page was first captured it was covered by a dark memorial popup and scrim; that overlay is a temporary notice and is not part of the brand system, so the tokens here were re-measured from the page itself with the overlay excluded.

## Colors

The page canvas is white (#ffffff). Reading text is a mid-dark gray, #4f4f4f, used for headings, h3 titles and body paragraphs. The navigation uses a darker gray, #2e2e2e, and the nav link text token is #333333. A second near-white, #fbfbfb, is the surface of the large rounded cards. The hairline border color is #e5e5e5.

The measured primary button fill is slate gray #52595f with white (#ffffff) text, as used on the "See Member" button. The yellow-orange identity colors are measured too: #ffa800 (amber, used for text accents and icons), and #ffd100, which the site publishes as its custom brand variable (--custom-brand) and which appears as footer text. Yellow-orange gradients fill the call-to-action buttons and statistic tiles in the capture; the individual gradient stops were not extracted as tokens, so none are documented here. A hot pink, #f0506e, is used for the highlighted words in the hero headline and for the "Connecting without any compromise" h2. A translucent white, #ffffff80, appears on dark imagery.

- Use #52595f for solid dark buttons and dark tiles; use the yellow family for emphasis on light surfaces.
- Pink (#f0506e) is an accent for headline words, not a button color.
- Do not treat the memorial popup's black or gray scrim as a brand color.

## Typography

The site uses NT with a sans-serif fallback for everything. The loaded faces are NT 400 and NT 700. The h1 is 44px, weight 700, line height 66px on desktop and 31.5px with line height 47.25px at the 390px mobile pass. The h2 is 42px, weight 700, line height 42px; at the mobile pass it is still measured at 42px. The h3 ("Public Peering") is 28.8px, weight 700, line height 43.2px. Body paragraphs are 16px, weight 700, line height 24px; the measured page body base is 14px. Buttons are 14px at weight 400 with a 42px line height, and the large navigation role measured 24px at weight 400 and line height 36px.

Body copy at weight 700 is a distinctive trait here: paragraphs read heavy and round rather than light. NT is a Thai-and-Latin family; no font substitute is documented because no official foundry page was opened. If NT is unavailable the site's own fallback is the generic sans-serif.

## Layout

The page is a single long scroll with full-width bands. Content sits in a centred column; the capture shows a 1280px-wide desktop viewport and a 360px content width at the mobile pass. Statistic tiles sit four across with equal widths and equal heights, and service cards sit two across, each with an icon, title, short paragraph and a "Learn more" button. The point-of-presence section pairs a dotted world map with a text list. News is a large feature card beside a stacked list of smaller items. The partner row shows large-brand logos on white.

Spacing values measured on the page include 2px, 3.5px, 5px, 6px, 7.04px, 10px, 10.72px, 15px, 16px and 20px. The footer has padding of 70px 0px 30px and a top border in #e5e5e5.

## Elevation & Depth

Depth is mostly flat. The measured box shadow on elements is a zero shadow (rgba(0, 0, 0, 0) 0px 0px 0px 0px), so cards are separated by fill color (#fbfbfb on white, gradient yellow, or slate gray) rather than shadows. Photographic cards (news, stories) use full-bleed imagery with rounded corners. Dark overlays appear only on the photographic tiles and on the temporary popup.

## Shapes

The measured border radii are 10px, 15px, 40px, 50px and 9999px. Buttons (button-primary, button-secondary and link) use 15px. The tiles and large service cards use 40px and 50px corners; one measured variant has four different corners, 40px 40px 40px 0px. Pill shapes (9999px) are used for small controls such as carousel indicators and round icon buttons. Radius is a core part of the identity: nothing on the page is sharp-cornered at card scale.

## Components

- Primary button: fill #52595f, white text, 14px weight 400, height 42px, padding 0px 30px, radius 15px.
- Secondary button: white text on a colored fill with a #e5e5e5 border, height 44px, same padding and radius. Yellow-orange gradient buttons ("Learn More", "Download Factsheet", "See Network") follow this shape.
- Link: white text, same 15px radius and 30px side padding; used for button-like links.
- Navigation: #2e2e2e background token, nav link text #333333 at 24px, with hover changing text from rgb(46, 46, 46) to rgb(79, 79, 79) on About as measured. The header also carries a language flag and a "Get a quote" button.
- Statistic tile: large number plus label, alternating gray (#52595f) and yellow gradient fills, 40px-class corners.
- Footer: text #ffd100 token, padding 70px 0px 30px, #e5e5e5 border; link columns for Services, About and Peer with us.

## Design System Architecture

No public design system or brand guideline was found. The site's own pages were opened and no link to brand or design-system documentation appeared, so no external research was performed. The de-facto system is a WordPress theme: the measured root variables include WordPress preset variables (--wp--preset--*), Kadence block variables (--global-kb-font-size-*, --global-palette7: #EDF2F7), and site variables such as --bg-primary: #ffffff, --text-secondary: #2E2E2E, --default-grey: #E5E5E5, --medium-grey: #A0A0A0 and --custom-brand: #FFD100. Many of the WordPress presets (vivid purple, pale pink) are platform defaults and not brand colors. The designer-controlled layer is the custom brand variable set plus the NT font.

## Do's and Don'ts

- Do keep a single type family (NT) and let weight carry hierarchy.
- Do use large rounded corners on cards and 15px on buttons.
- Do use the yellow family for emphasis against #52595f and white.
- Do show hard numbers (Tbps, ASNs, facilities, availability) as large tiles.
- Don't add drop shadows; the site separates surfaces by fill.
- Don't document the memorial popup, cookie banner or scrim as brand UI.
- Don't use the WordPress default colors (vivid purple, pale pink) as brand colors.
- Don't use sharp corners on cards.

## Responsive Behavior

The extraction includes one mobile pass at 390px. Measured at that pass: the h1 is 31.5px with 47.25px line height; the h2 is 42px; body text is 14px; content width is 360px. Layout rearrangement, breakpoints, menu behavior and touch-target sizes were not measured. The mobile capture shows a stacked single-column page, but breakpoint values are not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #4f4f4f and the NT family at weights 400 and 700.
2. Build cards with #fbfbfb fill and 40px or 50px radius; buttons at 42px height, 15px radius, 0px 30px padding.
3. Add yellow (#ffa800, #ffd100) as accent, #f0506e for headline emphasis only.
4. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=thailand-internet-exchange-th-ix --force --no-motion` after any site refresh, then rerun the gate.
5. Gradient stops, hover states beyond nav links, and dark mode are not measured; measure before documenting.
