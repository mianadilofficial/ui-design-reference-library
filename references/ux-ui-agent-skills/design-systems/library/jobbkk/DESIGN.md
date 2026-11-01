---
version: alpha
name: JOBBKK
category: "Thai Brands"
description: "Thai job board JOBBKK: white canvas with slate text (#64748b, #333333), signal red #ff1111 actions, custom db-normal and db-bold Thai fonts at 56px display and 22px body, pill inputs, 12px to 40px radii and lavender-blue soft shadows."
colors:
  canvas: "#ffffff"
  page-body: "#fafbfd"
  ink: "#64748b"
  primary: "#ff1111"
  on-primary: "#ffffff"
  surface-2: "#fbfbfb"
  surface-3: "#f1f4f8"
  ink-2: "#333333"
  ink-3: "#4b5563"
  ink-4: "#777777"
  ink-6: "#111827"
  hairline: "#dbdfec"
  link: "#1677ff"
typography:
  display:
    fontFamily: db-bold, system-ui, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 61.6px
  display-mobile:
    fontFamily: db-bold, system-ui, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
  heading:
    fontFamily: db-bold, system-ui, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  subheading:
    fontFamily: db-bold, system-ui, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 29px
  body:
    fontFamily: db-normal, system-ui, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
  nav:
    fontFamily: db-normal, system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 6px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 24px
  3xl: 30px
  4xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    height: 52px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(154, 170, 207, 0.4) 2px 4px 8px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 42px
    boxShadow: rgba(5, 145, 255, 0.1) 0px 2px 0px 0px
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    padding: 0px 32px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.15) 0px 2px 4px 0px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 0px 58px 0px 42px
    height: 45px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.xl}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.1) 0px 32px 64px -12px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink-2}"
---

## Overview

JOBBKK (https://www.jobbkk.com/home) is a Thai-language job board; the page title reads "หางาน สมัครงานทุกสายอาชีพ อัปเดตงานใหม่จากบริษัทชั้นนำทุกวัน" (find jobs, apply in every field, new jobs from leading companies every day) and the h1 reads "JOBBKK แพลตฟอร์มหางานด่วน" (a fast job-search platform). The measured page is 1280px wide and 6358px tall with 989 visible elements and is declared as lang th.

The top bar is white with a soft shadow and carries the red-and-white JOBBKK logo with its Thai tagline lockup, five nav items (หน้าแรก, หางานด่วน, หางาน, บทความ, and a login item), a red filled pill "เข้าสู่ระบบผู้สมัครงาน" (applicant login), a language selector reading "ไทย" and an outlined "สำหรับผู้ประกอบการ" (for employers) button. Below, a hero search panel offers a keyword field, location, job type and salary, with a red submit button, beside a large rotating promotional banner. The lower page is a dense grid of "Urgent Jobs" cards: a company logo, a bold job title, the company name, a pale blue summary box, a red location pin with the places, and a salary range such as "14,000 - 16,000". A dark red band with white copy invites employers.

When first captured, the page was covered by a seasonal promotional popup, a dark scrim and a cookie consent bar with red "ยอมรับ" and white "ปิด" buttons. The extraction was re-run with the overlays hidden (the extraction records one scrim hidden) and tokens were regenerated; these popup and cookie controls are not documented as brand UI.

The voice is practical and high-density: many short Thai labels, salary numbers, chips such as "หางานเงินเดือน 45K+" and "หางานการตลาด", and an energetic red accent.

## Colors

- **canvas #ffffff** is the page background (weight 9544).
- **page-body #fafbfd** is the soft off-white used for the body area, and **surface-2 #fbfbfb** (1505) and **surface-3 #f1f4f8** (715) are the light grey-blue panels and chips. The footer uses surface-3.
- **ink #64748b** is the most-read text color (4502 weighted characters, a slate grey) for metadata and descriptions. **ink-2 #333333** (3169) is for headings and primary text, **ink-3 #4b5563** (2313) for paragraph text, **ink-4 #777777** (918) for quiet text and **ink-6 #111827** (169) for the strongest text.
- **primary #ff1111** is the JOBBKK red (fill of login and submit buttons, active nav text). **on-primary #ffffff** is the text on it.
- **hairline #dbdfec** is the 1px border (59 weight) on inputs and cards.
- **link #1677ff** is the blue measured on links and secondary nav links.

The palette also includes tinted reds (#fff1f2, #ffe7e7, #e11d48, #e50000 for the consent accept button) which are used in small badges; and soft blue-lavender shadows are used instead of grey. The Tailwind-style shadcn variables in the root (`--primary: 0 0% 9%`, `--ring` colors) are framework defaults and do not describe the rendered brand red.

## Typography

JOBBKK ships its own Thai font family, loaded as four separate faces each at weight 400: "db-normal" (10853 weighted characters), "db-bold" (1254), "db-medium" (115) and "db-black" (6). Weight is chosen by switching the family, not the numeric weight, so every typography token has fontWeight 400. Fallback is system-ui, sans-serif. The foundry is not named by the measured data and no source naming it was opened.

- **display** db-bold 56px / 61.6px (h1); **display-mobile** 40px / 44px.
- **heading** db-bold 32px / 32px ("ค้นหางาน").
- **subheading** db-bold 22px / 29px (job card titles, the primary button label).
- **body** db-normal 22px / 26.4px.
- **nav** db-normal 16px.

Body text is large for a dense site (22px); this is the measured computed size, with a line-height of 1.2 times. Thai script needs no uppercase styling, and no text transform was measured.

## Layout

The page is a three-column grid of job cards under a hero, set on a 1280px desktop width, each card with equal width. The top bar and search panel use generous horizontal space; the card grid uses two rows of three with a "ดูทั้งหมด" (view all) link at right above them.

Spacing tokens measured: 2px, 4px, 5px, 8px, 10px, 12px, 15px, 16px, 19px and 20px. Components: the nav has 0 32px padding, the secondary button 0 20px, the search input 0 58px 0 42px (space for left icon and right button), the card 24px padding.

## Elevation & Depth

Elevation uses colored, low-opacity shadows tinted with lavender-blue (rgb 154, 170, 207): rgba(154,170,207,0.1) 2px 2px 6px (9 uses) on cards, rgba(154,170,207,0.15) 2px 4px 20px (6) on cards and rgba(154,170,207,0.4) 2px 4px 8px on the primary button. The top nav has rgba(0,0,0,0.15) 0 2px 4px, and the large card (component) shows rgba(0,0,0,0.1) 0 32px 64px -12px. The effect is a soft, floating-paper look.

## Shapes

Radii measured: 9999px (39), 8px (35), 12px (20), 6px (16), 30px (11), 24px (7), 16px (2), 20px (1), 40px (1). Tokens: xs 6px, sm 8px, md 12px, lg 16px, xl 20px, 2xl 24px, 3xl 30px, 4xl 40px, pill 9999px. The primary login button has 12px, the applicant login and search input are pills, topic chips use 30px, and job cards 20px (component token) with inner summary boxes around 8px.

## Components

- **button-primary**: red (#ff1111) fill, white text, subheading type (22px db-bold), 12px radius, 52px height, lavender shadow.
- **button-secondary**: red pill (9999px), white 22px text, 0 20px padding, 42px height, 1px-offset blue-tint shadow.
- **outlined button**: 6px radius, #333333 text ("หางานด่วน"), border width 1px.
- **text-input**: white, pill, 45px height, #dbdfec border, padding 0 58px 0 42px.
- **nav**: white, red text for the active item, 0 32px padding, soft shadow; **nav-link** blue (#1677ff) at 16px.
- **card**: white, 20px radius, 24px padding, large soft shadow.
- **chip**: #f1f4f8 fill and 30px radius (muted grey text) for search shortcuts.
- **footer**: #f1f4f8 background.

Hover states were not recorded.

## Design System Architecture

No public design system for JOBBKK was found; the home page links to none, so none is cited. The shipped CSS shows a Tailwind plus shadcn-style variable setup in the root (`--tw-ring-color`, `--radius: 0.5rem`, `--background`, `--foreground`, `--primary`, `--muted-foreground`, `--accent`), while the rendered brand red and its fonts come from custom classes: font families named `db-normal`, `db-bold`, `db-medium` and `db-black`. The shadcn variables resolve to neutral greys and do not match the red brand, so the system is shadcn scaffolding overridden by brand styles. Source: the measured root variables in web/data/extracted/jobbkk.json from https://www.jobbkk.com/home.

## Do's and Don'ts

- Do keep the page white with slate text (#64748b) and dark headings (#333333); use #ff1111 only for primary actions and the active nav.
- Do switch Thai weight by family (db-normal vs db-bold), not by numeric weight.
- Do use pills for search and applicant actions and 12px for the main login button.
- Do use lavender-blue low-opacity shadows to lift cards.
- Do show salary and location on every job card with a red pin.
- Don't use the shadcn default black primary.
- Don't document popups, cookie bars or scrims as brand UI.
- Don't set Thai text below the measured sizes or add letter-spacing.

## Responsive Behavior

Measured in the 390px mobile pass: h1 40px (from 56px) and body 20px (from 22px). The mobile layout of nav, search and card grid was not measured.

## Iteration Guide

1. Start on #ffffff with #f1f4f8 panels; text in #333333 and #64748b.
2. Use db-bold 22px for card titles and db-normal 22px for body.
3. Put one red (#ff1111) button per view.
4. Give cards the 20px radius and a lavender shadow; chips 30px.
5. Pick spacing from the ten measured steps.
6. Run `node web/scripts/verify-designs.mjs --slug=jobbkk`.
