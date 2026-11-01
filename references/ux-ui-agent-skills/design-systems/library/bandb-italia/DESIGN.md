---
version: alpha
name: B&B Italia
category: "Home & Furniture"
description: "B&B Italia's US site (bebitalia.com/en-us), an Italian luxury-furniture brand: a cool #f3f5f5 canvas, #505759 slate ink, one brick-red #b83c3c rectangular button at 50px high, Helvetica Neue LT in tracked 12px and 14px capitals, a translucent #000000cc header and full-bleed room photography."
colors:
  canvas: "#f3f5f5"
  surface-white: "#ffffff"
  surface-grey: "#6e7678"
  ink: "#505759"
  primary: "#b83c3c"
  on-primary: "#ffffff"
  ink-on-image: "#ecf0f1"
  black: "#000000"
  nav-overlay: "#000000cc"
  border-dark: "#3c3c3b"
typography:
  display:
    fontFamily: "\"Helvetica Neue LT Roman\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.2px
  hero-title:
    fontFamily: "\"Helvetica Neue LT bold\""
    fontSize: 34px
    fontWeight: 700
    lineHeight: 43px
  heading:
    fontFamily: "\"Helvetica Neue LT bold\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "\"Helvetica Neue LT Bold\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17px
    letterSpacing: 1px
    textTransform: uppercase
  button:
    fontFamily: "\"Helvetica Neue LT Roman\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 1px
    textTransform: uppercase
  nav:
    fontFamily: "\"Helvetica Neue LT Roman\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 3.5px
  md: 40px
  none: 0px
spacing:
  s1: 5px
  s2: 7px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 17px
  s7: 20px
  s8: 30px
  s9: 35px
  s10: 36px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px 53px 16px
    height: 50px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px 35px
    height: 50px
  button-outline:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 17px 35px
    height: 50px
    borderColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.nav-overlay}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 0px 54px
    height: 100px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 84px
    height: 475px
---

## Overview

B&B Italia is an Italian maker of contemporary furniture, and its US storefront at bebitalia.com/en-us presents itself as a gallery rather than a shop. The footer line "© 2026 B&B ITALIA SPA" and the sister-brand row (Maxalto, Azucena, Arclinea) place it in a small group of Italian design brands. The home page is almost entirely photography of rooms, with typography reduced to tracked capitals and a single red action color.

The measured page opens with a 100px translucent black header (`#000000cc`). Inside it sit the B&B ITALIA wordmark logo, uppercase white navigation (ABOUT, PRODUCTS, BE INSPIRED, CONTRACT), a red "A&D AREA" button, and search and store-locator icons. Beneath it a full-bleed hero carousel rotates campaign slides ("The Outdoor Collection 2026", "Salone del Mobile 2026", "Before & Beyond"), each with a white outlined "DISCOVER MORE" button. A grey strip with "SUBSCRIBE TO OUR NEWSLETTER" and a chevron closes the hero.

Next on a pale #f3f5f5 field are two tall portrait photographs side by side, "Indoor" (a dark room with a sculptural white lounge) and "Outdoor" (a terrace with a sofa), each with a white title and a tracked-capital link "DISCOVER INDOOR PRODUCTS" or "DISCOVER OUTDOOR PRODUCTS" followed by a short horizontal rule. A "DESIGN SERVICE" band follows on near-white: a small tracked label, the 14px question heading "Ready to Redefine the Way You Live?", a paragraph set in uppercase with 1px letter spacing, a red "BOOK AN APPOINTMENT" button, and a composite of laptop, tablet and phone screenshots. A wide photographic "PROJECTS" band ("Explore our Contract services" with an outlined "CLICK HERE" button) leads into the slate-grey newsletter band ("Subscribe to our newsletter", "Sign up for email updates on the latest B&B Italia products, news and videos", red "SUBSCRIBE NOW") and the footer.

The voice is formal and short. Calls to action are imperative capitals ("DISCOVER MORE", "BOOK AN APPOINTMENT", "SUBSCRIBE NOW"), copy is declarative and service-oriented, and the brand is addressed as an institution ("our exclusive design team"). A country/region dialog ("For the optimum experience please confirm your country/region", with a red "UNITED STATES" button) and a promo popup appeared over the capture; they are overlays, not brand components, and are not documented.

## Colors

Cool greys with one warm red. The photography supplies the warmth.

- **canvas #f3f5f5** — the page background behind the Indoor and Outdoor tiles (a faintly blue-grey off-white).
- **surface-white #ffffff** — the near-white Design Service band and the dialog fills (291 area units).
- **surface-grey #6e7678** — the newsletter strip and footer fill (608 area units); footer text on it is #f3f5f5 (103 characters) with secondary footer text in #6e7678-tone and the legal row.
- **ink #505759** — the body and heading text color on light surfaces (365 characters) and also a background in 278 area units, which makes the slate a structural color, not just a text color.
- **primary #b83c3c / on-primary #ffffff** — the brick red used for all filled buttons ("A&D AREA", "BOOK AN APPOINTMENT", "SUBSCRIBE NOW"); white text on it.
- **ink-on-image #ecf0f1** — hero titles over photography (143 characters).
- **black #000000** — 5 characters of text; **nav-overlay #000000cc** — the header fill, an 80% black over the hero.
- **border-dark #3c3c3b** — a single measured border color.

White text is the most-read color overall (587 characters) because the header, hero, tile titles and outlined buttons sit on photographs or dark fields. The page also measured a #0000001a full-viewport tint (625 area units) that belongs to the country-selection dialog's backdrop and is excluded. The shipped CSS lists a Magento blue (#1979c3, #006bb4) and standard greys (#333333, #666666, #999999) from the platform's base styles, none of which appears as brand color on the home page.

## Typography

The site uses **Helvetica Neue LT**, self-hosted in woff2 and woff as separate families: Thin, Light, Roman and Bold (declared in the theme's `styles-m.min.css`). The measured stacks fall back to `Helvetica, Arial, sans-serif`. The stylesheet also declares "Orpheus Pro" (Regular, Italic and Medium) and "Maison Neue"; no text in the measured home page uses them. The brand's fonts are licensed webfonts, so the Helvetica and Arial fallbacks in the stacks are the site's own substitutes.

- **display — Helvetica Neue LT Roman, 32px / 35.2px, weight 700.** The hero title ("Before & Beyond"), set in #ecf0f1.
- **hero-title — Helvetica Neue LT bold, 34px / 43px, weight 700.** The campaign slide titles such as "The Outdoor Collection 2026" (measured in the earlier extraction pass at 34px, with a 36px line height at 390px).
- **heading — Helvetica Neue LT bold, 14px / 28px, weight 600.** Section labels ("DESIGN SERVICE").
- **body — Helvetica Neue LT Bold, 14px / 17px, 1px letter spacing, uppercase.** Descriptive paragraphs in the Design Service band; the weight is declared 400 on the Bold family.
- **button — Helvetica Neue LT Roman, 12px / 14px, weight 700, 1px letter spacing, uppercase.** All button labels.
- **nav — Helvetica Neue LT Roman, 14px / 20px.** Navigation links.

Sizes by character count are 14px (498), 12px (265), 13px (104), 32px (89), 28px (77), 16px (76), 40px (61) and 34px (54). Letter-spacing pairs measured are 14px/1px (400 characters), 12px/1px (162), 15px/1px (13) and 18px/1px (7). Weights are 400 (672), 700 (335) and 600 (267). Everything small is wide-tracked capitals.

## Layout

The desktop page measured 1280px wide and 3122px tall. The header is 100px tall with `0px 54px` side padding; the footer measures 475px tall with `0px 84px` side padding. Measured gaps are 20px (5), 40px (4) and 10px (1); paddings include 87px (14 elements), 84px (8), 17px (9), 35px (9), 20px (6), 12px (6), 10px (4) and 15px (2).

The page is a vertical sequence of full-width bands: hero carousel, newsletter strip, a two-column tile band on #f3f5f5, a white service band with a left text column and right device composite, a photographic projects band, then newsletter and footer. Tiles are portrait rectangles of equal size; the capture shows generous empty margin around them and between bands. Text blocks in the service band are left-aligned.

## Elevation & Depth

Flat. One box shadow was measured on the page: `rgba(0, 0, 0, 0.15) 0px 4px 16px 0px` (1 element, not mapped to a component). Depth comes from the translucent header over imagery, white titles and links placed over the darker lower areas of the Indoor and Outdoor photographs, and the change from near-white to slate grey at the page's end. Borders are minimal: 8 measured #ffffff borders on outlined buttons and one #3c3c3b.

## Shapes

Square, with three exceptions. Buttons, the header, the footer and tiles measure a 0px radius. The extraction records a 3px radius (4 elements), a 3.5px radius (1) and a 40px radius (1, the round icon button at the left of the hero). The mobile header measures a 5px radius. There are no pill buttons; the red buttons and outlined buttons are 50px-tall rectangles.

## Components

**Primary button.** Brick red (#b83c3c) fill, white (#ffffff) label, Helvetica Neue LT Roman 700 at 12px / 14px, 1px tracking, uppercase, radius 0px, padding `20px 53px 16px`, height 50px; "A&D AREA" measures 186px wide.

**Secondary button.** The same red fill and label style with padding `17px 35px`, height 50px ("BOOK AN APPOINTMENT", 237px wide); "SUBSCRIBE NOW" uses the same red.

**Outline button.** Transparent fill, 1px #ffffff border, white label, `17px 35px` padding, height 50px ("DISCOVER MORE", 187px wide), placed over photography.

**Header.** 100px, #000000cc, `0px 54px` padding; logo, four links, red button, search and pin icons.

**Tile.** Portrait photograph with a white title ("Indoor") and a tracked-capital link with a trailing rule; the title size was not mapped to a measured element.

**Newsletter strip.** Slate #6e7678 band with a bold heading, a line of copy and the red "SUBSCRIBE NOW" button at the right.

**Footer.** #6e7678 field (475px tall) with logo, four primary links, resource links (CATALOGUES, LIBRARY, DEALERS AREA), language selector ("Language: UNITED STATES – ENGLISH"), FAQ and contact items, sister-brand logos (Maxalto, Azucena, Arclinea), social icons (Instagram, Pinterest, Facebook, YouTube, LinkedIn) and a legal row.

Hover and focus states were not captured (`hover` is empty).

## Design System Architecture

No public design system or brand guideline is published for B&B Italia. The US home page https://www.bebitalia.com/en-us/ was opened; its header and footer link to About (History, Identity, Designers, Sustainability, Network), catalogue and library resources, and legal pages, with no brand-guideline, press-kit or design-system page.

The de-facto system is a Magento storefront with a custom theme: the page's stylesheet paths read `frontend/Jakala/BnB/en_US/css/styles-m.min.css` and `styles-l.min.css`, plus modules such as Mageplaza search and the Blackbird menu manager, and the page uses the `icons-blank-theme` and `luma-icons` font families from Magento's base theme. The theme CSS is compiled with literal values, not design-token variables (no root custom properties were measured). Breakpoints in `styles-m.min.css` include `max-width: 1024px` (88 rules), `max-width: 991px` (42), `min-width: 992px` (39), `max-width: 768px` (26), `max-width: 992px` (16) and `max-width: 1200px` (15). Font files are self-hosted woff2 and woff in the theme's `fonts/helvetica` and `fonts/orpheus` folders.

## Do's and Don'ts

- Do keep surfaces cool and quiet: #f3f5f5, #ffffff and slate #6e7678, with photography doing the color work.
- Do use one action color, brick red #b83c3c, with white capitals at 12px and 1px tracking.
- Do make buttons 50px-tall rectangles with 0px radius.
- Do set small copy in uppercase Helvetica Neue LT with 1px letter spacing.
- Do place white titles over the darker areas of room photography, and the header as 80% black.
- Don't add rounded buttons, shadows or gradients to interface chrome.
- Don't introduce accent colors; the only chroma is red.
- Don't bold body paragraphs beyond the measured 400 and 600 and 700 mix.
- Don't treat the country dialog, its tint or the promo popup as brand UI.

## Responsive Behavior

Measured at the 390px mobile pass: the hero title stays 32px / 35.2px weight 700 (360px wide), the campaign title is 34px with a 36px line height (300px wide), body paragraph text measures 16px / 26px in Helvetica Neue LT Roman with no uppercase transform (the desktop paragraph is uppercase), the red "BOOK AN APPOINTMENT" button measures 237px by 50px with `17px 35px` padding and 12px / 14px type, and the header measures 344px by 60px with a #00000099 fill, 14px / 20px links and a 5px radius. The most common mobile sizes are 16px (504 characters), 12px (236), 14px (163), 28px (138), 32px (89), 34px (54), 24px (27) and 15px (13).

The theme declares the breakpoints listed above (1024px, 991px, 992px, 768px, 1200px). How the tiles, bands and menu are rearranged below those widths was not measured, and no mobile capture image exists.

## Iteration Guide

1. Set the page on #f3f5f5 with #505759 text; use #6e7678 for the closing bands.
2. Use Helvetica Neue LT (Roman for UI, Bold for emphasis) with fallbacks `Helvetica, Arial, sans-serif`.
3. Make all small text uppercase with 1px tracking; 12px for buttons and 14px for nav and paragraphs.
4. Use #b83c3c rectangles, 50px tall, white label; outline variants with a 1px white border over photography.
5. Lay out full-bleed photographic bands and two equal portrait tiles; put titles in white at the bottom-left.
6. Re-measure hover, focus and mobile reflow before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=bandb-italia`.
