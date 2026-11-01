---
version: alpha
name: Maersk
category: "Logistics & Mobility"
description: "Maersk (maersk.com), the integrated container-logistics company, builds its site on the Maersk Design System — proprietary Maersk Headline at light 300 weight (50px hero, 40px sections) over Maersk Text 16px/24px, near-black #141414 filled buttons (hover #363636) with a 5px radius and 7px 16px padding, white 8px-radius cards bordered #dbdbdb, link blue #0073ab, the brand sky-blue #42b0d5 as secondary, and full-bleed photography under a dark gradient header."

colors:
  primary: "#141414"
  primary-hover: "#363636"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  canvas-subtle: "#f7f7f7"
  ink: "#141414"
  ink-muted: "#545454"
  ink-button-light: "#353535"
  link: "#0073ab"
  brand-blue: "#42b0d5"
  secondary-text: "#0077b2"
  navy: "#00243d"
  feedback-coral: "#fa6a55"
  border-card: "#dbdbdb"
  border-input: "#cfcfcf"
  border-outline-dark: "#d4d4d4"
  border-subtle: "#ededed"
  hover-neutral: "#ededed"
  hover-neutral-mds: "#f0f0f0"
  white-80: "#ffffffcc"
  white-20: "#ffffff33"
  on-dark-90: "#ffffffe6"
  focus-ring: "#d1ecf5"
  error: "#b80012"
  success: "#40ab35"
  warning: "#ffd029"
  info: "#005986"

typography:
  headline-large:
    fontFamily: "\"Maersk Headline\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 50px
    fontWeight: 300
    lineHeight: 56px
  headline-large-mobile:
    fontFamily: "\"Maersk Headline\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 38px
    fontWeight: 300
    lineHeight: 38px
  headline-medium:
    fontFamily: "\"Maersk Headline\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 40px
  headline-medium-mobile:
    fontFamily: "\"Maersk Headline\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 26px
    fontWeight: 300
    lineHeight: 32px
  headline-x-small:
    fontFamily: "\"Maersk Headline\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  text-large:
    fontFamily: "\"Maersk Text\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  text-medium:
    fontFamily: "\"Maersk Text\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav-text:
    fontFamily: "\"Maersk Text\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  text-small:
    fontFamily: "\"Maersk Text\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  text-x-small:
    fontFamily: "\"Maersk Text\", Arial, -apple-system, BlinkMacSystemFont"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px

rounded:
  xs: 2px
  sm: 4px
  button: 5px
  md: 6px
  lg: 8px
  xl: 12px
  xxl: 16px
  xxxl: 24px
  full: 9999px

spacing:
  xxs: 4px
  xs: 6px
  sm: 8px
  md: 12px
  base: 16px
  lg: 24px
  xl: 48px
  xxl: 64px
  grid-gap: 24px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.text-medium}"
    rounded: "{rounded.button}"
    padding: 7px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-button-light}"
    typography: "{typography.text-medium}"
    rounded: "{rounded.button}"
    padding: 7px 16px
    height: 40px
  button-light-hover:
    backgroundColor: "{colors.white-80}"
  button-outline-on-dark:
    textColor: "{colors.on-primary}"
    typography: "{typography.text-medium}"
    rounded: "{rounded.button}"
    border: "1px solid #d4d4d4"
    height: 40px
  button-outline-on-dark-hover:
    backgroundColor: "{colors.white-20}"
    border: "1px solid #ffffff"
  button-login:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.text-medium}"
    rounded: "{rounded.md}"
    border: "1px solid #ffffff"
    padding: 6px 12px
    height: 38px
  button-login-hover:
    backgroundColor: "{colors.hover-neutral}"
  button-ask:
    textColor: "{colors.on-dark-90}"
    typography: "{typography.nav-text}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 36px
  text-input:
    textColor: "{colors.ink-button-light}"
    typography: "{typography.text-medium}"
    rounded: "{rounded.button}"
    border: "1px solid #cfcfcf"
    padding: 12px 44px 12px 48px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.text-medium}"
    rounded: "{rounded.lg}"
    border: "1px solid #dbdbdb"
    width: 400px
    height: 262px
  nav:
    backgroundImage: "linear-gradient(rgb(40, 40, 40), rgba(40, 40, 40, 0))"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-text}"
    padding: 0px 24px
    height: 114px
  link:
    textColor: "{colors.link}"
    typography: "{typography.text-medium}"
    textDecoration: underline
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav-text}"
    borderTop: "1px solid #ededed"
---

## Overview

Maersk's homepage (measured at https://www.maersk.com/, title "Maersk | Integrated Container Logistics & Supply Chain Services") is a calm, corporate, photography-led page. It opens with a full-bleed landscape photograph — here a white Maersk truck on a winding forest road — under a header that fades from dark grey to transparent (`linear-gradient(rgb(40, 40, 40), rgba(40, 40, 40, 0))`). The hero headline is set in **Maersk Headline at weight 300** ("Go the distance with seamless inland transport", 50px / 56px, white), a 18px / 26px white paragraph, and two small buttons: a white filled "Explore our services" and a white-outlined "Contact us".

Overlapping the bottom of the hero is a white quick-access bar (Tracking, Schedules, Offices). Below it sits a dismissible notice ("Middle East Situation" with a megaphone icon and a black "Read updates" button), then a row of three white bordered cards with line icons ("How to get started", "Ready to book?", "Become a logistics expert"), each ending in a small near-black button.

The rest of the page alternates centred section intros (light 40px headlines such as "Be ready for anything to go all the way" with a 16px paragraph and an underlined blue inline link), a large rounded video panel with a sky-blue offset band at its bottom-right corner, a tabbed "Logistics services and solutions" carousel (tabs with line icons: Transport, Store, Clear & Protect, Logistics Management, Solutions) and flat illustrated cards (ships, trucks, people in a pale-blue world). A coral "Feedback" tab is pinned to the right edge.

The tone is restrained: light-weight headlines, monochrome black/white UI chrome, and colour reserved for photography, illustrations and the brand sky-blue (`{colors.brand-blue}` #42b0d5) accent.

The site is built with the Maersk Design System (MDS): its `:root` exposes hundreds of `--mds_*` tokens, and those token values match the rendered components (e.g. `--mds_brand_appearance_primary_default_background-color: rgb(20,20,20)` and the measured #141414 buttons; `--mds_brand_appearance_state_primary_default_hover_background-color: rgb(54,54,54)` and the measured #363636 hover).

**Key Characteristics:**
- Light (300) Maersk Headline for h1/h2; regular 400 Maersk Text for everything else.
- Monochrome UI: primary buttons are near-black #141414, not blue.
- White canvas with full-bleed photography; the body background beneath is #f7f7f7.
- Small, compact buttons: 40px tall, 7px 16px padding, 5px radius.
- White cards with a 1px #dbdbdb border and 8px radius; almost no shadow.
- Inline links in #0073ab, underlined.
- Brand sky-blue #42b0d5 appears as an accent band and in the logo, not as button fill on the homepage.

## Colors

Values measured on https://www.maersk.com/ (computed styles, hover states, CSS corpus, `:root`). MDS token names are quoted where the live value equals a token.

### Brand & Accent
- **Primary** `{colors.primary}` #141414 — filled buttons ("Read updates", "Get started", "Register now", "View all explainers"). MDS `--mds_brand_appearance_primary_default_background-color: rgb(20,20,20)`.
- **Primary hover** `{colors.primary-hover}` #363636 — measured hover background. MDS `--mds_brand_appearance_state_primary_default_hover_background-color: rgb(54,54,54)`.
- **On primary** `{colors.on-primary}` #ffffff.
- **Brand blue** `{colors.brand-blue}` #42b0d5 — Maersk sky-blue (79 uses in the CSS corpus). MDS secondary: `--mds_brand_appearance_secondary_default_background-color: rgb(66,176,213)`, also the focus border colour `--mds_brand_appearance_state_focus_border-color`.
- **Secondary text** `{colors.secondary-text}` #0077b2 — `--mds_brand_appearance_secondary_default_text-color: rgb(0, 119, 178)`.
- **Link** `{colors.link}` #0073ab — measured inline link colour ("stay ready for what comes next").
- **Navy** `{colors.navy}` #00243d — third-largest background area (a dark section below the captured area; 93 uses in the CSS corpus).
- **Feedback coral** `{colors.feedback-coral}` #fa6a55 — the fixed "Feedback" side tab.

### Surface
- **Canvas** `{colors.canvas}` #ffffff — largest painted area; cards, notice, quick-access bar, footer.
- **Canvas subtle** `{colors.canvas-subtle}` #f7f7f7 — the `body` background. MDS `--mds_brand_appearance_neutral_weakest_background-color: rgb(247,247,247)`.
- **Hover neutral** `{colors.hover-neutral}` #ededed — measured hover fill of the white "Login" button; MDS's neutral hover token is `{colors.hover-neutral-mds}` #f0f0f0 (`--mds_brand_appearance_state_neutral_default_hover_background-color`).
- **White 80%** `{colors.white-80}` #ffffffcc — hover fill of the white hero button.
- **White 20%** `{colors.white-20}` #ffffff33 — hover fill of the outlined hero button.

### Text
- **Ink** `{colors.ink}` #141414 — most-read text colour (3288 weighted chars).
- **Ink muted** `{colors.ink-muted}` #545454 — second most-read (1560): card and section paragraphs.
- **Ink on light button** `{colors.ink-button-light}` #353535 — label of the white hero button and input text.
- **On dark 90%** `{colors.on-dark-90}` #ffffffe6 — "Ask Maersk" header button label.

### Lines
- `{colors.border-card}` #dbdbdb — card border.
- `{colors.border-input}` #cfcfcf — input border (most frequent border colour).
- `{colors.border-outline-dark}` #d4d4d4 — outlined button on photography. Also MDS `--mds_foundations_horizontal-rule_border-color: rgb(212,212,212)`.
- `{colors.border-subtle}` #ededed — footer top border.

### Semantic (MDS tokens present in `:root`)
- Error `{colors.error}` #b80012 (`--mds_brand_appearance_error_default_background-color: rgb(184,0,18)`).
- Success `{colors.success}` #40ab35 (`…success_default_background-color: rgb(64,171,53)`).
- Warning `{colors.warning}` #ffd029 (`…warning_default_border-color: rgb(255,208,41)`).
- Info `{colors.info}` #005986 (`…info_default_background-color: rgb(0,89,134)`).
- Focus ring `{colors.focus-ring}` #d1ecf5 (`--mds_brand_appearance_state_focus_default_shadow_color: rgb(209,236,245)`, spread 3px).

MDS documents the roles: "Primary … our main UI colour … reflected in the primary buttons, checkboxes, radio buttons, switches"; "Secondary … also referred to as the 'brand' colour … reflected in the secondary button … it can serve as the primary action. However, it's important not to overuse it" (https://designsystem.maersk.com/foundations/colour-roles/).

## Typography

### Font Family
Two proprietary families, both served by the site:
- **Maersk Headline** (`"Maersk Headline"`) — weights 300 and 400 loaded; used for h1–h3.
- **Maersk Text** (`"Maersk Text"`) — weights 300, 400, 500, 700 loaded; used for all body, UI and button text.
The MDS fallback stack is `Arial, -apple-system, BlinkMacSystemFont` (`--mds_brand_typography_text_font-family-fallback`, `--mds_brand_typography_headline_font-family-fallback`).

MDS typography guidance: "Maersk Headline font creates a clear hierarchy on application pages through titles and headlines"; "Maersk Text font is applicable for labels, captions, data table content, and long blocks of text"; "The fallback font is Arial … Arial is also the default choice for email communication" (https://designsystem.maersk.com/foundations/typography/).

Character share: Maersk Text 4556, Maersk Headline 770.

### Hierarchy (measured, desktop 1280px; MDS token in brackets)

| Token | Family | Size | Weight | Line height | Used for |
|---|---|---|---|---|---|
| `headline-large` | Maersk Headline | 50px | 300 | 56px | h1 hero [`headline_large_desktop` 50px / 56px, weight 300] |
| `headline-medium` | Maersk Headline | 40px | 300 | 40px | h2 sections [`headline_medium_desktop` 40px / 40px] |
| `headline-x-small` | Maersk Headline | 20px | 400 | 24px | h3 "Middle East Situation", card titles [`headline_x-small_desktop` 20px] |
| `text-large` | Maersk Text | 18px | 400 | 26px | hero paragraph (measured 26px; MDS `text_large_desktop` line height is 28px) |
| `text-medium` | Maersk Text | 16px | 400 | 24px | body, buttons, inputs [`text_medium_desktop` 16px / 24px] |
| `nav-text` | Maersk Text | 16px | 400 | 22px | header links, footer |
| `text-small` | Maersk Text | 14px | 400 | 20px | small text [`text_small_desktop` 14px / 20px] |
| `text-x-small` | Maersk Text | 12px | 400 | 16px | captions [`text_x-small_desktop` 12px / 16px] |

MDS also declares `headline_x-large` 80px / 80px (300) and `headline_small` 26px / 32px (400); neither was rendered on the homepage.

### Mobile (390px)
| Token | Size | Weight | Line height |
|---|---|---|---|
| `headline-large-mobile` | 38px | 300 | 38px |
| `headline-medium-mobile` | 26px | 300 | 32px |
| `text-large` (unchanged) | 18px | 400 | 26px |

### Principles
- Display type is light (300) and large; this lightness is a key part of the look. Do not bold headlines.
- Sentence case only. MDS: "Use sentence case capitalisation (except for product names). Do not use ALL CAPS!"
- "Do not mix weights and font sizes in the same headline." (MDS typography page)
- Letter spacing is `normal` everywhere measured.

### Note on Font Substitutes
Maersk Headline and Maersk Text are proprietary Maersk typefaces and are not publicly licensed. MDS names **Arial** as the official fallback. When using Arial, keep the headline weight visually light: Arial has no 300 weight, so a light grotesk with a true 300 (for example Inter Light) is closer in colour; this is a suggestion, not an official Maersk substitute.

## Layout

### Spacing System
Measured paddings: 16px (38), 24px (36), 6px (24), 14px (20), 12px (14), 10px (12), 7px (12), 8px (12), 4px (7), 48px (5), 64px (3). Measured gaps: 4px (12), 6px (10), 12px (7), 24px (3), 48px (3), 8px, 10px.

MDS spacing rule: "The base unit for spacing is 4 pixels, subsequent units are multiples of 4 … Three acceptable exceptions here are 2, 6, and 10 pixels" (https://designsystem.maersk.com/foundations/spacing/). The measured 7px button padding and 14px values are outside this rule; they come from component internals (7px + 1px border = 8px).

### Grid & Container
MDS grid tokens on the page: `--mds_foundations_grid_md_column-gap: 24px`, `…md_row-gap: 24px`, `…xs_row-gap: 16px`. The header has 24px side padding. Cards are 400px wide in a three-column row; the gap between them was not measured.

### Section Recipes (seen in the capture)
1. **Photo hero** — full-bleed photo, gradient header, light white headline, white paragraph, white + outlined buttons.
2. **Quick-access bar** — white rounded bar overlapping the hero bottom with icon + label links.
3. **Notice strip** — icon, 20px headline, 16px text, black button, "Close ⊗" at right.
4. **Three-card row** — white bordered cards with line icons and black buttons.
5. **Centred intro + media** — 40px light headline, 16px paragraph, large rounded video panel.
6. **Tabbed carousel** — icon tabs with an underline indicator, illustrated cards.

### Whitespace Philosophy
Generous space between sections, compact components. The overall density is moderate — consistent with MDS's "Fit" (density) guidance referenced from the spacing page.

### Voice & Microcopy
Direct and service-oriented: "Go the distance with seamless inland transport", "Move your cargo inland via road, rail, or barge – efficiently connecting ports to your inland destinations in 130+ countries." Buttons are short verb phrases: "Explore our services", "Read updates", "Get started", "Register now".

### Motion
Hover changes are colour-only (fills darken or lighten; see Components). MDS publishes transition tokens as part of its global tier (per the tokens page), but durations were not measured here.

## Elevation & Depth

Nearly flat. One shadow was measured on page elements: `rgba(20, 20, 20, 0.07) 0px 1px 10px 0px` (2 uses). The CSS corpus contains MDS's layered shadows, e.g. `0 3px 4px #00000008,0 3px 3px -2px #00000008,0 1px 8px #0000000a` (14 uses) and `0 8px 10px 1px #00000008,0 3px 14px 2px #00000008,0 5px 5px -3px #0000000a` (7 uses), which correspond to the `--mds_brand_appearance_shadow_low/medium/high_*` token layers. Focus is shown as a 3px ring (`0 0 0 3px #b5e0f5` / `#c3e4f3` in the CSS corpus; MDS focus shadow colour #d1ecf5, spread 3px).

### Decorative Depth
Depth comes from photography and the gradient header. The video panel has a sky-blue band offset behind its lower-right corner — a flat graphic device, not a shadow.

## Shapes

### Border Radius Scale

| Token | Value | Use | MDS name |
|---|---|---|---|
| `xs` | 2px | — | radius-xs |
| `sm` | 4px | checkboxes | radius-sm |
| `button` | 5px | measured hero/card buttons and the input | (not an MDS step) |
| `md` | 6px | "Login", "Ask Maersk" | radius-md ("buttons and input fields") |
| `lg` | 8px | cards (33 elements) | radius-lg |
| `xl` | 12px | 3 elements | radius-xl ("cards") |
| `xxl` | 16px | large media | radius-2xl ("large images, dialogs, or modals") |
| `xxxl` | 24px | 6 elements (video panel) | — |
| `full` | 9999px | pills | radius-full |

MDS: "Our visual design language is defined and built around the Maersk symbol, more specifically it is the language of the round corners of the container" and "the outer component has a larger corner radius than the nested component" (https://designsystem.maersk.com/foundations/corner-radius/). Discrepancy: MDS assigns 6px to buttons, but the homepage's content buttons and search input render at 5px; header buttons render at 6px. Live values are declared.

A `6px 6px 0px 0px` top-only radius (8 elements) is used on card image tops.

## Components

### Buttons

**`button-primary`** — "Read updates", "Get started", "Register now", "View all explainers".
- Background `{colors.primary}` #141414, text #ffffff, `{typography.text-medium}` 16px / 400 / 24px, padding 7px 16px, height 40px, radius 5px, 1px border.
- Hover (`button-primary-hover`): background #363636.

**`button-light`** — hero "Explore our services" on photography.
- Background #ffffff, text #353535, same geometry. Hover: background #ffffffcc (white at 80%).

**`button-outline-on-dark`** — hero "Contact us".
- Transparent, text #ffffff, border 1px solid #d4d4d4, radius 5px, height 40px. Hover: background #ffffff33, border #ffffff.

**`button-login`** — header "Login": background #ffffff, text #141414, border 1px solid #ffffff, padding 6px 12px, height 38px, radius 6px. Hover: background #ededed.

**`button-ask`** — header "Ask Maersk": text #ffffffe6, 16px / 22px, padding 6px 12px, height 36px, radius 6px, outlined in the capture.

MDS documents three button variants — Filled (high prominence), Outlined (medium), Plain (low) — and recommends "Limit filled buttons to one per visible action group"; primary action = Primary/Filled, secondary = Neutral/Outlined, tertiary = Neutral/Plain (https://designsystem.maersk.com/components/button/).

### Inputs & Forms

**`text-input`** — the search field: text #353535, 16px / 24px, border 1px solid #cfcfcf, radius 5px, padding 12px 44px 12px 48px (room for leading and trailing icons), height 50px.

### Cards & Containers

**`card`** — "How to get started" etc.: background #ffffff, text #141414, border 1px solid #dbdbdb, radius 8px, 400px × 262px. Contents: line icon + 20px headline row, 16px #545454 paragraph, `button-primary` at the bottom.

### Navigation

**`nav`** — 114px two-row header over the hero with a dark-to-transparent gradient and 24px side padding.
- Top row (right-aligned): "Ask Maersk", language "EN", "Notifications", "Support", "Contact Us" with line icons.
- Second row: Maersk star logo + wordmark at left of the top row; menu "Prices", "Book", "Schedules", "Tracking", "Manage", "Services", "Company" (chevrons on dropdowns) in white 16px / 22px; right: outlined "Register" and white "Login".

### Tabs
The "Logistics services and solutions" section uses icon + label tabs with an underline indicator on the active tab (sky-blue in the capture). Tab dimensions were not measured, so no tab token is declared; MDS lists a Tabs component.

### Links

**`link`** — inline #0073ab, underlined, 16px.

### Footer

**`footer`** — white, text #141414, 16px / 22px, 1px #ededed top border, 983px tall with columns starting "Plan & Book", "Prices", "Book", "Container…".

## Design System Architecture

Maersk publishes the **Maersk Design System (MDS)** at https://designsystem.maersk.com/ — "the design language of Maersk Technology", used "to create consistent, accessible and beautiful customer experiences", with "40+ brand-aligned UI components and 200+ icons" (https://designsystem.maersk.com/about/).

- **Token architecture.** Four categories (https://designsystem.maersk.com/foundations/themes/about-our-design-tokens/): *Global tokens* ("fixed values that make up the Maersk Design System DNA" — size, transition, layout), *Density tokens* (Default, Compact, Spacious), *Brand tokens* (per brand and variation), *Implementation tokens* (component level). Naming pattern `depth_item_variant_platform_state_attribute`, e.g. `brand_typography_headline_large_mobile_font-size`, `brand_appearance_primary_default_background-color`. Tokens are stored as JSON and transformed into CSS custom properties; on maersk.com they appear with an `--mds_` prefix: `--mds_brand_appearance_primary_default_background-color: rgb(20,20,20)`, `--mds_brand_appearance_secondary_default_background-color: rgb(66,176,213)`, `--mds_brand_border_large_radius: 8px`, `--mds_foundations_table_zebra-stripe_background-color: rgb(247,247,247)`, `--mds_global_breakpoint_md_min-width: 1025px`.
- **Theming.** "A theming system based on design tokens that supports multiple brands … and multiple appearances per brand e.g. light and dark." Themes: Maersk, APM Terminals, Aliança, Captain Peter, Stillstrom — each Light and Dark (https://designsystem.maersk.com/foundations/themes/). Designers switch via Figma variables in the "MDS:UI library"; developers apply a theme by importing its CSS variables. Density is a separate token set (Default / Compact / Spacious).
- **Type & spacing.** Two type families, headline and text scales for desktop and mobile; 4px spacing base with 2/6/10px exceptions; radius scale xs 2 / sm 4 / md 6 / lg 8 / xl 12 / 2xl 16 / full 9999px; breakpoints xs 0–640, sm 641–1024, md 1025–1440, lg 1441–1920, xl 1920+ plus container-based breakpoints (https://designsystem.maersk.com/foundations/breakpoints/).
- **Component model.** Web components with documented usage, variants and states. Inventory (https://designsystem.maersk.com/components/): Accordion, Avatar, Badge, Breadcrumb, Button, Button Group, Calendar, Card, Chat, Checkbox, Code Preview, Copy Button, Date Range, Dialog, Drawer, File Upload, Icon, Input, Input Date, Input Group, Input Time, Link, Link Button, List, Loading Indicator, Menu, Modal, Multi Select, Notification, Number Stepper, Pagination, Picker, Popover, Progress Indicator, Radio, Segmented Control, Select, Split Button, Step Indicator, Switch, Table, Tabs, Tag, Textarea, Theme switch, Time Picker, Timeline, Toast, Toolbar, Tooltip, Tree Navigation, Typeahead, Typeahead Multi Select.
- **Accessibility.** MDS states its purpose is "accessible" experiences and tells designers to "Use the colour tokens for text to provide accessible text"; the focus state is tokenised (`--mds_brand_appearance_state_focus_default_shadow_*`: 3px spread, #d1ecf5; focus border #42b0d5). No explicit WCAG level or touch-target size was found on the pages opened.
- **Delivery.** Packages such as `@maersk-global/mds-components-core`, `@maersk-global/mds-design-tokens` (`design-tokens-px.css` or `design-tokens-rem.css`), `@maersk-global/mds-foundations` (`foundations.css`) and a React wrapper; published to private registries (Maersk Global GitHub Packages, authenticated with a corporate token) and also deployed to a CDN. Demo apps exist for Vue, React and Angular (https://designsystem.maersk.com/develop). Figma: "MDS:UI library" with theme variables.

## Do's and Don'ts

### Do
- Use near-black #141414 for filled buttons and darken to #363636 on hover.
- Set headlines in Maersk Headline 300 (or Arial fallback) — light, large, sentence case.
- Keep buttons compact: 40px tall, 7px 16px padding, 5px radius, 16px / 400 label.
- Use white cards with a 1px #dbdbdb border and 8px radius, with a line icon and 20px headline.
- Lead with full-bleed photography under a dark-to-transparent gradient header.
- Use #0073ab underlined for inline links.
- Use sky-blue #42b0d5 sparingly as a brand accent (bands, focus, active tab).
- Follow the MDS 4px spacing grid (with 2/6/10px exceptions).

### Don't
- Don't make primary buttons sky-blue; MDS reserves the secondary/brand colour and warns not to overuse it.
- Don't bold the display headlines.
- Don't use ALL CAPS.
- Don't add heavy shadows; the measured page uses at most `rgba(20, 20, 20, 0.07) 0px 1px 10px 0px`.
- Don't use more than one filled button per action group.
- Don't round buttons into pills.
- Don't substitute a geometric display font for Maersk Headline; MDS's fallback is Arial.

## Responsive Behavior

### Breakpoints
From the site's MDS tokens and the MDS breakpoints page: xs 0–640px, sm 641–1024px, md 1025–1440px, lg 1441–1920px, xl ≥ 1921px.

### Measured changes (1280px → 390px)
| Element | Desktop | Mobile |
|---|---|---|
| h1 | 50px / 56px | 38px / 38px |
| h2 | 40px / 40px | 26px / 32px |
| Hero paragraph | 18px / 26px | 18px / 26px |
| Primary CTA | 7px 16px padding, auto width | 7px 8px padding, full width (358px), 40px tall |

Mobile size frequencies: 16px (4186), 20px (560), 18px (183), 26px (164), 38px (46), 12px, 14px.

### Touch Targets
Buttons are 40px tall on both widths; the search input is 50px.

### Collapsing Strategy

### Image Behavior
Hero photography is full-bleed and cropped; the video panel keeps its rounded corners and offset blue band.

## Iteration Guide

1. White canvas over a #f7f7f7 body; load Maersk Headline (300/400) and Maersk Text (400) or Arial.
2. Full-bleed photo hero with a `linear-gradient(rgb(40, 40, 40), rgba(40, 40, 40, 0))` header, white 50px / 56px light headline, 18px / 26px paragraph, white + outlined 40px buttons.
3. Add the overlapping white quick-access bar and a notice strip with a #141414 button.
4. Three white cards: 1px #dbdbdb, 8px radius, icon + 20px headline + #545454 text + black button.
5. Centred 40px / 40px light section headlines with 16px #545454 paragraphs and #0073ab links.
6. Check: buttons black, radius 5px, no bold headlines, colour only in imagery and the sky-blue accent.

### Common Mistakes When Recreating Maersk
- Painting buttons Maersk blue.
- Setting headlines in a bold weight.
- Using MDS's 6px button radius when the homepage content buttons render at 5px.
- Dropping the dark gradient behind the header, which makes white nav text unreadable on bright photos.
- Adding card shadows instead of the 1px border.
