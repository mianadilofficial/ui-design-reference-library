---
version: alpha
name: Prince of Songkla University
category: "Thai Brands"
description: "Prince of Songkla University (psu.ac.th/en), southern Thailand: white canvas, #666666 body copy, deep PSU blue #003c71 footer and links, light blue #68a8de accent, psu-font 40px 600 headings, uppercase tracked menus over a blue silk hero, 3-4px corners and a translucent pill TOP NEWS button."
colors:
  canvas: "#ffffff"
  ink: "#666666"
  primary: "#003c71"
  accent-light-blue: "#68a8de"
  on-primary: "#000000"
  surface-3: "#f8f9fa"
  ink-3: "#6c757d"
  ink-4: "#00000066"
  ink-6: "#000000b3"
  hairline: "#00000020"
  button-primary-bg: "#67a7dd40"
typography:
  display:
    fontFamily: psu-font
    fontSize: 40px
    fontWeight: 600
    lineHeight: 60px
  display-mobile:
    fontFamily: psu-font
    fontSize: 28px
    fontWeight: 600
    lineHeight: 42px
  body:
    fontFamily: psu-font
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28.8px
  button:
    fontFamily: psu-font
    fontSize: 16px
    fontWeight: 700
    lineHeight: 28.8px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 3.2px
  md: 4px
  lg: 5px
  xl: 15px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14.4px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 45px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.canvas}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-3}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

`https://www.psu.ac.th/en/` (title "Prince of Songkla University", lang en) is the English home page of Prince of Songkla University (PSU) in southern Thailand, measured at 1280px: 304 visible elements, 6,215px scroll height. The extraction was clean (the queue flagged this URL as potentially blocked, but the measured page is the real site). It is a university portal with a traditional structure and a deep-blue identity.

Top to bottom in the capture: a translucent violet header laid over the hero with the "PSU" wordmark ("PRINCE of SONGKLA UNIVERSITY") and a gold ranking badge at left; a small uppercase utility row (PROSPECTIVE STUDENTS | CURRENT STUDENT | ALUMNI | STAFF | ARCHIVES, then TH / EN toggles and a search icon) above the main uppercase menu (LIFE ON CAMPUS, ABOUT, RESEARCH, ACADEMIC SERVICES, SDGs, ERASMUS+, CONTACT); a full-width deep-blue silk-fabric hero slide with the hand-lettered "PSU" in white, "Prince of Songkla University", the Thai name "มหาวิทยาลัยสงขลานครินทร์ | ม.อ.", the claims "No.1 SDGs in Thailand" and "RANKED #6 among Thai Universities", the campus list "PATTANI | HAT YAI | PHUKET | SURAT THANI | TRANG", circular prev/next arrows and a two-dot pager; then the "ABOUT PSU" eyebrow with flanking blue rules over the heading "Who are we ?"; a split block with a tall photograph of the university's golden emblem on a blue ground at left and a white panel at right holding a blue title and two justified paragraphs about the educational philosophy ("progressivism", "student-centered", "sustainable learning", "Development is change"); a statistics strip (5 Campuses in the south, 38 Faculties and Units for Graduate Production, 321 Programs, 14 Students per Lecturer) with large numerals; a "PROGRAM" eyebrow and "Programs offer" heading; and a four-up photo strip of students and staff (Undergraduate and so on). The dark `#003c71` footer carries uppercase columns such as CORPORATE CULTURE.

Voice: formal institutional English with proud ranking claims, set in uppercase labels and plain paragraphs.

The imagery is ceremonial and human at once: a gilded royal-style emblem photographed against deep blue, graduates and lab coats in the programme strip, and craft and community scenes beside them. Blue is the connecting colour, from the silk-like hero to the emblem's backdrop to the footer, so the page reads as one institutional palette even though the photographs differ. Headings are calm and centred, while body paragraphs are long and justified, in the manner of an official statement.

## Colors

Text colours by characters: `#666666` (1,443), `#ffffff` (579), `#6c757d` (215), `#00000066` (205), `#000000` (165), `#000000b3` (91), `#003c71` (74), `#000000cc` (63), `#721c24` (28), `#68a8de` (4). Backgrounds by area: `#ffffff` (1,571), `#003c71` (1,200), `#f8f9fa` (868), `#e9ecef` (819), `#000000` (640), `#00000008`, `#f8f9fa69`, `#f8d7da`, `#67a7dd40`.

- **canvas `#ffffff`**: body background. **ink `#666666`**: paragraph copy (the most-read text colour); headings are black at 80% (`#000000cc`).
- **primary `#003c71`**: PSU's deep blue, used for the footer fill (1,200 area), link text and the blue title "Prince of Songkla University". It is a measured colour, chosen as primary because the page's only detected button is a translucent tint.
- **accent-light-blue `#68a8de`**: the light blue (measured on 4 characters; the `#67a7dd40` TOP NEWS button fill is a similar light blue at 25% alpha). **button-primary-bg `#67a7dd40`**: that translucent button fill.
- **surface-3 `#f8f9fa`** and `#e9ecef`: light grey panels. **ink-3 `#6c757d`**: muted grey text. **hairline `#00000020`**: card borders.
- `#721c24` on `#f8d7da` (63 area) is an alert style pair measured on a few elements, not a brand colour. The stylesheet root also holds Bootstrap's default palette (`--primary: #007bff`, `--green: #28a745`), which is excluded.

## Typography

One custom family, **psu-font**, with icon fonts icomoon and FontAwesome (2,867 text characters in psu-font). No fallback stack is declared in the measured values.

- **display** (h2 "Who are we ?"): 600, 40px/60px; mobile 28px/42px.
- **body**: 400, 16px/28.8px, `#666666`, justified paragraphs.
- **button**: 700, 16px/28.8px, uppercase.

Sizes by characters: 16px (1,822), 13px (470), 12.8px (215), 40px (116), 18px (91), 12px (64), 15px (62), 20px (20), 50px (7, the large statistic numerals). Weights: 400 (2,451), 700 (293), 600 (78), 300 (45). The base element is 12px uppercase with 0.5px letter-spacing, which is the menu and utility style. Eyebrows are small tracked uppercase; headings are semibold sentence case.

## Layout

A full-width hero, then a centred container for the heading and an offset split block (the photo hangs left, the white text panel overlaps it at right). The statistics strip is four equal cells separated by thin vertical rules; programme photos run edge to edge in four equal columns. The header is a translucent bar over the hero rather than a separate band. Spacing values: 1, 4, 6, 8, 10, 12, 14.4, 15, 16, 20px. The footer is 427px high.

## Elevation & Depth

Shadows measured: `rgba(0, 0, 0, 0.3) 0px 3px 10px 0px` (2), `rgba(0, 0, 0, 0.4) 0px 2px 8px 0px`, `rgba(0, 0, 0, 0.3) 0px 2px 6px 0px` and `rgba(0, 0, 0, 0.13) -20px 5px 14px -15px`. The overlapping white text panel against the photo, the translucent header and the carousel arrows give the page its layering.

## Shapes

Radii measured: 4px (10 elements), `3px 3px 0px 0px` (9) and `0px 0px 3px 3px` (9), 800px (6, pill buttons), 3.2px (4), 50% (3, circular arrows), 5px (2), 3px, 15px. The look is mostly square with slight 3-4px rounding; pills appear only on the news button.

## Components

- **button-primary (TOP NEWS)**: `#67a7dd40` translucent fill, black 700 uppercase 16px text, 800px radius (pill), `8px 16px` padding, 45px high.
- **Menu and utility rows**: uppercase 12px with 0.5px tracking, white over the hero; hover on "PROSPECTIVE STUDENTS" changed text from black to `rgb(0, 60, 113)` (`#003c71`).
- **Carousel arrows**: circular translucent violet buttons; "Previous"/"Next" hover keeps white text.
- **Eyebrow**: small uppercase label flanked by 1px blue rules.
- **Statistic cell**: large numeral with a two-line grey label.
- **Footer**: `#003c71`, white uppercase 700 16px headings.

## Design System Architecture

No public design-system or brand-guideline page was opened, and none is cited. The measured root variables are Bootstrap 4's (`--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--primary`, `--danger`), so the site is built on Bootstrap with a custom font (`psu-font`) and a deep-blue brand colour (`#003c71`) applied in page CSS. Measured from `https://www.psu.ac.th/en/` (`web/data/extracted/psu.json`).

## Do's and Don'ts

- Do use `#003c71` for footer fills, links and titles; keep text `#666666` on white.
- Do set eyebrows in small uppercase with flanking rules and headings in 600 weight.
- Do keep corners small (3-4px) and reserve pills for the news button.
- Do show institutional facts as large numerals with short labels.
- Don't use Bootstrap's `#007bff` as a brand colour.
- Don't treat `#721c24` / `#f8d7da` (alert pair) as brand colours.
- Don't set body copy narrower than 16px/28.8px.
- Don't place text over the hero without the translucent header band.

## Responsive Behavior

The mobile pass recorded type: the h2 went from 40px/60px to 28px/42px (600, `#000000cc`), and the mobile size distribution was 16px (882 characters), 13px (470), 12.8px (215), 18px (91), 28px (71) and 40px (45). The TOP NEWS call-to-action kept the same style. The stylesheet declares Bootstrap breakpoints at 576px, 768px and 992px. Mobile nav form and column counts were not measured.

## Iteration Guide

1. Canvas `#ffffff`, text `#666666`, brand blue `#003c71`, light blue `#68a8de`.
2. psu-font: 40px/60px 600 headings, 16px/28.8px body, 12px uppercase tracked menu.
3. Eyebrow plus heading before each section; statistics as large numerals.
4. Deep-blue `#003c71` footer; translucent header over a blue hero.
5. Re-measure: `node web/scripts/extract-tokens.mjs --slug=psu --url=https://www.psu.ac.th/en --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=psu`.
