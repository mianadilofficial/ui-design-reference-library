---
version: alpha
name: BKNIX (Bangkok Neutral Internet eXchange)
category: "Thai Brands"
description: "Thailand's neutral Internet exchange site, built on Bootstrap 5.0.2 plus a reduced Flat UI stylesheet: Lato throughout (16px body, 29px bold section headings), a #34495e navy navbar, agenda panel and footer, #1abc9c turquoise date tiles and hover, #e74c3c red headlines, white stat cards with 20px radius and a 0 20px 40px shadow, and a live Chart.js traffic graph."
colors:
  canvas: "#ffffff"
  surface-gray: "#eeeeee"
  ink: "#34495e"
  ink-deep: "#2c3e50"
  ink-label: "#7f8c8d"
  ink-muted: "#95a5a6"
  ink-faint: "#acb8b9"
  ink-gray: "#888888"
  link: "#2a6496"
  primary: "#e74c3c"
  accent-teal: "#1abc9c"
  switch-teal: "#1b927e"
  hairline-on-dark: "#ffffff33"
  stat-blue: "#28527d"
  stat-aqua: "#93dccc"
  stat-red: "#db2128"
  stat-pink: "#ffcccc"
typography:
  display:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 31px
  nav:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20.6666px
  heading:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 29px
    fontWeight: 700
    lineHeight: 31.9px
  news-title:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26.4px
  body:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.5555px
  list:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 17.1px
    fontWeight: 400
    lineHeight: 29.45px
  stat-number:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
  stat-label:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 19.2px
    fontWeight: 500
    lineHeight: 33.0666px
    letterSpacing: 1px
  stat-note:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
  caption:
    fontFamily: Lato, Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 22.3889px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 20px
  xl: 34px
spacing:
  s1: 1px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 8px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 5px 0px
  nav-link-hover:
    textColor: "{colors.accent-teal}"
    borderColor: "{colors.accent-teal}"
  panel-agenda:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.caption}"
    rounded: "{rounded.md}"
    padding: 0px 24px
  date-tile:
    backgroundColor: "{colors.accent-teal}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 100px
  card-stat:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-label}"
    typography: "{typography.stat-label}"
    rounded: "{rounded.lg}"
    padding: 20px 10px
    height: 161px
    borderColor: "{colors.hairline-on-dark}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 20px 40px 0px
  language-switch:
    backgroundColor: "{colors.switch-teal}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    height: 30px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
---

## Overview

BKNIX is the Bangkok Neutral Internet eXchange, an Internet exchange point operated by BKNIX Co., Ltd., "a designated IXP operator under THNIC Foundation's BKNIX project" (the footer's own wording), with a Bangkok office on Phahonyothin Road; the site's news text calls it the first neutral Internet Exchange Point in Thailand. The English home page (`https://bknix.co.th/en/`, redirected from `https://bknix.co.th`) is a utility portal for network operators: it explains how to connect, shows live statistics and lists meetings, with a TH switch for the Thai site.

From top to bottom the capture shows: a navy navbar with the "bknix" logo (a dark wordmark with a green-and-red X), a home icon and the dropdown menus Connect to BKNIX, Statistics, Services, Technical, Members, News&Events and About BKNIX, a Login link and a teal TH switch with a Thai flag; a grey-gradient band holding an image carousel (a conference photo captioned in white over a translucent bar, with a blue left rule); a two-column row, "Latest Member" (date, network name with ASN, logo, a "More..." link) beside a navy "Agenda" panel in which turquoise date tiles sit beside teal event links and white venue text; a "Traffic" area chart with axis labels (400 G to 0) and a summary line "Current : 385.51 G, Average : 271.66 G, Maximum : 396.53 G"; four stat cards (82 UNIQUE ASNs, 171 CONNECTED PORTs, 4.81 Tb TOTAL CAPACITY, 480 Gb/s PEAK TRAFFIC); and "News and Activities" with the logo at the left and a red headline with paragraphs at the right.

The voice is technical and institutional: network terms (ASN, peering, IXP, BGP communities, RPKI, route server), event listings with venue lines, and long explanatory news. The look is a 2010s flat-UI corporate style rather than a modern product site: a flat navy bar, flat colored tiles, and one soft-shadowed card style for the numbers that matter.

## Colors

The palette comes from the Flat UI colors shipped in `https://bknix.co.th/en/css/flat-ui-reduce.css` (which contains `#1abc9c`, `#34495e`, `#2c3e50`, `#e74c3c`, `#2ecc71`, `#3498db`, `#bdc3c7` and others) and from the page's own CSS (`main.css` sets `.navbar-custom { background-color: #34495e; }`).

- **Ink `#34495e`** is the most-read text color (1662 weighted characters) and also the navbar, agenda panel and footer background (1134 weighted area, the largest). **Ink deep `#2c3e50`** (20 characters) is the base text color declared for the stat numbers (their visible fill is the gradient); **`#7f8c8d`** (52) is the stat label, **`#95a5a6`** (91) muted text, **`#acb8b9`** (113) the smallest stat notes and **`#888888`** (7) the grey "More..." link.
- **Canvas `#ffffff`** is the page; **surface gray `#eeeeee`** (512 weighted area) is the gradient band behind the carousel.
- **Primary `#e74c3c`** (red) colors the news headline (176 characters).
- **Accent teal `#1abc9c`** is the date tiles (65 weighted area), the agenda event links and every hover color: nav links change from `#ffffff` to `#1abc9c` with a `#1abc9c` border on hover. **Switch teal `#1b927e`** is the language switch's track.
- **Link `#2a6496`** (26 characters) is the in-page "More..." link under Latest Member.
- **Stat gradients** are declared in the home page's inline style: the first three numbers use `linear-gradient` from `#28527D` to `#93DCCC` at 45deg, 10deg and 0deg, and the fourth uses `#DB2128` to `rgb(255, 204, 204)` at 120deg, clipped to the text.
- **Hairline `#ffffff33`** is the 1px border of the stat cards.

Framework colors from Bootstrap 5.0.2 (`--bs-primary: #0d6efd`, `--bs-success: #198754` and others) are present in `:root` but none is used on the measured home page.

## Typography

Lato is the only face (2945 weighted characters), declared by `@font-face` in `flat-ui-reduce.css` from the site's own `/en/fonts/lato/` files (black, bold, bold italic, regular and italic files), with `Helvetica, Arial, sans-serif` as fallback. Weights are 400 (2733), 700 (160) and 500 (52).

| Token | Size / line | Weight | Used for |
|---|---|---|---|
| heading | 29px / 31.9px | 700 | section headings (h4): Latest Member, Agenda, Traffic, News and Activities, Contact Us |
| news-title | 24px / 26.4px | 400 | news headline (h6) in `#e74c3c` |
| stat-number | 48px (3rem) | 700 | stat figures, gradient-filled |
| display | 18px / 31px | 400 | navbar links and list text (the extractor's "h1" is the "Connect to BKNIX" link because the page has no h1) |
| list | 17.1px / 29.45px | 400 | dates and member names |
| stat-label | 19.2px / 33.0666px | 500, 1px tracking | UNIQUE ASNs, CONNECTED PORTs |
| body | 16px / 27.5555px | 400 | agenda links, paragraphs, footer |
| caption | 13px / 22.3889px | 400 | agenda venue lines |
| stat-note | 12.8px / 12.8px | 400 | "Active AS Numbers over platform" |
| nav | 12px / 20.6666px | 400 | brand text in the navbar |

By weighted characters the sizes are 16px (1732), 14px (345), 18px (223), 13px (199), 24px (176), 12.8px (113), 29px (55), 19.2px (52), 17.1px (30) and 48px (20). Text is not transformed; the stat labels are typed in capitals in the HTML ("UNIQUE ASNs") and the rule `text-transform: uppercase` in the stylesheet is commented out.

Font substitutes: Lato files are served by the site itself; no substitute was measured. The page's fallback stack is `Helvetica, Arial, sans-serif`.

## Layout

The page is 5363px tall at 1280px. It uses Bootstrap 5.0.2 (`navbar-expand-lg`, `navbar-expand-md`, `container`, grid classes). Measured sizes: the navbar spans 1256px at 123px high with `8px 0px` padding; the Agenda panel is 509px wide and 466px high (`0px 24px` padding, 5px radius); a section heading block is 509px wide in the two-column row and 1063px wide in the full-width rows; the stat cards are 243px wide and 161px high; the footer is 1280px wide and 455px high with `0px 12px` padding.

The stats row is a flex container declared inline as `.stats-container { display: flex; gap: 30px; max-width: 1200px; justify-content: center; }`, and each `.stat-card` is `flex: 1; max-width: 300px`. Measured paddings are 12px (87 uses), 8px (23), 20px (18), 10px (15), 15px (5), 1px (3), 18px (3), 16px (2), 5px (1), 24px (1), 32px (1); the only measured gap is 30px (2).

Vertical order: navbar; carousel; Latest Member and Agenda; Traffic chart with summary; stat cards; news; footer with contact details, links such as Get Quotation, Members, IXP Manager, Looking Glass, Speedtest, RPKI and Privacy Policy.

## Elevation & Depth

Most of the page is flat: bands of navy, grey and white with 1px hairlines. Depth is reserved for the stat cards: `box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2)` (the one measured shadow, on 4 elements), a `rgba(255, 255, 255, 0.95)` background (measured as `#fffffff2`), a `1px solid rgba(255, 255, 255, 0.2)` border and `backdrop-filter: blur(10px)`.

The inline stylesheet declares the hover state: `transform: translateY(-10px)` and `box-shadow: 0 30px 60px rgba(0, 0, 0, 0.2)` with `transition: all 0.3s ease`. The language switch has an inset focus glow `0 0 1px #2196F3` and the Flat UI stylesheet adds `inset 0 0 5px #222` to a `.shadow` utility. The carousel caption sits on a translucent dark bar over the photograph.

## Shapes

Radii: 5px on agenda panels and date tiles (6 elements), 20px on the stat cards (4), 4px on dropdown menus (4), 3px (2) and 34px on the language switch (1, `border-radius: 34px` with a 50% knob). Navigation links, the navbar and the footer have square corners.

Agenda date tiles are solid turquoise rectangles with white bold date text (16px / 700), 162px wide and 100px high for the first tile, with the year in smaller white text. The language switch is a 65px by 30px capsule with a circular Thai-flag knob. The logo is a lowercase "bknix" wordmark whose X is made of a green and a red stroke.

## Components

**Navbar (`nav`, `nav-link`, `nav-link-hover`).** `#34495e`, `8px 0px` padding, white links with `5px 0px` padding and dropdown carets; hover turns text and border `#1abc9c`. The brand text is 12px, the links 18px.

**Language switch (`language-switch`).** A 65px by 30px capsule in `#1b927e` with a white knob carrying a Thai flag and the label "TH".

**Agenda panel (`panel-agenda`) and date tiles (`date-tile`).** A navy 5px-radius panel with `0px 24px` padding holding rows of a turquoise tile (white day range and year) and event text: a teal link title at 16px and white venue lines at 13px.

**Latest Member list.** Rows with the date (17.1px), the network name and ASN (18px) and the member logo at the right, separated by hairlines; a blue "More..." link.

**Traffic chart.** A Chart.js area chart (the page loads Chart.js 4 with a Prometheus datasource plugin) with a teal-green gradient fill, gridlines, y-axis labels from 0 to 400 G and a summary line. The exact series colors were not measured.

**Stat card (`card-stat`).** White card, 20px radius, `20px 10px` padding, 161px high, soft large shadow: a 48px bold gradient number, a 19.2px label in `#7f8c8d` with 1px tracking, and a 12.8px note in `#acb8b9`.

**Footer (`footer`).** `#34495e` with white text; headings in 29px bold ("Contact Us"), the BKNIX Co., Ltd. address, telephone, fax, e-mail and tax id, and link columns.

A cookie-consent banner script (cookieconsent 3.1.1) is loaded by the page and is not documented as brand UI.

## Design System Architecture

BKNIX publishes no public design system or brand guidelines; the home page links to its About pages (What is BKNIX, Why BKNIX, How to become BKNIX, Careers, Contact) and to technical documentation, but none to a style guide. The system is a layered stylesheet stack that the page loads:

- Bootstrap 5.0.2 (`https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css`) with Bootstrap Icons 1.5.0 and 1.13.0: grid, navbar and dropdown behavior and the `--bs-*` variables.
- `https://bknix.co.th/en/css/flat-ui-reduce.css` (about 20 KB), a reduced Flat UI stylesheet containing the Lato `@font-face` rules and the Flat UI color set.
- `https://bknix.co.th/en/css/main.css` (about 3 KB), which sets `.navbar-custom` to `#34495e` and the navbar brand to white 12px Lato.
- Three inline `<style>` blocks on the home page for the language switch (`.switch2`, `.slider2`) and the stat cards (`.stats-container`, `.stat-card`, `.stat-number`, `.stat-label`, `.stat-description`).
- jQuery 2.2.4, Owl Carousel, nice-select, DataTables, video.js and Chart.js 4 for behavior.

There are no custom design tokens; colors are hard-coded hex values from the Flat UI palette. The front matter is built from computed styles measured on the rendered page and from the inline rules cited in SOURCES.json.

## Do's and Don'ts

Do
- Keep the interface in the Flat UI palette: navy `#34495e` for chrome, turquoise `#1abc9c` for dates and hover, red `#e74c3c` for headlines and one stat.
- Use Lato at 16px / 27.5555px for body text and 29px bold for section headings.
- Use soft-shadowed white 20px-radius cards only for key statistics, with gradient-filled 48px numbers.
- Show network data plainly: dates, ASNs, logos and a clear area chart with a summary line.
- Turn links and nav items `#1abc9c` on hover.

Don't
- Do not use Bootstrap's `--bs-primary` blue `#0d6efd` or its other framework colors; none appears on the measured page.
- Do not add shadows to ordinary panels or buttons; only stat cards have one.
- Do not use rounded corners above 5px except the stat cards (20px) and the language switch (34px).
- Do not document the cookie banner or the carousel arrows as brand components.
- Do not uppercase labels in CSS; the stat labels are typed in capitals instead.

## Responsive Behavior

The home page declares `@media (max-width: 767px)` rules for the navbar (`.navbar-header { min-width: 100% }` and a centred, non-floated `.na`), `@media (max-width: 768px)` rules for the stat cards (the flex container becomes `flex-direction: column` with a 20px gap, cards take `max-width: 100%` and `30px 20px` padding, the number drops to 2.5rem and the label to 1rem) and `@media (max-width: 480px)` (number 2rem). Bootstrap 5.0.2 supplies its usual navbar collapse classes (`navbar-expand-lg` and `navbar-expand-md` appear on the two navbars); the flat-ui stylesheet declares `@media (min-width: 768px)`.

The 390px mobile pass measured: the first Latest Member row (a name and ASN, "EdgeNext (AS139057)") at 18px / 400 / 31px, 195px wide and 62px high; the navigation block at 366px wide and 134px high on `#34495e` with 8px vertical padding; and the size distribution 16px (1784 weighted characters), 14px (341), 13px (199), 24px (176), 18px (146), 12.8px (113), 29px (55) and 17.1px (30). The 48px stat figures and 19.2px labels are absent from that list; the mapping of each desktop size to its mobile size is not measured, and no mobile capture image exists.

## Iteration Guide

1. Start with Bootstrap 5.0.2 and load Lato at 400, 500 and 700; set body to 16px / 27.5555px in `#34495e` on `#ffffff`.
2. Build the navbar as `#34495e`, white 18px links, hover `#1abc9c`; add a 65px by 30px `#1b927e` language capsule at the right.
3. Use 29px bold headings in `#34495e`; show events in a `#34495e` 5px-radius panel with `#1abc9c` date tiles and `#1abc9c` link titles.
4. Present key numbers as white cards (20px radius, `20px 10px` padding, `0 20px 40px rgba(0, 0, 0, 0.2)` shadow, 30px gap, 300px max width), each with a gradient 48px number, a 19.2px `#7f8c8d` label with 1px tracking and a 12.8px `#acb8b9` note.
5. Headline news in `#e74c3c` at 24px / 26.4px and keep "More..." links in `#2a6496`.
6. Check every new value against `web/data/extracted/bknix.json` or the inline styles cited in SOURCES.json before adding a token.
