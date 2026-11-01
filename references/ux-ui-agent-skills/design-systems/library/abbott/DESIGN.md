---
version: alpha
name: Abbott
category: "Pharma"
description: "Global healthcare company homepage measured at abbott.com/en-us/homepage: deep navy #000075 canvas, periwinkle #97a3f5 hero, pale lavender #d6dbfc cards and buttons, Wallace Serif 400 headings at 64px with -1px tracking, Wallace Sans body 16px and 4px radii."
colors:
  canvas: "#000075"
  ink: "#d6dbfc"
  page-largest: "#000075"
  primary: "#d6dbfc"
  on-primary: "#000075"
  surface-hero: "#97a3f5"
  on-dark: "#ffffff"
typography:
  display:
    fontFamily: "\"Wallace Serif\", \"Book Antiqua\""
    fontSize: 64px
    fontWeight: 400
    letterSpacing: "-1px"
  subheading:
    fontFamily: "\"Wallace Serif\", \"Book Antiqua\""
    fontSize: 25px
    fontWeight: 400
    lineHeight: 31.25px
  body:
    fontFamily: "\"Wallace Sans\", \"Aptos Sans\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Wallace Sans\", \"Aptos Sans\""
    fontSize: 13px
    fontWeight: 400
    lineHeight: 16.25px
    letterSpacing: 2px
    textTransform: uppercase
rounded:
  xs: 4px
spacing:
  s1: 8px
  s2: 11px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 56px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 0px 16px
    height: 44px
    borderColor: "{colors.canvas}"
---

## Overview
Abbott's US home page (title "Abbott | Life-Changing Healthcare Technologies", lang en-US) presents a global healthcare company whose navigation groups Products and Solutions (Biowearables, Cancer, Cardiovascular, Diabetes, Diagnostics Testing, Medicines, Nutrition, Pain and Movement) and "Need Help?" (Where to Buy, Contact Us, Partners, Global Locations, Site Map). The footer carries social icons and a legal notice.

The capture is unusual for healthcare: instead of white and clinical blue, the page is a deep navy (`{colors.canvas}`, #000075) with a periwinkle hero (`{colors.surface-hero}`, #97a3f5) containing the greeting "Hello, welcome to Abbott" and a search field with the italic prompt "How can I help you?". Below it, a mosaic of rounded cards in pale lavender (`{colors.ink}` #d6dbfc), periwinkle and a strong royal blue shows news, press-release, community, careers and products stories. Each card carries a small uppercase tracked label ("NEWSROOM", "PRESS RELEASE", "COMMUNITY", "CAREERS", "ABOUT ABBOTT"), a serif or sans headline and an outline arrow at the bottom. Photography is human and warm (a blood donor, a hand holding a sensor, a woman holding a bowl, a phone showing glucose readings on purple fabric).

## Colors
Measured text colours are `{colors.canvas}` navy #000075 (1004 weight), pale `{colors.ink}` #d6dbfc (863) and `{colors.on-dark}` white (207). Background areas are navy (5969), `{colors.surface-hero}` (1024), pale lavender #d6dbfc (675), light grey #f2f2f2 and dark grey #333333 (332 each, used in the footer/safety area). The generator assigned `{colors.primary}` as the pale lavender fill of the "PRODUCTS MADE BY ABBOTT" button with `{colors.on-primary}` navy text and a 1px solid navy border, and that is the only measured button treatment.

The site's own root variables also publish status colours: `--st-error-main` #D81842, `--st-success-dark` #124f00, `--st-warning-medium` #ffde8f, `--st-info-contrastOnLight` #344042, a system focus ring `--st-systemFocusRing-primary` #0D19FB and a grey #6e6e6e. They are listed in the extraction; only the colours above are declared as tokens. Bootstrap's default focus shadow `0 0 0 .25rem rgba(13,110,253,.25)` appears in the stylesheet and is a framework default, not an Abbott colour.

## Typography
Abbott uses its own Wallace families: Wallace Serif (weights 300 and 400, with 400 italic) for headings, with fallback Book Antiqua, and Wallace Sans (400, 700) for body and controls, with fallback Aptos Sans. The CSS variables name the roles `--fontFamily-heading` and `--fontFamily-nonHeading`.

- `{typography.display}`: Wallace Serif 400 at 64px, letter-spacing -1px. The 64px size is a measured rendered size (70 characters) and matches `--desktop-displayLRegular-font-size`; `--desktop-displayXLRegular-font-size` is 81px, and the page also renders 40px and 32px headings. Line-height for display is not declared because only a percentage variable exists on mobile (105%).
- `{typography.subheading}`: Wallace Serif 400 at 25px, line-height 31.25px, on the "Important safety information" heading.
- `{typography.body}`: Wallace Sans 400 at 16px, line-height 24px.
- `{typography.button}`: Wallace Sans 400 at 13px, line-height 16.25px, uppercase, 2px letter-spacing.

The body role reports 40px at -1px tracking in Wallace Serif for the page root. Labels in cards use uppercase small Wallace Sans with wide tracking. Font substitutes: Wallace is proprietary; a transitional serif such as Book Antiqua (the site's own fallback) for headings and Aptos Sans for body, as the site declares.

## Layout
Desktop width is 1280px, page height 4030px. The content sits in a column of about 1140px (the "Important safety information" heading box measures 1140px wide). The mosaic is a card grid of mixed spans: one large 2-row card, narrow tall cards, and a wide card at the lower right. Spacing tokens measured in gaps and paddings are 8, 11, 12, 15, 16, 24, 32, 40, 48 and 56px, from `{spacing.s1}` to `{spacing.s10}`. Density is moderate with generous navy gutters between cards.

## Elevation & Depth
The extraction records no drop shadows on the design roles; shadow values found are focus rings (Bootstrap's default and an inset header-nav focus ring). Depth comes from stacking pale cards on a dark navy field. Do not add shadows.

## Shapes
The CSS corpus radii include 4px (9 uses), 1px, 2px, 3px, 8px, 10px, 16px, 20px and 999px. The root variables define `--abbottRadius-small` as 4px, medium 6px, large 8px and extraLarge with 12px on selected corners, and the card frequency shows asymmetric corner values "0px 12px 0px 0px". The button uses `{rounded.xs}` (4px).

## Components
**Button** (`button-primary`, `button-secondary`): pale lavender `{colors.ink}` fill, navy text `{colors.canvas}`, 1px navy border, 4px radius, 44px tall, padding 0px 16px, 13px uppercase text at 2px tracking; 260px wide for "PRODUCTS MADE BY ABBOTT". "HOW TO CONTACT ABBOTT" shares the same treatment.

**Story card**: rounded rectangle in lavender, periwinkle, royal blue or navy, with a tracked uppercase category label, a 20px-class headline, and an outline arrow aligned bottom-left.

**Search field**: bottom-ruled field with italic placeholder on the periwinkle hero, magnifier icon at the right.

**Header**: logo at the left, a globe icon and menu icon at the right.

## Design System Architecture
The homepage that was opened (https://www.abbott.com/en-us/homepage) links no brand guideline, press kit or design system. The shipped CSS shows a tokenised system with roughly 400 root variables: responsive type scales named by device and role (`--desktop-displayXLRegular-font-size: 81px`, `--tablet-displayXLRegular-font-size: 64px`, `--mobile-displayXLRegular-font-size: 51px`, `--desktop-buttonMd-font-weight: 700`, `--desktop-titleMLight-font-weight: 300`), radius tokens (`--abbottRadius-*`), status colours prefixed `--st-` and dimension tokens (`--dimension-16: 16px`). The site also includes Bootstrap variables (`--bs-btn-focus-box-shadow`), so Bootstrap sits beneath the Abbott layer.

The token naming in the shipped CSS shows how the system is organised: a type style is a combination of device, role, size name and weight (for example displayXL, displayL, titleM, buttonMd, preheaderL, with Light, Regular or Bold suffixes), each with its own font-family, size, weight, line-height and letter-spacing variable. Preheader styles, such as `--tablet-preheaderMBold-font-size: 25px` and `--tablet-preheaderLLight-font-size: 32px`, correspond to the short label lines above headlines. A designer extending the page should select a named style and a device, rather than inventing a size.

Interaction states other than the focus rings were not recorded: the hover probe returned no entries for this page, so no hover colours are declared. The card mosaic shows four distinct fills in the capture, and each pairs with a single text colour from the measured set, so the combinations navy on lavender, navy on periwinkle, white on royal blue and pale lavender on navy are the only ones evidenced.

## Do's and Don'ts
- Do use navy `{colors.canvas}` as the dark field and pale lavender `{colors.ink}` for cards.
- Do set headlines in Wallace Serif with -1px tracking and label cards with tracked uppercase Wallace Sans.
- Do pair every card with an outline arrow.
- Do use real human photography.
- Don't use Bootstrap blue (#0d6efd) as a brand colour; it is a framework default.
- Don't add shadows to cards.
- Don't use bold weights for headings; the display and subheading are weight 400.

## Responsive Behavior
Measured on the 390px pass: body text stays 16px with 24px line-height (box width 294px) and the "PRODUCTS MADE BY ABBOTT" button stays 13px and 260px wide, 44px tall. The mobile pass found no h1 or h2. The stylesheet publishes mobile display sizes (`--mobile-displayXLRegular-font-size: 51px`, `--mobile-displayLRegular-font-size: 40px`, line-height 105%), but where they apply on the page was not measured. Navigation collapse and card reflow were not measured.

## Iteration Guide
1. Navy canvas `{colors.canvas}`, periwinkle hero `{colors.surface-hero}`, pale lavender cards `{colors.ink}`.
2. Headlines in Wallace Serif 400 with -1px tracking; body Wallace Sans 16px/24px.
3. Buttons: 44px high, 4px radius, 1px navy border, 13px uppercase, 2px tracking.
4. Mix card spans in a grid with large and narrow tiles; end each card with an outline arrow.
5. Dark mode, hover and focus beyond the system ring variables are not measured.
