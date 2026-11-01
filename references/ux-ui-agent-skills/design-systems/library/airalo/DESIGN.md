---
version: alpha
name: Airalo
category: "Travel & Hospitality"
description: >-
  Airalo's website is a warm eSIM storefront: cream canvas #f4ebe2, black ink, an orange #ff8832 pill button, a sky-blue #85ccdb feature panel, Alexandria bold at 48px for headlines over Satoshi 18px body, and flat character illustrations with soft confetti shapes.
colors:
  canvas: "#f4ebe2"
  surface-cream: "#faf5f2"
  ink-muted: "#60686c"
  ink-highlight: "#295161"
  positive: "#6bba8c"
  negative: "#eb0000"
  warning: "#ffa920"
  ink: "#000000"
  primary: "#ff8832"
  on-primary: "#000000"
  surface-card: "#ffffff"
  surface-sky: "#85ccdb"
  border-normal: "#aeb4b7"
  primary-hover: "#ffb671"
typography:
  display:
    fontFamily: Alexandria, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 59px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: Alexandria, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 39px
    letterSpacing: "-0.96px"
  body:
    fontFamily: Satoshi-Regular, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: "-0.18px"
  button:
    fontFamily: Satoshi-Regular, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.36px"
  link:
    fontFamily: Satoshi-Regular, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 64px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 51px
    borderColor: "{colors.border-normal}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 0px 24px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 6px 8px
  text-input:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 8px
    height: 54px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 4px 8px 0px
---

## Overview

Airalo sells travel eSIMs, and its homepage looks like a friendly illustrated storybook rather than a telecom site. The page background is a warm cream (`{colors.canvas}`), a centred text nav sits above a wide search field ("Where do you need an eSIM?"), and a rotating hero shows two flat-style travellers dancing with phones beside "Feel the freedom of unlimited data". Pale peach, mint and blue lozenges float behind the content as confetti.

Below the hero the page alternates between cream and a big sky-blue rounded panel that asks "Why do over 30 million people choose Airalo?" with four white circular icons, then a tabbed "How it works / Learn with Airalo" video block. The tone is cheerful, plain-language and reassuring; the visual system is soft, rounded and generously spaced.

Key characteristics:
- Cream canvas and white cards instead of a stark white page.
- Pure black text (`{colors.ink}`) for maximum legibility on the cream.
- One loud accent: orange (`{colors.primary}`) on pill buttons; sky blue (`{colors.surface-sky}`) as a large feature surface.
- Alexandria (bold, tightly tracked) for headlines; Satoshi for body and UI.
- Pill buttons (9999px), 16px cards, a 24px-radius feature panel, 64px extra-large radius available.
- Illustration-first imagery: flat characters, landmark collages and abstract confetti shapes.
- A published Tailwind-style token layer (`--color-surface-*`, `--color-text-*`, `--color-border-*`, `--radius-*`).

## Colors

All hex values are measured from the live homepage and its root custom properties (semantic names in parentheses).

### Brand
- **Primary** (`{colors.primary}`; `--color-core-primary`, `--color-cobrand-primary`, `--color-orange-500`): `#ff8832`, the orange of Sign up and primary calls to action; also the selected-border colour (`--color-border-selected`).
- **Primary hover** (`{colors.primary-hover}`; `--color-cobrand-primary-hover`): `#ffb671`, a lighter orange (hover lightens rather than darkens).
- **On-primary** (`{colors.on-primary}`): black text on orange.

### Surfaces
- **Canvas** (`{colors.canvas}`; `--color-background-primary`, `--color-creamy-200`): `#f4ebe2`.
- **Surface cream** (`{colors.surface-cream}`; `--color-background-secondary`, `--color-creamy-100`): `#faf5f2`, the lighter cream used for the three expandable summary bars (How Airalo works, Destinations, Business solutions).
- **Surface card** (`{colors.surface-card}`; `--color-background-tertiary`): white, cards and inputs.
- **Surface sky** (`{colors.surface-sky}`; `--color-surface-secondary-highlight`): `#85ccdb`, the large "Why Airalo" feature panel.

### Text
- **Ink** (`{colors.ink}`): `#000000` for all headings and body (`--color-text-*-normal`).
- **Ink muted** (`{colors.ink-muted}`; `--color-text-*-disabled`, `--color-neutral-600`): `#60686c`.
- **Ink highlight** (`{colors.ink-highlight}`; `--color-text-display-highlight`): `#295161`, a deep teal for text on blue highlights.

### Lines and status
- **Border normal** (`{colors.border-normal}`; `--color-border-normal`): `#aeb4b7`, outlines on white buttons.
- **Positive** (`{colors.positive}`; `--color-border-positive`, `--color-surface-primary-positive`): `#6bba8c`.
- **Negative** (`{colors.negative}`; `--color-border-negative`): `#eb0000`.
- **Warning** (`{colors.warning}`; `--color-border-warning`): `#ffa920`.
- Tinted status surfaces also exist in the root (for example `--color-surface-tertiary-positive: #d9ebdd`, `--color-surface-tertiary-negative: #ffc9c7`, `--color-surface-tertiary-warning: #ffeec6`); they are not tokenised here.

### Usage rules
- Black on cream and black on orange; do not put white text on the orange.
- Use sky blue for one large feature panel per page, with white circles inside it.
- Never use pure white as the page background; cards are white, the canvas is cream.

## Typography

### Families
- **Alexandria**: headings (variable weight 100 to 900 loaded; headlines use 700). Alexandria is a Google Fonts family (fonts.google.com/specimen/Alexandria).
- **Satoshi-Regular**: body, buttons, nav and inputs (variable weight 300 to 900 loaded). Satoshi is distributed by Fontshare (fontshare.com/fonts/satoshi).
- Root variables define system sans fallbacks only; the brand fonts are loaded through font-face rules.

### Hierarchy

| Token | Font | Size | Weight | Line | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display}` | Alexandria | 48px | 700 | 59px | -1.44px | Hero and section headlines |
| `{typography.display-mobile}` | Alexandria | 32px | 700 | 39px | -0.96px | Headlines at 390px |
| `{typography.body}` | Satoshi | 18px | 400 | 28.8px | -0.18px | Body copy |
| `{typography.button}` | Satoshi | 18px | 700 | 24px | -0.36px | Buttons, nav links, inputs |
| `{typography.link}` | Satoshi | 16px | 400 | 24px | normal | Links, small text |

### Principles
- Tracking is always slightly negative: -0.03em on display (48px with -1.44px), -0.01em on body (18px with -0.18px) and -0.02em on buttons (18px with -0.36px).
- Two weights only: 700 for headlines and buttons, 400 for reading text.
- Headlines are short questions or promises, in sentence case, centred on feature panels and left-aligned beside illustration.
- Body line height is generous (28.8px at 18px, a 1.6 ratio).
- Other sizes measured: 13px, 14px, 16px, 20px and 22px for captions, prices and small headings.

### Font substitutes
Alexandria and Satoshi are both freely available. If unavailable, use a geometric sans such as Montserrat for headlines and a geometric grotesque such as Plus Jakarta Sans or Inter for text.

## Layout

### Spacing
Extracted scale: `{spacing.s1}` 4px, `{spacing.s2}` 6px, `{spacing.s3}` 8px, `{spacing.s4}` 12px, `{spacing.s5}` 16px, `{spacing.s6}` 20px, `{spacing.s7}` 24px, `{spacing.s8}` 32px, `{spacing.s9}` 40px, `{spacing.s10}` 48px. Measured gaps: 4px to 48px; paddings go up to 64px for panels.

### Grid and container
- A centred container about two-thirds of the screen wide for nav and search, wider (full viewport) for the hero.
- Hero: illustration left, text right, aligned on the vertical middle.
- The three summary bars sit in a single row, equal widths, each with a down arrow.
- The sky-blue panel bleeds to both viewport edges with 24px-ish rounded corners and has characters overlapping its left and right edges.
- Pagination for the hero is a segmented progress bar with circular arrow buttons.

### Whitespace
- Large vertical gaps (roughly 60px to 100px) between bands; confetti shapes fill the margins.
- Text columns are narrow (about 420px) next to illustrations.

## Elevation & Depth

Elevation is soft and subtle:
- Cards: `rgba(0, 0, 0, 0.08) 0px 4px 8px 0px` (the `{components.card}` shadow).
- Larger floating elements: `rgba(0, 0, 0, 0.08) 0px 12px 24px 0px`.
- An overlay token (`--color-overlay: #0003`) dims content behind modals.
- There are no hard borders on cards; separation comes from white on cream and the soft shadow.
- Depth in imagery comes from overlapping illustration layers (characters in front of the blue panel).

## Shapes

- `{rounded.xs}` 4px: small tags.
- `{rounded.sm}` 8px: inputs (`{components.text-input}`).
- `{rounded.md}` 16px: cards.
- `{rounded.lg}` 24px: feature panels and image tops.
- `{rounded.xl}` 64px: very large containers.
- `{rounded.pill}` 9999px: all buttons and the search bar's outer shape, circular icon buttons.
- Confetti shapes are rotated rounded rectangles, diamonds and circles in pale peach, mint and blue.

## Components

### Buttons
- **button-primary** (Sign up, About unlimited packages): `{colors.primary}` fill, `{colors.ink}` text, `{typography.button}`, `{rounded.pill}`, padding 12px 24px, height 48px; hover `{colors.primary-hover}`.
- **button-secondary** (Log in, Download Android/iOS app): `{colors.surface-card}` fill, `{colors.ink}` text, `{typography.button}`, `{rounded.pill}`, padding 12px 16px, height 51px, 1px `{colors.border-normal}` outline.
- A small orange circular chat button floats at the right edge.

### Cards
- **card**: `{colors.surface-card}` background, `{colors.ink}` text, `{rounded.md}`, padding 24px, soft shadow. Examples are the Support card ("Need help? We offer 24/7, multi-language support") at 344px tall and destination/price links such as "Thailand ฿138.50".

### Inputs
- **text-input**: white, `{rounded.sm}`, 54px tall, padding 0px 8px, text `{typography.button}`. The hero search field is a wide white box with a magnifier icon at left and a "Locations" dropdown at right.

### Navigation
- **nav**: a centred row (Home, eSIM Store, How Airalo Works, About Airalo, Magazine, Help) under a header holding the logo, globe, currency icon, Log in and Sign up. Active item "Home" is underlined.
- **nav-link**: `{typography.button}`, padding 6px 8px, `{colors.ink}`.
- **link**: `{typography.link}` black with underline on active state.

### Accordion bars
- Three light-cream bars with a bold label and a down arrow: How Airalo works, Destinations, Business solutions.

### Tabs
- "How it works" and "Learn with Airalo": two equal tabs with a black underline on the active one and a thin grey line beneath.

### Signature components
- Feature panel with four white circular icon badges (globe, arrows, phone, QR) and short captions.
- Video card framed in white with a rounded outer border.
- Hero progress bar with arrows.

## Design System Architecture

No public Airalo design system site, token package or brand guideline was found beyond a media center; see `SOURCES.json`. What is observable:
- Media center: https://www.airalo.com/about-us/media-center offers a press kit PDF and primary and secondary logo zips; the page itself states no palette or typeface rules.
- The shipped stylesheet is Tailwind CSS v4 style: variables such as `--text-2xl`, `--container-md`, `--border-width-sm`, `--ease-in`, `--tw-ring-shadow`.
- On top of Tailwind it defines a semantic colour layer: `--color-background-{primary,secondary,tertiary}`, `--color-surface-{primary,secondary,tertiary}-{default,normal,highlight,positive,negative,warning,disabled,inverted}`, `--color-text-{display,title,body,caption}-{normal,disabled,inverted,positive,negative,warning,highlight}`, `--color-border-*`, `--color-icon-*`, plus brand aliases `--color-core-primary` and `--color-cobrand-*` (co-brand variants of primary, hover and on-primary).
- Raw palettes are included as scales (orange, yellow, green, blue, red, neutral, creamy).
- Radius tokens: `--radius-xs` .25rem, `-sm` .5rem, `-md` 1rem, `-lg` 1.5rem, `-xl` 4rem, `-full` 9999px.
- Email tokens (`--color-email-primary`, `--color-email-text-primary: #18191a`) show the system is shared with transactional email.

## Do's and Don'ts

### Do
- Use the cream `{colors.canvas}` as the page background and white for cards.
- Keep orange for the primary action; one per section.
- Set headlines in Alexandria 700 with negative tracking.
- Make every button a full pill.
- Use flat, friendly illustration with limited colours and floating soft shapes.
- Put a short reassuring sentence under every headline.
- Use sky blue for a single big panel with white icon circles.

### Don't
- Don't use white text on orange; the on-primary colour is black.
- Don't darken the primary on hover; the system lightens it.
- Don't use thin or light font weights in headings.
- Don't add sharp corners; the smallest radius is 4px and only for tags.
- Don't use photography in place of the illustration language on the homepage.
- Don't use colours outside the root palette for status; use positive, negative and warning tokens.

## Responsive Behavior

### Breakpoints
Measurements exist at 1280px and 390px. No official breakpoint list was found.

### Mobile
- Headline drops from 48px to 32px (`{typography.display-mobile}`) with line height 59px to 39px and tracking -1.44px to -0.96px.

### Touch targets
- Buttons are 48px and 51px tall; the input is 54px tall.

### Collapsing
- The summary bars (How Airalo works, Destinations, Business solutions) are accordion-style and are expected to work as full-width rows when narrow; this was not measured.

### Images
- Illustrations are transparent-background PNG or SVG-like artwork placed on the canvas; photography is limited to the video thumbnail.

## Voice and Microcopy

- Benefit-first headlines: "A better way to stay connected", "Feel the freedom of unlimited data".
- Scale claims in plain numbers: "Why do over 30 million people choose Airalo?" and "200+ locations", "53 languages".
- Search prompt is a direct question: "Where do you need an eSIM?"
- Support promise: "Need help? We offer 24/7, multi-language support".
- Buttons are short verbs: Sign up, Log in, About unlimited packages.

## Imagery and Art Direction

- Characters are flat vector people with warm skin tones, bold colour-blocked clothing (red stripes, green jacket, yellow cardigan) and exaggerated gestures, always holding a phone, a suitcase or a skateboard.
- Backgrounds are simple landscape fragments (hills, trees, a sunrise disk) on a grey-beige ground shadow.
- The video thumbnail is a landmark collage (Big Ben, Eiffel Tower, Golden Gate-like bridge) with a title in the same headline face.
- Confetti shapes in pale orange, mint and blue float at the edges and are never interactive.

## Iteration Guide

1. Cream page, black text, white cards with a soft shadow.
2. Headline in Alexandria bold with negative tracking; body in Satoshi 18px.
3. One orange pill per section; secondary actions are white pills with a grey outline.
4. Add one large sky-blue rounded panel with white icon circles.
5. Place a friendly illustration beside every major headline.
6. Add tokens only from the site's own root variables or measured values, and record them in `SOURCES.json`.
