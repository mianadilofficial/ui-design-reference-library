---
version: alpha
name: Astro
category: "Frontend Frameworks"
description: "Astro's marketing site (astro.build) is a deep-night dark page: canvas #060913 with #0c0f19 panels, body copy in #bfc1c9 at weight 300, headlines in OH no Type's Obviously (48px/700 hero), a white #ffffff pill 'Get Started' CTA (9999px radius, 42px tall), 16px-radius cards with #23262d borders, and mint #4bf3c8 / amber #ffd493 eyebrow accents over purple-to-blue gradient art."
colors:
  canvas: "#060913"
  page-largest: "#0c0f19"
  ink: "#bfc1c9"
  primary: "#ffffff"
  surface-band: "#1a3e57"
  ink-strong: "#f2f6fa"
  ink-muted: "#858b98"
  accent-mint: "#4bf3c8"
  accent-amber: "#ffd493"
  hairline: "#858b9833"
  primary-hover-text: "#3245fff8"
  border-input: "#23262d"
  surface-card: "#07040f"
typography:
  display:
    fontFamily: Obviously, obviously-fallback, system-ui, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52.8px
  display-mobile:
    fontFamily: Obviously, obviously-fallback, system-ui, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 33px
  heading:
    fontFamily: Obviously, obviously-fallback, system-ui, sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 40px
  subheading:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 7.5px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 19.2px
  s10: 20.1px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.ink-strong}"
    textColor: "{colors.primary-hover-text}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 12px
    height: 40px
    borderColor: "{colors.border-input}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.border-input}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    borderColor: "{colors.hairline}"
---

# Astro

## Overview

Astro is the open-source web framework "for content-driven websites", and astro.build is its marketing home. The page measured at 1280px is a single long dark scroll (8926px tall) that opens on a full-bleed purple-to-violet gradient hero, centred headline "The web framework for content-driven websites", a small "Astro 7.4 Available now!" pill above it, a white pill "Get Started" button and a copyable `npm create astro@latest` command chip below it, then a two-row logo wall of companies that use Astro (Google, Unilever, Visa, Microsoft, Porsche, OpenAI, Netlify, NordVPN, Cloudflare, NBC News, The Guardian, Michelin, Proton, Webflow).

Below the hero the page settles onto a near-black navy canvas (#060913) and walks through product pillars — "Astro Islands", "Zero Lock-in", "Fully Featured", "Themes", "Get professional Astro support" — each introduced by a small coloured eyebrow label and an Obviously headline. A Core Web Vitals bar chart, a framework-picker with React/Vue/Preact/Svelte/Solid icons, a code editor panel, a dense feature-card grid, a themes gallery with tab filters, a partner-agency strip, a teal-gradient "Start building with Astro today" panel and a sponsor wall ("Astro is free, open-source software made possible by these wonderful sponsors") lead to a five-column footer with a newsletter field.

The voice is confident and plain: "Astro powers the world's fastest marketing sites, blogs, e-commerce websites, and more." The 2023 redesign was made with Streiloff & Co; Astro's own announcement says the team paired a dark-mode design with "a unique color palette and original illustration style" so the site would not resemble other devtools.

## Colors

Everything sits on dark navy. The body background is **canvas #060913**; the largest painted area is **page-largest #0c0f19**, used by the long feature section. A deep teal-blue **surface-band #1a3e57** paints a large block of background area. Cards in the store demo and elsewhere use **surface-card #07040f**, with **border-input #23262d** as both the text-input border and the card outline.

Text runs in three steps of cool grey-white. **ink #bfc1c9** is the most-read colour (paragraphs, header nav at rest); **ink-strong #f2f6fa** is used for h1/h2 headlines, links and footer text; **ink-muted #858b98** is used for secondary card text and captions. Pure white **#ffffff** is both the heading colour for h3 card titles and the fill of the primary CTA, so it is stored as `primary`.

Section eyebrows use small saturated accents: **accent-mint #4bf3c8** and **accent-amber #ffd493** are the two most frequent accent text colours. Other measured accent text colours, kept out of the token set because they are used sparingly, are #54b9ff, #acafff and #00daef. The framework demo's "Add to cart" button uses React's cyan #61dafb with #030712 text; it is part of an illustration of React integration, not the Astro UI palette, so it is not a token.

Hairlines are translucent grey: **hairline #858b9833** (the same #858b98 grey at 20% alpha) is the most common border colour and draws the footer rule. Hover on the white CTA swaps its fill to ink-strong #f2f6fa and its label to **primary-hover-text #3245fff8**, a vivid blue at near-full alpha. The hero and the closing panel get their colour from gradient artwork, not from flat tokens.

## Typography

Astro's announcement post names the brand faces: "OH no Type Company's Obviously as our main font for its versatility and bold personality" and "MDIO from Mass-Driver" for code. Both were measured as loaded fonts (Obviously as a 100–1000 variable range, MDIO at 400); Inter (300–600) is also loaded.

- **display** — Obviously 48px / 700 / 52.8px, the hero h1, centred. On the 390px mobile pass the same h1 measured 30px / 700 / 33px (**display-mobile**).
- **heading** — Obviously 36px / 300 / 40px for section h2s such as "Astro is a JavaScript web framework optimized for building fast, content-driven websites." Light-weight Obviously at large size is the signature contrast against the bold hero. Section titles "Zero Lock-in", "Fully Featured" and "Themes" measured at 30px.
- **subheading** — system sans (`ui-sans-serif`) 16px / 600 / 24px for card titles ("Content Collections").
- **body** — system sans 16px / 300 / 24px. Weight 300 is the most-read weight on the page, which gives paragraphs their thin, airy texture on dark.
- **button** — system sans 16px / 400 / 24px for CTA, nav and link labels.

Code samples use `ui-monospace` at 13.6px. Root variables expose a weight scale for headings (`--heading-weight-normal: 380`, `--heading-weight-bold: 475`, `--heading-weight-light: 290`) and for sans (`--sans-weight-normal: 200`, `--sans-weight-bold: 600`). Obviously is a commercial typeface; if it is unavailable, a wide grotesk with a variable weight axis is the nearest substitute, and the site's own fallback stack is `obviously-fallback, system-ui, sans-serif`.

## Layout

The desktop page is 1280px wide. The hero band (1020px tall) centres its content between x=288 and x=992. Later bands widen to a 32px side margin (content from x=32 to x=1248) with left-aligned headings. The pillar section uses three columns (Server-First, Content-Driven, Customizable); the feature section reaches four columns and the extractor recorded a maximum of three card columns in a row of cards.

Measured spacing clusters on a 4px grid: gaps of 8px (most common), 16px, 4px, 12px, 24px, 32px, 48px and 80px; paddings of 16px, 24px, 8px, 4px, 12px and 32px, and 160px appears twice. The spacing tokens s1–s10 are the small measured paddings (2px to 20.1px). Density is high in the feature grid — many small cards with icon, 16px title and two lines of 300-weight copy — and low in the hero and closing panel.

## Elevation & Depth

Depth comes from layering dark navy surfaces, translucent borders and gradient art rather than shadows. Only three box-shadows were measured, each used once; the header carries a Tailwind-style soft shadow (`rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px`). Semi-transparent fills such as #0d0f144d, #2c2c2c4d and #0609138c (the "Astro 7.4" pill) let gradient art show through, producing a glassy feel. The hero, the Core Web Vitals bar (a mint-to-blue gradient) and the closing teal panel provide the glow; flat surfaces stay matte.

## Shapes

Two shapes dominate. Pills (**pill 9999px**, 58 measured uses) are used for the primary CTA, the "Astro 7.4" announcement chip, the "Integrate your favorite framework" button and the themes filter tabs. Rounded rectangles cover cards and inputs: **sm 8px** (input, demo buttons), **md 12px**, **lg 16px** (store-demo card and feature cards) and **2xl 24px** (top corners of a card image well, measured as 24px 24px 0px 0px). **xl 20px** and **xs 7.5px** each appear once. There are no sharp-cornered interactive elements on the home page.

## Components

- **Primary button** — white #ffffff pill, 9999px radius, 8px 16px padding, 42px tall, 16px/400 label. At rest its computed text colour is transparent, so the visible label is painted by another layer that was not measured. On hover the fill becomes #f2f6fa and the text #3245fff8.
- **Ghost pill** — "Integrate your favorite framework": translucent #2c2c2c4d fill, #bfc1c9 text, 1px #858b984d border, 9999px radius, 8px 16px padding, 42px tall.
- **Announcement chip** — "Astro 7.4 Available now!": #0609138c fill, white 14px/300 text, pill radius, 36px tall.
- **Command chip** — the `npm create astro@latest` copy field under the CTA in the hero and the closing panel.
- **Header nav** — logo left, links (Documentation, Blog, Resources, Community, Enterprise) at 16px/300 in #bfc1c9 that turn #ffffff on hover; GitHub icon at the right.
- **Text input** — newsletter field: #060913 fill, #f2f6fa text, 1px #23262d border, 8px radius, 4px 12px padding, 40px tall, followed by a "Subscribe to our newsletter" button.
- **Card** — #07040f fill, 1px #23262d border, 16px radius, #858b98 secondary text.
- **Feature card** — icon or small illustration, 16px/600 white title, 300-weight grey description; arranged in a dense grid.
- **Footer** — #060913 background, #f2f6fa text, #858b9833 rule, columns Resources / About / Community / Legal plus the newsletter block.

## Design System Architecture

Astro does not publish a public design system or token package for its marketing site. The official brand material is the press page (https://astro.build/press), which provides the logo set — "Logo on light", "Gradient logo on dark", monochrome "Logo on dark", logomarks and the Starlight logo — plus rules: keep clear space around the logo, a minimum size of 24px tall on screen and 1/8" in print, never modify the logo or change its colours, and do not use the Houston mascot in your own materials. Typeface choices and the redesign partner (Streiloff & Co) are documented in https://astro.build/blog/welcome-world/.

The shipped CSS shows the de-facto system: Tailwind utility classes (`--tw-*` variables and a `translate-y-[3px]` class on the logo SVG), Expressive Code variables (`--ec-*`) for code blocks (for example `--ec-codeBg: #17191e`, `--ec-focusBrd: #00daef`), and a small set of custom properties that define the heading and sans weight scales (`--heading-weight-normal: 380`, `--sans-weight-bold: 600`).

## Do's and Don'ts

**Do**
- Keep the page on #060913 / #0c0f19 and let gradient artwork supply colour.
- Set big headlines in Obviously, mixing a bold 700 hero with light 300 section headings.
- Write body copy in #bfc1c9 at weight 300, 16px/24px.
- Use a single white pill as the main action, with a command chip beside or under it.
- Introduce sections with a short coloured eyebrow in #4bf3c8 or #ffd493.
- Use translucent #858b9833 hairlines and 16px-radius cards for grouping.

**Don't**
- Don't put the white CTA on a light background; the system has no light theme on the home page.
- Don't add heavy drop shadows; the page uses almost none.
- Don't recolour or modify the Astro logo, and don't use Houston in your own materials (press page rules).
- Don't treat #61dafb as an Astro colour; it is React's cyan inside a demo.
- Don't use bold weights for paragraphs — 300 is the reading weight.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 drops from 48px to 30px (line-height 33px) and h2 from 36px to 24px (line-height 32px); body text stays 16px/300/24px. The primary CTA keeps its pill radius, 8px 16px padding and 42px height. Content runs from x=16 to x=374, giving 16px side margins. The header shows one visible link and a visible menu toggle labelled "Show Menu"; the desktop header shows four links and no toggle. The maximum card columns measured drops from three to two. Behaviour between these two widths was not measured, and the contents of the opened mobile menu were not measured.

## Iteration Guide

1. Start from canvas #060913, ink #bfc1c9 and ink-strong #f2f6fa; add #0c0f19 for large panels and #07040f with a #23262d border for cards.
2. Load Obviously for display (48px/700 hero, 36px/300 sections) and the system sans stack for everything else at 16px.
3. Build the primary button as a white 9999px pill, 8px 16px, 42px tall; hover to #f2f6fa with #3245fff8 text.
4. Add accents only as eyebrows or data highlights (#4bf3c8, #ffd493).
5. Lay out on a 4px grid using 8px/16px/24px/32px gaps and 32px side margins at 1280px; 16px margins at 390px.
6. Check that new colours trace to the measured palette before adding them; when unsure, use a translucent tint of #858b98.
