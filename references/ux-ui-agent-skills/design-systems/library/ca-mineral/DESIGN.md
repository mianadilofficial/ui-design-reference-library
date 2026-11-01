---
version: alpha
name: Broadcom
category: "Design Systems"
description: "The Broadcom corporate site (broadcom.com): Inter at 44px/700 and 22px/800 headings with 0.25px tracking, 15px slate body #494a5e, link blue #005c8a, brand red #cc092f in the logo and gradient rule, white cards with 1px light borders, square buttons and 2px to 5px radii."
colors:
  canvas: "#ffffff"
  ink: "#494a5e"
  primary: "#005c8a"
  blue-bright: "#0075a3"
  brand-red: "#cc092f"
  surface-dark: "#151b17"
  surface-footer: "#e8e8eb"
  ink-black: "#000000"
  ink-navy: "#272941"
  nav-text: "#000000e6"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 44px
    fontWeight: 700
    lineHeight: 54px
    letterSpacing: "-0.25px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38px
    letterSpacing: "-0.25px"
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 22px
    fontWeight: 800
    lineHeight: 31px
    letterSpacing: 0.25px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 23px
  button-secondary:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 800
    lineHeight: 21px
    letterSpacing: 0.25px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6.25px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    padding: 11px 16px
    height: 45px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.nav-text}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 3px 30px 3px 10px
    height: 28px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-navy}"
---

## Overview

This file describes the Broadcom corporate website at `https://www.broadcom.com/` (document title "Broadcom Inc. | Connecting Everything"). It is not the Mineral UI component library; that library is covered only as context under Design System Architecture. The page is an enterprise semiconductor and infrastructure-software home: a white header carrying the red-circle Broadcom wordmark, a thin gradient rule beneath it that runs from red through violet to dark navy, a hero reading "Delivering the best technology, at scale" with a white-surfaced button "Learn how Broadcom delivers core technologies", then "Core technologies to accelerate innovation" with a row of line-art icons (AI Infrastructure, Automotive, and others), a dark violet textured band titled "Popular Links" holding six outlined white-text link boxes, a light grey band of three white cards (Latest Products, Latest News, Latest Articles), an "About Us" text block beside a video poster framed in a red to blue gradient, and a pale grey footer.

The capture is partly covered. A cookie notice ("Cookies ... Cookies Settings ... Cookie Notice") is overlaid on the middle of the page, and the hero appears washed out because a translucent layer sits over it, so the white hero headline and subline are nearly unreadable in the screenshot. I re-ran the extractor with `--stealth` and the notice and washed hero remained. The cookie notice and its links are not brand UI and are not documented as components. The hero's white h1 (`#ffffff`) is a computed style; its legibility over the hero imagery could not be confirmed from this capture, so no claim is made about contrast there.

Tone is corporate technical: product names (PEX90144, AgentMinder, BCM6775) and dated headlines ("10/8/2026") in bold blue link text, with plain descriptive sentences in slate grey. Imagery is line-art icons, a textured purple photograph, and an architectural video still; there are no people on the page.

## Colors

- **Canvas `#ffffff`** is the dominant background area.
- **Ink `#494a5e`** is a slate grey used for body copy and for the h2 section titles in cards (about 1,530 weighted characters, the most-read color).
- **Primary `#005c8a`** is the link and action blue (about 904 weighted characters): news and product link titles, "View more products", the secondary button text. The generator assigned `#0075a3` (only about 13 characters measured) so that value is kept as `blue-bright` and not used for brand roles.
- **Brand red `#cc092f`** appears 386 times in the site's CSS and matches the red in the logo mark and the left end of the gradient rule in the capture.
- **Ink black `#000000`** and **ink navy `#272941`** are used for the nav text (`#000000e6`), the footer text and the "Core technologies" h3 and "About Us" headings.
- **Surface dark `#151b17`** is the large dark background area measured (weight 373); the capture shows a dark violet textured band for the "Popular Links" section.
- **Surface footer `#e8e8eb`** is the footer background and also near the grey card band, with `#d1d2d7` borders and `#757586` for one border.

The CSS also contains Bootstrap defaults (`--primary #007bff`, success `#28a745`, danger `#dc3545`); those are framework defaults, not Broadcom brand colors.

## Typography

Inter is the page family (400, 700 and 800 loaded), declared in `--font-family-primary`; Arial appears on about 385 characters. Sizes by use: 15px body (most characters), 18px, 14px, 13px, 16px, 19px, 22px, 32px and 44px.

- **Display** (h1): 44px, 700, line height 54px, letter-spacing -0.25px; 32px/38px on the 390px mobile measurement.
- **Heading** (card titles such as "Latest Products"): 22px, 800, line height 31px, letter-spacing 0.25px.
- **Body**: 15px, 400, line height 23px. All sizes except the large headings carry +0.25px tracking.
- **Button**: 14px, 800, line height 21px, 0.25px tracking.

The "Core technologies to accelerate innovation" section title is 32px at weight 700 in navy `#272941`. Weight 800 is reserved for card headings and button labels, giving a heavy label style.

## Layout

A 1280px desktop page with a three-column rhythm: the three cards, the six Popular Links boxes (three by two) and the icon row all share the same column grid. Paddings are 16px and 24px most often, with 15px, 10px, 12px, 20px and 72px for section spacing. Gaps are 30px and 20px. Bootstrap breakpoints are present in the CSS (576px, 768px, 992px, 1200px). Sections alternate full-bleed bands: white, dark violet, light grey, white, light grey footer.

## Elevation & Depth

Almost flat. Cards are white rectangles on a grey band with a 1px light border (`#d1d2d7`), and the only shadows measured are `rgba(0, 0, 0, 0.35) 0px 0px 4px 0px` and `rgba(0, 0, 0, 0.2) 0px 0px 4px 0px`, each on a single element. The header sits on a hairline gradient rule instead of a shadow. The dark band uses a photographic texture for depth rather than elevation.

## Shapes

Mostly square. The measured radii are 4px (inputs; four elements), 5px, 2px, 50% (round icon buttons and the logo circle) and a bottom-only `0px 0px 4px 4px`. Buttons and cards measure 0px. Outlined link boxes in the dark band have 1px white borders and square corners.

## Components

- **Secondary button / link button.** "Learn how Broadcom delivers core technologies": white fill, text `#005c8a`, Inter 14px weight 800, 0.25px tracking, padding 11px 16px, height 45px, 0px radius.
- **Outlined link box.** On the dark band: transparent fill, 1px white border, white bold label, centered ("Customer Support Portal", "Software Documentation", "Communities").
- **Card.** White fill, 1px light-grey border, bold slate `22px` title, items with a blue linked title, a grey description and a centered blue "View more ..." link.
- **Search field.** 28px high, 4px radius, padding 3px 30px 3px 10px, text `#494a5e`, magnifier at the right.
- **Navigation.** Black text at 90% opacity (`#000000e6`) above a gradient rule; the capture shows the main links faded by the overlay.
- **Footer.** `#e8e8eb` background, navy `#272941` bold links (Products, Solutions, Support and Services, Company, How To Buy).

## Design System Architecture

The measured site is Broadcom's corporate site, built on Bootstrap: its root custom properties are Bootstrap's (`--primary`, `--blue`, `--breakpoint-sm/md/lg/xl`, `--font-family-sans-serif`) plus Broadcom's own `--font-family-primary` (Inter, sans-serif) and a `brcm` icon font and `bi2` font are loaded. The proposed design-system link, https://mineral-ui.netlify.app ("Mineral UI"), was opened but was client-rendered and exposed only its title, so no owner, token or status details could be read; and nothing in the measured CSS (no Mineral UI classes or variables) indicates broadcom.com uses it. It is described here only by name, and no values were taken from it.

The de-facto system is therefore a Bootstrap 4 base with a custom Inter type layer, a small blue and red palette, and bespoke bands. Naming in the CSS is generic and semantic tokens are Bootstrap's.

## Do's and Don'ts

- Do use `#005c8a` for links and secondary buttons, with weight 800 labels.
- Do keep shapes square with 1px borders and reserve 4px for inputs.
- Do set headings in Inter 700 or 800 with +0.25px tracking on card titles.
- Do use `#cc092f` only in the logo and gradient rule accents.
- Don't treat the cookie notice as brand UI.
- Don't use Bootstrap's default `#007bff` for brand links.
- Don't add shadows to cards; they are bordered.
- Don't place white headline text over imagery without checking the contrast.

## Responsive Behavior

The h1 goes from 44px/54px to 32px/38px at 390px wide. Bootstrap breakpoints at 576px, 768px, 992px and 1200px govern the layout; the three-column cards and the icon row are expected to reflow, but only the h1 change was measured. The header holds a utility row (Support Portal, English) and a search field beside the main navigation.

## Iteration Guide

1. Canvas `#ffffff`, ink `#494a5e`, link/action `#005c8a`, brand red `#cc092f`.
2. Inter: h1 44/54 at 700, card titles 22/31 at 800, body 15/23, button 14/21 at 800, all with 0.25px tracking.
3. Square buttons 45px high, 11px 16px padding, white fill with blue text.
4. White bordered cards on a light-grey band, dark violet band for link boxes.
5. Keep shadows to the two faint 4px blurs only where an element floats.
