---
version: alpha
name: "Chipsa"
category: "Agencies & Studios"
description: "Chipsa (chipsa.design), a WebGL and 3D design studio's site: black text on white (#ffffff) and light grey (#f4f4f4), all-caps PPRightGroteskText at weight 800 for the h1 (40px) and h2 (60px) with PPNeueMontreal 500 body at 28px, square-cornered buttons, 6px-radius cards, 1px black underlines and -0.12px tracking throughout."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-grey: "#f4f4f4"
  ink-on-dark-soft: "#ffffffcc"
  glass-card-bg: "#3c3c3c33"
  surface-black: "#111111"
  accent-yellow: "#eeff01"
  accent-green: "#6eff29"
  accent-pink: "#ff4ff8"
  accent-red: "#ff4211"
typography:
  display:
    fontFamily: PPRightGroteskText
    fontSize: 40px
    fontWeight: 800
    lineHeight: 32px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  display-mobile:
    fontFamily: PPRightGroteskText
    fontSize: 32.5882px
    fontWeight: 800
    lineHeight: 26.0706px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  heading:
    fontFamily: PPRightGroteskText
    fontSize: 60px
    fontWeight: 800
    lineHeight: 60px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  subheading:
    fontFamily: >-
      PPNeueMontreal, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 26px
    fontWeight: 700
    lineHeight: 26px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  body:
    fontFamily: >-
      PPNeueMontreal, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30.52px
    letterSpacing: "-0.12px"
  button:
    fontFamily: PPRightGroteskText
    fontSize: 16px
    fontWeight: 800
    lineHeight: 15.2px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  nav:
    fontFamily: >-
      PPNeueMontreal, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 17.5px
    letterSpacing: "-0.12px"
    textTransform: uppercase
  link:
    fontFamily: >-
      PPNeueMontreal, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 21.6px
    letterSpacing: "-0.12px"
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 16px
  xl: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.34px
  s3: 3.64px
  s4: 4px
  s5: 5px
  s6: 5.2px
  s7: 6px
  s8: 7px
  s9: 7.8px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 66px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 22px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.glass-card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
---

## Overview

Chipsa describes itself as "chipsa design studio" and lists "sites / interfaces / branding / cgi" in its header and footer. The home page headline, measured as the h1, reads "WE EVOKE EMOTIONS THROUGH AESTHETICS, WEBGL AND 3D," with the sub-line "Websites, digital spaces, AI and CGI graphics." The studio says "Since 2009" on the home page and about "30 people" on the about page (https://chipsa.design/about), lists clients including LG, McDonald's, iiko, Darkside and Daigo, and shows award counts of CSSDA 35, Behance 11, Awwwards 10 and FWA 1. Its services are Sites, Interfaces, Visuals (labelled "Graphics" in one place) and Spark, a five-day visual concept service. The tone on the home page is confident and playful: "Hi there, wanna talk?", "discuss new project", "join our team," and on the about page "there's work and there's play."

The measured page is 1280px wide and 12,303px tall, with 507 visible elements. The capture shows a light-grey opening screen: a small gold 3D knot logo at the top-left, the h1 stacked on three lines in heavy black capitals, the sub-line in sentence case, four uppercase header links at the right (CASES, ABOUT STUDIO, SERVICES, CONTACTS) and a grey rounded "MENU" button with an × glyph on the left. Beneath is a full-bleed WebGL scene of grey rock-like forms, then a very large statement, "LIVING INTERACTIVE THINGS YOU WANT TO TOUCH AGAIN AND AGAIN," a short paragraph ("We bring ideas and digital solutions to life by turning them into emotions. Because it's emotions that make users trust, engage, and choose.") and a "WATCH SHOWREEL" play button. A white "BEST WORKS" section follows with an underlined "ALL CASES" link; the work thumbnails below it had not rendered in the capture. The design personality is typographic, monochrome and confident: heavy capitals, wide empty margins, and interactive 3D carrying all the visual interest.

## Colors

The base is black on white and light grey. `{colors.canvas}` (#ffffff) is the largest measured background (11,140 area units), `{colors.surface-grey}` (#f4f4f4) follows (4,298) and is the opening screen and statement section in the capture, and `{colors.ink}` (#000000) is both the text color on 1,686 measured characters and a measured background (2,715). `{colors.primary}` is white (#ffffff, the fill of the measured "VIEW DETAILS" button) with `{colors.on-primary}` black text; the brand has no hue-based action color in the measured data. White text appears on 456 measured characters, and `{colors.ink-on-dark-soft}` (#ffffffcc, white at 80%) on 47 more. A translucent grey, `{colors.glass-card-bg}` (#3c3c3c33), fills the large text card whose copy begins "Since 2009, we have achieved c...".

Several saturated colors were measured as backgrounds of elements lower on the page: `{colors.accent-yellow}` (#eeff01, 1,027 area units), `{colors.surface-black}` (#111111, 1,026), `{colors.accent-green}` (#6eff29, 68), `{colors.accent-pink}` (#ff4ff8, 2) and `{colors.accent-red}` (#ff4211, 1). The capture does not show these sections (the lower work area was blank when captured), so their placement is not documented; treat them as the studio's neon accent set, used sparingly. Other translucent backgrounds measured but not tokenized: #8d8d8d33, #ffffff33 and #00000033. The only measured border color is white (#ffffff, 2 elements).

## Typography

Two families, both loaded as web fonts: PPRightGroteskText (weight 800, 376 measured characters) for headings and buttons, and PPNeueMontreal (weights 500 and 700, 1,813 characters) for body, navigation and small text. The stack for PPNeueMontreal continues with system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial and Noto Sans. Almost every size is set uppercase with letter-spacing -0.12px (a few 14px strings measure -0.14px).

- `{typography.display}`: PPRightGroteskText 40px, weight 800, line-height 32px, uppercase: the h1.
- `{typography.heading}`: 60px, weight 800, line-height 60px, uppercase: section titles such as "BEST WORKS".
- `{typography.subheading}`: PPNeueMontreal 26px, weight 700, line-height 26px, uppercase: e.g. "SITES".
- `{typography.body}`: PPNeueMontreal 28px, weight 500, line-height 30.52px: the intro paragraph (sentence case).
- `{typography.button}`: PPRightGroteskText 16px, weight 800, line-height 15.2px, uppercase: buttons and case-card captions.
- `{typography.nav}`: PPNeueMontreal 14px, weight 500, line-height 17.5px, uppercase: header links.
- `{typography.link}`: 12px, weight 500, line-height 21.6px, uppercase: "ALL CASES".

By character count the sizes are 18px (1,108, the card paragraph size), 16px (387), 28px (165), 12px (119), 22px (116), 80px (73), 60px (70), 40px (58), 14px (47) and 26px (40). The 80px size matches the large statement in the capture ("LIVING INTERACTIVE THINGS…"), but the extractor did not isolate it as a role, so its weight and line-height are not recorded; two short strings are also measured at 260px and 200px (2 characters each, content not recorded). Substitutes if the licensed faces are unavailable: a heavy grotesque such as Archivo Black or Anton for PPRightGroteskText and Inter or Helvetica Neue for PPNeueMontreal.

## Layout

The header is 74px tall (declared as `--header-height: 74px`), with 22px of horizontal padding (`--offset-x: 22px`) and four links at the right; the declared grid gap is 10px (`--grid-gap`). Content on the long page sits inside wide side gutters: the "BEST WORKS" title measured 1,236px wide with 155.75px of horizontal padding, and other measured paddings include 556.5px (5 elements), 197.656px (4), 94px (3) and 63px (5). In the capture, text blocks start at a consistent left edge well inside the page and the paragraph and showreel button are pushed to the right half, leaving large empty areas between statements. The most common small paddings are 2.34px (16 elements), 5px, 7px (13 each) and 20px (12). Gaps are mostly 4px (18 elements) and 10px (5).

Case cards are 302px wide and 399px tall (measured on a card with a #f4f4f4 fill and 14px padding); the glass text card is 613px wide and 720px tall. The page alternates grey and white bands, with the WebGL scene running edge to edge.

## Elevation & Depth

No box-shadow was measured. Depth is created by the 3D scene itself, by translucent overlays (the `{colors.glass-card-bg}` card, and white at 20% and 80% alphas), and by the grey-on-white band change. Links are marked with a 1px black underline drawn as a background gradient (`linear-gradient(rgba(0, 0, 0, 0) calc(100% - 1px), rgb(0, 0, 0) 1px)`) rather than a text-decoration; this is measured on the header links and on "ALL CASES."

## Shapes

Edges are mostly sharp or lightly rounded. The measured radii are 6px (29 elements), 4px (16), 50% (7), 16px (4), 2px (3) and 50px (1). The primary "VIEW DETAILS" link has a 0px radius, so it is a flat white rectangle, while the same label as a button element is measured with a 6px radius; case cards and the glass card are 6px. A 50% radius (a fully round shape) is measured on 7 elements, but which ones was not recorded; the capture shows a rounded grey MENU control.

## Components

- **Primary button** (`button-primary`): `{colors.canvas}` fill, `{colors.ink}` text, `{typography.button}`, `{rounded.none}`, 66px tall and 145px wide, label "VIEW DETAILS" broken over two lines.
- **Secondary button**: the same label and type as a button element, 6px radius, padding 12px 12px 8px.
- **Navigation** (`nav`, `nav-link`): transparent header, `{colors.ink}` text, `{typography.nav}`, 0px 22px padding, links with a 1px bottom line.
- **Text link** (`link`): `{typography.link}` in `{colors.ink}`, 1px underline.
- **Case card**: `{colors.surface-grey}` fill, 6px radius, 14px padding, 302px by 399px, with text set in 16px, weight-800 uppercase.
- **Glass text card** (`card`): `{colors.glass-card-bg}` fill, white 18px weight-500 text, 6px radius.
- **Showreel button**: a small grey square with a play triangle and the label "WATCH SHOWREEL" on two lines.

## Design System Architecture

No public design system, brand-guideline page or press kit is linked from the home or about pages (https://chipsa.design/ and https://chipsa.design/about). The de-facto system is the shipped CSS. Of 66 root custom properties, 54 are prefixed `--leva-` (for example `--leva-colors-accent1` #0066dc and `--leva-fonts-mono`); they read as a control-panel theme rather than the site's design and are excluded here. The rest are layout and theme variables: `--header-height` (74px), `--grid-gap` (10px), `--offset-x` (22px), `--offset-bottom` (30px), `--vh`, `--scrollbar-width`, and a light and dark theme pair (`--theme-color` #000 on `--theme-bg-color` #fff; `--theme-dark-color` #fff on `--theme-dark-bg-color` #000, plus `--theme-light-color` and `--theme-light-bg-color`) and a `--theme-gray-color` of #f1f1f1. Typography is set through two font faces without root variables.

## Do's and Don'ts

- Do set headings in heavy uppercase PPRightGroteskText and body in PPNeueMontreal 500 with -0.12px tracking.
- Do keep the page black on white or light grey; let the 3D scene and imagery supply color.
- Do mark links with a 1px black underline and keep buttons flat and square or lightly rounded at 6px.
- Do use very large statements at 80px with generous empty space around them.
- Don't add drop shadows; none were measured.
- Don't add a hue-based brand color to buttons; the measured primary button is white with black text.
- Don't carry the `--leva-` variables into brand tokens.
- Don't assume the neon accents are page-wide; they were measured only on small areas of lower sections.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 40px/32px to 32.5882px/26.0706px, the h2 from 60px to 45.1765px, the paragraph from 28px to 24.2941px, the 26px subheading size to 22.2941px and the 80px statement size to 52.2059px. The 18px, 16px and 22px sizes are unchanged and the "VIEW DETAILS" button keeps its 16px label (line-height 14.4px) and 145px width, 61px tall. The header stays 74px tall at 390px wide, with its text at 12px and 15px of horizontal padding. Breakpoint widths, the menu behavior and the layout of case cards at this width were not measured.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.surface-grey}` bands and `{colors.ink}` for all text.
2. Set the h1 in `{typography.display}`, section titles in `{typography.heading}`, and body in `{typography.body}`; keep all caps and -0.12px tracking.
3. Build buttons flat: white fill, black uppercase 16px weight-800 label, 66px tall.
4. Underline links with a 1px black line, not a text decoration.
5. Leave large empty margins and let a 3D scene or imagery fill the full width.
6. Check any new value against `web/data/extracted/chipsa.json` before adding it.
