---
version: alpha
name: Farmhouse
category: "Thai Brands"
description: "Farmhouse (ฟาร์มเฮ้าส์) bread brand site: a solid red #d90000 header and campaign carousel over a cream paper world of illustrated bakery props, with Thai FC_Lamoon display type at 50px, 20px rounded form fields and round red carousel arrows."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#c51f26"
  header-red: "#d90000"
  surface-crimson: "#b82336"
  ink-secondary: "#333333"
  ink-muted: "#777777"
  accent-gold: "#a58346"
typography:
  display:
    fontFamily: FC_Lamoon, sans-serif
    fontSize: 50px
    fontWeight: 400
    lineHeight: 71.4286px
  display-mobile:
    fontFamily: FC_Lamoon_Bold, sans-serif
    fontSize: 22px
    fontWeight: 100
    lineHeight: 20px
  heading:
    fontFamily: FC_Lamoon, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 30px
  subheading:
    fontFamily: FC_Lamoon, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 39.6px
  nav:
    fontFamily: FC_Lamoon_Bold, sans-serif
    fontSize: 28px
    fontWeight: 100
    lineHeight: 20px
  link:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: FC_Lamoon
    fontSize: 22px
    fontWeight: 400
    lineHeight: 31.4286px
rounded:
  xs: 15px
  sm: 19px
  md: 20px
  lg: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 13px
  s10: 15px
components:
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 23px 15px 22px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 34px
---

# Farmhouse — Design System

## Overview

Farmhouse (ฟาร์มเฮ้าส์, page title "Farmhouse ขนมปังฟาร์มเฮ้าส์") is a Thai bread brand whose website behaves like a packaging shelf: a saturated red header, a full-width campaign carousel, and below it a cream, paper-textured world of illustrated bakery props. The measured home page opens with a red bar holding a bread-stack menu icon, the Farmhouse wordmark centered, a TH language switch and a basket icon. The hero is a campaign banner in red with two smiling presenters holding bread, wheat and grain graphics, a large "3 to Go" lockup, and round red arrow buttons on either side.

Under the hero the page switches mood. The background becomes an off-white parchment with faint sketched bakery scenes, and each section title is set in a glossy brown script with small wheat sprigs on both sides: "Sandwich Idea" (with the Thai subtitle "เคล็ดลับความอร่อยกว่า 100 เมนู" in red), "Products", and "Follow Us". Content is presented through illustration, not cards: recipe videos play inside an illustrated oven, "Next Menu" items sit on cream-colored speech blobs with star ratings, and a product-category row uses small line icons above a red pill label reading "ALL BREAD". The voice is cheerful, food-first and playful.

## Colors

Red is the identity. The header band is `{colors.header-red}` (#d90000), the deepest and most-used saturated surface, and a slightly rosier `{colors.surface-crimson}` (#b82336) appears in secondary bands. `{colors.primary}` (#c51f26) is the measured headline color for Thai section subtitles and accents. Text on red is white (the most-read text color overall by character count) and body text on the light background is `{colors.ink}` (#000000), with `{colors.ink-secondary}` (#333333) and `{colors.ink-muted}` (#777777) for smaller supporting text. A warm gold-brown, `{colors.accent-gold}` (#a58346), is used for small text in the illustrated areas. The page canvas is `{colors.canvas}` (#ffffff), though the visible background is a cream paper image placed over it.

Other reds exist in the measured backgrounds (#ed1b2f and #e32f35) but were not promoted to tokens. The glossy brown of the script titles is part of image or text-effect artwork and is not a flat color token.

## Typography

Two Thai display families do the work: FC_Lamoon (regular) and FC_Lamoon_Bold, both loaded as webfonts, with Kanit loaded at weights 400 and 600 as a supporting face. The headline `{typography.display}` is FC_Lamoon at 50px on a 71.4286px line, the large Thai subtitle style. `{typography.subheading}` is 36px on 39.6px, `{typography.heading}` is 22px on 30px, and form text `{typography.input}` is 22px on 31.4286px. The header navigation `{typography.nav}` is FC_Lamoon_Bold at 28px on a 20px line, and `{typography.display-mobile}` is FC_Lamoon_Bold at 22px on 20px at a 390px viewport. Small utility links use `{typography.link}`: Helvetica Neue (with Helvetica, Arial fallbacks) at 14px on 20px.

The latin script titles ("Sandwich Idea", "Products") are rendered as large glossy brown lettering that reads as artwork; treat them as illustrations to be produced as images or text effects, not as a body font.

Font substitutes: FC_Lamoon is a Thai display face delivered with the site. If it cannot be used, Kanit (already loaded on the site at 400 and 600) is the other Thai family the site ships; verify Thai tone-mark spacing and line heights after substituting.

## Layout

The page is a vertical stack of full-width scenes. A top bar sits above a carousel; then a centered title, a two-column feature (the illustrated oven player on the left, a "Next Menu" list on the right), a centered product tabs row, a horizontal product carousel with round red arrows, and a social area. A decorative vertical rail with a small mascot and bread icons runs down the right edge. Spacing in the live CSS includes 2px, 3px, 4px, 5px, 7px, 10px, 11px, 12px, 13px and 15px for component internals; the navigation links are padded 23px 15px 22px so that the red bar stays tall and easy to hit.

Content is centered and scene-like rather than gridded; individual products float on the paper background without cards or borders.

## Elevation & Depth

No box shadows were measured on the interface. Depth is illustrated: soft cast shadows beneath packshots and photographs, glossy highlights on the script titles, overlapping bread props that break the section boundaries, and a faint sketched bakery background that sits behind everything. The header is flat red. Treat shadow as an image effect applied to packaging and props, and keep interface chrome flat.

## Shapes

Corners are rounded and friendly. The radius scale is `{rounded.xs}` 15px, `{rounded.sm}` 19px, `{rounded.md}` 20px, `{rounded.lg}` 40px and `{rounded.pill}`. The category and year dropdowns are outlined fields with the 20px radius; the red "ALL BREAD" label is a full pill; the carousel arrows and avatar-like elements are circles (the 50% radius appears four times in the measured data). Rounded oven and speech-blob illustrations echo the same softness. Straight, sharp corners are not part of this visual language.

## Components

**Header bar.** A full-width `{colors.header-red}` bar with the menu icon and label at left, the logo centered, language switch and basket at right; navigation text is white, FC_Lamoon_Bold 28px (`{components.nav-link}`, padding 23px 15px 22px).

**Text input / select.** `{components.text-input}`: white fill, black FC_Lamoon text at 22px, 20px radius, 6px 12px padding and 34px height. The Category and Year filters use this pattern with a brown outline in the illustrated area (outline color not measured).

**Links.** `{components.link}`: white 14px Helvetica Neue on the red bar.

**Carousel arrows.** Round red buttons with a white chevron, placed outside the first and last card.

**Category tabs.** A row of line icons above a red pill label. The site has no solid primary button in the measured extraction; calls to action are carried by the arrows and category tabs.

## Design System Architecture

No public design system, token package or brand guideline was found: the official site could not be fetched (both https://www.farmhouse.co.th/ and https://farmhouse.co.th/ failed certificate verification, recorded in SOURCES.json), so there is no official public system to cite and nothing in this document comes from an opened brand page other than the live measurements. The de-facto system is inferred from the shipped page data: no CSS root variables were extracted, so styling is class-based; webfonts FC_Lamoon, FC_Lamoon_Bold and Kanit carry Thai type, and Font Awesome (including the version 5 Free solid face) supplies icons. Visual consistency comes from artwork rather than tokens: the red header, cream paper background, brown glossy titles and illustrated props are repeated across sections.

## Do's and Don'ts

- Do keep the header solid red (#d90000) with white FC_Lamoon_Bold navigation text.
- Do use cream paper backgrounds and illustrated props below the hero.
- Do round form controls at 20px and use pills and circles for tabs and arrows.
- Do keep copy warm and food-first, with Thai subtitles in red (#c51f26).
- Don't add drop shadows to interface elements; none were measured.
- Don't use sharp corners for controls.
- Don't use the latin glossy script titles as a text font; they are artwork.
- Don't place text directly on busy photographs without a red or cream surface.

## Responsive Behavior

The extraction recorded the desktop layout and one mobile style: the headline changes from `{typography.display}` (FC_Lamoon 50px) to `{typography.display-mobile}` (FC_Lamoon_Bold 22px on 20px) at 390px. How the oven player, the two-column feature and the product carousel rearrange was not measured, so verify them in a browser before specifying them. The navigation is already a compact menu-icon pattern on desktop, so its mobile form should keep the same red bar, centered logo and basket icon.

## Iteration Guide

1. Start with the red #d90000 bar and a campaign banner; switch to cream paper underneath.
2. Set Thai headlines in FC_Lamoon at 50px with #c51f26 color, subtitles at 36px.
3. Build forms with 20px radius, 34px height and 22px FC_Lamoon text.
4. Use circles for carousel arrows, a full pill for the active product category and line icons for the tab row.
5. Keep section titles as artwork and add small wheat sprigs on either side.
6. Check any new color against the measured set: #d90000, #b82336, #c51f26, #ffffff, #000000, #333333, #777777, #a58346.
