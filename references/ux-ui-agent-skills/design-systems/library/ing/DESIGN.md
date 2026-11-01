---
version: alpha
name: ING
category: "Banking & Insurance"
description: "ING (ing.com), the Dutch banking group, pairs its signature orange (#ff6200) with white, near-black ink (#151515) and indigo links (#525199), set in the proprietary INGMe and INGDisplay families (64px hero, 16px body), with pill outlines at 50px, 8px buttons and a floating rounded navigation."
colors:
  canvas: "#ffffff"
  ink: "#151515"
  primary: "#ff6200"
  on-primary: "#ffffff"
  button-tint: "#eff6fb"
  hover-tint: "#dfedf8"
  ink-muted: "#696969"
  link-indigo: "#525199"
  accent-sky: "#559bd1"
  footer-bg: "#f0f0f0"
typography:
  display:
    fontFamily: INGDisplay
    fontSize: 64px
    fontWeight: 400
    lineHeight: 77px
    letterSpacing: "-0.96px"
  display-mobile:
    fontFamily: INGDisplay
    fontSize: 40px
    fontWeight: 400
    letterSpacing: "-0.6px"
  heading:
    fontFamily: INGMe
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  subheading:
    fontFamily: INGDisplay
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  body:
    fontFamily: INGMe
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: INGMe
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 8px
  sm: 10px
  md: 24px
  lg: 50px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.button-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    height: 80px
  button-secondary:
    backgroundColor: "{colors.button-tint}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    height: 80px
  link:
    textColor: "{colors.link-indigo}"
    typography: "{typography.body}"
    rounded: "{rounded.lg}"
    padding: 9px 16px
    borderColor: "{colors.link-indigo}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 10px 12px 10px 48px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 12px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 5px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 8px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    padding: 100px 80px 16px
---

## Overview

The ING global company website (page title "ING global company website | ING") is the corporate site of ING Group, not the retail banking app. Its first screen is split in two: the left half is a flat fill of ING orange (#ff6200) carrying the white headline "The bank that helps get Europe invested.", the line "Europe has plenty of savings. So why aren't we investing more?" and a dark plum, hand-cut blob-shaped button "Get Europe invested"; the right half is a street photograph of a runner passing a billboard that reads "You can invest." with an orange label "ing.com/invest". A floating white navigation capsule with the ING wordmark and lion sits on top, with dropdown links (About us, Sustainability, Investors, Newsroom, Careers), a search icon and an outlined "ING Global" button.

Below, a "News" row scrolls horizontally with orange and grey circular arrow controls: each card is a photograph or flat illustration, a date ("13 Sep 2026", "09 Sep 2026", "30 Jul 2026"), a title, two lines of grey summary text and an indigo outlined "Read more" pill. A full-bleed photograph of an athlete in a plank on a stone bench carries the large white statement "Empowering people to stay a step ahead in life and in business - it's our purpose." Then a white section opens with an orange heading "ING's share listings" and plain text about listings on Euronext Amsterdam and the New York Stock Exchange.

The measured page is 5490px tall at 1280px wide. Tone is plain-spoken and optimistic: short declarative headlines, rounded friendly photography, and flat illustration for editorial topics. No cookie or chat control was documented from this capture.

## Colors

- **ING orange (#ff6200, `primary`)** is the brand color: it fills the hero half (1075 area), colors the "ING's share listings" heading and the "ING Global" button outline, and is the site's `--bs-primary` (the stylesheet customizes Bootstrap: `--bs-primary: #ff6200`, with `--bs-focus-ring-color: #ff620040`).
- **Near-black ink (#151515, `ink`)** sets 2756 characters and is the stylesheet's `--bs-body-color`, `--bs-black` and highlight color.
- **Muted grey (#696969, `ink-muted`)** carries 2382 characters, for card summaries and dates.
- **Indigo (#525199, `link-indigo`)** is the link, outline and hover-link color (`--bs-link-color`, `--bs-secondary`): "Read more" pills use a 1px #525199 border and #525199 text (24 borders).
- **Light blue tint (#eff6fb, `button-tint`)** is the fill of the detected primary buttons ("Upcoming events", "Debt securities ING Groep") with #151515 text and an 8px radius (1699 area); on hover navigation pills turn #dfedf8 (`hover-tint`).
- **Sky blue (#559bd1, `accent-sky`)** is the stylesheet's `--bs-blue` and colors 72 characters.
- **Footer grey (#f0f0f0, `footer-bg`)** is the footer fill and `--bs-secondary-bg`.
- **White (#ffffff)** is the canvas (8614 area) and the text on orange.

The stylesheet defines more customized theme colors (`--bs-green: #349651`, `--bs-pink: #ab0066`, `--bs-yellow: #d0d93c`, `--bs-warning: #fff6ef`, `--bs-danger: #f6e5ef`), which were not measured on rendered elements and are not tokens.

## Typography

Three proprietary ING faces are loaded: INGMe (400, plus INGMe-Bold 700), INGDisplay (700 loaded; 400 and 500 measured on headings) and "ING Narrow" for card text, plus INGIcons for the icon font. By characters: INGMe 5251, ING Narrow 242, INGDisplay 171, INGMe-Bold 19.

- **Display (h1):** INGDisplay 64px / 77px, weight 400, -0.96px letter spacing; 40px with -0.6px at 390px.
- **Subheading (h3):** INGDisplay 32px / 38.4px, weight 500 ("News").
- **Heading (h2):** INGMe 28px / 33.6px, weight 500; 24px / 28.8px at 390px.
- **Body:** INGMe 16px / 24px, weight 400 (5004 characters).
- **Navigation:** INGMe 20px / 30px, weight 400 (nav link role); dropdown labels render at 16px.
- **Other measured sizes:** 14px (188), 44px (92), 70px (82, the large photograph statement).

The statement type over photography is a very bold, tightly tracked rendition of INGDisplay. The fonts are proprietary to ING; the stylesheet's fallback is system-ui and Segoe UI, Roboto, Helvetica Neue, Arial.

## Layout

The stylesheet is Bootstrap 5 with ING's variables: breakpoints `--bs-breakpoint-sm` 576px, `md` 768px, `lg` 1024px, `xl` 1440px; image variables `--header-img-height: 275px` and `--img-overlap-amount: -60px`. Measured spacings are 4px, 5px, 6px, 8px, 9px, 10px, 12px, 15px, 16px and 20px. The nav capsule has padding 10px 12px 10px 48px, and the footer 100px 80px 16px. Content runs in a wide container with generous vertical gaps; full-bleed photography and the half-orange hero break out of it.

## Elevation & Depth

One shadow is measured: `rgba(0, 0, 0, 0.1) 0px 1px 12px 0px` on the floating navigation. The stylesheet declares Bootstrap shadow variables (`--bs-box-shadow: 0 .5rem 1rem #15151526`, `--bs-box-shadow-lg: 0 1rem 3rem #1515152d`, `--bs-box-shadow-sm`), none measured on content. Depth is otherwise created by overlap: the navigation floats over the hero, and images overlap by 60px.

## Shapes

Radii measured: 50px (31 elements, pills and circular controls), 10px (26, cards and images), 8px (17, tinted buttons), 24px (2, the nav capsule). The stylesheet has `--bs-border-radius: 8px` and `--bs-border-radius-pill: 50rem`. The hero CTA in the capture uses an organic hand-cut blob shape, which is artwork and not a measured radius.

## Components

- **Tinted button.** #eff6fb fill, #151515 16px INGMe label, 8px radius, 80px high in the measurement ("Upcoming events", "Debt securities ING Groep").
- **Outline pill.** Transparent fill, 1px border and text in #525199 (or 1px #ff6200 on the "ING Global" button), 50px radius, 9px 16px padding ("Read more").
- **Navigation.** White capsule, 24px radius, soft shadow, 20px nav text, links with dropdown chevrons; on hover items turn #dfedf8 with a 50px radius.
- **News card.** White fill, 10px radius, 8px padding, image on top, date and title in 16px ING Narrow.
- **Footer.** #f0f0f0, #151515 text, bold link-group headings ("Go to", "Contact", "ING at a glance"), padding 100px 80px 16px.

## Design System Architecture

The corporate pages ship Bootstrap 5 customized through ING variables (`--bs-primary: #ff6200`, `--bs-secondary: #525199`, `--bs-body-font-family: "INGMe"`, `--bs-border-radius: 8px`, the breakpoint set) in the shipped stylesheet at https://ing.com/. No public ING design system, brand guideline or press-kit page was found: https://ing.com/brand, /press, /about and /design all returned 404 when fetched (the ing.com home page lists press releases at /news/press-releases but no design resources). The de-facto system is the customized Bootstrap theme plus the custom font families.

## Do's and Don'ts

- Do use ING orange #ff6200 as a flat full-bleed color with white INGDisplay headlines.
- Do use #525199 for links and outlined pills with a 50px radius.
- Do use the light blue tint #eff6fb for secondary buttons with 8px corners.
- Do keep the navigation as a floating rounded capsule with a soft shadow.
- Don't use stock Bootstrap blue (#0d6efd); the theme overrides it with orange and indigo.
- Don't use orange for long body text; it is measured only on large headings, outlines and fills.
- Don't add heavy shadows.

## Responsive Behavior

The 390px pass measured: h1 at 40px with -0.6px tracking, h2 at 24px / 28.8px weight 500, body at 16px / 24px weight 400, the "Upcoming events" button unchanged (16px, #eff6fb fill, 8px radius), and a navigation container with 24px radius and the same soft shadow. Column counts, menu form and the hero split at 390px were not measured.

## Iteration Guide

1. White page, #151515 text in INGMe 16px.
2. Hero: half flat #ff6200 with a 64px white headline, half photograph.
3. Floating 24px-radius nav capsule with 20px links and an outlined "ING Global" button.
4. News row of 10px-radius cards with #525199 pills.
5. Use #eff6fb for secondary buttons and #f0f0f0 for the footer.
6. Re-measure the dark hero button before specifying its color.
