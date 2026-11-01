---
version: alpha
name: Auth0
category: "Developer Tools & IDEs"
description: "Auth0's marketing site: light-weight Aeonik 400 display at 64px/72px with -1px tracking on a deep violet #20003a canvas, a red-to-purple gradient hero, white #ffffff buttons with black text and a 4px radius, Aeonik Mono labels with 1.5px tracking, #120021 header and footer with lavender #ebd3ff uppercase footer headings."
colors:
  canvas: "#20003a"
  ink: "#ffffff"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-deep: "#120021"
  ink-soft: "#e5e5e5"
  ink-lavender: "#ebd3ff"
  ink-warm: "#fffefa"
  ink-dim: "#ffffffe0"
  hairline: "#ffffff54"
  outline-border: "#fffffff2"
  nav-hover: "#d4a1ff"
  accent-mint: "#96ffbb"
  accent-pink: "#fd86d2"
typography:
  display:
    fontFamily: Aeonik, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 72px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: Aeonik, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 56px
  heading:
    fontFamily: Aeonik, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-1px"
  subheading:
    fontFamily: Aeonik, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1px"
  body:
    fontFamily: Aeonik, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
    letterSpacing: 0.2px
  button:
    fontFamily: Aeonik
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
    letterSpacing: 0.12px
  button-small:
    fontFamily: Aeonik
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: 0.32px
  nav:
    fontFamily: Aeonik, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  label-mono:
    fontFamily: "\"Aeonik Mono\", monospace"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 1.5px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 24px
  3xl: 80px
  4xl: 96px
spacing:
  s1: 4px
  s2: 7px
  s3: 8px
  s4: 9px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 24px
    height: 50px
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 7px 24px
    height: 40px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 7px 24px
    height: 40px
    borderColor: "{colors.outline-border}"
  announcement-pill:
    textColor: "{colors.ink}"
    typography: "{typography.label-mono}"
    rounded: "{rounded.xs}"
    padding: 8px 12px 8px 16px
    borderColor: "{colors.hairline}"
  nav:
    textColor: "{colors.ink-warm}"
  nav-link:
    textColor: "{colors.ink-warm}"
    typography: "{typography.nav}"
    padding: 9px 0px
  language-select:
    textColor: "{colors.ink-warm}"
    typography: "{typography.nav}"
    padding: 0px 16px 0px 20px
    height: 20px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 64px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-deep}"
    textColor: "{colors.ink-lavender}"
    padding: 64px 96px
---

# Auth0

## Overview

auth0.com ("Secure AI Agent & User Authentication | Auth0") is a long, entirely dark page — 11,012px tall at desktop —
in deep violets. A thin #120021 utility strip carries an event line ("Oct 21 | Beyond Oktane: Accelerating growth from
sign-up to enterprise scale — Register now →"), Login and an English language picker. The main header holds the
shield-and-wordmark logo, Build / Product / Solutions / Library menus, Pricing, a white **Sign up** button and an
outlined **Let's connect** button.

The hero sits on a vivid gradient that runs from coral-red at the top through magenta and purple into deep violet. An
outlined monospace pill ("Auth0 platform announcements →") sits above a centred headline, "Convert, protect, &
personalize every journey", set in a light Aeonik at 64px. A short paragraph and two buttons — white "See it in action"
and outlined "Talk to an expert" — follow. A four-across wall of white customer logos (McLaren, PGA of America, Zapier,
Cribl, CLAAS, Vialto, Jersey Mike's, Zinnia, ITA, Signify, Bluetooth, Jamf, Arduino, Maven AGI, Wyndham, Siemens)
fades into violet.

Further down: "Identity for the entire customer lifecycle" with a B2C/B2B toggle over a semicircular journey diagram
(Login, Checkout, Personalize); three large stat figures ("3 billion+", "99.99%", "23 billion+"); a tabbed "Built for
what you're building" section of outlined product cards with screenshots; an industry tab set ("Built for industries
that can't afford to slow down"); a code sample ("Integrate auth into any stack in minutes"); customer stories (McLaren,
CLAAS) in a masonry grid; "Read. Watch. Code. More." content cards; and the closer "Get ready to ship at the pace of
AI". The tone is developer-literate and calm: light weights, generous dark space, monospace labels.

## Colors

- **Canvas** — `canvas` #20003a is the body background and the largest painted area. Section bands step through
  close violets measured as band fills (#1e0036, #20013f, #260242, #29014b, #2f0154, #32005d, #21013c), giving a slow
  vertical gradient.
- **Deep surface** — `surface-deep` #120021 for the top bar and footer.
- **Primary** — `primary` #ffffff: every filled button on the page is white with `on-primary` #000000 text. Hovering
  the white buttons left the fill and text unchanged in the measurement.
- **Ink** — `ink` #ffffff is the most-read text color. `ink-soft` #e5e5e5 for secondary paragraphs, `ink-dim`
  #ffffffe0 (88% white) for muted copy, `ink-warm` #fffefa for header text, and `ink-lavender` #ebd3ff for footer
  headings and links.
- **Nav hover** — `nav-hover` #d4a1ff: Login and Pricing turn lavender on hover.
- **Accents** — `accent-mint` #96ffbb and `accent-pink` #fd86d2 are measured text colors on short runs (42 and 30
  characters respectively).
- **Lines** — `hairline` #ffffff54 (33% white) outlines cards and the announcement pill; `outline-border` #fffffff2
  draws the outlined buttons.

## Typography

Aeonik is the only text family, self-hosted from `cdn.auth0.com/website/cic-homepage/fonts/` (Regular, Medium), with
Aeonik Mono from `cdn.auth0.com/website/okta-fonts/` (Regular, Medium).

- **Display** — Aeonik 400, **64px / 72px, -1px**. Headlines are light, never bold.
- **Section heading** — **56px / 64px, -1px**; sub-sections **40px / 48px, -1px**. Stat figures and other headings
  measure 48px and 32px.
- **Body** — **16px / 22px, +0.2px** (16px is the most frequent size; 14px second).
- **Buttons** — Aeonik 500, **18px / 28px, +0.12px** for hero buttons; **16px / 24px, +0.32px** for header buttons.
- **Navigation** — **14px / 20px, 500**.
- **Mono labels** — Aeonik Mono 500, **14px / 20px, +1.5px tracking**, for the announcement pill and "FEATURE
  CAPABILITIES"-style labels. Footer headings are Aeonik 14px uppercase with 2px tracking.

Weights in use are only 400 (5,628 measured characters) and 500 (892). If Aeonik is not available to you, use a geometric grotesque with a light 400 weight and a matching monospace for labels.

## Layout

At 1280px the header shows 6 links; product sections use up to 3 card columns and the integration and customer
sections 4. Measured bands (y / height): top bar 0/106, gradient hero 106/943, lifecycle 1049/543, a media strip
1684/409, stats and product tabs 2093/2618 (two columns: left tab list, right content), media 4711/1116, industries
5827/813 (two columns), integration 6883/793, customers 7676/2454, closer 10130/167 and footer 10297/715. Headings are
centred in the hero, lifecycle, industries and customer sections and left-aligned inside product cards. Cards use 64px
padding; the footer uses 64px 96px. The spacing scale runs 4, 7, 8, 9, 10, 12, 14, 16, 18 and 20px.

## Elevation & Depth

Depth comes from color and light, not shadow. The hero gradient and soft glows behind visuals carry the drama; the one
repeating shadow is an orange glow, `rgba(255, 82, 0, 0.2) 0px 4px 100px 0px`. A single layered shadow stack
(`rgba(0, 0, 0, 0.1) 0px 0px 4px 0px` through `rgba(0, 0, 0, 0.08) 0px 44.9px 26.4px 0px`) appears once. Cards are flat panels separated from the canvas by 33% white hairlines and translucent #120021 overlays
(#120021cc, #120021b3).

## Shapes

Buttons and the announcement pill use a **4px** radius (the most frequent value). Cards use **12px**; **8px**, **6px**
and **10px** occur on smaller panels. Large radii — **24px**, **80px** and **96px** — occur on one to three elements each; in the capture the
B2C/B2B toggle is pill-shaped and the lifecycle diagram is a semicircle. The overall shape language is near-square controls inside softly rounded panels.

## Components

- **Primary button** — white fill, black Aeonik 18px/500 text, 4px radius, 50px tall, 10px 24px padding ("See it in
  action", "Read customer stories", "Discover Auth0 for B2B SaaS").
- **Small primary** — "Sign up" in the header: 16px/500, 40px tall, 7px 24px padding.
- **Outline button** — "Let's connect" / "Talk to an expert": transparent, white text, 1px #fffffff2 border, 4px
  radius, 40px tall.
- **Announcement pill** — Aeonik Mono 14px with 1.5px tracking, 1px #ffffff54 border, 4px radius, 8px 12px 8px 16px
  padding, trailing arrow; hover fills it with 6% white.
- **Product cards** — outlined 12px panels with 64px padding, a light heading, body text, a two-column "FEATURE
  CAPABILITIES" checklist, a white button and a screenshot.
- **Tabs / toggles** — a pill toggle (B2C / B2B) with a white active segment; industry tabs as outlined chips.
- **Navigation** — #fffefa text, 14px/500, chevrons on menus; hover turns Login and Pricing #d4a1ff.
- **Footer** — #120021 with uppercase lavender headings ("STARTING WITH AUTH0"), four columns of links, a newsletter
  field and social icons.

## Design System Architecture

No public Auth0 web design system or brand guideline page was found: https://auth0.com/brand returns 404, and
https://auth0.com/press redirects to Okta's newsroom (https://www.okta.com/press-room/), which offers Okta logo,
leadership-photo and product-image downloads but no Auth0 kit, colors or typefaces.

The shipped site exposes almost nothing in `:root` — only `--content-width` and `--font-main` — so the system lives in
component CSS. Fonts are split across two CDN paths: `website/cic-homepage/fonts/` for Aeonik and
`website/okta-fonts/` for Aeonik Mono: the mono face is served from a folder named after Okta.

## Do's and Don'ts

**Do**
- Keep everything on deep violet (#20003a, #120021) with white type.
- Set headlines in Aeonik 400 with -1px tracking; let size, not weight, create hierarchy.
- Use white buttons with black text and a 4px radius for the main action; outline buttons for the second.
- Use Aeonik Mono with wide tracking for small labels and announcements.
- Use the red-to-purple gradient and glows for emphasis instead of shadows.

**Don't**
- Don't introduce bold display weights; only 400 and 500 were measured.
- Don't use colored filled buttons; the measured filled buttons are all white.
- Don't put light backgrounds behind sections; no light band was measured.
- Don't round buttons beyond 4px.

## Responsive Behavior

Measured at 390px:

- Display: **44px / 56px**, normal tracking (desktop 64px/72px, -1px). Section heading: **40px / 48px**.
- Body sample: 16px / 26px, +0.1px.
- Primary button "See it in action": 15px / 22px, 500, padding 12px 16px, 50px tall, 4px radius.
- Header: 126px tall, 2 visible links and a visible menu toggle labelled "Menu".
- A 40px band with an #ef5a39 fill sits directly under the header (y 126), then the hero (y 166, 744 tall).
- Every band records 1 content column, with content insets of 12–16px on most bands; maxCardColumns is 2.
- Section headings in product cards measure 24px; customer heading 32px.

Menu contents and tab behaviour on mobile were not measured.

## Iteration Guide

1. Set the page on #20003a and the header/footer on #120021; use white Aeonik text.
2. Build the hero with a red-to-purple gradient, a mono announcement pill, a centred 64px/72px Aeonik 400 headline at
   -1px, and a white + outlined button pair.
3. Add a white logo wall and large light stat figures (48px).
4. Build product sections as 12px-radius outlined cards with 64px padding and #ffffff54 hairlines.
5. Keep buttons at 4px radius; use 18px/500 in content and 16px/500 in the header.
6. On mobile, step display to 44px/56px and headings to 40px/48px.
