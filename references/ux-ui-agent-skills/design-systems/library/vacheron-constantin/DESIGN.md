---
version: alpha
name: Vacheron Constantin
category: "Luxury"
description: "Vacheron Constantin (vacheron-constantin.com, international English home) is a quiet luxury watch site on a #f8f0e5 cream canvas with #412c17 brown ink, Prelo serif headings at 40px, Sohne sans body at 13px, uppercase letterspaced 12px links with hairline underlines and no rounded corners."
colors:
  canvas: "#f8f0e5"
  ink: "#412c17"
  primary: "#412c17"
  surface-2: "#faf5ed"
  ink-light: "#fffdfb"
  ink-muted: "#776251"
  ink-black: "#000000"
  hairline: "#7762514d"
typography:
  display:
    fontFamily: Prelo, Arial, Helvetica, sans-serif, middle-east_symbolregular
    fontSize: 40px
    fontWeight: 400
    lineHeight: 42px
  display-mobile:
    fontFamily: Prelo, Arial, Helvetica, sans-serif, middle-east_symbolregular
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35.2px
  subheading:
    fontFamily: Prelo, Arial, Helvetica, sans-serif, middle-east_symbolregular
    fontSize: 24px
    fontWeight: 400
    lineHeight: 25.2px
  body:
    fontFamily: SohneBuch, Arial, Helvetica, sans-serif, middle-east_symbolregular
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.2px
  link:
    fontFamily: SohneKraftig, Arial, Helvetica, sans-serif, middle-east_symbolregular
    fontSize: 12px
    fontWeight: 500
    lineHeight: 13.2px
    letterSpacing: 2.4px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 16px
  s3: 20px
  s4: 24px
  s5: 25px
  s6: 32px
  s7: 40px
  s8: 42px
  s9: 56px
  s10: 96px
components:
  link:
    textColor: "{colors.ink-light}"
    typography: "{typography.link}"
    padding: 0px 0px 12px
  nav:
    textColor: "{colors.ink-light}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The international English home page of Vacheron Constantin (`https://www.vacheron-constantin.com/ww/en/home.html`, title "Swiss luxury watches for men and women | Vacheron Constantin") is composed like a printed maison brochure. A full-bleed cinematic hero shows an artisan at work in a woodworking studio, with the eyebrow "THE ARTISAN RESIDENCY PROGRAMME", the headline "Crafting new perspectives" in white serif, and an underlined "DISCOVER MORE" link. When the hero ends, the page turns to a warm cream field (`#f8f0e5`) where the header carries the Maltese-cross logotype "VACHERON CONSTANTIN" in a muted brown, a menu icon on the left and a location pin on the right.

A horizontal carousel presents collections as tall, softly tinted panels separated by thin vertical hairlines. Each panel shows a watch photographed upright with a centered title (Métiers D'Art, Heures Créatives) and a small triangle glyph; the last panel is an outlined box reading "Discover all collections" with triangle marks at top and bottom. A large product photograph of a steel bracelet watch on a grey gradient follows at near full width.

Copy blocks are short and declarative. The measured h2 starts "Vacheron Constantin is the world's oldest watch Manufacture," and the boutique block reads "Find the nearest boutique" over "Experience a timeless moment in one of our Vacheron Constantin boutiques". The footer lists CONTACT US, BOOK AN APPOINTMENT, FAQ and FIND A STORE in uppercase with a FOLLOW US group.

The mood is heritage and restraint: no saturated colors, no buttons with fills, and no ornament except the hairlines and photography.

## Colors

The canvas is warm cream `#f8f0e5` (3,891 area weight, also the body background), and a paler `#faf5ed` (2,025) tints the collection panels. Text is a deep brown `#412c17` (1,349 characters; headings, body and footer), which is also the only candidate for a brand action color, so `primary` repeats it. On the dark hero photograph the text is an off-white `#fffdfb` (339 characters; also the `--header-color` variable). A mid brown `#776251` (110 characters) is used for secondary text and the logotype, and its 30% and 50% tints are the only border colors (`#7762514d` on 2 elements, `#77625180` on 1). Black `#000000` appears on 109 characters.

No gradients or shadows were measured; the shadows and gradients visible in photographs belong to the imagery. The root variables include third-party dropdown colors (`--vs-dropdown-option--selected-bg: #5897fb`, `--vs-dropdown-option--deselect-bg: #fb5858`) from a select widget; they are not brand colors and none appear on rendered brand elements.

## Typography

Four families were measured: **Prelo** (1,134 characters; a serif for h1, h2 and h3), **SohneBuch** (325; body), **SohneKraftig** (264; the medium weight for links, footer and labels) and **SohneLeicht** (184; the light weight for navigation). Each weight of Sohne is its own family name, and each stack ends in `Arial, Helvetica, sans-serif, middle-east_symbolregular`, the last being an icon or symbol font used for glyphs. Loaded fonts also include `base-icons` and `vac-icomoon`.

- Display: Prelo 400, 40px / 42px (the hero h1); 32px / 35.2px on the mobile pass.
- Section heading: Prelo 400, 32px / 33.6px (h2) and 24px / 25.2px (h3, "Find the nearest boutique").
- Body: SohneBuch 400, 13px / 18.2px; also 14px (502 characters) and 12px.
- Link and label: SohneKraftig 500, 12px / 13.2px, letter-spacing 2.4px, uppercase ("DISCOVER MORE", the eyebrow).
- Footer: SohneKraftig 14px / 16.8px uppercase with 1.4px tracking.
- Navigation: SohneLeicht 16px / 16px.
- Micro labels: 10px with 1px tracking.

Weights are only 400 (1,639 characters) and 500 (268). The tracking is open only on uppercase labels (2.4px at 12px, 1.4px at 14px) and normal elsewhere.

## Layout

The page reads in full-width bands: the hero, a cream band with the header and the collections carousel, a wide product photograph with margins on both sides, and boutique and footer bands. Gaps are a single value, 42px (18 occurrences). Paddings step 8px (33), 24px (28), 16px (23), 40px (18), 32px (9), 25px (7), 56px (6), 96px and 20px, and the stylesheet declares `--vac-header-padding: 2rem`.

The carousel panels sit in a row with vertical hairline separators and extend past the viewport edge on both sides in the capture, which shows partially visible neighbors at left and right. Layout metadata (columns, bands, header links) was not recorded for this page.

## Elevation & Depth

None measured: `boxShadows` is empty and no element has an outline or glow. Panels are separated by tint (`#faf5ed` on `#f8f0e5`) and 1px hairlines at 30% brown (`#7762514d`), not by elevation. The hero text sits directly on the photograph with an off-white color and no scrim token; the header uses `--header-color: #fffdfb` while over the image.

## Shapes

No border radius was measured (`borderRadii` is empty), so every element computes to 0px. The collection panels, the outlined "Discover all collections" box and the photographs are rectangles. The stylesheet's select widget declares `--vs-border-radius: 4px`, a third-party control that is not shown on the page and not a brand token.

## Components

- **Text link**: uppercase SohneKraftig 12px with 2.4px tracking, off-white `#fffdfb` on the hero, with a hairline underline 12px below the text (padding-bottom 12px); the link is 126px wide and 25px tall ("DISCOVER MORE").
- **Navigation**: SohneLeicht 16px, off-white over the hero; the nav box is 464px wide and 22px tall.
- **Collection panel**: `#faf5ed` tinted rectangle with a watch image, centered Prelo title and a small triangle glyph.
- **Outlined panel**: transparent fill, thin hairline outline, centered label "Discover all collections".
- **Footer**: `#412c17` uppercase SohneKraftig 14px links with 1.4px tracking and `#776251` group labels.
- **Primary button**: none detected (`ctaCandidates` is empty), so no button token is declared.

## Design System Architecture

No public or official Vacheron Constantin design system was found, and none was searched for. The stylesheet is a custom build with a few brand-prefixed variables (`--vac-header-padding: 2rem`, `--vac-theme-banner-cursor-color: #181818`, `--header-color: #fffdfb`) and a third-party vue-select block (`--vs-*`) for dropdowns. Fonts are the licensed Prelo and Sohne families named by weight. The brand system is thus carried by fonts, a two-brown palette on cream and a 42px gap, rather than by published tokens. Source: `https://www.vacheron-constantin.com/ww/en/home.html`, measured into `web/data/extracted/vacheron-constantin.json`.

## Do's and Don'ts

Do:
- Use cream `#f8f0e5` with brown `#412c17` text and `#776251` for quiet secondary text.
- Set headings in Prelo 400 and keep labels in uppercase SohneKraftig with 2.4px tracking.
- Divide panels with 1px hairlines at 30% brown.
- Let photography carry the weight; keep text on photographs off-white `#fffdfb`.

Don't:
- Don't use filled buttons, rounded corners or drop shadows; none were measured.
- Don't use the dropdown widget's blue or red as brand colors.
- Don't use bold weights; the measured weights are 400 and 500 only.
- Don't tighten the tracking on uppercase labels.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 measures 32px (from 40px), the h2 24px (from 32px), body text 12px (from 13px), navigation text stays 16px, and the hero text color stays `#fffdfb` while h2 and body stay `#412c17`. The mobile font table lists 12px (537 characters), 14px, 24px, 16px, 32px and 20px. Menu, column and carousel behavior on mobile were not measured.

## Iteration Guide

1. Cream `#f8f0e5` canvas, brown `#412c17` text.
2. Prelo 400 headings at 40px, 32px and 24px.
3. SohneBuch 13px body and uppercase SohneKraftig 12px links with 2.4px tracking.
4. Hairline-separated panels on `#faf5ed`.
5. Keep every corner at 0px.
6. Re-run `node web/scripts/verify-designs.mjs --slug=vacheron-constantin` after any rename.
