---
version: alpha
name: KONAMI GROUP CORPORATION
category: "Gaming"
description: "KONAMI Group Corporation (konami.com/en) is a flat, square-cornered Japanese corporate portal: white canvas, #333333 text, a #b60014 red Konami logo and heading bars, a #777777 grey navigation strip and UD Gothic typefaces at 14.4px body."
colors:
  canvas: "#ffffff"
  page-largest: "#d1d1d1"
  ink: "#333333"
  primary: "#b60014"
  surface-nav-grey: "#777777"
  ink-nav: "#555555"
  ink-meta: "#666666"
  ink-disabled: "#a0a0a0"
  hairline: "#cccccc"
  button-secondary-border: "#aaaaaa"
typography:
  display:
    fontFamily: "\"I-OTF-UDゴ本文Pro B\", \"I-OTF-UDゴ表示Pro B{pm}\""
    fontSize: 28.8px
    fontWeight: 700
    lineHeight: 22.4px
  subheading:
    fontFamily: "\"I-OTF-UDゴ本文Pro B\", \"I-OTF-UDゴ表示Pro B{pm}\""
    fontSize: 17.28px
    fontWeight: 700
    lineHeight: 22.4px
  body:
    fontFamily: "\"I-OTF-UDゴ本文Pro R\", \"I-OTF-UDゴ表示Pro R\", メイリオ, Meiryo"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 22.4px
rounded:
  none: 0px
spacing:
  s1: 3px
  s2: 4.32px
  s3: 7.2px
  s4: 8px
  s5: 11.52px
  s6: 14.4px
  s7: 20px
  s8: 25px
  s9: 40px
components:
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    height: 50px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The KONAMI Group Corporation English site (https://www.konami.com/en/, title "KONAMI - KONAMI GROUP CORPORATION") is an investor- and press-oriented corporate hub, not a game storefront. The header is a white strip with the red KONAMI wordmark, the legend "KONAMI GROUP CORPORATION", a Japanese/English language switch, a mail icon, a search icon and a "KONAMI SITES" button. Beneath it a grey navigation strip carries a home icon and the items About KONAMI, Investor Relations, News, Sustainability, Career Information and Group Companies, separated by thin vertical rules. A framed hero carousel shows a promotional key visual (in the capture, casino cabinets with a "SOLSTICE" logo) with row of round pager dots, followed by four outlined boxes linking to group companies (Konami Digital Entertainment Co., Ltd.; Konami Arcade Games Co., Ltd.; Konami Gaming, Inc.; Konami Sports Co., Ltd.).

The body is a sequence of sections with a short red vertical bar before each heading: "Important Notice", "Notice" and "Updated Information [News List]". Notices are a date, a grey label tag with the company name and a one-line headline. News appears as three bordered cards with an image, a grey company caption bar, a date line with "News Release" and a headline. The footer is a grey block with an X (Twitter) icon and five link columns, then a row of legal links (Contact US, Term of use, Privacy Notice, Privacy Policy, Cookies Settings) and "©2026 KONAMI". A red square back-to-top control floats at the right of the capture and is not documented as brand UI.

## Colors

The palette is restrained: white #ffffff canvas, dark grey #333333 text, #555555 for navigation and body copy in the header, #666666 for meta text and #a0a0a0 for disabled or placeholder text. The single brand accent is Konami red #b60014, used for the wordmark and the vertical bars before section headings. Grey structure colors are #777777 (the navigation strip and caption bars) and #d1d1d1 (the largest non-white background area), with borders in #cccccc and #aaaaaa (the outlined group-company and language buttons; also the mobile "Contact US" fill). The shipped page exposes no CSS root variables (the extraction found none), so these values come from computed styles only.

## Typography

Japanese UD Gothic faces named "I-OTF-UDゴ本文Pro R" (regular) and "I-OTF-UDゴ本文Pro B" / "I-OTF-UDゴ表示Pro B{pm}" (bold) set all text, with メイリオ (Meiryo) as the regular-weight fallback; a font named fpbf_ac93d8111 is also loaded. Measured roles: the h1 "KONAMI GROUP CORPORATION" is bold 28.8px (white, used in a hidden or image-based banner context; the mobile pass shows 28.8px/20.16px), section headings such as "Important Notice" are bold 17.28px/22.4px in #333333, body text is regular 14.4px/22.4px, header navigation is 12.96px/22.4px in #555555, and footer headings are bold 11.952px.

## Layout

The page is 1280px wide and 1980px tall: shorter than most corporate home pages. A centered container holds the hero, group-company boxes and content; the container width is not measured (the extraction records no root max-width variable). The group-company links are a four-column row, news cards a three-column row, and the footer five columns. Spacing steps measured: 3px, 4.32px, 7.2px, 8px, 11.52px, 14.4px, 20px, 25px and 40px; the group-company and language buttons are 50px and 30px tall respectively.

## Elevation & Depth

No box shadows and no radii were measured. Hierarchy comes from thin #cccccc rules under section headings, 1px borders on cards, grey caption bars and a grey footer block. The page is entirely flat.

## Shapes

The extraction's border-radius list is empty: every rendered element computes a 0px radius. Buttons, cards, tags, language switches and images are all rectangles; only the pager dots in the hero look round in the capture, but they were not recorded as radii.

## Components

- Group-company button: white fill, #aaaaaa 1px border, #333333 regular 14.4px text, 50px tall, square.
- Language switch: small boxed "Japanese" and "English" buttons with #cccccc border, 30px tall; a hover measurement exists for the "Japanese" link (white fill and #cccccc border before hover).
- Navigation strip: #777777 fill, white items, thin vertical dividers, home icon at the far left.
- Section heading: bold 17.28px #333333 text with a short #b60014 vertical bar at the left and a #cccccc underline running to the right.
- Notice row: bold small date, grey label tag (white text on #777777) naming the company, small "Notice" word, and a one-line headline in regular text.
- News card: 1px grey border, image on top, #777777 caption bar with white company name, date, "News Release" at right, headline.
- Footer: #d1d1d1 background, bold column heads and bulleted links, plus an X icon box in black.

## Design System Architecture

No public design system, brand-guideline or token package was opened for this document, and the page exposes no CSS variables. The visible system is a fixed, table-like corporate layout built from boxes with thin borders and grey bars, in the Japanese UD Gothic font family, with Konami red reserved for the logo and section markers.

## Do's and Don'ts

Do keep every element square, use #333333 on white for text, mark section headings with a short red vertical bar, and use grey bars for captions and navigation. Do use the UD Gothic faces for Japanese and Latin text alike.

Don't introduce rounded corners, shadows or gradients. Don't use red for large fills; it is limited to the logo and the heading bars. Don't document the floating back-to-top button as a brand component. Don't use more than the measured text sizes: 11.952px, 12.96px, 14.4px, 17.28px and 28.8px.

## Responsive Behavior

The mobile pass (390px) measured the h1 at bold 28.8px with a 20.16px line height, body text at regular 14.4px/20.16px, and a "Contact US" link with #aaaaaa fill, white 900-weight 14.4px text and a 0px radius. Navigation collapse, column counts and breakpoints were not measured.

## Iteration Guide

1. White page, #333333 text, UD Gothic at 14.4px/22.4px, headings in bold 17.28px.
2. Use #b60014 only for the wordmark and heading bars; #777777 for navigation and caption bars; #d1d1d1 for the footer.
3. Build every control as a square box with a 1px #aaaaaa or #cccccc border.
4. Present news as bordered cards with a grey caption bar naming the group company.
5. Keep the page flat: no radius, no shadow.

## Additional Notes

The page reads like a printed annual-report cover turned into HTML. Content density is high but orderly: every section begins with the same short red bar, every list row begins with a date, and every card names the group company that issued it, so that the reader can tell Konami Digital Entertainment, Arcade Games, Gaming and Sports apart at a glance. The hero carousel is the only place where saturated color, illustration and game artwork enter the page; the rest of the surface stays in grey, white and a single red. Imagery on news cards mixes product screenshots, a photograph of a corporate building with an overlaid "Digital Entertainment" title and a sponsor lockup that pairs the Konami wordmark with a partner logo. Copy is formal press-release English ("To Release FY2027 2nd Quarter Financial Results", "Announcing Official Personnel Change"). The text stack has no letter-spacing adjustments and uses normal line heights of 22.4px for body copy, which suits mixed Japanese and Latin text.
