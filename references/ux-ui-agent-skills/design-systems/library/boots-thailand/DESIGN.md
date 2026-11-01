---
version: alpha
name: Boots Thailand
category: "Thai Brands"
description: "Boots Thailand storefront (store.boots.co.th) measured 2026-10-09: deep indigo-navy #161348 for the category bar and footer on a #fafafa page with white #ffffff cards edged in #bcc5d0, set entirely in the Thai-capable PSLDisplayPro and PSLDisplayProBold families at 18px body and a 38px page title, with 3 to 5px corners and circular carousel dots."
colors:
  canvas: "#161348"
  page-body: "#fafafa"
  page-largest: "#ffffff"
  ink: "#ffffff"
  primary: "#161348"
  ink-body: "#151b1e"
  ink-muted: "#666666"
  hairline: "#bcc5d0"
  text-input-text: "#000000"
  text-input-border: "#616161"
typography:
  display:
    fontFamily: PSLDisplayProBold
    fontSize: 38px
    fontWeight: 500
    lineHeight: 45.6px
  nav:
    fontFamily: PSLDisplayPro
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  link:
    fontFamily: PSLDisplayPro
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 24px
components:
  button-secondary:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 41px
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 5px
    height: 39px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
---

## Overview

The measured site is the Boots Thailand online store. `https://www.boots.co.th/` redirected to `https://store.boots.co.th/`, whose title is "Boots Thailand | บู๊ทส์ ประเทศไทย" and whose footer reads "Copyright © 2020 Boots Retail (Thailand) Ltd. All Rights Reserved." The page is bilingual: Thai product and promotion copy sits beside English interface labels (Login, English, Coupons, Article, View all, Customer services, Our services, About us, Connect with us), and a language switcher in the top-right reads "English".

The capture shows a dense retail layout. A thin utility row carries Login and the language dropdown. Below it sits the script-style Boots wordmark, a wide search field with a magnifier button, icons for bag, notifications and phone, and the line "For more info, contact : 02-269-9599". A full-width navy category bar holds a home icon and fourteen white labels (Beauty & Make up, Facial Skincare, Body Skincare, Suncare, Gift sets, Healthcare, Vitamin & Supplements, Dermatologist, Haircare, Personal Care, Babycare, Household, Health Hub, Exclusive Brand). A promotional hero carousel with a long row of round pagination dots follows, then two wide banners (Online shopping and an online pharmacist consultation with a QR code), a "Coupons" row of three bordered cards, an "Article" row of three image cards, and a navy four-column footer with social icons.

The voice is promotional and informational at once: large sale artwork in pink, yellow and blue is supplied as images, while the interface around it stays quiet, using navy text, hairline borders and small corners. The measurement saw 285 visible elements on a 1,280px viewport with a 2,082px scroll height, so this is a short, banner-led home page rather than a long editorial one.

## Colors

Measured colors are few and come from a navy brand ink plus neutrals.

- **Navy `#161348`** is the brand color. It is the CSS variable `--primary`, the footer fill, the category-bar fill (989 area weight, second only to white), the h1 and card-title color, and the base text color of the body role. The token `canvas` and `primary` both carry it.
- **Page body `#fafafa`** is the measured body background; **white `#ffffff`** is the largest background area (weight 1,255) and fills cards and the search input.
- **Ink `#ffffff`** is the most-read text color by characters (597), because the category labels and footer links are white on navy. **Body ink `#151b1e`** covers 393 characters; navy text covers 232; **muted `#666666`** appears in 7 characters (the "English" button).
- **Hairline `#bcc5d0`** is the card border and the `--secondary` variable; **`#616161`** is the search input border; **`#000000`** is the input text color.

The `:root` also declares a Bootstrap-style palette (`--yellow: #ffc107`, `--green: #4dbd74`, `--danger: #f86c6b`, `--blue: #20a8d8`, `--primaryV2: #004890`, `--grayV2: #797979` and others). Apart from the navy primary and the `#bcc5d0` secondary these were not measured on the home page's visible elements, so they are not tokens. The red, yellow and pink in the capture belong to promotional banner images, not to interface chrome.

## Typography

Two faces, both loaded as separate font families: **PSLDisplayPro** (weight 400) and **PSLDisplayProBold** (loaded at 700). By characters, PSLDisplayProBold covers 782 and PSLDisplayPro 447. The stylesheet also declares NotoSansThai, NotoSansThaiBold and Sarabun, and Font Awesome 5 Free and Brands for icons. The measured role weights are 400 (634 characters), 500 (517) and 700 (78); the bold family is used with `font-weight: 500` for headings, which is why the h1 reads 500 although it uses the bold face.

| Role | Face | Size / line height | Weight |
| --- | --- | --- | --- |
| Display (h1 "Coupons") | PSLDisplayProBold | 38px / 45.6px | 500 |
| Card title | PSLDisplayProBold | 21.6px / 25.92px | 500 |
| Footer column title | PSLDisplayProBold | 24px / 28.8px | 500 |
| Nav, input, secondary button | PSLDisplayPro | 18px / 27px | 400 |
| Link (footer) | PSLDisplayPro | 14.4px / 21.6px | 400 |

The most-read sizes are 18px (695 characters), 14.4px (255), 21.6px (160), 24px (52), 40px (33), 26px (20) and 38px (14). No letter spacing was measured. No source or license page for it was opened, so treat it as proprietary. **Font substitutes:** the site's own CSS declares NotoSansThai and Sarabun, so those are the measured fallbacks for Thai text; both cover Thai and Latin.

## Layout

The page uses a full-bleed hero and banners inside a wide container with the section titles ("Coupons", "Article") left-aligned and a "View all >" link right-aligned on the same row. The coupon and article rows are three equal columns of cards. The footer is four equal columns, each with a short rule under its title. Card geometry measured at 380px wide by 241px high for an article card.

The `:root` Bootstrap 4 breakpoint variables are `--breakpoint-xs: 0`, `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px` and `--breakpoint-xl: 1200px`. The measured padding scale is 3, 5, 6, 8, 12, 15, 16 and 24px (8px 31 times, 12px 29, 15px 17, 6px 15, 3px 15). No flex or grid gaps were measured. Density is high: the category bar wraps onto two rows at the 1,280px viewport in the capture, and the header packs search, three icons and a phone line into one row.

## Elevation & Depth

The page is flat. No box shadow was measured on any visible element (the shadow frequency list is empty). Separation comes from 1px `#bcc5d0` card borders, from the contrast between the `#fafafa` page, white cards and the navy footer, and from photography inside banners. The stylesheet corpus contains Bootstrap 4 focus rings of the form `0 0 0 .2rem rgba(22,19,72,.25)` (6 occurrences, navy) alongside blue, green and red variants for other states; these are form-focus rings, not resting elevation. Hover was measured on the category buttons only: the label changes from white on `rgb(22, 19, 72)` with a white border to `rgb(22, 19, 72)` text on `rgb(239, 239, 239)` with a navy border.

## Shapes

Corners are small and square. Measured border radii: 100% on 21 elements (the circular carousel dots and icon buttons), 4px on 9 (cards), `4px 4px 0 0` on 3 (the image top of article cards), 3px on 2 (the language button), `5px 0 0 5px` on the search input and `0 5px 5px 0` on the search button. The tokens are `xs` 3px, `sm` 4px, `md` 5px and `pill` 9999px.

The search field is a joined input and button: the input rounds only its left corners and the button only its right. Category-bar buttons measured 0px radius, so the navy bar is a row of square, white-labelled cells. Coupon artwork inside cards is a red tile; its shape belongs to the image.

## Components

**Search input.** White fill, 1px `#616161` border, 5px padding, 18px/27px PSLDisplayPro, text `#000000`, 39px high and 370px wide, left corners rounded 5px.

**Category button.** Navy `#161348` fill, white text, white border, 39px high, square corners. Hover inverts to navy text on `rgb(239, 239, 239)`.

**Secondary button (language).** Text `#666666`, 18px/27px, 3px radius, `6px 12px` padding, 41px high and 136px wide, transparent background.

**Card.** White fill, 1px `#bcc5d0` border, 4px radius, navy title in 21.6px PSLDisplayProBold. Coupon cards pair a red coupon tile on the left with a title, a code string and an expiry date ("Expired 21/10/2026"). Article cards put a banner image on top with a bold navy title below.

**Footer.** Navy `#161348` background, 332px high, white text; column titles 24px PSLDisplayProBold with links at 14.4px; a row of round social icons (Facebook, Instagram, TikTok, LINE, YouTube, X) appears under "Connect with us".

**Primary CTA.** The extractor detected no primary call-to-action button on this page, so no `button-primary` token is declared.

## Design System Architecture

No public Boots Thailand design system, brand guideline or token package was found: the storefront home page that was opened links to no design-system or brand-guideline page, and its footer lists Customer services, Our services, About us and Connect with us only. The page is server-rendered by Nuxt (`data-n-head-ssr`, `window.__NUXT__` in the HTML opened from https://store.boots.co.th/), and the embedded CSS carries the Bootstrap and BootstrapVue licence headers (`bootstrap.com`, `bootstrap-vue.org`).

The de-facto system is therefore Bootstrap 4 variables customised in `:root`: `--primary: #161348`, `--secondary: #bcc5d0`, `--primaryV2: #004890`, `--light-primaryV2: #e6ecf5`, `--gray-primaryV2: #d6e2ef`, `--grayV2: #797979`, plus Bootstrap's `--breakpoint-*` set and a sans-serif font-stack variable that begins with `-apple-system`. Class names seen in the HTML include `btn`, `btn-primary`, `btn-link` and `container-fluid`. Where the site's own brand layer is expressed, it is the navy primary, the PSLDisplayPro pair and the 3 to 5px radii measured above.

## Do's and Don'ts

**Do**
- Use `#161348` for the category bar, footer and headings, with white text on it.
- Keep cards white with a 1px `#bcc5d0` border and a 4px radius, and leave them shadowless.
- Set headings in PSLDisplayProBold at weight 500 and interface text in PSLDisplayPro at 400, with 18px as the working body size.
- Join the search input and button with left and right corner radii of 5px.
- Let promotional images carry the loud colors.

**Don't**
- Don't use Bootstrap's `#007bff` or other default variables as brand colors.
- Don't add shadows to resting cards; none were measured.
- Don't round the category buttons; they measured 0px.
- Don't document the language switcher or the carousel arrows as primary actions.

## Responsive Behavior

One mobile pass was recorded. Measured values: the h1 "Coupons" stays 38px/45.6px PSLDisplayProBold at weight 500; the only other measured role is a `nav` element 200px wide and 784px high, with 14.4px/21.6px PSLDisplayPro text in `#444d58` and padding `18px 0px 64px`, whose text begins "Beauty & Make up", "Facial Skincare", "Body Skincare". The mobile character counts by size are 18px (516), 14.4px (496), 21.6px (108), 24px (52), 40px (33), 26px (20) and 38px (14). The stylesheet's Bootstrap breakpoints are listed in the Layout section. The mobile positions of the header, hero, cards and footer were not measured.

## Iteration Guide

1. Set `canvas`/`primary` to `#161348`, page body `#fafafa`, card surface `#ffffff`.
2. Load PSLDisplayPro (400) and PSLDisplayProBold; fall back to NotoSansThai or Sarabun for Thai text.
3. Build the header: utility row, wordmark, 370px search field, icon buttons, navy category bar with 18px white labels.
4. Add section titles in 38px navy with a right-aligned "View all >" link, then three-column cards with 1px `#bcc5d0` borders and 4px corners.
5. Finish with the navy four-column footer.
6. For a new component, measure it first with `node web/scripts/extract-tokens.mjs --slug=boots-thailand--<page> --url=<url> --force --no-motion`, and leave out anything unmeasured.
