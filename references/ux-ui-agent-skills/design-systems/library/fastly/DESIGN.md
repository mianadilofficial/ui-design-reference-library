---
version: alpha
name: Fastly
category: "Backend, Database & DevOps"
description: "Fastly alternates #f8f5f4 beige and #000000 black full-width bands, sets everything in TT Hoves Pro (72px/400 headlines at -2.88px, 16px/22.4px body in #4a4a49), uses #0067d1 blue 4px-radius buttons (#0073eb on black, hover #165099), white #dfdcdc-bordered cards and red #ff282d line-art accents."
colors:
  canvas: "#f8f5f4"
  page-body: "#f8f5f4"
  surface-card: "#ffffff"
  ink: "#4a4a49"
  primary: "#0067d1"
  on-primary: "#ffffff"
  surface-black: "#000000"
  ink-on-dark: "#b2b2b2"
  hairline: "#dfdcdc"
  primary-hover: "#165099"
  surface-graphite: "#1c1816"
  accent-red: "#ff282d"
  border-dark: "#333333"
  primary-on-dark: "#0073eb"
typography:
  display:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 75.6px
    letterSpacing: "-2.88px"
  display-mobile:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 50.4px
    letterSpacing: "-2.24px"
  heading:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 61.6px
    letterSpacing: "-2.24px"
  title-lg:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    letterSpacing: "-0.64px"
  body:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 17.6px
  nav:
    fontFamily: "TTHovesPro-c66fd427fd6ba346, \"TTHovesPro-c66fd427fd6ba346 fallback: Arial\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 48px
  s8: 64px
  s9: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 41px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary-on-dark}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 41px
  link:
    textColor: "{colors.surface-black}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.surface-black}"
    padding: 0px 24px
  nav-link:
    textColor: "{colors.surface-black}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.surface-black}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.surface-card}"
---

# Fastly

## Overview

Fastly's home page ("Powering the best of the internet | Fastly") is a high-contrast edge-cloud site that alternates warm beige and pure black bands. A 73px black promo strip ("Take control of all AI and agent traffic with Fastly AI Runtime Control — Learn more") sits above a beige header with two rows: a utility row (English language selector, Login, Customer Support, search) and the main row with the lowercase "fastly" wordmark, Platform, Solutions, Resources, Company, Pricing, an outlined "Try Fastly free" and a blue "Talk to an expert".

The hero is black: "Move fast. Stay safe." centred in white at 72px with a regular (400) weight and tight tracking, a one-line subtitle, and two blue buttons ("Request a demo", "Contact sales"). Below it a product dashboard screenshot floats with a stat callout ("Origin offload 94.2%") and a chat bubble, framed by sweeping red and orange line-art waves at the edges. A beige band then shows a logo strip (TED, Sotheby's, SpaceX, Canon, The New York Times, BuzzFeed) and "Experience the Fastly platform" next to a stack of big numeric stats (">5 T daily requests served", "32% faster time to first byte", "622 Tbps global edge network capacity", "<150 ms regional mean purge time").

"Leading brands choose Fastly" uses tabbed customer stories (USA Today Co., JetBlue, Shutterstock, ITVX) with a white quote card over a photo. A black "A platform built for growing business demands" band has a four-tab switcher (Deliver, Secure, Deploy, Observe) over a dark 3D illustration, followed by "The intelligent network" with a glowing globe. A beige "Empower your digital experiences" carousel of white cards, an FAQ accordion and a black closing band ("Experience better performance at the edge") with red line art lead to the black footer.

The voice is confident and metric-driven, with occasional footnote markers on stats.

## Colors

The stylesheet names its palette explicitly (`--COLOR--*`), and the measured page uses:

- **Canvas / page-body #f8f5f4** (`--COLOR--beige`) — the body background and the largest painted area (9,597 units).
- **Surface-black #000000** (`--COLOR--black`) — black bands, the footer, and heading text on beige (6,093 units of background, 1,723 characters of text).
- **Surface-card #ffffff** — cards, accordion rows and the story card.
- **Ink #4a4a49** (`--COLOR--grey--60`) — the most-read text color (3,607 characters).
- **Ink-on-dark #b2b2b2** (`--COLOR--grey--30`) — body text on black bands (1,585 characters).
- **Primary #0067d1** (`--COLOR--blue`) — blue buttons on light backgrounds; also the nav link hover color.
- **Primary-on-dark #0073eb** (`--COLOR--blue--inverse`) — the brighter blue used for buttons on black.
- **Primary-hover #165099** (`--COLOR--blue--70`) — both blue buttons on hover.
- **On-primary #ffffff**.
- **Hairline #dfdcdc** (`--COLOR--grey--20`) — card and accordion borders (25 borders). **Border-dark #333333** (`--COLOR--grey--80`) — borders on black.
- **Surface-graphite #1c1816** (`--COLOR--grey--90`) — dark panels (745 units).
- **Accent-red #ff282d** (`--COLOR--red`) — the red family behind the line-art waves; the CSS also defines `--COLOR--red--inverse #ea1709` and purples (`--COLOR--purple #9044fe`).

## Typography

One family: **TT Hoves Pro**, loaded as a variable font (400–700) under a hashed name (`TTHovesPro-c66fd427fd6ba346`) with an Arial-based metric fallback. The CSS also references Roboto Mono as `--TYPOGRAPHY--type--font-family--mono`.

- **Display** — 72px/75.6px, weight 400, -2.88px (-0.04em). Used for the hero and the closing band.
- **Heading** — 56px/61.6px, 400, -2.24px ("Experience the Fastly platform").
- **Title-lg** — 36px, 400, -0.64px (card and tab-panel headings). Stats use 48px at -0.96px.
- **Body** — 16px/22.4px, 400.
- **Button** — 16px/17.6px, 600.
- **Nav** — 14px/21px, 400.

Sizes in use: 16px (5,576 characters), 14px, 24px (at -0.32px), 18px, 36px, 56px, 12px, 72px, 48px — matching the CSS scale (`--TYPOGRAPHY--font-size--lg 1.125rem`, `--xl 1.5rem`, `--2xl 2rem`, `--3xl 2.25rem`, `--4xl 3rem`, `--5xl 3.5rem`, `--6xl 4.5rem`). Headlines are never bold; large sizes are always weight 400 with negative tracking, and 600 is reserved for buttons and link labels. TT Hoves Pro is a commercial typeface; a neutral geometric grotesque is the closest substitute.

## Layout

Measured at 1280px; the CSS sets `--LAYOUT--max-width: 1440px`. Bands span full width and alternate: black promo (73px), beige header (121px), black hero (500px), beige platform section (1,684px), black platform band (1,676px), beige solutions section (1,545px), black closing band and footer (1,494px). Content sits between roughly x=49 and x=1198. The hero copy is centred in a 582px-wide headline block; the platform section uses up to 6 columns, the solution cards 4 at 264px wide.

Gaps: 8px (182 times), 4px, 24px, 48px, 12px, 16px, 64px, 32px, 80px. Paddings: 24px (47 times), 16px, 8px, 32px, 12px, 80px (section padding), 48px, 64px. The header utility row and main row stack to 120px total.

## Elevation & Depth

Mostly flat. Measured shadows: a 1px inset blue ring (`rgb(0, 115, 235) 0px 0px 0px 1px inset` and `rgb(0, 103, 209) 0px 0px 0px 1px inset`) on outlined buttons such as "Try Fastly free", and one soft drop `rgba(0, 0, 0, 0.15) 0px 70px 80px -70px` under a floating element. Cards rely on a 1px #dfdcdc border on white against beige. Depth comes from the black-band photography, glowing 3D illustrations and red line-art waves. Focus shows a 2px solid blue outline (#0067d1 or #0073eb) at 2–4px offset.

## Shapes

Tight corners: 4px on 59 elements (buttons, cards, accordion rows, the language selector) and 50% circles on 8 elements. The CSS radius scale runs from `--LAYOUT--radius--xs .125rem` through `sm .25rem`, `md .5rem`, `lg .75rem`, `xl 1rem`, `2xl 1.5rem`, `6xl 6rem` to `full 9999px`, but the home page uses only 4px and circles. Line-art waves add curved, energetic shapes that contrast with the rectangular UI.

## Components

- **Primary button** — #0067d1 fill, white TT Hoves Pro 16px/600, 4px radius, 41px tall, 12px 16px padding; hover #165099; focus 2px outline.
- **Primary on dark** — #0073eb fill, same metrics ("Request a demo", "Explore the platform", "Take a closer look").
- **Outlined button** — transparent with a 1px blue inset ring ("Try Fastly free"); on hover fills #165099 with white text.
- **Language selector** — 1px bordered, 4px radius, 39px tall, 8px 12px padding, 14px text.
- **Nav links** — 14px #000000; on hover turn #0067d1 and underline.
- **Stat row** — 48px numbers with 14px descriptions and footnote markers, separated by hairlines.
- **Card** — white, 1px #dfdcdc border, 4px radius, 264px wide, icon + 36px title + text + "Learn more →".
- **Tabs** — a row of four equal tabs; the selected tab is white with black text.
- **FAQ accordion** — white rows with #dfdcdc borders and a chevron.
- **Footer** — black, uppercase 14px/19.6px column labels (PLATFORM, SOLUTIONS, RESOURCES, COMPANY), white links.

## Design System Architecture

No public brand guidelines were found: https://www.fastly.com/brand returned HTTP 404 and https://www.fastly.com/press is a news page that lists only a media contact. The shipped CSS shows a well-structured token layer with namespaced custom properties: `--COLOR--*` (base palette such as `--COLOR--blue`, `--COLOR--blue--inverse`, `--COLOR--grey--20…90`, plus semantic aliases like `--COLOR--text-body`, `--COLOR--red-on-white`, `--COLOR--red-on-black`, `--COLOR--content-background`), `--TYPOGRAPHY--*` (families, weights such as `--TYPOGRAPHY--font-weight--bold: 700`, sizes, line heights), `--LAYOUT--*` (radius, size, max width, header heights such as `--LAYOUT--global-header-height-mobile: 70px`) and `--FORM--*`. The `-inverse` naming encodes a light/dark pairing: each accent has a variant for black backgrounds. Breakpoints are max-width oriented (500, 530, 550, 600, 749, 800, 896px).

## Do's and Don'ts

**Do**
- Alternate full-width #f8f5f4 beige and #000000 black bands.
- Set headlines in TT Hoves Pro weight 400 with -0.04em tracking at 72px and 56px.
- Use #0067d1 buttons on beige and #0073eb on black, both 4px radius and 41px tall.
- Present proof as large numeric stats with short labels.
- Use white #dfdcdc-bordered cards on beige.

**Don't**
- Don't bold headlines.
- Don't use pure white as the page background; the canvas is beige.
- Don't round corners beyond 4px on buttons or cards.
- Don't use #0067d1 on black where `--COLOR--blue--inverse` #0073eb is defined.
- Don't let the red line art become a UI color; it is decorative.

## Responsive Behavior

Measured at a 390px viewport: the header is 70px (matching `--LAYOUT--global-header-height-mobile: 70px`) with 1 visible header link ("English") and a visible menu toggle, as recorded by the mobile pass. The h1 drops from 72px/75.6px to 48px/50.4px with -2.24px tracking; the h2 drops from 56px to 36px/39.6px with -0.96px. Body stays 16px/22.4px. The first primary button on mobile is "Request a demo" (#0073eb) at 43px tall with a 22.4px line height. Content runs from x=16 to x=374 in 1–2 columns, and the mobile page is about 8,390px tall versus 7,359px on desktop. Carousel and tab behaviour on mobile were not measured.

## Iteration Guide

1. Start with #f8f5f4 canvas, #4a4a49 body text and #000000 headings, all TT Hoves Pro.
2. Add the black promo strip and the two-row beige header (utility row + main nav).
3. Alternate beige and black bands; on black use #b2b2b2 body text and #0073eb buttons.
4. Headlines at 72/56/36px weight 400 with the measured negative tracking.
5. Build cards and accordions as white boxes with #dfdcdc borders and 4px radius.
6. Add red line-art waves only as decoration at band edges.
7. Re-run the gate after edits.
