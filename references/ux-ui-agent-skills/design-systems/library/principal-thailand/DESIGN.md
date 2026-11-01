---
version: alpha
name: "Principal Thailand"
category: "Thai Brands"
description: "Thai fund-management and provident-fund site in FS Elliot Web and ekkarach: white #ffffff ground, #035fa4 blue links and 4px-radius buttons, #0091da header blue, #373737 charcoal footer, #464646 body text, no shadows."
colors:
  canvas: "#ffffff"
  ink: "#035fa4"
  primary: "#035fa4"
  on-primary: "#ffffff"
  surface-footer-charcoal: "#373737"
  surface-bright-blue: "#0091da"
  ink-body: "#464646"
  ink-title-grey: "#4d4e53"
  primary-hover: "#024272"
typography:
  display:
    fontFamily: "\"FS Elliot Web Bold\", \"FS Elliot Web Regular\", Arial, arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 19.8px
  heading:
    fontFamily: ekkarachFontBold
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
  body:
    fontFamily: ekkarachFont
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  button:
    fontFamily: "\"FS Elliot Web Bold\", \"FS Elliot Web Regular\", Arial, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.8571px
  nav:
    fontFamily: "\"FS Elliot Web Bold\", \"FS Elliot Web Regular\", Arial, arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 4px
  sm: 20px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 15px
  s5: 19px
  s6: 20px
  s7: 25px
  s8: 30px
  s9: 31px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 25px
    height: 45px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 25px
    height: 45px
    borderColor: "{colors.ink}"
  link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 25px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 19px 15px
---

# Principal Thailand

Note on naming: the queue lists this brand as Principal Capital Thailand (principal.th/en). The measured page is titled "Home | Principal Thailand", and its copyright line reads "© 2026 Principal Asset Management Co.,Ltd", so this file is named Principal Thailand.

## Overview

The measured site is the English home page of Principal Thailand, the Thai fund-management and provident-fund business. The capture shows a saturated blue header bar with the Principal logo and an "In alliance with CIMB" mark, a navigation of Mutual Fund, Provident Fund, Private Fund, Knowledge Centre, About Us, "Log In & Digital Service", a TH language link and a search icon; a full-width carousel hero (a photograph of a man at a laptop with the Thai-and-English headline "Principal Multi-Asset Funds", three ring-shaped fund badges and a "Read More" button, with five pager dots and left/right arrows); a "Highlights" grid of article cards; a "Top Mutual Funds" panel and an "Announcement" panel on the right; two promotional blocks ("Target Date Fund" with "Register for Provident Fund", and "Principal Independent Financial Advisor (IFA)" with "for more information"); and a six-column charcoal footer. A popup block (`block-popupmessageth`) was detected and hidden for measurement and is not described as brand UI. The page is 2719px tall at 1280px.

The character is conventional corporate finance: lots of white, links in a strong mid-blue, photography of advisers and customers, and information density in the sidebar panels.

## Colors

Measured backgrounds: white `#ffffff` (3501), footer charcoal `#373737` (873), bright blue `#0091da` (219, the header and the IFA block), slate `#3a5370` (158) and brand blue `#035fa4` (111, buttons). Text by characters: white (1302), blue `#035fa4` (925, links, card titles, fund names), `#464646` (128, body) and `#4d4e53` (38, panel headings).

`#035fa4` is both the primary action fill and the dominant link/text color; its hover state recorded `rgb(2, 66, 114)` (`#024272`). Root variables name a wider palette: `--blue-scale2: #0377d0`, `--blue-scale7: #006fa7`, `--blue-scale4: #dfecf8`, `--titlegrey: #4d4e53`, `--yellow: #ffc82e`, `--green: #00c19f`, `--seablue: #00aecb`, `--darkblue: #464e7e`, `--midgreen: #009c91`, `--darkgreen: #017970`. Fund price changes are marked with a small up caret in the capture; its color was not separately measured.

## Typography

Four loaded faces: FS Elliot Web Regular and FS Elliot Web Bold for Latin text with Arial as fallback, and ekkarachFont and ekkarachFontBold for Thai text and body paragraphs. By characters, FS Elliot Web Bold carries 1056, Regular 666, ekkarachFont 553 and ekkarachFontBold 118. These are commercial or bespoke faces.

Measured roles (all at weight 400 because bold is a separate family file): article titles and the largest hero-region text 18px with a 19.8px line height; section heading "Announcement" 24px in ekkarachFontBold with a 26.4px line height; body 16px with a 22.8571px line height in ekkarachFont; button 16px; navigation 14px with a 22px line height. The most frequent sizes are 14px (958 characters), 16px (808) and 18px (455), then 11px (41, footer copyright), 24px, 15px and 13.3333px.

## Layout

A two-column content area sits under the hero: a wide left column for the Highlights card grid (two cards per row, each a thumbnail with a blue title beneath) and a narrower right column of stacked bordered side panels. The promotional blocks span the left column as full-width cards. The footer is charcoal with six link columns (Mutual Fund, Provident Fund, Private Fund, Our Company, Other Sites, Others). Spacing steps recorded: 5, 8, 10, 15, 19, 20, 25, 30, 31 and 40px.

## Elevation & Depth

No box shadows were measured at all (the shadow list is empty), so the page is flat. Separation is created by `#dddddd` hairline borders around the Top Mutual Funds and Announcement panels, by generous white space between cards, and by solid color blocks: bright blue for the IFA promotion, a photograph with a translucent blue wash for the Target Date Fund block, and a charcoal footer. The only interactive depth cue measured is the button hover, which darkens the fill from `#035fa4` to `#024272`.

## Shapes

Two radii were measured: 4px (6 uses, buttons) and 20px (5 uses, element not identified in the extraction). The primary and secondary buttons are 4px; cards and panels appear square-cornered in the capture.

## Components

- Primary button ("Read More", "Read Article More"): fill `#035fa4`, white text, FS Elliot 16px, padding `10px 25px`, 45px tall, 4px radius; hover fill `#024272`.
- Secondary button ("Register for Provident Fund"): white fill, `#035fa4` text, `1px solid #035fa4`, 4px radius, 45px tall.
- Navigation link: white 14px text on blue, padding `19px 15px`, 60px tall.
- Fund list row: blue uppercase fund name, price in `THB`, caret, "More" link, caption "As of current market close".
- Announcement item: blue link title, grey date.
- Footer: `#373737` with white links.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present. The de-facto system is a custom site theme (the page includes a "Skip to main content" link and block ids such as `block-popupmessageth`) with named color variables in the root (`--blue-scale*`, `--greyscale*`, `--titlegrey`, `--primary-white`), FontAwesome icons and four bespoke font files. Colors are therefore tokenized by scale name rather than role.

## Do's and Don'ts

Do use `#035fa4` for links, titles and buttons, with white text on filled buttons. Do keep body copy in `#464646` and panel headings in `#4d4e53`. Do hold the footer in `#373737`. Do pair thumbnails with a blue title link and a grey date.
Don't use the yellow `#ffc82e` or green `#00c19f` variables as primary actions; they were not measured on buttons. Don't copy the popup block as brand UI. Don't round cards; only buttons carry a 4px radius.

## Responsive Behavior

The 390px mobile pass recorded: h1 18px (height 147px as the title wraps), h2 24px, footer copyright text 11px, the "Read More" button unchanged at 16px, 45px tall with `10px 25px` padding, and a navigation bar of 60px height containing "TH" and a "Toggle navigation" control at 14px. Mobile font sizes recorded: 14px, 16px, 18px, 11px, 24px and 15px. How the two-column area, the carousel and the footer columns reflow was not measured.

## Iteration Guide

1. White ground, `#464646` text, `#035fa4` links and buttons.
2. FS Elliot for Latin and ekkarach for Thai; 16px body, 24px section headings.
3. Buttons: 4px radius, 45px tall, `10px 25px` padding.
4. Use `#0091da` for the header bar and `#373737` for the footer.
5. Measure before adding new values.

### Imagery and voice

Photography is warm and human: a smiling professional with a laptop in the hero, an older couple in the Target Date Fund block, and group photographs of executives at events in the Highlights cards. Several cards are branded blue graphics for "Principal Investment Opportunities" video episodes, with an adviser portrait, a date in the Thai Buddhist calendar and a highlighted episode title in yellow-green. Headlines are bilingual: English names such as "Principal Multi-Asset Funds" and "CIO View: September 2026" next to Thai subtitles. Microcopy is instructional and regulatory in tone ("Report on Information of Two-Way Communication...", "As of current market close") with short calls to action such as "Read More", "Register for Provident Fund" and "for more information".

The Top Mutual Funds panel lists five funds by uppercase name (PRINCIPAL TDIF-X, INDIAEQ-A, INDIAEQ-C, VTOPP-X, GREITs) each followed by a right-aligned price such as THB 8.9589 and a small caret, which gives the sidebar a compact, ticker-like rhythm distinct from the editorial cards in the main column.
