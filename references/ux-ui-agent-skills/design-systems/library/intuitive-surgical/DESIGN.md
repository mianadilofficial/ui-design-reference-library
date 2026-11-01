---
version: alpha
name: Intuitive
category: "Healthcare & Wellness"
description: "Intuitive, maker of da Vinci and Ion robotic surgical systems: white canvas with #f3f3f3 and #dcdce0 panels, near-black #1c1c1f pill buttons at 24px radius turning cobalt #0f25d2 on hover, BrownPro headings at 72px and 36px, InterUI body at 15px, 16px rounded cards."
colors:
  canvas: "#ffffff"
  ink: "#37383f"
  primary: "#1c1c1f"
  on-primary: "#f2f3f5"
  surface-panel: "#dcdce0"
  surface-light: "#f3f3f3"
  ink-faint: "#b1b2b8"
  ink-muted: "#8a8a90"
  cobalt: "#0f25d2"
  nav-text: "#252629"
  footer-bg: "#000000"
typography:
  display:
    fontFamily: BrownProBold
    fontSize: 72px
    fontWeight: 500
    lineHeight: 90px
  display-mobile:
    fontFamily: BrownProBold
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  heading:
    fontFamily: BrownProBold
    fontSize: 36px
    fontWeight: 500
    lineHeight: 45px
  body:
    fontFamily: InterUI
    fontSize: 15px
    fontWeight: 400
    lineHeight: 25.05px
  button:
    fontFamily: InterUI
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.8px
  nav:
    fontFamily: InterUI
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 16px
  sm: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 17px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 45px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.cobalt}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 45px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    borderColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 40px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

The measured page is the United States English home page of Intuitive (intuitive.com/en-us), titled "Intuitive | Maker of Da Vinci & Ion Robotic Systems". The page is 1280px wide and 4734px tall. It opens with a utility bar (My Intuitive, Events, Contact Us, United States), a white primary navigation (Products, Digital Solutions, Healthcare Professionals, Patients, About) with a search icon, then a carousel of large rounded grey panels carrying hero messages such as "Da Vinci was my answer" (patient stories, "Learn why patients like Aly and Pro Football Hall of Famer Deion 'Coach Prime' Sanders chose da Vinci surgery") and "Ion robotic bronchoscopy".

Below the hero are three product cards (My Intuitive "Data. Insights. Action.", SimNow "Sharpen your surgical skills", Da Vinci Instruments "Quality. Precision. Innovation."), a wide black-and-white photographic banner "We are Intuitive — Inspiring transformation in care since 1995", two news cards (a press release about direct operations in Europe, a 2025 Corporate Impact Report feature) and a scrolling strip of photographs. The register is medical-technology corporate: calm greys, a lot of white, photography of clinicians in scrubs and close-ups of instruments, and short confident headlines.

## Colors

- **Canvas `#ffffff`**: the page and card background (3632 weighted units).
- **Panel grey `#dcdce0`**: hero panels (3140 units); **light grey `#f3f3f3`**: section bands and the utility bar (2554 units).
- **Ink `#37383f`**: the most-read body colour (1902 characters).
- **Primary `#1c1c1f`**: near-black; the fill of the primary button and the colour of headlines (1364 characters).
- **On-primary `#f2f3f5`**: text on the dark button and on dark photo panels (507 characters); it is also a background area (1137 units).
- **Cobalt `#0f25d2`**: hover fill of the primary button and the colour of small category tags such as "Press Release" and "Feature" (217 characters; `#0f25d1` 136 more).
- **Greys `#b1b2b8`** (317 characters), **`#8a8a90`** (297 characters, nav-link and utility text), nav text **`#252629`**.
- **Black `#000000`**: the footer (1384 units); **`#151b17`**: a dark green-black panel area (602 units).

The page's CSS also carries Bootstrap root variables (`--primary: #007bff`, `--blue`, `--indigo`, `--yellow` and so on). They are framework defaults, not brand colours, and are not used here.

## Typography

Three faces are loaded: BrownPro, BrownProBold and InterUI (plus a swiper icon font). BrownProBold sets display and headings (969 characters, weight 500), BrownPro sets 633 characters and InterUI sets 3375 characters of body, nav and button text. BrownPro is a licensed web font served by the site; where it is unavailable a geometric sans such as the system sans stack can stand in.

Measured roles:

- Display (h1): BrownProBold 72px / 90px, weight 500.
- Heading: BrownProBold 36px / 45px, weight 500.
- Body: InterUI 15px / 25.05px, weight 400 (2038 characters at 15px).
- Button: InterUI 14px / 16.8px, weight 600.
- Navigation: InterUI 16px / 24px, weight 400.

Other sizes: 20px (759 characters), 11px (704, utility and caption text), 14px (592), 18px (497) and 25.6px (92). Letter-spacing is `normal`. On the 390px pass the display role is 32px / 40px (BrownProBold, weight 500).

## Layout

The home page is a vertical stack of contained modules on a centered content column, repeating three patterns: a full-bleed carousel of rounded panels, a three-up card row, and a two-up news row. Measured paddings: 8px (35 uses), 40px (25), 20px (22), 16px (19), 24px (13), 15px, 12px and 32px; gaps 4px (8), 12px (2), 16px (2). Cards have 40px of internal padding. The theme declares Bootstrap breakpoints (`--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px).

Art direction and microcopy: photography is the main carrier of emotion. The hero panels pair very large lowercase-capital headlines with a short sentence and one button; the product cards overlay a small label (My Intuitive, SimNow, Da Vinci Instruments) above a short three-beat slogan ("Data. Insights. Action.", "Quality. Precision. Innovation."); the photographic banner in black and white inverts to white text; the news cards use a coloured category word (Press Release, Feature) above the headline. Verbs on buttons are mild and consistent: "Learn more", "Read more", "Visit the site". The strip of photographs at the bottom scrolls horizontally with round arrow controls at either end.

## Elevation & Depth

No box shadows are measured (the list is empty). Depth comes from tonal steps between `#ffffff`, `#f3f3f3` and `#dcdce0` surfaces, and from photographs. Border colours are used sparingly: `#f2f3f5` (6 elements), `#1c1c1f` (4) and `#b1b2b8` (1).

## Shapes

Radii: 16px (44 uses, cards and panels), `0 0 16px 16px` (27) and `16px 16px 0 0` (18) for cards with an image top and a text bottom, 24px (10, buttons) and 50% (4, circular carousel arrows). Buttons are 45px tall with a 24px radius, so they read as pills; the token set also declares 9999px.

## Components

- **Primary button** ("Learn more", "Visit the site"): `#1c1c1f` fill, `#f2f3f5` text, InterUI 14px weight 600, padding 12px 24px, height 45px, radius 24px, border `#1c1c1f`. Hover fills it with cobalt `#0f25d2` (and the same border colour).
- **Light button**: `#f2f3f5` fill with `#1c1c1f` text, used on dark photo cards (for example under "We are Intuitive").
- **Product card**: 16px radius, photographic or flat-colour background, small category label, a headline and a pill button.
- **News card**: 16px radius, image on top with 16px top corners, a cobalt tag, a BrownProBold headline and a "Read more" text link with an arrow.
- **Navigation**: white bar, InterUI 16px links in `#252629`, utility links above at 11px in grey, search icon at the right.
- **Footer**: black background, white text.

The hero carousel shows part of the next slide at the edge of the viewport, with the headline of the adjacent panel cropped, which signals horizontal movement without arrows on the panels themselves. Panels are flat grey `#dcdce0` rather than photographs in the captured state, so the type is the only content element in the first screen apart from the button.

## Design System Architecture

No public design-system or brand-guidelines page was found: the home page HTML was opened and contained no brand, design-system, guideline or GitHub link. The site is built on Bootstrap (its variable set and breakpoints are in the root) with Swiper for carousels (`--swiper-navigation-size` 44px) and its own custom classes and fonts. The de-facto system is the BrownPro/InterUI type pair, greyscale surfaces, near-black pill buttons and 16px rounded cards.

## Do's and Don'ts

- Do keep surfaces to white, `#f3f3f3` and `#dcdce0` and let photography bring colour.
- Do use `#1c1c1f` for primary pill buttons with a 24px radius and cobalt `#0f25d2` for hover and category tags.
- Do set headlines in BrownProBold at weight 500 and body in InterUI 15px.
- Do round cards at 16px, and keep image-top cards square at the junction (`16px 16px 0 0` over `0 0 16px 16px`).
- Don't use Bootstrap's `#007bff` or other framework variables as brand colours.
- Don't add shadows; none are measured.
- Don't use bold weights beyond 600 for buttons.

## Responsive Behavior

Measured at 390px: the display role becomes 32px / 40px (BrownProBold 500). The most common sizes are 15px (2038 characters), 23.4px (677), 18px (497), 14px (410), 11px (387) and 16px (188). Navigation collapse, card stacking and carousel behaviour on mobile were not measured.

## Iteration Guide

1. Start with white, `#f3f3f3` and `#dcdce0` surfaces and `#37383f` body text.
2. Use BrownProBold 72px / 36px for headings and InterUI 15px for copy.
3. Use `#1c1c1f` 45px pill buttons with `#f2f3f5` text; hover to `#0f25d2`.
4. Use 16px radii for cards and 24px for buttons; no shadows.
5. Pair each card with a small label, a short confident headline and one button.
6. Check new values against `web/data/extracted/intuitive-surgical.json`.
