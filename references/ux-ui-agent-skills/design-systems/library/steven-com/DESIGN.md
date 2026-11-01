---
version: alpha
name: Steven.com
category: "Tech & AI"
description: "Dark single-screen site for Steven.com, the creator-economy company: #121212 canvas, white #ffffff type and #a0a0a0 secondary text, Field Gothic Trimmed uppercase 48px headline with Host Grotesk 13.2px labels, 16px and pill radii, centered rotating ecosystem dial."
colors:
  canvas: "#121212"
  ink: "#ffffff"
  primary: "#ffffff"
  ink-muted: "#a0a0a0"
typography:
  display:
    fontFamily: "\"Field Gothic Trimmed\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-0.48px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Field Gothic Trimmed\", sans-serif"
    fontSize: 31.3125px
    fontWeight: 400
    lineHeight: 31.3125px
    letterSpacing: "-0.313125px"
    textTransform: uppercase
  nav:
    fontFamily: "\"Host Grotesk\", Arial, sans-serif"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Host Grotesk\", Arial, sans-serif"
    fontSize: 13.2px
    fontWeight: 600
    lineHeight: 13.2px
    letterSpacing: 0.132px
rounded:
  xs: 16px
  pill: 9999px
spacing:
  s1: 3.2px
  s2: 9.2px
  s3: 18.4px
  s4: 46px
  s5: 54px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

Steven.com presents itself as "The Operating System for the Creator Economy." The page title is "Operating System for the Creator Economy | Steven.com". The home page is a single 1280 by 800 screen (measured scrollHeight 800): a near-black canvas, a large rotating ring graphic in the middle labelled Creator Media, Creator Communities, Creator Products and, on the outer ring, Creator Technology, a small circular portrait at its center, an uppercase headline at bottom left, and a pill toggle at bottom right.

The copy on the page, read from the opened page, describes an "end-to-end Operating System" for creators built around a flywheel of three pillars (Creator Media, Creator Community, Creator Products) over a technology layer, and closes with the mission line "Our mission is to accelerate the journey back to human." The site credit reads "Site by OFF+BRAND." and the copyright is "© 2026 Steven.com".

The header carries a wordmark at left, an office selector (L.A, LDN, NYC) with a live clock at center, and MENU at right. The tone is confident and spare: few words, all-caps headline, no photography apart from the portrait inside the ring.

## Colors

The palette is monochrome on dark. The root variables define `--color--bg` as the dark color and `--color--text` as the light color, and derive a mid grey with `color-mix` (`--color--grey-80`, 80% bg and 20% text). Measured values:

- **Canvas #121212**: the page background.
- **Ink #ffffff**: the most-read text color (101 characters weighted), used for the headline, wordmark, menu and links.
- **Primary #ffffff**: no colored CTA was detected; white is the action color, and the About Us arrow control is outlined in white (border color #ffffff measured).
- **Ink-muted #a0a0a0**: secondary text, 26 characters weighted, applied to the office and clock group in the header.

The root variables also declare four signal colors, `--color--yellow` #ffdd4b, `--color--green` #51b75a, `--color--red` #ff5541 and `--color--blue` #5595ff, plus `--color--error` derived from red. They are declared in the stylesheet but none appears in the home page capture, so they are documented here and not promoted to tokens.

## Typography

Two families are measured. Field Gothic Trimmed, a condensed grotesque, sets the display headline; Host Grotesk with an Arial fallback sets the interface labels.

- **display**: Field Gothic Trimmed 48px / 48px, weight 400, letter-spacing -0.48px, uppercase. Solid line height equals font size, so the three headline lines sit tightly stacked.
- **display-mobile**: 31.3125px / 31.3125px, letter-spacing -0.313125px, uppercase, measured in the 390px pass.
- **link**: Host Grotesk 13.2px, weight 600, line height 13.2px, letter-spacing 0.132px (used for the header and About Us labels).
- **nav**: Host Grotesk 10.6667px, weight 400, line height 20px.

Font sizing is fluid: the root declares `--size-unit: 16`, `--size-container-ideal: 1920` and `--size-font: calc(var(--size-container) / (var(--size-container-ideal) / var(--size-unit)))`, so type scales with the container width, clamped between `--size-container-min` and `--size-container-max`. Named text steps are declared in em (for example xs .875em, md 1.875em, lg 2.25em, 2xl 5.62em, 3xl 6.875em, 4xl 13.75em). Both fonts are web fonts whose licenses are not stated on the pages opened.

## Layout

The layout is a full-viewport composition rather than a grid of sections. Measured on desktop: padding values of 46px and 54px (two each) frame the screen, gaps of 18.4px and 9.2px separate header and label items, and 3.2px is the smallest padding. The container padding is also declared as `--container-padding` at 4.375em.

On screen: wordmark top left, office and clock top center, MENU top right; headline and About Us bottom left; the dial centered over most of the height; toggle bottom right. The nav text content lists L.A, LDN, NYC, three times (21:24, 05:24, 00:24 in the capture), then the menu letters. A cookie banner with Accept All and No thanks appears on the opened page text and is consent UI, not brand UI; it is not documented as a component.

## Elevation & Depth

No box shadows were measured (the shadow list is empty). Depth comes from the dial artwork itself: metallic, lit rings with brushed highlights and a dark inner well on the near-black canvas. That is imagery, not a CSS effect, and the page declares a `rive-canvas` label in its text, which indicates a Rive canvas element, though how the artwork is rendered was not measured. Do not add CSS shadows to UI elements.

## Shapes

Two radius values were measured: 16px (one element) and 100% (one element, a circle or pill; carried as `pill: 9999px`). The circular outlined arrow button next to About Us and the pill toggle at bottom right follow the pill form; the portrait is circular. Everything else has a 0px radius. Hairline borders are white (#ffffff).

## Components

- **Link / nav-link**: Host Grotesk in ink #ffffff, 13.2px weight 600 for header links, 10.6667px for the smaller nav items. The recorded transform on both is the identity matrix.
- **Outlined circular button**: a round white-outlined control with a chevron beside the "About Us" label; radius 100%.
- **Toggle**: a pill-shaped switch at the bottom right, outlined in white with a white knob.
- **Menu**: the word MENU in the header, which opens a panel listing About Us, Creator Media, Creator communities, Creator products, Creator Tech, Press & News and Join Us (from the opened page text).
- **Office selector and clock**: the group (L.A, LDN, NYC) in muted #a0a0a0 with live times.
- **Footer links**: Terms & Conditions, Privacy Policy, Privacy Notice, Cookies.

No filled buttons, cards or inputs were detected.

## Design System Architecture

No public design system or brand guideline was found: the opened page (https://steven.com) names no fonts, system or guidelines; this is stated, not assumed. The de-facto system lives in root variables exposed by the Webflow-style variable naming (`--color--bg`, `--color--text`, `--text--md`, `--size-unit`): a two-color theme (dark and light) with derived greys by `color-mix`, four signal colors, a fluid font-size formula tied to a 1920px ideal container, em-based text steps, and a set of animation timing variables (`--cubic-inout` cubic-bezier(0.65, 0, 0.35, 1), `--cubic-default` cubic-bezier(0.65, 0.05, 0, 1), `--animation-mode`, `--animation-short`, `--fade-edge` 5%). Source: https://steven.com (measured rootVars).

## Do's and Don'ts

Do:
- Keep the page near-black (#121212) with white type and #a0a0a0 for secondary information.
- Set the headline in Field Gothic Trimmed, uppercase, with negative tracking.
- Use circular outlined controls and a pill toggle for secondary actions.
- Keep copy declarative and short.

Don't:
- Use the yellow, green, red or blue signal variables for decoration; they are not present on the home page.
- Add shadows or filled buttons.
- Document the cookie banner as brand UI.
- Replace the condensed display face with a wide grotesque.

## Responsive Behavior

Measured in the 390px pass: the h1 becomes 31.3125px / 31.3125px with -0.313125px letter spacing; the most-read sizes are 12.0875px (189 characters weighted), 31.3125px (84) and 16.7px (13). Because the font size formula is tied to container width, these values are the 390px results. Breakpoint rules, menu behavior and dial placement on mobile were not measured.

## Iteration Guide

1. Set canvas #121212 and ink #ffffff; add #a0a0a0 only for secondary text.
2. Load Field Gothic Trimmed and Host Grotesk; headline 48px uppercase, tracking -0.48px.
3. Frame the screen with the 46px and 54px paddings and 18.4px gaps.
4. Use radius 16px and the pill value only where measured.
5. Treat hover as not measured; the hover probe recorded no entries.
6. Re-run `node web/scripts/verify-designs.mjs --slug=steven-com` after edits.
