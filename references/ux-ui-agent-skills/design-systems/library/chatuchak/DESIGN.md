---
version: alpha
name: Chatuchak Market
category: "Thai Brands"
description: "Chatuchak Market (chatuchakmarket.org), a visitor guide and tour-booking site for Bangkok's weekend market: Lato uppercase headings, signal red #f44337 top bar, pill BOOK A TOUR button at 99px radius, 12px gray cards and full-bleed market photography."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#f44337"
  on-primary: "#ffffff"
  surface-light: "#f8f9fa"
  ink-slate: "#3c4043"
  ink-gray: "#4a4a4a"
  ink-50: "#00000080"
  button-primary-border: "#0000000d"
  nav-white-90: "#ffffffe6"
  surface-card: "#f4f4f4"
typography:
  display:
    fontFamily: Lato, sans-serif
    fontSize: 56px
    fontWeight: 700
    lineHeight: 56px
    letterSpacing: 2.8px
    textTransform: uppercase
  display-mobile:
    fontFamily: Lato, sans-serif
    fontSize: 38.5px
    fontWeight: 700
    lineHeight: 38.5px
    letterSpacing: 1.925px
    textTransform: uppercase
  heading:
    fontFamily: Lato, sans-serif
    fontSize: 34.8px
    fontWeight: 700
    lineHeight: 34.8px
  subheading:
    fontFamily: Lato, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 38.4px
  body:
    fontFamily: Lato, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 25.6px
  button:
    fontFamily: Lato, sans-serif
    fontSize: 13.192px
    fontWeight: 700
    lineHeight: 21.1072px
    letterSpacing: 0.39576px
    textTransform: uppercase
  nav:
    fontFamily: Lato, sans-serif
    fontSize: 11.64px
    fontWeight: 700
    lineHeight: 27.936px
    letterSpacing: 0.3492px
    textTransform: uppercase
  button-secondary:
    fontFamily: Lato, sans-serif
    fontSize: 17.6px
    fontWeight: 700
    lineHeight: 29px
    letterSpacing: 0.352px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 12px
  xl: 15px
  2xl: 20px
  3xl: 30px
  4xl: 99px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 7.19px
  s6: 8px
  s7: 9.8px
  s8: 10px
  s9: 10.08px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.4xl}"
    padding: 0px 15.8304px
    height: 34px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 0px 13.2px
    height: 29px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 0px 28.8px
    borderColor: "{colors.button-primary-border}"
  nav:
    backgroundColor: "{colors.nav-white-90}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 20px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

chatuchakmarket.org presents itself as "the home of Chatuchak Market", with the tagline "Welcome To The Largest Weekend Market". It is a visitor guide and tour-booking site: the menu lists Home, About, Blog, Tips and FAQs, How to get there (BTS Skytrain, Taxi, MRT, Tuk Tuk, Bus), Gallery and Contact, and a red "BOOK A TOUR" pill sits at the right of the header. The page copy describes Bangkok's "vibrant maze market of over 8,000 stalls" in the hero and, further down, "more than 200,000 people" every weekend, 35 acres, 26 sections and over 15,000 stalls (the two stall counts differ on the same page, so neither should be reused as a fact without checking). A Google review widget and a blog strip with titles such as "The Clock Tower Challenge: Can You Shop All 27 Sections in One Day?" fill out the page. The site is an independent guide; this document makes no claim about who operates the market.

The capture opens with a solid red announcement bar ("WELCOME TO THE LARGEST WEEKEND MARKET") with small social icons in blue and black squares. The white header shows a red CHATUCHAK "Weekend Market" logo box with a small tower icon, uppercase bold navigation with the active HOME item on a red block, and the BOOK A TOUR pill. The hero is a full-bleed street photograph of the market (colourful umbrellas, shoppers) under a white uppercase headline, "WELCOME TO THE HOME OF CHATUCHAK MARKET", with two flat rectangular buttons, a white HOW TO GET HERE and a red OPENING TIMES. Two white stat boxes with red borders show "200,000 Visitors per Week" and "15,000 Stalls", followed by a centred red "READ OUR BLOG" heading, four photo cards with red uppercase titles and a short red underline, and a full-width red band of white centred text.

The capture also contains a Google Cloud advertisement strip over the hero, ad-injected "Discover more" link boxes and a floating "Market tour booking" control. These are third-party or overlay elements and are not part of the brand's visual system.

## Colors

The canvas is white (#ffffff) and body ink black (#000000). The brand color is signal red `primary` #f44337, also published in the stylesheet as --primary-color; it fills the top bar, the active nav item, the BOOK A TOUR pill, the OPENING TIMES button, the logo box and the closing text band, with white `on-primary` text on top. Supporting neutrals are `surface-light` #f8f9fa, card background `surface-card` #f4f4f4 and a translucent white nav surface `nav-white-90` #ffffffe6. Text grays are `ink-slate` #3c4043, `ink-gray` #4a4a4a and a half-transparent black `ink-50` #00000080. The primary button border is a faint black #0000000d.

The stylesheet also exposes WordPress core preset colors (for example vivid purple #9b51e0 and pale pink #f78da7), which belong to the CMS, not the brand. The blue square of the Facebook icon in the top bar is a social-network color, not a site color.

## Typography

The site uses `Lato` (with a sans-serif fallback) for all measured text, loaded at weights 400 and 700. The review widget loads Poppins, Google Sans and Roboto, which are third-party widget fonts and are not part of the site's type system.

Measured styles: display 56px bold, line height 56px, letter spacing 2.8px, uppercase (the hero headline); display-mobile 38.5px bold with 1.925px tracking, uppercase; heading 34.8px bold; subheading 24px bold with 38.4px line height; body 16px at weight 700 with 25.6px line height; button 13.192px bold uppercase with 0.39576px tracking and 21.1072px line height; navigation 11.64px bold uppercase with 0.3492px tracking and 27.936px line height; secondary button 17.6px bold uppercase with 0.352px tracking. The system is built on bold uppercase tracked Lato in headings and navigation, and even body is measured at weight 700.

## Layout

The page is a vertical stack of full-width bands: red top bar, header, full-bleed photo hero, a centred pair of statistic boxes, a blog carousel of four cards, a full-width red band, then reviews. WordPress presets in the stylesheet define spacing and font-size steps (for example --wp--preset--font-size--large 36px). Measured spacing values are 2, 4, 5, 7, 7.19, 8, 9.8, 10, 10.08 and 12px, tight steps used inside controls; band separation is by full-colour backgrounds and padding. Cards use 20px padding; buttons use around 13 to 16px horizontal padding.

## Elevation & Depth

The system is mostly flat. The stylesheet defines WordPress shadow presets (deep: 12px 12px 50px rgba(0,0,0,0.4); outlined: 6px 6px 0px -3px white, 6px 6px black), but the measured components show no box shadow on the buttons. Depth in the capture comes from the photographic hero with a dark overlay behind white text, thin red-bordered boxes and a pale gray panel behind link lists.

## Shapes

Radii measured on the site: 2, 4, 5, 12, 15, 20 and 30px, with 99px and 9999px for pills. BOOK A TOUR uses 99px, which is a full pill. Cards use 12px. The hero buttons and stat boxes are square-cornered in the capture, so the site mixes pill CTAs in the header with rectangular buttons in the hero.

## Components

**Primary button** (BOOK A TOUR): red #f44337 fill, white 13.192px bold uppercase text with 0.39576px tracking, 99px radius, 0px 15.8304px padding, 34px tall, 1px #0000000d border.

**Secondary button**: red fill, white 17.6px bold uppercase text, 29px tall, 0px 13.2px padding (the OPENING TIMES style).

**Link-button** (HOW TO GET HERE and similar): red fill with white 24px bold text and 0px 28.8px padding.

**Navigation**: translucent white bar (#ffffffe6), 11.64px bold uppercase links; the active item is a red block with white text.

**Card**: #f4f4f4 background, 12px radius, 20px padding, black text.

**Footer**: white text on the red band.

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened; the homepage links only to an About page. The de-facto system is a WordPress theme (the stylesheet carries --wp--preset-* variables, wp-admin color variables and block variables) with a brand variable --primary-color #f44337 and Lato as the main typeface. Icons come from a custom icon font (fl-icons) and a review widget by Trustindex. Source: https://www.chatuchakmarket.org/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do use red #f44337 as the one brand color, with white text on it, set headings in bold uppercase Lato with tracking, and use full-bleed market photography behind white headlines. Do use pill shapes for the main booking CTA and square buttons in the hero.

Don't copy ad strips, the "Discover more" link boxes, the floating booking control, or social-network blues into brand UI. Don't use WordPress preset colors (purple, pale pink) as brand colors. Don't use shadows heavier than the measured flat buttons.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 38.5px uppercase display-mobile style versus 56px on desktop. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Build only from the frontmatter tokens. Start with a red announcement bar, a white header with a red pill CTA, a photo hero with a white uppercase 56px headline and two buttons, then alternating white and red bands. Keep Lato bold and uppercase for headings and nav. Any additional component needs a fresh measurement on the live site and a re-run of the gate.
