---
version: alpha
name: dtac
category: "Thai Brands"
description: "dtac (www.dtac.co.th/en, 'dtac True Better Together'): a light Thai telecom storefront on white #ffffff and grey #f5f5f5 with dtacEvolution headings at 40px weight 500, Kanit Light body, #007ad0 blue text links that turn #e00000 on hover, 16px-rounded promo banners, and outlined 10px cards with #d6d6d6 borders."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#767676"
  ink-strong: "#1a1a1a"
  ink-heading: "#212529"
  black: "#000000"
  primary: "#007ad0"
  link-hover: "#e00000"
  accent-blue: "#19aaf8"
  surface-blue: "#e7eef4"
  hairline: "#d6d6d6"
typography:
  display:
    fontFamily: dtacEvolution-Regular
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
  display-mobile:
    fontFamily: dtacEvolution-Regular
    fontSize: 30px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: dtacEvolution-Bold
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: kanitlight, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 24px
  body-mobile:
    fontFamily: kanitlight, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22px
  nav:
    fontFamily: dtacEvolution-Regular
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22px
  link:
    fontFamily: dtacEvolution-Regular
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 16px
spacing:
  s1: 1px
  s2: 3px
  s3: 4.8px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  link:
    textColor: "{colors.ink-heading}"
    typography: "{typography.link}"
    padding: 4.96px 8px
  link-hover:
    textColor: "{colors.link-hover}"
  nav:
    textColor: "{colors.ink-heading}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 0px 16px 0px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
---

## Overview

The dtac English home page (https://www.dtac.co.th/en/, title "dtac True Better Together | dtac") is the consumer storefront of the dtac mobile brand, shown here with the joint "true | dtac 5G" lockup in its header. Its meta description promises "better signal", faster Internet and good promotions. The page is light and practical: a white canvas, a grey (#f5f5f5) footer band, saturated photographic promo banners in red and pink, and small outline icons for navigation.

In the capture, from the top: a slim header with the text links Packages, Smartphones & Tablets, Services and Corporate Customers, the "true | dtac 5G" logo, a "dtac reward" link, a user icon and an "EN" circle. Below are six icon-over-label shortcuts (Mobile Packages, Fiber Packages, Phones & Gadgets, Entertainment Packages, Lifestyle, Smart Living). A hero carousel of two rounded banners with pagination dots follows. Then five outlined square tiles (Pay Bill / Refill, Roaming Service, Privileges, Buying a SIM Card, Move to dtac). A "Recommended deals" row has a large Thai heading on the left ("โปรโมชันสุดคุ้ม สำหรับลูกค้าทรู-ดีแทค", a promotion heading for True-dtac customers), a blue "See all" link, and a row of white deal cards with an arrow at the bottom right of each. The footer lists About us, Help & Services, Others, Tracking and True App with store badges, social icons and "© 2026 True Corporation Public Company Limited".

The page is bilingual in structure: Thai headings and English labels coexist, and the measured heading and lead text are Thai.

## Colors

Colour is carried by imagery, not UI chrome. The UI palette is neutral: `canvas` #ffffff, `page-largest` #f5f5f5 (the footer and band behind sections, the largest background area at 796 units against 357 for white), and a pale blue-grey #e7eef4 (11 units). Text colours by characters: `ink` #767676 (604 characters, descriptions and footer links), #1a1a1a (240, titles on cards), #212529 (137, headings and links), #000000 (17).

`primary` #007ad0 is the only measured link/action colour on the page (the "See all" link, 7 characters). A brighter blue #19aaf8 appears as a background area and one border (the thin rule above the footer social row). On hover, the category links turn red, rgb(224, 0, 0), i.e. `link-hover` #e00000. Borders are #d6d6d6 (9 elements), #f5f5f5 (4) and #767676 (1).

The page also carries Bootstrap 4.3.1 root variables (`--primary` #007bff, `--success` #28a745, `--danger` #dc3545, `--warning` #ffc107, `--indigo`, `--teal`, `--gray`, `--dark`) because the stylesheet `bootstrap.min.4.3.1.css` is loaded. Those are framework defaults, not dtac brand colours, and are not used as tokens.

## Typography

Three families are measured. `dtacEvolution-Regular` (687 characters) is the main interface face: the Thai h2 at 40px weight 500 with a 44px line-height, navigation links at 16px/22px weight 300, and category links at 16px/22.4px weight 500. `dtacEvolution-Bold` (165 characters) sets small headings such as "Recommended deals" at 18px/24px. `kanitlight` (153 characters, weight 300) sets the Thai supporting text at 20px/24px in #767676.

Sizes by characters: 15px (384), 14px (195), 16px (174), 12px (114, with 2% letter-spacing for footer fine print), 20px (84), 40px (37), 18px (17). Weights: 400, 300, 500, 700. The stylesheet declares many brand faces: dtacEvolution Light, Medium, Bold, ExtraBoldSlanted, "dtac_2018" Regular/Bold/Light with italics, kanitregular, kanitmedium, TelenorEvolution Light/Regular/Medium/Bold/ExtraBold and beta cuts of dtac_evolution. Only the three above were measured in use on the page. dtacEvolution is proprietary; Kanit is the Thai face of the body copy. If dtacEvolution cannot be licensed, keep the measured sizes and weights; the substitute is not measured.

## Layout

The desktop scroll height at 1280px is only 1758px, a compact home page. Content sits in a centred container; its margins were not measured. Stacked horizontally from top: header (links left, utilities right), the shortcut row of six icon links with equal spacing, the two-banner carousel (a large banner and a narrower second banner), five square tiles centred, the Recommended deals band with a left heading column 256px wide and a card carousel, and the footer in five columns on #f5f5f5.

Spacing measured: paddings 10px (13 uses), 8px (11), 5px (6), 4.96px (6), 16px (5), 15px (4), 3px (4), 1px (4); the gap between inline items is 4.8px (12 uses). Category links measure 176px wide and 109px tall, with padding 4.96px 8px. The shortcut icon row and tiles rely on whitespace rather than fills.

## Elevation & Depth

Depth is light. No box shadow was recorded on a measured element. The stylesheet corpus declares `0px 4px 8px rgba(96, 97, 112, 0.16)` and `0px 2px 10px -3px #999` for raised cards, a Bootstrap focus ring `0 0 0 .2rem rgba(0,123,255,.25)`, and `none`. In the capture the deal cards sit on the page with a soft edge and the tiles have thin outlines. The grey #f5f5f5 footer band separates the footer from content.

## Shapes

Shapes are softly rounded. Frequencies from the page: 16px (11 elements, the promo banners and large cards), 4px (5), 10px (4) and `10px 10px 0px 0px` (4, the image area at the top of a deal card), 3px (1) and 8px (1). The icon shortcut tiles are outlined squares with small radius, the language switch "EN" is a circle, and the pagination dots are circles. Borders are hairline #d6d6d6.

## Components

**Category link** (`link`): dtacEvolution-Regular 16px weight 500 in #212529 with an icon above, padding 4.96px 8px; hover turns the text #e00000.

**Text link** (`nav-link`): "See all" in #007ad0, 16px/22px weight 300, padding 0px 16px 0px 0px, followed by a chevron.

**Promo banner**: a 16px-rounded full-colour image with pagination dots under it (the active dot is wider).

**Quick-action tile**: outlined square (border #d6d6d6) with a blue line icon over a two-line label (the measured mobile label is 14px weight 300); five are shown.

**Deal card** (`card`): white, 10px radius, #d6d6d6 border, image on top (rounded 10px 10px 0 0), title in #1a1a1a, a grey description, and a blue chevron bottom right.

**Footer**: #f5f5f5, column titles in a bold face, grey links, store badges (Google Play, App Store), a blue hairline and a social icon row.

The store badges, the social glyphs and the "1678" call number are brand assets, not tokens.

## Design System Architecture

No public dtac design system or brand-guidelines page was found on the pages opened (https://www.dtac.co.th/en/ and its navigation); nothing links to one. The code shows the de-facto system. The home page loads Bootstrap 4.3.1 from `/dtac-library/assets/css/bootstrap.min.4.3.1.css`, a shared header/footer sheet `/assets/dtac-header-2021/css/dtac_header_footer_2021.css`, page sheets such as `/dtac-2021/assets/css/pages/home-shortcut.css`, and third-party Fancybox for lightboxes. Its Bootstrap breakpoints are declared: xs 0, sm 576px, md 768px, lg 992px, xl 1200px.

Brand typography is delivered through @font-face families named dtacEvolution-* and kanit*. Component names follow page folders (`dtac-go-plus`, `md-offer`, `dtac-2021`) rather than a token system. The "True App" and "© True Corporation Public Company Limited" lines in the footer show the page is operated within the True group.

## Do's and Don'ts

Do keep the interface neutral (white, #f5f5f5, #d6d6d6 hairlines) and let promotional imagery carry colour. Do use #007ad0 for text links and #e00000 as their hover. Do round promo banners at 16px and cards at 10px. Do pair dtacEvolution headings with Kanit Light supporting text for Thai copy.

Don't use Bootstrap's #007bff as a brand colour. Don't add heavy shadows to cards. Don't treat the cookie or promo popups as design. Don't use pure black for titles: card titles are #1a1a1a and headings #212529.

## Responsive Behavior

At 390px the Thai h2 is 30px with a 32px line-height (40px/44px desktop), and supporting text is 16px/22px (20px/24px desktop); the h2 block is 358px wide. The shortcut label "Pay Bill / Refill" was measured at 14px weight 300 with a 20px line-height. Mobile sizes by characters: 12px (197), 14px (195), 16px (63), 20px (45), 30px (37), 18px (17), 15px (14). The stylesheet declares Bootstrap breakpoints at 576, 768, 992 and 1200px, but column reflow was not measured.

## Iteration Guide

Start from canvas #ffffff, band #f5f5f5, ink #767676, heading #212529, link #007ad0. Compose the page as a header with text links, an icon shortcut row, a rounded banner carousel, outlined tiles and a deal-card row, then a #f5f5f5 footer. Check radii (16px banner, 10px card, 4px small), hairlines (#d6d6d6) and the #e00000 hover. Keep colour in imagery, and re-measure before adding any bright UI fill.
