---
version: alpha
name: Bumrungrad International Hospital
category: "Healthcare & Wellness"
description: "Bumrungrad International Hospital (bumrungrad.com/en) is a Bangkok hospital portal set in Open Sans with Thai, CJK, Arabic, Burmese and Khmer fallbacks, a medical green (#0bb288) for buttons and headings on white and #f0f0f0, small 3.5px-radius uppercase buttons, a warm brown-gold secondary ramp, and four colour-blocked quick-action tiles."
colors:
  canvas: "#ffffff"
  page-body: "#f0f0f0"
  ink: "#646569"
  ink-muted: "#717681"
  heading-green: "#00b28b"
  heading-dark-green: "#00594d"
  primary: "#0bb288"
  on-primary: "#ffffff"
  primary-hover: "#098e6c"
  secondary-soft: "#6ecbb8"
  brand-brown: "#8a6e4b"
  tile-tan: "#af976d"
  tile-rose: "#a16d63"
  accent-gold: "#daa900"
  text-gold: "#b68400"
  text-alert: "#f2615f"
typography:
  display:
    fontFamily: "\"open sans\", Prompt, \"Noto Sans JP\", \"Noto Sans SC\", Amiri, Padauk, Hanuman, sans-serif"
    fontSize: 35px
    fontWeight: 300
    lineHeight: 42px
  display-mobile:
    fontFamily: "\"open sans\", Prompt, \"Noto Sans JP\", \"Noto Sans SC\", Amiri, Padauk, Hanuman, sans-serif"
    fontSize: 19.88px
    fontWeight: 300
    lineHeight: 23.856px
  subheading:
    fontFamily: "\"open sans\", Prompt, \"Noto Sans JP\", \"Noto Sans SC\", Amiri, Padauk, Hanuman, sans-serif"
    fontSize: 24.5px
    fontWeight: 800
    lineHeight: 29.4px
  body:
    fontFamily: "\"open sans\", Prompt, \"Noto Sans JP\", \"Noto Sans SC\", Amiri, Padauk, Hanuman, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: "\"open sans\", Prompt, \"Noto Sans JP\", \"Noto Sans SC\", Amiri, Padauk, Hanuman, sans-serif"
    fontSize: 12.25px
    fontWeight: 400
    lineHeight: 17.15px
  nav:
    fontFamily: "\"open sans\", Prompt, \"Noto Sans JP\", \"Noto Sans SC\", Amiri, Padauk, Hanuman, sans-serif"
    fontSize: 11.9px
    fontWeight: 400
    lineHeight: 17.85px
rounded:
  xs: 3.5px
  sm: 4px
  md: 5.25px
  lg: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3.5px
  s3: 4.2px
  s4: 5.25px
  s5: 7px
  s6: 10px
  s7: 10.5px
  s8: 14px
  s9: 15px
  s10: 16.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 5.25px 10.5px
    height: 30px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 7px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 4.2px 14px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 5.25px 10.5px
    height: 36px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

This document describes the English home page of Bumrungrad International Hospital, https://www.bumrungrad.com/en (title "Bumrungrad International Hospital | Bangkok Thailand"), a private hospital in Bangkok that serves international patients. The page is a service portal: doctor search, appointments, inquiries, medical travel, packages, clinics and centres, news. The desktop capture is 1,280px wide and 5,699px tall.

The visual identity is calm and clinical. The page body is a light grey (`#f0f0f0`) with white bands and white cards, text is a mid grey (`#646569`), and one medical green (`#0bb288`) carries buttons, links, pagers and headline accents. A deep green (`#00594d`) is used for the large section titles, which are set in weight 300 and centred above a short gold rule. A brown-gold family (the site's `--primary-*` ramp, `#8a6e4b` at its centre) is declared in the stylesheet, and the capture shows brown-gold in the logo and tan and rose in two of the tiles, a warm counterweight to the green.

The capture shows, from the top: a white header with the gold-brown crest logo "Bumrungrad International HOSPITAL" at the left, a wide search field with a magnifier, then a notification bell with a red count badge, a user icon, a cart icon with a badge and an "EN" language switch in green; under it two rows of small centred text links (About Bumrungrad, Patient Services, Medical Travel, Packages, Insurance, Contact Us and a +66 phone number; then Find a Doctor, Clinics & Centers, Conditions & Treatments, Book Appointment, Send Inquiry) with the active "Packages" link shown as a tan filled tab; a full-width hero carousel on a warm beige gradient ("NEW FEATURE" gold tag, "Access Your Clinical Reports" and an italic subtitle in a white rounded label over phone mock-ups) with thin arrows and four pager dots; four equal colour-blocked tiles (green "Find a Doctor", grey "Send an Inquiry", tan "Book Appointment", rose "Bumrungrad Anywhere"), each with an outlined circular icon, a 20px white title and a small description; "Our Specialty Centers" with a split card (photo left, white text panel right: green centre name, short gold rule, grey paragraph, "LEARN MORE" link), thin chevron arrows outside the card, six pager dots and a small green "SEE ALL CENTERS" button; "Bumrungrad News" with three white cards (photograph, green bold headline, grey excerpt, "Read more" with a chevron) and "SEE ALL NEWS"; and two large photographic tiles ("Meet Our World Class Specialists", "Plan to Visit") with white captions.

Copy is plain and reassuring, written for an international reader: short imperative labels ("Find a Doctor", "Plan to Visit"), small uppercase button text, sentence-case news headlines. Photography is bright, real-people healthcare imagery; illustrations are anatomical renders in the specialty-centre carousel.

## Colors

- **Green `#0bb288` (primary).** Button fill and border (12 elements carry it as a border colour), the active pager dot, links ("Read more", "LEARN MORE"), the "EN" switch and the page's `--bs-primary`, `--primary` and `--secondary-500`. Its hover state fills `#098e6c`.
- **Green headings.** `#00b28b` (827 characters, mostly bold headlines) and the deeper `#00594d` (79 characters; the "Our Specialty Centers" and "Bumrungrad News" titles, declared as `--secondary-600`).
- **Grey ink `#646569`.** The body text colour, 4,099 characters; it is also the legacy `--secondary` variable and the fill of the grey "Send an Inquiry" tile (59 units of background area). `#717681` (369 characters) is a lighter secondary text.
- **White `#ffffff` and page grey `#f0f0f0`.** White is the largest background area (3,828 units); the body background role is `#f0f0f0`.
- **Soft green `#6ecbb8`.** Declared as `--secondary-300` and `--tertiary`; measured on 202 units of background area.
- **Brown family.** `#8a6e4b` is `--color-primary` / `--primary-500` in the site's newer token layer (129 occurrences in the stylesheet); `#af976d` (tan, 59 units) and `#a16d63` (rose, 59 units) are the colours of the third and fourth quick-action tiles. The shipped ramp also defines `--primary-20` `#e8e2db` and `--primary-50` `#f9f8f6`.
- **Gold.** `#daa900` (64 units) is the background of small tags such as "NEW FEATURE"; `#b68400` (43 characters) is a gold text colour; `#f2615f` (27 characters) is a red text colour; the notification badge in the capture is red.

The stylesheet also carries Bootstrap 5.0.2 defaults (`#dc3545` danger, `#198754` success, `#ffc107` warning, `#6c757d` gray); they are framework values, not brand colours.

## Typography

The stack is `"open sans", Prompt, "Noto Sans JP", "Noto Sans SC", Amiri, Padauk, Hanuman, sans-serif`: Open Sans first, then script-specific families that the stylesheet declares as `@font-face` (Prompt, Noto Sans JP, Noto Sans SC, Amiri, Padauk, Hanuman). The page loaded Open Sans 400 and Inter 400 (808 characters; where Inter sits was not mapped) and Font Awesome 5 for icons; several third-party `Insider-*` families are declared by a marketing widget and are not brand type. `--font-family-sans-serif` is declared as Montserrat, but Open Sans is what the measured text uses (5,521 characters).

Scale (desktop): section titles 35px/42px at weight 300 in `#00594d` (the extractor found no h1 and used the largest hero text, the "Our Specialty Centers" h2); sub-headings 24.5px/29.4px at weight 800 in `#00b28b`; body 14px/21px at 400 in `#646569`; buttons 12.25px/17.15px at 400; navigation 11.9px/17.85px at 400. By characters: 14px 4,322, 20px 611, 11.9px 380, 12px 352, 24.5px 259, 10.5px 209, 12.25px 178, 21.98px 96, 35px 79. Weights: 400 on 5,838 characters, 800 on 827, 300 on 79, 700 on 52. Button labels render in capitals ("SEE ALL CENTERS", "SEE OUR SPECIALISTS", "MEDICAL TRAVEL GUIDES"). Open Sans is a free Google family, so the declared script fallbacks are the substitutes.

## Layout

The page is a 1,280px canvas with a centred container: the header nav block measures 1,140px wide and the section title 1,109px. Bands alternate between white and the `#f0f0f0` page grey. The four quick-action tiles run edge to edge inside the container and are equal width; the specialty centre card is a two-column split; news cards are a three-column grid with equal heights; the closing photo tiles are a two-column split. Measured padding values are 15px (93 elements), 7px, 20px, 14px, 10.5px, 5.25px, 30px and 60px (13); the only gap measured is 7px (6 elements). The spacing tokens are 1, 3.5, 4.2, 5.25, 7, 10, 10.5, 14, 15 and 16.8px. The header is dense and small (11.9px links on two rows), while content blocks are airy; padding of 60px was measured on 13 elements and 30px on 14.

## Elevation & Depth

Depth is a single soft shadow on cards: `rgba(0, 0, 0, 0.15) 0px 7px 14px 0px` on 17 elements; one 1px grey hairline shadow `rgb(136, 136, 136) 0px 0px 1px 0px`. The shipped CSS also defines Bootstrap-style focus rings tinted with the brand colours: `0 0 0 .2rem rgba(11,178,136,0.25)` (12 declarations, green) and `0 0 0 .25rem #8a6e4b40` (8, brown). Otherwise surfaces are flat: white cards on a grey page, and colour-blocked tiles with no shadow in the capture.

## Shapes

Radii are small. Measured on the page: 50% on 19 elements (round icons, pager dots, badges), 3.5px on 18 (buttons), 4px on 3, 8px on 1, `5.25px 0px 0px 5.25px` on one (the left side of a search input joined to a button), `0px 5.25px 5.25px 0px` on one (the matching button side), and 100% on 1. Buttons and tags are 3.5px; inputs 5.25px; cards and tiles have square corners in the capture. The tokens are 3.5px, 4px, 5.25px, 8px and a pill.

## Components

- **Primary button.** `#0bb288` fill, white 12.25px uppercase label, `1px solid #0bb288`, 3.5px radius, `5.25px 10.5px` padding, 30px tall (widths 104px to 168px depending on the label). Hover fills `#098e6c` and keeps white text.
- **Outline light button.** "SIGN UP NOW": white 12.25px uppercase text with a `1px solid #ffffff` border, `7px 28px` padding, 33px tall, 139px wide; the background it sits on was not recorded.
- **Quick-action tile.** A full-height colour block (green, grey, tan or rose) with an outlined circle icon, a 20px white title and a small white description.
- **News card.** White card with the 7px/14px shadow, a photograph, a green bold headline, grey excerpt and a green "Read more" link with a chevron.
- **Specialty carousel.** Photograph left, white text panel right, thin chevron arrows outside, grey pager dots with a green active dot.
- **Navigation.** Two rows of 11.9px `#646569` links with `4.2px 14px` padding; the active item is a tan filled tab with white text; the plain link role (for example "Privacy Policy") is 11.9px with `0px 7px` padding.
- **Text input.** White, 5.25px radius, `5.25px 10.5px` padding, 36px tall, `#646569` text at 14px; the header search is a wide field with a magnifier icon.
- **Footer.** White text at 14px/21px; it measured 860px tall and carries the "1378 (Thailand Only) Emergencies - Appointments - Ambulance" line.

## Design System Architecture

No official public design system or brand-guideline page for Bumrungrad was found; the opened page https://www.bumrungrad.com/en links to no brand or press-kit page. The shipped stylesheets, however, define a layered token system. The stylesheet at https://www.bumrungrad.com/CMSPages/GetCSS.aspx?stylesheetname=BIHB8DCss (843 KB) declares on `:root`: numbered colour ramps (`--primary-20`, `--primary-50`, `--primary-100` to `--primary-900` in brown; `--secondary-100` to `--secondary-600` in green; `--neutral-0` to `--neutral-1000`), then semantic aliases (`--color-primary: var(--primary-500)`, `--color-primary-hover`, `--color-primary-active`, `--color-secondary: var(--secondary-500)`, `--color-secondary-hover`, `--color-surface`, `--color-surface-soft`, `--color-surface-strong`, `--color-surface-invert`, `--color-text`, `--color-text-body`, `--color-text-strong`, `--color-text-weak`, `--color-text-invert`, `--color-border-default`, `--color-border-subtle`). Alongside them are legacy variables from an earlier theme (`--primary: #0bb288`, `--secondary: #646569`, `--tertiary: #6ecbb8`) and Bootstrap 5.0.2's own variables re-themed so that blue is green (`--bs-primary` and `--bs-blue` both `#0bb288`). Breakpoints are declared as `--breakpoint-sm: 576px`, `-md: 768px`, `-lg: 992px`, `-xl: 1200px`.

The page loads Bootstrap (`/CMSPages/GetCSS.aspx?stylesheetname=Bootstrap`, header "Bootstrap v5.0.2"), site sheets named `BIH2019`, `BIHB8DCss`, `BIHB8DCustomCss` and `BIHSmartBanner`, Splide 4.0.2 from jsDelivr, and instantsearch.css 7 for search. The newer semantic layer treats brown as primary and green as secondary, while the measured home page uses the green for actions; the frontmatter follows the measured page.

## Do's and Don'ts

Do:
- Use `#0bb288` for buttons, links and active states, and `#098e6c` for the hover fill.
- Set section titles at 35px weight 300 in `#00594d`, centred, over a short gold rule.
- Keep buttons small and square-ish: 3.5px radius, 30px tall, 12.25px uppercase labels.
- Use the grey `#f0f0f0` page with white cards, and the soft 0 7px 14px shadow at 15% black.
- Colour-block quick actions with the green, grey, tan and rose family and put white text on them.
- Use bright photographs of people and clinical settings.

Don't:
- Don't use Bootstrap's `#198754` or `#dc3545` as brand colours.
- Don't use rounded pill buttons; the measured buttons are 3.5px.
- Don't set body copy larger than 14px or in a weight other than 400; headings carry the weight changes (300 for titles, 800 for card headlines).
- Don't treat the third-party `Insider-*` font families, chat widget or cookie controls as brand UI.
- Don't use brown for actions on this page; it is a tile and logo accent in the measured layout.

## Responsive Behavior

Measured at 390px: the section title falls to 19.88px/23.856px at weight 300 (from 35px/42px) in a 359px-wide box; body copy stays 14px/21px in a 190px-wide box; the "SEE ALL CENTERS" button is 122px by 30px; the nav block measured 59px tall and its text reads "Cart EN" in `#0bb288`. Character counts by size on mobile: 14px 3,646, 16px 568, 12px 352, 19.88px 338, 11.9px 213, 10.5px 209, 12.25px 178. The page's variables declare breakpoints at 576px, 768px, 992px and 1200px, and `BIH2019` has `@media` rules at 600px, 768px, 992px, 1024px and 1200px; what each rule does on screen was not measured.

## Iteration Guide

1. Set page `#f0f0f0`, cards `#ffffff`, ink `#646569`, primary `#0bb288`.
2. Build the two-row header: crest logo, wide search, icon cluster, then two rows of 11.9px links.
3. Add the hero carousel and the four colour-block tiles (`#0bb288`, `#646569`, `#af976d`, `#a16d63`).
4. Add 35px weight-300 section titles in `#00594d` with a gold rule, split carousel and 3-up news cards with the 7px/14px shadow.
5. Check buttons: 3.5px radius, 30px tall, hover `#098e6c`.
6. Run `node web/scripts/verify-designs.mjs --slug=bumrungrad` and compare against `web/data/captures/bumrungrad.jpg`.
