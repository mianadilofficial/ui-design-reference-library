---
version: alpha
name: ElevenLabs
category: "AI & LLM Platforms"
description: "ElevenLabs' marketing site is a warm-neutral, near-monochrome canvas (#fdfcfc page, #f5f3f1 panels, pure #000000 ink and CTAs) that sets light 300-weight Waldenburg display type over Inter UI text, with pill buttons and large 24px panel radii."

colors:
  canvas: "#fdfcfc"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-white: "#ffffff"
  surface-warm: "#f5f3f1"
  ink-muted: "#777169"
  ink-subtle: "#a59f97"
  ink-soft: "#44403b"
  ink-navy: "#052f70"
  blue: "#0a59d2"
  red: "#f41a2f"
  hairline: "#00000013"

typography:
  display:
    fontFamily: Waldenburg, "Waldenburg Fallback"
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: Waldenburg, "Waldenburg Fallback"
    fontSize: 36px
    fontWeight: 300
    lineHeight: 42px
    letterSpacing: "-0.72px"
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.16px
  body-medium:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.16px
  button:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-small:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  nav:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px

rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 14px
  3xl: 16px
  4xl: 18px
  5xl: 20px
  6xl: 24px
  pill: 9999px

spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 17px
  s10: 20px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 44px
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
  nav:
    textColor: "{colors.ink}"
  panel:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
    rounded: "{rounded.6xl}"
  card-white:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink}"
    rounded: "{rounded.6xl}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 128px
---

## Overview

ElevenLabs presents itself the way a studio presents a product: a warm off-white page (`{colors.canvas}` `#fdfcfc`), a slightly darker warm-grey panel (`{colors.surface-warm}` `#f5f3f1`) and pure black (`{colors.ink}` `#000000`) for text and for every primary button. There is no brand accent color in the interface chrome. Color arrives only through imagery: soft, grainy, glowing orbs (violet and pink, burnt orange, brown with blue) that sit in the product-switcher panel at the top of the home page.

The official brand page describes this as a family of sub-brand palettes rather than one palette: ElevenAgents uses a blue primary with layered gradients, ElevenCreative uses orange as its primary color, ElevenAPI is a monochrome palette "built around black, white, and neutral tones", and the sub-brand motifs are spheres/orbs for Agents and Chladni patterns for Creative and API. The home page, which fronts all of them, takes the neutral ElevenAPI-like base and lets the product visuals supply the color.

The headline is set in Waldenburg at weight 300 with negative tracking ("Bringing technology to life", `{typography.display}` 48px/52px, -0.96px); everything else is Inter. The overall effect is calm, airy and editorial: large margins, one headline, one short paragraph, two pills.

**Key Characteristics:**
- Warm neutrals: `{colors.canvas}` page, `{colors.surface-warm}` panels, white (`{colors.surface-white}`) cards and controls.
- Black (`{colors.primary}`) is both text and the primary CTA fill; the secondary CTA is white with a half-pixel ring.
- Thin 300-weight display type (Waldenburg) over Inter body text at 16px.
- Pill-shaped buttons everywhere (`{rounded.pill}`), with 24px radii (`{rounded.6xl}`) on large panels and cards.
- A tabbed product switcher (ElevenCreative, ElevenAgents, ElevenAPI) as the hero object, with orb imagery.
- Logo wall in greyscale ("Trusted by leading developers and enterprises").
- Hairlines made from 0.5px rings and ~7% black borders rather than solid grey lines.
- Full-width announcement bar above the nav with a small pill "Discover" button.

### Imagery and Voice

- **Orbs.** Spheres with grain and blur — violet/pink, orange/red, brown/blue — each over the warm panel. A play button sits on the central orb. The brand page names the sphere as the Agents motif and Chladni patterns as the Creative/API motif.
- **Product shots.** Screens of the ElevenCreative and ElevenAgents apps are shown inside rounded panels in a two-column layout under "Two platforms built on the same research foundation".
- **Logos.** A 6 x 3 wall of customer marks (Twilio, Disney Studios, KPN, Stripe, TELUS Digital, Cisco, Epic, NVIDIA, Revolut, Meta, Zoom, Square, ramp, IBM, T-Mobile, Klarna, Harvey, Salesforce) rendered in a muted grey on the canvas.
- **Microcopy.** Plain and benefit-led: "Bringing technology to life", "Powering the best enterprises, creators, and developers", "Generate ultra-realistic speech, videos, music, and sound effects." Buttons are two words or fewer: "Sign up", "Contact sales", "Log in", "Discover", "Read all stories".
- **Naming.** The brand page requires single-word names: ElevenLabs, ElevenAgents, ElevenCreative, ElevenAPI, ElevenMusic; it forbids "Eleven Labs", "Elevenlabs" and all-caps.

### Capture Observations

- The capture alternates two near-whites: `{colors.canvas}` for the page and `{colors.surface-warm}` for the product switcher, so the eye reads panels as slightly darker, not as bordered boxes.
- The only pure-black surfaces are the two "Sign up" pills; they are the highest-contrast points on the page.
- Orb imagery is the only saturated area; below it, the platform screenshots are light UI on the warm panel, so the page never goes dark.
- Section edges are marked with small dotted corner ticks around the logo wall rather than full-width rules.
- The announcement strip uses the brand's "V4" mark at left and a small white pill "Discover" at right.

### Interaction States (measured)

| Control | Default | Hover |
|---|---|---|
| "Discover", "Log in" pills | `{colors.surface-white}` fill, 0.5px ring | `{colors.canvas}` fill, same ring |
| Black "Sign up" pills | `{colors.primary}` fill | no computed change |
| Feature chips | transparent, weight 500 | active chip gains white fill and ring |

## Colors

> **Source pages:** home (`/`) measured with the extractor; official brand page at `elevenlabs.io/brand` for the sub-brand palette descriptions (no hex values published there).

### Brand & Accent
- **Primary** (`{colors.primary}` — `#000000`): CTA fill, "Sign up" pill, the active segmented control.
- **On Primary** (`{colors.on-primary}` — `#ffffff`): Text on black buttons.
- **Blue** (`{colors.blue}` — `#0a59d2`): A saturated blue measured as text color (86 characters); not used for navigation or buttons. Where it appears was not isolated.
- **Ink Navy** (`{colors.ink-navy}` — `#052f70`): Deep navy measured as text color (224 characters); not used for navigation or buttons.
- **Red** (`{colors.red}` — `#f41a2f`): Red measured as text color (45 characters); it appears only in small amounts.

### Surface
- **Canvas** (`{colors.canvas}` — `#fdfcfc`): The page; also published as `--page-background-color: #FDFCFC` in the site's root variables.
- **Surface Warm** (`{colors.surface-warm}` — `#f5f3f1`): Large panels such as the product switcher and the product-shot frames (the site's `tw-bg-cream` class resolves to this value).
- **Surface White** (`{colors.surface-white}` — `#ffffff`): Cards, the active tab, "Log in" and "Contact sales" pills.
- **Hairline** (`{colors.hairline}` — `#00000013`): 7%-black border used for subtle dividers.

### Text
- **Ink** (`{colors.ink}` — `#000000`): Headlines, nav, body.
- **Ink Soft** (`{colors.ink-soft}` — `#44403b`): A warm dark grey for secondary copy.
- **Ink Muted** (`{colors.ink-muted}` — `#777169`): Warm mid-grey for descriptions under cards (the second most-read text color).
- **Ink Subtle** (`{colors.ink-subtle}` — `#a59f97`): Lightest warm grey for tertiary text and inactive carousel items.

### Neutral temperature
All greys lean warm (brown-grey: `#777169`, `#a59f97`, `#44403b`) to match the cream panels; none of the neutrals is a cool grey.

### Sub-brand Palettes (from the brand page)

| Sub-brand | Palette direction | Motif |
|---|---|---|
| ElevenAgents | Blue primary with additional shades, layered gradients with tactile textures | Circle / sphere, voice orbs, code-generated visuals |
| ElevenCreative | Orange primary with additional shades | Chladni patterns as expressive graphic elements |
| ElevenAPI | Monochrome: black, white and neutral tones | Chladni patterns and kinetic typography |
| ElevenMusic | No palette detailed on the brand page | Not specified |

The hex values for these sub-brand colors are not published; none is recorded in the tokens beyond what was measured on the home page.

## Typography

### Font Family
- **Waldenburg** (display, weight 300): a typeface designed by Michael Clasen at the Munich foundry Kimera, which its release article describes as blending "the early rationalism of Akzidenz Grotesk with the calligraphic warmth associated with Univers" with a notably high x-height. The site loads it as a web font with a `Waldenburg Fallback`; a second Waldenburg face (`--font-waldenburg-fh`) is wired to display and UI-label roles in the root variables.
- **Inter** (UI and body): loaded as a variable font (100–900) with an `Inter Fallback`.
- **Geist Mono**: loaded for code/mono snippets.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 48px | 300 | 52px | -0.96px | Hero h1 (Waldenburg) |
| `{typography.display-mobile}` | 36px | 300 | 42px | -0.72px | h1 at 390px viewport |
| `{typography.body}` | 16px | 400 | 24px | 0.16px | Paragraphs, card titles |
| `{typography.body-medium}` | 16px | 500 | 24px | 0.16px | Emphasized labels, platform names |
| `{typography.button}` | 16px | 400 | 24px | normal | Hero buttons |
| `{typography.button-small}` | 14px | 400 | 21px | normal | Nav buttons |
| `{typography.nav}` | 18px | 400 | 28.8px | normal | Large link style |

Measured font sizes on the page cluster at 16px, 15px, 14px and 13px for text, with 18px and 20px for emphasis, and 32px, 36px and 48px for display. Weights are only 300, 400 and 500.

### Principles
- **Light display, regular body.** Headlines are the only 300-weight text; weight 500 is the only emphasis.
- **Negative tracking on display, slight positive on body.** Display: -0.96px at 48px (−2%); body: +0.16px at 16px (+1%).
- **Tokenized scale.** The site root variables expose `--f-display-*`, `--f-heading-*`, `--f-subhead-*`, `--f-paragraph-*`, `--f-description-*` and `--f-ui-*` families with their own font-family, size, weight and letter-spacing (for example `--f-heading-01-letter-spacing: -0.03em`, `--f-ui-03-letter-spacing: 0.05em`).

### Note on Font Substitutes
Waldenburg is a commercial typeface. A close open substitute is not documented by the brand; if it is unavailable use Inter at weight 300 with the same negative tracking, accepting a shorter x-height.

## Layout

- **Page.** One wide centered column; in the 1280px capture the content spans roughly x=64 to x=1216 (read from the 960px-wide thumbnail at 0.75 scale).
- **Section rhythm.** Root variables define `--section-py-sm` 1.5rem, `--section-py-default` 5rem and `--section-py-xl` 7.5rem; `--spacing-container-gutter` 1.25rem and `--spacing-outer-content` 3.75rem.
- **Header.** `--header-height` 4rem; logo wordmark, six text links (Products, Solutions, Customers, Resources, Enterprise, Pricing), and "Log in" (white pill) and "Sign up" (black pill) right-aligned. Above it a full-width announcement strip with a "Discover" pill.
- **Hero.** Two columns: headline and two pills at left, a three-line paragraph at right.
- **Product switcher.** A 24px-radius warm panel spanning the column, with three equal tabs, a carousel of three orbs with captions, and a bottom row of feature pills (AI Voice Generator, Text to Speech, Music, Speech to Text, Voice Cloning, Dubbing) plus a black "Sign up".
- **Logo wall.** A six-column grid of marks between dotted corner ticks.
- **Platforms section.** Two columns of product shots under a two-line display heading.
- **Footer.** Padding-bottom 128px.

## Elevation & Depth

Depth is built from rings, not drop shadows.

| Level | Value | Use |
|---|---|---|
| Hairline ring | `rgba(0,0,0,0.125) 0 0 0 0.5px` | Pill buttons on white (Log in, Contact sales, Discover) |
| Soft lift | `0 1px 1px rgba(0,0,0,.04), 0 2px 4px rgba(0,0,0,.04)` | Same pills, added to the ring |
| Inset ring | `inset 0 0 0 0.5px rgba(0,0,0,0.1)` | Cards (measured as an inset box-shadow) |
| Black fill | none | Primary pills |

On hover the white pills shift from `{colors.surface-white}` to `{colors.canvas}` with no change in ring or text color; the black pills show no computed change.

## Shapes

Radii measured on the page: 2px, 4px (most common, 122 elements), 8px, 10px, 14px, 16px, 18px, 20px, 24px, and 9999px (97 elements).
- `{rounded.pill}` — every button, tab, nav link and chip.
- `{rounded.6xl}` 24px — large panels, white cards and media frames (Tailwind class `tw-rounded-3xl`).
- `{rounded.5xl}` 20px — selected inner corners (for example a panel's bottom-left corner).
- `{rounded.sm}` 4px — small inputs and tags.
- The site's shadcn variable `--shadcn-radius` is 0.5rem (8px, `{rounded.md}`).

## Components

### Buttons
- **button-primary** — `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.pill}`, height 44px, padding `0px 20px`. Hero "Sign up", "Create an AI agent", "Learn more".
- **button-primary-small** — same, `{typography.button-small}`, height 36px, padding `0px 14px`. Nav "Sign up".
- **button-secondary** — white fill, black text, 44px, hairline ring and soft lift. "Contact sales"; also "Log in" at 36px in the nav.
- The page also has a 40px / 15px / `0px 16px` black pill (the "Skip to content" accessibility link, measured as the first CTA candidate) — treated as a utility, not the brand CTA.

### Tabs and Chips
- **Segmented tabs** — three equal cells inside the warm panel; the active tab is a white pill with the hairline ring; inactive labels are plain text.
- **Feature chips** — 14px / weight 500 labels with `9px 6px` padding, transparent; the active one gains a white fill and ring.

### Panels and Cards
- **panel** — `{colors.surface-warm}`, `{rounded.6xl}`, content and orbs inside.
- **card-white** — `{colors.surface-white}`, `{rounded.6xl}`, inset 0.5px ring.

### Navigation
- Links in `{colors.ink}` on the canvas, no underline; right cluster of two pills.

## Design System Architecture

ElevenLabs does not publish the design system for its marketing site, but several public artifacts describe it.

- **Marketing site (de-facto system).** The page is Tailwind with a `tw-` class prefix (for example `tw-rounded-3xl`, `tw-bg-cream`, `tw-bg-white`) and a large set of CSS custom properties: `--page-background-color`, `--header-height`, `--section-py-*`, `--spacing-*`, and the `--f-*` typographic tokens that bind each style to `var(--font-inter)`, `var(--font-waldenburg)` or `var(--font-waldenburg-fh)`. It also exposes `--shadcn-radius` (0.5rem).
- **Brand guidelines.** [elevenlabs.io/brand](https://elevenlabs.io/brand) covers the wordmark (clear space equal to the logo height), the "11" icon (clear space three times its height), naming rules and the sub-brand palettes and motifs. It publishes no hex values or typefaces.
- **Rebrand.** The agency case study at [basement.studio](https://basement.studio/showcase/elevenlabs-visual-rebrand-for-the-voice-of-ai) says the logotype stayed while color, motion and composition were rebuilt, using Chladni-pattern visuals layered with blur and a custom generator.
- **Open-source product UI.** [ElevenLabs UI](https://elevenlabs.io/blog/elevenlabs-ui) is an open-source React component library built on shadcn/ui for agent and audio interfaces (Orb, waveforms, message components, a transcriber, voice chat). It is a product kit, separate from the marketing site's tokens.
- **Typeface.** Waldenburg by [Kimera](https://abduzeedo.com/waldenburg-typeface-kimera-fronts-oscar-winning-film) (Michael Clasen), with the web font loaded from the site itself.

## Do's and Don'ts

**Do**
- Keep the page on `{colors.canvas}` and panels on `{colors.surface-warm}`; use white only for controls and cards.
- Make the one primary action per band a black pill; make the second action a white pill with a half-pixel ring.
- Set display type in Waldenburg 300 with negative tracking and keep it to one or two lines.
- Keep neutrals warm (`{colors.ink-muted}`, `{colors.ink-subtle}`) to match the cream.
- Use `{rounded.pill}` for controls and `{rounded.6xl}` for large containers.
- Let imagery (orbs, Chladni patterns) carry color.

**Don't**
- Do not add a colored button; the brand's CTA is black.
- Do not use cool greys; every measured neutral is warm.
- Do not use heavy drop shadows; use the 0.5px ring and the faint 1–2px lift only.
- Do not write the brand as "Eleven Labs", "Elevenlabs" or "ELEVENLABS".
- Do not set display text above weight 300 or with positive tracking.
- Do not mix 24px and 8px radii on the same container.

## Responsive Behavior

- **Mobile type.** The h1 shrinks from 48px/52px to 36px/42px (`{typography.display-mobile}`) at a 390px viewport; weight 300 is kept.
- **Gutters.** `--spacing-container-gutter` is 1.25rem; the site's class names carry `md:` prefixes on grid containers (for example `md:tw-grid`), which indicates two-column layouts begin at a medium breakpoint; exact breakpoint widths were not measured.
- **Touch targets.** Primary pills are 44px high on hero rows and 36px in the nav.
- **Section spacing.** Vertical padding steps through 1.5rem, 5rem and 7.5rem tokens.

## Iteration Guide

1. Set the page to `{colors.canvas}`, text to `{colors.ink}`, and body to `{typography.body}`.
2. Add one headline in `{typography.display}`; give it room.
3. Add a primary pill (`button-primary`) and, if needed, a secondary pill (`button-secondary`).
4. Wrap feature groups in `{colors.surface-warm}` panels at `{rounded.6xl}`.
5. Use warm greys for supporting text; keep them at least `{colors.ink-muted}` for legibility on `{colors.canvas}`.
6. Add a single piece of imagery per section — an orb or a product screenshot — and keep chrome monochrome.
7. Check that nothing except imagery introduces a hue; if a status color is needed, use `{colors.red}` or `{colors.blue}` sparingly and in product-style mockups only.
