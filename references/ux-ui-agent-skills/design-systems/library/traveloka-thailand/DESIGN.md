---
version: alpha
name: Traveloka Thailand
category: "Thai Brands"
description: "Traveloka Thailand (en-th) travel marketplace: white canvas, charcoal ink #434343, Traveloka blue #0a9af2 buttons, orange #f96d01 prices, Godwit typeface at 600 weight, 10px-radius deal cards with a soft 4px 10px shadow and 999px pill filter chips."
colors:
  canvas: "#ffffff"
  ink: "#434343"
  primary: "#0a9af2"
  on-primary: "#ffffff"
  surface-navy: "#05285d"
  surface-dark: "#1c2930"
  ink-muted: "#687176"
  ink-faint: "#8f8f8f"
  price-orange: "#f96d01"
  link-blue: "#0194f3"
  border-rust: "#c04c36"
  text-input-text: "#03121a"
  primary-soft: "#d1f0ff"
  primary-deep: "#024590"
typography:
  display:
    fontFamily: Godwit, NotoSansJP, -apple-system, "system-ui", "Segoe UI", Roboto, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: Godwit, NotoSansJP, -apple-system, "system-ui", "Segoe UI", Roboto, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28px
  subheading:
    fontFamily: Godwit, NotoSans, NotoSansJP, -apple-system, "system-ui", "Segoe UI", Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  input:
    fontFamily: Godwit, NotoSansJP, -apple-system, "system-ui", "Segoe UI", Roboto, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
  lg: 10px
  xl: 12px
  2xl: 16px
  3xl: 20px
  4xl: 24px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    height: 48px
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 24px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(3, 18, 26, 0.15) 0px 4px 10px 0px
  button-light:
    backgroundColor: "{colors.primary-soft}"
    textColor: "{colors.primary-deep}"
    typography: "{typography.subheading}"
    rounded: "{rounded.none}"
    height: 48px
---

## Overview

The measured page is `https://www.traveloka.com/en-th`, titled "Traveloka Thailand | Flights, Hotels & Attractions", with the language set to en-th and prices in THB. It is a dense, commerce-first travel marketplace: a full-bleed photograph of a lit temple beside a lake sits behind a white wordmark and a two-row header, with a large white search panel overlapping the bottom of the photo. The extractor counted 2,665 visible elements on a 5,367px page, one of the busiest captures in this batch.

The header holds the logo, a "THB | EN" selector, Deals, Get App, Partnership, Support, Bookings, a light-blue "Log In" pill and a solid-blue "Register" pill; a second row lists Hotels, Flights, Airport Transfer, Car Rental, Things to Do, Cruises and More. The h1 is the white line "Book with ease, Traveloka for every journey". Below the search panel come New User Coupons (cards with a COPY button), Ongoing Promotions (a wide blue 10.10 EPIC SALE banner with Thai text, followed by three smaller photo banners), Top Flight Deals and Top Hotel Deals as horizontally scrolled card rows with chip filters. The voice is promotional and numeric: "Up to 300THB for First Flight Booking", "Save 24%".

## Colors

The page is white (`{colors.canvas}`, 5,698 area units) with charcoal text `{colors.ink}` (#434343, 2,040 characters) and grey secondary text `{colors.ink-muted}` (#687176) and `{colors.ink-faint}` (#8f8f8f). The brand blue is `{colors.primary}` (#0a9af2), the fill of both the Register and the "Partner with Traveloka" buttons, with white `{colors.on-primary}` labels. A paler action pair, `{colors.primary-soft}` (#d1f0ff) with `{colors.primary-deep}` (#024590) text, styles the Log In and COPY buttons. `{colors.link-blue}` (#0194f3, 266 characters) colours text links and active chip labels.

Warm colour is reserved for price: `{colors.price-orange}` (#f96d01) sets "THB 2,507.79"-style fares (541 characters). Two dark surfaces, `{colors.surface-navy}` (#05285d, 1,021 units) and `{colors.surface-dark}` (#1c2930, 763 units), carry promotional banners and the footer-style blocks. A green (#05a569) appears as a smaller fill (234 units). `{colors.border-rust}` (#c04c36) is the most frequent border colour in the extraction (25 elements); `{colors.text-input-text}` (#03121a) is the input text colour.

## Typography

One family dominates: Godwit, loaded at weights 500, 600, 700 and 900, with NotoSansJP, NotoSans and system fonts as fallbacks. It accounts for 6,897 measured characters. The h1 (`{typography.display}`) is 32px bold on a 40px line, section titles such as "New User Coupons" (`{typography.heading}`) are 24px bold on 28px, and card titles and buttons (`{typography.subheading}`) are 16px semibold on 20px. Inputs use 16px weight 500 on 24px (`{typography.input}`).

Weight 600 is the working weight (4,394 characters), then 500 (1,311), 700 (1,114) and 900 (78), the last used in banner numerals. Sizes are small and tightly stepped: 16px, 14px and 12px lead, with 24px, 20px, 10px, 32px and 48px as accents. No body-text role was detected by the extractor, so there is no `body` token in this file; the 14px and 12px sizes carry captions, review counts and fine print.

## Layout

Content sits in a centred column inside the full-width header and hero photo; the column width was not measured. The search panel is a white rounded card with a tab row of product types, a pill sub-filter (All, Hotels, Villa, Apartment) and a three-field input row ending in a square blue search button. Deal rows are horizontal carousels with circular arrow buttons at the right edge.

Measured spacing is small-grained: padding of 8px (259 uses), 24px (147), 4px (96), 12px (93) and 16px (48), and gaps of 4px (118 uses) and 8px (64). Cards hold their text in a tight 4px/8px rhythm under a full-width image.

## Elevation & Depth

Cards are lifted by one soft shadow, `rgba(3, 18, 26, 0.15) 0px 4px 10px 0px`, measured on 60 elements, which makes it the signature elevation. Other measured shadows: `rgba(11, 11, 11, 0.1) 0px 2px 24px 0px` (6 elements), `rgba(3, 18, 26, 0.2) 0px 8px 16px 0px` (3, floating panels) and `rgba(3, 18, 26, 0.15) 0px 2px 5px 0px` (2). The shadow colour is a blue-black tint (#03121a-based), not neutral grey. Search panel and coupon cards both use this lift against the white page.

## Shapes

The shape vocabulary is rounded rectangles. 10px (`{rounded.lg}`) is the most common radius with 91 elements (cards), the card top corners `10px 10px 0px 0px` appear on 60 (photo-first deal cards), `6px 0px` on 48 (tag badges), 999px on 41 (pill chips and tabs), 6px on 30 and 20px and 24px on banners. The primary-button elements measured here (the Register and Partner buttons) report a computed radius of 0px on the measured wrapper, which is why `{rounded.none}` is the button token; the capture shows rounded, pill-shaped buttons whose radius was not isolated in the measurement.

## Components

**Primary button.** `{colors.primary}` fill, white 16px semibold label, 48px tall. Used for Register and "Partner with Traveloka".

**Light button.** `{colors.primary-soft}` fill, `{colors.primary-deep}` label, 48px tall; Log In. A 32px-tall 12px variant labelled COPY sits inside coupon cards.

**Text input.** 16px weight 500 text in `{colors.text-input-text}`, 24px measured height inside a larger bordered field, with a leading icon and a grey placeholder.

**Card.** 10px radius, white, `rgba(3, 18, 26, 0.15) 0px 4px 10px 0px`; coupon cards have an icon, 16px semibold title, 12px validity line and a COPY button; deal cards add a ROUND-TRIP black tag, route title and orange price.

**Chips.** 999px radius; selected chips fill blue with white text, others are light blue with blue text (Domestic, Asia, Top picks, Worldwide).

**Navigation.** White text on the photo header, 6px-radius links; the active product tab in the search card is a blue pill.

## Design System Architecture

No public design-system or brand-guideline page was opened. The shipped CSS uses atomic, hashed variable names (for example `--xuqsplg`, `--x1sj75q9`) that hold values such as #0a5c2c, #024590, #fd5d1c, #0071ce, #05285d, #d32d55, 30px, 12px, 16px, 20px and 999px; these are generated by a CSS-in-JS compiler, so there is no semantic naming to cite. The system is therefore described from rendered values: one family (Godwit), a 4px spacing base, a 10px card radius, a blue-black shadow tint and a small set of status colours (green #0a5c2c and #05a569, red #d32d55, orange #fd5d1c).

## Do's and Don'ts

- Do set most UI text in Godwit 600 at 16px, with 24px bold section titles.
- Do use `{colors.primary}` for the single main action and the light pair for secondary actions.
- Do show prices in `{colors.price-orange}`.
- Do use 10px-radius, soft-shadowed cards and 999px chips.
- Don't tint shadows grey; use the blue-black rgba(3, 18, 26, ...) family.
- Don't use orange for anything but fares and urgent savings.
- Don't place body text directly on the hero photo; use the white search panel.

## Responsive Behavior

The extraction's 390px mobile pass reports the same h1 (32px/40px, Godwit 700, white), the same 48px-high CTA and the same sizes as desktop, with 16px (2,846 characters), 14px (1,997) and 12px (1,688) as the leading mobile sizes. Whether this reflects a separate mobile layout or the desktop layout served at that viewport was not determined, and column counts, menu collapse and card stacking were not measured.

## Iteration Guide

1. White canvas, `{colors.ink}` text, Godwit 600 at 16px.
2. One `{colors.primary}` button per view; secondary actions use `{colors.primary-soft}`.
3. Deal cards: 10px radius, 4px 10px blue-black shadow, orange price.
4. Filters as 999px chips; carousels with circular arrows.
5. Keep spacing on 4, 8, 12, 16, 24.
6. Banners may use `{colors.surface-navy}` or `{colors.surface-dark}`; measure any new colour first.
