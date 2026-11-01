---
version: alpha
name: Netlify
category: "Product & SaaS"
description: "Netlify homepage netlify.com: white canvas with a #12181f dark hero, teal #32e6e2 pill buttons (360px radius) with dark labels, Figtree 800 at 64px, Instrument Sans body at 16px, Martian Mono code labels, hover #8efbf7."
colors:
  canvas: "#ffffff"
  ink: "#353a3e"
  primary: "#32e6e2"
  on-primary: "#12181f"
  surface-black: "#000000"
  link-blue: "#2e51ed"
  ink-strong: "#181a1c"
  ink-mint: "#defffe"
  ink-ice: "#e4f0fb"
  accent-sky: "#89ddff"
  hairline: "#ffffff33"
  surface-dark: "#12181f"
  surface-border: "#e9ebed"
  primary-hover: "#8efbf7"
  nav-bg: "#ffffffe6"
  card-border: "#ffffff4d"
typography:
  display:
    fontFamily: Figtree, system-ui, Helvetica, sans-serif
    fontSize: 64px
    fontWeight: 800
    lineHeight: 70.4px
  display-mobile:
    fontFamily: Figtree, system-ui, Helvetica, sans-serif
    fontSize: 40.8189px
    fontWeight: 800
    lineHeight: 44.9008px
  subheading:
    fontFamily: Figtree, system-ui, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
  body:
    fontFamily: "\"Instrument Sans\", system-ui, Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Figtree, system-ui, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 12px
  xl: 16px
  2xl: 30px
  3xl: 360px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.8px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 10px 17px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  card:
    textColor: "{colors.ink-mint}"
    rounded: "{rounded.2xl}"
    padding: 16px
    borderColor: "{colors.card-border}"
---

## Overview

netlify.com is the homepage of Netlify, titled "Push your ideas to the web | Netlify". The measured page is 1280px wide and 6,603px tall with 855 visible elements and `lang="en"`. Its hero line is "Push your ideas to the web" with the sub-copy "Create with AI or code, deploy instantly on production infrastructure. One platform to build and ship." A second section headline reads "Build your way. Ship on one platform."

The capture shows a white sticky header (translucent `#ffffffe6`) with the teal-dashed netlify wordmark, links Platform, Solutions, Developers, Resources (with chevrons) and Pricing, a search icon, Contact, Log in and a filled teal "Sign up" pill. The hero is a near-black navy block (`#12181f`) with the white headline at left, a teal "Start building" pill, a ghost "Request a demo" pill, the text "Add Netlify to your coding agent" and a mono code chip `fetch https://netlify.ai`. At the right is a dashed-frame line illustration with a smiling orange star mascot on a cloud, a browser window, a chart, a "Drop here" arrow and a plug. A white logo strip follows (ServiceTitan, Stack Overflow, Riot Games, Kubernetes, Figma, Meta).

The next band, tagged "HOW IT WORKS" in blue mono caps, carries the 64px headline and a three-card row of dark-teal tiles with rounded corners: "Start with code or AI", "Build fullstack apps" and "Go live everywhere", each with an interface vignette and a short caption beneath. A large rounded video panel with a mono "Build me an app" typed prompt, a play button and the Netlify wordmark closes the capture. A floating teal "Ask Netlify" chat button at the right is a chat control and is not documented as brand UI.

Imagery is illustrated line art, dark UI vignettes in teal and navy, and monochrome customer logos. Voice is direct and developer-oriented, with short imperatives and mono-set technical labels.

## Colors

Background areas by weight: `#ffffff` (9,421), `#000000` (832), `#2e51ed` (704), `#060b10` (703), `#12181f` (695), `#e9ebed1a` (230), `#ffffffe6` (94), `#32e6e2` (23), `#ffffff19`, `#ffffff0f`, `#f6f6f7`. Text colors by characters: `#353a3e` (1,497), `#ffffff` (811), `#181a1c` (339), `#defffe` (143), `#e4f0fb` (125), `#89ddff` (94), `#add7ff` (60), `#32e6e2` (59), `#2e51ed` (51), `#778089`, `#9da7b2`, `#c792ea` (35), `#e6ecf2`, `#5fb3ff`, `#12181f`, `#7fdbca`, `#5de4c7`.

- **Canvas `#ffffff`**, text **`#353a3e`** for body and **`#181a1c`** for headings (the h2 "Build your way" color).
- **Netlify teal `#32e6e2`** fills the Sign up and Start building pills; the label on it is `#12181f` (Start building) or `#181a1c` (Sign up). Hover brightens the fill and border to **`#8efbf7`** (`rgb(142, 251, 247)`, measured).
- **Navy `#12181f`** is the hero ground (also the on-primary label color), with `#060b10` as the deepest tone and `#000000` as a pure-black area.
- **Link blue `#2e51ed`** is the "HOW IT WORKS" label and link color.
- **Pale tints** `#defffe`, `#e4f0fb`, `#89ddff`, `#add7ff` and `#e6ecf2` are text on dark panels (the h1 is `#e6ecf2`).
- **Code colors** `#c792ea`, `#7fdbca`, `#5de4c7` and `#5fb3ff` appear in code snippet text only.
- **Hairlines:** `#ffffff33` (13 elements, on dark), `#e9ebed` (8, on light) and `#ffffff4d` on cards.

The `:root` exposes a large token set, among them `--ntl-button-primary-bg-color`, `--ntl-button-primary-text-color`, `--ntl-title-text-color`, `--ntl-tracking-tight`, `--ntl-card-border-color-hover`, `--ntl-neutral-700`, `--ntl-neutral-800`, `--ntl-teal-600`, `--ntl-teal-700`, `--ntl-pink-400`, `--ntl-gold-700`, `--ntl-red-900`, `--ntl-purple-100`, `--blue-600`, `--blue-900`, `--green-900`, `--pink-600`, `--purple-200`, `--purple-400`, `--gold-400`, `--color-text-default`, `--color-text-accent`, `--color-link-1`, `--color-bg-inverse`, `--color-info-border`, `--color-warning-border`, `--color-invalid-border`, `--page-content-max-width`, `--focus-outline-width` and `--border-width-heavy`.

## Typography

Three families carry the page: Instrument Sans (2,148 characters, loaded as a 100 to 900 variable font), Figtree (643, also variable 100 to 900) and Martian Mono (570, loaded at 400, 500 and 700), with ui-monospace for 9 characters. Weights by characters: 400 (2,565), 700 (348), 800 (243), 600 (153), 500 (61).

| Role | Family | Size / line | Weight |
| --- | --- | --- | --- |
| display (h1, h2) | Figtree | 64px / 70.4px | 800 |
| display-mobile | Figtree | 40.8189px / 44.9008px | 800 |
| subheading | Figtree | 24px / 26.4px | 700 |
| body | Instrument Sans | 16px / 24px | 400 |
| button | Figtree | 16px / 16px | 700 |

Other sizes by characters: 16px (2,304), 18px (368), 32px (218), 14px (143), 64px (103), 48px (89), 12px (77), 24px (59) and 11px (9, set at 0.5px letter spacing in mono caps such as "HOW IT WORKS"). Letter spacing is otherwise normal in measurement. Display headings are heavy (800), card titles 700, and body copy regular.

## Layout

The page is 1280px wide. Content runs close to the left and right margins visible in the capture, with full-width bands for the hero, logo strip and feature sections. Measured gaps: 12px (65 elements), 8px (10), 64px (6), 16px (6), 24px (5), 1px (4), 6px, 2.8px. Paddings: 16px (30), 12px (14), 8px (11), 4px (11), 24px (9), 48px (8), 32px (7), 10px (6). Buttons are 40px high with `10px 17px` padding. The site variable `--page-content-max-width` exists; its value was not measured.

## Elevation & Depth

Almost no shadows: a `color(srgb 0 0 0 / 0.25) 0px 4px 12px 0px` shadow was measured once and a fully transparent two-layer shadow once. Depth is built with dark tonal panels against white, 1px translucent borders (`#ffffff33`) on dark, and the translucent header.

## Shapes

Radii: 4px (19 elements), 6px (9), 360px (6), 50% (4), 16px (4), 12px (3), 2px (2), 30px (1), plus two partial radii (`4px 4px 0 0` and `0 0 6px 6px`). Buttons are fully round pills at 360px, large panels and cards use 16px and 30px, small chips 4px to 6px. The measured token set also lists a 9999px pill value from the generator.

## Components

- **Primary button (Sign up, Start building).** Teal `#32e6e2` fill and border, dark label, Figtree 700 at 16px, 360px radius, 40px high, `10px 17px` padding; hover `#8efbf7`.
- **Ghost button (Request a demo).** Translucent dark pill with teal text, on the hero.
- **Mono code chip.** Dark pill with a teal `fetch https://netlify.ai` command and a copy icon.
- **Navigation.** `#ffffffe6` bar with `#353a3e` text and chevron links.
- **Feature card.** Dark teal panel with a 16px radius, a `#ffffff4d` border, 16px padding and a vignette, with a 24px bold title below.
- **Section tag.** 11px Martian Mono caps in blue.
- **Video panel.** Large dark gradient panel with a typed mono prompt and a play button.

## Design System Architecture

No public Netlify brand or design-system page was opened or searched for. The shipped CSS shows a prefixed token system: `--ntl-*` variables for button, title, tracking, card border and neutral, teal, pink, gold, red and purple ramps (for example `--ntl-neutral-700`, `--ntl-teal-600`), semantic `--color-*` variables for text, link, background and status borders, and generic ramps such as `--blue-600` and `--purple-400`. Layout and accessibility variables include `--page-content-max-width`, `--focus-outline-width` and `--border-width-heavy`. Source: the measured root of https://www.netlify.com/. Values of most variables were not individually mapped to rendered elements.

## Do's and Don'ts

Do:
- Use teal `#32e6e2` for primary actions as 360px pills with dark labels and a brighter `#8efbf7` hover.
- Set headings in Figtree 800 at 64px, body in Instrument Sans 16px, labels and code in Martian Mono.
- Alternate white bands with navy `#12181f` bands and use pale tints for text on navy.
- Keep shadows minimal and lean on borders and tone.

Don't:
- Don't use the code-snippet purples and greens as UI colors.
- Don't document the floating "Ask Netlify" chat button as brand UI.
- Don't square off the buttons.

## Responsive Behavior

On the mobile pass the h1 and h2 drop from 64px to 40.8189px with a 44.9008px line height (the h1 is 326px wide and 90px high); the primary button and body copy keep 16px sizes (button Figtree 700, body 16px/24px). Breakpoints, nav collapse and card stacking were not measured.

## Iteration Guide

1. Choose a white or navy band; text `#353a3e` on white, `#e6ecf2` on navy.
2. Make actions teal pills (`#32e6e2`, hover `#8efbf7`).
3. Set type in Figtree for headings and buttons, Instrument Sans for copy, Martian Mono for tags and code.
4. Round panels at 16px and chips at 4px or 6px.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=netlify--<page> --url=<url> --force --no-motion`.
