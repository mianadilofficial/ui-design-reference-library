---
version: alpha
name: "Southwest Airlines"
category: "Airlines"
description: "Southwest Airlines' booking site uses Southwest Sans in bold 35.2px/52.8px headlines, a Southwest blue (#304cb2) and deep navy (#111b40), the signature yellow (#ffbf27) for every primary button, 2px-radius controls, light grey (#f4f4f4) page ground with white cards and a soft 0 5px 5px shadow."
colors:
  canvas: "#f4f4f4"
  page-body: "#ffffff"
  ink: "#304cb2"
  primary: "#ffbf27"
  on-primary: "#111b40"
  ink-4: "#090f23"
  ink-5: "#000000"
  ink-6: "#515151"
  hairline: "#cccccc"
  blue-deep: "#1a2c80"
  success: "#00801f"
typography:
  display:
    fontFamily: "\"Southwest Sans\", Arial, sans-serif"
    fontSize: 35.2px
    fontWeight: 700
    lineHeight: 52.8px
  heading:
    fontFamily: "\"Southwest Sans\", Arial, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 40px
  body:
    fontFamily: "\"Southwest Sans\", Arial, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  button:
    fontFamily: "\"Southwest Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"Southwest Sans\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  input:
    fontFamily: "\"Southwest Sans\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 1px
  sm: 2px
  md: 4px
  lg: 8px
  xl: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 2.4px
  s4: 4px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 11px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 48px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    height: 48px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 4px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 1px inset
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 0px 4px
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 1px inset
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.on-primary}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 4px 8px 3px
    height: 48px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-5}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 5px 5px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-6}"
---

# Southwest Airlines

## Overview

Southwest Airlines (southwest.com, titled "Southwest Airlines | Airline Tickets and Low Fares") is a booking-first airline home page: 3782px tall at 1280px wide. The header is white: the blue "Southwest" wordmark with its heart logo, a top utility row ("Log in to view points balance", a yellow "Log in" button, "Create account", "Español", a globe), and a row of small bold blue links (FLIGHT | HOTEL | CAR | VACATIONS | CRUISES, SPECIAL OFFERS, RAPID REWARDS®). A blue promo strip announces "Earn 50,000 points + first checked bag is free. Learn more" with a yellow link. The hero is a deep-blue photo of aircraft seats overlaid with a white booking card (tabs Flights, Vacations, Hotels, Cars with a green "NEW!" tag, Cruises; Trip type, Recent searches, Depart/Arrive fields, dates, Passengers, Promo code, a fare-currency radio row, a low-fare-calendar checkbox and a wide yellow "Search flights" button) and the headline "Sale fares to get you there." with "Up to 40% off base fares*" and a yellow "Book now" button. A dark navy strip underneath offers "Check in | Flight status | Manage trip".

Below, the grey page ground carries white promotional cards with a left image and right copy, each ending in a yellow button: "Earn 50,000 points." (Learn more), a teal RIU Hotels & Resorts banner (Book now), "Join Rapid Rewards®. Get rewarded rapidly." (Join for free; a bulleted benefits list), and "A plan for every type of business." The voice is friendly and plain-spoken, with exclamation-free benefit copy and fine print marked with asterisks.

## Colors

- **Canvas `#f4f4f4`**: the page ground and the footer background (5884 weight, the largest area); **page-body `#ffffff`** is the card, header and form surface (2378 weight). The stylesheet maps them to `--neutral-800` and `--neutral-900`.
- **Primary `#ffbf27`**: the Southwest yellow (`--secondary-500`). It fills every primary button (Book now, Search flights, Log in, Learn more, Join for free) with a 1px border of the same color. On-primary is the deep navy `#111b40` (`--primary-200`).
- **Ink `#304cb2`**: the Southwest blue, the most-read text color (1333 characters), used for header links and as the hero and promo-strip background (1032 weight). The stylesheet names it `--secondary-lounge-600`.
- **Ink-4 `#090f23`** (`--primary-100`) is the deepest navy (303 characters); **ink-5 `#000000`** is card heading text; **ink-6 `#515151`** is footer text (68 characters).
- **Hairline `#cccccc`**: input and card borders (`--neutral-500`, 13 uses).
- **Blue-deep `#1a2c80`**: `--blue-2`, a darker blue used in the stylesheet for gradients and the Rapid Rewards member level; **success `#00801f`** (`--success-500`) fills the green NEW! tag (8 weight).

The stylesheet carries full ramps (primary 100 to 800, secondary 100 to 800, neutral, warning, danger, success, plus Rapid Rewards tier and "lounge" palettes in champagne and gold) and social brand colors for LinkedIn, Twitter, Facebook and Instagram; those are variables, not measured on the home page.

## Typography

One family, **Southwest Sans**, in weights 400 (2547 characters) and 700 (811 characters), with Arial as fallback. No letter-spacing is set; all tracking is normal.

| Role | Size / line-height | Weight |
|---|---|---|
| display ("Sale fares to get you there.") | 35.2px / 52.8px | 700 |
| heading (card title) | 28px / 40px | 700 |
| button | 16px / 24px | 700 |
| nav and small links | 14px / 20px | 700 |
| input | 16px | 400 |
| body (fine print) | 13px / 19.5px | 400 |

The size ladder by characters is 16px (1424), 12px (621), 18px (351), 20px (224), 13px (210), 10px (160), 14px (121) and 28px (119). Footer section titles measure 20px/28px bold. The "Up to 40%" hero figure is set much larger than the ladder values recorded here; its size was not separately measured.

## Layout

The page is a 1280px-wide layout with white promotional cards at 522px and 368px in the measurements, centered with a gutter on the grey ground. The header is 106px tall. The hero booking card is a form column at the left and a headline column at the right. Gaps: 12px (12), 8px (11), 16px (9), 32px (7), 15px, 48px, 40px. Paddings: 4px (86), 2px (49), 16px (24), 8px (20), 20px (10), 11px (9), 32px (6), 56px (3). The footer is 815px tall on `#f4f4f4` with 20px bold column titles ("Need help?", "Help Center", "Subscribe" …).

The vertical order of the home page is utility header, nav row, blue promo strip, hero with booking card, navy quick-links strip (Check in, Flight status, Manage trip), then alternating promotional cards, then Special Offers and the footer.

## Elevation & Depth

Two shadows are used: `rgba(0, 0, 0, 0.15) 0px 5px 5px 0px` on promo cards (6 elements) and a zero-alpha 1px inset ring (`rgba(0, 0, 0, 0) 0px 0px 0px 1px inset`, 76 elements) that exists as a focus or hover ring placeholder. Cards are white on grey; the form card floats over the hero photograph.

## Shapes

The shape language is almost entirely 2px (104 elements): buttons, inputs, cards, nav links. Circles (50%, 14 elements) are icon and radio controls. Other radii: 10px (3), 8px (2), 4px (1), 1px (1). The generated scale is xs 1px, sm 2px, md 4px, lg 8px, xl 10px and pill 9999px.

## Components

- **button-primary**: `#ffbf27` fill, `#111b40` bold 16px text, 1px `#ffbf27` border, 2px radius, 48px tall ("Book now", 112px wide; "Search flights", 260px wide). On hover the measured "Log in" button keeps its fill and its border darkens to rgb(23, 31, 63).
- **link**: bold 16px yellow `#ffbf27` text on dark blue ("Learn more"), 2px radius and 0px 4px padding.
- **nav-link**: bold 14px `#304cb2` text, 2px radius, 0px 4px padding ("Create account").
- **text-input**: white fill, 1px `#cccccc` border, 2px radius, `#111b40` 16px text, 4px 8px 3px padding, 48px tall.
- **card**: white fill, 2px radius, shadow `rgba(0, 0, 0, 0.15) 0px 5px 5px 0px`; one measured variant has a 1px `#cccccc` border.
- **tabs**: Flights, Vacations, Hotels, Cars, Cruises along the top of the booking card with an underlined active tab.

## Design System Architecture

No public design system or brand-guideline page was found in the home page links. The shipped stylesheet is a structured token system of CSS custom properties: named ramps (`--primary-100` to `--primary-800`, `--secondary-100` to `--secondary-800`, `--neutral-100` to `--neutral-900`, `--warning-*`, `--danger-*`, `--success-*`), Rapid Rewards tiers (`--rr-tier-1-*` to `--rr-tier-3-*`), lounge, vacations and gradient families, plus layout variables such as `--vacations-hero-container-height: 28rem`. Reference: https://www.southwest.com/

## Do's and Don'ts

- Do use `#ffbf27` with `#111b40` text for every primary action, 2px radius, 48px tall.
- Do put white 2px-radius cards with a soft shadow on the `#f4f4f4` ground.
- Do set text in Southwest Sans with bold headings and regular body.
- Don't mix yellow text on white; the measured yellow text sits on dark blue.
- Don't round corners beyond 2px for controls.
- Don't use social-network brand colors from the stylesheet in the UI.

## Responsive Behavior

The 390px mobile pass measured: the display headline keeps 35.2px/52.8px at 358px wide (two lines, 106px tall); body fine print stays 13px/19.5px at 358px wide; the mobile size ladder is 16px (848 characters), 12px (640), 13px (210), 10px (160), 20px (102), 28px (85), 18px (83), 14px (80), 24px (73) and 35.2px (28). Column layout, tab behavior and card stacking on mobile were not measured.

## Iteration Guide

1. Set `#f4f4f4` ground, white cards, `#304cb2` for brand blocks and links.
2. Use `#ffbf27` only for the primary action, with `#111b40` text.
3. Keep corners at 2px and forms at 48px height.
4. Use bold 28px card titles and 16px bold buttons in Southwest Sans.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=southwest-airlines --url=https://www.southwest.com --force --no-motion` after changes.
