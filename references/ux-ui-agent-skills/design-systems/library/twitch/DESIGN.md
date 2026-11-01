---
version: alpha
name: Twitch
category: "Media & Consumer Tech"
description: "Twitch.tv logged-out browse page: light #efeff1 / #f7f7f8 canvas, #0e0e10 ink, Twitch Purple #9147ff pill Sign Up button (hover #772ce8), #5c16c5 link purple, Roobert 18px/500 headings over Inter 14px body, 4px-radius thumbnails, translucent grey #adadb838 tag pills and a #451093 join banner."
colors:
  canvas: "#efeff1"
  page-body: "#f7f7f8"
  surface-raised: "#ffffff"
  ink: "#0e0e10"
  ink-muted: "#3b3b44"
  primary: "#9147ff"
  on-primary: "#ffffff"
  primary-hover: "#772ce8"
  link: "#5c16c5"
  purple-deep: "#330c6e"
  banner-purple: "#451093"
  fill-subtle: "#adadb838"
  hairline: "#adadb859"
  media-black: "#000000"
  live-red: "#eb0400"
typography:
  display:
    fontFamily: Roobert, Tajawal, Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
    letterSpacing: "-0.18px"
  subheading:
    fontFamily: Roobert, Tajawal, Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 19.6px
  body:
    fontFamily: Inter, "Noto Sans Arabic", Roobert, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  button:
    fontFamily: Inter, "Noto Sans Arabic", Roobert, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.fill-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 32px
  link:
    textColor: "{colors.link}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 0px 12px
    height: 36px
    boxShadow: rgba(50, 50, 57, 0.62) 0px 0px 0px 1px inset
  card:
    backgroundColor: "{colors.fill-subtle}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.banner-purple}"
    textColor: "{colors.on-primary}"
---

# Twitch

## Overview

This file documents the logged-out Twitch home page at `https://www.twitch.tv/` (title "Twitch"). It is not a marketing page; it is the product itself. A 50px white top bar holds the purple glitch logo, "Browse", a centred search field, a notification inbox, "Log In" and "Sign Up". A left sidebar lists "Live Channels" with avatars, the game being played and a red dot with the viewer count. The main column opens with a featured-stream carousel (a large live video with the channel card beside it), then repeating shelves — "Live on Twitch", "Categories we think you'll like", "Just Chatting & IRL", "Team FPS" — each a row of 16:9 thumbnails or tall box-art tiles with a "Show more" / "Show all" link. A purple sticky banner at the bottom reads "Join the Twitch community! Discover the best live streams anywhere." with a white "Sign Up" pill.

The interface is deliberately quiet so the streams carry the page: greys, near-black text, compact 14px type, and purple used only for brand, links and the sign-up action. Microcopy is casual and terse ("Show more", "Show all", "3 viewers", "LIVE"). Imagery is entirely user-generated: live gameplay frames, streamer webcams and publisher box art, so the page's colour changes every visit and the chrome must stay neutral to survive any combination.

## Colors

Text by characters: `#0e0e10` (2705), `#3b3b44` (680), `#ffffff` (481), `#5c16c5` (354). Backgrounds by area: `#adadb838` (1514), `#00000099` (816), `#330c6e` (771), `#efeff1` (450), `#000000` (159), `#ffffff` (146), `#451093` (73), `#eb0400` (20), `#5c16c5` (8), `#f7f7f8` (3), `#9147ff` (3).

- **canvas `#efeff1`** — the main browse area (`--color-background-alt`).
- **page-body `#f7f7f8`** — the `<body>` background (`--color-background-body`).
- **surface-raised `#ffffff`** — top bar, search input, featured channel card.
- **ink `#0e0e10`** and **ink-muted `#3b3b44`** — titles and secondary lines (channel names, game names).
- **primary `#9147ff`** — Twitch Purple, declared as `--color-twitch-purple: #9147ff`. Sign Up button fill and logo.
- **primary-hover `#772ce8`** — measured Sign Up hover fill; also `--color-twitch-purple-8` and `--color-text-link-hover`.
- **link `#5c16c5`** — section headings that are links ("Live on Twitch", "Categories") and channel names; `--color-text-link`.
- **purple-deep `#330c6e`** — `--color-twitch-purple-5`, measured over 771 units of background area.
- **banner-purple `#451093`** — the sticky join banner (`--color-background-accent-alt`).
- **fill-subtle `#adadb838`** — thumbnail placeholders, tag pills and the "Log In" button.
- **hairline `#adadb859`** — dividers between shelves.
- **live-red `#eb0400`** — the "LIVE" badge on thumbnails and the viewer-count dots.
- **media-black `#000000`** — video player backgrounds; `#00000099` is the translucent viewer-count overlay.

## Typography

Fonts loaded: Roobert 400/500/600, Inter 400/600, Noto Sans Arabic 600. Inter carries 3915 characters and Roobert 312. Roobert is Twitch's display face (a commercial typeface; the stacks fall back to Inter, then Helvetica Neue/Arial). Inter is open source.

- **display** — Roobert 18px / 19.8px, 500, -0.18px. Shelf titles ("Live on Twitch").
- **subheading** — Roobert 14px / 19.6px, 600. Sidebar heading "Live Channels".
- **body** — Inter 14px / 19.6px, 400.
- **button** — Inter 14px / 14px, 600. Buttons and bold card titles.

Only three sizes appear: 14px (3239 chars), 12px (810, tags and metadata) and 18px (178). Weight 600 dominates (2704 chars) — stream titles and channel names are semibold — followed by 400 (1339) and 500 (184). The root variables size text in rems against a 10px root: `--font-size-3: 1.8rem` matches the measured 18px and `--font-size-6: 1.4rem` the 14px.

## Layout

Desktop capture: 1280px wide; the page scrolls inside an inner scroller 1981px tall. The top bar is 50px. The sidebar sits at the left edge and the main content runs from x=264 to x=1256; the sidebar's own width was not measured. The first band (the white chrome and featured carousel) measured 529px tall, the grey shelf area below it 4423px, and the purple join banner 56px. Shelves show 3 video thumbnails (324×182px each) or 6 category tiles per row. Spacing is tight: gaps are 2px (56) and 4px; paddings 8px (147), 5px (83), 4px (38). The root variables define a spacing scale (`--space-0025: 2px`, `--space-0050: 4px`, `--space-0075: 6px`, `--space-0200: 16px`, `--space-0250: 20px`, `--space-0500: 40px`, `--space-0800: 64px`) and a `--break-lg: 1200px` breakpoint.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.22) 0px 6px 16px 0px, rgba(0, 0, 0, 0.08) 0px 0px 4px 0px` (5 — the featured carousel card), `rgba(0, 0, 0, 0.13) 0px 1px 2px 0px, rgba(0, 0, 0, 0.08) 0px 0px 2px 0px` (2 — small raised elements) and the input's inset ring `rgba(50, 50, 57, 0.62) 0px 0px 0px 1px inset`. The variable `--shadow-button-active: 0 0 6px 0 #772ce8` defines a purple glow for pressed buttons. Otherwise everything is flat; the grey `#efeff1` vs. white `#ffffff` contrast separates chrome from content.

## Shapes

Measured radii: 9000px (167 — every button and tag pill), 4px (45 — thumbnails), 2px (29 — LIVE badges and small chips), 6px (6), 50% (avatars), and the split search field `8px 0px 0px 8px` / `0px 8px 8px 0px`. Variables: `--border-radius-medium: 0.4rem`, `--border-radius-large: 0.6rem`, `--border-radius-extra-large: 1rem`.

## Components

- **button-primary** — "Sign Up": `#9147ff`, white 14px/600 Inter, full pill, 32px tall. Hover: `#772ce8`.
- **button-secondary** — "Log In": `#adadb838` translucent grey, `#0e0e10` text, pill, 32px. Hover deepens the fill to `rgba(173, 173, 184, 0.35)`.
- **text-input** — search: white, 36px tall, 8px left radius, 0 12px padding, inset 1px ring; joined to a square-ish search button on the right.
- **card (stream thumbnail)** — 324×182px, 4px radius, red `#eb0400` "LIVE" badge top-left, viewer count on `#00000099` bottom-left; below it a round avatar, 14px/600 title, `#3b3b44` channel and game lines and grey tag pills.
- **category tile** — tall box art, name, viewer count and tag pills.
- **sidebar row** — round avatar, channel name 14px/600, game in `#3b3b44`, red dot and count right-aligned.
- **join banner** — `#451093` strip, white text, white Sign Up pill on the right.

## Design System Architecture

Twitch's public brand site (https://brand.twitch.com/, reached from brand.twitch.tv) offers a "Twitch-Brand.zip" asset download but the opened page does not state colours or typefaces. The product's de-facto system is visible in about 400 shipped root variables: a purple ramp (`--color-twitch-purple-3` … `-15`, with `-9` = `#9147ff`), semantic names (`--color-background-body`, `--color-background-alt`, `--color-text-link`, `--color-text-link-hover`), named brand accents (`--color-brand-accent-ooze: #bfff00`, `-mana: #56bde6`, `-crash: #ff6905`, `-zero: #1f69ff` and others), `--space-*` and `--border-radius-*` scales, and shadow tokens. None of the brand accents was seen rendered on this page.

## Do's and Don'ts

- Do keep chrome grey and white so thumbnails dominate.
- Do reserve `#9147ff` for the Sign Up action and logo; use `#5c16c5` for links.
- Do make every button and tag a pill; keep thumbnails at 4px.
- Do use semibold 600 for titles and channel names at 14px.
- Don't enlarge type for drama; the largest measured text is 18px.
- Don't use `#eb0400` for anything other than the live signal.
- Don't add heavy shadows to cards; only the featured carousel is lifted.

## Responsive Behavior

Measured at 390px: the shelf title stays Roobert 18px/19.8px and body 14px; the Sign Up button is unchanged (`#9147ff`, pill, 32px). Mobile font sizes by characters: 14px (1400), 12px (225), 18px (76). The header still showed 4 visible links and the "Browse" menu toggle; up to 4 card columns were counted (6 on desktop). Sidebar behaviour at narrow widths was not measured.

## Iteration Guide

1. Lay out the white 50px top bar, a left sidebar and an `#efeff1` main column.
2. Build shelves: `display` title in `link` purple, a row of `card` thumbnails, a centred "Show more" link.
3. Use `button-primary` only for Sign Up and `button-secondary` for Log In.
4. Mark live content with the red LIVE badge and dot.
5. Keep all text at 12–18px and weights 400/500/600.
