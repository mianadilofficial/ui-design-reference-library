---
version: alpha
name: WorkOS
category: "Developer Tools & IDEs"
description: "WorkOS's site sets Untitled Sans 500 headlines very tight (80px/84px at -5.6px) on white #ffffff and #f9f9fb sections with #29363d ink, uses a brand purple #6363f1 pill CTA (100px radius, hover #7777f3) and a glowing mint #23f0c3 pill on the deep navy #030527 developer band, with layered soft shadows on cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9fb"
  ink: "#29363d"
  primary: "#6363f1"
  on-primary: "#ffffff"
  primary-hover: "#7777f3"
  surface-night: "#030527"
  ink-night: "#030628"
  code-card: "#181b39"
  ink-muted: "#656b8a"
  ink-soft: "#8f96bd"
  on-dark-muted: "#c5cae8"
  accent-mint: "#23f0c3"
  accent-violet: "#d272ff"
  hairline: "#e8eaed"
typography:
  display:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 80px
    fontWeight: 500
    lineHeight: 84px
    letterSpacing: "-5.6px"
  display-mobile:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 41.73px
    fontWeight: 500
    lineHeight: 43.8165px
    letterSpacing: "-2.9211px"
  section-title:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 52px
    fontWeight: 500
    lineHeight: 55.64px
    letterSpacing: "-2.6px"
  kicker:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
    letterSpacing: "-1.4px"
  body:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 30.4px
    letterSpacing: "-0.19px"
  button:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  footer:
    fontFamily: "\"Untitled Sans\", \"Untitled Fallback\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 1px
  sm: 4px
  md: 7px
  lg: 8px
  xl: 16px
  code-card: 18px
  3xl: 24px
  4xl: 46px
  cta: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 8px
  s6: 9.5px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 24px
    height: 43px
    boxShadow: rgba(23, 6, 100, 0.035) 0px 24px 22px 0px, rgba(23, 6, 100, 0.055) 0px 8.5846px 8.03036px 0px, rgba(23, 6, 100, 0.067) 0px 4.77692px 3.89859px 0px, rgba(23, 6, 100, 0.082) 0px 2.63479px 1.91116px 0px, rgba(23, 6, 100, 0.12) 0px 1.15891px 0.755676px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-mint:
    backgroundColor: "{colors.accent-mint}"
    textColor: "{colors.ink-night}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 24px
    height: 43px
    boxShadow: rgba(35, 240, 195, 0.7) 0px 0px 14px 0px, rgb(25, 203, 164) 0px 0px 0px 1px inset
  button-sign-in:
    textColor: "{colors.primary}"
    rounded: "{rounded.cta}"
    padding: 9.5px 20px
    height: 35px
    border: "1px solid #e8eaed"
  button-sign-in-hover:
    borderColor: "{colors.primary}"
  product-chip:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 20px 8px 8px
    height: 66px
    border: "1px solid #e7e8ec"
  nav-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
  code-panel:
    backgroundColor: "{colors.code-card}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.code-card}"
    boxShadow: rgba(3, 3, 6, 0.07) 0px 100px 80px 0px, rgba(3, 3, 6, 0.05) 0px 41.7776px 33.4221px 0px, rgba(3, 3, 6, 0.043) 0px 22.3363px 17.869px 0px, rgba(3, 3, 6, 0.035) 0px 12.5216px 10.0172px 0px, rgba(3, 3, 6, 0.027) 0px 6.6501px 5.32008px 0px, rgba(3, 3, 6, 0.02) 0px 2.76726px 2.21381px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.footer}"
    padding: 66px 0px 24px
---

# WorkOS

## Overview

WorkOS (workos.com, measured 2026-10 at 1280px; title "WorkOS — Your app, Enterprise Ready.") sells enterprise-readiness features (SSO, directory sync, user management) to software teams. The site is polished and product-forward: very tight, large Untitled Sans headlines, a single brand purple, floating 3D-styled product cards and long, soft shadows.

The header carries the WorkOS logo, Products, Docs, Customers, Resources, Pricing and a purple-text "Sign in" pill. The hero is left-aligned: "Your app, Enterprise Ready." at 80px (the second line renders purple in the capture), a short paragraph ("Start selling to enterprise customers with just a few lines of code..."), a purple "Get started" pill and a "Talk to an expert" text link. To the right floats a stack of white toggle cards (SCIM, RBAC, Connectors...) with green status tags. Below are an event announcement ("Here's what we announced at ...") and three product chips (Passport, Atlas, Airlock), then a dense customer logo grid (OpenAI, Anthropic, Cursor, Perplexity, Vercel, Loom, Snowflake and more) and "See more customers".

The capture continues with "The all-in-one solution / Enterprise SSO (and a whole lot more)" (a 3D sign-in card and a two-column list of products with icons), a deep navy "Developer-first design / A unified platform with modern APIs" band with a mint "Read the docs" pill, a code panel with language tabs and a glowing circuit illustration, "Directory Sync / SCIM and HRIS integrations? No sweat." on a light grey section with floating device illustrations, "Frictionless set up / The IT admin's admin" with an admin-portal screenshot, "Why WorkOS? / Expand your market" with a video thumbnail, a Perplexity testimonial, a customer logo rail and a light footer. Each section opens with a small purple kicker line above a large black title.

## Colors

The root exposes the palette with readable names:

- **Canvas `#ffffff`** and **section grey `#f9f9fb`** (`--section-light`, the largest measured area): sections alternate between them.
- **Ink `#29363d`** (`--black`, `--light-1`): headlines and primary text (9,065 weighted characters).
- **Muted `#656b8a`** (`--foreground-light-2`): paragraphs and nav links; **`#8f96bd`** (`--foreground-light-3`): footer and captions.
- **Brand purple `#6363f1`** (`--brand-purple`): primary CTA fill, section kickers and the "Sign in" label; hover `#7777f3`. A light tint `--brand-3: #d8d9fa` is declared.
- **Night navy `#030527`**: the developer band (second-largest area), with `#0d102f` and `#13243a` variants; `--black-dark: #030628` is the label color on mint buttons.
- **Mint `#23f0c3`** (`--dark-accent`): the glowing "Read the docs" pill and highlights on the dark band.
- **On-dark text** `#c5cae8` (`--dark-2`) and `#878ca6` (`--dark-3`).
- **Code panel `#181b39`**; **violet `#d272ff`** appears in code highlighting.
- **Borders** `#e8eaed` (`--border-color`) on light surfaces and `#2b335a` (`--border-dark`) on dark.

## Typography

**Untitled Sans** (13,741 weighted characters; regular and medium files served from the Webflow CDN) sets every heading and paragraph, with **IBM Plex Mono** (601) for code.

- **Display**: 80px / 84px, weight 500, -5.6px (-7%), one of the tightest settings in this library.
- **Section titles**: 52px / 55.64px, weight 500, -2.6px.
- **Kickers**: 28px / 33.6px, weight 500, -1.4px, in brand purple ("The all-in-one solution", "Developer-first design").
- **Quotes**: 32px with -1.28px tracking for the testimonial text.
- **Body**: 19px / 30.4px, weight 400, -0.19px; 16px and 14px for UI.
- **Buttons and nav**: 16px / 19.2px, weight 500.
- **Labels**: 12px uppercase with +1.2px tracking ("POWERED BY WORKOS").

Only weights 400 and 500 appear. Every size above 12px is tracked negative, scaling from -1% at body size to -7% at display.

## Layout

The desktop page is 1280px wide and 8,569px tall. The root sets `--page-padding: 56px`, and content runs from x 56 to 1224. The hero and most sections use a two-column split (text column about 550px to 600px wide, illustration right). The logo grid reaches eight columns. Section padding is large (120px recorded on several sections; gaps of 96px and 128px), while components are compact (paddings of 26px, 16px, 12px and 22px). The page alternates white, `#f9f9fb` and one deep navy band.

## Elevation & Depth

WorkOS uses long, multi-layer shadows to make cards float:

- **Primary CTA**: five layers tinted with deep violet, from `rgba(23, 6, 100, 0.12) 0px 1.15891px 0.755676px 0px` up to `rgba(23, 6, 100, 0.035) 0px 24px 22px 0px`.
- **Code panel**: six layers of near-black reaching `rgba(3, 3, 6, 0.07) 0px 100px 80px 0px`.
- **Testimonial card**: six layers of `rgba(17, 7, 53, ...)` up to `0px 51px 78px`, plus a 1px inner top line.
- **Small controls**: `rgba(0, 0, 0, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.17) 0px 5px 10px -4px` (14 elements) and a skeuomorphic toggle shadow with a white inner highlight.
- **Mint pill**: a glow, `rgba(35, 240, 195, 0.7) 0px 0px 14px 0px`, with a 1px `rgb(25, 203, 164)` inset ring.

Illustrations add perspective (tilted sign-in card, isometric devices) on top of these shadows.

## Shapes

- **100px** (79 elements; `--um-cta-radius: 100px`): all CTAs and the "Sign in" button are pills.
- **50%** (49): icons and avatars.
- **4px** (41): small UI inside illustrations.
- **16px** (14) and **7px** (12): cards and controls; **8px** for product chips and testimonial cards.
- **18px**: the code panel; **24px** and a `46px 46px 0px 0px` top-rounded frame appear once each.

## Components

- **Primary CTA**: `#6363f1`, white Untitled Sans 16px / 19.2px weight 500, padding 12px 24px, 43px tall, 100px radius, violet layered shadow; hover `#7777f3`. Focus adds a 2px solid `rgba(99, 99, 241, 0.3)` outline.
- **Mint CTA (dark band)**: `#23f0c3`, `#030628` label, same size, mint glow.
- **Sign in**: transparent, `#6363f1` 14px label, 1px `#e8eaed` border, padding 9.5px 20px, 35px tall; hover turns the border purple.
- **Product chip**: `#f9f9fb`, 1px `#e7e8ec` border, 8px radius, icon tile plus label, 66px tall; hover `#f3f4f7` with a `#d3d5de` border.
- **Feature list item**: icon tile, 16px title, 14px muted description, two columns.
- **Code panel**: `#181b39`, 18px radius, language tabs (Node.js, Ruby, Python, Go, PHP, Java, .NET, cURL), IBM Plex Mono code.
- **Nav link**: `#656b8a` 16px weight 500; hover shifts to `#585d76` or `#656b8a`.
- **Footer**: `#f9f9fb`, `#8f96bd` 14px / 20px links in four columns, padding 66px 0 24px.

## Design System Architecture

No public WorkOS brand page was found (https://workos.com/brand returned HTTP 404). The site is built on Webflow (fonts and assets on `cdn.prod.website-files.com`, `webflow-icons` font face), and its de-facto system is a small set of 30 named root variables: `--brand-purple`, `--brand-3`, `--black`, `--black-dark`, `--section-light`, `--border-color`, `--border-dark`, `--dark-accent`, the `--foreground-light-2/3` and `--foreground-dark-2/3` text ramps, `--page-padding: 56px`, and a `--um-*` group (`--um-cta-radius: 100px`, `--um-input-border: #dddde3`, `--um-text-primary: #2b333b`) used by the embedded User Management demo. The stylesheet also declares Inter, Aeonik, Aeonik Fono and Feature Deck faces for campaign pages; only Untitled Sans and IBM Plex Mono render on the home page.

## Do's and Don'ts

- Do set headlines in Untitled Sans 500 with strong negative tracking (-5% to -7% at display sizes).
- Do open each section with a purple 28px kicker above a 52px title.
- Do make every CTA a 100px pill; purple on light, mint on the navy band.
- Do float cards with long, low-opacity, multi-layer shadows.
- Do alternate white and `#f9f9fb` sections and use one deep navy band for developer content.
- Don't use bold weights; 500 is the heaviest.
- Don't use square buttons or hard drop shadows.
- Don't use mint outside dark surfaces.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 drops from 80px / 84px to 41.73px / 43.8165px (-2.9211px), kickers from 28px to 20px / 24px (-1px), section titles from 52px to 32px, and body text from 19px / 30.4px to 16px / 24px (-0.16px). The "Get started" pill uses a 14px / 16.8px label. One header link stays visible and the extractor recorded no menu toggle. Up to three card columns were recorded, and content runs from x 26 to 362. The navy band and `#f9f9fb` sections keep their order. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. White and `#f9f9fb` sections, `#29363d` ink, `#656b8a` body text.
2. Untitled Sans 500 for display (80px / 84px, -5.6px) and section titles (52px / 55.64px, -2.6px); body 19px / 30.4px.
3. Purple `#6363f1` pill CTAs, 43px tall, with the violet layered shadow.
4. Two-column sections with a floating illustration and a purple kicker.
5. One `#030527` developer band with a mint glowing pill and an 18px-radius code panel.
6. Use the named root variables (`--brand-purple`, `--section-light`, `--border-color`) for any new component.
