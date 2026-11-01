---
version: alpha
name: Northvolt
category: "Energy & Climate"
description: "Northvolt (northvolt.com) is a white #ffffff, photo-led battery-maker site set entirely in the custom Northvolt Grit typeface, with #222222 ink, square-cornered #44a27a green 'Join us' buttons, 40px regular-weight headlines, 100px stat numerals, a #333333 notice bar and an #080808 black footer."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#44a27a"
  on-primary: "#ffffff"
  primary-hover: "#44a27a06"
  on-primary-hover: "#49a47d"
  footer-black: "#080808"
  surface-light: "#f9f9f9"
  notice-bar: "#333333"
  ink-muted: "#9b9b9b"
  black: "#000000"
typography:
  display:
    fontFamily: "\"Northvolt Grit\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  stat:
    fontFamily: "\"Northvolt Grit\", sans-serif"
    fontSize: 100px
    fontWeight: 400
    lineHeight: 140px
  body:
    fontFamily: "\"Northvolt Grit\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  button:
    fontFamily: "\"Northvolt Grit\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
  nav:
    fontFamily: "\"Northvolt Grit\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  footer:
    fontFamily: "\"Northvolt Grit\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
rounded:
  xs: 2px
  none: 0px
spacing:
  s1: 1px
  s2: 4.8px
  s3: 5px
  s4: 6px
  s5: 10px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 18px 30px
    height: 59px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-link-hover:
    textColor: "{colors.primary}"
  notice-bar:
    backgroundColor: "{colors.notice-bar}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  news-card:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.footer-black}"
    textColor: "{colors.canvas}"
    typography: "{typography.footer}"
    rounded: "{rounded.none}"
---

# Northvolt

## Overview

The measured site is https://northvolt.com/ (title "Northvolt | Northvolt", `lang="en"`), captured at 1280px wide with a 6781px scroll height and at 390px for the mobile pass. A 70px `#333333` notice bar runs across the top: "For more information about Northvolt's Chapter 11 restructuring, please visit cases.stretto.com/northvolt".

Below the notice, the header is transparent over a full-bleed 810px hero photograph of a pine forest seen from above: the lowercase "northvolt" wordmark on the left, centred links (Why Northvolt, Products, Sustainability, Career, Recycling) and a menu icon on the right. The hero carries the hand-lettered slogan "MAKE OIL HISTORY." as artwork, a short white paragraph ("The world is turning its back on fossil fuels…") and a square green "Join us" button. A white logo strip of customers (Volvo, Epiroc, Scania, Volkswagen) follows, then "Green batteries for a blue planet" with three stat blocks (2016, 90%, 45GWh) under small outlined labels (Founded, Reduced footprint, Capacity), a "Calling all problem solvers" careers block with a black-and-white portrait and a green brush stroke, a full-bleed wave photograph with an overlapping white "Powered by the force of nature" card, a "Solutions" grid of six photo tiles (Automotive, Construction, Disruptors, E-mobility, Grid, Industrial), "Latest news" cards, "Batteries made from batteries" with a green 3D infinity loop, "The Northvolt way" with three line icons, and an `#080808` footer.

The voice is confident and climate-mission driven: "Green batteries for a blue planet", "Powered by the force of nature", "Batteries made from batteries". Photography is Nordic landscape — forest, sea, snow — and industrial close-ups, with green used as the single accent.

## Colors

- **Canvas `#ffffff`** — the page background behind content sections.
- **Ink `#222222`** — the most-read text (2426 chars) and the 1px borders on stat labels.
- **Primary `#44a27a`** — Northvolt green: the "Join us" fill and border, link hover colour, and the brush-stroke and infinity-loop artwork. **On-primary `#ffffff`**.
- **Primary hover** — the filled button inverts on hover: background `#44a27a06` (green at 2.4% alpha, effectively transparent) with `#49a47d` text, keeping the green border.
- **Footer black `#080808`** — the footer band and largest dark area (836 area weight).
- **Surface light `#f9f9f9`** — news-card backgrounds (237 area weight).
- **Notice bar `#333333`** — the top information strip.
- **Ink muted `#9b9b9b`** — dates and secondary text (47 chars).
- **Black `#000000`** — a small amount of text (22 chars).

The palette is deliberately small: white, near-black and one green. Hero and section photographs supply the blues and greens of nature.

## Typography

Every measured character (3395) is set in **Northvolt Grit**, a custom family loaded in weights 400, 500, 600 and 700, with Helvetica and Arial as fallbacks.

- **Display** — 40px/44px, weight 500: section headlines such as "Green batteries for a blue planet" and "Powered by the force of nature"; tile titles use 30px.
- **Stat** — 100px/140px, weight 400: the "2016", "90" and "45" numerals; their units ("%", "GWh") are 55px.
- **Body** — 16px/22.4px, weight 500: paragraphs and the notice-bar text (16px is 2620 of the measured chars).
- **Nav** — 16px/22.4px, weight 600 for the header links and inline text links ("Our cells", "Join us!", "Read more").
- **Button** — 16px/20.8px, weight 500.
- **Small caps labels** — 12px with +2px tracking for inline section labels ("RECYCLING", "CAREER", "SUSTAINABILITY") at the start of paragraphs.
- **Footer** — 14px/19.6px, weight 500.

Weight 500 is the default (2558 chars), so even body copy feels slightly heavy; 600 and 700 mark links and emphasis. If Northvolt Grit is unavailable, a neo-grotesque with a medium weight (e.g. Inter or Helvetica Neue Medium) is the nearest substitute, as the site's own fallback to Helvetica indicates.

## Layout

The desktop page uses full-bleed photographic bands alternating with white content sections. Measured bands: 70px `#333333` notice bar, 810px hero photo, 1686px white section in three columns (intro, stats, careers), a 650px wave photo band with an overlapping card, a 2855px white section in three columns (Solutions grid, Latest news, recycling, The Northvolt way), a 653px `#080808` footer in four columns and a 57px white legal strip. Text blocks are narrow (the "Green batteries" heading is 242px wide), placed asymmetrically to the right or left of images.

Measured spacing is generous but sparse: gaps of 32px and 2%; paddings of 20px, 10px, 24px, 40px and 60px. The header showed five visible links and a "Toggle menu" control on desktop. The Solutions grid is three photo tiles across and two rows deep.

## Elevation & Depth

No box shadows were measured. Depth is created by overlap — the white "Powered by the force of nature" card sits over the bottom edge of the wave photograph, and the green brush stroke overlaps the careers portrait — and by full-bleed photography against white. The 3D-rendered green infinity loop is the one dimensional object on the page.

## Shapes

Square. Only three elements have a radius (2px — the small outlined stat labels); buttons, cards, photo tiles and the footer are 0px. Rules are 1px `#222222`. Inline links are underlined with a green line. Organic shape comes only from imagery: the brush stroke, the infinity loop and the hand-lettered hero slogan.

## Components

**Primary button ("Join us")** — `#44a27a` fill, `1px solid #44a27a` border, white Northvolt Grit 16px/20.8px weight 500, 0px radius, `18px 30px` padding, 59px tall, 111px wide. Hover: background `#44a27a06`, text `#49a47d`, border stays green.

**Text link** — Northvolt Grit 16px weight 600 with a green underline ("Our cells", "Join us!", "Read more", "Introducing Revolt"); hover colour `#44a27a` (measured `rgb(68, 162, 122)`).

**Notice bar** — `#333333`, white 16px/22.4px text and a dismiss "×".

**Header** — transparent over the hero, white 16px/600 links, wordmark left, menu icon right.

**Stat block** — a 2px-radius outlined label (Founded, Reduced footprint, Capacity), a 100px/400 numeral with a 55px unit, and a short description.

**Solution tile** — square-cornered photo with a 30px white title at bottom left.

**News card** — photo on top, `#f9f9f9` panel with a `#9b9b9b` date and a bold headline.

**Footer** — `#080808`, white wordmark, address "Northvolt AB ⌁ Alströmergatan 20 SE-112 47, Stockholm, Sweden", phone, email, social icons and link columns (Products, Solutions, About us, Manufacturing, Recycling, Press, Sustainability, Career) at 14px/19.6px.

## Design System Architecture

No public Northvolt design system or brand guideline exists. The press page https://northvolt.com/press-resources/ offers a press kit with images, renders and a logotype download (https://www.datocms-assets.com/38709/1645017457-northvolt_logotype.zip?dl=) and states "All material may be used in both print and online media with reference to Northvolt", but publishes no colours or typefaces.

The de-facto system, read from the shipped page, is minimal: one custom family (Northvolt Grit) at four weights, a three-colour interface palette (`#ffffff`, `#222222`, `#44a27a`) plus `#080808` for the footer, and square corners; the press-kit logotype is served from DatoCMS assets. No brand CSS custom properties were found among the root variables; the only `@font-face` families are Northvolt Grit and `swiper-icons`.

## Do's and Don'ts

**Do**
- Use Northvolt green `#44a27a` as the only accent — buttons, link underlines, artwork.
- Keep every corner square.
- Set everything in Northvolt Grit, with 500 as the default weight.
- Use large Nordic landscape photography edge to edge, with narrow text blocks beside it.
- Present facts as huge 100px numerals with small outlined labels.

**Don't**
- Don't add shadows or rounded cards.
- Don't introduce extra colours in the interface; let photos carry colour.
- Don't set headlines bold; 40px at weight 500 is the headline style.
- Don't treat the restructuring notice bar as a permanent brand element; it is an information banner.

## Responsive Behavior

Measured at 390px wide:

- The notice bar grows to 129px tall as its text wraps.
- "Green batteries for a blue planet" drops from 40px/44px weight 500 to 30px/33px weight 400.
- Body text stays 16px/22.4px weight 500.
- The "Join us" button keeps its spec but its padding becomes `15px 30px` and its height 53px.
- The nav reported no visible header links; a 24px menu toggle remains.
- A 70px size was measured on 8 characters — the same count as the 100px stat numerals on desktop.
- The page becomes a single column (10611px tall) and the footer grows to 1333px in two columns.

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Start with white `#ffffff`, `#222222` text and Northvolt Grit at 16px/22.4px weight 500.
2. Put a transparent header over a full-bleed landscape photo with white 16px/600 links.
3. Add a square `#44a27a` "Join us" button: `18px 30px` padding, 59px tall, 1px green border; on hover it becomes transparent with green text.
4. Use 40px/44px weight-500 headlines in narrow columns beside images.
5. Present numbers at 100px/140px weight 400 with 2px-radius outlined labels.
6. Build a three-across photo grid with white 30px titles, then `#f9f9f9` news cards.
7. Close with an `#080808` footer at 14px/19.6px. Keep corners at 0px throughout.
