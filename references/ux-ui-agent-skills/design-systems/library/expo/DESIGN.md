---
version: alpha
name: Expo
category: "Developer Tools & IDEs"
description: "Expo's site is a white and cool-grey canvas (#ffffff, #f9f9fb) with near-black #1c2024 text set in Inter 600 at -2px tracking, pure #000000 pill buttons, 40px-radius cards and a JetBrains Mono eyebrow."

colors:
  canvas: "#ffffff"
  ink: "#1c2024"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-subtle: "#f9f9fb"
  surface-element: "#f0f0f3"
  surface-hover: "#e8e8ec"
  ink-secondary: "#60646c"
  ink-quaternary: "#8b8d98"
  link: "#0d74ce"
  accent-blue: "#0090ff"
  hairline: "#e0e1e6"
  border-default: "#d9d9e0"

typography:
  display:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
    letterSpacing: "-1.2px"
  display-section:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
    letterSpacing: "-2px"
  heading:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
    letterSpacing: "-0.5px"
  title:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.2px
    letterSpacing: "-0.5px"
  body:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  body-regular:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 19.6px
  nav:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 19.6px
  button-small:
    fontFamily: Inter, -apple-system, "system-ui", sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 19.2px
  eyebrow:
    fontFamily: "\"JetBrains Mono\", monospace"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 19.2px

rounded:
  xs: 12px
  sm: 16px
  lg: 20px
  3xl: 24px
  4xl: 32px
  nav-cta: 36px
  cta: 40px
  pill: 9999px

spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
  s11: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-primary-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.nav-cta}"
    padding: 0px 16px
    height: 36px
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.surface-element}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 16px
    height: 40px
  button-accent:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 32px
    borderColor: "{colors.accent-blue}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.nav}"
    rounded: "{rounded.3xl}"
    padding: 0px 12px
    height: 36px
  card:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    rounded: "{rounded.cta}"
    padding: 40px
  eyebrow:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.eyebrow}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Expo's home page positions the company as "Mobile AI infrastructure." It is a restrained, monochrome, near-product-less layout: a large white field (`{colors.canvas}`), cool off-white cards (`{colors.surface-subtle}` `#f9f9fb`), near-black text (`{colors.ink}` `#1c2024`) and pure black (`{colors.primary}` `#000000`) pills. The official brand page states the philosophy directly: "a neutral, reliable foundation that empowers developers to bring their ideas to life", emphasizing "simplicity, spaciousness, and consistency." The page behaves accordingly — wide margins, big cards, few colors, the only saturated areas being app icons, gradient washes inside a promo card and diagrams.

The hero pairs a two-line Inter headline ("Mobile AI infrastructure", `{typography.display}` 48px/52.8px, weight 600, -1.2px) with a black "Get started →" pill and a grey "Talk to our team" pill, a small "New · Try Observe →" announcement chip, and a three-line paragraph. On the right, a starburst of dotted rays surrounds the white Expo logo tile. Below, a mono eyebrow line ("3M+ developers. 50K+ GitHub stars. Trusted in production by:") sits above a row of customer app icons, then rounded grey panels carry the rest of the story.

**Key Characteristics:**
- Pill geometry: buttons are 40px- or fully-rounded; cards use a 40px radius (`{rounded.cta}`), so large containers also read as soft pills.
- Black is the action color (`{colors.primary}`); hover moves the primary fill to `{colors.ink}`.
- Cool-grey surface family: `{colors.surface-subtle}` `#f9f9fb`, `{colors.surface-element}` `#f0f0f3`, `{colors.surface-hover}` `#e8e8ec`, `{colors.hairline}` `#e0e1e6`.
- Inter at weights 500–600 with strongly negative tracking on large headings (-2px at 48px, -0.5px at 24-32px).
- A JetBrains Mono uppercase eyebrow for proof points.
- Link blue (`{colors.link}` `#0d74ce`) reserved for text links such as "Learn more".
- Bento-style card grid: one full-width card, a tall card beside a stack, then three-up and two-up rows.

### Imagery and Voice

- **Hero art.** A dotted-ray starburst radiating from a white rounded tile with the Expo caret logo, in light grey on white.
- **Customer app icons.** A single row of colorful rounded-square app icons trusted in production, fading out at the right edge.
- **Isometric diagram.** An outlined isometric cube with blue translucent planes and dashed lines inside the "Building blocks for agentic workflows" card, switching with the tabs Develop, Test and Monitor.
- **Card art.** A chrome/glass 3D Expo caret on "The Expo SDK"; a phone screenshot with a photo grid on "100+ production APIs"; floating language tiles (Swift, Java, TypeScript, Objective-C, Kotlin) on "All native code welcome"; a blue-to-orange blurred gradient behind the AI-connector card.
- **Voice.** Short, confident developer copy: "Build with our CLI and dev tools. Test on simulators made for agents. Ship with the best CI/CD for mobile and learn from every release.", "10+ years in the making. Powering thousands of apps.", "Infrastructure for your apps."
- **Naming.** Product names are capitalized single words (Expo, Expo SDK, Expo Go); the brand page forbids using the marks in product or domain names without written permission.

### Capture Observations

- The page is overwhelmingly `{colors.canvas}` and `{colors.surface-subtle}`, so cards separate from the page by a subtle value shift rather than borders or shadows.
- The sticky header (white, bottom border in `{colors.hairline}`) reads: Expo logo, Docs ↗, Product ▾, Solutions ▾, Enterprise, Pricing, Blog; right side GitHub star count (50K), a white outlined "Log in" pill and a black "Sign up" pill.
- Headings inside cards are large and centered ("The Expo SDK" at 48px); body lines beneath are 16px.
- Black pill buttons recur at three sizes: 36px in the header, 40px in the hero and 48px in card/section CTAs ("expo/expo", "Learn more").

### Page Anatomy (top to bottom, from the capture)

1. **Announcement chip.** "New · Try Observe →" in a small outlined pill under the hero buttons, 12px/500 `{colors.ink-secondary}` text.
2. **Hero.** Headline left, starburst graphic right; the paragraph sits below the chip.
3. **Proof line.** "3M+ developers. 50K+ GitHub stars. Trusted in production by:" in the uppercase mono eyebrow, centered.
4. **App-icon row.** A row of rounded-square app icons, the last ones fading into the page.
5. **Building blocks card.** Full-width `{colors.surface-subtle}` card: a two-line `{typography.heading}` title, then a vertical list of tabs (Develop with a play icon, Test, Monitor) at `{typography.title}`; the active tab expands to show a four-line description, and the isometric cube illustration sits on the right.
6. **Bento grid.** "The Expo SDK" (tall card with the 3D caret and a black "expo/expo" pill), "Powering AI-native app devs" (gradient card with a "Try the Expo Claude Code connector" grey pill), "100+ production APIs one `install` away" (phone mockup; `install` set in an inline mono chip) and "All native code welcome" (floating language tiles).
7. **Closing section.** "Infrastructure for your apps" at `{typography.display-section}`, a row of platform names with icons (Expo, React Native, Swift, Jetpack Compose, Kotlin) and a black "Learn more" pill.

### Interaction States (measured)

| Element | Default | Hover / other |
|---|---|---|
| Primary pill | `{colors.primary}` fill | `{colors.ink}` fill |
| Secondary pill | `{colors.surface-element}` | theme hover `#e0e1e6` |
| Nav link | `{colors.ink-secondary}` | not recorded |
| Text link | `{colors.link}` | not recorded |

### Accessibility Notes

- `{colors.ink}` on `{colors.canvas}` and white on `{colors.primary}` are high-contrast pairs.
- `{colors.ink-secondary}` (`#60646c`) on white is used for 12-14px text; keep it at weight 500 or above at those sizes.
- Button labels are 14-16px at weight 500-600 and do not rely on color alone; arrows and icons accompany key actions.

## Colors

> **Source pages:** home (`/`), measured with the extractor and computed-style probes. Token names and values for the theme variables (`--expo-theme-*`) come from the site's own root variables; their structure is documented in the official `@expo/styleguide` package.

### Brand & Accent
- **Primary** (`{colors.primary}` — `#000000`): All primary buttons (`--expo-theme-button-primary-background: #000`).
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on black pills.
- **Link** (`{colors.link}` — `#0d74ce`): Text links, info text (`--expo-theme-text-link`).
- **Accent Blue** (`{colors.accent-blue}` — `#0090ff`): The "Subscribe" button (a 32px filled blue pill); the only saturated filled control measured.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Page and header (`--expo-theme-background-default`).
- **Surface Subtle** (`{colors.surface-subtle}` — `#f9f9fb`): Large cards (`--expo-theme-background-subtle`).
- **Surface Element** (`{colors.surface-element}` — `#f0f0f3`): Secondary pills such as "Talk to our team" (`--expo-theme-background-element`).
- **Surface Hover** (`{colors.surface-hover}` — `#e8e8ec`): Hover background in the theme (`--expo-theme-background-hover`).
- **Hairline** (`{colors.hairline}` — `#e0e1e6`): Dividers and the selected-state background (`--expo-theme-background-selected`).
- **Border Default** (`{colors.border-default}` — `#d9d9e0`): `--expo-theme-border-default`.

### Text
- **Ink** (`{colors.ink}` — `#1c2024`): Headings and body (`--expo-theme-text-default`).
- **Ink Secondary** (`{colors.ink-secondary}` — `#60646c`): Nav links, eyebrow, secondary copy.
- **Ink Quaternary** (`{colors.ink-quaternary}` — `#8b8d98`): Disabled and tertiary text.

### Theme semantics (from the site's root variables)
The theme defines paired backgrounds, borders and text for status: danger (`#feebec`, `#f4a9aa`, text `#ce2c31`), success (`#e6f6eb`, `#8eceaa`), warning (`#fff7c2`, `#e9c162`, text `#ab6400`), info (`#e6f4fe`, `#8ec8f6`, text `#0d74ce`) and preview (`#f7edfe`, `#d1afec`, text `#8145b5`). These are not used on the marketing page capture and are not tokenized here beyond the link blue.

## Typography

### Font Family
- **Inter** (variable, weights 100–900) loaded as a web font; fallback `-apple-system, system-ui, sans-serif`.
- **JetBrains Mono** (weights 100–800) loaded for eyebrow and code text.
- The theme's default stack (`--default-font-family`) lists `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", Arial, sans-serif`; the mono stack is `ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace`.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 48px | 600 | 52.8px | -1.2px | Hero h1 |
| `{typography.display-section}` | 48px | 600 | 52.8px | -2px | Card and section headlines ("The Expo SDK", "Infrastructure for your apps") |
| `{typography.heading}` | 32px | 600 | 35.2px | -0.5px | "Building blocks for agentic workflows" |
| `{typography.title}` | 24px | 600 | 31.2px | -0.5px | Card titles and tab labels |
| `{typography.body}` | 16px | 500 | 22.4px | normal | Paragraphs, large buttons, links |
| `{typography.body-regular}` | 16px | 400 | 22.4px | normal | Card body text |
| `{typography.button}` | 14px | 600 | 19.6px | normal | Hero and secondary buttons |
| `{typography.nav}` | 14px | 500 | 19.6px | normal | Nav links, header buttons |
| `{typography.button-small}` | 12px | 600 | 19.2px | normal | Subscribe button |
| `{typography.eyebrow}` | 12px | 400 | 19.2px | normal | Uppercase proof line (JetBrains Mono) |

### Official scale
The `@expo/styleguide` Tailwind configuration defines heading classes: 5xl 64px, 4xl 48px, 3xl 32px, 2xl 24px, xl 20px, lg 18px, base 16px, sm 14px, xs 12px, all at weight 600 with letter spacing of -3px at 64px, -2px at 48px, -0.5px at 32px and 24px, -0.25px at 20px, and 0 below. Its text scale runs 24px (weight 500), 20px (500), 18px, 16px, 14px, 12px (400) and 10px (500), and an `.eyebrow` component sets JetBrains Mono at 12px, weight 500, line height 1.0, letter spacing -0.5px, uppercase. The live page's 48px / -2px section headings and 32px / -0.5px heading match those steps.

### Principles
- **Tight, heavy headlines.** Weight 600 with negative tracking proportional to size.
- **Weight 500 body.** The measured hero paragraph and large buttons use 500, a touch heavier than the 400 in the styleguide's text scale.
- **Mono as a label.** JetBrains Mono appears only in uppercase eyebrows and code fragments.

### Note on Font Substitutes
Inter and JetBrains Mono are open-source; no substitute is needed.

## Layout

- **Container.** Content runs nearly edge to edge with an outer margin of about 24px at 1280px (read from the capture); cards span up to about 1221px wide.
- **Bento grid.** One full-width card (1221px wide, ~555px tall), a two-column row (591px each) with a tall left card (~612px) and a right column of a wide card above two half cards, then a centered closing section.
- **Card padding.** 40px (some cards `40px 40px 0px` with imagery bleeding off the bottom).
- **Header.** About 36px-high controls; links at 14px with 12px horizontal padding and a 24px radius.
- **Spacing scale.** `{spacing.s3}` 4px, `{spacing.s5}` 8px, `{spacing.s7}` 12px, `{spacing.s8}` 16px, `{spacing.s9}` 24px, `{spacing.s10}` 32px, `{spacing.s11}` 40px. The styleguide declares max widths 420, 740, 960, 1200 and 1524px (`screen-sm` to `screen-2xl`).
- **Section rhythm.** Large vertical gaps between hero, logo row, cards and closing section.

## Elevation & Depth

Flat. Cards sit directly on the canvas with no border and no shadow; separation is purely tonal (`{colors.surface-subtle}` on `{colors.canvas}`). Buttons carry an empty multi-layer shadow stack that resolves to nothing. The theme defines shadow steps, of which the larger ones are `lg` (`0 15px 25px #0000001f, 0 5px 10px #0000000d`) and `xl` (`0 20px 40px #00000026`), and `none` (`0 0 transparent`); these are for overlays such as menus and dialogs, which do not appear in the home capture. The marketing gradient card (blue to orange blurred wash) is the only place where color creates depth.

## Shapes

Measured radii: 12px (most common, 42 elements), 9999px (28), 16px (19), 40px (13), 36px (6), 25% (6, avatar-like tiles), 32px (5), 24px (4), 20px (2), 48px (1).
- `{rounded.pill}` — large "Get started" / "Learn more" buttons (48px high) and chips.
- `{rounded.cta}` 40px — hero buttons (40px high) and every large card.
- `{rounded.nav-cta}` 36px — "Sign up" in the header.
- `{rounded.4xl}` 32px — the blue Subscribe pill.
- `{rounded.3xl}` 24px — header link hover areas.
- `{rounded.lg}` 20px, `{rounded.sm}` 16px, `{rounded.xs}` 12px — inner tiles, thumbnails and chips.
- The official styleguide radii are 2, 4, 6, 8, 16, 20, 24px and full; the marketing site goes beyond them with 32-40px.

## Components

### Buttons
- **button-primary** — `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.cta}`, 40px high, padding `0px 16px`; hover fill `{colors.ink}` and a trailing arrow icon on "Get started".
- **button-primary-nav** — header "Sign up": 36px high, 14px/500, `{rounded.nav-cta}`.
- **button-primary-large** — 48px high, 16px/500, padding `0px 24px`, `{rounded.pill}`. "Learn more", "expo/expo" (with GitHub icon).
- **button-secondary** — `{colors.surface-element}` fill, `{colors.ink}` text, 40px, `{rounded.cta}` ("Talk to our team"). The header "Log in" is a white outlined pill.
- **button-accent** — `{colors.accent-blue}` fill and border, white 12px/600, 32px high, `{rounded.4xl}`; "Subscribe".
- Theme variants (not seen on the capture): secondary `#f0f0f3` with hover `#e0e1e6`, tertiary with a `#cdced6` border, quaternary text-only with hover `#f0f0f3`, each with destructive and disabled states.

### Cards
- **card** — `{colors.surface-subtle}`, `{rounded.cta}` 40px, padding 40px, centered illustration and heading, one pill CTA. The AI-connector card replaces the fill with a blue/orange blurred gradient.

### Navigation and Links
- **nav-link** — `{colors.ink-secondary}` 14px/500, 36px high, 12px side padding.
- **link** — `{colors.link}` at `{typography.body}` ("Learn more").
- **eyebrow** — uppercase JetBrains Mono 12px in `{colors.ink-secondary}`.
- **Chip** — "New" label plus "Try Observe →": 12px/500 `{colors.ink-secondary}` text in an outlined pill.

## Design System Architecture

Expo publishes the styleguide used across its sites and documents its brand rules.

- **Brand rules.** [expo.dev/brand](https://expo.dev/brand) states the brand philosophy ("simplicity, spaciousness, and consistency"), that the logo and wordmark are registered trademarks of 650 Industries, Inc., and the permitted and prohibited uses. It contains no colors or typography. Logos are in the [expo/logos](https://github.com/expo/logos) repository (SVG and PNG).
- **Styleguide package.** [`@expo/styleguide`](https://cdn.jsdelivr.net/npm/@expo/styleguide/README.md) (listed up to v14.4.0 on jsDelivr) ships a Tailwind theme (`tailwind.js`), global CSS and a `dist` folder. The README describes custom media scopes (`xs:`, `sm:`, `md:`, `lg:`, `xl:`), a `hocus:` variant that combines hover and focus, `heading-[size]` typography classes, `icon-[size]` classes and the Tailwind typography plugin.
- **Token layers.** In its `tailwind.js`, colors are semantic CSS variables: `--expo-theme-background-*` (default, screen, subtle, element, hover, selected, overlay, success, warning, danger, info, preview), `--expo-theme-text-*` (default, secondary, tertiary, quaternary, link, status colors), `--expo-theme-border-*`, `--expo-theme-icon-*`, and per-variant button variables (`--expo-theme-button-primary-*`, `-secondary-*`, `-tertiary-*`, `-quaternary-*`, each with destructive and disabled states). Below them sits a 12-step palette per hue (green, purple, pink, orange, yellow/amber, blue, red, gray/slate) exposed as `palette-<hue><1-12>`. Dark mode is toggled through a `dark-theme` class.
- **Live site.** The same `--expo-theme-*` variables are present in the home page's root variables with their light values (for example `--expo-theme-text-default: #1c2024`, `--expo-theme-background-subtle: #f9f9fb`), plus Tailwind variables (`--tw-*`, `--font-weight-*`) and component variables for accordion, dialog, banner and widgets.

## Do's and Don'ts

**Do**
- Make the primary action a black pill and keep it the highest-contrast object in its band.
- Use `{colors.surface-subtle}` cards at `{rounded.cta}` with 40px padding and one centered illustration each.
- Set headlines in Inter 600 with negative tracking scaled to size (`{typography.display-section}` -2px at 48px).
- Use `{colors.ink-secondary}` for supporting text, nav links and eyebrows; use `{colors.link}` only for text links.
- Let imagery (app icons, 3D marks, gradients) provide the page's color.
- Keep generous whitespace between sections.

**Don't**
- Do not add borders or drop shadows to cards; the system separates them by tone.
- Do not use the blue `{colors.accent-blue}` for primary actions; it appears only on the Subscribe pill.
- Do not modify, recolor or combine the Expo logo (brand rules).
- Do not set display text at weight 400 or with zero tracking.
- Do not mix square-cornered elements into the pill/rounded system.
- Do not put body copy in `{colors.ink-quaternary}`; it is reserved for disabled/tertiary text.

## Responsive Behavior

- **Breakpoints.** The styleguide declares media scopes `xs`, `sm`, `md`, `lg` and `xl`, and Tailwind screen max-widths of 420, 740, 960, 1200 and 1524px; the exact breakpoint widths used by the marketing site were not measured.
- **Mobile type.** The extractor records the h1 at the 390px mobile viewport; see `{typography.display}` for the desktop value.
- **Cards.** On desktop the bento grid uses one, two and three columns; the stacking order on mobile was not measured.
- **Touch size.** Primary buttons are 36px, 40px and 48px high; the 48px size is used for stand-alone calls to action.
- **Header.** The measured desktop header shows all links; the mobile header was not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.ink}` text and Inter; add `{colors.surface-subtle}` for cards.
2. Build the hero: `{typography.display}` headline, a black `button-primary` and a `button-secondary`, then a one-line eyebrow.
3. Use 40px-radius cards with 40px padding and a centered heading in `{typography.display-section}` or `{typography.title}`.
4. Reserve black for actions; use `{colors.link}` for inline links and `{colors.ink-secondary}` for support text.
5. Add one visual per card (3D mark, screenshot, tiles, gradient) rather than icons or borders.
6. For overlays and menus use the theme shadow steps; keep everything else flat.
7. Check that nothing besides imagery introduces a hue, and that black pills keep their white text.
