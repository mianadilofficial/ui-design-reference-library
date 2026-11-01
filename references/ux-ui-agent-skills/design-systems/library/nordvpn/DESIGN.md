---
version: alpha
name: NordVPN
category: "Tech & AI"
description: "NordVPN's site: Inter 600 headlines at 48px/62.4px over white and near-black #141415 sections, #2a2a2d body ink, red #e02f1f Get NordVPN pills 48px tall that hover to #9e1c10, Nord blue #3e5fff for accents and links, pale blue #f3f7fc FAQ bands, and 12px/20px/40px radius cards."
colors:
  canvas: "#ffffff"
  page-largest: "#141415"
  ink: "#2a2a2d"
  primary: "#e02f1f"
  on-primary: "#ffffff"
  primary-hover: "#9e1c10"
  accent-blue: "#3e5fff"
  accent-blue-hover: "#6b90fa"
  surface-light-blue: "#f3f7fc"
  surface-stats: "#151823"
  ink-on-dark: "#c8c9cb"
  ink-muted: "#4f5054"
  ink-inverse: "#f7f7f8"
  hairline: "#e2e2e4"
  outline-border: "#b2b2b3"
  warning: "#fac900"
  success: "#0ea464"
typography:
  display:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 62.4px
    letterSpacing: "-0.496px"
  display-mobile:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 30px
    fontWeight: 600
    lineHeight: 39px
    letterSpacing: "-0.496px"
  heading:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 52px
    letterSpacing: "-0.256px"
  subheading:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 30.8px
  body:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button-small:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
  nav:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  caption:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
  select:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, "sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 12px
  sm: 20px
  md: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 11px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 28px
    height: 48px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 7px 24px
    height: 34px
    borderColor: "{colors.primary}"
  button-outline:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 28px
    height: 48px
    borderColor: "{colors.outline-border}"
  button-accent:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 11px 28px
    height: 48px
    borderColor: "{colors.accent-blue}"
  link:
    textColor: "{colors.accent-blue}"
    typography: "{typography.caption}"
  nav-link:
    typography: "{typography.nav}"
    padding: 12px
  nav-link-hover:
    textColor: "{colors.ink-muted}"
  language-select:
    typography: "{typography.select}"
    height: 20px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 24px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-on-dark}"
---

# NordVPN

## Overview

nordvpn.com ("The best VPN service online for free, open internet | NordVPN") is a long conversion page, 9,962px tall
at desktop. A thin near-black (#141415) status bar at the top shows the visitor's IP, ISP and a red "Unprotected"
status link. The header holds the NordVPN wordmark, Pricing, Features, Download VPN, Learn, For Business, Log In,
Support Center, Products and a red pill "Get NordVPN".

The hero is a two-column split over a pale-blue photographic scene: an eyebrow ("Go big on your online protection"),
the headline "The best VPN service¹ just got better" at 48px in Inter 600, a short paragraph, a promo line ("Get 75% off*
NordVPN + 3 months extra"), a red "Get NordVPN" pill and a money-back note; on the right a celebrity photo with a
"next-gen antivirus built in" device graphic.

Further sections: "A next-gen antivirus that takes care of your digital security" with a phone mockup; "An all-in-one³
digital security app" with three tall photo cards (Connect, Protect, Monitor) whose captions sit on dark panels; a
large grey-to-dark text manifesto ("NordVPN is about being in control…"); "Why you should use a VPN" feature cards with
a map/server UI; a dark "Online threats by the numbers" band with stat cards (56%, 2 hours, 40%); "Control your personal
information online" with a dark-web monitor card; reviews ("What users and experts say about NordVPN": Forbes Advisor,
PCMag Editors' Choice, user quotes); platform icons; a promo repeat; "What is a VPN?", FAQ accordion and
"Most popular VPN locations" flags on #f3f7fc; and a dark footer with dense legal footnotes and app-store badges. The
copy is promotional, number-driven and footnoted (superscript ¹ ² ³).

## Colors

- **Red CTA** — `primary` #e02f1f fills every "Get NordVPN" pill (`--bg-critical` / `--border-critical` in CSS); hover
  `primary-hover` #9e1c10 (`--border-critical-active`). The "Unprotected" link also turns #e02f1f on hover.
- **Nord blue** — `accent-blue` #3e5fff (`--color-brand-600`, `--text-accent`, `--color-accent`) for links, the
  "Learn More" pill and highlighted UI; hover `accent-blue-hover` #6b90fa (`--text-accent-hover`).
- **Dark** — `page-largest` #141415 is the largest painted area (status bar, manifesto/dark sections, footer;
  `--bg-inverse-primary`). The stats band is `surface-stats` #151823.
- **Light** — `canvas` #ffffff; `surface-light-blue` #f3f7fc (`--color-brand-100`) for the FAQ/locations band.
- **Ink** — `ink` #2a2a2d (`--color-neutral-900`), the most-read text; `ink-on-dark` #c8c9cb (`--color-neutral-300`)
  for footer and dark-band copy; `ink-inverse` #f7f7f8 for headings on dark cards; `ink-muted` #4f5054
  (`--color-neutral-700`) is the nav hover color.
- **Lines** — `hairline` #e2e2e4 (`--color-neutral-200`) for card borders; `outline-border` #b2b2b3
  (`--border-color-tertiary`) for the outline pill.
- **Status** — `warning` #fac900 (`--bg-warning`) and `success` #0ea464 (`--color-green-500`) are defined in the CSS.

## Typography

Inter is the only family, self-hosted as `/static/InterRegular`, `InterMedium` and `InterBold` woff2 files
(`--font-body: "Inter","Helvetica Neue","Helvetica","Arial","sans-serif"`). Weight 600 is used for bold
(`--font-weight-bold: 600`).

- **Display** — **48px / 62.4px, 600, -0.496px** (hero and several section heads).
- **Heading** — **40px / 52px, 600, -0.256px**; also 32px and a 64px stat figure.
- **Card title** — **22px / 30.8px, 600**.
- **Body** — **16px / 24px, 400** (the most frequent size).
- **Buttons** — **16px / 24px, 600**; small header pill **12px / 18px, 600**.
- **Nav** — **16px / 24px, 500**. **Captions / status** — **12px / 18px, 500** (12px is the second most frequent size).

Weights measured: 400 (4,281 characters), 500 (1,248), 600 (1,216).

## Layout

At 1280px: status bar 0/30, hero 30/747 (two columns), white feature section 777/2932 (two columns), dark stats band
3709/788, white sections 4497/2856 (two columns: personal-info control, reviews), light-blue FAQ band 7353/1439 (up to
5 columns: flags and tabs), footer 8792/1044 (4 columns). The header is 69px tall with 9 visible links. CSS defines
`--container-margin: 32px` and `--container-md: 28rem`. Spacing steps: 4, 6, 7, 8, 11, 12, 16, 20, 24 and 28px; cards
use 24px padding.

## Elevation & Depth

No box-shadows were measured. Separation comes from 1px #e2e2e4 card borders, alternating white/dark bands, dark
caption panels over photography, and device mockups. The stats band uses glowing chart graphics on #151823.

## Shapes

The measured radii are **12px** (most frequent — cards, `--radius-md`), **9999px** (every button), **20px**
(`--radius-lg`, larger cards and photo tiles) and **40px** (large rounded panels). CSS also defines `--radius-sm: 6px`
and `--radius-2xl: 1rem`, which were not measured on rendered elements of this page.

## Components

- **Get NordVPN (primary)** — #e02f1f pill, 1px same-color border, white Inter 16px/600, 11px 28px padding, 48px tall;
  hover #9e1c10.
- **Header pill** — same red, 12px/600, 7px 24px padding, 34px tall.
- **Outline pill** — "Discover why": transparent, white 16px/600 text, 1px #b2b2b3 border, 48px tall (on dark).
- **Accent pill** — "Learn More": #3e5fff fill and border, white text, 48px tall.
- **Status link** — "Unprotected" in #3e5fff at 12px/500 in the status bar; hover #e02f1f.
- **Feature card** — white, 12px radius, 1px #e2e2e4 border, 24px padding, icon, title, body and a blue link.
- **Photo card** — tall rounded photo tile with a dark caption panel and an outline pill.
- **FAQ accordion** — tabs above rounded question rows with chevrons on #f3f7fc.
- **Footer** — #141415, #c8c9cb text, legal footnotes, social icons, app-store badges, four link columns and a
  language select (14px/500).

## Design System Architecture

No public NordVPN web design system or brand-guideline page could be opened: https://nordvpn.com/press-area/ and
https://nordvpn.com/about-us/ both returned HTTP 403 to the fetch tool.

The shipped CSS shows a tokenised Tailwind theme with semantic layers: brand ramp (`--color-brand-100/300/400/600`:
#f3f7fc, #b5cdf5, #8caef8, #3e5fff), neutrals (`--color-neutral-150…900`), semantic roles (`--bg-primary: #f7f7f8`,
`--bg-critical: #e02f1f`, `--bg-warning: #fac900`, `--bg-inverse-primary: #141415`, `--text-accent`,
`--text-placeholder: #696a6d`, `--border-critical-active: #9e1c10`), sibling-product colors (`--text-nordpass:
#028176`, `--color-text-coveron: #c74800`), radii (`--radius-sm 6px`, `--radius-md 12px`, `--radius-lg 20px`) and
`--letterSpacing-sm: -.016rem`. The red CTA value is the same as the "critical" semantic variables.

## Do's and Don'ts

**Do**
- Use one red pill (#e02f1f) per view for the purchase action; hover to #9e1c10.
- Use #3e5fff for links and secondary emphasis, not for the buy button.
- Set all text in Inter; headlines 600 with slight negative tracking.
- Alternate white, #141415 and #f3f7fc bands; put stats and threats on dark.
- Footnote claims with superscripts and keep the legal text in the footer.

**Don't**
- Don't add drop shadows; cards are bordered.
- Don't use square buttons; every measured button is a pill.
- Don't introduce a second typeface.
- Don't use the red for decoration — it is the action color.

## Responsive Behavior

Measured at 390px:

- Display **30px / 39px, -0.496px** (desktop 48px); section heading **28px / 36.4px**; body stays **16px / 24px**.
- The red pill becomes full content width (358px), still 48px tall with 11px 28px padding.
- Header: 64px tall, 2 visible links; the header text includes a "Toggle sidebar" control.
- Bands: status bar 0/30, hero on a #97bae6 field 30/468, #8eb1dd strip 498/92, media 590/360, white 950/4830, stats
  #151823 5780/1534, white 7314/4388, FAQ #f3f7fc 11702/1985, footer #141415 13687/1321 — all 1 column with 16px
  insets.

Sidebar menu contents were not measured.

## Iteration Guide

1. Add a 30px #141415 status bar and a white header with 16px/500 Inter links and a small red pill.
2. Build a two-column hero: Inter 600 48px/62.4px headline in #2a2a2d, promo line, red 48px pill, product/person image.
3. Use 12px-radius bordered white cards with 24px padding for features; 20px-radius photo tiles with dark captions.
4. Put statistics on a dark #151823 band with large numbers.
5. End with FAQ and locations on #f3f7fc and a dense #141415 footer.
6. On mobile, 30px display, 28px headings, full-width red pills.
