---
version: alpha
name: Virgin Atlantic
category: "Airlines"
description: "Virgin Atlantic's 'Tailwind' digital design system as shipped on virginatlantic.com — Gotham served only at light weights (300/325/350), Virgin red #da0530 for every filled CTA (hover #b1062b, active #9a0728), near-black ink #030c16 on white, 4px-radius rectangular buttons and inputs 48px tall, a full-width red booking band, Upper Class purple #4f145b, a #111921 footer, and a semantic token set named --color-{background|text|icon|border}-{intent}-{variant}-{state}."

colors:
  primary: "#da0530"
  primary-hover: "#b1062b"
  primary-active: "#9a0728"
  primary-subtle-hover: "#fcf1f3"
  primary-subtle-active: "#f8e3e8"
  red-inverse: "#f92b47"
  brand-purple: "#4f145b"
  promotional-inverse: "#c256d7"
  canvas: "#ffffff"
  background-secondary: "#f5f5f6"
  background-tertiary: "#e6e7e8"
  surface-dark: "#111921"
  neutral-secondary-default: "#1c242d"
  neutral-primary-hover: "#262e37"
  neutral-active: "#303840"
  ink: "#030c16"
  ink-secondary: "#676d73"
  ink-tertiary: "#808489"
  on-primary: "#ffffff"
  border-subtle: "#d7d8da"
  border-bold: "#676d73"
  ghost-hover: "#030c160a"
  focus: "#a3cae3"
  error: "#a70d2e"
  error-inverse: "#f25878"
  info: "#0072bd"
  info-subtle: "#eef5fa"
  success: "#077950"
  success-subtle: "#ecf6ef"
  warning: "#be4a0a"
  warning-subtle: "#fbf2ee"
  flyingclub-gold: "#8e7333"
  flyingclub-silver: "#6b7880"

typography:
  display:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 60px
  display-mobile:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 325
    lineHeight: 40px
  heading-xl:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
  heading-xl-mobile:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 325
    lineHeight: 36px
  heading-md:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 325
    lineHeight: 32px
  heading-sm:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 350
    lineHeight: 28px
  body-lg:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 325
    lineHeight: 24px
  body-lg-strong:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
  body:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 325
    lineHeight: 22px
  body-strong:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 350
    lineHeight: 22px
  caption:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 325
    lineHeight: 16px
  ui-small:
    fontFamily: "Gotham, Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 325
    lineHeight: 18px

rounded:
  sm: 4px
  md: 8px
  lg: 12px
  xl: 20px
  circle: 50%

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 32px
  xxl: 40px
  xxxl: 48px
  section: 56px
  section-lg: 64px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.sm}"
    padding: 11px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.sm}"
    padding: 11px 16px
    height: 48px
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.sm}"
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 9px 12px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.sm}"
    padding: 11px 16px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.primary-subtle-hover}"
    textColor: "{colors.primary-hover}"
    borderColor: "{colors.primary-hover}"
    rounded: "{rounded.sm}"
  button-ghost:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.sm}"
    padding: 11px 16px
    height: 48px
  button-ghost-hover:
    backgroundColor: "{colors.ghost-hover}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.ui-small}"
  text-link-hover:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.ui-small}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border-bold}"
    typography: "{typography.body-lg}"
    rounded: "{rounded.sm}"
    padding: 11px 32px 11px 16px
    height: 48px
  booking-band:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading-sm}"
  booking-panel:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  card-hero-text:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 48px 48px 40px
  card-info-tile:
    backgroundColor: "{colors.background-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-lg}"
    height: 80px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.ui-small}"
    padding: 48px 0px 0px
---

## Overview

Virgin Atlantic's website is red, white and quiet. The US homepage capture opens with a slim white
header (the script "virgin atlantic" logo with its flying-lady tail mark and Delta/SkyTeam badge;
Sign in · My booking · Menu on the right), then a full-bleed **Virgin red** band headed
"So, where next?" that holds a white booking panel: a "Search for Reward Seats" toggle, five
outlined fields with notched labels (Flying from · Flying to · Journey · When · Who) and a red
"Search flights" button. Beneath, a carousel hero — the Houses of Parliament with a red London bus —
carries a white text card ("Your direct route to the UK") with a small red CTA.

Then the page turns editorial: four light-grey info tiles with red buttons, "Across the pond and
beyond…" with a sunset Taj Mahal photograph, "Make more of your journey" with three photo cards
(Upper Class lounge in purple light, a passenger toasting in the cabin, crew in red uniforms) each
followed by a red outline button, and holiday promos. The footer is a deep blue-black `#111921`.

Type is the defining texture: **Gotham** at *light* weights only — 300 for headlines, 325 for
body, 350 for emphasis. Headlines like "Across the pond and beyond…" at 40px/300 feel airy and
elegant; nothing on the page is bold. This matches the Tailwind team's own description: "more white
space, thinner type weights and more sophisticated photography".

**Key Characteristics:**
- Virgin red `#da0530` — the booking band, every filled CTA, outline buttons and red text links.
- Near-black ink `#030c16`; secondary `#676d73`; tertiary `#808489`.
- Gotham 300/325/350 only; headlines 48/300 and 40/300.
- Rectangular buttons and inputs: 4px radius, 48px tall (42px for compact CTAs).
- Red full-bleed booking band with a white 12px-radius panel.
- Photography in warm, cinematic light; Upper Class purple `#4f145b` as the secondary brand colour.
- Exhaustive semantic tokens: `--color-background-interactive-brand-red-hover`, `--color-text-neutral-secondary`, etc.

## Colors

> Source: `web/data/extracted/virgin-atlantic.json` (https://www.virginatlantic.com/en-US). Names in brackets are the site's own `:root` variables.

### Brand
- **Virgin Red** (`{colors.primary}` — `#da0530`, `--color-background-brand-red`, `--color-background-static-interactive-red-default`, `--color-text-brand-red`): 633 px² of red area; booking band, CTAs, red links, Economy cabin colour (`--color-background-cabin-economy`).
- **Red Hover** (`{colors.primary-hover}` — `#b1062b`, `--color-background-static-interactive-red-hover`): measured hover of every red button.
- **Red Active** (`{colors.primary-active}` — `#9a0728`, `--color-background-static-interactive-red-active`).
- **Red subtle hover / active** (`#fcf1f3` / `#f8e3e8`, `--color-background-interactive-brand-red-hover` / `-active`): fills behind outline red buttons.
- **Red Inverse** (`{colors.red-inverse}` — `#f92b47`, `--color-text-brand-red-inverse`): red on dark surfaces.
- **Brand Purple** (`{colors.brand-purple}` — `#4f145b`, `--color-background-brand-purple`, `--color-background-cabin-upperclass`, also promotional bold).
- **Promotional inverse** (`#c256d7`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`, `--color-background-neutral-primary`).
- **Background Secondary** (`{colors.background-secondary}` — `#f5f5f6`, `--color-background-neutral-secondary`): info tiles.
- **Background Tertiary** (`{colors.background-tertiary}` — `#e6e7e8`, `--color-background-neutral-tertiary`).
- **Surface Dark** (`{colors.surface-dark}` — `#111921`, `--color-background-neutral-secondary-inverse`): footer (1,469 area).
- Dark interactive neutrals: `#1c242d` (secondary default), `#262e37` (hover), `#303840` (active).

### Text
- **Ink** (`{colors.ink}` — `#030c16`, `--color-text-neutral-primary`): 2,650 weighted chars.
- **Secondary** (`{colors.ink-secondary}` — `#676d73`, `--color-text-neutral-secondary`, `--color-text-interactive-neutral-primary-hover`): measured hover of "Got a discount code?".
- **Tertiary** (`{colors.ink-tertiary}` — `#808489`): legal copy ("TRAVEL AWARE…"), disabled-on-dark.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).

### Borders & focus
- Subtle `#d7d8da` (`--color-border-neutral-subtle`); bold `#676d73` (`--color-border-neutral-bold`, input borders); minimal `#e6e7e8`.
- Focus `#a3cae3` (`--color-border-interactive-focus`) — a pale blue, distinct from red.
- Ghost hover overlay `rgba(3,12,22,.04)` → `#030c160a` (measured on Sign in / My booking / Menu).

### Semantic
Error `#a70d2e` (inverse `#f25878`) on `#fcf1f3`; info `#0072bd` on `#eef5fa`; success `#077950` on `#ecf6ef`; warning `#be4a0a` on `#fbf2ee`.

### Flying Club
Gold `#8e7333` (inverse `#bda05d`), silver `#6b7880` (inverse `#99a4af`), red `#da0530`.

## Typography

### Font Family
`Gotham, Helvetica, Arial, sans-serif`. `document.fonts` reported Gotham at **300, 325 and 350** —
the site maps three Gotham cuts (the CSS corpus also names `Gotham-Light`, `Gotham-Book`,
`Gotham-Bold`) onto fine-grained numeric weights so that "regular" text is 325, slightly lighter
than a standard 400. Open Sans appears only in a third-party widget (8 chars).

### Hierarchy

| Token | Size | Weight | Line height | Measured on |
|---|---|---|---|---|
| `{typography.display}` | 48px | 300 | 60px | h1 "Your direct route to the UK" |
| `{typography.display-mobile}` | 32px | 325 | 40px | same h1 at 390px |
| `{typography.heading-xl}` | 40px | 300 | 48px | h2 "Across the pond and beyond…" |
| `{typography.heading-xl-mobile}` | 28px | 325 | 36px | same h2 at 390px |
| `{typography.heading-md}` | 24px | 325 | 32px | menu/section titles ("Destinations") |
| `{typography.heading-sm}` | 18px | 350 | 28px | card titles, "So, where next?" band title |
| `{typography.body-lg}` | 16px | 325 | 24px | buttons, inputs, paragraphs |
| `{typography.body-lg-strong}` | 16px | 350 | 24px | header buttons, emphasis |
| `{typography.body}` | 14px | 325 | 22px | most body copy, small CTAs |
| `{typography.body-strong}` | 14px | 350 | 22px | sub-titles ("A calmer way to take off") |
| `{typography.caption}` | 12px | 325 | 16px | legal copy |
| `{typography.ui-small}` | 12px | 325 | 18px | root `<body>`, footer, labels |

Size frequency on the page: 16px (1,598), 14px (1,394), 12px (903), 24px (209), 40px (162), 18px (156), 48px (75).

### Principles
- Light is the brand: headlines 300, body 325, emphasis 350 — never 600+.
- Line height is a fixed step: +8px for 14/16/24 sizes (22/24/32), +12px at 48px (60).
- Sentence case everywhere; the ellipsis in "Across the pond and beyond…" shows the playful, conversational tone.
- No letter-spacing is applied to Gotham text.

### Note on Font Substitutes
Gotham is a commercial typeface licensed by Virgin Atlantic; it is not free. The site's fallback
is **Helvetica, Arial**. When substituting, keep the weights light (Helvetica Light / Arial at 300
where available) — a 400-weight fallback will look noticeably heavier than the 325 "regular".

## Layout

### Spacing System
- **Measured gaps:** 8px (121), 16px (12), 32px (5), 24px (3).
- **Measured paddings:** 4px (71), 16px (35), 40px (23), 11px (15, button vertical), 48px (11), 12px (11), 7px, 9px, 64px, 24px, 56px.
- **Tokens:** `{spacing.xxs}` 4 · `{spacing.xs}` 8 · `{spacing.sm}` 12 · `{spacing.md}` 16 · `{spacing.lg}` 24 · `{spacing.xl}` 32 · `{spacing.xxl}` 40 · `{spacing.xxxl}` 48 · `{spacing.section}` 56 · `{spacing.section-lg}` 64.
- Button padding is 11px 16px (48px) or 9px 12px (42px) — vertical values chosen so a 1px border lands on a 48/42px box.

### Grid & Container
- Content container ~1200px with 40px side margins at 1280px (hero text card starts 40px in).
- Booking panel: 5 fields + button in a single row.
- Info tiles: 4 equal columns; journey cards: 3 columns; feature row: image left (~470px) / text right.
- Hero text card is 608px wide with padding 48px 48px 40px.

### Whitespace Philosophy
Generous white between sections, but dense, efficient controls. The red booking band is the only
large colour field; everything else is white with photography.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Cards, tiles, buttons |
| 1 | `0 4px 16px 0 rgba(3, 12, 22, 0.16)` | Booking panel / floating panels (only shadow measured on the page) |
| Overlay | `0 0 0 99999px rgba(0,0,0,.75)` | Modal scrim (CSS corpus) |
| Transparency | `--color-background-transparent-contrast-{4…96}` (`rgba(3,12,22,α)`) and `-inverse-{4…96}` | Hover overlays, scrims |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 4px | buttons, inputs, hero text card (76 occurrences — the house radius) |
| `{rounded.md}` | 8px | CSS corpus — small panels |
| `{rounded.lg}` | 12px | booking panel |
| `{rounded.xl}` | 20px | toggle track |
| `{rounded.circle}` | 50% | carousel controls, avatar/icon buttons |

Split radii also appear: `0px 4px 4px 0px` on grouped inputs and `0px 0px 3px 3px` on the rotated Feedback tab.

### Photography Geometry
Rectangular, unrounded photography with cinematic warm light and saturated reds/purples (lounges,
cabin, crew). Hero imagery is full-bleed edge to edge; editorial images sit square-cornered in the grid.

## Components

### Buttons
**`button-primary`** — "Search flights": `#da0530`, white 16px/325, padding 11px 16px, 48px tall, 4px radius, 1px border. Hover `#b1062b` (measured), active `#9a0728`.
**`button-primary-small`** — "Flights from $635pp", "See details", "Find out more": same red, 14px/325/22px, padding 9px 12px, 42px.
**`button-secondary`** — "Discover India", "Explore our lounges": white, 1px `#da0530` border, red 16px text, 11px 16px, 48px, 4px radius. Hover tokens: `#fcf1f3` fill, `#b1062b` text/border.
**`button-ghost`** — header "Sign in", "My booking", "Menu": transparent, `#030c16` 16px with icon, 48px; hover overlay `rgba(3,12,22,.04)`.

### Inputs & Forms
**`text-input`** — white, 1px `#676d73` border, 4px radius, padding 11px 32px 11px 16px (room for a trailing icon), 48px tall, 16px/325 text. Labels sit on the top border ("notched"), 12px. Placeholder "e.g. London" in `#808489`.
Toggle "Search for Reward Seats" — dark track with white knob, 20px radius.

### Navigation
**`nav`** — 80px white header (64px on mobile): logo left; ghost buttons with icons right. "Menu" opens a full menu with 24px/325 section titles.
Skip links ("Skip to main menu", "Skip to content", "Skip to footer") precede the header.

### Cards
**`card-hero-text`** — white, 4px radius, padding 48px 48px 40px, overlapping the hero photo; 48px/300 heading, 14px body, small red CTA.
**`card-info-tile`** — `#f5f5f6` tile, 18px/350 title, 12px icon line, red small CTA at the bottom.
**Journey card** — photo, 24px/325 title, 14px/350 subtitle, red outline button; no container.

### Booking band
**`booking-band`** — full-width `#da0530` with "So, where next?" in white 18px; **`booking-panel`** — white, 12px radius, holding the form.

### Footer
**`footer`** — `#111921`, white 12px/18px text, padding-top 48px, columns: Where we fly · Experience · Deals · Flying Club · About Virgin Atlantic.

## Design System Architecture

Virgin Atlantic's digital design system is called **Tailwind** (unrelated to Tailwind CSS). Its
creation is documented by Digital Product Design Manager Ed Vinicombe in
[Creating Virgin Atlantic's Digital Design System — Part 1](https://medium.com/virgin-atlantic-digital/creating-virgin-atlantics-digital-design-system-part-1-e91f9100804b)
(Virgin Atlantic Digital, 10 Feb 2020): the goal was to "create, govern and promote a digital design
system that will guarantee a world-class user experience across our entire digital estate including
the website, app, in-flight entertainment systems … check-in kiosks", scalable to partner Delta.
The partner hub lists "Tailwind — Our digital design language. The guidelines and standards on the use
of our logo, colours, photography and more" alongside the Brand World asset bank
([Virgin Atlantic partner hub — brand library](https://flywith.virginatlantic.com/gb/en/partner-hub/brand-library.html)).
The documentation itself (ZeroHeight) and Storybook are not public.

**Token architecture** (measured on `:root`, 212 variables). Purely semantic, structured as
`--color-{property}-{category}-{intent}-{variant?}-{state}`:
- property: `background`, `text`, `icon`, `border`;
- category: `neutral`, `brand`, `interactive`, `static`, `semantic`, `cabin`, `flyingclub`, `transparent`;
- examples verbatim: `--color-background-interactive-brand-red-hover: #fcf1f3`, `--color-background-static-interactive-red-active: #9a0728`, `--color-text-interactive-neutral-primary-hover: #676d73`, `--color-border-interactive-focus: #a3cae3`, `--color-icon-cabin-upperclass: #4f145b`, `--color-background-transparent-contrast-64: rgba(3, 12, 22, 0.64)`.
Legacy `--temp-token-color-transparent-*` variables show an in-progress migration.

**Theming.** Every role has an `-inverse` twin (`--color-text-brand-red-inverse: #f92b47`, `--color-background-neutral-primary-inverse: #030c16`) for dark surfaces; `static-*` tokens stay fixed regardless of surface. Business themes are tokenised by cabin (economy red, premium `#030c16`, upper class purple) and Flying Club tier (red, silver, gold).

**Type & spacing.** One family (Gotham) with numeric weights 300/325/350; line heights on a +8px rhythm; spacing on 4px steps (4, 8, 12, 16, 24, 32, 40, 48, 56, 64) with 11px/9px vertical button padding to offset 1px borders.

**Component model.** The article reports "over 200 components" approved through bi-weekly sprint reviews and added to the Tailwind library, hosted in Storybook as "a single source of truth", designed in Figma, documented in ZeroHeight, and "version controlled using Github … ready to clone and use for third parties". On the homepage: button (primary/secondary/ghost, two sizes), input with notched label, select, date field, toggle, carousel with pause/prev/next, tile, card, booking band, header, footer, feedback tab.

**Accessibility.** Three skip links; a dedicated focus colour `#a3cae3`; 48px controls; red text links paired with borders rather than relying on colour alone.

**Delivery.** React components in Storybook (per the article); tokens compiled to CSS custom properties on virginatlantic.com.

## Do's and Don'ts

### Do
- Use `#da0530` for filled CTAs, the booking band and outline buttons; hover `#b1062b`.
- Keep Gotham light: 300 for display, 325 for text, 350 for emphasis.
- Keep buttons and inputs rectangular (4px) and 48px tall; compact CTAs 42px.
- Use `#030c16` ink, `#676d73` secondary, `#808489` legal text.
- Let photography carry warmth — cinematic light, reds and purples.
- Use `-inverse` tokens on `#111921` and photography.

### Don't
- Don't bold headlines or use 700 weights.
- Don't use pill buttons or large radii on CTAs.
- Don't introduce new accent hues — the palette is red, purple, neutrals.
- Don't use red for body text; red text is for links/outline buttons only.
- Don't use pure black (`#000000`) for text.

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px.

| Element | Desktop | Mobile |
|---|---|---|
| Header | 80px | 64px |
| h1 | 48px/300/60px | 32px/325/40px |
| h2 | 40px/300/48px | 28px/325/36px |
| Primary CTA | inline 42–48px | full-width 342px, 42px |

### Touch Targets
48px buttons and inputs; compact CTAs 42px; carousel controls circular.

### Collapsing Strategy
- Info tiles 4 → 1 column; journey cards 3 → 1.
- Heading weights step *up* slightly on mobile (300 → 325) to hold legibility at smaller sizes.
- Mobile font sizes: 16, 14, 12, 24, 18, 28, 32, 13.33, 40px.

### Image Behavior

## Iteration Guide

1. Start with the red booking band and white panel; 48px inputs with notched labels; red "Search flights".
2. Set every headline in Gotham 300; check no weight exceeds 350.
3. Choose button variant: filled red (primary), outline red (secondary), ghost (header).
4. Name new tokens in the house pattern `--color-{background|text|icon|border}-{category}-{intent}-{state}`.
5. Verify hovers: red → `#b1062b`; ghost → `rgba(3,12,22,.04)`; text link → `#676d73`.
6. Re-run `node web/scripts/verify-designs.mjs --slug=virgin-atlantic` after edits.
