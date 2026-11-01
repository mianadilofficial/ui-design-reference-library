---
version: alpha
name: Karmarts Public Company Limited
category: "Thai Brands"
description: "Karmarts Public Company Limited corporate and investor site (karmarts.co.th/en/home): a hot pink (#e53988) header, bullets and call-to-action, a warm charcoal footer (#3e3935) topped by a 6px pink rule, white pages, and Roboto Condensed throughout (700 headlines at 40px, 16px uppercase buttons, 15px light links). Square corners, a rectangular SUBSCRIBE button, no brand gradients."
colors:
  canvas: "#ffffff"
  surface-charcoal: "#3e3935"
  ink: "#1f1f1f"
  primary: "#e53988"
  on-primary: "#ffffff"
  ink-body: "#212529"
  ink-muted: "#5f5f5f"
typography:
  display:
    fontFamily: "\"Roboto Condensed\""
    fontSize: 40px
    fontWeight: 700
    lineHeight: 50px
  body:
    fontFamily: "\"Roboto Condensed\""
    fontSize: 35.2px
    fontWeight: 700
    lineHeight: 52.8px
  button:
    fontFamily: "\"Roboto Condensed\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
  nav:
    fontFamily: "\"Roboto Condensed\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: "\"Roboto Condensed\""
    fontSize: 15px
    fontWeight: 300
    lineHeight: 22.5px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 15px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 35px
    height: 38px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 5px 0px
  footer:
    backgroundColor: "{colors.surface-charcoal}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 80px 0px 0px
    borderColor: "{colors.primary}"
---

## Overview

The queued address `https://www.karmarts.co.th/` resolves to the English home page `https://www.karmarts.co.th/en/home` (title "Karmarts Public Company Limited"). This is the corporate and investor-relations site of the beauty and cosmetics group; the logo in the header and footer reads "KARMART" in white capitals on pink. It is a different property from the consumer shop recorded under the slug `karmart` (final URL `online.karmarts.com`). The document is named after the measured site: "Karmarts Public Company Limited".

The page is 2740px tall with 402 visible elements. From the top: a pink header band with the logo and an "EN / TH" language switch; a white navigation row (Home, About Us, Company Business, Our Brands, Investor Relations, Sustainability, News & Media, Careers, Contact Us) with a short pink underline under the active item "Home"; a full-width product banner carousel (the capture shows a Cathy Doll sun primer campaign, with slide indicators underneath); a statistics strip ("More than 3,000 Beauty Products from our house brands" and "We have expanded from Thailand to Southeast Asia, and more than 36 countries across the world.") in which the numbers are set large in pink; a long empty white area in the capture; and a warm charcoal footer with a 6px pink top border, the logo, social icons (Twitter, Facebook, Instagram, YouTube) and a five-column sitemap.

The mega-menu repeats one phrase in each dropdown, "One of the Leading Branded Beauty Providers for Everyone Worldwide". The register is corporate and bilingual (English and Thai), with investor vocabulary ("Financial Information", "Stock Information", "Shareholder Information", "Analyst Coverage", "SET Announcements"). A "SUBSCRIBE" form invites visitors to "Keep updated signup for our latest news and updates." A floating cookie control appears at the left edge in the capture; it is a consent widget and is not documented as brand UI.

## Colors

- **Primary `#e53988`**: the brand pink. It is the header band, the CTA fill (the "SUBSCRIBE" button has a matching 1px solid `#e53988` border), the statistics numerals, the active-nav underline, the footer's 6px top border and a dominant text color (708 characters of weight).
- **Canvas `#ffffff`**: page and nav-row background, and the label color on pink.
- **Surface charcoal `#3e3935`**: the footer fill (area 907, the largest background by area measured) and the color of 89 characters of text.
- **Ink `#1f1f1f`** (721 characters), **ink body `#212529`** (213) and **ink muted `#5f5f5f`** (34): the dark text colors on white. `#212529` is the form-body color on the mobile pass.
- Neutral lines: borders measured at `#4b4b4c` and `#e8e8e8` (1 occurrence each).

White (`#ffffff`) is the most frequent text color (1285 characters) because the pink header, charcoal footer and banner overlays use white text. On hover, the "EN" language link changes from a white fill with pink text and pink border to a dark magenta fill `rgb(170, 40, 95)` with near-white text `rgb(254, 250, 252)` (measured).

## Typography

One family, **Roboto Condensed** (loaded at 300, 400, 400 italic and 700; 3050 characters), is used for every word on the page. FontAwesome and icomoon are loaded as icon fonts.

- Display: 40px, weight 700, line-height 50px, pink `#e53988` ("Unique Beauty Solution").
- Banner statement: 35.2px, weight 700, line-height 52.8px, white ("Annual General Meeting of Shareholders for the year 2026").
- Nav: 20px, weight 400, line-height 30px, white in the dark dropdown; the top nav row measures smaller sizes (12.8px for the language switch).
- Button: 16px, weight 400, uppercase, line-height 20px.
- Link: 15px, weight 300, line-height 22.5px ("Notification of the Board Resolution regarding the Share Rep...").
- Footer headings: 17.6px, weight 900.

The size ladder by characters is 16px (750), 15px (642), 14.4px (605), 20.8px (463), 19.2px, 17.6px, 20px, 18.4px, 35.2px, 24px, 40px, 28px, 14px and 12.8px. On the 390px mobile pass the display stays at 40px, body copy is 15px weight 400 and the CTA stays 16px. Roboto Condensed is the only face; there are no fallbacks to report because the declared family is not followed by any fallback in the measured value.

## Layout

A centered container of about 1100px visible in the capture (the nav row starts near 80px from the left of the 960px-wide capture); the exact container width was not measured. The header has two tiers: a pink band for logo and language, then a white row for primary navigation. Sections stack full width: the banner carousel spans the viewport, the statistics strip uses three cells separated by dotted vertical rules (an image, a number block and a map block), and the footer arranges the sitemap in five columns with the first column holding "Home" and "About Us" and later columns "Company Business", "Investor Relations", "Sustainability" and "News & Media". Footer padding at the top is 80px. The measured spacing set is 2px, 4px, 5px, 8px, 15px, 16px, 18px, 20px, 24px and 30px.

## Elevation & Depth

Two small shadows were measured: `rgba(0, 0, 0, 0.2) 0px 5px 5px -5px` and `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px`. Otherwise surfaces are flat color blocks: pink header, white row, charcoal footer.

## Shapes

All CSS corners measure 0px except two elements with `100%` and one with `999px` radius (circular or pill elements). The CTA is a sharp rectangle (0px radius, 38px tall), consistent with the language switch, nav items and footer.

## Components

- **Primary button ("SUBSCRIBE")**: `#e53988` fill, white 16px uppercase Roboto Condensed 400, padding 8px 35px, 1px solid `#e53988` border, 0px radius, 38px tall.
- **Language switch (EN / TH)**: small bordered rectangles in the pink header; EN is white with pink text, hover turns magenta.
- **Primary navigation**: white row with dark labels, a short pink bar under the current page; dropdowns are dark with white 20px items.
- **Banner carousel**: full-width image slides with a row of small rectangular indicators.
- **Statistic cell**: pink Roboto Condensed numerals (e.g. "3,000", "36") with a label above and below.
- **Footer**: `#3e3935`, 6px solid `#e53988` top border, white column headings in weight 900 and white 15px links.

## Design System Architecture

No public design-system or brand-guideline page is linked from the page opened. The markup uses Bootstrap-style classes (`navbar-toggler`, `data-toggle="collapse"`, `data-target="#navbar-main"`) and Font Awesome from a CDN, and the root has no custom properties (`rootVars` is empty). The system is therefore the de-facto combination of a CMS-driven Bootstrap template, one condensed typeface, and two brand colors (pink and charcoal). The Bootstrap default blue and grays are not brand colors; the measured `#212529` body color matches the Bootstrap default text color and is kept only as measured form text.

## Do's and Don'ts

Do:
- Use pink `#e53988` for the header, the single call to action, numerals and the footer rule.
- Keep Roboto Condensed for everything; use weight 700 for headlines and 300/400 for links and body.
- Keep corners square and surfaces flat.
- Put white text on pink and on `#3e3935`.

Don't:
- Do not add gradients or rounded buttons.
- Do not document the cookie-consent widget or carousel indicators as brand components.
- Do not use Bootstrap blue as an accent.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 stays 40px weight 700 (pink `#e53988`); body text is 15px weight 400 in `#212529`; the SUBSCRIBE button remains 16px with padding 8px 35px and a 1px `#e53988` border; the size ladder shrinks to 15px, 18.4px, 16px, 20px, 20.8px, 40px, 16.8px, 28px, 14px and 12.8px. Navigation collapse behavior was not measured beyond the presence of a navbar toggle in the markup.

## Iteration Guide

1. White pages, `#1f1f1f` text, a pink `#e53988` header band and a charcoal `#3e3935` footer with a 6px pink top rule.
2. Roboto Condensed only: 40px/700 headings, 15px/300 links, 16px uppercase button text.
3. One rectangular pink button with white label, padding 8px 35px, 0px radius.
4. Show large pink numerals for statistics, separated by dotted rules.
5. Verify with `node web/scripts/verify-designs.mjs --slug=karmarts`.
