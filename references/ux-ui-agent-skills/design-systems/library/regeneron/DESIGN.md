---
version: alpha
name: Regeneron
category: "Pharma"
description: "Regeneron is a biotechnology company site: white canvas (#ffffff) with black text, a blue primary (#2169e6) on rounded buttons, an icy tint (#f6fafe), blue-to-purple-to-magenta gradient accents, Roboto Condensed bold headlines at 42px, Roboto 18px body, 8px button radii and large 80px corners on story cards."
colors:
  accent-purple: "#a525d9"
  accent-magenta: "#d50056"
  tint-blue: "#6aaae4"
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#2169e6"
  surface-3: "#f6fafe"
  ink-4: "#ffffffcc"
typography:
  display:
    fontFamily: "\"Roboto Condensed\", Helvetica, Arial, sans-serif"
    fontSize: 42px
    fontWeight: 700
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"Roboto Condensed\", Helvetica, Arial, sans-serif"
    fontSize: 38px
    fontWeight: 700
    lineHeight: 44px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  link:
    fontFamily: "\"Roboto Condensed\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 20px
  button-secondary:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 4px
  sm: 8px
  md: 30px
  lg: 35px
  xl: 40px
  2xl: 60px
  3xl: 80px
  4xl: 100px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 25px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 8px 38px 8px 8px
    height: 38px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 0px 12px 20px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 6px 40px 6px 45px
    height: 38px
    borderColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 26px 50px 26px 26px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
---

## Overview

The page title is "Regeneron | Pushing the Bounds of Science" and the measured URL is https://www.regeneron.com/. The home page is a corporate-science site with a utility strip (Investors & Media, Careers, Clinical Trials, Contact Us, search and a language globe), a main navigation (ABOUT, SCIENCE, MEDICINES, RESPONSIBILITY, STORIES) with dropdown chevrons, and a hero with the gradient headline "SCIENCE WITHOUT LIMITS", the lines "Nearly 50 candidates in development. 16 approved medicines developed in-house. One relentless scientific mission." and a blue "Watch the video" pill. Below: "Press releases for investors and media" (with "Visit our newsroom" link) and a carousel of press-release cards (dates such as "Oct 01", titles and "Read more" links), "Our stories" with a large blue-purple DNA-helix feature card ("A Mission Rooted in Neuroscience", "Learn more"), and a black band with the statement "From biologics to genetic medicines, our journey turns cutting-edge science into transformative medicine, redefining excellence and efficiency in research and development." followed by three photograph cards (a laboratory technician, a building, a clinician and patient).

The tone is institutional and scientific: bold condensed headlines, light-blue washes, blue links with arrows, and a signature thin gradient rule above section intros.

## Colors

- **Canvas:** `#ffffff`, the dominant background (area 1790); `#000000` is both the ink (2508 characters) and a full black band (area 1023); `#f6fafe`, an icy tint, backs the "Our stories" section and the footer (area 279).
- **Primary:** `#2169e6`, a medium blue used for buttons ("Watch the video", "Visit our newsroom" in the mobile pass), links and arrows (199 characters); fill area 13.
- **White on color:** `#ffffff` (1139 characters) and `#ffffffcc` (169 characters, white at 80 percent) are text colors on dark and gradient panels.
- **Gradient accents:** `#2069e7` blue, `#a525d9` purple and `#d50056` magenta are measured as border colors and form the thin rule above section intros and the card outline glow; `#6aaae4` is a lighter blue fill.

The CSS root contains a large set of Bootstrap variables (`--bs-yellow`, `--bs-info`, `--bs-orange`, `--bs-success`, `--bs-danger-text-emphasis`, `--bs-code-color: #d63384`); these are framework defaults and are not brand colors. The blue cookie-settings icon button at the left edge of the capture is a consent widget, not a brand component.

## Typography

Two families carry the page: Roboto Condensed (bold) for headlines and Roboto for text; Barlow Condensed is also loaded.

- **Display (h2 used as h1):** "Roboto Condensed", Helvetica, Arial, sans-serif; 42px, weight 700, line height 44px; 38px / 44px on mobile.
- **Body:** Roboto, sans-serif; 18px, weight 400, line height 24px.
- **Navigation:** Roboto 14px, weight 400, line height 16px.
- **Link / button label (condensed):** Roboto Condensed 18px, weight 700, line height 20px.
- **Secondary button label:** Roboto 16px, weight 400, line height 18px (uppercase "ABOUT").

Characters: Roboto 2999, Roboto Condensed 1016. Sizes: 18px (1895), 19px (902), 42px (444), 14px, 28.251px (169), 12px, 22px (the card title, Roboto Condensed 700 with line height 28px), 16px. Weights: 400 (2061) and 700 (1954). No letter spacing is recorded. Roboto and Roboto Condensed are open-source Google fonts.

## Layout

The desktop pass is 1280px wide and 4069px tall. The header is 74px high with a small utility row above the main navigation. The hero has a left-aligned headline and a very large empty field to the right (the hero imagery or video was not present in the capture). The press-release section is a two-column row: at left a short intro with social icons (LinkedIn, Instagram, Facebook, YouTube, X) and a gradient rule, at right a horizontal carousel of cards, 514px wide and 354px tall, with dot pagination. The stories section uses a single large feature card with circular previous and next buttons. The dark band centers a three-line statement above three equal photo cards. The footer is 218px high on `#f6fafe` with CONTACT US, INVESTORS & MEDIA and CAREERS links.

Gaps: 10px. Paddings: 2px (45), 12px (40), 8px (23), 25px (17), 24px (14), 15px (13), 20px, 6px. Card padding is `26px 50px 26px 26px`.

## Elevation & Depth

Shadows are soft and frequent: `rgba(0, 0, 0, 0.1) 0px 1px 16px 0px` (16 elements; cards and header), `rgba(0, 0, 0, 0.16) 0px 4px 25px 0px` (2) and `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2). The CSS also has `0 4px 32px rgba(11,26,41,.12), 0 0 0 .5px rgba(26,70,128,.12)` and `0 2px 24px 0 rgba(0,0,0,.24)`. The header floats above the page with a light shadow, and the press-release cards carry a glowing gradient outline.

## Shapes

Radii: 4px (23), 8px (16), 80px (10), 35px (9), `8px 8px 0px 0px` (6), `0px 0px 8px 8px` (3), 100px (2) and 60px (1). The search input is a 30px pill (radius 30px), the mobile CTA 40px, the secondary "ABOUT" button 8px, and the story feature card has very large rounded corners (80px). The press card measured `0px 0px 80px` on its lower corner.

## Components

- **Pill button ("Watch the video", "Visit our newsroom"):** `#2169e6` fill, white Roboto Condensed 18px weight 700 label with an arrow chevron, padding `12px 0px 12px 20px`, height 60px, radius up to 40px.
- **Secondary button ("ABOUT"):** transparent, black Roboto 16px label, 2px border, radius 8px, padding `8px 38px 8px 8px`, height 38px.
- **Search input:** white fill, black text, 1px solid `#000000`, radius 30px, padding `6px 40px 6px 45px`, height 38px.
- **Press card:** white fill, black text, padding `26px 50px 26px 26px`, 354px tall, gradient glow outline, date line, bold title and "Read more →" link in blue.
- **Navigation:** Roboto 14px black labels with chevrons; utility links underlined.
- **Footer:** `#f6fafe`, black Roboto 16px links, 218px tall.

## Design System Architecture

No public design-system or brand-guideline page was opened. The shipped CSS is built on Bootstrap 5 (root variables `--bs-*`, such as `--bs-border-color: #dee2e6` and `--bs-border-radius-2xl: 2rem`), with custom fonts (Roboto, Roboto Condensed, Barlow Condensed) and a custom gradient accent. The brand values used here (blue `#2169e6`, tint `#f6fafe`) were measured on rendered elements rather than taken from Bootstrap defaults. Measurements are in `web/data/extracted/regeneron.json` for https://www.regeneron.com/.

## Do's and Don'ts

- Do use bold Roboto Condensed for headlines and Roboto for text.
- Do use `#2169e6` for buttons, links and arrows, with chevrons or arrows after link labels.
- Do add the thin blue-purple-magenta gradient rule above section intros.
- Do use generous rounded corners on feature cards and pill shapes on calls to action.
- Don't use the Bootstrap palette (yellow, orange, info, danger) as brand colors.
- Don't document the cookie-settings button as brand UI.
- Don't flatten the soft shadow `rgba(0, 0, 0, 0.1) 0px 1px 16px 0px` on cards and header.

## Responsive Behavior

The 390px pass measured: headline 38px with line height 44px (360px wide); body 18px / 24px (302px wide); the call to action "Visit our newsroom" as a blue pill, 223px wide and 60px high with a 40px radius and padding `12px 0px 12px 20px`; the header 74px high with the label "OPEN GLOBAL MENU" in Roboto 18px. Carousel and card layout at mobile width were not measured.

## Iteration Guide

1. White canvas, black text, `#2169e6` primary, `#f6fafe` tint.
2. Headlines in Roboto Condensed 700, 42px / 44px; text in Roboto 18px / 24px.
3. Pill buttons 60px high with an arrow; secondary buttons 38px high with 8px radius.
4. Cards with 26px padding and soft `0 1px 16px` shadow.
5. Gradient rule (`#2069e7`, `#a525d9`, `#d50056`) above section intros.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=regeneron --url=https://www.regeneron.com --force --no-motion` and gate with `node web/scripts/verify-designs.mjs --slug=regeneron`.
