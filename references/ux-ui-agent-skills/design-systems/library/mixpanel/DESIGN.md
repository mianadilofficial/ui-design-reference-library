---
version: alpha
name: Mixpanel
category: "Product & SaaS"
description: "Mixpanel's product-analytics site: a #fafafa canvas, gray-10 #1f2023 headlines and pill buttons with 100px radius, 70%-black body text, Garnett Medium 48px/400 headlines tracked -0.96px, ABC Arizona light-italic serif quotes, signature purple #7856ff glows, and deep plum #33001f and forest #00332a feature bands."
colors:
  canvas: "#fafafa"
  ink: "#000000b3"
  primary: "#1f2023"
  on-primary: "#ffffff"
  primary-hover: "#1f2023cc"
  brand-purple: "#7856ff"
  brand-purple-dark: "#150040"
  accent-mint: "#7fe1d8"
  accent-pool: "#72bef4"
  accent-lava: "#ff7557"
  accent-peach: "#ffb27a"
  accent-mustard: "#f8bc3c"
  accent-grass: "#3ba974"
  surface-plum: "#33001f"
  surface-forest: "#00332a"
  ink-on-dark: "#ffffffb3"
  ink-graphite: "#2a2a2f"
  ink-muted: "#626266"
  ink-peach-light: "#ffbfb1"
  ink-mint-light: "#c4f1ed"
typography:
  display:
    fontFamily: "\"Garnett Medium\", \"Garnett Medium Placeholder\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 57.6px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: "\"Garnett Medium\", \"Garnett Medium Placeholder\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 43.2px
    letterSpacing: "-0.72px"
  subheading:
    fontFamily: "\"Garnett Medium\", \"Garnett Medium Placeholder\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
  quote:
    fontFamily: "\"ABC Arizona Text Light Italic\", \"ABC Arizona Text Light Italic Placeholder\", sans-serif"
    fontSize: 32px
    fontWeight: 300
    lineHeight: 38.4px
  body:
    fontFamily: Garnett Regular
    fontSize: 12px
    fontWeight: 400
  button:
    fontFamily: "\"Garnett Medium\", \"Garnett Medium Placeholder\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  link:
    fontFamily: "\"Garnett Medium\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
    letterSpacing: 0.28px
  button-small:
    fontFamily: "\"Garnett Medium\", \"Garnett Medium Placeholder\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 12px
  4xl: 12.34px
  cta: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 8px
  s9: 10px
  s10: 10.5px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 8px 8px 8px 14px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.cta}"
    padding: 4px 6px 4px 14px
    height: 28px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.primary}"
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-graphite}"
    rounded: "{rounded.xl}"
    boxShadow: rgb(234, 234, 234) 0px 0px 0px 1px inset
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    textColor: "{colors.ink-on-dark}"
    padding: 160px 32px 32px
---

# Mixpanel

## Overview

Mixpanel is a product-analytics platform, and mixpanel.com/home presents it as a calm, editorial page: a near-white #fafafa canvas, dark gray-10 #1f2023 headlines, small dense UI text, a serif italic for testimonials, and soft purple-to-pink gradient glows that carry the brand's signature purple. A dark #1f2023 announcement bar ("Agent Intelligence — Build agents your customers…") sits above a white header with Platform, Solutions, Resources and Pricing, a language selector, and two pill buttons. The hero sets "Build like your customers are right beside you" in Garnett Medium at 48px with -0.96px tracking, left-aligned, followed by "Book a Demo" and "Get Started Free" pills and a large product mock — a chart, a query bar and an AI assistant panel — floating on a purple/pink gradient.

Below the hero, a logo strip (Pinterest, Snapchat, monday.com, Coinbase, Docusign…) leads into a sticky-scroll "Get from data to decision at AI speed" sequence of product mocks on the light canvas. A deep plum #33001f band ("Your personal analyst, accessible anywhere") presents Mixpanel AI and the MCP integration with peach-toned headings and glowing purple illustrations. A light section ("Why the best product builders choose Mixpanel") pairs feature bullets with a purple-duotone customer portrait and a large serif italic quote. A forest #00332a band ("The business case for Mixpanel is clear") shows stats (29x, 354%, 6 mos) in mint. Three resource cards and a closing "Mixpanel is for teams that move. Make your move." over a purple gradient precede a dark gradient footer.

The voice is concise and benefit-led, with occasional wit ("Build like your customers are right beside you").

## Colors

The official brand site (https://brand.mixpanel.com/) names **Purple #7856FF** (purple-06) as "the anchor of our visual identity", **Gray #1F2023** (gray-10) as the primary headline color, **#150040** (purple-10) as the dark background, and six accent palettes: Mint #7FE1D8, Pool #72BEF4, Lava #FF7557, Peach #FFB27A, Mustard #F8BC3C and Grass #3BA974.

On the measured page:

- **Primary #1f2023** — gray-10; every filled button and the headlines. Hover lightens the fill to 80% (#1f2023cc, measured).
- **On-primary #ffffff** — button labels; also the header and card fill.
- **Canvas #fafafa** — the page background and largest area.
- **Ink #000000b3** — 70% black, the most-read text color for paragraphs.
- **Ink-graphite #2a2a2f** — text inside product mocks; **ink-muted #626266** — tertiary text.
- **Brand-purple #7856ff** — appears in gradients, glows and the 4px focus ring (20% opacity); **brand-purple-dark #150040** tints the deep shadows.
- **Surface-plum #33001f** — the AI band, with **ink-peach-light #ffbfb1** headings.
- **Surface-forest #00332a** — the business-case band, with **ink-mint-light #c4f1ed** headings and stats.
- **Ink-on-dark #ffffffb3** — 70% white body text on dark bands and in the footer.
- The accent palettes (#7fe1d8, #72bef4, #ff7557, #ffb27a, #f8bc3c, #3ba974) are for charts and illustrations.

## Typography

The brand site names **Garnett** as the primary sans "for headlines, body copy, and all brand communication" and **Apercu Mono** for technical details only. The measured page loads:

- **Garnett Medium** — headlines and buttons. Display 48px / 57.6px, weight 400 as declared (the face itself is the medium cut), -0.96px tracking; section headings 28px with -0.28px; subheading 22px / 26.4px; button 16px / 16px weight 500; small button 12px / 12px; links 14px / 16.8px with +0.28px tracking.
- **Garnett Regular** — body and UI copy, the most-used face by characters. 12px with +0.24px tracking is the single most common setting; 14px with +0.28px and 16px with +0.32px follow. Uppercase micro-labels use 12px with 2.4px tracking.
- **ABC Arizona Text Light Italic** — the testimonial quote: 32px / 38.4px, weight 300.
- **Apercu Pro** (and Apercu Pro Medium) — text inside product mocks and charts, 12–13px with slight negative tracking.

Garnett, Arizona and Apercu are licensed faces served by the site; a geometric grotesk at medium weight can stand in for prototypes.

## Layout

At 1280px the header and hero span 40px to 1240px; the sticky product section runs from 96px to 1171px in a two-column text-and-mock layout; the dark bands span 56px to 1224px. Feature grids run in three or four columns, and logo rows run wider. Eight header items are visible on desktop.

Spacing is fine-grained: 4px is by far the most common gap, then 8px and 16px; 10px is the most common padding, then 16px and 8px. Larger rhythm uses 40px and 80px gaps, and the footer pads 160px on top and 32px at the sides and bottom. The spacing tokens step 1, 2, 3, 4, 5, 6, 7, 8, 10 and 10.5px.

## Elevation & Depth

Product mocks float on purple glows: the signature shadow is a 3.08px inset white highlight combined with a 0px 30.84px 60px shadow in purple-10 at 20% opacity, measured on the AI illustrations. Cards in mocks use a 1px #eaeaea inset ring rather than a drop shadow. A 4px 20% purple ring marks focus. Gradients — purple to pink in the hero and closing band, dark gradient over the footer (20% to 85% black) — provide most of the depth.

## Shapes

Buttons are full pills (100px radius). Small UI radii dominate: 4px (most frequent) and 3px on chips and inputs inside mocks; 8px on cards; 8px 8px 0px 0px top-rounded panels; 12.34px on scaled mock windows; 10px, 12px, 16px, 5px and 6px elsewhere; circles (50%, 100%) for avatars and icons. The purple-duotone portrait and gradient blobs soften the otherwise crisp geometry.

## Components

- **Primary pill** — #1f2023 fill, white Garnett Medium 16px weight 500, 100px radius, 8px 8px 8px 14px padding (asymmetric for a trailing arrow icon), 40px tall ("Book a Demo"); hover fill #1f2023cc.
- **Small pill** — same colors, 12px label, 4px 6px 4px 14px padding, 28px tall ("Get Started Free" in the header).
- **Ghost pill** — 7% black fill with #1f2023 text, deepening to 10% on hover (measured).
- **Header** — white, #1f2023 Garnett Medium 14px links with +0.28px tracking.
- **Product mock card** — white, 8px radius, 1px #eaeaea inset ring, Apercu Pro 12px text, charts in purple.
- **AI chat chip** — #f6f6f6 fill, 1px #e9e9e9 border, 10px radius, Apercu Pro 12px weight 500, 10px 12px padding.
- **Testimonial** — duotone portrait, 32px Arizona light-italic quote, company logo and "Watch video" pill.
- **Stat block** — 42px Garnett numerals in mint on the forest band.
- **Footer** — dark gradient, uppercase 12px headings, #ffffffb3 links, 160px top padding.

## Design System Architecture

Mixpanel publishes brand guidelines at https://brand.mixpanel.com/ (linked from the site's header as "Brand guidelines"): a named color system with numbered shades (purple-06, gray-10, purple-10, accent palettes Mint, Pool, Lava, Peach, Mustard, Grass at shade 06), the Garnett and Apercu Mono type pairing, and logo rules (wordmark vs logomark; clear space equal to the height of the "M"; black, purple and white versions). The marketing site's shipped CSS declares "Placeholder" fallback font faces and transform-based card states; its root variables expose no global tokens, so the shade naming on the brand site is the reference system.

## Do's and Don'ts

**Do**
- Keep pages light (#fafafa) with #1f2023 headlines and pill buttons.
- Use purple #7856ff as the anchor through glows, gradients and focus rings rather than as a button fill.
- Use Garnett for words and Apercu (mono) only for technical details, as the brand site specifies.
- Introduce testimonials in the light-italic serif at 32px.
- Use the accent palettes for data visualisation and illustrations.

**Don't**
- Don't fill primary buttons with purple; the measured buttons are gray-10.
- Don't use Apercu Mono for editorial copy (brand rule).
- Don't crowd the logo; keep clear space equal to the "M" height.
- Don't treat browser-default link blue as a brand color.

## Responsive Behavior

The extractor's mobile pass at 390px measured: the hero headline at 36px / 43.2px with -0.72px tracking (Garnett Medium); the h2 at 22px / 26.4px; body text at Garnett Regular 14px / 21px with +0.28px tracking in #000000b3; the "Book a Demo" pill unchanged (16px, 40px tall, 8px 8px 8px 14px padding, 100px radius). No header links were counted as visible and no menu toggle was detected. Content spans 16px to 374px; the plum and forest bands keep their colors. The stylesheet declares queries at max-width 500px, 767.98px, 807.98px, 1023.98px, 1199.98px and 1439.98px and min-width 808px and 1200px. Other mobile behaviour was not measured.

## Iteration Guide

1. Start with #fafafa canvas, #1f2023 headlines and 70%-black body copy.
2. Set headlines in Garnett Medium 48px with -0.96px tracking; body in Garnett Regular 12–16px with slight positive tracking.
3. Make every action a #1f2023 pill with a 100px radius and a trailing arrow.
4. Surround product mocks with purple #7856ff glows and the deep purple-10 shadow.
5. Use one plum #33001f and one forest #00332a band for AI and ROI stories.
6. Quote customers in Arizona light italic at 32px.
7. Verify the 36px mobile headline and the 390px layout.
