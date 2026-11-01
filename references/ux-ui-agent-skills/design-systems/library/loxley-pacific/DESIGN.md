---
version: alpha
name: "Loxley"
category: "Thai Brands"
description: "Loxley Public Company Limited (loxley.co.th/en/home, Thai trading, technology and services group): Montserrat with Noto Sans Thai, white canvas #ffffff, gold #d9a243 pill buttons with 30px radius, navy #26417e links, uppercase 31px headings."
colors:
  canvas: "#ffffff"
  ink: "#1f1f20"
  primary: "#d9a243"
  on-primary: "#ffffff"
  surface-2: "#000000"
  ink-3: "#26417e"
  ink-6: "#212529"
  hairline: "#dbdcdd"
typography:
  display:
    fontFamily: Montserrat, "Noto Sans Thai", sans-serif
    fontSize: 49px
    fontWeight: 600
    lineHeight: 61.25px
  display-mobile:
    fontFamily: Montserrat, "Noto Sans Thai", sans-serif
    fontSize: 28.9525px
    fontWeight: 600
    lineHeight: 36.1906px
  heading:
    fontFamily: Montserrat, "Noto Sans Thai", sans-serif
    fontSize: 31px
    fontWeight: 600
    lineHeight: 38.75px
    textTransform: uppercase
  body:
    fontFamily: Montserrat, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  button:
    fontFamily: Montserrat, "Noto Sans Thai", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
  nav:
    fontFamily: Montserrat, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 3.8px
  md: 4px
  lg: 4.8px
  xl: 5px
  2xl: 10px
  3xl: 30px
  pill: 9999px
spacing:
  s1: 6.4px
  s2: 8px
  s3: 9.6px
  s4: 12px
  s5: 12.8px
  s6: 15px
  s7: 16px
  s8: 20.8px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 12.8px 24px 11.2px
    height: 45px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 3px 6px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-2}"
    typography: "{typography.nav}"
    padding: 12px 20px 12px 44px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-2}"
    rounded: "{rounded.2xl}"
    padding: 28px 24px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px 0px
    borderColor: "{colors.hairline}"
---

## Overview

The measured page is the English home page of Loxley Public Company Limited, title "Loxley", at https://www.loxley.co.th/en/home (the queued address was loxley.co.th and it resolves to /en/home). The brand is a Thai corporate group; the page describes itself as "A LEADER IN THE PROVISION OF COMPREHENSIVE SERVICES" and the capture is an institutional, investor-facing home page. The top bar has the Loxley monogram (a gold and navy "L" and "b" block with the word LOXLEY), a menu (About Us, Our Businesses, Corporate Governance, Sustainability, Investors, News Updates, Careers, Contact Us), an EN | TH language switch and a search icon. The hero rotates statements such as "Long-lasting Traditions and History Ensure Stability." over a dusk city skyline with a gold "Explore More" pill. An announcement dialog ("Invitation to Shareholders to propose agenda items and nominate candidates for directors", with a "More Details" button) and a cookie panel covered the first screen of the capture; both are overlays and are excluded here.

The next band, "LOXLEY PUBLIC COMPANY LIMITED", introduces five business-group cards with photographs and white icons: Information Technology SBG, Services SBG, Energy SBG, Network Solutions SBG and Trading SBG. A company-video band with a play button, an "INVESTOR CORNER" with a stock quote (1.80 THB, -0.08 (-4.26%)), latest documents and "SET ANNOUNCEMENTS", "LATEST PRESS RELEASES" with three cards, a split SUSTAINABILITY and JOIN WITH LOXLEY band, and a footer with Terms and Conditions, Privacy Notice, Cookie Policy and Sitemap complete the 4141px page.

## Colors

White #ffffff is the largest background (1674), with black #000000 (1024) used for the video and image layers, the brand gold #d9a243 (55) filling buttons, navy #26417e (30) for the investor block and a mid-blue #3a64c1 (5). Text is a near-black #1f1f20 (1604 characters, ink), white over imagery (671), navy #26417e (129), gold #d9a243 (125) and Bootstrap grey #212529. The only border color is a light grey #dbdcdd.

The stylesheet publishes a named palette in :root: blues (--blue-300 #6082CF, --blue-400 #3A64C1, --blue-500 #26417E, --blue-700 #17274C), yellows (--yellow-100 #F7ECD9, --yellow-300 #E8C78E, --yellow-700 #8E641D, --yellow-800 #5E4313, --yellow-900 #2F210A), --orange-500 #FAA51A, neutrals (--neutral-200 #E7E8E8, --neutral-300 #DBDCDD, --neutral-500 #9A9DA0, --neutral-800 #3D3F41) and --light-blue-100 #F1FAFF. The measured colors map directly to this scale: the navy is --blue-500 and the hairline is --neutral-300.


Further confirmation from the same variables: the gold button fill #d9a243 is --yellow-500, the ink #1f1f20 is --neutral-900, and the scales run in steps of 100 from 100 to 900 for blue (--blue-100 #F2F5FB to --blue-900 #080D19), yellow (--yellow-600 #CE9129, --yellow-400 #E1B569) and neutral (--neutral-100 #F3F3F4 to --neutral-900 #1F1F20), so the brand has a ready tint and shade ladder even though the measured page uses only a few steps. The darker gold #ce9129 also appears in the measured background list.

- Canvas #ffffff; surface-2 #000000.
- Ink #1f1f20; ink-3 #26417e; ink-5 #212529.
- Primary #d9a243 with on-primary #ffffff; hairline #dbdcdd.

## Typography

Montserrat is the only text family measured (2552 characters), with Noto Sans Thai as the fallback for Thai script, and icons come from Font Awesome 6 Pro and an icomoon font. Montserrat is loaded at 100, 400, 500 and 600. The hero display is 49px at weight 600 on a 61.25px line-height; the section heading is 31px at 600 on 38.75px, uppercase; body text is 16px at weight 500 on 24px (1620 characters at 16px); navigation links are 16px at 400; and buttons are 14px at 600 on 21px. Other sizes measured: 14px, 12px, 25px, 20px and 10px. Weights by character: 600 (1113), 400 (1043), 500 (395). Letter-spacing is normal.

Headings in capitals, medium-weight body copy and the geometric Montserrat shapes give the page its corporate tone; the Thai fallback is declared in the stack.

## Layout

The container is centred with side gutters, a full-width top bar and full-bleed bands. Business cards sit in a five-up row of tall portrait photographs with white text and icon at the lower left. Press releases are a three-up row with a category tag in the corner of each image (Company News, Award News). The investor band is three columns: stock quote, a central photograph, latest documents. Spacing values: 6.4px, 9.6px, 12px, 12.8px, 15px, 16px, 20.8px, 24px, 28.8px and 32px; the footer has 32px vertical padding and a hairline border. The :root declares breakpoints (--breakpoint-md 768px, --breakpoint-xxl 1640px).

## Elevation & Depth

One shadow is measured, rgba(0, 0, 0, 0.05) 0px 3px 6px 0px, on the top navigation. The capture also shows layered white blocks over photography (the logo tab on the video band, the card overlays) and gradient overlays on hero and card images. Cards carry no other shadow.

## Shapes

Radii include 3px, 3.8px, 4px, 4.8px, 5px, 10px and 30px, and 50% for circular controls such as the video play button. The gold primary buttons are pills with a 30px radius, 45px tall. Business and press cards use 4px; the top corners alone are rounded at 5px on some image tops (5px 5px 0px 0px). Text inputs are 50px tall.

## Components

- **Button primary**: #d9a243 fill, white Montserrat 14px at 600, 30px radius, padding 12.8px 24px 11.2px, 45px tall; labels "Explore More" and "More Details".
- **Nav**: white background with the 0.05 alpha shadow, gold accent for the active language, links in near-black at 16px.
- **Link**: near-black 16px; investor links carry a gold arrow.
- **Text input**: white, 50px tall, padding 12px 20px 12px 44px (room for the search icon).
- **Card**: white, 4px radius.
- **Investor announcement bar**: navy #26417e block labelled "SET ANNOUNCEMENTS".
- **Footer**: white with a #dbdcdd hairline and 32px vertical padding; social icons at the right.

## Design System Architecture

No public Loxley design system or brand guideline was found on the pages opened. The stylesheet exposes a named :root palette (--blue-100 to --blue-700 style scales, --yellow-100 to --yellow-900, --neutral-200 to --neutral-800, --orange-500) alongside Bootstrap variables (--light #f8f9fa, --danger #dc3545, --black #000000), Swiper variables (--swiper-navigation-size 44px) and Font Awesome variables. Scale-numbered color names make the palette systematic even without published documentation. Source page: https://www.loxley.co.th/en/home.

## Do's and Don'ts

- Do use gold #d9a243 pills with white text for "Explore More" and "More Details".
- Do use navy #26417e for emphasis links and the investor announcement block.
- Do set headings in uppercase Montserrat 600 and body in 500.
- Do pair photographs with white icons and white labels on cards.
- Don't use Bootstrap's --danger red as a brand color.
- Don't use heavy shadows; the single measured shadow is 0.05 alpha.
- Don't document the announcement dialog or cookie panel as brand components.

## Responsive Behavior

The 390px mobile pass measured the hero statement at 28.9525px, weight 600, on a 36.1906px line-height (white), and the "LOXLEY PUBLIC COMPANY LIMITED" heading at 21.8875px at weight 600 on 27.3594px. The mobile navigation text lists EN, TH, SITE SEARCH and "Enhanced by". Column counts, image crops and further breakpoints beyond the declared variables were not measured.

## Iteration Guide

1. Start from white with near-black #1f1f20 text and the navy #26417e as a secondary.
2. Set Montserrat 600 uppercase at 31px for headings, 500 at 16px for body.
3. Build gold pill buttons: #d9a243, 30px radius, 45px tall.
4. Fill cards with photographs, white icons and labels; 4px radius.
5. Verify: node web/scripts/verify-designs.mjs --slug=loxley-pacific.
