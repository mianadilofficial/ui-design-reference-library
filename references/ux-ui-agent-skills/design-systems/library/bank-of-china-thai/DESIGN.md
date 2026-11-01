---
version: alpha
name: Bank of China (Thai)
category: "Thai Brands"
description: "Bank of China (Thai) Public Company Limited homepage at bankofchina.co.th: white canvas with Helvetica Neue at 13.5px dense body and 16.5px bold headings, #333333 ink, Bank of China red #b6002a with #990000 headings and #d00024 card rules, pale blue-grey #d2dadd menu bands, and square corners."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  ink-muted: "#666666"
  ink-faint: "#999999"
  primary: "#b6002a"
  red-heading: "#990000"
  red-rule: "#d00024"
  red-badge: "#aa0000"
  surface-light: "#f1f1f3"
  surface-grey: "#cccccc"
  surface-nav: "#d2dadd"
  surface-nav-light: "#d9e5ed"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, \"Microsoft Jhenghei\", sans-serif"
    fontSize: 16.5px
    fontWeight: 700
  body:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, \"Microsoft Jhenghei\", sans-serif"
    fontSize: 15px
    fontWeight: 400
  body-dense:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, \"Microsoft Jhenghei\", sans-serif"
    fontSize: 13.5px
    fontWeight: 400
  input:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
rounded:
  square: 0px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 20px
  s10: 25px
components:
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.red-rule}"
    boxShadow: rgb(153, 153, 153) 0px 0px 10px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 0px 6px 0px 5px
    height: 25px
---

## Overview

This design file describes the real Bank of China (Thai) Public Company Limited website at https://www.bankofchina.co.th/en-th/home.html. The URL originally queued for this brand, https://www.bankofchina.com/th/en/, only shows a 2019 notice page saying that, from 1 February 2019, the bank's website moved to www.bankofchina.co.th; that notice page (a short yellow-tinted page in Verdana) is not the brand's site, so the measured page is the new address, which the notice itself names. The extraction was therefore re-run on the new site.

The homepage is a corporate banking portal: a white header with the Bank of China logo (a red circular coin-and-"中" mark with "BANK OF CHINA") on the left and a small utility group on the right (About Us, Contact Us, Branches, language links 简体 and ภาษาไทย, and A A A text-size controls), a pale blue-grey menu band with five items (Wealth Management, Corporate Banking, Personal Banking, Information, Self Service), a deep-navy hero slider carrying Thai anti-fraud messaging, a tabbed news strip ("Important News", "What's New", "Security Tips", "Privacy Notice"), and a grid of white cards with red top rules, each listing short news headlines and ending with a red "More" tab. A sitemap toggle and a grey footer with Privacy Policy and Terms of Use links close the page. The tone is formal, text-heavy and security-conscious.

An online-login panel overlaps the hero's left edge in the capture; it is a login control and not a brand component.

## Colors

All values are measured from the live extraction.

- **canvas #ffffff** (largest background by area) with **surface-light #f1f1f3** for subdued blocks and **surface-grey #cccccc** for the larger grey areas.
- **ink #333333** is the dominant text colour (about 1,980 characters); **ink-muted #666666** (98 characters) and **ink-faint #999999** (38) are for captions and inactive tabs such as "What's New".
- **primary #b6002a** is the Bank of China red. It was detected as the most saturated measured action or link colour (12 characters of text), and it matches the red logo and the red "More" tabs in the capture. **red-heading #990000** colours the "Important News" card headings and H1 (77 characters), **red-rule #d00024** is the card top-border colour (6 borders), and **red-badge #aa0000** fills small red tabs (8 area units).
- **surface-nav #d2dadd** and **surface-nav-light #d9e5ed** are the pale blue-grey menu and tab bands (177 and 83 area units).
- **text-input-text #000000** is the colour in form fields.

Notes: a hero navy and a gold in the banner image are artwork, not tokens. The earlier notice page's Verdana, #336699 and #fefde8 styling is a different, retired page and not part of this system.

## Typography

The family is **"Helvetica Neue", Helvetica, Arial, "Microsoft Jhenghei", sans-serif**, with the Chinese system font Microsoft JhengHei in the stack for Chinese text. No web fonts are loaded; the face is whichever system font resolves. Measured sizes by character count: 13.5px (1,793 characters, the working size), 13px, 16.5px (77, headings), 12px, 14.4px, 16px, 15px and 14px. The H1 and card headings are 16.5px bold; the body role measures 15px regular; form fields use Arial 12px. Weights are 400 (about 1,950 characters) and 700 (about 280). The hierarchy is extremely flat: headings are only a few pixels larger than body text, separated by weight and the red colour.

## Layout

The page is 1280px wide and 1,150px tall in the extraction. Measured paddings are 10px (37 uses), 25px (10), 15px (6) and 5px (4); the extraction does not say which element each belongs to. The layout stacks the header, the menu band, the hero slider (which fills the width), the news tab strip with a teal-and-red arrow marker on a left vertical line, and then a first row of four cards and a second row of two cards, followed by the sitemap toggle and footer. Density is high and left-aligned; whitespace is concentrated between rows, not inside lists.

## Elevation & Depth

The cards carry a uniform grey halo, `rgb(153, 153, 153) 0px 0px 10px 0px` (6 uses), rather than a directional drop shadow, so they appear lifted evenly on the white page. Beyond that, depth comes from the colour blocks (menu band, navy hero) and from the diagonal, folded red corners on the "More" tabs.

## Shapes

No border radius was measured on this site (the body role reports 0px and the radius list is empty), and the capture agrees: cards, menu bands, tabs and form fields are square. The only non-rectangular shapes are the diagonal cut on the "More" tabs and the triangular tab markers beside the news headings. Red top rules on cards are a defining shape device.

## Components

- **News card**: white fill, a red top rule in #d00024, the halo shadow, a red 16.5px bold title, a bulleted list of 13.5px headlines in #333333, and a red "More" tab with a chevron at the bottom right.
- **Menu band**: pale blue-grey #d2dadd with bold dark labels separated by thin vertical rules; Wealth Management, Corporate Banking and Personal Banking sit on the first row.
- **Tab strip**: coloured triangle markers (red, orange, teal, plum) beside the labels, with inactive labels in #999999.
- **Text input**: white, #000000 text, Arial 12px, 25px tall, padding 0 6px 0 5px.
- **Logo**: red circular mark plus the bilingual name.
The page does not present a conventional filled primary button in the measured area, so no button token is declared.

## Design System Architecture

No public design system or brand guideline was found on the pages opened. Stylesheets are served from `/etc/designs/boc_southeastasia_web/clientlibs_desktop.css` and from component libraries under `/apps/boc_southeastasia_web/components/` (navlogin, ir_fin_notice, paragraph, simple-slideshow, cardboard and others), according to the stylesheet links in the homepage HTML. There are no CSS custom properties (zero root variables), so values are literal. The de-facto system is therefore component-by-component: one red family, grey and blue-grey bands, a system sans at 13.5px and a card with a red rule and halo shadow.

## Do's and Don'ts

- Do keep the red family: #b6002a for identity, #990000 for headings, #d00024 for rules.
- Do keep corners square and use the even grey halo for cards.
- Do keep copy formal and short, list headlines with a bullet and a "More" tab.
- Do use pale blue-grey #d2dadd for menu bands.
- Don't add rounded corners or gradients to cards.
- Don't use the old notice page's Verdana and cream background.
- Don't treat the login overlay or hero artwork as brand tokens.
- Don't enlarge headings much beyond body size; the flat scale is part of the look.

## Responsive Behavior

The mobile extraction reports the same family with the H1 at 16.5px and body at 15px. The stylesheet list names a desktop client library (`clientlibs_desktop.css`), which implies separate styling for other viewports, but no mobile layout was measured or opened, so breakpoint behaviour is not documented here.

## Iteration Guide

1. Start from a white canvas, #333333 text and the Helvetica Neue stack at 13.5px.
2. Colour headings #990000 at 16.5px bold; reserve #b6002a for identity marks.
3. Build cards with a #d00024 top rule, square corners and a 10px grey halo.
4. Use #d2dadd bands for menus and #f1f1f3 for quiet blocks.
5. Keep spacing to 5, 10, 15, 20 and 25px.
6. Re-extract the page after campaign changes; the hero rotates but the card system stays constant.
