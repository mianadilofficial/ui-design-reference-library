---
version: alpha
name: Deloitte Southeast Asia
category: "Agencies & Studios"
description: "Deloitte Southeast Asia (deloitte.com/southeast-asia/en.html) measured at 1280px: a black header and hero over a white page, Open Sans in weights 300/400/600, a 40px light h1, #007cb0 blue action pills with 100px radius, 8px-radius white cards with a rgba(0, 0, 0, 0.16) 0px 3px 6px 0px shadow, and full-width section label bars in green #26890d, blue #007cb0 and teal #0d8390."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#007cb0"
  surface-muted: "#f5f6f6"
  ink-muted: "#53565a"
  ink-on-dark: "#d0d0ce"
  border-blue: "#1076a8"
  band-green: "#26890d"
  band-teal: "#0d8390"
  accent-lime: "#86bc25"
typography:
  display:
    fontFamily: "\"Open Sans\", Aptos, Helvetica, sans-serif"
    fontSize: 40px
    fontWeight: 300
  display-mobile:
    fontFamily: "\"Open Sans\", Aptos, Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 300
  subheading:
    fontFamily: "\"Open Sans\", Aptos, Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 600
  body:
    fontFamily: "\"Open Sans\", Aptos, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Open Sans\", Aptos, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  link:
    fontFamily: "\"Open Sans\", Aptos, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2.88px
  sm: 8px
  md: 10px
  lg: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 56px
  s10: 70px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-on-dark}"
  nav-link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.sm}"
    padding: 24px 16px 16px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px
---

## Overview

This file documents the Deloitte Southeast Asia regional site, `https://www.deloitte.com/southeast-asia/en.html`. The root domain resolves to this page, so the document is named after the measured regional site rather than the global network. The measurement was taken at a 1280px desktop viewport and a 390px mobile viewport, after the regional site-selector dialog, its modal backdrop and the regional-experience gateway dialog were hidden. Those overlays are not brand UI and are not documented as such.

The page reads as a corporate editorial site. A 48px black header sits above a black hero that carries a 40px light-weight headline ("Agentic AI: Orchestrating Intelligent Operations"), a short paragraph and a blue pill button, with a rendered 3D ring graphic on the right. Below it the page turns to a white canvas with thin full-width label bars ("Our thinking" in green, "Our work" in blue, "Careers" in teal), a row of four white cards on a pale grey band, a split image-and-text feature, a careers block with two pill buttons, and a black footer ("Let's connect") with a legal paragraph.

The tone is calm and institutional: light-weight large type, generous 56px section padding, one saturated blue for actions and links, and photography or abstract artwork for colour. The measured text is entirely set in Open Sans (the only family by character count, 4052 characters), with Aptos and Helvetica as named fallbacks in the stack.

## Colors

The palette is measured from background area and text character weight on the live page.

- **canvas `#ffffff`** and **page-largest `#000000`**: the page alternates between white content areas and black areas. Black is the largest background by area (weight 2045), then `#f5f6f6` (987), then white (781).
- **ink `#000000`**: the most-read text colour on light areas (2311 characters).
- **ink-muted `#53565a`**: secondary text, used for card descriptions and captions (1119 characters).
- **ink-on-dark `#d0d0ce`**: text on the black header and hero, including the h1 and the navigation links (433 characters). White `#ffffff` is also used on the coloured label bars.
- **primary `#007cb0`**: the action and link colour. It fills the "Our work" label bar, is the link colour (58 characters) and is the fill of the pill buttons in the capture. The detector did not classify a primary CTA, so no `button` component is declared; the colour is documented from the measured background and link usage.
- **border-blue `#1076a8`**: the only measured border colour (7 elements). The same value is the background of the "Skip to main content" link.
- **band-green `#26890d`**, **band-teal `#0d8390`**: the "Our thinking" and "Careers" label bars, 353 area-weight each, the same weight as the blue "Our work" bar.
- **accent-lime `#86bc25`**: measured with a tiny area weight of 1; it appears in the capture as the progress line beneath the "Our work" carousel. It is documented as an accent, not as a surface.
- **surface-muted `#f5f6f6`**: the pale grey band behind the card row.

Do not use the `--swiper-theme-color: #007aff` root variable as a brand colour. It is the carousel library's default, not a Deloitte value.

## Typography

All measured text is Open Sans, loaded in weights 300, 400 (normal and italic), 600 and 700, plus a font named "Dcom-EDE" at 400. The stack is `"Open Sans", Aptos, Helvetica, sans-serif`. Open Sans is a public typeface, so no substitute is needed.

| Role | Size | Weight | Line height |
|---|---|---|---|
| display (h1) | 40px | 300 | normal |
| display-mobile (h1 at 390px) | 32px | 300 | normal |
| subheading (h3 label bars) | 18px | 600 | normal |
| body paragraph | 16px | 400 | 28px |
| nav link | 14px | 400 | 21px |
| link (footer legal) | 12px | 400 | 18px |

The font-size distribution by characters is 16px (1639), 14px (1292), 12px (680), 20px (201), 40px (152), 24px (61) and 18px (27). Card titles are 20px with a 28px line height. The root variables define `--font-weight-regular: 300` and `--font-weight-bold: 600`, which matches the light display type and 600-weight labels seen on the page. No letter-spacing was recorded, and no text-transform other than none.

## Layout

The page uses a centred content column. The measured header spans 1280px, and the first content band measured a content left edge of 56px and right edge of 640px for the hero text block. Section padding is dominated by 56px (11 elements), with 8px, 14px and 40px each on 6 elements, 24px on 5 and 16px on 4. Gaps are 40px (6), 32px (5) and 16px (5).

The card row shows at most four columns on desktop (`maxCardColumns: 4`), and four header links are visible at desktop width. Sections are separated by full-width coloured label bars rather than by rules, and the "Our work" block is a two-column split of text and photograph with a carousel counter ("1/4") and a progress line. The footer is black with a large "Let's connect" heading, a column of four action links, two columns of smaller links and social icons.

## Elevation & Depth

Depth is minimal. The only measured shadow is `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` on the four white cards (weight 4). The skip link also carries `rgba(0, 0, 0, 0.16) 1px 2px 8px 0px`. There are no layered or coloured shadows. Hierarchy comes instead from the black-to-white band alternation and from the saturated label bars.

## Shapes

The measured border radii are 8px (8 elements, the cards), 100px (7 elements, the pill buttons), 10px (2) and 2.88px (1). The header, label bars and the large feature images compute 0px radius. Pills use `rounded.lg` (100px); cards use `rounded.sm` (8px); `rounded.md` (10px) and `rounded.xs` (2.88px) are minor one-off values.

## Components

**Navigation.** A 48px black header with Deloitte wordmark, four links ("Who we are", "What we do", "Our Thinking", "Careers") in 14px, 400 weight, colour `#d0d0ce`, plus Search and a region selector ("SOUTHEAST ASIA - EN") on the right. At 390px the four links are replaced by a menu toggle labelled "menu".

**Cards.** White background, 8px radius, `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` shadow, padding `24px 16px 16px`, 20px title at 400 weight on a 28px line, a muted description and a category tag ("Perspective", "Analysis", "Research"), followed by an image.

**Pill buttons.** Blue pills with a 100px radius and white label ("Read the paper", "Read the full story", "Explore careers", "Search and apply"). Their fill and size were not recorded as a CTA by the extractor, so only the colour family and radius are asserted here, from the measured `#007cb0` background and the 100px radius.

**Label bars.** Full-width 18px/600 white text on `#26890d`, `#007cb0` or `#0d8390`.

**Links.** 12px, 400, colour `#007cb0`, in the footer legal text. The "See awards & recognition" link is a blue text link with an arrow.

**Focus.** The skip link shows a `1px dashed rgb(208, 208, 206)` outline with 1px offset when keyboard-focused. Hover states were not recorded (the hover list is empty).

## Design System Architecture

No public Deloitte design system or brand-guideline link was found on the pages opened, and no WebSearch was used. The de-facto system is visible in the shipped page: a small set of CSS custom properties (`--font-weight-regular`, `--font-weight-bold`, `--headerfragment-height: 48px`, `--app-height`) and the Swiper carousel variables (`--swiper-theme-color`, `--swiper-navigation-size: 44px`). Dialog names such as `cmp-site-selector-dialog` and the `cmp-` prefix indicate component naming on the page. The stylesheet declares media queries at `max-width 767px` (385 rules), `min-width 1201px`, `max-width 1200px`, `min-width 768px` and `max-width 1023px`, among others.

## Do's and Don'ts

- Do set headings in Open Sans 300 at 40px on desktop and keep body copy at 16px/28px.
- Do use `#007cb0` for links and action pills with a 100px radius.
- Do alternate black and white bands and introduce sections with a full-width 18px/600 label bar.
- Do keep card shadows to the single `0px 3px 6px` value at 0.16 black alpha.
- Don't use `#007aff` (the Swiper default) or browser link blues.
- Don't add radius to label bars or the header; they measure 0px.
- Don't document the regional site-selector dialog or its backdrop as brand UI.
- Don't treat `#86bc25` as a surface colour; its measured area is negligible.

## Responsive Behavior

Measured at 390px: the h1 is 32px at weight 300 (down from 40px), body text stays 16px at 28px line height, card titles are 22px, and the header shows 0 links with a visible "menu" toggle. The card row still reports a maximum of four columns in the mobile pass, so the column count at mobile is not measured beyond that figure. The page height at mobile is 6731px against 4628px at desktop. Breakpoint values in the shipped CSS include 767px, 768px, 1023px, 1024px, 1200px and 1201px. Behaviour at other widths is not measured.

## Iteration Guide

1. Start from `canvas` white and `page-largest` black bands; put the h1 in `display` on black with `ink-on-dark`.
2. Add one `primary` pill (100px radius) for the hero action and repeat it in the feature and careers blocks.
3. Introduce each content section with a label bar in `band-green`, `primary` or `band-teal`.
4. Place four `card` components (8px radius, 24px 16px 16px padding) on a `surface-muted` band.
5. Finish with a black footer with a 12px legal paragraph and `link` styling.
6. Re-measure rather than guess: hover states, button fills and tablet widths are not recorded here, so any value you need for them must be measured first.
