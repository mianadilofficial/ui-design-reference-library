---
version: alpha
name: Nordhealth
category: "Design Systems"
description: "Nordhealth (Nordic healthcare and veterinary software) marketing site: Nordhealth Sans at 80px/700 with -1.2px tracking over an accent-blue #3559c7 hero, white cards with layered #0c1a3d shadows, navy #09142f and #081c4a anchors, a #081c4a 10px-radius primary button with a frosted white secondary, and red, yellow and cyan underline accents."

colors:
  canvas: "#ffffff"
  page-largest: "#09142f"
  ink: "#0c1a3d"
  primary: "#081c4a"
  on-primary: "#ffffff"
  accent-blue: "#3559c7"
  accent-blue-dark: "#2847a7"
  accent-blue-light: "#ebeef9"
  surface-gray: "#f6f8f8"
  border-gray: "#e3e9eb"
  ink-muted: "#536772"
  cyan: "#a3ebf3"
  red: "#fc685e"
  yellow: "#f8c35e"
  hairline: "#0000001a"
  button-secondary-bg: "#ffffff29"

typography:
  display:
    fontFamily: "\"Nordhealth Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 80px
    fontWeight: 700
    lineHeight: 92px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Nordhealth Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 30.42px
    fontWeight: 700
    lineHeight: 40.1544px
    letterSpacing: "-0.4563px"
  heading:
    fontFamily: "\"Nordhealth Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
    letterSpacing: "-0.54px"
  subheading:
    fontFamily: "\"Nordhealth Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  body:
    fontFamily: "\"Nordhealth Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: "\"Nordhealth Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 28.8px

rounded:
  xs: 3px
  sm: 10px
  pill: 9999px

spacing:
  s1: 4px
  s2: 6.67px
  s3: 8px
  s4: 12px
  s5: 17px
  s6: 20px
  s7: 22px
  s8: 36px
  s9: 60px
  s10: 108.8px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 17px 22px 15px
    height: 61px
    boxShadow: rgba(12, 26, 61, 0.06) 0px 1px 3px 0px, rgba(12, 26, 61, 0.08) 0px 10px 14px 0px
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 17px 50px 15px 22px
    height: 61px
    boxShadow: rgba(12, 26, 61, 0.06) 0px 1px 3px 0px, rgba(12, 26, 61, 0.08) 0px 10px 14px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 36px
    boxShadow: rgba(12, 26, 61, 0.06) 0px 1px 2px 0px, rgba(12, 26, 61, 0.06) 0px 4px 8px 0px, rgba(12, 26, 61, 0.04) 0px -1px 2px 0px
  footer:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.ink-muted}"
---

## Overview

The captured nordhealth.com homepage is a corporate site for a group that sells practice-management software to veterinary clinics and therapists. It opens on a full-width hero in the accent blue `{colors.accent-blue}` (#3559c7), reading slightly deeper toward the bottom of the capture. A white "nordhealth" wordmark with a stitched-N logomark sits at the top left; the menu (Home, Products, Company with a chevron, Careers, Contact) is white, with a short white underline under the current item "Home". The headline, centered at 80px and weight 700, reads "Hello, we're Nordhealth. We build products that redefine healthcare." The word "products" carries a three-segment underline in red `{colors.red}`, yellow `{colors.yellow}` and cyan `{colors.cyan}`. Under it sit two buttons: "Learn more about us" in `{colors.primary}` navy and "Contact us" in a frosted white (`{colors.button-secondary-bg}`, 16% white) with a play-circle icon.

A white intro card overlaps the hero's lower edge: a dotted constellation illustration at left and the sentence "Thousands of healthcare professionals around the world use Nordhealth's software and APIs…" with a blue "Learn more →" link. "Our products" follows in a split layout: a heading and short paragraph on the left and a carousel of product cards on the right (Provet for veterinary clinics, Diarium for therapists), each with a dark or blue illustrated header showing a stylized UI, a bold name, two or three lines of copy and a blue "Learn more →" link, plus a round white arrow button for the carousel. An "About us" band on `{colors.page-largest}` (#09142f) carries white copy, a cyan "Learn more →" link, a network-graph illustration of lines and circles around a cyan node, and four stat figures ("18+ years", "400", "13,000+", "60,000+") separated by vertical rules. The footer lists products, company links and resources, and ends "© 2026 Nordhealth · Handcrafted in the Nordics."

**Key Characteristics:**
- One typeface, **Nordhealth Sans**, at three weights (400, 600, 700) with negative tracking on headings.
- A saturated accent blue for the hero and links, deep navy for dark bands, white for cards, pale gray for the footer.
- Abstract line-and-dot illustration (constellations, networks) in place of stock photography; product UI is shown as simplified flat mockups.
- A red, yellow and cyan underline as the only multicolor flourish.
- Layered soft navy-tinted shadows (rgba(12, 26, 61, ...)) instead of borders.
- Calm, first-person corporate copy ("Hello, we're Nordhealth", "great healthcare is personal").

## Colors

> **Source pages:** `https://nordhealth.com/` at 1280px and 390px, with the site's `--n-*` root variables.

### Brand & Accent
- **Accent blue** (`{colors.accent-blue}` — #3559c7): `--n-color-primary` on this site; the hero field, links and "Learn more" text (96 character weight as a text color).
- **Accent blue dark** (`{colors.accent-blue-dark}` — #2847a7): `--n-color-primary-dark`.
- **Accent blue light** (`{colors.accent-blue-light}` — #ebeef9): `--n-color-primary-light`.
- **Navy primary** (`{colors.primary}` — #081c4a): `--n-color-secondary-bright`; the fill of the "Learn more about us" button, the only filled CTA the extractor detected.
- **Cyan** (`{colors.cyan}` — #a3ebf3): `--n-color-cyan`; a link and node color on navy, and the third underline segment.
- **Red** (`{colors.red}` — #fc685e) and **Yellow** (`{colors.yellow}` — #f8c35e): `--n-color-red`, `--n-color-yellow`; the first two underline segments and accents in product illustrations.

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): cards and the white section.
- **Navy band** (`{colors.page-largest}` — #09142f): `--n-color-secondary-dark`, the largest background by area (1143).
- **Gray** (`{colors.surface-gray}` — #f6f8f8): `--n-color-gray`; the footer.
- **Border gray** (`{colors.border-gray}` — #e3e9eb): `--n-color-gray-dark`.
- **Hairline** (`{colors.hairline}` — #0000001a): the single measured border color.

### Text
- **Ink** (`{colors.ink}` — #0c1a3d): `--n-color-secondary`, body and card text.
- **Ink muted** (`{colors.ink-muted}` — #536772): `--n-color-charcoal`, secondary copy and footer text (434 character weight).
- **On primary** (`{colors.on-primary}` — #ffffff): text on blue and navy.

### Semantic
No semantic success or error palette is declared in the marketing variables; red and yellow are used decoratively.

## Typography

### Font Family
All text is **Nordhealth Sans**, loaded at 400, 600 and 700, with the fallback stack `-apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif` plus emoji faces. The stylesheet defines OpenType feature sets for body (`"kern" 1, "tnum" 1, "ss06" 1`), headings (`"kern" 1, "tnum" 0, "ss06" 1, "dlig" 1, "liga" 1, "calt" 1`) and the logo (`"kern" 1, "tnum" 1, "ss06" 1, "ss08" 1, "ss12" 1`). Where Nordhealth Sans is unavailable, Inter at 700 for headings and 400 for body is the nearest widely available choice (Inter is the font the separate Nord Design System names as its default).

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 80px | 700 | 92px | -1.2px | Hero headline |
| `{typography.display-mobile}` | 30.42px | 700 | 40.1544px | -0.4563px | Hero headline at 390px |
| `{typography.heading}` | 36px | 700 | 43.2px | -0.54px | Section headings ("Our products", "About us") |
| `{typography.subheading}` | 24px | 700 | 28.8px | normal | Card titles ("Provet", "Diarium") |
| `{typography.body}` | 18px | 400 | 28.8px | normal | Paragraphs |
| `{typography.button}` | 18px | 600 | 28.8px | normal | Button labels |

### Principles
- **Tracking is -0.015em on large text**: `--n-letter-spacing-s` is -0.015em, which gives -1.2px at 80px and -0.54px at 36px, as measured.
- **Line-height tokens**: 1.6 for body, 1.2 and 1.15 for tighter text.
- **Heading weight 700, UI weight 600, body 400**; the stylesheet names these `--n-font-weight-bold`, `--n-font-weight-semi-bold` and `--n-font-weight`.
- Body size is 18px (`--n-font-size`), with 16px, 20px, 24px, 36px and 80px as the other steps in use (`--n-font-size-s`, `-l`, `-xl`, `-xxl`, `-xxxl`) and a 13px small size.

## Layout

### Spacing System
Variables: `--n-space-s` 8px, `--n-space` 16px, `--n-space-l` 20px, `--n-space-xl` 36px and `--n-space-xxl` 60px; `--n-column-padding` 12px. The hero pads 130px top and 120px bottom (`--n-header-padding-top/-bottom`); sections use 8.5% top and 8% bottom padding.

### Grid & Container
`--n-layout-width` is 1130px. In the 1280px capture the white intro card, the product split and the stat row all align to a left edge of about 87px and a right edge near 1193px, i.e. a centered 1130px column.

### Whitespace Philosophy
Generous, percentage-based section padding; content lives in a single centered column, with the hero and the navy band running edge to edge.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Header, footer, text |
| 1 | `rgba(12, 26, 61, 0.1) 0px 1px 3px, rgba(12, 26, 61, 0.06) 0px 1px 2px, rgba(12, 26, 61, 0.04) 0px -1px 2px` (`--n-box-shadow-xs`) | Small raised items |
| 2 | `rgba(12, 26, 61, 0.06) 0px 1px 2px, rgba(12, 26, 61, 0.06) 0px 4px 8px, rgba(12, 26, 61, 0.04) 0px -1px 2px` (`--n-box-shadow-s`, 7 uses) | White cards |
| 3 | `rgba(12, 26, 61, 0.06) 0px 1px 3px, rgba(12, 26, 61, 0.08) 0px 10px 14px` (`--n-box-shadow`) | Buttons |

Shadows are tinted with the ink color rather than black.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 3px | Cards (`--n-border-radius-s`, 7 uses) |
| `{rounded.sm}` | 10px | Buttons (`--n-border-radius`) |
| `{rounded.pill}` | 9999px | Fully rounded ends (`--n-border-radius-pill` 999px; circles use 50%) |

## Components

### Buttons
**`button-primary`**: `{colors.primary}` fill, white `{typography.button}` text (18px/600), padding `17px 22px 15px`, 61px tall, `{rounded.sm}` 10px radius, shadow level 3. On hover the button flips to a white fill with `{colors.ink}` text. **`button-secondary`**: `{colors.button-secondary-bg}` frosted fill, white text, padding `17px 50px 15px 22px` (extra right padding for the icon), same radius and shadow.

### Cards
**`card`**: white, 3px radius, 36px padding, shadow level 2. Product cards carry a full-bleed illustrated header on navy or blue and a "Learn more →" link in `{colors.accent-blue}`.

### Navigation
White menu labels on the hero; the measured header color on the logo link is `{colors.accent-blue}`; the current item is underlined.

### Footer
**`footer`**: `{colors.surface-gray}` background, `{colors.ink-muted}` text at 16px/25.6px.

## Design System Architecture

Nordhealth publishes the **Nord Design System** at https://nordhealth.design ("The design system behind Nordhealth's products": production-grade web components, tokens and guidelines; 57 components and 300 icons; installable as `@nordhealth/components`, loadable from `nordcdn.net`, with a Tailwind integration, a Figma toolkit, an LLMs.txt and source under https://github.com/nordhealth). The Nordhealth homepage footer links to it under "Resources".

Opened pages show that the marketing site is not built on it. The homepage HTML contains no `nord-*` web components and no `@nordhealth` or Nord CDN references; its own variables are `--n-*` with different names and values from the Nord Design System tokens page (this site: `--n-color-primary` #3559c7, `--n-border-radius` 10px, `--n-font-size-xxxl` 80px, font Nordhealth Sans, button navy #081c4a; the design system: `--n-color-accent` #3559c7, `--n-border-radius` 5px, `--n-font-size-xxxl` 2.25rem, Inter as default UI font, `--n-color-button` #ffffff). A few brand values coincide (the accent hex #3559c7 and the text color #0c1a3d appear in both), which is consistent with a shared brand but not with shared code. For that reason no values were taken from the design system and no component pages were measured.

The de-facto system on nordhealth.com is therefore the 56 `--n-*` variables: color (`--n-color-primary`, `-primary-dark`, `-primary-light`, `-secondary`, `-secondary-bright`, `-secondary-dark`, `-charcoal`, `-gray`, `-gray-dark`, `-gray-light`, `-cyan`, `-red`, `-yellow`, `-white`), type (`--n-font-family`, a size scale xs to xxxl, weights, letter-spacing and line-height tokens), space, radius, shadow, layout width and a shared `--n-transition` of 0.25s cubic-bezier(0.645, 0.445, 0.355, 1). No public brand guideline or press kit page was opened for this site.

## Do's and Don'ts

### Do
- Use Nordhealth Sans 700 for headlines with -0.015em tracking and 400 for body at 18px.
- Use `{colors.accent-blue}` for hero fields and links, `{colors.primary}` for the one filled button, `{colors.page-largest}` for dark bands.
- Shape cards at 3px and buttons at 10px, with the ink-tinted layered shadows.
- Use illustration (dots, lines, stylized UI) rather than stock photography.
- Keep the red, yellow, cyan underline to a single emphasized word.

### Don't
- Don't use black shadows; tint them with `{colors.ink}`.
- Don't assume the Nord Design System tokens apply to this site; they differ.
- Don't add more filled buttons than one per section; the secondary is frosted, not filled.
- Don't use weights between 400 and 600 for body text.

## Responsive Behavior

At 390px the hero headline drops from 80px/92px to 30.42px/40.1544px (weight 700, -0.4563px tracking, which is -0.015em of the size). The mobile text sizes measured are 16px (most used), 20px, 18px, 24px, 14px, 13.33px and 10px. The stylesheet's `--n-layout-width` is 1130px and sections use percentage padding, so the column narrows with the viewport. At 1280px the product carousel clips its third card at the right edge, with a round arrow button; no other mobile layout changes were captured.

## Iteration Guide

1. Start from `{colors.canvas}` with `{colors.ink}` text in Nordhealth Sans (or Inter) at 18px/28.8px.
2. Use `{colors.accent-blue}` hero fields with a white 80px/700 headline and one `{colors.primary}` button.
3. Build cards at 3px radius and 36px padding with the ink-tinted shadow stack.
4. Use `{colors.page-largest}` navy for a contrasting "About" band with cyan links.
5. Re-run `node web/scripts/verify-designs.mjs --slug=nordhealth` after edits.
