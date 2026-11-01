---
version: alpha
name: Cursor
category: "Developer Tools & IDEs"
description: "Cursor's homepage uses warm cream grounds (#f7f7f4, #f2f1ed), olive-black ink (#26251e) with alpha-mixed greys, a custom CursorGothic sans at weight 400 (26px hero), pill buttons, and an orange accent (#f54e00) for links, with large product screenshots as the visuals."
colors:
  canvas: "#f2f1ed"
  page-body: "#f7f7f4"
  ink: "#26251e"
  primary: "#26251e"
  on-primary: "#f7f7f4"
  surface-sand: "#d9d5cf"
  ink-secondary: "#3f3e3299"
  ink-near-black: "#0a0a0a"
  ink-tertiary: "#5d5d4b66"
  ink-white: "#ffffff"
  ink-faint: "#4c4c3c80"
  hairline-on-dark: "#ffffff1a"
  primary-hover: "#3b3a33"
  accent: "#f54e00"
  ansi-red: "#cf2d56"
  ansi-green: "#1f8a65"
typography:
  display:
    fontFamily: CursorGothic, "CursorGothic Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 32.5px
    letterSpacing: "-0.325px"
  display-mobile:
    fontFamily: CursorGothic, "CursorGothic Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24.375px
    fontWeight: 400
    lineHeight: 30.4688px
    letterSpacing: "-0.304688px"
  subheading:
    fontFamily: CursorGothic, "CursorGothic Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28.6px
    letterSpacing: "-0.11px"
  body:
    fontFamily: CursorGothic, "CursorGothic Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.08px
  nav:
    fontFamily: CursorGothic, "CursorGothic Fallback", system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  input:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17.3333px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 8px
  2xl: 10px
  3xl: 12px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.87px
  s3: 2px
  s4: 2.5px
  s5: 3px
  s6: 3.73px
  s7: 4px
  s8: 4.67px
  s9: 5px
  s10: 5.6px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 12.48px 21.6px 12.8px
    height: 43px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 5.6px 12px 5.88px
    height: 32px
    borderColor: "{colors.ink}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 17.5px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    padding: 0px 20px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 8px 8px 6px
    height: 31px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.14) 0px 28px 70px 0px, rgba(0, 0, 0, 0.1) 0px 14px 32px 0px, oklab(0.263084 -0.00230259 0.0124794 / 0.1) 0px 0px 0px 1px
    transform: matrix(1, 0, 0, 1, -240, -180)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 67.2px 20px 30px
---

## Overview

Cursor's homepage (measured at `https://cursor.com/`, desktop 1280px and mobile 390px) is a warm, paper-toned, typographically led page. The grounds are two close cream tones, `{colors.page-body}` for the page and `{colors.canvas}` for panels and the footer; the ink is a warm olive-black (`{colors.ink}`), not pure black; and the only saturated color in the chrome is an orange accent (`{colors.accent}`) used for text links. Product screenshots do the visual work: large, realistic windows of the Cursor desktop app floating over painterly landscape artwork.

The capture shows, top to bottom: a thin header with the cube logo and "CURSOR" wordmark at left, centered links (Models, Product, Enterprise, Pricing, Resources), and at right "Sign in" as text, an outlined pill "Contact sales" and a dark pill "Download"; a left-aligned hero whose h1 is surprisingly small and quiet ("Cursor is your coding agent for building ambitious software." at 26px), followed by a dark pill "Download for macOS" with a download arrow and a light-grey pill "Request a demo"; a wide rounded frame holding a faded impressionist landscape painting with a "Cursor Desktop" window on top (a task list, an agent conversation, a browser preview in a serif typeface) and a cookie notice overlapping it; a "Trusted every day by teams that build world-class software" line over a grid of logo tiles (Stripe, Datadog, Linear, NVIDIA, Figma, ramp, Decagon, Adobe); and a feature panel where the headline "Agents turn ideas into code" sits left with a grey continuation sentence and an orange "Learn about agentic development" link, beside a cropped app screenshot.

**Key Characteristics:**
- Paper-warm neutrals: `{colors.page-body}` and `{colors.canvas}` instead of white; ink `{colors.ink}` with alpha steps for secondary text.
- A custom sans, CursorGothic, at weight 400 with slightly negative tracking at larger sizes (`{typography.display}`, `{typography.subheading}`); no bold headlines anywhere in the marketing chrome.
- Small, calm headline scale: the hero h1 is 26px (24.375px on mobile), the feature headline 22px.
- Pill buttons (`{rounded.pill}`): dark filled for the primary action, light grey or outlined for secondary.
- Orange (`{colors.accent}`) reserved for inline links and a few product highlights; green and red appear only inside product diffs.
- Realistic product UI inside soft, large-radius containers with long diffuse shadows.
- Mono (Berkeley Mono) and serif (EB Garamond) fonts appear inside the product screenshots, not in the site chrome.

## Colors

All values are measured on the live page (`web/data/extracted/cursor.json`); the site's own CSS variables (`--color-theme-*`) in the same extraction confirm the names and roles.

### Surfaces
- **Page body** (`{colors.page-body}`): the page background (`--color-theme-product-editor`, `--color-theme-button-text`).
- **Canvas** (`{colors.canvas}`): the slightly deeper cream for cards, the footer and app chrome (`--color-theme-product-chrome`).
- **Surface sand** (`{colors.surface-sand}`): a darker warm grey-beige measured as a panel/tile fill.
- **Hairline on dark** (`{colors.hairline-on-dark}`): 10% white used on borders of the dark UI pieces.

### Ink
- **Ink** (`{colors.ink}`): `--color-theme-text`, the button background and almost all text.
- **Ink secondary** (`{colors.ink-secondary}`): 60% alpha of the ink, for secondary text (`--color-theme-text-sec` is the same 60% mix).
- **Ink tertiary** (`{colors.ink-tertiary}`) and **ink faint** (`{colors.ink-faint}`): lighter alpha steps for captions and placeholders in the screenshots.
- **Ink near-black** (`{colors.ink-near-black}`): the near-black used in a few high-contrast labels.
- **White** (`{colors.ink-white}`): on dark pieces.

### Action
- **Primary** (`{colors.primary}`): the same olive-black as ink, used as the fill of dark pills (`--color-theme-button-bg`).
- **On-primary** (`{colors.on-primary}`): button text, the same cream as the page.
- **Primary hover** (`{colors.primary-hover}`): `--color-theme-button-hover-bg`, a slightly lifted olive-grey.

### Accent and product semantics
- **Accent** (`{colors.accent}`): `--color-theme-accent`, the orange of text links such as "Learn about agentic development".
- **ANSI green** (`{colors.ansi-green}`) and **ANSI red** (`{colors.ansi-red}`): `--color-theme-product-ansi-green` and `-red`, the diff colors in product screenshots (for example "+70" in green and "-21" in red).

### Usage rules
- Never set the page on pure white or pure black.
- Use alpha mixes of `{colors.ink}` for hierarchy rather than introducing grey hues.
- Keep orange to links and tiny highlights; never use it as a button fill.

## Typography

### Families
- **CursorGothic** (400): all marketing headings, body and navigation. The Design Compass write-up of the identity (https://designcompass.org/en/2025/11/27/typographically-focused-branding-of-ai-tool-cursors/) says the identity is a collaboration between Cursor and Chimera and that "the core of the refresh is Cursor Gothic, based on Chimera's retail typeface, Waldenburg", and that the logo and lockups are embedded in the typeface as a ligature.
- **system-ui** stack: used inside the app screenshots and inputs (measured at 13px).
- **Berkeley Mono** (400): code and terminal text in the screenshots.
- **EB Garamond** (400, 500 italic) and **Lato**: only inside the mocked "Acme Labs" page and similar demo content.
- **CursorIcons16**: icon font.

### Scale (measured)
| Role | Token | Font | Size / line-height | Weight | Tracking |
|---|---|---|---|---|---|
| Hero h1 | `display` | CursorGothic | 26px / 32.5px | 400 | -0.325px |
| Hero h1, mobile | `display-mobile` | CursorGothic | 24.375px / 30.4688px | 400 | -0.304688px |
| Feature headline (h3) | `subheading` | CursorGothic | 22px / 28.6px | 400 | -0.11px |
| Body | `body` | CursorGothic | 16px / 24px | 400 | 0.08px |
| Navigation / small button | `nav` | CursorGothic | 14px / 14px | 400 | normal |
| Input | `input` | system-ui | 13px / 17.3333px | 400 | normal |

A 20px bold system-ui "Mission Control Interface" h2 was also measured, but it is text inside a product screenshot, so it is not a site token. The most-used sizes by characters are 16px, 12px, 14px, 13px, 11px and 22px; the many small sizes come from the product screenshots.

### Principles
- Headlines are small and regular-weight; hierarchy comes from color (ink vs 60% ink) and position, not size or weight. The feature headline pairs a full-ink first sentence with a grey-ink continuation in the same size.
- Tracking tightens as size grows: -0.0125em at 26px, -0.005em at 22px, +0.005em at 16px body.
- Weight 400 dominates (about 11000 of the measured characters), with only small amounts at 500, 600 and 700.

### Font substitutes
CursorGothic is proprietary. A close stand-in is a Univers/Akzidenz-style neo-grotesque such as Inter Display or Helvetica Neue at 400 with the same tracking; for the mono in mock UI use Berkeley Mono or JetBrains Mono.

## Layout

- Content is left-aligned inside wide margins; the measured header is 52px tall (`--site-header-height`) with a 64px sticky offset.
- The hero text block sits at the left, with the product frame spanning the full container width beneath it.
- Logo tiles are an eight-column grid of equal sand tiles with logos centered, in a single row at desktop.
- Feature panels use `{colors.canvas}` blocks with an off-center, cropped screenshot that bleeds off the panel's right edge; the headline sits at the vertical middle on the left.
- Vertical rhythm is generous: large gaps between the hero, the frame, the trust row and the feature panel.
- The tiny spacing values in the generated token list (1px to 5.6px) come from the product UI; page-level spacing is multiples of 4px to 16px.

## Elevation & Depth

- Pages are flat; the screenshots carry the depth. The measured popover/card shadow stacks a 28px/70px blur at 14% black, a 14px/32px blur at 10% black and a 1px hairline ring: a long, diffuse "floating window" shadow.
- Product windows have macOS-style traffic-light dots and a title bar ("Cursor Desktop"), grounding the screenshots as real apps.
- Painterly background artwork is lightly desaturated and sits behind windows to give a soft, tactile backdrop; the Design Compass article notes the background image "features artwork from real artists".
- The cookie notice is a white translucent card with the same floating shadow style.

## Shapes

- `{rounded.pill}`: all site buttons and nav pills.
- `{rounded.4xl}` (16px) and `{rounded.2xl}` (10px): large frames and cards (the measured card radius is 10px); `--radius-2xl` in the site CSS is 1rem.
- `{rounded.xl}` 8px and `{rounded.md}` 4px: smaller panels, code chips (`--prose-code-border-radius` is 4px), and product UI elements.
- `{rounded.xs}` 2px, `{rounded.sm}` 3px, `{rounded.lg}` 5px, `{rounded.3xl}` 12px: product UI details.
- The logo itself is a cube with subtly rounded corners (Design Compass), in 2D, 2.5D and 3D forms.

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.ink}` fill, `{colors.page-body}` label, CursorGothic 16px, pill, 43px tall, `12.48px 21.6px 12.8px` padding, 1px border in the same ink. Hover fill is `{colors.primary-hover}`. Example: "Download for macOS" with a download arrow.
- **Secondary** (`button-secondary`): the 32px-tall header "Download" pill, 14px, `5.6px 12px 5.88px` padding.
- **Light pill**: "Request a demo →" in a light grey-beige fill with ink text, same height as the primary.
- **Outlined pill**: "Contact sales" in the header, transparent with a 1px ink-alpha border (`--color-theme-button-sec-border` is a 60% ink mix).
- Cookie buttons ("Reject All", "Accept All Cookies") reuse the dark pill; "Cookies Settings" is outlined.

### Navigation
- Header on `{colors.page-body}`, padding `0px 20px`, items at 14px; menus with small down arrows. "Sign in" is plain text.

### Links
- Inline links in feature copy are orange (`{colors.accent}`) with a trailing arrow; footer and nav links are ink.

### Cards and frames
- Product frames: large radius, deep soft shadow, content is a real screenshot of Cursor with a left task list ("READY FOR REVIEW 5"), a center agent chat, a right preview pane.
- Logo tiles: flat sand tiles (`{colors.surface-sand}` family) with centered monochrome logos.

### Inputs
- `text-input`: 13px system-ui, `8px 8px 6px` padding, 31px tall (the chat box in the screenshot: "Plan, search, build anything...").

### Footer
- `{colors.canvas}` background, padding `67.2px 20px 30px`; columns Product, Resources, Company, Legal, Connect; a compliance line (SOC 2, ISO27001, ISO42001, AIUC-1).

## Imagery & Art Direction

- **Painterly backdrops**: the first product frame is set on a soft, desaturated landscape painting (mountains and sky in muted ochre and blue-grey). Design Compass says the background artwork is by real artists, tying the product to a creative, human register.
- **Realistic app windows**: the "Cursor Desktop" window shows a left sidebar of tasks with diff counts ("+70", "+135 -21"), a central chat transcript with file chips ("app/page.tsx +52 -0", "app/globals.css +18 -0") and a right-hand browser preview. A second window shows a "feature-prd.md" plan with a task checklist and a "Build" button in a gold-brown tone.
- **Serif inside the demo**: the preview page uses an italic serif "Acme Labs" heading; this is demo content, which signals that the product builds designed sites, not that the site chrome is serif.
- **Logo tiles**: flat sand tiles with greyscale logos, eight across.
- **No people photography** appears in the first screens of the capture.
- **Motion**: Design Compass notes a mini code-editor interaction implemented with CSS where "the cursor itself" acts as a development tool; static captures cannot show it.

## Microcopy Voice

- Plain, confident, and modest in size: "Cursor is your coding agent for building ambitious software."
- Feature headlines are two-part statements: a bold claim in full ink and a softer explanation in grey: "Agents turn ideas into code" followed by "Accelerate development by handing off tasks to Cursor, while you focus on making decisions."
- Links are phrased as invitations with an arrow: "Learn about agentic development".
- Buttons are literal: "Download for macOS", "Request a demo", "Contact sales", "Sign in".
- Social proof leads with a calm sentence: "Trusted every day by teams that build world-class software".
- The brand page mandates the short name: "Refer to us as Cursor. Not Cursor AI or Cursor Code."

## Interaction States

- Dark pill hover (measured on the header "Download" pill): fill and border change from `{colors.ink}` to `{colors.primary-hover}`; the text stays `{colors.page-body}`.
- Site CSS defines hover text as the same cream (`--color-theme-button-hover-text`) and a hover border matching the hover fill.
- Secondary outlined pills use a 60% ink border and transparent fill, per `--color-theme-button-sec-*`.
- Easing: `--ease-out-spring` is `cubic-bezier(.25, 1, .5, 1)` and the default transition easing is `cubic-bezier(.4, 0, .2, 1)`.
- Focus and disabled states are not visible in the capture and are left unspecified.

## Page Section Inventory

1. **Header**: logo, five links, "Sign in", outlined "Contact sales", dark "Download".
2. **Hero**: left-aligned 26px headline; dark and light pill buttons.
3. **Product frame**: landscape painting, the Cursor Desktop window, an overlapping cookie notice.
4. **Trust row**: one centered sentence, eight logo tiles.
5. **Feature panel (agents)**: a `{colors.canvas}` block, left text, right cropped screenshot titled "Mission Control Interface".
6. **Second feature panel**: a browser-like window ("cursor.com/agent") with an "Acme Research Dashboard" prompt, starting at the bottom of the capture.
7. **Footer**: five link columns, legal links and certifications.

## Design System Architecture

Cursor does not publish a public component or token library. Its public brand resource is the guidelines page https://cursor.com/brand ("Resources to represent Cursor consistently and accurately"), which offers downloadable logos (2D default and 2.5D; horizontal lockup preferred, vertical lockup, cube or wordmark), app icons (2.5D default, 2D, 3D, light and dark), avatars, and a naming rule: "Refer to us as Cursor. Not Cursor AI or Cursor Code." It publishes no hex values or type scale.

The identity was developed with the type studio Chimera, per Design Compass, around the custom CursorGothic. The site's own CSS exposes a theme layer of custom properties that works as the de-facto token system: `--color-theme-fg`, `--color-theme-text`, `--color-theme-text-sec`, `--color-theme-text-tertiary`, `--color-theme-button-bg`, `--color-theme-button-hover-bg`, `--color-theme-accent`, `--color-theme-border-01` through `-03` (alpha mixes of the ink), `--color-theme-product-*` (the colors inside product mock-ups, including ANSI red and green), plus radius (`--radius-2xs` 2px to `--radius-3xl` 24px), font (`--font-system`, `--font-mono`), header height (`--site-header-height` 52px) and easing tokens (`--ease-out-spring`). Borders and washes are built from `color-mix(in oklab, #26251e N%, transparent)`, which is why every grey on the page is a translucent ink.

## Do's and Don'ts

### Do
- Use warm cream grounds (`{colors.page-body}`, `{colors.canvas}`) and olive-black ink.
- Build secondary text and borders as alpha mixes of `{colors.ink}`.
- Keep headlines at weight 400 and modest sizes; let screenshots carry the visual weight.
- Use pill buttons: dark for primary, light or outlined for secondary.
- Use orange only for inline links and small highlights.
- Show real product UI with long, soft shadows and macOS window chrome.
- Name the product "Cursor", never "Cursor AI" or "Cursor Code" (per the brand page).

### Don't
- Don't use pure white or pure black backgrounds.
- Don't add bold or heavy display type.
- Don't use orange, green or red as large fills.
- Don't use sharp-cornered buttons.
- Don't use stock illustration; use product screenshots or real artwork.
- Don't place the logo as a loose icon beside text without the lockup; the lockup lives in the typeface.

## Responsive Behavior

- Measured at 1280px and 390px. The hero h1 changes from 26px to 24.375px (`{typography.display}` to `{typography.display-mobile}`); line-height and tracking scale proportionally.
- The mobile layout of the screenshot frames, logo grid and feature panel was not captured and is unspecified.
- Header height is 52px in the CSS variable; mobile navigation was not inspected.
- Buttons stay pills and keep their padding.

## Iteration Guide

1. Start with a `{colors.page-body}` page and `{colors.ink}` text; set all type in CursorGothic (or a neo-grotesque substitute) at 400.
2. Write a short, quiet headline at 26px, and one dark pill primary plus one light pill secondary.
3. Place one large product screenshot in a rounded frame with a long diffuse shadow, on soft artwork.
4. Add a trust row of flat sand tiles with monochrome logos.
5. In feature panels, pair a full-ink sentence with a 60%-ink continuation at 22px; add an orange `{colors.accent}` link with an arrow.
6. Derive all greys from `{colors.ink}` alpha; avoid new hues.
7. Compare against the capture: cream, quiet, product-first.
