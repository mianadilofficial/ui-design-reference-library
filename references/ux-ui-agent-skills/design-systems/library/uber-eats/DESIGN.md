---
version: alpha
name: Uber Eats
category: "Logistics & Mobility"
description: "Uber Eats home page measured live: a pure white canvas (#ffffff) with black (#000000) text and black buttons, set in Uber's proprietary UberMove (700, 52px h1) and UberMoveText (500, 16px body), with an 8px-radius search button, 9999px pill header buttons and a warm photographic hero."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface: "#e2a257"
  surface-3: "#e8e8e8"
  hairline: "#f3f3f3"
  primary-hover: "#282828"
typography:
  display:
    fontFamily: UberMove, sans-serif
    fontSize: 52px
    fontWeight: 700
    lineHeight: 64px
  heading:
    fontFamily: UberMove, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
  body:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  button:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
  input:
    fontFamily: UberMoveText, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 24px
  s5: 40px
  s6: 72px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 12px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 8px 0px, rgba(0, 0, 0, 0.04) 0px 4px 4px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 40px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 72px 0px 88px
    borderColor: "{colors.hairline}"
---

## Overview

This DESIGN.md documents the Uber Eats consumer home page at https://www.ubereats.com/, measured from the live site (extraction final URL https://www.ubereats.com/, page title "Uber Eats | Food & Grocery Delivery | Order Groceries and Food Online", language en-US). The page is a monochrome interface: a white canvas (`canvas` #ffffff), black text (`ink` #000000) and black fills for every action. All measured text is either #000000 (1,316 characters) or #ffffff (25 characters); there is no chromatic accent in the measured UI. Colour comes only from photography.

The top of the page is a full-bleed food photograph (burgers, fries, a red can on a wooden table). Over it sit the h1 "Order delivery near you" at 52px, a delivery-address field, a "Deliver now" selector and a black "Search here" button. Below the hero the page falls back to white: three image-led tiles ("Feed your employees", "Your restaurant, delivered", "Deliver with Uber Eats") each with an underlined text link, a "Cities near me" section with a map and a four-column text list of city names, and a "Countries with Uber Eats" list. The voice is short, imperative and plain: "Order delivery near you", "Search here", "Sign up to deliver".

## Colors

The measured palette is deliberately tiny. `canvas` #ffffff is the dominant page background. `ink` #000000 is both the text colour and the fill of `button-primary`; `primary` is the same #000000, and `on-primary` #ffffff is the label colour on black buttons. `primary-hover` #282828 is the measured fill of the primary button after hover. `surface-3` #e8e8e8 and `hairline` #f3f3f3 are the only neutral greys; the hairline is the footer's 1px border colour and also the inset 1px bottom line in an inset box shadow.

`surface` #e2a257 was measured as a background-colour area on the hero region, where the capture shows a photograph; treat it as a measurement of that hero region, not as a UI colour to reuse for components. The site's CSS custom properties expose a much larger set of `--base-*` colour primitives (for example --base-blue-79 #79bdfc, --base-orange-79 #fea65d, --base-indigo-87 #ceccfd, --base-taupe-83 #cec5bb) that belong to Uber's shared Base token layer; they are defined in the stylesheet but the rendered home page uses none of them for text or controls, so they are not part of this file's frontmatter.

## Typography

Two proprietary families are loaded: UberMove (weight 700 only) for headlines and UberMoveText (weights 400 and 500) for everything else; Montserrat 400 is also loaded. By character count UberMoveText carries 1,213 characters and UberMove 128. The measured h1 is UberMove 700 at 52px / 64px line height ("Order delivery near you"); the h2 "Cities near me" is UberMove 700 at 36px / 44px. Body copy is UberMoveText 500 at 16px / 20px, the button label is UberMoveText 500 at 18px / 24px, links are 500 at 14px / 16px, and the address input is 400 at 16px / 24px. Other measured sizes are 28px (67 characters, section tile titles) and the 14px and 16px workhorse sizes. Letter spacing is "normal" on every measured role.

UberMove and UberMoveText are Uber's own typefaces and are not publicly licensed for general use. The frontmatter font stacks already name their fallbacks: UberMove falls back to sans-serif, UberMoveText to system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif. When a faithful rebuild cannot license the fonts, use the system-ui stack for UberMoveText and keep weights 700 for headlines, 500 for UI text.

## Layout

The measured page is 1280px wide and 3,236px tall at the desktop viewport. Content is left-aligned to a 30px-from-edge margin in the capture, with the hero headline, search row and section titles all sharing that left edge. Measured spacing values are 8, 12, 16, 24, 40 and 72px (`s1`–`s6`); the footer uses 72px top and 88px bottom padding. Gaps measured between items are 24px, 8px and 16px. The tile row is three equal columns of photograph above an h3-style title and a link; the city and country lists are four-column text grids with no cards or borders.

## Elevation & Depth

Depth is almost absent. Three shadows were measured: a soft `rgba(0, 0, 0, 0.12) 0px 4px 16px 0px` (24 uses, the most common), a two-layer `rgba(0, 0, 0, 0.1) 0px 0px 8px 0px, rgba(0, 0, 0, 0.04) 0px 4px 4px 0px` on the pill header buttons, and a 1px inset bottom line `rgb(243, 243, 243) 0px -1px 0px 0px inset`. The hero search controls sit directly on the photograph with no shadow; separation comes from the white field against the image.

## Shapes

Measured border radii are 50% (49 elements, circular map pins and avatar-like icons), 8px (4), 500px (4, pills) and 15% (1). The `rounded` tokens are `xs` 8px and `pill` 9999px. The large "Search here" button uses 8px; the header "Log in" and "Sign up" buttons use the pill radius. The address input and tile photographs measured 0px radius, so the field and imagery read as hard-edged rectangles.

## Components

`button-primary` is the "Search here" button: black fill, white UberMoveText 500 18px label, 8px radius, 12px 16px padding, 56px tall, 132px wide. Its hover state fills #282828. `button-secondary` is the header "Sign up" pill: black fill, white 14px label, 9999px radius, 12px padding, 36px tall, with the two-layer shadow above; the neighbouring "Log in" pill measured white fill with a black border colour and the same shadow. `text-input` is the delivery address field: white background, black 16px text, 40px tall and 420px wide. `link` is black 14px text, underlined in the capture ("Sign In", "Create a business account"). `footer` is white with a 1px #f3f3f3 border and 72px 0px 88px padding, listing items such as "Get Help", "Buy gift cards", "Add your restaurant" and "Sign up to deliver".

## Design System Architecture

Uber publishes its design system as "Base". The page's `:root` carries custom properties with a `--base-` prefix, for example `--base-typography-headline-xl-medium-font-family`, `--base-typography-mono-headline-xl-medium-font-family` (UberMoveMono, "Lucida Console", Monaco, monospace), `--base-typography-headline-m-medium-letter-spacing` (0.3px) and `--base-elevation-mid-key-*` shadow parts. The page at https://base.uber.com was opened; the fetch returned only the title "Base design system", so no further claims are taken from it. The de-facto system seen on the home page is: black/white only, one headline face, one text face, three radii, and three shadows.

## Do's and Don'ts

Do keep the interface black on white, with photography supplying all colour. Do use #000000 fills with white labels for primary actions and the 8px radius for the large search button, the pill radius for header buttons. Do set headlines in UberMove 700 and UI text in UberMoveText 500. Do use plain imperative microcopy.

Don't add an accent colour to buttons or links; none was measured. Don't use #e2a257 as a component colour. Don't add shadows to the search row or inputs. Don't round the address input or the tile photographs; they measured 0px.

## Responsive Behavior

The extraction's mobile pass recorded the same role sizes as desktop (h1 52px / 64px, h2 36px / 44px, body 16px / 20px) and did not record a mobile button, navigation or breakpoint. Breakpoints, column collapse and menu behaviour are not measured.

## Iteration Guide

1. Start from `canvas` #ffffff and `ink` #000000; add no accent.
2. Build the hero as a photograph with the 52px UberMove 700 h1 and a row of white field, selector and black 56px button (8px radius).
3. Use `button-secondary` pills at 36px height for header Log in / Sign up.
4. Keep section titles at 36px / 44px and lists as four-column plain text.
5. Re-run `node web/scripts/verify-designs.mjs --slug=uber-eats` after any token rename.
