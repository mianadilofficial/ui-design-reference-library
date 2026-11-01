---
version: alpha
name: ANA (All Nippon Airways) — US English site
category: "Airlines"
description: "ANA's US English home page measured live — a #f1f1f1 grey page with white #ffffff panels, ANA navy #00146e for every action, #333333 text, a pale booking blue #ccd4ea, and a Myriad Pro stack (Segoe UI, Helvetica, Arial fallbacks) set at 14px body with 600-weight headings; pill buttons at 18px and 100px radii, 15px and 20px card corners."
colors:
  canvas: "#f1f1f1"
  page-largest: "#ffffff"
  ink: "#333333"
  primary: "#00146e"
  on-primary: "#ffffff"
  surface-booking: "#ccd4ea"
  ink-muted: "#6e6e6e"
  ink-subtle: "#525252"
  border-strong: "#949499"
  css-red: "#d91829"
typography:
  display:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  heading:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 28px
    fontWeight: 600
    lineHeight: 36.4px
  subheading:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 31.2px
  body-md:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  body:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
  button-fare:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    letterSpacing: -0.28px
  nav:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 21px
  input:
    fontFamily: >-
      "Myriad Pro", "Segoe UI", Helvetica, Arial, Verdana, Roboto, "Droid Sans", "Hiragino Sans", "Hiragino Kaku Gothic ProN", HiraKakuProN-W3, "Hiragino Kaku Gothic Pro", HiraKakuPro-W3, "Noto Sans
      CJK JP", Meiryo, Osaka, "MS PGothic", "sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 16.1px
rounded:
  xs: 2px
  sm: 3px
  md: 14.5px
  lg: 15px
  xl: 16.5px
  2xl: 17px
  3xl: 18px
  4xl: 20px
  fare: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 5px
  s4: 8px
  s5: 11.03px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 17px
  s10: 19px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 16px
    height: 34px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 16px
    height: 34px
  button-fare:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-fare}"
    rounded: "{rounded.fare}"
    padding: 12px 16px
    height: 45px
  chip-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.2xl}"
    border: "1px solid #333333"
    padding: 4px 24.4px 4px 12px
    height: 28px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 0px 24.0625px
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    height: 58px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 18px
  tile-card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.4xl}"
---

## Overview

This document describes the US English home page of All Nippon Airways at `https://www.ana.co.jp/en/us/`, measured live on 2026-10-17 (desktop 1280px wide, 7,361px tall, plus a mobile pass). It is a booking-first airline portal rather than a marketing landing page. The top of the page is a stack of dated service notices on the pale booking blue #ccd4ea, followed by a white header carrying the "ANA Inspiration of JAPAN" logo (an SVG, 260 × 24px), a short utility row ("USA ・English", "Join", "Login") and four primary navigation entries — Plan and Book, Travel Information, The ANA Experience, ANA Mileage Club.

Below the header a full-width promotional carousel ("Find your Fukuoka" sweepstakes in the capture) sits above the booking widget, which is the real centre of gravity: Reservations / Flight Status / My Booking / Check-in tabs, then Tickets / Flight Awards / Hotel / Car Rentals, a Round Trip / One Way toggle and From/To airport fields. A row of six icon shortcuts (Guide, Baggage Information, Information for Online Check-in, Special Assistance, Paid Services EMD Search, Japan Domestic Fares) completes the utility zone.

The long grey body (#f1f1f1, 4,677px tall on desktop) then alternates content modules on white panels: "Information from ANA", the "ANA Fare Lineup" grid of eight city cards (Los Angeles-Tokyo, New York-Tokyo, Seattle-Tokyo and others) each with a navy "Check fares" pill, "Recommendations for Enjoying Your Destination", "Recommended Hotels" in a carousel, a full-bleed "Explore Japan your way" banner, "ANA's Services", and the "ANA Mileage Club App" block. A white "Notices from ANA" list, accordion rows for Topics and Information, and a grey social/footer band close the page.

The tone is calm, institutional and dense with information: navy is the only action colour, photography carries the emotion (city skylines, snow monkeys, hotel exteriors, Mount Fuji), and the type is a quiet humanist sans at small sizes.

## Colors

The palette is narrow and almost entirely measured from rendered elements:

- **canvas #f1f1f1** — the body background (`desktop.roles.body.backgroundColor`) and the long content band behind the fare and recommendation modules. It covers 22% of the capture.
- **page-largest #ffffff** — the largest painted area (weight 11,187 in `backgroundColorsByArea`, 53% of the capture): header, booking widget, module panels and the notices list.
- **ink #333333** — the most-read text colour (7,287 characters), used for headings h2/h3, paragraphs, links and the outlined chip border.
- **primary #00146e** — ANA navy. It fills every measured CTA (Login, Join, Check fares), colours the selected airport values in the booking inputs, and is published on the page as the CSS custom property `--color-booking-primary`. It is also the second most-read text colour (369 characters), used for small navy labels such as "Notices from ANA".
- **on-primary #ffffff** — the text on navy buttons.
- **surface-booking #ccd4ea** — the notice strip at the top and booking accents, published as `--color-booking-secondary` (a lighter `--color-booking-secondary-lighten` #dde5fb is also declared in rootVars but was not measured as a painted area).
- **ink-muted #6e6e6e** and **ink-subtle #525252** — secondary text greys for captions, dates and metadata.
- **border-strong #949499** — the second most frequent border colour on rendered elements; it also appears 307 times in the stylesheet corpus.
- **css-red #d91829** — a red that appears 162 times in the site's stylesheets. Its rendered role was not measured; it is recorded so it is not lost, not as an action colour.

There is no gradient system in the measurements, and no shadows were recorded on rendered elements (`boxShadows` is empty), although the stylesheet corpus declares `0 0 10px rgba(0, 0, 0, 0.16)` 272 times.

## Typography

Every measured element uses the same family stack beginning with **Myriad Pro**, followed by Segoe UI, Helvetica, Arial, Verdana, Roboto, Droid Sans and a long list of Japanese system faces (Hiragino Sans, Hiragino Kaku Gothic ProN, Noto Sans CJK JP, Meiryo, Osaka, MS PGothic). The extraction's `loadedFonts` lists only the `asw-icon` icon font, so no Myriad Pro webfont was downloaded during the measurement; the face used is whatever the visitor's machine resolves from that stack. Substitutes, if Myriad Pro is unavailable: the stack's own Segoe UI / Helvetica / Arial fallbacks, or an open humanist sans such as Source Sans 3.

Measured scale:

- **display** 16px / 600 / 24px — the role detected as h1 is the "Reservations" tab label, a span in navy; the page has no larger visible h1.
- **heading** 28px / 600 / 36.4px — section titles such as "Information from ANA", centred.
- **subheading** 24px / 600 / 31.2px — route titles like "Los Angeles-Tokyo".
- **body-md** 14px / 400 / 21px — the body default and the most-read size (5,468 characters).
- **body** 12px / 400 / 18px — fare footnotes and fine print, the paragraph size the extractor recorded.
- **button** 12px / 600 / 18px — header Login/Join.
- **button-fare** 14px / 600 / 21px with -0.28px tracking — "Check fares". This is the only measured letter-spacing besides 20px / -0.4px.
- **nav** 14px / 700 / 21px.
- **input** 14px / 600 / 16.1px in navy.

Weights by characters are 400 (5,336), 600 (2,354), 900 (500) and 700 (52). There is no uppercase styling on measured roles.

## Layout

Desktop content runs between x=55 and x=1194 at 1280px, centred. The extractor's bands: a 158px #ccd4ea notice strip, a 111px white header, a 360px media carousel with three visible columns (the active slide flanked by neighbours), the 4,677px grey content band with up to six columns, a 1,466px white notices band, a 376px grey social band and a 214px white footer.

Inside the grey band, modules are white panels with headings centred above them. The fare lineup is a four-column grid of image cards (two rows of four in the capture); recommendations and services are four-up rows; hotels run as a carousel with pagination dots. Measured paddings cluster at 16px, 12px, 8px and 24px, with 22.5px recurring; gaps are small (5px, 12px, 14px). The spacing tokens are the measured paddings and gaps; the page does not follow a strict 4px or 8px grid.

## Elevation & Depth

No box shadows were recorded on rendered elements in the desktop pass, so depth comes from tone: white panels on the #f1f1f1 canvas, and #ccd4ea for the booking-related strip. The stylesheet corpus does declare soft, centred shadows — `0 0 10px rgba(0, 0, 0, 0.16)` (272 declarations), `0 0 10px rgba(0, 0, 0, 0.1)` (66) and `0 0 4px rgba(0, 0, 0, 0.3)` (20) — which belong to states or components not visible in the measurement. If you need elevation, use one of those declared values, never a hard drop shadow.

## Shapes

ANA's shape language is rounded but not playful. Measured radii: 20px is the most frequent (25 elements — the white shortcut tiles and panels), 50% for carousel dots and round icons, 100px for the "Check fares" pills, 30px, 18px for the header Login/Join pills, 17px for outlined chips, 15px for the grey booking cards, 14.5px and 16.5px for small toggles, and 2px/3px for tiny tags. The stylesheet corpus is dominated by 30px (179) and 27px (160), confirming that capsule shapes are the house default for controls. Photography inside cards is clipped to the card's rounded top corners in the capture.

## Components

- **Header pills (button-primary / button-secondary)** — Login and Join: navy #00146e fill, white 12px/600 text, 8px 16px padding, 34px high, 18px radius.
- **Fare button (button-fare)** — "Check fares": navy fill, white 14px/600 text with -0.28px tracking, 12px 16px padding, 45px high, 100px radius; a smaller 37px variant uses 8px 16px padding. Each pill carries a right-pointing chevron in the capture.
- **Outlined chip** — "All 7" filter: #333333 12px text, 1px solid #333333 border, 17px radius, 28px high, asymmetric 4px 24.4px 4px 12px padding to leave room for a trailing icon.
- **Booking input** — white field, 58px high, navy 14px/600 value text, square corners on the input itself, sitting inside rounded pill containers in the capture.
- **Booking card** — grey #f1f1f1 card with 15px radius and 18px padding holding departure date/time selectors.
- **Shortcut tile** — white list tile, 20px radius, 152px high, icon above a 16px/600 label.
- **Navigation** — a white 65px header; nav links 14px/700 #333333.
- **Hover** — the only recorded hover is a carousel dot filling from white to #333333.

## Design System Architecture

ANA's group site publishes its brand values — "Anshin, Attaka, Akaruku-genki!" (peace of mind, heartwarming, cheerful and energetic) — at https://www.ana.co.jp/group/en/about-us/brand/, but that page describes behaviour and mission, not visual specifications. No public visual design system, token package or brand guideline for the website was found on the pages opened.

The de-facto system is visible in the shipped CSS. The root declares a small booking token set — `--color-booking-primary` (#00146e), `--color-booking-secondary` (#ccd4ea), `--color-booking-secondary-lighten` (#dde5fb) and `--booking-cell-size` (36px) — which scopes the navy/blue pair to the reservation module. Icons are served as a private icon font, `asw-icon` (`/common-layout2/css/fonts/asw-icon.ttf`), and shared layout assets live under `/common-layout2/`, indicating a common header/footer layer reused across country sites. Breakpoints in the CSS centre on 767/768px (77 and 50 declarations) and 1024/1025px, with secondary queries at 600px, 1159/1160px and 375px. Motion declarations favour 300ms and 500ms with ease-in-out.

## Do's and Don'ts

**Do**
- Reserve #00146e navy for actions and booking values; it is the only fill colour on measured buttons.
- Keep the page on #f1f1f1 with white #ffffff panels for modules.
- Use capsule shapes for controls (18px header pills, 100px fare pills) and 15–20px corners for cards.
- Set body copy at 14px and fine print at 12px in #333333; headings in 600 weight, not 700 or bold display sizes.
- Let photography of destinations carry colour and emotion.

**Don't**
- Don't introduce a second accent colour for buttons; the stylesheet red #d91829 was not measured on any action.
- Don't add hard drop shadows; measured depth is tonal.
- Don't set large display headlines — the largest measured heading is 28px.
- Don't document the cookie/consent modal (`ensModalWrapper`, hidden during measurement) as brand UI.
- Don't replace Myriad Pro's fallback stack with a geometric sans; the stack is humanist throughout.

## Responsive Behavior

Measured on the mobile pass (content between x=12–16 and x=374–376):

- The section heading "Information from ANA" drops from 28px / 36.4px on desktop to 20px / 28px on mobile.
- The primary CTA detected on mobile is the "Check fares" pill: 14px / 600, 12px 16px padding, 45px high, 100px radius — identical to desktop.
- The notice strip measures 174px high on mobile (158px on desktop); the header measures 112px.
- The grey content band runs 7,359px on mobile against 4,677px on desktop; the extractor recorded at most two columns in it on mobile versus six on desktop, and nine maximum card columns on mobile versus 17 on desktop.
- The most-read mobile font size is still 14px; 12px, 16px, 20px and 18px follow.

The CSS declares breakpoints at 767px/768px and 1024px/1025px. Navigation behaviour on mobile (menu toggle) was not measured: the extractor recorded no visible menu toggle.

## Iteration Guide

1. Start from `canvas` #f1f1f1 and white panels; add the #ccd4ea strip only for notices or booking context.
2. Build every action as a navy capsule: `button-primary` for compact header actions, `button-fare` for content CTAs.
3. Typeset with the full Myriad Pro stack; use `heading` 28px for section titles, `subheading` 24px for card titles, `body-md` 14px for copy.
4. Use 20px radius on tiles and 15px on grey booking cards.
5. When adding a new colour, check `web/data/extracted/ana.json` first; the stylesheet corpus contains more hues (#d91829, #012f64, #c52431) whose rendered roles have not been measured.
6. Re-run the extractor before changing any value; this page rotates its carousel and notices.
