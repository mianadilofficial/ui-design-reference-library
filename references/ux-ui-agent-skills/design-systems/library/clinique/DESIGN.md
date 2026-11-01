---
version: alpha
name: Clinique
category: "Beauty & Personal Care"
description: "Clinique's US storefront is a clean white and #fafafa product catalogue in Cliniques Helvetica Neue (200-weight 48px headlines, 16px body, 800-weight product titles), with black pill buttons (1000px radius), mint #adddb7 badges, a red #dd0000 holiday nav link and square, unframed product imagery."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-gray: "#fafafa"
  mint: "#adddb7"
  ink-muted: "#666666"
  holiday-red: "#dd0000"
  hairline: "#e6e6e6"
typography:
  display:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 48px
    fontWeight: 200
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 26px
    fontWeight: 200
    lineHeight: 26px
  subheading:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 20px
    fontWeight: 200
    lineHeight: 24px
  body:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.9998px
  nav-label:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  title-strong:
    fontFamily: "\"Cliniques Helvetica Neue\""
    fontSize: 16px
    fontWeight: 800
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 11px 28.4444px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 11px 28.4444px
    height: 48px
    borderColor: "{colors.primary}"
  badge:
    backgroundColor: "{colors.mint}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
  link-on-image:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-label}"
    padding: 16px 56.8889px 8px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 4px 0px
    height: 26px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.title-strong}"
---

# Clinique

## Overview

Clinique's US storefront (clinique.com, title "Clinique® | Gift with Purchase: Free 8-Piece Gift with $65+*") sells skincare, makeup, fragrance and men's products. On its About page (opened for this document) the brand describes itself as "Dermatologist guided since 1968", says the answer to a Vogue editor's question to dermatologist Norman Orentreich ("Can great skin be created?") led to its founding, and repeats the line that appears across the site: "Dermatologist guided solutions. Allergy tested. 100% fragrance free."

The home page is a seasonal retail page built on a white canvas with edge-to-edge promotional banners. From the top: a thin promotional strip ("Join Smart Rewards and get free standard shipping with any order. Learn More"), a header with the CLINIQUE wordmark centered and search, log-in and cart icons at the right, a navigation row (Holiday Gifts + Sets in red, then New, Bestsellers, Skincare, Makeup, Fragrance, Men, Offers, Services), a pale green reassurance bar carrying the dermatologist line, and a large pink campaign banner headed "For you. Fall Gift." Below that is a long sequence of horizontally scrolling product carousels and promotional tiles, introduced by sentence-case headlines such as "Shop bestsellers to give and get.", "Today's special offers.", "Shop our most-wanted gift sets." and "As seen on TikTok.", then clinical and service tiles, a Smart Rewards panel and a footer with a newsletter sign-up.

The look is clinical and uncluttered: white and very light gray surfaces, a single typeface in very light weights for headlines, black pill buttons, pale mint badges, and product photography on soft gray-white staging with no frames or card borders. The measured page is 8653px tall at 1280px.

Voice is plain and benefit-led ("Get more with your purchase.", "Unlock this set for $69 with any purchase.*"), with legal footnotes in small type under promotions. Headlines end in periods.

A first capture of this page was covered by a rewards pop-up and scrim; the capture used here was re-measured to remove them, and the pop-up is not documented as brand UI.

## Colors

- **Canvas `#ffffff`**: the page background (about 58% of the capture; largest measured background, weight 10391).
- **Surface gray `#fafafa`**: the product-tile and promo-panel ground (weight 2844).
- **Ink `#1a1a1a`**: the most-read text color (7783 characters), used for headlines, product titles and body; **ink muted `#666666`** (3689 characters) is the gray for product descriptions and secondary copy.
- **Primary `#000000`**: fills the pill buttons ("Sign Up", "Shop Gift Guide", "Shop to Qualify"), borders the outline buttons and colors 568 characters of text. On-primary text is `#ffffff`.
- **Mint `#adddb7`**: the badge green (measured background weight 232; the site's `--color-accent-01` and `--color-badge-background`), behind labels such as "Value $125", "Clinique.com Exclusive", "Bestseller" and "Dermatologist Recommended".
- **Holiday red `#dd0000`**: the color of the "Holiday Gifts + Sets" navigation item (20 characters, the only use measured).
- **Hairline `#e6e6e6`**: the light border color (29 measured borders).

Root variables add `--color-badge-text` `#1a1a1a`, `--color-success` `#78AC83`, `--color-accent-02` `#ffffff`, `--button-primary-focus-color` `#3B52E8`, and a long list of component tokens. Only the colors above were observed on measured elements. The page's chromatic color otherwise comes from product photography (purple serums, pink and peach compacts) and from campaign banners.

## Typography

One brand family, **Cliniques Helvetica Neue**, is loaded in four weights: 200, 400, 600 and 800. It sets 11149 of the measured characters; `ui-sans-serif` (the platform system stack) sets 1362.

| Role | Size / line height | Weight |
|---|---|---|
| Display (H1 "For you. Fall Gift.") | 48px / 48px | 200 |
| Display, mobile pass | 26px / 26px | 200 |
| Subheading (H3 on a featured product tile) | 20px / 24px | 200 |
| Body | 16px / 24px | 400 |
| Link and small text | 14px / 17.9998px | 400 |
| Navigation label | 14px / 14px | 600 |
| Strong title (footer headings, product names) | 16px / 24px | 800 |

By characters the sizes are 16px (9961), 14px (1706), 11px (296), 36px (213), 48px (146), 30px (110) and 18px (68). The weight distribution is 400 (9522 characters), 800 (2339), 200 (480), 700 (96) and 600 (74). The identity is the contrast between hairline-light 200-weight headlines and heavy 800-weight product names and headings, with 400 for reading.

Headlines are sentence case with a closing period; navigation and footer groupings use title case ("Holiday Gifts + Sets", "Dermatologist Recommended").

**Font substitutes.** "Cliniques Helvetica Neue" is a branded cut of Helvetica Neue. The site's stylesheet names `Helvetica Neue Light`, `Helvetica Neue` and `Helvetica` as alternates; use Helvetica Neue at weights 200, 400, 600 and 800 (or the nearest available) for prototypes.

## Layout

The root variables define a maximum page content width of `112.5rem` (`--spacing-pagecontentmax-width`), fluid component sizes written as `min(max(Npx, calc(100vw/1440 * N)), Npx)` (a 1440px reference width), and max-width steps of 24rem, 28rem, 32rem, 36rem and 42rem for narrow containers. At the measured 1280px viewport the content width is 1265px.

The page is a stack of bands. Product carousels show four cards across with a counter and chevrons ("1 / 9"); each card is centered text under a square product photo: mint badges at the top left, a bold product name, a gray description, optional star rating, a price and a full-width outline pill "Add to Bag". Promotional banners span the content width with text at the left and a product composition at the right, and category tiles ("Shop Skincare", "Shop Makeup", "Shop Fragrance", "Shop Men") sit in a four-up row with pill buttons below the images. A Smart Rewards panel and a services row precede the footer, which is 875px tall and holds columns of links (Shopping, About Brand, Need Help?) and a newsletter sign-up.

Gaps measured: 12px (347 uses), 8px (272), 10px (160), 4px (104), 2px (50), 3px (23), 16px (18), 28.4444px (14). Paddings: 16px (348), 12px (222), 28.4444px (66), 11px (57), 3px (50), 8px (40), 4px (30), 49.7778px, 56.8889px and 40px. Button padding is 11px 28.4444px.

## Elevation & Depth

Flat. The measured box-shadow list contains only a fully transparent multi-layer value (all layers `rgba(0, 0, 0, 0)`), and the stylesheet's other shadows are Tailwind ring variables plus focus rings (`0 0 0 2px #4d90fe`). Depth comes from photography staged on pale gradient floors and from the pink, mint and gray banner fields. Product cards and images carry no shadow and no border; the root variables set `--radius-productcard-radius`, `--radius-images-radius` and `--radius-modal-radius` to 0.

## Shapes

Measured radii: `1000px` (107 elements: the pill buttons), `3.35544e+07px` (76 elements: effectively full rounding for badges and small round controls), `24px` (29 elements) and `2px` (5 elements). Tokens: `xs` 2px, `sm` 24px and `pill` 9999px.

The shape language is pills for actions and labels, square corners for product imagery. The root variables name the values: `--radius-button-radius` 62.5rem, `--radius-md` 1.5rem (24px), `--radius-sm` 1rem, `--radius-lg` 2.25rem and `--radius-variantselectortiles-radius` 24px. Campaign banners in the capture have rounded corners that match the 24px value.

## Components

- **Primary button ("Sign Up", "Shop Gift Guide", "Shop to Qualify")**: `{colors.primary}` fill, white 16px regular label, 1px black border, 1000px pill radius, padding 11px 28.4444px, 48px tall. The site declares the hover state as a white fill with black text (`--button-primary-hover-bg` `#ffffff`, `--button-primary-hover-color` `#000000`, border `#000000`).
- **Outline button ("Add to Bag", "Shop To Qualify")**: transparent fill, black text, 1px black border, the same pill shape and padding (the secondary button's declared background is transparent).
- **Badge**: mint `#adddb7` pill with `#1a1a1a` text ("Value $125", "Bestseller"), as declared by `--color-badge-background` and `--color-badge-text`.
- **Link on image**: white 14px "Learn More" text over photography.
- **Navigation**: centered row of 14px, 600-weight labels in `{colors.ink}` with "Holiday Gifts + Sets" in `#dd0000`; padding 16px 56.8889px 8px, 103px tall block. On mobile the row is replaced by a toggle labeled "Menu".
- **Text input**: 14px text, padding 4px 0px, 26px tall, no box (the newsletter e-mail field).
- **Product card**: square photograph, badge row, bold title (800), gray description, price and outline pill; no border, no radius.
- **Footer**: white, link groups in 800-weight headings.

Not documented as brand UI: the Smart Rewards pop-up and its scrim and the cookie or chat widgets.

## Design System Architecture

No public design-system site or brand-guideline page was found. The About page (https://www.clinique.com/about-clinique) was opened; it links to Our philosophy, a Mount Sinai dermatology partnership and the parent company's site (https://www.elcompanies.com/en/our-brands/clinique), but not to brand guidelines or a press kit.

The shipped CSS exposes a tokenized system on the root element (400 properties captured): `--button-primary-*` and `--button-secondary-*` tokens for background, color, border, hover and focus; `--radius-*` tokens; `--spacing-*` tokens (many fluid against a 1440px reference width); `--color-*` tokens including `--color-accent-01` `#adddb7` and badge colors; capitalized `--Typography-*` tokens (for example `--Typography-Body-XL-Font-Size` 1.125rem) and font variables `--font-family-primary` and `--font-family-secondary`, both "Cliniques Helvetica Neue". Tailwind utility variables (`--tw-*`) sit beside them. This describes a de-facto system from shipped CSS, not a published specification.

## Do's and Don'ts

Do
- Use black pill buttons (1000px radius, 11px 28.4444px padding, 48px tall) for the main action and outline pills for "Add to Bag".
- Set headlines in weight 200 with a closing period; set product names and group headings in weight 800.
- Use mint `#adddb7` only for badges.
- Keep product photography square, unframed and without shadow on `#ffffff` or `#fafafa`.
- Show the dermatologist-guided, allergy-tested, fragrance-free line as a full-width banner strip.

Don't
- Don't round product images or cards; the declared radius for them is 0.
- Don't add drop shadows or borders to product cards.
- Don't use red outside the holiday navigation item.
- Don't set body copy in weight 200; it is reserved for large headlines.
- Don't use the pop-up, scrim or cookie controls as brand patterns.

## Responsive Behavior

The mobile pass (390px) recorded: the H1 and H2 at 26px / 26px weight 200 (from 48px), body text 16px with 21px line height at 343px wide, the "Sign Up" button at 16px with padding 11px 24px, 48px tall and 343px wide (from 28.4444px horizontal padding), and a navigation block of "Menu, Search, Log in, Cart" 46px tall with 16px horizontal padding. The layout probe recorded a visible "Menu" toggle with three header links on mobile (12 header links on desktop). The mobile character-weighted size list is led by 16px (9325), 13px (1074), 14px (655), 11px (296), 22px (212) and 26px (146).

How the carousels, banners and footer columns rearrange on mobile beyond these figures was not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#1a1a1a`, `primary` `#000000`, `surface-gray` `#fafafa` and `mint` `#adddb7`.
2. Load Cliniques Helvetica Neue at 200, 400, 600 and 800; set the hero headline at 48px / 48px weight 200 and body at 16px / 24px weight 400.
3. Build buttons as 48px pills with 11px 28.4444px padding; invert to white with black text on hover.
4. Compose carousels as four square-photo cards with mint badges, bold titles, gray descriptions, prices and outline "Add to Bag" pills.
5. Keep surfaces flat: no shadows, no borders except `#e6e6e6` hairlines.
6. On narrow screens use the recorded figures (26px headlines, 343px full-width buttons, "Menu" toggle) and mark everything else as not measured.
7. Re-measure on a clean page, with pop-ups dismissed, before adding any new token.
