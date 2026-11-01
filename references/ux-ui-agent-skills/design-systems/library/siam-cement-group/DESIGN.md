---
version: alpha
name: SCG (Siam Cement Group)
category: "Thai Brands"
description: "SCG (Siam Cement Group, scg.com/en): Thai industrial conglomerate site in the custom SCG typeface (700 headings at 32px/43.2px), SCG red #da291c pill buttons 42px tall, near-white canvas #fcfcfd, navy-slate ink #101828, green #079455 stat cards with a 50px bottom-left radius, and a #252a36 footer."
colors:
  canvas: "#fcfcfd"
  page-largest: "#ededed"
  ink: "#000000"
  primary: "#da291c"
  on-primary: "#ffffff"
  surface-blue-tint: "#f3f5fb"
  surface-blue-tint-light: "#f7f8fc"
  ink-slate: "#101828"
  ink-grey: "#66747e"
  ink-green: "#079455"
  hairline: "#d0d0ce"
  footer-bg: "#252a36"
typography:
  display:
    fontFamily: SCG
    fontSize: 16.8px
    fontWeight: 700
    lineHeight: 28.8px
  display-mobile:
    fontFamily: SCG
    fontSize: 16px
    fontWeight: 300
    lineHeight: 27.2px
  heading:
    fontFamily: SCG
    fontSize: 32px
    fontWeight: 700
    lineHeight: 43.2px
  body:
    fontFamily: SCG
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
  nav:
    fontFamily: SCG
    fontSize: 15.2px
    fontWeight: 400
    lineHeight: 28.8px
  input:
    fontFamily: SCG
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 6px
  sm: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 8px 10px
    height: 42px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 42px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 10px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 10px
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-slate}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 6px 120px 6px 50px
    height: 55px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(160, 171, 170, 0.1) 2px 2px 2px 0px
  card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink-green}"
    padding: 24px 20px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 12px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
---

## Overview

SCG (https://www.scg.com/en/, page title "SCG Inclusive Green Growth โตด้วยกรีน โตด้วยกัน", meaning "growing green, growing together") is the corporate site of Siam Cement Group, a Thai industrial group whose businesses on the page are Cement-Building Materials, Chemicals, SCGP, Cleanergy, Decor and JWD. The measured document language is Thai (`lang="th"`) with English subheadings, so most visible copy is in Thai. A thin top bar shows the country switcher (Thailand, with Vietnam and Indonesia), the SCC share price, "ร่วมงานกับเอสซีจี" (Careers), "ติดต่อเรา" (Contact) and EN. The main header has the red SCG hexagon logo and menus: รู้จักเอสซีจี (About SCG), ธุรกิจเอสซีจี (SCG Business), การพัฒนาอย่างยั่งยืน (Sustainability), นักลงทุนสัมพันธ์ (Investor Relations), ข่าวและความเคลื่อนไหว (News & Updates) and a search icon.

The hero is a rotating full-bleed banner; the capture shows a futuristic train labelled "SCG FUTURE EXPRESS" in a glass city with the line "RESERVE YOUR SEAT TO THE FUTURE" and a blue strip of Thai text. Beneath it, "SCG Highlights" holds three horizontal news cards with a photograph, a bold Thai headline, a grey summary and a circular arrow button; a "Latest News" section, Feature Stories, a business-unit card grid, a performance band with large green figures (for example 255,757 million baht from SCG Green Choice products, 67% target share, 400+ subsidiaries and associates), Key Reports and a dark footer with the head-office address.

In the capture, content fades in on scroll: several blocks are partly transparent at the time of capture. The copy voice is corporate and aspirational, built around green growth, sustainability and inclusion.

## Colors

- **Canvas #fcfcfd.** The body background and header.
- **Layered section backgrounds.** #ededed (the largest area, 1,502 weight), #f3f5fb (1,335), #f7f8fc (1,094), #fbfbfe (783) and #ffffff (559). The pale blue-grey tints (#f3f5fb, #f7f8fc) alternate behind sections and card rows.
- **Primary SCG red #da291c.** Search and "ดูทั้งหมด" (View all) button fills; it matches `--bs-primary: #da291c` in the page's Bootstrap variable layer. Text on it is #ffffff.
- **Ink black #000000.** Navigation and most text (1,683 characters).
- **Ink slate #101828.** Headings, card text and the body colour variable `--bs-body-color` (488 characters). The h2 "Latest News" is #101828.
- **Grey #66747e.** Secondary text (220 characters) and a border colour (7 uses).
- **Green #079455.** Large statistics (27 characters) and `--bs-success`. Named `ink-green`.
- **Footer #252a36.** The footer background (569 area weight) with #fcfcfd text.
- **Borders.** #d0d0ce (18 uses), #d8dcdc (7), #66747e (7), #dcdcdb (6), #000000 (6).
- **Other Bootstrap-layer values published by the site.** `--bs-secondary: #971b2f` (dark red) and `--bs-danger: #d61c32`. The rest of the Bootstrap variables (`#ffc107`, `#fd7e14`, `#0a47ed` and similar) are framework defaults and are not used as brand colours.

## Typography

One family: **SCG**, a custom Thai and Latin typeface loaded in weights 300, 400 and 700 (the stylesheet also references the older faces scglight, scgbold and scgregular, plus Sarabun and Glyphicons). All 3,268 measured characters are in SCG. The face is proprietary; Sarabun, declared in the stylesheet, is the open-source Thai alternative the site itself lists.

- **Heading (h2):** SCG 32px / 43.2px, weight 700 ("Latest News").
- **Display (as detected):** SCG 16.8px / 28.8px, weight 700. The extractor's h1 resolved to the first main-nav link, so this token reflects the large navigation label, not a hero headline; the hero text in the capture is an image or banner content.
- **Body (as detected):** SCG 16px / 22.4px, weight 700 (card titles and the news summaries).
- **Nav:** SCG 15.2px / 28.8px, weight 400.
- **Input:** SCG 16px / 24px, weight 400.
- **Statistic figures:** 40px, weight 700, in #079455.

Sizes by character count: 16px (1,296), 20px (922), 15.2px (514), 18px (286), 16.8px (83), 40px (59), 32px (40), 14.4px (36). Weights: 700 (1,315), 400 (1,053), 500 (602), 300 (298). No letter spacing was recorded.

## Layout

The page is 1,280px wide and 5,745px tall. A 100px-tall header contains a top utility strip and the main menu row; content below sits in a centered container with bands of tinted background colours. News cards are wide horizontal rows (image left, text right, arrow button at the end). Statistic cards measure 203px to 204px wide and 406px tall with padding 24px 20px. Paddings measured: 15px (66 uses), 8px (36), 24px (31), 6px (24), 5px (23), 3px (19), 32px (11), 16px (10). No grid gap was measured. The footer is 445px tall on #252a36.

## Elevation & Depth

Measured shadows: `rgba(0, 0, 0, 0.1) 0px 4px 12px 0px` (5 elements, the statistic cards), `rgba(0, 0, 0, 0.2) 0px 5px 10px 0px` (1) and `rgba(160, 171, 170, 0.1) 2px 2px 2px 0px` on the search input. The header and image cards are otherwise flat with 1px #d0d0ce borders. The stylesheet's Bootstrap shadows (`0 3px 10px 0 rgba(0, 0, 0, 0.1)` and inset form shadows) come from the framework layer.

## Shapes

Measured radii: 50px (17 uses, the search button and input), 100% (17, circular arrow buttons), `0px 0px 0px 50px` (5, the statistic cards with only the bottom-left corner rounded), 6px (2) and 800px (2, the pill "ดูทั้งหมด" button). The tokens keep xs 6px, sm 50px and pill 9999px. The bottom-left rounded corner on the stat cards is the distinctive SCG shape.

## Components

- **Search button.** #da291c fill, #ffffff text, SCG 16px weight 700, 50px radius, padding 8px 10px, 42px by 100px.
- **View-all pill.** #da291c fill, 1px solid #da291c border, 800px radius, padding 8px 16px, 42px by 117px; an outlined white variant (1px solid #ffffff, 145px wide) is used on dark photography.
- **Search input.** #ffffff, #101828 text, 1px solid #d0d0ce border, 50px radius, padding 6px 120px 6px 50px, 55px tall and 730px wide, with a faint shadow.
- **Navigation.** #fcfcfd, #000000 SCG 15.2px links with 0px 10px padding.
- **Statistic card.** White, #079455 40px figure and #101828 caption, `0px 0px 0px 50px` radius, shadow 0px 4px 12px, 24px 20px padding.
- **News card.** Image left, bold SCG headline, grey summary, circular arrow button.
- **Footer.** #252a36 background, #fcfcfd text, 445px tall.

## Design System Architecture

No public brand guideline, design system or logo usage page is linked on the page (the fetch found only the header logo file). No search was run. The shipped CSS is a Bootstrap 5 build with brand overrides in the variable layer: `--bs-primary: #da291c`, `--bs-secondary: #971b2f`, `--bs-danger: #d61c32`, `--bs-success: #079455`, `--bs-body-color: #101828`, `--bs-body-bg: #fff`, with the SCG typeface supplying the identity. Swiper icons and icon fonts are also loaded.

## Do's and Don'ts

- Do use SCG red #da291c for primary actions in pill or 50px-rounded shapes.
- Do use #101828 for headings and body, #66747e for secondary text, and #079455 for green statistics.
- Do round only the bottom-left corner (50px) of the statistic cards.
- Do alternate pale tinted bands (#f3f5fb, #f7f8fc) behind card rows.
- Don't use Bootstrap defaults (#0d6efd, #ffc107, #0a47ed) as brand colours.
- Don't use heavy shadows; the strongest measured is 0px 5px 10px at 0.2 alpha.
- Don't treat fade-in transparency in the capture as a colour.

## Responsive Behavior

The mobile pass measured: the "ดูทั้งหมด" button unchanged at 16px, 42px by 117px, #da291c, 800px radius; the h2 "SCG Highlights" at 24.71px / 33.3585px weight 700; the extracted h1 link at 16px weight 300; a 390px-wide nav; and sizes by characters 16px (1,070), 18.4px (653), 14.4px (484), 17px (286), 17.6px (247), 13.6px (220). Menu collapse and column stacking were not measured.

## Iteration Guide

1. Near-white canvas (#fcfcfd) with pale blue-grey bands; text in #101828 and #000000.
2. SCG typeface at 700 for headings (32px/43.2px) and card titles; 400 for nav.
3. Red #da291c pill buttons, 42px tall, white 16px bold label.
4. Green #079455 for large figures in white cards with a bottom-left 50px radius.
5. Dark #252a36 footer.
6. Run `node web/scripts/verify-designs.mjs --slug=siam-cement-group` after edits.
