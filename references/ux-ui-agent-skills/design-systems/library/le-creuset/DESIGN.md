---
version: alpha
name: Le Creuset
category: "Home & Furniture"
description: "Le Creuset US home page (lecreuset.com), measured — white #ffffff canvas, black #000000 text, square grey #656565 uppercase BUY NOW buttons that hover to #f8f8f8, Taviraj 48px/300 serif display over Nunito Sans 16px/300 body, seasonal #bb480b promo band, navy #051426 feature panel, 0px corners throughout."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#656565"
  on-primary: "#ffffff"
  promo-orange: "#bb480b"
  surface-light: "#f8f8f8"
  navy-panel: "#051426"
  ink-muted: "#767676"
  danger: "#7e010b"
  footer-border: "#e5e5e5"
  hover-border: "#979797"
  grey-border: "#a3a3a3"
typography:
  display:
    fontFamily: Taviraj, serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 48px
  announcement:
    fontFamily: "\"Nunito Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  heading-light:
    fontFamily: "\"Nunito Sans\", sans-serif"
    fontSize: 40px
    fontWeight: 200
    lineHeight: 40px
  body:
    fontFamily: "\"Nunito Sans\""
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  input:
    fontFamily: "\"Nunito Sans\""
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
rounded:
  xs: 3px
  none: 0px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 13px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px 70px
    height: 42px
    borderColor: "{colors.primary}"
    textTransform: uppercase
  button-primary-hover:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hover-border}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px 70px
    height: 42px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  skip-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 24px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 6px 32px 6px 12px
    height: 39px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 39px 0px 20px
    borderColor: "{colors.footer-border}"
---

# Le Creuset

## Overview

This file describes the Le Creuset US home page at `https://www.lecreuset.com/` (title: "Le Creuset Home | Cookware, Bakeware, Pots, Pans, Skillet, Kitchen & Bar Tools | Le Creuset® Official Site"), measured at 1,280px and 390px. Before measuring, the extractor hid a OneTrust cookie banner and a newsletter pop-up with its scrim; neither is described here.

The page is a long, quiet catalogue — 12,113px tall on desktop — that lets the cookware's colour do the talking. A grey `#656565` announcement bar at the top ("FREE GIFT | FREE SHIPPING | DETAILS >") sits above a white header with a search field on the left, the Le Creuset logo centred and a single row of category links beneath. The hero is a large photograph of a pale blue Traditional Oval Dutch Oven on a kitchen counter with "NEW FOR AUTUMN" and the product name in a light serif at the top-left, a price line and a square grey BUY NOW button. The page then alternates editorial photo grids ("Made to Make — Thanksgiving traditions and delicious memories"), a full-width burnt-orange `#bb480b` "FALL COOKWARE EVENT" band with three product photos, more lifestyle grids ("Festive Finds for the Season Ahead"), a deep navy "Nuit" feature panel, a "Celebrating a Century of Legendary Design" section, and a "Discover Your Color" grid of round enamel-lid swatches (Cerise, Flame, Flamme Dorée, Marseille, Artichaut, Nectar, Agave, Sea Salt, Chambray and more) above a white footer.

Photography is warm and editorial — cast-iron pots in use on wooden tables, autumn produce, overhead shots of finished dishes. Labels are short, spaced-out capitals ("SAVE 20% ON", "SHOP NOW"), and headlines are light, wide serifs or extra-light sans.

## Colors

- **Canvas `#ffffff`** — the page body, header and footer.
- **Ink `#000000`** — the main text colour (2,579 characters) and all headlines on white.
- **Primary `#656565`** — the button fill and border for BUY NOW and SHOP ALL COLORS, and the announcement-bar background. It is a neutral grey, not a brand hue: the products supply the colour.
- **On-primary `#ffffff`** — button labels and announcement text.
- **Promo orange `#bb480b`** — the seasonal "FALL COOKWARE EVENT" band; by area it is the largest measured background (1,337 units).
- **Surface light `#f8f8f8`** — the soft grey section background and the button hover fill; declared as `--light`.
- **Navy panel `#051426`** — the dark "Nuit" feature panel (596 area units).
- **Ink muted `#767676`** — secondary small text.
- **Danger `#7e010b`** — a deep red declared as both `--danger` and `--red`; one character was measured in it.
- **Footer border `#e5e5e5`** (`--grey2`), **grey border `#a3a3a3`** (`--grey3`) and **hover border `#979797`** — the hairlines.

The shipped `:root` also contains Bootstrap 4's stock variables (`--gray-dark: #343a40`, `--cyan: #17a2b8`, `--pink: #e83e8c`, `--teal: #20c997`, `--yellow: #ffc107`); they are framework defaults, not brand colours, and are left out.

## Typography

Loaded fonts: **Nunito Sans** as a variable font (200–1000, upright and italic), **Taviraj** 200 and 300, and **Roboto** 200/300/400. Nunito Sans carries 2,860 characters; Taviraj 165.

- **Display — Taviraj 48px / 300 / 48px.** The hero product name and section titles such as "Made to Make" and "FALL COOKWARE EVENT". Taviraj is a Thai/Latin serif with a light, high-contrast look.
- **Heading light — Nunito Sans 40px / 200 / 40px.** Product feature titles like "5.25 qt. Signature Roaster".
- **Body — Nunito Sans 16px / 300 / 24px.** Paragraphs, links and button labels (buttons are uppercased).
- **Announcement — Nunito Sans 12px / 400 / 18px.** The top bar.
- **Input — Nunito Sans 14px / 300 / 21px.**

Other measured sizes: 32px (524 characters — secondary section titles), 20px, 12.8px, 36px, 24px, 14px and 13px. Weights are light throughout: 300 (2,505 characters), 200 (445) and only 75 characters at 400. Letter-spacing is applied to small caps-style labels: 12.8px and 20px text use 2px, 16px uses 2px or 1px, 14px uses 1px.

**Substitutes:** Nunito Sans and Taviraj are both Google Fonts.

## Layout

The extractor recorded these desktop bands: a 30px grey announcement bar, a 127px white header (13 visible links), a 600px hero image, a white editorial section (757–3,891px) in single and two-column grids, the 1,044px orange promo band with three columns, and a long white section with up to six columns (the colour swatch grid). The widest product grid holds three cards. Paddings cluster at 15px (97 elements) and 85px (19 — the generous side margins of editorial blocks); 30px gaps separate grid columns. Text blocks sit beside or beneath photographs rather than over them, except in the hero and the Nuit panel.

## Elevation & Depth

Almost flat. One shadow was measured: `rgba(0, 0, 0, 0.25) 0px 0px 6px 0px`, on a single element. Depth comes from full-bleed photography and from colour fields — the orange promo band, the navy panel, the `#f8f8f8` sections — not from layered cards.

## Shapes

Square. Buttons, inputs, images, bands and the footer all compute 0px. Only two rounded values were measured: 3px on one element and `0 10px 10px 0` on another. The circular swatches in "Discover Your Color" are photographs of round pot lids, not CSS circles.

## Components

- **Primary button** — `#656565` fill and `1px solid #656565` border, white uppercase Nunito Sans 16px/300 label, 42px tall, `8px 70px` padding (wide and short), 0px radius. Measured hover: fill `#f8f8f8`, text `#000000`, border `#979797`.
- **Secondary button** — identical styling, used for SHOP ALL COLORS.
- **Subscribe button** — in the footer: `#e5e5e5` fill, black 14px/300 uppercase label, `1px solid #656565` border, 40px tall, `12px 70px 10px` padding.
- **Search input** — white, Nunito Sans 14px/300, 39px tall, `6px 32px 6px 12px` padding (room for the icon on the right).
- **Skip link** — white, `16px 24px` padding, 56px tall, visible on focus.
- **Footer** — white with a `1px solid #e5e5e5` top border, `39px 0 20px` padding, uppercase 16px/300 column links at a 40px line height.
- **Product tile** — photo, then a spaced-caps eyebrow, a light 32–40px title, a price line and a small "BUY NOW >" text link.

## Design System Architecture

No public Le Creuset design system or brand-guideline site was opened: `https://www.lecreuset.com/our-story` returned an empty page to the fetcher. The shipped CSS is a Bootstrap 4 base (33 `:root` variables including `--breakpoint-md: 768px` and `--breakpoint-xl: 1280px`) with brand overrides: `--light: #f8f8f8`, `--grey2: #e5e5e5`, `--grey3: #a3a3a3`, `--green` and `--success: #005b40`, `--danger` and `--red: #7e010b`, `--dark: #0c0f0a`. The de-facto system is neutral chrome (black, white, `#656565`, `#f8f8f8`), two light typefaces and square geometry, with all saturated colour delegated to product photography and seasonal campaign bands.

## Do's and Don'ts

**Do**
- Use `#656565` square buttons with uppercase light labels and wide `70px` side padding.
- Pair Taviraj 48px/300 headlines with Nunito Sans 16px/300 body.
- Keep weights light (200–300) and space out small labels by 1–2px.
- Let photography and the enamel colours carry the palette.
- Reserve full-width colour bands for campaigns (orange event, navy feature).

**Don't**
- Don't round corners on buttons, cards or images.
- Don't use bold weights for headlines.
- Don't use Bootstrap's stock accent colours as brand colours.
- Don't add shadows to cards.

## Responsive Behavior

Measured at 390px: the announcement bar is 32px with 13px/400 text, and the header shrinks to 77px with a visible menu toggle labelled "Main menu" and 6 visible header links. The hero product name stays Taviraj 48px/300/48px, and the BUY NOW button keeps 42px height, `8px 70px` padding and 219px width. The extractor recorded single-column bands below the hero: a media band, a `#f8f8f8` editorial section (3,173px) with titles at 30px/200, 32px/300 and 24px/200, the orange promo band (2,177px) with its title at 32px/300, and a long white section with titles at 30px/200 and 24px/200. Mobile font sizes by frequency: 16px, 20px, 12px, 12.8px, 30px, 24px, 36px, 13px, 14px and 32px. Breakpoints declared in CSS: `--breakpoint-md: 768px`, `--breakpoint-xl: 1280px`. The product-grid column count at intermediate widths: not measured.

## Iteration Guide

1. Start with a white canvas, black Nunito Sans 16px/300 text and a 30px `#656565` announcement bar.
2. Build a white header with centred logo and one row of category links.
3. Open with a full-width product photograph and a Taviraj 48px/300 title.
4. Add square `#656565` BUY NOW buttons (42px, `8px 70px`) that hover to `#f8f8f8`.
5. Alternate editorial photo grids with full-width seasonal colour bands.
6. Use 2px-tracked small capitals for eyebrows and prices.
7. Close with a colour-swatch grid and a white footer with a `#e5e5e5` top border.
