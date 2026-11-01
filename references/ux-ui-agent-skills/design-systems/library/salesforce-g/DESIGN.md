---
version: alpha
name: Salesforce
category: "Product & SaaS"
description: "Salesforce's home page (measured on the Thai locale salesforce.com/th/) pairs ITC Avant Garde 70px/400 headlines in navy #002c6e with Salesforce Sans 16px body in #181818, a #0176d3 4px-radius 'start free' button (hover #0b5cab), #066afe pill buttons, and translucent 32px-radius product cards on deep #032e61 bands."
colors:
  canvas: "#ffffff"
  ink: "#181818"
  primary: "#0176d3"
  on-primary: "#ffffff"
  primary-hover: "#0b5cab"
  accent: "#066afe"
  ink-headline: "#002c6e"
  ink-electric: "#022ac0"
  ink-sky: "#00a1e0"
  ink-navy: "#001e5b"
  ink-teal-dark: "#023248"
  ink-brand-dark: "#032d60"
  surface-navy: "#032e61"
  surface-black: "#000000"
  surface-pale-blue: "#eaf5fe"
  hairline: "#ffffff1a"
  card-bg: "#ffffff0d"
  slack-violet: "#7526e3"
  tableau-orange: "#d83a00"
typography:
  display:
    fontFamily: "\"ITC Avant Garde\", sans-serif"
    fontSize: 70px
    fontWeight: 400
    lineHeight: 70px
  display-mobile:
    fontFamily: "\"ITC Avant Garde\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
  heading:
    fontFamily: "\"ITC Avant Garde\", sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  subheading:
    fontFamily: "\"ITC Avant Garde\", sans-serif, arial"
    fontSize: 25px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.06px"
  card-title:
    fontFamily: "\"ITC Avant Garde\", sans-serif, arial"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.06px"
  body:
    fontFamily: >-
      "Salesforce Sans", system-ui, -apple-system, blinkmacsystemfont, "Segoe UI", roboto, "Helvetica Neue", arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
      "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.0192px"
  button:
    fontFamily: "\"Salesforce Sans\", sans-serif, arial"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: 0.02px
rounded:
  xs: 4px
  sm: 6px
  md: 12px
  lg: 16px
  xl: 22px
  2xl: 32px
  3xl: 100px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 19.2px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 20px 32px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 20px 32px
    borderColor: "{colors.primary}"
  button-outline-hover:
    backgroundColor: "{colors.surface-pale-blue}"
  button-pill:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 32px
    height: 52px
  nav:
    backgroundColor: "{colors.canvas}"
  product-card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.card-title}"
    rounded: "{rounded.2xl}"
    padding: 19.2px
    border: "2px solid #ffffff1a"
  product-card-hover-slack:
    backgroundColor: "{colors.slack-violet}"
  product-card-hover-tableau:
    backgroundColor: "{colors.tableau-orange}"
  product-card-hover-agentforce:
    backgroundColor: "{colors.ink-electric}"
---

## Overview

Salesforce's home page is a long, bright product story told in friendly, rounded shapes. The extractor requested salesforce.com and was redirected by location to the Thai locale (`salesforce.com/th/?ir=1`, title "Salesforce: CRM แบบ AI อันดับ 1 | Salesforce TH"), so all copy measured here is Thai; the layout, colors, fonts and components are the global site's system rendered in that language.

The desktop capture opens with a white header (the blue cloud logo, top-level menu, a blue "start free" button), then a sky-blue hero with an enormous navy headline — "เริ่มต้นใช้งาน Agentic CRM อันดับ 1 ได้เลย" (Get started with the #1 Agentic CRM) — whose second line switches to an electric blue. Small sparkle illustrations sit beside it. A deep navy band follows ("Welcome to the Agentic Enterprise"), holding four translucent product cards for Slack, Tableau, Agentforce and Customer 360, then a carousel of customer portraits. The middle of the page alternates white sections and video embeds: an Agentforce explainer, a stacked "product boxes" illustration of the platform, a grid of violet-to-blue industry cards (financial services, retail, health, manufacturing, education, public sector, technology, communications), Agentblazer badges, event photos, a free-trial call-out and an FAQ accordion. A dark-navy footer closes the page.

The tone is upbeat and benefit-led, built around "Agentic" vocabulary and "#1" claims, with short paragraphs and verb-first buttons ("start free", "watch the demo", "see all products"). The capture also shows an open Agentforce chat bubble in the hero; it is a chat widget and is not documented as UI.

## Colors

- **Canvas `#ffffff`** — the body and most section backgrounds.
- **Ink `#181818`** — the body paragraph color.
- **Headline navy `#002c6e`** — the hero headline; **electric blue `#022ac0`** — the second, emphasised hero line and the Agentforce card hover; **sky `#00a1e0`** — the subheading under the navy band.
- **Primary `#0176d3`** — the header "start free" button and the brand default (`--hgf-g-brand-default-color`, `--hgf-g-blue-vibrant-50`). Hover measured `#0b5cab` (`--hgf-g-blue-vibrant-40`).
- **Accent `#066afe`** — the fill of the many pill buttons in content sections.
- **Navy surfaces** — `#032e61` (the Agentic Enterprise band), with related deep text blues `#001e5b`, `#023248` and `#032d60` (`--hgf-g-blue-vibrant-20`) used for headings on light sections.
- **Black `#000000`** — video player backgrounds.
- **Pale blue `#eaf5fe`** — the outline button's hover fill.
- **Translucent white** — `#ffffff0d` card fill and `#ffffff1a` card border on dark bands.
- **Product hover colors** — product cards fill on hover with their product's color: Slack `#7526e3`, Tableau `#d83a00`, Agentforce `#022ac0`, Customer 360 `#0176d3`.

The shipped CSS also declares semantic error and success ramps (`--sds-g-color-error-base-2 #fef1ee`, `--sds-g-color-success-base-contrast-2 #22683e`), which were not seen rendered on this page.

## Typography

Two brand families split the work. **ITC Avant Garde** (loaded at 400 and 500, plus "Avant Garde for Salesforce" at 600) sets headlines; **Salesforce Sans** (400 and 700) sets body, buttons and UI. Thai glyphs in this locale render in **Handset Sans Thai Bold**, which accounts for about 1,200 of the measured characters.

| Role | Family | Size / line-height | Weight | Letter-spacing |
|---|---|---|---|---|
| Display (hero h1) | ITC Avant Garde | 70px / 70px | 400 | normal |
| Display, 390px mobile | ITC Avant Garde | 36px / 40px | 400 | normal |
| Heading (band h2) | ITC Avant Garde | 60px / 60px | 400 | normal |
| Subheading | ITC Avant Garde | 25px / 32px | 400 | -0.06px |
| Card title | ITC Avant Garde | 24px / 32px | 400 | -0.06px |
| Body | Salesforce Sans | 16px / 24px | 400 | -0.0192px |
| Button | Salesforce Sans | 16px / 24px | 700 | 0.02px |

Headlines are large but never bold — Avant Garde at 400 with tight line-height (1.0 on the display and heading). The measured weight distribution is 400 for most text and 700 for buttons and run-in labels. Small negative tracking is applied across sizes (for example 18px at -0.0216px and 32px at -0.128px), proportional to size.

**Substitutes:** Salesforce Sans and ITC Avant Garde are licensed. The site's own fallback for body is `system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial`; a geometric sans with round "o" and "a" forms is the visual match for Avant Garde headlines.

## Layout

The desktop hero content spans from x=120 to x=1160 in a 1280px viewport, a single column of text with illustration on the side. Sections are full-width bands with centred content; the extractor measured up to six card columns (the customer carousel) and the capture shows four-up product cards, three-up industry cards, three-up badges and three-up event cards. Measured gaps are led by 32px and 16px; paddings by 32px, 16px, 12px, 10px, 20px and 64px. Sections are separated by generous vertical space and by color changes between white, sky blue, navy and black.

Several sections use curved edges: radii of `0px 0px 32px 32px` and `16px 16px 0px 0px` were measured six times each, rounding the bottom of a band or the top of a panel.

## Elevation & Depth

Depth comes from layered soft shadows on white cards: the most frequent is a double shadow `rgba(23, 23, 23, 0.08) 0px 2px 8px -2px, rgba(23, 23, 23, 0.16) 0px 8px 12px -2px` (17 elements). A side shadow `rgba(23, 23, 23, 0.09) -3px 0px 24px 0px` and a pair `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` also appear. On dark bands, cards use no shadow; they lift through a 5% white fill and a 10% white border instead.

## Shapes

The radius palette is wide and soft: 16px (most frequent), 4px, 9999px (pills), 22px, 50% (avatars and round controls), 32px (product cards), 12px, 6px and 100px. Two button shapes coexist — the header and hero buttons are near-square at 4px, while content-section buttons are full pills — and outline buttons sit between at 6px. Cards are always rounded at 16px or more.

## Components

- **Primary button** — `#0176d3`, white Salesforce Sans 16px/700, 20px 32px padding, 52px tall, 4px radius; hover `#0b5cab`.
- **Outline button** — white fill, `#0176d3` text and 1px border, 6px radius, same padding; hover fill `#eaf5fe`.
- **Pill button** — `#066afe`, white 16px/700, 14px 32px padding, 52px tall, 9999px radius; the default call to action inside content sections.
- **Product card (dark band)** — `#ffffff0d` fill, `2px solid #ffffff1a` border, 32px radius, 19.2px padding, Avant Garde 24px title; on hover it fills with the product's own color.
- **Industry card** — violet-to-blue gradient tiles with white text and a small product icon (from the capture; gradient values were not measured).
- **Customer carousel** — portrait photographs with name and role beneath, round arrow controls.
- **FAQ accordion** — full-width rows separated by thin rules with a chevron at the right (capture).
- **Footer** — dark navy with columns of links and social icons (capture).

## Design System Architecture

No public design-system page was opened for this document: the Salesforce GitHub organisation (https://github.com/salesforce) lists ML, NLP and security projects as pinned repositories and only an undocumented `SLDSIcons-Android` repository suggests a design-system link. The de-facto system is visible in the shipped CSS, where 400 root custom properties are split across several namespaced layers: `--sds-g-*` (145 measured — color palettes such as `--sds-g-color-palette-cloud-blue-40`, semantic brand/error/success ramps, `--sds-g-radius-border-1/2/3` at .125rem/.25rem/.5rem, `--sds-g-spacing-*`, and `--sds-g-font-family-sans` with Salesforce Sans first), `--wes-g-*` (122 — a parallel palette and semantic layer), `--pbc-g-*` (77 — page-builder text sizes such as `--pbc-g-text-body-1-2-fontSize: 18px`), `--hgf-g-*` (17 — header/global brand blues such as `--hgf-g-brand-default-color: #0176d3`) and component-level `--sds-c-button-*` variables. The naming pattern — namespace, `g` for global or `c` for component, then category and step — is the system's architecture.

## Do's and Don'ts

**Do**
- Set headlines in ITC Avant Garde at 400 with line-height equal to size; set body in Salesforce Sans 16px/24px.
- Use `#0176d3` for the single header CTA and `#066afe` pills inside content.
- Alternate white sections with sky-blue and navy `#032e61` bands, and round band edges at 32px.
- Put product cards on dark bands with a 5% white fill and 10% white border; reveal the product color on hover.
- Keep copy benefit-led and short, with verb-first buttons.

**Don't**
- Don't bold the Avant Garde headlines; 700 is reserved for Salesforce Sans buttons and labels.
- Don't mix the 4px and pill button shapes in the same group.
- Don't use hard, dark shadows; measured shadows stay at 0.08–0.16 alpha.
- Don't document the Agentforce chat bubble as page UI.
- Don't use the product hover colors (violet, orange) as general accents.

## Responsive Behavior

Measured at 390px: the hero h1 drops from 70px to 36px/40px in ITC Avant Garde 400, and the navy-band heading also renders at 36px; body text stays 16px in Salesforce Sans and the primary button keeps its `#0176d3` fill, 20px 32px padding and 52px height. The mobile hero band spans x=16 to x=374, giving 16px side margins. The extractor recorded no visible header links and no visible menu toggle at 390px, and the same six-column maximum for card rows (the carousel). The stylesheet's main breakpoints are `min-width 768px`, `min-width 1024px` and `min-width 1440px` (with matching `max-width 767px`, `1023px`, `1439px`), plus `min-width 1280px`. How the multi-column grids reflow at each breakpoint was not measured.

## Iteration Guide

1. Start with white canvas, `#181818` body text in Salesforce Sans 16px/24px, and ITC Avant Garde 400 headlines in `#002c6e`.
2. Hero: 70px/70px headline (36px/40px at 390px), second line in `#022ac0`, one `#0176d3` 4px-radius button.
3. Content sections: `#066afe` pill buttons, white cards with the double soft shadow and 16px radius.
4. Dark bands in `#032e61` with translucent 32px-radius product cards.
5. Curve band edges with `0px 0px 32px 32px` or `16px 16px 0px 0px`.
6. Pull any new color from the `--sds-g-color-*` or `--hgf-g-*` ramps in the live CSS rather than inventing one.
7. Re-measure from a US location to confirm the English page before using English copy lengths for layout.
