---
version: alpha
name: SC Asset
category: "Thai Brands"
description: "SC Asset (scasset.com, measured at /en/) residential developer site: BrutGrotesqueThai type with 36px weight-300 headings and -0.72px tracking, #000000 ink on white, a #ff6200 orange accent for nav band and tags, pale peach and #fee6ee pink promotional bands, 10px and 15px radii, and large house photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff6200"
  surface-promo-pink: "#fee6ee"
  ink-muted: "#aaa2a2"
typography:
  display:
    fontFamily: BrutGrotesqueThai, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.16px"
  display-mobile:
    fontFamily: BrutGrotesqueThai, sans-serif
    fontSize: 26px
    fontWeight: 300
    lineHeight: 32.5px
    letterSpacing: "-0.52px"
  heading:
    fontFamily: BrutGrotesqueThai, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 45px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: BrutGrotesqueThai, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22.5px
rounded:
  xs: 10px
  sm: 15px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 7px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 28px
components:
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    height: 40px
---
## Overview

SC Asset's home page at https://www.scasset.com/ (measured at its final URL /en/) is titled "SC Asset - Leading Real Estate Developer in Thailand". The page's Thai tagline reads "SC พัฒนาอสังหาริมทรัพย์ สร้างคุณค่าสู่คนและโลก" (SC develops real estate, creating value for people and the world). The capture shows a minimal white header with a Search link at left, a black interlocking "SC" monogram at center and a Menu link at right; three small round project thumbnails ringed in orange sit above the header. A very large hero photograph of a villa with a sweeping white lattice roof fills the width of the page, followed by a full-width orange navigation band (About SC, Projects, Services, Investor Relations, News & Articles, Sustainability, Contact SC).

Below it, the page shows a peach-toned section with giant ghosted "SC" monogram shapes, brand wordmarks (Boulevard Tuscany, Pave), a search bar with filter dropdowns, a row of project cards, and a pink promotions band patterned with small icons. The mood is airy and premium: generous white, thin type and architecture photography, with orange as the only saturated color. The measured page height is 4588px at 1280px width.

## Colors

Background areas measured: #ffffff (5615), #000000 (1095), #fee6ee (730), #ffe1d1 (717), #fff5eb (640), #574944 (525) and #ff6200 (439). Text colors by characters: #000000 (12318), #ff6200 (1546), #ffffff (1159), #aaa2a2 (973).

- canvas #ffffff, ink #000000.
- primary #ff6200: the brand orange, used for the navigation band, the "New project" tags, price lines ("Starts 260 MB*") and the large "House" headline text. The extractor found no filled CTA button, so no button-primary is declared.
- surface-promo-pink #fee6ee: the promotions band.
- ink-muted #aaa2a2: small category labels such as "House" above cards.
- #ffe1d1 and #fff5eb: peach hero-section fills, and #574944 a dark brown fill; measured but not tokenized.

A cookie banner wrapper (cookiesbanner_modal_wrapper) was hidden during extraction. The floating "Contact Us" bubble, the pink chat button and the black AI button at the lower left of the hero are overlay controls and are not documented as brand components.

## Typography

One family, BrutGrotesqueThai with a sans-serif fallback, loaded at weights 300, 400 and 800, plus Font Awesome 7 Pro and an icomoon icon font. Sizes by characters: 16px (12075), 18px (1402), 13px (967), 12px (608), 15px (452), 26px (258), 22px (95).

- display: 16px, weight 400, line-height 20px, letter-spacing -0.16px (the measured H1 candidate "Search"). display-mobile: 26px, weight 300, line-height 32.5px, letter-spacing -0.52px at the mobile pass.
- heading: 36px, weight 300, line-height 45px, letter-spacing -0.72px (section headline "House" in orange).
- subheading: 18px, weight 400, line-height 22.5px.
- Root variables define the site's own type scale: --font-1 13px, --font-2 26px, --font-3 36px, --font-4 42px, --font-1a 16px, --font-6 62px with negative tracking steps (--font-3-ls -2 and similar).

Tight negative tracking on a light weight gives headlines a refined, architectural look. BrutGrotesqueThai is a commercial face loaded by the site; a Thai-capable grotesque sans is the substitute outside it.

## Layout

The root variables give --max-w 1600px and --header-h 100px. The header is three-zone (search, monogram, menu) and centered. The hero photograph is inset from the edges with equal side margins in the capture. Project listings are a four-column card row with a small carousel dot pager (five dots). Each card has a category label, a photograph (a small orange "New project" tag on newer ones), a project name, an orange price line, and three rows pairing a place icon and name with a distance or travel time (for example "700 M.", "15 Min.", "5 Km."). Frequent paddings are 15px (147), 7px (146), 20px (99), 10px (97), 5px (95) and 30px (91).

## Elevation & Depth

Two shadows were measured, each on a single element: rgba(0, 0, 0, 0.18) 0px -8px 24px 0px (an upward shadow, a bottom-anchored panel) and rgba(0, 0, 0, 0.15) 0px 1.93465px 7.73859px 0px (a floating control). The rest of the page is flat, with depth created by color bands.

## Shapes

Radii measured: 100% (177 elements, dots and circular controls), 15px (95), 50% (13) and 10px (1); tokenized as xs 10px, sm 15px and pill 9999px. Round elements dominate the controls: circular project thumbnails, the circular search icon button, and pager dots. Photographs are rectangular.

## Components

- text-input: #000000 text in the 16px display type, 40px tall (the "May I inquire about what you are searching" field with an orange circular search button).
- Filters: Type, Location, Price, Transportation and Function dropdowns with chevrons, plus "Near Me" and "Ai Search" links with icons.
- Project card: described under Layout.
- Navigation band: full-width #ff6200 strip with black text links.
- Promotions band: #fee6ee with a repeated small icon pattern and a "Promotions" label.

## Design System Architecture

No public design system or brand guideline link appears on the pages opened. The shipped CSS has a de-facto system in root variables: a named type scale (--font-1 through --font-8 with companion -lh line-height ratios such as 1.25 and -ls letter-spacing steps), --max-w 1600px, --header-h 100px, Font Awesome 7 Pro as the icon source and Swiper (--swiper-navigation-size 44px) for carousels. Colors are not exposed as root variables in the measured set.

## Do's and Don'ts

- Do use black on white for text, orange #ff6200 as the single accent, and pale peach or pink bands for emphasis.
- Do keep headlines light (300) with negative tracking.
- Do show proximity data (km, minutes) in each project card.
- Do use circular controls and 10px or 15px radii.
- Don't introduce cool blues or greens; the measured palette is warm.
- Don't present the chat, AI and Contact Us floating controls or the cookie banner as brand UI.
- Don't add heavy shadows; only two were measured, on single elements.

## Responsive Behavior

At the 390px mobile pass the display type measured 26px at weight 300, line-height 32.5px and letter-spacing -0.52px, and body text 16px. Layout changes at mobile width (card columns, navigation) were not measured.

## Iteration Guide

1. White canvas, #000000 text, orange #ff6200 accent.
2. Headlines 36px/45px at weight 300 with -0.72px tracking.
3. Use #fee6ee and peach fills for bands and promotions.
4. Build cards as photo, name, orange price, then three icon-led proximity lines.
5. Keep header minimal: search, monogram, menu.
6. Run `node web/scripts/verify-designs.mjs --slug=sc-asset` after edits.

## Content and Imagery

Photography is large, high-resolution architecture: villas and townhouses at dusk or in daylight, with pools, lawns and interiors. Brand names appear as wordmarks (Boulevard Tuscany, Pave) rather than headings. Copy is short and factual: a project name, a price starting point ("Start 90 - 180 MB", "Start 80 MB", "Start 50"), and nearby places. The site offers an AI search and a "near me" search as primary discovery tools, which the page presents in the same row as the manual filters. Hotline 1749 is given in the footer per the page copy.

The rhythm of the page alternates between airy, nearly empty color fields (the peach area with oversized ghosted monogram shapes) and dense information rows (the project cards with three data lines each). The ghosted monogram acts as a brand pattern: it is drawn in a slightly darker peach than its background and cropped by the edges of the section, and a smaller icon pattern repeats across the pink promotions band. The three circular thumbnails ringed in orange above the header sit above the header as round project thumbnails. Each card repeats the same four-part structure of label, photograph, name and price, followed by three proximity lines.
