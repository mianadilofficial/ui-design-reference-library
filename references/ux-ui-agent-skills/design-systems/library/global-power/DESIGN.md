---
version: alpha
name: "Global Power Synergy Public Company Limited (GPSC)"
category: "Thai Brands"
description: "GPSC corporate site, a Thai energy utility: white #ffffff canvas with #3b3b3b ink, cyan #00adee accent and outlined 3px buttons, navy #1e325a footer, Mulish at 49px weight 300 uppercase for the hero and 21px body, with full-bleed photography and four-up statistic panels."
colors:
  canvas: "#ffffff"
  ink: "#3b3b3b"
  primary: "#00adee"
  black: "#000000"
  navy-footer: "#1e325a"
  ink-bootstrap: "#212529"
  on-dark-soft: "#ffffffa6"
  on-dark-muted: "#ffffff9c"
  hairline: "#00000033"
typography:
  display:
    fontFamily: Mulish, Prompt
    fontSize: 49px
    fontWeight: 300
    lineHeight: 58.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: Mulish, Prompt
    fontSize: 44.1px
    fontWeight: 300
    lineHeight: 52.92px
    textTransform: uppercase
  subheading:
    fontFamily: Mulish, Prompt
    fontSize: 26px
    fontWeight: 700
    lineHeight: 31.2px
  body:
    fontFamily: Mulish, Prompt
    fontSize: 21px
    fontWeight: 400
    lineHeight: 31.5px
  link:
    fontFamily: Mulish, Prompt
    fontSize: 13px
    fontWeight: 600
    lineHeight: 19.5px
    textTransform: uppercase
  button-secondary:
    fontFamily: Mulish, Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4.8px
  pill: 9999px
spacing:
  s1: 12px
  s2: 15px
  s3: 16px
  s4: 20px
  s5: 30px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 100px
  s10: 160px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 30px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.black}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.navy-footer}"
    textColor: "{colors.on-dark-muted}"
---

## Overview

Global Power Synergy Public Company Limited (GPSC, gpscgroup.com/en) is a Thai power and utilities company whose home page is a long corporate and investor-relations page. The measured page starts with a full-screen hero showing a dark blue technology illustration, the carousel headline "SMART POWER" in thin uppercase, a label "OUR BUSINESS", a sentence about cutting-edge technologies for electricity and utilities in the "New S-Curve industry", three pagination bars and a round share-price badge reading "GPSC 51.00 THB". An announcement pop-up about a shareholders site visit overlays the capture; it is a notice, not brand UI, and is not documented as a token. After a tall empty band (content that had not rendered at capture), the page continues with "INNOVATIVE AND SUSTAINABLE POWER FOR ALL", a cyan sub-label "TOTAL COMMITTED EQUITY CAPACITY (As of April 2026)", a four-panel statistics block (electricity 13,666 MW, steam 3,294 T/H, industrial water 7,689 Cu.m./hr, chilled water 10,896 RT, ESS battery 555 MWh), "OUR BUSINESS" with three photographic tiles, a "SUSTAINABILITY" band over a forest photograph, a "CAREER OPPORTUNITIES" block, a "WHAT'S NEW" row of three news cards, and a navy footer with the GPSC logo, address, contact details and link columns.

Red and blue curved swooshes, taken from the logo, appear as decorative corner shapes between sections. The voice is institutional and factual: sentence-case paragraphs, uppercase section titles, units with every figure.

## Colors

- **Canvas** `#ffffff` is by far the largest background (11334 area units).
- **Ink** `#3b3b3b` is the main text on white (1645 characters); `#212529` is the Bootstrap body color (489 characters).
- **Primary** `#00adee`, a cyan, is the measured accent for section labels, "VIEW ALL" links, circular arrow icons, the outlined "JOIN THE TEAM" button and its border (283 characters).
- **Navy footer** `#1e325a` (737 units) fills the footer; **black** `#000000` (1024 units) is the hero and image-overlay background.
- **On-dark text**: white `#ffffff` (1465 characters) plus translucent whites `#ffffffa6`, `#ffffff9c` and `#ffffffd4` on the hero and footer; the footer text is `#ffffff9c`.
- **Hairline** `#00000033` is the border color of cards; `#9d9ea0` is a measured grey text.

The root variables include Bootstrap's `--primary` `#007bff`, `--success`, `--danger` and others; these are framework defaults, not GPSC brand colors, and are not used as tokens.

## Typography

Mulish is the family (4419 characters; loaded at 300, 400, 600 and 700), with Prompt named as the Thai fallback in the stack and Font Awesome 5 and icomoon icon fonts. Weights by character: 700 (2616), 400 (1700), 600 (59), 300 (44).

- **Display**: Mulish 49px, weight 300, line height 58.8px, uppercase (44.1px, line height 52.92px on the mobile pass).
- **Subheading**: 26px, weight 700, line height 31.2px.
- **Body**: 21px, weight 400, line height 31.5px (18.9px on mobile).
- **Link**: 13px, weight 600, line height 19.5px, uppercase.
- **Button-secondary**: 16px, weight 400, line height 24px, uppercase.

Other desktop sizes by character: 18px (1834), 16px (1138), 13px (344), 32px (272), 24px (188) and 12.8px (93). The heading contrast between a thin 300 display and bold 700 subheadings is a signature of the page.

## Layout

The page is 1280px wide and 7308px tall. The hero is full bleed with text anchored at the lower left and the stock badge at the lower right. Sections use a wide container with a two-column intro (title left, paragraph and "VIEW ALL" right), a four-panel statistics grid with an illustration of a pylon at the left, three full-bleed photographic tiles with white captions, an overlapping photo and text band for sustainability, and a three-column news row. Spacing steps measured: 12, 15, 16, 20, 30, 32, 40, 48, 100 and 160px. The Bootstrap breakpoints in the root are 576px, 768px and 992px.

## Elevation & Depth

One shadow is measured: `rgba(0, 0, 0, 0.3) 0px 3px 6px 0px`, used once. Cards use a thin hairline border instead. Depth otherwise comes from photographic overlays, translucent white text and overlapping images.

## Shapes

Radii: 50% (5 uses, circular icon buttons and the stock badge), 3px (2) and 4.8px (1). Tokens: `xs` 3px, `sm` 4.8px and `pill` 9999px. The outlined button has 3px corners and cards 4.8px.

## Components

- **Secondary (outlined) button**: transparent fill, `#00adee` text and 1px `#00adee` border, Mulish 16px uppercase, padding 12px 30px, 50px high, 3px radius ("JOIN THE TEAM").
- **Link**: 13px uppercase semibold ("VIEW ALL", "IR HOME") with a round cyan arrow icon.
- **Card**: white, 4.8px radius, hairline border `#00000033`, used for news items.
- **Statistics panel**: an isometric illustration, a cyan figure and unit, and a dark label.
- **Stock badge**: a translucent round badge with the ticker and price.
- **Footer**: `#1e325a` background, `#ffffff9c` text, logo, address, email, phone and fax, link columns (Home, About Us, Our Business, Sustainability, Investor Relations, News & Media, Corporate Governance, Career, Contact Us, Cookies Policy, Data Privacy) and a related-sites column.

## Design System Architecture

No public GPSC design system or brand guideline was found; the measured page links to none. The CSS is Bootstrap 4 based (the root exposes `--primary`, `--breakpoint-sm`, `--breakpoint-md`, `--breakpoint-lg`, `--font-family-sans-serif` and the standard color names) with a site layer on top: Mulish and Prompt typography, a cyan accent, thin uppercase display type and Font Awesome Pro icons. The brand system is de-facto: one family, one accent, a navy footer and logo-derived swooshes.

## Do's and Don'ts

- Do use cyan `#00adee` for labels, links and outlined buttons on white.
- Do set titles in Mulish at weight 300 uppercase, subheads at 700.
- Do pair every statistic with its unit and an isometric illustration.
- Do end pages with a `#1e325a` footer in `#ffffff9c` text.
- Don't use Bootstrap's `#007bff` as a brand color.
- Don't document the announcement pop-up or its scrim as brand UI.
- Don't add filled buttons; the measured button style is outlined.

## Responsive Behavior

The mobile pass at 390px recorded: h1 "SMART POWER" at 44.1px weight 300 (360px wide, 53px high), body text at 18.9px weight 400 (360px wide), and a nav item "TH" at 9.9px weight 700. Mobile sizes by character are 16.2px (1602), 14.4px (1138), 18.9px (478), 11.7px (308), 28.8px (272) and 21.6px (188); they are 0.9 of the desktop sizes in each pair above. No mobile column counts or menu behavior were recorded.

## Iteration Guide

1. Start on `{colors.canvas}` with `{colors.ink}` text and add photography in full-bleed tiles.
2. Use `{typography.display}` over dark imagery and `{typography.subheading}` on white.
3. Use `{components.button-secondary}` for actions and cyan links for navigation to more content.
4. Close with the navy footer.
5. Run `node web/scripts/verify-designs.mjs --slug=global-power` after changes.

Imagery and microcopy: the full-page capture shows industrial and nature photography (a combined-cycle power plant at dusk, a hydro dam among green hills, transmission towers at sunset), a candid group of schoolchildren with a laptop outdoors for sustainability, an office team around a table for careers, and press photographs of signing ceremonies in the news cards. Titles are uppercase ("OUR BUSINESS", "WHAT'S NEW", "THOSE WHO BELIEVE IN THE COMPANY'S SUCCESS AND SHARE ITS VALUES"), news cards carry a date and category tag ("PR NEWS", "CSR NEWS") in cyan, and each card ends with a small circular arrow. Sentences describe commitments in the present tense ("Committed to management of human rights throughout the value chain").
