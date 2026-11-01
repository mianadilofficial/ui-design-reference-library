---
version: alpha
name: Apple Music
category: "Music & Audio"
description: "Apple Music marketing page (apple.com/apple-music): Apple's light gallery system — #f5f5f7 sections, #ffffff cards with an 18px radius, #1d1d1f text — set in SF Pro Display (128px/600 hero, -0.256px tracking) and SF Pro Text (17px/25px body, -0.374px). The action color is Apple Music red #fa243c on 980px pill buttons (11px 21px, 44px tall); the hero sits on a magenta-to-red gradient and links are #0066cc. The music.apple.com web player uses #d60017."

colors:
  primary: "#fa243c"
  primary-hover-text: "#febdc5"
  red-gradient-pink: "#ff4dc3"
  red-gradient-red: "#fa233b"
  red-gradient-deep: "#c00020"
  red-gradient-plum: "#591962"
  red-section: "#d6143a"
  player-red: "#d60017"
  canvas: "#f5f5f7"
  surface: "#ffffff"
  surface-secondary: "#fafafc"
  surface-quaternary: "#e8e8ed"
  surface-dark: "#1d1d1f"
  immersive-dark: "#010b13"
  black: "#000000"
  ink: "#1d1d1f"
  ink-secondary: "#6e6e73"
  ink-tertiary: "#86868b"
  ink-nav: "#000000cc"
  ink-footer: "#0000008f"
  ink-footer-strong: "#000000b8"
  ink-on-dark: "#f5f5f7"
  ink-on-dark-muted: "#ffffffcc"
  link: "#0066cc"
  link-on-dark: "#2997ff"
  focus: "#0071e3"
  border: "#d2d2d7"
  paddle: "#424245b5"
  button-dark-hover: "#272729"

typography:
  hero:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 128px
    fontWeight: 600
    lineHeight: 128px
    letterSpacing: -0.256px
  headline-80:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 80px
    fontWeight: 600
    lineHeight: 84px
    letterSpacing: -1.2px
  headline-72:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 72px
    fontWeight: 600
    lineHeight: 72px
    letterSpacing: -0.648px
  headline-56:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 56px
    letterSpacing: -0.28px
  headline-48:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.0077px
    letterSpacing: -0.144px
  headline-40:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
  lockup:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 34px
    fontWeight: 600
    lineHeight: 50px
    letterSpacing: -0.374px
  feature-title:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: 0.128px
  card-title:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: 0.196px
  hero-intro:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: 0.216px
  localnav-title:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 21px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.231px
  body:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: -0.374px
  button:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 17px
    fontWeight: 600
    lineHeight: 20.0002px
    letterSpacing: -0.374px
  link-small:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.0003px
    letterSpacing: -0.224px
  button-small:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18.0008px
    letterSpacing: -0.224px
  globalnav:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
    letterSpacing: -0.12px
  footnote:
    fontFamily: "\"SF Pro Text\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.0005px
    letterSpacing: -0.12px
  hero-mobile:
    fontFamily: "\"SF Pro Display\", \"SF Pro Icons\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: -0.144px

rounded:
  tile-small: 8px
  control: 10px
  locale-select: 11px
  card: 18px
  gallery: 30px
  large: 36px
  pill: 980px
  circle: 50%

spacing:
  xxs: 4px
  xs: 8px
  sm: 10px
  md: 20px
  lg: 24px
  xl: 30px
  xxl: 40px
  section: 80px
  globalnav-height: 44px
  localnav-height: 52px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 21px
    height: 44px
  button-primary-hover:
    textColor: "{colors.primary-hover-text}"
  button-hero:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 17px 30px
    height: 56px
  button-hero-hover:
    opacity: 0.8
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.surface}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 8px 15px
    height: 36px
  button-dark:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.surface}"
    rounded: "{rounded.tile-small}"
    height: 36px
  button-dark-hover:
    backgroundColor: "{colors.button-dark-hover}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link-small}"
  link-large:
    textColor: "{colors.link}"
    typography: "{typography.localnav-title}"
  offer-card:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    width: 405px
    height: 319px
  gallery-paddle:
    backgroundColor: "{colors.paddle}"
    rounded: "{rounded.circle}"
    size: 36px
  globalnav:
    textColor: "{colors.ink-nav}"
    typography: "{typography.globalnav}"
    height: 44px
  localnav:
    textColor: "{colors.black}"
    typography: "{typography.localnav-title}"
    height: 52px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    typography: "{typography.footnote}"
  player-button:
    backgroundColor: "{colors.player-red}"
    textColor: "{colors.surface}"
    rounded: 1000px
    padding: 0px 16px
    height: 36px
---

## Overview

The Apple Music page is an apple.com product page, so it inherits Apple's marketing system: a 44px global nav, a
52px sticky local nav ("Apple Music" + a small red "Try it free*" pill), alternating light-grey and white bands, and
huge SF Pro Display headlines. What makes it Apple Music is color: the hero is a full-bleed glowing gradient that runs
from plum through crimson to hot pink and orange, and every action is Apple Music red `#fa243c`.

The hero centers the  Music lockup, a two-line 128px headline "For the love / of music." in white, a 24px intro paragraph
in 80% white, and a white pill "Try it free*" (56px tall). Below it, a `#f5f5f7` band titled "Start listening for free."
holds a horizontal carousel of white 18px-radius offer cards (New Subscriber, Family Plan, New Devices, Student Plan),
each with a red-gradient icon label, a 28px title, grey copy and a red pill CTA; round grey paddles page the carousel.
Then a big immersive gallery: rounded 30px+ media tiles with an artist photograph receding through framed layers,
captioned "Listening Experience / Music at its most immersive." in 80px white type.

Density is low, imagery is product-photography grade, and copy is short declaratives with footnote superscripts
("Try it free*", "Spatial Audio.²").

**Key Characteristics:**
- Canvas `#f5f5f7` bands alternating with `#ffffff`; text `#1d1d1f`
- SF Pro Display for 21px and up, SF Pro Text below; weight 600 for every headline
- Negative tracking on big type (-0.256px at 128px, -1.2px at 80px), slight positive tracking at 21–32px
- Apple Music red `#fa243c` pill CTAs, radius 980px, padding 11px 21px, 44px tall
- Hover on red pills tints the label to `#febdc5`; the white hero pill fades to 0.8 opacity
- White offer cards, 18px radius, no shadow
- Links `#0066cc`; focus color `#0071e3`

## Colors

### Brand red family
- **Primary** `#fa243c`: every "Try it free*" pill on the marketing page.
- **Primary hover text** `#febdc5`: the label color of a hovered red pill (measured).
- **Gradient stops** `#ff4dc3` → `#fa233b` → `#c00020` → `#591962`: the gradient clipped into the offer-card labels
  (`linear-gradient(90deg, rgb(255, 77, 195) -10%, rgb(250, 35, 59) 10%, rgb(192, 0, 32) 80%, rgb(89, 25, 98) 120%)`).
- **Red section** `#d6143a`: a large red background area measured on the page.
- **Player red** `#d60017`: the music.apple.com web player's "Sign In" and "Continue" buttons.

### Surfaces
- **Canvas** `#f5f5f7` (`--sk-fill-tertiary`): the largest background area; section bands and footer.
- **Surface** `#ffffff` (`--sk-body-background-color`): body, offer cards, alternating bands.
- **Surface secondary** `#fafafc` (`--sk-fill-secondary`, `--r-globalnav-background-opened`).
- **Surface quaternary** `#e8e8ed` (`--sk-fill-gray-quaternary`): another section band.
- **Surface dark** `#1d1d1f`, **immersive dark** `#010b13`, **black** `#000000`: dark media sections.

### Text
- **Ink** `#1d1d1f` (`--sk-body-text-color`, `--sk-headline-text-color`).
- **Ink secondary** `#6e6e73` (`--sk-glyph-gray-secondary`), **ink tertiary** `#86868b` (`--sk-glyph-gray-tertiary`).
- **Ink nav** `#000000cc`: global nav links.
- **Ink footer** `#0000008f` and **ink footer strong** `#000000b8`.
- **On dark** `#f5f5f7` and `#ffffffcc` (hero intro).

### Links, focus, lines
- **Link** `#0066cc` (`--sk-body-link-color`); **link on dark** `#2997ff`.
- **Focus** `#0071e3` (`--sk-focus-color`, with `--sk-focus-offset: 1px`).
- **Border** `#d2d2d7` (`--sk-fill-gray-tertiary`).
- **Paddle** `#424245b5` (rgba(66,66,69,0.71)) carousel buttons.

## Typography

### Font Family
Apple serves its own web fonts: **SF Pro Display** (400, 600 loaded) and **SF Pro Text** (300, 400, 500, 600 loaded),
plus SF Pro Icons. Stack: `"SF Pro Display" | "SF Pro Text", "SF Pro Icons", "Helvetica Neue", Helvetica, Arial, sans-serif`.
Localized pages switch families (SF Pro TH, SF Pro JP, SF Pro SC … are declared in the CSS).
The web player uses `-apple-system, system-ui, "SF Pro", …` instead.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| hero | Display | 128px | 600 | 128px | -0.256px | "For the love of music." |
| headline-80 | Display | 80px | 600 | 84px | -1.2px | Gallery headline |
| headline-72 | Display | 72px | 600 | 72px | -0.648px | "Questions? Answers." |
| headline-56 | Display | 56px | 600 | 56px | -0.28px | "Choose the plan…" |
| headline-48 | Display | 48px | 600 | 52.0077px | -0.144px | "Start listening for free." |
| headline-40 | Display | 40px | 600 | 44px | — | "Working with Apple Music." |
| lockup | Text | 34px | 600 | 50px | -0.374px | Hero h1 lockup |
| feature-title | Display | 32px | 600 | 36px | 0.128px | Gallery tile labels |
| card-title | Display | 28px | 600 | 32px | 0.196px | Offer card titles |
| hero-intro | Display | 24px | 600 | 28px | 0.216px | Hero paragraph |
| localnav-title | Display | 21px | 600 | 24px | 0.231px | "Apple Music", "Compare plans" |
| body | Text | 17px | 400 | 25px | -0.374px | Body copy |
| button | Text | 17px | 600 | 20.0002px | -0.374px | Pill labels |
| link-small | Text | 14px | 400 | 20.0003px | -0.224px | "Learn more" |
| globalnav | Text | 12px | 400 | 12px | -0.12px | Global nav links |
| footnote | Text | 12px | 400 | 16.0005px | -0.12px | Footer and legal |

### Principles
- Optical sizes: Display at 21px and above, Text below.
- Tracking shifts with size: negative on display sizes, slightly positive at 21–32px, negative again at body sizes.
- Headlines are 600, never bold 700; body is 400.
- 17px is the base reading size, matching Apple's platform default (HIG: iOS default text size 17pt).

### Note on Font Substitutes
SF Pro is Apple's system font; Apple licenses it only to registered developers for UI mock-ups of Apple-platform
software (developer.apple.com/fonts). Outside Apple, use the page's own fallback chain — `"Helvetica Neue", Helvetica, Arial, sans-serif`
— and keep the measured sizes, weights and tracking.

## Layout

### Spacing System
Measured gaps: 8px, 10px, 20px, 30px, 80px. Paddings: 4px, 24px, 80px, 8px, 11px/21px (pills), 34px, 40px.
Navigation heights are tokenized: `--r-globalnav-height: 44px`, `--r-localnav-height: calc(52px * var(--r-localnav-text-zoom-factor))`.

### Grid & Container
- Content is centered with wide side margins; the offer carousel shows three 405px cards and bleeds the fourth off the right edge.
- Section headers put the headline left and a 21px `#0066cc` "Compare plans ›" link right.
- Local-nav breakpoints are tokenized: small 320–833px, medium 834–1023px, large 1024px+.

### Whitespace Philosophy
Very generous: 80px section padding, one idea per band, centered hero copy with a single CTA.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Cards, bands, buttons |
| Ring glow | `rgb(13, 22, 31) 0px 0px 0px 32px, rgb(10, 20, 28) 0px 0px 0px 80px, rgb(6, 15, 25) 0px 0px 0px 120px` | Concentric dark rings around a media frame |
| Web player cards | `rgba(0, 0, 0, 0.01) 0px 1px 1px 0px … rgba(0, 0, 0, 0.03) 0px 14px 14px 0px` (5 layers) | music.apple.com artwork |

The marketing page gets depth from photography and the hero gradient, not from shadows.

## Shapes

| Token | Value | Use |
|---|---|---|
| tile-small | 8px | Locale "Continue" button |
| control | 10px | Most frequent radius on the page |
| locale-select | 11px | Country selector |
| card | 18px | Offer cards |
| gallery | 30px | Immersive media tiles |
| large | 36px | Large media tiles |
| pill | 980px | All CTA pills |
| circle | 50% | Carousel paddles, icon buttons |

## Components

### Buttons

**Primary (red pill)** — "Try it free*"
- Background `#fa243c`, label `#ffffff`, SF Pro Text 17px / 600, line-height 20.0002px, tracking -0.374px
- Padding 11px 21px, height 44px, radius 980px
- Hover: label becomes `#febdc5`; background unchanged
- Local-nav variant is the same color at a smaller size (24px tall)

**Hero (white pill)** — "Try it free*" on the gradient
- Background `#ffffff`, label `#1d1d1f`, 17px / 600, padding 17px 30px, height 56px, radius 980px
- Hover: opacity 0.8

**Mobile primary** — 14px / 600, padding 8px 15px, 36px tall (measured at 390px)

**Dark** — the locale banner's "Continue": `#1d1d1f`, white label, radius 8px, 36px tall; hover `#272729`.

### Links
`#0066cc`, 14px "Learn more ↗"; 21px / 600 "Compare plans ›" in section headers.

### Offer cards
White, radius 18px, 405×319px, no border or shadow. Contents: a gradient-filled icon + 17px / 600 label
("New Subscriber"), a 28px / 600 title ("1 month free"), grey descriptive copy, and a red pill CTA at the bottom.

### Carousel paddles
36px circles, `#424245b5` fill, `#ffffffc9` chevrons.

### Navigation
- Global nav: 44px, Apple logo then Store / Mac / iPad / iPhone / Watch / Vision / AirPods / TV & Home / Entertainment /
  Accessories / Support, search and bag icons; links 12px `#000000cc`, padding 0px 8px.
- Local nav: 52px, "Apple Music" 21px / 600 left, red "Try it free*" pill right.

### Footer
`#f5f5f7` background, 12px / 16.0005px text in `#0000008f`, legal footnotes first, then the site directory.

### Web player (music.apple.com)
Left sidebar on translucent `#f5f5f78c`, 13px base text, 34px / 700 page title, `#d60017` 36px pill "Sign In"
(radius 1000px, padding 0px 16px), artwork tiles with a 7px radius and a five-layer soft shadow.

## Design System Architecture

Apple does **not publish the web design system** behind apple.com. The official, public Apple design system is the
[Human Interface Guidelines](https://developer.apple.com/design/human-interface-guidelines/color), which governs native
platform apps; the marketing page's CSS follows its own token set (below). Brand rules for Apple Music itself are limited
to the [Apple Music Identity Guidelines](https://marketing.services.apple/apple-music-identity-guidelines) for badges and icons.

### Token architecture (observed on the page)
- **Semantic fills and glyphs** prefixed `--sk-`: `--sk-body-text-color: rgb(29,29,31)`, `--sk-body-link-color: rgb(0,102,204)`,
  `--sk-fill-tertiary: rgb(245,245,247)`, `--sk-fill-gray-quaternary: rgb(232,232,237)`, `--sk-glyph-gray-secondary: rgb(110,110,115)`,
  `--sk-focus-color: #0071e3`, `--sk-productred: rgb(175,30,45)`, with alpha twins (`--sk-glyph-gray-secondary-alpha: rgba(0,0,0,0.56)`).
- **Layout/navigation** prefixed `--r-`: `--r-globalnav-height: 44px`, `--r-localnav-height`, `--r-localnav-viewport-*-min-width`.
- **Typographic rhythm**: `--sk-headline-plus-first-element-margin: 0.8em`, `--sk-paragraph-plus-headline-margin: 1.6em`,
  `--sk-footnote-font-size: 0.6em`.
No primitive palette tier is exposed; values are written directly into the semantic tokens.

### Theming
The page defines both `--r-globalnav-background-opened: #fafafc` and `--r-globalnav-background-opened-dark: #161617`,
i.e. the nav has a dark variant. The HIG requires native apps to support light, dark and increased-contrast appearances
([HIG Color](https://developer.apple.com/design/human-interface-guidelines/color)).

### Type & spacing systems
SF Pro with optical sizes (Display ≥ 21px, Text below) — SF Pro has "variable optical sizes for optimal legibility"
([Apple Fonts](https://developer.apple.com/fonts/)). Responsive behavior is handled by three viewport bands (320 / 834 / 1024px).

### Component model
Observable components: global nav, local nav with CTA, gallery carousel with paddles, offer cards, immersive media tiles,
FAQ section ("Questions? Answers."), footer with footnotes.

### Accessibility
The [HIG Accessibility](https://developer.apple.com/design/human-interface-guidelines/accessibility) guidance cites WCAG
AA: 4.5:1 for text up to 17pt, 3:1 for 18pt+ or bold; default iOS control size 44×44pt (minimum 28×28pt). The web page's
focus color is `#0071e3` with a 1px offset (`--sk-focus-offset-container: 3px` for containers).

### Delivery
Not public for the web. SF Pro and the Apple Design Resources are distributed through developer.apple.com.

## Do's and Don'ts

### Do
- Alternate `#f5f5f7` and `#ffffff` bands; put white cards on the grey band.
- Use SF Pro Display 600 for every headline, with the measured tracking.
- Use `#fa243c` pills (980px radius) for every "Try it free" action.
- Keep the hero to lockup, headline, one paragraph and one white pill on the gradient.
- Use `#0066cc` for text links with a trailing chevron or arrow.
- Use footnote superscripts for offer conditions.

### Don't
- Don't use the web player's `#d60017` on the marketing page; it uses `#fa243c`.
- Don't add shadows to offer cards.
- Don't bold headlines to 700.
- Don't square off buttons — CTAs are always pills.
- Don't fill text links with color backgrounds.
- Don't create or alter Apple Music badges; use Apple's artwork (Identity Guidelines).

## Responsive Behavior

### Breakpoints
Local nav: small 320–833px, medium 834–1023px, large ≥ 1024px.

### Measured at 390px
- Hero headline drops from 128px to 48px (600, line-height 48px, tracking -0.144px).
- Lockup h1 stays 34px / 600.
- Body stays 17px / 25px.
- Primary pill becomes 14px / 600, padding 8px 15px, 36px tall.

### Touch targets
44px desktop pills; 36px on mobile; 36px paddles.

### Collapsing strategy
The offer cards sit in a horizontal carousel paged by paddles; other collapse behavior was not measured.

## Iteration Guide

1. Body `#ffffff`, bands `#f5f5f7`, text `#1d1d1f`.
2. SF Pro Display/Text (fallback Helvetica Neue, Helvetica, Arial).
3. Global nav 44px with 12px links; local nav 52px with a red pill.
4. Gradient hero with the 128px / 600 headline, 24px intro in `#ffffffcc`, white 56px pill.
5. "Start listening for free." 48px band with 18px-radius white offer cards and red pills.
6. Immersive media tiles (30–36px radius) with 80px white headlines.
7. Footer on `#f5f5f7` with 12px `#0000008f` text.

### Quick Reference
```
canvas #f5f5f7 · surface #ffffff · ink #1d1d1f · secondary #6e6e73 / #86868b
primary #fa243c (hover label #febdc5) · link #0066cc · focus #0071e3
hero 128px/600/128px -0.256px · body 17px/25px -0.374px
pill: 980px · 11px 21px · 44px · 17px/600
card: #ffffff · 18px radius
```
