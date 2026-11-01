---
version: alpha
name: "Somboon Advance Technology (SAT)"
category: "Thai Brands"
description: "Somboon Advance Technology (SAT) is a Thai automotive and agricultural parts maker listed on the stock exchange; its measured home page is a corporate site in Roboto Condensed with a navy primary (#102241), white canvas (#ffffff), uppercase 14px square buttons with a hard 5px offset shadow and a stock ticker in the header."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#102241"
  on-primary: "#ffffff"
  surface-2: "#eeeeee"
  ink-3: "#ffffffcc"
  ink-4: "#ffffff80"
  ink-5: "#0f1176"
  nav-link-text: "#000000e6"
typography:
  display:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 26px
    fontWeight: 300
    lineHeight: 31.2px
  heading:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 43.2px
    textTransform: uppercase
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.8px
    textTransform: uppercase
  nav:
    fontFamily: "\"Roboto Condensed\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 4.8px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 5.6px
  s3: 8px
  s4: 8.8px
  s5: 13.6px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 32px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13.6px 56px
    height: 44px
    boxShadow: rgba(0, 0, 0, 0.85) 5px 5px 5px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Somboon Advance Technology (SAT)

## Overview

This file documents the measured home page of Somboon Advance Technology (satpcl.co.th/en/home), titled "Somboon Advance Technology (SAT)". The queued URL, the site root, opened on a memorial splash page (a tribute to the late King Bhumibol Adulyadej, with a portrait, Thai text, a gold "Enter Site" button and a warm gold wash) whose only styling is that one-off tribute treatment. That splash is not the brand's everyday design, so the splash page was skipped and the real home page behind its "Enter Site" link (/en/home) was re-measured. The measured site is the company's own, so the name is the company's.

The home page is a corporate investor-oriented site. The header is a white bar 83px tall with the SAT logo at the left (a blue bell-shaped emblem above the words "SOMBOON ADVANCE TECHNOLOGY"), a live stock ticker in navy ("SAT 16.00 THB -0.10(-0.62%)"), links "Careers" and "Contact Us", and the main navigation: a home icon, ABOUT US, PRODUCTS, R&D AND TESTING LABORATORY, INVESTOR RELATIONS, CORPORATE GOVERNANCE and SUSTAINABILITY, plus a navy "TH" language chip. The menus open into long lists (Company Profile, Business Philosophy, Vision & Mission, Board of Director, Executive Team, Awards & Recognitions; Product Showroom with Automotive Machinery, Agricultural Machinery and E-Mobility lines; IR Home, Fact Sheet, Financial Information, Stock Information, Shareholder Information, IR Calendar; CG Policy; Sustainability Report; Available Positions and Our Culture).

The page is a full-screen slide experience: scrollHeight measured 800px and a column of dot indicators runs down the right edge. The hero slide is a blurred industrial photograph with a light-weight statement starting "…over 55 years of experience in the auto…". A later block has the heading "WHAT'S NEWS" and a footer with "Copyright © 2019, Somboon Advance Technology". The capture shows a dark-blue announcement modal ("Proposal of the 2027 Annual General Shareholder's Meeting agenda and name of Director Nominees in advance" with a white "More Details" button) over the hero; it is a temporary notice and is not documented as brand UI.

## Colors

- **Canvas `#ffffff`**: header, footer text and content backgrounds (211 weight).
- **Ink `#000000`**: the main text color (467 characters); the nav-link color is `#000000e6`.
- **Primary `#102241`**: a deep navy. It fills the "DISCOVER MORE" button and the footer bar (217 weight), and also appears as text (44 characters). On-primary is `#ffffff`.
- **Surface-2 `#eeeeee`**: the light grey section background (614 weight).
- **Ink-5 `#0f1176`**: a saturated indigo used on the stock ticker, the TH chip and header text (93 characters).
- **Ink-3 `#ffffffcc` and ink-4 `#ffffff80`**: translucent white text over dark photography (260 and 129 characters).

The measured background list also contains `#00143b73` and `#000000` at 1024 weight each, and `#d9d9d9`. The first two are the notice modal's scrim and backdrop and are not brand colors. The stylesheet exposes Bootstrap's default `--primary: #007bff`, which is a framework default, not a SAT color; it is not used.

## Typography

**Roboto Condensed** (weights 300, 400, 700 loaded) is the brand face for nav, headings and buttons (1503 characters); body text falls back to the Bootstrap system stack `-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif` (445 characters). Icon fonts Font Awesome 5 Pro and a custom "satpcl" glyph font are loaded.

| Role | Family | Size / line-height | Weight | Notes |
|---|---|---|---|---|
| display (hero statement) | Roboto Condensed | 26px / 31.2px | 300 | white on photography |
| heading ("WHAT'S NEWS") | Roboto Condensed | 36px / 43.2px | 700 | uppercase, color `#212529` |
| body | system stack | 16px / 24px | 400 | |
| button | Roboto Condensed | 14px / 16.8px | 400 | uppercase |
| nav | Roboto Condensed | 20px / 30px | 400 | color `#000000e6` |

Size ladder by characters: 16px (1055), 14px (484), 20px (121), 12.8px (80), 26px (72), 18px (66), 36px (29), 65px (27). Weight 400 carries 1510 characters, 700 carries 300, 500 carries 68 and 300 carries 67. A 13px label with 2px letter-spacing is measured on 13 characters. The Thai pages load a family of Thai faces from fonts.21impact.com (PSL, TF, TH Sarabun New, Kanit, Prompt, IBM Plex Sans Thai); on the memorial splash the text was PSL Kanda Modern Extra Pro, which belongs to that splash, not the home page.

## Layout

The container is a Bootstrap-style grid: the heading and hero statement are 1110px wide inside the 1280px viewport. The header is 83px tall; the footer bar is 60px tall with 60px line-height. Paddings measured: 15px (53 uses), 16px (18), 32px (10), 5.6px (7), 72px (3), 13.6px (3), 56px (3), 20px (2). The spacing scale generated is 5, 5.6, 8, 8.8, 13.6, 15, 16, 20, 32 and 50px. Sections are full-viewport slides navigated by dot indicators on the right edge; the "WHAT'S NEWS" block sits in a light grey band.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.85) 5px 5px 5px 0px` on the primary button, a hard offset shadow, and `rgba(0, 0, 0, 0) 0px 5px 15px 1px` on three elements (invisible, fully transparent color). Depth otherwise comes from navy overlays and blur on photography and from the white header resting above the hero.

## Shapes

Buttons and nav are square (0px radius). Other measured radii are 4.8px (1 element), 50% (1) and 100% (1), which are circles for icon or indicator dots, tokenized as pill 9999px.

## Components

- **button-primary**: `#102241` fill, white text, Roboto Condensed 14px uppercase, 0px radius, 13.6px 56px padding, 44px tall, hard shadow `rgba(0, 0, 0, 0.85) 5px 5px 5px 0px` ("DISCOVER MORE").
- **button-outlined**: transparent fill, 1px solid `#ffffff` border, white text, same type, 46px tall.
- **nav**: white header, `#0f1176` ticker and chip text, 20px nav links with 5px vertical padding.
- **link**: 16px system-stack black text.
- **footer**: `#102241` bar, white 14px text, 60px tall.
- **dot indicator**: round slide markers at the right edge (shape from the 50% and 100% radii).

## Design System Architecture

No public design system or brand guideline was found; the home page HTML opened links only to its own sections. The de-facto system is Bootstrap 4 (the stylesheet variables `--font-family-sans-serif`, `--font-family-monospace` and `--primary: #007bff` are Bootstrap's defaults, which the site overrides with navy in its components), a custom icon font "satpcl", Font Awesome 5 Pro and Thai web fonts served from fonts.21impact.com. Reference: https://www.satpcl.co.th/en/home

## Do's and Don'ts

- Do use `#102241` for primary actions and the footer, with white text.
- Do set navigation and buttons in Roboto Condensed; uppercase 14px for buttons.
- Do keep corners square and use the hard offset shadow only on the primary button.
- Do not use Bootstrap's `#007bff`; it is a framework default, not the brand color.
- Do not reuse the gold memorial-splash styling or the PSL Kanda face for the home page.
- Do not document the shareholder-meeting modal or its scrim as brand UI.

## Responsive Behavior

The 390px mobile pass measured: the hero statement stays 26px/300 (62px tall in a 360px width); body text stays 16px/24px; the "DISCOVER MORE" button keeps 14px type, 44px height, 206px width and the same shadow; the mobile size ladder is 16px (1148 characters), 14px (190), 13.6px (132), 20px, 26px, 18px, 36px, 12.8px, 48px and 13px. The nav and slide layout at mobile width were not measured.

## Iteration Guide

1. Use white and `#eeeeee` surfaces with `#000000` text and `#102241` for actions and footer.
2. Use Roboto Condensed for brand text; reserve 36px/700 uppercase for section titles.
3. Keep buttons square with a 5px hard shadow only for the main action.
4. Show the stock ticker in `#0f1176` in the header.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=somboon-advance-technology --url=https://www.satpcl.co.th/en/home --force --no-motion`.
