---
version: alpha
name: Deel
category: "Product & SaaS"
description: "Deel's homepage pairs Bagoss Condensed headlines (60px/500) and Inter body text on white, cream #fffbf4 and warm #f7f5f2 surfaces with a deep purple #201547 hero card, near-black #1b1b1b and #141414 bands, fully rounded 200px pill buttons in indigo #201148, black and white, and 16px-rounded product cards."
colors:
  canvas: "#ffffff"
  ink: "#1b1b1bb3"
  ink-strong: "#1b1b1b"
  ink-hover: "#4e4e4e"
  primary: "#201148"
  on-primary: "#ffffff"
  surface-cream: "#fffbf4"
  surface-card: "#f7f5f2"
  dark-purple: "#201547"
  acai: "#5938b7"
  purple-light: "#a98df6"
  blue-light: "#d8ebff"
  near-black: "#141414"
  cream-text: "#faf4ee"
  cream-text-85: "#faf4eed9"
  cream-text-65: "#faf4eea6"
  nav-text: "#000000de"
  input-text: "#000000"
  hairline: "#1b1b1b29"
typography:
  display:
    fontFamily: BagossCondensedFont, "BagossCondensedFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 63px
    letterSpacing: "-0.19px"
  display-mobile:
    fontFamily: BagossCondensedFont, "BagossCondensedFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 38px
    fontWeight: 500
    lineHeight: 39.9px
    letterSpacing: "-0.19px"
  heading:
    fontFamily: BagossCondensedFont, "BagossCondensedFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 46.2px
    letterSpacing: "-0.22px"
  subheading:
    fontFamily: BagossCondensedFont, "BagossCondensedFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 27.6px
  body:
    fontFamily: Inter, "Inter Fallback", Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: "-0.2px"
  button:
    fontFamily: BagossStandardVF, "BagossStandardVF Fallback", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 27.2px
    letterSpacing: 0.24px
  button-small:
    fontFamily: BagossStandardVF, "BagossStandardVF Fallback", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 23.8px
  label-small:
    fontFamily: BagossStandardVF, "BagossStandardVF Fallback", Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 500
    lineHeight: 20.4px
    letterSpacing: 0.18px
  button-large:
    fontFamily: Inter, "Inter Fallback", Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 30.6px
    letterSpacing: 0.24px
  input:
    fontFamily: Inter, "Inter Fallback", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 460
    lineHeight: 27.2px
    letterSpacing: "-0.08px"
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 100px
  cta: 200px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 16px
    height: 51px
  button-hero:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 51px
  button-header:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.on-primary}"
    hoverBackgroundColor: "{colors.ink-hover}"
    typography: "{typography.button-small}"
    rounded: "{rounded.cta}"
    padding: 8px 16px
    height: 40px
  offer-chip:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.label-small}"
    rounded: "{rounded.cta}"
    padding: 6px 12px
    height: 32px
  product-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xl}"
    padding: 24px
  hero-card:
    backgroundColor: "{colors.dark-purple}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.lg}"
    padding: 80px 32px 48px 96px
  floating-ui-card:
    shadow: "rgba(27, 27, 27, 0.16) 0px 16px 32px 0px, rgba(27, 27, 27, 0.05) 0px 2px 32px 0px"
  nav:
    textColor: "{colors.nav-text}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.cta}"
    padding: 1px 54px 1px 24px
    height: 60px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.cream-text}"
    padding: 0px 64px
---

# Deel

## Overview

Deel (https://www.deel.com/) is a global HR, payroll and compliance platform; the page title is "Deel | Global Payroll, Compliance, HR Solutions | HRIS". Its homepage reads as a set of rounded cards floating on white: a dark purple hero card, warm-grey product cards, a black feature card, then a dark footer.

The capture opens with a #1b1b1b offer bar ("SPECIAL OFFER — Get 3 months free of PEO*" with a white "Claim offer" chip and a close icon). The white header carries the lowercase "deel." wordmark, dropdown links (Solutions, Use cases, Who we serve, Resources) and Pricing, then EN, an outlined "Log in" pill and a black "Book a demo" pill. The hero is two cards side by side: on the left a deep purple #201547 card with the 60px headline "Hire, manage, pay, & equip anyone, anywhere.", the question "What would you like to do with Deel?" above five translucent option tiles (Hire anywhere, Run payroll, Secure visas, Manage HR & people, Ship equipment), a white full-width "Book a demo" pill and a G2 rating; on the right a photograph of a woman at a laptop overlaid with floating product chips ("PAYROLL COMPLETE $360,450", "+150 Currencies", "O-1A Visa APPROVED") and a Robinhood quote card. A lilac pill straddling both cards reads "Build your global team with ease" with an indigo "Speak with a trusted expert" button.

The rest of the page: a "TRUSTED BY 40,000+ COMPANIES" logo marquee, "The global people platform" with six #f7f5f2 product cards (Deel Payroll, HR, IT, Benefits, Hire, Mobility) each holding a small UI vignette, an "Accomplish more in less time" timeline with tabbed products and pale-blue #d8ebff step boxes, a black rounded "One modern experience for today's workforce" card with a currency picker over a photograph, a customer-review carousel, key figures ("150+", "+40,000", "$20B+", "90+"), a review strip and a dark #1b1b1b footer with a newsletter input.

The tone is confident and global ("anyone, anywhere"), with lots of proof (ratings, logos, figures). Small uppercase overlines ("WHAT DEEL DOES", "DEEL SPEED", "TESTIMONIALS") introduce each section.

## Colors

Deel's CSS exposes a primitive palette (purple, blue, neutral, tangelo, cornbread ramps) and semantic surface tokens. The rendered set:

**Neutrals**
- **canvas #ffffff** — page background.
- **ink #1b1b1bb3** — 70% near-black, the most-read text colour (1,698 characters), used for paragraphs.
- **ink-strong #1b1b1b** — headings and button labels on light surfaces; also the fill of the offer bar, the header "Book a demo" pill and the footer.
- **ink-hover #4e4e4e** — hover fill of the black "Book a demo" pill (the "Claim offer" chip hovers to #3f3f3f).
- **near-black #141414** — `--color-neutral-900`; the large dark feature card.
- **nav-text #000000de** — 87% black on headings such as "The global people platform".
- **input-text #000000** — input text.
- **hairline #1b1b1b29** — 16% near-black borders and the 2px input border.

**Warm surfaces**
- **surface-cream #fffbf4** — the second-largest background area.
- **surface-card #f7f5f2** — product cards.
- **cream-text #faf4ee**, **cream-text-85 #faf4eed9**, **cream-text-65 #faf4eea6** — warm off-white text on dark cards and the footer (cream-text-85 is the second most-read text colour at 1,127 characters).

**Brand purples and blues**
- **primary #201148** — indigo fill of the "Speak with a trusted expert" button.
- **dark-purple #201547** — `--color-surface-brand-dark-purple` / `--color-purple-950`; the hero card.
- **acai #5938b7** — `--color-core-acai` / `--color-purple-750`; badges such as "175 STORIES".
- **purple-light #a98df6** — `--color-surface-brand-purple-03`; borders on purple elements.
- **blue-light #d8ebff** — `--color-blue-150`; the timeline step boxes and the active product tab.

The CSS also declares core accents not used prominently on the home page: `--color-core-tangelo: #ed5e2a`, `--color-core-cornbread: #ffcf25`, `--color-core-blue-berry: #00499d`.

## Typography

Deel uses a custom Bagoss family in three widths plus Inter:

- **BagossCondensedFont** — headings (519 characters).
- **BagossStandardVF** — buttons and small labels (233 characters).
- **BagossExtendedFont** (weight 600) — a few display figures (19 characters).
- **Inter** (variable 100–900) — body text, the bulk of the page (4,442 characters).

Bagoss is a licensed commercial family; a condensed grotesque at 500 is the nearest substitute for headings. Inter is open source.

- **display** — Bagoss Condensed 60px / 63px, weight 500, -0.19px.
- **display-mobile** — 38px / 39.9px, -0.19px.
- **heading** — 44px / 46.2px, weight 500, -0.22px.
- **subheading** — 24px / 27.6px, weight 500 (product card titles).
- **body** — Inter 20px / 32px, weight 400, -0.2px.
- **button** — Bagoss Standard 16px / 27.2px, weight 500, 0.24px.
- **button-small** — Bagoss Standard 14px / 23.8px, weight 500 (header button).
- **label-small** — Bagoss Standard 12px / 20.4px, weight 500, 0.18px ("Claim offer").
- **button-large** — Inter 18px / 30.6px, weight 600, 0.24px (hero "Book a demo").
- **input** — Inter 16px / 27.2px, weight 460, -0.08px. The variable font is used at an in-between weight.

The CSS type tokens name the scale semantically: `--font-heading-h00-display-*`, `--font-heading-h1-xlarge-size: 56px` (36px on mobile), `--font-heading-h2-large-size: 44px`, `--font-heading-h5-xsmall-size: 24px`, `--font-paragraph-large-line-height: 1.7`, plus overline and "key figs" families.

## Layout

The desktop capture is 1,280px wide and 7,785px tall. The offer bar is 64px tall, the header 96px. The hero cards span almost the full width with only a small outer margin; the purple card has asymmetric padding of 80px 32px 48px 96px. Product cards sit in a three-by-two grid.

Spacing tokens: 1px, 2px, 4px, 5px, 6px, 8px, 12px, 14px, 16px, 20px. The most frequent gap is 4px (182 uses), then 16px and 12px; paddings are dominated by 12px (87) and 24px (75), with 64px, 80px and 96px for section spacing.

Density is moderate: generous white space between sections, but each card is packed with a small product vignette.

## Elevation & Depth

Two layered shadows were measured, both warm near-black at low opacity:

- `rgba(27, 27, 27, 0.16) 0px 16px 32px 0px, rgba(27, 27, 27, 0.05) 0px 2px 32px 0px` (8 elements)
- `rgba(27, 27, 27, 0.05) 0px 1.2px 19.2px 0px, rgba(27, 27, 27, 0.16) 0px 9.6px 19.2px 0px` (2 elements)

They lift the small floating UI chips and white panels inside cards ("PAYROLL COMPLETE", the payroll approval panel). The big cards themselves are flat and separated by colour and rounding.

## Shapes

Deel is rounded throughout. The radius tokens are 2px, 4px, 8px, 12px, 16px, 20px, 24px, 100px, 200px and a 9999px pill. The CSS names them `--radius-quark: 4px`, `--radius-sm: 8px`, `--radius-md: 12px`, `--radius-lg: 16px`, `--radius-2xl: 1rem` and `--radius-circular: 200px`. All buttons and inputs are fully rounded (200px or pill, 39 elements combined); the hero card uses 12px and product cards 16px.

## Components

**Primary button.** Indigo #201148 pill (200px radius), white Bagoss Standard 16px, 12px 16px padding, 51px tall ("Speak with a trusted expert").

**Hero button.** White pill, #1b1b1b Inter 600 18px, 51px tall, full width of the hero column ("Book a demo").

**Header button.** #1b1b1b pill, white Bagoss Standard 14px, 8px 16px padding, 40px tall; hover #4e4e4e. "Log in" beside it is an outlined pill.

**Offer chip.** White pill, 12px label, 6px 12px padding, 32px tall, on the #1b1b1b offer bar.

**Product card.** #f7f5f2, 16px radius, 24px padding, Bagoss Condensed 24px title, Inter subtitle, a white UI vignette with soft shadow.

**Hero card.** #201547, 12px radius, white 60px headline, translucent option tiles with hairline borders.

**Text input.** White pill (200px), 2px #1b1b1b29 border, 60px tall, 1px 54px 1px 24px padding (room for the round submit arrow), Inter 16px weight 460 — the footer newsletter field.

**Overline.** Small uppercase Inter labels with positive tracking above each section heading.

**Footer.** #1b1b1b with #faf4ee text, link columns (Solutions, Deel Platform, Why Deel, Resources, Customers), newsletter input, social icons and legal links.

## Design System Architecture

Deel does not publish a public web design system or brand guidelines. Its press page (https://www.deel.com/press) provides a press kit as a Google Drive folder (described as official logos, product screenshots and team photos, royalty-free) and a press@deel.com contact for brand assets; it states no colours or typefaces.

The shipped CSS shows the de-facto system: a Tailwind-style build (`--tw-*`, `--ease-in`) holding 391 root custom properties. Colour primitives are ramps with fine-grained steps (`--color-purple-25` … `--color-purple-950`, `--color-blue-50` … `--color-blue-825`, `--color-neutral-50` … `--color-neutral-900`); brand names sit on top (`--color-core-acai`, `--color-core-tangelo`, `--color-core-cornbread`, `--color-core-blue-berry`); and semantic surfaces reference them (`--color-surface-brand-purple-01/02/03`, `--color-surface-brand-blue-01/02/03`, `--color-surface-brand-yellow-01/02/03`, `--color-surface-brand-dark-purple`). Typography tokens are named by role and size (`--font-heading-h1-xlarge-*`, `--font-paragraph-large-*`, `--font-overline-large-*`, `--font-special-key-figs-*`) with separate mobile sizes. Some UI elements are MUI components (the offer bar close icon is a `MuiSvgIcon-root`).

## Do's and Don'ts

**Do**
- Set headlines in a condensed grotesque at weight 500 (Bagoss Condensed) and body in Inter.
- Make every button and input fully rounded.
- Build sections from large rounded cards: 12px for hero cards, 16px for product cards.
- Use warm neutrals (#fffbf4, #f7f5f2, #faf4ee) rather than cool greys.
- Reserve deep purple #201547 and indigo #201148 for brand moments and key actions.
- Float small white UI chips with the soft layered shadow to show the product.

**Don't**
- Don't use square or slightly rounded buttons.
- Don't use pure black text for paragraphs; use 70% #1b1b1b.
- Don't bold headlines beyond 500.
- Don't put shadows on the large section cards.
- Don't use the tangelo or cornbread accents as large fills; they were not used that way on the home page.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 38px / 39.9px (-0.19px), the section heading at 28px / 29.4px, body text at 14px / 22.4px (desktop 20px / 32px), and the hero "Book a demo" pill at 18px Inter 600, 334px wide and 51px tall. The offer bar measured 92px tall because its content wraps, and the header 80px. An "Open menu" toggle was visible with two header links visible (four on desktop).

The mobile capture shows the hero headline and options above the photograph card, and the product cards in a single column.

The stylesheet's breakpoints are mostly `max-width` with .95 fractions: 598.95px (77 rules), 958.95px (51), 390.95px (36), 1199.95px (15), 1099.95px, 329.95px; plus `min-width: 1024px` (23). Behaviour at intermediate widths was not measured.

## Iteration Guide

1. Start with white canvas, #1b1b1b ink at 70% for text and full strength for headings.
2. Load a condensed grotesque for headlines (60px / 63px display, 44px / 46.2px heading, 24px / 27.6px card titles) and Inter for body (20px / 32px).
3. Make all buttons pills: indigo #201148, black #1b1b1b (hover #4e4e4e) or white, 51px or 40px tall.
4. Compose the page from rounded cards: #201547 hero (12px), #f7f5f2 product cards (16px), #141414 feature card.
5. Add product chips in white with the soft 0px 16px 32px shadow.
6. Use 4px / 12px / 16px gaps and 12px / 24px padding.
7. Check against the captures at 1,280px and 390px. Dark mode, most hover states and intermediate widths were not measured.
