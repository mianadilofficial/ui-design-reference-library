---
version: alpha
name: "Thailand Post"
category: "Thai Brands"
description: "National postal operator portal (ไปรษณีย์ไทย): tahoma, arial at 14px weight 400, white canvas #ffffff, ink #333333, signal red #ff3333 navigation, buttons and footer, 0px button radius with 10px panels, dense Bootstrap-style service layout."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#ff3333"
  on-primary: "#ffffff"
  surface: "#444343"
  ink-3: "#cbcbcb"
  ink-4: "#eff200"
  ink-5: "#ed1c24"
  ink-6: "#0f91ce"
  hairline: "#808080"
  primary-hover: "#cf0f17"
  button-primary-border: "#a8080f"
  button-secondary-border: "#d0d0d0"
  text-input-text: "#555555"
  text-input-border: "#cccccc"
typography:
  display:
    fontFamily: tahoma, arial
    fontSize: 16.8px
    fontWeight: 400
    lineHeight: 16.8px
  subheading:
    fontFamily: tahoma, arial
    fontSize: 15.4px
    fontWeight: 400
    lineHeight: 16.94px
  body:
    fontFamily: tahoma, arial
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button-secondary:
    fontFamily: tahoma, arial
    fontSize: 12.6px
    fontWeight: 400
    lineHeight: 45px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 15px
    height: 34px
    borderColor: "{colors.button-primary-border}"
    boxShadow: rgba(255, 255, 255, 0.5) 0px 1px 0px 0px inset
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    height: 45px
    borderColor: "{colors.button-secondary-border}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    padding: 15px 20px
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 0px 12px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 6px 12px
    height: 34px
    borderColor: "{colors.text-input-border}"
    boxShadow: rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

## Overview

Thailand Post (ไปรษณีย์ไทย) is the national postal operator, and the measured page is the English index of its portal at thailandpost.co.th/en/index. The document title is the Thai company name "บริษัท ไปรษณีย์ไทย จำกัด ThailandPost". The page is a dense, utility-first service portal in the style of a classic Bootstrap 3 site: a gray utility bar across the top (language switch, font-size controls, high-contrast toggles, social icons, a site search with a "Search" button), a logo beside a wide red navigation bar, a slideshow banner with a column of quick-service links to its right (EMS Tracking, Courier Post Tracking, Calculate Fee, Postoffice Finder, Warranty and indemnity, POST Family, a carbon footprint system), then three content columns (videos, Popular Services, news) and a red footer.

The identity is red and white. A signal red (#ff3333) fills the navigation bar, the primary button and the footer, a second red (#ed1c24) is measured among the text colors, and a dark gray (#444343) fills the video panel. Text is dark gray on white. Information density is high and radii are almost nonexistent, which fits a transactional government-adjacent service site. The accessibility affordances (font-size buttons, contrast toggles, a WCAG 2.0 A-level badge in the footer) are a visible part of the page.

## Colors

The canvas is white (#ffffff). Reading text is #333333 and is the page ink for body, headings and links. Interface chrome is red: the primary action fill and the navigation bar are #ff3333, with white (#ffffff) text on top. The measured primary button border is #a8080f and the hover fill is #cf0f17. A second red, #ed1c24, is measured among the page text colors; its exact use was not isolated. A dark gray surface, #444343, backs the video list. Secondary neutral values measured on the page are #cbcbcb, a mid gray hairline #808080, and form field values #555555 for text and #cccccc for borders. Two additional measured colors are #eff200, a yellow, and #0f91ce, a cyan blue, which come from small icons and badges and are not brand-level colors.

- Primary action: #ff3333 fill, #ffffff text, #a8080f border, #cf0f17 on hover.
- Text: #333333 on #ffffff.
- Muted lines and disabled gray: #808080, #cbcbcb.
- The page's cookie-consent widget defines its own variables (for example --cc-bg: #ff0000, black buttons); these belong to the consent component, not the brand, and are not used as tokens here.

## Typography

All measured text uses the stack tahoma, arial at weight 400. The page body is 14px, with a 20px line height on content paragraphs. Section titles ("ข่าวประชาสัมพันธ์", news releases) measure 16.8px with a 16.8px line height; that role is both the heading and the display token in the measured data because the page has no large headline. The h3 service links ("EMS Tracking and Registered Mail ...") are 15.4px with a 16.94px line height. Secondary buttons use 12.6px with a 45px line height, and navigation links are 14px white text on a 50px line height. Thai and English appear in the same face; there is no separate display face. Glyphicons Halflings and FontAwesome are the only loaded web fonts and are icon fonts. The weights are uniformly 400: hierarchy comes from size, red color, and dotted rules rather than weight.

## Layout

The layout is a fixed-width centred Bootstrap-style grid on a 1280px desktop capture. The top utility bar spans the full width. Below it the logo occupies the left and the red navigation bar fills the remainder, with items Products and Services, About Us, Site Map, Link, Contact and Search. The main area splits into a slideshow at roughly two-thirds width and a right rail of seven bordered quick-link rows with pictograms. Content columns follow: video list, Popular Services, news, News Releases, each headed by a red-ruled title and a small "Watch all" link with a red plus mark. The red footer carries staff, accessibility, social and contact-center information, including the contact center number 1545.

Measured spacing values include 2px, 4px, 5px, 6px, 7px, 8px, 9px, 10px, 12px and 15px. Buttons use 6px 15px padding, nav links 0px 12px, text links 15px 20px.

## Elevation & Depth

Depth is nearly flat. Measured shadows are subtle: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px on bordered boxes, an inset white highlight rgba(255, 255, 255, 0.5) 0px 1px 0px 0px on the primary button, rgba(0, 0, 0, 0.075) 0px 1px 1px 0px inset on text inputs, and a slightly larger rgba(0, 0, 0, 0.2) 0px 2px 3px 0px on one element. Separation is mostly by 1px gray borders and dotted red rules.

## Shapes

Measured radii: 0px (most buttons and navigation), 3px, 4px, 5px, 10px, 50%, and partial radii such as 5px 5px 0px 0px (tab headers), 0px 4px 4px 0px and 4px 0px 0px 4px (joined search controls). The most frequent value is 10px, used on the red navigation bar and content boxes. The primary button on the page is the download button with radius 0px 5px 5px 0px, joined to a text label on its left; the token rounded.none (0px) is used for button-primary. Circular 50% shapes are social icon buttons.

## Components

- Primary button: #ff3333 fill, white 14px text, 34px high, padding 6px 15px, 1px solid #a8080f border, inset white highlight, 0px radius in the token; hover fill #cf0f17.
- Secondary button: #ff3333 fill, white 12.6px text, 45px high, #d0d0d0 border, 5px radius.
- Text input: white fill, #555555 text, 1px #cccccc border, 34px high, padding 6px 12px, inset shadow, 0px radius.
- Navigation: #ff3333 bar, white 14px labels, 50px row height, 12px side padding.
- Tabs ("For Business", "For visitors"): red active tab with partial top radii.
- Quick-link rows: bordered white boxes with a pictogram on the right.
- Footer: #ff3333 fill, white text.

## Design System Architecture

No public design system or brand guideline was found: the home page was opened and contains no link to brand, design-system or press resources, so no external research was done. The de-facto system is Bootstrap 3 (Glyphicons Halflings is loaded, and the input and button geometry follows its pattern) customized with a red theme. Browser and framework default blues (for example Bootstrap's #337ab7) do not appear as brand colors and are not documented. A third-party cookie-consent widget defines --cc-* root variables that are separate from the site's theme.

## Do's and Don'ts

- Do use #ff3333 for primary actions and navigation, with white text.
- Do keep tahoma, arial at weight 400 and use size and red rules for hierarchy.
- Do keep corners square or near-square; 10px is the largest common radius.
- Do keep dense, bordered quick-link lists and clear Thai/English labels.
- Don't use weight 700 headline styling that the site does not measure.
- Don't treat the chat bubble, cookie widget or slideshow controls as brand components.
- Don't use #0f91ce or #eff200 as main brand colors.

## Responsive Behavior

The extraction includes a mobile pass at 390px. Measured there: the section heading remains 16.8px with a 16.8px line height in a 145px-wide box, body text remains 14px with a 20px line height in a 153px box, and the primary button text is 11.9px with a 45px line height in a 192px box. Menu collapse, column stacking and breakpoints were not measured.

## Iteration Guide

1. Start with canvas #ffffff, ink #333333, primary #ff3333, hover #cf0f17 and tahoma, arial.
2. Build buttons 34px high with 6px 15px padding and a #a8080f border; inputs with #cccccc borders.
3. Keep the red navigation bar and red footer as the two heavy bands.
4. Keep radius small: 0px for controls, up to 10px for panels.
5. Dark mode, hover on nav, and mobile menu were not measured. Measure before documenting.
