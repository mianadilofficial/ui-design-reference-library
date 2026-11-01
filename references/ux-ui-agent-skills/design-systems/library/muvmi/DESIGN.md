---
version: alpha
name: "MuvMi"
category: "Thai Brands"
description: "MuvMi (muvmi.co), a Thai electric tuk-tuk ride-pooling service, measured live: the FC-Iconic Thai typeface at 400 and 700, a saturated blue #0d57e2 header and buttons, a pale blue #0d57e21a tint behind the hero, near-black #111827 text, square buttons and 8px image corners."
colors:
  canvas: "#ffffff"
  ink: "#111827"
  primary: "#0d57e2"
  on-primary: "#ffffff"
  surface-2: "#6d7280"
  surface-tint: "#0d57e21a"
  ink-5: "#000000"
  ink-6: "#717171"
typography:
  display:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 60px
    fontWeight: 700
    lineHeight: 75px
  display-mobile:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 37.5px
  heading:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 48px
  subheading:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 17.28px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 17.28px
    fontWeight: 400
    lineHeight: 25.92px
  button:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14.4px
    fontWeight: 700
    lineHeight: 21.6px
  nav:
    fontFamily: >-
      FC-Iconic, Nunito, Opun-Mai, "Noto Sans Thai", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 8px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 46px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-5}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

# MuvMi

## Overview

MuvMi is a Thai ride-pooling platform that runs electric tuk-tuks. The measured page is https://muvmi.co/ (queued as www.muvmi.co), a Thai-language home page whose document title is "Your local ride pooling - MuvMi" and whose `lang` attribute is "th". At 1280px width the page is 3,158px tall. A solid blue header bar carries a white lowercase "muvmi" wordmark, a menu icon at the left and, at the right, the links "ร่วมงานกับเรา" (join us), "สมัครเป็นพนักงานขับรถ" (apply as a driver), "คำถามที่พบบ่อย" (FAQ) and an "English" language switch with a globe icon.

The hero is set on a pale blue field. Its Thai headline, "แอปเรียกรถตุ๊กตุ๊กไฟฟ้า เรียกง่าย นั่งสบาย ปลอดภัย" (an app to call electric tuk-tuks: easy, comfortable, safe), is set in large bold blue type. Beneath it is a three-tile mosaic of photographs. The largest tile shows smiling travellers in a tuk-tuk under the caption "ฉันเป็นนักท่องเที่ยว" (I am a tourist) with a blue "Explore" button; the upper right tile shows a line of red and blue tuk-tuks under "ผู้ใช้งานรายวัน" (daily users), also with "Explore"; the lower right tile is a solid blue panel reading "เรียกรถแดงเชียงใหม่" (call the Chiang Mai red truck) with a white "ดูเพิ่มเติม" (see more) button spanning its width.

Below are five service columns with photographs and bold English names (Shuttle Service, Tuk Tuk Chartered for MICE & Event, Advertisement, Fleet Management Systems, Rental Tuk Tuks) with short Thai descriptions; an introduction block headed "MuvMi" and "Introduction" next to a photograph carousel; a pale blue statistics band with line-drawn tuk-tuk icons and the figures "30Mn+", "1,000+" and "800+" (passengers, drivers and vehicles in Thai); and an FAQ heading "คำถามที่พบบ่อย" beside blue line illustrations. Photography is warm and documentary, with real riders and vehicles, and the voice is friendly and practical. The brand also mixes English labels and Thai copy in one layout.

## Colors

The identity is one strong blue on white. #0d57e2 (`primary`) is the fill of the header bar, the "Explore" buttons and the lower-right promo tile; it is also the headline color (154 characters) and the color of the "ดูเพิ่มเติม" link text. A 10% tint of the same blue, #0d57e21a (`surface-tint`), is the largest measured background (area weight 1,523) and fills the hero and the statistics band. White #ffffff (`canvas`) is the base page color and the label color on blue.

Reading text is a deep slate, #111827 (`ink`), measured on 829 characters and used for body copy, service names and the footer. A medium grey, #6d7280 (`surface-2`), is the color of the statistic labels and captions (255 characters as text; area weight 483 as a background). Black #000000 (`ink-5`) and a neutral grey #717171 (`ink-6`) are minor text colors. A near-black #1e1e1e appears as a background at weight 61, which the capture does not tie to a visible block.

Hover on the header links changes white to a pale blue, rgb(191, 219, 254), which is the value measured on the three menu links. The `--tw-ring-color` (rgb(59 130 246 / .5)) and the Swiper color #007aff in the root variables are framework defaults and not brand colors.

## Typography

The page is set in "FC-Iconic", a Thai display and text face loaded at weights 400 and 700, which accounts for 1,581 measured characters. The declared stack continues with Nunito, Opun-Mai, "Noto Sans Thai" and then the system UI stack, with FC-Iconic as the first family. Weights are 400 (1,079 characters), 700 (488) and 600 (14).

Measured roles:
- `display`: 60px, weight 700, line-height 75px (the hero headline).
- `display-mobile`: 30px, weight 700, line-height 37.5px.
- `heading`: 48px, weight 700, line-height 48px.
- `subheading`: 17.28px, weight 700, line-height 28px (service names and "Introduction").
- `body`: 17.28px, weight 400, line-height 25.92px.
- `button`: 14.4px, weight 700, line-height 21.6px.
- `nav`: 16px, weight 400, line-height 24px.

Sizes by character count are 17.28px (901), 14.4px (335), 16px (171), 60px (64), 36px (38) and 48px (35), then 18px and 20px. Display text is bold and large with a 1.25 line-height ratio; the base text is an unusually specific 17.28px (1.08rem at a 16px root). Letter-spacing is not set. Headlines are blue and bold; supporting copy is slate and regular.

## Layout

The page is a sequence of horizontal bands inside a wide, mostly edge-to-edge container. The header is full width with its items at the page edges. The hero mosaic is a two-column arrangement, with the large tile at the left and two stacked tiles at the right, separated by narrow gutters. The services row is five equal columns, each with a landscape photograph over a centred title and description. The introduction is a two-column band, text at left and a photograph carousel with dots at right. The statistics band is a three-column row of icon, large figure and label.

Gaps measured are 16px (15), 8px (11), 12px and 4px (4 each), and 24px, 48px, 20px and 36px (2 each). Paddings by weight are 16px (12), 8px (7), 12px (6), 64px, 48px and 32px (4 each) and 56px (3). The spacing tokens list 2, 4, 6, 8, 12, 16, 20, 24, 28 and 32px. The overall density is medium, with tight gutters around the mosaic and generous padding around the statistics and FAQ bands.

## Elevation & Depth

There is no elevation. No box shadows and no border colors were measured on the page; the root `--tw-shadow` and ring variables are all zero. Separation comes from background change (white, pale blue, solid blue) and from photographic tiles. Text over photographs (the white captions "ฉันเป็นนักท่องเที่ยว" and "ผู้ใช้งานรายวัน") relies on image content rather than an overlay value that was measured.

## Shapes

Shapes are flat and mostly square for controls, with small rounding on images. The measured radii are 8px (14 elements) and 6px (three). The "Explore" and "ดูเพิ่มเติม" buttons and the header bar compute a 0px radius (`rounded.none`), while the capture shows small rounding on the photographic tiles and the white wide button, which agree with the measured 8px (`rounded.sm`) and 6px (`rounded.xs`) values. There are no pills or circles in the measured radii.

## Components

**Primary button** (`button-primary`): solid #0d57e2, white label at 14.4px weight 700 (`button`), height 46px, 0px radius. In the capture "Explore" is a compact blue rectangle placed in the bottom-left of each photo tile.

**Link** (`link`): on a white background, blue (#0d57e2) 14.4px weight 700 text. The white full-width "ดูเพิ่มเติม" button inside the blue promo tile uses this style.

**Navigation** (`nav`, `nav-link`): the header bar is #0d57e2 with white bold labels at 17.28px weight 700; the generic navigation link role measured 16px weight 400 in black. Hover turns the white labels pale blue.

**Service column**: a landscape photograph with rounded corners, a bold centred title at 17.28px and a grey Thai description.

**Statistic block**: a blue line-drawn tuk-tuk icon, a large grey figure ("30Mn+", "1,000+", "800+") and a grey label.

**Footer** (`footer`): white background, #111827 text at 16px weight 700; the first links are "ธุรกิจองค์กร" (corporate), "บริการรถรับส่ง" (shuttle service), "โฆษณา" (advertising) and "เช่ารถ" (rental).

A previous generated card token (white text on #6d7280) was dropped because no card with that fill was identified in the capture.

## Design System Architecture

No public MuvMi design system or brand-guideline page was found linked from the home page, and none was opened for this document. The measured root variables are the Tailwind utility-framework defaults (`--tw-ring-offset-shadow`, `--tw-ring-color`, `--tw-shadow`) plus a Swiper carousel setting (`--swiper-navigation-size: 44px`), so the site is built from utility classes and brand values are applied in markup rather than as named tokens. The loaded fonts are Nunito (400), Noto Sans Thai (100 to 900), Opun-Mai (400) and FC-Iconic (400 and 700). Source reviewed: https://muvmi.co/ only.

## Do's and Don'ts

Do use the single blue #0d57e2 for the header, buttons, promo tiles and display headlines, on white or on the 10% tint #0d57e21a.

Do set Thai text in FC-Iconic with 700 for headlines and 400 for body at 17.28px.

Do keep control shapes square and image corners lightly rounded (6px to 8px).

Do use warm, documentary photographs of riders and vehicles, with white bold captions in the mosaic.

Don't add shadows or borders; the measured page uses neither.

Don't use the Tailwind ring blue or the Swiper #007aff as brand colors.

Don't introduce a second accent color; the capture uses blue, white, slate and grey only.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the hero headline is 30px, weight 700, line-height 37.5px, in #0d57e2 (width 374px); the "ฉันเป็นนักท่องเที่ยว" heading is 30px, weight 700, white; paragraph text is 17.28px, weight 400, line-height 25.92px, in #111827; and the "Explore" button remains #0d57e2 with a white 14.4px weight 700 label at 116px width. Character counts by size on mobile are led by 17.28px (1,019), 14.4px (162) and 18px (150). Breakpoints, the column behavior of the mosaic and service row, and the header form on mobile were not measured.

## Iteration Guide

1. Start from `canvas` #ffffff, `surface-tint` #0d57e21a, `primary` #0d57e2, `ink` #111827 and `surface-2` #6d7280.
2. Use FC-Iconic (fallbacks Nunito, Noto Sans Thai); 60px/700 headlines, 17.28px/400 body, 14.4px/700 buttons.
3. Build the order: blue header, tinted hero with headline, three-tile photo mosaic, five service columns, introduction with carousel, statistics band, FAQ, white footer.
4. Keep buttons square, photos at 6px to 8px radius and drop shadows.
5. Run `node web/scripts/verify-designs.mjs --slug=muvmi` after edits.
6. Leave out anything not in the frontmatter or `web/data/extracted/muvmi.json`.
