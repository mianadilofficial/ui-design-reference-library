---
version: alpha
name: TCDC (Thailand Creative & Design Center)
category: "Thai Brands"
description: "TCDC Thai-language All Program page: Poppins with Kanit and Sarabun, single green #2e8037 accent on white with a black top bar, 28px pill buttons, circular icon controls and a two-column poster card grid with thin green rules."
colors:
  canvas: "#ffffff"
  ink: "#2e8037"
  primary: "#2e8037"
  on-primary: "#ffffff"
  surface-2: "#000000"
  surface-3: "#efefef"
  ink-3: "#999999"
  ink-4: "#9e9e9e"
  ink-5: "#161616"
typography:
  display:
    fontFamily: Poppins, Kanit, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: Poppins, Kanit, sans-serif
    fontSize: 22px
    fontWeight: 700
    lineHeight: 33px
    textTransform: uppercase
  button:
    fontFamily: Poppins, Kanit, sans-serif
    fontSize: 14px
    fontWeight: 700
    letterSpacing: 1.25px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 10px
  md: 28px
  pill: 9999px
spacing:
  s1: 2.5px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 30px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px
  nav:
    textColor: "{colors.canvas}"
---

# TCDC (Thailand Creative & Design Center)

## Overview
The measured page is TCDC's Thai-language "All Program" listing at https://www.tcdc.or.th/th/home (the queued URL /en redirected there; page title "TCDC All Program กิจกรรมและนิทรรศการ"). TCDC is a design-center and exhibition organisation, and the page reads as an events catalogue. A black top bar holds the TCDC logo, an "ALL BRANCHES / Change branch" selector and search, language ("EN") and menu icon buttons; below it a rotating yellow campaign banner (here the Creative Economy Agency online academy, with bold geometric circles, triangles and quarter shapes) leads into a breadcrumb ("ALL BRANCHES / PROGRAM"), a green uppercase heading "PROGRAM", a sort-by icon row, a year selector (2569) and a two-column grid of exhibition cards. Each card is a large poster image, a green uppercase title in Poppins and Thai, a green rule, a calendar icon with the date range and a location pin with the branch name. Page length is 3700px at 1280px. The identity is carried by one green (#2e8037) against white, black and the loud, colourful artwork of each exhibition. The page is a catalogue, so copy is dates, titles and venues rather than slogans.

## Colors
`primary` is #2e8037, a mid green used for the "E-NEWSLETTER" button fill, the page heading, every card title, the rules under cards, the calendar and pin icons and the pagination chips; `ink` is also #2e8037 because headings and card text are green. `on-primary` is #ffffff, `canvas` is #ffffff, `surface-2` is #000000 (top bar) and `surface-3` is #efefef (light grey band). Greys measured: `ink-3` #999999, `ink-4` #9e9e9e (breadcrumb, placeholder and "ALL BRANCHES" link text) and `ink-5` #161616 (near-black text). Root CSS variables include the Bootstrap palette (`--blue` #007bff, `--red` #dc3545, `--yellow` #ffc107, `--pink` #e83e8c, `--indigo` #6610f2, `--orange` #fd7e14, `--success` #28a745, `--info` #17a2b8, `--warning` #ffc107, `--light` #f8f9fa, `--gray-dark` #343a40). Those are framework defaults and cookie-consent variables (`--cc-*`), not brand colors, and are not declared as tokens.

## Typography
The English face is Poppins (`--en-font: "Poppins", sans-serif`), loaded at regular, italic, 600 and 700; Thai text uses Kanit (400, 600, 700) and Sarabun (400, 500, 700 plus italics), with the stack Poppins, Kanit, sans-serif on the measured elements. `display` is 24px / 36px at weight 700 uppercase (the "PROGRAM" heading); `body` is 22px / 33px at 700 uppercase (card titles; the measured body role is this bold title style, with Sarabun carrying running Thai text); `button` is 14px at 700 uppercase with 1.25px letter-spacing. Navigation labels are 16px at 400. All three open-source families are available from Google Fonts. Uppercase Latin letters plus Thai headings are used together in titles such as "นิทรรศการ "OUT OF THE BOX"".

## Layout
Desktop is measured at 1280px width. The page uses a centered content column with a two-column card grid separated by a wide gutter; the black top bar is 44px high on the nav measurement. Cards in the same row align their poster images on the top edge and their date and venue rows on a shared line, with the second row's cards beginning lower when a title wraps to more lines. Spacing steps measured: 2.5px, 4px, 5px, 6px, 8px, 12px, 15px, 16px, 20px and 24px. Bootstrap breakpoints are published in the root variables (`--breakpoint-lg` 992px, `--breakpoint-xl` 1200px). The footer area starts with a green Thai heading "บริการ" (Services).

## Elevation & Depth
Depth is minimal on the page itself. Measured box shadows are two Material-style stacks: `rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.14) 0px 6px 10px 0px, rgba(0, 0, 0, 0.12) 0px 1px 18px 0px` (2 elements) and `rgba(0, 0, 0, 0.2) 0px 3px 1px -2px, rgba(0, 0, 0, 0.14) 0px 2px 2px 0px, rgba(0, 0, 0, 0.12) 0px 1px 5px 0px` (the button). Separation otherwise comes from thin green rules and poster artwork.

## Shapes
Measured radii: 50% (12 elements: circular icon buttons and pagination chips), 100% (4), 10px (3), 4px (1), 4px 4px 0px 0px (2) and 0px 0px 4px 4px (1) for panel ends, and 28px (1) for the pill button. The "E-NEWSLETTER" button is a 30px tall pill with 28px radius and 0px 16px padding. Posters are square-cornered rectangles.

## Components
- **button-primary**: #2e8037 fill, #ffffff 14px bold uppercase label with 1.25px letter-spacing, 28px radius, 30px tall, 0px 16px padding, Material-style 3-layer shadow.
- **nav**: white labels on the #000000 bar.
- **Event card**: poster, green uppercase title, green underline rule, date row with calendar icon and venue row with pin icon.
- **Pagination**: round green chips, the current page (1) in a darker green.
- **Branch selector**: "ALL BRANCHES | Change branch" with a caret, in #999999 grey on black.
- **Sort-by icons**: four outline icons (calendar, chart, people, building) preceded by the Thai label "เรียงตาม:".
A cookie-consent dialog (`--cc-*` variables) is third-party UI and is not documented as a brand component.

## Design System Architecture
No public brand-guideline or design-system page was found: https://www.tcdc.or.th/en was opened with WebFetch and returned only its title, with no brand-asset or design-system link. The shipped CSS is Bootstrap 4 based (root variables `--blue`, `--indigo`, `--breakpoint-lg`, `--font-family-sans-serif`, plus Material Design Icons loaded as a font) with project variables `--en-font` ("Poppins", sans-serif) and a `--cc-*` set from a cookie-consent library. The de-facto system is therefore Bootstrap plus Poppins/Kanit/Sarabun and a single green.

## Do's and Don'ts
- Do use #2e8037 for headings, rules, icons and the primary pill.
- Do set titles in uppercase Poppins with Thai Kanit or Sarabun alongside.
- Do let each exhibition's poster carry its own bright colour; keep the surrounding chrome white, black and green.
- Don't use Bootstrap's default blue (#007bff) for links or buttons; it is a framework variable only.
- Don't add shadows to poster cards.
- Don't present the consent dialog as brand UI.

## Responsive Behavior
Measured at a 390px viewport: the h1 stays at 24px / 36px at weight 700, and the "E-NEWSLETTER" button renders 350px wide and 48px tall at 16px. The mobile pass recorded no layout, header-link or band data, so menu behavior and column counts below desktop were not measured.

## Iteration Guide
1. Start with #ffffff canvas, #2e8037 as the single accent and a #000000 top bar.
2. Set titles in Poppins 700 uppercase at 22px and the page heading at 24px / 36px; Thai in Kanit or Sarabun.
3. Build the grid as two columns of posters with a green rule, calendar-date row and pin-venue row.
4. Use circular (50%) icon and pagination controls and a 28px-radius pill for the one call to action.
5. Re-run `node web/scripts/verify-designs.mjs --slug=tcdc` after every change and keep all values traceable to web/data/extracted/tcdc.json.
6. Voice: titles are the exhibition names in capitals with Thai prefixes such as "นิทรรศการ" (exhibition), dates are Buddhist-era (for example "20 ต.ค. - 15 พ.ย. 2569") and venues are branch names ("TCDC กรุงเทพฯ").
7. Imagery: the captured cards use full-width exhibition posters in saturated, graphic styles (collage, neon gradient, pixel lettering, serif editorial), the banner uses flat yellow with black, blue, pink and green geometric shapes; keep the interface neutral so the posters remain the loudest element.
8. Dates and venues sit on separate rows under a thin green rule, each led by a green icon, and a long venue list wraps onto several lines at right-aligned text; keep that two-row meta pattern for every program.
