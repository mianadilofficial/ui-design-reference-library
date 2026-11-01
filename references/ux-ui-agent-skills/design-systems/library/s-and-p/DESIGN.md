---
version: alpha
name: S&P Syndicate
category: "Thai Brands"
description: "S&P Syndicate (snpfood.com/en/home), Thai restaurant, bakery and food group: Kanit at weight 300 body and 500 headings, S&P red #e32126 buttons (3px radius, 46px high) and red-to-maroon gradient bands, light #f4f4f4 canvas with white cards."
colors:
  canvas: "#f4f4f4"
  page-body: "#ffffff"
  ink: "#222222"
  primary: "#e32126"
  on-primary: "#ffffff"
  surface-gray: "#bababa"
  ink-black: "#000000"
  maroon-text: "#4c0b0a"
  link-blue: "#5491f5"
  hairline: "#f2efef"
typography:
  display:
    fontFamily: Kanit
    fontSize: 55px
    fontWeight: 500
    lineHeight: 66px
    textTransform: uppercase
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  button:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Kanit
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  link:
    fontFamily: Kanit, sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 27px
rounded:
  xs: 3px
  sm: 5px
  pill: 9999px
spacing:
  s1: 2.4px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 11px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11px 20px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 11px 20px
    height: 46px
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.page-body}"
    boxShadow: rgba(0, 0, 0, 0.16) 0px 3px 6px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

# S&P Syndicate

## Overview

The measured page is https://www.snpfood.com/en/home (title "S&P Syndicate (SNP)"), the English home of S&P Syndicate Public Company Limited, a Thai restaurant, bakery and food-products group. The queued URL (https://www.snpfood.com/) opens a memorial splash page at /en/intro-page (a grayscale tribute with an "Enter Site" button), so the real home was measured by entering the site; the extraction was re-run on /en/home. The brand's own site is measured, not a parent site, so the name stays S&P Syndicate.

The home is a long single-page corporate and consumer portal. A red-gradient header carries the red-and-white S&P logo, seven nav items (About S&P, S&P Business, S&P Product, Investor Relations, Corporate Governance, Sustainability, S&P Delivery, Contact Us), a language selector, search and a menu icon. Then follow a photographic hero with "QUALITY, VALUE AND VIRTUE" and the line "The Pursuit of Strength & Growth"; a red "S&P Business Overview" band with three photo cards; a world map titled "S&P's Business" with colored map pins; a red "S&P Branch" locator with a Thailand map and store list; the "S&P Card" loyalty promotion; "S&P Group's Highlight" news cards; an "Investor Relations" stock panel (SET: SNP, 8.45 Baht) with financial highlight figures; a logo wall "Shops, Services and Products Under S&P"; a "Work With Us" band; and a footer with contact details and social icons.

Red is the page's structural color: every major section title sits on a red band, alternating with light gray and white content.

## Colors

`primary` #e32126 is the S&P red, the fill of the "www.snp1344.com" and "Add line S&P" buttons (3px radius) and the text color on 213 characters (section labels, store names, "More Detail" links). The nav bar uses a horizontal gradient `linear-gradient(90deg, rgb(227, 33, 38) 50%, rgb(121, 0, 7))`, from #e32126 to the deep maroon #790007; the darker fill #7a0e0d (158 weight) and the text color `maroon-text` #4c0b0a (161 characters) belong to the same family. `canvas` #f4f4f4 is the page background (4047 weight) and `page-body` #ffffff (2550) fills cards. `ink` #222222 is the text color (1759 characters); white is used on red (910 characters); black #000000 appears on 171 characters. `surface-gray` #bababa (1028 weight) is a gray fill used on the map region, and `hairline` #f2efef is the border color measured on one element. `link-blue` #5491f5 (21 characters) is a link color on the branch locator ("View map  Get Direction"); it is not a browser default.

## Typography

Kanit is the family for nearly every character (3205); a custom face "SandP" (weights 400 italic and 700) is measured on 30 characters, which are logo-style lettering; Font Awesome 5 Pro and an icomoon icon font supply icons. Kanit is loaded at 300, 400, 500 and 600.

Measured roles: `display` is Kanit 500, 55px / 66px, uppercase (the hero headline, #222222); `body` is Kanit 300, 16px / 24px, #222222; `button` is Kanit 400, 16px / 24px; `nav` is Kanit 300, 16px / 24px (the nav bar itself measured Kanit 500 at 15px / 22.5px on the gradient); `link` is Kanit 300, 18px / 27px, white; the footer headline "CONTACT US" is Kanit 500, 20px / 26px uppercase. Size counts: 16px (1140), 14px (586), 18px (557), 23px (321, section titles), 20px (223), 38px (120), 15px (106), 55px (95). Weights: 300 (2529 characters), 500 (477), 400 (184), 600 (30), 700 (15). Light 300 body with 500 headings is the system.

## Layout

The document is stacked sections, each full width, with centered content blocks inside. Section titles are centered on red bands ("S&P Branch", "S&P Group's Highlight", "Investor Relations", "Shops, Services and Products Under S&P"). Cards sit in three-column rows (business overview, highlights). Spacing measured: paddings 15px (57 uses), 8px (26), 48px (24), 12px (16), 32px (12), 20px (7), 40px and 64px. Buttons measured 46px high with `11px 20px` padding.

## Elevation & Depth

Cards and panels use soft shadows: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` (5 uses), `rgba(0, 0, 0, 0.16) 2px 1px 6px 0px` (3 uses), `rgba(0, 0, 0, 0.1) 0px 3px 6px 0px` (1) and `rgba(0, 0, 0, 0.3) 0px 0px 10px 0px` (1). The nav carries the first shadow. Red gradient bands provide the strongest layering by color: a vertical red-to-maroon fade behind each centered section title.

## Shapes

Radii measured: 50% (16 uses, round icon buttons and dots), 3px (10 uses, `xs`, buttons), 5px (3 uses, `sm`, cards) and 999px (1 use, pill). Photographs and white content panels show square or slightly rounded corners in the capture.

## Components

**Primary button**: #e32126 fill, white Kanit 400 16px / 24px, `11px 20px` padding, 46px high, 3px radius ("Add line S&P", "www.snp1344.com"). The secondary button uses the same values.

**Nav**: red-to-maroon gradient bar, white Kanit 500 15px links, shadow `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px`; the measured hover on "About S&P" keeps white text and a transparent background.

**Section title**: white Kanit 500 on a red band, centered.

**Card**: white, soft shadow, small red "Company News" or "Promotion" tag above a bold date and title, "Read More" link in red.

**Link**: white Kanit 300 18px on red (for example "Whistleblowing"); red text links on white.

**Footer**: Kanit 500 20px uppercase "CONTACT US" heading in #222222 above company address lines, with a dark-red copyright strip below.

The round cookie control and the "Whistleblowing" widget corner are overlays and not documented as brand tokens.

## Design System Architecture

No public S&P design system, brand-guideline page or token package was opened for this brief, so there is no official source to cite. The shipped CSS has 28 root variables that are the Bootstrap defaults (`--light` #f8f9fa, `--yellow` #ffc107, `--indigo` #6610f2, `--green` #28a745, `--pink` #e83e8c and a system sans stack); the measured page does not use them for brand UI. The real system is the repeated literal set: red #e32126, maroon #790007 and #7a0e0d, ink #222222, surfaces #f4f4f4 and #ffffff, and Kanit in four weights plus a custom SandP logo face.

## Do's and Don'ts

- Do use #e32126 for buttons, section bands and key labels, and the gradient to #790007 for the nav.
- Do set Kanit 300 for body and 500 for headings and nav.
- Do put white cards with soft 3px-blur shadows on #f4f4f4.
- Do keep button corners at 3px and height at 46px.
- Do center section titles on red bands.
- Don't use Bootstrap's yellow, green or indigo variables for brand UI.
- Don't document the memorial splash page as the brand's home design; it is a separate tribute page.
- Don't treat the cookie control as part of the design language.

## Responsive Behavior

A 390px mobile pass was recorded. Its heading role is Kanit 500 at 55px / 66px uppercase, unchanged from desktop, and mobile size counts are 16px (1115), 18px (524), 14px (485), 23px (321), 20px (223), 38px (120), 55px (95) and 12px (53). Column counts, navigation behavior and breakpoints were not measured.

## Iteration Guide

1. Start with #f4f4f4 and #ffffff surfaces, #222222 text, #e32126 actions and the red-to-#790007 gradient bands.
2. Set Kanit 300 16px / 24px body, 500 for headings; the hero headline is 55px / 66px uppercase.
3. Build buttons at 46px, `11px 20px`, 3px radius.
4. Give cards the `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` shadow.
5. Gate: `node web/scripts/verify-designs.mjs --slug=s-and-p`.
