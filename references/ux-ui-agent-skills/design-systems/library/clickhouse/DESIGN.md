---
version: alpha
name: ClickHouse
category: "Backend, Database & DevOps"
description: "ClickHouse's marketing site is a warm near-black canvas (#131312) with off-white Inter text, Basier 600/700 headlines at up to 96px, and a single neon yellow accent (#faff69) on 4px-radius buttons, 8px cards, arrow links and testimonial panels."
colors:
  canvas: "#131312"
  ink: "#dfdfdf"
  primary: "#faff69"
  on-primary: "#151515"
  surface-card: "#1f1f1c"
  ink-strong: "#ffffff"
  ink-muted: "#a0a0a0"
  ink-on-yellow: "#000000"
  ink-soft: "#f9f9f9"
  ink-cool: "#cad5e2"
  hairline-olive: "#4f5101"
  link-tint: "#ffffff0a"
  nav-bg: "#1a1a1acc"
  banner-text: "#161600"
  card-border: "#ffffff1a"
typography:
  display:
    fontFamily: basier, "basier Fallback"
    fontSize: 96px
    fontWeight: 600
    lineHeight: 96px
  display-mobile:
    fontFamily: basier, "basier Fallback"
    fontSize: 36px
    fontWeight: 600
    lineHeight: 36px
  subheading:
    fontFamily: basier, "basier Fallback"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5.4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 46px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.link-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 16px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.banner-text}"
    typography: "{typography.nav}"
    padding: 4px 16px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 6px
    borderColor: "{colors.card-border}"
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1)
      0px 4px 6px -4px
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    padding: 64px 0px 32px
---

## Overview

ClickHouse presents itself as a database for engineers, and the homepage looks like one: a warm near-black canvas (`{colors.canvas}`), off-white reading text (`{colors.ink}`), and exactly one chromatic color, a neon yellow (`{colors.primary}`) that is used for the filled call-to-action, eyebrow labels, arrow links, icon outlines and entire testimonial panels. There is no secondary hue in the marketing chrome. Everything that is not yellow is a step on a grey scale, which is why the yellow reads as a signal rather than as decoration.

The page measured for this document is the homepage at `https://clickhouse.com/` (desktop 1280px and mobile 390px). The first screen of the capture shows, top to bottom: a full-width yellow announcement strip ("ClickHouse speed is now inside Microsoft Fabric"), a dark translucent navigation bar with the logo, a product/solutions menu, a GitHub star count and a yellow "Get Started" button, then a centered hero. The hero headline is "The leading database for AI" in very large white Basier, a grey-white sub-line, and two buttons side by side: a filled yellow "Start free cloud trial" and an outlined dark "Contact sales".

**Key Characteristics:**
- Warm near-black canvas `{colors.canvas}` with a faint diagonal gradient on the body (measured as a 275deg gradient from a slightly lighter olive-grey to near-black), never pure `{colors.ink-on-yellow}` black for page backgrounds.
- A single accent, `{colors.primary}`, with `{colors.on-primary}` text on top of it. Hover state of the yellow button shifts to a slightly different yellow (measured on the "Get Started" button), not to a different hue.
- Basier at weights 600 and 700 for headlines, Inter for everything else (body, buttons, navigation), Inconsolata 600 for a small amount of monospace.
- A 96px hero headline (`{typography.display}`) that drops to 36px on mobile (`{typography.display-mobile}`) with line-height equal to font-size on both: tight, poster-like stacking.
- Small radii: 4px on buttons (`{rounded.xs}`), 8px on cards (`{rounded.md}`). Pills (`{rounded.pill}`) appear only on filter chips.
- Cards are one step lighter than the canvas (`{colors.surface-card}`) with a 1px translucent white border (`{colors.card-border}`), not with strong shadows.
- Yellow-on-black eyebrow labels in uppercase small type ("CLICKHOUSE IS TRUSTED BY", "USE CASES", "FILTER BY").
- Customer-proof density: a two-row logo marquee (Block, Vercel, Meta, ebay, Microsoft, Spotify, Lyft, character.ai, Olive Young, ramp, Cognitiv, Statsig) and a yellow testimonial panel quoting Anthropic.

## Colors

The palette is measured from the live page (`web/data/extracted/clickhouse.json`) and cross-checked against the dark theme tokens that ClickHouse publishes in its open-source design system, Click UI (`src/theme/tokens/variables.dark.ts`), where the same `#faff69` is the link and primary color and `#1f1f1c` is a default background.

### Brand
- **ClickHouse Yellow** (`{colors.primary}`): the filled CTA background, the CTA border, the announcement strip, eyebrow text, arrow links, and the icon-tile outlines. It was the single most weighted background by area in the measurement.
- **On-primary ink** (`{colors.on-primary}`): text on the yellow button. A near-black, not pure black.
- **Ink on yellow** (`{colors.ink-on-yellow}`): pure black used for text on the large yellow testimonial panel (the Anthropic quote and name in the capture).
- **Banner text** (`{colors.banner-text}`): a very dark olive used for the link text inside the yellow announcement strip (the nav-link measurement).

### Surface
- **Canvas** (`{colors.canvas}`): the page background and the body color.
- **Card surface** (`{colors.surface-card}`): panels such as the use-case cards and logo card.
- **Footer** uses `{colors.on-primary}` as its background, the same near-black as the CTA text, so the footer is slightly deeper than the page.
- **Nav background** (`{colors.nav-bg}`): a translucent dark (80% alpha) so that the hero gradient shows faintly through the bar.
- **Link tint** (`{colors.link-tint}`): a 4% white wash behind the announcement cards ("Langfuse is now part of ClickHouse").

### Text
- **Ink** (`{colors.ink}`): default reading color, by far the most-used text color by character count.
- **Ink strong** (`{colors.ink-strong}`): the white of the hero headline.
- **Ink soft** (`{colors.ink-soft}`): an almost-white for navigation text and emphasized labels.
- **Ink muted** (`{colors.ink-muted}`): grey for secondary paragraphs, e.g. the "Sony, Lyft, Cisco, GitLab..." sub-copy.
- **Ink cool** (`{colors.ink-cool}`): a cool blue-grey that appears in navigation child text.

### Borders
- **Card border** (`{colors.card-border}`): 10% white, 1px. Used on cards.
- **Hairline olive** (`{colors.hairline-olive}`): a dark olive measured in the border colors; it appears as a subtle rule rather than a visible line.

### Usage rules
- Yellow is never used as a text color on a yellow or light surface, and black text is never placed on the dark canvas.
- On the yellow testimonial panel the type inverts: quote in `{colors.ink-on-yellow}`.
- Do not introduce a second brand hue. Status colors exist in Click UI for the product console but are not part of the marketing page measured here.

## Typography

### Families
- **Basier** (loaded weights 600 and 700): display and headings. The page serves it as a web font with a metric-matched fallback named "basier Fallback"; its license terms were not verified, so treat it as proprietary.
- **Inter** (loaded weights 400, 500, 600, 700): body copy, navigation, buttons, small labels. Also the fallback sans in Click UI's component tokens.
- **Inconsolata** (weight 600): a small monospace accent.

### Scale (measured on the homepage)
| Role | Token | Font | Size / line-height | Weight |
|---|---|---|---|---|
| Hero h1 | `display` | Basier | 96px / 96px | 600 |
| Hero h1 (mobile 390px) | `display-mobile` | Basier | 36px / 36px | 600 |
| Card heading (h3) | `subheading` | Basier | 20px / 25px | 700 |
| Body paragraph | `body` | Inter | 14px / 21px | 400 |
| Button | `button` | Inter | 16px / 20px | 500 |
| Navigation link | `nav` | Inter | 14px / 20px | 500 |

The section heading ("Built for every modern data challenge") is Basier 600 at 36px with 45px line height, the same size as `display-mobile`. Default body copy on the `<body>` element is Inter 16px/24px, while card paragraphs run at 14px.

### Principles
- Headlines are set tight (line-height equals size at the hero) and white; paragraphs are loose and off-white.
- Eyebrows are small uppercase yellow Inter with positive letter-spacing (the extractor measured a 14px size with 0.35px tracking).
- Weight carries hierarchy more than size: 400 for reading, 500 for UI, 600 to 700 for headings.

### Font substitutes
Basier is proprietary. Without a license use Inter at 600 for display; the tracking is neutral, so no adjustment is required. Keep line-height equal to font-size at display sizes to retain the stacked look.

## Layout

- Content sits in a centered container; at a 1280px viewport the measured hero heading block is 1216px wide.
- The hero is centered text on the canvas with generous vertical space before the first card row.
- Sections alternate a flat canvas band and a slightly lighter band (the logo marquee sits on a lighter grey area in the capture).
- Use-case cards are a four-column row on desktop; each card stacks an icon tile, a heading, a paragraph, and a yellow arrow link pinned to the bottom.
- A two-column section ("Build real-time data products that scale") puts copy and filter chips on the left and a large yellow video/testimonial panel on the right.
- Spacing scale in the tokens runs from 2px to 28px (`spacing.s1` through `spacing.s10`); common values are 4, 6, 8, 12, 16 and 24px. Button padding is `12px 24px`, footer padding `64px 0px 32px`.
- The header is tall (measured 109px including the announcement strip) and sticky-feeling, backed by a translucent bar.

## Elevation & Depth

Depth is mostly tonal rather than shadowed. The ladder is: footer/CTA-text black (`{colors.on-primary}`), canvas (`{colors.canvas}`), card (`{colors.surface-card}`), then 10% and 20% white strokes. Cards carry a Tailwind-style medium shadow (a 10px offset, 15px blur, -3px spread at 10% black), which is nearly invisible on a dark ground; the stroke does the work. The nav is the only translucent layer. A very large, very low-opacity colored glow shadow (800px blur) is measured on some hero decoration and is purely atmospheric.

## Shapes

- `{rounded.xs}` 4px: buttons, banner link corners.
- `{rounded.sm}` 6px: rare small controls.
- `{rounded.md}` 8px: cards, logo card, media frames.
- `{rounded.pill}` full pill: filter chips ("Real-time analytics", "Observability", ...), and circular icon buttons.
- Icon tiles are rounded squares with a 1px yellow outline and a yellow line icon inside; on yellow panels they invert to black.
- Corners are never sharp zero and never very large: the geometry says "tool", not "toy".

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.primary}` fill, `{colors.on-primary}` text, Inter 500 16px, 4px radius, `12px 24px` padding, 46px tall, 1px border in the same yellow. On hover the fill lightens or deepens slightly within the yellow family.
- **Secondary (outlined)**: transparent on dark with a thin light border and off-white text ("Contact sales" in the capture). It shares the primary's height and radius so the pair sit flush.
- **Nav CTA** ("Get Started"): the same yellow, smaller (measured 40px tall).

### Navigation
- The bar background is `{colors.nav-bg}`, links are Inter 500 14px with `4px 16px` padding. Items with dropdowns show a small chevron. Right side: search icon, console icon, language picker, GitHub star count, "Sign in" as text, then the yellow button.
- The announcement strip above it is a full-width yellow bar with dark text (`{colors.banner-text}`) and a close icon.

### Announcement cards
- Two side-by-side tiles inside one bordered frame, each with a logo/illustration at left and 14px copy at right, on the `{colors.link-tint}` wash.

### Use-case cards
- `{colors.surface-card}`, 8px radius, 1px `{colors.card-border}`, internal padding generous (the measured shorthand for the generic card is 6px for the logo card; the use-case cards in the capture have visibly larger inner spacing). Structure: yellow-outlined icon tile, Basier 700 20px heading, muted 14px body, yellow bold arrow link.

### Filter chips
- Pill outlines with a thin border, 12px to 14px Inter text, wrapped across several lines under a "FILTER BY" eyebrow.

### Testimonial panel
- Solid `{colors.primary}` surface with an inner video frame and a large quote below in black; the name is bold.

### Footer
- `{colors.on-primary}` background, `64px 0px 32px` padding, multi-column link lists under short column headings (Product, ...).

## Imagery & Art Direction

- **Photography** is rare and purposeful: the only photograph in the first screens of the capture is a customer talking-head video still inside the yellow testimonial panel, tinted warm so it sits in the yellow frame.
- **Logos** are shown in a single white or light-grey treatment, in two staggered rows that scroll horizontally. They are the main proof device, ahead of statistics.
- **Icons** are thin-stroke line icons (bar chart, pulse line, database cylinder, head with circuit) in yellow, centered in a 1px yellow-outlined rounded square. On the yellow panel the same tile style turns black.
- **Illustration** is minimal; the announcement cards use small multicolor product marks (Langfuse, Managed Postgres) as the only non-yellow color accents, and they are contained inside their cards.
- **Background atmosphere** comes from the body gradient and a large low-opacity glow, not from imagery.

## Microcopy Voice

- Headlines are declarative and superlative without hedging: "The leading database for AI", "Built for every modern data challenge", "Build real-time data products that scale".
- Sub-lines are concrete and technical: "Powering agentic systems with millisecond queries at petabyte scale."
- Eyebrows are short uppercase noun phrases ("USE CASES", "FILTER BY").
- Links end in an arrow glyph and name their destination: "Explore real-time analytics", "Explore observability".
- Buttons are verb-first and short: "Start free cloud trial", "Contact sales", "Get Started", "Sign in".
- Testimonials are given a name card, not a headshot grid: the Anthropic quote about Claude 4 is the lead proof.

## Interaction States

- Buttons: hover moves the yellow to a different lightness within the same hue (measured on the "Get Started" button); the border changes with the fill, so no outline mismatch appears.
- Links in cards are yellow, bold, with a trailing arrow; hover states in Click UI tokens move link color to a paler yellow (`#feffc2` in the dark theme file).
- Focus: Click UI defines a yellow focus color on its interactive tokens, so a yellow outline is the expected focus ring on dark surfaces.
- Disabled states are not visible on the marketing page and are left unspecified here.

## Design System Architecture

ClickHouse publishes an open-source design system, **Click UI**, "the ClickHouse design system and component library" (README, https://github.com/ClickHouse/click-ui), documented at https://clickhouse.design/click-ui. It is a React component library with light and dark themes generated from design tokens kept in `tokens/themes`, compiled to `src/theme/tokens/variables.{light,dark}.ts` and `src/theme/styles/tokens-{light,dark}.css`, exposed as `--click-*` CSS custom properties. The README warns that the package was in very early development when read, so treat it as the console/product system.

Observations that connect it to the marketing site: the dark theme tokens use `#faff69` as the link and primary color and `#1f1f1c` as a default surface, both of which are also measured on clickhouse.com. Click UI's component fonts are set to Inter with a system fallback stack.

The marketing site itself is built with utility classes (CSS variables named like `--color-neutral-750`, `--color-primary-400`, `--text-2xl`, `--header-height` are present in the shipped CSS), i.e. a Tailwind-style token layer separate from Click UI. No public brand-guidelines page was found (https://clickhouse.com/brand returned 404); a logo card on the homepage offers "Copy logo as SVG", "Download full logo" and "Download logomark".

## Do's and Don'ts

### Do
- Use `{colors.primary}` for the one primary action in a view, and for eyebrow labels and arrow links.
- Pair yellow with `{colors.on-primary}` text, never with white.
- Keep headings in Basier (or Inter 600 as a substitute) and tight; keep paragraphs 14px in `{colors.ink}`.
- Separate surfaces with a 1px `{colors.card-border}` stroke rather than heavy shadows.
- Use 4px radius for buttons and 8px for cards.
- Show customer logos in a monochrome row to keep the page one-accent.

### Don't
- Don't add a second accent hue to the marketing chrome.
- Don't use pure black as the page background; the canvas is warm `{colors.canvas}`.
- Don't round buttons into pills; pills are for filter chips only.
- Don't use yellow for long body text.
- Don't stack more than two buttons in a hero; the page uses one filled and one outlined.
- Don't use light weights (below 400) anywhere; none were loaded.

## Responsive Behavior

- Breakpoints were measured at only two widths (1280px desktop, 390px mobile); intermediate breakpoints are not documented here.
- Component dimensions that stay fixed across widths: the 46px primary button height, the 4px radius, and the `12px 24px` padding.
- Component dimensions that change: hero type (96px to 36px),  the header (mobile header layout not captured).
- Touch targets on the nav and filter chips remain pill/rect outlines with at least 28px height, matching the measured nav link height.

- Measured at 1280px and 390px. The hero headline drops from 96px to 36px (`{typography.display}` to `{typography.display-mobile}`) at identical line-height ratio of 1.
- Mobile card and testimonial layouts were not inspected; only the h1 size change was measured at 390px.
- Mobile navigation behavior was not captured and is left unspecified.
- The logo marquee keeps scrolling at all widths and bleeds off the viewport edges, so partial logos at the edges are intentional.
- Buttons keep their 4px radius and padding at all widths.

## Iteration Guide

1. Start from the canvas `{colors.canvas}` and ink `{colors.ink}`; add yellow only after the layout works in grey.
2. Choose the one primary action and render it with `button-primary`; make any second action outlined.
3. Build cards from `{colors.surface-card}`, 8px radius, 1px `{colors.card-border}`.
4. Set headings in Basier 600/700 (or Inter 600), paragraphs in Inter 400 14px.
5. Add yellow eyebrow labels above section headings to establish rhythm.
6. Introduce a solid yellow panel once per page for a testimonial or major callout, with black type.
7. Check contrast: yellow on near-black and near-black on yellow both pass comfortably; grey `{colors.ink-muted}` text is for secondary copy only.
8. Verify against the capture: one accent, small radii, tonal depth.
