---
version: alpha
name: Pacific Park Sriracha
category: "Thai Brands"
description: "Pacific Park Sriracha Shopping Center is a Sri Racha mall site built in royal-navy #232d80 and sky-blue #3270b6 with an orange #f7901e accent and a pink #fe579c active-menu state, set in Noto Sans Thai (16px body, 21px menu, 48px headings), with full-bleed category photo tiles and event cards underlined by an orange rule."
colors:
  canvas: "#ffffff"
  ink: "#232d80"
  primary: "#f7901e"
  surface-blue: "#3270b6"
  ink-text: "#111111"
  ink-muted: "#69727d"
  ink-navy-deep: "#2b3294"
  link: "#222222"
  nav-active: "#fe579c"
typography:
  display:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 21px
    fontWeight: 500
    lineHeight: 27.3px
  display-mobile:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 41.6px
  heading:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 62.4px
  subheading:
    fontFamily: Marcellus, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 44.8px
  body:
    fontFamily: "\"Noto Sans Thai\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Merriweather, Helvetica, Arial, Verdana, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 30px
  sm: 50px
  pill: 9999px
spacing:
  s1: 1.5px
  s2: 3px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 20px
  s8: 23px
  s9: 30px
  s10: 50px
components:
  button-outline:
    textColor: "{colors.surface-blue}"
    typography: "{typography.body}"
    padding: 7px 15px
    height: 43px
    borderColor: "{colors.surface-blue}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.nav-active}"
  nav-link:
    textColor: "{colors.nav-active}"
    typography: "{typography.display}"
---

## Overview

The measured page is https://www.pacificpark.co.th/, whose Thai title describes Pacific Park Sriracha shopping centre as open every day and answering every customer group with complete products and services. The site says the mall is in Sri Racha, lists opening hours of 11:00 to 21:00 on weekdays and 10:00 to 21:00 on weekends and holidays, names tenants such as Major, Adidas, Chester's, Miki Miki, Mixue and Focus, and mentions an event space called Pacific Hall on floor 4.

The first capture of this page was covered by a memorial tribute overlay (a dark panel with a black-and-white portrait and Thai mourning text behind a scrim, built as an Elementor popup modal). The tokens were regenerated after the extractor hid that scrim, and the new capture shows the actual home page. The overlay is a temporary tribute and is not brand UI.

The home page reads as a friendly, colourful mall brochure. A logo in navy and orange ("PACIFIC PARK", with SRIRACHA SHOPPING CENTER spaced below) sits at the left with social icons at the right; a menu in sky-blue Thai text runs below, with the current item (หน้าแรก, Home) in pink with a short orange rule. The remaining items are กิจกรรมและข่าวสาร (activities and news), โปรโมชั่น (promotions), ข้อมูลร้านค้า (shop information), แปซิฟิค ฮอลล์ (Pacific Hall), เกี่ยวกับเรา (about us) and ติดต่อเรา (contact us). A large aerial photograph of the building follows, then a full-bleed band of four category photo tiles labelled RESTAURANTS, FASHION, BEAUTY and LIFESTYLE, a "ข่าวสาร & กิจกรรม" (news and activities) carousel of event poster cards, an outlined "ดูอีเวนต์ทั้งหมด" (see all events) button and a "Recommended Shops" strip of tenant logos.

## Colors

- **`ink` `#232d80`** is the royal navy used for the logo word, section headings and event titles; it is the second most-read text colour after white. **`ink-navy-deep` `#2b3294`** is a nearby navy used for small text accents.
- **`surface-blue` `#3270b6`** is the sky blue measured for the menu text, the date badges and the category labels and the outline button; as a background it fills the badge and label blocks.
- **`primary` `#f7901e`** is the orange accent: the rule beneath each event card, the active carousel dot and the "ข่าวสาร" half of the section title. It is the brand's warm counterpoint to the blues.
- **`nav-active` `#fe579c`** is the pink of the current menu item.
- **`ink-text` `#111111`** and **`link` `#222222`** are the neutral near-blacks for body copy; **`ink-muted` `#69727d`** is the grey secondary text.
- **`canvas` `#ffffff`** is the page ground, over a very faint triangular pattern (a 5 percent black wash, `#1111110d`, was measured as a background).

## Typography

Thai and Latin text are set in **Noto Sans Thai** at weights 400, 500 and 600. The measured sizes are 16px/400 for body copy on a 24px line, 21px/500 on a 27.3px line for the menu, 32px/600 on 41.6px for secondary headings and 48px/600 on 62.4px for large headings. The English "Recommended Shops" heading uses **Marcellus**, a serif face, at 32px/600 on 44.8px, and links use **Merriweather** at 16px. Merriweather and Marcellus are loaded as web fonts; the site does not name a designer for any of them.

Hierarchy is made by colour and weight rather than size alone: navy headings, orange ampersands and small blue date badges set in white bold numerals.

## Imagery and voice

Photography is bright and aspirational: a daylight aerial of the mall's blue mosaic facade, close crops for the four category tiles (a plated sushi dish, a model carrying shopping bags, an eye make-up close-up, a smiling shopper in a yellow-orange tile), and cheerful illustrated posters for events such as a monthly night market, a food festival and a children's market. Event posters are supplied artwork in saturated pastel colours with hand-lettered Thai titles, so the page as a whole is lively even though the interface itself is restrained. Copy is short and practical in Thai: an event name, a date range with the Buddhist-era year, and the location inside the mall. The English words in the category labels and the "Recommended Shops" heading give the page a bilingual, international-brand feel.

## Layout

The page is a stack of full-width bands about 3040px tall at 1280px. The hero image sits inside a margin; the category tiles run edge to edge as four equal columns; the event carousel shows three cards across inside the container; the shop strip is centred below. Measured spacing steps are 1.5, 3, 7, 8, 10, 15, 20, 23, 30 and 50px. A faint grey triangle pattern behind the news band separates it from the white sections.

## Elevation & Depth

The page is mostly flat: event cards are separated from the page by their white card body and the orange rule under them, not by shadows. Measured shadows are a transparent 10px shadow stack on rounded elements and a very light 1px ring. The tribute overlay sat above the page on a dark scrim.

## Shapes

Measured radii are `xs` 30px, `sm` 50px and `pill` 9999px, together with 50% and 10% on small round and softly rounded elements such as social icons. In the capture the large images, category tiles, event posters and the date badges are square-cornered; the rounded shapes are limited to the icons and the outline button's family.

## Components

- **Menu:** seven Thai items in 21px/500, sky blue, with the active item pink and underlined by a short orange line.
- **Category tile:** photograph with a navy label bar bearing white uppercase text at its lower left.
- **Event card:** poster image, a navy date badge on the left (day range, month, Buddhist-era year), the event title in navy, a one-line venue note, and an orange underline.
- **Outline button:** transparent fill, `surface-blue` text and border, 43px high, 7px by 15px padding.
- **Carousel dots:** small round dots with the active one stretched and orange.
- **Shop strip:** tenant logos on a white ground under a serif heading.

## Design System Architecture

No public design system or brand guideline was found; the pages opened were https://www.pacificpark.co.th/ itself. The site is built with Elementor on WordPress (an Elementor popup-modal scrim and the "eicons" icon font are present in the page), and its de-facto system is the theme's colour set, Noto Sans Thai for text, and a small set of Elementor widgets: image carousel, image box and button.

## Do's and Don'ts

- Do use navy for text, sky blue for navigation and an orange rule for emphasis.
- Do set Thai in Noto Sans Thai at 16px/24px for body.
- Do give every event a date badge and a one-line description.
- Do let photography tiles run full width.
- Don't use pink outside the active menu state.
- Don't set long English text in Marcellus; it is for short headings.
- Don't treat the tribute overlay as part of the standing design.

## Responsive Behavior

Both a 1280px desktop and a mobile viewport were measured. Mobile uses a separate larger heading token (32px weight 600) than the 21px desktop menu style, and the heading roles use the larger weight-600 sizes. The measurements do not record the exact breakpoints at which the bands reflow.

## Iteration Guide

1. Start with `canvas`, `ink` and `surface-blue`; add `primary` orange only as an underline or accent.
2. Build cards as poster over white body with a date badge and an orange bottom rule.
3. Keep category tiles as full-bleed photographs with navy labels.
4. Use Noto Sans Thai at the measured sizes.
5. Re-run `node web/scripts/verify-designs.mjs --slug=pacific-park` after changes.
