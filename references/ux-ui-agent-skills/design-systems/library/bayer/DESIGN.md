---
version: alpha
name: Bayer
category: "Pharma"
description: "Bayer Global corporate site: Bayer Sans 400/500/700 throughout, 72px bold white headlines on #0f172b deep navy sections, #10384f dark-blue ink on #ffffff, square white 48px uppercase CTAs tracked 0.42px, #f1f5f9 elevated surfaces, #0075a6 link hover, Bayer bright blue #00bcff and green #66b512 accents and a pill-shaped floating navigation bar."
colors:
  canvas: "#ffffff"
  page-largest: "#0f172b"
  ink: "#10384f"
  primary: "#ffffff"
  on-primary: "#10384f"
  surface-elevated: "#f1f5f9"
  surface-accented: "#e2e8f0"
  surface-muted: "#f8fafc"
  surface-green: "#ecf8dd"
  link-hover: "#0075a6"
  ink-muted: "#406072"
  ink-toned: "#60718b"
  ink-on-dark: "#cad5e2"
  ink-black: "#000000"
  green-dark: "#0e6801"
  bright-blue: "#00bcff"
  bright-green: "#66b512"
  accent-red: "#d30f4b"
typography:
  display:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 72px
    fontWeight: 700
    lineHeight: 80px
  display-mobile:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  heading:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  subheading:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body-small:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 0.42px
    textTransform: uppercase
  selector:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
  input:
    fontFamily: "\"Bayer Sans\", \"Noto Sans SC\", \"Noto Sans TC\", \"Noto Sans JP\", \"Noto Sans Thai\", \"Noto Sans Hebrew\", \"Noto Sans Arabic\", \"Noto Sans Korean\", \"Noto Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
rounded:
  none: 0px
  xs: 6px
  pill: 9999px
spacing:
  s1: 1.33px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 20px
  s11: 24px
  s12: 32px
  s13: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 20px 10px 24px
    height: 48px
  button-text:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 4px 0px
    height: 56px
  selector-button:
    backgroundColor: "{colors.surface-elevated}"
    textColor: "{colors.ink}"
    typography: "{typography.selector}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 34px
  selector-button-hover:
    backgroundColor: "{colors.surface-accented}"
  nav-link-hover:
    textColor: "{colors.link-hover}"
  text-input:
    backgroundColor: "{colors.surface-elevated}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 28px
---

# Bayer

## Overview

The measured site is Bayer's global corporate site at https://www.bayer.com/en (title "Home | Bayer Global"), 9,800px tall at 1280px. It is a corporate life-science portal rather than a shop. Its headline proposition is the h1 "Health for all, Hunger for none", in 72px bold white type, and the main sections cover who Bayer is ("Who We Are: A Global Life Science Company Focused on Health…", opening with "Bayer is a global life science company working at the intersection…"), its three divisions ("Advancing Care for Patients Worldwide", "Explore Our Pharmaceuticals Division"), stories ("How digitalization in agriculture opens up new opportunities"), events, investor data and a closing contact block.

The full-page capture did not render the content sections: it shows the loading spinner at the top, the floating navigation, a long empty #0f172b area and then the footer (which is visible: "Any questions? We're here to help." with "Overview and Contacts", "Products A-Z", "Report a Side Effect", the Bayer share price and DAX index, and link columns for Portfolio, Investors and Careers). The extraction was re-run once and the capture stayed the same, so imagery and art direction for the middle of the page are not described here; this document relies on the DOM measurements, which did record the sections' text and styles.

What is visible: a white page with a centred, pill-shaped floating navigation bar containing the Bayer cross logo, "About us", "Portfolio", "Investors", a menu icon and a round green-to-teal search button; small "English (EN)" and "Bayer Global" selectors at the top right; and a large deep-navy section. The voice is aspirational and plain ("Health for all, Hunger for none", "Any questions? We're here to help.").

## Colors

- **canvas #ffffff** — page background.
- **page-largest #0f172b** — the deep navy that covers the largest measured area (`--brandDarkBlue600`, also `--backgroundBgPressed`), with translucent versions #0f172b99 and #0f172b4d measured as overlays.
- **ink #10384f** — the most-read text colour, Bayer dark blue (`--brandDarkBlue500`, `--backgroundBgInverted`).
- **primary #ffffff / on-primary #10384f** — the measured content CTA ("BAYER AT A GLANCE") is a white button with dark-blue text, used on navy sections.
- **surface-elevated #f1f5f9** — locale selectors and the search field (`--backgroundBgElevated`); **surface-accented #e2e8f0** is their measured hover and `--backgroundBgAccented`; **surface-muted #f8fafc** (`--backgroundBgPermanentMuted`).
- **surface-green #ecf8dd** — `--backgroundBgBrandGreen`, a measured background area.
- **link-hover #0075a6** — measured hover colour of the nav links (with underline); `--backgroundBgHover` and `--borderBorderHover`.
- **ink-muted #406072**, **ink-toned #60718b** (`--borderBorderToned`), **ink-on-dark #cad5e2** (`--brandGrey300`), **ink-black #000000** — secondary text colours measured on the page.
- **green-dark #0e6801** — green text (the "Any questions?" emphasis in the footer) and `--backgroundBgBrandGreenDark`.
- **bright-blue #00bcff** (`--brandBrightBlue500`) and **bright-green #66b512** — the two Bayer brand accents, both measured as background areas.
- **accent-red #d30f4b** — measured text colour and `--borderBorderBrandRed`.

The CSS carries many more brand ramps (`--brandMidBlue*`, `--brandFuchsia*`, `--brandDarkGreen*`, `--brandMidPurple*`, and `--bayerFoundation*` / `--bayerFinkelstein*` sub-brand palettes), not measured on this page.

## Typography

One family: **Bayer Sans**, loaded at 400, 400 italic, 500, 500 italic and 700, with Noto Sans fallbacks for Chinese, Japanese, Thai, Hebrew, Arabic and Korean scripts in the same stack.

- **display** — 72px / 700 / 80px, the h1.
- **heading** — 48px / 700 / 56px, the h2 ("Who We Are…").
- Section teasers in headers and footers of division blocks measure 30px / 700 / 36px and 24px / 400 / 30px.
- **subheading** — 24px / 700 / 30px, the h3 story titles.
- **body** — 20px / 400 / 30px for intro paragraphs; 18px is the most frequent text size overall; **body-small** 16px / 400 / 24px.
- **button** — 14px / 500 / 20px, uppercase, 0.42px tracking. Small labels use 12px and 14px with 0.4px tracking.
- **selector** — 14px / 500 / 18px for the locale buttons.
- **input** — 18px / 400 / 28px.

Weights stay at 400 for reading text and 700 for headings; 500 is reserved for buttons and labels.

**Substitute:** Bayer Sans is proprietary. The declared fallback is Noto Sans, which is open source and covers every script in the stack.

## Layout

At 1280px the extraction recorded one continuous white band 9,828px tall with content placed up to x 1248 and up to 5 card columns. The floating navigation is centred and narrower than the page. Measured gaps range from 2px to 64px (16, 8, 4, 12, 56, 20, 32, 10, 6, 40, 24, 28, 64px) and paddings from 4px to 56px, with 32px the most frequent padding. The footer (visible in the capture) has a three-column contact block with share prices on the left, three link columns, social icons, and a bottom legal row in small uppercase.

## Elevation & Depth

Measured shadows follow Tailwind's ladder: `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px`, `rgba(0, 0, 0, 0.06) 0px 2px 4px -1px` and `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px`. The floating navigation bar is the visibly raised element in the capture. Translucent navy overlays (#0f172b99, #0f172b4d) sit over imagery to hold white text, and the token set includes many alpha variants (`--alphaGrey95080`, `--alphaDarkBlue50080`, `--alphaWhite80`).

## Shapes

Measured radii are 999.008px (pills: the navigation bar and round buttons), and 6px split as `6px 0px 0px 6px` / `0px 6px 6px 0px` for joined input-and-button pairs. Buttons and selectors are square. The radius tokens in CSS are `--borderBorderRadiusRoundedXs` .125rem, `-Md` .375rem, `-Xl` .75rem, `-2xl` 1rem, `-3xl` 1.5rem, `-4xl` 2rem and `-Full` 62.438rem.

## Components

- **button-primary** — #ffffff fill, #10384f 14px/500 uppercase label with 0.42px tracking, 0px radius, padding 10px 20px 10px 24px (extra left padding for alignment with an icon), 48px tall.
- **button-text** — "PAST EVENTS": transparent, #10384f uppercase label, 4px 0 padding, 56px tall (tab-style text button).
- **selector-button** — "English (EN)", "Bayer Global": #f1f5f9 fill, #10384f 14px/500, 8px 16px padding, 34px tall; hover #e2e8f0 (measured).
- **floating nav** — white pill with logo, three text links (#10384f, hover #0075a6 with underline, measured), a menu icon and a circular gradient search button.
- **text-input** — #f1f5f9 field with 18px #10384f text.
- **footer contact block** — green "Any questions?" emphasis, 30px dark-blue links with chevrons, share-price tiles with green up-arrows.

## Design System Architecture

No public Bayer design system or brand-guideline page could be opened for this document: https://www.bayer.com/en returned HTTP 403 to WebFetch (recorded in SOURCES.json), and the captured footer shows no design-system link. The shipped CSS on https://www.bayer.com/en reveals a token architecture with three layers. Primitive ramps are named by brand colour and step (`--brandDarkBlue500`, `--brandBrightBlue500`, `--brandBrightGreen400`, `--brandFuchsia600`, plus `--bayerFoundation*` and `--bayerFinkelstein*` for sub-brands). Alpha primitives encode colour, step and opacity (`--alphaDarkBlue50080` = #10384f at 80%). Semantic tokens are named by role (`--backgroundBgElevated`, `--backgroundBgInverted`, `--backgroundBgHover`, `--backgroundBgError`, `--borderBorderSubtle`, `--borderBorderHover`, `--borderBorderBrandRed`) and radius tokens follow Tailwind names (`--borderBorderRadiusRoundedMd`). Tailwind utility variables (`--tw-*`) are present too, so components are built with utilities that read these semantic tokens.

## Do's and Don'ts

- Do set all text in Bayer Sans: 700 for headlines, 400 for reading text, 500 for labels.
- Do use #10384f for text on white and white on #0f172b.
- Do keep CTAs square, uppercase, 14px with 0.42px tracking.
- Do use #0075a6 with an underline for link hover.
- Do keep the bright blue and green for brand marks and accents, not for large fills.
- Don't round buttons; pills are reserved for the floating nav and round icon buttons.
- Don't treat the #f1f5f9 locale selectors as the main call to action.
- Don't document imagery for the middle sections from this capture; it did not render.

## Responsive Behavior

The 390px mobile pass measured the h1 at 48px / 700 / 56px (from 72px) with 0 96px padding; the intro paragraph unchanged at 20px / 30px; the primary CTA ("EXPLORE THE WHOLE RANGE OF OUR PRODUCT PORTFOLIO") white with #10384f text at 14px / 500 uppercase, 0.42px tracking, padding 10px 20px 10px 24px and 60px tall. Division teaser titles drop from 30px to 24px / 30px. The mobile page measured 11,564px tall as one white band with 1 header link visible. Stylesheet breakpoints are min-width 768px and 1024px (most used), plus 1440px, 1920px and 550px. Navigation behaviour on mobile was not measured.

## Iteration Guide

1. Start on #ffffff with #10384f Bayer Sans text; use #0f172b for immersive sections.
2. Headline at 72px/80px bold (48px/56px on phones); section titles at 48px/56px.
3. Put a white, square, uppercase `button-primary` on dark sections.
4. Use #f1f5f9 for elevated controls and #e2e8f0 for their hover.
5. Keep shadows on the Tailwind ladder and only for floating elements.
6. Reach for semantic tokens (`--backgroundBg*`, `--borderBorder*`) before brand ramps.
7. Use #00bcff and #66b512 as accents only.
8. Re-capture the page once it renders before describing imagery.
