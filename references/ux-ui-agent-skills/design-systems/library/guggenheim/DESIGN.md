---
version: alpha
name: Guggenheim
category: "Culture & Events"
description: "The Guggenheim Museums and Foundation (guggenheim.org): white #ffffff pages and a #171717 near-black footer, all text in the proprietary Guggenheim Sans (400 and 700) with slight positive tracking, #393939 20px body copy, 2px-outlined square buttons and 0px corners on every element."
colors:
  canvas: "#ffffff"
  page-largest: "#171717"
  ink: "#393939"
  primary: "#171717"
  ink-button: "#111111"
  ink-inverse: "#f5f5f5"
  button-hover: "#d9d9d9"
typography:
  display:
    fontFamily: "\"Guggenheim Sans\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
  display-mobile:
    fontFamily: "\"Guggenheim Sans\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.2px
  subheading:
    fontFamily: "\"Guggenheim Sans\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32.2px
    letterSpacing: 0.2px
  body:
    fontFamily: "\"Guggenheim Sans\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.2px
  button:
    fontFamily: "\"Guggenheim Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18.9px
    letterSpacing: 0.14px
rounded:
  none: 0px
spacing:
  s1: 8px
  s2: 10px
  s3: 15px
  s4: 16px
  s5: 18px
  s6: 20px
  s7: 24px
  s8: 26px
  s9: 32px
  s10: 40px
components:
  button-outlined:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-button}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 18px 24px
    height: 59px
    border: "2px solid #111111"
  button-outlined-hover:
    backgroundColor: "{colors.button-hover}"
    textColor: "{colors.ink-button}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.primary}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-inverse}"
    padding: 26px 0px 96px
---

# Guggenheim

## Overview

guggenheim.org (page title "Home | The Guggenheim Museums and Foundation") is the site of the Solomon R. Guggenheim Foundation and its New York museum, with links in the footer to the Peggy Guggenheim Collection, Guggenheim Bilbao and Guggenheim Abu Dhabi. The page is a monochrome frame for photography of Frank Lloyd Wright's spiral rotunda and the art inside it. There is no colour in the interface at all: white, three near-blacks, a grey hover tint, and one typeface — Guggenheim Sans — in two weights.

The header is a stacked "GUGGENHEIM / NEW YORK" wordmark at top left, utility links (Tickets, Membership, Search) at top right and a primary row of links (VISIT, EXHIBITIONS, EVENTS, ART, LEARN, JOIN & SUPPORT, SHOP). A full-width video hero with small pause, mute and fullscreen controls follows. The rest of the page is a sequence of left-aligned sections: "Exhibitions" and "Upcoming Events" carousels with "← 1/4 →" counters, a single large "From the Collection" artwork with "Load Another Artwork" and "Browse the Collection" buttons, two image-and-text feature rows ("Poetry at the Guggenheim", "Art for Everyone"), a Shop / Membership pair, and a tall near-black footer. Microcopy is plain and informative ("Experience the Guggenheim after dark.") and secondary actions end in an arrow ("Read the Announcement →").

## Colors

- **Canvas `#ffffff`** — the page background behind every content section.
- **Page largest `#171717`** — the footer background, which is the largest measured background area on the page.
- **Primary `#171717`** — headings ("Exhibitions"), card titles and navigation text. The brand's emphasis colour is this near-black; there is no chromatic accent.
- **Ink `#393939`** — the most-read text colour: event descriptions and running copy.
- **Ink button `#111111`** — the label and 2px border colour of outlined buttons; also the most frequent border colour.
- **Ink inverse `#f5f5f5`** — text in the footer on `#171717`.
- **Button hover `#d9d9d9`** — the measured hover fill of the outlined "Explore all Exhibitions" button (white to `#d9d9d9`, with the label underlined).

Header utility links hover from `#171717` to pure black with an underline; primary nav links gain an underline on hover.

## Typography

One family, Guggenheim Sans, loaded in 400 normal, 400 italic and 700 normal, with Arial as fallback. Text is set with a small positive tracking of 0.01em at every size (0.2px at 20px and 28px, 0.16px at 16px, 0.14px at 14px).

- **Display** — 700, 40px / 44px. Used for section titles; the page has no visible h1, so the largest heading ("Exhibitions") is the top of the scale.
- **Subheading** — 700, 28px / 32.2px, letter-spacing 0.2px. Exhibition titles such as "TARYN SIMON / FATHER COUNTRY / I DO LOVE YOU", which are linked.
- **Body** — 400, 20px / 27px, letter-spacing 0.2px. 20px is by far the most-read size, which gives the page an unusually large, readable text column.
- **Button** — 700, 14px / 18.9px, letter-spacing 0.14px.

Other measured text: 16px with 0.16px tracking (footer, dates) and 20px with 0.4px tracking. Artwork titles appear in the italic ("Knife Ship I, 1985").

**Substitutes**: Guggenheim Sans is proprietary. A geometric-leaning grotesk with a strong bold, such as Inter or Neue Haas Grotesk Display, at 400/700 with +0.01em tracking is a workable stand-in.

## Layout

On the 1280px desktop viewport the header spans x=32 to x=1248, a 32px side margin. Sections are left-aligned with a heading above full-width content; carousels show one large card plus a partial next card bleeding off the right edge, which signals horizontal scrolling. Feature rows pair a half-width image and half-width text block, alternating sides. Spacing is regular: gaps of 40px, 32px and 20px, paddings of 20px (most frequent), 32px, 18px and 24px. The footer is a multi-column grid on `#171717` (Hours, Address, Tickets; About Us, Stay Connected, Follow Us; Opportunities, Inquiries, Resources, Around the World), with 26px top and 96px bottom padding and thin `#f5f5f5` dividers.

## Elevation & Depth

No box-shadows were measured. The interface is flat and monochrome: the only depth cues are the photography, the change from white body to `#171717` footer, and 1–2px rules in `#111111` or `#f5f5f5`. Thin full-width rules separate the lower feature sections in the capture.

## Shapes

`desktop.frequencies.borderRadii` is empty in the extraction: every rendered element on the home page computes a 0px radius. Buttons, images, carousel cards and the footer "Buy Tickets" and "Subscribe" buttons are all square rectangles. Buttons are defined by a 2px solid `#111111` outline rather than a fill.

## Components

- **Outlined button** — white fill, 2px solid `#111111` border, `#111111` 14px/700 label, padding 18px 24px, 59px tall, square. Hover: fill `#d9d9d9` and underlined label. Used for "Explore all Exhibitions", "Explore the Calendar", "Load Another Artwork", "Browse the Collection".
- **Text link with arrow** — bold small label followed by "→" ("Read the Announcement →", "Shop the Guggenheim →").
- **Carousel** — large photo, 28px bold title, date line, then an outlined button and a "← 1/4 →" counter at the right.
- **Event card** — image, bold title, date and time in grey, two-line description.
- **Video hero** — full-bleed, with small square overlay controls bottom-left.
- **Footer** — `#171717` background, `#f5f5f5` text, outlined "Buy Tickets" and "Subscribe" buttons in white outline, sister-museum wordmarks across the top, partner logos and the UNESCO World Heritage mark.

There is no filled primary button on the measured page; the outlined button is the action component.

## Design System Architecture

No public design system or brand guidelines are linked from the pages opened: https://www.guggenheim.org/about-us has no link to brand guidelines, a press kit or typeface information. The de-facto system is visible in the shipped front end: no CSS custom properties are declared on `:root`; components use hashed CSS-module class names (for example `_logoIcon_1sz3n_99` on the logo SVG), which points to a component build where values live inside scoped modules. The system the extraction shows is compact: one family (Guggenheim Sans) in two weights, a five-step size ramp (14/16/20/28/40px) with constant +0.01em tracking, three near-black neutrals, white, zero radii and one outlined button style.

## Do's and Don'ts

**Do**
- Keep the interface monochrome and let gallery photography carry colour.
- Use Guggenheim Sans (or a close grotesk) at 400 for reading text and 700 for titles and buttons, with +0.01em tracking.
- Set running text large: 20px / 27px in `#393939`.
- Use outlined square buttons with a 2px `#111111` border; hover to `#d9d9d9` and underline.
- Use underline as the hover signal for links.

**Don't**
- Don't introduce a brand accent colour; none is measured.
- Don't round corners or add shadows.
- Don't fill primary buttons with black; the measured buttons are outlined.
- Don't centre section headings; they are left-aligned above content.
- Don't use weights between 400 and 700.

## Responsive Behavior

Measured on the 390px mobile pass: the largest heading "Exhibitions" drops from 40px to 32px with a 35.2px line-height; body paragraphs drop from 20px/27px to 16px/21.6px with 0.16px tracking. The most-read mobile sizes are 16px, 14px, 12px and 32px. The mobile header measured 67px tall with two visible header links and a visible toggle labelled "Open Search Submenu". Carousel, grid and footer behaviour on mobile were not measured.

## Iteration Guide

1. Start with white canvas, `#171717` headings and `#393939` 20px body copy in one grotesk family.
2. Use the five-size ramp: 40px section titles, 28px item titles, 20px body, 16px meta, 14px buttons.
3. Give every element square corners and no shadow.
4. Build actions as 2px-outlined buttons (18px 24px padding) and arrow text links.
5. Organise content as left-aligned sections, carousels with a counter, and half-and-half image/text rows.
6. Close with a dense `#171717` footer in `#f5f5f5` text.
