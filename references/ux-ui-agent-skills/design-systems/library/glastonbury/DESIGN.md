---
version: alpha
name: Glastonbury Festival
category: "Culture & Events"
description: "Glastonbury Festival (glastonburyfestivals.co.uk): a deep navy #1a1a36 night-sky site with white uppercase Bebas Neue Pro SemiExpanded headings on a fluid scale (52.111px max at 1280px), Proxima Nova body text, and news cards in flag colours — red #d93a4d, blue #3969a9, gold #cd840e, green #147c41 — with round 50% social buttons."
colors:
  canvas: "#1a1a36"
  ink: "#ffffff"
  primary: "#cd840e"
  primary-hover: "#a66b0b"
  navy-deep: "#1e1d44"
  night: "#0b0a26"
  flag-blue: "#3969a9"
  flag-green: "#147c41"
  flag-red: "#d93a4d"
  flag-vermilion: "#d73e23"
  flag-scarlet: "#d8222a"
  sun-yellow: "#ecc914"
  ink-dark: "#000000"
typography:
  display:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 52.111px
    fontWeight: 700
    lineHeight: 65.1388px
  display-mobile:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 40.7069px
    fontWeight: 700
    lineHeight: 50.8837px
  heading:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 33.7598px
    fontWeight: 700
    lineHeight: 40.5118px
    textTransform: uppercase
  subheading:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 27.181px
    fontWeight: 700
    lineHeight: 32.6172px
    textTransform: uppercase
  body:
    fontFamily: proxima-nova, sans-serif
    fontSize: 21.8847px
    fontWeight: 400
    lineHeight: 27.3559px
  button:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 27.181px
    fontWeight: 600
    lineHeight: 32.6172px
    textTransform: uppercase
  nav-tab:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 21.8847px
    fontWeight: 600
    lineHeight: 21.8847px
    textTransform: uppercase
  nav:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 17.6271px
    fontWeight: 600
    lineHeight: 21.1525px
  link:
    fontFamily: bebas-neue-pro-semiexpanded, "Helvetica Neue", Arial, sans-serif
    fontSize: 33.7598px
    fontWeight: 600
    lineHeight: 40.5118px
    textTransform: uppercase
  input:
    fontFamily: Arial
    fontSize: 17.6271px
    fontWeight: 400
rounded:
  xs: 26.44px
  pill: 9999px
spacing:
  s1: 8px
  s2: 8.81px
  s3: 12px
  s4: 13.22px
  s5: 15.36px
  s6: 16px
  s7: 17.63px
  s8: 21.88px
  s9: 23.14px
  s10: 24px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-tab:
    textColor: "{colors.ink}"
    typography: "{typography.nav-tab}"
    padding: 12px 24px
  social-button:
    backgroundColor: "{colors.flag-green}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  accessibility-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink-dark}"
    rounded: "{rounded.pill}"
  accessibility-button-hover:
    backgroundColor: "{colors.primary-hover}"
  mailing-list-button:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 17.6271px 52.8814px
  news-card:
    backgroundColor: "{colors.flag-red}"
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.input}"
    padding: 13.2203px
    height: 48px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Glastonbury Festival

## Overview

The Glastonbury Festival site (glastonburyfestivals.co.uk, title "Glastonbury Festival - Home") looks like the festival at night: a deep navy sky, an illustrated skyline of flags, bunting, lights and stages along the top and bottom, and the ornate yellow-and-orange "GLASTONBURY FESTIVAL OF CONTEMPORARY PERFORMING ARTS" logo centred in the header. Under the logo a row of tabs in flag colours carries the navigation (HOME, NEWS, INFO, LINE-UP, AREAS, HISTORY & GALLERY, WORTHY CAUSES, SHOP), and small round buttons at the top left (accessibility options, Instagram, TikTok, Facebook) and a round search button at the top right complete the header.

The home page is a news wall. "LATEST NEWS" with a "VIEW ALL NEWS" link heads a three-column grid of twelve cards; each card is a photograph or poster image above a solid coloured panel — red, blue, gold, green, vermilion — with a white uppercase headline and a small date ("SHEELAGH ALLEN 1947-2026", "GLASTONBURY 2027 TICKET INFORMATION CONFIRMED", "PILTON PARTY 2025 IN PHOTOS"). The edges of cards and buttons have a torn-paper texture in the capture. Below, "SIGN UP TO THE MAILING LIST" with a gold "SIGN UP NOW" patch, three promotional tiles (Love the Farm / Leave No Trace, the BBC webcam, Worthy Farm Cheddar), the illustrated skyline with the festival sun emblem, and partner logos for Oxfam, Greenpeace and WaterAid. The voice is newsy and celebratory.

## Colors

- **Canvas `#1a1a36`** — the body and footer background, a deep night navy; the largest measured background.
- **Night `#0b0a26`** — the darker navy of lower sections and the footer partner band.
- **Navy deep `#1e1d44`** — the measured colour of the logo h1 element.
- **Ink `#ffffff`** — virtually all text.
- **Primary `#cd840e`** — festival gold: the accessibility-options button fill and the gold news-card panels; the "SIGN UP NOW" patch is the same hue in the capture. Hover darkens it to **`#a66b0b`**.
- **Flag colours** — measured as card and button backgrounds: **blue `#3969a9`**, **green `#147c41`**, **red `#d93a4d`**, **vermilion `#d73e23`** and **scarlet `#d8222a`**. Social buttons each darken on hover (green to `#106435`, vermilion to `#ae321c`, blue to `#2e5589`).
- **Sun yellow `#ecc914`** — a measured border colour, matching the festival sun emblem.
- **Ink dark `#000000`** — text on the accessibility button and in the white search input.

The `#0000ee` text measured on 20 characters is the browser's default link colour and is not part of the palette. The `--wp--preset--*` variables are WordPress defaults.

## Typography

- **Bebas Neue Pro SemiExpanded** (loaded as `bebas-neue-pro-semiexpanded`, weights 600 and 700; the stylesheet also declares the regular and expanded widths) — every heading, label, tab and button, almost always uppercase. **Display**: 700, 52.111px / 65.1388px (the logo h1 and "SIGN UP TO THE MAILING LIST"). **Heading**: 700, 33.7598px / 40.5118px ("LATEST NEWS"). **Link**: 600 at the same size ("VIEW ALL NEWS"). **Subheading**: 700, 27.181px / 32.6172px (news card headlines). **Button**: 600, 27.181px / 32.6172px ("SIGN UP NOW", recorded probe). **Nav tab**: 600, 21.8847px / 21.8847px (recorded probe of "HOME", "LINE-UP"). **Nav**: 600, 17.6271px / 21.1525px (social buttons, dates).
- **Proxima Nova** (`proxima-nova`, 400) — **body**: 21.8847px / 27.3559px for paragraphs such as the mailing-list blurb.
- **Arial** — the search input (17.6271px).
- **Font Awesome 6** — icons.

All sizes come from a fluid scale: `--f-0` (16→18px) to `--f-9` (82.56→134.11px) interpolated between `--fluid-min-width: 320` and `--fluid-max-width: 1500`. At the measured 1280px width that gives 17.6271px (`--f-0`), 21.8847px (`--f-1`), 27.181px (`--f-2`), 33.7598px (`--f-3`) and 52.111px (`--f-5`).

**Substitutes**: Bebas Neue Pro and Proxima Nova are commercial (Adobe Fonts). The free Bebas Neue (narrower, single weight) or Anton for headings and Montserrat or Figtree for body text are workable stand-ins.

## Layout

On the 1280px desktop page the news band runs from x=87 to x=1193 in three columns with `--news-gap: calc(min(1200px, 60vw) * .02)` (a 2% gap); the latest-news header row spans x=79 to x=1201. The header with logo, tabs and illustration is 367px tall. Spacing is fluid: `--space-3xs` through `--space-3xl` are built from `--fc-s` (16→18px) multiples (0.25×, 0.5×, 0.75×, 1×, 1.5×, 2×, 3×, 4×, 6×) and paired steps such as `--space-s-2xl`. Measured paddings: 24.9492px (most frequent), 8.81356px, 8px, 26.4407px, 12px, 24px and 40px. The footer partner row is three columns between x=302 and x=969.

## Elevation & Depth

No box-shadows were measured. Depth comes from the layered illustration (sky, bunting, flags, stages, lights) at the top and bottom of the page, from the saturated card panels against navy, and from the paper-texture edges on cards and tabs visible in the capture.

## Shapes

Round buttons are the only CSS-rounded elements: 50% radius on 12 elements (accessibility, social and search buttons, 35px social circles). One 26.4407px radius was measured. Cards, tabs and the sign-up patch have no CSS radius (0px on the probed tabs and button); their rough edges are image texture.

## Components

- **Nav tab** — uppercase Bebas 21.8847px/600 white label, padding 12px 24px, on a coloured textured tab (each tab a different flag colour in the capture).
- **Social button** — 35px circle, flag-colour fill (`#147c41` Instagram, `#d73e23` TikTok, `#3969a9` Facebook), white icon; darker shade on hover.
- **Accessibility button** — round, `#cd840e` fill, black icon; hover `#a66b0b`.
- **Search button** — round, white fill, black icon; hover inverts to `#3969a9` with white icon.
- **News card** — image on top, solid flag-colour panel below, white 27.181px uppercase headline, small uppercase date.
- **Mailing-list button** — `a.mailing-list-button`, white uppercase Bebas 27.181px/600 label, padding 17.6271px 52.8814px, 67.875px tall, on a gold textured patch.
- **Text input** — white, black Arial 17.6271px, 13.2203px padding, 48px tall.
- **Footer** — navy, illustrated skyline with the festival sun emblem, partner logos, small uppercase legal links.

## Design System Architecture

No public design system or brand guidelines are linked: https://www.glastonburyfestivals.co.uk/press/ shows only the logo with no usage rules. The site is WordPress (theme `wp-content/themes/glastonbury-2024/`). The de-facto system is a fluid "Utopia"-style scale exposed on `:root`: type steps `--f--2` to `--f-9` (each with `-min` and `-max` values), spacing multipliers `--fc-3xs` to `--fc-3xl` based on `--fc-s`, composed space tokens `--space-3xs` … `--space-3xl` and pairs like `--space-s-m`, all driven by `--fluid-bp` between `--fluid-min-width: 320` and `--fluid-max-width: 1500`, plus `--news-gap`. Colour is not tokenised in variables; the flag palette is applied per component, and much of the visual identity (logo, tabs, paper edges, skyline) is raster artwork.

## Do's and Don'ts

**Do**
- Set the page on night navy `#1a1a36` and keep text white.
- Use Bebas Neue Pro SemiExpanded in uppercase for every heading, tab and button.
- Rotate the flag colours (red, blue, gold, green, vermilion) across tabs and news cards.
- Size type and space with the fluid `--f-*` and `--space-*` scales.
- Use circles for social, search and accessibility controls.

**Don't**
- Don't put body copy in the display face; use Proxima Nova.
- Don't use pastel or muted colours; the palette is saturated.
- Don't add drop shadows or glossy effects.
- Don't count the browser default link blue as a brand colour.
- Don't give cards CSS rounded corners; their edges are textured artwork.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 measured 40.7069px / 50.8837px (52.111px on desktop), "LATEST NEWS" 28.0955px / 33.7146px, and card headlines 23.3419px. The most-read mobile sizes are 16.1186px, 23.3419px and 19.3958px, consistent with the fluid `--f-*` scale at a narrow viewport. The news band runs from x=57 to x=354 in one column; the footer from x=52 to x=338. Two header links were visible and a toggle labelled "Menu" was visible on mobile; up to two card columns were measured. Breakpoints were not measured.

## Iteration Guide

1. Start with `#1a1a36` canvas and white uppercase Bebas Neue Pro SemiExpanded headings.
2. Define type with a fluid scale between 320px and 1500px; at 1280px use 17.6/21.9/27.2/33.8/52.1px.
3. Build news cards as image plus a solid flag-colour panel with a white headline and date.
4. Give navigation and buttons coloured, textured tab shapes; keep control icons in circles.
5. Use gold `#cd840e` for the main call to action and darken colours on hover.
6. Frame the page with illustration at top and bottom instead of UI chrome.
