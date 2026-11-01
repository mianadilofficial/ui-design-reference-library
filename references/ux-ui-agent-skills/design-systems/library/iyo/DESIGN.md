---
version: alpha
name: iyO
category: "Retail & E-commerce"
description: "Dark, near-black (#101010) home page for iyO, a maker of agentic voice computers: pearl-grey #dddee3 type, a three-face stack of Magnetik 33.6px display, Roobert Regular and Nbarchitekproneue 9.6px body, a floating pill nav, 12.8px to 42px radii and no shadows."
colors:
  canvas: "#101010"
  ink: "#dddee3"
  primary: "#dddee3"
  hairline: "#8a8a8a1a"
  nav-bg: "#000000"
  nav-link-text: "#ffffff"
typography:
  display:
    fontFamily: Magnetik, Arial, sans-serif
    fontSize: 33.6px
    fontWeight: 400
    lineHeight: 36.8px
  display-mobile:
    fontFamily: "\"Roobert Regular\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: "-0.16px"
  body:
    fontFamily: Nbarchitekproneue, Arial, sans-serif
    fontSize: 9.6px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.672px
  nav:
    fontFamily: Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 12.8px
  sm: 14.4px
  md: 20px
  lg: 42px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 2.88px
  s3: 4px
  s4: 5.6px
  s5: 8.16px
  s6: 11.2px
  s7: 16px
  s8: 26px
  s9: 32px
  s10: 40px
components:
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
---

## Overview

The measured page is `https://www.iyo.ai/`, titled "iyO. Computers you can talk to." It is a single 1,280 by 800px screen with no scroll (`scrollHeight` 800). The whole viewport is a near-black field (`#101010`) filled with a grainy, stippled light form: a rounded square with a soft glowing dot at its centre, surrounded by faint rounded outlines. At the top centre floats a dark pill-shaped bar holding the iyO wordmark, a grid-of-dots menu button, a thin divider and a round bag button with a cart count. At the bottom left the h1 reads "We make agentic computers you can talk to" in two lines, with the second half ("you can talk to") rendered in a dimmer grey than the first. At the bottom right a tiny "SHOP NOW" label sits next to a small rounded product thumbnail.

The product line named on the site is the iyO One, iyO yO, VAD Pro, iyO Wand, iyO Caps and the iyO App; the navigation list in the extraction shows "iyO One, iyO yO, VAD Pro, iyO Wand". The tone is sparse and futuristic: very little copy, a single large statement, and all explanatory content pushed into the menu. A page-fetch of the site confirmed it describes the devices as "agentic computers you can talk to" and links to product pages and the iyO app, with no brand-guidelines or design-system link.

## Colors

The palette is two values of grey on near-black.

- **Canvas `#101010`** (`colors.canvas`): the root `--black` variable and the capture background.
- **Ink `#dddee3`** (`colors.ink`, `colors.primary`): the root `--pearl-white` variable; it carries 105 weighted characters, including the h1 and the footer line. No saturated action color exists on the page, so primary reuses the pearl grey.
- **Nav background `#000000`** (`colors.nav-bg`) and **nav link text `#ffffff`** (`colors.nav-link-text`).
- **Hairline `#8a8a8a1a`** (`colors.hairline`): the faint 4-occurrence border color, about 10% opacity grey.
- Other root variables published by the site: `--white-5` `#dddee30d`, `--light-black` `#151515`, `--white` `#f9f9fb`, `--black-50` `#10101080`, `--dark-grey` `#242426`, `--dark-grey-lighter` `#303030`, `--almost-white` `#edeced`. Of these, `#edeced` was measured as the fill of the mobile "Shop now" button (see Responsive Behavior). The others are not promoted to tokens because they were not measured on a rendered element.
- Background areas by weight include translucent greys (`#38383899`, `#11111180`, `#d9d9d980`), which are the pill bar and glass surfaces over the particle field.

## Typography

Three families are loaded: **Magnetik** 400, **Roobert Regular** 400 and **Nbarchitekproneue** 400. All text is weight 400.

- **Display** (Magnetik): 33.6px / 36.8px, no letter-spacing, used for the hero statement.
- **Body** (Nbarchitekproneue): 9.6px / 16px with 0.672px tracking, a small mono-flavoured label style used for footer and "SHOP NOW" text.
- **Nav** (Arial, "Helvetica Neue", Helvetica): 14px / 20px for icon-button text.
- **Menu text** (Roobert Regular): 16px / 19.2px, tracking -0.16px (this is the `display-mobile` token: the mobile pass measured its "h1" as the menu entry "iyO One", so the token documents the menu item style rather than a headline).
- By character count: Nbarchitekproneue 70, Roobert Regular 44, Magnetik 34. Sizes: 16px (43), 11.2px (36), 9.6px (35), 33.6px (34).

Magnetik, Roobert and Nbarchitekproneue are commercial or foundry faces; free substitutes are not cited by the site. Arial is the declared fallback.

## Layout

- Viewport 1,280px by 800px; the page is a fixed screen, not a scroller.
- The navigation is a centred floating pill near the top; the hero text is anchored bottom left; the shop prompt is anchored bottom right. Everything else is generative imagery.
- Spacing scale from measured gaps and paddings: 2.4, 2.88, 4, 5.6, 8.16, 11.2, 16, 26, 32, 40px. The commonest gap is 16px (12 occurrences); 40px padding appears 5 times.
- Layout is asymmetric: copy hugs the lower-left corner and the viewport centre is left empty for the particle figure.

## Elevation & Depth

No box shadows were measured. Depth is created by translucent glass surfaces (`#38383899`) and hairline borders (`#8a8a8a1a`), and by the grain and glow of the particle artwork against the flat `#101010` field. Layers do not cast shadows; they separate by tone.

## Shapes

Measured radii: 12.8px (6 elements), 14.4px (4), 42px (2), 100% (2, the circular buttons) and 20px (1). Tokens: `xs` 12.8px, `sm` 14.4px, `md` 20px, `lg` 42px and `pill` 9999px. The nav pill and the menu and bag buttons are fully round; the hero artwork itself is a squircle-like rounded square. Mobile "Shop now" has a measured radius of 19.5px.

## Components

- **Floating nav pill (`nav`)**: black `#000000` bar with wordmark at the left and icon buttons at the right; link/icon text `#ffffff`, 14px Arial.
- **Icon buttons**: circular (100% radius), containing a dot-grid menu icon and a bag icon with a small count badge.
- **Hero statement**: Magnetik 33.6px, `#dddee3`, with the trailing phrase dimmed.
- **Shop prompt**: 9.6px uppercase-looking label with a rounded product thumbnail at the bottom right.
- **Mobile Shop now button**: `#edeced` fill, `#101010` text, 10.335px/14.625px with 0.72345px tracking, 19.5px radius, 29px by 83px (measured in the 390px pass only). The desktop extraction detected no primary button, so no `button-primary` token is declared.

## Design System Architecture

No public design system exists for iyO that the site links to. The de-facto system is a set of root custom properties named by color: `--pearl-white`, `--white-5`, `--light-black`, `--white`, `--black-50`, `--dark-grey`, `--dark-grey-lighter`, `--almost-white` and `--black`. There are no spacing, type or radius variables; those values are written directly in component CSS. Consequently the spacing and radius tokens above come from measured computed styles, not from named variables. The site is built around a canvas-style generative visual and a small set of glass components.

## Do's and Don'ts

- Do keep the canvas `#101010` and the type `#dddee3`; use `#ffffff` only for nav icons and links.
- Do use rounded or fully round shapes for every control.
- Do let one large statement carry the page; keep supporting copy at 9.6px.
- Don't add drop shadows; none were measured.
- Don't introduce a saturated accent; none exists on the page.
- Don't set body text in weights other than 400.
- Don't use sharp-cornered rectangles for buttons or bars.

## Responsive Behavior

Measured at 390px width: the navigation list is 844px high, full width (390px) and still `#000000`; the first heading found is the menu item "iyO One" at 16px/19.2px; body text stays 9.6px/16px; the "Shop now" button appears as an `#edeced` pill (83px by 29px, radius 19.5px). Mobile character sizes: 10.335px (144), 13.26px (56), 16px (43), 9.6px (35), 19.2px (34). How the hero artwork or layout reflows is not measured.

## Iteration Guide

1. Set the canvas to `#101010` and text to `#dddee3`.
2. Use Magnetik at 33.6px/36.8px for the single hero statement; Nbarchitekproneue 9.6px with 0.672px tracking for labels.
3. Build the nav as a floating `#000000` pill with circular icon buttons.
4. Pull radii from 12.8, 14.4, 20, 42px and 9999px.
5. Space with the 2.4 to 40px scale; use 16px as the default gap.
6. Avoid shadows and colored accents.

## Imagery and Microcopy

The imagery is a single generative piece: a stippled, grain-like light form on the dark field, with a rounded square outline and a soft glowing dot at the centre. No photography fills the first viewport apart from a tiny product thumbnail at the bottom right. Microcopy is minimal and lower-case in feel: "We make agentic computers you can talk to", "SHOP NOW", and a footer line ending "all rights reserved". Product names keep the brand's lower-case-i, capital-O spelling (iyO One, iyO yO, iyO Wand, iyO Caps). The bag button shows a count, so commerce is present but visually secondary to the statement.
