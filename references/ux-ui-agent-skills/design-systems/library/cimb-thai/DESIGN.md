---
version: alpha
name: CIMB Thai
category: "Thai Brands"
description: "CIMB Thai Bank's personal-banking home page uses signal red (#ff0000) for primary buttons on a white canvas, deep maroon (#780000) headlines and hero scrim, a charcoal #272727 footer, Noto Sans in 400, 700 and 900 weights (48px hero, 18px body) and 8px-radius buttons and cards with a soft 0 3px 6px shadow."
colors:
  canvas: "#ffffff"
  ink: "#333739"
  primary: "#ff0000"
  on-primary: "#ffffff"
  surface-footer: "#272727"
  surface-cool: "#f3f4fa"
  ink-on-dark: "#d9d9d9"
  ink-navy: "#001f3f"
  ink-muted: "#9a9a9b"
  link-red: "#c4161c"
  brand-maroon: "#780000"
typography:
  display:
    fontFamily: "\"Noto Sans\""
    fontSize: 30px
    fontWeight: 900
    lineHeight: 32.499px
  heading:
    fontFamily: "\"Noto Sans\""
    fontSize: 48px
    fontWeight: 900
    lineHeight: 54px
  body:
    fontFamily: "\"Noto Sans\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 23.94px
  button:
    fontFamily: "\"Noto Sans\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  nav:
    fontFamily: "\"Noto Sans\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15.96px
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 8px
  s3: 16px
  s4: 20px
  s5: 24px
  s7: 32px
  s8: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px
  button-secondary:
    backgroundColor: "{colors.surface-cool}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 32px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px
  link:
    textColor: "{colors.link-red}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

# CIMB Thai

## Overview

This document describes the English personal-banking home page of CIMB Thai Bank Public Company Limited, measured at https://www.cimbthai.com/en/ (the page resolves to `/en/personal/home.html`; page title "Personal Banking | Savings, Cards, Loans, Insurance & Investment | CIMB TH"). Per the bank's About Us page, CIMB Thai is the Thailand franchise of CIMB Group (headquartered in Kuala Lumpur), was formerly Bank Thai Public Company Limited, and states its purpose as "Advancing Customers and Society". The page on first load is the wealth-management campaign: a full-bleed hero with the headline "Where Your Wealth Grows Smarter" and the line "Delivering privileged access, disciplined protection, and deeply personal outcomes".

The look is a corporate-retail bank in signal red and white. The hero places white 900-weight Noto Sans type on a deep maroon panel whose right edge is cut diagonally into a warm photograph of a woman holding a phone against a city skyline. Below the hero the page returns to a white canvas with a centered Thai headline ("ธนาคาร ซีไอเอ็มบี ไทย ผลลัพธ์ที่ดีกว่าในแบบที่เหมาะกับคุณ") and an English paragraph, a grid of six product tiles with soft pink-to-white gradient illustrations (Primary Bond, Secondary Bond, Mutual Fund, Savings, Loans, Insurance), a photographic band for the advisory team, a "CIMB Preferred Privileges" section with the CIMB Preferred logo lockup (red flag mark, "CIMB" in bold, "preferred" in a script face), and rows of photo cards.

The page is bilingual. The language switch in the header reads "TH-EN" beside a Thai flag, and the main headline is in Thai while hero and body copy are English. Section titles use Title Case ("Behind the Decision & Performance", "CIMB Preferred Privileges"). The voice is formal and aspirational: "privileged access", "disciplined protection", "bespoke wealth approach".

The page measures 1280px wide by 5561px tall. Primary color is red `#ff0000`, text is charcoal `#333739`, and the footer is `#272727`. Everything is set in one family, Noto Sans.

## Colors

Measured values (desktop pass):

- **Canvas `#ffffff`**: the page background; it covers about 43% of the capture.
- **Ink `#333739`**: the most-read text color (1818 characters), used for the Thai H1, body paragraphs and card titles.
- **Primary red `#ff0000`**: the fill of the "Learn More" button and of the two sticky side tabs; on-primary text is white `#ffffff`.
- **Brand maroon `#780000`**: the color of the "Behind the Decision & Performance" H3 (measured on the element) and the most frequent non-neutral color in the stylesheet (394 occurrences). The hero's left panel is drawn in the same deep red family.
- **Link red `#c4161c`**: the measured color of the link "รายละเอียดผลิตภัณฑ์การลงทุน เพิ่มเติม" (underlined on hover).
- **Navy ink `#001f3f`**: a measured text color (368 characters) used for the bold sub-line "Wealth Research & Advisory Team by CIMB THAI".
- **Footer charcoal `#272727`**: the footer fill and the largest measured background by DOM area.
- **Cool surface `#f3f4fa`**: the fill of the secondary buttons ("Contact Us", "Market Outlook").
- **Ink on dark `#d9d9d9`** (1026 characters) and **muted ink `#9a9a9b`**: the footer link and caption colors.

Red `#ff0000` is reserved for the main action; secondary actions are cool gray-lavender buttons with dark text rather than outlined red buttons. The stylesheet also contains a large spread of decorative colors (for example `#e200bc`, `#80f9e2`, `#0fb29e`, `#e541ae`) with 98 to 121 occurrences each; none was measured on a visible element, so they are not tokens.

The green `#68b631` measured on the "Cookies Settings" button belongs to the cookie-consent widget and is not a brand color; it is excluded.

## Typography

One family is loaded: **Noto Sans**, in 400, bold (700) and 900 normal faces (the CSS also declares Noto Serif and Noto Serif SC). Noto Sans accounts for all 4067 measured characters.

| Role | Size / line height | Weight | Notes |
|---|---|---|---|
| Hero H2 "Where Your Wealth Grows Smarter" (`heading`) | 48px / 54px | 900 | white on the maroon hero panel |
| Page H1 (Thai, `display`) | 30px / 32.499px | 900 | centered, ink `#333739` |
| H3 "Behind the Decision & Performance" | 30px / 36px | 900 | maroon `#780000` |
| Body | 18px / 23.94px | 400 | ink `#333739` |
| Button | 18px / 18px | 700 | |
| Nav and footer links | 12px / 15.96px | 700 | |
| Card title | 18px / 24px | 700 | |

By characters the sizes are 18px (1938), 12px (1188), 16px (714), 48px (95), 30px (90), 14px and 14.4px. Weights are 400 (3058 characters), 700 (791) and 900 (218), so the ultra-heavy 900 is reserved for headlines.

The Thai headline and the English headlines share the same family and weight, which keeps the bilingual page visually even. In the capture the "preferred" wordmark of the CIMB Preferred logo appears in script lettering inside the logo lockup.

**Font substitutes.** Noto Sans is the measured family, so no proprietary substitute applies. The loaded-font list on the page records only Noto Sans faces (400, bold and 900).

## Layout

At the 1280px measurement the header is a transparent bar over the hero: hamburger and "Personal Banking" selector at the left, the CIMB THAI logo centered, and "TH-EN", Search and "Select to Login" at the right, all in white 12px bold. The hero is split into a maroon text panel and a photograph divided by a diagonal edge.

Below it, the intro paragraph is centered (the body paragraph element measures 832px wide), with the six product tiles in a two-row, three-column grid centered on the page. Later sections left-align to the page margin (the "CIMB Preferred Privileges" heading) and use three-up photo cards (each card measures 384px wide by 420px tall).

Paddings measured on the page: 24px (25 uses), 16px (23), 32px (7), 48px (4), 8px (4) and 20px (4). The 16px 32px pair is the button padding. Vertical rhythm between sections is generous: wide white bands separate the hero, the product grid and the advisory photo band.

The footer is 712px tall on a `#272727` field, with uppercase column headings (ACCOUNTS and others) and link lists in `#d9d9d9`, followed by the "Global Sites" list of sister CIMB sites (CIMB, CIMB Islamic, CIMB Bank MY, SG, KH, Niaga, VN, PH) and social links.

## Elevation & Depth

Elevation is a single, soft ambient shadow: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px`. It was measured on 21 elements, including the red primary button, the gray secondary buttons and the photo cards, and the same value appears 102 times in the stylesheet. Cards and buttons therefore share one elevation level and are distinguished by fill, not by depth.

The two sticky red side tabs (Thai labels "ปรึกษาการลงทุน" and "ลงทุนผ่านแอป") start with the same shadow and, on hover, swap it for a much larger `rgba(0, 0, 0, 0.4) 0px 25px 50px -12px`. This is the only measured hover change on the page; hover states for the primary and secondary buttons were not recorded.

Other shadows exist in the stylesheet (`0 15px 20px 0 rgba(0,0,0,0.28)`, 89 uses; `0 0 0 3px rgba(0,0,0,0.15)` focus ring, 30 uses) but were not observed on the home page elements measured, so they are listed here only as a stylesheet fact.

The hero uses a dark maroon scrim and a diagonal cut instead of a shadow to separate text from photo.

## Shapes

The shape language is small-radius rectangles. Measured radii: `8px` (19 elements: buttons, cards), `8px 0px 0px 8px` (2 elements: the sticky side tabs, rounded only on the outer left side) and `9999px` (1 element). Tokens: `xs` 8px and `pill` 9999px.

The six product tiles have rounded outlines with a pink-tinted border and a vertical white-to-pink gradient behind a pseudo-3D illustration in red and white; the radius value of those tiles was not recorded as a separate measurement. The hero's diagonal edge is the only non-rectilinear shape and it points toward the subject of the photograph.

The CIMB logo mark is a red square carrying a white flag, repeated at footer and in the CIMB Preferred lockup.

## Components

- **Primary button ("Learn More")**: `{colors.primary}` fill, white 18px bold label, 8px radius, padding 16px 32px, 50px tall (199px wide in the measured instance), shadow `0 3px 6px` at 0.16 alpha.
- **Secondary button ("Contact Us", "Market Outlook")**: `{colors.surface-cool}` fill, `{colors.ink}` 18px bold label, same radius, padding, height and shadow as the primary button; widths measured between 203px and 300px.
- **Link**: `{colors.link-red}` text at the 18px body size; underline appears on hover.
- **Card**: link-wrapped photo cards ("Preferred Wealth", "Preferred Regional"), 8px radius, the 0.16 shadow, 384px by 420px, ink text with an 18px bold title above a short description.
- **Header navigation**: white 12px bold labels on the transparent bar ("Personal Banking", "Search", "Select to Login"); the mega-menu groups are Who We Are, Banking With Us, Wealth Management, Deals & Promotions, Digital Services, Help & Support.
- **Footer**: `{colors.surface-footer}` field, white 12px bold text, links in `#d9d9d9`.

Not documented as brand UI: the OneTrust cookie banner and its "Cookies Settings" button.

## Design System Architecture

No public design system or brand-guideline page was found. The home page (https://www.cimbthai.com/en/personal/home.html) and the About Us page (https://www.cimbthai.com/en/personal/who-we-are/about-us.html) were opened; neither links a design system, brand guidelines or a press kit, and About Us links only logo image files. There is no public CIMB Thai design-system repository linked from these pages.

The de-facto system is visible in the stylesheet: a single typeface (Noto Sans), a single elevation value reused 102 times, a repeated 8px radius (124 occurrences in the corpus) and a button recipe (16px 32px padding, 18px bold type) shared between primary and secondary actions. The extraction found no root custom properties on the page (0 recorded), so tokens are not exposed as CSS variables; the system is carried in compiled class styles. The site is organized under a CIMB Group family: the footer's "Global Sites" list links CIMB regional sites, but a shared cross-country design-token package was not found on the pages opened.

## Do's and Don'ts

Do
- Reserve `#ff0000` for the single main action in a block, with white 18px bold text and an 8px radius.
- Use `#333739` for text on white and `#d9d9d9` for text on the `#272727` footer.
- Set headlines in Noto Sans 900; use maroon `#780000` for light-background section titles and white on photographs.
- Keep secondary actions in the cool `#f3f4fa` fill with dark text.
- Pair Thai and English headings in the same family and weight.

Don't
- Don't outline buttons in red or give them different radii; the measured set is one 8px radius for buttons and cards.
- Don't add new shadow levels; the page uses one soft shadow for buttons and cards.
- Don't treat the cookie widget green `#68b631` as a brand accent.
- Don't use red for body text; links use `#c4161c`.
- Don't set long paragraphs in the 900 weight.

## Responsive Behavior

The extraction's mobile pass (390px viewport) recorded these values: the Thai H1 stays 30px (line height 33.75px) at weight 900; the hero H2 drops from 48px to 30px (line height 36px); body text drops from 18px to 16px (line height 22px) and the body paragraph measures 298px wide; the "Learn More" button keeps 16px 32px padding and 50px height, with a 16px label and a 250px width; the header nav label stays 12px bold. The mobile character-weighted size list is led by 16px (1556), 12px (1214), 14px (678), 18px (382) and 30px (185).

How the grids and photo cards rearrange on mobile was not measured, and neither was any mobile menu behavior.

## Iteration Guide

1. Begin with `canvas` `#ffffff`, `ink` `#333739`, `primary` `#ff0000` and `surface-footer` `#272727`; add `brand-maroon` for headings and the hero panel.
2. Load Noto Sans 400, 700 and 900; set the hero title at 48px / 54px weight 900, section titles at 30px, body at 18px / 23.94px.
3. Build buttons at 50px height with 16px 32px padding, 8px radius and `0 3px 6px rgba(0,0,0,0.16)`; primary red with white text, secondary `#f3f4fa` with ink text.
4. Compose the hero as a maroon panel with a diagonal edge over a warm portrait photograph; keep copy short and white.
5. Use 384px by 420px photo cards with the same 8px radius and shadow in rows of three.
6. For mobile, use only the measured drops above (48px to 30px headline, 18px to 16px body); mark everything else as not measured until a probe records it.
7. Re-run the verifier after any token edit and keep a cited source or a measurement for each new value.
