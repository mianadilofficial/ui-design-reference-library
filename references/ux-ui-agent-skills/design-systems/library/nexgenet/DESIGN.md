---
version: alpha
name: NexGeNet
category: "Thai Brands"
description: "NexGeNet (International Gateway Provider, Crystal Shine Group) publishes a single-page Google Sites home: a dark photographic hero with a 60px white Roboto 500 title, gold #a38500 section headings in Roboto 700 24px, Arial 20px body copy in #202124 on a white #ffffff canvas, and radii of 10px, 18px and 24px on imagery."
colors:
  canvas: "#ffffff"
  ink: "#212121"
  primary: "#a38500"
  on-hero: "#ffffff"
  ink-body: "#202124"
  ink-navy: "#040c28"
  ink-black: "#000000"
  ink-subtle: "#dadce0"
  brand-bronze: "#857251"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 75.6px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 50.4px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: Roboto, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 37.44px
  body:
    fontFamily: Arial
    fontSize: 20px
    fontWeight: 400
    lineHeight: 31.2px
rounded:
  xs: 10px
  sm: 18px
  md: 24px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 12px
  s6: 14px
  s7: 14.8px
  s8: 16px
  s9: 24px
  s10: 48px
components:
  hero-title:
    textColor: "{colors.on-hero}"
    typography: "{typography.display}"
  section-heading:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
  body-copy:
    textColor: "{colors.ink-body}"
    typography: "{typography.body}"
---

## Overview

NexGeNet is the web presence of NexGeNet Company Limited, which describes itself on the page as an "International Gateway Provider" and "A Company of Crystal Shine Group". The measured URL is https://www.nexgenetwork.com/, a Google Sites page with the document title "Home" and the language attribute `en-US`. The site is one scrolling page of 1280 by 1836 px at desktop width. It opens with a dark, photographic hero band carrying the company name, a short gold rule and two lines of descriptor text, followed by a white field that holds two illustrated service columns (IP Transit and DIA), a combined "Crystal Shine + NexGeNet" company block with the CS-NEX logotype, and a plain contact block with an email address, a phone and Viber number and two postal addresses in Myanmar.

The design personality is a utilitarian carrier page: a restrained palette of white, near-black text and a single dark-gold accent, flat layout without shadows, and light isometric technology illustrations rather than photography below the hero. It is built from Google Sites theme defaults, and the measured fonts reflect that: Roboto for headings, Arial for body paragraphs and Open Sans and Google Sans for site chrome.

The measured page text is in English. The company text states that NexGeNet was founded in 2015 and holds a Network Facilities Service (individual) and International Gateway licence from the Posts and Telecommunications Department of Myanmar's Ministry of Transport and Communications, and that it is a wholly owned subsidiary of Crystal Shine Group.

## Colors

The canvas is `#ffffff` (measured as the dominant background area, and confirmed by the capture). Every readable paragraph sits on it. The hero is a separate dark photographic band whose text is `#ffffff`.

- **Ink `#212121`** is the most-read text color by character count (399 weighted characters), used for the contact lines and general copy.
- **Body ink `#202124`** is the color of the Arial 20px service paragraphs (318 characters).
- **Navy ink `#040c28`** and **black `#000000`** appear on specific runs of paragraph text in the company block (147 and 78 characters).
- **Gold `#a38500`** is the color of the "IP Transit" and "DIA" section headings in the measured h2. It is the only saturated brand-like color in the text, so it is assigned to `primary`.
- **Bronze `#857251`** colors the "Crystal Shine + NexGeNet" heading (24 characters at 34.6667px).
- **Subtle `#dadce0`** is the Google Sites body color measured on the navigation chrome.

The extractor's first pick for `primary` was `#0000ee`. That is the browser default unvisited-link color, not a brand color, and it was dropped. The only link role the extractor measured (an icon link) also computed to that default color; no brand link color was measured.

## Typography

Headings use Roboto (loaded weights 400, 500 and 700). The hero h1 reads "NexGeNet" at 60px, weight 500, line height 75.6px, letter spacing -0.5px; the mobile pass measured the same h1 at 40px with line height 50.4px. Section headings are 24px weight 700 with 37.44px line height; the mobile pass measured the h2 at 20px.

Body paragraphs use Arial at 20px weight 400 with 31.2px line height, centered in the two service columns. Open Sans (loaded at 400) accounts for 461 measured characters and Google Sans (500) for 38; these come from the Google Sites runtime, and 16px, 13.3333px, 14.6667px and 14px sizes are used for small contact and footer text.

Font substitutes: Roboto, Arial and Open Sans are all freely available or system fonts, so no substitute is needed. Google Sans is proprietary to Google, and a visitor without it falls back through the declared stack to Roboto then Arial then sans-serif.

## Layout

The page is a vertical stack of full-width bands. The hero band spans the viewport width with centered text. Below it the content uses a two-column grid for the IP Transit and DIA blocks, each with an illustration above a centered heading and a centered paragraph. The company block pairs the CS-NEX logo on the left with left-aligned text on the right, and the contact block is a left-aligned list.

Measured paddings are 8px, 14.7969px, 14px, 48px, 24px, 9px, 4px and 6px; the spacing tokens record these values. No gap values were measured (`gaps` is empty), so the page's spacing comes from padding on Google Sites blocks. The content stays within a centered column inside the 1280px desktop viewport; the scroll height is 1836px.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty) and no border colors were measured. Depth on this page comes from content only: the dark hero photograph against the white field, and the isometric illustrations with their own internal shading. Do not add card shadows or outlines when extending the page.

## Shapes

Three radii were measured: 24px (four elements), 18px (one) and 10px (one). They belong to illustration and image containers. The hero band, text blocks and the gold underline rule measure as square. Treat 24px as the dominant rounded corner and use 18px and 10px only for smaller image frames.

## Components

No button, form input or navigation bar was detected (`ctaPrimary`, `nav` and `input` are null in the extraction). The measured components are text styles:

- **hero-title**: white Roboto 60px / 500 over the dark photographic hero, with a short gold rule below it and two Arial-style descriptor lines in white.
- **section-heading**: gold `#a38500` Roboto 24px / 700, centered above each service paragraph.
- **body-copy**: `#202124` Arial 20px / 400 with 31.2px line height, centered.
- **logo block**: the CS-NEX logotype ("crystal shine" and "next generation network") beside a bronze `#857251` heading.
- **contact lines**: email, phone and Viber and HQ addresses in 13px to 16px text.

The only link measured has an empty text run of 28 by 28 px (an icon link), so no link typography is recorded.

## Design System Architecture

No public design system, brand guideline or press kit exists for NexGeNet: the page was opened at https://www.nexgenetwork.com and exposes no brand, press or design links beyond a home link and an email address. No official design system is published. The de-facto system is the Google Sites platform theme (the extraction found no CSS custom properties: `rootVars` is empty), which loads Roboto, Open Sans and Google Sans and sets the 14px chrome text at 0.15px letter spacing; the page itself adds a dark hero image, the gold heading color and uploaded illustrations. Treat the live page as the only source of truth.

## Do's and Don'ts

- Do keep a white canvas with `#212121` or `#202124` body text.
- Do use `#a38500` for section headings and short accent rules.
- Do set the hero title in white Roboto 500 at 60px over the dark photographic band.
- Do use the 24px radius for rounded imagery.
- Don't use `#0000ee`: it is the browser default link color, not part of the brand.
- Don't add shadows or borders; none were measured.
- Don't introduce additional saturated colors; the page uses gold and bronze only.
- Don't invent navigation, buttons or forms; the measured page has none.

## Responsive Behavior

Only the extractor's 390px mobile pass was measured. It recorded the h1 at 40px (line height 50.4px, letter spacing -0.5px) and the h2 at 20px (line height 31.2px), with body sizes of 20px, 16px, 13.3333px, 14.6667px and 14px. How the two-column service grid and the company block rearrange at narrow widths is not measured, and no breakpoint values were captured. Not measured: navigation behavior on mobile, touch target sizes and image scaling.

## Iteration Guide

1. Start from the white canvas and set body copy in Arial 20px / 400 with `#202124`.
2. Add the hero: a dark photographic band, h1 "NexGeNet" in Roboto 500 at 60px (40px on the 390px pass), white.
3. Make each service block a centered illustration, a gold Roboto 700 24px heading and a centered paragraph.
4. Use 24px radius on illustration frames; keep everything else square.
5. Use `#857251` only for the company-block heading, and keep contact text at 13px to 16px.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=nexgenet --url=https://www.nexgenetwork.com --force --no-motion` after any change to the live site, and run `node web/scripts/verify-designs.mjs --slug=nexgenet`.
