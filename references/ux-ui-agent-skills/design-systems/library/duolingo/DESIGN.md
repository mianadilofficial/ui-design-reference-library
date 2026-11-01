---
version: alpha
name: Duolingo
category: "Education"
description: "Duolingo's web identity as measured on duolingo.com — a white Snow canvas, Feather Green #58cc02 3D \"lip\" buttons (12px radius, 50px tall, 4px Tree Frog #58a700 bottom shadow), Macaw blue #1cb0f6 secondary actions, Wolf #777777 body copy set in the served duolingo-sans family at 17px/500, and the bespoke Feather Bold display face (served as `feather`) at 48–64px in lowercase green. Flat surfaces, 2px Swan #e5e5e5 borders, 16px card radii and a full-bleed green footer."

colors:
  primary: "#58cc02"
  primary-lip: "#58a700"
  mask-green: "#89e219"
  turtle: "#a5ed6e"
  sea-sponge: "#d7ffb8"
  macaw: "#1cb0f6"
  whale: "#1899d6"
  canvas: "#ffffff"
  polar: "#f7f7f7"
  swan: "#e5e5e5"
  hare: "#afafaf"
  ink: "#777777"
  eel: "#4b4b4b"
  body-root: "#3c3c3c"
  on-primary: "#ffffff"
  navy-band: "#100f3e"
  cardinal: "#ff4b4b"
  bee: "#ffc800"
  fox: "#ff9600"
  beetle: "#ce82ff"
  humpback: "#2b70c9"

typography:
  display-xl:
    fontFamily: "feather, sans-serif"
    fontSize: 64px
    fontWeight: 700
    letterSpacing: -1.28px
  display-lg:
    fontFamily: "feather, sans-serif"
    fontSize: 48px
    fontWeight: 700
  display-mobile:
    fontFamily: "feather, sans-serif"
    fontSize: 36px
    fontWeight: 700
  headline:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 32px
    fontWeight: 700
  headline-mobile:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 32px
    fontWeight: 700
  page-title:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 40px
  input:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 17px
    fontWeight: 500
    lineHeight: 24px
  body-bold:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 24px
  card-title:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 17px
    fontWeight: 700
    lineHeight: 20.4px
  button-label:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 15px
    fontWeight: 700
    letterSpacing: 0.8px
  footer-link:
    fontFamily: "duolingo-sans, sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 22px

rounded:
  button: 12px
  card: 16px
  none: 0px

spacing:
  xs: 4px
  sm: 10px
  md: 12px
  input-x: 14px
  lg: 16px
  xl: 24px
  xxl: 32px
  section-sm: 40px
  section: 48px
  section-lg: 80px
  section-xl: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-label}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 50px
    shadow: "0px 4px 0px {colors.primary-lip}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.macaw}"
    typography: "{typography.button-label}"
    rounded: "{rounded.button}"
    padding: 0px 16px
    height: 50px
    border: "2px solid {colors.swan}"
    shadow: "0px 2px 0px {colors.swan}"
  button-blue:
    backgroundColor: "{colors.macaw}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-label}"
    rounded: "{rounded.card}"
    padding: 0px 16px
    height: 50px
    shadow: "0px 4px 0px {colors.whale}"
  text-input:
    backgroundColor: "{colors.polar}"
    textColor: "{colors.eel}"
    placeholderColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.button}"
    border: "2px solid {colors.swan}"
    padding: 8px 14px
    height: 48px
  course-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.eel}"
    typography: "{typography.card-title}"
    rounded: "{rounded.card}"
    border: "2px solid {colors.swan}"
    padding: 12px 12px 24px
  link:
    textColor: "{colors.macaw}"
    typography: "{typography.body-bold}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.hare}"
    typography: "{typography.button-label}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.turtle}"
    typography: "{typography.footer-link}"
---

## Overview

Duolingo's marketing site is the most literal translation of a mascot into a UI you will find. The page is a white
**Snow** canvas (`{colors.canvas}` — `#ffffff`) populated by flat, saturated vector characters — Duo the owl and a
cast of human characters — tumbling around the hero. Every interactive control is a chunky, tactile "3D"
block: a flat colored face sitting on a darker 4px lip that collapses when pressed. Nothing has a blurred shadow;
depth is entirely the solid offset lip.

Color comes straight from Duo. The official brand guidelines (design.duolingo.com, archived — see Sources) say:
"Our core colors are taken directly from our mascot, Duo", and order them **Feather Green** (`#58cc02`, "the core
color of our brand … When in doubt, lean in to green!"), **Mask Green** (`#89e219`), **Eel** (`#4b4b4b`, "commonly
used for typography") and **Snow** (`#ffffff`, "our primary background color"). The live site matches that ordering:
Feather Green is the primary button and the display headline color, Eel is the h1 color, Snow is the canvas.

Typography is a two-voice system. **Feather Bold** — a bespoke Duolingo typeface served as `feather` — shouts the
short lowercase green section headlines ("free. fun. effective.", "backed by science", "stay motivated") at 48px,
and the 64px hero-band headline with `-1.28px` tracking. Everything else — the hero h1, body, button labels, footer —
is set in the family served as `duolingo-sans`, at weights 500 (reading) and 700 (labels, headings).

The density is low and the rhythm is alternating: illustration left / copy right, then copy left / illustration
right, each band roughly a viewport tall with very generous white space. Copy is short, friendly and second-person
("We make it easy to form a habit of language learning with game-like features…"). Buttons shout in uppercase
("GET STARTED", "I ALREADY HAVE AN ACCOUNT") while headlines whisper in lowercase.

**Key Characteristics:**
- Snow white canvas `#ffffff`; Wolf grey `#777777` is the most-read text color (body paragraphs).
- Feather Green `#58cc02` filled CTA with a solid `0px 4px 0px #58a700` (Tree Frog) lip — the brand's signature "juicy" button.
- Button geometry: 50px tall, `0px 16px` padding, `{rounded.button}` 12px radius, 15px/700 uppercase labels tracked `0.8px`.
- Feather Bold display headlines in lowercase green: 48px desktop → 36px mobile; 64px with `-1.28px` tracking in the hero band.
- Flat surfaces only: cards and inputs use a 2px Swan `#e5e5e5` border, never a blur shadow.
- A full-bleed Feather Green footer with Turtle `#a5ed6e` links.
- Illustration (not photography) carries the page — the guidelines call illustration "the de-facto visual style for Duolingo".

## Colors

> **Source pages:** home (`/`), `/courses`, `/register`, `/log-in`; palette names and hexes from the official
> brand guidelines color page (archived design.duolingo.com/identity/color).

### Brand & Accent
- **Feather Green / Owl** (`{colors.primary}` — `#58cc02`): primary CTA face, Feather Bold section headlines, footer band. The site's own CSS variable is `--color-owl: 88, 204, 2`.
- **Tree Frog** (`{colors.primary-lip}` — `#58a700`): the 4px bottom lip under green buttons (measured `box-shadow: rgb(88, 167, 0) 0px 4px 0px 0px` on the GET STARTED button's `::before`). Root var `--color-tree-frog: 88, 167, 0`.
- **Mask Green** (`{colors.mask-green}` — `#89e219`): official secondary green "upon which Duo can be placed" (guidelines). Root var `--color-mask-green: 137, 226, 25`.
- **Turtle** (`{colors.turtle}` — `#a5ed6e`): footer link color on the green band; second most-read text color on the home page.
- **Sea Sponge** (`{colors.sea-sponge}` — `#d7ffb8`): pale green text/surface accent measured on the home page.
- **Macaw** (`{colors.macaw}` — `#1cb0f6`): secondary action text ("I ALREADY HAVE AN ACCOUNT"), inline links ("research shows that it works"), and the blue LOG IN button face.
- **Whale** (`{colors.whale}` — `#1899d6`): the lip under the blue LOG IN button (`rgb(24, 153, 214) 0px 4px 0px 0px`).

### Secondary palette (official, not on the home page)
The guidelines list "bold, vibrant secondary colors to add splashes of delight to our UI and illustrations":
- **Cardinal** (`{colors.cardinal}` — `#ff4b4b`) — errors/hearts; root var `--color-cardinal: 255, 75, 75`.
- **Bee** (`{colors.bee}` — `#ffc800`) — root var `--color-bee: 255, 200, 0`.
- **Fox** (`{colors.fox}` — `#ff9600`) — root var `--color-fox: 255, 150, 0`.
- **Beetle** (`{colors.beetle}` — `#ce82ff`) — root var `--color-beetle: 206, 130, 255`.
- **Humpback** (`{colors.humpback}` — `#2b70c9`) — root var `--color-humpback: 43, 112, 201`.

"Secondary colors may also be used for bold, full-bleed backgrounds" — the official guideline text.

### Surface
- **Snow** (`{colors.canvas}` — `#ffffff`): page canvas, card faces, secondary button face.
- **Polar** (`{colors.polar}` — `#f7f7f7`): input fill and the soft grey band on `/courses`.
- **Swan** (`{colors.swan}` — `#e5e5e5`): every hairline — the 2px border on cards, inputs and outlined buttons, and the outlined button's 2px lip; also the language-strip rules.
- **Navy band** (`{colors.navy-band}` — `#100f3e`): the largest painted area on the home page measured by area — a deep navy promotional band lower on the page (below the 2400px capture).

### Text
- **Wolf** (`{colors.ink}` — `#777777`): body paragraphs — the most-read text color (1,105 weighted chars) and the input placeholder.
- **Eel** (`{colors.eel}` — `#4b4b4b`): hero h1, page titles, course-card titles, input text. The guidelines: "Eel is commonly used for typography."
- **Body root** (`{colors.body-root}` — `#3c3c3c`): the inherited `body` color.
- **Hare** (`{colors.hare}` — `#afafaf`): the header's "SITE LANGUAGE: ENGLISH" switcher and quiet labels.
- **On primary** (`{colors.on-primary}` — `#ffffff`): labels on green and blue buttons.

### Dark mode values (measured CSS variables, not hex tokens)
The site ships paired `-always-light` / `-always-dark` variables, e.g. `--color-snow-always-dark: 19, 31, 36`,
`--color-eel-always-dark: 241, 247, 251`, `--color-owl-always-dark: 147, 211, 51`,
`--color-macaw-always-dark: 73, 192, 248`, `--color-swan-always-dark: 55, 70, 79`. These are recorded here as
measured triplets; the marketing home page renders in light mode only.

## Typography

### Font Family
- **Feather Bold** — served as `feather` (weight 700 only). The guidelines: "It's bespoke to Duolingo, so no one else
  can use it." Used "for large, brief headlines, left-aligned lists, and sentences ending with 'Duolingo.'"
- **duolingo-sans** — the served UI/body family (loaded weights 500 "normal" and 700, plus italics). The guidelines name
  **DIN Next Rounded** as the typeface "for longer sections of text … headlines longer than 10 words, subheadings, and
  all body copy"; the site's CSS corpus also references a family named `DIN Next for Duolingo`.

### Hierarchy

| Token | Family | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|---|
| `{typography.display-xl}` | feather | 64px | 700 | — | -1.28px | Hero-band headline |
| `{typography.display-lg}` | feather | 48px | 700 | — | — | Section headline ("free. fun. effective.") |
| `{typography.display-mobile}` | feather | 36px | 700 | — | — | Section headline at 390px |
| `{typography.headline}` | duolingo-sans | 32px | 700 | — | — | Hero h1 ("The most fun way to learn languages…"), `/register` h1 |
| `{typography.headline-mobile}` | duolingo-sans | 32px | 700 | — | — | Hero h1 at 390px (unchanged) |
| `{typography.page-title}` | duolingo-sans | 24px | 700 | 40px | — | `/courses` page title |
| `{typography.input}` | duolingo-sans | 20px | 500 | 28px | — | Log-in text field |
| `{typography.body}` | duolingo-sans | 17px | 500 | 24px | — | Body paragraphs |
| `{typography.body-bold}` | duolingo-sans | 17px | 700 | 24px | — | Inline links |
| `{typography.card-title}` | duolingo-sans | 17px | 700 | 20.4px | — | Course-card language name |
| `{typography.button-label}` | duolingo-sans | 15px | 700 | — | 0.8px | Uppercase button labels, language strip |
| `{typography.footer-link}` | duolingo-sans | 15px | 700 | 22px | — | Footer links |

Line heights marked — were computed as `normal` on the live site and are left unspecified.

### Principles (from the official typography guidelines)
- Feather Bold: "Set leading between 100–110%", "Set tracking to -20", "Never use below 30pt in print or 30px onscreen", "Always use lowercase, never all caps", left-aligned, never hyphenated, avoid sentences over 10 words. The measured `-1.28px` at 64px is exactly −0.02em, i.e. tracking −20.
- DIN Next Rounded: "Set leading to 140%", "Set tracking to 0", "Never use below 14pt in print or 14px onscreen", left-aligned or centred.
- Combining: "Aim to use Feather Bold 150% larger than DIN Next Rounded"; never combine both in one sentence; DIN "should never appear bigger" than Feather when used together. On the site, 48px Feather sits over 17px body.
- Buttons invert the lowercase rule: labels are `text-transform: uppercase` with `0.8px` tracking.

### Note on Font Substitutes
Feather Bold is proprietary and unavailable. The guidelines name the official fallback: "In circumstances in which you
do not have access to the brand fonts, use the substitute font **Nunito**", a free Google font that "shares visual
similarities with DIN Next Rounded with rounded caps and friendly characteristics." Use Nunito 700/800 for display and
Nunito 500/700 for body when reproducing the look; keep sizes from the table above.

## Layout

### Spacing System
- Measured gaps: 10px (most common, flex rows), 24px, 32px, 48px, 80px, 12px, 4px; measured paddings: 16px, 40px, 96px, 14px, 48px.
- **Tokens:** `{spacing.xs}` 4px · `{spacing.sm}` 10px · `{spacing.md}` 12px · `{spacing.input-x}` 14px · `{spacing.lg}` 16px · `{spacing.xl}` 24px · `{spacing.xxl}` 32px · `{spacing.section-sm}` 40px · `{spacing.section}` 48px · `{spacing.section-lg}` 80px · `{spacing.section-xl}` 96px.
- Buttons pad `0px 16px` horizontally; height is fixed at 50px, not padding-derived.
- Course cards pad `12px 12px 24px`.

### Grid & Container
- Desktop capture (1280px): content sits in a ~980px centred column. The hero is a two-column split — a large illustration cluster left, the h1 + stacked 330px-wide buttons right.
- Below the hero, a full-width language strip (flags + uppercase 15px language names, chevrons at both ends) is fenced by Swan hairlines.
- Feature bands alternate copy/illustration sides with ~100px column gaps (101px gap measured).
- `/courses` and `/register` lay course cards in a grid of equal tiles.

### Whitespace Philosophy
Bands are close to a viewport tall with one short paragraph each; the illustration is allowed to be as big as the
text block. The density reads as a children's picture book rather than a SaaS page.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat, no border | Canvas, text bands |
| 1 | `2px solid #e5e5e5` border | Course cards, text inputs |
| 2 | Solid offset lip `0px 2px 0px #e5e5e5` + 2px border | Outlined (white) button |
| 3 | Solid offset lip `0px 4px 0px` darker shade of the face | Green and blue filled buttons |

There are **no blurred shadows** in the measured UI (`boxShadows` frequency table is empty). Depth is a solid lip of
the next-darker palette color (Owl → Tree Frog, Macaw → Whale). On press, the lip disappears and the face translates
down 4px (`transform: matrix(1, 0, 0, 1, 0, 4)`, `box-shadow: none` measured in the `:active` state), so the button
physically "sinks".

### Decorative Depth
Illustrations use flat fills with a single darker shade for form — the same lip logic as the buttons.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.none}` | 0px | Bands, nav, footer |
| `{rounded.button}` | 12px | GET STARTED / I ALREADY HAVE AN ACCOUNT buttons, input wrapper |
| `{rounded.card}` | 16px | Course cards, the blue LOG IN button (`--web-ui_button-border-radius: 16px`) |

No pills on the marketing surface. The radius is chunky relative to size — 12px on a 50px button — matching the rounded
terminals of the typefaces.

### Illustration Geometry
Characters and objects are built from simple rounded geometric parts; the guidelines' "Shape language" chapter covers
"Construction", "Rhythm", "Simplicity", "Objects in space", "Color", "Floating accents".

## Components

### Buttons

**`button-primary`** — GET STARTED.
- Face `{colors.primary}` `#58cc02`, label `{colors.on-primary}` in `{typography.button-label}` (15px/700, uppercase, 0.8px tracking).
- Height 50px, width 330px in the hero, padding `0px 16px`, radius `{rounded.button}` 12px.
- Construction (measured): the `<a>` itself is transparent with a 4px transparent bottom border; a `::before` layer paints the green face with `box-shadow: rgb(88, 167, 0) 0px 4px 0px 0px`.
- Hover: `filter: brightness(1.1)` — no color swap. Active: lip removed, face translates 4px down.

**`button-secondary`** — I ALREADY HAVE AN ACCOUNT.
- Face `{colors.canvas}`, label `{colors.macaw}` `#1cb0f6`, same type and geometry (50px, 12px radius).
- `::before` has `2px solid #e5e5e5` border and `0px 2px 0px #e5e5e5` lip. Hover: `filter: brightness(0.9)`.

**`button-blue`** — the LOG IN submit button in the log-in modal.
- Face `{colors.macaw}`, lip `{colors.whale}` `#1899d6` (`0px 4px 0px`), white label, 50px tall, radius `{rounded.card}` 16px.

### Inputs & Forms

**`text-input`** — log-in modal field.
- Wrapper: `{colors.polar}` `#f7f7f7` fill, `2px solid #e5e5e5`, radius 12px, 48px tall.
- Input: `{typography.input}` 20px/500/28px, text `{colors.eel}`, padding `8px 14px`, 44px tall; placeholder `{colors.ink}` `#777777`.

### Cards & Containers

**`course-card`** — `/courses` and `/register` language tiles.
- Face `{colors.canvas}`, `2px solid {colors.swan}`, radius `{rounded.card}` 16px, padding `12px 12px 24px`, 217px tall.
- Flag illustration on top, language name in `{typography.card-title}` (17px/700/20.4px, Eel), learner count ("42M learners") in Wolf 15px below.

### Navigation

**`nav`** — the home header is minimal: the green duolingo wordmark (owl + wordmark) at left and an uppercase
"SITE LANGUAGE: ENGLISH" dropdown in `{colors.hare}` 15px/700 at right. No nav links, no sign-in button in the bar —
both actions live in the hero.

### Links

**`link`** — inline body links are `{colors.macaw}` 17px/700 with no underline.

### Footer

**`footer`** — full-bleed `{colors.primary}` band (827px tall on desktop) with link columns ("About us", "Courses",
"Mission", "Approach", "Efficacy", "Duolingo Handbook") in `{typography.footer-link}` 15px/700/22px, color
`{colors.turtle}` `#a5ed6e`.

### Signature Components
- **Language strip** — horizontally scrolling flags + uppercase names, chevrons each end, between two Swan rules.
- **Feature band** — lowercase green Feather headline + one Wolf paragraph + giant character illustration.

## Design System Architecture

Duolingo publishes **brand guidelines**, not a public UI component library or token package.

- **Official source:** [design.duolingo.com](https://design.duolingo.com) — now redirects (301) to the design blog hub
  [blog.duolingo.com/hub/design](https://blog.duolingo.com/hub/design/); the guidelines content was read from the
  archived site and its JS bundle ([archived color page](https://web.archive.org/web/20250123182206/https://design.duolingo.com/identity/color)).
  Chapters: Identity (Logos, Color, Typography, Imagery, Brand family), Illustration (Shape language, Characters, Duo),
  Writing (Brand narrative, Voice, Tone, Style, Duo, Glossary), Marketing (Assets, Elements), Resources.
- **Token architecture (brand tier):** colors are named after animals and grouped in families — the guidelines'
  source map groups neutrals (`Polar`, `Swan`, `Hare`, `Wolf`, `Eel`), reds (`Squid`, `Walking Fish`, `Flamingo`, `Pig`,
  `Crab`, `Cardinal`, `Fire Ant`), yellows/oranges (`Canary`, `Duck`, `Bee`, `Lion`, `Fox`, `Cheetah`, `Monkey`, `Camel`,
  `Guinea Pig`, `Grizzly`), greens (`Sea Sponge`, `Turtle`, `Owl`, `Tree Frog`), blues (`Iguana`, `Anchovy`, `Beluga`,
  `Moon Jelly`, `Blue Jay`, `Macaw`, `Whale`, `Humpback`, `Narwhal`) and purples (`Starfish`, `Beetle`, `Betta`, `Butterfly`).
  Each swatch is published with Hex, RGB, CMYK and Pantone (e.g. Feather Green "PMS 361 C / 2421 U").
- **Token architecture (product tier, measured on duolingo.com):** the same animal names ship as CSS custom properties
  holding bare RGB triplets so they can be composed with alpha — `--color-owl: 88, 204, 2`, `--color-macaw-shadow`,
  `--color-fox-shadow`, used as `rgb(var(--color-swan))` in rules like `box-shadow: 0 2px 0 rgb(var(--color-swan))`.
  Typography is tokenised by role × size: `--text-body-size`, `--text-body-weight` (500), `--text-label-letter-spacing-large`
  (0.04em), `--text-heading-size-large` (1.75rem), `--text-pageTitle-size-large` (2.5rem), `--text-caption-size` (1rem).
  Component-internal variables are prefixed `--__internal__` (e.g. `--__internal__lip-width`, `--__internal__border-color`)
  and one web-UI component token is exposed: `--web-ui_button-border-radius: 16px`.
- **Theming:** light/dark is driven by paired variables — every color has `-always-light` and `-always-dark` variants
  (`--color-snow-always-dark: 19, 31, 36`, `--color-eel-always-dark: 241, 247, 251`) plus feature-scoped tokens such as
  `--color-dark-mode-locked-path-section-text-color`. Sub-brands (Super, Max) appear as scoped gradient tokens
  (`--color-super-gradient-neutral-purple`, `--color-max-dark`).
- **Type & spacing:** two typefaces with role rules (Feather Bold for ≤10-word lowercase headlines, ≥30px; DIN Next
  Rounded for everything else, ≥14px, 140% leading). The guidelines publish no spacing grid; measured spacing on the
  site is listed in Layout. The guidelines' JS exposes layout constants `"juicy-margin":"24px"` and breakpoints
  `width-sm 768px`, `width-md 992px`, `width-lg 1200px`, `width-xl 1600px` (those are the guideline site's own constants).
- **Component model:** no public inventory. The product team's own write-up on the core-tab refresh
  ([Elevating craft](https://blog.duolingo.com/core-tabs-redesign/)) describes "a framework for all our design elements
  that could scale across tabs", "tiered sizes" for headers and a type system "with a minimal number of styles" — but
  publishes no component list. On the web, the measured components are the lip button (green / white-outlined / blue),
  the Polar text field, and the bordered course card.
- **Accessibility:** the guidelines set minimum sizes (Feather ≥30px, DIN ≥14px) and forbid justified or hyphenated
  text; no contrast targets or focus-ring rules are published. Note that Wolf `#777777` on white computes to 4.48:1,
  just under the WCAG AA 4.5:1 body-text threshold; Feather Green `#58cc02` behind white labels is low-contrast — the brand relies on bold 15px
  uppercase labels.
- **Delivery:** no npm package, Figma community kit or GitHub token repo found (searches recorded in SOURCES.json).
  Fonts are self-hosted (`duolingo-sans`, `feather`); CSS uses hashed CSS-module class names (`_1rcV8 _1VYyp`).

## Do's and Don'ts

### Do
- Use Feather Green `#58cc02` for the main action and the lowercase display headlines — "When in doubt, lean in to green!"
- Build every button as a flat face on a solid 4px lip of the next-darker color (`#58a700` under green, `#1899d6` under Macaw).
- Make buttons 50px tall with 12px radius and uppercase 15px/700 labels tracked 0.8px.
- Set body copy in Wolf `#777777` at 17px/500/24px; headings in Eel `#4b4b4b`.
- Keep surfaces flat: 2px Swan `#e5e5e5` borders, no blur shadows.
- Let a flat vector character illustration own half of every band.
- Write Feather Bold headlines in lowercase, left-aligned, short.

### Don't
- Don't use Feather Bold in all caps, below 30px, for long sentences, or justified (guideline rules).
- Don't add drop shadows or gradients to buttons; the lip is the only depth.
- Don't swap colors on hover — the site uses `filter: brightness(1.1)` (filled) or `brightness(0.9)` (outlined).
- Don't use Macaw blue for the primary action on marketing pages; it is the secondary/link color.
- Don't combine Feather Bold and DIN Next Rounded within one sentence.
- Don't introduce stock photography in product-style marketing bands — illustration is the de-facto style.

## Responsive Behavior

### Breakpoints

| Name | Width | Key Changes |
|---|---|---|
| Desktop | 1280px (measured) | Two-column hero; Feather section headlines 48px |
| Mobile | 390px (measured) | Single column; hero h1 stays 32px; Feather headlines 36px; body stays 17px |

### Touch Targets
- Buttons are 50px tall at both widths; inputs 48px (wrapper).

### Collapsing Strategy
- The mobile h1 block measures 231px tall at 345px wide; hero arrangement was not measured.
- Display type steps 48px → 36px; the 15px uppercase label and 17px body are unchanged.
- Mobile feature band layout was not measured.

### Image Behavior
Illustrations are SVG/vector art served from a CDN (`d35aaqx5ub95lt.cloudfront.net`) and scale with their column.

## Iteration Guide

1. Start every screen with `{colors.canvas}` and one `button-primary`; add `button-secondary` beneath it, never beside.
2. Reference tokens by name: `{colors.primary}`, `{colors.primary-lip}`, `{rounded.button}`, `{typography.button-label}`.
3. Implement the lip with a `::before` face + `box-shadow: 0 4px 0 <darker>`; on `:active` remove the shadow and `translateY(4px)`.
4. Headlines: `feather` 48px lowercase green for marketing bands; `duolingo-sans` 32px/700 Eel for UI titles.
5. Body: 17px/500/24px Wolf; links 17px/700 Macaw.
6. Cards: white, `2px solid #e5e5e5`, 16px radius, `12px 12px 24px` padding.
7. When the brand fonts are unavailable, use Nunito (official substitute).
8. Run `node web/scripts/verify-designs.mjs --slug=duolingo` after edits.
