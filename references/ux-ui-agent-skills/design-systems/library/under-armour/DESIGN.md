---
version: alpha
name: Under Armour
category: "Sports & Fitness"
description: "Under Armour US home page measured live: near-black #1d1d1d header and text on white, grey #f0f0f0 footer, NeuePlakUA in 800-weight uppercase at 64px with 2px tracking for hero headlines, white pill buttons (44px, 9999px radius) over photography, and a #00834b green for promo notes."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1d"
  primary: "#ffffff"
  on-primary: "#1d1d1d"
  surface-3: "#f0f0f0"
  ink-2: "#5f5f5f"
  ink-4: "#00834b"
  ink-5: "#000000"
  ink-6: "#949494"
typography:
  display:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 64px
    fontWeight: 800
    lineHeight: 64px
    letterSpacing: 2px
    textTransform: uppercase
  display-mobile:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: 0.25px
    textTransform: uppercase
  heading:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 20px
  subheading:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
  nav:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1428px
  button-secondary:
    fontFamily: NeuePlak, ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  input:
    fontFamily: NeuePlakUA, "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.5px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 10px 0px
    height: 43px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 0px 40px 0px 0px
    height: 25px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    padding: 48.125px 0px
---

## Overview

This DESIGN.md documents the Under Armour US store home page measured from https://www.underarmour.com/en-us/ (title "Under Armour® Official Store | FREE Shipping Available", language en). A cookie consent black bar was detected and hidden before measurement. The page is built as an athletic retail storefront: a near-black header (#1d1d1d, 97px tall) with the logo mark at left, centred primary links New, Men, Women, Kids, Shoes, Discover and Outlet, a search field and account, favourites and bag icons at right, and a thin top strip with "FREE Standard Shipping on orders $75+ & FREE Returns", help, country and language controls and "Armour Access". Below sit a full-width lifestyle photograph hero ("WE LOVE FOOTBALL" with a white "Shop Football" pill), a "New Arrivals" product carousel on grey tiles, a four-image "New For Fall" row with underlined text links, and a fleece campaign banner ("IT'S FLEECE SEASON").

The tone is sporty and direct: uppercase headline slogans over action photography, sentence-case product names, price lines and promotional notes such as "25% Off Select Styles" in green. A floating "Feedback" tab on the right edge is a third-party control and is excluded from the tokens.

## Colors

`canvas` #ffffff is the dominant background (5,171 area weight) and `ink` #1d1d1d is both the main text colour (1,350 characters) and the header and secondary button fill (1,968 area weight). `ink-2` #5f5f5f is secondary text and the hover fill of the primary button (523 characters). `surface-3` #f0f0f0 is the footer and product-tile grey (718). `ink-4` #00834b is a green used for promotional text such as "Buy More, Save More on Select Outlet Styles" (107 characters). `ink-5` #000000 (19 characters) and `ink-6` #949494 (12 characters) are small utility text colours. `primary` is #ffffff because the detected primary action is a white pill with #1d1d1d text (`on-primary`). The stylesheet defines `--base-color-black` #1d1d1d, `--base-color-red` #dc0019, `--base-color-red-1` #e51b24, `--base-color-green` #00834b and `--color-dark-green` #008850; the reds did not render on the measured home page, so they are not in the frontmatter.

## Typography

The face is NeuePlakUA (weights 400, 600, 700 and 800–900), with a "NeuePlakUA Fallback", ARMOUR, Helvetica, Arial, sans-serif stack. NeuePlakUA carried 2,267 measured characters and NeuePlak 119. The hero h1 role measured as weight 800 at 64px / 64px, uppercase, letter spacing 2px (`display`); on mobile it is 40px / 40px, letter spacing 0.25px, uppercase (`display-mobile`). The other roles: `heading` 600 at 12px / 20px; `subheading` 600 at 14px / 24px (product names and the button label); `body` 400 at 16px / 24px with 0.5px letter spacing; `nav` 400 at 14px / 20px; `link` 400 at 12px / 17.1428px; the load-more `button-secondary` is NeuePlak 400 at 16px / 20.8px; the search `input` is 600 at 16px / 24px with 0.5px letter spacing. Sizes by character count: 12px (911), 14px (854), 10px (269), 16px (180), 64px (69), 32px (41). Weights: 400 (1,534), 600 (561), 700 (180), 800 (69), 500 (42). NeuePlakUA is a proprietary face; Helvetica and Arial are the declared fallbacks.

## Layout

The page measures 1280px wide and 5,589px tall; the header height variable is `--header-height` 97px. Full-bleed imagery runs edge to edge (the hero and fleece banner), while product rows start about 12px from the left page edge in the capture and use a continuous grid of equal tiles with small gaps. The carousel shows dots below the row and circular arrow buttons. Measured gaps: 2px (41), 8px (33), 16px (13), 24px (9), 10px, 80px, 32px and 4px; paddings: 10px, 20.3px, 16px, 56px, 8px, 1px, 6px, 24px, 20px, 4px, 12px, 14px and 48.125px (footer).

## Elevation & Depth

The only measured shadow is `rgba(29, 29, 29, 0.2) 0px 0px 8.75px 0px`, a soft 8.75px blur on one element. The product tiles and header are flat. Layering is via full-bleed photographs, solid #1d1d1d header and #f0f0f0 tiles. The stylesheet defines a focus shadow (`0 0 4px 2px var(--color-focus-shadow)`) used on interactive controls, not measured as a rendered state here.

## Shapes

Measured radii: 4px (15 elements), 1280px (5, the pill buttons), 50% (1) and 3px (1). Tokens: `xs` 3px, `sm` 4px, `pill` 9999px. White hero buttons are full pills at 44px; the dark "Load More - Media Gallery" button uses 4px. Product images and tiles are square-cornered.

## Components

`button-primary` ("Shop Football", "Shop Fleece"): white fill, #1d1d1d NeuePlakUA 600 14px label, pill radius, 0px 16px padding, 44px tall, 212px wide; hover fills #5f5f5f with white text. `button-secondary` ("Load More"): #1d1d1d fill, white 16px label, 4px radius, 10px 0px padding, 43px tall, 260px wide, 1px #1d1d1d border. `nav` is the #1d1d1d header with white 14px links; the measured `nav-link` is a visually hidden "Skip to main content" link (1px by 1px). `text-input` is the header search: white text on the dark header, 16px 600, 25px tall, 184px wide, with a magnifier icon. `link` is the white 12px promo line "FREE Standard Shipping on orders $75+ & FREE Returns" in the header strip (underlined). `footer` is #f0f0f0 with a "Stay in the loop." email signup, 48.125px vertical padding and #1d1d1d text.

## Design System Architecture

No public Under Armour design-system or brand-guideline site was opened. The shipped CSS exposes a token layer with `--base-color-*`, `--color-*`, `--spacing-*` (for example `--Carousel-round-pagination-size: var(--spacing-md)`), and component-scoped custom properties named by component (`--Radio-disabled-background-color`, `--Pagination-background-color`, `--Card-error-border-color`, `--Message-warning-text-color`, `--ScaleDiagram-circle-color`, `--form-field-*`). The de-facto system is thus a base-colour and spacing token layer feeding PascalCase component variables, with an Adyen payment SDK stylesheet also present in the corpus.

## Do's and Don'ts

Do keep the chrome near-black (#1d1d1d) and white and let action photography carry the page. Do set hero slogans in uppercase 800 weight with 2px tracking. Do use white pill buttons on imagery and #1d1d1d 4px-radius buttons on white. Do use #00834b for promotional notes.

Don't document the cookie bar or the Feedback tab as brand components. Don't use the red custom properties as UI colours without measuring them in use. Don't add heavy shadows. Don't use pill radii on product tiles.

## Responsive Behavior

The mobile pass (390px) recorded: h1 "WE LOVE FOOTBALL" at 40px / 40px weight 800; body 16px / 24px; the primary CTA at 14px weight 600, 212px by 44px, white fill; and a 390px by 99px header with 14px text. Mobile menu form, carousel behaviour and column counts are not measured.

## Iteration Guide

1. Start with #ffffff, #1d1d1d header, #f0f0f0 tiles and footer.
2. Set slogans in NeuePlakUA 800 uppercase 64px with 2px tracking.
3. Use white 44px pill CTAs on photographs; hover #5f5f5f.
4. Use #00834b only for promo notes.
5. Gate with `node web/scripts/verify-designs.mjs --slug=under-armour`.

## Additional Measurements

The extraction detected 119 characters in NeuePlak (without the UA suffix) used on the load-more button, and the h3 role (product name) measured 600 at 14px / 24px. Product tiles show a badge line with a flame icon and "NEW" or "NEW COLORS" in small bold caps, a product name, a grey category line and the price in black. Letter spacing is normal except on the display, body and input roles listed above.

The "New For Fall" row presents four equal square photographs (men, women, kids, shoes), each followed by a small underlined label link ("Shop Men", "Shop Women", "Shop Kids", "Shop Shoes"), while the fleece banner places the slogan "IT'S FLEECE SEASON" and a white "Shop Fleece" pill over video-style footage with a small partner credit at the upper right. Product cards place a heart icon at the top right of each grey tile. Borders measured on the page were #1d1d1d (2 uses) and #5f5f5f (1 use), so outlines are rare and always dark.
