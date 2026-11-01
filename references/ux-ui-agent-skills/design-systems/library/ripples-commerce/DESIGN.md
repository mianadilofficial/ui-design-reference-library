---
version: alpha
name: "Ripples Commerce"
category: "Thai Brands"
description: "Ripples Commerce e-commerce agency site: white canvas with black ink, a #0063ff blue pill CTA (14px 24px padding, 48px high), Montserrat display text at 96px and 102.4px with negative tracking, pale blue-violet gradient hero wash, and leaf-shaped image masks with 280px and 300px corner radii."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0063ff"
  on-primary: "#ffffff"
  surface-2: "#faf9f6"
  ink-4: "#d8fafe"
  hairline: "#9adbff"
  link: "#f1f3f8"
  link-border: "#b8a5ff3d"
typography:
  display:
    fontFamily: Montserrat, sans-serif
    fontSize: 96px
    fontWeight: 400
    lineHeight: 86.4px
    letterSpacing: "-3px"
    textTransform: capitalize
  display-mobile:
    fontFamily: Montserrat, sans-serif
    fontSize: 58.5px
    fontWeight: 500
    lineHeight: 58.5px
    textTransform: capitalize
  heading:
    fontFamily: Montserrat, sans-serif
    fontSize: 102.4px
    fontWeight: 500
    lineHeight: 122.88px
    letterSpacing: "-5px"
    textTransform: uppercase
  body:
    fontFamily: Montserrat, sans-serif
    fontSize: 25.6px
    fontWeight: 500
    lineHeight: 33.28px
  button:
    fontFamily: Montserrat, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: 1px
    textTransform: capitalize
  link:
    fontFamily: Montserrat, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  button-secondary:
    fontFamily: Montserrat, sans-serif
    fontSize: 15.36px
    fontWeight: 500
    lineHeight: 10px
    letterSpacing: "-0.48px"
rounded:
  xs: 16.8px
  sm: 20px
  md: 60px
  lg: 80px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12px
  s3: 12.8px
  s4: 14px
  s5: 16px
  s6: 20px
  s7: 25.6px
  s8: 32px
  s9: 38.39px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 24px
    height: 48px
  button-secondary:
    textColor: "{colors.ink-4}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 36px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.link-border}"
---

## Overview

Ripples Commerce (title "Ripples Commerce", ripplescommerce.com) is an e-commerce services agency. The capture shows a soft blue-violet gradient wash behind a three-line headline, "Where Commerce meets Creativity", in which the words "Where" and "meets" are light weight and "Commerce" and "Creativity" are heavy; below it, "We blend e-commerce expertise with creative execution — delivering full-funnel strategies that drive real results." and a blue "Get Started" pill with an arrow at the lower right of the hero. A gradient-coloured logotype (blue into violet, with a small "commerce" tag) sits at the top left.

The page continues with the section title "OUR SERVICES" in large uppercase blue-to-violet gradient text, followed by service rows: "E-commerce Operations & Fulfillment" with the line "Seamless, end-to-end ops built for conversion." beside a collage of photographs (warehouse shelving, parcel packing, a headset-wearing agent, people on laptops) clipped into a rounded, leaf-like shape on a violet field. A further "OUR WORKS" title appears below. The voice is confident and compact, with benefit-led lines and two-word buttons ("Get Started", "Instagram").

## Colors

- canvas #ffffff is the page background (4479 area weight), ink #000000 the main text on it (672 characters). White is the most-read text colour (1036 characters), because white text sits on the blue CTA and over imagery; #faf9f6 (352 characters, surface-2) is a warm off-white.
- primary #0063ff is the brand blue (the CTA fill, with white on-primary text); the site's CSS variable --ripples-blue carries the same value.
- ink-4 #d8fafe is a pale cyan used for outlined secondary button text (--fade-blue); hairline #9adbff is the 1px border of that button.
- link #f1f3f8 is the pale text colour of circular social links (--second-color) with link-border #b8a5ff3d as a translucent violet border.

Other brand variables exposed by the page: --ripples-sky #10acf9, --ripples-purple #a96eec (the violet field behind the photo collage), --third-color #dfdbe6, --body-text-color #d9dae2, --divider-color #d8dfe0, --main-color #000 and --swiper-theme-color #007aff. Only a few of these were measured on rendered interface elements.

## Typography

Montserrat sets all 2091 measured characters (weights 100 to 700 are loaded, plus Instrument Sans in 400 to 700 and italics, which was not measured on text).

- display: 96px, weight 400, line-height 86.4px, letter-spacing -3px, capitalised (mobile: 58.5px, weight 500, line-height 58.5px).
- heading ("OUR SERVICES"): 102.4px, weight 500, line-height 122.88px, letter-spacing -5px, uppercase.
- body: 25.6px, weight 500, line-height 33.28px.
- button: 16px, weight 500, line-height 20px, letter-spacing 1px, capitalised; button-secondary: 15.36px, weight 500, tracking -0.48px; link: 14px, weight 500.

Sizes by characters: 21px (822), 78.75px (352), 17.92px (293), 57.6px (177), 15.36px (135), 25.6px (114), 102.4px (60), 42px (42), 128px (18). Montserrat is an open-source Google Fonts family, so no substitute is needed.

## Layout

The page is 1280px wide and 6278px tall. The hero is left-aligned text inside a wide gradient field with the CTA pinned lower right; section titles are centred; service rows are two-column, text at the left and a shaped image collage at the right. Spacing tokens: 10px, 12px, 12.8px, 14px, 16px, 20px, 25.6px, 32px, 38.39px, 48px. Whitespace between sections is generous: the capture shows long empty white bands between the title and the first service.

## Elevation & Depth

No box shadows were measured. Depth is made by the blurred gradient glow in the hero, by the violet backing shape behind the photos, and by gradient-filled titles. Borders are 1px #9adbff on secondary buttons and 1px #b8a5ff3d on social links.

## Shapes

The shape language is pill and leaf. Buttons use full pills (1600px on the CTA, 800px on the outlined button, 1280px on round links). Image masks use asymmetric radii: 60px 280px 280px 60px (13 elements) and 0px 300px 300px 0px (6), producing a D or leaf silhouette; 1400px (11 elements), 16.8px (7), 80px (6) and 20px (6) cover cards and tiles. Tokens: xs 16.8px, sm 20px, md 60px, lg 80px, pill 9999px.

## Components

- Primary button ("Get Started"): #0063ff fill, white Montserrat 16px weight 500, capitalised, letter-spacing 1px, padding 14px 24px, 48px high, pill, with an arrow icon.
- Secondary outlined button ("Instagram"): transparent, #d8fafe text, 1px #9adbff border, 36px high, padding 12px 16px, pill.
- Social link: circular, #f1f3f8 icon text, translucent violet border.
- Section title: gradient (blue to violet) uppercase Montserrat at 102.4px.
- Service row: two columns with a headline (about 42px), a short descriptor, and a D-shaped photo collage on a #a96eec field.
- Logo: gradient blue-to-violet wordmark with a small "commerce" tag.

## Design System Architecture

No public design system or brand guideline was seen; web research was unavailable (see SOURCES.json). The de-facto system lives in CSS custom properties with the brand prefix: --ripples-blue, --ripples-sky, --ripples-purple, --fade-blue, --main-color, --second-color, --third-color, --body-text-color, --divider-color and Swiper variables (--swiper-navigation-size 44px, --swiper-theme-color), which indicates a Swiper carousel in the works section. The system is a two-hue gradient (blue to violet) over white, one geometric sans family, and pill geometry.

## Do's and Don'ts

Do:
- Use #0063ff pill buttons with white capitalised labels and an arrow.
- Mix light and heavy Montserrat weights inside one headline.
- Use gradient blue-to-violet only for logo and section titles.
- Mask photography with large asymmetric radii.

Don't:
- Do not add shadows; none were measured.
- Do not use #d8fafe on white; it is for outlined buttons on dark or tinted areas.
- Do not use small corner radii on buttons; pills were measured.
- Do not describe the unmeasured Instrument Sans as a text face.

## Responsive Behavior

On the 390px mobile pass the hero size is 58.5px at weight 500 (desktop 96px, weight 400) with line-height 58.5px. The mobile size distribution is 16.8px (1115 characters), 35px (394), 21px (177), 13.44px (114), 58.5px (85), 10.14px (70), 17.55px (31), 12.48px (31) and 14px (13). Breakpoints and layout changes were not measured.

## Iteration Guide

1. Begin with {colors.canvas} and {colors.ink}; place {colors.primary} on the one main CTA.
2. Set display text with {typography.display} and section titles with {typography.heading}.
3. Use {rounded.pill} for buttons and the large asymmetric radii for imagery.
4. Keep spacing from the 10 to 48px token list.
5. Validate with `node web/scripts/verify-designs.mjs --slug=ripples-commerce`.

## Content and imagery

Photography is staff and operations imagery: warehouse racking, a person packing a branded parcel, support agents with headsets, colleagues at laptops. The images are cropped into the leaf shape with a violet backing so that every service block has a consistent graphic frame. Headline and hero copy emphasise the combination of commerce operations and creative work, and the service descriptors are one short sentence each. Calls to action are two words, social links are labelled by network name, and section titles are single uppercase phrases ("OUR SERVICES", "OUR WORKS"). The hero headline alternates between regular and bold weights within one sentence, which is the main typographic device on the page.

Reproduction notes: the hero background is a blurred blue and violet gradient that fades to white at the top and bottom edges, so text stays black rather than white. The CTA is not centred; it sits at the lower right edge of the hero panel and is the only filled blue control in the first viewport. The services title uses a left-to-right blue-to-violet gradient fill on its letters, matching the logotype. The page title is plain "Ripples Commerce". Instrument Sans is loaded by the stylesheet in regular, medium, semibold and bold with italics, but Montserrat accounts for all measured characters, so reproduce the page with Montserrat first.
