---
version: alpha
name: Generali Group
category: "Banking & Insurance"
description: "Generali Group (generali.com) is an insurer's corporate portal in Roboto (38.7981px weight 300 headings, 15.008px bold uppercase buttons), with Generali red #c21b17 5px-radius buttons, #f6f6f6 cards with 8px radius, #20252b text on white, and red feature panels behind photography."
colors:
  canvas: "#ffffff"
  ink: "#20252b"
  primary: "#c21b17"
  on-primary: "#ffffff"
  surface-card: "#f6f6f6"
  ink-black: "#000000"
  ink-meta: "#6f7072"
  ink-meta-alt: "#707070"
  hairline: "#b0b2b3"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 38.7981px
    fontWeight: 300
    lineHeight: 48.4977px
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 32.1127px
    fontWeight: 300
    lineHeight: 40.1409px
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 30.7981px
    fontWeight: 300
    lineHeight: 38.1972px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 13px
    fontWeight: 700
    lineHeight: 21px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 15.008px
    fontWeight: 700
    lineHeight: 42.8779px
    letterSpacing: 1.44px
    textTransform: uppercase
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 5px
  md: 8px
  lg: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 5.36px
  s4: 6.5px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 5.35786px 30.016px
    height: 58px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 5.35786px 30.016px
    height: 58px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-meta}"
    typography: "{typography.nav}"
    padding: 24px 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 8px 16px 0px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    padding: 1px 2px
    height: 27px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink-meta}"
    rounded: "{rounded.md}"
    padding: 8px 0px
  footer:
    textColor: "{colors.ink}"
    padding: 115px 0px 0px
---

## Overview

The Generali Group home page (https://www.generali.com/, title "Generali Group", measured at 1280px wide and 6172px tall) is a corporate-and-investor portal for a large insurer, built on a strong red identity. At the top is a white header with the red winged-lion "GENERALI" logo, a thin red utility strip (Generali Stories, Bollettino, "Where we are", Strategic Plan, Download Center, Contact Us, ITA) and main navigation in small uppercase labels: Who we are, What we do, Sustainability, People & Careers, Investors, Media, Governance, plus a red search icon. A full-width slideshow hero, dark blue or red with a white 38.7981px light-weight headline ("Barcolana and Women in Sailing" in this capture, "Connessioni: discover the third episode" in the earlier one) and a white "DISCOVER MORE" button, leads into centred 38.7981px section titles on a white or light-grey field: Press Releases (three grey cards with date, headline and a red "READ MORE" arrow link), What's new, Our awards and recognition (red and photographic cards), a video feature on a red panel, Financial Focus with large red figures, Publications and Our Group. The footer is white with a red logo and a red "SUBSCRIBE" button.

A red newsletter sign-up popup ("Sign up for our Newsletter!") overlaps the capture; it is a popup and is not documented as brand UI. The voice is institutional and factual: press-release headlines, figures such as "€ 53.4 bln" gross written premiums, and sentences like "Generali is one of the leading insurers in the world."

## Colors

`{colors.primary}` (#c21b17, the Generali red) is the action and brand colour: filled buttons with a 2px same-colour border, "READ MORE" links, nav icons, award and feature panels (825 area weight) and the figures in Financial Focus; `#aa1b17` (138 area) is a darker red panel tone. On hover the measured button inverts: white fill with red text (`SUBSCRIBE` button measured red text on white turning to white on red). `{colors.canvas}` (#ffffff, 7681 area) is the page and header; `{colors.surface-card}` (#f6f6f6, 3878) fills cards and alternate sections.

Text: `{colors.ink}` (#20252b, 1416 characters) for headings and body on white, white (1344) over images and red, `{colors.ink-black}` (#000000, 642) for inputs and some labels, red (405), `{colors.ink-meta}` (#6f7072, 104) for dates and metadata, `{colors.ink-meta-alt}` (#707070, 84). `{colors.hairline}` (#b0b2b3) is the divider and a border colour on 12 elements; other borders are #ffffff, #0000002d and #c21b17. Bootstrap root variables (--bs-primary #0d6efd, etc.) are framework defaults and not brand colours.

## Typography

Roboto is the only family (4225 characters) in weights 300 (2178 characters), 400 (1196), 700 (496) and 500 (125); an icon font "icongen" is also loaded. The brand look is light and airy at large sizes and bold uppercase for small controls. Measured sizes by characters: 13px (835, nav and meta), 23.3991px (741, 0.3px tracking), 19.6995px (632, body copy and card text), 16px (456), 38.7981px/48.4977px weight 300 (279, section titles and hero), 12px, 14px, 15px, 15.008px, 30.7981px/38.1972px (card titles), 11px and 19.3991px. Buttons are 15.008px weight 700 uppercase with 1.44px tracking and 42.8779px line-height; nav labels are 13px weight 700 uppercase with 1.43px tracking. The `body` token generated from the measured body-text role is the 13px weight 700 red intro paragraph (21px line height); the page's running copy is the 19.6995px light size above. On mobile the hero title is 32.1127px/40.1409px weight 300.

## Layout

The header is 110px tall on desktop (52px on mobile) with a 0px 8px 16px 0px/0.15 shadow. Sections are centred, with three-up card rows (410px-wide cards), a two-column What's new block (a list on the left, a featured event card on the right), a four-across horizontally scrolling awards carousel, and a three-column Financial Focus strip. Measured paddings: 24px (33), 8px, 5px, 10px, 5.35786px, 30.016px (button), 56px, 9px, 20px, 40px, 45.008px, 48px; the footer has 115px top padding and is 608px tall.

## Imagery and Content

Imagery mixes sponsorship and corporate photography with illustration: sailing yachts carrying the Generali lion logo and a tennis court in the hero slides, a father with a child in the strategic-plan video, a historic building on the events card, a blue-and-red illustrated family under a house outline in the Our Group panel, and magazine covers in Publications. Awards cards place a white line icon or the partner's own logo (for example Extel) over a red gradient or a darkened landscape. Content is organised by publication type: dated press releases with a time stamp ("14 October 2026 12:08"), news tagged NEWS or EVENTS, downloadable reports and three financial KPIs (operating result, gross written premiums and combined ratio, each with a small change line). The tone is formal and factual in English, with some Italian labels (Bollettino) left in place.

## Elevation & Depth

Three shadows were measured: `rgba(0, 0, 0, 0.15) 0px 8px 16px 0px` (header), `rgba(0, 0, 0, 0.16) 0px 6px 8px 0px` and `rgba(0, 0, 0, 0.286) 0px 0px 8px 0px`. Cards are flat grey on white. Photography is layered with red flat blocks that offset behind images (the video feature and the Our Group illustration sit on red panels).

## Shapes

Radii: 8px (23 elements, cards), 5px (9, buttons), 50% (7, icon circles), 10px (2), 3px (2) and compound corners such as `0px 0px 16px 16px`, `0px 8px 0px 0px`, `8px 8px 0px 0px`. Buttons are small-radius rectangles, not pills.

## Components

- Primary button: #c21b17 fill, white 15.008px weight 700 uppercase text, 1.44px tracking, 2px solid #c21b17 border, 5px radius, 5.35786px 30.016px padding, 58px high ("VIEW ALL PRESS RELEASES" 288px wide, "DISCOVER MORE" 199px).
- Hover: fill and text invert to white fill with red text (measured on the newsletter button, 3px radius).
- Main nav links: uppercase 13px weight 700 with 1.43px tracking, #20252b.
- Press card: #f6f6f6, 8px radius, 8px 0px padding, 410px wide, grey date line, 16px headline, red "READ MORE" with arrow.
- Text input: white, black 16px text, 27px high, 1px 2px padding (newsletter field).
- Footer: white, 115px top padding, red logo and links.

## Design System Architecture

No public design system or brand-guideline page was opened. The shipped CSS shows Bootstrap 5 root variables (`--bs-*`), the mmenu mobile-menu library (`--mm-size`, `--mm-toggle-size`, `--mm-iconpanel-size`) and a custom icon font. Brand tokens are applied through component styles (red #c21b17, grey #f6f6f6, Roboto at specific sizes) instead of named root variables.

## Do's and Don'ts

- Do use #c21b17 for every action with white uppercase 700-weight labels and 5px radii.
- Do set large headings in Roboto 300 at 38.7981px, centred over cards.
- Do use #f6f6f6 cards with a grey metadata line and a red "READ MORE" arrow.
- Do alternate white and #f6f6f6 bands and add red feature blocks behind photography.
- Don't use Bootstrap blue (#0d6efd) or default link blue.
- Don't document the newsletter popup as brand UI.
- Don't use pill-shaped buttons; the measured button radius is 5px.

## Responsive Behavior

At 390px the hero title measured 32.1127px/40.1409px weight 300, the header 52px with the same shadow, the red intro paragraph 13px weight 700 at 356px wide, and the primary button 13.008px with 1.25px tracking, 4.64386px 26.016px padding, 250px by 50px. Sizes by characters on mobile: 13px (1002), 20.0564px (780), 18.0282px (659), 16px (343), 32.1127px (284), 14px (271), 13.008px (124), 11px, 12px, 24.1127px and 40.2254px. Column stacking and menu behaviour were not measured.

## Iteration Guide

1. Start from white, #20252b text and Roboto 300 for large headings.
2. Make all actions #c21b17 with 5px corners and uppercase 700-weight labels.
3. Use #f6f6f6 cards (8px radius) in three columns and red panels for features.
4. Keep metadata in #6f7072 at small sizes.
5. Dark mode, focus rings and carousel motion were not measured.
