---
version: alpha
name: SCG Express
category: "Thai Brands"
description: "SCG Express parcel-delivery site: SCG red #ed1c06 hero and tiles, teal #008c74 accent, db_helvethaica 700 uppercase 48px headings, 14px body, square color-block service tiles, pill tracking input with 9999px radius, grey #e6e7e8 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ed1c06"
  surface: "#e6e7e8"
  accent-teal: "#008c74"
  ink-muted: "#6f6f6f"
  hairline: "#dddddd"
typography:
  display:
    fontFamily: db_helvethaica
    fontSize: 48px
    fontWeight: 700
    lineHeight: 25px
    textTransform: uppercase
  display-mobile:
    fontFamily: db_helvethaica
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  subheading:
    fontFamily: db_helvethaica
    fontSize: 22px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: db_helvethaica
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: db_helvethaica
    fontSize: 15px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 10px
  md: 35px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12px
  s3: 15px
  s4: 20px
  s5: 22px
  s6: 25px
  s7: 28px
  s8: 30px
  s9: 35px
  s10: 75px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 10px 0px
    height: 40px
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
---

# SCG Express

## Overview
SCG Express (scgexpress.co.th/en), the parcel-delivery brand of SCG, presents a loud red-and-white service site measured at 1280px wide with a 3254px scroll height. The first screen is a full-bleed red hero (#ed1c06 family, graded darker toward the bottom) with a centered 48px bold uppercase headline, "DELIVER YOUR HAPPINESS", an illustrated courier in a grey mask holding a red SCG EXPRESS box, and a white pill-shaped tracking field ("Tracking No./ Order ID / Telephone No.") with a red arrow. The capture shows a slide carrying a Thai notice about delivery delays during COVID-19 in the hero. Below, a pass-through consent notice (PDPA text with red underlined links) runs across the page in the capture; it is a legal overlay, not brand UI. Next comes a 2x2 tile grid beside a promotional image for "SCG Express Club": tiles for Service Locations (teal #008c74), Parcel Register (white), SCG Express Club (white) and Agent Registration (red), each with a line icon at the top and an uppercase label plus a diagonal arrow at the bottom. A deep maroon app-promotion band shows phones and App Store / Google Play badges ("DOWNLOAD HERE", "ONLY AT THAILAND"), and a split FAQ block (white questions left, red answer panel right) closes the page before a light grey footer.

Voice and art direction: copy mixes Thai and English. Labels are English and uppercase, promotional lines are Thai ("ช้อปง่าย จ่ายสะดวก กับสินค้าและคูปอง"), and FAQ questions are conversational English sentences ("How does SCG EXPRESS charge for service?"). Illustration is flat and friendly for the courier character, while the Club promotion uses studio photography of a smiling woman with branded tote bags, a black cat mascot plush and 2022 coupon cards. The overall density is medium: big color blocks with little text, then a long, text-light FAQ.

## Colors
- Canvas: #ffffff. Surface grey #e6e7e8 is the footer and the largest non-white area (weight 849), ahead of the red areas (#ed1c06, weight 613) and teal #008c74 (weight 102).
- Primary: #ed1c06, SCG Express red, used for the hero, the Agent Registration tile, FAQ answer panel, links and arrows. Red is also the text color on 114 characters.
- Accent teal: #008c74, the Service Locations tile. It is measured as a background area, so it is retained although the generator did not name it.
- Ink: #000000 (1332 characters), muted ink #6f6f6f for placeholder text, hairline #dddddd for dividers.
- White text (#ffffff, 277 characters) sits on red, teal and maroon bands.
WordPress and Swiper default variables are present in the root (for example `--wp-admin-theme-color: #007cba`, `--swiper-theme-color: #007aff`); these are framework defaults and not brand colors.

## Typography
The measured page uses a single family, db_helvethaica, at 400 and 700, on every one of 1761 counted characters, with an icomoon icon font for the line icons. DB Helvethaica is a Thai/Latin typeface; the shipped stack records no fallback, so a Helvetica-like sans with Thai coverage is the nearest stand-in.
- Display: 48px, weight 700, uppercase, measured line height 25px (the h1 box is that height in the extraction; use it with care). On the 390px mobile pass: 30px, line height 36px, uppercase.
- Subheading: 22px, weight 700, line height 25px.
- Body: 14px, weight 400, line height 20px. Most characters on the page are 15px (559), 16px (497) and 14px (352), then 12px (190) and 18px (114).
- Input: 15px, weight 400.
Navigation and tile labels are uppercase and short ("SERVICE LOCATIONS", "PARCEL REGISTER", "AGENT REGISTRATION").

## Layout
Content runs in full-bleed bands, each a distinct color block: red hero, tile grid, maroon app band, split FAQ, grey footer. The tile grid is two columns by two rows of equal square-ish cells beside a promotional visual, so the row reads as a four-quadrant dashboard. The FAQ block divides the viewport in half, a white list on the left separated by hairline rules and a solid red panel on the right with a bulleted service list (Normal Parcel, Chilled & Frozen Parcel, Cash on Delivery (COD), Over-Weight Over-Size). Spacing values measured: 10px, 12px, 15px, 20px, 22px, 25px, 28px, 30px, 35px and 75px. The footer measures 791px tall on a #e6e7e8 background.

## Elevation & Depth
Three box shadows were recorded: `rgba(0,0,0,0.32) 0 4px 9px 0` (weight 3), and two 5px-blur glows, `rgb(85,85,85) 0 0 5px 0` and `rgb(128,128,128) 0 0 5px 0`. Otherwise depth comes from solid color fields and a darker red gradient on the hero. The hover capture recorded for the Parcel Register tile showed no change in shadow (box-shadow none before and after in the recorded sample).

## Shapes
Measured radii: 10px (weight 3), 35px (1), 2px (1), 100% (1) and a pill value of 9999px in the token set. The tracking input in the hero is a pill; the color tiles are square-cornered (0px). Rounded shapes are reserved for inputs, badges and small controls; blocks stay rectangular.

## Components
- **Tracking field**: white pill, 40px-high text input at 15px with 10px 0 padding, muted placeholder (#6f6f6f), red arrow icon at the right.
- **Service tile**: solid color (teal, white or red), line icon top-left, uppercase 16px label and diagonal arrow at bottom, no radius.
- **Links**: red (#ed1c06) at 14px, underlined in the consent notice.
- **FAQ list**: right-aligned question rows separated by #dddddd hairlines; the active row is red with an arrow.
- **Store badges**: black App Store and Google Play badges on the maroon band.
- **Footer**: #e6e7e8 background with black uppercase link columns (Pricing Calculation, Pick Up Service, and others).
No primary filled button was detected by the extractor, so none is declared as a token.

## Design System Architecture
No public design-system or brand-guideline link appeared on the home page; the page was scanned for brand, press and design-system links and only app-store and home links were found. The de-facto system is a WordPress theme (WordPress preset variables such as `--wp--preset--font-size--normal: 16px` and `--wp--preset--color--black: #000000` are present), Swiper for carousels, an icomoon icon font, and the db_helvethaica webfont. Brand color is applied in theme CSS rather than exposed as named variables.

## Do's and Don'ts
All items below come from the measured values and the capture.
- Do use #ed1c06 as the dominant color for hero, key tiles and links.
- Do pair red with white and one teal accent (#008c74) for secondary services.
- Do keep headings uppercase and bold in db_helvethaica.
- Don't use the WordPress or Swiper default blues (#007cba, #007aff) in designs.
- Don't copy the consent bar or its red underlined links as brand components.
- Don't add radii to the service tiles; they are square.

## Responsive Behavior
Only the 390px mobile pass was measured: the h1 changes to 30px with a 36px line height and a 72px high box, still uppercase and bold. Tile-grid reflow, nav collapse and other breakpoints were not measured.

## Iteration Guide
1. Set canvas #ffffff, ink #000000, primary #ed1c06, surface #e6e7e8, accent #008c74.
2. Use db_helvethaica (or a Thai-capable Helvetica-like sans) at 700 uppercase for display.
3. Build the tile grid of four square color blocks with icon, label and arrow.
4. Add the pill tracking input in the hero.
5. Run `node web/scripts/verify-designs.mjs --slug=scg-express`.
Not measured: hover states beyond the one recorded sample, dark mode, motion.
