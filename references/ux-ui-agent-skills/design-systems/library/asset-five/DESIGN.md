---
version: alpha
name: Asset Five Group
category: "Thai Brands"
description: "Asset Five Group (A5, assetfive.co.th) Thai luxury-home developer site: burgundy #741032 ink and headings, gold #d39359 hover accent, black #000000 header and caption bars, Kanit Thai text with the arpona display face on a white #ffffff canvas, 5px and 100px radii."
colors:
  canvas: "#ffffff"
  ink: "#741032"
  primary: "#d39359"
  surface: "#000000"
  ink-body: "#333333"
  ink-muted: "#69727d"
typography:
  display:
    fontFamily: arpona, sans-serif
    fontSize: 25px
    fontWeight: 400
    lineHeight: 25px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 17.29px
  link:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 21.28px
rounded:
  xs: 5px
  sm: 30px
  md: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 30px
  s6: 35px
  s7: 50px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

The measured page (https://www.assetfive.co.th/, title "A5 : โครงการบ้านหรู บ้านคฤหาสน์ บ้าน 3 ชั้น หุ้น a5") is the corporate site of Asset Five Group, branded A5, a developer of luxury houses and mansions. The capture opens on a black header bar with the interlocking A5 mark and the letters "A5" centered in white, a hamburger icon at left, a search icon and three language links (TH in gold, EN, CN) at right, and a compact white navigation (เกี่ยวกับเรา, โครงการ, นักลงทุนสัมพันธ์) under the logo. Beneath it a large lifestyle image shows a white Samoyed dog beside a person in a white bathrobe at a dining table, with a black caption bar reading "GREATNESS" with the italic line "Inspired by Love".

A white-to-blush section then introduces the company with a short burgundy vertical rule, a large burgundy "A5", an English statement ("We are thriving to create unique product to fulfil unmet demand in the Niche market. Our target is to the customer's top of mind for a one-of-a-kind residence and distinctive products."), a Thai statement ("A5 เชื่อว่า 'ความรัก' สามารถสร้างสิ่งที่ยิ่งใหญ่ได้ ...") and five small columns: "A Better Me", "A Happy Home", "A Place Full of Memories", "A Life Full of Joy" and "A Better Planet", each with a short Thai paragraph. A full-bleed project slider follows with a photograph of the CINQ ROYAL The Eighteen BANGNA KM7 entrance, the project wordmark and the line "A NEW CHAPTER OF LEGACY" in spaced capitals, with three carousel dots. The lower section starts with "NEWS & ACTIVITIES" in burgundy between two thin gold vertical rules. The voice is aspirational and values-led, built around "Inspired by Love" and the five "5A" ideas. The capture shows no cards, forms or buttons, and the extraction found no primary button, so none is documented.

## Colors

Measured background area is black #000000 (1024) and burgundy #741032 (575), with white at near-zero weight. Text colors are burgundy #741032 (895 characters), #333333 (597), white (313), gold #d39359 (40) and slate grey #69727d (24).

- **Ink #741032 (burgundy)**: headings, the large "A5", section titles and text links.
- **Primary gold #d39359**: the hover color of the EN and CN language links (text and border change from white to rgb(211, 147, 89)), the active TH link, and the thin vertical rules in the capture.
- **Surface #000000**: header bar and caption bar.
- **Ink-body #333333**: body text; **ink-muted #69727d**: secondary text.
- **Canvas #ffffff**: page background; the intro section fades from white into a blush tint, which was not recorded as a separate token.

Elementor and WordPress :root variables (for example --e-global-color-nxt-global3 #3A4F66, --nxt-global-color-1 #162d9e, --wp--preset--color--vivid-purple #9b51e0 and --nxt-link-hover-color #c09398) are theme defaults and are not measured in use on the page, so they are not brand colors.

## Typography

Two families are measured. **arpona** is the display face used for the caption "GREATNESS" at 25px / 400 / 25px (the same at the 390px mobile pass); **Kanit** (regular, loaded as 400) is the text face: subheading 20px / 400 / 24px (the English statement), body 13px / 400 / 17.29px (the five column paragraphs; also 13px at 390px) and link 16px / 400 / 21.28px. The caption's second line is italic in the capture. Section titles such as "NEWS & ACTIVITIES" and "A5" are in burgundy. If arpona is unavailable, a neutral humanist sans is the closest substitute for the caption; Kanit is a Thai and Latin sans.

## Layout

The desktop page is a stack of full-width bands: black header, hero image with caption bar, intro band, full-bleed project slider, news band. Text bands are centered with short vertical rules above and below the headline, and the five value columns sit in a single row across a content width narrower than the viewport. The header has the logo centered rather than left-aligned, with the navigation directly under it. Spacing steps recorded: 5, 10, 15, 20, 30, 35 and 50px.

The measured hierarchy is deliberately small. The page has two surface colors (black and white), one ink (burgundy #741032) with a neutral body grey (#333333) and a muted slate (#69727d), and one accent (gold #d39359). Type sizes in use are 25px for the display caption, 20px for the statement, 16px for links and 13px for the value-column paragraphs, so the contrast between the large burgundy "A5" and the 13px columns carries most of the visual rhythm. The page title also contains the stock-exchange ticker phrase "หุ้น a5", which does not appear as a visual element in the capture.

## Elevation & Depth

No box-shadows or borders were recorded. Depth comes from full-bleed photography, the black bars above and below the hero image, and a soft white-to-blush gradient behind the intro; the project slider uses a dark overlay on its photograph in the capture.

## Shapes

Radii in the census: 5px (3), 50% (3), 100px (3) and 30px (1). The language links carry a 5px radius at rest; circular elements (carousel dots and icon buttons) account for 50% and 100px. The page is otherwise rectangular: images and bands have square edges.

## Components

Only a text link role was detected: #741032 burgundy, Kanit 16px / 400 / 21.28px. The capture also shows:

- **Language switch**: TH, EN and CN in white on black; hover changes to gold #d39359; the active language is gold.
- **Header**: black bar with centered A5 logo, hamburger, search icon.
- **Caption bar**: black band with white text "GREATNESS / Inspired by Love".
- **Slider dots**: three small circles under the project slide.

No button, card or input tokens were measured, so none are declared.

## Design System Architecture

No public Asset Five design-system or brand-guideline page was opened; the research record is {none:true}. The site is a WordPress build with Elementor (--e-global-color-* variables) and the Nextend/theme variable family (--nxt-*), plus Font Awesome 5 Free and Brands. These variables carry stock values and are not the brand palette. The real system is small: black and burgundy surfaces and ink, a gold accent for interaction, arpona for captions and Kanit for text.

## Do's and Don'ts

- Do use burgundy #741032 for headings and text links on white.
- Do use black bars for the header and hero caption, with white text.
- Do reserve gold #d39359 for hover and the active language.
- Do use centered headings with thin vertical rules above and below.
- Don't use the stock Elementor or WordPress preset colors.
- Don't add button fills; none were measured.
- Don't set Thai text in arpona; use Kanit.

## Responsive Behavior

Measured at 390px: the display caption stays 25px / 400 / 25px, body is 13px / 400, and the extractor recorded no button. The mobile pass did not record a menu toggle, header link count or card columns for this page, so the mobile navigation is not measured. Tablet widths and dark mode are not measured.

## Iteration Guide

1. White canvas, Kanit 13px body and 20px subheadings in #741032 or #333333.
2. Black header and caption bars with white arpona caption at 25px.
3. Gold #d39359 only for hover and the active language.
4. Add vertical gold or burgundy rules around centered section titles.
5. Use full-bleed photography for projects with a project wordmark and spaced capitals.
6. Re-measure any new element before adding a token.
