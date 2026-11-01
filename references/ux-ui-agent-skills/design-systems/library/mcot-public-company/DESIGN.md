---
version: alpha
name: MCOT Public Company Limited (MCOT)
category: "Thai Brands"
description: "Thai state media group site at mcot.net/www/th: black header with Kanit 18px body and 30px weight 600 headings, channel colour bands in purple #9013fe, blue #3684da and orange #e67b38, a #6506bc button, 16px-radius video cards."
colors:
  canvas: "#d6dbdc"
  ink: "#000000"
  primary: "#6506bc"
  on-primary: "#ffffff"
  band-purple-light: "#9013fe"
  band-blue: "#3684da"
  band-orange: "#e67b38"
  band-purple: "#a010f1"
  ink-meta: "#bdbdbd"
  ink-grey: "#4a4a4a"
  ink-faint: "#8a9299"
  hairline: "#e5e7eb"
typography:
  display:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 30px
    fontWeight: 600
    lineHeight: 36px
  body:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: __Kanit_8d5f5e, __Kanit_Fallback_8d5f5e
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 20px
  xl: 24px
  2xl: 117.14px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 40px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
---

## Overview
The first extraction of mcot.net landed on https://www.mcot.net/en-us, which rendered a 404 ("Page not found") with skeleton placeholders, so it was discarded. The site's apex redirects (HTTP 308) to /www/th; the real home page was re-measured at https://www.mcot.net/www/th (title "MCOT.net", final measured URL https://www.mcot.net/www/th, scroll height 7848px). The measured brand is MCOT (บมจ. อสมท, MCOT Public Company Limited), Thailand's state-owned media group, and the site doubles as the portal for its channels: Thai News Agency (สำนักข่าวไทย), NINE Entertain (ไนน์เอ็นเตอร์เทน), 9MCOT HD, Mellow Pop, Backbone, MCOT Academy, ESG and the FM 95 MHz radio station "ลูกทุ่งมหานคร". The page is a black header, then a procession of full-bleed colour-coded bands: a white band with a campaign banner (a tribute notice in the capture), a deep-blue band for news, a purple "Livestream" band with a video player and a purple pill "ผังรายการทั้งหมด" (all programmes) button, a magenta-purple entertainment band with four video cards, and an orange band for the radio channel. A cream toast "ข่าวสาร MCOT" with a close icon floats over the news band and an intro overlay (`intro-page-overlay`) was hidden by the extractor; neither is documented as brand UI. A third-party ad strip (an IMF-themed banner) sits mid-page and is not brand content. Copy is bilingual Thai with English channel names set in heavy upper-case display.

## Colors
The brand is a set of channel colours on a black frame. The header and footer are #000000 (area weight 5275) and the most common surfaces are white (4165), then purple #9013fe (622), blue #3684da (617), orange #e67b38 (586) and a deeper purple #a010f1 (514). The generated `primary` is #6506bc, the fill of the measured "ผังรายการทั้งหมด" button with white text, and it also appears as a border color. Canvas in the tokens is #d6dbdc as generated. Text colors by character weight: #000000 (5979), #ffffff (2788), #bdbdbd (1440, meta text such as dates and view counts), #4a4a4a (227), #8a9299 (26). Hairline borders are #e5e7eb. The measurement also recorded #1a73e8 on 14 characters; it was not tied to a brand element and is dropped from the tokens. The page declares NextUI variables and a Swiper theme color #007aff (a swiper default, not a brand color). Dark/light switching beyond the black header and white body was not measured.

## Typography
A single family: Kanit, loaded through Next.js as `__Kanit_8d5f5e` with a generated fallback, in weights 400 and 700 (usage by character weight: 400 for 9990, 600 for 486). Sizes: 18px (7725), 14px (1716), 16px (698), 30px (220), 12px (54), 10px (39). Tokens: display 30px / 36px weight 600 (section headings such as "สำนักข่าวไทย"), body 18px / 28px weight 400, button 16px / 24px weight 400. The header utility strip uses small 10px to 12px labels with a text-size control. The mobile pass recorded the same 30px display and 18px body sizes (body line 112px high at 318px width). Kanit is an open font family.

## Layout
Page width 1280px, scroll height 7848px. A black two-row header (utility strip with text size, contrast colour options, Terms & Condition and Contact; main row with the MCOT wordmark, channel navigation in bold upper-case, search, globe and login) precedes full-width bands, each with a heading rule and a "ดูทั้งหมด" link on the right. News is a large lead image with a four-item list at right; entertainment and radio sections use four equal video cards. Measured paddings: 4px (215), 8px (52), 64px (16), 6px (7), 40px (4), 16px (4). Spacing tokens run from 2px to 32px.

## Elevation & Depth
No box-shadow was measured beyond a 3px white offset (`rgb(255,255,255) 3px 0px 0px 0px`), used as a text or indicator edge. Depth comes from colour bands, gradient and faceted background imagery behind the news and entertainment bands, and photograph cards with dark caption gradients. NextUI shadow variables exist in the CSS (--nextui-box-shadow-small/medium/large) but the page uses them only as declared variables, not as measured element shadows.

## Shapes
Radii by weight: 16px (112, video and news cards), 8px (105), 9999px (17, pills and dots), 12px, 24px and 117.14px (one each). The measured primary button has a 0px radius in the extraction, while the capture shows the "ผังรายการทั้งหมด" button with fully rounded ends; the extraction's 0px is recorded in the token and the discrepancy is noted here rather than resolved. Tokens: xs 8px, sm 12px, md 16px, lg 20px, xl 24px, pill 9999px.

## Components
Button-primary: #6506bc fill, white 16px label, 40px tall, 197px wide in the measurement. Link: white 16px. Nav: bold upper-case channel names in white on black, the active "หน้าหลัก" item underlined. Section header: bold 30px heading with a thin white rule and a "ดูทั้งหมด" link with a circular arrow. Video card: 16px-radius thumbnail with a caption overlay, then a date and view-count meta row in #bdbdbd and a two-line headline. Channel logo chips are circular. Livestream player: embedded video with a dark control bar (third-party player controls are not tokenised).

## Design System Architecture
No public design system or brand guideline was found for MCOT (not searched; the pages were measured through the extractor only). The site is a Next.js application using NextUI and Tailwind: :root exposes --nextui-radius-small 8px, --nextui-radius-medium 12px, --nextui-radius-large 14px, --nextui-font-size-tiny 0.75rem, --nextui-font-size-small 0.875rem, --nextui-font-size-medium 1rem, --nextui-font-size-large 1.125rem, --nextui-border-width-small 1px, medium 2px and large 3px, three layered NextUI shadows, and Swiper variables (--swiper-navigation-size 44px). Class names in the overlay (`fixed inset-0 z-[9999]`) are Tailwind utilities. The brand layer is the channel colour bands and Kanit.

## Do's and Don'ts
Do frame content in black and use one saturated colour band per channel (blue news, purple entertainment and livestream, orange radio). Do use Kanit at 18px / 28px for body and 30px weight 600 for section headings. Do show cards at 16px radius with grey #bdbdbd meta text. Don't use the swiper default #007aff or the #1a73e8 blue as brand colours. Don't document the intro overlay, the floating news toast, the ad strip or the tribute banner as system components. Don't mix more than one channel colour inside a single band.

## Responsive Behavior
The 390px mobile pass measured: h1 30px / 36px weight 600; body 18px / 28px at 318px wide; the primary button unchanged at 197px by 40px with #6506bc; font sizes by character weight 18px, 14px, 16px, 30px. No mobile navigation role was found. Column counts and menu collapse were not measured.

## Iteration Guide
1. Black frame, white text, purple #6506bc buttons, band colours #9013fe, #3684da, #e67b38. 2. Kanit 18px body, 30px weight 600 headings, 16px buttons. 3. Cards 16px radius with #bdbdbd meta line. 4. Always measure /www/th, not the /en-us path, which returns a 404 skeleton. 5. Hide intro overlays and toasts before measuring. 6. Hover states, focus states and the channel navigation typography beyond bold upper-case were not measured.

## Notes on Measurement Scope
Measurements come from one desktop pass at 1280px and one mobile pass at 390px of https://www.mcot.net/www/th. The first captured address (/en-us) was a 404 page and none of its values are used. The home page carries an in-flow tribute banner under the header; it is content, not a component, and its styling was not extracted separately. Interior pages (news articles, programme schedule, the Academy and ESG sections), search and login forms were not measured, so no input token exists. The extractor found no card roles, so card styling above is taken from measured radii and the capture, with sizes limited to measured values. The hover pass recorded no changes.
