---
version: alpha
name: U.S. Web Design System
category: "Design Systems"
description: "USWDS, the U.S. Web Design System, gives federal sites a plain, accessible look: Source Sans Pro Web type (16px body, 700 buttons), federal blue #005ea2 with hover #1a4480, near-black ink #1b1b1b, slate #3d4551 and #565c65 bands, and 4px-radius rectangular buttons; GSA.gov is the live implementation measured here."
colors:
  canvas: "#ffffff"
  ink: "#1b1b1b"
  primary: "#005ea2"
  on-primary: "#ffffff"
  primary-hover: "#1a4480"
  ink-link: "#005599"
  surface: "#565c65"
  surface-slate: "#3d4551"
  surface-cloud: "#e0e6eb"
  ink-disabled: "#a9aeb1"
  ink-strong: "#222222"
  docs-accent-cool: "#00bde3"
typography:
  display:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 34.08px
    fontWeight: 700
    lineHeight: 39.192px
  heading:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 34.08px
    fontWeight: 400
    lineHeight: 39.192px
    textTransform: uppercase
  subheading:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 23px
  body:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 14.4px
  docs-button:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 16.96px
    fontWeight: 700
    lineHeight: 15.264px
  tile-label:
    fontFamily: "\"Source Sans Pro Web\", \"Helvetica Neue\", Helvetica, Roboto, Arial, sans-serif"
    fontSize: 23.36px
    fontWeight: 400
    lineHeight: 37.376px
rounded:
  none: 0px
  xs: 4px
  sm: 20px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 38px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-docs-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.docs-button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 39px
  button-docs-accent-cool:
    backgroundColor: "{colors.docs-accent-cool}"
    textColor: "{colors.ink}"
    typography: "{typography.docs-button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 39px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 4px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 8px
    height: 32px
    borderColor: "{colors.surface}"
  footer:
    textColor: "{colors.ink-link}"
    rounded: "{rounded.none}"
---

## Overview

The U.S. Web Design System (USWDS) is the federal government's shared front-end kit, and the measured live page is GSA.gov, the General Services Administration's own site, whose markup carries USWDS class names (usa-banner, usa-nav, usa-button, usa-accordion, usa-footer, usa-identifier). The captured homepage reads as civic, orderly and utilitarian. At the very top is the standard government banner, "An official website of the United States government" with a flag and a "Here's how you know" disclosure, in small 12.8px text on a light strip. Below it a grey-blue header carries the GSA seal and name, a "Per diem lookup" link with a briefcase icon, and a search box with a blue square search button, followed by a navigation bar (Buy through us, Sell to government, Real estate, Policy and regulations, Small business, Travel, Technology, About GSA), each with a dropdown chevron.

The hero is a full-bleed photograph of a silhouetted worker at sunset behind a white headline, "GSA is the engine of the American government; driving real estate, acquisition, technology and shared services." In the capture a survey modal ("Help us improve GSA.gov", with a blue "Provide feedback" button and an outlined "No thanks") covers the middle of the hero. Beneath the hero, four duotone-tinted photo tiles labeled REAL ESTATE, BUY THROUGH US, SELL TO GOVERNMENT and TECHNOLOGY sit in a row, each with a thin vertical rule beside its uppercase label. A dark slate band holds the "PER DIEM LOOK-UP" tool: a decorative airplane and dotted flight path, two numbered steps ("1 Choose a location", "2 Choose a date"), white form fields and selects, a ghost "Reset" button and a disabled "Search" button. A white section follows with two columns, NEWS and UPCOMING EVENTS, each item with a stacked month-and-day date, an underlined blue link and, for events, a pin icon and "Online". A blue "All News" and a blue "All Upcoming Events" button close the columns. A "FOCUS ON ..." band begins the next dark section, and a docked "Glossary" tab sits at the right edge.

The voice is institutional but direct: short imperative labels ("Choose a location", "Select fiscal year"), explicit data formats ("mm/dd/yyyy") and plain explanatory notes about whose rates apply to which locations.

## Colors

- **Canvas #ffffff** is the page background for content sections.
- **Ink #1b1b1b** is the near-black text color USWDS uses on light surfaces (measured on the GSA header text and, across the design system's own site, as the most-read text color).
- **Primary #005ea2** is federal blue, the fill of buttons ("All News", "All Upcoming Events") and the color of link text on light surfaces; **primary-hover #1a4480** is the darker hover color. White (#ffffff) is the label color on buttons and the body text color on dark bands.
- **Ink-link #005599** is the underlined link blue in the news and events lists; **ink-strong #222222** and **ink-disabled #a9aeb1** are other measured text colors (the latter a grey for placeholder and disabled text).
- **Surface #565c65** and **surface-slate #3d4551** are the cool-grey and slate bands (the header, the per-diem section and the "Focus on" band), which together cover the largest area of the page; **surface-cloud #e0e6eb** is a pale blue-grey used for light panels.
- **Docs-accent-cool #00bde3** is measured from the design system's Button page: the "accent cool" button color, with #1b1b1b label text.

The USWDS color documentation explains the method: tokens are organised into theme, state and system tokens, with a grade scale from 0 (white) to 100 (black) in which a difference of 50 or more (the "magic number") guarantees Section 508 AA contrast. It also advises avoiding pure black text on pure white, which is why the ink is #1b1b1b and not #000000. The result on screen is a restrained blue-and-slate palette with white text on dark surfaces.

## Typography

The only family is **Source Sans Pro Web**, followed by Helvetica Neue, Helvetica, Roboto, Arial and a generic sans-serif. Body copy is 16px at weight 400 on a 25.6px line (a 1.6 ratio). Section headings, such as "PER DIEM LOOK-UP", "NEWS" and "UPCOMING EVENTS", are 34.08px, weight 400, uppercase on a 39.192px line, in white on slate or in blue on white. The hero display style is the same 34.08px size at weight 700. Subheadings, such as the step titles, are 20px bold on a 23px line, buttons are 16px at weight 700, and the photo-tile labels are 23.36px uppercase on a 37.376px line. The odd decimal sizes come from rem-based sizing and optical-size normalization: the Typesetting page states that each size token is multiplied by a per-typeface factor (1.06 for Source Sans Pro) so that different typefaces look equally large.

Source Sans Pro Web is a web font distributed with the system; Helvetica, Roboto and Arial are the declared fallbacks.

## Layout

The GSA page, captured at 1280px, shows full-width bands with content aligned to a common left edge and a four-tile photo row set in from both sides. The design system documents a layout-grid utility for this. The per-diem tool splits into two equal columns divided by a thin vertical rule, and the News and Upcoming Events columns do the same. Spacing is built on units of 8px: the design system's Spacing Units page lists 1px, 2px, 4px (0.5), 8px (1), 12px (1.5), 16px (2), 20px (2.5) and 24px (3) tokens, and the page measures padding of 12px 20px on buttons and 8px on inputs. Sections are alternate bands: white, slate, white, slate, which gives a strong, scannable rhythm.

## Elevation & Depth

Depth is minimal and mostly structural. The page relies on solid color bands and 1px outlines; the only visible lift is the survey modal, which is a white rounded panel above a dimmed hero,. The system's Shadow documentation exists as a token page, but this homepage uses it sparingly. Focus is shown with thick, high-contrast rings (the "Provide feedback" button has a wide light-blue halo in the capture), which supports accessibility more than decoration.

## Shapes

Shapes are mostly square. Inputs, nav items and docked tabs have a 0px radius; standard buttons use a 4px radius; and a 20px radius appears on the rounded modal and a few elements. The Glossary tab, which the extractor first mistook for the main call to action, is a square-cornered docked control, while the system's actual button on the page, "All News", has the 4px radius. This "square with a small bevel" language reads as official and no-nonsense.

## Components

- **button-primary**: federal blue #005ea2 fill, white 16px bold label, 12px 20px padding, 38px height, 4px radius ("All News", "All Upcoming Events"). Hover is #1a4480.
- **button-docs-primary / button-docs-accent-cool**: the same pattern measured on the design system's Button page, where labels are 16.96px bold and height is 39px; the accent-cool variant is #00bde3 with dark #1b1b1b text. The Button page lists variants Default, Secondary, Accent cool, Accent warm, Base, Outline, Outline inverse and Big, each with Default, Hover, Active, Focus and Disabled states.
- **text-input**: white fill, 32px height, 8px side padding, square corners and a #565c65 border.
- **nav**: a header bar with 4px vertical padding, #1b1b1b text on the light banner and white nav text on the grey band.
- **footer**: link text in #005599.

Other components on the page include the government banner, the accordion-based mega-nav, selects, date pickers and the identifier, all named in USWDS's component index.

## Design System Architecture

USWDS is itself the design system, documented at [designsystem.digital.gov](https://designsystem.digital.gov/). Its navigation lists About (including key benefits, product values, roadmap, research, security and community), Design principles, Design tokens (color, flex, opacity, order, shadow, spacing units, typesetting, z-index), Utilities (border, color, display, flex, float, font size and family, height and width, layout grid, margin and padding, outline, shadow, text styles and others) and a long Components index (accordion, alert, banner, breadcrumb, button, card, checkbox, combo box, date picker, footer, form, header, identifier, modal, pagination, search, select, side navigation, step indicator, table, tag, text input, tooltip and many more). The tool ships a stylesheet (`/assets/css/styles.css`) and a script (`uswds.min.js`).

The [Product values](https://designsystem.digital.gov/about/product-values/) page lists the team's principles: put user needs first, make it easy to do the right thing, treat accessibility as fundamental, start from existing solutions and be consistent, not static. The [Design tokens: color](https://designsystem.digital.gov/design-tokens/color/) page describes theme, state and system tokens and the grade scale and Section 508 AA contrast rules; the [typesetting](https://designsystem.digital.gov/design-tokens/typesetting/) page explains rem-based sizing, normalization and six line-height tokens; the [spacing units](https://designsystem.digital.gov/design-tokens/spacing-units/) page states the 8px multiple system. The [Button](https://designsystem.digital.gov/components/button/) component page documents the variants listed above and says buttons are for the most important actions. The [Design principles](https://designsystem.digital.gov/design-principles/) page ties the system to the 21st Century Integrated Digital Experience Act.

## Do's and Don'ts

Do use #005ea2 for the main action and for links, with #1a4480 on hover, and use #1b1b1b for body text. Do alternate white and slate bands, and use white text on #3d4551 for contrast. Do keep the government banner and show required form formats explicitly. Do build spacing from the 8px unit system, and follow the grade-based "magic number" for any new color pair.

Don't use pure black text on pure white. Don't round buttons beyond 4px; USWDS buttons are rectangles with a small radius. Don't invent custom colors when a USWDS token exists, which the color documentation specifically advises against. Don't rely on color alone to convey state, and don't remove focus rings. Don't use decorative shadows where bands and outlines suffice.

## Responsive Behavior

The extracted page was captured at desktop width only, and no mobile type or layout values are tokens here, so no specific breakpoint behavior is claimed. USWDS documents its type as rem-based: font sizes are output in rem, with the root size set to 100% (16px) when the theme respects the user's font size, which means text scales with a user's browser setting. The grid utilities and the layout-grid page in the Utilities section are the documented tools for responsive layout. On the live page, preserve the 16px body, the 12px 20px button padding and the 4px button radius at every width.

## Iteration Guide

1. Start with a white canvas, #1b1b1b text and Source Sans Pro Web at 16px on a 25.6px line.
2. Add federal blue #005ea2 for buttons and links, 12px 20px padding and 4px radius, hovering to #1a4480.
3. Use uppercase 34.08px headings and alternate white content with #3d4551 and #565c65 bands carrying white text.
4. Keep forms plain: white inputs, square corners, visible labels and explicit format hints.
5. Put the standard government banner at the top and the identifier at the bottom.
6. Prefer USWDS tokens and components over custom colors, and confirm contrast with the grade method.
