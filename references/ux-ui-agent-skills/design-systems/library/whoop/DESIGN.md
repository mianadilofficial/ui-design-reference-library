---
version: alpha
name: WHOOP
category: "Healthcare & Wellness"
description: 'WHOOP''s wearable storefront — stark black #000000 and white #ffffff sections, full-bleed athletic photography and video, a single proxima-nova family with huge light-weight headlines (120px/400, line-height 96px, -3.6px tracking) and tight negative tracking everywhere, uppercase bold CTA labels with 10% letter-spacing on 16px-radius buttons in electric accent #4a53ff, black or white, 24px-radius membership cards with soft radial gradients, and a black footer with #999999 links.'

colors:
  primary: "#4a53ff"
  primary-hover: "#4a53ffcc"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-muted: "#808080"
  ink-footer: "#999999"
  black: "#000000"
  white-hover: "#e5e5e5"
  surface-soft: "#f3f5f9"
  surface-gray: "#ebebeb"
  graphite: "#333333"
  teal: "#00f19f"
  strain: "#0093e7"
  recovery-blue: "#67aee6"
  recovery-high: "#16ec06"
  recovery-medium: "#ffde00"
  recovery-low: "#ff0026"
  sleep: "#7ba1bb"
  app-bg-top: "#283339"
  app-bg-bottom: "#101518"

typography:
  display-hero:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 120px
    fontWeight: 400
    lineHeight: 96px
    letterSpacing: -3.6px
  display-section:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 91.8819px
    fontWeight: 400
    lineHeight: 78.198px
    letterSpacing: -2.75646px
  display-hero-mobile:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: -1.5px
  display-section-mobile:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 46.7589px
    fontWeight: 400
    lineHeight: 40.64px
    letterSpacing: -1.40277px
  heading-carousel:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 33.5109px
    fontWeight: 600
    lineHeight: 33.5109px
    letterSpacing: -1.34043px
  heading-card:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35px
    letterSpacing: -1.2px
  heading-sm:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 26.4px
    letterSpacing: -0.96px
  quote:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: -0.96px
  lead:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 23.0553px
    fontWeight: 400
    lineHeight: 29.9719px
    letterSpacing: -0.69166px
  hero-sub:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
    letterSpacing: -0.6px
  nav-link:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20.8px
    letterSpacing: -0.6px
    textTransform: uppercase
  body:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.48px
  bullet:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 18px
    letterSpacing: -0.48px
  body-sm:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 15.7278px
    fontWeight: 400
    lineHeight: 20.4461px
    letterSpacing: -0.471833px
  button-lg:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 15.7278px
    fontWeight: 700
    lineHeight: 19.7976px
    letterSpacing: 1.57278px
    textTransform: uppercase
  button:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.7976px
    letterSpacing: 1.4px
    textTransform: uppercase
  button-sm:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 13.7278px
    fontWeight: 700
    lineHeight: 9.71689px
    letterSpacing: 1.37278px
    textTransform: uppercase
  footnote:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: -0.42px
  footer-mission:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: -0.42px
  disclaimer:
    fontFamily: "proxima-nova, \"Readex Pro\", Arial, Helvetica, sans-serif"
    fontSize: 13.008px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.016px

rounded:
  sm: 8px
  button: 16px
  md: 20px
  card: 24px
  chip: 60px
  pill: 300px
  circle: 50%

spacing:
  xxs: 2px
  xs: 8px
  sm: 10px
  md: 16px
  ml: 20px
  lg: 24px
  xl: 30px
  xxl: 40px
  btn-y: 19.8107px
  btn-x: 38.5109px
  gutter: 27.7663px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 19.8107px 38.5109px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-dark:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 19.8107px 38.5109px
    height: 48px
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.button}"
    padding: 19.8107px 38.5109px
    height: 59px
  button-light-hover:
    backgroundColor: "{colors.white-hover}"
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    border: "1px solid #000000"
    padding: 19.8107px 38.5109px
    height: 48px
  chip-option:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.chip}"
    border: "2px solid #000000"
    padding: 15px 25px
    height: 51px
  card-membership:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.bullet}"
    rounded: "{rounded.card}"
    padding: 40px 0px 0px
  announcement-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-sm}"
  nav:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-link}"
    height: 122px
  footer:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-sm}"
    padding: 71.2772px 0px 30px
  footer-link:
    textColor: "{colors.ink-footer}"
---

## Overview

WHOOP sells a screenless fitness and health wearable on a membership. The marketing site is athletic and editorial: pure black (`{colors.black}` — `#000000`) and pure white (`{colors.canvas}` — `#ffffff`) sections take turns, carrying full-bleed photography and video — a macro shot of the woven band, runners in the desert, elite athletes. Interface chrome is minimal; the photography and enormous headlines do the work.

Typography is one family, **proxima-nova**, used with unusual restraint at display sizes: the hero "The wearable designed for lasting progress" is 120px at weight **400** (not bold) with a line height *smaller* than the font size (96px, 0.8) and −3.6px tracking (−0.03em). Section headlines follow the same recipe at 91.8819px (a fluid size). Body copy is also tightly tracked (−0.03em). The only positive tracking is on CTA labels: bold uppercase with 10% letter-spacing — exactly the "Headlines" rule in the [WHOOP Brand & Design Guidelines](https://developer.whoop.com/assets/files/WHOOP%20-%20Brand%20%26%20Design%20Guidelines-bdea3554e94b4ea09e68695b1e8dc8e7.pdf) ("Proxima Nova, Bold, character 10%, Uppercase").

The marketing CTA color is an electric blue-violet (`{colors.primary}` — `#4a53ff`, the site's `--color-accent: 74 83 255`), used for the announcement bar and the header "JOIN NOW". In the hero and content, buttons are white on black or black on white. The app/data palette from the guidelines (teal `#00f19f`, Strain blue, Recovery green/yellow/red) belongs to the product; it is documented here but was not measured on the homepage.

**Key Characteristics:**
- Black/white alternation with full-bleed photography and video; no tinted brand backgrounds apart from the blue announcement bar.
- Single typeface (proxima-nova) at 400 for display, 600 for card headings, 700 uppercase for CTAs.
- Display line-height below 1.0 (120/96) and −0.03em tracking on almost all text.
- 16px-radius buttons (not pills) with generous `19.8107px 38.5109px` padding; uppercase labels tracked +10%.
- Hover = transparency/greying: accent to 80% alpha, white to `#e5e5e5`.
- 24px-radius membership cards with soft radial-gradient washes.
- Black footer with `#999999` link text and a mission statement.

## Colors

> Source page measured: home (`/`), plus the official developer [Brand & Design Guidelines PDF](https://developer.whoop.com/assets/files/WHOOP%20-%20Brand%20%26%20Design%20Guidelines-bdea3554e94b4ea09e68695b1e8dc8e7.pdf) for app/data colors.

### Brand & Action (measured)
- **Accent** (`{colors.primary}` — `#4a53ff`; root var `--color-accent: 74 83 255`): announcement bar, header "JOIN NOW" (`primary-cta--theme-accent`).
- **Accent Hover** (`{colors.primary-hover}` — `#4a53ffcc`): measured hover `rgba(74, 83, 255, 0.8)`.
- **On Primary** (`{colors.on-primary}` — `#ffffff`).
- **Black** (`{colors.black}` — `#000000`): dark buttons (`primary-cta--theme-dark`), header, dark sections, footer.
- **White Hover** (`{colors.white-hover}` — `#e5e5e5`): hover fill of white buttons (measured `rgb(255,255,255)` → `rgb(229,229,229)`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): body and the largest background area.
- **Surface Soft** (`{colors.surface-soft}` — `#f3f5f9`): light panels.
- **Surface Gray** (`{colors.surface-gray}` — `#ebebeb`): light gray tiles.
- **Graphite** (`{colors.graphite}` — `#333333`): small dark UI areas.

### Text
- **Ink** (`{colors.ink}` — `#000000`): headlines and lead copy on white.
- **Ink Muted** (`{colors.ink-muted}` — `#808080`): the long medical/legal footnotes at the bottom of the page — the most characters by count, but not the reading color.
- **Ink Footer** (`{colors.ink-footer}` — `#999999`): footer headings, mission text, inactive option labels.
- White `#ffffff` on black sections and photography.

### App & data palette (official, not on the homepage)
From the [guidelines PDF](https://developer.whoop.com/assets/files/WHOOP%20-%20Brand%20%26%20Design%20Guidelines-bdea3554e94b4ea09e68695b1e8dc8e7.pdf):
- **Teal** (`{colors.teal}` — `#00f19f`): "used for call to actions, highlights, positive evaluations" in the app.
- **Strain** (`{colors.strain}` — `#0093e7`): activities and strain topics.
- **Recovery Blue** (`{colors.recovery-blue}` — `#67aee6`): recovery data without valuation.
- **Recovery High / Medium / Low** (`{colors.recovery-high}` `#16ec06` 100–67% · `{colors.recovery-medium}` `#ffde00` 66–34% · `{colors.recovery-low}` `#ff0026` 33–0%).
- **Sleep** (`{colors.sleep}` — `#7ba1bb`).
- **App background gradient** (`{colors.app-bg-top}` `#283339` → `{colors.app-bg-bottom}` `#101518`).

The live marketing site uses `#4a53ff` for its CTAs rather than teal; where they differ, the site wins for web marketing UI and the PDF palette applies to data visualisation.

## Typography

### Font Family
**proxima-nova** — served as `proxima-nova, "Readex Pro", Arial, Helvetica, sans-serif` (`--font-base-sans-serif`). Loaded weights 400, 500, 600, 700. `Readex Pro` (400/600/700) is the declared second family. The stylesheet also declares `din-2014`, `din-2014-narrow` and `proxima-nova-extra-wide`. The guidelines say: "Prefer to use Proxima Nova for words. Prefer to use DINPro for numbers."

### Hierarchy

| Token | Size | Weight | Line Height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display-hero}` | 120px | 400 | 96px | -3.6px | Hero h1 |
| `{typography.display-section}` | 91.8819px | 400 | 78.198px | -2.75646px | Section h2 (fluid) |
| `{typography.display-hero-mobile}` | 50px | 400 | 40px | -1.5px | h1 at 390px |
| `{typography.display-section-mobile}` | 46.7589px | 400 | 40.64px | -1.40277px | h2 at 390px |
| `{typography.heading-carousel}` | 33.5109px | 600 | 33.5109px | -1.34043px | Active carousel item ("Zero distractions") |
| `{typography.heading-card}` | 32px | 600 | 35px | -1.2px | Feature card titles |
| `{typography.heading-sm}` | 24px | 600 | 26.4px | -0.96px | Athlete / member names |
| `{typography.quote}` | 24px | 500 | 32px | -0.96px | Member quotes |
| `{typography.lead}` | 23.0553px | 400 | 29.9719px | -0.69166px | Section lead copy |
| `{typography.hero-sub}` | 20px | 400 | 26px | -0.6px | Hero subtext |
| `{typography.nav-link}` | 16px | 600 | 20.8px | -0.6px | Uppercase nav |
| `{typography.body}` | 16px | 400 | 24px | -0.48px | Body |
| `{typography.bullet}` | 16px | 500 | 18px | -0.48px | Membership bullets |
| `{typography.body-sm}` | 15.7278px | 400 | 20.4461px | -0.471833px | Banner, footer headings |
| `{typography.button-lg}` | 15.7278px | 700 | 19.7976px | 1.57278px | Hero "JOIN NOW" |
| `{typography.button}` | 14px | 700 | 19.7976px | 1.4px | "START WITH ONE", "LEARN MORE" |
| `{typography.button-sm}` | 13.7278px | 700 | 9.71689px | 1.37278px | Header "JOIN NOW", option chips |
| `{typography.footnote}` | 14px | 400 | 18.2px | -0.42px | Medical footnotes |
| `{typography.footer-mission}` | 14px | 500 | 18.2px | -0.42px | Footer mission text |
| `{typography.disclaimer}` | 13.008px | 600 | 16px | 0.016px | ECG disclaimer |

### Principles
- **Light, huge, tight.** Display is weight 400 with line-height 0.8–0.85 and −0.03em tracking — lines nearly touch.
- **Everything tracked negative except CTAs.** −0.03em on body, leads and headings; +0.1em on uppercase CTA labels (per the guidelines' 10% rule).
- **Fluid sizes.** Many sizes are non-integer (91.8819px, 23.0553px, 15.7278px, 13.7278px) because they scale with the viewport; copy them as measured at 1280px.
- **Numbers in DIN.** The guidelines reserve DINPro for numerals; the site ships `din-2014` faces.

### Note on Font Substitutes
Proxima Nova is a commercial typeface served here via the `proxima-nova` web-font name. The site's own declared fallbacks are `"Readex Pro"` (which it loads), then Arial and Helvetica. The guidelines list fallback fonts "Default sans-serif for the platform, Helvetica Neue, Helvetica, Arial".

## Layout

### Spacing System
- Measured paddings/gaps: `{spacing.xxs}` 2px · `{spacing.xs}` 8px · `{spacing.sm}` 10px · `{spacing.md}` 16px · `{spacing.ml}` 20px · `{spacing.lg}` 24px · `{spacing.xl}` 30px · `{spacing.xxl}` 40px.
- Button padding is fluid: `{spacing.btn-y}` 19.8107px × `{spacing.btn-x}` 38.5109px.
- Grid gutter `{spacing.gutter}` 27.7663px between cards; 16px and 8px are the most frequent gaps.
- Footer: `71.2772px 0px 30px`.

### Grid & Container
- Hero: full-bleed media, headline bottom-left over the image, subtext beneath, centered white "JOIN NOW".
- Content sections: left-aligned headline + lead paragraph (max ~470px), then a full-width rounded media block (24px radius).
- Membership: three cards (342px wide at 1280px) in a row.
- Carousels: horizontally scrolling rounded image cards; a "fifty-fifty" carousel pairs text items with media.
- In the capture, content sits in a centered column with wide side margins, while hero media runs edge to edge.

### Whitespace Philosophy
Big vertical gaps between sections; each section has one headline, one paragraph and one media block. Density is reserved for the membership comparison and footnotes.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | All measured buttons and cards (no box-shadows on the homepage) |
| Wash | `radial-gradient(145.07% 141.42% at 100% 0%, …)` | Membership card backgrounds |
| Media | Full-bleed photo/video with dark overlay | Hero, athlete cards |

Depth comes from photography, video and the gradient washes — not shadows.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 8px | Small UI |
| `{rounded.button}` | 16px | All primary/secondary buttons |
| `{rounded.md}` | 20px | Medium tiles |
| `{rounded.card}` | 24px | Membership cards, media blocks, carousel cards (most frequent radius) |
| `{rounded.chip}` | 60px | Option chips ("LEATHERLUXE") |
| `{rounded.pill}` | 300px | Fully round small elements |
| `{rounded.circle}` | 50% | Video controls, avatars |

Membership card image areas use `0px 0px 24px 24px` (rounded bottom only). No clip-paths or skews.


### Imagery & Art Direction
- Hero: a warm, low-key macro photograph of the woven band texture filling the frame, with white type laid directly over it.
- Lifestyle: sun-lit outdoor sport (a trail runner in a desert landscape) inside a 24px-radius frame.
- Data overlays: app-style circular data badges (e.g. "45.8 WHOOP AGE") composited onto photography, glowing green particles on black.
- Athletes: tall video cards of named athletes with white name and role text at the bottom.
- Product: the strap and sensor shown close-up on neutral grey gradients inside membership cards.
- Microcopy is direct and performance-oriented: "The wearable designed for lasting progress", "Wear WHOOP daily, improve your health", "Get a complete picture of your health".
- A pause control sits bottom-right on the hero video.
- Footnote markers (*, 1–6) link claims to long gray medical/legal notes at the page bottom.

## Components

### Buttons

**`button-primary`** — accent "JOIN NOW" in the header: `{colors.primary}` `#4a53ff`, white `{typography.button-sm}` (13.7278px/700, +1.37278px, uppercase), padding `19.8107px 38.5109px`, 40px tall, radius 16px. Hover `button-primary-hover`: background `rgba(74, 83, 255, 0.8)`.

**`button-dark`** — "START WITH ONE / LIFE / PEAK" under membership cards: black, white `{typography.button}` 14px/700/+1.4px, 48px tall, radius 16px.

**`button-light`** — hero "JOIN NOW" on dark media: white, black `{typography.button-lg}`, 59px tall. Hover → `#e5e5e5`.

**`button-outlined`** — "LEARN MORE": white with 1px black border, black label, 48px.

**`chip-option`** — material selector ("LEATHERLUXE"): black, 2px black border, radius 60px, padding `15px 25px`, 51px tall; inactive options show `#999999` labels.

### Cards

**`card-membership`** — 24px radius, padding `40px 0px 0px`, white base with a radial-gradient wash (grey for One, blue-grey `rgb(173, 194, 205)` for Peak), a "Available at …/yr" slim banner in 14px/700, product image, `{typography.bullet}` bullet list, and a full-width `button-dark` beneath.

**Feature/image cards** — 24px-radius photography with `{typography.heading-card}` titles (32px/600) in black or white depending on the image theme.

**Athlete video cards** — full-height video with white `{typography.heading-sm}` name and `{typography.body}` role ("Football Legend & Global Icon").

### Navigation

**`announcement-bar`** — `{colors.primary}` strip: "WHOOP now delivers to Thailand" + underlined "Join now" (15px), hover opacity 0.8.

**`nav`** — black header (122px including the 50px banner offset): WHOOP wordmark left, uppercase links "MEMBERSHIPS · HOW IT WORKS · WHY WHOOP · ACCESSORIES" (16px/600, −0.6px), accent "JOIN NOW" right.

### Footer

**`footer`** — black, padding `71.2772px 0px 30px`; link columns headed in `#999999` 15.7278px ("Support", …) with white links; bottom bar with wordmark and mission statement in `{typography.footer-mission}` `#999999`.

## Design System Architecture

WHOOP does not publish a public component library, Storybook or token package. The official design source is the developer-portal [Design Guidelines page](https://developer.whoop.com/docs/developing/design-guidelines/) and its [Brand & Design Guidelines PDF](https://developer.whoop.com/assets/files/WHOOP%20-%20Brand%20%26%20Design%20Guidelines-bdea3554e94b4ea09e68695b1e8dc8e7.pdf), aimed at partners building on WHOOP data. It covers logos, typography, a three-level color palette and data-display dos and don'ts. The web system below is read from the live site.

### Token architecture
- **Guidelines palette tiers.** The PDF says it "outlines a full color palette that be used for the app, a more refined palette for web, and a minimal palette used for pure brand communication": Black/White for branding; Teal for CTAs/highlights; data colors for Strain, Recovery (High/Medium/Low), Sleep; a background gradient.
- **Site tokens.** Few CSS custom properties: `--color-accent: 74 83 255` (stored as space-separated RGB channels) and `--font-base-sans-serif`. Most styling is in CSS Modules with BEM-like names: `primary-button_primary-cta--theme-accent`, `--theme-dark`, `--theme-light`; `module-wrapper_module-wrapper--theme-light`; `text_text--size-lg | -md | -sm | -xs`; `heading_heading--size-lg-2xl | -xs`. Tailwind utilities (`text-inverse`, `text-body-lg`, `sm:text-h3`, `pt-0.5`) sit alongside.

### Theming
Sections switch theme by wrapper modifier (`module-wrapper--theme-light` / dark) and buttons by `--theme-accent | --theme-dark | --theme-light`. No user-facing dark mode toggle.

### Type & spacing systems
- Guidelines: Headlines = Proxima Nova Bold, uppercase, 10% tracking; Body = Proxima Nova Semibold, sizes B1 (L) to B4 (XS); Numbers = DINPro Bold.
- Site: named text sizes (`size-xs … size-lg`, `size-lg-2xl`), fluid values at 1280px (91.8819px, 23.0553px, 15.7278px).

### Component model
Observed: announcement bar, mega-menu header, full-bleed parallax hero, headline-left-aligned module, media blocks, membership cards with option chips, feature image carousel, fifty-fifty carousel, athlete video cards, member quote cards, disclaimer, footer. The guidelines add attribution rules ("Data by", "Powered by", "Imported from WHOOP") and data-visualisation dos/don'ts.

### Accessibility
The guidelines require the logo in white or black only and forbid placing it over backgrounds that make it hard to read; minimum logo widths are 100px (wordmark) and 30px (puck). No published contrast or target-size policy was found for the web.

### Delivery
The guidelines are distributed as a PDF from the developer portal, alongside the API documentation.
Logo and icon files (SVG, PNG, PDF) are downloadable from the developer portal. No npm package or public Figma kit.

## Do's and Don'ts

### Do
- Alternate pure black and pure white sections with full-bleed athletic photography.
- Set headlines huge at weight 400 with line-height ~0.8 and −0.03em tracking.
- Make CTA labels bold, uppercase, +10% tracked, on 16px-radius buttons.
- Use the accent `#4a53ff` for the single sign-up action; black/white buttons elsewhere.
- Use 24px radii for cards and media.
- Use DIN for numerals and the data palette (teal, strain, recovery) only for data.

### Don't
- Don't bold the display headlines.
- Don't use pill-shaped primary buttons — the radius is 16px.
- Don't add drop shadows.
- Don't recolor the WHOOP logo; white or black only (guidelines).
- Don't use the Recovery red/yellow/green as decorative colors.
- Don't loosen body tracking; it is negative throughout.

## Responsive Behavior

### Breakpoints
Sizes are fluid; measured at 1280px and 390px:

| Width | Key Changes |
|---|---|
| 1280px | h1 120px/96px; h2 91.8819px; header 122px; three membership cards in a row |
| 390px | h1 50px/40px (−1.5px); h2 46.7589px/40.64px; header 122px; accent CTA 12.0368px label, padding `19.0097px 30.1449px`, 48px tall |

### Mobile type
Most frequent sizes at 390px: 14px, 18.0713px, 14.0368px, 16px, 12px, 24px.

### Touch Targets
Buttons are 48px tall at 390px; option chips 51px.

### Collapsing Strategy

## Iteration Guide

1. Choose a black or white section; never a tinted one (except the accent bar).
2. Headline in `{typography.display-section}`, lead in `{typography.lead}`, left-aligned.
3. Follow with a 24px-radius full-width media block.
4. CTAs: `button-primary` for sign-up, `button-dark`/`button-light` elsewhere — uppercase, +10% tracking.
5. Data visuals use the guidelines' palette (teal, strain, recovery, sleep) on the dark gradient.
6. Hover by transparency (accent at 80%) or greying (`#e5e5e5`), never by shadow.
7. Copy fluid sizes exactly as measured at 1280px.
8. Check new values against the homepage and the developer guidelines PDF.
