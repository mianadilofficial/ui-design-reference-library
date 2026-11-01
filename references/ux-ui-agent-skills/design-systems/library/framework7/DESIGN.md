---
version: alpha
name: Framework7
category: "Design Systems"
description: "Framework7 homepage: warm brown-black #201a19 canvas, off-white #ede0dd text, peach #ffb4a4 pill buttons with 44px radius, Inter 700 headings at 44px and 48px with 18px body, and a red-orange logo, plus an iPhone demo of the framework."
colors:
  canvas: "#201a19"
  ink: "#ede0dd"
  primary: "#ffb4a4"
  on-primary: "#640d00"
  surface-card: "#3b2c2a"
  surface-deep: "#1b1412"
  surface-raised: "#2b2220"
  brand-red: "#ee350f"
  ink-muted: "#d8c2bd"
  hairline: "#534340"
  primary-hover: "#ff8a71"
typography:
  display:
    fontFamily: Inter, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
  display-mobile:
    fontFamily: Inter, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 45.6px
  heading:
    fontFamily: Inter, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 62.4px
  body:
    fontFamily: Inter, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 31.5px
  button:
    fontFamily: Inter, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 16px
  2xl: 20px
  3xl: 38px
  4xl: 44px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 18.72px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 36px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.primary}"
  card:
    textColor: "{colors.primary}"
    rounded: "{rounded.xl}"
    padding: 16px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview

Framework7 (https://framework7.io) is a framework for building iOS, Android and desktop apps with web technology, and its homepage is a dark, warm-toned marketing page. The capture shows an announcement bar ("All-new Swiper Studio v2 is here"), a nav bar with the red-orange circular logo, the wordmark with a "v9.2.0" tag, a "Search ⌘ K" field, links "Docs", "Resources", "Blog" and a GitHub star count (18,763 stars). The hero stacks a small red pill ("Now with iOS 26 styles!"), the large logotype in the brand red-orange, the headline "Build full featured iOS, Android & Desktop apps", a peach pill button with a rocket icon labelled "Get Started", and a translucent link box ("Docs", "Templates", "Apps Showcase", "Forum", "MIT Licensed, v9.2.0 released on September 28, 2026", GitHub stars, "Support Framework7"). To the right, a large iPhone mock-up shows the framework's own iOS-style app: a light list of components (Accordion, Action Sheet, Area Chart, Autocomplete, Badge, Breadcrumbs, Buttons, Calendar / Date Picker, Cards) with round red icons. A field of pink and purple dots forms a wave backdrop behind the lower hero.

Lower sections alternate text and illustration: an isometric phone wireframe in dusty rose beside a paragraph ("Framework7 - is a free and open source framework to develop mobile, desktop or web apps with native look and feel."), "Build Apps For Any Platform" with peach-tinted PWA, Cordova, Capacitor and Electron logos, and "Use Anything You Love!" with JS, Vue, React, Svelte, Webpack icons.

The copy is plain and feature-first, with bolded phrases ("free and open source", "native look and feel") for scanning.

## Colors

The page uses a warm dark scheme, a tonal palette in the style of Material You dark themes. `canvas` is {colors.canvas}, a brown-black. Stacked surfaces step lighter or darker around it: `surface-deep` {colors.surface-deep} for the nav bar and footer region, `surface-raised` {colors.surface-raised}, and `surface-card` {colors.surface-card} for cards and the translucent link box. `ink` is {colors.ink}, a warm off-white, and `ink-muted` {colors.ink-muted} is a dimmer tone for secondary text. `hairline` {colors.hairline} draws borders.

`primary` is the peach {colors.primary}: the "Get Started" and "Become a Sponsor" button fills, links, and logo tints in the lower sections, with dark red-brown `on-primary` {colors.on-primary} text. The measured hover fill is `primary-hover` {colors.primary-hover}. `brand-red` {colors.brand-red} is the saturated red-orange of the logo mark and logotype; it appears only in brand marks, not in UI fills. The light iPhone mock-up carries its own light iOS palette, which belongs to the demo app and is not a token of the page.

## Typography

Inter throughout, loaded at 400, 500, 600 and 700, with Framework7 Icons as a glyph font for button icons. The hero headline "Build full featured iOS, Android & Desktop apps" is 44px / 52.8px at weight 700 (`display`), while the section heading "Build Apps For Any Platform" is 48px / 62.4px at 700 (`heading`); at 390px the display size is 38px / 45.6px. Body paragraphs are 18px / 31.5px at weight 400 (a generous 1.75 line height) and buttons use 18px weight 700. Code-like lines in the hero link box use a monospace face (the stylesheet lists Roboto Mono). The measured font sizes by character count are led by 20px, 14px, 18px and 15px.

### Font Substitutes

Inter is open source, so no substitute is needed; the stack falls back to -apple-system, system-ui, Helvetica Neue, Helvetica, Arial, sans-serif. "Framework7 Icons" is the framework's own icon font and has no equivalent substitute.

## Layout

A centered marketing layout with alternating two-column bands. The hero uses a left column of centered stacked content and a right column holding the phone mock-up, with the dot-wave graphic crossing both. Sections below use a two-column split, text on one side and imagery on the other, switching sides each band. Spacing tokens measured from the page range 1px to 18.72px; the large vertical rhythm between bands is far bigger than any measured token.

## Elevation & Depth

Depth is created with tonal surfaces and imagery, not shadows: the extractor found no box shadows on the page. Cards and panels read as lighter brown planes on the darker canvas, the phone mock-up is outlined by a thick dark-brown frame, and the dotted wave adds atmosphere. The framework's own CSS (inlined for the demo) defines button, FAB and glass shadow variables (`--f7-button-box-shadow`, `--f7-fab-box-shadow`, `--f7-glass-shadow`), but those apply inside the demo app.

## Shapes

Radii range from 4px to a large 44px; the primary button is a full pill-like rounded rectangle at 44px (`rounded.4xl`) with 60px height. Cards use 16px (`rounded.xl`). The logo and list icons are circles; the phone frame has a large corner radius (38px tier). The vocabulary is round and friendly.

## Components

**Primary button.** Peach {colors.primary} pill, 60px tall, 0 36px padding, 44px radius, 18px / 700 {colors.on-primary} text; "Get Started" prefixes a rocket glyph from the Framework7 Icons font. Hover shifts to {colors.primary-hover}.

**Nav bar.** Dark band with logo, version tag, outlined search field with keyboard hint, and peach text links.

**Link box.** Translucent card with a {colors.hairline} border, right-aligned peach links and a monospace release line.

**Phone mock-up.** A live demo of the framework's list, navbar and icon patterns in light iOS styling.

**Platform logos.** Large peach-tinted marks for PWA, Cordova, Capacitor and Electron.

## Design System Architecture

Framework7 is the component library itself. Its docs (https://framework7.io/docs/) describe it as a framework for creating iOS and Android apps, with Core/API, Vue, React and Svelte flavors, components such as Navbar, Toolbar, Dialog, Popup, Sheet Modal, Data Table and List View, MIT licensing, and a CLI. The color theming page (https://framework7.io/docs/color-themes.html) documents `--f7-theme-color`, `--f7-ios-primary`, `--f7-md-primary` and `--f7-color-primary` variables, a default theme color of #007aff, 15 pre-built color themes applied with `color-[name]` classes, a `dark` class for dark mode, and Material color schemes (Vibrant, Monochrome, Default) in version 9.

The homepage uses the framework in its demo and ships its own site styles: the measured stylesheet includes `--f7-font-family`, `--f7-theme-color-rgb`, `--f7-button-box-shadow` and other `--f7-*` variables, so the dsUrl is real and in use for the demo; but the page's dark palette (peach #ffb4a4 on #201a19) is the marketing site's own and is not the framework's default #007aff theme, so no framework default values are used here. Component measurements on the docs demo pages (button, input) could not be completed: the extractor did not return for framework7.io/docs/button.html or the Vue button page, so no component values beyond the homepage appear in this file.

## Do's and Don'ts

- Do keep the page on warm dark surfaces and let peach {colors.primary} carry actions.
- Do round buttons heavily (44px) and cards moderately (16px).
- Do show the framework through a real device mock-up.
- Do pair Inter 700 headings with 18px / 1.75 body text.
- Don't use the brand red-orange for button fills; it belongs to the logo.
- Don't add drop shadows; use tonal surface steps.
- Don't mix the demo's light iOS palette into the page chrome.
- Don't shrink body text below 18px on marketing sections.

## Responsive Behavior

The mobile capture (390px) measures the h1 role at 38px / 45.6px, down from 44px, with the same weight 700 and text. Other layout changes were not documented. The framework itself is built for adaptive iOS and Material themes, but how the marketing page reflows at tablet widths is not measured.

## Iteration Guide

1. Start from {colors.canvas} and {colors.ink}; build depth with `surface-card`, `surface-raised` and `surface-deep`.
2. Use {colors.primary} for one primary pill button per section.
3. Set headings in Inter 700 at 44px to 48px, body at 18px.
4. Keep logos and brand marks in {colors.brand-red}; tint partner logos in peach.
5. If you adopt framework theming, set `--f7-theme-color` deliberately instead of relying on the default #007aff.
