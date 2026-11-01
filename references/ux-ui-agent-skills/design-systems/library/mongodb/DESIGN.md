---
version: alpha
name: MongoDB
category: "Backend, Database & DevOps"
description: "MongoDB homepage system: a teal-black stage (#061621) with cream (#fdfeec) text, one spring-green (#00ed64) button with #001e2b labels and 4px radius, Sohne Condensed 700 uppercase headlines, Sohne 16px body, 12px dark cards with 1px translucent white borders."
colors:
  canvas: "#061621"
  page-body: "#fdfeec"
  ink: "#fdfeec"
  primary: "#00ed64"
  on-primary: "#001e2b"
  ink-muted: "#b8c4c2"
  ink-white: "#ffffff"
  slate: "#3d4f58"
  link: "#00684a"
  surface-card: "#081b28"
  border-card: "#ffffff1a"
typography:
  display:
    fontFamily: "\"Sohne Condensed\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 30.4px
  heading:
    fontFamily: "\"Sohne Condensed\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 43.52px
    fontWeight: 700
    lineHeight: 41.344px
    letterSpacing: "-0.4352px"
    textTransform: uppercase
  body:
    fontFamily: Sohne, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: Sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  3xl: 48px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    height: 50px
    borderColor: "{colors.link}"
  button-primary-hover:
    textColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.link}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    padding: 8px 48px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    borderColor: "{colors.link}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.border-card}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-white}"
---

## Overview

MongoDB's homepage (captured at 1280px desktop width, page height 5470px) is a dark, teal-black product stage. The hero band sits on `{colors.canvas}` (`#061621`) with an all-caps condensed headline, "EVERY SCALE. EVERY AGENT. ONE PLATFORM", set in Sohne Condensed at 32px weight 700 in the extraction (the capture shows it rendered much larger than that on screen; the 32px figure is what the h1 element reports). Directly under it sits a single green button, `{colors.primary}` (`#00ed64`), with dark text `{colors.on-primary}` (`#001e2b`) and a 1px `{colors.link}` (`#00684a`) border. That one saturated green against near-black is the page's visual signature.

The `<body>` background measured as `#fdfeec` (`{colors.page-body}`), a pale cream-green. Dark sections are layered on top of it, and the lower part of the capture shows cream cards ("MongoDB Atlas", "MongoDB Community Edition") sitting on a dark teal band. So the system is two-polarity: a dark stage for product storytelling and a cream paper tone for light cards and sections. Both polarities use the same green button.

**Key Characteristics:**
- Neon green `{colors.primary}` filled button with `{colors.on-primary}` text and a darker green border; radius `{rounded.sm}` (4px) at rest.
- Hover behaviour measured on the "Get Started" buttons: border radius changes from 4px to 40px (a pill) while fill and text colours stay the same.
- All-caps Sohne Condensed (700) for display headlines; the measured h2, "ATLAS AGENT ENGINE", is 43.52px with -0.4352px letter spacing and `text-transform: uppercase`.
- Sohne for body and UI at 16px/24px, weight 400; Sohne Mono used for small spaced-out eyebrow labels (the capture shows labels like "AVAILABLE NOW", "NEW - PUBLIC PREVIEW").
- Cards on the dark stage use `{colors.surface-card}` (`#081b28`), a 1px `{colors.border-card}` (`#ffffff1a`) hairline and a 12px radius.
- Generated gradient/geometric artwork (a segmented green, purple and teal fan shape in the capture) fills the large hero card.
- Announcement strip at the very top in a dark green, with a lime "ANNOUNCEMENT" tag.

## Colors

> **Source pages:** home (`/`) of mongodb.com, measured by the extractor on desktop and mobile; additional values read from the CSS custom properties the page ships on `:root` (209 variables).

### Brand & Accent
- **Spring Green** (`{colors.primary}` - `#00ed64`): fill of the primary button. Also present in the page's root variables as `--mdb-green-main` and `--color-background-brand`.
- **Forest Teal** (`{colors.on-primary}` - `#001e2b`): label colour on the green button; root variable `--mdb-blue-ink`, also `--color-blue-80`.
- **Link Green** (`{colors.link}` - `#00684a`): link colour, button border and hover colour for CTA links (`--color-state-link-cta-hover`, `--mdb-green-dark`).

### Surface
- **Canvas** (`{colors.canvas}` - `#061621`): the dark stage behind the hero and footer (footer background measured `#061621`).
- **Page Body** (`{colors.page-body}` - `#fdfeec`): the body background and the colour of most body copy placed on dark surfaces (the most-read text colour by character count).
- **Card** (`{colors.surface-card}` - `#081b28`): dark card fill, 12px radius, hairline border.
- **Card Border** (`{colors.border-card}` - `#ffffff1a`): translucent white hairline.
- **Slate** (`{colors.slate}` - `#3d4f58`): measured both as a text colour and as the most frequent border colour in the extraction.

### Text
- **Ink** (`{colors.ink}` - `#fdfeec`): primary text on dark surfaces.
- **Ink Muted** (`{colors.ink-muted}` - `#b8c4c2`): secondary text on dark surfaces; root variable `--mdb-gray-2`.
- **Ink White** (`{colors.ink-white}` - `#ffffff`): footer and navigation text, measured on the footer element.

### Other colours present in the shipped CSS
The root variables also include blue (`#006cfa` for focus/info states), purple (`#7c25ff`), yellow, red (`#db3030` for error borders) and a lime (`#b1ff05`, `#e9ff99`) ramp. These are variables the page defines; the homepage capture itself shows green, purple and teal in artwork and a bright blue "Builder" toggle in the experience selector. No semantic tokens beyond the generated set are declared in this file's frontmatter.

## Typography

### Font Family
The page's loaded fonts (reported by the extractor) are Sohne 400 and 500, Sohne Condensed 700, Sohne Mono 400, MongoDB Value Serif 400, and Noto Sans KR 300. By character count Sohne carries 2372 characters, Sohne Condensed 286, MongoDB Value Serif 247, Sohne Mono 161, Euclid Circular A 128 and Akzidenz-Grotesk Std 20. Root variables name the stacks: `--font-base` (Sohne), `--font-header` (Sohne Condensed), `--font-mono` (Sohne Mono), `--font-novelty` (MongoDB Value Serif) and `--hp-font-sans` (Euclid Circular A).

The LeafyGreen repository README (opened, github.com/mongodb/leafygreen-ui) does not itself state which families the marketing site uses, so this file does not assert how those two systems relate typographically.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 32px | 700 | 30.4px | normal | Measured h1 element (Sohne Condensed) |
| `{typography.heading}` | 43.52px | 700 | 41.344px | -0.4352px | Section titles, uppercase |
| `{typography.body}` | 16px | 400 | 24px | normal | Paragraphs |
| `{typography.button}` | 16px | 500 | 16px | normal | Button label |
| `{typography.link}` | 16px | 400 | normal | normal | Inline and nav links |

Other sizes seen by character count: 18px, 36px (with 0.36px tracking), 14px, 12px (1.2px tracking, eyebrows), 64px, 76.8px (-0.768px), 58px (-0.58px). They are listed as measured and are not declared as tokens.

### Principles
- Display is condensed, bold, tight and usually uppercase. Do not use it for paragraphs.
- Body is regular-weight Sohne at 16px on a 24px line; buttons step up to weight 500.
- Eyebrow labels are small, widely tracked and monospaced.

### Note on Font Substitutes
Sohne and Sohne Condensed are loaded as web fonts by the site; the fallback stacks declared by the site are Helvetica Neue, Helvetica, Arial, sans-serif. If you do not have the fonts, use those stacks; a condensed grotesque such as Barlow Condensed is a visual stand-in for the headlines but is a suggestion of this file, not a MongoDB specification.

## Layout

- Desktop width measured at 1280px; the header element measured 1184px wide, which leaves 96px of total horizontal margin at that width.
- Most frequent measured padding values: 24px, 16px, 18px, 8px, 48px. Most frequent gaps: 24px, 8px, 4px, 40px, 16px.
- The hero is a centred stack (select-experience toggle, headline, buttons) followed by a two-column area: one tall card on the left, two stacked cards on the right.
- Below, the Atlas section uses a left vertical list of use cases (Vector Search, Stream Processing, Operational, Transactional, Text Search, Analytical, Graph, Geospatial) beside a large card with text and an illustration.
- The "Deploy Your Way" row is a horizontally scrolling set of cards with a progress indicator.

### Spacing System
Declared tokens: `s1` 1px, `s2` 4px, `s3` 6px, `s4` 8px, `s5` 10px, `s6` 12px, `s7` 16px, `s8` 18px, `s9` 20px, `s10` 24px (all measured values from the page).

## Elevation & Depth

Measured box shadows:
- `rgba(0,0,0,0.15) 0 3px 9px` (28 occurrences, the common small lift).
- `rgba(0,30,43,0.12) 0 26px 44px` plus `rgba(0,0,0,0.13) 0 7px 13px` (4 occurrences, large floating panels).
- `rgba(0,0,0,0.13) 0 7px 12px` and a two-layer `0 1px 6px / 0 2px 32px` combination (one each).

On the dark stage depth mostly comes from tonal steps (`{colors.canvas}` to `{colors.surface-card}`) and the `{colors.border-card}` hairline, not shadows; the measured card has no box shadow.

## Shapes

Measured border radii, by frequency: 16px, 2px, 8px, 4px, 50%, 12px, 48px, 9999px, 999px, 24px.
- `{rounded.sm}` 4px: buttons at rest.
- `{rounded.lg}` 12px: dark cards.
- `{rounded.xl}` 16px: the most frequent radius overall by element count; which components carry it was not isolated.
- `{rounded.pill}` 9999px: used on 2 elements in the measurement; which ones was not isolated.
- Buttons animate from 4px to 40px radius on hover.

## Components

### Buttons
- **button-primary**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, radius `{rounded.sm}`, padding 16px 32px, height 50px, border 1px `{colors.link}`.
- **button-primary-hover**: label colour `{colors.canvas}` in the generated token; the extractor's hover probe additionally recorded the radius going to 40px.
- A second green button variant measured at 48px height, padding 15px 24px, 0.16px letter spacing, border `#00ed64`, text `#061621`.
- An outlined button on light surfaces ("Read Case Study"): transparent, text and 1px border `#001e2b`, 4px radius, 16px 32px padding.
- Text links with an arrow (for example "Learn about the platform", "Documentation") are the tertiary action.

### Cards & Containers
- **card**: `{colors.surface-card}` fill, `{colors.border-card}` 1px border, `{rounded.lg}` radius, containing an eyebrow (green dot + mono caps label), a condensed uppercase title, paragraph and a text link.
- Light cards (cream fill, large radius) appear in the "Deploy Your Way" row.

### Navigation
Header in the capture: leaf wordmark left, items Products, Resources, Solutions, Company (with chevrons), Pricing, then a kebab menu and a green "Get Started" button on the right. The nav text colour is `{colors.canvas}` in the generated token set. A floating round green chat button sits at the lower right of the viewport.

### Footer
`{colors.canvas}` background with `{colors.ink-white}` text, 626px tall in the measurement.

## Design System Architecture

- MongoDB publishes LeafyGreen as open source: the repository [mongodb/leafygreen-ui](https://github.com/mongodb/leafygreen-ui) (opened) describes itself as "A library of React components, CSS patterns, and CLI tools for MongoDB's LeafyGreen Design System", is a monorepo with 80+ packages under `/packages`, styles with Emotion, ships `@leafygreen-ui/palette` and `@leafygreen-ui/tokens`, and is Apache 2.0 licensed.
- The palette file in that repo ([palette.ts](https://raw.githubusercontent.com/mongodb/leafygreen-ui/main/packages/palette/src/palette.ts), opened) lists black `#001E2B`, green base `#00ED64`, green dark2 `#00684A`, green dark3 `#023430`, gray dark2 `#3D4F58`, gray dark3 `#1C2D38`, and blue base `#016BF8`, among others. Several of these equal values measured on the homepage; this file does not claim the homepage is built with the LeafyGreen packages, because the homepage's own `:root` variables use different names (`--color-*`, `--mdb-*`, `--tw-*` Tailwind variables).
- The homepage's CSS custom properties are the de-facto system: colour ramps named by number (`--color-green-60`, `--color-blue-80`), semantic aliases (`--color-text-primary`, `--color-background-body`, `--color-border-error`, `--color-state-focus`), font stacks (`--font-base`, `--font-header`, `--font-mono`, `--font-novelty`) and weight variables (`--font-medium` 500, `--font-bold` 700).
- The [brand-resources page](https://www.mongodb.com/brand-resources) (opened) says the logo pairs the name with the leaf icon, only four logo colours may be used, and points to a media kit for hex values and typography; it gives no values itself.

## Do's and Don'ts

### Do
- Put one `{colors.primary}` button per band, with `{colors.on-primary}` text.
- Use `{colors.ink}` for body text on dark surfaces and `{colors.ink-muted}` for secondary text.
- Keep display headlines condensed, bold and uppercase.
- Give dark cards a `{colors.border-card}` hairline rather than a shadow.

### Don't
- Do not put `{colors.primary}` text on light backgrounds; the measured link colour for light surfaces is `{colors.link}`.
- Do not use pure black; the darkest measured values are `#001e2b` and `#061621`.
- Do not round buttons beyond 4px at rest; the pill shape is the hover state.
- Do not mix more than one saturated accent (green) in UI controls; purple and teal appear in artwork.

## Responsive Behavior

The extractor also measured a mobile viewport. The h1 stays 32px (measured 63px tall at 350px wide); the h2 drops from 43.52px to 25.35px with -0.2535px tracking; body stays 16px/24px; the primary button keeps 16px 32px padding, 50px height, 4px radius. Cards go single-column (body paragraph measured 342px wide on mobile versus 408px on desktop).

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add the green button only after layout is settled.
2. Use the card recipe (surface-card, hairline, 12px radius) for any grouped content.
3. Add eyebrow labels in a monospaced small caps style to signal product status.
4. When a value is missing here, measure it on mongodb.com before adding it; do not infer from the LeafyGreen palette.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mongodb` after any edit.
