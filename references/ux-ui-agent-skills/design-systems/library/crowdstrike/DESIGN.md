---
version: alpha
name: CrowdStrike
category: "Tech & AI"
description: "CrowdStrike's site: crowdstrikeSharpSans bold headlines at 56px/62px and Neue Haas Grotesk Display for UI and body, CrowdStrike red #ec0000 buttons with 6–8px radii that hover to #d30000, black #000000 hero and platform bands with white type, light #f8f8f8 pricing sections and white 22px-radius cards with a soft 50px shadow."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  page-largest: "#f8f8f8"
  ink: "#ffffff"
  primary: "#ec0000"
  on-primary: "#ffffff"
  primary-hover: "#d30000"
  ink-body: "#181818"
  ink-grey: "#a7a9ac"
  ink-muted: "#707070"
  overlay-glass: "#393939a6"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: crowdstrikeSharpSans, helvetica, arial, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 62px
  display-mobile:
    fontFamily: crowdstrikeSharpSans, helvetica, arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38px
  heading:
    fontFamily: crowdstrikeSharpSans, helvetica, arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 54px
  subheading:
    fontFamily: neueHaasGroteskDisplayPro, helvetica, arial, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 27px
  body:
    fontFamily: neueHaasGroteskDisplayPro, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 17px
  button:
    fontFamily: neueHaasGroteskDisplayPro, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19px
rounded:
  xs: 3px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 13px
  2xl: 14px
  3xl: 16px
  4xl: 22px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 8.83px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 64px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-red:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 45px
    borderColor: "{colors.primary}"
  button-outline:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 45px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    rounded: "{rounded.4xl}"
    padding: 56px 32px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 0px 50px 0px
---

# CrowdStrike

## Overview

crowdstrike.com/en-us ("CrowdStrike: We Stop Breaches with AI-native Cybersecurity") is a high-contrast red, black and
white page, 10,468px tall at desktop. A 56px red (#ec0000) alert bar runs across the top ("U.S. Government Disrupts
FAMOUS CHOLLIMA Operation with CrowdStrike Assistance — Read more"), above a white utility row (Experienced a breach?,
Blog, Contact us, Careers, language) and the main navigation: the CrowdStrike falcon logo, Platform, Services,
Solutions, Cyber SI Lab, Why CrowdStrike, Resources, Pricing and a red "Start free trial" button.

The first band is an event promo on a dark photo — "Watch the Fal.Con Europe keynotes live" in huge bold white type with
a red "Get livestream updates" button and three dark event cards below. The platform hero follows on black: "CrowdStrike
Falcon Platform: One unified platform to secure the agentic enterprise", two paragraphs, a red "Explore now" button,
and a large semicircular platform diagram (data layers, "SINGLE SENSOR", "AGENTIC SECURITY OPERATIONS"). Then a black
"Turning the Falcon platform advantage into frontier AI breakthroughs" section with a red/teal model diagram; a
"Recognition by trusted analysts" carousel (Gartner Magic Quadrant); the light #f8f8f8 pricing area ("Tailored bundles
to stop breaches": Falcon Free Trial, Go, Pro, Enterprise with "Add to cart" buttons and feature check lists, then a
dark Falcon Complete card); customer stories; product cards ("Secure your AI", "Stop identity attacks"); an adversary art band ("Know them. Find them. Stop them."); a free-trial strip and a white footer.
The voice is militant and confident: "We stop breaches", adversaries named like villains.

## Colors

- **CrowdStrike red** — `primary` #ec0000 for every filled button, the alert bar, nav hover text and the card titles;
  hover `primary-hover` #d30000.
- **Black** — `canvas` #000000 for the hero and platform bands (dark bands also measure #030102, #040b15, #02050c).
- **Light** — `page-largest` #f8f8f8 is the largest painted area (body background, pricing); `page-body` #ffffff for
  cards and the footer.
- **Ink** — #000000 is the most-read text on light; `ink` #ffffff on black; `ink-body` #181818 for paragraphs and
  footnotes; `ink-grey` #a7a9ac and `ink-muted` #707070 for secondary text.
- **Glass** — `overlay-glass` #393939a6 (dark grey at 65%) for cards over imagery.
- **Lines** — `hairline` #cccccc; red #ec0000 and black borders on buttons.
- A yellow #ecd000 appears only in a negligible area.

## Typography

Two families ship from `/etc.clientlibs/crowdstrike/clientlibs/crowdstrike-fonts/`:

- **crowdstrikeSharpSans** (CrowdstrikeSharpSans Medium and Bold) — headlines. Display **56px / 62px, 700**;
  section headings **48px / 54px, 700**; also 40px, 32px and 28px headings. Tracking is normal.
- **neueHaasGroteskDisplayPro** (Neue Haas Grotesk Display Pro Light, Roman, Medium, Bold) — everything else: card
  titles **20px / 27px, 600**; buttons **16px / 19px, 600** ("Add to cart" adds +0.6px tracking); body/footnotes
  **14px / 17px, 500**; 24px lead text is the second most frequent size.

Neue Haas Grotesk Display carries 5,332 measured characters, Sharp Sans 1,281. Weights in use: 600, 500, 400 and 700.
Inter files also load from a third-party chat script (js.qualified.com) and are not part of the brand type.

## Layout

At 1280px: red alert bar 0/56, white utility/nav 56/144, event band 200/401, dark strip 601/58, platform hero 659/766
(two columns), dark bands 1425–2068, black AI section 2068/1286, analyst carousel 3354/488, dark strips to 4196, light
pricing 4196/4361 (two columns; pricing cards run 4 across), adversary band 8557/556, light 9113/417, trial strip
9530/250, white footer 9780/688. Headings centre in the platform and pricing sections; product cards run 3 across.
Spacing steps: 1, 2, 5, 6, 8, 8.83, 10, 11, 12, 16px; large cards use 56px 32px padding.

## Elevation & Depth

Light-surface cards use a very soft halo, `rgba(0, 0, 0, 0.05) 0px 0px 50px 0px` (4 elements). One element uses
`rgba(0, 0, 0, 0.2) 0px 10px 20px 0px`, and one dark control uses an inset top highlight with a deep drop
(`rgba(255, 255, 255, 0.2) 0px 1px 0px 0px inset, rgba(0, 0, 0, 0.45) 0px 12px 12px 0px`). On black, depth comes from
glowing red diagrams, photography and translucent #393939a6 panels.

## Shapes

**8px** is the dominant radius (40 elements — buttons and small cards). **32px** (11) rounds large panels, including
split shapes with one rounded side (`32px 0 0 32px`, `32px 32px 0 0`). **6px** for the header and outline buttons,
**24px** and **22px** for cards, **3px**, **13px** and 50% circles. Headline type is sharp and heavy; containers are
softly rounded.

## Components

- **Header CTA** — "Start free trial": #ec0000, 1px red border, white 16px/600, 6px radius, 64px tall; hover #d30000.
- **Red button** — "Get livestream updates", "Add to cart", "Hear their story": #ec0000, 8px radius, 12px 16px padding,
  45px tall.
- **Outline button** — "Explore all bundles": transparent, 1px black border, black text, 6px radius, 45px tall.
- **Navigation** — black 16px links that turn #ec0000 on hover; utility links underline on hover.
- **Pricing card** — white, product name and price, red "Add to cart", outlined "Try free", check-marked feature list.
- **Large card** — white, 22px radius, 56px 32px padding, red title text, the 50px soft shadow.
- **Event card** — dark #393939a6 glass panel over a photo with a 20px/600 title.
- **Footer** — white, five link columns, legal row.

## Design System Architecture

CrowdStrike publishes a brand resources page at https://www.crowdstrike.com/brand with logo downloads (PNG, SVG, EPS)
and a link to a full Brand Guide hosted on Box (https://crowdstrikeinc.app.box.com/s/qqwicq1hr0i1ukccfsv8uzagpllnuve9).
The Box link redirects to a login page, so no color or type values are taken from it; the brand page itself lists
none.

Site assets are served from `/etc.clientlibs/crowdstrike/…` with a dedicated `crowdstrike-fonts` client library. `:root` exposes only `--pseudo-sidenavheight`, so color and spacing are compiled into
component CSS; the de-facto system is red #ec0000 / #d30000, black, #f8f8f8 and white, two typefaces, and 6/8/22/32px
radii.

## Do's and Don'ts

**Do**
- Use #ec0000 for every primary action and hover to #d30000.
- Set headlines in crowdstrikeSharpSans 700, large and tight; set UI and body in Neue Haas Grotesk Display.
- Alternate black storytelling bands with #f8f8f8 commercial sections.
- Use red-glow diagrams and adversary artwork on black.
- Keep buttons at 6–8px radii; round large cards at 22–32px.

**Don't**
- Don't use pill buttons; measured buttons are 6px and 8px.
- Don't use red as a background for long text — the red band is a thin alert bar.
- Don't add heavy shadows on light cards; the measured halo is 5% black.
- Don't treat the chat widget's Inter font as brand type.

## Responsive Behavior

Measured at 390px:

- Display **32px / 38px, 700** (desktop 56px); section heading **28px / 34px**. Body footnotes stay 14px / 17px.
- The first red button ("Get livestream updates") measures 14px/600, 6px 8px padding, 31px tall, 6px radius.
- The alert bar grows to 68px; the white header is 67px with a menu toggle and no visible header links.
- Bands: event 135/405, dark 540/204, platform 744/324, black AI section 1416/1338, light pricing 2754/7229 (1 column),
  adversary band 9983/278, black 10261/253, light 10514/559, trial 11073/230, footer 11303/706. Content insets are
  16px on most bands.

Menu contents were not measured.

## Iteration Guide

1. Put a thin #ec0000 alert bar above a white header with black 16px links and a red 64px "Start free trial" button.
2. Open on black: crowdstrikeSharpSans 700 at 56px/62px in white, a red 8px-radius button, and a glowing platform
   diagram.
3. Use #f8f8f8 for pricing with white cards, red "Add to cart" buttons and check lists.
4. Use white 22px-radius cards with 56px 32px padding and the 5% 50px halo for feature callouts.
5. Close with adversary art on black and a white footer.
6. On mobile, 32px display, 28px headings, smaller 31px red buttons.
