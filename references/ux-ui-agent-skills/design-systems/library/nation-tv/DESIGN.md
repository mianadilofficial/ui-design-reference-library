---
version: alpha
name: Nation TV
category: "Thai Brands"
description: "Thai news channel site nationtv.tv: white canvas, Nation blue #0929c9 for headings, nav rule and links, red #e53935 for the popular-news column, GraphikTh and GraphikThBold at 18px/28px with Sarabun in the footer, radii from 4px to 30px, 1280px desktop."
colors:
  canvas: "#ffffff"
  ink: "#545454"
  primary: "#0929c9"
  surface-black: "#000000"
  ink-muted: "#6b6b6b"
  ink-navy: "#1f2a44"
  ink-subtle: "#9aa3b2"
  hairline: "#eef2f8"
  surface-soft: "#f5f8fc"
  accent-red: "#e53935"
typography:
  display:
    fontFamily: GraphikTh, sans-serif
    fontSize: 32px
    fontWeight: 700
  heading:
    fontFamily: GraphikThBold
    fontSize: 28px
    fontWeight: 500
  subheading:
    fontFamily: GraphikThBold
    fontSize: 28px
    fontWeight: 700
    lineHeight: 39.2px
  body:
    fontFamily: GraphikTh, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 12px
  xl: 15px
  2xl: 16px
  3xl: 20px
  4xl: 30px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 15px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

nationtv.tv is the news site of Nation TV (เนชั่นทีวี, operated by บริษัท เนชั่น ทีวี จำกัด according to the footer text). The measured page is 1280px wide and 10,036px tall, with `lang="th"` and 1,894 visible elements, so it is a long, dense editorial front page rather than a campaign page. The document title is "เกาะติดสถานการณ์ข่าว ข่าวด่วน ข่าววันนี้ เนชั่นทีวี | เนชั่นออนไลน์".

The look on the capture is a white newspaper-style portal: a centred blue NATION wordmark, a row of round social icons on the left and round search and account icons on the right, a single navigation row, and a content area split into a wide main column and a narrower right column. The main column opens with a large lead photograph with a bold Thai headline below it, followed by a pair of smaller photo stories and a "ดูทั้งหมด" (view all) link above a blue rule. Further down, topic sections such as "การเมือง" and "Exclusive" each start with a blue vertical bar and a blue bold title. The right column is headed "ข่าวยอดนิยม" in red and lists small thumbnails with two-line headlines separated by red rules.

Photography is the main imagery: press-conference portraits, handshakes, news photographs, each carrying a small NATION watermark in a corner. A paid-looking banner for an event (Nation Forum) sits above the header and a small dark cookie-consent box overlaps the content on the left; both are page furniture and ads rather than brand UI, and are not documented as tokens here.

Voice is headline-driven Thai news copy: quoted names, dashes, and truncated two-line summaries ending in an ellipsis. Section labels mix Thai and English ("Exclusive", "Business", "Nation Story", "Feature & Lifestyle").

## Colors

Measured text colors by character count: `#545454` (3,203), `#6b6b6b` (1,995), `#ffffff` (1,202), `#0929c9` (314), `#1f2a44` (104), `#9aa3b2` (87), `#5a5a5a`, `#535353`, `#aaaaaa`, `#e53935` (11), plus a few light greys. Background colors by area: `#ffffff` (1,698), a translucent white `#ffffffb8`, `#0929c9` (801), `#000000` (528), `#cbcbcb85`, `#353535`, `#f5f8fc`, `#c8c6c9`, then small amounts of `#e01728`, `#163f90`, `#fe5900`, `#00b22e`, `#6fd100`.

- **Canvas `#ffffff`** is the page background.
- **Ink `#545454`** is the dominant text color, used for headlines and h3 titles; **`#6b6b6b`** colours the summary paragraphs (the measured body text).
- **Nation blue `#0929c9`** is the brand action color. It colours the h2 "ข่าวล่าสุด", the link role, the active navigation fill, the 2px border on the video player, and the page's own `--primary-color` CSS variable. It is the generated `primary`.
- **Black `#000000`** appears as a large measured background area; it is the video player surface in the extraction's card role. Whether it is the footer fill was not measured.
- **Red `#e53935`** is measured as a text color (11 characters) and as a border color on 6 elements; on the capture it is the red used for the popular-news heading and the separators under each popular item.
- **`#1f2a44`** (dark navy) and **`#9aa3b2`** (grey-blue) are measured text colors; their exact placements were not isolated.
- **Hairline `#eef2f8`** is the most frequent border color (11 elements), with `#e7edf5` and `#e0e6ef` also measured.
- **`#f5f8fc`** is a measured pale blue-grey background.

The page's `:root` also defines `--newspaper: #0111c2`, `--lottery: #121a6b`, `--primary-color-new: #27398b`, `--quaternary-color: #3b6bb5` and `--main-color: red`, plus a Bootstrap-like `#0d6efd` as `--secondary-color`. Those variables exist in the CSS; where each is used was not measured, so they are not promoted to tokens. The UA-default link color `#0000ee` was measured on the header and h1 and is not a brand color.

On hover the popular-news list links keep `#545454` text and gain a `#fafafa` background (measured). Other hover states were not measured.

## Typography

Fonts loaded by the page, from the extraction: GraphikTh, GraphikThBold, Sarabun (300 and 400), Roboto 400 and ByteArkPlayer 400. By character count the families are GraphikTh (4,081), GraphikThBold (2,502), Sarabun (467), Segoe UI (51) and Arial (24). GraphikTh and GraphikThBold are the Thai-capable Graphik cuts used for the site's editorial text; Sarabun sets the footer (16px, weight 300, line height 23.2px, white). Roboto belongs to the embedded video player. No foundry page for GraphikTh was opened, so licensing is not stated.

Measured roles:

| Role | Family | Size | Weight | Line height |
| --- | --- | --- | --- | --- |
| display (h1, the logo link) | GraphikTh | 32px | 700 | normal |
| heading (h2 section title) | GraphikThBold | 28px | 500 | normal |
| subheading (h3 story title) | GraphikThBold | 28px | 700 | 39.2px |
| body (summary paragraph) | GraphikTh | 18px | 400 | 27px |

Sizes by character count: 18px (2,051), 16px (1,708), 20px (1,238), 22px (809), 28px (522), 13px, 18.6667px, 12px, 14px, 32px, 30px, 24px. Weights: 700 (2,852), 400 (2,478), 500 (559), 900 (529), 300, 600. One letter-spacing combination was recorded, 16px text at 1px. Titles are bold, set tight to the image above, and truncated to two lines; summaries are regular weight in the muted grey.

## Layout

Desktop width is 1280px. The header is a 50px-high block with 15px horizontal padding. Below it the content splits into a wide main column (the measured heading and paragraph widths are 820px) and a narrower right column for popular stories. Measured gaps cluster at 5px, 20px, 10px, 6px and 15px, with larger gaps of 16px, 24px, 25px, 40px and 50px. Measured paddings are mostly 10px (136 elements), 15px (71), 8px, 12px and 16px, with 30px and 20px less often. The h2 has 30px left padding where the blue bar sits.

Sections stack vertically: lead story, a two-up pair, "ดูทั้งหมด" with a blue rule, then topic sections each with a small header and a mixture of one wide image story plus a column of smaller image-and-text stories. The footer is 705px tall and 1280px wide.

## Elevation & Depth

Shadows are almost absent: one box shadow was measured, `rgba(25, 69, 136, 0.06) 0px 6px 22px 0px`, on three elements; it is a very soft blue-tinted lift. Separation otherwise comes from hairline borders (`#eef2f8`), coloured rules (blue under the nav and sections, red between popular items) and photographs. A translucent white `#ffffffb8` area was measured on 888 area units and a translucent dark `#212121e6` on 29, which correspond to overlays; the dark cookie box is a consent control and is not part of the system.

## Shapes

Measured radii and their frequency: 20px (11 elements), 12px (11), 10px (5), 8px (5), 50% (5), 4px (4), 15px (4), 16px (3), 50px (2), 30px (1), 2000px (1), plus single instances of `8px 8px 0px 0px` and `0px 0px 8px 8px`. The tokens keep the discrete pixel steps 4, 8, 10, 12, 15, 16, 20 and 30px; 50% and large values describe the round social and account icons. The card role (a video player) rounds at 30px with a 2px `#0929c9` border. The default image and text blocks are square-cornered.

## Components

- **Section header.** A 3 to 4px-wide blue vertical bar, then a Thai title in GraphikThBold 28px, weight 500, color `#0929c9` (the measured h2 and link role). The same pattern in red heads the popular-news column.
- **Navigation.** A single row under the wordmark with Thai and English labels, chevrons on items with dropdowns (ข่าว, Exclusive, Business, ชม TV ย้อนหลัง, Nation Story, Feature & Lifestyle), a filled blue active tab (หน้าแรก) and a blue rule beneath the row. Header padding is `0px 15px`.
- **Story card.** Photograph above, bold title (subheading), regular grey summary (body), no border and no radius on the measured text blocks.
- **Popular list item.** Small thumbnail left, two-line bold title with a one-line summary, a red rule below; hover adds a `#fafafa` background.
- **Video player.** Black surface `#000000`, 30px radius, 2px `#0929c9` border, "Play Video" label in Roboto 10px.
- **Icon buttons.** Round outlined search and account icons at the right, round filled social icons at the left; sizes were not measured.
- **Footer.** White text, Sarabun 16px at weight 300, company name and address lines.

There is no primary button on the page, so no `button` token is declared.

## Design System Architecture

No public design system or brand-guideline page for Nation TV was opened, and no research search was run because the homepage showed no such link in the capture. The de-facto system lives in the site's CSS: custom properties on `:root` (`--primary-color: #0929c9`, `--primary-color-new: #27398b`, `--newspaper: #0111c2`, `--lottery: #121a6b`, `--quaternary-color: #3b6bb5`, `--secondary-color: #0d6efd`, `--tertiary-color: #0d6efd`, `--main-color: red`, `--text-color: #fff`, `--shadow-color: rgba(1, 17, 194, 0.3)`, `--newspaper-hover: rgba(1, 17, 194, 0.5)`, `--base-font-size: 9`, `--font-size: 7`). The names hint at per-vertical themes (newspaper, lottery) but no proof of that was measured, so the variables are listed without interpretation. Fonts are self-hosted custom faces (GraphikTh, GraphikThBold) alongside Sarabun.

## Do's and Don'ts

Do:
- Use `#0929c9` for section titles, links and the nav rule, with a bar to the left of each section title.
- Set story titles in GraphikThBold 700 and summaries in GraphikTh 400 at 18px/27px in `#6b6b6b`.
- Use `#e53935` for the popular-news heading and its separators.
- Keep photographs dominant and carry the NATION watermark.
- Use the tokenised radii: 4, 8, 10, 12, 15, 16, 20, 30px.

Don't:
- Don't treat `#0000ee` as a brand color; it is the browser default link color measured on the logo link.
- Don't document the cookie box, the event banner or the video player chrome as brand UI.
- Don't add heavy shadows; the only measured one is 6% alpha.
- Don't introduce a primary button; none exists on the page.

## Responsive Behavior

Only the extraction's mobile pass was measured. On mobile the h1 stays 32px at weight 700 (250px wide, 40px high); the h2 drops to 26px at weight 500 (360px wide, 37px high); body text drops to 16px with a 24px line height (360px wide, 56px high). Mobile has no primary CTA. Breakpoints, nav collapse behavior and column stacking were not measured.

## Iteration Guide

1. Set the canvas to `#ffffff`, text to `#545454`, summaries to `#6b6b6b`, accents to `#0929c9` and `#e53935`.
2. Build story blocks from the four typography tokens before adding any new style.
3. Add section headers with the blue bar pattern; red variant for the popular list only.
4. Draw separation with hairlines `#eef2f8` and coloured rules before reaching for shadows.
5. Measure any new page with `node web/scripts/extract-tokens.mjs --slug=nation-tv--<page> --url=<url> --force --no-motion` before adding tokens; unmeasured values (hover on nav, dark mode, breakpoints) stay "not measured".
