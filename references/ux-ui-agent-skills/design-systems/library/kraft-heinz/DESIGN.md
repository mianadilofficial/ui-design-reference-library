---
version: alpha
name: The Kraft Heinz Company
category: "Food & Beverage"
description: "Kraft Heinz corporate site (kraftheinzcompany.com): white canvas, bright cyan #09afdc headings and outlined MORE buttons, navy #122a4e navigation, Gotham SSm sans with a 120px Gotham Condensed uppercase hero line, square-cornered buttons and a blue gradient footer."
colors:
  canvas: "#ffffff"
  ink: "#414141"
  primary: "#09afdc"
  ink-secondary: "#7a7a7a"
  ink-navy: "#122a4e"
  link: "#777777"
typography:
  display:
    fontFamily: "\"Gotham Cond SSm A\", \"Gotham Cond SSm B\""
    fontSize: 120px
    fontWeight: 600
    lineHeight: 100px
    letterSpacing: "-5.3472px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Gotham SSm A\", \"Gotham SSm B\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
    letterSpacing: "-1.06752px"
  body:
    fontFamily: "\"Gotham SSm A\", \"Gotham SSm B\""
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
    letterSpacing: "-0.70144px"
  nav:
    fontFamily: "\"Gotham SSm A\", \"Gotham SSm B\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: "\"Gotham SSm A\", \"Gotham SSm B\""
    fontSize: 12px
    fontWeight: 500
    lineHeight: 17.1429px
    textTransform: uppercase
rounded:
  xs: 4px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 15px
  s5: 40px
  s6: 45px
  s7: 118px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    padding: 8px 15px
    height: 35px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-navy}"
    rounded: "{rounded.xs}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.canvas}"
    padding: 0px 0px 30px
    borderColor: "{colors.canvas}"
---

## Overview

kraftheinzcompany.com is the corporate (not consumer-brand) site of The Kraft Heinz Company, title "The Kraft Heinz Company". The measured home page is 1280px wide and 1897px tall and is short and calm: a white header with the red-and-navy Kraft Heinz wordmark and five uppercase links (BRANDS, COMPANY, NEWSROOM, INVESTORS, CAREERS), a full-width photograph of a long outdoor dinner table, two photo-and-text teasers, a centered statement block ("A Platform for Performance"), a two-column list of investor and company links, and a deep-blue gradient footer.

The voice is corporate-warm. The hero line reads "FEEL GOOD FOOD FOR ALL"; teaser titles read "Beloved Global Brands" and "Bring Your Appetite For More"; the statement describes the company as "the third-largest food and beverage company in North America and the fifth-largest food and beverage company in the world, with eight $1 billion+ brands". Photography is people-first (a family around a table, a child holding a hot dog and a ketchup bottle) plus one flat cyan illustration ("DISRUPTERS, STEP FORWARD.").

The capture first showed a OneTrust-style cookie panel; the page was re-extracted per the task rules and the final capture shows only a small cookie icon on the left edge. Cookie controls are not brand UI and are not documented.

## Colors

- **Canvas #ffffff** is the page background (2240 area-weight in the clean extraction).
- **Cyan #09afdc** is the single accent: teaser headings ("Beloved Global Brands"), the "A Platform for Performance" headline, the "MORE" outlined buttons and their 1px border, and the small chevrons before list links.
- **Ink #414141** is the main body text color (367 characters), **#7a7a7a** is the paragraph color used for the statement and teaser paragraphs (372 characters, the most-read color), and **#777777** is the color of nav links and list links.
- **Navy #122a4e** colors the header navigation text (uppercase 13px items).
- The footer sits on a left-to-right gradient from rgb(11, 79, 170) to rgb(4, 27, 58), measured as the `background-image` of the body role; a bright cyan stripe separates content from the footer in the capture. Footer text and icons are white.

No semantic colors (error, success) were measured on this page.

## Typography

Two Gotham cuts, both with A/B web-font file pairs: **Gotham SSm** (400, 500 and 700 loaded) for text, and **Gotham Cond SSm** (600) for the hero.

- Display: Gotham Cond 600, uppercase, 120px on 100px line-height with a tight -5.3472px letter-spacing. White over the photograph.
- Section headline: 53px (26 characters measured) in the cyan accent; subheading 24px Gotham 700, line-height 26.4px, letter-spacing -1.06752px.
- Body: Gotham 500, 16px/22px, letter-spacing -0.70144px. Footer and legal links are 12px, 15px and 13.12px (the most used small sizes).
- Nav: header items are 13px, 500 weight, uppercase; list and link text is 18px/20px, weight 400.
- Button label: 12px, 500, uppercase, line-height 17.1429px.

Gotham is a licensed commercial typeface. If it cannot be loaded, a geometric sans such as Montserrat is a visual stand-in; that is a suggestion for reproduction, not something the site ships.

## Layout

The 1280px page centers a content column narrower than the full width: the teaser pair, statement and link list are centered with generous white space (118px and 45px paddings measured among the largest). The hero is full-bleed. The teasers sit in two equal columns, each stacking image, cyan title, paragraph and a MORE button, all center-aligned. The link list is a two-column list with chevron bullets. Measured paddings: 8px, 15px, 4px, 40px, 5px, 45px, 118px.

## Elevation & Depth

Shadows are rare and soft. The only measured shadows are `rgba(0, 0, 0, 0.2) 0px 4px 8px 0px` and `rgba(0, 0, 0, 0.5) 0px 0px 20px 0px`, each on a single element, so the page is effectively flat. Depth comes from photography, the cyan stripe above the footer and the gradient footer.

## Shapes

Measured border radii are 4px (one element, the nav container) and 100px (two elements, not brand buttons). The visible MORE buttons compute a 0px radius and are drawn as square outlined rectangles with a 1px #09afdc border; photographs are square. The single `rounded.xs` token (4px) belongs to the nav.

## Components

- **MORE button (secondary / outlined)**: transparent fill, 1px #09afdc border, #09afdc uppercase 12px label, 8px 15px padding, 35px tall, square corners. There is no filled primary button on this page.
- **Teaser**: image on top, 24px cyan title, 16px grey paragraph, then the outlined button, centered.
- **Navigation**: white bar, 13px uppercase navy labels, logo at left.
- **Link list**: 18px #777777 text with a small cyan chevron.
- **Footer**: gradient background, centered LinkedIn and X icons, a row of 12px white legal links separated by thin vertical rules, a copyright line ("© 2026 The Kraft Heinz Company. All rights reserved.") and the white wordmark.

## Imagery and Voice

Imagery carries the brand. The hero photograph shows a long table of adults and teenagers eating outdoors, with the headline set directly over the picture in white. The teaser row pairs a candid photograph with a flat cyan illustration, so the page alternates between documentary photography and graphic color. Text blocks are short: a one-line teaser title, two to four lines of paragraph and a single MORE button. The statement block is the only long paragraph. Link labels are plain nouns (Company Profile, Stock Information, Dividend History, Corporate Governance, SEC Filings, Events & Presentations, Investors FAQ), which tells you the page serves investors and press as much as consumers. The footer lists legal and compliance links in a single wrapped row, from Privacy Policy and User Agreement to Accessibility Assistance, Political Activity and the California Supply Chain Act notice.

## Design System Architecture

No public design system or token documentation was found. Pages opened: https://www.kraftheinzcompany.com/company.html (200, no brand or design-system section); `/brand`, `/about` and `/newsroom.html` returned 404 on this host. The site exposes no CSS custom properties on `:root` (the root-variable count is 0), so the de-facto system is plain class-based CSS using the Gotham font pairs listed above and a handful of repeated values (cyan #09afdc, navy #122a4e, greys #414141 / #7a7a7a / #777777).

## Do's and Don'ts

- Do use #09afdc for headlines on white, outlined buttons and chevrons, and keep paragraphs in #7a7a7a or #414141.
- Do set the hero in Gotham Condensed uppercase with the tight negative tracking listed.
- Do keep buttons square and outlined, 12px uppercase.
- Do center teasers and statements on white.
- Don't add a filled primary button: none was measured.
- Don't round the photographs or buttons.
- Don't present cookie-panel styling (navy filled buttons) as brand UI.
- Don't add shadows to cards: only two single-element shadows exist.

## Responsive Behavior

The 390px mobile pass measured: body 16px/22px, -0.70144px tracking; nav text 14px, 400 weight on a white bar with #333333 text; and a recorded h1 size of 120px (unchanged from desktop in the measurement) with 40px as the measured size for the large statement headline. Column counts, hamburger behavior and image reflow were not measured.

## Iteration Guide

1. Use the frontmatter tokens for every value.
2. New sections: white background, cyan headline, #7a7a7a paragraph, optional outlined MORE button.
3. Dark moments use the footer gradient (rgb(11, 79, 170) to rgb(4, 27, 58)) with white text.
4. Check any new value against `web/data/extracted/kraft-heinz.json`.
5. Re-run `node web/scripts/verify-designs.mjs --slug=kraft-heinz`.
