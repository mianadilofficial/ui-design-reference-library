---
version: alpha
name: J&T Express Thailand
category: "Thai Brands"
description: "J&T Express Thailand (jtexpress.co.th), a Thai parcel-delivery company site: white canvas (#ffffff), signal red (#e60000) for the primary button, section underlines and hero search panel, and the Kanit Thai/Latin typeface throughout (700 for headings at 50px desktop / 30px mobile, 400 for 16px body in grey #666666). Buttons are 8px-radius red rectangles, 36px tall."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  ink-strong: "#2b2b2b"
  ink-heading: "#333333"
  ink-nav: "#292929"
  primary: "#e60000"
  on-primary: "#ffffff"
  text-input-text: "#000000"
typography:
  display:
    fontFamily: Kanit, ARIALI, PingFangSC, sans-serif
    fontSize: 50px
    fontWeight: 700
    lineHeight: 122px
  display-mobile:
    fontFamily: Kanit, ARIALI, PingFangSC, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 122px
  heading:
    fontFamily: Kanit, ARIALI, PingFangSC, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 28px
    letterSpacing: "-0.4998px"
  body:
    fontFamily: Kanit, ARIALI, PingFangSC, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Kanit, ARIALI, PingFangSC, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  input:
    fontFamily: Kanit, ARIALI, PingFangSC, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 8px
  md: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 12px
  s4: 16px
  s5: 25px
  s6: 30px
  s7: 35px
  s8: 36px
  s9: 38px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 36px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 38px 35px 10px
    height: 100px
---

## Overview

The measured page is the Thai home page of J&T Express Thailand (`https://www.jtexpress.co.th/`, document language `th`, title "J&T Express Thailand บริษัทจัดส่งพัสดุด่วนชั้นนำของประเทศไทย", meaning a leading express parcel company in Thailand). It is a logistics service site built around three tasks: track a parcel, check a shipping rate, and find a branch. The first screen is a full-width hero banner (an award announcement with the company's rabbit mascot holding a megaphone and a parcel), under which sits a combined search bar: a white field for the tracking number on the left and a solid red panel on the right with "อัตราค่าส่ง" (shipping rates) and "ค้นหาสาขา" (find a branch).

Below the hero the page is a sequence of centered section headings with a short red underline bar: "บริการของเรา" (our services) over a four-tile image strip, then "แอปพลิเคชันของเรา" (our application) with a red phone mock-up carrying a QR code beside four circular icon buttons. Red is the only brand color; everything else is white, greys and photography. The tone is functional and reassuring, written in Thai with product names kept in Latin ("J&T Express", "Livechat").

The extraction hid a cookie consent overlay before measuring (`consentOverlaysHidden: ["cookie-page"]`). A floating red "Livechat" button appears in the capture; it is a support widget and is not documented as brand UI here.

## Colors

- **Canvas `#ffffff`**: page background (2764 in the area survey) and header.
- **Primary `#e60000`**: the red. It fills the "ลงทะเบียน" (register) button, the right half of the hero search bar, the first service tile and the section underline bars; it is the second largest background by area (849). It is also the site's own `--q-color-primary` root variable.
- **On primary `#ffffff`**: label color on red (631 characters of text weight).
- **Ink `#666666`**: the body-text color, by far the most-read (3474 characters).
- **Ink heading `#333333`** (256 characters), **ink strong `#2b2b2b`** (346) and **ink nav `#292929`** (63): the darker greys for headings, emphasized copy and the navigation row.
- **Text input `#000000`**: the text color inside the tracking input.

The site is built on Quasar, whose default variables are present in the root: `--q-color-dark: #832828`, `--q-color-secondary: #020202`, `--q-color-negative: #c10015`, `--q-color-positive: #21ba45`, `--q-color-warning: #f2c037`, `--q-color-info: #31ccec`, `--q-color-accent: #9c27b0` and the swiper `#007aff`. Only `--q-color-primary` matches a color that actually dominates the page; the others are framework defaults and are not used as brand colors here. The browser-default link blue `#0000ee` was measured on an empty anchor and is dropped.

## Typography

One family does everything: **Kanit**, a sans-serif loaded as `Kanit normal normal` (Roboto 400/700 are also loaded). It is used for 4746 characters of text; Material Icons covers 32 characters (icon glyphs). The fallback stack measured on the site is `Kanit, ARIALI, PingFangSC, sans-serif`.

- Display: "บริการของเรา" at 50px, weight 700, color `#333333`; on the 390px pass the same heading measures 30px, weight 700.
- Heading: "อัตราค่าส่ง" at 28px, weight 700, letter-spacing -0.4998px, white on the red tile.
- Body: 16px, weight 400, line-height 28px, grey `#666666`.
- Button: 16px, weight 700.
- Input: 20px, weight 400.

The font-size ladder by character weight is 16px, 24px, 18px, 28px, 50px, 20px, 40px, 32px and 26px. A Thai-capable substitute is only needed if Kanit is unavailable; the declared fallbacks are `ARIALI`, `PingFangSC` and the generic `sans-serif`.

## Layout

The page is measured at a 1280px viewport; the capture shows content inset from both edges, but the exact container width was not measured. The page is 5157px tall with 326 visible elements. The header is a white bar with the wordmark on the left and the nav row "เกี่ยวกับเรา, บริการของเรา, ติดต่อเรา, ศูนย์ข้อมูล, เข้าสู่ระบบ" (about, services, contact, information center, log in), the red "ลงทะเบียน" button and a language selector on the right.

Content blocks: the hero banner, the tracking/rates search bar overlapping the hero's bottom edge, a four-tile service strip in which the first tile is solid red and the others are photographs with a white label, a two-column application block (phone mock-up left, copy and four circular icon buttons right). Sections below the first screen were not examined. Spacing values measured in the stylesheet include 4px, 6px, 12px, 16px, 25px, 30px, 35px, 36px, 38px and 50px; paddings of 25px, 4px and 16px are the most frequent.

## Elevation & Depth

Two shadows were measured, both soft and low-opacity: `rgba(0, 0, 0, 0.16) 0px 4px 12px 0px` and `rgba(0, 0, 0, 0.16) 2px 6px 12px 0px`. In the capture the search bar floats above the hero with this kind of shadow. Everything else is flat: buttons have no shadow, tiles are separated by color and photography.

## Shapes

The measured radii are 50% (11 elements; the circular icon buttons and mascot badges), 8px (3; buttons), 3px (2) and 32px (1). The primary button uses 8px; the search bar is a rounded rectangle; service tiles are square-cornered photographs. Circles are a recurring motif for icons in the application section, with a red outline for the active one and dark outlines for the others.

## Components

- **Primary button** ("ลงทะเบียน"): `#e60000` fill, `#ffffff` label in Kanit 700 at 16px, 1px solid `#e60000` border, 8px radius, 36px tall. On hover the border changes to `rgb(235, 51, 51)` while the fill and label stay the same (measured).
- **Tracking input**: white background, black 20px text, padding 38px 35px 10px and a 100px height, with a floating placeholder "กรอกหมายเลขติดตามพัสดุ" (enter parcel tracking number) and a search icon at the right.
- **Rate / branch panel**: solid red block with two white-label icon links.
- **Service tile**: image background with a white caption and a circular icon; the first tile is red with an outlined white "ดูเพิ่ม" (see more) button.
- **Section heading**: centered 50px Kanit 700 heading with a short red bar below.
- **Navigation**: white bar, `#292929` Kanit 16px links with small chevrons for dropdowns.

## Design System Architecture

No public design-system or brand-guideline page was linked from the pages opened. The shipped CSS shows the framework underneath: Quasar variables (`--q-color-*`, `--q-size-xs: 0`, `--q-size-sm: 600px`, `--q-size-md: 1024px`, `--q-size-lg: 1440px`, `--q-size-xl: 1920px`), Animate.css-style variables (`--animate-duration: 0.3s`, `--animate-delay: 0.3s`) and Swiper (`--swiper-navigation-size: 44px`). The brand layer on top is minimal: the Quasar primary is set to the J&T red `#e60000` and Kanit replaces the framework font.

## Do's and Don'ts

Do:
- Use `#e60000` for the single primary action and for structural accents (underline bars, the rate panel).
- Keep Thai copy in Kanit; use weight 700 for headings and 400 for body.
- Keep body grey at `#666666` and headings at `#333333`.
- Give floating panels the measured soft shadow.

Don't:
- Do not use the Quasar defaults (purple accent, blue info) as brand colors.
- Do not document the Livechat floating button or the cookie consent panel as brand components.
- Do not round buttons beyond 8px.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 reduces from 50px to 30px, both weight 700 and color `#333333`; body text stays 16px weight 400; the other sizes in the ladder (16, 18, 20, 24, 26, 28, 32, 40) are unchanged. Navigation collapse, column stacking and tile reflow on mobile were not measured.

## Iteration Guide

1. White canvas, `#666666` body in Kanit 16px, headings `#333333` Kanit 700.
2. One red `#e60000` primary button, 8px radius, 36px tall, white bold label.
3. Section headings centered with a short red underline bar.
4. Put the main task (tracking number input plus rates and branch finder) in a floating bar under the hero.
5. Verify with `node web/scripts/verify-designs.mjs --slug=jt-express-thailand`.
