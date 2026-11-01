---
version: alpha
name: CKPower
category: "Thai Brands"
description: "CKPower (CKP) Public Company Limited English homepage (ckpower.co.th/en/home): photography-led sections with white Lato 900 headlines at 65px and 40px uppercase, Montserrat 15px body, charcoal #292929 text, #4b4744 footer, 4px-radius ghost buttons, and orange #ee7822, blue #1f51a0 and green #26a24c icon rings."
colors:
  canvas: "#ffffff"
  ink: "#292929"
  primary: "#292929"
  surface-black: "#000000"
  surface-footer: "#4b4744"
  on-dark-soft: "#ffffffb3"
  ink-light: "#d3d3d3"
  accent-orange: "#ee7822"
  accent-blue: "#1f51a0"
  accent-green: "#26a24c"
typography:
  display:
    fontFamily: Lato, sans-serif
    fontSize: 65px
    fontWeight: 900
    lineHeight: 65px
  display-mobile:
    fontFamily: Lato, sans-serif
    fontSize: 30px
    fontWeight: 900
    lineHeight: 30px
  heading:
    fontFamily: Lato, sans-serif
    fontSize: 40px
    fontWeight: 900
    lineHeight: 60px
    textTransform: uppercase
  subheading:
    fontFamily: Lato, sans-serif
    fontSize: 20px
    fontWeight: 900
    lineHeight: 30px
    textTransform: uppercase
  body:
    fontFamily: Montserrat, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button-secondary:
    fontFamily: Montserrat, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
    letterSpacing: 1px
rounded:
  xs: 4px
  sm: 4.8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

## Overview

CKPower (page title "CKPower (CKP)"; footer "CK POWER PUBLIC COMPANY LIMITED", tagline "ENDLESS ENERGY") is a Thai power producer. The queue URL `https://www.ckpower.co.th/en` shows a memorial entry page (gold backdrop, portrait in an oval frame, Thai text and an "เข้าสู่หน้าหลัก | Enter Site" pill) whose first extraction measured only 34 elements in brown `#794a00` with the PSL Paksin Pro typeface. That interstitial is not the working site, so the homepage `https://www.ckpower.co.th/en/home` was measured instead (580 visible elements, 7,415px tall) with `extract-tokens --slug=ck-power --url=... --allow-spa-404 --force` and the tokens regenerated from it.

The homepage is photograph-driven. The first screen is a split hero (a dusk landscape at left, a city-and-highway night photograph at right) with a transparent header, the headline "TO BE RESPONSIBLE" in huge white Lato 900, a "Watch our video" ghost button and three icon links (Sustainability, Hydro Power, Hot News) on colored rings. Next are "ABOUT CKPOWER" on a pale-blue photographic field with a short orange rule under the heading, an infinity-shaped image, a tagline in bold uppercase ("TO BE ONE OF THE REGION'S LARGEST PRODUCERS OF ELECTRICITY FROM RENEWABLES WITH ONE OF THE LOWEST CARBON FOOTPRINTS"), and "OUR BUSINESS" over a mountain-and-river photograph with Hydro Power, Cogeneration and Solar Power nodes and a large megawatt figure.

Two announcement pop-ups (an ESG-rating notice and a shareholders' invitation) with a close button, a cookie icon, and a live stock ticker in the header ("CKP : ... THB") are overlays or data, not brand UI, and are not documented.

## Colors

The page is almost entirely photographic, so the measured palette is small:

- **Canvas `#ffffff`** and text-on-dark `#ffffff` (3,734 characters, the most-read text color by far because headings and body sit on photographs).
- **Ink `#292929`** (116 characters) is the dark text on the few white areas (navigation links, footer-adjacent links); `primary` is the same value because no filled action color was detected.
- **Black `#000000`** (area weight 1,024) is the dark photographic base; **`#4b4744`** (550) is the footer background; translucent black overlays `#00000080` and `#00000040` darken photographs for legibility.
- **On-dark soft `#ffffffb3`** (106 characters) and **light gray `#d3d3d3`** (70) are secondary text on dark areas.
- **Accent colors** appear as small-area fills and ring shadows around circular icons: orange `#ee7822` (also a measured 1px border color and the rule under section headings in the capture), blue `#1f51a0` and green `#26a24c`; further measured fills are `#ffbd27`, `#d35a1a` and `#0182e7`, each with small area weight.

Bootstrap 4 root variables (`--primary: #007bff`, `--success: #28a745`) are framework defaults and not brand colors.

## Typography

Two families: **Lato** (400 and 900 loaded) for headlines (1,713 characters) and **Montserrat** (500 and 700 loaded; measured at 400) for body and buttons (2,314 characters). Icons use Font Awesome 5 Pro and a custom `ckpower` face.

- **Display** Lato 900, 65px/65px (line-height equal to size), white; mobile 30px.
- **Heading** Lato 900, 40px/60px, uppercase ("ABOUT CKPOWER", "OUR BUSINESS"); mobile 28px/42px.
- **Subheading** Lato 900, 20px/30px, uppercase ("SET ANNOUNCEMENT").
- **Body** Montserrat 400, 15px/22.5px.
- **Button / small UI** Montserrat 400, 13px/19.5px with 1px letter-spacing (also used for 15px text with 1px tracking).
- Footer headings are Lato 900, 30px/45px uppercase. Other sizes: 18px, 25px, 60px, 64px and 72px.

Weights: 400 (3,091 characters), 900 (935) and one 500. Letter-spacing appears only as 1px at 13px and 15px.

### Font substitutes

Lato and Montserrat are open Google Fonts families; the declared fallback is `sans-serif`.

## Layout

The header is 100px high, transparent over the hero and set in 13px uppercase Lato: a utility row (home icon, Contact Us, Join Us, stock ticker, search, TH) above a main row of six uppercase navigation items (About CKPower, Our Business, Investor Relations, Sustainability, Corporate Governance, News & Media); the extractor counted 12 visible header links. Sections are full-viewport photographic bands with left-aligned content in a container (heading box 730px wide, body paragraph 445px wide, announcement box 507px wide). A vertical "SCROLL DOWN" label with a thin orange line runs along the left edge in the capture. The footer is 430px tall on `#4b4744` with uppercase headings (CONTACT US, CK POWER PUBLIC COMPANY LIMITED). Spacing values: 4, 6, 8, 12, 14, 15, 16, 20, 24 and 32px.

## Elevation & Depth

Depth comes from layered photography, dark translucent overlays (`#00000080`, `#00000040`) behind text and translucent colored ring shadows around circular icons: `rgba(255, 255, 255, 0.5) 0px 0px 0px 6px` (18 elements) and the same 6px ring in `rgba(38, 162, 76, 0.5)`, `rgba(31, 81, 160, 0.5)` and `rgba(238, 120, 34, 0.5)`. A side shadow `rgba(41, 41, 41, 0.25) 2px 0px 4px 1px` appears on seven elements, and `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px` on one.

## Shapes

Circles dominate: 50% radius on 32 elements (icon discs with a 6px ring). Rectangular controls use 4px (18 elements), with `4px 4px 0px 0px` (5) and `0px 0px 4px 4px` (2) for panels attached to an edge; 4.8px appears once and 999px once. The "Watch our video" ghost button measures radius 4px, 181px by 42px.

## Components

- **Ghost button ("Watch our video").** Transparent over a photograph, white Montserrat 13px/400 with 1px tracking, 1px border, radius 4px, 181x42px, preceded by a circular play icon in the capture.
- **Icon link on ring.** A circular disc (blue for Hydro Power, green for Sustainability, orange for Hot News in the capture) with a 6px translucent ring and a uppercase white label.
- **Section heading.** White Lato 900 uppercase with a short orange rule beneath.
- **Read more.** A white circular chevron button followed by an uppercase "READ MORE" label.
- **Navigation.** Uppercase Lato 13px in white on the hero; `#292929` Montserrat 15px links on white.
- **Footer.** `#4b4744`, white text, 430px tall.
- **Not documented as brand UI:** announcement pop-ups, cookie icon, stock ticker.

## Design System Architecture

No public design system or brand guideline was found: the entry page and homepage were opened and link only to corporate content, and no search was run. The de-facto system is a Bootstrap 4 site with a custom icon font (`ckpower`) and Font Awesome 5 Pro; breakpoints are `--breakpoint-sm: 576px`, `--breakpoint-md: 768px` and `--breakpoint-lg: 992px`. The brand layer is photographic: Lato 900 uppercase headlines and Montserrat body, white text on darkened photography, and a trio of orange, blue and green icon rings. Source: https://www.ckpower.co.th/en/home and https://www.ckpower.co.th/en as measured by the repository extractor.

## Do's and Don'ts

- Do set headlines in Lato 900, white, over darkened photography: 65px for the hero, 40px uppercase for sections.
- Do use Montserrat 15px/22.5px for body and 13px with 1px tracking for buttons.
- Do mark section headings with a short orange `#ee7822` rule.
- Do use circular icon discs with a 6px translucent ring in blue, green or orange.
- Don't use Bootstrap's `#007bff` as a brand color.
- Don't reuse the memorial entry page's brown/gold palette or PSL Paksin Pro typeface.
- Don't present pop-ups, the cookie icon or the ticker as components.

## Responsive Behavior

Measured on a 390px mobile pass: the hero headline falls from 65px to 30px (line-height 30px; box 330px by 30px), the h2 from 40px to 28px (line-height 42px, 360px by 42px), and body text stays 15px/22.5px (360px by 180px). The header measured 390px by 70px with only "TH" in the detected text; visible header links fall from 12 to 2 and a menu toggle labeled "Toggle navigation" is detected (`menuToggleVisible: true`). The maximum card columns measured 7 on both passes. Other behavior is not measured.

## Iteration Guide

1. Use the tokens as measured on `/en/home`.
2. White text in Lato 900 over a darkened photograph; Montserrat 15px body; `#292929` text on white.
3. Mark sections with an orange `#ee7822` rule; icon discs get a 6px translucent ring.
4. Ghost buttons: 4px radius, 13px Montserrat with 1px tracking.
5. If the extractor lands on the memorial entry page, measure `/en/home` with `--allow-spa-404`.
6. Run `node web/scripts/verify-designs.mjs --slug=ck-power` until it passes.
