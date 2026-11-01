---
version: alpha
name: AMATA
category: "Thai Brands"
description: "AMATA Corporation home page: pale grey #e4e6e9 page with white cards, deep green #014b3a pill buttons with 100px radius, green #007852 figures, Montserrat headings at 45px and Yantramanav 18px body."
colors:
  canvas: "#687d86"
  page-body: "#ffffff"
  page-largest: "#e4e6e9"
  ink: "#000000"
  primary: "#014b3a"
  brand-green: "#007852"
  on-primary: "#ffffff"
  ink-green: "#007854"
  ink-pale: "#d9dde2"
  ink-slate-dark: "#111827"
  hairline: "#d5d8db"
  nav-text: "#008776"
typography:
  display:
    fontFamily: Montserrat
    fontSize: 45px
    fontWeight: 600
    lineHeight: 54px
  heading:
    fontFamily: Montserrat
    fontSize: 28px
    fontWeight: 600
    lineHeight: 34px
  subheading:
    fontFamily: Montserrat
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33.6px
  body:
    fontFamily: Yantramanav
    fontSize: 18px
    fontWeight: 300
    lineHeight: 25.2px
  nav:
    fontFamily: Montserrat
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: Yantramanav
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  button:
    fontFamily: Montserrat
    fontSize: 14px
    fontWeight: 500
    lineHeight: 40px
rounded:
  xs: 8px
  sm: 10px
  md: 12px
  lg: 14px
  xl: 24px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 3.25px
  s2: 3.5px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 0px 25px
    height: 40px
  link:
    textColor: "{colors.ink-green}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
---

# AMATA

## Overview
The measured page is the English home page of AMATA Corporation at amata.com (title "AMATA - Industrial Estates for Manufacturers in Thailand & Vietnam"; document language en-gb). AMATA develops and operates industrial estates, which it calls "Industrial Cities", and the page reads as a corporate and investor-facing site: a white header with the wordmark "AMATA ALL WIN" and a single row of links (Home, About, Our Location, Services, Investor Relations, Sustainability, News/Media, Career, Contact, English), a hero carousel of seven vertical photographic panels about sustainability themes, the headline "Southeast Asia's Leading Industrial Estate Developer" in black and green, statistic cards, a dark green call-to-action banner, a location map with country lists, a "Sustainability" section, FAQs, "News & Updates" with three photo cards, and a contact footer for Thailand, Vietnam, Myanmar and Laos.

The capture contains several non-brand overlays that are not documented as brand UI or tokens: a grayscale tribute window ("In Remembrance of...") with a dark scrim over the hero, a "Cookie policy" tab, a chat-assistant bubble ("Ask me anything about AMATA... Get Help NOW") and a close icon. The extraction was re-run once with the popup-handling batch and the overlay was still present, so the hero area and the near-black `#0b0b0b` background area (the scrim) are excluded from the palette below.

## Colors
- **canvas** `#687d86`: slate blue-grey; the generator's canvas pick, which matches the large "AMATA Sustainability" and FAQ section backgrounds (3004 area weight).
- **page-largest** `#e4e6e9`: the pale grey page background that fills most of the page (7663 area weight); **page-body** `#ffffff`: header, stat cards and news cards.
- **ink** `#000000`: headlines and body text (1906 characters); **ink-slate-dark** `#111827` (60) and **ink-pale** `#d9dde2` (111, light text on dark).
- **primary** `#014b3a`: deep green; the fill of the "View All News & Updates" button and of the contact banner (291 area weight). **on-primary** `#ffffff`.
- **brand-green** `#007852`: the green used for statistic numbers, section accents, the question links ("Where can I see land price...") and the "Industrial Estate Developer" half of the headline; nearby greens measured as text are `#007854` (**ink-green**, 649 characters), `#007551` (`--bs-success`) and `#0c8456`.
- **nav-text** `#008776`: teal-green navigation text, also `--bs-primary`, `--bs-info`, `--bs-cyan` and `--bs-blue` in the root variables.
- **hairline** `#d5d8db`: 1px borders and dividers in cards.
Other measured values: a salmon tint `#c57877d7` background (101) and `#c06e6a` text, used for the "Contact Us" label on the banner; `#eeeeee`. The Bootstrap root variables (yellow `#F5D161`, danger `#E53F5F`, orange `#fd7e14`, teal `#20c997`) belong to the framework theme and are not seen in use here.

## Typography
Montserrat (400, 500, 600 and 700) for headings, navigation and numerals, and Yantramanav (300 and 400) for body text; the root `--bs-font-sans-serif` is 'Yantramanav'. The cookie tab uses a Helvetica, Calibri, Arial stack and is excluded.
- **display** Montserrat 45px / 600 / 54px (h1; black with a green second line).
- **heading** Montserrat 28px / 600 / 34px (white on dark panels).
- **subheading** Montserrat 24px / 400 / 33.6px (the intro statement).
- **body** Yantramanav 18px / 300 / 25.2px.
- **nav** Montserrat 20px / 400 / 28px; the header text measures 14px / 400 / 19.6px.
- **link** Yantramanav 16px / 400 / 20.8px.
- **button** Montserrat 14px / 500 / 40px.
By characters: 18px (3032), 24px (610), 14px (295), 32px (197), 15px (139), 48.75px (135), 36px (108). The statistic numerals in the capture are large green Montserrat figures.

## Layout
Measured at 1280px wide with a 70px header. The h1 and the intro text sit in a 1200px container; the intro paragraph column is 946px wide and the descriptive paragraph 750px. Statistics sit in two rows of three white cards. The banner is a full-width rounded rectangle. A second container breakpoint set is published in root variables (UIkit: `--uk-breakpoint-s` 640px, `-m` 960px, `-l` 1200px, `-xl` 1600px). Spacing tokens come from measured paddings and gaps: 3.25, 3.5, 5, 6, 8, 9, 10, 12, 14 and 15px.

## Elevation & Depth
Flat with one soft shadow: `0 0 15px rgba(0,0,0,.05)` on white cards. The other measured box-shadows (`0 0 0 .2rem rgba(0,123,255,.25)`, `0 0 0 .2rem rgba(40,167,69,.25)`) are Bootstrap focus rings. Hierarchy comes from white cards on a pale grey page and one dark green banner.

## Shapes
Measured radii: 500px (22 uses; circular pills and the arrow controls), 100px (the news button), 24px, 14px, 12px, 10px and 50%. The primary button is a 100px pill, 40px high with 0px 25px padding. White stat cards and the dark banner have small rounded corners (the 12px to 24px range appears once each; their exact mapping to elements was not isolated).

## Components
- **button-primary**: `#014b3a` fill, white text, Montserrat 14px / 500, radius 100px, padding 0px 25px, height 40px ("View All News & Updates").
- **nav / nav-link**: white header, teal-green `#008776` Montserrat links.
- **link**: Yantramanav 16px in green for FAQ-style question links with a small right-pointing triangle.
- **statistic card**: white, hairline-ruled, a large green figure and label on the left, and a small right-aligned footnote ("Combined Over All Locations", "Since 1975").
- **banner**: deep green with a faint large A mark, white 32px heading and a salmon "Contact Us" arrow link.
The cookie tab is excluded (the extractor's first CTA candidate was this cookie control, not a brand button).

## Design System Architecture
No public design system or brand guideline was found on the pages opened (the home page markup has no brand, design or press link). The site is built on Bootstrap and UIkit: root variables include the `--bs-*` theme set (`--bs-primary` `#008776`, `--bs-success` `#007551`, `--bs-body-color` `#212529`, `--bs-body-line-height` 1.5, `--bs-body-bg` `#FFF`) and `--uk-breakpoint-*` values. The brand palette is a customised Bootstrap theme with teal-green primary and deep green buttons.

## Do's and Don'ts
- Do use green (`#007852`, `#007854`) for figures and links, black for text, and deep green `#014b3a` for filled buttons and the contact banner.
- Do set statistics large in Montserrat with a small grey footnote.
- Do use white cards on the `#e4e6e9` page.
- Don't treat the tribute overlay, cookie tab or chat bubble as brand components.
- Don't use the Bootstrap palette values that are not seen in use.
- Don't add heavy shadows.

## Responsive Behavior
Not measured. The extractor's 390px pass returned a security-check interstitial (heading "amata.com", text beginning "This website uses a security s...") instead of the home page, so no mobile data for the brand site exists. Only the published UIkit breakpoints (640px, 960px, 1200px, 1600px) are known.

## Iteration Guide
1. Use `#e4e6e9` page, white cards, black ink and deep green `#014b3a` actions.
2. Show key figures in green Montserrat 600.
3. Keep copy factual and corporate.
4. Re-measure the page without the tribute overlay before adding hero colors.
5. Check any new value against `web/data/extracted/amata.json`.

## Imagery and Voice
The hero is a row of tall photographic panels (industrial estates, wastewater recycling, renewable energy) with small white icon-and-label captions such as "100% Wastewater Recycling" and "Renewable Energy"; panels appear tinted green, orange and blue. Photo cards in News & Updates show events and signings. Copy is formal and descriptive: "Every business needs a home and if you are looking for a place to set up or expand your manufacturing base in Southeast Asia, Amata provides the answer. Established in 1989, Amata is a world's leading private developer and operator of industrial real estate sites", and statistics such as "13 Projects", "150+ km² Developed Land", "350K+ People Working", "45 Subsidiaries" and "50 Years Industrial Development".
