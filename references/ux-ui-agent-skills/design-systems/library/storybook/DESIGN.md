---
version: alpha
name: Storybook
category: "Developer Tools & IDEs"
description: "Storybook's storybook.js.org site: deep navy #0d1026 canvas under a pink-orange-blue aurora hero, white #ffffff Nunito Sans text (56px/700 headlines), white pill CTAs with black labels, ocean-blue #029cfd links, and the Storybook design-system palette led by coral #ff4785 and ocean #029cfd; inputs and chips use 4–6px radii."
colors:
  canvas: "#0d1026"
  page-body: "#ffffff"
  ink: "#ffffff"
  ink-dim: "#ffffff99"
  ink-zinc: "#a1a1aa"
  ink-slate: "#94a3b8"
  ink-dark: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  link-blue: "#029cfd"
  brand-coral: "#ff4785"
  surface-yellow: "#fddd9c"
  surface-green: "#c3eeaf"
  surface-zinc: "#52525b"
  hairline: "#3f3f46"
  hairline-light: "#ffffff4d"
  text-input-text: "#27272a"
  text-input-border: "#e4e4e7"
  ds-app-bg: "#f6f9fc"
  ds-mediumdark: "#73828c"
typography:
  display:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 56px
    fontWeight: 700
    lineHeight: 70px
  display-mobile:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 24px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  button-small:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16px
  nav:
    fontFamily: __Nunito_Sans_ee04dc
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 48px
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 32px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 32px
    border: "1px solid #ffffff4d"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  icon-link:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 0px 12px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px 100px 0px 16px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.surface-yellow}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

# Storybook — storybook.js.org

## Overview

Storybook's home page (https://storybook.js.org, title "Storybook: Frontend workshop for UI development") presents the open-source UI workshop on a deep navy canvas. The top of the page glows with a soft aurora — pink at the top left, orange at the top right, fading through blue into navy — behind the header and hero. Everything else stays dark and calm, letting large, light-themed screenshots of the Storybook UI carry the color.

The header holds the pink Storybook logo, Docs, AI, Addons, Showcase, Blog, Visual Test ↗, Enterprise ↗, a GitHub star counter pill ("91,144"), a "Search docs ⌘K" field and a small white **Get Started** pill. The hero is left-aligned: an "Introducing MCP for React" pill, the headline "Build, test & document components" in Nunito Sans 56px bold, a three-line description, a white **Get Started** pill next to an outlined `npm create storybook@latest` copy pill, and stats ("80.58m Installs per month", "2282 Contributors", "Version 10"). A tabbed showcase (Development, Interaction testing, Visual testing, Documentation) frames a full Storybook window with a "Space Helmet X24" product card, followed by a logo row (GitHub, airbnb, mozilla, monday.com, BBC). Feature sections then pair short left-column copy ("Build UI components and pages in isolation", "Mock hard-to-reach edge cases as stories") with screenshots, followed by "Automate UI workflows" with a CI checklist, a "Made for frontend developers" showcase of real design systems (Shopify Polaris, BBC Psammead, Audi UI React, Fluent UI, Gutenberg), community stats, a newsletter field and a footer noting "Maintained by chromatic".

The voice is practical and developer-friendly: "It's open source and free.", "without needing to fuss with data, APIs, or business logic".

## Colors

Measured values come from `web/data/extracted/storybook.json`; design-system values come from Storybook's open-source design system (`src/components/shared/styles.ts` in https://github.com/storybookjs/design-system).

- **Canvas `#0d1026`** — the deep navy page (57% of capture pixels); the `body` element itself computes white (`page-body #ffffff`), covered by the navy sections.
- **Ink `#ffffff`** — headings and most text; **ink dim `#ffffff99`** — inactive tabs; **ink zinc `#a1a1aa`** and **ink slate `#94a3b8`** — secondary copy and captions.
- **Primary `#ffffff`** with **on-primary `#000000`** — the white pill CTAs.
- **Link blue `#029cfd`** — text links ("Why build UIs in isolation? ›", "Publish Storybook ›"); the design system names it **Ocean**, `secondary: '#029CFD'`.
- **Brand coral `#ff4785`** — the design system's `primary: '#FF4785' // Coral`, the pink of the Storybook logo mark.
- **Surface yellow `#fddd9c`** and **surface green `#c3eeaf`** — pastel panels behind feature illustrations; **surface zinc `#52525b`** — dark UI fills.
- **Hairline `#3f3f46`** — section dividers and icon-button borders; **hairline light `#ffffff4d`** — outlined pill borders.
- **Text input** — `#27272a` text on white with a `#e4e4e7` border.
- **Design-system neutrals** — `#f6f9fc` (`background.app`) and `#73828c` (`color.mediumdark`), both also present in the light UI screenshots.

## Typography

The site uses **Nunito Sans**, loaded through Next.js font optimisation under the generated family name `__Nunito_Sans_ee04dc` (variable range 200–1000). The design system's `typography.type.primary` stack is `"Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif` with weights regular 400, bold 700 and extrabold 800, and a size scale of 12, 14, 16, 20, 24, 28, 32, 40 and 48px.

Measured on the home page:
- **Display** — 56px / 70px, 700 (hero and section headlines such as "Develop durable user interfaces").
- **Subheading** — 24px / 32px, 700 ("Build UI components and pages in isolation").
- **Body** — 16px / 28px, 400.
- **Button** — 16px / 24px, 700; small buttons 12px / 16px, 700.
- **Nav** — 14px / 20px, 700.
- Small uppercase labels ("MADE FOR") use 11px with 0.55px tracking or 12px with 1.2px.

Measured sizes by character count: 16px, 14px, 20px, 13px, 56px, 24px, 12px, 11px. Nunito Sans is open-source on Google Fonts; no substitute is needed.

## Layout

At 1280px content spans x = 32 to x = 1248. Measured bands: a 72px `#020617` header, a 226px media hero with the headline, a 327px `#0d1026` band (CTAs and stats), a 673px media band (the tabbed UI showcase), a 3,164px `#0f142e` two-column feature band, then alternating `#0d1026` and media bands down to a 7,354px final band containing the showcase, community and footer. Section heads use a split layout — large headline left, short paragraph right. Gaps cluster at 8px, 6px, 24px, 4px and 20px, with 80px and 96px between blocks; paddings at 8px, 16px, 32px and 20px, with 112px section padding.

## Elevation & Depth

The only frequent shadow is Tailwind's default medium shadow, measured as `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` on screenshot frames and cards. Depth comes mainly from the aurora gradient, from light UI screenshots floating on navy, and from a soft blue glow under the hero showcase. The design system's `hoverEffect` lifts cards 3px with `rgba(0, 0, 0, 0.08) 0 3px 10px 0` and a 50% Ocean border.

## Shapes

CTAs and header pills are full **pills** (9999px, tied with 4px as the most frequent radius). **4px** rounds icon buttons and small elements; **6px** rounds inputs and nav items; **2px** small badges; **8px** and **12px** the pastel feature panels and screenshot frames (one panel measures `0px 8px 8px`, a tab-attached shape). The design system itself defines `borderRadius.small: 5` and `default: 10`.

## Components

- **Primary button** — white pill, black Nunito Sans 16px bold, padding 0px 24px, 48px tall ("Get Started").
- **Small button** — white pill, 12px bold, padding 0px 12px, 32px tall (header Get Started).
- **Outlined pill** — transparent, white 12px bold text, 1px `#ffffff4d` border, 32px tall (GitHub stars, "Search docs ⌘K", "npm create storybook@latest"); hover turns the border solid white.
- **Nav link** — white 14px bold, 6px radius, padding 0px 12px; hover fill `rgba(255, 255, 255, 0.1)`.
- **Showcase tabs** — `#ffffff99` labels that turn white on hover, the active tab underlined.
- **Text link** — `#029cfd` with a chevron.
- **Email input** — white, `#27272a` text, 1px `#e4e4e7` border, 6px radius, 48px tall with a blue Subscribe button inside.
- **Logo tiles** — solid brand-colored tiles in the showcase row.

## Design System Architecture

Storybook maintains an open-source design system at https://github.com/storybookjs/design-system ("Storybook Design System", published Storybook at https://master--5ccbc373887ca40020446347.chromatic.com/). Its `src/components/shared/styles.ts` exports `background`, `color`, `spacing`, `typography` and `breakpoint` objects: a palette (Coral `#FF4785`, Ocean `#029CFD`, orange `#FC521F`, gold `#FFAE00`, green `#66BF3C`, seafoam `#37D5D3`, purple `#6F2CAC`, ultraviolet `#2A0481`), monochrome steps from `#FFFFFF` to `#2E3438`, status colors, padding 10/20/30px, radii 5/10px and a 600px breakpoint, built with `@storybook/theming` and `polished`. The live marketing site is a Next.js build whose root variables are Tailwind (`--tw-*`, ring color `rgba(2,156,253,.5)` — Ocean at 50%) and DocSearch (`--docsearch-*`); its navy page colors are not in the design-system file.

## Do's and Don'ts

**Do**
- Keep the page navy `#0d1026` with white Nunito Sans text.
- Use white pill buttons with black bold labels as the main action.
- Use Ocean `#029cfd` for text links and focus rings.
- Reserve Coral `#ff4785` for the logo mark and brand moments.
- Show the product with large, light-themed UI screenshots on the dark canvas.

**Don't**
- Don't use colored fills for primary CTAs; they are white pills.
- Don't introduce heavy shadows; depth comes from the aurora and screenshots.
- Don't set headlines lighter than 700.
- Don't treat the showcased customer logos' colors as Storybook colors.

## Responsive Behavior

The 390px mobile pass recorded the hero and section headlines at 36px / 40px (down from 56px / 70px), body text unchanged at 16px / 28px, a 40px `#020617` header band with one visible header link and no menu toggle detected, and a maximum of 2 card columns. Mobile content spans x = 16 to x = 374. Mobile font sizes by frequency: 16px, 14px, 20px, 13px, 36px, 24px, 12px. The stylesheet declares breakpoints at max-width 768px and 440px and min-width 640px, 768px and 1024px, among others. Other reflow behavior was not measured.

## Iteration Guide

1. Start with a `#0d1026` canvas and a pink-orange-blue aurora behind the header.
2. Set a left-aligned Nunito Sans 56px / 70px bold headline in white with a 16px / 28px description.
3. Add a white 48px pill CTA beside an outlined pill showing an install command.
4. Use split section heads and large light UI screenshots; link with `#029cfd` and a chevron.
5. Use pastel `#fddd9c` / `#c3eeaf` panels sparingly behind illustrations.
6. Check additions against the design system's `styles.ts` or measure them first.
