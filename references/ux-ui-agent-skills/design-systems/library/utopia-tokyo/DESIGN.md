---
version: alpha
name: Utopia Tokyo
category: "Culture & Events"
description: "Utopia Tokyo (utopiatokyo.com), a masks-and-future-Tokyo web experience, uses a #14171f ink-navy canvas with #ff1919 signal red display type, #ebe5ce cream text, PPMori 600 headlines at 175.36px, Zpix pixel-font labels, ghosted #647d9633 buttons and strictly square 0px corners."
colors:
  canvas: "#14171f"
  ink: "#ebe5ce"
  primary: "#ff1919"
  on-primary: "#14171f"
  surface-3: "#111827"
  ink-grey: "#252525"
  ink-white: "#ffffff"
  button-primary-bg: "#647d9633"
  button-secondary-bg: "#ff7d7d33"
typography:
  display:
    fontFamily: PPMori, Arial, sans-serif
    fontSize: 175.36px
    fontWeight: 600
    lineHeight: 133.274px
    letterSpacing: "-3.5072px"
  display-mobile:
    fontFamily: PPMori, Arial, sans-serif
    fontSize: 52.65px
    fontWeight: 600
    lineHeight: 40.014px
    letterSpacing: "-1.053px"
  body:
    fontFamily: PPMori, Arial, sans-serif
    fontSize: 14.2222px
    fontWeight: 600
    lineHeight: 18.4889px
    letterSpacing: "-0.142222px"
  button:
    fontFamily: Zpix, Arial, sans-serif
    fontSize: 11.3778px
    fontWeight: 400
    lineHeight: 15.9289px
  nav:
    fontFamily: PPMori, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 19.6px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 2.4px
  s3: 3px
  s4: 3.56px
  s5: 4px
  s6: 5.69px
  s7: 6px
  s8: 7.11px
  s9: 8px
  s10: 8.53px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 56px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 56px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 10px 9.8px 10px 0px
  nav:
    textColor: "{colors.ink-grey}"
    rounded: "{rounded.none}"
    borderColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 10px 9.8px 10px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

Utopia Tokyo (`https://www.utopiatokyo.com/`, page title "Utopia Tokyo | Masked. Marked. Watched.") is a long, scroll-driven experience about masks of a reimagined Tokyo. The page starts with a loading grid of red `[LOADING]` tags on dark navy, then a big typographic block: "EXPLORE MASKS OF UTOPIA TOKYO WHERE PAST AND FUTURE COLLIDE" in red capital letters, one phrase per ruled row, with a 3D photoreal mask overlapping the text and a vertical column of outlined Japanese characters (理想郷東京) on the right. Small captions such as `DATA_INTELLECT`, `DATA_SPIRIT`, `DATA_AGILITY` and `DATA_STRENGTH` annotate the rows in the pixel font.

Further down the capture shows a scattered gallery of mask portraits inside corner-bracket frames, a ticker line ("HIDDEN HISTORIES CONVERGE WITH A REIMAGINED FUTURE, AND ANCIENT MASKS BECOME SYMBOLS OF UNTOLD POSSIBILITIES"), a giant red "東京", a dark interactive section headed "YOUR MASK" in cream, and a red footer panel with a row of masks and the wordmark "UTOPIATOKYO" in giant letters, half solid and half outlined. The footer carries the coordinates "35.6764 N,139.6500 E JAPAN".

The language is a mix of terminal and anime-cyberpunk: commands such as `>_EXECUTE_CREATION` and `>_DISCOVER_YOUR_INNER_MASK` act as button labels, everything is square and ruled, and the only colors are red, cream and a deep navy. An experience warning dialog appeared in the first capture; it and its scrim are not brand UI and were removed by re-measuring (a second extraction run with the batch command).

## Colors

The canvas is the near-black navy `#14171f` (the body background and, with 60% screen share, the dominant pixel color; the stylesheet names it `--_color---brand--black`). The brand red `#ff1919` (named `--_color---brand--red`) is the largest measured area fill (2,147 weight; the footer panel) and the color of 581 characters of display text, borders (7) and links. Cream `#ebe5ce` (1,044 characters; named through `--_color---brand--cream`) is the main text color on navy.

Supporting values: `#111827` (13 area weight), `#252525` (21 characters of nav text), white `#ffffff` (9), and translucent overlays: `#647d9633` (the fill of the primary button, a blue-grey at 20%), `#ff7d7d33` (the secondary button, a red tint at 20%), `#ffffff33` (borders and fills) and `#ebe5ce` as the 1px border color on 73 elements. Text on red is `#14171f` (footer, 687 characters of dark text).

The root variables define opacity steps used with the brand colors (`--_color---opacity--alpha-subtle: 10%`, `--alpha-strong: 30%`, plus muted and faint steps), a neutral `#787878` and a deleted-variable blue `#0073e6`; only the red, navy and cream were measured on rendered elements, and the blue was not.

## Typography

Four families by character count: **Zpix** (1,126, a pixel bitmap-style face for labels, captions, loading tags and buttons), **PPMori** (1,077; loaded at 400 and 600; headlines, body and navigation), **PP Neue Montreal** (88) and **Neopixel** (66). The primary-font variable is `PPMori,Arial,sans-serif`.

- Display: PPMori 600, 175.36px / 133.274px, letter-spacing -3.5072px (the "UTOPIATOKYO" and "UTOPIA" headings); 142.222px with -2.84444px tracking also appears (119 characters); 52.65px / 40.014px with -1.053px on the mobile pass (h1), 70.2px for the h2.
- Body: PPMori 600, 14.2222px / 18.4889px, -0.142222px (1,059 characters).
- Navigation: PPMori 600, 14px / 19.6px.
- Button: Zpix 400, 11.3778px / 15.9289px.
- Footer and captions: Zpix 12.4444px uppercase (419 characters), 8px with 0.8px tracking and 10.5px with 1.05px.
- Other sizes: 21.3333px (-0.426667px), 42.6667px, 72px, 64px, 30.72px, 32px.

Weights: 600 (1,442 characters), 400 (809), 700 (70), 500 (32). Body copy is semi-bold with slightly negative tracking, and the pixel font gives the small text its machine feel.

## Layout

The measured page is 8,252px tall on a 1280px viewport. The first band spans x=20 to x=1261, so the hero runs almost edge to edge with 20px margins; the layout record gives one visible header link and up to 5 card columns. The headline rows are separated by 1px lines, and the Japanese vertical column is a separate box on the right.

Spacing is small and exact: gaps of 4px (16 occurrences), 8.53333px (12), 14.2222px (8), 71.1111px (4) and 3.55556px (4); paddings of 12px (19), 8px (18), 4px (16), 3px (15), 10px (13) and 21.3333px, 14.2222px (10 each). The smaller values are multiples of the 3.55556px unit that also produces 7.11px, 14.22px, 21.33px and 71.11px, which is a 1/4 of 14.2222px body size.

## Elevation & Depth

Flat, with one exception: a single white glow `rgba(255, 255, 255, 0.6) 0px 0px 10px 0px` on one element. Everything else is separated by 1px borders (`#ebe5ce` on 73 elements, `#14171f` on 34, `#ffffff33` on 14) or by color blocks. The mask renders supply the only photographic depth, and corner brackets frame gallery tiles. Focus state recorded: a 2px solid outline `rgb(193, 198, 201)` appears on keyboard focus where the default was 3px none.

## Shapes

No border radius was measured on any element (`borderRadii` is empty), so every rendered element has a computed radius of 0px. Buttons, navigation, frames and panels are rectangles; the frame brackets and ruled rows replace rounding. The nav box has a 1px solid `#ff1919` border and is 272px by 37px.

## Components

- **Primary button** (`>_EXECUTE_CREATION`): `#647d9633` fill, `#14171f` text, Zpix 11.3778px, 56px tall, 177px wide, 0px radius.
- **Secondary button** (`>_DISCOVER_YOUR_INNER_MASK`): `#ff7d7d33` fill, `#ff1919` text, 56px tall, 232px wide.
- **Navigation**: a 272px box with a 1px red border; links in `#ff1919` PPMori 600 14px, 36px tall, padding `10px 9.8px 10px 0px`.
- **Loading tags**: `[LOADING]` in red Zpix on the navy loading grid.
- **Headline rows**: red PPMori caps with 1px red rules between rows.
- **Footer**: `#ff1919` panel with `#14171f` text in Zpix 12.4444px uppercase, coordinates, mask row and giant wordmark.

## Design System Architecture

No public or official Utopia Tokyo design system was found, and none was searched for. The stylesheet exports a structured set of Webflow-style variables on `:root`: colors (`--_color---brand--red: #ff1919`, `--_color---brand--black: #14171f`, `--_color---light--light` pointing at the cream brand color), tints derived with relative color syntax (`--_color---red--red-faint`, `--_color---red--red-muted`, `--_color---red--red-subtle`, `--_color---dark--dark-subtle`), opacity steps, typography (`--_typography---fonts--primary-font`), responsive sizes in em (`--_responsive---font-size--h3: 4.5em`, `--h4: 3em`, `--h6: 1.25em`, `--p-l: 1.5em`, `--eyebrow: .875em`) and component variables for buttons, cards and input labels. Source: `https://www.utopiatokyo.com/`, measured into `web/data/extracted/utopia-tokyo.json`.

## Do's and Don'ts

Do:
- Keep three colors: navy `#14171f`, red `#ff1919` and cream `#ebe5ce`.
- Set headlines huge in PPMori 600 with negative tracking and labels small in Zpix.
- Use command-style labels such as `>_EXECUTE_CREATION` on ghosted rectangular buttons.
- Keep all corners at 0px and divide with 1px rules.

Don't:
- Don't round any corner; none were measured.
- Don't add shadows other than the single faint white glow.
- Don't document the experience-warning dialog or its scrim as brand UI.
- Don't use the unmeasured `#0073e6` blue.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 measures 52.65px (from 175.36px), the h2 70.2px, body 16.64px (from 14.2222px), the primary button text 13.312px, the nav text 14px in `#252525`, and the pass records 1 visible header link, no menu toggle and up to 5 card columns. The mobile font table lists 108.16px and 156px for a few characters. Other mobile behavior was not measured.

## Iteration Guide

1. Navy `#14171f` canvas with cream `#ebe5ce` text.
2. Giant red PPMori 600 headline lines with 1px red rules.
3. Zpix labels and `>_COMMAND` buttons on 20% tinted rectangles.
4. A red footer panel with navy text.
5. Corners at 0px everywhere.
6. Re-run `node web/scripts/verify-designs.mjs --slug=utopia-tokyo` after any rename.
