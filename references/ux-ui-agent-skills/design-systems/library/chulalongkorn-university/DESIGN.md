---
version: alpha
name: "Chulalongkorn University"
category: "Thai Brands"
description: "Chulalongkorn University's English home page (chula.ac.th/en): white canvas with black and #333333 text, Chula pink (#da5f8e) gradient cards and accents, a custom CHULALONGKORN typeface at 100px and 80px with Anuphan 18px body, 12px to 20px card radii, pill buttons and a #141414 footer."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#da5f8e"
  ink-body: "#333333"
  ink-faint: "#0000004d"
  ink-soft: "#000000b3"
  button-secondary-bg: "#d9d9d91a"
  card-border: "#0000001a"
  footer-bg: "#141414"
  on-primary: "#ffffff"
  tint-pink: "#ffe5ef"
  tint-pink-deep: "#ffddea"
  surface-slate: "#e2e8f0"
  surface-dark: "#111111"
  surface-grey: "#f5f5f5"
  separator: "#bfbfbf"
  separator-alt: "#e5e5e5"
  blessing: "#f9a800"
typography:
  display:
    fontFamily: CHULALONGKORN, system-ui, sans-serif
    fontSize: 100px
    fontWeight: 400
    lineHeight: 125px
  display-mobile:
    fontFamily: CHULALONGKORN, system-ui, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  heading:
    fontFamily: CHULALONGKORN, system-ui, sans-serif
    fontSize: 80px
    fontWeight: 700
    lineHeight: 120px
  subheading:
    fontFamily: CHULALONGKORN, system-ui, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  body:
    fontFamily: Anuphan, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 32.4px
  card-title:
    fontFamily: CHULALONGKORN, system-ui, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 30.8px
  nav:
    fontFamily: CHULALONGKORN, system-ui, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button-secondary:
    fontFamily: Anuphan, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  input:
    fontFamily: Anuphan, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 99px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 18px
  s9: 24px
  s10: 32px
components:
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 48px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 48px
    borderColor: "{colors.primary}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 24px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 3px 18px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    padding: 72px 0px 56px
---

## Overview

This document describes Chulalongkorn University's own English home page, https://www.chula.ac.th/en/ (title "Chulalongkorn University - Chulalongkorn University"), 1280px wide and 8,170px tall. The page headline is "We believe in Future Leaders." Below it the university introduces itself with "109 Years Chula" and the line "Chulalongkorn University – a leading creator of knowledge and innovations for the sustainable development of society." Ranking cards follow ("Chula Ranks No.1 in Thailand for 18 Years", "Top 50 in the world – University for sustainability", "Number 1 in Thailand – In terms of SDG 9", "1 in 10 – Leading university in ASEAN"), then an Education section with cards for the Bachelor's Degree, Graduate and International Programmes and Chula XL. The navigation reads About, Academics, Research & Innovation, Life at Chula, International students and News & Knowledge, with an Accessibility Preferences control (font size and high-contrast mode), a search box and language options ไทย, English and 中文. The site's footer lists more than 40 institutional links in seven columns plus the address 254 Phaya Thai Road, Pathum Wan, Bangkok 10330.

Measurement notes. The page opened with an entry splash: a large card with a royal portrait and Thai text, an "Enter Chula.ac.th" button, carousel dots and a "Don't show this again" checkbox. The extractor hid the page scrims and removed a site-wide `grayscale(0.5)` filter for the capture, but the splash card still appears in the capture's first screen. That splash, its button, the floating pink chat button and the accessibility control are not documented as brand UI or tokens, and the generated primary (the splash's white button) was replaced by the measured and declared Chula pink. The visible brand layout is a photographic hero (students, with the white headline), a white section with a large centered title and pill buttons, a carousel of tall gradient cards with white text and circular plus buttons, an Education carousel of photo cards with pink overlays, a pale-pink band and a near-black footer.

According to the university's own page on the colour (https://www.chula.ac.th/en/about/symbols/the-colour-pink/), pink is the official colour and fuchsia the original one; the page gives no color codes. It calls pink "a unifying symbol for the Chula community."

## Colors

The white canvas (`{colors.canvas}` #ffffff) holds black text (`{colors.ink}` #000000, 4,302 measured characters) and a slightly softer `{colors.ink-body}` (#333333, 2,423 characters) for paragraphs; white text is the most common text color (5,683 characters) because the hero, cards and footer are dark or colored. `{colors.ink-soft}` (#000000b3, 70% black) and `{colors.ink-faint}` (#0000004d, 30% black) are translucent text colors measured on 112 and 262 characters.

Chula pink, `{colors.primary}` (#da5f8e), is the brand color and the largest measured background by area (4,486 area units). The stylesheet declares it as `--color-primary`, with `--color-primary-50` (#ffe5ef, `{colors.tint-pink}`) as its pale tint; #ffddea (`{colors.tint-pink-deep}`) is a second measured pale pink. Pink is also measured as the border of the search input and as text on 265 characters. White text on pink uses `{colors.on-primary}`. The footer is `{colors.footer-bg}` (#141414, declared as `--color-secondary`) and a darker `{colors.surface-dark}` (#111111, 2,048 area units) is measured elsewhere. Neutral surfaces: `{colors.surface-grey}` (#f5f5f5, `--color-surface`), `{colors.surface-slate}` (#e2e8f0, 1,478 area units) and the declared `--color-surface-alt` #f6f6f6. Rules use `{colors.separator}` (#bfbfbf) and `{colors.separator-alt}` (#e5e5e5), card borders use `{colors.card-border}` (#0000001a) and the secondary button is `{colors.button-secondary-bg}` (#d9d9d91a, white at 10%). The stylesheet also declares a gold `{colors.blessing}` (#f9a800, `--color-blessing`) that was not measured on the home page's rendered text or fills. Semi-transparent black backgrounds of the splash and menu scrims (#00000033, #0000004d, #00000040) are not brand colors.

## Typography

Two web fonts, loaded at the weights shown: CHULALONGKORN (400 and 700), a custom display and UI face used on 9,133 measured characters, and Anuphan (400), used on 3,948 for body copy and form fields. They are exposed as `--font-chula` and `--font-anuphan`, each with `system-ui, sans-serif` as fallback. A system stack appears on 18 characters. Weight 400 covers 7,650 characters and 700 covers 5,331, so bold headings are common.

- `{typography.display}`: CHULALONGKORN 100px, weight 400, line-height 125px: the hero headline "We believe in Future Leaders." in white.
- `{typography.display-mobile}`: 48px, weight 400, line-height 60px, the same headline at the mobile viewport.
- `{typography.heading}`: CHULALONGKORN 80px, weight 700, line-height 120px: "109 Years Chula".
- `{typography.subheading}`: 24px, weight 700, line-height 36px (measured on an h3).
- `{typography.card-title}`: 22px, weight 700, line-height 30.8px: card titles such as "Undergraduate Admissions".
- `{typography.nav}`: 18px, weight 400, line-height 27px: the header navigation.
- `{typography.body}`: Anuphan 18px, weight 400, line-height 32.4px.
- `{typography.button-secondary}`: Anuphan 14px, line-height 21px; `{typography.input}`: Anuphan 16px, line-height 24px.

The stylesheet declares a named size scale `--text-fs*`: 10, 12, 14, 15, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 44, 46, 48, 50, 60, 70, 80, 100 and 124px (in rem). Sizes measured by character count are 16px (4,081), 18px (2,707), 24px (1,925), 14px (1,485), 20px (1,352), 30px (753), 22px (311), 32px (248), 40px (136), 28px (32), 100px (28), 26px (24) and 80px (15). The site offers ไทย, English and 中文 versions, and the Thai text on the splash was not measured as typography. Substitutes if the custom face is unavailable: a humanist sans with a bold weight such as Noto Sans Thai Looped, Prompt or Kanit for Thai and Latin together.

## Layout

The header measures 80px tall (70px at mobile) and overlays the hero: white links over the photograph, with the Chula logotype at the left and, at the right, Aa, search and menu icons. The measured spacing is built on 4px steps (the stylesheet declares `--spacing: .25rem`): paddings of 4px (106 elements), 24px (99), 16px (69), 32px (60), 12px (32), 10px (11) and 80px (8); gaps of 16px (86), 8px (38), 24px (8), 12px (6), 32px (6) and 40px (4). Content sections center their titles ("109 Years Chula" and its summary and buttons), while carousels run off the right edge with prev and next pills beneath. The cards are tall portrait tiles; the measured quick-link cards are 230px wide and 190px tall with 24px padding. The footer has 72px of top padding and 56px at the bottom (padding 72px 0 56px) and is 907px tall.

## Elevation & Depth

Shadows are soft and mostly transparent. The measured set includes `rgba(0, 0, 0, 0.08) 0px 3px 18px 0px` on cards (5 elements), a two-layer `rgba(0, 0, 0, 0.14) 0px 1px 4px 0px, rgba(0, 0, 0, 0.06) 0px 14px 23px -6px` (8), `rgba(0, 0, 0, 0.12) 0px 16px 40px 0px` (1), `rgba(0, 0, 0, 0.1) 0px 4px 6px 0px` (1) and a heavy `rgba(0, 0, 0, 0.42) 0px 24px 70px 0px` (1 element). Several elements also carry a 1px inset white ring at 12% alpha. Depth otherwise comes from photographic cards and gradients; the card border is a hairline `{colors.card-border}`.

## Shapes

Rounding is generous. By element count the radii are the full pill (about 3.4e7px, 115 elements), 20px (32), 16px (25), 12px (17), 8px (10), 999px (6), 10px (2), 50% (2) and 99px (1). The stylesheet declares `--radius-10`, `--radius-14`, `--radius-18` and `--radius-20`. Cards use `{rounded.md}` (12px) in the measured roles; the 16px (25 elements) and 20px (32) radii were also measured, but which elements carry them was not isolated; outlined buttons and tags are pills; icon buttons are round in the capture.

## Components

- **Secondary button** (`button-secondary`): `{colors.button-secondary-bg}` fill, white Anuphan 14px text, `{rounded.md}`, padding 0px 12px, 48px tall; measured as "Subscribe to Newsletter", 280px wide on desktop and 342px on mobile.
- **Outlined pill buttons**: the capture shows "About Chula →", "Information and statistics →" and "Read More →" as white pills with a thin dark outline, bold text and an arrow; their exact measurements were not isolated, and the measured outlined tag chip is 38px tall with padding 6px 16px and a `{colors.card-border}` border.
- **Navigation** (`nav`, `nav-link`): `{typography.nav}` in white over the hero image, with small chevrons on dropdown items.
- **Text input** (`text-input`): `{colors.ink}` text, `{typography.input}`, `{rounded.md}`, padding 0px 12px, 48px tall and 768px wide, with a 1px `{colors.primary}` border.
- **Quick-link card** (`card`): white, `{rounded.md}`, 24px padding, 1px `{colors.card-border}`, the soft 0.08-alpha shadow and `{typography.card-title}` titles ("Undergraduate Admissions", "Apply for Graduate Studies").
- **Gradient ranking card**: a tall card with a pink, green or orange gradient, white title and caption, a large photograph at the bottom and a circular white plus button at the lower right.
- **Footer** (`footer`): `{colors.footer-bg}` fill with white link columns (About, Academics, Services, Life at Chula, News & Knowledge, Research & Innovation, Online Reporting System), the logo, address, phone, emails, a newsletter field and social icons.

## Design System Architecture

The university publishes brand resources: "CU Brand Resources" (http://www.chula.ac.th/en/about/symbols/identity/) is a download hub with logos, a graphic pattern, Zoom backgrounds and two guideline documents, a "University brand identity guidelines" (English) and a Thai "Corporate Identity Manual". Both are Google Drive documents; the English one could not be read (the fetch returned only the Drive loading and sign-in shell), so no color codes or typeface rules are taken from it. The shipped CSS is the readable system: Tailwind-style root variables (`--color-*`, `--text-*`, `--radius-*`, `--tracking-*`, `--leading-*`, `--tw-*`), WordPress preset variables (`--wp--preset--*`) and a set of `--f-*` carousel and lightbox variables, plus custom brand tokens: `--color-primary` #da5f8e, `--color-primary-50` #ffe5ef, `--color-secondary` #141414, `--color-surface` #f5f5f5, `--color-surface-alt` #f6f6f6, `--color-separator`, `--color-separator-alt`, `--color-blessing`, `--text-fs10` to `--text-fs124`, `--font-chula`, `--font-anuphan` and `--spacing: .25rem`. Several `--swiper-*` variables show a carousel library; its `--swiper-theme-color` (#007aff) is a library default and is not a brand color.

## Do's and Don'ts

- Do use Chula pink `{colors.primary}` as the signature color for large gradient cards, accents and the logo, with white text on top.
- Do set headings in CHULALONGKORN at 100px (hero, weight 400) and 80px (section, weight 700), and body copy in Anuphan 18px with a 1.8 line-height.
- Do round cards at 12px to 20px, buttons as pills, and keep shadows soft (0.08 alpha).
- Do pair a near-black footer (#141414) with white link text and a pale pink band above it.
- Don't document the entry splash, its portrait, the "Enter Chula.ac.th" button, scrims or the grayscale filter as brand UI.
- Don't use the Swiper blue (#007aff) or Tailwind default palette entries (zinc, gray, red, amber, slate) as brand colors.
- Don't treat the Thai splash text as measured typography.
- Don't treat the gold `{colors.blessing}` as an observed home page color.

## Responsive Behavior

Measured at a 390px viewport: the hero headline drops from 100px/125px to 48px/60px and the "109 Years Chula" heading from 80px/120px to 48px/72px (weight 700); the intro paragraph from 18px/32.4px to 16px/28.8px; and the "Subscribe to Newsletter" button becomes 342px wide (280px on desktop). The header measures 70px tall (80px at desktop), with one header link visible and a menu toggle labelled "Open menu". Sizes at mobile by character count are 16px (6,110), 14px (3,146), 18px (1,659), 20px (925), 24px (816), 32px (76), 26px (59), 48px (43), 12px (2) and 40px (1). Card widths, carousel behavior and the mobile footer were not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` and `{colors.ink-body}`; use `{colors.primary}` pink for the brand blocks and white text on top of it.
2. Lead with a full-bleed photograph and a white 100px CHULALONGKORN headline, then a white section with a centered 80px bold title.
3. Build ranking and program cards as tall rounded tiles with gradient or pink overlays, white captions and a circular plus button.
4. Use pill outline buttons with arrows and soft 0.08-alpha card shadows.
5. Close with a pale pink band (`{colors.tint-pink}`) and a `{colors.footer-bg}` footer.
6. Check any new value against `web/data/extracted/chulalongkorn-university.json` before adding it.
