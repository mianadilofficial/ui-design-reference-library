---
version: alpha
name: Nespresso
category: "Food & Beverage"
description: "Nespresso USA (nespresso.com/us): warm off-white #faf9f8 and white #ffffff surfaces, near-black #17171a ink and dark bands, a deep green #257a57 pill CTA (hover #1b5b40) and gold #876c43 accents. NespressoLucas in four weights — 48px uppercase/light headings, 30px titles, 16px/24px body — with 999px pill buttons and 8px cards."
colors:
  canvas: "#ffffff"
  page-body: "#faf9f8"
  ink: "#17171a"
  primary: "#257a57"
  on-primary: "#ffffff"
  primary-hover: "#1b5b40"
  surface-grey: "#ededed"
  surface-grey-2: "#e7e7e7"
  surface-cream: "#f3eee6"
  campaign-green: "#79bd70"
  ink-black: "#000000"
  accent-gold: "#876c43"
  ink-muted: "#6f6f70"
  ink-nav: "#454547"
typography:
  display:
    fontFamily: NespressoLucas, "Trebuchet MS", Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    letterSpacing: 1px
  display-mobile:
    fontFamily: NespressoLucas, "Trebuchet MS", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
    letterSpacing: 1px
  heading:
    fontFamily: NespressoLucas, "Trebuchet MS", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    letterSpacing: 4px
    textTransform: uppercase
  heading-light:
    fontFamily: NespressoLucas, "Trebuchet MS", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 57.6px
    letterSpacing: 1px
  body:
    fontFamily: NespressoLucas, "Trebuchet MS", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.25px
  nav:
    fontFamily: NespressoLucas, "Trebuchet MS", Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: 0.25px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 8.84px
  s6: 10px
  s7: 10.64px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    padding: 4px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.ink-muted}"
---

# Nespresso

## Overview

This is Nespresso USA (nespresso.com/us), measured on its home page. It is a long, merchandising-heavy storefront
built from rounded content panels on a warm off-white `#faf9f8` page and white `#ffffff` sections. Type is set
entirely in Nespresso's own NespressoLucas family, ink is a soft near-black `#17171a` rather than pure black, and the
action colour is a deep green `#257a57` on pill-shaped buttons.

The capture shows, from the top: a thin green promotional strip, a white header with the square Nespresso "N" logo,
category links (Coffee, Machines, Accessories, Collections, Subscription & Loyalty, Sustainability & Recycling,
Store Locator, For Business) and utility icons. The hero is a co-branded campaign panel — "NESPRESSO X SWAROVSKI /
TWO ICONS. ONE DAZZLING SEASON" — on a pale green field with a green "Shop Collection" pill and an outlined "Shop
Vertuo Coffee" pill beside a product photograph. Below: an "Indulge in exclusive offers" carousel of offer cards,
a full-bleed video section "Any coffee, any size" with a numbered 01–05 step strip, "Find the right system for you"
with three machines on white and black "View Details" pills, "Your next cup awaits" product carousels of capsule
cards with small green circular add buttons, a dark `#17171a` "Be your own barista" recipe carousel, "Only on
Nespresso.com" service cards, a sustainability section ("Protecting the planet with every pour") on cream tiles,
and a row of category image tiles at the foot.

The voice is warm and sensory ("A delicious selection of coffee flavors, bold accessories, and shining décor."),
with direct, sentence-case button labels ("Shop Collection", "View Details", "Subscribe Now", "Sign Up").

## Colors

- **Canvas `#ffffff`** and **page body `#faf9f8`** — the two main surfaces; the warm off-white covers the largest
  measured background area, white the next.
- **Ink `#17171a`** — the most-read text colour; also the fill of the dark "Be your own barista" band, the
  secondary pill buttons and the offer cards.
- **Primary `#257a57`** — the green CTA fill ("Shop Collection", "Subscribe Now"), with white text. On hover it
  darkens to **`#1b5b40`** (measured).
- **Accent gold `#876c43`** — a recurring text accent by character count (eyebrows and small labels).
- **Ink black `#000000`**, **ink muted `#6f6f70`** (footer text), **ink nav `#454547`** (header links).
- **Surface grey `#ededed`** and **`#e7e7e7`**, **surface cream `#f3eee6`** — the panel and tile backgrounds of
  product and sustainability sections.
- **Campaign green `#79bd70`** — the promotional strip at the very top. The hero panel's pale green field
  (`#a9d795` in the band map) belongs to the Swarovski campaign rather than the base system.

Measured hover pairs: the white "Subscribe Now" pill inverts to ink fill with white text; the ink "Sign Up" pill
inverts to white with ink text; the outlined "Shop Vertuo Coffee" pill gains a 10%-ink tint
(`rgba(23, 23, 26, 0.1)`).

## Typography

One family: **NespressoLucas**, loaded in weights 300, 400, 500 and 700, with a fallback stack of Trebuchet MS,
Helvetica and Arial. A separate icon font, "Crema Glyphs", supplies glyphs.

- **Heading (uppercase)** — 48px / 700 / 57.6px with wide 4px tracking: "TWO ICONS. ONE DAZZLING SEASON".
- **Heading light** — 48px / 300 / 57.6px with 1px tracking: "Indulge in exclusive offers", "Find the right
  system for you". The light 300 weight in sentence case is the default section-title voice.
- **Display** — 30px / 700 / 36px with 1px tracking: the campaign eyebrow "NESPRESSO X SWAROVSKI" (the page's h1).
- **Body** — 16px / 400 / 24px with 0.25px tracking.
- **Nav** — 12px / 700 / 14.4px with 0.25px tracking.

By character count the page uses 16px, 20px and 12px most, then 30px, 24px, 48px, 14px and 36px. Tracking is
always positive: 0.25px for text sizes, 1px for display sizes, 4px for the uppercase heading.

Substitute, if NespressoLucas is unavailable: a humanist sans with a light weight; the site's own fallback is
Trebuchet MS.

## Layout

The measured desktop viewport is 1280px; the page scrolls to roughly six and a half screens of content. Content
is organised into contained, rounded panels inside a centred column, alternating with full-bleed media bands (the
video section and the barista carousel). Grids are three-up for machines and service cards, carousels of three to
four cards for products and offers. The most common gaps are 16px, 8px, 4px and 24px; padding is mostly 8px, 10px
and 24px inside components and 40px or 80px around sections. A sticky header measured `--kissui-header-height`
132px in the root variables, with the desktop navigation declared to need at least 1140px
(`--header-nav-desktop-min`).

## Elevation & Depth

No box shadows were measured. Depth comes from surface contrast: rounded off-white, grey and cream panels on
white, the full-bleed dark ink band, and photography with soft studio lighting. Carousel arrows sit as solid
dark circles over the content.

## Shapes

Buttons are full pills (999px computed, the most frequent radius on the page). Cards and content panels use 8px.
Smaller radii appear on tags and badges (3px, 4px), and a 50px radius on a few rounded controls. Images inside
cards follow the card's rounding; full-bleed media is square-edged.

## Components

- **Primary pill** — green `#257a57`, white NespressoLucas 16px label, 10px 24px padding, 48px tall, pill radius,
  hover `#1b5b40`.
- **Secondary pill** — ink `#17171a` fill, white label, same metrics ("View Details").
- **Outlined pill link** — transparent with a 1px ink border, ink label, same metrics ("Shop Vertuo Coffee"),
  hover tint of 10% ink.
- **Offer card** — 8px-rounded panel with eyebrow, a large light headline, a product photo and a small pill
  CTA; the measured offer card is 540px tall in the carousel.
- **Product card** — white panel with capsule photo, bold name, two-line description, intensity and aroma
  notes, price, and a small green circular add button.
- **Header** — white, NespressoLucas 12px/700 links in `#454547`, square black logo tile.
- **Footer** — payment logos ("100% Secure Payments") and link rows in `#6f6f70`.

## Design System Architecture

No public Nespresso design system could be opened; the corporate address nestle-nespresso.com redirects to
https://www.nespresso.com/ (see SOURCES.json). The storefront exposes almost no CSS variables — only
`--kissui-header-height` and `--header-nav-desktop-min` — so the de-facto system is visible in computed styles
rather than tokens: one family in four weights, a two-step tracking rule (0.25px text, 1px display), pill buttons
in three variants (green, ink, outlined) sharing one 48px metric, and 8px-rounded panels. The `kissui` prefix in the
header variable names the site's component layer.

## Do's and Don'ts

**Do**
- Use near-black `#17171a` for text and dark surfaces, not pure black.
- Keep green `#257a57` for the main purchase action.
- Use light-weight 48px sentence-case section titles; reserve bold uppercase for campaign headlines.
- Build every button as a 48px pill with 24px horizontal padding.
- Put content in 8px-rounded panels on the warm off-white page.

**Don't**
- Don't add drop shadows; separation comes from surface colour.
- Don't use negative tracking — the measured site always tracks positive.
- Don't treat campaign colours (the Swarovski greens) as the base palette.
- Don't mix square buttons with the pill system.

## Responsive Behavior

From the extraction's mobile pass:

- The largest headline becomes "Indulge in exclusive offers" at 40px / 300 / 48px; the uppercase campaign heading
  measured 36px / 700 / 43.2px.
- Body stays 16px / 24px with 0.25px tracking.
- The green "Shop Collection" pill keeps its desktop style.
- Visible header links drop from 10 on desktop to 2 on mobile.
- The most-read mobile sizes were 20px, 12px, 16px and 14px.
- The top promotional strip stays 42px tall on both widths.

Breakpoints and card-column changes between widths were not measured.

## Iteration Guide

1. Load NespressoLucas (300/400/500/700) and set ink `#17171a` on `#faf9f8` and white.
2. Use the three pill variants for every action; keep green for purchase.
3. Title sections in 48px light sentence case; use the 48px bold uppercase with 4px tracking only for campaigns.
4. Group content in 8px-rounded panels with 16px gaps.
5. Add new tokens only from a new measurement of the storefront.
