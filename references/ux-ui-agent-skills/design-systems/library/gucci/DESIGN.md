---
version: alpha
name: Gucci
category: "Luxury"
description: "Gucci's US home page: pure white #ffffff and black #000000 only, editorial full-bleed photography, a single typeface (Gucci Sans Pro) with negative tracking — 32px weight-100 statements, 16px/700 uppercase section titles at -0.48px, 12px/500 navigation at -0.36px — square corners, a 72px white header and a black footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  on-dark-muted: "#eeeeee"
  background-secondary: "#f9f9f9"
  image-background: "#fbfbfb"
  surface: "#44494e"
  inverse-secondary: "#191919"
  divider: "#00000026"
  disabled: "#767676"
  focus-ring: "#91c7ed"
  error: "#cc0000"
  success: "#006633"
  warning: "#994d00"
  my-gucci: "#7c183d"
typography:
  display:
    fontFamily: "\"Gucci Sans Pro\", sans-serif"
    fontSize: 32px
    fontWeight: 100
    letterSpacing: "-0.96px"
  hero-caption:
    fontFamily: "\"Gucci Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.64px"
  heading:
    fontFamily: "\"Gucci Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.48px"
    textTransform: uppercase
  body:
    fontFamily: "\"Gucci Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  nav:
    fontFamily: "\"Gucci Sans Pro\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: "-0.36px"
  input:
    fontFamily: "\"Gucci Sans Pro\", sans-serif"
    fontSize: 16px
    fontWeight: 100
    lineHeight: 16px
    letterSpacing: "-0.64px"
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 56px
  s10: 64px
components:
  header:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 72px
  section-title:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  text-input:
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 16px 40px 8px 0px
    height: 39px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is Gucci's US home page (finalUrl `https://www.gucci.com/us/en/`, title "GUCCI® US Official Site | Celebrate Italian Heritage"). It is a pure editorial page in black and white. The 72px white header has "Contact Us" at left, the spaced GUCCI wordmark centred, and bag, account, search and "MENU" icons at right.

The page is a vertical sequence of large images with almost no copy. In the capture the hero is a studio portrait of a model in a white coat carrying a quilted white GG Marmont bag, captioned "GG Marmont" with a small white "SHOP NOW" box. A white band follows with two product shots on white (a GG canvas handbag with the green-red-green web stripe and a slingback shoe), labelled "Women's Handbags" and "Women's Shoes", and the centred section title "PRIMAVERA COLLECTION". A second full-bleed image (a man in white reclining on a brocade sofa in front of patterned wallpaper) carries "Gucci Primavera Collection for Men" and another "SHOP NOW" box. "GUCCI SERVICES" presents three square photos (a Gucci storefront in black and white, wooden letter blocks, a boutique entrance) with uppercase titles (BOOK AN APPOINTMENT, PERSONALIZATION, COLLECT IN STORE) and underlined links ("Choose your Experience", "Explore Options", "Discover How").

The black footer opens with "SIGN UP FOR GUCCI UPDATES" and a 32px light statement, then link columns (MAY WE HELP YOU?, THE COMPANY, GUCCI SERVICES), a store-locator field, an email field, a country selector, sister-brand logos (Gucci Osteria, Palazzo Gucci) and an enormous serif GUCCI wordmark spanning the full width. The voice is minimal and formal ("May we help you?").

## Colors

The home page uses only black and white; everything else lives in the `--g-color-*` tokens on `:root`.

- **canvas `#ffffff`** (`--g-color-background`): the header and content bands.
- **ink `#000000`** (`--g-color-foreground`): all text on white.
- **primary `#000000`**: black is the action colour (underlined black links, black footer, the black text inside the white "SHOP NOW" boxes); no coloured CTA exists. **on-primary `#ffffff`**: text on black.
- **on-dark-muted `#eeeeee`**: the off-white of the signup heading and statement on black.
- **background-secondary `#f9f9f9`** and **image-background `#fbfbfb`** (`--g-color-image-background`): off-whites behind product imagery.
- **surface `#44494e`** (`--g-color-surface`): a grey used with opacity steps (`--g-color-surface-opacity-40` … `-90`) for overlays.
- **inverse-secondary `#191919`** (`--g-color-background-secondary-inversed`).
- **divider `#00000026`** (`--g-color-divider`, 15% black) and **disabled `#767676`**.
- **focus-ring `#91c7ed`**: the measured 2px focus ring (box-shadow) on keyboard focus.
- **error `#cc0000`**, **success `#006633`**, **warning `#994d00`**: system states.
- **my-gucci `#7c183d`** (`--g-color-my-gucci-account`): the account area colour.

## Typography

The page renders entirely in **Gucci Sans Pro** (all 1256 measured characters), loaded at 100, 400, 500 and 700. The token set also names a display serif, `--g-font-family-display: "Gucci Serif",serif`, which is not among the loaded fonts on the home page. Every size carries negative tracking, which gives the type its tight, fashion-magazine feel.

- **display**: 32px, weight 100, -0.96px tracking, the footer statement "Get exclusive updates on the collection's launch…".
- **hero-caption**: 16px/24px, weight 500, -0.64px, image captions such as "GG Marmont".
- **heading**: 16px/24px, weight 700, uppercase, -0.48px, section titles (PRIMAVERA COLLECTION, GUCCI SERVICES, BOOK AN APPOINTMENT).
- **body**: 16px, weight 400.
- **nav**: 12px/16px, weight 500, -0.36px, header and footer links (12px is the most common size, 649 characters).
- **input**: 16px/16px, weight 100, -0.64px, the footer email and store-locator fields.

Only three sizes appear on the page: 12px, 16px and 32px. Hierarchy comes from weight (100 to 700) and case. The token scale is larger than what the home page uses: `--g-display-l-font-size: 4rem` and `--g-display-m-font-size: 3.5rem` (uppercase, -3px tracking), `--g-title-xxl-font-size: 2.5rem`, `--g-title-xl-font-size: 2rem` (weight 100), `--g-title-l` 1.5rem, `--g-title-m` 1.25rem, `--g-title-s` 0.875rem bold, and `--g-text-details-font-size: 0.563rem`; text tokens use -0.03em or -0.04em tracking.

## Layout

At 1280px the page is 4572px tall. Bands: the 72px header with content from x=94 to x=1216; a full-bleed hero; a 721px white band for products, with content between x=263 and x=1003; a 720px full-bleed image; a 637px white services band with three columns between x=144 and x=1114; and a 1338px black footer with two main column groups between x=64 and x=1216.

Space tokens are rem-based: `--g-space-xxs` 0.25rem, `-xs` 0.5rem, `-xs_s` 0.75rem, `-s` 1rem, `-m` 1.5rem, `-l` 2rem, `-xl` 2.5rem, `-xxl` 3rem, `-3xl` 3.5rem, `-4xl` 4rem, `-4_5xl` 4.5rem, `-5xl` 5rem, `-6xl` 6rem. On the page the most used gaps are 8px, 4px, 32px and 24px and the most used paddings 24px, 16px and 64px. White space is generous: product shots float in large white fields.

## Elevation & Depth

There are no box-shadows on the page. Depth comes from photography (studio light on the hero, warm interiors in the men's image) and from the hard switch to the black footer. The token set defines a backdrop (`--g-color-backdrop: rgba(0,0,0,.4)`), hover shadow colours (`--g-color-hover-shadow: rgba(0,0,0,.1)`) and black opacity steps from 10% to 40% for overlays and dialogs.

## Shapes

Everything is square. The only radius measured on the page is `50%` (three uses, round icons). Images, the "SHOP NOW" boxes, inputs and bands all have 0px corners. Inputs in the footer are drawn as a single bottom line with an arrow at the right, not as boxes.

## Components

- **Header**: white, 72px (`--g-header-expanded-height: 72px`, `--g-header-padding: 12px`), 12px/500 links, centred wordmark, icon actions at right.
- **Image CTA** ("SHOP NOW"): a small white rectangle with black uppercase text placed over the hero image, square corners.
- **Section title**: 16px/700 uppercase, centred.
- **Service tile**: square photograph, uppercase 16px/700 title, underlined 12px link.
- **Footer input**: transparent, white 16px weight-100 text with -0.64px tracking, `16px 40px 8px 0px` padding, 39px tall, a thin underline and an arrow button.
- **Footer**: black, 12px uppercase column headings, underlined white links, sister-brand logos, and the full-width serif GUCCI wordmark.

## Design System Architecture

No public Gucci design-system documentation could be opened; gucci.com could not be fetched for the about page. The shipped page exposes a structured token set with a `--g-` prefix: colours by role (`--g-color-background`, `--g-color-foreground`, `--g-color-divider`, `--g-color-error`, plus `-inversed` variants for dark contexts and brand-extension colours such as `--g-color-gucci-osteria`), font families (`--g-font-family-primary`, `--g-font-family-display`), a named weight scale (`--g-font-weight-light` 100, `-regular` 300, `-book` 400, `-medium` 500, `-bold` 700), typography roles (`--g-display-*`, `--g-title-*`, `--g-text-*` with size, weight, line height, tracking and text-transform), spacing (`--g-space-*`) and header behaviour (`--g-header-transition-timing-function: cubic-bezier(.5, 0, 0, 1)`). Third-party libraries add their own variables (`--toastify-*`, `--swiper-theme-color`), which are not brand values. Rebuild with role tokens and a single sans family carrying all hierarchy through weight, case and tracking.

## Do's and Don'ts

**Do**
- Use only black and white on the page; let photography supply colour.
- Set all type in Gucci Sans Pro with negative tracking (-0.36px at 12px, -0.48px to -0.64px at 16px, -0.96px at 32px).
- Use uppercase 700 for short titles and weight 100 for large statements.
- Keep every shape square and every input a single underline.
- Give product shots large white fields.

**Don't**
- Don't add coloured buttons or accents to the home page.
- Don't round corners or add shadows.
- Don't use the browser-default `#0000ee` recorded on an image link as a brand colour.
- Don't treat the cookie or region drawers hidden during measurement as brand UI.

## Responsive Behavior

Not measured: the extractor's mobile pass received an "Access Denied" error page (Times, with an edgesuite.net error reference) instead of the site, so no mobile values are recorded. The stylesheet's breakpoints are mostly `min-width 1024px` (723 rules), `min-width 768px` (130) and `min-width 1440px` (66), with a few `max-width` queries at 1023px and 767px. How the header, product band and service grid change at these widths is not measured.

## Iteration Guide

1. Start with white `#ffffff` bands, black `#000000` text and a black footer.
2. Use Gucci Sans Pro for everything; set tracking negative on every size.
3. Build hierarchy with weight and case: 700 uppercase for titles, 100 for statements, 500 for navigation.
4. Keep everything square; draw inputs as underlines.
5. Use the `--g-*` role tokens for any state colour (error `#cc0000`, success `#006633`).
6. Re-measure the mobile site without the bot block, and measure product listing pages before adding tokens for filters, prices or product cards.
