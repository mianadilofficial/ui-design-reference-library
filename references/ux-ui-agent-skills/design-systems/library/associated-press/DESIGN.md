---
version: alpha
name: Associated Press (AP News)
category: "News & Publishing"
description: "AP News home page: white #ffffff canvas, ink #191919, AP red #da1026, black #000000 header and footer, grey #f2f2f2 modules, the proprietary AP typeface at 13px body and 23px/700 headlines, uppercase 30px section titles, 3px radii and a dense multi-column news grid."
colors:
  canvas: "#ffffff"
  ink: "#191919"
  primary: "#da1026"
  surface-grey: "#f2f2f2"
  surface-black: "#000000"
  ink-muted: "#666666"
  ink-warm: "#4b4545"
  hairline: "#e6e6e7"
typography:
  display:
    fontFamily: AP, -apple-system, Arial, Helvetica, Roboto, system-ui, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 34px
    textTransform: uppercase
  heading:
    fontFamily: AP, -apple-system, Arial, Helvetica, Roboto, system-ui, sans-serif
    fontSize: 23px
    fontWeight: 700
    lineHeight: 27px
  body:
    fontFamily: AP, -apple-system, Arial, Helvetica, Roboto, system-ui, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17px
  nav:
    fontFamily: AP, -apple-system, Arial, Helvetica, Roboto, system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
    textTransform: uppercase
  link:
    fontFamily: APVar, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16.8px
rounded:
  xs: 3px
  sm: 3.5px
  md: 4px
  lg: 5px
  xl: 6.23px
  2xl: 28px
  3xl: 90px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 8.1px
  s8: 10px
  s9: 12px
  s10: 13px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.surface-black}"
    rounded: "{rounded.xs}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.canvas}"
    padding: 60px 40px 30px
---

## Overview

apnews.com ("Associated Press News: Breaking News, Latest Headlines and Videos | AP News") is the web home of the Associated Press, a not-for-profit news cooperative. The measured page is a long, dense front page, 16,287px tall at 1280px: a black 76px header bar, then a white body of five-column card grids under uppercase section titles such as "LATEST NEWS" and "US NEWS", each section holding a lead photograph story and lists of linked headlines. Photography is editorial news imagery (politics, sports, disasters, entertainment) and the page contains sections for Short Stories, Most Watched Videos, Today in History, AP Newsletters and Quizzes.

The extraction was taken twice. The first capture caught the page without its stylesheet and with a "This is not a paywall" donation overlay and an advertising banner; it was discarded and re-measured with the overlay handling. The final capture is styled. The donation overlay, ad banners and the accessibility floating button are not brand UI and are not documented as tokens.

The voice is neutral and factual: headlines state events ("Trump rallies in Montana as GOP strategy shifts ahead of Ele…"), and navigation labels are the plain news desks (World, U.S., Politics, Sports, Entertainment, Business, Science, Fact Check, Oddities, Be Well, Photography).

## Imagery and Voice

Imagery is documentary photography in landscape crops, usually people at events: officials at podiums, athletes mid-play, crowds, storm and conflict scenes, each with the lead story given a larger crop than the rest. Photo-led bands such as AP Photography and Short Stories use a tighter row of equal-height images with a caption line below. Text is plain and attributed: headlines are complete sentences in sentence case, section desks are named by topic, and summaries are one or two lines. There are no illustrations or decorative graphics in the measured page, and color enters mainly through the photographs.

The overall impression is a wire-service front page: information density and scan speed come before ornament, spacing between modules is tight, and every module repeats the same title, lead image and headline list structure so that readers can predict where to look on any section of the page.

## Colors

- **Canvas** `#ffffff` (5,885 area units) and **surface grey** `#f2f2f2` (4,058) are the main backgrounds; **surface black** `#000000` (1,058) is the header and footer.
- **Ink** `#191919` is the most-read text (10,395 characters), the root variable `--maple-color-ink`; black `#000000` covers 4,410 more and white 3,076 on dark areas.
- **Primary** `#da1026` is `--maple-color-ap-red`, used for 43 measured characters (eyebrow and accent labels) and 3 area units.
- **Ink muted** `#666666` (`--maple-color-gray-700`, 321 characters), **ink warm** `#4b4545` (72), and **hairline** `#e6e6e7` (`--maple-color-gray-200`).

The stylesheet also defines other reds: `--ap-brand-red` #FF322E and `--brand-ap-red` #ff1818 (used for the sponsored banner background and error/hover states), plus link blue `--maple-color-link-blue` #0042a9 (13 characters), Google and Facebook brand colors for share controls. Those are functional or third-party and are not tokens. Yellow #f5bd41 appeared on 7 characters.

## Typography

Fonts loaded: AP (400, 500, 700), APvar (variable 100 to 900), Roboto and Poppins 700. The text stack is `AP, -apple-system, Arial, Helvetica, Roboto, system-ui, sans-serif`.

- Display (h1 "LATEST NEWS" section title): AP 700, 30px / 34px, uppercase.
- Heading (story h2): AP 700, 23px / 27px.
- Body (story summary): AP 400, 13px / 17px.
- Nav: AP 400, 14px / 18px, uppercase.
- Link: APVar 700, 14px / 16.8px.
- Measured sizes by use: 16px (6,419 characters), 18px (2,835), 15px (2,364), 23px (2,258), 13px (2,009), 14px (1,491).

Font substitutes: AP is the agency's own typeface; use Arial or Roboto (both in its stack) when it is unavailable. The stylesheet also declares font-width variables (`--maple-font-width-condensed` 50, `semi-condensed` 75, `normal` 100) for the variable face.

## Layout

The page has a black header with a "Menu" toggle (the extractor recorded the header links as hidden on desktop and the menu toggle as visible), a content container whose edges measured at 40px and 1240px, and card grids of up to 31 columns counted by the layout probe for the densest band. Sections repeat: uppercase title, one large lead card, then smaller cards and text lists. The stylesheet breakpoints, by usage count, are min-width 1024px (441 rules), min-width 768px (293), min-width 1440px (226) and max-width 1023px (160). Spacing steps measured: 1px, 2px, 4px, 6px, 8px, 8.1px, 10px, 10.24px, 13px, 16px; the footer padding is 60px 40px 30px.

## Elevation & Depth

Most elements have no shadow (22 plus 10 with `none !important`). Defined shadows: `0 5px 20px 0 rgba(0,0,0,.1)` (4), `1px 1px 0px #eee` (4), `0 0 5px 0 rgba(0,0,0,.2)` (3), `0px 2px 10px -3px #999` (3), and a `--poll-shadow` variable. The page is mainly flat; separation uses grey #f2f2f2 module backgrounds and #e6e6e7 hairlines.

## Shapes

The measured radii are 3px (135 uses), 4px (33), 5px (21), 24px (18), 8px (17), 2px, 6px and a 6.23px value; `--maple-story-action-radius` is 3px. Tokens: 3px, 3.5px, 4px, 5px, 6.23px, 28px, 90px. Cards and chips are lightly rounded; the large radii belong to pill-shaped controls.

## Components

- **Header bar:** black, 76px, with logo and a "Menu" toggle; nav links are white on black, uppercase 14px, 34px tall; hover moves the link color from rgb(242,242,242) toward white.
- **Story card:** photograph above a 23px bold headline, 13px summary; modules sit on #f2f2f2.
- **Section title:** uppercase AP 700 30px in #000000.
- **Newsletter module:** card with title and one-line description (for example "The Afternoon Wire").
- **Footer:** black, white text, padding 60px 40px 30px.
- Buttons: no primary CTA was detected on the cleaned page.

## Design System Architecture

AP's stylesheet exposes a named system, "maple": root variables such as `--maple-color-ap-red`, `--maple-color-ink`, `--maple-color-gray-075` to `-800`, `--maple-font-family-fallback`, `--maple-font-weight-bold`, `--maple-button-md-padding-y` (8px), `--maple-donate-nav-md-padding-x` (8px), `--maple-story-action-radius` (3px) and `--maple-text-size-fixed-md` (16px). Colors also come in `--LIGHT`/`--DARK`/`ALTMODE` pairs (for example `--color-link-text--LIGHT` #0042A9), which shows a light and dark mode are declared; dark mode was not measured. No public documentation for this system was found on the pages opened (the home page, via extraction), and no public design-system site is linked from it.

## Do's and Don'ts

- Do keep surfaces white and #f2f2f2 with #191919 text; reserve #da1026 for small labels.
- Do set section titles in uppercase AP bold 30px.
- Do use 3px radii on cards and controls.
- Do keep stories dense: image, 23px headline, 13px summary.
- Don't use browser default blue #0000ee for links; the first, unstyled capture showed it and it is not brand.
- Don't reproduce the donation overlay, ad banners or accessibility button as brand components.
- Don't mix the alternative reds (#ff322e, #ff1818) into primary use.

## Responsive Behavior

A mobile pass at 390px was attempted, but it returned a "Performing security verification" page (h2 text) instead of the site, so no mobile site measurements exist. The desktop pass reports 1 card column for the mobile layout probe on that verification page, which is not meaningful. Stylesheet breakpoints declared: 768px, 1024px, 1440px, plus max-width 1023px. Mobile layout: not measured.

## Iteration Guide

1. White canvas, #191919 ink, black header and footer; #f2f2f2 for modules.
2. AP at 30px uppercase titles, 23px/27px headlines, 13px/17px summaries.
3. Grid of cards with 3px radii, lead story first.
4. Use #da1026 only for small labels and the logo accent.
5. Run `node web/scripts/verify-designs.mjs --slug=associated-press`; re-measure mobile with an unblocked session.
