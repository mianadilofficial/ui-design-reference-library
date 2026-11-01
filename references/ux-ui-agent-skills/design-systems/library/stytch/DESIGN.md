---
version: alpha
name: Stytch
category: "Developer Tools & IDEs"
description: "Stytch's site alternates a warm off-white #fbfaf9 page with near-black #1d1d1d bands, sets headlines in Booton Bold (76.8px hero at -2px, 40px section titles) and buttons in Chivo Mono 13px, uses a pale-blue #b2d6de primary button and #1d1d1d dark buttons at 4px radius, and a lime #e6fd13 highlight for nav hovers and announcements."
colors:
  canvas: "#fbfaf9"
  ink: "#1d1d1d"
  primary: "#b2d6de"
  on-primary: "#1d1d1d"
  primary-hover: "#9ac2cb"
  dark-hover: "#383838"
  surface: "#f2f0ee"
  ink-muted: "#525151"
  on-dark: "#fbfaf9"
  white: "#ffffff"
  hairline: "#cecece"
  highlight: "#e6fd13"
  code-bg: "#000000"
  code-ink: "#f8f8f2"
  code-green: "#00e0a1"
  link-blue: "#348cff"
typography:
  hero:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 76.8px
    fontWeight: 700
    lineHeight: 76.8px
    letterSpacing: "-2px"
  display:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
  display-mobile:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 30px
  heading:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 25px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  link:
    fontFamily: Booton, "Booton Fallback", BootonUncommon, "BootonUncommon Fallback", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  button:
    fontFamily: "\"Chivo Mono\", monospace"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 13px
  nav:
    fontFamily: "\"Chivo Mono\", \"Chivo Mono Fallback\""
    fontSize: 16px
    fontWeight: 400
rounded:
  button: 4px
  code: 6px
  card: 10px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 13px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px
    height: 39px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px
    height: 37px
  button-dark-hover:
    backgroundColor: "{colors.dark-hover}"
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px
    height: 39px
    border: "1px solid #cecece"
  button-outline-hover:
    borderColor: "{colors.ink}"
  announcement:
    backgroundColor: "{colors.highlight}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.button}"
    padding: 8px 12px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 40px
    height: 100px
  nav-link-hover:
    backgroundColor: "{colors.highlight}"
  code-card:
    backgroundColor: "{colors.code-bg}"
    textColor: "{colors.code-ink}"
    rounded: "{rounded.code}"
    padding: 13px 13px 13px 49.4px
    boxShadow: rgba(0, 0, 0, 0.5) 0px 8px 10px 0px
---

# Stytch

## Overview

Stytch (stytch.com, measured 2026-10 at 1280px; title "Stytch - A better way to build auth") sells authentication and identity infrastructure, and its site has an engineered, editorial tone: a warm off-white page, heavy geometric Booton headlines, small monospaced buttons and frequent near-black bands with code.

A lime announcement bar ("Stytch has joined Twilio to build the intelligent identity layer...") tops the 100px header, which holds the Stytch logo, Product, Solutions, Resources, Docs, Pricing, an outlined "Contact" and a dark "Log in". The hero is centred: "The identity platform for humans & AI agents" in Booton Bold 76.8px with -2px tracking, a sentence with bold phrases ("enterprise-ready and agent-ready"), and two buttons: pale-blue "Start building for free" and outlined "Talk to an expert", above a row of grey customer logos (Replit, Zapier, Calendly, Groq, Cisco and more).

The rest of the capture alternates light and dark bands: "Scales from your first user to Fortune 100 customers" (a grid of outlined feature cells, each with a small UI mock), a dark "Teams powering AI agents with Stytch" band with three black customer cards, "The Stytch difference" (alternating screenshots and bullet lists), a dark "Your next auth feature – just a PUT request away" band with a dithered pixel-noise background and a black code card, "Turnkey multi-tenancy" over a patterned backdrop, testimonials, a dark "Build natively in the stack of your choice" logo strip, resources, "Expert support at every step", and a huge "Get started with Stytch" (102.4px) above the footer. Illustrations are UI mocks and dithered noise patterns; there is no photography.

## Colors

- **Canvas `#fbfaf9`**: the off-white page, covering by far the largest measured area.
- **Ink `#1d1d1d`**: headings and body (3,940 weighted characters), the fill of dark bands and of the "Log in" button. Dark buttons hover to `#383838`.
- **Primary `#b2d6de`**: the pale-blue fill of "Start building for free" and "Watch demo", with `#1d1d1d` labels; hover `#9ac2cb`.
- **Surface `#f2f0ee`**: feature cells and panels on the light page.
- **Muted text `#525151`**; **on-dark text `#fbfaf9`**.
- **Hairline `#cecece`**: the 1px rules of feature grids (76 bordered elements) and outlined buttons.
- **Highlight `#e6fd13`**: lime background of the announcement bar and of header links on hover.
- **Code**: `#000000` code cards with `#f8f8f2` text, `#00e0a1` green accents and `#348cff` blue.

## Typography

- **Booton** (4,544 weighted characters; loaded at 400, 500, 600 and 700, with `BootonUncommon` in the stack) for all headings and prose.
  - Hero: 76.8px / 76.8px, weight 700, -2px (recorded probe).
  - Closing headline: 102.4px with -6px tracking ("Get started with Stytch").
  - Section titles: 40px / 40px, weight 700.
  - Card group titles: 25px / 30px; feature titles: 20px / 24px, both 700.
  - Body: 18px / 28.8px, weight 400; announcement and small links 14px / 21px at 600.
  - A computed weight of 469 appears on 1,197 characters of secondary text.
- **Chivo Mono** (410 characters, variable 100 to 900) for every button, the header navigation (13px / 13px) and small labels; 13px is the most-read size on the page (1,607 weighted characters).

The contrast between a heavy geometric sans for headlines and a small monospace for actions is the core of the typographic identity. Headlines are set tight, and large sizes take strong negative tracking.

## Layout

The desktop page is 1280px wide and 11,076px tall. Content sits between x 112 and 1200 (x 128 to 1152 in most bands). The hero is centred; feature sections use two-column splits or a six-column grid of outlined cells joined by shared `#cecece` borders (cells round only their outer corners, measured as `4px 0px 0px`, `0px 4px 0px 0px` and so on). Full-width dark bands break the page roughly every screen. Spacing is generous: paddings of 48px (61 elements) and 32px (47), gaps of 8px (120), 16px, 32px and 40px, with 80px to 96px section padding.

## Elevation & Depth

The page is flat except for code. Only one box shadow is measured: the black code card's `rgba(0, 0, 0, 0.5) 0px 8px 10px 0px`. Elsewhere depth comes from the light/dark band rhythm, `#cecece` hairlines and `#f2f0ee` panels, and from dithered black-and-white noise textures behind the dark code band and the multi-tenancy section.

## Shapes

- **4px**: buttons, the announcement bar and the outer corners of grid cells (21 elements, plus 44 single-corner 4px radii).
- **10px**: cards and screenshots (10 elements).
- **6px**: the code card.

Nothing on the page is pill-shaped; corners stay small and consistent.

## Components

- **Primary button**: `#b2d6de`, `#1d1d1d` Chivo Mono 13px / 13px label, padding 12px, 39px tall, 4px radius; hover `#9ac2cb`.
- **Dark button**: `#1d1d1d`, `#fbfaf9` label, 37px tall, 4px radius; hover `#383838` ("Log in").
- **Outline button**: transparent, 1px `#cecece` border, `#1d1d1d` label, 39px tall; hover darkens the border to `#1d1d1d` ("Contact", "Talk to an expert").
- **Announcement bar**: `#e6fd13`, Booton 14px / 21px weight 600, padding 8px 12px, 4px radius.
- **Header**: `#fbfaf9`, 100px tall, padding 0 40px, Chivo Mono 13px links; hover fills the link with lime `#e6fd13`.
- **Feature cell**: `#f2f0ee` or canvas fill inside a `#cecece` grid, 20px Booton Bold title, short description, small UI mock.
- **Code card**: black, 6px radius, padding 13px 13px 13px 49.4px (room for line numbers), `#f8f8f2` code with green and blue tokens, heavy drop shadow.
- **Customer card (dark band)**: black tiles with white logos and a one-line result.

## Design System Architecture

No public Stytch brand or marketing design-system page was found: https://stytch.com/brand returned HTTP 404, and the Stytch GitHub organisation (https://github.com/stytchauth) lists SDKs and quickstart examples but no design-token repository. The marketing page exposes only two root custom properties, so the de-facto system lives in utility classes (the stylesheet contains Tailwind `--tw-*` shadow composition) and in component variables such as `--button-shadow-primary`, `--button-shadow-neutral` and `--accordion-border-color`. Fonts declared in the CSS include Booton, BootonUncommon, Chivo Mono, Inter, `paperMono` and Whitney-Book; only Booton and Chivo Mono render on the home page.

## Do's and Don'ts

- Do pair Booton Bold headlines with Chivo Mono 13px buttons and nav.
- Do alternate `#fbfaf9` sections with full-width `#1d1d1d` bands.
- Do use pale blue `#b2d6de` for the main call to action and `#1d1d1d` for account actions.
- Do keep corners at 4px for controls and 10px for cards.
- Do use lime `#e6fd13` sparingly: announcements and nav hover only.
- Don't add shadows to cards; reserve the drop shadow for code.
- Don't round buttons into pills.
- Don't use photography; use UI mocks, code and dithered textures.

## Responsive Behavior

Measured at a 390px mobile viewport: the hero drops from 76.8px to 50px, section titles from 40px / 40px to 30px / 30px, card group titles from 25px to 18px / 21.6px, feature titles to 16px, and body text from 18px / 28.8px to 15px / 24px. The header is 72px tall with a "Menu" toggle and two header links visible ("Log in" and the menu). The lime announcement becomes the first tappable element (13px weight 600). Content runs from about x 33 to 374, and the light/dark band order is kept. The most-read mobile size is 13px. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Set the canvas to `#fbfaf9`, text and dark bands to `#1d1d1d`.
2. Hero in Booton 700 at 76.8px with -2px tracking; sections at 40px; body 18px / 28.8px.
3. Use Chivo Mono 13px for every button and nav item; buttons 37px to 39px tall with 4px radius.
4. Primary actions pale blue `#b2d6de`, account actions dark, secondary actions outlined `#cecece`.
5. Build feature grids from `#cecece` hairline cells with only outer corners rounded.
6. Insert a dark band with a black code card every few sections.
