---
version: alpha
name: "Good Fella"
category: "Tech & AI"
description: "Good Fella, a digital studio: near-black #141314 hero over a light #eeeeee body, aktiv-grotesk headlines at 79.2816px with -2.77486px tracking, geistMono uppercase labels, orange #fd551d calls to action and strictly square 0px corners."
colors:
  canvas: "#eeeeee"
  page-body: "#141314"
  ink: "#696869"
  primary: "#fd551d"
  on-primary: "#141314"
  surface-card: "#f7f7f7"
  ink-soft: "#818081"
  accent-deep: "#fb460d"
  hairline: "#eeeeee1a"
  text-input-bg: "#333333"
typography:
  display:
    fontFamily: aktiv-grotesk, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 79.2816px
    fontWeight: 400
    lineHeight: 87.2098px
    letterSpacing: "-2.77486px"
  display-mobile:
    fontFamily: aktiv-grotesk, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32.7837px
    fontWeight: 400
    lineHeight: 36.062px
    letterSpacing: "-1.14743px"
  heading:
    fontFamily: aktiv-grotesk, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 56.6857px
    fontWeight: 500
    lineHeight: 63.7714px
    letterSpacing: "-2.83429px"
  subheading:
    fontFamily: aktiv-grotesk, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 30.9551px
    fontWeight: 500
    lineHeight: 38.6939px
    letterSpacing: "-0.773878px"
  body:
    fontFamily: aktiv-grotesk, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: geistMono, "geistMono Fallback", ui-monospace, "Fira Code", monospace
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20.02px
    textTransform: uppercase
  input:
    fontFamily: aktiv-grotesk, ui-sans-serif, system-ui, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20.02px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 16px 0px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 12px
    height: 40px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 48px 0px 0px
---

# Good Fella

## Overview

Good Fella calls itself "The digital landmark studio." Its home page is a studio portfolio that is dark at the top and light below: a near-black hero (`page-body`, #141314) with a cut-out Vermeer-style portrait on the right, a row of client logos, then a light-grey body (`canvas`, #eeeeee) holding a stats strip, a process section titled "How we work." and further case material. The extracted page height is 11067px at a 1280px viewport.

The identity is confident and spare. Large grotesque headlines with tight negative tracking carry the page; a monospaced uppercase face handles every label, button and caption; a single orange (#fd551d, with a deeper #fb460d) marks calls to action and small markers; and every corner is square. The extraction recorded no border radius, so all elements compute to 0px.

Copy is direct and short. The hero sub-line says the studio builds "the singular online expression of consumer, sports and entertainment brands." The process steps are written as plain commands: "Send us a brief.", "One conversation.", "Design and build." The stats strip uses oversized numerals ("$50B+", "10M+", "50+") with monospaced uppercase captions beneath. Buttons read "SEE THE WORK", "LET'S WORK TOGETHER" and "SUBSCRIBE", each followed by a square "+" box.

## Colors

- `page-body` #141314 is the hero and footer background, a warm near-black; it covers the largest measured background area.
- `canvas` #eeeeee is the light body background and the fill of the measured primary button.
- `ink` #696869 is the most-read text color (muted body copy); `ink-soft` #818081 is a lighter secondary grey used on dark surfaces. Large light-surface headlines use #141314 and dark-surface headlines use #eeeeee (these are the same two values as `page-body` and `canvas`).
- `primary` #fd551d is the orange used for filled call-to-action buttons and markers in the capture; it is a measured background color. `accent-deep` #fb460d is a second, slightly deeper orange measured as text color (for example the "// PROCESS" label). `on-primary` #141314 is the dark ink used for text on light controls.
- `surface-card` #f7f7f7 is the card fill in the stats strip. `hairline` #eeeeee1a is a 10%-alpha light border. `text-input-bg` #333333 is the fill of the dark newsletter input.

Orange is scarce: it should appear on one primary action per view and on tiny markers. Everything else is the dark/light pair and two greys.

## Typography

Two families: aktiv-grotesk (loaded at weights 300, 400 and 500) and geistMono (400 and 500).

- `display` is aktiv-grotesk 79.2816px, weight 400, line height 87.2098px, letter-spacing -2.77486px (the hero headline). `display-mobile` is 32.7837px with line height 36.062px and letter-spacing -1.14743px.
- `heading` is 56.6857px weight 500, line height 63.7714px, letter-spacing -2.83429px ("How we work.").
- `subheading` is 30.9551px weight 500, line height 38.6939px, letter-spacing -0.773878px (process step titles).
- `body` is aktiv-grotesk 16px weight 400, line height 24px.
- `button` is geistMono 14px weight 500, line height 20.02px, uppercase. The page root itself is set in geistMono uppercase at 15.4776px with letter-spacing about -0.39px, which is why captions and navigation labels read as monospaced caps.
- `input` is aktiv-grotesk 14px weight 400.

The root custom properties record the tracking system: `--text-display--letter-spacing` and `--text-h1--letter-spacing` are -.035em, `--text-h3--letter-spacing` is -.05em, and `--text-h4--letter-spacing` and `--text-h5--letter-spacing` are -.025em. Headlines are therefore always tightened; monospaced labels are slightly tightened.

Aktiv Grotesk is served by an Adobe Fonts style kit name and Geist Mono is an open font. If aktiv-grotesk is unavailable use a neutral grotesque; keep the tight tracking.

## Layout

The site uses a Tailwind-style utility build (the root carries `--tw-*` variables) with its own grid properties: `--site-grid-gutter` and `--site-grid-margin` are both 1rem, and `--hero-padding-top` is 256px. The stats strip is a four-up grid of equal tiles: one photo tile and three number tiles, each with the caption pinned to the bottom. The process section is a two-column composition: numbered steps (01, 02, 03) on the left with the active step in ink and the others dimmed, and a portrait photo on the right.

The spacing scale from the CSS is 2, 4, 6, 8, 12, 16, 20, 24, 32 and 48px (`s1`-`s10`). Common paddings are 32px and 128px for section blocks; common gaps are 16px and 8px. The navigation is a minimal bar: logo mark left, a centered "MENU" toggle, and an orange "LET'S WORK TOGETHER" button with a "+" box at the right. Nav padding is 16px 0px 0px.

## Elevation & Depth

No box shadows and no radius were measured. Depth comes from the dark-to-light section change, from the card tiles in `surface-card` against `canvas`, and from photography (the hero portrait overlaps the dark panel). The only border color is the 10%-alpha `hairline`, used on the text input. The root exposes easing curves rather than shadows: `--ease-out-quad` cubic-bezier(.5,1,.89,1), `--ease-in-quint` cubic-bezier(.64,0,.78,0) and `--ease-in-out-quart` cubic-bezier(.76,0,.24,1).

## Shapes

All shapes are rectangles: `rounded` is `none: 0px`. Buttons are rectangular with a separate square "+" cell attached to the right. Tiles are rectangles with no outline. The cut-out hero portrait is the single non-rectangular graphic.

## Components

- **button-primary** (measured on the "SUBSCRIBE" button): fill `canvas`, text `page-body`, geistMono 14px/500 uppercase, height 40px, radius 0px. The orange CTA buttons in the hero and header use the `primary` orange; their exact padding was not recorded.
- **link**: text in `page-body`, geistMono 14px/500 uppercase; the "Tell us more" link is a body-font underlined link.
- **nav / nav-link**: text in `canvas` over the dark hero, body type; padding 16px 0px 0px.
- **text-input**: fill `text-input-bg` (#333333), text `canvas`, aktiv-grotesk 14px, padding 8px 12px, height 40px, 1px `hairline` border, radius 0px.
- **footer**: fill `page-body`, text `canvas`, padding 48px 0px 0px.
- **Stat tile**: `surface-card` fill, display numerals, monospaced caption.

## Design System Architecture

No public design-system or brand-guidelines page exists on the site; the home page contains only the studio navigation, work, pricing, about and contact links, and the research fetch found none. The de-facto system is a Tailwind v4-style theme: named type-scale tokens (`--text-display`, `--text-h1`, `--text-h3`, `--text-h4`, `--text-h5`), font variables (`--font-mono`), a color variable `--color-foreground-muted` (#696869, the same as `ink`), grid variables and three named easing curves. The values in this document come from the live measurement of the home page, not from an official token file.

## Do's and Don'ts

Do:
- Alternate `page-body` and `canvas` sections and keep orange for one action per view.
- Set headlines in aktiv-grotesk with the negative tracking listed above and labels in geistMono uppercase.
- Keep every corner at 0px and attach a square "+" cell to primary buttons.
- Use big numerals with small monospaced captions for proof points.

Don't:
- Round buttons, tiles or inputs.
- Use orange for body text or large fills.
- Add shadows; none are measured.

## Responsive Behavior

Measured at the mobile viewport: the h1 becomes 32.7837px (line height 36.062px) and the h2 36.3429px with line height 40.8857px; the h2 letter-spacing becomes -1.81714px. Body copy keeps the muted `ink` grey. Mobile column counts and navigation behavior were not measured.

## Iteration Guide

1. Choose the surface: `page-body` for hero/footer, `canvas` for content.
2. Set headline and kicker: tight aktiv-grotesk headline plus a geistMono uppercase label.
3. Add exactly one orange action with a "+" cell.
4. Build proof tiles with `surface-card`.
5. Check that all radii are 0px and no shadow exists.
