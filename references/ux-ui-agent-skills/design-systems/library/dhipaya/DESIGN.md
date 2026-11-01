---
version: alpha
name: Dhipaya Insurance (ทิพยประกันภัย)
category: "Thai Brands"
description: "Dhipaya Insurance's English home page (dhipaya.co.th/en): a saturated blue #21479a and navy #063291 page with white text, Superspace display type at 36px, Tahoma body, square-cornered 48px buttons with a white 2px border (red #e41a23 or periwinkle #7b9ce4), pill 50px inputs and flat, shadow-free Bootstrap-based layout."
colors:
  canvas: "#ffffff"
  ink: "#063291"
  ink-muted: "#8d8d8d"
  ink-faint: "#c6c6c6"
  ink-dark: "#555555"
  ink-sky: "#86cbff"
  ink-sky-soft: "#90d2f8"
  ink-pale: "#f2f2fa"
  primary: "#e41a23"
  on-primary: "#ffffff"
  primary-hover: "#417bb8"
  surface: "#21479a"
  surface-2: "#22499d"
  surface-light: "#f5f8ff"
  surface-lighter: "#f0f4fd"
  surface-grey: "#cccccc"
  button-secondary-bg: "#7b9ce4"
typography:
  display:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 46.8px
  display-mobile:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 26px
    fontWeight: 400
    lineHeight: 33.8px
  watermark:
    fontFamily: Kanit, sans-serif
    fontSize: 100px
    fontWeight: 600
    lineHeight: 70px
  heading-section:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 39.6px
  heading:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 42px
  subheading:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 28.6px
  body:
    fontFamily: tahoma, arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 44px
  nav:
    fontFamily: Superspace, "Noto Serif TC", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  input:
    fontFamily: tahoma, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 32px
rounded:
  xs: 13px
  sm: 17px
  md: 50px
  none: 0px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 15px
  s6: 17px
  s7: 18px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 25px
    height: 48px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 48px
    borderColor: "{colors.canvas}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 0px 0px 15px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 20px 0px 0px
  text-input:
    textColor: "{colors.ink-sky}"
    typography: "{typography.input}"
    rounded: "{rounded.md}"
    padding: 0px 20px
    height: 36px
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

This file documents the English home page of Dhipaya Insurance (ทิพยประกันภัย, "TIP"), a Thai non-life insurer, at https://www.dhipaya.co.th/en. The page title measured is Thai ("ทิพยประกันภัย ประกันภัยออนไลน์ พร้อมให้บริการแก่ลูกค้าให้ได้รับความพึงพอใจสูงสุด") and the document language is `th`, while the interface strings on /en are English: HOME, SERVICES, PRODUCTS, ABOUT, QUESTIONS, NEWS & ACTIVITIES, INVESTOR, CHAMBER, CONTACT.

The page is a long blue scroller. The top is a campaign banner ("TIPSOL", with a mascot, "1736" and tipinsure.com), then a blue "TIP Services" carousel with photographic cards (Health and Accident Claim Service, Check Policy Information, List of Hospital), an online-insurance block with device mock-ups and app-store badges ("Why would many people purchase insurance online?"), a co-working "Chamber" section with a virtual-tour button, a "Dhipaya Tamdee Maimeeteesinsood" charity gallery, a "TIP News" feed, an awards carousel, a credit-rating block (Level A-), ISO 9001 and ISO 27001 statements with shareholder logos, and a multi-column link footer.

Tone is corporate and reassuring: plain English labels ("View all services", "Check Policy Information"), photography of clinicians and call-centre staff, a friendly mascot in campaign art, thin red underline ticks beneath card titles.

Role notes. The extractor's `h1` was a decorative ghost word ("Ser vice", Kanit 100px at an almost transparent `#b9cffe0f`), so it is overridden to the real h2 "Dhipaya is always improving"; the ghost type is kept as `watermark`. The first capture showed a campaign popup over a scrim; the batch re-extraction removed it, and the banner now shown is page content.

## Colors

Measured on the desktop pass. Backgrounds by area: `#21479a` (2017), `#ffffff` (1075), `#cccccc` (1024), `#000000` (1024), `#22499d` (693), `#f5f8ff` (635), `#063291` (453), `#f0f4fd` (333). Text by characters: `#ffffff` (733), `#8d8d8d` (386), `#063291` (331), `#c6c6c6` (285), `#86cbff` (163), `#555555` (117), `#f2f2fa` (113), `#90d2f8` (88).

- `surface` `#21479a` and `surface-2` `#22499d`: the blue service and footer bands. `#063291` is `ink`, headings on white ("Dhipaya Tamdee" 36px), and `--color-primary` in the shipped `:root`.
- `primary` `#e41a23` (`--color-red`): the filled button and the thin red ticks.
- `button-secondary-bg` `#7b9ce4`: the "Virtual Tour" button fill. `primary-hover` `#417bb8` is `--color-primary-hover`.
- `ink-sky` `#86cbff` (`--color-secondary`) and `ink-sky-soft` `#90d2f8`: light-blue text and input text on blue.
- `ink-pale` `#f2f2fa`: card titles on blue. `ink-muted` `#8d8d8d`, `ink-faint` `#c6c6c6`, `ink-dark` `#555555`: secondary text, with `#555555` on the "purchase insurance online" heading.
- `surface-light` `#f5f8ff` and `surface-lighter` `#f0f4fd`: pale panels; `surface-grey` `#cccccc` and the `#000000` area belong to media regions.

The `:root` also declares `--dark-20` `#081895`, `--dark-40` `#08178e`, `--dark-60` `#071473`, `--dark-80` `#010b59`, `--dark-100` `#000842`, `--blue-medium` `#3080cb` and `--blue-light` `#3ec8ff`; they were not measured on visible elements. Bootstrap defaults (`--primary` `#007bff`, `--danger`, `--success`, `--indigo` and others) are framework defaults, not brand colours.

## Typography

Three families. Superspace (regular and bold) is the display and UI face, with `Noto Serif TC` in the stack. Tahoma (the site's `--font-standard`: `tahoma,arial,sans-serif`) sets small body text. Kanit (400, 500, 600, 700) is loaded for Thai and appears in the ghost watermark and base `body` (10px uppercase). Characters by family: Superspace 1263, tahoma 1148, Kanit 109. Weights: 400 (1695), 700 (782), 600 (30), 500 (13).

Probed and measured: the hero-section h2 "Dhipaya is always improving" is 36px/400 on a 46.8px line (26px/33.8px at 390px); section headings such as "Dhipaya Tamdee" are 36px/700 on 39.6px in `#063291`; "TIP Services" is 30px/700 on 42px in `#f2f2fa`; card titles are 20px/700 on 25px; h3 "Location Search Service" is 22px/700 on 28.6px; buttons are 18px/700 on a 44px line; nav labels are 18px/400 uppercase with 5px side padding; footer links are Tahoma 14px/400 on 21px; address text is Tahoma 12px/400 on 18px in `#8d8d8d`; the search input is Tahoma 16px/400 on 32px.

Letter-spacing is `normal`. Superspace is a licensed face served by the site; Kanit and Noto Serif TC are open-source Google Fonts.

## Layout

A fixed transparent header (140px tall) carries a utility row (language EN, search field) and a nav row; below it, full-width bands alternate blue `#21479a`, white and pale blue. Cards sit in horizontal carousels with arrow buttons in the bottom-right corner (white outlined squares). The footer is a blue band 885px tall with columns TIP Service, Product, Investor Relations, Contact Us, Dhipaya Tamdee, Online booking, About TIP and TIPH Affiliated company.

Measured paddings: 5px (31 uses), 20px (22), 10px (21), 15px (18), 50px (14), 17px (10). The page is 5944px tall at 1280px width. The shipped `:root` declares Bootstrap breakpoints `--breakpoint-xs` 0, `-sm` 576px, `-md` 768px, `-lg` 992px and `-xl` 1200px.

## Elevation & Depth

Flat. No box-shadow was measured (the frequency table is empty). Depth comes from colour bands, photography, the ghost watermark words behind sections, white 2px borders around buttons and carousel arrows, and full-bleed imagery.

## Shapes

Mostly square. Buttons have 0px radius and a 2px white border. The search input is a 50px pill. Round elements (`50%`, 20 uses) are carousel dots and icon discs; one 13px and one 17px radius are also measured. Photography cards are square-cornered.

## Components

Primary button. `#e41a23` fill, white 18px/700 label, 2px white border, 0 radius, `0 25px` padding, 48px high (371px wide for "Car repair service center and hospital").

Outline button. `btn btn-outline-white`: transparent fill, white 2px border, white 18px/700, `0 20px` padding, 48px high ("View all services", 240px wide). The "Virtual Tour" variant is filled `#7b9ce4` (250px wide).

Search input. Tahoma 16px, `#86cbff` text, 50px radius, `0 20px` padding, 36px high.

Service card. Photo with a 20px/700 `#f2f2fa` title and a short red underline tick; arrow buttons below.

News card. Blue tile with category label, red tick, "Read more", time and view-count meta.

Nav. White 18px uppercase labels over the hero, EN language switch, search field.

Footer. Blue `#21479a` band with white Tahoma links.

## Design System Architecture

No public design system or brand guideline was found: the home page (opened as text) lists company, investor and service links but no design-system, brand or GitHub link. The de-facto system is a Bootstrap 4 theme: `btn btn-outline-white`, `.wow fadeInUp` (WOW.js and Animate.css variables `--animate-duration` 1s), Bootstrap's `--breakpoint-*` and colour variables, plus site variables `--color-primary` `#063291`, `--color-secondary` `#86cbff`, `--color-red` `#e41a23`, `--color-primary-hover` `#417bb8`, `--font-standard`, `--font-ch` (`400 'Noto Serif TC','Superspace', sans-serif`) and the navy ramp `--dark-20` to `--dark-100`. Source: https://www.dhipaya.co.th/en as measured.

## Do's and Don'ts

Do build pages from blue `#21479a` bands with white text, and use navy `#063291` for headings on white.

Do use square 48px buttons with a 2px white border: red `#e41a23` for the main action, outline white for secondary.

Do use Superspace for headings and buttons and Tahoma for small body text.

Do keep input fields as 50px pills.

Don't add shadows; none are measured.

Don't use Bootstrap default blues or greens as brand colours.

Don't document the ghost watermark word as a heading.

Don't round buttons.

## Responsive Behavior

Measured at 390px: the h2 is 26px/33.8px (36px/46.8px on desktop); body text is 14px on an 18.2px line in `#90d2f8`; the primary button is 16px/700 on a 38px line, 40px high (48px on desktop), `#e41a23` fill, 0 radius; the nav measures 16px/24px in white and 105px tall. Breakpoints are declared as Bootstrap variables (576px, 768px, 992px, 1200px). Layout reflow was not measured.

## Iteration Guide

1. Blue bands (`#21479a`) with white text; navy `#063291` on white sections.
2. Superspace 36px for section titles, 18px/700 for buttons, Tahoma 12 to 16px for body.
3. Buttons are 48px, square, white 2px border; red for the main action.
4. Add red 2px-high ticks under card titles; keep everything flat.
5. Re-measure the live site before using declared-only colours such as `#081895`.
