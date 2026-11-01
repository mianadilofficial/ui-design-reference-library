---
version: alpha
name: ThaiJob
category: "Thai Brands"
description: "Thai job board (ThaiJob.com): blue #1d65bf hero band with a red search action, white and #f6f6f6 canvas, #222e39 slate footer, Prompt typeface at 14-36px, 4px radii and bordered job-row lists."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#1d65bf"
  on-primary: "#ffffff"
  button-light: "#f4f4f4"
  link-blue: "#337ab7"
  accent-red: "#cc3a3b"
  accent-red-hover: "#c83334"
  surface-light: "#f6f6f6"
  surface-slate: "#222e39"
  ink-3: "#444444"
  ink-4: "#595959"
  ink-navy: "#081351"
  ink-link: "#285c8b"
  ink-6: "#0e0e0e"
  hairline: "#e1e1e1"
  nav-link-text: "#777777"
  text-input-bg: "#f1f1f1"
  text-input-text: "#555555"
typography:
  display:
    fontFamily: prompt
    fontSize: 36px
    fontWeight: 500
    lineHeight: 39.6px
  heading:
    fontFamily: promptregular
    fontSize: 26px
    fontWeight: 700
    lineHeight: 28.6px
  subheading:
    fontFamily: prompt
    fontSize: 18px
    fontWeight: 500
    lineHeight: 25px
  body:
    fontFamily: prompt
    fontSize: 16px
    fontWeight: 300
    lineHeight: 28px
  button:
    fontFamily: prompt
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.8571px
  nav:
    fontFamily: promptregular
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: promptregular
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 8px
  xl: 15px
  2xl: 30px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.link-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 25px
    height: 53px
  button-secondary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.link-blue}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 25px
    height: 53px
  link:
    textColor: "{colors.ink-6}"
    typography: "{typography.subheading}"
    padding: 2px 0px 0px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 15px
  text-input:
    backgroundColor: "{colors.text-input-bg}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 6px 12px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 10px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-slate}"
    textColor: "{colors.canvas}"
    padding: 55px 0px 0px
---

## Overview

ThaiJob (https://www.thaijob.com) is a Thai job-listing website. Its own footer text says ThaiJob was founded in B.E. 2558 (2015), has operated for over 11 years, and aims to help companies and shops find staff, particularly middle- to lower-level positions with high turnover; employers post listings on the site for a fee according to packages. The page title is "หางาน สมัครงาน ฟรี — งานดีทั่วไทย อัปเดตวันนี้ | ThaiJob".

The home page is a classic job-board layout. A white logo plate sits at the top left of a blue header with the main links (home icon, "หางาน", "ผู้สมัครงาน: เข้าสู่ระบบ", "ฝากประวัติสมัครงาน"), an outlined "ผู้ประกอบการ" (employers) button and a TH | EN language switch. Beneath it a blue wave-patterned hero band holds a centred white h1 "ค้นหางาน สมัครงาน", a one-line subhead and a white search card with three fields (career field, work location, keyword) and a red "ค้นหางาน" button. The body is a white list titled "ตำแหน่งงานที่เปิดรับสมัคร": each row shows a company logo at left, the position title in bold, the company name beneath, the posting date at right and a bold blue province name with district. A light-grey "ดูตำแหน่งงานทั้งหมด" button ends the list, followed by a "บริษัทชั้นนำ" band and a dark slate footer with Quick Links to cities.

The voice is direct and utilitarian, with Thai labels and English where the job titles are English. Density is moderate and row-based; the interface is almost entirely type, thin borders and company logos.

The brand's quality is plain service rather than lifestyle: there is no photography beyond the hero wave pattern and the employers' own logos, which supply the only variety of colour in the list. Dates are written in the Thai Buddhist calendar (for example "9 ต.ค. 69") and the language switch offers TH and EN. The footer repeats geographic Quick Links such as Chiang Mai and Songkhla job pages, which tells the reader the site is organised around provinces as much as around job categories.

## Colors

- **Blue `#1d65bf`** is the measured brand blue (backgroundColorsByArea) and matches the blue header and hero in the capture. White `#ffffff` is the text on it.
- **Red accents:** `#cc3a3b` is measured in backgroundColorsByArea and `#c83334` is the measured hover text color of the "ผู้ประกอบการ" button. The red search button in the capture is the page's action accent.
- **Canvas `#ffffff`** (1,787 area weight) and **`#f6f6f6`** (1,474) alternate as page and section backgrounds; `#f1f1f1` fills inputs and `#f4f4f4` fills the grey "view all" buttons.
- **Slate `#222e39`** (457) is the footer; `#364859` (68) is a lighter slate.
- **Text:** `#000000` (866 characters) for headings, `#444444` and `#595959` for body copy, `#0e0e0e` for job titles, `#081351` (353 characters, dark navy), `#285c8b` (111) for the bold province links, `#777777` for nav-link text.
- **`#337ab7`** appears on the grey buttons' text. It is the Bootstrap default link blue, not a brand color; it is kept only because the measured button text uses it.
- **Hairlines:** `#e1e1e1` is the most common border (23), then `#d7d7d7`, `#e9e9e9`, `#efefef`.

## Typography

The only family is Prompt, loaded in several forms: `Prompt` at weights 300, 400, 500, 600 and 700, plus the legacy faces `promptlight`, `promptregular` and `promptmedium`. By character count `prompt` accounts for 3,154, `promptlight` 345, `promptregular` 118 and `promptmedium` 21. FontAwesome is loaded for icons.

- **Display:** `prompt` 36px / weight 500 / 39.6px (the hero h1, same at the 390px mobile pass).
- **Heading:** `promptregular` 26px / weight 700 / 28.6px ("ตำแหน่งงานที่เปิดรับสมัคร").
- **Subheading:** 18px / 500 / 25px (job titles).
- **Body:** 16px / weight 300 / 28px.
- **Button:** 16px / 500 / 22.8571px.
- **Nav:** `promptregular` 18px / 400 / 20px.
- **Input:** `promptregular` 14px / 400.

Sizes by character count are led by 14px (1,642) then 16px (822), 17px (393), 15px (222) and 18px (183). Weights 400 (1,560) and 500 (1,508) split the page almost evenly. Prompt is a Google Fonts family and needs no substitute.

## Layout

The desktop page is 1280px wide and scrolls 4,663px. A single centred column holds the job list at roughly the width of the search card; the search card is a horizontal four-part bar. Each job row is a bordered card (`#e1e1e1`) with 10px padding and a thicker blue left edge in the capture. Common paddings are 15px (173 occurrences), 10px (69), 40px, 30px and 4px. The footer has 55px top padding and a Quick Links list of city and province job pages.

## Elevation & Depth

Shadows are light: `rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset` on inputs (6 uses), `rgba(0, 0, 0, 0.15) 0px 0px 5px 0px` on raised bars (4) and the same inset (2). The search card and header sit on the blue band without dramatic shadow; separation comes mainly from thin borders and alternating `#ffffff` and `#f6f6f6` grounds.

## Shapes

Radii are Bootstrap-scale: 3px (23 occurrences), 4px (18), 5px, 8px, 15px and 30px, with joined corners such as `4px 0px 0px 4px` and `0px 4px 4px 0px` where search fields abut, and `3px 3px 0px 0px` tab tops. The buttons measure 4px. The look is squared and functional.

## Components

- **Light button:** `#f4f4f4` fill, `#337ab7` 16px / 500 text, 4px radius, `15px 25px` padding, 53px tall; labels "ดูตำแหน่งงานทั้งหมด" and "ดูทั้งหมด".
- **Outlined header button:** transparent with a 1px solid white border, white 15.3px / 500 text, 4px radius, 42px tall; on hover the fill turns white and the text turns `#c83334`.
- **Search fields:** `#f1f1f1` fill, `#555555` 14px text, inset shadow, `6px 12px` padding, 40px tall, joined segments with icon prefixes.
- **Job row:** white fill, `#e1e1e1` border, 3px radius, 10px padding.
- **Nav link:** `#777777` text, 18px, 4px radius, 15px padding.
- **Footer:** `#222e39`, white 22px / 500 headings.
- The back-to-top control and the cookie banner are utility overlays and are not brand components.

## Design System Architecture

No public design system or brand-guideline page was found: /brand, /press and /about returned HTTP 500 and /design returned a job-search page. The de-facto system is a Bootstrap 3-style stylesheet: the 4px radii, `6px 12px` input padding, inset input shadow and `#337ab7` link color follow Bootstrap 3 defaults, and no CSS custom properties were found on the root. The brand layer on top is the Prompt typeface, the blue `#1d65bf` and the red accents.

## Do's and Don'ts

Do keep the blue hero with a white search card and one red action. Do list jobs as bordered rows with company logo, bold title, company name and date. Do use Prompt at weights 300 to 500 for text and 700 for the section heading. Do use `#222e39` for the footer.

Don't present `#337ab7` as a brand color. Don't use large radii on controls; measured controls are 3px to 5px. Don't add heavy shadows.

## Responsive Behavior

The mobile pass at 390px measured the same h1 size as desktop (36px / weight 500), h2 26px / 700, body 16px / 300, the light button at 16px / 500, and nav text 14px on `#222e39`. Column counts, the collapse of the header links and breakpoints were not measured.

## Iteration Guide

1. Begin from the frontmatter; blue is `primary`, and the grey "view all" button is the measured CTA.
2. Build the hero as a `#1d65bf` band with a white four-part search card.
3. Render results as 10px-padded rows with `#e1e1e1` borders and Prompt 18px titles.
4. Keep radii at 3px to 4px and footers `#222e39`.
5. Unmeasured: dark mode, tablet breakpoints, red button exact fill; verify on the live site.
