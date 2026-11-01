---
version: alpha
name: The New York Times
category: "News & Publishing"
description: "The New York Times home page (nytimes.com): white #ffffff page, #121212 ink, #5a5a5a summaries, #dfdfdf hairline rules and #ebebeb/#f8f8f8 grey wells; a slate-blue #567b95 square subscribe button and #326891/#346eb7 accents. nyt-cheltenham headlines (24px/300 feature, 20px/700 news), nyt-imperial 14px summaries, nyt-franklin 11px uppercase labels; 3px button shape."
colors:
  canvas: "#ffffff"
  ink: "#121212"
  primary: "#567b95"
  on-primary: "#ffffff"
  surface-tertiary: "#ebebeb"
  surface-light: "#f8f8f8"
  ink-secondary: "#5a5a5a"
  ink-tertiary: "#727272"
  ink-footer: "#666666"
  ink-dim: "#363636"
  hairline: "#dfdfdf"
  accent: "#346eb7"
  accent-dim: "#326891"
  breaking: "#d0021b"
typography:
  display:
    fontFamily: nyt-cheltenham, cheltenham-fallback-georgia, cheltenham-fallback-noto, georgia, "times new roman", times, serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 27.6px
  display-mobile:
    fontFamily: nyt-cheltenham, cheltenham-fallback-georgia, cheltenham-fallback-noto, georgia, "times new roman", times, serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 33.6px
  headline-news:
    fontFamily: nyt-cheltenham, cheltenham-fallback-georgia, cheltenham-fallback-noto, georgia, "times new roman", times, serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 23px
  heading:
    fontFamily: nyt-franklin, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 18.2px
  body:
    fontFamily: nyt-imperial, georgia, "times new roman", times, "Songti SC", simsun, serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19px
    letterSpacing: 0.1px
  button:
    fontFamily: nyt-franklin, helvetica, arial, sans-serif
    fontSize: 11px
    fontWeight: 700
    lineHeight: 11px
    letterSpacing: 0.55px
    textTransform: uppercase
  nav:
    fontFamily: nyt-franklin, helvetica, arial, sans-serif
    fontSize: 11px
    fontWeight: 600
    lineHeight: 11px
    letterSpacing: 1.4px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 29px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
    padding: 4px 12px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 38.3906px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 7px 8px 6px
  footer:
    textColor: "{colors.ink-footer}"
    rounded: "{rounded.none}"
    padding: 0px 38.3906px 9px
---

# The New York Times

## Overview

This is the home page of The New York Times (nytimes.com), measured at a 1280px desktop viewport. It is a classic
newspaper front page translated to the web: a blackletter nameplate centred above a dense multi-column grid of
headlines, summaries and photographs, separated by thin grey rules. The palette is almost entirely greyscale —
near-black `#121212` ink, mid-grey `#5a5a5a` summaries, `#dfdfdf` hairlines — with colour coming from photography
and illustration. The page is extremely long (over 15,000px of scroll) and holds hundreds of stories.

The capture shows, top to bottom: a subscription promotion band ("Save. On it all. $0.25/week for your first six
months.") with a white "SUBSCRIBE NOW" button; a masthead row with search, the edition switcher (U.S.,
INTERNATIONAL, CANADA, ESPAÑOL, 中文) in spaced uppercase, and two slate-blue square buttons ("SUBSCRIBE FOR
$0.25/WEEK", "LOG IN"); the date and "Today's Paper" at the left of the nameplate; a section bar (U.S., World,
Business, Arts, Lifestyle, Opinion, Video, Shows, Games, Cooking, Wirecutter, The Athletic) above a double rule;
then the news grid — a boxed "These top stories are free to read" package with a lead story and photo, a right
rail with a feature illustration and smaller stories, and section packages further down (weather, Games tiles,
Opinion, Arts, Wirecutter, The Athletic, Cooking) ending in a site-index footer.

Microcopy is newsroom-precise: kicker labels ("ANALYSIS", "THE GREAT READ"), reading-time stamps ("3 MIN READ"),
and photographer credits ("Doug Mills/The New York Times").

## Colors

- **Canvas `#ffffff`** — the news page background.
- **Ink `#121212`** — headlines and primary text; the site's `--color-content-primary`.
- **Ink secondary `#5a5a5a`** — story summaries and secondary edition links (`--tpl-color-content-secondary`).
- **Ink tertiary `#727272`**, **ink dim `#363636`** (section labels; `--color-content-secondary`), **ink footer
  `#666666`**.
- **Primary `#567b95`** — the slate-blue fill of the masthead "SUBSCRIBE" and "LOG IN" buttons, with white labels.
- **Accent `#346eb7`** and **accent dim `#326891`** — the declared content accents (`--tpl-color-content-accent`,
  `--tpl-color-content-accent-dim`); `#326891` also measured as a border colour on the page.
- **Breaking `#d0021b`** — declared `--tpl-color-content-breaking` for breaking-news labels.
- **Surface tertiary `#ebebeb`** and **surface light `#f8f8f8`** — the grey wells behind games tiles, weather and
  promotional packages; the largest measured background areas.
- **Hairline `#dfdfdf`** — the 1px rules that divide columns and stories.

Section-specific colours measured on the page (`#8c640a`, `#7a2e14`, `#a61b1e` text; muted tile fills such as
`#53795b`, `#60788a`, `#b7713f`) belong to individual packages and games tiles rather than the base palette. Hover
behaviour measured: section links gain an underline; edition links and search gain a near-white
`rgba(247, 247, 247, 0.91)` background; "Today's Paper" lightens to `rgb(96, 96, 96)`.

## Typography

The Times serves its own families from g1.nyt.com:

- **nyt-cheltenham** — headlines, the most-used family by characters. Feature headlines measured 24px / 300 /
  27.6px ("She Found a Long-Lost $25,000 Certificate of Deposit"); news headlines use the declared
  `--tpl-typography-headline-news-20` style, 20px / 700 / 23px. Condensed (nyt-cheltenham-text-cond) and small
  (nyt-cheltenham-small) cuts set compact and italic headlines.
- **nyt-imperial** — summaries and body: 14px / 19px with 0.1px tracking on the home page; the declared article
  body (`--tpl-typography-body-regular`) is 20px at 1.5 line height.
- **nyt-franklin** — all utility type: section labels ("More to read for free.") at 14px / 600 / 18.2px, edition
  links at 11px / 600 uppercase with 1.4px tracking, buttons at 11px / 700 uppercase with 0.55px tracking, and the
  "MIN READ" stamps.
- **nyt-karnak** — loaded at weight 700 and used sparingly (27 characters on the measured page).

Weight 700 is the most common by character count, then 400 and 500: the page reads as bold headlines over regular
summaries. Tracking follows a 0.01em rule at text sizes (14px/0.1px, 16px/0.16px, 18px/0.18px) and opens to 1px or
more on small uppercase labels.

Substitutes: Georgia for Cheltenham and Imperial (the site's own fallbacks), Helvetica or Arial for Franklin.

## Layout

The front page is a fixed grid inside a centred measure, with 38.3906px side padding on the header and footer. The
most frequent gap is 33px between columns, with 16px and 7px inside story blocks. The news area uses a wide main
column with internal two- and three-column packages and a narrower right rail; the widest measured card row is four
columns. The root variables declare a 600px body width and a 1050px wide width for articles. Stories stack tightly
with thin rules, small kickers and reading-time stamps, so density is very high.

## Elevation & Depth

Flat. No box shadows were measured. Structure comes from 1px `#dfdfdf` rules, a double rule under the section bar,
boxed packages with a thin border, and grey wells (`#ebebeb`, `#f8f8f8`) behind special packages.

## Shapes

Mostly square. The masthead subscribe and log-in buttons are 0px; outline buttons and edition/section links use the
declared 3px button shape (`--tpl-theme-button-shape: 3px`); a 4px radius appears on a few controls; circular 50%
shapes are carousel arrows, play buttons and avatars. Photographs are hard-edged.

## Components

- **Masthead button** — `#567b95` fill, white nyt-franklin 11px / 700 uppercase label with 0.55px tracking, 29px
  tall, square.
- **Outline button** — 1px `#dfdfdf` border, 3px radius, 4px 12px padding, nyt-franklin 14px / 600 ink label ("Get
  the latest polls sent to your inbox").
- **Edition and section links** — nyt-franklin 11px uppercase with 1.4px tracking, 7px 8px 6px padding, 3px radius;
  section links underline on hover.
- **Story block** — optional kicker, Cheltenham headline, Imperial summary in `#5a5a5a`, an uppercase reading-time
  stamp, and a photo with a right-aligned credit.
- **Free-to-read package** — a bordered box with a centred franklin heading and a short underline accent.
- **Footer** — site index in columns, nyt-franklin 11px text in `#666666`.

## Design System Architecture

No public NYT design system site could be opened (the corporate press site could not be fetched; see SOURCES.json).
The shipped home page at https://www.nytimes.com/ exposes a large token layer in CSS variables: a `--tpl-*` theme
system with semantic colour roles (`--tpl-color-content-primary`, `-secondary`, `-accent`, `-breaking`,
`-negative`, plus `-always-light`, `-always-dark` and `-user-inverse` variants for theming), typography presets
written as CSS font shorthands (`--tpl-typography-headline-news-20`, `--tpl-typography-headline-feature-24`,
`--tpl-typography-body-regular`, `--tpl-typography-title-16`), and button theme tokens (`--tpl-theme-button-shape`,
`--tpl-theme-button-emphasis-background-color: #121212`). A `--g-*` layer holds palette ramps (`--g-color-slate-*`,
`--g-color-sea-*`, `--g-color-apricot-*`) and page widths.

## Do's and Don'ts

**Do**
- Keep the page white and greyscale; let photographs carry colour.
- Use Cheltenham for headlines, Imperial for summaries, Franklin for every label and control.
- Separate stories with 1px `#dfdfdf` rules rather than cards or shadows.
- Add kickers and reading-time stamps in small spaced uppercase Franklin.
- Keep the slate-blue `#567b95` for subscription and account actions.

**Don't**
- Don't round story containers or add elevation.
- Don't use the accent blues for headlines; no measured headline uses them.
- Don't set summaries in pure black; they measure `#5a5a5a`.
- Don't treat package-specific tile colours as brand colours.

## Responsive Behavior

From the extraction's mobile pass:

- The top headline measured nyt-cheltenham 30px / 700 / 33.6px ("Trump Signs Order Exempting Russia From
  Sanctions Law").
- Summaries rise from 14px / 19px on desktop to nyt-imperial 16px / 22px on mobile.
- The most-read mobile sizes were 16px, 20px, 11px and 26px.
- Visible header links measured 3 on mobile; the widest card row measured 2 columns.
- No filled primary button was detected on mobile.

Breakpoints and the exact column reflow were not measured.

## Iteration Guide

1. Load the three NYT families and set `#121212` ink on white.
2. Build every story as kicker → headline → summary → stamp, divided by `#dfdfdf` rules.
3. Choose headline style by weight: 300 for features, 700 for news.
4. Use Franklin 11px uppercase with wide tracking for navigation and buttons.
5. Pull new tokens from the `--tpl-*` variables rather than inventing values.
