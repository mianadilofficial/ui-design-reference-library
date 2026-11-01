---
version: alpha
name: Mercado Libre
category: "Design Systems"
description: "Mercado Libre's web presence as measured on mercadolibre.com (a yellow #ffe600 country-picker page with Arial 36px bold and #333333 ink) and on mercadolibre.com.mx (white and #ebebeb marketplace surfaces, Proxima Nova, Andes blue #3483fa action color, 5px buttons, 6px cards, a #ffe600 header)."
colors:
  canvas: "#ffe600"
  ink: "#333333"
  primary: "#3483fa"
  on-primary: "#ffffff"
  surface: "#ffffff"
  surface-page: "#ebebeb"
  ink-andes: "#000000e6"
  ink-muted: "#757575"
  hairline: "#e6e6e6"
  positive: "#00a650"
  promo: "#e60063"
typography:
  display:
    fontFamily: Arial, Helvetica, "Nimbus Sans L", sans-serif
    fontSize: 36px
    fontWeight: 700
  title:
    fontFamily: "\"Proxima Nova\", -apple-system, Roboto, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 22px
  body:
    fontFamily: "\"Proxima Nova\", -apple-system, Roboto, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
  button:
    fontFamily: "\"Proxima Nova\", -apple-system, Roboto, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 32px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
spacing:
  s1: 5px
  s2: 12px
  s3: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 32px
  card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink-andes}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.12) 0px 1px 2px 0px
  nav:
    textColor: "{colors.ink}"
---

## Overview

The brand is measured on two different pages and they look like two different products. The address the catalog lists, mercadolibre.com, is not a store at all: it is a single yellow screen (#ffe600) with the "mercado libre" handshake logo set as a background image on the h1 (the heading text is "MercadoLibre", pushed out of view), and a vertical list of country links, each a white 4px-rounded tile with a small flag, from Argentina to El Salvador and beyond. Text there is Arial, 36px bold #333333 for the heading and 14px for the links, which are left at the browser's default link color and are therefore not brand colors. The page's own stylesheet describes itself as "Homecom.css", the styles for the mercadolibre.com home.

Once a country is chosen, for example mercadolibre.com.mx, the product appears: a #ffe600 header holding the logo, a wide search box, category links and account links; a green promotional hero; rows of white 6px cards on a #ebebeb page; product shelves with green "OFF" badges and "Envio gratis" lines; a magenta (#e60063) band for the meli+ subscription; and a near-black Mercado Play panel. The measured secondary page is saved as mercadolibre--mx and its values are the source for the blue action color, the Proxima Nova type and the card geometry below.

The tone is commercial and direct: short Spanish microcopy such as "Envio gratis", "Mostrar productos", "Ingresar a tu cuenta", with price-first product tiles and many small status labels. Imagery is product photography on white, illustration-style icons on pale circles, and full-bleed campaign banners.

## Colors

The yellow #ffe600 is the identity color and is the canvas of the picker page and of the marketplace header (measured as the nav background on the .mx page). Ink on the picker is #333333. In the marketplace, body copy is black at roughly 90 percent opacity (#000000e6), secondary text is #0000008c or #757575, and hairlines are #e6e6e6.

The action color is blue #3483fa, measured on the .mx page as link text, as the loud-button fill (backgroundColorsByArea) and as the text of the quiet outlined buttons. Positive/free-shipping messaging is green #00a650, and the subscription banner is #e60063. The browser-default link blue on the picker page is not part of this palette.

White (#ffffff) is the card surface and #ebebeb is the page surface behind cards.

## Typography

The picker uses Arial (with Helvetica and Nimbus Sans L fallbacks) at 36px bold for the heading and 14px regular for links. The marketplace loads Proxima Nova at weights 300, 400, 600, 700 and 800 (reported as loaded fonts on the .mx page) with -apple-system, Roboto and Arial as fallbacks. Measured roles there: h3 shelf titles 18px/22px at 600, body copy 14px/16.8px at 400, buttons 14px at 600 with a 32px line height, footer text 12px/15px. The most-read size on the .mx page is 14px.

Proxima Nova is a commercial typeface; where it cannot be licensed, the shipped stack already falls back to -apple-system, Roboto and Arial, and those are the safe substitutes.

## Layout

The picker page centers the logo in the left half and stacks the country tiles in a narrow column on the right, with 5px and 55px paddings measured on the tiles and the body padded 10px. The marketplace uses a container of about 1180px (the h3 measured 1180px wide inside a 1280px viewport), a header with search taking the middle, hero banner, then horizontally scrolling card rows with round chevron buttons at the edges.

Density is high but orderly: cards share one radius, shelves repeat the same tile pattern, and sections are separated by gaps on the #ebebeb ground rather than by rules.

## Elevation & Depth

Depth is minimal. Cards carry a single soft shadow, rgba(0, 0, 0, 0.12) 0px 1px 2px 0px, measured on the .mx cards, and the production stylesheet defines a stronger hover shadow of 0 6px 16px 0 rgba(0,0,0,.1). Focus states use a ring in the darker blue #2968c8 with a pale blue halo. Inputs use a rgba(0, 0, 0, 0.2) 0px 1px 2px 0px shadow. The picker page has no shadows; it uses a 1px #dfe2f8 border around the list.

## Shapes

Radii are small and consistent: 4px on the picker's tiles and list, 5px on buttons, 6px on cards, 2px on the search input, 8px on a few banners, and 50 percent for round icon buttons. Nothing is fully pill-shaped in the measured set. The yellow logo badge is the only strongly round shape.

## Components

Primary button (loud): blue #3483fa fill, white text, Proxima Nova 14px at 600, 32px high, 5px radius, 0px 12px padding (the 5px, 32px and 14px/600 values are measured; the fill comes from the shipped Andes rule for the loud button and the #3483fa area weight on the page). The quiet variant is a pale-blue tinted or white button with blue text; the outlined variant has a 1px #e6e6e6 border.

Cards: white, 6px radius, padded content, a title at 16px/600 and a quiet button at the foot. Promotional tiles invert the scheme with solid color blocks (red, black) and a product image on the right half.

Badges: green "OFF" label (#00a650) and a magenta meli+ tag. Search: white input, 40px tall, magnifier icon at the right.

## Design System Architecture

Mercado Libre has a named design system, Andes. The page at https://andes.mercadolibre.com is titled "Andes Design System" and is a zeroheight-hosted documentation site (its HTML says "Design system documentation, made with zeroheight"); its content is rendered client-side and I could not read component pages, so nothing below is taken from its text. The system is used by the site: the .mx page's HTML contains hundreds of andes-card, andes-card--flat and andes-card--primary class names, and the shipped home stylesheet defines andes-button--loud, andes-button--quiet, andes-button--medium, andes-card--padding-16 and andes-typography rules driven by custom properties such as --andes-color-blue-500 (#3483fa), --andes-color-blue-600 (#2968c8), --andes-font-family-primary ("Proxima Nova", -apple-system, Roboto, Arial, sans-serif) and component tokens like --andes-button-loud-color-fill-default. Values here were read from that stylesheet and cross-checked against the page measurements. The picker page at mercadolibre.com does not use Andes class names.

## Do's and Don'ts

Do use #3483fa for the one primary action in a card or band, and keep buttons at 5px radius. Do keep cards white on #ebebeb with the one-layer shadow. Do reserve #ffe600 for the header and brand moments.

Don't treat the picker page's default link blue as brand. Don't add heavy shadows or pill buttons. Don't mix several action colors; green and magenta are status and promotion colors, not buttons. Don't set long text in the yellow.

## Responsive Behavior

The mobile pass of the measured pages is thin: the picker's h1 stays Arial 36px bold at the narrow viewport, and the .mx page's visually hidden h1 measures 28px on mobile against 26px on desktop, both in Proxima Nova 700. The picker list is already a single narrow column at every width. For the marketplace, only the measurements above are documented; the capture is a desktop render with a 1180px content column, so shelf and header behavior on small screens is not described here. Buttons stay at 32px height and the search input at 40px in the desktop measurements.

## Iteration Guide

Start from the yellow canvas and #333333 ink for brand pages, and from white surfaces on #ebebeb for commerce screens. Pick the blue #3483fa for the single primary action, keep 5px and 6px radii, and set copy in Proxima Nova 14px/16.8px with 18px/22px at 600 for titles. When a new component is needed, look for its andes-* class and --andes-* variables in the shipped stylesheet first, and re-measure on a country site before adding a value. Keep microcopy short and Spanish-first, and let product imagery carry the page.
