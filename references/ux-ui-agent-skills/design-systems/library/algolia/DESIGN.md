---
version: alpha
name: Algolia
category: "Developer Tools & IDEs"
description: "Algolia's marketing site: Sora bold display at 70px with -4px tracking over deep navy #000033 and #06133d bands, Inter for navigation and UI, a #003dff blue Get started action and white-outlined Fix your search button at 56px tall with 8px radius, light #f6f6f6 content bands with #23263b headings and #2563eb card titles."
colors:
  canvas: "#f6f6f6"
  page-largest: "#000033"
  ink: "#374151"
  primary: "#003dff"
  on-primary: "#ffffff"
  surface-navy-deep: "#06133d"
  ink-on-dark: "#ffffffe6"
  ink-heading: "#23263b"
  accent-blue: "#2563eb"
  ink-link: "#484c7a"
  hairline: "#0f11284d"
  search-button-border: "#000000"
  nav-accent: "#457aff"
  focus-ring: "#bfdbfe"
typography:
  display:
    fontFamily: Sora, sans-serif
    fontSize: 70px
    fontWeight: 700
    lineHeight: 73.5px
    letterSpacing: "-4px"
  display-mobile:
    fontFamily: Sora, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 42px
    letterSpacing: "-4px"
  heading:
    fontFamily: Sora, sans-serif
    fontSize: 42px
    fontWeight: 700
    lineHeight: 55.008px
    letterSpacing: "-0.42px"
  body:
    fontFamily: Sora, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 31px
  button-search:
    fontFamily: Inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 29.25px
  button-outline:
    fontFamily: Sora, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: 0.32px
rounded:
  xs: 2px
  sm: 2.5px
  md: 3px
  lg: 5px
  xl: 6px
  2xl: 8px
  3xl: 10px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 6.4px
  s5: 7.2px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.2xl}"
    height: 56px
  button-outline:
    textColor: "{colors.on-primary}"
    typography: "{typography.button-outline}"
    rounded: "{rounded.2xl}"
    padding: 0px 24px
    height: 56px
    borderColor: "{colors.on-primary}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 61, 255, 0.12) 0px 0px 6px 2px
  button-search:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-search}"
    rounded: "{rounded.xl}"
    padding: 8px 16px
    height: 42px
    borderColor: "{colors.search-button-border}"
  link:
    textColor: "{colors.ink-link}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.nav-accent}"
  nav-link:
    textColor: "{colors.nav-accent}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.on-primary}"
    rounded: "{rounded.2xl}"
    padding: 24px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgb(199, 210, 254) 0px 10px 15px -3px, rgb(199, 210, 254) 0px 4px 6px -4px
    transform: matrix(1, 0, 0, 1, 0, -32)
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
---

# Algolia

## Overview

algolia.com presents Algolia as "The AI search and retrieval platform" (page title). The home page alternates dark navy
bands and light grey bands down a 4,843px desktop scroll. It opens with a gradient news strip ("Algolia acquires
Velou…"), a navy utility bar ("Join us: Gartner IT Symposium/Xpo™ 2026" on the left; Company, Partners, Support, Login
and a language picker on the right), and the main navigation: the Algolia wordmark, Products, Solutions, Pricing,
Developers, Resources, a rounded search field, a white-outlined **Fix your search** button and a blue **Get started**
button.

The hero is set on #000033 navy: "Agentic. Generative. Search>_" in huge white Sora bold with a cyan terminal-prompt
glyph, a short subline ("Built to optimize outcomes for every goal you set"), and on the right a composite of a
glowing code panel ("Agentic EXPERIENCES", a `curl` request and JSON), a pill-shaped "AI agent shopping assistant"
search chip with a blue microphone button, and a photo of a smiling developer at a laptop.

Following bands: "Powering AI retrieval across use cases" on light grey with an accordion of capabilities; an
"ANALYST RECOGNITION" band on #06133d with a hypnotic concentric-ring visual carrying Forrester, IDC, Gartner and
Paradigm B2B marks; "Solutions that fulfill your business goals" with a photo and five white cards whose titles are blue;
"See customer success in action" with an eight-tile grid of customer photos and white logos (Club Med, DocMorris,
Huckberry, fern, Shoe Carnival, DonorsChoose, Arc'teryx and one more); a closing "Harness the power of goal driven AI
search with Algolia" band on a dark blue gradient; and a navy footer. The voice is enterprise-confident and
AI-forward: short noun-stacked headlines, outcome-driven sublines.

The capture also shows a cookie-consent dialog and an "Ask us" chat bubble. Both are third-party overlays and are not
documented as brand UI here.

## Colors

- **Navy** — `page-largest` #000033 is the largest painted area: hero, navigation, the closing CTA band and the
  footer. `surface-navy-deep` #06133d is the second-largest area (the analyst-recognition band).
- **Light bands** — `canvas` #f6f6f6 is the body background and the light content bands; #ffffff fills cards.
- **Brand blue** — `primary` #003dff. Measured as the Get started button's hover fill (rgb(0, 61, 255)), as the hover
  text color of every primary nav item (Products, Solutions, Developers, Resources), and as a border color. The
  outline button carries a soft glow of the same blue at 12% opacity.
- **Accent blue** — `accent-blue` #2563eb is a frequent text color (card titles such as "Quickly surface the right
  content" and inline blue headings).
- **Ink** — `ink` #374151 is the most-read readable text on light bands; `ink-heading` #23263b sets section headings
  ("Powering AI retrieval across use cases"); `ink-link` #484c7a is the bold "Learn more" link color.
- **On dark** — white #ffffff for headlines and buttons on navy; `ink-on-dark` #ffffffe6 (90% white) for hero and
  band body copy.
- **Utility bar accent** — `nav-accent` #457aff colors "Join us:" in the utility bar.
- **Hairline** — `hairline` #0f11284d (navy at 30% alpha) separates accordion rows and list items.
- **Focus** — `focus-ring` #bfdbfe is the 2px focus outline (offset 2px) measured on the "AI mode" button.

## Typography

Two families are self-hosted from `/modules/algolia-base-template/css/fonts/`:

- **Sora** (300, 400, 600, 700) — every headline and most body copy. Display: **70px / 73.5px, weight 700,
  letter-spacing -4px** (the hero). Section headings: **42px / 55.008px, 700, -0.42px**; other measured heading sizes
  include 52px, 48px and 46px. Body: **20px / 31px, 400** in the hero and band paragraphs. Outline button: **16px /
  24px, 600, +0.32px**.
- **Inter** (400, 500, 600, 700) — navigation and UI. Nav and utility links: **14px / 20px, 600**. Bold inline links:
  **18px / 29.25px, 700**. The search panel's button: **16px / 24px, 400**. The body element default is Inter 16px/26px
  weight 500.

Sora carries 4,162 measured characters against Inter's 1,867. Cabin and Montserrat are also loaded but do not appear in
the visible-text frequency measurement. Headlines are sentence case with tight negative
tracking; the only uppercase label is the small eyebrow "ANALYST RECOGNITION".

## Layout

At 1280px the page is a sequence of full-width bands (measured y / height): media header 0/120, navy hero 120/631,
light use-case band 751/941, navy-deep analyst band 1692/701, a three-column solutions band 2393/633, light customer
band 3026/334, a media strip 3360/462, light band 3822/212, closing CTA band 4034/470 and navy footer 4504/339. The
header shows 9 visible links. Content is left-aligned in the hero and analyst bands and centred for section titles.
Cards in the solutions row sit five across over a photograph; the customer grid is four tiles per row. The measured
spacing scale runs 2, 4, 6, 6.4, 7.2, 8, 10, 12, 14 and 16px; cards use 24px padding.

## Elevation & Depth

- **Lifted card** — the highlighted solution card uses a periwinkle shadow (`rgb(199, 210, 254) 0px 10px 15px -3px`,
  `rgb(199, 210, 254) 0px 4px 6px -4px`) and is translated up 32px (`matrix(1, 0, 0, 1, 0, -32)`) relative to its row.
- **Outline button glow** — `rgba(0, 61, 255, 0.12) 0px 0px 6px 2px`.
- **Panels** — a large soft navy shadow (`rgba(15, 17, 40, 0.18) 0px 24px 48px -12px`) appears once.
- Depth on dark bands comes from glows, gradients and the concentric-ring artwork rather than from shadows.

## Shapes

The most frequent radius is **8px** (buttons and cards), followed by **10px**, **6px** (the search panel button) and
**3px**. **16px** and **9999px** occur on a few elements (the search field and chips are pill-shaped in the capture),
and **2px**, **2.5px** and **5px** appear on small details. Avatars and icon buttons use 50% / 100%. Corners are
moderate: nothing on the page is square, and nothing large is fully rounded except pill controls.

## Components

- **Get started (primary)** — white text, 8px radius, 56px tall in the header. At rest its fill is painted by a
  background image (the measured background-color is transparent; the capture shows a blue gradient); on hover the
  fill becomes solid #003dff.
- **Fix your search (outline)** — transparent with a 2px white border, Sora 16px/600 white text with +0.32px tracking,
  8px radius, 56px tall, 0 24px padding, and the 12% blue glow.
- **Search panel button** — "Show more results": #000033 fill, 1px black border, Inter 16px/400, 6px radius, 42px
  tall, 8px 16px padding. It belongs to the site-search panel, not the page's main call to action.
- **Navigation** — navy bar, white Inter links that turn #003dff on hover; utility bar with #457aff "Join us:".
- **Accordion list** — capability rows separated by navy hairlines; the open row shows a blue title, a description and
  a "Learn more" link, inside a white card.
- **Solution cards** — white, 8px radius, 24px padding, blue Sora titles and grey body text; the active card lifts
  32px with a periwinkle shadow.
- **Customer tiles** — full-bleed photographs with white customer logos.
- **Footer** — navy, white Inter 14px links (Careers, Contact Us, About Algolia, Anti-Modern Slavery Statement), social
  icons and a newsletter prompt.

## Design System Architecture

Algolia's about page links "Brand guidelines" to https://algolia.frontify.com/ (a Frontify portal titled "Algolia
Style Guide"; its contents did not render without an interactive session, so no values are taken from it) and a logo
pack at https://www.algolia.com/algolia-logo-pack.zip. The public GitHub org (https://github.com/algolia) publishes
the InstantSearch and Autocomplete UI libraries but no repository for the marketing site's design tokens.

The shipped page shows the working system: fonts live under `algolia-base-template`, and `:root` carries the
Autocomplete library's `--aa-*` variables (`--aa-primary-color-rgb: 62,52,211`, `--aa-search-input-height: 44px`,
`--aa-panel-shadow`, `--aa-font-weight-*`) for the site search, plus `--esw*` variables from the chat widget. The
marketing palette itself (navy #000033, #06133d, blue #003dff, #2563eb, greys #374151 / #6b7280 / #111827) is not
exposed as named variables in `:root`.

## Do's and Don'ts

**Do**
- Set headlines in Sora bold with tight negative tracking; keep Inter for navigation and small UI.
- Alternate navy (#000033 / #06133d) and light grey (#f6f6f6) bands to pace the page.
- Use #003dff for the main action and hover states; pair it with a white-outlined secondary button on dark bands.
- Show the product as code, search chips and AI assistant UI alongside real people.
- Use 8px radii for buttons and cards.

**Don't**
- Don't document the cookie dialog or the "Ask us" chat bubble as brand components.
- Don't use the search panel's navy "Show more results" button as the page CTA style.
- Don't set long body copy in Inter at the 70px display scale, and don't uppercase headlines.
- Don't put heavy black shadows on cards; elevation is a pale periwinkle shadow or a blue glow.

## Responsive Behavior

Measured at 390px:

- Display heading: Sora **40px / 42px**, 700, -4px tracking (from 70px). Section heading: **34px / 44px**, -0.34px.
  Body: **16px / 25.6px** (from 20px / 31px).
- The header is 80px tall, navy, with a `rgba(0, 0, 0, 0.1) 0px 1px 20px 0px` shadow; 1 header link was visible and
  no menu toggle was detected by the extractor.
- Bands keep their order: navy hero 0/667 (content 16–374), light use-case band 667/1278 (32–358), navy-deep band
  1945/1033, solutions band on #eeeeee 2978/372, customer band on #eeeeee 3583/1291, closing CTA 5492/432 and footer
  5924/429. Each band recorded 1 content column.
- The search panel button keeps its 42px height and 6px radius.

Card-row behaviour beyond the single recorded column was not measured.

## Iteration Guide

1. Start with a #000033 navy hero; set the headline in Sora 700 at 70px/73.5px with -4px tracking in white.
2. Add the header: wordmark, Inter 14px nav links that hover to #003dff, a pill search field, an outlined white button
   and a blue Get started button, both 56px tall with 8px radius.
3. Follow with a #f6f6f6 band, a #23263b Sora 42px heading, and white 8px cards with 24px padding and blue titles.
4. Insert a #06133d band for proof points (analyst marks, metrics) with white Sora headings at 52px.
5. Use photography of people and product UI composites; keep glows and gradients to dark bands.
6. On mobile, scale display to 40px/42px, headings to 34px/44px and body to 16px/25.6px.
