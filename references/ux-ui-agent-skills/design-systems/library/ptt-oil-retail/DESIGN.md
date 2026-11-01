---
version: alpha
name: OR (PTT Oil and Retail Business)
category: "Thai Brands"
description: "OR's English home page (pttor.com/en/home) uses the DB HelvethaicaMon X typeface at 20px body with 1px tracking, a cyan-blue CTA (#00aeef) on white and #ecf4fd, deep indigo headings (#1b1464), 10-12px rounded buttons, and 100px or circular image masks with a soft rgba(49,69,244,0.1) 0 15px 45px shadow."
colors:
  canvas: "#ffffff"
  ink: "#616b76"
  primary: "#00aeef"
  on-primary: "#ffffff"
  surface-sky: "#ecf4fd"
  ink-black: "#000000"
  ink-indigo: "#1b1464"
  hairline: "#dddddd"
typography:
  display:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 30px
    fontWeight: 500
    lineHeight: 26.4px
  display-mobile:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
  heading:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 26px
    fontWeight: 500
    lineHeight: 26px
  body:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 1px
  button:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 26.4px
    letterSpacing: 0.6px
  nav:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: "\"DB HelvethaicaMon X\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26.4px
    letterSpacing: 0.6px
rounded:
  xs: 5px
  sm: 10px
  md: 12px
  lg: 16px
  xl: 20px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 20px
  s7: 24px
  s8: 25px
  s9: 30px
  s10: 35px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 50px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px -7px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 12px 30px 12px 20px
    height: 50px
    boxShadow: rgba(49, 69, 244, 0.1) 0px 15px 45px 0px
  nav:
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.ink-indigo}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.pill}"
---

## Overview
Measured from the English home page of OR, PTT Oil and Retail Business Public Company Limited (https://www.pttor.com/en, resolved to /en/home; document title "OR"). The company name in the footer is "PTT Oil and Retail Business Public Company Limited", with an address on Vibhavadi Rangsit Rd., Chatuchak, Bangkok and a contact center number 1365 shown in the capture. The opened page lists Home, About OR, Investor Relation, Product & Service, Business Opportunity, Sustainability, News & Media and Contact Us. The measured page is 4189px tall.

This URL is the brand's own site, but at capture time it showed a black-and-white royal memorial pop-up over a grayscale hero. That overlay, the cookie banner (`or-cookie-banner`, hidden by the extractor), the translucent black scrim (#00000080, the fourth largest background area by weight) and the floating close and back-to-top controls are not brand UI and are excluded from every token below. The underlying page is bright: white and #ecf4fd backgrounds, a fuel-price strip of colored product tags (Diesel B20, Diesel, E20, 91, 95 and others) with numerals, two cyan buttons ("Find PTT Station", "Historical Retail Oil Prices"), an "Our business" band with an attendant in a PTT Station uniform masked in a circle over a blue wave illustration, news cards, an "OR 5th Anniversary" banner and a cyan footer.

The copy voice is promotional and forward-looking ("OR is Thailand's pioneer of innovative fuels, including LPG, which premium specifications, thus perfectly catering to each customer's specific needs at all times").

## Colors
`primary` #00aeef is the fill of every detected call to action (Historical Retail Oil Prices, News, Find PTT Station, More Detail) with `on-primary` white. It is also the third-largest background area (1543). Backgrounds by area: `canvas` #ffffff (5383), `surface-sky` #ecf4fd (2036), the scrim #00000080 (1024, excluded), #1b1464 (39), #121213, #2a2a2a, #000000.

Text colors by characters: `ink` #616b76 (2302, body paragraphs), `ink-black` #000000 (1050), `ink-indigo` #1b1464 (370, section headings such as "Our business" and "Oil Price Oct 9, 2026"), white #ffffff (292), cyan #00aeef (66, active tab labels) and #333333 (45, the price numerals). `hairline` #dddddd is the most common border color. The WordPress theme root variables also publish `--global-palette-highlight-alt: #00aeef`, `--global-palette1: #2B6CB0`, `--global-palette3: #1A202C` and `--global-palette7: #EDF2F7`; only #00aeef matches a measured brand color, the others come from the theme defaults and are not declared. The Swiper blue #007aff is a library default and was ignored.

## Typography
All reading text is "DB HelvethaicaMon X" (4092 chars; regular and bold files load) with "DB Helvethaica X" (92 chars) and Arial (1 char) as minor faces; the stack falls back to `sans-serif`. These are Thai-capable commercial faces; no foundry page was opened so no substitute is verified.

Measured sizes by characters: 20px (2653), 22px (1186, buttons), 24px (136, nav), 26px (70, `heading`), 19px (59), 30px (45, `display`, the price ticker numerals at weight 500), 50.3101px (19), 35.913px (16), 28px (1). Body is 20px/24px weight 400 with 1px letter-spacing; most text runs at 0.6px letter-spacing (20px/0.6px: 2484 chars, 22px/0.6px: 1094). Buttons are 22px/26.4px, weight 500 (primary) or 400 (secondary), tracking 0.6px. Weights: 400 (3941), 500 (194), 700 (50). The extractor's h1 pick is the price numeral "37.19"; the mobile pass picks the h2 "Our business" at 40px/40px weight 500 (`display-mobile`).

## Layout
Content is held to a global width of 1280px (`--global-content-width: 1280px` in the theme variables). The first band is a 70px header; the next is a 720px media hero; the measured layout reports 2 visible header links (TH and EN), no visible menu toggle on desktop, and up to 4 card columns. News cards appear three across in the capture. Spacing from measured gaps: 5px (20 uses), 15px (16), 25px, 40px, 50px, 100px; paddings 25px (13), 5px (11), 40px (9), 15px (8), 10px, 12px, 20px, 30px, 35px, 60px, 80px, 100px, 125px.

## Elevation & Depth
The signature shadow is a wide, faint blue: `rgba(49, 69, 244, 0.1) 0px 15px 45px 0px` (9 uses; the News button and cards). Others: `rgba(0, 0, 0, 0.1) 5px 10px 15px` (4), `rgba(0,0,0,0.1) 0 4px 8px`, `rgba(0,0,0,0.05) 0 0 10px` and a zero-alpha placeholder shadow on the primary buttons. The primary buttons carry a `0px 0px 0px -7px` shadow of zero alpha, so they are visually flat.

## Shapes
Radii by weight: 20px (6, cards), 100px (5), 12px (3), 10px (3, primary buttons), 16px (3), 100% (2, the circular photo), 10% (2), and two small asymmetric ones (5px 8px 8px 5px and 0px 5px 5px 0px). The result is rounded-rectangular buttons (10-12px), 20px cards and large circular masks for photography.

## Components
- **button-primary**: #00aeef fill, white text, 22px/500, 10px radius, padding 12px 24px, height 50px.
- **button-secondary**: "News", the same fill, 12px radius, padding 12px 30px 12px 20px, height 50px, blue-tinted soft shadow.
- **nav / nav-link**: language switch "TH | EN", 24px black text, header 70px high.
- **card**: 20px-radius news cards with photo top, bold title, grey date; the extracted card token uses a pill radius (9999px) with indigo fill for the circular "Our business" disc.
- Footer in the capture: cyan band with logo, "Follow Us" social icons, address and copyright "© 2024 OR".
Hover states were not captured; focus on the buttons shows a 1px auto outline in the focus pass.

## Design System Architecture
No public design system was found: no brand-guideline or design-system link appears in the opened page text (https://www.pttor.com/en); a Corporate identity section at /en/about#logo and a Company Documents page at /en/about/company-documents were listed but not opened. The shipped CSS is a WordPress build: root variables use the `--wp--preset--*` and Kadence-style `--global-palette*` names, WPForms variables (`--wpforms-button-background-color: #066aab`, `--wpforms-field-border-radius: 3px`) and an "elementskit" icon font. These are theme and plugin defaults. OR's own system is expressed only in the measured values above.

## Do's and Don'ts
- Do use #00aeef for every button and #1b1464 for section headings.
- Do set Thai-capable text in DB HelvethaicaMon X at 20px with 1px tracking.
- Do mask hero photography in large circles over blue wave art.
- Don't reuse the memorial pop-up, black scrim or grayscale treatment as a brand style.
- Don't use theme defaults (#2B6CB0, #007aff, WPForms #066aab) as brand colors.
- Don't add heavy black shadows: the measured shadows are pale and blue-tinted.

## Responsive Behavior
At the 390px mobile pass the h2 "Our business" is 40px/40px, body text stays 20px/24px with 1px spacing, and the "News" button becomes 117 x 44px with padding 10px 30px 10px 20px and 20px text. Mobile font sizes concentrate at 20px (2700 chars), 22px (961), 15px (156), 24px (151) and 40px (35). The menu collapse and column counts on mobile are not measured.

## Iteration Guide
1. Use white and #ecf4fd bands with #616b76 body text and #1b1464 headings.
2. Make buttons #00aeef, 10-12px radius, 22px text with 0.6px tracking.
3. Round photographs as circles; use 20px for cards.
4. Keep shadows at rgba(49, 69, 244, 0.1) 0 15px 45px.
5. Re-measure with `--batch=web/data/batches/phase2.json --only=ptt-oil-retail --force --no-motion` after edits.

## Imagery and Content Notes
The capture's lower half is built from four repeating blocks. First, a fuel-price block with the heading "Oil Price Oct 9, 2026" at 26px indigo, a row of product tags with large numerals (the first reads 37.19) and the note "The price in Bangkok. Excluding local tax (if applicable)". Second, the "Our business" block with a three-item vertical list (Oil Business, Retail Business, International Business), brand logos for PTT Station, FIT Auto, Cafe Amazon and PTT Lubricants, and a white circular text panel with a More Detail button. Third, "OR News" with News and Promotions tabs (the active tab is a cyan pill) and six cards that each show a photo, a title, a grey date such as 09/09/2026 and a small "Read more" link. Fourth, an anniversary banner and a "Contact Channels" pair of photo tiles labelled "1365 Contact Center" and "Procurement". Dates use day/month/year numerals in light grey, and titles are bold black at the 20px body size.
