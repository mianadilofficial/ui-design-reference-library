---
version: alpha
name: DER SPIEGEL
category: "News & Publishing"
description: "DER SPIEGEL, Germany's news site: an orange-red #e64415 header on a warm grey #f1efed page with white #ffffff cards, black #000000 headlines in SpiegelSlabCdUI 800 at 36px, SpiegelSansUI 16px body, 1.5px corners and a 44px orange register button."
colors:
  canvas: "#ffffff"
  page-body: "#f1efed"
  ink: "#000000"
  primary: "#e64415"
  on-primary: "#ffffff"
  primary-hover: "#c12b00"
  surface-footer: "#2f2d2b"
  ink-muted: "#5c5a58"
  ink-subtle: "#bbb9b7"
  ink-teal: "#1a3a4a"
  hairline: "#dddbd9"
  text-input-border: "#989694"
  tint-rose: "#ffefed"
  tint-mint: "#cefff9"
  tint-ice: "#e9f1f5"
typography:
  display:
    fontFamily: SpiegelSlabCdUI, Constantia, "Lucida Bright", Lucidabright, "Lucida Serif", Lucida, "DejaVu Serif", "Bitstream Vera Serif", "Liberation Serif", Georgia, serif
    fontSize: 36px
    fontWeight: 800
    lineHeight: 38.88px
  display-mobile:
    fontFamily: SpiegelSlabCdUI, Constantia, "Lucida Bright", Lucidabright, "Lucida Serif", Lucida, "DejaVu Serif", "Bitstream Vera Serif", "Liberation Serif", Georgia, serif
    fontSize: 28px
    fontWeight: 800
    lineHeight: 30.24px
  heading:
    fontFamily: SpiegelSansUI, system-ui, "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20.16px
  body:
    fontFamily: SpiegelSansUI, system-ui, "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.08px
  button:
    fontFamily: SpiegelSansUI, system-ui, "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  audio-pill:
    fontFamily: SpiegelSansUI, system-ui, "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 0px
  nav:
    fontFamily: sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.16px
  input:
    fontFamily: SpiegelSansUI, system-ui, "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 1.5px
  sm: 8px
  md: 24px
  circle: 50%
spacing:
  s1: 1px
  s2: 6px
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
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 44px
  button-primary-hover:
    textColor: "{colors.primary-hover}"
  audio-pill:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.audio-pill}"
    rounded: "{rounded.md}"
    padding: 10px 12px
    height: 36px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

## Overview

DER SPIEGEL's home page (title "DER SPIEGEL | Online-Nachrichten"; description "Deutschlands führende Nachrichtenseite. Alles Wichtige aus Politik, Wirtschaft, Sport, Kultur, Wissenschaft, Technik und mehr.") is a dense, editorial news front page in German. The measured page is very long (the body is 32924px tall at 1280px wide, with 5960 visible elements) and is built from a bold orange-red header, a white navigation row, a white strip of three breaking headlines with timestamps ("Vor 2 Min", "Vor 7 Min", "Vor 14 Min"), then white cards on a warm grey page.

In the capture, the header is a full-width `#e64415` band with the white DER SPIEGEL slab-serif logotype at the left and, at the right, an underlined white "Abonnement" link and a white "Anmelden" button with a chevron. Under it, a white row has a "Menü" control and the channel links Schlagzeilen, SPIEGEL+, Politik, Ausland, Panorama, Sport, Wirtschaft, Wissenschaft, Kultur, Netzwelt, Leben, Effilee, Job & Karriere, Start, Daten & Visualisierungen, Reporter, Tests, Geschichte, Mobilität, Podcasts, Video and DEIN SPIEGEL, with a search icon. The lead story is a white card: an orange kicker ("Schwarz-rote Koalition nach dem Votum in Sachsen-Anhalt"), a 36px black slab headline (»Was der Kanzler sagt, ist eine Verschwörungstheorie«), a grey-and-black teaser with a byline, a small video duration and bookmark icon ("1 Std 5 Min"), and at the right a duotone photograph with an orange circular play button over an orange circle.

Voice is serious and precise: kickers name the story context ("Machtkampf in der Koalition"), headlines are full sentences set in guillemets for quotes, bylines read "Von ..." and opinion pieces are labelled "MEINUNG". The color story is restrained: black type, grey meta text and one orange used for the brand, links and the kicker. A consent dialog (`sp_message_container_1519494`) was hidden before measuring and is not documented.

## Colors

- **Canvas `#ffffff`**: card and strip background (the largest measured area). **page-body `#f1efed`**: the warm grey page background and the body background.
- **Ink `#000000`**: 27927 characters, all headlines and body copy. **ink-muted `#5c5a58`** (2133 characters): meta text such as "Vor 2 Stunden" and bylines. **ink-subtle `#bbb9b7`** (402): quieter labels. **`#f1efed`** also colors 354 characters on dark areas.
- **Primary `#e64415`**: the SPIEGEL orange-red: the header background, the "Jetzt registrieren" and duration buttons, kickers (758 characters in this color) and the inset ring on active controls (`inset 0 0 0 2px rgb(230, 68, 21)`). **on-primary `#ffffff`** is its text color. On hover the "Anmelden" text color goes from `#e64415` to **`#c12b00`**.
- **surface-footer `#2f2d2b`**: the dark footer (with "SPIEGEL Games" and links to Wordle, Viererkette, Solitär and Sudoku).
- **ink-teal `#1a3a4a`**: text and border of the outlined "Extern anhören" button; the root also declares `--ml-work-color-dark: #1A3A4A`.
- **tint-rose `#ffefed`, tint-mint `#cefff9`, tint-ice `#e9f1f5`**: pale tinted section backgrounds measured on 877, 276 and 177 area weight. The root's per-channel variables show the same family (`--ml-effilee-color-light: #FFEFED`, `--ml-fitness-color-light: #CAFBD9`, `--ml-work-color-light: #C2E2F2`).
- **hairline `#dddbd9`** (16 borders) and **text-input-border `#989694`** (7 borders) are the neutral borders.

The root declares one dark and one light color per channel (for example `--ml-geldanlage-color-dark: #163683`, `--ml-health-color-dark: #004746`, `--ml-travel-color-dark: #3D2C26`, `--ml-loveletter-color-dark: #811D00`), so each section can carry its own accent; only the ones above were measured on screen.

## Typography

SPIEGEL ships its own families: **SpiegelSlabCdUI** (800) for headlines and the footer title, **SpiegelSansUI** (400 and 700) for UI, teasers and nav, **SpiegelSerifUI** (700, 916 characters) and **SpiegelSerifDisplayUI** declared in the CSS, and **SpiegelSans** (600). The stacks fall back to Constantia, Georgia and serif for the slab, and to system-ui and Helvetica Neue for the sans.

| Role | Font | Size / line height | Weight |
|---|---|---|---|
| display (lead headline) | SpiegelSlabCdUI | 36px / 38.88px | 800 |
| display-mobile | SpiegelSlabCdUI | 28px / 30.24px | 800 |
| heading (story titles, h2, h3) | SpiegelSansUI | 16px / 20.16px | 700 |
| body (teasers) | SpiegelSansUI | 16px / 22.08px | 400 |
| button | SpiegelSansUI | 14px / 18px | 700 |
| input | SpiegelSansUI | 16px / 18px | 400 |

By characters the most-read sizes are 16px (16729), 14px (5925), 18px (5672), 20px (2930), 32px (992), 24px (545), 36px (391) and 28px (79). Weights are 400 (21310), 700 (10625) and 800 (1383). Line heights are tight, 1.08 for the slab headline. Small uppercase-style labels measure 14px with 0.28px tracking and 12px with 0.12px; all other roles have normal tracking.

## Layout

The 1280px page has a 80px-high orange header, a white navigation row, and a content column in the capture about 760px wide in the 960px preview. The breaking strip is three equal columns separated by vertical hairlines. The lead module is a white card on the grey page: the text column on the left (kicker, headline, teaser, meta, actions) and a large image on the right. Measured paddings are mostly 24px (368 uses), then 8px, 16px, 12px, 10px, 32px, 64px and 40px; gaps are 16px (34), 8px (26) and 24px (8). The root exposes layout helper variables such as `--polygon-headerbar-height`, `--polygon-breakingnews-height` and `--polygon-audioplayer-height`.

## Elevation & Depth

Cards use a very soft shadow, `0 1px 4px 0 rgba(0, 0, 0, 0.1)` (51 uses), and one element has `0 0 4px 0 rgba(0, 0, 0, 0.3)`. Active controls use a 2px inset ring in `#e64415`. The page background `#f1efed` against white cards provides most of the separation; borders are `#dddbd9`. Imagery is flat duotone with an orange circle, not shadowed.

## Shapes

Radii: 1.5px (189 elements, the default for cards, buttons and inputs), 50% (42: round icons and buttons such as the play button), 8px (29), 24px (17: the audio duration pill and outlined "Extern anhören" button), and edge-only `0 0 1.5px 1.5px` and `1.5px 1.5px 0 0`. The corner language is nearly square with pills for media controls.

## Components

- **Register button (`button-primary`)**: "Jetzt registrieren", `#e64415` fill, white SpiegelSansUI 14px 700, padding 0px 16px, 44px high, 1.5px radius.
- **Header "Anmelden"**: white button with orange text and a chevron; hover darkens the text to `#c12b00`.
- **Audio pill (`audio-pill`)**: `#e64415` fill, white 14px text ("1 Std 43 Min"), padding 10px 12px, 36px high, 24px radius.
- **Outlined button**: "Extern anhören", `#1a3a4a` text and 1px border, 24px radius, 144px by 34px.
- **Text input (`text-input`)**: white, 1px solid `#989694`, 44px high, padding 0px 16px, 1.5px radius.
- **Card (`card`)**: white, 1.5px radius, soft shadow, containing kicker, headline, teaser and meta.
- **Breaking strip**: three bold 16px headlines with grey timestamps in a white row.
- **Footer (`footer`)**: `#2f2d2b` with white SpiegelSlabCdUI 20px 800 section titles ("SPIEGEL Games").

## Design System Architecture

No public design system is linked from the home page. The page opened for research was https://www.spiegel.de/ (rendered; the navigation lists only newsroom channels). The de-facto system is visible in the `:root`: Tailwind utility variables (`--tw-shadow`, `--tw-ring-shadow`, `--tw-drop-shadow`), layout variables prefixed `--polygon-` (header bar, breaking news, audio player, zone header, app bottom bar heights) and a family of `--ml-<channel>-color-dark` and `--ml-<channel>-color-light` variables for channels such as effilee, work, travel, health, fitness, familie, geldanlage, money, weekend, elf and loveletter. The shipped CSS also uses `--font-family-sansUI` and `--font-family-sans` variables. The typefaces are SPIEGEL's own named families.

## Do's and Don'ts

Do:
- Use the orange-red `#e64415` for the header, primary buttons and kickers only.
- Set lead headlines in SpiegelSlabCdUI 800 at 36px with 38.88px line height; use SpiegelSansUI for everything else.
- Keep cards white on the `#f1efed` page with a 1.5px radius and the 0.1-alpha shadow.
- Use pills (24px) and circles (50%) only for media controls.
- Write kickers, full-sentence headlines and bylines in a sober tone.

Don't:
- Do not add colors outside the channel palette; accents belong to named channels.
- Do not use heavy shadows or large radii on cards.
- Do not mix the slab face into body copy.
- Do not copy the consent dialog or ads as brand UI.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured: the h1 headline is 28px with a 30.24px line height (337px wide); the h2 story title stays 16px/20.16px at 293px wide; the body teaser stays 16px/22.08px at 358px wide; the register button keeps its 156px by 44px measurements; the header measured 48px high (80px on desktop) with the text "Anmelden" and "Menü öffnen". The most-read mobile sizes were 16px (17856), 14px (5801), 18px (4797), 20px (3107), 24px (1402), 28px (428) and 12px. How cards and the breaking strip rearrange was not measured, and breakpoints were not recorded.

## Iteration Guide

1. Use `#f1efed` as the page, white cards, black text, and load the Spiegel families.
2. Build the header: `#e64415`, 80px high, white logotype, "Abonnement" link and "Anmelden" button.
3. Build the type scale: 36px slab headlines, 16px sans headings and teasers, 14px buttons.
4. Make cards 1.5px-radius white with the soft shadow; add kickers in orange.
5. Use 24px pills and 50% circles only for media controls.
6. Check mobile with 28px headlines and a 48px header.
