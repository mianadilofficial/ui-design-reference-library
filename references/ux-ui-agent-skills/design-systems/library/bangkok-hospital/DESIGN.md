---
version: alpha
name: Bangkok Hospital
category: "Thai Brands"
description: "Bangkok Hospital (bangkokhospital.com/en), Thailand's private hospital network: a #fbfbfc and white page with navy #002d73 headings and icons, #363636 body text, Figtree 700 at 33.6px for section titles, satoshi sans for UI, 12 to 16px soft-radius cards, pill chips and red #b21e28 price and buy accents."
colors:
  canvas: "#fbfbfc"
  page-largest: "#ffffff"
  ink: "#363636"
  primary: "#002d73"
  on-primary: "#ffffff"
  link-blue: "#0d66e3"
  link-deep: "#0147a3"
  link-mid: "#236dce"
  accent-red: "#b21e28"
  surface-gray: "#f5f5f5"
  surface-tint: "#edf1ff"
  navy-deep: "#002261"
  tint-navy: "#002d730d"
  hairline: "#e8ebf6"
  nav-text: "#002d73b3"
  ink-card: "#768692"
  ink-subtle: "#737373"
  ink-slate: "#556978"
typography:
  display:
    fontFamily: Figtree, "Figtree Fallback", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 33.6px
    fontWeight: 700
    lineHeight: 46.2px
  display-mobile:
    fontFamily: Figtree, "Figtree Fallback", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33px
  subheading:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, Sarabun, "Sarabun Fallback", "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, Sarabun, "Sarabun Fallback", "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
  button:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, Sarabun, "Sarabun Fallback", "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, Sarabun, "Sarabun Fallback", "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 750
    lineHeight: 18.2px
  chip:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, Sarabun, "Sarabun Fallback", "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 22.75px
  link:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, Sarabun, "Sarabun Fallback", "system-ui", -apple-system, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  input:
    fontFamily: satoshi, "satoshi Fallback", aktiv-grotesk-thai, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 23px
rounded:
  xs: 3px
  sm: 5px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 16px
  3xl: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7.5px
  s7: 8px
  s8: 9px
  s9: 12px
  s10: 16px
components:
  chip-hospital:
    textColor: "{colors.link-deep}"
    typography: "{typography.chip}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 41px
    borderColor: "#e7edff"
  currency-selector:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px
    height: 48px
  currency-selector-hover:
    backgroundColor: "#e7edff80"
    textColor: "{colors.link-deep}"
  cart-tab:
    backgroundColor: "#ffffff59"
    textColor: "{colors.accent-red}"
    rounded: "6px 0px 0px 6px"
    height: 56px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    height: 94px
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.link-deep}"
    typography: "{typography.input}"
    padding: 4px 4px 4px 0px
    height: 31px
  member-card:
    textColor: "{colors.ink-card}"
    rounded: "{rounded.2xl}"
    borderColor: "{colors.hairline}"
    height: 359px
  location-tile:
    backgroundColor: "{colors.surface-gray}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.hairline}"
    height: 194px
  footer:
    textColor: "{colors.ink}"
    height: 1013px
---

## Overview

Bangkok Hospital is the flagship brand of a Thai private hospital network (the footer carries the "MEMBER OF" BDMS affiliation and a "Network Hospitals Directory" link). The measured page title reads "Bangkok Hospital | 'One of the Best Hospitals Thailand' in 3 consecutive years (2023 and 2025) by Newsweek", and the English home page at bangkokhospital.com/en is built as a patient portal: find a hospital, find a doctor, book, buy a health package.

The page begins with a very thin multicolor stripe at the top edge and a white header: the BANGKOK HOSPITAL logo (a blue wordmark with a red and blue cross mark), navigation in bold navy ("Select Hospital" with a chevron, "Health Packages", "Member Cards", "Investor Relations"), an "EN | USD" language and currency selector, and search, cart and account icons. Below it sits a two-column hero: at left a rounded white member card ("Join the club today, get 20 B points!", "Join now & Login", a "B Point" chip) over a 2-by-2 grid of quick actions (Find Doctors, Appointments, Packages, Contact Us, each with a duotone icon) and a "Go to Bangkok Hospital Pattaya" row; at right a large rounded promotional banner (the measured capture shows "MEDICAL ROBOT HUB — Center of Robotic Innovation ASIA PACIFIC" in blue).

"Our Locations" follows in 33.6px bold navy beside a "Find Hospitals" search field and a "Nearby Hospital" button, then eight photographic region tiles with white labels and hospital counts (Bangkok 4 Hospitals, Central 2, West 3, East 11, North 2, Northeast 5, South 6, International 2). "Our Services" shows fourteen line icons in navy with labels (Heart, Cancer, Bone, Brain, Trauma, Check-up, Surgery, Dental, Female, Male, Child, Mother & Child, Aesthetic, Eye & Ent) and a "See All" link. "Packages & Promotions" sits in a large rounded white panel with "Nearby Hospital" and "Currency: USD" links and four-across package cards: poster-like artwork, a title, a pale-blue hospital chip ("Bangkok Cancer Hospital", "Bangkok Hospital Headquarter"), a red price ("4,900 Baht") with a grey struck-through old price and a "≈ 146 USD" conversion, an "Expire Date" line, and two pill buttons, an outlined "Detail" and a filled red "Buy Now". A floating red "CART" tab is fixed at the right edge.

The voice is plain and service-oriented: short noun labels, explicit prices in baht with a USD approximation, and calm medical copy. Photography is warm and human; the interface is cool navy, white and pale blue.

## Colors

Navy is the identity, and red is reserved for money and the cart.

- **primary #002d73 / on-primary #ffffff** — the navy of headings ("Our Locations", 411 characters), logo, icons and the selected state; the generated primary, a white currency button, was mis-detected and is replaced by this measured color.
- **ink #363636** — body text (2546 characters, the most-read color).
- **canvas #fbfbfc** and **page-largest #ffffff** — the page and panel/card surfaces (5354 and 6835 area units).
- **link-blue #0d66e3** (686 characters) — the bright blue for links and actions such as "Find Doctors" and "Nearby Hospital"; **link-deep #0147a3** (131) for the search field text, chips and hover states; **link-mid #236dce** (64).
- **accent-red #b21e28** — 184 characters: prices, the floating cart tab and the "Buy Now" accent. The fill color of the "Buy Now" pill was not measured individually.
- **surface-gray #f5f5f5** (446 units), **surface-tint #edf1ff** (128) and **navy-deep #002261** (125) — measured background areas; **tint-navy #002d730d** (10) — a 5% navy tint behind the language chip.
- **hairline #e8ebf6** — the most common border (30 measured).
- **nav-text #002d73b3** — navigation text at 70% navy.
- **ink-card #768692**, **ink-subtle #737373**, **ink-slate #556978** — secondary text colors (47, 88 and 66 characters).

The CSS also declares Google-style blues and an orange (#1a73e8, #ff6a00, #d93025) and Tailwind's ring blue `--tw-ring-color: #3b82f680`; none appears as a brand color on the measured page. A #0000001c background (356 area units) was also measured; its element was not identified.

## Typography

Two families. **Figtree** (700) is loaded for display headings; **satoshi** (a variable file covering weights 400 to 900) is loaded for everything else, with `aktiv-grotesk-thai` and `Sarabun` named in the stack for Thai text. The theme's @font-face rules point at self-hosted woff2 files for Satoshi and Figtree and define Arial-based fallback faces ("satoshi Fallback", "Figtree Fallback") with size-adjust metrics, so Arial is the site's own fallback. Font Awesome 6 Pro supplies icons.

- **display — Figtree 700, 33.6px / 46.2px.** Section titles ("Our Locations", "Packages & Promotions") in navy; **display-mobile — 24px / 33px** at 390px.
- **subheading — satoshi 400, 16px / 20.8px.** Small headings ("Suggested Hospitals").
- **body — satoshi 400, 10px / 15px.** The footer copyright line (white).
- **button — satoshi 500, 16px / 24px.** Currency button and form labels.
- **nav — satoshi 750, 14px / 18.2px.** Navigation links.
- **chip — satoshi 600, 14px / 22.75px.** Hospital chips.
- **link — satoshi 400, 20px / 28px.** "Join now & Login".
- **input — satoshi 600, 16px / 23px.** The "Find Hospitals" field.

Sizes by character count: 16px (1539), 12px (1205), 15px (919), 14px (538), 18px (210), 10px (132), 11px (88) and 20px (84). Weights: 500 (2038), 700 (1516), 600 (805), 400 (322) and 750 (177).

## Layout

The desktop page measured 1280px wide and 5689px tall; the header is 94px tall and the footer 1013px. The home page is a column of rounded sections inside a wide container: a two-column hero (member card at left, banner at right), a search row, a four-column by two-row region tile grid, a seven-column service icon grid, and a white rounded panel holding a four-column package grid. Measured gaps are 8px (115 occurrences), 2px (24), 16px (8), 12px (6) and 32px (4); paddings are 16px (103), 12px (81), 8px (79), 6px (51) and 4px (41).

The CSS declares media queries at `min-width: 768px` (19 rules), `min-width: 1080px` (15), `min-width: 1240px` (6) and `min-width: 1120px` (6), and `not all and (min-width: 768px)` (15).

## Elevation & Depth

Shadows are soft and tinted blue-grey. Measured box shadows include `rgba(74, 74, 74, 0.1) 0px 4px 20px 0px` (12 elements), `rgba(121, 153, 201, 0.1) 0px 2.321px 23.214px 0px` with `rgba(0, 102, 255, 0.05) 0px 9.286px 23.214px 0px` (11), `rgba(0, 102, 255, 0.12) 0px 8px 20px 0px` (4) and `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px` (1). Cards and panels combine a 1px #e8ebf6 border with these shadows; the member card carries a white diagonal gradient (`linear-gradient(216deg, #ffffff -2.93%, rgba(255, 255, 255, 0.2) 56.85%, #ffffff 109.76%)`). Region tiles show white labels over photographs.

## Shapes

Round and friendly. Pills (9999px) are the most common radius (41 elements: chips, "Detail" and "Buy Now" buttons, search controls), followed by 12px (31, tiles and panels), 8px (28), 6px (24, selectors), 3px (23) and 16px (3, the member card); one element measures 24px and one 5px. The floating cart tab is rounded on its left side only (`6px 0px 0px 6px`).

## Components

**Hospital chip.** Transparent fill, 1px #e7edff border, #0147a3 text at satoshi 600 14px / 22.75px, radius 9999px, padding `8px 20px`, height 41px ("Bangkok Hospital Headquarter", 239px wide).

**Currency selector.** #fbfbfc fill, #002d73 text at 16px / 500, radius 6px, padding 12px, height 48px; on hover the fill becomes a 50% #e7edff tint and the text #0147a3.

**Cart tab.** A fixed tab at the right edge: red (#b21e28) "CART" label over a translucent white fill, 56px tall, radius `6px 0px 0px 6px`.

**Navigation.** 94px, #fbfbfc, links in 70% navy at 14px / 750.

**Search field.** 16px / 600 text in #0147a3, 31px high with `4px 4px 4px 0px` padding, inside a blue-bordered rounded box in the capture.

**Member card.** 16px radius, 1px #e8ebf6 border, gradient white fill, 14px #768692 text; 395px by 359px.

**Region tile.** 12px radius, 1px #e8ebf6 border, white 20px / 700 text over a photograph; 287px by 194px.

**Package card.** White card with art, hospital chip, price in #b21e28 with a struck-through grey original, USD approximation, expiry line, an outlined "Detail" pill and a red "Buy Now" pill (sizes of the buttons were not measured).

**Footer.** 1013px tall with the hospital directory, legal links ("Privacy Policy", "Cookie Policy"), the BDMS membership mark and the white 10px copyright line.

## Design System Architecture

No public design system or brand guideline is published for Bangkok Hospital. The English home page https://www.bangkokhospital.com/en was opened; its footer links are legal pages, the network directory and the BDMS affiliation, with no brand, press or design-system link.

The de-facto system is a Next.js application styled with Tailwind utilities: static CSS chunks are served from `/_next/static/chunks/`, the root exposes Tailwind's `--tw-*` variables (`--tw-ring-color`, `--tw-shadow`) and `--font-aktiv: "aktiv-grotesk-thai"`, and component values are literals in the compiled CSS (no named color tokens were measured). The theme's CSS declares Satoshi (weights 400 to 900) and Figtree 700 as self-hosted woff2 files with Arial-metric fallbacks. Font Awesome 6 Pro, Swiper and a `--bezier: cubic-bezier(.6,.2,.1,1)` easing variable are also present.

## Do's and Don'ts

- Do use navy #002d73 for headings, icons and active states and #363636 for body text on #fbfbfc and white surfaces.
- Do show prices in #b21e28 with the original price struck through and a USD approximation line.
- Do use pill buttons and chips (radius 9999px) for actions and hospital tags, and 12px to 16px radii for cards and tiles.
- Do pair Figtree 700 titles at 33.6px with satoshi at 14 to 16px for UI.
- Do soften elevation with the blue-grey shadows measured above and 1px #e8ebf6 borders.
- Don't use red for anything except money, the cart and purchase actions.
- Don't treat Tailwind's ring blue, Google blues or the dark photo scrim as brand colors.
- Don't use sharp corners on cards, tiles or inputs' containers; the measured radii are 8px and larger.
- Don't set body text below 12px except for the footer copyright line.

## Responsive Behavior

Measured at the 390px mobile pass: the section title drops from 33.6px to 24px / 33px (Figtree 700, #002d73), the footer copyright stays 10px / 15px, the hospital chip measures 358px wide by 41px high with `8px 16px` padding and a #ffffff80 fill, and the header measures 70px by 390px. The most common mobile sizes are 12px (1502 characters), 16px (877), 14px (542), 12.8px (427), 11px (88), 24px (57), 10px (51) and 15.2px (42).

The theme CSS declares its main breakpoints at 768px, 1080px, 1120px and 1240px, plus smaller 380px and 440px queries. How the quick-action grid, region tiles and package cards reflow at mobile widths was not measured, and no mobile capture image exists.

## Iteration Guide

1. Start with #fbfbfc and white surfaces, #363636 text and navy #002d73 headings.
2. Set section titles in Figtree 700 at 33.6px and UI text in satoshi at 14 to 16px; keep a Thai companion (aktiv-grotesk-thai, Sarabun) in the stack.
3. Build cards with 12px to 16px radius, 1px #e8ebf6 borders and soft blue-grey shadows.
4. Use pill chips for hospital names and pill buttons for "Detail" and "Buy Now"; keep red for prices and purchase actions.
5. Make the hero a member card plus quick-action grid beside a rounded promo banner.
6. Re-measure the "Buy Now" button fill and mobile reflow before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=bangkok-hospital`.
