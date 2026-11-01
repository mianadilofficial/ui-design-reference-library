---
version: alpha
name: Superhuman
category: "Developer Tools & IDEs"
description: "Superhuman's homepage (Go, Mail, Docs): a warm off-white canvas (#f7f5f2) broken by maroon, plum and teal cards, warm near-black ink (#292827), a purple primary (#714cb6, lavender #d4c7ff on dark), the variable font Super Sans VF at weights 460 to 600, and 8px and 12px radii."
colors:
  canvas: "#f7f5f2"
  page-body: "#ffffff"
  ink: "#292827"
  ink-soft: "#1f1f1ca6"
  primary: "#714cb6"
  on-primary: "#ffffff"
  primary-hover: "#533192"
  primary-on-dark: "#d4c7ff"
  primary-on-dark-hover: "#bea1f5"
  surface-maroon: "#421d24"
  surface-plum: "#281647"
  surface-teal: "#0c4243"
  surface-lavender: "#e8e0ff"
  surface-stone: "#dedbd5"
  surface-soft: "#f2f0eb"
  on-dark: "#ffffffcc"
  on-dark-muted: "#ffffffa6"
  hairline-on-dark: "#ffffff14"
typography:
  display:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 45.6px
    fontWeight: 460
    lineHeight: 54.72px
    letterSpacing: "-1.254px"
  display-mobile:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 32px
    fontWeight: 460
    lineHeight: 38.4px
    letterSpacing: "-0.88px"
  subheading:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 24px
    fontWeight: 460
    lineHeight: 28.8px
    letterSpacing: "-0.66px"
  body:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 18px
    fontWeight: 540
    lineHeight: 27px
    letterSpacing: "-0.135px"
  button:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18px
  nav:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 460
    lineHeight: 19.2px
  button-large:
    fontFamily: "\"Super Sans VF\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
rounded:
  xs: 8px
  sm: 12px
spacing:
  s1: 4px
  s2: 5px
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
    typography: "{typography.button-large}"
    rounded: "{rounded.sm}"
    padding: 6px 20px
    height: 52px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-on-dark:
    backgroundColor: "{colors.primary-on-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 16px
    height: 36px
  button-on-dark-hover:
    backgroundColor: "{colors.primary-on-dark-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-maroon}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.surface-maroon}"
    textColor: "{colors.page-body}"
---

## Overview

The Superhuman homepage sells a suite (Go, Mail, Docs) built from the Grammarly company's 2025 rebrand. The company's own About page (https://superhuman.com/about) says Grammarly acquired Coda and Mail and unified them under the Superhuman brand with the launch of Superhuman Go. The homepage fetch gives the headline "Docs, Mail, and AI That Work Everywhere", while the capture's first screen leads with the Go campaign: a dark teal hero with the headline "Bring AI inside every app and tab with Superhuman Go" (the product name in white, the rest in a softer tint), a small lavender "Try Go" button and a text link "Learn more", and a screenshot of a Google Doc with an inline-suggestion popover. A thin lavender announcement bar above it reads "Looking for Superhuman Mail? Learn more". The capture also caught a cookie consent banner with outlined "Accept non-essential cookies" and "Reject non-essential cookies" buttons.

The page then moves to a trust strip ("Trusted by the most innovative organizations in the world", logos set in a bordered six-cell row: OpenAI, Figma, Rivian, Brex, Zapier, DoorDash), a centred Go introduction ("Get help from agents right where you work") with a purple "Try Go" and a "Learn more" text link, and a mosaic of colour-blocked feature cards: "Inline suggestions" on dark teal, "Context-aware chat" on maroon, "Go app" on stone grey, each pairing a small label, a two-line statement in light type and a cropped product screenshot. A tab row follows (Featured, Prep for meetings, Write and edit, Automate your emails, Build agents).

The mood is warm, editorial and calm for an AI product: an off-white paper canvas, deep maroon and plum blocks instead of black, soft lavender accents, and large light-weight headlines. The microcopy is gently confident and benefit-led ("As you type, your agents underline what needs your attention. Mid-sentence. Mid-argument. Mid-mistake.").

## Colors

All values were measured on the live page; the page's own CSS exposes most of them as named variables, which I used only to identify roles.

- **Canvas (#f7f5f2)** is the warm off-white page background and covers by far the largest area. **Page body (#ffffff)** is pure white, used for the header and card surfaces. **Surface soft (#f2f0eb)** and **surface stone (#dedbd5)** are warm greys for secondary panels; the stone grey is the "Go app" card.
- **Ink (#292827)** is the warm near-black used for navigation, labels and the text on lavender buttons. **Ink soft (#1f1f1ca6)** is the same family at roughly two-thirds opacity and is the single most-read colour, used for paragraphs.
- **Primary (#714cb6)** is the purple of the large solid buttons on light sections, with **on-primary (#ffffff)** labels; the page's CSS names it the primary base in light mode and gives #d4c7ff for dark mode. **Primary hover (#533192)** is the measured fill after hover. On dark hero and card backgrounds the button is **primary on dark (#d4c7ff)**, a lavender with ink text, which hovers to **#bea1f5**.
- **Surface maroon (#421d24)** is the footer and the "Context-aware chat" card; **surface plum (#281647)** and **surface teal (#0c4243)** are the other deep card colours; **surface lavender (#e8e0ff)** is the announcement bar tint.
- **On dark (#ffffffcc)** and **on dark muted (#ffffffa6)** are white at 80 and 65 percent for text on the dark cards, and **hairline on dark (#ffffff14)** a faint white divider.

The generated extraction had chosen the lavender as primary because it belongs to the first CTA; I reassigned the role to #714cb6 because four of the five measured calls to action use it and the page's variable `--color-primary-base` resolves to it in light mode, keeping the lavender as its own token.

## Typography

One proprietary-looking variable family, loaded as **Super Sans VF** (weight axis 100 to 900), carries all text; the page also defines a serif (Super Serif VF) and a mono (Super Sans Mono VF) variable, but only the sans was measured in use. The fallback stack is system-ui first, then -apple-system, Segoe UI, Roboto and others. The site's CSS defines named weights including regular at 460 and bold at 700, and the page uses unusual intermediate values: 460, 540 and 600.

- **Display:** 45.6px, weight 460, line-height 54.72px, letter-spacing -1.254px (the hero headline). On a 390px viewport it is **display-mobile**, 32px/38.4px with -0.88px tracking. A 36.8px size with -1.012px tracking was also measured on the page (I did not map it to a specific element).
- **Subheading:** 24px, weight 460, 28.8px line-height, -0.66px tracking, the second most common size by character count (card statements).
- **Body:** 18px, weight 540, 27px line-height, -0.135px tracking.
- **Nav:** 16px, weight 460, 19.2px line-height. **Button:** 14px, weight 600, 18px line-height; **button-large:** 16px, weight 600, 16px line-height.

Negative tracking scales with size, so the large type feels tight while body copy stays open. Weights above 600 are not used in the measured text.

## Layout

The header is a full-width white bar with the Superhuman logo and wordmark at left, a mega-menu style row (Products, Solutions, AI, Resources, Pricing, Love), "Contact sales" and a bordered "Sign in" dropdown at right. Below it comes the lavender announcement bar and a full-bleed hero split into a dark text half and a screenshot half.

Content sections inside the 1280px viewport run edge to edge with a narrow outer margin in the capture, and use bordered cell rows and card mosaics: a wide card beside a narrow one, then two half-width cards. Section intros are centred with a small product badge ("SUPERHUMAN Go") above the headline.

Spacing follows an 4px-based rem scale defined in the CSS (`--space-1x` 4px up to `--space-40x` 160px) and the measured gaps are mostly 4px, 24px, 16px, 12px and 8px, then 40px, 64px and 32px for larger separations. Sections are separated by very large vertical whitespace on the off-white canvas.

## Elevation & Depth

Depth is created with colour blocks and thin rings rather than blurry shadows. The one measured shadow recipe stacks a 1px translucent warm-grey ring, a 4px/8px soft drop with -2px spread and two smaller drops, all at 4 to 6 percent warm-brown-grey opacity, plus a second faint 1px ring in the stone colour; it lifts white UI cards and the screenshot popovers. Two inset rings were also measured: a 1px grey inset on outlined controls and a 1px inset in lavender #d4c7ff on a dark-surface button.

Large images sit as cropped screenshots overlapping the coloured cards, which gives layered depth without elevation. The cookie banner is a translucent white panel over the hero. Avoid black drop shadows; keep to the warm, very low-opacity rings.

## Shapes

Only two radii were measured in quantity: 12px (sm, most frequent, large buttons and cards) and 8px (xs, the compact buttons). The CSS defines a wider rem-based radius scale, from 2px to 64px, with 4px, 6px, 10px, 14px, 16px, 20px and 24px steps, but those were not measured on the page elements I extracted, so they are not used here.

Cards in the mosaic have visibly large corners in the capture, and the logo is a rounded-square icon with a figure mark. Buttons are never pills and never sharp.

## Components

**Large purple button.** 52px tall, padding 6px 20px, 12px radius, #714cb6 fill with white 16px/600 label ("Try Go", "Try Docs", "Get Mail"). Hover darkens to #533192.

**Compact lavender button.** 36px tall, padding 6px 16px, 8px radius, #d4c7ff fill with #292827 14px/600 label, used on dark hero blocks; hover to #bea1f5. The "Request a demo" button also uses lavender at the larger 52px size.

**Text link with chevron.** "Learn more" with a right chevron, set in the label colour of the surface.

**Navigation.** White bar, 16px/460 links with small dropdown chevrons; "Sign in" is a bordered button with a chevron.

**Feature cards.** Deep maroon, teal or stone panels with a small 14px label above a 24px light statement, white or ink text depending on the surface, and a screenshot cropped at the card edge.

**Logo cells.** A bordered row of equal white cells with partner marks in dark ink.

**Tabs.** An underlined row with icons; the active tab has a dark underline.

**Footer.** Maroon (#421d24) with white text; the footer begins with "Builders of Superhuman Platform apps".

## Design System Architecture

Superhuman does not publish a public design-system site that I could find or open. Its press page (https://superhuman.com/press) points to a press kit and the media-assets page (https://www.superhuman.com/media-assets), which lists logo files (Superhuman lockups in wisteria, maroon and white, plus icon versions) but, as read, gives no colour codes, font families or usage rules. A brand page at https://superhuman.com/brand returned 404. There is no public source for the typeface licence either.

The de-facto system is visible in the shipped CSS, which exposes about 270 custom properties: primitive ramps (`--neutral-10` #f2f0eb through `--neutral-100` #141413, `--purple-0` through `--purple-100`, `--mulberry-*`, red, orange, yellow, green, sky and blue ramps), semantic tokens expressed with `light-dark()` (for example `--color-primary-base` light-dark(#714cb6, #d4c7ff), `--color-action-primary-hover` light-dark(#533192, #bea1f5), `--color-text-base` light-dark(#292827, #ffffff), `--color-border-focus` light-dark(#005fcc, #daedfb)), a `--space-{n}x` scale in 4px increments, a `--radius-{n}x` scale, a fluid `--font-size-display-*` and `--font-size-heading-*` set using `clamp()`, and font-family variables for sans, serif and mono. This indicates a token-driven system with built-in light and dark schemes.

## Do's and Don'ts

Do keep the canvas warm off-white (#f7f5f2) and use maroon, plum and teal blocks rather than black for dark surfaces.
Do use purple #714cb6 for the main action on light areas and lavender #d4c7ff on dark areas, never both on the same background.
Do set headlines in Super Sans VF at weight 460 with tight negative tracking, and keep buttons at 600.
Do use 12px radii for large buttons and cards, 8px for compact buttons.
Do pair each feature card with a short light-type statement and a cropped product screenshot.

Don't use pure black text; the ink is a warm #292827.
Don't use heavy dark shadows; keep to warm, 4 to 6 percent rings.
Don't round buttons into pills.
Don't use bold weights in headlines.
Don't put lavender buttons on the off-white canvas, where the purple primary takes over.

## Responsive Behavior

The extraction measured 1280px and 390px for the headline: it falls from 45.6px to 32px with line-height 38.4px and tracking -0.88px. The CSS defines fluid sizes with `clamp()` for display, heading and text sizes (for example the medium display size ranges between 44px and 76px depending on viewport width), so type scales continuously, not in steps. I did not measure how the card mosaic, header or logo row reflow at narrow widths, so that behaviour is not described here.

Keep large buttons at 52px for touch, preserve the cookie banner's two clear buttons, and use the fluid size tokens for headings.

## Iteration Guide

1. Start with canvas, page-body, ink, ink-soft, primary and on-primary; add primary-on-dark and the three surface colours next.
2. Set Super Sans VF at 460 for headings and nav, 540 for body, 600 for buttons, with the negative tracking from the tokens.
3. Build the two button sizes: 52px purple at 12px radius and 36px lavender at 8px radius.
4. Build a card mosaic from maroon, plum, teal and stone surfaces with cropped screenshots.
5. Use white at 80 and 65 percent opacity for text on dark surfaces.
6. Add new colours only from the site's neutral, purple and mulberry ramps.
