---
version: alpha
name: David Whyte Experience
category: "Culture & Events"
description: "Companion-membership page of poet David Whyte's site: a warm grey #e7e7e2 canvas, black #000000 type in thin Canela Text (weight 100, 52px headings) paired with 18px Roobert body, white #ffffff 4px-radius subscribe buttons, and a painted WebGL landscape as the only color."
colors:
  canvas: "#e7e7e2"
  page-body: "#efeae2"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
typography:
  display:
    fontFamily: "\"Canela Text\""
    fontSize: 52px
    fontWeight: 100
    lineHeight: 64.48px
  subheading:
    fontFamily: "\"Canela Text\""
    fontSize: 32px
    fontWeight: 100
    lineHeight: 40px
  body:
    fontFamily: Roobert, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27.9px
  body-mobile:
    fontFamily: Roobert, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  button:
    fontFamily: Roobert
    fontSize: 16px
    fontWeight: 400
  button-mobile:
    fontFamily: Roobert
    fontSize: 14px
    fontWeight: 400
  label:
    fontFamily: Roobert, sans-serif
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  xs-mobile: 3px
spacing:
  s1: 5px
  s2: 10px
  s3: 10.25px
  s4: 16px
  s5: 20px
  s6: 29px
  s7: 34px
  s8: 64px
  s9: 74px
  s10: 128px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 29px
    height: 54px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 16px 29px
    height: 54px
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.xs-mobile}"
    padding: 14px 25px
    height: 46px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

The measured page is the "Experience & advantages" page of davidwhyte.com, the companion-membership page for the poet David Whyte. The page itself calls the immersive front end the "David Whyte Experience", and the footer states that it "received the Site of the Month on Awwwards" and the "Site of the Day" on Awwwards, CSS and FWA. It opens with a scrolling, painted scene and then settles into a quiet text page: "Become a companion to David Whyte's work", a "Subscriber Benefits" list ("Poetry and essays", "Video and talks", "Maps"), the offer buttons "Subscribe - $75 / year" and "Gift - $75 / year", a "Commonly Asked Questions" list, and a footer with a "Companion Portal" link and a very large "David Whyte" wordmark.

The look is calm and literary. The page background is a warm, slightly green-grey `#e7e7e2` (with `#efeae2` measured as the body role background), all text is pure black `#000000` or white `#ffffff`, and the only saturated color comes from the artwork: in the capture, a hand-painted watercolor tree, a stone farmhouse, cows and a walking figure sit in a pale, misty ground. Poem lines ("You start with a painter's hand working up color from a dark palette of remembrance", credited "from \"The Painter's Hand\"") appear as white, outlined letters over a black ink-wash shape. The tone of the interface copy is plain and courteous: "Scroll to explore", "Restart the experience", "Share the experience".

Typography does the brand work. Headings are set in Canela Text at weight 100, so the letters are hairline-thin serifs at 52px and 32px, while functional text (body, buttons, labels) is Roobert at weight 400. The pairing of a delicate serif for voice and a clean geometric sans for function is the central design decision, and every other element (square-ish 4px buttons, hairline dividers, no shadows) is subordinate to it.

## Colors

All colors below were measured on the live page.

- **Canvas `#e7e7e2`**: the body background and the largest measured background area; it is also the dominant color of the capture below the hero.
- **page-body `#efeae2`**: the lighter warm background the extractor reports for the page-body role.
- **Ink `#000000`**: the text color of the large majority of measured characters (headings, body, links, FAQ questions).
- **Primary `#ffffff`** with **on-primary `#000000`**: the measured fill and text color of the two offer buttons ("Subscribe - $75 / year" and "Gift - $75 / year"). On this page the main action is a white button on a grey page, not a colored one.
- **White text `#ffffff`**: used for the poem lines in the hero, which sit on a black ink-wash shape.

There is no measured brand accent color. The theme is delivered by images, not by CSS colors. The `:root` of the page also contains WordPress and WooCommerce preset variables (for example `#720eec` as `--wc-primary` and `#007cba` as the admin theme color), but none of them appeared on the measured visible elements, so they are platform defaults and not part of this brand. The cookie notice that appears at the lower right of the capture (a black box with white ACCEPT and DENY buttons) is a consent layer, not brand UI, and is excluded from the tokens.

## Typography

Two families, both loaded as web fonts: **Canela Text** (faces loaded: 100 normal, 100 italic and 400 normal) and **Roobert** (400 and 300 normal). The measured character counts show Roobert covering most of the text and Canela Text carrying the headlines.

| Role | Font | Size / line height | Weight |
|---|---|---|---|
| display (h2 "Become a companion to David Whyte's work") | Canela Text | 52px / 64.48px | 100 |
| subheading (h3 "Poetry and essays") | Canela Text | 32px / 40px | 100 |
| body | Roobert | 18px / 27.9px | 400 |
| button | Roobert | 16px | 400 |
| label | Roobert | 14px | 400 |
| body on mobile | Roobert | 14px / 19.6px | 400 |

The extractor's automatic h1 was a "Back" control in the 14px label style, so the display role was reassigned to the first real headline, the h2 at 52px (see SOURCES.json `_roleOverrides`). Letter-spacing is `normal` on every measured role; this system does not track type tighter or looser. The FAQ questions in the capture ("Is there a monthly subscription available for the Companion?") are set in the thin serif; the "View" toggles beside them are small underlined sans-serif text. Line heights are generous: 64.48px on the 52px display is 1.24, and 27.9px on 18px body is 1.55, giving the thin strokes air. A substitute for Canela Text should keep the hairline weight; a heavier serif would change the page's voice.

## Layout

The measured page is 5992px tall at the 1280px desktop viewport. The first screen is a full-bleed painted scene with a text panel at the left; below it the page is a quiet grey field with text columns. The spacing steps found in the measurements are 5px, 10px, 10.25px, 16px, 20px, 29px, 34px, 64px, 74px and 128px; the smaller steps (10px, 16px, 20px, 29px) are the paddings inside buttons and links, and the larger steps (34px, 64px, 74px, 128px) are the gaps and paddings between sections.

In the capture, the FAQ is a single column of rows separated by hairline rules, each row pairing a serif question on the left with a small "View" link at the right of the question column. The footer has three items in one row: a small "Share the experience" label with social icons, the "Companion Portal" link, and the oversized "David Whyte" wordmark at the right. A small "Restart the experience" link sits at the lower left and the award credit is centered at the very bottom. Text columns are narrow: the h2 block measures 518px wide, the body paragraph 355px, and the FAQ questions wrap onto several lines.

## Elevation & Depth

The interface is flat. The shadow frequency list is empty and no measured element carries a border color, so buttons, dividers and rows have no drop shadows. Depth in the page comes entirely from the WebGL artwork: layered painted cut-outs (tree, farmhouse, animals) cast soft painted shadows on a pale ground, and the poem panel is a ragged black ink-wash shape with feathered edges. The WordPress preset shadows declared in `:root` (such as `6px 6px 0px rgb(0, 0, 0)`) were not found on any visible element and should not be applied.

## Shapes

The only measured corner radius is 4px, used on the two offer buttons (`rounded.xs`). On the mobile pass the same buttons measure 3px (`rounded.xs-mobile`). Everything else in the measured elements has a 0px radius. The stylesheet also lists 2px, 3px, 5px, 16px and 22px radii, but those were not seen on any measured visible element. The artwork supplies the organic shapes (watercolor edges, ink-wash blots) so the UI shapes can stay almost rectilinear.

## Components

- **Button primary (`button-primary`)**: "Subscribe - $75 / year", `#ffffff` fill, `#000000` text, Roobert 16px 400, padding 16px 29px, 54px high, 4px radius, no border and no shadow.
- **Button secondary (`button-secondary`)**: "Gift - $75 / year", measured with identical fill, text color, type, padding, height and radius as the primary; the two differ only in label and width. The page does not distinguish them with color.
- **Mobile button (`button-primary-mobile`)**: measured at the 390px pass as Roobert 14px, padding 14px 25px, 46px high, 3px radius, same white fill and black text.
- **Link (`link`)**: black Roobert 18px with 27.9px line height; the measured example is the inline word "here".
- **FAQ row**: a serif question plus a "View" toggle, separated by hairline rules (qualitative from the capture; rule color and thickness were not measured).
- **Poem panel**: white outlined Canela letters over a black ink-wash shape, an artwork element rather than a UI component.
- **Footer wordmark**: the large "David Whyte" lockup in the thin serif, with "Companion Portal" beside it.

The extractor found no navigation role, input or card on this page. The cookie notice is excluded as a consent layer.

## Design System Architecture

No public design system, brand guidelines or press kit is published for this site. The page lists no designer or developer credit, and its only brand-adjacent links are "Speaking Engagements", "Permission Inquiries" and "About Many Rivers". The page opened for research was https://davidwhyte.com/experience/. The de-facto system is a WordPress site with WooCommerce: its `:root` carries the `--wp--preset--*` block-editor variables and `--wc-*` WooCommerce variables (for example `--wc-form-border-radius: 4px`, which equals the measured button radius), plus a few project variables such as `--header-h: 94px`, `--banner-current-height: 34px`, `--vw`, `--svh`, `--dvh`, `--full-height-mobile` and `--window-height`, which are viewport and header helpers for the full-screen scene.

The type system is two web-font families declared in the site's own CSS: Canela Text and Roobert. The visible vocabulary is small enough to rebuild from the tokens above: two serif sizes, two or three sans sizes, one button shape, and a grey canvas.

## Do's and Don'ts

Do:
- Set headings in thin Canela Text (weight 100) at 52px and 32px and let them sit on the grey `#e7e7e2` canvas.
- Use Roobert at 400 for body (18px), buttons (16px) and labels (14px).
- Use white `#ffffff` buttons with black text, 54px high, 4px radius, padding 16px 29px.
- Keep the interface flat: hairline rules, no shadows, no borders on buttons.
- Let imagery, here a painted landscape, carry all color and depth.
- Write short, courteous microcopy ("Scroll to explore", "Restart the experience").

Don't:
- Do not use a bold serif or a heavy weight for headlines.
- Do not add a colored brand accent; none was measured.
- Do not copy WooCommerce or WordPress preset colors and shadows from `:root`.
- Do not reproduce the cookie notice (black box, ACCEPT and DENY) as brand UI.
- Do not apply letter-spacing; every measured role is `normal`.

## Responsive Behavior

A fresh 390px mobile pass was recorded. Measured differences from desktop: body text goes from 18px to 14px with a 19.6px line height; the offer button goes from 16px to 14px text, padding 16px 29px to 14px 25px, height 54px to 46px and radius 4px to 3px; the 52px display stays 52px with a 64.48px line height; the 32px subheading is still measured among the mobile sizes. The most-read mobile sizes were 14px, 16px, 20px, 12px, 32px and 52px, in that order of character count.

On mobile the h2 block measured 344px wide (390px viewport), and the body paragraph 295px. The primary button measured on mobile was "Gift - $75 / year". How the header or menu rearranges, whether columns change, and how the WebGL scene is cropped were not measured. Breakpoint widths were not recorded.

## Iteration Guide

1. Set the canvas to `#e7e7e2`, text to `#000000`, and load Canela Text (100) and Roobert (400).
2. Build the type ladder: 52px display, 32px subheading, 18px body, 16px buttons, 14px labels. Leave tracking at normal.
3. Make the two offer buttons: `#ffffff` fill, `#000000` text, 54px high, 16px 29px padding, 4px radius.
4. Add FAQ rows as thin-ruled serif questions with small "View" toggles; measure the rule color before reproducing it exactly.
5. Check mobile with 14px body, a 46px button with 3px radius, and the 52px display unchanged.
6. Keep every color other than the grey, black and white inside images; if you must add an accent, measure it on the live page first.
