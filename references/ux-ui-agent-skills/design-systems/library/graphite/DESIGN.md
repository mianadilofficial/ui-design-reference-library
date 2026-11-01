---
version: alpha
name: Graphite
category: "Developer Tools & IDEs"
description: "Graphite's home page is near-black #0a0a0a with a #171717 announcement bar, matterFont 500 headlines (60px/60px at -1.5px) in #fafafa, matterFont 16px/24px body in #a1a1a1, light-grey #e5e5e5 'Get started for free' buttons with #171717 text and 8px radius beside #262626 bordered secondaries, and 8px-radius case-study cards on #7777774d hairlines."
colors:
  canvas: "#0a0a0a"
  ink: "#a1a1a1"
  primary: "#e5e5e5"
  on-primary: "#171717"
  surface-bar: "#171717"
  surface-button-dark: "#262626"
  ink-soft: "#ffffffbf"
  ink-strong: "#fafafa"
  ink-faint: "#ffffff8c"
  ink-dim: "#404040"
  hairline: "#ffffff"
  link: "#d4d4d4"
  nav-text: "#ffffff99"
  card-border: "#7777774d"
  graphic-orange: "#ff6231"
typography:
  display:
    fontFamily: >-
      matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif,
      system-ui, sans-serif
    fontSize: 60px
    fontWeight: 500
    lineHeight: 60px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: >-
      matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif,
      system-ui, sans-serif
    fontSize: 42px
    fontWeight: 500
    lineHeight: 42px
    letterSpacing: "-1.05px"
  heading:
    fontFamily: >-
      matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif,
      system-ui, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
  subheading:
    fontFamily: matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: >-
      matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif,
      system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: >-
      matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif,
      system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  lead:
    fontFamily: >-
      matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif,
      system-ui, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.9px"
  caption:
    fontFamily: matterFont, "matterFont Fallback", -apple-system, blinkmacsystemfont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", sans-serif, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 11px
  xl: 12px
  2xl: 16px
  3xl: 17px
  4xl: 20px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 12px
  s8: 13.5px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 32px
    height: 40px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 42px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px
      1px 2px -1px
  button-secondary:
    backgroundColor: "{colors.surface-button-dark}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    border: "1px solid #404040"
    rounded: "{rounded.sm}"
    padding: 0px 32px
    height: 40px
  link:
    textColor: "{colors.link}"
    typography: "{typography.caption}"
  nav:
    textColor: "{colors.nav-text}"
    padding: 0px 16px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(101, 129, 128, 0.15) 0px 0px 2px 2px inset, rgba(32, 47, 46, 0.15) 0px 0px 4px 4px inset
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 80px 0px 0px
---

# Graphite

## Overview

Graphite (graphite.dev now resolves to graphite.com) is an AI code-review platform built around stacked pull requests. The measured page is titled "Graphite - Code review for the age of AI". A thin `#171717` bar at the very top announces "Cursor Cloud Agents are now in Graphite. Create, review, and ship without leaving your PR. Read more →". Below it, a rounded header holds the white Graphite mark and wordmark, centred links (Features and Resources with chevrons, Customers, Docs, Pricing, Contact) and two buttons — a dark "Log in" with a "G" keycap hint and a light "Sign up →".

The hero is dark and cinematic: "The next generation of code review." in large white type, the line "Graphite is the AI code review platform where teams ship higher quality code, faster.", a light "Get started for free →" and a dark "Request a demo", and the reassurance "Free for your first 30 days. No credit card required. Synced with your GitHub account." At right, a glowing white neon outline of stacked hexagons recedes into depth. A "Trusted by leading engineering teams at" row shows greyscale Vercel, Duolingo, X and Ramp logos. A large video frame ("Intro to Graphite", with a Play button) shows a tilted, blurred PR inbox, with a tab strip beneath (Stacked PRs, PR page, AI code review, Chat, Merge queue, PR inbox, Dev metrics). Case-study cards (Semgrep, Shopify, Ramp — each with a coloured logo panel) follow, then a scroll-driven feature section (a large region of the capture rendered blank), "Everything you need to ship faster" as a bento of dark panels with product screenshots, "Developer infrastructure built for your team", and a dark footer.

Copy is product-precise and confident ("Never wait on review again", "Don't miss a beat", "Merge without conflicts or delays").

## Colors

- **Canvas `#0a0a0a`** — the body and dominant background.
- **Surface-bar `#171717`** — the announcement bar and raised panels; also the text colour on light buttons (**on-primary**).
- **Surface-button-dark `#262626`** — dark buttons ("Request a demo", "Log in"); `#323232` and `#29292e` were measured as further panel greys.
- **Primary `#e5e5e5`** — the light grey fill of "Get started for free" and "Sign up".
- **Ink `#a1a1a1`** — the most-read text: paragraphs and descriptions. **Ink-strong `#fafafa`** — headlines. **Ink-soft `#ffffffbf`** (75% white) and **ink-faint `#ffffff8c`** (55%) — secondary copy; **nav-text `#ffffff99`** (60%) — header links; **ink-dim `#404040`** — the dimmest labels; **link `#d4d4d4`** — card text and small links.
- **Hairline `#ffffff`** and **card-border `#7777774d`** — white 1px borders on 21 elements and 30%-grey borders on the case-study cards.
- **Graphic-orange `#ff6231`** — one of four equal-area coloured blocks measured on the page (with `#ffb931`, `#14c7ff` and `#1061ff`); they sit in the scroll-animated section that rendered blank in the capture. Case-study panels add brand fills of their own (Ramp's yellow-green `#e4f222`, a red `#d30602`).

The stylesheet also defines brand accents — `--brand-blue: #04a9d7`, `--brand-blue-2: #75aaff`, `--brand-magenta: #f152ff`, `--brand-orange: #f83`, `--brand-teal: #2eead4` — and category colours (`--color-category-*`); green `#00c950` and orange `#ff8833` appear in small amounts of text.

## Typography

- **Matter** (served as `matterFont`, files `MatterRegular`/`MatterSemiBold`; weights 400, 500 and 600 loaded) is the only measured family — all 3,676 measured characters.
- `display`: 60px/60px at weight 500 with -1.5px tracking (-2.5%).
- `heading`: 36px/40px at 500 ("Everything you need to ship faster"); `subheading`: 20px/28px at 500 (feature titles such as "The AI reviewer you can collaborate with").
- `body`: 16px/24px at 400 — the most-used size (1,555 characters); `lead`: 18px/28px with -0.9px tracking; `button`: 14px/20px at 500; `caption`: 12px/16px for card meta.
- The CSS also declares DM Mono (`--font-mono`, with the `ss05` stylistic set), JetBrains Mono and Inter; these did not measure on visible marketing text.

Headlines use weight 500, not bold; 600 appears in the announcement bar. Matter is a commercial typeface; substitutes are geometric grotesks such as Inter Display or General Sans at 500.

## Layout

At 1280px the page is 8,966px tall. The announcement bar is 43px tall; the header beneath is 74px tall within a 1,152px container (`--header-height: 72px`, `--header-right: 1216px`), with seven header links counted. Main content spans from 85px to 1200px. The hero has a minimum height of 900px (`--hero-min-height: 900px`).

Spacing is driven by an 8px rhythm: gaps of 8px (140 uses), 4px and 16px dominate; 48px and 56px separate groups. Paddings are mostly 8px, 16px, 24px and 32px, with 50px panel padding and 80px above the footer. The case-study row shows three cards; the feature tab strip shows seven tabs across the video frame (up to 7 card columns measured); the bento uses two uneven columns.

## Elevation & Depth

Depth is mostly light and glow on black. The most frequent shadow is `rgba(0, 0, 0, 0.25) 0px 4px 4px 0px` (44 elements). Buttons carry a soft `0 1px 3px` plus `0 1px 2px -1px` at 10% black. Case-study cards use a teal-grey inner glow: `rgba(101, 129, 128, 0.15) 0px 0px 2px 2px inset, rgba(32, 47, 46, 0.15) 0px 0px 4px 4px inset`. Light-on-dark buttons in the bento ("Start stacking", "Start chatting") use a skeuomorphic pair — a white 1px top inset and `rgba(0, 0, 0, 0.1) 0px -2px 6px` inset — on a `#fcfcfc` fill with 20px radius. The neon hexagon and the tilted, blurred product video create the main sense of depth.

## Shapes

- **10px** — the most frequent radius (30 elements), matching the root `--radius: .625rem`.
- **8px** — buttons and case-study cards (28).
- **12px** — panels and the header container (its SVG mask uses `rx="12"`).
- **20px** and **24px** — the light bento buttons and larger panels.
- **Pill (9999px)** — 12 elements, including the round Play button.
- Half-round shapes (`50% 50% 0px 0px` and `0px 0px 50% 50%`, 11 each) form decorative elements.

## Components

- **button-primary** — "Get started for free →": `#e5e5e5` fill, `#171717` 14px/20px weight-500 text, 8px radius, `0px 32px` padding, 40px tall, soft shadow.
- **button-header** — "Sign up →": same colours, `8px 16px` padding, 42px tall.
- **button-secondary** — "Request a demo": `#262626` fill, `#fafafa` text, 1px `#404040` border, 8px radius, 40px tall. "Log in" uses the same fill with a matching border and a "G" keycap; on hover its fill lightens to a translucent grey.
- **Light pill button** — "Start stacking" / "Start chatting": `#fcfcfc` fill, black 16px text, 20px radius, `8px 20px` padding, inset highlight.
- **card** — case study: `#0a0a0a`, 1px `#7777774d` border, 8px radius, teal-grey inner glow, 362×248px; a coloured logo panel on top, then a 12px label and a short `#d4d4d4` description.
- **nav** — 60%-white 14px links with chevrons on dropdowns.
- **Announcement bar** — `#171717`, centred 14px text with a "Read more →" link.
- **footer** — `#0a0a0a`, `#e5e5e5` 14px/500 links in columns (Features, Company, Resources, Contact) with an 80px top padding.

## Design System Architecture

No public brand page was found: https://graphite.com/brand and https://graphite.com/press return 404 (https://graphite.dev/brand 301-redirects to the former). The GitHub organisation https://github.com/withgraphite pins `homebrew-tap`, an archived `graphite-chrome-extension` and archived `docs`, with no design-system or token repository visible. The shipped CSS is a Tailwind v4 build with shadcn-style semantic variables (`--border`, `--card`, `--popover`, `--muted`, `--primary-foreground`, `--sidebar-primary-foreground`), `--radius: .625rem` with `--radius-xs` to `--radius-4xl`, font variables (`--font-body`, `--font-matter`, `--font-mono: 'dmMono'`, `--font-jet-brains-mono`, `--font-inter`), layout variables (`--header-height`, `--hero-min-height`, `--hero-max-height`), and brand/category colours (`--brand-*`, `--color-category-*`, `--green: #0dd3ad`, `--red: #ff5487`, `--dark-purple: #39036f`). Several root values (`--card: #fff`, `--border: #e5e5e5`) are light-theme defaults that the dark marketing page overrides.

## Do's and Don'ts

**Do**
- Keep the page near-black (`#0a0a0a`) with grey `#a1a1a1` reading text and `#fafafa` headlines.
- Set headlines in Matter 500 with about -2.5% tracking.
- Use a light-grey `#e5e5e5` primary with dark text, paired with a `#262626` bordered secondary.
- Let glowing white line art and tilted product footage carry the visual drama.
- Keep buttons and cards at 8px–10px radii.
- Use thin 30%-grey borders and soft inner glows on cards.

**Don't**
- Don't introduce a saturated primary button colour; brand accents stay in illustrations and logos.
- Don't use pure white for long text; body copy is `#a1a1a1`.
- Don't use bold 700 headlines; the system uses 500.
- Don't flatten the page into light sections; the measured page has no light bands.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero `display` drops from 60px/60px to 42px/42px with -1.05px tracking; "Everything you need to ship faster" from 36px/40px to 26.25px/31.5px; paragraph text measured 14px/21px with 0.35px tracking; the "Get started for free" button measured 12.25px text, 6.75px radius, `0px 28px` padding and 35px height. The mobile header measured 62px tall with `0px 14px` padding; a "Menu" control was detected as visible with 3 header links visible ("Log in", "Sign up", "Menu"). Mobile font sizes recorded: 14px, 21px, 12.25px, 10.5px, 26.25px, 15.75px, 8.75px, 42px, 17.5px. Breakpoint widths were not measured.

## Iteration Guide

1. Start with `#0a0a0a`, a 43px `#171717` announcement bar and a 74px header.
2. Set the hero in Matter 500 60px/60px at -1.5px, with `#a1a1a1` supporting copy.
3. Pair `button-primary` (`#e5e5e5`, 8px) with `button-secondary` (`#262626`, `#404040` border).
4. Add one luminous line-art illustration rather than colour blocks.
5. Build case studies as 8px-radius cards with `#7777774d` borders and the inner glow.
6. Compare against https://graphite.com before shipping.
