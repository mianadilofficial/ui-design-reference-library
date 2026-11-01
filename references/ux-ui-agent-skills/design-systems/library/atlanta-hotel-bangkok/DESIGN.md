---
version: alpha
name: The Atlanta Hotel Bangkok
category: "Thai Brands"
description: "Wix-built site of The Atlanta Hotel, Bangkok (est. 1952): a flat #910826 oxblood canvas, a cream #ffe991 art-deco wordmark set in an uploaded custom font, white 20px bold body copy in the Wix web font proxima-n-w01-reg, and square #edcc26 yellow link-buttons with 3px black borders and a soft 4px shadow."
colors:
  canvas: "#910826"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#edcc26"
  on-primary: "#000000"
  accent-red: "#f2250a"
  cream: "#ffe991"
  ink-soft: "#f0f0f0"
  ink-green: "#bada55"
  ink-theme-dark: "#303030"
  ink-pink: "#f0b9e1"
  hover-fill: "#8896cd"
typography:
  display:
    fontFamily: wfont_dd7bd8_6946e6df0c454950b792253e989c1cd1, wf_6946e6df0c454950b792253e9, orig_js_neeno_normal
    fontSize: 27px
    fontWeight: 400
  display-mobile:
    fontFamily: wfont_dd7bd8_6946e6df0c454950b792253e989c1cd1, wf_6946e6df0c454950b792253e9, orig_js_neeno_normal
    fontSize: 31px
    fontWeight: 400
  wordmark:
    fontFamily: wfont_dd7bd8_6946e6df0c454950b792253e989c1cd1, wf_6946e6df0c454950b792253e9, orig_js_neeno_normal
    fontSize: 62px
    fontWeight: 700
    lineHeight: 86.8px
  heading:
    fontFamily: proxima-n-w01-reg, sans-serif
    fontSize: 25px
    fontWeight: 700
  body:
    fontFamily: proxima-n-w01-reg, sans-serif
    fontSize: 20px
    fontWeight: 700
  link:
    fontFamily: proxima-n-w01-reg, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 36.4px
  footer:
    fontFamily: futura-lt-w01-book, sans-serif
    fontSize: 23px
    fontWeight: 700
    lineHeight: 50px
rounded:
  square: 0px
  xs: 80px
spacing:
  s1: 5px
  s2: 10px
components:
  link-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.square}"
    border: "3px solid #000000"
    boxShadow: rgba(0, 0, 0, 0.6) 0px 1px 4px 0px
  link-button-hover:
    backgroundColor: "{colors.hover-fill}"
    textColor: "{colors.ink-soft}"
    borderColor: "{colors.ink-soft}"
  header:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.cream}"
    typography: "{typography.wordmark}"
  footer:
    textColor: "{colors.on-primary}"
    typography: "{typography.footer}"
---

## Overview

The Atlanta Hotel Bangkok (page title: "Historic Art Deco wholesome club-like hotel with pool", 78 Soi 2, Sukhumvit Road, Bangkok 10110) presents itself with a single, long, centred page on a flat oxblood field, `#910826`. The header carries the cream `#ffe991` wordmark "THE ATLANTA HOTEL" with "Est 1952" beneath it, flanked by two thin horizontal rules in the same cream (the measured border color `#ffe991` appears on four elements). Everything below hangs off a central axis: an Instagram icon, a green italic anniversary teaser, five TripAdvisor Certificate of Excellence badges, a column of yellow link-buttons, long italic testimonials, three photographed signs, and a full photograph of the garden pool.

The look is a 1950s hotel-lobby sign translated into a hand-edited Wix page. There is no photography-led hero and no booking widget in the first screen; the capture shows typography on colour, followed by awards and press links. The copy voice (read on the homepage) is whimsical and insider-oriented: all-caps headings, ellipses, exclamation points, warm toward returning guests and blunt toward newcomers. Policy is stated as signage ("PRIVATE RESIDENTS ONLY", "NO SMOKING / NO VAPING", "Zero tolerance for trouble-makers"). The design does not try to look like a booking platform; the page itself says the hotel does not advertise.

The page measured 1280px wide and 5573px tall on desktop with 482 visible elements. The Wix theme variable `--site-width` is `980px`. This document records measured values only; anything that was not measured is marked as such.

## Colors

- **Canvas `#910826`** is the page background everyone sees: it covers about 54% of the first screen of the capture and carries the largest background area in the DOM. `page-body` `#ffffff` is the body/main fill reported by the extractor underneath it.
- **Ink `#ffffff`** is the most-read text color (1584 characters), used for the h2 "FIRST HOTEL POOL IN THAILAND", body paragraphs and the italic testimonials. `ink-soft` `#f0f0f0` (257 characters) is the next most-read color and is also the hover text color on the yellow buttons.
- **Cream `#ffe991`** is the wordmark and header text color and also a measured background (small area); it is the same cream as the header rules.
- **Primary `#edcc26`** is the fill of the link-buttons ("Conde Nast ranks The Atlanta best 12 in Bangkok < Click >" and its siblings). The extractor found no CTA candidate, so the yellow link-button fill is promoted to primary on the evidence of the capture; the button text is `#000000`.
- **Accent red `#f2250a`** is a measured text color on 3 characters; where it is used was not isolated.
- **Green `#bada55`** (123 characters, font `madefor-text-extrabold`) is the italic bold anniversary teaser ("Continuing to celebrate our 70th anniversary...").
- **Pink `#f0b9e1`** (47 characters) and **theme dark `#303030`** (105 characters) are measured text colors. `#303030` is also the Wix theme's `--wst-color-text-primary`; it has low contrast on the oxblood canvas and the capture does not show it as readable copy.
- **Hover fill `#8896cd`** is the measured hover background of the yellow buttons (with `#f0f0f0` text and border).

The browser default link color `#0000ee` was reported for an empty 60 by 60 icon link and is not a brand color; it is dropped.

## Typography

Three families carry the page, all served by Wix.

- **Wordmark and display**: an uploaded custom font whose family stack is `wfont_dd7bd8_6946e6df0c454950b792253e989c1cd1`, `wf_6946e6df0c454950b792253e9`, `orig_js_neeno_normal`. It sets the wordmark at 62px / weight 700 / line-height 86.8px, and the h1 ("Est 1952", whose superscript "d" is what the extractor read) at 27px / 400 on desktop and 31px / 400 in the mobile pass. It is a flared, high-contrast art-deco face drawn in capitals.
- **Reading text**: the Wix web font `proxima-n-w01-reg` with `sans-serif` fallback. Body paragraphs 20px/700; h2 25px/700; link-button labels 26px/700 with a 36.4px line-height. It carries 2317 of the page's characters, far more than any other family. Weight 700 dominates: 2134 characters are bold against 481 at 400.
- **Supporting faces**: `madefor-text-extrabold` (123 characters, the green teaser), `futura-lt-w01-book` (50 characters, the footer navigation at 23px/700 with 50px line-height), `dancingscript-regular` (47 characters), `avenir-lt-w01_85-heavy1475544` (40 characters) and Arial (9 characters).

Sizes by character count: 20px (642), 26px (485), 22px (353), 25px (318), 23px (293), 30px (192), 29px (91), 14px (56), 31px (49), 84px (47), 17px (40), 62px (19). The Wix theme also declares a ladder `--font_0` 40px, `--font_3` 60px, `--font_4` 40px, `--font_5` 25px, `--font_6` 22px, `--font_7` 17px, `--font_8` 15px, `--font_9` 14px, `--font_10` 12px. If a licensed Proxima or Futura is unavailable, any humanist sans in bold for body and a geometric sans for the footer reproduce the structure; the wordmark face is an uploaded file and has no named substitute in the page data.

## Layout

The layout is a single centred column. The header is full-width (1280px) on the `#910826` canvas and measured 410px tall; the wordmark sits in the centre with cream hairlines running outward to both edges. Below it, content blocks are centred and ragged-centre aligned; the pool photograph is a single large framed image roughly centred with a caption overlaid at its bottom edge in italic white capitals ("POOL OPEN 24-HOURS AND ILLUMINATED ALL NIGHT / CANDLE-LIT FROM NOVEMBER TILL FEBRUARY").

Spacing is hand-set rather than systematic. Measured paddings are `5px` (7 occurrences) and `10px` (4 occurrences); no CSS gap values were found. The yellow link-buttons are full-sentence labels in a vertical list, each of different width (the first measured 695px wide and 59px tall; four others 55px tall), with the list centred, so the column outline is a staggered pyramid. Photographs are inserted as-is: five TripAdvisor badges in a row, then three signs side by side.

Density is high in text and low in chrome: there are no cards, no inputs and no extractor-detected navigation links. The footer is a set of links (HOME, Directions, Rooms, Tariffs & Reservations, More...) with black text on the page body.

## Elevation & Depth

Depth is almost absent. The only measured shadow is `rgba(0, 0, 0, 0.6) 0px 1px 4px 0px` on the yellow link-buttons (7 occurrences), which gives them a slight lift over the oxblood field. The Wix stylesheet declares the same shadow as `var(--shd, 0 1px 4px #0009)` and a lighter `0 1px 3px #00000080` plus `0 0 5px #000000b3`; the page itself does not otherwise use layered surfaces. The wordmark and body text are flat color on flat color. Borders do the rest of the separating: a 3px solid `#000000` frame on each yellow button and the cream hairlines around the wordmark.

## Shapes

Shapes are rectangular. The measured border-radius of the link-buttons is `0px`, and each carries a `3px solid #000000` border. The only rounded values measured anywhere in the page's radii list are `80px` (and its split corners `80px 0 0 80px` and `0 80px 80px 0`), each on a single element that the extractor did not tie to a visible control; the Wix stylesheet also declares `24px` and `300px` radii once each. The Instagram icon in the capture is a rounded-square gradient mark; the TripAdvisor badges are square tiles and the final hall-of-fame badge is a green tile.

## Components

- **Link-button (primary)**: a full-width sentence label such as "Conde Nast ranks The Atlanta best 12 in Bangkok < Click >". Fill `#edcc26`, text `#000000`, `proxima-n-w01-reg` 26px/700, line-height 36.4px, 3px solid `#000000` border, radius `0px`, shadow `rgba(0, 0, 0, 0.6) 0px 1px 4px 0px`. The label always ends in the literal "< Click >" device.
- **Link-button hover**: measured on six items: fill changes to `#8896cd`, text to `#f0f0f0`, border to `#f0f0f0`. The radius, shadow and height are unchanged.
- **Header**: `#910826` fill, cream `#ffe991` wordmark at 62px/700, "Est 1952" below.
- **Anniversary teaser**: italic bold green `#bada55` text in `madefor-text-extrabold`, centred, over the canvas; a smaller caption beside the Instagram icon is set on a yellow highlight.
- **Testimonials**: large italic white quotation blocks centred between the button list and the signage; attribution lines are small and white.
- **Signage tiles**: three photographed or drawn signs (private residents only; the hotel's own sign; no smoking / vaping / marijuana pictograms). They are images, not styled text.
- **Footer**: black `#000000` text, `futura-lt-w01-book` 23px/700 with 50px line-height, no measured background fill.

## Design System Architecture

There is no public design system, brand guideline, press kit or token package for this hotel: the homepage and its navigation (HOME, Directions, Rooms, Tariffs & Reservations, a Michener references page, From The Atlanta to Old Bangkok, Contact, More...) link to none, and no brand or design-system link was found on the pages opened (https://www.theatlantahotelbangkok.com). The de-facto system is the Wix theme shipped with the site (https://www.theatlantahotelbangkok.com/): `:root` carries `--color_0` to `--color_65` as bare RGB triples, `--font_0` to `--font_10`, `--wst-color-*` and `--wst-button-color-*` semantic aliases, `--site-width: 980px` and `--theme-spx-ratio: 1px`. The Wix theme defines a blue action color (`--wst-color-action` resolves to the triple 58,84,180) and button fills built on it, but the page's own link-buttons are overridden to the yellow fill, black text and black border above, so the theme variables are not what the viewer sees. Real branding decisions (oxblood, cream, yellow, the uploaded wordmark font) live in per-element editor overrides rather than in tokens.

## Do's and Don'ts

- Do keep the canvas `#910826` flat; do not add gradients or image backgrounds to the page field.
- Do set the wordmark in cream `#ffe991` in the uploaded display font at 62px/700, with the cream hairlines either side.
- Do write link labels as full sentences and end them with "< Click >" in the yellow button.
- Do keep button corners square (`0px`) with the 3px `#000000` border and the `0px 1px 4px` shadow.
- Do use white `#ffffff` for reading text; use `#bada55` only for the single anniversary teaser line.
- Don't use the Wix theme's blue action color for buttons; the live buttons are yellow.
- Don't treat `#0000ee` as a link color; it is a browser default.
- Don't round the buttons into pills; the only rounded values measured (`80px`) were not tied to visible controls.
- Don't add stock hospitality imagery: the capture uses a real garden-pool photograph, TripAdvisor badges and photographed signs.

## Responsive Behavior

Measured at the 390px mobile pass: the h1 is 31px/400 (27px on desktop), the h2 stays 25px/700, body text stays 20px/700, and the extractor's mobile character-size histogram is identical to desktop (20px 642, 26px 485, 22px 353, 25px 318). The header element measured 980px wide in the mobile pass, matching the Wix `--site-width` of `980px`, against 1280px on desktop. The h2 measured 405px wide and the paragraph 695px wide in both passes. Breakpoints, how the link-button column reflows, navigation behaviour and image scaling at narrow widths were not measured; no hamburger menu or similar control was recorded. Dark mode and touch targets were not measured.

## Iteration Guide

1. Start from the three measured fills: canvas `#910826`, cream `#ffe991`, primary `#edcc26`. Check each against the capture before adding anything else.
2. Keep two font roles: the uploaded display font for the wordmark and "Est 1952", and `proxima-n-w01-reg` at 700 for everything readable. Add `futura-lt-w01-book` only for the footer links.
3. Build the first screen as header, teaser, award badges, yellow link-button column, in that order, all centred.
4. When adding a new action, copy the link-button: `#edcc26`, `#000000` text, `3px solid #000000`, radius `0px`, shadow `rgba(0, 0, 0, 0.6) 0px 1px 4px 0px`, hover `#8896cd` with `#f0f0f0`.
5. Measure before you add: `node web/scripts/extract-tokens.mjs --slug=atlanta-hotel-bangkok--rooms --url=https://www.theatlantahotelbangkok.com/copy-of-rooms-tariffs-reservations --force --no-motion` records the rooms page, which was not measured here.
6. Re-run `node web/scripts/verify-designs.mjs --slug=atlanta-hotel-bangkok` after any token edit.
