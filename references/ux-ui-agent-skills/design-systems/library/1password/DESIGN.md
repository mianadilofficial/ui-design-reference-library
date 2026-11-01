---
version: alpha
name: 1Password
category: "Tech & AI"
description: "1Password's marketing site: agileSans at light weights (300 display at 88px/96.8px with -1.76px tracking, 350 body) on a near-black #1d1d21 canvas, a full-width #145fe4 blue band, white #ffffff sections with #303136 text, pill-shaped 9999px buttons 46px tall, and a sand #cbb88e announcement bar."
colors:
  canvas: "#1d1d21"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#145fe4"
  on-primary: "#ffffff"
  ink-on-dark-muted: "#ffffffcc"
  ink-on-light: "#303136"
  ink-black: "#000000"
  surface-dark-alt: "#1f1f23"
  announcement-sand: "#cbb88e"
  hairline-on-dark: "#ffffff1a"
typography:
  display:
    fontFamily: agileSans, "agileSans Fallback", sans-serif
    fontSize: 88px
    fontWeight: 300
    lineHeight: 96.8px
    letterSpacing: "-1.76px"
  display-mobile:
    fontFamily: agileSans, "agileSans Fallback", sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 52.8px
    letterSpacing: "-0.96px"
  heading:
    fontFamily: agileSans, "agileSans Fallback", sans-serif
    fontSize: 64px
    fontWeight: 300
    lineHeight: 70.4px
    letterSpacing: "-1.28px"
  quote:
    fontFamily: agileSans, "agileSans Fallback", sans-serif
    fontSize: 40px
    fontWeight: 350
    lineHeight: 48px
    letterSpacing: "-0.8px"
  body:
    fontFamily: agileSans, "agileSans Fallback", sans-serif
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
  nav:
    fontFamily: agileSans, "agileSans Fallback", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 16px
  lg: 24px
  xl: 25px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 64px
components:
  button-pill:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 46px
  button-pill-hover:
    textColor: "{colors.primary}"
  link-pill:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
  hero:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    padding: 224px 24px 24px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
---

# 1Password

## Overview

1password.com ("Password Manager, Secrets, and Access Management | 1Password") is a dark, product-first page, 7,436px
tall at desktop. A 56px sand-colored (#cbb88e) announcement bar sits at the very top ("1Password Privileged Access:
Zero standing privileges for humans and AI. Learn more"), followed by a white navigation bar: the 1Password logo,
Business, Personal, Developers, Partners and Resources menus, Pricing, Sign in, "Talk to sales" and a blue pill
"Get started free".

The hero drops onto near-black #1d1d21 with a centred, very light headline — "Secure access for every human and AI
agent" — at 88px. Below it a large, crisp product screenshot of the 1Password admin console ("Good morning Sonja
Johnson, this is your team", team overview counters, onboarding and recovery panels, last viewed reports) sits on a
blue glow. A grid of customer logos in muted grey on dark follows (IBM, Salesforce, Asana, PagerDuty, GitLab, Stripe,
Zuora, Reddit, Slack, GoDaddy and others).

The page then explains the platform ("One secure platform for humans, AI agents, and machines", eyebrow
"1PASSWORD® UNIFIED ACCESS") with four white product cards over illustrated UI snippets — Enterprise Password Manager,
Credential Broker, Privileged Access, SaaS Manager — each with a "Learn about…" link. A saturated blue band announces
"1Password named a Leader for SaaS Management Platforms" with two pill buttons; a white band carries an Oracle Red Bull
Racing photo and a large pull quote; a dark closer "Bring modern access under control" offers "Talk to sales" and
"View plans"; and a dense dark footer ends the page. The voice is plain and confident; headlines are sentence case.

The capture shows a cookie-consent dialog over the hero. It is a consent overlay, not brand UI, and is not documented
here.

## Colors

- **Canvas** — `canvas` #1d1d21 is the largest painted area (hero, product section, footer); the closing section
  measures #1f1f23 (`surface-dark-alt`).
- **White** — `page-body` #ffffff is the body background and the second-largest area (nav bar, quote band).
- **Primary blue** — `primary` #145fe4: the third-largest area (the Gartner band) and the color of "Talk to sales" and
  the hover text of "Get started free". White (`on-primary`) text sits on it.
- **Ink** — `ink` #ffffff is the most-read text; `ink-on-dark-muted` #ffffffcc (80% white) is nearly as frequent for
  supporting copy on dark; `ink-on-light` #303136 for text on white; `ink-black` #000000 appears in small amounts.
- **Announcement sand** — `announcement-sand` #cbb88e fills the top bar.
- **Hairline** — `hairline-on-dark` #ffffff1a (10% white).

The palette is deliberately small: dark, white, one blue, and the sand accent.

## Typography

One family carries the whole page: **agileSans**, self-hosted as Next.js font files (`/_next/static/media/*.woff2`),
with an "agileSans Fallback" metric fallback declared. Only `ui-sans-serif` appears elsewhere (20 measured characters).

- **Display** — **88px / 96.8px, weight 300, -1.76px** (-0.02em).
- **Heading** — **64px / 70.4px, 300, -1.28px**; product names **48px / 52.8px, 300, -0.96px**.
- **Quote** — the Red Bull pull quote at **40px / 48px, weight 350, -0.8px**.
- **Body** — **16px / 24px, weight 350** (the body default and the most frequent size); 20px, 18px and 14px also
  measured.
- **Buttons and nav** — **16px / 24px, weight 400**.

The measured weights are 350 (1,534 characters), 300 (1,165) and 400 (434) — no bold. Tracking tightens at a constant
-0.02em on large sizes. If agileSans is not available to you, use a neo-grotesque with a variable weight axis so the
300 and 350 weights are reproducible.

## Layout

At 1280px: announcement bar 0/56, white nav 56/76, dark hero and product section 132/3273 (two columns in the product
area), blue Gartner band 3405/601, white spacer 4006/95, media quote band 4101/647, white spacer 4748/106, dark closer
and footer 4854/2582. The hero container has 224px top padding and 24px sides. The header shows 7 links; product cards
run 4 across. Headlines are centred in the hero, Gartner band and closer, and left-aligned in the product section.
Spacing steps measured: 2, 4, 8, 10, 12, 16, 20, 24, 32 and 64px. `--navbar-height` is 4.94rem.

## Elevation & Depth

No box-shadows were measured on the page. Depth comes from the product screenshot glowing against the dark canvas
(a blue light behind it in the capture), from white cards placed on #1d1d21, and from the hard switches between dark,
blue and white bands. Borders are rare: a 10% white hairline on dark and single white and blue outlines.

## Shapes

Buttons and links are pills (**9999px**, the most frequent radius). Cards and media use **25px**, **24px** and **16px**
(including top-only 16px corners); small elements use **2px** and **4px**. One element is rounded only at the bottom
with 48px corners. The combination is soft: pill controls on large rounded cards.

## Components

- **Pill button** — "Get started free": white agileSans 16px/400 text, 9999px radius, 46px tall, 10px 24px padding.
  The measured background-color is transparent; in the capture the header instance is a solid blue pill, so the fill
  is painted by another layer. On hover the text turns #145fe4.
- **Link pill** — "Talk to sales": #145fe4 text, same pill geometry and padding.
- **Navigation** — white bar, 16px menu labels with chevrons, Sign in, Talk to sales and the blue pill.
- **Product card** — white rounded card holding a UI illustration (counters, toggles, status chips) above a light 48px
  product name on dark, a short description and an underlined "Learn about…" link.
- **Gartner band** — full-width #145fe4 with a small uppercase eyebrow, a 64px light headline, a paragraph and two pill
  buttons (dark and white).
- **Quote band** — photo on the left, partner logo and a 40px quote in #303136 on the right, an outlined pill
  "Read the story".
- **Footer** — dark, five link columns, a language selector, an outlined "Downloads" box, the logo and social icons.

## Design System Architecture

1Password's press page (https://1password.com/press) offers a media kit that "contains logos, product images, headshots of
our leadership team, and brand guidelines" via its brand hub at
https://brand.1password.com/document/45#/-/download-our-all-in-one-press-kit. The hub page opened shows only the title
"Kits - 1Password Brand Hub" without values, so no colors or type rules are taken from it.

The shipped site is a Next.js build (`/_next/static/` assets, the logo served from images.ctfassets.net). `:root` exposes only
layout variables (`--navbar-height: 4.94rem`, `--viewport-height`, `--viewport-overflow`); colors and type are compiled
into component CSS, so the de-facto system is the measured palette and the single agileSans family with light weights.

## Do's and Don'ts

**Do**
- Use agileSans at 300 for headlines and 350 for body; keep -0.02em tracking on large type.
- Keep most of the page on #1d1d21 with white text; use #145fe4 for one full-width emphasis band and for actions.
- Make every button a pill, 46px tall with 10px 24px padding.
- Show the real product UI large in the hero.
- Use the sand #cbb88e only for the announcement bar.

**Don't**
- Don't introduce bold weights; none were measured.
- Don't add drop shadows to cards; the page has none.
- Don't use square-cornered buttons.
- Don't treat the cookie dialog as part of the design.

## Responsive Behavior

Measured at 390px:

- Display **48px / 52.8px, 300, -0.96px**; heading **40px / 44px, -0.8px**; quote **32px / 38.4px, 350, -0.64px**.
- The hero container's top padding is 128px with 0 side padding.
- Announcement bar 0/104 (the text wraps), white nav 104/76, dark hero/product 180/4138 (1 column), blue band 4318/615,
  media 4988/235, white quote band 5223/751, dark closer 5974/1615 (2 columns), media 7589/507.
- 2 header links are visible and a menu toggle was detected; maxCardColumns is 1.
- Content insets are 24px on most bands and 32px on the quote band.

Menu contents were not measured.

## Iteration Guide

1. Start with a #cbb88e announcement bar, a white nav and a #1d1d21 hero.
2. Set the headline in agileSans 300 at 88px/96.8px with -1.76px tracking, centred and white.
3. Place a large product screenshot below the headline with a blue glow; follow with a muted logo grid.
4. Build the platform section: 64px light heading, four product cards with UI snippets and underlined links.
5. Insert one #145fe4 band with a centred 64px headline and two pill buttons.
6. Close on dark with "Talk to sales" / "View plans" pills and a dense footer; at mobile, set display to 48px and headings
   to 40px.
