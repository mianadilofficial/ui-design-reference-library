---
version: alpha
name: Tiffany & Co.
category: "Luxury"
description: "Tiffany & Co. (tiffany.com, US storefront): white #ffffff canvas with black #000000 ink, a Tiffany Blue #81d8d0 announcement band, a light-champagne #fbf9f7 footer and champagne #f4f0ea square (0px) uppercase buttons. Sterling SSM serif headings (28px/500 hero, 32px/325 section) over Santral Book sans body at 13–16px; focus and hover use the accessible teal #009cad."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#f4f0ea"
  on-primary: "#000000"
  surface-champagne-light: "#fbf9f7"
  tiffany-blue: "#81d8d0"
  tiffany-ada: "#009cad"
  hover-blue: "#67ccc9"
  champagne-medium: "#ebe6df"
  champagne-dark: "#e0dbd3"
  ink-charcoal: "#212529"
  ink-muted: "#444444"
  hairline: "#0000001f"
typography:
  display:
    fontFamily: "\"Sterling SSM\", \"Sterling Fallback\", serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: "\"Sterling SSM\", \"Sterling Fallback\", serif"
    fontSize: 32px
    fontWeight: 325
    lineHeight: 40px
    letterSpacing: "-1.28px"
  button:
    fontFamily: "\"Santral Semibold\", Verdana, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.88px
    textTransform: uppercase
  nav:
    fontFamily: "\"Santral Book\", \"Santral Book Fallback\", Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.32px"
  link:
    fontFamily: "\"Santral Book\", \"Santral Book Fallback\", Verdana, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: "-0.26px"
  input:
    fontFamily: "\"Santral Book\", \"Santral Book Fallback\", Verdana, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: 0.88px
rounded:
  xs: 3px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 7.5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 13px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 20px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 16px 24px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 12px 0px
    height: 44px
  footer:
    backgroundColor: "{colors.surface-champagne-light}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 96px 0px 44px
---

# Tiffany & Co.

## Overview

This document describes the US storefront at tiffany.com, measured on its home page. The page is a quiet,
gallery-like retail surface: a white `#ffffff` canvas, black `#000000` type, and product photography doing almost
all of the colour work. The one loud brand signal is Tiffany Blue `#81d8d0`, which the measured page uses as the
thin announcement band at the very top ("New Arrivals. Complimentary Shipping on Every Order. Shop Now.") and which
saturates the photography itself — teal backdrops, blue boxes, white ribbons. Everything else is restrained:
champagne neutrals, a narrow serif for headlines, a small sans for everything functional.

The capture reads top to bottom as an editorial catalogue. A centred wordmark sits above a single line of uppercase
category links (Gifts, Jewelry, High Jewelry, Love & Celebration, Watches, Home, Accessories, World of Tiffany). The
hero is a split block: a short serif headline ("New In: HardWear by Tiffany") with two lines of body copy and an
uppercase "SHOP NEW DESIGNS" text link on the left, and a large portrait photograph on the right. Below come a
product carousel on white, a four-up "Shop by Category" grid of square images, an "Icon Collections" pair of tall
images, alternating image-and-text feature rows, a three-up "The Tiffany Experience" service block, an email sign-up
line, and a champagne footer with four link columns.

The voice is calm and ceremonial: "For 189 years, Tiffany's iconic collections have helped an ever-changing world
speak the language of love." Calls to action are short, uppercase and understated ("SHOP NOW", "LEARN MORE",
"BOOK AN APPOINTMENT", "SIGN UP").

## Colors

- **Canvas `#ffffff`** — the page background; it covers roughly half of the captured screen pixels.
- **Ink `#000000`** — by far the most-read text colour: headlines, product names, body copy and the CTA label.
- **Primary `#f4f0ea` (champagne)** — the fill of the measured primary button ("SIGN UP" in the newsletter row). The
  site's own root variables name this value `--Champagne` and `--ux-btn-bg-champagne`, so the champagne button is a
  deliberate system choice, not an accident of measurement.
- **On-primary `#000000`** — black label on the champagne button.
- **Surface champagne-light `#fbf9f7`** — the footer band; root variable `--Light-Champagne`.
- **Tiffany Blue `#81d8d0`** — the announcement band; root variable `--Tiffany-Blue`. Tiffany's press site states the
  colour has been a registered colour trademark since 1998 and was standardised in 2001 as a custom Pantone shade
  named "1837 Blue" that is not publicly available. The hex here is what the website serves, not the Pantone reference.
- **Tiffany ADA `#009cad`** — root variable `--Tiffany-ADA` and `--primary-active`. It is the measured hover colour of
  the header "SEARCH" control and the colour of the 2px solid focus outline on links. Use it wherever the brand blue
  must carry text or an outline on white, because the light `#81d8d0` is too pale for that job.
- **Hover blue `#67ccc9`** — root variable `--Hover-Blue`; declared in the stylesheet, not observed in the hover probe.
- **Champagne medium `#ebe6df`** — root variable `--Medium-Champagne`, also `--ux-btn-bg-champagne-hover`: the
  champagne button's declared hover fill.
- **Champagne dark `#e0dbd3`** — root variable `--Dark-Champagne`.
- **Ink charcoal `#212529`** and **ink muted `#444444`** — secondary text colours. `#444444` is the header and
  utility-link colour (store locator, account, contact); on hover those links measured `rgb(30, 30, 30)` with an
  underline.
- **Hairline `#0000001f`** — the 12%-black border used on the few outlined elements.

There are no box shadows anywhere on the measured page.

## Typography

Two proprietary families carry the whole site, both served as WOFF2 from the storefront:

- **Sterling SSM** (fallback stack `"Sterling Fallback", serif`) — the editorial serif for every headline. The hero
  headline measured 28px / 500 / 33.6px line height, and section headings ("Shop by Category", "Icon Collections")
  32px / 325 / 40px, both with tight -1.28px tracking. Weight 325 is unusual; it gives the large headings a thin,
  engraved feel.
- **Santral** in three cuts — **Santral Book** (the dominant body face by character count), **Santral Medium** and
  **Santral Semibold**. Santral Book sets navigation at 16px/24px with -0.32px tracking and running links at
  13px/20px with -0.26px. Santral Semibold sets the button label at 11px/16px, uppercase, with positive 0.88px
  tracking — the only place the site opens its letter-spacing.

Measured size frequency is dominated by 13px, 14px and 16px text, with 11px and 12px uppercase labels, 20px
sub-heads and the 28px and 32px serif headings. The stylesheet also declares a larger heading ladder in root
variables (`--font-size-Headings-H0` 72px, `--font-size-Headings-H1` 52px, `--font-size-Headings-H2` 48px) that the
measured home page did not render.

Substitutes, if the licensed faces are unavailable: a narrow, high-contrast transitional serif for Sterling SSM and a
neutral grotesque for Santral; the site's own fallback stacks fall back to `serif` and Verdana.

## Layout

The measured desktop viewport is 1280px wide and the home page scrolls to a long single column of full-bleed and
contained bands. Content in the header band spans a centred measure, and the hero, feature rows and service block
alternate between a text column and a large image. Grids are simple: a four-column category row, a two-column icon
collection row, a three-column experience row. Gaps measured 24px most often, with 8px and 16px as the smaller steps.
Padding is generous at the section level (96px and 72px both recur) and tight inside components (8px, 12px, 16px, 24px).
The footer is padded 96px top and 44px bottom.

Density is low: one idea per band, lots of white between them, centred headings, short paragraphs that wrap to a
narrow measure under the headline.

## Elevation & Depth

The page is flat. The extraction recorded no box shadows at all. Depth comes from photography (soft studio light,
cast shadows on teal surfaces) and from colour bands — white, then Tiffany Blue at the top, then champagne in the
footer. The stylesheet declares an app shadow `0 20px 40px #00000080` in a root variable, but nothing on the
measured home page used it, so it is not a token here.

## Shapes

Shapes are square. The primary button, nav links, input and footer all compute a 0px radius. The only measured
non-zero radii are a 3px corner (the stylesheet's `--small-border-radius`, `--button-border-radius` and
`--input-border-radius` all declare 3px) and 50% circles for carousel and icon controls, recorded here as the pill
token. Product imagery is cropped into hard-edged rectangles and squares.

## Components

- **Primary button** — champagne `#f4f0ea` fill, black label, Santral Semibold 11px uppercase with 0.88px tracking,
  14px 20px padding, 44px tall, 0px radius. The stylesheet pairs it with a hover fill of `#ebe6df` and a 12%-black
  border variable.
- **Text link CTA** — most calls to action on the page are not buttons but short uppercase links under a heading
  ("SHOP NOW", "LEARN MORE"); the running link style measured Santral Book 13px/20px in black.
- **Header** — white bar, utility links on the left (location, search) and right (contact, account, bag), a centred
  serif wordmark, and a row of uppercase category links. Nav links measured Santral Book 16px in `#444444` with
  16px 24px padding.
- **Announcement band** — the Tiffany Blue strip above the header, centred black copy with an underlined "Shop Now".
- **Carousel** — product images on white with a centred two-line caption (collection name, then product
  description), and a thin progress line with arrow controls below.
- **Email input** — underline-style field, Santral Book 11px with 0.88px tracking, 12px 0px padding, 44px tall,
  placeholder "EMAIL", paired with the champagne "SIGN UP" button.
- **Footer** — light champagne `#fbf9f7`, four uppercase-headed columns (Support, Services, About, Legal) of small
  links, a country selector and copyright line, a centred monogram and social links along the bottom.

## Design System Architecture

Tiffany publishes no public design system or brand guideline site; the press site at https://press.tiffany.com/
offers image and video assets and a history page on Tiffany Blue (https://press.tiffany.com/our-story/tiffany-blue/)
but no tokens, colour codes or typography rules. The de-facto system is visible in the storefront's root CSS
variables: a named palette (`--Tiffany-Blue`, `--Tiffany-ADA`, `--Hover-Blue`, `--Pressed-Blue`, `--Champagne`,
`--Light-Champagne`, `--Medium-Champagne`, `--Dark-Champagne`), button variables per theme (`--ux-btn-bg-champagne`,
`--ux-btn-bg-primary`), and a typography matrix named by role and device (`--font-size-Headings-H1`,
`--font-size-Headings-H1-mobile`, `--font-family-Cross-Device-Body-Sans-…`, `--font-family-Editorial-…`). The
storefront also ships Bootstrap-style variables (`--breakpoint-md` 720px, `--breakpoint-lg` 1200px,
`--breakpoint-xl` 1440px) beneath that brand layer.

## Do's and Don'ts

**Do**
- Keep the canvas white and the text black; let photography supply colour.
- Reserve Tiffany Blue `#81d8d0` for brand moments — a band, a box, a backdrop — and use `#009cad` when blue must
  be legible as text or a focus ring.
- Set headlines in Sterling SSM with the measured tight tracking, and everything functional in Santral.
- Keep buttons square, champagne and uppercase with open tracking.
- Use short, ceremonious microcopy and uppercase two-word CTAs.

**Don't**
- Don't fill large text areas with Tiffany Blue or set body text on it in white.
- Don't add drop shadows or rounded cards; the measured page has neither.
- Don't use bold weights in the serif — the measured headings sit at 325 and 500.
- Don't treat Bootstrap's `#212529` charcoal as a brand colour; it is only a secondary text tone here.

## Responsive Behavior

Measured at a mobile viewport in the extraction's mobile pass:

- A menu toggle labelled "Toggle mobile navigation" is visible on mobile; it is not visible on desktop.
- The hero headline keeps 28px / 500 / 33.6px, but its tracking loosens from -1.28px to -0.48px.
- Section headings drop from 32px/40px to 24px/32px, also at -0.48px tracking.
- Body copy measured Santral Book 13px/20px; the most common mobile sizes were 13px, 16px, 14px and 18px.
- The champagne "SIGN UP" button keeps its desktop style (11px uppercase, champagne fill, black label).
- The Tiffany Blue announcement band measured 60px tall on mobile against 40px on desktop.

The stylesheet declares breakpoints at 720px, 1200px and 1440px and mobile heading variables (H1 40px, H2 32px,
H3 24px); the exact switch-over behaviour between those breakpoints was not measured.

## Iteration Guide

1. Start with the white canvas, black ink and the two typefaces; most of the identity is typographic restraint.
2. Add a single Tiffany Blue element per view, then the champagne footer.
3. Build buttons from the `button-primary` component: champagne, square, 44px tall, 11px uppercase label.
4. Use `#009cad` for focus outlines (the site measured a 2px solid outline) and interactive hover text.
5. When adding new tokens, take them from the storefront's root variables or a new measurement, never from memory
   of the Pantone colour.
