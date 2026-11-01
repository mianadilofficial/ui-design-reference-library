---
version: alpha
name: The Work Loft
category: "Thai Brands"
description: "The Work Loft (theworkloft.com), a coworking, meeting-room and private-office space in Silom, Bangkok. Raleway 700 headings, Avenir Light body at 15px, raspberry #e42c54 buttons and feature panels with 6px radius, charcoal #3c4444 text and footer, white canvas and a #fafafa section tint."
colors:
  canvas: "#ffffff"
  ink: "#3c4444"
  primary: "#e42c54"
  on-primary: "#ffffff"
  surface-tint: "#fafafa"
typography:
  display:
    fontFamily: raleway, sans-serif
    fontSize: 40px
    fontWeight: 700
  heading:
    fontFamily: raleway, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 31.02px
  body:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 28.125px
  nav:
    fontFamily: avenir-lt-w01_35-light1475496, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 30px
rounded:
  xs: 6px
  pill: 9999px
spacing:
  s1: 10px
  s2: 60px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    height: 45px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview

The Work Loft is measured on `https://www.theworkloft.com/`, titled "Coworking space - Meeting room - Private office | The Work Loft | Silom Bangkok Thailand", `lang="en"`. The first capture of this site carried an announcement overlay (a dark scrim with "NEW OPERATING HOURS ON 15 OCT ONWARDS" and an "ENTER SITE" button); the measurement was re-run once and the overlay and its #000000cc scrim are excluded from every token and description here. The overlay is a notice, not brand UI.

The home page itself reads like a hospitality brochure for a workspace. A white header carries the square bar-chart logo and a single row of menu items (Home, Coworking, Meeting Room, Private Office, I FOUND YOU CAFE, Price, Contact) set in raspberry, followed by social icons and an EN language selector. A tall hero photograph shows a potted fern on a wooden table with a blurred open workspace behind it. Under it a centered block states "WORK IN THE HEART OF BANGKOK", a two-line pitch ("Looking for a great place to work or organize meetings? ..."), a dot-separated list of benefits and a raspberry "TRY FOR FREE" button. A split section pairs a photograph of the logo on a white brick wall with a full-height raspberry panel listing four benefits (most convenient location next to BTS Sala Daeng, high-security 24/7 access, fast and reliable internet, excellent customer service), each with a white line icon. Following sections cover membership prices in baht, further interior photography and a charcoal footer with address and contact details. A chat widget appears at the bottom right of the capture; it is third-party chrome and is not documented as a component.

## Colors

The palette is three colors plus white. `canvas` #ffffff is the dominant background (8,426 area units); `primary` #e42c54 (3,148 units) is the raspberry used for buttons, the feature panel and the menu text; `ink` #3c4444 is the most-read text color (2,495 characters) and also fills the footer (1,315 units); `surface-tint` #fafafa (1,071 units) is a faint band behind the membership section. White text (1,883 characters) sits on the raspberry panel and the charcoal footer. `on-primary` is white for button labels.

The Wix theme exposes many `--color_N` variables, among them 228,44,84 (the raspberry), 60,68,68 (the charcoal), a grey ramp (154,165,165; 204,210,210; 105,119,119) and darker and lighter raspberry shades (for example 161,21,51 and 237,114,141). Only the raspberry, charcoal, white and #fafafa were measured painting the home page; the ramp and shades are theme-palette entries not observed on screen, so they are not tokens. The UA default link color #0000ee was recorded on two icon links and is not a brand color.

## Typography

Two families come from the Wix font set: Avenir (loaded as `avenir-lt-w01_35-light1475496`) carries 4,219 measured characters and Raleway (weight 700 and 400) carries 331; Helvetica Neue 55 Roman (`helveticaneuew01-55roma`) carries 83 at weight 300.

Scale: `display` Raleway 700 at 40px for "WORK IN THE HEART OF BANGKOK" and "COWORKING SPACE MEMBERSHIP" (line height 54px in the mobile-pass measurement); `heading` Raleway 700 22px / 31.02px for feature headings such as "THE MOST CONVENIENT LOCATION"; `body` Avenir 15px / 28.125px weight 400 (3,272 characters at 15px by count); `nav` Avenir 14px weight 700, line height 30px, for the menu. Other sizes by character count: 18px (554), 20px (163), 16px (85). Headings are written in upper case in the source copy, which is why no text-transform is declared. Weights: 3,661 characters at 400, 889 at 700, 83 at 300.

## Layout

The desktop capture is 1280px wide and 6,677px tall. The header is 74px high. Sections alternate: a full-bleed hero, a centered text block, a two-column split (photograph left, raspberry panel right, each half the viewport), then a two-column section with text on a #fafafa band and a photograph on the right. Body paragraphs are measured at 460px wide inside the half-width columns; the centered pitch text is narrower than the viewport. Spacing tokens recorded: 10px and 60px. Imagery is edge-to-edge with no gutters between the two halves of a split.

## Elevation & Depth

No box shadows were recorded on the page. The Wix runtime declares focus-ring shadows (`0 0 0 3px #a6d0ff`) for form controls; they were not observed on screen. Depth is created by color blocks and photography: a saturated raspberry panel beside a bright photograph, a dark photographic hero, and a charcoal footer.

## Shapes

Only two radii appear on screen: 6px (five elements, the call-to-action buttons) and 50% (four elements, the social-icon circles). Everything else — images, panels, the header — is square-cornered. The language selector button is square (0px radius) with a 1px white border.

## Components

**Primary button** — raspberry fill, white 15px Avenir 400 label in capitals ("TRY FOR FREE", "BOOK A MEETING ROOM"), 45px tall, 6px radius, 138px or 189px wide depending on label. **Language selector** — white fill, black 16px bold "EN", 1px white border, 45px tall; on hover its text color changes to rgb(154, 165, 165). **Navigation** — white header, raspberry 14px bold Avenir labels, a current-page item shown in raspberry. **Feature panel** — full-height raspberry block with white Raleway 22px headings, white Avenir 15px lines and white outline icons. **Footer** — #3c4444 fill with white text and the address "281/19-23 3F-6F NST One Building, Soi Silom..." in 15px bold.

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site is built on Wix. Its de-facto system is the Wix theme: 155 root variables (`--color_0` to `--color_65`, `--font_0` to `--font_10`, `--wst-*`, `--wds-*`). The font variables define the type ramp: `--font_0` 22px / 1.41em Raleway, `--font_2` 28px / 1.375em Raleway, `--font_6` 40px / 1.35em Raleway, `--font_9` 15px / 1.875em Avenir, `--font_7` 20px / 1.67em Avenir, `--font_8` 18px / 1.75em Avenir and `--font_10` 14px / 1.79em Avenir. Those declared sizes match the measured text sizes of 14, 15, 18, 20, 22 and 40px.

## Do's and Don'ts

Do use raspberry #e42c54 for actions and the large feature panel, charcoal #3c4444 for text and the footer, and white as the page color. Do set headings in Raleway 700 capitals and body in Avenir 15px. Do pair full-bleed interior photography with solid color halves. Do keep buttons at 6px and 45px tall.

Don't use the browser default #0000ee for links. Don't add shadows or gradients; none were measured. Don't show the announcement overlay's black scrim as a brand surface. Don't use the chat widget's styling in design work for this brand.

## Responsive Behavior

The mobile measurement did not reflow: the mobile pass recorded the same typographic values as desktop (h1 40px, body 15px, button 45px tall and 6px radius) and reported the header at 980px wide and the h1 box at 669px wide, so no narrow-viewport layout values were captured. How the header collapses, how the split sections stack and any breakpoint are not measured.

## Iteration Guide

Start from the five color tokens and the two type families. A new section is either a white band with a Raleway 40px heading and Avenir 15px copy, a raspberry panel with white text, or a charcoal band; add one raspberry button per section. Describe spaces with real photographs of the interiors. Anything not listed here — forms, hover on buttons, dark mode — was not measured and should be measured before being documented.
