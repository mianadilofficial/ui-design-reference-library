---
version: alpha
name: Tate
category: "Culture & Events"
description: "Tate (tate.org.uk): a white #ffffff gallery site set entirely in Tate New Pro ('Tate regular') at weight 400, with widely tracked uppercase headings (58px, 6.38px tracking), grey #767676 body copy, square-cornered #1a1a1a buttons with white labels, an aqua #85dee7 membership accent and #0072ce blue link hovers."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f8f8"
  ink: "#767676"
  primary: "#1a1a1a"
  on-primary: "#ffffff"
  surface-panel: "#f5f5f5"
  accent-aqua: "#85dee7"
  accent-aqua-hover: "#b0eaef"
  ink-strong: "#313131"
  action-blue: "#0072ce"
  hairline: "#dddddd"
  primary-hover: "#dfdfdf"
typography:
  display:
    fontFamily: "\"Tate regular\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 58px
    fontWeight: 400
    lineHeight: 74px
    letterSpacing: 6.38px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Tate regular\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38px
    letterSpacing: 3.52px
    textTransform: uppercase
  heading:
    fontFamily: "\"Tate regular\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 46px
    fontWeight: 400
    lineHeight: 55px
    letterSpacing: 5.06px
    textTransform: uppercase
  body:
    fontFamily: "\"Tate regular\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 27px
  label-caps:
    fontFamily: "\"Tate regular\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: 1.54px
    textTransform: uppercase
  link:
    fontFamily: "\"Tate regular\", Arial, \"Helvetica Neue\", Helvetica, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
rounded:
  none: 0px
  social: 32px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7.5px
  s3: 8px
  s4: 9px
  s5: 9.6px
  s6: 10px
  s7: 12px
  s8: 12.8px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 10px 16px 11px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink-strong}"
  button-member:
    backgroundColor: "{colors.accent-aqua}"
    textColor: "{colors.primary}"
    typography: "{typography.label-caps}"
    rounded: "{rounded.none}"
    padding: 9.6px 12px
    height: 33px
  button-member-hover:
    backgroundColor: "{colors.accent-aqua-hover}"
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  link-hover:
    textColor: "{colors.action-blue}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 7.5px 16px
    height: 48px
    borderColor: "{colors.ink}"
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

# Tate

## Overview

Tate's website (tate.org.uk, page title "Tate") is the shared front door for Tate's four galleries — Tate Britain, Tate Modern, Tate Liverpool + RIBA North and Tate St Ives — and reads like a well-hung gallery wall: plenty of white, a single typeface at a single weight, and artwork photography in crisp rectangles. The header carries the distressed black TATE wordmark centred, uppercase links on the left (WHAT'S ON, VISIT, ART, LEARN, SHOP), and a search icon plus an aqua "BECOME A MEMBER" button on the right.

The hero is split in two: a full-height photograph on the left and a pale grey panel on the right with a small "TATE BRITAIN" kicker, the exhibition title in widely spaced capitals ("THE 90S: ART AND FASHION"), one line of description and two black arrow buttons ("Book now", "Free for Members"). The page then moves through centred uppercase section titles — "OUR GALLERIES", "WHAT'S ON ACROSS TATE", "SHOP", "EXPLORE ONLINE" — each with a one-line subtitle, over four-column grids of images with short captions. A large aqua "TATE MEMBERS" block paired with a collage of a Frida Kahlo self-portrait breaks the rhythm halfway down. Microcopy is calm and practical: "Free admission", "Ticket or Membership required", "Plan your visit to our latest exhibitions and displays".

## Colors

- **Canvas `#ffffff`** — the body background.
- **Page largest `#f8f8f8`** — the off-white that covers the largest measured area, used for large panels such as the hero text side.
- **Surface panel `#f5f5f5`** — a second near-white panel tone.
- **Ink `#767676`** — the most-read text colour: body descriptions, gallery addresses, exhibition summaries, and the input border.
- **Ink strong `#313131`** — gallery names and other primary link text (the 22px link style).
- **Primary `#1a1a1a`** — headings, nav links and the fill of every main button ("Book now", "Free for Members", "Join today").
- **On-primary `#ffffff`** — button labels on the black fill.
- **Primary hover `#dfdfdf`** — measured hover state of the black buttons: the fill turns light grey and the label and border turn `#313131`.
- **Accent aqua `#85dee7`** — the membership colour: the "BECOME A MEMBER" header button and the "TATE MEMBERS" block. On hover the button lightens to `#b0eaef` (accent aqua hover).
- **Action blue `#0072ce`** — the newsletter "Sign up" button, the social icon circles in the footer and the hover colour of gallery links.
- **Hairline `#dddddd`** — the most frequent border colour (the small "EXHIBITION" tags and dividers).

Nav links hover from `#1a1a1a` to `#767676`.

## Typography

All text is one family, loaded as "Tate regular" from the files `TateNewPro-Regular` and `TateNewPro-Bold`, with Arial, Helvetica Neue and Helvetica as fallbacks; a separate `tateicons` font supplies pictograms. Every measured character is weight 400. Hierarchy is made by size, case and letter-spacing — about 0.11em on uppercase headings — rather than weight.

- **Display** — 58px / 74px, uppercase, letter-spacing 6.38px (exhibition title in the hero).
- **Heading** — 46px / 55px, uppercase, letter-spacing 5.06px (section titles).
- **Link** — 22px / 28px (gallery and card titles), colour `#313131`.
- **Body** — 17px / 27px, the most-read size on the page, colour `#767676`; button labels use the same 17px/27px style.
- **Label caps** — 14px / 14px, uppercase, letter-spacing 1.54px (the "BECOME A MEMBER" button).

Other measured pairs: 16px with 0.32px tracking, 20px uppercase with 2px tracking in the footer column titles, and 12px with 0.24px tracking for the small exhibition metadata rows.

**Substitutes**: Tate New Pro is proprietary to Tate. A humanist sans with an open, slightly informal texture at regular weight, such as Source Sans 3 Regular or Lato Regular, with generous tracking on uppercase titles, is the closest freely available approach; keep the single-weight discipline.

## Layout

On the 1280px desktop viewport the header content runs from x=59 to x=1192. Content sections use four-column grids (up to four card columns measured) with image on top and two or three lines of caption below; "What's on" cards add an outlined "EXHIBITION" tag, then location, dates and price, each with a small icon. Section titles are centred with a short centred subtitle; the hero and the Members block are split 50/50 between image and text. Spacing is modest — paddings concentrate on 8px, 16px and 12px with 40px, 56px and 72px for larger blocks; gaps are 20px, 10px, 5px, 16px and 32px. The overall density is relaxed, with large white margins between sections.

## Elevation & Depth

No box-shadows were measured. The page is flat: depth comes from pale panels (`#f8f8f8`, `#f5f5f5`), the aqua members block, thin `#dddddd` hairlines and the photography itself. Buttons communicate state through colour inversion (black to light grey on hover), not lift.

## Shapes

Almost everything is square. Buttons, inputs, tags, images and panels compute a 0px radius. The only measured rounded values are 32px and 50% (four elements each); the capture shows these as the circular blue social icons in the footer. Arrow glyphs ("→") on buttons come from the icon font rather than from shape.

## Components

- **Primary button** — `#1a1a1a` fill, white 17px/27px label followed by an arrow, padding 10px 16px 11px, 48px tall, square. Hover: `#dfdfdf` fill, `#313131` label and border.
- **Member button** — `#85dee7` fill, `#1a1a1a` 14px uppercase label with 1.54px tracking, padding 9.6px 12px, 33px tall; hover `#b0eaef`.
- **Gallery card** — photo, 22px `#313131` title, then grey `#767676` lines for admission and address; hover turns the text `#0072ce`.
- **Exhibition card** — portrait image, hairline-bordered "EXHIBITION" tag, title, grey summary, and icon rows for venue, dates and price in small uppercase.
- **Text input** — white, 1px solid `#767676` border, 48px tall, padding 7.5px 16px, square.
- **Newsletter sign-up** — the input with a small `#0072ce` "Sign up" button below (12.75px label).
- **Footer** — three columns (ABOUT, JOIN AND SUPPORT, STAY IN TOUCH) with 20px uppercase titles (2px tracking), an "OUR GALLERIES" row, the wordmark with copyright, circular blue social icons and legal links.

## Design System Architecture

No public design system or brand guidelines are published by Tate on the pages opened: the press office page (https://www.tate.org.uk/press) offers press images and reproduction terms but no logo usage rules, typeface information or design system, and links image licensing to https://www.tate.org.uk/about-us/image-licensing. The de-facto system is visible in the shipped front end: no CSS custom properties are declared on `:root`, so values are hard-coded in component classes using a `Tate-` and `TateUI-` prefix (e.g. `TateUI-lightbox`), a self-hosted Tate New Pro family plus a `tateicons` icon font and a separate `tate-kids--icon` font for the Tate Kids area. Static assets are fingerprinted (`tate-logo.21bf83bab79c.svg`). Build new work from the measured values in this file rather than from variables.

## Do's and Don'ts

**Do**
- Use one typeface at weight 400 everywhere and build hierarchy with size, uppercase and tracking.
- Track uppercase headings at about 0.11em (6.38px at 58px, 5.06px at 46px).
- Keep descriptive copy in `#767676` and titles in `#1a1a1a` or `#313131`.
- Use black square buttons with a trailing arrow for actions; reserve aqua for membership.
- Centre section titles with a one-line subtitle, then a four-up image grid.

**Don't**
- Don't bold headings; no measured heading uses a heavier weight.
- Don't round buttons, cards or images.
- Don't add shadows or gradients.
- Don't use the blue `#0072ce` as a fill for primary actions; on the measured page it is the hover/link and newsletter colour.
- Don't treat the hidden "Skip navigation" link styling as the visible navigation.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 drops from 58px to 32px (line-height 38px, letter-spacing 3.52px) and the h2 from 46px to 28px (32px line-height, 3.08px tracking). Body paragraphs measured 16px with a 24px line-height, and the primary CTA "Free for Members" measured 16px/24px with the same black fill and white label. The hero heading was measured centre-aligned on mobile (left-aligned on desktop), inside a `#f5f5f5` band whose content runs x=16 to x=374, a 16px gutter. The most-read mobile sizes are 16px, 14px, 22px, 20px and 28px. Card column counts and breakpoints on mobile were not measured beyond the extractor's card count.

## Iteration Guide

1. Set a white canvas, `#1a1a1a` titles and `#767676` descriptive text in a single regular-weight humanist sans.
2. Build headings in uppercase with 0.11em tracking: 58px display, 46px section, 20px footer labels.
3. Make actions square `#1a1a1a` buttons, 48px tall, with an arrow; invert to `#dfdfdf` on hover.
4. Use aqua `#85dee7` only for membership surfaces.
5. Lay content in four-column image grids with short grey captions and hairline tags.
6. Keep everything flat and square except the circular social icons.
