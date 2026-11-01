---
version: alpha
name: Smeg
category: "Home & Furniture"
description: "Smeg international home page (smeg.com), measured — near-black #020202 page with white #ffffff text and a white product section, Raleway 26.4px/400 headlines with 0.32px tracking, Mulish 10px/300 body, 8px/700 uppercase tracked text links with a rule, warm gold #baa483 accent text, 10px radius only."
colors:
  canvas: "#020202"
  ink: "#ffffff"
  primary: "#baa483"
  page-body: "#ffffff"
  ink-on-light: "#020202"
  ink-heading-light: "#161616"
  ink-muted: "#9b9b9b"
  ink-subtle: "#7e7e7e"
  link-hover: "#a0a0a0"
typography:
  display:
    fontFamily: Raleway, sans-serif
    fontSize: 26.4px
    fontWeight: 400
    lineHeight: 34.32px
    letterSpacing: 0.32px
  display-mobile:
    fontFamily: Raleway, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 41.6px
    letterSpacing: 0.32px
  heading:
    fontFamily: Raleway, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 27.3px
    letterSpacing: 0.32px
  card-title:
    fontFamily: Raleway, sans-serif
    fontSize: 21.12px
    fontWeight: 400
    lineHeight: 27.456px
    letterSpacing: 0.32px
  body:
    fontFamily: Mulish, sans-serif
    fontSize: 10px
    fontWeight: 300
    lineHeight: 20px
    letterSpacing: 0.32px
  link:
    fontFamily: Raleway, sans-serif
    fontSize: 8px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 1.44px
    textTransform: uppercase
  input:
    fontFamily: Mulish, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  xs: 10px
spacing:
  s1: 6px
  s2: 8px
  s3: 10px
  s4: 12.8px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 23px
  s9: 27px
  s10: 30px
components:
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-link-hover:
    textColor: "{colors.link-hover}"
  text-input:
    typography: "{typography.input}"
    padding: 6px 0px
    height: 36px
---

# Smeg

## Overview

This file covers the Smeg international home page at `https://www.smeg.com/` (title: "Smeg - Technology with style | Smeg.com", `lang="en"`), measured at 1,280px and 390px. The extractor hid a country-selection modal, its backdrop and a cookie layer before measuring; the URL ends in a carousel hash (`#d0f0/fullscreen-initial/`) added by the hero slider.

The page is a dark, gallery-like showroom for appliances. A black header carries small utility links ("Smeg in the world", "Sustainability", "Contacts", "Customer service"), the white Smeg logo centred, and a row of uppercase category links — MAJOR APPLIANCES, SMALL APPLIANCES, SPECIAL PROJECTS, AESTHETIC LINES, INSPIRATION — with search and menu icons on the right. The hero is a full-width photograph of a cream retro refrigerator and a small appliance on a plinth against a warm plaster wall, with "Moonlight Collection" in white Raleway, a one-line description and a "DISCOVER MOONLIGHT" text link preceded by a thin horizontal rule. A black section follows with two product cut-outs (a built-in oven and an espresso machine) under "Major appliances" and "Small appliances". Then a white section, "Our latest designs", shows three lifestyle photos (XL Air Fryer, Multiuse Grill, SMEG x 24Bottles) and a "Total Mattness" video block. The page returns to black for "Latest news" — white cards with award and event stories — and "Smeg Business units" (Smeg Professional, Smeg Instruments, La Pavoni), before a black footer with the logo, assistance phone numbers and uppercase legal links.

The tone is restrained and design-led. Copy is short and descriptive ("A soft, warm finish across iconic appliances, crafted to bring balance, elegance, and harmony into your kitchen"). Every call to action is a small uppercase text link with a leading rule; there are no filled buttons on the page.

## Colors

- **Canvas `#020202`** — the near-black page sections: header, category showcase, news, business units and footer. It is the most common colour in the capture pixels (about 49%).
- **Ink `#ffffff`** — text on the black sections; the most-read text colour (2,019 characters).
- **Page body `#ffffff`** — the body element's background and the white "Our latest designs" section (about 22% of the capture).
- **Ink on light `#020202`** — text on white sections (1,999 characters).
- **Ink heading light `#161616`** — headings on white such as "Our latest designs" and "Total Mattness".
- **Primary `#baa483`** — a warm gold, the only chromatic text colour measured on the page (43 characters). The extraction records it by frequency, not by element, so its exact placement is not recorded; treat it as an accent, not a button fill.
- **Ink muted `#9b9b9b`** and **ink subtle `#7e7e7e`** — secondary labels and dates.
- **Link hover `#a0a0a0`** — measured hover state of the white "DISCOVER MOONLIGHT" link: text and rule both turn this grey.

The shipped `:root` also declares a `--df-*` token set (`--df-accent-primary: #1069f9`, `--df-neutral-high-contrast: #323334`, `--df-neutral-outline: #cbcccd`, `--df-neutral-surface-variant: #e5e6e6`) and `--bg-color-sustainability: #f0f0e6`. None of these was measured on the visible home page, so they are not tokens here.

## Typography

Loaded fonts: **Raleway** (variable 100–700) and **Mulish** (variable 100–700), plus legacy **Muli** 400/700 and the `slick` carousel icon font. Raleway carries 2,368 characters, Mulish 2,081.

- **Display — Raleway 26.4px / 400 / 34.32px, 0.32px tracking.** The hero title "Moonlight Collection".
- **Heading — Raleway 21px / 400 / 27.3px.** Section titles on black ("Latest news").
- **Card title — Raleway 21.12px / 400 / 27.456px.** "Our latest designs" and product/story titles (446 characters).
- **Body — Mulish 10px / 300 / 20px, 0.32px tracking.** Descriptions; 10px is the most frequent size (2,644 characters).
- **Link — Raleway 8px / 700 / 20px, 1.44px tracking, uppercase.** DISCOVER MOONLIGHT, SEE ALL THE PRODUCTS, DISCOVER MORE.
- **Input — Mulish 10px / 400 / 22.4px.**

Tracking is applied everywhere: 0.32px on body and titles, 0.8px on 10px/12px/20px labels, 1.44px and 2.88px on 8px uppercase links. Weights in use: 500, 300, 400, 700 and 200. The desktop sizes are small for a 1,280px viewport — they are the computed values the extractor recorded.

**Substitutes:** Raleway and Mulish are both free on Google Fonts (Muli is Mulish's former name).

## Layout

The desktop page measured 4,491px tall. Bands: black header (100px), full-bleed hero media (1,280px tall in the DOM), a black two-column showcase (595px), a white three-column "latest designs" section (981px), and a black three-column news and business-unit section (1,535px). The CSS declares `--header-height: 66px` and `--menuHeight: 150px`. Content columns sit inside wide margins — measured paddings include 170px (9 elements) and 155px (4), with 15px (53), 10px, 20px and 27px (25 each) inside cards. Gaps of 15px separate cards. The header showed 12 visible links on desktop.

## Elevation & Depth

No box-shadows were measured. Depth comes from the alternation of black and white bands and from photography: product cut-outs float on black, and the news cards are white blocks on black. Thin white rules before every text link add a fine linear detail.

## Shapes

One radius was measured: 10px, on two elements. Everything else — cards, images, sections — is square. The news cards are square white panels; the business-unit tiles carry thin coloured outlines from their imagery.

## Components

- **Text link** — Raleway 8px/700 uppercase, 1.44px tracking, white on black, preceded by a short horizontal rule. Measured hover: text and border turn `#a0a0a0`.
- **Text input** — Mulish 10px/400, 36px tall, `6px 0` padding, no box (the search field in the header).
- **Hero slide** — full-bleed photo, white Raleway title, Mulish description, rule + text link, arrow controls at left and right edges.
- **Showcase card** — product cut-out on black with a Raleway title and a centred rule + link above.
- **News card** — square image over a white panel with a small uppercase category ("NEWS · AWARDS"), a short rule and an uppercase headline.
- **Footer** — black with the white logo, uppercase small headings (AUTHORIZED ASSISTANCE, ABOUT SMEG, FOLLOW US ON) and uppercase legal links.

## Design System Architecture

No public Smeg design system or brand-guideline page was opened: `https://www.smeg.com/company/brand` returned HTTP 404. The shipped CSS is built on Bootstrap 4 (stock variables such as `--gray-dark: #343a40`, `--success: #28a745` and `--breakpoint-xl: 1200px` are present and are not brand colours) and also carries a `--df-*` token family organised by role — `accent-primary/secondary/tertiary` each with `-hover`, `-active` and `on-` variants, and `neutral-surface`, `-background`, `-outline`, `-high/medium/low-contrast`, `-disabled`. The home page itself uses only black, white, greys and the gold accent; the `--df-*` set is not visible on it. The de-facto system is: black and white bands, Raleway for titles, Mulish for text, tracked uppercase micro-links with rules, no filled buttons.

## Do's and Don'ts

**Do**
- Alternate near-black `#020202` and white sections.
- Use Raleway 400 with slight tracking for titles and Mulish 300 for text.
- Make calls to action small uppercase tracked links with a leading rule.
- Present products as cut-outs on black or in warm lifestyle photos.
- Keep corners square.

**Don't**
- Don't add filled or rounded buttons; none appear on the page.
- Don't use the Bootstrap or `--df-accent-primary` blue as a brand colour on marketing pages.
- Don't add shadows.
- Don't use heavy weights for headlines.

## Responsive Behavior

Measured at 390px: the header band is 66px tall (matching `--header-height: 66px`). The hero title "Moonlight Collection" grows to Raleway 32px/400/41.6px with 0.32px tracking, and "Latest news" is 18px/400/23.4px. Section titles on mobile measured 18px at weights 600 and 500 ("Our latest designs", "Total Mattness", "Smeg Business units:"). All recorded mobile bands are single-column: hero media (557px), black showcase (855px), white designs section (1,119px), black news band, media, a white band, and a long black band (2,120px). Mobile font sizes by frequency: 16px, 12.8px, 12px, 18px, 11.2px, 32px and 20px — larger than the desktop values. The stylesheet declares media queries at 576px, 768px, 992px, 1200px and 1367px (the most frequent is `min-width: 1200px`, 573 rules). Menu behaviour on mobile: not measured.

## Iteration Guide

1. Start with a `#020202` page, white Raleway titles and Mulish 10px/300 body text.
2. Add a black header with a centred white logo and uppercase category links.
3. Use a full-bleed product photograph as the hero with a 26.4px Raleway title.
4. Write every call to action as an 8px/700 uppercase link with 1.44px tracking and a short rule.
5. Insert one white section for lifestyle product photos with `#161616` titles.
6. Return to black for news and brand cards with white square panels.
7. Check new colours against the measured set before using the `--df-*` variables.
