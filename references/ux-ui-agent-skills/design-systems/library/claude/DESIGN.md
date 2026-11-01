---
version: alpha
name: Claude
category: "AI & LLM Platforms"
description: "Claude's site is warm paper and ink: a #faf9f5 canvas, #30302e text, near-black #141413 buttons with 9.6px corners, Anthropic's custom serif (330-weight 67.7px hero) over Anthropic Sans body, clay orange (#d97757) used only as a spark accent, 1px #d1cfc5 outlines, and 24-32px rounded cards with almost invisible shadows."
colors:
  canvas: "#faf9f5"
  ink: "#30302e"
  primary: "#141413"
  on-primary: "#faf9f5"
  surface-white: "#ffffff"
  ink-muted: "#5e5d59"
  ink-faint: "#87867f"
  ink-mid: "#4d4c48"
  hairline: "#d1cfc5"
  clay: "#d97757"
  clay-hover: "#c6613f"
  surface-warm: "#f0eee6"
  surface-dark-2: "#262624"
  ink-footer: "#b0aea5"
typography:
  display:
    fontFamily: anthropicSerif, "anthropicSerif Fallback", Georgia, serif
    fontSize: 67.7143px
    fontWeight: 330
    lineHeight: 74.4857px
  display-mobile:
    fontFamily: anthropicSerif, "anthropicSerif Fallback", Georgia, serif
    fontSize: 51px
    fontWeight: 330
    lineHeight: 61.2px
  heading:
    fontFamily: anthropicSerif, "anthropicSerif Fallback", Georgia, serif
    fontSize: 49.4286px
    fontWeight: 500
    lineHeight: 59.3143px
  subheading:
    fontFamily: anthropicSerif, "anthropicSerif Fallback", Georgia, serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: anthropicSans, "anthropicSans Fallback", system-ui, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: anthropicSans, "anthropicSans Fallback", system-ui, sans-serif
    fontSize: 17px
    fontWeight: 600
    lineHeight: 25.5px
  nav:
    fontFamily: anthropicSans, "anthropicSans Fallback", system-ui, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  link:
    fontFamily: anthropicSans, "anthropicSans Fallback", system-ui, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button-secondary:
    fontFamily: anthropicSans, "anthropicSans Fallback", system-ui, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
rounded:
  xs: 8px
  sm: 9.6px
  md: 12px
  lg: 16px
  xl: 24px
  2xl: 32px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 31.43px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 44px
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 36px
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card-signup:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.2xl}"
    padding: 28px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.016) 0px 4px 24px 0px, rgba(0, 0, 0, 0.016) 0px 4px 32px 0px, rgba(0, 0, 0, 0.01) 0px 2px 64px 0px, rgba(0, 0, 0, 0.01) 0px 16px 32px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 91.4285px 0px
    borderColor: "{colors.ink}"
---

## Overview

The claude.com home page (capture: `web/data/captures/claude.jpg`) is built like a printed page: a warm off-white sheet (`{colors.canvas}`), dark ink text, a literary serif for headlines, and a sans for everything functional. The first screen has a header (Claude wordmark with a clay-orange asterisk-style spark mark, Product, Developers, Enterprise, Resources, Pricing, Login, an outlined "Contact sales" button and a solid black "Try Claude" button), then a split hero: on the left the centered headline "Think fast, build faster", a grey subtitle "Brainstorm in chat, build in Cowork" and a rounded sign-in card; on the right a framed product preview of a generated slide ("What We Learned in Q2" with three big-number tiles: 38, 4, 40%) inside a faint grid-paper panel.

The sign-in card holds a white "Continue with Google" button, a small "OR", a solid black "Continue with email" button and a tiny legal line about Anthropic's Privacy Policy, followed below the card by an outlined "Download desktop app" button. Below the fold the page becomes "Explore plans": a segmented switch (Individual, Team and Enterprise) over three tall white plan cards (Free, Pro, Max), each with a line-drawn plant-like pictogram that grows more branches with the plan, a serif plan name, a one-line descriptor, a price, a black "Try Claude" button and a checklist of features introduced with "Everything in Free, plus:" and "Everything in Pro, plus:". A footnote says "Usage limits apply. Prices shown don't include applicable tax."

The effect is calm and human: no gradients, no neon, no glass. Warmth comes from the yellow-brown tint in every neutral and from rounded containers. The one chromatic note is a clay orange (`{colors.clay}`) used for the brand spark and for hover/focus states.

**Key characteristics**
- Every neutral is warm: the canvas `{colors.canvas}`, ink `{colors.ink}`, muted ink `{colors.ink-muted}` and outlines `{colors.hairline}` all lean yellow-brown, with no blue-greys.
- Primary buttons are near-black (`{colors.primary}`) with an off-white label, not a brand color.
- Anthropic's custom serif is used for headlines and plan names, with light-ish variable weight 330 at the hero size; custom sans for UI and body.
- Containers are generously rounded: 9.6px buttons, 24px on three measured containers (their role was not confirmed), 32px for the sign-in card.
- Shadows are almost imperceptible (1.6% black stacks); outlines do the separating.
- Line-art pictograms rather than photography or 3D.

## Colors

All values below are measured on claude.com (`web/data/extracted/claude.json`); the site exposes its palette as CSS variables (`--color-gray-050` through `--color-gray-1000`, `--color-clay`, `--color-clay-dark`, `--color-clay-hover`, plus accent names cactus, heather, mineral, peach, plum, sky and a functional error and switch-on color).

### Neutrals (warm gray ramp)
- **Canvas** `{colors.canvas}` (gray 050): page background.
- **Surface white** `{colors.surface-white}`: plan card fill, white sign-in button.
- **Surface warm** `{colors.surface-warm}` (gray 150): subtle fills such as the segmented switch track.
- **Hairline** `{colors.hairline}` (gray 300): the 1px outline on cards and outlined buttons.
- **Ink** `{colors.ink}` (gray 750): the most-read text color, used for body and headings.
- **Ink muted** `{colors.ink-muted}` (gray 600): descriptors, secondary copy and footers links.
- **Ink mid** `{colors.ink-mid}` (gray 650): small text in tiles and legal lines.
- **Ink faint** `{colors.ink-faint}` (gray 500): fine print, footnotes.
- **Ink footer** `{colors.ink-footer}` (gray 400): link text on the dark footer.
- **Primary** `{colors.primary}` (gray 950): buttons, the footer panel and the dark preview tiles.
- **Surface dark 2** `{colors.surface-dark-2}` (gray 800): dividers and panels on the dark footer.
- **On-primary** `{colors.on-primary}`: the off-white label on dark buttons (same value as the canvas).

### Accents
- **Clay** `{colors.clay}`: Anthropic's orange accent (`--color-clay`). The Anthropic brand-guidelines skill published at github.com/anthropics/skills lists the same Orange as its primary accent, with Blue `#6a9bcc` and Green `#788c5d` as secondary and tertiary.
- **Clay hover** `{colors.clay-hover}`: a deeper clay (`--color-clay-hover`); the focus color token points to `--color-clay-dark`, and the skip-link outline measures as a 2px clay-dark border.
- Pastel accent names on the page (cactus, heather, mineral, peach, plum, sky) are used in illustration; they are not applied to UI chrome.

## Typography

Anthropic uses three proprietary families, exposed as `--font-anthropic-serif`, `--font-anthropic-sans` and `--font-anthropic-mono` with metric-matched fallbacks:

| Role | Family | Size / line | Weight | Notes |
|---|---|---|---|---|
| Display | anthropicSerif | 67.7143px / 74.4857px | 330 | "Think fast, build faster" |
| Display mobile | anthropicSerif | 51px / 61.2px | 330 | at 390px |
| Heading | anthropicSerif | 49.4286px / 59.3143px | 500 | "Explore plans" |
| Subheading | anthropicSerif | 30px / 36px | 400 | plan names |
| Body | anthropicSans | 17px / 27.2px | 400 | |
| Button | anthropicSans | 17px / 25.5px | 600 | hero sign-in buttons |
| Button (nav) | anthropicSans | 15px / 15px | 500 | header "Try Claude" |
| Nav | anthropicSans | 15px / 22.5px | 400 | |
| Link / small | anthropicSans | 12px / 18px | 400 | footer and legal |

Font weights available as tokens: light 300, regular 400, medium 500, semibold 600, bold 700; the hero uses the variable-font value 330.

**Font substitutes:** the families are proprietary and not published for download. The Anthropic brand-guidelines skill (opened at raw.githubusercontent.com/anthropics/skills) specifies Poppins (Arial fallback) for headings and Lora (Georgia fallback) for body in generated documents, which is a separate, document-oriented rule. For web work that must look like claude.com, use a warm transitional serif such as Georgia or Lora for display at weight 400, and a neutral humanist sans (system-ui) for UI; the measured fallback chain is anthropicSerif then Georgia for serif and system-ui for sans.

**Principles**
- Serif for words that sound like titles; sans for anything you would click.
- Display sizes are light (330 to 400) and large with tight leading (about 1.1).
- Body copy is 17px with 1.6 leading, larger than typical product UI.
- Buttons use semibold at hero size and medium inside the header.

## Layout

- Page margin token 2rem (32px); content max widths in tokens: narrow 41.25rem, small 60rem, medium 74.5rem, main 90rem.
- Section spacing tokens: none, 2rem, 4rem, 6rem (main), 8rem; the page-top spacing is 12rem.
- Gaps: xs 1rem, sm 1.5rem, md 2rem, lg 3rem. Measured gaps cluster at 12px, 8px, 32px, 4px, 16px.
- Spacing steps `{spacing.s1}` 2px through `{spacing.s10}` 31.43px follow a 2, 4, 6, 8, 12, 16, 20, 24, 28 progression; the site's own scale (`--sp-2` to `--sp-200`) runs from 0.125rem to 12.5rem.
- The hero is two-column: copy plus sign-in card on the left, product preview on the right in a gridded frame.
- Plan cards are a three-column grid; feature lists inside use check icons with body-size text.
- The header is 84px tall, transparent over the canvas.
- Footer is a full-width near-black block about 1190px tall at desktop width listing link groups (Products, Capabilities, Extensions, Models, Enterprise, Developers, Platform, Resources, Help, Company, Legal) and a "(c) 2026 Anthropic PBC" line.

## Elevation & Depth

- **Resting cards**: a four-layer stack with 1.6% and 1% black alphas (`0 4px 24px`, `0 4px 32px`, `0 2px 64px`, `0 16px 32px`), effectively a faint halo, combined with a 1px `{colors.hairline}` border.
- **Ring outline**: `0 0 0 1px` in hairline over a canvas-colored spread ring on some outlined buttons.
- **Zero-offset button shadow** in `{colors.primary}`: present so the property can animate; invisible at rest.
- **Clay glow**: a 10%-alpha clay shadow appears once on the page as an accent.
- Token shadows: small `0 2px 8px` at 4% black, medium `0 4px 20px` at 4%, large `0 4px 16px` at 10%.

Hierarchy mostly comes from borders, fills (white card on canvas) and the dark footer, never from heavy shadow.

## Shapes

| Token | Value | Typical use |
|---|---|---|
| `{rounded.xs}` | 8px | nav buttons, outlined buttons |
| `{rounded.sm}` | 9.6px | large hero buttons |
| `{rounded.md}` | 12px | small panels |
| `{rounded.lg}` | 16px | media frames |
| `{rounded.xl}` | 24px | three measured containers (role not confirmed) |
| `{rounded.2xl}` | 32px | sign-in card |

The site's radius tokens also include 2, 4, 6, 8, 12, 16, 24, 32, 48 and 64px (`--br-2` to `--br-64`). Border widths: 0.5px, 1px (default), 1.5px, 2px.

## Components

### Buttons
- **Primary (sign-in)**: `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}` (17px, 600), radius `{rounded.sm}`, padding 0 20px, height 44px. Example: "Continue with email".
- **Header primary** ("Try Claude"): same colors, `{typography.button-secondary}` (15px, 500), radius `{rounded.xs}`, padding 8px 16px, height 36px; the plan-card "Try Claude" buttons are the 40px, 16px/500 variant.
- **Outlined**: canvas or white fill with a 1px hairline outline and dark text ("Continue with Google", "Contact sales", "Download desktop app").
- **Segmented switch**: pill track in a warm fill with a white raised segment for the active option.

### Sign-in card
- `{colors.canvas}` fill, 1px `{colors.hairline}` border, `{rounded.2xl}` radius, 28px padding, four-layer faint shadow, 448px wide at desktop.

### Plan cards
- White, thick rounded corners, line-art plant pictogram, serif plan name, price in bold sans, descriptor in muted ink, black "Try Claude" button, reassurance microtext "No commitment · Cancel anytime", then a checklist.

### Navigation
- 15px sans links with small chevrons for dropdowns, `{colors.primary}` text on `{colors.canvas}`.

### Footer
- `{colors.primary}` fill, `{colors.canvas}` text, link text in `{colors.ink-footer}`, a 1px `{colors.ink}` border, 91px vertical padding.

### Preview panel
- A grid-paper frame holding a generated slide: dark navy tiles with large serif numerals and small white captions.

## Design System Architecture

No public design-system documentation for claude.com was found; the Anthropic site returns 404 at anthropic.com/brand. The de-facto system is visible in the shipped CSS variables on the page:
- **Palette**: `--color-gray-000 ... --color-gray-1000` (24 steps from white to black with warm tint), accents clay (#d97757, dark #c46849, hover #c6613f), cactus, heather, mineral, peach, plum, sky, plus `--color-error` and `--color-switch-on`.
- **Theme layer**: semantic variables such as `--theme-background-primary` (gray 050), `--theme-foreground-secondary` (gray 750), `--theme-border-secondary` (gray 300), `--theme-border-tertiary` (gray 200), `--theme-input-text`, `--theme-button-clay-fg`, `--theme-brand-ink`, `--theme-brand-peach`, mapping roles to the ramp.
- **Scales**: `--sp-*` spacing (2 to 200), `--br-*` radii (2 to 64), `--border-xs/sm/md/lg`, `--shadow-sm/md/lg`, `--gap-*`, `--section-spacing-*`, `--max-width-*`, easing curves (`--ease-out-quart`, `--ease-in-out-quart`).
- **Fonts**: `--font-anthropic-sans`, `--font-anthropic-serif`, `--font-anthropic-mono` with latin aliases.

Related official material opened: https://raw.githubusercontent.com/anthropics/skills/main/skills/brand-guidelines/SKILL.md lists the core Dark `#141413`, Light `#faf9f5`, Mid Gray `#b0aea5`, Light Gray `#e8e6dc` and accents Orange `#d97757`, Blue `#6a9bcc`, Green `#788c5d`; and https://claude.com/ itself for the page text.

## Imagery, Voice and Density

### Imagery and art direction
- Hand-drawn-feeling line pictograms: a plant stem with one, two and three tiers of branches and circles marks Free, Pro and Max respectively.
- The brand mark is a clay-orange radiating spark beside the serif wordmark "Claude".
- Product shots are real generated artifacts (a slide with large numerals) set in a faint grid-paper frame with a rounded border, with a tiny toolbar ("Open in Microsoft PowerPoint").
- No photography of people, no stock imagery, no gradients.
- Dark navy tiles inside the preview contrast sharply with the warm canvas and show serif numerals at large size.

### Microcopy voice
- Warm, brief and direct: "Think fast, build faster", "Brainstorm in chat, build in Cowork".
- Plan descriptors are plain: "Try Claude", "For everyday productivity", "5-20x more usage than Pro".
- Reassurance lines are small and specific: "No commitment · Cancel anytime", "Free for everyone".
- Feature lists start with verbs: "Generate code and visualize data", "Write, edit, and create content", "Create files and execute code".
- Legal copy is polite and exact: "By continuing, you acknowledge Anthropic's Privacy Policy and agree to get occasional promotional emails and notifications."
- Footnote: "Usage limits apply. Prices shown don't include applicable tax. Prices and plans are subject to change at Anthropic's discretion."

### Density
- Low density above the fold: one headline, one card, one preview.
- Plan cards are long, with 8 to 11 check items each in 15px type; the density comes from lists, not from decoration.
- Whitespace between sections is large (section spacing tokens up to 8rem).

### Interaction cues
- Dropdown chevrons after Product, Developers, Enterprise, Resources and Pricing.
- A skip-to-main-content link with a 2px clay-dark outline becomes visible on focus.
- Check marks in outlined style precede every feature line.
- Segmented switch shows the active option as a raised white segment.

## Component Anatomy Reference

| Component | Fill | Text | Radius | Padding | Height |
|---|---|---|---|---|---|
| Hero button | `{colors.primary}` | `{colors.on-primary}` | `{rounded.sm}` | 0 20px | 44px |
| Header button | `{colors.primary}` | `{colors.on-primary}` | `{rounded.xs}` | 8px 16px | 36px |
| Sign-in card | `{colors.canvas}` | `{colors.primary}` | `{rounded.2xl}` | 28px | 245px |
| Header | `{colors.canvas}` | `{colors.primary}` | none | 0 | 84px |
| Footer | `{colors.primary}` | `{colors.canvas}` | none | 91.4285px 0 | content |

## Do's and Don'ts

**Do**
- Keep every neutral warm; take them from the gray ramp.
- Use near-black for primary buttons and clay only as a small accent.
- Set headlines in the serif at light-to-regular weight, large, with tight leading.
- Separate surfaces with 1px outlines and very light shadows.
- Use generous radii (24 to 32px for cards, about 10px for buttons).
- Illustrate with simple line drawings.

**Don't**
- Don't use cool blue-greys or pure white page backgrounds.
- Don't use clay as a large fill or as the primary button color.
- Don't use heavy drop shadows, gradients or glassmorphism.
- Don't set body copy in the display serif.
- Don't use saturated multi-hue illustration; the accent pastels are muted.

## Responsive Behavior

- The hero headline steps from 67.7143px (330 weight) to 51px on a 390px viewport, line height 1.2.
- The site's fluid header spacing uses `clamp()` between 2rem and 2.5rem across 20rem to 90rem viewports.
- Page margin is 2rem; max widths of 41.25rem, 60rem, 74.5rem and 90rem cap line length and grid width.
- Plan cards sit in three columns on desktop; behavior at narrow widths is not measured here.

## Iteration Guide

1. Set canvas `{colors.canvas}`, ink `{colors.ink}`, and primary `{colors.primary}`; nothing else is required for the first draft.
2. Set the hero in the serif at about 68px light and everything else in a sans at 17px.
3. Draw cards with 1px `{colors.hairline}` borders at 24 to 32px radius and a barely-there shadow stack.
4. Add one clay accent (logo mark, focus ring); keep it under a few percent of the surface.
5. Use dark footers in `{colors.primary}` with `{colors.ink-footer}` link text.
6. If a color is needed, pick from the gray ramp or the named pastel accents rather than inventing one.
