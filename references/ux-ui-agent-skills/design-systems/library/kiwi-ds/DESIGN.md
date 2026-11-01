---
version: alpha
name: Kiwi.com
category: "Design Systems"
description: "The Kiwi.com travel-booking home (kiwi.com/en): circular type at 28px/700 headings and 16px body, deep green primary #007061 on 12px-radius 52px CTAs, brighter green #008f7b for the search button, ink #252a31, cloud-grey canvas #f5f7f9 and mint tint #e1f4f3, over photography and 3D illustrations."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f7f9"
  ink: "#252a31"
  ink-secondary: "#4f5e71"
  primary: "#007061"
  on-primary: "#ffffff"
  primary-hover: "#005c4f"
  product-normal: "#008f7b"
  surface-mint: "#e1f4f3"
  accent-mint: "#03efcd"
  green-darkest: "#004239"
  hairline: "#e8edf1"
typography:
  display:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  subheading:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button-secondary:
    fontFamily: circular, "circular Fallback", -apple-system, "San Francisco", "Segoe UI", "Helvetica Neue", "Lucida Grande", sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  pill: 9999px
spacing:
  s1: 3.75px
  s2: 4px
  s3: 6px
  s4: 7.5px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 22.5px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 28px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.product-normal}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 0px 16px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.product-normal}"
    padding: 12px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 8px
    height: 44px
  card:
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(79, 94, 113, 0.08) 0px 2px 6px 0px, rgba(79, 94, 113, 0.12) 0px 0px 2px 0px, rgba(41, 47, 55, 0.3) 0px 0px 1px 0px
  footer:
    textColor: "{colors.ink}"
---

## Overview

This file describes the English home page of Kiwi.com (`https://www.kiwi.com/en/`, title "Kiwi.com | Find Cheap Flights & Discover New Destinations"), an online travel-booking company. The page is built around search. A white header carries the circular Kiwi.com wordmark, the primary links (Flights, Cars, Hotels, Magazine, Extras, Last minute), a currency selector (THB), "Help & support" and "Sign in". Under it a pale mint gradient hero, with a faint pixel-block pattern at the top right, holds the h1 "Fly for less, Guaranteed!", a "Search / AI Mode BETA" toggle, and a white search card with trip-type, class and passenger selectors, From and To fields (From shows a green "Bangkok" chip), Departure and Return fields and a green "Explore" button.

A dark green strip below it reads "No membership fees, no hidden charges." Then comes a mint-tinted loyalty section: "Loyalty program, Kiwi.com Club", "One booking and you're in", a deep-green "Join for free" button, and a 3D illustration of two figures with luggage next to voucher cards. A "The new Kiwi.com guarantee, Live Boarding Pass" banner follows, then "Popular destinations from Bangkok" as a photo grid (Tokyo, Phuket City, Krabi, each with "Tickets from ฿ ..." in white text on a darkened photograph), a newsletter sign-up card, a mobile-app promotion with a QR code and store badges, and "Popular flights" at the bottom.

Voice is friendly and promise-led ("Fly for less, Guaranteed!", "One booking and you're in", "No membership fees, no hidden charges"). Imagery mixes real destination photography with soft, rounded 3D illustrations. White text over photography appears only on the destination tiles, where the photos are darkened at the bottom. The measured text colors are for page text on white and pale surfaces; no h1 sits on a photograph.

## Colors

- **Canvas `#ffffff`** is the header, cards and form fields; **page-largest `#f5f7f9`** is the widest background area (the site's `--color-cloud-light` and `--color-elevation-suppressed`).
- **Ink `#252a31`** is the heading and body text (`--color-heading-foreground`, `--color-ink-dark`), about 1,624 weighted characters; **ink-secondary `#4f5e71`** is secondary text (`--color-text-secondary-foreground`).
- **Primary `#007061`** is the fill of the "Join for free" CTA, and the same value is `--color-product-dark` and the link color (`--color-text-link-primary-foreground`); **primary-hover `#005c4f`** is the measured hover fill.
- **Product-normal `#008f7b`** is the brighter green used on the "Explore" button and the nav text (`--color-product-normal`, `--color-button-primary-background` in the CSS).
- **Surface mint `#e1f4f3`** is the pale green tint (`--color-product-light`) behind promotional sections.
- **Accent mint `#03efcd`** is a bright aqua measured on a few characters (about 38 weighted); **green-darkest `#004239`** is the deepest green text (`--color-product-darker` is `#003d35`, a separate nearby value).
- **Hairline `#e8edf1`** is the most common border (`--color-cloud-normal`).

The CSS also defines blue info `#0070c8`, critical red `#d21c1c`, success green `#048724`, warning orange `#b36200` and a bundle palette; these are status colors and are not exercised enough in the capture to be tokens.

## Typography

One family: **circular** (400, 500 and 700 loaded, with a generated "circular Fallback"), declared in `--font-base` and `--font-circular` ahead of -apple-system, San Francisco, Segoe UI, Helvetica Neue and Lucida Grande. Letter-spacing is normal except for tiny 10px labels at 1px.

- **Display** (h1): 28px, 700, line height 36px.
- **Heading** (h2 "Loyalty program Kiwi.com Club"): 24px, 700, 32px.
- **Subheading** (h3 "One booking and you're in"): 20px, 700, 28px.
- **Body**: 16px, 400, line height 24px.
- **Button**: 16px, 500, line height 16px; **button-secondary** 15px, 500, line height 15px.
- **Nav / links**: 15px, 400, line height 22.5px.

The most used size by characters is 15px (1,245), then 16px, 28px, 20px and 18px. The scale is compact: the h1 is 28px. The root variables name the scale (`--text-heading-title0` 28px through `--text-heading-title6` 13px, `--text-button-large` 16px, `--text-button-normal` 15px).

## Layout

The CSS defines `--spacing-content-small` of 1120px and a modal maximum of 1280px (`--spacing-modal-extra-large`); the navbar is 64px (`--navbar-height`, with 52px on responsive). Paddings are 16px, 12px and 24px most often, with 64px between larger sections; gaps are 16px, 24px and 12px. Hero search is a single wide white card. The destination grid is a two-column photo layout beside a newsletter card.

## Elevation & Depth

Depth is soft and cool. Cards share one layered shadow measured on 18 elements: `rgba(79, 94, 113, 0.08) 0px 2px 6px 0px`, `rgba(79, 94, 113, 0.12) 0px 0px 2px 0px` and `rgba(41, 47, 55, 0.3) 0px 0px 1px 0px`. The navigation bar uses `rgba(27, 50, 73, 0.08) 0px 2px 12px 0px`. The CSS also names `--drop-shadow-md` (0 3px 3px) and an inset active-button shadow. Elevation tokens `--color-elevation-flat` (white) and `--color-elevation-suppressed` (`#f5f7f9`) map to the white and grey surfaces.

## Shapes

Radii are `--radius-50` 2px, `--radius-100` 4px, `--radius-150` 6px, `--radius-200` 8px, `--radius-300` 12px and pills (9999px). The most frequent are 6px (29 elements, cards and inputs), 8px (22, secondary buttons and fields), 4px (16) and full pills (10, chips and toggles). The primary CTA is 12px; modals use 16px and dialogs 9px or 12px on mobile.

## Components

- **Primary button.** "Join for free": fill `#007061`, white label, circular 16px weight 500, height 52px, padding 0px 28px, radius 12px; hover `#005c4f`.
- **Secondary / search button.** "Explore": fill `#008f7b`, white label, 15px weight 500, height 44px, padding 0px 16px, radius 8px.
- **Navigation.** White, 64px tall, 12px padding, links 15px; the active "Flights" link is green.
- **Text input.** 44px tall, padding 0px 8px, ink text, 16px weight 500, within the search card.
- **Card.** 6px radius, the layered cool shadow above, white fill.
- **Chip / toggle.** Pill-shaped (9999px) such as the "Search / AI Mode" switch and the "Bangkok" chip.
- **Footer.** Ink `#252a31` text at 15px weight 700 for column headings (Company, Terms and Conditions, Privacy Policy and so on), about 487px tall.

A small floating "Feedback" tab at the page edge is a widget, not part of the component system.

## Design System Architecture

Kiwi.com's design system is **Orbit**. Its GitHub repository (https://github.com/kiwicom/orbit), which I opened, describes `orbit-components` as "a React component library that provides developers with the easiest possible way of building Kiwi.com's products", published on npm as `@kiwicom/orbit-components`, with an `@kiwicom/orbit-tailwind-preset` package for Tailwind CSS, MIT licensed. The preset's README states it provides the foundation styles (typography, colors, spacing) and gives Tailwind class examples such as `text-blue-normal`; design tokens are said to live in `@kiwicom/orbit-design-tokens`. The documentation site https://kiwicom.github.io/orbit rendered only a Storybook title when I opened it, so no values were read from it.

The live site is consistent with that Tailwind-based setup: its root custom properties are Tailwind-style names such as `--color-blue-normal`, `--color-product-normal`, `--color-ink-dark`, `--color-cloud-light`, `--radius-150`, `--spacing-600`, `--text-heading-title1` and component tokens like `--color-button-primary-background-hover`. Values in this file come from those live variables and from measurement, not from the Orbit docs.

The layering is: palette ramps (product, ink, cloud, blue, red, orange, green) with normal, hover and active steps; semantic roles (text, button, badge, form-element, alert, icon); and size tokens for spacing, radii, z-index, navbar heights and illustrations.

## Do's and Don'ts

- Do use `#007061` for the main call to action and `#008f7b` for the search action.
- Do set headings in circular 700 and body in 400, with buttons at weight 500.
- Do keep cards at 6px radius with the soft cool shadow and use 12px on large buttons.
- Do pair friendly 3D illustration with real destination photography.
- Don't place text directly on photographs without a darkened gradient.
- Don't use more than one saturated green on the same button row.
- Don't treat the Feedback tab as a component.
- Don't use the status colors (red, orange, blue) as brand colors.

## Responsive Behavior

The CSS defines a small `--breakpoint-lm` of 576px and container sizes (`--container-sm` 24rem through `--container-6xl` 72rem); the form height variable changes from 64px on mobile and tablet to 141px at large desktop and 193px at desktop, and the navbar drops from 64px to 52px on responsive layouts. The 390px mobile measurement was captured but no mobile h1 token is generated, so the h1 size on mobile is not stated here.

## Iteration Guide

1. Canvas `#ffffff`, grey band `#f5f7f9`, ink `#252a31`, primary `#007061`, search green `#008f7b`.
2. Type in circular: 28/36, 24/32, 20/28 at 700; body 16/24; buttons 16 at 500.
3. CTAs: 52px high, 0px 28px padding, 12px radius; secondary 44px, 8px radius.
4. Cards at 6px radius with the layered 8% shadow; promos on `#e1f4f3`.
5. Test every new color against the live `--color-*` variables.
