---
version: alpha
name: Atlassian
category: "Design Systems"
description: "Atlassian marketing home page (atlassian.com): a white canvas (#ffffff) with near-black ink (#292a2e, headings #101214), a single blue (#1868db) on pill CTAs and links, Atlassian's brand typefaces Charlie Display (54px at weight 500, tight negative tracking) and Charlie Text, 20px and 40px card radii, and a charcoal (#1e1f21) feature band, all expressed through --ds- design-token variables."

colors:
  canvas: "#ffffff"
  page-largest: "#1e1f21"
  ink: "#292a2e"
  primary: "#1868db"
  on-primary: "#ffffff"
  surface-sunken: "#f8f8f8"
  ink-heading: "#101214"
  ink-subtle: "#505258"
  ink-navy: "#1c2b42"
  hairline: "#dddee1"
  primary-hover: "#123263"
  text-input-text: "#42526e"
  surface-brand-subtle: "#cfe1fd"
  primary-pressed: "#1558bc"
typography:
  display:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 54px
    fontWeight: 500
    lineHeight: 56.16px
    letterSpacing: "-1.08px"
  display-mobile:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 45.76px
    letterSpacing: "-0.88px"
  eyebrow:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Noto Sans\", Ubuntu, \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.8px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Charlie Display\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
    letterSpacing: "-0.32px"
  body:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18.72px
  button:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 31.2px
    letterSpacing: "-0.2px"
  input:
    fontFamily: "\"Charlie Text\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 20px
  xl: 32px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 19.5px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 26px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    padding: 0px 32px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.nav}"
    padding: 10px 16px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    height: 22px
  card:
    backgroundColor: "{colors.surface-brand-subtle}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.lg}"
    padding: 48px 40px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
---

## Overview

This file documents the marketing home page at https://www.atlassian.com (opened 2026-10-09 at 1280px and 390px). The capture shows, from the top: a charcoal event strip for "team'26 Europe" with the text "7–8 October • Livestream" and a "Tune in now" link and a close icon; a white navigation bar with the blue ATLASSIAN wordmark, menu items (Products, AI, Solutions, Why Atlassian, Resources, Enterprise) with chevrons, a search icon and "Sign in"; a centered hero with the headline "Discover the power of knowing", a sentence of supporting copy, a blue pill "Get started with Jira" and a blue text link "Contact us →"; a large framed product screenshot of a Jira board; a row of customer logos; a mid-page statement "Your context, wherever you need it"; two huge statistics, "44%" and "48%", set in a monospaced face with uppercase captions "BETTER ANSWER QUALITY" and "FEWER TOKENS"; and a charcoal band, "Connect the work behind the work", with an outlined pill and a node-graph illustration of app icons. A small reCAPTCHA badge floats at the right edge; it is a third-party widget and not part of the brand UI.

The page is crisp and product-forward: lots of white, a single blue, and one dark section for contrast. Product UI is shown, not described.

**Key Characteristics:**
- White canvas (`{colors.canvas}` #ffffff) with `{colors.ink}` #292a2e for reading text and `{colors.ink-heading}` #101214 for headlines.
- One action blue, `{colors.primary}` #1868db, on the 48px pill "Get started with Jira" (10px 26px padding) and on text links such as "Contact us".
- Hover deepens the pill to `{colors.primary-hover}` #123263.
- Charlie Display at weight 500 with negative tracking for headlines (54px, 44px at 390px), Charlie Text for everything else.
- Large radii on feature cards (20px, with 32px and 40px for bigger blocks) and a full pill on buttons.
- A charcoal band (`{colors.page-largest}` #1e1f21), the largest measured fill, for the dark feature section.
- Pastel accent fills such as `{colors.surface-brand-subtle}` #cfe1fd on cards.

## Colors

> **Source pages:** home (`/`), measured at 1280px and 390px.

### Brand & Accent
- **Atlassian Blue** (`{colors.primary}` #1868db): CTA fill and link color. In the page's root variables the same value is `--ds-background-brand-bold`, `--ds-link`, `--ds-text-brand` and `--ds-icon-brand`.
- **Primary Hover** (`{colors.primary-hover}` #123263): measured hover fill of the CTA; the root variables also carry it as `--ds-background-brand-boldest-hovered`.
- **Primary Pressed** (`{colors.primary-pressed}` #1558bc): `--ds-link-pressed` and `--ds-background-information-bold-hovered` in the root variables, and a measured fill in the lower sections.
- **On Primary** (`{colors.on-primary}` #ffffff): label color on blue.

### Surface
- **Canvas** (`{colors.canvas}` #ffffff): page background and navigation.
- **Sunken** (`{colors.surface-sunken}` #f8f8f8): light gray section background (`--ds-surface-sunken`).
- **Charcoal** (`{colors.page-largest}` #1e1f21): the dark feature band and the event strip.
- **Brand Subtle** (`{colors.surface-brand-subtle}` #cfe1fd): pale blue card fill (`--ds-background-brand-subtlest-hovered`).

### Text
- **Ink** (`{colors.ink}` #292a2e): the most-read color (`--ds-text`, `--wac-color-body`).
- **Ink Heading** (`{colors.ink-heading}` #101214): headings and navigation (`--wac-color-heading`).
- **Ink Subtle** (`{colors.ink-subtle}` #505258): secondary text (`--ds-text-subtle`). **Ink Navy** (`{colors.ink-navy}` #1c2b42) appears in a few characters.
- **Input text** (`{colors.text-input-text}` #42526e): the measured search-field text color.

### Borders
**Hairline** (`{colors.hairline}` #dddee1) for dividers (`--ds-surface-pressed`).

### Semantic
Accent hues (a green #4c6b1f, orange #c75300, purple #803fa5) appear as fills in small feature tiles and as text in a few characters; the root variables define success, warning and danger tokens in a full `--ds-` set, but the home page does not use them as status colors, so none is promoted.

## Typography

### Font Family
The page loads Charlie Display (weights 400, 500, 700), Charlie Text (400, 500, 700) and Atlassian Mono. By character count, Charlie Text carries about two thirds of the text, Charlie Display most of the rest, and Atlassian Mono the statistics and captions. The Atlassian Design System documentation says its product typefaces are different: Atlassian Sans, "our derivative of the Inter Variable typeface", and Atlassian Mono, "our derivative of the JetBrains Mono typeface"; that page does not mention Charlie. OH no Type Company's case page (https://ohnotype.co/custom/atlassian) says it created Charlie in 2017 as two variants, Charlie Display for display sizes and Charlie Text adapted for body text. The page stacks these over `-apple-system`, `"Segoe UI"`, Roboto and Helvetica Neue; those are the substitutes.

### Hierarchy

| Token | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 54px | 500 | 56.16px | -1.08px | Hero headline |
| `{typography.display-mobile}` | 44px | 500 | 45.76px | -0.88px | Hero at 390px |
| `{typography.subheading}` | 32px | 500 | 38.4px | -0.32px | Section headline |
| `{typography.eyebrow}` | 12px | 400 | 20px | 0.8px | Uppercase menu labels ("FEATURED APPS") |
| `{typography.body}` | 12px | 400 | 18.72px | 0 | Fine print (study footnote) |
| `{typography.button}` | 20px | 400 | 24px | 0 | Pill labels |
| `{typography.link}` | 20px | 500 | 31.2px | -0.2px | Text links |
| `{typography.nav}` | 16px | 400 | n/a | 0 | Navigation |
| `{typography.input}` | 14px | 400 | n/a | 0 | Search field |

The extractor's `body` role resolved to the 12px footnote. Measured sizes by character also include 16px (most common), 20px, 22px, 14px, 40px and 96px for statistics; only the sizes listed above are declared as tokens.

### Principles
- Headlines are weight 500 with negative tracking that tightens as size grows (-0.32px at 32px, -1.08px at 54px).
- Uppercase labels use positive tracking (0.8px).
- Numbers are shown very large in the mono face with spaced uppercase captions.

## Layout

### Spacing System
Measured paddings and gaps are 2, 4, 6, 8, 10, 12, 15, 16, 19.5 and 20px (`{spacing.s1}` to `{spacing.s10}`). The root variables follow the design-system space scale: `--ds-space-100: 0.5rem`, `--ds-space-200: 1rem`, `--ds-space-300: 1.5rem`, `--ds-space-1000: 5rem`. The header is 68px tall (`--wae-header-height`), with 0px 32px padding.

### Grid & Container
Centered single-column hero text, a wide framed screenshot, logo rows of four to six, and in the dark band a two-column split of text left and illustration right.

### Whitespace Philosophy
Large vertical gaps between sections (the page is 7047px tall) and narrow measure on centered copy.

## Elevation & Depth

Shadows are minimal on the page: measured values are a no-offset `rgb(248,248,248) 0 0 0 0` ring and a small `rgb(128,128,128) 0 0 5px`. The system's overlay shadow, `--ds-shadow-overlay: 0px 8px 12px #1E1F2126, 0px 0px 1px #1E1F214F`, is defined in the root variables. The framed Jira screenshot reads as raised through a thin border and white-on-white contrast; the dark band provides tonal depth.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | Small tags |
| `{rounded.sm}` | 3px | Inputs and small chips |
| `{rounded.md}` | 4px | Small controls |
| `{rounded.lg}` | 20px | Feature cards |
| `{rounded.xl}` | 32px | Large blocks |
| `{rounded.2xl}` | 40px | Largest panels |
| `{rounded.pill}` | 9999px | Buttons (measured as 10000px) |

Imagery is product UI, customer logos in grayscale, and a node-graph illustration of colorful app tiles on charcoal.

## Components

### Buttons
**`button-primary`**: fill `{colors.primary}`, text `{colors.canvas}`, `{typography.button}`, `{rounded.pill}`, padding 10px 26px, height 48px. Hover `{colors.primary-hover}`. The outlined variant on charcoal ("Explore Teamwork Graph") has a 2px white border and white text with the same geometry.

### Links
`link`: `{colors.primary}`, `{typography.link}` 20px/500 with an arrow ("Contact us →").

### Navigation
`nav`: white, 0px 32px padding; `nav-link`: `{colors.ink-heading}`, `{typography.nav}`, padding 10px 16px, 44px tall.

### Inputs
`text-input`: text `{colors.text-input-text}`, 14px, 22px high (the search field).

### Cards
`card`: fill `{colors.surface-brand-subtle}`, text `{colors.ink-heading}`, `{rounded.lg}`, padding 48px 40px.

### Footer
White with `{colors.ink-heading}` text.

## Design System Architecture

Atlassian publishes a public design system at https://atlassian.design, and this marketing page uses it. The page's root variables contain hundreds of `--ds-` custom properties (for example `--ds-text`, `--ds-link`, `--ds-surface-sunken`, `--ds-background-brand-bold`, `--ds-space-100`), and the design system documentation at https://atlassian.design/foundations/tokens/use-tokens-in-code (opened) describes the `--ds-` prefix, the `@atlaskit/tokens` package, the `token()` function that returns `var(--ds-...)`, and theming through `setGlobalTheme()` and `data-theme`. Hex values here come from the measured page and its root variables, not from that documentation. The marketing site layers its own variables (`--wac-color-body`, `--wac-color-heading`, `--wae-header-height`, `--bxp-charlie-text-font-family`) and the Charlie brand fonts, while the documentation's product typefaces are Atlassian Sans and Mono (https://atlassian.design/foundations/typography/product-typefaces-and-scale); the root variables here also define `--atlassian-sans-font-family`, though the measured text is set in Charlie.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the single filled CTA and for links.
- Set headlines in Charlie Display 500 with negative tracking.
- Round buttons fully and cards at 20px or more.
- Show product UI as the main imagery.

**Don't**
- Don't use more than one saturated action color.
- Don't use Atlassian Sans for marketing headlines on this page; the page measured Charlie.
- Don't treat the reCAPTCHA badge or the event strip as brand components.
- Don't add heavy shadows.

## Responsive Behavior

At 390px the hero headline becomes 44px/45.76px at weight 500 and the section title 24px; body falls to 12px and the CTA to 16px, as measured. The navigation, 68px tall on desktop, is the only role measured at 16px on mobile. Wide screenshots and logo rows are scaled; no other mobile layout detail was measured.

## Iteration Guide

1. White canvas, `{colors.ink}` text, one blue action.
2. Take any new color from the `--ds-` root variables on the page and cite the variable.
3. Keep radii to 2 / 3 / 4 / 20 / 32 / 40 / 9999px.
4. Use the dark `{colors.page-largest}` band once per page for contrast.
5. Pair big numerals in the mono face with small uppercase captions.
