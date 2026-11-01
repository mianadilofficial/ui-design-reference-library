---
version: alpha
name: Roblox
category: "Gaming"
description: "Roblox's logged-out web surface is a dark sign-up page — a #121215 form card and footer over a tilted mosaic of game thumbnails, all text set in the proprietary Builder Sans (300/400/500/700/800). Body ink is #f7f7f8 with #d5d7dd secondary, links are #70a0ff, the emphasis action is cobalt #335fff, and every button, field and card uses an 8px radius."

colors:
  primary: "#335fff"
  on-primary: "#f7f7f8"
  canvas: "#121215"
  surface-100: "#191a1f"
  surface-backdrop: "#212326"
  surface-300: "#272930"
  scrim: "#00000080"
  ink: "#f7f7f8"
  ink-secondary: "#d5d7dd"
  ink-muted: "#bcbec8"
  link: "#70a0ff"
  button-light: "#ffffff"
  button-light-text: "#272930"
  button-secondary-text: "#121215"
  action-standard: "#d0d9fb1f"
  field-fill: "#d0d9fb14"
  field-border: "#707070"
  stroke-contrast: "#d0d9fb66"
  divider: "#494d5a"
  alert: "#df281f"
  success: "#39c582"

typography:
  heading-page:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 32px
    fontWeight: 800
    lineHeight: 44.8px
  heading-page-mobile:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 24px
    fontWeight: 800
    lineHeight: 33.6px
  heading-section:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: -0.2px
    textTransform: uppercase
  body:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 16px
    fontWeight: 300
  input:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  body-sm:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 14px
    fontWeight: 300
  select-sm:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  label:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 12px
    fontWeight: 500
  legal:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 10px
    fontWeight: 500
    lineHeight: 15px
  legal-mobile:
    fontFamily: "\"Builder Sans\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif"
    fontSize: 8px
    fontWeight: 500
    lineHeight: 12px

rounded:
  none: 0px
  sm: 4px
  md: 8px
  lg: 16px
  circle: 9999px

spacing:
  xxs: 1px
  xs: 5px
  sm: 8px
  btn: 9px
  md: 12px
  card: 15px
  lg: 20px
  xl: 24px
  hero: 120px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 9px
    height: 30px
  button-signup:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.button-light-text}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px
    height: 36px
    border: "1px solid #ffffff"
  button-signup-disabled:
    opacity: 0.5
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px
    height: 36px
  button-standard:
    backgroundColor: "{colors.action-standard}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px
    height: 36px
  button-outlined:
    backgroundColor: "transparent"
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 9px
    height: 36px
    border: "1px solid #d5d7dd"
  button-outlined-hover:
    textColor: "{colors.ink}"
    border: "1px solid #f7f7f8"
  text-input:
    backgroundColor: "{colors.field-fill}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 5px 12px
    height: 38px
    border: "1px solid #707070"
  select-birthday:
    backgroundColor: "{colors.field-fill}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
    padding: 0px 32px 0px 8px
    height: 38px
  select-language:
    backgroundColor: "transparent"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.select-sm}"
    rounded: "{rounded.md}"
    padding: 1px 12px
    height: 40px
    border: "1px solid #d0d9fb66"
  card-signup:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 15px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body-sm}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
    padding: 12px
  footer-link-hover:
    textColor: "{colors.ink}"
---

## Overview

Roblox's public web front door (`www.roblox.com` for a logged-out visitor) is not a marketing page — it is a sign-up form. The viewport is filled by a tilted, full-bleed mosaic of game thumbnails (Jailbreak, Doors, Piggy, Dandy's World, Adopt Me!, Universe Football …) rotated roughly 30° and darkened under a scrim, with the white ROBLOX wordmark (the tilted-square "O") centred at the top and a single white **Log In** button pinned top-right. In the middle sits one dark card, `{colors.canvas}` (`#121215`), holding the whole conversion flow: uppercase heading, birthday selects, username, password, gender toggle, terms copy and a full-width **Sign Up** button.

Everything outside the card is dark too. Below the mosaic a row of store badges ("ROBLOX ON YOUR DEVICE": App Store, Google Play, PlayStation, Xbox, Meta Quest, Microsoft, Amazon Appstore, Galaxy Store) leads into a `#121215` footer with a single row of centred links, a hairline divider, a language select and 10px legal copy. The page has no light mode for a logged-out visitor.

The type is entirely **Builder Sans**, Roblox's proprietary platform face (announced on the DevForum in 2024 as the replacement for Gotham and Arial). It runs light — body copy is weight 300, labels and buttons 500, the card heading 700 uppercase, and the login page's H1 800.

Color is near-monochrome: off-white `{colors.ink}` (`#f7f7f8`) and a cool grey `{colors.ink-secondary}` (`#d5d7dd`) on near-black surfaces, with color only coming from (a) the game art in the mosaic, (b) inline links in `{colors.link}` (`#70a0ff`), and (c) the cobalt emphasis action `{colors.primary}` (`#335fff`) that the site's own tokens call `--color-action-emphasis-background` and that fills the "Sign Up" button in the login page header.

**Key Characteristics:**
- A single centred form card (`#121215`, 8px radius, 15px padding) is the entire page's content.
- Full-bleed tilted game-thumbnail mosaic under a scrim is the only imagery — the product's games are the hero.
- Builder Sans at light weights (300 body, 500 controls); the only uppercase is the 20px/700 card heading ("SIGN UP AND START HAVING FUN!").
- One radius everywhere: 8px (`{rounded.md}`) on buttons, inputs, selects and the card.
- Translucent cool-blue fills (`rgba(208,217,251,.08)` / `.12`) instead of grey for fields and secondary buttons — the "inverse" tokens of the site's system.
- The Sign Up submit ships disabled (opacity 0.5, `cursor: not-allowed`) until the form is valid.

## Colors

> Source pages: `https://www.roblox.com/` (extraction + probes) and `https://www.roblox.com/login` (extraction `roblox--login`). Token names in parentheses are the site's own CSS custom properties from `desktop.rootVars`.

### Brand & Action
- **Cobalt** (`{colors.primary}` — `#335fff`, `--color-action-emphasis-background`): the emphasis action. Fills the header **Sign Up** button on `/login`. It does not appear on the logged-out homepage, where the main action is the white form button.
- **On Cobalt** (`{colors.on-primary}` — `#f7f7f8`, `--color-action-emphasis-foreground`): label on cobalt.
- **Button Light** (`{colors.button-light}` — `#ffffff`) with **Button Light Text** (`{colors.button-light-text}` — `#272930`): the homepage form's Sign Up submit.
- **Link Blue** (`{colors.link}` — `#70a0ff`): inline links ("Terms of Use", "Privacy Policy") in the terms paragraph.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#121215`, `--dark-mode-surface-0`): the form card and the footer — the dark surface the viewer sees most.
- **Surface 100** (`{colors.surface-100}` — `#191a1f`, `--dark-mode-surface-100`): the computed `body` background.
- **Backdrop** (`{colors.surface-backdrop}` — `#212326`): the background covering the largest area in the extraction (the layer behind the thumbnail mosaic).
- **Surface 300** (`{colors.surface-300}` — `#272930`, `--dark-mode-surface-300`): raised dark surface; second-largest background on `/login`.
- **Scrim** (`{colors.scrim}` — `#00000080`): the 50%-black overlay that darkens the mosaic.

### Text
- **Ink** (`{colors.ink}` — `#f7f7f8`): primary text — headings, labels, terms copy, footer text. Most-read text color on the page.
- **Ink Secondary** (`{colors.ink-secondary}` — `#d5d7dd`): footer links, select values, input text, legal line.
- **Ink Muted** (`{colors.ink-muted}` — `#bcbec8`, `--dark-mode-system-neutral`): outlined button label on `/login`.
- **Button Secondary Text** (`{colors.button-secondary-text}` — `#121215`): label of the white-ish top-right Log In button.

### Fills & Strokes
- **Action Standard** (`{colors.action-standard}` — `#d0d9fb1f`, `--dark-mode-action-standard-background`, `rgba(208,217,251,.12)`): secondary buttons on `/login` ("Email Me a One-Time Code", "Quick Sign-in").
- **Field Fill** (`{colors.field-fill}` — `#d0d9fb14`, `rgba(208,217,251,.08)`): select and input fill.
- **Field Border** (`{colors.field-border}` — `#707070`): 1px border of the homepage username/password inputs.
- **Stroke Contrast** (`{colors.stroke-contrast}` — `#d0d9fb66`, `--dark-mode-stroke-contrast-alpha`, `rgba(208,217,251,.4)`): border of the footer language select.
- **Divider** (`{colors.divider}` — `#494d5a`, `--color-extended-gray-700`): footer hairline and borders.

### Semantic
- **Alert** (`{colors.alert}` — `#df281f`, `--dark-mode-system-alert` / `--color-system-alert`).
- **Success** (`{colors.success}` — `#39c582`, `--color-system-success`).
Both are defined in the served CSS variables; neither is visible on the logged-out page without triggering validation.

## Typography

### Font Family
**Builder Sans** is served as a webfont at weights 300, 400, 500, 700 (homepage) and 800 (login page). The computed stack is `"Builder Sans", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif`. The stylesheet also declares `@font-face` for **Builder Extended** (the expressive display subfamily) but no visible text on the logged-out page uses it.

Per the [DevForum announcement](https://devforum.roblox.com/t/2868222), the Builder family has three subfamilies — Builder Sans (platform font), Builder Extended (expressive), Builder Mono (Studio coding) — and replaced Gotham and Arial in the engine (removed May 28, 2024).

### Hierarchy

| Token | Size | Weight | Line height | Letter spacing | Measured on |
|---|---|---|---|---|---|
| `{typography.heading-page}` | 32px | 800 | 44.8px | — | `/login` H1 "Login to Roblox" |
| `{typography.heading-page-mobile}` | 24px | 800 | 33.6px | — | `/login` H1 at 390px |
| `{typography.heading-section}` | 20px | 700 | 28px | -0.2px, uppercase | "SIGN UP AND START HAVING FUN!" |
| `{typography.body}` | 16px | 300 | — | — | body / card text |
| `{typography.input}` | 16px | 400 | 22.4px | — | text inputs |
| `{typography.button}` | 16px | 500 | 16px | — | all buttons |
| `{typography.body-sm}` | 14px | 300 | — | — | terms paragraph, inline links |
| `{typography.select-sm}` | 14px | 400 | 19.6px | — | footer language select |
| `{typography.label}` | 12px | 500 | normal | — | form labels |
| `{typography.legal}` | 10px | 500 | 15px | — | copyright line |
| `{typography.legal-mobile}` | 8px | 500 | 12px | — | copyright line at 390px |

The homepage has no `<h1>`; the largest visible type is the 20px uppercase card heading. The served variables define a fuller scale — e.g. `--typography-display-medium-font: 700 … *14 /120% "Builder Sans"` (56px), `--typography-heading-medium-font: 700 … *6 /120%` (24px), `--typography-body-large-font: 400 … *4 /140%` (16px), `--typography-caption-small-font: 600 … *2.5 /140%` (10px) — but those styles are not all visible here, so only the measured roles are tokenised above.

### Principles
- **Light body, medium controls.** Paragraph text is 300; anything you tap is 500.
- **Uppercase only for the card title.** It is the single loud line on the page.
- **Display tracking is negative and tiny.** The variables set `-.01em` on display and heading tiers (`--typography-display-large-letter-spacing: -.01em`), which is the -0.2px measured at 20px.

### Note on Font Substitutes
Builder Sans is proprietary: the [Builder font license](https://create.roblox.com/docs/resources/builder-font-license) restricts it to creating and promoting UGC on Roblox. Outside that use the site's own fallback order applies — `"Helvetica Neue", Helvetica, Arial` — and that is the substitute this file uses. No official open-source substitute is named by Roblox.

## Layout

### Spacing System
- **Base unit**: 4px. The variables are literally built on it: `--size-100: calc(1px*4)`, `--size-300: calc(calc(1px*4)*3)`, `--size-500: calc(calc(1px*4)*5)`, `--radius-medium: calc(calc(1px*4)*2)`.
- **Measured spacing tokens**: `{spacing.xxs}` 1px · `{spacing.xs}` 5px · `{spacing.sm}` 8px · `{spacing.btn}` 9px · `{spacing.md}` 12px · `{spacing.card}` 15px · `{spacing.lg}` 20px · `{spacing.xl}` 24px · `{spacing.hero}` 120px.
- Gaps measured: 8px (select row, badge row), 20px and 24px (between form groups).
- Buttons carry 9px padding on all sides at 36px height; inputs 5px 12px at 38px.

### Grid & Container
- One centred column: the form card is 465px wide (415px inner content at 15px padding × 2 + border).
- The badge row centres eight store badges with 8px gaps and wraps (Galaxy Store drops to a second line at 1280px).
- Footer links are one centred inline row; below a divider the language select sits left and legal copy right.
- Breakpoints defined in the variables: `--breakpoint-small: 600px`, `--breakpoint-medium: 1140px`, `--breakpoint-large: 1520px`, `--breakpoint-xlarge: 1920px`.

### Whitespace Philosophy
The page is dense inside the card and empty everywhere else — the mosaic does the visual work, and there is no copy outside the card apart from the badge heading. Inside the card, label-to-field spacing is tight and group-to-group spacing is 20–24px.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat `{colors.canvas}` | card, footer |
| Inset | `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset` | form fields (measured `boxShadows`) |
| Overlay | `{colors.scrim}` `#00000080` | darkens the mosaic behind the card |

Depth comes from the photographic mosaic receding under a scrim, not from drop shadows — the card itself carries no shadow. The served CSS does define shadow tokens (e.g. `0 4px 16px rgba(0,0,0,.4)` and `--alpha-light-mode-shadow-subtle: rgba(0,0,0,.08)`) for other surfaces.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | links, footer, mosaic |
| `{rounded.sm}` | 4px | `--radius-small` |
| `{rounded.md}` | 8px | every button, input, select, the form card (`--radius-medium`) |
| `{rounded.lg}` | 16px | `--radius-large` |
| `{rounded.circle}` | 9999px | `--radius-circle: calc(1px*9999)` |

Segmented controls split the 8px radius: the birthday select row and gender toggle use `8px 0px 0px 8px` on the first segment and `0px 8px 8px 0px` on the last (measured `borderRadii`).

### Imagery Geometry
The thumbnails in the mosaic are square-ish tiles with small rounded corners, rotated as a group so that rows run diagonally; several tiles carry outline-only diamond frames. The wordmark's tilted square "O" echoes that rotation.

## Components

### Buttons

**`button-primary`** — cobalt emphasis button (header "Sign Up" on `/login`).
- `{colors.primary}` background, `{colors.on-primary}` text, `{typography.button}`, `{rounded.md}`, padding 6px 9px, 30px tall.

**`button-signup`** — homepage form submit.
- `{colors.button-light}` background with a 1px `#ffffff` border, `{colors.button-light-text}` text, `{typography.button}`, `{rounded.md}`, 9px padding, 36px tall, full card width (415px).
- **`button-signup-disabled`**: ships at opacity 0.5 with `cursor: not-allowed` until the form is valid (probe recorded in SOURCES.json) — that is the grey bar in the capture.

**`button-secondary`** — top-right **Log In**.
- `{colors.ink}` (`#f7f7f8`) background, `{colors.button-secondary-text}` text, `{rounded.md}`, 9px padding, 36px tall, 140px wide.

**`button-standard`** — translucent secondary on `/login` ("Email Me a One-Time Code").
- `{colors.action-standard}` background, `{colors.ink}` text, `{rounded.md}`, 9px padding, 36px.

**`button-outlined`** — `/login` "Log In" submit.
- Transparent, 1px `#d5d7dd` border, `{colors.ink-muted}` text; **`button-outlined-hover`** turns text and border to `#f7f7f8` (measured hover).

### Inputs & Forms

**`text-input`** — username / password.
- `{colors.field-fill}` fill, 1px `{colors.field-border}` border, `{colors.ink-secondary}` text, `{typography.input}`, `{rounded.md}`, padding 5px 12px, 38px tall. Placeholders: "Don't use your real name", "At least 8 characters".

**`select-birthday`** — Month / Day / Year.
- `{colors.field-fill}` fill, 16px/300 text, padding `0px 32px 0px 8px` to leave room for a white chevron SVG, 38px tall; the three selects join into one segmented bar.

**`select-language`** — footer locale picker.
- Transparent, 1px `{colors.stroke-contrast}` border, `{typography.select-sm}`, padding 1px 12px, 40px tall, `{rounded.md}`.

**Gender toggle** — two equal icon-only segments inside a 1px bordered bar, same segmented radius as the birthday row.

Labels use `{typography.label}` (12px/500, `{colors.ink}`).

### Cards

**`card-signup`** — the only card.
- `{colors.canvas}` background, `{colors.ink}` text, `{rounded.md}`, 15px padding, 465px wide, no shadow.

### Links

**`link`** — inline links in body copy.
- `{colors.link}` (`#70a0ff`), `{typography.body-sm}`, underlined in the capture. On `/login`, white links gain `text-decoration: underline` on hover (measured).

### Navigation & Footer
There is no navigation bar for a logged-out visitor on the homepage — only the centred wordmark and the Log In button.

**`footer`** — `{colors.canvas}` background, 12px padding, links in `{colors.ink-secondary}` at 14px. **`footer-link-hover`**: links change `#d5d7dd` → `#f7f7f8` on hover (measured on every footer link). Link set: About Us, Jobs, Newsroom, Parents, Buy Gift Cards, Help, Terms, Accessibility, Privacy, Your Privacy Choices, Sitemap.

### Store badges
Official black store badges with white outlines, laid out in one row under the uppercase 20px/700 heading "ROBLOX ON YOUR DEVICE".

## Design System Architecture

Roblox publishes **no public web design system documentation**: searches for a Roblox design-system site, token package, GitHub repo or Figma kit found none (searches recorded in `SOURCES.json`). The only official design documents found concern the typeface — the [Builder font announcement](https://devforum.roblox.com/t/2868222) and the [Builder font license](https://create.roblox.com/docs/resources/builder-font-license). Everything below is therefore the **de-facto system measurable on `www.roblox.com`**: the ~400 CSS custom properties it serves on `:root`.

### Token architecture (as served)
- **Primitive tier — `--color-extended-*`**: a numbered palette per hue, e.g. `--color-extended-gray-100: #f7f7f8`, `--color-extended-gray-700: #494d5a`, `--color-extended-gray-1000: #202227`, `--color-extended-orange-500: #fa945a`, `--color-extended-magenta-500: #e88bf8`, plus alpha ramps like `--color-extended-white-40` and `--color-extended-black-60`. 125 of these are served.
- **Semantic tier — role names**: `--color-action-{emphasis|standard|subtle|utility|link|sub-emphasis}-{background|foreground|border}`, `--color-content-{default|muted|emphasis}`, `--color-surface-{0|100|200|300}`, `--color-stroke-{muted|default|emphasis}`, `--color-system-{alert|success|neutral|contrast|emphasis}`, `--color-common-{backdrop|scrim|shadow}`.
- **Mode tiers**: every semantic role exists three times — `--light-mode-*`, `--dark-mode-*` and `--inverse-*` (e.g. `--dark-mode-surface-0: #121215`, `--dark-mode-action-emphasis-foreground: #f7f7f8`, `--inverse-action-standard-background: rgba(208,217,251,.12)`). The unprefixed `--color-*` set resolves to one of them.
- **Size tier**: `--size-{50…3000}` where the number is hundredths of 4px (`--size-100: calc(1px*4)`, `--size-500: calc(calc(1px*4)*5)`); radii `--radius-{none|small|medium|large|circle}`; `--icon-size-*`, `--input-size-*`, `--toggle-size-*`.
- **Type tier**: composite font shorthands per role and size, `--typography-{display|heading|title|body|label|caption}-{large|medium|small}-font`, each with a matching `-letter-spacing`, plus `--font-size-*` and `--font-weight-*` primitives.
- **Motion**: `--ease-standard`, `--ease-expressive-in` (`cubic-bezier(.25,0,.5,-1)`).

### Theming
Light and dark exist as parallel `--light-mode-*` / `--dark-mode-*` variable sets; the logged-out page renders the dark set (body `#191a1f`, card `#121215`). A `--config-uiscale` / `--platform-scale` pair suggests a scale factor in the calc chain, but how either is switched is not documented publicly, so this file does not describe a mechanism.

### Type & spacing systems
4px base unit expressed in the calc expressions themselves; type sizes are multiples of 4px × n (e.g. `*3.5` = 14px, `*14` = 56px) with line heights of 100%, 120% or 140% by tier.

### Component model
No official component inventory is published. On this page the measured components are: buttons (emphasis, light, secondary, standard, outlined), text input, select, segmented control, card, link, footer.

### Accessibility
No published accessibility rules. Measured: the page offers a "Skip to Main Content" link on `/login`; primary text `#f7f7f8` on `#121215` is very high contrast; the disabled submit relies on opacity 0.5.

### Delivery
No npm package, Figma library or versioned release of the web system was found.

## Do's and Don'ts

### Do
- Put the conversion form in a single `{colors.canvas}` card with `{rounded.md}` corners and 15px padding.
- Use `{colors.ink}` for primary text and `{colors.ink-secondary}` for secondary text on dark surfaces.
- Fill fields and secondary buttons with translucent cool-blue (`{colors.field-fill}`, `{colors.action-standard}`), not opaque grey.
- Use Builder Sans 300 for paragraphs and 500 for controls.
- Keep every interactive element at 8px radius and 36–38px height.
- Use real game art as the backdrop, darkened under `{colors.scrim}`.
- Brighten text on hover (`#d5d7dd` → `#f7f7f8`) instead of adding underlines or color shifts for footer links.

### Don't
- Don't introduce a light canvas on the logged-out surface.
- Don't use `{colors.primary}` cobalt for body text; it is an action fill.
- Don't make the card heading mixed-case or lighter than 700.
- Don't use pill-shaped buttons — the measured system uses 8px.
- Don't add drop shadows to the card; depth comes from the scrimmed mosaic.
- Don't substitute Gotham — Roblox retired it in favour of Builder.

## Responsive Behavior

### Breakpoints (from served variables)

| Name | Width |
|---|---|
| small | 600px |
| medium | 1140px |
| large | 1520px |
| xlarge | 1920px |

### Measured at 390px
- The Sign Up submit shrinks to 32px tall with 7px padding (desktop: 36px / 9px).
- Legal copy drops from 10px/15px to `{typography.legal-mobile}` 8px/12px.
- `/login` H1 drops from 32px to `{typography.heading-page-mobile}` 24px/33.6px.
- The 20px uppercase card heading, 16px body and 14px links keep their sizes.

### Touch Targets
Buttons are 36px (desktop) / 32px (mobile) tall and inputs 38px; no official touch-target rule is published.

### Collapsing Strategy
The card becomes the full content width; the badge row wraps; the footer link row wraps to multiple lines.

## Iteration Guide

1. Start every screen from `{colors.canvas}` `#121215` with `{colors.ink}` text.
2. Reference tokens by name (`{colors.primary}`, `{rounded.md}`, `{typography.button}`).
3. Buttons: 16px/500 Builder Sans, 8px radius, 9px padding, 36px tall; choose fill by role (cobalt emphasis, light, translucent standard, outlined).
4. Fields: `{colors.field-fill}` + 1px border + 8px radius, 38px tall.
5. Disabled = opacity 0.5 + `cursor: not-allowed`.
6. Keep the uppercase 20px/700 style for at most one heading per view.
7. Re-run `node web/scripts/verify-designs.mjs --slug=roblox` after edits.
