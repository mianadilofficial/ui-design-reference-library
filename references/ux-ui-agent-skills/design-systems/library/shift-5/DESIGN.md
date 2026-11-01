---
version: alpha
name: Shift5
category: "Tech & AI"
description: "Shift5 (shift5.io), operational intelligence software for defense and transportation fleets: signal-orange #ff5841 canvas, graphite #202020 ink, grey #b9b9b9 buttons with 24px radius, NonSans 177.778px/170.667px display with -3.55556px tracking, and AuxMono 12px uppercase monospace labels."
colors:
  canvas: "#ff5841"
  page-body: "#202020"
  ink: "#202020"
  primary: "#b9b9b9"
  on-primary: "#000000"
  ink-mid-grey: "#8b8b8b"
typography:
  display:
    fontFamily: NonSans, arial
    fontSize: 177.778px
    fontWeight: 400
    lineHeight: 170.667px
    letterSpacing: "-3.55556px"
  display-mobile:
    fontFamily: NonSans, arial
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1.28px"
  heading:
    fontFamily: NonSans, arial
    fontSize: 21.3333px
    fontWeight: 400
    lineHeight: 21.3333px
  body:
    fontFamily: AuxMono, monospace
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.96px
    letterSpacing: "-0.24px"
    textTransform: uppercase
rounded:
  xs: 6px
  sm: 8px
  md: 24px
  pill: 9999px
spacing:
  s1: 4.44px
  s2: 6px
  s3: 6.67px
  s4: 8px
  s5: 16px
  s6: 20px
  s7: 21.33px
  s8: 28.44px
  s9: 30px
  s10: 35.56px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    height: 40px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    height: 48px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.heading}"
    padding: 35.5556px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    padding: 35.5556px 0px 14.2222px
    transform: matrix(1, 0, 0, 1, 0, 0)
---

## Overview

Shift5 (https://shift5.io/, page title "Op / Intelligence - Shift5") provides operational intelligence software for defense and transportation fleets: its platform analyses vehicle data, including serial bus traffic and radio-frequency signals, to surface cyber and electronic-warfare threats, maintenance needs and compliance issues. Navigation lists Platform, Solutions (Cyber/EW, Predictive Maintenance, Compliance, Research), About (Company, Careers), Insights and Contact. The page sections are the hero, featured news, a "System Status" diagram, a solutions grid, an insights feed, a signup form ("Ready to harness your Op/Intelligence?") and a footer with a Rosslyn, Virginia address. A tagline on the page reads "Forged in America. For America."

The capture shows a three-zone desktop screen. The left two-thirds is a flat signal-orange field (#ff5841) with a "SHIFT5" logo, the enormous headline "Op/Intelligence" in graphite (177.778px), with the slash drawn as a custom glyph, and the line "Operational Intelligence for Every Vehicle, Every Fleet, Every Mission." Under the orange field is a black-and-white aircraft photograph under storm clouds. The right third is a vertical sidebar: a grey (#b9b9b9) panel with a MENU button and the sentence "Powering actionable insights for America's defense and transportation systems.", then a graphite (#202020) "System Status" panel listing GPS, Radar, Engines, Electrical, Fuel, Electronic Warfare, Countermeasures, Environmental, Communications and Flight Data Links, with a binary-code readout below. The effect is a cockpit or instrument-panel look: flat blocks of colour, monospace uppercase micro-labels, and one hero photograph in greyscale.

Voice is confident, direct and mission-focused, with short declarative lines and defense vocabulary. News items are set in uppercase mono ("TOBY MAGSIG CONFIRMED AS PRESIDENT AND CEO; ...").

## Colors

- **Canvas / hero field #ff5841.** Signal orange. It is the hero background and the footer background (2,765 area weight), and the colour of 258 characters of text in the dark panels.
- **Graphite #202020.** The body background (3,879 area weight), the dominant text colour (5,590 characters) and the colour of the headline on orange. Named `ink` and `page-body`.
- **Grey #b9b9b9.** The largest background area (6,842 weight): the sidebar panel, the MENU button and the READ MORE button fills; also text on dark (475 characters). Named `primary`.
- **Black #000000.** Text on the MENU button (9 characters), recorded as `on-primary`.
- **Mid grey #8b8b8b.** Secondary text (252 characters) and a border colour (9 uses).
- **Borders and rules.** #202020 (18 uses), #8b8b8b (9), #4d4d4d (6). Hairline rules in dark panels are made with box-shadows in rgb(77, 77, 77).
- **Other measured values.** #ffffff and #f8f4eb appear with negligible area (7 and 6).

The root also contains cookie-consent library variables (`--cc-*`, such as `--cc-bg: #fff` and `#d4dae0`); they belong to the consent widget and are not brand colours.

## Typography

Two families are rendered: **NonSans** (display and headings, loaded at weight 500) and **AuxMono** (monospace labels and body, weight 400). The stylesheet also declares a third face, "PPEditorialNew", which no measured text node used. NonSans and AuxMono are custom or foundry faces; for a substitute use a geometric sans for NonSans and any grotesque mono (e.g. Space Mono or IBM Plex Mono) for AuxMono. These suggestions are not measured values.

- **Display:** NonSans 177.778px / 170.667px, weight 400, letter spacing -3.55556px (h1 "Op/Intelligence"); mobile 64px / 64px, -1.28px.
- **Heading:** NonSans 21.3333px / 21.3333px, weight 400, used for h2 and h3 (news and solution titles such as "Cyber / EW").
- **Body and labels:** AuxMono 12px / 15.96px, weight 400, letter spacing -0.24px, uppercase. 4,700 of the measured characters use this style.
- **Large intermediates:** 71.1111px with -1.42222px tracking (38 characters) and 35.5556px (148 characters).
- **Micro:** 8.88889px weight 600 (60 characters).

The page declares `--vh: 800px`. Weights measured: 400 (6,524 characters) and 600 (60).

## Layout

The measured screen is 1,280px by 800px (the scroller height). In the capture it splits into a wide main column and a right-hand sidebar (column widths were not measured). The main column holds the hero and a photograph, and the sidebar stacks a grey panel and a graphite panel. Paddings measured: 28.4444px (31 uses), 21.3333px (24), 35.5556px (19), 4.44444px, 6.66667px, 40px. News links have 35.5556px padding and measure 320px by 260px. The footer is 812px tall with an orange background and padding 35.5556px 0px 14.2222px.

## Elevation & Depth

There are no soft drop shadows on rendered elements. The nine measured shadows are 1px hairline shadows `rgb(77, 77, 77) 1px 0px 0px 0px, rgb(77, 77, 77) 0px 1px 0px 0px, rgb(77, 77, 77) 0px -1px 0px 0px` used to draw rules around the dark panel cells. The stylesheet also contains a `0 .625em 1.875em #0000024d` shadow (2 uses) and long stacked offset shadows, which were not measured on rendered elements. Depth is otherwise achieved with flat colour blocks.

## Shapes

Measured radii: 24px (16 uses, the buttons), 6px (3), 50% (2) and 8px (2). Buttons are 24px-rounded rectangles; the MENU button is 100px by 40px and READ MORE and CONTINUE are 120px by 48px. Tokens keep xs 6px, sm 8px, md 24px and pill 9999px. Panels and photographs are rectangular.

## Components

- **Primary button (MENU).** #b9b9b9 fill, #000000 text, AuxMono 12px uppercase, 24px radius, 100px by 40px; the button text toggles between "MENU" and "CLOSE".
- **Secondary button (READ MORE).** #b9b9b9 fill, #202020 text, 1px solid #202020 border, 24px radius, 120px by 48px.
- **Outlined button (CONTINUE).** Transparent, 1px solid #202020 border, #202020 text, 24px radius, 120px by 48px.
- **News link.** NonSans 21.3333px in #202020 with 35.5556px padding, 320px by 260px.
- **System Status list.** Numbered AuxMono labels in grey on the graphite panel with a dot marker at the right of each row.
- **Footer.** Orange (#ff5841), 812px tall, containing a newsletter signup, Platform and Solutions link columns and legal links.

## Design System Architecture

No public design-system or brand-guideline resource was found: the home page links none (only Privacy Policy, Terms of Use and a License Agreement PDF), and the press contact is an email address. No search was run. The de-facto system consists of two font families, a short palette of three flat colours (orange, graphite, grey), a type scale with fractional pixel sizes and 24px-rounded controls.

## Do's and Don'ts

- Do use flat blocks of #ff5841, #202020 and #b9b9b9 and let one greyscale photograph carry the imagery.
- Do set labels and body in AuxMono 12px uppercase with -0.24px tracking.
- Do set the display headline in NonSans at 177.778px with -3.55556px tracking, scaling to 64px on mobile.
- Do give buttons a 24px radius.
- Don't add drop shadows; only 1px hairline shadows were measured.
- Don't use the cookie-consent library's white and blue-grey variables as brand colours.
- Don't use PPEditorialNew; it is declared but not measured on any text.

## Responsive Behavior

The mobile pass measured: h1 64px / 64px with -1.28px tracking (desktop 177.778px / 170.667px), h2 20px / 24px (desktop 21.3333px), and the body text at 12px AuxMono, uppercase. Sidebar stacking, menu behaviour and breakpoints were not measured.

## Iteration Guide

1. Build the hero as a flat #ff5841 block with the giant NonSans headline in #202020.
2. Use a grey #b9b9b9 and a graphite #202020 stacked sidebar for the menu and the system status list.
3. Labels and body: AuxMono 12px uppercase.
4. Buttons: 24px radius, 40px or 48px tall.
5. Run `node web/scripts/verify-designs.mjs --slug=shift-5` after edits.
