---
version: alpha
name: StackBlitz
category: "Developer Tools & IDEs"
description: "StackBlitz's home page is dark slate #1c1f25 with Manrope 600 headlines (94px/94px, -2px), Inter 16px/32px body in white at 80% (#ffffffcc), a #1574ef 'Try Bolt.new' button with 10px radius and inset white ring, cyan #4cedff highlights, and a pale #fbfeff testimonial band with a 6px-radius white card."
colors:
  canvas: "#1c1f25"
  page-body: "#1c1f25"
  surface-deep: "#1a1d22"
  surface-light: "#fbfeff"
  surface-white: "#ffffff"
  ink: "#ffffffcc"
  ink-strong: "#ffffff"
  ink-muted: "#a1a5b0"
  ink-faint: "#ffffff4d"
  ink-on-light: "#000000"
  primary: "#1574ef"
  on-primary: "#ffffff"
  primary-hover: "#0f8fff"
  accent-cyan: "#4cedff"
  accent-cyan-light: "#69f5ff"
  accent-cyan-deep: "#00a8db"
  hairline: "#ffffff1f"
  button-secondary-bg: "#313d5e3d"
typography:
  display:
    fontFamily: Manrope, sans-serif
    fontSize: 94px
    fontWeight: 600
    lineHeight: 94px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: Manrope, sans-serif
    fontSize: 34px
    fontWeight: 600
    lineHeight: 34px
    letterSpacing: "-1px"
  subheading:
    fontFamily: Manrope, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: "-0.5px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 500
  button-secondary:
    fontFamily: Inter, sans-serif
    fontSize: 13px
    fontWeight: 500
rounded:
  xs: 6px
  sm: 8px
  md: 10px
  lg: 20px
  xl: 42px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 32px
    height: 52px
    boxShadow: rgba(255, 255, 255, 0.14) 0px 0px 0px 1px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
    boxShadow: rgba(255, 255, 255, 0.24) 0px 0px 0px 1px inset
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 0px 20px
    height: 36px
    boxShadow: rgba(255, 255, 255, 0.08) 0px 0px 0px 1px inset
  nav:
    textColor: "{colors.ink-strong}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    padding: 6px 8px
  card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-on-light}"
    rounded: "{rounded.xs}"
    padding: 32px 36px 0px
    boxShadow: rgba(29, 78, 106, 0.12) 0px 4px 12px 0px, rgb(255, 255, 255) 0px 0px 0px 1px inset
  footer:
    textColor: "{colors.ink-strong}"
---

# StackBlitz

## Overview

StackBlitz (stackblitz.com) makes browser-based development environments built on WebContainers, and the company behind Bolt.new. The measured home page is titled "StackBlitz | Instant Dev Environments | Click. Code. Done." and its hero reads "How product & engineering teams work together with AI", with the words "product" and "engineering" set in lighter weight inside highlighted boxes that look like selected elements in an editor — one with corner handles, one with a filled rounded box. Behind the headline, a faint code-editor screenshot fades into the dark background. The subcopy ("Turn text into working web apps. Bolt handles the code while you focus on your vision, letting you create and launch applications directly from your browser") sits above a single blue "Try Bolt.new" button.

The rest of the page alternates dark slate sections washed with soft purple, teal and blue glows: "Loved by frontend and product teams at the world's largest and most innovative companies" over a two-row white logo grid (Google, Meta, Shopify, Salesforce, Intel, Mozilla, Cloudflare, Stripe); a pale near-white testimonial band with a quote from Ilya Grigorik of Shopify; "Powered by WebContainers — Faster and more secure than local." with the key words in cyan; a white "Introducing WebContainers: Run Node.js in your browser" card; a comparison table "What about online IDEs?" (StackBlitz vs Legacy Online IDEs, with green ticks and red crosses); and a closing "See for yourself. Build your first app in minutes." with an outlined "Create with Bolt.new" button, then a six-column footer.

The tone is developer-confident and comparative — "Legacy cloud-based IDEs run on remote servers and stream the results back to your browser" — with bold phrases inside body copy carrying the argument.

## Colors

- **Canvas / page-body `#1c1f25`** — the body background (`--public-dark-bg-90`) and the colour of most of the page on screen.
- **Surface-deep `#1a1d22`** — darker panels such as the comparison table cells; a translucent `#151619f5` surface was also measured.
- **Surface-light `#fbfeff`** — the pale testimonial band, the largest single background by DOM area. **Surface-white `#ffffff`** — the WebContainers card.
- **Ink `#ffffffcc`** — white at 80%, the most-read text (`--public-dark-text-80`). **Ink-strong `#ffffff`** — headings, nav and footer headings. **Ink-muted `#a1a5b0`** — footer links and captions. **Ink-faint `#ffffff4d`** — the smallest legal text. **Ink-on-light `#000000`** — text in the testimonial band and on the white card.
- **Primary `#1574ef`** with **on-primary `#ffffff`** — the "Try Bolt.new" button; hover brightens to **`#0f8fff`** and strengthens the inset ring from 14% to 24% white.
- **Accent-cyan `#4cedff`** (`--public-blue-text-20`), **accent-cyan-light `#69f5ff`** (`--public-blue-text-10`) and **accent-cyan-deep `#00a8db`** (`--public-blue-text-50`) — highlighted headline words ("Faster", "more secure"), the "Powered by WebContainers" eyebrow and the "Read the release" link.
- **Hairline `#ffffff1f`** — white at 12%, the borders of the comparison table and dividers.
- **Button-secondary-bg `#313d5e3d`** — the translucent slate fill of "Sign in"; hover raises it to 54% opacity.

Small accent fills `#33ffcc` (teal) and `#ed5e6a` (red) were each measured once as small fills.

## Typography

- **Manrope** (400, 600, 700, 800 loaded) sets headlines. The hero `display` is 94px/94px at weight 600 with -2px tracking; the highlighted words "product" and "engineering" measure at weight 400. Other Manrope sizes: 72px with -3px tracking, 40px and 32px with -0.5px, 30px with -1px, 24px with -0.5px. The "Loved by…" line (`subheading`) is 32px/38.4px at 400 with a bold second line.
- **Inter** (400, 500, 600) sets body copy and UI: `body` is 16px/32px — a very open 2.0 line height — and nav and secondary buttons use 13px/500. The primary button is 16px/500.
- **PT Mono** appears on a few characters; the CSS declares `--font-family-code: Roboto Mono, monospace` and an `Inter Tight` face, which did not measure on visible text.

Inter carries the most characters (1,439), Manrope 250. Both are open-source Google Fonts, so no substitute is needed.

## Layout

At 1280px the page is 4,453px tall. The header is 72px tall with `0px 24px` padding: the StackBlitz logo and three links (Bolt.new, WebContainers, Careers) at left, "Sign in" at right; five header links were counted. Hero content starts 52px from the left edge (`--layout-content-padding-large: 52px`), and the layout's maximum content width is `--layout-content-width: 1440px`. The hero band is 776px tall with left-aligned text.

Spacing is generous between sections and tight inside them: paddings of 8px and 26px appear most, then 32px, 16px, 24px and 52px, with 72px, 92px and 156px used for section padding. Gaps include 36px (the most frequent), 16px–32px between elements, and 100px between larger blocks. The logo grid is four columns by two rows; the comparison section is a two-column text-plus-table layout; the footer has six columns (logo, Products, Platform, Legal, Support, Company).

## Elevation & Depth

The page relies on inset rings and atmospheric glows rather than drop shadows. Buttons carry 1px inset white rings (8% on "Sign in", 14% on the primary, rising on hover). Two elements use a 1px inset black ring at 30%. The white WebContainers card is the one lifted element: `rgba(29, 78, 106, 0.12) 0px 4px 12px 0px` plus a 1px inset white ring. A composite on one element combines a `rgb(16, 23, 30) 0px -1px 0px` inset edge, a `rgba(13, 135, 222, 0.24)` inset ring and a `rgba(0, 0, 0, 0.32) 0px 4px 8px` drop. Section backgrounds use large blurred purple, teal and blue light blooms that give depth to the dark bands.

## Shapes

- **10px** — the primary button.
- **8px** — the "Sign in" button and the outlined closing button.
- **6px** — the WebContainers card; a `6px 6px 0px 0px` variant rounds only the top of one panel.
- **20px** and **42px** — one element each.
- **50%** — the testimonial avatar.

Corners are small and consistent; nothing on the page is pill-shaped except the avatar.

## Components

- **button-primary** — "Try Bolt.new": `#1574ef` fill, white Inter 16px/500, 10px radius, `0px 32px` padding, 52px tall, 14% white inset ring. Hover: `#0f8fff` with a 24% ring.
- **button-secondary** — "Sign in": `#313d5e3d` fill, 80% white 13px/500 text, 8px radius, `0px 20px` padding, 36px tall, 8% inset ring. Hover: full white text, 54% slate fill, 14% ring.
- **Outlined button** — "Create with Bolt.new" in the closing section: a cyan-outlined rectangle with white text.
- **nav / nav-link** — white Inter links with `6px 8px` padding; hover keeps the colour unchanged (measured).
- **card** — "Introducing WebContainers": white, 6px radius, `32px 36px 0px` padding, 574×196px, black Manrope title, cyan "Read the release →" link and an illustration bleeding off the right edge.
- **Comparison table** — `#1a1d22` cells divided by `#ffffff1f` hairlines; the StackBlitz column is highlighted, with green tick and red cross icons.
- **Testimonial** — pale `#fbfeff` band, round avatar with a Shopify badge, a quote with bold emphasis, name and title in small grey text.

## Design System Architecture

StackBlitz has no public brand page (https://stackblitz.com/brand returns 404), and its GitHub organisation https://github.com/stackblitz pins `bolt.new` and `webcontainer-core` with no design-system or token repository. The site is an Astro build (assets under `/_astro/`), and its CSS exposes a named variable system: `--brand-gray-25` to `--brand-gray-950`, `--brand-teal-50` to `--brand-teal-800`, `--brand-blue-*`; "public" semantic roles for both themes such as `--public-dark-bg-00: #16181d`, `--public-dark-bg-90: #1c1f25`, `--public-dark-text-70/80`, `--public-light-text-90`, `--public-blue-text-10/20/50/60`, `--public-pink-text-*`, `--public-orange-text-mid`, `--public-button-background`; app-level `--sb-foreground-*` values in HSL; and layout variables `--layout-content-width: 1440px` and `--layout-content-padding-large: 52px`. Fonts are declared as `--font-family-base: Inter, sans-serif` and `--font-family-code: Roboto Mono, monospace`.

## Do's and Don'ts

**Do**
- Use the dark slate `#1c1f25` as the page and white at 80% for reading text.
- Set headlines in Manrope 600 with tight negative tracking; lighten individual words to weight 400 for emphasis.
- Keep one blue `#1574ef` action per view, with a faint inset white ring.
- Highlight key headline words in cyan `#4cedff`.
- Break the dark page with one pale `#fbfeff` band for social proof.
- Give body copy the open 16px/32px rhythm.

**Don't**
- Don't use heavy drop shadows on dark surfaces; use 1px inset rings.
- Don't use pill-shaped buttons; radii are 8px–10px.
- Don't introduce new hues beyond blue, cyan and the soft background glows.
- Don't set long text in pure white; the measured reading colour is 80% white.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero `display` drops from 94px/94px to 34px/34px with -1px tracking; body text grows slightly from 16px/32px to 17px/34px; the "Try Bolt.new" button keeps its 52px height, 10px radius and `0px 32px` padding. The mobile header measured 72px tall with `0px 16px` padding; a "Toggle Menu" control was detected as visible, with 1 header link visible. Content spans 18px to 372px and 1 card column was counted. Mobile font sizes recorded: 17px, 13px, 12px, 18px, 24px, 9px, 32px, 14px, 42px, 16px. Breakpoint widths and the comparison table's mobile layout were not measured.

## Iteration Guide

1. Set the page to `#1c1f25` with 80%-white Inter body text at 16px/32px.
2. Add the hero in Manrope 600 94px with -2px tracking, left-aligned from a 52px gutter.
3. Place one `button-primary` (`#1574ef`, 10px radius, inset ring).
4. Add soft coloured glows behind section bands rather than flat colour blocks.
5. Use `#fbfeff` for a single light testimonial band and white `card` for announcements.
6. Highlight comparison words in cyan; compare with https://stackblitz.com before shipping.
