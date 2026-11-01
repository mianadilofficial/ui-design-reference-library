---
version: alpha
name: AVA SRG
category: "Portfolio"
description: "AVA SRG, the 3.5-month web-design course by the AVA Digital studio: a warm-grey #dad9d3 / #e9e8e2 / #323232 three-surface page, giant uppercase Aeonik Pro Bold section titles at 76.7949px, IBM Plex Mono uppercase labels at 11.2614px, #211d1d ink, and a single red #d4202c that appears on hover."
colors:
  canvas: "#dad9d3"
  page-body: "#323232"
  ink: "#211d1d"
  primary: "#d4202c"
  on-primary: "#ffffff"
  surface-light: "#e9e8e2"
  surface-card: "#f7f7f7"
  ink-muted: "#211d1d99"
  ink-on-dark: "#ececec"
  ink-on-dark-muted: "#ececec99"
typography:
  display:
    fontFamily: "\"Aeonik Pro Bold\""
    fontSize: 76.7949px
    fontWeight: 700
    lineHeight: 61.4359px
    letterSpacing: "-1.5359px"
    textTransform: uppercase
  headline:
    fontFamily: "\"Aeonik Pro Medium\""
    fontSize: 33.6486px
    fontWeight: 500
    lineHeight: 33.6486px
    textTransform: uppercase
  title:
    fontFamily: "\"Aeonik Pro Medium\""
    fontSize: 16.0102px
    fontWeight: 500
    lineHeight: 16.0102px
    letterSpacing: "-0.320205px"
  title-mobile:
    fontFamily: "\"Aeonik Pro Medium\""
    fontSize: 20.592px
    fontWeight: 500
    lineHeight: 20.592px
    letterSpacing: "-0.41184px"
  body:
    fontFamily: Aeonik Pro Regular
    fontSize: 13.568px
    fontWeight: 400
    lineHeight: 16.2816px
  label:
    fontFamily: "\"IBM Plex Mono\""
    fontSize: 11.2614px
    fontWeight: 400
    lineHeight: 13.5137px
    letterSpacing: "-0.337843px"
    textTransform: uppercase
  nav:
    fontFamily: "\"IBM Plex Mono\""
    fontSize: 11.2614px
    fontWeight: 300
    lineHeight: 13.5137px
    letterSpacing: "-0.337843px"
    textTransform: uppercase
  nav-pill:
    fontFamily: "\"IBMPlexMono Regular\""
    fontSize: 11.2614px
    fontWeight: 400
    lineHeight: 11.2614px
    textTransform: uppercase
  link:
    fontFamily: "\"IBMPlexMono Medium\""
    fontSize: 14.5178px
    fontWeight: 400
    lineHeight: 14.5178px
    textTransform: uppercase
rounded:
  xs: 3px
spacing:
  s1: 0.81px
  s2: 1px
  s3: 1.63px
  s4: 3.26px
  s5: 3.93px
  s6: 4.96px
  s7: 5.16px
  s8: 8.01px
  s9: 9.63px
  s10: 10.08px
  s11: 11.9398px
  s12: 16.0102px
  s13: 24.0154px
  s14: 32.0205px
components:
  nav-pill:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav-pill}"
    height: 22px
  nav-pill-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 3.93472px 0px
  header:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.nav}"
    padding: 16.0102px 0px 0px
  promo-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.title}"
  text-input:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.label}"
    padding: 1px 0px
    height: 23px
  section-dark:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-on-dark}"
---

## Overview

AVA SRG (internally also called "Sharaga") is a 3.5-month web-design training course run by AVA Digital, a studio in St. Petersburg, Russia (page URL `srg.ava-digital.site/en`, title "AVA SRG"). The page is a long single scroll, 17014px at a 1280px viewport with 1508 visible elements, that alternates three flat surfaces: warm grey `#dad9d3`, a lighter warm grey `#e9e8e2`, and charcoal `#323232`. A recorded probe measured the sections in order: `hero_section` (`#dad9d3`, 800px tall from the top), an award block (`award_wrap`) on `#e9e8e2`, a further `#dad9d3` section, `benefit_section` (`#e9e8e2`), `program_section` (over the `#323232` root), `review_section` and `photo_section` (both `#323232`), `faq_section` (`#dad9d3`) and a `#323232` footer 880px tall.

The first screen is a poster. A halftone, dithered, grey-scale rendering of a hand giving a "rock" sign floats above a giant wordmark "AVA SRG'" that spans the full width; a monospaced status line along the top ("FRIENDS@AVA-DIGITAL.RU", a live "SPB,RU" clock) and coordinate-like captions ("0000 X 1280 H") sit at the edges. A row of small black pill links — "[ PROJECTS ]", ABOUT, TEAM, PROGRAM, REVIEWS, CONTACT — floats mid-screen. The first statement is "WE ARE YOUR CONSULTANTS, MENTORS, AND BUSINESS PARTNERS." The voice, read from the page, is direct and confident, second person, with short imperative lines, bracketed stat labels such as "[ DURATION ]" and uppercase headlines. Later sections, read from the page text, list the team, a student project gallery by course flow and the studio's awards (Dprofile, Awwwards, CSSDA, G8 Fest).

## Colors

- **Canvas `#dad9d3`** is the surface that covers about 70% of the first screens of the capture (the hero and the philosophy statement). **Surface light `#e9e8e2`** is the lower, lighter band (the award and benefit blocks). **Page body `#323232`** is the extractor's body/root fill and the measured largest background area: the root container is `rgb(50, 50, 50)`, and the program, review, photo and footer sections show through it.
- **Ink `#211d1d`** is the dark text on light surfaces (2705 characters); **ink muted `#211d1d99`** (110 characters) is its translucent variant. **Ink on dark `#ececec`** (2603 characters) is text on the charcoal sections; `#ececec99` (30 characters) is its muted variant.
- **Primary `#d4202c`** is the only chromatic brand color: the hover fill of the black nav pills (measured on "[ PROJECTS ]", ABOUT and TEAM, from `#211d1d` to `#d4202c`, text and border white). Eight elements containing asterisks ("********") are also set in this red, at 19.2123px (recorded probe). At rest, actions are `#211d1d` with `#ffffff` text.
- **Surface card `#f7f7f7`** is the fill and border of the small promo card at the top right ("After Effects Animation Course").
- The red "W. Site of the Day" ribbon at the left edge and the round "Website of the Day awarded" badge are third-party award marks; they are not documented as brand UI. The stylesheet declares `--swiper-theme-color` `#007aff`, the slider library's default, which is not a brand color.

The fixed header text measures `#ececec` but renders dark on the light sections because the header uses `mix-blend-mode: difference` (recorded probe), so it inverts over each surface.

## Typography

Two families carry the page, each in several named faces: **Aeonik Pro** (Regular, Medium, Bold) and **IBM Plex Mono** (several face names: `IBM Plex Mono`, `IBMPlexMono Regular`, `IBMPlexMono Medium`). Characters by family: Aeonik Pro Regular 2682, IBM Plex Mono 1843, Aeonik Pro Medium 427, IBMPlexMono Medium 369, Aeonik Pro Bold 102, IBMPlexMono Regular 72. Sizes are fractional, for example 13.568px and 11.2614px.

- **Display**: Aeonik Pro Bold 76.7949px, weight 700, line-height 61.4359px (tighter than the size), letter-spacing `-1.5359px`, uppercase; used for section titles such as "AVA DIGITAL_", "OUR TEAM" and the pricing line. Larger decorative numerals ("1 2 3") measured 151.962px at `rgba(236, 236, 236, 0.2)`.
- **Headline**: Aeonik Pro Medium 33.6486px, weight 500, uppercase, `#211d1d`; the philosophy statement, set as 49 individual letter elements.
- **Title**: Aeonik Pro Medium 16.0102px, weight 500, letter-spacing `-0.320205px`; promo-card titles, team names. This is the extractor's h1 (see Iteration Guide). Mobile: 20.592px.
- **Body**: Aeonik Pro Regular 13.568px / 16.2816px, weight 400; the dominant size by character count (2646).
- **Label and nav**: IBM Plex Mono 11.2614px / 13.5137px, uppercase, letter-spacing `-0.337843px`, weight 400 for labels and 300 for the header utilities. **Link**: IBMPlexMono Medium 14.5178px, uppercase ("CONTACT US").
- Other measured sizes: 19.2666px (169 characters), 25.6435px (64), 14.5178px (34).

Substitute guidance if the commercial Aeonik Pro is unavailable: any neo-grotesque sans at weights 400, 500 and 700; IBM Plex Mono for the mono layer is loaded as a web font by the page.

## Layout

The grid is edge-anchored rather than centered. Small captions pin to the corners of the viewport; the header is `position: fixed` and spans 1280px with a 16.0102px top padding and 53px height. In the hero, short body copy and a "CONTACT US" link sit top left, the promo card top right; the philosophy statement is left aligned and a body paragraph with a second "CONTACT US" link, the e-mail and Instagram and Telegram links are pushed to the right half of its section. The lower sections use a left title and a right-hand list: for example the award list ("BEST ON DPROFILE [40]", "BEST UI PROJECTS ON DPROFILE [75+]", "DPROFILE FEST WINNERS [2024, 2025]") is set as ruled rows with a mono label at the left and a bracketed value at the right.

Measured paddings include 11.9398px (19 uses), 16.0102px (14), 9.63328px (11), 32.0205px (11), 28.7642px (9) and 88.0563px (7). Gaps cluster at 0.81408px (30), 3.93472px (22), 8.00512px (22), 16.0102px (13) and 11.9398px (11). Section heights are large: 800px, 1200px, 1798px and others, with generous empty surface between content blocks.

## Elevation & Depth

There is no elevation system. No box-shadow was measured on the page, and the stylesheet's declared shadows (`0 4px 16px rgba(0,0,0,.12)`, `0 4px 20px rgba(0,0,0,.3)`, `0 1px 3px rgba(0,0,0,.15)`) are not seen on the captured first screen. Depth comes from the dithered hand image, from the three alternating surfaces, from a translucent `#00000066` background area (weight 1024) and from the `mix-blend-mode: difference` header that stays legible over every section. Borders are hairlines: `#211d1d` (5 elements), `#ececec` (5), `#f7f7f7` (3) and `#211d1d33` (2).

## Shapes

The page is almost entirely square-cornered. The only measured radius is `3px` (4 elements, including the "CONTACT US" link and its arrow tile). Nav pills measured `0px` radius, 22px height and white `#ffffff` text on `#211d1d`. The stylesheet declares other radii (4px, 5px, 6px, 8px, 10px, 11px, 12px); none appear in the measured roles. The small arrow tile beside "CONTACT US" is a dark square with a white arrow in the capture. The hero imagery and wordmark are not boxed.

## Components

- **Nav pill**: fixed, uppercase IBMPlexMono Regular 11.2614px, white `#ffffff` text on `#211d1d`, 22px high, square; hover fills `#d4202c`, text and border stay `#ffffff`.
- **Link ("CONTACT US")**: IBMPlexMono Medium 14.5178px, uppercase, `#211d1d`, 3.93472px vertical padding, 3px radius, underlined with a dark arrow tile.
- **Header**: fixed bar with language toggle ("EN / RU"), e-mail, a live city/time stamp; 11.2614px mono at weight 300; blend mode `difference`.
- **Promo card**: `#f7f7f7`, "After Effects Animation Course", a thumbnail, a "LEARN MORE" mono label with an arrow.
- **Text input**: application-form field, IBM Plex Mono 11.2614px uppercase, `#ececec` text, 1px vertical padding, 23px high and 226px wide, on the charcoal form section. Form labels read "My name is", "My email", "and my telegram", "Link to my portfolio" in Aeonik Pro 19.2666px.
- **Stat rows**: ruled rows, a mono label left and a bracketed value right.
- **Team names**: Ilya Gorobtsov, Yulia Khasanshina, Nikita Kechkin and others are set in Aeonik Pro Medium 16.0102px, `#ececec` (14 elements measured by probe).

## Design System Architecture

No public design system, brand guideline, press kit or typeface credits exist for AVA SRG: the page opened at https://srg.ava-digital.site/en links only to a personal-data consent PDF, a privacy policy and the studio's award profiles (Dprofile, Awwwards, CSSDA, Behance). The de-facto system is the shipped markup and CSS. `:root` declares three custom properties only: `--ease-custom: cubic-bezier(0.83, 0, 0.17, 1)` and two Swiper slider variables (`--swiper-theme-color`, `--swiper-navigation-size` 44px). Colors, sizes and spacing live in per-element rules with machine-generated class names (`section--u-…`, `div--u-…`, `text-block-wrap-div`) plus semantic section classes (`hero_section`, `benefit_section`, `program_section`, `review_section`, `photo_section`, `faq_section`, `footer`, `award_wrap`). The `@font-face` list names `Aeonik Pro Regular`, `Aeonik Pro Medium`, `Aeonik Pro Bold`, `IBM Plex Mono`, `IBMPlexMono Regular`, `IBMPlexMono Medium` and `YS Text`. Tokens in this file are therefore recovered from measurement, not from a published source.

## Do's and Don'ts

- Do alternate the three surfaces `#dad9d3`, `#e9e8e2` and `#323232` in full-bleed bands.
- Do set section titles in Aeonik Pro Bold, uppercase, with the tight 61.4359px line-height and negative tracking.
- Do use IBM Plex Mono uppercase at 11.2614px for every label, caption, nav item and stat.
- Do keep actions square and dark (`#211d1d` with white text) and reveal `#d4202c` only on hover.
- Do let giant type and a single dithered grey-scale image carry the first screen.
- Don't add drop shadows or rounded cards; none were measured.
- Don't document the Awwwards ribbon, the CSSDA badge or the cookie consent banner as brand UI.
- Don't use the Swiper default `#007aff` as an accent.
- Don't set body copy larger than 13.568px on desktop without remeasuring.

## Responsive Behavior

Measured in the 390px mobile pass: the title style grows from 16.0102px to 20.592px (line-height 20.592px, tracking `-0.41184px`); the h2 label grows from 11.2614px to 15.171px (line-height 18.2052px, tracking `-0.45513px`); the header's mono text is 12.987px at weight 300 with 15.5844px line-height, 24.375px top padding and a 59px height (53px on desktop); the "[ PROJECTS ]" pill measures 14.391px, 34px tall and 128px wide on `#211d1d` (22px tall on desktop). The character-size histogram on mobile peaks at 18.408px (2984 characters), then 15.171px (1235), 20.592px (301), 15.2786px (266), 12.987px (105) and 26.013px (79). How sections reflow, the layout of the hero wordmark and the form at narrow widths were not measured.

## Iteration Guide

1. Set the surfaces first: `#dad9d3` hero, `#e9e8e2` secondary band, `#323232` dark sections; text `#211d1d` on light and `#ececec` on dark.
2. Use two families: Aeonik Pro (Bold 76.7949px for titles, Medium 33.6486px for statements, Regular 13.568px for body) and IBM Plex Mono at 11.2614px for labels.
3. Make nav pills `#211d1d` with `#ffffff` text and a `#d4202c` hover; keep every corner at 0 or 3px.
4. The extractor's h1 is the promo-card title, so `display` here is the 76.7949px section-title style measured by a recorded probe, not the extractor's h1.
5. Probe any new style before adding it: `node web/scripts/extract-tokens.mjs --slug=ava-srg--<page> --url=<url> --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=ava-srg`.
