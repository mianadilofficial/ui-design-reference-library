---
version: alpha
name: Khon Kaen University
category: "Thai Brands"
description: "Khon Kaen University (kku.ac.th/en) pairs a terracotta brand red #a73b24 with Kanit headlines and Sarabun body text on a white canvas, using 8px cards, 999px pill buttons and soft 18px/46px shadows around photographic news and ranking tiles."
colors:
  canvas: "#ffffff"
  ink: "#3a3a3a"
  primary: "#a73b24"
  on-primary: "#ffffff"
  surface-blush: "#f1eaea"
  surface-sand: "#f5f0ec"
  ink-strong: "#121827"
  ink-muted: "#5d6675"
  on-dark-muted: "#ffffffc9"
  on-dark: "#ffffffeb"
  hairline: "#a73b241f"
  accent-red-deep: "#a93622"
  card-dark: "#111827"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 28.16px
    fontWeight: 600
    lineHeight: 35.2px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 30px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 25.6px
    fontWeight: 500
    lineHeight: 32.256px
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 23.1px
  button:
    fontFamily: Kanit, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
  link:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button-secondary:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 800
    lineHeight: 19.2px
rounded:
  xs: 6px
  sm: 7px
  md: 8px
  lg: 16px
  xl: 32px
  pill: 9999px
  full: 999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.full}"
    padding: 10px 24px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.accent-red-deep}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 10px 18px
    height: 46px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.accent-red-deep}"
  card:
    backgroundColor: "{colors.card-dark}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    boxShadow: rgba(31, 36, 48, 0.1) 0px 18px 42px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Khon Kaen University's English home page (https://www.kku.ac.th/en/) reads as a confident public-university portal rather than a minimal brand site. The first screen is a full-width photographic hero of students working at laptops around a conference table, overlaid with the headline "KKU Lifelong" and the strapline "NEVER STOP LEARNING, NEVER STOP GROWING". Directly under the hero sits a solid terracotta band (#a73b24) holding four expandable links: KKU at a Glance, 4 Strategic Pillars, Next Events and Studying at KKU. Below that the page alternates white and warm-tinted bands (#f1eaea, #f5f0ec) and stacks ranking tiles, a news mosaic, and an events list. The voice is informational and statistic-led: "Khon Kaen University: Top 5% University in the World", "Rank #3 in Thailand | #30 Worldwide", dated news headlines. Photography carries most of the emotion; the interface chrome stays calm and rounded.

The capture also shows a cookie-consent bar floating over the first fold. Its button ("รับทราบ") is a consent control, not brand UI, so this document does not describe it as a component; the brand pill button documented below is the measured "View all news" link.

## Colors

The single brand color is a brick/terracotta red, #a73b24, measured as the fill of the "View all news" and "Read more" pills, the link color and the hairline tint (#a73b241f, the same red at low alpha). A slightly deeper red, #a93622, fills the secondary rectangular "View all events" button and the large "WHAT'S ON @ KKU" heading. Body copy is neutral charcoal #3a3a3a on a white #ffffff canvas; headings inside the dark photo cards and ranking overlays use white.

Supporting neutrals are a muted slate #5d6675 for metadata such as ranking captions, a near-black navy #121827 for strong text, and a dark #111827 fill used by the photo overlay card. Two warm surfaces, blush #f1eaea and sand #f5f0ec, separate page bands without adding a second hue. Text on dark imagery uses white at two alphas: #ffffffeb and #ffffffc9. The Astra theme root variables also expose #F5F5F5, #E5E5E5 and #000000 as global palette slots, but those are theme defaults and not visibly used as brand accents in the capture. A golden yellow appears inside ranking tiles and the footer text (the extraction records #ffcc00 as a child text color); it is not promoted to a token because it is not a reusable surface or action color.

## Typography

Two Thai/Latin families carry the whole site. Kanit (weights 300 to 800 loaded) sets headlines, navigation and buttons; Sarabun (300 to 800) sets body text, links and the secondary button. Prompt and Roboto are also loaded, along with Font Awesome 5 Free for icons and an "Astra" icon font from the WordPress theme.

The measured desktop h1 is Kanit 600 at 28.16px with a 35.2px line height; the mobile pass records the same role at 24px/30px. Card headlines inside the news mosaic use Kanit 500 at 25.6px/32.256px. Section titles such as "WHAT'S ON @ KKU" are far larger, Kanit 800 at 40.96px/47.104px, in the deeper red. Body text is Sarabun 300 at 14px with a 23.1px line height, a light weight that suits Thai script at small size. Links are Sarabun 400 at 16px/26.4px. The primary pill button is Kanit 600 at 20px/24px; the secondary rectangular button is Sarabun 800 at 16px/19.2px.

## Layout

The Astra theme root variables give a normal container width of 1200px and a narrow container width of 750px. The measured page width is 1280px and the page scrolls 4631px tall. The structure is a stack of full-bleed bands: a dark gradient header with utility links (Information for Prospective Students, Current Students, Staff, Alumni, Parents & Families) over a primary navigation (About KKU, Education, Research, Innovation, Admissions, Scholarship, Campus Life, News, Lifelong Learning), then the hero, the red quick-link band, an icon row, a blush band with a large photo card beside two stacked ranking cards, a news section with one large featured photo and three horizontal list cards, a centered pill button, and a framed events panel.

Spacing tokens measured from paddings and gaps run from 4px to 15px in small steps; larger section padding comes from theme variables (for example 5.67em and 2.4em container paddings in the Astra root variables). Content alternates between a two-column split (large image plus narrow column) and full-width lists.

## Elevation & Depth

Depth is soft and diffuse. The most frequent shadows are rgba(30, 26, 23, 0.08) 0px 18px 46px 0px and rgba(31, 36, 48, 0.07) 0px 16px 40px 0px; the dark overlay card uses rgba(31, 36, 48, 0.1) 0px 18px 42px 0px, and one element uses rgba(18, 24, 39, 0.08) 0px 18px 48px 0px. A Tailwind-style double shadow, rgba(0, 0, 0, 0.1) 0px 4px 25px -5px with rgba(0, 0, 0, 0.1) 0px 8px 10px -6px, appears once. On hover the icon-link tiles in the quick-link row change text from #a73b24 to a gold (rgb(203, 154, 52)) and gain a rgba(0, 0, 0, 0.18) 0px 10px 25px 0px shadow. Cards otherwise sit flat on tinted bands with a pale edge.

## Shapes

Measured radii, by frequency: 8px (most common, cards and the secondary button), 6px, 16px (icon-link tiles and larger panels), 999px (pill buttons), 7px, and 32px (used on the cookie button only). The border-radius vocabulary is therefore mostly gentle rounding on containers with fully rounded pills for the primary action. Hairline borders use the brand red at low alpha (#a73b241f); the outlined filter chips use a 1px solid #a73b242e border with an #f8f1ee fill.

## Components

- Primary button: a terracotta pill (#a73b24) with white Kanit 600 text at 20px, padding 10px 24px, height 46px, radius 999px. Measured on "View all news" and "Read more".
- Secondary button: a rectangular #a93622 button with white Sarabun 800 text at 16px, padding 10px 18px, height 46px, radius 8px ("View all events →").
- Chips: Kanit 500 at 16px with #a73b24 text on #f8f1ee, 1px solid #a73b242e border, radius 8px, padding 10px 16px 12px (for example "Academic Excellence & Innovation").
- Cards: a dark #111827 photo overlay card with white text and 8px radius carries the "Rank #3 in Thailand | #30 Worldwide" statement; white ranking tiles carry a year in bold, ranking lines in gray and a yellow underline bar.
- Event rows: a small date block (month abbreviation above a large day numeral) at the left of each row, with a title line and a hairline divider between rows.
- Navigation: white Kanit 600 14px text over the dark gradient header with chevrons marking dropdowns; the red sub-band uses the same chevron pattern.
- Footer: white text on dark ground (body copy color #ffffffeb).

## Design System Architecture

No public design system or brand-guideline page was opened for this document. The site is a WordPress build on the Astra theme, with Elementor global colors (variables such as --e-global-color-astglobalcolor2: #3a3a3a, which equals the measured ink) and Astra variables such as --ast-normal-container-width: 1200px. Brand colors are therefore carried by theme and page-builder globals rather than a tokenized system. The de-facto system is: one red, two warm neutrals, Kanit plus Sarabun, 8px cards and pill buttons.

## Do's and Don'ts

Do use #a73b24 for primary actions, links and the quick-link band, and keep action labels in Kanit 600. Do pair large photography with calm tinted bands (#f1eaea, #f5f0ec) and let statistics lead headlines. Do round cards at 8px and use 999px only for the primary pill.

Don't introduce a second brand hue; the gold in tiles is accent only. Don't use pure black text on the white canvas: body ink is #3a3a3a. Don't treat the cookie consent button as a brand button, and don't use the Arial-based browser default button font for actions: the brand buttons use Kanit or Sarabun. Don't use heavy shadows; the measured shadows are wide and faint.

## Responsive Behavior

The mobile pass (390px) recorded: a visible menu toggle labeled "Main menu toggle", three header links still visible, the h1 reduced to Kanit 600 24px/30px, body text unchanged at Sarabun 300 14px/23.1px, and a card grid maximum of 4 columns measured on that pass. The first mobile band is a 94px white header with a carousel, followed by a media band. Breakpoints, tablet behavior and dark mode were not measured.

## Iteration Guide

1. Start from the white canvas and the #a73b24 band; add warm bands (#f1eaea, #f5f0ec) to separate sections.
2. Set headlines in Kanit 600 (28.16px desktop, 24px mobile) and body in Sarabun 300 at 14px.
3. Build actions as 999px terracotta pills with white Kanit 600 text, 46px high; use the #a93622 8px rectangle for secondary links.
4. Place photographs under white-on-dark overlay cards with 8px radius and an 18px/42px soft shadow.
5. Verify Thai strings render in Kanit/Sarabun before shipping, and re-measure any value not listed here instead of estimating it.
