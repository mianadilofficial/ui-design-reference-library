---
version: alpha
name: Mercury
category: "Banking & Insurance"
description: "Mercury's marketing site is a dark, cinematic business-banking page: an indigo-black canvas (#171721) carrying soft lavender-white ink (#ededf3), one electric indigo action color (#5266eb) on 32px-radius pill buttons, and frosted translucent secondary pills. Type is the custom Arcadia family served as arcadia (UI/body) and arcadiaDisplay (headlines) at unusual variable weights 360, 420 and 480, with slightly positive tracking (0.42px at 28-42px). Cards are #1e1e2a panels with 12px corners and 32px padding; the pricing page flips to a near-white #fbfcfd canvas with #272735 ink."

colors:
  primary: "#5266eb"
  primary-hover: "#4354c8"
  primary-active: "#3442a6"
  on-primary: "#ffffff"
  canvas: "#171721"
  surface-card: "#1e1e2a"
  surface-raised: "#272735"
  ink: "#ededf3"
  ink-subdued: "#c3c3cc"
  ink-emphasized: "#f4f5f9"
  canvas-light: "#fbfcfd"
  background-secondary: "#f4f5f9"
  surface-default: "#ededf3"
  ink-light: "#272735"
  ink-light-subdued: "#535461"
  ink-light-emphasized: "#1e1e2a"
  ink-disabled: "#70707d"
  banner-canvas: "#fcfcfa"
  banner-ink: "#2a2924"
  frosted-fill: "#afb2ce33"
  frosted-fill-hover: "#afb2ce47"
  frosted-border: "#afb2ce5c"
  magic-fill: "#9cb4e833"
  magic-fill-hover: "#9cb4e847"
  periwinkle: "#9cb4e8"
  periwinkle-light: "#cdddff"
  emphasized-fill: "#5266eb1a"
  border-input: "#70739338"
  surface-frosted: "#7073931a"
  error: "#d03275"
  black: "#000000"

typography:
  display-stat:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 59.488px
    fontWeight: 480
    lineHeight: 65.4368px
  display-pricing:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 52.0128px
    fontWeight: 480
    lineHeight: 57.2141px
  display-hero:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 45.0784px
    fontWeight: 480
    lineHeight: 49.5862px
  heading-xl:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 42px
    fontWeight: 480
    lineHeight: 48.3px
    letterSpacing: 0.42px
  heading-lg:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 32px
    fontWeight: 480
    lineHeight: 36.8px
    letterSpacing: 0.48px
  heading-md:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 28px
    fontWeight: 480
    lineHeight: 33.6px
    letterSpacing: 0.42px
  quote:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 28px
    fontWeight: 360
    lineHeight: 33.6px
    letterSpacing: 0.42px
  heading-sm:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 24px
    fontWeight: 480
    lineHeight: 28.8px
    letterSpacing: 0.48px
  heading-xs:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 21.008px
    fontWeight: 480
    lineHeight: 25.2096px
    letterSpacing: 0.42016px
  lead:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 21.008px
    fontWeight: 360
    lineHeight: 28.3608px
  body-lg:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 18px
    fontWeight: 360
    lineHeight: 24.3px
  body-lg-strong:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 18px
    fontWeight: 480
    lineHeight: 24.3px
  body:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body-strong:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 16px
    fontWeight: 480
    lineHeight: 21.6px
  button:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 16px
    fontWeight: 420
    lineHeight: 16px
  button-sm:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 14px
    fontWeight: 420
    lineHeight: 14px
    letterSpacing: 0.07px
  fine-print:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: 0.24px
  mobile-h1:
    fontFamily: "arcadiaDisplay, \"arcadiaDisplay Fallback\""
    fontSize: 28px
    fontWeight: 480
    lineHeight: 30.8px
  mobile-fine-print:
    fontFamily: "arcadia, \"arcadia Fallback\""
    fontSize: 10px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 0.3px

rounded:
  xs: 4px
  sm: 8px
  card: 12px
  button: 32px
  ghost: 40px
  pill: 9999px

spacing:
  s4: 4px
  s8: 8px
  s12: 12px
  s16: 16px
  s20: 20px
  s24: 24px
  s32: 32px
  s40: 40px
  s56: 56px
  s72: 72px
  s80: 80px
  s112: 112px
  s128: 128px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 20px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.button}"
  button-frosted:
    backgroundColor: "{colors.frosted-fill}"
    textColor: "{colors.ink}"
    borderColor: "{colors.frosted-border}"
    typography: "{typography.button}"
    rounded: "{rounded.ghost}"
    padding: 0px 20px
    height: 40px
  button-frosted-hover:
    backgroundColor: "{colors.frosted-fill-hover}"
    textColor: "{colors.ink}"
  button-magic:
    backgroundColor: "{colors.magic-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.ghost}"
    padding: 0px 20px
    height: 40px
  button-tinted-light:
    backgroundColor: "{colors.emphasized-fill}"
    textColor: "{colors.ink-light}"
    typography: "{typography.button}"
    rounded: "{rounded.ghost}"
    padding: 0px 20px
    height: 40px
  button-tinted-light-sm:
    backgroundColor: "{colors.emphasized-fill}"
    textColor: "{colors.ink-light}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.ghost}"
    padding: 0px 16px
    height: 32px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 16px 32px
    height: 72px
  nav-link-hover:
    backgroundColor: "{colors.magic-fill-hover}"
    textColor: "{colors.ink}"
    rounded: "{rounded.ghost}"
    height: 40px
  email-input:
    backgroundColor: "{colors.frosted-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: 32px 0px 0px 32px
    padding: 0px 0px 0px 20px
    height: 46px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-md}"
    rounded: "{rounded.card}"
    padding: 32px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    textDecoration: underline
  link-hover:
    textColor: "{colors.ink-subdued}"
  announcement-bar:
    backgroundColor: "{colors.banner-canvas}"
    textColor: "{colors.banner-ink}"
    typography: "{typography.body-lg}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Mercury's homepage (measured at https://mercury.com/ on a 1280px viewport) is a night-time page. Everything sits on an indigo-black canvas, `{colors.canvas}` `#171721`, and the text is a cool lavender-white, `{colors.ink}` `#ededf3`, not pure white. The hero is a full-bleed painted landscape at dawn: a valley in fog, a winding river, and a desk with a laptop and an office chair standing in a meadow. The headline "Radically different banking" is centered over it in `{typography.display-hero}`. Under the headline sits a one-line email field fused to an indigo "Open account" pill and a frosted "Launch demo" pill.

The sticky navigation bar is at the bottom edge of the hero. It is a 72px dark strip with a centered row of menu triggers (Products, Solutions, Resources, About, Pricing) and, on the right, "Log in" plus a second indigo "Open account" pill. A translucent disclaimer capsule ("Mercury is a fintech company, not an FDIC-insured bank…") floats above the bottom of the hero in 12px type.

Below the hero the page stays dark for its whole length. The product sections pair a short display headline ("Everything you do with money. All in one place.") with an accordion list on the left and a dimmed screenshot of the Mercury dashboard on the right, rendered as a dark panel. A logo strip of customer companies (Supabase, Linear, Lovable, Partiful, ElevenLabs, Phantom) runs under a centered `{typography.heading-xl}` claim ("Loved by 300K+ of the most ambitious entrepreneurs on the planet"). Testimonial video cards and news cards (`{colors.surface-card}` `#1e1e2a`) follow.

The color system has a single accent. **Indigo** `{colors.primary}` `#5266eb` (the site's own token `--surface-primary`) is used only on filled "Open account" pills, the focus border, and primary icons. Every other interactive surface is a translucent wash: frosted gray-lavender `#afb2ce33` for secondary pills, periwinkle `#9cb4e833` for "Contact sales" and "Explore demo", and `#9cb4e847` as the nav-hover lozenge.

**Key Characteristics:**
- Dark-first canvas `#171721`, ink `#ededf3` (the most-read text color on the page, 6,602 weighted characters), and a subdued second ink `#c3c3cc`.
- One saturated accent, indigo `#5266eb`, always as a 32px-radius pill 40px tall with `0px 20px` padding.
- Custom Arcadia type at variable weights 360 / 400 / 420 / 480. No 500 or 600 on the homepage: 480 does the work of "semibold".
- Headlines carry slightly positive tracking: 0.42px at 28px and 42px, 0.48px at 24px and 32px. This is the opposite of the usual tight-tracked display style.
- Generous vertical rhythm: 32px grid gutters, 72px / 112px / 128px layout padding.
- Translucent "frosted" pills instead of outlined buttons.
- Photographic, painterly hero art; the product UI is shown dimmed and low-contrast, never as a bright screenshot.

## Colors

> Source: computed styles and `:root` custom properties measured on https://mercury.com/ and https://mercury.com/pricing. Token names in parentheses are Mercury's own CSS variable names.

### Brand & Accent
- **Indigo** (`{colors.primary}` `#5266eb`, `--surface-primary`, `--color-purple-magic-600`): Fill of every primary CTA, `--border-focus`, `--icon-primary`, `--text-primary`.
- **Indigo Hover** (`{colors.primary-hover}` `#4354c8`, `--surface-primary-hover`): Measured as the hovered background of the nav "Open account" button.
- **Indigo Active** (`{colors.primary-active}` `#3442a6`, `--surface-primary-active`): Pressed state.
- **Periwinkle** (`{colors.periwinkle}` `#9cb4e8`, `--color-purple-magic-400`): Base of the "magic" translucent fills.
- **Periwinkle Light** (`{colors.periwinkle-light}` `#cdddff`, `--color-purple-magic-200`): Decorative light accent; appears as a tiny painted area on the homepage.
- **Error** (`{colors.error}` `#d03275`, `--text-error` / `--icon-error`).

### Surface (dark)
- **Canvas** (`{colors.canvas}` `#171721`, `--color-neutral-base-950`): The page background, 11,046 weighted px² on the homepage.
- **Card** (`{colors.surface-card}` `#1e1e2a`, `--surface-inverted`, `--color-neutral-base-900`): News and testimonial cards.
- **Raised** (`{colors.surface-raised}` `#272735`, `--color-neutral-base-800`): The full-screen mobile menu panel.
- **Frosted fill** (`{colors.frosted-fill}` `#afb2ce33`) with **frosted border** (`{colors.frosted-border}` `#afb2ce5c`): The "Launch demo" pill and the email field shell. On hover the fill rises to `{colors.frosted-fill-hover}` `#afb2ce47`.
- **Magic fill** (`{colors.magic-fill}` `#9cb4e833`): The "Contact sales" and "Explore demo" pills. On hover, nav triggers take `{colors.magic-fill-hover}` `#9cb4e847`.
- **Surface frosted** (`{colors.surface-frosted}` `#7073931a`, `--surface-frosted`).

### Surface (light, pricing page)
- **Canvas light** (`{colors.canvas-light}` `#fbfcfd`, `--background-default`): The canvas measured on /pricing.
- **Background secondary** (`{colors.background-secondary}` `#f4f5f9`).
- **Surface default** (`{colors.surface-default}` `#ededf3`, `--surface-default`).
- **Emphasized fill** (`{colors.emphasized-fill}` `#5266eb1a`, `--surface-emphasized`): The tinted secondary "Open account" and "Expand all" buttons on /pricing.
- **Border input** (`{colors.border-input}` `#70739338`, `--border-input`).
- **Announcement bar** (`{colors.banner-canvas}` `#fcfcfa`, `--color-beige-base-50`) with text `{colors.banner-ink}` `#2a2924`: The cream strip "Introducing Mercury Books…" above the hero.

### Text
- **Ink** (`{colors.ink}` `#ededf3`, `--text-default-inverted`): Headlines and primary copy on dark.
- **Ink subdued** (`{colors.ink-subdued}` `#c3c3cc`, `--text-subdued-inverted`): Body paragraphs inside accordions, testimonial quotes, footer links, and link hover.
- **Ink emphasized** (`{colors.ink-emphasized}` `#f4f5f9`, `--text-emphasized-inverted`): Newsletter fine print.
- **Ink light** (`{colors.ink-light}` `#272735`, `--text-default`): Default text on the light pricing page.
- **Ink light subdued** (`{colors.ink-light-subdued}` `#535461`, `--text-subdued`): The most-read text color on /pricing (7,370 characters); hover color for links on light.
- **Ink light emphasized** (`{colors.ink-light-emphasized}` `#1e1e2a`, `--text-emphasized`).
- **Disabled** (`{colors.ink-disabled}` `#70707d`, `--text-disabled`).

## Typography

### Font Family

Mercury serves two custom families via `@font-face`:
- `arcadia` (variable, loaded weight range 360–500): UI, body, buttons, footnotes.
- `arcadiaDisplay` (variable, loaded weight range 320–480): headlines and large numerals.

The stylesheet also declares `tiemposHeadline` and `IBM Plex Mono` faces (with `--font-tiempos*` and `--font-ibm-plex-mono` variables), but no rendered text on the homepage or the pricing page used them.

### Hierarchy (measured)

| Token | Family | Size | Weight | Line height | Tracking | Where |
|---|---|---|---|---|---|---|
| `display-stat` | arcadiaDisplay | 59.488px | 480 | 65.4368px | — | "300K" stat |
| `display-pricing` | arcadiaDisplay | 52.0128px | 480 | 57.2141px | — | /pricing h1 |
| `display-hero` | arcadiaDisplay | 45.0784px | 480 | 49.5862px | — | homepage h1 |
| `heading-xl` | arcadiaDisplay | 42px | 480 | 48.3px | 0.42px | section h2 |
| `heading-lg` | arcadiaDisplay | 32px | 480 | 36.8px | 0.48px | testimonial headline |
| `heading-md` | arcadiaDisplay | 28px | 480 | 33.6px | 0.42px | news card titles |
| `quote` | arcadiaDisplay | 28px | 360 | 33.6px | 0.42px | pull quotes, `#c3c3cc` |
| `heading-sm` | arcadiaDisplay | 24px | 480 | 28.8px | 0.48px | "Everything you do with money." |
| `heading-xs` | arcadiaDisplay | 21.008px | 480 | 25.2096px | 0.42016px | small display lines |
| `lead` | arcadia | 21.008px | 360 | 28.3608px | — | hero subhead |
| `body-lg` | arcadia | 18px | 360 | 24.3px | — | feature copy |
| `body-lg-strong` | arcadia | 18px | 480 | 24.3px | — | feature titles |
| `body` | arcadia | 16px | 400 | 22.4px | — | accordion copy, footer |
| `body-strong` | arcadia | 16px | 480 | 21.6px | — | accordion headings |
| `button` | arcadia | 16px | 420 | 16px | — | all pills, nav |
| `button-sm` | arcadia | 14px | 420 | 14px | 0.07px | "Expand all" |
| `fine-print` | arcadia | 12px | 400 | 16.8px | 0.24px | disclaimers (the most-set size by characters) |
| `mobile-h1` | arcadiaDisplay | 28px | 480 | 30.8px | — | h1 at 390px |
| `mobile-fine-print` | arcadia | 10px | 400 | 14px | 0.3px | disclaimers at 390px |

The odd fractional sizes (45.0784px, 52.0128px, 21.008px) come from fluid `clamp()`-style scaling at the 1280px viewport. Mercury's own size scale in CSS variables is `--text-xxs .625rem`, `--text-xs .75rem`, `--text-sm .875rem`, `--text-base 1rem`, `--text-md 1.125rem`, `--text-lg 1.313rem`, `--text-xl 1.5rem`, `--text-2xl 1.75rem`, `--text-3xl 2rem`, `--text-4xl 2.25rem`, `--text-5xl 2.625rem`, `--text-6xl 3rem`, `--text-7xl 3.438rem`.

### Principles
- Weight steps are small and non-standard: 360 for reading copy, 400 for neutral UI, 420 for buttons, 480 for anything that should read as a heading. Avoid 600/700 except for `<strong>` inside disclaimers (12px/700 was measured there).
- Display sizes use positive tracking in the 1–2% band. Mercury's own tracking variables are `--tracking-0.5% .005em`, `--tracking-1% .01em`, `--tracking-1.5% .015em`, `--tracking-2% .02em`, `--tracking-3% .03em`.
- Line heights are tight on display (105–115%: `--leading-105%`, `--leading-110%`, `--leading-115%`) and 135–140% on reading text (`--leading-135%`, `--leading-140%`).
- Button text sits on a 16px line inside a 40px pill, so vertical centering comes from the fixed height, not from padding.

### Note on Font Substitutes
Arcadia and Arcadia Display are served from Mercury's own domain. No public retail listing or Mercury statement naming their designer or foundry was found (see SOURCES.json searches), so treat them as proprietary. Do not claim a specific substitute is "the" Arcadia. When the real font is not available, use a neutral grotesque with a variable weight axis so the 360/420/480 steps can still be expressed, and keep the measured sizes, line heights and tracking unchanged. The served fallback stack is only the generated metric-matched `"arcadia Fallback"` / `"arcadiaDisplay Fallback"`.

## Layout

### Spacing System
Mercury's CSS exposes named spacing tokens. The values measured in use:
- Element gaps: `--gap-xs 12px`, `--gap-sm 24px`, `--gap-md 32px`, `--gap-lg 32px`, `--gap-xl 40px`, `--gap-2xl 72px`, `--gap-3xl 112px`.
- Stack gaps: `--stack-gap-sm 12px`, `--stack-gap-md 24px`, `--stack-gap-lg 40px`.
- Column gaps: `--column-gap-sm 12px`, `--column-gap-md 24px`, `--column-gap-lg 32px`, `--column-gap-logomash 56px` (the customer logo strip).
- Layout padding: `--layout-padding-sm 40px`, `--layout-padding-md 72px`, `--layout-padding-lg 112px`, `--layout-padding-xl 128px`.
- Most frequent measured gaps: 32px (52), 12px (28), 40px (24), 4px (18). Most frequent paddings: 32px (55), 12px (19), 20px (14), 72px (8).

### Grid & Container
- `--grid-gutters 32px`, `--grid-margins 32px`, `--grid-max-width 1952px`.
- The nav bar uses `16px 32px` padding at 72px total height.
- Content blocks such as the h1 and h2 measure 592px wide inside the 1280px viewport. Copy columns stay narrow and centered while imagery spans full width.

### Whitespace Philosophy
Sections are separated by large dark voids. A product block may be followed by 100+ px of empty canvas before the next headline. The darkness itself is the separator: there are no rules or dividers between sections, only thin `#c3c3cc`-family hairlines between accordion rows.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat `#171721` | page canvas |
| 1 | `#1e1e2a` fill, no shadow | cards, dashboard mockup panel |
| 2 | translucent fill `#afb2ce33` + 1px `#afb2ce5c` border | frosted pills, email field shell |
| 3 | layered shadow `rgba(0,0,0,0.05) 0 0 3px, rgba(0,0,0,0.05) 0 8px 12px, rgba(0,0,0,0.05) 0 12px 20px` | the one shadowed element measured on the homepage |
| light | `rgba(28,28,35,0.02) 0 10px 16px, rgba(28,28,35,0.04) 0 6px 10px, rgba(28,28,35,0.09) 0 0 3px` | elevated cards on /pricing |

Depth on dark is made with lighter fills and translucency, not shadows. On the light pricing page, shadows are almost invisible (2–9% alpha) and stacked in three layers.

### Decorative Depth
The hero illustration is the main depth device: painterly, misty, photographic landscapes with soft focus at the horizon. Product UI mockups are shown dimmed and partially masked into the canvas, so they read as atmosphere rather than as a feature screenshot.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | inline links and nav focus areas (the most frequent radius, 106 elements) |
| `{rounded.sm}` | 8px | small chips |
| `{rounded.card}` | 12px | news / testimonial cards |
| `{rounded.button}` | 32px | primary "Open account" pill (40px tall, so fully round) |
| `{rounded.ghost}` | 40px | frosted and magic pills, nav hover lozenges |
| `{rounded.pill}` | 9999px | fully round elements (measured as 3.35544e+07px, i.e. a "max" radius) |

Mercury's own radius tokens: `--radius-sm .25rem`, `--radius-md .375rem`, `--radius-lg .5rem`, `--radius-xl .75rem`, `--radius-2xl 1rem`, `--radius-3xl 1.5rem`, `--radius-4xl 2rem`, `--radius-5xl 2.5rem`.

### Photography Geometry
Testimonial video cards are large rounded rectangles with the person framed at mid-chest. A small dark tag ("SaaS") sits in the top-left corner on a 4px-radius dark chip.

## Components

### Buttons
- **Primary** (`button-primary`): `#5266eb` fill, `#ffffff` text, `{typography.button}` (16px / 420 / 16px), radius 32px, padding `0px 20px`, height 40px. Hover changes the fill to `#4354c8`; there is no shadow, underline or scale change.
- **Frosted** (`button-frosted`): "Launch demo". `#afb2ce33` fill, 1px `#afb2ce5c` border, `#ededf3` text, radius 40px, 40px tall. Hover raises the fill to `#afb2ce47`.
- **Magic** (`button-magic`): "Contact sales", "Explore demo". `#9cb4e833` fill, no border, `#ededf3` text, radius 40px.
- **Tinted (light pages)** (`button-tinted-light`): on /pricing, `#5266eb1a` fill with `#272735` text, radius 40px, 40px tall. Small variant (`button-tinted-light-sm`): 14px/420, `0px 16px` padding, 32px tall ("Expand all").

### Cards & Containers
- **News card** (`card`): `#1e1e2a`, radius 12px, padding 32px, 280px wide × 421px tall in a row of three. The title is set in `{typography.heading-md}`.
- **Dashboard mockup**: a dark panel of the same family as the cards, with an "Accounts" list (Credit Card, Treasury, Ops / Payroll, AP, AR), right-aligned balances with superscript cents, and a footer row "3 auto transfer rules affect your accounts · View".

### Inputs & Forms
- **Hero email field** (`email-input`): placeholder "Enter your email". The input is 46px tall with radius `32px 0px 0px 32px` and `0px 0px 0px 20px` padding. It sits flush against the "Open account" pill, so field and button read as one capsule inside the frosted shell. Text is 16px / 420 in `#ededf3`.
- Mercury's input tokens: `--surface-input #fbfcfd`, `--surface-input-hover #fff`, `--surface-input-disabled #ededf3`, `--border-input #70739338`, `--border-focus #5266eb`, `--border-error #d0327538`.

### Navigation
- **Desktop** (`nav`): 72px tall, `16px 32px` padding, logo mark plus the "MERCURY" letterspaced wordmark on the left, centered menu triggers with chevrons, and "Log in" + primary pill on the right. Each trigger is a 40px-tall, 40px-radius lozenge that takes a `#9cb4e847` fill on hover.
- **Mobile**: the nav opens as a full-height `#272735` sheet with 72px top padding.

### Links
- Inline links are underlined `#ededf3` and fade to `#c3c3cc` on hover. On light pages they go from `#272735` to `#535461`.
- Text links like "Launch demo" under accordions are 16px, underlined, with no arrow.

### Pills, Tags, and Chips
- Category tags on video cards ("SaaS") are small dark rectangles with 16px/420 text.

### Signature Components
- **Announcement bar**: a cream `#fcfcfa` strip above everything, with `#2a2924` 18px/360 text, a small leaf glyph and a trailing "→".
- **Disclaimer capsule**: a translucent dark rounded bar overlaid at the bottom of the hero, carrying 12px/400/0.24px fine print. It is the only place the regulatory voice appears above the fold.
- **Accordion feature list**: a short display heading, then rows separated by 1px hairlines. The active row shows a bullet dot, a 16px/480 title and `#c3c3cc` 16px/400 description; inactive rows show only the title.

## Design System Architecture

Mercury does not publish a public design system, component library, token package or brand portal. Searches for a Mercury design system site, press/brand kit, Arcadia foundry credit and an npm token package found no official source (queries listed in `SOURCES.json`; `mercury.com/brand`, `/press`, `/press-kit` and `/design` return 404). Job listings mention an internal "Design Systems" team, but they do not document it. Everything below is the **de-facto system** read from the live site's CSS custom properties on https://mercury.com/ and https://mercury.com/pricing.

- **Token architecture: two tiers.**
  - *Primitive* ramps are named `--color-{hue}-{base|magic}-{step}`, with `-alpha-{1..5}` suffixes for translucent variants. Examples: `--color-neutral-base-950 #171721`, `--color-purple-magic-600 #5266eb`, `--color-purple-magic-400-alpha-3 #9cb4e833`, `--color-neutral-magic-400-alpha-5 #afb2ce5c`. "base" ramps are muted neutrals and tints; "magic" ramps are the saturated accent family. Hues include neutral, purple, blue, green, orange, red and beige, plus `--color-avatar-*`.
  - *Semantic* tokens are grouped by role: `--surface-*` (`--surface-primary`, `--surface-primary-hover`, `--surface-primary-active`, `--surface-primary-disabled`, `--surface-elevated`, `--surface-frosted`, `--surface-emphasized`, `--surface-input*`), `--text-*` (`--text-default`, `--text-subdued`, `--text-emphasized`, `--text-disabled`, `--text-error`, `--text-on-primary`), `--border-*` (`--border-focus`, `--border-input`, `--border-subdued`, `--border-error`) and `--icon-*`. Each has an `-inverted` twin for dark surfaces, for example `--text-default-inverted #ededf3`.
- **Theming.** There is no runtime theme switcher on the marketing site. Light and dark are expressed by choosing the regular or the `-inverted` semantic token per section: the homepage is dark (inverted tokens), the pricing page is light. Interaction states are explicit tokens (`-hover`, `-active`, `-disabled`), not computed tints.
- **Type & spacing.** Font sizes are rem tokens `--text-xxs` … `--text-7xl` (0.625rem–3.438rem) with fluid scaling at desktop. Weights are named by number (`--font-weight-360`, `--font-weight-420`, `--font-weight-480`, plus `--font-weight-medium 530`). Spacing is a 4px-based set (`--s4 4px`, `--s8 8px`, `--s12 12px`, `--s16 16px`, `--s20 20px`, `--s7 64px`, `--s9 80px`, `--s11 144px`) with layout aliases (`--gap-*`, `--stack-gap-*`, `--column-gap-*`, `--layout-padding-*`).
- **Component model.** The CSS shows a Tailwind CSS v4 base (`--tw-*` variables, `--default-transition-timing-function cubic-bezier(.4,0,.2,1)`) with custom easing tokens (`--ease-in-out-cubic cubic-bezier(.65,.05,.36,1)`). The observed button family is primary / frosted / magic / tinted, with a 40px default height and a 32px small height. No public component inventory exists.
- **Accessibility.** No published rules. Observed: a dedicated `--border-focus #5266eb` token. Primary pills are 40px tall, below the 44px touch-target guideline. Reading text on dark is `#c3c3cc` or `#ededf3` on `#171721`.
- **Delivery.** No npm package, Figma community kit or versioned release was found. Fonts are self-hosted with generated metric-matched fallback faces (`"arcadia Fallback"`), the pattern used by Next.js `next/font`.

## Do's and Don'ts

### Do
- Use `#171721` as the page canvas and `#ededf3` for primary text; drop to `#c3c3cc` for paragraph copy.
- Put exactly one `#5266eb` filled pill in each viewport-height band; make every other action frosted (`#afb2ce33`) or magic (`#9cb4e833`).
- Keep buttons 40px tall with 16px/420 text and 20px side padding.
- Set headlines in arcadiaDisplay at weight 480 with 0.42–0.48px positive tracking.
- Use 360 weight for long reading copy at 18px and 21.008px.
- Separate sections with large dark space (72–128px), not with dividers.
- Show product UI as dim, low-contrast dark panels blended into the canvas.
- On light pages, switch to `#fbfcfd` canvas and `#272735` / `#535461` text, and turn secondary buttons into `#5266eb1a` tinted pills.

### Don't
- Don't use pure white `#ffffff` for body text on dark; only button labels on indigo are white.
- Don't add drop shadows to dark cards; use the `#1e1e2a` fill step instead.
- Don't use bold 600/700 headlines or negative display tracking; that is not Mercury.
- Don't outline buttons with a solid stroke; the secondary style is a translucent fill.
- Don't introduce new accent hues for CTAs; green, orange and red exist in the token ramps but not as buttons on the marketing pages.
- Don't square off buttons; every action is a pill.
- Don't put bright, high-saturation product screenshots in the hero.

## Responsive Behavior

### Breakpoints
At 390px the measured changes are:
- h1 shrinks from 45.0784px to 28px (line height 30.8px).
- h2 drops from 42px to 28px (line height 33.6px, tracking still 0.42px).
- Disclaimer fine print shrinks from 12px to 10px with 0.3px tracking and a 14px line.
- The most-set mobile sizes by characters are 10px, 14px, 16px, 21.008px, 28px, 24px, 18px and 36px.

### Touch Targets
The primary pill stays 40px tall on mobile and stretches wider (167px on the homepage, 310px full-width on /pricing).

### Collapsing Strategy
- The desktop menu collapses into a full-screen `#272735` sheet that starts 72px below the top.
- The logo strip and news cards become horizontal scrollers or single columns.

### Image Behavior
The hero landscape stays full-bleed and crops toward its center, keeping the desk-in-the-meadow motif visible.

## Iteration Guide

1. Start from the canvas: `#171721` background, `#ededf3` text, arcadia 16px/400/22.4px body.
2. Add the hero: centered `display-hero` (45.0784px/480) headline, `lead` (21.008px/360) subhead, then the capsule of email input + indigo pill + frosted pill.
3. Build the nav: 72px tall, `16px 32px` padding, 40px pill triggers that take `#9cb4e847` on hover.
4. For each feature band, pair a `heading-sm` or `heading-xl` title with an accordion list (16px/480 titles, `#c3c3cc` 16px/400 copy) and a dim dashboard panel.
5. Cards: `#1e1e2a`, 12px radius, 32px padding, `heading-md` titles.
6. Footnotes: 12px/400/16.8px/0.24px in `#ededf3`, collected at the bottom of the page.
7. Check every action: only one indigo fill per band, all others translucent.
8. For a light page (pricing, docs), swap to `#fbfcfd` canvas, `#272735` text, `#5266eb1a` tinted secondary pills, and the three-layer 2–9% shadow on elevated cards.
9. Verify the weights: 360 / 400 / 420 / 480 only, with positive tracking on display sizes.
