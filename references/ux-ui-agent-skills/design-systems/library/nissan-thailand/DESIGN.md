---
version: alpha
name: "Nissan Motor (Thailand)"
category: "Thai Brands"
description: "Nissan Motor (Thailand)'s English site: Nissan red #c3002f square buttons (0px radius, 14px uppercase), a proprietary Nissan Light/Regular/Bold family (48px display, 16px body) on white with #eeeeee panels, black footer, and no shadows or rounded corners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#c3002f"
  on-primary: "#ffffff"
  ink-grey: "#8a8a8a"
  ink-nav: "#343434"
  on-dark-grey: "#c1c1c1"
  ink-soft: "#1a1a1a"
  primary-hover: "#920023"
typography:
  display:
    fontFamily: "\"Nissan Light\", \"Nissan Regular\", Verdana, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
    letterSpacing: 0.11px
  display-mobile:
    fontFamily: "\"Nissan Light\", \"Nissan Regular\", Verdana, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.11px
  subheading:
    fontFamily: "\"Nissan Bold\", \"Nissan Regular\", Verdana, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.9px
    letterSpacing: 0.1px
  body:
    fontFamily: "\"Nissan Light\", \"Nissan Regular\", Verdana, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23px
  button:
    fontFamily: "\"Nissan Regular\", \"Nissan Regular\", Verdana, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 17.92px
    textTransform: uppercase
  nav:
    fontFamily: "\"Nissan Regular\", Verdana, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19px
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 3.69px
  s3: 5px
  s4: 5.69px
  s5: 10px
  s6: 11.69px
  s7: 12px
  s8: 15px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 45px 12px 20px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 45px 12px 20px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is https://en.nissan.co.th/ (title "Nissan｜NISSAN MOTOR (THAILAND) CO., LTD.", language `en-TH`), the English-language site of Nissan Motor (Thailand). The opened page offers Vehicles, Offers and Used Car, Shopping Tools (Model Price List, Find Dealer, Brochure Hub, Finance Calculator, Book a Test Drive, Request a Quote, Discovery@Home), After-Sales, Discover Nissan (Nissan Brand, e-POWER, e-4ORCE, ProPILOT, NissanConnect Services) and a language switch between English and Thai. The scroll height is 6223px at 1280px wide. A consent scrim (`scrim c_010D-overlay`) was hidden before measuring and is not documented here.

Reading the capture top to bottom: a header with the round NISSAN logo at left, uppercase nav (Vehicles, Offers, Shopping Tools, After-Sales) and a hamburger at right opening a quick-links column (Find Dealer, Brochure Hub, Finance Calculator, Book a Test Drive, Request a Quote, Discovery@Home, plus an English / Thai switch); a hero carousel of a Thai-language e-POWER campaign poster with a row of thumbnails; "NEW VEHICLES / Find your Perfect Nissan" with tab labels (e-POWER, Passenger Car, SUV, MPV, Truck, All Models) and three model cards (Kicks, X-Trail, Serena, each tagged e-POWER, with a "Starting price" in THB (THB 789,900, THB 1,699,000 and THB 1,690,000 in the capture)); a grey "MODEL PRICE LIST" bar; a light grey "TAKE THE NEXT STEP" panel of four red icon links (Finance Calculator, Book a Test Drive, Request a Quote, Find a Dealer); and two wide promo banners ("COMPARE PRICES ACROSS EVERY NISSAN MODEL", "FEATURES TO SUPPORT YOUR DECISION") each with a red button.

The look is clean automotive retail: white pages, thin headlines in a proprietary light face, black uppercase labels, brand red `#c3002f` for every action and icon, and glossy studio photography on white.

## Colors

- **Canvas `#ffffff`** (895 units) with **light grey `#eeeeee`** (451) panels such as "Take the next step" and **black `#000000`** (762, footer) and **near-black `#1a1a1a`** (541) bands.
- **Ink `#000000`** is the most-read text (1005 characters); **`#343434`** colors nav links and h1 on mobile (470); **`#1a1a1a`** colors the 48px headings; **`#c1c1c1`** (363) is text on dark; **`#ffffff`** (913) is text on red and black.
- **Primary `#c3002f`** is Nissan red: button fills and borders, icon links; hover `#920023`.
- **Grey `#8a8a8a`** appears as a text color (149 characters). The extraction also measured it as the largest background area (4702 units), which belongs to the hidden consent scrim and is not recorded as a surface.

## Typography

Three faces from one family: `Nissan Light` (1459 weighted characters) for display and body, `Nissan Regular` (851) for nav and buttons, and `Nissan Bold` (714) for card titles and the footer; each is loaded at weight 400, so the weight difference comes from the face itself. Fallbacks are Verdana, Arial and sans-serif. Measured: display 48px / 57.6px with 0.11px tracking (32px / 32px on the 390px pass; the mobile h2 is 30px / 36px); subheading Nissan Bold 14px / 18.9px with 0.1px tracking; body Nissan Light 16px / 23px; buttons Nissan Regular 14px / 17.92px uppercase; nav 14px / 19px (header uppercase with 1px tracking). The faces are loaded by the site as webfonts, and the declared fallbacks are Verdana and Arial.

## Layout

A white page with a centered content column (the content panels run from about 40px to 920px in the capture) and wide, shallow bands. Measured paddings: 20px (52 uses), 15px (41), 11.6875px (32), 10px, 12px, 3.6875px, 3px and 524.797px; no gaps were measured. Model cards sit in a 3-up row with a thin tab rail above; the "next step" panel has four equal icon columns; promos are full-width cards with the copy at the left and a photograph at the right.

## Elevation & Depth

No box shadows were measured, so the page reads as flat, printed-brochure layering rather than stacked cards. Panels are separated by flat grey fills (`#eeeeee`), 1px `#eeeeee` borders (seven elements) and photography. Red 1px borders (`#c3002f`, 14 elements) outline the buttons.

## Shapes

`borderRadii` is empty: every rendered element computes a radius of 0px, so buttons, panels and the tab rail are square-cornered. The tokens carry `none: 0px`.

## Components

- **button-primary**: `#c3002f` fill and 1px border, white Nissan Regular 14px uppercase text, padding `12px 45px 12px 20px` (extra right padding for a trailing chevron), 44px tall, 0px radius; hover `#920023`.
- **link buttons**: the same red style ("VIEW PRICE LIST", "LET'S START", "NEW NISSAN SERENA E-POWER", "EXPLORE MORE").
- **nav-link**: `#343434` Nissan Regular 14px / 19px; header text uppercase with 1px tracking.
- **tabs**: uppercase bold labels with an underline rail on the active tab.
- **model card**: photo, bold uppercase title with a chevron, "Starting price" caption and a larger price.
- **footer**: `#000000` fill, white uppercase Nissan Bold 15px.

## Content and Voice

Copy is short, uppercase for labels and sentence case for descriptors. Section eyebrows are small bold uppercase labels ("NEW VEHICLES", "NISSAN PRICE LIST", "DISCOVERY@HOME") above a large light headline ("Find your Perfect Nissan", "TAKE THE NEXT STEP", "COMPARE PRICES ACROSS EVERY NISSAN MODEL", "FEATURES TO SUPPORT YOUR DECISION"). Calls to action are the verbs of car buying: finance calculator, book a test drive, request a quote, find a dealer, view price list, let's start, explore more. Model names carry the technology badge (e-POWER, and e-4ORCE on the X-Trail card) as an image tag at the lower right of each photo. The hero poster is Thai-language campaign art, a reminder that the English site shares imagery with the Thai one, and the language switch sits in the quick-links column.

The imagery is studio-lit three-quarter vehicle shots on white with soft ground shadows, and lifestyle compositions of hands holding a phone in front of a showroom, so product and service are shown with equal weight.

## Design System Architecture

No public design system, brand guideline or press kit is linked: the opened page https://en.nissan.co.th/ shows none, and its asset paths reference a package named "nissan_next_v3" without any guideline page. The extraction found a single root variable (`--overlap-value: -80px`), so the de-facto system is a proprietary three-face type family, a red-black-white-grey palette, an icon font (`icon-Nissan-Global`) and square geometry.

## Do's and Don'ts

- Do use `#c3002f` for every action and icon, with `#920023` on hover.
- Do keep corners at 0px and avoid shadows.
- Do set display headlines in Nissan Light at 48px with 0.11px tracking, and card titles in Nissan Bold uppercase.
- Do separate sections with flat `#eeeeee` panels.
- Don't document the consent scrim or its grey fill as brand surface.
- Don't introduce additional accent colors; none were measured.

## Responsive Behavior

The 390px mobile pass recorded the display at 32px / 32px with 0.11px tracking, the h2 at 30px / 36px with a 10px bottom padding, and body text measured at its desktop size. Nav collapse, carousel and grid reflow were not measured, and no breakpoint values were captured.

## Iteration Guide

1. White canvas, black text; Nissan Light headings at 48px.
2. One red `#c3002f` button style, 44px tall, 0px radius, uppercase 14px.
3. Light grey `#eeeeee` panels with four-icon "next step" rows in red.
4. Model cards: photo, bold uppercase name, "Starting price", then price.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=nissan-thailand --force --no-motion`, regenerate with `node web/scripts/generate-frontmatter.mjs --slug=nissan-thailand`, and gate with `node web/scripts/verify-designs.mjs --slug=nissan-thailand`.
