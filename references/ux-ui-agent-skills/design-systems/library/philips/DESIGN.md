---
version: alpha
name: Philips (United States)
category: "Healthcare & Wellness"
description: "Philips US home page (usa.philips.com): white canvas with #f6f8f9 product cards, #15191e text, Philips blue #0061c2 pill buttons and a #0b5ed7 top bar and footer, Neue Frutiger World at weights 350 and 700, a 36px hero title and 6px card corners."
colors:
  canvas: "#ffffff"
  page-largest: "#f6f8f9"
  ink: "#15191e"
  primary: "#0061c2"
  on-primary: "#ffffff"
  brand-bar: "#0b5ed7"
  ink-muted: "#566676"
  hairline: "#6b8094"
  primary-hover: "#0072db"
typography:
  display:
    fontFamily: neue-frutiger-world-w02, NeueFrutigerWorld, arial, helvetica, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: neue-frutiger-world-w02, NeueFrutigerWorld, arial, helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-0.5px"
  body:
    fontFamily: neue-frutiger-world-w02, NeueFrutigerWorld, arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
    letterSpacing: "-0.3px"
  button:
    fontFamily: neue-frutiger-world-w02, NeueFrutigerWorld, arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.3px"
rounded:
  xs: 2px
  sm: 6px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 11px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 11px 16px 11px 20px
    height: 48px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.brand-bar}"
    textColor: "{colors.canvas}"
---

## Overview

This is the United States home page of Philips, measured at https://www.usa.philips.com/ (title "Philips - United States | Philips", 7210px tall at 1280px wide). It is a combined consumer and professional-healthcare gateway. A thin blue top bar (`#0b5ed7`) carries the audience switch: Consumer products (bold, current), Professional healthcare, About us, B2B. Below it, a white header holds the spaced blue PHILIPS wordmark, "Products" and "Support" links, a wide pill search field (placeholder "What are you looking for?"), and round outlined account and cart buttons. A row of eight category icons with two-line labels follows: Personal care, Household products, Mother and child care, Health, Lighting, Sound and vision, Parts and accessories, Promotions, then a pale strip of three underlined service links ("Healthy lifestyles start here. Sign-up & save", "2 year warranty", "Expert tips and inspiration").

The hero is a full-bleed outdoor photograph of a smiling woman in a dry grass landscape with the title "Better care for more people" and a blue pill "Discover more", plus a slim pagination pill with a play button. The next section, "Personal health / Healthier living for you, your home and family", is a two-by-two grid of pale cards (Electric Toothbrushes, Electric Shavers, Lumea IPL, Baby bottles & nipples), each with a centred product photo on a clean ground and a round blue arrow button at the lower right. The "Professional healthcare" section switches to dark, image-backed tiles ("Patient monitoring", "Ultrasound") with centred white text. The footer is a tall blue block (736px) with white links.

## Colors

`canvas` is `#ffffff` and `page-largest` `#f6f8f9` is the pale card and strip fill (1040 area weight, the largest of any background). The blue `brand-bar` `#0b5ed7` (982 area weight) is the top bar and footer fill, while `primary` `#0061c2` is the button fill, with `primary-hover` `#0072db` measured on hover. `ink` is `#15191e` (1003 characters) for text on light grounds; white text (1732 characters) sits on the blue bars and on photographs; `ink-muted` `#566676` is secondary text; `hairline` `#6b8094` is a border colour used on the header search field and round buttons. The CSS exposes few variables (`--length`, and carousel variables `--swiper-theme-color: #007aff` and `--swiper-navigation-size: 44px` from a slider library; the `#007aff` value is a library default and not a Philips colour).

Use blue sparingly and consistently: actions and arrows are `#0061c2`, and the two large blue blocks are the bar and the footer. Everything else is white or very pale grey.

## Typography

The only family is Neue Frutiger World (loaded as `neue-frutiger-world-w02`, with Arial and Helvetica as fallbacks), a commercial typeface. It is loaded as a variable range, 350 to 400 for text and 700 to 900 for bold. Measured roles: `display` 36px/40px at weight 700 with -0.5px tracking (the hero title; 28px/32px on mobile), `body` 16px/24px at weight 350 with -0.3px tracking, `button` 16px at weight 700, card titles 24px bold, and smaller sizes 14px, 12px and 10px (category labels). By character count, 16px dominates (1731), followed by 36px (257), 14px (247), 24px (233), 10px (207) and 28px (154). The use of weight 350 for body copy gives a light, open feel against bold headings.

## Layout

A centred content column with equal side margins (about 32px, matching the `s10` spacing step) holds the category row, section titles and card grids. Section headers pair a small regular-weight eyebrow ("Personal health") with a larger bold heading. Product cards sit in a two-column grid with a 16px or 24px gap (the spacing scale contains 16, 20, 24 and 32px). The hero spans the full viewport width. The header search input is 48px tall with padding 11px 16px 11px 20px. Utility strips are pale full-width bands with centred, underlined links.

## Elevation & Depth

No box shadows are measured. Cards are flat `#f6f8f9` rectangles on white, product photos sit on near-white backgrounds, and the single measured border colours are `#6b8094` (3 elements), `#ffffff80` (2) and `#00438a1f` (1). Depth in the professional section is created by dark overlays on photographs rather than by elevation.

## Shapes

Three radii are measured: 2px (45 elements: links, nav items and small controls), 6px (24: cards) and 999px (29: buttons, the search field and round icon buttons). Product cards are 6px; every button is a full pill; text links carry a 2px radius for their focus box. Photographs in the hero are square-cornered.

## Components

**Primary button.** Blue `#0061c2` fill, white 16px bold text, pill radius, padding 12px 20px, height 48px; on hover the fill becomes `#0072db` while the white border and text stay.

**Round arrow button.** A circular blue button with a white arrow at the lower right of each product card.

**Search field.** 48px high pill with a 1px `#6b8094` border, 16px weight-350 placeholder and a magnifier icon at the right.

**Category icon row.** Eight outline icons above 12px to 14px labels, no fills, no borders.

**Product card.** `#f6f8f9`, 6px radius, a small regular eyebrow line, a bold 24px title, a centred product image, and the arrow button.

**Utility strip.** A pale full-width bar with three icon-plus-underlined-link items at 14px.

**Top bar and footer.** `#0b5ed7` with white text; the top bar uses 16px bold for the active audience and weight 350 for the others.

## Design System Architecture

No public Philips design-system or brand-guideline page was opened for this document, so there is no official token source to cite. The shipped CSS measured at the root exposes almost no custom properties (only a `--length: 8%` helper and the carousel library's `--swiper-*` variables), so the system lives in compiled component styles rather than in tokens. The de-facto system is: one type family (Neue Frutiger World) at two weight bands, one action colour (`#0061c2`), a small radius scale (2px, 6px, pill), a two-tone page surface (`#ffffff` and `#f6f8f9`) and one large blue block colour (`#0b5ed7`).

## Do's and Don'ts

- Do keep pages white and pale grey with blue used for actions and the two framing bars.
- Do set headings at weight 700 and body at 350 in Neue Frutiger World with slight negative tracking.
- Do use pill buttons at 48px high and 6px-radius flat product cards.
- Do show products on clean near-white backgrounds, and people in natural outdoor photography.
- Do write calm, benefit-led headings such as "Better care for more people".
- Don't use the library default blue `#007aff` or any non-Philips blue.
- Don't add drop shadows or gradients to cards.
- Don't mix the consumer and professional tones: consumer sections are light, professional tiles are dark image overlays.

## Responsive Behavior

The 390px mobile pass measured only type: the h1 becomes 28px/32px at weight 700, body text stays 16px/24px at 350, and the primary button stays 16px/24px at 700. Layout, navigation and grid changes at mobile width are not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff` with `ink` `#15191e` text and a `#0b5ed7` top bar.
2. Add the PHILIPS wordmark, a pill search field and an icon category row.
3. Make a full-bleed hero with a 36px bold title and one `#0061c2` pill button.
4. Fill sections with 6px-radius `#f6f8f9` cards, centred product photos and a round blue arrow.
5. Close with a `#0b5ed7` footer in white 16px links.
6. Verify with `node web/scripts/verify-designs.mjs --slug=philips`.
