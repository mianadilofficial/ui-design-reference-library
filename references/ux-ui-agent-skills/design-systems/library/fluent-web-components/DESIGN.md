---
version: alpha
name: Microsoft Learn
category: "Design Systems"
description: "Microsoft Learn home page: Segoe UI at 16px/28px body with 40px headings, action blue #0f6cbd, near-black #161616 ink, warm beige #e8e6df bands, 4px-radius controls, 8px cards with a soft two-layer shadow and a navy Ignite banner."

colors:
  canvas: "#ffffff"
  page-largest: "#e8e6df"
  ink: "#161616"
  primary: "#0f6cbd"
  on-primary: "#ffffff"
  surface-subtle: "#fafafa"
  ink-subtle: "#505050"
  hyperlink: "#0065b3"
  border-control: "#d1d1d1"
  primary-hover: "#115ea3"
  border-subtle: "#e6e6e6"
  banner-night: "#01011c"
  gradient-vivid-start: "#b84dc6"
  gradient-vivid-end: "#0078d4"
  success: "#107c10"
  danger: "#bc2f32"
  warning: "#f7630c"
typography:
  display:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 45px
  heading:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 36px
  subheading:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 25px
  body:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
  link:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: "\"Segoe UI\", \"Segoe UI Variable Text\", -apple-system, \"system-ui\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
spacing:
  s1: 4.25px
  s2: 5px
  s3: 5.75px
  s4: 6.5px
  s5: 8px
  s6: 10.25px
  s7: 10.5px
  s8: 12px
  s9: 13.5px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5.75px 13.5px
    height: 41px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 5px 12px
    height: 36px
    borderColor: "{colors.border-control}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.hyperlink}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 5.75px 26px 5.75px 10.25px
    height: 41px
    borderColor: "{colors.border-control}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 16px 0px 0px
    boxShadow: rgba(0, 0, 0, 0.13) 0px 1.6px 3.6px 0px, rgba(0, 0, 0, 0.11) 0px 0.3px 0.9px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 24px
    borderColor: "{colors.border-subtle}"
---

# Microsoft Learn

## Overview

The site measured for this entry is the English home page of Microsoft Learn, https://learn.microsoft.com/en-us/, which redirects to the same host's en-us root. Note on naming: this slug is titled "Fluent Web Components" in the catalog because its design-system link is the Fluent UI Web Components overview that Microsoft hosts on Learn, but the page that was captured and measured is the Learn home page itself, so the document is named after the site actually measured.

The capture shows, from top to bottom: a deep navy promotional banner for Microsoft Ignite ("November 17-20, 2026") with a white outlined "Register now" button and a wireframe-tunnel illustration; a light header bar with the four-colour Microsoft mark, the word "Learn", dropdown links (Documentation, Training & Labs, Q&A, Topics), a search icon and a "Sign in" link; a warm grey-beige hero band headlined "Build with answers in reach" in a purple-to-blue gradient over an isometric illustration of stacked circuit blocks in magenta, orange and white; a white band "Popular technical resources and training" with three white cards; a beige panel "Get started with Microsoft Learn MCP Server" with an outlined "Start building" button and a second illustration; and a beige footer with language, privacy and theme controls and the legal links.

The tone is helpful and task-oriented, built from imperatives ("Dive into official documentation...", "Take in-demand training", "Ask a question"). Density is moderate: small 14px to 16px text, thin controls, and large decorative illustrations that anchor the hero and the MCP panel.

## Colors

`canvas` is `#ffffff`. `page-largest` `#e8e6df` is the warm beige that fills the hero band, the MCP panel and the footer; the site's variables call it `--theme-body-background-accent`. `surface-subtle` `#fafafa` is the header container. `ink` is `#161616` (`--theme-text`), and `ink-subtle` `#505050` (`--theme-text-subtle`) is the second most-read text colour, used on card descriptions.

`primary` is `#0f6cbd` (`--theme-primary-base`), the fill of the hero "Search" button and the colour of in-card links; `primary-hover` `#115ea3` is its measured hover fill and `on-primary` is white. `hyperlink` `#0065b3` (`--theme-hyperlink`) is a slightly different blue used for text links and nav text. `border-control` `#d1d1d1` is the control border (inputs, secondary buttons) and `border-subtle` `#e6e6e6` the footer rule. `banner-night` `#01011c` is the banner background measured among the largest areas.

Gradient: the h1 uses a purple-to-blue text gradient. The extractor measured `#b84dc6` as the heading background and the root variables define `--theme-gradient-vivid-start` `#b84dc6` and `--theme-gradient-vivid-end` `#0078d4`; these are stored as `gradient-vivid-start` and `gradient-vivid-end`. Status colours come from the same variable set: `success` `#107c10`, `danger` `#bc2f32`, `warning` `#f7630c`. The variable set also defines high-contrast and dark values that the light capture does not show.

## Typography

Everything is Segoe UI, with "Segoe UI Variable Text", -apple-system, system-ui, Helvetica Neue, Helvetica, Arial and sans-serif as fallbacks. The CSS declares Segoe UI Variable Small, Text and Display faces plus a `docons` icon font. Weights are 400 for body and 600 for all headings, buttons and links.

Measured roles: `display` is 40px on 45px, weight 600, the h1 "Build with answers in reach" (the same 40px on 45px at the 390px mobile width, as measured). `heading` is 32px on 36px, weight 600; the extractor found this on the white "Microsoft Ignite" banner title, so treat it as the banner title size, not the section-heading size. `subheading` is 20px on 25px, weight 600, used for the card titles. `body` is 16px on 28px at weight 400. `button` is 18px on 27px at weight 600 (the Search button), `link` is 16px on 20px at weight 600, and `input` is 18px on 27px at weight 400. Segoe UI is a Windows system font, so on other platforms the stack falls through to -apple-system / system-ui; no alternative is needed.

## Layout

A full-bleed banner, header and hero stack, followed by a centred content container that is wider than a reading column: the three feature cards sit on one row at desktop width with equal gutters. Hero text is left-aligned in the left half, with the illustration bleeding off the right edge. The section title "Popular technical resources and training" is centred over the cards. The final panel is a rounded beige slab with text left and illustration right, and the footer controls and links sit in two rows.

Measured spacing values include 4.25px, 5px, 5.75px, 6.5px, 8px, 10.25px, 10.5px, 12px, 13.5px and 16px (`s1` to `s10`), mostly from control padding; the site also defines `--layout-gap` as 24px, which matches the footer padding of 24px.

## Elevation & Depth

Depth is gentle. Cards are white with a 1px light border, an 8px radius and a two-layer shadow measured as `rgba(0, 0, 0, 0.13) 0px 1.6px 3.6px 0px, rgba(0, 0, 0, 0.11) 0px 0.3px 0.9px 0px`; this is the only box shadow found. The hero and the MCP panel are flat tonal fields with no shadow, and the header is a flat light bar with a bottom hairline.

## Shapes

Radii measured: 4px (`xs`: buttons, inputs, secondary buttons), 6px (`sm`) and 8px (`md`: cards and the beige panel). The root-variable corpus also holds 3px, 12px and 16px values that were not tied to visible elements. Controls are tight and rectangular with small corners; containers are softer. Illustrations are isometric and 3D-rendered, in magenta, orange and white against beige.

## Components

**Primary button** (hero "Search"): fill `#0f6cbd`, white label at 18px/27px weight 600, 4px radius, padding 5.75px 13.5px, height 41px, border `#0f6cbd`; hover `#115ea3`.

**Secondary button** ("Register now", "Dismiss"-style controls): white fill, `#161616` label at 16px weight 600, 1px `#d1d1d1` border, 4px radius, 36px tall, padding 5px 12px; on hover the fill becomes `#f5f5f5` and the border `#c7c7c7`.

**Outlined button** ("Start building"): transparent fill, 1px `#161616` border, 4px radius, 36px tall, with a small sparkle icon.

**Text input** (hero search field): white, `#161616` text at 18px, 1px `#d1d1d1` border, 4px radius, 41px tall.

**Cards**: white, 8px radius, 16px top padding, the shadow above, a 20px/600 title, subtle grey description and blue links with leading product icons or chevrons.

**Header**: `#fafafa` container, Microsoft mark and "Learn" wordmark, dropdown links and a "Sign in" link coloured `#0065b3`.

**Footer**: `#e8e6df` background, 24px padding, controls for language, privacy choices and theme above a row of legal links. The close button on the banner is a page-dismiss control and is not part of the brand button system.

## Design System Architecture

Microsoft Learn is built on Atlas, an open-source CSS-first design system. The Atlas documentation at https://microsoft.github.io/atlas-design/get-started.html (reached via the redirect from design.learn.microsoft.com) states that Atlas "powers Microsoft Learn," ships three themes (Light, Dark, High Contrast), pairs atomics with components, and is published to npm as `@microsoft/atlas-css` and `@microsoft/atlas-js`; the repository https://github.com/microsoft/atlas-design describes it as MIT-licensed. The `--theme-*` and `--layout-*` custom properties recorded on this page's root, such as `--theme-primary-base`, `--theme-text` and `--layout-gap`, are the de-facto token layer; whether they are Atlas's published token names was not checked and is not asserted.

The `dsUrl` for this entry, https://learn.microsoft.com/en-us/fluent-ui/web-components, is real documentation (opened): an overview of Fluent UI Web Components that says the package composes `@microsoft/fast-foundation` and styles it with the Fluent design language, with installation from npm or CDN. The Learn home page was not shown to use those components, so no values were taken from that page.

## Do's and Don'ts

- Do set text in Segoe UI with weight 600 for headings and controls, 400 for body.
- Do keep one saturated action blue, `#0f6cbd`, and darken to `#115ea3` on hover.
- Do use 4px radii for controls and 8px for cards, with the single soft two-layer shadow.
- Do separate sections with the warm `#e8e6df` field rather than rules.
- Do reserve the purple-to-blue gradient for the hero headline.
- Don't use the beige for controls; controls stay white with a `#d1d1d1` border.
- Don't treat the promotional banner as a permanent component of the system.
- Don't use browser-default link colours; links use `#0f6cbd` or `#0065b3`.

## Responsive Behavior

Measured at 1280px and 390px: the h1 holds 40px on 45px at mobile width. The site declares layout variables for flyouts (320px), menu and aside widths (275px expanded, 68px collapsed), which belong to its documentation-page layouts rather than to this home page. Narrow-screen behaviour of the three-card row was not measured; the exact breakpoints were not measured, so none is specified. Controls keep their measured 36px and 41px heights.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#161616`, `primary` `#0f6cbd`.
2. Use Segoe UI: 40px/45px hero, 20px/25px card titles, 16px/28px body.
3. Add the beige `#e8e6df` for hero, feature panel and footer.
4. Use 4px-radius controls (41px primary, 36px secondary and outlined) and 8px cards with the two-layer shadow.
5. Keep banners dark navy `#01011c` with white text and a single white secondary button.
6. Re-run `node web/scripts/verify-designs.mjs --slug=fluent-web-components`.
