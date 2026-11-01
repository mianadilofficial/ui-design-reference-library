---
version: alpha
name: Wise
category: "Fintech & Crypto"
description: "Wise pairs a bright green (#9fe870) hero field with forest-green (#163300) ink and pill buttons, setting display type in the proprietary Wise Sans at weight 900 (86.86px) and everything else in Inter 600, with round-cornered cards (10-36px radii) and almost no shadows."

colors:
  canvas: "#ffffff"
  ink: "#163300"
  primary: "#163300"
  on-primary: "#9fe870"
  ink-secondary: "#454745"
  ink-strong: "#0e0f0c"
  negative: "#cf2929"
  ink-pale: "#e8ebe6"
  bright-green: "#9fe870"
  bright-blue: "#a0e1e1"
  hairline: "#0e0f0c1f"
  primary-hover: "#0d1f00"
  card-border: "#1633001f"
  footer-bg: "#16330014"
typography:
  display:
    fontFamily: "\"Wise Sans\", Inter, sans-serif"
    fontSize: 86.8571px
    fontWeight: 900
    lineHeight: 73.8285px
  display-mobile:
    fontFamily: "\"Wise Sans\", Inter, sans-serif"
    fontSize: 44.9092px
    fontWeight: 900
    lineHeight: 38.1728px
  heading:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 32.6857px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-0.980572px"
  subheading:
    fontFamily: "\"Wise Sans\", Inter, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 34px
  body:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
    letterSpacing: 0.1px
  button:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.176px"
  nav:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 26px
    letterSpacing: "-0.108px"
  input:
    fontFamily: "\"Wise Sans\", Inter, sans-serif"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 78px
rounded:
  xs: 2px
  sm: 10px
  md: 16px
  lg: 18.36px
  xl: 27.54px
  2xl: 30px
  3xl: 32px
  4xl: 36.72px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 4.59px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9.18px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 24px
    height: 48px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 12px
    height: 32px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  nav:
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 47px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-secondary}"
---

## Overview

Wise's homepage (captured from the Thailand site, headline "Send money globally for less") is a two-green system. The first screen is a full-bleed `{colors.bright-green}` (#9fe870) field carrying a dark forest-green (`{colors.primary}`, #163300) headline set in the proprietary Wise Sans at weight 900 and a size of 86.8571px with a 73.8285px line-height, so the lines are packed nearly solid. A dark forest announcement bar sits above a nav with a small wordmark, "Personal" and "Platform" links and a pill "Sign up" button. Centered underneath, a phone-shaped card floats the live currency calculator: a photographic green header with a white search field, then a white panel with large amount figures (45,000.00 THB and 1,329.55 USD) and a full-width bright-green "Send money" pill. Past the fold the page returns to white (`{colors.canvas}`) for an Inter-set value-proposition section with mint-colored circular icons (`{colors.bright-blue}`, #a0e1e1), a rounded photo and icon-led feature rows.

The tone is plain and numeric: "no hidden fees and no paperwork", "77% of payments arrive in under 20 seconds". Copy leads with figures, and the figures themselves are the most decorated type on the page.

**Key Characteristics:**
- Forest green `#163300` as the action and text color, bright green `#9fe870` as the brand field and the text color on the dark buttons.
- Wise Sans at weight 900 for the hero and calculator amounts; Inter at 600 for nearly everything else (7,688 measured characters in Inter against 260 in Wise Sans).
- Pill buttons (`{rounded.pill}`) in two sizes, 48px and 32px tall.
- Generous, soft corner radii on cards and photos (10px, 16px, 18.36px, 27.54px, 36.72px measured).
- Shadows are almost absent: 1px ring shadows in forest-green tint, with one soft drop (`0 6px 20px` at 8% black) measured once.
- Imagery pairs photographic and illustrative color blocks; in the capture the calculator header is a green photographic texture and a warm pink-orange image runs below the card.

## Colors

> **Source pages:** home (`https://wise.com/`, Thailand locale), plus the published token package cited in SOURCES.json.

### Brand & Accent
- **Forest Green** (`{colors.primary}` and `{colors.ink}` — `#163300`): The primary button fill, the main text color (most-read by characters) and the heading color. The published Neptune token package defines it as `--color-forest-green` and, in its light "personal" theme, as `--color-interactive-primary`.
- **Bright Green** (`{colors.bright-green}` and `{colors.on-primary}` — `#9fe870`): The hero background and the text color on forest-green buttons. In the same package it is `--color-bright-green` and `--color-interactive-accent`.
- **Primary Hover** (`{colors.primary-hover}` — `#0d1f00`): Button hover; measured on hover and equal to the package's `--color-interactive-primary-hover` in the personal theme.
- **Bright Blue** (`{colors.bright-blue}` — `#a0e1e1`): Fill of the mint icon circles; also named `--color-bright-blue` in the package.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): The page background below the hero and the calculator panel.
- **Footer Background** (`{colors.footer-bg}` — `#16330014`): A 8%-opacity forest-green tint; the personal theme calls the same value `--color-background-screen-hover` / `--color-background-neutral`.
- **Hairline** (`{colors.hairline}` — `#0e0f0c1f`) and **Card Border** (`{colors.card-border}` — `#1633001f`): 1px dividers and card outlines.

### Text
- **Ink Strong** (`{colors.ink-strong}` — `#0e0f0c`): Section headings; the personal theme's `--color-content-primary`.
- **Ink Secondary** (`{colors.ink-secondary}` — `#454745`): Supporting copy; `--color-content-secondary` in the same theme.
- **Ink Pale** (`{colors.ink-pale}` — `#e8ebe6`): Measured on a few characters; the dark forest-green theme in the package lists it as `--color-content-secondary`.

### Semantic
- **Negative** (`{colors.negative}` — `#cf2929`): Error red, measured in text and listed as `--color-content-negative` in the token package.

## Typography

### Font Family

`Wise Sans` is a custom typeface drawn by Luke Prowse of NaN Typefaces with the agency Ragged Edge for the 2023 rebrand (type-01.com says it supports 342 languages; Creative Review describes the identity). The measured stacks are `"Wise Sans", Inter, sans-serif` for display and `Inter, Helvetica, Arial, sans-serif` for text. Creative Review notes Inter is open source; the display stack lists Inter as its fallback. `Averta` is also loaded in the page's font set, but was not found on measured text.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 86.8571px | 900 | 73.8285px | — | Hero headline |
| `{typography.display-mobile}` | 44.9092px | 900 | 38.1728px | — | Hero at 390px |
| `{typography.heading}` | 32.6857px | 600 | 44px | -0.980572px | Section headings (Inter) |
| `{typography.subheading}` | 40px | 400 | 34px | — | Wise Sans accent text |
| `{typography.body}` | 20px | 600 | 28px | 0.1px | Hero supporting copy |
| `{typography.button}` | 16px | 600 | 24px | -0.176px | Pill buttons |
| `{typography.nav}` | 18px | 600 | 26px | -0.108px | Nav links |
| `{typography.input}` | 52px | 400 | 78px | — | Calculator amount fields |

### Principles
- **Black weight for the brand moment.** Wise Sans appears at weight 900 only where the brand speaks; Inter handles the rest.
- **Tight display leading.** 73.83 over 86.86 is about 0.85; do not loosen it.
- **Semibold Inter for body.** The measured body is 600 rather than 400, which makes the copy read confidently on green.
- **Numbers are display.** Amount fields reuse the Wise Sans stack at 52px.

### Note on Font Substitutes
Wise Sans is bespoke. If it is unavailable, Inter at weight 900 with a 0.85 line-height is the declared fallback in the stack; expect wider letterforms than the original.

## Layout

### Spacing System
- Scale generated from the page: `{spacing.s1}` 3px, `{spacing.s2}` 4px, `{spacing.s3}` 4.59px, `{spacing.s4}` 5px, `{spacing.s5}` 6px, `{spacing.s6}` 8px, `{spacing.s7}` 9.18px, `{spacing.s8}` 10px, `{spacing.s9}` 11px, `{spacing.s10}` 12px. Much of the page's spacing is fluid (`clamp()` custom properties named `--mw-space-*` and `--eds-space-*` were measured), so values like 9.18px appear to be that scaling resolved at a 1280px viewport.
- Buttons use `11px 24px` (large) and `8px 12px` (small) padding.

### Grid & Container
- A single centered column for the hero and calculator, then a two-column pattern with a photograph on the left and text rows on the right; a three-up row of icon-plus-text claims sits between them.
- The measured page height is 15,595px at 1280px wide, so the page is long and sectioned.

### Whitespace Philosophy
Generous vertical air around the hero text and the calculator; the green field gives the hero its own room before white sections take over.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Most surfaces |
| 1 | `0 0 0 1px` forest-green at 12% | Card outline ring |
| 2 | `0 6px 20px` at 8% black | A single soft lift measured once |
| 3 | Color field | The bright-green hero is the primary depth device |

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Links and small elements |
| `{rounded.sm}` | 10px | Cards, matching `--radius-small` in the package |
| `{rounded.md}` | 16px | Medium surfaces, matching `--radius-medium` |
| `{rounded.lg}` | 18.36px | Cards |
| `{rounded.xl}` | 27.54px | Large panels |
| `{rounded.2xl}` | 30px | Panels |
| `{rounded.3xl}` | 32px | Panels, matching `--radius-xlarge` |
| `{rounded.4xl}` | 36.72px | Calculator-card scale |
| `{rounded.pill}` | 9999px | All buttons and chips |

The fractional radii (18.36, 27.54, 36.72) were measured at the 1280px viewport; custom properties on the page use `clamp()` for radii too.

## Components

### Buttons

**`button-primary`** — forest-green pill with bright-green text.
- Background `{colors.ink}`, text `{colors.on-primary}`, type `{typography.button}`, padding `11px 24px`, height 48px, `{rounded.pill}`. Hover `button-primary-hover` darkens to `{colors.primary-hover}`.

**`button-secondary`** — the compact nav variant ("Sign up"): same colors, `8px 12px` padding, 32px tall.

### Inputs

**`text-input`** — large calculator amount: `{typography.input}` (52px Wise Sans), 47px tall. The white card holds "You send exactly" and "Recipient gets" rows with currency chips.

### Cards

**`card`** — `{rounded.sm}` radius with a `{colors.card-border}` outline.

### Navigation

**`nav-link`** — 18px Inter 600, forest green; the nav is on the bright-green hero with a pill "Sign up" at right and "Help" and "Log in" text links.

### Footer

**`footer`** — a `{colors.footer-bg}` tinted background with `{colors.ink-secondary}` text.

## Design System Architecture

Wise has a design-system site at wise.design (the page opened showed only navigation and a link to docs.wise.design, which redirected to a 404) and publishes a token package on npm, `@transferwise/neptune-tokens` (version 8.26.0 opened), whose repository on GitHub is not public. The package is generated with Style Dictionary and ships CSS custom properties for base colors, themes (`personal`, `business`, `platform`, `navy`, `light`, `dark`, several with forest-green or bright-green variants), sentiments (negative, neutral, proposition, success, warning), radius (`--radius-small` 10px, `-medium` 16px, `-large` 24px, `-xlarge` 32px, `-full` 9999px) and a size scale. Colors are named by role (`--color-content-primary`, `--color-interactive-primary`, `--color-background-screen`) rather than by hue, and the live site's root variables follow the same role names.

Sources: https://unpkg.com/@transferwise/neptune-tokens@8.26.0/tokens.css, https://unpkg.com/@transferwise/neptune-tokens@8.26.0/themes/personal/tokens.css and https://wise.design.

Type-01 (https://type-01.com/wise-sans-the-font-update-shaping-wises-visual-identity/) reports that the typography system was streamlined from 22 styles to 14: four display, four title and six body styles. Creative Review (https://www.creativereview.co.uk/wise-rebrand-ragged-edge/) says the design system was tested to exceed WCAG 3.0 requirements and supports more than 146 languages.

## Do's and Don'ts

### Do
- Pair `{colors.primary}` forest green with `{colors.on-primary}` bright green on buttons.
- Use Wise Sans at 900 for hero lines and large numbers only.
- Keep display leading near 0.85.
- Use pill buttons everywhere.
- Name colors by role (content, interactive, background) as the token package does.

### Don't
- Don't put bright-green text on white; it is a dark-surface text color.
- Don't use Wise Sans for body copy.
- Don't add shadows beyond the 1px ring and one soft lift.
- Don't use pure black for display text; the brand's ink is `{colors.primary}`.

## Responsive Behavior

### Breakpoints
The extraction captured 1280px desktop and 390px mobile.

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px | 86.86px hero, nav links visible |
| Mobile | 390px | Hero falls to 44.91px / 38.17px |

### Touch Targets
Large buttons are 48px tall and small ones 32px. Mobile target sizes were not separately measured.

### Collapsing Strategy
Spacing and radii are fluid, driven by `clamp()` custom properties, so values scale between viewports rather than jumping at fixed breakpoints.

## Iteration Guide

1. Work on one component at a time.
2. Reference tokens by name (`{colors.primary}`, `{rounded.pill}`).
3. Keep forest green and bright green as a pair.
4. Add new variants as separate entries.
5. Keep body in Inter 600 (`{typography.body}`) and use Wise Sans only through `{typography.display}`.
6. Re-measure any fluid value at the viewport you care about.
