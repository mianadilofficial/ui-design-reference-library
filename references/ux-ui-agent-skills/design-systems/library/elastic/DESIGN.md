---
version: alpha
name: Elastic
category: "Design Systems"
description: "Elastic's site sets display headlines in Geist Mono (64px, weight 500, -1.28px tracking) over Inter body text at 16px, on a white canvas with a single action blue (#0b64dd), 4px-radius buttons, a near-black #1c1e23 footer, and an isometric product illustration. Its EUI framework uses the same blue with 8px controls."

colors:
  canvas: "#ffffff"
  ink: "#1c1e23"
  ink-body: "#343741"
  ink-on-dark: "#d4dae5"
  primary: "#0b64dd"
  on-primary: "#ffffff"
  primary-hover: "#094dab"
  eui-text: "#384861"
  eui-title: "#111c2c"
  eui-border: "#cad3e2"
  eui-surface-subdued: "#f6f9fc"
  eui-link: "#1750ba"

typography:
  display:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 64px
    fontWeight: 500
    lineHeight: 76.8px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
    letterSpacing: "-0.62px"
  subheading:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.36px"
  body:
    fontFamily: Inter, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, Arial, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 22.5px
  nav:
    fontFamily: Inter, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  eui-button:
    fontFamily: Inter, "system-ui", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 450

rounded:
  xs: 4px
  control: 8px
  panel: 12px

spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 24px
  s10: 32px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 24px
    borderColor: "{colors.primary}"
  eui-button-fill:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.eui-button}"
    rounded: "{rounded.control}"
    padding: 0px 12px
    height: 40px
  eui-button-empty:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.eui-text}"
    typography: "{typography.eui-button}"
    rounded: "{rounded.control}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.eui-border}"
  eui-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.eui-text}"
    typography: "{typography.eui-button}"
    rounded: "{rounded.control}"
    height: 32px
    borderColor: "{colors.eui-border}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The elastic.co home page, as captured, is a technical-editorial landing page that treats the product as the hero. A thin announcement strip ("The Forrester Wave: XDR Platforms, Q2 2026 - Access report") sits above a white navigation bar with the multicolor Elastic mark and wordmark, menus (Elasticsearch, Solutions, Enterprise, Resources), plain Pricing and Docs links, a pill-shaped search field, a filled blue "Start free trial" button and an outlined "Contact sales" button. The hero is split: on the left a 64px Geist Mono headline ("Elasticsearch: The search database for AI"), a one-sentence Inter subtitle and two buttons; on the right an isometric block diagram in orange, pink, blue and grey with monospaced uppercase callout labels ("ELASTIC SECURITY SOLUTION", "KIBANA - VISUALIZE") on a faint dot grid. A row of customer logos (BBC, Goldman Sachs, OpenAI, LangChain, Pepsico, Groq, Pfizer, T-Mobile, Waymo) follows, then a "SOLUTIONS" eyebrow in spaced blue capitals, a centered mono H2, three text columns (Search and AI, Observability, Security) with arrow links, and a large framed screenshot of the Kibana-style Security product UI. The page continues with a "PLATFORM" band.

The tone is engineer-to-engineer: short declarative claims ("Vector search retrieves the relevant passage. Agents search across your data to find the right answer.") and verbs in links ("Discover Search", "Explore the platform").

**Key Characteristics:**
- Monospaced display type (Geist Mono 500) with negative tracking against Inter body copy; the mono voice signals code and data.
- One action blue, `{colors.primary}` (#0b64dd), on white; hover darkens to `{colors.primary-hover}`.
- Product UI screenshots and an isometric architecture illustration, not stock photography, carry the visuals.
- Eyebrow labels in spaced uppercase blue ("SOLUTIONS", "PLATFORM") introduce each band.
- Near-black `{colors.ink}` footer; the rest of the page stays white with faint grey separators.
- Tight 4px button corners on the marketing site; 8px controls inside the EUI product framework.

## Colors

> **Source pages:** home (`https://www.elastic.co`) at 1280px and 390px; EUI Button docs page (`https://eui.elastic.co/docs/components/navigation/buttons/button`) measured as `elastic--button`.

- **Primary blue** `{colors.primary}` #0b64dd: fill of "Start free trial" and the border of "Contact sales"; the page CSS also names it `--button-primary-bg: #0B64DD`. EUI's Borealis theme defines `primary90` as `blue90` = #0B64DD in its primitive color file ([_primitive_colors.ts](https://github.com/elastic/eui/blob/main/packages/eui-theme-borealis/src/variables/colors/_primitive_colors.ts)), and the extractor measured the same fill on EUI buttons, so the marketing and product blues are the same value.
- **Primary hover** `{colors.primary-hover}` #094dab (page variable `--color-blue-elasticDark`).
- **Ink:** `{colors.ink}` #1c1e23 for headlines and footer, `{colors.ink-body}` #343741 for paragraph text, `{colors.ink-on-dark}` #d4dae5 for text on the dark footer.
- **EUI palette (product):** `{colors.eui-text}` #384861 (blueGrey110, the framework's paragraph text), `{colors.eui-title}` #111c2c (blueGrey140, titles), `{colors.eui-border}` #cad3e2 (control borders), `{colors.eui-surface-subdued}` #f6f9fc (subdued panels), `{colors.eui-link}` #1750ba (blue100, link/text-primary).
- **Illustration accents** (orange, pink, cyan) appear in the hero diagram and the Security column highlight (a pale pink-orange tint); they are not interface colors.

## Typography

Two families on the marketing page: **Geist Mono** for H1, H2 and H3 (64px, 32px, 20px at weight 500 with -1.28px, -0.64px and -0.36px tracking) and **Inter** for body, navigation and buttons. A third face, MierB 600, is loaded for some buttons ("Contact sales" and a second "Start free trial" measured at 16px/600 with 8px 24px padding). Inter is variable (100 to 900) and Geist Mono likewise.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| Display (`{typography.display}`) | 64px / 76.8px | 500 | -1.28px |
| Display, mobile (`{typography.display-mobile}`) | 32px / 38.4px | 500 | -0.62px |
| Subheading (`{typography.subheading}`) | 20px / 24px | 500 | -0.36px |
| Body (`{typography.body}`) | 16px / 24px | 400 | normal |
| Button (`{typography.button}`) | 15px / 22.5px | 500 | normal |
| Nav (`{typography.nav}`) | 14px / 14px | 400 | normal |
| EUI button (`{typography.eui-button}`) | 14px | 450 | normal |

EUI's theme file sets Inter as `font.family`, Roboto Mono for code, a scale of 9, 11, 12, 14, 16, 20, 24 and 30px, weights light 300, regular 400, medium 450, semiBold 500, bold 600, and a 1.5 line-height multiplier ([_typography.ts](https://github.com/elastic/eui/blob/main/packages/eui-theme-borealis/src/variables/_typography.ts)). Page fallbacks are `monospace` for Geist Mono and Arial for Inter.

## Layout

The 1280px home page uses a centered wide container with a two-column hero (text left, illustration right), a full-width logo strip, then centered section headers followed by three equal text columns, and a large rounded framed product screenshot. The CSS defines container tokens such as `--container-md: 1100px` and tablet type variables (`--font-size-tablet-h3: 48px`). Spacing values measured include 2, 4, 6, 8, 9, 12, 14, 16, 24 and 32px (`{spacing.s1}` to `{spacing.s10}`). Section rhythm is generous: roughly one headline, one paragraph and one text link per column.

## Elevation & Depth

Flat by default. Separation uses 1px light grey rules (`#dce2ea` and `#e3e8f2` were measured as borders) and background shifts. The product screenshot sits in a soft-shadowed rounded frame with a dotted halo behind it; interface cards inside EUI use light borders. The page CSS includes a Bootstrap-style `--bs-box-shadow` but the home page content does not rely on it.

## Shapes

Marketing buttons use 4px corners (`{rounded.xs}`); EUI controls use 8px (`{rounded.control}`) and panels 12px (`{rounded.panel}`), consistent with Borealis' border radius file, which maps small, medium and inline to 4px, control to 8px, panel to 12px and frame to 16px ([_borders.ts](https://github.com/elastic/eui/blob/main/packages/eui-theme-borealis/src/variables/_borders.ts)). The search field is pill-shaped; the Elastic mark and customer logos are free-standing.

## Components

- **Primary button** (`{components.button-primary}`): `{colors.primary}` fill and 2px border, white Inter 15px/500 text, 4px corners, 44px high, padding 0px 24px; hover `{components.button-primary-hover}`.
- **Outline button** (`{components.button-outline}`): transparent over white, blue text and a 2px blue border, same geometry ("Contact sales").
- **Text link with arrow:** blue Inter, followed by a thin right-arrow ("Discover Search").
- **Navigation:** white bar, 14px dark text, menus with chevrons, a pill search field.
- **EUI fill button** (`{components.eui-button-fill}`): `{colors.primary}` fill, 14px/450 text, 8px corners, 40px high, padding 0px 12px ("Create index pattern", "Save").
- **EUI text-color button** (`{components.eui-button-empty}`): white with a 1px `{colors.eui-border}` border and `{colors.eui-text}` text.
- **EUI input** (`{components.eui-input}`): 32px high, 8px radius, 1px `{colors.eui-border}`.
- **Footer:** `{colors.ink}` with white and `{colors.ink-on-dark}` text.

## Design System Architecture

Elastic publishes the **Elastic UI Framework (EUI)** at [eui.elastic.co](https://eui.elastic.co): a React component library whose home page lists Flexible layout, Spacer, Text, Title, Forms, Button, Link, Tooltip, Panel, Callout, Card and Table, plus "Tokens" for developers and Patterns, Content and Icons for designers, and says EUI is dual-licensed under Elastic License 2.0 (and the Server Side Public License per the theme file headers). Its [button docs](https://eui.elastic.co/docs/components/navigation/buttons/button) describe fill, primary color and size props and rules such as "Place the primary action on the bottom right with the secondary action on its left in modals." The source is the open [elastic/eui](https://github.com/elastic/eui) monorepo, with packages including `eui`, `eui-theme-borealis`, `eui-theme-common` and `docusaurus-theme`.

The Borealis theme package holds the token source: colors (primitive and semantic files, with separate light and dark files; the primitives opened here include blue and blueGrey ramps), typography, borders, sizes (xxs 2px, xs 4px, s 8px, m 12px, base 16px, l 24px, xl 32px, xxl 40px, xxxl 48px, xxxxl 64px) and buttons. The elastic.co page's own CSS uses Bootstrap-derived (`--bs-*`), Tailwind (`--tw-*`) and bespoke variables (`--button-primary-bg`, `--font-family-body`), but its action color, body font (Inter) and button geometry correspond to values in the EUI theme.

## Do's and Don'ts

**Do**
- Pair a Geist Mono headline with Inter text, and keep headline tracking negative.
- Use `{colors.primary}` for the one main action per band, with an outlined sibling for the secondary action.
- Show real product UI and architecture diagrams instead of stock imagery.
- Use spaced uppercase eyebrows in blue to label bands.

**Don't**
- Don't round marketing buttons beyond 4px; reserve 8px for product controls.
- Don't introduce a second action color beside the blue.
- Don't set body copy in the mono face.
- Don't put drop shadows on text blocks or cards on the marketing page.

## Responsive Behavior

On mobile (390px) the H1 falls from 64px to 32px (line height 38.4px, tracking -0.62px; `{typography.display-mobile}`). The CSS exposes tablet type variables (for example `--font-size-tablet-h3: 48px`, `--font-size-tablet-blockquote: 32px`, `--font-size-tablet-eyebrow: 16px`), so there is an intermediate tablet type tier. The Borealis package contains a `_breakpoint.ts` variables file (not read here); the layout detail of how the home page columns collapse was not measured beyond the display size change.

## Iteration Guide

1. Start from white, `{colors.ink}` text and one blue action; set display type in Geist Mono at weight 500.
2. Build the hero as headline, one sentence, two buttons (filled and outlined), and a technical illustration on the right.
3. Reuse `{components.button-primary}` before adding variants; keep hover as the darker blue.
4. For product screens, switch to EUI values: 14px/450 Inter, 8px controls, `{colors.eui-border}` borders.
5. Run `node web/scripts/verify-designs.mjs --slug=elastic` after edits.
