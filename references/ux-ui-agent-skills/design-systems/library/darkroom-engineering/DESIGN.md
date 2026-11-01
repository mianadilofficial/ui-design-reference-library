---
version: alpha
name: darkroom.engineering
category: "Agencies & Studios"
description: "darkroom.engineering is a black #000000 terminal-like site printed entirely in one red, #e71419: uppercase Therma condensed display at 177.778px ('WHERE THINGS GET DEVELOPED', -8.88888px tracking), a 12.4444px/200 uppercase mono for everything else, burnt-red #390205 chips and rules, red-filled 'LET'S TALK →' buttons with black text, 0px corners and no shadows."
colors:
  canvas: "#000000"
  ink: "#e71419"
  primary: "#e71419"
  on-primary: "#000000"
  burnt-red: "#390205"
  red-dim: "#ba0e12"
  dark-red: "#c20510"
  dark-grey: "#262626"
  light-grey: "#e5e5e5"
typography:
  display:
    fontFamily: therma, "therma Fallback"
    fontSize: 177.778px
    fontWeight: 400
    lineHeight: 142.222px
    letterSpacing: "-8.88888px"
    textTransform: uppercase
  display-mobile:
    fontFamily: therma, "therma Fallback"
    fontSize: 104px
    fontWeight: 400
    lineHeight: 83.2001px
    letterSpacing: "-5.19999px"
    textTransform: uppercase
  heading:
    fontFamily: therma, "therma Fallback"
    fontSize: 106.667px
    fontWeight: 700
    lineHeight: 85.3333px
    letterSpacing: "-5.33333px"
  heading-mobile:
    fontFamily: therma, "therma Fallback"
    fontSize: 74.88px
    fontWeight: 700
    lineHeight: 59.904px
    letterSpacing: "-2.2464px"
  label:
    fontFamily: mono, "mono Fallback", ui-monospace, SFMono-Regular, Consolas, monospace
    fontSize: 8.88889px
    fontWeight: 200
    lineHeight: 10.6667px
    letterSpacing: "-0.0888889px"
    textTransform: uppercase
  body:
    fontFamily: mono, "mono Fallback", ui-monospace, SFMono-Regular, Consolas, monospace
    fontSize: 12.4444px
    fontWeight: 200
    lineHeight: 14.9333px
    letterSpacing: "-0.124444px"
    textTransform: uppercase
  body-mobile:
    fontFamily: mono, "mono Fallback", ui-monospace, SFMono-Regular, Consolas, monospace
    fontSize: 12.48px
    fontWeight: 200
    lineHeight: 15.6px
    letterSpacing: "-0.1248px"
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 3.56px
  s2: 5.33px
  s3: 7.11px
  s4: 7.11px
  s5: 14.22px
  s6: 16px
  s7: 17.78px
  s8: 21.33px
  s9: 21.33px
  s10: 28.44px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 3.55556px 7.11111px
    height: 39px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 3.55556px 7.11111px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 14.2222px
  nav-link:
    backgroundColor: "{colors.burnt-red}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 7.11111px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 14.2222px
---

# darkroom.engineering

## Overview

darkroom.engineering (page title "where things get developed - darkroom.engineering") is a development studio. Its home page copy addresses "teams who care about craft", and its GitHub organisation describes it as "where development happens", a studio where "design, engineering, and system thinking" work together. The studio publishes widely used open-source tools: Lenis ("Smooth scroll as it should be"), Satus ("Advanced Next.js App Router starter for content-driven sites"), Hamo, Tempus, Elastica and Aniso. The site's footer asks visitors to "BECOME AN OPEN SOURCE SPONSOR".

The site looks like a red-on-black terminal printout. The capture opens with a thin header bar ("DARKROOM.ENGINEERING" on a burnt-red chip, then "WORK", "ABOUT", "CONTACT"), the full-width uppercase headline "WHERE THINGS GET DEVELOPED" in a condensed display face with its words pushed to the edges, three small columns of mono text, and a red "MANIFESTO →" button. The first project, "Oreo & BTS", follows as a huge heading over a full-width neon 3D render. Further down: a long dark interval, "WHAT CLIENTS SAY" with three quote columns, "TOOLS WE BUILD AND USE. NOW YOURS TOO." with a pixel-square red artwork and the line "SATUS LENIS HAMO TEMPUS", the statement "WE BRING BRANDS AND INTERFACES TO LIFE WITH CODE THAT RUNS SMOOTH AND SCALES RIGHT.", a four-column list of services, clients and capabilities, and an "ACTIVITY LOG" — a dated table of commits and launches separated by thin rules. Everything except the project imagery is the same red.

## Colors

The CSS declares the palette by name, and one value does nearly all the work.

- **Canvas `#000000`** (`--color-black`) — the page background, 3,072 of 3,232 measured background area.
- **Ink / primary `#e71419`** (`--color-red`) — text (4,552 of 4,626 measured characters), headings, rules, and the fill of action buttons.
- **On-primary `#000000`** — the label colour inside red buttons ("LET'S TALK →", "MANIFESTO →").
- **Burnt-red `#390205`** (`--color-burnt-red`) — the dark red behind the "DARKROOM.ENGINEERING" nav chip and the only measured border colour (34 elements), used for the table and section rules.
- **Red-dim `#ba0e12`** — a darker red text colour measured on 15 characters.
- **Dark-red `#c20510`**, **dark-grey `#262626`**, **light-grey `#e5e5e5`** — declared (`--color-dark-red`, `--color-dark-grey`, `--color-light-grey` / `--color-contrast`) but not measured as rendered on the home page.

The CSS also declares `--color-primary: #fff` and `--color-secondary: #000`, with `--color-hover: color-mix(in oklab, var(--color-secondary) 83%, transparent)`; on the measured page the rendered primary colour is red, so these named theme slots do not map one-to-one to what renders.

## Typography

Three families, declared as CSS variables (`--font-therma`, `--font-mono`, `--font-sauce`) and loaded from the site's media folder:

- **therma** — file `ASTherma_BoldCondensed`, a condensed display face. The H1 "WHERE THINGS GET DEVELOPED" is 177.778px with a 142.222px line-height and -8.88888px tracking (-5%), uppercase, computed weight 400. Project titles ("Oreo & BTS", h2) are 106.667px/700 with an 85.3333px line-height and -5.33333px tracking (-5%).
- **mono** — file `ReplicaMonoLLWeb_Regular`, registered at weight 200: all body text, nav, buttons and tables at 12.4444px/14.9333px, -0.124444px tracking (-1%), uppercase. Labels such as "SERVICES" (h3) are 8.88889px/10.6667px.
- **sauce** — file `ASModule2VF`, a variable face used on 8 measured characters at 223.112px.

The type system is two-voice: very large condensed capitals with tight negative tracking, and very small uppercase mono. There is no mixed case except the project headings, and no intermediate sizes besides a 16px value (73 characters).

## Layout

Content spans x = 7 to 1266 at 1280px — almost edge to edge. The header and footer have 0px 14.2222px padding. Measured gaps are 14.2222px (49 elements), 7.11112px, 28.4444px, 17.7778px and 21.3333px; paddings are 7.11111px (48), 14.2222px (40), 3.55556px, 5.33333px and 21.3334px. `maxCardColumns` is 3.

The CSS defines the grid with fluid variables tied to a reference device width: the root declares `--device-width: 375`, `--columns: 4`, `--gap` and `--safe` as `calc(((8 * 100) / var(--device-width)) * 1vw)`, `--header-height` as `calc(((28 * 100) / var(--device-width)) * 1vw)`, and `--layout-width` / `--column-width` derived from them. Sizes therefore scale with the viewport, which is why measured values are fractional.

Composition is strictly typographic: small mono paragraphs in narrow columns, huge headings that span the width, and a full-width image for the featured project. Large empty black areas separate sections in the capture.

## Elevation & Depth

None. No box-shadow is measured. The page is flat black; separation comes from #390205 rules (table rows in the activity log, section dividers) and from the red-filled buttons and chips. The only depth is inside project imagery.

## Shapes

Everything is square. `borderRadii` is empty — every element computes 0px — and the generated `rounded.none` is 0px. The logo is an SVG row of small squares (filled and outlined) at 136×9px, reinforcing the grid-of-squares motif seen in the "Tools" pixel artwork. Arrows (→) end every action label.

## Components

- **Header bar** — 20px tall, black, 0px 14.2222px padding; "DARKROOM.ENGINEERING" chip with #390205 background, red text, 0px 7.11111px padding; then "WORK", "ABOUT", "CONTACT".
- **Primary button** — red #e71419 fill, black 12.4444px/200 uppercase mono, 0px radius, padding 3.55556px 7.11111px, 39px tall, label followed by "→" ("LET'S TALK →"). On hover it inverts: black fill, red text.
- **Inline action** — "MANIFESTO →", same red block style at 20px tall.
- **Sponsor chip** — "BECOME AN OPEN SOURCE SPONSOR" on #390205 in the footer.
- **Section heading** — uppercase condensed display in red ("WHAT CLIENTS SAY", "ACTIVITY LOG").
- **Activity log** — a full-width table: date, project, description columns in 12.4444px mono, rows separated by #390205 rules.
- **Focus** — focused links show a 2px solid red outline.

## Design System Architecture

No public darkroom.engineering design system or token package was found. The pages opened were the home page and the GitHub organisation https://github.com/darkroomengineering, whose pinned repositories are Lenis, Satus (a Next.js starter template), Hamo, Tempus, Elastica and Aniso; none is described as a design system.

The de-facto system is in the site's CSS custom properties: named colours (`--color-red`, `--color-burnt-red`, `--color-dark-red`, `--color-black`, `--color-white`, `--color-light-grey`, `--color-dark-grey`) mapped to theme slots (`--color-primary`, `--color-secondary`, `--color-contrast`, `--color-hover`), font variables, a full set of named easing curves (`--ease-out-expo` cubic-bezier(.19, 1, .22, 1), `--ease-gleasing` cubic-bezier(.4, 0, 0, 1) and others), and the device-width-relative grid variables above. Class names on the logo (`ximscvo`, `x7btfbl`) are atomic generated classes. The stylesheet has one breakpoint pair: `(min-width:800px)` and `(max-width:799.98px)`.

## Do's and Don'ts

**Do**
- Print everything in #e71419 on #000000.
- Set headlines in condensed uppercase at very large sizes with -5% tracking.
- Set all other text in 12.4444px uppercase mono at weight 200 with -1% tracking.
- Use red-filled square buttons with black labels and a trailing "→".
- Separate rows and sections with #390205 rules.
- Scale sizes and gaps fluidly from the declared grid variables.

**Don't**
- Don't introduce a second hue for text or UI.
- Don't round corners or add shadows.
- Don't use mixed-case body text.
- Don't add mid-size headings; the scale jumps from 12px mono to 100px+ display.
- Don't assume `--color-primary` (#fff) is the visible accent; red renders.

## Responsive Behavior

Measured at 390px wide:

- The H1 becomes 104px/83.2001px with -5.19999px tracking.
- Project headings become 74.88px/700/59.904px with -2.2464px.
- Body text becomes 12.48px/15.6px with -0.1248px; labels 8.32px.
- The primary button shown is "MANIFESTO →".
- 1 header link stays visible and a menu toggle labelled "Open menu" appears.
- Content spans x = 4 to 316 in the first band; `maxCardColumns` stays 3.

The only CSS breakpoint is 800px. Layout between 390px and 1280px was not measured.

## Iteration Guide

1. Black #000000 page, all type #e71419.
2. Load a condensed display face for headlines and a monospace at weight 200 for everything else.
3. Set the hero at 177.778px/142.222px uppercase, -8.88888px tracking, words spread across the width.
4. Set body, nav and tables at 12.4444px/14.9333px uppercase mono.
5. Make actions square red blocks with black text, 3.55556px 7.11111px padding, "→" at the end; invert on hover.
6. Use #390205 for chips and rules; keep corners at 0px.
7. On mobile, scale the hero to 104px and headings to 74.88px and collapse the nav behind "Open menu".
