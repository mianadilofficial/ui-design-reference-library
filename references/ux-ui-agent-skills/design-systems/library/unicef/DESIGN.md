---
version: alpha
name: UNICEF
category: "Government & Nonprofit"
description: "UNICEF.org: a UNICEF cyan (#00aeef) header and footer around a white (#ffffff) and light-grey (#f1f1f1) page, Noto Sans throughout with a 48px/64px bold hero headline set white on a #111111 highlight strip, #111111 ink, 5px-radius elevated buttons (cyan with dark text, hover #008bbf; white with orange #d14808 Donate text; 3px outlined), and white 5px-radius story cards with Material-style shadows."

colors:
  primary: "#00aeef"
  primary-hover: "#008bbf"
  primary-light-bg: "#f2fafd"
  secondary: "#0047bb"
  secondary-focus: "#0033a7"
  secondary-light-bg: "#d3e1f5"
  accent-action: "#d14808"
  accent-action-focus: "#bc4107"
  accent-action-light-bg: "#fee9df"
  accent-alert: "#e2231a"
  accent-alert-focus: "#c81e17"
  brand-accent: "#ffb500"
  header-utility: "#d3dbdf"
  canvas: "#ffffff"
  surface-grey: "#f1f1f1"
  surface-grey-light: "#f8f8f8"
  ink: "#111111"
  black: "#000000"
  tertiary-2: "#404040"
  tertiary-3: "#595959"
  tertiary-4: "#757575"
  tertiary-5: "#c1c1c1"
  text-link: "#1cabe2"
  text-link-hover: "#0e95ca"
  on-dark: "#ffffff"

typography:
  display-hero:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 64px
  display-hero-mobile:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 42px
  heading-section:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 42px
  heading-mosaic:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 38px
  heading-mosaic-mobile:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 34px
  heading-card:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 19px
    fontWeight: 700
    lineHeight: 26px
  body-lg:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  body-card:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  body-sm:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  label:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px

rounded:
  sm: 5px
  md: 15px
  lg: 35px
  circle: 50%

spacing:
  xxs: 2px
  xs: 5px
  sm: 10px
  md: 16px
  lg: 20px
  xl: 30px
  xxl: 40px
  section: 60px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 38px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px, rgba(0, 0, 0, 0.12) 0px 1px 8px 0px"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-disabled:
    backgroundColor: "{colors.tertiary-4}"
    textColor: "{colors.on-dark}"
  button-donate:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.accent-action}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 38px
  button-donate-hover:
    textColor: "{colors.accent-action-focus}"
  button-signup:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.secondary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 38px
  button-outlined:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    border: "3px solid #111111"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 7px 20px
    height: 38px
  header-brand-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-dark}"
  header-utility-bar:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.black}"
  language-button:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.black}"
    rounded: "{rounded.sm}"
    height: 24px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    typography: "{typography.nav}"
    padding: 11px 0px
    height: 60px
  hero-title:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    typography: "{typography.display-hero}"
    padding: 0px 10px 3px
  card-story:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-card}"
    rounded: "{rounded.sm}"
    width: 263px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 3px 3px -2px, rgba(0, 0, 0, 0.14) 0px 3px 4px 0px, rgba(0, 0, 0, 0.12) 0px 1px 8px 0px"
  card-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 10px 12px 10px 0px
  card-link-hover:
    textDecoration: underline
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
  footer-link-hover:
    textDecoration: underline
---

## Overview

UNICEF.org is a news-and-action portal built from a shared component library. The capture shows a three-part header: a thin light-grey utility strip (`{colors.surface-grey}` `#f1f1f1`) with a globe icon and "English" language switcher at the right; a broad **UNICEF cyan** bar (`{colors.primary}` `#00aeef`) carrying the white "unicef" logo with the parent-and-child emblem, a thin divider and the tagline "for every child", plus two buttons at the right — an outlined "Press centre" and a white "Donate" with orange text; and a white navigation row with bold dropdown items (Who we are, What we do, Research and reports, Stories, Take action), a second Donate button and a search icon.

The hero is a full-width photograph (a girl holding a small boy) with the headline overlaid at the lower left as a **highlight strip**: white 48px bold Noto Sans on a solid `#111111` band, a lighter subtitle line beneath it, and a cyan "Learn more" button. Below, on the light-grey band, a centred 30px bold heading "UNICEF, for every child" introduces a **mosaic** of white cards in a four-column grid: photo on top (rounded top corners), a small content-type label with icon and date ("Press release · 06 October 2026"), a bold 19px headline, an optional summary, and a bold "Read now" / "Learn more" link pinned to the bottom. The next section returns to white with a centred 36px heading ("UNICEF's work") and a large centred paragraph.

Colour is functional and well-tokenised: cyan for brand and primary actions, blue `#0047bb` for secondary actions (Sign up), orange `#d14808` for donating, red `#e2231a` for alerts, near-black `#111111` for text, greys for structure.

**Key Characteristics:**
- Cyan `#00aeef` brand bar and cyan footer framing white/grey content.
- Noto Sans only (variable, 100–900), bold 700 for every heading and button.
- Hero headline as a black highlight strip over photography.
- 5px radius everywhere; buttons 38px tall with a three-layer Material-style shadow.
- Primary button: cyan fill with **dark** `#111111` text (not white).
- Donate is always orange text `#d14808` on white.
- Four-up white story cards on `#f1f1f1`, each with a type label, date and bottom link.

## Colors

> **Sources:** live homepage computed styles and `:root` custom properties (`--color-palette-*`, `--btn-primary-*`). Logo colour rules: [UNICEF Brand Tool Kit 2012, Logo](https://www.unicef.org/jordan/media/7171/file/ANNEX_H_-_UNICEF_logo_guidelines.pdf_.pdf).

### Brand
- **UNICEF Cyan** (`{colors.primary}` — `#00aeef`): `--color-palette-primarycolor`, `--color-palette-headerbgcolor`, `--color-palette-footerbgcolor`, `--btn-primary-rest-bg-color`. The logo's preferred display is white out of 100% cyan or cyan on white (Brand Tool Kit).
- **Primary Focus / Hover** (`{colors.primary-hover}` — `#008bbf`): `--color-palette-primaryfocus`, `--btn-primary-hover-bg-color`, `--color-palette-footerbghover`; measured on "Learn more" hover.
- **Primary Light Bg** (`{colors.primary-light-bg}` — `#f2fafd`).
- **Brand Accent** (`{colors.brand-accent}` — `#ffb500`): `--color-palette-brandaccentbase` (declared).

### Action
- **Secondary** (`{colors.secondary}` — `#0047bb`): `--color-palette-secondarycolor`; "Sign up" text, share button. Focus `{colors.secondary-focus}` `#0033a7`; light bg `{colors.secondary-light-bg}` `#d3e1f5`.
- **Accent Action** (`{colors.accent-action}` — `#d14808`): Donate text. Focus/hover `{colors.accent-action-focus}` `#bc4107` (measured on Donate hover); light bg `{colors.accent-action-light-bg}` `#fee9df`.
- **Accent Alert** (`{colors.accent-alert}` — `#e2231a`), focus `{colors.accent-alert-focus}` `#c81e17`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page, nav row, cards.
- **Grey** (`{colors.surface-grey}` — `#f1f1f1`): `--color-palette-tertiary6`; utility strip, mosaic band, language button.
- **Grey Light** (`{colors.surface-grey-light}` — `#f8f8f8`): `--color-palette-tertiary7`.
- **Header Utility** (`{colors.header-utility}` — `#d3dbdf`): `--color-palette-headerutility`.

### Text & Neutrals
- **Ink** (`{colors.ink}` — `#111111`): `--color-palette-tertiary1`; all body and headings, button text on cyan.
- **Black** (`{colors.black}` — `#000000`): nav links and language switcher.
- **Tertiary 2–5**: `#404040`, `#595959`, `#757575` (disabled button bg), `#c1c1c1`.
- **Text-block links**: `{colors.text-link}` `#1cabe2`, hover `{colors.text-link-hover}` `#0e95ca` (`--color-palette-textblocklink*`).

## Typography

### Font Family
**Noto Sans** (Google's open-source family) is loaded as a variable font (weights 100–900) and used for all text. A custom **Unicef** face (weight 100) is also loaded and accounts for a small share of characters (119); a separate **Unicef-Logos** icon font is declared. No public UNICEF typography guideline was found.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display-hero}` | 48px | 700 | 64px | Hero headline (highlight strip) |
| `{typography.display-hero-mobile}` | 36px | 700 | 42px | Hero headline at 390px |
| `{typography.heading-section}` | 36px | 700 | 42px | Section headings ("UNICEF's work") |
| `{typography.heading-mosaic}` | 30px | 700 | 38px | Mosaic heading ("UNICEF, for every child") |
| `{typography.heading-mosaic-mobile}` | 28px | 700 | 34px | Mosaic heading at 390px |
| `{typography.heading-card}` | 19px | 700 | 26px | Card headlines |
| `{typography.body-lg}` | 18px | 400 | 28px | Hero subtitle, body default |
| `{typography.nav}` | 16px | 700 | 16px | Main navigation |
| `{typography.body-card}` | 16px | 400 | 22px | Card summaries |
| `{typography.button}` | 14px | 700 | 18px | Buttons, card links |
| `{typography.body-sm}` | 14px | 400 | 18px | Footer links, legal |
| `{typography.label}` | 12px | 400 | 16px | Card type labels and dates |

### Principles
- **One family, two weights**: 700 for anything that is a heading, link-button or navigation; 400 for reading text.
- **Generous line-heights**: 1.33 on the hero (48/64), ~1.37 on card headlines (19/26), 1.56 on body (18/28).
- **Sentence case** headings; no uppercase transforms or letter-spacing were measured.

### Note on Font Substitutes
Noto Sans is open source (Google Fonts), so no substitute is required. The site's own fallback is generic `sans-serif`.

## Layout

### Spacing System
- **Tokens**: `{spacing.xxs}` 2px · `{spacing.xs}` 5px · `{spacing.sm}` 10px · `{spacing.md}` 16px · `{spacing.lg}` 20px · `{spacing.xl}` 30px · `{spacing.xxl}` 40px · `{spacing.section}` 60px.
- **Most frequent**: padding 10px (21) and 20px (19); gaps 10px (12) and 30px (8).
- Button padding is a token: `--btn-primary-rest-padding: 10px 20px`.

### Grid & Container
- Content container 1140px wide at 1280px (hero subtitle and footer text measure 1140px).
- Mosaic: four columns of 263px cards in rows; card heights equalise (580px) with the link pinned to the bottom.
- Section headings are centred, 770px wide.

### Whitespace Philosophy
Moderate density: cards are tightly gridded with 30px gutters; sections are separated by background change (grey mosaic band → white) and 40–60px padding.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Bands, header |
| 1 | `rgba(0,0,0,0.1) 0 3px 3px -2px, rgba(0,0,0,0.14) 0 3px 4px 0, rgba(0,0,0,0.12) 0 1px 8px 0` | Buttons and cards (20 occurrences) |
| 2 | `0 5px 5px -3px rgba(0,0,0,.12), 0 8px 10px 1px rgba(0,0,0,.14), 0 3px 14px 2px rgba(0,0,0,.12)` | Higher elevation (in the stylesheets, 15+ rules) |
| Focus | `0 0 0 2px #00aeef`; `0 0 0 2px #fff, 0 0 0 4px #00aeef` | Focus rings (in the stylesheets) |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 5px | Buttons, cards, language switcher (21 occurrences, plus 12 × `5px 5px 0 0` on card images) |
| `{rounded.md}` | 15px | Rounded containers (6 occurrences) |
| `{rounded.lg}` | 35px | One pill-like element |
| `{rounded.circle}` | 50% | Round floating buttons (scroll-to-top, share) |

### Photography Geometry
Hero is full-bleed photography of children; card photos sit at the top of each card with 5px top corners and fixed height, cropped landscape. The floating scroll-to-top (white circle, cyan chevron) and share (blue `#0047bb` circle) buttons are circular.

## Components

### Buttons
- **`button-primary`** — cyan `#00aeef`, **`#111111` text**, 14px/700/18px, padding `10px 20px`, 38px tall, radius 5px, Level-1 shadow. Hover `#008bbf`. Disabled: `#757575` bg with white text (`--btn-primary-disabled-*`).
- **`button-donate`** — white, `#d14808` text, same geometry and shadow; hover text `#bc4107`.
- **`button-signup`** — white, `#0047bb` text.
- **`button-outlined`** — transparent with `3px solid #111111`, padding `7px 20px` (keeps 38px height), e.g. "Press centre" on the cyan bar.

### Header
- **`header-utility-bar`** — `#f1f1f1`, language button (`#f1f1f1`, 5px radius, 24px, globe icon, underline on hover).
- **`header-brand-bar`** — `#00aeef` with white logo + tagline and the outlined/Donate buttons.
- **`nav`** — white row; items 16px/700 black with chevrons, padding `11px 0`, 60px tall; a Donate button and search icon at the right.

### Hero
**`hero-title`** — white `{typography.display-hero}` on a `#111111` strip with padding `0 10px 3px`; subtitle 18px/28px beneath; `button-primary` "Learn more".

### Cards
**`card-story`** — white, 263px wide, 5px radius, Level-1 shadow; image with `5px 5px 0 0` corners; type label `{typography.label}` with a small icon and date; headline `{typography.heading-card}` (underlined on hover); summary `{typography.body-card}`; bottom link `card-link` 14px/700 ("Read now", "Learn more", "Go to UNICEF Parenting"), underlined on hover.

### Footer
**`footer`** — `#00aeef` band (479px at 1280px), `#111111` 14px/400/18px links underlined on hover; social icons in `#111111`.

### Inputs
No form field was present on the homepage; none is declared.

## Design System Architecture

UNICEF.org runs on what UNICEF calls its **Design Model**: "a robust atomic, symbol based design system that governs the styles of all front-end implementations", used by editors globally on "a custom Drupal component-based Content Management System" (UNICEF consultancy posting, [impactpool.org/jobs/634329](https://www.impactpool.org/jobs/634329)). The Design Model is **not publicly documented** — no public site, token package or repository was found. The 2012 [Brand Tool Kit logo section](https://www.unicef.org/jordan/media/7171/file/ANNEX_H_-_UNICEF_logo_guidelines.pdf_.pdf) is public. The following is measured from the site.

### Token architecture
- **Palette tokens** `--color-palette-*`, mixing primitive and semantic names: `primarycolor`, `primaryfocus`, `primarylightbg`, `secondarycolor`, `secondaryfocus`, `secondarylightbg`, `accentaction`, `accentactionfocus`, `accentactionlightbg`, `accentalert`, `accentalertfocus`, `brandaccentbase`, `tertiary1`…`tertiary7`.
- **Pattern**: each role has a base, a `focus` (darker) and a `lightbg` (tint), plus a `contrastalpha` variant (`--color-palette-primarycontrastalpha`).
- **Component tokens**: `--color-palette-headerbgcolor`, `--color-palette-footerbgcolor`, `--color-palette-footerbghover`, `--color-palette-textblocklink` / `hover` / `visited`, `--color-palette-socialmediaiconheader`.
- **Button state tokens**: `--btn-primary-{rest|hover|pressed|disabled}-{bg-color|text-color|border|padding}`, e.g. `--btn-primary-rest-bg-color: #00AEEF`, `--btn-primary-hover-bg-color: #008bbf`, `--btn-primary-disabled-bg-color: #757575`.
- **Type size aliases**: `--ai-font-size-h1…h6`, `-base`, `-s`, `-xs`, `-xxs` mapped to `--font-size-*`.

### Theming
The palette tokens are what differ between site themes (`headerbgcolor`, `footerbgcolor` are tokens, suggesting per-site colour configuration, but only the global theme was measured). Utility classes in markup combine colour and role: `btn primary-bg white`, `mb-title white grey1-bg`.

### Type & spacing systems
Single family; heading sizes 48/36/30/19px desktop, 36/28px mobile; spacing in 5/10px steps (5, 10, 20, 30, 40, 60).

### Component model
Drupal components with BEM-like class names: `unicef-component-mosaic`, `unicef-component-mosaic-display-tile`, `unicef-mosaic-title`, `mosaic-heading`, `mb-title`, `mb-subtitle-cntr`, `mb-btn-desktop`, `cta-button`, `language-button`; states as classes (`enable-state` / `disable-state` toggled on hover).

### Accessibility
Measured: "Skip to main content" link, visually hidden page h1, a language button with full accessible label ("Current language: English. Click to select different language"), focus rings in cyan in the stylesheets. The posting requires accessibility-standards knowledge; no public policy was found.

### Delivery
Not public (Sketch symbol library per the posting; Drupal theme in production).

## Do's and Don'ts

### Do
- Frame pages with the cyan `#00aeef` header bar and footer.
- Display the logo white on 100% cyan or cyan on white, with clear space of half the 'u' height, at least 100px wide on the web (Brand Tool Kit).
- Set the hero headline as white bold text on a `#111111` strip over the photograph.
- Use `#111111` text on cyan buttons.
- Use orange `#d14808` text for Donate, blue `#0047bb` for Sign up.
- Keep all corners at 5px and give buttons/cards the Level-1 shadow.

### Don't
- Don't put white text on cyan buttons — the site uses `#111111`.
- Don't mix more fonts in; everything is Noto Sans.
- Don't round buttons into pills.
- Don't alter the logo's colours (Brand Tool Kit: approved colours only).
- Don't use the alert red for actions.

## Responsive Behavior

### Breakpoints
Exact breakpoints were not measured.

### Measured changes at 390px
- Hero headline 48px/64px → 36px/42px.
- Mosaic heading 30px/38px → 28px/34px.
- Primary button keeps 38px height and `10px 20px` padding.
- Body summary text stays 14px/18px.

### Touch Targets
Buttons are 38px tall; nav items 60px; the language button 24px.

### Collapsing Strategy
The mosaic becomes a single 390px-wide column at mobile (the mosaic container measured 390px wide).

### Image Behavior
Hero photography remains full-bleed with the title strip overlaid; card images keep their top position.

## Iteration Guide

1. Header: grey utility strip → cyan brand bar → white nav row.
2. Hero: full-bleed photo + `hero-title` strip + `button-primary`.
3. Content: `card-story` grid on `#f1f1f1`, four columns at 1280px.
4. Buttons: 5px radius, 38px, Level-1 shadow; cyan/dark-text primary, white/orange Donate.
5. Footer: cyan with `#111111` links.
6. Run `node web/scripts/verify-designs.mjs --slug=unicef` after edits.
