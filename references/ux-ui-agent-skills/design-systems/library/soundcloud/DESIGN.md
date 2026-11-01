---
version: alpha
name: SoundCloud
category: "Music & Audio"
description: "SoundCloud (soundcloud.com): a near-black #121212 canvas with #ffffff text and #999999 secondary text, set entirely in Klim's Söhne. The landing page shouts in 65px/800 uppercase Söhne headlines and uses white #ffffff pill CTAs (9999px, 46px tall) with #121212 labels; the app uses 4px-radius 32px buttons on #303030. SoundCloud Orange #ff5500 is the brand accent; links are #699fff on dark, focus rings 2px #044dd2."

colors:
  primary: "#ff5500"
  primary-faded: "#ff550066"
  canvas: "#121212"
  ink: "#ffffff"
  ink-secondary: "#999999"
  ink-dark: "#121212"
  ink-muted-light: "#666666"
  surface: "#303030"
  surface-grey: "#666666"
  surface-light: "#f3f3f3"
  surface-white: "#ffffff"
  black: "#000000"
  link-on-dark: "#699fff"
  link-standard: "#044dd2"
  hover-ink-dark: "#12121266"
  hover-ink-light: "#ffffff66"
  hairline-on-dark: "#ffffff26"
  error: "#d61348"
  success: "#008850"
  artist: "#5a45fd"
  brand-white: "#fafafa"
  lime: "#dcf400"
  lavender: "#b3a2f2"

typography:
  display-hero:
    fontFamily: "Söhne, Sohne, sans-serif"
    fontSize: 65px
    fontWeight: 800
    lineHeight: 55.25px
    letterSpacing: -1.3px
  display1:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 60px
    fontWeight: 600
    lineHeight: 36px
  heading1:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 36px
  heading2:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 28px
  hero-body:
    fontFamily: "Söhne, Sohne, sans-serif"
    fontSize: 19px
    fontWeight: 600
    lineHeight: 20.9px
    letterSpacing: -0.19px
  button-large:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 17px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.2px
  body:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  body-strong:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  caption:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 12px
    fontWeight: 400
  micro:
    fontFamily: "Söhne, system-ui, -apple-system, \"Segoe UI\", Roboto, sans-serif"
    fontSize: 10px
    fontWeight: 600
  display-hero-mobile:
    fontFamily: "Söhne, Sohne, sans-serif"
    fontSize: 65px
    fontWeight: 800
    lineHeight: 55.25px
    letterSpacing: -1.3px

rounded:
  none: 0px
  input: 3px
  button: 4px
  panel: 6px
  sm: 8px
  artwork: 12px
  toggle: 16px
  tag: 100px
  pill: 9999px

spacing:
  "0_25x": 2px
  "0_5x": 4px
  "0_75x": 6px
  "1x": 8px
  "1_5x": 12px
  "2x": 16px
  "3x": 24px
  "4x": 32px
  "5x": 40px
  "6x": 48px
  "8x": 64px
  header-height: 46px
  player-height: 48px

components:
  button-primary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 13px 23px
    height: 46px
  button-primary-hover:
    textColor: "{colors.hover-ink-dark}"
  button-secondary:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 0px 24px
    height: 32px
  button-secondary-hover:
    textColor: "{colors.hover-ink-dark}"
  button-header-light:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.button}"
    padding: 6px 12px
    height: 32px
  button-app:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body-strong}"
    rounded: "{rounded.button}"
    padding: 6px 12px
    height: 32px
  button-app-hover:
    textColor: "{colors.hover-ink-light}"
  link:
    textColor: "{colors.link-on-dark}"
    typography: "{typography.body}"
  link-hover:
    textDecoration: underline
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body-strong}"
    height: 46px
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body-strong}"
    padding: 13px 8px
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.input}"
    padding: 8px 40px 8px 16px
    height: 36px
  tag:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    rounded: "{rounded.tag}"
    height: 24px
  tag-hover:
    textColor: "{colors.hover-ink-light}"
  artwork-card:
    rounded: "{rounded.artwork}"
    boxShadow: "rgba(18, 18, 18, 0.1) 0px 0px 0px 1px inset"
    size: 190px
  panel:
    backgroundColor: "{colors.canvas}"
    border: "1px solid #ffffff26"
    rounded: "{rounded.panel}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.caption}"
---

## Overview

SoundCloud's web experience is a dark, image-led music product. Everything sits on a single near-black canvas, `#121212`,
which is also the "Black" of the official Media Kit palette. Text is pure white `#ffffff`, with `#999999` grey for
secondary metadata (artist names under track titles, nav items, footer links). There are no light sections on the
logged-out homepage: the hero carousel, the search block, the trending strip, the "NEVER STOP LISTENING" app block and
the "CALLING ALL CREATORS" block all run on the same `#121212`.

The page's voice comes from two things the token table can only partly hold:

- **Shouting display type.** Hero and section headlines are Söhne at 65px, weight 800, uppercase, with a negative
  -1.3px tracking and a line-height (55.25px) *tighter* than the font size, so the two lines of "EVERY SCENE / LIVES HERE."
  or "DISCOVER. / GET DISCOVERED." stack into a dense block.
- **Full-bleed artist photography.** The hero is a two-panel carousel (a large rounded photo of an artist on the left,
  the headline over a darker photo on the right). Lower blocks pair a big photo with a headline, and the app block uses a
  3D illustration of a phone, headphones and chain in orange and lavender — the only place SoundCloud Orange appears on
  the landing page.

Actions are white. The primary CTA ("Upload your own", "Explore trending playlists", "Find out more") is a white `#ffffff`
pill with `#121212` text, 46px tall. SoundCloud Orange `#ff5500` exists in the site's tokens (`--special-color: #f50`,
`--button-special-background-color: #f50`, `--checkbox-checked-background-color: #f50`, `--toggle-on-body-color: #f50`)
and in the Media Kit as the primary brand color, but on the measured pages it is reserved for checked controls, toggles,
"selected" button text and illustrations — not for the main CTA.

Inside the product (profile, discover, search pages), density increases sharply: 12px and 14px text dominate, buttons
shrink to 32px tall with a 4px radius, and the waveform player, track rows and sidebars form a compact two-column layout.

**Key Characteristics:**
- Canvas `#121212`, ink `#ffffff`, secondary ink `#999999`
- One typeface family: Söhne (loaded weights 400, 600, 700, 900)
- Hero headlines 65px / 800 / uppercase / -1.3px tracking / 55.25px line-height
- Landing CTAs: white pill, radius 9999px, padding 13px 23px, 46px tall, 17px/600 label
- App buttons: radius 4px, padding 6px 12px, 32px tall, 14px/600 label, `#303030` or `#ffffff` fill
- Hover never changes the fill — the label and border fade to 40% alpha
- Artwork tiles 190×190px with 12px radius and a 1px inset hairline
- 8px spacing base (`--spacing-1x: 8px`)

## Colors

### Brand
- **SoundCloud Orange** `#ff5500` (`primary`): the brand color. Media Kit: "SoundCloud Orange: HEX #FF5500". In CSS it is
  `--special-color`, `--font-special-color`, `--button-special-background-color`, `--checkbox-checked-background-color`,
  `--toggle-on-body-color`, and the "selected" text of secondary/tertiary buttons. It also appears faded as
  `#ff550066` (`--button-secondary-selected-hover-font-color: rgba(255,85,0,0.4)`).
- **Media Kit White** `#fafafa` (`brand-white`) — cited from the Media Kit; the live UI uses pure `#ffffff` instead.
- **Media Kit secondary accents** — Lime `#dcf400`, Lavender `#b3a2f2` (cited). The Media Kit also lists Yellow, Red,
  Pink, Blue, Beige and four greys; they are for brand communication and were not measured in the web UI, so they are not
  tokens here.

### Surfaces
- **Canvas** `#121212`: body background and the full landing page (`--background-dark-color`, `--black-color`).
- **Surface** `#303030`: the search input, app buttons (Station, Share, like/repost counters) and tags.
- **Surface grey** `#666666`: the second-largest background area on the homepage.
- **Surface light** `#f3f3f3`: the hero's secondary pill buttons ("Upload", "Get started") — `--button-secondary-background-color`.
- **Surface white** `#ffffff`: primary CTAs and the header's "Create account" / "Follow" buttons.
- **Black** `#000000`: the hero's "Create account" pill (black fill, white label and border).

### Text
- **Ink** `#ffffff`: headlines, body copy, track titles (the most-read color on the homepage).
- **Ink secondary** `#999999`: nav items, artist names under track titles, footer links; on the profile page it is the most-read color.
- **Ink dark** `#121212`: labels on white/light buttons (`--font-primary-color`).
- **Ink muted (light theme token)** `#666666`: `--font-secondary-color`.

### Links & focus
- **Link on dark** `#699fff`: "Learn More" in the announcement bar, profile bio links. Hover adds an underline.
- **Link standard** `#044dd2`: `--link-standard-color` / `--font-link-color`, and the focus ring color
  (`--link-primary-focus-box-shadow: 0 0 0 2px #044dd2`, `--button-focused-box-shadow: 0 0 0 2px #044dd2 inset`).

### States
- **Hover ink (dark labels)** `#12121266` = rgba(18,18,18,0.4): hovered label on white/light buttons.
- **Hover ink (light labels)** `#ffffff66` = rgba(255,255,255,0.4): hovered label on dark buttons and tags.
- **Hairline on dark** `#ffffff26`: 1px border of the "Next up" queue panel and similar overlays.
- **Error** `#d61348` (`--error-color`, `--input-invalid-border-color`), **Success** `#008850` (`--success-color`).
- **Artist** `#5a45fd` (`--artist-color`) for Artist-plan badges.

## Typography

### Font Family
SoundCloud serves **Söhne** (`--font-main: "Söhne"`), with the stack
`"Söhne", system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif`. Loaded faces measured on
the homepage: Söhne 400, 600, 700 and 900. Marketing blocks use the shorter stack `Söhne, Sohne, sans-serif`.
The CSS also declares `@font-face` rules for Inter and "SoundCloud Sans", but no measured visible text used them.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Use |
|---|---|---|---|---|---|
| display-hero | 65px | 800 | 55.25px | -1.3px | Landing headlines, uppercase |
| display1 | 60px | 600 | 36px | — | `--typography-display1-*` token |
| heading1 | 28px | 600 | 36px | — | Page titles ("Discover Tracks and Playlists", profile name) |
| heading2 | 22px | 600 | 28px | — | Section titles ("Recent", "Artists to watch out for", search title) |
| hero-body | 19px | 600 | 20.9px | -0.19px | Landing paragraph under the headline |
| button-large | 17px | 600 | 24px | 0.2px | Landing pill CTAs |
| body | 14px | 400 | 20px | — | Default UI text |
| body-strong | 14px | 600 | 20px | — | Nav, app buttons, track titles |
| caption | 12px | 400 | — | — | Metadata, counters, timestamps |
| micro | 10px | 600 | — | — | `--typography-micro-*` token |

The site's own scale is written in rem against a 14px root (`--typography-root-font-size: 0.875em`):
`--typography-heading1-font-size: 2rem` (28px), `--typography-heading2-font-size: 1.5714rem` (22px),
`--typography-body-font-size: 1rem` (14px), `--typography-captions-font-size: 0.8571rem` (12px).

### Principles
- Weight carries hierarchy more than size inside the app: 600 for anything clickable or titled, 400 for metadata.
- Landing display type is uppercase with tight negative tracking; app headings are sentence case with normal tracking.
- Line-heights on the landing page are deliberately tight (55.25px on 65px, 20.9px on 19px).

### Note on Font Substitutes
Söhne is a commercial typeface by Kris Sowersby / Klim Type Foundry (klim.co.nz). If it cannot be licensed, the site's
own fallback stack is `system-ui, -apple-system, "Segoe UI", Roboto` — use that rather than a look-alike, and keep the
measured weights (400/600/800) and tracking values.

## Layout

### Spacing System
SoundCloud names spacing in multiples of an 8px unit: `--spacing-0_25x: 2px`, `--spacing-0_5x: 4px`,
`--spacing-0_75x: 6px`, `--spacing-1x: 8px`, `--spacing-1_5x: 12px`, `--spacing-2x: 16px`, `--spacing-3x: 24px`,
`--spacing-4x: 32px`, `--spacing-5x: 40px`, `--spacing-6x: 48px`, `--spacing-8x: 64px`.
Measured gaps on the homepage are 16px, 8px, 4px and 32px; the profile page's paddings are dominated by 8px, 16px, 6px and 12px.

### Grid & Container
- The trending strip is a horizontal row of 190×190px artwork tiles with title and artist beneath.
- App pages (profile) use a main column (section headings measured 848px wide) plus a right sidebar with stats (Followers / Following / Tracks),
  "Fans also like" and "Following" lists.
- Fixed chrome: header `--header-height: 46px`; bottom player `--play-controls-height: 48px`.

### Whitespace Philosophy
The landing page is airy — big vertical gaps between blocks (paddings of 120px and 64px measured) and a centered search
+ CTA stack. The app is dense: 12px/14px rows separated by 8–16px.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| Flat | none | Nearly everything — buttons, sections, nav |
| Hairline inset | `rgba(18, 18, 18, 0.1) 0px 0px 0px 1px inset` | Artwork tiles (keeps light covers from bleeding) |
| Hairline border | `1px solid #ffffff26` | Overlay panels such as "Next up" |
| Focus | `0 0 0 2px #044dd2` (inset on buttons) | Keyboard focus |

Depth comes from photography and artwork, not shadows. No drop shadows were measured on visible homepage elements.

## Shapes

| Token | Value | Use |
|---|---|---|
| none | 0px | Sections, nav |
| input | 3px | Search field |
| button | 4px | App buttons, header buttons (`--link-primary-border-radius: 4px`) |
| panel | 6px | Queue / overlay panels |
| sm | 8px | `--borderRadiuses-8` |
| artwork | 12px | Artwork tiles and the hero carousel panels |
| toggle | 16px | `--toggle-body-border-radius` |
| tag | 100px | `--tag-body-border-radius`, 24px-tall genre tags |
| pill | 9999px | Landing CTAs |

Avatars and the play button are circles (50%). No clipped, skewed or notched shapes were measured.

## Components

### Buttons

**Primary (landing pill)** — "Upload your own", "Explore trending playlists", "Find out more"
- Background `#ffffff`, text `#121212`
- Söhne 17px / 600, line-height 24px, letter-spacing 0.2px
- Padding 13px 23px, height 46px, radius 9999px
- Hover: label and border fade to `#12121266`; background unchanged

**Secondary (light pill)** — hero "Upload", "Get started"
- Background `#f3f3f3`, text `#121212`, 17px / 600
- Padding 0px 24px, height 32px, radius 9999px
- Hover: label fades to `#12121266`

**Hero pair** — "Sign in" (white pill, black `#000000` label) and "Create account" (black `#000000` pill, white label and
white border), both 36px tall, radius 9999px, 14px / 600, padding 0px 18px. Hover fades label and border to 40% alpha.

**Header light button** — "Create account", "Follow"
- Background `#ffffff`, text `#121212`, 14px / 600 / 20px
- Padding 6px 12px, height 32px, radius 4px

**App button** — "Station", "Share", like / repost counters, "More"
- Background `#303030`, text `#ffffff`, 14px / 600 / 20px
- Padding 6px 12px, height 32px, radius 4px
- Hover: label and border become `#ffffff66`

### Links
- `#699fff` on dark, 14px / 400; hover adds `text-decoration: underline`.
- Footer links: `#999999`, 12px, separated by middle dots.

### Navigation
- Header 46px tall on `#121212`: wordmark, Home / Feed / Library, a 440px search input, then Sign in, Create account, Upload, overflow.
- Nav links: `#999999`, 14px / 600, padding 13px 8px.

### Inputs
- Search: background `#303030`, white 14px text, padding 8px 40px 8px 16px (room for the magnifier icon), height 36px,
  radius 3px, width 440px in the header. Placeholder "Search for artists, bands, tracks, podcasts".
- Light-theme tokens exist for forms (`--input-default-background-color: #f3f3f3`, `--input-focused-border-color: #666`,
  `--input-invalid-border-color: #d61348`) but no light form was measured.

### Tags
- Genre tags ("# Lofi House"): 24px tall, radius 100px, background `#303030`, white text; hover text `#ffffff66`.

### Cards / Artwork tiles
- 190×190px cover art, radius 12px, inset hairline `rgba(18, 18, 18, 0.1) 0px 0px 0px 1px inset`.
- Title in white 14px / 600 below, artist in `#999999`.

### Player
- A fixed 48px bottom bar with previous / play / next, shuffle, repeat and volume controls; the play button is a circle.

### Footer
- Centered row of social icons (X, Discord, TikTok, YouTube, Facebook, Instagram), then a dot-separated link row
  (Directory · About us · Artist Resources · …) in `#999999` 12px, and "Language: English (US)".

## Design System Architecture

SoundCloud publishes **no public design system** documentation, token package or component library. Searches recorded in
`SOURCES.json` (brand guidelines, design-system/engineering blog, GitHub tokens, typeface) found only the official
[Media Kit](https://soundcloud.com/company/media-kit), which covers logo usage and a brand palette. Everything below is
the de-facto system measurable on soundcloud.com.

### Token architecture (observed in `:root` custom properties)
Three observable tiers:
1. **Primitives** — `--black-color: #121212`, `--white-color: #fff`, `--special-color: #f50`, `--secondary-color: #666`,
   `--spacing-1x: 8px` … `--spacing-8x: 64px`, `--borderRadiuses-4: 4px` … `--borderRadiuses-100: 100px`,
   `--artwork-1x-size: 8px` … `--artwork-64x-size: 512px`.
2. **Semantic** — `--font-primary-color`, `--font-secondary-color`, `--font-link-color`, `--background-dark-color`,
   `--background-highlight-color`, `--error-color`, `--success-color`, `--overlay-color: rgba(18,18,18,0.4)`.
3. **Component** — named `--{component}-{variant}-{state}-{property}`: `--button-primary-background-color`,
   `--button-secondary-selected-font-color`, `--button-tertiary-hover-font-color`, `--input-focused-border-color`,
   `--tag-selected-background-color`, `--toggle-on-body-color`, `--link-standard-focus-box-shadow`.
Typography tokens bundle a full `font` shorthand: `--typography-heading1-font: 600 2rem/2.5714rem "Söhne", …`.

### Theming
The component tokens describe a light theme (`--button-primary-background-color: #121212` with white text,
`--input-default-background-color: #f3f3f3`), while the rendered pages are dark: the measured buttons invert to white
fills on `#121212`. How the dark mode is switched (class or attribute) was not determined, so it is not described here.

### Type & spacing systems
- Type: rem scale on a 14px root; named roles display1–3, heading1–6, body, body1, body2, captions, micro.
- Spacing: 8px base unit with fractional steps (0_25x … 8x).
- Breakpoints in tokens: `--breakpoints-xs: 480`, `--breakpoints-sm: 768`.

### Component model (observed)
Buttons have primary / secondary / tertiary / special / light / dark variants, each with hover, active, disabled,
loading and selected states in the tokens. Other tokenized components: input, link (primary / secondary / standard),
tag, toggle, checkbox, overlay.

### Accessibility
Focus is a 2px `#044dd2` ring (inset on buttons and tags). Disabled toggles/tags use `opacity: 60%`. No published
contrast or target-size policy was found.

### Delivery
No npm package, Figma kit or versioning is public.

## Do's and Don'ts

### Do
- Keep the canvas `#121212` edge to edge; let artwork and photography supply color.
- Use white `#ffffff` pills with `#121212` labels for primary landing actions.
- Set landing headlines in Söhne 65px / 800, uppercase, -1.3px tracking, 55.25px line-height.
- Use 4px-radius, 32px-tall buttons inside the app.
- Fade labels to 40% alpha on hover; keep fills fixed.
- Reserve `#ff5500` for selected/checked/on states and brand moments.
- Give artwork tiles a 12px radius.

### Don't
- Don't paint primary CTAs orange — the live site does not.
- Don't add drop shadows to cards or buttons.
- Don't mix in a second typeface family.
- Don't use pure black `#000000` as the page background; the canvas is `#121212`.
- Don't loosen the landing headline line-height.
- Don't invent hover background colors.

## Responsive Behavior

### Breakpoints
Token breakpoints: 480px (`--breakpoints-xs`) and 768px (`--breakpoints-sm`).

### Measured at 390px
- The hero h2 stays 65px / 800 with the same 55.25px line-height and -1.3px tracking.
- Hero paragraph stays 19px / 600; the primary CTA keeps 17px / 600, padding 13px 23px, 46px height, pill radius.
- Nav text stays 14px / 600.

### Touch targets
Landing CTAs are 46px tall; app buttons 32px; search 36px.

### Collapsing strategy
Layout collapse at narrow widths was not measured beyond the 390px values above.

## Iteration Guide

1. Start with `#121212` canvas, `#ffffff` text, `#999999` secondary text.
2. Load Söhne 400/600/700/900 (or the system fallback stack).
3. Build the landing headline (65/800 uppercase) and the white pill CTA (46px, 13px 23px, 9999px).
4. Build app chrome: 46px header, 440px `#303030` search (3px radius), 48px bottom player.
5. Use `#303030` 4px buttons for secondary app actions and white 4px buttons for Follow / Create account.
6. Add artwork tiles (190px, 12px radius, inset hairline).
7. Apply hover as 40% label fade, focus as 2px `#044dd2` ring.
8. Use orange `#ff5500` only for checked/selected/on states.

### Quick Reference
```
canvas #121212 · ink #ffffff · secondary #999999 · surface #303030
primary/brand #ff5500 · link #699fff · focus #044dd2
font: Söhne (400/600/700/900)
hero: 65px/800/55.25px, -1.3px, uppercase
cta: white pill 9999px · 13px 23px · 46px · 17px/600
app button: 4px · 6px 12px · 32px · 14px/600
```
