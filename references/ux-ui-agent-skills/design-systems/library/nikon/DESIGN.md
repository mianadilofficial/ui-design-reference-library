---
version: alpha
name: "Nikon"
category: "Consumer Electronics"
description: "Nikon Corporation's global home page: monochrome Roboto interface (40px 500 tile titles with 2.4px tracking, 18px nav), #ffffff and #f3f3f3 surfaces, #222222 ink and primary, #111111 footer, a #000000b3 translucent header over three full-bleed photo panels, and square corners with 2px and 6px radii."
colors:
  canvas: "#ffffff"
  surface-grey: "#f3f3f3"
  ink: "#222222"
  primary: "#222222"
  on-primary: "#ffffff"
  footer-black: "#111111"
  ink-strong: "#000000"
  hairline: "#949494"
  primary-hover: "#6e6e6e"
  nav-bg: "#000000b3"
typography:
  display:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 56px
    letterSpacing: 2.4px
  display-mobile:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 27px
    fontWeight: 500
    lineHeight: 37.8px
  heading:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 33px
    fontWeight: 500
    lineHeight: 46.2px
  body:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  button:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  nav:
    fontFamily: Roboto, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25.2px
rounded:
  xs: 2px
  sm: 6px
  none: 0px
spacing:
  s1: 1px
  s2: 8px
  s3: 9px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 44px
components:
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 9px
    height: 44px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.footer-black}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

The measured page is https://www.nikon.com/ (title "Nikon", language `en`), the global corporate home of Nikon Corporation. The opened page lists three top-level areas (Business, Consumer, About Us), Global Network, News, Updates, RSS Feeds, Social Media Accounts and Contacts, and carries a "© 2026 Nikon Corporation" footer. The scroll height is 1790px at 1280px wide.

The capture reads top to bottom: a light region-selector bar ("Select your country/region", "You are in our Global Site", a country dropdown set to Thailand, a "Go" button and a close icon); a header with the yellow Nikon logo tile at left and four right-aligned nav items (Business, Consumer, About Us, Global Network with a globe icon) over a translucent black bar; three equal full-height photo panels titled BUSINESS (a technician with a tablet and a robot arm), CONSUMER (a skateboarder with a camera) and ABOUT US (the Nikon headquarters entrance), each with a white-outlined link ("Products & Solutions", "Products & Services", "Company Information"); a white "News" section with a date, a grey category label and a headline per row; a pale grey band with two notices; and a near-black footer with link rows and social icons. A circular back-to-top control sits at lower right.

The tone is a restrained, corporate, Japanese-multinational layout: monochrome interface, bright documentary photography as the only color, uppercase wide-tracked tile titles and plain news rows. The region-selector bar, its "Go" button and the back-to-top control are utility chrome and are not treated as brand components below.

## Colors

The interface is monochrome. Measured backgrounds: `#f3f3f3` (largest area, 1237 units), `#111111` (footer, 295), `#000000b3` (translucent black header, 138), `#ffffff` (canvas) and `#222222`.

- **Canvas `#ffffff`** is the body and news-section background.
- **Page grey `#f3f3f3`** is the largest measured background and fills the notices band.
- **Ink `#222222`** is the most-read text color (720 characters); `#000000` colors headings and the select text (79 characters).
- **Primary `#222222`** is the near-black action color (the only filled control measured), with a hover fill of `#6e6e6e`. A 1px `#949494` border is used on that control and on the select.
- **White `#ffffff`** colors text on photos, the header and the footer (431 characters).
- **Footer `#111111`** is the dark base; **header `#000000b3`** is a 70%-alpha black over the photo panels.

The stylesheet also contains a `#e10000` red (eight uses) and a `#3860be` blue, but no rendered element was measured with them, so they are not tokens. The yellow of the logo tile is raster/SVG artwork and was not measured as a page color.

## Typography

One family: Roboto (loaded at 400 and 500), with Helvetica, Arial and sans-serif fallbacks. The hero tile titles ("BUSINESS", "CONSUMER", "ABOUT US") are 40px / 500 / 56px line height with 2.4px letter spacing (27px / 37.8px on the 390px mobile pass); the "News" h2 is 33px / 500 / 46.2px (27px on mobile); nav links are 18px / 500 / 25.2px; the control and select text is 18px / 400; body text is 14px / 400 / 19.6px; the body default is 16px / 22.4px. Other sizes present are 21px and 23px. Roboto is an open-source family and needs no substitute.

## Layout

The home page divides the first screen into three equal full-bleed vertical photo panels, with titles centered in each. The news list is a centered column with row dividers, a fixed date column, a fixed-width category label and a flexible headline column. Measured gaps: 32px (8 uses), 16px, 40px, 20px, 12px, 8px and 44px; paddings: 16px (16 uses), 80px (7), 24px, 44px, 9px and 8px. The footer has two link rows separated by a thin rule, with social icons on the first row and the legal links (Contacts, Privacy Management, Website Privacy Notice, Terms of Use, Cookie Notice, Cookie Settings) on the second.

## Elevation & Depth

No box shadows were measured. On the measured page every panel, row and bar is flat and edge to edge. Depth is photographic, plus the translucent black header (`#000000b3`) over the images and the contrast of the dark `#111111` footer against `#f3f3f3`.

## Shapes

Mostly square. Radii measured are 2px (five elements) and 6px (one, the select). The measured control and header compute to 0px, so the tokens carry `none: 0px`, `xs: 2px` and `sm: 6px`.

## Components

- **nav**: `#000000b3` bar, white 18px / 500 links with chevrons and a search icon.
- **tile link** (in the capture): a white-outlined box with white text over each photo panel; its border width was not measured separately.
- **text-input**: the country select, white fill, `#000000` text at 18px, 6px radius, 9px padding, 44px tall, 1px `#949494` border.
- **news row**: date, grey category label with 2px radius, headline with a chevron or a PDF icon, and a divider rule.
- **footer**: `#111111` fill, white 16px links, social icons for Facebook, LinkedIn and Instagram.

## Content and Voice

Copy is factual, dated and corporate. The news list on the capture shows entries such as "Change of Officers' Assignments", "Nikon Announces Reorganization of Corporate Structure", "Nikon Adds 3D Vision Tracking to Its Robot Vision System" and "Nikon releases the Z5IIC full-frame mirrorless camera", each tagged with a category label (Corporate Information, Business Products, Consumer Products) and marked with a PDF icon and file size where the item is a document. Notices below the news use plain sentences with a chevron or a warning triangle, for instance a warning about suspicious emails imitating public relations notices. The three entry points are named by audience (Business, Consumer, About Us) rather than by product, which makes the home page a router to separate sub-sites, and the opened page links each area to its own path under nikon.com.

## Design System Architecture

No public design system, brand guideline or press kit is published: the opened page https://www.nikon.com lists no brand-guidelines or logo-usage page, only a logo file (`logo.svg`), the news section and a news RSS feed. The extraction found only two root variables, `--swiper-theme-color` and `--swiper-navigation-size` (44px), both from the Swiper carousel library, so the de-facto system is a single typeface, a grey scale (`#000000`, `#111111`, `#222222`, `#6e6e6e`, `#949494`, `#f3f3f3`, `#ffffff`) and a flat, mostly square shape language.

## Do's and Don'ts

- Do keep the interface monochrome and let photography supply color.
- Do set tile titles in Roboto 500 at 40px with 2.4px tracking, and nav in 18px / 500.
- Do use `#222222` for text and primary controls with a `#6e6e6e` hover.
- Do use a translucent black header (`#000000b3`) over imagery.
- Don't document the country selector, its "Go" button or the back-to-top circle as brand components.
- Don't add shadows or large radii; none were measured.
- Don't use the stylesheet's red or blue as brand colors without measuring them on an element.

## Responsive Behavior

The 390px mobile pass recorded the h1 at 27px / 37.8px, the h2 at 27px / 37.8px, body text at 14px / 19.6px and the primary control unchanged. How the three photo panels, the header and the news rows reflow was not measured, and no breakpoint values were captured.

## Iteration Guide

1. Use `#ffffff` and `#f3f3f3` surfaces with `#222222` text and a `#111111` footer.
2. Make the first screen three photo panels with 40px Roboto 500 titles, 2.4px tracking, white.
3. List news with a date, a grey category label (2px radius) and a headline.
4. Keep every other element square, flat and shadowless.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=nikon --force --no-motion`, regenerate with `node web/scripts/generate-frontmatter.mjs --slug=nikon`, and gate with `node web/scripts/verify-designs.mjs --slug=nikon`.
