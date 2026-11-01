---
version: alpha
name: Semrush
category: "Design Systems"
description: "Semrush marketing homepage as captured in October 2026: tight, heavily tracked Lazzer headlines (84px/600, -3.36px) in off-black #181e15 on white and pale mint #dceeeb, a lavender #c190ff pill CTA with 100px radius, an off-black #181e15 secondary pill, lime #89ff75 and aqua #18f0bf accents, and frosted-glass search and card shells with a 0 2px 12px 5% shadow."

colors:
  canvas: "#ffffff"
  ink: "#181e15"
  primary: "#c190ff"
  primary-hover: "#b072ff"
  on-primary: "#181e15"
  surface-mint: "#dceeeb"
  surface-off-white: "#f3f6f6"
  surface-grey: "#f0f1f2"
  ink-light: "#d1d2d5"
  ink-muted: "#6c6e79"
  focus-blue: "#006dca"
  lime: "#89ff75"
  aqua: "#18f0bf"

typography:
  display:
    fontFamily: Lazzer, sans-serif
    fontSize: 84px
    fontWeight: 600
    lineHeight: 92.4px
    letterSpacing: "-3.36px"
  display-mobile:
    fontFamily: Lazzer, sans-serif
    fontSize: 56px
    fontWeight: 600
    lineHeight: 61.6px
    letterSpacing: "-2.24px"
  heading:
    fontFamily: Lazzer, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-1.6px"
  heading-caps:
    fontFamily: Lazzer, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 48px
    letterSpacing: "-1.92px"
    textTransform: uppercase
  body:
    fontFamily: Lazzer, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.32px"
  button:
    fontFamily: Lazzer, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
    letterSpacing: "-0.32px"
  button-secondary:
    fontFamily: Lazzer, Inter, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: "-0.32px"

rounded:
  xs: 5px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  xxl: 16px
  button: 100px
  pill: 9999px

spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 21px
  s9: 24px
  s10: 30px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 32px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.button}"
    padding: 16px 24px
    height: 48px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 24px
    height: 48px
    borderColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 58px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 12px 0px 12px 12px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 2px 12px 0px
  nav:
    backgroundColor: "{colors.surface-mint}"
    textColor: "{colors.ink}"
    padding: 0px 24px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 32px 0px 0px
---

## Overview

The captured semrush.com homepage opens with two stacked notices: a blue bar warning that the browser or operating system is out of date, and a lime bar ("GET YOUR SPOTLIGHT TICKET: Win brand visibility in the age of AI, October 13 in London"). Below sits an 84px-tall header on a pale mint wash (`{colors.surface-mint}` #dceeeb): the Semrush wordmark with the caption "An Adobe Company", menu items Product, Pricing, Solutions, Resources and Enterprise (with chevrons and an outbound arrow on the last), an outlined "Log In" pill and a solid off-black "Start for free" pill.

The hero is centered: the headline "Be found everywhere search happens" at 84px and weight 600 with -3.36px tracking, a two-line paragraph "The leading platform to grow and measure brand visibility across every digital channel", and a frosted-glass search shell containing a white pill input ("Enter your website", with a "US" database selector) and a lavender `{colors.primary}` button "Get insights". Beneath are two side-by-side feature cards, one solid lavender ("Get found in search and AI answers." with a white "Try for free" pill) and one pale off-white ("Ask AI. Get Semrush data." with an outlined "Connect your data" pill), each paired with a product UI crop and a diagonal hatch ornament in the top corner. A customer-logo row (Shopify, Decathlon, Booking.com, P&G, Samsung, FedEx) follows, then a near-black enterprise panel ("Bigger scale. Bigger advantage." with a "Book a demo" outline pill and an abstract audio-spectrum graphic), then an all-caps "GET SEEN. GET CITED. BE THE ANSWER." heading above a carousel with circular arrow buttons and a "SOLUTIONS (9)" eyebrow.

**Key Characteristics:**
- **Lazzer** set tight: every size from 16px to 84px carries negative letter-spacing, at roughly -2% to -4% of the size.
- A single saturated accent, lavender `{colors.primary}` (#c190ff), for the main action; the secondary action is off-black.
- 100px-radius pill buttons everywhere; cards and shells at 12px.
- Frosted-glass surfaces (`--mp-shadow-glass`) for the search box and the cards.
- Section backgrounds shift between white, mint, off-white, near-black and lavender rather than using borders.
- Product-first imagery: UI crops, charts and chat bubbles instead of photography.

## Colors

> **Source pages:** `https://www.semrush.com/` (extracted at 1280px and 390px) and its `--mp-*` root variables. The Semrush press-kit page https://www.semrush.com/news/presskits was opened and offers only a logo pack, with no color specification.

### Brand & Accent
- **Lavender** (`{colors.primary}` — #c190ff): `--mp-lavendar` (spelled so in the stylesheet). Fills "Get insights" and other primary CTAs; also a card background.
- **Lavender hover** (`{colors.primary-hover}` — #b072ff): `--mp-lavendar-hover`.
- **Lime** (`{colors.lime}` — #89ff75): `--mp-lime`; the notification strip.
- **Aqua** (`{colors.aqua}` — #18f0bf): `--mp-aqua`; declared in the stylesheet; it was not matched to a specific element in the capture.

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): the largest background by area (6542).
- **Mint** (`{colors.surface-mint}` — #dceeeb): `--mp-mint`; header and hero wash (2767 area weight).
- **Off-white** (`{colors.surface-off-white}` — #f3f6f6): `--mp-off-white`; the pale feature card.
- **Grey** (`{colors.surface-grey}` — #f0f1f2): `--mp-light-grey`.

### Text
- **Ink** (`{colors.ink}` — #181e15): `--mp-off-black`, 4148 character weight; also the fill of the secondary button and dark panel.
- **Ink light** (`{colors.ink-light}` — #d1d2d5): `--mp-medium-grey`, text on dark.
- **Ink muted** (`{colors.ink-muted}` — #6c6e79): `--mp-dark-grey`, placeholders and the outlined border on small controls.
- **Focus blue** (`{colors.focus-blue}` — #006dca): `--mp-focus-border`.
- **On primary** (`{colors.on-primary}` — #181e15): dark text on lavender.

### Semantic
No separate success, warning or error palette is declared in the marketing stylesheet; lime and aqua behave as decorative accents.

## Typography

### Font Family
Almost all text (4947 character weight) is **Lazzer**, loaded at 400, 500 and 600 from `/__static__/fonts/lazzer/v2/lazzer.css` on semrush.com; **Inter** (variable, 100 to 900) carries a small share (155 character weight), and the site also loads a font file named `factor_a` and Ubuntu from Google Fonts, which were not seen in measured text. Where Lazzer is unavailable, a reasonable substitute is Inter at weight 600 for headlines with the same negative tracking, and weight 500 for body.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 84px | 600 | 92.4px | -3.36px | Hero H1 |
| `{typography.display-mobile}` | 56px | 600 | 61.6px | -2.24px | H1 at 390px |
| `{typography.heading-caps}` | 48px | 600 | 48px | -1.92px | All-caps section heading |
| `{typography.heading}` | 40px | 600 | 48px | -1.6px | Section heading |
| `{typography.body}` | 16px | 500 | 24px | -0.32px | Paragraphs, inputs |
| `{typography.button}` | 16px | 600 | 19.2px | -0.32px | Buttons |

### Principles
- **Tracking scales with size**: -0.32px at 16px, -0.48px at 24px, -0.52px at 26px, -1.92px at 48px, -3.36px at 84px; a consistent -4% rule on display sizes and -2% on text.
- **Tight line-height on display**: 1.1 at 84px and 1.0 at 48px caps.
- **Weights**: 500 for reading text and 600 for headings and controls; 400 and 700 appear only marginally (94 and 93 character weight).
- Headlines use sentence-style punctuation ("Bigger scale. Bigger advantage.") and a deliberate all-caps for the solutions heading.

## Layout

### Spacing System
Measured gaps are 16px, 24px, 12px, 8px and 32px; paddings are 6px, 24px, 12px, 8px and 32px, with 120px section padding. The stylesheet declares `--mp-vertical-padding: 60px`, `--mp-section-margin-top: 32px`, `--mp-grid-margin: 16px` and `--mp-button-height: 48px`.

### Grid & Container
`--mp-max-container-width` is 1440px. In the 1280px capture the feature cards and panels span the viewport minus a 32px margin, with two cards side by side (the lavender card narrower than the off-white one).

### Whitespace Philosophy
Large vertical rests (the stylesheet's 60px vertical padding, 120px measured section padding) separate bands of strongly different background color.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Header, text sections |
| 1 | `rgba(0, 0, 0, 0.05) 0px 2px 12px 0px` (`--mp-shadow-glass`, 20 uses) | Search shell, glass cards |
| Inset | `rgba(0, 0, 0, 0.05) 0px 4px 15px 0px inset` | One inset surface |

Cards also carry a `linear-gradient(91deg, rgba(5, 5, 5, 0.04) 11.45%, rgba(255, 255, 255, 0.04) 88.55%)` fill that produces the frosted look.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 5px | Small controls (30 uses) |
| `{rounded.sm}` | 6px | Small elements |
| `{rounded.md}` | 8px | Compact elements |
| `{rounded.lg}` | 10px | Mid elements |
| `{rounded.xl}` | 12px | Cards |
| `{rounded.xxl}` | 16px | Large panels |
| `{rounded.button}` | 100px | All buttons (`--mp-border-radius`) |
| `{rounded.pill}` | 9999px | Fully rounded ends |

## Components

### Buttons
**`button-primary`**: lavender `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, padding `0px 32px`, 60px tall, radius `{rounded.button}`; hover `{colors.primary-hover}`. This is the hero "Get insights" button (the Start free trial and Explore the index buttons use the same fill; at 390px the same button measured 48px tall with a 30px radius). **`button-secondary`**: `{colors.ink}` fill with white text, padding `16px 24px`, 48px tall ("Start for free"). **`button-outline`**: transparent with a 1px `{colors.ink}` border, 48px tall ("Connect your data", "Book a demo", "Log In").

### Inputs
**`text-input`**: 58px tall, `{typography.body}` text in `{colors.ink}`, set inside a white pill within the glass search shell, with a muted placeholder and a "US" selector.

### Cards
**`card`**: 12px radius, glass shadow, gradient wash. Feature cards swap to solid lavender or off-white, and carry a white pill CTA or an outline CTA.

### Navigation and footer
**`nav`**: mint `{colors.surface-mint}` header with `0px 24px` padding, 84px tall at desktop and 70px at 390px. **`footer`**: `{colors.ink}` text at 14px/500.

## Design System Architecture

The measured homepage does not use Semrush's published design system. Semrush publishes **Intergalactic** at https://developer.semrush.com/intergalactic/ (confirmed as the design system "used at Semrush": a React component library of "56+ React components", charts, tables, icons, design tokens and theming, MIT licensed, with source at https://github.com/semrush/intergalactic and Figma libraries at figma.com/@semrush; installable as `@semcore/ui`). However, the semrush.com homepage HTML and rendered DOM contain no Intergalactic references; its classes are site-specific (`srf-layout`, `srf-header__menu-item`, `mp-hero`, `mp-glass`, `mp-search`, `mp-title--h1`, plus Svelte-scoped classes) and its 31 root variables are namespaced `--mp-*` (marketing page), `--srf-*` and `--swiper-*`. For that reason Intergalactic is documented here but no values were taken from it.

The de-facto system is therefore the `--mp-*` token set: colors (`--mp-lavendar`, `--mp-lavendar-hover`, `--mp-lime`, `--mp-aqua`, `--mp-mint`, `--mp-off-white`, `--mp-light-grey`, `--mp-medium-grey`, `--mp-dark-grey`, `--mp-off-black`, `--mp-white`, `--mp-light-mint`), geometry (`--mp-border-radius: 100px`, `--mp-button-height: 48px`, `--mp-max-container-width: 1440px`, `--mp-grid-margin: 16px`, `--mp-vertical-padding: 60px`, `--mp-section-margin-top: 32px`), effects (`--mp-shadow-glass`, `--mp-focus-color`, `--mp-focus-border`), and font assets served from `/__static__/fonts/`. Brand-level material is limited to the press kit logo pack at https://www.semrush.com/news/presskits. The capture's header shows "An Adobe Company" under the wordmark, and the newsroom lists Adobe completing its acquisition of Semrush Holdings, Inc.; neither affects the tokens measured here.

## Do's and Don'ts

### Do
- Set headlines in Lazzer 600 with tracking of about -4% of the size, and body in 500 with -2%.
- Use one lavender pill per band for the main action and an off-black pill for the secondary.
- Round every button at 100px and every card at 12px.
- Use frosted glass (the 5% shadow and the faint gradient) for search and feature shells.
- Alternate background bands among white, mint and near-black.

### Don't
- Don't assume Intergalactic tokens apply to this site; the homepage does not load them.
- Don't use lime or aqua as button fills.
- Don't loosen display letter-spacing; the tracking is the brand's headline signature.
- Don't use weights below 500 for reading text.
- Don't add borders to cards; depth comes from tint and the glass shadow.

## Responsive Behavior

The H1 drops from 84px/92.4px to 56px/61.6px at 390px, keeping weight 600 and the same -4% tracking (-2.24px). The hero H2 measured at 390px is 32px/35.2px with -1.28px tracking. The primary button's radius on mobile is 30px and its height 48px; the header height drops from 84px to 70px with 16px side padding. The stylesheet sets a 16px grid margin. Measured mobile text sizes are 12, 14, 16, 18, 32, 56 and larger display sizes; layout reflow beyond these values was not captured.

## Iteration Guide

1. Start from `{colors.canvas}` or `{colors.surface-mint}` with `{colors.ink}` text and Lazzer (or Inter 600) at the tracked sizes.
2. Add one lavender `{colors.primary}` pill with `{rounded.button}` 100px radius per section.
3. Frame search and cards as glass shells at 12px with the 5% shadow.
4. Keep accents (lime, aqua) to notices and graphic ornaments.
5. Re-run `node web/scripts/verify-designs.mjs --slug=semrush` after edits.
