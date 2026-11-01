---
version: alpha
name: Duet Design System
category: "Design Systems"
description: "Duet is the design system of Finnish insurers LocalTapiola and Turva: the localtapiola-sans typeface at 800 weight (58px display, 24px lead text), a #0077b3 blue header and primary action, #082a4d navy ink on white #ffffff with #f5f8fa panels, 4px component radii, pill (320px) controls and soft #00294d-tinted shadows."
colors:
  canvas: "#ffffff"
  ink: "#62798a"
  primary: "#0077b3"
  on-primary: "#ffffff"
  surface-subtle: "#f5f8fa"
  ink-strong: "#082a4d"
  ink-muted: "#637484"
  ink-footer: "#4d5f6c"
  hairline: "#d4dfe5"
  search-fill-alpha: "#0000004d"
  danger: "#d61c52"
  success: "#308369"
  warning: "#f7b228"
  turva-primary: "#e61740"
typography:
  display:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 58px
    fontWeight: 800
    lineHeight: 72.5px
    letterSpacing: "-0.16px"
  display-mobile:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 36px
    fontWeight: 800
    lineHeight: 39.6px
    letterSpacing: "-0.16px"
  subheading:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 20px
    fontWeight: 600
    lineHeight: 25px
  body:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
    letterSpacing: "-0.16px"
  nav:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 22px
    fontWeight: 800
    lineHeight: 33px
  link:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 600
    lineHeight: 17.6px
  input:
    fontFamily: "localtapiola-sans, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 14px
    fontWeight: 400
    lineHeight: 33.6px
rounded:
  xs: 4px
  md: 8px
  lg: 16px
  button: 25px
  pill: 320px
spacing:
  s1: 8px
  s2: 16px
  s3: 20px
  s4: 23.33px
  s5: 28px
  s6: 36px
  s7: 40px
  s8: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 0px 30px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    padding: 0px 16px
    boxShadow: rgba(0, 41, 77, 0.07) 0px 2px 6px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.search-fill-alpha}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.pill}"
    padding: 0px 16px 0px 40px
    height: 40px
  footer:
    textColor: "{colors.ink-footer}"
    padding: 20px 36px 20px 96px
    borderColor: "{colors.hairline}"
---

## Overview

Duet is the design system of two Finnish insurance and financial brands, LocalTapiola and Turva; its site (duetds.com) says Duet "provides a set of organized tools, patterns and practices" as the foundation for their digital products and experiences, and the about page says a dedicated core team within LocalTapiola maintains it. The name refers to two equal performers, the two brand themes. The captured page is Duet's own documentation home, version 10.8.1 in the footer: a full-width blue (`#0077b3`) top bar with the Duet logo, a pill toggle between the LocalTapiola and Turva themes, a wide rounded search field and an account icon, a left side navigation on a pale `#f5f8fa` panel (Getting Started, Guidelines, Tutorials, Design Tokens, Components, Templates, Resources, Iconography, Agent Skills, Changelog, Contributing, Support, FAQ, Brand Guidelines (FI)), and a content area with the heading "Duet Design System" at 58px extra-bold navy.

The mood is calm and institutional but friendly: large rounded sans type, generous whitespace, a lead paragraph in grey-blue 24px, and a short "Guides" list of white cards with an eyebrow label (ABOUT, GUIDELINES, QUESTIONS), a bold title and a chevron. There is no photography on the home page; colour is limited to the blue bar, a blue block at the bottom-left of the capture and navy text.

## Colors

- **Canvas** `#ffffff`; **surface-subtle** `#f5f8fa` for the side navigation and quiet panels.
- **Primary** `#0077b3` is the LocalTapiola blue (the tokens page lists it as the theme's primary) used for the top bar, links and the primary button, with white text on top.
- **Ink-strong** `#082a4d` is the dark navy for headings and body text in components (the tokens page names it the LocalTapiola secondary/text colour). **Ink** `#62798a` is the lead-paragraph grey-blue, **ink-muted** `#637484` the nav item colour and **ink-footer** `#4d5f6c` the footer text.
- **Hairline** `#d4dfe5` draws card, divider and footer borders.
- **Status colours** from the Duet tokens page (LocalTapiola theme): danger `#d61c52`, success `#308369`, warning `#f7b228`.
- **Turva theme primary** `#e61740` (red); the Turva theme swaps its primary and a dark text colour `#172a3b` and adapts the status colours. Only the LocalTapiola theme is shown in the capture.
- **Search fill** `#0000004d` is a translucent black fill used in the header search field over the blue bar.

The tokens page also documents 15 data-visualisation colours, backgrounds and borders.

## Typography

One family: **localtapiola-sans** (weights 400, 600, 800 are loaded), with a system fallback stack (-apple-system, Segoe UI, Roboto, Helvetica, Arial). The typography page offers two brand typefaces, LocalTapiola and Turva, distributed through the `@duetds/fonts` package, and a 16px base with a scale from 72px (H0) down to 12px.

- **Display** 58px / 72.5px, weight 800, letter-spacing -0.16px; **display-mobile** 36px / 39.6px.
- **Body** (lead paragraph) 24px / 38.4px, weight 400.
- **Subheading** 20px / 25px, weight 600 (card titles).
- **Nav** 22px / 33px, weight 800 (top bar title); **link** 16px / 24px, weight 400.
- **Button** 16px, weight 600 (measured on the button documentation page, line-height 17.6px).
- **Input** 14px / 33.6px.

## Layout

A fixed two-region layout: a left navigation column (about 187px wide at 960px, with a pale background and expandable groups with chevrons) and a content column that starts at about 260px and keeps text to a narrow measure (cards about 450px wide). A top bar spans the full width. The system's own layout components include grid, grid-item, layout, section-layout and hero, and the tokens page lists a spacing scale from 2px to 94px. Measured spacing values here are 8, 16, 20, 23.33, 28, 36, 40 and 96px; the footer has 96px left padding to align with the content column.

## Elevation & Depth

Shadows are soft and blue-tinted. The top bar and cards use `rgba(0, 41, 77, 0.07) 0px 2px 6px 0px`, sometimes combined with 1px hairline-like shadows (`rgba(0, 0, 0, 0.07)` to the left, right and bottom and `rgba(0, 0, 0, 0.09)` at the top) so a card gets a thin outline plus a lift. The tokens page lists tooltip, hover, modal and card shadows, with the tooltip shadow written as `0 2px 10px 0 rgba(0, 41, 77, 0.07)`.

## Shapes

The radius tokens published are sharp (0), default 4px, medium 8px, large 16px, pill 20rem (320px) and circle 50%. In the capture, 4px is used for cards and 320px for pill controls (the theme toggle, search field). The measured button on the documentation page has a 25px radius at 50px height, which is a full pill. Buttons and inputs are rounded; structural panels are square.

## Components

- **Primary button**: `#0077b3` fill, white 16px 600 text, 25px radius, 50px tall, 0 30px padding. The button component page lists variants primary (once per view), secondary, default, plain, negative (for dark backgrounds), destructive and square, in sizes medium, small and x-small, as the `<duet-button>` web component.
- **Outlined small button**: white fill, `#082a4d` 12px text, 1px `#d4dfe5` border, 320px radius, 32px tall (measured "Copy code" button).
- **Top bar**: `#0077b3` background, white 22px/800 title, white controls, subtle shadow.
- **Theme toggle**: a pill switch holding two labels (LocalTapiola, Turva), the active one white with blue text.
- **Search input**: translucent fill, 14px text, 320px radius, 40px tall, 40px left padding for an icon.
- **Side navigation item**: 14px-scale grey-blue text with a chevron for expandable groups.
- **Guide card**: white, 1px hairline, 4px radius, eyebrow label, bold title, right chevron.
- **Footer**: small grey text with a hairline top border, version link and "Terms of use" link in blue.

## Design System Architecture

Duet is itself the system. From the pages opened: it ships six NPM front-end packages (design tokens, components, CSS framework, icons, fonts and CLI tools) that can be used separately or together; its components are framework-agnostic Web Components (for example `duet-button`) with a `theme` attribute for the default and Turva themes; design tokens are exposed as Sass variables (`$token-name`) and CSS custom properties (`var(--token-name)`); and the runtime, tokens and CSS framework together are stated as 5.8 KB. The site lists 100+ components, 30+ templates, an accessibility section stating WCAG 2.1 support, guidance for building layouts and creating custom patterns, a changelog, contribution guidelines and Finnish-language brand guidelines. Its terms say the system is exclusively for building digital products for LocalTapiola and Turva. The docs site's own computed styles use the same colours, localtapiola-sans and shadows listed here, so the home page measured is a direct sample of the system rather than a separate marketing site. Sources: https://www.duetds.com/about/, https://www.duetds.com/tokens/, https://www.duetds.com/typography/, https://www.duetds.com/components/button/.

## Do's and Don'ts

- Do keep one primary `#0077b3` button per view, with secondary and plain variants for other actions.
- Do use `#082a4d` navy for headings and text on white, never pure black.
- Do use the 4px default radius for cards and the 320px pill for controls that look like buttons or search fields.
- Do lift cards with the soft `rgba(0, 41, 77, 0.07)` shadow rather than heavy drop shadows.
- Do use the Turva theme tokens (`#e61740`) only when building for Turva.
- Don't mix the two brand themes on one page.
- Don't use warning yellow or danger red for decoration.
- Don't go thinner than the 400 weight for body text.

## Responsive Behavior

The display heading is 58px on desktop and 36px (line-height 39.6px) on a 390px viewport. The tokens page lists media-query tokens and the system has a `nav` and `menu-bar` component family; the documentation lists a "narrow layout" template and a native-app example. The side navigation visible in the desktop capture is a persistent column; how it collapses on mobile was not measured.

## Iteration Guide

1. Start with white canvas, `#082a4d` headings in localtapiola-sans 800 and a `#62798a` 24px lead paragraph.
2. Add a `#0077b3` top bar with white title and a pill-shaped search field.
3. Use one `#0077b3` primary button (50px tall, 25px radius, 16px/600 white text).
4. Build lists from 4px-radius white cards with a hairline and a soft blue-tinted shadow.
5. Swap to the Turva theme tokens when the product is for Turva.
