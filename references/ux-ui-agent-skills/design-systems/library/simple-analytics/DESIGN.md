---
version: alpha
name: Simple Analytics
category: "Product & SaaS"
description: "Simple Analytics' site: a #fcfcfc canvas with teal-grey inks (#2a373a headings, #425659 body), Space Grotesk at 36px/700 for headlines and 16px/24px for copy, coral-red #ff4f64 pill CTAs with a tinted glow that darken to #de3243, 16–24px-radius white cards with #d0e1e3 borders, and hand-drawn line charts as section dividers."
colors:
  canvas: "#fcfcfc"
  ink: "#425659"
  primary: "#ff4f64"
  on-primary: "#ffffff"
  primary-hover: "#de3243"
  ink-strong: "#2a373a"
  ink-heading: "#1f2728"
  ink-muted: "#697d80"
  ink-faint: "#8da3a6"
  diagram-ink: "#000000"
  surface-footer: "#f9fbfb"
  surface-white: "#ffffff"
  card-bg: "#fffffff2"
  nav-hover-bg: "#e7f4f4"
  focus-cyan: "#63d8f5"
  hairline: "#d0e1e3"
typography:
  display:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
  heading:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 45px
  subheading:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  link:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  label-caps:
    fontFamily: SpaceGrotesk, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.6px
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 24px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 40px
    height: 64px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(255, 79, 100, 0.2) 0px 10px 15px -3px, rgba(255, 79, 100, 0.2) 0px 4px 6px -4px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 44px
  button-outlined:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 40px
    border: "2px solid #ff4f64"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-strong}"
    height: 80px
  nav-link:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  nav-link-hover:
    backgroundColor: "{colors.nav-hover-bg}"
    textColor: "{colors.ink-heading}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(203, 213, 225, 0.2) 0px 20px 25px -5px, rgba(203, 213, 225, 0.2) 0px 8px 10px -6px
  comparison-card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-faint}"
    borderColor: "{colors.hairline}"
---

# Simple Analytics

## Overview

Simple Analytics (simpleanalytics.com) sells cookieless, privacy-first web analytics, here positioned as a layer that runs "alongside GA4". The home page was measured at 1280px (7237px tall) and 390px. It is a light, airy page on a #fcfcfc canvas. Text uses cool teal-grey inks, one typeface (Space Grotesk) carries every role, and a single coral-red brand color (#ff4f64, declared as `--color-brand-red`) marks actions and key words.

From the top: an 80px header with the logo and "Simple Analytics" wordmark, the menus Product, Why Simple Analytics, Solutions, Pricing and Docs, then "Log in" and a red "Book a demo" pill. The hero is split. On the left sit four small review and trust badges (one reads "CAPTERRA 4.8"), the headline "See the traffic Google Analytics misses", a two-line pitch, a red "Book a demo" pill with a "View live dashboard" link, and four check-marked claims (No cookies, No personal data, No visitor IDs, EU-hosted). On the right, a white card titled "The consent gap" plots "Traffic reported (GA4)" against "Traffic observed (Simple Analytics)". A logo row follows (Bloomberg, Polkadot, Sketch and others), then a hand-drawn jagged line chart in coral that works as a section divider.

Further down: a "Where GA4 loses visibility" diagram of a traffic pipe leaking through a cookie banner and ad-blockers, "Add a **cookieless** layer to GA4." with three comparison cards (Google Analytics + Simple Analytics = Combined), "Compare it on your own website", "Send missing traffic data into **your own systems**" (API and exports, BI tools, Data warehouse beside a flow diagram), "Why Simple Analytics does not require **analytics consent**" with a two-column We do / We don't list and a row of compliance badges (GDPR, PECR, ePrivacy, CNIL, DSGVO, CCPA), "Trusted by teams that need a **clearer** picture" with a large logo wall, a DuckDuckGo quote, "How Simple Analytics works" around a dashboard screenshot with floating callouts, a final "Ready to compare it on your own website?" CTA, and a five-column footer. Coral and cyan jagged line charts separate the major sections.

The voice is analyst-to-analyst: concrete and comparative ("Advanced Consent Mode can send cookieless pings", "Two measurement methods"). Key nouns in headlines are highlighted in brand red.

## Colors

- **Canvas — #fcfcfc.** The `body` and the largest background area (5120).
- **Surface white — #ffffff.** Cards and the outlined button (area 1035).
- **Surface footer — #f9fbfb.** The lower bands and the footer (area 740). Other measured band tints are #f3f8f8 (the "Compare it" band) and #fcf3f5 (a pink-tinted divider band).
- **Card background — #fffffff2.** 95% white for floating cards over the charts.
- **Ink — #425659.** Body copy (2431 characters), a teal-tinted slate.
- **Ink strong — #2a373a.** The h1, h2, nav and links (990 characters).
- **Ink heading — #1f2728.** Card titles (h3) and nav hover text.
- **Ink muted — #697d80.** Captions and card labels (812 characters).
- **Ink faint — #8da3a6.** Footer column labels.
- **Diagram ink — #000000.** Labels inside the illustrated pipeline diagram (286 characters).
- **Primary — #ff4f64.** Every "Book a demo" fill, the outline of "See how it works", the highlighted headline words (303 characters of red text) and the line-chart dividers. Hover darkens fills to #de3243.
- **Nav hover background — #e7f4f4.** The pale teal wash on hovered nav items.
- **Focus cyan — #63d8f5.** The 4px focus ring color (`rgb(99, 216, 245)`), also used in the cyan line charts (#64d8f5).
- **Hairline — #d0e1e3.** The dominant border color (32 elements) on cards, badges and the footer.

Status accents measured in small amounts: amber #d97706 with #f59e0b border (the Capterra badge hover turns #fffbeb with an amber border), green #047857, and pink #ffc0cb / #ffeef1 inside diagrams.

## Typography

**Space Grotesk** (loaded as "SpaceGrotesk", weights 400, 500, 600 and 700) sets 5080 of the measured characters. Inter was measured on 216 characters. The fallback stack is `ui-sans-serif, system-ui, sans-serif` plus emoji fonts.

Measured roles:

- **Display (h1)** — 36px / 45px, weight 700, #2a373a.
- **Heading (h2)** — 30px / 45px, weight 700. Section statements such as "Add a cookieless layer to GA4." also measure 36px.
- **Subheading (h3)** — 18px / 28px, weight 700, #1f2728.
- **Body** — 16px / 24px, weight 400, #425659.
- **Button / nav** — 18px / 28px, weight 500 (16px / 24px for small buttons).
- **Link** — 14px / 20px, weight 500.
- **Caps label** — 12px / 16px, weight 600, 0.6px tracking, uppercase (footer column headings "PRODUCT", "WHY SIMPLE ANALYTICS"). Other caps labels: 10px with 2px tracking, 12px with 1.2px, 14px with 1.4px, 10px with 0.5px (review badges).

By character count: 14px (1699), 16px (1471), 18px (755), 12px (568), 36px (195), 11px, 20px, 30px. Weights: 400 (3474), 700 (708), 600 (607), 500 (501). One 40px element uses -3px tracking.

## Layout

The desktop hero spans 32px to 1248px. Later sections center within roughly 152px to 1128px, and the "Compare" band narrows to 328px–952px. The hero is a 50/50 split of copy and chart card. Feature sections alternate a diagram with copy, or center a heading over a row of cards (three comparison cards joined by "+" and "=" glyphs). The integration section is a two-column list-plus-diagram, the logo wall a wrapped grid, the footer five link columns plus a bottom bar with the logo and Privacy, Terms, DPA and Status links.

Spacing is tight inside components and generous between sections. The most frequent gap is 8px (111 uses), then 12px and 6px. Paddings cluster at 6px, 12px, 4px and 24px, with 80px for section padding. The hand-drawn line charts act as full-width separators in place of rules or color blocks.

## Elevation & Depth

The page uses layered utility shadows (each value includes two transparent ring layers):
- `… rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` — the small default (10 elements).
- `… rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` — the medium card shadow (8).
- `… rgba(203, 213, 225, 0.2) 0px 20px 25px -5px, rgba(203, 213, 225, 0.2) 0px 8px 10px -6px` — the soft slate glow on the chart card.
- `… rgba(255, 79, 100, 0.2) 0px 10px 15px -3px, rgba(255, 79, 100, 0.2) 0px 4px 6px -4px` — a coral glow under the large primary button.

Focus uses a two-ring box shadow: `rgb(255, 255, 255) 0px 0px 0px 2px, rgb(99, 216, 245) 0px 0px 0px 4px`.

## Shapes

- **9999px** — every CTA and many chips (44 elements).
- **16px** — comparison and diagram cards (15).
- **12px** — review badges and smaller panels (13).
- **8px** — nav item hit areas (5); **6px** (5).
- **24px** — the large hero chart card.
- **50%** — avatars and icon dots.

Borders are 1px #d0e1e3 on cards. Buttons carry a 2px border in their fill color, so filled and outlined variants line up.

## Components

- **Primary pill.** #ff4f64 fill, `2px solid #ff4f64` border, white Space Grotesk 18px/28px weight 500, padding `16px 40px`, 64px tall, with the coral glow. A 44px header and hero variant uses 16px/24px text and padding `8px 16px`. Hover changes fill and border to #de3243.
- **Outlined pill.** "See how it works": white fill, #ff4f64 text and 2px border, same size as the large pill.
- **Text link.** "View live dashboard": #2a373a 14px/500 that turns #ff4f64 on hover. Inline body links underline on hover.
- **Nav item.** #425659 text in an 8px-radius area. On hover the text turns #1f2728 on a #e7f4f4 background.
- **Review badge.** White, 12px radius, 1px #d0e1e3 border, a 10px uppercase label with 0.5px tracking above a value ("CAPTERRA 4.8"). On hover it turns #fffbeb with an amber border and a small shadow.
- **Chart card.** #fffffff2, 24px radius, #d0e1e3 border, slate glow shadow, with a 10px tracked caps eyebrow.
- **Comparison card.** White, 16px radius, #d0e1e3 border, an 18px/700 #1f2728 title, a small colored progress bar and muted copy. The "Combined" card is outlined in coral.
- **Compliance badges.** Shield-shaped grey emblems in a row.
- **Footer.** #f9fbfb with a #d0e1e3 border, uppercase 12px/600 #8da3a6 column labels with 0.6px tracking.

## Design System Architecture

We found no public Simple Analytics design system or brand kit. The press page (https://www.simpleanalytics.com/press) lists founder interviews and media mentions, but no colors, typefaces or logo files. The shipped CSS (31 root custom properties) shows a utility-class build: `--tw-ring-offset-shadow`, `--tw-ring-shadow` and `--tw-drop-shadow` variables produce the layered shadow syntax measured above. There is a single brand token, `--color-brand-red: #ff4f64`, and a set of `--hljs-*` syntax-highlighting colors for code samples (e.g. `--hljs-keyword: #d73a49`, `--hljs-string: #032f62`). The teal-grey ink and surface values exist only as computed colors, with no named tokens.

## Do's and Don'ts

**Do**
- Set everything in Space Grotesk: 36px/700 headlines, 16px/24px body, 18px/500 buttons.
- Use teal-tinted slates for text (#2a373a, #425659, #697d80) on #fcfcfc.
- Reserve #ff4f64 for actions and one or two highlighted words per headline.
- Make CTAs full pills with a 2px same-color border and the coral glow.
- Separate sections with hand-drawn coral or cyan line charts, not heavy color blocks.
- Use white cards with 1px #d0e1e3 borders and 16–24px corners.
- Use small uppercase tracked labels for eyebrows and footer headings.

**Don't**
- Don't use pure grey text; the measured inks are tinted teal.
- Don't add a second saturated action color. Cyan is for focus and charts only.
- Don't square off buttons; every measured CTA is a 9999px pill.
- Don't use heavy dark sections; the measured section fills are all light (#fcfcfc, #f3f8f8, #f9fbfb, #fcf3f5).

## Responsive Behavior

Measured at 390px:

- **h1 keeps 36px / 45px** at weight 700 and wraps to three lines (135px tall).
- **h2 keeps 30px / 45px.**
- **Body keeps 16px / 24px.**
- The primary CTA uses 16px/24px weight 500 text with the same #ff4f64 pill and 2px border.
- The header is 64px tall, shows 2 visible links and a menu toggle labelled "Open main menu" (6 visible links on desktop, 80px tall).
- Content is inset 16px in the hero (16px to 374px) and 24px in later sections (24px to 366px).
- Card grids measured at most 2 columns. The "Compare" band (#f3f8f8) grows to 6365px tall on mobile.
- Most frequent mobile sizes by characters: 14px, 16px, 18px, 12px, 11px, 30px and 36px.

Breakpoint values were not measured.

## Iteration Guide

1. Start with a #fcfcfc canvas, Space Grotesk at four weights, and the teal-grey ink set.
2. Build the type ramp: 36/45 at 700, 30/45 at 700, 18/28 at 700, 16/24 at 400, 14/20 links, 12px uppercase labels with 0.6px tracking.
3. Make the #ff4f64 pill family (64px and 44px, 2px border, coral glow, #de3243 hover) and the white outlined pill.
4. Compose sections as diagram-plus-copy or centered heading-over-cards, with 16–24px-radius white cards on #d0e1e3 hairlines.
5. Draw coral and cyan line-chart dividers between sections, and highlight one key word per headline in red.
6. Add the #e7f4f4 nav hover and the white-plus-cyan double focus ring.
7. Measure any new value on simpleanalytics.com before adding it; the CSS names only `--color-brand-red`.
