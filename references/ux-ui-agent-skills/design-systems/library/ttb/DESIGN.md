---
version: alpha
name: "ttb bank (TMBThanachart Bank)"
category: "Thai Brands"
description: "TMBThanachart Bank (ttb) English home page: navy #002d63 and #0d2d5e chrome, a full-bleed orange hero (#f68b1f, the stylesheet's --btn-primary), white pill-shaped search buttons, the proprietary ttb display face at 68.864px weight 600 and Ekachon for text, with 24px card radii."
colors:
  canvas: "#002d63"
  page-body: "#ffffff"
  ink: "#ffffff"
  surface-3: "#0d2d5e"
  ink-3: "#585858"
  ink-4: "#7d8999"
  hairline: "#e5e5e5"
  primary: "#f68b1f"
  on-primary: "#ffffff"
  link-blue: "#0050f0"
typography:
  display:
    fontFamily: ttb
    fontSize: 68.864px
    fontWeight: 600
    lineHeight: 82.6368px
  display-mobile:
    fontFamily: ttb
    fontSize: 28.635px
    fontWeight: 600
    lineHeight: 34.362px
  body:
    fontFamily: Ekachon, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 26.25px
    fontWeight: 500
    lineHeight: 39.375px
  nav:
    fontFamily: Ekachon, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
  button-secondary:
    fontFamily: Ekachon, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 19.5px
rounded:
  xs: 13.33px
  sm: 16px
  md: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 12.8px
  s8: 15px
  s9: 16px
  s10: 17px
components:
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 36px
    borderColor: "{colors.page-body}"
  link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.page-body}"
    padding: 8px 0px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 0px 8px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    padding: 8px 0px 16px 40px
---

## Overview

The ttb English home page (https://www.ttbbank.com/en, browser title "ttb เปลี่ยน...เพื่อให้ชีวิตคุณดีขึ้น | TMBThanachart (ttb)", language `en`) is the retail site of TMBThanachart Bank Public Company Limited. Two navigation bars sit on top: a navy utility bar (48px high, #0d2d5e) with "About Us", "Sustainability", "Investor Relations", "ttb analytics", "Careers", "Contact Us" and a grey "TH" language chip; and a white bar with the logo, the audience tabs "Personal", "SME", "Corporate", "ttb reserve", "Rates and Fees" and a Search control. A light-grey sub-bar lists "Accounts", "Credit Cards", "Loans", "Insurance" and "Other Services".

The hero is a large orange panel with rounded outer corners holding a carousel (a five-dot indicator at the right). Its measured text reads "With our 4 financial well-being pillars," in white, 68.864px, weight 600, then "through a diverse array of insurance solutions..." in 26.25px. Behind the type are two overlapping orange discs (a lighter orange #f68b1f and a redder one) cut by a large circular arc. The footer is a navy panel (#002d63) with rounded top-right corner and columns "About Us", "Contact Us", "Related Links", "Follow ttb" and "Headquarters" ("3000 Phahon Yothin Rd., Chom Phon, Chatuchak, Bangkok 10900"), ending in "© Copyright 2026 TMBThanachart Bank Public Company Limited". The four pillars named on the page are "Mindful Spending & Smart Saving", "Healthy Borrowing", "Investing for Future" and "Sufficient Protection".

The extracted page measured 1,094px tall at 1,280px width. A cookie-consent dialog ("Use and Management of Cookies") with an orange "allow us" button overlays the hero in the earlier capture; a feedback survey card also appears in the extraction. Both are site utility controls and are not documented as brand components.

## Colors

- **canvas `#002d63`**: the deep navy; the footer background, the `--primary` root variable, and the dropdown title color.
- **page-body `#ffffff`** and **ink `#ffffff`**: white is both the dominant page surface (white-bar header and body) and the most-read text color (it sits on the orange hero and on navy).
- **surface-3 `#0d2d5e`**: the utility-bar navy.
- **primary `#f68b1f`**: the brand orange. The stylesheet declares `--btn-primary: #f68b1f`, `--link-primary: #f68b1f`, hover `--btn-primary-hover: #f79c40`, link hover `#f8a24c`, active `--btn-primary-active: #d5710c`, focus `#c56f19` and disabled `#b0bccb`. In the measured hover pass the cookie button went from #f68b1f to rgb(248, 162, 76). The generator had picked #0050f0 as primary; since the stylesheet names #f68b1f as the primary button color, the roles were reassigned and the blue was kept as **link-blue `#0050f0`**.
- **on-primary `#ffffff`**: the label color on the orange cookie button (rgb(255, 255, 255) in the hover record).
- **ink-3 `#585858`**, **ink-4 `#7d8999`**: grey text ranks 3 and 4 by characters (after white and #002d63).
- **hairline `#e5e5e5`**: light grey area and divider color.
- Other measured areas: #f5f6f7 (light surface), #6c757d (the grey "TH" chip; hover turns it orange #f68b1f with 75% white text).

Text by characters: #ffffff, #002d63, #585858, #7d8999, #f68b1f, #0050f0, #b0bccb. The stylesheet also contains Bootstrap color variables (--yellow #ffc107, --pink #e83e8c, --teal #20c997, --green #28a745, --danger #dc3545); these are framework defaults and are not tokenized.

## Typography

Two faces are loaded: **ttb** (weight 600) for display, and **Ekachon** at 400, 500, 600 and 700 for text. Ekachon's stack in the stylesheet ends in `-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif`.

| Token | Family | Size / line height | Weight |
|---|---|---|---|
| display | ttb | 68.864px / 82.6368px | 600 |
| display-mobile | ttb | 28.635px / 34.362px | 600 |
| body | Ekachon | 26.25px / 39.375px | 500 |
| nav | Ekachon | 12px / 18px | 600 |
| button-secondary | Ekachon | 13px / 19.5px | 500 |

By characters the sizes rank 14px, 26.25px, 68.864px, 13px, 56.064px, 12px, 15.2px, 22px, 20px. Footer headings are 15.2px / 22.8px weight 600. Line-height ratios are 1.2 (display) and 1.5 (body, nav, button). Letter spacing is normal on the h1 and body; 0.4px on the 20px/700 survey card heading (not brand UI).

No font substitute is documented: both families are loaded by the site.

## Layout

The page uses the stylesheet breakpoints `--breakpoint-xs: 0`, `sm: 576px`, `mobile: 600px`, `md: 768px`, `tablet: 905px`, `lg: 992px`, `xl: 1200px`, `desktop: 1240px`, `xxl: 1400px` and `large-desktop: 1440px`. The hero link block is 1,240px wide (matching `--breakpoint-desktop`) and 512px high; the footer is 1,240px wide and 373px tall with 8px 0px 16px 40px padding. The top utility bar is 1,280px by 48px with 8px vertical padding; nav links have 0px 8px padding.

Gaps measured are 16px, 8px and 24px; paddings 8px, 15px, 24px, 6px, 40px, 12.8px, 16px, 10px and 2px. Spacing tokens s1 to s10 run 2, 5, 6, 8, 10, 12, 12.8, 15, 16 and 17px.

The hero panel has rounded outer corners: measured radii include `0px 50px 50px 0px` (5 elements) and `0px 37.376px 37.376px 0px`, which round only the right edges; the footer's `0px 37.376px 0px 0px` rounds only its top-right corner.

## Elevation & Depth

Three shadows were measured: `rgba(0, 0, 0, 0.05) 0px 8px 16px 0px, rgba(0, 0, 0, 0.1) 0px -1px 0px 0px inset` (a faint lift with an inner bottom hairline), `rgba(0, 0, 0, 0.5) 0px 0px 8px 0px, rgba(0, 0, 0, 0.1) 0px -1px 0px 0px inset` and the large navy-tinted `rgba(0, 45, 99, 0.5) 0px 8px 48px 0px` on the survey card. Brand depth otherwise comes from overlapping color discs and rounded panels.

## Shapes

Measured radii: right-only large rounds (50px and 37.376px), 50% circles, 24px, 13.33px and 16px. Tokens: xs 13.33px, sm 16px, md 24px and pill 9999px. The white Search control is a 90px by 36px control with a 24px radius, a 2px solid #ffffff border and 6px 12px padding.

## Components

**Search button** (`button-secondary`): white fill, navy #002d63 label, Ekachon 13px/500, 24px radius, 6px 12px padding, 36px high; hover turns the label to rgb(51, 115, 243).

**Language chip**: grey #6c757d, white text; hover turns the fill orange #f68b1f.

**Primary button**: the orange `--btn-primary` family (#f68b1f, hover #f79c40, active #d5710c) with white text; measured on the cookie button, whose hover fill is rgb(248, 162, 76).

**Navigation**: the navy bar (#0d2d5e) with white 12px/600 labels, plus the white audience bar (active tab in blue).

**Hero link**: a 1,240px by 512px block with the 68.864px white heading.

**Footer**: navy #002d63, white 15.2px/600 headings, social icons (Facebook, LINE, TikTok, X, LinkedIn) and a hairline above the copyright row.

## Design System Architecture

No public ttb design system or brand guideline was found: https://www.ttbbank.com/en, opened with WebFetch, has no link to brand guidelines or a design system. The de-facto system is the stylesheet's root variables: 59 variables including `--primary: #002d63`, `--btn-primary: #f68b1f`, `--link-primary*`, a Bootstrap-style `--breakpoint-*` scale, and a Swiper carousel (`--swiper-navigation-size: 44px`). Bootstrap's gray and status colors sit alongside the brand variables as unused framework defaults.

## Do's and Don'ts

- Do use navy #002d63 for chrome and footers and white for text on orange.
- Do reserve orange #f68b1f for primary actions, active states and hero art; use #f79c40 on hover.
- Do round only the outer edges of large panels (50px or 37.376px on one side).
- Do set display text in ttb 600 and body in Ekachon.
- Don't use the survey card's heavy navy shadow as a general card style.
- Don't use Bootstrap's yellow, pink, teal or green as brand colors.
- Don't treat the cookie dialog as a design pattern.

## Responsive Behavior

Measured at 390px: the h1 is 28.635px / 34.362px at weight 600 (desktop 68.864px / 82.6368px) and body text is 20px / 30px at weight 300 (desktop 26.25px / 39.375px). By-character sizes at mobile were 13px, 14px, 20px, 28.635px, 16px and 12px. The breakpoint list is declared in the stylesheet as root variables (see Layout); layout changes at those breakpoints were not measured.

## Iteration Guide

1. Use #002d63 for navy chrome and #f68b1f for the single action color.
2. Build the hero as an orange panel with a 68.864px white ttb headline.
3. Use pills at 24px for white utility buttons.
4. Keep the footer navy with a rounded top-right corner of 37.376px.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=ttb`.
