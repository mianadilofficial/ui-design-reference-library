---
version: alpha
name: MThai
category: "Thai Brands"
description: "MThai is a Thai lifestyle, horoscope and lottery content portal with the tagline 'เชื่อในสิ่งที่ทำ ทำในสิ่งที่เชื่อ'. It is built on a light-grey #f2f2f2 canvas with white cards, deep indigo-black #110f27 text, a vivid orange #f1630d brand colour used for headlines, borders and the sign-up button, Noto Sans Thai at 16px, and 4px corners."
colors:
  canvas: "#f2f2f2"
  page-body: "#ffffff"
  ink: "#110f27"
  primary: "#f1630d"
  on-primary: "#ffffff"
  surface-ad: "#d5d5dd"
  ink-secondary: "#212529"
  accent-plum: "#7b3b78"
  alert-red: "#ff2f2f"
  text-input-text: "#495057"
  text-input-border: "#ced4da"
  card-bg: "#eeeeee"
  card-border: "#cccccc"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", Tahoma, sans-serif"
    fontSize: 28.8px
    fontWeight: 700
    lineHeight: 34.56px
  heading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", Tahoma, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  subheading:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", Tahoma, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  body:
    fontFamily: "\"Noto Sans Thai\", \"Noto Sans\", Tahoma, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 12px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "#000000"
    rounded: "{rounded.sm}"
    padding: 4px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.primary}"
---

## Overview

The measured page is https://mthai.com/ (title "MThai เชื่อในสิ่งที่ทำ ทำในสิ่งที่เชื่อ", "Believe in what you do, do what you believe"). MThai describes itself as a Thai digital lifestyle and spiritual-content platform, established in 2016, with sections on lottery and numbers (dream interpretation, results, statistics), horoscopes and fortune, sacred sites and temples by province, lifestyle (fashion, food, health, technology, home), news and PR features, and auspicious objects and wallpapers. It also operates a mobile app with daily horoscopes, lucky colours and news.

The home page is a dense, news-portal layout. Ad slots frame the page: a wide banner above the header and another beneath the hero, and a floating strip near the bottom of the first screen with a close control. The header has the orange and navy "MTHAI" logo at the left, a "สินค้าแนะนำ" (recommended products) link and a button reading "เปิดสมัครสมาชิก (ฟรี) เร็วๆ นี้" (free membership sign-up, coming soon). A dark grey strip beneath carries the section menu: หน้าแรก, ทำนายฝัน, ตรวจหวย, ผลบอล, ดูดวง, วอลเปเปอร์เสริมดวง, วัดสวย, บทสวดมนต์ and ไลฟ์สไตล์. A carousel banner for the lottery draw follows. Then comes the orange headline "It's All About Belief" with the tagline beneath it, a "TOP STORIES" list with small thumbnails on the left, and a large lead story card with two smaller story cards below it, each bordered in orange.

A PDPA cookie panel exists in the page and was hidden by the extractor, so it does not appear in the measurements.

## Colors

- **`primary` `#f1630d`** is the brand orange. It colours the headline text ("It's All About Belief" and "TOP STORIES"), the orange story-card borders, category kicker labels, the logo mark, and the 1px border and fill of the sign-up button. `on-primary` `#ffffff` is the text on it.
- **`ink` `#110f27`** is the main text colour, a very dark indigo, the most-read colour by characters. **`ink-secondary` `#212529`** is a neutral dark for navigation text.
- **`canvas` `#f2f2f2`** is the page background and **`page-body` `#ffffff`** is the white of the header, cards and input fields. **`surface-ad` `#d5d5dd`** is the pale grey-lavender behind advertising slots, and **`card-bg` `#eeeeee`** with **`card-border` `#cccccc`** form a neutral card style.
- **`accent-plum` `#7b3b78`** and **`alert-red` `#ff2f2f`** appear on a small number of characters (category tags and highlights).
- **`text-input-text` `#495057`** and **`text-input-border` `#ced4da`** are the measured input colours, which match common Bootstrap form defaults.

## Typography

Everything is set in **Noto Sans Thai** (weights 400, 500 and 700), with Noto Sans and Tahoma as fallbacks. The measured scale: 16px/400 on a 24px line for body, 16px/500 for sub-headings and labels, 28.8px/700 on 34.56px for the page-level headline (the h1 "It's All About Belief"), and 32px/700 on 38.4px for section headings such as TOP STORIES. By character counts, 16px dominates, then 28px, 12.8px, 24px and 32px. Weight 700 is used for headlines and 400 for body; titles in the story cards are bold and dark.

Noto Sans Thai is an open font family; no substitute is needed, and Tahoma already serves as the site's own fallback.

## Imagery and voice

Editorial imagery is illustrative and devotional: a winged mythical bird over a misty landscape for a horoscope story, a red-and-gold carved temple, and a white pagoda with a long approach path, most of them carrying a small MTHAI watermark at the corner. List thumbnails are small square crops that mix photographs, festival graphics and character illustrations. Advertising uses saturated orange and blue promotional art for the app and lottery statistics, which is why orange in the interface can be confused with ad content; the editorial brand orange is the one used for headings and borders. Headlines are written in Thai, are long and descriptive (they often continue over two or three lines), and are paired with short category tags such as ดูดวง (horoscope), FOOD and PR NEWS, giving the page a magazine-like voice.

## Layout

The page is long: about 10,180px tall at 1280px. The content column is centered with a lead story to the right and a narrow list column to the left in the first block; below the lead card two story cards sit side by side. The measured spacing steps are 4, 5, 6, 7, 8, 10, 12, 15, 16 and 20px. Section strips alternate between the `canvas` grey and white blocks, and advertising slots are inserted between editorial blocks.

## Elevation & Depth

Depth is limited. Measured shadows are two small upward shadows (a 4px offset 0.4 alpha shadow and a 1px offset 0.2 alpha line), and cards are distinguished by borders rather than lifted surfaces. The floating ad strip and the sticky header sit above content.

## Shapes

The overall impression is of a modest, functional portal: small corner radii on every control, no pill-shaped buttons, and cards that read as bordered tiles rather than floating surfaces. This matches the dense, scannable character of a news and horoscope site where users expect to see many headlines at once and where the interface should stay out of the way of the stories.

Corners are slightly rounded: `xs` 4px is the base radius for buttons and inputs, `sm` 5px for cards, `md` 6px and `lg` 12px for some tiles, plus 50% on circular carousel arrows and dots (`pill` for full rounding).

## Components

- **Primary button:** `primary` fill and 1px `primary` border, `page-body` text, 4px radius, 38px high, 6px by 12px padding, 16px/400 text.
- **Menu bar:** dark grey strip with white text; the current item (หน้าแรก) is orange.
- **Story card:** white card with a 1px orange border, a large photograph, an orange category kicker and a bold dark headline.
- **List item:** small thumbnail left, orange category label and a 16px headline at the right.
- **Text input:** white, 1px `text-input-border`, 4px radius, 38px high.
- **Carousel:** full-width banner with circular previous and next arrows and dots.

## Design System Architecture

No public design system or brand guideline was found; pages opened were https://www.mthai.com/ itself. The de-facto system is a Bootstrap-based theme: the shipped CSS includes Bootstrap-style variables and form-control colours alongside the portal's own orange. The brand-specific elements are the orange `#f1630d`, the indigo-black `#110f27` and Noto Sans Thai, repeated across cards, labels and buttons.

## Do's and Don'ts

- Do use orange for headlines, borders and the single filled button, and indigo-black for body text.
- Do keep cards white on the grey canvas with thin borders.
- Do label every story with a short orange category kicker.
- Do use bold 700 Noto Sans Thai for headlines.
- Don't use large radii; stay at 4px to 6px.
- Don't add a second accent beyond the sparing plum and red tags.
- Don't treat the cookie panel or ad banners as brand components.

## Responsive Behavior

Both desktop (1280px) and mobile were measured. The extractor's recorded mobile roles keep the same font family and colours as desktop. The measurements did not capture breakpoint widths, so none are stated.

## Iteration Guide

1. Start from `canvas`, `page-body`, `ink` and `primary`.
2. Build story cards as bordered white tiles with an orange kicker.
3. Use Noto Sans Thai at 16px body, 28.8px and 32px bold headings.
4. Keep the corner radius at 4px and the button 38px high.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mthai` after changes.
