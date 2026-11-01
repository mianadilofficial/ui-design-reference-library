---
version: alpha
name: Siemens
category: "Design Systems"
description: "Siemens' corporate site (siemens.com) pairs the proprietary SiemensSans face with deep-blue ink #000028, sand surfaces #f3f3f0, a turquoise #00cccc primary button with black text that turns #00ffb9 on hover, square 0px corners at 56px height, and full-bleed industrial photography."

colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f0"
  ink: "#000028"
  primary: "#00cccc"
  on-primary: "#000000"
  ink-secondary: "#4c4c68"
  ink-bootstrap-dark: "#212529"
  hairline: "#d9d9df"
  primary-hover: "#00ffb9"
  navy-secondary: "#002949"
  petrol: "#009999"
  mint: "#d1fff2"
  deep-blue-50: "#7d8099"
  deep-blue-30: "#b3b3be"
  gray-dark: "#333353"
typography:
  display:
    fontFamily: SiemensSans
    fontSize: 32px
    fontWeight: 900
    lineHeight: 44px
  subheading:
    fontFamily: SiemensSans
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
  body:
    fontFamily: SiemensSans
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: SiemensSans
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: SiemensSans, SiemensRoman, "Helvetica Neue", "Segoe UI", Oxygen, Ubuntu, Cantarell, "Open Sans", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: SiemensSans
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 8px
  sm: 12px
  md: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 11.2px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.navy-secondary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 56px
    boxShadow: rgb(255, 255, 255) 0px 0px 0px 2px inset
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 12px 150px 12px 12px
    height: 48px
    borderColor: "{colors.primary-hover}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 80px 0px 16px
---

## Overview

The siemens.com home page (the capture is the Thailand / English storefront of the corporate site) is a technology-corporate page about industrial AI. The top of the capture is an auto-rotating hero carousel on a dark photograph of an engineer at a monitor, with a bold white headline ("What if AI could do an engineer's most tedious work?"), a short paragraph about the "Eigen Engineering Agent" and two square buttons: a solid turquoise "Start free trial" and a white-outlined "How AI transforms Engineering". Carousel controls (previous/next arrows, a play button and progress dots) sit at the bottom. Below it, a deep-navy header carries the spaced SIEMENS wordmark, a region selector ("Thailand | EN"), "Support & community", a cart and "Log in", then a row of mega-menu entries (Products & services, Solutions, Industries, Partner ecosystem, Topics & insights) and Search.

The content sections are editorial. "TECHNOLOGY / Upgrade reality" opens with a vertical list of topics at left (Artificial intelligence is selected with a pale mint highlight and a left rule), a large customer-story photograph of a robot picking strawberries, a navy e-book card and a sand-coloured "Product spotlight" card, then a navy banner "Unlock smarter solutions with our AI offerings" with an outlined "Discover more" button. A cream-sand section "MARKETPLACE / Discover products and services" follows with an outlined "Go to marketplace" button and image cards carrying a "Siemens Xcelerator" pill. The voice is corporate-confident and concrete: capability claims, product names and numbers ("more than 600,000 TIA Portal users"), uppercase kicker labels above sentence-case headings.

## Colors

The palette is deep blue, sand and white with one bright accent. `{colors.ink}` (#000028) is a very dark navy used for headings, the header, the footer and dark cards. `{colors.canvas}` (#ffffff) and the sand `{colors.page-largest}` (#f3f3f0, the largest filled area) alternate as section grounds. Secondary text is `{colors.ink-secondary}` (#4c4c68), and `{colors.ink-bootstrap-dark}` (#212529) is a Bootstrap dark text value measured in small amounts. `{colors.hairline}` (#d9d9df) is the light divider color.

The accent is `{colors.primary}` (#00cccc), a turquoise used for the solid button, always with `{colors.on-primary}` (#000000) black text rather than white. Hover brightens the fill to `{colors.primary-hover}` (#00ffb9), a mint green; the same hover pair was measured on several buttons. `{colors.navy-secondary}` (#002949) is the fill of the secondary button over photography. `{colors.mint}` (#d1fff2) is the pale selection highlight in the topic list. The page CSS also defines `{colors.petrol}` (#009999), `{colors.deep-blue-50}` (#7d8099), `{colors.deep-blue-30}` (#b3b3be) and `{colors.gray-dark}` (#333353) as custom properties (the deep-blue and petrol names are the site's own); where each appears on this page was not traced.

## Typography

All text is **SiemensSans**, a proprietary face; the page loads weights 500, 600 and 700 plus a "SiemensRoman" face, with Helvetica Neue, Segoe UI and other system fonts behind it in the navigation stack and Arial behind the bold variant. The hero headline is 32px/44px at a requested weight of 900 (`{typography.display}`), although the loaded faces stop at 700, so how weight 900 is rendered is unexplained. Sub-headings are 18px/27px bold (`{typography.subheading}`), body copy 16px/24px regular (`{typography.body}`), buttons 16px/24px bold (`{typography.button}`), navigation 16px/24px (`{typography.nav}`) and secondary links 14px/21px (`{typography.link}`). Small uppercase kickers (TECHNOLOGY, CUSTOMER STORY, MARKETPLACE) sit above headings. SiemensSans is not freely available; Helvetica Neue and Arial are the substitutes the site's own stack names.

## Layout

The page is a sequence of full-width bands, each with a left-aligned content column, a kicker, a heading and a short paragraph. The "Upgrade reality" band uses a two-part grid: a narrow topic list at left and a wider area of mixed-size cards at right, with the large story image and two stacked text cards in a column layout, then a full-width banner. The header sits in two rows (utility and main menu). Measured spacing steps are 1, 2, 4, 8, 11.2, 12, 15, 16, 24 and 32px, with the footer padded 80px at top and 16px at bottom. The page defines `--spacer-xs` (.25rem) and `--spacer-md` (1.5rem) among its Bootstrap-style spacers.

## Elevation & Depth

The design is flat. Separation comes from colour blocks (navy, sand, white) and photography rather than shadows. The only box-shadows measured are inset 2px rings that draw outlined buttons: white (255, 255, 255) on dark backgrounds and the navy ink on light backgrounds. A scrim at 40% black darkens the hero photograph to carry white text.

## Shapes

The brand look is square. Buttons, nav, text inputs and cards are 0px radius (`{rounded.none}`). Rounding appears only on small elements: `{rounded.xs}` (8px), `{rounded.sm}` (12px) and `{rounded.md}` (24px) occur once each in the measurement, and `{rounded.pill}` is used for the "Siemens Xcelerator" chips and carousel controls (measured as 999px and 50%).

## Components

**Primary button** (`button-primary`): #00cccc fill, black 16px/24px bold label, square corners, padding 16px 24px, 56px high; on hover the fill becomes #00ffb9 (`button-primary-hover`).

**Secondary button** (`button-secondary`): #002949 fill, white label, same geometry, with a 2px inset white ring, over photography.

**Outline buttons on light backgrounds**: transparent with a 2px inset ring in #000028 and #000028 label ("Go to marketplace").

**Navigation** (`nav`, `nav-link`): #000028 bar with white 16px links and a bottom row of mega-menu items.

**Text input** (`text-input`): navy fill, white text, 48px high, with a mint-green (#00ffb9) border, padding 12px 150px 12px 12px (the right padding leaves room for an in-field button).

**Cards**: image-over-text cards on white or sand, and navy information cards with white text and an arrow link ("Download the e-book").

**Footer** (`footer`): #000028 with white text and padding 80px top, 16px bottom.

## Design System Architecture

Siemens publishes a separate open design system, [Siemens Industrial Experience (iX)](https://ix.siemens.io), whose docs describe a Docusaurus site with Guidelines, Components, Icons and Styles sections, web components (`ix-*` tags) with Angular, React and Vue bindings, and theming through `data-ix-theme` and `data-ix-color-schema` attributes, with embedded Classic light and Classic dark themes. Its theming page says Siemens AG applications should use an exclusive "Siemens AG Corporate Brand Theme" that is available only to Siemens AG employees. iX is aimed at industrial software applications; the siemens.com marketing home page does not use it: its HTML has no `ix-` components or `--theme-*` variables, so no iX values were used here and no iX components were measured.

What the home page ships instead is a Bootstrap 5 based stylesheet set: custom properties from `--bs-*` (for example `--bs-border-radius`, `--bs-box-shadow`) combined with Siemens-named variables such as `--color-petrol`, `--color-sand-light`, `--color-secondary-deep-blue-30/50`, `--color-gray-dark`, `--font-family-siemens-bold`, header-height variables (`--headerHeightScroll`, `--subHeaderHeight`) and `--spacer-*`. Stylesheets come from `/shared-assets/...` and `/css/` on the site plus shared components loaded from `static.sw.cdn.siemens.com/xd/universal-components`. The de-facto system is therefore a Bootstrap theme with Siemens colour and type variables and a shared web-component layer; the owner and naming of that layer are not documented in the pages opened here.

## Do's and Don'ts

- Do use black text on the turquoise button and brighten to mint on hover.
- Do keep corners square on buttons, inputs and cards.
- Do alternate white, sand and deep-navy bands for rhythm.
- Do put a small uppercase kicker above each sentence-case heading.
- Don't put white text on #00cccc; the measured pairing is black.
- Don't add shadows; use colour blocks and 2px inset rings instead.
- Don't round buttons; reserve pills for chips and carousel controls.
- Don't use iX component styling on marketing pages unless the page is verified to load it.

## Responsive Behavior

The page uses Bootstrap-style breakpoints and a sticky two-row header whose height shrinks on scroll (`--headerHeightScroll` is 92px and `--subHeaderHeight` 60px in the CSS). The mobile viewport measurement of the hero heading is not reproduced in this file's tokens, so no mobile type sizes are stated. The topic list plus card grid in "Upgrade reality" is a desktop arrangement; its narrow-screen reflow was not measured.

## Iteration Guide

1. Start with `{colors.canvas}`, `{colors.page-largest}` and `{colors.ink}`.
2. Use `button-primary` for one main action per hero or band; pair it with the outlined variant for a secondary action.
3. Keep every corner at 0px except chips and carousel controls.
4. Set headings in SiemensSans bold, with a kicker above and a 16px/24px paragraph beneath.
5. Use `{colors.navy-secondary}` and `{colors.ink}` blocks for contrast against sand sections.
6. Pair imagery of real industrial settings with plain-language capability statements.
