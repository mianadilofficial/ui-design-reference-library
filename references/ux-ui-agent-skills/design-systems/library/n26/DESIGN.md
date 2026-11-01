---
version: alpha
name: N26
category: "Banking & Insurance"
description: "N26's marketing system — N26-Extended at weight 400 for display (80px/88px hero, 58px/64px section heads) over the N26 house sans at 16px/24px with +0.3px tracking in #1b1b1b ink, deep-teal #003b39 CTAs with 24px radius and 12px 24px padding that hover to #045e58, sand-tinted #c6b29f40 secondary buttons, a #faf8f5 cream header, 40px-radius media modules on white and a #ede7e0 footer over a #003b39 legal bar."

colors:
  primary: "#003b39"
  primary-hover: "#045e58"
  on-primary: "#ffffff"
  teal: "#088177"
  teal-deep: "#005451"
  teal-200: "#a8ded8"
  teal-bright: "#d8edeb"
  teal-mist: "#809d9c"
  canvas: "#ffffff"
  ink: "#1b1b1b"
  ink-strong: "#2a2a2a"
  ink-muted: "#6d6d6d"
  cream: "#faf8f5"
  cream-deep: "#ede7e0"
  sand-25: "#c6b29f40"
  sand-50: "#c6b29f80"
  inverse-hover: "#d6d6d6"
  gray-100: "#e9e9e9"
  gray-border: "#d9d9d9"
  input-border: "#d1d5db"
  surface-mist: "#e9eef2"
  focus-ring: "#08817766"
  rhubarb: "#b55b64"
  rhubarb-bright: "#f5e1e3"
  wheat: "#c89d58"
  petrol: "#2b697a"
  lagoon: "#1d6ea2"

typography:
  display-hero:
    fontFamily: "N26-Extended, N26-Extended-Fallback, sans-serif"
    fontSize: 80px
    fontWeight: 400
    lineHeight: 88px
    letterSpacing: normal
  display-hero-mobile:
    fontFamily: "N26-Extended, N26-Extended-Fallback, sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
  display-section:
    fontFamily: "N26-Extended, N26-Extended-Fallback, sans-serif"
    fontSize: 58px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: normal
  display-section-mobile:
    fontFamily: "N26-Extended, N26-Extended-Fallback, sans-serif"
    fontSize: 38px
    fontWeight: 400
    lineHeight: 46px
  heading-lg:
    fontFamily: "N26-Extended, N26-Extended-Fallback, sans-serif"
    fontSize: 44px
    fontWeight: 500
    lineHeight: 52px
  heading-card:
    fontFamily: "N26-Extended, N26-Extended-Fallback, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body-lead:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 0.3125px
  body-intro:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.16px
  title-sm:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.28125px
  body:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.3px
  body-medium:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.3px
  caption:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 0.2625px
  caption-medium:
    fontFamily: "N26, N26-Fallback, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.2625px

rounded:
  nemo2: 2px
  nemo4: 4px
  nemo6: 6px
  nemo8: 8px
  nemo16: 16px
  nemo24: 24px
  nemo32: 32px
  nemo40: 40px
  pill: 9999px

spacing:
  nemo4: 4px
  nemo8: 8px
  nemo12: 12px
  nemo16: 16px
  nemo20: 20px
  nemo24: 24px
  nemo32: 32px
  nemo40: 40px
  nemo48: 48px
  nemo56: 56px
  nemo64: 64px
  nemo80: 80px
  nemo96: 96px
  nemo112: 112px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.nemo24}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.nemo24}"
  button-secondary:
    backgroundColor: "{colors.sand-25}"
    textColor: "{colors.primary}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.nemo24}"
    padding: 12px 24px
    height: 48px
  button-secondary-hover:
    backgroundColor: "{colors.sand-50}"
    textColor: "{colors.primary}"
    rounded: "{rounded.nemo24}"
  button-secondary-on-dark:
    backgroundColor: "{colors.sand-25}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.nemo24}"
    padding: 12px 24px
    height: 48px
  button-secondary-on-dark-hover:
    backgroundColor: "{colors.sand-50}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.nemo24}"
  button-inverse:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-medium}"
    rounded: "{rounded.nemo24}"
    padding: 12px 24px
    height: 48px
  button-inverse-hover:
    backgroundColor: "{colors.inverse-hover}"
    textColor: "{colors.ink}"
    rounded: "{rounded.nemo24}"
  nav:
    backgroundColor: "{colors.cream}"
    textColor: "{colors.ink}"
    height: 73px
    padding: 12px 80px
  nav-link:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 4px 8px
    height: 32px
  nav-link-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
  language-switch:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.nemo8}"
    padding: 12px 8px
    height: 48px
  language-switch-hover:
    backgroundColor: "{colors.gray-100}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  media-module:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.nemo40}"
  app-download-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.caption-medium}"
    rounded: "{rounded.nemo8}"
    padding: 12px 16px 16px
    border: "1px solid #d9d9d9"
  text-input:
    backgroundColor: transparent
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.nemo8}"
    padding: 9px
    height: 40px
    border: "1px solid #d1d5db"
  card-form:
    backgroundColor: "{colors.surface-mist}"
    rounded: "{rounded.nemo8}"
    padding: 20px
  card-plan:
    backgroundColor: "{colors.teal-bright}"
    textColor: "{colors.ink}"
    rounded: 6px 6px 0px 0px
    padding: 0px 12px 24px
    border: "1px solid #a8ded8"
  footer:
    backgroundColor: "{colors.cream-deep}"
    textColor: "{colors.ink}"
    typography: "{typography.caption}"
    rounded: 16px 16px 0px 0px
  footer-legal-bar:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.caption-medium}"
---

## Overview

N26's website reads like a quiet, premium consumer brand rather than a bank. A pale cream header bar (`#faf8f5`, 73px) holds the black N26 logotype — the "N" with bars above and below — five plain nav words (Plans, Bank, Save, Invest, Travel), a sand-tinted "Log in" button, a deep-teal "Open bank account" button and an "EN" language switch with a small EU flag. Below, the page is a vertical stack of full-height "snap" sections: a full-bleed lifestyle photograph with the centered headline "The first bank you'll love" in white N26-Extended at 80px, a white `button-inverse`; then a deep-teal `#003b39` rounded module with a phone mock-up on the left and "Bank for free with no hidden fees" (58px) on the right; then split image/text modules on white with warm, natural-light photography of people using phones and cards.

The palette is calm and slightly unusual: **deep teal** `#003b39` is the action colour, the brand **teal** `#088177` fills large bands, warm **cream** (`#faf8f5`, `#ede7e0`) and **sand** (`#c6b29f` at 25%/50% alpha) soften the chrome, and text is an off-black `#1b1b1b`. N26's own description of its 2018 palette: "teal … golden wheat, rhubarb and petrol blue" — "each an uncommon version of the simpler shade" ([N26 blog](https://n26.com/en-eu/blog/n26-new-logo-new-colors)). Those secondary hues (`#c89d58` wheat, `#b55b64` rhubarb, `#2b697a` petrol) appear in illustrations and product tints, not in UI chrome.

Typography is the identity. Display type is **N26-Extended** — a wide, low-contrast grotesque — always at regular weight 400 for the big heads; body type is **N26** at 400/500 with slightly open tracking (+0.3px at 16px).

**Key Characteristics:**
- Wide N26-Extended display at weight 400, very large (80px hero, 58px sections), tracking `normal`.
- N26 body sans with positive letter-spacing on every reading size (`--tracking-nemoWider` .01875em / `--tracking-nemoWide` .015625em).
- Deep-teal `#003b39` buttons with a 24px radius (not full pills) and 48px height; hover lightens to `#045e58`.
- Sand-alpha secondary buttons (`#c6b29f40` → `#c6b29f80`) — warm, low-contrast, never outlined.
- Content lives in big rounded modules (40px radius) with photography or phone mock-ups.
- Cream header, cream-deep footer, deep-teal legal bar — no pure greys in the chrome.
- Snap-scrolling full-viewport sections on desktop (`--height-max-snap-scroll-desktop: 950px`).

## Colors

> Source: `web/data/extracted/n26.json` (homepage, desktop + mobile), `n26--calculator.json` (/en-eu/interest-calculator), and the site's own custom properties (`--color-nemo*`, `--color-teal-*`).

### Brand & Action
- **Primary / Teal Heavy** (`{colors.primary}` — `#003b39`): `--color-nemoTealHeavy` = `--color-teal-900`. Every primary CTA, the dark media modules, the legal bar.
- **Primary Hover / Teal Strong** (`{colors.primary-hover}` — `#045e58`): `--color-nemoTealStrong` = `--color-teal-700`; measured hover of "Open bank account" (`rgb(0,59,57)` → `rgb(4,94,88)`) and of nav items.
- **Teal** (`{colors.teal}` — `#088177`): `--color-nemoTeal` = `--color-teal-500`, the brand teal; a large homepage band by area.
- **Teal Deep** (`#005451`), **Teal 200** (`#a8ded8`), **Teal Bright** (`#d8edeb`), **Teal Mist** (`#809d9c`): the rest of the teal ramp (`--color-nemoTealDeep`, `--color-nemoTeal200`, `--color-nemoTealBright`, `--color-nemoTealMist`).

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): page background (largest area).
- **Cream** (`{colors.cream}` — `#faf8f5`): `--color-nemoCream`; the sticky header and disclaimer bands.
- **Cream Deep** (`{colors.cream-deep}` — `#ede7e0`): `--color-nemoCreamDeep`; footer panel.
- **Sand 25 / Sand 50** (`#c6b29f40` / `#c6b29f80`): `--color-nemoSand25` / `--color-nemoSand50`; secondary button fill and its hover.
- **Surface Mist** (`{colors.surface-mist}` — `#e9eef2`): form panel on the interest calculator.

### Text
- **Ink** (`{colors.ink}` — `#1b1b1b`): `--color-nemoBlack`; the most-read colour on the page.
- **Ink Strong** (`#2a2a2a`, `--color-nemoGrayDeep`): footer column headings.
- **Ink Muted** (`#6d6d6d`, `--color-nemoGrayStrong`): secondary text.
- **On Primary** (`#ffffff`): text on teal, on photography and on the legal bar.

### Borders & States
- **Gray Border** (`#d9d9d9`, `--color-nemoGray`): app-download card border.
- **Input Border** (`#d1d5db`): calculator inputs.
- **Gray 100** (`#e9e9e9`, `--color-nemoGrayBright`): language-switch hover fill.
- **Inverse Hover** (`#d6d6d6`, `--color-nemoGray300`): hover of the white `button-inverse`.
- **Focus Ring** (`{colors.focus-ring}` — `#08817766`): focus is `box-shadow: 0 0 0 3px` in teal at 40% alpha (sibling rings exist in petrol `#2b697a66`, wheat `#c89d5866` and rhubarb `#b55b6466`).

### Secondary palette
- **Rhubarb** `#b55b64` / **Rhubarb Bright** `#f5e1e3`, **Wheat** `#c89d58`, **Petrol** `#2b697a`, **Lagoon** `#1d6ea2` — named in the CSS as `--color-nemoRhubarb*`, `--color-nemoLagoon*` and hashed theme variables. Used for illustration, card colours and product tints.

## Typography

### Font Family
Two proprietary families are served via `@font-face`: **N26** (400/500/600 loaded) and **N26-Extended** (400/500), each with a metric-matched local fallback face (`N26-Fallback`, `N26-Extended-Fallback`). The CSS exposes them as `--font-standard: N26, N26-Fallback, sans-serif` and `--font-extended: N26-Extended, N26-Extended-Fallback, sans-serif`. N26 has not published the designer or foundry of these faces in any source found (see Design System Architecture).

### Hierarchy (desktop 1280px unless noted)

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | N26-Extended | 80px | 400 | 88px | normal | Homepage h1 |
| `{typography.display-hero-mobile}` | N26-Extended | 48px | 400 | 56px | — | h1 at 390px |
| `{typography.display-section}` | N26-Extended | 58px | 400 | 64px | normal | Section h2 |
| `{typography.display-section-mobile}` | N26-Extended | 38px | 400 | 46px | — | h2 at 390px |
| `{typography.heading-lg}` | N26-Extended | 44px | 500 | 52px | — | "Noteworthy reads" |
| `{typography.heading-card}` | N26-Extended | 24px | 500 | 32px | — | Article card titles |
| `{typography.body-lead}` | N26 | 20px | 400 | 30px | 0.3125px | Hero / module sub-copy |
| `{typography.body-intro}` | N26 | 20px | 400 | 32px | 0.16px | Long intro text block |
| `{typography.title-sm}` | N26 | 18px | 500 | 28px | 0.28125px | FAQ questions |
| `{typography.body}` | N26 | 16px | 400 | 24px | 0.3px | Body, nav, links |
| `{typography.body-medium}` | N26 | 16px | 500 | 24px | 0.3px | Buttons, bold disclaimers |
| `{typography.caption}` | N26 | 14px | 400 | 20px | 0.2625px | Footer links |
| `{typography.caption-medium}` | N26 | 14px | 500 | 20px | 0.2625px | Footer headings, legal bar, "Get the app" |

### Principles
- **Display is wide and regular.** Big heads use N26-Extended 400; 500 appears only at 44px and below.
- **Tracking is positive on text, normal on display.** The CSS defines `--tracking-nemoNormal` 0em, `--tracking-nemoWide` .015625em and `--tracking-nemoWider` .01875em — 16px × .01875 = 0.3px, 14px × .01875 = 0.2625px, 20px × .015625 = 0.3125px, 18px × .015625 = 0.28125px.
- **Font sizes are tokenised in px steps**: `--text-nemo12` … `--text-nemo80` (12, 14, 16, 17, 18, 19, 20, 24, 26, 28, 32, 34, 38, 40, 44, 46, 48, 52, 56, 58, 80 px in rem).
- **Weights are only 400 and 500** on the measured page (`--font-weight-nemoNormal` 400, `--font-weight-nemoMedium` 500).

### Note on Font Substitutes
N26 and N26-Extended are proprietary. For the display role, pick a wide/extended grotesque at regular weight and keep line height ≈1.1 (88/80, 64/58); for body, a neutral grotesque at 400/500 with +0.3px tracking at 16px. Do not bold the display substitute — the brand's large heads are regular weight.

## Layout

### Spacing System
`--spacing-nemo*` tokens (px-named): 0, 2, 4, 8, 10, 12, 16, 20, 22, 24, 30, 32, 36, 40, 48, 56, 64, 72, 80, 96, 112, 132. Most frequent measured gaps: 16px, 24px, 8px, 12px, 40px; most frequent paddings 4px, 8px, 32px, 80px.

### Grid & Container
- Header content runs inside 80px side padding at 1280px (`padding: 12px 80px`); `--navigation-header-width: 1168px`.
- Content container token `--container-nemoContainer: 1464px`; full-bleed media up to `--container-nemoFullSizeMediaContainer: 1728px`.
- Media modules are inset 80px from each side at 1280px and split 50/50 (image | text) or centered.

### Imagery & Art Direction
- Photography is warm, natural-light lifestyle imagery: people in parks, at home desks, in cities, always holding a phone or card.
- Product is shown through large phone mock-ups of the N26 app (balance "8.873,26", round teal quick-action buttons, transaction list) set inside teal modules.
- Cards are rendered as floating 3D stacks (transparent, teal, black metal) over a radial teal glow on the "Choose your plan" module.
- Microcopy is short and benefit-led: "Bank for free with no hidden fees", "Make your money work harder", "Bank and invest in one app"; CTAs name the product ("Open an N26 Standard account", "Start investing").

### Whitespace & Rhythm
Desktop sections are sized to the viewport for snap scrolling (`--height-min-snap-scroll-desktop: 652px`, `--height-max-snap-scroll-desktop: 950px`; mobile `--height-min-snap-scroll-mobile: 840px`). Each section carries one message, one heading, one or two paragraphs and one button — very low density. Legal disclaimers sit in full-width cream bands with 16px body text.

## Elevation & Depth

| Level | Value | Use |
|---|---|---|
| 0 | none | All measured homepage surfaces — no box-shadow was recorded |
| Focus | `0 0 0 3px #08817766` | Focus ring (teal 40%) |
| Drop shadow tokens | `--drop-shadow-xs 0 1px 1px #0000000d`, `--drop-shadow-lg 0 4px 4px #00000026`, `--drop-shadow-xl 0 9px 7px #0000001a` | Available as filters for floating imagery |

Depth comes from photography, the phone mock-ups (which carry their own drop shadow in the image), and colour-blocking of teal modules against white.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.nemo2}` | 2px | Small inline elements |
| `{rounded.nemo4}` | 4px | Small chips |
| `{rounded.nemo6}` | 6px | Plan card tops (`6px 6px 0 0`) |
| `{rounded.nemo8}` | 8px | Inputs, language switch, app-download card, form panel |
| `{rounded.nemo16}` | 16px | Footer panel top corners (`16px 16px 0 0`) |
| `{rounded.nemo24}` | 24px | All buttons |
| `{rounded.nemo32}` | 32px | Measured on two homepage elements (`--radius-nemo32`) |
| `{rounded.nemo40}` | 40px | Media modules (hero cards, split modules) |
| `{rounded.pill}` | 9999px | Nav item hover pill (computed `3.35544e+07px`, i.e. an "infinite" radius) |

Buttons are **not** full pills: at 48px tall a 24px radius produces a stadium shape, but the token is 24px.

## Components

### Buttons

**`button-primary`** — "Open bank account".
- `#003b39` fill, white `{typography.body-medium}` (16px/500, +0.3px), padding `12px 24px`, height 48px, radius 24px, no border, no shadow.
- Hover (`button-primary-hover`): `#045e58`.

**`button-secondary`** — "Log in", "Discover Instant Savings".
- `#c6b29f40` sand fill, `#003b39` text, same geometry. Hover `#c6b29f80`.

**`button-secondary-on-dark`** — "Open an N26 Standard account", "Start investing", "Compare plans" on teal/dark modules.
- Same sand-alpha fill (which reads as a muted grey-teal over `#003b39`), white text, trailing → arrow icon. Hover `#c6b29f80`.

**`button-inverse`** — hero "Open bank account" on photography.
- White fill, `#1b1b1b` text. Hover `#d6d6d6`.

### Navigation
**`nav`** — sticky cream (`#faf8f5`) header, 73px tall at desktop (`--xl-header-height: 73px`), `12px 80px` padding; 63px tall at 390px (`--header-height: 63px`) with `12px 20px` padding.
- **`nav-link`** — Plans/Bank/Save/Invest/Travel are buttons (`4px 8px`, 32px tall, full pill radius) in 16px/400 `#1b1b1b`; on hover they fill `#045e58` with white text.
- **`language-switch`** — "EN" with flag: 8px radius, `12px 8px`, 48px; hover `#e9e9e9`.

### Links
**`link`** — inline legal links ("Key Information Document (KID)", "Terms & Conditions") are `#1b1b1b`, 16px/400, underlined in the screenshot.

### Cards & Containers
**`media-module`** — the signature container: 40px corner radius, `#003b39` (or photography) fill, image half + text half, white text with a `button-secondary-on-dark`.

**`app-download-card`** — floating "Get the app" QR card fixed bottom-right: white, `1px solid #d9d9d9`, 8px radius, `12px 16px 16px` padding, 14px/500 label.

**`card-plan`** (interest calculator) — plan header cards in `#d8edeb` with a `1px solid #a8ded8` border, `6px 6px 0 0` radius, `0 12px 24px` padding; bottom halves use `0 0 6px 6px`.

**`card-form`** (interest calculator) — `#e9eef2` panel, 8px radius, 20px padding.

### Forms
**`text-input`** (interest calculator, `/en-eu/interest-calculator`) — transparent fill, `1px solid #d1d5db`, 8px radius, 9px padding, 40px tall, 16px `#1b1b1b` text.

### FAQ
Accordion questions are `<button>`s in `{typography.title-sm}` (18px/500) with 28px line height; open/close uses `--animate-accordionSlideDown/Up` (.4s `cubic-bezier(.16, 1, .3, 1)`).

### Footer
**`footer`** — `#ede7e0` panel with `16px 16px 0 0` top corners; logo left, then five columns (COMPANY, HELP, LEARN, MONEY TOOLS, MORE) with uppercase 14px/500 headings and 14px/400 links. **`footer-legal-bar`** — full-width `#003b39` strip with "© N26 SE 2026", social icons and 14px/500 white legal links, separated by a hairline.

## Design System Architecture

N26 has **no public design-system site, token package or public Figma kit**. What it has published are design-team articles on its own blog, brand logo guidelines in its media kit, and a Figma customer story; the token architecture below is read from the shipped CSS custom properties captured in `n26.json`.

### Token architecture
- **Two tiers, documented by N26.** N26's design team describes a base palette of "meaningless" colour names like "Teal_500" and a layer of contextual colours "where a name of the color presents the context of where this color is used (i.e. background container)" ([Contextualizing Colors, N26 blog](https://n26.com/en-eu/blog/contextualizing-colors)). The 2020 colour update expanded "8 colors" to "50 meaningful shades", with numbered steps such as 500 and 200 per hue, and froze values for a year "to ensure a stable design system" ([Updating our color system, N26 blog, 21 Oct 2020](https://n26.com/en-eu/blog/updating-our-color-system)).
- **On the website** the base tier is visible verbatim: `--color-teal-500` `#088177`, `--color-teal-700` `#045e58`, `--color-teal-900` `#003b39`, `--color-rhubarb-500` `#b55b64`, `--color-lagoon-700` `#1d6ea2`, with named aliases in a `nemo` namespace — `--color-nemoTeal`, `--color-nemoTealStrong`, `--color-nemoTealHeavy`, `--color-nemoCream`, `--color-nemoSand25`, `--color-nemoBlack`.
- Non-colour foundations use the same prefix with px-named keys: `--spacing-nemo8`, `--radius-nemo24`, `--text-nemo58`, `--tracking-nemoWider`, `--font-weight-nemoMedium`, `--border-width-nemo2`, `--container-nemoContainer`.
- The contextual tier ships as build-hashed custom properties (e.g. `--_1yr65jo13: #088177`, `--_1yr65jo1b: #1b1b1b`, `--_1n4x04zj: #08817766` used in the focus ring), so the semantic names are not readable on the site.
- The variable namespaces (`--color-*`, `--text-*`, `--radius-*`, `--container-*`, `--ease-*`, `--animate-*`, plus `--tw-*` internals) match Tailwind CSS theme variables, with N26's `nemo*` values added to that theme.

### Theming
- **Light and dark are paired at the token level.** "Contextual colors consist of paired values — one for light mode, one for dark mode"; searching a colour in Figma returns both variants ([Contextualizing Colors](https://n26.com/en-eu/blog/contextualizing-colors)). The update shipped "color values for light and dark mode" with button states (active, passive, hover) in the libraries ([Updating our color system](https://n26.com/en-eu/blog/updating-our-color-system)).
- **Dark mode is an app feature**, launched July 2020; it follows the device's system setting on iOS, and on Android can be set under "My account" → "App appearance" ([N26 press release](https://n26.com/en-it/press/press-release/dark-mode-now-available-for-all-n26-customers)).
- The marketing website ships a single light theme; dark sections are made by colour-blocking modules in `#003b39`, not by a theme switch.

### Type & spacing systems
- Font sizes are discrete px tokens (`--text-nemo12` … `--text-nemo80`) rather than a ratio scale; mobile steps down (80 → 48px hero, 58 → 38px section head).
- Letter-spacing is tokenised in em: `nemoNormal` 0, `nemoWide` .015625em, `nemoWider` .01875em.
- Spacing tokens are px-named, mostly multiples of 4/8 with a few 10/22/30/36/132 outliers.

### Component model
- N26 states the design system library is consumed by "website, web-app, and native apps", with Figma colour-style libraries for design and code-based colour configuration for implementation ([Contextualizing Colors](https://n26.com/en-eu/blog/contextualizing-colors)). N26 uses Figma "for their component library" and tracks it with Figma's Design System Analytics ([Figma customer story](https://www.figma.com/customers/how-n26-makes-banking-approachable/)).
- No public component inventory exists. On the measured web pages the components are: header with nav pills and language switch, primary / secondary / secondary-on-dark / inverse buttons (default + hover), full-bleed hero, 40px media modules, split image/text modules, plan cards, calculator form (inputs + panels), FAQ accordion, article cards, floating app-download QR card, footer + legal bar.

### Accessibility
- N26 says the 2020 palette "improved visual accessibility" ([Updating our color system](https://n26.com/en-eu/blog/updating-our-color-system)); no contrast targets are published.
- Logo contrast rules are documented: on white the logo "should only appear in black", on black and on photography "only … in white", and against brand colours "the logo that contrasts the most (either black or white) should be used"; the logo must never be recoloured ([N26 Brand Guidelines — logo, linked from the media kit](https://images.ctfassets.net/q33z48p65a6w/6WggjcHuqiYYVlcCdq6V6A/5f35e2fa292a7da45cb72395a5a4d895/Merged_document.png), [media kit](https://n26.com/en-eu/press-about-us)). Clear space "is defined by the cap height of the N".
- On the site: a 3px teal-alpha focus ring (`0 0 0 3px #08817766`); buttons 48px tall; nav items 32px tall.

### Delivery
- No npm token package, public repository or public Figma community file was found. Tokens ship as CSS custom properties in the site bundle; the fonts ship with metric-matched fallback faces to limit layout shift.
- Versioning/governance: a "translation map" was used to migrate old colour values to new ones across "product and app experience, website and CRM channels", followed by a one-year value freeze ([Updating our color system](https://n26.com/en-eu/blog/updating-our-color-system)).

## Do's and Don'ts

### Do
- Use `#003b39` for the main action and hover to `#045e58`.
- Set display type in N26-Extended **400**, large, with normal tracking.
- Track body copy positively (+0.3px at 16px, +0.2625px at 14px).
- Put content in 40px-radius modules with real photography or phone mock-ups.
- Use sand-alpha (`#c6b29f40`) for secondary buttons, on light and dark surfaces alike.
- Keep the header cream `#faf8f5` and the footer `#ede7e0` with a `#003b39` legal bar.
- Show the logo only in black or white.

### Don't
- Don't use the brand teal `#088177` for small text or buttons — the button colour is the darker `#003b39`.
- Don't make outlined buttons; secondaries are tinted fills.
- Don't bold the big display heads.
- Don't add drop shadows to cards or buttons.
- Don't colour, outline or rearrange the N26 logotype.
- Don't use pure black `#000000` for text — ink is `#1b1b1b`.

## Responsive Behavior

### Breakpoints
Header heights are tokenised per size: `--header-height` 63px (default/mobile), `--lg-header-height` 69px, `--xl-header-height` 73px. Exact breakpoint widths were not captured (the stylesheet was not retrievable after the extraction run), so none are declared here.

### Mobile (390px, measured)
- h1 drops to 48px/56px, section h2 to 38px/46px; body stays 16px/24px.
- Header 63px tall, `12px 20px` padding; primary CTA keeps 16px/500, `12px 24px`, 48px, 24px radius.
- Snap sections use `--height-min-snap-scroll-mobile: 840px`.

### Touch Targets
Buttons are 48px tall on all sizes; the language switch is 48px; inputs are 40px.

### Collapsing Strategy

## Iteration Guide

1. Start with white canvas, cream header (`#faf8f5`), `#ede7e0` footer and `#003b39` legal bar.
2. One message per viewport-tall section: N26-Extended 400 head, `{typography.body-lead}` copy, one button.
3. Use `button-primary` once per view; supporting actions use `button-secondary` (sand alpha).
4. Wrap imagery in `{rounded.nemo40}` modules; use `#003b39` as the module colour for dark sections.
5. Keep tracking tokens: `.01875em` for 14/16px text, `.015625em` for 18/20px.
6. Reach for the `nemo` token names when coding (`--color-nemoTealHeavy`, `--radius-nemo24`, `--spacing-nemo24`).
7. Re-run `node web/scripts/verify-designs.mjs --slug=n26` after edits.
