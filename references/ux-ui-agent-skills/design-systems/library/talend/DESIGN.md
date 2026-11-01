---
version: alpha
name: Qlik Talend
category: "Design Systems"
description: "The Talend homepage now ships as Qlik Talend: a white canvas with Inter (600 headlines at 42px, 18px body), navy #19426c headings, a Qlik green #008936 primary with 30px-radius pill buttons, a floating white header pill with a 40px radius, and isometric green and teal data illustrations."
colors:
  canvas: "#ffffff"
  ink: "#767676"
  primary: "#008936"
  on-primary: "#ffffff"
  navy: "#19426c"
  ink-dark-grey: "#54565a"
  ink-navy-alt: "#234269"
  hairline: "#aab3b680"
  primary-hover: "#156037"
  ink-nav-muted: "#54565a80"
  surface-light: "#f6f7f8"
  ink-teal: "#006580"
typography:
  display:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 42px
    fontWeight: 600
    lineHeight: 50.4px
    letterSpacing: "-1.26px"
  display-mobile:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
    letterSpacing: "-0.9px"
  subheading:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 31.2px
    letterSpacing: "-0.78px"
  body:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: "-0.54px"
  button:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  nav:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"Inter R TM Overrides\", Inter, \"Inter Fallback\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
rounded:
  xs: 10px
  sm: 20px
  md: 30px
  lg: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s8: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px 28px
    height: 54px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 11.008px 18px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 17px 28px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav-muted}"
    rounded: "{rounded.lg}"
    padding: 10px 20px 20px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 10px 20px 0px
  nav-link:
    textColor: "{colors.ink-nav-muted}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark-grey}"
    rounded: "{rounded.xs}"
    padding: 10px 15px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 10px 20px 0px, rgba(0, 0, 0, 0.25) 0px 0px 1px 0px
  footer:
    textColor: "{colors.ink-dark-grey}"
    padding: 51px 0px 80px
---

# Qlik Talend

## Overview

Opening www.talend.com now lands on a Qlik-branded page titled "Qlik Talend Cloud | Trusted, AI-Ready Data Integration & Quality". The headline reads "Qlik Talend: Deliver Trusted, AI-Ready Data", with "Qlik Talend:" in green and the rest in navy, and an eyebrow line above it in widely tracked capitals, "QLIK AND TALEND TOGETHER". The copy beneath ("Talend is now part of Qlik. Seamlessly integrate, transform, and govern your data...") is set in grey. Two buttons follow, a filled green "Learn More" and an outlined "Try for Free", beside a large isometric illustration of a green cloud, database cylinders, document cards and connector badges drifting across a pale mint wash.

The page is airy and light: a white canvas (`canvas`, #ffffff), generous whitespace, soft shadows, rounded containers and a saturated green used only for actions and emphasis. Below the hero are a centred navy heading, "Unlock the power of Qlik Talend", a 2 by 2 grid of bordered feature cards (Streamline data operations, Ensure enterprise-grade trust, Flexible deployment, Easily meet constantly changing requirements) each with a product-UI illustration, a centred "Learn More" button, and a deep-navy panel titled "Looking for Talend Data Fabric?" containing a white card with a green-checked feature list. Microcopy is calm and benefit-led. A chat bubble ("Welcome to Qlik! Let me know if you have any questions.") and an accessibility icon float over the capture.

## Colors

`primary` #008936 is the Qlik green: it fills "Learn More" and "Contact Us", outlines "Try for Free", and darkens to `primary-hover` #156037 on hover. Text colours form a ladder: `ink` #767676 for the most-read body copy, `ink-dark-grey` #54565a for card text and footer links, `navy` #19426c for headings and the dark panel fill, `ink-navy-alt` #234269 for a lighter navy text variant, and `ink-teal` #006580 for a small amount of teal text. The nav labels use `ink-nav-muted` #54565a80 (the dark grey at 50% alpha). Surfaces are `canvas` #ffffff, a very pale `surface-light` #f6f7f8 and the navy panel; borders use `hairline` #aab3b680.

The page's own CSS variables (read from the live page) name this palette: `--qlik-green: #008936`, `--dark-blue: #19426c`, `--dark-gray: #54565a`, `--light-gray: #e1e7ec`, plus three gradients, `--g-green`, `--g-blue` and `--g-purple` (the latter from #92569a to #683d6e). Purple exists in those variables (`--c-purple`, `--g-purple`) but is not visible in the capture.

## Typography

One family carries everything: Inter, loaded as "Inter R TM Overrides" with an "Inter Fallback" face (the page's `--site-font` is 'Inter', 'Inter Fallback'). Headlines use weight 600 with negative tracking proportional to size: `display` 42px/50.4px with -1.26px, `display-mobile` 30px/36px with -0.9px, and `subheading` 26px/31.2px with -0.78px. Body copy, `body`, is 18px/25.2px at 400 with -0.54px tracking (the page defines `--letter-spacing: -0.54px`). Buttons are bold: `button` 18px/700 for the large CTA and `button-secondary` 14px/700 for the header buttons. Navigation, `nav`, is 16px/500. The eyebrow style measures 16px with 3.2px tracking.

The shipped stack falls back to the generic sans-serif; keep the tracking values if a fallback is used.

## Layout

The extraction was taken at 1280px wide and the page is 8,648px tall. A floating header (white, 116px tall at capture, with a 40px radius and a 0 10px 20px shadow at 15% black) sits inset from the viewport edge and holds the Qlik logo, menu and two pill buttons. In the capture the hero is a two-column split, text left, illustration right, over a pale mint-tinted background. The feature cards sit in a two-column grid; the navy panel is a wide rounded container. The footer is about 1,369px tall with 18px/600 column headings in `ink-dark-grey` and padding of 51px at the top and 80px at the bottom.

Measured gaps include 5px, 15px, 16px, 20px, 30px, 60px and 135px; common paddings are 10px, 15px, 30px, 40px and 48px. The spacing tokens keep the measured unit steps of 4, 5, 7, 8, 10, 15 and 16px.

## Elevation & Depth

Elevation is soft and diffuse. The header pill and menu cards use `rgba(0, 0, 0, 0.15) 0px 10px 20px 0px`, cards add a second hairline `rgba(0, 0, 0, 0.25) 0px 0px 1px 0px`, and some illustrated panels use a long, faint shadow, `rgba(84, 86, 90, 0.2) 0px 17.5518px 75.2222px 0px`. A further shadow, `rgba(50, 50, 93, 0.3) 0px 30px 45px -30px`, also appears once. Most content cards, by contrast, rely on a thin `hairline` border and no shadow. Depth in the illustrations (isometric layers, translucent tiles) carries most of the dimensionality.

## Shapes

Radii are large and friendly. `rounded.md` 30px on buttons (the primary button is 54px tall, so the ends read nearly pill-shaped), `rounded.sm` 20px, `rounded.xs` 10px on cards and menu panels, `rounded.lg` 40px on the floating header, and `rounded.pill` on a few fully round controls. Asymmetric corner patterns (10px 0px and 20px 0px 0px 20px) also appear in the measurements.

## Components

**Primary button** (`button-primary`): green fill and 2px green border, white 18px/700 label, 30px radius, 16px 28px padding, 54px tall. **Secondary/header button** (`button-secondary`): the same green fill at 14px/700, 11.008px 18px padding, 40px tall; the "Try for Free" variant has a transparent fill, green text and a 2px green border. **Link** (`link`): green 18px/700 text with a green border, 17px 28px padding. **Navigation** (`nav`): white background, 16px/500 muted-grey labels, 40px radius, 10px 20px 20px padding. **Card** (`card`): white, 10px radius, 10px 15px padding, a two-layer shadow, `ink-dark-grey` text. **Footer** (`footer`): `ink-dark-grey` text with 51px 0 80px padding. The deep-navy "Talend Data Fabric" panel uses `navy` fill with white text and an inset white card.

## Design System Architecture

No public design system for this page was found. The page is Qlik-branded (Qlik logo, "Why Qlik" menu), and its design language is carried by its own CSS rather than by a documented library: the root custom properties include brand-named colours (`--qlik-green`, `--dark-blue`, `--dark-gray`, `--light-gray`), rgb-triplet colour channels (`--c-qlik-green`, `--c-dark-blue`, `--c-light-grey`), gradient variables (`--g-green`, `--g-blue`, `--g-purple`), timing variables (`--t-fast: 300ms`, `--t-medium: 600ms`) and Tailwind's `--tw-*` custom properties, which are what Tailwind CSS emits.

The design system URL supplied for Talend, https://design.talend.com, is real but is a legacy hub: its page is titled "Talend UI" and offers cards for a Bootstrap theme, "Coral, Talend design system", a Storybook and a containers library; the card links (for example https://design.talend.com/design-system) return HTTP 404 and therefore could not be read. Talend's open repository, https://github.com/Talend/ui, describes a React monorepo (react-cmf, components, forms, icons, a Bootstrap 3 theme) in maintenance status. Coral's published tokens (https://unpkg.com/@talend/design-tokens@3.4.5/README.md and its dist CSS) define `--coral-*` variables for light and dark themes, using a blue accent (hsl 204 95% 31%) and Source Sans Pro. Those values do not appear on the measured page (no #008936, #19426c or Inter), so Coral is treated as a separate product-UI system and none of its values are used here.

## Do's and Don'ts

Do reserve `primary` green for actions and a few emphasised words, and set headlines in `navy` Inter 600 with the negative tracking shown. Do use 30px-radius pills for CTAs and 10px for cards. Do keep large areas white and pair illustrations with generous space. Do use sentence-case, benefit-led headings.

Don't use Coral's blue accent or Source Sans Pro on this page. Don't add heavy shadows to cards; use a `hairline` border unless the card floats. Don't place `ink` #767676 on tinted or dark fills; it is measured as body text on white only. Don't introduce the purple gradient as a surface colour; it is not visible in the capture.

## Responsive Behavior

The extractor also measured a 390px viewport, which gives the smaller headline (`display-mobile`, 30px/36px, -0.9px tracking). The capture shows only the desktop layout, so no mobile menu behaviour is asserted. Buttons keep their 54px and 40px heights at all sizes in the measurements available.

## Iteration Guide

Begin from `canvas`, `ink` and `navy`, then add `primary` for one filled button and one outlined pill beside it. Use `display` for the hero line and let a single phrase pick up the green. Reuse `rounded.md` for buttons and `rounded.xs` for cards, check any new colour against the measured page variables before adding it, and keep letter-spacing proportional (measured at -0.54px for 18px text and -1.26px for 42px text). If component specifications are needed, measure the live page rather than the Coral tokens.
