---
version: alpha
name: Pega
category: "Design Systems"
description: "Pega's homepage uses Lora 700 serif headlines at 64px in deep navy #001f5f with Open Sans body, #3e67bb pill buttons, a yellow #ffc836 accent and a navy-to-violet palette; the Constellation design system documents a separate Roboto Flex application UI."
colors:
  canvas: "#ffffff"
  ink: "#151619"
  consent-yellow: "#ffcc4d"
  on-consent-yellow: "#1f2656"
  navy: "#001f5f"
  violet: "#5f67b9"
  primary: "#3e67bb"
  footer-border: "#081c4526"
  on-primary: "#ffffff"
  yellow: "#ffc836"
  purple-ai: "#681fc3"
typography:
  display:
    fontFamily: Lora, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 64px
    fontWeight: 700
    lineHeight: 67.2px
  display-mobile:
    fontFamily: Lora, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 41.6px
    fontWeight: 700
    lineHeight: 49.92px
  heading:
    fontFamily: Lora, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 64px
    fontWeight: 600
    lineHeight: 67.2px
  subheading:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 18.4px
    fontWeight: 700
    lineHeight: 27.6px
  body:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24.8px
  button-consent:
    fontFamily: "\"open sans\", \"helvetica neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 15px
    textTransform: capitalize
  nav:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.096px
  link:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 20.88px
  button:
    fontFamily: "\"Open Sans\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Oxygen, Ubuntu, Cantarell, \"Fira Sans\", \"Droid Sans\", \"Helvetica Neue\", sans-serif"
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 20.88px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 10px
  xl: 12px
  pill: 9999px
spacing:
  s1: 3.1px
  s2: 4.4px
  s3: 5.4px
  s4: 6.2px
  s5: 7px
  s6: 9.8px
  s7: 10px
  s8: 10.8px
  s9: 12.4px
  s10: 20px
components:
  button-consent:
    backgroundColor: "{colors.consent-yellow}"
    textColor: "{colors.on-consent-yellow}"
    typography: "{typography.button-consent}"
    rounded: "{rounded.sm}"
    padding: 7px 20px
    height: 29px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 9.8px 24.8px
    borderColor: "{colors.navy}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    boxShadow: rgba(6, 10, 36, 0.08) 0px 1px 2px 1px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 5.4px 12.4px
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(6, 10, 36, 0.1) 0px 1px 4px 1px, rgba(6, 10, 36, 0.08) 0px 5px 10px 0px
  footer:
    textColor: "{colors.navy}"
    borderColor: "{colors.footer-border}"
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 9.8px 24.8px
    height: 44px
  button-header:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4.4px 12.4px
    height: 30px
  button-accent:
    backgroundColor: "{colors.yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 9.8px 24.8px
    height: 44px
---

# Pega

## Overview

Pega's homepage ("The leading AI-powered platform for enterprise transformation") is a confident, editorial enterprise page. At capture a dark-navy cookie dialog (with yellow "Accept All" and "Decline All" buttons and a violet "Cookie Preferences" button) overlays the header. Behind it, a slim top strip carries "Pega Sites" and utility icons, followed by a white header with the navy Pega wordmark and a small blue "Build a Blueprint" button. The hero is a three-part composition on a faint blueprint-grid background: a navy panel with 3D gold coins and sparkles on the left, a very large serif headline in the centre ("The future of AI isn't more agents. It's better orchestration."), and a Gartner Magic Quadrant chart cropped at the right. A short line ("Pega named a Leader in the 2026 Gartner® Magic Quadrant™ for BOAT.") sits above two pill buttons, a filled blue "Get the report" and an outlined navy "Explore the platform".

Below this, a customer-logo strip ("Trusted by leading organizations worldwide": HSBC, Citibank, Verizon, Wells Fargo, Aflac, Unum, NAB, Google, Toyota) leads to a pale-blue rounded panel, "Four paths to becoming a modern AI enterprise. All on one unified platform.", with four columns of blue outline icons, bold titles, short descriptions, big blue statistics (76%, 88%, 40%, 50%) and chevron links ("See how HealthFirst did it"). A full-width navy band follows with a tab row (Reimagine your business, Run it predictably, Design for continuous evolution, Connect everything), the active tab marked by a yellow underline, and a white card holding a photograph and the heading "Reimagine your business with Pega Blueprint®". The voice is assertive and outcome-led, with proof points in numbers.

## Colors

The page's CSS publishes a `--bolt-color-*` palette (read from the live page). The brand's core values are `navy` #001f5f (`--bolt-color-indigo`/`navy`, used for headlines, outlined buttons, the dark band and footer text), `primary` #3e67bb (`--bolt-color-indigo-light`/`navy-light`, used for filled buttons, nav text and statistics), `violet` #5f67b9 (`--bolt-color-violet`) and `yellow` #ffc836 (`--bolt-color-yellow`, the tab underline and the yellow "Build a Blueprint" pill). `ink` #151619 (`--bolt-color-black`) is body text; `canvas` is white. `purple-ai` #681fc3 is the page's `--bolt-color-GenAI`. The `footer-border` is #081c4526.

The extractor's first-detected primary was the cookie dialog's yellow button (`consent-yellow` #ffcc4d with `on-consent-yellow` #1f2656 text), which belongs to a third-party consent overlay, so the role was overridden (see SOURCES.json) to the first real call to action, the white-on-`primary` "Learn more" pill. The consent colours are kept only under their descriptive names.

## Typography

Two families carry the page: Lora (serif, weights 600 and 700, loaded with italics) for the largest headlines and Open Sans (300 to 800) for everything else; the root variables also define Chakra Petch. `display` is Lora 700 at 64px on a 67.2px line; `heading` is Lora 600 at 64px; `display-mobile` is 41.6px/49.92px. Section headings in Open Sans measure 37.6px with -0.4px tracking, card and column titles (`subheading`) are 18.4px/27.6px at 700, `body` is 16px/24.8px at 400, `nav` is 16px/19.096px at 600 and `button`/`link` are 14.4px/20.88px at 600 with no case change. The consent banner uses a separate 14px/600 style with capitalised labels (`button-consent`). Footer headings are 22.4px/700, and 12.8px uppercase text with 0.8px tracking appears on the award badge.

## Layout

The page is 1280px wide and about 5,928px tall at capture. The hero breaks out of a centred column: the illustration panel bleeds off the left edge and the chart off the right. Below it, content sits in a centred container of four equal columns, with 24.8px and 21.6px as the most common gaps and paddings (6.2px tight gaps and 60px and 86.4px paddings also occur). The light-blue panel has rounded corners and the navy band stretches full width with a white card inset. The marketing page's breakpoints were not measured here.

## Elevation & Depth

Shadows are cool, navy-tinted and quiet. Cards and floating panels use `rgba(6, 10, 36, 0.1) 0px 1px 4px 1px, rgba(6, 10, 36, 0.08) 0px 5px 10px 0px`; the header bar measures `rgba(6, 10, 36, 0.08) 0px 1px 2px 1px`; one further element uses `rgba(0, 0, 0, 0.1) 0px 2px 10px 0px`. Depth also comes from colour planes: white, pale blue, navy, and the dark consent panel. Illustrations (coins, charts) supply volume instead of shadows.

## Shapes

The shape language mixes small rectangles with full pills. Measured radii: 3px most commonly (`rounded.sm`, including the header button and the consent buttons), 3px on top corners only for cards, 1440px for the pill buttons (`rounded.pill`), and 2px, 5px, 10px and 12px for isolated items; one element is a 50% circle.

## Components

**Primary button** (`button-primary`): `primary` fill, white 14.4px/600 label, pill radius, 9.8px 24.8px padding, 44px tall ("Learn more", "Get the report"). **Header button** (`button-header`): the same blue, 3px radius, 4.4px 12.4px padding, 30px tall ("Build a Blueprint" in the header). **Accent button** (`button-accent`): `yellow` fill with `ink` text, pill radius, 44px tall (the yellow "Build a Blueprint" pill). **Outline pill** (`link`): white fill, `navy` text and 1px border, pill radius, same padding ("Explore the platform", "Build a Blueprint"). **Consent buttons** (`button-consent`): `consent-yellow`, 14px/600, 3px radius, 7px 20px padding, 29px tall. **Navigation** (`nav`, `nav-link`): white bar with a faint shadow and `primary` 16px/600 links, 5.4px 12.4px link padding. **Card** (`card`): white, 3px radius, double soft shadow. **Footer** (`footer`): `navy` text with a thin `footer-border`.

## Design System Architecture

Pega publishes its application design system at https://design.pega.com, titled "Pega UX Design System" (footer "©2026 Pegasystems Inc."), which I opened. It describes "patterns and components for building enterprise applications", organised as About (get started, accessibility, responsivity, extend the design system), Patterns (app navigation, landing pages, cases and workflow, forms, tables and charts, completing work) and Resources (design resources, writing guidelines). The get-started page (https://design.pega.com/about/get-started/) states that Constellation has become the default design system Pega uses, that it is a prescribed system rather than a "sticker-sheet", and that extending it takes DX components. The design-resources page (https://design.pega.com/resources/design-resources/) lists a "Pega UX System '26 Design Kit" Figma file, an icon library and the font family "Roboto Flex".

Constellation's token documentation (https://docs.pega.com/bundle/platform/page/platform/user-experience/design-tokens-constellation.html) shows a JSON theme tree split into `base` and `components`, with literal and inherited token types. Its base values include font-family 'Open Sans', sans-serif, font-size 0.875rem, border-radius 0.5rem, spacing 0.5rem, a `brand-primary` palette entry inheriting blue.medium (#076bc9) and an AI/pending colour of purple.dark (#681fc3, the same hex as the homepage's `--bolt-color-GenAI`).

These are separate from the marketing site: the homepage measured here exposes 183 root custom properties prefixed `--bolt-`, defining the colour palette, three font families and a rem-based type-size scale, and its filled buttons are #3e67bb rather than #076bc9. The design site itself, measured with the extractor at https://design.pega.com/patterns/forms/, uses Roboto Flex, #374151 body text and #0b6dd3 links, none of which appear on the homepage. Its pages present patterns and screenshots rather than live components, so no component was measurable there and no value from that page is used in this file.

## Do's and Don'ts

Do pair a large Lora headline in `navy` with Open Sans body copy, use `primary` pills for the main action and outlined navy pills for secondary actions, and show proof as big blue statistics. Do use `yellow` sparingly for emphasis such as an active tab or a promotional pill. Do keep corners at 3px for the small header button and pill for the larger buttons.

Don't use the consent banner's yellow (#ffcc4d) as the brand action colour. Don't set body copy in Lora, and don't use the Constellation blue (#076bc9) or Roboto Flex on marketing pages without measuring them there. Don't add heavy drop shadows; the measured shadows are low-opacity and navy-tinted.

## Responsive Behavior

The extractor measured a 390px viewport: the hero headline falls from 64px (`display`) to 41.6px (`display-mobile`) with the line height from 67.2px to 49.92px. The four-column proof section and the logo marquee are captured only at desktop width, so their mobile behaviour was not measured. Pega's design site lists a responsivity page for application screens, which I did not read.

## Iteration Guide

Begin from `canvas` and `ink`, set the lead line in `display` with `navy`, then add one `button-primary` and one outlined `link` pill. Use `violet` and `primary` for statistics and icons and a `navy` band for the dark section. Check any new colour against the `--bolt-color-*` list on the live page before using it, and keep Lora for headlines only. For app UI, consult Constellation's token documentation but measure values on the target page.
