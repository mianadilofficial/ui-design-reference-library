---
version: alpha
name: Future Park Rangsit
category: "Thai Brands"
description: "Future Park Rangsit and ZPELL (futurepark.co.th) is a Thai mall site on a warm off-white #fafafa canvas set in LINE Seed Sans TH, with 32px bold uppercase headlines in charcoal #44424a, fresh teal #2dd4cd section eyebrows, a deeper #13afab for links and outlined buttons, soft lime-to-mint gradient bands, and generous 15px to 32px rounded cards."

colors:
  canvas: "#fafafa"
  ink: "#44424a"
  primary: "#2dd4cd"
  surface-white: "#ffffff"
  ink-light: "#94929e"
  ink-soft: "#5b5964"
  ink-mid: "#777582"
  ink-deep: "#4f4d57"
  hairline: "#eaeaea"
  link: "#13afab"
  input-text: "#333333"
  footer-navy: "#1c244b"

typography:
  display:
    fontFamily: "\"LINE Seed Sans TH\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"LINE Seed Sans TH\", sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
    textTransform: uppercase
  heading:
    fontFamily: "\"LINE Seed Sans TH\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
    textTransform: uppercase
  body:
    fontFamily: "\"LINE Seed Sans TH\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: "\"LINE Seed Sans TH\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px

rounded:
  xs: 7px
  sm: 8px
  md: 15px
  lg: 16px
  xl: 20px
  2xl: 22px
  3xl: 24px
  4xl: 32px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7.5px
  s6: 8px
  s7: 10px
  s8: 11px
  s9: 12px
  s10: 13px

components:
  button-secondary:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    padding: 15px 20px
    height: 54px
    borderColor: "{colors.link}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-mid}"
  text-input:
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 8px
    height: 39px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.input-text}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.footer-navy}"
---

## Overview

The site is titled "Future Park & ZPELL | The Ultimate Shopping Destination" and is the shared home of Future Park Rangsit and ZPELL, two centres operated by Rangsit Plaza Company Limited (About page at https://www.futurepark.co.th/about-us/). The About page calls Future Park "the only shopping center in Thailand located on the best location of northern Bangkok" and ZPELL "a lifestyle center of northern Bangkok" that blends fashion, dining and modern living with nature, quotes headline figures (600,000 sq.m. of construction area, 1,100+ shops, 10 major department stores, 145,000 daily users) and gives the tagline "Because good experience is the power of our growth."

The interface is calm and digital-first, closer to an app than a printed directory. A hamburger on the left, the FUTURE PARK & ZPELL logotype centred (the wordmark mixes charcoal capitals with olive-green and teal letters), and a TH language selector on the right sit above a full-width aerial photograph of the two buildings. Below it, sections are introduced by a small teal eyebrow in uppercase (EVENTS & PROMOTIONS, CATEGORIES, DIRECTORY) followed by a large uppercase charcoal headline (DISCOVER MORE EVERY DAY, EVERYTHING YOU NEED). The events band sits on a soft lime-to-mint gradient, categories are tall photographic cards, and the rest of the page is the pale off-white canvas.

Navigation items in Thai are Shops, F-MEMBER, Events & Promotions, For Tourists, What's New, Directories, Services, For Society (ESG) and About Us. Other section headings include HIGHLIGHT SHOP, "Unlock More with Membership", PARTNER OFFERS and "WHAT'S NEW? LIFE AT FUTURE PARK", and the calls to action are English text links: View all events, View Map Directory, View all offers, View all articles, Get Direction, Explore More. Opening hours are shown as Monday to Thursday 10:30 to 21:30, Friday 10:30 to 22:00, weekends and holidays 10:00 to 22:00.

## Colors

The canvas is #fafafa, a neutral off-white that reads slightly warmer than pure white. White (#ffffff) is the surface for cards, the navigation and the footer, so cards separate from the page by a tiny step. Ink is #44424a, a purple-tinted charcoal that sets headlines and body text alike; three nearby greys, #5b5964, #4f4d57 and #777582, handle secondary copy and the navigation, and #94929e is the lightest text grey (dates, captions). Inputs use #333333 text and a #eaeaea hairline.

The brand accent is teal. #2dd4cd is the eyebrow label colour and the measured primary; #13afab is the deeper teal used for links and the outlined button. Footer text is navy #1c244b. The soft gradient behind the events band and the lime-green card tints in the category photographs are part of the artwork and gradient treatment; their individual colour stops were not measured, so they are not tokens. A rose #cc3366 value was measured on an empty navigation link, not a visible brand colour, and was dropped.

## Typography

LINE Seed Sans TH carries nearly all the text (loaded at 700 and 400). Page headlines are 32px at weight 700 on a 40px line height, uppercase; on a 390px mobile viewport the same style measures 28px on a 35px line height. Section eyebrows and card headings are 20px at 700 on a 25px line height, uppercase. Body copy is 16px regular on 22px, and form inputs are 14px on 21px. Navigation links are set in the system UI stack at 16px with a 24px line height.

The pairing of a Thai-capable geometric sans with uppercase Latin headlines lets event titles mix Thai and English (for example "FUTURE PARK : ACTIVE REWARDS" beside a Thai headline for the Zweet Mania festival). Font Awesome (5 and 6 Free, solid weight) supplies the chevrons, arrow and map icons. I did not open a foundry page for LINE Seed Sans TH, so I state no licence terms; the site loads it itself.

## Layout

A full-bleed hero carousel with pagination dots comes first. Sections then run at roughly a content-column width with left-aligned headings and right-aligned "View all" links. Event cards scroll horizontally and bleed off the right edge to suggest more, with circular previous and next controls under the row. Each event card is an image with rounded corners, a grey date and category line ("26 ส.ค. 2026 | กิจกรรม"), a two-line title and a small teal arrow. A pill-shaped filter (All, Campaigns and Promotions, Activities) sits above the events row, with the active pill filled dark. Category cards are tall portrait photos with a white label at the top left and a small dark circular arrow button at the bottom right. Measured spacing steps run from 2px to 13px (2, 4, 5, 6, 7.5, 8, 10, 11, 12, 13px), and the outlined button pads 15px by 20px.

## Elevation & Depth

Depth is very light. The only shadow measured is rgba(0, 0, 0, 0.03) 0px 6px 10px 0px, practically a hairline lift for a card or the header. Separation otherwise comes from the white-on-off-white step, the #eaeaea hairlines, the pale gradient band behind the events, and photography. Avoid stronger shadows; they would break the airy tone.

## Shapes

Rounded corners are a defining trait. The measured radii are 7px, 8px, 15px, 16px, 20px, 22px, 24px and 32px, plus pills at 9999px. Inputs and small controls use 8px, cards use 15px, and large photographic cards climb through the 20px to 32px range. The filter pills and the circular arrow controls are fully round. There are no square corners on images.

## Components

**Outlined button.** Teal outline in #13afab, teal label in 16px LINE Seed Sans TH, 54px tall, padding 15px 20px. No solid primary button was detected on the page, so none is defined. Text links ("View all events", "Explore More") use the same teal.

**Event card.** Rounded image, grey meta line, title, teal arrow glyph.

**Category card.** Portrait photograph with label top-left and a dark round arrow button bottom-right.

**Filter pills.** A grey pill track with a dark selected pill.

**Text input.** 14px text in #333333, 8px radius, 8px padding, 39px tall and a #eaeaea border.

**Card surface.** White background, #333333 text, 15px radius.

**Header and footer.** White surfaces; footer text navy #1c244b.

## Design System Architecture

No public design system, brand guideline or token package for Future Park was found. The About page contains company description and statistics only, and the /press and /design paths on the site returned 404; the /brand path redirected to a store page. The de-facto system is read from the shipped page: a WordPress theme (the root carries `--wp--preset--*` variables, including `--wp--preset--font-size--large: 36px` and a `--wp--preset--shadow--outlined`), Font Awesome 5 and 6, and LINE Seed Sans TH as the single text family. Those WordPress presets are theme defaults and not brand values. Primary sources: https://www.futurepark.co.th/ and https://www.futurepark.co.th/about-us/ .

## Do's and Don'ts

Do use #fafafa as the page and white for raised surfaces. Do set headlines in 700 weight uppercase with a small teal eyebrow above. Do round every image and card, using 15px for ordinary cards and up to 32px for hero-like ones. Do keep links and outlines in the deeper teal #13afab and eyebrows in #2dd4cd. Do mix Thai and English headings freely.

Don't use heavy shadows or hard borders. Don't use #cc3366 as a UI colour. Don't set Thai text in the system stack; reserve the system stack for navigation, as the site does. Don't introduce a solid primary button colour without verifying it on the live site.

## Responsive Behavior

The extraction covered a 390px mobile viewport: the headline style drops from 32px (line height 40px) to 28px (line height 35px). Events and categories are horizontally scrolling rows on desktop. I did not inspect mobile layouts further, so I make no claim about breakpoints or card widths on small screens.

## Iteration Guide

Build new sections as: teal uppercase eyebrow (20px, 700), charcoal uppercase headline (32px, 700), then a horizontally scrolling row of rounded cards on a white surface over the #fafafa canvas, with a teal "View all" link on the right. Use LINE Seed Sans TH 16px for body copy. Compare against https://www.futurepark.co.th/ and re-run the verification script for this slug.
