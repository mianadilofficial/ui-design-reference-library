---
version: alpha
name: Miro
category: "Design & Creative Tools"
description: >-
  Miro's homepage is a light-gray (#f0f0f0) canvas with dark ink #1c1c1e, a single saturated blue action #3859ff on 8px-radius buttons 40px tall (Noto Sans 16px/600), Roobert PRO Medium headlines at 56px/500 and 40px/400 with -1.2px tracking, floating product UI fragments joined by blue connector lines, and rounded 16-24px cards plus tall photo cards with white statistic overlays.

colors:
  canvas: "#f0f0f0"
  ink: "#1c1c1e"
  primary: "#3859ff"
  on-primary: "#ffffff"
  surface-dark: "#1c1c1e"
  ink-muted: "#555a6a"
  ink-black: "#000000"
  hairline-strong: "#c7cad5"
  primary-hover: "#314cd9"
  primary-pressed: "#2a41b6"
  text-input-border: "#e9eaef"
  card-glass: "#ffffff26"
typography:
  display:
    fontFamily: "\"Roobert PRO Medium\", \"Roobert PRO Medium Placeholder\", sans-serif"
    fontSize: 56px
    fontWeight: 500
    lineHeight: 61.6px
  display-mobile:
    fontFamily: "\"Roobert PRO Medium\", \"Roobert PRO Medium Placeholder\", sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  heading:
    fontFamily: "\"Roobert PRO Medium\", \"Roobert PRO Medium Placeholder\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: "-1.2px"
  body:
    fontFamily: "\"Roobert PRO Medium\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 27.6px
    letterSpacing: "-0.72px"
  button:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: "\"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 40px
  3xl: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 16px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
    padding: 12px
    boxShadow: rgba(0, 0, 0, 0.12) 0px 4px 12px 0px
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
---

## Overview

Miro sells a collaborative visual workspace, and the homepage at `https://miro.com/` (1280px desktop, 390px mobile) is built to look like the product: a soft gray surface, floating windows of the product, thin blue connector lines, and one blue button. The capture shows, top to bottom:

- A white header: a yellow rounded-square logo mark with black `miro` wordmark, links `Product`, `Use Cases`, `Solutions`, `Resources` (each with a chevron) and `Pricing`, then a plain `Login` text link, a white outlined `Contact sales` button and a solid blue `Get started free` button.
- A hero on a pale gray field with a faint warm-lilac glow behind the center: the headline `Human collaboration at the speed of AI` in two centered lines, a subtitle (`The Intelligent Canvas where your team and agents think, plan, and build together`), a white email field (`Enter your work email`) with a full-width blue `Get Started Free` button underneath, and a prompt-box card (`Map this process as a workflow diagram so the whole team can follow it`) with four small app icons above it and a send button.
- Around the hero text, floating product fragments joined by thin blue connector lines with diamond ends: a `Customer Feedback` table with colored status chips, a `Flow Process` document, a `BPMN Diagram` with sticky-note-colored boxes, and name tags `Rad` and `Brie` with cursor arrows (collaborator cursors).
- A logo strip in gray (Sony, PayPal, Ubisoft, Workday, Deloitte, Salesforce).
- A white rounded bar with a yellow filled segment at its left (a progress-like element; its purpose was not identified).
- A two-column block: `Turn research into shared direction` with three bullets (`Pull outputs from Claude, NotebookLM, or any research tool into one canvas`, and two others) and a dark button partly visible, beside a diagram of video cards, sticky notes and name tags.
- A centered statement `The only thing more important than moving fast is moving the needle` and a line `See how over 250,000 companies are getting great done in Miro`.
- Three tall photo cards with white overlay statistics: `3.6x faster time to market` (Pepsico), `50% shorter planning process` (asos), `2x faster time to market` (kw).

The footer is a dark block (`{colors.surface-dark}`, 1050px tall) with white link text.

**Key characteristics**
- Gray canvas `{colors.canvas}` (#f0f0f0) with white panels and dark `{colors.ink}` (#1c1c1e) text.
- One action color, `{colors.primary}` (#3859ff), on 8px-radius (`{rounded.xs}`) rectangular buttons, not pills.
- Roobert PRO Medium for headlines and large text; Noto Sans for buttons, inputs and most small UI text.
- Product UI itself is the illustration: floating windows, connectors, cursors and sticky notes in yellow, pink and blue.
- Cards use 16-24px radii; photo cards run taller and have rounded tops and bottoms.
- A dark footer closes the page.

## Colors

### Measured
- **Canvas** `{colors.canvas}` (#f0f0f0): body and largest-area background.
- **Ink** `{colors.ink}` (#1c1c1e): headline, quote and outlined-button text, and the footer background. The generator had assigned #0000ee (the default browser link blue, measured on unstyled anchors) as ink; that is noise, so I reassigned the role to the page's real text color and dropped #0000ee.
- **Ink muted** `{colors.ink-muted}` (#555a6a): the subtitle and secondary text (928 characters).
- **Ink black** `{colors.ink-black}` (#000000): 259 characters, for example inside the prompt card.
- **Primary** `{colors.primary}` (#3859ff): fill of `Get started free`; **on primary** `{colors.on-primary}` (#ffffff).
- **Primary hover** `{colors.primary-hover}` (#314cd9): the measured hover fill of `Get started free`; text stays white, no shadow.
- **Primary pressed** `{colors.primary-pressed}` (#2a41b6): the page's `--tw-color-actionable-pressed` custom property; I did not observe the pressed state.
- **Surface dark** `{colors.surface-dark}` (#1c1c1e): the footer background.
- **Hairline strong** `{colors.hairline-strong}` (#c7cad5): the border of the `Contact sales` button.
- **Text input border** `{colors.text-input-border}` (#e9eaef): the email field border.
- **Card glass** `{colors.card-glass}` (#ffffff26): the translucent background measured on the prompt card; the card also carries a 12px blur-style shadow.

Other measured fills: white #ffffff panels, #f2f2f2 and #fafafc (near-white steps), #0000001a, and #33aaff (a light blue on 29 weight).

### Custom properties on the page
Names include `--tw-color-gray-150` (#e9eaef), `--tw-color-card-border` (#f1f2f5), `--tw-color-black-550` (#3c3f49), `--tw-color-coral-light` (#ffc6c6), `--tw-color-rose-light` (#ffd8f4), `--tw-color-yellow-light` (#fffae7), `--tw-color-yellow-dark` (#746019), `--tw-color-moss-dark` (#187574) and `--tw-color-input-active` (#555a6a). They show a Tailwind-based palette with named pastel tints, which matches the sticky-note colors in the capture. They are not tokenized because I did not see where each is applied.

The brand yellow of the logo is visible in the capture; its exact hex was not measured on the page, so no yellow token is declared.

### Mirotone palette
The [Mirotone colors page](https://mirotone.xyz/foundations/colors) lists CSS variable families (blue 900 to 100, indigo 700 to 50, indigo alpha, green, black and black alpha, red, yellow, white and white alpha) but shows no hex values, so none are borrowed.

## Typography

Loaded fonts include Roobert PRO Medium (500), Roobert PRO SemiBold (600) and its italic, Noto Sans (400, 600), Open Sans, Inter, and Nanum Pen Script (handwriting-style, 28 characters), with placeholder fallbacks. By character weight: Noto Sans 2000, generic sans-serif 1284, Roobert PRO Medium 819.

| Role | Family | Size / line | Weight | Tracking |
|---|---|---|---|---|
| Display (h1) | Roobert PRO Medium | 56px / 61.6px | 500 | normal |
| Display, mobile (390px) | Roobert PRO Medium | 40px / 44px | 500 | normal |
| Heading (h2/h3) | Roobert PRO Medium | 40px / 46px | 400 | -1.2px |
| Body (quote text) | Roobert PRO Medium | 24px / 27.6px | 400 | -0.72px |
| Button | Noto Sans | 16px / 24px | 600 | normal |
| Input | Noto Sans | 16px | 400 | normal |

Notes:
- The measured `bodyText` element is a customer quote at 24px with -0.72px tracking, so `body` here is the large reading size, not a small UI size.
- Small text is common: 12px is the most used size (1365 characters), then 18px (838), 14px (833) and 16px (507). A good share of the 12px text is in generic `sans-serif` on unstyled elements (including hidden menus), so it should not be read as a design choice.
- Tracking tightens with size: -0.16px at 16px, -0.4px at 20px, -0.44px at 22px, -0.72px at 24px, -1.2px at 40px and -1.44px at 48px (all measured), roughly -3% from 24px up.
- Weights used: 400 (3268 characters), 500 (836), 600 (213), 700 (52).

### Note on font substitutes
Only the measured font stack is documented here. Substitute a friendly geometric sans such as Inter or Noto Sans (already loaded on the page as fallback), at weight 500 for display and 400 for headings.

## Layout

- The header is a single white bar over the full width with a subtle bottom edge.
- The hero is a centered column about 740px wide for the headline (measured h1 box 740px wide, 123px tall) with the email field and button at 360px; product fragments float to the left and right of that column.
- Content blocks alternate between centered statements and two-column text-plus-diagram rows.
- The photo cards are three equal tall tiles in one row, each carrying a large white statistic top-left and a logo bottom-left.
- The page defines container widths of 1200px (`--container-max-xl`) and 1400px (`--container-max-xxl`) and a `3rem` container padding in its custom properties.
- Most common gaps: 4px (134 occurrences), 10px, 12px, 24px, 8px, 16px; paddings: 12px, 8px, 4px, 40px, 24px, 16px, 32px.
- Spacing tokens `{spacing.s1}`..`{spacing.s10}` list 1, 2, 4, 5, 6, 7, 8, 10, 12 and 14px.

## Elevation & Depth

Shadows are soft and used on floating product elements:
- `rgba(0,0,0,0.12) 0 2px 8px 0` (4 elements) and `rgba(0,0,0,0.12) 0 4px 12px 0` (the prompt card).
- `rgba(0,0,0,0.06) 0 1px 8px 0`, and a 1px ring `rgb(224,226,232) 0 0 0 1px`.
- A three-layer shadow with negative spread (18%, 16% and 6% black at increasing blur), measured on two elements.
- An inset highlight on one blue element, `rgb(122,144,254) 0 1px 1px 0 inset`, which in the extraction belongs to an unstyled blue anchor, not to the main CTA (whose hover shows no shadow).

Depth in the capture is therefore: gray canvas, white panels, floating windows with small shadows, and the prompt card slightly raised.

## Shapes

Measured radii by frequency: 8px (41), bottom-only 20px (18), 20px (17), 24px (16), 999px (12), 40px (10), 12px (9), 100% (3), 50% (2).

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 8px | buttons, input |
| `{rounded.sm}` | 12px | small panels |
| `{rounded.md}` | 16px | the prompt card |
| `{rounded.lg}` | 20px | larger cards (a pricing-style card measured 20px) |
| `{rounded.xl}` | 24px | |
| `{rounded.2xl}` | 40px | large frames |
| `{rounded.3xl}` | 50px | |
| `{rounded.pill}` | 9999px | pill bars, chips, avatars |

## Components

### Primary button (`button-primary`)
`{colors.primary}` fill, white text, Noto Sans 16px/600, `{rounded.xs}`, padding `8px 12px`, 40px tall (148px wide for `Get started free`). The measured background also carries a faint top-to-transparent gradient highlight. Hover (`button-primary-hover`): `{colors.primary-hover}`.

### Outlined button
White fill, `{colors.ink}` text, 1px `{colors.hairline-strong}` border, 8px radius, 42px tall (`Contact sales`).

### Dark button
Dark `{colors.surface-dark}` fill buttons with 40 or 48px height exist (`Explore research`, `Learn more`); their label color measured as #0000ee, the default browser link blue, which looks like an unstyled-anchor artifact rather than a design choice, so only the fill and size are treated as reliable.

### Text input (`text-input`)
White fill, 1px `{colors.text-input-border}` border, `{rounded.xs}`, 16px padding, 48px tall, 360px wide; Noto Sans 16px.

### Prompt card (`card`)
`{colors.card-glass}` fill, `{rounded.md}`, 12px padding, a soft 4px 12px shadow, 386px by 132px; contains the prompt text, app icons and a dark circular send button.

### Floating product fragments
White windows with small headers (icon plus title such as `Customer Feedback`, `Flow Process`, `BPMN Diagram`), table rows with colored status chips and diagram boxes in pastel sticky colors; connected with thin blue lines ending in dots or diamonds.

### Cursor tags
Small pills with an avatar and a first name (`Rad`, `Brie`, `Michael`, `Andrey`, `Brian`) in orange, green, purple or pink tints.

### Photo stat cards
Tall rounded images with a darkening overlay, a large white number, a white caption and a white customer logo at the bottom.

### Footer
`{colors.surface-dark}` background, white 12px link columns.

## Design System Architecture

Sources opened:

- [Miro app design guidelines](https://developers.miro.com/docs/design-guidelines): recommends using Mirotone CSS components and the Mirotone UI library for Figma, and says to use fonts from Mirotone or ensure custom fonts do not clash with Miro's UI. It gives no hex or pixel values.
- [Mirotone](https://mirotone.xyz): described as the base library to design and build Miro apps; foundations (colors, typography, spacing, icons, placement), components (buttons, checkboxes, radios, toggles, inputs, text areas, selects, labels, links, dividers, tables, tabs, tags, app cards), app templates, and a BEM / functional-CSS architecture. Its [colors page](https://mirotone.xyz/foundations/colors) lists variable names without values. Mirotone targets apps built inside Miro, not the marketing site.
- [AKQA / It's Nice That coverage](https://itsnicethat.com/news/akqa-miro-graphic-design-050923) of the 2023 identity: a more dimensional illustration style, a refined yellow, an updated typeface and a logo with motion. This is third-party press and is used only for context.

The marketing site's own system is not public. From its shipped CSS it is Tailwind-based (`--tw-*` variables for colors, text sizes, container widths and easing) with an additional shadcn-style set (`--card`, `--card-foreground`, `--primary-foreground`, `--muted`, `--border`, `--sidebar-primary-foreground`), which suggests a component layer on top of Tailwind. No public token package for the marketing site was found.

## Do's and Don'ts

### Do
- Keep the canvas gray and the panels white; show the product as the illustration.
- Use one blue (`{colors.primary}`) for the main action, with an 8px radius.
- Set big headlines in the display face with progressively tighter tracking as size grows.
- Pair text with real-looking collaboration details: cursor tags, sticky notes, connectors.
- Put customer proof in tall photo cards with a large number.

### Don't
- Do not round the main buttons into pills; the measured radius is 8px.
- Do not use browser-default link blue; it appears only on unstyled anchors in the extraction.
- Do not add heavy shadows; the measured shadows are 6-18% black.
- Do not drop the dark footer; the page ends on `{colors.surface-dark}`.
- Do not claim a specific yellow without measuring it from the logo asset.

## Responsive Behavior

Measured at 390px: the h1 is 40px/44px at weight 500 (56px/61.6px at desktop). Other mobile rules (header collapse, card stacking, the number of photo cards per row) were not measured, so none are claimed. The page was 1096 visible elements at desktop.

### Touch targets
The primary button is 40px tall, the outlined button 42px, the large dark buttons 48px.

## Iteration Guide

1. Start with a `{colors.canvas}` page and a white header with one outlined and one blue button.
2. Center a 56px/500 headline, a muted subtitle (`{colors.ink-muted}`), an email field and a full-width blue button.
3. Surround the hero with 2 or 3 floating product windows linked by thin blue lines.
4. Use 40px/400 headings with -1.2px tracking for section titles.
5. Present metrics as tall photo cards with large white numbers.
6. Close with a `{colors.surface-dark}` footer.
