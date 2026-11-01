---
version: alpha
name: EasyPost
category: "Logistics & Mobility"
description: "EasyPost (easypost.com), the shipping API company, presents a white-canvas marketing site set entirely in Poppins (700 hero at 48px, 600 display at 56px, 500 section titles at 38px), deep navy text (#061340) with slate body copy (#47547f), mint filled CTAs (#99f5df with navy labels, 8px radius, 15px 20px padding) beside electric-blue (#4671fe) outlined buttons, and 12px-radius white cards with a 1px #e2e7f0 border — values that track its open-source Easy UI token palette."

colors:
  primary: "#99f5df"
  on-primary: "#061340"
  canvas: "#ffffff"
  ink: "#061340"
  ink-body: "#47547f"
  body-default: "#444444"
  brand-blue: "#4671fe"
  blue-500: "#164dff"
  link: "#164cff"
  blue-400: "#4571ff"
  blue-200: "#a2b8ff"
  blue-100: "#d0dbff"
  surface-tint: "#f1f5ff"
  footer-socket: "#b3c5ff"
  surface-grey: "#f8f8f8"
  card-border: "#e2e7f0"
  purple: "#9f39ed"
  purple-400: "#b261f1"
  green-500: "#00e5ae"
  green-400: "#33eabe"
  red: "#f95c59"
  white: "#ffffff"
  scrim: "#000000b3"

typography:
  display-hero:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52.8px
  display-hero-mobile:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 34px
    fontWeight: 700
    lineHeight: 37.4px
  display-xl:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 56px
    fontWeight: 600
    lineHeight: 66px
  heading-lg:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 38px
    fontWeight: 500
    lineHeight: 41.8px
  body-md:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  body-sm:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  nav-link:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
  announcement-link:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
  button-lg:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  button-md:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  button-sm:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 30px
  micro:
    fontFamily: "poppins, Helvetica, Arial, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 26.4px

rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  card: 12px
  xxl: 20px
  huge: 24px

spacing:
  xxs: 3px
  xs: 4px
  sm: 7px
  md: 10px
  base: 12px
  btn-y: 15px
  lg: 16px
  xl: 20px
  xxl: 40px
  section: 50px
  section-lg: 64px
  gap-xl: 70px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-md}"
    rounded: "{rounded.lg}"
    padding: 15px 20px
    height: 51px
  button-primary-lg:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-lg}"
    rounded: "{rounded.lg}"
    padding: 16px 40px
    height: 61px
  button-primary-sm:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.lg}"
    padding: 0px 10px
    height: 30px
  button-secondary:
    textColor: "{colors.brand-blue}"
    typography: "{typography.button-md}"
    rounded: "{rounded.lg}"
    border: "2px solid #4671fe"
    padding: 15px 20px
    height: 53.2px
  button-outline-purple:
    textColor: "{colors.purple}"
    typography: "{typography.button-md}"
    rounded: "{rounded.md}"
    border: "2px solid #9f39ed"
    padding: 15px 20px
    height: 53.2px
  button-login:
    backgroundColor: "{colors.white}"
    textColor: "{colors.brand-blue}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.lg}"
    border: "1px solid #4671fe"
    padding: 0px 10px
    height: 30px
  card:
    backgroundColor: "{colors.white}"
    textColor: "{colors.ink-body}"
    typography: "{typography.body-md}"
    rounded: "{rounded.card}"
    border: "1px solid #e2e7f0"
    padding: 20px
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav-link}"
    height: 90px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body-md}"
  footer-socket:
    backgroundColor: "{colors.footer-socket}"
    textColor: "{colors.white}"
    typography: "{typography.micro}"
    height: 56px
---

## Overview

EasyPost's marketing site (measured at https://www.easypost.com/, title "The Simple Shipping API - EasyPost") is a clean, white, SaaS-style page in which almost every surface is white (`{colors.canvas}` #ffffff) and color is carried by type and buttons. Everything is set in one family, Poppins, from the 48px / 700 hero to the 11px legal line.

The top of the page has a thin announcement bar ("See how much you could save on shipping. Click here to get your free Luma AI Savings Estimate in minutes. →") with the link set in 16px / 700 electric blue. Below it, the header holds the EasyPost cube logo, dropdown menus (Products, Solutions, Integrations, Resources), "Pricing", a small outlined "Log in" button and a small mint "Contact sales" button.

The hero is left-aligned: a purple-tinted "Enhanced with Luma AI" badge, a two-line 48px / 700 headline in `{colors.brand-blue}` #4671fe ("AI-powered logistics that move…"), a short paragraph, then an outlined blue "Sign up free" button and a filled mint "Contact sales" button. On the right, a faint globe with network lines and hexagonal icons. At measurement time a promotional modal ("Luma AI savings estimator") covered the hero with a dark scrim (`{colors.scrim}` #000000b3); it is not part of the base page.

Further down, feature rows alternate image-left / text-right: product UI mockups (an "EasyPost Insurance" claims table with green "Approved" pills), carrier logo tiles on a pale-blue hexagon, and stat cards outlined in lavender ("$2M+ saved", "$50M+ in savings"). Each text block has a colored eyebrow ("EasyPost Insurance API", "Luma AI Savings Estimator", "EasyPost Wallet"), a 38px / 500 navy heading, slate body copy, sometimes a bullet list with bold blue lead-ins, and one or two buttons.

**Key Characteristics:**
- White canvas; pale blue `{colors.surface-tint}` #f1f5ff panels behind some feature rows.
- Navy ink `{colors.ink}` #061340 for headings and most text; slate `{colors.ink-body}` #47547f for card text.
- Filled CTAs are mint `{colors.primary}` #99f5df with navy labels — not blue.
- Secondary CTAs are outlined in electric blue #4671fe (2px) or, for the Luma AI product, purple #9f39ed.
- Poppins throughout: 700 hero, 600 display, 500 headings and buttons, 400 body.
- 8px button radius, 12px card radius, 1px #e2e7f0 card border.
- The marketing palette lines up with EasyPost's published Easy UI tokens (navy = `color-blue-800` #061340, mint = `color-green-200` #99F5DF, slate = `color-gray-600` #47547F).

## Colors

All hex values below were measured on https://www.easypost.com/ (computed styles, CSS corpus). Where a value also exists in EasyPost's open-source token file (https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/src/color/base.json) the Easy UI name is given.

### Brand & Accent
- **Primary (mint)** `{colors.primary}` #99f5df — fill of every "Contact sales", "Learn more", "Protect your shipments" button. Easy UI `color-green-200` #99F5DF.
- **On primary** `{colors.on-primary}` #061340 — navy label on mint.
- **Brand blue** `{colors.brand-blue}` #4671fe — hero h1, h2 ("Are you ready for peak?"), outlined button text and borders, the announcement link, the "Log in" outline. Easy UI's nearest token is `color-blue-400` #4571FF, which also appears on the site as text (`{colors.blue-400}`); the live site's dominant value is #4671fe and that is what is declared.
- **Blue 500** `{colors.blue-500}` #164dff — bold lead-ins in bullet lists and blue text. Easy UI `color-blue-500` #164DFF.
- **Link** `{colors.link}` #164cff — measured color of content links (case-study cards).
- **Purple** `{colors.purple}` #9f39ed — Luma AI accent: eyebrow, outlined "Get my savings estimate" button. Easy UI `color-purple-500` is #9F39EE (ΔE negligible; live value declared).
- **Purple 400** `{colors.purple-400}` #b261f1 — Easy UI `color-purple-400`.
- **Green 500 / 400** `{colors.green-500}` #00e5ae, `{colors.green-400}` #33eabe — measured text and border colors (status/accents). Easy UI `color-green-500` / `color-green-400`.
- **Red** `{colors.red}` #f95c59 — measured text/border accent (Easy UI `color-red-500` is #FB5C59).

### Surface
- **Canvas** `{colors.canvas}` #ffffff — largest background area by far.
- **Surface tint** `{colors.surface-tint}` #f1f5ff — pale blue section panels.
- **Surface grey** `{colors.surface-grey}` #f8f8f8 — small measured area.
- **Footer socket** `{colors.footer-socket}` #b3c5ff — the bottom legal bar.
- **Blue 200 / 100** `{colors.blue-200}` #a2b8ff, `{colors.blue-100}` #d0dbff — light borders and tints (Easy UI `color-blue-200`, `color-blue-100`).
- **Scrim** `{colors.scrim}` #000000b3 — modal overlay.

### Text
- **Ink** `{colors.ink}` #061340 — most-read text color (2149 weighted chars): headings, paragraphs, button labels, nav.
- **Ink body** `{colors.ink-body}` #47547f — second most-read (1483): card copy and secondary paragraphs. Easy UI `color-gray-600`.
- **Body default** `{colors.body-default}` #444444 — the `body` element's inherited color (rarely visible).

### Lines
- **Card border** `{colors.card-border}` #e2e7f0 — 1px border on white cards. Easy UI `color-gray-100` #E2E7F0.

## Typography

### Font Family
The site serves **Poppins** (`poppins, Helvetica, Arial, sans-serif`; the WordPress theme variable is `--enfold-font-family-heading: 'poppins',Helvetica,Arial,sans-serif`). Loaded weights: 300, 400, 500, 600, 700 plus italics 400/600/700. Poppins accounts for essentially all text (4295 of 4297 weighted characters).

EasyPost's Easy UI token file also declares `font-family-sans: Poppins, "Poppins Fallback"` (https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/src/font/base.json), so the marketing site and the product system share the family.

### Hierarchy (measured, desktop 1280px)

| Token | Size | Weight | Line height | Used for |
|---|---|---|---|---|
| `display-xl` | 56px | 600 | 66px | h2 promo heading "Are you ready for peak?" (#4671fe) |
| `display-hero` | 48px | 700 | 52.8px | h1 "AI-powered logistics that move…" (#4671fe) |
| `heading-lg` | 38px | 500 | 41.8px | feature headings "100+ Carriers, Easy Claims" (#061340) |
| `body-md` | 16px | 400 | 26.4px | most-used size; cards, paragraphs |
| `body-sm` | 15px | 400 | 24px | feature paragraphs (`bodyText` role) |
| `nav-link` | 15px | 400 | — | header menu items |
| `announcement-link` | 16px | 700 | — | announcement bar link |
| `button-lg` | 24px | 500 | 28.8px | large "Contact sales" |
| `button-md` | 16px | 500 | 19.2px | standard buttons |
| `button-sm` | 14px | 400 | 30px | header "Log in" / "Contact sales" |
| `micro` | 11px | 400 | 26.4px | footer socket legal text |

Other measured sizes without an isolated weight: 30px (153 chars), 18px, 24px, 36px, 12px. Letter spacing is `normal` everywhere measured.

### Mobile (390px)
| Token | Size | Weight | Line height |
|---|---|---|---|
| `display-hero-mobile` | 34px | 700 | 37.4px |
| `display-xl` (unchanged) | 56px | 600 | 66px |
| `body-sm` (unchanged) | 15px | 400 | 24px |
| `button-md` (unchanged) | 16px | 500 | 19.2px |

### Principles
- One family, weight does the hierarchy work: 700 for the single hero, 600 for big display, 500 for headings and buttons, 400 for reading.
- Line heights are 1.1 × size for display (52.8 / 48, 41.8 / 38) and 1.65 × for body (26.4 / 16).
- Colored eyebrow labels (blue or purple) sit above navy headings.

### Note on Font Substitutes
Poppins is open source (SIL OFL) and available from Google Fonts; no substitute is needed.

## Layout

### Spacing System
Measured gaps: 20px (18), 16px, 40px, 70px. Measured paddings: 3px (65), 4px (47), 12px (21), 7px (20), 20px (16), 50px (15), 15px (13), 16px (10), 10px (7), 70px, 64px. The very small 3px / 4px / 7px paddings come from logo strips and badges; 15px 20px is the button padding; 20px is card padding; 50px / 64px / 70px are section paddings.

Easy UI's own space scale is an 8px system (`space-1` 8px, `space-2` 16px, `space-3` 24px … `space-10` 80px; https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/src/space/base.json). The WordPress marketing site does not follow it strictly (15px, 7px, 50px, 70px appear).

### Grid & Container
The WordPress theme declares `--wp--style--global--wide-size: 1130px` and `--wp--style--global--content-size: 800px`. Feature rows are two columns (illustration and copy), alternating sides. Cards appear in three-up rows (388px wide at 1280px).

### Section Recipes (seen in the capture)
1. **Announcement bar** — full width, single centred line with a bold blue link and arrow.
2. **Header** — 90px tall; logo left, menus centre, small outlined + small filled buttons right.
3. **Hero** — badge, blue headline, paragraph, outlined + filled buttons, logo strip (Dell etc.) beneath.
4. **Feature row** — product mockup on one side; eyebrow + 38px heading + paragraph + bullets + one button on the other.
5. **Stat cluster** — lavender-outlined white cards with large blue/purple numbers on a soft purple gradient hexagon.

### Whitespace Philosophy
Generous horizontal whitespace, moderate vertical rhythm, content constrained to the centre. The page relies on white space and pale tints rather than dividers.

### Voice & Microcopy
Confident, outcome-oriented: "The industry's trusted shipping API", "Insure any shipment across 100+ carriers at a flat 1%", "$460k+ recovered", "Get GOFO before peak, without another contract." Buttons: "Sign up free", "Contact sales", "Protect your shipments", "Get my savings estimate", "Add a Wallet carrier".

### Motion
Hover states were probed on the filled, outlined and nav buttons; computed color, background, border and shadow were identical before and after hover in that probe (a promotional modal was open, which may have intercepted the pointer). No hover state is therefore declared.

## Elevation & Depth

The measured buttons and cards carry no box-shadow; cards are defined by the 1px #e2e7f0 border. The CSS corpus contains soft blue-tinted shadows such as `0px 4px 8px 0px rgba(112, 134, 178, 0.27)`, `0 0 12px 0 rgba(6, 19, 64, 0.10)` and `0px 0px 20px 0px rgba(17, 58, 191, 0.08)`, and the capture shows a soft shadow under the insurance mockup cards, but these were not tied to specific elements by the extraction.

Easy UI defines its product elevation scale in tokens (https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/src/shadow/base.json): `shadow-level.1` `0px 1px 8px 0px hsla(226, 28%, 39%, 0.25)`, `level.2` `0px 1px 10px 0px hsla(226, 28%, 39%, 0.4)`, `level.3` `0px 1px 12px 0px hsla(226, 28%, 39%, 0.6)`, `overlay` `0px 4px 8px rgba(141, 158, 193, 0.25)`, `modal` `0px 8px 16px 0px hsla(220, 23%, 28%, 0.5)`, and `button` `0px 0px 0px 3px rgba(69, 132, 255, 0.4)`.

### Decorative Depth
Faint line-art globes, network lines, blue hexagon icons and soft lavender gradient hexagons behind stat cards.

## Shapes

### Border Radius Scale

| Token | Value | Measured on |
|---|---|---|
| `xs` | 3px | 22 elements (status pills, badges) |
| `sm` | 4px | 2 elements |
| `md` | 6px | "Protect your shipments", purple outlined button |
| `lg` | 8px | all standard buttons and header buttons |
| `xl` | 10px | 21 elements |
| `card` | 12px | white bordered cards |
| `xxl` | 20px | 2 elements |
| `huge` | 24px | 5 elements |

A one-sided `0px 6px` radius (20 elements) and a `35px 35px 0px 0px` top-only radius also appear. Easy UI's shape tokens are `border_radius-sm` 2px, `md` 4px, `lg` 8px, `xl` 16px (https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/src/shape/base.json); the marketing button radius (8px) equals `lg`.

### Hexagons
Hexagon outlines are a recurring decorative motif (the cube logo, hexagon icons, hexagon backdrops behind logo tiles and stats). They are illustrations, not CSS clip-paths.

## Components

### Buttons

**`button-primary`** — "Contact sales", "Learn more".
- Background `{colors.primary}` #99f5df, text `{colors.on-primary}` #061340, `{typography.button-md}` 16px / 500 / 19.2px.
- Padding 15px 20px, height 51px, radius `{rounded.lg}` 8px, no border.
- "Protect your shipments" uses the same fill with a 6px radius.

**`button-primary-lg`** — large "Contact sales": 24px / 500 / 28.8px, padding 16px 40px, height 61px, radius 8px.

**`button-primary-sm`** — header "Contact sales": 14px / 400 / 30px, padding 0px 10px, height 30px, radius 8px.

**`button-secondary`** — "Sign up free", "Add a Wallet carrier".
- Transparent background, text `{colors.brand-blue}` #4671fe, border 2px solid #4671fe, padding 15px 20px, height 53.2px, radius 8px, 16px / 500.

**`button-outline-purple`** — "Get my savings estimate" (Luma AI).
- Transparent, text #9f39ed, border 2px solid #9f39ed, padding 15px 20px, height 53.2px, radius 6px.

**`button-login`** — header "Log in": white background, text #4671fe, 1px solid #4671fe border, 14px / 400 / 30px, padding 0px 10px, height 30px, radius 8px.

Easy UI's documented Button API (https://github.com/EasyPost/easy-ui/blob/main/documentation/specs/Button.md) has colors `primary | secondary | success | warning | neutral | support | inverse`, variants `filled | outlined | link`, sizes `sm | md`, plus `isDisabled`, `isBlock`, `iconAtStart`, `iconAtEnd`, `href`. The marketing buttons are WordPress-theme buttons, not Easy UI React components.

### Cards & Containers

**`card`** — white feature card ("Delivery seven days a week…").
- Background #ffffff, text `{colors.ink-body}` #47547f, `{typography.body-md}`, border 1px solid #e2e7f0, radius 12px, padding 20px, 388px × 260px.

### Inputs & Forms
No input was present on the measured homepage, so no input component is declared. Easy UI documents `TextField`, `Textarea`, `Select`, `MultiSelect`, `Checkbox`, `RadioGroup`, `Toggle` and `DatePicker` specs in its repository.

### Navigation

**`nav`** — header 90px tall on desktop (80px on mobile). Menu items "Products", "Solutions", "Integrations", "Resources" (with chevrons) and "Pricing" in 15px / 400 Poppins, #061340, padding 0px 10px. Right side: `button-login` and `button-primary-sm`.

**Announcement bar** — above the header; link text 16px / 700 in #4671fe.

### Links

**`link`** — content links #164cff, 16px / 400 / 26.4px.

### Footer

**`footer-socket`** — the bottom legal bar: background #b3c5ff, text #ffffff, 11px / 400 / 26.4px, 56px tall ("© Simpler Postage 2026. | Manage…").

## Design System Architecture

EasyPost publishes an open-source design system, **Easy UI** — "a design system for building consistent experiences at EasyPost" (https://github.com/EasyPost/easy-ui, MIT license). It targets the product ("shaping the shipper experience"); the marketing site measured here is a WordPress build whose `:root` variables come from the theme (`--enfold-*`, `--wp--preset--*`), so Easy UI describes the brand's system rather than the marketing site's CSS. The marketing colors nevertheless reuse Easy UI's palette values (#061340, #99F5DF, #47547F, #E2E7F0, #164DFF).

- **Token architecture.** Decision record 004 (https://github.com/EasyPost/easy-ui/blob/main/documentation/decisions/004_design_tokens.md, accepted 2023-02-09) adopts design tokens with **Style Dictionary** and defines three tiers: *Global tokens* ("primitive values … context-agnostic names"), *Alias tokens* ("relate to a specific context"), and *Component-specific tokens*. Global color names follow `color-{hue}-{step}` with steps 025, 050, 100–900, e.g. `color-blue-800: #061340`, `color-blue-500: #164DFF`, `color-green-200: #99F5DF`, `color-gray-600: #47547F`, `color-purple-500: #9F39EE`. CSS output is prefixed `--ezui-` (e.g. `var(--ezui-color-blue-100)`), SCSS `$ezui-` (https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/README.md).
- **Theming.** Decision 008 (https://github.com/EasyPost/easy-ui/blob/main/documentation/decisions/008_support_theming.md) uses a context-driven, nestable `<ThemeProvider />`/`<EasyUIProvider colorScheme="dark" | "light">` that maps theme configuration to CSS variables, supports `prefers-color-scheme` without flash, and nesting. The light theme (https://github.com/EasyPost/easy-ui/blob/main/easy-ui-tokens/src/theme/light.json) aliases `primary` → blue, `secondary` → purple, `positive` → green, `negative` → red, `alert` → orange, `warning` → yellow.
- **Type & spacing.** `font-family-sans: Poppins, "Poppins Fallback"`; numbered font sizes `font-size-100` 15px, `font-size-125` 16px, `font-size-200` 19px, `font-size-300` 23px, `font-size-400` 33px, `font-size-500` 46px; line heights 16/24/32/40/56/64/72px; weights 300–700; letter spacing steps from `tighten_6` -1.5px to `widen_6` 1.5px (font/base.json). Space scale on an 8px base with half steps (`space-0.5` 4px, `space-1` 8px, `space-1.5` 12px, `space-2` 16px …). Breakpoints `sm` 480px, `md` 640px, `lg` 1024px, `xl` 1360px, `xxl` 1920px (breakpoint/base.json). A decision record titled `007_support_responsive_props` exists in the same folder.
- **Component model.** Each component has a spec in `documentation/specs/`. Inventory (specs): AlertBadge, Badge, Banner, Box, Button, Calendar, Card, CheckableCard, Checkbox, CodeBlock, CodeSnippet, CustomerPortalLayout, DataGrid, DatePicker, Drawer, DropdownButton, EmptyStateCard, FocusedProductLayout, ForgeLayout, FormLayout, HorizontalGrid, HorizontalStack, Icon, IconButton, Menu, Modal, MultiSelect, NexusLayout, Notification, Pagination, PillGroup, Popover, ProductLayout, RadioButtonGroup, RadioGroup, SearchNav, SectionCard, Select, Spinner, SplitToggleCard, Stepper, TabNav, TabPanels, Table, Text, TextField, Textarea, Theme, Toggle, ToggleCard, Tooltip, VerticalNav, VerticalStack. The decision log also contains records titled `011_unstyled_button`, `012_page_layouts` and `014_react_aria_components_for_overlays`.
- **Accessibility.** The token set includes a `shadow-button` ring `0px 0px 0px 3px rgba(69, 132, 255, 0.4)` and `shadow-input` ring `0px 0px 0px 3px rgba(1, 70, 130, 0.25)`; no contrast target or touch-target rule was found in the files opened.
- **Delivery.** npm packages `@easypost/easy-ui` (React components), `@easypost/easy-ui-icons` (SVG files and React icon components; the token file separately declares `font-family-icon: "Material Symbols Outlined"`), `@easypost/easy-ui-tokens` (JS/CSS/SCSS/JSON outputs). Versioned with Changesets (the repo has a `.changeset` folder and `changes:*` scripts; decision record `010_use_changesets`); public Storybook on Chromatic (https://main--63f50c7c86f6514d2e0ef4be.chromatic.com/, linked as the repo homepage). No public Figma kit was found.

## Do's and Don'ts

### Do
- Keep the canvas white and use #f1f5ff only for occasional panels.
- Use mint #99f5df with navy #061340 text for the primary action.
- Pair it with a 2px #4671fe outlined secondary button of the same size.
- Set everything in Poppins; use weight, not family, for hierarchy.
- Put a colored eyebrow (blue or purple) above each 38px / 500 navy feature heading.
- Use 8px radius on buttons and 12px with a 1px #e2e7f0 border on cards.
- Use navy #061340 for headings and slate #47547f for supporting text.
- Reuse Easy UI token values when you need a shade the page does not show.

### Don't
- Don't make the filled CTA blue — the measured fill is mint.
- Don't use pill-shaped buttons.
- Don't use black text; the darkest text is navy #061340.
- Don't mix in a second typeface.
- Don't add heavy shadows to cards; borders do the separation.
- Don't use purple outside the Luma AI product context; it marks that product.
- Don't invent hover colors; none were measured.

## Responsive Behavior

### Breakpoints
The marketing site's breakpoints were not captured. Easy UI declares `sm` 480px, `md` 640px, `lg` 1024px, `xl` 1360px, `xxl` 1920px for product UI.

### Measured changes (1280px → 390px)
| Element | Desktop | Mobile |
|---|---|---|
| h1 | 48px / 52.8px | 34px / 37.4px |
| h2 promo | 56px / 66px | 56px / 66px |
| Feature paragraph | 15px / 24px | 15px / 24px |
| Primary CTA | 152px wide, 51px tall | 200px wide, 51px tall |
| Header | 90px | 80px |

Mobile size frequencies: 16px (1988), 14px (995), 15px (474), 34px (249), 30px (208), 18px, 24px, 11px, 12px, 56px, 20px.

### Touch Targets
Main buttons are 51–61px tall. Header buttons are 30px tall on desktop.

### Collapsing Strategy
Text measures 332px wide on mobile; the header measures 80px. Row layout was not measured.

### Image Behavior
Product mockups and logo tiles scale within their column; decorative globes and hexagons sit behind content.

## Iteration Guide

1. White canvas, Poppins loaded at 400/500/600/700.
2. Header: logo, 15px navy menu items, a 30px outlined "Log in" and a 30px mint "Contact sales".
3. Hero: 48px / 700 blue headline, short paragraph, outlined blue + mint buttons (15px 20px padding, 8px radius).
4. Feature rows: mockup + eyebrow + 38px / 500 navy heading + 15px / 24px paragraph + one mint button.
5. Cards: white, 1px #e2e7f0, 12px radius, 20px padding, #47547f text.
6. Close with a #b3c5ff legal socket in 11px white text.

### Common Mistakes When Recreating EasyPost
- Making the primary CTA electric blue.
- Using #4571ff (Easy UI blue-400) when the live headline color is #4671fe.
- Setting headings in 700 everywhere — feature headings are 500.
- Using rounded pills or large card radii.
- Treating the Luma AI modal and scrim as part of the page.
