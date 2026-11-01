---
version: alpha
name: Pedestal
category: "Retail & E-commerce"
description: "Pedestal, the Danish-design TV stand brand: pale #fafafa canvas with #eeeeee tiles and #212121 ink, FK Display at 160px with -6.4px tracking, Suisse Intl at weights 400 to 500, near-square 2px and 4px corners, and a flat dark #212121 Configure button."
colors:
  canvas: "#fafafa"
  page-largest: "#eeeeee"
  ink: "#212121"
  primary: "#212121"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-muted: "#212121a6"
  ink-gray: "#b3b3b3"
  ink-faint: "#21212173"
  ink-light: "#eaeaea"
  hairline: "#ffffff40"
  card-bg: "#ffffff1a"
typography:
  display:
    fontFamily: "\"FK Display\", Helvetica, Arial, \"sans-serif\""
    fontSize: 160px
    fontWeight: 400
    lineHeight: 160px
    letterSpacing: "-6.4px"
  display-mobile:
    fontFamily: "\"FK Display\", Helvetica, Arial, \"sans-serif\""
    fontSize: 80px
    fontWeight: 400
    lineHeight: 80px
    letterSpacing: "-3.2px"
  subheading:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: "-0.13008px"
  body:
    fontFamily: "\"Suisse Intl\", Helvetica, Arial, \"sans-serif\""
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
    letterSpacing: 0.65008px
    textTransform: uppercase
  button:
    fontFamily: "\"Suisse Intl\", Helvetica, Arial, \"sans-serif\""
    fontSize: 15px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: "-0.15008px"
  nav:
    fontFamily: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Suisse Intl\", Helvetica, Arial, \"sans-serif\""
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-1.2px"
rounded:
  xs: 2px
  sm: 4px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px
    height: 74px
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 4px 24px 4px 40px
    height: 30px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
---

## Overview

Pedestal sells TV stands on wheels, power strips and cable accessories; the page title in the extraction is "Pedestal | Danish Design TV Stands on Wheels and Accessories" and the home page at https://www.pedestal.com/ measures 4105px tall at 1280px. The experience is editorial and product-photographic rather than catalogue-like. The opening screen is a black full-width stage holding a looping film clip, with a small "CHANNEL 001" label, four thumbnails and previous, pause and next controls at the right, a nod to a television. A thin black header carries the lowercase "pedestal" wordmark in white and a centred menu: Configure, TV Stands, Power, Accessories, Pro, with search, Universe and Cart at the right.

Under the stage come three tall category tiles (TV Stands, Power, Accessories) in warm, low-sun interior photography with a dark gradient strip behind the large white label; a light-grey "Planning your perfect TV setup?" configurator banner with a dark "Configure" button; two more tiles (Workspace Essentials, Cable Management); a huge "perspectives" wordmark introducing a visual journal with an "Explore all" link; a row of portrait tiles credited to named contributors; and a black footer with an oversized white "p" logomark, a newsletter form ("Get updates on products, upcoming launches, and exclusive drops."), link columns and payment marks.

A region prompt ("Are you in the right place?" with "International - EUR" and "Continue") sits above the header in the capture. It is a site-chooser popup and is not part of the brand UI documented here.

## Colors

The page background is `canvas` `#fafafa`. The largest measured area fill is `page-largest` `#eeeeee` (3538 area-weight units), used on the light tiles and banners. `ink` is `#212121`, which is also `primary`: the dark button, the footer block and the headline text are all this near-black. `on-primary` `#ffffff` is the text on photographs, on black stages and in the footer. `surface-black` `#000000` is the film stage and header.

Secondary text colours are alpha and grey values measured by characters: `ink-muted` `#212121a6` (the soft grey second line of banner headlines such as "We've got your back with pedestal studio."), `ink-faint` `#21212173`, `ink-gray` `#b3b3b3` (small section labels in the footer, such as "Services"), and `ink-light` `#eaeaea`. `hairline` `#ffffff40` is the translucent white rule on dark areas and `card-bg` `#ffffff1a` is a translucent white fill. The site also exposes a smart-search widget variable `--rb-smart-search-results-button-background-color: #2491C4`; this belongs to a third-party search plug-in and is not used as a brand colour. Colour in the brand comes from the photography (red castors, orange flowers, a lime plate), never from interface fills.

## Typography

Three families are measured. FK Display (weight 400) is the display face: 160px with 160px line height and -6.4px tracking on headlines such as "New colours. Same iconic silhouette" and the huge "perspectives" wordmark; on mobile it is 80px/80px with -3.2px tracking. Suisse Intl (400, 500, 600 loaded) is the text and button face: 15px at weight 500 with -0.15008px tracking for buttons, 13px uppercase at weight 500 with +0.65008px tracking for captions and tile credits, and 40px at 400 with -1.2px tracking for the tile labels ("TV Stands"). The system sans stack (`ui-sans-serif, system-ui, ...`) sets the 16px navigation links and the 13px small labels.

FK Display and Suisse Intl are commercial faces; if unavailable, the declared fallbacks are Helvetica and Arial. Sizes also measured include 11px, 16px and 20px. Headlines are weight 400 with strongly negative tracking (about -4 percent at 160px); do not bold them.

## Layout

The page alternates full-bleed film, tile grids and quiet text bands. Category tiles sit in equal columns separated by thin white gutters: three columns for the main categories, two for Workspace Essentials and Cable Management, each tile about the height of a portrait photograph with the label top-left. The banner is a single wide light-grey tile with the artwork left and the headline and button in the right half. The "perspectives" block places the wordmark across the full width and the explanatory sentence in the right half. Portrait tiles are placeholders of `#eeeeee` in the capture. The footer is a two-part block: the large white "p" at left, form and link columns at right.

The header is 96px high including the prompt strip in the measurement; the page's own CSS variable `--header-height` is `3rem`, and `--head-product-ui-desktop-height` is `8.75rem`. Gaps are small and tight; the spacing tokens listed are the measured padding and gap values from 2px to 12px.

## Elevation & Depth

The extraction recorded no box shadows at all (an empty `boxShadows` list). Depth is created by photography, by a dark gradient strip behind tile labels so the white label stays legible, and by translucent white fills (`#ffffff1a`, `#ffffff12`) over dark areas. Scrims measured on the page were hidden (reported as consent overlays). Keep cards flat with no shadow.

## Shapes

Only two radii exist: 2px (50 elements) and 4px (27 elements). Tiles and photographs are square or nearly so, buttons use 4px, and inputs sit in near-square cells. Pills, circles and large radii are not used apart from the circular country badge and logo glyphs.

## Components

**Primary button ("Configure").** `#212121` fill, `#ffffff` 15px weight-500 text, 4px radius, 4px padding and 74px height in the measured banner instance (203px wide); the label sits at the top-left and a small icon at the top-right, so the button reads as a square card. Another dark button on the page, the popup's "Continue", measured at 32px height with 4px 24px padding and a `#111111` hover colour; that is a popup control and is not used as the brand button.

**Category tile link.** A tile of 520px height with a 40px white label in Suisse Intl 400 on a dark gradient band; the tile's measured background is `#eeeeee`.

**Navigation.** 16px white system-sans links on black, no underline, no pills.

**Text input.** 15px weight 500, padding 4px 24px 4px 40px, 30px height; the footer newsletter fields are dark translucent boxes with a white "Sign up" button.

**Footer.** `#212121` fill, white 17px lead text, 13px grey link columns (Services, Pedestal, Follow us).

## Design System Architecture

No public Pedestal design system or brand-guideline page was opened for this document, so there is no official token source to cite; the de-facto system comes from the shipped CSS. The root variables include Tailwind-style custom properties (`--tw-ring-offset-shadow`, `--tw-ring-shadow`), layout variables (`--header-height`, `--head-product-ui-desktop-height`, `--header-color: #212121`), and plug-in variables from a smart-search vendor (names beginning `--rb-smart-search-`). The scrim class names in the page data also read as Tailwind utility strings (`fixed left-0 top-0 z-30 h-full w-full`), so the front end is built from utility classes with a small custom stylesheet for fonts and the header.

## Do's and Don'ts

- Do set headlines in FK Display at weight 400 with tight negative tracking and let photography carry colour.
- Do use `#fafafa` and `#eeeeee` as the page and tile grounds and `#212121` for text, buttons and the footer.
- Do keep corners at 2px or 4px and leave tiles flat with no shadow.
- Do put labels over photographs in white with a dark gradient band behind.
- Do write calm, confident copy such as "Planning your perfect TV setup?".
- Don't introduce a bright interface colour; the blue search-widget variable is not part of the brand.
- Don't document or reuse the region prompt, cookie scrims or the Trusted Shops badge as brand UI.
- Don't use pill or large-radius buttons.

## Responsive Behavior

The 390px mobile pass recorded type only: the h1 becomes 80px/80px at weight 400 (letter spacing -3.2px per the token), body text 24px/28.8px at 400, and the primary button remains 15px at weight 500. Navigation, tile column counts and spacing at mobile width are not measured.

## Iteration Guide

1. Start with `canvas` `#fafafa`, `ink` `#212121` text, `page-largest` `#eeeeee` tiles.
2. Set one huge FK Display headline per section at 160px/-6.4px (80px on mobile).
3. Add full-bleed warm interior photography in tiles with a 40px white label.
4. Use one dark 4px-radius button per banner with an icon at the corner.
5. Finish with a `#212121` footer, a large white logomark and 13px grey link columns.
6. Check with `node web/scripts/verify-designs.mjs --slug=pedestal`.
