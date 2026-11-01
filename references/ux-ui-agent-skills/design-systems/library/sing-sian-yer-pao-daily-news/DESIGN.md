---
version: alpha
name: Sing Sian Yer Pao Daily News (星暹日报)
category: "Thai Brands"
description: "Chinese-language Thai newspaper portal (singsiandailynews.com): white canvas #ffffff, text #333333 and #666666 in Microsoft YaHei at 16px, a newspaper red #cd131c for section accents and rules, 5px and 10px radii, and a dense headline-list layout with a 10px-radius search input."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#cd131c"
  surface-card: "#f9f9f9"
  surface-panel: "#f5f5f7"
  ink-secondary: "#666666"
  ink-muted: "#8d8d8d"
  ink-headline: "#2d2d2d"
  accent-red-text: "#c72a2a"
  hairline: "#aaaaaa"
  card-border: "#ececec"
typography:
  display:
    fontFamily: "\"microsoft yahei\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 45px
  body-dominant:
    fontFamily: 微软雅黑
    fontSize: 16px
    fontWeight: 400
  input:
    fontFamily: Arial
    fontSize: 12px
    fontWeight: 400
    lineHeight: 38px
rounded:
  xs: 5px
  sm: 10px
spacing:
  s1: 5px
  s2: 9px
  s3: 10px
  s4: 18px
  s5: 20px
  s6: 32px
  s7: 38px
  s8: 40px
  s9: 120px
components:
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 0px 18px
    height: 40px
    borderColor: "{colors.hairline}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    padding: 0px 20px 10px
    borderColor: "{colors.card-border}"
---

## Overview

Sing Sian Yer Pao Daily News (星暹日报, "The Sing Sian Yer Pao Daily News" in the masthead lettering visible in the capture) is a Chinese-language newspaper site for readers in Thailand, measured at singsiandailynews.com. The page title is 星暹日报. The measured h1 is the lead-story block label 星暹头条 ("Sing Sian headlines"). The site behaves like a traditional news portal rather than a brand marketing page: there is no hero slogan and no call-to-action button (the extractor found no CTA candidates). Everything is a headline, a thumbnail or a section label.

The capture shows, from the top: a masthead with a red calligraphic logo at the left, a rounded search field ("请输入关键字") in the centre, a "融媒矩阵" (media matrix) icon at the right, and festive firework illustrations behind the header. Under it sits a white navigation bar with a red rule: 首页, 星暹头条, 政治, 经济, 侨社, 社会, 中国, 港澳台, 房产, 本地服务, 关于我们. Next comes a large lead photograph beside a bold-and-regular alternating headline list, a dark-blue full-width banner for an interview series, then a three-column body: a card of photo stories, a 要闻 (key news) list, and a sidebar with 星暹热榜 (hot ranking) numbered 1 to 10 and advertising banners for Thai visa services and property. The footer repeats a row of red links: 关于我们, 联系我们, 广告服务, 供稿服务, 法律声明, 招聘信息, 网站地图.

The voice is journalistic and neutral: compressed headline sentences, often with a bolded main line followed by a lighter sub-line.

## Colors

All values are measured. Backgrounds by area: #ffffff (weight 610), #f9f9f9 (195), #f5f5f7 (133). Text by characters: #333333 (783), #666666 (445), #8d8d8d (109), #ffffff (91, used over photo captions and numbered badges), #2d2d2d (29), #c72a2a (28), #cd131c (2).

- **canvas #ffffff**: page background.
- **ink #333333**: primary headline and body text.
- **ink-secondary #666666**: list text, input text.
- **ink-muted #8d8d8d**: meta text and ranked list items.
- **ink-headline #2d2d2d**: a small set of headline characters.
- **primary #cd131c**: the newspaper red. In the hover probe the nav label 要闻 is #cd131c with a #cd131c border and gains an underline on hover. The CSS corpus lists it 12 times, next to #ea3440 (6) and #b21112 (5), which were not promoted to tokens.
- **accent-red-text #c72a2a**: red used for section labels and a measured border.
- **surface-card #f9f9f9** and **surface-panel #f5f5f7**: light grey panels behind sidebar blocks.
- **hairline #aaaaaa**: the search input border. **card-border #ececec**: card outline.

The first-ranked badges in the hot list are red, orange and yellow in the capture, then grey; exact values of those badge fills were not recorded.

## Typography

The site declares no loaded web fonts (loadedFonts is empty). The measured families are 微软雅黑 (Microsoft YaHei, 1458 characters) and the lowercase alias "microsoft yahei" (29 characters), so text renders in whichever system Chinese font the viewer resolves for that name. The search input uses Arial at 12px. Because the font is a system font, there is no proprietary web font to substitute.

Sizes by characters: 16px (1057), 18px (286), 14px (109), 19px (26), 12px (4), 24px (2). Weights: 400 on 1257 characters, 700 on 230. The bold weight marks lead headlines in the right-hand list and the alternating story titles; regular weight marks the sub-lines.

- **display** 18px, line-height 45px: the measured h1 role (the block title 星暹头条).
- **body-dominant** 16px: the news list and navigation.
- **input** Arial 12px, line-height 38px.

No letter spacing was measured (the letter-spacing ranking is empty). Chinese text is set without added tracking.

## Layout

The desktop pass measures a 1280px viewport and a 2544px scroll height. The design is a classic three-zone news grid: a wide lead image with a text list to its right, then a main column of photo cards plus the key-news list, then a narrow sidebar. Sections are announced by a short red vertical bar and a bold label (星暹热榜, 房产, 本地服务).

Paddings by frequency: 5px (29), 10px (20), 38px (10), 40px (7), 20px (2), plus single uses of 9px, 120px, 18px and 32px. The measured card padding is 0px 20px 10px. The header search input is 325px wide and 40px high with 18px of left padding.

List rows are tight, with a small grey bullet before each headline in the key-news list and a number badge in the ranking list. Photographs carry a bottom caption on a dark gradient with white text.

## Elevation & Depth

No box shadows were measured (the boxShadows ranking is empty). Depth comes from thin borders (#ececec on cards, #aaaaaa on the input, a #ea3440 border once), light grey panel fills, and red horizontal rules under the navigation bar and above the footer. The firework illustrations behind the masthead are decorative imagery, not elevation.

## Shapes

Measured radii: 5px (3 uses), 0px 0px 5px 5px (3), 10px 0px 0px 10px (1), 0px 10px 10px 0px (1), 10px 10px 0px 0px (1) and a uniform 10px (1). The mixed corner values come from compound controls: the search field has a 10px left-rounded input paired with a 10px right-rounded button, and cards have rounded tops or bottoms. Everything else (navigation, list rows) is square.

## Components

**Search field.** White fill, #666666 text, 1px solid #aaaaaa border, 10px radius on the left corners, Arial 12px, 40px high, 325px wide, with a magnifier button at the right edge.

**Navigation bar.** A row of 16px text links with a red rule beneath; the hover probe on 要闻 shows the underline appearing while the color stays #cd131c.

**Story card.** A white card with a #ececec border, a 10px radius, a lead photograph with a white caption on a dark scrim, and text-only sub-stories below.

**Headline list.** Alternating bold and regular headline lines at 16px with a small grey bullet.

**Ranking list.** Ten numbered rows; the top three use coloured number badges, the rest grey.

**Advertising banners.** Full-width image banners (an interview series banner in dark blue, visa service and property promotions in the sidebar). These are third-party-style ad creatives and are not part of the brand token set.

There is no measured button style, so no button token is declared.

## Design System Architecture

No public design system or brand guideline was found: the site shows none and no link to one. The research was limited to the measured homepage (see SOURCES.json). The de-facto system is a conventional Chinese news-portal template: no CSS custom properties on the root (rootVars is empty), no loaded web fonts, system font names in Chinese, and absolute pixel paddings. Tokens in this file are therefore computed-style measurements.

## Do's and Don'ts

- Do use #cd131c for section accents, rules and active navigation, not for large fills.
- Do keep body text in #333333 with #666666 for secondary lines and #8d8d8d for metadata.
- Do alternate bold and regular lines to separate headline from sub-line.
- Do use 5px and 10px radii only; keep list rows square.
- Don't add shadows; none were measured.
- Don't use a web font substitute for 微软雅黑 without noting it is a system font.
- Don't treat the third-party banner colours (dark blue ad strip) as brand colors.

## Responsive Behavior

The mobile pass recorded only an h1 of 18px in a 72px-wide element (the 星暹头条 label), with no h2, body, CTA or nav roles; its character-weighted font sizes are identical to desktop (16px, 18px, 14px, 19px, 12px, 24px). Whether the layout reflows, collapses its navigation or hides the sidebar on small screens was not measured.

## Iteration Guide

1. Start with a white page, #333333 text at 16px in 微软雅黑, and a red rule under the navigation.
2. Build headline lists first: bold lead line, regular sub-line, grey bullet, 10px vertical rhythm.
3. Add cards only for photo stories: #ececec border, 10px radius, white caption on a dark scrim.
4. Keep the header to logo, centred search field (40px high) and one icon link.
5. Use #cd131c sparingly for section labels and active states.
6. Run the gate after edits: node web/scripts/verify-designs.mjs --slug=sing-sian-yer-pao-daily-news.
