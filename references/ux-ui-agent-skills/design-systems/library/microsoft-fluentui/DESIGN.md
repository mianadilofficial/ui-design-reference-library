---
version: alpha
name: Microsoft Developer
category: "Developer Tools & IDEs"
description: "Captured on developer.microsoft.com (the Microsoft Developer home, not the Fluent UI docs): a near-white canvas (#fefefe) fading to pale blue (#f4fafd), navy ink (#17253d) and heading ink (#0e1726), deep Azure-blue pills (#005597) and a Microsoft-blue action (#0078d4), Segoe UI Variable Display at 50px/52px for the H1, 16px Segoe UI Variable Text body, and soft 24px-radius cards over a 200px-radius pill control."
colors:
  canvas: "#fefefe"
  page-body: "#f7f7f7"
  page-largest: "#f4fafd"
  ink: "#17253d"
  primary: "#005597"
  on-primary: "#ffffff"
  ink-heading: "#0e1726"
  ink-accent: "#2a446f"
  ink-black: "#000000"
  hairline: "#e6f2fb"
  accent-blue: "#0078d4"
  nav-text: "#262626"
  footer-bg: "#f2f2f2"
  footer-text: "#616161"
typography:
  display:
    fontFamily: "\"Segoe UI Variable Display\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 50px
    fontWeight: 500
    lineHeight: 52px
    letterSpacing: "-1.25px"
  heading:
    fontFamily: "\"Segoe UI Variable Display\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.36px"
  subheading:
    fontFamily: "\"Segoe UI Variable Display\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: 0.96px
    textTransform: uppercase
  body:
    fontFamily: "\"Segoe UI Variable Text\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.48px"
  button:
    fontFamily: "\"Segoe UI Variable Text\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: "-0.3px"
  link:
    fontFamily: "\"Segoe UI Variable Text\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: "-0.48px"
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 200px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 8px 24px
    height: 40px
  button-secondary:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 44px
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.nav-text}"
    padding: 0px 64px
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.12) 0px 0px 2px 0px, rgba(0, 0, 0, 0.14) 0px 2px 4px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-text}"
---

## Overview

An important caveat first: the page measured for this entry is the Microsoft Developer home (developer.microsoft.com/en-us/, title "Microsoft Developer"), not a Fluent UI documentation page. Its markup uses Microsoft's universal header classes (`uhf-*`) and a "reimagine" site bundle, and it does not use `fui-` or other Fluent UI component classes, so the values below describe the Microsoft Developer site's own look. Fluent UI itself is described, without taking values from it, under Design System Architecture.

The page opens with the Microsoft four-square logo and "Developer" wordmark in a thin white header, followed by short nav items (Products, Languages, Hubs, Blog, Events, Documentation, Community, Changelog) and "All Microsoft" at right. At the time of capture a purple announcement banner about Windows and agents sat under the header with a close button; it is a dismissible promotion and is not treated as part of the brand layout. The hero is a clean light surface with a tiny blue eyebrow ("MICROSOFT DEVELOPER"), a 50px headline "Connect, code, and grow", a two-line description, and a 3D render of translucent purple and grey cubes at the right.

Below, a tab row (Featured products, News and updates, Languages, Communities, Hubs, Developer story, Blogs, Events, Learn) sits above a pale-blue band with an eyebrow, heading "The tools you love – any platform and any language", a row of product pills (Azure selected in deep blue; GitHub, Microsoft 365, Visual Studio, Windows in tinted blue), and three rounded white cards with photography, a title, a short paragraph and a small blue chevron-square link. A dark carousel card promotes a GitHub event with a "Register now" button; a "Discover what's new" section carries an outlined "See the changelog" button and two news cards. A grey footer follows.

The tone is confident, plain and product-forward: short imperative links ("Visit docs", "Explore code", "Register now"), eyebrows in uppercase, and imagery that mixes photography, UI screenshots and colourful illustration.

## Colors

- **Canvas (#fefefe)** is the hero surface; **page-largest (#f4fafd)** is the pale blue band behind the product section and the largest measured background area; **body grey (#f7f7f7)** is the body background beneath them.
- **Ink (#17253d)** is the navy most-read text colour (body, card text); **heading ink (#0e1726)** colours the H1 and H2; **accent ink (#2a446f)** colours inactive tab pills and tinted labels; **black (#000000)** appears in the dark carousel card.
- **Primary (#005597)** is the deep Azure-style blue of the selected product pill, with white text (#ffffff). It also underlies the tinted blue unselected pills (the page measures a translucent #005597 at low opacity).
- **Accent blue (#0078d4)** fills the small square chevron links and the "Sign up today" button (white text, 8px radius). It is the page's `--root-color-brilliant-blue-500`.
- **Hairline (#e6f2fb)** is the soft light-blue border around cards and the tab row.
- **Navigation text (#262626)** and **footer** (#f2f2f2 background, #616161 text) complete the neutrals.

The purple (#6761d9) of the announcement banner and the colours in the hero illustration are promotional and are not tokens.

## Typography

Headings use **Segoe UI Variable Display** and body uses **Segoe UI Variable Text**, both falling back to "Segoe UI", segoeui, "Helvetica Neue", helvetica, arial and sans-serif. The page's loaded font list includes Segoe UI regular and semibold files (supplied by the Microsoft header), plus two icon fonts (FabricMDL2Icons and MWF-FLUENT-ICONS). Segoe UI Variable is a system font on recent Windows; elsewhere the page falls to Segoe UI, Helvetica Neue or Arial.

Measured scale: H1 50px/52px at 500 with -1.25px tracking; H2 24px/32px at 500 with -0.36px tracking; eyebrow labels 12px/16px at 600, uppercase, with 0.96px tracking; body 16px/24px at 400 with -0.48px tracking; buttons 15px/22px at 600 with -0.3px tracking; links 14px/20px at 600. Tight negative tracking at every size gives the page a compact, modern look. The page's custom properties also define `--root-h1-font-size: 2.75rem` and `--root-h2-font-size: 2.5rem`, which describe the site's CSS scale rather than the computed values above.

## Layout

A wide centred container; navigation uses 64px horizontal padding. The hero is a two-column split: text left, illustration right. The cards band is a three-up grid with a consistent gutter, and the carousel runs edge to edge inside the container with its previous card peeking at the left. Spacing steps measured on the page are 1px, 3px, 4px, 5px, 6px, 8px, 10px, 11px, 12px and 16px, with larger section gaps made from rem values (for example `--root-spacing-2xl: 3rem`). Section bands alternate between white and pale blue to separate topics.

## Elevation & Depth

Cards float with a very light two-layer shadow (rgba(0, 0, 0, 0.12) 0px 0px 2px 0px, rgba(0, 0, 0, 0.14) 0px 2px 4px 0px) on white, with the hairline border; the carousel card is dark and flat. Translucent white surfaces (#ffffff at partial opacity) appear in the hero's frosted glass. Keep elevation to this single soft level.

## Shapes

Radii are graded: 4px (small controls), 8px (secondary button), 16px, 24px (cards and carousel) and 200px (the primary pill), with a 9999px full pill token. Cards and images are generously rounded; selection pills are fully round; the small chevron links are rounded squares. Photographs inside cards share the card's corner radius.

## Components

- **Primary pill.** #005597 fill, white 15px/600 text, 8px 24px padding, 40px tall, 200px radius ("Azure"). Unselected siblings are pale tinted blue with navy text.
- **Secondary button.** #0078d4 fill, white 15px/600 label, 8px 16px padding, 44px tall, 8px radius ("Sign up today").
- **Outlined button.** White with a dark outline and navy label ("See the changelog").
- **Tabs.** Text tabs with a blue underline on the selected tab, above a hairline.
- **Card.** White, 24px radius, soft double shadow, image, 16px bold title, body, and a blue square chevron plus link text.
- **Eyebrow.** 12px uppercase 600 label in blue above section headings.
- **Header.** White bar, Microsoft logo, nav at #262626.
- **Footer.** #f2f2f2 with #616161 text.

## Design System Architecture

Microsoft's design system is Fluent UI. The supplied link, [developer.microsoft.com/en-us/fluentui](https://developer.microsoft.com/en-us/fluentui), opens as a documentation shell (navigation: Get Started, Styles, Controls, Resources) whose content loads dynamically. The [microsoft/fluentui repository](https://github.com/microsoft/fluentui) describes Fluent UI web as utilities, React components and web components, with React Components v9 (`@fluentui/react-components`), React v8 (`@fluentui/react`) and Web Components (`@fluentui/web-components`), under the MIT licence with a separate licence for fonts and icons. Fluent v9 documentation is on [storybooks.fluentui.dev/react](https://storybooks.fluentui.dev/react/), which is a script-rendered Storybook.

The captured Microsoft Developer page does not use Fluent: its markup carries the `uhf-*` classes of Microsoft's shared header, and its styling comes from a site bundle exposing `--root-*` (palette, type, spacing) and `--theme-*` (foreground, background, border roles such as `--theme-background-accent-strong-selected`) custom properties. Because the site does not use Fluent, no Fluent token values are taken here; the de-facto system is the site's own root/theme variable layers.

## Do's and Don'ts

- Do keep surfaces near-white (#fefefe) with pale-blue (#f4fafd) bands, navy ink (#17253d) and tight negative tracking.
- Do use deep blue #005597 for the selected state and Microsoft blue #0078d4 for compact action squares.
- Do round cards at 24px and selection pills fully.
- Do add uppercase 12px eyebrows above section headings.
- Don't use the purple promotional banner colour for interface chrome.
- Don't apply heavy shadows; one soft two-layer shadow is the limit.
- Don't mix more than the two Segoe UI Variable cuts and their fallbacks.
- Don't treat these values as Fluent UI component tokens.

## Responsive Behavior

Only the desktop layout was measured, so mobile type sizes and breakpoints are not recorded here. The page's stylesheet exposes rem-based custom properties for heading and body sizes, suggesting a fluid scale, but the exact mobile behaviour is unmeasured. Navigation, the tab row and the carousel are horizontally laid out at desktop width.

## Iteration Guide

1. Begin with canvas #fefefe, a pale-blue band #f4fafd, navy ink #17253d and heading ink #0e1726.
2. Set Segoe UI Variable Display for headings (50px/52px and 24px/32px at 500) and Segoe UI Variable Text for body (16px/24px).
3. Use a 200px-radius pill in #005597 for the selected state and an 8px-radius #0078d4 button for sign-up actions.
4. Wrap content in 24px-radius white cards with the soft two-layer shadow.
5. Add a 12px uppercase eyebrow before each section heading.
6. For real Fluent UI work, consult the Fluent documentation and token files directly rather than this file.
