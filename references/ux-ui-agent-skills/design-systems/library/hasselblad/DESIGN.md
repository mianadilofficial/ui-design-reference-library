---
version: alpha
name: Hasselblad
category: "Consumer Electronics"
description: "hasselblad.com, the Swedish camera maker's site: a pure #000000 canvas with white and 65% white (#ffffffa6) text, widely tracked uppercase Tw Cen headlines (34px/2px, 22px) and Outfit 14px copy, 1px white outlined 0px-radius buttons that invert to white on hover, and an orange #d95e00 nav hover."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffffa6"
  primary: "#cb2d2d"
  ink-subtle: "#808080"
  accent-hover: "#d95e00"
  hover-fill: "#f9f9f9"
typography:
  display:
    fontFamily: "\"Tw Cen\", \"Helvetica Neue\", Arial, Verdana, sans-serif"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 38px
    letterSpacing: 2px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Tw Cen\", \"Helvetica Neue\", Arial, Verdana, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 2px
    textTransform: uppercase
  heading:
    fontFamily: "\"Tw Cen\", \"Helvetica Neue\", Arial, Verdana, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: 2px
    textTransform: uppercase
  body:
    fontFamily: outfit, "Helvetica Neue", Arial, Verdana, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Tw Cen\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 1.8px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Tw Cen\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 2.45px
    textTransform: uppercase
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 38px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 10px 0px 12px
    height: 32px
    borderColor: "{colors.page-body}"
  button-secondary-hover:
    backgroundColor: "{colors.hover-fill}"
    textColor: "#060606"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    borderColor: "{colors.page-body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
  nav-link-hover:
    textColor: "{colors.accent-hover}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    padding: 5px 2px
    height: 31px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    padding: 0px 0px 64px
---

## Overview

hasselblad.com presents the camera brand as a dark gallery. The desktop pass measured a 1280px wide, 5909px tall page with 317 visible elements, and the entire page background is #000000 (area weight 2744, the only background recorded). The captured home page is a sequence of full-width black panels, each carrying one hero image and almost no text: a luminous eclipse-like image with the headline "HASSELBLAD MASTERS 2026" in gold-tinted letter-spaced capitals and a single "READ MORE" button; a camera held in two hands with "X2D II 100C" and "BRILLIANCE AT EVERY MOMENT" followed by "READ MORE" and "BUY NOW"; and a lens photographed on a grey gradient. Thin white rules separate the panels.

The header is a black strip. The wordmark sits left in an italic, widely spaced face; the five navigation labels (X SYSTEM, V SYSTEM, PHOCUS, SUPPORT, WHERE TO BUY) are centred in small tracked capitals; an account icon and an outlined "STORE" button sit on the right. Everything is uppercase, tracked and small. The restraint is the point: product photography supplies all the colour and the interface recedes to hairline outlines.

Pages research from the live site list the About, History, Press Releases and Contact pages and the footer groups Products, Inspiration, Support, Get a Hasselblad, Learn and About Hasselblad. The home page text also shows a "HASSELBLAD NEWSLETTER" signup in the footer.

## Colors

- **Canvas {colors.canvas}** (#000000): the only background measured.
- **Page body {colors.page-body}** (#ffffff): headlines, nav labels, button text and 1px outlines (547 characters, and 20 white border measurements).
- **Ink {colors.ink}** (#ffffffa6): white at about 65% alpha, the most-read colour (791 characters), used for descriptive copy such as the newsletter blurb.
- **Subtle {colors.ink-subtle}** (#808080): rare grey text (9 characters) and one border.
- **Primary {colors.primary}** (#cb2d2d): the generator's `primary`, a red measured as text on 28 characters. No filled primary CTA was detected (ctaPrimary is null) so this red is the only saturated measured colour; where it appears on the page is not tied to a role in the extraction.
- **Accent hover {colors.accent-hover}** (#d95e00): the orange text colour all five nav labels turn into on hover, from the recorded hover probe (rgb(217, 94, 0)).
- **Hover fill {colors.hover-fill}** (#f9f9f9): the STORE button background on hover (rgb(249, 249, 249)) with #060606 text.

The theme stylesheet also declares link colours (#0070d5, hover #2490e3, active #0058b0), a Swiper blue #007aff and grey button-gradient steps (#535759, #3b3e40, #6c7073). They belong to light-theme dialogs and carousels and were not measured on the dark home page, so they are not tokens. The hero's gold lettering is a gradient in the image-text and no gold value was measured.

## Typography

Two families: **Tw Cen** (552 characters, listed as "Tw Cen" with Helvetica Neue, Arial, Verdana fallbacks) for every headline, label and button, and **outfit** (823 characters) for 14px running text. Both are loaded as web fonts. Weight is 400 everywhere (1375 of 1375 characters); hierarchy is made by size and tracking, not weight.

- **Display** {typography.display}: Tw Cen 34px/38px, weight 400, 2px tracking, uppercase: the h1 ("X2D II 100C"). Mobile {typography.display-mobile}: 24px/28px, same tracking.
- **Heading** {typography.heading}: 22px/26px, 2px tracking, uppercase: the h2 ("BRILLIANCE AT EVERY MOMENT"). A 20px/24px label with 2.22px tracking is used in the footer.
- **Body** {typography.body}: Outfit 14px/20px, letter-spacing 0.25px in the measurement table (605 characters), colour #ffffffa6.
- **Link** {typography.link}: Tw Cen 12px/22px, 1.8px tracking, uppercase (the READ MORE buttons).
- **Button** {typography.button-secondary}: Tw Cen 13px/32px, 2.45px tracking, uppercase (STORE).

Nav labels are 12px with 2.004px tracking and 16px line-height. A 9px/0.9px size appears on 28 characters (the same count as the red text). Tw Cen is a commercial geometric sans; Century Gothic-style geometric sans faces are a reasonable open substitute, which is a recommendation and not a measurement.

## Layout

Sections are full-bleed 1280px-wide panels, each as tall as roughly a screen; the hero text is centred horizontally and positioned in the lower-centre of the image. The header spans the width with the logo at the far left, nav centred and utilities right. Measured paddings: 20px (19), 12px (15), 6px (14), 40px (8), 8px (8), 48px (4), 5px (3), 2px (3). The footer is padded 64px at the bottom. No flex or grid gap values were recorded.

## Elevation & Depth

No shadow is measured (boxShadows is empty). Depth comes from photographic lighting: a glow, a spotlit camera and a lens on a light-to-dark grey ground. UI elements are flat outlines.

## Shapes

All measured interactive elements compute a border-radius of 0px: the STORE button, READ MORE links and nav links each report borderRadius 0px in the hover probe. The only radius in the frequency table is 50% (6 elements), which belongs to circular icons such as the account icon. Therefore {rounded.none} is 0px and {rounded.pill} (9999px) is only the generator's round-shape token for circles. Buttons are sharp rectangles with a 1px white border.

## Components

- **Secondary button (STORE)**: {colors.canvas} fill, {colors.page-body} text and 1px solid white border, 32px high, padding 0px 10px 0px 12px, 13px Tw Cen tracked 2.45px, 0px radius. Hover inverts: background rgb(249, 249, 249), text rgb(6, 6, 6).
- **Outline link button (READ MORE / BUY NOW)**: transparent fill, white text and 1px white border, 12px Tw Cen, padding 6px 12px, 36px high. Hover: white fill, black text.
- **Nav link**: white text, 12px, tracking 2.004px; hover colour #d95e00 with no background or border change.
- **Text input**: 14px Outfit, padding 5px 2px, 31px high, white text; used by the newsletter signup.
- **Header / footer**: black fills; the footer padding is 0px 0px 64px and its headline is 20px Tw Cen.

No filled primary button exists on the measured page.

## Design System Architecture

No public design system or brand guideline was found: the home page lists About, Press Releases, History and Contact pages, and no design or brand-guidelines page; no search was run. The de-facto system is the site's own stylesheet with generic UI variables: --button-bg rgba(0,0,0,0.04), --black-border rgba(0,0,0,0.15), --text-default rgba(0,0,0,0.65), --text-blod rgba(0,0,0,0.85), --dialog-bg #fff, --swiper-navigation-size 44px, and gradient button variables (--button-primary-bg: linear-gradient(var(--button-primary-color-1), var(--button-primary-color-2))). These are light-theme component defaults; the dark home page overrides them with bespoke outline buttons.

## Do's and Don'ts

- Do keep the canvas pure #000000 and let product photography be the only colour.
- Do set labels and headlines in uppercase Tw Cen with 1.8px to 2.45px tracking.
- Do use 1px white outline buttons with 0px radius that invert on hover.
- Do keep weight at 400.
- Don't round buttons or add shadows.
- Don't fill buttons with the red #cb2d2d; it was measured only as text.
- Don't use the stylesheet's blue link colours on the dark pages.

## Responsive Behavior

Mobile was measured: the h1 shrinks from 34px to 24px (line-height 28px); body copy goes from 14px/20px to 12px/16px; the size ladder is 14px (589 characters), 12px (371), 16px (207), 24px (134) and 9px (28). The mobile nav element reads black text on #000000. No primary CTA was found on mobile. Breakpoints and column behaviour are not measured.

## Iteration Guide

1. Start with a #000000 page and one image-led panel per message.
2. Headline in Tw Cen uppercase 34px/38px with 2px tracking; supporting line at 22px.
3. Add one or two outline buttons (12px, 1px white border, 0px radius).
4. Make hover states invert fill and text; make nav hovers #d95e00.
5. Measure new pages with `node web/scripts/extract-tokens.mjs --slug=hasselblad--<page> --url=<url> --force --no-motion` before adding tokens.
