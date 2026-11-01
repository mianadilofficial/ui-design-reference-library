---
version: alpha
name: Cosmos
category: "Design & Creative Tools"
description: "Cosmos visual-discovery site: a single custom family, cosmosOracle, with 72px/700 headlines at -2.88px and 20px/500 text at -2% tracking, near-black #0d0d0d ink and pill buttons on white and warm #f7f5f3 bands, warm greys #6e6a69 and #9a9796, 12px–16px cards and soft 5% shadows."
colors:
  canvas: "#ffffff"
  page-body: "#f7f5f3"
  ink: "#0d0d0d"
  primary: "#0d0d0d"
  on-primary: "#ffffff"
  primary-hover: "#232323"
  surface-warm: "#f2f1f0"
  ink-secondary: "#6e6a69"
  ink-tertiary: "#9a9796"
  ink-ghost: "#d0cdcd"
  hairline: "#8484841f"
typography:
  display:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 72px
    letterSpacing: "-2.88px"
  display-mobile:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 32px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1.92px"
  subheading:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 29.9px
    letterSpacing: "-1.04px"
  body:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 23px
    letterSpacing: "-2%"
  button:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.32px"
  nav:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.28125px"
  input:
    fontFamily: cosmosOracle, "cosmosOracle Fallback"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 23px
    letterSpacing: "-2%"
rounded:
  xs: 3px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 16px 24px
    height: 48px
  button-ghost:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 16px 24px
    height: 48px
  nav:
    textColor: "{colors.ink-secondary}"
    padding: 24px 32px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  search-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 24px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    padding: 80px 72px
---

## Overview

Cosmos (https://www.cosmos.so/) is a visual discovery and collection app — a place to save and organise images, with search by colour, collections and a shop. Its home page is calm, warm and image-led: the hero sits on a warm off-white band with dozens of small product photos (lamps, objects) floating and tilted around a centered headline, "Find your next lamp with character", with a small lamp thumbnail inline after the last word. Below the headline is a wide pill search field ("Search for lamps") with a colourful circular button, a black "Join Cosmos for free" pill, a scroll-down chevron, and a "Get the app" QR card at the bottom right. The centered "COSMOS" wordmark sits in the header between Explore / Sequence / Shop on the left and "Log in" / black "Sign up" on the right.

The page then runs: "Build your world, your way" with a carousel of grey feature cards (Search by color with a colour-code chip, Organize your inspiration, Hide AI, Find similar); "Shop from brands like" — a stacked list of brand names (Jacques Marie Mage in black with a logo, the rest — Birkenstock, Posteritati, Snow Peak, Oliver Peoples, LOEWE, Maison Margiela — in pale grey) beside editorial fashion portraits; "Find what others are saving" with a row of creator cards (collage cover, round avatar, name, handle, black "Follow" pill); a greyscale logo grid "Used by the world's leading creative teams, studios, and students" (Nike, Aesop, Apple, Pentagram, Spotify, LOEWE, Chanel…); and a warm footer with "Discover what's next", sign-up buttons, link columns and a QR card.

The voice is minimal and lowercase-friendly, with very little copy per section.

## Colors

A neutral, warm palette with no brand hue; colour comes from the images.

- **canvas #ffffff** — about half the capture: the white middle sections.
- **page-body #f7f5f3** — the warm off-white of the hero, cards and footer (the body background and largest area by DOM).
- **surface-warm #f2f1f0** — a slightly deeper warm grey for card wells.
- **ink #0d0d0d** — headlines and the active brand name; also **primary**, the fill of every main button, with **on-primary #ffffff**. Hover lightens it to **primary-hover #232323** (`--light-hover-primary`).
- **ink-secondary #6e6a69** — nav text and the "Log in" ghost button.
- **ink-tertiary #9a9796** — captions such as "Used by the world's leading creative teams…".
- **ink-ghost #d0cdcd** — the pale inactive brand names.
- **hairline #8484841f** — a 12% grey border, the most common border colour (28 elements).

The CSS also defines a dark theme through `--dark-*` variables (for example `--dark-hover-primary: #e8e6e4`) and a `--color-blue-300: #2965f6`, but the measured home page uses the light theme only.

## Typography

One family, **cosmosOracle** (with a `cosmosOracle Fallback` metric face), loaded in 400, 500 and 700. The CSS also loads Geist Mono and basisMono for monospace text. Tracking is negative at every size, mostly −2%.

- **display** — 72px / 700 / 72px, −2.88px (−4%). Line height equals size.
- **heading** — 48px / 500 / 48px, −1.92px for section heads ("Build your world, your way").
- **subheading** — 26px / 500 / 29.9px, −1.04px for card titles ("Search by color").
- **body** — 20px / 500 / 23px, −2%, the most frequent size; 16px and 14px at −2% follow.
- **button** — 16px / 700 / 24px, −0.32px; **button-secondary** — 15px / 500 / 22px, −0.28125px for header buttons.
- **nav** — 16px / 400 / 24px; **input** — 20px / 400 / 23px, −2%.

The CSS names text roles too: `--text-body: 1rem`, `--text-caption: .75rem`, `--text-body-caption: .75rem`. cosmosOracle is a custom, self-hosted face; to approximate it, use a neutral grotesque at 500/700 with −2% to −4% tracking and declare the substitute.

## Layout

At 1280px the page is only 3,508px tall — a short, focused landing page. The header has 24px 32px padding and a centered wordmark. Sections are left-aligned with large headings and generous space, except the centered hero. Feature cards run in a horizontal carousel with a round arrow button; creator cards sit five across; the logo grid has two rows.

Gaps are tight inside components (4px, 2px) and 24px between cards, with 80px and 128px between sections. Paddings: 16px (most common), 32px, 20px. The footer uses 80px 72px padding.

## Elevation & Depth

Soft and light. The most common shadow, on 18 elements, is `rgba(0, 0, 0, 0.05) 0px 1px 8px 0px` (inside a Tailwind-style layered value with transparent ring layers). Three elements use `rgba(0, 0, 0, 0.02) 0px 2px 12px 0px, rgba(0, 0, 0, 0.1) 0px 4px 16px 0px`, two use `rgba(0, 0, 0, 0.05) 0px 3px 12px 0px`, and a glassy inset highlight (`rgba(255, 255, 255, 0.7) 0px 1px 1.5px 0px inset`) also appears. The CSS defines blur tokens (`--blur-lg: 16px`, `--blur-partner: 22px`), and translucent white fills (#ffffffe6, #ffffff66) are measured.

## Shapes

Pills dominate: 59 elements compute a full pill radius (3.35544e+07px) — all buttons, the search bar and chips. Cards use 16px (20 elements) and 12px (8); 8px and 3px appear on small images and chips; one panel has `24px 24px 0 0`. The CSS includes `--radius-4xl: 2rem`. Avatars are circles.

## Components

- **Primary button** — #0d0d0d pill, white cosmosOracle 16px/700, 16px 24px padding, 56px tall ("Join Cosmos for free"); hover #232323.
- **Header button** — #0d0d0d pill, white 15px/500, 48px tall ("Sign up"); hover #232323.
- **Ghost button** — no fill, #6e6a69 15px/500 text, pill, 48px ("Log in").
- **Search bar** — a wide white pill with a search icon, a 20px/400 input and a round multicolour button at its right end.
- **Feature card** — #f7f5f3 or #f2f1f0, 12px–16px radius, an illustration (a colour chip, a saved-to-collection pill, a show/blur/hide toggle), then a 26px/500 title and a grey caption.
- **Creator card** — white card with a three-image collage, round avatar, name, handle and a full-width black "Follow" pill.
- **Brand list** — stacked large names; the current one in #0d0d0d with a logo, the others in #d0cdcd.
- **QR card** — white rounded card, "Get the app" with store icons and a QR code, with a soft shadow.
- **Footer** — #f7f5f3, 80px 72px padding, a 72px/700 "Discover what's next", black "Sign up" and grey "Log in" pills, link columns (Follow us, Info) and the QR card.

## Design System Architecture

No public Cosmos brand or design-system page was found: https://www.cosmos.so/brand resolves to a user profile ("David Sherry (@brand) / Cosmos"), not brand guidelines. The de-facto system is in the shipped CSS, a Tailwind-style build processed with Lightning CSS: semantic light/dark tokens (`--light-hover-primary`, `--dark-hover-primary`, `--dark-shadow-primary`, `--light-background-cell`, `--background-color-primary: lab(100% 0 0)`, `--color-text-secondary` resolved through `--lightningcss-light` / `--lightningcss-dark`), text-role sizes (`--text-body`, `--text-caption`), `--radius-4xl`, blur tokens and Tailwind mask utilities. Colours are authored in `lab()`.

## Do's and Don'ts

**Do**
- Keep the interface neutral — warm off-white, white and near-black — and let photographs carry colour.
- Use one family (cosmosOracle or a declared substitute) with negative tracking at every size.
- Make every button and the search field a pill; use #0d0d0d for primary actions.
- Use 12px–16px rounded cards on warm grey with 5% soft shadows.
- Keep copy short and sections sparse.

**Don't**
- Don't add a brand accent colour to the UI.
- Don't use pure black; ink is #0d0d0d.
- Don't use hard or dark shadows.
- Don't square off buttons.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the h1 at 32px / 700 / 32px with −1.28px tracking (72px on desktop), the h2 at 32px / 500 / 32px with −1.28px (48px on desktop), 16px and 20px as the most frequent text sizes, and 2 visible header links with a menu toggle labelled "Menu" (7 on desktop). The stylesheet's media queries include `min-width 640px`, `768px`, `1024px`, `1280px`, `1536px` and `max-width 720px`. Other mobile behaviour was not measured.

## Iteration Guide

1. Set the hero and footer on #f7f5f3 and the middle on #ffffff; ink #0d0d0d.
2. Load a single family at 400/500/700 and apply −2% tracking to text, −4% to the 72px h1.
3. Hero: centered 72px/700/72px headline, floating tilted product photos, a white pill search bar and a #0d0d0d pill button (16px/700, 56px).
4. Section heads at 48px/500/48px, left-aligned; card titles at 26px/500.
5. Cards: warm grey, 12px–16px radius, `rgba(0,0,0,0.05) 0 1px 8px` shadow.
6. Footer: #f7f5f3, 80px 72px padding, a 72px statement, pills and a QR card.
7. Compare with https://www.cosmos.so/ at 1280px and 390px.
