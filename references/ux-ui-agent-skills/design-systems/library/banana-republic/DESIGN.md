---
version: alpha
name: Banana Republic
category: "Fashion & Apparel"
description: "Banana Republic's US storefront (Gap Inc.): a quiet editorial retail site on #ffffff and #f2f1ee with #000000 ink, BananaSerif light 42.6667px headlines over photography, Lynstone v1 uppercase 12px navigation, square white 56px buttons, no accent hue and no radius."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-footer: "#f2f1ee"
  hover-surface: "#ede8e0"
  surface-muted: "#e9e8e3"
  cream-3: "#f1eade"
  cream-4: "#f6f4eb"
  ink-secondary: "#5e5c5a"
typography:
  display:
    fontFamily: BananaSerif, "Times New Roman", serif
    fontSize: 42.6667px
    fontWeight: 300
    lineHeight: 42.6667px
    letterSpacing: 0.333333px
  display-mobile:
    fontFamily: BananaSerif, "Times New Roman", serif
    fontSize: 33.28px
    fontWeight: 300
    lineHeight: 35.36px
    letterSpacing: 0.52px
  body:
    fontFamily: BananaSerif, "Times New Roman", serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 19.6px
    letterSpacing: 0.333333px
  button:
    fontFamily: "\"Lynstone v1\""
    fontSize: 14px
    fontWeight: 350
    letterSpacing: 0.2px
  product-name-mobile:
    fontFamily: Lynstone
    fontSize: 12px
    fontWeight: 600
    lineHeight: 14.4px
  nav:
    fontFamily: "\"Lynstone v1\", sans-serif"
    fontSize: 12px
    fontWeight: 350
    letterSpacing: 0.2px
    textTransform: uppercase
  input:
    fontFamily: "\"Lynstone v1\""
    fontSize: 12.8px
    fontWeight: 350
    letterSpacing: 0.2px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 7.2px
  s6: 8px
  s7: 10px
  s8: 11.2px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 16px
    height: 56px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 16px
  brand-bar-link-hover:
    backgroundColor: "{colors.hover-surface}"
    textColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 15px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Banana Republic's storefront at bananarepublic.gap.com is a fashion retailer's site, and it is built like a magazine. Each measured capture is a stack of full-bleed campaign photographs, hand-set serif headlines laid over them, and small uppercase sans labels. The footer line "© 2026 Banana Republic, LLC", with links to "Gap Inc. Policies" and "About Gap Inc.", places the site inside the Gap Inc. family, and the top of every page carries a brand switcher: GAP, OLD NAVY, BANANA REPUBLIC (bold, the current brand) and ATHLETA.

From top to bottom the page reads as follows. A #f2f1ee utility strip holds the brand switcher, a centered promotion ("Extra 25% Off your first purchase with your new card at Banana Republic." with underlined "APPLY NOW" and "DETAILS"), and account and bag icons. Below it a white header carries the BANANA REPUBLIC serif wordmark, a row of spaced uppercase nav items (WOMEN, MEN, CASHMERE, PARTY, ARCHIVE, ACCESSORIES, SALE) and a search field with an underline and a magnifier icon. In one capture a taupe promotional band sat under the header ("The Fall Edit", "30% Off", two outlined SHOP buttons); in another it was absent.

The hero is a two-panel photograph spread. The headline captured on 2026-10-15 reads "Dress Code: Party" in white 42.6667px light serif, with the subhead "Sheer organza, crushed velvet, sequins — festive looks, whatever the occasion." and three white rectangular buttons: "WOMEN'S NEW ARRIVALS", "MEN'S NEW ARRIVALS" and "EXPLORE THE CAMPAIGN". The same URL measured on 2026-10-09 carried "October New Arrivals", so campaign copy changes between captures and the tokens describe the system, not one campaign.

Below the hero come four portrait category tiles with a serif-free uppercase label and two underlined text links each (for example "SWEATERS" with "SHOP WOMEN" and "SHOP MEN"; "DRESSES" with "SHOP NOW"), large occasion banners with serif titles ("Nights to Remember", "All Dressed Up", "Suit Season"), a "Just for You" personalization heading with the line "A personal curation of new arrivals we think you'll love." (its product row was empty in the capture), a gift-shop banner, and a beige footer with an email sign-up, a text sign-up and a cardmember offer. A privacy consent box covered the lower left of the capture; it is a consent control, not brand UI, and is not documented here.

The voice is polished and seasonal: short noun phrases, sentence-case serif headlines, tracked-out capitals for actions, and few exclamation marks.

## Colors

The brand uses neutrals. All chroma comes from the photographs.

- **canvas #ffffff** — page and header background.
- **ink #000000** — the most-read text color (674 characters in the latest pass; 1598 in the first), used for nav, labels, body text and button text. There is no soft ink in headings.
- **primary #ffffff / on-primary #000000** — the call-to-action treatment is a white box with black text, laid over imagery or on the beige footer. This is a judgement from the capture: no colored action fill exists in the measurement. The measured "SIGN UP" button, detected as the primary CTA in the 2026-10-09 pass, has a #ffffff fill and #000000 text.
- **surface-footer #f2f1ee** — the footer and the utility strip (`--color-brands-banana-brand-1`).
- **hover-surface #ede8e0** — the hover fill of the OLD NAVY, BANANA REPUBLIC and ATHLETA links in the brand switcher (`--color-brands-banana-brand-2`; measured as rgb(237, 232, 224)).
- **cream-3 #f1eade and cream-4 #f6f4eb** — the other two Banana Republic brand tones declared as root variables (`--color-brands-banana-brand-3`, `-4`); usage was not measured.
- **surface-muted #e9e8e3** — a measured background (82 area units) whose element was not identified.
- **ink-secondary #5e5c5a** — measured as text color (374 characters) in the first pass, equal to `--color-neutrals-800` (94 92 90).

A third text color, #00008b, was measured on the consent dialog's "Your Privacy Choices" and "Privacy Policy" links (34 characters). It belongs to the consent dialog and is not a brand color. The CSS also contains blue and red values (#0466ca, #1d63e6, #d00000, #bc0712 for errors and sale text) in the shared cross-brand variables; none appeared as visible brand color on the measured home page.

## Typography

Custom families are loaded (`loadedFonts` reports them): **BananaSerif** (300 and 400) for headlines and body copy, and **Lynstone v1** (350 and 600), with a plain **Lynstone** (400 and 600) and **Banana v1** (400) also loaded. The measured stacks supply their own fallbacks: `BananaSerif, "Times New Roman", serif` and `Lynstone, Helvetica, Arial, sans-serif`. Cross-brand variables also name "Lato v1", "Roboto Mono v1" and "SF Pro v1". The font files' licensing is not documented on the pages opened, so the site's fallback stacks are the only substitutes it states.

- **display — BananaSerif 300, 42.6667px / 42.6667px, tracking 0.333333px.** Hero titles ("Dress Code: Party", "October New Arrivals"). Light weight, set in white on photography. Line height equals font size.
- **display-mobile — BananaSerif 300, 33.28px / 35.36px, tracking 0.52px.** The same title in the 390px pass.
- **body — BananaSerif 300, 14px / 19.6px, tracking 0.333333px.** Hero subheads and banner copy in the serif.
- **button — Lynstone v1 350, 14px, tracking 0.2px.** Button labels.
- **product-name-mobile — Lynstone 600, 12px / 14.4px.** The plain Lynstone family (405 characters measured in total) as recorded in the mobile pass on a product-name paragraph ("Ultra High-Rise Modern Straight Italian Lightweight Wool Pan...").
- **nav — Lynstone v1 350, 12px, tracking 0.2px, uppercase.** Brand switcher and category navigation.
- **input — Lynstone v1 350, 12.8px, tracking 0.2px.** The search and sign-up fields.

Weights measured by character: 400 (563), 300 (332), 600 (154), 350 (53), 700 (33). The most common sizes are 13.12px (322, consent dialog), 12px (305), 14px (286), 16px (82), 42.6667px (46), 12.8px (43) and 20px (35). Size and tracking pairs measured include 12px/1px (139 characters), 12px/1.3px (62), 12.8px/2px (39) and 20px/0.5px (35), the wide-tracked uppercase labels and tile headings; which element carries which pair was not mapped.

## Layout

The desktop page is 1280px wide and 4740px tall in the latest pass. The measured structure is full-bleed. Hero photographs span the full width in two panels; the category row is four equal portrait photographs with outer margins; the occasion banners are two-panel full-bleed spreads (a photograph beside a photograph or a tiled detail grid). Text overlays sit at the lower-left of each photograph with white buttons beneath.

Measured gaps are 16px (12), 8px (8), 48px (6), 32px (6) and 4px (4); paddings are 24px (8), 35px (7), 80px (6), 16px (4), 2px (3) and 10px (2). The nav items carry `0px 16px` padding and are 46px tall in the strip (the `GAP` link measures 57px wide). The latest pass shows a 136px-tall header block on desktop and 152px at 390px.

## Elevation & Depth

Flat. The only box shadow measured on the page, `rgba(0, 0, 0, 0.2) 0px 0px 18px 0px`, belongs to the privacy consent dialog and is not a brand token. Hierarchy comes from photography, contrast between white boxes and images, thin underlines and the #f2f1ee footer field. No borders were recorded in the latest pass.

## Shapes

Everything is square. Buttons, nav items, inputs and the footer measure a 0px radius. The stylesheet lists other radii (4px, 2px, 6px, 24px, 9999px and 3px are the most frequent), and `--border-radius-050: 4px` is declared, but none was measured on a brand component on the home page; the 20px top-corner radius and 2.5px radius measured in the pass belong to the consent dialog. The tight, rectilinear shapes match the serif and photography: the CTA is a plain white rectangle.

## Components

**Primary button.** White (#ffffff) rectangle, black (#000000) label in Lynstone v1 350 at 14px with 0.2px tracking, padding `0px 16px`, height 56px, radius 0px; the footer "SIGN UP" button measured 88px wide. The hero and banner buttons ("SHOP WOMEN", "EXPLORE THE CAMPAIGN") are white rectangles with uppercase black labels in the capture; the first extraction pass measured the 56px and `0px 16px` values on the "SIGN UP" button.

**Navigation.** Uppercase Lynstone v1 350 at 12px, black on white; each item has `0px 16px` padding. Hover on the category buttons (WOMEN, MEN, CASHMERE, PARTY, ARCHIVE, ACCESSORIES) and SALE adds an underline and keeps the black color; hover on the brand switcher links (OLD NAVY, BANANA REPUBLIC, ATHLETA) fills the background with #ede8e0.

**Text links.** Underlined small uppercase links beneath each tile ("SHOP WOMEN", "SHOP MEN", "SHOP NOW"), and "APPLY NOW" and "DETAILS" in the promo strip. Size per link was not measured separately.

**Search / input.** Underline-style field with the placeholder "Search" and a magnifier icon; 12.8px Lynstone v1 350, 15px high in the extraction.

**Tiles and banners.** Photograph with a text overlay, serif title and white buttons; tile labels are uppercase and large.

**Footer.** #f2f1ee field with "Join Our Email List", "Sign Up for Texts" and "Become a Cardmember" blocks, then five link columns (Customer Support, Personal Styling, Banana Republic Rewards, About Us, Find Us), social icons, an app download link and legal links.

## Design System Architecture

No public design system or brand guideline is published for Banana Republic. The home page https://bananarepublic.gap.com was opened; it links to campaign pages and skip links, and no brand, press or design-system page appears in its content.

The shipped CSS exposes the de-facto system through about 400 custom properties on `:root`. They fall into three families: shared cross-brand tokens (`--crossbrand-color-neutral-black: #020202`, `--crossbrand-font-size-base-sm: 14px`, `--crossbrand-font-weight-bold: 700`, `--crossbrand-color-text-error: #bc0712`), Banana Republic tokens (`--color-brands-banana-brand-1` to `-4`, `--font-family-brand-banana-1: "Lynstone v1"`, `--font-banana-serif: "BananaSerif"`, `--font-weight-banana-republic-book: 350`), and generic scales (`--border-radius-025: 2px`, `--border-radius-050: 4px`, spacing and `--font-size-*`). The root also carries `--tw-*` variables (Tailwind's naming) and the stylesheet contains `--mui-focus-ring-*` references. The "crossbrand" prefix in the variable names and the brand switcher listing GAP, OLD NAVY, BANANA REPUBLIC and ATHLETA are the page's own evidence of a cross-brand layer; how it is governed is not documented on the pages opened.

## Do's and Don'ts

- Do keep surfaces white or #f2f1ee and let photography supply all color.
- Do set headlines in BananaSerif 300 (42.6667px on desktop) and actions in Lynstone v1 350.
- Do make CTAs white rectangles with black uppercase labels, 56px tall, 0px radius.
- Do track out small capitals (nav 12px, 0.2px base tracking with wider tracked labels).
- Do use #ede8e0 as the brand-switcher hover fill and underline for nav hover.
- Don't add a colored accent button; none was measured.
- Don't round corners on buttons, nav or inputs.
- Don't add drop shadows to cards; the one measured shadow belongs to the consent dialog.
- Don't treat #00008b or the consent dialog as brand UI.
- Don't set body copy in bold; the serif body weight measured is 300.

## Responsive Behavior

Measured at the 390px mobile pass: the hero title is BananaSerif 300 at 33.28px / 35.36px with 0.52px tracking; product text on the page measured 12px / 14.4px weight 600 in Lynstone; the header block is 152px tall (width 390px). The most common mobile sizes are 12px (968 characters), 14.56px (441), 10px (215), 16px (102), 29.12px (43) and 33.28px (28). The mobile pass detected no primary CTA.

How the nav, tiles and banners reflow at mobile widths was not measured, and no mobile capture exists. Tablet widths are not measured.

## Iteration Guide

1. Start from #ffffff canvas, #000000 ink and #f2f1ee as the only tint; add #ede8e0 for hover on the brand bar.
2. Set hero titles in BananaSerif 300 at 42.6667px with 0.333333px tracking; copy in the same serif at 14px.
3. Set labels and navigation in Lynstone v1 350, uppercase, 12px.
4. Build CTAs as 56px white rectangles with black labels and zero radius; place them over full-bleed photographs.
5. Keep shadows and radii out of the interface; do not copy consent or feedback widgets into the design.
6. Re-measure hero copy before using it; it changes between captures.
7. Gate with `node web/scripts/verify-designs.mjs --slug=banana-republic`.
