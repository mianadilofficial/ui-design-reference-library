---
version: alpha
name: Tao Kae Noi
category: "Thai Brands"
description: "Tao Kae Noi global site: a loud seaweed-snack brand page built on flat red (#ea212c) bands with scalloped white wave dividers, a yellow (#fdc53e) pill CTA, black Montserrat 900 uppercase headings at 48px, and product-pack photography."

colors:
  canvas: "#ffffff"
  brand-red: "#ea212c"
  ink: "#000000"
  primary: "#fdc53e"
  on-primary: "#000000"
  ink-heading: "#231f20"
typography:
  display:
    fontFamily: >-
      Montserrat, Prompt, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 900
    lineHeight: 48px
    textTransform: uppercase
  display-mobile:
    fontFamily: >-
      Montserrat, Prompt, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 30px
    fontWeight: 900
    lineHeight: 36px
    textTransform: uppercase
  subheading:
    fontFamily: >-
      Montserrat, Prompt, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
  body:
    fontFamily: >-
      Montserrat, Prompt, ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 12px
  md: 16px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 15px
  s4: 16px
  s5: 19.2px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
---

# Tao Kae Noi

## Overview
The measured site is the Thai-language entry of the global site at https://th.taokaenoiglobal.com/, titled Taokaenoi Global and stylised on the page as "Tao Kae Noi". The company page at https://th.taokaenoiglobal.com/about-us describes Taokaenoi as Thailand's leading seaweed snack manufacturer, founded in 2004, and the footer carries a "©2026 Taokaenoi Food & Marketing PCL" notice. The design is a retail snack-brand site, not a corporate-report layout: it is a stack of full-width colour bands (red, white, red) separated by hand-drawn wave edges, with seaweed-leaf line illustrations floating at the margins and a mascot character on the packs.

The capture shows a navigation bar with the logo and a yellow "SHOP ONLINE"-style pill at the top, then a hero, a red "NEW PRODUCTS" band with a carousel of five packs (Crispy Popcorn Cheese, Roasted Kimchi, Season Layered Kimchi, and similar), a white "ALL PRODUCTS" band with a black rotated "SEAWEED" tag and three categories (Roasted, Crispy, Grill), and a red "LIFESTYLE" band with video-still cards of people eating the snack. A dismissible modal notice sat over the hero during capture; it is a site-state overlay and is not part of the visual system described here.

The voice is short, uppercase and product-forward. Headings are two words ("NEW PRODUCTS", "ALL PRODUCTS", "LIFESTYLE"), pack labels are uppercase flavour names, and the main call to action is a single "VIEW PRODUCT" pill.

## Colors
The palette is three flat colours plus black. Brand red is `brand-red` (#ea212c); it is the largest background area measured and fills the new-products and lifestyle bands. White (`canvas`, #ffffff) is the page background between red bands and the card/product-grid ground. Yellow (`primary`, #fdc53e) is reserved for pills: the "VIEW PRODUCT" CTA, the newsletter subscribe control and the "SEE MORE" link share this fill with black text (`on-primary`, #000000). Text is pure black (`ink`, #000000) in most places, with a warm near-black (`ink-heading`, #231f20) measured on the section headings; the footer and nav copy is white over dark or red areas.

There are no gradients in the measured colours; depth comes from the wave-shaped edges and pack photography rather than tints. Do not introduce a second accent: the identity is red, yellow, black and white only.

## Typography
All measured text is Montserrat (loaded weights 300, 400, 700 and 900), with Prompt listed second in the stack for Thai glyphs, followed by the system sans stack. Display headings are Montserrat 900 uppercase at 48px with a 48px line height on desktop (`typography.display`) and 30px/36px on a 390px viewport (`display-mobile`). Subheadings are 16px/24px weight 400 uppercase. Body copy and pack labels are 16px/24px weight 700 uppercase (`typography.body`), which means even running text is bold and capitalised, a deliberate shouty snack-aisle voice. A Courier New face appears on a small amount of text (the black rotated category tag) and is not part of the main scale.

Font substitutes: Montserrat and Prompt are Google Fonts families and need no substitute. If a build cannot load them, use a heavy geometric sans (system-ui at weight 800 to 900) for display and keep uppercase.

## Layout
Sections are full-bleed horizontal bands, each roughly one screen tall, with content centred in a single column. Spacing tokens measured on the page are 8, 12, 15, 16, 19.2, 20, 24, 32, 48 and 80px; use `s9` (48px) and `s10` (80px) for vertical rhythm between a heading and its carousel or grid, and 12px/24px as the CTA padding. Product carousels sit on a five-up row with round dark arrow buttons at the sides; the all-products grid is a short centred row of three. Seaweed-leaf illustrations are placed at the far left and right edges of bands to frame the centred content.

## Elevation & Depth
The system is essentially flat. The only measured shadows are the soft two-layer Tailwind-style shadow on the link pill (0 4px 6px -1px and 0 2px 4px -2px at 10% black) and a heavy ring-style shadow on one card element whose role was not confirmed, so it is left out of the tokens. Separation between sections is done with the scalloped wave edge where a red band meets white, not with drop shadows.

## Shapes
Pills dominate: the primary button uses `rounded.pill` (9999px). Content tiles use smaller radii of 6px (`xs`), 12px (`sm`) and 16px (`md`), measured on cards and video thumbnails. The wave dividers and rotated tag are illustrative shapes rather than component radii.

## Components
**Primary button** (`button-primary`): yellow #fdc53e fill, black text, Montserrat 700 uppercase 16px/24px, 12px 24px padding, 48px high, fully rounded. It carries labels such as "VIEW PRODUCT". The same yellow pill is reused for the newsletter control and "SEE MORE", so there is only one button style.

**Carousel arrows**: small dark circular buttons at left and right of product rows; they are navigation controls, not CTAs.

**Product tile**: pack image above an uppercase flavour name, no border, on red or white.

**Category tag**: a black, slightly rotated label with white Courier-style text ("SEAWEED") that introduces the product grid.

**Navigation**: logo at left, uppercase links (VIEW PRODUCTS, WHAT'S NEW, TKN MENU, ABOUT US, INVESTOR, CONTACT) and language/shop controls at right.

**Footer**: a "CONNECT WITH TAO KAE NOI" heading followed by uppercase social links (Facebook, Instagram, Line, Twitter, TikTok) in white.

## Design System Architecture
No official public design system or brand-guideline page was found on the opened pages. The de-facto system is a WordPress site (the shipped CSS exposes `--wp--preset--*` variables and wp-content upload paths such as /wp-content/uploads/2025/10/) styled with Tailwind utility classes (`--tw-ring-*` custom properties are present). Tokens here therefore come from computed values rather than a published token file. Source pages opened: https://th.taokaenoiglobal.com/ and https://th.taokaenoiglobal.com/about-us.

## Do's and Don'ts
- Do alternate red and white bands and finish each red band with a wave edge.
- Do keep headings uppercase Montserrat 900 and body copy uppercase.
- Do use the yellow pill for the single primary action per band.
- Don't add gradients, blue, or thin light-weight display type.
- Don't add heavy ring shadows; the page is otherwise flat.
- Don't use the round carousel arrows or any floating control as the primary CTA.
- Don't set long paragraphs in all caps; the brand uses uppercase for labels and short lines only.

## Responsive Behavior
Display type drops from 48px/48px to 30px/36px at a 390px viewport. Pill buttons keep their 48px height and 12px 24px padding at all sizes so the tap target stays comfortable. The illustrated leaf decorations sit at the edges and can be cropped or hidden on narrow screens without affecting content.

## Iteration Guide
1. Start every new page from a red or white full-width band and set a two-word uppercase heading in Montserrat 900.
2. Add exactly one yellow #fdc53e pill with black bold uppercase text per section.
3. Place product packs on flat colour with no shadow; add leaf illustrations at the margins only if space allows.
4. Close a red band with the white wave divider before the next white band.
5. For Thai copy, rely on Prompt in the stack and keep the same weights; do not change sizes without re-measuring on https://th.taokaenoiglobal.com/.
6. Verify any new colour against the four-colour palette before use; if it is not red, yellow, black, white or the #231f20 heading black, leave it out.
