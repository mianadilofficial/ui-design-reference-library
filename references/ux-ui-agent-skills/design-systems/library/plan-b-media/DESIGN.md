---
version: alpha
name: "Plan B Media"
category: "Thai Brands"
description: "Plan B Media (planbmedia.co.th) is a Thai out-of-home advertising site: navy #002563 header, light #f7f7f7 canvas, Montserrat 800 hero over Prompt 300 body, white 100px pill buttons and 20px rounded cards."
colors:
  canvas: "#f7f7f7"
  ink: "#002563"
  primary: "#ffffff"
  on-primary: "#002563"
  surface-black: "#010101"
  surface-royal: "#004bc9"
  ink-cyan: "#06bbe8"
  nav-link-text: "#000000"
typography:
  display:
    fontFamily: Montserrat, sans-serif
    fontSize: 80px
    fontWeight: 800
  display-mobile:
    fontFamily: Montserrat, sans-serif
    fontSize: 40px
    fontWeight: 800
  heading:
    fontFamily: montserrat, prompt, sans-serif
    fontSize: 36px
    fontWeight: 300
  body:
    fontFamily: prompt, sans-serif
    fontSize: 14px
    fontWeight: 300
  button:
    fontFamily: prompt, sans-serif
    fontSize: 15px
    fontWeight: 300
    textTransform: uppercase
  nav:
    fontFamily: prompt, sans-serif
    fontSize: 15px
    fontWeight: 400
  link:
    fontFamily: prompt, sans-serif
    fontSize: 14px
    fontWeight: 400
  input:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 300
rounded:
  xs: 2px
  sm: 5px
  md: 10px
  lg: 20px
  xl: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 25px
  s6: 30px
  s7: 33.33px
  s8: 40px
  s9: 100px
  s10: 120px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 30px
    height: 60px
    boxShadow: rgba(6, 187, 232, 0.1) 0px 3px 13px 0px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 0px 30px
    height: 60px
    boxShadow: rgba(6, 187, 232, 0.1) 0px 3px 13px 0px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 0px 15px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
    padding: 15px 33.3333px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    padding: 15px 15px 15px 0px
    height: 47px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 15px
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.primary}"
    padding: 40px 0px 0px
---

## Overview

Plan B Media (www.planbmedia.co.th, title "Plan B Media | หนึ่งในผู้นำสื่อโฆษณานอกบ้านของเอเชีย", meaning one of Asia's leading out-of-home advertising media companies) is a Thai out-of-home (OOH) advertising group. The measured home page is bilingual (English and ไทย switch in the top bar) and is organized as: a deep navy header with the "Plan B media" wordmark and a nav of ABOUT US, OOH MEDIA, SPORTS, MUSIC, RESOURCES, INNOVATION, SUSTAINABILITY, INVESTORS, CAREERS and an outlined CONTACT pill; a full-bleed hero slider of campaign photography (in the capture, a Cartier watch on a mall-atrium LED column) with the rotated headline "MOVING EXPERIENCE" in heavy white Montserrat; a collapsed "WHAT'S NEW" tab on the right edge; "Feature Stories" with a VIDEO / CONTENT / NEWS pill switcher and three video cards; "Our media solutions" with an OOH MEDIA / INNOVATION switcher over a royal-blue statistics card (CLASSIC 3,040 Panels; TRANSIT 2,683 Buses, 136 BTS&MRT Stations, 300 Muvmi) beside photo cards (Billboard Nationwide, Cookies, Gateway Billboard); then Sports & Music blocks and a black footer with ABOUT, NEWS, CAREER, SUSTAINABILITY, INVESTORS, CONTACT.

Other statistics read on the page: Digital 600 screens, Retail 14,305 screens, Airport 28 airports, International 4 countries and Programmatic 3,500 digital screens. Calls to action are "explore", "View more", "careers", "contact" and "Join our team". Media imagery of real billboards, buses and transit stations makes the site a showcase of its own inventory.

## Colors

Measured in `web/data/extracted/plan-b-media.json`:

- **canvas `#f7f7f7`**: the page background (area weight 4,201).
- **ink `#002563`**: Plan B navy, the dark text color (914 characters), the nav and header fill (#002563, height 84px) and the secondary button border.
- **primary `#ffffff`** with **on-primary `#002563`**: the measured filled button is white with navy text (OOH MEDIA, VIDEO pills).
- **surface-black `#010101`**: the footer (area 1,838).
- **surface-royal `#004bc9`**: the royal blue statistics card (area 577).
- **ink-cyan `#06bbe8`**: the cyan accent used for inactive tab labels (24 characters), the "Our" word in "Our media solutions" and shadow tints.
- **nav-link-text `#000000`**: one nav link role.
- **white `#ffffff`**: the most-read text on dark (1,083 characters).

Also measured: `#eef3f5` (38) and `#21292d` (1) backgrounds. Hover on tab buttons changes the label from rgb(6,187,232) to rgb(0,37,99). Root variables include WordPress block-editor presets (`--wp--preset--color--vivid-purple #9b51e0`, `--wp-admin-theme-color-darker-20 #005a87`); these are CMS defaults, not brand colors.

## Typography

Fonts: **Prompt** (1,926 characters; weights 300, 400, 500, 700, with 400 italic) is the Thai-and-Latin body and UI family, declared as `--font-body: 'prompt', sans-serif`. **Montserrat** (86 characters; weights 300, 400 and 800) is used for display and section headings.

- **display** (h1 "MOVING EXPERIENCE"): Montserrat 80px, weight 800; mobile 40px, weight 800. On the page the headline is rotated; the mobile pass records a transform of matrix(-1, 0, 0, -1, 0, 0).
- **heading** (h2 "Feature Stories"): montserrat, prompt 36px, weight 300; mobile 32px, weight 300.
- **body**: prompt 14px, weight 300.
- **button** (uppercase): prompt 15px, weight 300.
- **nav**: prompt 15px, weight 400. **link** ("explore"): 14px, weight 400.
- **input**: Helvetica, Arial 14px, weight 300.

By character: 14px (785), 15px (589), 20px (528), 36px (52), 12px (24), 64px (18), 80px (16). Weights: 300 (1,888 characters), 400 (69), 500 (39), 800 (16), 600 (9). Letter-spacing and line-height are default (`letterSpacingBySize` is empty; line-height `normal`), except the footer's 28px line height. The light weight 300 for Prompt gives an airy, technical feel against the heavy 800 headline. No font-license source was opened.

## Layout

The page is 1280px wide and 6,735px tall. The header is 84px high with padding 15px 33.3333px. The CSS declares a spacing scale: `--spacing-3xs 5px`, `--spacing-2xs 10px`, `--spacing-xs 15px`, `--spacing-sm 20px`, `--spacing-2sm 25px`, `--spacing-md 30px`, `--spacing-2md 35px`, `--spacing-lg 40px`, `--spacing-2lg 50px`, `--spacing-xl 60px`, `--spacing-2xl 80px`, `--spacing-3xl 100px`, `--spacing-4xl 120px`, `--spacing-5xl 150px`, with negative equivalents, `--spacing-container` = 30px and `--container-padding: 100px`. Measured paddings: 5px (38), 15px (13), 100px (9), 30px (7), 40px (4), 120px (3). Measured gaps: 15px (9), 20px (4), 10px, 30px, 25px. Sections alternate between full-bleed photography, light grey bands with horizontally scrolling card rows, and a blue statistics card beside a photo grid. The footer is 464px tall with padding 40px 0px 0px.

## Elevation & Depth

Two shadows were measured: `rgba(6, 187, 232, 0.1) 0px 3px 13px 0px` (2, the white pill buttons, a faint cyan glow) and `rgba(0, 37, 99, 0.2) 0px 30px 20px -15px` (1, a navy drop under a large card). WordPress presets also declare `--wp--preset--shadow--deep` and `--wp--preset--shadow--outlined`, which are CMS defaults. Layering comes from photographs, the royal-blue card on the grey band, and the floating "WHAT'S NEW" tab.

## Shapes

Rounded 20px is the dominant radius (45 elements: cards, video thumbnails and the "explore" link), with 100px pills (7: tab and CTA buttons), 10px (1), 5px (1), 50% (1), 640px (1) and 2px (1). Tokens: `xs 2px`, `sm 5px`, `md 10px`, `lg 20px`, `xl 100px`, `pill 9999px`. The outlined CONTACT link has radius 20px and a 1px white border.

## Components

- **button-primary (OOH MEDIA) and button-secondary (VIDEO)**: white fill, navy `#002563` label, prompt 15px weight 300 uppercase, padding 0px 30px, height 60px, radius 100px, cyan glow shadow. Widths measured 147px and 106px.
- **link ("explore")**: navy label, 14px, 1px solid navy border, radius 20px, padding 0px 15px, height 30px, width 84px.
- **Outlined CONTACT**: white label, 1px solid white border, radius 20px, padding 0px 30px, height 30px.
- **nav**: navy header, white text 12px weight 400 for utility links and 15px for primary links.
- **text-input**: white text on transparent, 14px, padding 15px 15px 15px 0px, height 47px (search).
- **card**: `#f7f7f7`, navy text, radius 20px, padding 15px; thumbnails carry play badges.
- **footer**: `#010101`, white text, padding 40px 0px 0px.

## Design System Architecture

No public design system or brand-guideline page was found; the opened home page has no such link. The site is a WordPress theme whose shipped CSS defines a named spacing scale (`--spacing-3xs` to `--spacing-5xl` with negatives), a container padding (`--container-padding: 100px`), a body font variable (`--font-body`), a large font-size preset (`--wp--preset--font-size--large: 36px`) and the standard WordPress preset color and shadow variables. Source: https://www.planbmedia.co.th/ (measured with `web/scripts/extract-tokens.mjs`).

## Do's and Don'ts

- Do use navy #002563 for text and header, with white pill buttons on photography.
- Do set display type in Montserrat 800 and body in Prompt 300.
- Do round cards at 20px and buttons at 100px.
- Do show real inventory photography and numeric statistics.
- Don't use the WordPress preset colors (vivid purple and others) as brand colors.
- Don't add heavy shadows; the measured glows are 10% to 20% opacity.
- Don't set Thai text in Montserrat; Prompt carries Thai and Latin body copy.

## Responsive Behavior

Measured on the 390px pass: the h1 is Montserrat 40px (weight 800) in a 98px-wide, 270px-tall rotated block; the h2 "Feature Stories" is 32px weight 300; the header shows "English" and "ไทย" at 12px on the navy fill; the most-read mobile sizes are 20px (528 characters), 14px (433), 15px (249), 32px (70), 12px (45) and 40px (16). The layout of nav and card rows at mobile width is not measured.

## Iteration Guide

1. Canvas #f7f7f7, ink and header #002563, footer #010101, statistics card #004bc9, accent cyan #06bbe8.
2. Montserrat 800 at 80px for the hero word, Prompt 300 at 14px for copy.
3. White pill buttons 60px high with the cyan glow shadow; 20px radius on cards.
4. Run `node web/scripts/verify-designs.mjs --slug=plan-b-media` after edits; never change measured values.
