---
version: alpha
name: Thailand Post Mart
category: "Thai Brands"
description: "Thailand Post Mart is the Thai-language e-commerce storefront of Thailand Post, built on a white page with a signature postal red #e00700, Noto Sans Thai type at 16px body and 80px red display headings, stamp-edged coloured badges, 25px pill category chips and dark charcoal header."
colors:
  canvas: "#ffffff"
  page-body: "#f1f1f1"
  ink: "#000000"
  primary: "#e00700"
  red-pure: "#ff0000"
  red-hover: "#ff4949"
  surface-grey: "#e9e9e9"
  ink-muted: "#6b7280"
  ink-soft: "#222222"
  ink-chip: "#666666"
  button-secondary-border: "#aaaaaa"
  text-input-text: "#212529"
  card-bg: "#e5e7eb"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 70px
    fontWeight: 300
    lineHeight: 70px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  heading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 80px
    fontWeight: 600
    lineHeight: 80px
  subheading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button-secondary:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 24px
  3xl: 25px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-secondary:
    textColor: "{colors.ink-chip}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.3xl}"
    padding: 6px 16px
    height: 38px
    borderColor: "{colors.button-secondary-border}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 38px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.25) 0px 8px 12px 0px
---

## Overview

The site, titled "ThailandPostMart ตัวท็อปใกล้ไกลส่งให้ถึงมือ" in its HTML title, is the marketplace run by บริษัท ไปรษณีย์ไทย จำกัด (Thailand Post Company Limited), according to the site's own footer text as read through the page fetch. It sells regional Thai food, handcrafted goods, postal merchandise and stamps. The measured homepage is Thai-first, with a language switcher at top right, and the whole identity is a conversation between postal heritage and a food-market storefront: a thin dark utility bar, a charcoal header with the logo, a category menu, a search field and account links, a full-width promotional banner styled like torn paper on graph paper, then a row of seven stamp-shaped category badges in orange, yellow, green, light blue, pink, blue and purple.

The colour system is a single postal red, `{colors.primary}`, used for headlines, the search button, discount ribbons and a long red route line that snakes across the page and ends in a ring, evoking a delivery path. Everything else is white, black text and grey. The multicolour stamp badges and promo tickets add pastel and saturated spot colours (orange #df7d42, yellow #dac961, green #1c8276, light blue #78c6e0, pink #ef60ad, blue #327eee, all measured background fills) but they are illustrations of stamps rather than part of the interface palette.

Voice is warm and promotional in Thai: category pills such as "ลูกชิ้นปลา" and "แหนมเมือง" are food names, discount tickets say "ลดสูงสุด 300฿", "70%", "80%". A numbered list (01 to 04) in oversized light red numerals gives four selling points of the shop's products.

The page rhythm is deliberately storytelling rather than catalogue-first: before any product grid, the visitor sees a campaign banner, a row of category badges, a search prompt written as an invitation ("ส่งต่อของดีจากท้องถิ่นทั่วไทย"), popular-search chips and promotional tickets. Photography is warm and food-forward, with close crops of plated dishes under a dark gradient, while the banner artwork uses a collage of stamps, handwritten script and paper textures that reinforce the postal identity.

## Colors

Measured area-weighted backgrounds: white `{colors.canvas}` dominates, followed by light grey `{colors.surface-grey}`, red `{colors.primary}`, and card grey `{colors.card-bg}`. Text by character count is black `{colors.ink}` first, then grey `{colors.ink-muted}`, white (on the dark header and red tickets), red, and near-black `{colors.ink-soft}`.

- **Postal red `{colors.primary}`**: headline colour for h1 and h2, search button fill, ticket fill. A purer `{colors.red-pure}` appears on a small number of elements.
- **Hover red `{colors.red-hover}`**: the site's `--bs-primary` custom property; header utility links change from white to this colour on hover (measured).
- **Black `{colors.ink}`** for body copy, **grey `{colors.ink-muted}`** for secondary copy, **`{colors.ink-chip}`** for chip labels.
- **Page tint `{colors.page-body}`**: body background value reported by the extractor; most visible areas are painted white by sections.
- **Borders**: chips use `{colors.button-secondary-border}`.

No browser-default link blues are brand colours. Bootstrap's palette variables (blue, purple, cyan) appear in the CSS because the site ships Bootstrap, but they are not used as brand colours.

## Typography

Noto Sans Thai carries nearly all text (9,561 characters on the page) with weights 300, 400, 500, 600 and 700 loaded; IBM Plex Sans Thai Looped (weights 500 and 700, 1,239 characters) is a second Thai face used for a minority of text such as headings in the banner area.

- **Display** (`{typography.display.fontSize}` / `{typography.display.lineHeight}`, weight `{typography.display.fontWeight}`): the light red numerals 01 to 04. Mobile version `{typography.display-mobile.fontSize}`.
- **Heading** (`{typography.heading.fontSize}`, weight `{typography.heading.fontWeight}`, red): the large "ตัวท็อป" section title.
- **Subheading** (`{typography.subheading.fontSize}` / `{typography.subheading.lineHeight}`): section lead-ins.
- **Body/button** (`{typography.button-secondary.fontSize}` / `{typography.button-secondary.lineHeight}`): the most frequent size, 16px, used for body text and chip labels.

Thai script needs generous line height; the measured ratios (24/16, 30/20) are 1.5. Latin fallback is a generic sans-serif. Noto Sans Thai is an open Google font, so no substitute is needed.

## Layout

The desktop capture is 1280px wide and 11,672px tall: a long vertical scroll made of independent bands. Full-bleed banner, centred badge row, a centred wide search field with chip rows beneath, three discount tickets in a row, a dashed divider, a two-by-two numbered grid left-aligned, the red route graphic, and a cream-tinted section holding a food-menu card carousel with one large and two smaller photo cards. Measured spacing steps run from `{spacing.s1}` to `{spacing.s10}` with 4, 6, 8, 10, 12 and 16px steps common (Bootstrap-style scale).

## Elevation & Depth

Cards carry a soft shadow measured as rgba(0, 0, 0, 0.25) 0px 8px 12px 0px, giving the food photo cards a lifted look; photo cards also darken toward the bottom with a gradient so white Thai titles remain legible. Elsewhere the page is flat. Bootstrap's `--bs-box-shadow` (0 0.5rem 1rem rgba(0,0,0,.15)) exists in the CSS but the card shadow above is the measured one.

## Shapes

The shape language mixes three ideas. Interface controls are rounded: category chips `{rounded.3xl}` (25px, nearly pill) with a 1px grey border, inputs `{rounded.sm}`, search field and cards `{rounded.2xl}`. Promotional elements imitate postage stamps with perforated or scalloped edges (hexagons, triangles, hearts, ticket shapes with dotted outlines) — these are artwork. Image cards use large radii (the card token is `{rounded.2xl}`).

## Components

- **Category chip** (`button-secondary`): transparent, 1px solid `{colors.button-secondary-border}`, text `{colors.ink-chip}`, 16px, padding 6px 16px, 38px tall, radius `{rounded.3xl}`.
- **Search field** (`text-input`): white, text `{colors.text-input-text}`, 16px, padding 6px 12px, 38px tall; a red square search button sits at its right end in the body section.
- **Menu card** (`card`): rounded `{rounded.2xl}`, image-led with a dark gradient and bold white title, shadow as above.
- **Header**: charcoal bar with logo, hamburger "รวมหมวดสินค้า", "เมนูตัวท็อป", "โปรโมชัน", search, cart, favourites, sign-up and login links; above it a dark utility strip with government goods, Stamp Market, seller contact and language.
- **Discount tickets**: coloured ticket shapes with a dotted border, a label, "ลด" and a large number. Chevron circle at right.

Cookie consent and language controls are chrome, not documented as brand UI.

## Design System Architecture

No public design system for Thailand Post Mart was found. The site is built on Bootstrap (its CSS exposes the full `--bs-*` variable set, e.g. `--bs-primary: #ff4949`, `--bs-border-radius-2xl: 2rem`) with a cookie-consent library's `--cc-*` variables and Swiper carousel assets. The de-facto system is therefore Bootstrap tokens overridden with a postal red, plus a Thai-language type stack of Noto Sans Thai and IBM Plex Sans Thai Looped. Source for identity: https://www.thailandpostmart.com/.

## Do's and Don'ts

- Do use postal red for headlines and the main search action.
- Do keep Thai text at a line-height ratio of about 1.5.
- Do use stamp-shaped coloured badges for categories.
- Do pair chips with a 1px grey border and a 25px radius.
- Don't use the stamp colours as UI fills for buttons or text.
- Don't set Thai headings in tight tracking.
- Don't mix red-pure and primary on the same element.
- Don't document popup controls as brand components.

## Responsive Behavior

Only two breakpoints were measured: 1280px desktop and 390px mobile. At mobile the display numerals shrink from `{typography.display.fontSize}` to `{typography.display-mobile.fontSize}`. Behaviour of the header, badge row and carousels at mobile width was not individually measured, so it is not stated here.

## Iteration Guide

1. Begin with white `{colors.canvas}` and black text at 16px Noto Sans Thai.
2. Use `{colors.primary}` for one headline and one action only.
3. Add chip rows with the measured border, radius and padding.
4. Add stamp-style badges as illustrations, not controls.
5. Put photo cards in a cream band with a gradient overlay.
6. Re-measure anything new with the extractor before adding tokens.
