---
version: alpha
name: Udemy
category: "Education"
description: "Udemy's marketplace UI as shipped on udemy.com — the proprietary Udemy Sans at weights 300/400/500/700 on a white canvas, deep slate ink #2a2b3f, a single vivid purple #6d28d2 for every action (hover #892de1), 8px-radius buttons at 40px and 48px heights, 1000px pill search field, 16px-radius course cards with a #e9eaf2 hairline, teal \"Bestseller\" tags and a #202230 footer. Colors are authored in oklch as --color-* primitives and --applied-* semantic roles."

colors:
  primary: "#6d28d2"
  primary-hover: "#892de1"
  primary-deep: "#5022c3"
  purple-500: "#3b1b94"
  purple-250: "#af72fd"
  purple-200: "#bda1ff"
  purple-150: "#d2caff"
  purple-100: "#f2efff"
  indigo-200: "#c0c4fc"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  canvas-pale: "#f6f7f9"
  midtone: "#e9eaf2"
  ink: "#2a2b3f"
  ink-supporting: "#595c73"
  ink-subdued: "#71758e"
  border-default: "#d1d2e0"
  border-strong: "#9194ac"
  border-subdued: "#e9eaf2"
  surface-dark: "#202230"
  surface-darkest: "#16161d"
  teal-150: "#c2e9eb"
  teal-500: "#0d5261"
  star-on-dark: "#f69c08"
  star-text: "#8b4309"
  warning: "#c4710d"
  negative: "#d51c0f"
  positive: "#206241"
  shadow-tint: "#8c8693"

typography:
  heading-xxl:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 30.8148px
    fontWeight: 500
    lineHeight: 33.8963px
  heading-xxl-mobile:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 24.2222px
    fontWeight: 500
    lineHeight: 26.6444px
  heading-xl:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 23.4075px
    fontWeight: 500
    lineHeight: 25.7482px
  heading-lg:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 17.8519px
    fontWeight: 500
    lineHeight: 21.4222px
  heading-md:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  heading-sm:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16.8px
  heading-xs:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
    letterSpacing: 0.2px
  text-md:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.6px
  text-sm:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 22.4px
  text-xxs:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 11px
  button-sm:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
  button-md:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
  price-lg:
    fontFamily: "\"Udemy Sans\", \"Noto Sans JP\", Vazirmatn, \"SF Pro Text\", -apple-system, BlinkMacSystemFont, Roboto, \"Segoe UI\", Helvetica, Arial, sans-serif"
    fontSize: 23.4075px
    fontWeight: 700
    lineHeight: 23.4075px

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 24px
  pill: 1000px

spacing:
  xxs: 4px
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 40px
  xxl: 48px
  section: 64px
  hero: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 40px
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 48px
  button-secondary:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 40px
  button-ghost:
    backgroundColor: transparent
    textColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 40px
  button-ghost-hover:
    backgroundColor: "oklch(0.2035 0.0139 285.09 / 0.04)"
    textColor: "{colors.primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 40px
  button-white-solid:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 40px
  button-round-icon:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    size: 40px
  topic-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border-strong}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 34px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.text-sm}"
    decorationColor: "{colors.purple-250}"
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border-default}"
    typography: "{typography.text-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 40px
    height: 48px
  text-input-compact:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border-default}"
    labelTypography: "{typography.heading-sm}"
    typography: "{typography.text-sm}"
    rounded: "{rounded.sm}"
    padding: 20px 16px 0px
    height: 62px
  checkbox-checked:
    backgroundColor: "{colors.primary}"
    borderColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    size: 16px
  course-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.border-subdued}"
    typography: "{typography.heading-lg}"
    rounded: "{rounded.lg}"
    width: 296px
    height: 360px
  hero-content-box:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.text-md}"
    rounded: "{rounded.sm}"
    padding: 24px
  tag-bestseller:
    backgroundColor: "{colors.teal-150}"
    textColor: "{colors.teal-500}"
    typography: "{typography.heading-xs}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 22px
  tag-premium:
    backgroundColor: "{colors.primary-deep}"
    textColor: "{colors.on-primary}"
    typography: "{typography.heading-xs}"
    rounded: "{rounded.sm}"
    padding: 4px 8px
    height: 24px
  accordion-header:
    backgroundColor: "{colors.canvas-pale}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-md}"
    padding: 16px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.text-sm}"
    padding: 0px 24px
    height: 72px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.text-md}"
    padding: 24px 48px
  footer-band:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.text-md}"
    padding: 12px 48px
---

## Overview

Udemy's logged-out homepage reads as a **storefront first, brand second**. Under a thin light-teal announcement strip ("AI is changing the game | Get the skills with Udemy Business") sits a 72px white header: the purple-black Udemy wordmark with its "Uptick" arrow, ghost text buttons (Explore, Subscribe, Udemy Business, Teach on Udemy), a 48px-tall pill search field, a cart icon, an outlined "Log in" and a filled purple "Sign up". Below, a full-bleed carousel of saturated purple/violet hero slides with photographic people and glossy 3D app-icon tiles; a white content box (radius `{rounded.sm}` 4px, padding 24px, soft shadow) carries the headline and a single purple CTA ("Save now").

The page then becomes a catalog: a left-aligned title "Learn *essential* career and life skills" next to three large category image cards (Generative AI, IT Certifications, Data Science) whose white label tabs float over 3D-rendered illustrations; a "Trending Courses" row of 296×360 cards with 16px radius and a hairline border; a dark rounded promo panel ("Reimagine your career in the AI era") with a white solid button; and long lists of skill tabs. The footer flips to deep slate (`{colors.surface-dark}` `#202230`) with white text.

Color discipline is strict: **one action color**. `{colors.primary}` (`#6d28d2`, the site's `--color-purple-400`, also `--applied-text-link`, `--applied-border-focus` and `--ud-btn-background-color`) fills every primary button, outlines every secondary button, colours every link and ghost action. Its hover state is `{colors.primary-hover}` (`#892de1`, `--color-purple-350`, also `--ud-btn-focus-background-color`), measured live on the "Sign up", "Save now", "Learn more" and "Get Personal Plan" buttons. Text is not black but a cool slate `{colors.ink}` (`#2a2b3f`, `--applied-text-default`).

Typography is the proprietary **Udemy Sans** at four loaded weights (300, 400, 500, 700). The signature is a *light* body: running text is weight 300 at 16px/25.6px, headings are 500, and button labels are 700. The heading scale uses unusual fractional sizes — 30.8148px, 23.4075px, 17.8519px — that are rendered exactly that way in computed style.

**Key Characteristics:**
- Single purple action color `#6d28d2` with a brighter, pinker hover `#892de1`; no secondary accent color for buttons.
- Udemy Sans 300 for body copy — an unusually light reading weight — with 500 headings and 700 button labels.
- 8px button radius (`{rounded.md}`), 40px (medium) and 48px (large) button heights, 12px horizontal padding, zero vertical padding (height drives the box).
- 1000px pill only for the search field and round carousel arrows; everything else is 4px/8px/16px.
- Course cards: white, 1px `#e9eaf2` hairline, 16px radius, teal "Bestseller" tag, amber star rating.
- Soft violet-tinted elevation: `0 2px 8px 0 #8c869314, 0 4px 16px 0 #8c86931f` (tint `oklch(62.95% .0204 306.5)`).
- Dark slate footer `#202230` with an ink `#2a2b3f` band above it.

## Colors

> **Source pages:** home (`/`), course page (`/course/100-days-of-code/`), sign-up (`/join/passwordless-auth/?action=signup`). The site authors colors in `oklch()`; the hex values here are the exact sRGB conversions of the site's own `--color-*` / `--applied-*` custom properties, all of which appear in the site's stylesheet corpus.

### Brand & Accent
- **Purple 400 / Primary** (`{colors.primary}` — `#6d28d2`): `--color-purple-400`, `oklch(48.41% .2342 293.93)`. Primary button fill, secondary button border and label, link text, focus border, checkbox fill.
- **Purple 350 / Primary hover** (`{colors.primary-hover}` — `#892de1`): `--color-purple-350`; computed hover background of all primary buttons.
- **Purple 450** (`{colors.primary-deep}` — `#5022c3`): `--color-purple-450`; fill of the "Premium" ribbon tag on course cards.
- **Purple 500** (`{colors.purple-500}` — `#3b1b94`): `--applied-background-accent-dark`.
- **Purple 250** (`{colors.purple-250}` — `#af72fd`): `--applied-text-link-decoration` — the underline color of links.
- **Purple 200** (`{colors.purple-200}` — `#bda1ff`): instructor links on the dark course header (measured), `--ud-prompt-btn-background-color`.
- **Purple 150** (`{colors.purple-150}` — `#d2caff`): `--applied-border-accent`.
- **Purple 100** (`{colors.purple-100}` — `#f2efff`): `--applied-background-accent`.
- **Indigo 200** (`{colors.indigo-200}` — `#c0c4fc`): a legacy hex primitive (`--color-indigo-200` = `--color-blue-200`). It is listed because it is the only text color the automated extractor could parse on the homepage (all other computed colors are oklch); it is **not** the body ink.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background, header, cards, inputs (`--applied-background-default`).
- **Canvas Pale** (`{colors.canvas-pale}` — `#f6f7f9`): `--applied-background-pale`; curriculum accordion headers on course pages.
- **Midtone** (`{colors.midtone}` — `#e9eaf2`): `--applied-background-midtone`; category card fill behind images.
- **Surface Dark** (`{colors.surface-dark}` — `#202230`): `--color-gray-600`; footer main and legal rows.
- **Surface Darkest** (`{colors.surface-darkest}` — `#16161d`): `--applied-background-dark`.
- **Ghost hover** (`oklch(0.2035 0.0139 285.09 / 0.04)` ≈ `#16161d` at 4%): the measured computed hover background of ghost header buttons. Kept as a literal on `button-ghost-hover` rather than a color token because it is only present as a computed oklch value, not as a stylesheet color.

### Text
- **Ink** (`{colors.ink}` — `#2a2b3f`): `--applied-text-default` / `--color-gray-550`. Every heading and paragraph on white. Also the background of the upper footer band.
- **Ink Supporting** (`{colors.ink-supporting}` — `#595c73`): `--color-gray-400`; supporting paragraph under "Learn essential career and life skills".
- **Ink Subdued** (`{colors.ink-subdued}` — `#71758e`): `--applied-text-subdued`; rating counts, struck-through original price, inactive skill tabs.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): text on purple and on the dark footer.

### Borders
- **Border Default** (`{colors.border-default}` — `#d1d2e0`): `--applied-border-default` / `--applied-border-input`; search pill and form-field outline.
- **Border Strong** (`{colors.border-strong}` — `#9194ac`): `--color-gray-300`; outline of small secondary "topic" chips on course pages.
- **Border Subdued** (`{colors.border-subdued}` — `#e9eaf2`): `--applied-border-subdued`; course-card hairline.

### Semantic
- **Teal 150 / Teal 500** (`#c2e9eb` / `#0d5261`): Bestseller tag background and text.
- **Star on dark** (`{colors.star-on-dark}` — `#f69c08`, `--color-orange-300`): rating number on the dark course header.
- **Star text** (`{colors.star-text}` — `#8b4309`, `--applied-text-star`): rating number on course cards.
- **Warning** (`{colors.warning}` — `#c4710d`): `--applied-text-warning` / `--applied-icon-star`.
- **Negative** (`{colors.negative}` — `#d51c0f`): `--applied-text-negative`; the "14 hours left at this price" urgency line and price error text.
- **Positive** (`{colors.positive}` — `#206241`): `--applied-text-positive`.
- **Shadow tint** (`{colors.shadow-tint}` — `#8c8693`): the `oklch(62.95% .0204 306.5)` base used inside every elevation shadow.

## Typography

### Font Family
Everything is set in **Udemy Sans**, a proprietary face served by Udemy via `@font-face` (loaded faces measured: `Udemy Sans 300`, `400`, `500`, `700`). The site declares three stacks as custom properties:
- `--font-stack-text`: `"Udemy Sans","Noto Sans JP","Vazirmatn","SF Pro Text",-apple-system,BlinkMacSystemFont,Roboto,"Segoe UI",Helvetica,Arial,…`
- `--font-stack-heading`: same, without `"SF Pro Text"`.
- `--font-stack-heading-serif`: identical to the heading stack — despite the name, the `ud-heading-serif-xxl` hero titles render in Udemy Sans.

`Noto Sans JP` (400) and `Vazirmatn` (300) are loaded for Japanese and Persian/Arabic scripts. Weight tokens are exposed as `--font-weight-light: 300`, `--font-weight-regular: 400`, `--font-weight-medium: 500`, `--font-weight-bold: 700`.

### Hierarchy

| Token | Class on site | Size | Weight | Line height | Use |
|---|---|---|---|---|---|
| `heading-xxl` | `ud-heading-xxl`, `ud-heading-serif-xxl` | 30.8148px | 500 | 33.8963px | Course-page h1, sign-up h1, homepage section titles |
| `heading-xxl-mobile` | (same at 390px) | 24.2222px | 500 | 26.6444px | Section titles on mobile |
| `heading-xl` | `ud-heading-xl` | 23.4075px | 500 | 25.7482px | Course-page h2 ("What you'll learn") |
| `heading-lg` | `ud-heading-lg` | 17.8519px | 500 | 21.4222px | Course-card titles (h3) |
| `heading-md` | `ud-heading-md` | 16px | 500 | 19.2px | Footer column headings, accordion headers |
| `heading-sm` | `ud-heading-sm` | 14px | 500 | 16.8px | Form labels, card rating numbers |
| `heading-xs` | `ud-heading-xs` | 12px | 700 | 14.4px, 0.2px tracking | Bestseller/Premium tags |
| `text-md` | `ud-text-md` | 16px | 300 | 25.6px | Body, hero subtitles |
| `text-sm` | `ud-text-sm` | 14px | 300 | 22.4px | Testimonials, nav, inputs, card meta |
| `text-xxs` | `ud-text-xxs` | 10px | 400 | 11px | Price-urgency microcopy |
| `button-sm` | `ud-btn-text-sm` | 14px | 700 | 16.8px | Medium buttons (40px) |
| `button-md` | `ud-btn-text-md` | 16px | 700 | 19.2px | Large buttons (48px) |
| `price-lg` | — | 23.4075px | 700 | 23.4075px | Current price in the course buy box |

Note that the homepage hero CTAs ("Get Personal Plan", "Learn AI") use `ud-heading-md` (16px/500) instead of `ud-btn-text-md` (16px/700) — both variants ship.

### Principles
- Body copy is **light (300)**; contrast comes from the slate ink, not weight.
- Headings are always 500 — never 700. Bold (700) is reserved for button labels, tags and prices.
- Line height is a 1.6 ratio for text (16/25.6, 14/22.4) and a 1.1–1.2 ratio for headings and buttons (30.8148/33.8963, 16/19.2).
- Letter-spacing is `normal` everywhere except `heading-xs` (0.2px).

### Note on Font Substitutes
Udemy Sans is proprietary and is not published for third-party use; no official page we could open names its foundry. Use the site's own declared fallback chain — `"SF Pro Text", -apple-system, BlinkMacSystemFont, Roboto, "Segoe UI", Helvetica, Arial, sans-serif` — and keep the weight mapping (300 body / 500 headings / 700 buttons). When substituting, keep the 300 weight for body: it is the most recognisable trait.

## Layout

### Spacing System
Measured gap and padding frequencies cluster on 4px multiples: gaps 4px (most frequent), 16px, 8px, 24px, 20px, 64px; paddings 4px, 16px, 12px, 24px, 8px, 48px, 10px, 64px, 96px, 40px. Tokens: `xxs` 4px, `xs` 8px, `sm` 12px, `md` 16px, `lg` 24px, `xl` 40px, `xxl` 48px, `section` 64px, `hero` 96px.

- Buttons have **0px vertical padding** — height is fixed (34/40/48px) and horizontal padding is 12px (10px for 40px icon-only buttons, 4px for inline ghost links).
- Course-row container: `48px 24px` padding.
- "Learn essential skills" band: `40px 0px 32px`.
- Hero content box: 24px all round.
- Footer sections: `24px 48px`; upper notice band `12px 48px`.

### Grid & Container
The desktop page is 1280px wide with a 24px side gutter; the course row container is 1232px. Course cards are 296px wide in a 4-up carousel with arrow buttons; category cards are a 3-up carousel next to a 296px text column. The header spans full width at 72px tall.

### Whitespace Philosophy
Dense commerce rhythm: sections are separated by roughly 48–96px, but inside a card information is stacked tightly (title, instructor line, tags, rating, price, CTA) with 4–8px gaps. White space is used between modules, not within them.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | Buttons, course cards (border instead of shadow) |
| 1 | `0 2px 8px 0 #8c869314, 0 4px 16px 0 #8c86931f` | Header, hero content box, round white carousel arrows |
| 1 (up) | `0 -2px 8px 0 #8c869314, 0 -4px 16px 0 #8c86931f` | Upward variant in the CSS corpus (usage not observed) |
| 2 | `0 4px 16px 0 #8c869314, 0 8px 24px 0 #8c86933d` | Stronger variant in the CSS corpus (usage not observed) |

The site writes these as `color-mix(in oklch, oklch(62.95% .0204 306.5deg) 8%, transparent)` etc.; the hex-with-alpha form above is the exact equivalent. Focus inside inputs uses an inset ring: `inset 0 0 0 .5px var(--applied-border-input-focus)` (purple).

### Decorative Depth
Depth in imagery comes from glossy 3D-rendered objects (trophies, app tiles, chart blocks) and layered photography inside purple fields — not from UI shadows. UI chrome stays flat.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `xs` | 2px | Checkbox |
| `sm` | 4px | Text inputs, tags/ribbons, hero content box |
| `md` | 8px | All rectangular buttons (`ud-btn`) |
| `lg` | 16px | Course cards, category image cards |
| `xl` | 24px | Large promo panels (measured in frequency table) |
| `pill` | 1000px | Search field, round icon buttons, small icon ghost buttons |

The site declares `--ud-btn-border-radius: 0.8rem`, but the computed radius on every measured button is 8px — the rendered value is authoritative.

### Photography Geometry
Hero and category imagery is cropped to rectangles with the card's radius (16px) and set inside saturated purple or midtone fields. Course thumbnails are 16:9 crops at the top of each card.

## Components

### Buttons
`ud-btn` with size modifiers (`ud-btn-xsmall`, `ud-btn-small` 34px, `ud-btn-medium` 40px, `ud-btn-large` 48px) and style modifiers (`ud-btn-primary`, `ud-btn-brand`, `ud-btn-secondary`, `ud-btn-ghost`, `ud-btn-link`, `ud-btn-link-underline`, `ud-btn-white-solid`, `ud-btn-round`, `ud-btn-icon`).
- **Primary** — `{colors.primary}` fill, white 14px/700 label, 8px radius, `0px 12px` padding, 40px tall ("Sign up"). Hover: `{colors.primary-hover}` `#892de1`; no shadow, no transform.
- **Primary large** — same at 48px tall with 16px/700 label ("Start subscription", "Continue" on sign-up, which uses `ud-btn-brand` with identical colors).
- **Secondary** — transparent, 1px `{colors.primary}` border, purple label, 40px ("Log in"); 48px variant "Learn AI".
- **Ghost** — transparent, purple (or ink in the header on some page loads) label; hover adds a 4% dark wash `#16161d0a`.
- **White solid** — white fill, ink label, used on the dark promo panel ("Learn more", 40px tall, 200px wide).
- **Round icon** — 40×40 (or 34/48) white circle, `{rounded.pill}`, level-1 shadow; carousel arrows.
- **Topic chip** — `ud-btn-small ud-btn-secondary` on course pages: white, ink label, 1px `#9194ac` border, 34px tall.

### Cards & Containers
- **Course card** — white, 1px `{colors.border-subdued}` border, 16px radius, 296×360; thumbnail, 17.8519px/500 title (2–3 lines), 12px instructor line in subdued ink, Bestseller tag + star rating + rating count, price row, outlined "Add to cart".
- **Category card** — 400px tall image card, 16px radius, midtone `#e9eaf2` fill, white label tab with title and arrow; hover darkens the purple label to `#602abb`.
- **Hero content box** — white, 4px radius, 24px padding, level-1 shadow, 440px wide, layered over the hero image.
- **Dark promo panel** — a large rounded dark slate panel with white heading, 4 icon bullets and a white solid button.

### Inputs & Forms
- **Search** — `ud-text-input-medium` inside a pill wrapper: white, 1px `#d1d2e0` border, 1000px radius, 48px tall, `0 40px` padding for the leading magnifier icon, placeholder "Search for anything" in 14px/300.
- **Compact form field** (sign-up) — `ud-compact-form-group`: container 1px `#d1d2e0` border, 4px radius, 62px tall; the input has `20px 16px 0` padding so the 14px/500 floating label ("Full name") sits inside the top of the field.
- **Checkbox** — 16×16, 2px radius, 2px purple border, purple fill when checked; label in 14px/300.

### Navigation
72px white header with level-1 shadow and 24px side padding: logo, ghost "Explore" and "Subscribe", pill search (flex-grow), ghost "Udemy Business" / "Teach on Udemy", cart icon, outlined "Log in", filled "Sign up", outlined globe icon button. A "Skip to content" link is the first focusable element.

### Pills, Tags, and Chips
- **Bestseller** — `#c2e9eb` fill, `#0d5261` text, 12px/700, 0.2px tracking, `4px 8px` padding, 4px radius, 22px tall.
- **Premium** — `#5022c3` fill, white text, same type and padding, 24px tall.
- **Skill tabs** — `ud-nav-button` 16px text; active tab 500 weight in ink, inactive 400 in `#71758e`, `8px 4px` padding, 48px tall.

### Signature Components
- **Price block** — current price 23.4075px/700 ink, struck original price 16px/300 `#71758e`, urgency line 10px/400 `#d51c0f`.
- **Curriculum accordion** — section headers on `#f6f7f9`, 16px/500 ink, 16px padding.
- **Footer** — ink `#2a2b3f` notice band ("Top companies choose Udemy Business…"), skills link grid, then `#202230` main footer with 16px/500 white column headings and 14px/300 white links.

## Design System Architecture

**Udemy publishes no public design-system documentation, token package or component repository.** What we found:
- [design.udemy.com](https://design.udemy.com/) — "Design at Udemy" — publishes only five design principles (Invite discovery, Build personalized experiences, Create ease, Spark human connection, Elevate user content) and a careers link; no tokens, components or guidelines. It explicitly asks designers to "accommodate for differences in device, language, culture, environment, resources, and ability".
- [about.udemy.com — Welcome to our brand-new brand (2021)](https://about.udemy.com/udemy-news/welcome-to-our-brand-new-brand/) — the brand story: the "Uptick" arrow logo, and a brand color described as a vivid, optimistic purple; photography of real people and an imaginative illustration style. No hex values or type specs.
- [github.com/udemy](https://github.com/udemy) — public repos are forks/utilities (celery, kombu, eslint-plugin-gettext, highcharts-regression…); no design-system repo.
- npm registry search for `scope:udemy` returned no packages.

Everything below is therefore the **de-facto system measured on udemy.com**:

### Token architecture
Three tiers of CSS custom properties on `:root`:
1. **Primitives** — `--color-{hue}-{step}` with hues gray, purple, red, orange, yellow, green, teal, blue, indigo and steps 100–650, mostly in `oklch()`: e.g. `--color-purple-400: oklch(48.41% 0.2342 293.93deg)`, `--color-gray-550: oklch(29.74% 0.0362 281.74deg)`, `--color-teal-150`. Blue/indigo/yellow remain as legacy hex (`--color-indigo-200: #c0c4fc`, `--color-blue-300: #5022c3`).
2. **Semantic ("applied")** — `--applied-{text|background|border|icon}-{role}`: `--applied-text-default`, `--applied-text-subdued`, `--applied-text-link`, `--applied-text-link-decoration`, `--applied-background-pale`, `--applied-background-midtone`, `--applied-background-dark`, `--applied-border-input-focus`, `--applied-icon-star`, plus positive/negative/warning/info/knockout variants and `-dark` text variants.
3. **Component** — `--ud-btn-background-color`, `--ud-btn-color`, `--ud-btn-focus-background-color`, `--ud-btn-focus-color`, `--ud-btn-border-radius`, `--ud-prompt-btn-*`.
Typography tokens: `--font-stack-text`, `--font-stack-heading`, `--font-stack-heading-serif`, `--font-weight-light|regular|medium|bold`.

### Theming
Only one (light) theme's variables were present on the measured pages; we observed no dark-mode or high-contrast variable set and no theme class switch. Dark surfaces (footer, course header, promo panel) are local sections using `--applied-background-dark` / gray-600 with "knockout" (white) text tokens (`--applied-text-knockout`, `--applied-border-knockout`).

### Type & spacing systems
Utility classes `ud-heading-{xxl,xl,lg,md,sm,xs}`, `ud-heading-serif-xxl`, `ud-text-{md,sm,xxs}`; sizes as in the hierarchy table, scaling down at 390px (xxl 30.8148 → 24.2222px; mobile frequency table also shows 20.1111px and 17.0278px). Spacing values are 4px multiples (see Layout).

### Component model
BEM-like `ud-` prefixed classes with modifier stacking: `ud-btn ud-btn-{size} ud-btn-{style} ud-btn-text-{sm|md}`, `ud-text-input ud-text-input-{small|medium}`, `ud-compact-form-group / -control-container / -label-content`, `ud-form-label`, `ud-toggle-input-container`, `ud-accordion-panel-toggler`, `ud-nav-button`, `ud-link-underline`, `ud-link-white`, `ud-container`, `ud-full-viewport-container`. Newer modules are CSS-module scoped (`course-lede-module-scss-module__…`, `vertical-card_card__…`) and compose the `ud-` utilities. Observed inventory: button (9 styles × 4 sizes), text input, compact form field, checkbox/toggle, accordion, tabs, carousel, course card, ribbon/tag, star rating, price, header, footer.

### Accessibility
Observed (not documented): a "Skip to content" first link, `ud-sr-only` screen-reader text (e.g. "Current price", "Original Price"), focus tokens `--applied-border-focus` / `--applied-border-input-focus` (purple) and `ud-custom-focus-visible`, touch targets of 40–48px for header and primary buttons (34px for small buttons). Ink `#2a2b3f` on white and white on `#6d28d2` are high-contrast pairings. No official contrast target is published.

### Delivery
Not public. The site ships global `ud-` utility CSS plus CSS-module scoped classes; no npm package, Figma community kit or versioned release notes are available.

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#6d28d2` for every action — filled, outlined, ghost and link — and `#892de1` for its hover.
- Set body text in Udemy Sans **300** at 16px/25.6px or 14px/22.4px, headings at 500.
- Size buttons by height (34/40/48px) with `0px 12px` padding and an 8px radius.
- Use the `#d1d2e0` hairline for inputs and `#e9eaf2` for card borders.
- Keep the search field as a 48px pill with a leading icon.
- Use the teal Bestseller tag and amber star rating on course cards.
- Put dark content on `#202230` / `#2a2b3f` with white text.
- Keep shadows violet-tinted and soft (`#8c8693` at 8–24%).

### Don't
- Don't introduce a second button color (no green "Buy", no orange CTA) — prices and urgency use text color only.
- Don't use bold for headings; 700 is for labels, tags and prices.
- Don't use pure black text or a pure gray; ink is the cool slate `#2a2b3f`.
- Don't round buttons into pills — only search and icon buttons are pill-shaped.
- Don't drop-shadow course cards; they use a 1px border.
- Don't round the fractional heading sizes to integers if exact fidelity matters (30.8148px, 23.4075px, 17.8519px are what render).

## Responsive Behavior

### Breakpoints
Measured at 1280px and 390px. At 390px the section title drops from 30.8148px to 24.2222px (line height 26.6444px), mid headings to 20.1111px and card titles to 17.0278px; body sizes (16px, 14px, 12px) are unchanged. Breakpoint pixel values are not published and were not measured.

### Touch Targets
Medium buttons 40px, large buttons 48px, search 48px, round carousel arrows 40px (34px small). Small chips are 34px.

### Collapsing Strategy
At 390px the measured section title wraps within a 342px column; mobile header and carousel behaviour beyond font sizes was not measured, so do not infer specific collapse rules from this file.

### Image Behavior
Hero images are full-bleed and cropped; course thumbnails keep a fixed aspect inside the card width.

## Iteration Guide

1. Start from white `{colors.canvas}`, slate `{colors.ink}` text, Udemy Sans (or its declared fallback stack) at weight 300.
2. Add exactly one action color: `{colors.primary}`; hover `{colors.primary-hover}`.
3. Build buttons from `button-primary` / `button-secondary` / `button-ghost` — 40px or 48px, 8px radius, 12px side padding, 14px/700 or 16px/700 labels.
4. Build catalog rows from `course-card` (296×360, 16px radius, `#e9eaf2` hairline) with `tag-bestseller`, rating and price block.
5. Use `search-input` (pill) in the header; `text-input-compact` (4px radius, floating label) in forms.
6. Elevate only floating chrome (header, hero box, arrows) with the level-1 violet-tinted shadow.
7. Close the page with the `footer-band` (`#2a2b3f`) and `footer` (`#202230`) in white text.
8. Verify: every heading 500, every body run 300, no second accent color, no pill-shaped rectangular buttons.
