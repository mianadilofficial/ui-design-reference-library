---
version: alpha
name: Globish Thailand
category: "Thai Brands"
description: "Thai online English-course school: white canvas, #333333 ink, a single orange #f46500 CTA fill, Rubik with Kanit fallback for Thai, square 0px primary buttons, 4px inputs and 5px cards, over a dark photographic hero."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#f46500"
  on-primary: "#ffffff"
  surface-dark: "#181818"
  surface-darker: "#0a0c0e"
  ink-on-dark: "#d0d0d0"
  ink-muted: "#5f6a7d"
  ink-subtle: "#909090"
  ink-black: "#000000"
  hairline: "#cccccc"
  text-input-text: "#555555"
  card-bg: "#ffffff12"
  footer-bg: "#f6f6f6"
  footer-text: "#5e5e5e"
  footer-border: "#0000001a"
typography:
  display:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 58px
  display-mobile:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 46px
  heading:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 24px
    fontWeight: 200
    lineHeight: 35px
  subheading:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 26.4px
  body:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 25px
  button:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 15px
    fontWeight: 400
  input:
    fontFamily: Rubik, Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 5px
  none: 0px
  pill: 9999px
spacing:
  s1: 6px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 20px
  s8: 25.59px
  s9: 28px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 47px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 40px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(248, 177, 51, 0.6) 0px 0px 0px 0px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.05) 0px 8px 16px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-text}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

Globish Thailand (https://www.globish.co.th) is a Thai online English-language school. The site's own about page says Globish Academia (Thailand) began in 2014 to help Thai people speak English, and that its course concept, "Globish Concept", is built on plain English as a working standard for communicating with people worldwide. The home page measured here is titled "เรียนภาษาอังกฤษออนไลน์ สอนสด พูดได้จริง | Globish" and is written in Thai with English course names (General English, Business English, Tech Talents, Skill Booster) mixed in.

The visual character is a conventional course-marketplace page with one strong decision: a single hot orange, #f46500, carries every action and every section headline accent, against an otherwise neutral white page with #333333 text. The first screen is a full-width photograph of a business meeting under a dark scrim, with a centred white Thai headline (คอร์สเรียนภาษาอังกฤษสำหรับวัยทำงาน, "English courses for working adults"), a light-weight subhead, and two buttons side by side: an orange "สอบถามเพิ่มเติม" (enquire) and a white "สมัครเรียน" (enrol). Below the hero the page drops to white and walks through a row of press logos (Forbes, BBC, Oxford Dictionaries, Krungthep Turakij, Newsweek) shown in a muted grey-blue, four illustrated course-format columns, a laptop mock-up beside a bulleted benefit list, and an "I Speak Globish!" testimonial band on a light grey ground.

The tone is encouraging and plain: short imperative calls to action, quoted learner testimonials with name, role and age, and illustrations of flat, friendly people rather than stock photography below the hero. Density is moderate; sections are separated by generous vertical whitespace rather than rules.

## Colors

The palette is built around one brand color and a set of neutrals measured from the live page.

- **Orange primary `#f46500`** is the fill of every detected call-to-action button (enquire, "ดูคอร์ส ... ทั้งหมด" course links, "สมัครเรียน") and the color of the section headlines "หลักสูตรหลากหลายรูปแบบ จาก Globish" and "เลือกวันและเวลาเรียนได้ตามใจคุณ", the asterisk bullets and the "I Speak Globish!" title in the capture. Button text on it is white `#ffffff` (token `on-primary`).
- **Canvas `#ffffff`** is the page background of the content sections; **footer-bg `#f6f6f6`** is the light grey of the footer and the testimonial band.
- **Ink `#333333`** is the main body and card-heading text on white. **ink-muted `#5f6a7d`** is a slate used for secondary copy, **ink-subtle `#909090`** for tertiary text, **ink-black `#000000`** for the plain "link" role, and **footer-text `#5e5e5e`** for footer copy.
- **Dark surfaces** `#181818` (surface-dark) and `#0a0c0e` (surface-darker) are the dominant background areas in the measured backgroundColorsByArea, which correspond to the hero and dark navigation overlay; text on them is `#d0d0d0` (ink-on-dark) or white.
- **Hairline `#cccccc`** is the input border; **footer-border `#0000001a`** is the translucent footer rule; **card-bg `#ffffff12`** is a 7%-opaque white card fill used on dark backgrounds.
- Third-party colors also appear in measured text (`#3b5998` and `#00c300`, social and LINE share colors) and are not brand tokens.

## Typography

Every measured role uses the same stack: `Rubik, Kanit, sans-serif`. Rubik covers Latin characters and Kanit covers Thai; the loaded-font list in the extraction includes Kanit 300/400/500/700, Rubik 300/400/500/700, Montserrat 400 and an icon font called globish-font-icon. Rubik accounts for by far the largest share of characters (3,642 against 341 for Kanit and 329 for Montserrat).

- **Display:** 40px / weight 400 / line-height 58px (the hero h1), 32px / 46px at the 390px mobile viewport.
- **Heading:** 24px / weight 200 / 35px, the light hero subhead.
- **Subheading:** 24px / weight 500 / 26.4px, used for the course-format card titles.
- **Body:** 17.5px / weight 400 / 25px for paragraphs and testimonials; the document body is 15px.
- **Button:** 15px / weight 400, with 0.2px letter-spacing recorded at 15px.
- **Input:** 14px / weight 400 / 20px.

Measured weights by character count are led by 300 (2,223), then 400 (1,201), so the page reads as light and open. The hero deliberately pairs a regular-weight first line with a bolder second line ("วัยทำงาน") in the capture. Font substitutes are not needed: Rubik and Kanit are both public Google Fonts families.

## Layout

The page is 1280px wide in the desktop measurement with a total scroll height of 4,780px. Structure from top to bottom in the capture: transparent top navigation over the hero (logo left, primary links with caret dropdowns, login and "ชื่อคอร์สเรียน" at right), a 600px-tall hero, a centred press-logo strip, a four-column illustrated course row, a two-column split (laptop image left, benefit list right), the testimonial band, and the footer. Content is centre-aligned in the hero and testimonial and left-aligned within columns elsewhere.

Spacing values recorded from the page are 6, 7, 8, 10, 12, 15, 20, 25.59, 28 and 35px, with 15px (38 occurrences) and 20px (21) the most common padding. A 704px padding appears once. Wide sections rely on vertical whitespace rather than dividers, and the four-column row keeps equal-width columns with small centred illustrations above each title.

## Elevation & Depth

Depth is minimal. The card shadow measured five times is two layered shadows, `rgba(0, 0, 0, 0.1) 0px 1px 1px 0px, rgba(0, 0, 0, 0.05) 0px 8px 16px 0px`, a thin contact edge plus a soft 16px-blur lift. A second shadow, `rgba(0, 0, 0, 0.1) 0px 0px 5px 0px`, appears twice. The text input carries a zero-spread `rgba(248, 177, 51, 0.6)` shadow, an amber focus ring placeholder with 0px blur and spread in the resting state. The dominant depth cue is the dark scrim over the hero photograph, not a shadow.

## Shapes

Radii are small and mostly absent: the primary CTA anchor measures `0px` (square), the sibling button element measures 4px, inputs measure 4px, and cards measure 5px. A 50% radius appears twice (round elements) and `9999px` is recorded as a pill value. The brand therefore reads as squared-off and practical; there is no large-radius, pill-shaped button treatment on the CTAs.

## Components

- **Primary button:** orange `#f46500` fill, white 15px text, `0px` radius on the anchor variant, 47px tall (160px wide for "สอบถามเพิ่มเติม"). A second button variant of the same label has 4px radius and `12px 20px` padding. Secondary action beside it in the hero is white-filled with dark text.
- **Link / white button:** white `#ffffff` background, black text, 0px radius ("สมัครเรียน").
- **Text input:** white fill, `#555555` 14px text, 1px solid `#cccccc` border, 4px radius, `6px 12px` padding, 40px tall.
- **Card:** `#ffffff12` fill, 5px radius, the two-layer shadow above.
- **Navigation:** top bar of text links with dropdown carets; section headlines in the page use the orange primary.
- **Footer:** `#f6f6f6` background, `#5e5e5e` text, 1px solid `#0000001a` top border, links listed in columns.

## Design System Architecture

No public design system, token package or brand-guideline page was found: the about page and the /brand, /press and /design paths on the site returned no brand-asset content. The de-facto system is a two-stylesheet site: the home page links `https://www.globish.co.th/front/css/global.css` and `https://www.globish.co.th/front/index/global.css`. The extraction found no CSS custom properties on the root (rootVars is empty), so values live directly in component rules. The 4px and 5px radii and the Bootstrap-like `6px 12px` input padding with a 1px #cccccc border are consistent across components. Typefaces come from webfont loads (Rubik, Kanit, Montserrat) plus a custom icon font.

## Do's and Don'ts

Do use `#f46500` as the single action color and keep text on it white. Do pair Rubik with Kanit so Thai and Latin share weight. Do keep primary buttons square or 4px-rounded, matching the measured values. Do separate sections with whitespace and alternate white and `#f6f6f6` grounds.

Don't introduce a second saturated accent next to the orange; the other colors measured (`#3b5998`, `#00c300`) are third-party social and LINE colors. Don't use pill-shaped CTAs: no measured CTA has a pill radius. Don't set body copy lighter than the measured 400 weight at 17.5px on white without checking contrast, since much of the page already uses weights 100 to 300.

## Responsive Behavior

Measured at a 390px mobile viewport: the h1 drops from 40px to 32px (line-height 46px), the h2 from 24px to 20px, body text stays 17.5px, and the primary CTA stays 15px with the same `#f46500` fill. The mobile pass recorded font sizes (15, 12, 17, 17.5, 12.5, 18, 24, 30, 14, 20, 32px) but no layout data. Column counts, navigation collapse behavior and breakpoints were not measured.

## Iteration Guide

1. Start from the tokens in the frontmatter; every value is verbatim from the live measurement.
2. Build the hero as a dark photographic scrim with a 40px Rubik h1, then place the orange 47px-tall CTA beside a white secondary.
3. Alternate white and `#f6f6f6` sections; use `#f46500` for section headlines and bullet marks.
4. Keep radii at 0px for primary CTAs and 4px for inputs; use 5px for cards with the two-layer shadow.
5. Test Thai text at 17.5px / 25px line height in Rubik with Kanit fallback before changing sizes.
6. Anything not listed here (hover colors, dark mode, tablet breakpoints) was not measured; check the live site before specifying it.
