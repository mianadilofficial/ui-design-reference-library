---
version: alpha
name: Paddle
category: "Fintech & Crypto"
description: "Paddle's site is a warm off-white #f9f8f7 and sand #ebe7df page with near-black #1c1a15 ink, a condensed serif (serrifCondensed, 400) for 64px headlines over Inter body text, 10px-radius dark buttons, 24px-rounded white story cards and a signature yellow #ffd400 used for one call-to-action panel and small icon chips."
colors:
  canvas: "#f9f8f7"
  ink: "#1c1a15"
  primary: "#1c1a15"
  on-primary: "#fcfcfc"
  surface-sand: "#ebe7df"
  surface-card: "#fcfcfc"
  button-secondary-bg: "#e4e1d1"
  announcement: "#d6cbb6"
  yellow: "#ffd400"
  primary-black: "#0e1414"
  ink-subtle: "#1c1a15cc"
  hairline: "#d9d3c9"
typography:
  display:
    fontFamily: serrifCondensed, "serrifCondensed Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-0.64px"
  display-mobile:
    fontFamily: serrifCondensed, "serrifCondensed Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-0.56px"
  heading:
    fontFamily: serrifCondensed, "serrifCondensed Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
    letterSpacing: "-0.48px"
  subheading:
    fontFamily: serrifCondensed, "serrifCondensed Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.4px"
  card-title:
    fontFamily: serrifCondensed, "serrifCondensed Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  body:
    fontFamily: Inter, "Inter Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.4px"
  button:
    fontFamily: Inter, "Inter Fallback", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    letterSpacing: "-0.4px"
rounded:
  xs: 3px
  sm: 4px
  md: 6.4px
  lg: 10px
  xl: 16px
  2xl: 18px
  3xl: 24px
  4xl: 100px
spacing:
  s1: 2px
  s2: 3.52px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 20px
    height: 52px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    height: 52px
  button-light:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 16px 20px
    height: 52px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 8px 0px
  story-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.3xl}"
    padding: 40px
  feature-panel:
    backgroundColor: "{colors.surface-sand}"
    shadow: "rgba(0, 0, 0, 0.32) 0px 32px 32px 0px, rgba(251, 250, 249, 0.1) 0px 0px 0px 2px inset"
  cta-panel:
    backgroundColor: "{colors.yellow}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface-sand}"
---

# Paddle

## Overview

Paddle (https://www.paddle.com/) is a merchant of record for software, SaaS and app businesses; the page title is "Paddle - Subscriptions, Payments & Tax Compliance for SaaS & Mobile Apps". Its site looks more like a financial publication than a typical SaaS landing page: warm paper tones, a condensed serif for headlines, near-black ink, and one strong yellow.

The capture opens with a thin sand-coloured announcement bar (#d6cbb6) carrying a yellow "LAUNCH" chip and the text "Join the Paddle AI Toolkit launch event…". The header holds the lowercase "paddle" wordmark on the left and a menu toggle on the right; at 1,280px the extraction recorded only one visible header link and a "Toggle navigation" button. The hero is centred on #f9f8f7: "Sell globally. / Grow without the complexity." set at 64px in a condensed serif, a short Inter paragraph ("As the Merchant of Record for digital product businesses, Paddle manages payments, tax, compliance, and billing across 300+ markets."), and a pair of buttons: dark "Book a demo" with a small yellow arrow chip, and a sand "Get started". A row of customer logos (HUBX, MacPaw, Runna, GeoGuessr) follows.

Next is "Merchant of Record platform" and a large sand #ebe7df "Billing" panel with dashboard and phone checkout screenshots and a "Discover Billing" button; this panel carries the page's one deep drop shadow. The capture then shows a tall empty stretch of canvas where a scroll-driven section did not render in the static capture. Below it: "Built for growth. Proven at scale." with a bento of white customer-story cards (Renderforest, Kaleido/remove.bg, MacPaw) showing big serif metrics ("3x", "60%", "20%", "200%") with small uppercase monospace captions ("ARR GROWTH", "MOM CUSTOMER GROWTH"); three headline stats ("190 million", "$130 million", "10,000+"); a logo strip; an "OUR MODEL / Not just another payments platform" section with six icon features; a full-width yellow #ffd400 panel ("Reach every market. Capture every opportunity."); a dark three-column "Explore Paddle / Pricing / Get started" block; and a dense dark footer.

The tone is calm, credible and businesslike, with a lot of proof (metrics, customer names) and few adjectives.

## Colors

Paddle's CSS names its colours in a primary set and a warm neutral ramp. The rendered tokens:

- **canvas #f9f8f7** — the page background (largest measured area).
- **ink #1c1a15** — `--color-neutral-dark-950`, the theme's heading and body colour (`--th-color-heading`, `--th-color-body`). Also the fill of dark buttons, the dark lower section and the footer.
- **primary #1c1a15** — the "Book a demo" button fill. Paddle's main action is near-black, not yellow.
- **on-primary #fcfcfc** — `--color-primary-white`; text on dark buttons.
- **surface-sand #ebe7df** — `--color-neutral-light-200`; the large "Built for growth" band and the Billing panel; also the footer text colour on dark (1,091 measured characters).
- **surface-card #fcfcfc** — white story cards and the light "See all customer stories" button.
- **button-secondary-bg #e4e1d1** — the sand fill of "Get started" and "What is a Merchant of Record?".
- **announcement #d6cbb6** — the top bar.
- **yellow #ffd400** — `--color-primary-yellow`; the full-width CTA panel, the "LAUNCH" chip, the small arrow chips inside dark buttons, and the icon tiles in the Explore/Pricing/Get started columns. The theme also maps `--th-color-link` to yellow.
- **primary-black #0e1414** — `--color-primary-black`; a cooler black measured on a small amount of text.
- **ink-subtle #1c1a15cc** — 80% ink (`--th-color-body-subtle` points to `--black-alpha-80`).
- **hairline #d9d3c9** — the measured border colour.

The neutral ramp also defines `--color-neutral-light-100: #f5f2ed`, `--color-neutral-dark-900: #33312c` and `--color-neutral-dark-50: #7e765d`, and the extended palette has reds, greens, teals, blues, pinks, purples and golds (for example `--color-extended-blue-400: #4b80ff`, `--color-extended-pink-400: #ffa8f5`). None of those rendered on the home page.

## Typography

Two families are loaded: **serrifCondensed** (weights 400 and 500), Paddle's condensed serif, for headlines, and **Inter** (variable, 100–900) for body and UI. Monospace (`monospace`, `ui-monospace`) appears in the small uppercase metric captions. serrifCondensed is a custom face without public licensing information; a condensed transitional serif at regular weight is the closest substitute, while Inter is open source.

- **display** — serrifCondensed 64px / 64px, weight 400, letter-spacing -0.64px (-0.01em).
- **display-mobile** — 56px / 56px, -0.56px.
- **heading** — 48px / 57.6px, -0.48px ("Merchant of Record platform", "Billing").
- **subheading** — 40px / 48px, -0.4px ("Built for growth. Proven at scale.", the Renderforest story title).
- **card-title** — 24px / 28.8px, weight 400 (the smaller story cards).
- **body** — Inter 20px / 30px, weight 400, -0.4px.
- **button** — Inter 16px, weight 500, -0.4px.

Inter text uses -0.4px tracking at 14px, 16px and 20px; the uppercase captions use positive tracking (14px with 0.42px, 10.5px with 0.63px). Headlines are always weight 400; the serif's condensed shape gives them presence without bold.

## Layout

The desktop capture is 1,280px wide and 6,342px tall. The main content spans x 40 to x 1240 (a 40px page gutter; the CSS declares `--grid-page-gutter-m: 40px` and `--grid-page-gutter-l: 96px`). The hero is centred; most later sections are left-aligned editorial layouts.

The story bento uses one large card (569px tall) beside two stacked smaller cards (284px each). Stats sit in a three-column row; the "Our model" section pairs a text column on the left with a 2 × 3 icon grid on the right; the dark block below is three equal columns separated by thin vertical rules. The footer has six link columns (Products, Solutions, Resources, Support, Company, Compare).

Spacing tokens: 2px, 3.52px, 4px, 6px, 8px, 12px, 15px, 16px, 20px and 24px. The dominant gaps are 40px, 16px and 8px (40 uses each), then 24px. Paddings include 12px, 16px, 20px, 40px (inside story cards), 64px and 128px (section padding).

## Elevation & Depth

Most of the page is flat. The single measured shadow is `rgba(0, 0, 0, 0.32) 0px 32px 32px 0px` combined with a 2px inset highlight `rgba(251, 250, 249, 0.1)`, applied to the large Billing feature panel (three elements). It produces a deep, soft shadow that lifts the product panel off the canvas. Story cards, buttons and the yellow panel have no shadow; they separate from the background by colour (white on sand, yellow on off-white).

## Shapes

Radii are modest. The measured set is 3px, 4px, 6.4px, 10px, 16px, 18px, 24px and 100px. Buttons use 10px (the CSS names this `--radii-brand: .625rem`). Story cards use 24px. 16px is the most frequent (16 elements). Asymmetric 18px 0px / 0px 18px radii appear on paired elements in the story bento, where two cards meet with a notch. The theme variables declare `--radii-s: .5rem`, `--radii-m: .75rem`, `--radii-l: 1rem` and `--corner-s: .4rem`, `--corner-m: .5rem`, `--corner-l: 1rem`.

## Components

**Primary button.** #1c1a15 fill, #fcfcfc Inter 500 16px text, 10px radius, 16px 20px padding, 52px tall, often with a small yellow square arrow chip at the right ("Book a demo"). On hover the label is underlined; the fill does not change.

**Secondary button.** #e4e1d1 sand fill, #1c1a15 text, same size and radius ("Get started", "What is a Merchant of Record?"); hover also underlines.

**Light button.** #fcfcfc fill with dark text on sand surfaces ("See all customer stories", "Discover ProfitWell Metrics").

**Story card.** #fcfcfc, 24px radius, 40px padding; customer logo top-left, a serif title, then large serif metrics with a hairline divider and an uppercase monospace caption on the right.

**Feature panel.** Sand #ebe7df panel with the deep shadow, a serif heading, an Inter paragraph with underlined product links, a light button, and product screenshots on the right.

**Yellow CTA panel.** Full-width #ffd400 block with a serif headline, short paragraph and a "Get started" / "Book a demo" button pair; thin dark crosshair lines decorate its corner.

**Footer.** #1c1a15 background, #ebe7df Inter text, six columns, yellow "WE'RE HIRING" chip next to Careers, a "Platform status" indicator, and the large wordmark above a legal row.

**Focus.** Links show a 2px solid blue outline with a 2px offset when focused (measured on the skip link).

## Design System Architecture

Paddle does not publish a public brand or web design system: https://www.paddle.com/brand and https://www.paddle.com/about/press return 404, and the press page (https://www.paddle.com/press) offers only a press contact. The de-facto system is in the shipped CSS, which is layered:

1. **Primitives** — `--color-primary-yellow`, `--color-primary-black`, `--color-primary-white`, a warm neutral ramp (`--color-neutral-light-100…900`, `--color-neutral-dark-50…950`) and an extended palette (`--color-extended-{red,green,teal,blue,pink,purple,gold}-{100…800}`).
2. **Theme aliases** — `--th-color-heading`, `--th-color-body`, `--th-color-body-subtle`, `--th-color-link`, which point at the primitives.
3. **Scales** — fluid type steps (`--step--2` … `--step-5`) and per-breakpoint type scales (`--type-scale-xl-m`, `--type-scale-3xl-xl`…), spacing (`--space-m: 1.5rem`, `--space-xl: 4rem`, `--spacing-2xl: 5rem`), radii (`--radii-s/m/l/brand`) and breakpoints (`--breakpoint-s: 428px`, `--breakpoint-m: 843px`, `--breakpoint-l: 1024px`, `--breakpoint-xl: 1440px`).

Fonts are self-hosted through Next.js (`/_next/static/media/…woff2`).

## Do's and Don'ts

**Do**
- Use the warm off-white #f9f8f7 and sand #ebe7df surfaces with #1c1a15 ink.
- Set headlines in the condensed serif at weight 400 with -0.01em tracking; keep UI and body in Inter.
- Make the main action a near-black 10px-radius button with a small yellow arrow chip.
- Reserve #ffd400 for one high-emphasis panel and small chips.
- Prove claims with large serif metrics and small uppercase monospace captions.
- Use 24px-radius white cards for stories and the single deep shadow only on hero product panels.

**Don't**
- Don't make the yellow a button fill everywhere; the measured primary actions are dark.
- Don't bold the serif headlines.
- Don't use pure white #ffffff or cool greys; Paddle's neutrals are warm.
- Don't add shadows to cards or buttons.
- Don't use pill buttons; the brand radius is 10px.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 56px / 56px (-0.56px), the section heading at 36.8px / 44.16px, body text at 14.4px / 21.6px (desktop 20px / 30px), and the "Book a demo" button at 14.4px with the same #1c1a15 fill and 10px radius. The announcement bar measured 111px tall on mobile (40px on desktop) because its text wraps. A "Toggle navigation" button was visible at both widths with one header link visible.

The mobile capture shows the hero centred, the customer logos in two rows, the story cards in a single column and the footer columns in two columns.

The stylesheet is mobile-first: `min-width: 1024px` (157 rules), `min-width: 843px` (98), `min-width: 641px` (36), `min-width: 1440px` (18), matching the declared `--breakpoint-*` variables. Behaviour between 390px and 1,280px was not measured.

## Iteration Guide

1. Set canvas #f9f8f7, sand #ebe7df bands, ink #1c1a15; no pure white backgrounds except #fcfcfc cards.
2. Load a condensed serif for headlines (display 64px / 64px, heading 48px / 57.6px, subheading 40px / 48px, all weight 400) and Inter for everything else.
3. Build buttons at 52px tall with 10px radius: dark primary, sand secondary, light tertiary; underline on hover.
4. Use 24px-radius #fcfcfc cards with 40px padding for proof points.
5. Add one yellow #ffd400 panel near the end of the page.
6. Keep the page on a 40px gutter with 16px / 40px gaps.
7. Check against both captures; hover beyond the underline, dark mode and intermediate widths were not measured.
