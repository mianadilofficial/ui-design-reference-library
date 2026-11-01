---
version: alpha
name: "Elevance Health"
category: "Healthcare & Wellness"
description: "Elevance Health, a US health company: white canvas, #231e33 ink, navy #1a3673 bands, blue #2861bb links and 24px-radius pill buttons, ElevanceSans regular 42px headings with Lato navigation."
colors:
  canvas: "#ffffff"
  page-largest: "#1a3673"
  ink: "#231e33"
  primary: "#ffffff"
  on-primary: "#2861bb"
  ink-4: "#0c7db6"
  ink-6: "#1e58aa"
  hairline: "#c3c3c3"
typography:
  display:
    fontFamily: ElevanceSans-regular, serif
    fontSize: 42px
    fontWeight: 400
    lineHeight: 46px
  display-mobile:
    fontFamily: ElevanceSans-regular, serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 34px
  heading:
    fontFamily: ElevanceSans-regular, serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 36px
  subheading:
    fontFamily: ElevanceSans-regular, serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: ElevanceSans-regular, serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: ElevanceSans-medium, serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
  nav:
    fontFamily: Lato, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
  link:
    fontFamily: ElevanceSans-medium, serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 24px
spacing:
  s1: 10px
  s2: 12px
  s3: 13px
  s4: 14px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 25px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 14px 32px
    height: 46px
  button-primary-hover:
    textColor: "{colors.page-largest}"
  button-secondary:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 46px
    boxShadow: rgba(0, 0, 0, 0.08) 0px 6px 12px 0px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-largest}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
---

# Elevance Health

## Overview

Elevance Health (https://www.elevancehealth.com/, page title "Elevance Health | Advancing Health Beyond Healthcare") is a US health company. The corporate site is an editorial front page, 4941px tall at 1280px, built around the brand idea of "elevate and advance". The capture opens on a white header 120px high with the two-line navy "Elevance Health" logo, small tracked menu items (Who We Are, Our Approach To Health, Research, Stories, Newsroom, Investors, each with a caret except Stories) and a search icon. Below is a deep navy hero (`#1a3673`) with the headline "Elevating Whole Health and Advancing Health Beyond Healthcare" in light white type, a supporting line, a white pill button "Learn More About Us", and, at the right, a photograph of a man in a helmet cropped into a large triangle, a recurring angular motif. A feedback tab sits on the right edge. A first capture of the page was obscured by a survey popup and a grey scrim from a third-party feedback tool; the figures here come from a re-measurement that hid it, and the popup is not brand UI.

A mission paragraph follows ("Elevance Health brings together the concepts of elevate and advance…"), then the heading "Ideas That Explore How to Elevate and Advance Health" and article cards. Two wide cards place a photograph on the left and text on the right in a thin-bordered white box: a small category label ("Elevance Health Impact"), a blue title ("From Payer to Partner: How We're Working to Make Healthcare Better"), a grey excerpt, italic blue topic links and a dated byline. Three narrower cards repeat the pattern vertically. A navy "News" band lists headlines with a white pill "View All News". A bright-blue illustrated banner shows a magnifying glass over silhouettes, followed by the "Consumer-Centered Health System" section, a feature story with a portrait photograph, a blue pill "Learn More" button and a pull quote in italic blue. The navy footer lists link columns and ends with "Where Health Can Go™".

Photography is warm and human: families, clinicians and patients in natural light. Copy is plain, benefit-led and sentence-case.

## Colors

The identity is navy and blue on white.

- Canvas `#ffffff` (1746 by area). `page-largest` `#1a3673` (1987 by area): the hero, the news band and the footer; the site's variable `--color-rgb-brand` is 26,54,115, the same value.
- Ink `#231e33` (`--color-rgb-gray-one`, 35,30,51): body text, the most-read colour (2342 characters).
- Link and action blue `#2861bb` (`on-primary`; the site's `--color-rgb-dviz-two` is 40,97,187): text of the white hero pill and the fill of the "Learn More" buttons; also 822 characters of link text. The hover colour of links and the white pill is the brand navy `#1a3673`.
- `ink-6` `#1e58aa` (`--color-apex-blue`, `--color-rgb-primary` 30,88,170) and a faint `#1e58aa0f` border on outlined buttons; `ink-4` `#0c7db6` (`--color-apex-cyan-text`), 413 characters, used for the pull quote and some links.
- `hairline` `#c3c3c3` (`--color-rgb-gray-seven`): card borders.
- `primary` `#ffffff`: the detected primary call-to-action is the white pill with blue text, so the generated `primary` is white and `on-primary` is blue.

The stylesheet also declares a wider system palette: brand tints (`brand-one` 106,151,223; `brand-two` 199,234,251; `brand-three` 178,235,234; `brand-four` 247,213,207), utility colours, data-visualisation colours (`dviz-one` to `dviz-ten`), alerts (error 210,10,60; success 59,178,115; warning 242,188,53; info 36,83,166) and apex colours such as `#118ad7`, `#20376f` and `#d04348`. Those were declared and not measured on screen.

## Typography

The proprietary family ElevanceSans is loaded in regular, italic regular, medium, italic medium and semibold cuts, with Lato (400 and 700) for the navigation links and an icon font (`fwc-motif-icons`). ElevanceSans-regular covers 3701 measured characters, medium 769, italic medium 411, italic regular 37, semi 12. The generated tokens give the family a generic `serif` fallback as the site declares it; the measured outlines are sans-serif. A public substitute was not researched.

- `display`: ElevanceSans regular 42px/46px (hero h1, white); mobile 28px/34px.
- `heading`: 32px/36px (h2 "Ideas That Explore…", navy).
- `subheading`: 24px/28px (h3 story titles).
- `body`: 18px/24px, colour `#231e33` (2124 characters at 18px).
- `button`: ElevanceSans medium 16px/22px, weight 500.
- `link`: medium 18px/24px, blue.
- `nav`: Lato 700 16px/22px for nav-link anchors; the menu text in the header itself measured 14px/15px medium with 1px letter-spacing (1887 characters at 14px).

Weights are light-touch: 400 (3381 characters), 500 (1517) and 700 (40). The site sets very large headings in regular weight, so hierarchy is size and colour, not boldness.

## Layout

The header is 120px high. Content blocks have widths such as 552px for the hero headline, 647px for body paragraphs and 822px for the h2 block. Article cards are boxed with a thin border; wide cards put the image at left and text at right, and three narrow cards sit in a row. The unit is `--fwcu: 8px`; `--default-font-size` is 16px (2 units) and `--small-font-size` 12px (1.5 units). Paddings are mostly 12px (24 instances) and 10px (18), with 20px, 24px and 25px. The footer is 677px tall.

## Elevation & Depth

Elevation is minimal: one soft shadow, `rgba(0, 0, 0, 0.08) 0px 6px 12px 0px`, measured twice, on the filled blue "Learn More" button. Cards rely on `#c3c3c3` borders and white fill rather than shadows. The hero's depth comes from the navy field and the angular photograph crop.

## Shapes

Buttons are fully rounded pills: 24px radius (4 instances, `xs`) on 46px-high buttons. Cards, photos and boxes are square-cornered (the only other radius, `0px 0px 3px 3px`, is a one-off). A triangle crop is used on the hero photograph. The site variable `--border-radius` references `--fwcu` (8px) but the measured elements use 24px.

## Components

- White pill button: ElevanceSans medium 16px, `#2861bb` text on white, 24px radius, padding 14px 32px, 46px high ("Learn More About Us", 216px wide); on hover the text turns `#1a3673`.
- Blue pill button: `#2861bb` fill, white text, 24px radius, padding 12px 24px, 46px high, shadow `0 6px 12px` at 8% black.
- Outlined pill: white fill, blue text, `2px solid #1e58aa0f`, padding 13px 22px, 40px high ("View All News").
- Text link: medium 18px blue `#2861bb`, navy on hover.
- Article card: white, 1px grey border, category label, blue title, grey excerpt, italic blue topic links, date.
- Navigation: white bar, navy menu text with 1px tracking, caret icons.
- Footer: `#1a3673` with white text and link columns.

## Design System Architecture

No public design-system documentation or brand-guideline link was found on the measured page. The CSS exposes a structured token set in 92 root variables: `--color-rgb-*` triplets for brand, grey, utility, alert and data-visualisation groups, named `--color-apex-*` colours, `--fwcu: 8px` as the spacing unit, `--default-font-size`, `--small-font-size`, `--default-mobile-font-size` (14px), `--font-sans-serif: "Lato"` and `--font-serif: "Bitter"`. Source: root variables in the extraction of https://www.elevancehealth.com/.

## Do's and Don'ts

Do:
- Use navy `#1a3673` for large fields and `#2861bb` for links and filled buttons.
- Set headings in regular weight at large sizes (42px, 32px, 24px).
- Use 24px pill buttons, 46px high, with medium 16px labels.
- Put people photography in square-cornered frames or triangular crops.
- Keep body text in `#231e33` at 18px/24px.

Don't:
- Do not use the feedback-popup styling or scrim as brand UI.
- Do not add heavy shadows; one soft shadow is the maximum measured.
- Do not use bold headings; regular weight is the measured norm.
- Do not round cards.

## Responsive Behavior

At 390px the extraction measured: h1 28px/34px (302px wide), h2 24px/28px (374px wide), body 16px (the first mobile body size), and sizes 16px (2003 characters), 14px (1557), 20px (398), 18px (329), 24px (122), 12px (84) and 28px. The stylesheet declares a mobile default font size of 14px. Menu behaviour, card stacking and breakpoint widths were not measured.

## Iteration Guide

1. White canvas, `#231e33` text, navy `#1a3673` bands, blue `#2861bb` actions.
2. ElevanceSans regular 42/32/24/18px; medium 16px for buttons.
3. 24px-radius pills; square cards with `#c3c3c3` borders.
4. Photography of people with a triangular crop on the hero.
5. Run `node web/scripts/verify-designs.mjs --slug=elevance-health`.
