---
version: alpha
name: "Polyplus Entertainment"
category: "Thai Brands"
description: "Polyplus Entertainment (polyplus.co.th) is a Thai TV production company site: white canvas with a #f7f7f7 program band, #0099cc footer, Arial 14px and 12px at weight 400, blue #0066ff links turning orange #ff6600, and square 0px corners."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#333333"
  primary: "#0066ff"
  surface-cyan: "#0099cc"
  ink-light: "#cccccc"
  ink-black: "#000000"
  white: "#ffffff"
typography:
  display:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
  body:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 10px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-cyan}"
    textColor: "{colors.white}"
---

## Overview

Polyplus Entertainment (www.polyplus.co.th, title "บริษัท โพลีพลัส เอ็นเตอร์เทนเม้นท์ จำกัด : POLYPLUS ENTERTAINMENT CO.,LTD.") is the website of a Thai television and entertainment production company. The measured home page is a small, table-era layout of 1280px by 1,922px: a white header with the Polyplus logo (a blue disc crossed by a plus shape with a cursive "Polyplus" wordmark) at left and a rounded-corner cyan-outlined nav bar with seven items in lowercase English (home, tv program, drama, actor, pr corporate, about, contact); a light grey band (#f7f7f7) holding a grid of program tiles, each a 240px-wide photograph with a thin dark frame and a blue Thai title and black schedule text beneath; a full-width "JOB" banner image reading "ร่วมงานกับโพลีพลัส | สมัครงาน" with the sub-line "ตำแหน่งงานที่บริษัทกำลังเปิดรับ" (Join Polyplus, apply now; positions the company is currently recruiting); a row of six group logos; an address line with a dotted rule above it; and a full-width cyan footer (#0099cc) with white copyright text "Copyright @ 2024 Polyplus Entertainment Co., Ltd. All rights reserved."

The program tiles read, in Thai: รายการ ตลาดสดพระราม๔ (every Saturday 16.30, channel 33), รายการ ศึก 12 ราศี (every Sunday 12.15, channel 33), รายการ 3 แซ่บ (every Sunday 13.15, channel 33), รายการ แชร์ข่าวสาวสตรอง (Monday to Friday 10.00, Thairath TV channel 32 HD) and รายการ ข่าวใส่ไข่ (Monday to Friday 18.00, Thairath TV channel 32 HD). The six logos in the group row are Polyplus Entertainment, GOTCHA!, a mascot-style logo, Polyplus PR, Polyplus Studio and Polyplus Extra. The footer address is 99 Moo 1, Jaengwattana Soi 43, Jaengwattana Rd., Tumbol Klongkrua, Pakkret District, Nonthaburi 11120, tel 0 2572 4444, fax 0 2572 4445, in Thai and English. The site links to the company's Facebook, Instagram, Twitter fan club and YouTube channels, and to inner pages (tvprogram, drama, actor, pr, about, contact, jobs).

The page is image-led and information-light: the nav labels, the job banner and the logos are images or image-like elements, text is small Arial, and nothing is animated that the extractor recorded. The home page is the 14px/12px Arial layer of a legacy site, not a modern design system.

## Colors

Measured values from `web/data/extracted/polyplus.json`:

- **canvas `#ffffff`**: the page and header background.
- **page-largest `#f7f7f7`**: the grey band behind the program grid (area weight 890).
- **ink `#333333`**: the main text color (263 characters, the program schedule lines).
- **primary `#0066ff`**: the link color of program titles (91 characters). On hover the title color changes to `#ff6600` (measured on all five program links: from rgb(0, 102, 255) to rgb(255, 102, 0)).
- **surface-cyan `#0099cc`**: the footer fill (area 115).
- **ink-light `#cccccc`**: the dotted rule and ellipsis characters (312 characters).
- **ink-black `#000000`**: address and body text (234 characters).
- **white `#ffffff`**: footer text (70 characters).

The shipped CSS corpus lists many more colors: `#ff6600`, `#666666`, `#660000`, `#009966`, `#ff0000`, `#ff9900`, `#0099ff`, `#33ccff`, `#00ccff`, `#663366`, `#009900`, `#ff00ff`, `#ff0099`, `#ff0066`, `#ff3300`, `#00cccc` and `#ff3366`. They come from the legacy stylesheet shared across inner pages. The About page (measured as an extra page, `web/data/extracted/polyplus--about.json`) uses `#666666` for its body text (2,761 characters), `#0099ff` for links (192), `#660000` (185), `#ff0000` (149), `#009966` (69), `#ff3300` (62), `#ff0066` (60) and `#ff3366` (29) for colored headings, and backgrounds `#0099cc` (the footer, 133) and `#00ccff` (103). The About page headline "จุดเล็กๆ ที่ยิ่งใหญ่และมั่นคง" is set in `#ff3366` at 60px. Colors from the corpus are not all rendered on the home page and are recorded here for reference, except where measured.

## Typography

A single system family: **Arial** (970 characters on the home page, 4,590 on the About page), with Helvetica and sans-serif as fallbacks. Every character is weight 400; no fonts are loaded as web fonts (`loadedFonts` is empty). The shipped CSS also mentions Google Sans Text, Google Sans, Roboto and Verdana (none of these were measured on rendered home-page text) and an icon font for the slider (`flexslider-icon`).

- **display** (the extractor's h1, the first program tile text): Arial 14px, weight 400.
- **body**: Arial 12px, weight 400 (616 characters at 12px; 354 at 14px).

Line-height is `normal` and letter-spacing is `normal` throughout. The About page adds sizes of 18px (412 characters, the link headings such as "+ รายการโทรทัศน์"), 16px (169), 22px (38) and 60px (29, the page headline). The shipped CSS lists sizes 11px, 12px, 14px, 15px, 16px, 18px, 20px, 22px, 25px, 30px, 40px, 60px and 80px. Thai text renders in Arial with the system's Thai fallback; no Thai font is declared.

## Layout

The home page is 1280px wide and 1,922px tall. Content is centered in a fixed-width column of about 1040px: the body-text block is 1,040px wide and the logo and nav sit inside the same column. Program tiles are laid out three per row at the top and two on the second row, left-aligned, each 240px wide with the title and schedule centered under the picture. The grey band spans the full width, the job banner is a framed image with a 1px blue border, and the logo row sits below with generous empty space before the address. `paddings`, `gaps` and `borderRadii` are empty on the home page, so no spacing values were measured there. The About page measures a single padding value of 10px (2 elements); the tokens file records `s1: 10px` from that page.

## Elevation & Depth

Flat. No box-shadows were measured on the home page (`boxShadows` is empty). The shipped CSS corpus lists two shadows: `0 1px 4px rgba(0, 0, 0, 0.2)` and `inset 0 0 3px rgba(0, 0, 0, 0.3)`, both associated with the slider component, with no rendered use on the home page. No border colors were measured. In the capture, depth is limited to the 1px dark frame on the program photographs, a dotted rule above the address and the contrast between the grey band, the white page and the cyan footer.

## Shapes

`borderRadii` is empty on the home page: every rendered element computes 0px, and the tokens file therefore declares `rounded: none: 0px`. The shipped CSS lists radii of 4px and 20px, which are not tied to a measured element; the nav bar outline is rounded in the capture but no computed radius was recorded for it, so no 20px or 4px token is declared.

## Components

- **Top nav bar**: seven items in lowercase English, set in a cyan-blue on white inside a rounded outline, laid out in one row to the right of the logo. Their exact computed style was not captured (nav role is null).
- **Program tile**: framed photo 240px wide, a bold blue Thai title (link `#0066ff`, hover `#ff6600`), and two lines of schedule text in `#333333`, centered.
- **Job banner**: a single wide image link with a 1px blue border, large Thai headline in cyan-blue and the faded word "JOB" behind it.
- **Group logos**: six small logo images in a single row.
- **Address block**: dotted `#cccccc` rule, black 12px bilingual lines.
- **Footer**: full-width `#0099cc` bar with centered white 12px copyright.

No buttons, inputs or cards were detected (`ctaCandidates` is empty, `cards` is empty, `input` is null), so none are declared.

## Design System Architecture

No public design system or brand guideline exists on the opened home page, and the page links only to its own inner pages and social profiles. The site is a static HTML site: the page head links two stylesheets, `style_polyplus.css` and `flexslider.css`, and no CSS custom properties are declared (`rootVars` is empty). The de-facto system is therefore a short list of hard-coded colors, Arial at 12px and 14px, and image-based navigation. Source: https://www.polyplus.co.th/ (measured with `web/scripts/extract-tokens.mjs`; the About page was also measured at https://www.polyplus.co.th/about/index.html). A WebFetch of the home page returned garbled Thai text because the page is declared as windows-874, so the Thai strings above were read from the capture image, not from the fetch.

## Do's and Don'ts

- Do keep the light grey `#f7f7f7` band behind program tiles and the cyan `#0099cc` footer.
- Do set links in `#0066ff` with an orange `#ff6600` hover.
- Do keep text in Arial at 12px and 14px, weight 400.
- Do show programs as photo tiles with a title and a schedule line.
- Don't introduce rounded cards, shadows or web fonts; none are measured on the home page.
- Don't use the extra corpus colors as primary brand colors; they are shared legacy-stylesheet values, not measured on the home page.
- Don't set Thai text in a Latin-only face; no Thai font is declared by the site.

## Responsive Behavior

Measured on the 390px pass: the first program text stays Arial 14px / weight 400 in a 320px-wide block, and the body-text role stays Arial 12px in a 1,040px-wide block, as recorded. The mobile pass found no h2, CTA or nav role, and the sizes by character are 12px (616) and 14px (354). Whether the tiles reflow or the page scrolls horizontally at mobile width is not measured.

## Iteration Guide

1. Canvas #ffffff, program band #f7f7f7, footer #0099cc, text #333333, link #0066ff with #ff6600 hover.
2. Arial 14px and 12px at weight 400 with normal spacing.
3. Radius 0px; no shadows.
4. Lay out three program tiles per row, 240px wide, with the title and schedule centered under the photo.
5. Run `node web/scripts/verify-designs.mjs --slug=polyplus` after edits and never change measured values.
