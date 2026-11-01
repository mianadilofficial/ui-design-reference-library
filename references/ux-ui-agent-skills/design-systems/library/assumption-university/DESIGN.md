---
version: alpha
name: Assumption University of Thailand
category: "Thai Brands"
description: "Assumption University (AU) home page: white #ffffff canvas, black #000000 text, red #dd3333 buttons with 8px radius and drop shadow, crimson #aa1e23 and #a51818 headings, footer #e02826, Kanit 17.6px body with Monda 25px card titles, outlined pill header buttons."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#dd3333"
  on-primary: "#ffffff"
  surface-grey: "#e3e3e3"
  surface-charcoal: "#333333"
  ink-maroon: "#632323"
  ink-on-footer: "#f1f1f1"
  red-dark: "#a51818"
  red-deep: "#aa1e23"
  hairline: "#dddddd"
  button-primary-border: "#0000000d"
  nav-bg: "#ffffffe6"
  footer-bg: "#e02826"
typography:
  display:
    fontFamily: Kanit
    fontSize: 30.8px
    fontWeight: 700
    lineHeight: 49.28px
    textTransform: uppercase
  display-mobile:
    fontFamily: Kanit
    fontSize: 24.64px
    fontWeight: 700
    lineHeight: 39.424px
    textTransform: uppercase
  heading:
    fontFamily: Monda
    fontSize: 25px
    fontWeight: 700
    lineHeight: 37.5px
  body:
    fontFamily: Kanit
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 28.16px
  button:
    fontFamily: Kanit
    fontSize: 15.52px
    fontWeight: 700
    lineHeight: 24.832px
    letterSpacing: 0.4656px
    textTransform: uppercase
  nav:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
rounded:
  xs: 5px
  sm: 7px
  md: 8px
  lg: 10px
  xl: 15px
  2xl: 16px
  3xl: 99px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 7.19px
  s4: 7.84px
  s5: 8px
  s6: 9.8px
  s7: 10px
  s8: 10.08px
  s9: 15px
  s10: 15.83px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 18.624px
    height: 39px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgba(0, 0, 0, 0.19) 0px 10px 20px 0px, rgba(0, 0, 0, 0.22) 0px 6px 6px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 18.624px
    height: 39px
    borderColor: "{colors.button-primary-border}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    padding: 3px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-on-footer}"
---

## Overview

The measured site is au.edu, titled "Assumption University of Thailand" (language en-US). It is the English home page of a private university run by the Brothers of Saint Gabriel. The capture opens on a gold-gradient banner, "Celebrating 125 Years of the Brothers of Saint Gabriel", with a 125th-anniversary emblem; under it a red utility strip with a phone number, an e-mail address, social icons ("Follow us:") and the date; then the logo block (a crest with the Thai and English name "ASSUMPTION UNIVERSITY of THAILAND") beside three outlined red pill buttons, "APPLY NOW", "AU LOGIN" and "AU SPARK", and a round red search button. A text menu follows: Study at AU, Campus Life, Current Student, News & Events, About, Alumni.

The hero area of the capture is blank white (the slider had not rendered), followed by content bands: "AU NEWS" (four photo cards with date, categories, excerpt and a "Read More" button, then a red "SEE ALL NEWS" button), "ANNOUNCEMENTS" on a grey band with poster-style images, and "UPCOMING EVENTS" with a dated card. Section titles are centered, uppercase, bold and red or black, flanked by thin rules.

Voice is institutional and warm: news headlines ("Chinese Songs, Thai Voices, One Winning Harmony at AU"), bilingual Thai and English announcements, and calls to action in capitals. A cookie notice was present and hidden for measurement; it is not documented here.

## Imagery and Voice

Photography is event and campus documentation: portraits of clergy and staff, group photographs of students on stage, building exteriors with logo overlays, and poster graphics for announcements (shuttle buses, service notices, flood-related academic notices) that include their own red, blue and yellow designs. Posters are shown unaltered in rounded white frames, so the page mixes uniform card styling with highly varied image content. Headlines are in title case and begin with the institution or the achievement, dates are shown as DD/MM/YYYY with a calendar icon, and category links such as "All News", "Teaching & Learning", "MOU" and "AU Celebration" appear under each date.

The first screen therefore reads as three stacked red-and-white strips (anniversary banner, utility bar, logo and buttons) before any content, which places institutional identity ahead of news. The measured nav background is a 90% white so that content can scroll beneath it, and the date shown in the utility strip ("9 October, 2026") is generated live in the capture.

## Colors

- **Canvas** `#ffffff` (17,117 area units), **surface grey** `#e3e3e3` (2,471, the Announcements band) and **surface charcoal** `#333333` (1,273).
- **Primary** `#dd3333` (23 area units) is the button fill; the "Read More" hover was measured filling #dd3333 (rgb(221, 51, 51)) with #1a1a1a text.
- **Footer** `#e02826` (915 area units); footer text `#f1f1f1` (360 characters).
- **Ink** `#000000` covers 4,089 characters; **ink maroon** `#632323` 585; white 417.
- **Reds in headings:** `#a51818` (277 characters) and `#aa1e23` (the red of "AU NEWS" and the top strip; 55 area units). The h1 span measured #c20404; the root body measured #44291f text with child colors #a71920, #aa1e23, #666666 and #222222 (not promoted to tokens).
- **Hairline** `#dddddd`; **nav background** `#ffffffe6` (white at 90%); the button border `#0000000d` is a 5% black.

The stylesheet also holds WordPress admin and preset colors (`--wp--preset--color--vivid-purple` #9b51e0, `--wp-admin-theme-color-darker-20` #005a87); these are platform defaults, not brand colors.

## Typography

Kanit (300, 400, 600, 700) is the primary face, which supports Thai; Monda (400) is used for card titles; Open Sans 400 is loaded; icon fonts are Font Awesome 6, FontAwesome, dashicons, ecticons and fl-icons. The variable `--font-base` is Kanit.

- Display ("AU NEWS" section title): Kanit 700, 30.8px / 49.28px, uppercase. Mobile: 24.64px / 39.424px.
- Heading (card h2 "1010 Digital Human Festival AI Agent Challenge"): Monda 700, 25px / 37.5px, color #383838.
- Body: Kanit 400, 17.6px / 28.16px.
- Button: Kanit 700, 15.52px / 24.832px, uppercase, letter-spacing 0.4656px.
- Nav: Kanit 400, 16px / 25.6px.
- The root body element declares Georgia at 25.6px.

Font substitutes: Kanit and Monda are open Google Fonts, no substitution needed.

## Layout

Page height 7,189px at 1280px. Header: gold banner, red utility strip, logo row, menu row, all left-aligned to about 20px with right-aligned buttons. Content bands are centered with a title and a thin rule either side. News cards sit four across with equal width, each with a photo at the top, bold 3-line title, a date and category line with small icons, a 2-line excerpt and a centered "Read More" button. Spacing steps: 3px, 5px, 7.19px, 7.84px, 8px, 9.8px, 10px, 10.08px, 15px, 15.83px.

## Elevation & Depth

Shadows: none on 73 elements, `0 0 10px 0 rgba(0,0,0,.15)` on 6, a focus ring `inset 0 0 0 1px #fff,0 0 0 var(--wp-admin-border-width-focus) var(--wp-admin-theme-color)` on 6. The primary button carries `rgba(0, 0, 0, 0.19) 0px 10px 20px 0px, rgba(0, 0, 0, 0.22) 0px 6px 6px 0px`, giving red buttons a lifted look. Cards have a thin grey outline with a very light shadow; a 3% black tint (#00000008, 4,209 area units) is used on panels.

## Shapes

Measured radii: 2px (57), 3px (37), 4px (35), 10px (30), 5px (29), 8px (17) and 99px (12). The primary button radius is 8px, the "Read More" button 5px, cards 16px, header pill buttons fully rounded (99px, 9999px tokens). Utility-strip social icons are circles.

## Components

- **Primary button** ("SEE ALL NEWS ›"): #dd3333 fill, white Kanit 700 15.52px uppercase, 8px radius, 39px tall, padding 0px 18.624px, 5% black border, the double shadow above.
- **Outline pill buttons** ("APPLY NOW", "AU LOGIN", "AU SPARK"): red outline and text on white, fully rounded.
- **Read More:** 5px radius, 45px tall, white at 70% fill with #1a1a1a text, fills #dd3333 on hover.
- **News card:** white, 16px radius, 3px padding, photo, title, metadata, excerpt.
- **Nav:** menu text in Kanit 16px with small dropdown carets.
- **Footer:** #e02826 background with #f1f1f1 text.

## Design System Architecture

No public design system or brand guideline site was found on the pages opened (au.edu home, via extraction); none is linked. The site is a WordPress build: root variables carry WordPress presets (`--wp--preset--font-size--large` 36px, `--wp--preset--shadow--outlined`), admin tokens (`--wpds-border-radius-xl` 12px, `--wpds-color-*`) and `--font-base` set to Kanit. An icon font named fl-icons is loaded. The institution's own layer is the red palette and Kanit typography; these are not published as a token package.

## Do's and Don'ts

- Do use #dd3333 with white uppercase Kanit bold for primary calls to action.
- Do use crimson #aa1e23 for section titles and a thin rule on either side.
- Do pair Thai and English text in Kanit.
- Do keep cards white with a photo first.
- Don't use WordPress preset colors (#9b51e0) or the admin blue as brand colors.
- Don't depict the cookie notice as a brand component.
- Don't leave the hero empty; the measured capture shows an unrendered slider area.

## Responsive Behavior

A 390px mobile pass measured: the "AU NEWS" title at 24.64px / 39.424px, the h2 at 25px / 37.5px in a 268px wide box, and a body paragraph; the first card text wraps in a 268px box. Menu form, card columns and breakpoints: not measured.

## Iteration Guide

1. White canvas, black text, red #dd3333 buttons with 8px radius and shadow.
2. Kanit 17.6px body; uppercase 30.8px section titles in crimson with side rules.
3. Four-up news cards with 16px radius.
4. Footer in #e02826.
5. Run `node web/scripts/verify-designs.mjs --slug=assumption-university`, then measure mobile layout.
