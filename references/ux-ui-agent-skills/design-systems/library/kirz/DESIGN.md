---
version: alpha
name: KIRZ
category: "Thai Brands"
description: "KIRZ (kirz.com) is a Thai enterprise IT-infrastructure provider whose site pairs deep navy #193446 with champagne gold #e9c77b, sets Thai and Latin text in Anuphan at 60px/700 hero scale, and uses 4px gold buttons with 10px translucent stat cards."
colors:
  canvas: "#ffffff"
  navy: "#193446"
  ink: "#555555"
  primary: "#e9c77b"
  on-primary: "#193446"
  surface-mist: "#dde4e9"
  ink-blue-grey: "#9aabb9"
  ink-grey: "#666666"
  link-blue: "#8bb8df"
  gold-deep: "#c9a455"
  hairline: "#ffffff14"
  primary-hover: "#d4ac5c"
  button-secondary-border: "#e9c77b4d"
  link-border: "#c9a45573"
  nav-text: "#ffffff8c"
  card-bg: "#ffffff0d"
  card-border: "#ffffff1a"
typography:
  display:
    fontFamily: Anuphan, "Odoo Unicode Support Noto", sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 66px
  display-mobile:
    fontFamily: Anuphan, "Odoo Unicode Support Noto", sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 41.8px
  heading:
    fontFamily: Anuphan, "Odoo Unicode Support Noto", sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
  subheading:
    fontFamily: Anuphan, "Odoo Unicode Support Noto", sans-serif
    fontSize: 17px
    fontWeight: 700
    lineHeight: 22.1px
  body:
    fontFamily: Anuphan, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Anuphan, sans-serif
    fontSize: 15px
    fontWeight: 700
    lineHeight: 22.5px
  nav:
    fontFamily: Anuphan, "Odoo Unicode Support Noto", sans-serif
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 40px
  link:
    fontFamily: Anuphan, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  button-secondary:
    fontFamily: Anuphan, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 10px
  xl: 20px
  2xl: 100px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.navy}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 28px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 4px 12px
    height: 28px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 12px 28px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.primary}"
    rounded: "{rounded.lg}"
    padding: 28px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.primary}"
---

## Overview

KIRZ (https://www.kirz.com/, page title "KIRZ — IT Infrastructure ครบวงจร | Dark Fiber Cloud Network ไทย") presents a Thai managed-IT and network operator as a dark, technical, trustworthy brand. The first screen is a navy field with a small gold eyebrow line "TRUSTED INFRASTRUCTURE PARTNER SINCE 1995", a three-line Thai h1 "IT ครบจบ ที่ผู้ให้บริการ รายเดียว" whose last line is gold, an English strapline "One Vendor. Complete Enterprise IT.", a gold "ขอรับการประเมินฟรี" button and an outlined "ดูบริการทั้งหมด ↓" button. A right-hand column lists three headline statistics in gold: "30+" years, "1,000+ กม." of owned dark fiber and "24x7" NOC monitoring. Below, a row of pill chips shows certifications (ISO 27001, ISO 27701, ISO 20000, CSA STAR Level 2, NBTC Type 1&3, NOC 24/7 Managed, MEA & EGAT Partner) and a scrolling partner strip names Cisco, Arista, Fortinet and others.

The body switches to a white section titled "บริการที่ออกแบบมาเพื่อองค์กรหลายสาขา" (the final words in gold) with a bordered four-by-two grid of eight numbered service cells (Internet องค์กร, เครือข่ายหลายสาขา, Private Cloud & Storage, Backup & Disaster Recovery, ระบบกล้อง CCTV คลาวด์, WiFi & Network ภายในองค์กร, Cyber Security, Webex Meeting Room). A second navy section, "Infrastructure ที่เราเป็นเจ้าของเอง", shows four translucent stat tiles: 1,000+, 35, 30+ and 99.95%. Copy mixes Thai sentences with English product names and acronyms, always concrete and number-led.

A cookie notice exists on the page but the extractor hid it (page.consentOverlaysHidden); it is not documented as UI.

## Colors

Navy #193446 is the page-defining color: the hero and infrastructure bands, the footer, the dark text on gold buttons and the heading color in white sections (h2 and h3 are measured in it). Champagne gold #e9c77b is the brand accent and action fill; its hover state measured as #d4ac5c, and a deeper antique gold #c9a455 colors small caps labels such as "CORE SERVICES". A 30%-alpha form of the deeper gold (#c9a45573) draws the outlined-link border and the gold at 30% (#e9c77b4d) draws the English-version chip border.

Neutrals: white canvas #ffffff, mid grey ink #555555 and #666666 for body copy on white, a pale blue-grey #dde4e9 for light surfaces, #9aabb9 for secondary text on navy and a light blue #8bb8df for the large nav-link role. Navigation links on the hero are white at 55% alpha (#ffffff8c). Cards on navy are white at 5% alpha (#ffffff0d) with a 10% alpha border (#ffffff1a); hairlines are white at 8% (#ffffff14). The body paragraph color on navy measured #c4d4e0 on the paragraph role.

## Typography

Anuphan (weights 300, 400, 600, 700) is the main face for both Thai and Latin, with "Odoo Unicode Support Noto" as the fallback and IBM Plex Sans Thai also loaded (it is the computed body font in the root, with Anuphan applied to the content). Measured scale: h1 60px/66px at 700 (38px/41.8px on the mobile pass), h2 40px/48px at 700, stat numerals 34px/51px at 700, h3 card titles 17px/22.1px at 700, body 16px/28px at 400, links and buttons 15px (button 700, link 400) with 22.5px line height, and the small English-version chip 12px/18px at 600. The large nav-link role is 26.6667px/40px (the mobile navigation text) and desktop nav links are 16px/24px.

## Layout

The page is 1280px wide and 3782px tall in the capture. The hero is a two-column split: headline, copy and buttons at the left, three stacked stats at the right with hairline dividers. Sections are bounded by full-bleed bands alternating navy and white, with a content container inset from the edges. The services grid is four columns by two rows inside a single rounded outer frame (cell dividers are thin lines), and the infrastructure section pairs a left text column with a two-by-two stat grid. Spacing values measured include 1px, 4px, 5px, 6px, 8px, 10px, 12px, 13px, 14px and 15px, with card padding of 28px and button padding of 13px 28px.

## Elevation & Depth

No box shadows were measured. Depth is expressed through translucent layering on navy: stat cards at white 5% alpha with a white 10% border and 10px radius. On white, the services grid uses hairline borders and a large 20px-radius frame rather than shadow. The sticky header sits on the navy field with a faint bottom rule.

## Shapes

Measured radii by frequency: 20px (8 elements, the services frame and stat tiles), 10px (7, the stat cards), 4px (2, primary button and outlined link), 3px (the English-version chip), 6px, and 100px (the certification pills). Buttons are therefore nearly square (4px) while containers and chips are rounded; the contrast is deliberate.

## Components

- Primary button: gold #e9c77b fill, navy #193446 Anuphan 700 15px text, 4px radius, padding 13px 28px, height 49px; hover fill #d4ac5c ("ขอรับการประเมินฟรี").
- Outlined link button: transparent, gold text, 15px, 1px border #c9a45573, 4px radius, padding 12px 28px ("ดูบริการทั้งหมด ↓").
- Language chip: gold Anuphan 600 12px text, 1px solid #e9c77b4d border, 3px radius, padding 4px 12px, height 28px.
- Stat card: 10px radius, white 5% alpha fill, white 10% alpha border, padding 28px, gold 34px numerals over small white captions.
- Certification pill: 100px radius, translucent navy chip with small caps label.
- Service cell: numbered (01-08) with a small icon, bold navy title, grey description, gold uppercase product tags and a gold underlined "รายละเอียด →" link.
- Navigation: a row of Thai and English labels in white at 55% alpha, with the logo square at the left.
- Footer: navy #193446 fill with gold text.

## Design System Architecture

No public design system or brand guideline page was opened. The site is built on Odoo (fonts named "Odoo Unicode Support Noto" and "odoo_ui_icons", and root variables like --o-color-5: #193446 and --o-cc2-btn-primary-text). The root variable --o-color-5 equals the measured navy, which shows the palette is defined through Odoo's color-combination variables, along with Bootstrap names such as --breakpoint-xxl: 1400px. The de-facto system is the navy/gold pair, Anuphan, and the 4px button over 10 to 20px container rhythm.

## Do's and Don'ts

Do use navy #193446 as the dominant ground and gold #e9c77b for the single main action and for highlighted words in headlines. Do pair large numerals in gold with small captions, and keep Thai and English side by side in the same face.

Don't use gold for body text on white; deep gold #c9a455 is for small labels. Don't round buttons beyond 4px or square the containers. Don't treat Bootstrap defaults (such as --pink: #e83e8c) as brand colors. Don't surface the cookie notice as a brand component.

## Responsive Behavior

The mobile pass (390px) measured the h1 at Anuphan 700 38px/41.8px (from 60px), body unchanged at 16px/28px in #c4d4e0, and the primary button at 184px width keeping 13px 28px padding, 4px radius and 49px height. The large nav-link role (26.6667px) is the measured mobile-size nav text. Breakpoint behavior beyond this, column collapse and dark mode were not measured.

## Iteration Guide

1. Set the page in Anuphan on navy #193446 with white headings; use white bands with navy headings for dense content.
2. Highlight the last words of each headline in gold #e9c77b.
3. Use 4px gold buttons with navy 700 text (49px high) and gold-outlined 4px secondary buttons.
4. Present proof as large gold numerals inside 10px translucent cards.
5. Keep services in a numbered grid with gold uppercase tags; verify any new value against a measurement.
