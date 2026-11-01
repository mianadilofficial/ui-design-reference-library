---
version: alpha
name: Zapier
category: "Productivity & SaaS"
description: "Zapier is a warm paper-toned marketing site: cream canvas #fffefb, reddish near-black ink #201515, one orange (#ff4f00) with 4px-radius buttons, Degular Display 500 at 56px for the hero, Inter for UI and body, and a light Serrif serif for card titles."

colors:
  canvas: "#fffefb"
  ink: "#201515"
  primary: "#ff4f00"
  on-primary: "#fffefb"
  surface-card: "#f8f4f0"
  ink-secondary: "#36342e"
  cream-dark: "#eceae3"
  ink-muted: "#605d52"
  border-strong: "#c5c0b1"
  primary-hover: "#d24304"
typography:
  display:
    fontFamily: "\"Degular Display\", DegularDisplay, \"DegularDisplay Fallback\", Inter, \"Inter Fallback\", system-ui, ui-sans-serif, sans-serif, sans-serif"
    fontSize: 56px
    fontWeight: 500
    lineHeight: 56px
  display-mobile:
    fontFamily: "\"Degular Display\", DegularDisplay, \"DegularDisplay Fallback\", Inter, \"Inter Fallback\", system-ui, ui-sans-serif, sans-serif, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
  heading:
    fontFamily: Inter, Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.48px
    textTransform: uppercase
  subheading:
    fontFamily: Serrif, Serrif, "Serrif Fallback", serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 35px
    letterSpacing: "-1px"
  body:
    fontFamily: Inter, Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: Inter, Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif
    fontSize: 16px
    fontWeight: 600
  nav:
    fontFamily: Inter, Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif
    fontSize: 16px
    fontWeight: 400
  button-secondary:
    fontFamily: Inter, Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif
    fontSize: 14px
    fontWeight: 600
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 14px
  xl: 18px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 12.8px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 6px 12px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 40px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px 24px
    borderColor: "{colors.cream-dark}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 40px 20px
    borderColor: "{colors.cream-dark}"
---

## Overview

Zapier's homepage (captured while the headline read "Smarter workflows. Smaller bills.") is a warm, paper-toned marketing page. The canvas is a cream white (`{colors.canvas}`, #fffefb), type is a warm near-black (`{colors.ink}`, #201515), and a single orange (`{colors.primary}`, #ff4f00) does all the signaling. The first screen holds a slim 56px header (a wordmark with an orange underscore at left, nav links with dropdown chevrons, two icons, "Contact sales", "Log in" and an orange rounded "Sign up"), a centered 56px headline set in Degular Display, a two-line Inter subhead, and two buttons side by side: an orange "Start free with email" and an outlined "Start free with Google". Three orange stats follow (450K+ agents built, 9,000+ app integrations, 3.39M+ MCP tool calls completed), then a bordered "Use Zapier MCP to build with these tools" tray listing assistants, compliance badges (SOC 2 Type II, GDPR + CCPA compliant) and a faded customer-logo strip under a small uppercase label.

The second act changes voice. A centered "Make every AI step count" headline leads to a dark `{colors.ink}` button ("Explore Zapier for Enterprise") and an outlined "Contact sales", then a 2x2 grid of cream cards (`{colors.surface-card}`, #f8f4f0). Each card opens with a tiny orange square, a light-weight serif title ("Connect any AI to 9,000+ apps"), a short Inter paragraph, and a soft, grainy sky-and-landscape gradient image on which a small product-UI panel floats.

**Key Characteristics:**
- Three type voices: Degular Display (500) for the hero, Inter for UI, nav, body and eyebrows (9,014 characters measured), and a light serif called `Serrif` (weight 300, 899 characters) for card titles.
- One saturated color: `#ff4f00` for buttons, stat numerals and tiny square bullets.
- Warm neutrals only; every gray measured on the page (#36342e, #605d52, #eceae3, #c5c0b1, #f8f4f0) has a yellow or brown cast.
- Squarish buttons: the main CTAs have a 4px radius; only the header "Sign up" is rounded further (18px).
- Product UI is shown as small panels floating over soft photographic gradients, not as full screenshots.
- Copy is practical and quantified: "Not all work needs the most powerful AI model", "Smarter workflows. Smaller bills."

## Colors

> **Source pages:** home (`https://zapier.com/`), measured at 1280px desktop and 390px mobile.

### Brand & Accent
- **Orange** (`{colors.primary}` — `#ff4f00`): Primary button fill, stat numerals, card bullets. Zapier's rebrand post says the company "updated their orange to international orange" (https://zapier.com/blog/zapiers-new-look/); the post gives no hex value, so the hex here is the measured one.
- **Orange Hover** (`{colors.primary-hover}` — `#d24304`): Measured as the background of the "Sign up" button on hover.
- **On Primary** (`{colors.on-primary}` — `#fffefb`): Text on orange, equal to the canvas.

### Surface
- **Canvas** (`{colors.canvas}` — `#fffefb`): The page background.
- **Surface Card** (`{colors.surface-card}` — `#f8f4f0`): The cream feature cards in the second act.
- **Cream Dark** (`{colors.cream-dark}` — `#eceae3`): Borders and backgrounds; also measured as a text color.
- **Border Strong** (`{colors.border-strong}` — `#c5c0b1`): A heavier warm border/gray.

### Text
- **Ink** (`{colors.ink}` — `#201515`): Headlines, body and the dark button fill.
- **Ink Secondary** (`{colors.ink-secondary}` — `#36342e`): Secondary copy; the second most-read text color.
- **Ink Muted** (`{colors.ink-muted}` — `#605d52`): Uppercase eyebrow labels and stat captions.

### Semantic
No semantic palette is part of the marketing UI. A red ring color (`#d12d37`) appears in the stylesheet's box-shadow list; it was not seen in the visible layout, so it is not tokenized.

## Typography

### Font Family

Declared stacks, as measured:
- Display: `"Degular Display", DegularDisplay, "DegularDisplay Fallback", Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif`. Loaded weights: 500 and 600.
- Text: `Inter, "Inter Fallback", system-ui, ui-sans-serif, sans-serif`; Inter is loaded as a variable font (100-900).
- Serif: `Serrif, "Serrif Fallback", serif`, loaded at weight 300.
- Mono: the page defines `--zapier-marketing-font-mono` as `"JetBrains Mono"`, though no mono text was measured on this page.

Zapier's rebrand post says the new typeface is Degular, chosen for "human-forward joyfulness", and quotes: "Its personality flexes in different weights in a way that scales between zany and functional. It feels like Zapier." The post does not mention Inter or Serrif.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 56px | 500 | 56px | — | Hero headline (Degular Display) |
| `{typography.display-mobile}` | 40px | 500 | 40px | — | Hero at 390px |
| `{typography.heading}` | 12px | 400 | 18px | 0.48px | Uppercase Inter eyebrow |
| `{typography.subheading}` | 28px | 300 | 35px | -1px | Card titles (Serrif) |
| `{typography.body}` | 18px | 400 | 27px | — | Paragraphs |
| `{typography.button}` | 16px | 600 | — | — | Primary buttons |
| `{typography.button-secondary}` | 14px | 600 | — | — | Compact buttons |
| `{typography.nav}` | 16px | 400 | — | — | Header links |

### Principles
- **Line-height of 1.0 on the hero.** 56/56 and 40/40; headlines are set solid.
- **Serif for the quieter beat.** Card titles switch to the light serif with -1px tracking, a change from the sans hero.
- **Eyebrows are tiny and tracked.** 12px uppercase with 0.48px letter-spacing.
- **Button text is semibold (600).**

### Note on Font Substitutes
The display stack falls back to Inter. For `Serrif`, use a light-weight text serif with -1px tracking at 28px.

## Layout

### Spacing System
- Generated scale: `{spacing.s1}` 4px, `{spacing.s2}` 6px, `{spacing.s3}` 8px, `{spacing.s4}` 10px, `{spacing.s5}` 12px, `{spacing.s6}` 12.8px, `{spacing.s7}` 16px, `{spacing.s8}` 20px, `{spacing.s9}` 24px, `{spacing.s10}` 26px.
- Gaps are mostly 8px and 16px. Padding is mostly 12px, then 24px and 40px; the nav uses `0px 40px` and the footer `40px 20px`.
- Header height is 56px (`--zapier-header-height`).

### Grid & Container
- A centered single column for the hero and stats, a bordered tray for the MCP tools, then a 2x2 card grid that spans nearly the full width with a thin outer border.
- The page is 15,253px tall at 1280px, so many stacked sections follow.

### Whitespace Philosophy
Vertical space around the hero and section headlines is large; cards are generously padded (`32px 24px`).

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat on `{colors.canvas}` | Most of the page |
| 1 | 1px `{colors.cream-dark}` border | Cards, footer, tray |
| 2 | Soft shadows (`0 10px 15px -3px rgba(0,0,0,.1)` and similar) | Measured in the stylesheet; where they apply was not mapped |
| 3 | Photographic gradient | Image backgrounds inside cards |

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Primary buttons and links |
| `{rounded.sm}` | 5px | Cards |
| `{rounded.md}` | 8px | Measured radius (usage not mapped) |
| `{rounded.lg}` | 14px | Measured radius (usage not mapped) |
| `{rounded.xl}` | 18px | Header "Sign up" button |
| `{rounded.pill}` | 9999px | Pills where used |

The 4px primary button radius is the default shape and gives the buttons a rectangular, tool-like look.

## Components

### Buttons

**`button-primary`** — orange rectangle with cream text.
- Background `{colors.primary}`, text `{colors.canvas}`, type `{typography.button}`, padding `8px 16px`, height 40px, `{rounded.xs}`, hover `{colors.primary-hover}`. Larger variants (48px tall, `12px 24px`) appear for "Explore Zapier AI" and "See more customer stories".

**`button-secondary`** — the header "Sign up": orange, 14px semibold, `6px 12px`, 36px tall, `{rounded.xl}`.

**`link`** — outlined button: `{colors.ink}` text with a 1px `{colors.ink}` border, `8px 16px`, `{rounded.xs}` (used for "Start free with Google" and "Contact sales").

### Cards

**`card`** — `{rounded.sm}` radius, a `{colors.cream-dark}` border and padding `32px 24px`. In the capture the card fill is `{colors.surface-card}` and each begins with a small orange square.

### Navigation

**`nav`** — `{colors.canvas}` bar with `0px 40px` padding; **`nav-link`** — 16px Inter regular in `{colors.ink}`.

### Footer

**`footer`** — `{colors.canvas}` with a `{colors.cream-dark}` border and `40px 20px` padding.

## Design System Architecture

No public design-system documentation or token package for Zapier's marketing site was found (the brand site at https://brand.zapier.com/ opened but returned only the title "Zapier Brand Guidelines 1.0", with no readable specifications). The rebrand announcement at https://zapier.com/blog/zapiers-new-look/ describes the logo as a platform "foundation" that "extends across all of our design expressions", the orange as "international orange", and the typeface as Degular; it gives no tokens.

The de-facto system, from the page's root variables: only six custom properties are defined at the root, `--zapier-marketing-font-display`, `--zapier-marketing-font-display-serif`, `--zapier-marketing-font-base`, `--zapier-marketing-font-mono`, `--zapier-header-height` and `--zapier-banner-height`. The rest of the styling is utility-class driven (Tailwind-style shadow variables such as `0 10px 15px -3px` appear in the CSS corpus), so color and spacing are not exposed as variables.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the primary action and nothing decorative beyond stats and bullets.
- Set the hero in Degular Display 500 with line-height equal to the size.
- Switch to the light serif for card titles.
- Keep every neutral warm; use `{colors.canvas}` instead of pure white.
- Keep button corners near 4px.

### Don't
- Don't use cool or blue-gray neutrals.
- Don't use the orange as body text or as a large background fill.
- Don't bold the hero beyond 500.
- Don't mix more than two button styles in one band.

## Responsive Behavior

### Breakpoints
Measured at 1280px desktop and 390px mobile only.

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px | 56px hero, full nav, 2x2 cards |
| Mobile | 390px | Hero at 40px / 40px |

### Touch Targets
Primary buttons are 40-48px tall, the header button 36px. Mobile target sizes were not measured.

### Collapsing Strategy
Display drops from 56px to 40px. The behavior of the 2x2 grid at 390px was not inspected.

## Iteration Guide

1. Change one component at a time.
2. Reference tokens (`{colors.primary}`, `{typography.display}`, `{rounded.xs}`).
3. Keep hero line-height at 1.0.
4. Add new variants as separate components.
5. Use `{typography.body}` (18px Inter) for body; use the serif only for titles.
6. Check any new gray for a warm cast before adding it.
