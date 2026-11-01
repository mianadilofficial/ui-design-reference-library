---
version: alpha
name: Central Group
category: "Thai Brands"
description: "Central Group (centralgroup.com/en/home): monochrome conglomerate site on white and #f1f1f1 with black and #474747 text, the CPN typeface (32px/700 statement, 16px/24px body), full-bleed photography with white labels, 10px frosted cards and no brand accent color."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-image: "#ffffff"
  ink-gray: "#474747"
  surface-gray: "#f1f1f1"
  card-bg: "#ffffff33"
  hairline: "#ffffff4d"
  border-sand: "#cecac0"
  centara-500: "#b5121b"
  pattana-500: "#b49657"
  tham-500: "#60a031"
typography:
  display:
    fontFamily: CPN, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 43.2px
  display-mobile:
    fontFamily: CPN, sans-serif
    fontSize: 23.9px
    fontWeight: 700
    lineHeight: 32.265px
  heading:
    fontFamily: CPN, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  card-title:
    fontFamily: CPN, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 37.8px
  body:
    fontFamily: CPN, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  small:
    fontFamily: CPN, sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 10px
  sm: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 64px
  s10: 96px
components:
  link-on-image:
    textColor: "{colors.on-image}"
    typography: "{typography.body}"
    padding: 16px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xs}"
    padding: 16px 16px 40px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 10px 20px 0px
    height: 469px
  footer:
    textColor: "{colors.on-image}"
    typography: "{typography.heading}"
    padding: 96px 0px 0px
    height: 389px
---

## Overview

The Central Group home page (https://www.centralgroup.com/en, which resolves to https://www.centralgroup.com/en/home, title "Central Group", language en) is the corporate site of a retail, real estate and hospitality group. The measured page is 1280px wide and 5965px tall with 290 visible elements. Its first statement is the h1-sized line "Central Group is a multi-format retail, real estate, and hospitality conglomerate with presence across Asia and Europe", set centered in 32px bold black on white.

The page is a sequence of editorial bands built from photography. In the earlier capture, a hamburger icon sits at the left of a centered "CENTRALGROUP" wordmark (a black "CENTRAL" followed by a gray "GROUP"), with "EN | TH" and a search icon at the right, over a panoramic skyline photograph. After the statement comes a four-column full-bleed photo strip with white uppercase labels separated by thin white lines (European Luxury Stores, Central Retail, Central Pattana, Centel), a split section with a light-gray left half ("European Luxury Stores", the heading "A Global Leader of Luxury Stores", and a "Visit Our Stores" link with an arrow) over a photograph of a department store facade with a frosted card ("Selfridges, The United Kingdom"), a sustainability band ("Sustainable Development for a Better World", with "Discover more"), a "Highlights" block (Shaping Future Careers, Support Arts & Culture, each with "Discover More"), and a "Company Journals" block titled "News & Updates" with three dated items (12 October 2026, 04 September 2026, 08 July 2026), each with a thumbnail, a bold headline and a diagonal arrow. A dark photographic footer closes the page.

The consent banner visible in the capture (a floating card with "Accept All" and "Change Preferences") is a cookie control and is not part of the design system. An earlier capture also carried a promotional pop-up over the hero; the home page was re-measured with the batch extractor and that pop-up is gone in the current capture. The voice is corporate and global: short factual statements, place names (Italy, Germany, The United Kingdom) and proper business names.

## Colors

The page has no chromatic brand color on its own surfaces. Measured text colors by character count are `#000000` (1212), `#ffffff` (916) and `#474747` (332). Backgrounds by area are `#ffffff` (3335), `#f1f1f1` (2882), `#ffffff33` (188), `#000000` (8) and `#0000001a` (2). Measured border colors are `#ffffff4d`, `#cecac0` and `#00000033`.

- **Canvas `#ffffff`** and **ink `#000000`** carry the headline statement and headings. **Ink gray `#474747`** (declared `--grey-900`) is the paragraph color. **Surface gray `#f1f1f1`** (declared `--grey-50`) fills the large split section.
- **On image `#ffffff`** is the text color on photographs and the footer. **Card background `#ffffff33`** and **hairline `#ffffff4d`** are the frosted-glass fill and border (white at 20% and 30% alpha) of the floating card.
- **Primary `#000000`:** the extractor found no CTA and generated `#ffffff` (a white link on an image card) as primary. The page's action elements (text links with arrows) are black, so primary equals ink; there is no accent hue to assign.
- **Declared group palette:** the root declares colors for the group's businesses, among them `--centara-500: #B5121B`, `--pattana-500: #b49657` and `--tham-500: #60A031`, plus sand, gray, pin and growth-country scales. They are kept as `centara-500`, `pattana-500` and `tham-500` tokens; none of them is measured on the home page surfaces.

Overlay gradients over photographs and the black translucent layer (`#0000001a`) are image treatments and are not tokenised.

## Typography

One typeface, **CPN**, carries all 2460 measured characters (regular 400 and bold 700 loaded; the font files are `font-cpn-regular` and `font-cpn-bold` woff2 files served from the site's `/assets/build/` path). Font Awesome 6 Pro and an `icomoon` icon font are also loaded. The CSS corpus lists Marcellus and GothamRounded faces from embedded promotional material; no measured text uses them.

- **Display (the statement):** CPN 700, 32px on 43.2px, black, centered, 728px wide. At 390px: 23.9px on 32.265px.
- **Heading (h2 "Highlights"):** CPN 700, 16px on 24px.
- **Card title:** CPN 700, 28px on 37.8px (the frosted card's lines Rinascente, KaDeWe, Selfridges).
- **Body:** CPN 400, 16px on 24px, `#474747`.
- **Small text:** CPN 400, 14px (204 characters, for example "EN | TH").

Measured sizes by character count: 16px (1942), 14px (204), 32px (116), 28px (99), 22.5px (49), 41px (36), 48px (14). Weights: 400 (1684) and 700 (776). No letter-spacing was measured. Hierarchy is made by size jumps (16px, 28px, 32px, 48px) and bold weight; the h2 "Highlights" is bold at the same 16px as body text, so weight is the signal there.

Font substitutes: the declared stack is `CPN, sans-serif`; any geometric humanist sans in regular and bold at 16px with a 1.5 line-height keeps the proportions.

## Layout

The page is a vertical stack of full-width bands. The extractor's band analysis recorded a single white band for the full 5965px height, so section boundaries come from the capture: a hero photograph, a white statement section, a four-column photo strip, a two-column split, full-bleed sustainability photograph with centered text, a two-column highlights block with a vertical hairline, a news list in rows, and the footer.

Measured gaps are 16px (14 occurrences), 8px (9), 4px (3), and 24px, 48px and 12px (1 each). Measured paddings are 16px (24), 32px (10), 40px (9), 48px (8), 8px (4), 96px (3), 64px (2) and 12px (2). The footer has 96px top padding and is 389px tall. The frosted card is 400px by 469px with padding 16px 16px 40px.

The statement section is centered with a 728px measure; the news list uses large numerals for the day at the left, a month-and-year label under it, a thumbnail, a bold headline, and a diagonal arrow at the right, separated by hairlines.

The declared breakpoints are `--breakpoint-xs: 0`, `-sm: 576px`, `-md: 768px`, `-lg: 992px`, `-xl: 1200px` and `-xxl: 1640px`; the stylesheet corpus uses `max-width: 1200px` (426 times), `max-width: 1639.98px` (361), `max-width: 767.98px` (343) and `max-width: 991.98px` (291).

## Elevation & Depth

The page is flat except for one frosted card. The measured shadows are `rgba(0, 0, 0, 0.05) 0px 10px 20px 0px` (on the card role) and `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` (1 occurrence, element not identified in the record). The frosted card combines a white 20% fill, a white 30% border and the soft 10px/20px shadow over a photograph.

The CSS corpus lists Bootstrap focus rings (`0 0 0 .2rem` at 25% alpha in green, red and blue), which are framework defaults and not brand elevation. Depth otherwise comes from photography, full-bleed bands and the gray `#f1f1f1` panel set against white.

## Shapes

Shapes are rectangles with one rounded component. Measured radii: 50% (7 occurrences; round icon buttons), 10px (4), 24px (2) and 0% (1). The frosted card uses 10px; photos in the strip and split are plain rectangles without rounding; the social icons in the footer are small circles.

The recurring graphic motifs are thin vertical white dividers between photo columns, hairline rules between news rows, small arrows (a right arrow after "Visit Our Stores" and "Discover More", a diagonal arrow in the news rows) and a script-style graphic title in the sustainability band that is part of its artwork.

## Components

**Frosted card.** Background `#ffffff33`, 1px `#ffffff4d` border, 10px radius, padding 16px 16px 40px, shadow `rgba(0, 0, 0, 0.05) 0px 10px 20px 0px`, 400px by 469px, black bold 28px/37.8px title lines (country name below in regular weight in the capture).

**Text link with arrow.** CPN 16px; black on light surfaces ("Visit Our Stores", "Discover More", "View all our news") and white on photographs (the image-card link measures `#ffffff`, padding 16px). No filled or outlined button was detected on the home page by the extractor.

**Header.** A centered wordmark, a hamburger icon at the left, language toggle "EN | TH" (14px) and a search icon at the right. The opened page lists the main navigation as Home, Group, Businesses, Brands, Sustainability, Press Room, Engage with Central Group and Contact.

**Photo strip.** Four full-bleed photographs separated by thin white lines, each with a centered uppercase white label in CPN.

**News row.** A large day numeral and a month-and-year caption at the left, a thumbnail, a bold headline and a diagonal arrow at the far right, separated by hairlines (dates 12 October 2026, 04 September 2026, 08 July 2026).

**Footer.** 389px tall, 96px top padding, white bold 16px links (Contact us, Engage with Central Group, Procurement, Terms and Conditions, Privacy Notice, Cookie Policy, Companies in Central Group, Sitemap), three round social icons (Facebook, Instagram, YouTube) and the line "Copyright © 2026 Central Group. All right reserved".

## Design System Architecture

No public design system, brand guidelines, brand-asset or press-kit page was found: the header navigation (opened at https://www.centralgroup.com/en/home) offers Group, Businesses, Brands (a brand directory), Sustainability, a Press Room (Corporate News, Business Highlights, Sustainability Highlights, Newsletters, Videos), Engage with Central Group and Contact. The logo files are served from `/storage/logo/` but are not offered as downloads.

The de-facto system is a Bootstrap 4-style stylesheet (`--breakpoint-*`, `--primary: #007bff` and `--secondary: #6c757d` defaults, `--success`, `--info`, `--warning`, `--danger`) layered with a group palette of named scales: grays (`--grey-50` `#F1F1F1` through `--grey-900` `#474747`, `--lightgray`, `--darkgray`), sand (`--sand-50` through `--sand-900`), business and campaign colors (`--centara-100`, `--centara-500`, `--pattana-100`, `--pattana-500`, `--tham-100`, `--tham-500`, `--growth-country-*`, `--blue-million-gifts-2`, `--green-million-gifts-2`, `--globus-1`, `--globus-2`, `--pin-primary`, `--pin-secondary`) and a single type family (CPN). The measured home page uses only the black, white and gray steps of that palette; the Bootstrap blue is not used on visible text.

## Do's and Don'ts

**Do**
- Keep the page monochrome: white and `#f1f1f1` surfaces, black headings, `#474747` paragraphs and white text on photography.
- Set all text in CPN: 32px bold for the opening statement, 16px for body and links, 28px bold for card titles.
- Let photography carry color; label photo strips with centered uppercase white text and thin white dividers.
- Use frosted cards (`#ffffff33` fill, `#ffffff4d` border, 10px radius, soft 10px/20px shadow) over images.
- Mark links with small arrows rather than filled buttons.

**Don't**
- Don't add an accent color to the corporate pages; the sub-brand colors (`#b5121b`, `#b49657`, `#60a031`) belong to the group's businesses.
- Don't use Bootstrap's default blue as a link color.
- Don't copy the cookie banner or the promotional pop-up into the design system.
- Don't set card text in white; the measured frosted card text is black.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured at 390px: the opening statement is 23.9px on 32.265px (32px on 43.2px at desktop), 342px wide and 161px tall; the h2 "Highlights" stays 16px on 24px and 342px wide; the body paragraph stays 16px on 24px in a 342px-wide column that is 192px tall (728px wide and 96px tall at desktop). No CTA and no nav role were detected at 390px.

Measured sizes by character count at 390px: 16px (2087), 14px (207), 23.9px (116), 21.925px (99), 19.2094px (49), 31.8px (44). Breakpoint behavior of the photo strip, the split section and the news rows at 390px was not measured.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#000000`, paragraph gray `#474747` and panel gray `#f1f1f1`; use white for text over photography.
2. Set CPN: 32px/43.2px bold for the opening statement (23.9px/32.265px at 390px), 16px/24px regular for body, 16px bold for small headings, 28px/37.8px bold for card titles.
3. Compose the page as full-bleed bands: a panoramic hero, a centered 728px statement, a four-column photo strip with white labels, a two-column split with a gray panel, and a hairline-separated news list.
4. Float a frosted card (`#ffffff33`, 1px `#ffffff4d`, 10px radius, padding 16px 16px 40px) over photography for featured items.
5. Use arrow-suffixed text links instead of buttons; keep the header minimal with a centered wordmark.
6. Close with a dark photographic footer, 96px top padding, white bold links and round social icons.
