---
version: alpha
name: Banpu Power
category: "Thai Brands"
description: "Banpu Power Public Company Limited corporate site (banpupower.com): light-gray #f5f4f5 page, left sidebar navigation in teal #00b49c, HCo Gotham SSm at 11px to 13px, outlined 25px-radius teal pills, white news cards with soft 3px 6px shadows over photographic hero banners."
colors:
  canvas: "#f5f4f5"
  page-body: "#f5f4f5"
  ink: "#707070"
  on-dark: "#ffffff"
  primary: "#00b49c"
  link-blue: "#00aeef"
  violet: "#482f92"
  ink-soft: "#ffffffe6"
  ink-4: "#000000"
typography:
  display:
    fontFamily: "\"HCo Gotham SSm\", Kittithada, \"Chuan Pim\", Arial, Helvetica, sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px
  display-mobile:
    fontFamily: "\"HCo Gotham SSm\", Kittithada, \"Chuan Pim\", Arial, Helvetica, sans-serif"
    fontSize: 13px
    fontWeight: 600
    lineHeight: 19.5px
  body:
    fontFamily: "\"HCo Gotham SSm\", Kittithada, \"Chuan Pim\", Arial, Helvetica, sans-serif"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 16.5px
  nav:
    fontFamily: "\"HCo Gotham SSm\", Kittithada, \"Chuan Pim\", Arial, Helvetica, sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
  link:
    fontFamily: "\"HCo Gotham SSm\", Kittithada, \"Chuan Pim\", Arial, Helvetica, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  xs: 3px
  sm: 10px
  pill: 25px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 13px
  s6: 15px
  s7: 18px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.primary}"
    padding: 0px 0px 50px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 15px 15px 16px 50px
  button-outlined:
    textColor: "{colors.primary}"
    rounded: "{rounded.pill}"
    padding: 9px 17px
    height: 35px
    borderColor: "{colors.primary}"
  text-input:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 18px
    height: 35px
---

## Overview

Banpu Power is the corporate and investor site of Banpu Power Public Company Limited (page title "Banpu Power Public Company Limited | บริษัท บ้านปู เพาเวอร์ จำกัด (มหาชน)"). The queue URL `https://www.banpupower.com/en` redirected to an inner page, `/sustainability/governance/risk-management/en/`, which is where the main token set was measured; to describe the real homepage a second measurement was taken at `https://www.banpupower.com/` (extra page `banpu-power--home`). Both are the brand's own site.

The design is a quiet corporate layout: a white left sidebar (about 250px wide on desktop) holding the violet-and-teal BANPU POWER logo and a list of teal links with small colored icons (Corporate Governance, Investor Relations, Newsroom, Social Responsibility, Sustainability, Banpu Power People, Contact Banpu Power); a thin top bar with TH and EN language links, where the active EN tab is a solid teal block, and a search icon; then a full-bleed photographic hero (a power plant behind yellow flowers, with circular teal-green stat badges "3174 MWe Total Power Generation Capacity" and "8 Power Plants / Projects"); an "Announcement" carousel; and a "Banpu Power Newsroom" with white cards. Copy is plain, declarative English ("Fueling the world with thermal power", "Responsible Just Energy Transition").

## Colors

- **Canvas `#f5f4f5`** (also `page-body`) is the page background and the dominant measured area on the homepage (weight 9,740, ahead of white at 831).
- **Primary teal `#00b49c`** is the brand action color: sidebar links, "Banpu Power News"/"Banpu Power Story" section labels, the "See more" pill label, document-link text, and the 422-count most-frequent stylesheet color. A border of `#1bb49c` (two occurrences) outlines the pill.
- **Link blue `#00aeef`** is the computed color of generic links and the body element on the inner page (15 characters); it is a secondary cyan.
- **Gray `#707070`** is the most-read text color on the homepage (961 characters: "Announcement", news titles) and the footer background on the inner page.
- **White `#ffffff`** is text on the footer and hero, the sidebar and card fill; **`#ffffffe6`** is a near-white text tone (62 characters).
- **Violet `#482f92`** appears 85 times in the stylesheet corpus; it was not isolated as a rendered text or fill role in the measurement, so no component uses it here.
- **Black `#000000`** is the typed-text color in the search input and breadcrumb text on the inner page.

Bootstrap 4 variables are present at the root (`--primary: #007bff`, `--success: #28a745`, `--danger: #dc3545` and the WordPress presets); they are framework defaults and are not brand colors.

## Typography

One family, **HCo Gotham SSm** (loaded at 400, 500 and 700), with Thai fallbacks `Kittithada` and `Chuan Pim`, then Arial, Helvetica and sans-serif; it covers 2,139 of the homepage's characters. The stylesheet also declares IBM Plex Thai, Maledpan, Sarabun, Kanit and Montserrat (Montserrat measured on 6 characters).

- **Display** (inner page h1 role) 11px/400/16.5px; the homepage section titles ("Announcement", "Banpu Power Newsroom") measure 24px/500/36px in `#707070`.
- **Body** 11px/500/16.5px; the homepage scale is 9, 10, 11, 12, 13, 16, 21, 24 and 30px with 11px the most common (733 characters).
- **Nav** 12px/600/18px on the inner page; 13px/600/19.5px on the homepage sidebar.
- **Link** 13px/400/19.5px.

Weights: 400 (1,173 characters), 500 (812), 600 (154), 300 (6). No letter-spacing was recorded. Text is small throughout; the largest measured type on the homepage is 30px (6 characters).

### Font substitutes

HCo Gotham SSm is a commercial typeface. If it is unavailable, the declared fallbacks are Kittithada and Chuan Pim for Thai, then Arial, Helvetica and sans-serif.

## Layout

A fixed left sidebar (250px wide, 515px tall on the inner page; 60px-tall link rows with 20px 35px 20px 55px padding on the homepage) leaves the right area for content. Content sits in a centered column below the hero: announcement carousel, then a two-column newsroom (a list of four horizontal news cards on the left, a large feature card with two smaller cards below on the right), a "See more" pill under each column, then a Vision & Mission banner with teal gradient. The footer is a gray `#707070` block with the logo, address (26th Floor, Thanaphoom Tower, 1550 New Petchburi Road, Makkasan, Ratchathewi, Bangkok 10400), telephone and a darker `#505050` strip with Site map, Terms & Conditions and Privacy Center links. Spacing values recorded: 5, 6, 10, 13, 15, 17, 20, 25, 30, 40 and 55px; 6px (26 uses), 10px (25) and 20px (18) are most common.

## Elevation & Depth

Cards float on the gray canvas with soft shadows: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` (15 occurrences) and `rgba(0, 0, 0, 0.1) 0px 3px 6px 0px` (2). A third shadow, `rgba(160, 160, 160, 0.85) 2px 2px 6px 0px`, appears once on both pages. On the mobile header the measured shadow is `rgba(0, 0, 0, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.08) 0px 2px 4px 0px`. The sidebar overlaps the hero edge in the capture. Photography and teal gradients supply the rest of the depth.

## Shapes

Radii measured on the homepage: 50px (11 elements), 25px (4), 6px (4), 15px (3), 28px (2), 3px and 10px. The "See more" pill measures radius 25px, 96px by 35px; the search input has a 10px radius; the "Apply Job" button measures 25px radius at 272px by 42px. News cards are rectangular with the shadow above.

## Components

- **Outlined pill ("See more").** Transparent fill, `#00b49c` label at 12px/500/18px, 1px solid `#1bb49c` border, radius 25px, padding 9px 17px, 96x35px.
- **Apply Job button.** White label on `#ffffff4d`, 12px/500/22px, radius 25px, 272x42px.
- **Sidebar navigation.** Teal 13px/600 labels with a colored icon at left and a chevron at right on expandable items; "Banpu Power People" has no chevron.
- **Language switch.** TH is gray `#707070` and underlined on hover (measured); EN active is a teal block with white text.
- **Report links.** "Annual Report 2025 (Form 56-1 One Report)" and "Financial Report 2025 PDF / 22 MB": teal text on white, 219x65px.
- **Search input.** Black text, 13px, radius 10px, padding 0px 18px, 35px high.
- **News card.** White, small shadow, date in gray above a four-to-five line title in 10-11px.
- **Footer links.** White 10px/500; hover is not visibly different (measured text color unchanged).

## Design System Architecture

No public design system or brand guideline was found: the pages opened (the inner risk-management page and the homepage) link to company content, not to design documentation. The de-facto system is a WordPress theme on Bootstrap 4: the root variables include `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`, Bootstrap color names, and `--wp--preset--*` WordPress values. The brand layer is the teal `#00b49c`, HCo Gotham SSm and the 25px pill. Source: https://www.banpupower.com/ and https://www.banpupower.com/sustainability/governance/risk-management/en/ as captured by the repository extractor.

## Do's and Don'ts

- Do use teal `#00b49c` for navigation, section labels and outlined actions on a `#f5f4f5` page.
- Do keep type small and Gotham-weighted: 11px to 13px body, 24px for section titles in `#707070`.
- Do use 25px-radius outlined pills and soft `0px 3px 6px` shadows on cards.
- Do pair full-bleed photography with circular teal badges for statistics.
- Don't use Bootstrap's `#007bff` or WordPress preset colors as brand colors.
- Don't use sharp-cornered buttons.
- Don't add heavy shadows beyond those measured.

## Responsive Behavior

Measured on a 390px mobile pass of the homepage: the header container measured 390px wide and 79px high with the shadow above; the "Announcement" title stays 24px/500; body text stays 11px/500; the report link measured 200px wide (219px on desktop); header links visible: 4 (desktop: 2). The extractor reported no menu toggle (`menuToggleVisible: false`), although the mobile capture shows a square teal icon button at the top left, the logo centered and a search icon at right; its behavior is not measured. News cards in the mobile capture keep a horizontal image-and-text layout with a "See more" pill beside each section label. Breakpoint behavior is not measured.

## Iteration Guide

1. Use the tokens exactly; add colors only from new measurements.
2. Build with a white sidebar, `#f5f4f5` canvas and teal `#00b49c` links.
3. Set text in HCo Gotham SSm at 11px/13px, section titles at 24px/500 in `#707070`.
4. Use 25px outlined pills and white cards with `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px`.
5. Run `node web/scripts/verify-designs.mjs --slug=banpu-power` until it passes.
