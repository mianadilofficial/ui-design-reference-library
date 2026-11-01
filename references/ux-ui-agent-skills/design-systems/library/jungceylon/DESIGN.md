---
version: alpha
name: Jungceylon
category: "Thai Brands"
description: "Jungceylon (Patong, Phuket) is a resort-town shopping mall whose homepage pairs a magenta Cormorant Garamond 600 serif headline (#ed008c, 40px) with plain Arial and Helvetica-style hv_ body copy on a white canvas, a dark grey #3f3f3f navigation strip, black rectangular READ MORE buttons with zero radius, and loud photographic banners in the Phuket tropical palette."

colors:
  canvas: "#ffffff"
  ink: "#444444"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-grey: "#dbdbdb"
  nav-bar: "#3f3f3f"
  ink-warm: "#231f20"
  ink-strong: "#171717"
  brand-magenta: "#ed008c"
  hairline: "#e8e8e8"

typography:
  display:
    fontFamily: "\"Cormorant Garamond\""
    fontSize: 40px
    fontWeight: 600
  display-mobile:
    fontFamily: "\"Cormorant Garamond\""
    fontSize: 22px
    fontWeight: 600
  heading:
    fontFamily: Arial
    fontSize: 20px
    fontWeight: 400
  button:
    fontFamily: hv_75, Arial, sans-serif
    fontSize: 21px
    fontWeight: 400
    lineHeight: 18.5px
    letterSpacing: 0.1px
  nav:
    fontFamily: hv_45, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px

rounded:
  xs: 4px
  none: 0px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 8.5px
  s5: 17px
  s6: 18.5px
  s7: 19px
  s8: 20px
  s9: 23.5px
  s10: 25.5px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 17px 6px
    height: 33px
  nav:
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 2px 23.5px 1.5px
---

## Overview

Jungceylon presents itself on its English homepage as "Jungceylon Phuket, Beyond Shopping Experience, Your Complete Lifestyle Destination", and describes the property as "the international shopping mall that serves as Phuket's lifestyle landmark" (page opened at https://www.jungceylon.com/). The visual system is built for a tourist audience: the language switcher in the top-right offers English, Chinese and Thai, the footer lists WeChat, Weibo, Xiaohongshu, LINE, TikTok, Instagram and Facebook, and the centre banner carries Chinese captions beneath English ones. The site is therefore bilingual-by-default in its typography as well, loading Noto Sans SC alongside Cormorant Garamond and the hv_ family.

The design character is a hybrid. The top of the page is quiet and editorial: a centred logo on white, a single dark grey navigation bar, and a serif magenta statement set in capitals. Below it the page becomes a retail promotion board with saturated photographic banners (a pink hero with a yellow handbag, a blue Tourist Privilege Card strip, tiles for events and promotions) that bring all the colour. The interface chrome itself stays almost monochrome so that campaign artwork does the selling.

Four zones, The Jungle, The Bay, The Garden and The Botanica, each have their own coloured logotype in the capture, and a zoning row sits under a hairline rule with a small palm-tree icon. Section headings (Explore, Events, Promotions) repeat the same pattern: a magenta serif label with a small pictogram, centred on a thin horizontal rule. This repeated "label on a rule" device is the main structural motif of the page.

## Colors

The measured page background is #ffffff and it dominates the capture. Reading ink is #444444 (the most-read text colour), with #231f20 and #171717 as darker alternatives; #171717 is also the site's own `--foreground` custom property, alongside `--background: #fff`. Hero headings use brand magenta #ed008c, the single saturated interface colour. Neutral surfaces measured on the page are #dbdbdb and #3f3f3f; the second matches the dark navigation strip in the capture. A light #e8e8e8 hairline is the one measured border colour.

Primary is #000000: the READ MORE buttons under each editorial card are solid black with white (#ffffff) labels, which is the only button style the extractor found. The magenta is used for type and icons rather than for filled controls, so it is recorded as `brand-magenta` and not as the action colour.

Third-party colours that appear in the capture, the promotional banners and the zone logotypes, belong to campaign artwork and are not tokens.

## Typography

The display face is Cormorant Garamond at weight 600. The h1 block (three centred lines, in capitals) measures 40px on desktop and 22px at the 390px mobile viewport. Navigation and interface text use the hv_ family: hv_45 for the navigation labels at 22px with a 33px line height, hv_55 on the body element, and hv_75 for the button label at 21px with 0.1px letter spacing. Intro paragraphs under the headline use Arial at 20px, weight 400. The hv_ files are loaded by the site as web fonts (loaded fonts: hv_45, hv_55, hv_75, Cormorant Garamond 600 and 700, Noto Sans SC 400 and 700); I did not find a foundry page for them, so no licence or substitution claim is made. If hv_ cannot be used, Arial (already the declared fallback) is the closest honest stand-in; Cormorant Garamond is an open-source Google font.

Capitalisation is a voice choice: navigation items (EXPLORE, HAPPENING, SHOPPING, DINING, DIRECTORY, TOURIST, FAQ, MORE+) and the headline are uppercase in the source copy, while card titles and body copy are sentence case.

## Layout

The page is a single centred column on a 1280px desktop measurement. A utility row at the top holds Search and the language switch; the logo is centred below it; the navigation strip spans the full width with centred items; the hero carousel sits inset with page margins and a rounded corner. Content blocks alternate between a centred text block, a four-up zoning row separated by vertical hairlines, a two-up editorial card pair, a wide full-bleed promotional strip and a four-up row of event and promotion tiles. Vertical gaps measured in the code are 19px, 20px and 42.5px; the measured spacing steps run 2px, 4px, 8px, 8.5px, 17px, 18.5px, 19px, 20px, 23.5px and 25.5px, and navigation links carry 23.5px side padding.

## Elevation & Depth

The site is essentially flat. Only one shadow was measured, rgba(204, 204, 204, 0.5) 0px 2px 10px 0px, a soft grey lift for a floating element, and depth otherwise comes from photography and from the contrast between the dark navigation bar and white sections. Hairlines (#e8e8e8) and thin rules around section labels do the separating work that shadows do on other sites. Do not add card shadows or glassy panels; they are foreign to the page.

## Shapes

Interface geometry is square. The black READ MORE button, the navigation items and the navigation bar all measure a border radius of 0px. Small rounded exceptions exist: 4px on one element, and 999px and 9999px pill radii on a handful of elements (six at 9999px, one at 999px); the extractor does not say which elements these are, so the tokens record the values and no role. The measured radius set contains only 0px, 4px and the pill values. Square buttons with a short, wide label are the signature shape.

## Components

**Primary button.** READ MORE: black (#000000) fill, white label, hv_75 at 21px, 0.1px letter spacing, 33px high, padding 8px 17px 6px, radius 0px. It sits centred on a thin rule below each editorial card, so the line passes behind the button and the button interrupts the line.

**Navigation.** One strip of seven labelled items plus MORE+, white label text in hv_45 at 22px on the dark bar, each with 23.5px of horizontal padding. On hover the measured state flips the label from white to black with a black border, indicating the bar background lightens under the pointer.

**Section label.** Magenta Cormorant Garamond caps flanked by hairlines, led by a small pictogram (palm tree, compass, tag). Reuse this pattern for any new section.

**Editorial card.** A wide photograph with a caption overlay at its foot, a two-line sans-serif title, three lines of grey excerpt and the READ MORE button. Two sit side by side.

**Promotion strip.** Full-width artwork banner (the Tourist Privilege Card). It is an image, not a coded component, so do not rebuild it in CSS.

## Design System Architecture

No public design system, token package or brand guideline for Jungceylon was found. The brand and press paths I tried on the site (/about, /brand, /press, /about-us, /design) returned 404 and the homepage names no design documentation (research recorded in SOURCES.json). The de-facto system is therefore inferred from the shipped page: the custom properties on the root are Tailwind-style (`--spacing: .25rem`, `--color-gray-500`, `--default-transition-timing-function: cubic-bezier(.4,0,.2,1)`, `--ease-out`), plus `--background: #fff`, `--foreground: #171717`, `--font-cormorant` and `--font-noto-sans-sc`. The naming suggests a Tailwind-based build with the fonts exposed as variables, while the older hv_ interface fonts are applied directly to elements. Primary source: https://www.jungceylon.com/ . In practice the system is "three font roles, black or magenta, square corners, imagery supplies the colour".

## Do's and Don'ts

Do keep the canvas white and let campaign photography carry saturated colour. Do set statement headings in Cormorant Garamond 600 in #ed008c and keep them uppercase. Do use the black square READ MORE button for every card action, and centre it on a hairline. Do keep copy bilingual-friendly: short English lines with room for Chinese and Thai captions.

Don't round the buttons or add drop shadows to cards. Don't fill buttons with magenta, which the measurements show only on type and icons. Don't mix more than the three font roles, and don't reuse zone logo colours for the interface. Don't write promotional text in the display serif; it is reserved for section headings.

## Responsive Behavior

The extraction measured a 390px mobile viewport next to the 1280px desktop. The h1 drops from 40px to 22px, both Cormorant Garamond 600, a clear step down for the long three-line headline. I did not inspect a mobile screenshot or the breakpoints, so I make no claim about how the navigation, the zoning row, the editorial cards or the promotion tiles reflow; verify that on the live site before specifying it.

## Iteration Guide

When adding a page, start from white, add the dark navigation strip, then a centred Cormorant Garamond headline in #ed008c. Build content from the editorial card and the label-on-a-rule heading. Use only tokens in the front matter: #444444 for body text, #000000 for buttons, #e8e8e8 for rules. If a new accent is needed, prefer to adapt the artwork and not the interface colours. To verify a change, compare against the live homepage at https://www.jungceylon.com/ and re-run the verification script for this slug.
