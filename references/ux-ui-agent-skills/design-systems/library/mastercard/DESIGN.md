---
version: alpha
name: Mastercard
category: "Fintech & Crypto"
description: Mastercard's website as measured on mastercard.com — a warm cream canvas (#f3f0ee) with warm near-black ink (#141413), the proprietary "mccom" typeface at weights 450 and 500 with negative tracking (64px / 64px display, -1.28px), 20px-radius pill buttons, large stadium-shaped photo cards, and a burnt signal orange (#cf4500) in the Made design tokens.
colors:
  canvas: "#f3f0ee"
  surface-page: "#fcfbfa"
  surface-white: "#ffffff"
  surface-black: "#000000"
  ink: "#141413"
  primary: "#141413"
  on-primary: "#f3f0ee"
  ink-inverse: "#ffffff"
  ink-on-dark-muted: "#d1cdc7"
  ink-helper: "#555250"
  ink-placeholder: "#777470"
  border-light: "#e8e5e1"
  signal-orange: "#cf4500"
  orange-accent: "#f37338"
typography:
  display:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 52.8px
    letterSpacing: "-0.96px"
  display-xl:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 120px
    fontWeight: 500
    lineHeight: 120px
    letterSpacing: "-2.4px"
  heading:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-0.72px"
  body:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 20px
    fontWeight: 450
    lineHeight: 26px
  button:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 27px
    letterSpacing: "-0.32px"
  link:
    fontFamily: mccom, SofiaSans, Arial, sans-serif
    fontSize: 16px
    fontWeight: 450
    lineHeight: 20.8px
rounded:
  xs: 6px
  sm: 20px
  md: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 24px
    height: 40px
    borderColor: "{colors.ink}"
  label-pill:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.md}"
    padding: 4px 40px
    height: 80px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-dark-muted}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 12px 0px 16px
    height: 40px
    borderColor: "{colors.ink-on-dark-muted}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-inverse}"
    padding: 48px 100px 148px
---

## Overview

Mastercard's homepage is calm, warm and very rounded. The page sits on a cream (`{colors.canvas}`, `#f3f0ee`), with near-white panels (`{colors.surface-page}`, `#fcfbfa`) and a warm near-black (`{colors.ink}`, `#141413`) for text, the primary button and the footer. There is no cool gray anywhere in the measured palette: every neutral has a slightly warm cast, which is how the site's own `--made-color-gray-*` ramp is built (`#fcfbfa`, `#f3f0ee`, `#e8e5e1`, `#d1cdc7`, `#b1ada6`, `#777470`, `#555250`, `#323231`, `#141413`).

In the capture (which is horizontally cropped, so the left edge of the hero is cut off), the header is a floating white capsule with the circles mark at the left, five centered links (`For you`, `For business`, `For the world`, `For innovators`, `News and trends`) and a circular search button at the right. Below it a very large, softly shadowed rounded panel fills the hero and its bottom corner is a big arc. Further down, a statement (`Unlocking potential for people, businesses and governments, all around the world.`) sits beside a carousel of **stadium-shaped photo cards**: a wide photograph of two men holding football shirts with a white pill caption (`Messi shirt swap`), next to a black-and-white archival photograph with a smaller caption (`Built in a small business`) and a tiny `Story` tag. Under the carousel a progress control shows an orange active bar, four dots and a circular pause button; circular outlined arrow buttons sit above it. Large headline text (up to 120px) continues below.

Mastercard's brand mark is two interlocking circles, red and yellow. The 2019 press release says the symbol now stands without the word "mastercard"; the mark appears at the header's left in the capture. The website's interface, however, uses almost no red or yellow: its accent is a burnt orange, `{colors.signal-orange}` (`#cf4500`) in the Made tokens and a lighter `{colors.orange-accent}` (`#f37338`) that is visible on the carousel's active bar.

**Key Characteristics:**
- Warm cream canvas, warm near-black ink; no pure black for text.
- One typeface (`mccom`, with Sofia Sans and Arial fallbacks), weights 450 / 500 / 700 only.
- Headline tracking at about -2% (-1.28px at 64px, -2.4px at 120px).
- Fully rounded shapes: 20px buttons and inputs, 40px label pills, large stadium and arc image frames.
- Orange is used sparingly: indicators, focus and selected states.
- Photography is editorial and people-led (sports, small business history), cropped to stadium shapes.
- A real, public design system (Made) sits behind the page's CSS variables.

## Colors

> **Source pages:** home (`/th/en.html`), desktop 1280px and mobile 390px, plus the page's root CSS variables (`--made-*`).

### Surfaces
- **Canvas** (`{colors.canvas}` — `#f3f0ee`): The page background (`--made-color-background-gray-lightest`, gray 01.5).
- **Surface page** (`{colors.surface-page}` — `#fcfbfa`): The largest area by DOM weight (2563); the hero panel and white-ish sections (`--made-color-gray-01`).
- **Surface white** (`{colors.surface-white}` — `#ffffff`): Pill captions and the nav capsule (the capsule also appears at 80% white, `#ffffffcc`).
- **Surface black** (`{colors.surface-black}` — `#000000`): A large measured area (854); the page's video / dark media backgrounds. The element was not identified.
- **Footer and header dark** (`{colors.ink}`): `--made-footer-color-background` and `--made-header-color-background` are `#141413`.
- **Other surfaces in tokens:** `#faf7f5` (`background-01`), `#e8e5e1` (`background-02`).

### Text
- **Ink** (`{colors.ink}` — `#141413`): Headlines and body; `--made-color-text-default-on-light`; 1154 characters.
- **Ink inverse** (`{colors.ink-inverse}` — `#ffffff`): Text on the dark footer; `--made-color-text-default-on-dark` (570 characters).
- **On primary** (`{colors.on-primary}` — `#f3f0ee`): The label on the dark button, the cream canvas color.
- **Ink on dark muted** (`{colors.ink-on-dark-muted}` — `#d1cdc7`): Text and border of the dark footer input (`gray-02.5`).
- **Ink helper** (`{colors.ink-helper}` — `#555250`) and **Ink placeholder** (`{colors.ink-placeholder}` — `#777470`): `--made-color-text-helper` and `--made-color-text-placeholder`.

### Action and accent
- **Primary** (`{colors.primary}` — `#141413`): Fill of the measured `Learn more` button. In Made's role tokens the default primary action background is `#000000` with hover `#9a3a0a` and active `#331505`, and the action text color on primary is white; the live button measures `#141413` with `#f3f0ee` text, so those measured values are used here.
- **Signal orange** (`{colors.signal-orange}` — `#cf4500`): `--made-color-brand-primary`, `--made-color-action-primary-default`, `--made-color-action-border-focus` and the selected-checkbox fill. Its dark steps are `#852d01` and `#331505`, light `#d0805b`.
- **Orange accent** (`{colors.orange-accent}` — `#f37338`): `--made-color-accent-02`, and the orange active bar under the carousel in the capture.
- **Border light** (`{colors.border-light}` — `#e8e5e1`): `--made-color-border-default-on-light`.

### Feedback and data colors (in tokens, not seen on the homepage)
Error `#ee0000` (light `#fadede`), success `#038a00` (light `#dff7df`), information `#ffc61e` (light `#fff4d1`), warning `#f38b00`. Palette families run in seven steps: gold, green, orange, red, teal, yellow; visualization colors `#0023cf`, `#ac00cf`, `#cf008a`. None is tokenised here.

### Brand mark
The press release describes the red and yellow interlocking circles; the page does not list their hex values in any source opened, so none is given.

## Typography

### Family
- **`mccom`** is the declared family, loaded at weights 450, 500 and 700, with fallbacks `SofiaSans, Arial, sans-serif`. It is the dominant family (1872 characters; Arial accounts for 10).
- The Made tokens declare `MarkOffcForMC` (regular, light, medium, bold) and `MarkForMCNrw` (narrow) families with `Arial, Helvetica` fallbacks; whether `mccom` is the same design as these was not established.
- The page also loads `mccom-icons` (an icon font) and VideoJS for video controls.

### Hierarchy
| Token | Size | Line | Weight | Tracking | Role |
|---|---|---|---|---|---|
| `{typography.display-xl}` | 120px | 120px | 500 | -2.4px | Large statement text below the carousel |
| `{typography.display}` | 64px | 64px | 500 | -1.28px | Hero h1 `Powering economies and empowering people` |
| `{typography.display-mobile}` | 48px | 52.8px | 500 | -0.96px | h1 at 390px |
| `{typography.heading}` | 36px | 72px | 500 | -0.72px | Pill captions, `Mastercard Impact Report` |
| `{typography.body}` | 20px | 26px | 450 | normal | Lead copy |
| `{typography.button}` | 16px | 27px | 500 | -0.32px | Buttons |
| `{typography.link}` | 16px | 20.8px | 450 | normal | Links, inputs |

By character count: 14px is the most used size (678), then 20px (399), 36px (300), 16px (228), 120px (90) and 64px (77). Weights: 500 (1089), 450 (613), 700 (170), 400 (10).

### Principles
- **Half-step body weight.** 450 is lighter than a bold-ish 500 headline and firmer than 400; body and links use it.
- **Tight headings.** Tracking of -0.02em on headings and buttons (-0.32px at 16px).
- **Sentence case.** Nav and headlines are sentence case in the capture; the footer shows `NEED HELP?` in capitals as an eyebrow.
- **Very large type is part of the layout:** the 120px statement fills columns and is cut by the viewport edge in the capture.

### Font substitutes
`mccom` is proprietary. The site's own fallback is Sofia Sans (a free Google font) then Arial; use those, at weights 450 and 500 where the variable font allows.

## Layout

- **Header:** a floating capsule inset from the viewport edges, inset by a margin from the viewport edges, with a pill-rounded outline and a soft shadow; items are evenly spaced around the center.
- **Hero:** an oversized rounded panel on the left, a headline overlay and a text column on the right (`Unlocking potential...`), as far as the cropped capture shows.
- **Carousel:** photo cards of different widths on one row, the active card large and the next one smaller, with overflow off the right edge.
- **Rhythm:** spacing values measured: gaps of 16px, 32px, 12px; paddings of 24px, 8px, 40px, 32px, 6px, 16px. `{spacing.s1}` to `{spacing.s8}` are those values.
- **Footer:** `{colors.ink}` fill; padding `48px 100px 148px`; a support strip (`We are always here when you need us.`, `NEED HELP?`, `Get support`) and an input field.
- **Page height:** the desktop page is about 1280px wide; the capture shows the first screens only.
- **Made grid:** the Made framework describes a 12-column mobile-first flexbox grid; whether the homepage uses it was not verified.

## Elevation & Depth

- **Soft diffuse shadows:** measured `0 4px 24px rgba(0,0,0,0.04)` on small floating elements and a very large `0 70px 110px rgba(0,0,0,0.25)` under the big hero card.
- **Made shadow tokens:** `--made-shadow-default` `0 2px 10px rgba(20,20,19,0.20)` and `--made-shadow-toggle` `0 5px 10px rgba(20,20,19,0.15), 0 2px 2px rgba(20,20,19,0.3)`.
- **Gradient fade:** the hero panel in the capture darkens toward its bottom edge (a white-to-gray gradient inside the rounded shape).
- **Overlay:** `--made-backdrop-color-background` is `rgba(20,20,19,0.7)` for modals.
- **Layers by shape:** large rounded shapes overlap the cream canvas; edges are defined by shape and shadow, not by borders.

## Shapes

- **20px** (`{rounded.sm}`): the primary button and the dark input; `--made-button-border-radius` is 20px; `--made-border-radius-07` is 20px.
- **40px** (`{rounded.md}`): label pills (`Mastercard Impact Report`, 80px high).
- **6px** (`{rounded.xs}`): small corners (19 uses); `--made-border-radius-03`.
- **Pill / circle** (`{rounded.pill}`): the nav capsule, carousel controls, link areas (radius 1000px or 999px in several places, and 50% for circles).
- **Large radii:** measured on image frames and panels at 50px, 65px, 80px and 99px; the hero card has a very large corner arc.
- **Made radius tokens:** 2px, 4px, 6px, 8px, 16px, 20px, 28px and circle, with `default` 4px, `large` 8px, `small` 2px.
- **Stadium** is the signature shape: image cards are fully rounded on one or both ends, as seen in the carousel of the capture.

## Components

### Buttons
- **`button-primary`** — `{colors.ink}` fill and border, `{colors.canvas}` label, `{typography.button}`, 40px high, `6px 24px` padding, `{rounded.sm}`. Instance: `Learn more`.
- **Made button roles** (tokens, not measured on the page): primary default background `#000000`, secondary default border `#cf4500`, on-dark default `#ffffff`, disabled `#b1ada6`, focus border `#cf4500` (`#ffffff` on dark).
- **Round icon buttons:** outlined circles with a 1px dark border for arrows, pause and search.

### Pills and labels
- **`label-pill`** — `{colors.surface-white}`, `{colors.ink}`, `{typography.heading}`, 80px high, padding `4px 40px`, `{rounded.md}`; seen as `Mastercard Impact Report` and as photo captions. Small captions (`Built in a small business`) use the same shape at a smaller size.
- **Tag** — a tiny white pill (`Story`) above a caption.

### Navigation
Floating white capsule with five links in `{typography.link}` and a circular search button; the mark sits at the left. The nav role was not detected by the extractor, so its dimensions come from the capture only.

### Carousel
Stadium-shaped photo cards, outlined circular previous / next buttons, a progress control with an orange active bar (`{colors.orange-accent}`), dots and a pause button.

### Inputs
`text-input` — in the dark footer: `{colors.ink}` fill, `{colors.ink-on-dark-muted}` text and 1px border, 40px high, `0px 12px 0px 16px` padding, `{rounded.sm}`. Form borders elsewhere use `--made-forms-color-border-default` `#555250`.

### Footer
`footer` — `{colors.ink}`, white text, `padding: 48px 100px 148px`.

### Search
The header has a search button; the page's CSS defines `--aa-*` and `--ais-*` variables for a search panel, which was not captured.

## Design System Architecture

Mastercard has a public design system, **Made** (Mastercard Adaptive Design Ecosystem).
- **Repository:** [github.com/mastercard/made](https://github.com/mastercard/made) with packages `made-css` and `made-design-tokens`, a Storybook and plugins. The README describes tech-agnostic tokens for color, typography and spacing, class-based components with BEM naming, a 12-column flexbox grid, utilities and WCAG 2.1 compliance, with theming by loading tokens dynamically (dark mode, compact variants, brand updates).
- **Tokens:** [made-design-tokens](https://github.com/mastercard/made/tree/develop/packages/made-design-tokens) stores role-based tokens in a platform-agnostic format and builds them with Style Dictionary for CSS and JSON (web), XML (Android) and Swift (iOS); `src/webUI` and `src/mobileUI` hold the sources. Its README gives `made-color-background-default` as an example of a role token and says the Made button has tokens for color, border-radius, size, spacing, font size, font families and line height.
- **On the live site:** the page ships 400 root variables, with a `--made-*` family: `--made-color-*` (grays 01 to 07 with half steps, accent 01 to 06, feedback, action, background, border, text, brand), `--made-font-family-*`, `--made-font-size-*`, `--made-space-*-x`, `--made-size-*-x`, `--made-border-radius-*`, `--made-shadow-*`, and component families for button, checkbox, header, footer, forms, pill, search, table and connect. The shared names suggest the page is built on Made; the repository's values were not compared to the shipped ones.
- **Role naming:** `action-{background|border|text}-{primary|secondary|on-dark}-{default|hover|active}`; `color-text-{default-on-light|default-on-dark|helper|placeholder}`; `feedback-{background|border|text}-{error|success|information|warning}` with `-light` variants.
- **Library variables:** `--swiper-navigation-size`, `--aa-*` and `--ais-*` appear in the root variables; the libraries behind them were not confirmed.
- **Brand center:** the Mastercard Brand Center page returned HTTP 403, so brand-guideline rules are not cited here.

## Do's and Don'ts

### Do
- Use the cream `{colors.canvas}` with `{colors.ink}` text; keep neutrals warm.
- Make buttons and inputs 40px high with `{rounded.sm}` corners.
- Set headings at weight 500 with -2% tracking and body at 450.
- Crop photography into stadium and arc shapes with generous radii.
- Use role tokens (`made-color-background-default`) rather than raw values where possible.
- Reserve orange (`{colors.signal-orange}`, `{colors.orange-accent}`) for focus, selection and progress.
- Let large type run to the edge when it supports the layout.

### Don't
- Don't use cool grays or pure black text.
- Don't use the mark's red and yellow as interface colors; the measured UI does not.
- Don't use sharp rectangular image frames; the page's images are rounded.
- Don't add heavy borders; edges come from shape and soft shadow.
- Don't use weight 400 for body copy where 450 is specified.
- Don't treat the unverified colors of the mark as brand tokens; none was cited.

## Responsive Behavior

- **Headline:** 64px / 64px down to 48px / 52.8px at 390px (`{typography.display-mobile}`); tracking -1.28px to -0.96px.
- **Large statement:** 120px at desktop; its mobile size was not recorded.
- **Header:** the capsule nav is the desktop pattern; the 390px pattern was not inspected.
- **Carousel:** at desktop it overflows the right edge; a pause control is present.
- **Breakpoints:** Made's grid is mobile-first; breakpoint values were not read.
- **Touch targets:** buttons and inputs are 40px high; circular controls were not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.surface-page}` for raised panels and `{colors.ink}` for text.
2. Set `mccom` (or Sofia Sans) at 500 for headings with -2% tracking and 450 for body.
3. Build buttons at 40px, `{rounded.sm}`, ink fill with cream label.
4. Shape imagery as stadiums and arcs; add a white pill caption.
5. Add orange only for indicators, focus and selected states.
6. Use Made tokens (`made-color-*`) as the vocabulary for new roles.
7. Keep the footer dark `{colors.ink}` with white text.
8. Validate: `node web/scripts/verify-designs.mjs --slug=mastercard`.

### Open questions
- The mark's exact red and yellow values are not cited.
- The Brand Center (HTTP 403) and the Made docs site were not readable.
- The black `#000000` surface and the element using `#d1cdc7` text were not fully identified.
