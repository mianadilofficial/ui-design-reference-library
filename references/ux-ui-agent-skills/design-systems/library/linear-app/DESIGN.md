---
version: alpha
name: Linear
category: "Productivity & SaaS"
description: Linear's marketing site as measured on linear.app — a near-black canvas (#08090a) with panel surfaces (#0f1011), Inter Variable at its signature 510 weight with tight negative tracking (64px / 64px display, -1.408px), a light pill call to action (#e5e5e6 fill, 9999px radius, 32px tall), hairline borders (#ffffff14), and Berkeley Mono for code and captions.
colors:
  canvas: "#08090a"
  ink: "#d0d6e0"
  primary: "#e5e5e6"
  on-primary: "#08090a"
  primary-hover: "#ffffff"
  surface-panel: "#0f1011"
  ink-strong: "#f7f8f8"
  ink-secondary: "#8a8f98"
  ink-tertiary: "#62666d"
  hairline: "#ffffff14"
  footer-border: "#23252a"
  brand-indigo: "#5e6ad2"
  accent: "#7170ff"
  accent-hover: "#828fff"
  brand-mercury-white: "#f4f5f8"
  brand-nordic-gray: "#222326"
typography:
  display:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 64px
    fontWeight: 510
    lineHeight: 64px
    letterSpacing: "-1.408px"
  display-mobile:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 38px
    fontWeight: 510
    lineHeight: 41.8px
    letterSpacing: "-0.836px"
  heading:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 40px
    fontWeight: 510
    lineHeight: 44px
    letterSpacing: "-0.88px"
  subheading:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 590
    lineHeight: 26.6px
    letterSpacing: "-0.24px"
  body:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.92px
    letterSpacing: "-0.288px"
  button:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 13px
    fontWeight: 510
    lineHeight: 32px
  button-large:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 510
    lineHeight: 44px
  nav:
    fontFamily: "\"Inter Variable\", \"SF Pro Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Open Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  mono:
    fontFamily: "\"Berkeley Mono\", ui-monospace, \"SF Mono\", Menlo, monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
rounded:
  sm: 4px
  lg: 6px
  xl: 8px
  card: 9px
  xxl: 12px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 32px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 32px
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 44px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  text-input:
    typography: "{typography.mono}"
  card:
    backgroundColor: "{colors.surface-panel}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.card}"
    padding: 12px 16px 16px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    borderColor: "{colors.footer-border}"
---

## Overview

Linear's homepage is a dark product page where the product screenshot does most of the selling. In the capture, a wordmark-and-nav bar sits on `{colors.canvas}` (`#08090a`), a two-line headline in near-white (`The product development system for teams and agents`) is left-aligned over a large empty dark field, and a wide application mock-up (sidebar, issue detail, agent thread) fills the full width below it, cropped at the right edge. Below that a row of customer logos, a two-tone statement paragraph, and three isometric line illustrations labelled `FIG 0.1`, `FIG 0.2`, `FIG 0.3` carry the page.

Surfaces are layered by tiny steps of near-black: the page `{colors.canvas}`, panels at `{colors.surface-panel}` (`#0f1011`), and white overlays at 2 to 5% alpha. Edges are drawn with translucent-white hairlines (`{colors.hairline}`, `#ffffff14`) rather than shadows. Text uses four grays from `{colors.ink-strong}` (`#f7f8f8`) down to `{colors.ink-tertiary}` (`#62666d`).

The color count on the visible page is low. The only filled, saturated-free action is a light-gray pill, `Sign up`, top right. The site's CSS also defines a brand indigo (`#5e6ad2`) and a lighter accent (`#7170ff`), plus red, green, yellow, orange, teal and blue status colors; none of these was identified in the capture, so this document records them as defined, not as visible. Linear's brand page says the brand color is "a desaturated blue", and lists Mercury White and Nordic Gray as the colors for the monochrome wordmark.

**Key Characteristics:**
- Near-black canvas `{colors.canvas}`; panels one step lighter at `{colors.surface-panel}`.
- Inter Variable at weight 510 as the working weight; 590 for emphasis; 400 for reading text.
- Negative tracking that grows with size: -1.408px at 64px, -0.88px at 40px, -0.288px at 24px.
- Light pill buttons: `{colors.primary}` fill, dark `{colors.on-primary}` label, `{rounded.pill}` radius, hover to white.
- Hairline borders instead of shadows on dark surfaces.
- Monospace (Berkeley Mono) for code, field text and small caption labels.
- A figure language: `FIG 0.1` captions and wireframe isometric drawings in thin gray lines.

## Colors

> **Source pages:** home (`/`), measured at 1280px and 390px; the root CSS custom properties from the same page; Linear's brand page.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#08090a`): Page background; the CSS variable `--color-bg-primary` and `--color-bg-level-0`.
- **Surface panel** (`{colors.surface-panel}` — `#0f1011`): Cards and the application mock-up panels; `--color-bg-panel` and `--color-bg-level-1`.
- **Overlay washes:** translucent white (`#ffffff03` to `#ffffff0d`) layered over the canvas; `--color-bg-translucent` is `#ffffff0d`.
- **Other levels in CSS:** `#141516`, `#191a1b`, `#1c1c1f`, `#232326`, `#28282c` (`--color-bg-level-2`, `--color-bg-level-3`, `--color-bg-secondary`, `--color-bg-tertiary`, `--color-bg-quaternary`); not tokenised.

### Text
- **Ink strong** (`{colors.ink-strong}` — `#f7f8f8`): Headlines, nav text, card titles; `--color-text-primary`.
- **Ink** (`{colors.ink}` — `#d0d6e0`): Measured as the most-read text color (2879 characters); `--color-text-secondary`. Paragraph copy.
- **Ink secondary** (`{colors.ink-secondary}` — `#8a8f98`): Nav items at rest, the gray half of the statement paragraph, sub-labels; `--color-text-tertiary`.
- **Ink tertiary** (`{colors.ink-tertiary}` — `#62666d`): Timestamps and the quietest labels; `--color-text-quaternary`.
- **On primary** (`{colors.on-primary}` — `#08090a`): Label on the light pill.

### Action
- **Primary** (`{colors.primary}` — `#e5e5e6`): Fill and border of the `Sign up` pill and of the `Get started` button; it is `--color-button-invert-bg`.
- **Primary hover** (`{colors.primary-hover}` — `#ffffff`): Measured hover fill of the `Sign up` pill (`--color-button-invert-bg-hover`). Nav buttons such as `Product` change on hover from `#8a8f98` text on transparent to `#f7f8f8` text on a `rgba(255,255,255,0.08)` fill.
- **Link hover:** `--color-link-hover` is `#fff`.

### Lines
- **Hairline** (`{colors.hairline}` — `#ffffff14`): The header bottom border (`--header-border`) and card borders.
- **Footer border** (`{colors.footer-border}` — `#23252a`): Footer top border; `--color-border-primary`.
- Other line levels in CSS: `#37393a`, `#34343a`, `#3e3e44`, `#202122`, `#18191a`, `#141515`.

### Brand and accent (defined in CSS)
- **Brand indigo** (`{colors.brand-indigo}` — `#5e6ad2`): `--color-brand-bg` and `--color-indigo`; the text selection color is built from it (`color-mix(in lch, #5e6ad2, black 10%)`); focus ring color is `#5e69d1`. Not located on a visible element in the capture.
- **Accent** (`{colors.accent}` — `#7170ff`): `--color-accent`; hover `{colors.accent-hover}` (`#828fff`), which is also `--color-link-primary`. Not located in the capture.
- **Brand page colors:** `{colors.brand-mercury-white}` (`#f4f5f8`) and `{colors.brand-nordic-gray}` (`#222326`), the official light and dark for monochrome wordmark use.
- **Status colors in CSS:** red `#eb5757`, orange `#fc7840`, yellow `#f0bf00`, green `#27a644`, teal `#00b8cc`, blue `#4ea7fc`, product-line colors for Plan `#68cc58`, Build `#d4b144` and Security `#7a7fad`. They are the app's label colors; in the capture an amber status ring and green/red diff numbers appear inside the mock-up.

### Theme generation
The Linear UI redesign post says themes are generated in the LCH color space from three inputs, base color, accent color and contrast, instead of 98 variables per theme. That is about the app; the marketing site's variables here are a dark-only fixed set.

## Typography

### Font family
- **Inter Variable** with the fallback list `"SF Pro Display", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif`. The page sets `--font-settings: "cv01", "ss03"` (OpenType alternates) and `--font-variations: "opsz" auto`.
- **Berkeley Mono** with `ui-monospace, "SF Mono", Menlo, monospace` for text fields, code spans and the small uppercase caption (`POWERING THE COMPANIES BUILDING THE FUTURE` in the capture).
- The redesign post says Inter Display was introduced for headings; the loaded font list on the homepage shows only `Inter Variable` and `Berkeley Mono`, so what the display tier uses on this page is the variable Inter at `opsz auto`.

### Hierarchy
| Token | Size | Line | Weight | Tracking | Role |
|---|---|---|---|---|---|
| `{typography.display}` | 64px | 64px | 510 | -1.408px | Hero h1 |
| `{typography.display-mobile}` | 38px | 41.8px | 510 | -0.836px | h1 at 390px |
| `{typography.heading}` | 40px | 44px | 510 | -0.88px | Statement h2 (`A new species of product tool.`) |
| `{typography.subheading}` | 20px | 26.6px | 590 | -0.24px | Sub-headings |
| `{typography.body}` | 24px | 31.92px | 400 | -0.288px | Large paragraph copy |
| `{typography.button}` | 13px | 32px | 510 | normal | `Sign up` pill |
| `{typography.button-large}` | 16px | 44px | 510 | normal | `Get started` button |
| `{typography.nav}` | 16px | 24px | 400 | normal | Nav, links |
| `{typography.mono}` | 14px | 24px | 400 | normal | Text field |

Root variables give a finer scale: `--title-9` 590 4.5rem / 1, `--title-8` 590 4rem / 1.06, `--title-7` 590 3.5rem / 1.1, `--title-6` 590 3rem / 1, `--title-5` 590 2.5rem / 1.1, `--title-4` 590 2rem / 1.125, `--title-3` 590 1.5rem / 1.33, `--title-2` 590 1.25rem / 1.33, `--title-1` 590 1.0625rem / 1.4; text sizes `--text-large` 1.0625rem, `--text-regular` 0.9375rem (15px), `--text-small` 0.875rem, `--text-mini` 0.8125rem, `--text-micro` 0.75rem, `--text-tiny` 0.625rem. Title letter-spacing is -0.022em at the larger sizes and -0.012em at the smaller ones. Font weights: light 300, normal 400, medium 510, semibold 590, bold 680.

By character count on the page the commonly used sizes are 13px, 12px, 15px and 14px, with 24px, 40px, 32px, 64px and 48px for large type.

### Principles
- **510 is the house weight.** Headlines at 510 look firm without looking bold; 590 is used for titles in the CSS scale.
- **Track tighter as size grows.** The headline and statement are visibly compressed in the capture.
- **Two-tone sentences.** In the statement paragraph the first sentence is `{colors.ink-strong}` and the rest is `{colors.ink-secondary}`, so one block carries a headline and its elaboration.
- **Mono for the technical layer.** Code chips (`vehicle_state`), branch names and field text are mono.

### Font substitutes
Inter Variable is a free typeface; use it directly. Berkeley Mono is a commercial typeface; the site's own fallback is `ui-monospace, "SF Mono", Menlo, monospace`.

## Layout

- **Page:** 1280px extraction width, 9619px tall at desktop.
- **Header:** fixed, 72px (`--header-height`), translucent `#0b0b0bcc` with a 20px backdrop blur (`--header-blur`) and a `{colors.hairline}` bottom border; wordmark at the left, nav and `Log in` / `Sign up` at the right.
- **Hero:** left-aligned headline over generous empty space (a large empty canvas area above it in the capture), a two-line subtitle, and a `New  Loops →` link aligned right on the subtitle row.
- **Product mock-up:** full-bleed, bleeding off the right edge, with a left sidebar (Linear workspace switcher; Pulse, Inbox, My issues, Reviews; Workspace: Initiatives, Projects, More; Favorites), a main issue pane and a right-hand agent thread.
- **Logo row:** seven customer wordmarks in white (OpenAI, Vercel, Salesforce, Figma, Cursor, Coinbase, Ramp as read from the capture) with a mono caption.
- **Three-column figure row:** each column has a `FIG` label at the top, a line illustration, a bold title and a gray description, separated by vertical hairlines.
- **Spacing in use:** gaps of 8px (most common), 4px, 6px, 12px; paddings of 32px (most common, page gutter), 4px, 6px, 8px, 12px. The tokens `{spacing.s1}` to `{spacing.s5}` are those values.
- **Density:** the marketing sections are sparse; the mock-up is dense, with 12 to 13px labels.

## Elevation & Depth

Depth on dark is done with light, not shadow.
- **Hairlines:** `{colors.hairline}` borders; some elements use an inset `0 0 0 0.5px rgba(255,255,255,0.08)` ring.
- **Shadows in CSS:** `--shadow-low` `0px 2px 4px #0000001a`, `--shadow-medium` `0px 4px 24px #0003`, `--shadow-high` `0px 7px 32px #00000059`, `--shadow-tiny` none. Measured on the page: `0 0 0 1px rgba(0,0,0,0.2)` (card edge), `0 0 12px rgba(0,0,0,0.2)` inset, `0 2px 32px rgba(0,0,0,0.25)`.
- **Button stack:** the light pill carries a five-layer shadow (`--shadow-stack-low`) of tiny black offsets, 0 to 8px, at 0 to 8% opacity; it only reads against light surfaces.
- **Overlays:** `--color-overlay-primary` is `#000000d9`.
- **Light gradients:** the capture shows a soft gray glow along the bottom edge of the mock-up, between the hero and the logo row.

## Shapes

- **Pill** (`{rounded.pill}` 9999px): `Sign up`, `Get started`, `Contact sales`, nav buttons (72 uses, the most frequent radius on the page).
- **8px** (`{rounded.xl}`): chips and buttons inside the mock-up; the most common non-pill radius (29 uses).
- **4px** (`{rounded.sm}`) and **6px** (`{rounded.lg}`): small controls (`--radius-4`, `--radius-6`, the editor block radius).
- **9px** (`{rounded.card}`) and **12px** (`{rounded.xxl}`): cards and large panels; the measured card is 9px.
- **Larger and round:** CSS defines 16px, 24px and 32px radii, and 50% for circles (avatars, status rings).
- **Icons:** thin-stroke line icons, about 14 to 16px, in `{colors.ink-secondary}`.
- **Illustrations:** isometric wireframes (stacked plates, cubes, slatted planes) in hairline gray on the canvas with no fills.

## Components

### Buttons
- **`button-primary`** — `{colors.primary}` fill and border, `{colors.on-primary}` label, `{typography.button}` (13px, 510), 32px high, `0px 12px` padding, `{rounded.pill}`. `Sign up` in the header. Hover: `{colors.primary-hover}` fill (`button-primary-hover`).
- **`button-primary-large`** — same fill, `{typography.button-large}` (16px, 510), 44px high, `0px 20px` padding. Instance: `Get started`.
- **Ghost pill** — transparent with a hairline or an `#ffffff0d` fill, white label (`Contact sales` measured at `#ffffff0d` fill, `#f7f8f8` text). Not tokenised.
- **Nav buttons** (`Product`, `Resources`) — 32px high pills, `{colors.ink-secondary}` text at rest; hover raises text to `{colors.ink-strong}` and adds a faint white fill.

### Navigation
- Header items in the capture: `Product`, `Resources`, `Customers`, `Pricing`, `Now`, `Contact`, then a divider, `Log in` and the `Sign up` pill. The wordmark is a round mark plus `Linear`.
- `nav-link` — `{typography.nav}`, `{colors.ink-secondary}`, pill-shaped hover area.

### Link
`link` — `{colors.ink-strong}`; the `New  Loops →` announcement link pairs a bold `New` with a gray `Loops` and an arrow.

### Cards
`card` — `{colors.surface-panel}` fill, `{rounded.card}`, padding `12px 16px 16px`, `{colors.hairline}` border; measured on an activity-comment card in the mock-up, with an additional `rgba(255,255,255,0.03)` wash.

### Inputs
`text-input` — measured on a textarea in Berkeley Mono 14px / 24px (the reply field in the mock-up shows the placeholder `Reply...`).

### Product UI elements shown in the mock-up
Sidebar rows with 14px icons, a highlighted active row, issue identifier chips (`DRV-8852`), inline code chips (`vehicle_state`), comment cards with avatar, name and relative time, diff counts (`+22 -10`) in green and red, a branch name in mono, and a composer with a `Skills` menu. These are screenshots of the product rendered on the page.

### Footer
`footer` — `{colors.canvas}` background, `{colors.footer-border}` top border, white-ish links in columns (Product, Intake, Plan, AI, Build, Pricing, Security, Features, Asks and others), `{colors.ink-secondary}` for secondary text.

## Design System Architecture

No public Linear design system or token package was found. What exists publicly:
- **Brand page** (linear.app/brand): naming rules, wordmark / logomark / stylized icon usage, Mercury White and Nordic Gray, and the instruction to leave plenty of space around assets.
- **Redesign post** (linear.app/now/how-we-redesigned-the-linear-ui): LCH theme generation from base, accent and contrast; Inter Display for headings; "evolution over revolution"; an inverted-L navigation chrome.
- **Shipped CSS:** a semantic variable set, `--color-bg-{level-0..3, primary, secondary, tertiary, quaternary, panel, marketing}`, `--color-fg-*` and `--color-text-*` (primary to quaternary), `--color-border-*`, `--color-line-*`, `--color-accent*`, `--radius-{4,6,8,12,16,24,32,rounded,circle}`, `--shadow-{none,tiny,low,medium,high,stack-low}`, `--title-1` to `--title-9` as full font shorthands, `--text-*` size/letter-spacing pairs, easing curves (`--ease-out-quad`, `--ease-out-quart`, `--ease-in-out-quart`, `--ease-in-out-circ`) and layout variables (`--header-height`, `--layer-header`). The app's editor variables (`--editor-*`) are present on the marketing page too.
- **Hashed variables:** many root variables are named `--sx-*` with a hash; how they are generated was not determined.
- **Level naming:** backgrounds are leveled 0 to 3 with quaternary and quinary fallbacks; text and foreground use the same primary-to-quaternary ladder.

## Do's and Don'ts

### Do
- Start from `{colors.canvas}` and step surfaces up in tiny increments (`{colors.surface-panel}`).
- Keep one light pill CTA per view, with `{colors.on-primary}` text and a hover to `{colors.primary-hover}`.
- Set headlines at weight 510 with the tracking in the table.
- Use `{colors.hairline}` to separate regions rather than shadows.
- Show real product UI full-bleed, cropped at the edge, instead of abstract hero art.
- Use mono for code, ids and small caption labels.
- Keep copy short and declarative ("Purpose-built", "Powered by agents", "Designed for speed").

### Don't
- Don't use pure black or pure white backgrounds; the canvas is `#08090a`.
- Don't use saturated brand color for large fills on this site; the brand page says the blue is for backgrounds, and the visible marketing CTA is light gray.
- Don't use heavy drop shadows on dark surfaces.
- Don't use bold (680) for display text; the headline weight is 510.
- Don't write "Linear app"; the brand page says the name is "Linear".
- Don't alter or recolor the logo files; the brand page forbids it.

## Responsive Behavior

- **Type:** the h1 drops from 64px / 64px to 38px / 41.8px at 390px (`{typography.display-mobile}`); tracking from -1.408px to -0.836px.
- **Header:** nav behaviour at 390px was not measured.
- **Mock-up:** at desktop it bleeds off the right edge; at narrower widths it was not inspected.
- **Gutter:** 32px side padding at desktop (the most frequent padding).
- **Hit areas:** buttons 32px (header) and 44px (large) high.
- **Breakpoints:** not read from the files opened; no assumption is made.

## Iteration Guide

1. Begin with `{colors.canvas}`, `{colors.ink}` for paragraphs and `{colors.ink-strong}` for headlines.
2. Set Inter Variable at 510 for headlines with negative tracking; 400 for paragraphs; mono for technical details.
3. Place one light pill (`button-primary`) in the header and one large (`button-primary-large`) per major section.
4. Build panels in `{colors.surface-panel}` with a `{colors.hairline}` border and a 9px radius.
5. Introduce the product as a full-width, cropped screenshot below the headline.
6. Add figure captions (`FIG 0.1`) and thin-line isometric drawings for concept sections.
7. If you need color, use `{colors.brand-indigo}` / `{colors.accent}` sparingly and check it against the capture first.
8. Validate: `node web/scripts/verify-designs.mjs --slug=linear.app`.

### Open questions
- Where the brand indigo and accent appear on the live page was not confirmed.
- Mobile header and mock-up behavior were not inspected.
- Which element the page's amber text (`#f7bf8b`) belongs to was not identified, so it is not tokenised.
