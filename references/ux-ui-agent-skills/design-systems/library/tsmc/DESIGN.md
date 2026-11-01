---
version: alpha
name: "TSMC"
category: "Consumer Electronics"
description: "Taiwan Semiconductor Manufacturing Company home page: Roboto in 400 and 500 on white (#ffffff) and light grey (#f2f2f2), charcoal text (#333333), a slate band (#3c4854), and a single crimson accent (#b32a2a) for the job-search button and LEARN MORE links, with 100px pill outlines and 5px radii."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#333333"
  surface-3: "#3c4854"
  ink-secondary: "#808080"
  ink-2: "#999999"
  ink-5: "#d9d9d9"
  ink-6: "#4d4d4d"
  nav-text: "#666666"
  nav-link-text: "#000000"
  primary: "#b32a2a"
  on-primary: "#ffffff"
typography:
  display:
    fontFamily: Roboto, Arial, sans-serif, 微軟正黑體, "Microsoft Jhenghei", sans-serif
    fontSize: 50px
    fontWeight: 500
    lineHeight: 60px
  display-mobile:
    fontFamily: Roboto, Arial, sans-serif, 微軟正黑體, "Microsoft Jhenghei", sans-serif
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: Roboto, Arial, sans-serif, 微軟正黑體, "Microsoft Jhenghei", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 23.2px
  nav:
    fontFamily: Roboto, Arial, sans-serif, 微軟正黑體, "Microsoft Jhenghei", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26.1px
  link:
    fontFamily: Roboto, Arial, sans-serif, 微軟正黑體, "Microsoft Jhenghei", sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 23.2px
rounded:
  xs: 5px
  sm: 100px
spacing:
  s1: 4px
  s2: 6px
  s3: 6.55px
  s4: 7.5px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 10px 28px
    borderColor: "{colors.page-largest}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    transform: matrix(1, 0, 0, 1, 0, -81)
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 6.55008px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-2}"
    typography: "{typography.body}"
    padding: 6px 32px 6px 16px
    height: 38px
    borderColor: "{colors.ink-5}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 0px 0px 48px
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 39px
---

## Overview

TSMC's English home page (https://www.tsmc.com/english, title "Taiwan Semiconductor Manufacturing Company Limited", language `en`) is a corporate portal in the style of a content-rich institutional site. A white header (80px high) carries the logo and a short navigation: "Dedicated IC Foundry", "Investors", "Press Center", "Careers", "ESG", "Research", "About TSMC" and "Search". Beneath it a full-width carousel slide, whose measured h1/h2 reads "TSMC University FinFET Program" (white, Roboto 50px, weight 500, line height 60px), sits over a blue-violet technical photograph with a "LEARN MORE" outlined pill. A slate band (#3c4854) then lists "LATEST NEWS", "RECENT EVENTS" and "BLOG" in three columns, followed by a photographic "Start Your Career with TSMC" banner with a job-search row, three article cards (Sustainability Report, the 38th Taiwan Continuous Improvement Awards, TSMC Charity Foundation) and a grey strip with "TSMC-Online", "TSMC-Supply Online 360" and "Document Center".

The tone is functional: sentence-case article titles, uppercase action links ("LEARN MORE >"), thin line icons and a vertical share rail (LinkedIn, Twitter, Facebook, mail, back-to-top) at the right edge. The extraction found only one font family (Roboto, with a Traditional Chinese fallback listed in the font stack) and a page 2,929px tall at 1,280px.

The social share rail and the right-edge carousel arrow are utility controls and are not documented as brand components.

## Colors

- **canvas `#ffffff`**: header, cards and form fields.
- **page-largest `#f2f2f2`**: the largest background area; the footer color.
- **ink `#333333`**: the text color of the footer and the document ink; also a dark background area.
- **surface-3 `#3c4854`**: the slate-blue band behind the news columns.
- **primary `#b32a2a`**: crimson. Measured as the fill of the mobile-pass "Search Jobs" button (background #b32a2a, text #ffffff) and as the text color of 146 CSS corpus uses and the "LEARN MORE" links; this is the only saturated color on the page. The generator had assigned a blue #0079c0 that appears only four times in the CSS corpus and nowhere in the rendered page, so it was dropped.
- **on-primary `#ffffff`**: the label color on the crimson button.
- **ink-secondary `#808080`**, **ink-2 `#999999`**, **ink-6 `#4d4d4d`**, **nav-text `#666666`**, **nav-link-text `#000000`**, **ink-5 `#d9d9d9`**: the grey text ladder. The by-character ranking is #808080, #999999, #ffffff, #333333, #d9d9d9, #4d4d4d, #f2f2f2, #666666 and #b32a2a.

Other backgrounds measured: #808080 (the grey strip at the bottom), #e5e5e5, a 60% white overlay (#ffffff99) and a 60% black overlay (#00000099) used over photographs for text legibility. The stylesheet also contains Bootstrap root variables (for example `--bs-primary: #ffffff`, `--bs-orange: #fd7e14`, `--bs-success: #28a745`); these are framework defaults, not TSMC brand colors, and none is tokenized.

## Typography

One family: **Roboto**, loaded at 400 and 500 (plus Font Awesome 5 icon fonts). The family stack in the stylesheet is `Roboto, Arial, sans-serif, 微軟正黑體, "Microsoft Jhenghei", sans-serif`.

- **display** (h1): 50px / 60px, weight 500.
- **body**: 16px / 23.2px, weight 400, text color #999999 on the dark slide.
- **nav**: 18px / 26.1px, weight 400 for nav links; the header text itself measures 12.8px / 18.56px, weight 500, #666666.
- **link**: 16px / 23.2px, weight 500 (LEARN MORE).
- **display-mobile**: 28px / 33.6px, weight 500, measured at 390px.

Size ranking by characters: 16px, 14px, 13.6px, 20px, 22px, 50px, 12.8px, 18.4px, 18px. The footer text is 18.4px / 26.68px at weight 400. Letter spacing is `normal`. Line heights are 1.2 times size for the 50px heading and 1.45 for body.

No substitute font is needed: Roboto is the loaded face.

## Layout

The header is 80px high on white. The measured paddings are 15px, 12px, 24px, 16px, 8px, 32px, 10px, 28px and 48px; the spacing tokens s1 to s10 (4, 6, 6.55, 7.5, 8, 10, 12, 14, 15, 16px) are drawn from the measured gaps and paddings. The nav links carry 6.55008px vertical padding. The footer is 533px high on #f2f2f2 with 48px bottom padding. The home page sequence in the capture: carousel, slate news band with three columns, career banner with a search row (three selects labelled Location, Career Area and Job Type, then a crimson search button), a three-card carousel, and the grey quick-link strip with three columns separated by hairline dividers.

The text input measured is 38px high with 6px 32px 6px 16px padding, a #d9d9d9 border and #999999 text on white.

## Elevation & Depth

No box shadows were measured on the page. Depth comes from photographs and from the two overlays (#00000099 and #ffffff99). Bootstrap root variables define shadows (such as `--bs-box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15)`), but they were not measured on any rendered element.

## Shapes

Two radii are measured: **100px** (pills, 18 elements) and **5px** (1 element). The pill is the outlined LEARN MORE link (156px by 45px, 10px 28px padding, 1px solid #f2f2f2 border, text #f2f2f2). The crimson search button (344px by 39px in the mobile pass) has a 5px radius. Cards and images have square corners.

## Components

**Link / outlined pill**: transparent, 1px #f2f2f2 border, #f2f2f2 text, Roboto 16px/500, 100px radius, 10px 28px padding.

**Button primary**: crimson #b32a2a fill, white text, Roboto 16px/400, 5px radius, 8px 12px padding, 39px high (measured in the 390px pass for the "Search Jobs" button).

**Navigation**: white header, #666666 labels with #000000 nav-link text.

**Text input / select**: white, #d9d9d9 border, 38px high.

**Footer**: #f2f2f2, #333333 text; legal links "Legal Notice & Trademark Information", "Privacy Policy", "Sitemap", "Cookie Policy" and the copyright line "Copyright© Taiwan Semiconductor Manufacturing Company Limited 2010-2026, All Rights Reserved."

**Cards**: white image cards with a heading in #333333 and a body in #808080, ending in a crimson uppercase "LEARN MORE" link. Card background, radius and padding were not detected by the extractor.

## Design System Architecture

No public design system or brand-guideline site was found: the home page https://www.tsmc.com/english, opened with WebFetch, links only to a "Legal Notice & Trademark Information" page (/english/legal_and_trademark), which was not opened. The de-facto system is a Bootstrap-based stylesheet: 112 root variables carry the `--bs-*` naming (for example `--bs-body-font-weight: 400`, `--bs-border-radius-sm: 0.25rem`, `--bs-border-radius-2xl: 2rem`), and Font Awesome 5 supplies icons. The brand colors are set in the site's own CSS, not in the Bootstrap variables.

## Do's and Don'ts

- Do use Roboto 400 and 500 only.
- Do use crimson #b32a2a only for the single primary action and for the uppercase "LEARN MORE" text links.
- Do use white-outlined 100px pills on photographic slides.
- Do put news and event lists on the #3c4854 band in white text.
- Don't use Bootstrap's default blue, orange, green or purple variables as brand colors.
- Don't add box shadows; none were measured.
- Don't treat the right-edge social rail as a brand component.

## Responsive Behavior

Measured at 390px: the slide heading is 28px / 33.6px at weight 500 (against 50px / 60px on desktop), body text stays at 16px / 23.2px, and the "Search Jobs" button is 344px wide, 39px high, with a 5px radius and 8px 12px padding. Mobile by-character sizes were 16px, 13.6px, 20px, 28px, 14px and 22px. Navigation form, column counts and breakpoints at mobile width were not measured.

## Iteration Guide

1. Start from white and #f2f2f2 surfaces with #333333 text.
2. Use #3c4854 for dark information bands and #b32a2a for a single action color.
3. Keep Roboto at 16px / 23.2px body and 50px / 60px display.
4. Use 100px pills for outlined actions on imagery and 5px radii for solid buttons.
5. Verify with `node web/scripts/verify-designs.mjs --slug=tsmc`.
