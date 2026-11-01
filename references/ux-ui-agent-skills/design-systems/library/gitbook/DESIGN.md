---
version: alpha
name: GitBook
category: "Developer Tools & IDEs"
description: "GitBook's home page sets General Sans Bold headlines (45px/700, -0.9px) in warm near-black #1c1917 on white, with General Sans 18px body in stone grey #57534d, a single flame-orange accent #fe551b, black 99px pill CTAs and 8px/16px-radius white product panels on a #fafaf9 warm-grey band."
colors:
  canvas: "#ffffff"
  ink: "#1c1917"
  primary: "#1c1917"
  on-primary: "#ffffff"
  primary-hover: "#1c1917cc"
  accent: "#fe551b"
  surface-warm: "#fafaf9"
  surface-neutral: "#fafafa"
  surface-chip: "#efeeed"
  surface-chip-hover: "#e0e0e0"
  ink-body: "#57534d"
  ink-muted: "#79716b"
  ink-muted-warm: "#786b67"
  ink-faint: "#79716bcc"
  hairline-accent: "#fe551b4d"
typography:
  display:
    fontFamily: "\"General Sans Variable Variable Bold\", \"General Sans Variable Variable Bold Placeholder\", sans-serif"
    fontSize: 45px
    fontWeight: 700
    lineHeight: 45px
    letterSpacing: "-0.9px"
  display-mobile:
    fontFamily: "\"General Sans Variable Variable Bold\", \"General Sans Variable Variable Bold Placeholder\", sans-serif"
    fontSize: 29px
    fontWeight: 700
    lineHeight: 29px
    letterSpacing: "-0.58px"
  heading:
    fontFamily: "\"General Sans Variable Variable Bold\", \"General Sans Variable Variable Bold Placeholder\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-0.64px"
  product-ui-title:
    fontFamily: Inter
    fontSize: 15px
    fontWeight: 500
  body:
    fontFamily: "\"General Sans\", \"General Sans Placeholder\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28.8px
    letterSpacing: "-0.18px"
  button:
    fontFamily: "\"General Sans Variable Variable Bold\", \"General Sans Variable Variable Bold Placeholder\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: "-0.48px"
  link:
    fontFamily: "\"General Sans Variable Variable Bold\", \"General Sans Variable Variable Bold Placeholder\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 22.4px
rounded:
  xs: 3.9px
  sm: 3.98px
  md: 4px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 28px
  4xl: 30px
  cta: 99px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 3.9px
  s5: 4px
  s6: 5px
  s7: 5.2px
  s8: 6px
  s9: 7px
  s10: 8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 10px 14px 12px
    height: 38px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-primary-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.cta}"
    padding: 8px 20px
    height: 32px
  button-primary-compact-hover:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.surface-chip}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 10px 14px 12px
    height: 38px
  button-secondary-hover:
    backgroundColor: "{colors.surface-chip-hover}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
---

# GitBook

## Overview

GitBook (www.gitbook.com) is a documentation platform; the measured home page is titled "The knowledge layer for AI | GitBook" and leads with the headline "The docs platform that flags outdated content. Then fixes it." — the last three words set in GitBook's flame orange. The page is built on Framer (fonts and favicon are served from framerusercontent.com, and colors are exposed as Framer `--token-*` variables), and it reads as a clean, warm-neutral SaaS page: white canvas, warm near-black type, stone-grey body copy and a single saturated orange used for emphasis and decorative 3D ribbons.

Below the hero, a "New — GitBook's quality monitoring layer" chip sits above the headline, followed by a one-line subhead ("GitBook keeps docs accurate, for both people and AI") and a pair of pills: black "Start for free →" and grey "Sign up with GitHub". A greyscale customer logo strip (NVIDIA, Ericsson, Carta, Verifone, Cisco, FreedomPay) leads into a large product frame — a browser window with tabs (Ask your docs, AI insights, Embed and connect, Proactive updates) showing a "Question Insights" analytics dashboard. Orange glossy ribbons sweep behind the frame. Further down: "Get started with AI" with Claude / ChatGPT / Cursor buttons in an orange-outlined capsule, two-column feature rows with diagrams, a four-up feature grid, customer quotes with portrait photos, an enterprise section with an orange 3D illustration, a customer-card carousel, a closing "Accurate docs. Better answers." call to action and a large multi-column footer.

The voice is direct and benefit-led: "Agents turn small docs errors into big problems", "Readable to an agent isn't the same as useful to a user", "A system built to keep docs accurate, not just create them."

## Colors

- **Canvas `#ffffff`** — the body background and the largest measured background area.
- **Ink `#1c1917`** — a warm near-black used for headings, links and as the fill of primary pills. It is the most-read text color.
- **Primary `#1c1917`** with **on-primary `#ffffff`** — the action color is ink itself; there is no separate blue or brand-colored button.
- **Primary-hover `#1c1917cc`** — the hero "Start for free" pill fades to 80% ink on hover.
- **Accent `#fe551b`** — GitBook's flame orange. It colours the emphasised headline words, the "New" chip, the active tab ("AI insights"), callout tooltips, and is the measured hover fill of the header "Talk to us" pill. The 3D ribbon artwork uses the same hue family.
- **Hairline-accent `#fe551b4d`** — orange at 30% alpha, the measured border of the "Get started with AI" capsule. A 5% orange tint (`#fe551b0d`) also appears as a background wash.
- **Surface-warm `#fafaf9`** — the second-largest background, used for warm-grey bands and the "Copy prompt" chip. **Surface-neutral `#fafafa`** is a cooler near-white measured on smaller panels.
- **Surface-chip `#efeeed`** — the fill of grey secondary pills ("Sign up with GitHub", the header "Start for free"); **surface-chip-hover `#e0e0e0`** is its hover.
- **Ink-body `#57534d`** — stone-grey paragraph text, the second most-read color.
- **Ink-muted `#79716b`**, **ink-muted-warm `#786b67`** and **ink-faint `#79716bcc`** — captions, metadata, footer links and placeholder text.

## Typography

GitBook's marketing type is **General Sans** (its font files load from a `third-party-assets/fontshare` path on framerusercontent.com):

- **General Sans Variable at weight 700** (Framer names it "General Sans Variable Variable Bold") carries every headline, button and link. The hero `display` is 45px/45px with -0.9px tracking; section `heading` is 32px/38.4px with -0.64px tracking. Other measured headline sizes are 38px (-0.76px), 24px (-0.48px) and 20px (-0.4px) — tracking is consistently -2% of the size.
- **General Sans 500** sets the `body` text at 18px/28.8px with -0.18px tracking.
- **Buttons** use the bold face at 16px/16px with -0.48px tracking; compact header pills and inline links use 14px/22.4px.
- **Inter** (400/500/600) appears only inside the product mock-ups — dashboard titles such as "Good morning" (15px/500, kept as `product-ui-title`) and doc cards at 15px/600 — to mimic the GitBook app UI.
- **Geist Mono** (600) and **Space Mono** are loaded for small code and label details; **Aeonik** and **ABC Favorit** faces are declared in the CSS but were not measured on visible text.

The dominant weight by character count is 700, then 500 and 400. Substitute for General Sans if unavailable: another geometric-grotesk such as Satoshi or Manrope, kept at bold weight with negative tracking.

## Layout

Measured at a 1280px viewport, the page is 7,866px tall. The hero band is 752px tall with content between 114px and 1192px, centred in a single column; the headline wraps to two lines at 721px wide. The header is a slim bar: GitBook logo at left, Product / Solutions / Resources (with chevrons) / Pricing in the centre, and Login, a grey "Start for free" and a black "Talk to us" pill at right.

Spacing values cluster on a 10px/4px rhythm: the most frequent gaps are 10px (388 uses) and 4px (242), then 6px, 24px, 8px and 16px, with 40px gaps between larger blocks. Paddings are mostly 10px, 6px, 16px and 14px. Content sections alternate between centred single-column statements and two-column text-plus-diagram rows; the feature grid shows four items per row with a small icon, bold title, grey description and a grey tag ("Git Sync", "GitBook Agent", "AI Assistant", "Insights").

## Elevation & Depth

Elevation is minimal. The most common shadow is `rgba(0, 0, 0, 0.25) 0px 1px 2px 0px` (8 elements), a crisp micro-shadow on small controls. The large product frames use soft, wide shadows — `rgba(0, 0, 0, 0.08) 0px 3.22px 96.7571px` and `rgba(0, 0, 0, 0.15) 0px 2.79px 29.5274px` — so the dashboard floats over the page. A `rgba(0, 0, 0, 0.15) 0px 4px 12px` shadow and a `0 1px 3px` plus `0 1px 2px -1px` pair at 5% black were each measured once. Most depth on the page comes from the glossy orange 3D ribbons and illustrations rather than from UI shadows.

## Shapes

- **99px** (`cta`) — every button pill; 27 elements. **9999px**, 999px and 100px also appear on chips.
- **8px** — the most frequent radius (61 elements): cards, dashboard tiles, doc cards.
- **16px** — 49 elements: larger panels and the product window.
- **4px / 3.9px / 3.98px** — small tags and inline elements.
- **12px, 28px, 30px** — occasional containers; 24px on the "New" announcement chip.
- **50%** — avatars and round icon buttons.

The visual shape language is soft rectangles framed inside pill-shaped controls; there are no sharp-cornered buttons.

## Components

- **button-primary** — `#1c1917` fill, white General Sans Bold 16px text, 99px radius, `10px 14px 12px` padding, 38px tall, often with a trailing arrow ("Start for free →", "Meet our customers", "GitBook Assistant"). Hover fades to `#1c1917cc`.
- **button-primary-compact** — the header "Talk to us": black, 14px/22.4px bold text, `8px 20px` padding, 32px tall; its hover turns flame orange `#fe551b`.
- **button-secondary** — `#efeeed` fill, ink text, same pill and padding as the primary ("Sign up with GitHub"); hover `#e0e0e0`. The header variant starts at 70% `#efeeed` with `#79716b` text and darkens to full chip and ink on hover.
- **Agent buttons** — white pills (Claude, ChatGPT, Cursor) inside an orange-hairline capsule; on hover they invert to ink fill with white text.
- **Announcement chip** — `#fafaf9` background, 24px radius, `5px 8px 5px 6px` padding, 12px bold text with an orange "New" badge and arrow.
- **card** — white, 8px radius, used for product doc cards (Inter 15px/600 titles with -0.45px tracking) and feature tiles.
- **Tabs** — a white pill bar with the active tab filled orange and white text.
- **link** — ink, General Sans Bold 14px/22.4px ("Read the story", "View the docs").

The floating "Ask" button at the right edge belongs to GitBook's embeddable assistant widget (its own `--gitbook-widget-*` variables, 12px system sans, `#656973` text) and is not documented as site navigation.

## Design System Architecture

GitBook publishes no public brand or design-system page that I could open: https://www.gitbook.com/brand returns 404, https://www.gitbook.com/about links to no brand guidelines or press kit, and the GitHub organisation https://github.com/GitbookIO pins the open-source docs renderer (https://github.com/GitbookIO/gitbook), integrations and public docs but no token or component-library repository. The marketing site is a Framer build: its colors are Framer project tokens exposed as `--token-<uuid>` variables, which resolve to `#1c1917` (twice), `#57534d`, `#79716b`, `#fe551b`, `#efeeed` (twice), `#fafaf9`, `#ffffff` and `#f8f7feb3`. Type styles are Framer text presets built on General Sans. The embedded assistant widget ships its own variable set (`--gitbook-widget-radius: .5rem`, `--gitbook-widget-button-height: 46px`, `--gitbook-widget-border-color: #e5e5e5`, easing `cubic-bezier(.25,1,.5,1)`).

## Do's and Don'ts

**Do**
- Use warm near-black `#1c1917` for both headlines and primary pills.
- Reserve flame orange `#fe551b` for emphasis — a few headline words, the active tab, "New" badges, one hover state.
- Set headlines in General Sans Bold with about -2% tracking and tight (1.0–1.2) line height.
- Keep paragraphs in stone grey `#57534d` at 18px/28.8px.
- Make every button a 99px pill and pair a black primary with a grey `#efeeed` secondary.
- Show real product UI in large rounded frames with soft wide shadows.

**Don't**
- Don't introduce a blue or other second accent; the measured palette is neutral plus orange.
- Don't use cool greys for text — the greys are warm stone tones.
- Don't fill large backgrounds with orange; it appears as text, small fills and 3D artwork.
- Don't treat the floating "Ask" widget as part of the page chrome.
- Don't use Inter for marketing headlines; it is only the in-app mock-up face.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero `display` shrinks from 45px to 29px (line height 29px, tracking -0.58px) and wraps over a 350px column; section headings measured at 20px/24px with -0.4px tracking ("Agents turn small docs errors into big problems"); body text stays 18px/28.8px; the "Start for free" pill stays 38px tall with the same padding and widens to 350px (full column). Mobile content spans 20px to 370px. Mobile font sizes recorded are 16px, 14px, 18px, 24px, 20px, 12px, 25px, 29px and 10px. Navigation behaviour, menu toggles and breakpoint widths were not measured.

## Iteration Guide

1. Start on white with `#1c1917` headings and `#57534d` body copy; confirm the warm-grey feel before adding colour.
2. Set the hero in `display` (45px General Sans Bold, -0.9px) and colour only the payoff phrase `#fe551b`.
3. Add `button-primary` (black pill, 38px) beside `button-secondary` (grey pill).
4. Place product screenshots in 16px-radius frames with the wide soft shadow; use 8px cards inside.
5. Use 10px and 4px as the base gaps, 24px–40px between groups.
6. Check every new colour against the measured set; compare with https://www.gitbook.com before shipping.
