---
version: alpha
name: VisperHost
category: "Thai Brands"
description: "VisperHost (VP InfoTech Co., Ltd.) is a Thai VPS and hosting provider whose site runs entirely in Kanit: white #ffffff canvas, #0059e8 electric-blue pill buttons 39px tall, a #273647 slate stats band, #242424 footer and 10px rounded white service cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0059e8"
  on-primary: "#ffffff"
  surface-tint: "#f5f7fb"
  surface-blue-tint: "#eef5ff"
  surface-slate: "#273647"
  ink-on-dark: "#f1f1f1"
  blue-deep: "#275caf"
  blue-light: "#6fa6d4"
  hairline: "#0000000d"
  text-input-bg: "#ffffff33"
  text-input-border: "#ffffff17"
  footer-bg: "#242424"
typography:
  display:
    fontFamily: Kanit
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: Kanit
    fontSize: 34.65px
    fontWeight: 700
    lineHeight: 34.65px
  heading:
    fontFamily: Kanit
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 33.28px
  subheading:
    fontFamily: Kanit
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 25.6px
  body:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  button:
    fontFamily: Kanit
    fontSize: 15.52px
    fontWeight: 700
    lineHeight: 24.832px
    letterSpacing: 0.4656px
    textTransform: uppercase
  nav:
    fontFamily: Kanit
    fontSize: 11.64px
    fontWeight: 700
    lineHeight: 18.624px
    letterSpacing: 0.3492px
    textTransform: uppercase
  input:
    fontFamily: Kanit
    fontSize: 15.52px
    fontWeight: 400
    lineHeight: 24.832px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  lg: 10px
  xl: 99px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 4.8px
  s4: 5px
  s5: 7px
  s6: 7.19px
  s7: 10px
  s8: 10.08px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 39px
    borderColor: "{colors.hairline}"
  button-outlined:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 0px 18.624px
    borderColor: "{colors.ink-on-dark}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 0px 1.746px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 0px 11.64px
    height: 39px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 20px 10px 10px
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px -4px, rgba(0, 0, 0, 0.23) 0px 3px 6px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-on-dark}"
---

## Overview

The measured page is https://www.visperhost.net/, titled "VisperHost | ผู้ให้บริการ Cloud VPS, Hosting ชั้นนำในไทย คุณภาพสูง" (a leading Thai Cloud VPS and hosting provider). The operator is VP InfoTech Co., Ltd. (บริษัท วีพี อินโฟเทค จำกัด), whose name appears in the top bar and footer. The page is Thai-language (`lang="th"`) with an English-language option and mixes English product names ("Cloud VPS", "Web Hosting", "Dedicated Server") into Thai copy.

Structure, from the capture: a thin blue top bar with company name, a LINE handle, an email, a phone number and LOGIN / REGISTER links; a white header with the VISPER HOST logo and a menu (Home, Cloud VPS, Hosting, Domain, More Services, Company); a full-width dark photographic hero with the headline "VPS ระดับพรีเมี่ยม – High Performance, Reliable", the subhead "เซิร์ฟเวอร์ส่วนตัวสำหรับทุกธุรกิจ" and two buttons; a dark domain-search band offering .com, .net and .xyz with prices of ฿500, ฿550 and ฿120; a six-card service grid ("บริการหลักของ VisperHost": Web Hosting, Domain, Reseller Hosting, Cloud VPS, VPS Forex, Dedicated Server) on a pale tint; a slate statistics band (6 years, 1,200+ servers, 10,000+ customers, 200+ web hosting sites); and a "Trusted by Businesses Nationwide" two-column block. The voice is direct and commercial: short product names, prices up front and a detail button on every card.

## Colors

The canvas is white `#ffffff` (11,604 weighted area units). Sections alternate with `#f5f7fb` (3,120) and a pale blue `#eef5ff` (632). The dark sections are `#273647` slate (1,475, the statistics band) and `#242424` (957, the footer). `#275caf` (640) and `#6fa6d4` appear as secondary blues in text and fills.

The brand action color is `#0059e8`: it is the fill of every primary button and the root variable `--primary-color` is `#0059e8`. Text on it is `#ffffff`. Running text is `#000000` (4,855 characters), with `#f1f1f1` and `#ffffff` for text on dark sections and `#334862` on the body element. The root variables also expose a WordPress preset `--wp--preset--color--secondary: #003366`, which was not measured on a rendered element and is not tokenized. Hairlines are `#0000000d`. The ".com" tile in the CTA candidates is a different green fill, `#7a9c59`, measured on 100 area units; the capture shows the domain tiles in blue, so that value is left out.

## Typography

One family, Kanit (400 and 700 loaded), covers Thai and Latin text. Measured roles: the h1 is 56px weight 700 on a 56px line height (34.65px on mobile); the h2 "จดโดเมนของคุณวันนี้ที่นี่" is 25.6px weight 700 on 33.28px; the h3 "เซิร์ฟเวอร์ส่วนตัวสำหรับทุกธุรกิจ" is 25.6px weight 400 on 25.6px; body is 16px/25.6px weight 400. Buttons use 15.52px weight 700 with 0.4656px tracking and uppercase transform; the header utility links use 11.64px weight 700, 0.3492px tracking, uppercase. Other measured sizes by characters: 16.56px, 14.4px, 20px (card titles, 32px line height), 20.8px, 38.4px (section headings and statistics), 25px and 12px.

Kanit is open source; no substitute is needed. Other families are loaded only for icons (Font Awesome, dashicons, fl-icons) plus Poppins, Open Sans Hebrew and Dancing Script, which were not measured on rendered text.

## Layout

The page is 7,339px tall at 1280px. Content sits in a centered container of about three card columns (the service cards are 328px tall each). The measured paddings are 15px (73 uses), 10px, 4.8px, 30px, 18.624px, 3.2px, 2px, 20px, 7px, 25px and 16px, and a 185.625px side padding. No grid gap values were recorded. The header is 118px tall; the top utility bar is a separate blue strip above it. Section headings are centered; the "Trusted by Businesses Nationwide" block is two columns with icon-led points on the right. A vertical floating social/contact bar sits at the right edge, and a reCAPTCHA badge sits below it; neither is brand UI and neither is tokenized.

## Elevation & Depth

Cards float on a two-layer shadow: `rgba(0, 0, 0, 0.16) 0px 3px 6px -4px, rgba(0, 0, 0, 0.23) 0px 3px 6px 0px` (6 uses). Other measured shadows are `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` and a grey glow `rgb(128, 128, 128) 0px 0px 5px 0px`. The hero uses photographic depth with a dark overlay. The dark domain band and the slate stats band create tonal steps rather than shadow.

## Shapes

Measured radii: 10px (29 elements, the cards and outlined buttons), 99px (7, pills), 100% (4) and 50% (3, circular icon badges), 5px (2), 3px (2) and 2px (1). Tokens: `xs` 2px, `sm` 3px, `md` 5px, `lg` 10px, `xl` 99px, `pill` 9999px. Primary buttons and the search field use the 99px pill; cards and the "ติดต่อเรา" outlined button use 10px; the icon badges at the top of each card are circles.

## Components

**Primary button:** `#0059e8` fill, white Kanit 15.52px bold uppercase, 99px radius, 39px tall, 1px `#0000000d` border, e.g. "ดูแพ็คเกจทั้งหมด" and "ดูรายละเอียด". The "VisperHost.Net" candidate in the extraction has a 5px radius on the same blue.

**Outlined button:** transparent, `#f1f1f1` text and a 2px `#f1f1f1` border, 10px radius, `0px 18.624px` padding, 39px tall ("ติดต่อเรา" on the hero).

**Domain search field:** a 39px pill, `#ffffff33` translucent fill, 1px `#ffffff17` border, `#f1f1f1` text, 11.64px side padding, with a "SEARCH" label at its right.

**Service card:** white, 10px radius, `20px 10px 10px` padding, centered circular blue icon, bold 20px title, a short Thai description and a small blue "ดูรายละเอียด" button.

**Header links:** uppercase 11.64px bold; on hover the measured LOGIN link dims to 0.7 opacity.

**Footer:** `#242424` background, 741px tall, light text, containing the company registration line.

## Design System Architecture

No public VisperHost design system or brand guideline was found: the home page HTML contains no link to one. The site is a WordPress build on the Flatsome theme (assets under `wp-content/themes/flatsome` and a `flatsome-child` theme), with the Polylang language plugin, Contact Form 7, a sticky-elements plugin and a cookie-notice plugin, all seen in the page source at https://www.visperhost.net/. The only brand variable declared is `--primary-color: #0059e8`; WordPress preset variables (`--wp--preset--color--secondary: #003366` and others) are theme defaults. Tokens here come from live measurement.

## Do's and Don'ts

- Do use `#0059e8` for every primary action, with white text and a 99px pill.
- Do set both Thai and Latin text in Kanit, bold for headings and buttons.
- Do alternate white, `#f5f7fb`, slate `#273647` and near-black `#242424` sections.
- Do lift cards with the two-layer shadow and a 10px radius.
- Don't use the sticky contact bar or reCAPTCHA badge as brand components.
- Don't introduce the WordPress preset colors (vivid purple, pale pink and so on); they are theme defaults.
- Don't use uppercase for Thai headings; the uppercase transform is measured only on buttons and utility links.

## Responsive Behavior

The mobile pass measured: h1 34.65px/34.65px at weight 700 (`display-mobile`), h2 19.2px on 24.96px, body 16px/25.6px, and the primary button unchanged at 39px tall with a 99px radius. The mobile header block measured 105px tall and showed "sales@visperhost.net / Line: @visperhost / ไทย". The page source declares media queries at `min-width` 550px and 850px, `max-width` 549px, 600px and 767px. What those queries rearrange is not measured.

## Iteration Guide

1. Begin with white, black text and `#0059e8`; use `#273647` and `#242424` only for dark bands.
2. Keep one typeface, Kanit, with 400 and 700.
3. Make actions 39px pills and cards 10px rounded with the measured shadow.
4. Put prices and counts in large bold numerals on the slate band.
5. Re-measure after consent overlays are hidden; the extraction hid a cookie notice.
