---
version: alpha
name: Fly.io
category: "Backend, Database & DevOps"
description: "Fly.io pairs a Mackinac serif display (72px/500, -1.44px tracking, #2e2e2e) with Fricolage Grotesque body text in muted violet-grey #686082 on white, #7c3aed violet 8px-radius buttons that darken to #6d28d9, 10px-radius #f4f3fb cards with #d5cfef hairlines, pastel watercolor gradient bands and a #191034 night-violet footer."
colors:
  canvas: "#ffffff"
  ink: "#686082"
  primary: "#7c3aed"
  on-primary: "#ffffff"
  surface-cream: "#f4f6eb"
  surface-night: "#191034"
  ink-heading: "#000000"
  ink-muted: "#a39ac1"
  ink-nav: "#281950"
  ink-display: "#2e2e2e"
  hairline: "#d5cfef"
  primary-hover: "#6d28d9"
  text-input-bg: "#22183c"
  text-input-border: "#42385f"
  card-bg: "#f4f3fb"
  primary-soft: "#e6e0fe"
  primary-soft-border: "#d4c4fd"
  accent-mint: "#6ee7b7"
typography:
  display:
    fontFamily: Mackinac, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 72px
    fontWeight: 500
    lineHeight: 68.4px
    letterSpacing: "-1.44px"
  display-mobile:
    fontFamily: Mackinac, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 34.71px
    fontWeight: 500
    lineHeight: 32.9745px
    letterSpacing: "-0.6942px"
  display-banner:
    fontFamily: Mackinac, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 48px
    fontWeight: 500
    letterSpacing: "-1.2px"
  heading:
    fontFamily: Mackinac, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 41.4px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: Mackinac, ui-serif, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 27.6px
    letterSpacing: "-0.48px"
  body:
    fontFamily: "\"Fricolage Grotesque\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 19px
    fontWeight: 450
    lineHeight: 28.5px
  button:
    fontFamily: "\"Fricolage Grotesque\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 15.5px
    fontWeight: 450
    lineHeight: 23.25px
  nav:
    fontFamily: "\"Fricolage Grotesque\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14.5px
    fontWeight: 450
    lineHeight: 21.75px
  label:
    fontFamily: "\"Fricolage Grotesque\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 12px
    fontWeight: 575
    lineHeight: 18px
    letterSpacing: "0.6px"
    textTransform: uppercase
  input:
    fontFamily: "\"Fricolage Grotesque\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 14.5px
    fontWeight: 325
    lineHeight: 21.75px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 20px
    height: 48px
    boxShadow: rgba(221, 214, 254, 0.25) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0) 0px 0px 0px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    height: 40px
  button-soft:
    backgroundColor: "{colors.primary-soft}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    border: "1px solid #d4c4fd"
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 80px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.lg}"
    padding: 40px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-night}"
    textColor: "{colors.canvas}"
    padding: 80px 0px 32px
---

# Fly.io

## Overview

Fly.io's home page (title "Fly.io | Computers for agents") is a storybook take on infrastructure marketing. A white #ffffff header with the purple balloon logo and a row of plain links (Products, Docs, Customers, Pricing, Articles, Community, Status) sits above a hero washed in pastel sky blue, pink and lavender, where a hand-drawn illustration of birds perched on a purple server tower fills the right half. The headline "Computers for agents" is set in Mackinac, a soft high-contrast serif, at 72px — the only really large type on the page — next to a short two-line pitch in Fricolage Grotesque and a single violet "Start for Free" button with a quiet "Onboard your agent" text link beside it.

Below the hero runs a strip of grayscale customer logos (Supabase, Replicate, Builder.io, Firecrawl, Kilocode, Hatchet), then a centred two-line serif heading ("Sprites: where your agent runs. Machines: where you run what it builds.") over two lavender cards, each topped with an illustration. The rest of the page alternates white sections and rounded pastel gradient panels: "Machines that Remember" with a horizontally scrolling card carousel, "A Real Durable Filesystem" with a checkmark list, "Nothing to Manage" and "A Connection to Everything" with three illustrated cards each, a stats grid ("18+ Regions worldwide", "<1 second Machine boot time", "500ms", "99.9%"), and "Support that knows the stack" with three quote cards. The page closes on a deep violet band ("Give your agent a computer. Start free.") with the second line in mint #6ee7b7, then the #191034 footer with uppercase column labels and a newsletter field.

The tone is friendly and dry: "Sandboxes aren't enough.", "The bill goes to zero when nobody's home.", "Grow without drama". Whimsical illustration (the about page credits an in-house illustrator) carries the personality; the typography and violet accents keep it product-like.

## Colors

- **Canvas #ffffff** — the page background and the header.
- **Ink #686082** — the most-read text color (3,132 characters): body paragraphs and the header's own text color. It is a greyed violet rather than a neutral grey.
- **Ink-heading #000000** — 1,336 characters: h2 and h3 headings, card titles and the quote paragraphs.
- **Ink-display #2e2e2e** — the 72px hero headline.
- **Ink-nav #281950** — header link color (152 characters, plus a 75%-alpha variant #281950bf).
- **Ink-muted #a39ac1** — 306 characters of lighter secondary text.
- **Primary #7c3aed** — every solid call to action ("Start for Free", "Sign Up", "Set up a connector", "Get support") and the "Explore Sprites" style text links. Header links turn #7c3aed on hover.
- **Primary-hover #6d28d9** — solid buttons and "Explore …" links on hover; also the focused button fill.
- **Primary-soft #e6e0fe / primary-soft-border #d4c4fd** — the "Log In" button: violet text on a pale violet fill with a #d4c4fd border; on hover the fill becomes #d4c4fd.
- **Card-bg #f4f3fb** and **hairline #d5cfef** — the lavender card fill and its 1px border (16 borders use #d5cfef). Quote cards use the same fill at 75% alpha (#f4f3fbbf).
- **Surface-cream #f4f6eb** — a measured background area (696 units, third largest).
- **Surface-night #191034** — the footer. **Text-input-bg #22183c / text-input-border #42385f** — the footer newsletter input.
- **Accent-mint #6ee7b7** — the "Start free." second line in the closing banner.
- **On-primary #ffffff** — labels on violet.

A pale sky blue (#cae3fd) was measured as the fill of the band directly under the header, where the hero gradient begins.

## Typography

Two loaded web fonts: **Mackinac** (weight 500 only) for headings and **Fricolage Grotesque** (a variable font loaded across weights 100–900) for everything else. Fricolage accounts for 4,999 measured characters, Mackinac 326.

- **Display** — Mackinac 72px/68.4px, weight 500, letter-spacing -1.44px (-0.02em).
- **Display-banner** — Mackinac 48px weight 500, -1.2px tracking (closing "Give your agent a computer." banner).
- **Heading** — Mackinac 36px/41.4px, 500, -0.72px.
- **Subheading** — Mackinac 24px/27.6px, 500, -0.48px (card titles such as "Sprites", "Machines").
- **Body** — Fricolage Grotesque 19px/28.5px, weight 450. The body element itself is 17px/25.5px, and 17px is the second most common size (1,578 characters).
- **Button** — Fricolage 15.5px/23.25px, 450. **Nav** — 14.5px/21.75px, 450.
- **Input** — 14.5px weight 325. Weight 325 is the single most used weight on the page (3,223 characters), so a lot of running text is set lighter than the 450 used for the measured body sample.
- **Label** — 12px/18px, weight 575, uppercase, +0.6px tracking: footer column labels such as "COMPANY" and "ARTICLES".

Mackinac and Fricolage Grotesque are both loaded from the site; if unavailable, the declared fallbacks are `ui-serif, Georgia, Cambria, "Times New Roman"` and `ui-sans-serif, system-ui`. A soft old-style serif paired with a quirky grotesque is the character to preserve; a substitute such as Georgia for display loses the softness, so prefer licensing the originals.

## Layout

Measured at 1280px wide. The header is 96px tall with 0px 80px padding, logo left and links plus the Log In / Sign Up pair right. The hero band (y 179–816) spans content from x=74 to x=1206 with the headline left-aligned. The main white band runs x=58 to x=1180 and holds up to 3 columns; the widest repeated structure measured is 5 columns. Cards in the Sprites/Machines pair are 532px wide with 40px padding; quote cards are 299px wide with 32px padding.

Gaps measured: 24px (most common), 12px, 8px, 32px, 64px, 16px, 40px, 28px and 100px. Paddings: 12px, 24px, 32px, 10px, 100px, 16px, 8px, 20px, 40px, 150px, 80px and 96px. Sections are generous — 100px and 150px paddings separate the pastel panels — and the copy blocks inside them are short, so the page reads as airy and illustration-led. The footer uses 80px 0px 32px padding.

## Elevation & Depth

Depth is soft. Primary buttons carry a 1px inset ring `rgba(221, 214, 254, 0.25) 0px 0px 0px 1px inset` rather than a drop shadow. Four elements use a diffuse `rgba(0, 0, 0, 0.1) 0px 2px 25px 0px` shadow, and one element uses a stacked Tailwind-style shadow `rgba(0, 0, 0, 0.2) 0px 10px 15px -3px, rgba(0, 0, 0, 0.2) 0px 4px 6px -4px` with a white inset ring. Most separation comes from color: lavender cards on white, pastel gradient panels with rounded corners, and the dark footer. Focused buttons gain a `rgba(255, 255, 255, 0.1) 0px 0px 0px 3px` halo and the #6d28d9 fill; focused links get a 1px auto #7c3aed outline.

## Shapes

Rounded but restrained. Measured radii: 8px (12 elements — all buttons and the text input), 10px (cards), 20px (the large pastel section panels), 6px and 4px on small elements, and 9999px pills (3 elements). Cards have 1px #d5cfef borders. Illustrations are organic and hand-drawn, which contrasts deliberately with the clean rectangles of the UI.

## Components

- **Primary button** — #7c3aed fill, #ffffff label, Fricolage 15.5px/450, 8px radius, 48px tall, 0px 20px padding, inset violet ring; hover #6d28d9.
- **Header Sign Up** — same violet, 14.5px label, 40px tall, 120px wide.
- **Soft button (Log In)** — #e6e0fe fill, #7c3aed label, `1px solid #d4c4fd`, 8px radius, 40px tall; hover fill #d4c4fd.
- **Text link** — #7c3aed at body size ("Explore Sprites"), hover #6d28d9.
- **Card** — #f4f3fb fill, 1px #d5cfef border, 10px radius, 40px padding, an illustration above a Mackinac 24px title and #686082 text.
- **Quote card** — same fill at 75% alpha, 32px padding, 19px black quote text, small attribution at the bottom.
- **Stat** — large violet number over a small grey caption, in a 2×2 grid with hairline dividers.
- **Text input** — #22183c fill, #42385f border, white 14.5px/325 text, 8px radius, 40px tall, 8px 12px padding (footer newsletter).
- **Footer** — #191034, uppercase 12px/575 column labels, white links, a newsletter row with input and violet Subscribe button.

## Design System Architecture

No public design system or brand-guidelines page was found: https://fly.io/brand returned HTTP 404, and https://fly.io/about lists the team (including an illustrator) but links no brand kit. The de-facto system is visible in the shipped CSS, which is Tailwind-based: root variables are Tailwind's ring and shadow plumbing (`--tw-ring-shadow`, `--tw-shadow-colored`, `--tw-text-shadow-color: rgb(91 33 182 / 0.25)`). Breakpoints in the stylesheet are 480, 640, 768, 1024, 1200, 1400 and 1500px plus larger 1728/1920px queries. Typography is the custom layer on top: Mackinac and Fricolage Grotesque are loaded as web fonts.

## Do's and Don'ts

**Do**
- Set headings in Mackinac 500 with slight negative tracking (-0.02em) and body copy in Fricolage Grotesque.
- Use #686082 for running text and reserve #000000 for headings.
- Make every solid action #7c3aed with an 8px radius, darkening to #6d28d9 on hover.
- Put content on #f4f3fb cards with a 1px #d5cfef border and 10px radius.
- Let hand-drawn illustration and pastel gradient panels carry the personality.
- Keep copy short and wry.

**Don't**
- Don't use bold weights for headings — Mackinac is loaded at 500 only.
- Don't use pure grey text; the measured grays are violet-tinted.
- Don't add heavy drop shadows to cards; the measured cards have borders, not shadows.
- Don't introduce a second saturated accent beyond violet and the mint closing line.
- Don't square off buttons or cards.

## Responsive Behavior

Measured at a 390px viewport: the header shrinks from 96px to 56px with 0px 16px padding, only 1 header link remains visible, and a menu toggle labelled "Open main menu" is visible (the extractor's mobile pass recorded it). The hero headline drops from 72px to 34.71px/32.97px with -0.6942px tracking (the `display-mobile` token), and h2 headings drop from 36px to 30px/34.5px with -0.6px tracking. Body quote text stays 19px/28.5px, and 17px remains the most common size. The primary button keeps its 48px height, 15.5px label and 0px 20px padding. Mobile content runs from x=24 to x=366 in the main band and x=16 to x=374 in the closing and footer bands, with up to 2 columns recorded per band. The full mobile page is about 11,900px tall versus 7,821px on desktop. Carousel and card arrangement on mobile were not measured beyond these values.

## Iteration Guide

1. Start with white canvas, #686082 Fricolage text and #000000 Mackinac headings at 72/36/24px with -0.02em tracking.
2. Add the 96px header: logo, plain links in #281950 (hover #7c3aed), soft Log In and violet Sign Up.
3. Build sections as rounded 20px pastel gradient panels separated by 100–150px padding.
4. Place content on #f4f3fb 10px-radius cards with #d5cfef borders and an illustration on top.
5. Use one #7c3aed 48px CTA per section; hover to #6d28d9.
6. End with the violet banner (white + #6ee7b7 lines) and the #191034 footer with 12px uppercase labels.
7. On mobile use the measured 34.71px hero and 30px h2; re-run the gate after each token change.
