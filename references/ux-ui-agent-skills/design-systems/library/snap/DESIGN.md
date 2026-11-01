---
version: alpha
name: Snap Inc.
category: "Media & Consumer Tech"
description: "Snap Inc.'s corporate home (snap.com) is a near-monochrome editorial page: white (#ffffff) canvas, black (#000000) Inter 44px/400 mission statement, #757575 uppercase nav, three product tiles and a 25px-radius black-outlined language pill; Snap Yellow #fffc00 lives in the shipped CSS and in product imagery."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-muted: "#757575"
  ink-secondary: "#595959"
  snap-yellow: "#fffc00"
  gray: "#d9d9d9"
typography:
  display:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 52.8px
  display-mobile:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  nav:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 64px
  eyebrow:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    letterSpacing: "-0.14px"
  footer-link:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    textTransform: uppercase
  button:
    fontFamily: Inter, Helvetica, Tahoma, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
rounded:
  xs: 25px
  pill: 9999px
spacing:
  s1: 7px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 48px
  s8: 56px
  s9: 64px
components:
  language-pill:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 42px
    border: "2px solid #000000"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    height: 64px
  nav-link-hover:
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.footer-link}"
---

# Snap Inc.

## Overview

This file describes **snap.com**, the corporate home of Snap Inc. (page title "We are Snap Inc."), not the Snapchat app. The page is a single 874px-tall screen at desktop width and almost entirely monochrome: a white canvas, black text and grey navigation. It leads with the company mission, set large in regular-weight Inter: "We contribute to human progress by empowering people to express themselves, live in the moment, learn about the world, and have fun together."

Under a small "OUR PRODUCTS & SERVICES" eyebrow, three equal image tiles introduce the products. "SNAPCHAT" appears on an olive-yellow collage of selfies, "SPECS" on a night street scene, and "Lens Studio" with its yellow icon on a laptop shot. Each tile has a centred one-sentence caption: "Snapchat is a visual messaging service that enhances your communication with friends, family, and the world.", "Specs make computing more human.", "Lens Studio is a creative tool for developers to build cutting-edge AR & AI experiences."

The header holds a four-dot menu icon, the serif "Snap Inc." wordmark, and three grey uppercase links (NEWS, INVESTORS, CAREERS). The footer repeats the wordmark beside uppercase legal links and a black-outlined "English (US)" language pill. Colour comes entirely from the product photography; the interface stays black and white.

## Colors

- **Canvas `#ffffff`.** Effectively the only measured background (1,125 area units, against 1 for black).
- **Ink `#000000`.** The mission statement, captions, the eyebrow and the language pill (412 characters).
- **Primary `#000000`.** The page has no coloured call to action. Its only emphasis colour is black: nav links turn from `#757575` to black on hover, and the one button is outlined in black. Primary is therefore black. The browser-default link blue (`#0000ee`) that the extractor picked up on two empty, image-only links is not a brand colour and has been dropped.
- **Ink muted `#757575`.** Header and footer links (83 characters).
- **Ink secondary `#595959`.** A second header grey, also declared in the stylesheet.
- **Snap Yellow `#fffc00`.** Not used as a UI colour on this page, but present in the shipped CSS. The Snapchat brand guidelines name it the core colour: "Our primary palette keeps things simple, leveraging Snap Yellow for instant brand recognition." It appears in the Snapchat product imagery (the mobile tile is bright yellow).
- **Gray `#d9d9d9`.** The guidelines' fourth palette colour (Snap Yellow, Black, White, Gray), also present in the shipped CSS.

The stylesheet also carries a grey ramp (`#f8f8f8`, `#f1f1f1`, `#e8e8eb`, `#bfbfbf`, `#a6a6a6`, `#8c8c8c`, `#404040`, `#262626`) and accent scales (oranges `#ff8a00`, reds `#f23c57`, greens `#02b790`, purples `#a05dcd`, blues `#0eadff`). None of these was measured on the rendered home page.

## Typography

The corporate site uses a single family, **Inter**, loaded as a variable font (`Inter 100 900`, upright and italic, from `./inter/Inter.woff2`).

- **Display.** 44px/400 with a 52.8px line height (1.2). The mission statement runs across three lines in a 1136px-wide block with 56px 48px padding. Its regular weight at a large size is the main typographic gesture on the page.
- **Body.** 16px/400 with 25.6px leading (1.6), used for the product captions.
- **Nav.** 16px/500 in `#757575`, with a 64px line height that matches the 64px header (`--total-header-height: 64px`). The links are uppercase.
- **Eyebrow.** 14px/600 with -0.14px tracking: "OUR PRODUCTS & SERVICES".
- **Footer link.** 14px/500, 16px line height, uppercase, `#757575`.
- **Button.** 14px/500 for the language pill.

The Snapchat app brand uses different faces. Its guidelines name "Program and Ghost Sans" as the two primary typefaces, with Barlow as an alternative. Those are product-brand faces; the corporate home page measured here renders only Inter.

## Layout

Measured at 1280px wide. Content runs from x 64 to x 1216, inside 64px side margins. The page has a single band, in this order:

1. A 64px header with a full-width black rule beneath it (visible in the capture).
2. The mission statement, left-aligned and indented, with 56px vertical padding.
3. The centred eyebrow.
4. A three-column grid of equal image tiles, each with its caption centred below.
5. A footer behind another black rule: the wordmark and legal links at the left, the "LANGUAGE" label and pill at the right.

Measured gaps are 24px (most frequent), 16px, 32px, 12px and 8px; paddings include 16px, 48px, 56px and 64px. The density is very low, and white space makes up most of the composition.

## Elevation & Depth

No box shadows were measured on the rendered page (`boxShadows` is empty), and there is only one non-white background. Depth comes from the two thin horizontal rules, which frame the page like a printed sheet, and from the full-colour product photography. The shipped CSS contains shadow values (for example `0 4px 8px…`), but none of them renders on the home page.

## Shapes

The page is rectilinear. The product image tiles have square corners. The only rounded elements are the "English (US)" language pill (25px radius on a 42px-tall button) and the 50% circle of the menu dots. The shipped CSS also declares 4px, 11px and 100px radii, which were not measured on rendered elements. The four-dot menu icon (`icon-dots sdsm-icon`) is a 2×2 grid of circles, the one decorative shape in the chrome.

## Components

- **Header.** White, 64px. Four-dot menu button ("Open Global Navigation"), the serif "Snap Inc." wordmark, and right-aligned uppercase links NEWS / INVESTORS / CAREERS in `#757575` Inter 16px/500. Hovering a link turns it black (`rgb(0, 0, 0)` measured after hover).
- **Mission statement.** An h1, Inter 44px/400 black, 52.8px leading, three lines.
- **Product tile.** An image with the product's own logotype on photography, then a 16px/25.6px centred caption in black.
- **Language pill.** White fill, `2px solid #000000` border, 25px radius, 12px 16px padding, 42px tall, 160px wide, black Inter 14px/500 "English (US)" with an up-arrow icon.
- **Footer.** The wordmark, then uppercase 14px/500 grey links (CITIZENSNAP, OTHER TERMS & POLICIES, PRIVACY POLICY, TERMS OF SERVICE), then "LANGUAGE" and the pill.

## Design System Architecture

Snap publishes Snapchat brand guidelines at https://snap.com/en-US/brand-guidelines. That page offers the official Ghost logo and a guidelines PDF (https://assets.ctfassets.net/dwtpq5hdcqjg/6qV4VoAY1SjD6hxk61vzSz/78a428cbee68f4087c43f8626a7caa52/Snapchat_Web-Brand-Guidelines_September-2025.pdf). The PDF covers logo usage, Snapcodes, attribution and merchandise. It defines the palette (Snap Yellow #FFFC00, Black #000000, White #FFFFFF, Gray #d9d9d9) and the typefaces (Program, Ghost Sans, alternative Barlow). On snap.com, the shipped markup points to an internal component library: icon classes are prefixed `sdsm-` (`icon-dots sdsm-icon icon`), icons are coloured through `fill="var(--icon-color)"`, and headings take family variables (`var(--h1-font-family)` through `var(--h6-font-family)`, `var(--global-header-site-name-font-family)`). Images are served from Contentful (`images.ctfassets.net`). The library itself is not public.

## Do's and Don'ts

**Do**
- Keep the corporate page monochrome: white canvas, black text, `#757575` navigation.
- Let one large, regular-weight Inter statement carry the page.
- Use thin full-width rules to frame the header and footer.
- Present products as equal image tiles with one-sentence captions.
- Reserve Snap Yellow `#fffc00` for Snapchat-branded material, as the guidelines describe.

**Don't**
- Don't use the browser-blue link colour; links are grey or black.
- Don't bold the mission statement; it is weight 400.
- Don't add shadows or rounded cards; only the language pill is rounded.
- Don't swap Inter for the Snapchat product faces on corporate pages.

## Responsive Behavior

Measured at 390px wide. The mission statement drops from 44px to **26px/31.2px** (display-mobile) and, in the mobile capture, runs over seven lines in a 326px-wide block. The captions drop from 16px/25.6px to 14px/22.4px. One header link was measured as visible on mobile (`headerLinksVisible: 1`). The capture shows only the four-dot menu button and the centred wordmark. In the mobile capture the three product tiles become a horizontal carousel with dot pagination, showing one tile at a time with the next one peeking. The footer links are listed vertically, and the language pill is full width. The stylesheet declares media queries at `max-width: 768px` / `min-width: 769px`, `max-width: 1024px` / `min-width: 1025px` and `max-width: 1240px`.

## Iteration Guide

1. Start with white, black Inter, and `#757575` uppercase 16px/500 nav in a 64px header.
2. Set the lead statement in Inter 44px/400 (26px on mobile) with 1.2 leading.
3. Add a centred 14px/600 eyebrow and an equal three-column tile grid with 16px/1.6 captions.
4. Frame the page with thin black rules; add no shadows.
5. Use black for every interactive emphasis (hover, outline pill). Introduce Snap Yellow only inside product branding.
6. Check the capture: the page should read as a quiet, almost print-like corporate sheet.
