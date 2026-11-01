---
version: alpha
name: Charles Schwab
category: "Banking & Insurance"
description: "Charles Schwab (schwab.com, measured at https://www.schwab.com/): a white canvas with near-black #111111 text, the proprietary Charles Modern family at 17px body and 42px light headings, a burnt-orange #b05e0d call-to-action with 24px radius and a teal-blue #037dae secondary button, on a slate #33424c header bar."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  primary: "#b05e0d"
  on-primary: "#ffffff"
  surface-soft: "#f7f7f7"
  surface-cool: "#f3f5f7"
  ink-heading: "#121212"
  link: "#026d97"
  ink-deep: "#141a1f"
  ink-body: "#333333"
  ink-slate: "#29353d"
  primary-hover: "#914d08"
  button-secondary-bg: "#037dae"
  nav-bg: "#33424c"
  text-input-bg: "#556977"
  card-border: "#a3b5c2"
typography:
  display:
    fontFamily: CharlesModern-Light, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 46.2px
  display-mobile:
    fontFamily: CharlesModern-Light, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 37.4px
  heading:
    fontFamily: CharlesModern-Light
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
  subheading:
    fontFamily: CharlesModern-Regular
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
  body:
    fontFamily: CharlesModern-Regular, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: CharlesModern-Bold, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: CharlesModernVar, Helvetica, Arial, sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
  input:
    fontFamily: CharlesModernVar, Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 24px
  pill-md: 99px
  pill-lg: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 20px
    height: 44px
    borderColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.24) 0px 1px 4px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 9.9px 11.88px
    height: 44px
    borderColor: "{colors.button-secondary-bg}"
    boxShadow: rgba(0, 0, 0, 0.24) 0px 1px 4px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6px 8px
    height: 32px
  card:
    textColor: "{colors.ink-body}"
    rounded: "{rounded.md}"
    padding: 24px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

This file documents the Charles Schwab homepage as re-measured on 2026-10-16 at `https://www.schwab.com/` (1280px wide, 7328px tall, 1032 visible elements). It is a long, content-dense financial-services page on a white canvas. A slate (#33424c) 97px header bar carries 17 visible links (utility row plus account, advice and learning menus), a location-alert strip with a "Go" button, and login fields. The hero reads "Manage your wealth, your way." in 42px Charles Modern Light, with the line "Invest on your own, trade with thinkorswim, and get full-service wealth management, all in one place." and an orange "Open an account" button, beside a large colorful "invest" graphic. Below it come an account chooser ("Find the Right Account for You."), "Invest and trade" with a photograph and a blue "Open a Brokerage Account" button, four task tiles (Invest on my own, Trade with thinkorswim, Automate my investing, Work with an advisor), a "You deserve more. We can help." triptych with icons, an "Open an account" call-out, StockBrokers.com award badges, a regulatory notice box, "Insights & Education" cards, an expandable FAQ list, contact options (Call, Chat, Visit), cross-links to other Schwab sites and a very long legal footer.

The voice is plain, reassuring and directive: sentence-case headings that end in full stops, benefit-led subheads ("Transparent pricing and low costs"), and sober disclosures.

## Colors

Area by background: #ffffff dominates (10520), then #f7f7f7 (669), #f3f5f7 (375), #ecf3f9 (140), slate #33424c (124), orange #b05e0d (28), #f0f3f5, teal-blue #037dae (19), #006e99 and #556977.

- **canvas #ffffff**, **ink #111111** (5673 characters), with close neighbours ink-heading #121212 (1666), ink-deep #141a1f (1206), ink-body #333333 (1173) and ink-slate #29353d (203).
- **primary #b05e0d**: the "Open an account" button fill, white label; hover #914d08 (and rgb(138, 77, 15) on the header variant).
- **button-secondary-bg #037dae**: "Contact us", "Go" and "Open a Brokerage Account"; hover rgb(28, 103, 153).
- **link #026d97**: text links, 1317 characters.
- **nav-bg #33424c**: header bar; **text-input-bg #556977**: input fill in the header; **card-border #a3b5c2**: card outlines.
- **surface-soft #f7f7f7**, **surface-cool #f3f5f7**: section tints.

The root variables list named palettes (sapphire, metal, tangerine, teal, coastal, red) from the Tailwind-based theme; only the values above appear in the rendered measurements, so the others are not tokens.

## Typography

The family is **Charles Modern**, loaded as a variable font (`CharlesModernVar`, weights 100 to 900) plus static Regular (8175 characters), Bold (1264), Light (520) and a Schwab icon font. Fallbacks: "Helvetica Neue", Helvetica, Arial, sans-serif.

- **display**: Charles Modern Light, 42px, line-height 46.2px (h1). Mobile (390px): 34px / 37.4px.
- **heading**: Light, 32px, weight 300, line-height 38.4px (h2 "Find the Right Account for You."). **subheading**: Regular 32px / 38.4px (h3 "Invest and trade").
- **body**: Regular 17px, line-height 27.2px.
- **button**: Bold 18px, line-height 22px.
- **nav**: CharlesModernVar 17px, line-height 25.5px. **input**: 13px.
- By characters, the most read sizes are 12px (5604, legal text), 17px (2425), 15px, 13px, 24px, 19px, 30px and 36px. Weights: 400, 700, 300, 600.

Font substitutes: Charles Modern is proprietary; the declared fallbacks are Helvetica Neue and Arial.

## Layout

The page has two bands: the 97px header and a 7231px white content band, with up to 6 columns in one section and cards up to 4 columns wide. Standard gaps are 24px (46 uses), 12px, 32px, 8px and 4px; the most common paddings are 24px (96) and 8px (73), then 20px and 12px. Content is a centred column with full-width tinted bands (#f7f7f7 and #f3f5f7) separating sections such as the "Take the next step." call-out. Section headings are centred; card grids are three or four across.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.24) 0px 1px 4px 0px` on buttons (5), `rgba(0, 0, 0, 0.15) 0px 2px 8px 0px` (4) and `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` (2). Cards rely mostly on a 1px border in #a3b5c2 rather than shadow; other measured border colors include #b05e0d, #009ddb and #037dae.

## Shapes

Radii by frequency: 8px (25, cards), 9999px (9), 4px (8, inputs), 24px (4, buttons), 100px and 99px (pill-like), a very large value (3.35544e+07px, a full pill) and 50% (1). The primary and secondary buttons are 24px at 44px height; text inputs are 4px with 6px 8px padding at 32px height; cards are 8px with 24px padding.

## Components

- **Primary button**: `#b05e0d` fill, 1px #b05e0d border, white Bold 18px, 24px radius, 10px 20px padding, 44px high, 4px blur shadow; hover #914d08.
- **Secondary button**: `#037dae`, white label, 24px radius, 44px high.
- **Tile buttons** ("Invest on my own"): light fill with #121212 text; hover rgb(231, 235, 239).
- **Text input**: #556977 fill, white 13px text, 4px radius, 32px high.
- **Card**: 8px radius, 24px padding, #a3b5c2 border, text #333333.
- **FAQ rows**: blue chevron toggles with expandable questions.
- **Header nav**: slate bar, white text.

## Design System Architecture

No public Schwab design-system site was opened; the de-facto system comes from the shipped CSS. The theme is Tailwind-based (`--tw-*` variables, `--text-2xl: 20px`, `--text-7xl: 42px`, `--text-10xl: 56px`, `--radius: .5rem`, `--font-sans: "Charles Modern", sans-serif`) with named palette ramps (`--color-blue-700: #037dae`, `--color-tangerine-800: #8a4d0f`, `--color-metal-800: #415462`, `--color-sapphire-800: #345483`) and container tokens (`--container-story: 840px`). Durations are 200ms (66), 300ms (54) and 500ms (35); easings include ease-in, ease-in-out and `cubic-bezier(.8,.25,.25,1)`. Breakpoints: min-width 768px (529 declarations), 1024px (223), 480px, 1280px, 1440px.

## Do's and Don'ts

- Do keep surfaces white and text #111111; tint sections with #f7f7f7 or #f3f5f7.
- Do use orange #b05e0d for the one account-opening action and #037dae for secondary actions.
- Do set headings in Charles Modern Light, sentence case.
- Do keep legal disclosures at 12px.
- Don't mix more than one filled button color in a single call-out.
- Don't use the unlisted Tailwind ramp colors as brand fills.
- Don't hide disclosures; the footer carries long regulatory text.

## Responsive Behavior

Measured at 390px: the h1 is 34px with 37.4px line-height; sizes include 14px, 17px, 22px, 24px, 19px and 30px; the header shows 3 links and a toggle labelled "Toggle Primary Navigation Menu" (desktop: 17 links, no toggle); card columns measured 5. Other mobile layout details are not measured. The stylesheet declares media queries at 480px, 768px, 1024px, 1280px and 1440px.

## Iteration Guide

1. Start from canvas #ffffff, ink #111111, primary #b05e0d.
2. Body 17px/27.2px; headings Light 32px or 42px.
3. Buttons 44px high, 24px radius, 18px Bold.
4. Cards 8px radius, 24px padding, #a3b5c2 border.
5. Verify on the live page that location and login strips are excluded from brand UI before adding tokens.

### Measured notes for implementers

The body element itself measures 13px with 19.5px line-height in CharlesModernVar, while the reading copy inside sections uses the 17px Regular style; the 12px size carries most characters because of the long legal footer. One letter-spacing pair was measured: 14px text with -0.35px tracking (15 characters). Text input and button heights are 32px and 44px; the "Go" button in the location strip is 40px high and 65px wide, and "Contact us" is 114px wide and 44px high. The primary "Open an account" button measures 180px wide. Hover on tile buttons keeps text #121212 and sets the background to rgb(231, 235, 239); hover on the secondary buttons sets rgb(28, 103, 153); hover on orange buttons darkens to #914d08. Gaps of 24px separate card columns, and paddings of 54px appear on 8 large containers. The award section shows three badge images with "#1 Overall Broker", "#1 Mobile Trading Apps" and "#1 Customer Service" captions, and the footer lists social icons and column links for clients, independent branches, Schwab and international sites. A chat-style floating control and a close icon appear over the hero in the capture; they are overlays and are not documented as brand UI.
