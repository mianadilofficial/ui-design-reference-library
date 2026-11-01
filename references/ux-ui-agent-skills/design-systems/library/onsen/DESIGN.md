---
version: alpha
name: Onsen UI
category: "Design Systems"
description: "Onsen UI's site (onsen.io) fills its hero with a red-orange gradient (#ef3e29 fill, #f03b2a button) under white headlines, then drops to white and #fafafa sections with light-weight Helvetica Neue copy in grey (#666666), red section titles at 24px, square 3px uppercase buttons, and a phone mockup running the framework's own iOS-style components."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#f03b2a"
  on-primary: "#ffffff"
  surface-subtle: "#fafafa"
  hero-red: "#ef3e29"
  red-text: "#ff1a33"
  ink-muted: "#999999"
  link-blue: "#0088cc"
  ink-dark: "#333333"
  primary-hover: "#800d1a"
  text-input-bg: "#ffffffcc"
  text-input-text: "#e6351b"
  footer-bg: "#cdd3d4"
  ios-background: "#efeff4"
  ios-highlight: "#0076ff"
  ios-text: "#1f1f21"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 30px
    letterSpacing: 0.48px
  body:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 700
    lineHeight: 15px
    textTransform: uppercase
  nav:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 0px
  link:
    fontFamily: "\"Helvetica Neue\", Arial, sans-serif"
    fontSize: 12.75px
    fontWeight: 700
    lineHeight: 22.95px
  input:
    fontFamily: Arial
    fontSize: 13px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 3px
  sm: 5px
  md: 8px
  lg: 30px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 10px
  s4: 20px
  s5: 24px
  s6: 30px
  s7: 40px
  s8: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 64px
    borderColor: "{colors.canvas}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.red-text}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 64px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 4px 0px 30px
    height: 30px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
---

## Overview

The Onsen UI homepage (onsen.io) is the marketing site for an open-source framework for HTML5 hybrid and mobile web apps. Its first screen is a full-bleed red-to-orange gradient: a white headline ("The most beautiful and efficient way to develop HTML5 hybrid and mobile web apps."), two square buttons ("GET STARTED", "DOWNLOAD 2.12.8"), a GitHub star badge, a row of four framework tiles ("Libraries for framework users": AngularJS 1, Angular 2+, React, Vue) and, on the right, a large phone mockup showing a live demo list (Pull Hook, Dialogs, Buttons, Carousel). A caption beneath reads "Try it on your phone at onsen.io/demo".

Below the hero, the page switches to alternating white and `{colors.surface-subtle}` bands. Each band pairs an illustration or component sampler on one side with a red title and short grey paragraph on the other: "The fastest way to develop beautiful HTML5 hybrid and mobile web apps", "Native look and feel with lots of ready-to-use components and automatic styling", "Performance optimized for mobile", "Easy to learn". The illustrations are flat, light-grey line art with red and blue accents (a mountain with a dashed route, a stopwatch), and one band shows a sampler of the library's own buttons, switches, sliders and spinners in blue and teal, in both its iOS-style and Material-style looks.

The voice is friendly and promotional with technical specificity: "zero-time setup", "All animations ... have been tuned and optimized".

## Colors

- **Canvas `{colors.canvas}`** is white and the first body fill; **`{colors.surface-subtle}`** (a near-white grey) alternates with it down the page.
- **Hero red `{colors.hero-red}`** is the hero's main painted color, and the **primary `{colors.primary}`** (slightly different red) fills the "DOWNLOAD 2.12.8" button. White `{colors.on-primary}` is the text on both. The measured hover state is a deep maroon, `{colors.primary-hover}`.
- **Ink `{colors.ink}`** is the most-read text color, a mid grey used for long paragraphs; `{colors.ink-muted}` and `{colors.ink-dark}` are lighter and darker steps.
- **Red text `{colors.red-text}`** colors the section titles and the secondary "GET STARTED" label on its white button.
- **Link blue `{colors.link-blue}`** is used for navigation links in lighter contexts.
- **Footer `{colors.footer-bg}`** is a light blue-grey; the search field in the header uses a translucent white `{colors.text-input-bg}` with red text `{colors.text-input-text}`.
- **Framework colors**: `{colors.ios-background}`, `{colors.ios-highlight}` and `{colors.ios-text}` come from the Onsen UI default iOS theme (published in its theming guide as `--background-color`, `--highlight-color` and `--text-color`) and were also measured on the library's kitchen-sink demo. They describe the components, not the marketing page.

## Typography

The site sets everything in "Helvetica Neue" with an Arial fallback; a small amount of text (209 characters) uses Georgia. The page also loads webfont kits (proxima-nova and ff-enzo-web at several weights), but the measured body, button and heading text resolves to Helvetica Neue. Because Helvetica Neue is a system face on Apple platforms, Arial is the declared substitute.

- `{typography.display}`: 24px, weight 300, line-height 30px, letter-spacing 0.48px; this is the red section title style.
- `{typography.body}`: 15px, weight 300, line-height 24px, the grey paragraph style (light weight is dominant on the page).
- `{typography.button}`: 15px, weight 700, uppercase, line-height 15px.
- `{typography.nav}`: 15px, weight 400. `{typography.link}`: 12.75px, weight 700, line-height 22.95px, used on small white tile labels.
- `{typography.input}`: Arial 13px, 400, line-height 30px for the docs search field.

## Layout

At 1280px wide the page is 4,346px tall. Content sits in a centered column with generous side margins, and hero text left-aligns to the logo. The spacing scale is `{spacing.s1}` 4px, 6px, 10px, 20px, 24px, 30px, 40px and 50px, with 10px (paddings) and 30px the most frequent values. Section bands are tall (roughly 300px or more) with plenty of white space, and two-column text/illustration rows alternate sides.

## Elevation & Depth

Flat, with one dramatic exception: the phone mockup and the cards inside it sit on a shadow `rgba(0, 0, 0, 0.4) 0px 4px 10px 0px`. Elsewhere depth is created by color banding (red hero, white and grey sections).

## Shapes

Radius tokens: `{rounded.xs}` 3px (buttons, inputs), `{rounded.sm}` 5px, `{rounded.md}` 8px, `{rounded.lg}` 30px and `{rounded.pill}`. Hero buttons are rectangles with a 3px corner and a 2px white border. The demo cards in the phone use small corners; the framework tiles in the hero are plain squares.

## Components

- **button-primary**: `{colors.primary}` fill, `{colors.canvas}` uppercase 15px bold label, `{rounded.xs}`, 64px high, 2px white border; hover `{colors.primary-hover}`.
- **button-secondary**: `{colors.canvas}` fill, `{colors.red-text}` label, same shape and 64px height.
- **nav / nav-link / link**: white labels on the red hero; nav links in `{colors.link-blue}`.
- **text-input**: translucent white `{colors.text-input-bg}`, red text, `{rounded.xs}`, 30px high, padding 0px 4px 0px 30px for a search icon.
- **card**: white `{colors.ink}`-text panel with `{rounded.lg}`.
- **footer**: `{colors.footer-bg}` background with `{colors.ink}` text.

## Design System Architecture

Onsen UI is itself a UI framework, and the org documents it at https://onsen.io (the dsUrl https://onsen.io/v2 is a redirect page that states the page "has been moved" to the site root; the guide lives under /v2/guide/). The GitHub repository https://github.com/OnsenUI/OnsenUI describes an open-source, Web-Components-based framework with official bindings for React, Angular 2+, Vue and AngularJS 1.x, offering both flat (iOS) and Material (Android) styling and CSS-only components. The theming guide (https://onsen.io/v2/guide/theming.html) says the CSS components are written in cssnext (not Sass or Less), follow BEM naming (`__` for elements, `--` for modifiers), and are skinned through variables such as `--highlight-color: #0076ff` and `--background-color: #efeff4`; Material components use prefixed variables.

Does the homepage use it? The marketing chrome is styled by the site's own `/css/main.css` with Font Awesome; no `ons-*` elements appear in its HTML. The framework appears only inside the embedded phone demo (an iframe to the Vue kitchen-sink on onsenui.github.io) and in the component sampler artwork. So the design-system docs are real, but the homepage's values are its own: all frontmatter numbers for the page are measurements, and the framework theme colors are included only as labelled framework colors, measured on the kitchen-sink page and cited from the theming guide.

## Do's and Don'ts

- Do use one saturated red-orange field for the hero and white text on it.
- Do keep body copy light (300) and grey; use red only for titles and the key CTA.
- Do show the product in a phone mockup with real components.
- Do keep buttons square-cornered (3px) and uppercase.
- Don't add gradients or other hues to the white sections; use flat white and grey.
- Don't use the iOS blue `{colors.ios-highlight}` as the marketing accent; it belongs to the product demo.
- Don't introduce rounded pill buttons.

## Responsive Behavior

The extraction measured desktop (1280px) and a 390px mobile viewport; no mobile typography change was recorded, so the display size stays 24px. The hero's two-column arrangement (text left, phone right) and the four framework tiles are expected to collapse to a single column on narrow screens; this was not measured and should be checked on the live site. Buttons are 64px high, generous for touch.

## Iteration Guide

1. Paint the hero with `{colors.hero-red}` (or a gradient built around it), white headline, then 64px buttons in white and `{colors.primary}`.
2. Alternate `{colors.canvas}` and `{colors.surface-subtle}` bands below.
3. Set section titles at 24px weight 300 in `{colors.red-text}` and paragraphs at 15px/24px weight 300 in `{colors.ink}`.
4. Place a device mockup with a 4px/10px shadow to show the product.
5. Verify any new number against the live site; do not infer framework values for the marketing page.
