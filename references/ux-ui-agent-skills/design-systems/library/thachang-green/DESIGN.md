---
version: alpha
name: Thachang Green Energy
category: "Thai Brands"
description: "Thachang Green Energy (tge.co.th), a Thai renewable-power company, uses a white canvas #ffffff, navy ink #383c55, cyan #39c1d9 accent and blue #2561ad footer in Helvetica 60px/700 headings; its entry gateway adds PSL Kanda Modern Extra Pro 54px and brown #5d3900 text."
colors:
  canvas: "#ffffff"
  ink: "#383c55"
  primary: "#39c1d9"
  brand-blue: "#2561ad"
  gateway-ink: "#5d3900"
  gateway-accent: "#894818"
  hairline: "#e8e8e8"
typography:
  display:
    fontFamily: "\"PSL Kanda Modern Extra Pro\""
    fontSize: 54px
    fontWeight: 400
    lineHeight: 54px
  display-mobile:
    fontFamily: "\"PSL Kanda Modern Extra Pro\""
    fontSize: 34px
    fontWeight: 400
    lineHeight: 34px
  body:
    fontFamily: "\"PSL Kanda Modern Extra Pro\""
    fontSize: 30px
    fontWeight: 400
    lineHeight: 33px
  home-display:
    fontFamily: Helvetica
    fontSize: 60px
    fontWeight: 700
    lineHeight: 72px
  home-subheading:
    fontFamily: Helvetica
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  home-body:
    fontFamily: Helvetica
    fontSize: 18px
    fontWeight: 300
    lineHeight: 27px
  home-link:
    fontFamily: Helvetica
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  badge:
    fontFamily: Helvetica
    fontSize: 14px
    fontWeight: 300
    lineHeight: 21px
rounded:
  xs: 100px
  pill: 9999px
  badge: 42px
  card: 20px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 15px
  s6: 20px
  s7: 32px
  h1: 12px
  h2: 8px
  h3: 16px
  h4: 64px
components:
  badge-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.badge}"
    rounded: "{rounded.badge}"
    height: 66px
  badge-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.badge}"
    rounded: "{rounded.badge}"
    height: 66px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.home-link}"
  footer:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
---

## Overview

Thachang Green Energy (TGE) is a Thai listed renewable-power group (biomass, municipal solid waste and biogas power). The URL https://www.tge.co.th/ lands on `https://www.tge.co.th/en/intro-page`, a one-screen gateway; the extractor measured it twice and both times it was the same gateway page (34 visible elements). On the capture date 9 Oct 2026 it is a tribute page headed "๑๓ ตุลาคม วันนวมินทรมหาราช" (13 October, Nawamintharamaharaj Day) with a portrait, a gold ornamental divider, a pale gold wash background and a gold pill button reading "เข้าสู่หน้าหลัก | Enter Site". Because that page is a seasonal gateway and not the working site, the real site was measured as an extra page: `https://www.tge.co.th/en/home` (346 visible elements, 6043px tall), saved as `thachang-green--home`. This document describes the measured home page as the brand system and records the gateway separately.

The home page is photographic and corporate. The hero shows the company name "Thachang Green Energy" in 60px white bold Helvetica over image content darkened by a translucent scrim, with the lines "Energy For Sustainability" and "The Power of Nature" and a "Scroll to explore" cue. Sections follow for the three business groups (Biomass 29.7 megawatts, Municipal Solid Waste 46.8 megawatts, Biogas), Operational Highlights (83.5 megawatts), the three ESG pillars Environmental, Social and Governance with a "Sustainability Report 2026" download, an Investor Corner with the SET quote and announcements, and Quick Download. Voice is formal English with Thai alternatives (TH and EN switch in the header).

## Colors

Measured on the home page. Background area by weight: translucent dark scrim #21212166 (983), blue #2561ad (631), white #ffffff (333), cyan #39c1d9 (37). Text colour by characters: white #ffffff (1402), navy #383c55 (300), blue #2561ad (251), cyan #39c1d9 (123), #2ab0d5 (43), green #17974a (7) and #5dbf0b (6).

- **canvas #ffffff** is the page background where content sits on white.
- **ink #383c55** is the body-text colour on white sections.
- **primary #39c1d9** is the cyan accent: the fill of the first membership badge, the text of "Explore More" links and the hover colour of the TH/EN switch (measured hover: white to rgb(57, 193, 217)).
- **brand-blue #2561ad** fills the footer (493px tall) and colours the section headings and text of 251 characters.
- Gateway colours (measured on the intro page): **gateway-ink #5d3900** (235 characters of text) and **gateway-accent #894818** (25 characters); **hairline #e8e8e8** is the one measured border colour on that page.

The home page root variables are Bootstrap 5 defaults (`--bs-primary: #0d6efd`, `--bs-green: #198754`); those are framework values, not TGE brand colours, and are not used here.

## Typography

Home page: one family, **Helvetica** (2132 characters), fallbacks Kanit and sans-serif; loaded weights 300, 400, 500 and 600, measured in use 300 (459 characters), 400 (616), 500 (214) and 700 (843). Roles: hero h2 Helvetica 700 60px/72px white; h3 pillar headings 700 24px/28.8px; body paragraph 300 18px/27px (mobile measurement); links "Explore More" 500 16px/24px; badge text 300 14px/21px. Most-read sizes: 18px (657 characters), 16px (448), 36px (257), 24px (212), 14px (210), 48px (116), 22px (112).

Gateway page: **PSL Kanda Modern Extra Pro** 400 at 54px/54px for the headline, 38px and 30px/33px for the lines beneath, with Kanit 15px for the small label; on the mobile pass the headline measures 34px/34px and the paragraph 20px/22px. The page also references other PSL font families (Text Pro, Narissara Pro, Panpilas Pro, Asadont Pro, Irene Pro, Kanda Modern Pro) served from fonts.21impact.com; only Kanda Modern Extra Pro and Kanit were measured in use.

## Layout

Desktop viewport is 1280px. The home header is 110px tall with white text over the hero (no solid background measured on the header role) and a TH/EN switch plus a large mega-menu: About Us, Our Business, Investor Relations, ESG, Company News, Join Us, Contact Us, each with many sub-pages. Content blocks are full-width bands: hero, business-group cards, ESG pillars, investor data, footer. Paddings by frequency: 12px (39), 8px (24), 16px (13), 4.8px (4), 64px (3), 4px (2), 80px (1). The spacing scale keeps the gateway's 4, 5, 6, 10, 15, 20 and 32px values and adds the home values 12px, 8px, 16px and 64px.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.3) 0px 3px 20px 0px` and `rgba(0, 0, 0, 0.25) 0px 4px 10px 0px` (one each). Depth otherwise comes from a translucent dark scrim #21212166 laid over photography so white text stays readable, and from the gold gradient washes of the gateway page. No other layering was measured.

## Shapes

Measured home radii: 100% (9 elements), 20px (7), 42px (3), 4px (2), 50% (1), 999px (1). The 42px radius is the pill of the two membership badges; 100% and 50% are circular icon holders; 20px is a card-like rounding. The gateway has 100px and 999px radii; the gold "Enter Site" button is a full pill.

## Components

- **Membership badges:** "Member of Thai Renewable Energy Association" is a 280px by 66px pill, fill #39c1d9, white Helvetica 300 14px text, radius 42px. "Member of Thailand Carbon Neutral Network" is the same size with a white fill, a 1px solid #ffffff border and cyan text.
- **Explore More link:** cyan #39c1d9, Helvetica 500 16px, 45px tall target.
- **Header:** 110px tall, white Helvetica 500 16px labels, TH and EN switches, a drop-down menu.
- **Footer:** brand-blue #2561ad, white text, 48px top padding, 493px tall, with the company name "Thachang Green Energy Public Company Limited" and the address block.
- **Download buttons and stat figures:** "Download", "View" and "View More" actions and large megawatt numerals appear in the page text; their styles were not separately measured.
- The cookie-consent button on the gateway capture and the footer "Back to top" control are utilities and not brand components.

## Design System Architecture

No public design system or brand-guidelines page was found: the home page navigation lists corporate, investor, ESG and news pages only (opened: https://www.tge.co.th/en/intro-page and https://www.tge.co.th/en/home). The de-facto system is a themed Bootstrap site: the gateway HTML loads `https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css` and a theme stylesheet at `/themes/default/assets/theme.*.css` plus cookie CSS, while the home page root variables are Bootstrap 5 `--bs-*` defaults. Fonts come from fonts.21impact.com (PSL families) and the home page uses Helvetica with Kanit; icons use Font Awesome 5 Pro and an icomoon font.

## Do's and Don'ts

- Do use white canvas, navy #383c55 text, cyan #39c1d9 accents and blue #2561ad bands.
- Do set the hero heading in Helvetica 700 at 60px/72px with white text over a darkening scrim.
- Do keep pill badges at 42px radius with 14px light text.
- Do show capacity figures in megawatts alongside the business-group name.
- Don't copy the gateway's gold and brown palette (#5d3900, #894818) into the working site; it belongs to the tribute page.
- Don't treat Bootstrap defaults (#0d6efd, #198754) as brand colours.
- Don't document the cookie banner or back-to-top control as brand UI.

## Responsive Behavior

Mobile was measured at a 390px viewport. Home page: hero heading stays Helvetica 700 60px/72px but occupies a 366px wide, 216px tall block (three lines); body paragraph is Helvetica 300 18px/27px in a 366px wide, 108px tall block; the header measures 390px wide and 73px tall and its recorded text is "TH EN" only; the membership badge keeps 280px by 66px. Mobile size frequencies: 18px (666), 36px (373), 16px (240), 14px (210), 24px (201), 13px (138). Gateway page on mobile: headline PSL Kanda Modern Extra Pro 34px/34px in a 350px block, paragraph 20px/22px. Mega-menu behaviour at narrow widths, image cropping and touch behaviour were not measured.

## Iteration Guide

1. Decide which surface you are building: the working site (Helvetica, cyan and blue) or the seasonal gateway (PSL Kanda Modern, gold and brown).
2. For the working site start from canvas #ffffff, ink #383c55, primary #39c1d9 and brand-blue #2561ad.
3. Hero: Helvetica 700 60px/72px white over a #21212166 scrim.
4. Badges: 280px by 66px pills at 42px radius, filled cyan or outlined white.
5. Footer in #2561ad with white text.
6. Measure any new component with the extractor first; anything not in the extraction stays "not measured".
