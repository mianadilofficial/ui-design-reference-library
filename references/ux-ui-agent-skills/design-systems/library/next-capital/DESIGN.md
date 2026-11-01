---
version: alpha
name: Next Capital
category: "Thai Brands"
description: "Next Capital (nextcapital.co.th), a Thai motorcycle hire-purchase lender: white canvas #ffffff, ink #333333, yellow action #fdb813, footer and band blue #20409a, Seven_02 with Montserrat fallback, flat 0px buttons, 3px and 30px radii elsewhere."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#fdb813"
  on-primary: "#333333"
  surface-muted: "#f5f5f5"
  brand-blue: "#20409a"
  ink-muted: "#666666"
  ink-black: "#000000"
typography:
  display:
    fontFamily: Seven_02, Montserrat
    fontSize: 50px
    fontWeight: 700
    lineHeight: 71.4286px
  display-mobile:
    fontFamily: Seven_02, Montserrat
    fontSize: 30px
    fontWeight: 700
    lineHeight: 42.8571px
  body:
    fontFamily: Seven_02
    fontSize: 13px
    fontWeight: 300
    lineHeight: 18.5714px
    textTransform: uppercase
  button:
    fontFamily: Seven_02, Montserrat
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 30px
  none: 0px
spacing:
  s1: 5px
  s2: 7px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 30px
  s8: 40px
  s9: 45px
  s10: 100px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 20px
    height: 34px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 45px 0px 0px
---

## Overview

Next Capital is the Thai-language site of a motorcycle hire-purchase lender. The page title measured in the extraction is "เน็คซ์ แคปปิตอล • ผู้ให้บริการสินเชื่อเช่าซื้อรถมอเตอร์ไซต์", and the body copy describes the company as a public company that finances new and second-hand motorcycles. The visual language is corporate and promotional at once: a white page, near-black text, one saturated blue, one saturated yellow, and a carousel banner that carries most of the marketing energy. The measured canvas is `{colors.canvas}` (#ffffff), the most-read text color is `{colors.ink}` (#333333), the CTA fill is `{colors.primary}` (#fdb813) and the blue band and footer color is `{colors.brand-blue}` (#20409a).

The first screen stacks a thin utility row (careers, contact, a Thai flag language switch), a logo row with a search field and a phone number, a nav row, and then a full-width banner. Below it, a blue photographic section titled "ธุรกิจของเรา" introduces two white cards on a light grey ground, followed by a split section: a blue calculator panel on the left and a white payment-channels panel with bank and convenience-store logos on the right. Tone is helpful and service-oriented: labels such as "กดเพื่อคำนวณสินเชื่อ" (press to calculate the loan) and "รายละเอียดเพิ่มเติม" (more details) tell the visitor what happens next.

The numbers in this document come from the extractor's desktop pass at 1280px and its mobile pass at 390px. Anything not in that data is described qualitatively or marked "not measured".

## Colors

The palette is small and every swatch is measured. `{colors.canvas}` #ffffff is the dominant background by area, with `{colors.surface-muted}` #f5f5f5 as the second-largest area (the grey ground behind the cards) and `{colors.brand-blue}` #20409a third (the "ธุรกิจของเรา" band and the footer). The yellow `{colors.primary}` #fdb813 covers very little area but is the CTA fill and also appears as a text color in the banner and calculator headings.

Text colors by character count: `{colors.ink}` #333333 carries the majority of reading text, white (#ffffff) is the second most frequent (text on blue and on photos), `{colors.primary}` appears as text, then `{colors.ink-muted}` #666666 and `{colors.ink-black}` #000000 for small amounts. The CTA text color measured on the yellow button is `{colors.on-primary}` #333333, the same as the body ink. A further text color #e2ddd6 appears in the frequency data with a very small weight; it is not promoted to a token because its role was not identified.

- **Yellow action (#fdb813):** the "กดเพื่อคำนวณสินเชื่อ" button and accents on the dark blue background.
- **Blue (#20409a):** section bands and footer; text on it is white.
- **Neutral greys:** #f5f5f5 for card ground, #666666 for secondary text.

No gradients or shadows were recorded on the CTA (the extractor recorded `boxShadows: []` for the page).

## Typography

The measured family is Seven_02, a webfont loaded at weight 400 according to the font list, used for 3,962 of the counted characters, which is every counted character. The h1 and button stacks add Montserrat as a fallback: `Seven_02, Montserrat`. FontAwesome is loaded for icons.

- **Display:** `{typography.display}` is 50px, weight 700, line-height 71.4286px, white on the blue "ธุรกิจของเรา" band. The mobile pass measured the same heading at 30px with line-height 42.8571px (`display-mobile`), so the heading shrinks from 50px to 30px at 390px.
- **Body:** `{typography.body}` is 13px, weight 300, line-height 18.5714px, uppercase as measured on the extractor's chosen body element (the "TH" language label). Most counted characters are 14px (2,692), then 13px (557), 18px (401) and 16px (170), so reading text in practice sits at 14px.
- **Button:** `{typography.button}` is 14px, weight 700, line-height 20px.
- Weights in use by character count: 300 (3,256) and 700 (706). Nothing in between was measured.

Thai script is the primary language; the headings in the capture are set in a heavy, rounded Thai display face for the banner artwork, but that artwork is imagery rather than live text.

## Layout

The page is 1280px wide in the desktop pass with a scroll height of 3,844px. The structure is full-width bands (banner, blue band, grey ground, split calculator/payment section) with a centered content container inside each. The cards under "ธุรกิจของเรา" sit two across with a gutter, each with a photo on top and a title, excerpt and "รายละเอียดเพิ่มเติม" link under it. The final section is two equal halves, blue and white.

Spacing values recorded from paddings: 5, 7, 10, 12, 15, 20, 30, 40, 45 and 100px, exposed as `s1` to `s10`. The most frequent paddings are 15px (14 occurrences), 10px, 20px and 5px. A gap of 15px was measured twice. The footer has padding "45px 0px 0px".

## Elevation & Depth

The extraction recorded no box shadows (`boxShadows` is empty), so elevation in the product is not expressed through shadow tokens. Depth in the capture comes from photography and color planes: a blue photographic band with a darkened overlay, white cards over `{colors.surface-muted}`, and a slanted banner composition. Do not add shadows when extending this system; use color-plane contrast instead.

## Shapes

Three radii were measured: 0px (`{rounded.none}`), 3px (`{rounded.xs}`) and 30px (`{rounded.sm}`). The primary button uses 0px with padding 7px 20px and height 34px, so it is a flat rectangle; in the capture its edges are slanted rather than rounded. The 30px radius was counted six times and the 3px radius twice; the extraction does not say which elements carry them, so they are documented only as available shape values. Cards in the capture have square corners as far as the visible images show, and the circular carousel arrows are the visible round forms.

## Components

- **Primary button (`button-primary`):** background `{colors.primary}`, text `{colors.ink}`, `{typography.button}`, radius `{rounded.none}`, padding 7px 20px, height 34px. Example label: "กดเพื่อคำนวณสินเชื่อ".
- **Nav (`nav`):** white background, `{colors.ink}` text, radius 0. Nav links use `{typography.body}`. In the capture the nav is a second row of Thai labels with a dropdown chevron on the "เกี่ยวกับเรา" item, and the active item is underlined.
- **Footer (`footer`):** `{colors.brand-blue}` background, `{colors.canvas}` text, padding 45px 0px 0px.
- **Link hover (measured):** the "ร่วมงานกับเรา" and "ติดต่อเรา" utility links change color and border color from rgb(51, 51, 51) to rgb(34, 34, 34) on hover; no background change was recorded.
- **Content cards:** white cards with photo, bold title, grey excerpt and an underlined "more details" link; no numeric tokens were extracted for them.
- **Carousel:** a hero banner with six progress dashes and two circular arrow buttons; behavior beyond what is visible was not measured.

## Design System Architecture

No public design system or brand guideline was found: the homepage source shows no link to one and none was searched for. The de-facto system is a CMS theme. The page source references the theme path `addons/06F1/themes/firesale_vesastheme`, loads WOW.js for scroll reveals and jQuery with Owl Carousel for sliders. The extraction found no CSS custom properties on the root (`rootVars` is empty), so there are no named tokens in the shipped CSS; the token names in this file are descriptive labels created for documentation.

## Do's and Don'ts

- Do keep the canvas white and use `{colors.surface-muted}` for the ground behind cards.
- Do reserve `{colors.primary}` for the single action on a section and keep its text `{colors.ink}`.
- Do set white text on `{colors.brand-blue}`.
- Do use Seven_02 at weights 300 and 700 only.
- Don't add shadows or gradients to buttons; none were measured.
- Don't round the primary button; it measured 0px.
- Don't use yellow text on white; the yellow text in the capture appears only on blue.
- Don't treat third-party payment logos as brand color sources.

## Responsive Behavior

Measured at 390px: the h1 is 30px with line-height 42.8571px and a rendered width of 330px (desktop: 50px). Nothing else from the mobile pass was recorded for this site, so navigation collapse, card stacking, banner behavior and touch target sizes are not measured.

## Iteration Guide

1. Start from `{colors.canvas}`, `{colors.ink}` and `{typography.body}`.
2. Add one `{colors.primary}` button per section using `button-primary`.
3. Use `{colors.brand-blue}` for bands and footers with white text.
4. Use `{typography.display}` only for section titles on blue.
5. When adding a color, measure it from the live site first; #e2ddd6 is an example of a measured value whose role is still unknown.
6. Re-run `node web/scripts/verify-designs.mjs --slug=next-capital` after every edit.
