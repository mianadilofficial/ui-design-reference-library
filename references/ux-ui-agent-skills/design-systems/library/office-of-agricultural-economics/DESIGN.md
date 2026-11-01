---
version: alpha
name: Office of Agricultural Economics (สำนักงานเศรษฐกิจการเกษตร, สศก.)
category: "Thai Brands"
description: "Thai OAE portal measured at oae.go.th/home (the real home behind a memorial landing page), set in Kanit with Sarabun, on #ffffff and a #f7f8f9 body, with #2b4497 navy-blue buttons (8px radius, white 16px weight 600 text), #1245af links and a published custom-property token scale."
colors:
  canvas: "#ffffff"
  page-body: "#f7f8f9"
  ink: "#000000"
  primary: "#2b4497"
  on-primary: "#ffffff"
  surface-subtle: "#fbfbfb"
  ink-heading: "#111827"
  blue-link: "#1245af"
  ink-body: "#000000d9"
  ink-muted: "#6b7280"
  hairline: "#f0f0f0"
  nav-link-text: "#1890ff"
  text-input-border: "#cccccc"
  card-bg: "#ffffffe6"
typography:
  display:
    fontFamily: Kanit, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 25px
  display-mobile:
    fontFamily: Kanit, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  heading:
    fontFamily: Sarabun, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 17.5px
  subheading:
    fontFamily: Kanit, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: Kanit, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.001px
  button:
    fontFamily: Kanit, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  nav:
    fontFamily: Sarabun, -apple-system, "system-ui", "Segoe UI", Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 20px
  3xl: 25px
  4xl: 50px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 12px 20px
    height: 51px
    boxShadow: rgba(43, 68, 151, 0.15) 0px 4px 14px 0px
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-body}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-body}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px 12px
    height: 42px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(43, 68, 151, 0.15) 0px 4px 14px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The root address https://oae.go.th shows a memorial landing page (a black-and-white portrait with a tribute message, previous/next arrows and a cookie banner), and the extractor treated it as a thin page. The site's own JavaScript route table, read from the shipped main bundle (https://oae.go.th/main.d209754970bd2a1b.js), lists the routes `landing-page`, `home`, `login`, `admin` and `notfound`; the page measured here is https://oae.go.th/home (title "สำนักงานเศรษฐกิจการเกษตร", language `th`), measured with the SPA-404 allowance. The landing page, cookie banner and chat bubble are not brand UI.

The capture shows a light header with the emblem, the Thai name "สำนักงานเศรษฐกิจการเกษตร" at 20px weight 600 and the English name "Office of Agricultural Economics" beneath, a search field, text-size controls (A-, A, A+) and a TH/EN toggle; a navy navigation bar (หน้าหลัก, ข้อมูลองค์การ, ข้อมูลเศรษฐกิจการเกษตร, งานบริการ, OIT, FAQ, ติดต่อเรา); a banner carousel of nine numbered mission cards; a dark data-shortcut strip with six circular-icon links (ภาวะเศรษฐกิจการเกษตร, ข้อมูลการผลิตสินค้าเกษตร, ราคาสินค้าเกษตร, ดัชนีราคาและผลผลิต, สถานการณ์การผลิตรายสัปดาห์, การนำเข้าและส่งออก); a "ข่าวผู้บริหาร" news block beside an executive portrait; icon tabs for activities, news, job announcements and awards; an activity-news panel; a steel-blue band of four circular-icon links; and a navy procurement section with a tab bar and a search field. The WebFetch of this URL returned only the page title, so the page structure is taken from the measured capture.

## Colors

The palette is a navy-blue scale on white, defined as CSS custom properties by the site. `primary` #2b4497 (the site's --primary-500, --bg-blue, --border-blue and --text-blue) fills the "อ่านทั้งหมด" buttons and is the navigation blue (86 weight as a background). `blue-link` #1245af (--primary-600 and --info-600) colours links and news titles (748 characters). Other published steps: --primary-800 #072161, --primary-700 #0c3488, --neutral-800 #1c254d, --neutral-700 #2d3a73, --neutral-500 #546baa, --neutral-300 #a6bdde, --neutral-100 #e2eeff, --bg-blue-light #e6f1ff and --neutral-900 #0e1326.

Surfaces: `canvas` white (7,080 weight), `surface-subtle` #fbfbfb (3,374), `page-body` #f7f8f9 (--bg-primary, 2,740) and #e6f7ff (937). A steel blue #31b0e3 (591) and a dark blue #09406a (193) fill bands. Text: `ink` #000000, `ink-heading` #111827 (916 characters), `ink-body` #000000d9 (--text-primary 0.85 alpha), `ink-muted` #6b7280 (235), and #ffffff on dark. `hairline` #f0f0f0 is the border colour (41 occurrences). `nav-link-text` #1890ff matches the --antd-wave-shadow-color variable. The Messenger-blue #0084ff on the "Chat on Messenger" button is a third-party widget colour and is excluded. Status scales (--success-600 #16a34a, --warning-500 #eab308, --error-600 #dc2626) exist in the CSS but were not seen as UI on this page.

## Typography

Kanit is the heading and UI face (4,511 characters) and Sarabun the body face (32 characters measured; the site declares --font-heading as Kanit and --font-body as Sarabun). Loaded: Kanit 300 to 700, Sarabun 400 to 700, Font Awesome 6 Free. `display` is Kanit 20px / 25px weight 600 (the name), `heading` is Sarabun 14px / 17.5px weight 600 (the English name), `subheading` is Kanit 16px / 20px weight 600 (news titles in #1245af), `body` is Kanit 14px / 22.001px weight 400, `button` is Kanit 16px / 24px weight 600, `nav` is Sarabun 16px / 24px weight 400 and `display-mobile` is 24px / 30px weight 700 (section titles). The site also defines a type scale in rem (--text-xs .75rem to --text-5xl 3rem) and weights --font-light 300 to --font-black 900. Measured sizes: 14px (2,251 characters), 16px (1,340), 12px (256), 15.2px (218) and 13px (150); weights 400 (1,966) and 500 (1,946) dominate.

## Layout

Measured at 1280px wide with a recorded height of 5,231px. The header block is 156px high on #f7f8f9. Content sits in a centred container with full-width coloured bands (navy navigation, dark data strip, tinted news band, steel-blue link band, navy procurement band). Breakpoint variables: --screen-xs 480px, --screen-sm 576px, --screen-md 768px, --screen-lg 992px, --screen-xl 1200px and --screen-2xl 1600px. Spacing variables run --sp-1 .25rem to --sp-24 6rem. Measured paddings: 8px (131 occurrences), 4px (119), 12px (48), 16px (38), 6px (38), 20px (30) and 3px (30).

## Elevation & Depth

Measured shadows: a two-layer `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` (11 occurrences), `rgba(0, 0, 0, 0.05) 0px 2px 4px 0px` (10), the blue `rgba(43, 68, 151, 0.15) 0px 4px 14px 0px` (6, buttons; the site's --shadow-blue), `rgba(0, 0, 0, 0.1) 0px 4px 10px 0px` (4), `rgba(0, 0, 0, 0.1) 0px 4px 12px 0px` (2), `rgba(24, 144, 255, 0.25) 0px 2px 8px 0px`, `rgba(43, 68, 151, 0.2) 0px 4px 10px 0px` and `rgba(0, 0, 0, 0.15) 0px 4px 20px 0px` (one each). The CSS defines --shadow-sm, --shadow, --shadow-md, --shadow-lg, --shadow-xl and --shadow-blue.

## Shapes

Radii measured: 8px (53 occurrences), 4px (31), 50% (16), 6px (14), 2px (14), 4px 4px 0px 0px (9), 9999px (7), 12px (3), 20px (2) and single uses of 2px 2px 0px 0px, 50px and 0px 0px 8px 8px. The site defines --radius-sm .125rem, --radius .25rem, --radius-md .375rem, --radius-lg .5rem, --radius-xl .75rem, --radius-2xl 1rem and --radius-full 9999px. Buttons use 8px; the chat button 25px.

## Components

**Primary button** (`button-primary`): #2b4497 fill, white Kanit 16px weight 600, 12px 20px padding, 51px high, 8px radius, shadow `rgba(43, 68, 151, 0.15) 0px 4px 14px 0px`; hover fill #1245af (measured: rgb(18, 69, 175)). Label "อ่านทั้งหมด" with an arrow icon.

**Navigation** (`nav`): #f7f8f9 header, `ink-body` text; **nav link** in Sarabun 16px weight 400. **Search input** (`text-input`): white fill, Sarabun 16px, 8px 12px padding, 42px high, 6px radius, 1px solid #cccccc. **News card**: white card with photo, date chip, title and "อ่านต่อ" link. **Data shortcut**: circular white icon with a white label on a dark band.

## Design System Architecture

The site publishes a de-facto token system as CSS custom properties on the root element: colour scales (--primary-50 to --primary-800, --neutral-50 to --neutral-900, --info-*, --success-*, --warning-*, --error-* in steps from 50 to 900), semantic aliases (--bg-primary, --bg-secondary #f1f8ff via --neutral-50, --text-primary, --text-secondary, --border-primary), type (--font-heading, --font-body, --text-* and --font-* weights, --leading-*), spacing (--sp-*), radii (--radius-*), shadows (--shadow-*), breakpoints (--screen-*), transitions (--transition-fastest .1s to --transition-slowest .5s) and z-index steps (--z-0 to --z-50, --z-max 999). The page also ships runtime, polyfills and main script bundles and an Ant Design variable (--antd-wave-shadow-color). No public design-system documentation or brand-guideline page was found; the WebFetch of the home page returned no link to one.

## Do's and Don'ts

- Do use #2b4497 for buttons and navigation and #1245af for links and hover.
- Do use Kanit for headings and UI, Sarabun for body text and inputs.
- Do reuse the site's own token names (--primary-*, --neutral-*, --sp-*) when extending.
- Do keep buttons at 8px radius with the blue 0.15 alpha shadow.
- Don't use the Messenger blue #0084ff as a brand colour.
- Don't use the memorial landing page styling as the site identity.
- Don't invent colours outside the published scales.

## Responsive Behavior

A mobile pass was recorded. On mobile the first heading measured 24px / 30px weight 700 in white (a "ข่าวผู้บริหาร" section title) and body copy measured 14px / 22.001px weight 400 in #000000d9. The mobile button candidate was the chat button, which is excluded. The site declares breakpoint variables (480px, 576px, 768px, 992px, 1200px, 1600px), but which of them change the layout and how the navigation and cards reflow were not measured.

## Iteration Guide

1. Start from white and #f7f8f9, black ink and Kanit; use Sarabun for body copy.
2. Use #2b4497 for actions and navigation; #1245af for links.
3. Extend with the site's published scale values instead of new colours.
4. Measure new components before adding tokens.
5. Re-run `node web/scripts/verify-designs.mjs --slug=office-of-agricultural-economics` after changes.
