---
version: alpha
name: British Gas
category: "Design Systems"
description: "British Gas's Nucleus-driven marketing site — a bright blue energy-and-services brand using the proprietary British Gas typeface in three cuts (Subhead, Medium, Body), a #004ecc action blue on white with #002f87 navy panels, #111518 slate ink, square 0px primary buttons 52px tall, 4px inputs 51px tall, 8px cards and rounded red sale pills."
colors:
  canvas: "#ffffff"
  ink: "#111518"
  primary: "#004ecc"
  on-primary: "#ffffff"
  navy: "#002f87"
  surface-light: "#f3f5f7"
  ink-sky: "#99d6ff"
  forest: "#00a33e"
  sky: "#47b6ff"
  mist: "#ebf7ff"
  alert-red: "#d50032"
  cyan: "#0093F5"
  lime: "#7FCC00"
  yellow: "#FFC72C"
  grey-dark: "#435460"
  grey-medium: "#C3CED5"
typography:
  display:
    fontFamily: "\"British Gas Subhead\", sans-serif"
    fontSize: 46.144px
    fontWeight: 400
    lineHeight: 55.3728px
    letterSpacing: "-0.669088px"
  display-mobile:
    fontFamily: "\"British Gas Subhead\", sans-serif"
    fontSize: 32.896px
    fontWeight: 400
    lineHeight: 39.4752px
    letterSpacing: "-0.476992px"
  heading:
    fontFamily: "\"British Gas Medium\", sans-serif"
    fontSize: 36.496px
    fontWeight: 400
    lineHeight: 43.7952px
    letterSpacing: "-0.529192px"
  subheading:
    fontFamily: "\"British Gas Medium\", sans-serif"
    fontSize: 25.632px
    fontWeight: 400
    lineHeight: 30.7584px
    letterSpacing: "-0.371664px"
  body:
    fontFamily: "\"British Gas Body\", sans-serif"
    fontSize: 14.224px
    fontWeight: 400
    lineHeight: 21.336px
    letterSpacing: "-0.184912px"
  button:
    fontFamily: "\"British Gas Medium\", sans-serif"
    fontSize: 17.072px
    fontWeight: 400
    lineHeight: 25.608px
  link:
    fontFamily: "\"British Gas Medium\", sans-serif"
    fontSize: 22.784px
    fontWeight: 400
    lineHeight: 34.176px
    letterSpacing: "-0.296192px"
  input:
    fontFamily: "\"British Gas Body\", sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 32px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s8: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 52px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 51px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
---

## Overview

The capture of britishgas.com is a confident, friendly, saturated-blue retail page. It stacks, from the top: a thin grey utility bar (Offers, Business, Search, Accessibility toolbar, plus "Moved home recently? Don't forget to tell us." with an "Update details" button), a white header with the British Gas wordmark and a text nav (Energy, Cover, Servicing, Repairs, Products, Help, Account), a full-width red promotional strip ("Hurry, get 25% off HomeCare. Offer ends 15/10." with a "Save now" button), and a hero on a mid-blue gradient with a large white headline, "Energy prices that can only go down". The hero has a yellow "Fix for peace of mind" tag, two lines of white supporting copy, a postcode field and a dark-blue arrow button reading "Get a quote today". On the right is an illustration of furry blue characters playing on a slide.

Below the hero a navy panel (#002f87) with rounded corners holds two white cards, each with a photograph, a red "Sale ends" pill, a navy headline, a short paragraph and a blue arrow button. Further down, a centred navy headline "We're here to keep things warm and working" introduces four outlined tiles with flat coloured icons (tariffs, boiler service, boiler cover, repairs), then a pale-blue (#ebf7ff) "Why choose us?" band with icon-and-text pairs.

Overall voice is plain-spoken and reassuring, built on short imperative CTAs ("Get covered", "Get your new boiler", "Save now"), concrete numbers (25%, £300, 9 million customers) and date-stamped urgency. The composition is airy, with large radii on containers but square corners on actions.

## Colors

The palette is documented in the Nucleus token guidelines (https://britishgas.design/guidelines/tokens), which I opened. Tokens there are grouped as Primary (Cyan #0093F5, Lime #7FCC00, Navy #002F87), Secondary (Blue #004ECC, Forest #00A33E, Orange #FF5900, Red #D50032, Slate #111518, Yellow #FFC72C), Greyscale (Dark #435460, Light #F3F5F7, Medium #C3CED5, White #FFFFFF) and System colours (Attention, Danger, Focus, Information, Neutral, Success, Warning).

What the capture actually uses:

- **Primary #004ecc** (the documented Secondary Blue) is the fill of every CTA, which makes the action colour distinct from the larger navy and sky areas. On-primary is #ffffff.
- **Ink #111518** (documented Slate) is the body text colour; **navy #002f87** is used for headings on white, for the wide dark panel and for the page-wide dark band.
- **Surface-light #f3f5f7** is the quiet grey background; **mist #ebf7ff** the pale blue band; **sky #47b6ff** is the lighter end of the hero blue; **ink-sky #99d6ff** is text on navy.
- **Forest #00a33e** is a measured large background area (its exact use is not itemised here) and **alert-red #d50032** fills the promo strip and the "Sale ends" pills.
- **Cyan, lime, yellow, grey-dark and grey-medium** are carried from the token guideline. Yellow is visible on the "Fix for peace of mind" tag; the others are brand-defined but I did not see them prominently in the capture.

The Nucleus site stresses that "system colours always carry specific meanings" and must not be the only way to convey information, and that features must conform to WCAG 2.1 AA (https://britishgas.design/guidelines/tokens and https://britishgas.design/guidelines/principles).

## Typography

British Gas uses its own typeface, described by the docs as "unique to British Gas... clear, legible and elegant", with a sans-serif fallback so the operating system supplies a substitute (https://britishgas.design/guidelines/typography). The docs describe two weights, Medium and Body; the live page loads three font-face names: British Gas Subhead, British Gas Medium and British Gas Body, each at weight 400. Headings use Subhead or Medium, body copy and inputs use Body, and buttons and links use Medium.

| Role | Face | Size / line | Tracking |
|---|---|---|---|
| display (hero h1) | Subhead | 46.144px / 55.3728px | -0.669088px |
| display-mobile | Subhead | 32.896px / 39.4752px | -0.476992px |
| heading | Medium | 36.496px / 43.7952px | -0.529192px |
| subheading | Medium | 25.632px / 30.7584px | -0.371664px |
| link | Medium | 22.784px / 34.176px | -0.296192px |
| button | Medium | 17.072px / 25.608px | none |
| input | Body | 17px / 25.5px | none |
| body | Body | 14.224px / 21.336px | -0.184912px |

The fractional pixel values come from fluid, viewport-scaled sizes; Nucleus names its viewport sizes (default, "basketball-court" and "rugby-pitch") in the typography tokens. Headline line-height is 1.2 and body is 1.5, and the tracking is tightened by about -1.45% of the font size on headings. The docs separate semantics from style: heading levels follow a strict H1 to H6 order, one H1 per page, and styles are chosen independently using Nucleus class names.

**Font substitutes.** The faces are proprietary. A friendly geometric sans such as Inter or a humanist sans such as Source Sans would be a reasonable stand-in for British Gas Body and Medium; the documented fallback is simply generic sans-serif.

## Layout

The page uses a left-aligned content column inside generous side gutters with centred section introductions. Hero copy sits left in a narrow measure while the illustration occupies the right side. Card groups are two-up inside the navy panel and four-up for the service tiles, with consistent gaps. Vertical rhythm is large, with generous white space between sections. The docs token sheet defines spacers of 4, 8, 12, 16, 20, 24, 28, 32, 36, 40, 48 and 64px (plus 144px) expressed in rem, and theme spacers SM 0.5rem, MD 1rem, LG 1.5rem and XL 2rem (https://britishgas.design/guidelines/tokens). Measured gaps and paddings on the live page of 4px, 8px, 12px and 16px come straight from that scale.

## Elevation & Depth

Depth is created by colour and containment rather than shadow. A navy rounded panel (#002f87) frames white cards, which makes them feel lifted without a drop shadow; the hero uses overlapping translucent blue curves behind the headline; service tiles are outlined with a blue keyline on white rather than elevated. The hero is a blue field with lighter curved shapes, and #47b6ff is measured as a large background area. I did not audit shadows in the stylesheet; the documented Focus colour is #002F87.

## Shapes

Shape is a deliberate contrast between containers and actions. Primary action buttons measured at 0px radius (square), though some secondary CTA variants measured at 4px; inputs and links at 4px (xs); cards and the offer panel at 8px (sm) to 16px (md) with the larger panel corners reading as 16px; the "Sale ends" and "Save 25%" pills are fully rounded. The Nucleus token list gives border radii as Small 0.125rem, Medium 0.25rem, Large 0.5rem and Huge 1rem, which match the 4px, 8px and 16px values here, and border widths from 0.0625rem (tiny) to 1rem. 32px (lg) appears on a few large containers. Icons are flat, multi-colour illustrations rather than glyphs.

## Components

**CTA button.** Fill #004ecc, white label in British Gas Medium 17.072px, 52px tall, 0px radius on the hero and the promo cards, with a right-pointing arrow icon beside the label. Nucleus defines this as the `ns-cta` component: "Users can perform particular actions through the use of the ns-cta component"; the `direct` type is "for the main action in the page" and "should be used sparingly", while a `text` type is recommended for supporting actions that begin "Learn more", "Find out", "See our" or "Discover" (https://britishgas.design/components/ns-cta).

**Text input.** The postcode field is white with #ffffff background, #111518 text in British Gas Body 17px, 4px radius, 51px tall and padding of 8px 16px, set beside the CTA at the same height.

**Card.** White, 8px radius, image on top, red pill label, navy heading, body copy and a CTA at the bottom, placed on the navy panel.

**Pill.** Red (#d50032) with white text for sale flags; a yellow pill for the "Fix" tag.

**Tile.** White outlined tile with an icon above a navy medium-weight label.

**Banner strip.** Full-width #d50032 bar with white copy and a white-outlined small blue button.

**Link.** Medium-weight in #004ecc with 4px radius for the focus outline.

Nucleus's component catalogue includes ns-accordion, ns-alert, ns-card, ns-cta, ns-footer, ns-header, ns-inputter, ns-pill, ns-price, ns-tabs, ns-table and many more, with page types and patterns on top (https://britishgas.design/components/ns-accordion lists them).

## Design System Architecture

Nucleus is "the Design System of British Gas", created "to help provide cohesive and coherent web experiences" (https://britishgas.design/introduction/). The docs state it is built from foundations (typographic styles, colours, scale, visual assets) that form components, which in turn form patterns. The public docs, built with Astro, are organised as Components, Guidelines (principles, accessibility, tokens, assets, typography, vanilla first, contributing, process), Patterns and Page types; the docs link to a GitHub repository for the docs source (https://github.com/centrica-engineering/nucleus-docs), which I did not open.

Key architectural facts I confirmed:

- Components are custom elements with the `ns-` prefix, with variants (`nsx-` and `nss-` prefixes also appear in the catalogue); the docs render them via Lit.
- Tokens are named in SCREAMING_SNAKE_CASE (COLOR_PRIMARY_NAVY, THEME_BORDER_RADIUS_LARGE, THEME_SPACER_MD, SIZE_16PX), split into a system layer and a theme layer, which is what allows rebranding; the blog post list includes "A coat of fresh paint: how we replaced an entire visual identity with the design system" (14 March 2024).
- A "vanilla first" principle says components should solve a problem with the simplest native-HTML-based solution before brand styling is applied.
- Accessibility is a hard principle: WCAG 2.1 Level AA at minimum.

Tooling note: component demos on the docs site render inside shadow DOM, so the token extractor measured the documentation chrome rather than the components; component values here therefore come from the live britishgas.com measurement plus the written tokens, not from the component demo pages.

## Do's and Don'ts

Do
- Use #004ecc for the single main action per view and keep the label in British Gas Medium.
- Pair a navy (#002f87) panel with white cards for offers.
- Keep action buttons square (0px) and inputs at 4px, with the same 51 to 52px height when adjacent.
- State offers with concrete numbers and an end date.
- Keep heading semantics sequential, independent of visual style.

Don't
- Don't use red (#d50032) or other system colours for decoration; they signal meaning.
- Don't put more than one emphasised CTA in a group; use text CTAs for supporting actions.
- Don't rely on colour alone to convey state.
- Don't introduce rounded buttons into a context of square ones.
- Don't use a non-brand typeface in headings when the British Gas face is available.

## Responsive Behavior

The mobile measurement at 390px reduces the h1 from 46.144px to 32.896px (line 39.4752px), keeping Subhead and tight tracking. The docs name three viewport tiers (default, basketball-court, rugby-pitch) and the guidelines include a "devices" page, so size scaling is token-driven. I did not measure the phone layout beyond type sizes, so how the card panel and tiles stack is not documented here.

## Iteration Guide

1. Set tokens first: canvas #ffffff, ink #111518, primary #004ecc, navy #002f87.
2. Build the hero: Subhead 46px headline in white on a blue gradient, a 51px input beside a 52px CTA.
3. Add the offer panel: navy container with 8px-radius white cards, red pills, and one CTA each.
4. Add the service tiles and a mist (#ebf7ff) reassurance band.
5. Check AA contrast for white on #004ecc and for #99d6ff on navy.
6. Keep radii inside the 0, 4, 8, 16 ladder, and re-run `node web/scripts/verify-designs.mjs --slug=british-gas` after edits.
