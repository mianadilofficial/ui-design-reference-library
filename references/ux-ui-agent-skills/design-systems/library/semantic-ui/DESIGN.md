---
version: alpha
name: Semantic UI
category: "Frontend Frameworks"
description: "Semantic UI, a CSS and jQuery component framework whose site and docs are set in Lato 14px/16px on white, with the framework's #2185d0 primary blue, #1b1c1d black, #e0e1e2 default grey buttons, rgba(34,36,38,0.15) hairlines, 4px button radii and a dark-to-warm gradient hero carrying white outlined buttons."

colors:
  canvas: "#ffffff"
  page-body: "#545454"
  ink: "#000000de"
  primary: "#2185d0"
  on-primary: "#ffffff"
  surface-subtle: "#f2f3f5"
  surface-black: "#000000"
  ink-grey: "#858188"
  ink-code-teal: "#008c79"
  ink-placeholder: "#00000066"
  ink-secondary-button: "#00000099"
  link: "#4183c4"
  hairline: "#22242626"
  black: "#1b1c1d"
  red: "#db2828"
  green: "#21ba45"
  orange: "#f2711c"
  yellow: "#fbbd08"
  teal: "#00b5ad"
  button-grey-bg: "#e0e1e2"

typography:
  display:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 50.4px
  display-mobile:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 24.5px
    fontWeight: 400
    lineHeight: 29.4px
  heading:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33.4286px
  subheading:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25.7143px
  docs-title:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
  docs-heading:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
  body:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  body-docs:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
  button:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  button-docs:
    fontFamily: Lato, "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
  input:
    fontFamily: sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px

rounded:
  xs: 2px
  sm: 3px
  md: 4px
  pill: 9999px

spacing:
  s1: 2px
  s2: 3px
  s3: 7px
  s4: 10px
  s5: 11px
  s6: 11.79px
  s7: 12.57px
  s8: 13px
  s9: 13.93px
  s10: 14px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12.5714px 24px
    height: 41px
    boxShadow: rgba(34, 36, 38, 0.15) 0px 0px 0px 0px inset
  button-default:
    backgroundColor: "{colors.button-grey-bg}"
    textColor: "{colors.ink-secondary-button}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12.5714px 24px
  button-black:
    backgroundColor: "{colors.black}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 15.7143px 30px
  button-docs-red:
    backgroundColor: "{colors.red}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.md}"
    padding: 11px 21px
    height: 36px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-black}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 7px
    height: 38px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 14px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(34, 36, 38, 0.15) 0px 1px 2px 0px
---

## Overview

Semantic UI describes itself as "a development framework that helps create beautiful, responsive layouts using human-friendly HTML" (homepage, version 2.5.0). The homepage opens on a tall hero: a dark wash that moves from a deep plum at the top to a warm brown at the bottom, a small `2.5.0` version pill in `#1b1c1d`, the title "Semantic UI" in white Lato 42px, the line "User Interface is the language of the web", and two white-outlined buttons, "Get Started" and "New in 2.4". The measured hero colours are not tokens here because they are a photographic gradient; only the white text and outline carry over.

Below the hero the page turns white and quiet: a device mock-up (phone, tablet, laptop) showing the docs, then the section "Design Beautiful Websites Quickly", then alternating two-column sections — "Concise HTML", "Intuitive Javascript", "Simplified Debugging" — each pairing a short text column with a framed code sample that has a small black "Run Code" tab. The homepage claims "3000+ Theming Variables", "50+ UI Components" and "5000+ Commits", is "Designed with em for responsive sizing" and is MIT licensed.

The copy voice is plain and instructional. Section titles are noun phrases; supporting text is two or three short sentences. The design is a product-documentation aesthetic: white canvas, thin hairlines, small grey UI components, code in Monaco, and one blue.

## Colors

The framework's own palette is published in its default theme file `site.variables` (https://github.com/Semantic-Org/Semantic-UI, `src/themes/default/globals/site.variables`), which was opened and read. The values below are cross-checked against the live page.

- **Canvas** `#ffffff` — dominant page background (17,834 area units on the homepage).
- **Primary** `#2185d0` — `@primaryColor: @blue` in the theme file, and the fill of the "See Layout Examples" and "Get Started Now" buttons.
- **Link** `#4183c4` — `@linkColor` in the theme file; measured on links such as "BEM" and "SMACSS" in the "Concise HTML" section.
- **Ink** `#000000de` — rgba(0,0,0,0.87), `@textColor` in the theme file and the most-read text colour (2,438 characters).
- **Page body** `#545454` — `@lightBlack` in the theme file, the body-text role measured on the homepage.
- **Black** `#1b1c1d` — `@black` / `@secondaryColor`, used for the version pill and the "Sign-up" button.
- **Ink grey** `#858188`, **ink placeholder** `#00000066` and **ink secondary button** `#00000099` — secondary text, placeholder text and the default grey button label.
- **Surface subtle** `#f2f3f5` and **surface black** `#000000` — a light grey band and the dark areas of the page.
- **Hairline** `#22242626` — rgba(34,36,38,0.15), `@borderColor` in the theme file; the dominant border on cards, inputs and code frames (23 uses).
- **Button grey** `#e0e1e2` — the default button background (`@backgroundColor` in `button.variables`), used on "Theming Guide".
- **Named hues** from the theme file and measured on the button docs page: red `#db2828`, green `#21ba45`, orange `#f2711c`, yellow `#fbbd08`, teal `#00b5ad`. The homepage "Donate Today" button is teal.
- **Code teal** `#008c79` — the syntax colour for attribute values in the code samples (222 characters).

The theme file also defines olive `#B5CC18`, violet `#6435C9`, purple `#A333C8`, pink `#E03997`, brown `#A5673F` and grey `#767676`, which are not reproduced as tokens here.

## Typography

One family, **Lato** (with fallbacks Helvetica Neue, Arial, Helvetica, sans-serif — the theme file's `@pageFont` and `@headerFont`), carries all prose; **Monaco** is used for code (711 characters measured). Lato was designed by Łukasz Dziedzic in 2010, published by tyPoland, and is released under the Open Font License (source: latofonts.com, opened).

The homepage scale: h1 42px / 50.4px at weight 400 (white on the hero), section h2 26px / 33.4286px, h3 20px / 25.7143px, body 16px / 25.6px, buttons 16px at weight 700. On a 390px viewport the hero h1 is 24.5px / 29.4px. In em terms (the theme's `@emSize` is 14px) the desktop h1 is 3em and the mobile h1 is 1.75em; that is arithmetic on the measured values, not a published rule.

The docs pages use the framework's own defaults: `@fontSize` 14px, `@lineHeight` 1.4285em, headings bold (`@headerFontWeight: @bold`) with `@h1` 28px (2rem on a 14px base), `@h2` 24px and `@h3` 18px. The button docs page confirms this: h1 "Button" is 28px / 700, h2 "Types" is 24px / 700, body 14px / 400 and buttons are 14px / 700. Buttons are not uppercased (`@textTransform: none`).

## Layout

The homepage is 7,426px tall at 1280px, centred text for the hero and the "Design Beautiful Websites Quickly" block, then a two-column grid (text left, code right) separated by hairline rules. The button docs page is longer, at 11,459px. The top bar has a green "S" logo tile, a "Menu" button with a hamburger icon, "Post" and "Star" social buttons and a language selector.

Padding values most common on the button docs page: 11px (186 uses), 21px (144), 16px, 6px and 28px; the homepage uses 14px (60), 21px (29) and 11px (22). The non-integer values (12.5714px, 15.7143px) suggest em-based padding; the button theme file sets `@horizontalPadding: 1.5em`, and 24px is 1.5 times 16px.

## Elevation & Depth

Elevation is minimal and drawn with 1px borders and faint shadows. The most common measured shadow is an inset 1px transparent ring plus a zero inset of `rgba(34, 36, 38, 0.15)` — the button's "border box" and "shadow" layers, effectively invisible until a state changes. Cards and code frames use `rgba(34, 36, 38, 0.15) 0px 1px 2px 0px` (10 uses on the homepage) with a hairline border. Coloured buttons gain a 1px inset ring of their own colour (for example `rgb(33, 133, 208) 0px 0px 0px 1px inset`), and outlined buttons use a 2px inset ring (`rgba(255, 255, 255, 0.5) 0px 0px 0px 2px inset` on the docs page; white on the hero). On hover the hero "Get Started" button inverts: the transparent fill with white text becomes white with `rgba(0, 0, 0, 0.8)` text; "Menu" gains a `rgba(255, 255, 255, 0.08)` fill; the version pill lightens from `#1b1c1d` to `#27292a`.

## Shapes

Radius is a single value: 4px (`@defaultBorderRadius`) on 52 homepage elements and 126 on the docs page, with 3px (4 and 6 uses) and 2px (one use) for small inputs. Grouped buttons and segmented controls round only their outer corners (for example `4px 0px 0px 4px` on the first button of a group and `0px 4px 4px 0px` on the last). A few elements use very large radii (7,000px on the homepage, 140px on the button docs page), represented here by the pill token.

## Components

- **Primary button** — `#2185d0` fill, white Lato 16px/700 label, 4px radius, padding 12.5714px 24px, 41px tall on the homepage.
- **Default button** — `#e0e1e2` fill with a `rgba(0,0,0,0.6)` label (`@textColor` in `button.variables`; measured as `#00000099`), same padding.
- **Black button** — `#1b1c1d` fill, white label, padding 15.7143px 30px ("Sign-up").
- **Coloured buttons** — red `#db2828`, orange `#f2711c`, yellow `#fbbd08`, green `#21ba45`, teal `#00b5ad`; the docs page sets them at 14px/700, padding 11px 21px, 36px tall. Brand-colour social buttons (YouTube `#ff0000`, Google Plus `#dd4b39`) are in the same set.
- **Hero outline buttons** — transparent fill, white 2px ring, white label, 51px tall, 4px radius.
- **Segmented button group** — three equal tabs ("One", "Two", "Three") on `#e0e1e2`, the active one a darker grey.
- **Input** — white fill, 14px sans-serif text, 2px radius, 7px padding, 38px tall, hairline border.
- **Card** — white, 4px radius, 14px padding, hairline border and a 1px/2px soft shadow.
- **Code frame** — Monaco text with a teal for values and a small black "Run Code" tab.

## Design System Architecture

Semantic UI is itself a design system, so the architecture is documented by the project. The theming guide (https://semantic-ui.com/usage/theming.html, opened) describes three inheritance levels — the default theme, a packaged theme chosen per component in `theme.config` ("Packaged themes are applied per component, and not globally"), and a site theme in `src/site` — with `site.variables` holding sitewide defaults such as colours and fonts, per-component `.variables` files overriding only what differs, and `.overrides` files for extra CSS. Hover, active and focus states are derived by adjusting the saturation and lightness of colour variables, so a palette change cascades. The source is on GitHub at https://github.com/Semantic-Org/Semantic-UI; the raw files `src/themes/default/globals/site.variables` and `src/themes/default/elements/button.variables` were read for the tokens above (`@primaryColor`, `@black`, `@red`, `@green`, `@fontName: 'Lato'`, `@emSize: 14px`, `@defaultBorderRadius` 4px, `@borderColor`, `@backgroundColor: #E0E1E2`).

Naming is the system's signature: classes read as natural-language phrases (`ui three buttons`, `ui active button`, `ui fluid dropdown`), as shown in the homepage's "Concise HTML" sample. Components were measured on the live docs page for buttons at https://semantic-ui.com/elements/button.html.

## Do's and Don'ts

Do:
- Use Lato at 14px for UI and 16px for marketing copy, bold for headings and buttons, regular for display.
- Keep buttons at 4px radius with sentence-case labels and the em-based padding.
- Use `#2185d0` for the single primary action and hairlines `rgba(34,36,38,0.15)` for separation.
- Name components with noun-and-modifier class phrases.
- Express colour variants through the named palette (red, orange, yellow, green, teal …).

Don't:
- Uppercase button labels; the theme sets `@textTransform: none`.
- Use heavy shadows; the framework's card shadow is `0 1px 2px` at 15% opacity.
- Mix more than one corner radius on standalone buttons.
- Apply the hero gradient to document pages; the docs are white.

## Responsive Behavior

Two viewports were measured, 1280px and 390px. On the 390px viewport the hero h1 drops from 42px to 24.5px (line height 29.4px). The homepage states the framework is "Designed with em for responsive sizing", and the theme file computes component sizes from `@emSize` (for example `@h1` is 28/14 rem), so scaling the root size scales every component. Specific breakpoints were not measured and are not stated here.

## Iteration Guide

1. Start from `#ffffff`, text `#000000de` and one blue `#2185d0`; add the named hues only for state or category.
2. Set Lato at 14px for the interface, 16px / 25.6px for marketing paragraphs, 26px for section titles and 42px for the hero.
3. Build buttons with 4px radius, bold labels, padding 12.5714px 24px (1.5em horizontal) and the 1px inset ring that matches the fill.
4. Frame content with `rgba(34,36,38,0.15)` hairlines and the 1px/2px card shadow.
5. To retheme, change variables in `site.variables` and let hover/active states derive.
6. Re-run the gate after every colour or size added.
