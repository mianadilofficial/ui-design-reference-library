---
version: alpha
name: Brevo
category: "Product & SaaS"
description: "Brevo (brevo.com) pairs Tomato Grotesk semibold headlines (40px/48px) with Inter body text, a mint #c0ffa5 hero and header, #1b1b1b charcoal buttons with 16px radius and an inset-bevel shadow, forest-green #006a43 links and #004227 feature headings, and pale mint #e8fedf/#f9fff6 bands."
colors:
  canvas: "#ffffff"
  ink: "#1b1b1b"
  ink-black: "#000000"
  ink-secondary: "#474747"
  ink-muted: "#696969"
  primary: "#1b1b1b"
  primary-gradient-top: "#2c2c2c"
  on-primary: "#ffffff"
  mint: "#c0ffa5"
  mint-200: "#e8fedf"
  mint-100: "#f9fff6"
  forest-800: "#006a43"
  forest-900: "#004227"
  cream: "#fffaeb"
  hairline: "#d9d9d9"
  card-border: "#f0f0f0"
typography:
  display:
    fontFamily: __tomatoGroteskSemibold_99a04f, __tomatoGroteskSemibold_Fallback_99a04f, Tomato-Grotesk-Semibold-Fallback, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  display-mobile:
    fontFamily: __tomatoGroteskSemibold_99a04f, __tomatoGroteskSemibold_Fallback_99a04f, Tomato-Grotesk-Semibold-Fallback, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 36px
  feature-heading:
    fontFamily: __tomatoGroteskSemibold_99a04f, __tomatoGroteskSemibold_Fallback_99a04f, Tomato-Grotesk-Semibold-Fallback, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  label-heading:
    fontFamily: __tomatoGroteskMedium_9031fe, __tomatoGroteskMedium_Fallback_9031fe, Tomato-Grotesk-Medium-Fallback, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: __tomatoGroteskMedium_9031fe, __tomatoGroteskMedium_Fallback_9031fe, Tomato-Grotesk-Medium-Fallback, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  card-title:
    fontFamily: __tomatoGroteskMedium_9031fe, __tomatoGroteskMedium_Fallback_9031fe, Tomato-Grotesk-Medium-Fallback, sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: __interRegular_98fac2, __interRegular_Fallback_98fac2, Inter-Regular-Fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: __interMedium_eda65d, __interMedium_Fallback_eda65d, Inter-Medium-Fallback, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  button-small:
    fontFamily: __interMedium_eda65d, __interMedium_Fallback_eda65d, Inter-Medium-Fallback, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: __interMedium_eda65d, __interMedium_Fallback_eda65d, Inter-Medium-Fallback, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 20px
  3xl: 24px
  4xl: 40px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 18px 16px
    height: 68px
    borderColor: "{colors.primary}"
    boxShadow: rgba(27, 27, 27, 0.25) -1px -3px 7.8px 0px inset, rgba(255, 255, 255, 0.2) 1px 3px 8px 0px inset, rgba(27, 27, 27, 0.14) 0px 4px 8px -2px, rgba(27, 27, 27, 0.1) 0px 2px 4px -2px
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.lg}"
    padding: 6px 14px
    height: 40px
    borderColor: "{colors.primary}"
    boxShadow: rgba(27, 27, 27, 0.25) -1px -3px 7.8px 0px inset, rgba(255, 255, 255, 0.2) 1px 3px 8px 0px inset, rgba(27, 27, 27, 0.14) 0px 4px 8px -2px, rgba(27, 27, 27, 0.1) 0px 2px 4px -2px
  link:
    textColor: "{colors.forest-800}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.mint}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav-link-hover:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(27, 27, 27, 0.08) 0px 1px 2px 0px
  channel-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.mint-100}"
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    padding: 0px 64px
---

## Overview

brevo.com ("Brevo: Email & SMS Marketing, CRM & Automation Platform") sells an all-in-one customer platform for marketing and sales. The home page (6,211px at 1280px) opens on a full-width **mint green** (`#c0ffa5`) hero that also carries the header: a left-aligned two-line headline, "Turn Every Email into a Lifetime Customer" (the word after "Every" rotates through Email, SMS, Order and Interaction in the DOM), a short paragraph, a large black "Sign up free" button beside an outlined "Watch live demo", a review-rating badge, and a collage of product UI cards at the right.

Below, the page turns white: a logo bar ("Join 600,000+ customers around the world who trust Brevo"), three alternating feature rows with uppercase green eyebrows (MULTICHANNEL MARKETING & AUTOMATION, ALL-IN-ONE-SOLUTION, AI-FIRST PLATFORM) and 32px forest-green headings, a row of channel cards (Email marketing, SMS marketing, WhatsApp campaigns, Push notifications, Loyalty), an AI-agents carousel, a tabbed "Built for every business" block (Small Business, Enterprise, Developers), award badges on a cream panel, three customer stories, an integrations strip on pale mint, a mint "Ready to grow with Brevo?" CTA band and a pale-mint footer.

The mood is friendly and bright but controlled: one loud green, near-black buttons, and everything else white or tinted mint. Photography shows real small-business owners and product shots; UI fragments are drawn as clean white cards with soft borders.

## Colors

All of these are measured and also declared in Brevo's `--brand-*` variables.

- **Mint 300 `#c0ffa5`** (`--brand-mint-green-300`) — hero and header background, the final CTA band; second-largest background area.
- **Mint 200 `#e8fedf`** and **Mint 100 `#f9fff6`** — integrations band and footer.
- **Charcoal `#1b1b1b`** (`--brand-charcoal-grey-900`) — primary text (2,727 characters) and every button fill; the CTA variable is a subtle gradient `--brand-cta-default-primary: linear-gradient(0deg,#1b1b1b,#2c2c2c)`.
- **Black `#000000`** — logo-bar heading, footer links (1,254 characters).
- **Greys** — `#474747` (grey-700), `#696969` (grey-600, 829 characters of secondary copy), hairline `#d9d9d9` (grey-75, 42 borders), card border `#f0f0f0` (grey-100).
- **Forest 800 `#006a43`** — "Learn more" and "Sign up free →" text links and the uppercase eyebrows.
- **Forest 900 `#004227`** — the 32px feature headings ("Grow your business easily").
- **Cream `#fffaeb`** — the awards panel background.
- **White `#ffffff`** — canvas and cards.

The variables also declare full ramps for sky blue, tulip red, coral orange, peony pink, sun yellow, aqua teal, iris purple, metallic gold and cream, plus a chart palette (`--brand-charts-data-*`) not used as surfaces on the home page.

## Typography

Two families, both self-hosted with generated fallbacks:

- **Tomato Grotesk** — headings and navigation, loaded as separate Medium and Semibold files (`--brand-typo_font-family--primary_*` also declares Regular and Bold).
- **Inter** — body, buttons and links (Regular and Medium loaded; SemiBold and Bold declared as `--brand-typo_font-family--secondary_*`).

| Role | Family | Size / line-height | Weight |
| --- | --- | --- | --- |
| Hero (h1) | Tomato Grotesk Semibold | 40px / 48px | 600 |
| Feature heading (h3) | Tomato Grotesk Semibold | 32px / 40px | 600 |
| Card title | Tomato Grotesk Medium | 18px / 24px | 600 |
| Label heading (h2) / nav | Tomato Grotesk Medium | 16px / 24px (nav 20px) | 500 / 600 |
| Body | Inter Regular | 16px / 24px | 400 |
| Large button | Inter Medium | 20px / 24px | 500 |
| Small button | Inter Medium | 14px / 20px | 500 |
| Link | Inter Medium | 16px / 24px | 500 |

Section titles in the lower page measured 24px/600 and 22px/600. No letter-spacing is applied. Inter Regular carries the most characters (4,159). The variables define a numbered heading scale (`--brand-typo_heading-1-font-size: 1rem` … `--brand-typo_heading-10-font-size: 4rem`, heading-4 1.5rem, heading-4-5 1.75rem).

## Layout

The hero and most content sit between x=120 and x=1160 (a 1,040px measure); the footer widens to x=64–1216. The header height is declared as `--header-height: 88px`, and 11 header links are visible at desktop (Platform, Solutions, Pricing, Resources with chevrons; language, Log in, Sign Up Free, Get a demo).

Spacing follows the `--brand-spacing_*` scale on a 0.25rem step (`_1` .25rem … `_80` 20rem). Measured gaps: 16px (111), 12px, 2px, 8px, 20px, 32px, 40px, 96px; paddings: 6px (75), 4px (72), 16px, 20px, 10px, 24px, 48px, 120px (section padding).

Feature rows alternate image left / text right. In the capture, the second and third rows render faded; the cause was not measured. Maximum card columns measured: 11 (logo rows).

## Elevation & Depth

One signature shadow, used on every dark button (10 elements):

`rgba(27, 27, 27, 0.25) -1px -3px 7.8px 0px inset, rgba(255, 255, 255, 0.2) 1px 3px 8px 0px inset, rgba(27, 27, 27, 0.14) 0px 4px 8px -2px, rgba(27, 27, 27, 0.1) 0px 2px 4px -2px`

The two inset layers bevel the button (dark bottom-right, light top-left) and the two outer layers lift it slightly, so the black buttons look tactile. Nav links gain `rgba(27, 27, 27, 0.08) 0px 1px 2px 0px` on a white pill when hovered. Cards are flat with 2px borders.

## Shapes

- **4px** (40) and **8px** (34) — small UI chips and inner elements.
- **16px** (20) — large buttons and cards; **12px** (15) — small buttons and hovered nav pills.
- **24px**, **20px**, **6px** — panels and badges.
- Big decorative curves: `80px 80px 0px 0px`, `0px 0px 48px 48px`, `0px 0px 40px`, `40px 0px 0px`, 128px and 200px — the rounded tops and bottoms of the mint bands and image masks.

## Components

- **Primary button** ("Sign up free") — `#1b1b1b` fill and 2px border, white Inter Medium 20px/24px, padding 18px 16px, 68px tall, 16px radius, the bevel shadow.
- **Small button** ("Sign Up Free" in the header, "Discover Aura AI") — same treatment at 14px/20px, padding 6px 14px, 40px tall, 12px radius.
- **Outlined button** ("Watch live demo", "Get a demo") — transparent with a dark border.
- **Text link** — forest green `#006a43` Inter Medium 16px with an arrow.
- **Header link** — Tomato Grotesk 16px/600 in `#1b1b1b`; hover shows a white 12px-radius pill with a 1px/2px shadow.
- **Channel card** — white, 16px radius, 2px `#f0f0f0` border, Tomato 18px/600 title over an illustrated UI fragment.
- **Tabs** — pill tabs with the active one tinted mint (Small Business).
- **Footer** — `#f9fff6`, black Inter Medium links in five columns (PRODUCT, COMPARE, RESOURCES, PARTNERS, COMPANY).

## Design System Architecture

No public Brevo design-system site was opened: the press room at https://www.brevo.com/press/ (opened) exposed only its title, "Brevo Press Room | News, Media Kit & Press Releases", with no brand-kit link in the fetched content. The shipped CSS, however, carries a structured token layer of 332 root variables with a `--brand-` prefix:

- **Colour ramps** — `--brand-mint-green-100…900`, `--brand-forest-green-100…950`, `--brand-charcoal-grey-25…900`, and ramps for sky blue, tulip red, coral orange, peony pink, sun yellow, aqua teal, iris purple, metallic gold and cream; `--marketing-*` aliases point at them (e.g. `--marketing-mint-green-100: var(--brand-mint-green-100)`).
- **Chart palette** — `--brand-charts-data-{n}` with `-hovered` and `-pressed` states.
- **CTA** — `--brand-cta-default-primary` gradient.
- **Typography** — `--brand-typo_font-family--primary_{regular,medium,semibold,bold}` (Tomato Grotesk) and `--secondary_*` (Inter), `--brand-typo_heading-{n}-font-size/line-height`, `--brand-typo_font-weight--medium: 500`.
- **Spacing** — `--brand-spacing_{0…80}` on a 0.25rem base.

## Do's and Don'ts

**Do**
- Use mint `#c0ffa5` for the hero/header and the closing CTA band, white for content.
- Make every primary action a charcoal button with the bevel shadow (16px radius large, 12px small).
- Set headings in Tomato Grotesk Semibold and body in Inter Regular, with no tracking.
- Use forest green `#006a43` for links and eyebrows and `#004227` for feature headings.
- Draw product UI as white cards with 2px light-grey borders.

**Don't**
- Don't fill buttons with green; green is a ground and a text accent.
- Don't use the secondary ramps (red, pink, purple, yellow) for UI chrome; they are chart and illustration colours.
- Don't flatten the buttons; the inset bevel is part of the identity.
- Don't use heavy drop shadows on cards.
- Don't set body text in Tomato Grotesk.

## Responsive Behavior

Measured at 390px:

- Header shows 1 link and a menu toggle, measured with the label "header-hamburger" (desktop: 11 links, no toggle).
- h1 drops from 40px/48px to 28px/36px and is centered (left-aligned on desktop); the mint hero band measured 875px tall.
- Feature headings drop from 32px to 24px/600; body stays 16px/24px.
- Content runs from x=32 to x=358.
- The AI-agents block measured as a 497px media band with 20px/600 card titles; the footer measured 1,657px tall in 2 columns (desktop 4 columns, 621px).

Intermediate breakpoints were not measured.

## Iteration Guide

1. Open with a mint `#c0ffa5` band holding the header and a left-aligned 40px Tomato Grotesk headline, short Inter paragraph and one large charcoal bevel button.
2. Continue on white with a 1,040px measure; alternate image/text feature rows with green eyebrows and `#004227` 32px headings.
3. Use 16px-radius white cards with 2px `#f0f0f0` borders for channels and features.
4. Close with a pale-mint integrations band and a mint CTA band, then a `#f9fff6` footer.
5. Take spacing from the 0.25rem `--brand-spacing_*` scale and colours from the `--brand-*` ramps.
