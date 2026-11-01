---
version: alpha
name: MindMarket
category: "Culture & Events"
description: "MindMarket (mindmarket.com) market-research agency home page measured: lime #8ed462 hero over a cream #f5f1e4 page, #2c2e2a ink, blue #2ba0ff accent, Inter weight 500 at 124.16px with -7.4496px tracking, white nav and card panels, 10px-radius outlined Get a quote button, yellow #f5e211 footer."
colors:
  canvas: "#8ed462"
  page-body: "#f5f1e4"
  ink: "#2c2e2a"
  primary: "#2ba0ff"
  surface-3: "#e0dbce"
  ink-2: "#ffffff"
  ink-3: "#484e4699"
  ink-4: "#000000"
  footer-bg: "#f5e211"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 124.16px
    fontWeight: 500
    lineHeight: 117.952px
    letterSpacing: "-7.4496px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 66.9114px
    fontWeight: 500
    lineHeight: 63.5658px
    letterSpacing: "-4.01468px"
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 29.5864px
    fontWeight: 500
    lineHeight: 35.5037px
    letterSpacing: "-1.77519px"
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 25.5px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 18.0225px
    fontWeight: 500
    lineHeight: 27.0337px
rounded:
  xs: 10px
  sm: 20px
  md: 25.5px
  lg: 50px
  xl: 63.75px
  pill: 9999px
spacing:
  s1: 4.25px
  s2: 6.38px
  s3: 8.5px
  s4: 10.54px
  s5: 10.63px
  s6: 12.75px
  s7: 12.8px
  s8: 17px
  s9: 20px
  s10: 21.25px
components:
  button-secondary:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 10.625px
    height: 68px
    clipPath: inset(0px round 10px)
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 10.625px
  nav:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.ink-2}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
    padding: 33.6746px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 134.043px 0px 38.25px
---

# MindMarket

## Overview

This file documents the home page measured at `https://mindmarket.com/`, titled "Real human insights | MindMarket" (language `en`). MindMarket is a market-research agency; the hero says "Real human insights" with the sub-line "One global partner", and the following copy reads "MindMarket delivers global quality market research through ... understand local cultures ... with the voices that matter ... faster business decisions with confidence." (part of the paragraph is covered by an illustration in the capture). A "Get a quote" button follows. Further down, the text "A few numbers behind the insights" introduces a statistics area, and a bright yellow footer with a rounded top closes the page.

The page opens on a floating white navigation bar with the MindMarket logo (a green squiggle mark plus wordmark), links Services, Methodology, Sectors, Strategy and Pricing (with chevrons on the dropdown ones), a round green menu button, and a separate white "Get a quote" card with a blue round avatar. The hero is a flat lime field with the headline in near-black, a hand-drawn flat illustration of a cheerful group of people in coral, yellow, lilac and blue clothes riding a lime blob, and a curved cream sheet that starts the content and rounds its top corners. Illustrations of a compass, paper planes and squiggles continue down the cream page.

The identity is friendly, flat and colorful: a lime green hero, cream paper, near-black text, a blue accent, coral and yellow in illustrations, and soft, large radii. Typography is a single sans (Inter) set very large and very tight.

## Colors

- `{colors.canvas}` #8ed462: the lime hero field, the brand's strongest color (area weight 3,696).
- `{colors.page-body}` #f5f1e4: the cream page that holds most content (area weight 14,990, the largest).
- `{colors.surface-3}` #e0dbce: a darker cream panel (2,575).
- `{colors.footer-bg}` #f5e211: the yellow footer (1,145).
- `{colors.ink-2}` #ffffff: white panels and nav (443) and text on dark.
- `{colors.ink}` #2c2e2a: nearly all text (2,374 characters).
- `{colors.ink-3}` #484e4699: translucent secondary text (166 characters).
- `{colors.ink-4}` #000000: the button label (90 characters).
- `{colors.primary}` #2ba0ff: the blue accent (89 characters of text; 4 area-weight as a background, the avatar in the capture). It is the only saturated interface blue; there is no filled primary button measured.

A coral (#ff705d, area weight 150) is also measured as a background in the illustrations; it has no component use and is not tokenized. Cookie consent library variables (`--cc-*`) are also present and are not brand tokens.

## Typography

One family, `Inter`, weights 400 and 500 loaded, with 500 on 2,893 characters and 400 on 9. The site loads the font itself.

Tokens: `{typography.display}` Inter 124.16px, weight 500, line-height 117.952px, letter-spacing -7.4496px (the hero h1); `{typography.display-mobile}` 66.9114px/63.5658px with -4.01468px; `{typography.heading}` 29.5864px/35.5037px with -1.77519px; `{typography.nav}` 17px/25.5px; `{typography.link}` 18.0225px/27.0337px. Desktop sizes by characters: 20.1668px (1,020), 18.0225px (583), 17px (526), 29.5864px (489), 14.7932px, 52.4729px, 124.16px (68). Tracking is about -6% of the size on the display and heading (7.4496 on 124.16 and 1.77519 on 29.5864), and the nav and link roles have no letter-spacing.

## Layout

A full-width hero band in lime sits above a cream content sheet whose top corners are rounded (`50px 50px 0 0` appears once in the radii list). The nav is a floating white bar inset from the top and sides, with a separate pill-like "Get a quote" card at the right. Content blocks are left-aligned at a left margin equal to the nav bar's left edge, and illustrations float over section boundaries (the group illustration straddles the lime and cream areas). The footer is a yellow panel with a rounded top (and, per the radii list, a `0 0 50px 50px` bottom) and padding of 134.043px top and 38.25px bottom.

The spacing tokens are fractional because the page scales with the viewport: `{spacing.s1}` 4.25px, 6.38px, 8.5px, 10.54px, 10.63px, 12.75px, 12.8px, 17px, 20px and `{spacing.s10}` 21.25px. Most common paddings: 21.25px (92), 17px (89), 10.625px (37), 6.375px (13).

## Elevation & Depth

No box shadows were measured. Separation is by flat color fields (lime, cream, darker cream, yellow, white) and by large radii. The white nav and card panels read as raised only because of their contrast against the lime and cream. A `clip-path: inset(0px round 10px)` is recorded on the Get a quote button, and an identity `transform` matrix on the nav; no motion was recorded.

## Shapes

Radii by frequency: 100% (55; circles and blobs), 63.75px (44), 25.5px (13), 50px (12), 10px (9), 20px (4), and two one-offs for rounded sheet edges. Tokens: `{rounded.pill}` 9999px (circles), `{rounded.xl}` 63.75px, `{rounded.md}` 25.5px, `{rounded.lg}` 50px for large panels, the footer and cards, `{rounded.xs}` 10px for buttons, `{rounded.sm}` 20px. The illustrated lime blob and round menu button reinforce the round, soft language.

## Components

- **Get a quote button** (`button-secondary`): 68px tall on desktop, 10.625px padding, 10px radius (applied through `clip-path: inset(0 round 10px)`), 1px solid border, black label in `{typography.link}` 18.0225px/500; in the capture it is white with a round green arrow chip. It is the only button detected, and it is a secondary-style control; no filled primary button exists in the measurement.
- **Link** (`link`): `{colors.ink-4}` 18.0225px text, 10px radius, 10.625px padding.
- **Navigation** (`nav`, `nav-link`): white bar (`{colors.ink-2}`) with `{colors.ink}` links at 17px/25.5px weight 500; "Home" measured 30px tall.
- **Card** (`card`): white fill, 50px radius, 33.6746px padding, with text colored `{colors.primary}` in the measurement.
- **Footer** (`footer`): `{colors.footer-bg}` fill, `{colors.ink}` text, 50px radius, `134.043px 0 38.25px` padding.

## Design System Architecture

No public design system or brand guideline was found. The home page links include `/about-us` and a customer-led-strategy page; the about page returned no readable text when stripped of scripts, so it provided no brand guidance. The de-facto system is Tailwind (ring and inset-shadow variables, `--tw-*`), a cookie-consent library (`--cc-*`), a chevron icon width variable (`--icon-width-chevron-down-icon` 10px) and a viewport-scaled sizing approach, since all sizes are fractional pixel values. Colors are applied as a small set of flat fields rather than a published token system.

## Do's and Don'ts

- Do open on a flat lime `{colors.canvas}` hero and hand off to a cream `{colors.page-body}` sheet with large rounded top corners.
- Do set Inter weight 500 with strongly negative tracking on large type (`{typography.display}`).
- Do keep text in `{colors.ink}` and use `{colors.primary}` blue sparingly as an accent.
- Do close with a yellow `{colors.footer-bg}` footer.
- Don't add drop shadows; none were measured.
- Don't use small corner radii on large panels; panels use 50px or more.
- Don't treat the cookie banner or tracking script colors as brand.
- Don't declare a filled primary button; none was measured.

## Responsive Behavior

At 390px wide the h1 is 66.9114px/63.5658px (a 350px-wide, 152px-tall block), the h2 ("A few numbers behind the insights") 46.5918px/44.2622px, the lead paragraph 27.017px/32.4204px (292px tall), and the navigation block 16.0767px/24.1151px weight 500 (205px tall). Character-weighted sizes at 390px: 18.6261px (891), 16.0767px (528), 16.1518px (449), 24.4121px (362), 27.017px (238), 12.2061px (136), 66.9114px (49). Layout reflow and the menu behavior beyond these values were not measured.

## Iteration Guide

1. Build the hero on `{colors.canvas}` with a `{typography.display}` headline, then a cream sheet in `{colors.page-body}`.
2. Use `{rounded.lg}` for panels and the footer and `{rounded.xs}` for buttons.
3. Put white `{colors.ink-2}` navigation and card panels over the colored fields.
4. Scale all type and spacing by viewport width, keeping tracking at about -6% on display sizes.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=mindmarket --url=https://mindmarket.com/ --force --no-motion` before changing values.
