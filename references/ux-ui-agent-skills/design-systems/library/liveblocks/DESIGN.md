---
version: alpha
name: Liveblocks
category: "Developer Tools & IDEs"
description: "Liveblocks' marketing site is a black #000000 page with warm-grey #918d8d body text, Suisse Intl (suisse 400/500) headlines at 60px/66px with -1.2px tracking, white #ffffff 8px-radius CTAs with black labels, 4px-radius panels outlined by a 1px #272626 ring, and light product-mock cards (#f9fbfd, #fefefe) set into the dark page."
colors:
  canvas: "#000000"
  ink: "#918d8d"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-soft: "#b7b4b4"
  ink-subtlest: "#635f5f"
  heading-muted: "#646060"
  hairline: "#fdfcfc29"
  ring: "#272626"
  focus: "#8f6cef"
  card-light: "#f9fbfd"
  card-white: "#fefefe"
  card-dark: "#21222b"
  accent-green: "#6cefce"
typography:
  display:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 66px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 39.6px
    letterSpacing: "-0.54px"
  heading:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 52px
    fontWeight: 500
    lineHeight: 57.2px
    letterSpacing: "-1.04px"
  subheading:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: 0.064px
  body:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27.5px
    letterSpacing: 0.08px
  nav:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-secondary:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  badge:
    fontFamily: suisse, "suisse Fallback", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif
    fontSize: 11.008px
    fontWeight: 500
    lineHeight: 16.512px
rounded:
  panel: 4px
  sm: 6px
  md: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 14px
    height: 36px
  announcement-pill:
    textColor: "{colors.ink-soft}"
    typography: "{typography.badge}"
    rounded: "{rounded.pill}"
    padding: 4px 4px 4px 12px
    borderColor: "{colors.hairline}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 2px 12px
  panel:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.panel}"
    boxShadow: rgb(39, 38, 38) 0px 0px 0px 1px
  product-card:
    backgroundColor: "{colors.card-light}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.md}"
    padding: 28px
  focus-ring:
    boxShadow: rgb(0, 0, 0) 0px 0px 0px 2px, rgb(143, 108, 239) 0px 0px 0px 4px
  footer:
    textColor: "{colors.primary}"
---

# Liveblocks

## Overview

Liveblocks (liveblocks.io, measured 2026-10 at 1280px; title "Liveblocks | Realtime and sync for the agentic web") sells realtime collaboration infrastructure to developers, and its marketing page is a quiet black canvas where the product's own interfaces provide the color. The header is 80px tall with the liveblocks logo, Product, Use cases, Solutions, Resources, Docs and Pricing, plus "Sign in" and a small white "Get started" button.

The hero centres a thin announcement pill ("New · Introducing Liveblocks Sync"), the two-line headline "Realtime sync for collaborative apps" in white Suisse 60px, a grey paragraph, and a white "Get started for free" button beside an "Install with AI" option. A dark, glowing 3D object with carousel dots sits under the hero, followed by "Trusted by leading engineering, product, and design teams" and a grey logo wall (Vercel, Typeform, Magnific, Resend, PostHog, Pylon, Dropbox, Cisco, Magic Patterns, Mixpanel).

The rest of the capture alternates large two-tone statements ("Unlock the secret sauce behind world-class products. In just a few lines of code." with the second sentence in dim grey) and outlined grids of features: a horizontal strip of product mock cards ("AI companion like Microsoft Copilot", "Annotations like Google Docs", "Inbox like Linear"), a four-cell grid of platform features with line-art icons, "The building blocks for agentic, multiplayer apps" with Sync, Comments and Notifications, a live-cursors code demo ("First-class developer experience"), a Magic Patterns testimonial, a giant "99.99% Uptime" figure, and the closing "Turn your product into the space where people and AI collaborate" with two buttons. Copy is calm, precise and benefit-led, with key phrases bolded in white inside grey paragraphs.

## Colors

- **Canvas `#000000`**: every band is pure black.
- **Ink `#918d8d`** (`--lb-marketing-color-neutral-300`): a warm grey, the most-read text color (2,212 weighted characters), used for paragraphs. White `#ffffff` (1,124) is reserved for headlines and emphasised phrases inside paragraphs.
- **Soft grey `#b7b4b4`** (`--lb-marketing-color-neutral-400`): the announcement pill text and secondary labels.
- **Subtlest `#635f5f`** (`--color-marketing-subtlest`) and **`#646060`**: the dim second half of the two-tone headlines.
- **Primary `#ffffff`**: CTAs are white with a black label; there is no chromatic brand CTA.
- **Hairlines**: `#fdfcfc29` on the pill border; the variable `--color-marketing-divider-subtle` declares `#fdfcfc1f`. Panels use a 1px `rgb(39, 38, 38)` ring (`#272626`).
- **Focus `#8f6cef`** (`--lb-marketing-color-purple-400`) as the outer ring of the focus box shadow.
- **Product mock surfaces**: `#f9fbfd`, `#fefefe` and `#21222b` are the backgrounds of the three use-case cards, with further light surfaces (`#f3f3f3`, `#ebecf0`, `#f6ece2`).
- **Product accents**: `#6cefce` (`--lb-marketing-color-green-400`) appears in text; the variables assign a color per product, for example `--color-marketing-surface-product-notifications: #6cefc3`, `--color-marketing-surface-product-multiplayer: #6c79ef`, `--lb-marketing-color-comments-500: #ec9e51`.

## Typography

The page is set in **Suisse Intl**, served as `SuisseIntl_Regular_WebS` and `SuisseIntl_Medium_WebS` under the family name `suisse` (3,980 weighted characters), with JetBrains Mono for code. Only two weights are used: 400 and 500.

- **Display**: suisse 60px / 66px, weight 500, letter-spacing -1.2px (-2%).
- **Statement heading**: 52px / 57.2px, weight 500, -1.04px.
- **Section titles**: 32px with -0.32px, 48px for "Magic happens when humans and AI collaborate".
- **Body lead**: 20px / 27.5px, weight 400, +0.08px.
- **Card titles and body**: 16px / 22px, weight 500 for titles and 400 for text, +0.064px; 16px is the most-read size.
- **Buttons**: 16px / 24px weight 500 (hero), 14px / 20px weight 500 (header).
- **Announcement pill**: 11.008px / 16.512px, weight 500.

Large type is tracked tight (-2%) and small type slightly open (+0.4%). Where Suisse Intl is unavailable, use the site's own fallback stack: -apple-system, system-ui, Segoe UI, Roboto and Helvetica Neue.

## Layout

The desktop page is 1280px wide and 9,321px tall. The hero and statements are centred; feature sections use a narrower left-aligned column (content x 261 to 1007) with two-column panels below. The use-case card strip bleeds off both edges of the viewport. Feature grids are built from outlined panels with 28px padding (62 elements) and 8px gaps (146 elements). Other measured paddings: 40px, 6px, 16px and 12px. Vertical rhythm is generous: long black gaps separate each block, which the capture shows clearly.

## Elevation & Depth

Depth is drawn with lines rather than shadows. Panels carry a 1px ring, `rgb(39, 38, 38) 0px 0px 0px 1px` (18 elements), so feature grids read as thin-ruled tables on black. One element has a large inner glow, `rgba(255, 255, 255, 0.6) 0px 0px 76.8px 0px inset`. The root declares an elevation scale for floating UI (`--lb-marketing-shadow-elevation-floating`, a four-layer shadow starting `0px 2.77px 2.21px 0px #00000015`), used by product mock pop-overs. The hero's 3D object and the bright product cards provide the only strong contrast.

## Shapes

- **4px** is the dominant radius (73 elements): outlined panels and feature grids (`--radius-sm: .25rem`).
- **8px** on the hero CTA and the product mock cards (`--radius-lg: .5rem`).
- **6px** on the header CTA and nav links (`--radius-md: .375rem`).
- **Pill** (computed 3.35544e+07px, 12 elements) on the announcement badge and small tags.

## Components

- **Primary CTA**: white `#ffffff`, black suisse 16px / 24px weight 500 label, 44px tall, padding 0 16px, 8px radius. Same style for "Read the docs".
- **Header CTA**: white, 14px / 20px label, 36px tall, padding 0 14px, 6px radius.
- **Announcement pill**: transparent, 1px `#fdfcfc29` border, pill radius, padding 4px 4px 4px 12px, an inner "New" chip and `#b7b4b4` 11px text.
- **Nav link**: white 16px, padding 2px 12px, 6px radius hover area.
- **Feature panel**: black with a 1px `#272626` ring, 4px radius, 28px padding, white 16px title and grey description, line icon above.
- **Product mock card**: light surface (`#f9fbfd`, `#fefefe`) or dark (`#21222b`), 8px radius, 28px padding, label pair such as "Annotations / like Google Docs".
- **Focus**: `rgb(0, 0, 0) 0px 0px 0px 2px, rgb(143, 108, 239) 0px 0px 0px 4px`, a black gap then a purple ring.
- **Footer**: white column headings (Products, Platform, Solutions, Use cases, Technologies, Resources, Company) and grey links, logo top right.

## Design System Architecture

There is no public marketing brand page (https://liveblocks.io/brand returned HTTP 404). The product UI kit is open source: https://github.com/liveblocks/liveblocks/blob/main/packages/liveblocks-react-ui/src/styles/index.css defines the `--lb-*` theme variables (`--lb-radius: 0.5em`, `--lb-spacing: 1em`, `--lb-accent`, `--lb-background`, `--lb-foreground`, `--lb-elevation-shadow`, `--lb-transition-duration: 0.1s`) with dark variants under `styles/dark/`. The marketing site layers its own namespace on the root: `--lb-marketing-color-{hue}-{step}` scales (neutral, purple, green, yellow, comments, notifications, multiplayer, ai-copilots), alpha variants (`--lb-marketing-color-green-alpha-400`), role variables (`--color-marketing-subtlest`, `--color-marketing-divider-subtle`, `--color-marketing-surface-product-*`) and elevation tokens, alongside Tailwind's `--radius-*` and `--text-*` scale.

## Do's and Don'ts

- Do keep the canvas pure black and body text warm grey `#918d8d`; use white only for headlines, CTAs and emphasised phrases.
- Do write two-tone statements: a white first sentence and a dim `#635f5f` second.
- Do outline panels with a 1px `#272626` ring and 4px corners instead of filling them.
- Do use white CTAs with black labels; save chromatic color for product illustrations.
- Do track large Suisse headlines at -2%.
- Don't introduce a colored brand button.
- Don't use drop shadows on marketing panels; reserve elevation for floating product UI.
- Don't use weights other than 400 and 500.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 drops from 60px / 66px to 36px / 39.6px with -0.54px tracking, the statement h2 from 52px to 30px / 36px, and body text from 20px / 27.5px to 16px / 22px. The first CTA becomes the 14px / 20px, 6px-radius variant. The header is 64px tall with an "Open menu" toggle and one header link visible. Content runs from x 16 to 374, and the extractor recorded two columns in the feature bands. The "99.99% Uptime" figure measures 36px. The most-read mobile size is 14px. Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Black canvas, warm-grey `#918d8d` body, white headlines in suisse 500 with -2% tracking.
2. Centre the hero: announcement pill, 60px / 66px headline, 20px lead, white 44px CTA with 8px radius.
3. Build features as 1px-ringed black panels with 4px corners and 28px padding on 8px gaps.
4. Bring in color only through product mock cards and illustrations.
5. Use the `--lb-marketing-*` scales for any new accent, and the purple focus ring for keyboard states.
6. Keep long vertical spacing between blocks; the page relies on emptiness.
