---
version: alpha
name: JobTopGun
category: "Thai Brands"
description: "Thai job search and Super Resume site (JOBTOPGUN) built with Tailwind: cyan primary #06c5f3 with #00bff9 hover, white and #f9fafb canvas, Poppins with Kanit fallback, 8px buttons, 16px cards and soft blue-tinted shadows."
colors:
  canvas: "#ffffff"
  page-body: "#f9fafb"
  ink: "#4b5563"
  primary: "#06c5f3"
  on-primary: "#ffffff"
  primary-hover: "#00bff9"
  surface-blue-tint: "#f5f8fe"
  primary-300: "#7fe6ff"
  primary-600: "#007aff"
  primary-800: "#17283b"
  ink-strong: "#111827"
  ink-muted: "#6b7280"
  ink-footer: "#6a7282"
  hairline: "#e5e7eb"
  nav-link-text: "#0a0a0a"
  text-input-text: "#1f2937"
typography:
  display:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 36px
  display-mobile:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 26px
    fontWeight: 600
    lineHeight: 34px
  heading:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  body:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.75px
  button:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
  nav:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 10px
  md: 11px
  lg: 12px
  xl: 14px
  2xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 6.5px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 13px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 10px 20px
    height: 44px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(4, 23, 142, 0.04) 0px 1px 2px 0px, rgba(4, 23, 142,
      0.04) 0px 1px 2px 0px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 40px 20px 20px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(4, 64, 142, 0.08) 0px 6px 15px -2px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    height: 21px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-footer}"
    borderColor: "{colors.hairline}"
---

## Overview

JOBTOPGUN (https://www.jobtopgun.com) is a Thai job-search site; its page title reads "Find Jobs to Top Companies | Read Reviews Before Applying | JOBTOPGUN", and the body copy opens "JOBTOPGUN is Thailand's leading job sear..." The footer line reads "Copyright ©2026 Super Resume Co., Ltd.", so the operator is Super Resume Co., Ltd. The measured page is the English home (the bare domain redirects to /th, and the extractor settled on /en).

The home page is a bright, airy product page centred on a feature called Super Resume. From the top: a white navigation bar with the gradient JOBTOPGUN wordmark, links Home, Find Jobs, Resume, Company Review, For Students, Career Tips, a language selector, an "Employer site" link and an outlined "Sign In" button; a cyan search band with a white pill-like search bar (position or company, job fields, locations, and a cyan "Find Jobs" button); the heading "Find Your Dream Job Today" beside a sign-in card and a cheerful illustration of a woman with a laptop; "Start Your Job Search" with a tab row (Job Field, Industry, Location, Fresh Graduates & Interns) above a grid of white category cards with pale blue icon tiles (Accounting, Administration, Advertising & Media, Agriculture, and so on); a two-column Super Resume promotion with a video thumbnail; and an AI resume-analysis section with two white feature cards.

The voice is encouraging and direct ("Find Your Dream Job Today", "Create your Super Resume free"), with short benefit bullets. Density is comfortable: roomy cards, 16px to 24px padding, and pale blue section backgrounds that alternate with white. The page measured 8,766px tall at 1280px wide.

The page also carries product proof in small details: a "Hear from fellow job seekers" video block, bulleted claims such as "AI presents your Super Resume and strengths to HR every day", and an AI-analysis pitch under the headline "Want more chances to land interviews and get hired, but not sure how to improve your resume?". Pale blue icon tiles and soft gradient backgrounds give the page a friendly, app-like tone rather than a classified-ads look.

## Colors

The brand scale is published in the site's own CSS custom properties: `--color-primary-150 #f2fdff`, `-200 #e9f3ff`, `-300 #7fe6ff`, `-400 #06c5f3`, `-500 #00bff9`, `-600 #007aff`, `-700 #003f88`, `-800 #17283b`.

- **Primary `#06c5f3`** (primary-400) fills the detected buttons ("Find Jobs", "Job Field") with white `#ffffff` text and is the navigation accent color. **Hover `#00bff9`** (primary-500, also named `--color-primary-topgun`) is the measured hover fill and the outline color of "Sign In".
- **Canvas `#ffffff`** (10,084 area weight), **page body `#f9fafb`** (6,414) and **`#f5f8fe`** (3,895) are the three light grounds. `#7fe6ff` (primary-300) appears as a pale cyan fill (186) and `#0b1b33` (52) is a dark navy.
- **Text:** `#4b5563` is the main body color (16,845 characters), `#111827` headings, `#17283b` (primary-800) for dark brand-tinted text, `#6b7280` and `#6a7282` for secondary and footer text, `#374151`, `#101828` and `#1f2937` for other copy.
- **Link and accent blues:** `#007aff` (primary-600, 642 characters) is the measured text color of blue links, and `#00bff9` (158). `#ff6e86` (354 characters) is a pink-red text color measured on the page.
- **Border:** `#e5e7eb` (108 occurrences) is the standard hairline.

## Typography

The family stack is `poppins, "poppins Fallback", kanit, "kanit Fallback", Arial, Helvetica, sans-serif`: Poppins for Latin glyphs and Kanit for Thai (loaded at 400, 500 and 600 each). The root declares `--font-main: var(--font-poppins), var(--font-kanit), Arial, Helvetica, sans-serif`, plus separate Kanit-SR and Sarabun variables.

Measured roles: display 28px / 600 / 36px (desktop section titles such as "Find Your Dream Job Today"), 26px / 34px on mobile; heading 40px / 600 / 48px (large numerals "01"); body 14px / 400 / 22.75px; button 14px / 500 / 21px; secondary button 16px / 500 / 24px; nav 16px / 400 / 24px. By character count, 14px dominates (19,634), then 12px (2,601) and 16px (2,177). Weights are 400 (21,163), 600 (2,247) and 500 (2,119). The root also publishes a text scale (`--text-heading-h1-desktop: 48px`, `--text-title-2-desktop: 20px`, `--text-body-2-desktop: 16px`, `--text-label-1-desktop: 12px`, `--text-label-2-desktop: 10px`). Poppins and Kanit are Google Fonts families.

## Layout

Content sits in a centred container with generous section padding: paddings of 16px (80 occurrences), 8px, 24px (72), 6px and 12px; larger values of 40px, 48px, 64px and 80px mark section gaps. Flex gaps are mainly 8px, 4px and 16px. Category cards form a four-column grid of equal white tiles with 16px radius; the Super Resume section is a two-column split with copy on the left and a phone-format video on the right.

## Elevation & Depth

Shadows are soft and tinted blue instead of black: `rgba(4, 64, 142, 0.08) 0px 6px 15px -2px` (16 uses) on cards, `rgba(4, 64, 142, 0.04) 0px 4px 6px 0px` (4), and `rgba(4, 23, 142, 0.04) 0px 1px 2px 0px` on buttons. The outlined "Sign In" button measures `rgba(4, 68, 8, 0.06) 0px 2px 6px 0px`. Elevation is subtle and relies on the 1px `#e5e7eb` border.

## Shapes

Radii are rounded: 16px (70 occurrences, cards), 10px (23), 8px (15, the primary button), 14px (14), `16px 16px 8px 8px`, 12px and 11px, plus a full-round value (3.35544e+07px, 52 occurrences, pills and chips). The root declares `--radius: .625rem`, `--radius-2xl: 1rem` and `--radius-3xl: 1.5rem`.

## Components

- **Primary button:** `#06c5f3` fill, white 14px / 500, 8px radius, `10px 16px` padding, 40px tall; hover `#00bff9`.
- **Large button ("Job Field"):** same fill, 16px / 500 text, 10px radius, `10px 20px` padding, 44px tall.
- **Outlined button ("Sign In"):** white fill, 1px `#00bff9` border, cyan text, 12px / 500, 8px radius, 32px tall.
- **Category card:** white fill, 1px `#e5e7eb` border, 14px radius, `40px 20px 20px` padding, label 14px / 500 `#111827`, the blue-tinted shadow above.
- **Navigation:** white bar, 14px / 500 cyan links and `#0a0a0a` 16px nav-link text.
- **Footer:** white with `#6a7282` text and a 1px `#e5e7eb` border.
- A chat or floating widget is not documented.

## Design System Architecture

No public brand-guideline page was found (/brand, /press, /about and /design redirect to a not-found page). The site does ship a clear de-facto system in its CSS: Tailwind v4 (oklch palette variables such as `--color-sky-400: oklch(74.6% .16 232.661)` and `--container-md: 28rem`), shadcn-style semantic variables (`--primary`, `--card`, `--border`, `--sidebar-primary`), and a custom named type scale (`--text-heading-h1-desktop`, `--text-title-1-mobile: 22px`, `--text-body-3-desktop--line-height: 21px`, `--text-label-2-mobile: 8px`) with paired desktop and mobile values. The custom brand scale is `--color-primary-150` through `-800`. Fonts are `--font-poppins`, `--font-kanit` and `--font-main`.

## Do's and Don'ts

Do use `#06c5f3` for the main action with white text and `#00bff9` on hover. Do use the published `primary-NNN` scale for tints rather than ad hoc blues. Do pair Poppins with Kanit and keep body at 14px. Do use 16px radius cards with a blue-tinted shadow. Do alternate `#ffffff`, `#f9fafb` and `#f5f8fe` sections.

Don't use neutral black shadows. Don't apply large type below 600 weight for titles. Don't change the text on the cyan fill from the measured white.

## Responsive Behavior

Measured at 390px: h1 26px / 600, body 14px / 400, primary CTA 14px / 500 with `#06c5f3` fill. The root publishes mobile type values (`--text-heading-h1-mobile: 26px`, `--text-label-2-mobile: 8px`, `--text-title-2-mobile: 18px`). Column counts, navigation collapse and breakpoints were not measured.

## Iteration Guide

1. Start from the frontmatter tokens; hex values match the published primary scale.
2. Build pages from a cyan search band, then alternating white and `#f9fafb` sections with 16px-radius cards.
3. Keep button text white on `#06c5f3`, and use `#00bff9` for hover and outlines.
4. Use Poppins 14px body and Kanit for Thai.
5. Not measured: dark mode, tablet breakpoints, hover on cards; check the live site.
