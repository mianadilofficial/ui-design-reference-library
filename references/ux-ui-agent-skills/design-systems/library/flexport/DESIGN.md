---
version: alpha
name: Flexport
category: "Logistics & Mobility"
description: "Flexport's 2026 site on flexport.com: a white #ffffff canvas with black #000000 headings, light Zalando Sans (ExtraLight 200 for the 58px/63.8px hero and 52px section heads, Light 300 for 20px/24px body in grey #595959), Roboto Mono uppercase for every button, nav link and eyebrow, and square-cornered (0px) Indigo #3048df buttons 48px tall with 12px 16px padding that darken to #182a9c on hover. Dark video hero (#000304), midnight #020e16 utility bar and a footer that fades from periwinkle to Midnight Blue #052439."

colors:
  primary: "#3048df"
  primary-hover: "#182a9c"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#000000"
  ink-secondary: "#595959"
  eyebrow: "#757575"
  midnight-blue: "#052439"
  hero-scrim: "#000304"
  utility-bar: "#020e16"
  on-dark: "#ffffff"
  on-dark-muted: "#cccfd0"
  divider: "#e8e8e8"
  app-surface: "#eaf1f6"
  app-ink: "#39414d"
  app-link: "#566ae5"
  app-border: "#dae3f3"
  tag-bg: "#0000000a"
  input-bg: "#0000001a"
  seafoam: "#28ccae"
  sky-blue: "#33a3ed"
  gradient-periwinkle: "#aab5ec"
  gradient-indigo-light: "#7d8ce4"
  gradient-indigo-dark: "#344d9b"
  gradient-navy: "#223369"
  gradient-deep: "#0a2842"
  error: "#b9000c"
  warning: "#c85203"
  alert-red: "#d92736"

typography:
  display-hero:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 58px
    fontWeight: 200
    lineHeight: 63.8px
    letterSpacing: -2.32px
  display-section:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 52px
    fontWeight: 200
    lineHeight: 57.2px
    letterSpacing: -2.08px
  heading-6:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 28px
    fontWeight: 300
    letterSpacing: -0.56px
  footer-heading:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 300
    letterSpacing: -0.24px
  body-lg:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
    letterSpacing: -0.4px
  body-md:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 300
    letterSpacing: -0.36px
  body:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 19.2px
  body-sm:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 16.8px
  cta:
    fontFamily: "\"Roboto Mono-e30379de7a9a321f\", \"Roboto Mono-e30379de7a9a321f fallback: Courier New\", \"Courier New\", courier, monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 0.8px
    textTransform: uppercase
  eyebrow:
    fontFamily: "\"Roboto Mono-e30379de7a9a321f\", \"Roboto Mono-e30379de7a9a321f fallback: Courier New\", \"Courier New\", courier, monospace"
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.7px
    textTransform: uppercase
  caption-mono:
    fontFamily: "\"Roboto Mono-e30379de7a9a321f\", \"Roboto Mono-e30379de7a9a321f fallback: Courier New\", \"Courier New\", courier, monospace"
    fontSize: 12px
    fontWeight: 400
    letterSpacing: 0.6px
    textTransform: uppercase
  mobile-h1:
    fontFamily: "\"Zalando Sans-c8107d83ff0d568d\", \"Zalando Sans-c8107d83ff0d568d fallback: Arial\", \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 44px
    fontWeight: 200
    lineHeight: 48.4px
    letterSpacing: -0.44px

rounded:
  none: 0px
  sm: 8px
  pill: 999px

spacing:
  space-1x: 4px
  space-2x: 8px
  space-3x: 12px
  space-4x: 16px
  space-6x: 24px
  space-8x: 32px
  space-12x: 48px
  space-16x: 64px
  section-gap-lg: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 12px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.midnight-blue}"
    typography: "{typography.cta}"
    rounded: "{rounded.none}"
    padding: 12px 16px
    height: 48px
  text-input:
    backgroundColor: "{colors.input-bg}"
    textColor: "{colors.on-dark}"
    borderColor: "{colors.on-dark}"
    borderWidth: 1px
    typography: "{typography.body-sm}"
    rounded: "{rounded.none}"
    padding: 0px 12px
    height: 48px
  tag:
    backgroundColor: "{colors.tag-bg}"
    textColor: "{colors.hero-scrim}"
    typography: "{typography.eyebrow}"
    rounded: "{rounded.none}"
    padding: 8px
    height: 36px
  card-bento:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 16px 16px 24px
    boxShadow: "#e8e8e8 0px 0px 0px 2px inset"
  utility-bar:
    backgroundColor: "{colors.utility-bar}"
    textColor: "{colors.on-dark}"
    typography: "{typography.eyebrow}"
    height: 44px
  nav:
    textColor: "{colors.on-dark}"
    typography: "{typography.eyebrow}"
    height: 80px
  link:
    textColor: "{colors.on-dark}"
    typography: "{typography.body-sm}"
  footer:
    backgroundColor: "{colors.midnight-blue}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
---

## Overview

Flexport's homepage (measured at https://www.flexport.com on a 1280px viewport, Fall 2026 "AI-powered logistics" campaign) is a white, editorial page wrapped in two dark bookends: a full-bleed ocean-freight video hero at the top and a periwinkle-to-midnight gradient footer at the bottom. Between them, everything is black text on white, set very light.

The top of the page stacks:
- a 44px midnight utility bar (`#020e16`) with "■ 2026 FALL TECHNOLOGY RELEASE | WATCH NOW" on the left and "SIGN IN" / "ENGLISH" on the right, all in Roboto Mono uppercase
- an 80px transparent nav laid over the video: the white "flexport" wordmark left, six mono uppercase links centered (PLATFORM, SERVICES, SOLUTIONS, TOOLS, RESOURCES, COMPANY), a search icon and an Indigo "GET STARTED →" button right, with a thin white rule under the bar
- the hero: a container ship on a grey-blue sea, a centered two-line headline "AI-powered logistics / for the real world" in Zalando Sans ExtraLight 58px, a 20px light subline, and an inline email field plus "REQUEST A DEMO →" button

Below the fold of the hero sits a large white product mock ("Hello, Thomas!") — a framed Flexport app with a world map, shipment counters (766, 23, 57, 468) and red exception dots — overlapping the video's bottom edge in a frosted glass frame, captioned "CLICK TO EXPLORE OR TAKE A TOUR".

The rest of the page alternates white editorial sections, each introduced by a grey mono eyebrow and a hairline rule: "SERVICES & SOLUTIONS" with a 52px ExtraLight statement and an accordion of services (Ocean Freight, Air Freight, Customs, Fulfillment, Logistics Control Tower) beside a dark tracking card; a customer logo wall; a dot-matrix world map ("We ship everywhere, so you can sell anywhere."); bento customer stories with huge "10%" and "90%" stats; a news list; and the gradient newsletter footer.

**Key Characteristics:**
- White `#ffffff` canvas; headings in black `#000000`, running copy in grey `#595959`.
- Zalando Sans at weight 200 for display and 300 for text: the whole site reads thin and airy.
- Roboto Mono, uppercase with positive tracking (0.7–0.8px), for every interactive or labeling element: buttons, nav, eyebrows, tags, dates.
- Indigo `#3048df` square buttons, 48px tall, with a trailing "→" arrow; hover darkens to `#182a9c`.
- Zero border radius on every marketing button, input, tag and card.
- Dark bookends: video hero with `#000304` scrim and a footer gradient ending in Midnight Blue `#052439`, the logo color.

## Colors

> Source: computed styles on https://www.flexport.com (extraction + recorded probes) and the official palette at https://www.flexport.com/company/logo/.

### Brand & Accent
- **Indigo** (`{colors.primary}` `#3048df`): Every primary button ("GET STARTED", "REQUEST A DEMO", "VIEW ALL STORIES", "SUBMIT"). The official brand page lists Indigo as HEX #3048DF, PMS 2132C; the site token is `--color-brand-indigo` oklch(49.09% .2282 268.61), which renders the same pixel.
- **Indigo hover** (`{colors.primary-hover}` `#182a9c`): Button background on hover (measured), also the light-mode `--color-selection-ink`.
- **Midnight Blue** (`{colors.midnight-blue}` `#052439`): The logo color ("Full-color logo … features a Midnight Blue wordmark"), the end of the footer gradient and the text color of the white "OUR NETWORK" button.
- **Seafoam** (`{colors.seafoam}` `#28ccae`) and **Sky Blue** (`{colors.sky-blue}` `#33a3ed`): Official accent colors (brand page), present as `--color-brand-seafoam` / `--color-brand-sky-blue` scales in the site CSS. On the homepage seafoam appears only as small status dots in the product mock.

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`): Body background and every editorial section.
- **Hero scrim** (`{colors.hero-scrim}` `#000304`): The video frame and scrim behind the hero (1010px tall); by area the largest painted background on the page.
- **Utility bar** (`{colors.utility-bar}` `#020e16`): The 44px top strip; equal to the dark-mode `--color-page-bg`.
- **App surface** (`{colors.app-surface}` `#eaf1f6`): Map background inside the product mock.
- **Tag fill** (`{colors.tag-bg}` `#0000000a`) and **input fill** (`{colors.input-bg}` `#0000001a`): translucent black washes.
- **Footer gradient**: `#aab5ec` → `#7d8ce4` → `#344d9b` → `#223369` → `#0a2842` → `#052439` (stops at 0, 201.6, 309.12, 389.76, 456.96px, then solid Midnight Blue).

### Text
- **Ink** (`{colors.ink}` `#000000`): Headings, accordion titles, news titles, stats (`--color-heading` / `--color-paragraph` light value `oklch(0% 0 0)`).
- **Ink secondary** (`{colors.ink-secondary}` `#595959`): Body paragraphs (20px), `--color-text-secondary` light value.
- **Eyebrow** (`{colors.eyebrow}` `#757575`): Mono section labels and collapsed accordion items, `--color-eyebrow`.
- **On dark** (`{colors.on-dark}` `#ffffff`) and **on-dark muted** (`{colors.on-dark-muted}` `#cccfd0`): hero, nav and footer text; footer helper text.
- **Product mock**: `#39414d` ink, `#566ae5` link/button blue, `#dae3f3` borders, `#d92736` exception red.

### Status
- **Error** (`{colors.error}` `#b9000c`) and **warning** (`{colors.warning}` `#c85203`): `--color-error` / `--color-warning` light values (dark values `#ff3543` / `#ff8f44`).

## Typography

### Font Family
- **Zalando Sans** (served as `"Zalando Sans-c8107d83ff0d568d"`, a hashed self-hosted face loaded as a 200–600 variable range): all headlines and text. Weights used: 200 (display), 300 (text), 400–500 inside the product mock, 700 in mock numbers.
- **Roboto Mono** (served as `"Roboto Mono-e30379de7a9a321f"`, weight 400): buttons, nav links, eyebrows, tags, dates, footer form labels — always uppercase.
- Both stacks are exposed as tokens: `--font-sans` / `--font-zalando-sans` and `--font-mono` / `--font-roboto-mono`.

### Hierarchy (measured)

| Token | Family | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|---|
| `display-hero` | Zalando Sans | 58px | 200 | 63.8px | -2.32px | h1 "AI-powered logistics for the real world" |
| `display-section` | Zalando Sans | 52px | 200 | 57.2px | -2.08px | "AI-powered logistics services grounded in the real world.", footer "Join our newsletter…" |
| `heading-6` | Zalando Sans | 28px | 300 | — | -0.56px | news titles ("Tariff Trends 2026…") |
| `footer-heading` | Zalando Sans | 24px | 300 | — | -0.24px | footer headings |
| `body-lg` | Zalando Sans | 20px | 300 | 24px | -0.4px | hero subline, section paragraphs |
| `body-md` | Zalando Sans | 18px | 300 | — | -0.36px | footer sitemap links, intros |
| `body` | Zalando Sans | 16px | 300 | 19.2px | normal | base body |
| `body-sm` | Zalando Sans | 14px | 300 | 16.8px | normal | email field, legal links |
| `cta` | Roboto Mono | 16px | 400 | 19.2px | 0.8px | button labels, uppercase |
| `eyebrow` | Roboto Mono | 14px | 400 | — | 0.7px | nav links, "SERVICES & SOLUTIONS", tags |
| `caption-mono` | Roboto Mono | 12px | 400 | — | 0.6px | small mono captions (113 measured chars) |
| `mobile-h1` | Zalando Sans | 44px | 200 | 48.4px | -0.44px | h1 at 390px |

### Principles
- Display tracking is -0.04em (`--tracking-tightest`): -2.32px at 58px, -2.08px at 52px. Text tracking is -0.02em (`--tracking-tight`): -0.4px at 20px, -0.36px at 18px, -0.56px at 28px.
- Mono is tracked open at 0.05em (`--tracking-wide`): 0.7px at 14px, 0.8px at 16px, 0.6px at 12px.
- Line-height tokens: `--leading-tight` 1.1 (display: 58 → 63.8px, 52 → 57.2px), `--leading-normal` 1.2 (body: 16 → 19.2px, 20 → 24px).
- Contrast between the two families carries the hierarchy, not weight: light sans for content, mono caps for actions and labels.

### Note on Font Substitutes
Zalando Sans is Zalando's corporate typeface by Jakob Ekelund (KH Type), released under the SIL Open Font License 1.1 with weight (200–900) and width axes (https://fontsource.org/fonts/zalando-sans/about), so it can be used directly from Google Fonts or Fontsource. Roboto Mono is Google's open-source monospace. The served fallbacks are Arial / "Helvetica Neue" for the sans and "Courier New" for the mono. Keep weight 200 for display; a 300 or 400 substitute loses the site's character.

## Layout

### Spacing System
- Base unit 4px: `--space-1x` .25rem … `--space-64x` 16rem (4, 8, 12, 16, 20, 24, 28, 32, 40, 44, 48, 56, 64, 80, 96, 128, 160, 192, 256px).
- Component spacing: `--component-space-xs` 4px, `sm` 8px, `md` 16px, `lg` 24px, `xl` 32px, `2xl` 48px, `3xl` 64px.
- Section rhythm: `--section-gap-sm/md/lg` and `--section-padding-sm/md/lg` = 24 / 64 / 96px.
- Most-used measured gaps: 24px, 8px, 16px, 4px, 32px, 64px. Most-used paddings: 8px, 16px, 12px, 24px, 64px.

### Grid & Container
- `--site-max-inline-size` 90rem (1440px), `--grid-gap` 1.5rem (24px), `--grid-margin` 1rem (16px), `--grid-column-max-width` 9.5625rem.
- In the capture, headline columns sit in the left half and media in the right half.
- Section structure: hairline rule, mono eyebrow at the top left, large ExtraLight statement below it, content split two columns.

### Section Recipes (as seen on the homepage)
- **Hero**: full-bleed video, `#000304` scrim; centered h1, 20px subline, email field + Indigo button side by side.
- **Product mock**: framed white app UI with frosted-glass border, overlapping hero and white canvas.
- **Services**: eyebrow + 52px statement on the left, accordion list (open item in black with a grey paragraph; closed items in `#757575`) separated by hairline rules; a dark shipment-tracking card on the right.
- **Logo wall**: customer wordmarks in two rows, black on white.
- **Network**: dot-matrix world map full-bleed, with a white "OUR NETWORK" mono button and a legend in mono caps.
- **Customer stories**: bento grid of photos, quote cards and fit-text stats ("10%", "90%") in ExtraLight.
- **News**: rows with a 28px title, mono date and a translucent mono tag ("WEBINAR", "LOGISTICS UPDATE").
- **Footer**: gradient band with "Join our newsletter…" at 52px, email field + SUBMIT, then a four-column sitemap and the wordmark.

### Whitespace Philosophy
Big vertical gaps (96px section tokens) and narrow text columns. The light type weight needs generous space; nothing is boxed except the product mock and bento cards.

### Voice & Microcopy
- Headlines are declarative and grounded: "AI-powered logistics for the real world", "We ship everywhere, so you can sell anywhere.", "Why brands ship with Flexport".
- Claims carry numbers: "Save up to 10%", "135 countries and 97% of global GDP", "99% final mile and 95% global mile for on-time delivery".
- CTAs are mono caps with an arrow: "GET STARTED →", "REQUEST A DEMO →", "VIEW ALL STORIES →".

### Motion
- Buttons darken from `#3048df` to `#182a9c` on hover (measured); nothing else changes.
- Eyebrows use a "scramble-text" component (class `scramble-text__inner`), a text-decoding effect on reveal.
- Easing tokens: `--ease-out` cubic-bezier(.4, 0, .2, 1), `--ease-in-out-cubic` cubic-bezier(.66, 0, .34, 1), `--ease-out-back` cubic-bezier(.34, 1.56, .64, 1).
- Product-mock tabs hover to `#f7f9fd`.

### Image Direction
Real operations, photographed straight: container ships at sea, stacked containers, a warehouse worker in hi-vis, product shots of customer goods (faucet, cyclists, socks). Product UI is shown as a live, clickable facade rather than a static screenshot.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat white | editorial sections |
| Inset hairline | `#e8e8e8 0px 0px 0px 2px inset` | bento cards |
| Glass | `rgba(255,255,255,0.08)` fill with 1px inset bevels | product-mock frame over the hero |
| Floating | `rgba(0, 0, 0, 0.4) 0px 4px 16px 0px` | overlays (measured on 2 elements) |
| Mock | `rgba(39, 44, 52, 0.12) 0px 1.59611px 1.59611px 0px` | product-mock buttons on hover |

### Decorative Depth
Depth comes from the dark-to-light transitions (video hero into white page, white page into gradient footer) and the glass frame around the app mock. Marketing elements themselves are flat.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | all marketing buttons, inputs, tags, bento cards |
| `{rounded.sm}` | 8px | CSS-declared (10 rules), small UI |
| `{rounded.pill}` | 999px | CSS-declared pill (1 rule) |

The product mock uses its own scaled radii (6.37327px tabs, 1.59611px chips) because it is a scaled-down app facade; do not reuse those values for marketing UI.

### Geometry
Square corners everywhere, hairline rules between list items, and a small filled square "■" as the utility-bar bullet. Map pins in the mock use `50% 50% 50% 0px` teardrop radii.

## Components

### Buttons
- **Primary** (`button-primary`): `#3048df` fill, white Roboto Mono 16px uppercase label with 0.8px tracking and a trailing arrow icon, padding `12px 16px`, height 48px, radius 0, no border, no shadow.
- **Primary hover** (`button-primary-hover`): background `#182a9c`; text, size and shape unchanged (measured on "GET STARTED" and "REQUEST A DEMO").
- **Light** (`button-light`): white fill with Midnight Blue `#052439` text, same mono label, padding and height ("OUR NETWORK" on the map).

### Inputs & Forms
- **Text input** (`text-input`): the hero email field — `rgba(0,0,0,0.1)` fill, 1px solid white border, white 14px Zalando Sans 300, padding `0 12px`, 48px tall, radius 0, placeholder "Enter your email". It sits flush beside the primary button.
- The footer newsletter field uses the same treatment with padding `16px 12px` (51px tall), a mono "WORK EMAIL" label and a checkbox line "I agree to the Terms of Service and Privacy Policy".
- Focus ring tokens: `--focus-ring-width` .125rem (2px), `--focus-ring-offset` .125rem, `--color-focus-ring` Indigo (light). The focus state was not rendered in the measurement, so no focused component is declared.

### Tags
- **Tag** (`tag`): translucent `rgba(0,0,0,0.04)` fill, `#000304` Roboto Mono 14px uppercase (0.7px tracking), 8px padding, 36px tall, radius 0, with a small leading icon ("WEBINAR", "LOGISTICS UPDATE").

### Cards & Containers
- **Bento card** (`card-bento`): white, radius 0, padding `16px 16px 24px`, a 2px inset `#e8e8e8` hairline; holds a customer logo, a mono caption ("SAVED 10% ON LANDED COSTS WITH FLEXPORT") and a fit-text ExtraLight stat.
- **Accordion** (services): items 56px tall with `16px 0` padding, 16px Zalando Sans titles, separated by hairline rules; the open item shows a 20px grey paragraph and a small Indigo play icon on a light tile.

### Navigation
- **Utility bar** (`utility-bar`): 44px, `#020e16`, white Roboto Mono 14px caps.
- **Nav** (`nav`): 80px (`--header-nav-block-size` 5rem), transparent over the hero, white wordmark, six white Roboto Mono 14px uppercase links (0.7px tracking, 48px hit area), search icon, primary button; a 1px white rule below. Each link opens a mega menu with a translucent white underlay.

### Links
Footer links are white Zalando Sans 300 (18px in the sitemap, 14px for legal), no underline. "TAKE A TOUR" in the hero caption is an underlined mono link.

### Footer
`footer`: 2095px tall; a vertical gradient from periwinkle `#aab5ec` through `#7d8ce4`, `#344d9b`, `#223369`, `#0a2842` into solid Midnight Blue `#052439`. White text: 52px ExtraLight newsletter heading, email form with SUBMIT, four sitemap columns (PRODUCTS, TOOLS, INDUSTRIES, COMPANY, plus SERVICES, RESOURCES, SOCIALS), the white wordmark and 14px legal links.

## Design System Architecture

Flexport has published one design system, **Latitude**, described in its README as "an open source design system built by Flexport" that "is currently designed only for internal use at Flexport" and ships React components (https://cdn.jsdelivr.net/npm/latitude-flexport@0.0.2/README.md). The npm package `latitude-flexport` stopped at 0.0.2 (last modified 2022-05-10, https://registry.npmjs.org/latitude-flexport); its documentation link (flexport.com/design) and the GitHub repo now return 404. There is no current public component library, Figma kit or token package. The official brand guidance is the logo/colors page (https://www.flexport.com/company/logo/).

What the live marketing site exposes in `:root` (163 custom properties) shows a clear tiered token system:
- **Token architecture.**
  - Primitive scales: `--color-brand-indigo-50…900`, `--color-brand-midnight-blue-50…900`, `--color-brand-seafoam-100…900`, `--color-brand-sky-blue-100…500`, `--color-brand-cloud-white-50…900`, plus base names `--color-brand-indigo`, `--color-brand-midnight-blue`, `--color-brand-seafoam`, `--color-brand-sky-blue`, `--color-brand-cloud-white` that match the official palette names.
  - Semantic: `--color-heading`, `--color-paragraph`, `--color-text-secondary`, `--color-eyebrow`, `--color-divider`, `--color-page-bg`, `--color-focus-ring`, `--color-selection-bg`, `--color-selection-ink`, `--color-error`, `--color-warning`, `--color-link-btn`.
  - Component/layout: `--component-space-xs…3xl`, `--header-nav-block-size`, `--utility-bar-block-size`, `--section-padding-lg`.
  - Colors are authored in OKLCH.
- **Theming.** Every semantic color is a `light-dark()` pair, e.g. `--color-page-bg: light-dark(oklch(100% 0 0), oklch(15.54% .0269 234.59))` and `--color-error: light-dark(#b9000c, #ff3543)`, so the scheme follows the CSS `color-scheme` property. The homepage renders the light values; the dark page background (`#020e16`) is the utility-bar color.
- **Type & spacing.**
  - Type sizes: `--text-xs/sm/md/lg/xl` (12–20px) and `--display-xs … --display-7xl` (24px to 100px).
  - Weight, tracking and leading: `--font-extralight` 200 / `--font-light` 300 / `--font-regular` 400 / `--font-semibold` 600; tracking from `--tracking-tightest` -.04em to `--tracking-wide` .05em; leading from `--leading-none` 1 to `--leading-relaxed` 1.3.
  - Spacing multiplies a 4px unit (`--space-1x` .25rem). Fit-text headings scale between `--fit-text-min` 16px and `--fit-text-max` 128px.
- **Component model.** BEM-style class names (`hero-feature__scrim`, `bento-card__stat`, `content-row__tag`, `header__nav-link`) combined with text-style utilities (`text-cta`, `text-eyebrow`, `text-display`, `text-heading-6`, `text-body-sm`). Observed components: button, field, tag, accordion, bento card, content row, mega menu, header search panel, scramble text, app facade.
- **Accessibility.** No published rules. Observed: 48px button and input height, a "Skip to main content" link, a 2px focus-ring token with 2px offset, and secondary text `#595959` on white.
- **Delivery.** Self-hosted hashed fonts and CSS; no public packages beyond the dormant `latitude-flexport`.

## Do's and Don'ts

### Do
- Use a white canvas with black headings and `#595959` paragraphs.
- Set display text in Zalando Sans 200 with -0.04em tracking (58px hero, 52px sections).
- Set every button, nav link, eyebrow and tag in uppercase Roboto Mono with 0.05em tracking.
- Make primary buttons Indigo `#3048df`, square, 48px tall, `12px 16px` padding, with a trailing arrow; hover to `#182a9c`.
- Introduce each section with a hairline rule and a grey `#757575` mono eyebrow.
- Back numeric claims with big ExtraLight stats.
- Use Midnight Blue `#052439` for the darkest brand surfaces and the logo.

### Don't
- Don't round buttons, inputs, tags or cards; everything is 0px.
- Don't use bold display type; the heaviest marketing weight is 300 outside the product mock.
- Don't set button labels in sentence case or in the sans.
- Don't use Seafoam or Sky Blue as button colors; on the homepage they are accents only.
- Don't add drop shadows to marketing cards; use the 2px inset hairline.
- Don't put the F-mark icon next to the wordmark (official logo rule).

## Responsive Behavior

### Breakpoints
No breakpoint tokens are exposed in `:root`. At 390px (measured):
- h1 drops from 58px/63.8px to 44px/48.4px, tracking from -2.32px to -0.44px, weight stays 200.
- Body paragraphs stay 20px/24px/-0.4px in `#595959`.
- Most-set mobile sizes: 20px, 16px, 14px, 38px, 24px, 12px, 44px.

### Touch Targets
Buttons and inputs stay 48px tall; nav links have a 48px hit area.

### Collapsing Strategy
- The mobile h1 and body measure 327px wide at 390px, i.e. a single text column.
- Mobile layout of the nav, hero form and bento grid was not captured, so it is not specified here.

### Image Behavior
Not measured at mobile width.

## Iteration Guide

1. White canvas, Zalando Sans 300 body at 20px/24px/-0.4px in `#595959`, headings in `#000000`.
2. Add the 44px `#020e16` utility bar and the 80px transparent nav with white mono caps links and an Indigo "GET STARTED →" button.
3. Hero: full-bleed photo/video with a `#000304` scrim, centered 58px/63.8px ExtraLight headline at -2.32px, 20px subline, translucent email input + "REQUEST A DEMO →".
4. Sections: hairline rule, 14px mono `#757575` eyebrow, 52px/57.2px ExtraLight statement, two-column content.
5. Buttons: `#3048df`, 0px radius, `12px 16px`, 48px, Roboto Mono 16px 0.8px caps; hover `#182a9c`.
6. Cards: white, 0px radius, `16px 16px 24px` padding, 2px inset `#e8e8e8` hairline.
7. Footer: gradient `#aab5ec` → `#052439`, white text, 52px newsletter heading, four sitemap columns.

### Common Mistakes When Recreating Flexport
- Using Midnight Blue as the button color; buttons are Indigo `#3048df`.
- Setting headlines in a regular or bold weight; they are 200.
- Rounding the buttons; they are perfectly square.
- Forgetting the mono/sans split: anything clickable is mono caps.
- Making the whole page dark because the hero is; the content canvas is white.
