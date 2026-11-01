---
version: alpha
name: City of Boston (Boston.gov)
category: "Design Systems"
description: "Boston.gov, built on the city's Fleet pattern library, sets 90px uppercase Montserrat bold headlines in white over a blue-tinted skyline, body copy and links in Lora serif, Optimistic Blue #1871bd links and square buttons that flip to red #fb4d42 on hover, navy #091f2f ink and footer, and white cards on a #f3f3f3 grey field with line icons."
colors:
  canvas: "#ffffff"
  ink: "#091f2f"
  primary: "#1871bd"
  on-primary: "#ffffff"
  surface-grey: "#f3f3f3"
  ink-muted: "#58585b"
  sky-link: "#28a7df"
  accent-yellow: "#fcb61a"
  accent-red: "#fb4d42"
  critical: "#d22d23"
  blue-soft: "#69a3d4"
  disabled-bg: "#e0e0e0"
  disabled-ink: "#828282"
typography:
  display:
    fontFamily: Montserrat, Arial, sans-serif
    fontSize: 90px
    fontWeight: 700
    lineHeight: 90px
    letterSpacing: "-1px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Montserrat, Arial, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1px"
    textTransform: uppercase
  heading:
    fontFamily: Montserrat, Arial, sans-serif
    fontSize: 34px
    fontWeight: 800
    lineHeight: 39.1px
    letterSpacing: 0.68px
    textTransform: uppercase
  subheading:
    fontFamily: Montserrat, sans-serif
    fontSize: 16px
    fontWeight: 800
    lineHeight: 19.2px
    letterSpacing: 0.32px
    textTransform: uppercase
  body:
    fontFamily: Lora, serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 39.0001px
  button:
    fontFamily: Montserrat, Arial, sans-serif
    fontSize: 15.6667px
    fontWeight: 700
    lineHeight: 18px
    letterSpacing: 1px
    textTransform: uppercase
  link:
    fontFamily: Lora, Georgia, serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27.9px
rounded:
  none: 0px
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 17.08px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 22.5px
    height: 62px
  button-primary-hover:
    backgroundColor: "{colors.accent-red}"
  button-primary-disabled:
    backgroundColor: "{colors.disabled-bg}"
    textColor: "{colors.disabled-ink}"
  button-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 0px 22px
    height: 47px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 0px 18px 0px 0px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 1px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    padding: 0px 8px
    height: 47px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 31.005px 31.005px 0px
---

## Overview

Boston.gov reads as a civic service portal with a strong editorial voice. The capture opens on a thin navy banner ("CITY of BOSTON — An official website of the City of Boston. Here's how you know"), then a white header with a red square MENU button at the far left, the wordmark "CITY of BOSTON" with a red underline, a divider, "Mayor Michelle Wu" in italic serif, and uppercase links (INFORMATION AND SERVICES, PUBLIC NOTICES, FEEDBACK, ENGLISH) and a red search icon at right. Below it is a full-width hero of the Boston skyline washed in blue, with "Welcome to the" in italic serif above a 90px, uppercase, bold white "CITY OF BOSTON".

The body is a stack of utilitarian bands. A day banner, "THURSDAY, OCTOBER 8", sits between two heavy navy rules and heads five status items with circled line icons (City Hall operating hours, Trash and recycling, Street cleaning, Parking meters, Tow lot), each an underlined blue link over a short italic-serif sentence. A grey band, "FEATURED RESOURCES", holds twelve white tiles (ADA Curb Ramp Requests, Apply for a City Job, Building Permits and Licenses, and so on), each with a navy line icon and a blue serif link. Four full-width colour tiles (blue, navy, red, navy) introduce numbered guides such as "Guide: TRASH AND RECYCLING" before a "LATEST NEWS" section.

**Key Characteristics:**
- A two-voice type system: Montserrat for uppercase headings and controls, Lora (serif) for body copy and links.
- `{colors.primary}` (Optimistic Blue in the library's own naming) for links, buttons and headline tiles, over deep navy `{colors.ink}` and a flat grey field.
- Square, unrounded buttons that turn `{colors.accent-red}` on hover.
- Heavy navy horizontal rules as section markers.
- Line-icon illustration set at one stroke weight, and a sky-line photograph hero.
- Plain-language, service-first microcopy ("Pay a Parking Ticket", "Report an Issue with 311").

## Colors

`{colors.canvas}` (#ffffff) is the dominant background by area, followed by `{colors.surface-grey}` (#f3f3f3) for the resources band and the footer-adjacent sections. `{colors.primary}` (#1871bd) is both the most-read text colour (links) and the button fill; `{colors.blue-soft}` (#69a3d4) tints icon areas and tiles. `{colors.ink}` (#091f2f) is the near-black navy for headings, section rules, the top banner and the dark guide tiles. `{colors.ink-muted}` (#58585b) is used for secondary copy.

Accent and state colours are explicit in the shipped CSS: `{colors.accent-red}` (#fb4d42) is the hover colour of the primary button and the fill of the red guide tile; `{colors.accent-yellow}` (#fcb61a) is used for the yellow button variant, a yellow top border and the 311 mark; `{colors.sky-link}` (#28a7df) styles external links; `{colors.critical}` (#d22d23) is the error and required-field colour. The disabled button state measured on the library's button page is `{colors.disabled-ink}` (#828282) text on `{colors.disabled-bg}` (#e0e0e0).

## Typography

Two families load: Montserrat (400 and 700 files; 800 weight measured on headings) and Lora (300, with italics).

- **Display** (`{typography.display}`): Montserrat 700, 90px / 90px, -1px tracking, uppercase, white on the hero photo; 40px / 40px on mobile.
- **Heading** (`{typography.heading}`): Montserrat 800, 34px / 39.1px, 0.68px tracking, uppercase, for "FEATURED RESOURCES" style section titles.
- **Subheading** (`{typography.subheading}`): Montserrat 800, 16px / 19.2px, 0.32px tracking, uppercase.
- **Body** (`{typography.body}`): Lora 400, 18px with a generous 39px line height in the measured paragraph, and Lora italic for descriptions such as the status captions.
- **Button** (`{typography.button}`): Montserrat 700, 15.6667px / 18px, 1px tracking, uppercase.
- **Link** (`{typography.link}`): Lora 400, 18px / 27.9px.

In the shipped stylesheet the `.h1` class scales fluidly with `calc(30px + 45 * ((100vw - 480px) / 960))` between 30px and 75px, and `.sh-title` scales from 18px to 24px, so display sizes respond to viewport width continuously. The pairing of a sans uppercase voice for navigation and a serif voice for prose is the distinct typographic signature.

## Layout

Content sits in a wide container with a 12-column system: the stylesheet provides grid classes such as `.g--3`, `.g--4` and `.g--1` whose items carry a 1.5rem (24px) right margin and drop it on the last item of a row. The service status row is five columns, the resource tiles are four columns by three rows, and the guide tiles are four equal full-bleed colour blocks (the `.b--fw` class breaks out to 100vw). Spacing utilities use the `m-t500`, `m-b300`, `p-a300` naming. Section separation is by band (white, grey, colour) and by heavy navy rules rather than by space alone.

## Elevation & Depth

The system is almost completely flat. The only measured shadow is the header, `rgba(0, 0, 0, 0.1) 0px 1px 2px 1px`. Resource tiles are white rectangles on grey with no border or shadow; the hero photo and the colour tiles give depth through tint rather than effects.

## Shapes

Shapes are rectilinear. Buttons in the library are `{rounded.none}` (0px): the library's Next button measured 0px and the homepage "FIND MORE CITY EVENTS" button 0px. A smaller compact button and text inputs use `{rounded.sm}` (4px); `{rounded.xs}` (3px) appears on small elements. Circles (50% and 100% radii) are reserved for icons, and the numbered markers on the guide tiles. `{rounded.pill}` exists in the token set but is not a visible feature of the page.

## Components

**Primary button.** `{components.button-primary}`: `{colors.primary}` fill, white uppercase Montserrat 700 label, 22.5px padding, 62px tall, square corners; the hover is `{components.button-primary-hover}` (red) and the disabled state is `{components.button-primary-disabled}`. The library's own default button measures 55px tall with 20px padding.

**Compact button.** `{components.button-compact}`: 47px tall, 0px 22px padding, 4px radius; used for form actions such as SEARCH.

**Navigation.** `{components.nav}`: white bar with the 1px header shadow; `{components.nav-link}` in navy. The red square MENU control is the header's strongest accent.

**Text input.** `{components.text-input}`: 47px tall, white, Lora text.

**Resource tile.** White rectangle, centred line icon, centred blue serif link; no radius.

**Footer.** `{components.footer}`: navy with white text and links.

## Design System Architecture

Boston.gov is built on a public pattern library, Fleet, at [patterns.boston.gov](https://patterns.boston.gov/). Its overview says "This is the pattern library for the City of Boston. It's currently a work in progress, but we're adding to it every day. Currently, it powers much of Boston.gov and all of Boston's 311 web portal." The homepage HTML loads `https://patterns-stg.boston.gov/css/public.css` and `patterns-cob-theme.css` alongside its Drupal theme stylesheets (theme `bos_theme`), which confirms that the live site consumes Fleet's CSS. Fleet is a component catalogue (the documentation is titled "Overview | Fleet", with component detail pages such as Button: Default, Block: Optimistic Blue and Card variants) and installs with a single stylesheet link.

The CSS is hand-written BEM-like and utility-based: `.btn`, `.button`, `.btn--y`, `.b--ob` (Optimistic Blue block), `.b--r`, `.b--g`, `.t--upper`, `.t--sans`, `.sh-title`, `.g--3--sl`, `.m-t500`, with the colours hard-coded as hex values rather than custom properties. The Button component measured in the Fleet preview matches the tokens here (#1871bd fill, #fb4d42 hover, uppercase Montserrat 700 15.6667px, 1px tracking, 20px padding, 0px radius).

## Do's and Don'ts

### Do
- Use Montserrat uppercase for headings, buttons and navigation, and Lora for prose.
- Keep buttons square and let the hover turn `{colors.accent-red}`.
- Alternate white, `{colors.surface-grey}` and full-bleed colour bands, and mark sections with navy rules.
- Use one-weight line icons with navy strokes and blue serif links under them.
- Write headings and link text as plain service names.

### Don't
- Don't round buttons or tiles; the system is rectilinear.
- Don't set body paragraphs in Montserrat or headings in Lora.
- Don't use `{colors.accent-yellow}` or `{colors.accent-red}` for body text.
- Don't add shadows to tiles; only the header carries one.
- Don't put white text on `{colors.blue-soft}`; use navy.

## Responsive Behavior

The shipped stylesheet's most frequent breakpoints are at 480px (max and min), 768px, 840px, 980px, 1280px and 1440px, with many rules at 1440px and above, such as capping `.h1` at 75px. At 390px the measured display headline falls to 40px / 40px with the same -1px tracking. Type is fluid between 480px and 1440px through `calc()` expressions, grid classes carry suffixed variants (`--sl`, `--l`, `--m`), and the full-bleed `.b--fw` bands keep the colour tiles edge to edge. Buttons keep their square shape and padding at every size, so the targets stay at 47px or taller.

## Iteration Guide

1. Edit one component at a time and use token names (`{colors.primary}`, `{rounded.none}`, `{typography.button}`).
2. Start with Montserrat uppercase headings, Lora body and the single navy `{colors.ink}`.
3. Use `{colors.primary}` for links and buttons; show hover with `{colors.accent-red}`.
4. Keep corners at 0px unless the element is a form control (4px).
5. Re-run `node web/scripts/verify-designs.mjs --slug=boston-gov` after each edit.
