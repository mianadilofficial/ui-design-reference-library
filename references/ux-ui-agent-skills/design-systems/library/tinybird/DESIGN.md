---
version: alpha
name: Tinybird
category: "Backend, Database & DevOps"
description: "Tinybird's site is a terminal-styled dark page: #0a0a0a canvas, white Roboto 64px/72px headlines at -1.28px, Roboto Mono for buttons and labels, a square-cornered (0px) neon-green #27f795 CTA with #0a0a0a text that hovers to #008060 with white text, and #151515 cards outlined in 1px #353535 at 4px radius."
colors:
  canvas: "#0a0a0a"
  ink: "#ffffff"
  primary: "#27f795"
  on-primary: "#0a0a0a"
  primary-hover: "#008060"
  surface-card: "#151515"
  hairline: "#353535"
  ink-muted: "#8d8d8d"
  ink-soft: "#999999"
  ink-faint: "#ffffff33"
  secondary: "#00c1ff"
typography:
  display:
    fontFamily: Roboto, "Roboto Fallback"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-1.28px"
  display-mobile:
    fontFamily: Roboto, "Roboto Fallback"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1.68px"
  subheading:
    fontFamily: Roboto, "Roboto Fallback"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: 0.4px
  card-title:
    fontFamily: Roboto, "Roboto Fallback"
    fontSize: 24px
    fontWeight: 400
    letterSpacing: "-0.32px"
  body:
    fontFamily: Roboto, "Roboto Fallback"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"Roboto Mono\", \"Roboto Mono Fallback\", monospace"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  tag:
    fontFamily: "\"Roboto Mono\", \"Roboto Mono Fallback\", monospace"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
rounded:
  card: 4px
  sm: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
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
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink}"
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 40px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  tab-tag:
    textColor: "{colors.ink}"
    typography: "{typography.tag}"
    rounded: "{rounded.card}"
    padding: 2px 4px
    height: 28px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    border: "1px solid #353535"
  nav-link-hover:
    textColor: "{colors.primary}"
---

# Tinybird

## Overview

Tinybird (www.tinybird.co, measured 2026-10 at 1280px; title "Tinybird · Ship faster with a Managed ClickHouse®") presents a managed ClickHouse analytics platform with the look of a developer terminal. Everything sits on a near-black `#0a0a0a` page; the only color is a neon green, `#27f795`, used for buttons, links, statistics and code highlights. Labels and buttons are monospaced (Roboto Mono), and section tabs are written in square brackets: "[SaaS / Dashboards]", "[Observability]", "[AI Analytics]", "[Real-Time Analytics]".

The hero centres "Ship fast over a Managed ClickHouse®" in white Roboto 64px, a grey sentence, a green "Try for free" button and a green text link "Contact sales". Below the bracketed tab row, a large outlined panel shows "Tinybird serves 30M requests/day with sub-second latency" with green numeric statistics (1.47B, 212TB, <1s) next to a customer quote and a strip of grey customer logos. The capture continues with "Here's how you work with Tinybird" (a CLI video in a terminal frame), "Built for Coding Agents" with a copyable install command, a node-graph architecture diagram ("Low-latency queries over large amounts of data with zero-infrastructure management"), a side-by-side comparison of self-hosting versus Tinybird in red and green terminal panels, "Startup-level speed for Enterprise-level data projects" with six outlined feature cards, a three-column wall of testimonial cards ("See who's shipping faster"), a final "Skip the infra work. Deploy your first ClickHouse project now" call over a green falling-character pattern, and a footer ending with an enormous "tinybird" wordmark that bleeds off the bottom.

A blue `#0019ff` "Introducing RawTree" announcement box floats over the hero's left side in the capture; it is a dismissible promotion and is not documented here as part of the system. The voice is direct and engineer-to-engineer ("Ship fast", "Skip the infra work"), with exact numbers as proof.

## Colors

- **Canvas `#0a0a0a`** (`--gray-950`): the single page background.
- **Ink `#ffffff`**: headlines and primary text (4,307 weighted characters).
- **Muted `#8d8d8d`**: paragraphs and descriptions (2,719 characters); `#999999` for smaller captions and `#ffffff33` for the faintest labels.
- **Primary `#27f795`**: CTA fill, text links ("Contact sales", "Sign in"), header link hover and the 56px statistics. The same value is `--color-code-success` and `--color-code-invocation` in the code palette.
- **Primary hover `#008060`** (`--primary-dark`): buttons fill dark green on hover and the label turns white.
- **Card `#151515`** (`--gray-900`) with **hairline `#353535`** (`--gray-700`) borders on 22 elements.
- **Secondary `#00c1ff`** (`--secondary-light`, `--color-code-identifier`) appears in code highlighting.

The root also declares status and category colors: `--error: #ff8389`, `--warning: #fc9f5b`, `--callout-important: #ab7df8`, and blog category hues (`--blog-ai: #8080ff`, `--blog-architecture: #ff8040`). The comparison panel uses translucent red (`#b60000b3`) and green (`#00d5a299`, `#00a078cc`) fills.

## Typography

The site loads **Roboto** (6,074 weighted characters) for headings and text, **Roboto Mono** (1,324) for buttons, tabs, code and labels, and a little **Geist** (129). A `SevenSegmentRegular` font file is also loaded.

- **Display**: Roboto 64px / 72px, weight 400, letter-spacing -1.28px (`--text-h1--letter-spacing: -.08rem`). Section h2s use the same size.
- **Subheading (h3)**: 40px / 48px, weight 400, +0.4px ("Built for Coding Agents").
- **Card titles**: 24px, -0.32px.
- **Body**: 14px / 22px, the most-read size (5,080 weighted characters). An 18px lead size is also used (`--text-body-1: 1.125rem`).
- **Statistics**: 56px green figures with tight -4.71px tracking.
- **Buttons and links**: Roboto Mono 16px / 24px, weight 400.
- **Tags**: Roboto Mono 14px / 22px in brackets.

Headlines stay at weight 400, which keeps the page light despite the large sizes; 600 and 700 appear only on small labels. All font files are self-hosted under `_next/static/`.

## Layout

The desktop page is 1280px wide and 10,323px tall; content runs from x 40 to 1225 with a centred, narrow text column for headings (h1 width 720px). Sections alternate centred headings with wide outlined panels and grids of up to five columns (logos) or three (feature and testimonial cards). Measured gaps: 8px (68 elements), 24px, 16px and 32px; paddings: 16px, 20px, 24px and 40px. The page is generous vertically and dense inside panels.

## Elevation & Depth

No box shadows were measured on the page. Depth is built with 1px `#353535` borders, the `#151515` card step above the `#0a0a0a` canvas, and translucent panel fills (`#2c2c2c80`, `#14141480`). Video and terminal frames sit inside outlined boxes. The final call-to-action band adds depth with a green falling-character animation, and the footer's giant wordmark is cropped by the viewport edge.

## Shapes

- **0px**: every green button is a sharp rectangle.
- **4px** (29 elements): cards, panels, tab tags.
- **8px** (11 elements): larger media frames.
- **Pill** (19 elements, computed 3.35544e+07px): small badges such as the "NEW" label next to RawTree in the nav. The root declares `--radius-pill: 1.5rem`.

## Components

- **Primary CTA**: `#27f795` fill, `#0a0a0a` Roboto Mono 16px / 24px label, 56px tall, padding 16px 24px, square. Hover: `#008060` fill, white label.
- **Header CTA ("Sign up")**: same style, 40px tall, padding 8px 24px.
- **Text link**: `#27f795` Roboto Mono 16px; hover adds an underline.
- **Bracket tab**: white Roboto Mono 14px in brackets, 28px tall, padding 2px 4px, 4px radius; hover fills 5% white with a 20% white border.
- **Feature card**: `#151515`, 1px `#353535` border, 4px radius, icon, 24px title and grey 14px description.
- **Testimonial card**: outlined dark card with avatar, name, role and quote, arranged in three columns.
- **Header**: logo, Product [+], Pricing, Docs, Resources [+], RawTree with a NEW badge, green "Sign in" link and "Sign up" button; white links turn green on hover.
- **Footer**: six link columns in small grey text over a cropped "tinybird" wordmark.

## Design System Architecture

No public Tinybird design system or brand page was found: https://www.tinybird.co/brand returned HTTP 404, and the Tinybird GitHub organisation (https://github.com/tinybirdco) lists product starter kits but no design-system or token repository. The shipped CSS exposes a de-facto token system on the root (197 variables): a gray scale (`--gray-50` `#f6f7f9` to `--gray-950` `#0a0a0a`), brand roles (`--primary-dark`, `--secondary-light`), status colors (`--error`, `--warning`, `--callout-*`), a code-highlighting palette (`--color-code-success`, `--color-code-identifier`, `--color-code-error`), and a named type scale with paired line-height and letter-spacing variables (`--text-h1`, `--text-h2: 4rem`, `--text-h3: 2.5rem`, `--text-body-1: 1.125rem`, `--text-button: 1rem`, plus `-mobile` variants). The site is built with Next.js and Tailwind (`--tw-*` variables).

## Do's and Don'ts

- Do keep one surface (`#0a0a0a`) and one accent (`#27f795`).
- Do set buttons, tabs and labels in Roboto Mono and wrap tab labels in square brackets.
- Do keep buttons square and cards at 4px with 1px `#353535` borders.
- Do lead with real numbers in large green figures.
- Do invert the button on hover to `#008060` with white text.
- Don't add drop shadows or gradients to cards.
- Don't use bold headlines; Roboto stays at weight 400 at display sizes.
- Don't treat the blue RawTree announcement as a brand color.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 and h2 drop from 64px / 72px to 56px / 64px with -1.68px tracking; the "Try for free" button keeps its 56px height and 16px Roboto Mono label and stretches to 335px wide. Content runs from x 20 to 372. The extractor recorded no visible header links and no visible menu toggle at this width. Statistic figures stay at 56px. Section headings such as "ClickHouse performance + Vercel-level developer experience" measure 56px, and feature card titles 24px. The most-read mobile size is 14px. The root declares mobile type variables (`--text-h1-mobile--line-height: 4rem`, `--text-h2-mobile: 2.5rem`, `--text-h3-mobile: 2rem`). Breakpoints between 390px and 1280px were not measured.

## Iteration Guide

1. Set the canvas to `#0a0a0a`, text to white and `#8d8d8d`.
2. Use Roboto 400 for headings (64px / 72px, -1.28px) and Roboto Mono for every button and label.
3. Add square `#27f795` buttons (56px hero, 40px header) with the `#008060` hover.
4. Build panels and cards from `#151515` fills and 1px `#353535` borders at 4px.
5. Present proof as large green numbers and terminal-style code blocks.
6. Take new values from the root variables (gray scale, code palette, `--text-*` scale) before inventing any.
