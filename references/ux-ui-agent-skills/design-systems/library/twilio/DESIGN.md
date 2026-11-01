---
version: alpha
name: "Twilio"
category: "Product & SaaS"
description: "Twilio home page (twilio.com/en-us): a deep navy canvas (#000d25, cards #191f36), white Whitney SSm headlines at 56px weight 700 with -1.68px tracking, an electric blue pill button (#1866ee, 50px radius, hover #0e3e92) and a signature red (#ef223a), with a white header and 20px card radii."
colors:
  canvas: "#191f36"
  page-body: "#000d25"
  ink: "#ffffff"
  primary: "#1866ee"
  on-primary: "#ffffff"
  surface-3: "#081f47"
  ink-2: "#cacdd8"
  ink-5: "#ef223a"
  link: "#0263e0"
  primary-hover: "#0e3e92"
  card-bg: "#000000"
typography:
  display:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 66px
    letterSpacing: "-1.68px"
  display-mobile:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1.02px"
  heading:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.4px"
  body:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  nav:
    fontFamily: "\"Whitney SSm\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
rounded:
  xs: 4px
  sm: 10px
  md: 17.1px
  lg: 20px
  xl: 22.8px
  2xl: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 60.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 6px 24px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 32px
---

## Overview

Twilio's English home page (https://www.twilio.com/en-us, title "Conversational AI and APIs for SMS, Email, Voice | Twilio", language `en`) sells a communications platform to developers and businesses. It is a dark-mode page under a white header. A slim grey utility strip carries "English", "Support" and "Login"; below it the white header (112px high in the measurement) has the red-circle Twilio logo, the menu "Products", "Solutions", "Why Twilio", "Resources", "Pricing", a search icon, an outlined pill "Contact sales" and a filled blue pill "Start for free".

The hero is navy (#000d25): the h1 "The platform for conversations in the AI era" (white, Whitney SSm 56px, weight 700, line height 66px, letter spacing -1.68px) with the paragraph "The Twilio platform empowers humans and AI agents to work together..." at 20px/32px, a blue pill "Start for free", an underlined text link "Explore what's possible", and a three-item reassurance row ("Free trial", "No credit card required", "Flexible pricing"). At right a rendered video frame of red, blue and white 3D blocks carries a play button, partly covered by a chat-assistant widget and a "COOKIE PREFERENCES" tab; both are third-party or consent controls and are not documented as brand UI.

The next section, "Building blocks for every conversation" (40px/52px, weight 700), shows a three-column grid of dark cards (20px radius) with product mock-ups: Conversations (with a red "New" tag), Messaging, Email, Voice, User authentication and Customer data. Each card has a bold heading and a short description and ends in a blue pill ("Start conversations", "Send messages", "Send emails"). The extractor counted 6,696px of page height at 1,280px width. Customer proof on the page includes a Gartner Magic Quadrant callout set in 64px red numerals ("4x").

## Colors

- **page-body `#000d25`**: the deepest navy; the page and footer background and also the header's text color (the header text is `#000d25` on white).
- **canvas `#191f36`**: the navy of the cards and large panels (second-largest background by area).
- **surface-3 `#081f47`**: a third, bluer navy surface.
- **card-bg `#000000`**: the black of the video/preview frame (the measured card is a 576px by 324px button).
- **ink `#ffffff`**: the dominant text color on dark, and the nav fill.
- **ink-2 `#cacdd8`**: secondary cool-grey text.
- **primary `#1866ee`**: the electric blue of the "Start for free" pills (fill) with **on-primary `#ffffff`** text; the hover state fills **primary-hover `#0e3e92`** (rgb(14, 62, 146)), which equals the stylesheet's `--color-blue-700`.
- **link `#0263e0`**: the blue of text links on the white header.
- **ink-5 `#ef223a`**: Twilio red, used on the logo and big stat numerals (64px/700).

Other measured backgrounds: #f3f4f7 (light grey) and #ffffff. A white 2px inset ring `rgb(255, 255, 255) 0px 0px 0px 2px inset` and a blue 2px inset ring appear as button shadows. The stylesheet declares 171 root variables with space-separated RGB triples (for example `--color-orange-10: 254 245 238`, `--color-orange-60: 244 124 34`, `--color-blue-80: 0 20 137`, `--color-yellow-40: 255 221 53`); these are palette entries, and only the ones listed in the frontmatter are tokenized.

## Typography

The primary face is **Whitney SSm** (400, 500, 600 and 700), with **Twilio Sans Mono** (400) for code, **Buffalo** (900) for display flourishes and **Inter** (400 and 600) for utility text. The stack is `"Whitney SSm", helvetica, arial, sans-serif`.

| Token | Size / line height | Weight | Letter spacing |
|---|---|---|---|
| display | 56px / 66px | 700 | -1.68px |
| heading | 40px / 52px | 700 | -0.8px |
| subheading | 20px / 32px | 600 | -0.4px |
| body | 20px / 32px | 400 | normal |
| nav | 16px / 28px | 400 | normal |
| button | 14px / 20px | 500 | normal |
| display-mobile | 34px / 40px | 700 | -1.02px |

Headline tracking is -3% of the size (-1.68px at 56px, -0.8px at 40px, -0.4px at 20px). The by-character size ranking is 14px, 20px, 18px, 28px, 40px, 16px, 12px, 56px and 72px. The header text measures 12px / 21px at weight 500. Line height is about 1.2 for display and 1.3 for headings, 1.6 for 20px body.

No font substitute is documented because the faces are loaded by the site.

## Layout

The header is 1,280px by 112px. Hero copy is 576px wide and the h2 block 864px wide; product cards are three per row on the 1,280px viewport. A stat card measures 368px by 512px with 32px padding. Padding values measured: 4px, 8px, 32px, 24px, 12px, 96px, 64px, 16px and 10px; gaps 8px, 12px, 32px, 48px, 16px, 6px and 4px. Spacing tokens run 4px to 60.8px; the stylesheet's `--spacing-size-8` is 9.6rem. The footer is 746px tall on #000d25 with white 14px/600 link headings (for example "Twilio careers").

## Elevation & Depth

Shadows are inset rings rather than lifts: `rgb(255, 255, 255) 0px 0px 0px 2px inset` (white focus ring), `rgb(221, 224, 230) 0px -1px 0px 0px inset` (a 1px bottom hairline) and `rgb(24, 102, 238) 0px 0px 0px 2px inset` (blue ring). The stylesheet defines `--filter-shadow: drop-shadow(0 0.6rem 1.2rem rgba(13,21,55,.1))` as a variable. Depth on the page is produced by navy-on-navy layering (#000d25 under #191f36 cards) and the illustrated product mock-ups.

## Shapes

Radii: 50px (pills), 4px, 20px (cards), 10px, 22.8px, 17.1px, 50% (avatars) and `4px 4px 0px 0px`. Tokens: xs 4px, sm 10px, md 17.1px, lg 20px, xl 22.8px, 2xl 50px, pill 9999px. Buttons use the 50px pill; cards use 20px; small UI chips use 4px or 10px.

## Components

**Primary button** (`button-primary`): fill #1866ee, label white, Whitney SSm 14px/500, 50px radius, 6px 24px padding, 36px high (a 16px/500, 40px-high variant also measured). Hover fill #0e3e92.

**Outlined pill**: "Contact sales" in the header, white fill with a blue outline and label (blue text on white measured on the "English" nav item hover: rgb(0, 13, 37) to rgb(24, 102, 238)).

**Navigation**: white bar with #000d25 labels at 12px/500, hover turns blue #1866ee.

**Link**: #0263e0 at 16px/400, 28px line height.

**Card**: #191f36 fill, 20px radius, 32px padding; text-on-card colors are white and #cacdd8, with red numerals.

**Footer**: #000d25 background, white 14px/600 link headings.

## Design System Architecture

No public brand-guideline page was found on the home page itself: https://www.twilio.com/en-us (opened with WebFetch) lists products, use cases and pricing and does not link a design system or press kit. The shipped CSS is the de-facto system: 171 root variables with palettes (`--color-blue-30`, `--color-blue-80`, `--color-blue-700`, `--color-orange-10`, `--color-orange-60`, `--color-red-40`, `--color-yellow-40`, `--color-paper-accent-active`), a font-size scale (`--font-size-25: 1.5rem`, `--font-size-50: 2rem`, `--font-size-90: 4.8rem`, `--font-size-100: 5.6rem`), a spacing scale (`--spacing-size-8: 9.6rem`), `--border-thin: 0.1rem` and `--font-weight-titles`. The numbers in this document come from measured elements, not from these unused variables.

## Do's and Don'ts

- Do use Whitney SSm 700 for headlines with negative tracking of about 3%.
- Do keep the page navy (#000d25 and #191f36) with white text, and use blue #1866ee only for primary pills.
- Do use red #ef223a for logo and standout numerals only.
- Do round cards at 20px and buttons at 50px.
- Don't add soft drop shadows to cards; use navy-on-navy layering.
- Don't document the chat widget or the cookie preferences tab as brand components.
- Don't use the unmeasured palette variables (orange, yellow) as UI colors.

## Responsive Behavior

Measured at 390px: the h1 is 34px / 40px at weight 700 with -1.02px tracking (desktop 56px / 66px); body is 18px / 28px; the "Start for free" pill is 135px by 40px with 8px 24px padding and 14px/500 text. Mobile by-character sizes: 18px, 16px, 28px, 12px, 14px and 34px. Column counts and menu behaviour at mobile width were not measured.

## Iteration Guide

1. Set the page in #000d25 with #191f36 panels and white text.
2. Use #1866ee pills (50px) with #0e3e92 hover for actions.
3. Set headings in Whitney SSm 700 with -3% tracking.
4. Reserve #ef223a for stat numerals.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=twilio`.
