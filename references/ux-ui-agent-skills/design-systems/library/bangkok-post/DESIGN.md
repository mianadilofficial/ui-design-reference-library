---
version: alpha
name: Bangkok Post
category: "Thai Brands"
description: "Bangkok Post (bangkokpost.com), Thailand's English-language newspaper: a Bootstrap-based news home page with a #050d81 navy masthead and footer, Charis SIL serif headlines in bold 30px and 24px, #0054c6 blue pill tabs and chips, 10px-radius thumbnails, and black rules under uppercase section titles."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#111111"
  primary: "#0054c6"
  on-primary: "#ffffff"
  brand-navy: "#050d81"
  navy-dark: "#022751"
  surface-light: "#f5f5f5"
  surface-border: "#e7e8eb"
  surface-blue-tint: "#ebf1fa"
  ink-black: "#000000"
  ink-article: "#222222"
  ink-meta: "#999999"
  ink-secondary: "#666666"
  accent-cyan: "#56bed5"
typography:
  display:
    fontFamily: "\"Charis SIL\", sans-serif"
    fontSize: 30px
    fontWeight: 700
    lineHeight: 39px
  display-mobile:
    fontFamily: "\"Charis SIL\", sans-serif"
    fontSize: 22px
    fontWeight: 700
    lineHeight: 28.6px
  heading:
    fontFamily: "\"Charis SIL\", sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  body:
    fontFamily: "\"Charis SIL\", Poppins, sans-serif"
    fontSize: 19px
    fontWeight: 400
    lineHeight: 28.5px
  button:
    fontFamily: "\"Charis SIL\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
  chip:
    fontFamily: "\"Charis SIL\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    textTransform: uppercase
  label:
    fontFamily: Arial, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 10px
    textTransform: uppercase
  input:
    fontFamily: "\"Charis SIL\", Poppins, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 23px
  5xl: 24px
  6xl: 30px
  circle: 50%
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 13px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 16px
    height: 32px
  chip-category:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.chip}"
    rounded: "{rounded.3xl}"
    padding: 7px 15px
    height: 28px
  chip-label:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: "{rounded.lg}"
    padding: 4px 13px
    height: 20px
    borderColor: "{colors.primary}"
  chip-label-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    borderColor: "{colors.primary}"
  button-outline:
    textColor: "{colors.ink-meta}"
    typography: "{typography.chip}"
    rounded: "{rounded.lg}"
    padding: 10px 20px 8px
    height: 34px
    borderColor: "{colors.ink-meta}"
  headline-link-hover:
    textColor: "{colors.primary}"
  text-input:
    textColor: "{colors.ink-article}"
    typography: "{typography.input}"
    height: 24px
  thumbnail:
    backgroundColor: "{colors.page-largest}"
    rounded: "{rounded.lg}"
    height: 130px
  footer:
    backgroundColor: "{colors.brand-navy}"
    textColor: "{colors.on-primary}"
    height: 811px
---

## Overview

The Bangkok Post is Thailand's long-running English-language newspaper, and its home page at bangkokpost.com presents itself as a dense, newspaper-like front page with the tagline "Bangkok Post - The world's window on Thailand". The page is organized as a news portal: a navy masthead, a grey category row, a lead story carousel with a "MOST RECENT" wire column, and stacked topic sections (Trending News, You May Like, Thailand, Business, Opinion, Life, Guru, Learning, Video, Topics, Subscribe).

The measured masthead is a navy (#050d81) bar with the Bangkok Post blackletter wordmark centered in white, small uppercase links at the right ("ALL PRODUCTS", "NEWSLETTER"), and search and menu icons. Beneath it a light-grey category row carries uppercase bold serif links (NEWS, THAILAND, BUSINESS, LIFE, GURU, LEARNING, MULTIMEDIA, EVENTS in the capture; the live markup lists NEWS, THAILAND, BUSINESS, OPINION and the other sections). A full-width banner ad sits below the nav, then the lead story: a large image with a white bold 30px headline over it (for example "Federation puts flood losses at B6-7bn"), five dash-shaped carousel indicators beneath, and at right the "MOST RECENT" list, where each item has a small blue timestamp and a bold black headline separated by hairlines, and a "MORE" outlined button.

Below, a row of three small-thumbnail stories with blue category labels ("OPINION | 09 Oct 2026", "GENERAL | 08 Oct 2026") and bold titles; an "Ask Bangkok Post anything" answer box (the DeeperDive widget, with a blue circular send button and pale-grey suggested-question pills); "TRENDING NEWS >" in uppercase bold with a black rule and five image cards; "YOU MAY LIKE" beside a "MOST VIEWED / MOST COMMENT" box with numbered blue circles; and section headers such as "THAILAND >" with pill tabs ("GENERAL" filled blue; "POLITICS", "SPECIAL REPORT", "PR NEWS", "PEOPLE" plain). House promotions for the paper's annual subscription ("2,999 THB/year", "GET THE ANNUAL PLAN") repeat between sections.

The voice is classic English newspaper: short declarative headlines, section labels in capitals, bylines and timestamps in tiny sans-serif. Third-party advertising banners, a sticky bottom ad bar and a "SUBSCRIBE NOW" popup appeared over the captures; they are ads and popups, not brand UI, and are not documented.

## Colors

A navy and blue identity on white, grey and black type.

- **brand-navy #050d81** — the masthead and footer fill (`--c_new` in the CSS; 904 area units); white (#ffffff) text sits on it (2220 characters).
- **primary #0054c6 / on-primary #ffffff** — the blue of filled pills ("MOST VIEWED", "GENERAL", the "BUSINESS" chip), category labels and the hover color of headline links; it also appears as the CSS variable `--dd-primary-color`. 13 borders are measured in this blue.
- **ink #111111** (3204 characters) and **ink-black #000000** (2355) — headline and body text; `--default: #111`. Black is also the most common measured border color (21 borders), matching the rules under section titles in the capture.
- **ink-article #222222** (176) — article-style paragraph text and input text.
- **ink-meta #999999** (533) and **ink-secondary #666666** (344) — timestamps, labels and secondary text.
- **canvas #ffffff** and **page-largest #f2f2f2** — the page surface and the placeholder fill behind thumbnails (the largest measured background area, 7433 units, belongs to the many image placeholders); **surface-light #f5f5f5** (1596) fills suggestion pills and cards.
- **navy-dark #022751** (194 units), **surface-border #e7e8eb** (134) and **surface-blue-tint #ebf1fa** (79) — other measured fills.
- **accent-cyan #56bed5** — 103 characters of text, element not identified.

The shipped CSS includes Bootstrap's default colors (#007bff, #6c757d, #212529, #dc3545, #28a745, #ffc107, #17a2b8 and the others as `--blue`-family variables) and widget colors (`--dd-primary-gradient-start: #5e53e2`, #7e1fff and #2f42d4); none of those is a Bangkok Post brand color.

## Typography

One serif, **Charis SIL** (400 and 700, with italics), carries nearly all text (7576 characters), set through `--font-default: "Charis SIL",sans-serif`. **Arial** sets the tiny uppercase labels and dates (1202 characters), **PT Sans** (323 characters) and **Montserrat** (62) appear in smaller roles, and `--font-quicklink` names "Sora". The Google Fonts link on the page requests Charis SIL, PT Sans and Sora. The fallback in the measured stacks is generic `sans-serif` (and Poppins in two stacks), so a serif substitute is not published.

- **display — Charis SIL 700, 30px / 39px.** The lead headline in white over its image; **display-mobile — 22px / 28.6px** at 390px.
- **heading — 24px / 28.8px, 700.** Section titles such as "MOST RECENT" (`--txt-header-highlight: 30px`, `--txt-header: 22px` also declared).
- **body — 19px / 28.5px, 400.** Question pills and article-style copy.
- **button — 16px / 16px, 700.** The "MOST VIEWED" tab pill.
- **chip — 14px / 14px, 700, uppercase.** "GENERAL" and "MORE".
- **label — Arial 10px / 10px, 400, uppercase.** Category chips such as "BUSINESS" and "THAILAND".
- **input — 16px / 24px, 400.** The "Ask Bangkok Post anything" box.

Sizes by character count: 18px (3084), 16px (1423), 10px (986), 13px (730), 11px (581), 14px (567), 30px (554) and 12px (340). Weights: 700 (6395), 400 (2581), 300 (142) and 600 (45). Tracking is set only on small labels: 11px / 0.31px (24 characters).

## Layout

The desktop page measured 1280px wide and 13514px tall, making it a long scroll. The CSS declares Bootstrap's `--breakpoint-xl: 1200px`. The layout is a two-column newspaper grid inside a centered container: wide left column for the lead image and card rows, narrow right column for the "MOST RECENT" and "MOST VIEWED" lists. Card rows are three or five across with 196px by 130px thumbnails (10px radius). Section titles are uppercase bold with a chevron and a black rule beneath. The footer measured 811px tall.

Measured gaps are 10px (40), 5px (24), 15px (20), 16px (10) and 12px (6); paddings are 15px (64), 10px (28), 20px (20), 4px (14), 30px (14), 7px (13) and 18px (13).

## Elevation & Depth

Mostly flat. Hairline shadows `rgb(230, 236, 240) 0px 1px 0px 0px` were measured on 10 elements. Heavier shadows were measured on floating items: `rgba(0, 0, 0, 0.2) 4px 5px 30.2px 0px` (6), `rgba(0, 0, 0, 0.4) 0px -4px 6px -3px` (1) and `rgba(0, 0, 0, 0.2) 0px -1px 1px 0px` (1); which elements carry them was not mapped (a sticky ad bar and a promotional popup were present in the capture). The lead headline is white over the image; a #0000004d fill (86 units) was measured as an overlay.

## Shapes

Rounded but modest. Thumbnails and cards use 10px (54 elements), pills and chips 20px (20) and 16px (25), circles 50% (25: numbered markers and the send button), 4px (17) and 24px (13); one shape has `10px 50px 50px 10px` (5 elements). Inputs and nav rows are square. Text boxes in the Ask widget are fully rounded pills.

## Components

**Primary pill button.** "MOST VIEWED": #0054c6 fill, white label, Charis SIL 700 at 16px, radius 20px, padding `8px 16px`, height 32px, width 145px (at 390px: 14px type, 30px tall, 131px wide).

**Category chip.** "GENERAL": the same blue, uppercase 14px / 700, radius 20px, padding `7px 15px`, height 28px, width 94px.

**Label chip.** "BUSINESS", "THAILAND": Arial 10px uppercase, blue fill with a 1px blue border, radius 10px, padding `4px 13px`, 20px tall; on hover the fill turns white and the text blue.

**Outline button.** "MORE": transparent, 1px #999999 border and text, 14px / 700, radius 10px, padding `10px 20px 8px`, height 34px, width 83px.

**Headline links.** Black (#111111) bold headlines that turn #0054c6 and underlined on hover, as measured for the "MOST RECENT" items; the tab "MOST RECENT" also turns blue.

**Ask box.** A pill-shaped input with the DeeperDive logo, placeholder "Ask Bangkok Post anything", a blue circular send button and two suggested-question pills in #f5f5f5.

**Thumbnail.** 196px by 130px image on a #f2f2f2 placeholder with a 10px radius.

**Footer.** #050d81 field, 811px tall, with white bold 16px section links (NEWS, THAILAND and its sub-links General, Politics, Special report, PR news, People; BUSINESS: General, Motoring, Investment; OPINION: Columnist, Postbag; WORLD; PROPERTY; SPORTS; LIFE and its sub-sections) and the terms link.

## Design System Architecture

No public design system or brand guideline is published for Bangkok Post. The home page https://www.bangkokpost.com/ was opened through curl; an automated fetch of the same URL returned a redirect to tollbit.bangkokpost.com instead of page content. The page footer links to "Terms of use" (/terms) and "Online advertising" (/mediainfo/solution) and no brand-guidelines, logo or design-system page.

The de-facto system is a Bootstrap-based site: the page links `bootstrap.min.css` from `static.bangkokpost.com/v3/assets/bootstrap/`, plus `homepage.min.css`, owlCarousel2, bxslider and smartphoto plugin styles, and the root exposes Bootstrap's variables (`--blue`, `--red`, `--success`, `--breakpoint-xl: 1200px`) next to site variables (`--c_new: #050d81`, `--default: #111`, `--font-default`, `--txt-detail: 18px`, `--txt-header: 22px`, `--txt-header-highlight: 30px`). Widgets bring their own variable families: `--dd-*` for the answer widget and `--cm-video-*` and `--tbl-video-reel-*` for video players. Media queries in `homepage.min.css`: `max-width: 991px` (26 rules), `max-width: 576px` (23), `max-width: 767px` (18 plus 10), `max-width: 1199px` (17), `min-width: 1200px` (5), `min-width: 992px` (4) and `min-width: 768px` (4).

## Do's and Don'ts

- Do set headlines in Charis SIL 700 (30px lead, 24px section, 16 to 18px list) and metadata in tiny uppercase Arial.
- Do use navy #050d81 for the masthead and footer and blue #0054c6 for pills, chips, labels and hover states.
- Do rule section titles with a black line and keep a chevron after the title.
- Do round thumbnails and cards at 10px, pills at 20px, and keep inputs and nav rows square.
- Do keep headline links black and turn them blue with an underline on hover.
- Don't treat banner ads, the sticky ad bar or the subscription popup as brand UI.
- Don't use Bootstrap's default blues and greens as brand colors.
- Don't use shadows on cards; hairlines and rules do the separating.
- Don't set body copy lighter than 400; measured weights are 700 and 400 with a few 300 and 600.

## Responsive Behavior

Measured at the 390px mobile pass: the lead headline drops from 30px to 22px / 28.6px (319px wide), "MOST RECENT" from 24px to 20px / 24px, article text stays 19px / 28.5px, and the "MOST VIEWED" pill measures 14px type, 30px tall, 131px wide with the same `8px 16px` padding and 20px radius; the mobile nav role has a #050d81 fill. The most common mobile sizes are 18px (2857 characters), 10px (1011), 16px (822), 12px (543), 22px (526), 13px (469), 14px (362) and 20px (348).

The site CSS declares breakpoints at 576px, 767px, 991px, 1199px and 1200px. How the nav, columns and card rows reflow below those widths was not measured, and no mobile capture image exists beyond the numeric pass.

## Iteration Guide

1. Build the masthead in #050d81 with a white wordmark; add a light-grey category row of uppercase bold serif links.
2. Set headlines in Charis SIL 700 with 39px lines at 30px, and metadata in 10px uppercase Arial.
3. Use #0054c6 for active tabs, chips and labels; invert (white fill, blue text) on hover.
4. Rule section titles with black lines, use 10px-radius thumbnails and hairline dividers in lists.
5. Keep ads and popups out of the reference design; keep house subscription promos as separate full-width bands.
6. Re-measure the lead carousel, nav and mobile reflow before documenting them.
7. Gate with `node web/scripts/verify-designs.mjs --slug=bangkok-post`.
