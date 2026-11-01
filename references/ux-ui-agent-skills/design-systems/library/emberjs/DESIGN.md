---
version: alpha
name: Ember.js
category: "Frontend Frameworks"
description: "Ember.js (emberjs.com) is built from the official ember-styleguide: brand orange #E04E39 (PMS 7417C) buttons with 5px radius that hover to #cf2d20, a #1c1e24 charcoal hero and header, cool grey #f4f6f8 / #ebeef2 page bands, #42474f body text, and Inter var throughout — a weight-200 48px hero headline over 16px/27px body copy."
colors:
  canvas: "#f4f6f8"
  ink: "#42474f"
  primary: "#e04e39"
  on-primary: "#ffffff"
  gray-200: "#ebeef2"
  gray-900: "#1c1e24"
  gray-300: "#dce0e6"
  brand-hc-dark: "#cf2d20"
  gray-400: "#bec4cc"
  gray-600: "#6a707a"
  gray-800: "#2b2d34"
typography:
  display:
    fontFamily: "\"Inter var\", \"Inter web\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 48px
    fontWeight: 200
    lineHeight: 54px
  display-mobile:
    fontFamily: "\"Inter var\", \"Inter web\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 30.0064px
    fontWeight: 200
    lineHeight: 32.0068px
  heading:
    fontFamily: "\"Inter var\", \"Inter web\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 36px
    fontWeight: 400
    lineHeight: 45px
  subheading:
    fontFamily: "\"Inter var\", \"Inter web\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 27px
  body:
    fontFamily: "\"Inter var\", \"Inter web\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Inter var\", \"Inter web\", -apple-system, \"system-ui\", \"Segoe UI\", Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 1px
  sm: 3px
  md: 5px
  lg: 10px
  xl: 15px
spacing:
  s1: 5px
  s2: 8px
  s3: 9px
  s4: 12px
  s5: 15px
  s6: 24px
  s7: 27px
  s8: 30px
  s9: 36px
  s10: 54px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 24px 9px
    height: 44px
    boxShadow: rgb(43, 45, 52) 0px 0px 2px -1px, rgb(43, 45, 52) 0px 2px 9px -5px
  button-primary-hover:
    backgroundColor: "{colors.brand-hc-dark}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.brand-hc-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 24px 9px
    height: 44px
    boxShadow: rgb(43, 45, 52) 0px 0px 2px -1px, rgb(43, 45, 52) 0px 2px 9px -5px
  link:
    textColor: "{colors.brand-hc-dark}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.gray-900}"
    textColor: "{colors.on-primary}"
    padding: 0px 12px
  nav-link:
    textColor: "{colors.brand-hc-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    border: "2px solid #dce0e6"
  code-tabs:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 0, 0, 0.75) 0px 5px 15px -10px
  footer:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.gray-600}"
---

# Ember.js

## Overview

Ember.js presents itself as "A framework for ambitious web developers." The page at emberjs.com is long (8780px) and alternates dark and light bands. A charcoal header with the orange script "ember" wordmark and links (Docs, Releases, Blog, Community, About) runs into a charcoal hero: a large, very light-weight headline, a sentence describing Ember as "a productive, battle-tested JavaScript framework for building modern web applications", and two buttons — orange "Get started" and white "Read the full tutorial".

Below, a light grey band "Build with the teams that never stop shipping." shows a logo wall (Netflix, Intercom, Microsoft, Square, CrowdStrike, LinkedIn and others). "Batteries included" then walks through Build pipeline, Routing, Data layer, Testing, Performance and Easy upgrades, each paired with a large flat illustration: orange "e" pipes, a robot arm, a blueprint, sneakers, and cranes lifting a giant orange "e". A charcoal "The Ember Ecosystem" section shows a tabbed code example (Manage State, Authenticate, Translate, Deploy) and npm/TypeScript/Babel badges. A full-width orange band "A vibrant, welcoming community" introduces a photo grid of community events, followed by communication channels (Discussion forum, Discord community chat), resources, a charcoal "Start shipping today!" section with the hamster mascot, and a white footer.

The voice is warm and community-minded, and the illustrations are playful, using the brand orange throughout.

## Colors

Every colour on the page maps to a variable in the official ember-styleguide (`global.css`):

- **primary #e04e39** — `--color-brand`. The emberjs.com logos page says printed logos use "PMS 7417C" and "The hex value is #E04E39." It fills primary buttons and the community band, and appears in the illustrations.
- **brand-hc-dark #cf2d20** — `--color-brand-hc-dark`, the high-contrast dark orange used for links, secondary-button text and the measured hover fill of primary buttons.
- **gray-900 #1c1e24** — header, hero and the dark ecosystem / start-shipping sections.
- **canvas #f4f6f8** (`--color-gray-100`) and **gray-200 #ebeef2** — the light page bands; #f4f6f8 is the body background and also fills the channel cards.
- **ink #42474f** (`--color-gray-700`) — the most-read text colour, body copy on light bands.
- **gray-300 #dce0e6** — the second most-read text colour, used for body copy on charcoal bands, and the card border colour.
- **gray-400 #bec4cc** and **gray-600 #6a707a** — muted text; #6a707a is the footer text.
- **gray-800 #2b2d34** — the colour inside the button shadow.
- **on-primary #ffffff** — text on orange and charcoal, the secondary-button fill and the footer background.

The styleguide also defines blue #10aaff, lilac #7650f1, yellow #ffec64 and green #8be998 with light tints and status colours; they were not measured on the home page.

## Typography

The site uses **Inter var** (loaded as a 100–900 variable font) for everything, with SFMono-Regular for code. The styleguide's weight scale is `--font-weight-1: 200`, `--font-weight-2: 400`, `--font-weight-3: 600`, and the page uses exactly those three.

- **display** — Inter 48px / 200 / 54px, white on charcoal. The ultra-light hero is the signature typographic gesture. Mobile: 30.0064px / 200 / 32.0068px.
- **heading** — Inter 36px / 400 / 45px for section h2s ("Build with the teams that never stop shipping.", "Batteries included").
- **subheading** — Inter 20px / 600 / 27px for feature h3s ("Build pipeline", "Routing").
- **body** — Inter 16px / 400 / 27px.
- **button** — Inter 17px / 400 / 27px.

The styleguide documents a smaller base scale in rem (15px paragraphs, 19px h2, 25px h1, 30px display-1); the live home page measured larger values, which are what the tokens record. Inter is open-source, so no substitute is needed.

## Layout

The desktop page is 1280px wide. The hero content runs from x=154 to x=958, left-aligned. The styleguide sets `--container-width: 60.75rem` and spacing steps `--spacing-1` 8px, `--spacing-2` 16px, `--spacing-3` 24px, `--spacing-4` 40px, `--spacing-5` 56px, `--spacing-6` 64px. Measured gaps are dominated by 36px (32 uses), then 8px, 30px and 15px; paddings by 27px, 12px, 8px and 72px.

"Batteries included" is a zig-zag: each feature alternates text-left/illustration-right and illustration-left/text-right. The ecosystem section is two columns. The channels block is two cards side by side (the extractor recorded a maximum of two card columns), and resources below are three columns of links. Spacing tokens span 5px to 54px.

## Elevation & Depth

Elevation is minimal and consistent. Buttons share the styleguide's two-layer shadow `rgb(43, 45, 52) 0px 0px 2px -1px, rgb(43, 45, 52) 0px 2px 9px -5px` (6 uses), which gives a tight, slightly lifted edge. The tabbed code panel uses `rgba(0, 0, 0, 0.75) 0px 5px 15px -10px`. The styleguide also defines a sidebar shadow (`--es-sidebar-shadow`) for docs pages. Depth elsewhere comes from colour blocking — charcoal against pale grey against orange — and from the flat illustrations, which use simple shading.

## Shapes

Corners are small. Buttons use **md 5px** (`--radius: 0.3125rem`); cards use **lg 10px** (`--radius-lg: 0.625rem`, the most common radius with 21 uses); the code-tabs panel uses **xl 15px**, with its first tab rounded only at the top-left (15px 0px 0px). **sm 3px** and **xs 1px** appear once each. Logos and code badges sit in rounded squares. The overall impression is crisp rather than soft.

## Components

- **Primary button** (`.es-button`) — #e04e39 fill, white Inter 17px/400, 5px radius, 8px 24px 9px padding, 44px tall, two-layer gray-800 shadow; hover #cf2d20. Used for "Get started", "Learn about EmberConf", "Download and Get Started".
- **Secondary button** (`.es-button-secondary`) — white fill, #cf2d20 text, same size, radius and shadow. Used for "Read the full tutorial" and "Ready to use Ember?".
- **Header** — #1c1e24, white 16px/600 links with dropdown carets, 0px 12px padding, 90px tall.
- **Link** — #cf2d20 text with a translucent brand underline (a `linear-gradient` of rgba(224, 78, 57, 0.4)).
- **Channel card** — #f4f6f8 fill, 2px #dce0e6 border, 10px radius, icon, bold title and short description.
- **Code tabs** — dark panel, tabs Manage State / Authenticate / Translate / Deploy; the active tab #cf2d20 with white text, inactive tabs #dce0e6 text with a 1px #54565e border, 50px tall.
- **Footer** — white, #6a707a 16px text with 40px line height, link columns (Team, Sponsors, Security, Legal, Branding, Community Guidelines) and social links.

## Design System Architecture

Ember maintains an official, public design system: **ember-styleguide** (https://github.com/ember-learn/ember-styleguide), an Ember addon "intended to provide basic components for easier style coordination among the Ember family of websites", committed to WCAG 2.0 AA. Its `addon/styles/global.css` (https://raw.githubusercontent.com/ember-learn/ember-styleguide/master/addon/styles/global.css) defines the grey ramp `--color-gray-100` to `--color-gray-900`, brand colours (`--color-brand`, `--color-brand-hc-dark`, `--color-brand-hc-light: #ff5c44`, `--color-brand-40`), accent and status colours, the rem type scale, weights and spacing. Components ship as `es-` prefixed CSS (`components/es-button.css`, `es-card.css`, `es-banner.css`); `es-button.css` defines the padding, `--radius`, gray-800 shadow and `--color-button-bg-hover` hover used on the live page. Semantic aliases such as `--color-button-bg: var(--color-brand)` and `--color-card-bg: var(--color-gray-100)` were measured on emberjs.com.

Brand rules are on https://emberjs.com/logos/: the colour mark is for black or very light backgrounds (otherwise solid black or white), logos may not be altered, the Tomster lockup is the one mascot image for general use, and Ember, the logo and Tomster are trademarks of Tilde Inc.

## Do's and Don'ts

**Do**
- Use #e04e39 for primary actions and #cf2d20 for links and hover.
- Use the `--color-gray-*` ramp for all neutrals: #1c1e24 for dark bands, #f4f6f8 / #ebeef2 for light bands.
- Set hero headlines in Inter 200; use 600 only for small headings.
- Keep corners small: 5px buttons, 10px cards.
- Give buttons the two-layer gray-800 shadow from `es-button`.
- Use the colour logo only on black or very light backgrounds (logos page).

**Don't**
- Don't alter the Ember logo or combine it with other logos.
- Don't use Tomster or Zoey artwork beyond the permitted lockup without approval.
- Don't introduce fonts other than Inter and a monospace for code.
- Don't use bright accent colours from the styleguide (blue, lilac) as action colours on the marketing page.
- Don't use large radii or pills for buttons.

## Responsive Behavior

Measured at 390px: the h1 is Inter 30.0064px / 200 / 32.0068px (from 48px / 200 / 54px), the h2 25px / 400 / 50px (from 36px / 400 / 45px), body text 15px / 400 / 24px (from 16px / 27px), and the "Get started" button 15px / 24px. The 15px and 25px mobile values match the styleguide's `--font-size-base` and `--font-size-xl` comments. The desktop header shows two inline links in the extractor's count; the mobile header layout and menu behaviour were not measured. Intermediate breakpoints were not measured.

## Iteration Guide

1. Import the ember-styleguide variables or copy the `--color-*` ramp; never introduce new greys.
2. Canvas #f4f6f8, text #42474f; dark bands #1c1e24 with #dce0e6 text.
3. Buttons: `.es-button` recipe — #e04e39, 5px radius, 8px 24px 9px, gray-800 shadow, hover #cf2d20.
4. Headlines Inter 200 at 48px; sections 36px/400; feature titles 20px/600.
5. Cards: #f4f6f8, 2px #dce0e6 border, 10px radius.
6. Follow the logos page for any use of the wordmark or mascots.
