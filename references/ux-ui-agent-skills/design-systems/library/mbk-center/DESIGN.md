---
version: alpha
name: MBK Center
category: "Thai Brands"
description: "Design language of the MBK Center shopping-mall website: Kanit for all Thai and Latin text, near-black #111111 ink on white, a red-violet #ac1681 action colour with a #e10098 hover, a 4px button radius, and a loud multicolour gradient (gold to orange to magenta to violet to indigo) behind vividly illustrated category tiles."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#ac1681"
  on-primary: "#ffffff"
  surface-black: "#000000"
  surface-soft: "#f8f8f8"
  ink-muted: "#666666"
  ink-strong: "#272727"
  hairline: "#ced4da"
  primary-hover: "#e10098"
  input-text: "#495057"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 56px
    textTransform: uppercase
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 44.8px
    textTransform: uppercase
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    textTransform: uppercase
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 18.2px
    textTransform: uppercase
  link:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  lg: 14px
  xl: 15px
  2xl: 100px
spacing:
  s1: 1px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 7.5px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 15px
    height: 39px
  button-primary-hover:
    textColor: "{colors.primary-hover}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 0px 8px 0px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.hairline}"
  card:
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 8px 2px
  footer:
    textColor: "{colors.canvas}"
    padding: 40px 0px 0px
---

## Overview

MBK Center's website (the title reads "MBK Center" in the page head, followed by a Thai description of a clothing, souvenir and food shopping destination in Bangkok) is a Thai-language retail portal. The measured H1 reads "MBK CENTER แหล่งช้อปปิ้งของวัยรุ่นในกรุงเทพฯ", which in English says MBK Center is a shopping destination for young people in Bangkok. The page is dense, colourful and promotional rather than quiet: a rotating banner at the very top, a contact strip ("MBK CONTACT CENTER 1285" and an email address), a white navigation bar, then colour-saturated zone tiles on a rainbow gradient background, followed by white and black content bands.

The brand colour is a red-violet. The site's CSS names it --red-violet (#ac1681) and pairs it with --hollywood (#E10098), a hotter magenta that appears on hover. Around those two, the stylesheet defines a five-stop brand gradient (#FFC72C, #E56A54, #E10098, #84329B, #24135F) and a separate bright "cool" gradient (#9900FF, #FF33FF, #F9F906, #99FF00, #0000FF). The gradients carry the personality; neutrals (#111111 text on #ffffff, #f8f8f8 panels, black bands) keep the content legible.

A promotional popup (an AI Challenge campaign banner with its own close and details controls) overlays the capture and dims the page. Those popup controls are campaign UI and are not described here as part of the brand system.

The tone of the copy is friendly and direct: short zone descriptions such as supermarket, IT mobile and gadget, dining, services, home solutions, entertainment, souvenir, fashion and beauty, gold and jewelry, each paired with an illustrated icon tile.

## Colors

- **Canvas #ffffff**: main page background and the navigation bar.
- **Surface-black #000000**: the largest background area by measurement; full-width black bands behind imagery and in the footer zone.
- **Surface-soft #f8f8f8**: light panel behind secondary content (declared as --alabaster).
- **Ink #111111**: the most-read text colour (declared as --cod-gray), used for the H1.
- **Ink-strong #272727** (declared as --silver-chalice) and **ink-muted #666666** (declared as --dove-gray): body and caption greys.
- **Primary #ac1681**: the action colour, with white text on filled buttons. **Primary-hover #e10098** is the lighter magenta that the button's hover layer and link hover use.
- **Hairline #ced4da** and **input-text #495057**: form field border and text, matching the Bootstrap defaults the site is built on.

The stylesheet also contains Bootstrap's default blue (#007bff), greens and greys. Those are framework defaults, not brand colours, and are dropped here.

Gradient recipe: use the brand gradient left to right (#FFC72C, #E56A54, #E10098, #84329B, #24135F) as a section background only, and put illustrated tiles on top; never put body text directly on the gradient.

## Typography

Kanit is the only family in use, covering Thai and Latin glyphs, and it is used at heavy weights. The H1 is 40px, weight 700, 56px line height, uppercase. Section headings such as the zones heading are 32px weight 700 with 44.8px line height, also uppercase, and white when placed on a dark band. Body text is measured at 16px with weight 700 and 24px line height (the page's intro paragraph is bold, in #666666), which is unusually heavy for body; secondary links are 16px weight 400. Buttons are 14px weight 600 with 21px line height, uppercase. Navigation is 13px weight 600 with 18.2px line height, uppercase, white on the dark strip.

On a phone the display role scales to 32px with a 44.8px line height. Font sizes by usage frequency on the desktop capture are 16px, 18px, 14px and 20px, with 12px, 13px, 24px, 32px and 40px as rarer steps. Weights used are 700 (most common), 400, 600 and 900 (icon font only). Icons come from Font Awesome 6 (free and brands) for the contact strip and social icons.

Font substitutes: Kanit is an open-source Thai and Latin family; if it cannot be loaded, use a sans-serif with Thai support such as Noto Sans Thai at similar weights.

## Layout

The page is a stack of full-width bands inside a roughly 1110px content column (the H1 and body text blocks measure 1110px wide in a 1280px viewport). The order is: carousel banner, contact strip with social icons, white navigation bar, a gradient band with a five-column grid of illustrated zone tiles over two rows, a white MBK PLUS band with a centred heading and a small two-square divider in black and magenta, then a promotions and activities section with a centred heading and the same divider.

Zone tiles are square illustration cards each with a caption underneath. The grid has five columns on desktop. The site declares breakpoints of 576px, 768px, 992px and 1200px in its CSS. Spacing values measured include 1px, 3px, 5px, 6px, 7px, 7.5px, 8px, 10px, 12px and 14px for small gaps; the footer uses 40px top padding.

## Elevation & Depth

Depth is largely flat. The card shadow measured is rgba(0, 0, 0, 0.1) 0px 2px 8px 2px, a soft diffuse lift, and the button shadow is effectively transparent. The visual hierarchy comes from colour blocking, gradients and the illustrated tiles instead of shadow. A dark translucent scrim dims the page behind the popup in the capture.

## Shapes

Radii are small and practical: 4px on buttons, 6px, 10px on cards (the extraction also records 10px top-only and bottom-only radii), 14px and 15px on larger tiles, and 100px for pill elements. Form inputs are square (0px radius) with a 1px #ced4da border. 

## Components

- **Primary button**: red-violet #ac1681 fill, white uppercase Kanit 14px weight 600, 4px radius, 8px 15px padding, 39px height. A hover layer fills with #e10098.
- **Navigation**: white 13px uppercase links measured with 8px right padding on the top strip; the contact bar above carries the call-centre number and email with icons; social icons (including TikTok, YouTube, X, Instagram, Facebook) sit at the right.
- **Text input**: white, #ced4da 1px border, 6px 12px padding, 38px height, 14px text in #495057.
- **Card**: 10px radius, soft shadow.
- **Zone tile**: square illustration on a saturated colour with an uppercase English label and a Thai caption beneath.
- **Footer**: 40px top padding, white text, 317px tall (its background was not captured as a fill).

## Design System Architecture

No public design system for MBK Center was reachable: the official site returned a certificate verification error when fetched, and the MBK Group homepage I opened (https://www.mbkgroup.co.th/) exposed no brand guidance. The de-facto system is readable from the shipped CSS variables in the extraction: Bootstrap-style variables (--primary #007bff, --breakpoint-sm to xl) with a local colour layer named after the paint colour (--red-violet, --hollywood, --cod-gray, --dove-gray, --silver-chalice, --alabaster), gradient variables (--main-bg, --gd-violet-bg, --mbcool-bg), and Font Awesome 6 variables. Animation uses animate.css-style variables (--animate-duration, --animate-delay). Everything here is inferred only from those declared variables and measured elements.

## Do's and Don'ts

- Do use Kanit throughout, uppercase for headings and buttons.
- Do use #ac1681 for actions and #e10098 for their hover state.
- Do keep gradients as section backgrounds under illustrated tiles.
- Do keep the divider motif: two small squares, black and magenta, under centred headings.
- Don't use Bootstrap's blue (#007bff) as a brand colour.
- Don't set long paragraphs in weight 700 unless matching the measured intro style; prefer weight 400 for new copy.
- Don't put text on the rainbow gradient without a solid tile behind it.
- Don't document popup controls as brand components.

## Responsive Behavior

The mobile measurement shows the display heading dropping from 40px to 32px with a 44.8px line height; both stay Kanit weight 700 uppercase. The CSS declares breakpoints at 576px, 768px, 992px and 1200px, consistent with Bootstrap's grid. No further mobile layout was measured, so column counts at narrow widths are not stated here.

## Iteration Guide

1. Set Kanit and the 40px/32px heading pair first.
2. Apply #ac1681 buttons with white 14px uppercase labels and 4px radius.
3. Add the #e10098 hover and keep the same 39px height.
4. Build one gradient band with illustrated tiles, then return to white bands for reading.
5. Use #f8f8f8 for panels and #000000 for dramatic bands.
6. Verify numbers against the extraction in web/data/extracted/mbk-center.json before changing them.
