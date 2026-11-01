---
version: alpha
name: "Madar"
category: "Tech & AI"
description: "Madar logistics platform site: midnight navy canvas #172e64 and indigo #060a3d, white Suisse type at weights 300 and 400, orange accent #fb441a and #ff6340, 5px radius, translucent cyan cards and no shadows."
colors:
  canvas: "#172e64"
  page-body: "#060a3d"
  ink: "#ffffff"
  primary: "#fb441a"
  navy-tint: "#172e6466"
  ink-muted: "#ffffff99"
  ink-subtle: "#ffffff8c"
  accent-coral: "#ff6340"
  hairline: "#ffffff33"
  link-bg: "#ffffff1a"
  card-bg: "#7de1ff33"
typography:
  display:
    fontFamily: Suisse, helvetica, arial, sans-serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 30px
  display-mobile:
    fontFamily: Suisse, helvetica, arial, sans-serif
    fontSize: 25px
    fontWeight: 300
    lineHeight: 28px
  heading:
    fontFamily: Suisse, helvetica, arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15px
  body:
    fontFamily: Suisse, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 20px
  nav:
    fontFamily: Suisse, helvetica, arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 15px
  input:
    fontFamily: Suisse, helvetica, arial, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 22px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 40px
spacing:
  s1: 5px
  s2: 6px
  s3: 8.4px
  s4: 10px
  s5: 13.2px
  s6: 15px
  s7: 20px
  s8: 27px
  s9: 40px
  s10: 120px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 6px 5px
    height: 40px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 10px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    height: 42px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 20px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Madar (madarplatform.com, English site at /en) is a logistics platform that, according to its fetched home page, joins freight shippers and carriers: real-time shipment tracking and driver-behavior analysis, automated compliance and route planning, a digital wallet and invoicing, a freight marketplace with dynamic pricing and auctions, and open API integration with existing TMS systems. The site names cement, oil, FMCG and healthcare as heavy-logistics sectors and links to a case study with a cement company. The visual identity is a deep midnight-blue world with a hot orange-red accent: the hero is a near-black indigo (`#060a3d`, measured as the body-level dark background) lit by a faint warm glow, and the content sections beneath are a mid navy (`#172e64`). A rounded navigation capsule holds the Madar logo and a menu icon, and a coral "Get Started" button sits beside it. The measured page is very tall (21773px at 1280px). The capture of the hero is mostly empty because the hero content is placed in a sticky animated layer, and the extractor flagged that layer as an overlay and hid it; no popup content was documented.

## Colors

`canvas` `#172e64` is the dominant content background (area 8262), followed closely by `page-body` `#060a3d` (8192) for the hero and the darkest bands. A translucent blue `#264ea799` covers 3927 area units for panels, white covers 2612, and `#172e640d` (navy at 5%) and `#ffffff0d` (white at 5%) are faint overlays. Text is mostly white (5372 characters), with the navy `#172e64` used for text on white panels (477), a navy at 40% (`#172e6466`, 197), white at 60% (`#ffffff99`, `ink-muted`) and white at 55% (`#ffffff8c`, `ink-subtle`). The accent family is orange: `primary` `#fb441a` (published as `--color-orange-dark`) is the fill the "Get Started" button turns to on hover, and `accent-coral` `#ff6340` (`--t-primary`, `--color-orange`) is the resting fill. A pale cyan `#7de1ff33` (`card-bg`) tints cards and white at 10% (`#ffffff1a`) fills link chips with a 20% white hairline (`#ffffff33`). Further published root colors are a light blue `#89AEFF`, a purple `#A65DB4` (`--color-pink`) and an error red `#D70000`; they are in the stylesheet but not measured as dominant on the page, so they are not tokens.

## Typography

The only family is Suisse (weights 300 and 400, `helvetica, arial, sans-serif` fallbacks). The 28px/30px weight-300 step is the display size and the logotype text, 16px/20px weight 300 is body (4035 characters, the most used size), 18px/22px weight 300 is the input text, 13px/15px weight 400 is navigation and 12px/15px weight 400 is the heading/label step used for button and link chips. Large numerals use 90px (145 characters) and 44px (51); 10px (109) is the micro-label size. The look is a light, airy Swiss grotesque: weight 300 almost everywhere, with 400 reserved for small labels.

## Layout

Padding is dense and regular: 8.4px (164 uses), 20px (137), 27px (48), 5px, 10px and 6px, with section paddings of 40px, 120px, 140px and 180px, and 10px gaps (72 uses). The root variable `--container-h-padding` is 15px. Navigation is a floating capsule at the top left (an inline logo plus a menu toggle) with a separate action button next to it rather than a full-width bar, so the page header is mostly empty space and the hero is a full-viewport stage. Content sections that follow alternate navy and indigo bands, with cards at 20px padding.

## Elevation & Depth

There are no box-shadows. Depth is made with translucent layers: `#264ea799` panels, white-at-5% and navy-at-5% veils, black at 20% (`#00000033`) and a soft glow in the hero. The root variables `--t-blur` (`rgba(23, 46, 100, .05)`) and `--t-line` family show the system defines thin lines and blur tints at low alpha.

## Shapes

Radii measured: 5px on 42 elements (the main radius, `rounded.md`, used by the "Get Started" button and cards), 3px (`rounded.sm`, links and chips), 2px (`rounded.xs`), a 2px top-corners-only shape on 31 elements (tabs or bars), and 40px (`rounded.lg`, seven elements such as large capsules). Split-button shapes with only left or right corners at 5px also appear.

## Components

- **Get Started button:** a 40px-tall button with a white 1px border and 5px radius; transparent at rest in the hover measurement, it fills with `#fb441a` on hover. In the capture the resting button is a coral fill with the label top-left and a down chevron at right, which marks it as a dropdown.
- **Link chip (link):** `#ffffff1a` fill, white 12px/400 text, 3px radius, `#ffffff33` border.
- **Nav capsule:** logo and a two-line menu icon on a translucent navy capsule, 13px/400 navigation text where links are visible.
- **Card:** `#7de1ff33` background, 5px radius, 20px padding, white text.
- **Input:** 42px tall, 18px weight 300 text in navy on a white field.
- **Footer:** `#172e64` background with white text.

## Design System Architecture

No official design system, style guide or brand-guideline page is linked from the site (the fetched page lists only navigation, product entry points such as Open Transport Market and Platform Login, and legal pages); source: http://madarplatform.com/en/. The de-facto system is a set of CSS custom properties in the root: color primitives (`--color-blue` #172E64, `--color-blue-dark` #060A3D, `--color-blue-light` #89AEFF, `--color-orange` #FF6340, `--color-orange-dark` #FB441A, `--color-pink` #A65DB4, `--color-gray` #E1E1ED, `--color-white`, `--color-error`), semantic theme tokens (`--t-text`, `--t-heading`, `--t-primary` #FF6340, `--t-secondary` #A65DB4, `--t-background`, `--t-background-alt`, `--t-small`, `--t-line`, `--t-blur`) and scale units (`--scale-px`, `--scale-rem`, `--scale-em`). The `--t-` prefix indicates theming by swapping semantic tokens between light and dark contexts; the actual theme switching was not measured.

## Do's and Don'ts

- Do build on the two navies (`#060a3d`, `#172e64`) and white text at weight 300.
- Do use one orange for the single primary action per view.
- Do keep corners small (3px to 5px), with 40px reserved for large capsules.
- Do use translucent white and cyan layers for cards and chips instead of solid greys.
- Don't use shadows.
- Don't use weight 700 or heavier; the measured weights are 300 and 400.
- Don't use the purple or light-blue primitives as primary colors.

## Responsive Behavior

The 390px mobile pass measured the display size at 25px on a 28px line height (desktop 28px/30px), the large numerals at 60px (desktop 90px) and 37px (desktop 44px), and body copy at 14px (desktop 16px). The sizes 18px, 13px, 12px and 10px are unchanged. Layout, navigation behavior and breakpoints on mobile are not measured.

## Iteration Guide

1. Start the page on `page-body`, move to `canvas` for content bands.
2. Set copy in Suisse 300 at 16px/20px; 28px/30px for display.
3. Use `primary` `#fb441a` or `accent-coral` `#ff6340` for the one action.
4. Chips and cards use translucent fills from the measured set, never solid grey.
5. Check with `node web/scripts/verify-designs.mjs --slug=madar`.

## Voice

Madar's fetched copy is confident, upbeat and promotional with a futuristic framing: "Unlock unequalled business performance with real-time insights, automation, an expanding marketplace, and digital payments."; "Integrate Madar with your current infrastructure in a matter of days"; "Turn compliance documentation from a burden into a powerful business asset."; "With Madar everything runs faster."; "Make or receive payments as soon as freight delivery is confirmed." The site offers an Arabic toggle and a Saudi regional selector, according to the page text. Headlines are short claims about speed, ease and control; the product entry points are named plainly (Open Transport Market, Fleet & Driver App, Platform Login).
