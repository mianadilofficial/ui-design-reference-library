---
version: alpha
name: "Fourmula AI"
category: "Tech & AI"
description: "Fourmula AI (fourmula.ai) is an AI product-imagery platform site in near-black #020108 on white #ffffff and grey #f7f7f7 panels, set in SF Pro Display with -2.66px tracking at 88.5981px, a black pill \"Get started\" button that turns orange #ff6b02 on hover, and large 17.72px to 35.44px rounded media cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#020108"
  primary: "#020108"
  on-primary: "#ffffff"
  ink-secondary: "#020108a3"
  ink-muted: "#02010880"
  ink-on-dark-muted: "#ffffff80"
  hairline: "#ffffff33"
  link: "#000000"
  primary-hover: "#ff6b02"
  card-text: "#333333"
typography:
  display:
    fontFamily: "\"Sf Pro Display\", Arial, sans-serif"
    fontSize: 88.5981px
    fontWeight: 400
    lineHeight: 88.5981px
    letterSpacing: "-2.65794px"
  display-mobile:
    fontFamily: "\"Sf Pro Display\", Arial, sans-serif"
    fontSize: 40.3092px
    fontWeight: 400
    lineHeight: 37.8907px
    letterSpacing: "-1.20928px"
  subheading:
    fontFamily: "\"Sf Pro Display\", Arial, sans-serif"
    fontSize: 38.3925px
    fontWeight: 500
    lineHeight: 40.3121px
    letterSpacing: "-1.18131px"
  body:
    fontFamily: "\"Sf Pro Display\", Arial, sans-serif"
    fontSize: 9.45047px
    fontWeight: 500
    lineHeight: 9.45047px
  button:
    fontFamily: "\"Sf Pro Display\", Arial, sans-serif"
    fontSize: 12.5514px
    fontWeight: 400
    lineHeight: 15.0617px
    letterSpacing: "-0.251028px"
  link:
    fontFamily: Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 5.91px
  sm: 17.72px
  md: 23.63px
  lg: 35.44px
  pill: 9999px
spacing:
  s1: 5.91px
  s2: 6.5px
  s3: 7.68px
  s4: 8.86px
  s5: 10.34px
  s6: 11.81px
  s7: 17.72px
  s8: 20.67px
  s9: 23.63px
  s10: 35.44px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10.3364px 17.7196px
    height: 35px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
  card:
    textColor: "{colors.card-text}"
    borderColor: "{colors.canvas}"
---

# Fourmula AI

Measured from https://fourmula.ai/ (page title "AI Product Generation — Fourmula.ai", lang en; Webflow-style root variables). The page is 8788px tall and shows a fashion and product catalog being "re-shot" by AI. Consent overlays and the menu overlay were detected and hidden by the extractor (`consentOverlaysHidden`: cookies, menu). A black "Site of the Day" award badge at the right edge of the capture is a third-party widget, not brand UI.

## Overview

The first screen shows the logo mark at top left, a dark pill menu in the center (Menu, a theme toggle icon and a "0%" loader chip), a round account button and the black "Get started" pill at top right. In the middle a ring of rounded-square portrait photographs of models and garments surrounds a dashed upload tile labelled "Upload or drop your assets". The hero line is "Your catalog, instantly re-shot." in near-black with the second line in grey. "©2026" and "SCROLL DOWN" sit in the bottom corners.

The opened page lists these sections: "What you can do" with "On-brand visuals. Made by AI.", "AI Fashion Photoshoot" with "Studio-quality, without the studio.", "AI Product Shots" with "Your product, new scenes on demand.", "AI Video Production" with "Campaign-ready video in minutes.", "How It Works" with "From idea to assets in four steps.", "Trusted By" and "FAQs" with "Not AI-gen answers. Real ones here." The top menu items are PDP's, Products, Videos and Our features; the footer links are Privacy Policy, Terms of Service and Cookie Policy. The voice is crisp and benefit-led, with short parallel sentences ("Studio-quality, without the studio.").

## Colors

Measured background areas: #f7f7f7 (weight 3554, the rounded panels), #ffffff (1451), #020108 (105, the button and dark product-UI frame). Text colors by characters: #020108 (864), #ffffff (300), #020108a3 (265, 64% ink), #02010880 (186, 50% ink) and #ffffff80 (134).

- **canvas #ffffff**, **page-largest #f7f7f7** (panels and cards).
- **ink and primary #020108**: a near-black with a blue-violet cast; **on-primary #ffffff**.
- **ink-secondary #020108a3** and **ink-muted #02010880**: the grey second line of the hero and captions; **ink-on-dark-muted #ffffff80**.
- **hairline #ffffff33**: a thin line color on dark.
- **link #000000**: the logo link; **card-text #333333**.
- **primary-hover #ff6b02**: the hover fill of the "Get started" button (measured: rgb(255, 107, 2) in the hover record). The same orange appears on the "Add angle" and download controls in the embedded product screenshot.

Root variables define dark-mode style tokens too: `--mainbg` #020108, `--secondbg` #111, `--menu` #272727, `--lines` #2a2a30, `--dots-pattern` #1a1a1a, `--fonts-100` white, `--fonts-64` #ffffffa3, `--fonts-50` #ffffff80, `--fonts-30` #ffffff4d, `--fonts-20` #fff3 and `--menu-colors` #fff3. The theme toggle in the menu pill exists in the capture; the dark theme itself was not measured.

## Typography

SF Pro Display (weights 400 and 500) with Arial as fallback. SF Pro is Apple's typeface and is not licensed for general web distribution outside Apple platforms; Inter or a system sans-serif is the generic stand-in, with different letterforms.

- **display**: 88.5981px, weight 400, line-height 88.5981px (1.0), letter-spacing -2.65794px (-3%). Section headlines such as "On-brand visuals. Made by AI."
- **display-mobile**: 40.3092px, weight 400, line-height 37.8907px, letter-spacing -1.20928px: the mobile h1 "Your catalog, instantly re-shot."
- **subheading**: 38.3925px, weight 500, line-height 40.3121px, letter-spacing -1.18131px, for "Studio-quality, without the studio."
- **body**: 9.45047px, weight 500, line-height 9.45047px: the tiny caption "Upload or drop your assets".
- **button**: 12.5514px, weight 400, line-height 15.0617px, letter-spacing -0.251028px.
- **link**: Arial 12.8px, weight 400, line-height 20px.

The root declares a type scale in rem: `--_fonts---h2` 7.5rem, `--_fonts---h1` 5.5rem, `--_fonts---h2-5` 4rem, `--_fonts---h3` 3.25rem, `--_fonts---h4` 2.25rem, `--_fonts---title-3` 1.5rem, `--_fonts---body-3` 1.25rem, `--_fonts---body-1` 1.125rem, `--_fonts---btn` 1.0625rem, `--_fonts---body-2` 1rem, `--_fonts---small-text-1` .75rem, `--_fonts---small-text-2` .625rem. The rendered sizes are scaled from these. Size frequencies by characters: 10.3364px (453), 11.8131px (413), 17.7196px (213), 14.7664px (197), 12.5514px (126), 88.5981px (103), 13.2897px (96), 38.3925px (91).

## Layout

The page alternates a hero, a two-column "What you can do" block (a narrow label column with a vertical divider, then the large headline) and wide rounded grey panels that each hold a product demonstration: a black product screenshot beside a source garment, a row of product-shot images, and a video panel. Padding by frequency: 23.6262px (50), 17.7196px (22), 20.6729px (8), 59.0654px (6). The spacing tokens carry 5.91px, 6.5px, 7.68px, 8.86px, 10.34px, 11.81px, 17.72px, 20.67px, 23.63px and 35.44px; most are multiples of 5.9065px, so the layout appears to be built on a scaled unit.

## Elevation & Depth

No box shadows were measured. Panels rest on white by a tone shift (#f7f7f7 on #ffffff). The dark pill menu and the dark product UI frame add contrast against the light page. One card image carries a 1px solid #ffffff border.

## Shapes

Radii: 50% (728 elements: round chips, dots and avatars), 5.90654px (20), the pill value 1169.5px (10: buttons and the account chip), 17.7196px (5), 35.4393px (4), 23.6262px (1) and several asymmetric combinations (for example "0px 17.7196px 17.7196px 0px"). Images of the model ring are rounded squares. The primary button is a full pill.

## Components

- **button-primary**: "Get started", fill #020108, text #ffffff, 12.5514px, padding 10.3364px 17.7196px, height 35px, width 91px, pill radius. On hover the fill becomes #ff6b02 (hover recorded with text staying white).
- **menu pill**: a dark capsule with the label "Menu", a theme icon and a "0%" chip, centered in the header.
- **upload tile**: a rounded outlined square with a paperclip glyph and the caption "Upload or drop your assets".
- **card**: rounded panel #f7f7f7, text #333333, large radius (17.72px to 35.44px), containing a label such as "AI Fashion Photoshoot" at tiny size.
- **round account link**: 47px circle, white fill, radius 50% scale.

## Design System Architecture

No public design system or brand guideline is published: the opened page links only to legal pages and an Awwwards listing. The shipped CSS exposes a clear de-facto system through root custom properties, namely `--_fonts---*` type sizes in rem, `--_font-family---font-family` ("Sf Pro Display", Arial, sans-serif), weights `--_font-family---regular` 400 and `--_font-family---medium` 500, and a set of `--fonts-*` opacity steps of white. Source page: https://fourmula.ai/.

## Do's and Don'ts

- Do set headlines at 88.5981px with -3% tracking and line-height equal to the size.
- Do use the near-black #020108 for text and the one pill button, and orange #ff6b02 only as the hover state.
- Do present products in rounded panels (#f7f7f7) with real model and product photography.
- Do write short parallel sentences with full stops.
- Don't add shadows; none are measured.
- Don't treat the Awwwards badge or cookie banner as brand UI.
- Don't use Arial for display text; it appears only on the link role.

## Responsive Behavior

The mobile pass recorded: the h1 "Your catalog, instantly re-shot." at 40.3092px with line-height 37.8907px and tracking -1.20928px; the h2 at 36.2783px with line-height 36.2783px; caption text at 8.86803px; the "Get started" button text at 17.1314px with line-height 20.5577px and tracking -0.342629px. Mobile size frequencies: 14.1082px (718 characters), 16.1237px (654), 17.1314px (106), 36.2783px (103), 24.1855px (91), 40.3092px (29). Layout and breakpoints were not measured.

## Iteration Guide

1. Start from canvas #ffffff, panels #f7f7f7 and ink #020108.
2. Set display text at 88.5981px/1.0 with -2.65794px tracking; second lines in #020108a3.
3. Use a single black pill button at 35px height and orange #ff6b02 on hover.
4. Frame each capability in a rounded panel with a tiny label and a product image or UI screenshot.
5. Keep corners soft (17.72px to 35.44px) and shadows absent.
6. Measure any new page before adding tokens.
