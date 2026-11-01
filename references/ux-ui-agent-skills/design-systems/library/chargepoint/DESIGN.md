---
version: alpha
name: "ChargePoint"
category: "Energy & Climate"
description: "ChargePoint's EV-charging marketing site: a white canvas with charcoal-plum ink (#413d46), a deep ocean-blue pill CTA (#0f588a, 50px radius), orange (#ff7a14) pattern heroes and plus-sign bullets, set entirely in Gotham Narrow SSm at light weight 300, with 16px soft-shadowed cards."
colors:
  canvas: "#ffffff"
  ink: "#413d46"
  primary: "#0f588a"
  on-primary: "#ffffff"
  surface-subtle: "#fbfcfd"
  surface-section: "#f6f8f9"
  ink-muted: "#555555"
  link-blue: "#0076a8"
  text-input-bg: "#f7f7f7"
  footer-border: "#f3f3f3"
  accent-orange: "#ff7a14"
  accent-tomato: "#e75516"
  surface-aqua: "#e7f6fd"
  sky-blue: "#95d4e9"
  highway-green: "#126636"
  amber-yellow: "#fcb315"
  deep-plum: "#453348"
  line: "#dbe5ee"
typography:
  display:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
  display-mobile:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 22.5px
    fontWeight: 400
    lineHeight: 24.75px
  heading:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 31.2px
  subheading:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 13.6px
    fontWeight: 400
    lineHeight: 17.68px
    letterSpacing: 1.2px
    textTransform: uppercase
  button:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 22.8571px
  nav:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 17.1429px
    textTransform: uppercase
  link:
    fontFamily: "\"Gotham Narrow SSm A\", \"Gotham Narrow SSm B\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.1429px
rounded:
  xs: 3px
  sm: 16px
  md: 32px
  lg: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.6px
  s3: 2px
  s4: 3.2px
  s5: 4px
  s6: 6px
  s7: 8px
  s8: 10px
  s9: 11.2px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 7.2px 21px
    height: 37px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 32px 0px 11.2px
    height: 41px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(50, 50, 93, 0.1) 0px 13px 27px -5px, rgba(0, 0, 0, 0.1) 0px 8px 16px -8px
  footer:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-muted}"
    padding: 64px 0px 0px
    borderColor: "{colors.footer-border}"
---

## Overview

ChargePoint's home page presents the company as an "all-in-one partner in EV charging." The page the extractor measured (https://www.chargepoint.com/, title "EVSE | Electric Vehicle (EV) Charging Stations | ChargePoint") opens with a full-width orange hero banner: a repeating white plus-sign pattern fades into a dark gradient at the bottom, and the white headline "Your all-in-one partner in EV charging" sits on top with the sub-line "Deploy a charging solution that fits your organizational goals." Below the hero the page is a calm, mostly white and pale-grey editorial layout: small uppercase eyebrow labels ("WHAT WE DO", "HOW WE WORK WITH YOU") with orange arrow and lightning-bolt icons, large light-weight paragraphs, one blue pill button, a circuit-board line illustration with orange plus nodes, and a soft-shadowed product photo of a man at a dashboard.

The visual personality is therefore two registers in one system: an energetic orange brand moment at the top, and a restrained corporate-technology reading surface everywhere else. The plus sign is the recurring brand motif; it appears in the logo lockup, the hero pattern, the circuit illustration and the orange list bullets in the "Innovation at our core" section. The copy voice, confirmed on https://www.chargepoint.com/about, is confident and plainspoken, with taglines such as "We're the best at EV charging" and a stated value of "Relentlessly pursue awesome." The about page lists audiences ranging from EV drivers to businesses, fleets, cities and utilities, and partners, which explains why the home page speaks to organizations first and offers a single action, "Connect With an Expert."

## Colors

The page is white. The measured canvas is `{colors.canvas}` (#ffffff, the largest background area), and long reading sections alternate with two very pale cool greys, `{colors.surface-subtle}` (#fbfcfd) and `{colors.surface-section}` (#f6f8f9), which fill the alternating bands (the measured footer background is #fbfcfd). A pale aqua, `{colors.surface-aqua}` (#e7f6fd), covers a smaller share of the page area.

Text is dark plum-grey rather than black: `{colors.ink}` (#413d46) accounts for the vast majority of measured characters, with `{colors.ink-muted}` (#555555) for secondary copy such as the footer. Two blues carry action and emphasis. `{colors.primary}` (#0f588a) is the fill of the measured primary button and also the color the main navigation items turn to on hover; `{colors.link-blue}` (#0076a8) is a second, brighter blue used for text. The brand orange, `{colors.accent-orange}` (#ff7a14), is declared in the site's root variables as the ChargePoint orange and appears as a measured background color; the capture shows an orange hero and orange plus bullets, so it is a decorative and wayfinding accent; the measured button fill is blue. `{colors.accent-tomato}` (#e75516) is its darker sibling in the same variable set.

The site also declares a wider named palette in its stylesheet: sky blue `{colors.sky-blue}` (#95d4e9), highway green `{colors.highway-green}` (#126636), amber yellow `{colors.amber-yellow}` (#fcb315), deep plum `{colors.deep-plum}` (#453348) and a hairline `{colors.line}` (#dbe5ee). These are recorded as available brand colors; the measured home page text and fills do not use them prominently, so treat them as secondary accents for charts, status or product pages rather than primary surfaces. The input field is filled with `{colors.text-input-bg}` (#f7f7f7) and the footer is separated by a `{colors.footer-border}` (#f3f3f3) rule.

## Typography

One family carries the entire page: Gotham Narrow SSm A, declared in the font stack with Gotham Narrow SSm B as the next face and generic sans-serif as the last fallback. The extractor recorded it at 100% of measured characters. The loaded faces are 300, 400 and 500 (shared), and 700, and the weight distribution is overwhelmingly light: weight 300 covers 5,649 measured characters against 418 at 400, 48 at 500 and 6 at 700. Light weight is the signature; even the 24px paragraph copy and the button label are 300.

- `{typography.display}`: 48px, weight 400, line-height 52.8px, used for the hero h1 in white.
- `{typography.display-mobile}`: 22.5px, weight 400, line-height 24.75px, the same h1 measured at the 390px viewport.
- `{typography.heading}`: 24px, weight 300, line-height 31.2px, the hero sub-line (an h2).
- `{typography.subheading}`: 13.6px, weight 400, line-height 17.68px, letter-spacing 1.2px, uppercase; the small tracked label style (for example "GET THE APP" in the footer).
- `{typography.button}`: 16px, weight 300, line-height 22.8571px, for buttons and inputs.
- `{typography.nav}`: 12px, weight 300, uppercase, for the top utility links such as SHOP and FIND STATIONS.
- `{typography.link}`: 12px, weight 400, for link text.

The measured paragraph role is 24px at weight 300 with a 30.4px line-height in #413d46, and the most common sizes by character count are 24px (2,381), 16px (2,343), 20px (397), 15.2px (253), 13.6px (233) and 12px (212). Section headings in the capture (for example "Innovation at our core" and "End-to-end reliability") are set in sentence case, not uppercased. Font substitutes if the licensed face is unavailable: any narrow humanist or geometric sans with a true light weight, such as Barlow Semi Condensed at 300 or Montserrat at 300 with slightly tighter tracking; no open-source release or license for Gotham Narrow SSm was found on the pages opened.

## Layout

The stylesheet declares a container width of 1420px (`--container-width`), a section padding of 6rem, a base gap and grid gap of 2rem, a base padding of 1.5rem and a table-cell padding of 4rem. The measured page is 1280px wide and 8,570px tall at desktop. The most common measured gaps are 24px, 64px, 8px and 80px, and the most common paddings are 32px, 3.2px, 16px, 12px and 24px.

The visible structure is a two-row header (a thin utility row with SHOP, FIND STATIONS and three small icons above a main row with the logo, five dropdown menus labelled Industries, Products, Partners, Drivers and Resources, and an outlined "Connect With an Expert" pill at the far right), a full-bleed hero, then alternating full-width bands. Content bands in the capture use a two-column split: copy on the left, imagery or the circuit illustration on the right. Bullet lists in the "Innovation at our core" band use orange plus markers. A testimonial card (customer logo, quote, name and title) floats in the left column. A round chat launcher button sits at the right edge of the viewport; it is a third-party-style support widget and is not part of the brand layout.

## Elevation & Depth

Depth is soft and cool-tinted. Cards carry the stylesheet's medium shadow, `rgba(50, 50, 93, 0.1) 0px 13px 27px -5px, rgba(0, 0, 0, 0.1) 0px 8px 16px -8px`, which was measured on three testimonial cards. A larger shadow, `rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px`, was measured once, and the root variables also declare a small shadow, `0 2px 10px 0 rgba(0,0,0,0.10)`. All three are declared as `--box-shadow-sm`, `--box-shadow-md` and `--box-shadow-lg`. There are no hard borders on cards; separation comes from the shadow plus the pale grey band behind them. The footer is the exception, with a 2px solid `{colors.footer-border}` rule.

## Shapes

Radii are generous and consistent with the stylesheet's `--border-radius: 1rem`. The measured radius frequencies are 16px (33 elements), 50px (9), 3px (3), 100% (3), a 0 0 16px 16px bottom-only rounding (1) and 32px (1). Cards use `{rounded.sm}` (16px); buttons use `{rounded.lg}` (50px), which renders as a pill at button height; `{rounded.md}` (32px) and `{rounded.xs}` (3px) appear once or a few times; 100% is a fully circular radius. Inputs are square (0px radius).

## Components

- **Primary button** (`button-primary`): `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}`, `{rounded.lg}`, padding 7.2px 21px, height 37px, 206px wide for the label "Connect With an Expert". Title-case label, no icon.
- **Outlined button**: white fill, 1px solid #0f588a border, #0f588a text, 14px at weight 300, 50px radius, padding 6px 16px, 34px tall. This is the header's "Connect With an Expert" pill.
- **Navigation** (`nav`, `nav-link`): white header, `{colors.ink}` text, 12px uppercase light links in the utility row; the main menu items are buttons that change from #413d46 to #0f588a on hover, with no underline, background or shadow change.
- **Text input** (`text-input`): `{colors.text-input-bg}` fill, 16px light text, padding 0px 32px 0px 11.2px, 41px tall, 500px wide, square corners.
- **Card** (`card`): white, 16px radius, the medium shadow above; testimonial cards pair a quote with a customer logo separated by a thin rule.
- **Footer** (`footer`): `{colors.surface-subtle}` fill, `{colors.ink-muted}` text, 64px top padding, 2px `{colors.footer-border}` border, with tracked uppercase column headings such as "GET THE APP" and "SUPPORT" and App Store and Google Play links.
- **Eyebrow label**: `{typography.subheading}`-style small caps with a small orange icon before it.

## Design System Architecture

ChargePoint does not publish a public design system or token package on the pages opened. The site's brand page (https://www.chargepoint.com/branding, linked from https://www.chargepoint.com/about/media under "Brand assets") offers the logo in three formats (a JPG on white, a transparent PNG for digital use and an EPS for print) and links a "Branding guidelines" PDF; the page text itself lists no colors or typefaces, and the PDF was not opened. The de-facto system is therefore the shipped CSS: named root variables for palette (`--chargepoint-orange`, `--dark-blue`, `--ocean-blue`, `--black`, `--charcoal`, `--gray-bg`, `--gray-50`, `--gray-100`), spacing (`--spacing-4` through `--spacing-21` in rem, `--section-padding`, `--gap-base`), radius (`--border-radius`) and elevation (`--box-shadow-sm/md/lg`). The stylesheet also carries a block of Dialogflow Messenger variables (`--df-messenger-*`) for the support chat widget; those are third-party widget tokens and are excluded from this document. A set of `--theme-*` variables (for example `--theme-bg-color`) is also declared in the root; where they are applied was not measured.

## Do's and Don'ts

- Do keep the canvas white and use the two pale greys for alternating bands; avoid a dark page theme, which was not measured.
- Do set body and button text in light weight 300 and reserve 400 for the hero h1 and small labels.
- Do use `{colors.primary}` for the single call to action and let the orange appear only as a motif, icon or hero background.
- Do round cards at 16px and buttons as pills at 50px.
- Do keep eyebrow labels small, tracked 1.2px and uppercase, with an orange icon.
- Don't use orange as a button fill; the measured primary button is the ocean blue.
- Don't add borders to cards; use the cool-tinted medium shadow instead.
- Don't place the chat widget's colors or controls in brand mockups.
- Don't set long headings in uppercase; only the small labels and the utility nav are uppercase.

## Responsive Behavior

Measured at a 390px viewport: the h1 drops from 48px/52.8px to 22.5px/24.75px, the hero sub-line from 24px to 17.28px (line-height 22.464px), and the paragraph from 24px to 19.2px with the 30.4px line-height unchanged. The primary button keeps its 16px label, 50px radius, 7.2px 21px padding and 206px width. The header is 56px tall and its measured text is "Toggle navigation". The most common mobile font sizes are 19.2px (2,318 characters) and 16px (1,696). Column reflow, image behavior, breakpoint widths and the mobile footer were not measured.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add `{colors.primary}` for the one button on the screen.
2. Open with a brand moment: an `{colors.accent-orange}` hero with a plus-sign pattern and a white 48px headline at weight 400, then drop into white sections.
3. Write paragraphs at 24px weight 300 with a 30.4px line-height, and eyebrow labels at 13.6px uppercase with 1.2px tracking.
4. Build cards at 16px radius with the medium shadow; do not add borders.
5. Use the plus sign as the bullet and the divider motif, in orange.
6. When a value is not in the frontmatter, check `web/data/extracted/chargepoint.json` before adding it; if it is not measured there, leave it out.
