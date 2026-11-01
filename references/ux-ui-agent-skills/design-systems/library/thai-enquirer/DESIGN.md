---
version: alpha
name: Thai Enquirer
category: "Thai Brands"
description: "Thai Enquirer English-language news site on the tagDiv Newspaper theme: white canvas, near-black #111111 headlines in Roboto 21px, Poppins 40px section titles, Open Sans 15px bold navigation, red #dd3333 section markers, black feature band and square corners."
colors:
  canvas: "#ffffff"
  ink: "#111111"
  ink-black: "#000000"
  primary: "#dd3333"
  on-primary: "#ffffff"
  surface-gray: "#e5e5e5"
  surface-footer: "#222222"
  ink-meta: "#767676"
  ink-soft: "#666666"
  ink-on-dark: "#dddddd"
  link-footer: "#d6d6d6"
  hairline: "#e0e0e0"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 0px
  headline:
    fontFamily: Roboto, sans-serif
    fontSize: 26px
    fontWeight: 800
    letterSpacing: "-1px"
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 25px
  section-title:
    fontFamily: Poppins
    fontSize: 40px
    fontWeight: 600
    letterSpacing: "-0.6px"
  body:
    fontFamily: "\"Playfair Display\""
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
    textTransform: uppercase
  link:
    fontFamily: "\"Open Sans\""
    fontSize: 15px
    fontWeight: 700
    lineHeight: 28px
spacing:
  s1: 3px
  s2: 6px
  s3: 7.5px
  s4: 9px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 16px
  s11: 20px
  s12: 24px
rounded:
  none: 0px
components:
  link:
    textColor: "{colors.link-footer}"
    typography: "{typography.link}"
---

## Overview

Thai Enquirer (https://www.thaienquirer.com/, title "Latest Thailand English news | Market Watch | Opinion | Current Affairs & Events - Thai Enquirer") is an English-language Thai news publication. The page is a classic editorial front page, 7,199px tall at 1280px. A top strip carries the date ("Friday, October 9, 2026"), a centered serif masthead "THAI ENQUIRER" and small social icons plus a search icon. A single nav row follows: HOME (marked with a red underline in the capture), NEWS SUMMARY, MARKET WATCH, CURRENT AFFAIRS, OPINION, THE CULTURE BLOG and PODCASTS, with dropdown chevrons on several.

Below a leaderboard ad, the content blocks are separated by section titles set huge over a ghosted "ENQUIRER" watermark: "Social Buzz" (three stories plus a Bangchak oil-price widget with a green header), "Main News" (a list of five headlines with bylines beside one large lead story and a serif excerpt), and "Features" on a full-width black band with white condensed headlines over photographs. The look is dense, photographic and traditional-newsroom, in a template-driven layout.

## Colors

Mostly achromatic. `canvas` is white `#ffffff` (largest measured background, 5,960). Headline and body ink is `#111111` (1,736 characters, `--td_text_color`), with `#000000` text (1,575) in the nav and band areas, and `#ffffff` text on black (1,221). The Features band and its surrounding areas are black `#000000` (1,719), the footer `#222222` (`--td_black`), a light gray `#e5e5e5` (397) fills widget rows. Meta text such as bylines and dates is `#767676` (705 characters); `#666666`, `#999999` and `#dddddd` appear as secondary and footer text; footer links measure `#d6d6d6`.

The single accent is red `#dd3333`: a probe of the live page measured `border-left-color: rgb(221, 51, 51)` on the section-title marker elements (the bar left of "Main News" and "TOP STORIES"). That value is also the most common red in the theme CSS corpus (91 references), so `primary` is that red; the generated `#d6d6d6` was the footer link color and is not a brand color. Third-party widget art (the Bangchak oil-type chips in green, purple, gold, red and blue, and the ad creatives) carries its own colors and is not site chrome. The theme exposes `--td_theme_color: #494949`; other variables (`--office-nexus-accent: #343090`, WordPress preset colors like `#9b51e0`) belong to plugins and presets and are not used on visible chrome.

## Typography

A wide mix of families loaded by the Newspaper theme and plugins; measured by character count: Open Sans (1,561, navigation and meta, loaded 400/600/700), Helvetica Neue (1,089), Garamond (1,044, the serif lead excerpt), Roboto (753, card headlines and the logo heading, loaded 400/700/900), Rubik (662, 400/500/600), Oswald (526, the condensed Features headlines), Poppins (79, 600, the section titles), Verdana and Playfair Display (23, the footer company line). The CSS variables `--td_default_google_font_1` and `--td_default_google_font_2` map to Open Sans and Roboto.

Key measured styles: card headlines are Roboto 21px/25px weight 400 in `#111111`; section titles are Poppins 40px weight 600 with -0.6px tracking (90px for the ghosted ENQUIRER watermark word at the same tracking); the block-title Roboto is 26px weight 800 with -1px tracking; navigation links are Open Sans 15px weight 700 uppercase; most meta text is 11px (1,360 characters); body excerpt text is 16px and 20px. The footer company line "THAINEWS CORP CO., LTD." is Playfair Display 32px uppercase.

## Layout

A three-column editorial grid that uses the full 1280px. The Social Buzz block places two story columns on the left and a widget column on the right; Main News is a narrow list column and a large lead image; Features spans edge to edge on black with three story cards. Paddings are 24px (65 elements), 20px (44), 10px, 12px and 9px. The nav is a centered single row with a thin rule beneath, and a dashed rule separates the ad strip from the content. A "back to top" arrow button sits on the right edge; it is a utility control, not brand UI.

## Elevation & Depth

None. `boxShadows` records only `rgb(0,0,0) 0px 0px 0px 0px inset`, a zero-size shadow on 54 elements. Hierarchy comes from size, the black Features band, photography and hairline `#e0e0e0` borders, and from the large ghosted "ENQUIRER" watermarks behind section titles.

## Shapes

`borderRadii` is empty: every measured element computes to a 0px radius, so corners are square. Photographs, buttons and bands are rectangular. The CSS corpus contains theme radii (4px, 5px, 6px, 3px, 2px, 9999px) but none were applied to a rendered element in the measurement.

## Components

**Masthead.** Centered serif wordmark "THAI ENQUIRER", date at left, social icons and search at right. **Navigation.** Open Sans 15px bold uppercase links, the active one underlined in red; hover backgrounds on dark menu items change from `#222222` to `#494949` with white text. **Section header.** A Poppins 40px title over a pale ghosted "ENQUIRER" watermark; smaller list blocks use a red left bar and a 22px title. **Story card.** Image with a small dark "Current Affairs" tag, a 21px Roboto headline, a bold byline, a gray date and a gray three-line excerpt. **List item.** Bold 15-16px headline above a gray byline-date line, separated by a rule. **Feature card.** White Oswald headline over a photograph on black. **Widget.** A third-party fuel-price table. **Footer.** `#222222` with `#d6d6d6` links and a company line.

## Content & Voice

Headlines are sentence-case news statements with quotations ("Bhumjaithai govt. 'Very Strong and Stable', Kla Tham Kept Outside Coalition to teach them a 'Lesson'"), each with a bold byline, a short gray date and a three-line excerpt that ends in an ellipsis. A recurring "Thai Enquirer News Summary" story is dated per day, and opinion pieces are prefixed "Opinion:". Category tags are small dark labels (Current Affairs). The tone is straightforward newsroom English focused on Thai politics, markets and culture, with an oil-price utility widget as a service element.

## Design System Architecture

No public design system or brand guideline was found; the home page links to none. The site runs a WordPress theme (tagDiv Newspaper): the root variables include `--td_theme_color`, `--td_text_color`, `--td_black`, `--td_grid_border_color` (`#ededed`), `--td_default_google_font_1` and `-2`, and WordPress `--wp--preset--*` values, along with plugin variables (`--office-nexus-*`, `--mm-custom-color-*`). Typography and colors are therefore theme settings rather than a bespoke token set.

## Do's and Don'ts

Do keep the page white and monochrome, with red `#dd3333` only for section markers and the active nav state. Do set story headlines in Roboto 21px and section titles in Poppins 40px. Do use the black full-width band for the Features block. Do keep every corner square.

Don't add radii, shadows or gradients. Don't treat the oil-price widget colors or ad creatives as brand colors. Don't take footer link gray `#d6d6d6` as an accent. Don't mix further families; the live site's variety comes from the theme and should not be extended.

## Responsive Behavior

Measured on the 390px mobile pass: the masthead h1 box is 210px wide (70px high) and the footer company line stays Playfair Display 32px/38.4px uppercase in a 350px box; the type-size census records 11px (1,219 characters), 20px (1,105), 19px (606), 16px, 18px, 14px and 13px, and a 60px watermark size replacing the 90px one. No mobile navigation or CTA was recorded. Reflow of the columns is not measured.

## Iteration Guide

1. White canvas, `#111111` headlines, `#767676` meta, a black Features band.
2. Roboto 21px/25px for card headlines; Poppins 40px/600 for section titles; Open Sans 15px/700 uppercase for the nav.
3. Mark sections with a red `#dd3333` left bar and the active nav item with a red underline.
4. Keep radii at 0px and shadows at none.
5. Add ghosted "ENQUIRER" watermark text behind big section titles.
6. Re-measure article and category pages before documenting them; only the home page was measured.
