---
version: alpha
name: Pinterest
category: "Media & Consumer Tech"
description: 'Pinterest.com landing page as measured: a white canvas with near-black (#000000) text, the single saturated brand red #e60023 on its "Join Pinterest for free" and "Log in" buttons (16px radius, 48px tall, #cc001f on hover), warm sand neutrals (#e5e5e0) for secondary fills, and the proprietary Pin Sans family at weights 400 to 900, with a 48px/900 hero headline. Photographs carry all the color; the chrome stays neutral.'

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#e60023"
  on-primary: "#ffffff"
  surface-sand: "#e5e5e0"
  ink-muted: "#62625b"
  ink-inverse: "#ffffff"
  ink-plum: "#211922"
  primary-hover: "#cc001f"
typography:
  display:
    fontFamily: >-
      "Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue",
      Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif
    fontSize: 48px
    fontWeight: 900
    lineHeight: 52.8px
    letterSpacing: "-0.5px"
  heading:
    fontFamily: >-
      "Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue",
      Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
  body:
    fontFamily: >-
      "Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue",
      Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: >-
      "Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue",
      Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  nav:
    fontFamily: >-
      "Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue",
      Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
  input:
    fontFamily: >-
      "Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue",
      Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 11px
  s5: 12px
  s6: 14px
  s7: 15.8px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 14px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-login:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 14px
    height: 48px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.ink-plum}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 48px
  card:
    textColor: "{colors.ink-plum}"
    rounded: "{rounded.md}"
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-inverse}"
---

## Overview

This file describes the Pinterest logged-out landing page (`https://www.pinterest.com`) as captured and measured at a 1280px desktop viewport and a 390px mobile viewport. Every color, size and radius in the frontmatter was read from the live page; nothing is taken from memory. Where the capture and the measurement disagree, the prose says so.

The capture shows a white hero with a 48px black headline ("Conjure your best Halloween") on the left and a loose cluster of rounded photo tiles on the right. Below it, a full-width off-white band introduces a dense collage of photographs, then a row of "More bewitching ideas" cards, then another off-white band with a centered headline and a short paragraph. The only saturated interface color on screen is a single red (`{colors.primary}`, `#e60023`); the photographs supply the rest of the color.

**Key Characteristics**
- One red, `{colors.primary}`, on the hero button "Join Pinterest for free" and on the header "Log in" button. In the measured background tally it covers a very small area (weight 52) compared with white (4792) and sand (538).
- Warm neutrals rather than cool grays: the secondary fill `{colors.surface-sand}` (`#e5e5e0`) and the muted text `{colors.ink-muted}` (`#62625b`) are both warm-tinted, as is the off-white section band in the capture.
- A single typeface, Pin Sans, in four loaded weights (400, 500, 700, 800), with a 900 weight measured on the hero headline.
- Rounded shapes: buttons measure 16px, photo tiles in the capture have visibly large corners, and the measured radius tally contains 8px, 12px, 16px, 20px, 24px and 32px plus a few circles.
- Photography is the content. The hero and the collage are image-led; captions beneath cards are small, bold and plain.

## Colors

All hex values below are measured on the live page (`web/data/extracted/pinterest.json`) unless a source is named.

### Brand and action
- **Pinterest red** (`{colors.primary}`, `#e60023`): background of the extractor's primary CTA ("Join Pinterest for free") and of the "Log in" button. The Pinterest brand-guidelines page says the logo is red with black or white alternatives but publishes no hex value, so the hex rests on the measurement only.
- **Red hover** (`{colors.primary-hover}`, `#cc001f`): the measured background of the "Log in" button after hover, against `rgb(230, 0, 35)` before.

### Text
- **Ink** (`{colors.ink}`, `#000000`): the most-read text color by character count (1007 characters) and the color of the measured h1 and h2.
- **Ink plum** (`{colors.ink-plum}`, `#211922`): the computed color of the `body` element, the header and the link role; 176 characters carry it. It is a near-black with a slight purple cast.
- **Ink muted** (`{colors.ink-muted}`, `#62625b`): 547 characters. It matches the root variable `--base-color-grayscale-300`. In the capture it looks like the small meta line under card titles ("Home Decor ... 59 Pins ... 1mo"); that is an observation of the screenshot, not a measured binding.
- **Ink inverse** (`{colors.ink-inverse}`, `#ffffff`): 242 characters of page text measure white. The footer measures a `#000000` background.
- **On primary** (`{colors.on-primary}`, `#ffffff`): the measured label color on the red "Join Pinterest for free" and "Log in" buttons, matching the white labels in the capture.

### Surfaces
- **Canvas** (`{colors.canvas}`, `#ffffff`): the page background and the largest background by area (weight 4792 against 1053 for the next, a translucent dark value).
- **Surface sand** (`{colors.surface-sand}`, `#e5e5e0`): in the background tally and visible in the capture as the fill of "I already have an account", "Sign up" and "See more". The root variable `--sema-color-background-elevated-opaque-secondary` resolves to the same `#e5e5e0`.
- Other background values measured but not promoted to tokens: `#efefef`, `#f6f6f3` (very small area share), `#000000` (footer) and a few translucent overlays.

### What is not measured
There is no measured error, success or warning color on the landing page. The root variables include `--base-color-green-100` (`#c7f0da`), `--base-color-green-700` (`#103c25`), `--base-color-orange-700` (`#5c2500`), `--base-color-blue-300` (`#677eee`) and red steps such as `--base-color-hover-red-500` (`#9e0a0a`) and `--base-color-pressed-red-600` (`#600606`), but no component on the captured page was observed using them, so they are not tokens here.

## Typography

### Font family
The only family by character count is **Pin Sans** (1993 characters). The extractor lists these loaded faces: Pin Sans 400, 500, 700 and 800. The computed stack on the body is `"Pin Sans", -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen-Sans, "Apple Color Emoji", ... Helvetica, "ヒラギノ角ゴ Pro W3", メイリオ, Meiryo, "ＭＳ Ｐゴシック", Arial, sans-serif`, which includes Japanese fallbacks. The root variables expose separate `body`, `heading`, `ui` and `compact` font-family roles, all beginning with `"Pin Sans"`.

### Font substitutes
Pin Sans is proprietary, and no download was found in the sources opened. Use the system fallbacks already present in the stack (it ends in Helvetica and Arial). No claim is made about which open-source face is closest.

### Hierarchy

| Token | Size | Weight | Line height | Tracking | Where measured |
|---|---|---|---|---|---|
| `{typography.display}` | 48px | 900 | 52.8px | -0.5px | hero headline |
| `{typography.heading}` | 16px | 700 | 22.4px | normal | h2 "Trending halloween costumes" |
| `{typography.body}` | 14px | 400 | normal | normal | extractor's body-text sample ("OR") |
| `{typography.button}` | 16px | 500 | 19.2px | normal | the red CTA buttons |
| `{typography.nav}` | 12px | 400 | normal | normal | nav-link role |
| `{typography.input}` | 16px | 400 | normal | normal | the search input |

Other sizes in the character tally: 12px (727 chars), 16px (705), 20px (333), 38px (75), 48px (52), 50px (33), 70px (25), 36px (21), 28px (20). The root variables also name display sizes 72px and 60px (`--sema-font-size-display-1000`, `--sema-font-size-display-900`). Weights in the tally: 400 (1261 chars), 700 (442), 500 (192), 900 (73), 600 (25).

Letter-spacing is measured as `-0.5px` at 48px, 36px and 28px; the root variable `--sema-font-letterspacing-heading-700` is `-0.5px` and body letter-spacing is `0`.

### Principles seen on the page
- Large headings are heavy (700 to 900) and tightly tracked; body and UI text is regular weight with no tracking.
- The measured h1 weight of 900 is not among the loaded faces (400/500/700/800); how the browser resolves it was not investigated.
- Headlines in the second and third sections ("Spooky season starts here", "Bring your favorite ideas to life") are centered; the hero headline is left-aligned.

## Layout

- **Container**: in the 960px-wide capture, content runs from roughly x=52 to x=908. This is read off the screenshot, not from a CSS value.
- **Hero**: two columns. Left: headline, then two buttons side by side. Right: an asymmetric cluster of photo tiles of different sizes that overlap and crop at the top.
- **Collage section**: a full-width grid of photographs in about five columns with unequal tile heights, narrow gaps and rounded corners.
- **Card row**: four cards in a row with arrow controls on the first and last, each with a three-image mosaic above a bold title and a meta line.
- **Spacing**: measured paddings are 6px, 14px, 8px, 4px, 16px, 32px, 100px, 15.8px, 11px, 24px, 12px, 48px and 150px; gaps are 4px, 8px and 16px. The frontmatter spacing group lists the ones the generator promoted.
- **Header**: 80px tall in the measurement; it holds the badge and wordmark, "Explore", a wide sand-filled search field, text links ("About", "Businesses", "Create", "News") and the two buttons.
- **Page length**: 5451px scroll height at 1280px width.

## Elevation & Depth

The page is almost flat. The only measured box-shadow in the whole tally is `rgba(0, 0, 0, 0.2) 0px 3px 12px 0px` (one element). The root variables name floating and raised shadow roles, including a floating y-offset of 3px and a raised spread of 0px. Depth in the capture comes from overlap (hero tiles overlapping each other) and from tonal bands (white against off-white).

| Level | Treatment | Evidence |
|---|---|---|
| 0 | flat white or off-white band | most surfaces |
| 1 | tile overlap | hero image cluster |
| 2 | `0 3px 12px rgba(0,0,0,0.2)` | the one measured shadow |

A translucent dark value (`#24242180`, area weight 1053) is also in the background tally; its role was not identified.

## Shapes

Measured border radii by frequency: 16px (56 elements), 8px (10), the asymmetric `16px 0 0 16px`, `0 16px 0 0` and `0 0 16px` (10 each), 12px (9), 32px (5), 999px (2), 20px (2), 50% (2), 24px (1).

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 8px | link role radius |
| `{rounded.sm}` | 12px | measured on 9 elements; equals `--sema-rounding-300` |
| `{rounded.md}` | 16px | buttons (measured on the CTA); the most common radius |
| `{rounded.lg}` | 20px | rare |
| `{rounded.xl}` | 24px | rare |
| `{rounded.2xl}` | 32px | 5 elements |
| `{rounded.pill}` | 9999px | the nav-link role |

The root variables also define `--sema-rounding-200: 8px` and `--sema-rounding-300: 12px`.

## Components

### Buttons
- **`button-primary`**: fill `{colors.primary}`, 48px tall, padding `6px 14px`, radius `{rounded.md}` (16px), 16px/500 type as measured. Hover fill `{colors.primary-hover}`. Label color `{colors.on-primary}` (white), 16px/500/19.2px type (`{typography.button}`).
- **`button-login`**: label `{colors.on-primary}`; the extractor's secondary candidate is the header "Log in", which measured the same red fill and geometry as the primary button. The sand buttons in the capture ("Sign up", "I already have an account", "See more") were not recorded as a separate role, so only their fill color (`{colors.surface-sand}`) is documented, not a measured component spec.
- The border measured on both buttons is `2px solid` with an unset color; the hover record shows a fully transparent white border color.

### Inputs
- **`text-input`**: the header search field is 48px tall with 16px text. In the capture it has a sand fill, a magnifier icon and the placeholder "Search for easy dinners, fashion, etc." The extractor recorded no fill or radius on the `input` element itself, so only height and type are tokenized.

### Cards
- **`card`**: radius `{rounded.md}`, text `{colors.ink-plum}`, border color `{colors.canvas}`. In the capture a card is a rounded image mosaic (one large image, two small) with a bold title and a two-line meta caption beneath; no card background, border or shadow is visible.

### Navigation
- **`nav-link`**: text `{colors.ink-plum}`, `{typography.nav}` 12px/400, pill radius. **`link`**: text `{colors.ink}`, `{typography.heading}`, radius `{rounded.xs}`. Header links in the capture are plain text.
- **`footer`**: background `{colors.ink}` (`#000000`), text `{colors.ink-inverse}` (`#ffffff`) as measured on the footer element. The footer text in the extraction begins "Get the app, iOS, Android, Quick links, Explore, Shop, Help Center".

## Design System Architecture

Pinterest has a public design system called **Gestalt**. What was opened and confirmed:

- The documentation home, https://gestalt.pinterest.systems/, describes Gestalt as "Pinterest's Design System" with Get Started, Foundations and Components areas. Its foundations and token pages require an internal sign-in, so token values could not be read from the docs.
- The GitHub repository https://github.com/pinterest/gestalt describes itself as "A set of React UI components that supports Pinterest's design language", is Apache-2.0 licensed, and lists the packages `gestalt`, `gestalt-charts` and `gestalt-datepicker`. Its README says the project is no longer actively maintained and has reached end of life.
- The folder https://github.com/pinterest/gestalt/tree/master/packages/gestalt-design-tokens contains `src`, `tokens`, `tests`, a README and a changelog, and is built with Style Dictionary for CSS, Android and iOS outputs.

Whether the logged-out landing page is rendered with Gestalt components was not verified. What the page itself ships is a three-tier CSS custom-property vocabulary: of the 400 root variables captured, 32 start with `--base-`, 92 with `--sema-` and 276 with `--comp-` (for example `--base-color-grayscale-300: #62625b`, `--sema-rounding-300: 12px`, `--comp-button-border-width-transparent-default: 0px`). That is a base, semantic, component layering by naming alone; this file does not claim it originates from the Gestalt tokens package.

The brand-use page https://business.pinterest.com/pinterest-brand-guidelines says to use the badge (a script white "P" in a red circle) and not the word mark, and gives no hex or typeface for partners.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the most important action in a view, as the hero does.
- Keep the surrounding chrome neutral: white, `{colors.surface-sand}` and warm grays.
- Set display text at weight 700 to 900 with `-0.5px` tracking, matching the measured h1.
- Round buttons at `{rounded.md}` and give images corners from the measured 8 to 32px scale.
- Let imagery carry color and variety.

**Don't**
- Do not add a second saturated hue to buttons; the measured palette has one.
- Do not add card shadows; none are visible in the capture and only one shadow is measured on the whole page.
- Do not alter the badge (per the brand-guidelines page: no filters, effects, outlines or drop shadows; keep the P in the circle).
- Do not use black labels on `{colors.primary}`; the measured label is `{colors.on-primary}`.

## Responsive Behavior

Two viewports were measured: 1280px and 390px. At 390px the extractor reported the same h1 (48px / 900), h2 (16px / 700), body text (14px / 400) and CTA (`#e60023`, 16px radius, 16px label, 192 by 48px) as on desktop, with a 390px-wide header 80px tall. The mobile measurement therefore recorded no reduced headline size. Layout reflow itself (column counts, menu changes) is not in this data and is not described here.

## Iteration Guide

1. Start from the measured tokens: canvas `{colors.canvas}`, ink `{colors.ink}`, button red `{colors.primary}`.
2. Build the hero: 48px/900 headline, then a red 48px-tall button and a sand button, both 16px radius.
3. Add the collage with unequal tile heights and large rounded corners.
4. Reserve red for one action per area; use sand for secondary actions.
5. When a value is needed that is not in the frontmatter, measure it on the live page first (`node web/scripts/extract-tokens.mjs --slug=pinterest--<page> --url=<url> --force`) before adding it.
