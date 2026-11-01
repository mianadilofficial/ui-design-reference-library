---
version: alpha
name: Bolt
category: "Logistics & Mobility"
description: "Bolt (bolt.eu), the European ride-hailing, scooter and delivery super-app, ships a calm off-white (#f7f9f8) marketing canvas set in Inter (served as __Inter_205b87) at variable weights 550/650/750, a single green action color (#2b8659, hover #18784c), 40px-radius CTAs 48px tall, near-black (#0e1010) 40px-radius service cards and a near-black footer, with tinted-alpha greys (#000a07a0) for body copy."

colors:
  primary: "#2b8659"
  primary-hover: "#18784c"
  on-primary: "#ffffff"
  canvas: "#f7f9f8"
  ink: "#000a07a0"
  ink-strong: "#191f1c"
  surface-dark: "#0e1010"
  on-dark: "#eceeed"
  on-dark-muted: "#f3fffaa8"
  on-dark-accent: "#ddffe9"
  mint: "#ddffe9"
  green-band: "#207e52"
  green-12: "#081f14"
  link-green: "#007042eb"
  neutral-dark: "#2f313f"
  neutral-dark-hover: "#414a55"
  secondary-fill: "#01221211"
  secondary-fill-hover: "#001f1519"
  hairline: "#00140d28"
  action-primary-token: "#32bb78"
  action-active-token: "#1d965c"
  danger: "#eb4755"
  danger-strong: "#c91d2b"
  warning: "#f58300"
  promo: "#5b68f6"

typography:
  display-xl:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 72px
    fontWeight: 750
    lineHeight: 80px
    letterSpacing: -2.52px
  display-xl-mobile:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 750
    lineHeight: 54px
    letterSpacing: -1.44px
  display-lg:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 750
    lineHeight: 56px
    letterSpacing: -1.44px
  display-lg-mobile:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 36px
    fontWeight: 750
    lineHeight: 42px
    letterSpacing: -0.9px
  heading-sm:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 650
    lineHeight: 32px
    letterSpacing: -0.36px
  body-lg:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 550
    lineHeight: 28px
    letterSpacing: -0.198px
  body-lg-mobile:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 550
    lineHeight: 24px
    letterSpacing: -0.176px
  body-md:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 550
    lineHeight: 24px
  button-lg:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 18px
    fontWeight: 650
    lineHeight: 28px
    letterSpacing: -0.198px
  button-lg-mobile:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 650
    lineHeight: 24px
    letterSpacing: -0.176px
  button-sm:
    fontFamily: "__Inter_205b87, __Inter_Fallback_205b87, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px

rounded:
  xs: 3px
  sm: 4px
  lg: 24px
  xl: 32px
  cta: 40px
  pill: 9999px

spacing:
  xxs: 2px
  xs: 4px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  xxl: 32px
  xxxl: 40px
  huge: 48px
  content-width: 1200px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.cta}"
    padding: 0px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.secondary-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.cta}"
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.secondary-fill-hover}"
  button-mint:
    backgroundColor: "{colors.mint}"
    textColor: "{colors.surface-dark}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.cta}"
    padding: 0px 24px
    height: 48px
  button-nav-dark:
    backgroundColor: "{colors.neutral-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 32px
  button-nav-dark-hover:
    backgroundColor: "{colors.neutral-dark-hover}"
  card-service:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-md}"
    rounded: "{rounded.cta}"
    boxShadow: "rgba(200, 254, 227, 0.07) 0px 0px 0px 1px, rgba(200, 254, 227, 0.07) 0px 2px 4px 0px"
    height: 620px
    width: 389px
  nav:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body-md}"
    height: 60px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body-md}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-dark}"
    typography: "{typography.body-md}"
    padding: 0px 24px
---

## Overview

Bolt's marketing site (measured at https://bolt.eu/en/, page title "Explore Bolt services | The all-in-one mobility app | Bolt") is a quiet, high-contrast product showcase. The top of the page is an off-white canvas (`{colors.canvas}` #f7f9f8) holding a centred, very heavy Inter headline ("Riding is the new driving", 72px / 750), one short grey paragraph, and two 48px-tall buttons side by side: the green `button-primary` ("Get Bolt") and a translucent grey `button-secondary` ("Get Bolt Food").

Directly under the hero sits a full-bleed lifestyle photograph — a white ride-hailing car with a green accent stripe, two young riders, a bright harbour sky. The photography is natural daylight, unfiltered, people-first, with the vehicle as supporting cast.

The middle of the page is a horizontally scrolling carousel of tall service cards ("Groceries", "Business", "Micromobility", "Rides", "Delivery", "Car-sharing"). The measured cards are near-black (`{colors.surface-dark}` #0e1010) with a 40px radius and a whisper-thin green-tinted ring shadow. Some cards carry full-bleed photography with text laid over it; one ("Groceries") shows a light mint panel and an app screenshot.

Below the carousel the page flips to a full-bleed near-black band ("Meet Bolt 7", the scooter launch) and ends in a near-black footer. The rhythm is therefore light → photo → light carousel → dark band → dark footer.

The brand's entire personality is carried by three things: the single green, the extremely heavy and tightly tracked Inter display type, and generous 40px rounding on both buttons and cards. There is no gradient mesh, no illustration system on the homepage, and no decorative texture.

Bolt's own brand guidelines (https://bolt.eu/en/press/guidelines/) state that "the green on vehicles or courier bags is the same green used across our apps and website", that "all Bolt products share this unified green palette", that "our dark green ensures enough contrast", and that the font was updated "from Euclid to Inter". The guidelines publish no hex values; every hex below is measured from the live site.

**Key Characteristics:**
- Off-white canvas `{colors.canvas}` #f7f9f8 (the site's own `--gray-2`), not pure white.
- One action color: `{colors.primary}` #2b8659 (`--green-9`), hover `{colors.primary-hover}` #18784c (`--green-10`).
- Inter served by Next.js font optimisation as `__Inter_205b87`, used at non-standard variable weights 465, 550, 600, 650, 750.
- Headlines are tracked tight: -2.52px at 72px, -1.44px at 48px, -0.36px at 24px.
- Body copy is not black: it is a tinted alpha grey `{colors.ink}` #000a07a0 (`--gray-a11`).
- CTAs are 48px tall with a 40px radius and 0px 24px padding; the small nav button is a true pill.
- Service cards: #0e1010, 40px radius, 620px tall at desktop.

## Colors

All colors were measured on https://bolt.eu/en/ (computed styles, hover states and the site's `:root` custom properties). Token names in parentheses are the site's own CSS variables.

### Brand & Accent
- **Primary green** `{colors.primary}` #2b8659 (`--green-9`) — fill of every primary CTA ("Get Bolt", "Register with Bolt Food", "Register as a courier", "Get started", "Go to Bolt Food").
- **Primary hover** `{colors.primary-hover}` #18784c (`--green-10`) — measured hover background of the same buttons.
- **On primary** `{colors.on-primary}` #ffffff — CTA label color.
- **Mint** `{colors.mint}` #ddffe9 — fill of the light secondary CTAs ("Go to Bolt for Business", "Go to Bolt Drive", "Learn more"); hovering them did not change the background. The same hex is also the second most-read text color on the page (`{colors.on-dark-accent}`).
- **Green band** `{colors.green-band}` #207e52 — the third-largest background area on the page (below the captured 2400px, so its content is not described here).
- **Deep green** `{colors.green-12}` #081f14 (`--green-12`) — a small measured background area.
- **Link green** `{colors.link-green}` #007042eb (`--green-a11`) — a measured text color.

### Semantic layer (declared in `:root`)
The site also declares a semantic color tier. These values are in the shipped CSS even where the homepage does not visibly use them:
- `--color-bg-action-primary` / `--color-border-action-primary` → `{colors.action-primary-token}` #32bb78.
- `--color-bg-active-action-primary` / `--color-content-link-primary` → `{colors.action-active-token}` #1d965c.
- `--color-bg-danger-primary` → `{colors.danger}` #eb4755; `--color-content-danger-primary` → `{colors.danger-strong}` #c91d2b.
- `--color-bg-warning-primary` → `{colors.warning}` #f58300.
- `--color-bg-promo-primary` → `{colors.promo}` #5b68f6.

Note the discrepancy: the semantic `--color-bg-action-primary` is #32bb78, but the marketing CTAs render #2b8659 (`--green-9`). The rendered value wins for marketing buttons.

### Surface
- **Canvas** `{colors.canvas}` #f7f9f8 (`--gray-2`) — the page background (largest measured background area).
- **Surface dark** `{colors.surface-dark}` #0e1010 — service cards, the "Meet Bolt 7" band and the footer (second-largest background area).
- **Secondary fill** `{colors.secondary-fill}` #01221211 (`--gray-a3`) — translucent fill of the "Get Bolt Food" button; hover `{colors.secondary-fill-hover}` #001f1519 (`--gray-a4`).
- **Neutral dark** `{colors.neutral-dark}` #2f313f — the "Register" nav pill; hover `{colors.neutral-dark-hover}` #414a55.
- **Hairline** `{colors.hairline}` #00140d28 (`--gray-a6`) — a measured border color.

### Text
- **Ink** `{colors.ink}` #000a07a0 (`--gray-a11`) — the most-read text color: hero and section paragraphs on the light canvas.
- **Ink strong** `{colors.ink-strong}` #191f1c (`--gray-12`) — h1, h2, nav links and links on light surfaces.
- **On dark** `{colors.on-dark}` #eceeed — card titles and footer text on #0e1010.
- **On dark muted** `{colors.on-dark-muted}` #f3fffaa8 — paragraphs on dark bands (the measured body-text role, "Bolt 7 is the next-generation scooter…").
- **On dark accent** `{colors.on-dark-accent}` #ddffe9 — second most-read text color.

### Color Principles
Neutrals are not neutral: the greys are all slightly green-shifted (#f7f9f8, #191f1c, #000a07a0, #0e1010) and many are expressed as alpha over the canvas. When reproducing, keep the alpha values; flattening them to opaque greys changes how they sit on photography.

## Typography

### Font Family
The site serves **Inter** through Next.js font optimisation, so the computed family is `__Inter_205b87` with the generated fallback `__Inter_Fallback_205b87`, then `system-ui, sans-serif`. The loaded face covers weights 100–900 (variable). Bolt's guidelines confirm Inter is the brand typeface: "Our typeface is Inter. As an open-source, Google-backed font that supports over 990 languages…" (https://bolt.eu/en/press/guidelines/). The CSS also ships `__Noto_Sans_Arabic_*`, `__Noto_Sans_Georgian_*` and `__Noto_Sans_Thai_*` faces for non-Latin locales.

Inter is the only family measured in body text (3619 of 3619 weighted characters).

### Hierarchy (measured, desktop 1280px)

| Token | Size | Weight | Line height | Letter spacing | Used for |
|---|---|---|---|---|---|
| `display-xl` | 72px | 750 | 80px | -2.52px | h1 "Riding is the new driving" |
| `display-lg` | 48px | 750 | 56px | -1.44px | h2 "Our services" |
| `heading-sm` | 24px | 650 | 32px | -0.36px | h3 card titles ("Rides") |
| `body-lg` | 18px | 550 | 28px | -0.198px | lead paragraphs (most-used size, 1982 chars) |
| `button-lg` | 18px | 650 | 28px | -0.198px | 48px CTAs |
| `body-md` | 16px | 550 | 24px | — | nav links, links, card body, footer |
| `button-sm` | 14px | 600 | 20px | — | "Register" nav pill |

A 30px size (letter spacing -0.6px) and a 12px size (letter spacing 0.12px) also appear in the frequency tables, and weight 465 is used for 575 characters, but the weight belonging to each of those sizes was not isolated by the extraction, so they are not declared as tokens.

### Mobile (390px)

| Token | Size | Weight | Line height | Letter spacing |
|---|---|---|---|---|
| `display-xl-mobile` | 48px | 750 | 54px | -1.44px |
| `display-lg-mobile` | 36px | 750 | 42px | -0.9px |
| `body-lg-mobile` | 16px | 550 | 24px | -0.176px |
| `button-lg-mobile` | 16px | 650 | 24px | -0.176px |

### Principles
- Tracking scales with size: roughly -3.5% at 72px, -3% at 48px, -1.5% at 24px, about -1.1% at 18px (values are the measured px above, not a formula to apply).
- Weights are variable-font intermediates (550, 650, 750). Do not round them to 500/600/700 — the heavier 750 headline is a large part of the look.
- Body text is medium (550), not regular. Regular 400 accounts for only 8 measured characters.
- Headlines are short, sentence case, centred in the hero.

### Note on Font Substitutes
Inter is open source (SIL OFL) and available from Google Fonts and rsms.me/inter; use "Inter Variable" or Inter from Google Fonts directly — no substitute is needed. Make sure the variable axis is loaded so 550/650/750 render as intermediates rather than snapping.

## Layout

### Spacing System
Measured gap frequencies: 16px (62), 8px (44), 12px (44), 24px (18), 4px (16), 2px (6), 32px (4), 48px (2), 40px (2). Measured padding frequencies: 12px (50), 24px (37), 16px (16), 6px (11), 8px (9), 4px (9), 40px (6), 32px (6). The spacing tokens are taken directly from these. The values are multiples of 4 with 2px and 6px used for fine adjustments.

The extraction also recorded fluid values (102.4px gaps, 89.6px and 153.6px paddings), which look like viewport-relative section spacing at the 1280px measurement width; they are not declared as tokens because the source rule was not captured.

### Grid & Container
The site declares `--layout-content-width: 1200px`. The hero copy is centred; the nav spans 1248px (16px inset each side at 1280px). The services carousel bleeds off both edges of the viewport, with cards 389px wide at desktop.

### Section Recipes (seen in the capture)
1. **Hero** — canvas background, centred h1, centred 2-line paragraph in `{colors.ink}`, centred button pair.
2. **Full-bleed photograph** — edge to edge, no radius.
3. **Section intro** — centred h2 plus centred paragraph.
4. **Card carousel** — tall rounded cards with prev/next arrow buttons below on the left.
5. **Dark product band** — #0e1010 full-bleed, centred heavy headline in a light color, centred muted paragraph.

### Whitespace Philosophy
Generous vertical air around a very small amount of copy. The hero holds a headline, two lines of text and two buttons in roughly 350 capture pixels. Density increases only inside cards.

### Voice & Microcopy
Short, plain, benefit-led: "Riding is the new driving", "The freedom to go anywhere without paying for parking, fuel, or maintenance.", "Get Bolt", "Learn more", "Go to Bolt for Business". Buttons are verb-first imperative, two to five words.

### Motion
The site declares easing tokens `--ease-default: cubic-bezier(0.16,1,0.3,1)`, `--ease-bounce: cubic-bezier(0.34,1.56,0.64,1)`, `--ease-in: cubic-bezier(0.4,0,1,1)`, `--ease-out: cubic-bezier(0,0,0.2,1)`. Durations were not measured. Hover on CTAs changes the fill color; the measured hover height changed from 48px to 49px on link CTAs, which suggests a small transform or border change on hover, but the property itself was not recorded.

## Elevation & Depth

Bolt is nearly flat. Measured shadows:

| Level | Value | Where |
|---|---|---|
| Card ring (dark) | `rgba(200, 254, 227, 0.07) 0px 0px 0px 1px, rgba(200, 254, 227, 0.07) 0px 2px 4px 0px` | #0e1010 service cards (5 uses) |
| Card ring (light) | `rgba(1, 34, 18, 0.067) 0px 0px 0px 1px, rgba(1, 34, 18, 0.067) 0px 2px 4px 0px` | one light card |
| Inset top hairline | `rgba(225, 254, 240, 0.13) 0px -1px 0px 0px inset` | one element |
| Inset green ring | `rgba(0, 124, 54, 0.565) 0px 0px 0px 1px inset` | one element |

Depth is produced by a 1px tinted ring plus a 2px/4px soft drop, always with a green-tinted color rather than black. On dark cards the ring is a light mint at 7% alpha.

### Decorative Depth
None measured. Depth on the page comes from photography and the light/dark section contrast, not from shadows or gradients.

## Shapes

### Border Radius Scale

| Token | Value | Measured on |
|---|---|---|
| `xs` | 3px | 2 elements |
| `sm` | 4px | 2 elements |
| `lg` | 24px | 12 elements |
| `xl` | 32px | 21 elements |
| `cta` | 40px | 39 elements — all 48px CTAs and the service cards |
| `pill` | 9999px | 6 elements — the "Register" nav button |

40px is the signature radius: on a 48px-tall button it reads almost as a pill, and on a 620px card it gives soft, app-like corners.

### Photography Geometry
The hero photograph is full-bleed with square corners. Photography inside cards is clipped by the card's 40px radius.

### Clip paths / transforms
No clip-path, skew or notch was measured. The header carries an identity transform (`matrix(1, 0, 0, 1, 0, 0)`), which indicates it is positioned or animated with transforms but has no visible distortion.

## Components

### Buttons

**`button-primary`** — "Get Bolt".
- Background `{colors.primary}` #2b8659, text `{colors.on-primary}` #ffffff, `{typography.button-lg}` (18px / 650 / 28px, -0.198px).
- Padding 0px 24px, height 48px, radius `{rounded.cta}` 40px. No border, no shadow.
- Hover (`button-primary-hover`): background `{colors.primary-hover}` #18784c. Text unchanged.
- Mobile: same geometry, type 16px / 650 / 24px (`button-lg-mobile`), full width (342px measured).

**`button-secondary`** — "Get Bolt Food" next to the primary in the hero.
- Background `{colors.secondary-fill}` #01221211 (translucent green-black), text `{colors.ink}` #000a07a0, height 48px, radius 40px.
- Hover (`button-secondary-hover`): background `{colors.secondary-fill-hover}` #001f1519.
- Padding was not captured for this button; it sits beside the primary with the same visual height.

**`button-mint`** — "Go to Bolt for Business", "Go to Bolt Drive", "Learn more".
- Background `{colors.mint}` #ddffe9, text `{colors.surface-dark}` #0e1010, type `{typography.button-lg}`, padding 0px 24px, height 48px, radius 40px.
- Hover: background unchanged (measured).
- Used on top of photography and dark cards.

**`button-nav-dark`** — "Register" in the header.
- Background `{colors.neutral-dark}` #2f313f, text #ffffff, `{typography.button-sm}` 14px / 600 / 20px, padding 0px 16px, height 32px, radius `{rounded.pill}`.
- Hover (`button-nav-dark-hover`): background `{colors.neutral-dark-hover}` #414a55.

The capture also shows a dark "Go to Bolt Market" button inside the light Groceries card, and small square arrow buttons for the carousel; neither was measured, so they are not tokenised.

### Cards & Containers

**`card-service`** — carousel cards ("Rides", "Delivery", "Car-sharing").
- Background `{colors.surface-dark}` #0e1010, text `{colors.on-dark}` #eceeed, radius 40px, padding 0px (content is inset by inner elements), 620px × 389px at desktop.
- Shadow: the dark card ring listed under Elevation.
- Title `{typography.heading-sm}` 24px / 650 at the top-left, one-line description, then a CTA, with photography filling the rest of the card.

### Inputs & Forms
No input was present on the measured homepage, so no text-input component is declared.

### Navigation

**`nav`** — a transparent header, 60px tall, 1248px wide at desktop.
- Left: Bolt wordmark. Right: language selector ("EN" with a small blue globe badge), "Support" link, the `button-nav-dark` "Register" pill, and a hamburger icon.
- Links: `{colors.ink-strong}` #191f1c, `{typography.body-md}` 16px / 550 / 24px.
- The same 60px header is used on mobile.

### Links
**`link`** — #191f1c, 16px / 550 / 24px, no underline in the measured state. The site's semantic tier declares `--color-content-link-primary: #1d965c` and `--color-content-link-secondary: #32bb78` for in-product links.

### Footer
**`footer`** — background `{colors.surface-dark}` #0e1010, text `{colors.on-dark}` #eceeed, `{typography.body-md}`, padding 0px 24px, 988px tall. Columns: Products, Earn, Company, Support, Safety, Locations, City solutions, plus app-store badges and a legal row (© Bolt Technology OÜ).

## Design System Architecture

Bolt publishes **no public design system**, component library, token package or Figma kit. Searches run: "Bolt.eu brand guidelines logo colors press kit", "Bolt design system Kalev typography Bolt Font", "Bolt Technology design system engineering blog tokens components", "\"Bolt\" mobility design team \"design system\" medium.com/bolt-labs". Results for "Bolt design system" are dominated by the unrelated product bolt.new. The only official brand source found is the press Brand Guidelines page (https://bolt.eu/en/press/guidelines/), which covers the unified green palette, the dark green for contrast, the Inter typeface (replacing Euclid) and trademark rules — with no numeric tokens.

What follows is the **de-facto system measurable on the site** (from the shipped `:root` custom properties on https://bolt.eu/en/), not documentation:

- **Token tiers.** Two tiers are visible in `:root` (400 custom properties):
  1. *Primitive scales* named `--{hue}-{1..12}` with alpha twins `--{hue}-a{1..12}` plus `--{hue}-contrast`, `--{hue}-surface`, `--{hue}-indicator`, `--{hue}-track`. Hues present include gray, green, mint, iris, ruby, red, orange, amber, yellow, lime, sand, blue, purple, plus `--white-a*` and `--black-a*`. Verbatim examples: `--gray-2: #f7f9f8`, `--gray-12: #191f1c`, `--gray-a11: #000a07a0`, `--green-9: #2b8659`, `--green-10: #18784c`, `--green-surface: #f3faf5cc`. The 1–12 step numbering matches the 12-step scale documented by Radix Colors (https://www.radix-ui.com/colors/docs/palette-composition/understanding-the-scale); the CSS corpus also contains variables such as `--base-card-classic-box-shadow-outer` and `--kbd-box-shadow`. Whether Bolt uses Radix code is not stated by any Bolt source, so it is not claimed here.
  2. *Semantic tokens* named `--color-{role}-{intent}-{rank}`: roles `bg`, `border`, `content`, `layer`, `special`, `static`; intents `action`, `neutral`, `positive`, `danger`, `warning`, `promo`; ranks `primary`, `secondary`, `secondary-hard`; plus `active-` prefixed pressed states. Verbatim: `--color-bg-action-primary: #32bb78`, `--color-bg-active-action-primary: #1d965c`, `--color-content-primary: #2f313f`, `--color-content-secondary: rgba(18,29,43,.6)`, `--color-border-separator: rgba(6,26,55,.08)`, `--color-layer-floor-0: #fff`, `--color-special-scrim: rgba(0,0,0,.28)`, `--color-static-content-primary-light: #fafafb`.
- **Theming.** The `static-*` tokens come in `-light` / `-dark` pairs (`--color-static-bg-neutral-primary-dark`, `--color-static-content-primary-light`), i.e. colors that stay fixed regardless of theme. No dark-mode switch was observed on the marketing site; dark sections are simply #0e1010 blocks.
- **Type & spacing.** One family (Inter, variable), sizes measured 72/48/30/24/18/16/14/12px desktop and 48/36/24/20/16/14/12px mobile. Spacing is 4px-based with 2px/6px micro steps. Layout width token: `--layout-content-width: 1200px`.
- **Motion.** Named easing tokens `--ease-default`, `--ease-bounce`, `--ease-in`, `--ease-out` (values under Layout → Motion).
- **Component model.** Measurable components on the homepage: primary/secondary/mint CTAs (48px, 40px radius), the dark nav pill (32px), tall service cards, header, footer. No documented anatomy, variants or states are public.
- **Accessibility.** The guidelines state the dark green is chosen to "ensure enough contrast for people to easily read our online comms and use our products". No contrast target, focus-style rule or touch-target size is published. `--tw-ring-color: rgba(59,130,246,.5)` is present in `:root` (a Tailwind default variable), but no Bolt focus ring was measured.
- **Delivery.** The site is a Next.js build (Next font class names `__Inter_205b87`). No npm package, versioned library or public Figma file was found.

## Do's and Don'ts

### Do
- Use `{colors.canvas}` #f7f9f8 as the page background, not #ffffff.
- Use `{colors.primary}` #2b8659 for every primary action and darken to #18784c on hover.
- Set headlines in Inter 750 with the measured negative tracking (-2.52px at 72px, -1.44px at 48px).
- Set body copy in Inter 550 at 18px / 28px in `{colors.ink}` #000a07a0.
- Give CTAs a 48px height, 0px 24px padding and a 40px radius.
- Pair a green primary with either the translucent grey `button-secondary` (on light) or the `button-mint` (on dark or photography).
- Use #0e1010 cards with a 40px radius and the faint mint ring shadow for service tiles.
- Keep greys green-tinted and alpha-based.
- Use daylight, people-first photography with Bolt vehicles in context.

### Don't
- Don't use the semantic `--color-bg-action-primary` #32bb78 for marketing CTAs — the rendered buttons are #2b8659.
- Don't round CTA corners to a full pill; the 48px CTAs use 40px. Only the small "Register" button is 9999px.
- Don't use pure black text or pure black surfaces; the darkest measured surface is #0e1010 and headline ink is #191f1c.
- Don't use weight 400 for body or 700 for headlines — the site uses 550 and 750.
- Don't add heavy drop shadows; the only shadows are 1px rings with 2px/4px soft drops at 7% alpha.
- Don't introduce a second accent color in marketing UI; semantic danger/warning/promo colors belong to product states.
- Don't invent an input style — none was measured on the homepage.
- Don't copy or alter the Bolt logo; the guidelines require written permission for media assets.

## Responsive Behavior

### Breakpoints
Only two widths were measured: desktop 1280px and mobile 390px. The exact breakpoint values were not captured, so none are declared.

### Measured changes from 1280px to 390px
| Element | Desktop | Mobile |
|---|---|---|
| h1 | 72px / 80px, -2.52px | 48px / 54px, -1.44px |
| h2 | 48px / 56px, -1.44px | 36px / 42px, -0.9px |
| Lead paragraph | 18px / 28px, -0.198px | 16px / 24px, -0.176px |
| Primary CTA | 18px label, auto width (161px) | 16px label, full width (342px), still 48px tall |
| Header | 60px | 60px |

Mobile frequency table: 16px (2472 chars), 14px, 24px, 20px, 12px, 48px, 36px.

### Touch Targets
Primary CTAs are 48px tall on both desktop and mobile. The nav "Register" pill is 32px tall.

### Collapsing Strategy
On mobile the hero CTA spans the full 342px content width (24px side margins at 390px). The header keeps its 60px height.

### Image Behavior
The hero photograph is full-bleed at all widths. Card photography is cropped inside the card radius.

## Iteration Guide

1. Start with the canvas #f7f9f8 and Inter (variable) loaded; set body to 18px / 550 / 28px in #000a07a0.
2. Build the hero: centred 72px / 750 headline at -2.52px in #191f1c, a two-line paragraph, then the green + translucent-grey button pair at 48px / 40px radius.
3. Add a full-bleed daylight photograph directly beneath.
4. Build the services carousel with #0e1010 cards, 40px radius, 24px / 650 titles in #eceeed and mint CTAs.
5. Close with a #0e1010 product band and a #0e1010 footer with #eceeed 16px links.
6. Check: only one green on the page, no pure white canvas, no 400/700 weights, no pill-shaped 48px CTAs.

### Common Mistakes When Recreating Bolt
- Using a bright "app green" such as #32bb78 for buttons — the marketing CTA is the darker #2b8659.
- Setting Inter at 700 — the measured headline weight is 750 and looks noticeably heavier.
- Using opaque grey for paragraphs — the site uses an alpha grey that lets the green-tinted canvas through.
- Forgetting the negative tracking on display sizes.
- Treating the dark cards as #000000.
