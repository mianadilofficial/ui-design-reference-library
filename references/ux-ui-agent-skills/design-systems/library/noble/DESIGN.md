---
version: alpha
name: Noble Development
category: "Thai Brands"
description: "Noble Development (noblehome.com) home page measured in English: DB Heavent type at 32px headings and 22px inputs, black #000000 ink on white, #d26132 orange accent from the site's own --btn-color-orange variable, #f5f5f7 light panels, 4px and 10px radii and a black footer, over bright full-color project campaign banners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#d26132"
  surface-light: "#f5f5f7"
  ink-muted: "#929ba1"
  ink-soft: "#00000080"
  ink-on-dark-soft: "#ffffff80"
typography:
  display:
    fontFamily: db_heavent_reg
    fontSize: 32px
    fontWeight: 400
    lineHeight: 30px
  heading:
    fontFamily: db_heavent_bold
    fontSize: 32px
    fontWeight: 400
    lineHeight: 32px
  subheading:
    fontFamily: db_heavent_reg
    fontSize: 26px
    fontWeight: 500
  input:
    fontFamily: db_heavent_reg
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 10px
  lg: 52px
spacing:
  s1: 2px
  s2: 8px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 40px
    height: 38px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---
## Overview

Noble Development's home page (https://www.noblehome.com/, which resolves to /en/home) is an English-language property marketplace for a Bangkok developer. The page title is "Condominium, Single House, Twin Home, Townhome | Noble". The company describes itself as offering luxury homes and condominiums in prime locations. The page is organized around three sub-brands visible in the capture and page copy: Noble (condominiums), Nue (condominiums such as Nue Z-Square, Nue Cove North Ratchapruek and Nue District R9) and Home (houses, townhomes, home offices and commercial buildings).

The visual impression is campaign-driven rather than minimalist. Below a thin top bar and a simple header, a full-width promotional banner ("THE BEST DEAL WON'T WAIT", "NOBLE IS NOW", "DISCOUNT UP TO 12.9 MB") runs in orange and black, followed by a horizontal carousel of tall project cards in saturated flat colors (olive green, teal, orange, deep teal) each with a headline image, a project name, two lines of copy and a bold "Register for ..." call to action with a chevron. Further down the page, restrained white sections carry a search bar and a lifestyle photo mosaic, and the page closes on a black band. The page is 7820px tall at 1280px width.

## Colors

Measured background areas: #ffffff (largest, 13021), #000000 (4337), #f5f5f7 (1047), #00000026, and the campaign card fills #baa48a, #295641 and #e12a3b. Text colors by character count: #ffffff (5023), #000000 (4315), #929ba1 (2029), #00000080 (1918), #ffffff80 (783), #d26132 (314) and #ffe5ff (162).

- canvas #ffffff and ink #000000: the main page.
- primary #d26132: the orange the site defines as its own --btn-color-orange variable, also used as a text color in 314 characters. No filled primary CTA was detected by the extractor, so this file declares primary but no button-primary component.
- surface-light #f5f5f7: light grey panels.
- ink-muted #929ba1: placeholder and secondary text; ink-soft #00000080: black at 50 percent alpha; ink-on-dark-soft #ffffff80: white at 50 percent alpha on dark areas.
- The black #000000 background is used by the footer component (white text on black).
- #baa48a, #295641 and #e12a3b belong to individual campaign cards and are measured but not elevated to tokens.

The root variables also define --btn-color-dark #000 and --btn-color-grey #f7f6f6 beside the orange; they are the site's own button palette (black, light grey and orange).

The capture shows a black cookie consent bar at the top ("Accept All Cookies" and "Cookies Setting") and a floating LINE chat bubble; both are third-party or compliance UI and are not documented as brand components.

## Typography

Two faces loaded: db_heavent_reg and db_heavent_bold (DB Heavent, a Thai-Latin family), at weight 400 each, plus an icomoon icon font. Sizes by characters: 22px (6937), 20px (3516), 18px (2479), 32px (743), 24px (694), 16px (489), 26px (58).

- display: db_heavent_reg 32px, weight 400, line-height 30px (the "CONDOMINIUM" heading).
- heading: db_heavent_bold 32px, weight 400, line-height 32px (section titles such as "Interested projects", "Life style search").
- subheading: db_heavent_reg 26px, weight 500.
- input: db_heavent_reg 22px, line-height 24px, for the search field.

Bold is achieved by switching font files rather than font-weight. DB Heavent is a licensed Thai typeface; a Thai-capable condensed sans would be the substitute outside the site. At the mobile pass the H1 measured 32px with line-height 30px, unchanged.

## Layout

The header is white with the black boxed "noble" wordmark at left and account, language (EN), search and menu icons at right. The content column is a wide container with the banner and cards aligned to its edges, and the project card carousel bleeds beyond the right edge. Sections are separated by large vertical space (the root variable --space-mg is 80px; padding 80px was measured on 17 elements). Common paddings: 16px (86), 30px (52), 12px (43), 10px (34). The search block is a single underlined field with a magnifier and microphone, with three category chips (Condominium, House, Town home Home Office and Shop House) centered beneath it. The Life style search is a seven-tile photo mosaic with white labels and arrows: Near BTS & MRT, Near Schools & Universities, Adjacent to Major Road, Along The River, Near Malls, Near Expressway, Recommended Projects. The page ends in a black band with a "Condominium Projects" title and carousel arrows.

## Elevation & Depth

No box shadows were measured anywhere on the page. Depth is flat and comes from three sources: saturated colored cards set against the white canvas, photographs, and a translucent #00000026 overlay region that darkens image tiles so the white labels stay legible.

## Shapes

Measured radii: 4px (10 elements), 10px (8), 3px (1) and 52px (1), tokenized as xs 3px, sm 4px, md 10px, lg 52px. The header wordmark and campaign cards read as square-cornered in the capture; the radii belong to small controls and tags.

## Components

- text-input: white fill, #000000 text, 22px type, 0px 40px padding and 38px height (the search field).
- footer: black (#000000) background with white text.
- Project cards: flat color panel, headline artwork, project name, short descriptive copy, and a bold register link with a chevron.
- Category chips: icon plus label with a small dropdown caret.
- Lifestyle tiles: photograph with a dark overlay and a white label plus arrow.

## Design System Architecture

No public design system or brand guideline page is linked from the home page. The shipped CSS exposes a small set of root variables: a spacing scale built from --spacer 1rem (--spacer-0, -2, -3, -5, -6, -7, -8, -10 as multiples of it), --space-mg 80px, button colors --btn-color-dark #000, --btn-color-grey #f7f6f6 and --btn-color-orange #d26132, and --affiliate-font set to "db_heavent_reg", sans-serif. That is the de-facto system: a rem-based spacer scale, three named button colors and one font stack.

## Content and Imagery

Imagery is a mix of three kinds. First, promotional artwork: bold condensed uppercase headlines ("BYE RENT. BUY NOW.", "ONE PRICE", "FINAL CALL", "LAST CHANCE"), big price numbers in millions of baht (the capture shows 1.59 MB and 5.29 MB figures) and rental-yield claims, composed on flat color backgrounds with cut-out photographs of people and building renders. Second, lifestyle photography for the search mosaic: trains, shopping bags, towers, expressways, riverside skylines. Third, project wordmarks (NUE, NORSE, AQUA, HYBE, VERSE, SHADE, CONNEX) printed in white on the black half of the banner. The tone is urgent and transactional in the campaign area ("Register for Best Price Unit", "Last 10 units") and neutral in the search area ("Search for projects or preferred locations"). Copy is English at this URL; the Thai version of the site was not measured.

## Do's and Don'ts

- Do use black on white for editorial areas and let campaign cards carry saturated color.
- Do use the orange #d26132 for emphasis and calls to action.
- Do use black bands for the footer with white text.
- Do keep copy in short English phrases with a bold action line ("Register for Privileges. Limited Offers.").
- Don't present the cookie bar or the chat bubble as brand UI.
- Don't add shadows; none were measured.
- Don't use bold weights on DB Heavent; the brand switches to the bold font file.

## Responsive Behavior

At the 390px mobile pass the measured H1 stays 32px with a 30px line-height, the same as desktop. Mobile layout, the banner and card carousel, the header menu and the mosaic at narrow width were not measured, so no behavior is claimed for them here.

## Iteration Guide

1. Set the page white with #000000 text and use #f5f5f7 panels for grouping.
2. Use #d26132 as the single accent and pair it with the black button style.
3. Use DB Heavent regular for body at 22px and the bold file for headings at 32px.
4. Compose campaign cards as full-bleed color panels with artwork, a title and a bold register line.
5. Keep the search field underlined and categories as icon chips.
6. Run `node web/scripts/verify-designs.mjs --slug=noble` after edits.
