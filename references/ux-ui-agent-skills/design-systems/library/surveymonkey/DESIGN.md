---
version: alpha
name: SurveyMonkey
category: "Product & SaaS"
description: "SurveyMonkey's home page sets bold National 2 headlines (92px/700, -1.84px tracking) in forest #0f2e21 on a warm off-white #fefdfb canvas, with slate #333e48 body copy, pill-shaped green #08794a 'Get started free' buttons (hover #089b5e), a mustard #e2bf36 'Sign up free' pill, deep-forest #00301f feature bands and mint #d6f5de cards with 28px corners."
colors:
  canvas: "#fefdfb"
  ink: "#333e48"
  primary: "#08794a"
  on-primary: "#ffffff"
  primary-hover: "#089b5e"
  forest: "#00301f"
  surface-warm: "#f7f5f3"
  mint: "#d6f5de"
  ink-heading: "#0f2e21"
  green-deep: "#10412c"
  green-bright: "#39c67f"
  ink-card: "#1e2124"
  mustard: "#e2bf36"
  mustard-hover: "#ebd370"
  link-blue: "#007faa"
typography:
  display:
    fontFamily: "\"National 2\", \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 92px
    fontWeight: 700
    lineHeight: 92px
    letterSpacing: "-1.84px"
  display-mobile:
    fontFamily: "\"National 2\", \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 60px
    letterSpacing: "-1.2px"
  heading:
    fontFamily: "\"National 2\", \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 67.8px
    letterSpacing: "-1.2px"
  body:
    fontFamily: "\"National 2\", \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29px
  button:
    fontFamily: "\"National 2\", National2, \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 15px
    fontWeight: 700
  chip:
    fontFamily: "\"National 2\", \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
  nav:
    fontFamily: "\"National 2\", National2, \"Helvetica Neue\", Helvetica, Arial, \"Hiragino Sans\", \"Hiragino Kaku Gothic Pro\", 游ゴシック, 游ゴシック体, YuGothic, \"Yu Gothic\", \"ＭＳ ゴシック\", \"MS Gothic\", sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 24px
  3xl: 28px
  4xl: 32px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 19px
  s5: 24px
  s6: 32px
  s7: 36px
  s8: 40px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 36px
    height: 50px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    boxShadow: rgba(47, 46, 45, 0.4) 0px 4.011px 20.053px -4.011px
  button-secondary:
    backgroundColor: "{colors.mustard}"
    textColor: "{colors.ink-heading}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 40px
    borderColor: "{colors.mustard}"
  button-secondary-hover:
    backgroundColor: "{colors.mustard-hover}"
    boxShadow: rgba(47, 46, 45, 0.4) 0px 4.011px 20.053px -4.011px
  button-outline:
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 30px
    borderColor: "{colors.ink-heading}"
  chip-active:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 37px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.primary}"
  feature-band:
    backgroundColor: "{colors.forest}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.4xl}"
  card:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink-card}"
    padding: 48px
  card-mint:
    backgroundColor: "{colors.mint}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.3xl}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px
---

# SurveyMonkey

## Overview

SurveyMonkey is an online survey and feedback platform. The measured home page (surveymonkey.com, 1280px wide, 6393px tall, `lang="en-US"`) is a warm, light, editorial page with deep forest-green moments. A slim white header carries the SurveyMonkey wordmark with its monkey symbol at left, a row of dropdown menus (Products, Solutions, Resources, Enterprise, Pricing), and at right a language globe, "Contact Sales", "Log in" and a mustard-yellow "Sign up free" pill.

The hero is centred and type-led: an enormous two-line bold headline, "Humans still matter. Listen to them.", in forest green `#0f2e21`, a one-line subtitle and a single green "Get started free" pill. Under it the product itself is shown — a faded SurveyMonkey dashboard with an "Add surveys" panel and survey names — followed by a proof strip: "The world's most popular survey platform used by 260K+ organizations worldwide", a logo row (IBM, Accenture, Dell, Philips, Colgate-Palmolive) and three green statistics (110B+, 47M+, 20K+).

The middle of the page is a large rounded forest-green panel "Powering smarter decisions across your business" with pill tabs (Employee feedback, Customer feedback, Market research, Product development, Event management), a photo-and-chart feature, and four mint cards. Then come "Insights to fuel your curiosity" — four illustrated warm-grey cards — two customer quotes (Greyhound, Noom), a section on "Our commitment to using AI responsibly" and a forest-green rewards panel ("Share your opinion. Earn rewards."). The footer is a five-column link list on the off-white canvas.

The tone is warm and plain-spoken ("Humans still matter. Listen to them.", "Get started free", "Read the story"). The capture also showed a fixed bottom promotional bar for a report; it is excluded here as an overlay, not part of the page layout.

## Colors

All values were measured on the rendered page (`web/data/extracted/surveymonkey.json`); most also appear as the site's own CSS variables under the `--mds-brand-*` and `--wrench-color-*` prefixes.

- **canvas `#fefdfb`** — the warm off-white body background and largest area (2916); `--mds-brand-neutral0` and `--wrench-color-background-light`.
- **ink `#333e48`** — slate, the most-read text colour (3080 characters), used in navigation, body copy and the footer; `--wrench-color-background-dark` holds the same value.
- **ink-heading `#0f2e21`** — the forest green of headlines, the hero paragraph and the "Sign up free" label (1635 characters). It is also a painted background (1086 by area).
- **green-deep `#10412c`** — `--mds-brand-green800`, secondary heading green (534 characters).
- **forest `#00301f`** — the deep green of the big rounded feature panels (1329 by area).
- **primary `#08794a`** — `--mds-brand-green600`, the fill of "Get started free" and the active tab chip, and the hover colour of every header link.
- **primary-hover `#089b5e`** — `--mds-brand-green500`, the measured hover fill of the primary pill.
- **green-bright `#39c67f`** — `--mds-brand-green400`, bright green link text inside dark panels ("SurveyMonkey Rewards").
- **mint `#d6f5de`** — `--mds-brand-green100`, the card colour inside the forest panel (358 by area).
- **mustard `#e2bf36`** — the "Sign up free" pill; its hover is **mustard-hover `#ebd370`**, which equals `--mds-brand-yellow300`.
- **surface-warm `#f7f5f3`** — `--mds-brand-neutral100`, warm grey for the "Insights" cards (1106).
- **ink-card `#1e2124`** — near-black text on warm cards; `--mds-color-text-dark`.
- **link-blue `#007faa`** — `--mds-color-text-link`, measured on a header link element.

Statistics in the proof strip were measured at `#007d3f`. The CSS also declares the older product green `#00bf6f` as `--mds-color-button-primary` and `--wrench-color-primary-main`; it was not measured as a rendered fill on this marketing page.

## Typography

One family, **National 2**, carries every measured character (6857). It is loaded in 400, 500 and 700 and declared with a long fallback stack: `"Helvetica Neue", Helvetica, Arial`, then Japanese system fonts (Hiragino Sans, Yu Gothic, MS Gothic).

- **display** — 92px / 700 / 92px (line height 1.0), -1.84px tracking: the hero headline.
- **heading** — 60px / 700 / 67.8px, -1.2px tracking: panel headlines such as "Powering smarter decisions across your business".
- Other measured heading sizes, each with -0.02em tracking: 48px (-0.96px), 36px (-0.72px), 28px (-0.56px), 24px (-0.48px, 263 characters — card titles) and 20px (-0.4px).
- **body** — 18px / 400 / 29px: lead paragraphs. 16px and 14px are the most common sizes overall (2290 and 2166 characters).
- **button** — 15px / 700 for pill buttons; the site variable `--mds-font-size-button-lg` is 15px.
- **chip** — 16px / 700 / 19.2px for the tab pills in the forest panel.
- **nav** — 16px / 400.
- Eyebrows such as "WHAT'S NEW" and the "SURVEYMONKEY" card labels are uppercase 14px with wide tracking (2px or 1.4px).

Weights in use: 400 (4413 characters), 700 (1491) and 500 (953). Headlines are always bold and tightly tracked; body text is regular.

**Substitute:** National 2 is a commercial typeface served by the site. The declared fallbacks are Helvetica Neue, Helvetica and Arial.

## Layout

The page band measured content from x=24 to x=1256 — nearly full-bleed with 24px margins — and the forest feature panels sit inset within it with large rounded corners. The extractor counted up to 6 card columns (the tab and logo rows); the visible card grids are four-up ("Insights to fuel your curiosity", the mint cards) and two-up (customer quotes).

Spacing values in the site are 8px-based: gaps of 8px (30 uses) and 24px (13), paddings of 12px (48), 24px (36), 8px, 32px, 16px and 48px, with 96px for section-level padding. Headlines are centred; long-form sections (AI commitment, customer quotes) switch to left-aligned text beside an image.

## Elevation & Depth

The page is almost flat. Two shadows were measured at rest: a soft card shadow `rgba(51, 62, 72, 0.1) 0px 1px 2px 0px, rgba(51, 62, 72, 0.1) 0px 3px 10px 0px` tinted with the slate ink, and an upward `rgba(0, 47, 32, 0.08) 0px -8px 32px 0px` on the fixed promotional bar. On hover, both primary and mustard pills gain `rgba(47, 46, 45, 0.4) 0px 4.011px 20.053px -4.011px` — a lift that only appears on interaction. Depth otherwise comes from colour blocks: forest panels on off-white, mint cards inside forest.

## Shapes

- **Pill** — every button: the computed radii are 1002.63px (12 elements) and 100px (13 elements).
- **28px** — mint cards inside the forest panel.
- **32px** and **48px** — the large forest panels and image frames.
- **Asymmetric corners** — the warm "Insights" cards measured `0px 20px 20px` and `16px 0px 24px 16px`, giving each card a different leaf-like silhouette. Keep this irregularity when reproducing those cards.
- **4px** and **8px** — small UI; the site variable `--mds-border-radius-button` is 4px, used in product UI rather than on the marketing pills.

## Components

**Primary pill** — `#08794a`, white 15px/700 label, `0px 36px` padding, 50px tall, fully round. Hover: `#089b5e` plus the soft lift shadow.

**Mustard pill** — `#e2bf36` with forest `#0f2e21` label, `0px 24px`, 40px tall ("Sign up free" in the header). Hover: `#ebd370` with the lift shadow.

**Outline pill** — transparent with a 1px `#0f2e21` border, 13px/700 label, `0px 12px`, 30px tall, for small secondary links such as "Read report"; the cards' "Read the story" and "Explore AI features" links use outlined pills.

**Tab chip** — active state `#08794a` with off-white 16px/700 label, `8px 16px`, 37px, pill; inactive chips are outlined on the forest background.

**Header** — off-white, 60px tall, slate 16px links that turn `#08794a` on hover.

**Forest feature panel** — `#00301f` with large rounded corners, a 60px/700 off-white headline, tabs, a feature row and mint cards (`#d6f5de`, 28px radius) each with an uppercase "SURVEYMONKEY" label, a bold title, a paragraph and a "Learn more" outline pill.

**Insight card** — `#f7f5f3`, 48px padding, asymmetric corners, an illustration or photo on top and a 24px bold title.

**Footer** — off-white, slate text, uppercase column labels (PRODUCTS, POPULAR TEMPLATES, RESOURCES, LEARN, ABOUT), a language selector and social icons.

## Design System Architecture

No public SurveyMonkey design-system documentation or token package was found in the sources checked: the newsroom page (https://www.surveymonkey.com/newsroom/) shows no brand or media-kit link in the portion read, and SurveyMonkey's GitHub organisation (https://github.com/SurveyMonkey) contains no design-system repository.

The shipped CSS shows the de-facto system: 400 root custom properties in two generations. `--wrench-*` variables (for example `--wrench-color-primary-main: #00bf6f`, `--wrench-color-sabaeus100…1000`, `--wrench-color-link*`, `--wrench-font-weight-medium: 500`) carry the product palette with a named green ramp ("sabaeus") and functional colours (success, warning, error, upgrade). `--mds-*` variables carry the current marketing brand: `--mds-brand-green100…1000`, `--mds-brand-neutral0…950`, `--mds-brand-yellow100…800`, plus semantic aliases `--mds-color-button-*`, `--mds-color-text-*` and type sizes (`--mds-font-size-size16: 112px`, `--mds-font-size-size19: 28px`). The marketing page renders the `mds` greens and warm neutrals. Variables prefixed `--fides-overlay-*` belong to the cookie-consent tool and are not brand tokens.

## Do's and Don'ts

**Do**
- Use the warm off-white `#fefdfb` canvas, never stark white, for page backgrounds.
- Set headlines in National 2 Bold with -0.02em tracking and tight line height.
- Make every button a pill; use green `#08794a` for the main action and mustard `#e2bf36` for sign-up in the header.
- Use forest `#00301f` panels with large radii to group feature content, with mint `#d6f5de` cards inside.
- Use slate `#333e48` for body copy and forest `#0f2e21` for headlines.

**Don't**
- Don't use the older bright product green `#00bf6f` for marketing CTAs; the measured CTA is `#08794a`.
- Don't use square-cornered buttons.
- Don't add shadows to resting cards beyond the soft slate shadow; lift appears on hover only.
- Don't use cool greys — the measured neutrals are warm.
- Don't document the fixed report promo bar or the cookie-consent overlay as page components.

## Responsive Behavior

Measured by the extractor's 390px pass: the hero headline drops to 60px / 700 with a 60px line height and -1.2px tracking; lead paragraphs stay at 18px / 29px; the "Get started free" pill keeps its desktop size (185px wide, 50px tall). Content measured from x=16 to x=374 (16px margins). The extractor recorded a visible menu toggle labelled "Open main menu" and 2 header links still visible (11 on desktop). Frequent mobile sizes were 16px, 18px, 14px, 20px and 42px. Breakpoint widths were not measured.

## Iteration Guide

1. Canvas `#fefdfb`; body text National 2 16–18px in `#333e48`.
2. Hero: centred 92px/700 forest headline at -1.84px, a short line of copy and a green pill.
3. Group features in a `#00301f` rounded panel with 60px/700 off-white headline, pill tabs and `#d6f5de` cards.
4. Use asymmetric radii on editorial cards and pills for every button.
5. New colours should come from the measured `--mds-brand-*` ramps; check each against the extraction.
6. Run `node web/scripts/verify-designs.mjs --slug=surveymonkey` after every change.
