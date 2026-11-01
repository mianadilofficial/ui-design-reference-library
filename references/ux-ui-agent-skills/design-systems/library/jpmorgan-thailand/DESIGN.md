---
version: alpha
name: J.P. Morgan Thailand
category: "Thai Brands"
description: "J.P. Morgan in Thailand about-us page: white canvas with #f5f7f8 grey panels, the Amplitude typeface at 64px light display and 16px body with 0.32px tracking, #31373d ink, bronze #936846 brand accent, teal #1a7b99 action links, square corners and a deep brown #35210d logo bar."
colors:
  canvas: "#ffffff"
  page-largest: "#f5f7f8"
  ink: "#31373d"
  ink-secondary: "#474c50"
  ink-black: "#000000"
  primary: "#936846"
  on-primary: "#ffffff"
  link-teal: "#1a7b99"
  brand-brown-deep: "#35210d"
typography:
  display:
    fontFamily: Amplitude, Arial, Helvetica, sans-serif
    fontSize: 64px
    fontWeight: 300
    lineHeight: 72px
  display-mobile:
    fontFamily: Amplitude, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 40px
  subheading:
    fontFamily: Amplitude, Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 31.9999px
    letterSpacing: 0.24px
  body:
    fontFamily: Amplitude, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.32px
  nav:
    fontFamily: Amplitude
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 29px
  s10: 30px
components:
  link:
    textColor: "{colors.link-teal}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    padding: 0px 57.2031px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

The J.P. Morgan Thailand page (https://www.jpmorgan.com/TH/en/about-us) is a corporate, editorial site for a global investment bank. Its look is quiet, wide-margined and typographic: a white header carrying the serif "J.P.Morgan" wordmark in dark brown with a thick brown bar above it, a four-item navigation (Solutions, Who We Serve, Insights, About Us) with small bronze utility links at the right (Careers, News, Contact Us, Login, Thailand), a full-width aerial photograph hero with the white light-weight H1 "J.P. Morgan in Thailand" and the strapline "Local expertise. Global resources. Our commitment to Thailand.", then three teal call-to-action links on a white panel that overlaps the photo (Solutions, Local disclosures, Contact us, each with a chevron).

Below the hero the page reads like an annual-report spread: an "About us" heading in bronze, four paragraphs in a narrow centred measure, then a split section with a tall architectural photograph on the left and a question headline "What problem can we solve together?" whose second line is set in bronze. A horizontally scrolling row of grey cards (Investment Banking, Markets, Payments and more) follows, with outlined circular previous/next controls and dot pagination, and a "Local disclosures" block closes the capture.

The voice is measured and institutional, with short strapline sentences and no promotional hype; imagery is architectural or aerial rather than people-led.

## Colors

All values are measured.

- **canvas #ffffff** and **page-largest #f5f7f8** (the largest background by area, about 1,965 units against 617 for white) alternate as page and panel colours.
- **ink #31373d** is the main text colour (about 4,860 characters); **ink-secondary #474c50** is used for card body copy; **ink-black #000000** for the navigation.
- **primary #936846** is the bronze brand accent. It is measured on the "About us" heading and the second line of the split headline (59 characters) and equals the site's brand variables (`--cwm-actionable-brand-bold-background: #936846`, `--cwm-actionable-brand-border: #936846`), with a deeper `#7d532f` used for the selected and foreground states. It replaced the generated primary (teal), which is the colour of the in-content links.
- **on-primary #ffffff** is the foreground on bold brand backgrounds (`--cwm-actionable-brand-bold-foreground`).
- **link-teal #1a7b99** colours the call-to-action links such as "Solutions", "Local disclosures", "Contact us" and the "Learn more" links (123 characters).
- **brand-brown-deep #35210d** is the dark brown of the thick bar over the logo (a very small area in the measurement), consistent with the brown wordmark.

## Typography

One family, **Amplitude**, loaded in weights 300, 400, 500 and 700 (with Arial and Helvetica as fallbacks), carries the entire page. The light weight 300 is used for 2,273 characters and 400 for 2,869, so headings are light and body text regular. Roles: display 64px / 72px line-height / 300 (mobile 32px / 40px), subheading 24px / 32px / 300 with 0.24px tracking, body 16px / 24px / 400 with 0.32px tracking, navigation 16px / 24px / 400. Sizes by character count: 16px (2,347), 14px (1,436), 18px (1,046), 24px (322), 64px, 12px, 56px, 40px and 32px. Every size carries positive tracking (0.32px at 16px, 0.28px at 14px, 0.36px at 18px, 1px on some 14px labels), which gives the text a slightly open, airy texture. If Amplitude is not available, use a light humanist sans.

## Layout

The desktop page is 1280px wide and 5,733px tall. The hero is full-bleed; below it content sits in a narrow centred column for prose and in wider rows for cards. Measured gaps are 16px (13 uses), 8px, 20px, 30px, 24px, with larger gaps of 29px, 32px, 64px, and wide paddings of 159px, 112px and 176px (the extraction does not say which elements they belong to). Cards sit in a horizontal, scrollable row with three visible at once and a fourth peeking at the edge. The white action panel overlaps the bottom-left of the hero photo, and the split section offsets a tall photo against a headline. The site's CSS carries 262 root variables, reflecting a large token system.

## Elevation & Depth

There are no box-shadows in the measured styles. Depth comes from tone (white against #f5f7f8), a thick dark border under the cards (the dark #31373d border colour was measured 5 times) and from overlapping the white action panel on the hero photograph. The navigation relies on whitespace rather than a shadow.

## Shapes

Everything is rectangular except the controls: the only measured radius is 50% (7 uses), on the circular carousel buttons and pagination dots. Cards, panels, images and the call-to-action panel have square corners. The token set records the circle as `rounded.pill: 9999px`.

## Components

- **Header**: white, logo left with a brown bar above, four nav items with chevrons, bronze utility links right, thin search icon.
- **Hero**: photograph with a dark treatment, white light-weight H1 and a strapline.
- **Action links**: teal Amplitude links in bold small type with a chevron, laid out in three columns on a white panel.
- **Service card**: #f5f7f8 background, a line icon in teal at the top, a 24px-scale light title, small grey body copy, a "Learn more" teal link with chevron, and a dark bottom border.
- **Carousel controls**: outlined circular previous and next buttons with a row of small dot indicators.
- **Section heading**: 32px light bronze ("About us", measured as the H2).
There is no filled primary button in the measured area.

## Design System Architecture

No public design-system site or brand-guideline page was found on the pages opened. The shipped CSS, however, contains a substantial token layer: 262 custom properties with a `--cwm-` prefix, organised as colour scales (for example `--cwm-color-brown-100` to `-800`, `--cwm-color-topaz-100`), palette roles (`--cwm-palette-brand-default`, `--cwm-palette-background-primary`, `--cwm-palette-foreground-primary`), container roles (`--cwm-container-primary-background`) and actionable states (`--cwm-actionable-brand-bold-background`, `-hover`, `-active`, `-selected`, `-disabled`, plus subtle and border variants). Category colours such as `--cwm-category-4-bold-background: #008259` and `--cwm-category-5-subtle-border: #985eba` exist for data and tags. The structure, a palette scale, role aliases and state suffixes, is the real system and should be extended instead of using literal hex values.

## Do's and Don'ts

- Do use light 300 weight for large headings and 400 for reading text, with positive tracking.
- Do use bronze #936846 for headline accents and brand states, and teal #1a7b99 for in-content action links.
- Do keep corners square; use circles only for carousel controls.
- Do alternate white and #f5f7f8 sections, using a dark bottom border to ground cards.
- Don't add drop shadows or gradients.
- Don't substitute a bright blue for the teal link colour.
- Don't set body text in a bold weight.
- Don't use the category colours (green, purple) as brand colours.

## Responsive Behavior

On a 390px viewport the display role drops from 64px to 32px (line-height 72px to 40px) while the body stays at 16px. Nothing else was recorded for small screens, so those details are left undocumented. The horizontal card carousel suggests the cards are already designed for overflow rather than wrapping, but that is an observation of the desktop capture, not a measured mobile fact.

## Iteration Guide

1. Set a white canvas, #31373d ink, Amplitude at 16px / 24px with 0.32px tracking.
2. Use 64px / 300 for the page headline on photography, in white.
3. Colour section accents bronze #936846; use teal #1a7b99 for action links with chevrons.
4. Build cards on #f5f7f8 with square corners, a line icon, and a dark bottom border.
5. Read the `--cwm-` variables and reuse them for states and categories.
6. Re-measure after photography changes; the system is typographic, so the tokens remain steady.
