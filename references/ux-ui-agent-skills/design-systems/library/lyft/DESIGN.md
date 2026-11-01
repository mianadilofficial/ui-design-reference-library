---
version: alpha
name: Lyft
category: "Logistics & Mobility"
description: "Lyft's homepage on lyft.com: a white #ffffff canvas alternating with off-white #f1f0ec bands, deep plum-black #1d0c17 ink, and Lyft's custom Rebel Sans (RebelSansDisplay 600 at 60px/66px for 'The world awaits', RebelSansText 600 at 36px/45px for section heads, 16px/22px body). Primary actions are dark magenta #820076 pills, 48px tall with 48px radius and 0 24px padding, carrying 18px/500 white labels; hot Lyft Pink #ff00bf is kept for the logo. Ride cards use 16px corners and a two-layer hairline shadow."

colors:
  primary: "#820076"
  on-primary: "#ffffff"
  lyft-pink: "#ff00bf"
  text-interactive: "#ac2a9e"
  icon-highlight: "#cf0090"
  canvas: "#ffffff"
  ink: "#1d0c17"
  ink-secondary: "#1d0c17b3"
  text-tertiary: "#1d0c1799"
  off-white: "#f1f0ec"
  background-neutral: "#f1f0f0"
  pastel-gray: "#e7e5e5"
  gray-20: "#cfcbcc"
  stroke-button: "#b9b2b4"
  stroke-tertiary: "#36220129"
  text-negative: "#c81534"
  brand-orange: "#ff5312"
  pastel-purple: "#f6ddfe"
  indigo-70: "#5725cf"
  black: "#000000"

typography:
  display-hero:
    fontFamily: "RebelSansDisplay, sans-serif"
    fontSize: 60px
    fontWeight: 600
    lineHeight: 66px
  heading-section:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 45px
  title-card:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 28px
  label-lg:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25px
  body:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  body-medium:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  body-bold:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
  small:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  mobile-h1:
    fontFamily: "RebelSansDisplay, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 49px
  mobile-body:
    fontFamily: "RebelSansText, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px

rounded:
  card: 16px
  button: 48px
  pill: 9999px

spacing:
  s8: 8px
  s16: 16px
  s24: 24px
  s32: 32px
  s80: 80px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label-lg}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 48px
  button-small-outline:
    textColor: "{colors.ink}"
    borderColor: "{colors.stroke-button}"
    borderWidth: 1px
    typography: "{typography.body}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 32px
  text-link:
    textColor: "{colors.ink}"
    typography: "{typography.body-medium}"
  text-link-hover:
    textDecoration: underline
  legal-link:
    textColor: "{colors.primary}"
    typography: "{typography.small}"
    textDecoration: underline
  ride-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.title-card}"
    rounded: "{rounded.card}"
    padding: 24px 16px
    boxShadow: "rgba(0, 0, 0, 0.12) 0px 0px 1px 0px, rgba(0, 0, 0, 0.16) 0px 2px 3px 0px"
  band-off-white:
    backgroundColor: "{colors.off-white}"
    textColor: "{colors.ink}"
    padding: 80px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.label-lg}"
    height: 81px
  nav-link-hover:
    textColor: "{colors.primary}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 32px 0px
---

## Overview

Lyft's homepage (measured at https://www.lyft.com on a 1280px viewport) is calm and editorial: white and warm off-white bands, plum-black type, real photography of riders and drivers, and a single dark-magenta action color. The famous hot pink survives only in the logo and the "lyft pink" membership wordmark.

The header is an 81px white bar:
- the pink "lyft" logo at left
- at right, a filled magenta "Get a ride" pill, then Rider, Driver, Business, Log in, Sign up and a globe "EN" selector, each a separate cell divided by thin vertical rules

The hero is a split. On the left, a large photo of a smiling older woman getting into a car, seen past the driver's shoulder. On the right:
- "The world awaits" in RebelSansDisplay 600 at 60px
- a 16px paragraph ("No matter where you're headed…")
- a magenta "Sign up to ride" pill

The page continues in alternating bands:
- off-white `#f1f0ec` "Shift into earnings mode" (driver photo, "Apply to drive" pill plus a "Learn more about earnings →" text link)
- white "Ride with Lyft / A few quick taps, one great trip", with icon bullets and a phone mock showing ride options in purple
- "Your ride, refined" for Lyft Pink: the pink wordmark over a night photo, a benefits list and a "Join now" pill
- "How you get there is up to you": ride-type cards (Wait & Save, Standard …)
- off-white business band, safety and accessibility rows, an off-white app-download band, and a footer that fades in from light grey

**Key Characteristics:**
- White `#ffffff` and off-white `#f1f0ec` bands; ink is a warm plum-black `#1d0c17`, never pure black.
- Rebel Sans everywhere: Display for the 60px hero only, Text for everything else, with 600 headings and 500 labels.
- Dark magenta `#820076` pills for every primary action, 48px tall and fully rounded, with 18px/500 labels.
- Lyft Pink `#ff00bf` only on the logo and brand wordmarks.
- Text links with a trailing arrow, underlining on hover.
- Photography of people in real moments; product UI shown in a phone frame.

## Colors

> Source: computed styles and `:root` tokens on https://www.lyft.com (extraction + recorded probes). Lyft publishes no public color specification; its color tooling is open-sourced (https://github.com/lyft/coloralgorithm).

### Brand & Action
- **Primary magenta** (`{colors.primary}` `#820076`): every primary pill, legal links, nav-link hover. Tokens `--core-ui-color-surface-interactive`, `--core-ui-color-surface-selected` and `--core-ui-color-stroke-interactive` all equal `#820076`.
- **Lyft Pink** (`{colors.lyft-pink}` `#ff00bf`): the logo in the header.
- **Text interactive** (`{colors.text-interactive}` `#ac2a9e`, `--core-ui-color-text-interactive`, also `--core-ui-color-icon-interactive`).
- **Highlight** (`{colors.icon-highlight}` `#cf0090`, `--core-ui-color-icon-highlight` / `--core-ui-color-stroke-highlight`).
- **Brand accents** (tokens): `--core-ui-color-brand-orange` `#ff5312`, `--core-ui-color-brand-pastel-purple` `#f6ddfe`, `--core-ui-color-brand-vibrant-purple` `#a092fd`, plus pastel blue, gray, orange and red.

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`, `--core-ui-color-background-primary`).
- **Off-white** (`{colors.off-white}` `#f1f0ec`, `--core-ui-color-brand-off-white`): alternate bands (2,010 weighted area, second-largest background).
- **Neutral background** (`{colors.background-neutral}` `#f1f0f0`) and **pastel gray** (`{colors.pastel-gray}` `#e7e5e5`): the footer gradient starts at `#e7e5e5`, passes `#f6f5f5` at 5% and reaches white at 10%.

### Text
- **Ink** (`{colors.ink}` `#1d0c17`, `--core-ui-color-brand-midnight`, `--core-ui-color-text-primary`): all headlines and body (2,681 weighted characters).
- **Secondary** (`{colors.ink-secondary}` `#1d0c17b3`, `--core-ui-color-icon-secondary`): ride-card details.
- **Tertiary / placeholder** (`{colors.text-tertiary}` `#1d0c1799`).
- **Negative** (`{colors.text-negative}` `#c81534`).

### Strokes
- `--core-ui-color-stroke-primary` `#1d0c17`, `--core-ui-color-stroke-secondary` `#1d0c1773`, `--core-ui-color-stroke-tertiary` `#36220129`; the small outline button uses `#b9b2b4`.

## Typography

### Font Family
- **RebelSansDisplay** (served as `RebelSansDisplay, sans-serif`, variable 300–800): the hero h1 only.
- **RebelSansText** (served as `RebelSansText, sans-serif`, variable 300–800): everything else, 2,972 of 2,988 measured characters.
- Weights in use: 400 (body), 500 (labels, nav, links), 600 (headings), 700 (list emphasis).

### Hierarchy (measured)

| Token | Family | Size | Weight | Line height | Example |
|---|---|---|---|---|---|
| `display-hero` | RebelSansDisplay | 60px | 600 | 66px | h1 "The world awaits" |
| `heading-section` | RebelSansText | 36px | 600 | 45px | "Shift into earnings mode", "Your ride, refined" |
| `title-card` | RebelSansText | 22px | 600 | 28px | ride card "Wait & Save" |
| `label-lg` | RebelSansText | 18px | 500 | 25px | button labels, nav items, eyebrow "Ride with Lyft", footer column heads |
| `body` | RebelSansText | 16px | 400 | 22px | paragraphs, footer links |
| `body-medium` | RebelSansText | 16px | 500 | 22px | "Learn more about riding with Lyft →" |
| `body-bold` | RebelSansText | 16px | 700 | 22px | bullet lines ("Get a reliable ride in minutes") |
| `small` | RebelSansText | 14px | 400 | 20px | legal lines, © line |
| `mobile-h1` | RebelSansDisplay | 48px | 600 | 49px | h1 at 390px |
| `mobile-body` | RebelSansText | 15px | 400 | 21px | paragraphs at 390px |

No letter-spacing is applied (all `normal`).

### Principles
- The Display cut is reserved for the single hero line; section heads use the Text cut at 600.
- Labels sit at 18px/500, larger than body text, so buttons and nav read as confident.
- Sentence case everywhere; no uppercase.
- Line heights are tight for display (1.1 at 60px, 1.02 at 48px mobile) and 1.25 at 36px.

### Note on Font Substitutes
Rebel Sans is Lyft's proprietary typeface (Text and Display cuts, self-hosted); no license source was found that states its designer, so none is named here. The served fallback is the generic `sans-serif`. When substituting, keep the 600 heading / 500 label / 400 body split.

## Layout

### Spacing System
- Measured paddings: 24px (21 uses), 16px, 32px, 80px; gaps: 16px, 24px, 8px.
- Bands use `80px 0` vertical padding; the footer uses `32px 0`.

### Grid & Container
- Split sections place a 395px–504px text column beside an image of similar width (h2 widths measured at 395px and 504px).
- The "How you get there" heading spans 755px; "Download the apps and go" spans 1024px.
- Ride cards are 280px wide and 284px tall, in a row.

### Section Recipes (as seen on the homepage)
- **Hero split**: photo left, text right — 60px Display headline, 16px paragraph, one pill.
- **Off-white band**: `#f1f0ec`, `80px 0`; text left (36px heading, paragraph, pill + arrow link), photo right.
- **Feature list**: 18px/500 eyebrow, 36px heading, 16px intro, three icon bullets in 16px/700, pill + arrow link, phone mock on the right.
- **Membership**: pink "lyft pink" wordmark above a photo; heading, benefits with pink icons, "Join now" pill, legal line with underlined magenta links.
- **Cards row**: white ride cards with car illustrations, 22px/600 titles and secondary-ink details.
- **Footer**: light grey fade-in, columns headed in 18px/500, 16px links, © in 14px.

### Whitespace Philosophy
Generous: each band holds one message, the text column is narrow (about 400–500px), and images are large. Off-white bands separate topics instead of rules or cards.

### Voice & Microcopy
- Warm, human headlines: "The world awaits", "Shift into earnings mode", "Your ride, refined", "Safety never takes a backseat".
- Concrete benefits: "You keep 100% of your tips", "save $3-4 per ride on average", "Members save an average of $23/month".
- CTAs are short verbs: "Get a ride", "Sign up to ride", "Apply to drive", "Join now"; secondary actions are "Learn more about … →".

### Motion
- Pills declare `transition: opacity 0.2s cubic-bezier(0.45, 0, 0.15, 1)`. No background change was measured on hover.
- Nav items turn `#820076` on hover; text links gain an underline.

### Image Direction
- Candid photography of riders and drivers, warm interior light, close framing on faces (a grandmother entering a car, a smiling driver at the wheel).
- Night-out photography for Lyft Pink.
- Product UI in a light phone frame with purple selection states.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat | bands, hero, buttons |
| Card | `rgba(0, 0, 0, 0.12) 0px 0px 1px 0px, rgba(0, 0, 0, 0.16) 0px 2px 3px 0px` | ride cards (5 elements) |
| CSS | `0 4px 24px rgba(0,0,0,.15)` | declared overlay shadow |

Tokens also define elevation overlays for dark surfaces (`--core-ui-elevation-level2-overlay` `#ffffff12`, `--core-ui-elevation-level5-overlay-light` `#ffffff1c`).

### Decorative Depth
The footer starts with a soft vertical gradient (`#e7e5e5` → `#f6f5f5` → `#ffffff`), giving a gentle fade instead of a hard edge.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.card}` | 16px | ride cards (10 elements) |
| `{rounded.button}` | 48px | every pill (12 elements) |
| `{rounded.pill}` | 9999px | CSS-declared full rounds |

Photos are square-cornered in the hero and bands.

### Geometry
The header uses thin vertical dividers between items, creating a row of cells. Icons in bullet lists are small pink/magenta glyphs.

## Components

### Buttons
- **Primary** (`button-primary`): `#820076` fill with a 1px transparent border, white label in RebelSansText 18px/500/25px, padding `0 24px`, 48px tall, 48px radius. Used for "Get a ride", "Sign up to ride", "Apply to drive", "Get started today", "Learn more", "Join now".
- **Small outline** (`button-small-outline`): 1px `#b9b2b4` border, `#1d0c17` 16px text, padding `0 16px`, 32px tall, 48px radius (measured on the skip-to-content button).
- No hover color change was measured on the primary pill, so no hover state is declared.

### States (measured hover)
| Element | Before | After |
|---|---|---|
| Primary pill ("Sign up to ride") | `#820076` fill, white label | unchanged (only an opacity transition is declared) |
| Nav item ("Rider") | `#1d0c17` | `#820076` |
| Text link ("Learn more about earnings") | no decoration | underline |

No focus, pressed or disabled states were measured on the page; the token set defines pressed (`#1d0c171a`) and disabled (`#ffffff9e`) overlays, but they are not mapped to components here.

### Links
- **Text link** (`text-link`): `#1d0c17` 16px/500 with a trailing "→"; hover adds an underline (measured).
- **Legal link** (`legal-link`): `#820076` 14px/20px, underlined.

### Cards & Containers
- **Ride card** (`ride-card`): white, 16px radius, padding `24px 16px`, two-layer hairline shadow, 280×284px; car illustration, 22px/600 title, details ("Budget-friendly", "Private") in `#1d0c17b3`.
- **Off-white band** (`band-off-white`): `#f1f0ec`, `80px 0` padding.

### Navigation
- **Nav** (`nav`): 81px white header, pink logo, magenta "Get a ride" pill, then 18px/500 `#1d0c17` items in divided cells; hover `#820076`.

### Footer
`footer`: `32px 0` padding over a light gradient; columns (Driver, Rider, Lyft …) headed in 18px/500/25px, 16px/22px links, "© 2026 Lyft, Inc." in 14px/20px.

No form inputs appear on the homepage, so none are specified.

## Design System Architecture

Lyft publishes no public design-system documentation, component library or token package (searches in SOURCES.json). What is public:
- **Color tooling.** Lyft open-sourced the algorithm behind its color system: "A JavaScript function for producing color sets. Used to build Lyft's color system (Spectrum) and power ColorBox" (https://github.com/lyft/coloralgorithm). Each generated color carries `contrastBlack` and `contrastWhite` values for accessibility checks.
- **Brand.** The 2025 refresh by Koto is described as "a refined logo, bold typography, and an energized palette", with photography of "people and the shared moments between them" (https://koto.com/projects/lyft).
- **Assets.** Logos, photos and B-roll are in the official media kit (https://www.lyft.com/press/media-kit).

What lyft.com exposes in `:root` (400 `--core-ui-*` custom properties) shows the token architecture:
- **Primitives**: numbered hue scales such as `--core-ui-color-pink30` `#ff7fcf`, `--core-ui-color-pink50-light` `#eb2cab`, `--core-ui-color-gray20` `#cfcbcc`, `--core-ui-color-indigo70-light` `#5725cf`, `--core-ui-color-mint60` `#197849`. Hues include amber, blue, brown, citron, cyan, gray, green, indigo, lime, mint, orange, pink, purple, red, rose, sunset, teal and yellow.
- **Semantic**:
  - text: `--core-ui-color-text-primary`, `--core-ui-color-text-interactive`, `--core-ui-color-text-negative`, `--core-ui-color-text-placeholder`
  - surface and background: `--core-ui-color-surface-interactive`, `--core-ui-color-surface-selected`, `--core-ui-color-background-primary`
  - strokes: `--core-ui-color-stroke-primary/secondary/tertiary/interactive/highlight`
  - icons: `--core-ui-color-icon-secondary`
- **State overlays**: `--core-ui-color-hover15-light` `#1d0c170f`, `--core-ui-color-pressed0` `#1d0c171a`, `--core-ui-color-disabled*` `#ffffff9e`.
- **Brand tokens**: `--core-ui-color-brand-midnight` `#1d0c17`, `--core-ui-color-brand-off-white` `#f1f0ec`, `--core-ui-color-brand-orange` `#ff5312`, `--core-ui-color-brand-pastel-*`.
- **Data visualization**: `--core-ui-color-data-category-extended1…`, `--core-ui-color-data-intensity-a…e`, `--core-ui-color-data-severity-*`.
- **Theming.** Tokens come in `-light` and `-dark` variants (135 `-light`, 120 `-dark`). On the marketing homepage every `-dark` value is empty, so only the light theme renders.
- **Component model.** Styled-components (hashed `sc-…` class names). The observable inventory is pill button, text link, ride card, band section, divided nav and footer.
- **Accessibility.** No published rules. Observed: 48px pills, a visible skip-to-content button, and contrast-annotated color generation in the open-source tool.
- **Delivery.** No public packages or Figma kit; the color algorithm is the only open-source piece.

## Do's and Don'ts

### Do
- Use `#1d0c17` for all text and keep pure black out of body copy.
- Make every primary action a `#820076` pill: 48px tall, `0 24px`, 18px/500 white label.
- Alternate white and `#f1f0ec` bands, one message per band.
- Use RebelSansDisplay only for the hero line; RebelSansText 600 for headings.
- Pair each pill with a secondary "Learn more … →" text link that underlines on hover.
- Keep Lyft Pink `#ff00bf` for the logo and brand wordmarks.

### Don't
- Don't use Lyft Pink as a button or background color on the marketing site.
- Don't uppercase labels or add letter-spacing.
- Don't round photos in the main bands; only cards (16px) and pills are rounded.
- Don't add heavy shadows; cards use the hairline two-layer shadow.
- Don't use a grey for body text; secondary text is the ink at 70% alpha (`#1d0c17b3`).

## Responsive Behavior

### Breakpoints
No breakpoint tokens are exposed. At 390px (measured):
- h1 goes from 60px/66px to 48px/49px (RebelSansDisplay 600).
- Body text goes from 16px/22px to 15px/21px.
- Most-set mobile sizes: 15px, 13px, 28px, 17px, 20px, 48px.

### Touch Targets
Pills stay 48px tall.

### Collapsing Strategy
The mobile h1 measures 358px and the paragraph 350px wide at 390px, so split sections become a single column. The mobile navigation pattern was not captured.

### Image Behavior
Not measured at mobile width.

## Iteration Guide

1. White canvas, RebelSansText 16px/22px in `#1d0c17`.
2. 81px header: pink logo, magenta "Get a ride" pill, 18px/500 divided nav cells, hover `#820076`.
3. Hero split: large candid photo, RebelSansDisplay 600 60px/66px headline, paragraph, magenta pill.
4. Bands: alternate white and `#f1f0ec` with `80px 0` padding; 36px/45px 600 heading, paragraph, pill + arrow link.
5. Cards: white, 16px radius, `24px 16px`, hairline two-layer shadow, 22px/600 titles.
6. Legal and fine print: 14px/20px with underlined `#820076` links.
7. Footer: light grey gradient fade, 18px/500 column heads, 16px links.

### Common Mistakes When Recreating Lyft
- Using hot pink `#ff00bf` for buttons; the action color is `#820076`.
- Using pure black text; Lyft's ink is `#1d0c17`.
- Setting button labels at 16px/400 (the anchor's computed value); the visible label is 18px/500.
- Bolding headings to 700/800; headings are 600.
- Putting everything on white; the off-white `#f1f0ec` bands are part of the rhythm.
