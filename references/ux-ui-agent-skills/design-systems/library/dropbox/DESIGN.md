---
version: alpha
name: Dropbox
category: "Product & SaaS"
description: "Dropbox (www.dropbox.com): warm off-white #f7f5f2 and white pages with graphite #1e1919 headings, a #0061fe blue call to action with 16px rounded corners, Sharp Grotesk 500 at 40px for the h1, Atlas Grotesk Web for body at 16px/24px, and a full-width graphite band for the AI-integrations section."
colors:
  canvas: "#ffffff"
  ink: "#524a3ed1"
  ink-strong: "#1e1919"
  primary: "#0061fe"
  on-primary: "#f7f5f2"
  surface-warm: "#f7f5f2"
  surface-sand: "#eee9e2"
  surface-dark-card: "#1c1d21"
  footer-bg: "#000000"
  ink-on-dark-muted: "#f7f5f299"
  primary-hover: "#0057e5"
  accent-azalea: "#cd2f7b"
  accent-navy: "#283750"
  accent-plum: "#78286e"
  accent-rust: "#be4b0a"
  accent-sunset: "#fa551e"
  accent-tangerine: "#ff8c19"
  accent-orchid: "#c8aff0"
  accent-cloud: "#b4c8e1"
  identity-green: "#b4dc19"
  identity-yellow: "#fad24b"
typography:
  display:
    fontFamily: >-
      "Sharp Grotesk", SharpGrotesk, "Sharp Grotesk KR", "Sharp Grotesk Thai", "Atlas Grotesk Web", "Atlas Grotesk", AtlasGrotesk, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", Helvetica,
      Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
  display-mobile:
    fontFamily: >-
      "Sharp Grotesk", SharpGrotesk, "Sharp Grotesk KR", "Sharp Grotesk Thai", "Atlas Grotesk Web", "Atlas Grotesk", AtlasGrotesk, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", Helvetica,
      Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  heading:
    fontFamily: >-
      "Atlas Grotesk Web", "Atlas Grotesk", AtlasGrotesk, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: >-
      "Atlas Grotesk Web", "Atlas Grotesk", AtlasGrotesk, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: >-
      "Atlas Grotesk Web", "Atlas Grotesk", AtlasGrotesk, -apple-system, "system-ui", "Segoe UI", "Helvetica Neue", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 100px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 48px
  s10: 72px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px 24px
    height: 55px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    padding: 16px 24px
  card:
    backgroundColor: "{colors.surface-dark-card}"
    textColor: "{colors.accent-azalea}"
    rounded: "{rounded.md}"
    padding: 8px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
---

## Overview

The Dropbox home page (https://www.dropbox.com/, title "Dropbox: Secure cloud storage, file sharing, and more", measured at 1280px with a 390px mobile pass) is a SaaS marketing page that uses warm neutrals instead of cold grey. The page background is #ffffff, but the capture shows the hero and several content bands on a warm paper tone #f7f5f2, one full-width graphite band (#1e1919) for AI integrations, and a #000000 footer. A single saturated blue, #0061fe, is reserved for primary actions.

Content order in the capture: a white 72px navigation bar (Products, Solutions, Business, Pricing on the left; a globe icon, Contact sales, Get app, Sign up, Log in and a blue Get started button on the right); a hero with the h1 "Get to work, with a lot less work", a grey sub-line, a blue "Try Dropbox free →" button and a product screenshot of the desktop and mobile apps; a customer-logo row headed "Join the over 700 million registered users who trust Dropbox"; a dark section "Bring Dropbox content into your favorite AI tools" with five partner cards (OpenAI, Anthropic, Google Gemini, SpaceXAI, Meta Muse), each with a "Connect now →" link; and a white section "Find it fast, every time" with an outlined "Try Dropbox free →" button inside a pill.

Headline copy is short, sentence case and plain: "Share files without the slowdown", "Security never comes second", "Cloud storage that keeps everyone in sync".

## Colors

`ink-strong` #1e1919 (the stylesheet's `--color__core__primary` and graphite) colours headings and navigation text on light backgrounds, and fills the dark AI band. Body copy uses `ink` #524a3ed1, a warm brown-grey with alpha, measured as the most-read colour on light areas (1711 characters). On dark areas text is #f7f5f2 (the most-read colour overall, 1967 characters) and a 60%-alpha variant #f7f5f299 for secondary lines.

`primary` #0061fe is the fill and 2px border of both measured buttons (`--color__core__accent`); its hover fill is #0057e5. Button text is the warm #f7f5f2, not pure white. Background areas measured: #ffffff, #f7f5f2, #1e1919, #000000, #1c1d21 (dark cards, 629 area units), #eee9e2 (477) and #0061fe.

The stylesheet publishes a wider accent family that is not used in large areas on the home page: azalea #cd2f7b (also measured on 29 characters of text), navy #283750, plum #78286e, rust #be4b0a, sunset #fa551e, tangerine #ff8c19, orchid #c8aff0, cloud #b4c8e1, identity green #b4dc19 and identity yellow #fad24b. The browser-default link colour #0000ee reported on an unstyled link is not a brand colour and is excluded.

## Typography

Two families are measured. Atlas Grotesk Web carries body copy (4219 characters): 16px/24px at weight 400, 20px/24px at weight 500 for h2 and h3, 14px/20px weight 500 in the navigation, buttons at 16px/19.2px weight 500. Sharp Grotesk (609 characters) sets the h1 at 40px, weight 500, line-height 48px, and the section headlines in the dark band; "Sharp Grotesk 23" (119 characters, weight 400) is also loaded. Size frequency by characters: 16px (2951), 14px (960), 18px (452), 20px (258), 26px (124), 32px (119), 12px (50), 40px (33). Weights are 400, 500 and 700. No letter-spacing is recorded.

The stack declares Sharp Grotesk with Korean and Thai variants first, then Atlas Grotesk Web and Atlas Grotesk, then system fonts (-apple-system, Segoe UI, Helvetica Neue, Helvetica, Arial). Sharp Grotesk and Atlas Grotesk are commercial faces; if they cannot be licensed, keep the measured sizes and weights and use the listed system fallbacks. The extra families declared in @font-face include SharpGroteskCondensed, SharpGroteskSuperCondensed and SharpGroteskWide, but no element in the capture was measured using them.

## Layout

Scroll height at 1280px is 9252px. The navigation bar is 72px tall with padding 16px 24px. Sections are centred stacks of headline, grey sub-copy and one action, except the hero, which puts copy on the left and the product screenshot on the right. The AI band lays five cards in a 3 plus 2 arrangement with a left-aligned icon, title, paragraph and link inside each. The footer is 625px tall on #000000 with 20px/30px weight-500 column headings.

Spacing scale from measured gaps and paddings: 4px (41 gaps), 8px, 12px, 16px (21), 24px (13), 32px, 48px (5) and 72px (3); padding 12px and 24px are each used 29 times. The stylesheet declares breakpoints `--dig-breakpoint__small: 600` and `--breakpoint__standard: 1024px`.

## Elevation & Depth

Depth is carried by background changes, not shadows. No box shadow was recorded on any measured element, and both measured buttons report `boxShadow: none` before and after hover. The product screenshot in the hero shows its own window chrome, which is part of the image.

The stylesheet declares tokens for shadows and focus: `--dig-color__shadow__elevated` #0000001a and a focus ring `--boxshadow__focusring: 0 0 0 3px #428bff`. They are declared values; which elements use them was not measured.

## Shapes

Corners are generously rounded and tiered by control size. The primary hero button is 16px (`md`), the compact Get started button in the navigation is 12px (`sm`), 8px (`xs`) and 20px (`lg`) appear in the border-radius frequency table, and 100px (`xl`) marks pill shapes such as the small "Find" tag and rounded outlined buttons in the capture. Frequency counts: 12px (10 elements), 16px (8), 100px (3), 8px (3), 20px (1). Borders are 2px solid in the button colour; #1e1919 (3 uses), #0061fe (2) and a translucent #8e8b8780 are the measured border colours.

## Components

**Primary button** (`button-primary`): #0061fe fill, 2px #0061fe border, #f7f5f2 text, Atlas Grotesk 500 at 16px, padding 16px 24px, 55px high, 16px radius, trailing arrow glyph in the capture ("Try Dropbox free →"). Hover fill #0057e5.

**Compact button** (`button-secondary`): same colours, padding 0px 12px, 40px high, 12px radius, used for "Get started" in the navigation bar; hover fill #0057e5.

**Outlined button**: the "Try Dropbox free" button in the white lower section is drawn with a dark outline and no fill in the capture; its measured values were not recorded.

**Navigation** (`nav`): white background, #1e1919 text at 14px/20px weight 500, padding 16px 24px, 72px high; text links (Sign up, Log in) are plain.

**AI partner cards** (`card`): dark background #1c1d21 area, 16px radius, 8px padding as measured; titles 20px/24px weight 500 in #f7f5f2 and body lines in 16px/24px with underlined product names.

**Footer**: #000000 background with #f7f5f2 text and column links.

## Design System Architecture

Dropbox publishes its brand rules at https://brand.dropbox.com/, which was opened and lists Framework, Voice & Tone, Logo, Typography, Iconography, Color, Imagery and Motion, plus links to Dropbox Design, Dropbox Brand Studio and Daybreak Studio. The sub-pages were not read for this file; only the values above, measured from the live home page, are used.

The shipped code exposes a component system. The home page loads `dig-components/tokens-*.css`, `dig-fonts/*.css`, and `dwg-components/src/index.web-*.css` from cfl.dropboxstatic.com. Custom properties follow the namespaces `--dig-color__*`, `--dig-type__*`, `--dig-spacing__*`, `--dwg-theme__color__*`, `--color__core__*` and `--color__accent__*`; brand colour names include graphite, coconut, azalea and orchid. Typography variables are named `--type__title__large--fontfamily` and `--dig-type__lineheight__title__xlarge` (48px).

## Do's and Don'ts

Do use #0061fe only for the main action and keep its text warm off-white (#f7f5f2). Do alternate warm light bands with one graphite band for emphasis. Do round primary buttons at 16px and compact ones at 12px. Do keep headlines short, sentence case, in Sharp Grotesk 500.

Don't put drop shadows on buttons or cards; none were measured. Don't use pure white text on the blue button. Don't use #0000ee as a link colour. Don't mix the accent family (azalea, plum, sunset) into large areas of the marketing page; the home page does not do this. Don't invent hover states beyond the #0057e5 fill that was recorded.

## Responsive Behavior

From the 390px mobile pass: the h1 is 32px with a 38.4px line-height (40px/48px on desktop), h2 stays 20px/24px, body copy stays 16px/24px, and the primary button is unchanged (16px 24px padding, 231px by 55px). The top bar at 390px is 48px tall with the text "Sign up" and "Log in" at 14px weight 400, against 72px tall with the full menu at 1280px. Mobile sizes by characters: 16px (3093), 14px (908), 18px (452), 26px (124), 24px (119), 20px (105), 12px (50), 32px (33). The stylesheet declares breakpoints at 600 and 1024px. How the cards and hero reflow is not measured.

## Iteration Guide

Start from canvas #ffffff, warm band #f7f5f2, ink-strong #1e1919, body ink #524a3ed1 and primary #0061fe. Build the hero as headline (Sharp Grotesk 500, 40px/48px), one grey sentence, and a 55px-high blue button with a 16px radius. Alternate warm and white bands and add one graphite band for the dark moment. Verify buttons against the 2px border and the #0057e5 hover. Pull any further accent only from the declared stylesheet palette, and re-measure before using it.
