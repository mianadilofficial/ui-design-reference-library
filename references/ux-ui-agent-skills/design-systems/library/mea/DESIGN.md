---
version: alpha
name: Metropolitan Electricity Authority (MEA)
category: "Thai Brands"
description: "Metropolitan Electricity Authority portal: white canvas with #f2f2f2 panels, #333333 ink, maroon #862633 tab links, orange #d64300 accents, db_ozone type at 22px/19px, and 20px pill outline buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#333333"
  primary: "#ffffff"
  on-primary: "#333333"
  ink-muted: "#555555"
  on-dark-muted: "#ffffffcc"
  ink-body: "#212529"
  accent-orange: "#d64300"
  brand-maroon: "#862633"
  button-primary-border: "#dadada"
  on-primary-hover: "#222222"
typography:
  display:
    fontFamily: db_ozone, sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  display-mobile:
    fontFamily: db_ozone, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  subheading:
    fontFamily: db_ozone, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 24.2px
  body:
    fontFamily: db_ozone, sans-serif
    fontSize: 19px
    fontWeight: 400
    lineHeight: 24.7px
  button:
    fontFamily: db_ozone, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 40px
  link:
    fontFamily: db_ozone, sans-serif
    fontSize: 25px
    fontWeight: 500
    lineHeight: 35px
rounded:
  xs: 3.2px
  sm: 4px
  md: 5px
  lg: 10px
  xl: 18px
  2xl: 20px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    height: 40px
    borderColor: "{colors.button-primary-border}"
  button-primary-hover:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary-hover}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-maroon}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 0px 20px 0px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.page-largest}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 30px 0px 60px
---

# Metropolitan Electricity Authority (MEA)

Measured from https://www.mea.or.th/en (final URL identical), 1280px desktop and a 390px mobile pass. The page is the English home of Thailand's Bangkok-area electricity utility: a service portal rather than a marketing site, built around a hero banner, a tabbed grid of line-icon services, news cards and an outage notice.

## Overview

The portal is light, flat and information-first. The canvas is `#ffffff` with `#f2f2f2` as the largest panel color (the extractor's backgroundColorsByArea ranks `#f2f2f2` first by area, `#ffffff` second, and `#333333` third for the footer). Text is `#333333` almost everywhere, with `#555555` for secondary copy. The hero is a photographic banner carousel with the MEA wordmark in a warm brown and the slogan "Always ready, 24-hour standby service"; it carries the brand more than any CSS color does. Below it, a tab strip (Residence, Business / Industry, Corporate, EV / Solar Cell, Other Businesses) sits on top of a white card that holds seven line-icon service shortcuts: New Meter, Check & Pay, Refunding, MEA Point, Suspended & Re-connect, Tracking service, Change Meter Size/Phase. News follows as three image cards with date and view count, then a maroon "Power Outage Notification" band, then tabbed content blocks (Energy Saving Tips, Electrical Safety, Electricity Tariffs; Announcement, Video, Infographics).

The tone is civic and service-oriented: short noun-phrase labels, no promotional copy. Density is moderate; the body measures 19px, the dominant text size is 22px (1,596 characters), so the page reads larger than a typical corporate site.

The capture shows a black mourning ribbon in the top-left corner. It is a tribute overlay, not brand UI, and is not documented as a token or component.

## Colors

Measured text colors by character weight: `#333333` (2,234), `#555555` (229), `#ffffff` (177), `#ffffffcc` (125), `#212529` (101), `#d64300` (64), `#222222` (23). Measured backgrounds by area: `#f2f2f2`, `#ffffff`, `#333333`, `#f9f9f9`, `#f4f4f4`, `#862633`, `#dadada`.

- **Canvas `#ffffff`** and **page-largest `#f2f2f2`**: the white page and the grey panel it alternates with.
- **Ink `#333333`**: headings, nav and body text. `#212529` is the body element's own color and `#555555` is the muted tier.
- **Brand maroon `#862633`**: the color of the active tab link ("Residence") and a background used by the outage band; it is the strongest chromatic brand signal in measured CSS.
- **Accent orange `#d64300`**: used for text (64 characters); `#fe5000` appears as a border color once, and also in the stylesheet corpus.
- **Primary `#ffffff`** with `on-primary #333333`: the extractor's detected CTA is the white "View All" pill, outlined in `#dadada`. The product has no filled brand-color button in the measured home page.
- **Footer `#333333`** with white text and `#ffffffcc` for secondary footer copy.

The root custom properties are Bootstrap 4 defaults (`--primary: #007bff`, `--danger`, `--success`, etc.). They are framework defaults, not MEA brand colors, and are excluded.

## Typography

One family, **db_ozone**, loaded in weights 300, 400, 500 and 600 (the stylesheet also loads FontAwesome for icons); it covers 100% of measured characters (2,973). Fallback is `sans-serif`. db_ozone is a commercial Thai/Latin face and is not available as a free download; substitute a Thai-capable sans such as Noto Sans Thai when it cannot be licensed.

Scale as measured: display 28px/33.6px weight 500 (section headings such as "News"; 24px/28.8px on mobile), subheading 22px/24.2px weight 500 (card titles), body 19px/24.7px weight 400, button 22px/40px weight 400, tab link 25px/35px weight 500. Weight 500 carries 1,692 characters and 400 carries 1,126, so headings and body are separated by weight and size, not by case or letter-spacing (letter-spacing is `normal` throughout).

## Layout

The page is 1280px wide at the desktop pass and 4,011px tall. Content aligns to a centered container; the capture shows the service card, news cards and footer sharing the same left and right edges. Measured paddings: 15px (47 uses), 8px, 5px, 10px, 16px, 20px, 3px; measured gaps: 8px and 28px. The footer uses `30px 0px 60px` padding. Sections are separated by whitespace and a short maroon underline beneath the active tab (visible in the capture) rather than by rules or dividers.

## Elevation & Depth

Measured box shadows are soft and wide: `rgba(0, 0, 0, 0.2) 0px 0px 20px 0px` (tab link and service card), `rgba(0, 0, 0, 0.2) 0px 2px 20px 0px`, `rgba(0, 0, 0, 0.1) -10px 0px 20px -10px`, and `rgba(136, 136, 136, 0.4) 0px 1px 7px 0px`. Panels float on a 20px blur; there are no hard offset shadows. Borders are pale: `#f2f2f2` (14), `#dadada` (6), `#dddddd` (5), `#c6c6c6` (4).

## Shapes

Measured radii by weight: 5px (35), 4px (16), `4px 4px 0 0` (12, image tops of cards), 50% (8, round icon buttons such as the carousel arrows), 20px (6, the "View All" pill), 10px (5, the tab link's top corners are `10px 10px 0 0`), 50px (4). The tokens keep `rounded.xs` 3.2px through `pill` 9999px as generated. Buttons are 40px tall and use the 20px radius, which makes them full pills.

## Components

- **Button (outline pill):** white fill `#ffffff`, text `#333333` 22px, 1px solid `#dadada` border, radius 20px, height 40px, 100px wide for "View All". Hover measures `#f2f2f2` fill and `#222222` text.
- **Tab link:** text `#862633` 25px weight 500, white fill, padding `8px 16px`, top corners 10px, with a 20px soft shadow.
- **Service tile:** line icon over a 22px-class label, radius 5px; on hover the tile measures a `#f2f2f2` fill and `#222222` text and border.
- **News card:** white, 5px radius, 1px `#f2f2f2` border, image on top, then a 22px weight-500 title, then a row with a calendar date and an eye icon with the view count.
- **Notice band:** maroon label block on the left ("Power Outage Notification") and a grey strip with one announcement and a "View All" pill.
- **Footer:** `#333333` background, white text, address in `#ffffffcc`.

## Design System Architecture

No public MEA design system or brand guideline with color or type specifications was found: the press-media logo page (https://www.mea.or.th/public-relations/press-media/mea-logo) offers logo downloads only. The de-facto system is Bootstrap 4 (its root variables and breakpoints 576, 768, 992 and 1200px are present in the measured :root) with MEA's own overrides: db_ozone as the only face, a grey-white surface pair and a maroon/orange accent pair that replace Bootstrap's default blue primary.

## Do's and Don'ts

- Do use `#333333` on `#ffffff` or `#f2f2f2`; use `#862633` for active tab links and emphasis.
- Do use 20px pill outline buttons with a 1px `#dadada` border.
- Do keep shadows soft (20px blur, 0.2 alpha).
- Don't use Bootstrap's `#007bff` as a brand color; it is a framework default.
- Don't add filled saturated buttons: none were measured.
- Don't reproduce the mourning ribbon as brand UI.
- Don't use letter-spacing or uppercase transforms; none were measured.

## Responsive Behavior

The mobile pass at 390px recorded: h1-class heading 24px/28.8px weight 500 (desktop 28px), h2 22px/26.4px, and the same `#333333` ink; the mobile font-size histogram is led by 22px (1,691 characters), 19px, 21px and 26px. The mobile CTA and nav roles were recorded but layout changes (menu behaviour, column counts) were not measured.

## Iteration Guide

1. Start from `#ffffff` canvas, `#f2f2f2` panels, `#333333` ink, db_ozone (or Noto Sans Thai) at 19px body.
2. Add maroon `#862633` only for active tabs and notice labels; orange `#d64300` only for small text accents.
3. Build buttons as 40px, 20px-radius outline pills.
4. Cards: 5px radius, 1px `#f2f2f2` border, 4px-top-radius image.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mea` after any token change.
