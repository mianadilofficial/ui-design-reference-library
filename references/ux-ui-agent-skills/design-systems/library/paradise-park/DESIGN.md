---
version: alpha
name: Paradise Park
category: "Thai Brands"
description: "Paradise Park (ห้างพาราไดซ์ พาร์ค), an MBK Group mall on Sri Nakarin Road, Bangkok: white canvas, dark #323232 text, orange #fe5706 and lime #93d500 accents, the proprietary dbo_zone_x Thai typeface, pill buttons at 50px radius and 10px cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#323232"
  primary: "#fe5706"
  surface-lime-tint: "#c7e494"
  ink-black: "#000000"
  ink-brown: "#402020"
  accent-lime: "#93d500"
  accent-orange: "#ff7f30"
  hairline-gray: "#cccccc"
  text-input-text: "#495057"
  text-input-border: "#ced4da"
  card-border: "#e5e5e5"
typography:
  display:
    fontFamily: dbo_zone_x, dbo_zone_x_light, fontawesome, far, fas, fab
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  heading:
    fontFamily: dbo_zone_x, dbo_zone_x_light, fontawesome, far, fas, fab
    fontSize: 35px
    fontWeight: 700
    lineHeight: 42px
    textTransform: uppercase
  subheading:
    fontFamily: dbo_zone_x, dbo_zone_x_light, fontawesome, far, fas, fab
    fontSize: 26px
    fontWeight: 700
    lineHeight: 31.2px
    textTransform: capitalize
  body:
    fontFamily: dbo_zone_x, dbo_zone_x_light, fontawesome, far, fas, fab
    fontSize: 21px
    fontWeight: 400
    lineHeight: 27.3px
  nav:
    fontFamily: dbo_zone_x
    fontSize: 17px
    fontWeight: 700
    lineHeight: 22.1px
    textTransform: uppercase
  button-secondary:
    fontFamily: dbo_zone_x, dbo_zone_x_light, fontawesome, far, fas, fab
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
  input:
    fontFamily: dbo_zone_x, dbo_zone_x_light, fontawesome, far, fas, fab
    fontSize: 19.008px
    fontWeight: 400
    lineHeight: 28.512px
rounded:
  xs: 3px
  sm: 6px
  md: 10px
  lg: 14px
  xl: 15px
  2xl: 50px
  3xl: 100px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 7.5px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-brown}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 5px 30px
    height: 44px
    borderColor: "{colors.ink-brown}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 10px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.canvas}"
---

## Overview

Paradise Park (ห้างพาราไดซ์ พาร์ค) is a shopping centre at 61 Sri Nakarin Road, Bangkok, run under the MBK Group umbrella; the homepage footer lists the MBK Contact Center number 1285 and an mbkgroup.co.th email address. The site positions the mall around "Health & Wellness" and the tagline "LIVING IN HARMONY ใส่ใจการใช้ชีวิต กินดี อยู่ดี สุขภาพดี". The measured homepage is a Thai-language page (html lang th) with an English toggle.

The visual impression in the capture is a friendly, bright, family-oriented mall site rather than a luxury one. A thin gradient strip runs across the very top, moving from green on the left to orange on the right, holding the contact center number, an email address and a row of social icons. Below it a white header carries the serif PARADISE PARK wordmark with a small leaf, a single row of uppercase Thai navigation links and a rounded search box. The hero is a full-width carousel of illustrated campaign banners; at capture time it showed an autumn Bangkok Farmers Market illustration with cartoon vegetable characters, a pumpkin child and a date badge. Imagery therefore comes from campaign artwork, not photography.

The page then drops into long centred text blocks: a short brand statement, opening hours (weekdays 10.30 - 21.00, weekends and public holidays 10.00 - 21.00, as printed on the page), and a "recommended shops" strip of white cards with a store logo, store name, a zone label in orange and a room code. Content sections are separated by pale patterned backgrounds rather than hard rules.

## Colors

The canvas is white (#ffffff) and the largest non-white page area is a light gray (#f5f5f5). Body copy is a neutral dark gray, `ink` #323232, which is the most-read text color in the extraction. A true black (`ink-black` #000000) and a deep brown (`ink-brown` #402020) also appear in text; the brown is the color of the outlined secondary button label and border.

Brand accents are three saturated hues taken from the top gradient and headings. `accent-lime` #93d500 colors the h2 and h3 headings ("LIVING IN HARMONY ..." and the opening-hours title), `accent-orange` #ff7f30 is a lighter orange used for text, and `primary` #fe5706 is the most saturated action/link orange measured. `surface-lime-tint` #c7e494 is a soft green background area. Hairlines are `hairline-gray` #cccccc, with form borders at #ced4da and card borders at #e5e5e5.

The site's stylesheet also exposes Bootstrap defaults (for example a danger red and a success green) and a few custom variables with a "-cz" suffix such as --orange-cz #ff7f30, --main2-lightgreen-cz #c1cb29, --main2-brown-cz #4e0d00 and --main-lightblue-cz #00b2e3. These show the intended brand palette is orange, green and brown, with a cyan-blue used for small badges such as the numbered tags on the recommended-shop cards. Only values present in the frontmatter should be reused as tokens.

## Typography

Every text role uses the proprietary Thai face `dbo_zone_x` (with a light companion, dbo_zone_x_light), followed by Font Awesome icon fonts in the stack. It is a rounded, friendly Thai display and text face. The site loads only this family for text, so there is no separate Latin face; Latin characters in headings and the nav are drawn from the same font.

The measured scale is: display (the h1) 32px at weight 700 with 38.4px line height; heading (h2) 35px, 700, 42px line height and uppercase; subheading (h3) 26px, 700, 31.2px, capitalised; body 21px at 400 with 27.3px line height; navigation 17px at 700, 22.1px, uppercase; the secondary button label 20px at 700 with 32px line height; and form input text 19.008px at 400 with 28.512px line height. Note that the h2 is larger than the h1 in this layout: the h1 is a quiet brand label ("PARADISE PARK") and the green h2 is the visible headline.

Substitutes: dbo_zone_x is not publicly licensed on the page; for reuse, Kanit or Prompt (Google Fonts, rounded-friendly Thai faces) are reasonable stand-ins, though they are not measured on this site.

## Layout

The page is a single centred column at a measured desktop width of 1280px, with text blocks about 1122px wide inside it. The breakpoint variables inherited from Bootstrap are 768px (md) and 1200px (xl). Sections stack vertically: hero carousel, intro statement, opening hours in two columns, a recommended-shops row of four equal cards, then zone descriptions. Spacing tokens measured on the site are small: 2, 3, 5, 6, 7, 7.5, 8, 10, 12 and 14px, which fit tight component padding (cards use 10px, inputs 6px 12px). Section gaps are produced by generous empty vertical space, visible in the capture as large blank bands between blocks, rather than by a spacing token.

## Elevation & Depth

Depth is minimal. The extraction recorded no box shadows on the body, headings or buttons. Cards are separated from the page by a 1px #e5e5e5 border and a 10px radius; the header is separated from the hero by a light edge. The only layered effect is the hero banner artwork and the small badge tabs overlapping the corner of each shop card ("RECOMMENDED" ribbon in black, a numbered cyan tab).

## Shapes

The radius scale measured on the site is 3px (xs), 6px (sm), 10px (md), 14px (lg), 15px (xl), 50px (2xl) and 100px (3xl). The secondary button uses the 50px value, which makes it a pill; cards use 10px; inputs sit close to Bootstrap's softer corners. The search field in the header is a gently rounded rectangle, and the shop logos sit inside rounded white tiles. Pills and soft corners match the cheerful tone of the illustrated banners.

## Components

**Secondary button** ("ดูเพิ่มเติม" / see more): white background, #402020 text and 1px #402020 border, 50px radius, 5px 30px padding, 44px tall, 20px bold text. The extractor found no filled primary button, so no `button-primary` token is declared; the orange action color is used on zone labels and links instead.

**Navigation**: a single row of 17px bold uppercase links in the header. In the measured data the nav text color is white (it is also used over the gradient top bar), so the dark links in the capture belong to the white header variant.

**Text input**: white background, #495057 text, 1px #ced4da border, 6px 12px padding, 38px high, 19px type, as used by the search box.

**Card**: 10px radius, 10px padding, 1px #e5e5e5 border, holding a logo tile, store name, a gift icon row and zone and room labels in orange.

**Links**: body-colored (#323232) with the body type style.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened (the homepage links only to about-us and contact style pages). The de-facto system is a Bootstrap 4 based theme: the stylesheet root exposes Bootstrap color variables (--light #f8f9fa, --gray-dark #343a40, --success #28a745, --danger #dc3545) and breakpoint variables (--breakpoint-md 768px, --breakpoint-xl 1200px), plus brand-specific "-cz" variables for the orange, lime, brown and blue colors. Icons come from Font Awesome (versions 5 and 7 are both loaded), and the hero uses the Slick carousel library. Source: https://www.paradisepark.co.th/ (homepage and its stylesheet as measured by the extractor).

## Do's and Don'ts

Do keep the page white with dark gray #323232 text and let orange and lime carry the brand. Do use the pill radius (50px) for outlined buttons and 10px for cards. Do write headings in the mix of Thai and English used on the site, with the green h2 as the main headline.

Don't introduce a filled primary button color that is not measured; the site has none in its extraction. Don't use Bootstrap's browser-default blue links. Don't treat the cookie banner, the floating side tab or the back-to-top controls as brand UI. Don't use heavy shadows; the site is flat.

## Responsive Behavior

The extraction includes a mobile pass, and the stylesheet root declares Bootstrap breakpoint variables --breakpoint-md 768px and --breakpoint-xl 1200px. No mobile-specific type or layout values were recorded for this site; mobile layout is not measured.

## Iteration Guide

Start from the frontmatter tokens; never invent new hex values. For a new page, begin with white canvas and #323232 body at 21px. Add one green h2 headline at 35px uppercase, one outlined pill button, and cards with a 1px #e5e5e5 border. Use orange sparingly for small labels, and keep illustrated campaign artwork as the only decoration. If a primary filled button is needed, measure one on the live site first and add it with a source. Re-run the verification gate after every token edit.
