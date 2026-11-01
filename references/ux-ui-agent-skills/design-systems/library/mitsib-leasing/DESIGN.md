---
version: alpha
name: Mitsib Leasing
category: "Thai Brands"
description: "Mitsib Leasing PCL (mitsibleasing.com), a Thai taxi and vehicle finance company on WordPress with the Betheme theme: orange #f36d37 brand bands, near-white canvas #fcfcfc, Prompt body at 300, Athiti navigation, Roboto controls, flat 0px buttons and 2px accent radii."
colors:
  canvas: "#fcfcfc"
  page-body: "#111013"
  ink: "#000000"
  primary: "#f36d37"
  on-primary: "#ffffff"
  control-grey: "#54595f"
  surface-grey: "#bbbbbb"
  measured-violet: "#833ca3"
  ink-muted: "#7a7a7a"
  ink-slate: "#69727d"
  button-secondary-fill: "#f1f2f3"
  footer-bg: "#f9e0e2"
typography:
  display:
    fontFamily: Athiti, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
  display-mobile:
    fontFamily: Athiti, sans-serif
    fontSize: 34px
    fontWeight: 500
    lineHeight: 20px
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 20px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  nav:
    fontFamily: Athiti, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 20px
  button-secondary:
    fontFamily: Prompt, sans-serif
    fontSize: 19px
    fontWeight: 500
  input:
    fontFamily: Roboto, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
rounded:
  xs: 2px
  sm: 3px
  md: 5px
  none: 0px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12.44px
  s3: 12.69px
  s4: 13px
  s5: 15px
  s6: 20px
  s7: 30px
  s8: 35px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.control-grey}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 30px
    boxShadow: rgba(0, 0, 0, 0.03) 0px 0px 0px 1px inset
  button-secondary:
    backgroundColor: "{colors.button-secondary-fill}"
    textColor: "{colors.control-grey}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 15px 35px
    height: 59px
    boxShadow: rgba(0, 0, 0, 0.03) 0px 0px 0px 1px inset
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 13px 20px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 13px 20px
  text-input:
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 10px
    height: 30px
    boxShadow: rgba(0, 0, 0, 0.02) 0px 0px 2px 2px inset
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
---

## Overview

Mitsib Leasing PCL is a Thai finance company whose homepage (title "หน้าแรก - Mitsib Leasing PCL.") sells financing and insurance to taxi and public-transport operators: taxi refinancing, loans for buying used and electric taxis, solar-rooftop loans, taxi insurance, car insurance and health insurance. The capture shows a confident, orange-led corporate site. A solid orange top bar carries the group's three company links (Mitsib Leasing, Mitsib Sek-ngen, Mitsib Pico), a search field and utility links; below it a white navigation row holds the logo and the main menu; then a framed slideshow, an orange panel with a photo of the orange-fronted head office and a row of green-and-yellow taxis, a six-item services grid with character illustrations, a promotional banner, and an FAQ block.

The measured palette puts the near-white canvas `{colors.canvas}` (#fcfcfc) under large orange fields. The orange appears in the extraction as #f36d37 (background, text and an 18-count border color), with #f36e27 and #f15a29 as nearby background fills. `{colors.primary}` is set to #f36d37 here because it is the measured brand color; the extractor's own "primary button" was the grey search button, kept separately as `{colors.control-grey}` (#54595f).

Voice is warm and plain Thai, with short service labels ("รีไฟแนนซ์รถแท็กซี่", "ประกันรถยนต์") and one-line promises beneath them such as "ผ่อน 0% 10 เดือน". All numbers below come from the desktop pass at 1280px and the mobile pass at 390px.

## Colors

- **Canvas `{colors.canvas}` #fcfcfc:** page ground. `{colors.page-body}` #111013 is the body element color measured on the page.
- **Brand orange `{colors.primary}` #f36d37:** top bar, services panel, headings in orange on the near-white ground (text color weight 280) and 18 outlined elements with an orange border.
- **White `{colors.on-primary}` #ffffff:** the most frequent text color by characters (1,617), used on orange and photographic areas.
- **Ink `{colors.ink}` #000000:** main-menu text on the white row (217 characters). `{colors.ink-muted}` #7a7a7a and `{colors.ink-slate}` #69727d are secondary text.
- **Greys:** `{colors.surface-grey}` #bbbbbb is the largest background by measured area (13,102 weight) in the extractor's area ranking; `{colors.control-grey}` #54595f is the search button fill; `{colors.button-secondary-fill}` #f1f2f3 is the "สถานที่ตั้งบริษัท" button fill.
- **`{colors.footer-bg}` #f9e0e2:** the footer background reported by the extractor.
- **`{colors.measured-violet}` #833ca3:** measured as a large background area (weight 2,894, tied with #4054b2). Its role was not identified in the capture, so it is retained without a usage claim.

Other values in the frequency data: #3b5998 and #06c755 (2 each) are not identified as Mitsib brand colors (their elements were not recorded) and are not used as tokens. #54595f and #222222 appear as small areas.

## Typography

Four families were counted: Prompt (2,136 characters), Athiti (162), Kanit (18) and Roboto (6). Loaded fonts listed by the extractor: Kanit 400 and 700, Roboto 400, Prompt 300, 400, 500 and 600, Athiti 500.

- **Body `{typography.body}`:** Prompt 18px, weight 300, line-height 24px. 18px is the most used size (1,522 characters).
- **Heading `{typography.heading}`:** Prompt 20px, weight 600, line-height 20px, used on the white "บริษัท มิตรสิบ ลิสซิ่ง จำกัด (มหาชน)" heading in the orange panel.
- **Navigation `{typography.nav}`:** Athiti 18px, weight 500, line-height 20px.
- **Display `{typography.display}`:** Athiti 20px, weight 500, line-height 20px. This is what the extractor selected as the h1 candidate on desktop: the white "เกี่ยวกับเรา" link in the orange bar, not a true page heading. On mobile the h1 candidate is the logo link "มิตรสิบ ลิสซิ่ง" at 34px (`display-mobile`, weight 500, line-height 20px, 216px wide).
- **Button `{typography.button}`:** Roboto 16px, weight 400, line-height 16px (the search button); **secondary button:** Prompt 19px weight 500; **input:** Roboto 15px weight 400.
- Weights by characters: 400 (959), 300 (712), 500 (363), 600 (282), 700 (6). Sizes also include 20px, 16px, 19px, 30px, 24px and 14px.

## Layout

The page is 1280px wide with a scroll height of 3,890px. Bands run full width with a centered container: the framed slideshow and the orange panel are inset with margins from the page edges, the services grid is three columns by two rows, and the FAQ pairs an illustration with an orange question button on the right. The top bar and menu are two stacked horizontal rows.

Spacing values measured: 10, 12.44, 12.69, 13, 15, 20, 30, 35, 40 and 50px (`s1` to `s10`); the most common gap is 20px (34 occurrences). Nav links use padding 13px 20px, the secondary button 15px 35px and the search controls 0px 10px at 30px height.

## Elevation & Depth

Three shadows were recorded: an inset hairline `rgba(0, 0, 0, 0.03) 0px 0px 0px 1px inset` on four buttons, an inset `rgba(0, 0, 0, 0.02) 0px 0px 2px 2px inset` on the text input, and one drop shadow `rgba(0, 0, 0, 0.5) 0px 0px 10px 0px` on one element whose role was not recorded. The WordPress preset shadows in the root variables (natural and outlined) are framework presets and were not measured on page elements. Depth in the capture is mostly color blocking: orange panel on near-white, framed slideshow with a thin white border.

## Shapes

Radii measured: 2px (18 elements, the same count as the orange border color), 3px (1), 5px (1), 50% (2, circular elements) and 0px for all buttons and navigation. `{rounded.none}` applies to every button, link and input token above. The extraction does not name which elements carry the 2px radius and the orange border.

## Components

- **Search button (`button-primary`):** fill `{colors.control-grey}`, white text, Roboto 16px, 0px radius, padding 0px 10px, height 30px, inset hairline shadow. It is the extractor's detected primary button and belongs to the search form in the orange bar.
- **Secondary button (`button-secondary`):** fill `{colors.button-secondary-fill}`, text `{colors.control-grey}`, Prompt 19px 500, padding 15px 35px, height 59px; label "สถานที่ตั้งบริษัท".
- **Top-bar company links:** white text with a white border that changes to black text and black border on hover (measured for "มิตรสิบ เสกเงิน" and "มิตรสิบ พิโก", 46px tall).
- **Nav links:** Athiti 18px 500, padding 13px 20px, black; the active "หน้าแรก" item is orange with an underline in the capture.
- **Text input:** Roboto 15px, 30px high, padding 0px 10px, text color `{colors.ink-muted}`.
- **Footer:** `{colors.footer-bg}` background.
- **Services grid and slideshow:** illustration-led cards with orange titles and grey descriptions; no numeric card tokens were extracted. The cookie notice present on load was hidden by the extractor and is not part of the system.

## Design System Architecture

No public design system was found; none was searched for because no link to one was surfaced by the extraction. The shipped system is WordPress: the root custom properties include `--wp--preset--font-size--large` (36px), `--wp--preset--font-size--small` (13px), spacing presets (0.67rem, 1.5rem, 3.38rem), WordPress default color presets (for example #0693e3, #9b51e0, #fcb900) and `--swiper-navigation-size` (44px) from the Swiper slider. A button background image URL points at `wp-content/themes/betheme/images/box_shadow_button.png`, which identifies the Betheme theme. The WordPress default presets are not brand colors and are not used as tokens.

## Do's and Don'ts

- Do let orange `{colors.primary}` carry whole bands and headings; white text sits on it.
- Do keep body copy in Prompt weight 300 and navigation in Athiti 500.
- Do keep buttons and inputs square (0px radius).
- Don't use WordPress preset colors or the unidentified small-area fills (#3b5998, #06c755) as Mitsib colors.
- Don't use the grey search-button fill as the brand call to action; it is a form control.
- Don't introduce heavy drop shadows; the measured shadows are inset hairlines plus one unlabeled drop shadow.
- Don't document the cookie notice as brand UI.

## Responsive Behavior

Measured at 390px: the h1 candidate is the logo link at 34px weight 500 (216px wide), and an h2 of 20px weight 600 in white (the company heading) was recorded. Menu collapse, grid reflow, slider behavior and breakpoints are not measured.

## Iteration Guide

1. Start with `{colors.canvas}` and black `{typography.nav}` navigation.
2. Add orange bands from `{colors.primary}` with white `{typography.heading}` titles.
3. Keep controls at 0px radius, 30px high inputs and the hairline inset shadow.
4. Resolve the unplaced `{colors.measured-violet}` and the #f36e27 / #f15a29 orange variants by measuring the elements that use them before relying on them.
5. Run `node web/scripts/verify-designs.mjs --slug=mitsib-leasing`.
