---
version: alpha
name: BBDO
category: "Agencies & Studios"
description: "BBDO's agency site (bbdo.com): a loud pure red #ff0000 canvas with off-white #fafafa text, oversized 137px Outfit headlines at weight 600, a near-black #161616 work gallery with #212121 cards, outlined 51px-radius pill buttons and a video-led full-bleed hero."
colors:
  canvas: "#ff0000"
  ink: "#fafafa"
  ink-body: "#404040"
  ink-input: "#fafafacc"
  primary: "#ff0000"
  on-primary: "#fafafa"
  on-hover: "#000000"
  surface-dark: "#161616"
  surface-card: "#212121"
typography:
  display:
    fontFamily: Outfit, sans-serif
    fontSize: 137px
    fontWeight: 600
    lineHeight: 140px
  display-mobile:
    fontFamily: Outfit, sans-serif
    fontSize: 61px
    fontWeight: 600
    lineHeight: 64.28px
  card-title:
    fontFamily: Outfit, sans-serif
    fontSize: 26px
    fontWeight: 600
    lineHeight: 33px
    textTransform: uppercase
  subheading:
    fontFamily: Outfit, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Outfit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  link:
    fontFamily: Outfit, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 35px
    textTransform: uppercase
  footer:
    fontFamily: Outfit, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    textTransform: uppercase
  button-secondary:
    fontFamily: Outfit, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28px
    textTransform: uppercase
rounded:
  xs: 16px
  sm: 51px
spacing:
  s1: 6.8px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 17px
  s6: 20px
  s7: 24.8px
  s8: 30px
  s9: 32px
  s10: 36px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 20px 44px
    height: 72px
    borderColor: "{colors.ink}"
  button-outline-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-hover}"
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.body}"
    padding: 12px 8px
    height: 47px
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xs}"
    height: 620px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.footer}"
    padding: 40px
    height: 161px
---

## Overview

`https://bbdo.com/` (page title "BBDO") is the site of the global advertising agency. It is deliberately loud and simple: a single saturated red, off-white type, a near-black showcase section and nothing else. The page is 5,004px tall at 1280px wide and has only 160 visible elements, so it is sparse by construction.

The sequence the capture shows: a full-bleed video hero framed by red bars and a rounded-window grid, with the red words "DO" and "THINGS" set into the lower corners of the picture, the white BBDO wordmark at top left and a three-line menu icon at top right; a red intro band whose headline reads "WE ARE BBDO WE DO BIG THINGS" in enormous white Outfit, with small rounded photo thumbnails set inline between the words, beside a narrow column of copy ("We solve big problems with strategy and creative that make a big impact.", "We work with brands and marketers that have the biggest ambitions.", "We hire big talent and bring them big opportunities that build boundless careers.", "Want to Do Big Things?") and an outlined "CONTACT US" pill; a near-black "WORK" gallery with a giant vertical red "WORK" label and large rounded video tiles captioned by brand and campaign ("PEPSI The Choice", "BUDWEISER American Icons", "MCDONALD'S… Happy Doggy"); news cards; a contact form with a "What Do You Need" selector; and a red footer.

The voice is blunt, short and imperative, built on the word "big". Brand names are the content: tiles are labelled by client in uppercase, with the campaign title in smaller type beside a short rule. The page text also names Instagram and LinkedIn in the footer, a privacy notice and an "all rights reserved" line.

## Colors

The palette is three surfaces and one text colour.

- **Red canvas:** `canvas` and `primary` are `#ff0000`, the largest measured background (6,282 area units) and the colour of the intro band and the footer. Text on it is `ink` `#fafafa`, so `on-primary` is also `#fafafa`.
- **Dark surfaces:** `surface-dark` `#161616` (2,522) is the work gallery; `surface-card` `#212121` (832) is the news-card fill.
- **Text:** `ink` `#fafafa` is the most-read colour (1,522 characters). `ink-body` `#404040` (15 characters) is the colour the `body` element declares (the stylesheet's `--wp--preset--color--foreground` is also `#404040`) but is almost never visible. `ink-input` `#fafafacc` (an 80%-alpha off-white) is the select and form text colour. `#ff0000` is also measured as a text colour on 12 characters.
- **Hover:** `on-hover` `#000000` is the text colour of the outline pill when it inverts to a `#fafafa` fill on hover.

The stylesheet also declares WordPress theme presets such as `--wp--preset--color--primary` `#b91c1c`, `--wp--preset--color--secondary` `#15803d` and `--wp--preset--color--tertiary` `#0369a1`; none of these hues is a measured background or text colour on the home page, so they are not brand tokens here. The same preset list declares gradients and shadows; no box-shadow was measured on the page.

## Typography

One variable family, Outfit (100 to 900), serves everything (1,534 measured characters); `sans-serif` is the declared fallback. Weights measured by characters: 400 (999), 300 (285) and 600 (265).

- `display` Outfit 137px / 600 / 140px, the white intro headline that spans four lines (815px by 560px); at 390px it is `display-mobile` 61px / 600 / 64.28px.
- `card-title` 26px / 600 / 33px uppercase for news-card headlines ("BBDO NAMED TO FAST COMPANY'S…", "BBDO WINS SUPER BOWL 60 WITH…").
- `link` 32px / 400 / 35px uppercase for work-tile brand names ("PEPSI"); `subheading` 20px / 400 / 24px for campaign titles ("The Choice").
- `body` 16px / 400 / 22px for paragraph copy and form fields.
- `button-secondary` 24px / 600 / 28px uppercase for the pill label; `footer` 20px / 400 / 30px uppercase.

Other sizes by characters: 16px (919), 30px (241), 26px (160), 20px (79), 32px (45), 137px (40), 24px (36), 160px (13, the giant vertical label), 42px (8) and 200px (8). No letter-spacing was measured.

## Layout

The page uses full-width horizontal bands, with the content running edge to edge inside a thin red frame at the hero. The intro band is two columns: a wide headline column and a narrow copy column on the right. The work gallery is a masonry-style arrangement: one tall tile on the left and two stacked tiles on the right, each tile followed by a caption row, with the vertical "WORK" label hugging the left edge. News cards are 451px wide by 620px tall.

Measured gaps are 16px (26 uses), 12px (10), 30px (4), 38px (4), 20px (3), 60px (2), 40px (2) and 48px (1). Paddings are 40px (6), 32px (6), 16px (4), 20px (3), 44px (3, the pill's side padding), 6.8px, 90px, 36px, 12px, 8px, 85px and 24.7969px. The footer is 161px tall with 40px padding.

## Elevation & Depth

None. No box-shadow was measured. Separation is by flat colour planes: red, near-black, `#212121` cards, and by 2px `#fafafa` outlines on buttons. Imagery and video supply all depth; tiles and thumbnails have rounded corners only.

## Shapes

Two radii were measured: 16px (11 elements: cards and tiles) and 51px (3: the outline pill, a full capsule for its 72px height). Rounded photo thumbnails sit inline within the headline. The select control measured 0px. Pills use `rounded.sm` and cards use `rounded.xs`.

## Components

- **Outline pill ("VIEW ALL WORK", "CONTACT US"):** transparent, 2px `{colors.ink}` border, `{colors.ink}` Outfit 24px / 600 uppercase label, 51px radius, `20px 44px` padding, 280px by 72px. On hover the fill becomes `{colors.ink}` and the text `{colors.on-hover}` (measured on "CONTACT US").
- **Work tile link:** a large rounded video or image with a caption row: brand name in 32px uppercase, a short rule, then the campaign title in 20px or smaller type; the link element measured 470px by 747px for the Pepsi tile.
- **News card:** `{colors.surface-card}` fill, 16px radius, 451px by 620px, 26px / 600 uppercase headline.
- **Select / form field:** `{colors.ink-input}` 16px text, `12px 8px` padding, 47px tall.
- **Menu icon:** a three-line icon at the top right of the header; the header shows no text links in the capture, only the wordmark and the icon.
- **Footer:** red, uppercase 20px links ("PRIVACY NOTICE", "BBDO WORLDWIDE…"), 161px tall.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page offers no brand guidelines, press kit or logo-download link (its menu names Home, The Work, About Us, News and Contact Us; `https://bbdo.com/about-us/` returned 404). The stylesheet exposes no BBDO-named custom properties; the 80 `:root` variables are WordPress block-editor presets (`--wp--preset--*`, `--wp--style--global--*`), Swiper defaults and Tailwind internals (`--tw-*`). Brand values (red, off-white, near-black, Outfit, the 51px pill) therefore live directly in the page's CSS rather than in a published token set.

## Do's and Don'ts

- Do keep one red (`{colors.canvas}`) as the dominant plane and `{colors.ink}` as the text colour on it.
- Do set display type very large, weight 600, tight line height (137px on 140px).
- Do use outlined 51px-radius pills that invert to a solid off-white fill on hover.
- Do let video and photography fill rounded 16px tiles, labelled by client in uppercase.
- Don't add shadows, gradients or a second accent colour; none was measured.
- Don't use the WordPress preset colours (`#b91c1c`, `#15803d`, `#0369a1`) as brand colours.
- Don't set body copy in a face other than Outfit.

## Responsive Behavior

Measured at 390px: the h1 is Outfit 61px / 600 / 64.28px (against 137px / 140px on desktop); body text keeps 16px / 400 / 22px (311px by 66px). By characters the mobile sizes are 16px (919), 20px (320), 24px (196), 32px (45), 61px (40), 86px (13) and 22px (8), against 16px, 30px, 26px, 20px, 32px, 137px, 24px, 160px, 42px and 200px on desktop. The mobile pass detected no nav or primary-button role; the desktop capture already shows only a wordmark and a menu icon in the header. Breakpoints, column changes and tile layout on mobile are not measured.

## Iteration Guide

1. Set `canvas` `#ff0000`, `ink` `#fafafa`, `surface-dark` `#161616`, `surface-card` `#212121`.
2. Load Outfit (variable); use 137px / 600 / 140px for the one big statement and 16px / 22px for copy.
3. Make a video hero with a 16px-radius frame, a wordmark at top left and a menu icon at top right.
4. Follow with a red intro band (huge headline left, short copy and an outlined 72px pill right) and a near-black gallery of client-labelled tiles.
5. End with 451px by 620px news cards and a red footer; keep everything flat.
6. Check mobile against the 390px values above; menu behaviour is not measured.
