---
version: alpha
name: UI Kitten
category: "Design Systems"
description: "UI Kitten docs home: Docusaurus page with an orange #ff6721 hero, ink #1c1e21 system-font headings at 48px weight 700, pale #ebedf0 buttons with 6.4px radius, #f6f7f8 code box and a #303846 navy footer; documents an Eva-based React Native library."

colors:
  canvas: "#ffffff"
  page-largest: "#ff6721"
  ink: "#1c1e21"
  primary: "#ff6721"
  on-primary: "#ffffff"
  button-fill: "#ebedf0"
  button-fill-hover: "#d4d5d8"
  footer-navy: "#303846"
  surface-code: "#f6f7f8"
  primary-dark: "#ff5007"
  primary-light: "#ff7e3b"
typography:
  display:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 60px
  heading:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
  body:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: >-
      system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI
      Symbol"
    fontSize: 18.9px
    fontWeight: 700
    lineHeight: 28.35px
rounded:
  xs: 6.4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 8.1px
  s4: 12px
  s5: 16px
  s6: 32px
  s7: 32.4px
  s8: 64px
components:
  button-primary:
    backgroundColor: "{colors.button-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8.1px 32.4px
    height: 47px
    borderColor: "{colors.button-fill}"
  button-primary-hover:
    backgroundColor: "{colors.button-fill-hover}"
    textColor: "{colors.ink}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 8.1px 32.4px
    height: 47px
    borderColor: "{colors.button-fill}"
  hero:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    padding: 64px 0px
  footer:
    backgroundColor: "{colors.footer-navy}"
    textColor: "{colors.canvas}"
    padding: 32px
---

# UI Kitten

## Overview

UI Kitten (https://akveo.github.io/react-native-ui-kitten/) is the documentation site for a React Native component library. The hero line reads "React Native UI Components powered by Eva Design System", and the footer states "Copyright 2026 UI Kitten Contributors. Built with Docusaurus." The measured page is the Docusaurus-based home page, and its stylesheet variables are Docusaurus's `--ifm-*` set with a custom orange primary.

The page reads top to bottom as: a white navigation bar (UI Kitten wordmark, Docs, Components, Storybook with an external-link mark, a GitHub link and a light/dark toggle icon); a solid orange hero band (`#ff6721`) with the white title "UI Kitten", the white tagline, and two buttons, "Get Started" (filled pale grey) and "Components" (outlined); a four-column feature row (Eva Design System, 30+ UI Components, React Native 0.81, Runtime Theming) with short paragraphs; a "Quick Start" heading over a command in a pale code box (`npm i @ui-kitten/components @ui-kitten/eva react-native-svg`); and a slate-navy footer with three link columns (Docs, Components, More) and the copyright line.

There are no photographs or illustrations; the page is entirely typographic and colour-blocked. The voice is plain and spec-like: "Production-ready components including buttons, inputs, selects, calendars, modals, navigation, and more."

## Colors

`canvas` is `#ffffff`, `ink` is `#1c1e21` (the Docusaurus base text colour, the most-read text). `primary` is `#ff6721`, the site's `--ifm-color-primary`, and it is also the measured colour of the hero band and of the hero header's own background; `page-largest` carries the same value as the largest area on the page. `on-primary` is white for the title and tagline on the orange. The variable set also defines tints of the primary: `primary-dark` `#ff5007` (`--ifm-color-primary-dark`) and `primary-light` `#ff7e3b` (`--ifm-color-primary-light`); the hover probe shows a nav link ("Docs") turning orange `#ff6721` on hover.

The buttons are not orange: `button-fill` `#ebedf0` is the "Get Started" fill and border, with `button-fill-hover` `#d4d5d8` on hover and `ink` text. `surface-code` `#f6f7f8` is the code box (`--ifm-code-background`), and `footer-navy` `#303846` is the footer fill with white text.

Contrast note: white text on the orange hero is a computed contrast of about 2.9 to 1 (from `#ffffff` on `#ff6721`), below the 4.5 to 1 normally wanted for body text; the hero text is large and bold, which relaxes the threshold to 3 to 1 but it is still marginally below it. Keep dark ink on orange if the text becomes small.

## Typography

The system font stack throughout: system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans and sans-serif, with emoji fallbacks. No webfont is loaded, so no substitute is needed.

Measured roles: `display` (the h1 "UI Kitten") is 48px on 60px, weight 700; `heading` (h2 "Quick Start") is 24px on 30px, weight 700; `subheading` (h3, e.g. "Eva Design System") is 20px on 25px, weight 700; `body` is 16px on 26.4px, weight 400; `button` is 18.9px on 28.35px, weight 700. The h1 stays at 48px in the 390px-wide measurement, so no separate mobile token is defined. Code is set in a monospace face inside the pale box.

## Layout

A standard Docusaurus home: a full-width navbar, a 314px-tall hero (64px vertical padding), then a centred container with four equal columns for the features. The Quick Start block is centred and narrow (the code box is about the width of its command). The footer spans the full width with 32px padding and three columns of links.

Spacing values measured: 4px, 8px, 8.1px, 12px, 16px, 32px, 32.4px and 64px (`s1` to `s8`). The 8.1px and 32.4px values come from the button padding, which Docusaurus scales from a rem variable.

The whole page measured 1183px tall at 1280px wide, so the home page is a single short screen and a half: hero, feature row, quick start and footer, with no further sections. This brevity is part of the character: the page exists to send readers to the Docs, Components and Storybook links, and every element on it supports that single job.

## Elevation & Depth

Very flat. The only shadow measured is `rgba(0, 0, 0, 0.1) 0px 1px 2px 0px`, a hairline lift. Sections are separated by colour fields (white, orange, navy), not by rules or cards; the code box is a tonal fill with rounded corners and no border.

## Shapes

Radii measured: 6.4px (`xs`, buttons), 8px (`sm`, the code box and similar blocks) and a 50% circle for the colour-mode toggle; the pill token `9999px` is kept from the generated set. Buttons are 47px tall. Controls are modestly rounded; there are no sharp-cornered containers except full-bleed bands.

## Components

**Primary button** ("Get Started"): `#ebedf0` fill and border, `#1c1e21` text at 18.9px/28.35px weight 700, 6.4px radius, padding 8.1px 32.4px, 47px tall; hover fill `#d4d5d8`.

**Secondary button** ("Components"): transparent fill, 1px `#ebedf0` border, the same text, size and radius.

**Nav**: white bar; links in `ink`, turning orange on hover; trailing GitHub link and an icon-only colour-mode toggle.

**Hero**: orange fill, 64px vertical padding, white centred title, tagline and the two buttons side by side.

**Feature column**: bold h3, regular paragraph, no container.

**Code box**: `#f6f7f8` fill, 8px radius, monospace command.

**Footer**: `#303846` fill, white bold column titles, white links, centred copyright, 32px padding.

## Design System Architecture

Two layers. The site chrome is Docusaurus, which exposes the `--ifm-*` variables (for example `--ifm-color-primary`, `--ifm-code-background`, `--ifm-footer-background-color`) that this document reads; the footer says "Built with Docusaurus". The library the site documents is built on the Eva Design System: https://github.com/akveo/react-native-ui-kitten (opened) describes UI Kitten as a React Native library of 30+ themeable components that implements the Eva specification, with packages `@ui-kitten/components`, `@ui-kitten/eva`, `@ui-kitten/material` and `@ui-kitten/eva-icons`, under the MIT licence. Eva itself, at https://eva.design (opened), says it is made by Akveo, supports light and dark themes and offers a Colors Generator for brand palettes.

The `dsUrl` (the docs site itself) is the real documentation of UI Kitten, but the visual values in this document come from the page as measured, which is Docusaurus with an orange primary; no claim is made that the page renders Eva or UI Kitten components, so no Eva token values were adopted.

## Do's and Don'ts

- Do use a single saturated orange `#ff6721` band for the hero and let white content bands follow.
- Do keep buttons pale grey `#ebedf0` with dark `#1c1e21` text on the orange.
- Do use bold system-font headings with 60px/30px/25px line-heights as measured.
- Do give footers the slate `#303846` fill with white text.
- Don't use white small text on the orange; the contrast is about 2.9 to 1.
- Don't add shadows beyond the single hairline.
- Don't add imagery to the hero; it is solid colour and type.
- Don't treat the page's Docusaurus variables as Eva tokens.

## Responsive Behavior

Measured at 1280px and 390px, with the h1 unchanged at 48px. Docusaurus provides a hamburger menu and stacked columns at narrow widths, but the breakpoints were not measured here and none is specified. The four-column feature row, three-column footer and side-by-side hero buttons are the desktop arrangement visible in the capture.

## Iteration Guide

1. Canvas `#ffffff`, ink `#1c1e21`, primary orange `#ff6721` for the hero only.
2. Headings in the system stack, weight 700: 48px/60px, 24px/30px, 20px/25px; body 16px/26.4px.
3. Buttons 47px tall, 6.4px radius, `#ebedf0` fill with dark text; outlined variant uses the same colour as border.
4. Code in `#f6f7f8` boxes with 8px radius.
5. Footer `#303846` with white text and 32px padding.
6. Re-run `node web/scripts/verify-designs.mjs --slug=ui-kitten`.
