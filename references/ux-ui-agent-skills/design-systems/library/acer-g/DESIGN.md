---
version: alpha
name: Acer
category: "Consumer Electronics"
description: "Acer United States home (acer.com/us-en): white #ffffff canvas, #222222 ink, Noto Sans throughout with 41.056px/600 section heads, Acer lime green #80c343 pill buttons (800px radius) with dark #222222 labels, #40810c green text links, a #333333 utility bar and a #f0f0f0 footer."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#80c343"
  on-primary: "#222222"
  surface-muted: "#f0f0f0"
  surface-utility: "#333333"
  ink-strong: "#000000"
  link-green: "#40810c"
  ink-on-dark: "#f8f8f8"
  ink-footer: "#333333"
typography:
  display:
    fontFamily: "\"Noto Sans\", Arial, sans-serif"
    fontSize: 41.056px
    fontWeight: 600
  display-mobile:
    fontFamily: "\"Noto Sans\", Arial, sans-serif"
    fontSize: 32.48px
    fontWeight: 600
  promo-title:
    fontFamily: "\"Noto Sans\", Arial, sans-serif"
    fontSize: 29.696px
    fontWeight: 600
  subheading:
    fontFamily: "\"Noto Sans\", Arial, sans-serif"
    fontSize: 21.792px
    fontWeight: 600
  body:
    fontFamily: "\"Noto Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: "\"Noto Sans\", Arial, sans-serif"
    fontSize: 18.784px
    fontWeight: 600
    lineHeight: 28.176px
rounded:
  xs: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 24px
    height: 40px
  text-link:
    textColor: "{colors.link-green}"
    typography: "{typography.body}"
  utility-bar:
    backgroundColor: "{colors.surface-utility}"
    textColor: "{colors.ink-on-dark}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-muted}"
    textColor: "{colors.ink-footer}"
---

# Acer

## Overview

This file documents Acer's United States home page, measured at `https://www.acer.com/us-en/` (title "Acer Laptops, Desktops, Chromebooks, Monitors & Projectors | Acer United States"). The queued URL `https://www.acer.com` first redirected the measuring browser to `https://www.acer.com/en-us/`, which rendered an "Oops!" not-found page; the real US home page was re-measured at `/us-en/` (see SOURCES.json).

The page is a straightforward retail electronics storefront. A thin `#333333` "Acer Brands" utility bar sits above a white header with the lowercase green acer wordmark, a single row of navigation ("Shop", "Deals", "AI", "Products", "Business", "Education", "Support") and search/account/cart icons. Below it a full-width hero carousel shows product renders on soft gradients ("Acer Aspire 14 AI | Acer Aspire 16 AI — Explore. Evolve. Aspire." with a green "Explore" pill), then "Browse Popular Categories" (product cut-outs on white with plain captions), "Exclusive Offers & Value Picks" (two photographic tiles with overlaid titles), "Insights and Innovations" (three editorial cards with green "Read More" links), "Discover More with Acer" (four cards with "Explore" / "Learn More" links) and a light grey footer.

The tone is practical and product-forward: photography and product renders carry the colour, the interface stays white and charcoal, and Acer's lime green appears on buttons and the logo.

A region-selection banner in Thai (with a select box and a green "continue" button) appeared at the very top because the measuring browser was outside the US; it is a locale prompt, not brand UI, and is not documented as a component.

## Colors

Backgrounds by area: `#ffffff` (5114), `#f0f0f0` (1216), `#ffffff80` (385), `#222222` (92), `#f8f8f8` (73), `#333333` (53), `#80c343` (25). Text by characters: `#222222` (2906), `#000000` (374), `#ffffff` (216), `#40810c` (97), `#f8f8f8` (57), `#333333` (11).

- **canvas `#ffffff`** — page background and every content band.
- **ink `#222222`** — the main reading colour for headings and body copy.
- **ink-strong `#000000`** — used on some hero and card headings ("Explore. Evolve. Aspire.").
- **primary `#80c343`** — Acer lime green, the fill of every pill button and the logo colour.
- **on-primary `#222222`** — button labels are dark charcoal on green, not white.
- **link-green `#40810c`** — a darker green for text links ("Read More", "Learn More", "Explore") so they stay readable on white.
- **surface-muted `#f0f0f0`** — the footer background (also `--agw-light`).
- **surface-utility `#333333`** with **ink-on-dark `#f8f8f8`** — the "Acer Brands" utility bar (`--agw-dark: #333333`).
- **ink-footer `#333333`** — footer link text.

The site's root variables also declare status colours `--agw-negative: #b92820`, `--agw-positive: #128228`, `--agw-warning: #ffc107` and `--agw-general: #08559e`; none of them was seen rendered on the home page, so they are not added as tokens. `--swiper-theme-color: #007aff` is the carousel library's default.

## Typography

One family: Noto Sans, loaded at 400 and 600, with Arial as the declared fallback (`--agw-font-family: "Noto Sans", Arial, sans-serif`). Noto Sans is an open-source Google family, so no substitute is needed. An `acer-icons` icon font is also loaded.

- **display** — 41.056px, weight 600. All main section heads: "Browse Popular Categories", "Insights and Innovations", "Discover More with Acer", and hero titles.
- **promo-title** — 29.696px, 600. Titles overlaid on the offer tiles ("Massive Monitor Savings").
- **subheading** — 21.792px, 600. Card titles ("50 Years of Breaking Barriers").
- **button** — 18.784px / 28.176px, 600. Pill button labels.
- **body** — 16px, 400. Card descriptions and general copy.

Sizes by characters: 16px (1657), 18.784px (882), 21.792px (569), 14.24px (236), 41.056px (194), 48.032px (79), 29.696px (44). Only two weights are used: 400 (2785 chars) and 600 (876). No letter-spacing adjustments were measured.

## Layout

Desktop capture: 1280px wide, 4066px tall. The utility bar is 41px tall, the main header band 66px, and the hero carousel spans full width. Content bands run from x=24 to x=1256, i.e. 24px side margins. "Browse Popular Categories" shows 4-plus product tiles in a horizontally scrolling row with a progress rule under it; "Insights and Innovations" is a 3-column card grid; "Discover More with Acer" is 4 columns. Measured paddings are led by 24px and 8px (39 each), 12px (26), 4px (22) and 6px (17); larger section paddings of 64px (5) and 48px (3) appear between bands. Gaps: 24px and 12px. The root variables define a rem spacing scale from `--agw-space-025` (0.25rem) to `--agw-space-600` (6rem).

## Elevation & Depth

The page is flat. No box-shadow was measured at rest. The one depth cue is the measured hover state on green pill buttons, which adds `rgba(0, 0, 0, 0.2) 0px 3px 6px 0px` without changing the fill. Cards have no border and no shadow; images sit directly on white. The hero carousel's pager is a dark translucent capsule with dots.

## Shapes

Measured radii: 800px (15 elements — every button is a full pill), 24px (1) and 20px (1). Images and cards are square-cornered. The shape vocabulary is therefore binary: rectangular content, capsule-shaped actions.

## Components

- **button-primary** — lime `#80c343` fill, `#222222` 18.784px/600 label, full pill radius, padding 6px 24px, 40px tall ("Windows 11", "Explore"). Hover adds the 0 3px 6px shadow.
- **text-link** — `#40810c` green, used under cards as the call to action ("Read More", "Learn More", "Explore").
- **utility-bar** — `#333333` strip with a grid icon and "Acer Brands" in `#f8f8f8`, account and cart icons right.
- **nav** — white header, green lowercase acer logo left, centred charcoal links, search icon right.
- **category tile** — product cut-out image on white with a centred 16px caption.
- **offer tile** — full-bleed photograph with a 29.696px/600 dark title overlaid.
- **editorial card** — image on top, 21.792px/600 title, 16px summary truncated with an ellipsis, green link.
- **footer** — `#f0f0f0` with a "Back To Top" strip, link columns ("Products", "Support", "Resources", "About Acer", "Sustainability") with underlined links, social icons and a legal row.

## Design System Architecture

No public Acer design system or brand-guideline page could be opened for this file (attempts are logged in SOURCES.json). The de-facto system is visible in the shipped CSS: 28 root variables with an `--agw-` prefix — a colour set (`--agw-white`, `--agw-black`, `--agw-dark`, `--agw-light`, plus status colours), weights (`--agw-fw-light` 300 to `--agw-fw-bold` 700), body sizes (`--agw-fs-body-m: 1rem`, `--agw-fs-body-s: 0.89rem`, `--agw-fs-label: 0.79rem`) and a spacing scale named by multiples of a rem (`--agw-space-025` … `--agw-space-600`). Font sizes on the page are fractional multiples of that rem (14.24px = 0.89rem).

## Do's and Don'ts

- Do keep the canvas white and the text charcoal `#222222`.
- Do use lime `#80c343` for pill buttons with dark `#222222` labels.
- Do use the darker `#40810c` green for text links on white.
- Do set everything in Noto Sans, 400 or 600.
- Don't put white text on the lime green; the measured label colour is `#222222`.
- Don't round cards or images; only buttons are rounded.
- Don't add shadows at rest; reserve the 0 3px 6px shadow for button hover.
- Don't document the region-selection banner as brand chrome.

## Responsive Behavior

Measured at 390px: section heads drop from 41.056px to 32.48px; body copy stays 16px. Mobile font sizes by characters: 18.08px (2135), 16px (1645), 20.32px (569), 14.24px (225), 32.48px (194), 36.48px (79), 25.6px (44) — so the 18.784px and 21.792px desktop sizes become 18.08px and 20.32px. The mobile pass found a menu toggle labelled "Navigation" and up to 5 card columns (scrolling rows included). Grid behaviour at intermediate widths was not measured.

## Iteration Guide

1. Start with `canvas` white, `ink` `#222222` and the `#333333` utility bar over a white header.
2. Use `display` for every section head, centred above its row.
3. Put one `button-primary` lime pill in the hero; use `text-link` green links under cards.
4. Keep cards borderless and square; let product renders and photography do the work.
5. Close with the `#f0f0f0` footer in `#333333` text.
