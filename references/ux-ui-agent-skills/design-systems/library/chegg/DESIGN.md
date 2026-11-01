---
version: alpha
name: Chegg
category: "Education"
description: "Chegg.com home: white #ffffff canvas, #222222 ink, Aspira Webfont throughout (48px/900 hero, 40px/700 claims), Chegg orange #eb7100 with a #e65700→#eb7100 gradient on 32px-radius 'Join now' buttons, a peach #fff6f0 steps strip, a shadowed ask-a-question card and a #fbfafb footer in #302c41."
colors:
  canvas: "#ffffff"
  ink: "#222222"
  primary: "#eb7100"
  primary-deep: "#e65700"
  primary-hover: "#d15b00"
  on-primary: "#ffffff"
  surface-footer: "#fbfafb"
  surface-peach: "#fff6f0"
  ink-footer: "#302c41"
  ink-muted: "#534f63"
  link-purple: "#4727c3"
typography:
  display:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 900
    lineHeight: 57.6px
  display-mobile:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 900
    lineHeight: 38.4px
  heading:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 50px
  subheading:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 900
    lineHeight: 26px
    letterSpacing: 0.25px
  body:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 14.4px
  nav:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20.8px
    letterSpacing: 0.25px
  button:
    fontFamily: "\"Aspira Webfont\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
    letterSpacing: 0.25px
rounded:
  none: 0px
  xs: 8px
  sm: 10px
  md: 32px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 10.24px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 25.6px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    backgroundImage: "linear-gradient(107.34deg, rgb(230, 87, 0) 0%, rgb(235, 113, 0) 51.33%)"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 10px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  ask-card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(13, 13, 15, 0.15) 0px 4px 40px 1px
  ask-input:
    borderColor: "{colors.primary}"
    rounded: "{rounded.xs}"
  steps-strip:
    backgroundColor: "{colors.surface-peach}"
    textColor: "{colors.ink-footer}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-footer}"
    padding: 48px 0px 0px
---

# Chegg

## Overview

This file documents the Chegg home page at `https://www.chegg.com/` (title "Chegg - Get 24/7 Homework Help | Rent Textbooks"). It is a short, quiet page built around one action — asking a study question. A 77px white header has the orange Chegg wordmark on the left, a "Study" dropdown in the centre and "For educators", "Help" and "Sign in" on the right separated by thin vertical rules. The hero is centred white space: "The evolution of 24/7 study starts here", the subline "Quick step-by-step solutions. When you need them.", and a large white card containing an orange-bordered text area ("What would you like help with today?") with image-upload, camera and circular submit-arrow icons.

Below the hero sits a peach strip with three steps ("Create an account & explore our free tools", "Choose your subscription", "Ask a question & start learning") and an orange "Join now" pill. Then comes a single large claim ("91% of Chegg customers say they get better grades when they use Chegg to understand their coursework"), a second centred call ("Get instant study help" with another "Join now"), footnotes, and a pale footer with link columns, social icons and app-store badges.

The tone is calm, confident and student-friendly. There is no imagery at all on the page; typography, white space and a single orange accent do the work.

The microcopy is short and second-person: "What would you like help with today?", "Choose your subscription", "From your first assignment to your final exam, get the right tools designed to help you learn." Claims carry superscript footnote markers ("coursework¹") that link to dense 12px disclosures at the bottom of the page — survey dates, respondent counts and offer terms — so the visual simplicity above is backed by small legal text below. The footer lists the wider Chegg network by name (Busuu, Chegg Skills, Citation Machine, EasyBib, Internships.com, Mathway), which signals that the home page is a portal into several study products rather than a single tool.

## Colors

Backgrounds by area: `#ffffff` (595), `#fbfafb` (431), `#fff6f0` (146), `#468254` (5), `#e2e1e6` (2). Text by characters: `#222222` (845), `#302c41` (642), `#534f63` (43), `#ffffff` (32), `#4727c3` (20).

- **canvas `#ffffff`** — header, hero and content sections.
- **ink `#222222`** — headlines, nav and body copy.
- **primary `#eb7100`** — Chegg orange: the ask-box border and the end stop of the "Join now" gradient.
- **primary-deep `#e65700`** — the gradient's start stop: `linear-gradient(107.34deg, rgb(230, 87, 0) 0%, rgb(235, 113, 0) 51.33%)`.
- **primary-hover `#d15b00`** — the measured hover fill of "Join now".
- **on-primary `#ffffff`** — button label colour.
- **surface-peach `#fff6f0`** — the three-step strip.
- **surface-footer `#fbfafb`** — the footer background.
- **ink-footer `#302c41`** — footer headings and links, and step text.
- **ink-muted `#534f63`** — small secondary text.
- **link-purple `#4727c3`** — measured on a header nav link element (20 characters).

The green `#468254` belongs to the cookie-consent "Cookies Settings" button in the footer legal row and is not a Chegg brand colour.

## Typography

One family: Aspira Webfont, loaded at normal, 500, bold and 900, with Helvetica and Arial as fallbacks. Aspira is a commercial typeface; Helvetica/Arial are the shipped substitutes.

- **display** — 48px / 57.6px, 900. Hero and "Get instant study help".
- **heading** — 40px / 50px, 700. The "91%" claim.
- **subheading** — 20px / 26px, 900, 0.25px. Footer column heads ("Chegg Products & Services").
- **nav** — 16px / 20.8px, 500, 0.25px.
- **button** — 20px / 26px, 700, 0.25px. "Join now".
- **body** — 12px / 14.4px, 400. The extractor's body role is the footnote text; lead paragraphs are set larger (24px and 22px appear 143 and 97 characters respectively), but their weights were not isolated.

Sizes by characters: 12px (640), 14px (390), 24px (143), 40px (100), 22px (97), 20px (86), 48px (61), 16px (49). Weights: 400 (698), 500 (511), 700 (242), 900 (131). Small text carries positive tracking: 14px/0.25px, 12px/0.25px and 12px/0.35px.

## Layout

Desktop capture: 1280px wide, 2383px tall. The hero band is 685px tall with content centred between x=218 and x=1208; the peach strip is 114px tall; the remaining band (claims, footnotes, footer) is 1584px with content from x=40 to x=1240 and up to 4 footer columns. The header shows 5 visible links and no menu toggle on desktop. Gaps: 24px (16), 32px, 16px. Paddings: 8px (29), 2px (13), 12px (11), 24px, 4px, 16px; the footer has 48px top padding. Long vertical white space separates each statement — the page reads like a sequence of slides.

## Elevation & Depth

One shadow is measured: `rgba(13, 13, 15, 0.15) 0px 4px 40px 1px`, a wide soft halo around the hero's ask-a-question card. Everything else is flat. The card is the only lifted object, which makes it the focal point of the page.

## Shapes

Measured radii: 10px (7 — the ask card and related controls), 32px (3 — "Join now" buttons), 8px (3 — the text area) and 50% (3 — circular icon buttons such as the submit arrow). Header, footer and strips are square.

## Components

- **button-primary** — "Join now": orange gradient from `#e65700` to `#eb7100`, white 20px/700 label, 32px radius, padding 10px 24px, 48px tall. Measured hover: fill becomes `#d15b00` and height grows to 50px.
- **ask-card** — white card, 10px radius, the 40px-blur shadow, containing the **ask-input** text area (1px `#eb7100` border, 8px radius) plus round icon buttons.
- **steps-strip** — `#fff6f0` band with three bold two-line steps and a Join now button aligned right.
- **nav** — white header, orange wordmark, centred "Study" dropdown, right-hand text links divided by vertical rules.
- **footnote** — 12px/14.4px `#222222` text with a caret-numbered prefix ("1.^"); the superscript markers above underline on hover.
- **footer** — `#fbfafb`, columns "Chegg Products & Services", "Company", "Chegg Network", "Customer Service", "Educators"; social icons and App Store / Google Play badges; a legal row.

## Design System Architecture

No public Chegg design system or brand-guideline page could be opened for this file (the attempt is logged in SOURCES.json). The shipped page exposes only one root variable (`--scroll-pad: 80px`), so the de-facto system lives in component CSS rather than tokens: a single typeface (Aspira) at four weights, an orange accent applied as a gradient, and generous centred spacing.

## Do's and Don'ts

- Do keep the page white and text-led; there is no imagery.
- Do use the orange gradient pill for the one primary action.
- Do centre hero text and keep big gaps between statements.
- Do use Aspira 900 for display and 700 for claims.
- Don't use green; it belongs to the cookie tool.
- Don't add shadows except to the ask card.
- Don't crowd the hero; it holds one headline, one subline and one input.

## Responsive Behavior

Measured at 390px: the hero headline drops from 48px/57.6px to 32px/38.4px; the 40px claim drops to 20px/25px; footnotes stay 12px/14.4px. The mobile header shows 1 visible link and a menu toggle labelled "Navigation" (desktop: 5 links, no toggle). Up to 2 columns were counted on mobile. Mobile font sizes by characters: 12px, 16px, 20px, 18px, 32px. The layout of the ask card and steps strip at mobile width was not measured beyond these values.

## Iteration Guide

1. Start with a white canvas, `#222222` ink and Aspira.
2. Centre a `display` headline and a single ask card with the soft halo.
3. Add the peach steps strip with one `button-primary`.
4. Follow with large `heading` claims separated by generous white space.
5. Close with the `#fbfafb` footer in `#302c41`.
