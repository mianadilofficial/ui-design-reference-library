---
version: alpha
name: Rockstar Games
category: "Gaming"
description: "Rockstar Games' site is a black (#000000) stage for full-bleed key art, set entirely in Monotype's Helvetica Now (Display 700 for 54px/45px headlines, Text 400/700 for 18px body and buttons). Text is soft grey (#ebebeb, #cecece) not white; actions are 54px pills with 1000px radius tinted per game — #fff6b2, #ffd4a8, #ffb2c6, Rockstar gold #fcaf17 — or white-outlined on art; cards are rgba(255,255,255,.1) with 8px radius."

colors:
  primary: "#fcaf17"
  pill-yellow: "#fff6b2"
  pill-peach: "#ffd4a8"
  pill-pink: "#ffb2c6"
  pill-pink-hover: "#ff8aa9"
  on-pill: "#000000"
  on-pill-soft: "#1a1a1a"
  canvas: "#000000"
  surface-layer-1: "#141414"
  surface-subtle: "#1a1a1a"
  surface-card: "#ffffff1a"
  surface-hover: "#ffffff26"
  surface-light: "#ffffffe6"
  ink: "#ebebeb"
  ink-body: "#cecece"
  ink-bright: "#fdfdfd"
  ink-white: "#ffffff"
  ink-nav: "#ffffffcc"
  ink-subdued: "#989898"
  border-outline: "#ffffff80"
  border-subtle: "#ffffff33"
  border-field: "#5b5b5b"
  border-danger: "#e72424"
  border-information: "#4c78b2"

typography:
  display-hero:
    fontFamily: "\"Helvetica Now Display\", \"Helvetica Now Display fallback\", Arial, sans-serif"
    fontSize: 54px
    fontWeight: 700
    lineHeight: 59.4px
    letterSpacing: -0.405px
  heading-xl:
    fontFamily: "\"Helvetica Now Display\", \"Helvetica Now Display fallback\", Arial, sans-serif"
    fontSize: 45px
    fontWeight: 700
    lineHeight: 49.5px
    letterSpacing: -0.3375px
  heading-xl-mobile:
    fontFamily: "\"Helvetica Now Display\", \"Helvetica Now Display fallback\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
    letterSpacing: -0.18px
  heading-lg:
    fontFamily: "\"Helvetica Now Display\", \"Helvetica Now Display fallback\", Arial, sans-serif"
    fontSize: 35.2px
    fontWeight: 700
    lineHeight: 42.24px
    letterSpacing: 0.088px
  heading-md:
    fontFamily: "\"Helvetica Now Display\", \"Helvetica Now Display fallback\", Arial, sans-serif"
    fontSize: 27px
    fontWeight: 700
    lineHeight: 35.1px
    letterSpacing: 0.0675px
  heading-sm:
    fontFamily: "\"Helvetica Now Display\", \"Helvetica Now Display fallback\", Arial, sans-serif"
    fontSize: 19.2px
    fontWeight: 700
    lineHeight: 24.96px
    letterSpacing: 0.048px
  body-lg:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 20.25px
    fontWeight: 700
    lineHeight: 30.375px
    letterSpacing: -0.10125px
  body:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: -0.27px
  body-mobile:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: -0.24px
  button:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
    letterSpacing: -0.09px
  button-sm:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 15.75px
    fontWeight: 700
    lineHeight: 23.625px
    letterSpacing: -0.07875px
  body-sm:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 15.75px
    fontWeight: 400
    lineHeight: 22.05px
    letterSpacing: -0.23625px
  eyebrow:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 15.75px
    fontWeight: 700
    lineHeight: 15.75px
    letterSpacing: 0.315px
    textTransform: uppercase
  nav-link:
    fontFamily: "\"Helvetica Now Text\", Arial, sans-serif"
    fontSize: 13.5px
    fontWeight: 700
    lineHeight: 21.6px
    letterSpacing: 0.27px
    textTransform: uppercase
  button-xs:
    fontFamily: "\"Helvetica Now Text\", \"Helvetica Now Text fallback\", Arial, sans-serif"
    fontSize: 13.5px
    fontWeight: 700
    lineHeight: 20.25px
    letterSpacing: -0.0675px
  date:
    fontFamily: "\"Helvetica Now Text\", Arial, sans-serif"
    fontSize: 13.5px
    fontWeight: 400
    lineHeight: 13.5px
    letterSpacing: -0.5px

rounded:
  xs: 2px
  md: 8px
  lg: 16px
  pill: 1000px
  circle: 9999px

spacing:
  xxs: 4.5px
  xs: 9px
  sm: 13.5px
  md: 18px
  lg: 22.5px
  xl: 27px
  xxl: 36px
  section-sm: 45px
  section: 63px
  section-lg: 96px

components:
  button-primary:
    backgroundColor: "{colors.pill-yellow}"
    textColor: "{colors.on-pill}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 27px 0px 20.25px
    height: 54px
  button-editions:
    backgroundColor: "{colors.pill-peach}"
    textColor: "{colors.on-pill}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 27px
    height: 54px
  button-watch-hover:
    backgroundColor: "{colors.pill-pink-hover}"
  button-gold:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-pill}"
    typography: "{typography.button-sm}"
    rounded: "{rounded.pill}"
    padding: 0px 22.5px
    height: 45px
  button-outline:
    backgroundColor: "transparent"
    textColor: "{colors.ink-white}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 27px
    height: 54px
    border: "1px solid #ffffff80"
  button-launcher:
    backgroundColor: "transparent"
    textColor: "{colors.ink-white}"
    typography: "{typography.button-xs}"
    rounded: "{rounded.pill}"
    padding: 0px 15.75px
    height: 36px
    border: "1px solid #ffffff80"
  button-launcher-hover:
    backgroundColor: "{colors.surface-hover}"
  nav:
    backgroundColor: "transparent"
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav-link}"
    padding: 0px 63px
    height: 90px
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.nav-link}"
    rounded: "{rounded.pill}"
    padding: 0px 18px
    height: 36px
  nav-link-hover:
    backgroundColor: "{colors.surface-card}"
  card-news-feature:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.heading-lg}"
    rounded: "{rounded.md}"
    padding: 45px
  card-promo:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body-sm}"
    rounded: "{rounded.md}"
  link:
    textColor: "{colors.ink-body}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.button}"
    padding: 54px 80px
---

## Overview

Rockstar Games' homepage is a black stage for franchise key art. A transparent 90px header floats over a full-bleed hero (GTA VI's Vice City couple in a purple-pink dusk), with the white R[U+2605] mark on the left, uppercase pill nav links in the centre (GAMES, NEWSWIRE, VIDEOS, DOWNLOADS, STORE ↗, SUPPORT ↗) and a white-outlined **Get Launcher** pill plus search and account icons on the right. The hero slide pairs the game's logo with a small uppercase eyebrow ("GRAND THEFT AUTO VI"), a 54px Helvetica Now Display headline ("Pre-Order Now") and one pastel pill button ("Explore Editions"), with a pause control and dash pagination at right.

Below, a Newswire block puts one large feature card (key art on top, a 35.2px title and date on a translucent `rgba(255,255,255,.1)` panel) beside a list of four smaller stories (thumbnail, uppercase game label, 19.2px title, grey date). Then each franchise gets a full-bleed art band — GTA Online, Red Dead — with its logotype, a breadcrumb ("Games / Grand Theft Auto Online"), an 18px description and pill buttons. The footer is black with bold link rows and a language selector.

There is almost no UI colour: text is soft grey, surfaces are black or white-at-10%, and the only fills are the pastel/gold pills, whose tint changes per game (lemon `#fff6b2`, peach `#ffd4a8`, pink `#ffb2c6`, Rockstar gold `#fcaf17`).

**Key Characteristics:**
- Pure black canvas; key art does all the colouring.
- One type family in two optical sizes: **Helvetica Now Display 700** for headlines, **Helvetica Now Text** 400/700 for everything else.
- Text is grey-on-black (`#ebebeb`, `#cecece`), with pure white kept for buttons and eyebrows.
- Pill buttons everywhere (1000px radius): 54px primary, 45px secondary, 36px header.
- Per-franchise pastel pill tints with black labels; white-outlined pills on art.
- Uppercase only for nav links, eyebrows and game labels.
- Translucent white (10%/15%) for cards and hover states — no shadows.

## Colors

> Source page: `https://www.rockstargames.com/` (extraction + probes). Names in parentheses are the site's own variables.

### Brand & Action
- **Rockstar Gold** (`{colors.primary}` — `#fcaf17`, `--foundry-alias-color-brand-rockstar-gold`): the brand colour, used as a pill fill (GTA Online "Learn More").
- **Pill Yellow** (`{colors.pill-yellow}` — `#fff6b2`): "Watch Trailer" — the extractor's primary CTA.
- **Pill Peach** (`{colors.pill-peach}` — `#ffd4a8`): GTA VI "Explore Editions", "Learn More".
- **Pill Pink** (`{colors.pill-pink}` — `#ffb2c6`) → hover `{colors.pill-pink-hover}` `#ff8aa9` (measured): "Watch Now".
- **On Pill** (`{colors.on-pill}` — `#000000`) / `{colors.on-pill-soft}` `#1a1a1a`: pill labels.

### Surfaces
- **Canvas** (`{colors.canvas}` — `#000000`, `--foundry-global-color-black-static-100`): body, footer, promo cards.
- **Layer 1** (`{colors.surface-layer-1}` — `#141414`, `--foundry-alias-color-background-component-solid-layer-1`): solid component layer; second-largest measured background.
- **Subtle** (`{colors.surface-subtle}` — `#1a1a1a`, `--foundry-alias-color-background-subtle-layer-0`).
- **Card** (`{colors.surface-card}` — `#ffffff1a`): translucent news card panel and nav hover.
- **Hover** (`{colors.surface-hover}` — `#ffffff26`): Get Launcher hover.
- **Light** (`{colors.surface-light}` — `#ffffffe6`): light pill surface measured on the page.

### Text
- **Ink** (`{colors.ink}` — `#ebebeb`): titles, footer links — most-read text colour.
- **Ink Body** (`{colors.ink-body}` — `#cecece`): paragraphs, footer base.
- **Ink Bright** (`{colors.ink-bright}` — `#fdfdfd`, `--foundry-global-color-grey-static-100`): hero and section headlines.
- **White** (`{colors.ink-white}` — `#ffffff`): eyebrows, outline-pill labels.
- **Nav** (`{colors.ink-nav}` — `#ffffffcc`): uppercase nav links.
- **Subdued** (`{colors.ink-subdued}` — `#989898`, `--foundry-alias-color-text-subdued`): dates, breadcrumb root.

### Borders & Semantic (variables)
- **Outline** (`{colors.border-outline}` — `#ffffff80`): outline pills. **Subtle** (`{colors.border-subtle}` — `#ffffff33`).
- **Field** (`{colors.border-field}` — `#5b5b5b`, `--foundry-alias-color-border-field`).
- **Danger** (`{colors.border-danger}` — `#e72424`, `--foundry-alias-color-border-danger`), **Information** (`{colors.border-information}` — `#4c78b2`, `--foundry-alias-color-border-information`).

## Typography

### Font Family
**Helvetica Now** by Monotype Studio, in two of its three optical sizes ([Monotype](https://www.monotype.com/fonts/helvetica-now)): **Helvetica Now Display** (700) for headings and **Helvetica Now Text** (400, 700) for body, buttons and nav. Both are served with metric-matched `fallback` faces. The stylesheet also declares franchise faces (Pricedown, Chalet, ChaletComprime, GTAArtDeco, FrizQuadrata …) and Noto Sans for CJK/Arabic locales.

### Hierarchy

| Token | Family | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|---|
| `{typography.display-hero}` | Display | 54px | 700 | 59.4px | -0.405px | hero slide headline |
| `{typography.heading-xl}` | Display | 45px | 700 | 49.5px | -0.3375px | slide/section h2 |
| `{typography.heading-xl-mobile}` | Display | 24px | 700 | 26.4px | -0.18px | h2 at 390px |
| `{typography.heading-lg}` | Display | 35.2px | 700 | 42.24px | 0.088px | feature news title |
| `{typography.heading-md}` | Display | 27px | 700 | 35.1px | 0.0675px | promo heading |
| `{typography.heading-sm}` | Display | 19.2px | 700 | 24.96px | 0.048px | news list title |
| `{typography.body-lg}` | Text | 20.25px | 700 | 30.375px | -0.10125px | lead / "View All" |
| `{typography.body}` | Text | 18px | 400 | 27px | -0.27px | paragraphs |
| `{typography.body-mobile}` | Text | 16px | 400 | 24px | -0.24px | paragraphs at 390px |
| `{typography.button}` | Text | 18px | 700 | 27px | -0.09px | 54px pills, footer links |
| `{typography.button-sm}` | Text | 15.75px | 700 | 23.625px | -0.07875px | 45px pills |
| `{typography.body-sm}` | Text | 15.75px | 400 | 22.05px | -0.23625px | promo card copy |
| `{typography.eyebrow}` | Text | 15.75px | 700 | 15.75px | 0.315px, uppercase | game eyebrow |
| `{typography.nav-link}` | Text | 13.5px | 700 | 21.6px | 0.27px, uppercase | header nav |
| `{typography.button-xs}` | Text | 13.5px | 700 | 20.25px | -0.0675px | Get Launcher |
| `{typography.date}` | Text | 13.5px | 400 | 13.5px | -0.5px | dates |

### Principles
- **Bold or regular, nothing between.** Only weights 400 and 700 are served.
- **Display size for headlines, Text size for reading** — the optical-size split is the system.
- **Negative tracking on body and big headlines, slight positive on mid headings and uppercase labels** (+0.27px to +0.315px).
- **Sizes run on a 2.25px-divisible ramp** (13.5, 15.75, 18, 20.25, 22.5, 27, 45, 54px).

### Note on Font Substitutes
Helvetica Now is a commercial Monotype typeface. The site's own fallback order ends in `Arial` (`--foundry-alias-font-family-heading-fallback: "Arial"`), which is the substitute used in this file's stacks.

## Layout

### Spacing System
- Measured gaps and paddings are multiples of 2.25px (most of them of 4.5px): `{spacing.xxs}` 4.5px · `{spacing.xs}` 9px · `{spacing.sm}` 13.5px · `{spacing.md}` 18px · `{spacing.lg}` 22.5px · `{spacing.xl}` 27px · `{spacing.xxl}` 36px · `{spacing.section-sm}` 45px · `{spacing.section}` 63px · `{spacing.section-lg}` 96px.
- Header pads `0 63px`; content bands pad `0 96px`; footer pads `54px 80px`; feature card text pads 45px.
- Grid gaps in variables: `--grid-gap-static-xs: 0.5rem` … `-xl: 8rem`; `--padding-sides: 4rem`; `--max-width: 1920px`.

### Grid & Container
- Newswire: one 627px feature card + a 1-column list of four stories at 1280px.
- Promo cards: 259px wide, 388px tall, 8px radius.
- Franchise bands are full-bleed art with copy left-aligned inside the 96px gutter.

### Whitespace Philosophy
Art is edge-to-edge and copy is sparse; generous black between bands (72–96px) separates franchises like chapters.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | `{colors.canvas}` | page |
| Art | full-bleed key art with dark gradient fade at the bottom | hero and franchise bands |
| Glass | `{colors.surface-card}` (white 10%) | news cards, nav hover |
| Hover | `{colors.surface-hover}` (white 15%) | outline pill hover |

No box shadows on homepage UI; the CSS defines heavy video shadows (`0 0 2px …, 0 16px 56px …`) for overlays.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 2px | small chips (`--foundry-global-border-radius-25`) |
| `{rounded.md}` | 8px | news and promo cards (`--foundry-global-border-radius-100`) |
| `{rounded.lg}` | 16px | `--foundry-global-border-radius-200` |
| `{rounded.pill}` | 1000px | all buttons and nav links (`--foundry-global-border-radius-pill`) |
| `{rounded.circle}` | 9999px | icon buttons (`--foundry-global-border-radius-circle`) |

### Imagery
Painted key art (GTA's saturated sunset palettes, Red Dead's warm browns) is the shape language; logos are the franchise logotypes. Thumbnails are square-ish with 8px corners; the hero fades to black at its base so the next block starts on black.

## Components

### Buttons
**`button-primary`** — "Watch Trailer": `{colors.pill-yellow}`, black `{typography.button}`, 1000px radius, padding `0 27px 0 20.25px` (play icon on the left), 54px.
**`button-editions`** — "Explore Editions": `{colors.pill-peach}`, `0 27px`, 54px.
**`button-watch`** — "Watch Now": `{colors.pill-pink}`, 54px; **hover** `{colors.pill-pink-hover}` `#ff8aa9` (measured).
**`button-gold`** — `{colors.primary}`, `{typography.button-sm}`, `0 22.5px`, 45px.
**`button-outline`** — "Pre-Order Now": transparent, 1px `#ffffff80` border, white label, 54px.
**`button-launcher`** — "Get Launcher": 36px outline pill, `{typography.button-xs}`, `0 15.75px`; **hover** fills `#ffffff26`.

### Navigation
**`nav`** — transparent 90px header over the hero, `0 63px` padding.
**`nav-link`** — uppercase `{typography.nav-link}` in white 80%, 36px pill hit area, `0 18px`; **hover** fills white 10%. External links carry a ↗ glyph; GAMES has a chevron.

### Cards
**`card-news-feature`** — `{colors.surface-card}` panel under the art, 8px radius, 45px text padding, uppercase eyebrow, `{typography.heading-lg}` title, `{typography.date}` date.
**News list item** — thumbnail + `{typography.eyebrow}`-style game label (13.5px uppercase) + `{typography.heading-sm}` title + date.
**`card-promo`** — black 259×388px card, 8px radius, art plus `{typography.body-sm}` copy and a small pill ("Learn More", "Create Now").

### Footer
**`footer`** — black, `54px 80px`, primary links `{typography.button}` in `#ebebeb` (Contact, Careers, Community Resources, Subscribe), secondary links 15.75px/400, "Select a Language" label 22.5px/700.

### State summary (measured)

| Component | Default | Hover |
|---|---|---|
| `button-watch` | `#ffb2c6` | `#ff8aa9` |
| `nav-link` | transparent | `#ffffff1a` |
| `button-launcher` | transparent | `#ffffff26` |
| icon buttons (search, player menu) | white 95% | white, `#ffffff1a` fill |

### Franchise band anatomy
Each franchise band on the homepage is built the same way, top to bottom:
1. Full-bleed key art (characters, vehicles, explosions) that fades to black at the bottom.
2. The franchise logotype (e.g. the stacked "grand theft auto ONLINE" mark) placed bottom-left.
3. A breadcrumb in `{typography.button}`: grey root ("Games", `{colors.ink-subdued}`) / white current page.
4. One `{typography.body}` paragraph in `{colors.ink-body}`, max ~800px wide.
5. A row of pills: one filled (franchise tint) and one outline.

### Voice & Microcopy
Copy is terse and declarative. Headlines are calls or announcements ("Pre-Order Now", "An Extended Look: Now Playing", "Announcing Grand Theft Auto VI: The Album, Coming November 19"); button labels are two-word imperatives ("Watch Trailer", "Explore Editions", "Learn More", "Watch Now", "Create Now", "Get Launcher"); eyebrows are the game name in caps ("GRAND THEFT AUTO VI", "RED DEAD ONLINE", "GTA ONLINE"); dates are written out ("September 24, 2026"). Descriptions are one sentence that sells the world ("Explore GTA Online, a dynamic world for up to 30 players, featuring all updates and content since launch, playable solo or with friends.").

## Design System Architecture

Rockstar Games publishes **no public design-system documentation** (searches in `SOURCES.json`). The only external source used is the typeface publisher, [Monotype's Helvetica Now page](https://www.monotype.com/fonts/helvetica-now). The site serves its own token layer under the name **foundry** (`--foundry-*` variables, `foundry_*` class names); what follows is observed from those served variables only.

### Token architecture (as served)
- **Global tier** — `--foundry-global-*`: colour ramps in *static* and *adaptive* flavours (`--foundry-global-color-grey-static-100: #fdfdfd`, `--foundry-global-color-grey-adaptive-100: #1a1a1a`, `--foundry-global-color-white-static-50: hsla(0,0%,100%,.5)`, `--foundry-global-color-red-static-800: #e74646`), radius (`--foundry-global-border-radius-{25,50,100,150,200,400,pill,circle}` = 2/4/8/12/16/32px/1000px/9999px), type (`--foundry-global-font-size-250: calc(20px * 1)`, `-800: calc(64px * 1)`, `--foundry-global-font-line-height-{100…150}`, `--foundry-global-font-letter-spacing-neg-250 … 250`).
- **Alias tier** — `--foundry-alias-*`: semantic roles (`--foundry-alias-color-text-subdued`, `--foundry-alias-color-border-control: #989898`, `--foundry-alias-color-border-field`, `--foundry-alias-color-background-component-solid-layer-1: #141414`, `--foundry-alias-color-icon-danger-higher-contrast`), brand colours per label (`--foundry-alias-color-brand-rockstar-gold: #fcaf17`, `--foundry-alias-color-brand-bully-blue: #036`, `--foundry-alias-color-brand-bully-yellow: #fa0`), and type roles (`--foundry-alias-font-size-heading-display: calc(64px * 1)`, `heading-01 … 07` = 56/48/40/32/24/20/18px, `body-xxs … md` = 10–16px, `--foundry-alias-font-letter-spacing-heading: -0.025em`, `--foundry-alias-font-line-height-heading: 130%`).
- **Contrast naming** — semantic colours come in graded contrast steps (`-lowest-contrast`, `-lower-contrast`, `-higher-contrast`, `-highest-contrast`).
- **Page/franchise variables** — `--gta-font-family`, `--rdr-font-family`, `--rsg-font-family`, `--base-pixel-size: 12px`, `--base-rem-size: 0.75rem`, `--image-rounding: 0px`.

### Theming
The "static" vs "adaptive" colour split suggests mode-dependent ramps, but no switching mechanism is documented, so none is claimed. The homepage renders dark.

### Type & spacing
Font sizes are expressed as `calc(Npx * 1)`, i.e. a multiplier hook on every size; rendered sizes on this page (13.5–54px) are multiples of 2.25px.

Served alias type scale (variables, not all rendered on the homepage):

| Variable | Value |
|---|---|
| `--foundry-alias-font-size-heading-display` | 64px |
| `--foundry-alias-font-size-heading-01` | 56px |
| `--foundry-alias-font-size-heading-02` | 48px |
| `--foundry-alias-font-size-heading-03` | 40px |
| `--foundry-alias-font-size-heading-04` | 32px |
| `--foundry-alias-font-size-heading-05` | 24px |
| `--foundry-alias-font-size-heading-06` | 20px |
| `--foundry-alias-font-size-heading-07` | 18px |
| `--foundry-alias-font-size-body-body-md` | 16px |
| `--foundry-alias-font-size-body-body-sm` | 14px |
| `--foundry-alias-font-size-body-body-xs` | 12px |
| `--foundry-alias-font-size-body-body-xxs` | 10px |

### Component model (observed)
Pill button (filled pastel/gold, outline, small), nav pill link, hero carousel with pause + dash pagination, news feature card, news list item, promo card, breadcrumb, language selector, footer.

### Accessibility
Observed: a "Skip the Menu" skip link; icon buttons carry text labels ("Open Search", "Open Player Menu"); a pause control on the auto-playing hero.

### Delivery
No public package or Figma kit found.

## Do's and Don'ts

### Do
- Put key art edge-to-edge on `{colors.canvas}` and let it carry colour.
- Use Helvetica Now Display 700 for headlines and Helvetica Now Text for reading text.
- Use grey text (`{colors.ink}`, `{colors.ink-body}`) rather than pure white for body copy.
- Make every button a 1000px pill; tint filled pills to the franchise and keep labels black.
- Use white-outlined pills over art and white-10% for hover.
- Uppercase only nav links, eyebrows and game labels.

### Don't
- Don't add drop shadows or gradients to UI chrome.
- Don't use weights other than 400 and 700.
- Don't put coloured text on black — colour lives in pills and art.
- Don't square off buttons or round cards beyond 8px.
- Don't use the gold for large surfaces; it is a pill/brand accent.

## Responsive Behavior

### Measured at 390px

| Role | Desktop (1280px) | Mobile (390px) |
|---|---|---|
| slide h2 | 45px / 49.5px | 24px / 26.4px |
| body paragraph | 18px / 27px | 16px / 24px |
| primary pill | 18px label, 54px tall, `0 27px` | 16px label, 48px tall, `0 24px`, full width (332px) |
| header | 90px, `0 63px` | 80px, `0 24px` |

### Touch Targets
Pills are 54px (48px on mobile), 45px and 36px; nav links 36px.

### Collapsing Strategy
Only the values above were measured; the mobile menu and news grid layouts were not measured and are not specified here.

## Iteration Guide

1. Start on black with full-bleed art; overlay copy bottom-left.
2. Eyebrow (15.75px uppercase) → Display headline (54px/45px) → one or two pills.
3. Pick pill tint per franchise; black label; 1000px radius; 54px tall.
4. Cards: white-10% panel, 8px radius, 45px padding, grey text, grey date.
5. Keep text grey, chrome translucent, no shadows.
6. Re-run `node web/scripts/verify-designs.mjs --slug=rockstar-games` after edits.
