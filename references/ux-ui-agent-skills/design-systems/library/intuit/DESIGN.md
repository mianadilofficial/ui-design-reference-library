---
version: alpha
name: Intuit
category: "Design Systems"
description: "Intuit.com home page — white and pale-grey (#f4f5f8) canvas, deep indigo ink (#0d0031), a single saturated action blue (#236cff) on 60px-radius 52px-tall pill buttons, Tally and Tally Display typefaces with 40px/500 headings, and rounded gradient product cards (green, navy, yellow) holding rounded photographs."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f5f8"
  ink: "#0d0031"
  ink-secondary: "#393a3d"
  ink-nav: "#21262a"
  primary: "#236cff"
  primary-hover: "#1e5cd9"
  on-primary: "#ffffff"
  surface-sky: "#a8c8ff"
  surface-lilac: "#c9aff5"
  surface-mint: "#9fd8cb"
typography:
  display:
    fontFamily: "\"Tally Display\", Tally, sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  heading:
    fontFamily: "\"Tally Display\", Tally, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28.8px
  body:
    fontFamily: Tally
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Tally
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  nav:
    fontFamily: Tally, "AvenirNext forINTUIT", Avenir, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 24px
  lg: 30px
  xl: 32px
  2xl: 40px
  3xl: 48px
  4xl: 51px
  cta: 60px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 50px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  nav:
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-sky}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
---

## Overview

The Intuit home page presents the company as a platform of four products (TurboTax, Credit Karma, QuickBooks and Mailchimp, each shown as a small logo in a strip across the very top) rather than as a single product. The captured screenshot has an empty white band under that strip, which suggests the hero animation had not rendered at capture time, so the described layout begins at the header: the blue lowercase "intuit" wordmark at left, the menu items "Products", "Solutions", "Support and Blogs" and "Company", a language selector "EN-US" and a "Sign in" link.

Under the header a three-way segmented control (Business, Consumer, Accountants) with a deep-indigo selected state introduces the headline "The financial platform for running and growing your business with confidence", centered. Three tall rounded cards follow: a green-to-pale-blue card for QuickBooks, a near-black indigo card for the enterprise suite, and a yellow card for Mailchimp, each with a logo lockup, a one-line promise, and a rounded photograph of real small-business people at work. A single blue pill, "Discover the Intuit Platform", sits beneath, and a testimonial module follows with a portrait photograph, a customer quote, and the pill "See their stories".

The voice is warm and plain: "Consider it done with QuickBooks", "Make confident marketing decisions with Mailchimp". Photography shows real owners (a farmer, a denim-shop owner) and the testimonial notes "Real customers paid for their time". The look is friendly, rounded, and colorful at the product level while the interface chrome stays white and indigo.

## Colors

- **Canvas** `{colors.canvas}` is white; `{colors.page-largest}` is a cool pale grey, which is the largest background area measured on the page.
- **Ink** `{colors.ink}` is a very dark indigo, not black, and carries headlines and most text; `{colors.ink-secondary}` and `{colors.ink-nav}` are neutral greys for body copy and navigation.
- **Primary** `{colors.primary}` is the action blue. The site's CSS publishes the same value as `--web-refresh-omni-brand-blue` and `--color-ies-super-blue`, with a hover blue `{colors.primary-hover}` named `--web-refresh-blue-hover`.
- **Surface tints** `{colors.surface-sky}`, `{colors.surface-lilac}` and `{colors.surface-mint}` are pastel background fills measured among the page's large background areas; the product cards show green, navy and yellow gradients, so those three tints are supporting fills and the individual card gradients are not tokenised.

The site's CSS also holds a much larger palette (named greens, oranges, teals and a data-visualisation ramp starting at `#21ABF6`), but only the indigo, blue and neutrals appear as dominant colors on the captured screen.

## Typography

Two Intuit families load: Tally (400, 500, 700) for text and Tally Display (400, 500, 700) for headlines, with AvenirNext forINTUIT (400, 500) as the older family still referenced in the navigation stack. Headings use `{typography.display}` (Tally Display 40px, weight 500, 48px line) and `{typography.heading}` (24px, weight 500, 28.8px line); body copy and buttons are 14px on a 21px line in `{typography.body}` and `{typography.button}`, and the navigation is 16px/24px in `{typography.nav}`. The page also measures a very large 113.778px weight-700 text element (an animated hero fragment), which is not used as a token because only a single word of it was captured.

Medium weight (500) is the default for headings, so the page reads rounded and approachable rather than heavy. Tally is proprietary; a similar geometric sans such as Avenir Next or Inter at the same weights is the nearest stand-in, and the site itself falls back to Avenir, Helvetica and Arial.

## Layout

The desktop capture is 1280px wide with generous vertical spacing between modules. The header is a single row; the headline is centered; the three product cards sit side by side with equal widths and small gutters; the testimonial block splits into text at left, a tall portrait image in the center, and the quote at right. The site's CSS defines breakpoints of 480px (extra small), 768px (small), 1024px (medium) and 1200px (large), and a 12-column-style grid-column set (for example `--grid-column-04` at 33.333%). Spacing steps measured are 2, 4, 6, 8, 9, 10, 11, 12, 15 and 16px.

## Elevation & Depth

No box-shadows are measured on the page, so depth is not made with shadows. Instead, layering comes from color: saturated gradient cards on a pale ground, photographs inset inside cards with their own rounded corners, and in the testimonial a second portrait peeking out from behind the main one. The deep indigo enterprise card provides the page's only dark mass.

## Shapes

Shape is the signature. The primary button is a 60px-radius pill (`{rounded.cta}`), cards use 30px (`{rounded.lg}`) and larger, and photographs inside cards are rounded again. Other measured radii are 4px, 6px, 24px, 32px, 40px, 48px and 51px, plus 50% for circles such as the carousel pause button. The segmented control is also a full pill. Sharp corners do not occur on any prominent element.

## Components

- **Primary button** — `{colors.primary}` fill, white text, 52px high, 50px horizontal padding, radius `{rounded.cta}`, Tally 14px/500. The site's CSS names the medium button height `--spacing-rw-medium-button-height` at 52px. Examples: "Discover the Intuit Platform", "See their stories".
- **Segmented control** — a pill-shaped track with Business, Consumer and Accountants options; the selected item is filled with the deep indigo.
- **Product card** — rounded (30px) tall card with gradient fill, logo lockup, one-line promise and inset rounded photo.
- **Text link** — blue text with a trailing chevron ("Read More").
- **Header** — white, 16px navigation links with small chevrons, the wordmark at left, a globe-and-language control and "Sign in" at right.
- **Carousel controls** — a circular pause button with outlined ring and small dot pagination.

## Design System Architecture

The dsUrl for this brand, design.intuit.com, is titled "Intuit Design Hub". I opened its home page and its navigation (Home, Careers, Intuit Assist, Designers' Blog): it is a blog for Intuit designers with articles under topics like How To, Do Research and Lead People. It is not a component or token documentation site, so it is not used as a design-system source. The page mentions "the home of QuickBooks Design", a separate public site for QuickBooks guidelines, but that is a product site and was not opened.

What the live intuit.com does ship is a token layer in its CSS custom properties: hundreds of variables on the root. Naming shows several generations side by side. There are semantic action tokens (`--color-action-standard` #0077C5, `--color-action-standard-hover`, `--color-action-negative` #D52B1E, `--color-action-passive`), container, input and divider tokens (`--color-container-border-primary`, `--color-input-border-primary`), size and radius tokens (`--radius-action` 4px, `--radius-large` 8px, `--radius-xx-large` 16px, `--size-action-border` 2px), type scale tokens (`--font-size-component-small` 14px, `--font-size-component-large` 20px, `--font-size-heading-4` 28px, `--font-size-display-2` 72px), "web-refresh" tokens for this marketing site (`--web-refresh-omni-brand-blue`, `--web-refresh-blue-hover`) and Bootstrap variables (`--bs-primary`, `--bs-border-radius-xl`), indicating a Bootstrap base layered under the brand tokens. No public documentation for these tokens was found in the pages opened.

## Do's and Don'ts

- Do use one action blue for all primary buttons and keep them as full pills.
- Do pair indigo ink with pale grey and white surfaces.
- Do show real people in rounded photographs inside colored cards.
- Do keep headings at medium weight in the display face.
- Don't use pure black for headings; the ink is indigo.
- Don't add shadows to cards; separate them with color and radius.
- Don't use square corners on any prominent control or image.
- Don't use the gradient card colors (green, yellow) for interface actions; they identify products.

## Responsive Behavior

The CSS defines extra-small, small, medium and large breakpoints at 480px, 768px, 1024px and 1200px, a mobile minimum hero height variable, and separate desktop and mobile spacing for the sticky secondary navigation. Narrow-screen behaviour of the three-card row and the testimonial layout was not measured; only the 1280px desktop capture was reviewed visually.

## Iteration Guide

1. Start with white and `{colors.page-largest}` backgrounds, `{colors.ink}` text and `{colors.primary}` for actions.
2. Build buttons at 52px high, 50px side padding, 60px radius, Tally 14px/500.
3. Make cards 30px-radius with gradient or pastel fills and nest rounded photographs.
4. Set headings in Tally Display 500 at 40px and 24px.
5. Keep copy short, warm, and customer-focused.
6. Check new colors against the measured set and the CSS variables.
