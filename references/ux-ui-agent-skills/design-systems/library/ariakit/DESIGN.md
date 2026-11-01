---
version: alpha
name: Ariakit
category: "Design Systems"
description: "ariakit.com, the docs and showcase for an unstyled React accessibility toolkit: near-white #fcfdfd canvas with cool gray #edf0f3 cards, black type in a Geist Sans variable face (72px/800 hero, 24px body), a single blue #007acc primary with 8px radius and soft shadow, and 4px to 16px radii on example surfaces."
colors:
  canvas: "#fcfdfd"
  page-largest: "#edf0f3"
  ink: "#000000"
  primary: "#007acc"
  on-primary: "#ffffff"
  primary-hover: "#0062a3"
  link-blue: "#006bb3"
  ink-soft: "#000000cc"
  ink-strong: "#000000e6"
  ink-muted: "#00000099"
  error: "#990008"
  hairline: "#0000001a"
typography:
  display:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 72px
    fontWeight: 800
    lineHeight: 72px
    letterSpacing: "-2.52px"
  display-mobile:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 36px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-1.26px"
  heading:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
  body:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  button:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  nav:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: __GeistSans_245d8d, __GeistSans_Fallback_245d8d
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 9px
  2xl: 12px
  3xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    height: 48px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 20px 25px -5px, rgba(0, 0, 0, 0.08) 0px 8px 10px -6px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-form:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 40px
  button-demo:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 1px 16px
    height: 40px
  chip:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.pill}"
    padding: 6px 14px
    height: 36px
  link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-soft}"
  nav-link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 0px 1px inset, rgba(0, 0, 0, 0.08) 0px 2px 5px 0px inset
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-soft}"
    rounded: "{rounded.3xl}"
    padding: 32px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-soft}"
    padding: 0px 16px
---

## Overview

The capture of https://ariakit.com is the home page of an accessibility-focused React toolkit, and it behaves like a product demo. A header with the Ariakit logo, a version button (v0.4.41) with a React icon, a "Browse ⌘K" command trigger, "Unlock Ariakit Plus", a notification bell with a blue dot and a theme toggle gives way to a very large centered headline: "Build accessible web apps with React", set in heavy black type. The subhead ("Open-source library with unstyled, primitive components, with a collection of styled examples that you can copy and paste into your apps.") underlines the words "unstyled", "primitive" and "styled examples" with thin colored gradient rules. Two actions follow: a blue "Get started" button and a plain "Explore components →" text link.

Below the hero is a 3 by 2 grid of rounded gray cards. Each previews a live-looking interface fragment (a delete-confirmation dialog, form controls, dropdowns, a search combobox with highlighted matches, URL-state filters in the Next.js App Router) with a bold title and a comma-separated component list ("Dialogs: Command Menu, Nested, Backdrop"); the last card is a large "59+ examples" count. The page continues with a "Stay tuned" newsletter strip (email field and a blue Subscribe button; "Join 1,000+ subscribers...") and a gray footer with Documentation, Updates and Community link columns, "Powered by Vercel" and "© 2017-2026 Diego Haz".

The look is crisp and tool-like: monochrome type, one blue, and the UI previews themselves doing the decorative work. Copy is plain and technical, explaining capability rather than selling it.

## Colors

Canvas is #fcfdfd, only slightly off white; the largest measured background is cool gray #edf0f3, used for the preview cards and the footer. Ink is #000000 for headings; paragraph text is black at 80% (#000000cc), chip labels black at 90% (#000000e6) and secondary text black at 60% (#00000099). Hairlines are black at 10% (#0000001a).

The primary blue is #007acc (the site's `--color-primary` variable), with white labels; it darkens to #0062a3 on the hero button's hover and to #006bb3 on the docs "Edit example" button, and #006bb3 also colors inline links such as "Read latest issue". A dark red #990008 appears for form error text in the form-controls preview. The Ariakit styling guide's example for a checked checkbox uses hsl(204 100% 40%), which is the same blue.

## Typography

The face is Geist Sans, loaded as a variable font covering weights 100 to 900 under the generated family name __GeistSans_245d8d (with a matching fallback). Hero display is 72px / 72px at weight 800 with -2.52px tracking; on mobile it falls to 36px / 40px at weight 500 with -1.26px. Body text is large: 24px / 36px weight 400, and card titles and section headings are 24px / 32px weight 500. Primary buttons use 18px / 28px weight 500, form buttons and inputs 16px / 24px weight 400, and navigation 14px / 20px weight 400. A mono stack, `--font-mono: Menlo, Consolas, Courier New, monospace`, is defined for code.

Extremely tight leading on the display style (1.0) and strong negative tracking give the headline a dense, poster-like presence; running text is generous, with 1.5 leading.

## Layout

The page uses a centered content column with named width variables (`--size-sm` 736px, `--size-md` 768px, `--size-lg` 832px, `--size-xl` 960px, `--size-2xl` 1024px, `--size-3xl` 1040px, `--size-4xl` 1104px, `--size-5xl` 1232px, `--size-wide` 1440px), a 56px header height (`--header-height`) and a 12px page padding. The card grid is three columns with equal gaps; each card is a tall preview over a two-line caption. Spacing values step 1, 2, 4, 6, 8, 12, 16, 20, 32 and 40px.

Whitespace around the hero is generous (the headline starts well below the 56px header), and the newsletter strip is separated by a thin full-width rule with an envelope icon centered on it.

## Elevation & Depth

Depth is crafted in layers on buttons and previews. The hero primary button carries a soft large shadow (rgba(0,0,0,0.1) 0px 20px 25px -5px, rgba(0,0,0,0.08) 0px 8px 10px -6px). White docs buttons use a composite inset ring with a light top highlight and a slight bottom edge (a 1px inset at 10% black, a 2px white highlight at 20%, a -1px bottom inset, and a 1px drop). Inputs are inset: a 1px inset ring at 15% black plus a 2px inset shadow at 8%. Preview cards sit on gray with subtle floating white mini-UIs; some cards fade out at the bottom with an inset gradient shadow in the card's own gray.

## Shapes

Radii climb in small steps: 2px (nav link focus), 4px, 6px (form buttons and inputs), 8px (primary and demo buttons), 9px, 12px, and 16px (cards), plus 9999px for chips and the version pill. The most common measured value is 8px.

## Components

**Primary button.** #007acc with white 18px/500 text, 8px radius, 48px high, 0px 32px padding, large soft shadow; hover darkens to #0062a3.

**Form button.** The "Subscribe" button: same blue, 16px text, 6px radius, 40px high, 0px 16px padding.

**Demo button.** On the docs button page the example "Button" is white with black 16px text, 8px radius, 40px high, 1px 16px padding, and the layered inset shadow described above.

**Chip.** Gray #edf0f3 pill with #000000e6 text, 36px high, 6px 14px padding; used for category links such as "Form controls".

**Text input.** White, 6px radius, 40px high, inset shadow, black 16px text; placeholder text is lighter.

**Cards.** #edf0f3, 16px radius, 32px padding, preview on top, bold 24px-class title below.

**Header and footer.** A light header with a version button and a command-palette trigger; a gray footer with three link columns.

## Design System Architecture

Ariakit is a component library rather than a themed design system. Its documentation at https://ariakit.com describes "unstyled, primitive components, with a collection of styled examples", and its repository at https://github.com/ariakit/ariakit describes a "toolkit with accessible components, styles, and examples" with packages @ariakit/react, @ariakit/solid (experimental) and @ariakit/tailwind (experimental); packages and non-Plus examples are MIT-licensed, Plus examples carry a separate license and the app is proprietary.

The styling guide (https://ariakit.com/guide/styling) states that the library works with plain CSS, CSS modules, CSS-in-JS and Tailwind, and exposes state selectors ([aria-checked], [data-active-item], [data-focus-visible], [data-enter]) plus layout variables such as `--popover-available-height` and `--dialog-viewport-height`. It offers no color tokens. The button docs page (https://ariakit.com/components/button) shows class names `ak-button` and `ak-button-default`.

The site's own look is therefore its de-facto theme, visible in its root variables: `--color-primary` (#007acc), `--color-white`, `--color-black`, `--background` (oklch(0.95 0.005 248.521)), `--font-mono`, the `--size-*` width scale, `--header-height` and `--page-padding`, together with Tailwind runtime variables (`--tw-ring-color` rgba(41,169,255,.5) and friends). The values in this file are measured from the home and button docs pages.

## Do's and Don'ts

- Do use one blue (#007acc) for the main action and darken it on hover.
- Do keep type black or black-with-alpha on near-white and cool gray.
- Do show real interface fragments as the imagery.
- Do give inputs and demo buttons layered inset shadows for tactility.
- Don't introduce a second brand hue; red #990008 is for errors only.
- Don't use pure white page backgrounds; the canvas is #fcfdfd with #edf0f3 surfaces.
- Don't use the library's selectors or classes as brand colors; the library itself is unstyled.

## Responsive Behavior

The extractor measured a mobile pass in which the 72px / 800 display style becomes 36px / 500 with 40px leading and -1.26px tracking. The site defines width steps from 736px up to 1440px and a 12px page padding; the layout beyond the type change was not inspected visually. Controls are 36px to 48px tall.

## Iteration Guide

1. Canvas #fcfdfd, surfaces #edf0f3, text #000000 with 80% black for paragraphs.
2. Geist Sans: 72px / 800 hero, 24px / 36px body, 24px / 500 card titles.
3. Primary button #007acc, white 18px/500, 8px radius, 48px high, soft large shadow; hover #0062a3.
4. Cards at 16px radius with a live UI preview; chips as 36px pills.
5. Use inset shadows on inputs and demo buttons; keep red only for errors.
