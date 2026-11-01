---
version: alpha
name: "Chopard"
category: "Luxury"
description: "Chopard's US e-commerce site: a near-black (#010307) and off-white (#fefefe) luxury palette with light-grey (#f2f2f3) product tiles, uppercase Engravers labels at 1.6px tracking, Walbaum serif headings at 36px, Helvetica Chopard body text, 2px-radius black DISCOVER buttons and a full-black Services band."
colors:
  canvas: "#f2f2f3"
  page-body: "#fefefe"
  page-largest: "#010307"
  ink: "#010307"
  primary: "#010307"
  on-primary: "#fefefe"
  surface-black: "#000000"
  neutral-306: "#a2a3a4"
  neutral-304: "#6c6d70"
  grey-menu: "#444444"
  glass-button-bg: "#87888a80"
  neutral-302: "#36383c"
  neutral-301: "#1c1e21"
  neutral-303: "#515356"
  neutral-305: "#87888a"
  neutral-307: "#bcbdbf"
  neutral-308: "#d7d8d9"
  glass-button-light: "#bcbdbf80"
typography:
  display:
    fontFamily: Walbaum
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
    letterSpacing: 1.8px
  display-mobile:
    fontFamily: Walbaum
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.6px
    letterSpacing: 1.4px
  subheading:
    fontFamily: Engravers, Engravers-Special
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 1.6px
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Chopard\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.14px
  nav:
    fontFamily: Engravers, Engravers-Special
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 1.2px
    textTransform: uppercase
  input:
    fontFamily: "\"Helvetica Chopard\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.16px
rounded:
  xs: 2px
  sm: 18px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5.5px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 11px 12px
    height: 42px
  link:
    backgroundColor: "{colors.glass-button-bg}"
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 15px 12px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.neutral-302}"
    typography: "{typography.input}"
    padding: 8px 48px 8px 12px
    height: 48px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-body}"
  button-secondary:
    backgroundColor: "{colors.glass-button-light}"
    textColor: "{colors.page-body}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 15px 12px
    height: 48px
---

## Overview

Chopard's own history page (https://www.chopard.com/en-us/our-history.html) tells a heritage story: founded in 1860 by Louis-Ulysse Chopard in Sonvilier, moved to Geneva in 1937, bought by Karl Scheufele III in 1963, and described as a "family-owned Maison" that "Renowned for its creativity, state-of-the-art technology and the virtuosity of its artisans." The page title measured on the home page is "Chopard® | Swiss Luxury Watches & Jewelry, Since 1860." The history page names Happy Diamonds (1976), Happy Sport (1993) and Happy Hearts (2022); Happy Diamonds and Happy Sport products appear in the captures, with captions mentioning ethical gold and Lucent Steel.

The measured page is the US storefront, https://www.chopard.com/en-us, 1280px wide and 3,643px tall. The first capture was covered by a location pop-up ("WELCOME TO CHOPARD ... Visit Thailand / Stay on United States") with a grey scrim; the extractor reports it as a hidden geolocation pop-in and the final measurement excludes it. It is not documented as brand UI. The final capture is a stack of high-contrast bands: a black promo bar with white text ("Enjoy complimentary shipping & returns, secure payments, and exclusive online services."), a centered script wordmark with two rows of header controls, a full-width hero that is near-black in the capture, with the small tracked line "HAPPIER WHEN THEY ARE FREE," the title "HAPPY DIAMONDS" in a serif and a translucent "DISCOVER OUR COLLECTION" button, a product carousel on light-grey tiles, a "DISCOVER OUR CATEGORIES" grid of eight product tiles, a black Services band with three photo cards, a newsletter block, a benefits strip (free shipping, secure payment, exchange and returns) and a black footer. The mood is restrained luxury: lots of black, quiet grey tiles, spaced capitals and product photography on neutral backgrounds.

## Colors

The palette is a neutral ladder. The stylesheet names it `--black-300` through `--black-309`: #010307, #1c1e21, #36383c, #515356, #6c6d70, #87888a, #a2a3a4, #bcbdbf, #d7d8d9 and #f2f2f3. `{colors.ink}` and `{colors.primary}` are #010307 (`--black-300`, also `--color-black`), which is both the text color on 900 measured characters and the largest measured background (2,874 area units: the hero, Services band and footer). `{colors.page-body}` is #fefefe (`--white`), the body background and the text color on dark bands (481 characters), and `{colors.on-primary}` is the same off-white.

The generated `{colors.canvas}` is #f2f2f3 (`--black-309`), the light grey of product tiles and the email field; it was measured as a background (1,004 area units), while the plain page behind the tiles is `{colors.page-body}`. A pure `{colors.surface-black}` (#000000) was also measured as a background (1,014 area units). Secondary text uses `{colors.neutral-306}` (#a2a3a4, 376 characters) and `{colors.neutral-304}` (#6c6d70, 264 characters); `{colors.neutral-302}` (#36383c) is the color of text typed in the input and `{colors.grey-menu}` (#444444) is the declared menu link color. Two translucent greys fill buttons: `{colors.glass-button-bg}` (#87888a80, the "DISCOVER OUR COLLECTION" button over the hero) and `{colors.glass-button-light}` (#bcbdbf80, the "SIGN UP" button). The remaining ladder steps (`{colors.neutral-301}`, `{colors.neutral-303}`, `{colors.neutral-305}`, `{colors.neutral-307}`, `{colors.neutral-308}`) are declared in the stylesheet but not measured as page colors.

The stylesheet also declares Bootstrap-style names (`--blue`, `--indigo`, `--pink`, `--orange`, `--teal`, `--yellow`) and a cyan `--color-primary` (#00a1e0) with `--skin-heading-color-1` pointing at it; none of these were measured on rendered text or backgrounds (headings and buttons measure #010307), so they are excluded. There is no chromatic brand accent in the measured data: color comes from the jewelry and watch photography. No dark/light toggle theme was measured, although the footer offers "ENABLE HIGH CONTRAST" and "DISABLE ANIMATIONS" switches.

## Typography

Three brand faces plus a few system or utility faces. Engravers (with Engravers-Special as a second name) is the workhorse: 1,703 measured characters, always uppercase, with letter-spacing of one tenth of the font size (16px with 1.6px, 12px with 1.2px, 14px with 1.4px). It sets the measured navigation, button and product-name (h3) roles. Walbaum, a high-contrast serif, sets large headings at 36px with 1.8px tracking (a twentieth of the size) and the same twentieth-of-the-size tracking is measured at 24px (1.2px, 45 characters) and 48px (2.4px, 14 characters); the families for those two were not isolated. "Helvetica Chopard" is the sans for body copy and form fields (14px with 0.14px, 16px with 0.16px). The page also measures Metropolis (82 characters, the skip link), -apple-system (102 characters) and Dosis (16 characters, the mobile heading); none of them is used for the main roles.

- `{typography.display}`: Walbaum 36px, weight 400, line-height 43.2px, letter-spacing 1.8px: "DISCOVER OUR CATEGORIES" (the measured h2); the capture shows "SERVICES" and "SUBSCRIBE TO OUR NEWSLETTER" as similar serif capitals. The extractor's h1 role landed on the "Skip to main content" link, so the h2 is used as the display role.
- `{typography.display-mobile}`: Walbaum 28px, line-height 33.6px, letter-spacing 1.4px, the same h2 at the mobile viewport.
- `{typography.subheading}`: Engravers 16px, weight 400, line-height 21px, letter-spacing 1.6px, uppercase: product names and button labels.
- `{typography.body}`: Helvetica Chopard 14px, line-height 21px, letter-spacing 0.14px.
- `{typography.nav}`: Engravers 12px, letter-spacing 1.2px, uppercase: the header and utility links.
- `{typography.input}`: Helvetica Chopard 16px, line-height 24px, letter-spacing 0.16px.

By character count the sizes are 16px (999), 14px (559), 12px (446), 36px (58), 24px (45), 18.72px (16) and 48px (14). Weight 400 covers 2,039 characters, 500 covers 82 and 700 covers 16. Substitutes if the licensed faces are unavailable: a wide-set small-caps sans with generous tracking for Engravers, Playfair Display or Bodoni Moda for Walbaum, and Helvetica Neue for Helvetica Chopard.

## Layout

The declared breakpoints are `--breakpoint-xs` 0, `-sm` 699px, `-md` 1024px, `-lg` 1380px and `-xl` 1920px, and the promo banner height is `--banner-height: 40px`. The measured body is 1,265px wide in a 1280px viewport. Paddings cluster at 12px (111 elements), 4px (51), 16px (32), 2px (26), 24px (14) and 48px (13); gaps at 8px (17), 12px (14), 16px (8), 24px (4) and 48px (2). The header is two rows (utility row with globe, phone number "+1 786-425-3374" and "Boutique" at the left, wordmark centered, account, wishlist and bag icons at the right; then the main navigation WATCHES, JEWELRY, ACCESSORIES, GIFTS, LA MAISON, SERVICES, a divider and a search icon) and measures 126px tall.

Content blocks are full-width bands with a consistent side gutter: a four-up product carousel (a fifth tile peeks in from the right), a four-column by two-row category grid, a three-column Services row, and a four-column footer. Section titles are centered. Product tiles stack a "NEW" tag, a heart icon, the product image, three carousel dashes, the name, price, a tiny descriptor and a full-width black button.

## Elevation & Depth

Flat. No box-shadow was measured. Separation comes from tonal blocks (light-grey tiles on the off-white page, black bands against white) and photography. Translucent grey buttons float over the hero image. The only measured border color is #fefefe (2 elements).

## Shapes

Corners are nearly square: 2px (53 elements, including the black DISCOVER buttons and the translucent buttons), 50% (28 elements, which were not individually identified) and 18px (2). Product tiles and the category tiles in the capture have square corners. The input is square (0px).

## Components

- **Primary button** (`button-primary`): `{colors.page-largest}` fill, `{colors.page-body}` text, `{typography.subheading}` (Engravers 16px uppercase, 1.6px tracking), 2px radius, padding 11px 12px, 42px tall, 238px wide in the carousel; the label is "DISCOVER".
- **Translucent link button** (`link`): `{colors.glass-button-bg}` fill, off-white text, 2px radius, padding 15px 12px, 50px tall, used for "DISCOVER OUR COLLECTION" on the hero.
- **Secondary button** (`button-secondary`): `{colors.glass-button-light}` fill, off-white text, 2px radius, padding 15px 12px, 48px tall, 94px wide: "SIGN UP".
- **Navigation** (`nav`, `nav-link`): `{colors.page-body}` header, `{colors.page-largest}` text at `{typography.nav}`.
- **Text input** (`text-input`): `{colors.canvas}` fill, `{colors.neutral-302}` text, `{typography.input}`, padding 8px 48px 8px 12px, 48px tall, 298px wide, with the placeholder "Email *" and the hint "Format: example@mail.com".
- **Footer** (`footer`): `{colors.page-largest}` fill with `{colors.page-body}` text; footer link text is small tracked capitals in the muted greys.
- **Category tile**: light-grey tile with a product photo and a centered caption such as "WOMEN'S WATCHES" or "RINGS" in tracked capitals.

## Design System Architecture

No public design system or brand-guideline page was found: the US home page lists no such link (https://www.chopard.com/en-us), the history page has none, and the press site is separate (https://press.chopard.ch/, listed on the home page and not opened). The de-facto system is the shipped stylesheet, which declares 111 root custom properties in several layers: raw scales (`--black-300` to `--black-309`, `--color-grey1` to `--color-grey8`, `--alpha-30050` to `--alpha-30770` for translucent greys), semantic colors (`--success`, `--danger`, `--warning`, `--info`, `--auxiliary-*`), font aliases (`--font-engravers`, `--font-walbaum`, `--font-helvetica`, `--skin-header-font`, `--skin-body-font`) and a `--skin-*` layer (for example `--skin-primary-color-1`, `--skin-main-text-color-1`, `--skin-banner-background-color-1`) that maps themeable roles to those scales. A `--brand-100` of #002654 is also declared and is not seen on the page. The page loads Helvetica Chopard, Walbaum and Engravers as web fonts plus swiper-icons and FontAwesome icon fonts.

## Do's and Don'ts

- Do build the page from near-black #010307, off-white #fefefe and the grey ladder; let photography supply color.
- Do set labels, buttons and navigation in uppercase Engravers with tracking of 0.1em, and headings in Walbaum with 0.05em tracking.
- Do keep corners at 2px on buttons and square elsewhere.
- Do put products on light-grey (#f2f2f3) tiles with a full-width black DISCOVER button.
- Don't add shadows or colored accents; none were measured.
- Don't use the stylesheet's declared cyan `--color-primary` or Bootstrap color names; the rendered page does not use them.
- Don't document the location pop-up, its scrim, the accessibility widget or the cookie controls as brand UI.
- Don't use Metropolis, -apple-system or Dosis for the main type roles.

## Responsive Behavior

Measured at the extractor's mobile viewport (header width 375px): the Walbaum h2 drops from 36px/43.2px to 28px/33.6px with tracking 1.4px, body text stays 14px/21px, and the "DISCOVER" button grows to 311px wide (238px at desktop) with the same 16px label and 42px height. The header measures 64px tall and its text includes OPEN MENU, SEARCH, the wordmark and the phone number; two header links were visible and a menu toggle labelled "Open menu" was reported. A 9.2px size (106 characters) appears at mobile and not at desktop. Mobile h1 is a 32px Dosis heading (weight 700, line-height 48px). Column counts, tile sizes and the footer layout at mobile were not measured.

## Iteration Guide

1. Start with `{colors.page-body}` for the page, `{colors.page-largest}` for hero, services and footer bands, and `{colors.canvas}` for product tiles.
2. Set every label and button in Engravers uppercase with 0.1em tracking; set headings in Walbaum at 36px.
3. Build primary buttons as 42px-tall black rectangles with 2px corners and the label "DISCOVER".
4. Keep UI flat: no shadows, no color accents; use translucent grey buttons only over imagery.
5. Present products on neutral grey tiles with a small "NEW" tag and a heart icon.
6. Check any value against `web/data/extracted/chopard.json` before adding it.
