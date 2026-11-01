---
version: alpha
name: SK Telecom
category: "Telecom"
description: "SK Telecom (SK텔레콤) corporate home: white canvas #ffffff with a #f6fafd tint, ink #1a2232, indigo #3a46cd accent, SKT Sans Text/Display with a 110px weight-800 display, 16px rounded tiles and a 100px pill outline button for the newsroom link."
colors:
  canvas: "#ffffff"
  ink: "#1a2232"
  primary: "#3a46cd"
  surface-tint: "#f6fafd"
  surface-dark: "#333333"
  ink-muted: "#727887"
  ink-black: "#000000"
  ink-footer: "#3a404e"
  hairline: "#0000000d"
  card-border: "#3a46cd99"
  footer-border: "#d0d1d3"
typography:
  display:
    fontFamily: "\"SKT Sans Display\""
    fontSize: 110px
    fontWeight: 800
    lineHeight: 154px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"SKT Sans Text\", \"SKT Sans Display\", Roboto, \"Roboto Local\", \"Noto Sans KR\", \"Malgun Gothic\", \"맑은 고딕\", \"Malgun Gothic\", 돋움, Dotum, \"Apple SD Gothic Neo\", Helvetica, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 23.4px
  body:
    fontFamily: "\"SKT Sans Text\", \"SKT Sans Display\", Roboto, \"Roboto Local\", \"Noto Sans KR\", \"Malgun Gothic\", \"맑은 고딕\", \"Malgun Gothic\", 돋움, Dotum, \"Apple SD Gothic Neo\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22.4px
  link:
    fontFamily: "\"SKT Sans Text\", \"SKT Sans Display\", Roboto, \"Roboto Local\", \"Noto Sans KR\", \"Malgun Gothic\", \"맑은 고딕\", \"Malgun Gothic\", 돋움, Dotum, \"Apple SD Gothic Neo\", Helvetica, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 26px
  button-secondary:
    fontFamily: "\"SKT Sans Text\", \"SKT Sans Display\", Roboto, \"Roboto Local\", \"Noto Sans KR\", \"Malgun Gothic\", \"맑은 고딕\", \"Malgun Gothic\", 돋움, Dotum, \"Apple SD Gothic Neo\", Helvetica, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 25.6px
rounded:
  xs: 16px
  sm: 100px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 6.5px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-secondary:
    textColor: "{colors.ink-black}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 14px 36px
    height: 58px
    borderColor: "{colors.ink-black}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  card:
    textColor: "{colors.ink-black}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.ink-footer}"
    borderColor: "{colors.footer-border}"
---

## Overview

SK Telecom (SK텔레콤, "SK telecom" in the logo) is the Korean mobile carrier's corporate site, measured at sktelecom.com (document language ko; page title "SK telecom"). The measured h1 is "SK Telecom". It is a portal into company content rather than a plan-selling storefront: the first screen is a field of rounded gradient tiles floating over a light network-graph background, each one a doorway.

In the capture the header holds a hamburger icon at the left, the orange-and-blue SK telecom logo in the centre and a globe (language) icon at the right. The tile field includes 뉴스룸 (newsroom), YouTube, Instagram, T world, T membership, T roaming, 회사소개 (company), 지속가능경영 (sustainability), 안전보건 (health and safety), 투자정보 (investor information), 채용 (careers), SECURITY CENTER and 에이닷 (the A. AI assistant). Each tile has a bold label, a two-line subtitle in Korean and an illustration or photograph. Below the tile field come two content rows with the headings 뉴스룸 콘텐츠 and 보도자료 (press releases), each a row of four photo cards with a two-line headline, a pill outline button 뉴스룸 바로가기 with an arrow, and a light footer with utility links, social icons, a TOP button, a related-sites dropdown and a certification badge.

Voice is plain Korean corporate-news style. Headlines are full sentences with bracketed tags such as [칼럼] and [CEO 칼럼].

## Colors

Backgrounds by area: #ffffff (1604), #f6fafd (1024), #333333 (91), #fafafa (76), #727887 (3). Text by characters: #1a2232 (339), #ffffff (257), #727887 (177), #000000 (32), #3a404e (27), #3a46cd (14), #222222 (7), #595e6b (6). The CSS corpus lists #1a2232 (144), #4c4c4c (100), #ffffff (95), #3a46cd (78), #ecedef (74), #3a404e (64), #4a508f (51), #727887 (36), #d0d1d3 (36).

- **canvas #ffffff** and **surface-tint #f6fafd**: the page and its pale blue-white band.
- **ink #1a2232**: a deep navy ink for text.
- **primary #3a46cd**: indigo, used for accent text and as the card border (#3a46cd99 with alpha).
- **ink-muted #727887**: secondary text; a hover probe shows a scroll button fill moving from #727887 to #595e6b.
- **surface-dark #333333**: a dark fill used in a small area.
- **ink-black #000000**: the outline button border and label.
- **ink-footer #3a404e**: footer text.
- **hairline #0000000d**: a 5%-black border and **footer-border #d0d1d3**.

The tile colors themselves (purple for T world, orange-yellow for 안전보건, navy for 지속가능경영, teal for T roaming) are photographic and illustrative fills not recorded as exact values. #0000ee measured on a link is the browser default link color and is excluded. The --swiper-theme-color (#007aff) in the root variables is a carousel library default and is excluded.

## Typography

Loaded fonts: SKT Sans Display at 700 and 800, and SKT Sans Text at 400, 500, 600 and 700. These are SK Telecom's own typefaces; if they are unavailable the shipped stack falls back through Roboto, Noto Sans KR, Malgun Gothic, Dotum and Apple SD Gothic Neo. SKT Sans Text carries 848 measured characters and SKT Sans Display 21.

Sizes by characters: 12px (435), 14px (321), 20px (57), 1px (24, visually hidden labels), 36px (11), 110px (10), 16px (8), 10px (3). Weights: 600 (400 characters), 500 (321), 700 (79), 400 (59), 800 (10). Tracking is slightly negative: -0.13px and -0.48px at 12px, -0.56px at 14px and -1.2px at 110px.

- **display** SKT Sans Display 110px, weight 800, line-height 154px, letter-spacing -1.2px.
- **body** 14px, weight 500, line-height 22.4px.
- **link** 20px weight 700 / 26px: tile titles.
- **button-secondary** 16px weight 700 / 25.6px.
- **display-mobile** 18px weight 700 on mobile.

## Layout

The desktop page is 1280px wide and 2347px tall. The first screen is an irregular staggered grid of about five columns of tiles of unequal height; the content rows below are four equal columns of photo cards with an 8px-ish gutter. Gaps measured: 10px (16 uses), 16px (16), 12px (4), 33px (4), 18px, 6.5px and 8px (2 each). Paddings: 8px (10), 10px (4), 5px (3), 16px (2), then single large paddings of 75px, 160px and 120px for section spacing.

The page is generous with vertical white space between the heading rows, with section headings (36px) accompanied by a small icon.

## Elevation & Depth

No box shadows were measured. Separation relies on the tile fills, the pale #f6fafd band and 5% black hairline borders (#0000000d). The network-graph background in the hero is decorative imagery rather than elevation.

## Shapes

Measured radii: 16px (47 uses: tiles and cards) and 100px (1 use: the pill outline button). A scroll-hint button at the page bottom has 4px top corners only. Photographs inside content cards carry rounded corners in the capture consistent with the 16px value.

## Components

**Tile.** 16px radius, full-bleed illustration or photo, bold 20px title in white (or ink on light tiles), 12px two-line subtitle. The measured instance is 248px wide and 120px high.

**Outline pill button.** Transparent fill, 2px solid #000000 border, 100px radius, 16px weight-700 label with an arrow, padding 14px 36px, 58px high ("뉴스룸 바로가기"). It is measured as a secondary action; no filled primary CTA was found.

**Content card.** A 16px-radius photo above a 14px two-line headline, in rows of four.

**Footer.** Utility link row (공지사항, 상호접속협정서, 통화량 캘린더), social icons, a TOP button, a related-sites select with a 1px #d0d1d3 border, and legal links in #3a404e.

## Design System Architecture

No public design-system page was found and the home page links to none; research was limited to the measured page. The shipped CSS declares few root variables (--ease-out: cubic-bezier(0.4, 0.2, 0.3, 1.2), --swiper-theme-color, --swiper-navigation-size: 44px), so the visible system is the pair of proprietary typefaces, the 16px radius and the Swiper carousel library. Tokens here are computed-style measurements.

## Do's and Don'ts

- Do keep a white or #f6fafd page with #1a2232 text.
- Do use 16px radii on tiles and cards and a 100px pill for outline buttons.
- Do use negative tracking on small Korean text as measured.
- Do pair each tile title with a two-line subtitle.
- Don't use #007aff (carousel default) or #0000ee (browser link default).
- Don't add shadows.
- Don't fill the newsroom button; the measured style is an outline.

## Responsive Behavior

Mobile measurements: h1 18px (326px wide, "회사소개"), body 14px (342px wide), nav label 1px in a 390px element (a visually hidden English-site link). Mobile character-weighted sizes: 12px (355), 14px (311), 11px (100), 18px (57), 22px (11), 1px (10). Breakpoints and the way the tile field reflows were not measured.

## Iteration Guide

1. Start with a white page, #1a2232 text in SKT Sans Text 14px / 22.4px, weight 500.
2. Build the first screen as staggered 16px-radius tiles with a title and subtitle each.
3. Add content rows of four photo cards with 14px headlines.
4. Use one outline pill button (2px black border, 100px radius) for the main link.
5. Keep the footer light, with hairline borders.
6. Gate: node web/scripts/verify-designs.mjs --slug=sk-telecom.

## Additional Measurement Notes

The desktop pass reports 229 visible elements and the Korean document language. The spacing scale in the frontmatter runs from 1px to 18px and mirrors the small gaps between tile labels, subtitles and icons, while the larger paddings of 75px, 120px and 160px belong to section spacing. The measured scroll hint at the bottom of the first screen is a small grey button labelled "다음 섹션으로 스크롤 이동" (scroll to next section), whose fill darkens on hover; it is a navigation helper and not a brand component. When extending the system, reuse the 16px tile radius, the weight-600 and weight-500 text rhythm of SKT Sans Text, and keep the indigo accent restricted to borders and small text.
