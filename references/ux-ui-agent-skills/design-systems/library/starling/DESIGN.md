---
version: alpha
name: Starling Bank
category: "Banking & Insurance"
description: "Starling's 2025 \"Good with money\" web system — aubergine #321e37 ink and footer, electric-teal #50ffeb buttons with 4px corners (hover #29e6d1, active #24d2be), a warm #f8f5f0 page canvas with white 24px-radius cards, Avantt (variable, weights 450/550/600, negative tracking, 48px/54px hero) for text and CoFo Sans Semi-Mono 550 for every button, label and nav item."

colors:
  primary: "#50ffeb"
  primary-hover: "#29e6d1"
  primary-active: "#24d2be"
  primary-disabled: "#a7fff5"
  on-primary: "#321e37"
  canvas: "#f8f5f0"
  surface: "#ffffff"
  ink: "#321e37"
  aubergine: "#321e37"
  ink-inverse: "#ffffff"
  ink-muted: "#706273"
  ink-legal: "#a3a9ba"
  border-subtle: "#d6d2d7"
  surface-grey: "#eae8eb"
  focus-purple: "#6935d3"
  teal-deep: "#19d3c5"
  sand: "#f2dac5"
  sand-hover: "#e3cbb6"
  taupe: "#ccb39e"
  lilac: "#d7a5f080"
  error: "#de352d"
  success: "#00ab6c"

typography:
  heading-1:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 48px
    fontWeight: 550
    lineHeight: 54px
    letterSpacing: -1.44px
  heading-1-mobile:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 48px
    fontWeight: 550
    lineHeight: 54px
    letterSpacing: -1.44px
  heading-2:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 36px
    fontWeight: 550
    lineHeight: 40px
    letterSpacing: -1.08px
  heading-2-strong:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 36px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: -1.08px
  stat:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 28px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: -0.56px
  heading-card:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 24px
    fontWeight: 600
    lineHeight: 26px
    letterSpacing: -0.48px
  heading-3:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 21.06px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: -0.36px
  body:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 18px
    fontWeight: 450
    lineHeight: 24px
    letterSpacing: -0.36px
  body-strong:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: -0.36px
  accordion-question:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 18px
    fontWeight: 500
  footer-heading:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: -0.36px
  footer-link:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 15px
    fontWeight: 450
    lineHeight: 24px
    letterSpacing: -0.3px
  tab-label:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
    letterSpacing: -0.28px
  disclaimer:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 12px
    fontWeight: 450
    lineHeight: 24px
    letterSpacing: -0.24px
  legal:
    fontFamily: 'Avantt, "Inter tight", sans-serif'
    fontSize: 12px
    fontWeight: 450
    lineHeight: 19.2px
    letterSpacing: -0.36px
  button:
    fontFamily: '"CoFo Sans Semi-Mono", "Roboto mono", sans-serif'
    fontSize: 18px
    fontWeight: 550
    lineHeight: 18px
    letterSpacing: -0.36px
  button-sm:
    fontFamily: '"CoFo Sans Semi-Mono", "Roboto mono", sans-serif'
    fontSize: 16px
    fontWeight: 550
    lineHeight: 16px
    letterSpacing: normal
  nav-item:
    fontFamily: '"CoFo Sans Semi-Mono", "Roboto mono", sans-serif'
    fontSize: 18px
    fontWeight: 550
    lineHeight: 24px
    letterSpacing: normal
  label-mono:
    fontFamily: '"CoFo Sans Semi-Mono", "Roboto mono", sans-serif'
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: -0.36px
  label-mono-sm:
    fontFamily: '"CoFo Sans Semi-Mono", "Roboto mono", sans-serif'
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
    letterSpacing: -0.36px

rounded:
  button: 4px
  md: 16px
  dot: 20px
  card: 24px
  lg: 30px
  section: 40px

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  button-y: 10px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 36px
  3xl: 40px
  4xl: 56px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 40px
    border: "1px solid #50ffeb"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.button}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.button}"
  button-primary-disabled:
    backgroundColor: "{colors.primary-disabled}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.button}"
  button-outline-on-dark:
    backgroundColor: transparent
    textColor: "{colors.ink-inverse}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 40px
    border: "1px solid #ffffff"
  button-outline-on-dark-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.aubergine}"
    rounded: "{rounded.button}"
  button-help:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 10px 20px
    height: 38px
  carousel-arrow:
    backgroundColor: "{colors.surface}"
    rounded: "{rounded.button}"
    height: 48px
  carousel-arrow-hover:
    backgroundColor: "{colors.primary-hover}"
  segmented-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.aubergine}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 44px
  segmented-inactive:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.aubergine}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 10px 16px
    height: 44px
  tab-active:
    backgroundColor: "{colors.aubergine}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.tab-label}"
    rounded: "{rounded.button}"
    padding: 6px
  tab-inactive:
    backgroundColor: transparent
    textColor: "{colors.ink-muted}"
    typography: "{typography.tab-label}"
    rounded: "{rounded.button}"
    padding: 6px
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    height: 78px
  nav-item:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.nav-item}"
    padding: 3px 8px
  link-learn-more:
    textColor: "{colors.ink}"
    typography: "{typography.body-strong}"
  link-learn-more-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
  card-feature:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.card}"
    padding: 24px 16px 20px
  accordion-item:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.accordion-question}"
    padding: 24px 0px
    height: 80px
  carousel-dot:
    backgroundColor: "{colors.border-subtle}"
    rounded: "{rounded.dot}"
    height: 10px
  carousel-dot-active:
    backgroundColor: "{colors.ink-muted}"
    rounded: "{rounded.dot}"
  footer:
    backgroundColor: "{colors.aubergine}"
    textColor: "{colors.ink-inverse}"
    typography: "{typography.footer-link}"
    padding: 40px 4px
  footer-legal:
    textColor: "{colors.ink-legal}"
    typography: "{typography.legal}"
---

## Overview

Starling's website (rebranded in September 2025 around the mission "Good with money") is warm, tactile and a little technical. The capture opens on a white 78px top bar: the new all-caps **STARLING** wordmark on the left (the word "Bank" was dropped), "Personal" and "Business" menus centered, "About", "Help", "Log in" on the right, and one electric-teal **Apply now** button with tight 4px corners. Below sits a full-bleed hero photograph — a hand holding a phone that shows the Spaces screen (budget pots with photos of a dog, a Santorini trip, a house) — with the white headline "Good with money starts here." (Avantt 48px/550), one line of 18px copy and a teal "Learn more" button. Trust badges (Which? Recommended Provider, Current Account Switch Guarantee, FSCS) sit at the bottom right.

The page then drops onto a warm off-white canvas `#f8f5f0`. "Game-changing banking. Life-changing habits." introduces a carousel of white 24px-radius feature cards; each has a mono category label ("Family Banking", "Spaces", "Bills Manager"), a 24px Avantt title, an underlined "Learn more" link and a small isometric illustration (cards, a piggy bank in sunglasses, a safe) drawn in aubergine line with teal/lilac fills. A large white panel ("There's an account with your name on it.") shows the three card designs as a carousel: **taupe** Joint, **electric teal** Personal, **aubergine** Business — each with a big STARLING wordmark. Below, the page turns deep aubergine with a phone mock-up, and closes with an aubergine footer.

The palette is drawn "from the colours of starling birds": **aubergine** `#321e37` (ink, footer, dark modules, Business card) and **electric teal** `#50ffeb` (every primary action, Personal card). Warm neutrals — cream `#f8f5f0`, sand `#f2dac5`, taupe `#ccb39e` — carry everything else.

**Key Characteristics:**
- Electric-teal `#50ffeb` buttons with aubergine text and only **4px** corners — square-ish, not pills.
- Two families: Avantt (variable, weights 450/550/600) for reading; CoFo Sans Semi-Mono 550 for buttons, nav and labels — the mono adds a "banking terminal" voice.
- Negative tracking everywhere on Avantt: -0.02em on text, -0.03em on headings (-1.44px at 48px).
- Warm `#f8f5f0` canvas with white 24px cards and panels; sections close with 40px bottom corners.
- Aubergine `#321e37` for ink instead of black; muted text `#706273`.
- Isometric line illustrations and real phone photography; three card colours (taupe/teal/aubergine) as brand objects.

## Colors

> Source: `web/data/extracted/starling.json` (homepage desktop + mobile), `starling--current-account.json`, and Starling's shipped CSS (`/_next/static/css/*.css`), where the button recipe resolves to the hashed variables quoted below.

### Brand & Action
- **Primary / Electric Teal** (`{colors.primary}` — `#50ffeb`): fill and 1px border of every primary button (`--_9o5tl8f`/`--_9o5tl8h`).
- **Primary Hover** (`{colors.primary-hover}` — `#29e6d1`): measured hover of "Apply now", "Learn more", "Help" (`rgb(80,255,235)` → `rgb(41,230,209)`); `--_9o5tl8i`.
- **Primary Active** (`{colors.primary-active}` — `#24d2be`): `:active` state in the button CSS (`--_9o5tl8l`).
- **Primary Disabled** (`{colors.primary-disabled}` — `#a7fff5`): `:disabled` fill (`--_9o5tl8n`).
- **On Primary** (`{colors.on-primary}` — `#321e37`): button text is aubergine, never white.

### Surface
- **Canvas** (`{colors.canvas}` — `#f8f5f0`): the warm off-white page background, largest area on the homepage.
- **Surface** (`{colors.surface}` — `#ffffff`): body background, top bar, cards and panels.
- **Aubergine** (`{colors.aubergine}` — `#321e37`): dark modules, footer, active tab, Business card.
- **Surface Grey** (`#eae8eb`): light grey blocks on product pages.
- **Sand / Sand Hover** (`#f2dac5` / `#e3cbb6`): fill and hover of a sand button variant in the CSS.
- **Taupe** (`#ccb39e`): Joint-account card colour.
- **Lilac** (`#d7a5f080`): 50% lilac used in illustrations/accents.

### Text
- **Ink** (`{colors.ink}` — `#321e37`): body text on light surfaces, headings, button labels. (By raw character count the homepage's most frequent text colour is white `#ffffff` — 2083 vs 1909 characters — because the hero and the long footer are dark; on the light canvas the reading colour is aubergine.)
- **Ink Inverse** (`{colors.ink-inverse}` — `#ffffff`): text on photography and on aubergine.
- **Ink Muted** (`{colors.ink-muted}` — `#706273`): disclaimers, inactive tabs, active carousel dot.
- **Ink Legal** (`{colors.ink-legal}` — `#a3a9ba`): legal text in the footer.

### Semantic & Utility
- **Focus Purple** (`#6935d3`): the "Skip to main content" link colour; also text of a white/purple button variant in the CSS.
- **Border Subtle** (`#d6d2d7`): disabled outline-button border/text, inactive carousel dots.
- **Error** (`#de352d`) and **Success** (`#00ab6c`): present in the theme variables.
- **Teal Deep** (`#19d3c5`): a darker teal used by an alternate button variant and focus border in the CSS.

## Typography

### Font Family
- **Avantt** — served as a variable font (`Avantt 100 900`), fallback stack `"Inter tight", sans-serif`. Avantt is a retail typeface by Martin Vácha, released by Displaay Type Foundry in February 2021, a variable font with weight and slant axes ([Displaay](https://displaay.net/typeface/avantt/)). Starling uses the in-between variable weights **450**, **550** and **600**.
- **CoFo Sans Semi-Mono** — weight 500/550, fallback `"Roboto mono", sans-serif`. Designed by Maria Doreuli at Contrast Foundry; a "semi-mono" keeps a monospaced look but widens compressed letters (m, w) and narrows wide ones (i, j, l) ([Fontstand](https://fontstand.com/fonts/cofo-sans-semi-mono)).
- The CSS also declares a `Universal Sans` `@font-face` (not used by any measured role).

### Hierarchy (desktop 1280px)

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.heading-1}` | Avantt | 48px | 550 | 54px | -1.44px | Hero h1 (also 48px at 390px) |
| `{typography.heading-2}` | Avantt | 36px | 550 | 40px | -1.08px | Section heads |
| `{typography.heading-2-strong}` | Avantt | 36px | 600 | 40px | -1.08px | Emphasised words inside heads |
| `{typography.stat}` | Avantt | 28px | 600 | 28px | -0.56px | Survey/stat numbers |
| `{typography.heading-card}` | Avantt | 24px | 600 | 26px | -0.48px | Card titles |
| `{typography.heading-3}` | Avantt | 21.06px | 600 | 24px | -0.36px | Small h3 |
| `{typography.body}` | Avantt | 18px | 450 | 24px | -0.36px | Body copy |
| `{typography.body-strong}` | Avantt | 18px | 600 | 24px | -0.36px | "Learn more" links |
| `{typography.accordion-question}` | Avantt | 18px | 500 | — | — | FAQ questions |
| `{typography.footer-heading}` | Avantt | 16px | 600 | 24px | -0.36px | Footer column heads |
| `{typography.footer-link}` | Avantt | 15px | 450 | 24px | -0.3px | Footer links |
| `{typography.tab-label}` | Avantt | 14px | 500 | 16.8px | -0.28px | Feature tabs |
| `{typography.disclaimer}` | Avantt | 12px | 450 | 24px | -0.24px | Product disclaimers |
| `{typography.legal}` | Avantt | 12px | 450 | 19.2px | -0.36px | Footer legal |
| `{typography.button}` | CoFo Sans Semi-Mono | 18px | 550 | 18px | -0.36px | All buttons |
| `{typography.button-sm}` | CoFo Sans Semi-Mono | 16px | 550 | 16px | normal | Floating Help button |
| `{typography.nav-item}` | CoFo Sans Semi-Mono | 18px | 550 | 24px | normal | Personal / Business / About |
| `{typography.label-mono}` | CoFo Sans Semi-Mono | 18px | 500 | 24px | -0.36px | Card category labels |
| `{typography.label-mono-sm}` | CoFo Sans Semi-Mono | 14px | 500 | 16.8px | -0.36px | Rate labels ("Bonus rate") |

### Principles
- **Tracking is tokenised**: theme variables hold `-0.02em` and `-0.03em`; buttons use `letter-spacing: -0.02em` (18px → -0.36px), headings -0.03em (48px → -1.44px, 36px → -1.08px).
- **Variable weights**: 450 for reading, 550 for headings and buttons, 600 for card titles and links, 500 for labels — never 400 or 700 in the measured roles.
- **Mono = interactive or categorical.** If it is clickable chrome or a category label, it is CoFo; if it is reading text, it is Avantt.
- Button line height is `1` (18px on 18px) — the label sits tight in a 40px button.

### Note on Font Substitutes
Both faces are commercial (Avantt — Displaay; CoFo Sans Semi-Mono — Contrast Foundry) and can be licensed. Starling's own fallbacks are **Inter Tight** for Avantt and **Roboto Mono** for CoFo Sans Semi-Mono; use those exact fallbacks when the licensed fonts are unavailable, keeping the weights (450/550/600 → nearest available) and negative tracking.

## Layout

### Spacing System
Measured gaps: 6px, 36px and 20px dominate, then 24px, 4px, 40px, 8px. Paddings: 16px, 6px, 24px, 10px (button vertical), 8px, 40px. Button padding is `10px 16px`; cards `24px 16px 20px`; footer `40px 4px`.

### Grid & Container
- Content is left-aligned to a ~24px margin at 1280px (headline and cards start at the same x).
- Feature cards run as a horizontally scrolling carousel with prev/next arrow buttons (48px, white, 4px radius) top-right.
- The account-card section is a centered white panel holding a 3-up carousel with dots.

### Imagery & Voice
- Hero photography is close, warm and tactile: hands, fabric, wood, a phone mid-use showing real app screens (Spaces with personal photos).
- Product features are illustrated isometrically — aubergine line work, teal and lilac fills, a soft aubergine ground shadow under each object.
- The three card designs (taupe, teal, aubergine) are shown flat and large with the STARLING wordmark, as brand objects.
- Microcopy is short and habit-focused: "Good with money starts here.", "Game-changing banking. Life-changing habits.", "Organise money into budgets.", CTAs "Apply now", "Learn more", "Tell me more".

### Whitespace Philosophy
Generous vertical space between sections on the cream canvas; content inside cards is compact (6px gaps between label, title and link). Sections are separated by surface changes (photo → cream → white panel → aubergine) rather than rules.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | Buttons, cards on cream (flat) |
| 1 | `rgba(0, 0, 0, 0.03) 0px 10px 10px 0px` | Soft lift (measured once) |
| 2 | `rgba(0, 0, 0, 0.12) 0px 0px 28px 0px` | Floating elements (measured twice) |

The CSS also contains `0 8px 24px 0 rgba(0,0,0,.08)` and `0 4px 8px rgba(0,0,0,.1)`. Depth is mostly created by the cream-vs-white contrast and by placing the white 24px panels on `#f8f5f0`.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.button}` | 4px | All buttons, tabs, segmented controls, carousel arrows, focus ring |
| `{rounded.md}` | 16px | Smaller containers |
| `{rounded.dot}` | 20px | Carousel dots |
| `{rounded.card}` | 24px | Feature cards and white panels |
| `{rounded.lg}` | 30px | Large rounded media (measured once) |
| `{rounded.section}` | 40px | Section bottom corners (`0px 0px 40px 40px`) where the cream area meets the aubergine band |

Buttons are deliberately near-square (4px) while containers are soft (24px+). That contrast is part of the identity.

## Components

### Buttons
The CSS defines one button recipe — base: `padding: 10px 16px; border: 1px solid; border-radius: 4px; letter-spacing: -0.02em; font-weight: 550; font-size: 1.125rem; line-height: 1` — with variants:

**`button-primary`** — "Apply now", "Learn more", "Tell me more", "View the full set of results".
- `#50ffeb` fill and border, `#321e37` text, `{typography.button}`, 40px tall.
- Hover `#29e6d1`, active `#24d2be`, disabled `#a7fff5`.

**`button-outline-on-dark`** — "More on Fixed Saver" on aubergine: transparent, `1px solid #ffffff`, white text. Hover fills `#29e6d1` with aubergine text (CSS).

**Outline (light)** — CSS variant: transparent, `#321e37` border and text; hover `#29e6d1`; disabled border/text `#d6d2d7`.

**Sand** — CSS variant: `#f2dac5` fill, aubergine text, hover `#e3cbb6`.

**`button-help`** — floating "Help" button, teal, CoFo 16px/550, `10px 20px`, 38px.

**Focus** — every variant: `:focus-visible::before { inset: -6px; border: 2px solid #321e37; border-radius: 4px }` — a 2px aubergine ring offset 6px outside the button.

### Navigation
**`nav`** — white bar, 78px tall. Menu triggers ("Personal", "Business", "About") are CoFo 18px/550 buttons with `3px 8px` padding and a chevron; "Help" and "Log in" are links. Hover underlines the label (measured `text-decoration: underline`). The only filled element is `button-primary` "Apply now".

### Links
**`link-learn-more`** — Avantt 18px/600, aubergine, underlined. On hover the underline disappears and the link gets a `#50ffeb` highlight background (measured).

### Cards & Containers
**`card-feature`** — white, 24px radius, `24px 16px 20px` padding; centered stack of mono label → 24px title → "Learn more" → illustration.

**Account panel** — white 24px-radius panel on cream holding the card carousel (taupe / teal / aubergine card images), a `{typography.body-strong}` product name, one-line description and `button-primary`.

### Tabs & Segmented Controls
- **`tab-active` / `tab-inactive`** — feature tabs ("Spaces", "Virtual Cards", "Bills Manager", "Intelligence"): active `#321e37` fill with white 14px/500 label, inactive transparent with `#706273` label; 4px radius, 6px padding.
- **`segmented-active` / `segmented-inactive`** — "Great Britain" / "Northern Ireland" switch: active teal, inactive white, 44px, CoFo 18px/550.

### Accordion
**`accordion-item`** — FAQ question buttons on product pages: 18px/500 aubergine, `24px 0` padding, 80px row.

### Carousel Controls
**`carousel-arrow`** — white 48px square-ish buttons (4px radius) with ← / →; hover `#29e6d1`. **`carousel-dot`** — 10px dots, `#d6d2d7`, active `#706273`.

### Footer
**`footer`** — aubergine `#321e37`, `40px 4px` padding; column heads Avantt 16px/600 white ("Company"), links 15px/450 white, legal 12px/450 `#a3a9ba` with 19.2px line height.

## Design System Architecture

Starling publishes **no public design-system documentation, token package or Figma kit**. Below: what Starling has said officially, and what its shipped CSS shows.

### Token architecture
- The website's tokens are **build-hashed CSS custom properties** grouped in two contracts: a colour contract `--_9o5tl8*` (e.g. `--_9o5tl8f: #50FFEB`, `--_9o5tl8i: #29E6D1`, `--_9o5tl8l: #24D2BE`, `--_9o5tl8n: #A7FFF5`, `--_9o5tl8e: #321E37`) and a foundation contract `--_140qdu6*` (fonts `--_140qdu60: "Avantt",Inter tight,sans-serif`, `--_140qdu61: "CoFo Sans Semi-Mono",Roboto mono,sans-serif`; weights `--_140qdu636: 450`, `--_140qdu637: 500`, `--_140qdu638: 550`; tracking `-0.02em`/`-0.03em`; rem sizes). Component styles reference them through hashed class names (`._1izlnb40` base button, `._1izlnb41`… variants) — i.e. a primitive layer bound directly into component recipes, with readable semantic names compiled away.
- Readable names only survive in the cookie-consent module (`--cm-secondary-btn-bg-hover: #29E6D1`, `--cm-font-family: "Avantt",Inter tight,sans-serif`, `--cm-modal-bg: #F6EFEA`), which re-uses the brand values.

### Theming
- One light theme on the website; dark areas are aubergine sections, not a mode. The only `prefers-color-scheme: dark` rule in the CSS belongs to the embedded tweet widget, not to Starling's UI.
- Brand theming is by **product colour**: Personal = electric teal, Joint = taupe, Business/Sole Trader = aubergine ([Starling press release, 16 Sep 2025](https://www.starlingbank.com/news/starling-reveals-new-look/)).
- The rebrand moved "purple and teal tones … to a more active and vibrant colour palette" with "a stronger colour system, cleaner typography and bolder graphics" ([press release](https://www.starlingbank.com/news/starling-reveals-new-look/)); customer-facing notes list "a richer purple and an electric teal", "new fonts", and dropping "Bank" from the logo ([branding update](https://starlingbank.com/about/branding-update)).

### Type & spacing systems
- Type uses two families with distinct roles (Avantt reading, CoFo semi-mono for chrome), variable weights 450/500/550/600, and em-based negative tracking. Sizes are px/rem values, not a modular ratio: 48, 36, 28, 24, 21.06, 18, 16, 15, 14, 12px.
- Spacing is irregular (4, 6, 8, 10, 16, 20, 24, 36, 40, 56px) rather than a strict 4/8 grid.

### Component model
- The shipped button recipe has a shared base and at least seven variants with explicit `:hover`, `:active`, `:focus-visible` and `:disabled` styles (primary teal, outline, outline-on-dark, sand, purple-on-white, deep-teal/navy).
- Measured web inventory: nav with menu triggers, primary/outline/help buttons, feature cards, account-card carousel, tabs, segmented control, carousel arrows and dots, FAQ accordion, trust badges, footer.
- Starling's in-house frontend uses React, Sass and TypeScript, and maintains an "in-house component library used in the web app we use to run the bank" ([Starling job posting, Built In London](https://builtinlondon.uk/job/senior-ui-engineer/6239241)). The stylesheet paths (`/_next/static/css/…`) show the marketing site is a Next.js build.

### Accessibility
- "We aim to meet the Web Content Accessibility Guidelines 2.2 (WCAG) at AA level" for the website and online banking; the iOS app follows Apple's Human Interface Guidelines and the Android app Google's Material Design. Known issues listed include insufficient contrast on form elements in online banking and the apps ([Starling accessibility statement, updated June 2026](https://www.starlingbank.com/accessibility/accessibility-statement/)).
- In code: 2px aubergine focus ring offset 6px on all buttons; `prefers-reduced-motion` rules exist; a "Skip to main content" link is the first element. Buttons are 40–48px tall.

### Delivery
- No public npm package, Storybook or Figma library. Fonts are licensed retail typefaces (Displaay, Contrast Foundry) self-hosted via `@font-face`.

## Do's and Don'ts

### Do
- Use `#50ffeb` with **aubergine** `#321e37` text for primary buttons; hover `#29e6d1`, active `#24d2be`.
- Keep button corners at 4px and containers at 24px.
- Set buttons, nav and labels in CoFo Sans Semi-Mono 550; set reading text in Avantt 450.
- Apply negative tracking (-0.02em text, -0.03em headings).
- Put white 24px cards on the `#f8f5f0` canvas; use aubergine for dark bands and the footer.
- Use the 2px aubergine focus ring offset 6px.
- Pair features with isometric line illustrations or real phone photography.

### Don't
- Don't put white text on the teal button — it is always aubergine.
- Don't round buttons into pills.
- Don't use pure black for text or dark surfaces — use `#321e37`.
- Don't use Avantt for button labels or CoFo for paragraphs.
- Don't add heavy shadows; elevation is subtle (`0 0 28px rgba(0,0,0,.12)` at most).
- Don't call the brand "Starling Bank" in the logo — the wordmark is just STARLING.

## Responsive Behavior

### Breakpoints
From the shipped CSS: `min-width: 576px`, `768px` (most used, plus `max-width: 768px`), `1020px`, `1150px`, `1200px`, `1441px`.

### Mobile (390px, measured)
- h1 stays 48px/54px/550 and h2 36px/40px — the type does not scale down.
- The header shrinks to 77px with only the logo, "Apply now" and a menu trigger visible.
- Primary CTA keeps 18px/550, `10px 16px`, 40px, 4px radius.

### Touch Targets
Buttons 40px, segmented controls 44px, carousel arrows 48px, accordion rows 80px.

### Collapsing Strategy

## Iteration Guide

1. Canvas `#f8f5f0`, white 24px panels, aubergine footer.
2. Headline `{typography.heading-2}` (or `{typography.heading-1}` in a hero), body `{typography.body}`.
3. One `button-primary` per block; secondary actions as underlined `link-learn-more` or outline buttons.
4. Every clickable label in CoFo Sans Semi-Mono.
5. Keep tracking negative and weights in the 450–600 band.
6. Check the 2px aubergine focus ring on every interactive element.
7. Re-run `node web/scripts/verify-designs.mjs --slug=starling` after edits.
