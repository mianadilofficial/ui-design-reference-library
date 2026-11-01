---
version: alpha
name: "Symphony Communication"
category: "Thai Brands"
description: "Symphony Communication PLC home page (symphony.net.th) measured live: a black page with white IBM Plex Sans text, #e63e26 red-orange pill buttons (50px radius, 56px tall), red-to-navy gradient headings, a white #231f20 header, angled red and purple gradient tiles, and a world-map footprint panel."
colors:
  canvas: "#000000"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#e63e26"
  on-primary: "#ffffff"
  ink-dark: "#231f20"
  primary-light: "#eb6551"
  button-secondary-bg: "#ffffff40"
typography:
  display:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 38.4571px
    fontWeight: 700
    lineHeight: 46.1486px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 27.0143px
    fontWeight: 700
    lineHeight: 32.4171px
    textTransform: uppercase
  heading:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 64.6571px
    fontWeight: 400
    lineHeight: 77.5886px
    textTransform: uppercase
  body:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 24.4214px
    fontWeight: 400
    lineHeight: 30.5268px
  button:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"IBM Plex Sans\", \"IBM Plex Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px
    height: 56px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px
    height: 58px
    borderColor: "{colors.page-body}"
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    padding: 6px 12px 16px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-dark}"
    padding: 16px 0px
    boxShadow: rgba(0, 0, 0, 0.02) 0px 3px 6px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-dark}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.page-body}"
    padding: 48px 0px
---

## Overview

The measured page is symphony.net.th/en/home, titled "Symphony Communication", the English home page of Symphony Communication Public Company Limited, a Thai telecom and digital infrastructure provider. The page is 6,292px tall at 1280px and is mostly black.

A white header carries the orange-and-red logo mark with the word SYMPHONY, a main menu in bold uppercase (Our Services, Company, Investors, Corporate Governance, Sustainability, News), a search icon and an "EN" language selector. The hero is a full-width night-city photograph of a woman with a laptop and light streaks, with the slogan "WE FAST / YOU FIRST" in white italic type at the lower left. A cookie-consent dialog overlays the lower right of the hero and a red "Contact Us" tab sits on the right edge; the extraction was re-run to hide consent overlays and the dialog is still present in the capture, so neither is documented as brand UI.

Below the hero the page turns black. A centered heading "SYMPHONY COMMUNICATION" uses a text gradient from red to navy, followed by a long white paragraph describing the company as Thailand's leading telecom and digital infrastructure provider, with the phrase "WE FAST, YOU FIRST" highlighted in red. Three photo tiles follow (Company History, Our Values, Awards and Recognitions), each with an angled red-to-purple gradient corner holding the white label. "SYMPHONY SERVICE FOOTPRINT" (again gradient text) presents a black stats panel (Domestic: 32,000+ km fiber footprint, 327 buildings ready for service, 52 provinces coverage, 113 industrial estates; International: 6 POPs, 1 T+ international internet backbone, 9 international routes) with red numerals, beside a pink world map with red arcs on a red-to-navy gradient ground, and an outlined white capsule "SYMPHONY Coverage Area". Further down: OUR SERVICES, a grid of gradient tiles (Domestic Network Connectivity, International Network Connectivity, Internet Services, Data Center, Cloud Services, Managed Security Services, ICT Solutions); Customer Experiences with a red pill button; a "Virtual Firewall" banner; Latest News and "Invest in SYMC" (SET: SYMC, 6.40 THB) with three red tiles; Our People; Network Operation Center (call 1613); and a red-to-purple gradient footer with the slogan repeated.

## Colors

`canvas` is black (#000000, weight 4548), the dominant ground. `page-body` is white (#ffffff, weight 217) and is the header and consent dialog background. `primary` (#e63e26, weight 104) is a red-orange fill for the main pill buttons, with white label (`on-primary`) and also appears as heading and numeral text (42 characters). `primary-light` (#eb6551, 90 characters) is a lighter tint of it used for text. Translucent fills: `button-secondary-bg` (#ffffff40, weight 77) is the white 25% fill of the secondary pill; #ffffff1a and #e63e261a are faint tints.

Gradients complete the palette. The heading gradient is `linear-gradient(90deg, rgb(230, 62, 38) 46%, rgb(39, 57, 125) 62%)`, clipped to text, from the brand red to a navy (#27397d). The root variables publish the navy and red ramps: `--blue-700` #1C2859, `--blue-500` #27397D, `--blue-400` #526197, `--orange-600` #D13823, `--orange-700` #A32C1B, `--grey-900` #231F20, `--grey-400` #8A8B8D, and greens and yellows (`--green-300` #96C97B, `--green-800` #366020, `--green-900` #294A18, `--yellow-800` #856B14, `--yellow-900` #665110) that were not measured in view. Text: white is the dominant color (2641 characters), `ink-dark` (#231f20, 334 characters) is the header text.

## Typography

IBM Plex Sans is the single family (3,175 characters; the stack adds "IBM Plex Sans Thai" and sans-serif), loaded in weights 100 to 700 with italics. Font Awesome 6 Pro and icomoon icon fonts are loaded as well. Weight use by characters: 400 (1915) and 700 (1260). No letter spacing is recorded.

`display` is 38.4571px weight 700, uppercase, on 46.1486px (the gradient section heading, which the extractor read as the h1). `heading` is 64.6571px regular, uppercase, on 77.5886px. `body` is 24.4214px on 30.5268px (778 characters, the most-used size). `button` is 16px bold on 24px, and `nav` is 16px regular on 24px; the measured header nav element uses 14px bold uppercase. Other sizes: 20.6786px (687), 14px (565), 22.55px (329), 27.2286px, 45.9429px and 54.3643px. Mobile display is 27.0143px on 32.4171px.

## Layout

The 1280px layout is centered; the intro paragraph block is 920px wide, and the three photo tiles sit in a centered row. The footprint section pairs a left stats panel with a wide map. The services grid is a three-column set of tiles with a heading cell at the left, as seen in the capture. Padding: header 16px 0px, footer 48px 0px, buttons 16px 32px, nav links 6px 12px 16px. Gaps measured: 8px (15 containers), 16px (8), 12px, 4px, 30px, 32px and 24px. The root defines `--hybrid-column-space` 15px and breakpoint variables (`--breakpoint-xl` 1200px and `--breakpoint-xxl` 1640px).

## Elevation & Depth

Shadows are faint: `rgba(0, 0, 0, 0.08) 0px 3px 15px 0px` (4 elements), `rgba(0, 0, 0, 0.1) 0px 4px 20px 0px` (1) and the header's `rgba(0, 0, 0, 0.02) 0px 3px 6px 0px`. On the black page, depth comes instead from gradient overlays: angled red-to-purple corner shapes on photo tiles, diagonal stripe patterns at the edges, and the red-to-navy backgrounds of the footprint and footer sections.

## Shapes

Interactive elements are pills: `xs` 50px was measured on 9 elements (buttons) and `pill` 9999px is declared; 50% (9) and 100% (4) are circular elements. Photo tiles and the stats panel are square-cornered with angled gradient cuts. The nav hover test shows the header link's text becoming transparent with a green (#62af3a) border color, which is a hover treatment of the nav, not a brand accent.

## Components

- **button-primary**: #e63e26 fill, white 16px bold label, 50px radius, padding 16px 32px, 56px tall ("Customer Experiences", 257px wide).
- **button-secondary**: #ffffff40 fill, white label, 1px white border, 50px radius, 16px 32px padding, 58px tall ("Job Opportunities").
- **link**: white 16px bold, padding 6px 12px 16px.
- **nav / nav-link**: white bar, #231f20 16px text, padding 16px 0px, with a faint shadow.
- **footer**: white text, padding 48px 0px.
- **Gradient tile**: photo with an angled red-to-purple corner and a white bold label.
- **Stat block**: red numerals over small white labels on a black panel.

## Design System Architecture

No public design-system documentation was opened. The root variables show a Bootstrap-derived base (`--light` #f8f9fa, `--success` #28a745, `--breakpoint-*`) extended with named color ramps (blue-400 to 700, orange-600 and 700, green, yellow, grey), Font Awesome variables, and `--hybrid-column-space`. The measured values here match those ramps where they overlap. No tokens repository was consulted.

## Do's and Don'ts

- Do keep the page black with white IBM Plex Sans text and red (#e63e26) pill buttons.
- Do use the red-to-navy gradient on section headings and stats backgrounds.
- Do set large text uppercase and the slogan in italics.
- Do round buttons at 50px.
- Don't use Bootstrap's default green or blue for the brand; they come from framework defaults.
- Don't document the consent dialog or the Contact Us tab as brand UI.
- Don't use hard shadows.

## Responsive Behavior

Measured at 390px: the heading falls to 27.0143px on a 32.4171px line. The mobile size census is led by 20.1304px (778 characters), 18.2946px (687), 14px (585), 16px (330), 19.2125px (329), 30.6857px, 27.0143px and 17.3768px. Layout reflow and menu collapse were not measured.

## Iteration Guide

1. Start with a white header and a full-bleed photographic hero with an italic uppercase slogan.
2. Switch to black sections with white 24px text and gradient headings.
3. Make the main call-to-action a 56px red pill and the secondary a translucent white pill.
4. Show metrics as red numerals over small white labels on black.
5. Use angled gradient shapes, not shadows, for depth.
