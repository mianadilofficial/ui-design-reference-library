---
version: alpha
name: Codecademy
category: "Education"
description: "Codecademy's marketing site runs its open-source Gamut design system in dark color mode — a pure #000000 canvas, white Apercu body type at 16px/24px, a 76px Apercu hero headline with a Suisse Int'l Mono accent line in lime #aee938, and Codecademy-yellow #ffd300 fill buttons with navy #10162f labels, 4px corners and a 2px border. Light pages flip to beige #fff0e5 with hyper-violet #3a10e5 actions. Cards are #0a0d1c with 16px radius and translucent #ffffff33 hairlines."

colors:
  primary: "#ffd300"
  primary-hover: "#cca900"
  canvas: "#000000"
  ink: "#ffffff"
  ink-secondary: "#ffffffa6"
  navy: "#10162f"
  navy-900: "#0a0d1c"
  navy-700: "#10162fdb"
  navy-600: "#10162fbf"
  navy-500: "#10162fa1"
  navy-300: "#10162f47"
  navy-200: "#10162f1f"
  hyper: "#3a10e5"
  hyper-hover: "#5533ff"
  beige: "#fff0e5"
  pale-yellow: "#fffae5"
  white: "#ffffff"
  white-hover: "#ffffff17"
  white-tint: "#ffffff0a"
  hairline-dark: "#ffffff33"
  light-green: "#aee938"
  light-blue: "#66c4ff"
  blue: "#1557ff"
  pink: "#f966ff"
  red: "#e91c11"
  red-600: "#be1809"
  red-300: "#e85d7f"
  green-700: "#008a27"

typography:
  display-hero:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 76px
    fontWeight: 400
    lineHeight: 91.2px
  display-hero-mobile:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  title-xl:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
  title-md:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 39px
  title-sm:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 28.6px
  accent-heading:
    fontFamily: "Suisse, Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33.8px
  accent-input:
    fontFamily: "Suisse, Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  body-lg:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  body:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 14px
    fontWeight: 400
  button-lg:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  button:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button-sm:
    fontFamily: "Apercu, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Ubuntu, Cantarell, 'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif"
    fontSize: 14px
    fontWeight: 700

rounded:
  none: 0px
  sm: 2px
  md: 4px
  lg: 8px
  xl: 16px
  tag: 100px
  full: 999px

spacing:
  "4": 4px
  "8": 8px
  "12": 12px
  "16": 16px
  "24": 24px
  "32": 32px
  "40": 40px
  "48": 48px
  "64": 64px
  "96": 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
    border: 2px solid transparent
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.navy}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 48px
  button-primary-light-mode:
    backgroundColor: "{colors.hyper}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-primary-light-mode-hover:
    backgroundColor: "{colors.hyper-hover}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.navy-700}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-text-on-dark:
    backgroundColor: transparent
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-text-on-dark-hover:
    backgroundColor: "{colors.white-hover}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  button-social:
    backgroundColor: "{colors.white}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    border: "2px solid #ffffff"
    height: 48px
  button-social-hover:
    backgroundColor: "{colors.white-hover}"
    textColor: "{colors.white}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    border: "2px solid #ffffff"
    height: 48px
  button-disabled:
    backgroundColor: "{colors.navy-200}"
    textColor: "{colors.navy-500}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 16px
    height: 40px
  text-input:
    backgroundColor: "{colors.white}"
    textColor: "{colors.navy}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    border: "1px solid #10162f"
    padding: 12px 0px 12px 8px
    height: 50px
  text-input-focus:
    backgroundColor: "{colors.white}"
    textColor: "{colors.navy}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    border: "1px solid #3a10e5"
    boxShadow: "inset 0 0 0 1px #3a10e5"
  prompt-input-dark:
    backgroundColor: "{colors.white-tint}"
    textColor: "{colors.white}"
    typography: "{typography.accent-input}"
    rounded: 16px 16px 0px 0px
    border: "1px solid #ffffff33"
    padding: 32px 56px 32px 32px
  card-dark:
    backgroundColor: "{colors.navy-900}"
    textColor: "{colors.white}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    border: "1px solid #ffffff33"
    padding: 32px
  card-light:
    backgroundColor: "{colors.white}"
    textColor: "{colors.navy}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    border: "1px solid #10162f47"
  promo-banner:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.navy}"
    typography: "{typography.body-lg}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.white}"
    typography: "{typography.body}"
    height: 80px
  nav-link-hover:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  link-light-mode:
    textColor: "{colors.hyper}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.white}"
    typography: "{typography.body}"
---

## Overview

Codecademy is the learn-to-code platform, and its public site is a direct expression of **Gamut**, the company's open-source React design system ([github.com/Codecademy/gamut](https://github.com/Codecademy/gamut), documented at [gamut.codecademy.com](https://gamut.codecademy.com)). The homepage measured for this file (`codecademy.com`, 1280px desktop) renders in Gamut's **dark color mode**: the outer page canvas is pure `{colors.canvas}` `#000000`, nearly every glyph is `{colors.ink}` `#ffffff`, and every filled call to action is Codecademy yellow `{colors.primary}` `#ffd300` with a navy `{colors.navy}` `#10162f` label.

The look is "terminal meets editorial". The hero headline "Develop your" is set in **Apercu** at 76px, regular weight, white on a black label block laid over photography; the second line — a slash-prefixed word such as "/career" or "/team" that cycles — switches to **Suisse Int'l Mono** in lime `{colors.light-green}` `#aee938`, like a command typed at a prompt. Section headings ("Live Bootcamps and Workshops", "Build skills that stand out", "Top courses") are all in the mono face at 26px with wide, typewriter rhythm. Body copy returns to Apercu at 16–18px.

Photography is warm and candid (a learner coding in a camper van at sunset), cropped into a 16px-radius frame and overlapped by a black sign-up panel that carries a soft blue glow. Below the fold the page becomes a stack of dark navy cards (`{colors.navy-900}` `#0a0d1c`) on black with 1px translucent white hairlines, a field of tiny dotted patterns, and grids of subject tiles with line icons.

Light pages — pricing, log-in, catalog — use the same components in Gamut's **light mode**: canvas flips to beige `{colors.beige}` `#fff0e5`, text to navy `#10162f`, and the primary action color becomes hyper violet `{colors.hyper}` `#3a10e5`. This file documents the dark homepage as the default and gives the light-mode equivalents measured on `/pricing` and `/login`.

**Key Characteristics:**
- Pure-black canvas `#000000` with white Apercu body text (16px/24px) — Gamut dark mode.
- Codecademy yellow `#ffd300` filled buttons with navy `#10162f` bold labels; hover darkens to `#cca900`.
- Two typefaces with distinct jobs: Apercu (proportional, UI and body) and Suisse Int'l Mono (accent headings, the "/career" hero line).
- Buttons are compact rectangles: 4px radius, 2px border, `4px 16px` padding, 40px tall (48px for hero size).
- Dark cards `#0a0d1c` with 16px radius and `#ffffff33` hairline borders.
- Lime `#aee938`, light blue `#66c4ff` and electric blue `#1557ff` used as signal/accent colors, never as large fills.
- Light-mode pages swap to beige `#fff0e5` canvas and hyper `#3a10e5` actions via Gamut's semantic color aliases.

## Colors

> **Source pages:** home (`/`) measured in dark mode; `/pricing` and `/login` measured in light mode. Every hex below is either a computed style from those pages or a `--color-*` custom property the site ships on `:root` (the Gamut palette).

### Brand & Accent
- **Yellow** (`{colors.primary}` — `#ffd300`): Gamut `yellow-500`, the dark-mode `primary`. Filled buttons, the promo banner across the top of the page, nav hover color.
- **Yellow Hover** (`{colors.primary-hover}` — `#cca900`): Gamut `yellow-400`, the measured hover fill of every yellow button.
- **Hyper** (`{colors.hyper}` — `#3a10e5`): Gamut `hyper-500`, the light-mode `primary`. Filled buttons on beige pages, text links, nav hover on light pages, the "Secure your career" popover fill on the homepage.
- **Hyper Hover** (`{colors.hyper-hover}` — `#5533ff`): Gamut `hyper-400`, the measured hover fill of hyper buttons.
- **Navy** (`{colors.navy}` — `#10162f`): Gamut `navy-800`, the brand's "black". Label color on yellow buttons, light-mode text, the "Join Pro" secondary button.
- **Light Green** (`{colors.light-green}` — `#aee938`): The mono "/career" hero word and a soft green glow shadow.
- **Light Blue** (`{colors.light-blue}` — `#66c4ff`): Mono accent headings inside link banners ("Transform your team with technical training").
- **Blue** (`{colors.blue}` — `#1557ff`): Gamut `blue-500`; the 18px glow around the hero sign-up panel and its 1px border.
- **Pink** (`{colors.pink}` — `#f966ff`): Gamut `pink-400`; appears at 50% alpha in decorative fills.

### Surface
- **Canvas** (`{colors.canvas}` — `#000000`): The homepage background (largest painted area).
- **Navy 900** (`{colors.navy-900}` — `#0a0d1c`): Card and section-panel fill on the dark homepage.
- **Navy** (`{colors.navy}` — `#10162f`): Secondary panel fill (e.g. the header strip of the "All Access Pass" card).
- **White Tint** (`{colors.white-tint}` — `#ffffff0a`): Gamut `white-100` (4% white), the fill of the large dark prompt input.
- **White Hover** (`{colors.white-hover}` — `#ffffff17`): Gamut `white-200` (9% white), the hover fill of text buttons on dark.
- **Hairline Dark** (`{colors.hairline-dark}` — `#ffffff33`): Gamut `white-300` (20% white), 1px borders of cards and inputs on dark — the most common border color on the page.
- **Beige** (`{colors.beige}` — `#fff0e5`): Light-mode page canvas on `/pricing` and `/login`.
- **Pale Yellow** (`{colors.pale-yellow}` — `#fffae5`): Gamut `yellow-0`, small highlight fills.
- **White** (`{colors.white}` — `#ffffff`): Light-mode cards and inputs; social sign-in button.

### Text
- **Ink** (`{colors.ink}` — `#ffffff`): The most-read text color on the homepage (dark mode `text`).
- **Ink Secondary** (`{colors.ink-secondary}` — `#ffffffa6`): Gamut `white-600` (65%), dark-mode `text-secondary` — meta lines, captions.
- **Navy 600** (`{colors.navy-600}` — `#10162fbf`): Light-mode `text-secondary` (75% navy).
- **Navy 500** (`{colors.navy-500}` — `#10162fa1`): Light-mode `text-disabled` (63% navy); measured on the disabled "Log in" button.
- **Navy 300** (`{colors.navy-300}` — `#10162f47`): 28% navy, measured as the 1px border of pricing cards (Gamut `border-tertiary`).
- **Navy 200** (`{colors.navy-200}` — `#10162f1f`): 12% navy, `background-disabled` fill.
- **Navy 700** (`{colors.navy-700}` — `#10162fdb`): 86% navy, the `secondary-hover` fill measured on "Join Pro".

### Semantic
Gamut defines feedback aliases per color mode in [`themes/core.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/themes/core.ts). All of these hexes are shipped as `--color-*` variables on the live site:
- **Error (light)** (`{colors.red-600}` — `#be1809`) — `feedback-error` in light mode.
- **Error (dark)** (`{colors.red-300}` — `#e85d7f`) — `feedback-error` in dark mode.
- **Danger** (`{colors.red}` — `#e91c11`) — `danger` fill in light mode.
- **Success (light)** (`{colors.green-700}` — `#008a27`) — `feedback-success` in light mode; dark mode uses light green `#aee938`.
- **Warning** — `yellow` `#ffd300` in light mode, `yellow-0` `#fffae5` in dark mode.

## Typography

### Font Family

Two families are loaded from `codecademy.com/gamut/` (`apercu-*-pro.woff2`, `SuisseIntlMono-Regular-WebS.woff2`, `SuisseIntlMono-Bold-WebS.woff2`):

- **Apercu** (Apercu Pro, Colophon Foundry) — Gamut's `fontFamily.base`. Measured stack: `Apercu, -apple-system, "system-ui", "Segoe UI", Roboto, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif`. Used for body, buttons, nav, the hero headline, and all light-mode titles. 4374 of ~5800 measured characters on the homepage.
- **Suisse** (Suisse Int'l Mono, Swiss Typefaces; served under the `@font-face` name `Suisse`) — Gamut's `fontFamily.accent`, stack `"Suisse", "Apercu", -apple-system, …`. Used for section headings, the hero's slash word, the "Our learners work at" kicker, subject-tile labels and the large prompt input. 1444 characters.
- **Monaco** — Gamut's `fontFamily.monospace` (`Monaco, Menlo, "Ubuntu Mono", "Droid Sans Mono", Consolas, monospace`) for code; only a few characters on the homepage (the countdown timer in the promo banner).

Weights in use are only **400** and **700** (Gamut `fontWeight.base` and `fontWeight.title`).

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| `{typography.display-hero}` | Apercu | 76px | 400 | 91.2px | Homepage h1 "Develop your" |
| `{typography.display-hero-mobile}` | Apercu | 24px | 400 | 28.8px | Homepage h1 at 390px width |
| `{typography.title-xl}` | Apercu | 44px | 700 | 52.8px | `/pricing` h1 "Find a plan that fits your goals" |
| `{typography.title-md}` | Apercu | 26px | 700 | 39px | `/login` h1 "Log in to Codecademy" |
| `{typography.title-sm}` | Apercu | 22px | 700 | 28.6px | Pricing plan names ("Basic") |
| `{typography.accent-heading}` | Suisse | 26px | 400 | 33.8px | Homepage h2/h3 ("Live Bootcamps and Workshops", "Top courses") |
| `{typography.accent-input}` | Suisse | 22px | 400 | 33px | Large dark prompt input |
| `{typography.body-lg}` | Apercu | 18px | 400 | 27px | Hero supporting paragraph |
| `{typography.body}` | Apercu | 16px | 400 | 24px | Default body, nav links, footer |
| `{typography.body-sm}` | Apercu | 14px | 400 | — | Card meta, small print |
| `{typography.button-lg}` | Apercu | 18px | 700 | 27px | Hero CTA "More ways to sign up" |
| `{typography.button}` | Apercu | 16px | 700 | 24px | Standard buttons, light-mode links |
| `{typography.button-sm}` | Apercu | 14px | 700 | — | Gamut `size="small"` buttons |

Gamut's official font-size scale ([`variables/typography.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/typography.ts)) is exactly `64, 44, 34, 26, 22, 20, 18, 16, 14` px — all of 44/34/26/22/20/18/16/14 were measured on the site. The 76px hero is a marketing override outside the scale.

### Principles
- Line-height tokens in Gamut are `base: 1.5`, `spacedTitle: 1.3`, `title: 1.2`. The measured values match: 16px/24px and 18px/27px are 1.5; 26px/33.8px and 22px/28.6px are 1.3; 76px/91.2px and 44px/52.8px are 1.2.
- No tracking: every measured element has `letter-spacing: normal`, and Gamut's typography guide states "Do not adjust letterspacing" ([Typography.mdx](https://github.com/Codecademy/gamut/blob/main/packages/styleguide/src/lib/Foundations/Typography.mdx)).
- Gamut's guide asks for ~66-character lines (45–85 acceptable), left-aligned paragraphs, and type boxes placed on the 8px grid.
- Mono is used as a *voice* rather than for code: it makes headings feel like they were typed at a terminal.

### Note on Font Substitutes
Apercu Pro and Suisse Int'l Mono are commercial typefaces, self-hosted by Codecademy under license. If you cannot license them, keep the exact fallback stack Gamut ships (`-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, …`) for Apercu, and use a geometric-grotesk monospace for the Suisse role; for code use Gamut's own monospace stack (`Monaco, Menlo, "Ubuntu Mono", …`). Substitutes change metrics, so recheck heading wraps at 76px.

## Layout

### Spacing System
Gamut's spacing scale ([`variables/spacing.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/spacing.ts)) is `0, 4, 8, 12, 16, 24, 32, 40, 48, 64, 96` px, exposed as numeric keys (`p={16}`, `gap={24}`). Every step was measured on the homepage: paddings are dominated by 16px (89 uses), 8px, 4px, 24px, 96px and 32px; gaps by 24px, 16px, 32px and 40px.

### Grid & Container
- Desktop content is 1088px wide inside a 1280px viewport — 96px gutters on each side (the `96` spacing step).
- Gamut's container widths are `contentWidths.md = 1200px` and `contentWidths.max = 1440px` ([`variables/responsive.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/responsive.ts)).
- Subject tiles sit in a 4-column grid with 24px gaps; the bootcamp/all-access row is a two-card split (725px + 331px wide at desktop).
- Header height is 80px on desktop and 64px on mobile — exactly Gamut's `elements.headerHeight` `{ base: '4rem', md: '5rem' }`.

### Whitespace Philosophy
The dark homepage is dense near the top (banner, nav, overlapping hero and sign-up panel within the first viewport) and then breathes in long black bands between card sections (96px and 144px vertical padding measured). Cards themselves are compact — 32px padding — so the rhythm is "tight cards, generous black between".

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Nearly everything on dark — depth comes from fill steps (`#000000` → `#0a0d1c` → `#10162f`) and `#ffffff33` hairlines |
| Glow (blue) | `rgb(21, 87, 255) 0px 0px 18px 2px` | Hero sign-up panel |
| Glow (green) | `rgba(174, 233, 56, 0.314) 0px 10px 100px 0px` | Feature imagery halo |
| Drop | `rgba(0, 0, 0, 0.25) 0px 5px 10px 0px` | Floating course cards in the bootcamp illustration |
| Gamut hover lift | `-8px 8px 0 0` in `shadow-primary`, `translate(4px, -4px)` | Card elevation scale from [`variables/elevation.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/elevation.ts) |

### Decorative Depth
Gamut's signature depth is a **hard offset shadow**, not a blur: the core elevation scale moves a card up-right by 4px and paints an 8px solid shadow in the mode's `shadow-primary` (navy in light mode, white in dark). The `CTAButton` uses the same idea — `-4px 4px 0 0` in text color at rest, `-8px 8px 0 0` on hover ([`Button/shared/variants.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut/src/Button/shared/variants.ts)). On the homepage, depth is mostly atmospheric: blue and lime glows and a dotted pattern backdrop behind the "Build skills" section.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Nav buttons, footer |
| `{rounded.sm}` | 2px | Gamut `sm`; measured on 3 small elements |
| `{rounded.md}` | 4px | Every button, inputs (Gamut `md`) |
| `{rounded.lg}` | 8px | Subject tiles, pricing cards (most frequent radius: 39 uses) |
| `{rounded.xl}` | 16px | Large dark cards, hero photo frame |
| `{rounded.tag}` | 100px | The "Live" pill tag |
| `{rounded.full}` | 999px | Gamut `full`, circular elements |

Gamut's official radius tokens are `none 0px, sm 2px, md 4px, lg 8px, xl 16px, full 999px` ([`variables/borderRadii.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/borderRadii.ts)). Split-radius variants are measured too: `16px 16px 0px 0px` on the prompt input and card headers, `8px 8px 0px 0px` / `0px 0px 8px 8px` on stacked tiles.

### Photography Geometry
Hero photography is a wide landscape image cropped into a 16px-radius rectangle, with type blocks (black boxes behind the headline) and the sign-up panel overlapping its edges — the photo is a stage, not a background.

## Components

### Buttons
Gamut's `FillButton` defines: `border: 2px solid transparent`, `border-radius: md (4px)`, weight `title (700)`, size `normal` = 16px font, 40px height, `py 4 / px 16`; `small` = 14px, 32px, `py 4 / px 8`; `large` = 18px, 56px ([`variants.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut/src/Button/shared/variants.ts)). The site matches the normal size exactly.

- **Primary (dark)** — `{components.button-primary}`: `#ffd300` fill, `#10162f` text, 16px/700 Apercu, `4px 16px`, 40px tall, 4px radius. Hover → `#cca900` (`{components.button-primary-hover}`), transition 150ms ease-in (Gamut `timing.fast`).
- **Primary hero** — `{components.button-primary-large}`: same fill, 18px/700, 48px tall (a site override; Gamut's own `large` is 56px).
- **Primary (light)** — `{components.button-primary-light-mode}`: `#3a10e5` fill, white text; hover `#5533ff`. Measured on `/pricing` ("Try Pro for free") and `/login`.
- **Secondary** — `{components.button-secondary}`: navy `#10162f` fill, white text ("Join Pro" in the yellow banner); hover to `#10162fdb`.
- **Text on dark** — `{components.button-text-on-dark}`: transparent, white text ("Log In" in the header); hover gets a `#ffffff17` fill and yellow text.
- **Social** — `{components.button-social}`: white fill, navy text, 2px white border, 48px ("Sign up with Google"); hover inverts to `#ffffff17` fill with white text.
- **Disabled** — `{components.button-disabled}`: `#10162f1f` fill and `#10162fa1` text (measured on `/login`, matching Gamut `background-disabled` / `text-disabled`).
- **Focus** — Gamut draws a separate outline ring: an absolutely positioned 2px border at `inset: -5px` with 8px radius in the variant color, fading in on `:focus-visible`.

### Cards & Containers
- **Dark card** — `{components.card-dark}`: `#0a0d1c`, 1px `#ffffff33` border, 16px radius, 32px padding (bootcamp and All-Access cards).
- **Light card** — `{components.card-light}`: white, 1px `#10162f47` border, 8px radius (pricing add-on list).
- **Subject tile**: dark 8px-radius tile with a line icon at left and a two-line mono label — repeated in a 4-column grid.
- Gamut's `Card` offers `default / white / yellow / beige / navy / hyper` variants and `shadow="outline" | "patternLeft" | "patternRight"` ([`Card/styles.tsx`](https://github.com/Codecademy/gamut/blob/main/packages/gamut/src/Card/styles.tsx)).

### Inputs & Forms
- **Text input (light)** — `{components.text-input}`: white, navy text, 1px `#10162f` border, 4px radius, 50px tall, `12px 0px 12px 8px` padding, Apercu 16px (measured on `/login`). Gamut's `formFieldStyles` set `py 12 / px 8`, `border: 1`, `borderRadius: md`.
- **Focus** — `{components.text-input-focus}`: border becomes `primary` plus `inset 0 0 0 1px` in primary (effectively a 2px violet border). Hover also sets `borderColor: primary`. Error swaps to `feedback-error`. Placeholder is italic. Transition 350ms ease-in-out (Gamut `slow`). Source: [`Form/styles/shared-system-props.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut/src/Form/styles/shared-system-props.ts).
- **Prompt input (dark)** — `{components.prompt-input-dark}`: full-width 1088px field, `#ffffff0a` fill, `#ffffff33` hairline, `16px 16px 0px 0px` radius, generous `32px 56px 32px 32px` padding, Suisse 22px.

### Navigation
- 80px header on black, logo mark at left, menu triggers "Catalog ▾ / Live Courses ▾ / Resources ▾ / Pricing ▾ / Teams", then search icon, "Log In" text button and yellow "Sign Up" fill button at right.
- Nav items are 16px/400 white; hover turns text **and** the underline border yellow `#ffd300` (light mode: navy → hyper `#3a10e5`).
- A full-width yellow promo banner sits above the header: navy bold text, a monospace countdown in a white box, a navy "Join Pro" button and a close ×.

### Pills, Tags, and Chips
- The "Live" tag is a 100px-radius outlined pill with a waveform icon and mono label, sitting above card headings.
- Tabs ("Top subjects / Certification prep") follow Gamut's standard tab list: a 1px rule in text color under the whole row ; in the capture the active tab ("Top subjects") carries a thicker yellow underline ([`Tabs/styles.tsx`](https://github.com/Codecademy/gamut/blob/main/packages/gamut/src/Tabs/styles.tsx)).

### Signature Components
- **Typed hero**: Apercu line in a black box + mono slash-word line in lime, both overlaid on photography.
- **Glowing sign-up panel**: black panel with 1px blue border and an 18px blue glow, white Google button, dotted "OR" divider, yellow "More ways to sign up" button, paragraph at right.
- **Promo popover**: hyper `#3a10e5` card with white bold uppercase title, white body and yellow underlined link.
- **Logo strip**: "Our learners work at" in mono, followed by monochrome white company marks.

## Design System Architecture

Codecademy publishes its system openly as **Gamut** — monorepo [github.com/Codecademy/gamut](https://github.com/Codecademy/gamut), Storybook docs at [gamut.codecademy.com](https://gamut.codecademy.com).

### Token architecture
- **Primitive tier — swatches**: `coreSwatches` in [`variables/colors.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/colors.ts) define hue scales with numeric steps: `navy-800: #10162F`, `navy-900: #0A0D1C`, `yellow-500: #FFD300`, `yellow-400: #CCA900`, `hyper-500: #3A10E5`, `hyper-400: #5533FF`. Navy 100–700 and white 100–700 are **alpha** steps of a single color (`rgba(navy, 0.04)` … `rgba(navy, 0.86)`), which is why the site's secondary text and borders are translucent.
- **True colors**: `trueColors` give names to key swatches — `beige`, `blue`, `green`, `hyper`, `lightBlue`, `lightGreen`, `navy`, `paleYellow`, `yellow`, `black`, `white` …
- **Semantic tier — color modes**: [`themes/core.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/themes/core.ts) maps aliases per mode: `text`, `text-accent`, `text-secondary`, `text-disabled`, `background`, `background-primary`, `background-hover`, `primary`, `primary-hover`, `primary-inverse`, `secondary`, `danger`, `interface`, `border-primary|secondary|tertiary`, `feedback-error|success|warning`, `shadow-primary|secondary`. Light: `primary → hyper-500`; dark: `primary → yellow-500`, `background → navy-800`, `background-contrast → black`.
- **Component tier**: components consume only semantic aliases (e.g. `FillButton` uses `bg: variant`, hover `bg: ${variant}-hover`, text `color: 'background'`). That is why the same button is yellow-on-navy on the homepage and violet-on-white on `/pricing` — no separate component code.
- **Delivery to CSS**: tokens are compiled by `@codecademy/variance` (`createTheme().addColors().addColorModes().build()`) into CSS custom properties; the live site exposes them on `:root` as `--color-navy-800`, `--color-primary: var(--color-hyper-500)`, `--color-text-secondary: var(--color-navy-600)`, `--color-background-primary: var(--color-beige)`, `--elements-headerHeight: 4rem`.

### Theming
- **Color modes**: `light` and `dark`, switched with the `<ColorMode mode="light|dark|system">` component; `system` follows the user's OS preference ([ColorMode.mdx](https://github.com/Codecademy/gamut/blob/main/packages/styleguide/src/lib/Foundations/ColorMode/ColorMode.mdx)).
- **Background auto-contrast**: `<Background bg="…">` checks the contrast between a section's fill and the current mode's text color and switches the mode inside it if contrast fails, exposing the chosen fill as `background-current`.
- **Brand themes**: `coreTheme` is the base every theme extends; `platformTheme` (learning environment, adds code-editor syntax colors, dark default), `adminTheme` (primary → `blue-500`), `lxStudioTheme` and `percipioTheme` (Skillsoft products, primary sapphire `#1C50BB`, Skillsoft Sans/Text fonts, medium 500 title weight) — see [`themes/`](https://github.com/Codecademy/gamut/tree/main/packages/gamut-styles/src/themes).
- No density modes are documented.

### Type & spacing systems
- Font-size scale `64/44/34/26/22/20/18/16/14` px, line heights `1.5 / 1.3 / 1.2`, weights `400/700`, families `base` (Apercu), `accent` (Suisse), `monospace`, `system` ([`typography.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/typography.ts)).
- 4px-based spacing `0–96` with an **8px placement grid** for type boxes and layout ([Typography.mdx](https://github.com/Codecademy/gamut/blob/main/packages/styleguide/src/lib/Foundations/Typography.mdx)).
- Breakpoints `xs 480 / sm 768 / md 1024 / lg 1200 / xl 1440` as mobile-first `min-width` media queries **and** container queries (`c_xs` … `c_xl`) ([`responsive.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/responsive.ts)). Responsive props accept objects like `{ _: 16, md: 24 }`.
- Motion timing `fast 150ms / medium 200ms / base 300ms / slow 350ms` ([`timing.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut-styles/src/variables/timing.ts)).

### Component model
Components are Emotion styled components built with `variance` `variant()` / `states()` helpers; buttons share `buttonVariants = ['primary', 'secondary', 'danger', 'interface']` and sizes `normal | small | large` ([`Button/shared/styles.ts`](https://github.com/Codecademy/gamut/blob/main/packages/gamut/src/Button/shared/styles.ts)). Docs are organized in atomic tiers (from [`packages/styleguide/src/lib`](https://github.com/Codecademy/gamut/tree/main/packages/styleguide/src/lib)):
- **Atoms**: Badge, Buttons (Button, CTAButton, FillButton, IconButton, StrokeButton, TextButton), Card, Drawer, FeatureShimmer, Form elements (Form, FormGroup, label, description, required text), Form inputs (Checkbox, Input, Radio, Select, SelectDropdown, TextArea), Icons, Illustrations, Loaders (Shimmer, Spinner), Patterns, PopoverContainer, ProgressBar, RadialProgress, SkipToContent, Tag, Toggle.
- **Molecules**: Alert, Breadcrumbs, Coachmark, Disclosure, Flyout, Menu, Modals (Dialog, Modal, Overlay), Pagination, Popover, Tabs, Tips (InfoTip, PreviewTip, ToolTip), Toasts, Video.
- **Organisms**: BarChart, ConnectedForm, DatePicker, GridForm, DataList / DataTable.
- **Layouts**: Box, FlexBox, GridBox, ContentContainer, LayoutGrid.

### Accessibility
- Semantic aliases exist so that "colors map to a new color that is accessible for the mode by default"; `Background` enforces an accessible text/background contrast automatically ([ColorMode.mdx](https://github.com/Codecademy/gamut/blob/main/packages/styleguide/src/lib/Foundations/ColorMode/ColorMode.mdx)).
- Buttons render a dedicated `:focus-visible` outline ring (2px, inset −5px, 8px radius); inputs show a doubled primary border on focus; disabled controls use `cursor: not-allowed` with `text-disabled` / `background-disabled`.
- `SkipToContent` and `FocusTrap` are first-class components (the homepage starts with a "Skip to Content" link).
- Minimum interactive sizes are encoded in button sizes: 40px normal, 32px small (`minWidth` equal to height).

### Delivery
- npm: `@codecademy/gamut` (components, v73.x), `@codecademy/gamut-styles` (tokens, themes, ColorMode), `@codecademy/gamut-icons`, `@codecademy/gamut-illustrations`, `@codecademy/gamut-patterns`, `@codecademy/variance` (typed CSS-in-JS), bundled by `@codecademy/gamut-kit` ([README](https://github.com/Codecademy/gamut/blob/main/README.md)). MIT licensed.
- Framework: React + Emotion; Storybook (MDX) docs.
- Versioning: NX monorepo with NX Release version plans (semver per package).
- Figma: a "[U+1F4D0] Gamut" Figma library linked from component docs, a published Gamut Figma Make kit, Code Connect and Figma Dev Mode MCP guidance ([AI Tooling/Figma](https://github.com/Codecademy/gamut/blob/main/packages/styleguide/src/lib/Meta/AI%20Tooling/Figma/About.mdx)). A separate Brand Library storybook exists for branded/internal assets ([Brand.mdx](https://github.com/Codecademy/gamut/blob/main/packages/styleguide/src/lib/Meta/Brand.mdx)).

## Do's and Don'ts

### Do
- Use `{colors.primary}` `#ffd300` for filled actions on dark surfaces and `{colors.hyper}` `#3a10e5` on light ones — never both on one surface.
- Label yellow buttons in navy `#10162f`, bold 700, 16px; keep the 4px radius and 2px (transparent) border.
- Darken on hover to the measured next step (`#cca900`, `#5533ff`, `#10162fdb`) — no opacity tricks on fills.
- Use Suisse Int'l Mono for section headings and slash-prefixed hero words; Apercu for everything you read.
- Build depth with fill steps `#000000 → #0a0d1c → #10162f` and `#ffffff33` hairlines.
- Keep letter-spacing `normal` everywhere.
- Snap spacing to `4/8/12/16/24/32/40/48/64/96`.
- Express secondary text as translucent white (`#ffffffa6`) on dark or translucent navy (`#10162fbf`) on light, as Gamut does.

### Don't
- Don't put yellow text on white or hyper fills on black — the color modes exist precisely to avoid those pairs.
- Don't round buttons into pills; only tags use 100px.
- Don't add soft gray drop-shadows to cards; Gamut's elevation is a hard offset or nothing (the homepage uses glows only on hero elements).
- Don't introduce weights other than 400 and 700.
- Don't use mono for long paragraphs.
- Don't invent intermediate font sizes outside `76/44/34/26/22/20/18/16/14`.
- Don't center long body copy.

## Responsive Behavior

### Breakpoints

| Name | Min width | Notes |
|---|---|---|
| base | 0 | Header 64px, single column |
| xs | 480px | |
| sm | 768px | |
| md | 1024px | Header 80px |
| lg | 1200px | `contentWidths.md` |
| xl | 1440px | `contentWidths.max` |

### Touch Targets
Buttons are 40px tall (normal) and 48px for the hero CTA on both desktop and mobile; inputs are 50px. Gamut's small size (32px) is reserved for dense UI.

### Collapsing Strategy
- At 390px the hero h1 drops from 76px to 24px (`{typography.display-hero-mobile}`, 28.8px line height) while body text stays at 18px/27px and the hero CTA keeps 18px/700 at 48px.
- The header shrinks to 64px (Gamut `headerHeight.base` 4rem).
- Mono section headings stay at 26px/33.8px (measured h2 at 390px).

### Image Behavior
Only the desktop capture was inspected; the hero photo there is cropped into a 16px-radius frame. Mobile image behavior was not measured, so follow Gamut's responsive props rather than inventing a rule.

## Iteration Guide

1. Start with the mode: dark (`#000000` canvas, white ink, yellow primary) for marketing hero pages, light (`#fff0e5` canvas, navy ink, hyper primary) for transactional pages.
2. Set Apercu 16px/24px as body and add the 76px/91.2px hero; add Suisse 26px/33.8px for section headings.
3. Build buttons from `{components.button-primary}` and verify 40px height, `4px 16px` padding, 4px radius.
4. Wrap content at 1088px with 96px side gutters on a 1280px viewport.
5. Use `{components.card-dark}` for feature blocks: `#0a0d1c`, 16px radius, `#ffffff33` hairline, 32px padding.
6. Add only one accent color per block (lime for the hero word, light blue for banner headings).
7. Check hover states: yellow → `#cca900`, nav text → `#ffd300`, text buttons gain `#ffffff17` fill.
8. When in doubt, read the token from Gamut's source rather than eyeballing — the live site ships the same `--color-*` variables.
