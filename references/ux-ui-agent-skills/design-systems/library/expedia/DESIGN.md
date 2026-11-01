---
version: alpha
name: Expedia
category: "Travel & Hospitality"
description: "Expedia US home page: Reckless XPD serif headlines (44px hero, 36px and 28px) over Centra No2 400/500/700 UI text, #191e3b navy ink on #ffffff, #1668e3 blue for filled search buttons, links and outlined pill buttons (hover #0d4eaf on #ecf4fd), #fddb32 brand yellow, #0c0e1c and #191e3b dark panels, 40px-radius search fields and 16px-radius cards."
colors:
  canvas: "#ffffff"
  ink: "#191e3b"
  primary: "#1668e3"
  on-primary: "#ffffff"
  primary-hover-text: "#0d4eaf"
  surface-tint: "#ecf4fd"
  surface-selected: "#c8dff9"
  surface-muted: "#eff3f7"
  brand-yellow: "#fddb32"
  success-green: "#227950"
  ink-muted: "#676a7d"
  ink-deep: "#0c0e1c"
  hairline: "#818494"
  divider: "#dfe0e4"
typography:
  display:
    fontFamily: "\"Reckless XPD\", \"Centra No2\", sans-serif"
    fontSize: 44px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: "\"Reckless XPD\", \"Centra No2\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32px
  heading:
    fontFamily: "\"Reckless XPD\", \"Centra No2\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "\"Centra No2\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: "\"Centra No2\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
  button-small:
    fontFamily: "\"Centra No2\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 16px
  input:
    fontFamily: "\"Centra No2\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 43px
  s9: 48px
components:
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 4px 16px
    height: 48px
    borderColor: "{colors.hairline}"
  button-outline-hover:
    backgroundColor: "{colors.surface-tint}"
    textColor: "{colors.primary-hover-text}"
  button-outline-small:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.pill}"
    padding: 4px 12px
    height: 32px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    height: 72px
    boxShadow: rgba(12, 14, 28, 0.08) 0px 2px 12px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 0px 11px 0px 43px
    height: 48px
  text-input-hover:
    backgroundColor: "{colors.surface-muted}"
  promo-banner:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.md}"
---

# Expedia

## Overview

The measured site is the Expedia US home page at https://www.expedia.com/ (title "Expedia Travel: Vacation Homes, Hotels, Car Rentals, Flights & More"), 1,970px tall at 1280px. It is a search-first travel page. Under a thin #0c0e1c regional notice bar ("Welcome to Expedia.com. Continue to the Thailand site at Expedia.co.th") sits a 72px white header with the yellow-and-navy Expedia logo, a "Shop travel" menu, currency, "List your property", "Support", "Trips", a messages icon and "Sign in". The hero is a landscape photograph with the white serif line "The one place you go to go places", overlapped by a large white search card: product tabs with illustrated icons (Stays, Flights, Cars, Packages, Things to do), a "Where to?" field, a date field, a travellers field, a blue "Search" button and an "Add a flight to Bundle & Save*" checkbox.

Below: a full-width navy promo banner ("Packages under $699 — Get more trip for less when you bundle flight and hotel together", white outlined "Book now" pill); "Last-minute weekend deals" with a carousel of hotel cards (dark "VIP Access" badges, heart icons, green rating chips such as "9.4 Exceptional", green "$458 off" price tags, strikethrough totals); two outlined promo cards with yellow "Featured" and "Promotion" labels ("Save up to 15% on luxury vacations", "Last minute deals – up to 25% off"); and a pale blue-grey panel with three value propositions (Bundle & Save, One-stop travel shop, Expedia One Key) each with a small illustration and an outlined pill. A "Unlock instant savings with Member Prices" sign-in popover is open over the hero's right side and a floating "Help" chip sits at the right edge in the capture; both are overlays, not page design. The voice is direct and deal-focused ("Minimum 20% off deals for your next weekend getaway!").

## Colors

- **canvas #ffffff** — page and card background.
- **ink #191e3b** — Expedia navy: headings, body text, the promo banner background.
- **primary #1668e3** — Expedia blue: the filled "Search" and "Sign in" buttons (measured as a background area), outlined pill labels, links and icon fills (`--button__floating_action__default__icon__fill_color`). **on-primary #ffffff**.
- **primary-hover-text #0d4eaf** and **surface-tint #ecf4fd** — measured hover of outlined pills ("Book now", "Help"): background #ecf4fd, text #0d4eaf; `--color__background__1` is #ECF4FD.
- **surface-selected #c8dff9** — `--button__secondary__active__background_color`, also a measured background area.
- **surface-muted #eff3f7** — the value-proposition panel and the measured hover background of the date and traveller fields.
- **brand-yellow #fddb32** — `--color__brand__1` and `--button__primary_alt__default__background_color`; in the capture it appears on the logo and the "Featured"/"Promotion" labels.
- **success-green #227950** — rating chips, price-off tags and the "Total with taxes and fees" checkmarks (measured as both text and background).
- **ink-muted #676a7d** — `--color__neutral__1__600`, placeholders and secondary text.
- **ink-deep #0c0e1c** — the top notice bar and deepest text.
- **hairline #818494** — 1px border on outlined pills; **divider #dfe0e4** — measured border and `0px 1px 0px 0px` rule.

## Typography

- **Reckless XPD** — a serif used for editorial headlines only, at weight 400. **display** 44px / 400 / 40px (the hero line; note the line height is tighter than the size). **heading** 28px / 400 / 32px for promo-card titles; the navy banner title is 36px / 400.
- **Centra No2** — the UI sans, loaded at 400, 500 and 700, with a system fallback stack (`-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial`). **body** 14px / 400 / 18px; **button** 16px / 500 / 20px (`--button__text__weight: 500`); **button-small** 12px / 500 / 16px; **input** 16px / 400 / 20px. Section titles such as "Last-minute weekend deals" are 28px / 500 in the measured band headings.

The pairing is the signature: a soft, high-contrast serif for aspirational lines and a geometric sans for every functional element.

**Substitutes:** both families are commercial. The CSS fallback for the sans is the system UI stack.

## Layout

At 1280px content spans x 40 to x 1240, a 1200px column with 40px margins. Bands: 50px notice bar, 72px header, 345px photographic hero with the search card overlapping its lower edge, and a 1,503px white content area. The deals carousel shows four cards per view with round previous/next buttons over the images; promo cards are two-up; value propositions are three-up and centred. Measured gaps are 4, 8, 12, 16, 24 and 32px, and paddings 2–48px including 43px left padding in fields for an icon. The rhythm is generous between sections and compact inside cards.

## Elevation & Depth

The header and floating cards carry the soft shadow `rgba(12, 14, 28, 0.08) 0px 2px 12px 0px`; a larger `rgba(12, 14, 28, 0.12) 0px 6px 36px 0px` is measured for raised overlays, and `rgba(12, 14, 28, 0.12) 0px 1px 0px 0px` / `rgb(223, 224, 228) 0px 1px 0px 0px` act as bottom rules. Overlay buttons on photos use `--button__overlay__default__background_color: rgba(12, 14, 28, 0.56)`. Promo and value cards are flat with 1px borders.

## Shapes

Pills dominate interaction: outlined buttons compute 40000px (stored as `pill`), search fields 40px. Cards use 16px (`--corner_radius__4x: 1rem`, `--dialog__corner_radius`, `--sheet__centered__corner_radius`), hotel images `16px 16px 0px 0px`, and small badges 4px and 8px (`--table__corner_radius: 0.5rem`). The navy promo banner has rounded 16px corners in the capture. Header nav buttons are square (`--global_navigation__header_nav_button__corner_radius: 0px`).

## Components

- **filled search button** — #1668e3 with white 16px/500 label on the search bar; its own height and radius were not isolated by the extractor, so no component token is declared.
- **button-outline** — white pill, 1px #818494 border, #1668e3 16px/500 label, 4px 16px padding, 48px tall ("Book now"); hover #ecf4fd background with #0d4eaf text.
- **button-outline-small** — same in 12px/500, 4px 12px padding, 32px tall ("Start planning", "Join for free", "Get started").
- **nav** — white, 72px tall, soft bottom shadow, navy 14px/500 links.
- **text-input** — white, 40px radius, 48px tall, 0 11px 0 43px padding, 16px #676a7d placeholder; hover #eff3f7.
- **promo-banner** — #191e3b with a white 36px serif title, 14px subline and an outlined white pill.
- **hotel card** — 16px-top-radius image with a "VIP Access" badge and heart, then name, location, green rating chip, green discount tag, nightly and total prices.

## Design System Architecture

No public Expedia design-system page was opened for this document: no dsUrl was given, and the captured header and footer show no design-system link. The shipped CSS on https://www.expedia.com/ exposes the in-house system as double-underscore BEM-style custom properties: component tokens named component__variant__state__property (`--button__primary_alt__default__background_color`, `--button__tertiary__active__text_color`, `--global_navigation__button__secondary__active__border_color`, `--radio_button__unselected__hover__border_width`, `--input__swapper__corner_radius`), global colour tokens (`--color__brand__1`, `--color__background__1`, `--color__neutral__1__600`, `--color__global_member__*` for loyalty tiers) and shape tokens (`--corner_radius__4x`). The font-face declarations are themselves variable-driven (`var(--font_face__family_name)`), so a brand can swap typefaces through tokens.

## Do's and Don'ts

- Do pair Reckless XPD (400) headlines with Centra No2 for every control.
- Do use #1668e3 for the one filled action in a module and for links.
- Do use white outlined pills with #818494 borders for secondary actions; hover to #ecf4fd and #0d4eaf.
- Do reserve #fddb32 for the logo and small promotional labels.
- Do show savings in #227950 green chips.
- Don't use square buttons in content; only header nav buttons are square.
- Don't put shadows on promo cards; keep them for the header and floating panels.
- Don't treat the sign-in popover, the "Help" chip or the regional notice bar as page design.

## Responsive Behavior

The 390px mobile pass measured: the first heading as "Packages under $699" at 28px / 400 / 32px (the hero line was not detected on mobile); body text unchanged at 14px / 18px; a 56px white header with 2 header links visible and a toggle labelled "Sign In"; a 68px #0c0e1c notice band at the top; up to 2 card columns; and only 14, 16, 28 and 12px text sizes. The mobile pass covered 844px of height (three bands: #0c0e1c, #ffffff and #eff3f7). Stylesheet breakpoints are min-width 576px, 992px and 1200px with max-width counterparts. Search-card behaviour on mobile was not measured.

## Iteration Guide

1. Open with a photograph, a 44px Reckless XPD line and an overlapping white search card.
2. Make every field a 48px pill (40px radius) with a leading icon and 43px left padding.
3. Use one #1668e3 filled button per module; everything else is a white outlined pill.
4. Write headings at 28px; use navy #191e3b on white and white on navy banners.
5. Round cards at 16px and keep them flat with light borders.
6. Use green chips for ratings and discounts and yellow labels for promotions.
7. Keep the 1200px column with 40px margins and 8–32px gaps.
8. Re-measure without the sign-in popover before adding components from that area.
