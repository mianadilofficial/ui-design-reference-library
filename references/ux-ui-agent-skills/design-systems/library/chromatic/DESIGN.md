---
version: alpha
name: Chromatic
category: "Developer Tools & IDEs"
description: "Chromatic's chromatic.com marketing site, built with its own Tetra style guide: dark slate #141c24 canvas, white and #eef2f6 Nunito Sans text (48px/600 headlines), blue #006deb pill CTAs with 42px radius, outlined white pills, an uppercase tracked DEVELOP / TEST / DELIVER band in yellow #ffae00, cyan #37d5d3 and purple, and colored 8px-radius stat cards."
colors:
  canvas: "#141c24"
  page-body: "#f7fafd"
  ink: "#ffffff"
  ink-soft: "#eef2f6"
  ink-muted: "#b2becd"
  primary: "#006deb"
  on-primary: "#ffffff"
  primary-light: "#1a85ff"
  nav-hover-text: "#479dff"
  accent-yellow: "#ffae00"
  accent-cyan: "#37d5d3"
  accent-green: "#66bf3c"
  accent-purple-light: "#b991de"
  accent-orange: "#ff4400"
  brand-pink: "#ff4785"
  brand-purple: "#6f2cac"
  card-indigo: "#212154"
  card-green: "#258644"
  card-teal: "#274646"
  card-blue: "#203dd3"
  surface-panel: "#19222dcc"
  hairline: "#ffffff1a"
typography:
  display:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 64px
  display-mobile:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 38px
  heading:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 30px
    fontWeight: 600
    lineHeight: 38px
  card-stat:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
  nav:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  eyebrow:
    fontFamily: __Nunito_Sans_f38b0c, "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 4.55px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 7px
  xl: 8px
  2xl: 36px
  3xl: 42px
  4xl: 48px
  pill: 9999px
spacing:
  s1: 3.5px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 0px 24px
    height: 40px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 1px
  nav:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 0px 8px
  nav-link-hover:
    textColor: "{colors.nav-hover-text}"
  card:
    backgroundColor: "{colors.card-indigo}"
    textColor: "{colors.ink}"
    typography: "{typography.card-stat}"
    rounded: "{rounded.xl}"
    padding: 40px 32px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 8px 16px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 80px 0px
    borderColor: "{colors.hairline}"
---

# Chromatic — chromatic.com

## Overview

Chromatic's home page (https://www.chromatic.com, title "Frontend UI Testing & Review Platform for Teams • Chromatic") sells visual, interaction and accessibility testing for UI components, "Made by the Storybook team". The page is almost entirely a dark slate `#141c24` canvas (66% of capture pixels) with white Nunito Sans type; color enters through one saturated gradient strip, product screenshots and a set of small colorful icons.

The header carries the orange Chromatic logo, Platform, Solutions, Docs, Resources and Pricing menus, then Contact, Sign in and an outlined **Sign up** pill. The hero is split: on the left a gradient-bordered "New: Visual testing for Vitest" pill and the 48px headline "Ship flawless UIs with less work"; on the right a paragraph, a blue **Get started for free** pill, an outlined **Talk to an expert** pill and a "Made by the Storybook team" note. Under it, a timeline labelled DEVELOP (yellow), TEST (green) and DELIVER (purple) in widely tracked uppercase leads into a full-width purple-to-coral gradient band of white UI-component cards (charts, buttons, radio lists, a pixel dinosaur, pagination) with green check badges. A "Trusted by" grid of grey logos follows, then section after section in the same pattern — two-line headline at left, paragraph and outlined pill at right, a large light-themed product screenshot, and a three-column grid of icon + bold title + description — covering UI Tests, UI Review, Publish and setup. A testimonial row, a "Connect workflows across teams" list, colored stat cards ("3 critical bugs per week prevented", "Fix UI issues before merging code"), and a dark footer close the page.

## Colors

Measured values come from `web/data/extracted/chromatic.json`; palette names follow Chromatic's Tetra tokens (`src/_tokens/tokens.ts` in https://github.com/chromaui/tetra).

- **Canvas `#141c24`** — the page; Tetra's `slate900` is `hsl(212 27 11)`. The `body` element computes `#f7fafd` (`page-body`) underneath.
- **Ink `#ffffff`** — headlines and nav; **ink soft `#eef2f6`** — body paragraphs; **ink muted `#b2becd`** — captions and secondary text.
- **Primary `#006deb`** — the fill of Get started for free and Sign up CTAs. Nav items hover to `#479dff` text with a `rgba(30, 167, 253, 0.07)` fill; the lighter **`#1a85ff`** appears on active borders. Tetra's blue scale is `hsl(212 100% …)`.
- **Accents** — yellow `#ffae00` (DEVELOP), green `#66bf3c` (TEST), light purple `#b991de` (DELIVER), cyan `#37d5d3` and orange `#ff4400`: Tetra's `yellow500`, `green500`, `purple300`, `cyan500` and `orange500`.
- **Brand pink `#ff4785`** and **brand purple `#6f2cac`** — Tetra's `pink500` and `purple500`.
- **Stat cards** — `#212154` indigo, `#258644` green, `#274646` teal, `#203dd3` blue.
- **Surface panel `#19222dcc`** — translucent dark panels; **hairline `#ffffff1a`** — 10% white dividers (Tetra `whiteTr10`).

## Typography

Nunito Sans is the only family, loaded via Next.js as `__Nunito_Sans_f38b0c` (Tetra's `fontFamily.sans`: `var(--nunito-sans, "Nunito Sans"), "Nunito Sans", "Helvetica Neue", Helvetica, Arial, sans-serif`). Tetra defines named styles from `heading56` down to `body14`; the home page uses:

- **Display** — 48px / 64px, 600 (`heading48`).
- **Heading** — 30px / 38px, 600 (`heading30`: "Scan all possible UI states to pinpoint regressions").
- **Card stat** — 20px / 32px, 600.
- **Body** — 16px / 28px, 400.
- **Button** — 14px, 600; **nav** 14px / 20px, 700.
- **Eyebrow** — 13px, 700, uppercase, 4.55px tracking (DEVELOP / TEST / DELIVER, footer column titles); an 11px version tracks 3.85px.

Measured sizes by character count: 16px, 14px, 20px, 12px, 48px, 30px, 24px, 13px, 11px. Nunito Sans is open-source; no substitute is needed.

## Layout

At 1280px the hero spans x = 162 to x = 1118 in two columns. Measured bands: a 581px `#141c24` hero, a 117px media strip (the gradient component band), a 128px white strip, then long `#141c24` bands of 1,947px (3 columns) and 7,417px (4 columns), a `#19232f` closing CTA and the footer. Every section repeats the split head (headline left, copy + pill right) and a 3-column feature grid. Gaps cluster at 20px, with 80px and 112px between sections; paddings at 20px, with 112px section padding and 80px footer padding. Tetra's spacing scale steps 1, 2, 4, 8, 12, 16, 20, 24, 32, 40, 48, 64, 80, 96, 112, 128 and 144px; its breakpoints are 600, 800, 900, 1200 and 1800px, matching the stylesheet's min-width queries.

## Elevation & Depth

Stat cards cast `rgba(0, 0, 0, 0.2) 0px 8px 16px 0px`. Product screenshots use a four-layer shadow `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 10px 20px 0px, rgba(0, 0, 0, 0.05) 0px 20px 40px 0px, rgba(0, 0, 0, 0.05) 0px 40px 30px 0px`. Outlined pills are drawn with a `rgb(255, 255, 255) 0px 0px 0px 1px` ring rather than a border. The announcement pill uses a conic gradient border (magenta, blue, orange) over the canvas color.

## Shapes

CTAs are pills with a **42px** radius (48px and 36px on other pills). Cards and screenshot frames use **8px**; small UI elements **5px**, **6px** and **7px**; nav items **4px**. Icons and avatars are circles (50% / 100%).

## Components

- **Primary button** — `#006deb`, white Nunito Sans 14px weight 600, 42px radius, padding 0px 24px, 40px tall; hover brightens the blue.
- **Outlined pill** — transparent, white text, 1px white ring ("Sign up", "Talk to an expert", "See UI Tests in action"); hover adds a 10% white fill.
- **Nav link** — white 14px bold, 4px radius, padding 0px 8px; hover `#479dff` text on a faint blue fill.
- **Announcement pill** — 12px text inside a conic-gradient border.
- **Feature tile** — dark tile with icon, bold title and description; the selected tile has a blue border.
- **Stat card** — colored fill (`#212154`, `#258644`, `#274646`, `#203dd3`), white 20px semibold text, 8px radius, padding 40px 32px, customer logo at the bottom.
- **Footer** — uppercase tracked column titles, 1px `#ffffff1a` top border, 80px vertical padding.
- The round blue chat launcher in the capture is a third-party widget, not brand UI.

## Design System Architecture

Chromatic publishes its marketing design system as open source: **Tetra**, "Style Guide + UI Library for Chromatic and Storybook marketing sites" (https://github.com/chromaui/tetra, Storybook at https://tetra.chromatic.com). Its `src/_tokens/tokens.ts` exports `color` (black/white with 10% and 5% transparencies, slate and blue scales in HSL at hue 212, and cyan, green, yellow, orange, pink and purple scales from 50 to 600), `fontFamily`, `fontWeight` (400/500/600/700), `fontSize` (11–60px in rem), `lineHeight`, `breakpoint` and `spacing`; `src/_helpers/typography.ts` composes them into named styles such as `heading48` (48px / 64px semibold). Components (Button, Header, Footer, Grid, Stack, Accordion…) are built with Emotion. On the live site the only root variable is `--nunito-sans`; everything else is compiled into component styles.

## Do's and Don'ts

**Do**
- Keep the canvas `#141c24` with white headlines and `#eef2f6` body copy.
- Use one blue `#006deb` pill per section for the main action, paired with an outlined white pill.
- Use the accent scales (yellow, green, cyan, purple, orange) only in small doses: labels, icons, stat cards.
- Pair each split section head with a large light-themed product screenshot.
- Set eyebrows in 13px bold uppercase with wide 4.55px tracking.

**Don't**
- Don't use square buttons; CTAs are 42px-radius pills.
- Don't put long text in accent colors.
- Don't add heavy borders; outlines are 1px rings or 10% white hairlines.
- Don't document the chat launcher as part of the brand.

## Responsive Behavior

The 390px mobile pass recorded the hero headline at 30px / 38px (down from 48px / 64px), body text at 16px, no visible header links with a menu toggle labelled "Toggle Menu", a single card column, and a 641px hero band with content from x = 20 to x = 370. Mobile font sizes by frequency: 16px, 14px, 12px, 30px, 24px, 20px, 13px, 10px, 11px. The stylesheet's breakpoints are min-width 600px, 800px, 900px, 1200px and 1800px (Tetra's scale). Other reflow behavior was not measured.

## Iteration Guide

1. Start from `#141c24` with white Nunito Sans; headlines 48px / 64px at 600, body 16px / 28px.
2. Split each section head: headline left, `#eef2f6` paragraph and outlined pill right.
3. Use a `#006deb` 40px pill (42px radius) for the main action.
4. Follow with a screenshot using the four-layer shadow and a 3-column icon grid.
5. Pull accent colors from Tetra's scales; check https://github.com/chromaui/tetra before adding new values.
