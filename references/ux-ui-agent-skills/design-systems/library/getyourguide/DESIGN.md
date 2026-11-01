---
version: alpha
name: GetYourGuide
category: "Travel & Hospitality"
description: >-
  GetYourGuide's website pairs a midnight-blue ink #1a2b49 on white with a vivid interactive blue #0071eb, a coral #ff5533 brand mark colour and critical red #c72a3d for discounts; GT Eesti bold at 36px for the hero, 80px pill buttons, 12px photo cards and a published semantic CSS token layer.
colors:
  canvas: "#ffffff"
  ink: "#1a2b49"
  primary: "#0071eb"
  brand-coral: "#ff5533"
  surface-highlight: "#e1f0ff"
  surface-secondary: "#ebeef1"
  border-primary: "#dcdfe4"
  ink-tertiary: "#858995"
  success: "#007850"
  on-primary: "#ffffff"
  critical: "#c72a3d"
  ink-secondary: "#63687a"
  separator: "#ebeef1"
  primary-hover: "#304c84"
typography:
  display:
    fontFamily: "\"GT Eesti\", \"fallback for GT Eesti\", \"android fallback for GT Eesti\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"GT Eesti\", \"fallback for GT Eesti\", \"android fallback for GT Eesti\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32px
  heading:
    fontFamily: "\"GT Eesti\", \"fallback for GT Eesti\", \"android fallback for GT Eesti\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: "\"GT Eesti\", \"fallback for GT Eesti\", \"android fallback for GT Eesti\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
  body:
    fontFamily: "\"GT Eesti\", \"fallback for GT Eesti\", \"android fallback for GT Eesti\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: "\"GT Eesti\", \"fallback for GT Eesti\", \"android fallback for GT Eesti\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  lg: 32px
  xl: 80px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 16px
  s10: 21px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.xl}"
    padding: 13px 32px
    height: 56px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 22px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.md}"
    borderColor: "{colors.separator}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

GetYourGuide is a marketplace for tours and activities, and its homepage behaves like a very efficient shop window. A soft sky-blue wash at the top frames one promise, "Experiences worth traveling for", over a wide white search pill with a blue Search button. Everything below is a stack of horizontally scrolling rows of photo cards: destinations, "Go beyond the guidebook", "Adventures to plan your trip around", then a three-up trust block ("Why book with GetYourGuide?") and tabbed link lists.

The page is built to be scanned. Headings are bold and navy, secondary text is a cool grey, and prices are the only text that routinely appears in red. Almost all colour comes from photography and the one blue used for actions. The identity around it (described by the agency Further as "energetic and colourful" with a "dynamic line language") is playful, but the product UI is restrained so the photos can carry it.

Key characteristics:
- Midnight-blue ink (`{colors.ink}`) instead of black, with a cool grey secondary (`{colors.ink-secondary}`).
- One interactive blue (`{colors.primary}`) for buttons, links, focus and the active tab underline.
- A coral brand colour (`{colors.brand-coral}`) reserved for the GetYourGuide mark and Originals badge.
- A single geometric sans (GT Eesti) in 400, 500 and 700 for everything, with bold headings.
- Large pill controls (80px radius) and soft 12px photo cards with 1px hairline borders.
- A published semantic custom-property layer (`--interactive-*`, `--label-*`, `--surface-*`, `--border-*`, `--spacing-*x`).

## Colors

Values below are measured on the homepage; the semantic names in parentheses are the site's own custom properties, read from its root.

### Brand and interactive
- **Primary** (`{colors.primary}`, `--interactive-primary`): `#0071eb`, buttons, links, focus border, active tab underline, circular carousel arrows.
- **Primary hover** (`{colors.primary-hover}`, `--interactive-primary-hovered` and `-pressed`): `#304c84`.
- **On-primary** (`{colors.on-primary}`): white text on blue.
- **Brand coral** (`{colors.brand-coral}`, `--label-gyg` / `--surface-gyg`): `#ff5533`, the colour of the logo and the "Originals by GetYourGuide" tag.
- **Critical** (`{colors.critical}`, `--interactive-critical`, `--label-critical`, `--label-discounted`): `#c72a3d`, discounted prices, "Sell out" urgency tags and errors.

### Surfaces
- **Canvas** (`{colors.canvas}`, `--background-primary`): white.
- **Surface secondary** (`{colors.surface-secondary}`, `--background-secondary`): `#ebeef1`.
- **Surface highlight** (`{colors.surface-highlight}`): `#e1f0ff`, a pale blue highlight (the hero's blue wash in the capture is lighter and fades to white).
- **Footer / inverse surface**: `{colors.ink}` (`--surface-inverse-primary`).

### Text
- **Ink** (`{colors.ink}`, `--label-primary`): `#1a2b49`.
- **Ink secondary** (`{colors.ink-secondary}`, `--label-secondary`): `#63687a`.
- **Ink tertiary** (`{colors.ink-tertiary}`, `--label-tertiary`): `#858995`.

### Lines and status
- **Separator** (`{colors.separator}`, `--separator-primary`): `#ebeef1`, card borders.
- **Border primary** (`{colors.border-primary}`): `#dcdfe4`, input and divider borders.
- **Success** (`{colors.success}`, `--label-success`): `#007850`.
- The root also defines warning (`#a65200`), weak surfaces for critical, success and warning, and decorative palette colours (basking yellow, flamingo pink, guiding red, plant green, poolside blue, midnight blue). Only the ones above are tokenised here.

### Usage rules
- Blue means "you can act here"; do not use blue for decoration.
- Red is reserved for price reductions and urgency, never for headings.
- Use ink navy rather than black for text on white.

## Typography

### Family
GetYourGuide's stylesheet declares `--font-primary-legacy: "GT Eesti", ...`, plus `--font-primary: "GYGSans-VF"` and script variants `GYGSansAR-VF` and `GYGSansCYR-VF` (Arabic and Cyrillic). On the measured page GT Eesti loaded in weights 400, 500 and 700; GYGSans did not appear in the loaded-font list. GT Eesti is a Grilli Type typeface by Reto Moser, modernised from the Soviet geometric sans Zhurnalnaya Roublennaya (itsnicethat.com/articles/grilli-type-reto-moser-gt-eesti-230216).

### Hierarchy

| Token | Size | Weight | Line | Use |
|---|---|---|---|---|
| `{typography.display}` | 36px | 700 | 44px | Hero h1 |
| `{typography.display-mobile}` | 28px | 700 | 32px | Hero at 390px |
| `{typography.heading}` | 24px | 700 | 30px | Section titles, button label |
| `{typography.subheading}` | 16px | 700 | 22px | Card titles |
| `{typography.body}` | 14px | 400 | 20px | Meta text |
| `{typography.nav}` | 16px | 400 | 22px | Navigation, inputs, links |

All roles use the same family stack, so hierarchy comes from size and weight only.

### Principles
- No letter-spacing adjustments were measured; the face is set at default tracking.
- Bold (700) is the default for anything that names something (a section, a card, a price); regular (400) for descriptions.
- Prices are bold, with the original price struck through and small, and the discounted price in `{colors.critical}`.
- Ratings use a star glyph with the review count in grey in parentheses.
- Sentence case everywhere; no uppercase styling.

### Font substitutes
GT Eesti is commercial. A close geometric sans substitute is Nunito Sans, Figtree or Inter; keep bold headings and 14px/20px meta.

## Layout

### Spacing
The site publishes a spacing scale in 8px units: `--spacing-0-5x` 4px, `--spacing-1x` 8px, `--spacing-1-5x` 12px, `--spacing-2x` 16px, `--spacing-3x` 24px, `--spacing-4x` 32px, `--spacing-5x` 40px, `--spacing-6x` 48px, `--spacing-7x` 56px, `--spacing-8x` 64px, `--spacing-16x` 128px. The extracted usage scale is `{spacing.s1}` 2px, `{spacing.s2}` 3px, `{spacing.s3}` 4px, `{spacing.s4}` 6px, `{spacing.s5}` 8px, `{spacing.s6}` 10px, `{spacing.s7}` 12px, `{spacing.s8}` 13px, `{spacing.s9}` 16px, `{spacing.s10}` 21px.

### Grid and container
- A single centred column with consistent side margins; the header is 80px tall (`--page-header-height`) with a 36px main menu height variable.
- Content rows: destination tiles (six across, with a partial card) and four-up product cards, each with a circular blue arrow button at the right edge to scroll the row.
- The trust block is three equal bordered tiles; the footer of the page is a tabbed list ("Top attractions worldwide", "Top destinations", "Top countries to visit", "Top attraction categories").

### Whitespace
- Section titles sit 12px or so above their rows; rows are separated by large gaps so each swimlane reads as its own unit.
- Cards have internal padding of 12px to 16px; text hugs the left edge.

## Elevation & Depth

Published effect tokens show a deliberate ladder: `--effect-elevation-xs` through `-2xl`, `--effect-cards-flat` through `-2xl`, `--effect-tiles-default`, `-hover`, `-selected` and `--effect-ticket`. Card effects combine a 1px low-opacity navy ring with soft drops and a faint inset lilac tint (`--elevation-subtle: #dad2f440`).

Measured on the homepage:
- Measured floating-surface shadow (the capture shows it around the search pill and the cookie panel): `rgba(0, 0, 0, 0.06) 0px 0px 32px 0px, rgba(0, 0, 0, 0.16) 0px 4px 8px 0px`.
- Active tab underline: `rgb(0, 113, 235) 0px -4px 0px 0px inset`, a 4px blue bar drawn as an inset shadow.
- Product cards use a hairline border (`{colors.separator}`) rather than a drop shadow.

## Shapes

- `{rounded.xs}` 4px: small tags (sell-out urgency) and image top corners.
- `{rounded.sm}` 8px: inputs, tiles and small buttons.
- `{rounded.md}` 12px: product cards (`{components.card}`) and card image top corners (12px 12px 0 0).
- `{rounded.lg}` 32px: large panels.
- `{rounded.xl}` 80px: primary buttons (the pill).
- `{rounded.pill}` 9999px and 50%: round heart and arrow buttons.
- Destination tiles use 8px-radius photos.

## Components

### Buttons
- **button-primary** (Search, Let's go): `{colors.primary}` fill and border, `{colors.canvas}` text, `{typography.heading}` as measured on Search (24px bold), `{rounded.xl}`, padding 13px 32px, height 56px. Hover and pressed move to `{colors.primary-hover}`.
- The cookie banner's "Let's go" is the same blue pill; "Change preferences" is a text-only blue link.
- Round icon buttons: white circle with 1px blue border and blue chevron (carousel arrows); white circle with heart icon on product photos (wishlist).

### Cards
- **card**: `{colors.canvas}` background, `{rounded.md}`, 1px `{colors.separator}` border, 400px tall in the measurement. Top: a photo with optional tag top-left (sell-out urgency tag in red, "Originals by GetYourGuide" in coral) and a heart button top-right. Then city in small grey, a bold two-to-three-line title, a grey meta line ("7 hours • Small group"), and a footer row with rating and review count on the left and "From" plus price on the right.
- Destination tiles are photo-only with the name in bold and a grey "235 activities" caption below.

### Inputs
- **text-input**: `{typography.nav}`, `{colors.ink}`, 22px inner height inside the large white search pill with placeholder "Find places and things to do" in grey.
- Focused borders use the blue (`--border-primary-focused`); errors use `{colors.critical}` (`--border-primary-error`).

### Navigation
- **nav**: 80px header; the red-orange wordmark at left, "Places to see", "Things to do", "Trip inspiration" with chevrons below it, and at right a language/currency control ("EN/THB") and Profile.
- **nav-link** and **link**: `{typography.nav}` in `{colors.primary}`; destination link lists are blue.

### Tabs
- Four text tabs; the active tab is `{colors.ink}` bold with a 4px blue inset underline; inactive tabs are grey.

### Footer
- **footer**: `{colors.ink}` background, white text, 372px tall, links to Language, Currency, Mobile, Support, Contact, Legal Notice, Privacy.

## Design System Architecture

GetYourGuide operates an internal design system named Compass: the icon font loaded on the page is `compass-icons-v31`. The evidence for this system is the shipped CSS and the loaded icon font, not any published documentation.
- Semantic custom properties at the root (121 measured) organised by purpose: `--background-*`, `--surface-*`, `--label-*`, `--interactive-*` (primary, secondary, tertiary, quaternary, critical with disabled/hovered/pressed states), `--on-interactive-*`, `--border-*`, `--separator-*`, `--content-inverse-*`, `--supportive-over-image-*`, `--effect-*`, `--spacing-*x`, and `--decorative-*` colour names (basking-yellow, flamingo-pink, guiding-red, midnight-blue, plant-green, poolside-blue).
- Dedicated tokens for image overlays: `--supportive-over-image-20/50/80` (`#191b20` at 20%, 50%, 80%).
- Carousels use Swiper (`--swiper-navigation-size: 44px`).
- Identity background: Further's case study, https://www.further.group/work/getyourguide ("Love where you're going", full and abbreviated wordmark and a "G" app icon).
- Typeface source: https://www.itsnicethat.com/articles/grilli-type-reto-moser-gt-eesti-230216.
- GetYourGuide's own press page (https://www.getyourguide.com/press/) returned 403 and was not read, so brand-book specifics are not cited.

## Do's and Don'ts

### Do
- Use `{colors.ink}` navy for text and headings, never pure black.
- Use blue only for actions and links.
- Keep primary buttons as 80px-radius pills, 56px tall for hero actions.
- Show the price row consistently: rating left, "From" and price right, discount in red with the old price struck through.
- Use bold GT Eesti for titles and regular for metadata.
- Use hairline borders on cards instead of shadows; reserve shadow for floating surfaces.
- Keep photography bright and destination-led.

### Don't
- Don't use coral for buttons; it is a brand mark colour.
- Don't use red for non-price headings.
- Don't square off buttons or round cards beyond 12px.
- Don't add uppercase tracking; the voice is sentence case.
- Don't set card text above 16px except the title.

## Responsive Behavior

### Breakpoints
No official breakpoint list was found. Measurements were taken at 1280px and 390px.

### Mobile
- Hero headline drops from 36px/44px to 28px/32px (`{typography.display-mobile}`).
- Carousel rows remain swipeable; arrows are a desktop affordance in the capture.

### Touch targets
- The primary Search button is 56px tall and the Swiper navigation size is 44px, meeting common minimums.

### Collapsing
- The header's three menu groups are a desktop layout; their mobile form was not measured.

### Images
- Cards use a fixed-ratio photo area with cover cropping and a 12px top radius; destination tiles use a portrait crop with 8px corners.

## Voice and Microcopy

- Headlines are second-person invitations: "Experiences worth traveling for", "Go beyond the guidebook".
- Trust copy is short and concrete: "Plans change and that's ok", "Book with confidence".
- Tags are blunt and short.
- Meta lines use a bullet separator: "7 hours • Pickup available • Optional audio guide".
- Cookie panel opens warmly: "Let's give you the best experience possible", with the button "Let's go".

## Iteration Guide

1. White page, navy ink, one blue.
2. Build rows of 12px-radius cards with a hairline border; photo first, bold title, grey meta, price footer.
3. Make the main action an 80px pill in `{colors.primary}`.
4. Use `{colors.critical}` only on discounted prices and scarcity tags.
5. When adding tokens, prefer the site's own semantic names (see the Design System Architecture section) and record the source.
6. Check the capture: the page should feel photographic and light, never heavy.

## Imagery and Art Direction

- Photography is bright, saturated and travel-poster-like: Eiffel Tower at dusk, a red mountain train on a viaduct, a turquoise thermal pool from above, sumo wrestlers, a misty lagoon.
- Destination tiles are portrait crops of landmarks; product cards use landscape crops with the subject centred.
- Tags overlay the photo's top-left corner as small red or coral rectangles; the wishlist heart floats top-right in a white circle.
- The trust block uses small illustrated 3D-style collage icons (photo stacks with a blue magnifier, a 4.5 rating badge, a refresh arrow) instead of line icons.
- The hero background is a vertical wash from pale blue to white with no photograph, so the search field is the visual focus.
