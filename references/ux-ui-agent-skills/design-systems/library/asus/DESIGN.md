---
version: alpha
name: ASUS
category: "Consumer Electronics"
description: "ASUS global home page: white #ffffff and light grey #f5f5f5 canvas with black #000000 product-campaign bands, slate ink #4d4d4d and #181818, ASUS blue #006ce1 for buttons and Learn more links, TT Norms Pro headings (52px condensed display, 42px/44px) over Roboto body, 8px button radius and 16px card radius."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#4d4d4d"
  ink-strong: "#181818"
  primary: "#006ce1"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-on-dark: "#dcdcdc"
  link-blue: "#0076b3"
  accent-gold: "#cead85"
typography:
  display:
    fontFamily: TTNormsStdCondensedNormal
    fontSize: 52px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: TTNormsStdCondensedNormal
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  heading:
    fontFamily: TTNormsProMedium, Roboto, "ASUS Icons", sans-serif
    fontSize: 42px
    fontWeight: 400
    letterSpacing: "-0.6px"
  subheading:
    fontFamily: TTNormsProMedium, Roboto, "ASUS Icons", sans-serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 52px
  body:
    fontFamily: TTNormsProMedium, Roboto, "ASUS Icons", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18.9px
  button:
    fontFamily: TTNormsProNormal, Roboto, "ASUS Icons", sans-serif
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: TTNormsProMedium, Roboto, "ASUS Icons", sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 25px
  body-dominant:
    fontFamily: Roboto
    fontSize: 16px
    fontWeight: 400
  input:
    fontFamily: TTNormsProNormal, Roboto, "ASUS Icons", sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 32px
  xl: 99px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 16px
    height: 40px
  link:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
  nav:
    textColor: "{colors.ink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-black}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 11px 12px
    height: 40px
    borderColor: "{colors.ink-strong}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    padding: 48px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 8px 0px
---

## Overview

asus.com ("ASUS Global", en-us) is a retail-and-campaign front page for a hardware maker. The capture, 5,535px tall at 1280px, starts with a thin white strip of sub-brand marks (ROG, ProArt, ASUS IoT) and a utility menu (Gaming, Business, Environment), then the main bar: the ASUS wordmark, a menu (AI, Mobile / Handhelds, Laptops, Displays / Desktops, Motherboards / Components, Networking / IoT / Servers, Accessories), Support, a search icon and an account icon. A grey banner follows ("Create an ASUS account today to register your product for better support. Learn more"). A full-width hero carousel (the first slide measured: h1 "ProArt GR1X Mini PC" in gold) is followed by a black event band ("Spark the Next Era of Creativity", an IBC 2026 booth invitation) and a grid of two-column product tiles on pale gradient backgrounds: "ASUS ExpertBook P3 G2 (Intel) Crafted for productivity", "ASUS ExpertBook B5 Flip G2 Flexibility, Perfected" in blue, "Copilot+PC", "ASUS Zenbook 14 Design you can feel", "ASUS ExpertCenter Pro ET900N G3" and "Upgrade What Matters". Then "Campaigns and Events" (a card carousel), "Spotlight" (editorial image cards), and a large multi-column footer with an email sign-up form ("Sign up").

The capture also contains a Thai-language region suggestion dialog, a chat-assistant widget and a scrim; these are overlay controls and are not documented as brand UI or tokens. The measured page body text begins with that dialog's Thai text, which is why the root body is reported as Roboto 16px.

The voice is product-marketing: a product name in light grey or black, then a short benefit line ("Crafted for productivity"), then a blue "Learn more ›" link.

## Imagery and Voice

Product photography is cut out on soft pastel gradients (lavender, peach, pale grey) with laptops shown at an angle and screens lit with colorful wallpapers, while event and gaming bands use dark photography with neon lighting and a desk scene on a brick wall. App icons (Pr, Ai, Ae, Ps) float above the monitor in the event band. Each tile pairs a product name, a one-line promise and a blue "Learn more" or "Learn More" link. The footer lists product families and support links under small bold headings.

## Colors

- **Canvas** `#ffffff` (3,421 area units) and **page largest** `#f5f5f5` (3,824, the largest measured area); **surface black** `#000000` (1,548) fills event and campaign bands.
- **Ink** `#4d4d4d` (2,169 measured characters) is the body and footer grey; **ink strong** `#181818` (1,574) is the heading color on light areas; **ink on dark** `#dcdcdc` (2,149) is the text on dark bands; white text covers 1,344.
- **Primary** `#006ce1` (122 characters of "Learn more" and link text, plus the 24-unit fill of the footer "Sign up" button, 40px tall, white text, 8px radius).
- **Link blue** `#0076b3` (22 characters) and `#248dff` (10 characters) are secondary blues measured in text.
- **Accent gold** `#cead85` (19 characters) colors the hero heading on the ProArt slide.

The stylesheet also declares `--swiper-theme-color` #007aff, a carousel library default that is not a brand color. Other measured greys include #565c64 (51 characters), #666666 (45) and #b3b3b3 and #818181 backgrounds; the near-black translucent #00000099 belongs to the region dialog's scrim and is not a token.

## Typography

Loaded faces: TTNormsProRegular, TTNormsProNormal, TTNormsProMedium, TTNormsStdCondensedNormal, ASUS Icons, and Roboto (400, 500, 700). Roboto carries the most characters (3,413), then TTNormsProMedium (1,500) and TTNormsProNormal.

- Display (hero heading): TTNormsStdCondensedNormal 400, 52px / 60px. Mobile: 30px / 36px.
- Heading ("Campaigns and Events"): TTNormsProMedium 400, 42px, letter-spacing -0.6px; mobile h2 24px with -0.4px and 0px 16px padding.
- Subheading: TTNormsProMedium 500, 44px / 52px.
- Body: TTNormsProMedium 600, 14px / 18.9px; dominant body text: Roboto 400, 16px.
- Button and input: TTNormsProNormal 400, 16px (button) and 14px (input).
- Link: TTNormsProMedium 500, 20px / 25px.

The font stacks end in `Roboto, "ASUS Icons", sans-serif`; the icon font supplies chevrons and header glyphs. Font substitutes: TT Norms is commercial; a geometric sans such as Inter or DM Sans (medium) stands in, with Roboto kept as is.

## Layout

The header is 84px tall in the first band (content from 138px to 1258px) and the grey notice banner is 130px tall. The layout probe counted up to 15 card columns on desktop. Product tiles are two-up with a small gutter and rounded corners, each with a centered text block over a gradient photograph; the campaigns row is a three-up carousel; the Spotlight row is one large image card beside two stacked smaller ones. The footer is a multi-column link directory (Shop and Learn, Support, Sustainability and others) over a sign-up row and legal links. Spacing steps measured include 1, 2, 3, 4, 5, 6, 8, 10, 11 and 12px; the card padding is 48px.

## Elevation & Depth

Measured shadows: `0px 2px 8px 0px rgba(0,0,0,0.1)` (6 uses) on cards, `0 0 8px 2px var(--breath--color)` (5) on glowing elements, `inset 0 0 2px #4d4d4d!important` (4), `0 1px 5px #6b6b6b` (4), and focus rings `0 0 0 4px #fff` and transparent. 14 elements use no shadow. Depth also comes from product photography with soft floor shadows.

## Shapes

Radii measured: 4px (29 uses), 8px (22), 16px (19), 20px, 3px, 32px, 6px. Buttons and inputs are 8px, cards and tiles 16px, large panels 32px; the tokens also carry 99px and 9999px for pills and circles (carousel controls and social icons are round).

## Components

- **Primary button** ("Sign up"): #006ce1 fill, white TTNormsProNormal 16px, 40px tall, padding 4px 16px, 8px radius.
- **Link/tag:** black fill with white 20px TTNormsProMedium text and 16px radius.
- **Text link:** "Learn more ›" in #006ce1 with a chevron.
- **Text input:** white, 14px text, 40px tall, padding 11px 12px, 8px radius, #181818 border.
- **Product tile / card:** white, 16px radius, 48px padding, 0 2px 8px shadow.
- **Header menu:** 14px-class links in slate; the desktop pass counted 5 visible header links and a menu toggle.
- **Footer:** link columns, social icon circles, legal row.

## Design System Architecture

No public design system or brand guideline was found on the pages opened (asus.com home via extraction); the page links to none. The stylesheet carries only a few root variables (`--fontFamilyRegular` and `--fontFamilyBold` with unresolved `$TTfont-regular`/`$TTfont-medium` values, `--swiper-theme-color`, `--swiper-navigation-size` 44px), so the system is class-driven CSS; one measured class name contains "header-vue-vue-type-style-index-0-lang-module", but no framework documentation was opened. Breakpoints by usage: max-width 731px (227 rules), max-width 1279px (104), max-width 1023px (67), min-width 1024px (3), max-width 768px (2).

## Do's and Don'ts

- Do use #006ce1 for links and the single filled action; keep it on white or light grey.
- Do set product names in TT Norms Medium and benefit lines in blue.
- Do use 8px radius for controls and 16px for tiles.
- Do alternate pale and black campaign bands.
- Don't reproduce the region dialog, chat widget or scrim as brand UI.
- Don't use #007aff (carousel default) as a brand color.
- Don't add heavy shadows; cards use `0 2px 8px` at 10% black.

## Responsive Behavior

A 390px mobile pass measured: h1 at 30px / 36px, h2 at 24px / normal with -0.4px tracking, 0 16px padding, header links visible: 0, a menu toggle labeled "menu open button", and up to 6 card columns (15 on desktop). The stylesheet declares breakpoints at 731px, 768px, 1023px, 1279px and 1024px. Mobile carousel behavior and footer layout: not measured.

## Iteration Guide

1. White and #f5f5f5 surfaces, #181818 headings, #4d4d4d body; black bands for campaigns.
2. TT Norms for headings (42px to 52px), Roboto 16px for text.
3. One blue, #006ce1, for links and the filled button.
4. 16px tiles with gradient product photography and a centered text block.
5. Run `node web/scripts/verify-designs.mjs --slug=asus`, then measure mobile carousels and the footer.
