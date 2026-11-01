---
version: alpha
name: Astro UXDS (Rocket Communications)
category: "Design Systems"
description: "Rocket Communications' site, creator of the Astro Space UX Design System, uses the Aglet Sans typeface in uppercase with wide tracking (80px display, 4px letter-spacing), a light #f4f4f4 canvas with #1f3345 ink, deep navy and #131313 bands, an orange #f6a10e accent, 30px-radius outlined buttons and curved section edges over space imagery."
colors:
  canvas: "#f4f4f4"
  ink: "#1f3345"
  primary: "#f6a10e"
  surface-navy-deep: "#17222d"
  surface-black: "#131313"
  ink-on-dark: "#ffffff"
  accent-teal: "#4a98b7"
  hairline: "#bdbdbd80"
  link-blue: "#2199e8"
  scrim-navy: "#1f334566"
  astro-light-action: "#005a8f"
  astro-text-inverse: "#080c11"
  astro-base-dark: "#101923"
  astro-dark-action: "#4dacff"
typography:
  display:
    fontFamily: aglet-sans, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 88px
    letterSpacing: 4px
    textTransform: uppercase
  display-mobile:
    fontFamily: aglet-sans, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 50px
    letterSpacing: 4px
    textTransform: uppercase
  body:
    fontFamily: aglet-sans, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: 1px
  link:
    fontFamily: aglet-sans, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: 4px
    textTransform: uppercase
rounded:
  xs: 10px
  sm: 16px
  md: 20px
  lg: 30px
  xl: 50px
  base: 3px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12px
  s3: 14px
  s4: 20px
  s5: 24px
  s6: 30px
  s8: 40px
  s10: 48px
components:
  link:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 14px 63px 14px 24px
  nav:
    textColor: "{colors.ink-on-dark}"
    padding: 30px 0px
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px 20px
    height: 52px
    boxShadow: rgba(0, 0, 0, 0.1) 2px 2px 4px 0px inset
  card:
    backgroundColor: "{colors.scrim-navy}"
    textColor: "{colors.ink-on-dark}"
    rounded: "{rounded.xs}"
    padding: 48px
    boxShadow: rgba(0, 0, 0, 0.25) 0px 6px 20px 0px
  footer:
    backgroundColor: "{colors.surface-navy-deep}"
    textColor: "{colors.ink-on-dark}"
    padding: 0px 0px 50px
  astro-button-primary:
    backgroundColor: "{colors.astro-light-action}"
    textColor: "{colors.ink-on-dark}"
    rounded: "{rounded.base}"
    padding: 4px 16px
    height: 34px
    borderColor: "{colors.astro-light-action}"
---

## Overview

The brand here has two faces. The measured homepage, rocketcom.com (title "Rocket Communications - Enterprise UX Design"), belongs to Rocket Communications, which the Astro site calls "the creator of Astro UXDS", and its capture reads as a cinematic space-industry agency page. The Astro Space UX Design System itself lives at https://www.astrouxds.com and is documented in the architecture section below.

The capture opens on a full-bleed image of Earth from orbit, a glowing limb with a luminous polygon network laid over it, under a transparent header carrying the logo (a small orange emblem and "ROCKET COMMUNICATIONS"), five uppercase links (EXPERTISE, INDUSTRIES, PORTFOLIO, ABOUT US, JOIN US) with 4px tracking, and an orange-outlined pill "CONTACT US" with a circular orange arrow. The headline "EXPERIENCE IS EVERYTHING" is set in 80px Aglet Sans, uppercase, with 88px leading. Beneath is a five-line paragraph in white and a second pill, outlined in white, with a white circular arrow.

The hero ends in a convex curved edge into a light #f4f4f4 section titled "WHAT WE DO" where "WHAT" is teal (#4a98b7) and "WE DO" is dark navy ink. Four numbered services (01 NEW & LEGACY APP DESIGN, 02 UX DESIGN SYSTEMS, 03 UX STRATEGIC CONSULTING, 04 DESIGNOPS CONSULTING) each have a short description and a hairline rule; beside them sits a rounded illustration of two silhouetted figures at a teal control-room console. A "LEARN MORE" pill follows, and the page curves again into a near-black (#131313) footer band. The tone is confident, technical and mission-oriented: "boost productivity, reduce operational risk, and innovate cutting-edge technologies".

## Colors

Canvas is #f4f4f4 (largest background area, 737 units), with #17222d (517) as the dark navy of sections and footers, #1f334566 (navy at 40%) as translucent card backgrounds over imagery, and #131313 (246) as the near-black band. Ink is #1f3345 for headings and body on light backgrounds; white (#ffffff, 2,374 weighted characters, the most-read colour) is used over photography and dark bands. The orange #f6a10e marks the Contact Us outline and arrow and is the brand's accent. #4a98b7 is the teal word in "WHAT WE DO" and #2199e8 is a link blue. The only border colour is #bdbdbd80 (grey at 50%), used for hairlines.

The Astro design system adds its own measured product colours. On the Astro docs button page, the light-theme action colour #005a8f (white text, 1px #005a8f border, 3px radius, 34px height, padding 4px 16px) was measured, as were #101923, a dark base, and #080c11 for body text, which equal the values in the published tokens (https://cdn.jsdelivr.net/npm/@astrouxds/tokens/dist/css/base.system.css lists --color-background-base-default #101923, --color-text-inverse #080c11 and the dark-theme interactive colour #4dacff; theme.light.css lists #005a8f for the light interactive default). Astro's theme page says it supports both dark and light themes, defaults to dark in the web components and enables light with a light-theme class on the body element.

## Typography

The marketing site loads one family, aglet-sans, at weights 300, 400, 600 and 700 (3,196 weighted characters), and almost everything is uppercase with wide tracking: display 80px/400 on 88px with 4px letter-spacing (36px/50px on mobile), links 16px/600 with 4px tracking, body 16px/400 on 25.6px with 1px tracking. Service titles are 20px, sub-labels 14px and 12px. The font's licence and source were not verified; if it is unavailable, any sans-serif set in uppercase with the same tracking will keep the rhythm.

Astro itself uses a different type system. The Astro typography page (https://www.astrouxds.com/foundations/typography/) says Astro uses the open-source typeface Roboto for all elements, with system fonts allowed, specifies sizes in rem, and lists Display 1 at 60px light (300), Display 2 at 48px, Heading 1 at 34px, Body 1 at 16px with 0.5 letter-spacing and 24px line-height, and recommends sentence-case capitalisation. This differs from the uppercase style of the marketing site.

## Layout

The homepage is a stack of full-width bands with curved (elliptical) transitions instead of straight edges, each holding a left-aligned column of content at about 25px from the edge at the 960px capture scale. The hero is roughly 700px tall in the 960px-wide capture and the "What we do" section is a two-column layout: list on the left, illustration on the right. Measured paddings include 30px, 24px and 40px, and gaps of 80px, 24px, 14px and 12px. The services list separates numbered items with hairline rules.

Astro's spacing tokens, from the reference page (https://www.astrouxds.com/design-tokens/reference/), use increments of four, where one step equals 0.25rem (4px), so spacing-4 equals 1rem (16px), and components use border-collapse sizing so a component with 8px padding and 2px border has 8px of spacing.

## Elevation & Depth

Depth comes from imagery and translucent layers rather than shadow. Cards over photography use #1f334566 with a measured rgba(0, 0, 0, 0.25) 0px 6px 20px shadow and 48px padding; text inputs use an inset rgba(0, 0, 0, 0.1) 2px 2px 4px shadow. The hero's glowing atmosphere and polygon mesh give the page its sense of depth, and the curved band edges add layered separation.

## Shapes

Pill and large-radius shapes dominate: the outlined buttons are fully rounded, links use 30px, text inputs 20px, the control-room illustration 16px, the card 10px, and one 50px element. Circular arrow icons inside buttons use 50% radius (14 uses). The Astro design system, by contrast, uses a 3px base radius (--radius-base in its reference tokens and measured on its button), a squarer, utilitarian shape that belongs to mission software, not marketing.

## Components

Marketing: outlined pill buttons with uppercase 16px/600 text, 4px tracking and a circular arrow at the end; the header version has an orange outline and arrow, the hero version white. Links are white 16px/600 uppercase. The numbered service list pairs a small index number, a 20px uppercase title, a 14px description and a chevron, divided by hairlines with a dot marker on the active row.

Astro button (from the source at https://github.com/RocketCommunicationsInc/astro, rux-button.scss, and the Button page): three kinds, Primary, Secondary and Borderless, in Small, Medium and Large sizes; primary is a filled interactive-colour block, secondary is transparent with an inset 1px interactive-colour outline, borderless has no outline; the page recommends the primary action on the right in groups and verb-based labels such as Save or Close.

## Design System Architecture

Rocket Communications publishes Astro UXDS at https://www.astrouxds.com, described as the Astro Space UX Design System for building rich space app experiences. Its navigation covers Getting Started, Foundations (Theme, Grid, Typography), Design Tokens (Getting Started, Installation, Reference, System, Component), Components (Accordion, Button, Card, Classification Markings, Clock, Dialog, Global Status Bar, Status Symbol and more), Patterns, Platforms (Apple, Grafana, R2C2, PowerPoint), Compliance (MIL-STD 1472H) and Resources. A banner on the page says Astro Legacy is no longer actively maintained and a next-generation version, NOVA, is coming; the current version shown is 7.0.

The code is open at https://github.com/RocketCommunicationsInc/astro (packages: angular-workspace, framework-testing, react, web-components) and the site at https://github.com/RocketCommunicationsInc/astro-www. The web-components package imports the @astrouxds/tokens CSS (base.reference, base.system, base.component and theme.light) in global.scss, and components such as rux-button read variables like --color-background-interactive-default, --spacing-2 and --radius-base. Tokens are layered as reference, system and component tokens, and typography ships as rux-* utility classes.

## Do's and Don'ts

Do use dark, atmospheric imagery with uppercase Aglet Sans headlines on the marketing site. Do keep curved section dividers and pill buttons with circular arrows. Do use #f6a10e sparingly as the accent. Do use Astro's published tokens in mission applications and Roboto with sentence case there.

Don't use the marketing site's uppercase wide-tracked style in Astro application UI, whose typography page recommends sentence case. Don't alter Astro button colours or sizes (its rules of thumb say to use only predefined colours, sizes and fonts). Don't place the marketing site's 30px pills in Astro screens, where the base radius is 3px.

## Responsive Behavior

Measured at 390px, the hero headline shrinks from 80px/88px to 36px/50px, keeping uppercase and 4px tracking. The Astro Grid page was not read, so no Astro breakpoints are stated. The curved band transitions and the two-column services layout were captured at desktop only; their mobile behaviour was not verified.

## Iteration Guide

For the Rocket marketing look, start from a full-bleed orbital photograph, set 80px uppercase Aglet Sans with 4px tracking, add outlined pill buttons with circular arrows, then drop into a #f4f4f4 band with #1f3345 ink and a teal #4a98b7 emphasis word, ending in a #131313 footer with curved edges. For Astro product screens, switch to Roboto, sentence case, 3px radius, the interactive tokens from @astrouxds/tokens, and the dark theme by default.
