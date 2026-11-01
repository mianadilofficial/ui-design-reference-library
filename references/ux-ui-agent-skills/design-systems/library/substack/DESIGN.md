---
version: alpha
name: Substack
category: "News & Publishing"
description: "Substack's logged-out home feed (substack.com): a white #ffffff reading canvas with #363737 system-ui text at 15px/21px, #777777 meta, Cahuenga 500 serif display lines (32px/39.68px on the green #2f6d5d hero), SF Pro Display 800 titles, Substack orange #ff6719 8px-radius buttons that darken to #d74d00, #eeeeee secondary buttons, 12px-radius cards with 1px #0000001a hairlines and #0083d5 mention links."

colors:
  primary: "#ff6719"
  primary-hover: "#d74d00"
  on-primary: "#ffffff"
  canvas: "#ffffff"
  ink: "#363737"
  muted: "#777777"
  link: "#0083d5"
  bg-secondary: "#eeeeee"
  bg-tertiary: "#dbdbdb"
  nav-hover: "#fafafa"
  fg-tertiary: "#b6b6b6"
  hairline: "#0000001a"
  hero-green: "#2f6d5d"
  player-dark: "#232525"
  media-black: "#000000"
  divider: "#c8c8c8"

typography:
  display-hero:
    fontFamily: "Cahuenga, serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 39.68px
  display-card:
    fontFamily: "Cahuenga, serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
  title:
    fontFamily: "\"SF Pro Display\", -apple-system-headline, system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 800
    lineHeight: 24px
  title-mobile:
    fontFamily: "\"SF Pro Display\", -apple-system-headline, system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 21px
  ui:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 20px
  author:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 20px
  button:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 20px
  meta-strong:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 20px
  small:
    fontFamily: "system-ui, -apple-system, \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17px

rounded:
  mention: 4px
  button: 8px
  card: 12px
  pill: 9999px

spacing:
  s2: 2px
  s4: 4px
  s6: 6px
  s8: 8px
  s12: 12px
  s16: 16px
  s20: 20px
  s24: 24px
  s32: 32px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 40px
    boxShadow: "rgba(255, 255, 255, 0.2) 0px 1px 0px 0px inset, rgba(0, 0, 0, 0.1) 0px -1px 0px 0px inset"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.bg-secondary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 40px
  button-secondary-hover:
    backgroundColor: "{colors.bg-tertiary}"
  button-floating:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px"
  subscribe-link:
    textColor: "{colors.primary}"
    typography: "{typography.meta-strong}"
    rounded: "{rounded.button}"
    padding: 0px 6px
  search-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
    borderWidth: 1px
    typography: "{typography.ui}"
    rounded: "{rounded.card}"
    padding: 0px 20px 0px 40px
    height: 40px
  nav-item:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.ui}"
    rounded: "{rounded.card}"
    height: 48px
  nav-item-hover:
    backgroundColor: "{colors.nav-hover}"
  hero-card:
    backgroundColor: "{colors.hero-green}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display-hero}"
    rounded: "{rounded.card}"
    padding: 16px
    boxShadow: "rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.06) 0px 2px 4px -1px"
  embed-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
    borderWidth: 1px
    rounded: "{rounded.card}"
    padding: 12px
    typography: "{typography.ui}"
  audio-player:
    backgroundColor: "{colors.player-dark}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.card}"
  mention-link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    rounded: "{rounded.mention}"
---

## Overview

substack.com, viewed logged-out, is a social reading feed rather than a marketing page. The
layout is a three-column app shell on a pure white `#ffffff` canvas: a left rail with the
orange bookmark-style Substack logo, icon-plus-label navigation (Home, Subscriptions, Chat,
Activity, Explore, Profile) and a full-width orange `#ff6719` "Create" button; a centre feed
about 520px wide; and a right rail with a 12px-radius search field and a "Log in or sign up"
card containing an orange "Start your Substack" and a grey `#eeeeee` "Sign in" button.

The feed opens with a promotional hero card: a deep green `#2f6d5d` illustrated banner (a
fountain pen and pencil) with "Make money doing the work you believe in" in white Cahuenga
serif at 32px/39.68px, an orange button and a ghost "Learn more". Below "For you", posts
(Notes) are stacked with avatar, author name at 15px/500, verification badge, a muted
`#777777` timestamp, an orange "Subscribe" text action and an ellipsis; the body is
system-ui 15px/21px in `#363737`; media (vertical video, embedded cards, a dark `#232525`
podcast player, images) sits in 12px-radius frames; and a row of outline icons (like,
comment, restack, share) with counts closes each item. A mid-feed card "You made it, you own
it" (Cahuenga 24px/30px) pairs a short 13px pitch with a hand-drawn illustration.

The voice is writerly and creator-centric: "Make money doing the work you believe in", "You
always own your intellectual property, mailing list, and subscriber payments."

Key characteristics:
- Content-first, white, quiet chrome; the only loud colour is orange `#ff6719`.
- System UI sans for everything functional; Cahuenga serif only for display lines.
- Soft geometry: 8px buttons, 12px cards/inputs/nav items, full pills for avatars.
- Hairline borders `#0000001a` instead of heavy dividers.
- Tailwind-like soft shadows on floating elements only.

## Colors

All values measured on substack.com (computed styles, hover table, and the site's own CSS
custom properties such as `--color-light-button-primary-bg`).

### Brand & Accent
- **Substack orange** (`#ff6719`): primary buttons, "Subscribe" actions, logo;
  `--color-light-button-primary-bg: rgb(255,103,25)` and
  `--color-primitive-orange-500-rgb: 255,103,25`.
- **Orange hover** (`#d74d00`): `--color-light-button-primary-bg-hover: rgb(215,77,0)`,
  confirmed by the measured hover.
- **Hero green** (`#2f6d5d`): the promotional banner's background colour.

### Surface
- **Canvas** (`#ffffff`): `--color-light-bg-primary`.
- **Secondary** (`#eeeeee`): `--color-light-bg-secondary`; the "Sign in" button.
- **Tertiary** (`#dbdbdb`): `--color-light-bg-tertiary`; "Sign in" hover.
- **Nav hover** (`#fafafa`).
- **Player dark** (`#232525`) and **media black** (`#000000`) for embedded audio and video.

### Text
- **Ink** (`#363737`): body, author names, nav — the most-read colour.
- **Muted** (`#777777`): timestamps, "For you", descriptions.
- **Tertiary** (`#b6b6b6`): `--color-light-fg-tertiary`.
- **Mention link** (`#0083d5`): @-mentions and inline links in notes.

### Lines
- **Hairline** (`#0000001a`, i.e. black at 10%): card and input borders.
- **Divider** (`#c8c8c8`).

## Typography

### Font Family
- **system-ui stack** — `system-ui, -apple-system, "Segoe UI", Roboto, Helvetica, Arial,
  sans-serif` (plus emoji fonts): the dominant family for UI and note text.
- **Cahuenga** — `Cahuenga, serif`, loaded as "Cahuenga 500": display lines.
- **SF Pro Display** — `"SF Pro Display", -apple-system-headline, system-ui, …`: card titles
  ("Log in or sign up"); also exposed as `--font-family-title`.
- **Spectral** is loaded ("Spectral 400") and set on the body element, but measured text on
  the home feed renders in the system-ui stack.

### Hierarchy

| Token | Family | Size | Weight | Line height | Where |
|---|---|---|---|---|---|
| display-hero | Cahuenga | 32px | 500 | 39.68px | Hero banner headline (white) |
| display-card | Cahuenga | 24px | 500 | 30px | "You made it, you own it" |
| title | SF Pro Display | 20px | 800 | 24px | "Log in or sign up" |
| title-mobile | SF Pro Display | 20px | 700 | 24px | "Home" page title at 390px |
| body | system-ui | 15px | 400 | 21px | Note text |
| ui | system-ui | 15px | 400 | 20px | Search, embeds, nav |
| author | system-ui | 15px | 500 | 20px | Author names |
| button | system-ui | 15px | 600 | 20px | All buttons |
| meta-strong | system-ui | 13px | 600 | 20px | "Subscribe", "For you" |
| small | system-ui | 13px | 400 | 17px | Card descriptions |

The site also exposes size tokens `--font-size-11`, `-12`, `-13`, `-16`, `-36`, `-44` and
weights `--font-weight-medium: 500`, `--font-weight-heavy: 800`.

### Principles
- UI and reading text share one native sans for speed and familiarity.
- Serif (Cahuenga) is reserved for warm, editorial display lines.
- Weight carries hierarchy (400 → 500 → 600 → 800); letter-spacing is always normal.

### Note on Font Substitutes
A family named Cahuenga (designer Greg Lindy, foundry LuxTypo) is sold commercially on
MyFonts ([myfonts.com](https://www.myfonts.com/collections/cahuenga-font-luxtypo)); no
official Substack source confirming it is the same file was found, and no substitute is
documented by Substack. For SF Pro Display the declared fallbacks are
`-apple-system-headline`, system-ui and Helvetica/Arial.

## Layout

### Spacing System
Gaps are dominated by 8px, then 4px, 12px, 16px, 6px; paddings by 8px, 16px, 20px, 6px,
32px, 12px, 24px — a 4px-based rhythm. Size tokens exposed: `--size-4`, `--size-6`,
`--size-8`, `--size-16`, `--size-24`, `--size-36`, `--size-44`, `--size-52`, `--size-88`,
`--size-96`, `--size-320`, `--size-left-nav: 80px`, `--size-reader-top-bar: 72px`.

### Grid & Container
- Left rail with full-width "Create" button; centre feed (~520–600px: hero card 600px,
  notes 520px); right rail with search and auth card.

### Whitespace Philosophy
Items are separated by space and thin hairlines; every note has the same anatomy, making
the feed scannable.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Feed items, nav |
| Hairline | 1px `#0000001a` border | Embeds, auth card, search |
| Raised | `rgba(0,0,0,0.1) 0px 4px 6px -1px, rgba(0,0,0,0.06) 0px 2px 4px -1px` | Hero card, "Get app" button |
| Button bevel | `rgba(255,255,255,0.2) 0px 1px 0px 0px inset, rgba(0,0,0,0.1) 0px -1px 0px 0px inset` | Orange buttons |

Named shadow tokens also exist: `--shadow-sm: 0px 1px 3px #0000001a,0px 1px 2px #0000000f`,
`--shadow-xl: 0px 20px 25px -5px #0000001a,0px 10px 10px -5px #0000000a`.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| mention | 4px | Mention link highlight |
| button | 8px | Buttons, "Subscribe" action |
| card | 12px | Cards, media frames, search input, nav items |
| pill | 9999px | Avatars, icon buttons (most frequent radius) |

## Components

### Buttons
**Primary**: `#ff6719`, white 15px/600, padding `0px 16px`, 40px tall, 8px radius, subtle
inset bevel; hover `#d74d00`.
**Secondary ("Sign in")**: `#eeeeee`, `#363737` text, same metrics; hover `#dbdbdb`.
**Floating ("Get app")**: white, raised shadow, 8px radius.
**Text action ("Subscribe")**: orange 13px/600, padding `0px 6px`, 8px radius.
**Ghost ("Learn more" on the hero)**: transparent, white 15px/600 text, 8px radius,
padding `0px 16px`; sits next to the orange primary on the green banner.

### Feed controls
- "For you" feed switcher: 13px/600 `#777777` with a chevron, 8px radius, padding
  `0px 6px`.
- Action row under each note: outline icons (like, comment, restack, share) with counts.

### Inputs & Forms
**Search**: white, 1px `#0000001a` border, 12px radius, 40px tall, padding `0px 20px 0px 40px`
(magnifier icon on the left), 15px text.

### Cards & Containers
**Hero card**: `#2f6d5d` with illustration, 12px radius, 16px padding, raised shadow.
**Embed card**: white, 1px hairline, 12px radius, 12px padding.
**Audio player**: `#232525`, 12px radius, white text, progress bar and round play button.

### Navigation
Left rail items: icon + 15px label in `#363737`, 48px tall, 12px radius, hover `#fafafa`.

### Links
Mentions `#0083d5`, no underline, 4px radius highlight area.

### Signature Components
- **Note**: avatar, name (15px/500), badge, `#777777` time, orange Subscribe, body
  15px/21px, media, action row.
- **Feed promo**: Cahuenga headline + orange primary + ghost secondary.

## Design System Architecture

Substack publishes **no public design system**: searches for official design system, token
packages and brand documentation found only the brand assets page
([substack.com/brand](https://substack.com/brand)), which covers logo use ("You may not
change the color, proportions, font, or any other part of the design of our logos") and
gives no colour or type values. What follows is the de-facto system measurable on the site.

**Token architecture (observed).** The page defines about 400 CSS custom properties in tiers:
primitives (`--color-primitive-orange-500-rgb: 255,103,25`, with `-p3` display-P3
variants such as `--color-primitive-orange-500-p3: 1 .404 .098`), light/dark semantic
roles (`--color-light-bg-primary`, `--color-light-bg-secondary`, `--color-light-fg-tertiary`,
`--color-light-button-primary-bg`, `--color-light-button-primary-bg-hover`, and parallel
`--color-dark-*` names), plus shadows (`--shadow-sm`, `--shadow-xl`, `--shadow-dark-lg`),
sizes (`--size-*`), font families (`--font-family-title`, `--font-family-text-base`,
`--font-family-meta`, `--font-family-pub-headings`) and font sizes (`--font-size-13`).

**Theming (observed).** Parallel `--color-light-*` and `--color-dark-*` token sets (78 and 70
variables) exist; how the dark set is switched on was not observed, and the captured page
renders the light values.

**Type & spacing.** 4px-based sizes; native system fonts for UI; serif display face for
editorial moments.

**Component model.** Not documented publicly. Observed components: app-shell rail nav,
buttons (primary/secondary/floating/text), search, auth card, note, embed card, audio
player, promo card.

**Accessibility.** No published accessibility standard was found.

**Delivery.** No public npm package or Figma kit was found.

## Do's and Don'ts

### Do
- Keep the canvas white and the chrome quiet.
- Use orange `#ff6719` for the single primary action and Subscribe actions; hover `#d74d00`.
- Use the system-ui stack at 15px for notes and UI; `#363737` ink, `#777777` meta.
- Use Cahuenga 500 only for display lines (32px hero, 24px cards).
- Round buttons 8px and cards 12px; avatars full pill.
- Separate with 1px `#0000001a` hairlines.

### Don't
- Don't use orange for large surfaces or body text.
- Don't set long-form UI text in the serif display face.
- Don't use heavy dividers or dark backgrounds outside media embeds.
- Don't alter the Substack logo's colour or proportions (per substack.com/brand).
- Don't mix more radii than 4/8/12/pill.

## Responsive Behavior

### Breakpoints
Not measured beyond the 1280px and 390px extractions.

### Type changes
At 390px the page shows a "Home" title in SF Pro Display 20px/700/24px; note text stays
15px/21px; measured mobile sizes are 15, 13, 24, 16, 11 and 20px.

### Touch Targets
Buttons 40px tall; nav items 48px; icon buttons 36px circles.

### Collapsing Strategy
Not measured beyond type sizes; tokens `--size-reader-bottom-nav: 56px` and
`--size-reader-top-bar: 72px` exist in the CSS.

### Image Behavior
Media in notes keeps its aspect ratio inside 12px-radius frames (vertical video 225px wide
on desktop).

## Iteration Guide

1. White canvas, system-ui 15px/21px `#363737` text, `#777777` meta.
2. Three-column shell: left rail nav (48px, 12px radius), centre feed, right rail search +
   auth card.
3. Primary actions in orange `#ff6719` 8px-radius 40px buttons; secondary `#eeeeee`.
4. Display moments in Cahuenga 500 (32px/39.68px hero, 24px/30px cards).
5. Cards and embeds: 12px radius, 1px `#0000001a` border, 12px padding.
6. Floating elements get the soft raised shadow; nothing else does.
