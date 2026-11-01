---
version: alpha
name: Notion
category: "Productivity & SaaS"
description: "Notion homepage: white page with warm off-white cards (#f6f5f4), alpha-black text (#000000f2), one blue #0075de with 8px-radius buttons, NotionInter at 96px weight 600 with -4.6px tracking, 12px cards and very faint layered shadows."
colors:
  canvas: "#f9f9f8"
  page-body: "#ffffff"
  ink-secondary: "#615d59"
  primary: "#0075de"
  on-primary: "#ffffff"
  surface-neutral: "#f6f5f4"
  ink-chrome: "#000000e5"
  ink-black: "#000000"
  ink: "#000000f2"
  ink-muted: "#0000008a"
  hairline: "#0000001a"
  primary-hover: "#005bab"
  primary-tint: "#e6f3fe"
  primary-tint-hover: "#f2f9ff"
typography:
  display:
    fontFamily: NotionInter, Inter, -apple-system, "system-ui", "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 96px
    fontWeight: 600
    lineHeight: 100px
    letterSpacing: "-4.6px"
  display-mobile:
    fontFamily: NotionInter, Inter, -apple-system, "system-ui", "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 42px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-1.5px"
  heading:
    fontFamily: NotionInter, Inter, -apple-system, "system-ui", "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 54px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: "-1.87501px"
  subheading:
    fontFamily: NotionInter, Inter, -apple-system, "system-ui", "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body:
    fontFamily: NotionInter, Inter, -apple-system, "system-ui", "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  button:
    fontFamily: NotionInter, Inter, -apple-system, "system-ui", "Segoe UI", Helvetica, "Apple Color Emoji", Arial, sans-serif, "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 15px
    height: 38px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink-chrome}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 8px
  nav:
    textColor: "{colors.ink-chrome}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 15px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-chrome}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-chrome}"
    padding: 80px 0px 24px
  button-secondary:
    backgroundColor: "{colors.primary-tint}"
    textColor: "{colors.primary-hover}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 15px
    height: 38px
  button-secondary-hover:
    backgroundColor: "{colors.primary-tint-hover}"
---

## Overview

The Notion homepage (`https://www.notion.com/`, page title "The AI workspace that works for you. | Notion", measured at 1280px width, page height 4467px) is a white, near-monochrome page with one blue. Text is near-black (`{colors.ink}`, `#000000f2`, 95% black), the surfaces are white and two warm off-whites, and the only saturated UI colour is the blue of the "Get Notion free" button (`{colors.primary}`, `#0075de`). Large type does the visual work: the h1 "Where teams and agents Think together." is set at 96px, weight 600, with -4.6px tracking, and a rounded light-blue pill with a blue dot wraps the word "Think" inside the headline in the capture.

Below the hero sit a framed product screenshot (a "Ramp HQ" workspace with a sidebar, task board and agent list), a logo wall (OpenAI, A24, Figma, FedEx, ramp, Cursor, Substack, NVIDIA, Toyota, clay, Lamborghini, Vercel, Faire, Lovable, goop, Discord and others), the line "The most ambitious companies run on Notion.", and a section "AI where your team works." (54px, weight 700) containing three feature cards on a warm off-white surface. Each card has a small eyebrow ("Capture knowledge", "Find answers", "Automate busywork"), a 600-weight title, a round black arrow button and an embedded product UI illustration (meetings table, a dashboard with a chart, an engineering-tasks view).

**Key Characteristics:**
- One brand blue `{colors.primary}` (`#0075de`), hover `{colors.primary-hover}` (`#005bab`), and a pale tint `{colors.primary-tint}` (`#e6f3fe`) for the secondary "Request a demo" button.
- Warm, slightly yellow-gray neutrals: `{colors.canvas}` (`#f9f9f8`) and `{colors.surface-neutral}` (`#f6f5f4`) beside pure white `{colors.page-body}`.
- Ink is an alpha black rather than a hex gray: `#000000f2` for text, `#000000e5` for navigation, `#0000008a` for muted text, `#0000001a` for hairlines.
- A secondary warm gray text colour `{colors.ink-secondary}` (`#615d59`) for supporting lines such as "G2's #1 knowledge base for 3 consecutive years".
- Very tight display tracking (-4.6px at 96px) with heavy weights 600 and 700.
- 8px-radius rectangular buttons, 12px-radius cards, and fully rounded pills for the language selector.
- Soft, multi-layer shadows with very low opacity (largest layer 0.04) on the framed product screenshot.
- Hand-drawn black-and-white illustrations peek around the product frame in the capture.

## Colors

> **Source pages:** the homepage (`/`), desktop and mobile; values marked "root variable" are CSS custom properties shipped on `:root` (400 variables, prefixed `--tatami-`).

### Brand & Accent
- **Primary** (`{colors.primary}` - `#0075de`): filled button fill; root variable `--tatami-color-button-primary-background`.
- **Primary Hover** (`{colors.primary-hover}` - `#005bab`): hover fill (measured hover on the primary button) and the secondary button's text colour; root variable `--tatami-color-button-primary-background-active`.
- **Primary Tint** (`{colors.primary-tint}` - `#e6f3fe`): fill of the "Request a demo" button; root variable `--tatami-color-blue-200`.
- **Primary Tint Hover** (`{colors.primary-tint-hover}` - `#f2f9ff`): measured hover fill of that button; `--tatami-color-blue-100`.
- Other fills measured in the page's logo/pill area include `#097fe8`, `#ffb110`, `#f64932`, `#e89d01`, `#e32d14` (each covering a small area); they are not declared as tokens because their roles were not isolated.

### Surface
- **Canvas** (`{colors.canvas}` - `#f9f9f8`): second-largest background by area; this is the extractor's canvas value.
- **Page Body** (`{colors.page-body}` - `#ffffff`): the page background (largest by area) and the footer fill; root variable `--tatami-color-background-base`.
- **Surface Neutral** (`{colors.surface-neutral}` - `#f6f5f4`): the warm off-white of the feature cards in the capture; root variable `--tatami-color-background-surface-neutral`.
- **Hairline** (`{colors.hairline}` - `#0000001a`): the only border colour measured (10% black).

### Text
- **Ink** (`{colors.ink}` - `#000000f2`): body element colour and headings; root variable `--tatami-color-text-strong`.
- **Ink Chrome** (`{colors.ink-chrome}` - `#000000e5`): navigation, link and footer text.
- **Ink Black** (`{colors.ink-black}` - `#000000`): pure black, measured on 264 characters; which elements carry it was not isolated.
- **Ink Secondary** (`{colors.ink-secondary}` - `#615d59`): supporting lines and secondary body text; the most-read non-white text colour by character count (459 characters).
- **Ink Muted** (`{colors.ink-muted}` - `#0000008a`): the h3 label "See what Notion can do"; root variable `--tatami-color-alpha-black-500`.

## Typography

### Font Family
Loaded fonts: NotionInter at 400, 500, 600 and 700, and Lyon Text at 400. By character count NotionInter carries 1595 characters and Lyon Text 398; which elements use Lyon Text was not isolated in the measurement. The sans stack is `NotionInter, Inter, -apple-system, system-ui, Segoe UI, Helvetica, Apple Color Emoji, Arial, sans-serif`. Root variables define a numeric type scale named `sans-100` through `sans-1100` with regular, medium, semibold and bold variants (for example `sans-1100-semibold` is `600 6rem / 6.25rem`, the h1 size).

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 96px | 600 | 100px | -4.6px | Hero h1 |
| `{typography.display-mobile}` | 42px | 600 | 48px | -1.5px | Hero h1 at the mobile viewport |
| `{typography.heading}` | 54px | 700 | 56px | -1.87501px | Section h2 |
| `{typography.subheading}` | 14px | 400 | 20px | normal | Small h3 labels |
| `{typography.body}` | 14px | 500 | 20px | normal | Supporting lines |
| `{typography.button}` | 16px | 500 | 24px | normal | Buttons, nav links |

Other sizes by character count: 18px, 22px, 20px, 12px, 72px.

### Principles
- Display sizes are bold and tightly tracked; body is plain 14px to 16px.
- Weight steps (400, 500, 600, 700) carry hierarchy; the colour set stays nearly constant.

### Note on Font Substitutes
NotionInter is loaded by the site and the stack falls back to Inter. Inter is an open-source family, and it is the declared first fallback in Notion's own stack.

## Layout

- Navigation row: logo left; Product, Resources (with chevrons), Pricing, Request a demo centred; Log in and a blue "Get Notion free" button on the right.
- Hero is a centred stack: headline, one-line description, two buttons side by side, then the product frame.
- Feature section: a 54px h2 left-aligned above a two-column card grid, followed by a full-width card.
- Footer measured 396px tall with padding 80px 0 24px and contains a quotation about tools.
- Root variables define page insets of 1rem, 2rem and 3rem and card padding of 2rem inline.

### Spacing System
Tokens are measured values: 3px, 4px, 5px, 6px, 8px, 9px, 10px, 12px, 14px, 15px. Buttons use 6px 15px; the nav ghost link uses 6px 8px.

## Elevation & Depth

Mostly flat. The product frame uses layered, very faint shadows, for example `rgba(0,0,0,0.01) 0 0.175px 1.041px, rgba(0,0,0,0.02) 0 0.8px 2.925px, rgba(0,0,0,0.027) 0 2.025px 7.847px, rgba(0,0,0,0.04) 0 4px 18px`. Feature cards in the capture have no visible border or shadow and are separated from the page by `{colors.surface-neutral}` alone. Nav items show a 5% black fill on hover.

## Shapes

- `{rounded.sm}` 8px: buttons (the most frequent radius).
- `{rounded.xs}` 4px: small elements.
- `{rounded.md}` 12px: cards and the product frame, with top-only 12px corners on some panels.
- `{rounded.pill}` 9999px: the language selector and pill chips; 100% on circular icon buttons.

## Components

### Buttons
- **button-primary**: `{colors.primary}` fill, `{colors.page-body}` text, `{typography.button}`, `{rounded.sm}`, padding 6px 15px, height 38px; hover `{colors.primary-hover}`.
- **button-secondary**: `{colors.primary-tint}` fill, `{colors.primary-hover}` text, same geometry; hover `{colors.primary-tint-hover}`. A white variant with `#097fe8` text was also measured.
- A compact header version of the primary button measured 36px tall with 4px 14px padding.
- **Language selector**: white, 1px `{colors.hairline}` border, pill radius, 14px/500, padding 8px 16px, 38px high ("English (US)").

### Cards
**card**: `{colors.page-body}` per the generated token, `{rounded.md}`. In the capture the feature cards are on `{colors.surface-neutral}`, with an eyebrow, a title, a black circular arrow button and an embedded UI illustration.

### Navigation and footer
**nav**: `{colors.ink-chrome}` text, no fill; **link**: ghost style, 8px radius, 6px 8px padding. **footer**: white, text `{colors.ink-chrome}`.

## Design System Architecture

- No public Notion design system documentation could be read. The brand guideline pages found by search (`notion.notion.site/Notion-Brand-Guidelines-…` and `…/Typography-…`) were opened and returned only the word "Notion" (client-rendered), and `notion.com/brand` redirects to an authenticated URL (HTTP 401). Nothing from them is used here. The [Notion developer changelog](https://developers.notion.com/changelog/block-colors-are-now-supported-in-the-api) (opened) documents block colour names for the API (default, gray, brown, orange, yellow, green, blue, purple, pink, red and their `_background` forms) but gives no hex values, so it is not used for tokens either.
- The de-facto system is in the shipped CSS: 400 root variables under the `--tatami-` prefix, grouped as border, color, dimension, font, motion, shadow, spacing, typography and z. Examples measured: `--tatami-border-radius-300` `.3125rem`, `-600` `.625rem`, `-700` `.75rem`; `--tatami-color-alpha-black-300` through `-900` (`#0003` to `#000000f2`); `--tatami-color-blue-100` `#f2f9ff`, `-200` `#e6f3fe`; `--tatami-color-green-200` `#d0f4d8`, `-400` `#68ce7e`, `-600` `#14832b`; `--tatami-color-red-200` `#fdd3cd`, `-700` `#b01601`; semantic tokens `--tatami-color-text-strong`, `--tatami-color-background-base` (`#fff`), `--tatami-color-background-surface-neutral` (`#f6f5f4`) and `--tatami-color-button-primary-background` (`#0075de`).
- Colour is built from alpha-black steps plus a few named ramps; semantic names (`background-base`, `background-surface-*`, `text-strong`, `button-primary-background`) sit on top of them.
- The type scale is numeric (`sans-50` to `sans-1100`) with per-step letter spacing; mono and serif scales exist too.
- Spacing is exposed both as numbered dimensions (`dimension-spacing-24` is `1.5rem`) and named layout values (`page-inset`, `card-padding-*`, `section-gap-*`).

## Do's and Don'ts

### Do
- Keep text in alpha black and use `{colors.hairline}` for borders.
- Use one `{colors.primary}` button per band; use `{colors.primary-tint}` for the companion action.
- Set display type heavy (600 to 700) with strongly negative tracking.
- Put feature cards on `{colors.surface-neutral}` over white.

### Don't
- Do not add a second brand colour to buttons.
- Do not use hard shadows; the measured shadows are layered and under 5% opacity.
- Do not use pure black for body text; `#000000` was only a minor text colour while the body is `#000000f2`.

## Responsive Behavior

A mobile viewport was measured: the hero h1 drops from 96px to 42px (`{typography.display-mobile}`), line height 48px, tracking -1.5px. Other mobile layout changes were not measured in this pass; the capture shows only the desktop layout.

## Iteration Guide

1. Start with white, `{colors.ink}` text and one `{colors.primary}` button.
2. Add warmth with `{colors.surface-neutral}` cards, not with extra hues.
3. Tighten letter spacing as size grows (see the table).
4. Check any new colour against the `--tatami-` variables before adding it.
5. Re-run `node web/scripts/verify-designs.mjs --slug=notion`.
