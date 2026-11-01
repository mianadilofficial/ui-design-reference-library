---
version: alpha
name: "Roche"
category: "Pharma"
description: "Roche corporate site: white canvas with black ink, Roche blue #0b41cd square-cornered buttons (56px high, 18px roche-sans), a light-weight 200 roche-sans at 40px for headlines, roche-serif pull quotes, warm grey #544f4f secondary text and #022366 hover."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0b41cd"
  on-primary: "#ffffff"
  surface-3: "#9d948e"
  ink-2: "#544f4f"
  ink-5: "#21201f"
  ink-6: "#706b69"
  primary-hover: "#022366"
typography:
  display:
    fontFamily: roche-sans
    fontSize: 40px
    fontWeight: 200
    lineHeight: 48px
  display-mobile:
    fontFamily: roche-sans
    fontSize: 30px
    fontWeight: 200
    lineHeight: 36px
  subheading:
    fontFamily: roche-sans
    fontSize: 16px
    fontWeight: 200
    lineHeight: 22px
  body:
    fontFamily: roche-sans
    fontSize: 20px
    fontWeight: 200
    lineHeight: 32px
  button:
    fontFamily: roche-sans
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px 24px
    height: 56px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 15px 24px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink-2}"
    rounded: "{rounded.none}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  footer:
    textColor: "{colors.ink-2}"
    rounded: "{rounded.none}"
    padding: 0px 0px 48px
    borderColor: "{colors.primary}"
---

## Overview

Roche (title "Roche - Doing now what patients need next", roche.com) is the global healthcare group. The capture shows a white header with the hexagonal Roche logo, utility links (Stories, Careers, Contact, a globe icon and search) and a second line of primary links (About Roche, Solutions, Innovation, Investors, Media). The hero is a split panel with a soft peach gradient: the headline "Doing now what patients need next", the sentence "Pioneering diagnostics and pharma to create a healthier future for everyone", a blue "Read our story" button and an outlined "About Roche" button, beside a candid photograph of a family around a table outdoors.

Below, the page follows a corporate-communication rhythm: "In the spotlight" (linked news items such as "Roche publishes its half year results for 2026" with a report that sales grew +6% at constant exchange rates, and a quote in serif from the CEO), "Investor information" (a share price of 352.70 CHF with a daily change, and three bordered cards: Sales by HY 2026 CHF 30.4 billion, Dividend Yield for FY 2025 3.2%, Next Report 22 October 2026), "We are Roche" with a mission paragraph and an athlete-style portrait, and "Our mission in action" with photo cards. The voice is plain, factual and humane: full sentences, numbers stated exactly, patients at the centre. Web research was unavailable (see SOURCES.json); this document comes from the extraction and capture.

## Colors

- canvas #ffffff is the page background (area weight 857); ink #000000 is the main text (2583 characters).
- primary #0b41cd is Roche blue: fill of the filled buttons (white on-primary text) and the colour of outlined buttons, links and 1px borders (borders 12 uses); the site variable is --color-roche-blue-600. primary-hover #022366 is the measured hover fill.
- ink-2 #544f4f (1200 characters) is the warm dark grey for navigation and secondary text; ink-5 #21201f (194) and ink-6 #706b69 (22) are further warm greys.
- surface-3 #9d948e is a warm grey measured in 3 borders (area weight 0). The border colour #dbd6d1 (6 uses; --color-roche-grey-300) outlines cards.

The root variables also list functional colours, such as --color-status--warning #ffd60c, --color-light-orange #ffbd69, --color-alert-info #d7e0f7, --color-grey-200 #eae8e5 and --color-divider--footer #052066, which were not measured on rendered interface elements of the home page; they are not declared as tokens.

## Typography

roche-sans carries 4503 characters and roche-serif 201 characters. roche-sans is loaded in weights 200, 400, 600 and 800; roche-serif in weight 200.

- display: roche-sans 40px, weight 200, line-height 48px (mobile 30px, line-height 36px).
- body: roche-sans 20px, weight 200, line-height 32px.
- subheading: roche-sans 16px, weight 200, line-height 22px.
- button: roche-sans 18px, weight 400, line-height 23px; navigation uses the same 18px at weight 400 with a 29px line-height.

Sizes by characters: 20px (2622), 18px (582), 14px (408), 24px (314), 16px (306), 40px (247), 28px (201), 30px and 48px (12 each). The 28px size is the serif pull quote. The thin weight 200 for headings and body is the brand's most distinctive typographic trait. These are proprietary Roche faces; no fallback stack was reported by the extraction.

## Layout

The page is 1280px wide and 5794px tall. The header height variable is 160px. Content uses a consistent left margin shared by logo, links and section titles; hero and feature blocks are two columns (copy left, photograph right); the investor row is three equal cards plus a share-price block; mission cards sit in a three-column grid. Spacing tokens: 2px, 4px, 5px, 8px, 12px, 15px, 16px, 24px, 32px, 40px; buttons use 16px 24px padding at 56px height, and the footer pads 48px at the bottom.

## Elevation & Depth

Two shadow recipes were measured: rgba(0, 0, 0, 0.11) 0px 2px 4px 0px combined with rgba(0, 0, 0, 0.32) 0px 0px 1px 0px (3 elements, the investor cards) and rgba(0, 0, 0, 0.1) 0px 0px 10px 0px (1 element). In the capture, investor cards add a blue left edge as an accent; the hero uses a peach gradient wash; alternating bands switch between white and a warm light grey.

## Shapes

Geometry is square. Buttons, links, cards and navigation compute 0px radius; the only radius measured is 50% on one element (the CEO portrait avatar). Tokens: none 0px and pill 9999px (generated for circular elements).

## Components

- Primary button ("Read our story", "Explore Careers"): #0b41cd fill, white roche-sans 18px weight 400, 0px radius, padding 16px 24px, height 56px; hover fill #022366.
- Outlined button ("About Roche", "Visit Media center", "Visit Investor center"): transparent, #0b41cd text, 1px #0b41cd border, padding 15px 24px, often with a trailing arrow icon.
- Navigation: roche-sans 18px weight 400 in #544f4f; a separator line divides company links from Investors and Media.
- Text link with marker: blue underlined link prefixed by a small triangle marker (news items).
- Investor card: white, soft shadow, blue left edge, label, large figure, a rule and a small outlined button.
- Pull quote: roche-serif 28px with an attributed avatar, name and role.
- Footer: #544f4f text with a blue rule (--color-divider--footer is #052066).

## Design System Architecture

No public design system or brand guideline was opened. The stylesheet exposes a named token set in CSS custom properties: colours with numeric ramps (--color-roche-blue-600, --color-roche-grey-300, --color-grey-200, --color-black-900, --color-white-800 hsla(0,0%,100%,.2)), status colours (--color-status--warning, --color-alert-info), layout (--header-height 160px) and responsive type variables with a "small-up" and "xlarge-up" suffix (--body-link--font-size--small-up 1.125rem, --body-small--font-size--small-up 1rem, --label-font-size-xlarge-up 1rem). A --bulma-control-border-width variable shows that the CSS builds on the Bulma framework.

## Do's and Don'ts

Do:
- Use Roche blue #0b41cd for the single primary action and for outlined secondary actions.
- Set headlines and body in roche-sans weight 200; reserve 400 for buttons and navigation.
- Keep corners square and give cards a soft, low-opacity shadow.
- State figures precisely with units and dates.

Don't:
- Do not use rounded buttons; 0px radius was measured.
- Do not use heavy weights for headlines.
- Do not use the status colours (yellow, orange) as brand accents.
- Do not use the hover navy #022366 as a resting colour.

## Responsive Behavior

On the 390px mobile pass the display size is 30px (desktop 40px) with line-height 36px. The mobile size distribution is 18px (3204 characters), 14px (598), 24px (515), 30px (247), 16px (116), 28px (12) and 40px (12): the body text steps from 20px to 18px. Breakpoints and layout changes were not measured.

## Iteration Guide

1. Start with {colors.canvas} and {colors.ink}; use {colors.ink-2} for navigation.
2. Use {components.button-primary} for the main action and an outlined twin for secondary.
3. Headlines in {typography.display}; paragraphs in {typography.body}.
4. Keep {rounded.none}; add the 0.11 alpha card shadow for raised cards.
5. Validate with `node web/scripts/verify-designs.mjs --slug=roche`.

## Content and imagery

Imagery is human and documentary: a multi-generational family meal outdoors in the hero, a researcher with a microscope, colleagues in conversation, and a smiling person in a wetsuit holding a board on a beach for the corporate-story block. Photographs are rectangular and uncropped by shapes. Text is dense but readable, with line-height 32px for 20px body. Corporate news is presented with linked titles and one-paragraph summaries, and the CEO quote is set in the serif face at a larger size to mark editorial voice. Numbers (sales growth, share price, dividend yield, next report date) are shown as large figures inside cards so that investors can scan them.
