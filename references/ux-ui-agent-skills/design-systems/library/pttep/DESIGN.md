---
version: alpha
name: PTTEP (PTT Exploration and Production)
category: "Thai Brands"
description: "PTTEP's English home page (pttep.com/en/home) is set in Inter with Noto Sans Thai at light 300 weight (19px body, 44px display on #474747 ink), with a cyan accent (#009fda), pale blue bands (#f3faff, #ccecf8), 8-10px rounded outlined buttons and no box shadows."
colors:
  canvas: "#ffffff"
  ink: "#474747"
  primary: "#009fda"
  on-primary: "#ffffff"
  surface-sky: "#f3faff"
  surface-sky-deep: "#ccecf8"
  price-up: "#7ab800"
  hairline: "#e0e0e0"
  button-primary-bg: "#ffffff1a"
  link-border: "#99d9f0"
typography:
  display:
    fontFamily: Inter, "Noto sans Thai", sans-serif
    fontSize: 44px
    fontWeight: 300
    lineHeight: 55px
  heading:
    fontFamily: Inter, "Noto sans Thai", sans-serif
    fontSize: 33px
    fontWeight: 600
    lineHeight: 41.25px
  subheading:
    fontFamily: Inter, "Noto sans Thai", sans-serif
    fontSize: 23px
    fontWeight: 600
    lineHeight: 28.75px
  body:
    fontFamily: Inter, "Noto sans Thai", sans-serif
    fontSize: 19px
    fontWeight: 300
    lineHeight: 28.5px
  button:
    fontFamily: Inter, "Noto sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: Inter, Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
rounded:
  xs: 5px
  sm: 8px
  md: 10px
  lg: 15px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 15px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 58px
    borderColor: "{colors.hairline}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    borderColor: "{colors.link-border}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 32px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

## Overview
Measured from the English home page of PTT Exploration and Production Public Company Limited, "PTTEP" (https://www.pttep.com/en, resolved to /en/home; document title "PTTEP"). The bare /en URL is a language entry; the measured page is the real home page (scrollHeight 5432px). The opened page's navigation lists Our Company (overview, governance, leadership, net zero, technology), Sustainability (links to a separate site), News & Media, Investor and Career, with a language switch EN / ไทย. The headline of the page is "Energy Partner of Choice", with the words "of Choice" in lime green. 

The capture opens on a full-bleed solar-farm and drone photograph with a vertical "EP" mark, followed by a pale blue band with the headline and a paragraph ("PTTEP conducts business in petroleum exploration, development, and production..."), a "Company Overview" bordered link, a rounded offshore-platform video with a white play button, an "Investor Overview" block with a Stock Quote card (SET: PTTEP, 148.00 THB, change -0.50 (-0.34%)) and a deep-teal "Latest Document" card with three bordered links (SET Announcement, Financial Highlights, Resource Center), each ending in a cyan circular arrow. The footer is white with a 1px #e0e0e0 border and a subscribe prompt. The voice is formal, measured and focused on energy security and sustainability.

## Colors
Backgrounds by area: `canvas` #ffffff (3997), `surface-sky` #f3faff (2105), `surface-sky-deep` #ccecf8 (1988), a 10% white overlay #ffffff1a (533, `button-primary-bg`, buttons over photography), deep teal #0077a4 (147, the Latest Document card) and `primary` #009fda (11).

Text colors by characters: white #ffffff (1681, over photography and the teal card), `ink` #474747 (1606), cyan #009fda (55, "PTTEP" ticker symbol and links on hover), and `price-up` #7ab800 (29, the stock price and "of Choice"). The site's root variables confirm `--price-up: #7AB800` and `--price-down: #F94848`; only the up color is measured on the page. Border colors: `hairline` #e0e0e0 (15 uses), `link-border` #99d9f0 (6), #009fda (5), #ffffff (2).

`primary` is #009fda because it is the accent on active text, hover borders and arrow chips; the extractor's detected CTA is the "Explore More" button, a 10% white fill with white text on the dark card, so `button-primary-bg` carries that value. Bootstrap defaults in the root variables (`--primary: #007bff`, `--success`, `--danger`) and the Swiper blue #007aff are framework defaults and are not used.

## Typography
One family: Inter (3371 chars; a variable file covering weights 100-900) with "Noto Sans Thai" (variable 100-900) as the Thai fallback; navigation links list `Inter, Sarabun`. Icon fonts Font Awesome 6 Pro and icomoon are also loaded.

Roles measured on desktop: `display` 44px/55px weight 300 ("Energy Partner"), `heading` 33px/41.25px weight 600 ("Investor Overview"), `subheading` 23px/28.75px weight 600 ("Stock Quote"), `body` 19px/28.5px weight 300, `button` and `nav` 16px/24px weight 300. Sizes by characters: 16px (1662), 14px (876, uppercase nav labels at weight 600), 19px (496), 33px (186), 28px (73), 23px (35), 44px (23), 48px (20, the stock numerals). Weights: 300 (2969 chars) and 600 (402). The light 300 weight on body copy is the defining texture. No letter-spacing is measured.

## Layout
The page alternates full-bleed photography with a 1110px-wide content column (the h2 measures 1110px wide) and a two-column split: headline left, paragraph and link right. The header is 100px high and white. Spacing from measured gaps: 8px (23 uses), 24px (9), 16px (5), 30px, 32px, 4px; paddings 16px, 24px (18 each), 15px (15), 20px, 32px, 96px, 40px, 48px. Breakpoints in CSS variables: sm 576px, md 768px, lg 992px, xl 1200px, xxl 1640px.

## Elevation & Depth
No box shadows are measured (the boxShadows list is empty). Depth comes from tonal bands (#ffffff, #f3faff, #ccecf8), 1px borders in #e0e0e0 and #99d9f0, and a photographic hero. The Latest Document card uses a #0077a4 fill with a contour-line texture in the capture.

## Shapes
Radii by weight: 50% (27, circular arrow chips and the play button), 10px (18, cards), 8px (17, buttons and link rows), 10px 10px 0 0 (4), 15px (1), and 5px 0 0 5px / 0 5px 5px 0 (language switch halves). Every container is gently rounded; the video frame is rounded and the arrow chips are circles.

## Components
- **button-primary**: "Explore More", #ffffff1a fill, white 16px/300 text, 8px radius, padding 16px 24px, height 58px, 1px #e0e0e0 border.
- **link** (outlined row such as "Company Overview"): white fill, #474747 text at body size, 8px radius, padding 16px 24px, 1px #99d9f0 border; on hover the text and border turn #009fda (measured hover pass).
- **nav**: 100px white header, 14px/600 uppercase labels, links #474747 at 16px/300.
- **card**: white, 8px radius, 32px padding (Stock Quote).
- **footer**: white with a 1px #e0e0e0 border, 513px high.

## Design System Architecture
No public design system exists on the opened pages: the homepage links to no brand guidelines, design system or press kit; its only logo reference is `/storage/logo.svg`, and the footer links Privacy Notice, Terms and Conditions and Sitemap. The shipped CSS exposes about 72 root variables, mostly Bootstrap defaults (`--primary: #007bff`, `--light`, `--dark`, grid breakpoints xs through xxl) plus PTTEP-specific `--price-up` and `--price-down`, `--hybrid-column-space: 15px` and Font Awesome tokens. The de-facto system therefore is Bootstrap-class layout with PTTEP's own cyan, light weights and 8-10px radii applied on top.

## Do's and Don'ts
- Do set text in Inter 300 at 19px for body and 600 for headings.
- Do alternate white, #f3faff and #ccecf8 bands.
- Do use the cyan #009fda for icons, active states and hover borders.
- Do outline links with 1px #99d9f0 and 8px radii.
- Don't add drop shadows: none are measured.
- Don't use Bootstrap's #007bff as the brand blue.

## Responsive Behavior
At the 390px mobile pass the body paragraph is 17.4813px/26.2219px weight 300 in a 342px column, and the "Company Overview" link is 342px wide, 66px high with 17.4813px text and the same 8px radius and 16px 24px padding. Mobile size frequencies lead with 16px (1662 chars), 14px (876), and 17.4813px (445). The language toggle halves keep their rounded edges. Menu behavior and column counts on mobile are not measured.

## Iteration Guide
1. Start with white and #f3faff bands, #474747 text at weight 300.
2. Use 8px radii for links and buttons, 10px for cards, circles for icon chips.
3. Accent with #009fda; use #7ab800 only for positive stock movement.
4. Avoid shadows; use 1px borders instead.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=pttep --url=https://www.pttep.com/en --force --no-motion` after changes.

## Imagery and Content Notes
Photography is industrial and technical rather than lifestyle: a drone above a solar array with a worker in a hard hat and orange vest in the hero, an aerial view of an offshore platform complex with a gas flare in the video frame, and a contour-line texture on the teal document card. The hero carries a large white vertical "EP" at the left edge in bold weight. Content blocks pair a light-weight sentence-case headline with a smaller paragraph, then a full-width outlined link row with a circular cyan chevron at its right end. Numeric content is shown large and in color: the stock price 148.00 in green with a small "THB" unit, the change value in the same green with parentheses for the percentage, and a small grey "Last Updated" line with date and time. Labels are short ("Stock Quote", "Latest Document", "SET Announcement", "Financial Highlights", "Resource Center"), and the page contains no marketing superlatives beyond the tagline "Energy Partner of Choice".
