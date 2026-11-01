---
version: alpha
name: Provincial Electricity Authority (PEA)
category: "Thai Brands"
description: "Provincial Electricity Authority's English home page: white canvas, magenta brand #a80c8a with a #a80689 fill, aktiv-grotesk-thai at 400 to 600, 40px section titles, 16px rounded white service cards with a soft rgba(16, 24, 40, 0.08) shadow and 24px pill-like filter buttons."
colors:
  canvas: "#ffffff"
  ink: "#475467"
  primary: "#a80c8a"
  surface-brand: "#a80689"
  ink-body: "#333333"
  ink-strong: "#1a1a1a"
  ink-slate: "#5d7083"
  ink-secondary: "#667085"
typography:
  display:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  display-mobile:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 28.8px
    fontWeight: 600
    lineHeight: 40px
  subheading:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  body:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 27.2px
  button-secondary:
    fontFamily: aktiv-grotesk-thai, sans-serif
    fontSize: 14.4px
    fontWeight: 600
    lineHeight: 21.6px
rounded:
  xs: 16px
  sm: 24px
  md: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6.4px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 13.6px
  s10: 16px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
    borderColor: "{colors.surface-brand}"
  link:
    textColor: "{colors.ink-body}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-secondary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(16, 24, 40, 0.03) 0px 1px 2px 2px, rgba(16, 24, 40, 0.08) 0px 12px 16px -6px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
---

## Overview

This is the English home page of the Provincial Electricity Authority (PEA) of Thailand, measured at https://www.pea.co.th/en (page title "Provincial Electricity Authority (PEA)", 2101px tall at 1280px wide). It is a public-utility service portal rather than a marketing page. The first screen holds a white header with the PEA logo (a commemorative "66 years" version in the capture), accessibility, language (EN) and search icons, then a full-width magenta navigation bar with five items: Our Services, News & Announcement, Knowledge, About PEA, Contact Us.

Under the bar the page opens directly into "Our Services", a 40px semibold title followed by four rounded filter buttons (Residential, Renewable Energy/EV, Electrical System Inspection/Maintenance, Other Services). A horizontal carousel of white service cards shows photographs of people using phones and laptops against soft pink backgrounds, with titles such as "Requesting Electricity", "Electricity Bill Payment" and "Electricity Bill History". The next block is a "Recent posts" news carousel with a "View all" link, then a magenta quick-link strip (e-Service, Bill History, Bill Payment Channel, Download, Off-Peak Calendar) and a white footer with four link columns, the PEA lockup, social icons and the "1129 PEA Contact Center" line. The voice is plain and task-led: "Pay your electricity bill conveniently, quickly and safely through various channels".

A live-chat mascot widget and a round back-to-top button appear in the capture; they are third-party or utility controls and are not part of the brand tokens documented here.

## Colors

The page is white (`canvas` `#ffffff`, about 1551 area-weight units against 132 for the next fill). The brand colour is magenta: `primary` is `#a80c8a`, used for navigation text, links such as "View all" and the nav bar fill (measured at 109 area weight), while `surface-brand` `#a80689` is the slightly different fill and border colour of the filter buttons and the quick-link strip (132 area weight) and the 1px outline of the filter buttons. Both are measured; keep them as separate tokens.

Text uses a cool grey family: `ink` `#475467` is the most-read colour (919 characters, body paragraphs), `ink-body` `#333333` is for list links, `ink-strong` `#1a1a1a` is for headings and card titles, `ink-slate` `#5d7083` for secondary captions such as dates, and `ink-secondary` `#667085` for the utility area. White text sits on the magenta bar. The site's CSS variables confirm the logic: `--bs-primary` resolves to rgb 168, 12, 138 and `--bs-link-hover-color` is `#860a6e`; the filter button hover measured text colour rgb(153, 6, 126) on white.

## Typography

The only family measured is aktiv-grotesk-thai (loaded at 400, 500, 600 and 700), with sans-serif as fallback; it covers both Thai and Latin text. The site's Bootstrap variables name a different default stack (`"Titillium Web", Geneva, Tahoma, sans-serif`), but the measured computed family on every character is aktiv-grotesk-thai, so that is the token. Aktiv Grotesk is a commercial typeface; the generic sans-serif fallback or any neutral grotesque with Thai coverage substitutes.

The scale: `display` 40px/48px at 600 for section titles ("Our Services"), `subheading` 32px/40px at 600 ("Recent posts"), card titles at 24px, `body` 16px/28px at 400, `link` 14.4px/27.2px at 400, and `button-secondary` 14.4px/21.6px at 600. The most used size by characters is 18px, followed by 14.4px, 16px and 15.2px. On the 390px mobile pass the h1 is 28.8px/40px semibold and body 16px/24px. Headings are near-black, never magenta.

## Layout

Content sits in a centred container with the carousels bleeding off the right edge, so the fourth card is cut by the viewport. The service cards are equal width with a photograph on top and a title and one or two lines of description under it. Pagination dots under the first carousel are pill-shaped, the active one magenta and the rest muted tan. Between sections there is generous vertical white space: the capture shows a gap of several hundred pixels between the card row and the "PEA News / Infographic" tab pair, but its exact value was not measured. The footer holds five columns: four link groups (Our Services, About PEA, News & Announcement, Support) and a brand column. Gaps measured elsewhere: spacing values from 2px up to 16px in the token list.

## Elevation & Depth

Cards use a two-layer shadow: `rgba(16, 24, 40, 0.03) 0px 1px 2px 2px, rgba(16, 24, 40, 0.08) 0px 12px 16px -6px` (six elements). This is the only box shadow measured. It gives a faint lift under a white card on a white page, with a larger, softer layer below. Buttons are flat (hover shadow measured as `none`). The magenta bars are solid; no gradients or glows were measured in the CSS roles, though the photographs have pink studio backgrounds.

## Shapes

Four radii are measured: 16px (14 elements: service and news cards), 24px (6 elements: filter buttons and the `button-secondary`), 50px (6 elements) and 50% (5 elements: circular icon buttons and carousel arrows). The site's Bootstrap variables also declare `--bs-border-radius-xl: 1rem` (16px) and `--bs-border-radius-2xl: 2rem` (32px), and `--bs-border-radius-pill: 50rem`. Photographs inside cards share the card's corner treatment; news images in the capture have visibly rounded corners.

## Components

**Filter buttons.** 40px high, 8px 16px padding, 24px radius, 14.4px semibold. The active one ("Residential") is white text on a `#a80689` fill; the inactive ones are `#333333` text on white with a 1px `#a80689` border. On hover the inactive text changes to rgb(153, 6, 126) while background and border stay unchanged.

**Primary navigation.** A full-width magenta bar, white 16px labels, chevrons on items with sub-menus.

**Service cards.** White, 16px radius, shadow as above, image first, 24px semibold title in `#1a1a1a`, one to three lines of 16px body text in `#475467`.

**News cards.** Rounded image, a small arrow icon at the upper right of the title, a 14px grey date line with a calendar icon.

**Quick-link strip.** Five equal cells on a magenta band with white 14px semibold labels and thin dividers.

**Links.** Magenta "View all" with a right chevron; footer links in `#333333` at 14.4px.

## Design System Architecture

No public PEA design system or brand-guideline page was opened for this document. The shipped CSS shows the de-facto system: the root variables include `--bootstrap-italia-version: "2.8.8"` together with Bootstrap-style tokens (`--bs-primary`, `--bs-body-font-size: 1rem`, `--bs-border-radius: 4px`, `--bs-border-radius-lg: 8px`, a grey ladder `--bs-100` to `--bs-900`, and the status colours `--bs-success`, `--bs-danger`, `--bs-warning`). PEA overrides the primary to magenta (`--bs-primary-rgb: 168,12,138`) and loads an icon font named bootstrap-icons. The component class and variable naming therefore follows Bootstrap Italia conventions, customised with a PEA colour and typeface.

## Do's and Don'ts

- Do use white as the page and card colour and reserve magenta (`#a80c8a`, `#a80689`) for navigation, active states and links.
- Do set headings at 600 weight in `#1a1a1a` and body at 400 in `#475467`.
- Do round cards at 16px and buttons at 24px, and keep the two-layer card shadow.
- Do keep copy direct and service-oriented, verbs first ("Pay", "Check", "Request").
- Don't use the third-party chat widget or back-to-top button as design reference.
- Don't mix the Bootstrap default blue or any non-magenta action colour into the interface.
- Don't add gradients to buttons; measured buttons are flat fills or outlines.
- Don't set headings in magenta.

## Responsive Behavior

The extraction's 390px mobile pass measured only type: h1 28.8px/40px at 600 and body 16px/24px at 400. Layout changes at mobile width, navigation behaviour and breakpoints are not measured. The site declares Bootstrap Italia 2.8.8 variables, but its breakpoint values were not recorded in the extraction.

## Iteration Guide

1. Start from white `canvas` with `ink` `#475467` body text and `ink-strong` headings.
2. Place the magenta nav bar (`#a80c8a`) directly below the logo row.
3. Build services as 16px-radius white cards with the two-layer shadow and a photo header.
4. Use 40px-high, 24px-radius filter buttons: filled `#a80689` when active, 1px outlined when not.
5. Close the page with the magenta quick-link strip and a white four-column footer.
6. Verify with `node web/scripts/verify-designs.mjs --slug=pea`.
