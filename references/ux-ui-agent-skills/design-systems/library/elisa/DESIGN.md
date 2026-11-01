---
version: alpha
name: Elisa
category: "Design Systems"
description: "Elisa (Finnish telecom) consumer web design as built on the Elisa Design System (EDS): Jost headings and buttons with Open Sans body copy, a #005fed action blue and #00239d brand blue on a #fdfdfd canvas, #171c43 navy ink, 4px-radius uppercase buttons, 8px photo cards with a soft 4px 13px shadow, and saturated blue hero fields with arc-cut photography."

colors:
  canvas: "#fdfdfd"
  ink: "#171c43"
  ink-strong: "#000000"
  primary: "#005fed"
  primary-hover: "#064aac"
  primary-active: "#2b81f8"
  on-primary: "#ffffff"
  brand-blue: "#00239d"
  surface-tint: "#deedff"
  surface-grey: "#f6f6f7"
  border-input: "#8d8d95"
  border-card: "#d2d2d6"
  error: "#e0022a"
  success: "#008253"
  discount: "#ffaf38"

typography:
  display:
    fontFamily: "\"Jost Regular\", sans-serif"
    fontSize: 28.8261px
    fontWeight: 400
    lineHeight: 41.5652px
    letterSpacing: "-0.25px"
  display-mobile:
    fontFamily: "\"Jost Regular\", sans-serif"
    fontSize: 25px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.25px"
  body:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Jost Medium\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"Jost Medium\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 0.5px
    textTransform: uppercase
  nav:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Open Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: "-0.25px"

rounded:
  xs: 4px
  sm: 8px
  md: 16px
  pill: 9999px

spacing:
  s1: 2px
  s2: 2.4px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 22px
  s9: 24px
  s10: 30px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 30px
    height: 46px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.brand-blue}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 10px 22px
    height: 40px
    borderColor: "{colors.on-primary}"
  input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 11px 16px
    height: 48px
    borderColor: "{colors.border-input}"
  card-photo:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 13px 0px
  card-outlined:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.border-card}"
  link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
    padding: 12px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-blue}"
  nav-link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-blue}"
    padding: 48px 32px 16px
---

## Overview

The Elisa homepage (elisa.fi, Finnish-language, measured at 1280px and 390px) is a consumer telecom storefront built from Elisa's own design system. The page opens on a thin utility row ("Yksityisille", "Yrityksille", "Elisa Oyj" at left; "sv" and "en" at right), then a 122px white header with the lowercase Elisa script wordmark in brand blue, five dropdown menus (Laitteet, Liittymät, Palvelut, Tuki, OmaElisa) and four stacked icon-plus-label tools: Hae (search), Ostoskori (cart), Siirry and Kirjaudu (log in). Under the header is a hero: a saturated ultramarine field on the left carrying a white Jost headline, "Tietoturvalla mielenrauhaa digiarkeen" ("peace of mind in digital life with security"), a short paragraph, and a white outlined-on-blue button "TUTUSTU JA TILAA"; on the right a photograph of an older man at a laptop, cut by a large arc. The photograph is the only thing that breaks the blue; the hero blue reads as a saturated ultramarine in the capture, but it was not extracted as a token, so no hex is claimed for it here.

Directly below the hero a white card strip floats over the hero's bottom edge with six icon-and-text shortcuts: Tarjoukset, Verkkokauppa, Liittymät, Elisa Viihde, Netti, Sähköposti. Next comes a pale-blue login band (`{colors.surface-tint}` #deedff) with the bold line "Asioi OmaElisassa ja voita Dreamen robotti-imuri!", a filled `{colors.primary}` button "KIRJAUDU OMAELISAAN", a small link "MIKSI KANNATTAA KIRJAUTUA?" with a chevron, and a robot-vacuum product shot on a blue slanted panel. The rest of the page is a two-column grid of 8px-radius cards: lifestyle photographs with white headline text over a dark gradient (Kuka soitti?, Liittymäturva osana puhelinliittymiä), partner product cards on saturated blue (Huawei 5G CPE H155 with price copy), a Samsung card on white, and a white card with a curved top edge for the Etuohjelma loyalty programme.

**Key Characteristics:**
- Two families with clear jobs: **Jost** for headings and interactive controls, **Open Sans** for reading text.
- One action blue, `{colors.primary}` (#005fed), used for the filled button; `{colors.brand-blue}` (#00239d) is the navigation, link and footer color.
- Navy ink `{colors.ink}` (#171c43) instead of black for reading text; pure `{colors.ink-strong}` black is a minor tier.
- Small, consistent corner radii (4px controls, 8px cards) with pill used only where the DS declares a full radius.
- Photography of ordinary people at home, large product cutouts, and generous whitespace; all headline copy is Finnish sentence case, buttons are uppercase.

## Colors

> **Source pages:** `https://elisa.fi/` (extracted at 1280px), the EDS Colour page `https://designsystem.elisa.fi/9b207b2c3/p/615f20-colour`, the site's `:root` custom properties (all `--eds-color-*`), and the Storybook button and input stories.

### Brand & Accent
- **Action blue** (`{colors.primary}` — #005fed): `--eds-color-background-button-primary-default` and EDS `color.blue.600`; the filled button in the login band and the focus outline (`--eds-focus-outline: 2px solid #005FED`, offset 2px).
- **Hover blue** (`{colors.primary-hover}` — #064aac): `--eds-color-background-button-primary-hover` (blue.700).
- **Active blue** (`{colors.primary-active}` — #2b81f8): `--eds-color-background-button-primary-active` (blue.500).
- **Brand blue** (`{colors.brand-blue}` — #00239d): the EDS page calls it "the core colour of Elisa's identity"; on elisa.fi it colors navigation, links and footer text and the secondary button label.
- **Tint** (`{colors.surface-tint}` — #deedff): blue.200, the pale band behind the login promotion.

### Surface & Border
- **Canvas** (`{colors.canvas}` — #fdfdfd): `--eds-color-background-primary` (off-white); it covers the page, header and footer.
- **Grey surface** (`{colors.surface-grey}` — #f6f6f7): `--eds-color-background-secondary`.
- **Input border** (`{colors.border-input}` — #8d8d95): 1px border on Storybook inputs.
- **Card border** (`{colors.border-card}` — #d2d2d6): 1px border on the outlined card.

### Text
- **Ink** (`{colors.ink}` — #171c43): `--eds-color-text-default`, the most-read text color (1702 character weight).
- **Ink strong** (`{colors.ink-strong}` — #000000): `--eds-color-text-strong`.
- **On primary** (`{colors.on-primary}` — #ffffff): text on filled blue and on photo gradients.

### Semantic
`{colors.error}` #e0022a (red.600), `{colors.success}` #008253 (green.600) and `{colors.discount}` #ffaf38 (yellow.400, which the EDS Colour page says is reserved for discounts). The page also says red is for error and danger, green for success and yellow for warnings. EDS states that colors are semantic variables that support a dark theme; only the light theme was measured.

## Typography

### Font Family
Headings use **Jost** (declared as `"Jost Regular"`, `"Jost Medium"`, `"Jost SemiBold"`, `"Jost Bold"` in `--eds-header-font-family*`); body text uses **Open Sans**. The EDS Typography page says: "Jost is our new primary typeface in digital products. It is used on all our heading styles and in interactive components," and "Open Sans is our main typeface for body texts. With a larger x-height, it ensures good readability even on small sizes." Both can be downloaded from Google Fonts, so no substitute is needed. The EDS migration notes confirm Jost replaced an earlier face named Verlag in newer Component Library versions.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 28.8261px | 400 | 41.5652px | -0.25px | Hero headline at a 1280×800 viewport |
| `{typography.display-mobile}` | 25px | 400 | 36px | -0.25px | Hero headline at 390px |
| `{typography.body}` | 16px | 400 | 24px | normal | Paragraphs and inputs |
| `{typography.button}` | 14px | 400 (Jost Medium) | 24px | 0.5px | Primary button, uppercase |
| `{typography.button-secondary}` | 13px | 400 (Jost Medium) | 16px | 0.5px | Secondary button, uppercase |
| `{typography.nav}` | 14px | 400 | 20px | normal | Header navigation |
| `{typography.link}` | 16px | 600 | 20px | -0.25px | Shortcut-strip links |

### Principles
- **Fluid headings.** The site's variables define `--eds-heading-2` as `calc(25px + 11 * (100vmin - 480px) / 920)` with line-height `calc(36px + 16 * (100vmin - 480px) / 920)`. At an 800px minimum viewport side that evaluates to 28.826px and 41.565px, which is exactly the measured hero headline; at 390px it floors at 25px/36px.
- **Fixed lower tiers.** `--eds-heading-4` is 18px/24px and `--eds-heading-5` is 16px/20px.
- **Uppercase controls.** Buttons are the only uppercase text; they carry 0.5px tracking.
- Body copy carries -0.25px letter-spacing in the measured data (928 character weight at 16px).

## Layout

### Spacing System
EDS defines an 8px `--eds-baseline` with named steps: 2px, 4px, 8px, 12px, 16px, 24px, 32px, 40px, 48px, 56px and 64px (`--eds-spacer-core-5xs` to `-3xl`). The measured paddings and gaps on the homepage land on the same ladder: 32px container padding (34 weight), 12px, 16px, 8px, 4px, and 10px gaps. The footer pads `48px 32px 16px`.

### Grid & Container
The EDS Grids and Spacing page defines layouts of 4, 6 and 12 columns: XS 0–480px has 4 columns, 16px margins; S 481–640px and M 641–960px have 6 columns, 24px margins; L 961–1399px has 12 columns, 32px margins. At 1280px the homepage cards sit in a two-column grid with a 32px outer margin.

### Whitespace Philosophy
The EDS Colour page describes Elisa's look as "generous white space with Brand Blue." The capture follows it: large white gaps between the shortcut strip, login band and card grid, with blue appearing in the hero and in individual product cards.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Header, footer, band |
| 1 | `rgba(0, 0, 0, 0.1) 0px 4px 13px 0px` | Photo cards (matches `--eds-boxshadow-card-desktop: 0 4px 13px 0`; mobile uses `0 4px 10px 0`) |
| Focus | `0px 0px 0px 2px #fff, 0px 0px 0px 4px #005FED` | Focus glow token |

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Buttons, inputs, outlined cards (EDS "base") |
| `{rounded.sm}` | 8px | Photo cards (EDS "double") |
| `{rounded.md}` | 16px | Link blocks (EDS "4x") |
| `{rounded.pill}` | 9999px | Fully rounded ends (EDS "full") |

The EDS Border radius page says the base 4px is the default, the 2px "half" is for very small elements and borders inside base-radius elements, and the 8px "double" is mostly used in focus styles.

## Components

### Buttons
**`button-primary`**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}` (Jost Medium 14px, uppercase), padding `10px 30px`, 46px tall, `{rounded.xs}` radius, 1px border in the same blue. Hover moves to `{colors.primary-hover}`, active to `{colors.primary-active}`. Measured on elisa.fi ("KIRJAUDU OMAELISAAN").
**`button-secondary`**: white fill with `{colors.brand-blue}` text, `{typography.button-secondary}` 13px, padding `10px 22px`, 40px tall. On elisa.fi it appears on the blue hero ("TUTUSTU JA TILAA"). The Storybook Button "colors" story shows the same 13px/40px geometry for red, blue and white buttons.

### Inputs
**`input`**: Storybook measurement: `{colors.canvas}` fill, 1px `{colors.border-input}` border, `{rounded.xs}`, padding `11px 16px`, 48px tall, Open Sans 16px in `{colors.ink}`. EDS defines `--eds-input-padding-vertical` and `-horizontal` variables for this.

### Cards
**`card-photo`**: 8px radius with the 13px soft shadow, full-bleed photography, white headline text over a dark gradient. **`card-outlined`**: Storybook "outlined" variant, 4px radius and a 1px `{colors.border-card}` border, no shadow.

### Navigation and footer
**`nav`**: 122px header on `{colors.canvas}` with `{colors.brand-blue}` labels at `{typography.nav}`. **`footer`**: `{colors.canvas}`, `{colors.brand-blue}` Jost Medium 16px links, padding `48px 32px 16px`.

## Design System Architecture

Elisa publishes its system as the **Elisa Design System (EDS)** at https://designsystem.elisa.fi, a Zeroheight site. The introduction describes EDS as "a product serving other products" for Elisa's designers and developers, made of Figma design components and templates, a React and CSS code library documented in Storybook, and the documentation site, and states that "EDS best supports online services and websites utilising the Elisa brand, such as Elisa.fi." The shipped site confirms it: elisa.fi's DOM carries `ds-` prefixed classes (`ds-card`, `ds-footer__link`, `ds-price`, `ds-h3`, `ds-text--m`) next to Next.js CSS-module classes, and its stylesheet declares 234 `--eds-*` custom properties.

Layers: primitive color tokens (`--eds-color-blue-600`, `-grey-250`, `-red-600`), semantic aliases (`--eds-color-background-button-primary-default`, `--eds-color-text-default`), a baseline-8px spacing scale, heading size and line-height formulas, radius, shadow and focus tokens. The Storybook at https://storybook.elisa.fi lists Design Tokens (Border Radius, Colors, Spacing, Typography) and a long component list from Accordion to Tooltip; its Button, Input and Card stories were measured (button: `{colors.primary}` and red/white variants at 13px/40px). The code repository https://github.com/elisa-design-system/component-library returns "Page not found" publicly (the EDS site says access is requested through Mattermost), so no repository files were read. The documentation also describes deprecated and migration paths (React Patterns, Pattern Library, Component Library) and a major-version list of Jost releases. Brand-level rules sit in a separate Brand Hub at https://brand.elisa.fi, which links to a Brand Book that was not opened.

## Do's and Don'ts

### Do
- Use Jost for headings and buttons and Open Sans for body text.
- Keep the filled `{colors.primary}` button to one per band and let hover shift to `{colors.primary-hover}`.
- Use `{colors.ink}` navy for reading text and `{colors.brand-blue}` for navigation.
- Round controls at 4px and photo cards at 8px; add the 13px soft shadow only to floating cards.
- Use buttons for actions and links for navigation, as the EDS Button page directs.

### Don't
- Don't use disabled buttons as a validation pattern; EDS says to show input validation errors instead.
- Don't write button labels like "Done" or "Ready"; the EDS Button page asks for the name of the action.
- Don't reserve `{colors.discount}` yellow for anything but discounts.
- Don't set body text in Jost or headings in Open Sans.

## Responsive Behavior

EDS grid breakpoints are 0–480, 481–640, 641–960, 961–1399 (and a larger XL tier not read here). The hero headline drops from 28.8px to 25px at 390px while keeping Jost Regular and -0.25px tracking. Heading formulas are viewport-relative, so intermediate widths interpolate rather than jump. Cards use a lighter mobile shadow (`0 4px 10px 0`). The mobile header layout was not captured in detail.

## Iteration Guide

1. Start from `{colors.canvas}` with `{colors.ink}` text; add Jost headings and Open Sans body.
2. Place one filled `{colors.primary}` button per section; use `{rounded.xs}` and uppercase Jost Medium.
3. Build cards at `{rounded.sm}` with the 13px soft shadow; use the EDS 8px baseline for spacing.
4. Check any new color against the `--eds-color-*` primitives before introducing it.
5. Re-run `node web/scripts/verify-designs.mjs --slug=elisa` after edits.
