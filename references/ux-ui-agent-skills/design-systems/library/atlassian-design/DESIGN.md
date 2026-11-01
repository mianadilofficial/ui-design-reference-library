---
version: alpha
name: "Atlassian Design"
category: "Design Systems"
description: "The Atlassian Design System site: Atlassian Sans (an Inter derivative) on white with ink #292a2e, one brand blue #1868db (hover #1558bc), a #f8f8f8 sunken band, 112px/700 hero type, 6px-radius 32px buttons and 40px text fields, pill secondary buttons, and playful illustration tiles over strictly token-driven (--ds-*) chrome."
colors:
  canvas: "#ffffff"
  ink: "#292a2e"
  primary: "#1868db"
  surface-sunken: "#f8f8f8"
  ink-subtle: "#505258"
  link-visited: "#48245d"
  ink-subtlest: "#6b6e76"
  border: "#0b120e24"
  nav-bg: "#ffffffd9"
  on-primary: "#ffffff"
  primary-hover: "#1558bc"
  info-bg: "#e9f2fe"
  danger-bg: "#ffd5d2"
  warning-bg: "#fff5db"
  success-bg: "#d3f1a7"
  discovery-bg: "#eed7fc"
  border-input: "#8c8f97"
  focus: "#4688ec"
  text-danger: "#ae2e24"
  text-success: "#4c6b1f"
  text-warning: "#9e4c00"
  saffron: "#fca700"
  surface-hovered: "#f0f1f2"
typography:
  heading-docs:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
  body-ui:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  heading-medium:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 653
    lineHeight: 24px
  display:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 112px
    fontWeight: 700
    lineHeight: 116px
  display-mobile:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 68px
    fontWeight: 700
    lineHeight: 72px
  subheading:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 44px
    fontWeight: 700
    lineHeight: 48px
  body:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 40px
    fontWeight: 653
    lineHeight: 44px
  nav:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: "\"Atlassian Sans\", ui-sans-serif, -apple-system, \"system-ui\", \"Segoe UI\", Ubuntu, \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 653
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 16px
  tile: 32px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-ui}"
    rounded: "{rounded.md}"
    borderColor: "{colors.border-input}"
    height: 40px
  button-pill:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 58px
    borderColor: "{colors.border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 8px
  blog-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.tile}"
  footer:
    textColor: "{colors.ink}"
    padding: 32px 0px
    borderColor: "{colors.border}"
---

# Atlassian Design

## Overview

atlassian.design is the home of the Atlassian Design System (ADS): the public documentation for the foundations, tokens and components that Atlassian's products are built from. The homepage captured here is its "news" front door rather than a component page: a bright white hero reading "Better teamwork by design." at 112px/700, with the last word "design." in brand blue (#1868db), sprinkled with small multiplayer-cursor chips ("Tony" in purple, "Rovo" in black, "You" in saffron yellow, "Kyah" in blue) on a faint dot grid. Under it, a #f8f8f8 band holds a large featured blog card (a black tile with rainbow rays bursting from a box, and a light panel "Protobox: Our Home-Grown AI Prototyping Tool") and a 3-column grid of square illustrated tiles, each captioned in centred bold type with a small monospaced purple "Blog post" label above.

The product surface (docs pages for components such as Button, Text field, Select, Tag, Lozenge) is much plainer: white page, 40px/700 titles, 14px/20px body, 32px blue primary buttons with 6px radius.

Key characteristics:
- **One brand blue.** #1868db (`--ds-background-brand-bold`, `--ds-link`, `--ds-text-brand`), hover #1558bc, with a tonal family of subtle tints (#e9f2fe, #cfe1fd).
- **Neutral text from a cool grey ramp.** #292a2e (default text), #505258 (subtle), #6b6e76 (subtlest).
- **Atlassian Sans.** A derivative of Inter, with Atlassian Mono (a derivative of JetBrains Mono) for code and "Charlie Display" for brand headings; weights 400, 500, 653 (a variable-font semibold) and 700.
- **Rounded by role.** 2px small details, 4px labels, 6px interactive controls, 8px containers, 16px large containers, pills for secondary hero buttons and chips.
- **Playful illustration, serious chrome.** Chunky colourful illustration and emoji art sits inside very restrained UI.
- **Token-first.** The site's `:root` carries 400 `--ds-*` custom properties for colour, space, radius, shadow and font.

## Colors

Measured on atlassian.design (homepage plus the Button, Text field, Select, Tag and Lozenge example pages) and matched to the site's own `--ds-*` custom properties.

### Brand
- **Primary** `{colors.primary}` (#1868db): `--ds-background-brand-bold`; "design." in the headline, links, primary buttons, selected borders (`--ds-border-selected`).
- **On primary** `{colors.on-primary}` (#ffffff): `--ds-text-inverse`.
- **Primary hover** `{colors.primary-hover}` (#1558bc): `--ds-background-brand-bold-hovered`; also `--ds-link-pressed`.
- **Link visited** `{colors.link-visited}` (#48245d): `--ds-link-visited-pressed`; purple accent text.
- **Saffron** `{colors.saffron}` (#fca700): `--ad-color-brand-saffron`, used for the "You" chip.

### Neutrals
- **Canvas** `{colors.canvas}` (#ffffff): page and `--ds-surface-overlay`.
- **Surface sunken** `{colors.surface-sunken}` (#f8f8f8): the grey band behind the blog grid.
- **Surface hovered** `{colors.surface-hovered}` (#f0f1f2): `--ds-surface-hovered`.
- **Ink** `{colors.ink}` (#292a2e): `--ds-text`, 2131 characters measured.
- **Ink subtle** `{colors.ink-subtle}` (#505258): `--ds-icon-subtle`, the second most-read text colour.
- **Ink subtlest** `{colors.ink-subtlest}` (#6b6e76): `--ds-text-subtlest`.
- **Border** `{colors.border}` (#0b120e24): `--ds-background-neutral-subtle-pressed`; the translucent hairline on pill buttons and the footer.
- **Border input** `{colors.border-input}` (#8c8f97): the 1px border of the Text field (measured).
- **Focus** `{colors.focus}` (#4688ec): `--ds-border-focused`.
- **Nav bg** `{colors.nav-bg}` (#ffffffd9): the translucent header (`--nav-backdrop-color: rgba(255, 255, 255, 0.85)` is also defined).

### Semantic
- **Danger:** text `{colors.text-danger}` (#ae2e24), subtle background `{colors.danger-bg}` (#ffd5d2), border #fd9891.
- **Success:** text `{colors.text-success}` (#4c6b1f), subtle background `{colors.success-bg}` (#d3f1a7).
- **Warning:** text `{colors.text-warning}` (#9e4c00), subtle background `{colors.warning-bg}` (#fff5db), borders #fbc828 and #e06c00.
- **Information:** background `{colors.info-bg}` (#e9f2fe), text #1558bc, border #357de8.
- **Discovery:** background `{colors.discovery-bg}` (#eed7fc), text #803fa5, border #d8a0f7.

Roles follow the official colour page: neutral, brand, information, success, warning, danger, discovery, accent and inverse, each with emphasis from subtlest to boldest and token names of the form `color.[property].[role].[emphasis].[state]` (https://atlassian.design/foundations/color).

## Typography

Atlassian's own typography page says Atlassian Sans is a "derivative of the Inter Variable typeface" for headings, body and all UI except code, and Atlassian Mono is a derivative of JetBrains Mono for code. The scale is a minor third (factor 1.2, rounded to multiples of 4) on a 16px rem base, with heading line heights about 1.2x and body about 1.5x (https://atlassian.design/foundations/typography/product-typefaces-and-scale).

Font stack on the site: `"Atlassian Sans", ui-sans-serif, -apple-system, "system-ui", "Segoe UI", Ubuntu, "Helvetica Neue", sans-serif`. Brand headings can use "Charlie Display" (`--ds-font-family-brand-heading`).

| Role | Token | Size / weight / line |
|---|---|---|
| Hero headline | `{typography.display}` | 112px / 700 / 116px |
| Hero headline, mobile | `{typography.display-mobile}` | 68px / 700 / 72px |
| Section title | `{typography.subheading}` | 44px / 700 / 48px |
| Pull-quote / feature | `{typography.body}` | 40px / 653 / 44px |
| Docs page title | `{typography.heading-docs}` | 40px / 700 / 44px |
| Heading medium | `{typography.heading-medium}` | 20px / 653 / 24px |
| Pill button | `{typography.button-secondary}` | 20px / 653 / 24px |
| Button | `{typography.button}` | 14px / 500 / 20px |
| UI body, nav | `{typography.body-ui}`, `{typography.nav}` | 14px / 400 / 20px |

The site's token ladder (from `:root`): heading xxlarge 2rem/2.25rem, xlarge 1.75rem/2rem, large 1.5rem/1.75rem, medium 1.25rem/1.5rem, small 1rem/1.25rem, xxsmall 0.75rem/1rem, all at weight 653; body large 1rem/1.5rem, body 0.875rem/1.25rem, body small 0.75rem/1rem at weight 400. Weights defined: regular 400, semibold 600; medium 500 is measured on buttons and bold 700 on the headlines.

### Font substitutes
Atlassian Sans and Atlassian Mono are proprietary derivatives; use Inter (and JetBrains Mono) as open-source stand-ins, which is also how Atlassian describes their origin.

## Layout

- Header 72px tall: the glyph strip plus "Atlassian Design" wordmark on the left; Design system, News, Search and a bordered Theme button on the right, 14px type.
- Hero has a wide left margin and a dotted grid; the headline takes two lines at 112px.
- Blog area: a full-width featured card, then three equal columns with a 1:1 illustrated tile each and centred titles below.
- Footer: 511px tall with a top border, 32px vertical padding and link columns (Design system, Get started, Foundations, Components, Rovo UI and more).
- Spacing: 8px base unit with tokens `space.100 = 0.5rem (8px)`, `space.200 = 1rem`, `space.300 = 1.5rem`, `space.500 = 2.5rem`, `space.1000 = 5rem` (https://atlassian.design/foundations/spacing). Measured paddings: 1, 2, 4, 6, 8, 12, 16, 20, 24, 32px.

## Elevation & Depth

- The pages are flat. Separation uses tonal surfaces (#ffffff on #f8f8f8) and 1px translucent borders (#0b120e24).
- Measured shadows: `rgba(11, 18, 14, 0.14) 0px 0px 0px 1.2px` (a ring, on the docs pages) and `rgba(30, 31, 33, 0.25) 0px 1px 1px 0px, rgba(30, 31, 33, 0.31) 0px 0px 1px 0px`, plus `rgba(0, 0, 0, 0.09) 0px 40px 20px 20px` on the homepage.
- Overflow shadow tokens: `--ds-shadow-overflow: 0px 0px 8px #1E1F2129, 0px 0px 1px #1E1F211F`.
- The header is translucent (#ffffffd9).
- Focus uses a 2px ring (`--ds-border-width-focused: 0.125rem`), and the radius page says each radius token has a matching `radius.focus.*` variant that adds 2px.

## Shapes

Official radius tokens (https://atlassian.design/foundations/radius): xsmall 2px (badges, checkboxes), small 4px (labels, lozenges, tags), medium 6px (buttons, inputs, selects, navigation items), large 8px (cards, containers, menus), xlarge 12px (modals, Kanban columns), xxlarge 16px, full 999px (avatars), tile 25%.

Measured on the site: 9999px (74 uses, pills and chips), 2px, 40px (21 uses), 4px, 8px, 16px, 25% (tile), 28px, 6px. The tokens above map to `{rounded.xs}` 2px, `{rounded.sm}` 4px, `{rounded.md}` 6px, `{rounded.lg}` 8px, `{rounded.xl}` 16px, `{rounded.tile}` 32px and `{rounded.pill}`.

## Components

### Buttons
- **Primary:** `{components.button-primary}`: #1868db, white 14px/500 text, padding 6px 12px, 32px high, 6px radius; hover #1558bc. Appearances in the docs: default, primary, subtle, warning, danger, discovery and Rovo; spacing default or compact (compact is recommended for tables).
- **Pill button (marketing):** `{components.button-pill}`: transparent, 1px #0b120e24 border, 20px/653 label, padding 16px 20px, 58px high, full pill ("More design news").
- Docs rule: a primary button should appear once per area.

### Text field
`{components.text-input}`: white, 1px #8c8f97 border, 6px radius, 40px high including the border (inner input 36px high, padding 8px 6px, 14px/20px). Probed on https://atlassian.design/components/textfield/examples.

### Tags, lozenges
Official use: lozenges and tags take the small 4px radius. Measured status fills on the Lozenge page: #ffd5d2, #d3f1a7, #cfe1fd, #fce4a6, #e9f2fe and #eed7fc, with dark bolder text (#5d1f1a, #37471f, #123263, #533f04, #48245d).

### Blog card
`{components.blog-card}`: a large rounded illustration tile (32px radius token here; the page also measures 40px) with a caption in centred bold type; a "Blog post" label in Atlassian Mono with a purple tint.

### Navigation and footer
`{components.nav}`: 72px translucent header; `{components.nav-link}`: 14px blue link, 8px padding, 4px radius. `{components.footer}`: 1px top border, 32px padding.

## Art Direction and Imagery

- **Multiplayer motif.** The hero's cursor chips (Tony, Rovo, You, Kyah) with little arrow pointers evoke collaborative editing; each chip is a small pill with bold 14px-class text in a solid accent colour.
- **Dot grid.** A faint dotted grid with a single blue dot at the left edge frames the headline, a blueprint cue.
- **Featured tile.** Black field with a dotted texture, a white isometric box carrying the Atlassian glyph, and rays in blue, green, orange and purple; a light rounded panel at right holds the title and blurb with a black frame.
- **Blog tiles.** Each tile is a different illustration style: a Mac screen-recording app icon on a blue wave, a pile of custom emoji (a halo smiley, flame, gem), purple and yellow split panels with an "MCP" card and a terminal, green paper and pen art, speech bubbles ("Hi!", "Bonjour!", "你好!") on black, and a black "TEAMWORK GRAPH" typographic tile.
- **Labels.** Each post has a small "Blog post" tag in monospace on a lilac tint.
- **Density.** Airy at the top, then a regular grid with roughly equal tile sizes.

## Microcopy Patterns

| Pattern | Example |
|---|---|
| Headline with one emphasised word | "Better teamwork by design." |
| Nav labels | Design system, News, Search, Theme |
| Post titles (sentence case, specific) | "Rebuilding Loom for Mac: five things we learned getting here"; "Meet Teamoji: Atlassian's Custom Emoji System Built for the Future of Work" |
| Featured blurb | "Learn how we built an in-house AI prototyping app that turns ideas into interactive, coded prototypes and production-ready specs." |
| Secondary action | "More design news" |
| Footer groups | Design system, Get started, Foundations, Components, Rovo UI |

Voice: first-person plural ("we learned", "our home-grown"), concrete, product-and-craft oriented.

## Token Reference (site `:root`)

| Token | Value |
|---|---|
| `--ds-text` | #292A2E |
| `--ds-text-subtlest` | #6B6E76 |
| `--ds-text-inverse` | #FFFFFF |
| `--ds-text-brand` / `--ds-link` | #1868DB |
| `--ds-text-danger` | #AE2E24 |
| `--ds-text-warning` | #9E4C00 |
| `--ds-text-success` | #4C6B1F |
| `--ds-text-information` | #1558BC |
| `--ds-text-disabled` | #080F214A |
| `--ds-background-brand-bold` / hovered / pressed(boldest) | #1868DB / #1558BC / #144794 (boldest pressed) |
| `--ds-background-brand-boldest` | #1C2B42 |
| `--ds-background-neutral-bold` | #292A2E |
| `--ds-background-neutral-hovered` | #0B120E24 |
| `--ds-surface-overlay` | #FFFFFF |
| `--ds-surface-hovered` / pressed | #F0F1F2 / #DDDEE1 |
| `--ds-border-focused` | #4688EC |
| `--ds-border-information` | #357DE8 |
| `--ds-border-success` | #6A9A23 |
| `--ds-border-warning` | #E06C00 |
| `--ds-border-discovery` | #AF59E1 |
| `--ds-border-width` / focused / selected | 0.0625rem / 0.125rem / 0.125rem |
| `--ds-radius-xsmall` / small / large / xxlarge / tile | 0.125rem / 0.25rem / 0.5rem / 1rem / 25% |
| `--ds-space-100` / 250 / 1000 | 0.5rem / 1.25rem / 5rem |

Accent text colours: gray bolder #1E1F21, blue #1558BC, teal #206A83, green #216E4E, yellow #7F5F01, orange #9E4C00, red #AE2E24, purple #803FA5, magenta bolder #50253F. Accent subtle borders: gray #B7B9BE, blue (information) #8FB8F6, teal #9DD9EE, green #7EE2B8, lime #B3DF72, yellow #EED12B, orange #FBC828, red #FD9891, purple #D8A0F7, magenta #F797D2.

## Measured Reference

| Item | Value |
|---|---|
| Viewport used for measurement | 1280px desktop |
| Header | 72px, #ffffffd9 |
| Hero headline | 112px / 700 / 116px |
| Section headline | 68px / 700 / 72px (h2 "A unified design language") |
| Docs page title | 40px / 700 / 44px |
| UI body | 14px / 400 / 20px |
| Primary button | 32px, 6px 12px padding, 6px radius |
| Pill button | 58px, 16px 20px padding |
| Text field | 40px outer, 1px #8c8f97, 6px radius |
| Footer | 511px high, 32px padding |
| Font families by characters | Atlassian Sans 2238, Atlassian Mono 624, Charlie Display 45 |
| Most used font sizes | 14px, 20px, 16px, 40px, 28px, 68px, 12px, 24px, 44px, 32px |

## Design System Architecture

Atlassian Design System is a public, documented design system. Key parts:
- **Foundations:** colour (https://atlassian.design/foundations/color), typography (https://atlassian.design/foundations/typography/product-typefaces-and-scale), spacing (https://atlassian.design/foundations/spacing), radius (https://atlassian.design/foundations/radius).
- **Design tokens:** `@atlaskit/tokens` provides the tokens as CSS custom properties with the `--ds-` prefix, accessed via `token('color.background.neutral')` which returns `var(--ds-background-neutral)`; themes (light, dark) are applied with `setGlobalTheme()` and a `data-theme` attribute on the HTML element (https://atlassian.design/foundations/tokens/use-tokens-in-code).
- **Token naming:** `color.[property].[role].[emphasis].[state]`, for example `color.background.danger.bold.hovered`.
- **Components:** each has a docs page with examples (https://atlassian.design/components/button/examples and siblings).
- **Spacing:** an 8px base unit and tokens named by percentage (space.100 = 8px).
- **Typography:** tokens in rem, a minor-third scale, Atlassian Sans/Mono, heading and body ladders.

## Do's and Don'ts

### Do
- Apply colour via tokens (`color.background.brand.bold`), not hex values.
- Use brand blue for the one primary action per area and for links.
- Use the radius token that matches the role: 6px for controls, 4px for tags and lozenges, 8px for cards.
- Keep body text at 14px/20px and headings on the 653 or 700 weights.
- Pair subtle tinted fills with bolder text of the same hue for status chips.
- Keep illustrations colourful and the UI chrome neutral.

### Don't
- Don't use more than one primary button in an area.
- Don't use accent colours to carry meaning; the colour page says they have none, only the semantic roles do.
- Don't hardcode hexes; they will not follow the theme.
- Don't add heavy drop shadows; depth here is tonal.
- Don't use a radius that does not match the role (for example a pill for a text field).

## Responsive Behavior

- The extractor captured a mobile hero: the 112px headline becomes 68px (line height 72px), weight 700.
- Typography tokens use rem, so type scales with the browser's default size.
- Compact spacing for dense tables is available at the component level.
- Layout behaviour of the blog grid at narrow widths was not captured.

## Iteration Guide

1. Set `--ds-*`-style tokens: brand #1868db, text #292a2e, subtle #505258, subtlest #6b6e76, border #0b120e24, canvas #fff, sunken #f8f8f8.
2. Choose Inter (or Atlassian Sans) with 14/20 body, 653 headings; display up to 112/116 for hero.
3. Build the 32px button with a 6px radius, then the 40px field with #8c8f97 border.
4. Add semantic tints (info, success, warning, danger, discovery) with bolder text.
5. Add illustration: chunky, colourful tiles with large radii on a #f8f8f8 band.
6. Validate dark mode by switching token values, not by inverting colours.
