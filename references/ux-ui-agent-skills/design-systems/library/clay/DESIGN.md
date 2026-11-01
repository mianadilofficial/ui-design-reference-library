---
version: alpha
name: Clay
category: "Design & Creative Tools"
description: "Clay is a playful GTM-data brand set in Roobert (88px/575 hero, -3.52px tracking): lime (#cbd810) and black pill-less 12px buttons, a deep forest-green hero (#035d44), warm oat neutrals (#f4f3f0, #fffdf9) and candy swatches (dragonfruit, tangerine, slushie, ube) behind rounded 18px tiles and 3D clay-style illustrations."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#cbd810"
  on-primary: "#000000"
  surface-oat: "#f4f3f0"
  surface-cream: "#fffdf9"
  ink-oat: "#1b1a18"
  ink-on-pink: "#46022f"
  ink-on-orange: "#381005"
  ink-muted: "#55534e"
  ink-on-lime: "#102b03"
  oat-100: "#fefdfb"
  oat-400: "#dad4c8"
  oat-200: "#f3f2ed"
  forest: "#035d44"
  slushie: "#3bd3fd"
typography:
  display:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 88px
    fontWeight: 575
    lineHeight: 88px
    letterSpacing: "-3.52px"
  display-mobile:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 41.6px
    fontWeight: 575
    lineHeight: 41.6px
    letterSpacing: "-1.664px"
  heading:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 72px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-2.16px"
  subheading:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 48px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1.92px"
  body:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
    letterSpacing: "-0.18px"
  button-secondary:
    fontFamily: Roobertvf, Arial, sans-serif
    fontSize: 13.92px
    fontWeight: 500
    lineHeight: 20.88px
    letterSpacing: "-0.1392px"
rounded:
  xs: 4px
  sm: 6.4px
  md: 10px
  lg: 12px
  xl: 14px
  2xl: 16px
  3xl: 18px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 0.5px
  s2: 2.08px
  s3: 3.2px
  s4: 4px
  s5: 5.6px
  s6: 6.4px
  s7: 6.96px
  s8: 8px
  s9: 10px
  s10: 10.4px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 9px 18px
    height: 47px
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 9px 18px
    height: 47px
  button-nav-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 8px 16px
    height: 39px
  button-nav-oat:
    backgroundColor: "{colors.oat-200}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    height: 39px
  button-nav-oat-hover:
    backgroundColor: "{colors.oat-400}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  textarea:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-oat}"
    typography: "{typography.body}"
    padding: 11.2px 16px 16px
    height: 144px
  card:
    backgroundColor: "{colors.oat-100}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 16px 20px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink}"
---

## Overview

Clay (clay.com, the GTM data and workflow platform) wraps a B2B product in a toy-box visual language. The capture (`web/data/captures/clay.jpg`) opens with a dark-plum announcement bar in a chunky display wordmark ("SCULPT: The most creative minds in GTM. October 8, San Francisco", "SCULPT KEYNOTE RECAP ->"), then a floating white navigation card with the lowercase "clay" wordmark and a small rainbow-cloud mark (Product, Solutions, Resources, Company, Pricing, a command-K search, Log in, "Get a demo", and a black "Start free trial").

The hero is a full-bleed rolling green hillside rendered as a soft 3D clay scene: a funnel pouring colored candy shapes, a pencil, a mailbox, a seesaw with a magnifying glass, a fan, a blue looping pipe, an orange tube and a staircase of orange and tan blocks, with stylized pine trees. Over the lower, darker part of the hill sit the white headline "Build systems to grow revenue" and, on the right, "Infrastructure to get any data, run agentic workflows, and launch GTM plays." with a white "Start free trial ->" button and a lime "Get a demo ->" button, followed by "or install directly with" and three small integration icons.

A large oat-colored rounded panel overlaps the hero's bottom edge: "Trusted by more than 500,000 leading GTM teams of all sizes. Inspired by our customers. Built with love." It contains a mosaic of rounded tiles holding customer logos (Stripe, Figma, Vanta, perplexity, Notion, OpenAI, Cursor, HubSpot, Intercom, Canva, Anthropic) and quote or stat tiles ("80%+ enrichment coverage", "+140% outbound pipeline"). The next sections switch to white: a huge centered "GTM engineers build on Clay" heading, a subtitle ("Find every account in your TAM in one place."), a row of rounded use-case chips (TAM Sourcing, Automated Inbound, Lead Scoring, Automated Outbound, CRM Enrichment, Launch Ads, Rep Productivity) and a product screenshot of a lead table with a "Find with filters" modal over a bright cyan panel. A further heading begins "What do you want to build?".

**Key characteristics**
- One typeface, Roobert (variable), used from 88px display at weight 575 down to 14px UI, with strongly negative tracking at large sizes (-3.52px at 88px).
- A lime primary (`{colors.primary}`) with black text on the main CTA, black-on-white and black buttons in the nav, never gradient buttons.
- Deep forest green (`{colors.forest}`) hero behind white type, followed by warm cream/oat panels (`{colors.surface-oat}`, `{colors.surface-cream}`).
- Candy swatches (blueberry, dragonfruit, lemon, lime, slushie, tangerine, ube, matcha, pomegranate) used as tile backgrounds with deeply tinted text.
- Generous rounding: 12px buttons, 18px tiles, 24px to 48px panels, full pills for chips.
- 3D clay-style illustration and playful logo wall; screenshots are real product UI.

## Colors

Measured on clay.com (`web/data/extracted/clay.json`); the site also exposes its swatch library as CSS variables, which gives the names.

### Core
- **Canvas** `{colors.canvas}`: white page background for the white sections.
- **Ink** `{colors.ink}`: black, the main text color and the black button fill.
- **Primary lime** `{colors.primary}` (swatch `lime-300`): main CTA ("Get a demo" in the hero), label `{colors.on-primary}`.
- **Forest** `{colors.forest}`: the dark green of the hero hillside.
- **Slushie** `{colors.slushie}`: bright cyan behind the product screenshot (`slushie-500` in the older ramp).

### Warm neutrals (oat)
- **Surface oat** `{colors.surface-oat}` (`oat-200`): the trusted-by panel and light sections.
- **Surface cream** `{colors.surface-cream}`: the footer and near-white sections.
- **Oat 100** `{colors.oat-100}`: tile fill for testimonial and logo cards (and light text on dark).
- **Oat 200** `{colors.oat-200}`: light fill of the nav "Get a demo" button.
- **Oat 400** `{colors.oat-400}`: the hover fill of that button.
- **Ink oat** `{colors.ink-oat}` (oat 500 in the newer ramp): soft black for input and body text.
- **Ink muted** `{colors.ink-muted}` (oat 800): secondary text.

### Swatch pairs: tile fills with deep tinted text
Each candy hue has a pale tile fill and a very dark same-hue text color, named in the CSS variables; measured text colors on the page include:
- **Ink on pink** `{colors.ink-on-pink}` (dragonfruit 500) on dragonfruit-100 tiles.
- **Ink on orange** `{colors.ink-on-orange}` (tangerine 500) on tangerine-100 tiles.
- **Ink on lime** `{colors.ink-on-lime}` (lime 500) on lime-100 tiles.
- A navy (`blueberry-500`, #001433) text color appears for blueberry tiles.
Pale tile fills seen in the measured backgrounds: #f0f8ff (blue), #fff0fa (pink), #fff3ed (orange), #fcfee2 (lime), #f5f3ff (violet).

### Full swatch library (CSS variables)
Blueberry, dragonfruit, lemon, lime, matcha, oat, pomegranate, slushie, tangerine and ube each carry 3 to 8 steps from 50 to 950; a separate grey ramp (grey-50 to grey-700) supports UI chrome. These are internal names; only the hues listed above are visibly used on the home page.

## Typography

| Role | Family | Size / line | Weight | Letter-spacing |
|---|---|---|---|---|
| Display | Roobertvf | 88px / 88px | 575 | -3.52px |
| Display mobile | Roobertvf | 41.6px / 41.6px | 575 | -1.664px |
| Heading | Roobertvf | 72px / 72px | 500 | -2.16px |
| Subheading | Roobertvf | 48px / 48px | 500 | -1.92px |
| Body | Roobertvf | 16px / 22.4px | 400 | normal |
| Button | Roobertvf | 18px / 27px | 500 | -0.18px |
| Button small | Roobertvf | 13.92px / 20.88px | 500 | -0.1392px |

Roobert, per its foundry page at displaay.net, is a mono-linear geometric sans designed by Martin Vácha, first created in 2017 for Moogfest, available as a variable font with weight, slant and mono axes and sold commercially. The site loads it as "Roobertvf" (weights 300 to 900) and also loads Space Mono (400 and 700) for the eyebrow and wordmark-adjacent mono text, and the Phosphor icon font.

**Font substitutes:** Roobert is commercial. Close free options are a geometric sans with a friendly feel such as Figtree or Manrope; use Arial as the final fallback exactly as the site does.

**Principles**
- Leading equals font size (1.0) at display and heading sizes; tracking scales with size (about -4% of size).
- Body copy is 16px/22.4px, tight and compact.
- Headlines are enormous: 88px, 72px and 48px steps; there is no mid-size heading between 48 and 16 on the home page.
- Space Mono is loaded by the page; small uppercase captions such as "QUALIFIED AND SCORED WITH CLAY" and "ENRICHMENT COVERAGE" appear in the capture.

## Layout

- Full-bleed hero with an overlapping rounded panel ("trusted by" mosaic) that straddles the green and white; panels have 24 to 48px radii and extend nearly to the viewport edges with a small margin.
- A floating nav card sits above the hero with white fill and rounded corners.
- Content sections are centered stacks: huge heading, one-line subtitle, chip row, large product screenshot.
- Tiles in the mosaic are a masonry-like grid with varied widths; each tile is padded 16px by 20px.
- Measured gaps: 16px (most common), 8px, 32px, 10px, 4px, 12px, 24px, 20px and 48px.
- The site's layout variables are named like `--_layout---gap--regular`, `--_layout---section-horizontal--medium` and `--layout--section-padding-sm`, reflecting a Webflow-built component library.
- The measured footer block is 1,538px tall and opens with "Turn your growth ideas into reality today".

## Elevation & Depth

- Flat and tactile: tiles are distinguished by fill color and a faint 2px inset ring in the tile's own pale hue (for example `inset 0 0 0 2px` in light blue, orange, lime, pink and oat).
- White inset hairlines at 5% (`inset 0 0 0 1px`) on dark panels.
- Product screenshots float on a bright cyan field with soft-edged UI cards and cursor illustrations; no heavy shadow.
- A fully transparent 100px inset shadow is present on links (a hover-animation hook).
- Depth is conveyed by the 3D clay illustration in the hero and overlapping panels rather than shadows.

## Shapes

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | micro elements |
| `{rounded.sm}` | 6.4px | small chips |
| `{rounded.md}` | 10px | small buttons |
| `{rounded.lg}` | 12px | all buttons (most frequent) |
| `{rounded.xl}` | 14px | chips |
| `{rounded.2xl}` | 16px | media frames |
| `{rounded.3xl}` | 18px | testimonial and logo tiles |
| `{rounded.4xl}` | 24px | larger tiles |
| `{rounded.pill}` | 9999px | chips and toggles |

Larger values seen in measurements: 32px, 48px (panel tops) and extreme 100px/1600px for pills.

## Components

### Buttons
- **Primary (hero)**: `{colors.primary}` lime, black label, `{typography.button}`, radius `{rounded.lg}`, padding 9px 18px, height 47px, trailing arrow icon.
- **Light**: white fill, black label, same size ("Start free trial" over the green hero).
- **Nav dark**: black fill, white label, 13.92px/500, padding 8px 16px, height 39px.
- **Nav oat**: oat-200 fill with black label, which darkens to oat-400 on hover (measured), height 39px.
- Other measured "Start free trial" variants on the page use accent fills (magenta, blue, rust) at 42px tall inside colored tiles, each with white text.

### Navigation
- Floating card with the wordmark, five links at 16px, command-K search, Log in, and two buttons. Height measured at 58px, full-width container.

### Use-case chips
- Rounded pill chips on oat fill with 16px labels; the row is clipped at both edges in the capture.

### Cards and tiles
- Fill `{colors.oat-100}`, radius `{rounded.3xl}` (18px), padding 16px 20px, 1px white border. Contain a logo, a quote (in 12px text) and sometimes a metric with tiny uppercase caption ("80%+" "ENRICHMENT COVERAGE").

### Textarea (prompt box)
- White fill, `{colors.ink-oat}` text, 16px with -0.16px tracking, padding 11.2px 16px 16px, height 144px, 624px wide at desktop.

### Footer
- `{colors.surface-cream}` background with a white-to-cream gradient at the top; closing headline "Turn your growth ideas into reality today" with a "Start for free" call.

## Design System Architecture

No public design-system documentation or brand-guidelines page was found for clay.com (clay.com/brand returns 404; the clay.com home page exposes no styleguide link). The de-facto system comes from the page's CSS variables (roughly 400 custom properties), which reveal a Webflow-built token library:
- **Swatches**: `--_swatches---color--{hue}-{step}` (e.g. matcha-300, lemon-700, slushie-800, ube-900) and a `--loam---web-library_swatches---{hue}--{step}` set plus `terra-swatches` for the older ramp.
- **Typography**: `--loam---web-library_typography-v2---h1--font-weight-2`, `...paragraph-sm--font-size-2`, `--_typography---paragraph-medium--font-size`, and eyebrow tokens with min and max rem values for fluid sizing.
- **Components**: `--loam---web-library_components---button--border-radius`, `...input-label--letter-spacing`.
- **Layout**: `--_layout---gap--regular`, `--_layout---section-horizontal--medium`, `--loam---web-library_layout--restart---section-vertical--medium`, and `--layout--section-padding-sm`.
- **Neutrals**: `--color--grey-medium` and `--color--clay-black` (#000).

Facts about the typeface come from the foundry page https://displaay.net/typeface/roobert; the page's copy and structure come from https://www.clay.com/.

## Imagery, Voice and Density

### Imagery and art direction
- Hero art is a soft, matte 3D "clay" diorama: pastel-saturated objects (funnel, pencil, mailbox, seesaw, magnifier, tube, pipe, stepped bars) on green hills with simplified pine trees, lit with gentle shadows.
- Object colors repeat the swatch library: orange, teal, blue, tan, red dot, yellow-green.
- Customer logos are shown in full color or as soft greyed wordmarks (the leftmost tiles fade), inside rounded white or oat tiles.
- Product screenshots are real UI with a pointer-hand illustration and a spotlight modal; the surrounding field is bright cyan with a pale gradient.
- The wordmark is a lowercase "clay" with a small multicolor cloud glyph; the SCULPT event wordmark is a chunky display lettering in white on plum.

### Microcopy voice
- Direct, confident and a little cheeky: "Build systems to grow revenue", "Inspired by our customers. Built with love."
- Benefit-first section headlines from the page: "Get data from the most complete data marketplace", "Put agents that know your business to work", "Build GTM plays on a visual canvas", "Launch new plays as fast as you have ideas".
- Short CTAs: "Start free trial", "Get a demo", "Explore data marketplace", "Explore agents".
- Proof is quantified: "+140% outbound pipeline", "80%+ enrichment coverage", "3x enrichment rate".
- Questions as headings ("What do you want to build?") invite exploration.

### Density
- Hero is sparse (two headline blocks and two buttons), the logo mosaic is dense (many tiles in rows), and the product demo is detailed.
- Use-case chips offer seven options in a single scrolling row.

### Interaction cues
- Trailing arrows on both hero buttons.
- Nav "Get a demo" shifts from oat-200 to oat-400 on hover; the black "Start free trial" lightens to a dark slate on hover (measured hover fill rgb(40, 44, 53)).
- Tiles with external links show a small diagonal arrow in the top right corner.
- Command-K hint beside a search icon in the nav.

## Component Anatomy Reference

| Component | Fill | Text | Radius | Padding | Height |
|---|---|---|---|---|---|
| Hero lime button | `{colors.primary}` | `{colors.ink}` | `{rounded.lg}` | 9px 18px | 47px |
| Hero light button | `{colors.canvas}` | `{colors.ink}` | `{rounded.lg}` | 9px 18px | 47px |
| Nav dark button | `{colors.ink}` | `{colors.canvas}` | `{rounded.lg}` | 8px 16px | 39px |
| Nav oat button | `{colors.oat-200}` | `{colors.ink}` | `{rounded.lg}` | 8px 16px | 39px |
| Tile | `{colors.oat-100}` | `{colors.ink}` | `{rounded.3xl}` | 16px 20px | content |
| Textarea | `{colors.canvas}` | `{colors.ink-oat}` | none | 11.2px 16px 16px | 144px |

## Do's and Don'ts

**Do**
- Use lime with black text for the one primary action in a view.
- Put white display type over the forest green hero.
- Set headlines at 72 to 88px with leading equal to size and strong negative tracking.
- Use warm oat panels and candy-tinted tiles to group content; pair each pale fill with its deep tinted ink.
- Round everything: 12px buttons, 18px tiles, pill chips.
- Show real product UI on a bright color field.

**Don't**
- Don't use lime for body text or on white (contrast is low); it is a button fill.
- Don't use cool greys; the neutral family is oat.
- Don't use drop shadows to elevate tiles; use fill and inset hairlines.
- Don't mix a second typeface for display; Roobert handles all sizes (mono only for labels).
- Don't use stock photography; use the clay-style illustration and product screenshots.

## Responsive Behavior

- The hero headline steps from 88px (-3.52px tracking) to 41.6px (-1.664px) at 390px, keeping leading equal to size.
- Typography variables on the page carry min and max rem values (for example `font-size-min-rem` and `font-size-max-rem` on eyebrow and paragraph styles), the site's own mechanism for fluid sizing.
- Section padding tokens come in small, medium and large steps for horizontal and vertical padding.

## Iteration Guide

1. Establish canvas white, ink black, lime primary, forest green hero.
2. Set Roobert at 88/88 weight 575 for the hero line, 72 and 48 for sections, 16/22.4 for body.
3. Build tiles on oat-100 with 18px radius; give accent tiles a pale hue fill and the matching deep ink.
4. Use 12px radius for every button; make hero buttons 47px tall and nav buttons 39px.
5. Add a single 3D-clay illustration on a saturated field as the hero image.
6. Use measured swatch names (matcha, lemon, ube, slushie, tangerine, dragonfruit, blueberry, pomegranate) when adding a new accent, and pair with the deep tinted text color of the same hue.
