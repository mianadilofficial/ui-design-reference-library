---
version: alpha
name: Hashnode
category: "Developer Tools & IDEs"
description: "Hashnode's dark home feed uses a #080a0e graphite page with a #15171c sidebar, #e6e8eb headings in Geist 700 (48px/-1.2px hero), Inter 14px/20px body in #9fa1a5, a near-white #e4e5e8 'Get started' button with 6px radius, and 12px-radius #23262c cards — monochrome ink as the brand's primary."
colors:
  canvas: "#080a0e"
  page-body: "#080a0e"
  surface-sidebar: "#15171c"
  ink: "#9fa1a5"
  ink-strong: "#e6e8eb"
  primary: "#e4e5e8"
  on-primary: "#15171c"
  surface-raised: "#1b1e23"
  surface-card: "#23262c"
  ink-bright: "#fafafa"
  nav-bg: "#0d111699"
  hairline: "#1a1d22"
  badge-new: "#4cb86a"
typography:
  display:
    fontFamily: Geist, "Geist Fallback", system-ui, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: Geist, "Geist Fallback", system-ui, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.9px"
  heading:
    fontFamily: Geist, "Geist Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  post-title:
    fontFamily: Geist, "Geist Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: Inter, "Inter Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Inter, "Inter Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  link:
    fontFamily: Inter, "Inter Fallback", system-ui, -apple-system, "system-ui", "Segoe UI", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 48px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink-strong}"
  sidebar:
    backgroundColor: "{colors.surface-sidebar}"
    textColor: "{colors.ink-strong}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 16px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.35) 0px 1px 2px 0px, rgba(0, 0, 0, 0.35)
      0px 2px 8px -2px
---

# Hashnode

## Overview

Hashnode is a blogging platform for developers; the measured page, https://hashnode.com/, is titled "Hashnode — The Best Blogging Platform for Builders in Tech". Logged out, it renders as an app shell rather than a classic landing page: a fixed left sidebar (logo, Feed, Pro, Agents, Search with a ⌘K hint, a "What's new" card, Theme, Sign in, More) and a main column headed "Popular posts — Last 24h: 720 articles 467 writers". The page measured in its dark appearance.

Inside the main column, a hero states "Write to think. / Publish to connect." — the first line in bright off-white, the second in a dimmer grey — followed by "The blogging platform for developers and engineers. Start a blog for free, sharpen your ideas in public, and build a readership that stays yours." and a single light "Get started" button with a pencil icon. To the right sits a white single-line illustration of a figure leaning over a laptop. Beneath, a six-item feature grid in three columns lists "You get found", "Built for technical writing", "Your own custom domain", "A GraphQL API behind all of it", "Move in without losing anything" and "Never locked in", each with a thin outline icon, a 16px title and a short grey description separated by hairlines.

The capture shows large empty regions above the hero and below it: the feed lives in an inner scroller (4,694px tall inside a 2,400px page), so post cards were measured in the DOM but did not render in the screenshot. Hashnode's own brand guide (https://hashnode.com/brand) describes the identity as "Hashnode, refined for focus", with neutrals that keep the interface "editorial and quiet" for long-form writing — which is exactly how the page reads: monochrome, low-contrast greys, one light action.

## Colors

The palette is a graphite neutral ramp with a monochrome primary. Hashnode's brand guide names the ramp "Graphite 50" to "Graphite 950" with "whisper chroma at hue 264", and says the primary is "monochrome ink" — near-black in light mode and near-white in dark. The measured dark values:

- **Canvas / page-body `#080a0e`** — the body background and the dominant screen color (about 73% of the capture).
- **Surface-sidebar `#15171c`** — the left sidebar, the second most visible color (about 18%).
- **Surface-raised `#1b1e23`** and **surface-card `#23262c`** — raised panels and the "What's new" card.
- **Nav-bg `#0d111699`** — the translucent header strip over the feed ("Popular posts").
- **Hairline `#1a1d22`** — measured divider color between feed items and feature tiles; `#080a0e` is also used as a border color.
- **Ink `#9fa1a5`** — the most-read text: post excerpts, feature descriptions, hero subhead.
- **Ink-strong `#e6e8eb`** — headings, sidebar items and links.
- **Ink-bright `#fafafa`** — the brightest text, used sparingly.
- **Primary `#e4e5e8`** with **on-primary `#15171c`** — the "Get started" button: a near-white fill with graphite text. On hover it drops to 90% opacity (measured).
- **Badge-new `#4cb86a`** — the green "New" pill next to "More" in the sidebar. A dark teal `#003e41` was measured as the image background in the "What's new" card.

The brand guide reserves "Pro amber" for Pro and "AI lavender" for AI features; the stylesheet declares `--pro-strong: #9a6418`, `--ai-accent: #7550d1` and `--success: #2e9e52` at the root (light-theme values), none of which was measured as a visible fill on this page.

## Typography

Two families are loaded, both as variable fonts (weights 100–900):

- **Geist** — headings. The hero `display` is 48px/48px at weight 700 with -1.2px tracking (-2.5%). Feature titles (`heading`) are 16px/24px at 500; feed post titles (`post-title`) are 16px/24px at 700.
- **Inter** — everything else. `body` is 14px/20px at 400, the dominant size by far (4,656 characters). The button is 16px/24px at 500, links 16px/24px at 400. Other measured sizes: 20px, 12px and 18px; uppercase labels use 14px with 1.4px tracking and 12px with 0.6px tracking ("WHAT'S NEW · Oct 7").

Weight is the main hierarchy tool after color: 400 for reading text, 500 for titles and buttons, 700 for the hero and post titles, with a little 600. The stylesheet also declares Google Sans Code and Instrument Serif faces, which were not measured on visible text. Geist and Inter are both open-source, so no substitute is needed.

## Layout

The desktop layout at 1280px is a two-pane app shell: a fixed left sidebar and the main content column, with feed content spanning from 41px to 1248px of the viewport and a three-column grid for the feature tiles (max 3 card columns measured). The header strip over the main column is 45px tall.

Spacing is compact and regular. Gaps cluster at 8px (218 uses), 6px, 12px and 4px, with 20px between groups and 48px/64px only twice. Paddings are mostly 8px, 12px, 16px and 20px, with 32px for larger insets. The token scale (2px to 40px) covers all of these. Density is that of a reading app: small 14px text, tight 20px leading and narrow gutters, with the hero the only large typographic moment.

## Elevation & Depth

Depth is created by stepping the graphite surfaces rather than by shadows: `#080a0e` page → `#15171c` sidebar → `#1b1e23` → `#23262c` card. Two shadows were measured. The most frequent (21 elements) is a 1px inset ring of white at 10% opacity, which draws a faint hairline inside dark controls. Cards (7 elements) carry `rgba(0, 0, 0, 0.35) 0px 1px 2px 0px` plus `rgba(0, 0, 0, 0.35) 0px 2px 8px -2px`, a tight dark lift that separates the "What's new" card from the sidebar. The header uses a translucent `#0d111699` fill so content scrolls under it.

## Shapes

- **Pill (9999px)** — the most frequent radius (144 elements): tags, the "New" badge, avatar frames and small chips.
- **8px** — 54 elements: sidebar items (the active "Feed" row), inputs and small panels.
- **6px** — the "Get started" button and compact controls.
- **12px** — cards; a `0px 0px 12px 12px` variant rounds only the bottom of two panels.

The root variable `--radius: .5rem` (8px) is the base radius of the component system. Icons are thin outline glyphs (search, code brackets, globe, braces, download, branch) at text size.

## Components

- **button-primary** — "Get started": `#e4e5e8` fill, `#15171c` Inter 16px/24px weight-500 text, 6px radius, `0px 16px` padding, 48px tall, with a trailing pencil icon. Hover lowers the fill to 90% opacity.
- **sidebar** — `#15171c` background; items are 14px Inter with a 16px outline icon; the active item gets a raised graphite fill and 8px radius; a ⌘ K keycap hint sits on "Search".
- **nav** — the main-column header: translucent `#0d111699`, 14px bold "Popular posts" at left, live counters at right with a green dot.
- **card** — `#23262c`, 12px radius, 16px padding, dark two-layer shadow; the "What's new" card holds an uppercase date label, a teal media tile, a bold title and a two-line grey excerpt.
- **Feature tile** — no fill; a top hairline, outline icon, `heading` title in `#e6e8eb`, description in `#9fa1a5`.
- **link** — `#e6e8eb` Inter 16px/24px.
- **Badge** — green `#4cb86a` pill with small white "New" text.

## Design System Architecture

Hashnode publishes a brand guide at https://hashnode.com/brand ("Hashnode Brand Guide: Colors, logos, and rationale for the refreshed identity") with a Graphite 50–950 neutral ramp, Pro amber, AI lavender, Success green and Danger red swatches, a "Thought process" rationale and the logo; the page text does not list hex values, typefaces or radii. Its GitHub organisation https://github.com/Hashnode publishes a headless blog `starter-kit` (TypeScript, GraphQL API) but no component or token package. The shipped CSS is a Tailwind v4 build with shadcn-style semantic variables: `--primary-foreground`, `--card`, `--card-foreground`, `--popover`, `--muted` (`#edeef0`), `--border` (`#eaebee`), `--ring`, `--sidebar-accent`, `--radius: .5rem`, plus brand roles `--ai-accent`, `--ai-border`, `--pro-strong`, `--success`, `--buildful` (`#11a968`) and changelog colors (`--changelog-fix`, `--changelog-improvement`, `--changelog-breaking`). The root values are the light theme; the dark values measured above come from the active dark appearance.

## Do's and Don'ts

**Do**
- Keep the UI monochrome: graphite surfaces, grey text, a near-white primary in dark mode.
- Step surfaces (`#080a0e` → `#15171c` → `#23262c`) to separate regions instead of adding borders or color.
- Use Geist 700 with tight negative tracking only for the hero; keep the rest in 14px Inter.
- Give the second line of a two-line headline a dimmer grey, as the hero does.
- Reserve amber for Pro and lavender for AI, as the brand guide states.
- Keep illustrations as single-weight white line art.

**Don't**
- Don't introduce a saturated brand blue or gradient buttons; the primary is ink.
- Don't raise body text above `#e6e8eb` brightness for long passages; reading text is `#9fa1a5`.
- Don't use large radii on buttons — the measured button radius is 6px.
- Don't add heavy shadows; depth comes from surface steps.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero `display` shrinks from 48px/48px to 36px/40px with -0.9px tracking; feature titles stay 16px/24px Geist 500; body text stays 14px/20px Inter in `#9fa1a5`; the "Get started" button keeps its 48px height, 6px radius and `0px 16px` padding. The mobile header measured 49px tall with a `#0d0e14b3` translucent background and `8px 12px` padding; a menu toggle labelled "Open menu" was detected as visible, with 1 header link visible. Content spans 20px to 370px and 1 card column was counted. Mobile font sizes recorded: 14px, 18px, 16px, 12px, 20px, 36px. Breakpoint widths and the sidebar's mobile behaviour were not measured.

## Iteration Guide

1. Lay down the two-pane shell: `#080a0e` canvas with a `#15171c` sidebar.
2. Set text in Inter 14px/20px `#9fa1a5`, headings and nav in `#e6e8eb`.
3. Add one hero in Geist 700 48px with -1.2px tracking; dim the second line.
4. Use the single `button-primary` (near-white, 6px radius, 48px tall) for the main action.
5. Build cards from `#23262c` with 12px radius and the dark two-layer shadow; feature tiles get only a top hairline.
6. Check the light theme separately against the root variables before shipping; compare with https://hashnode.com.
