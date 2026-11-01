---
version: alpha
name: Thai Union Group
category: "Thai Brands"
description: "Thai Union Group corporate site (thaiunion.com): pale blue canvas #e8f1f8 with white and navy #002654 rounded panels, Gotham 400 at 14px/28px with -0.4px tracking, brand blue #21409a, sky blue #4aabe0 and outlined uppercase buttons with 6.4px radius."
colors:
  canvas: "#e8f1f8"
  page-largest: "#ffffff"
  ink: "#1a1a1a"
  primary: "#4aabe0"
  navy-deep: "#002654"
  surface-lavender: "#d2d9eb"
  brand-blue: "#21409a"
  ink-muted: "#6e7b90"
  hairline: "#ffffff80"
  card-bg: "#3e618a"
  accent-aqua: "#4fffe1"
typography:
  display:
    fontFamily: Gotham, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: Gotham, sans-serif
    fontSize: 23.4px
    fontWeight: 400
    lineHeight: 29.25px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: Gotham, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: Gotham, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30.8px
    letterSpacing: "-0.4px"
  body:
    fontFamily: Gotham, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.4px"
  nav:
    fontFamily: Gotham, sans-serif
    fontSize: 11.8307px
    fontWeight: 700
    lineHeight: 18.9292px
    letterSpacing: "-0.4px"
  link:
    fontFamily: Gotham, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 19.2px
    letterSpacing: "-0.4px"
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 6.4px
  md: 8px
  lg: 10.66px
  xl: 12px
  2xl: 12.8px
  3xl: 100px
  4xl: 142.22px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 21.34px
  s9: 22.22px
  s10: 24px
components:
  button-secondary:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 16px 35.5584px
    height: 53px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 14px 0px 18px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.xl}"
    padding: 16px
---

# Thai Union Group

## Overview
The measured site is thaiunion.com (final URL https://www.thaiunion.com/, language `en`), the corporate site of Thai Union Group, the global seafood company whose brands, per its own homepage text, include 21 brands in its portfolio, 13 shelf-stable heritage brands and 49 years leading the seafood industry. It is a Tailwind-based build (the extracted root variables are Tailwind tokens such as `--container-md`, `--text-lg`, `--color-cyan-400` and `--color-slate-200`, plus site variables such as `--space-16` and `--fs-super-dp-2`).

The look is clean, calm, ocean-toned corporate. The page canvas is a pale blue-white (`#e8f1f8`) and content sits in large white or deep blue rounded panels with generous margins. A white header carries the multicolor Thai Union mark at the left, a row of small uppercase navigation items (OUR COMPANY, OUR BUSINESSES, SUSTAINABILITY, CORPORATE GOVERNANCE, INVESTOR RELATIONS, NEWSROOM, CAREERS, CONTACT), a search icon and a language selector. The hero is an aerial photograph of a fishing boat and net in teal water inside a panel with one large rounded corner, carrying a two-tier headline ("We are committed to / Healthy Living, Healthy Oceans"), a short paragraph, an outlined "LEARN MORE" button, a segmented progress bar and a "01 / 01" slide counter. Next is a white panel "Our Expertise: We Are a Global Seafood Leader" with underlined tabs and an interactive 3D globe on a blue gradient beside four large statistics (21 brands, a "TOP" ranking of global seafood exporters, 13 shelf-stable heritage brands, 49 years). Then a deep blue panel "Our Businesses: How Thai Union Creates Value" with four tall photo cards (fish feed, pet, ingredients, canned seafood).

Copy is plain, confident English with short two-part headings (a light lead-in line above the main line) and sentence-case paragraphs. Photography is bright, natural, product-and-ocean imagery.

## Colors
Measured backgrounds by area: white `#ffffff` (6,066), deep navy `#002654` (2,549), lavender-gray `#d2d9eb` (1,819), `#d4e0e1` (709), `#edf0f5` (632), card blue `#3e618a` (418), brand blue `#21409a` (237) and translucent white `#ffffff99` (219). The page canvas, from the body, is `#e8f1f8`. Text by characters: white (4,500, on the dark panels), near-black `#1a1a1a` (1,308, the `ink`), navy `#002654` (491), sky blue `#4aabe0` (95, the generator's `primary`), `#21409a` (80), gray-blue `#6e7b90` (61) and translucent whites (`#ffffff80`, `#ffffffb2`, `#ffffffcc`).

The brand blue `#21409a` is the navigation hover and active-tab color (the hover record shows the CAREERS link going from `rgb(26, 26, 26)` to `rgb(33, 64, 154)`). The CSS corpus also lists an aqua `#4fffe1` (20 uses), recorded as `accent-aqua`. There is no filled primary button: calls to action are outlined (a 1px `#ffffff80` border on dark panels), so the `primary` slot is held by the sky blue `#4aabe0` seen in text and accents rather than a button fill. Tailwind's default cyan and slate variables in the root variables are framework values, not brand colors.

## Typography
One family: Gotham (6,688 characters), loaded at weights 400, 500 and 700. Gotham is a commercial typeface; Montserrat is a commonly used open lookalike (a suggestion, not a site statement). All text carries a measured `-0.4px` letter-spacing.

Measured scale: display 28px / 35px weight 400 (23.4px / 29.25px at 390px); heading 24px / 30px; subheading 22px / 30.8px; body 14px / 22.4px weight 400 (the dominant size, 4,870 characters); navigation 11.83px / 18.93px weight 700; link and button label 12px / 19.2px weight 500, uppercase. Other sizes: 10px (467, small captions), 18px, 32px, 36px and 42px (statistics). The heading style is deliberately light (weight 400) at medium size; bold is reserved for navigation.

## Layout
The page is 1280px wide and 7,536px tall. Panels are inset from the page edge on the pale canvas, with 22.2208px as the most frequent padding (57 uses), then 16px, 60.8px, 44.4416px, 35.5584px, 21.3376px and 40px; gaps 16px (36), 8px (31), 40px, 30px and 32px. The root variables define a spacing set (for example `--space-14`, `--space-16`, `--space-40` and a viewport-relative `--space-50`). Content blocks are left-aligned inside panels with a text column on the left and imagery or statistics on the right, and 4-up card rows below.

The homepage text also lists the section sequence below the fold: Our Impact, SeaChange 2030, Our Innovation, Our Careers with Life at Thai Union, Thai Union Highlights, Our Awards and Recognition with Global Accolades, then About Us, Resources and Contact Us in the footer. Calls to action are repeated as "Learn More", "See our Innovation", "See our Careers", "See our news", "See our Awards", "Explore our history" and "Read More", always in sentence-style verbs that start with an action and render in uppercase through the button style. This consistent pattern, one outlined button per panel, keeps every section to a single clear next step.

## Elevation & Depth
Almost flat. The measured shadows are Tailwind's transparent defaults plus a faint `rgba(0, 0, 0, 0.1)` small shadow (1px / 3px). Panels are separated by the canvas color and by color blocks (white, navy, blue gradient) instead of shadows; the globe and the cards use gradients.

Because the largest area values belong to white, navy and the lavender-gray , the overall impression is a blue-tinted neutral system: the three big color blocks each take a distinct job, white for reading panels, navy for brand statements and the footer-weight band, and lavender-gray for secondary panels and quiet backgrounds around the globe and statistics.

## Shapes
Rounded with generosity: radii measured are 10.6624px (25), 12px (25), 12.8px (20), 4px (10), 6.4px (8), 8px (2), 100px (2) and one-off large corners (142.22px at one corner of the hero and panel shapes, giving the signature single-large-corner silhouette). Buttons use 6.4px. Panels and cards use 10.66-12.8px.

## Components
- **button-secondary (outlined "LEARN MORE"):** transparent fill, white text, uppercase Gotham 12px weight 500, radius 6.4px, padding 16px 35.5584px, height 53px, border `#ffffff80`.
- **nav:** white bar, text `#1a1a1a`, 11.83px uppercase bold; padding 14px 0px 18px.
- **link:** white uppercase 12px on dark panels.
- **card:** `#3e618a` fill, white text, radius 12px, padding 16px.
- **Tabs:** uppercase small labels; the active one is blue with an underline.
- **Statistic list:** large numerals (32-42px) over a small caption with a thin rule.

## Design System Architecture
No public design system or brand guideline was found: the navigation and footer links cover company, businesses, sustainability, governance, investors, newsroom, careers and contact, and the only downloadable resources named are the annual and sustainability reports. The de-facto system is Tailwind with site spacing and font-size variables (`--space-*`, `--fs-super-dp-2` of 56px) and a single family loaded at three weights.

## Do's and Don'ts
- Do place content in large rounded panels on a pale blue canvas.
- Do use Gotham (or Montserrat) at weight 400 for headings with -0.4px tracking.
- Do use outlined uppercase buttons with a translucent white border on dark panels.
- Do use ocean-blue and navy blocks to separate sections.
- Don't add drop shadows; separation is by color blocks.
- Don't use filled bright buttons; none were measured.
- Don't use Tailwind's default cyan or slate variables as brand colors.

## Responsive Behavior
Mobile (390px) was measured for type: the h1 is 23.4px / 29.25px weight 400, the h2 21.45px, the body 11.7px / 16.38px. Layout reflow and menu behavior are not measured.

## Iteration Guide
1. Canvas `#e8f1f8`, white and navy `#002654` panels, text `#1a1a1a`.
2. Gotham 400 at 14 / 22 / 24 / 28px, -0.4px letter-spacing.
3. Brand blue `#21409a` for hover and active tabs, sky blue `#4aabe0` for accents.
4. Outlined uppercase buttons, 6.4px radius; panels 12px.
5. Verify with `node web/scripts/verify-designs.mjs --slug=thai-union`.
