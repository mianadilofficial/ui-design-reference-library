---
version: alpha
name: ALL Accor
category: "Travel & Hospitality"
description: "Accor loyalty and hotel booking site measured at all.accor.com: pale #f7f9fb page, indigo #1e1852 pill buttons with #38326c hover, Montserrat 700 headings at 36px, Roboto body, white 16px-radius cards with a soft shadow and a three-tier --wel token system."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f9fb"
  ink: "#5e5b73"
  primary: "#1e1852"
  on-primary: "#ffffff"
  surface-alt: "#eaedf5"
  surface-tint: "#f9f9ff"
  ink-strong: "#232136"
  ink-heading: "#252339"
  ink-muted: "#6f6e77"
  link-blue: "#0051ae"
  nav-link-text: "#1264a3"
  hairline: "#808080"
  offer-magenta: "#b40875"
  primary-hover: "#38326c"
  button-secondary-bg: "#e8edff"
  button-secondary-text: "#1f1b4b"
  button-secondary-border: "#508ffa"
  text-input-text: "#3e3d48"
  card-border: "#d9dadc61"
typography:
  display:
    fontFamily: Montserrat, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: Montserrat, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 44px
  heading:
    fontFamily: Montserrat
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 17.6px
  button:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Montserrat, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Roboto
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 16px
  lg: 40px
  xl: 50px
  2xl: 60px
  3xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 24px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.link}"
    rounded: "{rounded.3xl}"
    padding: 12px 16px
    height: 50px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    padding: 0px 12px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    height: 24px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.md}"
    padding: 28px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(7, 5, 24, 0.05) 0px 8px 16px 0px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-strong}"
    padding: 68px 0px
---

## Overview
ALL Accor (title "ALL Accor | Hotels Stays & Exclusive Deals", lang en) is the booking and loyalty site for Accor hotel brands. The header lists Stay, Loyalty programme, Deals, Our partners, Activities and More, with the stacked "All ACCOR" logo at the left, language and currency selectors (EN, THB) and a dark navy pill "Sign in / Sign up". The footer includes Exclusive offers (newsletter), Mobile App, Need help?, Company, Pro solutions and legal links.

The capture is a clean travel-commerce page. A pale grey-blue hero band (`{colors.page-largest}`) holds a centred bold headline "Welcome to ALL, book at the best price", two tabs ("Where are you going?" underlined, "Explore ideas") and a large white pill search bar with destination, dates, rooms and guests and a navy "Search" pill button. Below, white sections run through "Our offers" (three photo cards with a white "Member Exclusive" tag in magenta text and a round white arrow button), a lavender "Your benefits are waiting for you... Sign in" band with three white benefit cards (Member's rate, Reward points, Exclusive benefits) with icon tiles and a pale-blue outlined "Sign in" pill, "More than hotels. A way of life" with a carousel, "Must-visit destinations" with city photos and "Get inspired for your next trip" with article cards. A teal "Feedback" tab is fixed at the left edge; it is a widget and is not documented as brand UI.

## Colors
The page background is `{colors.page-largest}` (#f7f9fb, 2454 area units), with `{colors.surface-alt}` (#eaedf5, 656), `{colors.surface-tint}` (#f9f9ff, 428) and white `{colors.canvas}` (411). The most-read text colour is `{colors.ink}` (#5e5b73), then `{colors.ink-strong}` (#232136), `{colors.ink-heading}` (#252339, used by the h1 and h3), `{colors.ink-muted}` (#6f6e77, body paragraphs), `{colors.link-blue}` (#0051ae), `{colors.nav-link-text}` (#1264a3, the body-role colour) and `{colors.offer-magenta}` (#b40875, the "Member Exclusive" tag text).

`{colors.primary}` (#1e1852) is the dark indigo of the "Sign in / Sign up" and "Search" buttons with `{colors.on-primary}` white text; the measured hover colour is `{colors.primary-hover}` (#38326c). The secondary "Sign in" pill uses `{colors.button-secondary-bg}` (#e8edff) with `{colors.button-secondary-text}` (#1f1b4b) and a `{colors.button-secondary-border}` (#508ffa) outline. `{colors.hairline}` (#808080) and `{colors.card-border}` (#d9dadc61) draw dividers and card borders. The site's variables also include a strawberry scale (`--wel-prim-color-strawberry-10` #40000f), lime-green, aqua alpha tints, `--wel-sem-color-hover-offer` #980062 and a disabled primary button gradient `linear-gradient(75deg, #050033 0%, #524f81 100%)`.

## Typography
Montserrat (700) is used for the display and heading text and the nav; Roboto (variable 100 to 900) for body, buttons, subheads and inputs; Unna 400 italic is also loaded. Icon fonts `wel-icon-font` and `icomoon` supply icons.

- `{typography.display}`: Montserrat 700 at 36px / 48px, -0.5px tracking. Mobile: 24px / 44px.
- `{typography.heading}`: Montserrat 700 at 32px / 40px ("Our offers"). Mobile 24px / 32px.
- `{typography.subheading}`: Roboto 500 at 18px / 24px.
- `{typography.body}`: Roboto 400 at 12px / 17.6px (the offers intro copy).
- `{typography.button}`, `{typography.link}`, `{typography.input}`: Roboto 400 at 16px / 24px; `{typography.nav}` is Montserrat 400 at 16px / 24px.

Font substitutes: Montserrat and Roboto are open fonts available from Google Fonts; no substitute is needed.

## Layout
Desktop width is 1280px, page height 4758px. Content is arranged in card rows of three and four columns, and band sections that alternate between white and tinted backgrounds. The measured spacing steps are 1, 4, 6, 8, 10, 12, 16, 20, 24 and 28px, and variables such as `--wel-comp-grid-row-gap-md: 1.75rem` and `--wel-sem-spacing-dynamic-within-section-3xl: 2.75rem` define section gaps. The header is white with a hairline underline.

## Elevation & Depth
Cards use a soft shadow `rgba(7, 5, 24, 0.05) 0px 8px 16px 0px` with a 1px translucent border `{colors.card-border}`. The stylesheet also lists `0 .5rem 1rem #2523391a` (10 uses), `0 .125rem .375rem #0000001a` and focus rings (`0 0 0 .0625rem #3470df`, `0 0 0 .0625rem #ba1f1a` for error). The search bar is a white pill raised from the grey hero.

## Shapes
Radii are `{rounded.sm}` 6px (79 uses in CSS, the semantic `--wel-sem-border-radius-container-low` is .375rem), 4px, 16px for cards (`{rounded.md}`), 40px, 50px (`{rounded.xl}`, the primary button), 60px, 100px (`{rounded.3xl}`, the secondary pill) and 9999px. Photo tiles in the offers row carry the 6px radius.

## Components
**Primary button** (`button-primary`): `{colors.primary}` fill, white 16px Roboto text, 50px radius, 12px 24px padding, 49px tall. Hover `{colors.primary-hover}`.

**Secondary pill** (`button-secondary`): pale blue fill, indigo text, 1px blue outline, 100px radius, 12px 16px padding, 50px tall.

**Text input**: white, 6px radius, `{colors.text-input-text}` (#3e3d48) text at 16px.

**Card** (`card`): white, 16px radius, 28px padding, soft shadow and translucent border; used for the benefit cards with a lavender icon tile.

**Footer**: `{colors.page-largest}` background, 68px vertical padding.

## Design System Architecture
The homepage that was opened (https://all.accor.com/a/en.html) links no brand guideline or design system in its visible content. The shipped CSS shows a three-tier token system prefixed `--wel-`: primitive (`--wel-prim-color-*`, `--wel-prim-sizing-positive-05`), semantic (`--wel-sem-font-families-title`, `--wel-sem-font-weights-label-strong: 500`, `--wel-sem-border-radius-container-low`, `--wel-sem-color-hover-offer`, `--wel-sem-number-shadow-up-y`) and component (`--wel-comp-btn-primary-disabled-bg-color`, `--wel-comp-grid-row-gap-md`). An older `--ads-sizes-*` set is also present (`--ads-sizes-6: 1.5rem`). Tokens are therefore resolved by name instead of by hex.

Imagery and voice: the offers and destinations rows use real travel photography (resorts, restaurants, skylines) cropped to uniform tiles, with a short white title laid over a darkened lower edge. Destination tiles carry a small grey country line above a bold city name ("France / Paris", "United Kingdom / London", "Singapore / Singapore", "Australia / Melbourne"). The copy speaks directly to the member: "Your benefits are waiting for you... Sign in", "Save up to 10% on your stay.", "Earn points to get discounts." Section headings are sentences or short phrases in Montserrat, and each section on the left is paired with a right-aligned uppercase or bold link such as "SEE MORE OFFERS" or "See all articles" with an arrow.

The search module is the central component of the first screen. It is one white pill that contains four zones separated by hairlines: destination (a magnifier icon and the mandatory label), dates (a calendar icon with start and end dates joined by an arrow), rooms and guests (a person icon) and the indigo Search pill. A "Special rates" disclosure with chevron sits under it, flanked by two thin horizontal rules. The tabs above the module use an underline in the indigo colour to mark the active tab.

Hover and focus behaviour that was measured: the Sign in / Sign up button changes its fill from rgb(30, 24, 82) to rgb(56, 50, 108) with the text staying white. Focus rings in the stylesheet use a blue (#3470df) 1px ring and a red (#ba1f1a) ring for error states.

## Do's and Don'ts
- Do use the indigo `{colors.primary}` for the single main action per area.
- Do use large rounded white cards on tinted bands.
- Do set headings in Montserrat 700 and supporting text in Roboto.
- Do tag member offers in magenta text on a white label.
- Don't mix the pill radii: primary 50px, secondary 100px, cards 16px.
- Don't document the Feedback tab as brand UI.
- Don't use heavy shadows; the card shadow is 5 percent opacity.

## Responsive Behavior
Measured at 390px: h1 24px / 44px (box 358px wide), h2 24px / 32px, body 12px / 17.6px (box 313px), and the header shows "MENU" in uppercase 12px Roboto 500 with 1px tracking in `{colors.primary}`. No mobile CTA was detected. Column counts and breakpoints were not measured.

## Iteration Guide
1. Page `{colors.page-largest}`, cards white, text `{colors.ink-heading}` and `{colors.ink}`.
2. Headlines Montserrat 700 at 36px and 32px; body Roboto.
3. Primary action: indigo pill with white text; secondary: pale blue outline pill.
4. Offer cards: photo with white title overlay, round white arrow button, magenta member tag.
5. Hover colours beyond the primary button and dark mode are not measured.
