---
version: alpha
name: Cockroach Labs
category: "Backend, Database & DevOps"
description: "Cockroach Labs (CockroachDB and the Continuum database cloud): a pure black #000000 page with a deep-green #101913 footer, data-purple #9059ff pill CTAs (35px radius) that hover to bio-green #aede54, sci-fi blue #60ecff accents, Geist at weight 200 from 71.11px display to 16px/27px body, Geist Mono buttons and 2-3.2px tracked uppercase eyebrows."
colors:
  canvas: "#101913"
  page-body: "#000000"
  ink: "#ffffff"
  primary: "#9059ff"
  on-primary: "#ffffff"
  primary-hover: "#aede54"
  purple-dark: "#502482"
  purple-light: "#c8acff"
  sci-fi-blue: "#60ecff"
  blue-light: "#dffbff"
  blue-dark: "#144f6b"
  green-light: "#d7eea9"
  green-dark: "#43541f"
  taupe: "#e5e4dc"
  taupe-light: "#f2f1ee"
  ink-muted: "#92928c"
  body-grey: "#888884"
  glass: "#ffffff26"
  hairline: "#ffffff42"
typography:
  display:
    fontFamily: Geist
    fontSize: 71.1117px
    fontWeight: 200
    lineHeight: 78.2228px
  display-mobile:
    fontFamily: Geist
    fontSize: 44px
    fontWeight: 200
    lineHeight: 48.4px
  heading:
    fontFamily: __GeistSans_8adcd2, __GeistSans_Fallback_8adcd2, sans-serif
    fontSize: 40px
    fontWeight: 200
    lineHeight: 50px
    letterSpacing: "-1px"
  card-title:
    fontFamily: Geist
    fontSize: 25px
    fontWeight: 400
    lineHeight: 32.5px
  body:
    fontFamily: Geist
    fontSize: 16px
    fontWeight: 200
    lineHeight: 27px
  eyebrow:
    fontFamily: __GeistMono_46451f, __GeistMono_Fallback_46451f, monospace
    fontSize: 16px
    fontWeight: 200
    lineHeight: 24px
    letterSpacing: 3.2px
    textTransform: uppercase
  banner:
    fontFamily: "\"Geist Mono\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 2px
    textTransform: uppercase
  button:
    fontFamily: "\"Geist Mono\""
    fontSize: 13.2px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 8px
  md: 24px
  lg: 30px
  xl: 35px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 21px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.page-body}"
  button-ghost:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 48px
  button-ghost-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.page-body}"
  nav-link-hover:
    textColor: "{colors.primary-hover}"
  eyebrow:
    textColor: "{colors.sci-fi-blue}"
    typography: "{typography.eyebrow}"
  card-green:
    backgroundColor: "{colors.green-light}"
    textColor: "{colors.green-dark}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    padding: 32px 24px
  card-purple:
    backgroundColor: "{colors.purple-light}"
    textColor: "{colors.purple-dark}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    padding: 32px 24px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

Cockroach Labs makes CockroachDB, the distributed SQL database, and now markets "Continuum", described in the page title as "the agentic distributed cloud database estate". The measured home page (https://www.cockroachlabs.com/, 9,774px at a 1280px viewport) is a dark, sci-fi flavoured layout: a pure black page, very light (weight 200) Geist headlines in white, a violet "data purple" for actions, and a set of named accent colours — bio green, sci-fi blue, data purple, timeless taupe — each with light and dark partners. The design reads like a mission-control console with soft neon glows.

The capture shows: a 41px purple ticker strip ("INTRODUCING CONTINUUM: THE AGENTIC DATABASE CLOUD …") in tracked mono capitals; a black header with the Cockroach Labs logo, nav (Products, Solutions, Resources, Pricing, Company), "Sign In", "Contact Us" and a "Try For Free" pill; a hero "On Cockroach Continuum, 'compromise' is a legacy term." with "compromise" in bio green, a purple "Try Continuum for Free" pill and a "Request a Demo" ghost pill, over a purple glow graphic with a video panel ("Now it is too scarce to waste."); a logo row (Groww, Booking.com, Cisco, Coinbase, DoorDash, FanDuel); "Built on the database you trust." beside a glowing teal data-grid visual; "Run every database as one system." with three pastel cards (green, purple, blue); a "CUSTOMER STORIES" section with DoorDash and OpenAI case studies (stats in sci-fi blue such as "1.9 PB live data under management", "800M+ weekly active users backend") and large grey quotes; a long FAQ accordion; a purple banner "Know your estate before you scale it."; a blog grid "Engineering Deep Dives, Product News, and More"; and a deep green footer. A floating "Ask AI" assistant button sits on the right edge and is not part of the brand UI.

## Colors

Cockroach Labs names its palette in CSS (`--continuum-color-*`), and the measured values match:

- **Page body `#000000`** (`--continuum-color-digital-black`) — the main background (7,949 by area).
- **Canvas `#101913`** (`--continuum-color-deep-green`) — the deep green-black footer area (1,714) and the bottom band.
- **Ink `#ffffff`** (`--continuum-color-clarity-white`) — headlines and most text (6,983 characters).
- **Primary `#9059ff`** (`--continuum-color-data-purple`) — the ticker strip and the "Try Continuum for Free" pill. Its partners are **purple light `#c8acff`** (card fill) and **purple dark `#502482`** (card text, 525 characters). The closing "Know your estate" banner is a purple band in the capture.
- **Primary hover `#aede54`** (`--continuum-color-bio-green`) — every button and nav item turns bio green on hover (buttons with black text); it is also the highlight colour inside headlines ("compromise", "who never compromise", "your estate"). Partners: **green light `#d7eea9`** and **green dark `#43541f`**.
- **Sci-fi blue `#60ecff`** — eyebrows ("CUSTOMER STORIES") and customer stats; partners **blue light `#dffbff`** and **blue dark `#144f6b`**.
- **Taupe `#e5e4dc`** (`--continuum-color-timeless-taupe`) and **taupe light `#f2f1ee`** — warm off-white text.
- **Ink muted `#92928c`** — large customer quotes; **body grey `#888884`** (`--continuum-color-flexible-content-body`) — secondary copy.
- **Glass `#ffffff26`** and **hairline `#ffffff42`** — translucent panels and borders over black.

## Typography

Geist carries the system. The page loads both the self-hosted "Geist" (200, 400) and Next.js-optimised `__GeistSans` / `__GeistMono` variable fonts (100-900):

- **Hero h1** — Geist 71.1117px/78.2228px at weight 200 (`--continuum-font-weight-hero-headline` 200).
- **Section h2/h3** — Geist Sans 40px/50px at 200 with -1px tracking.
- **Card titles** — Geist 25px/32.5px at 400.
- **Body** — Geist 16px/27px at 200 (`--continuum-line-height-body` 27px); 20px, 22px and 18px for larger copy; quotes at 28px with -0.56px tracking.
- **Eyebrows** — Geist Mono 16px/24px, uppercase, 3.2px tracking (the CSS declares `--continuum-letter-spacing-eyebrows` 2px; the ticker uses 14px with 2px).
- **Buttons** — Geist Mono 13.2px/16px at 400.

Weight 200 dominates (6,107 characters): the extra-light headlines are the signature of the page. The page loads Geist both as plain "Geist" faces and as framework-hashed variable fonts.

## Layout

The page is built on named layout tokens: `--continuum-layout-boundary-max` 1440px, desktop margins of 160px (`--continuum-layout-margin-desktop-default`) or 80px (`-wide`), tablet 80px and mobile 24px, a 96px content column gap and 72px vertical content padding. The band map shows a 41px purple ticker, a 99px black header band, a 491px hero media band, and long black content bands (1,324px, 1,844px, 2,184px for the FAQ), a 267px purple banner band, an 856px blog band and a 1,339px deep green footer with 4 columns.

Spacing tokens run from `--continuum-space-8` to `--continuum-space-400` (8, 12, 16, 20, 24, 32, 40, 48, 60, 64, 72, 80, 100, 108, 120, 160, 180, 200, 240, 300, 400px). Measured gaps cluster at 8px (94 uses) and 40px; paddings at 20px and 60px. Content often sits in two columns: a heading on the left and a paragraph or visual on the right.

## Elevation & Depth

No structural shadows: depth comes from light. Purple and teal glows, a glowing data-grid illustration, and translucent white panels (#ffffff26) layered over black create a sense of depth. Borders are translucent white (#ffffff42, #ffffff4d). The one measured box shadow, `rgba(0, 0, 0, 0.2) 0px 0px 10px 0px`, belongs to the floating "Ask AI" widget, which is not brand UI.

## Shapes

Rounded and soft. Buttons are 35px-radius pills (14 uses); pastel cards use 30px; media panels 24px (and half-rounded 24px 0px 0px 24px / 0px 32px 32px 0px pairs for split image-and-text cards); small elements 8px and 4px. The CSS declares `--continuum-radius-pill` 9999px.

## Components

- **Primary pill** — "Try Continuum for Free": #9059ff fill, white Geist Mono 13.2px/16px, 35px radius, 12px 24px padding, 48px tall. Hover: #aede54 fill with black text.
- **Ghost pill** — "Request a Demo", "Try For Free": transparent with white text, same size and radius; hover fills bio green with black text.
- **Nav links** — white, turning #aede54 on hover.
- **Eyebrow** — "CUSTOMER STORIES": Geist Mono 16px/24px, weight 200, uppercase, 3.2px tracking, in #60ecff.
- **Pastel feature cards** — "Isolation that fits the workload" on #d7eea9 with #43541f text; "An agent that operates the estate" on #c8acff with #502482 text; a third on the blue-light pair. Geist 25px/32.5px titles, 30px radius, 32px 24px padding.
- **Customer story block** — a photo or screenshot, the customer logo, a sci-fi blue stat headline, a bullet list of metrics, and a large #92928c quote with a small attribution.
- **FAQ accordion** — rows with circular plus icons on black.
- **Blog cards** — image tiles with small mono category labels and white titles.
- **Footer** — #101913 background, the logo mark, uppercase mono column headings and Geist links.

## Design System Architecture

Cockroach Labs publishes no public design system or brand guidelines that we could open (https://www.cockroachlabs.com/brand/ and https://www.cockroachlabs.com/company/ both return 404). The shipped CSS, though, contains a complete named token layer with 128 `--continuum-*` variables: colours with poetic names and light/dark partners (`--continuum-color-data-purple` #9059ff, `-data-purple-light` #c8acff, `-data-purple-dark` #502482; `--continuum-color-bio-green` #aede54 with `-light` #d7eea9 and `-dark` #43541f; `--continuum-color-sci-fi-blue` #60ecff with `-light` #dffbff and `-dark` #144f6b; `--continuum-color-timeless-taupe` #e5e4dc; `--continuum-color-deep-green` #101913; `--continuum-color-digital-black` #000), a full typography matrix per role (`--continuum-font-family-*`, `--continuum-font-size-*`, `--continuum-font-weight-*`, `--continuum-line-height-*`, `--continuum-letter-spacing-*` for hero-headline, h1, h3, body, body-l, body-xl, body-sml, eyebrows, mono-xl, mono-sml, mono-xs, footer-navigation-link), a spacing scale (`--continuum-space-8` … `-400`), and layout tokens (`--continuum-layout-boundary-max` 1440px, `--continuum-layout-margin-desktop-default` 160px, `--continuum-layout-margin-mobile` 24px). The "continuum" prefix ties the system to the Continuum product launch.

## Do's and Don'ts

**Do**
- Keep the page black, with a deep green #101913 footer.
- Set headlines in Geist at weight 200 — light, large and white.
- Highlight one phrase per headline in bio green #aede54.
- Use #9059ff pills for primary actions and make every button hover to #aede54 with black text.
- Pair each pastel card fill with its own dark text partner (green-light/green-dark, purple-light/purple-dark).
- Use Geist Mono uppercase with wide tracking for eyebrows and the ticker.

**Don't**
- Don't use bold headlines; the brand look depends on weight 200.
- Don't use square buttons; actions are 35px pills.
- Don't put white text on the pastel cards.
- Don't add drop shadows; use glows and translucency.
- Don't introduce colours outside the named Continuum palette.
- Don't document the "Ask AI" floating widget as a brand component.

## Responsive Behavior

The extractor's 390px mobile pass recorded:
- The h1 at Geist 44px/48.4px, weight 200 (71.1117px/78.2228px on desktop), 342px wide; the CSS declares `--continuum-font-size-hero-headline-sml` 44px and `--continuum-line-height-hero-headline-sml` 48px.
- Section h2 unchanged at 40px/50px with -1px tracking, in a 318px width.
- Body unchanged at 16px/27px, in a 235px column.
- The primary pill unchanged: 13.2px, 35px radius, 12px 24px, 48px tall.
- The 41px purple ticker unchanged.
- 0 visible header links and a menu toggle labelled "Open menu" (1 link counted on desktop).

The CSS declares a 24px mobile margin and an 80px tablet margin; the breakpoints at which they apply were not measured.

## Iteration Guide

1. Start with a #000000 page and a #101913 footer; add a 41px #9059ff ticker in Geist Mono uppercase with 2px tracking.
2. Set the hero in Geist 71.1117px/78.2228px at weight 200, white, with one phrase in #aede54.
3. Add a #9059ff primary pill and a transparent ghost pill (35px radius, 12px 24px, 48px, Geist Mono 13.2px); both hover to #aede54 with black text.
4. Use 40px/50px weight-200 section headings with -1px tracking and 16px/27px weight-200 body.
5. Build feature cards in the pastel pairs with 30px radius and 32px 24px padding.
6. Add sci-fi blue #60ecff eyebrows and metrics, and glowing purple or teal visuals instead of shadows.
7. Check that every colour used is one of the named `--continuum-color-*` values.
