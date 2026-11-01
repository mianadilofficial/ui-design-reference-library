---
version: alpha
name: "EGCO Group"
category: "Thai Brands"
description: "EGCO Group, a Thai power producer: white canvas, ink #313131, orange #f58220 headings and green #409a3c accents, Prompt 300/500 type, 8px-radius white buttons with #bebebe border and soft card shadows."
colors:
  canvas: "#ffffff"
  ink: "#313131"
  primary: "#ffffff"
  on-primary: "#313131"
  surface-2: "#f1f1f3"
  surface-3: "#4a4a4a"
  ink-3: "#212529"
  ink-4: "#409a3c"
  ink-5: "#bebebe"
  ink-6: "#f58220"
  card-text: "#2a7539"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 35px
    textTransform: uppercase
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 50px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 26.4px
  button:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 64px
  s10: 96px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 58px
    borderColor: "{colors.ink-5}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 58px
    borderColor: "{colors.ink-5}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.xs}"
  nav:
    textColor: "{colors.ink-4}"
    padding: 12px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.06) 0px 4px 10px 0px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    padding: 40px 0px 24px
---

# EGCO Group

## Overview

EGCO Group (https://www.egco.com/en/home, page title "Electricity Generating") is the site of Electricity Generating Public Company Limited, described on its own page as "a leading international power and energy-related business operator" and "Thailand's first independent power producer", with investments across the Asia-Pacific and North America. The site has an English and Thai switch (EN | TH).

The 1280px capture shows a white header 105px tall with the EGCO Group logo (a grey wordmark with a green-and-orange leaf mark) at left and, at right, a language switch, a search icon and the menu: Company, Business, Sustainability, Governance, Investor Relations, News and Media, Careers, Procurement. Below is a full-width hero of a dark blue sea with a grey world map and boxed country labels (USA, South Korea, Laos, Taiwan, Thailand, Philippines, Indonesia) and Thai headline text "ลงทุนใน 7 ประเทศ ที่มีฐานธุรกิจอยู่แล้ว", with a "SCROLL TO EXPLORE" cue. A cookie-consent card overlays the lower right of the capture; it is a popup and is not documented as brand UI here. Next comes a centred "What We Do" label in orange with a factory icon and the headline "Energy for life" in three colours (orange "Energy", grey "for", green "life"), two paragraphs of centred body copy, and three photo tiles (Business Overview, Power Business, Energy-related Business) with white text and a circular arrow button at the bottom of each. A light grey band follows, headed "Company News" in orange with an "Explore More" button and a carousel of news cards (for example "Business News, 28 September 2026" and "Corporate News/ Awards, 18 September 2026"). The page is 6072px tall.

The tone is corporate, calm and photographic: real plants and aerial harbour views, a strapline in quotes ("A good start will lead to a successful outcome.").

## Colors

The brand palette is grey, orange and green, with white and light grey surfaces. Names come from the site's own variables.

- Canvas `#ffffff` (5027 by area) and `surface-2` `#f1f1f3` (`--grey-200`, 1738), the grey news band.
- Ink `#313131` (`--grey-900`): the most-read text colour (2695 characters). `ink-3` `#212529` (546); `surface-3` `#4a4a4a` (`--grey-800`) is the footer background (403).
- Green `#409a3c` (`--green-500`): navigation hover colour, language label, arrow icons and the EN toggle (`ink-4`). A deeper `#2a7539` (`--green-600`, `card-text`) is used for card text.
- Orange `#f58220` (`--orange-500`, `ink-6`): the colour of the section headings "Company News", "What We Do" and the first word of "Energy for life".
- Border grey `#bebebe` (`--grey-500`, `ink-5`) outlines buttons; `#e4e5e9` (`--grey-300`) is a lighter divider.
- `primary` `#ffffff` with `on-primary` `#313131`: the measured call-to-action button, "Explore More", has a white fill, dark text and a grey border; its accent is the green circular arrow. There is no solid brand-coloured button in the measured data.

The root variables also include Bootstrap defaults such as `--primary: #007bff`, `--danger` and `--success`; these are framework defaults and not brand colours. The green "Accept All" cookie button belongs to the popup and is excluded.

## Typography

One family: Prompt, in weights 300, 400 and 500 (4794 measured characters), plus Font Awesome 6 Pro icon fonts. Prompt covers both Thai and Latin text.

- `display`: 28px/35px, 500, uppercase, for tile labels such as COMPANY and "Business Overview" in white on photos. The mobile `display-mobile` is 16px/20px at 400 (the first mobile heading role resolved to the "Home" label).
- `heading`: 40px/50px, 500, for section titles ("Company News", orange). Mobile h2 measured 27.85px/34.8125px.
- `body`: 16px/26.4px, 300 weight, the dominant size (2932 characters).
- `button`: 16px/24px, 500.
- Other sizes: 14px (778 characters) for news metadata, 19px (729) for footer text, 23px, 48px and 12px. The "Energy for life" headline is the 48px size.

## Layout

Centred page with content width near 1013px for the intro paragraph and cards 348px wide by 555px tall. The header is 105px (`--header-height: 105px`), with padding `12px 0px`; the footer is 315px tall with padding `40px 0px 24px` on `#4a4a4a`. The photo tiles are laid out in one row of three with unequal widths (the first tile is 561px wide by 400px high). Spacing follows an 8px base: gaps of 16px (72 instances), 8px (66) and 48px; paddings of 16px, 24px, 32px, 64px and 96px. The stylesheet declares breakpoints: `--breakpoint-xs: 0`, `-sm: 576px`, `-md: 768px`, `-lg: 992px`, `-xl: 1200px`, `-xxl: 1640px`.

## Elevation & Depth

Two shadows were measured: `rgba(0, 0, 0, 0.06) 0px 4px 10px 0px` (nine instances) on news cards, and `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` once. Both are very soft. Photo tiles get depth from a dark gradient at the bottom edge behind the white label. The grey news band and white cards create tonal layering with no borders on the cards.

## Shapes

Radii are 8px (45 instances; buttons, cards, photo tiles) and 50% (37; round arrow buttons and icon holders), with a 9999px pill token in the generated set. The "Explore More" button is 8px rounded with a 1px `#bebebe` border, 58px high and 171px wide. The tiles share the same 8px corner.

## Components

- Header: white, 105px, logo left, menu in Prompt 16px 300 `#313131`, hover `#409a3c`.
- Button ("Explore More", "IR Home"): white fill, `#313131` text, Prompt 500 16px, border 1px solid `#bebebe`, radius 8px, padding 16px, height 58px, with a green circular arrow icon.
- Photo tile: full-bleed image, white Prompt label, circular white arrow button at the right.
- News card: white, 8px radius, soft shadow, 348px by 555px, orange or grey category label, date, title; text 14px at 300.
- Footer: `#4a4a4a`, white text beginning with the company name and the EGCO Tower address.
- Carousel dots: small, with the active dot green.
- Cookie banner: a popup, excluded.

## Design System Architecture

No public design system or brand guideline link was found on the site. The stylesheet is a Bootstrap-based theme with a custom numbered palette in root variables: `--grey-100` to `--grey-900`, `--orange-100` to `--orange-900`, `--green-50` to `--green-900`, `--blue-500`, `--yellow-500`, `--red-500`; Bootstrap breakpoints; `--header-height`; Font Awesome Pro font stacks; and Swiper carousel variables (`--swiper-navigation-size: 44px`). Source: root variables in the extraction of https://www.egco.com/en/home.

## Do's and Don'ts

Do:
- Pair orange `#f58220` headings with green `#409a3c` highlights on white or `#f1f1f3`.
- Use Prompt at weight 300 for body copy and 500 for headings and buttons.
- Use an 8px radius for buttons, cards and photo tiles; 50% for circular arrows.
- Overlay white uppercase labels on photography.
- Keep shadows soft (`0 4px 10px` at 6% black).

Don't:
- Do not use Bootstrap blue `#007bff` or the Swiper blue `#007aff`; they are defaults.
- Do not copy the cookie popup's green button as a brand button.
- Do not use heavier shadows.
- Do not set Thai text outside Prompt.

## Responsive Behavior

Measured at 390px: body text stays 16px/26.4px weight 300 (342px wide), the "Company News" h2 reduces from 40px to 27.85px/34.8125px, and character sizes include 16px, 14px, 19.4562px, 17.4813px, 31.8px and 21.925px. The Explore More CTA exists in the mobile pass. Declared breakpoints are listed in Layout. Menu collapse, tile arrangement and column counts on mobile were not measured.

## Iteration Guide

1. White ground, `#313131` text, `#f1f1f3` bands, `#4a4a4a` footer.
2. Prompt 300/500; headings 40px orange; body 16px/26.4px.
3. White 8px-radius buttons with `#bebebe` border and a green circular arrow.
4. Photo tiles with white labels; news cards with `0 4px 10px` soft shadow.
5. Run `node web/scripts/verify-designs.mjs --slug=egco`.
