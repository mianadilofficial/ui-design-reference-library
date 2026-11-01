---
version: alpha
name: Sanook.com
category: "Thai Brands"
description: "Thai news and entertainment portal at sanook.com. White canvas, brand red #f70000 channel tabs, Sukhumvit 33px bold headlines with Prompt 30px section headings, light grey card shadows, 20px-radius search and login pills, and dense multi-column card rows."
colors:
  canvas: "#ffffff"
  ink: "#3d3d3d"
  primary: "#f70000"
  on-primary: "#ffffff"
  surface-2: "#fb4f00"
  surface-3: "#eeeeee"
  ink-2: "#000000"
  ink-3: "#999999"
  ink-4: "#191717"
  ink-5: "#292b2c"
  ink-6: "#646464"
  hairline: "#c3c3c3"
  button-secondary-bg: "#ff6f01"
  footer-border: "#c4c4c4"
typography:
  display:
    fontFamily: sukhumvit, sukhumvit-fallback
    fontSize: 33px
    fontWeight: 700
    lineHeight: 46.2px
  heading:
    fontFamily: prompt, prompt-fallback
    fontSize: 30px
    fontWeight: 600
    lineHeight: 46px
    letterSpacing: "-0.2px"
  body:
    fontFamily: sukhumvit, sukhumvit-fallback
    fontSize: 11px
    fontWeight: 400
    lineHeight: 16.5px
  button:
    fontFamily: prompt, prompt-fallback
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button-secondary:
    fontFamily: prompt, prompt-fallback
    fontSize: 24px
    fontWeight: 600
    lineHeight: 36px
  input:
    fontFamily: sukhumvit, sukhumvit-fallback
    fontSize: 13px
    fontWeight: 400
    lineHeight: 32px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 9px
  xl: 20px
  2xl: 25px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 7px
  s6: 8px
  s7: 8.7px
  s8: 9px
  s9: 10px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 8.7px
    height: 43px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 10px 40px 10px 20px
    height: 56px
  link:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 0px 0px 5px
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 30px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 1px 2px 1px 30px
    height: 31px
    borderColor: "{colors.hairline}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    boxShadow: rgba(195, 195, 195, 0.35) 0px 2px 6px 2px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 40px 0px
    borderColor: "{colors.footer-border}"
---

# Sanook.com

## Overview
The measured page is https://www.sanook.com/, a Thai-language portal titled "Sanook.com รวมข่าว บันเทิง ดูดวง ตรวจหวย ไลฟ์สไตล์ กีฬา" (news, entertainment, horoscopes, lottery checks, lifestyle and sport). It is a dense news-portal home 1280px wide and 6978px tall. The header has the red "sanook" wordmark logo, a rounded search field with a magnifier, three icon shortcuts (lottery check, horoscope, a streaming link "WeTV"), and a rounded "เข้าสู่ระบบสมาชิก" (member login) pill. Beneath it a channel strip lists หน้าแรก, เรื่องฮอต, ข่าว, ดูดวง, ข่าวบันเทิง, ที่ฟา, เศรษฐกิจ, ไลฟ์สไตล์, รถยนต์, ไอที, วัยรุ่น, คลิป, Exclusive WeTV and นิยาย, with the active tab filled solid red and a red rule running underneath. The first section, "เรื่องเด่นวันนี้" (today's highlights) with the current Thai date, holds a large lead story card at left and a grid of smaller image cards at right; below are rows of 4 smaller cards, a video carousel, native ad rows, and paired category blocks (อัปเดตจีน, เช็กข่าวชัวร์, ข่าวดังในกระแส, บันเทิง-ดารา), each topped by a colored rule: red, green and purple.

A tracking-consent popup (blue box with a white "ตกลง" button) sat over the first capture and an ad slot labelled "Report This Ad" is also visible. These are third-party and consent controls, not brand UI; the page was re-extracted with the consent overlay hidden (the extraction records `consentOverlaysHidden`), and their colors are not documented as tokens.

## Colors
Red is the brand: `#f70000` fills the active channel tab, colors nav text and links, and is the footer text color. A deeper orange-red `#fb4f00` shows on a link background and `#ff6f01` fills the secondary button (the "ดูหนัง ซีรีส์" tab, 24px Prompt 600 white). Text is `#3d3d3d` for headlines on white, `#000000` for section headings and inputs, `#191717` and `#292b2c` for dark copy, `#646464` for small update notes and `#999999` for card meta such as dates. Surfaces: white canvas, `#eeeeee` for panels and the ad-placeholder grey. Borders are `#c3c3c3` on the search input and `#c4c4c4` on the footer; other border colors measured include `#0741a7`, `#2772af`, `#efb661`, `#9f35d5`, `#e4e4e4` and `#e2e2e2`, which belong to category chips and third-party blocks and are not tokenised. Category rules in the capture use distinct hues (red, green, purple) per section.

## Typography
Three families are measured. Sukhumvit (400 and 700) is the main Thai text face: card headlines are 33px bold on a 46.2px line height in `#3d3d3d` for the lead card, and body and meta text is 11px on 16.5px, with 16px the most frequent size by character count. Prompt (400, 600, 700) is used for section headings (30px weight 600, letter-spacing -0.2px, 46px line height), channel tabs (15px regular on 22.5px) and the secondary tab (24px 600 on 36px). The header container falls back to Helvetica Neue, Helvetica, Arial at 14px/21px for the nav row. Search input text is Sukhumvit 13px. The size ladder by characters runs 16, 12, 15, 11, 14, 33, 18, 10, 30, 13, 26 and 20px.

## Layout
The page is a centered container of roughly 850px content width in the capture with generous side margins on a 1280px viewport, built from rows of cards on a multi-column grid. The mobile pass reports `maxCardColumns: 8`. Vertical rhythm is dense: section headings, then rows of image cards with 12 to 16px captions and 11px date lines. Spacing values measured are 1, 2, 4, 5, 7, 8, 8.7, 9, 10 and 15px; the header block has 30px vertical padding and the footer 40px.

## Imagery and Voice
Photography dominates: lead stories use full-bleed press photos, with bold white Thai headlines stamped across a dark gradient at the bottom of each image. Video thumbnails carry a centered round play icon and a duration badge such as "00:56". Sponsored rows ("Taboola") sit between editorial rows and are labelled with a small "สปอนเซอร์". The voice is tabloid and urgent: question headlines, quotation marks, exclamation marks and short teaser sentences under each image, with a category label in a colored 11px tag (for example ต่างประเทศ, บันเทิง or ฟุตบอลต่างประเทศ) beside the date.

## Elevation & Depth
Cards use a soft grey shadow: `rgba(195, 195, 195, 0.35) 0px 2px 6px 2px` is the lead-card value, with `rgba(195, 195, 195, 0.4) 0px 2px 6px 2px`, `rgba(195, 195, 195, 0.65) 0px 3px 10px 0px`, `rgb(195, 195, 195) 0px 10px 10px 0px` and `rgba(0, 0, 0, 0.17) 0px 2px 6px 0px` also measured. Photographic cards with a dark gradient and white headline overlay carry most of the visual weight; shadows stay light and neutral.

## Shapes
Radii measured: 5px (most common), 50% (round avatars and icon buttons), 25px, 4px, 20px (search field and the login pill), 9px, 2px, and mixed corners such as `0px 0px 5px 5px` and `5px 5px 0px 0px` on card media and body. The channel tabs and primary button compute 0px radius; inputs and member pills are heavily rounded at 20px.

## Components
**Channel tab (primary):** `#f70000` fill, white Prompt 15px, padding 10px 8.7px, 43px high, square corners. **Secondary tab:** `#ff6f01` fill, white Prompt 600 24px, padding 10px 40px 10px 20px, 56px high. **Search input:** white, 20px radius, 1px `#c3c3c3` border, Sukhumvit 13px, 31px high with 30px left padding for the magnifier. **Login pill:** white, black text 11px bold, 20px radius, 1px `#e2e2e2` border; measured hover changes the fill to `rgb(237, 237, 237)`. **Lead card:** 555px wide by 510px tall, `#3d3d3d` bold headline, grey shadow, corners `0px 0px 5px 5px`. **Footer:** 226px tall, 40px vertical padding, 1px `#c4c4c4` border, red 12px Prompt link text.

## Design System Architecture
No public design system or brand guideline was found; `_research` records `none: true`. No root CSS custom properties were measured (`rootVars` is empty), so the de-facto system is class-based styled-jsx (class names such as `jsx-3947223524` appear in the extraction) with fonts loaded per role: Sukhumvit and Prompt with generated fallbacks, plus a `base-icon` font. Source: https://www.sanook.com/ measured into web/data/extracted/sanook.json.

## Do's and Don'ts
- Do use `#f70000` as the one brand red for the active channel and links.
- Do pair Sukhumvit for headlines and article text with Prompt for navigation and section headings.
- Do overlay white bold headlines on photographic cards, and keep dates and categories at 11px in grey.
- Do round inputs and member pills to 20px and keep tabs square.
- Don't use the consent popup's blue as a brand color.
- Don't add heavy shadows; measured shadows are light grey at 0.35 to 0.65 opacity.
- Don't set Thai text in Helvetica; it appears only in the header nav row.

## Responsive Behavior
The 390px mobile pass recorded five header links visible, no menu toggle (`menuToggleVisible: false`) and a maximum of eight card columns. The mobile pass measured the same text roles as desktop in this extraction: the h2 stays 30px Prompt 600, the lead headline stays 33px Sukhumvit 700, the nav height 93px and 14px nav text. Tablet behavior and what the layout does between breakpoints are not measured.

## Iteration Guide
1. Canvas `#ffffff`, headline ink `#3d3d3d`, brand red `#f70000`.
2. Headlines Sukhumvit 700 at 33px/46.2px on the lead card; section headings Prompt 600 30px with -0.2px tracking.
3. Build the channel strip from square tabs 43px high with the active tab filled red, and a red rule beneath.
4. Cards: 5px radius corners, light grey shadow `rgba(195, 195, 195, 0.35) 0px 2px 6px 2px`, grey 11px meta.
5. Inputs and login pills at 20px radius with `#c3c3c3` or `#e2e2e2` borders.
6. Run `node web/scripts/verify-designs.mjs --slug=sanook`.
