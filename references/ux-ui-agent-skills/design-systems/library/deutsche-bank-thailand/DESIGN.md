---
version: alpha
name: Deutsche Bank
category: "Thai Brands"
description: "Deutsche Bank Thailand country page on country.db.com: white canvas, black ink, action blue #0550d1 on outlined 2px-radius buttons and expand icons, deep navy #1e2a78 info cards and links, #16184e headline, the Deutsche Bank Text typeface at 16px body and 44px display."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0550d1"
  on-primary: "#ffffff"
  primary-hover-bg: "#e7f4fe"
  primary-hover-text: "#0d43b3"
  navy: "#1e2a78"
  navy-deep: "#16184e"
  ink-slate: "#425563"
  surface-light: "#f7f7f7"
  hairline: "#c1c6ce"
typography:
  display:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 29.008px
    fontWeight: 400
    lineHeight: 36px
  heading:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 35.88px
  subheading:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 27.94px
  body:
    fontFamily: "\"Deutsche Bank Text\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 24px
spacing:
  s1: 4px
  s2: 5.6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 42px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover-bg}"
    textColor: "{colors.primary-hover-text}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.navy}"
    typography: "{typography.subheading}"
    padding: 16px 80px 16px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-light}"
    textColor: "{colors.navy}"
---

## Overview

The measured site is https://country.db.com/thailand/, the Thailand country page of Deutsche Bank (page title "Home"; the headline reads "Deutsche Bank – a strong partner in Thailand"). Because it is the group's country microsite, the design file is named after the bank itself, Deutsche Bank, and describes the group web styling as it appears on this page.

The capture shows a clean, information-led layout. A white header carries the two-tone blue "Deutsche Bank Thailand" lockup at left, two text links (Deutsche Bank, Deutsche Bank in Asia Pacific) and the square logo emblem in a dark blue tile at right; a thin rule separates a second row of in-page navigation (a home icon, then Home, Company, Responsibility, Careers, 150 years in Asia Pacific, The Next 150 years, with the active item underlined). A full-width twilight photograph of the Bangkok skyline follows, then the H1 in deep navy with a one-sentence introduction about the bank's presence in Thailand. Under it, a left-hand accordion (Corporate Bank, Investment Bank, each with a blue square chevron button) sits beside a tabbed content area (Contacts, Exchange rates, Other Information) with plain address and phone text. The right column stacks navy information tiles: a scam warning, "Our legacy in Asia Pacific", and "Social media", each ending with a white outlined button, interleaved with partner logos (a deposit-protection badge).

The footer is a #f7f7f7 band with Imprint, Legal Resources and Cookies links and a "back to top" outlined button, which is a utility and not documented as a brand component. A floating "TH" language tab and a share tab at the right edge are also utilities.

## Colors

Everything below was measured on the page.

- **canvas #ffffff** is the page; **ink #000000** is the dominant text colour (about 850 characters).
- **primary #0550d1** is the action blue: it colours button labels and borders (the 2px-radius outlined buttons), the expand chevron squares in the accordion, the next arrow in the tab strip and about 175 characters of text. The generator originally recorded the white button fill as primary and the blue as on-primary; the blue is the true action colour and the tokens were swapped.
- **on-primary #ffffff** is the text on blue squares and on navy tiles (190 characters of white text).
- **primary-hover-bg #e7f4fe** and **primary-hover-text #0d43b3** are the button hover colours (a pale blue fill with a darker blue label).
- **navy #1e2a78** is the colour of the information tiles (about 114 area units), the link text (152 characters) and the footer text. **navy-deep #16184e** colours the H1 (44 characters).
- **ink-slate #425563** is a secondary grey-blue text (31 characters).
- **surface-light #f7f7f7** is the footer background; **hairline #c1c6ce** is the border colour and ring colour on the outlined buttons and dividers.

## Typography

One proprietary family, **Deutsche Bank Text**, loaded in a single regular weight, with Arial, Helvetica Neue and Helvetica as fallbacks; 61 characters were measured at weight 700, but only one font file is listed as loaded. Roles: display 44px / 48px (the H1; 29px / 36px on mobile), heading 26px / 35.88px (tile titles), subheading 22px / 27.94px (accordion links), body 16px / 24px. The size mix by character count is 16px (937), 26px (242), 22px (98), 14px (71), 12px (53), 44px (44). There is no letter-spacing adjustment. Use Arial or Helvetica Neue as a substitute when the licensed face is not available.

## Layout

The page is 1280px wide and 1,878px tall in the extraction. The header is two rows; the hero photograph runs full width; the main area is a three-zone grid: a narrow left accordion, a wider central content column, and a narrow right rail of navy tiles. Spacing values are on a 4px-based scale: 4, 8, 12, 16, 24, 32px (with 5.6px once), and 8px is both the dominant gap (10 uses) and the most common padding (12 uses). Tiles in the right rail stack vertically with equal gaps. Text blocks are left-aligned and tight; the focus is on readability of addresses and notices.

## Elevation & Depth

The page is flat. The only shadow measured is a 1.5px ring in the hairline colour, `rgb(193, 198, 206) 0px 0px 0px 1.5px` (2 uses), which works as an outline rather than a blur. No gradients or soft drop shadows were found; depth comes from solid navy tiles against white and the full-bleed photograph.

## Shapes

Corners are nearly square: the common radius is 2px (10 uses), on buttons and tiles, and a single 24px radius appears on one element. The blue chevron squares in the accordion and tab strip are square, and the logo emblem is a square tile. This keeps the page sharp and technical.

## Components

- **Outlined button**: white fill, 1px-style blue border (#0550d1), blue label in 16px Deutsche Bank Text, 2px radius, 12px horizontal padding, 40 to 42px tall; on hover the fill turns #e7f4fe and the label #0d43b3.
- **Navy info tile**: #1e2a78 fill, white 26px title, white outlined button at the bottom ("More information", "Learn more", "all channels").
- **Accordion row**: 22px navy link text with a bottom rule and a blue square toggle with a chevron.
- **Tab strip**: Contacts, Exchange rates, Other Information in 22px-scale text, the active tab black with an underline, plus a blue square next arrow.
- **Header**: logo lockup, text links, emblem tile; in-page nav row with an underlined active item.
- **Footer**: light grey with small navy links.

## Design System Architecture

No public design-system site or brand-guideline page was found on the pages opened. The page uses no CSS custom properties (zero root variables were measured), so values are literal in the stylesheet and the system is de-facto: one typeface in a regular weight, one action blue, one navy, black ink, a 4px-based spacing scale and 2px radii. For extension, define the blue, navy and hairline as tokens and reuse the outlined-button pattern.

## Do's and Don'ts

- Do use #0550d1 for action: outlined buttons, toggles and links, with the pale-blue hover.
- Do use navy #1e2a78 for information tiles and headings, with white text.
- Do keep corners at 2px, and keep surfaces flat.
- Do write clear factual copy with addresses and phone numbers in plain text.
- Don't use heavy shadows or large radii.
- Don't invent solid-blue buttons; every measured button is outlined (solid fills were not observed).
- Don't treat the floating language and share tabs or the back-to-top button as brand UI.
- Don't set text in another typeface when Deutsche Bank Text is available.
- Don't mix in additional accent hues such as the green and orange seen in the partner logos; they belong to those organisations, not to the bank's palette.

## Responsive Behavior

At 390px the extraction reports the H1 at 29.008px (36px line-height) and the body at 14px, against 44px and 16px on desktop. Other responsive behaviour such as how the three-zone grid collapses was not measured and is not documented here.

## Iteration Guide

Use these steps to extend the page consistently with what was measured.


1. Start with white, black text and the Deutsche Bank Text family at 16px / 24px.
2. Use #0550d1 for outlined buttons (2px radius, 42px high) and #e7f4fe on hover.
3. Use #1e2a78 tiles with white 26px titles for notices and campaigns.
4. Keep spacing to 4, 8, 12, 16, 24, 32px.
5. Ground the footer in #f7f7f7 with navy links.
6. Re-measure after rebranding; the global brand templates may change independently of this country page.
