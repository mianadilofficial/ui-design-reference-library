---
version: alpha
name: Ramp
category: "Banking & Insurance"
description: "Ramp's site is a restrained, editorial finance page on a white #ffffff canvas with warm-gray #f4f2f0 panels and near-black #0c0a08 ink. Every word is set in Lausanne at a single weight (400). Headlines are large (64px/64px h1) with a two-tone trick: the second half of a sentence drops to 60% ink (#0c0a0899). One acid accent, 'solar' #e4f222, fills the primary CTA (6px radius; 8px on the 52px hero form button) and brightens to #f5ff78 on hover; the secondary CTA is a #1a1919 black button. Cards use 12px corners with 1px #2121211a hairlines; the footer is #1a1919 with 128px vertical padding."

colors:
  primary: "#e4f222"
  primary-hover: "#f5ff78"
  on-primary: "#0c0a08"
  canvas: "#ffffff"
  ink: "#0c0a08"
  ink-hushed: "#14110d99"
  ink-hushed-token: "#0c0a0899"
  surface-warm: "#f4f2f0"
  surface-warm-hover: "#d2cecb"
  gray-dark: "#6e6a68"
  black: "#1a1919"
  black-hover: "#212121cc"
  surface-dark-card: "#1f1f1d"
  on-dark: "#ffffff"
  on-dark-hushed: "#ffffff99"
  ghost-on-dark: "#ffffff0d"
  hairline: "#2121211a"
  input-fill: "#21212106"
  spring: "#5683d2"
  spring-light: "#e4ebf6"
  blaze: "#e96516"
  smolder: "#17332d"

typography:
  display-xl:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: -0.01px
  display-lg:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: -0.01px
  display-md:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: -0.005px
  heading-lg:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32px
  heading-md:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  body-xl:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  lead:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  body-relaxed:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  body-sm:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  caption:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19px
  eyebrow:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 10px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.18px
  button:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 10.8px
  button-sm:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 10.4px
  mobile-h1:
    fontFamily: "Lausanne, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 42px
    letterSpacing: -0.01px

rounded:
  xxs: 3px
  xs: 4px
  button: 6px
  hero-button: 8px
  input: 10px
  card: 12px
  lg: 16px
  pill: 9999px

spacing:
  s4: 4px
  s6: 6px
  s8: 8px
  s12: 12px
  s16: 16px
  s20: 20px
  s24: 24px
  s32: 32px
  s48: 48px
  s64: 64px
  s128: 128px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 16px
    height: 43px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-primary-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 12px 16px
    height: 34px
  button-dark:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 12px 16px
    height: 34px
  button-dark-hover:
    backgroundColor: "{colors.black-hover}"
    textColor: "{colors.on-dark}"
  button-secondary:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 16px
    height: 43px
  button-secondary-hover:
    backgroundColor: "{colors.surface-warm-hover}"
    textColor: "{colors.ink}"
  button-ghost-nav:
    backgroundColor: "{colors.ghost-on-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.button}"
    padding: 12px 16px
    height: 34px
  hero-email-form:
    backgroundColor: "{colors.input-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.input}"
    padding: 0px 16px 0px 20px
    height: 52px
  hero-email-submit:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.hero-button}"
    padding: 0px 20px
    height: 52px
  text-input:
    backgroundColor: "{colors.input-fill}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
    typography: "{typography.input}"
    rounded: "{rounded.button}"
    height: 43px
  product-card:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
    typography: "{typography.heading-md}"
    rounded: "{rounded.card}"
  stat-card-dark:
    backgroundColor: "{colors.surface-dark-card}"
    textColor: "{colors.on-dark}"
    typography: "{typography.display-xl}"
    rounded: "{rounded.card}"
  pricing-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-relaxed}"
    rounded: "{rounded.hero-button}"
  link:
    textColor: "{colors.ink-hushed}"
    typography: "{typography.body-relaxed}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-sm}"
    height: 102px
  announcement-bar:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-sm}"
  footer:
    backgroundColor: "{colors.black}"
    textColor: "{colors.on-dark-hushed}"
    typography: "{typography.body-sm}"
    padding: 128px 0px
---

## Overview

Ramp's homepage (measured at https://ramp.com/ on a 1280px viewport) reads like a calm financial report. A thin black announcement strip ("New: AI Token Spend Management — see, understand, and control your AI bill. Learn more") sits above a white navigation row: the lowercase "ramp" wordmark with its small ramp glyph, then Products / Partners / Solutions / Resources with chevrons, Customers and Pricing. On the right are "Sign in", a solar-yellow "See a demo" and a black "Get started".

The hero is left-aligned, not centered. A tiny uppercase eyebrow with a live ticker chip ("US CORPORATE PAYMENTS PROCESSED BY RAMP: 0.9165199%") sits above the 64px headline "Time is money. Save both." Below it come an 18px subline at 60% ink and an email capture: a 52px warm-tinted field with a solar "Get started for free" button inside it. The visual below is a large warm-gray `#f4f2f0` panel framing a desktop "Reporting" screen (area chart in pastel blue / green / pink), a phone "Bills" screen, and the black Ramp corporate card overlapping the lower left. A faint dotted grid texture fills the background around it. A horizontal ticker band ("AGENTS AT WORK TODAY: RECEIPTS PROCESSED 3,578,170 …") cuts across the image in 10px uppercase.

Further down, the page alternates: a 28px two-tone statement ("Join 70,000 of the world's most ambitious companies **growing 3.2x faster than the average American business.**", with the second clause at 60% ink), a customer-logo grid of pale tiles with one large dark photo card ("$1M+ saved on global spend"), and product cards with 12px corners on `#f4f2f0`.

**Key Characteristics:**
- One typeface (Lausanne), one weight (400). Hierarchy comes only from size and from two ink opacities: `#0c0a08` and the 60% hushed ink `#14110d99`.
- Two-tone headlines: the lead clause in full ink, the continuation in hushed ink.
- One acid accent, solar `#e4f222`, kept for the primary CTA. On hover it brightens to `#f5ff78`; it never darkens.
- Secondary actions are either black (`#1a1919`) or warm gray (`#f4f2f0`). There are no outlined buttons.
- Small radii: 6px buttons, 8px for the hero form button and pricing cards, 10px for the hero field, 12px for cards.
- Warm neutrals (`#f4f2f0`, `#d2cecb`, `#6e6a68`) rather than cool grays.
- Product UI is the main imagery, shown light, crisp and data-dense.

## Colors

> Source: computed styles on https://ramp.com/ and https://ramp.com/pricing, plus the site's own `:root` variables (names in parentheses). The site writes many colors as CSS `lab()`; the hex values below are the hex aliases Ramp itself declares (`--solar`, `--text-primary` …) or Playwright computed values converted to sRGB.

### Brand & Accent
- **Solar** (`{colors.primary}` `#e4f222`, `--solar`; `--background-color-solar`): Primary CTA fill ("See a demo", "Get started for free", "Switch in days, not months").
- **Solar Light** (`{colors.primary-hover}` `#f5ff78`, `--solarLight`): Hover fill of solar buttons (measured on hover).
- **Spring** (`{colors.spring}` `#5683d2`, `--spring`) and **Spring Light** (`{colors.spring-light}` `#e4ebf6`, `--springLight`): Blue brand tones used in gradients `--dusk` / `--daylight`.
- **Blaze** (`{colors.blaze}` `#e96516`, `--blaze`): Orange accent token (`--text-color-blaze`).
- **Smolder** (`{colors.smolder}` `#17332d`, `--smolder`): Deep green brand token.

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`): Page background.
- **Warm Gray** (`{colors.surface-warm}` `#f4f2f0`, `--grayLight`): Hero product panel, product cards, secondary buttons. It is the largest painted area on the homepage.
- **Warm Gray Medium** (`{colors.surface-warm-hover}` `#d2cecb`, `--grayMedium`, `--border-primary`): Hover fill of warm-gray buttons; the primary border token.
- **Gray Dark** (`{colors.gray-dark}` `#6e6a68`, `--grayDark`).
- **Black** (`{colors.black}` `#1a1919`, `--black`): "Get started" / "Contact sales" buttons, announcement strip, footer.
- **Black hover** (`{colors.black-hover}` `#212121cc`): Measured hover fill of black buttons (rgba(33,33,33,0.8)).
- **Dark card** (`{colors.surface-dark-card}` `#1f1f1d`): The "$1M+" testimonial photo card.
- **Hairline** (`{colors.hairline}` `#2121211a`, `--color-black-100`): 1px card and input borders.
- **Input fill** (`{colors.input-fill}` `#21212106`): The barely-tinted hero email field and pricing inputs.
- **Ghost on dark** (`{colors.ghost-on-dark}` `#ffffff0d`): The "Sign in" button fill with its inset `rgba(255,255,255,0.6) 0 0 2px` highlight.

### Text
- **Ink** (`{colors.ink}` `#0c0a08`, `--text-primary`): Headlines, primary copy, button labels on solar and warm gray. The logo SVG in Ramp's official media kit uses the same `#0C0A08`.
- **Ink Hushed** (`{colors.ink-hushed}` `#14110d99`): The most-read text color on the homepage by characters (3,592). It is the computed value of `--text-color-hushed lab(2.83994% .367254 .969091/.6)` and is used for the second clause of two-tone headlines, testimonial titles, captions and "Read the report". Ramp's own hex alias for the same role is `--text-hushed #0c0a0899` (`{colors.ink-hushed-token}`); the small difference comes from Lab→sRGB conversion. Either renders as 60% ink.
- **On Dark** (`{colors.on-dark}` `#ffffff`, `--text-primaryReverse`) and **On Dark Hushed** (`{colors.on-dark-hushed}` `#ffffff99`, `--text-hushedReverse`): Footer and announcement strip.

## Typography

### Font Family
- **Lausanne** (`--font-sans "Lausanne", Arial, sans-serif`), loaded at 400 normal and 400 italic only. TWK Lausanne is a retail typeface from the Weltkern foundry (https://www.weltkern.com/typefaces/lausanne). Font metrics are pinned in CSS: `--lausanne-units-per-em 2048`, `--lausanne-ascent 1866`, `--lausanne-descent -410`.
- **IBM Plex Mono** (`--font-mono "IBM Plex Mono", ui-monospace, monospace`) is declared as the mono family; no rendered text used it on the measured pages, so it has no token here.
- The CSS also ships IBM Plex Sans / IBM Plex Sans JP and Inter faces for localized and embedded content; none were the rendered face on the English homepage.

### Hierarchy (measured)

| Token | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|
| `display-xl` | 64px | 400 | 64px | -0.01px | h1 "Time is money. Save both." / "3 Days" stat |
| `display-lg` | 48px | 400 | 50px | -0.01px | "Systems that never spoke…" |
| `display-md` | 40px | 400 | 42px | -0.005px | "One platform for all of finance." |
| `heading-lg` | 28px | 400 | 32px | — | "Join 70,000 …" h2 |
| `heading-md` | 24px | 400 | 28px | — | product-card titles (h3) |
| `body-xl` | 20px | 400 | 26px | — | "See what agents can automate." |
| `lead` | 18px | 400 | 24px | — | hero subline (hushed) |
| `body` | 16px | 400 | 22px | — | paragraphs (`bodyText`) |
| `body-relaxed` | 16px | 400 | 24px | — | links, labels |
| `input` | 15px | 400 | 22.5px | — | pricing inputs |
| `body-sm` | 14px | 400 | 20px | — | testimonial roles, footer links |
| `caption` | 13px | 400 | 19px | — | legal footer copy |
| `eyebrow` | 10px | 400 | 22px | 0.18px | uppercase tickers and eyebrows |
| `button` | 16px | 400 | 10.8px | — | 43px and 52px buttons |
| `button-sm` | 14px | 400 | 10.4px | — | 34px nav buttons |
| `mobile-h1` | 40px | 400 | 42px | -0.01px | h1 at 390px |

### Principles
- Never bold. `fontWeightsByChars` on the homepage is 100% weight 400. Emphasis comes from size and from switching between full and hushed ink.
- Line heights are tight: 1.0 at 64px, about 1.04 at 48px, 1.14 at 28px, 1.375 at 16px.
- Buttons set a very short line height (10.8px / 10.4px) and get their height from padding, so labels sit optically centered.
- Ramp's CSS also exposes Tailwind-style type tokens: `--text-xs .75rem` through `--text-5xl 3rem`, `--tracking-tight -.025em`, `--leading-tight 1.25`, `--leading-relaxed 1.625`.

### Note on Font Substitutes
Lausanne is a commercial Weltkern typeface (license from the foundry). The site's own fallback is `Arial, sans-serif`, and that is the stack to keep if Lausanne is not licensed. Hold weight 400 and the measured sizes and line heights; do not "compensate" with medium weights.

## Layout

### Spacing System
- Most frequent gaps: 8px (65), 12px (36), 24px (21), 16px (13), 4px (5). Paddings: 8px (58), 20px (43), 4px (40), 24px (27), 6px (18), 64px (17), 12px (17).
- Large section padding: 64px, plus 128px for the footer (`padding: 128px 0px`).
- `--spacing .25rem` is the Tailwind base unit (4px). Named spacers: `--spacer-m 40px`, `--spacer-l 80px`.

### Grid & Container
- Content is left-aligned with a 64px side margin at 1280px. Wide panels span the full content width (about 1152px; the "Read the report" link row measures 1152px).
- Container tokens: `--container-sm 24rem` … `--container-6xl 72rem`.
- Product cards sit in a two-column grid of 564px-wide cards.

### Whitespace Philosophy
Big quiet gaps between sections (roughly 120–160px in the capture) and very little ornament. The one texture is the faint dotted grid behind the hero panel. Sections are separated by space, not by rules.

### Voice & Microcopy
- Headlines are short, declarative and money-themed ("Time is money. Save both.", "One platform for all of finance.").
- Numbers are live and precise ("0.9165199%", "3,578,170", "70,000", "3.2x"), set in small uppercase rows with numeric chips. Precision is part of the brand.
- CTAs are plain verbs with low friction: "Get started for free", "See a demo", "Switch in days, not months", "Read the report →".
- Legal and footnote copy is 13px and hushed, never hidden.

### Motion
- Button color changes are instant fill swaps (solar → solar light, black → 80% black). Ramp's CSS declares `--default-transition-timing-function cubic-bezier(.4, 0, .2, 1)` and `--ease-out cubic-bezier(0, 0, .2, 1)`.
- The metrics band and ticker chips update numbers in place (the CSS includes a `--_number-flow-dx` variable from a number-flow animation).
- Nothing bounces, scales or parallaxes on the measured pages.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat white | canvas |
| 1 | `#f4f2f0` fill, 1px `#2121211a` border | product cards, hero panel |
| 2 | white fill + 1px `#2121211a` border | testimonial video card, inner app screens |
| 3 | `0 8px 30px #00000014`, `0 4px 12px #0000001a` (in CSS) | popovers and menus |
| inset | `rgba(255,255,255,0.6) 0 0 2px inset` | "Sign in" glass button |

Ramp avoids drop shadows on marketing cards. Depth comes from the warm-gray step and the hairline.

### Decorative Depth
Gradient tokens exist for richer sections: `--daylight` (`#d2dff3` → `#f2f5f9`), `--dusk` (`#e4ebf6` → `#c3d3ef` → `#5683d2` → `#001b4a`) and `--midnight` (`#000` → `#112d5b`). The homepage hero uses only the dotted-grid texture.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.xxs}` | 3px | small icon buttons (arrow chips on logo tiles) |
| `{rounded.xs}` | 4px | tags, small chips |
| `{rounded.button}` | 6px | all standard buttons and pricing inputs |
| `{rounded.hero-button}` | 8px | hero "Get started for free" submit, pricing cards |
| `{rounded.input}` | 10px | hero email field shell |
| `{rounded.card}` | 12px | product cards, dark stat card, video card (most frequent radius, 42) |
| `{rounded.lg}` | 16px | large panels |
| `{rounded.pill}` | 9999px | round dots and toggles (measured as 3.35544e+07px) |

### Photography Geometry
Customer photography sits in 12px-radius cards, cropped tight to one person against a dark interior, with a white logo and the big stat set over the image in 64px type.

## Components

### Buttons
- **Primary / solar** (`button-primary`): `#e4f222` fill, `#0c0a08` text, 16px/400, radius 6px, padding 16px, 43px tall. Hover changes the fill to `#f5ff78`. In the nav it shrinks to `button-primary-nav`: 14px text, padding `12px 16px`, 34px tall.
- **Dark** (`button-dark`): `#1a1919` fill, white text; "Get started" in the nav (34px) and "Contact sales" / "View Demo" in content (43px with 16px padding, or 51px with 20px padding). Hover changes the fill to `#212121cc`.
- **Secondary / warm** (`button-secondary`): `#f4f2f0` fill, `#0c0a08` text, 43px. Hover changes the fill to `#d2cecb`. ("View Demo" next to "Switch in days, not months".)
- **Ghost nav** (`button-ghost-nav`): "Sign in". `#ffffff0d` fill with an inset white glow, ink text, 34px tall. Hover changes the fill to solar `#e4f222`.
- Hover never adds underline or shadow; only the fill changes.

### Cards & Containers
- **Product card** (`product-card`): `#f4f2f0`, 1px `#2121211a` border, radius 12px, about 564 × 483px. Two-tone 24px title at top left ("Cards & Expenses **that handle themselves**"), a small 3px-radius arrow button at top right, and an illustration or product screen bleeding off the bottom.
- **Dark stat card** (`stat-card-dark`): `#1f1f1d` base under a full photo, radius 12px, with a 64px white figure ("$1M+") and a 16px caption.
- **Logo tile grid**: pale tinted squares separated by 1px gaps, each holding a gray customer logo; some tiles carry a small circular arrow.
- **Pricing card** (`pricing-card`): radius 8px, plan name, price "$0/mo/user", description; measured on https://ramp.com/pricing.

### Inputs & Forms
- **Hero email form** (`hero-email-form`): a 52px field with radius 10px, padding `0px 16px 0px 20px`, `#21212106` fill and placeholder "What's your work email?". It holds a solar submit button (`hero-email-submit`, 52px, radius 8px, padding `0px 20px`).
- **Text input** (`text-input`, pricing page): 43px, radius 6px, 1px `#2121211a` border, `#21212106` fill, 15px/22.5px text.

### Navigation
- **Desktop nav** (`nav`): the header block is 102px including the 40px announcement strip (`--nav-banner-height 40px`, `--nav-height calc(62px + var(--nav-banner-height))`). Menu triggers are 14px with chevrons; on hover their text resolves to full `#0c0a08` (measured `lab(2.84 0.37 0.97)`).
- **Announcement strip** (`announcement-bar`): `#1a1919`, white 14px text, underlined "Learn more" (13px), close "×" at the right.

### Links
- Body links ("Read the report →") are 16px hushed ink with a trailing arrow; hover keeps the color.

### Pills, Tags, and Chips
- **Ticker chip**: a tiny bordered chip holding live figures ("0.9165199%", "3,578,170") inside the 10px uppercase eyebrow rows.

### Product Screenshots
- The hero "Reporting" screen is a light desktop app window: a thin title bar with three gray dots, a left icon rail, tabs ("Spending", "Compliance", "Process", "+ New dashboard"), and a stacked area chart in pale blue, green and pink with a dark tooltip.
- In-app buttons copy the marketing grammar: a small solar "+ Create report" next to a bordered "Save up to $3,500".
- A phone "Bills" screen overlaps the right edge with a green "Approve" button and a white "Request changes" button, showing that approval states use green inside the product, not solar.
- The black Ramp card (rendered with fine diagonal line texture, white wordmark, and a VISA mark on the large version) overlaps the panel's lower left corner.
- Screens are never tilted or shown in 3D; they sit flat and straight, cropped by the panel edge.

### Signature Components
- **Two-tone headline**: one sentence split across `#0c0a08` and the 60% hushed ink `#14110d99`. It is used for nearly every section title and card title.
- **Live metrics band**: a full-width strip of uppercase 10px labels with numeric chips, crossing the hero image.
- **Footer** (`footer`): `#1a1919`, padding `128px 0px`, many columns of 14px links in `#ffffff99`, with 13px legal copy beneath.

## Design System Architecture

Ramp runs an internal design-system site: `https://design.ramp.com` redirects to a Cloudflare Access login (`ramp.cloudflareaccess.com`), so it is not public and nothing from it is cited here. Ramp's official press page (https://ramp.com/press) offers only a media kit (https://assets.ramp.com/nextjs/ramp_september_2026_media_kit.zip). Its README sets the logo rules: use the full wordmark-and-glyph lockup, Black or White only, clear space on every side equal to the height of the lockup, and no distortion, effects, rearranging or "non-approved colors". The black logo SVG fill is `#0C0A08`. Everything else below is the **de-facto system** read from the live CSS on https://ramp.com/.

- **Token architecture.**
  - *Brand primitives* use names rather than numbers: `--solar #e4f222`, `--solarLight #f5ff78`, `--spring #5683d2`, `--springLight #e4ebf6`, `--blaze #e96516`, `--smolder #17332d`, `--grayLight #f4f2f0`, `--grayMedium #d2cecb`, `--grayDark #6e6a68`, `--black #1a1919`, `--white #fff`.
  - *Alpha ramps* are built from an RGB triplet: `--black-rgb 33, 33, 33` → `--black-25` … `--black-900`, and `--color-white-*` likewise.
  - *Semantic* tokens are role-prefixed and declared in Lab color: `--text-color-primary`, `--text-color-hushed`, `--text-color-primaryReverse`, `--text-color-hushedReverse`, `--background-color-solar`, `--background-color-grayLight`, `--border-color-primary`, `--accent-color-primary`. Hex aliases sit alongside them (`--text-primary #0c0a08`, `--text-hushed #0c0a0899`, `--border-primary #d2cecb`).
- **Theming.** There is no user-facing light/dark switch. A `--page-theme var(--white)` variable and the paired `primary` / `primaryReverse` text tokens show that sections flip between light and dark surfaces (the footer and announcement strip use the reverse set).
- **Type & spacing.** One family and one weight. Tailwind v4 scale tokens (`--text-xs` … `--text-5xl`, `--spacing .25rem`, `--radius-sm .25rem` … `--radius-3xl 1.5rem`), explicit breakpoints `--breakpoint-sm 480px`, `--breakpoint-md 768px`, `--breakpoint-lg 992px`, `--breakpoint-xl 1280px`, `--breakpoint-2xl 1440px`, and a z-index scale (`--z-header 300`, `--z-overlay 400`, `--z-modal 500`, `--z-popover 600`, `--z-tooltip 700`, `--z-toast 800`, `--z-navmenu 900`).
- **Component model.** On the marketing site: buttons in solar / black / warm-gray / glass variants at 34px (nav), 43px (content) and 52px (hero form) heights; product cards; logo tiles; pricing cards; inputs. No public component inventory exists.
- **Accessibility.** No published rules. Observed: ink `#0c0a08` on solar `#e4f222` for CTAs, hushed text at 60% alpha, and nav buttons 34px tall.
- **Delivery.** The site is built with Next.js (assets under `assets.ramp.com/nextjs/`) and Tailwind CSS v4 variables (`--tw-*`). No public npm token package or Figma kit was found.

## Do's and Don'ts

### Do
- Set everything in Lausanne 400. Get hierarchy from size and from `#0c0a08` vs hushed `#14110d99`.
- Write headlines as two-tone sentences, the lead in full ink and the continuation hushed.
- Keep solar `#e4f222` for the single most important action in a view, with `#0c0a08` text.
- Pair solar with a black `#1a1919` or warm-gray `#f4f2f0` secondary.
- Use 6px radius on buttons and 12px on cards; border cards with 1px `#2121211a`.
- Show real product UI on warm-gray panels, crisp and light.
- Close the page with a `#1a1919` footer of 14px `#ffffff99` links and 128px vertical padding.

### Don't
- Don't use bold or medium weights.
- Don't darken solar on hover; it brightens to `#f5ff78`.
- Don't use pill buttons or large radii on CTAs.
- Don't use cool grays or pure black `#000` as the ink; the neutrals are warm (`#0c0a08`, `#1a1919`, `#f4f2f0`).
- Don't add drop shadows to marketing cards.
- Don't use solar as a large background field or for text.
- Don't place the Ramp wordmark without its glyph or recolor the logo (media kit rule).

## Responsive Behavior

### Breakpoints
Ramp's CSS declares `--breakpoint-sm 480px`, `--breakpoint-md 768px`, `--breakpoint-lg 992px`, `--breakpoint-xl 1280px`, `--breakpoint-2xl 1440px`.

At 390px (measured):
- h1 drops from 64px/64px to 40px/42px (tracking -0.01px).
- The most-set sizes become 14px, 12px, 15px, 22px, 20px, 16px, 10px, 34px and 28px.

### Touch Targets
Content buttons are 43px tall and the hero form is 52px.

### Collapsing Strategy
- The two-column product cards become one column.
- Logo tiles reflow into fewer columns.

### Image Behavior
The hero product panel scales down and keeps its warm-gray frame. The overlapping card and phone mockups stay composited.

## Iteration Guide

1. Canvas `#ffffff`; text Lausanne 400 `#0c0a08`; body 16px/22px.
2. Hero: left-aligned 64px/64px headline, 18px/24px hushed subline, 52px email form with a solar submit.
3. Put product UI on a `#f4f2f0` panel with a 1px `#2121211a` border and 12px corners.
4. Section titles: 28–48px, two-tone.
5. Buttons: solar primary + black or warm-gray secondary, 6px radius, 16px padding. On hover, solar goes to `#f5ff78`, black to `#212121cc`, warm gray to `#d2cecb`.
6. Cards: `#f4f2f0`, 12px radius, hairline border, title top-left, small arrow chip top-right.
7. Footer: `#1a1919`, 128px vertical padding, 14px `#ffffff99` links.
8. Check that there is no bold, no shadow on cards, and only one solar element per view.

### Common Mistakes When Recreating Ramp
- Using a lime or chartreuse picked by eye instead of the exact `#e4f222`; third-party style sites list a different value.
- Setting the hero headline centered: Ramp's hero is left-aligned.
- Making the warm-gray panels cool gray (`#f5f5f5`-style); the warmth of `#f4f2f0` matters.
- Giving the footer pure black `#000000`; it is `#1a1919`.
