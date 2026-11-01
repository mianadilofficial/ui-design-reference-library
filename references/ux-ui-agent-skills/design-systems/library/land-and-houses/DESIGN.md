---
version: alpha
name: Land and Houses
category: "Thai Brands"
description: "Land and Houses (lh.co.th/en), Thai property developer: navy #003c71 bands and square 48px buttons, gold #b08731 rules, grey #f2f2f2 and white sections, NotoSansThai at weights 200 to 600 with 20px body and 14px nav, 8px-radius photo cards."
colors:
  canvas: "#f2f2f2"
  page-body: "#ffffff"
  ink: "#5b5e66"
  primary: "#003c71"
  on-primary: "#ffffff"
  ink-strong: "#1a1c1e"
  ink-black: "#000000"
  ink-muted: "#c3c6cf"
  gold: "#b08731"
  error: "#b51523"
  success: "#11a059"
  warning: "#f49107"
  card-border: "#505050"
typography:
  display:
    fontFamily: NotoSansThai
    fontSize: 20px
    fontWeight: 300
    lineHeight: 38px
  heading:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
  subheading:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  body:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 28px
  button:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 14px
    fontWeight: 200
    lineHeight: 20px
  button-secondary:
    fontFamily: NotoSansThai, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: NotoSansThai
    fontSize: 16px
    fontWeight: 300
    lineHeight: 25.1429px
rounded:
  xs: 6px
  sm: 8px
  none: 0px
  pill: 9999px
spacing:
  s1: 5.5px
  s2: 6px
  s3: 8px
  s4: 11px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 48px
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 0px 24px
    height: 48px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 38px
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

lh.co.th/en is the English home page of Land and Houses Public Company Limited, a Thai residential developer (page title "Land and Houses Public Company Limited Call 1198"). The measured page is 1280px wide and 5433px tall. A navy header carries the gold-globe "LAND & HOUSES" logo centered, a language selector (ENG) and a search icon, above a second navy row of links: Project Types, Blogs, Investor Relations, Service, Contact, Foreign Buyer. A full-width hero video area is followed by a navy search bar ("Search by Brand, Project Type, or Location", plus Project Type, Location and Price selectors and a white arrow button).

Below, "Explore Homes by Type" sits left with a short line ("Find the perfect match for your dream living experience at Land & Houses"), a gold rule and a navy "View All" button, beside a row of photo cards (Newly Built & Furnished House, Single House, Duo Home, Townhome). "Explore Homes by Brand" shows a row of brand wordmarks (Ladawan, Nantawan, Vive, Mantana, Siwalee) separated by thin gold rules. "LH Highlights" and a navy split panel "Explore Homes that Embrace Your Unique Lifestyle" follow, then a "Project Review" grid of six blog cards with dates, a navy "LH Living Tips" band and a footer listing Project Types, Our Brands, Location and Contact, with "1198" as the call number.

In the capture, a Privacy Policy consent dialog overlays the left side and the hero video slot shows a third-party error message ("We couldn't verify the security of your connection."). Neither is brand UI and neither is documented. The voice is polished and lifestyle-led: "Prime location, steps from shopping hub & skytrain", "Privacy with nature's embrace".

The lower half of the home page is editorial. "Project Review" presents six blog cards with titles such as "3 Condos near International Schools from LH that meet the needs of Gen…", "Luxurious Single Homes at NANTAWAN Rama 9 - New Krungthep…" and "5 Advantages of Attending an International School in Thailand", each with a thumbnail, an excerpt, an outlined "Read more" button and a date (15 October 2026). A dark navy "LH Living Tips" band introduces the blog with the line "Your source for inspiring lifestyle insights, home décor ideas, and expert advice to elevate your living experience". Imagery is architectural rendering and lifestyle photography: white-and-grey single houses with landscaped lawns, townhomes, interiors with chandeliers, a lakeside dock at dusk. Cards over photographs carry short white captions at the bottom-left.

## Colors

- **Navy #003c71** (`--primary-color`, `--lh-primary-text-color`) is the brand color: header, search bar, primary buttons, split panels and footer link headings (4229 area-weight; 180 text characters).
- **Greys:** #f2f2f2 (`--secondary-color`, the largest background, 6836) for alternating sections and the footer, white #ffffff (5836) for content areas. Text greys are #5b5e66 (`--secondary-100-color`, the most-read, 2263 characters), #1a1c1e (`--primary-text-color`, headings, 784), #000000 (715) and #c3c6cf (`--secondary-200-color`).
- **Gold #b08731** (`--gold-color`) is the accent: short rules under headings and brand separators (9 borders).
- **Status colors** from root variables: error #b51523, success #11a059, warning #f49107.
- **Sub-brand palettes:** the CSS defines per-project palettes (for example `--ladawan-primary-color` #253746 and `--vive-primary-color` #173b5c) so each residential brand has its own primary, secondary, tertiary and accent; those belong to the projects, not the corporate site, and are not tokenized here.

## Typography

One family: **NotoSansThai** as a variable font (weights 100 to 900 loaded). Thai and Latin share it. Usage by characters is mostly weight 400 (4792), then 300 (439) and 600 (84).

- Display (search heading span): 20px on 38px, weight 300.
- Heading (h2 "Explore Homes by Brand"): 24px on 36px, weight 300. Other measured sizes: 32px and 40px.
- Subheading (h3 blog titles): 20px on 30px, weight 400.
- Body: 20px on 28px, weight 300. The most common text size is 14px (3145 characters).
- Button: 18px on 24px, weight 300 (primary) or 400 (outlined). Nav: 14px on 20px, weight 200. Input: 16px on 25.1429px, weight 300.

Light weights give the page an airy, premium tone.

## Layout

Content is laid out in wide, generous sections with 64px and 32px paddings (32px is the most common, 42 elements; 64px 8). Gaps are 12px, 20px, 8px, 48px, 32px, 24px, 40px and 72px. The photo-card row bleeds past the right edge. The split panel is a three-part band: grey image block, navy text block, photo block.

## Elevation & Depth

Nearly flat: one faint shadow `rgba(0,0,0,0.02) 0px 2px 0px 0px` is measured. A dark gradient at the bottom of image cards keeps white captions readable. Color blocks (navy, grey, white) create the structure.

## Shapes

Buttons and inputs are square (0px). Cards and images use 6px and 8px radii (three elements each), one pill (9999px) and one card with only bottom corners rounded (0 0 8px 8px). Gold rules are straight.

## Components

- **Primary button**: navy fill, white 18px light label, 0 24px padding, 48px tall, square ("View All").
- **Secondary button**: transparent with a 1px #003c71 border and navy text, 48px tall ("Read more").
- **Search bar**: navy band, underlined fields with white text and a 38px input, a white square arrow button.
- **Photo card**: 8px radius, image with white caption at the bottom-left over a gradient.
- **Blog card**: image, 20px title, grey excerpt, outlined "Read more" chip and a date.
- **Footer**: #f2f2f2 background, navy headings in 600 weight, grey links, social icons.

## Design System Architecture

No public design system or brand guideline was found. https://www.lh.co.th/en was opened; /en/about-us, /en/brand and /en/investor-relations returned 200 with only the generic page title "LH", with no readable guideline content. The CSS exposes 184 root variables arranged as tonal scales (`--primary-100…900-color`, `--secondary-100…500-text-color`, `--tertiary-100…900-color`, `--success-/--warning-/--error-/--info-100…500-color`) plus a per-project theme set named `--{project}-{primary|secondary|tertiary|accent|dark-shade|bar}-color`. It is a tokenized, multi-brand system sitting on Tailwind (`--tw-*`).

## Navigation and Microcopy

Navigation labels are plain English nouns (Project Types, Blogs, Investor Relations, Service, Contact, Foreign Buyer), set in 14px white text on navy and separated by thin vertical rules. The contact promise "Call 1198" appears in the page title and in the footer with the web address and service hours ("Every day, 9.00 AM to 5.30 PM"). Search placeholders are descriptive ("Search by Brand, Project Type, or Location"), and call-to-action verbs are mild: View All, Read more.

## Do's and Don'ts

- Do use navy #003c71 for actions and bands, gold #b08731 only for thin rules.
- Do set NotoSansThai in light weights (300) for body and headings.
- Do keep buttons square and 48px tall; round only photo cards (6 to 8px).
- Do keep captions white over a dark gradient on photos.
- Don't use sub-brand palette colors on corporate pages.
- Don't add drop shadows.
- Don't treat the consent dialog or the video-error message as UI.
- Don't use #007aff (carousel default).

## Responsive Behavior

The 390px pass measured: h2 20px on 30px (300), body 20px on 28px, nav 14px on 20px (200), and the primary button rendered in a system font stack on a white fill with #003c71 text. Most common mobile sizes are 14px (3212 characters), 20px (847) and 9.39px (758). Layout reflow was not measured.

## Iteration Guide

1. Use the frontmatter tokens; navy `primary`, grey `canvas`, white `page-body`.
2. Section heading: 24px light, gold rule beneath, then body.
3. Cards: 8px radius photograph with white caption.
4. Verify new values in `web/data/extracted/land-and-houses.json`.
5. Run `node web/scripts/verify-designs.mjs --slug=land-and-houses`.
