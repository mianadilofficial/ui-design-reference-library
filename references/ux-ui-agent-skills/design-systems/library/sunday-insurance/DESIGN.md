---
version: alpha
name: Sunday Insurance
category: "Thai Brands"
description: "Sunday Insurance Thai homepage: warm orange (#fa4616) brand on a #f7f7f7 and white page, charcoal ink (#2a2c2e) with gray running text (#76777a), a custom Thai-capable sans in 60px bold hero headings, 16px-radius cards with #e8e8e6 hairlines, pill controls at 100px radius and a sunset family-photo hero."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#2a2c2e"
  primary: "#fa4616"
  surface-3: "#00294d"
  ink-secondary: "#76777a"
  ink-3: "#54565a"
  ink-6: "#575756"
  hairline: "#e8e8e6"
  button-secondary-border: "#edeae4"
typography:
  display:
    fontFamily: font-without-head-sc
    fontSize: 60px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: font-without-head-sc
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40.8px
  heading:
    fontFamily: font-without-head-sc
    fontSize: 26px
    fontWeight: 700
    lineHeight: 33.8px
  nav:
    fontFamily: font-with-head-sc
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.001px
  button-secondary:
    fontFamily: font-with-head-sc
    fontSize: 21px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 16px
  md: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 46px
  s10: 48px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 4px 12px
    height: 32px
    borderColor: "{colors.button-secondary-border}"
    boxShadow: rgba(0, 0, 0, 0.016) 0px 2px 0px 0px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
---

# Sunday Insurance — Design System Notes

## Overview
Measured URL: https://sundayinsurance.co.th/ , which redirected to https://sundayinsurance.co.th/th/ (title "Sunday Insurance", language th). Sunday presents itself, in the hero copy, as a member of an "Insurtech" group of companies that leads Southeast Asia in insurance and technology, with the promise "ซันเดย์ อินชัวร์เทค ทำชีวิตให้ง่าย ในราคาที่ใช่" (Sunday InsurTech, making life easy at the right price). The white header carries the orange "sunday" script wordmark with a swoosh underline at left and the menu "ซื้อประกันออนไลน์" (buy insurance online), "ผลิตภัณฑ์" (products), "เกี่ยวกับเรา" (about us), "บริการ" (services), "คำถามที่พบบ่อย" (FAQ) and "ติดต่อเรา" (contact us), with chevrons on those that open submenus, and a rounded "ไทย" language selector with a flag at the far right.

The page is a modern consumer-tech landing page. A tall hero photograph shows a silhouetted family at sunset in warm orange-brown tones, with centered white headings in a heavy rounded sans, a subtitle and a short paragraph. Below, "เสียงตอบรับจากลูกค้า" (customer feedback) is a large left-aligned heading with two circular outline arrow buttons, followed by a horizontal carousel of vertical video thumbnails of real customers (one expanded to show the quote beside the portrait) and a pagination row in which the active dot is an elongated orange bar. A two-column band, gray on the left with the heading "ดาวน์โหลดซูเปอร์แอปฯ เพื่อสัมผัสประสบการณ์ การให้บริการแบบอินชัวร์เทคได้แล้ววันนี้" and App Store and Google Play badges, shows a phone mockup on the right. The last visible section, "เรื่องราวดีๆ จากนักเล่าเรื่องชาวซันเดย์" (good stories from Sunday storytellers), lists four blog cards with illustrated flat-art covers in the brand's red-orange, tag labels in orange ("รู้ทันประกันรถยนต์", "สาระรถยนต์ไฟฟ้า"), bold titles and gray excerpts. According to the fetched text, the page also lists investor logos (Vertex Venture, Vertex Growth, Quona and SCB 10X) lower down; they were not in the opened part of the page capture.

A cookie-policy container was hidden by the extractor and is not documented as brand UI.

## Colors
- **Canvas `#ffffff`** (area-weight 2,254) and **`#f7f7f7`** (`page-largest`, 3,364, the largest area): the page alternates white sections with pale gray bands and card fills.
- **Ink `#2a2c2e`**: headings and strong text (1,096 characters). **`#76777a`** (`ink-secondary`) is the running-text color with by far the largest character count (38,785); **`#54565a`** (`ink-3`, 667) and **`#575756`** (`ink-6`, 35) are secondary grays.
- **Primary orange-red `#fa4616`**: the brand accent (78 characters of text: tag labels, card category lines, the active pagination bar and the logo).
- **Navy `#00294d` (`surface-3`)**: a dark fill with area-weight 1,971, the third largest in the area list; its place in the layout is below the area shown in the capture.
- **Hairline `#e8e8e6`** and **`#edeae4`**: border colors for cards and the pill selector.

## Typography
Two custom font files carry nearly everything: **font-with-head-sc** (400 and 700; 40,674 characters) and **font-without-head-sc** (700; 366 characters). The meaning of the file names is not documented in the opened sources. No Latin fallback stack was captured in the family values.

- `display`: font-without-head-sc, 60px / 72px, weight 700 (the white hero heading).
- `display-mobile`: 34px / 40.8px, weight 700 at 390px.
- `heading`: font-without-head-sc, 26px / 33.8px, weight 700 (the hero subtitle).
- `nav`: font-with-head-sc, 14px / 22.001px, weight 400.
- `button-secondary`: font-with-head-sc, 21px / 24px, weight 700.

These are custom self-hosted files; if they are unavailable use IBM Plex Sans Thai Looped or Noto Sans Thai at similar sizes.

## Layout
Width 1280px, height 3797px. The hero is full-bleed; section headings alternate between left-aligned (feedback, with arrows at right) and centered (stories). The carousel breaks out of the 1,200px column and bleeds off both edges. The app band is a half-and-half split. The blog grid is four equal cards. White and `#f7f7f7` bands alternate, creating rhythm without borders. Spacing values sit in the generated scale; pill controls use `4px 12px` padding.

## Elevation & Depth
Flat. The only measured shadow is `rgba(0, 0, 0, 0.016) 0px 2px 0px 0px` (2 uses), a nearly invisible bottom edge on the pill selector. Cards are separated from the page by a `#e8e8e6` hairline and a one-step lighter fill, not by blur.

## Shapes
Rounded corners define the system: 16px (59 uses: cards, thumbnails and tiles), 5px (9), 50% (5: circular arrow buttons), `16px 16px 0px 0px` (4: card image tops) and 100px (2: pills). Tokens: `xs` 5px, `sm` 16px, `md` 100px, `pill`. Cards use `sm`; the language selector uses `md`.

## Components
- **button-secondary**: white fill, `#2a2c2e` text in 21px bold, `#edeae4` border, 100px radius, `4px 12px` padding, 32px tall; it is a measured pill with the faint 2px shadow. The pill-shaped TH selector at the top right is the visible control of this shape.
- **card**: `#f7f7f7` fill, `#2a2c2e` text, 16px radius, `#e8e8e6` hairline.
- **nav**: white with `#2a2c2e` text; **nav-link**: 14px regular.
- **Pagination**: small gray dots with one longer orange active bar.
- **Store badges**: black App Store and Google Play badges.
- **Round arrow buttons**: 50% radius, outlined.

## Design System Architecture
No public design system exists as far as the opened source (https://sundayinsurance.co.th/th/) shows: the fetched page lists navigation, hero, testimonials, app download, blog and investor sections but no brand-guideline or design-token link, so no search was run. The page's CSS modules use component-scoped class names (the hidden cookie container is recorded as `CookiePolicy_container__mNeAY`), and the two Thai font files are named in the loaded-font list.

## Do's and Don'ts
- Do pair charcoal `#2a2c2e` headings with warm orange `#fa4616` accents on white and `#f7f7f7`.
- Do round cards at 16px and controls at 100px.
- Do show real customers in portrait video cards and warm sunset photography in hero spaces.
- Don't add deep shadows or gradients to cards.
- Don't use more than one orange accent per card (a tag line and a small bar).
- Don't treat the cookie container as brand UI.

## Responsive Behavior
The mobile measurement at 390px reduces the hero display type from 60px to 34px, with a line height of 40.8px. Other breakpoints, the stacking of the two-column app band and the carousel behavior on touch were not measured.

## Iteration Guide
1. Use `#ffffff` and `#f7f7f7` bands, `#2a2c2e` headings and `#76777a` text.
2. Reserve `#fa4616` for tags, active states and the logo.
3. Build cards with 16px radius, hairline border and flat-art or portrait imagery.
4. Use pill selectors at 100px radius with a pale border.
5. Open the page with a warm lifestyle photograph and centered white 60px bold headline.

## Content and Voice
Sunday writes in a casual, reassuring Thai that treats insurance as a lifestyle service. The hero line "ทำชีวิตให้ง่าย ในราคาที่ใช่" (make life easy, at the right price) is plain and benefit-first; the paragraph under it adds that the group combines insurance and technology so that insurance becomes easy to understand and anyone can reach it, with plans matched to each person's risks. Section headings are conversational ("เรื่องราวดีๆ จากนักเล่าเรื่องชาวซันเดย์", good stories from our storytellers) and blog cards use small orange kicker labels ("รู้ทันประกันรถยนต์", know your car insurance) above long question-style titles. Testimonials are shown as real customers' names and short quotes beside their video portraits, which supports the human, non-corporate tone. The page offers the super app with the store badges as its main action rather than a conventional buy button.
