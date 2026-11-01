---
version: alpha
name: Mega Bangna
category: "Thai Brands"
description: "Mega Bangna (Megabangna, ศูนย์การค้าเมกาบางนา) is the east-Bangkok family shopping centre whose official site at mega-bangna.com uses DB Heavent Rounded Thai type at 50px and 36px in slate #425055 on a white canvas, MyriadPro body copy at 16px, a Mega red #e2211c square-cornered sign-up button, and loud seasonal promotional banners."

colors:
  canvas: "#ffffff"
  ink: "#425055"
  primary: "#e2211c"
  on-primary: "#ffffff"
  brand-red-deep: "#ca0101"
  surface-soft: "#f8f8f8"
  surface-mid: "#ebebeb"
  ink-muted: "#a2a2a2"
  ink-faint: "#a6a6a6"
  ink-black: "#000000"
  ink-dark: "#484848"
  hairline: "#d0d1d1"
  button-border: "#dddddd"

typography:
  display:
    fontFamily: db_heaventroundedmed
    fontSize: 50px
    fontWeight: 400
    lineHeight: 45px
  heading:
    fontFamily: db_heaventroundedmed
    fontSize: 36px
    fontWeight: 400
    lineHeight: 32.4px
  subheading:
    fontFamily: db_heaventroundedbold
    fontSize: 24px
    fontWeight: 400
    lineHeight: 28.8px
  body:
    fontFamily: MyriadPro-Regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: db_heaventroundedregular
    fontSize: 20px
    fontWeight: 400
  link:
    fontFamily: db_heaventroundedregular
    fontSize: 26px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: db_heaventroundedregular
    fontSize: 19px
    fontWeight: 400

rounded:
  xs: 7px
  sm: 10px
  none: 0px

spacing:
  s1: 5px
  s2: 7px
  s3: 10px
  s4: 15px
  s5: 20px
  s6: 30px
  s7: 40px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 5px 20px
    height: 35px
    borderColor: "{colors.button-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 7px 15px
    height: 35px
---

## Overview

An important correction first: the address that appears in popular lists, megabangna.com, does not serve the mall. When opened it is an unrelated image-sharing and discussion site titled "megabangna | Image and discussion community". The mall's own site, titled "ศูนย์การค้าเมกาบางนา แหล่งช้อปปิ้งที่ใหญ่ที่สุดของกรุงเทพฯ ฝั่งตะวันออก | Megabangna", lives at https://www.mega-bangna.com/ and is the page measured here. The extraction for this slug was re-run against that address.

The site positions the mall as "the largest shopping centre on Bangkok's east side" and a family meeting place. Its About page gives the tagline "แหล่งเรียนรู้ไม่รู้จบ เติมเต็มไลฟ์สไตล์ มอบความสุขให้ทุกครอบครัว", roughly an endless learning hub that fills out lifestyle and brings happiness to every family. The brand sub-areas named in the navigation and copy are Mega Food Walk, Mega Smart Kids, Mega Park, Mega Smile Rewards (the loyalty programme) and MEGACITY.

Visually the page is a retail promotion board in a quiet frame. Interface chrome is white and slate; everything loud arrives with campaign artwork. The capture shows a full-width hero carousel with a Halloween promotion in orange and red, a centred Thai headline in slate, a "WHAT'S HAPPENING" section with three portrait promotion tiles, and a "PR NEWS" section of three more. Tile captions carry a small category label (Promotion, News & Events, PR NEWS) above a rule, a bold title, a one-line summary and a thin arrow glyph, which is the whole card pattern.

## Colors

The page background is #ffffff. The most-read text colour is slate #425055, used for headings and body copy alike, which gives Thai text a softer, cooler weight than pure black. Pure black #000000 and #484848 appear as secondary text, and two greys, #a2a2a2 and #a6a6a6, are used for light captions and placeholder-style text.

The brand colour is Mega red. The only filled button measured, the สมัคร (subscribe) button, uses #e2211c with white text. A deeper red, #ca0101, is the largest measured background by area in the extraction; it is a section or footer fill and I did not isolate which element it belongs to, so the token is named `brand-red-deep` and not given a component role. Light neutral surfaces are #f8f8f8 and #ebebeb. Hairlines are #d0d1d1, and the red button carries a #dddddd border.

## Typography

Headings use DB Heavent Rounded, a Thai-and-Latin rounded face loaded as three separate web fonts: db_heaventroundedmed for the h1 (50px, line height 45px) and h2 (36px, line height 32.4px), db_heaventroundedbold for the 24px subheading, and db_heaventroundedregular for the 20px button, the 26px link style and the 19px input. Body copy and the longer descriptive paragraphs use MyriadPro-Regular at 16px with a 19.2px line height. The weight value in CSS is 400 throughout; weight differences come from choosing a different font file, not from font-weight, so reproductions must either load the matching files or map them to real weights.

Because Thai script has tall ascenders and stacked vowel marks, headings run at a line height smaller than the font size (45px for 50px, 32.4px for 36px). This is a measurement of what the site ships, and it implies tight Thai headings. I did not find a licence page for the fonts and make no claim about substitutes; if they are unavailable, any rounded Thai sans with comparable proportions is the closest in spirit.

## Layout

A top bar and primary navigation (HOME, WHAT'S HAPPENING, MEGA SMILE REWARDS, Store Guide, Service Guide, Newsletter, MEGACITY, WORK WITH US) sit above the hero. The hero carousel runs edge to edge with pagination dots beneath. Below it a centred text block carries the h1, an h2 and a descriptive paragraph, then content sections with a centred uppercase title and a grey sub-caption ("Event / Promotion / News"), followed by a three-up card row. The spacing scale measured in the CSS is 5px, 7px, 10px, 15px, 20px, 30px and 40px; inputs use 7px 15px padding and the button 5px 20px. A vertical tab labelled "CONNECT WITH US" is fixed to the right edge in the capture.

The footer has About Us (company information, privacy policy, cookie policy, employee data protection policy), Customer Relations (contact, newsletter sign-up, service guide, store directory), and opening hours (10.00 น. - 22.00 น. daily).

## Elevation & Depth

Depth is minimal. Surfaces are separated by the soft greys #f8f8f8 and #ebebeb and by #d0d1d1 hairlines under card captions. No shadow values were measured on the page, so no shadow tokens are recorded. The fixed right-edge tab and the hero's floating logo badge in the capture are the only elements that visually sit above the page, and I did not measure either, so I do not specify them.

## Shapes

Controls are square. The red button, the link style and the text input all measure a radius of 0px, and the button has a light #dddddd border. The measured radius set also contains 7px and 10px; they exist in the CSS and are kept as `xs` and `sm`, but I could not attribute them to a specific component, so the guidance is to default to square and treat those two as available for small containers only. There are no pills.

## Components

**Subscribe button.** สมัคร: #e2211c fill, #ffffff label in db_heaventroundedregular 20px, 35px tall, padding 5px 20px, radius 0px, border #dddddd. It appears in the newsletter section on the page and again in the footer, and invites visitors to register for the newsletter.

**Text input.** White background, black text, 19px db_heaventroundedregular, 35px tall, padding 7px 15px, radius 0px, used alongside the subscribe button.

**Link.** 26px db_heaventroundedregular in slate #425055 with a 24px line height, the standard text link style.

**Promotion tile.** Square or portrait artwork, then a category label, hairline, bold title and short summary, with an arrow glyph at the bottom left. The tile image carries the colour; the text stays slate.

**Section heading.** Uppercase Latin title ("WHAT'S HAPPENING", "PR NEWS") centred in slate, with a lighter grey caption below.

## Design System Architecture

No public design system, brand guideline, press kit or token repository was found for Mega Bangna. The page paths /brand, /press and /design on the official domain did not lead to any design documentation when requested, and the About page contains company copy only. The de-facto system is therefore read from the shipped page: web fonts named in a flat scheme (db_heaventrounded + regular, med, bold; MyriadPro-Regular), icon and carousel fonts named 'FontAwesome' and 'slick' in the loaded font list, and square 0px controls. Sources: https://www.mega-bangna.com/ and https://www.mega-bangna.com/about-us . Treat the system as "slate text, one red action colour, campaign art supplies the rest".

## Do's and Don'ts

Do use #425055 for headings and body text and reserve #e2211c for the one primary action on a surface. Do keep controls square. Do let promotional photography fill the width of the hero and tiles. Do write section titles in uppercase Latin with a grey caption, and keep Thai headings at tight line height.

Don't use pure black for headings; it is a secondary ink here. Don't round the buttons. Don't use the deep red #ca0101 as a button fill without confirming where it belongs on the live page. Don't use the domain megabangna.com as a reference; it is not the mall. Don't invent new type weights: the three DB Heavent Rounded files are the weights.

## Responsive Behavior

The extraction measured desktop (1280px) and a 390px mobile viewport, but the tokens come from the desktop pass. Beyond that I did not inspect mobile layouts, so I make no claim about breakpoints or how the three-up card rows stack.

## Iteration Guide

Start with a white canvas and slate (#425055) text. Place the hero artwork first, then a centred Thai h1 in db_heaventroundedmed at 50px, followed by an h2 at 36px. Use the card pattern for news and promotions, the red button for subscribing, and the three-file DB Heavent Rounded set for weights. Verify any new surface against https://www.mega-bangna.com/ and re-run the verification script for this slug.
