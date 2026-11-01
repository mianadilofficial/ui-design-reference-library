---
version: alpha
name: Attio
category: "Product & SaaS"
description: "Attio's CRM site is a near-white #ffffff / #fafafb product canvas in Inter and Inter Display (500 weight, tight -0.01em tracking), near-black #1c1d1f headlines with grey #6f7988 continuations, 10px-radius charcoal #202124 buttons with a #505967 border, layered hairline shadows and a dark #101010 'Universal Context' band and footer."
colors:
  canvas: "#ffffff"
  page-body: "#ffffff"
  surface-page: "#fbfbfb"
  surface-subtle: "#fafafb"
  surface-grey: "#f3f4f6"
  surface-dark: "#101010"
  ink: "#1c1d1f"
  ink-ui: "#242629"
  ink-muted: "#6f7988"
  ink-faint: "#8f99a8"
  ink-alpha: "#0000008c"
  slate: "#505967"
  primary: "#202124"
  on-primary: "#f3f4f6"
  button-dark-alt: "#2e3238"
  blue: "#266df0"
  blue-tint: "#e8f0ff"
  blue-text: "#245bc2"
  hairline: "#0000000d"
  border-strong: "#cad0d9"
  nav-bg: "#fffffff2"
  input-text: "#232529"
  input-border: "#d3d8df"
typography:
  display:
    fontFamily: interDisplay, "interDisplay Fallback"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: "-0.4px"
  display-mobile:
    fontFamily: interDisplay, "interDisplay Fallback"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 38px
    letterSpacing: "-0.4px"
  subheading:
    fontFamily: interDisplay, "interDisplay Fallback"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 27.6px
    letterSpacing: "-0.24px"
  body:
    fontFamily: inter, "inter Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.14px"
  button:
    fontFamily: inter, "inter Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.07px"
  nav:
    fontFamily: inter, "inter Fallback"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.16px"
  link:
    fontFamily: inter, "inter Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.16px"
rounded:
  xs: 4px
  sm: 4.8px
  md: 5px
  lg: 6px
  xl: 7px
  2xl: 8px
  3xl: 9px
  4xl: 10px
  card: 12px
  panel: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 6.5px
  s8: 7px
  s9: 8px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 36px
    borderColor: "{colors.slate}"
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.slate}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.button-dark-alt}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 12px
    height: 36px
    borderColor: "{colors.border-strong}"
  eyebrow-badge:
    backgroundColor: "{colors.blue-tint}"
    textColor: "{colors.blue-text}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-ui}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.4xl}"
    padding: 10px 13px
    height: 40px
    borderColor: "{colors.input-border}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-ui}"
    rounded: "{rounded.card}"
    borderColor: "{colors.hairline}"
  floating-panel:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.panel}"
    shadow: "rgba(11, 13, 24, 0.06) 0px 0px 0px 1px, rgba(11, 13, 24, 0.024) 0px 1px 2px 0px, rgba(11, 13, 24, 0.03) 0px 3px 6px 0px, rgba(11, 13, 24, 0.035) 0px 8px 14px 0px, rgba(11, 13, 24, 0.04) 0px 16px 28px 0px"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.slate}"
---

# Attio

## Overview

Attio (https://attio.com/) is a CRM; the page title is "Attio: The CRM for agentic revenue". Its homepage looks like the product: a calm, near-white canvas, compact Inter type at weight 500, grey hairlines, small radii and layered, almost invisible shadows. Real product UI does most of the storytelling.

The capture opens with a black announcement bar ("The new architecture for agentic revenue is here →", with a close icon). The header is translucent white (#fffffff2) with the Attio logomark and wordmark, links (Platform and Resources with chevrons, Developers, Customers, Pricing), an outlined "Sign in" button and a charcoal "Start for free" button. Below sits a large product window ("Good morning, Alex" home screen with a sidebar, an "Ask anything…" field and a meetings list) over a faint lavender-blue gradient wash. A ten-cell logo grid (granola, turbopuffer, parallel, Modal, Wispr Flow, Railway, Listen, taskrabbit, AIUC, WORDSMITH) separated by hairlines follows.

The body is a long sequence of product sections inside a hairline-ruled frame: a small blue "Platform" badge, then a two-tone headline ("The intelligent system that never sleeps." in near-black, continued in grey "Picks up leads at 2am…"), a sticky left-hand list of stages (Build pipeline, Convert leads, Run sales motions, Forecast revenue, Retain and expand), and large UI scenes (a companies table with ICP scores next to a "Send follow up email" composer; an agent research list; a radial "Agents dig. You close." diagram). Further down a dark #101010 band introduces "Universal Context", followed by sections on signals, integrations ("SDK. API. MCP."), scale metrics, customers ("Trusted by 30,000+ customers"), changelog cards and a dark closing "Agentic revenue runs on Attio." band and footer.

The voice is short, declarative and paired: a bold first sentence followed by a grey explanation ("Your team, amplified. Agents prospect and reach out when buyers are looking…").

Note on the hero headline: on mobile the extraction measured the h1 "Welcome to agentic revenue." (Inter Display 40px / 600). On desktop the headline container was hidden by the extractor's overlay filter (it removed a sticky element as if it were an overlay), so the desktop capture shows the product window without the headline and no desktop h1 size was recorded.

## Colors

- **canvas #ffffff** and **page-body #ffffff** — the page background; the capture is 64% near-white.
- **surface-page #fbfbfb** — the background of the long main content band.
- **surface-subtle #fafafb** — section panels and link rows.
- **surface-grey #f3f4f6** — grey panels behind product scenes.
- **surface-dark #101010** — the "Universal Context" band, the closing band and the footer (the second-largest measured background area).
- **ink #1c1d1f** — headlines and strong text.
- **ink-ui #242629** — text inside product UI and the header links.
- **ink-muted #6f7988** — the grey continuation of headlines and secondary paragraphs; the most-read colour by characters (1,744).
- **ink-faint #8f99a8** — tertiary text such as inactive stage names.
- **ink-alpha #0000008c** — 55% black text in UI scenes.
- **slate #505967** — the 1px border of charcoal buttons and the footer link colour.
- **primary #202124** — the charcoal fill of "Start for free" and "Subscribe" (the CSS declares `--button-primary-bg-from: rgb(0, 0, 0)`; on mobile the button carries a radial-gradient background image).
- **on-primary #f3f4f6** — text on charcoal buttons; on hover it brightens to white.
- **button-dark-alt #2e3238** — an alternative dark button fill (with #edeff3 text) and the text colour of outline buttons.
- **blue #266df0**, **blue-tint #e8f0ff**, **blue-text #245bc2** — the "Send email" action inside the UI scenes and the small "Platform" badge (blue text on a pale blue tint).
- **hairline #0000000d** — 5% black borders, the most frequent border colour (44 elements).
- **border-strong #cad0d9** — the outline-button border.
- **nav-bg #fffffff2** — 95% white header.
- **input-text #232529** and **input-border #d3d8df** — form fields.

Colour is almost absent: the palette is neutral greys with a single blue used inside product UI. Logos and avatars supply the rest.

## Typography

Four families are loaded:

- **inter** (400, 500, 600) — UI and body text (8,417 characters).
- **interDisplay** (500, 600) — headlines (1,456 characters).
- **JetBrains Mono** (variable 100–800) — code and technical labels (382 characters).
- **tiemposText** (400) — a serif used sparingly (77 characters).

Inter and JetBrains Mono are open source; Tiempos Text is a licensed commercial serif.

Weight 500 is the default for nearly everything (9,304 of about 10,300 measured characters). Tracking is always slightly negative.

- **display** — Inter Display 40px / 44px, weight 500, -0.4px (-0.01em). Section headlines such as "The intelligent system that never sleeps."
- **display-mobile** — Inter Display 40px / 38px, weight 600, -0.4px. The mobile hero h1.
- **subheading** — Inter Display 24px / 27.6px, weight 500, -0.24px ("Your team, amplified.").
- **body** — Inter 14px / 20px, weight 500, -0.14px. The most-read size (4,172 characters).
- **button** — Inter 14px / 20px, weight 500, -0.07px.
- **nav** — Inter 13px / 20px, weight 500, -0.16px (announcement bar).
- **link** — Inter 16px / 22px, weight 500, -0.16px.

The CSS heading scale is `--text-heading-xs: 1.75rem`, `--text-heading-sm: 2rem`, `--text-heading-md: 2.5rem` (line-height 2.75rem), `--text-heading-lg: 3.5rem` (3.75rem, -0.015em) and `--text-heading-xl: 4rem` (4rem, -0.02em), with weight 600 for headings. Other measured sizes include 48px, 56px and 96px for larger statements and 10px–12px inside UI scenes.

## Layout

The desktop capture is 1,280px wide; the page is 16,800px tall. The announcement bar is 48px tall and black. The main content band (from y 48) is #fbfbfb with content from x 176 to x 1256, framed by hairline vertical rules that create a ruled "document" grid. Sections use a left rail (stage list) and a right content column; product scenes span the content column. The logo grid is five columns by two rows. The extraction reports a maximum of five card columns.

Spacing is fine-grained, matching the product UI: 1px, 2px, 3px, 4px, 5px, 6px, 6.5px, 7px, 8px and 10px tokens. The most frequent gaps are 6px (156 uses), 4px (134), 8px (124) and 10px (98); paddings are 4px (155), 8px (96), 6px (67), 12px and 24px. Section paddings are large: 112px and 152px.

## Elevation & Depth

Attio uses many very soft, layered shadows rather than one strong one. Measured examples:

- `rgba(0, 0, 0, 0.04) 0px 1px 3px 0px, rgba(28, 40, 64, 0.18) 0px 0px 2px 0px` (13 elements) — small UI controls.
- `rgba(0, 22, 62, 0.01) 0px 0px 1px 1px, rgba(0, 22, 62, 0.04) 0px 4px 12px -1px, rgba(0, 22, 62, 0.18) 0px 1px 3px -1px` (10 elements) — cards and popovers.
- `rgba(255, 255, 255, 0.1) 0.2px 0.2px 2px 0px inset, rgba(0, 0, 0, 0.25) 0px 1.5px 1.5px 0px` (10 elements) — dark buttons with an inner highlight.
- A five-layer panel shadow from a 1px ring to `0px 16px 28px` at 4% (the floating meeting panel).

The CSS formalises this as `--shadow-attio-layer-1` … `--shadow-attio-layer-7`, from `0px 1px 3px 0px` at 1% to `0px 64px 128px -32px` at 7%. Shadows are cool (navy-tinted) and never exceed about 25% opacity.

## Shapes

Small, precise radii: 4px, 4.8px, 5px, 6px, 7px, 8px (122 elements, the most common), 9px, 10px (buttons and inputs), 12px (41 elements, cards), 16px (floating panels) and pills (89 elements, badges and avatars). The CSS declares `--radius-sm: .25rem`, `--radius-md: .375rem`, `--radius-lg: .5rem`, `--radius-2xl: 1rem` and `--radius-3xl: 1.25rem`.

## Components

**Primary button.** #202124 fill, #f3f4f6 Inter 500 14px / 20px, 1px #505967 border, 10px radius, 0px 12px padding, 36px tall (40px for "Subscribe"); on hover the label turns white and the border darkens.

**Outline button.** White fill, #2e3238 text, 1px #cad0d9 border, 10px radius, 36px tall ("Start for free" variant). The header "Sign in" is a white outlined button whose border darkens on hover.

**Header links.** Inter 500 #242629; on hover a light grey background appears behind the link.

**Eyebrow badge.** Small pill-shaped label, #245bc2 text on #e8f0ff ("Platform").

**Two-tone headline.** Inter Display 40px / 44px: first sentence in #1c1d1f, continuation in #6f7988.

**Stage list.** A vertical list in the left rail; the active item is dark with a short vertical line at its left, inactive items are #8f99a8.

**Card.** White, 12px radius, 1px #0000000d border, soft layered shadow.

**Text input.** White, 1px #d3d8df border, 10px radius, 40px tall, 10px 13px padding.

**Footer.** #101010 with #505967 links.

## Design System Architecture

Attio publishes brand guidelines at https://attio.com/brand ("Brand guidelines and press kit"). They cover naming (Attio is one word with an uppercase A; product names are capitalised, features lowercase), the wordmark (use it by default; do not use it without the logo or typeset the name in its place) and the logomark (for avatars, app icons and favicons; keep clear space; do not warp, stretch, recolour or redraw it), with downloads for the wordmark and logomark (SVG), a logo pack (SVG/PNG, light and dark) and press photos. The page lists no colours or typefaces.

The web UI system is visible in the shipped CSS, a Tailwind v4 build with Attio-specific tokens: button tokens by variant and state (`--button-primary-bg-from`, `--button-outline-bg`, `--button-outline-border`, `--button-outline-border-focus`, `--button-ghost-bg-hover`, `--button-ghost-text-active`…), a named shadow ladder (`--shadow-attio-layer-1…7`), a heading scale with per-size line-height, weight and tracking (`--text-heading-xs…xl`), font variables (`--font-inter`, `--font-inter-display`, `--font-jetbrains-mono`, `--font-tiempos-text`), numbered neutral ramps (`--color-white-100…800`, `--color-black-200…700`) and layout variables (`--site-header-height`).

## Do's and Don'ts

**Do**
- Keep the canvas white or near-white and let real product UI carry the page.
- Set everything in Inter / Inter Display at weight 500 with slightly negative tracking.
- Write two-tone headlines: a dark first sentence and a grey continuation.
- Use charcoal #202124 buttons with a #505967 border and 10px radius.
- Separate regions with 5% black hairlines and ruled grids.
- Stack several faint, cool-tinted shadows instead of one heavy shadow.

**Don't**
- Don't introduce brand colours on marketing surfaces; blue lives inside the product UI.
- Don't use bold 700 weights for headings; the scale tops out at 600.
- Don't use large radii; cards stop at 12px–16px.
- Don't use strong or warm shadows.
- Don't recolour or redraw the logomark; the brand page forbids it.

## Responsive Behavior

At 390px the mobile pass measured the hero h1 "Welcome to agentic revenue." at Inter Display 40px / 38px, weight 600, -0.4px, centred; section headlines at 32px / 36px, weight 500; and the primary "Send me a demo" button at 14px, 10px radius, 1px #505967 border, 40px tall and 320px wide, with a radial-gradient background image over #202124. The announcement bar stays 48px tall and black; the main band measured #fbfbfb. An "Open menu" toggle was visible with two header links visible (seven on desktop).

The mobile capture shows the product scenes scaled down within the content column and the stage lists and logo grid reflowed into narrower columns.

The stylesheet is mobile-first: `min-width: 992px` (60 rules), `375px` (38), `768px` (34), `1200px` (26), `576px` (24), `1536px` (16). The desktop hero headline and intermediate widths were not measured.

## Iteration Guide

1. Start with #ffffff / #fbfbfb surfaces, #1c1d1f headlines and #6f7988 secondary text.
2. Load Inter (400/500/600) and Inter Display (500/600); set display at 40px / 44px, weight 500, -0.4px.
3. Build buttons at 36px–40px with 10px radius: charcoal with slate border, or white with #cad0d9 border.
4. Frame sections with hairline (#0000000d) rules and put real product UI in 12px–16px cards.
5. Apply the layered shadow ladder, never more than one step stronger than needed.
6. Space with 4px / 6px / 8px / 10px inside components and 112px–152px between sections.
7. Compare against the captures; re-measure the desktop hero headline before relying on its size.
