---
version: alpha
name: Rappi
category: "Design Systems"
description: "Rappi Mexico delivery site: a saturated #ff441f hero with white PP Object Sans display type (56px/63.84px, -1.44px tracking), ink #2e2c36 on white, green #29d884 accents, 22px-radius category tiles, 8px inputs and cards, and short Spanish microcopy."
colors:
  canvas: "#ffffff"
  ink: "#2e2c36"
  primary: "#ff441f"
  on-primary: "#ffffff"
  accent-green: "#29d884"
  accent-blue: "#3870ff"
  ink-muted: "#6a696e"
  surface-tint: "#f7f8f9"
  surface-mint: "#e9fcf2"
  surface-rose: "#ffe9e9"
  hairline: "#e6ebf1"
typography:
  display:
    fontFamily: "\"PP Object Sans\""
    fontSize: 56px
    fontWeight: 400
    lineHeight: 63.84px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: "\"PP Object Sans\""
    fontSize: 40px
    fontWeight: 400
    lineHeight: 45.6px
    letterSpacing: "-1.44px"
  heading:
    fontFamily: "\"PP Object Sans\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 34px
    letterSpacing: "-0.12px"
    textTransform: capitalize
  subheading:
    fontFamily: "\"PP Object Sans\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: "\"PP Object Sans\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.94px
rounded:
  xs: 3px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 16px
  2xl: 22px
  3xl: 25px
  4xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 23px
components:
  text-input:
    backgroundColor: "{colors.surface-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 6px 20px 6px 12px
    height: 48px
  card-category:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
  card-info:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 40px 0px 0px
---

## Overview

The listed address www.rappi.com redirected, in the measurement, to https://www.rappi.com.mx/ (title "Pide Comida a Domicilio y el Súper en línea - Rappi México", language es-MX), so what is described here is the Mexican home page of the Rappi delivery super-app. It is a short page, about 3100px tall, built around a saturated orange-red, #ff441f, that fills the whole hero band and the "Restaurantes" tile, balanced by a fresh green, #29d884, on the "Super" tile and on secondary actions, over a white page with near-black ink (#2e2c36).

The top bar is white and compact: a hamburger, the script "Rappi" logo, a location chip ("Ingresar mi ubicación") in orange, a wide rounded search field ("Comida, restaurantes, tiendas, productos,...") with a mustache icon, an "Ingreso" link with an account icon and a cart. The hero band carries a single large line, "Si tienes Rappi, tienes Todo.", set in white with the brand word in bold, then a wide white address input ("¿Dónde quieres recibir tu compra?") with a pin icon, "Usa tu ubicación actual" and "Iniciar sesión para ver tus direcciones recientes".

Below sit two big rounded category tiles (Restaurantes in orange, Super in green) each with a circular food photo, then a row of flat 3D-style category icons (Farmacia, Express, Tiendas, Turbo, Licores, Rappi Travel, RappiCard), pill chips of popular searches (Vape, Pizza, Sushi, Tacos, Leche, Cafe), a row of round brand logos for the ten most chosen restaurants, a large "Únete a Rappi" statement with "Rappi" in orange, three photo cards inviting restaurants, shops and couriers to join, and a long text footer of links by brand, country and food type. A blue promotional speech bubble ("Descubre las PROMOCIONES que tenemos para ti") floats over the tiles. Voice is casual, second-person Spanish with exclamation marks and short labels.

## Colors

The brand color is #ff441f, measured as the second-largest background area on the page and as the tile fill of the "Restaurantes" card. It is paired with white text (#ffffff) in the hero. The site's CSS exposes it as the custom property --chakra-colors-secondary-3100, while the theme's own "primary" scale is the green #29d884 (--chakra-colors-primary-500), used for the Super tile, hover states of links (the "Ingreso" link turns #29d884 on hover) and mint-tinted buttons on #e9fcf2.

Text is #2e2c36 for headings and body, #6a696e for secondary copy, #3870ff for small blue labels, and white on color. Surfaces are white, #f7f8f9 for the input and quiet panels, #ffe9e9 and #e9fcf2 for soft tints of the two brand colors, and hairlines are #e6ebf1. A purple, #5e00be, shows up only on store-download buttons that are not visible in the capture and is not treated as a brand color here.

## Typography

The site uses one family, PP Object Sans, in regular 400 and bold 700, with Nunito also loaded for some elements. Measured roles: hero display 56px/63.84px at 400 with -1.44px tracking (40px/45.6px on mobile); section headings 20px/34px at 400, capitalized, with -0.12px tracking; card titles 20px/30px at 700; body 14px/23.94px at 400; footer headings 16px bold on a 26.08px line. The mix of a light hero line with a single bold brand word is the signature move.

No fallback is declared for PP Object Sans in the measured rules; the fallbacks seen in the framework variables are the system sans stack (-apple-system, Segoe UI, Helvetica, Arial).

## Layout

The page is a single column of full-width bands on a wide container (the Chakra theme declares a 1280px container-xl size). The hero is centered, with the input about half the viewport wide. Category tiles are left-aligned in a two-up row, followed by a horizontally scrolling strip with arrow buttons at the right edge, the chip row, the logo row, and a three-column card row for "Únete a Rappi". The footer is a three-column text grid, 1208px tall in the measurement, with 40px top padding.

Density is moderate: generous whitespace around the hero, tighter spacing in chip and link lists.

## Elevation & Depth

Elevation is nearly flat. The most common measured shadow is rgba(33, 34, 36, 0.04) 0px 5px 10px 0px, a faint lift under cards and logo circles; a hairline rgb(230, 235, 241) 0px 1px 0px 0px separates the header. A stronger drop shadow, rgba(0, 0, 0, 0.1) 0px 20px 40px 0px, belongs to floating elements such as the promotional bubble. The hero input floats on a soft shadow against the orange.

## Shapes

Shape is friendly and varied. Category tiles are 22px radius, info cards 8px with a 1px #e6ebf1 border, inputs 8px, chips and logo circles fully rounded (9999px and 50px are the most frequent radii after 8px), and the measured radius ladder runs 3, 6, 8, 10, 16, 22, 25 and 50px. Nothing in the capture has hard corners except the full-bleed hero band and the footer.

## Components

Search and address inputs: white or #f7f8f9 fill, 8px radius, 48px high in the header, PP Object Sans 14px, a leading icon, padding 6px 20px 6px 12px. Category tile: 22px-radius colored card with a circular photo above a 20px label on a pale bar. Chips: grey pill chips with 14px text. Brand circles: white round logo buttons with a small blue 12px label. Info cards: white, 8px radius, 1px hairline border, photo on top, 20px bold title, two lines of #6a696e copy, and a mint button with green text ("Conocer más", "¡Regístrate ahora!").

Footer: white, 40px top padding, bold 16px column headings and plain link lists in #2e2c36.

## Design System Architecture

Rappi has a documentation site at https://design.rappi.com, a zeroheight page titled "Mustache Design System". Its content is rendered client-side and could not be read, and nothing in the served rappi.com.mx markup references Mustache, so no value in this file is taken from it. What the page does ship is a de-facto system: Chakra UI (chakra-* class names and a full set of --chakra-colors-*, --chakra-space-*, --chakra-radii-* and --chakra-fontSizes-* variables) with a custom Rappi palette layered on top (primary-500 #29d884, secondary-3100 #ff441f, gray-100 #2e2c36, gray-80 #6a696e, gray-10 #f7f8f9, gray-20 #e6ebf1), styled-components classes (sc-*) for bespoke pieces, Next.js static assets under /static-home/, and a carousel built with an embla container. Because Chakra's default scales are present alongside the custom ones, only the colors that were actually measured on the rendered page are used above.

## Do's and Don'ts

Do use #ff441f as a full-bleed hero or tile color with white text, and use the green #29d884 for secondary action and the Super vertical. Do pair a light display line with a single bold brand word. Do keep corners generous (22px tiles, 8px inputs) and shadows barely visible.

Don't use the purple store-button color as a brand accent. Don't set small text in white on the green or on the orange. Don't add more than the two brand hues plus the blue label color. Don't use Chakra's default blue or its stock palette for brand elements.

## Responsive Behavior

The measured mobile pass reduces the hero display from 56px/63.84px to 40px/45.6px (same -1.44px tracking) and the category heading from 20px to 16px. The markup uses Chakra's breakpoints (declared as sm 320px, md 768px, lg 1024px, xl 1440px), and the category strip and logo row are horizontal scrollers with arrow controls on desktop. Other mobile layout details were not measured.

## Iteration Guide

Start with white, #2e2c36 ink and #ff441f for the single largest color moment, then add #29d884 for the second vertical and for hover. Use PP Object Sans 56px/63.84px at -1.44px for the hero line, 20px for headings, 14px/23.94px for body. Build inputs at 48px and 8px radius, category tiles at 22px, and keep shadows at rgba(33, 34, 36, 0.04) 0px 5px 10px 0px. Write short, friendly Spanish microcopy with exclamation marks, and re-measure on the live page before adding any new token.
