---
version: alpha
name: Raffles Hotels & Resorts
category: "Travel & Hospitality"
description: "Raffles Hotels & Resorts is a luxury hotel site: white canvas (#ffffff) with soft grey-black text (#3c3c3c), a deep green (#0c1f1e) for headings and the secondary button, blush (#f6f1ef) and taupe (#d5c0b5) bands, CanelaThin serif headings at 44px weight 250, LatoRegular 15px body, and square 0px uppercase AkzidenzGroteskPro buttons in #141414."
colors:
  surface-taupe: "#d5c0b5"
  surface-cream: "#f1f0e7"
  canvas: "#ffffff"
  ink: "#3c3c3c"
  primary: "#141414"
  on-primary: "#ffffff"
  surface-2: "#f6f1ef"
  surface-3: "#0c1f1e"
  ink-4: "#000000"
  ink-5: "#3d4a48"
  ink-6: "#3e3d48"
typography:
  display:
    fontFamily: LatoRegular, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.2px
  display-mobile:
    fontFamily: LatoRegular, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  heading:
    fontFamily: CanelaThin, serif
    fontSize: 44px
    fontWeight: 250
    lineHeight: 54px
  subheading:
    fontFamily: CanelaThin, serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 30px
    letterSpacing: 0.2px
  button:
    fontFamily: AkzidenzGroteskPro, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 1.2px
    textTransform: uppercase
rounded:
  xs: 40px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 13px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 24px
    height: 44px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 20px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    height: 24px
---

## Overview

The page title is "Raffles Hotels & Resorts : Luxury Hotels and Resorts". The home page is a long editorial scroll built from large photographs of hotel facades, pools and interiors, each introduced with thin high-contrast serif titles and short Lato paragraphs. The measured on-page copy describes the brand as "Founded in Singapore in 1887, Raffles Hotels, Resorts & Residences are places of endless possibility where ideas are born, history is made and stories and legends are created." The tone is restrained, hospitality-formal, with phrases such as "Places of authentic culture", "Adventures and encounters crafted for the curious traveller" and "Latest happenings at Raffles".

The visual system is quiet: a white canvas, generous vertical space between bands, square buttons, and photography doing the emotional work. Color is limited to warm neutrals (blush, cream, taupe) and one deep green that is almost black.

## Colors

- **Canvas:** `#ffffff`, the body background and the second-largest background area.
- **Ink:** `#3c3c3c` is the most-read text color (6031 characters in the re-measured pass), used for running copy. `#000000` and `#3d4a48` and `#3e3d48` are secondary text values.
- **Deep green:** `#0c1f1e` is the heading color for the h2 and h3 roles, the background of the secondary button ("JOIN FOR FREE") and of the footer band area.
- **Primary:** `#141414`, the fill of the detected primary button (white text `#ffffff`, border 1px solid `#141414`). The same dark fill is used by the inline newsletter "SUBSCRIBE" button in the page body.
- **Blush `#f6f1ef`:** the "Hotels & Resorts" intro panel and other soft bands (area weight 1998).
- **Taupe `#d5c0b5`:** the loyalty-programme band ("Join ALL Accor - the hotel loyalty programme").
- **Cream `#f1f0e7`:** an additional pale band (area weight 896).

The capture contains a newsletter overlay ("Stay in touch") floating over the hero carousel; it is a popup and is not documented here as brand UI. Root custom properties such as `--swiper-theme-color: #007aff` and the `--f-button-*` greys belong to the carousel and lightbox libraries and are not brand colors.

## Typography

- **Heading:** CanelaThin, serif, 44px, weight 250, line height 54px, color `#0c1f1e` ("Places of authentic culture").
- **Subheading:** CanelaThin, 24px, weight 300, line height 30px, letter spacing 0.2px (hotel names such as "Raffles Singapore").
- **Body / display:** LatoRegular, 15px, weight 400, line height 24px, letter spacing 0.2px.
- **Small body on mobile:** LatoRegular, 14px, weight 400, line height 20px.
- **Button:** AkzidenzGroteskPro, 12px, weight 400, line height 18px, letter spacing 1.2px, uppercase.

Other faces in the CSS corpus: Canela, CanelaLight, CanelaThinItalic (the italic "world" in "A world OF ELEGANCE AND ENCHANTED GLAMOUR"), AkzidenzGroteskProMd and ProExt, LatoLight, LatoMedium, LatoSemi, SyncopateRegular and SyncopateBold, and `defaultFont` / `titleFont` aliases. Letter-spacing by size includes 14px with 0.28px, 28px with 0.5px, 13px with 2.34px and 44px with 1px. Weights measured: 250, 300, 400, 500, 550. Canela and Akzidenz-Grotesk are commercial typefaces; Lato is open source.

## Layout

The desktop pass was taken at 1280px over a scroll height of 8507px. A fixed header (padding `20px 0px`, 120px high in the first pass) carries a hamburger "Open menu", language "EN", "Contact", "Account" and a "CHECK RATES" button around a centered logo. A booking bar (destination, dates, adults, "Special Rates & Accessibility") overlays the hero.

Below, content bands alternate: a horizontal card carousel (three hotels visible, each with image, serif name, three to five lines of Lato text and an underlined "Discover" link), a two-column image-and-text block, a full-bleed photographic panel with a centered serif line ("The Butler Did It."), a 3 x 2 grid of experience tiles (Gastronomy, Wellbeing, Art & Culture, Celebration, Family, The Butler Did It), a dark timeline panel, the taupe loyalty band, a "Latest happenings" trio, an inbox sign-up panel, a social band and a dark green footer with link columns. Spacing values measured: 1px, 2px, 4px, 5px, 6px, 8px, 10px, 12px, 13px, 16px; gaps 16px, 20px, 24px, 8px; paddings include 24px and 80px.

## Elevation & Depth

Elevation is minimal. One drop shadow is measured on the re-run (`rgba(0, 0, 0, 0.1) 0px 8px 16px 0px`); the earlier pass also recorded a focus ring `0 0 0 .125em #436eff` and `0 .25em .5em .2em #00000029` from third-party widgets. Depth is otherwise created by photography, a translucent white header (`#ffffffcc` in the first pass) and tonal bands.

## Shapes

Buttons, inputs and navigation are square: `rounded.none` is 0px. Two other radii exist: 40px (two elements) and 50% (ten elements, circular controls such as carousel and play buttons), with a pill token of 9999px. The one-sided radius `0px 4px 4px 0px` appears once. Hotel photographs are rectangular with no rounding in the capture.

## Components

- **Primary button:** background `#141414`, text `#ffffff`, AkzidenzGroteskPro 12px uppercase with 1.2px tracking, padding `12px 24px`, height 44px, border 1px solid `#141414`, radius 0px. Hover recorded: white background with `#141414` text.
- **Secondary button:** background `#0c1f1e`, text white, same type and padding, height 44px ("JOIN FOR FREE").
- **Outlined button:** white background, text `#0c1f1e`, 42px high ("CHECK RATES").
- **Text link:** "Discover" and "Our destinations" are underlined Lato links.
- **Input:** LatoRegular 15px, height 24px, radius 0px.
Imagery and microcopy: the capture shows full-width photographs of colonial white facades under blue skies, turquoise pools, ornate interiors and a bagpiper holding a prop newspaper in the hero. Section labels are short and sentence-case ("Explore Experiences", "Discover", "Our destinations", "Join for free", "Learn more"), while buttons shout in uppercase tracking. Arrow controls and a counter sit under the card row. The footer carries the line "Raffles Hotels & Resorts" with a newsletter email field, a "Sign up" link, link columns and an app-download note. Headline text is often split into a light italic word and capital words, which is how the "world" word in the Raffles story block is set in CanelaThin italic against uppercase neighbours.
- **Hotel card:** photograph, CanelaThin 24px name, Lato 15px description, underlined link.

## Design System Architecture

No public design system or brand-guideline page for this site was opened, so there is no official token source to cite. The de-facto system is visible in the CSS: font aliases `defaultFont` and `titleFont` plus named faces, Tailwind utility variables (`--tw-ring-offset-shadow` appears in the shadow list), and the Fancybox (`--f-button-*`) and Swiper (`--swiper-theme-color`) variables. The values in this file come from `web/data/extracted/raffles.json` for https://www.raffles.com.

## Do's and Don'ts

- Do keep headings in CanelaThin at weight 250-300 in deep green `#0c1f1e`.
- Do use square, uppercase, letter-spaced Akzidenz buttons, padding `12px 24px`.
- Do let photography carry sections, with short Lato text beneath.
- Do alternate white, blush `#f6f1ef`, cream `#f1f0e7` and taupe `#d5c0b5` bands.
- Don't round buttons; the measured button radius is 0px.
- Don't add heavy shadows; only one soft shadow was measured.
- Don't use the carousel library's blue `#007aff` or ring `#436eff` as brand colors.
- Don't treat the newsletter overlay as a design component.

## Responsive Behavior

The 390px pass measured: h2 CanelaThin 28px, weight 300, line height 36px, letter spacing 0.5px; body LatoRegular 15px with line height 24px in the first pass (14px / 20px in the re-run); the SUBSCRIBE button at 294px wide, still 44px high with the same padding; header padding `12px 0px`. Breakpoints, column changes and navigation behavior were not measured.

## Iteration Guide

1. Start with `#ffffff` canvas, `#3c3c3c` text, `#0c1f1e` headings.
2. Set display headings in CanelaThin 44px / 54px weight 250.
3. Build buttons at 44px height, `12px 24px` padding, 0px radius, uppercase 12px with 1.2px tracking.
4. Add warm bands (`#f6f1ef`, `#f1f0e7`, `#d5c0b5`) between photographic sections.
5. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase2.json --only=raffles --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=raffles`.
