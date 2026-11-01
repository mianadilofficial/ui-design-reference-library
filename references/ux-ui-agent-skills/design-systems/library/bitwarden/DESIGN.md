---
version: alpha
name: Bitwarden
category: "Tech & AI"
description: "Bitwarden's marketing site: Inter Variable headlines at 60px/69px weight 600 with -2.4px tracking, light 300-weight body at 18px/28px, Bitwarden Blue #175ddc pill buttons 52px tall that hover to Light Teal #a2f4fd, Deep Blue #0c3276 top bar, #0a171f dark logo band, Off White #f3f6f9 sections and 20px-radius cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#175ddc"
  on-primary: "#ffffff"
  primary-hover: "#a2f4fd"
  deep-blue: "#0c3276"
  navy-darkest: "#020f66"
  surface-dark: "#0a171f"
  off-white: "#f3f6f9"
  light-grey: "#d8e2eb"
  medium-grey: "#99a7b5"
  ink-slate: "#203750e6"
  ink-grey: "#5b5d60"
  teal-highlight: "#2cdde9"
  success-green: "#7bf1a8"
  error-red: "#ff6550"
  nav-hover: "#1a41ac"
  text-input-border: "#9ea7b5"
typography:
  display:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 60px
    fontWeight: 600
    lineHeight: 69px
    letterSpacing: "-2.4px"
  stat-mobile:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
  heading:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30.8px
    letterSpacing: "-0.68px"
  section-heading:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 43.9745px
    fontWeight: 600
    lineHeight: 48.3719px
    letterSpacing: "-0.68px"
  body:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28px
  button:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 20.8px
  link:
    fontFamily: "\"Inter Variable\", \"DM Sans\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 16px
    letterSpacing: 0.4px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  brand: 36px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 52px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink}"
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 52px
    borderColor: "{colors.primary}"
  button-outline-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.teal-highlight}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 0px 16px
    boxShadow: rgba(0, 0, 0, 0) 0px 6px 16px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav-link-hover:
    textColor: "{colors.deep-blue}"
  select:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 0px 32px 0px 40px
    height: 48px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.3) 0px 0px 12px 1px
  footer:
    textColor: "{colors.surface-dark}"
    padding: 40px 0px 80px
---

# Bitwarden

## Overview

bitwarden.com ("Best Password Manager for Business, Enterprise & Personal | Bitwarden") is a bright, blue-forward
product site, 8,460px tall at desktop. A Deep Blue (#0c3276) announcement bar ("NEW! Protect privileged credentials
with time-bound credential leasing…") sits above a white header: the blue Bitwarden shield-and-wordmark, Business,
Personal, Pricing, Downloads and Resources, a blue pill "Get Started Free", an outlined "Talk to Sales" and "Log In".

The hero is centred on a pale blue-white field: a small uppercase eyebrow ("THE MOST TRUSTED PASSWORD MANAGER"), the
headline "Secure every login for people, agents, and machines" at 60px (rendered blue in the capture; the measured text element computes #000000), a light 18px paragraph, the
two pill buttons, and a wide blue panel showing the vault UI — browser extension, mobile app and an AI chat field —
floating as cards on a blue background.

Further down: proof stats ("Millions of customers trust Bitwarden", app-store ratings, G2 badges, "100,000+ community
members"); a split section "From password chaos to streamlined control" with a numbered feature list and a UI shot;
"Built for teams. Loved by individuals." with two large blue cards (Business protection, Personal security); a survey
callout ("#1 in customer satisfaction"); three dark photo cards ("Built differently from other password managers");
customer quotes (NASA, Rentokil Initial); a dark #0a171f logo wall (NBCUniversal, Sephora, Red Hat, SAP, Airbus,
Viasat, BMW Group, FedEx, Accenture, LVMH…); a blue compliance band (SOC 2, GDPR, HIPAA, CCPA badges); pricing cards
with Personal/Business toggle; and a light footer with a newsletter field. Copy is direct and benefit-led, with the
open-source claim repeated.

## Colors

The official brand page lists the palette; measured values agree.

- **Bitwarden Blue** — `primary` #175ddc ("Bitwarden Blue" on the brand page; `--color-primaryBlue` and
  `--color-primary-500` in CSS). It is the largest painted area — hero panel, team cards, compliance band, pricing
  cards — and fills every primary pill button.
- **Light Teal Highlight** — `primary-hover` #a2f4fd (`--color-bw-teal-light-highlight`): the hover fill of both
  Get Started Free and Talk to Sales, with black text.
- **Teal Highlight** — `teal-highlight` #2cdde9 for small links on blue ("Learn how >").
- **Deep Blue** — `deep-blue` #0c3276 for the announcement bar and as the nav-link hover color. Nav links themselves are
  Bitwarden Blue; "Log In" hovers to `nav-hover` #1a41ac (`--color-primary-700`).
- **Darkest navy** — `navy-darkest` #020f66 (`--color-primary-900`) for the Enterprise pricing card.
- **Dark surface** — `surface-dark` #0a171f (`--color-secondary-900`) for the logo wall and footer text.
- **Off White** — `off-white` #f3f6f9 for light sections.
- **Neutrals** — `light-grey` #d8e2eb and `medium-grey` #99a7b5 per the brand page; `ink-slate` #203750e6 is the
  third most-read text color (supporting copy); `ink-grey` #5b5d60 (`--color-secondary-600`).
- **Tertiary** — `success-green` #7bf1a8 and `error-red` #ff6550 from the brand page, which says the tertiary colors
  "should be used sparingly, primarily in product graphics and for success/error communications".
- **Ink** — `ink` #000000 on light; #ffffff on blue and dark.

## Typography

The brand page names **Inter** ("an open-source Google font") for all headlines, body copy and text. The site loads
Inter Variable (100–900) from the Fontsource CDN, with DM Sans and system fonts as fallbacks, plus `bwi-font`, an icon
font.

- **Display** — **60px / 69px, 600, -2.4px** (-0.04em) for the hero headline.
- **Section headings** — **43.9745px / 48.3719px, 600, -0.68px**; other fluid sizes measured: 33.5497px, 30px and
  22.9499px. These sizes are non-integer values as computed.
- **Small heading** — **28px / 30.8px, 500, -0.68px** ("Trusted by millions of customers around the world").
- **Body** — **18px / 28px, weight 300** — light body text is characteristic; 300 is the most frequent weight.
- **Buttons** — **16px / 24px, 500**. **Nav** — **16px / 20.8px, 300**. **Small links** — **14px / 16px, 300,
  +0.4px**.
- Footer column headings are uppercase 16px/700 with 0.8px tracking ("SOLUTIONS").

## Layout

At 1280px: announcement bar 0/75, hero 75/678 (pale field #f0f3fa, centred), a long light section 753/4096 (#f9fbfe,
up to 4 columns: stats, feature split, team cards, photo cards, quotes), media 4849/240, a dark logo wall 5217/781
(6 columns), white pricing section 5998/1608 (3 columns), and a footer area 7606/874 (5 columns). The header shows 6
links and is 89px tall with 16px side padding. Content is centred within a max container; cards in the team section
are two large blue panels side by side. The spacing scale runs 2, 4, 6, 8, 10, 12, 16, 20, 24 and 32px; the footer uses
40px top and 80px bottom padding.

## Elevation & Depth

The hero UI composite uses a large soft shadow, `rgba(0, 0, 0, 0.25) 0px 25px 50px -12px` (2 elements). Cards use
`rgba(0, 0, 0, 0.3) 0px 0px 12px 1px` and `rgba(0, 0, 0, 0.1) 0px 0px 30px 0px` glows. The header carries a
transparent 6px 16px shadow at rest. Most depth comes from layered UI screenshots floating over blue panels.

## Shapes

The most frequent radius is **20px** (cards and panels), followed by fully rounded **pill** buttons (measured as
3.35544e+07px, i.e. 9999px), **8px** (select field), **12px**, **24px** and **16px**. The brand page states that "a
36px radius system applies to brand elements; buttons are the only exception" — kept as `rounded.brand` 36px. On the
home page the panels measure 20–24px.

## Components

- **Primary pill** — #175ddc fill, 2px #175ddc border, white Inter 16px/500, 12px 20px padding, 52px tall. Hover:
  #a2f4fd fill with black text.
- **Outline pill** — "Talk to Sales": white/transparent with a 2px #175ddc border and black text; hover #a2f4fd (the
  header instance) or #175ddc with white text (another instance).
- **White pill on blue** — "Get Started Free" inside the blue Personal card: white fill, black text, 2px white border.
- **Segmented toggle** — "Business" / "Personal" pricing toggle: blue active segment, 15px/500 text, 12px 64px padding,
  47px tall.
- **Navigation** — white bar, Bitwarden Blue 16px/300 links with chevrons; hover Deep Blue.
- **Blue feature card** — #175ddc panel, 20px radius, white heading and body, a white or blue pill button, and a UI
  screenshot at the bottom.
- **Pricing card** — blue (Teams) or #020f66 (Enterprise) with a large price figure, a white pill and a check list;
  a third white card for Talk to Sales.
- **Language select** — white, 1px #9ea7b5 border, 8px radius, 48px tall.
- **Footer** — light, uppercase column headings in #0a171f, newsletter signup with a pill Subscribe button.

## Design System Architecture

Bitwarden publishes brand guidelines at https://bitwarden.com/brand/: the color palette (Bitwarden Blue #175DDC, Off
White #F3F6F9, Deep Blue #0C3276, True White, True Black, Light Grey #D8E2EB, Medium Grey #99A7B5, Teal Highlight
#2CDDE9, Light Teal Highlight #A2F4FD, Green #7BF1A8, Red #FF6550, a Yellow), Inter as the only typeface, horizontal
and vertical logo lockups with safe-area rules, and a 36px radius rule for brand elements. It links SVG logos, image
folders and the press room.

The website build is Tailwind-based: `:root` exposes `--color-primary-300/500/700/900` (#79a1e9, #175ddc, #1a41ac,
#020f66), `--color-secondary-100/600/800/900` (#e6e9ef, #5b5d60, #1d3248, #0a171f), brand-named colors
(`--color-bw-light-blue: #e5f4fc`, `--color-bw-sky-blue: #dcf0fb`, `--color-bw-teal: #d2d7ea`,
`--color-bw-teal-light-highlight: #a2f4fd`, `--color-accent-melon: #ff4e63`, `--color-accent-gold: #ffbf00`),
`--radius-4xl: 2rem`, `--breakpoint-2xl: 96rem`, and Autocomplete `--aa-*` variables for site search. The logo SVG
uses classes `text-primaryBlue dark:text-white`.

## Do's and Don'ts

**Do**
- Use Bitwarden Blue #175ddc for primary pills and large feature panels; hover to #a2f4fd with black text.
- Set everything in Inter; headlines 600 with tight tracking, body at weight 300.
- Use pill buttons only; give panels 20–36px radii.
- Show the product UI as floating cards over blue.
- Keep green, red and yellow for product graphics and status messages only, per the brand page.

**Don't**
- Don't use a second typeface; the brand page specifies Inter alone.
- Don't use square buttons or small-radius panels.
- Don't put the teal highlight on white backgrounds for body text; on the page it appears as small links on blue.
- Don't recolor the logo outside blue/white (the site switches it via `text-primaryBlue` / `dark:text-white`).

## Responsive Behavior

Measured at 390px:

- The hero headline band records a 32.547px heading (desktop 60px); stat figures measure **36px / 36px, 500**; the
  "Trusted by millions" heading measures **22px / 24.2px**; section headings 25.3145px.
- Body: **16px / 20.8px, 300**.
- The primary pill keeps 16px/500, 12px 20px padding, 52px height.
- Header: 61px tall, 1 visible link and a menu toggle labelled "Toggle navigation menu".
- Band order: announcement 0/65, header 65/61, hero 126/262, stats 388/626, feature split 1014/923 (#f3f6f9), team
  cards 1937/3517, media 5454/424, dark logo wall 5974/998, pricing 6972/659 (2 columns), blue Teams card 7631/539,
  #041167 Enterprise card 8221/625, then light footer bands. Content insets are 20–24px.

Menu contents were not measured.

## Iteration Guide

1. Start with a #0c3276 announcement bar and a white header with Bitwarden Blue 16px/300 links.
2. Centre the hero: uppercase eyebrow, 60px/69px Inter 600 headline at -2.4px, 18px/300 body, a blue pill
   and an outline pill (52px tall).
3. Place a #175ddc panel under the hero with floating UI cards and a soft 25px 50px shadow.
4. Build sections on #f3f6f9 / white with 20px-radius blue feature cards and Inter 600 section headings.
5. Use a #0a171f band for the customer logo wall, then pricing cards in #175ddc and #020f66.
6. On mobile, keep pill sizes, drop body to 16px/20.8px and section headings to the measured 25.3145px.
