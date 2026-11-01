---
version: alpha
name: Radix UI
category: "Headless UI"
description: "Radix is a component system, not just a site - Radix Primitives, Radix Themes and Radix Colors. The marketing page sets a 78px adobeTextPro serif headline in near-black #1c2024 against white, with untitledSans body and buttons at 8px radius, while the Themes library itself ships indigo #3e63dd solid buttons at 4px radius on a 12-step, alpha-aware colour scale."

colors:
  canvas: "#ffffff"
  canvas-lavender: "#fdfcfe"
  ink: "#0007149f"
  primary: "#1c2024"
  on-primary: "#fcfcfd"
  accent-indigo: "#3e63dd"
  accent-indigo-hover: "#3358d4"
  accent-indigo-text: "#3a5bc7"
  accent-indigo-tint: "#edf2fe"
  link-alpha: "#002bb7c5"
  crimson-text: "#cb1d63"
  button-secondary-bg: "#0047f112"
  button-secondary-text: "#1f2d5c"
  slate-text: "#60646c"
typography:
  display:
    fontFamily: adobeTextPro, "adobeTextPro Fallback", serif
    fontSize: 78px
    fontWeight: 400
    lineHeight: 70.2px
    letterSpacing: "-3.9px"
  display-mobile:
    fontFamily: adobeTextPro, "adobeTextPro Fallback", serif
    fontSize: 38.5px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-0.77px"
  heading-docs:
    fontFamily: untitledSans, "untitledSans Fallback", -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 35px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-0.7px"
  subheading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI (Custom)\", Roboto, \"Helvetica Neue\", \"Open Sans (Custom)\", system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.15px"
  body:
    fontFamily: untitledSans, "untitledSans Fallback", -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.2px"
  button:
    fontFamily: untitledSans, "untitledSans Fallback", -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 26px
    letterSpacing: "-0.09px"
  button-themes:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI (Custom)\", Roboto, \"Helvetica Neue\", \"Open Sans (Custom)\", system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI (Custom)\", Roboto, \"Helvetica Neue\", \"Open Sans (Custom)\", system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 24px
    height: 48px
  button-themes-solid:
    backgroundColor: "{colors.accent-indigo}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-themes}"
    rounded: "{rounded.sm}"
    padding: 0px 12px
    height: 32px
  link:
    textColor: "{colors.link-alpha}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 0px 0px 0.5px
    height: 23px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
---

## Overview

Radix is the name of three things at once: Radix Primitives (unstyled accessible components), Radix Themes (a styled library built on them) and Radix Colors (a 12-step palette system). Its web presence therefore has two jobs, selling the whole family and demonstrating Themes, and the design reflects both. The home page measured here has a headline "Start building your app now" in a serif face (adobeTextPro, 78px, weight 400, line-height 70.2px, tracking -3.9px), which is unusual for a developer-tools brand and gives the page an editorial tone against the otherwise neutral interface. Body copy ("An open source component library optimized for fast development...") is set in untitledSans at 20px with a 28px line, and code is in soehneMono, the third family that appears in the measurements.

The capture shows the other half of the pitch: a top bar with the Radix logo, a "Made by WorkOS" lockup and a pill-shaped "Themes" tab (with Primitives, Icons and Colors beside it, and Documentation, Playground, Blog, a GitHub icon and a theme toggle on the right), over a soft lavender wash. On that wash sits a live gallery of Radix Themes components: a team-members list with an "Invite" button, a "Sign up" form, a company-card panel with a violet gradient card, a "Financial performance" KPI grid with large numerals and green and red delta badges, a notifications panel with switches, a "Recent activity" feed with avatars, and an "Invoice paid" confirmation. The marketing page is the product's own showcase, so its density is that of an application dashboard, not a landing page.

The voice is plain and technical. Labels are short ("Get started", "Playground"), and demo content is realistic, with names, dollar figures and dates, rather than lorem ipsum.

## Colors

Radix Colors defines a 12-step scale per hue, and the live page exposes the full set as CSS custom properties. Per the official documentation (https://www.radix-ui.com/colors/docs/palette-composition/understanding-the-scale): steps 1-2 are app and subtle backgrounds, 3-5 component backgrounds (normal, hover, pressed), 6-8 borders and focus rings, 9-10 solid backgrounds, and 11-12 text. Step 9 has the highest chroma; steps 11 and 12 are designed to meet APCA Lc 60 and Lc 90 on a step 2 background.

- **Canvas.** `{colors.canvas}` is the measured body background; the capture's dominant pixel colour is a faint lavender, which matches `{colors.canvas-lavender}` (the violet step 1 variable on the live page).
- **Ink.** `{colors.ink}` is a semi-transparent blue-black (alpha 0x9f) and is the most-read body colour on the home page. Because it is an alpha colour, it adapts to whatever surface it sits on, which is how Radix's scales are built.
- **Primary.** The home page call to action is the near-black `{colors.primary}` with `{colors.on-primary}` text. Inside Themes components the accent is indigo: `{colors.accent-indigo}` (indigo 9) as a solid fill, `{colors.accent-indigo-hover}` (indigo 10) on hover, `{colors.accent-indigo-text}` (indigo 11) as text and `{colors.accent-indigo-tint}` (indigo 3) as a soft background. The measured hover on the "Invite" demo button moves from `#3e63dd` to `#3358d4`.
- **Secondary button.** A translucent blue fill `{colors.button-secondary-bg}` with deep navy text `{colors.button-secondary-text}`. Links use the alpha blue `{colors.link-alpha}`.
- **Supporting.** `{colors.slate-text}` is slate step 11, the quiet text grey; `{colors.crimson-text}` is crimson step 11 as exposed on the page, and a pink-red appears on demo actions such as "Freeze".

## Typography

Three families are measured: adobeTextPro (display only), untitledSans (body, buttons, docs headings) and soehneMono (code). The Radix Themes components themselves use a system stack, `-apple-system, BlinkMacSystemFont, 'Segoe UI (Custom)', Roboto, 'Helvetica Neue', 'Open Sans (Custom)', system-ui, sans-serif`, as published in the Themes source (https://raw.githubusercontent.com/radix-ui/themes/main/packages/radix-ui-themes/src/styles/tokens/typography.css). That file also defines a nine-step size scale from 12px to 60px with matching line heights and slightly negative letter-spacing on larger steps. adobeTextPro, untitledSans and soehneMono are custom webfonts loaded by the site (I did not open a foundry or licence page for them, so their licensing is not stated here); in the stack their declared fallbacks are a generic serif and the system sans stack.

Roles: `{typography.display}` for the hero (`{typography.display-mobile}` at 390px width), `{typography.heading-docs}` for the docs page title measured on the Button page, `{typography.subheading}` for card headings, `{typography.body}` for lead paragraphs, `{typography.button}` for the hero buttons and `{typography.button-themes}` for Themes components (14px, weight 500). Tracking tightens as size grows, which keeps large text compact.

## Layout

The page is a wide application-style canvas: a three-column masonry of cards under a full-width top bar. Cards are separated by roughly equal gutters and sit on a lavender background whose purple and pink blooms are soft enough that text never competes. Inside a card, rows follow Themes' space scale; the frontmatter lists the pixel steps in use (`{spacing.s5}` 8px, `{spacing.s7}` 12px, `{spacing.s8}` 16px, `{spacing.s9}` 24px, `{spacing.s10}` 32px). The hero buttons are 48px tall with 24px side padding; Themes buttons are 32px tall with 12px side padding.

## Elevation & Depth

Elevation is subtle. Cards in the capture are white or near-white with a faint soft shadow and no hard borders; dividers inside lists are single hairlines in an alpha grey. The primary mechanism for depth is translucency: backgrounds such as `#ffffffb3` and `#f5f8ffcc` appear in the measured area list, so cards read as frosted glass over the lavender wash. Solid buttons add a gradient overlay on the Themes button (a faint dark gradient over the indigo fill, measured on the docs page) instead of a drop shadow.

## Shapes

Radix Themes derives every radius from a six-step scale multiplied by a `--radius-factor`. From the published radius token file (https://raw.githubusercontent.com/radix-ui/themes/main/packages/radix-ui-themes/src/styles/tokens/radius.css) the base steps are 3, 4, 6, 8, 12 and 16px, and the factor is 0 for none, 0.75 for small, 1 for medium, and 1.5 for large and full. The frontmatter keeps the steps that were measured: `{rounded.xs}` for inputs, `{rounded.sm}` for Themes buttons, `{rounded.md}`, `{rounded.lg}` for the hero buttons and cards, `{rounded.xl}` for larger panels and `{rounded.pill}` for the "Read about Radix Themes 3.0" announcement pill and the active "Themes" tab.

## Components

- **Hero primary.** `{components.button-primary}`: near-black, 18px/500 label, 48px tall, 8px radius.
- **Hero secondary.** `{components.button-secondary}`: translucent blue with navy text, same size.
- **Themes solid button.** `{components.button-themes-solid}`: indigo fill, white 14px label, 32px tall, 4px radius, measured on the Button documentation page at https://www.radix-ui.com/themes/docs/components/button.
- **Cards.** `{components.card}`: white, 8px radius, with a title, a muted description and a footer of actions.
- **Link and input.** `{components.link}` is the 14px alpha-blue link; `{components.text-input}` is a compact field with a 3px radius.
- **Gallery parts.** Avatars, switches, delta badges, a tab strip and a dialog with a close icon are all Themes components; the capture shows them in their default light appearance.

## Design System Architecture

Radix publishes its system openly. Primitives live at https://www.radix-ui.com/primitives, Themes docs at https://www.radix-ui.com/themes/docs (components, theme, radius, typography and colour pages), Colors at https://www.radix-ui.com/colors, and the token CSS in the radix-ui/themes GitHub repository. Theme configuration is declarative: a Theme wrapper takes accent colour, gray colour, radius and scaling, and the CSS variables (`--radius-1..6`, `--font-size-1..9`, `--space-*`, `--indigo-9` and so on) follow. The home page loads the same variables, which is why 12-step values for dozens of hues are readable from the page's root.

## Do's and Don'ts

Do use step 9 for solid fills and steps 11-12 for text. Do keep the hero serif large and tightly tracked. Do pair translucent surfaces with the lavender wash. Do use 4px radius on Themes buttons and 8px on hero buttons.

Don't set body copy in the serif. Don't use pure grey where an alpha-blue ink is available. Don't mix accent colours inside a single component set. Don't add heavy shadows; depth is translucency and hairlines.

## Responsive Behavior

The extraction measured a 390px mobile view: the hero headline drops from 78px to `{typography.display-mobile}` (38.5px, line-height 40px, tracking -0.77px), roughly halving while keeping the same serif and weight. Themes scales through its `--scaling` multiplier, per the typography and radius tokens, so spacing and type scale together. Details of how the three-column gallery stacks on mobile were not captured in this pass.

## Iteration Guide

Start from the scale: pick an accent hue, use step 9 for the solid fill and 10 for hover, and take text from step 11. Keep hero typography as is, and use the Themes button spec for in-product actions. When adding a surface, choose white or a translucent tint and no shadow. Re-measure any new component page with the extractor before adding a token.
