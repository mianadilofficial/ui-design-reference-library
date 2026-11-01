---
version: alpha
name: Bulma
category: "Frontend Frameworks"
description: "Bulma is the CSS-only Flexbox framework whose own site is the product demo: white canvas (#ffffff), near-black blue-grey ink (#2e333d), a turquoise primary (#00d1b2) with dark teal label text (#001f1a), Inter at weights 400-800 (64px/800 hero), 6px button corners, 12px cards, and a dark 'code' band (#14161a) with syntax colors, all driven by --bulma-* CSS variables."
colors:
  canvas: "#ffffff"
  ink: "#2e333d"
  primary: "#00d1b2"
  on-primary: "#001f1a"
  surface-card: "#f9fafb"
  surface-dark: "#14161a"
  ink-muted: "#69748c"
  accent-blue: "#4258ff"
  code-blue: "#79b8ff"
  ink-body: "#404654"
  code-green: "#85e89d"
  hairline: "#d6d9e0"
  link: "#2942ff"
  input-text-dark: "#ebecf0"
  input-border-dark: "#353a46"
  link-active: "#0f2bff"
typography:
  display:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 64px
    fontWeight: 800
    lineHeight: 72px
  display-mobile:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 800
    lineHeight: 54px
  heading:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
  subheading:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1.6px
    textTransform: uppercase
  body:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  button-secondary:
    fontFamily: Inter, "SF Pro", "Segoe UI", Roboto, Oxygen, Ubuntu, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 7px
  xl: 8px
  2xl: 10px
  3xl: 10.5px
  4xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16.25px 20px
    height: 63px
    boxShadow: rgba(51, 51, 51, 0) 0px 1.25px 2.5px 0px, rgba(51, 51, 51, 0) 0px 2.5px 5px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 40px
    boxShadow: rgba(51, 51, 51, 0) 0px 1px 2px 0px, rgba(51, 51, 51, 0) 0px 2px 4px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.ink-body}"
    padding: 32px
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.subheading}"
  text-input:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.input-text-dark}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 7px 11px
    height: 40px
    borderColor: "{colors.input-border-dark}"
    boxShadow: rgba(9, 10, 12, 0.05) 0px 1px 2px 0px inset
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-body}"
    rounded: "{rounded.4xl}"
    padding: 22.5px
  footer:
    textColor: "{colors.ink-body}"
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

Bulma is a free, open-source CSS framework built on Flexbox and CSS variables, created by Jeremy Thomas (jgthms). Its homepage (bulma.io) is both marketing site and component showcase: the hero reads "The Modern CSS Framework", the body copy describes "ready-to-use frontend components that you can easily combine to build responsive web interfaces", and below that the page walks through feature cards (100% Responsive, Modern, Easy, Free), testimonial tweets, and a Dark Mode section whose live code sample renders the same Bulma markup it displays.

The personality is friendly and plainspoken. Display type is heavy (800) and set large (64px on a 72px line), body copy is generous (20px on 30px), and the single saturated brand color is turquoise (`{colors.primary}`) which appears on the logo mark and the primary buttons. Everything else is cool blue-grey: ink `{colors.ink}`, muted ink `{colors.ink-muted}`, hairlines `{colors.hairline}`. A second accent, `{colors.accent-blue}`, carries links and the "link" button variant. The page alternates stark white sections with a near-black code band (`{colors.surface-dark}`) so that the product is shown in both light and dark themes.

The capture at `web/data/captures/bulma.jpg` shows a full-screen promotional modal dimmed over the top of the page (a sponsor card for an online CSS course with a green glow border); under it the real header (BULMA wordmark, Docs, Expo, Love, Sponsor), a "Get Started" and a "Download" button pair, and a floating "Open Customizer" button are visible. Below the fold come the four outlined feature cards with gradient-colored borders, a two-column tweet grid on a light-grey surface (`{colors.surface-card}`), and the dark-mode section with an indigo "See Dark Mode docs" button.

**Key characteristics:**
- Turquoise primary with a very dark teal label color instead of white on the button (`{colors.on-primary}` on `{colors.primary}`).
- One typeface for almost everything: Inter, with SF Pro, Segoe UI, Roboto, Oxygen, Ubuntu, Helvetica Neue, Helvetica and Arial as the fallback chain. Inconsolata is used for code samples.
- Radii are small and regular: buttons and inputs 6px (`{rounded.md}`), cards 12px (`{rounded.4xl}`), pills fully round (`{rounded.pill}`).
- Almost no shadow at rest: the button shadow is a zero-alpha two-layer stack that only becomes visible on interaction.
- Light and dark themes are first-class; the site demonstrates `data-theme="dark"` in its own marketing.
- Social brand buttons (Facebook, GitHub, etc.) appear on the button documentation page as part of the component catalog, using each network's own color; they are not part of Bulma's palette.

## Colors

### Brand and action
- **Turquoise primary** (`{colors.primary}`): the filled button background ("Get Started", "Download", "Open Customizer"). Bulma's own source defines it as `$turquoise: hsl(171, 100%, 41%)` in `sass/utilities/initial-variables.scss`.
- **On-primary** (`{colors.on-primary}`): button label color, a near-black teal. Bulma computes an "invert" color for every palette step, so text on turquoise is a dark tint of the same hue rather than white.
- **Link blue** (`{colors.link}`): inline links, the "Hover" state of the link button and nav link text. The "Active" state of the link button measured on the docs page is `{colors.link-active}`.
- **Accent blue** (`{colors.accent-blue}`): the vivid blue used in text links within the testimonial section and for the filled link-style buttons on the button docs page.

### Neutrals
- **Canvas** (`{colors.canvas}`): the default page background.
- **Ink** (`{colors.ink}`): headings and most-read text (by character count the most frequent text color on the homepage).
- **Ink body** (`{colors.ink-body}`): paragraph copy, card text, nav and footer text.
- **Ink muted** (`{colors.ink-muted}`): secondary lines such as tweet handles and timestamps.
- **Surface card** (`{colors.surface-card}`): the off-white behind tweet cards and feature cards.
- **Hairline** (`{colors.hairline}`): the most-used border color (outlined cards, separators, input borders on light).
- **Surface dark** (`{colors.surface-dark}`): the dark section, the code-sample panel and the dark-theme text input background.

### Code syntax (dark panel)
- **Code blue** (`{colors.code-blue}`) and **code green** (`{colors.code-green}`) color tag names and attribute values in the dark code window; they are measured text colors from that panel, not brand colors.
- Dark-theme text input: text `{colors.input-text-dark}` with border `{colors.input-border-dark}` on `{colors.surface-dark}`.

### Theme mechanics
Bulma's docs describe a theme as "a collection of CSS variables" defined at `:root`. Two themes ship (`light.scss`, required, and `dark.scss`, optional) and can be applied by `@media (prefers-color-scheme)`, the `[data-theme=name]` attribute or a `.theme-name` class. Every color is derived from HSL parts (`--bulma-link-h`, `-s`, `-l`) so changing one hue variable re-themes every component. The root of the live page exposes hundreds of these variables (for example `--bulma-text-85`, `--bulma-danger-35`, `--bulma-success-light`), including per-brand palettes for the Sass, CSS and HTML logos on the Expo page.

## Typography

| Role | Family | Size / line | Weight | Notes |
|---|---|---|---|---|
| Display (h1) | Inter stack | 64px / 72px | 800 | "The Modern CSS Framework" |
| Display mobile | Inter stack | 48px / 54px | 800 | measured at 390px viewport |
| Heading (h2) | Inter stack | 20px / 30px | 600 | card titles such as "100% Responsive" |
| Subheading (h3) | Inter stack | 16px / 24px | 400 | uppercase, letter-spacing 1.6px |
| Body | Inter stack | 20px / 30px | 400 | hero paragraph |
| Button | Inter stack | 20px / 30px | 500 | large hero buttons |
| Button secondary | Inter stack | 16px / 24px | 500 | standard-size buttons |

Bulma's initial variables define a six-step size scale of `3rem`, `2.5rem`, `2rem`, `1.5rem`, `1.25rem`, `1rem` plus `0.75rem`, and weights of 300, 400, 500, 600, 700 and 800 (`$weight-extrabold: 800` is what the hero headline uses). The primary family is Inter, with SF Pro and Segoe UI ahead of system fallbacks; the monospace family begins with Inconsolata.

**Font substitutes:** Inter is an open-source family and is loaded from the web; no substitute is needed. If Inter is unavailable, the stack falls through to SF Pro, Segoe UI, Roboto, then Helvetica Neue.

**Principles**
- Weight carries hierarchy more than size: 800 for the hero, 600 for card titles, 400 for prose.
- The uppercase tracked h3 style (1.6px) is used as an eyebrow, never for running text.
- Body copy on the homepage is 20px, noticeably larger than the 16px used inside components, giving the marketing layer an airy reading rhythm.
- Code is always monospace on a dark panel.

## Layout

- The homepage is a single-column marketing flow centered in a 1280px-wide measured viewport; the hero text block is about 560px wide, leaving wide margins on either side.
- Feature cards sit in a two-column grid (two rows of two) with gaps of 24px; the tweet section is also two columns.
- Spacing tokens measured on the page: 2, 4, 5, 6, 7, 8, 10, 11, 12 and 16px for component interiors (`{spacing.s1}` to `{spacing.s10}`), and 4, 8, 12, 16, 24 and 48px for gaps between components.
- Navigation uses 32px padding around a row of icon-plus-label links.
- Sections alternate background: white, off-white tweet band, dark mode band. Vertical rhythm between sections is large (the page is about 12,000px tall at desktop width).
- Cards are the main grouping device; there are no full-bleed photographs, only logos, icons and screenshots of code.

## Elevation & Depth

Bulma's marketing surface is nearly flat.
- **Button rest shadow:** a two-layer stack of zero-alpha rgba(51, 51, 51) at 1px/2px and 2px/4px offsets. It exists so the component can transition to the 0.05-alpha version, visible on the "Hover" examples on the button page.
- **Input inset:** the text input carries `inset 0 1px 2px` at 5% near-black, giving fields a slightly recessed look.
- **Modal card:** the sponsor modal uses a 1px 15% black ring plus a 10px soft drop shadow, together with a dimming overlay at about 90% black.
- **Feature cards** are outlined, not shadowed; some carry a colored glow border for emphasis.

No other shadows are used for hierarchy; depth comes from surface contrast (white vs `{colors.surface-card}` vs `{colors.surface-dark}`).

## Shapes

The radius scale in the official initial variables is `0.25rem` (small), `0.375rem` (default), `0.5em` (medium), `0.75rem` (large) and `9999px` (rounded). The measured page confirms the scale:

| Token | Value | Where it appears |
|---|---|---|
| `{rounded.xs}` | 3px | small chips |
| `{rounded.sm}` | 4px | tags, small controls (most frequent radius) |
| `{rounded.md}` | 6px | buttons and inputs |
| `{rounded.lg}` | 7px | variant buttons on docs |
| `{rounded.xl}` | 8px | inner panels |
| `{rounded.2xl}` | 10px | tweet avatars and badges |
| `{rounded.3xl}` | 10.5px | measured sub-pixel variant |
| `{rounded.4xl}` | 12px | cards |
| `{rounded.pill}` | 9999px | pills and avatars |

Button groups on the docs page use split radii (rounded outer corners, square inner corners) so attached buttons read as one control.

## Components

### Buttons
- **Primary (hero)**: `{colors.primary}` background, `{colors.on-primary}` label, `{typography.button}`, 6px radius, padding 16.25px by 20px, height 63px. Labeled "Get Started" and "Download".
- **Secondary / standard**: same colors with `{typography.button-secondary}`, padding 8px by 16px, height 40px. "Open Customizer" and "Download" in the nav use this size.
- **Variants on the docs page**: link blue buttons whose label is a pale tint, danger red with a very dark red label, plus social brand buttons at 14px. States are shown as literal "Hover" and "Active" examples.
- **Dark-section button**: "See Dark Mode docs" is an indigo filled button with an arrow icon, using the "moon" palette from the theme variables.

### Links and navigation
- **Link**: `{colors.link}` with the uppercase tracked subheading typography as measured on nav links.
- **Nav**: 32px padding, body-grey text (`{colors.ink-body}`), icon plus label (Docs, Expo, Love, Sponsor), search icon and a Download button at the right.

### Text input
- Dark version: `{colors.surface-dark}` background, `{colors.input-text-dark}` text, `{colors.input-border-dark}` border, 6px radius, 40px tall, padding 7px by 11px, inset shadow.

### Cards
- Background `{colors.surface-card}`, text `{colors.ink-body}`, radius 12px, padding 22.5px. Used for tweets and feature blurbs, each with an icon, a 20px/600 title and a one-line description.

### Message / notification
- The dark-mode demo shows `message is-success` as a green panel with a left accent border and a short "Changes successfully saved" line.

### Footer
- Plain text in `{colors.ink-body}` with no distinct background.

## Design System Architecture

Bulma is itself the design system. Sources opened for this file:
- **CSS variables**: https://bulma.io/documentation/features/css-variables/ - all components are styled via CSS variables prefixed `--bulma-`, defined at `:root` or per component (the `.title` element uses `--bulma-title-color`, `-size`, `-weight`, `-line-height`). The prefix is configurable via the `$cssvars-prefix` Sass variable.
- **Themes**: https://bulma.io/documentation/features/themes/ - light and dark themes, three selector strategies (media query, `data-theme`, class), and a recipe for authoring custom themes.
- **Sass tokens**: `sass/utilities/initial-variables.scss` in the jgthms/bulma repo holds the raw palette (blacks, greys, whites in hue 221, plus orange, yellow, green, turquoise, cyan, blue, purple, red), the size scale, the weight scale and the five radii. `sass/themes/light.scss` and `_index.scss` wire those variables into theme mixins (`light.light-theme` and `setup.setup-theme`).
- **Customization**: Sass is consumed through the modern `@use ... with (...)` syntax; hundreds of derived variables are generated from each hue, saturation and lightness triple, producing steps such as `-05` through `-100` with matching `-invert` text colors.

The practical consequence for a designer is that every Bulma color belongs to a ramp: a hue plus saturation plus a lightness step, with an automatically computed readable label color. That is why the primary button label is a dark teal and not white.

## Imagery, Voice and Density

### Imagery and art direction
- The brand mark is a three-stripe "M" glyph in turquoise beside a heavy black BULMA wordmark; it reappears as the favicon-scale icon in the promotional card.
- Screenshots are of code, never of people, except for small round avatars in testimonial tweets.
- Feature cards use a single line icon each (a phone, the CSS3 shield, an asterisk, a GitHub cat) tinted in the card's accent color.
- Card outlines on the homepage cycle through a rainbow of accent colors (red-orange, cyan, green, grey), a playful nod to the palette ramps without ever filling a surface with them.
- The dark-mode band uses a deep indigo-black background, a violet moon icon and violet subheading text; the violet comes from Bulma's "moon" palette variables.

### Microcopy voice
- Short imperative labels: "Get Started", "Download", "Open Customizer", "Save Changes", "Cancel".
- Feature cards pair a two-word title with a six-word promise: "Easy / Download. Customize. Done." and "Free / Open Source on GitHub".
- Testimonials are shown verbatim as embedded tweets with date stamps, giving social proof an informal register ("I think I'm in love").
- The sponsor card speaks in plain enumerations with emoji ("online interactive courses, educational videos, and project-building tutorials").

### Density
- Medium-low density: one idea per section, large type, and 24px to 48px gaps between grouped elements.
- Docs pages (the button page) are far denser: 14px type is the most common size there, with many small 7px and 6px radius elements side by side to show every state.

### Interaction states
- Buttons demonstrate Hover and Active examples on the docs page; Hover steps the link blue to `{colors.link}` and Active deepens it to `{colors.link-active}`.
- Measured button shadows go from zero alpha to 5% alpha on the docs page's Hover examples, a faint lift without movement.

## Component Anatomy Reference

| Component | Background | Text | Radius | Padding | Height |
|---|---|---|---|---|---|
| Hero button | `{colors.primary}` | `{colors.on-primary}` | `{rounded.md}` | 16.25px 20px | 63px |
| Standard button | `{colors.primary}` | `{colors.on-primary}` | `{rounded.md}` | 8px 16px | 40px |
| Dark text input | `{colors.surface-dark}` | `{colors.input-text-dark}` | `{rounded.md}` | 7px 11px | 40px |
| Card | `{colors.surface-card}` | `{colors.ink-body}` | `{rounded.4xl}` | 22.5px | content |
| Nav | transparent | `{colors.ink-body}` | none | 32px | content |

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the one primary action in a view and pair it with `{colors.on-primary}` text.
- Keep Inter at 800 for display, 600 for card titles, 400 for prose.
- Use 6px radius on buttons and inputs, 12px on cards.
- Show components in both light and dark themes when documenting.
- Keep shadows imperceptible at rest and let surface color create depth.

**Don't**
- Don't put white text on the turquoise button; the system's contrast pairing is the dark teal.
- Don't introduce a second saturated brand color; links and variants already provide blue.
- Don't use the social brand colors (Facebook blue etc.) outside their buttons.
- Don't stack heavy drop shadows on cards; the system uses outline and surface contrast.
- Don't use the uppercase tracked style for paragraph text.

## Responsive Behavior

- The hero heading drops from 64px/72px on desktop to 48px/54px at 390px width; line height keeps a 9:8 ratio.
- Bulma's docs expose responsive typography helpers such as `is-size-1-mobile` and `is-size-5-desktop`, and the framework is described on the homepage as "100% Responsive, designed mobile-first".
- Dark mode follows `prefers-color-scheme` unless a `data-theme` attribute overrides it.
- The 390px mobile measurement keeps Inter and the 800 weight; only size and line height change for the h1.
- Text sizes in the official scale are rem-based (3rem down to 0.75rem), so they follow the user's root font size.
- The homepage is about 12,000px tall at desktop width, so the mobile page scrolls longer.

## Iteration Guide

1. Start from the tokens: canvas, ink, primary, on-primary. A new Bulma-like page should read correctly with only those four.
2. Choose the button size first: 63px/20px for a hero, 40px/16px everywhere else; both use 6px radius.
3. Layer neutrals: card surface for grouped content, dark surface only for code or a theme demonstration.
4. Add blue only for links and the link button variant.
5. Keep headings Inter 800 at display size and 600 at card size; do not interpolate weights.
6. Check the page in dark mode: the primary stays turquoise, ink inverts, surfaces become the dark neutral.
7. If a value is needed that is not in this file, measure it on bulma.io or read it from the Sass variables rather than estimating.
