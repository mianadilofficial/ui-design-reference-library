---
version: alpha
name: Stripe
category: "Fintech & Crypto"
description: "Stripe's marketing homepage: a white canvas, deep navy ink (#061b31) with slate body text (#50617a), an indigo primary (#533afd) on 4px-radius buttons, and the variable font sohne-var set at light weight 300 with negative tracking, over soft pastel gradient product cards."
colors:
  canvas: "#ffffff"
  ink: "#061b31"
  ink-body: "#50617a"
  ink-muted: "#64748d"
  ink-subtle: "#839bc8"
  primary: "#533afd"
  on-primary: "#ffffff"
  primary-hover: "#4032c8"
  primary-pressed: "#2e2b8c"
  outline-border: "#b9b9f9"
  surface-border: "#e5edf5"
  surface-navy: "#0d1738"
  surface-quiet: "#f8fafd"
  card-glass: "#f8fafd73"
  nav-text: "#000000"
typography:
  display:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 57.6px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 34px
    fontWeight: 300
    lineHeight: 40.8px
    letterSpacing: "-0.34px"
  heading:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 44.8px
    letterSpacing: "-0.64px"
  subheading:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 26px
    fontWeight: 300
    lineHeight: 36.4px
    letterSpacing: "-0.26px"
  body:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 22px
    fontWeight: 300
    lineHeight: 30.8px
    letterSpacing: "-0.22px"
  button:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  button-secondary:
    fontFamily: sohne-var, "SF Pro Display", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  xl: 5px
  2xl: 6px
  3xl: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 32px
  s8: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 15.5px 24px 16.5px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-outline:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    borderColor: "{colors.outline-border}"
    height: 48px
  button-outline-hover:
    textColor: "{colors.primary-pressed}"
    borderColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(23, 23, 23, 0.08) 0px 15px 35px 0px
  footer:
    backgroundColor: "{colors.surface-quiet}"
    textColor: "{colors.nav-text}"
    padding: 0px 16px
---

## Overview

The Stripe homepage is a long, scroll-driven product tour. The copy I fetched from stripe.com opens with the headline "Financial infrastructure to grow your revenue", a primary navigation of Products, Solutions, Developers, Resources and Pricing, and calls to action such as "Get started", "Sign up with Google" and "Contact sales". The sections that follow are "Flexible solutions for every business model", "Essential tools for global commerce" (headline numbers such as currencies supported, volume processed and uptime), "Scaling for all business sizes" (enterprises, startups, platforms), a developer section and a news section.

The capture used for this analysis caught the page mid-interaction: a large white panel with a close button lies over a dimmed page. It repeats the card "Accept and optimize payments globally, online and in person" with a short checklist, an indigo "Explore Payments" button and an outlined "See pricing details" button, and below it a checkout mock-up and a statistic ("2.2%" in an orange-to-pink gradient numeral). Beneath the panel the page continues with a grid of product cards titled "Accept and optimize payments globally", "Enable any billing model", "Monetize through agentic commerce", "Create a card issuing program" and "Access borderless money movement with stablecoins and crypto". Each card carries an expand icon, which is how that panel opens.

The feeling is confident and light. Type is thin and large, the canvas is white, and colour arrives as soft pastel gradients (peach, lilac, violet, orange) behind product mock-ups rather than as flat brand fills. Microcopy is plain business language with concrete outcomes, and the page leans on real-looking product UI (a payment terminal, a checkout form, a usage chart, a payment card) as its imagery.

## Colors

Values were measured on the live page; the page also publishes its own tokens as `--hds-*` custom properties, which I used only to name roles.

- **Canvas (#ffffff)** is the page background. **Surface quiet (#f8fafd)** is the footer and a pale section tint, **surface border (#e5edf5)** a pale blue-grey used for dividers and chips, and **card glass (#f8fafd73)** a translucent card fill.
- **Ink (#061b31)** is the deep navy used for headings and primary text; the page's own tokens call this value the solid text colour. **Ink body (#50617a)** is the single most-read text colour, used for paragraph copy (the tokens call it soft text). **Ink muted (#64748d)** carries captions and footnotes, and **ink subtle (#839bc8)** appears on dark surfaces.
- **Primary (#533afd)** is the indigo of the solid buttons, inline links and the nav links, with **on-primary (#ffffff)** as the label colour. **Primary hover (#4032c8)** is the measured fill after hover. **Primary pressed (#2e2b8c)** is the text colour of the outlined button after hover, and **outline border (#b9b9f9)** its resting border.
- **Surface navy (#0d1738)** is the deep blue panel colour seen in dark sections.
- **Nav text (#000000)** is the computed colour of the navigation and footer containers.

The product gradients in the cards (orange, magenta, violet, lilac) are artwork and are not separate UI tokens.

## Typography

One family carries everything: a variable font loaded as `sohne-var` (axis range 1 to 1000), with "SF Pro Display" then the generic sans-serif as fallback. It is used at weight 300 for almost all display and body copy, and weight 400 for buttons and nav.

- **Display** is 48px, weight 300, line-height 57.6px, letter-spacing -0.96px. On a 390px viewport it becomes **display-mobile**, 34px/40.8px with -0.34px tracking.
- **Heading** is 32px, weight 300, 44.8px line-height, -0.64px tracking; **subheading** is 26px, weight 300, 36.4px, -0.26px.
- **Body** is 22px weight 300 with 30.8px line-height and -0.22px tracking, the large lead paragraph size. Standard reading text on the page is 16px; the smallest running text, such as footnotes, is 14px.
- **Button** is 16px weight 400 with line-height 16px; **button-secondary** is 14px weight 400.

Negative letter-spacing scales with size (about -2 percent on the largest headings in the page's tokens), and light weight plus tight tracking is the signature. Tiny labels inside mock-ups are 9px to 11px.

## Layout

The page is a full-width canvas with a top navigation (logo, Products, Solutions, Developers, Resources, Pricing, then "Sign in" and "Contact sales" buttons on the right). Content blocks use a wide container with generous vertical rhythm: the page's tokens include spacing steps of 12px, 24px and 32px up to 152px and 160px, and the most common measured gaps are 8px, 16px, 4px and 6px for tight UI, and 32px and 64px between blocks.

Product sections use a card grid: a large two-up row (wide card left, narrower right), then a three-up row, then a full-width row below. Each card has its title at top-left in light 26px type, an expand control at top-right, and a gradient-backed illustration filling the rest. Stats appear as large gradient numerals centred in a pale card. The footer is a quiet #f8fafd block with link columns.

## Elevation & Depth

Shadows are soft, large and tinted. Measured on the page: a blue-violet lift (rgba(50, 50, 93, 0.12) 0 16px 32px), a negative-spread black drop (rgba(0, 0, 0, 0.1) 0 20px 40px with -20px spread), a neutral card shadow (rgba(23, 23, 23, 0.08) 0 15px 35px, used on the glass card token), a small contact shadow (rgba(23, 23, 23, 0.06) 0 3px 6px), a two-layer subtle one (rgba(0, 0, 0, 0.06) 0 4px 24px plus rgba(0, 0, 0, 0.03) 0 1px 2px) and an inset shadow on a pressed element. Depth mostly comes from translucency and gradient washes: cards are semi-transparent, and. The dimmed backdrop behind the expanded panel is the strongest depth cue.

## Shapes

Radii are small and mechanical. Measured: 2px (xs), 3px, 4px (md, the buttons), 5px, 6px (the most frequent value on the page), 8px, plus 50 percent for round elements and a 2px-top-only variant. Buttons are 4px-radius rectangles, never pills. The card token uses 6px; I did not attribute every measured radius to a specific element.

## Components

**Primary button.** 48px high, padding 15.5px 24px 16.5px, 4px radius, fill #533afd, white label at 16px weight 400, trailing chevron. Hover darkens the fill to #4032c8.

**Outline button.** Same 48px height and 4px radius, transparent fill, indigo label, border #b9b9f9; hover turns the label #2e2b8c and the border #4032c8.

**Secondary/nav button.** The header "Sign in" and "Contact sales" buttons use the same indigo fill at 40px height with a 14px label.

**Navigation links.** Indigo at 16px, regular weight, with dropdown chevrons.

**Cards.** Translucent #f8fafd73 fill, 6px radius, soft 15px/35px shadow, title top-left, expand icon top-right, gradient illustration.

**Checklist.** Orange check circles with 14px slate list text.

**Stats.** Large light-weight numerals with gradient fill and small captions.

**Footer.** #f8fafd background, link columns in ink.

## Design System Architecture

Stripe does not publish a single public design-system site for its marketing pages that I could open, but the page ships its own token layer: roughly 400 CSS custom properties named `--hds-*` (for example `--hds-color-util-text-solid` #061b31, `--hds-color-util-text-soft` #50617a, `--hds-color-action-bg-solidHover` #4032c8, `--hds-color-action-bg-subduedHover` #b9b9f9, `--hds-font-heading-xl-size` 3rem with a 1.03 line-height, `--hds-font-heading-lg-size` 2rem, `--hds-space-core-300` 24px). Colour tokens are grouped as core neutral and neutral-dark ramps, util surfaces and text, action backgrounds, input states, shadows and accent colour modes (ruby, magenta, lemon and others).

Stripe describes its colour method in "Designing accessible color systems" (https://stripe.com/blog/accessible-color-systems): colours are built in the perceptually uniform CIELAB space so that hues share equivalent contrast, and any two colours at least five levels apart have enough contrast for small text, four levels for icons and large text. The brand-asset page (https://stripe.com/newsroom/brand-assets) states that the lettermark logo is offered in purple-blue, gray-blue and white and must not be used in other colours; it gives no hex values. For product-UI extensions, Stripe Apps documentation (https://docs.stripe.com/stripe-apps/design) says custom styling is intentionally limited and the colours available per element are restricted for accessibility. Typeface licensing for the marketing site is not documented in the pages I read.

## Do's and Don'ts

Do set display and body text in weight 300 with the measured negative tracking.
Do use #061b31 for headings, #50617a for paragraphs and #533afd only for actions and links.
Do keep buttons rectangular at 4px radius with a 48px height on marketing pages.
Do build depth from large, soft, tinted shadows and translucent card fills.
Do show real-looking product UI in cards, with gradient washes behind it.

Don't use pill-shaped primary buttons.
Don't use flat saturated brand fills behind large areas; colour comes from gradients behind illustrations.
Don't use weights above 400 in UI copy.
Don't use pure black text; the lead ink is navy.
Don't use the lettermark in colours other than those Stripe lists.

## Responsive Behavior

The extraction measured the page at 1280px and 390px. At the narrow width the display headline steps down from 48px to 34px (line-height 40.8px, tracking -0.34px). Other breakpoints, nav collapse and card stacking were not measured here, so they are not described. The card grid is built of cards that each carry their own title and artwork, so they can reflow without losing meaning; treat that as a design recommendation, not a measurement.

Keep the 48px button height for touch targets and keep light type sizes large enough to stay legible at weight 300.

## Iteration Guide

1. Start with canvas, ink, ink-body, primary and on-primary; add surface-quiet and outline-border next.
2. Set sohne-var at weight 300 with the heading ramp 48px, 32px and 26px and the negative tracking given above.
3. Build the primary and outline buttons at 48px and 4px radius, with the hover colours from the tokens.
4. Create cards at 6px radius with a translucent fill and the 15px/35px shadow; place gradient illustrations behind UI mock-ups.
5. Keep any new colour traceable to the page's `--hds-*` variables.
6. Re-check contrast: #50617a body text on white and #839bc8 on #0d1738.
