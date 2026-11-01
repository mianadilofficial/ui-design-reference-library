---
version: alpha
name: Amarin Group
category: "Thai Brands"
description: "Amarin Group English home page (amarin.co.th/en): white and #f6f6f6 sections, teal #00a08e brand panels and icons, grey #666666 Sarabun 15px body, anakotmai Thai headings at 42px, circular controls and flat layout."
colors:
  canvas: "#f6f6f6"
  page-largest: "#ffffff"
  ink: "#666666"
  primary: "#00a08e"
  on-primary: "#ffffff"
  link-blue: "#1779ba"
  brand-green-light: "#44b88e"
  ink-light: "#999999"
  ink-black: "#000000"
typography:
  display:
    fontFamily: anakotmai_medium
    fontSize: 42px
    fontWeight: 400
    lineHeight: 58.8px
  display-mobile:
    fontFamily: anakotmai_medium
    fontSize: 30px
    fontWeight: 400
    lineHeight: 42px
  subheading:
    fontFamily: anakotmai_medium
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33.6px
    textTransform: uppercase
  body:
    fontFamily: Sarabun, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: anakotmai_light
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
rounded:
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 11.2px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 30px
components:
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.page-largest}"
---

# Amarin Group

## Overview
The queued entry was "Amarin Corporations" at amarin.co.th/en/. The measured site is the English home page of Amarin Group, the parent group of Amarin Printing and Publishing (the page title reads "Amarin - บริษัท อมรินทร์พริ้นติ้ง แอนด์พับลิชชิ่ง จำกัด (มหาชน)"), so this file is named after the measured site, Amarin Group. The home page presents the group as an omni-channel media company: a white header with a grey triangular logo and a two-row link bar, a full-width hero photograph of Thai TV and publishing talent under a teal-green gradient, a section "We are number one omni media (Omni Media - Omni Channel)" with five outlined teal icons, a teal "Our Brand" panel with a grid of white brand logos, and a "News and Activities" band with photo cards.

A video player in the hero shows "Playback error / Please check your internet connection" in the capture; it is a third-party widget in an error state and is not documented as brand UI. The look is clean and light: white and warm-grey (#f6f6f6) sections, one teal-green family, and grey text.

## Colors
- **canvas** `#f6f6f6` and **page-largest** `#ffffff`: the warm-grey section background and the white header and card areas (white has the largest background weight, 2892).
- **ink** `#666666`: body text, the most-read color (3023 characters).
- **ink-light** `#999999` and **ink-black** `#000000`: captions and the section headings (the 24px "ON PRINT" style uses black).
- **primary** `#00a08e`: the brand teal; background of the "Our Brand" panel (1285 area weight), the color of icon outlines and "Click" links (1532 characters) and the measured border color. The extractor found no filled button, so there is no measured call-to-action fill; teal is chosen as primary because it carries the brand's icons, links and panels.
- **on-primary** `#ffffff`: white text and logos on teal (1088 characters).
- **brand-green-light** `#44b88e`: the lighter green used in the hero gradient and section backgrounds (2629 area weight).
- **link-blue** `#1779ba`: the extractor's navigation link color (1760 characters). It is close to the default blue of the Foundation framework, so it is kept as a link color rather than a brand color.
Other measured colors: `#18644f` (60 characters) and `#08a992` (25), `#28bbaa` border. The root variables also carry the WordPress block-editor palette (`--wp--preset--color--*`: vivid red `#cf2e2e`, vivid orange `#ff6900`, amber `#fcb900`, pale pink `#f78da7`), which is a CMS default and not brand color.

## Typography
Three families: anakotmai (loaded as "anakotmai_light" and "anakotmai_medium", a Thai-language face), Sarabun (400, a Thai and Latin sans), and FontAwesome for icons.
- **display** anakotmai_medium 42px / 400 / 58.8px (hero heading, white on the photo); on the 390px mobile pass **display-mobile** 30px / 400 / 42px.
- **subheading** anakotmai_medium 24px / 400 / 33.6px, uppercase ("ON PRINT", "ONLINE").
- **body** Sarabun 15px / 400 / 24px, grey.
- **nav** anakotmai_light 18px / 700 / 27px; the header text measures 15.36px / 400 / 19.968px.
Character counts: anakotmai_medium 3034, Sarabun 2797, anakotmai_light 1902; sizes 15px (2457), 24px (2239), 18px (2187), 16px (334) and 42px (130). Headings use weight 400 of a medium-cut font rather than a bold weight. The WordPress preset sizes are 16px (`--wp--preset--font-size--normal`) and 42px (`--huge`).

## Layout
Measured at 1280px wide; the header is 101px tall in two stacked link rows. The home page is a stack of full-width sections with centered titles: a hero with a left text column (585px wide) and a video panel at right, a five-column icon row, a six-column logo grid separated by hairline rules into four rows with side arrows, and a three-card news row. Spacing tokens come from measured paddings and gaps: 5, 8, 11.2, 15, 16, 20 and 30px. A short white horizontal rule sits above the left-aligned section titles "Our Brand" and "News and Activities".

## Elevation & Depth
Almost flat. Measured shadows: `0 0 0 1px rgba(0,0,0,0.2)`, `0 0 4px 1px rgba(0,0,0,.08)`, `0 0 5px #cacaca`, and `0 0 10px rgba(0,0,0,0.7)` (the video control). News cards are white rectangles on the teal band; depth comes from color bands and the hero gradient.

## Shapes
Only one radius is measured: 50% (10 uses), used for circular controls such as the carousel arrow button. Cards, panels and the logo grid are square-cornered. The pill token in the frontmatter (9999px) is the generator's mapping for the 50% circle.

## Components
No filled button was detected. Measured components:
- **nav**: white background, `#666666` text, 15.36px, two rows with dropdown carets (Products & Services, Investor Relations, Sustainability, Corporate Governance) and plain links (About Amarin Group, News Update, Work with Us, Contact Us), then "TH" and "EN" language links.
- **nav-link**: anakotmai_light 18px / 700 in `#1779ba` for the in-page link style.
- **channel item**: a teal outline icon above an uppercase black label, a teal "Click" link with a small right-pointing triangle, and a grey 15px description.
- **brand logo cell**: white logo on teal, separated by hairline rules.
- **news card**: white card with a photo, a teal bold headline, truncated.
- **footer**: white text on the dark band (not fully captured).

## Design System Architecture
No public design system or brand guideline was found: the English home page markup contains no brand, design, press or guideline link. The site is a WordPress build (`--wp--preset--*` variables) with the Foundation-style blue link color and FontAwesome icons; the de-facto system is the teal, grey and white palette above with the anakotmai and Sarabun type pair.

## Do's and Don'ts
- Do use teal `#00a08e` for icons, links and brand panels and white for text on teal.
- Do keep body text grey `#666666` at 15px with a 24px line.
- Do show brand logos in white on a teal field.
- Do set section titles in anakotmai medium with a short white rule above.
- Don't use the WordPress preset palette as brand colors.
- Don't give panels rounded corners; only controls are circular.
- Don't document the video player error state.

## Responsive Behavior
At 390px the hero h2 measures 30px / 400 / 42px (box 370px by 163px) and the body paragraph stays 15px / 400 / 24px at 340px wide. Navigation collapse, column counts and breakpoints were not measured.

## Iteration Guide
1. Use white and `#f6f6f6` for page sections and teal for brand bands.
2. Keep type at 15px body, 24px labels and 42px hero.
3. Use outline icons in teal; text in grey.
4. Check any new value against `web/data/extracted/amarin-corporations.json`.
5. Name the brand "Amarin Group" when describing this page.

## Imagery and Voice
The hero is a posed group photograph of Thai actors in dark formal wear with a green-teal overlay. Section copy is short and promotional English with a slogan flavor: "Fulfill media experience with Amarin Group", "Create and produce all types of digital media with expertise and experience", "Conduct fair events and quality activities with proficiency", "AMARIN TV HD, Channel 34, Creative Television Station, 'Fill the Thought, Full Imagination'" and "Distribute channels both storefront and online". The brand grid lists group brands as white logos (for example Amarin TV, National Geographic Thai edition, Baby&Kids, Dek-D, Living Asean), so brand marks themselves provide the visual variety.

The English interface is paired with the Thai language switch (TH and EN) in the header, and several news captions in the capture are in Thai, so the site is bilingual at the content level: Thai headings use anakotmai while English headings use the same family's Latin glyphs.
