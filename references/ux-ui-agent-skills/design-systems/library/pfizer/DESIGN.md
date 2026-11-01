---
version: alpha
name: Pfizer
category: "Pharma"
description: "Pfizer corporate home page (pfizer.com), measured — white #ffffff canvas, Pfizer Blue #2e29ff pill buttons (58.67px radius) hovering to #00009d, #0000c9 blue links, #0a0a0a text, pale #f2f9fc and #e0f5ff section tints, Pfizer Tomorrow 72px display and 42px titles over Pfizer Diatype 24px/20px text, 16px-radius cards with a soft 32px shadow."
colors:
  canvas: "#ffffff"
  ink: "#0a0a0a"
  primary: "#2e29ff"
  on-primary: "#ffffff"
  primary-hover: "#00009d"
  link-blue: "#0000c9"
  surface-grey: "#cccccc"
  surface-tint: "#f2f9fc"
  cyan-tint: "#e0f5ff"
  cyan: "#0095ff"
  ink-slate: "#6e7781"
  ink-muted: "#666666"
  text-input-text: "#595959"
typography:
  display:
    fontFamily: PfizerTomorrow-Bold, Arial, sans-serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 64px
  section-title:
    fontFamily: PfizerTomorrow-Regular, Arial, sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 50px
  eyebrow:
    fontFamily: PfizerDiatype-Medium, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.9999px
  body:
    fontFamily: PfizerDiatype-Regular, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 40.8px
    letterSpacing: "-0.3px"
  button:
    fontFamily: PfizerDiatype-Bold, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.3px"
  nav:
    fontFamily: PfizerDiatype-Regular, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: PfizerDiatype-Medium, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  input:
    fontFamily: PfizerDiatype-Regular, Arial, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 2px
  sm: 14px
  md: 16px
  lg: 24px
  cta: 58.67px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 7px
  s4: 8px
  s5: 8.5px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8.496px 16px
    height: 45px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-outlined:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8.496px 16px
    height: 45px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
    height: 100px
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 0px 70px 0px 15px
    height: 76px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
    rounded: "{rounded.md}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 0px 32px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
    padding: 60px 0px 72px
---

# Pfizer

## Overview

This file describes the Pfizer corporate home page at `https://www.pfizer.com/` (title: "Pfizer: One of the world's premier biopharmaceutical companies"), measured at 1,280px. Off-canvas search and language dialogs were hidden by the extractor. The 390px mobile pass was served a bot-protection page ("Performing security verification") instead of the site, so there are no mobile values from the real page.

The page is a clean, blue-on-white corporate site that mixes news, pipeline data and storytelling. A white 100px header holds the italic Pfizer wordmark with its blue logo mark, the main links Science, Products, Stories, Newsroom, About, and on the right Careers, Investors, a search icon and Contact Us. The hero is a full-bleed photograph of a woman sorting medicine into a pill organiser at a kitchen table, darkened on the left so that the white headline "The Global Fight Against Fake Medicines" (72px) and its paragraph read clearly, with a blue pill button "Learn How We're Fighting Back". Below come an "Impact Report" card beside lists of Articles and Press Releases in blue link text; a pale blue "Products" and "Pfizer RxPathways" section with a large underlined search field; a "Pipeline Snapshot" of outlined number tiles (37 Phase 1, 25 Phase 2, 31 Phase 3, 1 Registration) and a solid blue "82 Total" tile; an "Areas of Focus" carousel of 3D molecular renders (Internal Medicine, Inflammation & Immunology, Vaccines, Oncology); an "About" paragraph; a full-width Pfizer Blue band "An Accord for a Healthier World" with a blue globe; a pale cyan "Sign Up for communications from Pfizer" block; and a white footer.

The voice is confident and mission-driven ("Revolutionary medicines enable us to enrich and extend life for people living with all types of diseases"). Imagery splits between warm documentary photos of people and cool, glossy molecular renders in blue and white.

## Colors

All of these are declared in the shipped CSS as a numbered brand palette (`--pfizer-blue-10…100`, `--pfizer-cyan-10…100`, `--neutral-10…100`).

- **Canvas `#ffffff`** — page background, header, cards and footer (`--neutral-white`).
- **Ink `#0a0a0a`** — the most-read text colour (948 characters); `--neutral-black`.
- **Primary `#2e29ff`** — Pfizer Blue, `--pfizer-blue-60`. Fills every primary pill button, the "82 Total" tile and the "Accord" band (579 area units).
- **Primary hover `#00009d`** — `--pfizer-blue-80`; the measured hover fill and border of the primary buttons.
- **Link blue `#0000c9`** — `--pfizer-blue-70` (aliased `--theme-brightblue`): navigation, article links, pipeline numbers, area-of-focus titles and footer links (828 characters).
- **Surface tint `#f2f9fc`** — the pale Products section background.
- **Cyan tint `#e0f5ff`** — `--pfizer-cyan-10`, the sign-up section background.
- **Cyan `#0095ff`** — `--pfizer-cyan-50`, a measured background (516 area units); the extraction does not record which element carries it.
- **Surface grey `#cccccc`** — a measured background area (909 units); its element is not recorded in the extraction.
- **Ink slate `#6e7781`** — dates and meta text beside press releases (218 characters).
- **Ink muted `#666666`** — `--neutral-60`; small eyebrow labels such as "About" and "Areas of Focus".
- **Text input text `#595959`** — the placeholder in the product search field.

## Typography

Two proprietary families are used, each split into weight-named font files: **Pfizer Tomorrow** (Regular, Bold) for headlines and **Pfizer Diatype** (Regular, Medium, Bold) for everything else. All are set at CSS weight 400 because the weight lives in the file name. By characters: PfizerDiatype-Regular 1,604, PfizerTomorrow-Regular 438, PfizerDiatype-Medium 342, PfizerDiatype-Bold 224, PfizerTomorrow-Bold 87.

- **Display — Pfizer Tomorrow Bold 72px / 64px line height.** The hero headline; the line height is tighter than the size.
- **Section title — Pfizer Tomorrow Regular 42px / 50px.** "Products", "Pfizer RxPathways", "Sign Up for communications from Pfizer".
- **Eyebrow — Pfizer Diatype Medium 18px / 24px** in `#666666`: "About", "Areas of Focus", "Pipeline Snapshot".
- **Body — Pfizer Diatype Regular 24px / 40.8px, −0.3px tracking.** The hero paragraph and the About statement.
- **Nav — Pfizer Diatype Regular 20px / 30px.** 20px is the most common size on the page (890 characters).
- **Button — Pfizer Diatype Bold 16px / 24px.**
- **Link — Pfizer Diatype Medium 13px / 19.5px.** "More articles >", "More press releases >".
- **Input — Pfizer Diatype Regular 28px / 28px.** The product search field.

Other measured sizes: 18px, 32px (card and area titles, −1px tracking), 16px, 62px (pipeline numbers, −0.62px tracking), 14px and 22px. Tracking is negative on larger text and neutral on small text.

**Substitutes:** Pfizer Tomorrow and Pfizer Diatype are custom corporate fonts not available publicly; the CSS falls back to Arial.

## Layout

The desktop page measured 5,609px tall. Bands: header (100px), hero media (710px), white news section (825px), `#f2f9fc` products section (536px), white pipeline section (775px, four tiles across), media carousel (521px), white about section (648px), the `#2e29ff` Accord band, a media band, the `#e0f5ff` sign-up block (412px) and the white footer (679px). Content is held to a left-aligned column with generous side margins; paddings of 96px (10 elements) and 48px (12) set the section rhythm, 24px (20) the inner spacing. The news section pairs a large card on the left with stacked link lists on the right; the products section splits into two equal columns. The CSS spacing scale is `--spacing-1` (0.25rem) through `--spacing-64` (16rem).

## Elevation & Depth

Cards float with a soft shadow, `rgba(0, 0, 0, 0.08) 0px 0px 32px 0px`, declared as `--card-box-shadow` and measured on nine elements (the area-of-focus cards and pipeline tiles). One more shadow, `rgba(0, 0, 0, 0.05) 0px 4px 10px 0px`, appears once. The hero uses a dark gradient over the photo for legibility; otherwise depth is colour banding.

## Shapes

Buttons are pills with a computed 58.67px radius (nine elements). Cards use 16px (ten elements; `--border-radius-2xl`), larger panels 24px (`--border-radius-3xl`), tab-like tops `14px 14px 0 0`, round carousel arrows 50%, and small details 2px. The CSS declares the full radius scale: sharp 0, xs 2px, sm 4px, md 6px, lg 8px, xl 12px, 2xl 16px, 3xl 24px, 4xl 32px.

## Components

- **Primary button** — `#2e29ff` fill and `2px solid #2e29ff` border, white Pfizer Diatype Bold 16px label, 45px tall, `8.496px 16px` padding, 58.67px radius. Measured hover: fill and border `#00009d`.
- **Outlined button** — "Browse All Products": transparent, `#2e29ff` label, `2px solid #0a0a0a` border, same size and radius.
- **Header** — white, 100px tall, Pfizer Diatype 18–20px links in `#0000c9`.
- **Search input** — 28px text, `#595959` placeholder, 76px tall with an underline and a circular arrow button, `0 70px 0 15px` padding.
- **Card** — white, 16px radius, 32px-blur 8% shadow, `#0000c9` title under an image.
- **Pipeline tile** — outlined in blue with a 62px number and a phase label; the total tile is solid `#2e29ff` with white text.
- **Footer** — white, `60px 0 72px` padding, logo plus link columns in `#0000c9` at 24px for the main group.

## Design System Architecture

No public Pfizer design system or brand-guideline page was opened in this research: `https://www.pfizer.com/about` returned HTTP 403 to the fetcher. The shipped CSS, though, exposes a structured token set in 112 `:root` variables: brand ramps `--pfizer-blue-10` to `--pfizer-blue-100` (#e8f2ff → #00003a) and `--pfizer-cyan-10` to `--pfizer-cyan-100` (#e0f5ff → #001928), a neutral ramp `--neutral-10` to `--neutral-100` plus `--neutral-black`/`--neutral-white`, theme aliases (`--theme-dark`, `--theme-light`, `--theme-brightblue`, `--theme-lightgray`, `--theme-white`), a radius scale (`--border-radius-sharp` to `--border-radius-4xl`), a rem-based `--spacing-*` scale with `--desktop-padding-*` aliases, `--card-box-shadow`, and `--ai-*` variables for an assistant widget. The home page uses blue-60, blue-70, blue-80, cyan-10, cyan-50 and the neutrals.

## Do's and Don'ts

**Do**
- Use Pfizer Blue `#2e29ff` for pill buttons and hero bands; darken to `#00009d` on hover.
- Use `#0000c9` for text links and navigation.
- Set headlines in Pfizer Tomorrow and all other text in Pfizer Diatype, with weight carried by the font file.
- Keep large text slightly tight (−0.3px to −1px).
- Put cards on white with the 8% 32px-blur shadow and 16px corners.

**Don't**
- Don't square off buttons; they are always pills.
- Don't use the cyan as a button colour; it appears as tints and artwork.
- Don't mix in other typefaces.
- Don't place long copy on the blue band without white text.

## Responsive Behavior

Not measured. The 390px mobile pass received a bot-protection page ("Performing security verification", with an `h1` "www.pfizer.com" at 40px/600 in a system font), not the Pfizer home page. Mobile navigation, type scaling and grid behaviour of the real site were therefore not recorded. The CSS declares `--desktop-padding-*` spacing aliases, but their mobile counterparts were not measured.

## Iteration Guide

1. Start with a white canvas, `#0a0a0a` text and Pfizer Diatype 20px.
2. Build a white 100px header with `#0000c9` links.
3. Use a full-bleed photo hero with a 72px Pfizer Tomorrow Bold headline and a `#2e29ff` pill button.
4. Alternate white and pale tint sections (`#f2f9fc`, `#e0f5ff`) with 42px section titles and `#666666` eyebrows.
5. Use 16px-radius cards with the 32px-blur shadow for stories and focus areas.
6. Add one full-width `#2e29ff` band with white text for a campaign.
7. Take new colours from the `--pfizer-blue-*` and `--pfizer-cyan-*` ramps.
