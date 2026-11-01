---
version: alpha
name: SpaceXAI (x.ai)
category: "AI & LLM Platforms"
description: "SpaceXAI (x.ai) is a warm-white developer-product site: near-black #0a0a0a pill buttons, the variable sans xVf at weight 450 with -0.6px tracking, GeistMono for code, #f9f8f6 cards at 16px radius, and ember-orange gradient art as the only saturated color."

colors:
  canvas: "#ffffff"
  page-largest: "#f9f8f6"
  ink: "#0a0a0a"
  primary: "#0a0a0a"
  on-primary: "#ffffff"
  ember: "#e04a26"
  ink-on-dark: "#e1e1e1"
  ink-warm: "#8d867e"
  ink-muted: "#0a0a0a8c"
  code-ink: "#24292e"
  surface-pill: "#f2f1ef"
  code-surface: "#151515"
  hairline: "#0a0a0a0f"
  link: "#0a0a0a99"
typography:
  display:
    fontFamily: xVf, "xVf Fallback"
    fontSize: 60px
    fontWeight: 450
    lineHeight: 60px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: xVf, "xVf Fallback"
    fontSize: 36px
    fontWeight: 450
    lineHeight: 39.6px
    letterSpacing: "-0.36px"
  heading:
    fontFamily: xVf, "xVf Fallback"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-0.48px"
  subheading:
    fontFamily: xVf, "xVf Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.16px"
  body:
    fontFamily: xVf, "xVf Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: xVf, "xVf Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
    height: 28px
  link:
    textColor: "{colors.link}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    transform: matrix(1, 0, 0, 1, 0, -1)
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The x.ai homepage (the live site and its title now read "SpaceXAI") is a calm, warm-white developer-product page. The capture opens with a thin nav: a mark at the left, links with dropdown chevrons (Products, Solutions, Developer, Company, Pricing, News), a light-gray pill "Contact Sales" and a black pill "Try for free" with a split dropdown. A small centered announcement chip ("New / Meet Grok 4.7 / Our new model") leads into a two-line, 60px headline, "Frontier AI models for everything you create.", with one word underlined, then a one-line subhead and two pills: black "Get API Access" and pale "View Documentation".

Below, a grid of rounded cards on `{colors.page-largest}` (#f9f8f6, a warm off-white) shows product surfaces rather than photographs: a chat transcript, a dark code-agent terminal, a bot conversation, an image-generation tile, and a "Voice" card with a dark starfield sphere. Next come "One API. Every modality." with a code sample sitting on an orange-to-red gradient art panel, a three-column stat row (400M+ queries processed daily, 200K GPUs, 122 days to build the cluster) separated by hairline rules, and a "Latest news" row of colored gradient cards.

The system is mostly monochrome. Near-black `{colors.primary}` (#0a0a0a) carries text and the primary pill, and warmth comes from the off-white surfaces and one ember-orange (`{colors.ember}`, #e04a26) that appears as large gradient art and in the "New" label in the announcement chip, never as a button.

**Key Characteristics:**
- One variable sans (`xVf`, loaded at weights 200-800) for nearly all text, paired with a variable mono (`GeistMono`) for code and terminal surfaces.
- Display at a slightly-above-regular weight (450) with tight tracking (-0.6px at 60px), so headlines read light and exact.
- Pill buttons (`{rounded.pill}`) in black and pale-gray, with 44px, 40px and 28px heights.
- Warm off-white cards at 16px radius; chips and inputs at 6-12px.
- Orange-to-red gradient art panels and gradient news tiles are the only saturated color.
- Product demos are shown as UI (chat bubbles, code editor with traffic-light dots, voice orb), not stock imagery.

## Colors

> **Source pages:** home (`https://x.ai/`), measured at 1280px desktop and 390px mobile.

### Brand & Accent
- **Near Black** (`{colors.primary}` and `{colors.ink}` — `#0a0a0a`): Text, the primary button fill (`Get API Access`, `Get API Key`) and the dark code windows.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on black pills.
- **Ember** (`{colors.ember}` — `#e04a26`): A measured background color with high area weight (353), seen in the capture as the orange in the gradient panel behind the code sample and in the news tiles. The page's root variables include a hue named `sunset`; its relationship to this value was not verified.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): The page background and navigation.
- **Page Largest** (`{colors.page-largest}` — `#f9f8f6`): The warm off-white of the feature cards, the largest measured background area.
- **Surface Pill** (`{colors.surface-pill}` — `#f2f1ef`): The pale pill behind "View Documentation" and "Contact Sales".
- **Code Surface** (`{colors.code-surface}` — `#151515`): The dark code and terminal windows.
- **Hairline** (`{colors.hairline}` — `#0a0a0a0f`): Thin dividers between stat columns.

### Text
- **Ink Muted** (`{colors.ink-muted}` — `#0a0a0a8c`): Secondary label text (the stat captions in the capture look this light).
- **Link** (`{colors.link}` — `#0a0a0a99`): Link text color measured on the page (usage beyond that was not mapped).
- **Ink Warm** (`{colors.ink-warm}` — `#8d867e`): A warm gray measured on 224 characters.
- **Ink On Dark** (`{colors.ink-on-dark}` — `#e1e1e1`): Light text on dark code surfaces.
- **Code Ink** (`{colors.code-ink}` — `#24292e`): Text color of syntax-highlighted code in the sample.

### Semantic
No semantic status colors are part of the page UI. The traffic-light dots on code windows (red, yellow, green) are decoration, and the code sample uses syntax colors.

## Typography

### Font Family

`xVf` is a variable family loaded at weights 200 to 800 and stacked with `"xVf Fallback"`; `GeistMono` (weights 100-900) is the mono. The extraction counts 2,448 characters in xVf, 1,015 in GeistMono and 455 in system-ui. No specimen or foundry page for `xVf` was found, so no claim about its origin is made.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 60px | 450 | 60px | -0.6px | Hero headline |
| `{typography.display-mobile}` | 36px | 450 | 39.6px | -0.36px | Hero at 390px |
| `{typography.heading}` | 48px | 500 | 48px | -0.48px | "One API. Every modality." |
| `{typography.subheading}` | 16px | 500 | 22px | -0.16px | Card titles |
| `{typography.body}` | 16px | 400 | 26px | — | Paragraphs |
| `{typography.button}` | 14px | 500 | 20px | — | Pill labels |

### Principles
- **Tight leading at display size.** Line-height equals font-size (60/60 and 48/48).
- **Negative tracking proportional to size:** -0.01em at every display level.
- **A half-step weight.** 450 for the hero and 500 for headings; avoid 700.
- **Mono for machines.** Anything code, terminal or model-ID is in GeistMono.

### Note on Font Substitutes
If `xVf` is unavailable, use a neutral grotesque at weight 450 (variable if possible) with -0.01em tracking; the declared fallback is `"xVf Fallback"`.

## Layout

### Spacing System
- Generated scale: `{spacing.s1}` 1px, `{spacing.s2}` 2px, `{spacing.s3}` 3px, `{spacing.s4}` 4px, `{spacing.s5}` 6px, `{spacing.s6}` 7px, `{spacing.s7}` 8px, `{spacing.s8}` 10px, `{spacing.s9}` 12px, `{spacing.s10}` 14px.
- Most common gaps are 4px, 8px and 12px; button padding is `12px 20px` (large), `10px 18px` (medium) and `4px 12px` (small).

### Grid & Container
- A full-width card grid with a narrow edge margin in the capture: three cards on the first row, then a wide image tile beside a voice card.
- A two-column "For developers" block with copy at left and a code panel at right.
- A three-column stat strip with vertical hairlines, then a news row.
- The page is 3,763px tall at 1280px.

### Whitespace Philosophy
Large empty bands separate modules in the capture; inside modules spacing is tight and utilitarian.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat on `{colors.canvas}` | Page |
| 1 | `{colors.page-largest}` card | Feature cards, no border |
| 2 | `0 16px 48px -8px rgba(0,0,0,0.22)` | A shadow of this form was measured once, on an overlay element |
| 3 | Gradient art | The orange panel and news tiles |

Glass-like inset highlights (`rgba(255,255,255,0.7)` insets) were also measured once; treat them as exceptions.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 3px | Fine details |
| `{rounded.sm}` | 6px | Inputs, small chips |
| `{rounded.md}` | 8px | Measured radius (usage not mapped) |
| `{rounded.lg}` | 12px | Measured radius (usage not mapped) |
| `{rounded.xl}` | 16px | Feature cards |
| `{rounded.pill}` | 9999px | All buttons and tags |

Feature cards use `{rounded.xl}` (16px).

## Components

### Buttons

**`button-primary`** — black pill: background `{colors.ink}`, text `{colors.canvas}`, type `{typography.button}`, padding `12px 20px`, height 44px, `{rounded.pill}`.

**`button-secondary`** — compact black pill (4px 12px, 28px tall, used by cookie actions); the pale variant (`{colors.surface-pill}` with black text) is used for "View Documentation" and "Contact Sales".

### Cards

**`card`** — `{colors.page-largest}` fill, `{rounded.xl}`, a label at lower-left (Chat, Build, Bot, Imagine, Voice) and an "Explore →" link at the right.

### Navigation

**`nav-link`** — 16px regular text in `{colors.ink}`; chevrons indicate dropdowns. The mark is a small logo at far left.

### Code Windows

Dark `{colors.code-surface}` panels with three traffic-light dots and GeistMono text; a copy button sits at the top right of the light variant.

### Links

`link` — text in `{colors.link}` at `{typography.button}`.

## Design System Architecture

No public brand guideline or design-system documentation for x.ai was found. The site's own documentation lives at https://docs.x.ai (opened: a developer hub describing Grok Build, a Responses API, a Voice API and an Imagine API), and the company's GitHub organization (https://github.com/xai-org, opened) lists SDKs and cookbooks under the name SpaceXAI. A rebrand report (https://designcompass.org/en/2026/07/08/xai-spacexai-new-logo/) says the company renamed to SpaceXAI in July 2026 and merged SpaceX's wordmark style with the existing xAI symbol.

The de-facto system, from the page's root variables, is a Tailwind-style set of named color variables (`--color-ink`, `--color-ivory`, `--color-nimbus`, `--color-midnight`, `--color-sunset`, `--color-twilight`, `--color-dusk`, `--color-dawn`, `--color-pewter`, `--color-fog`, `--color-dove`, `--color-codeblock` and others, stored as HSL triplets), a base `--radius: .5rem`, a header height `--site-header-h: 4rem`, and Tailwind's ring/shadow variables.

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the single primary pill in each hero or module.
- Set headlines at weight 450-500 with negative tracking and line-height equal to size.
- Show the product as UI inside `{rounded.xl}` cards on `{colors.page-largest}`.
- Keep orange to gradient art and tiny labels.
- Set code in GeistMono.

### Don't
- Don't fill buttons with `{colors.ember}`.
- Don't use bold weights for headlines.
- Don't use stock photography where a product mock would do.
- Don't add borders to cards; the off-white fill separates them.

## Responsive Behavior

### Breakpoints
The extraction measured 1280px desktop and 390px mobile; named breakpoints were not captured.

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px | 60px hero, card grid, full nav |
| Mobile | 390px | Hero at 36px / 39.6px |

### Touch Targets
Primary pills are 44px tall, medium pills 40px, cookie buttons 28px.

### Collapsing Strategy
Display size drops from 60px to 36px. Card-grid reflow at 390px was not inspected.

## Iteration Guide

1. Change one component at a time.
2. Reference tokens (`{colors.primary}`, `{rounded.pill}`, `{typography.display}`).
3. Keep one black pill per module and put a pale pill beside it.
4. Add variants as separate component entries.
5. Keep body at `{typography.body}`; use mono only for code.
6. Re-measure the capture before introducing any new color.
