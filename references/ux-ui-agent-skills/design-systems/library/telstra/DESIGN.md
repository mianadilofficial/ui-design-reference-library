---
version: alpha
name: Telstra
category: "Telecom"
description: "Telstra Personal home page: Telstra Display 700 56px headlines and Telstra Text Variable 16px body, navy #131a35 ink and 36px-radius 48px buttons, interactive blue #0d54ff, 16px bordered cards, cream #fbf8f3 panels and #f2f2f7 footer."
colors:
  canvas: "#ffffff"
  ink: "#131a35"
  primary: "#131a35"
  on-primary: "#ffffff"
  surface-2: "#f2f2f7"
  surface-3: "#fbf8f3"
  ink-3: "#4a4d55"
  ink-4: "#0d54ff"
  hairline: "#0505051a"
  primary-hover: "#050505"
typography:
  display:
    fontFamily: "\"Telstra Text Variable\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.25px"
  heading:
    fontFamily: "\"Telstra Display\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: "-0.5px"
  subheading:
    fontFamily: "\"Telstra Text Variable\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: "\"Telstra Text Variable\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 36px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
  nav:
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.ink-3}"
    typography: "{typography.body}"
    padding: 0px 24px 0px 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 16px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
---

# Telstra

## Overview
The measured site is the Telstra Personal home page (https://www.telstra.com.au/, title "Telstra | Mobile Phones, Plans, NBN, Home Internet, Accessories & more"). It is an Australian telecom retail site with a deal-led, rounded, friendly look. The capture opens with a thin white header (the blue-and-orange Telstra "T" symbol, an audience switcher with Personal selected in a navy pill, Business and Enterprise, a wide rounded search field, a Language control and a Sign in menu), the label "Telstra Personal", a full-width coral-orange campaign hero ("internet deals", "From $69/mth for 6 months") with a navy pill button, a row of six shadowed shortcut tiles (Mobile phones, Mobile plans, Internet plans, Pre-Paid, Smartwatches, Deals), a sticky second navigation (Mobiles, Internet, Accessories, Telstra Plus, Deals, Support, search and cart), a full-bleed black iPhone 18 Pro hero with two white pill buttons, a "Best selling mobiles" row of four bordered product cards with monthly prices, and a "See what's popular" section of cream accordion-style link lists. The page is 6696px tall at 1280px. Headlines are heavy and tightly tracked; navy (#131a35) is the single ink and button color, and bright blue (#0d54ff) is used for interaction states. Copy is plain and price-first ("Device from $63.86/mth", "Min cost ... over 36 months plus your chosen plan costs").

## Colors
`ink` and `primary` are both #131a35, a deep navy used for headlines, body text, the primary button and the "Personal" pill; `on-primary` is #ffffff; the hover state for the primary button is `primary-hover` #050505 (the root variable `--fixedBlack`). `canvas` is #ffffff; `surface-2` #f2f2f7 is the footer and search-field grey; `surface-3` #fbf8f3 is the warm cream used for list panels (the root variable `--planCardBackground` is #fdfbf9, a similar cream). `ink-3` #4a4d55 is the muted nav and secondary text (`--telstraPlusTier2`); `ink-4` #0d54ff is the interactive blue (`--interactiveInverseBackgroundNormal`, `--spinnerPrimary`); and `hairline` #0505051a (near-black at 10% alpha) outlines cards. Other root variables include `--interactiveBackgroundActive` rgba(13,84,255,0.12), `--lozengeFeatured` #d8f0fe, `--chatBubbleAgentBorder` #ffae87 and `--neutralBackgroundHover` rgba(5,5,5,0.04). The coral hero and the black iPhone hero are campaign backgrounds whose fill values were not recorded as tokens.

## Typography
Two Telstra faces are measured: "Telstra Display" for large headlines and "Telstra Text Variable" for everything else, with fallbacks "Helvetica Neue", Helvetica, Arial, sans-serif. `heading` is Telstra Display 56px / 56px at 700 with -0.5px letter-spacing ("From $69/mth for 6 months"); `display` is Telstra Text Variable 20px / 28px at 400 with -0.25px (the "Telstra Personal" h1 label); `body` is 16px / 24px at 400 (buttons, nav, descriptions); `subheading` is 14px / 20px at 400 (product names, "T&Cs apply" links). Mobile `h1` stays 20px / 28px. Telstra's faces are proprietary; a humanist-grotesque such as Inter or Figtree at weight 700 for headlines is the nearest open substitute.

## Layout
A 1280px layout with a contained column: the shortcut tiles, product cards and list panels share a left edge about 132px (in the 960px capture) from the viewport, while the campaign heroes span the full width and center their copy in a two-column split. Product cards are four-across with roughly equal gutters; "See what's popular" uses two columns of panels. Measured spacing: 4px, 6px, 8px, 10px, 12px, 15px, 16px, 20px, 22px and 24px; the commonest gap is 16px (16 elements), with 8px, 4px, 24px and 32px each used twice. Cards use 16px padding.

## Elevation & Depth
Subtle. Two shadows are measured: `rgba(19, 26, 53, 0.1) 0px 0px 0px 1px inset` (an inset hairline on the search field) and `rgba(5, 5, 5, 0.1) 0px 3px 3px 0px` (the soft lift on the shortcut tiles). Product cards rely on a 1px hairline border (#0505051a) instead of shadow. Elevation is otherwise expressed through color blocking of the full-bleed heroes.

## Shapes
Rounded throughout. Measured radii: 8px (14 elements), 16px (10; cards), `8px 8px 0px 0px` (8) and `0px 0px 8px 8px` (4) for stacked image and text panels, 36px (7; buttons), 24px (6), 4px (3; small links) and 50% (1; circular icon button). Buttons are full-height rounded rectangles that read as pills: the primary and secondary buttons are 48px tall, 12px 24px padding, with a 36px radius. The search field is a long rounded bar.

## Components
- **button-primary**: #131a35 fill, #ffffff 16px label, 36px radius, 12px 24px padding, 48px tall; hover #050505 ("Explore nbn® offer").
- **button-secondary**: #ffffff fill, #131a35 label, same size and radius ("Explore deals"); on the black hero it appears as a white pill and an outlined white pill.
- **link**: #131a35 14px with a 4px radius, underlined for "T&Cs apply".
- **nav**: #4a4d55 16px text, with 0px 24px 0px 16px padding on each link and caret icons; the selected audience is a navy pill.
- **card**: white fill, 16px radius, 16px padding, #0505051a border, with image, brand name, product name, "Device from" price in bold and a small grey minimum-cost note.
- **footer**: #f2f2f7 background, #131a35 text, 909px tall.
- **Shortcut tile**: white tile with a line icon and a bold label, lifted by the 3px soft shadow.
A chat or refresh circular control on the black hero is auxiliary UI, not documented as a component.

## Design System Architecture
No public brand-guideline or design-system link was found: the home page, opened with WebFetch, links no such resource. The shipped CSS publishes 180 root variables with semantic names grouped by role, for example `--interactiveBackgroundActive`, `--interactiveInverseBackgroundNormal`, `--interactiveInverseForegroundNormal`, `--neutralBackgroundHover`, `--neutralBackgroundActive`, `--lozengeFeatured`, `--lozengeTierNegativeBackground`, `--accentOfferAlphaLow`, `--chatBubbleAgentBorder`, `--planCardBackground`, `--telstraPlusTier2`, `--spinnerPrimary` and `--cta-max-width` (300px). The names show a semantic token layer for interaction, neutrals, tiers, lozenges and offers; only values measured on rendered elements are declared here.

## Do's and Don'ts
- Do use navy #131a35 for text and for the one primary action per band.
- Do use rounded 36px buttons, 16px cards and 8px panels.
- Do lead with price ("From $69/mth") in heavy 56px display type with negative tracking.
- Do give cards a hairline border instead of a shadow.
- Don't use the interactive blue #0d54ff for primary buttons; it signals links and active states.
- Don't use drop shadows on cards; only the shortcut tiles carry one.
- Don't mix more than one saturated campaign color per hero.

## Responsive Behavior
Measured at a 390px viewport: the h1 label stays 20px / 28px at weight 400 and the primary button is 324px wide and 48px tall at 16px. The mobile pass recorded no layout, header-link or band data, so navigation collapse and column counts are not measured.

## Iteration Guide
1. Start with #ffffff canvas, #131a35 ink and primary, #f2f2f7 footer and #fbf8f3 list panels.
2. Use a heavy display face at 56px / 56px with -0.5px tracking, text at 16px / 24px and 14px / 20px.
3. Make buttons 48px tall with a 36px radius; cards 16px radius with a #0505051a border.
4. Use #0d54ff only for interactive states and links.
5. Re-run `node web/scripts/verify-designs.mjs --slug=telstra` after every change.
6. Imagery: product renders of phones on plain or black backgrounds, large campaign typography on solid color, and small line icons for navigation tiles.
7. Voice: price-first, short and plain, with a smaller legal line ("T&Cs apply") under each offer.
8. Product card anatomy: product image on top, a thin hairline divider, then brand in small grey type, the model name in bold, "Device from" with the monthly price in bold and a two-line grey note on minimum cost; keep all four cards in a row at the same height.
9. Popular-section panels: each panel has a cream header row with an illustration, a bold title and a chevron, and below it plain white link rows ("Mobile phones", "Mobile plans", "Pre-Paid") each ending in a chevron.
