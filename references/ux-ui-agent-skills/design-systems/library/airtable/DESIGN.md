---
version: alpha
name: Airtable
category: "Design & Creative Tools"
description: >-
  Airtable's marketing site is a calm, enterprise-ready product page: white canvas, near-black #161616 buttons with 4px corners, navy ink #181d26, a single link blue, ATSeasonSans at 550 weight (52px hero, 48px section titles), and large product screenshots set on a photographic sky.
colors:
  canvas: "#ffffff"
  ink: "#2e2f32"
  primary: "#161616"
  brand-blue: "#2572ff"
  focus-blue: "#0768f8"
  border-keyline: "#e0dcdb"
  error: "#dc043b"
  success-border: "#39bf45"
  surface-brand-subtle: "#f1f5ff"
  on-primary: "#ffffff"
  surface-forest: "#03330b"
  surface-subtle: "#f8f6f6"
  ink-card: "#1d1f25"
  ink-body: "#333840"
  ink-navy: "#181d26"
  border-hairline: "#1d1f251a"
  link: "#254fad"
  primary-hover: "#040e20b0"
  ink-nav: "#333333"
typography:
  display:
    fontFamily: ATSeasonSans, -apple-system, "system-ui", sans-serif
    fontSize: 52px
    fontWeight: 550
    lineHeight: 57.2px
  display-mobile:
    fontFamily: ATSeasonSans, -apple-system, "system-ui", sans-serif
    fontSize: 26.52px
    fontWeight: 550
    lineHeight: 29.172px
  heading:
    fontFamily: ATSeasonSans, -apple-system, "system-ui", sans-serif
    fontSize: 48px
    fontWeight: 550
    lineHeight: 55.2px
  body:
    fontFamily: ATSeasonSans, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 550
    lineHeight: 18.9px
  button:
    fontFamily: ATSeasonSans, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 650
    lineHeight: 21.6px
  nav:
    fontFamily: ATSeasonSans, Haas, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 650
    lineHeight: 18.2px
    letterSpacing: 0.14px
  body-dominant:
    fontFamily: SF Pro Text
    fontSize: 10px
    fontWeight: 550
  button-secondary:
    fontFamily: ATSeasonSans, Haas, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 550
    lineHeight: 18.9px
    letterSpacing: 0.28px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 6px
  2xl: 8px
  3xl: 10px
  4xl: 14px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink-navy}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 37px
    borderColor: "{colors.ink-navy}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.3xl}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
    rounded: "{rounded.3xl}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-card}"
    rounded: "{rounded.2xl}"
    borderColor: "{colors.border-hairline}"
    boxShadow: rgba(0, 0, 0, 0.08) 0px 1px 3px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
---

## Overview

Airtable's homepage presents itself as a serious workplace product that happens to be friendly. A thin announcement bar ("Bring your Airtable data into Claude. Try it now") sits above a white header with the cube logo, five navigation items (Platform, Solutions, Resources, Enterprise, Pricing) and three actions: Book Demo (outlined), Sign up for free (dark, filled) and Log in. The hero is a centred two-line headline, "Teams, workflows, agents — one space", a one-sentence promise, and two buttons: a dark "Start building for free" and an outlined "Book a demo".

The next band is a large product window, a purple-sidebar "Resource Allocation" calendar, set on a blue photographic sky and framed by a segmented pill control (Operations, Project Management, Marketing, Sales, Build anything). A teal tagline, "The system of record for companies building what's next", and a strip of customer logos (Schaeffler, Cisco, Intuit) follow, then a left-aligned section ("Builder speed becomes business momentum") with three tabs and a dark demo panel showing an AI-generated app form.

Key characteristics:
- A mostly white page with `{colors.primary}` (#161616) for primary actions and headings, and a navy-ish ink (`{colors.ink-navy}`) for secondary actions.
- One typeface family (ATSeasonSans, a variable font) at unusual intermediate weights: 550 for text and headings, 650 for buttons and nav.
- Small radii (4px buttons, 8px cards) for a sober, tool-like feel.
- Product UI as hero imagery: real interface screenshots in white windows with soft layered shadows.
- Hairline grid lines (1px, 10% navy) dividing sections and tab headers.
- A published theme token layer (`--theme_*`, `--color-*`, `--spacing-*`, `--type-*`) including a brand palette of vivid hues.

## Colors

All values are measured on the homepage; semantic names in parentheses are Airtable's own custom properties.

### Core
- **Primary** (`{colors.primary}`): `#161616`, primary button fill and heading colour.
- **On-primary** (`{colors.on-primary}`): white text on dark buttons.
- **Canvas** (`{colors.canvas}`; `--color-surface-primary`): white.
- **Ink navy** (`{colors.ink-navy}`; `--color-text-primary`, `--color-border-primary`, `--color-surface-inverse-primary`): `#181d26`, secondary dark button fill, outline colour and primary text token.
- **Ink** (`{colors.ink}`): `#2e2f32`, the most-read grey-black for paragraphs.
- **Ink card** (`{colors.ink-card}`): `#1d1f25`, text inside product mock cards.
- **Ink body** (`{colors.ink-body}`; `--theme_text`): `#333840`.
- **Ink nav** (`{colors.ink-nav}`): `#333333`, header and footer link text as measured.

### Links and focus
- **Link** (`{colors.link}`; `--theme_button-background-primary-focus`, `--theme_info-text`): `#254fad`, the "Try it now" link.
- **Focus blue** (`{colors.focus-blue}`; `--color-border-focus`, `--color-text-link-primary`): `#0768f8`.
- **Brand blue** (`{colors.brand-blue}`; `--color-brand-blue`, `--color-surface-brand-bold-2`): `#2572ff`.

### Surfaces and lines
- **Surface subtle** (`{colors.surface-subtle}`; `--color-surface-secondary`): `#f8f6f6`, warm off-white bands.
- **Surface brand subtle** (`{colors.surface-brand-subtle}`; `--color-surface-brand-subtle-1`): `#f1f5ff`, the pale blue announcement bar tint.
- **Surface forest** (`{colors.surface-forest}`): `#03330b`, a deep green background area measured on the page; where it is used was not isolated.
- **Border hairline** (`{colors.border-hairline}`): `#1d1f251a`, the 1px grid and card borders.
- **Border keyline** (`{colors.border-keyline}`; `--color-border-keyline`): `#e0dcdb`.
- **Primary hover** (`{colors.primary-hover}`; `--theme_button-text-secondary-loading`, `--color-surface-dark-2`): `#040e20b0`, a translucent navy; the site's own theme darkens buttons with a 25% black overlay (see theme tokens).

### Status
- **Error** (`{colors.error}`; `--color-border-error`): `#dc043b`.
- **Success border** (`{colors.success-border}`; `--theme_success-border`): `#39bf45`.
- The root also defines warning text (`#ffba05`) and a brand palette: red `#e33a3d`, vermilion `#f85c0e`, orange `#ff9113`, yellow `#ffcd05`, chartreuse `#d3e509`, green `#74cf24`, teal `#4fd7c1`, cyan `#00b1ec`, indigo `#775cff`, purple `#ac59ff`, pink `#ea4ecb`, warm gray `#a39e9e`. These appear inside product mockups, not UI chrome.

### Usage rules
- Chrome is monochrome: white, black and grey; colour belongs to product screenshots and imagery.
- Blue is for links, focus rings and info states.
- A "spotlight" gradient button style exists in the theme (pink `#ff00a8` to purple `#7c37ef`) but was not observed on the page.

## Typography

### Family
- **ATSeasonSans** (variable, weights 100 to 900 loaded, exposed as `--type-family-at-season-sans: AT Season Sans VF`) for headings, body, nav and buttons.
- **Haas** (400, 700) and **Haas Groot Disp** (500) load as secondary families: Haas is the fallback in nav and footer stacks, Haas Groot Disp appears in the footer.
- **SF Pro Text / SF Pro Display** appear inside product screenshots (mock UI text), and **Source Sans 3** is also loaded.

### Hierarchy

| Token | Size | Weight | Line | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 52px | 550 | 57.2px | normal | Hero h1 |
| `{typography.display-mobile}` | 26.52px | 550 | 29.172px | normal | Hero at 390px |
| `{typography.heading}` | 48px | 550 | 55.2px | normal | Section titles |
| `{typography.body}` | 14px | 550 | 18.9px | normal | Small copy |
| `{typography.button}` | 16px | 650 | 21.6px | normal | Primary buttons |
| `{typography.button-secondary}` | 14px | 550 | 18.9px | 0.28px | Header buttons |
| `{typography.nav}` | 14px | 650 | 18.2px | 0.14px | Header navigation and links |
| `{typography.body-dominant}` | 10px | 550 | none | none | Text inside product mock UI (SF Pro Text) |

Other measured sizes: 10.5px, 12px, 12.5px, 13px, 18px and 20px. The theme scale: `--type-size-4xs` 12px, `-3xs` 14px, `-2xs` 16px, `-xs` 18px, `-sm` 20px, `-sm-md` 24px, `-md` 32px, `-ml` 40px, `-lg` 48px, `-xl` 64px, `-2xl` 80px, `-3xl` 96px, `-4xl` 120px; weights `--type-weight-regular: 500`, `--type-weight-strong: 600`.

### Principles
- Weight is used finely (550, 650) rather than the usual 400/700 pair, giving a slightly heavy, confident texture.
- Headlines are sentence case, short and rhythmic ("Builder speed becomes business momentum").
- Letter-spacing is normal on display type and slightly positive on small UI labels (0.14px to 0.28px).
- Tab labels switch between dark (active) and light grey (inactive) at the same size.

### Font substitutes
ATSeasonSans is a licensed variable font. Substitutes: Inter or Geist with `font-weight: 550` on variable builds, or 500/600 on static families. Keep the 52px/57.2px hero ratio.

## Layout

### Spacing
Extracted usage scale: `{spacing.s1}` 2px, `{spacing.s2}` 3px, `{spacing.s3}` 4px, `{spacing.s4}` 5px, `{spacing.s5}` 6px, `{spacing.s6}` 8px, `{spacing.s7}` 9px, `{spacing.s8}` 10px, `{spacing.s9}` 12px, `{spacing.s10}` 14px. The published scale: `--spacing-xs` 4px, `-sm` 8px, `-sm-md` 12px, `-md` 16px, `-lg` 24px, `-xl` 32px, `-2xl` 40px, `-3xl` 48px, `-4xl` 64px, `-5xl` 96px, `-6xl` 128px and `--spacing-section-inset: 163px`.

### Grid and container
- Hero is centred in a narrow column; the product screenshot is wider and centred.
- Below, sections are left-aligned with a margin of about 30px and divided by 1px lines forming a table-like grid (three equal cells for logos, three equal tabs).
- The footer is a top bar (logo, five links, social icons) and then five link columns: Platform, Solutions, Resources, Learn, Company.

### Whitespace
- Large vertical gaps around the hero; the tagline band is a short strip with vertical dividers.
- Content sits on white with no background texture except the sky behind the product window.

## Elevation & Depth

Published shadow tokens: `--shadow-low` (`0px 0px 1px` + `0px 0px 2px` + `0px 1px 4px`, navy at low alpha), `--shadow-medium` (adds `0px 2px 16px`) and `--shadow-high` (`0px 4px 8px` and `0px 18px 32px`). Measured on the page:
- Cards: `rgba(0, 0, 0, 0.08) 0px 1px 3px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px` (`{components.card}`).
- Product window: a large layered shadow with `rgba(22, 22, 22, 0.22) 0px 18px 44px 0px`, and a modal-scale shadow `rgba(22, 22, 22, 0.3) 0px 30px 70px 0px`.
- Focus: `rgb(22, 110, 225) 0px 0px 0px 1px` with a soft blue glow.
Theme buttons add a thin inset ring and tiny blue-tinted shadow for the primary blue style. The primary dark button on the homepage is flat.

## Shapes

- `{rounded.xs}` 2px, `{rounded.sm}` 3px: tiny tags and inner mock-UI elements.
- `{rounded.md}` 4px: all marketing buttons (`{components.button-primary}`, `{components.button-secondary}`).
- `{rounded.lg}` 5px, `{rounded.xl}` 6px: mock UI controls.
- `{rounded.2xl}` 8px: cards (`{components.card}`).
- `{rounded.3xl}` 10px: link and nav-link hover areas.
- `{rounded.4xl}` 14px: product window and larger containers (the top corners are 4px 4px 0 0 on some panels).
- `{rounded.pill}` 9999px: the segmented control of use-case tabs and avatars.
Published radius tokens: `--radius-sm` 4px, `-md` 12px, `-lg` 16px, `-xl` 32px, `-full` 9999px.

## Components

### Buttons
- **button-primary** (Start building for free, Try the template for free): `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}`, `{rounded.md}`, padding 12px 24px, height 46px. Hover uses `{colors.primary-hover}`.
- **button-secondary** (Sign up for free): `{colors.ink-navy}` fill and border, white text, `{typography.button-secondary}`, `{rounded.md}`, padding 8px 16px, height 37px.
- Outlined button (Book Demo, Book a demo): transparent, 1px `{colors.ink-navy}` border, navy text.
- The CTAs sometimes end with an arrow glyph ("Start building for free →").

### Cards
- **card**: white `{colors.canvas}`, text `{colors.ink-card}`, `{rounded.2xl}`, 1px `{colors.border-hairline}` border, the two-layer soft shadow above. These are mock UI cards inside product screenshots (for example a goal card with "Achieve 99% Uptime", Q2, owner and progress).
- Section cells are borderless table cells divided by 1px lines.

### Navigation
- **nav**: announcement bar (pale blue, centred text with a link and close icon), then a header with cube logo, Platform/Solutions/Resources with chevrons, Enterprise, Pricing, and right-aligned actions; text colour `{colors.ink-nav}`.
- **nav-link** and **link**: `{typography.nav}` in `{colors.link}` for inline links, `{rounded.3xl}`.

### Tabs and segmented control
- Use-case control: pill track with translucent dark background, the active item a white pill.
- Section tabs: three equal cells; the active tab has dark text and a 1px dark underline, the inactive ones are light grey and larger.

### Footer
- **footer**: white, `{colors.ink-nav}`, five link columns, social icons in grey.

### Signature components
- Product window with a coloured sidebar and calendar, set over a sky photo.
- Tagline band in teal with vertical dividers.
- Customer logo strip with three equal cells.
- Dark AI demo panel with a blue-focus textarea.

## Design System Architecture

Airtable's newsroom page (https://www.airtable.com/newsroom) lists brand assets and official logos and a press contact, but no public design-system documentation or token package was found; see `SOURCES.json`. Observable facts from the shipped CSS:
- Tailwind-style variables (`--tw-*`, `--spacing`, `--bk-spacing: .25rem`) sit alongside a semantic layer: `--color-surface-*`, `--color-text-*`, `--color-border-*`, `--color-icon-*`, each with inverse counterparts, plus `--color-brand-*` hue names.
- A component theme layer with `--theme_*` names (`--theme_button-background-primary`, `--theme_button-shadow-secondary-hover`, `--theme_anchor-link-primary-hover`, `--theme_info-border`, `--theme_success-text`, `--theme_spotlight-background-*`). Each interactive state (active, disabled, focus, hover, loading) has its own token.
- A named gradient "spotlight" family for AI features (radial pastel orange-pink-lilac-blue backgrounds, and a strong multi-hue linear gradient).
- Type scale tokens `--type-size-*` and `--type-weight-*`; spacing tokens `--spacing-*`; shadow tokens `--shadow-low|medium|high`; radius tokens `--radius-*`.
- API documentation shows Airtable's REST API (https://airtable.com/developers/web/api/introduction) but that is a developer product, not a UI kit.

## Do's and Don'ts

### Do
- Use white and `{colors.primary}` for chrome; let product screenshots carry colour.
- Use 4px-radius buttons, 46px for the hero action and 37px for header actions.
- Set type in ATSeasonSans 550 for text and 650 for buttons and nav.
- Use 1px hairlines to build table-like grids.
- Pair every hero with a real product window.
- Keep copy plain and verb-led ("Start building for free").
- Use the blue only for links, focus and info.

### Don't
- Don't use the brand hues (red, orange, teal and so on) in UI chrome.
- Don't round buttons into pills; pills are for the segmented control.
- Don't add heavy drop shadows to buttons.
- Don't use 400 or 700 as the default weights; the system sits at 550 and 650.
- Don't use stock photography; the one photo is a sky behind the product.
- Don't center long paragraphs outside the hero.

## Responsive Behavior

### Breakpoints
Measurements exist at 1280px and 390px. No official breakpoint list was found.

### Mobile
- Hero h1 drops from 52px/57.2px to 26.52px/29.172px (`{typography.display-mobile}`).
- Other roles were not measured on mobile.

### Touch targets
- Primary buttons are 46px tall; header buttons 37px.

### Collapsing
- The header's five items and three actions are a desktop layout; its mobile collapse was not measured.

### Images
- The product window scales with the container and the sky photo bleeds to the viewport edges.

## Voice and Microcopy

- Direct, product-led: "Describe the app you need in plain words, or drop in a spreadsheet you already have."
- Parallel phrases for tabs: "From a sentence to a system", "Automate the busywork", "Run on shared data".
- Hero promise: "Other tools let you build with agents. Airtable lets you build with your whole team (agents included)."
- Calls to action: "Start building for free", "Book a demo", "Try the template for free".
- Announcement: "Bring your Airtable data into Claude."

## Imagery and Art Direction

- Product-first: real UI screenshots in white windows, not illustrations.
- The hero window sits on a cloudy blue sky photo, giving the page its only photographic note.
- Mock UI uses a rich purple sidebar, small avatars and pastel status chips (a mint "Compassionate leave" tag).
- Customer logos appear as black wordmarks in equal cells.
- The AI demo panel is a dark UI with large white labels and a blue focus outline.

## Iteration Guide

1. White canvas, `{colors.primary}` headings, a hairline grid for sections.
2. Hero: two-line centred headline, one sentence, a dark and an outlined button.
3. Follow with a product window on a calm background.
4. Use ATSeasonSans (or a substitute) at weights 550 and 650.
5. Keep corners at 4px for buttons and 8px for cards.
6. Add tokens only from the site's own `--theme_*`, `--color-*` and measured values, and cite them.
