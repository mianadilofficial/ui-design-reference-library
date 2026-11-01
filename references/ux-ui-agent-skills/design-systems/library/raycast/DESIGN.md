---
version: alpha
name: Raycast
category: "Developer Tools & IDEs"
description: Raycast's marketing site is a near-black (#07080a) stage for one idea, a hero of diagonal brand-red (#ff6363) stripes behind a 64px Inter 600 headline, with a light-grey (#e6e6e6) 8px-radius download button as the only solid action, Inter throughout with GeistMono kickers, and translucent black cards edged with 1px white-alpha hairlines.

colors:
  canvas: "#07080a"
  ink: "#ffffff"
  primary: "#e6e6e6"
  on-primary: "#2f3031"
  brand-red: "#ff6363"
  accent-blue: "#57c1ff"
  accent-green: "#59d499"
  accent-yellow: "#ffc533"
  surface-key: "#434345"
  surface-raised: "#111214"
  ink-muted: "#9c9c9d"
  ink-faint: "#6a6b6c"
  ink-alpha-40: "#ffffff66"
  ink-alpha-60: "#ffffff99"
  hairline: "#ffffff1a"
  card-bg: "#00000099"
  card-border: "#8e8c9033"
typography:
  display:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 64px
    fontWeight: 600
    lineHeight: 70.4px
  display-mobile:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 39.6px
  heading:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 20px
    fontWeight: 500
    letterSpacing: 0.2px
  subheading:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 24px
    fontWeight: 500
    letterSpacing: 0.2px
  body:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 18px
    fontWeight: 400
    letterSpacing: 0.2px
  button:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
    letterSpacing: 0.2px
  input:
    fontFamily: Inter, "Inter Fallback", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 11px
  3xl: 12px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.5px
  s4: 3px
  s5: 4px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14.5px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 8px 12px
    height: 36px
    boxShadow: rgba(0, 0, 0, 0.5) 0px 0px 0px 2px, rgba(255, 255, 255, 0.19) 0px 0px 14px 0px, rgba(0, 0, 0, 0.2) 0px -1px 0.4px 0px inset, rgb(255, 255, 255) 0px 1px 0.4px 0px inset
  link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 4px
    height: 36px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.card-border}"
    boxShadow: rgba(0, 0, 0, 0.4) 0px 4px 40px 8px, rgba(0, 0, 0, 0.8) 0px 0px 0px 0.5px, rgba(255, 255, 255, 0.3) 0px 0.5px 0px 0px inset
---

## Overview

Raycast sells a Mac launcher, and the page is built like the product: dark, fast, and keyboard-flavoured. The full-page capture opens on a floating rounded top bar (logo, Store, Pro, AI, iOS, Windows, Teams, Enterprise, Blog, Pricing, Log in, and a pale "Download" button) over a black field. Behind the hero headline "Your shortcut to everything." run broad diagonal bands of saturated red, blurred and grained at their edges, fading into blue-black. A sentence of supporting copy follows ("A collection of powerful productivity tools all within an extendable launcher. Fast, ergonomic and reliable."), then the lone solid button "Download for Mac", small grey monospace notes ("macOS Tahoe and Apple Silicon required", "Install via Homebrew | Download V1") and a pill-shaped link to "The Raycast Keyboard".

Below the hero the page turns into a product tour. A statement line, "Take shortcuts, not detours." with a dimmer second line "One interface, everything you need.", introduces a large framed screenshot of macOS with a Raycast Clipboard History window open: a filter field, a list of copied items (a colour swatch `#FF6363`, other colour hex values, links, a file), a detail pane and a footer with keyboard-hint chips. Under it, a row of dark icon keys is labelled "Clipboard History", and the caption "Remember Everything. Stop playing Clipboard ping pong - with Clipboard History you'll never forget anything." The voice is short, imperative and a little playful.

The mood is controlled darkness with a single hot colour. Nearly all of the pixel area is `{colors.canvas}`; the red exists as art, not as interface chrome.

## Colors

All values below were measured on the live page, either from computed styles or from the CSS variables the site defines in its root (`--grey-900`, `--color-red` and so on).

- **Canvas.** `{colors.canvas}` (`--grey-900`) is the page. Raised panels step to `{colors.surface-raised}` (`--grey-700`), and `{colors.surface-key}` (`--grey-400`) is a lighter grey used for key-cap style surfaces.
- **Ink.** Headlines and primary text are `{colors.ink}` (white). Secondary text steps down through `{colors.ink-muted}` (`--grey-200`) and `{colors.ink-faint}` (`--grey-300`), plus white at 60% (`{colors.ink-alpha-60}`) and 40% (`{colors.ink-alpha-40}`) opacity.
- **Primary.** The measured download button is light grey `{colors.primary}` (the site's `--grey-50`) with dark `{colors.on-primary}` text. This is the only filled action on the page.
- **Brand red.** `{colors.brand-red}` (`--color-red`, also `--red-dark`) is the brand colour. Raycast's own press page (https://www.raycast.com/press) lists "Brand Red" as `#FF6363`, which matches the measurement. In the capture it appears in the hero stripes, the clipboard swatch and the logo, not on buttons, which is why it is not the `primary` token.
- **Accents.** `{colors.accent-blue}`, `{colors.accent-green}` and `{colors.accent-yellow}` are the site's `--color-blue`, `--color-green` and `--color-yellow`, each with a 15%-alpha "transparent" companion in the CSS for badges and highlights. The mock clipboard list shows swatches in these hues.
- **Edges.** `{colors.hairline}` is white at 10%; `{colors.card-border}` is a faint violet-grey for card outlines; `{colors.card-bg}` is black at 60% opacity.

## Typography

Inter is the only UI family (declared `--main-font: var(--font-inter), sans-serif`), with the measured fallback metrics stack `Inter, "Inter Fallback", sans-serif`. Inter is an open-source typeface, so no substitute is needed. A monospace family, GeistMono, sets the small grey notes beneath the hero button, and jetBrainsMono is declared in the root variables. SF Pro and SF Pro Text also appear among the measured families, inside the mock macOS window.

The scale: `{typography.display}` is 64px, weight 600, line-height 70.4px for the hero; `{typography.display-mobile}` is 36px/39.6px at 390px width. `{typography.subheading}` (24px, 500) and `{typography.heading}` (20px, 500) carry section statements, `{typography.body}` (18px, 400) the paragraphs, and `{typography.button}` (14px, 500, 16px line-height) all buttons. A small positive tracking of 0.2px is applied to everything below the display size, which opens up Inter on dark backgrounds. Headline weight is 600 and nothing else on the measured page is heavier in the role tokens.

## Layout

The layout is a centred single column with a floating nav. The root variables define a navbar height of 58px, container widths of 746px and 1064px, a grid gap of 32px, and a spacing ladder named `--spacing-1` to `--spacing-13` that runs 8px, 12px, 16px, 32px, 48px, 64px, 80px, 168px and 224px. The large steps are visible in the capture as the empty black bands above and below the hero. Content alternates between full-bleed art, a narrow text column and one wide framed product screenshot, and long vertical rhythm makes each statement read alone.

## Elevation & Depth

Depth is built from light on dark. The download button has a four-part shadow: a 2px black outer ring, a 14px soft white glow at 19% opacity, a 1px dark inset along the bottom and a 1px bright inset along the top, which gives it a lit, physical-key bevel. Cards combine a deep drop (`0 4px 40px 8px` at 40% black), a 0.5px black outline and a 0.5px inset highlight of white at 30%. Panels are otherwise flat, separated by `{colors.hairline}` rules rather than by shadow.

## Shapes

Corners are medium and consistent: the site's own variables define `--rounding-xs` 4px, `--rounding-normal` 8px, `--rounding-lg` 16px and `--rounding-xl` 20px, and the extraction also sees 5, 6, 10, 11, 12px and pill values. Buttons use `{rounded.lg}` (8px), cards `{rounded.3xl}` (12px), the framed screenshot a larger radius, and the "Raycast Keyboard" link and keyboard-hint chips are pill or near-pill. Icons in the key row are rounded squares.

## Components

- **Primary button.** `{components.button-primary}`: pale grey, 14px/500 dark label, 36px tall, `8px 12px` padding, 8px radius, with the bevel shadow and a leading Apple logo.
- **Nav.** A floating translucent bar with a hairline border, grey 14px links, a "Log in" text link and a small download button.
- **Card.** `{components.card}`: black at 60% opacity with a faint border and a deep shadow.
- **Input.** `{components.text-input}`: 36px tall, 14px Inter, as in the screenshot's filter field.
- **Link.** `{components.link}`: grey 14px/500.
- **Product window.** The screenshot's list rows, detail panel, "Information" table and footer key chips (Copy to Clipboard, Actions) demonstrate the product's own UI inside the page.

## Design System Architecture

No public design-system documentation for raycast.com was found. Raycast does publish a brand page (https://www.raycast.com/press) with logo and colour rules, and the Raycast developer docs describe colour constants for extensions (https://developers.raycast.com/api-reference/user-interface/colors), but that page gives named colours (Red, Orange, Yellow, Green, Blue, Purple, Magenta, PrimaryText, SecondaryText) without hex values, so it adds nothing to the tokens here. The de-facto system on the site is a set of CSS custom properties: greys `--grey-50` to `--grey-900`, foreground and background ramps (`--color-fg-200..400`, `--color-bg-100..400`), semantic colours with transparent variants, `--rounding-*`, `--spacing-*` and layout widths, which this file reflects.

## Do's and Don'ts

Do keep the canvas near-black and let the red live in art, not in buttons. Do use one pale solid button per view with the lit bevel shadow. Do set headlines in Inter 600 and everything else in 400-500, with 0.2px tracking. Do use white alpha ramps for secondary text and borders.

Don't introduce light surfaces. Don't add coloured filled buttons; accents are for swatches and badges. Don't use hard black borders on cards; use the faint outline plus shadow. Don't switch to a display face for headlines. Don't alter the logo colours, as the brand page instructs.

## Responsive Behavior

At 390px the hero headline measures 36px with a 39.6px line-height, compared with 64px and 70.4px on desktop, with weight 600 unchanged. The floating nav, the screenshot frame and the rest of the mobile layout were not examined in this pass beyond that extraction, so those behaviours are not specified here.

## Iteration Guide

Begin with the canvas and the red, then add white-alpha text steps. Reuse the button's bevel shadow for any new solid control, and the card recipe for any new panel. When adding an accent, take it from the blue, green or yellow variables and use its 15% alpha version as the background. Re-measure the page with the extractor before introducing any new radius or colour.
