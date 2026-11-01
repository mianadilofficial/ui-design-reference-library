---
version: alpha
name: Spotify
category: "Media & Consumer Tech"
description: "The Spotify web player home view is a dark, panelled app: #000000 frame, #121212 panels with 8px corners, white and #b3b3b3 text in SpotifyMixUI/SpotifyMixUITitle (24px bold section titles, 16px body), white pill buttons, and a Spotify Green (#1ed760) bright accent, with circular artist art and 6px-rounded album covers."
colors:
  canvas: "#121212"
  ink: "#ffffff"
  ink-subdued: "#b3b3b3"
  primary: "#ffffff"
  on-primary: "#000000"
  accent-green: "#1ed760"
  surface-black: "#000000"
  surface-elevated: "#1f1f1f"
  surface-grey: "#535353"
  hairline: "#292929"
  border-subdued: "#7c7c7c"
typography:
  display:
    fontFamily: >-
      SpotifyMixUITitle, CircularSp-Arab, CircularSp-Hebr, CircularSp-Cyrl, CircularSp-Grek, CircularSp-Deva, "Helvetica Neue", helvetica, arial, "Hiragino Sans", "Hiragino Kaku Gothic ProN", Meiryo,
      "MS Gothic", "Apple Color Emoji", "Segoe UI Emoji", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 700
  display-mobile:
    fontFamily: >-
      SpotifyMixUITitle, CircularSp-Arab, CircularSp-Hebr, CircularSp-Cyrl, CircularSp-Grek, CircularSp-Deva, "Helvetica Neue", helvetica, arial, "Hiragino Sans", "Hiragino Kaku Gothic ProN", Meiryo,
      "MS Gothic", "Apple Color Emoji", "Segoe UI Emoji", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 700
  body:
    fontFamily: >-
      SpotifyMixUI, CircularSp-Arab, CircularSp-Hebr, CircularSp-Cyrl, CircularSp-Grek, CircularSp-Deva, "Helvetica Neue", helvetica, arial, "Hiragino Sans", "Hiragino Kaku Gothic ProN", Meiryo, "MS
      Gothic", "Apple Color Emoji", "Segoe UI Emoji", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: >-
      SpotifyMixUI, CircularSp-Arab, CircularSp-Hebr, CircularSp-Cyrl, CircularSp-Grek, CircularSp-Deva, "Helvetica Neue", helvetica, arial, "Hiragino Sans", "Hiragino Kaku Gothic ProN", Meiryo, "MS
      Gothic", "Apple Color Emoji", "Segoe UI Emoji", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 700
  button:
    fontFamily: >-
      SpotifyMixUI, CircularSp-Arab, CircularSp-Hebr, CircularSp-Cyrl, CircularSp-Grek, CircularSp-Deva, "Helvetica Neue", helvetica, arial, "Hiragino Sans", "Hiragino Kaku Gothic ProN", Meiryo, "MS
      Gothic", "Apple Color Emoji", "Segoe UI Emoji", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 11px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    height: 48px
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    height: 32px
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 4px 16px 4px 36px
    height: 32px
    borderColor: "{colors.border-subdued}"
  nav:
    textColor: "{colors.ink-subdued}"
    padding: 16px 16px 8px
  text-input:
    backgroundColor: "{colors.surface-elevated}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 12px 96px 12px 48px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-subdued}"
    rounded: "{rounded.lg}"
  footer:
    textColor: "{colors.ink-subdued}"
---

## Overview

The captured page is open.spotify.com, the web player, not a marketing site, so it reads as an application. A black frame holds rounded panels in a near-black grey. At the left, a "Your Library" panel carries two prompt cards ("Create your first playlist", "Let's find some podcasts to follow") with white pill buttons, a small legal-links block and an "English" language pill. The main panel holds horizontally scrolling shelves: "Trending songs" (square album covers with title and artist below) and "Popular artists" (round photos labelled "Artist"). The top bar has the logo mark, a round home button, a wide pill search field ("What do you want to play?"), then Premium, Support, Download, Install App, Sign up and a white "Log in" pill. A gradient banner along the bottom ("Preview of Spotify. Sign up to get unlimited songs and podcasts with occasional ads. No credit card needed.") runs magenta to violet to blue and ends in a white "Sign up free" pill.

The page is image-led. Color comes from album and artist art; UI chrome stays neutral grey, white and black, and the one brand hue, `{colors.accent-green}`, is held back (it appears in the page's own CSS as the accent and as a painted fill in the measurements, but not in the first screen of the capture). The capture is in Thai-locale content (Thai song titles appear), showing the system carries mixed scripts.

**Key Characteristics:**
- Two-level dark surface: `{colors.surface-black}` frame, `{colors.canvas}` panels, `{colors.surface-elevated}` for inputs and raised tiles.
- Rounded panels (8px), 6px album covers, 50% circles for artists, pill buttons and pill search.
- Bold 24px titles and bold 14px controls; regular 16px body; one family stack.
- Text is white for primary, `{colors.ink-subdued}` for secondary (artist names, footer links).
- A single saturated brand accent, Spotify Green `#1ed760`, per the page's variables.
- A colorful gradient banner as the only gradient in UI chrome.

## Colors

Measured on the live page and cross-checked against its `--*` variables.

- **Canvas** `{colors.canvas}` #121212 (`--background-base`, the largest area at 2,070 weight) is the panel color; `{colors.surface-black}` #000000 (1,435) is the frame behind panels and the `--background-press` value.
- **Elevated surface** `{colors.surface-elevated}` #1f1f1f (`--background-elevated-base`) is the search-field and highlight fill; `--background-elevated-highlight` #2a2a2a and `--background-elevated-press` #191919 are the page's hover and pressed steps. `{colors.surface-grey}` #535353 is a mid-grey fill painted in 236 weight.
- **Ink**: `{colors.ink}` #ffffff (`--text-base`) for titles and controls; `{colors.ink-subdued}` #b3b3b3 (`--text-subdued`) is the most-read text color, used for secondary lines.
- **Primary** `{colors.primary}` #ffffff with `{colors.on-primary}` #000000: the capture shows the main buttons (Log in, Sign up free, Create playlist, Browse podcasts) as white pills with black labels. Computed-style measurement of these buttons gives a #ffffff fill, #000000 label and 9999px radius ("Sign up free", "Log in", "Browse podcasts", "Create playlist").
- **Accent green** `{colors.accent-green}` #1ed760 appears as `--essential-bright-accent`, `--text-bright-accent`, `--essential-positive` and `--text-positive` and as a 127-weight painted fill.
- **Hairline** `{colors.hairline}` #292929 (`--decorative-subdued`); **subdued border** `{colors.border-subdued}` #7c7c7c (`--essential-subdued`), the outline of the "English" pill.
- **Status colors in CSS**, not seen in the capture: `--essential-negative` #ed2c3f, `--text-negative` #f3727f, `--essential-warning` #ffa42b, `--essential-announcement` #1278f2, `--text-announcement` #539df5.

Official guidance opened (https://developer.spotify.com/documentation/design) says "Spotify Green is our resting color, used whenever Spotify's voice needs to be recognizable" and tells third parties to use black or white logos on light or dark backgrounds; it gives no hex value.

## Typography

The page loads **SpotifyMixUI** (400 and 700) for body and controls and **SpotifyMixUITitle** (700) for titles; the stacks continue with CircularSp script variants (Arabic, Hebrew, Cyrillic, Greek, Devanagari), then Helvetica Neue, Helvetica, Arial and CJK system fonts. A variable cut, SpotifyMixUITitleVariable, is also declared.

| Role | Size | Weight |
|---|---|---|
| Section title (h1 "Trending songs") | 24px | 700 |
| Section title, mobile (390px) | 20px | 700 |
| Body | 16px | 400 |
| Control / link | 14px | 700 |

Text sizes found on the page: 14px (1,287 weight), 16px (1,110), 24px (105), 12px (89). Declared steps: `--encore-text-size-smaller-3` .625rem, smaller-2 .75rem, smaller .875rem, base 1rem, large 1.25rem, larger 1.5rem, larger-2 2rem, larger-3 3rem, larger-4 4rem, larger-5 6rem. Line-height and tracking were not measured (the title letter-spacing is `normal`).

### Font substitutes
SpotifyMix and Circular are proprietary; the official third-party guidance (above) recommends the platform default sans-serif, then Helvetica Neue, Helvetica, Arial. Use Inter or the system UI font at 700 for titles and 400 for body.

## Layout

This is an app shell. `--encore-sidebar-base-width` is 200px, layout margins are `--encore-layout-margin-tighter` 24px, base 32px and looser 64px, and `--content-spacing` is 16px. The panels are separated by small black gutters. Shelves scroll horizontally with a chevron at the edge, and each shelf has a title at left and "Show all" at right.

Spacing steps from the Encore variables: tighter-5 2px, tighter-4 4px, tighter-3 6px, tighter-2 8px, tighter 12px, base 16px, looser 24px, looser-2 32px, looser-3 48px, looser-4 64px, looser-5 96px, looser-6 128px. Control heights are `--encore-control-size-smaller` 32px, base 48px and larger 56px; the header buttons and search are 48px, the language pill 32px.

## Elevation & Depth

Depth comes from stacked dark tones and one shadow. Measured: `rgba(0,0,0,0.5) 0 8px 24px 0` (54 occurrences, used on album and artist art), and an inset 1px ring (`rgb(124,124,124) 0 0 0 1px inset`) with an outer 1px `rgb(18,18,18)` line on outlined pills. Page variables add `--encore-overlay-box-shadow` `0 4px 12px 0 #0000004d` and `--encore-overlay-drop-shadow` `0 4px 6px #0000004d` for menus. Focus uses `--encore-focus-box-shadow` `0 3px 0 0` and a 2px focus border width. The gradient banner and the top-of-panel tint behind the "Trending songs" shelf add atmosphere.

## Shapes

Measured radii: 6px (147), 9999px (135), 50% (28), 8px (9), 2px (8), 4px (6), 16px (1). Encore variables: `--encore-corner-radius-smaller` 2px, base 4px, larger 6px, larger-2 8px, larger-3 16px, and `--encore-border-radius-rounded` 9999px. In use: album covers 6px, panels 8px, artist photos fully circular (50%), buttons, chips and search pill-shaped. Border widths: hairline 1px, thin 2px, thick 4px, thicker 8px.

## Components

**White pill button.** `button-primary`: white fill, black bold label, fully rounded. Measured: "Sign up free" and "Log in" are 48px tall with 16px/700 labels (`button-primary`); "Browse podcasts" and "Create playlist" are 32px tall with 14px/700 labels (`button-primary-small`). Padding measured 0px on the button element itself, so none is declared.

**Outlined pill.** `button-secondary`: transparent fill, white 14px/700 text, 1px `{colors.border-subdued}` border, 32px tall, padding 4px 16px 4px 36px (room for a globe icon). On the header's text-style buttons (Premium, Support) the measured hover moves text and border from #b3b3b3 to #ffffff.

**Search field.** `text-input`: `{colors.surface-elevated}` fill, pill shape, 48px tall, padding 12px 96px 12px 48px (icons left and right), placeholder "What do you want to play?".

**Cards (shelf items).** Cover art at 6px radius (artists at 50%) with a white or grey title and a `{colors.ink-subdued}` subtitle below; the art carries the 8px/24px shadow.

**Panels.** `card`: `{colors.canvas}` fill, 8px radius, `{colors.surface-black}` gutters.

**Library prompt cards.** Slightly lighter inset blocks with a bold white heading, a subdued line and a small white pill.

## Design System Architecture

Spotify's public developer guidelines (https://developer.spotify.com/documentation/design) cover logo and attribution rules for third parties, not the internal component system. The newsroom's brand-asset page (https://newsroom.spotify.com/media-kit/logo-and-brand-assets/) offers logo files in green, black and white, with no hex or type specification on the page itself. The Spotify Design site (spotify.design) redirected to open.spotify.com, and the web-api GitHub repo is an archived issue tracker with no design-system docs. No public documentation of the internal system was found.

The shipped CSS shows the system is called **Encore** by its own variable names: `--encore-spacing-*`, `--encore-text-size-*`, `--encore-corner-radius-*`, `--encore-border-width-*`, `--encore-control-size-*`, `--encore-layout-margin-*`, `--encore-sidebar-base-width`, `--encore-productive-decelerate` cubic-bezier(0, 0, .2, 1) and font stacks `--encore-title-font-stack`, `--encore-variable-font-stack`. A semantic layer sits on top: `--background-base/highlight/press/elevated-*/tinted-*`, `--text-base/subdued/bright-accent/positive/negative/warning/announcement`, `--essential-*` and `--decorative-*`. Tinted backgrounds are white alphas: `--background-tinted-base` #ffffff1a, highlight #ffffff24, press #ffffff36.

## Do's and Don'ts

**Do**
- Put content on `{colors.canvas}` panels inside a `{colors.surface-black}` frame.
- Use white pill buttons with black labels for primary actions and outlined pills for secondary.
- Let artwork supply color; keep chrome grey, white and black.
- Use circles for people and 6px corners for covers.
- Reserve `{colors.accent-green}` for brand and positive moments.

**Don't**
- Don't use the green as a general button fill in this view; the visible primary buttons are white.
- Don't add borders to cards; use tone and the soft shadow.
- Don't set titles in regular weight; section titles are 700.
- Don't use pure white for secondary text; use `{colors.ink-subdued}`.
- Don't square off buttons or the search field.

## Responsive Behavior

At 390px wide the h1 measures 20px (down from 24px). The shell declares `--encore-sidebar-base-width` 200px and layout margins of 24, 32 and 64px, and the library panel and shelves are the parts that rearrange for narrower widths; specific breakpoints were not extracted, so none are asserted. Shelves scroll horizontally at any width, so cards keep their size rather than reflowing.

## Iteration Guide

1. Start with a `{colors.surface-black}` frame and `{colors.canvas}` panels with 8px corners.
2. Add a bold 24px section title and a shelf of 6px-radius covers with `{colors.ink-subdued}` captions.
3. Add a 48px pill search field in `{colors.surface-elevated}`.
4. Make the primary action a white pill; outline anything secondary in `{colors.border-subdued}`.
5. Use `{colors.accent-green}` only where the brand must be recognizable.
6. Run `node web/scripts/verify-designs.mjs --slug=spotify`.
