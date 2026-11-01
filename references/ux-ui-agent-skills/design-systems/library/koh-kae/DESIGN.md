---
version: alpha
name: Kohkae
category: "Thai Brands"
description: "Kohkae (โก๋แก่) snack brand's online store: a saturated red #e20d17 header with a white active-nav pill, Prompt type at weights 700 and 800, a white canvas with #f1f1f1 surfaces, and 15px-rounded sticker-like banners and cards led by a cartoon mascot."

colors:
  canvas: "#ffffff"
  ink: "#4d4d4d"
  primary: "#e20d17"
  surface-2: "#f1f1f1"
  surface-3: "#f8f8f8"
  ink-black: "#000000"
  ink-active: "#ca0c15"
typography:
  nav-active:
    fontFamily: prompt
    fontSize: 17.5px
    fontWeight: 800
    lineHeight: 31.5px
    textTransform: uppercase
  heading:
    fontFamily: prompt, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 42px
  body:
    fontFamily: prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.5px
  nav:
    fontFamily: prompt
    fontSize: 24px
    fontWeight: 700
    lineHeight: 43.2px
    textTransform: uppercase
  link:
    fontFamily: prompt
    fontSize: 18px
    fontWeight: 300
    lineHeight: 32.4px
rounded:
  xs: 15px
  pill: 9999px
spacing:
  s1: 3.5px
  s2: 4.38px
  s3: 7px
  s4: 7.88px
  s5: 10px
  s6: 10.5px
  s7: 14px
  s8: 15px
  s9: 17.5px
  s10: 28px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-active}"
    padding: 14px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 4.375px 0px
  card:
    textColor: "{colors.ink-black}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 7px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px
  footer:
    textColor: "{colors.primary}"
    padding: 28px 0px 0px
    borderColor: "{colors.primary}"
---

# Kohkae — Design System

## Overview

Kohkae (โก๋แก่, written Koh-Kae on its packs) is a Thai snack brand best known for coated peanuts, operated by Mae Ruay Factory Company Limited according to the site's home page. Its company page states that the business was established in 1964, launched the iconic coated peanut in 1976, holds ISO 9001 certification from 2000, employs over 1,400 people and works under the motto "Excellence". The website is an online store as much as a corporate page: a promotional bar offers free shipping nationwide on orders of 500 baht or more, with ordering available 24/7, delivery in 2 to 5 days and a 7-day exchange guarantee.

The measured home page is pure brand red. A saturated red header carries the cartoon wordmark, search and basket icons, and a centered row of Thai navigation links with the active item shown as a white pill. Under it, a large campaign carousel presents a new Choco Ball snack with the mascot, "พี่โก๋" (Big Brother Kohkae), a cheerful cartoon figure with spiky black hair, round sunglasses and a white karate-style outfit with a red belt. Further down there are rounded promo tiles (red with a cartoon girl, yellow and red "Are you ready to fun?" banner), a "recommended products" section headed by a mascot head icon, and more campaign banners. A cookie consent banner sits over the lower hero in the capture; it is a consent control and not part of the brand UI.

## Colors

Red is the brand. `{colors.primary}` (#e20d17) is the measured main brand red used on the header, banners and link and footer accents; `{colors.ink-active}` (#ca0c15), a slightly darker red, is the active navigation label on the white pill. The page canvas is `{colors.canvas}` (#ffffff), with two soft gray surfaces: `{colors.surface-2}` (#f1f1f1) and `{colors.surface-3}` (#f8f8f8). Body text is `{colors.ink}` (#4d4d4d), a mid-dark gray that is the most-read color, and `{colors.ink-black}` (#000000) is used for product names and card text.

Yellow, green, pink and other bright colors appear in promotional artwork (the yellow of the "Are you ready to fun?" banner, product packaging in green and blue) and are not flat UI colors in the extraction. Keep the interface in red, white and gray and let the artwork introduce other hues.

## Typography

One family, Prompt, set in lowercase as `prompt` in the CSS, carries Thai and Latin text, loaded as a webfont. The measured styles are `{typography.heading}` at 28px, weight 700 on a 42px line for section headings such as "สินค้าแนะนำ" (recommended products), `{typography.body}` at 14px weight 400 on 17.5px, `{typography.link}` at 18px weight 300 on 32.4px, and `{typography.nav}` at 24px weight 700 uppercase on 43.2px. The extractor's top heading candidate was actually the active navigation item, so that style is stored as `{typography.nav-active}`: 17.5px, weight 800, uppercase, on a 31.5px line. Weight 800 and 700 are frequent for navigation and product titles, and weight 400 for prices and descriptions.

Pack and campaign lettering (the cartoon wordmark, "Choco Ball" lockups, "ARE YOU READY TO FUN?") is artwork, not interface type.

Font substitutes: Prompt is delivered with the site as a webfont, so none is required. A Thai-capable sans fallback should be used if it fails, with weights 700 and 800 preserved for navigation.

## Layout

The top of the page has three layers: a thin red utility bar (free-shipping message at left, login and sign-up and language flag at right), the logo row with search and cart, and the navigation row. Content sits in a centered container with rounded banner blocks: a carousel, then a red promo tile on the left with an empty-state message ("not currently in promotion period"), a wide yellow-and-red banner, then a three-column product row with image, name, pack size and price in THB, then a mix of large and small campaign banners in two columns.

The spacing scale from the live CSS is 3.5px, 4.38px, 7px, 7.88px, 10px, 10.5px, 14px, 15px, 17.5px and 28px. The footer is padded 28px at the top with a red border color, and the nav container is padded 14px at the top.

## Elevation & Depth

Depth is soft and used on cards and banners. The measured card shadow is `rgba(0, 0, 0, 0.1) 0px 0px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px`, a diffuse two-layer shadow; a similar shadow appears on a few other tiles. The header is flat red with a subtle polka-dot texture in the artwork. Product packshots are placed on a white field with natural shadows, and campaign banners use overlapping product bags and the mascot to create depth.

## Shapes

The shape language is rounded and toy-like. The measured radii are `{rounded.xs}` (15px) for cards, banners and the active navigation pill, and `{rounded.pill}` for circular elements. Banners and promo tiles share the 15px corner so the page reads as a set of rounded stickers on a white sheet. Do not mix sharp corners with this system.

## Components

**Navigation.** `{components.nav}` and `{components.nav-link}`: Thai menu labels in Prompt bold, white on the red header, with the active item in a white pill with a dark-red label (`{colors.ink-active}`). The measured nav link style is 24px bold uppercase with 4.375px 0px padding.

**Card.** `{components.card}`: black text, 15px radius, 0px 0px 7px padding and the diffuse shadow above; used for product tiles and promo blocks.

**Link.** `{components.link}`: red `{colors.primary}` 18px light text.

**Footer.** `{components.footer}`: red text with a red border color and 28px top padding.

There is no filled button detected by the extractor; the cookie consent "accept" and close controls are not brand components and were excluded. Prices are shown as small bold text such as "48 THB" under the product name and pack size.

## Design System Architecture

No public design system, token package or brand guideline was found: the pages opened (https://www.kohkae.com/ and https://www.kohkae.com/about) are a store and a company page, so there is no official public system to cite. The de-facto system is inferred from the shipped CSS: Bootstrap-style root variables (`--primary` #007bff, `--breakpoint-md` 768px), CKEditor highlight variables showing content authored in a rich-text editor, Swiper variables for carousels, and Font Awesome 5 Free icons. The Bootstrap blue is a framework default; the brand red #e20d17 is applied through component rules. Brand consistency is delivered by artwork: the red header, the mascot, polka-dot backgrounds and rounded promo banners recur across the site.

## Do's and Don'ts

- Do use red #e20d17 for the header, links and accents, on a white canvas.
- Do use Prompt at weights 700 and 800 for navigation and headings.
- Do round banners and cards at 15px and show the active navigation item as a white pill.
- Do keep gray body text at #4d4d4d.
- Don't use the Bootstrap default blue (#007bff) as a brand color.
- Don't document the cookie banner, close buttons or consent controls as brand UI.
- Don't use sharp corners on banners.
- Don't replace the mascot-led artwork with generic stock photography.

## Responsive Behavior

The extraction recorded the desktop layout only for this page; no narrow-viewport type sizes were captured, so mobile sizes should be verified before reuse. The CSS root variables follow the Bootstrap breakpoint set (`--breakpoint-md` is 768px). The 24px uppercase nav-link style was measured on one nav element and not confirmed against the visible desktop menu row, so check it before applying it. Banners keep their 15px radius and promo copy remains short and in Thai at every width.

## Iteration Guide

1. Set the header in #e20d17 with a white pill for the active page and #ca0c15 label text.
2. Use Prompt: 28px bold for section headings, 14px regular for body, 18px light for links.
3. Round every banner and card at 15px; add the two-layer diffuse shadow to product cards.
4. Keep the canvas white, with #f1f1f1 and #f8f8f8 for secondary surfaces.
5. Let the mascot, packaging and campaign art carry additional color; keep prices small and bold in THB.
6. Check new colors against the measured list: #e20d17, #ca0c15, #ffffff, #f1f1f1, #f8f8f8, #4d4d4d, #000000.
