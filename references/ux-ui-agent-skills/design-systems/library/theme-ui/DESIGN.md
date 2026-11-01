---
version: alpha
name: Theme UI
category: "Design Systems"
description: "Theme UI documentation home: white canvas, black ink, primary #3333ee, secondary #111199 and accent #660099, system-ui headings at weight 800 (32px sections), black 56px buttons with 6px radius, flat #f6f6f6 code panels and a node-graph illustration."

colors:
  canvas: "#ffffff"
  page-largest: "#f6f6f6"
  ink: "#000000"
  primary: "#3333ee"
  on-primary: "#ffffff"
  secondary: "#111199"
  gray: "#777777"
  accent: "#660099"
  highlight: "#efeffe"
typography:
  display:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 24px
    fontWeight: 800
    lineHeight: 30px
  display-mobile:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 20px
    fontWeight: 800
    lineHeight: 25px
  heading:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 32px
    fontWeight: 800
    lineHeight: 40px
  body:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  input:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
spacing:
  s1: 4px
  s2: 8px
  s3: 16px
  s4: 32px
  s5: 128px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 56px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 8px
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 8px
    height: 39px
---

# Theme UI

## Overview

Theme UI (https://theme-ui.com) is the documentation home of an MIT-licensed library that its own page describes as "a library for creating themeable user interfaces based on constraint-based design principles," for building "custom component libraries, design systems, web applications, Gatsby themes, and more." The page title is "Theme UI: The Design Graph Framework". This is a framework whose product is a theming API, and its website is a small, restrained example of that API at work: its root element carries the `--theme-ui-colors-*` custom properties, which are the Theme UI color-mode variables.

The measured page is almost monochrome. A thin top bar holds the wordmark "Theme UI" at left and, at right, a "Search the docs" field, a GitHub link and a "Light" colour-mode toggle. Beneath it, a large generative illustration of connected circles joined by lines, in three blues and a purple (the "design graph"), fills the hero, with a round black "UI" badge at its lower-left corner. The h1 sits under the illustration with a paragraph and two chunky black buttons, "Documentation" and "GitHub". Then a row of third-party status badges, "Create your theme" and "Style your UI" sections that each show a code sample on a pale grey panel, three short feature columns (Ergonomic, Themeable, Constraint-based) and a grid of user testimonials.

The voice is developer-to-developer: short descriptive claims and quotes such as "Took me approximately 5 minutes to fall in love with Theme UI." The headings are heavy and plain; the code samples do most of the explaining.

## Colors

The palette follows the library's own spec keys, and the measured values come from the page's `:root` variables. `canvas` is `#ffffff` (`--theme-ui-colors-background`) and `ink` is `#000000` (`--theme-ui-colors-text`). `page-largest` `#f6f6f6` is `--theme-ui-colors-muted` and fills the code panels and the search field, the largest non-white area.

`primary` is `#3333ee` (`--theme-ui-colors-primary`), the measured hover fill of the black buttons; the hero illustration and the code samples also use blue and purple tones, but their exact fills were not measured. `secondary` `#111199` (`--theme-ui-colors-secondary`) and `accent` `#660099` (`--theme-ui-colors-accent`) are the other two theme colours defined on the page root. `gray` `#777777` is `--theme-ui-colors-gray`; `highlight` `#efeffe` is `--theme-ui-colors-highlight`. The page's code sample for the theme itself lists `text: '#000'`, `background: '#fff'` and `primary: '#33e'`, which is the same primary in shorthand.

A `#0000ee` text colour was measured on a few characters; that is the browser's default link colour and is not a brand colour, so it has no token. A darker overlay variable (`--theme-ui-colors-darken`, 25% black) also exists but has no role on this page.

## Typography

Text is the system font stack (system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, sans-serif); the code sample in the page shows the theme's body font as 'system-ui, sans-serif' and its heading font as '"Avenir Next", sans-serif', but the measured headings resolve to the system stack. An Inter face at weight 900 is also loaded by the page (its role was not determined).

Measured roles: `display`, the h1, is 24px on 30px, weight 800 (20px on 25px at the 390px mobile width, `display-mobile`). `heading`, the section h2s like "Create your theme", is 32px on 40px, weight 800. `body` is 16px on 24px, weight 400, and `button` is 16px on 24px, weight 700. `nav` is 14px on 21px, weight 700, and the search `input` is Arial 14px on 21px, weight 700. Code blocks are set in a monospace face on the pale grey panel.

Notably the h1 is smaller than the section h2s; the hierarchy is carried by the illustration and weight, not by size.

## Layout

A single left-aligned content column of roughly 750px of text, bounded by the illustration's wider footprint, on a wide white page. The nav is full width with 0px 16px padding. The three feature columns share a row; the testimonial quotes flow in a three-column grid that leaves empty cells at the end. Sections are separated by generous vertical space, not by rules.

The spacing values measured are 4px, 8px, 16px, 32px and 128px (`s1` to `s5`), which correspond to powers of two and match the shape of a constraint-based space scale. The 128px step is the large gap between sections.

## Elevation & Depth

None. The extraction found no box shadows and no border colours. Code panels are separated from the page only by the `#f6f6f6` fill; buttons are solid black; the illustration is flat.

## Shapes

Measured radii: 2px (`xs`, nav links), 4px (`sm`, the search input and code panels) and 6px (`md`, the buttons). The stylesheet corpus also holds 3px and 16px values. The "UI" badge on the illustration is a circle and all illustration nodes are circles joined by straight lines.

## Components

**Primary button** ("Documentation", "GitHub"): fill `ink` `#000000`, white label at 16px/24px weight 700, 6px radius, 16px padding, 56px tall; hover fill `primary` `#3333ee` with the same white label.

**Nav link**: `ink` text at 14px weight 700, 2px radius, 8px padding. **Nav bar**: white, 0px 16px padding.

**Search input**: fill `#f6f6f6`, `ink` text, Arial 14px weight 700, 4px radius, 8px padding, 39px tall.

**Code panel**: `#f6f6f6` fill, monospace text in blue and purple syntax tones (exact values not measured).

**Badges** (stars, npm version, bundle size, license, chat, tests): third-party shields images; they are not part of the page's own system and are not tokenised.

**Feature column and testimonial**: bold heading or quote, regular text, no container.

## Design System Architecture

Theme UI is itself the design system: the library documented at https://theme-ui.com and developed at https://github.com/system-ui/theme-ui (both opened). The README describes it as built on the System UI Theme Specification with Emotion for scoped styles, with `theme-ui` as the main package and `@theme-ui/core` as a lighter alternative. The specification page https://theme-ui.com/theme-spec lists the scale keys (including `colors`, `fonts`, `fontSizes`, `space`, `radii` and `shadows`) and the colour keys `text`, `background`, `primary`, `secondary`, `accent`, `highlight` and `muted`; the page's measured variables use exactly those names. The base preset's own scales (https://github.com/system-ui/theme-ui, `packages/preset-base`, opened as raw source) give `space` as 0, 4, 8, 16, 32, 64, 128, 256 and 512, which the 4, 8, 16, 32 and 128 spacing values above fit, but this site defines its own colours (the preset's primary is a different blue), so no preset values were adopted as tokens. The `dsUrl` is the same site and uses this system; components on the docs home page were measured directly rather than from the library's demo pages.

## Do's and Don'ts

- Do keep the canvas white and the ink pure black, and hold colour to the theme keys primary, secondary, accent.
- Do use black buttons that flip to `#3333ee` on hover.
- Do set headings at weight 800 and let weight, not size, carry hierarchy.
- Do put code on a flat `#f6f6f6` panel with 4px corners.
- Don't add shadows or borders; the page has none.
- Don't rely on the browser-default `#0000ee` link blue.
- Don't tokenise third-party badge colours.
- Don't introduce spacing outside the 4, 8, 16, 32, 128 steps.

## Responsive Behavior

Measured at 1280px and 390px. The h1 goes from 24px to 20px at mobile width. The docs navigation lists many sections in a sidebar that is not visible on the home page. The illustration is an SVG that scales with its container. Further breakpoints were not measured, so none is stated.

## Iteration Guide

1. White canvas, black ink, `#3333ee` as the single accent on interaction.
2. System-font headings at weight 800 (32px/40px for sections, 24px/30px for the page title), body 16px/24px.
3. Buttons 56px tall, 16px padding, 6px radius, black with white text, `#3333ee` hover.
4. Code and inputs on `#f6f6f6` with 4px radius.
5. Space in powers of two: 4, 8, 16, 32, 128.
6. Run `node web/scripts/verify-designs.mjs --slug=theme-ui` after editing.
