---
version: alpha
name: Walgreens
category: "Retail & E-commerce"
description: "Walgreens' home page sets Inter UI text in charcoal #413d3c on white with a #62002e wine promotional ground, Tiempos Headline serif display at 36px, crimson #a32a33 brand action color, 8px rounded white promo buttons and 45px pill Clip buttons."
colors:
  canvas: "#ffffff"
  ink: "#413d3c"
  primary: "#a32a33"
  on-primary: "#ffffff"
  surface-wine: "#62002e"
  surface-neutral: "#f4f2ef"
  surface-clay: "#ded5d0"
  ink-muted: "#414646"
  ink-strong: "#323232"
  ink-black: "#0a1414"
  brand-red: "#e62600"
  border-gray: "#989090"
typography:
  display:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 45px
  display-mobile:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: Inter, sans-serif
    fontSize: 22px
    fontWeight: 600
    lineHeight: 27.5px
  body:
    fontFamily: "\"Tiempos Headline\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
  button:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18.4px
  input:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 700
rounded:
  xs: 2px
  sm: 8px
  md: 10px
  lg: 40px
  xl: 45px
  2xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 19.2px
components:
  button-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 40px
    boxShadow: rgba(65, 61, 60, 0.1) 0px 2px 4px 2px
  button-brand:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 0px 20px
    height: 44px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 16px 0px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 45px
  card:
    backgroundColor: "{colors.surface-wine}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(65, 61, 60, 0.1) 0px 2px 4px 2px
  footer:
    textColor: "{colors.ink}"
---

## Overview

The measured page is https://www.walgreens.com/, titled "Walgreens: Pharmacy, Health & Wellness, Photo & More for You". The meta description calls it "your go-to for Pharmacy, Health & Wellness and Photo products": refill prescriptions, delivery or store pickup, and photo gifts. The page is 5,634px tall at 1280px.

From the top, the capture shows a three-message promo strip ("$10 OFF $40+ eligible items sitewide* with code NOW10", "$5 OFF $25+ ... NOW5", "Schedule vaccinations"); a header with the red script "W" logo, a rounded search field, store location ("151 N State St, Chicago, IL"), Account and a cart; a text menu (Pharmacy, Health Services, Shop, Savings, Photo, Financial Services, Weekly Ad, Halloween, Vaccinations, Español); and a dark wine band of four white quick-action buttons ("Schedule vaccinations", "GLP-1s for weight loss", "Manage prescriptions", "Cough, Cold & Flu"). Below that are large wine-colored promo tiles with product photography and serif headlines ("Get vaccinated and earn $15 Walgreens Cash or more*", "$5-10 OFF sitewide*"), an "Offers just for you" carousel of coupon cards with "Clip" buttons, a seasonal "Bring on the boo" Halloween section, and a "Because your health matters" row of portrait photographs.

The page measured is in a seasonal Halloween promotion state, so some imagery is campaign-specific; the structure (promo strip, quick actions, tiles, coupon carousel) is the retail layout. Tone is friendly and transactional: dollar amounts and codes are always in the headline.

## Colors

The canvas is white `#ffffff` (9,911 weighted area units). The text color is the brand charcoal `#413d3c` (the stylesheet names it `--palette-brand-charcoal`; it is the most-read text at 4,210 characters). Neutral surfaces are `#f4f2ef` (`--palette-brand-neutral`, 897) and the clay `#ded5d0` (`--palette-brand-clay`, 146).

The large promo ground is wine `#62002e` (2,262 units, the second largest area). Its role is promotional: the quick-action band, the tiles and the Halloween band share it. The brand action color is crimson `#a32a33` (`--palette-brand-crimson`, `--surface-button-primary` and `--border-button-primary`), seen as the "Shop now" button in the capture and measured as a background fill of 9 units; text on it is `--text-button-primary: #fff`. Because the extractor's detected primary button is a white pill, `button-promo` keeps that measured style, while `primary` is the crimson. Other roots: error and highlight reuse crimson (`--text-body-error`, `--surface-icon-highlight`), `--palette-brand-brand-red` is `#e62600` (measured as text on 23 characters), grays include `#414646`, `#707575`, `#a5aaaa`, `#d9dada` and `#989090` (the divider/border color), and feedback colors are info `#296ea3`, success `#00853e` and warning `#bc5724`. Only the colors shown in `colors` above are tokens; the other roots are documented here without tokenizing.

## Typography

Inter carries the interface (400, 600, 700 loaded) and Tiempos Headline (300 and 400) carries promotional display copy. Measured roles: promo h1/h2 in Tiempos Headline 36px on 45px line height (24px on 30px in the mobile pass); promo subtitles in Tiempos 28px/35px; section h3 "Offers just for you" in Inter 22px weight 600 on 27.5px; navigation Inter 16px/24px weight 400; utility links Inter 14px weight 700 on 18.4px; small buttons Inter 12px weight 700 on 15px; the Clip button and search field Inter 16px weight 700. Sizes by characters: 16px (2,048), 14px (1,408), 12px (459), 18px (313), 22px (251), 28px (196), 36px (127). Letter spacing is default throughout (the extraction recorded none).

Font substitutes: Tiempos Headline is a licensed serif; a transitional text serif is a stand-in. Inter is open source.

## Layout

The layout is a card-and-tile retail page. Measured gaps are 8px (20 uses), 4px, 2px, 25px and 10px; measured paddings include 8px, 16px, 2px, 12px, 10px, 20px, 24px, 30px, 5px, 6px, 19.2px and 28px. The header is 113px tall. Quick-action buttons sit in a four-up row inside the wine band; promo tiles are a three-up row (one wide tile and two narrow tiles); the coupon carousel shows five cards with arrows; the Halloween section shows four equal tiles with a full-width "Shop all Halloween" banner underneath; the closing row is four photo tiles. A footer 1,266px tall begins with "Sign up for deals and offers!" and lists "Customer Service" and other groups.

## Elevation & Depth

Shadows are soft and warm-tinted. The most common is `rgba(65, 61, 60, 0.1) 0px 2px 4px 2px` (34 uses, on promo buttons and tiles); the others are `rgba(0, 0, 0, 0.1) 0px 2px 8px 0px` (12 uses) and `rgba(207, 207, 207, 0.5) 0px 1px 2px 0px`. Coupon cards in the capture have a dashed outline instead of a shadow. Color blocking (wine, white, neutral) does most of the separating.

## Shapes

Radii measured: 2px (103 elements, links and nav items), 8px (47, tiles and promo buttons), 45px (16, Clip and "Schedule now" pills), 50% (14, circular carousel arrows and icon badges), 40px (4), 10px (4), 50px (1), 23% (1, the search field) and a bottom-only `0px 0px 3px 3px`. Tokens: `xs` 2px, `sm` 8px, `md` 10px, `lg` 40px, `xl` 45px, `2xl` 50px, `pill` 9999px.

## Components

**Promo button:** white fill, `#413d3c` text, Inter 12px bold, 8px radius, `8px 12px` padding, 40px tall, with the warm shadow; hovering underlines the label (the measured hover keeps the same fill).

**Clip button:** white fill, 1px `#413d3c` border, Inter 16px bold, 45px radius, 44px tall, `0px 20px` padding, with a plus icon.

**Brand button:** crimson `#a32a33`, white text ("Shop now").

**Promo tile:** wine fill, white serif headline, white text, 8px radius, 423px tall, shadow as above.

**Coupon card:** white with dashed border, a blue "Expires in 2 days" tag, the discount in bold ("$5 off 2"), the brand name and a "Manufacturer's coupon" line.

**Search input:** 45px tall, `12px 20px` padding, pill-shaped, with a magnifier icon.

**Nav link:** Inter 16px, `16px 0px` padding, 40px tall.

A vertical "Feedback" tab on the right edge is a third-party widget and is not tokenized.

## Design System Architecture

No public Walgreens design system or brand guideline was linked from the home page, and the page source contains no design-system link. The shipped styles do expose a semantic token layer as root variables (88 measured): palette names (`--palette-brand-charcoal`, `--palette-brand-crimson`, `--palette-brand-clay`, `--palette-brand-neutral`, `--palette-gray-100` to `--palette-gray-600`, `--palette-feedback-*`) and role names (`--surface-button-primary`, `--text-button-primary`, `--border-input-default`, `--surface-container-default`, each with an `-ondark` twin). Tokens in this file are taken from that layer and from measurement of https://www.walgreens.com/. Media queries in the HTML are `max-width: 767px` and a `min-width: 320px` and `max-width: 767px` range.

## Do's and Don'ts

- Do set promotional headlines in the serif and utility text in Inter.
- Do use the wine `#62002e` ground for campaign tiles and the quick-action band.
- Do keep promo buttons white with charcoal text and the warm shadow.
- Do give coupons a pill Clip button with a visible outline.
- Don't use crimson `#a32a33` as a large fill; it is measured as a small action and error color.
- Don't tokenize the feedback tab or seasonal artwork.
- Don't use pure black text; the ink is `#413d3c`.

## Responsive Behavior

The mobile pass measured: promo headline 24px/30px in Tiempos Headline, body 24px/30px, the promo button still Inter 12px bold with 8px radius but 55px tall, and a navigation header that stayed 113px tall with "Sign in / Create an account / Account / Nearest store" content and weight 600 at 16px/22px. Beyond those values, layout changes are not measured; the HTML declares a max-width 767px media query.

## Iteration Guide

1. Begin with white, `#413d3c` and wine `#62002e`; add crimson `#a32a33` for the strongest actions.
2. Pair a 36px serif headline with Inter 12px bold buttons; keep dollar amounts in the headline.
3. Use 8px corners for tiles and promo buttons, 45px pills for Clip.
4. Keep shadows to the three measured values.
5. Refresh seasonal imagery, not the structure; re-measure after a campaign change.
