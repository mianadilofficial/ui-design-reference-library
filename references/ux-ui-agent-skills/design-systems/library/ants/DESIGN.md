---
version: alpha
name: ANTS
category: "Thai Brands"
description: "ANTS (Advance Network Technology and Services), a Thai SMS, LINE and MarTech platform company: white #ffffff canvas, deep navy #19164f ink and buttons, orange #f26622 kicker labels, Poppins with Kanit for Thai, 64px hero headings, pill buttons with a 0 2px 10px shadow and 16px to 54px rounded cards on a calm, photo-led layout."
colors:
  canvas: "#ffffff"
  page-largest: "#19164f"
  ink: "#19164f"
  primary: "#19164f"
  on-primary: "#ffffff"
  surface-muted: "#f1f1f1"
  surface-charcoal: "#504f52"
  ink-black: "#000000"
  accent-orange: "#f26622"
  ink-dark: "#212529"
  ink-light: "#f8f9fa"
  nav-bg: "#ffffffcc"
  card-bg: "#f3f3f6"
typography:
  display:
    fontFamily: Poppins, "Poppins Fallback", Kanit, "Kanit Fallback", sans-serif
    fontSize: 64px
    fontWeight: 500
  stat-number:
    fontFamily: Poppins, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 64px
  subheading:
    fontFamily: Poppins, "Poppins Fallback", Kanit, "Kanit Fallback", sans-serif
    fontSize: 24px
    fontWeight: 500
  body:
    fontFamily: Poppins, "Poppins Fallback", Kanit, "Kanit Fallback", sans-serif
    fontSize: 24px
    fontWeight: 400
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: Poppins, sans-serif
    fontSize: 16px
    fontWeight: 500
rounded:
  xs: 10px
  sm: 16px
  md: 30px
  lg: 50px
  xl: 54px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25.59px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 15px 30px
    height: 56px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 10px 0px
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 15px 30px
    height: 54px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 10px 0px
  link:
    textColor: "{colors.ink-light}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.lg}"
    padding: 0px 64px
  nav-link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.accent-orange}"
    padding: 64px 64px 25.5938px
---

## Overview

ANTS (ants.co.th) is the website of Advance Network Technology and Services Co., Ltd., a Thai technology company. Its home page presents integrated SMS, LINE Official and marketing-technology platforms, with a hero line "I′m possible" and the Thai sub-line "สร้างความเป็นไปได้ใหม่อย่างยั่งยืน" (create sustainable new possibilities). It lists strategic partners dtac, AIS, LINE and TRUE, and company stats of 90+ headcounts, 300+ clients, 100+ successful projects and 10+ years in business. Products named on the page include a communication platform (SMS, email, voice, MMS), marketing technology (Customer Data Platform, Chat Center, Social Listening) and a set of AI products.

The visual language is that of a confident B2B platform vendor that still feels human. The first screen is a full-width photograph of a smiling woman looking at her phone under a dark overlay, with the centred white headline, a small "Digital Transformation" kicker and an outlined pill button "ติดต่อเรา". Below it a row of partner logos sits in light rounded chips, then a floating rounded navigation bar, a row of four stat tiles on pale grey, and large rounded panels alternating between deep navy `#19164f` and charcoal `#504f52`, each with an orange label ("Product", "Service"), a bold English title and a Thai description beside a photograph.

The page scrolls to 7191px at 1280px width and the document title is Thai ("ANTS - แพลตฟอร์ม SMS, LINE, Email Marketing ครบวงจร"). Copy is bilingual: English words for product names and Thai for explanation.

## Colors

- **Canvas `#ffffff`** is the page background; light surfaces are `#f1f1f1` (surface-muted) and `#f3f3f6` (card tiles).
- **Navy `#19164f`** is the brand colour and the largest filled background area (weight 2622). It is also the text colour of headings and the primary button fill. The stylesheet declares it as `--primary-color: #19164f`.
- **Charcoal `#504f52`** fills the secondary large panels.
- **Orange `#f26622`** is the accent: panel kicker labels and the footer text (165 characters).
- **Text neutrals:** `#000000`, `#212529` and `#f8f9fa` for link text on dark.
- **Navigation `#ffffffcc`** is white at 80 percent alpha for the floating nav bar.

Bootstrap defaults in the root variables (`--bs-primary: #0d6efd`, `--bs-orange: #fd7e14` and so on) are framework defaults and not brand colours. The green LINE chat widget at the bottom right (`#06c756ad` background and a green glow shadow) is a third-party control and is excluded.

## Typography

**Poppins** (400, 500, 600, 700) carries 1625 measured characters and **Kanit** (300 to 600) carries 877; Kanit is also the Thai fallback and the button face. Both families are loaded as webfonts with their fallback metrics faces.

- Display: Poppins 500, 64px, for the white hero headline "I′m possible" (95px high box, 388px wide).
- Stat number: Poppins 600, 48px/64px ("90+", "300+").
- Subheading: Poppins 500, 24px; body: 24px at weight 400 (1003 characters at 24px).
- Button: Kanit 300, 20px/24px.
- Nav: Poppins 500, 16px.
- Mobile: hero heading 36px, stat number 48px, body 16px, button 20px.

Substitute any geometric sans for Poppins and any Thai sans for Kanit if they are not available.

## Layout

The layout is a centred stack of full-width blocks with a side margin of 64px: the root footer padding measures `64px 64px 25.5938px`, and the nav has `0px 64px` padding. Stat tiles sit in a four-column row; the product and service panels are two-column (copy left, photograph right, then reversed). Section intros use a two-column split with a large bold Thai headline on the left and a short paragraph plus button on the right. Measured paddings by frequency are 12px, 8px, 5px, 16px, 30px and 15px.

## Elevation & Depth

Depth is soft and uniform. The shadow `rgba(0, 0, 0, 0.2) 0px 2px 10px 0px` (declared as `--shadow-2`) is measured on 9 elements: buttons and similar raised pieces. A second, green glow `rgba(6, 199, 85, 0.45) 0px 6px 20px 0px` belongs to the third-party chat widget. The hero uses a dark photographic overlay to make the white headline legible; cards rely on tonal contrast (`#f3f3f6` on white, navy on white) rather than borders.

## Shapes

Shapes are generously rounded. The most frequent radii are 800px (11 elements, the pill buttons) and 50% (11, circular icon buttons such as the carousel arrows and back-to-top), then 16px (6), 10px (5), 54px (4), 30px (4) and 50px (2). Large panels and stat tiles use the 16px to 30px range; the floating nav bar uses 50px; the pill token is 9999px.

## Components

- **Primary button ("ดูบริการทั้งหมดของเรา"):** navy `#19164f` fill, white text, Kanit 300 at 20px, padding 15px 30px, height 56px, pill radius, with the `0px 2px 10px` shadow and a trailing diagonal-arrow icon. It measures 273px wide. Other "read more" buttons repeat the same style at 54px or 44px high.
- **Hero button:** an outlined white pill with a phone icon over the photograph.
- **Navigation:** a floating bar with `#ffffffcc` background, 50px radius, the orange ANTS logo at left, a hamburger icon at right and navy Poppins 16px links.
- **Stat tile:** `#f3f3f6` rounded tile with a 48px navy number and a Poppins label.
- **Panel card:** navy or charcoal rounded panel with an orange label, a large white title and a photograph.
- **Partner chip:** light pill containing a partner logo (dtac, AIS, LINE, true).
- **Utility controls** (round orange back-to-top arrow and green LINE chat chip) are not brand components.

## Design System Architecture

No public ANTS design system, brand guideline or press kit was found: https://www.ants.co.th/about and https://www.ants.co.th/brand both returned HTTP 404. The shipped CSS reveals the de-facto system: Bootstrap 5 variables (`--bs-body-font-size: 1rem`, `--bs-body-font-weight: 400` and the Bootstrap colour names), Font Awesome 6 icons, Swiper for carousels (a `swiper-icons` font is loaded), and a thin custom layer: `--primary-color: #19164f`, `--shadow-2: 0px 2px 10px rgba(0,0,0,0.2)` and `--hover-bg-color: #19164f2f`. Source: https://www.ants.co.th/.

## Do's and Don'ts

- Do anchor pages in white and navy `#19164f`, with orange `#f26622` for small labels only.
- Do use pill buttons with the shared soft shadow and an arrow icon.
- Do pair Poppins Latin with Kanit Thai and keep body copy at regular weight.
- Do show real, warm photography of people using devices.
- Don't use Bootstrap's default blue or orange as brand colours.
- Don't treat the LINE chat chip or the back-to-top button as part of the brand button set.
- Don't use hard borders on cards; use tonal fills and rounded corners.

## Responsive Behavior

The extractor measured a 390px viewport as well as 1280px. The hero heading drops from 64px to 36px, the stat number stays 48px, body copy from 24px to 16px, and the button label stays 20px. The navigation is a compact bar with a hamburger icon in the measured desktop capture. Narrow-screen layout of stat tiles and two-column panels was not measured; only the type-size changes were.

## Iteration Guide

1. Start from `canvas #ffffff`, `ink #19164f` and `primary #19164f` with white button text.
2. Use Poppins for Latin text and Kanit for Thai, display at 64px and body at 24px on desktop.
3. Build buttons as 56px-high pills with 15px 30px padding and the `0 2px 10px` shadow.
4. Alternate navy and charcoal panels with 30px-ish radii; label them in `#f26622`.
5. Show stats in `#f3f3f6` tiles at 48px/600.
6. Re-measure with the extractor if the site changes; never lift colours from Bootstrap defaults.
