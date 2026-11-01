---
version: alpha
name: "Gibson"
category: "Music & Audio"
description: "Gibson guitar retail site: white #ffffff canvas with #000000 ink, full-bleed black photographic hero, Inter Tight at 16px to 48px in weights 500 and 600, pill buttons at 25px radius, a gold #86764b secondary button and #f7f7f7 product cards with a 10px radius and soft shadow."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-soft: "#f7f7f7"
  ink-muted: "#707070"
  ink-nav: "#121212"
  ink-gold: "#86764e"
  ink-faint: "#b2b2b2"
  button-secondary-bg: "#86764b"
typography:
  display:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 0px
  heading:
    fontFamily: "\"Inter Tight\""
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
  subheading:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 23.4px
  input:
    fontFamily: "\"Inter Tight\", sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 29px
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 21.5px
  xl: 25px
  2xl: 30px
  3xl: 64px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 8.5px
  s7: 10px
  s8: 12px
  s9: 13.01px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xl}"
    padding: 12px 16px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.2xl}"
    padding: 12px 20px 13px
    height: 44px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.2xl}"
    padding: 12px 16px
  nav:
    textColor: "{colors.ink-nav}"
    padding: 12px 50px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.display}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 36px
  card:
    textColor: "{colors.ink-gold}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 52px 0px 20px
    borderColor: "{colors.canvas}"
---

## Overview

The Gibson storefront at gibson.com is a photography-led commerce site for guitars, amps, effects, pickups and accessories. The measured home page opens with a thin utility strip listing the sibling brands (Gibson, Epiphone, Kramer, Mesa/Boogie, KRK) on the left and Garage, Find Dealer, Support and Gazette on the right, followed by a transparent header with the script Gibson logo, six centered navigation items (Guitars, Amps & Effects, Parts & Pickups, Accessories, Lifestyle, Discover) and search, account and cart icons. A full-width hero photograph of two archtop guitars sits beneath, with a large white headline, a short supporting line, a white pill "Shop Now" button and a plain "Learn More" link. Below it come three tall rounded image tiles, a "Featured Products" carousel with filter chips, and then a black-and-white editorial band.

The voice is confident and product-first: short headlines such as "Archtop Perfection", names that read like catalogue entries ("1968 Les Paul Custom Reissue, VOS") and concise calls to action. The interface itself stays quiet so that wood, lacquer and stage photography supply the colour.

## Colors

The measured palette is almost monochrome with one warm gold.

- **Canvas** `#ffffff` is the white product and content background; the largest measured background area is `#000000`, which is the dark hero, overlays and footer.
- **Ink** `#000000` is both the text and the primary button fill. Navigation text uses `#121212` (ink-nav).
- **Muted ink** `#707070` is used for secondary product lines such as brand and finish; `#b2b2b2` is a faint ink; `#777777` appears for a few characters.
- **Gold** `#86764e` is the measured text color of the tag and link accents on product cards, and `#86764b` is the secondary button fill ("Start Free Trial"). The two are separate measured values that sit within one visible shade.
- **Surfaces** `#f7f7f7` and `#f5f5f5` are the light card and chip backgrounds; `#ffffff1a` is a translucent white used over photography.
- **Borders**: `#ffffff`, `#1212121a` and `#000000`.

Text on the dark hero and footer is `#ffffff` (1517 characters, the most of any color), which reflects how much of the page is overlaid on photography.

## Typography

One family carries everything: Inter Tight, loaded in weights 400, 500, 600 and 700 (Helvetica accounts for 49 measured characters). Weights by character are 600 (1554), 500 (949), 400 (406) and 700 (34), so the system leans on medium and semibold rather than regular.

- **Heading**: Inter Tight 48px, weight 600, line height 52.8px, the hero headline.
- **Subheading / button**: 16px, weight 600, line height 24px.
- **Body**: 18px, weight 600, line height 23.4px, measured on the mobile body paragraph and the desktop role.
- **Input**: 24px, weight 500, line height 29px.
- **Display**: the extractor's h1 is the logo text "Gibson" at 16px weight 400; it is kept as the `display` token because the measured role requires it, with a measured line height of 0px.

Other measured sizes by character are 14px (818), 36px (169), 12px (95), 26px, 28px, 11.2px, 13.008px, 34px, 15.008px, 38.4px and 10px. Inter Tight is a Google font; no substitute is needed.

## Layout

The page is 1280px wide and 4841px tall in the capture. The hero runs full bleed under the header. Below it, three equal image tiles share one row with narrow gutters, then the product carousel shows about four cards per view with the fourth card cropped at the edge to signal horizontal scroll. Section headings are left aligned and paired with a right-side "View All" underlined link and arrow controls. Measured spacing values include 1, 5, 6, 7, 8, 8.5, 10, 12, 13.01 and 15px; the nav uses 12px 50px padding and the footer 52px 0 20px.

## Elevation & Depth

A single shadow is measured, used twelve times: `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` on the product cards. The rest of the depth is photographic: dark gradient overlays at the bottom of the hero and tiles keep white text legible. Theme variables `--drawer-shadow-opacity`, `--inputs-shadow-opacity` and `--collection-card-shadow-opacity` are all 0.0, so drawers, inputs and collection cards carry no shadow.

## Shapes

Measured radii: 10px (22 uses, plus `10px 10px 0px 0px` on product image tops, 24 uses), 30px (14), 25px (6), 6px, 64px, 21.5008px, 8px and 50%. The primary button uses 25px, the secondary button 30px, cards 10px, and the tokens add a 9999px pill. Image tiles in the capture have rounded corners consistent with the 10px card radius.

## Components

- **Primary button**: `#000000` fill, `#ffffff` text, Inter Tight 16px weight 600, padding 12px 16px, height 44px, 25px radius. On hover the measured chip "Gibson Pickup Shop" goes from `#f5f5f5` background, black text and a 25px radius to a `#000000` background with white text.
- **Secondary button**: `#86764b` fill, white text, 12px 20px 13px padding, 44px high, 30px radius.
- **Hero button**: a white pill with black text, shown in the capture over photography.
- **Filter chips**: pill-shaped, the active chip black with white text, inactive chips light grey.
- **Product card**: 10px top radius, soft 2px shadow, a light image well, tag line "New | Exclusive" in gold, bold product title, grey brand and finish lines, price at the bottom.
- **Text input**: 24px, weight 500, 36px high.
- **Footer**: black fill, white text, 52px top padding.

Imagery and microcopy: the capture shows studio product shots on soft cream or neutral backdrops for pedals and guitars, moody stage lighting for the hero and tiles, and a black-and-white portrait band that closes the visible page. Labels are terse and transactional: "Shop Now", "Learn More", "View All", "Latest Releases", "Custom Select", "Gibson Exclusive", "Gibson Certified Vintage". Prices appear as plain dollar amounts at the bottom of each card, and promotional text such as "Maestro Sale: 2 for $99.99" is set directly on the photograph.

## Design System Architecture

No public Gibson design system or brand guideline link was found on the pages measured. The storefront is a Shopify-style theme: the measured CSS custom properties include `--font-body`, `--font-heading-style`, `--header-height`, `--media-border-width`, `--buttons-shadow-horizontal-offset`, `--text-boxes-shadow-visible`, `--focused-base-box-shadow`, `--aa-font-size`, `--aa-font-weight-bold`, and Gibson-specific `--gfb-secondary-color` (`#FFFFFF`) and `--gfb-form-sm-padding` (15px). These show a theme-variable system with a brand prefix (gfb) layered on top; no further architecture is claimed.

## Do's and Don'ts

- Do let photography own the colour; keep chrome white, black and one gold.
- Do use Inter Tight at weights 500 and 600, with a 48px semibold headline over imagery.
- Do round buttons to 25px or 30px and cards to 10px.
- Do keep the product card shadow at the measured `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px`.
- Don't introduce a second accent next to the gold `#86764b`.
- Don't use heavy shadows on drawers, inputs or collection cards; the theme sets them to zero.
- Don't use pure grey backgrounds beyond `#f7f7f7` and `#f5f5f5`.

## Responsive Behavior

The mobile pass recorded the h1 role as Inter Tight 16px weight 400, body text at 18px weight 600 with 23.4px line height, and the primary button "Latest Releases" at 16px weight 600 with 20px line height. Column counts, navigation collapse and breakpoints were not captured in the extraction; they are not measured.

## Iteration Guide

1. Start from a white `{colors.canvas}` with `{colors.ink}` text and add photography first.
2. Use `{typography.heading}` only over hero imagery; use `{typography.subheading}` for buttons and card titles.
3. Buttons: `{components.button-primary}` for the main action, `{components.button-secondary}` for the gold trial action.
4. Keep cards at `{rounded.md}` with the single measured shadow.
5. Re-measure before adding any dark-mode or hover behavior beyond the recorded chip hover.
