---
version: alpha
name: Air France
category: "Airlines"
description: "Air France's US booking site (wwws.airfrance.us), built on the Aero token system: navy #051039 text and brand panels, #0045b6 action blue, white #ffffff and #f6f6f7 grey surfaces, bold Excellence In Motion Display headings (20px/28px measured on the hero card) over Excellence In Motion Text 16px body, and small 2px/4px corners."
colors:
  canvas: "#ffffff"
  background-default: "#f6f6f7"
  ink: "#051039"
  brand: "#051039"
  primary: "#0045b6"
  primary-pressed: "#023897"
  on-primary: "#ffffff"
  surface-hover: "#f9f9fa"
  neutral-200: "#e9e9eb"
  on-brand-muted: "#d7e1f4"
  ink-muted: "#646774"
  ink-subtle: "#4e5160"
  hairline: "#a6a8af"
  border-disabled: "#d3d4d7"
  loyalty: "#0800b9"
  critical: "#ae0404"
typography:
  display:
    fontFamily: "\"Excellence In Motion Display\", \"Helvetica Neue\", sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: "\"Excellence In Motion Text\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Excellence In Motion Text\", \"Helvetica Neue\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 2px
  sm: 4px
  loyalty: 20px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 48px
  s10: 64px
components:
  header-button:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    height: 48px
  header-button-hover:
    backgroundColor: "{colors.surface-hover}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
  skip-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  hero-card:
    backgroundColor: "{colors.brand}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
    padding: 24px
  footer:
    backgroundColor: "{colors.brand}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is Air France's United States site (finalUrl `https://wwws.airfrance.us/`). Its header is a white bar with the AIRFRANCE wordmark and its red flash at top left, a search icon, a "United States - EN" market button and a "Log in" button at the right, and a row of section links underneath (Book a flight, Check-in, My Bookings, Flying Blue, Information). The active link carries a red underline in the capture.

Below the header sits a dark, cinematic hero: a night view of the Eiffel Tower with a figure in a red dress, the line "ELEGANCE IS A JOURNEY" above the wordmark, and a navy card on the right reading "Elegance is a journey / Day after day, Air France embodies the French art of living." with a "Watch the film →" link. A white "Book a flight" tab overlaps the bottom-left of the hero and leads into a white booking panel with a "Round trip" selector and a blue search button.

Important context for anyone rebuilding the page: when the capture and the measurement were taken, most of the content below the booking panel was still in its loading state. The deal cards, inspiration tiles and editorial block are grey skeleton placeholders (the extraction records them as `bw-homepage-link-card-skeleton` elements). Their final imagery, copy and type sizes are therefore not measured. What did load are the "Destinations and deals" section with its Flights / Promo rewards switch and fare-origin sentence, a newsletter block ("Looking for special deals? Need inspiration?" with a "Sign up now" button beside a postcard illustration), a row of social icons and a navy footer with link columns and app-store badges.

The tone is quiet and premium: a deep navy, generous white and pale grey, bold but compact headings, and the French-flag red used only in the logo and the active-tab underline.

## Colors

Air France's colors are exposed on the page as Aero design tokens (`--aero-color-*` custom properties on `:root`), so the roles below come with their own names from the shipped CSS.

- **canvas `#ffffff`** (`--aero-color-surface-default`): the header, booking panel and the large white middle band. It covers the most pixels of the capture.
- **background-default `#f6f6f7`** (`--aero-color-background-default`): the body background, used for the "Destinations and deals" band and the newsletter band.
- **ink / brand `#051039`** (`--aero-color-text-default`, `--aero-color-background-brand`): navy for headings, body text, the hero card and the footer.
- **primary `#0045b6`** (`--aero-color-primary-500`, `--aero-color-text-link-default`): the action blue of the search button, the skip link and default links. **primary-pressed `#023897`** (`--aero-color-blue-600`) is the border the "Book a flight" link takes on hover.
- **on-primary `#ffffff`**: text on navy and on blue.
- **surface-hover `#f9f9fa`** (`--aero-color-surface-action-secondary-hover`): the measured hover background of the header buttons.
- **neutral-200 `#e9e9eb`**: the skeleton placeholder grey and the inactive half of the Flights / Promo rewards switch.
- **on-brand-muted `#d7e1f4`**: the most-read text color in the measurement, a pale blue; in the capture the large block of pale text is the navy footer.
- **ink-muted `#646774`** and **ink-subtle `#4e5160`** (`--aero-color-neutral-800`): secondary text greys.
- **hairline `#a6a8af`** (`--aero-color-border-strong`) and **border-disabled `#d3d4d7`**: borders.
- **loyalty `#0800b9`** (`--aero-color-brand-loyalty-one`): the Flying Blue programme color.
- **critical `#ae0404`** (`--aero-color-red-600`): error and critical-action red.

The token set also contains wayfinding and seat-map colors (for example `--aero-color-way-finding-one: #ffd500`) that are not visible on the home page.

## Typography

Air France uses its own typeface, Excellence In Motion, in two optical styles that the page loads as web fonts: Excellence In Motion Display (600) and Excellence In Motion Text (400, 500, 600), plus a legacy `ExcellenceInMotionTextRegular`. By characters rendered, Text dominates (1151), Display follows (210) and Open Sans appears only in a feedback tab.

- **display**: Display 20px/28px, weight 700, the hero card title "Elegance is a journey" (the largest heading whose family was recorded).
- **Section headings**: "Destinations and deals" measures 36px, weight 700, centred, and "Looking for special deals? Need inspiration?" 24px, weight 700; the extraction recorded their size and weight but not their family.
- **body**: Text 16px/24px, weight 400. 14px is the most frequent size on the page (733 characters), matching `--aero-body-s-regular-font-size: calc(16px * .875)`.
- **link**: Text 16px/24px, weight 500, as on "Watch the film".

Measured sizes are 14, 16, 18, 20, 24 and 36px on desktop, with weights 400, 500, 600 and 700. The Aero type scale is expressed as multiples of 16px (`--aero-font-size-50` = 0.75, `-100` = 0.875, `-150` = 1, `-200` = 1.125, `-650` = 4.5), and the token set defines letter-spacing steps of -0.5px, 0.1px and 0.5px; letter-spacing on the measured text is normal. The site's own fallback is "Helvetica Neue", then sans-serif.

## Layout

The desktop pass at 1280px measured a page 4161px tall. The header band is 123px with content running from x=20 to x=1244. The hero band is 208px of media with the hero card set between x=804 and x=1228. The "Destinations and deals" band is 562px on `#f6f6f7` with content between x=160 and x=1120, and the newsletter band at the bottom splits into two columns. The extraction counted up to five card columns on desktop.

Spacing follows the Aero space scale (`--aero-space-100` 4px, `-200` 8px, `-250` 12px, `-300` 16px, `-md` 24px, `-lg` 32px, `-600` 40px, `-700` 48px, `-800` 64px, `-900` 80px). On the page, the most used gaps are 12px and 24px, with 80px between large blocks; the most used paddings are 4px, 24px, 12px and 16px.

## Elevation & Depth

Depth is light. The Aero tokens define two shadow levels, `--aero-box-shadow-level-2: 0px 16px 16px -16px rgba(0, 0, 0, .16)` and `--aero-box-shadow-level-4: 0px 24px 32px -8px rgba(0, 0, 0, .16)`; both are negative-spread shadows that sit only under the bottom edge. On the page the measured shadows are `rgba(0, 0, 0, 0.08) 0px 8px 8px -8px` (once) and a Material button shadow. The booking panel reads as raised mainly because it overlaps the hero photo and has a thin border. The rest of the page separates areas with background changes between `#ffffff`, `#f6f6f7` and navy `#051039`.

## Shapes

Corners are small and consistent. The most frequent radius is 4px (98 uses, `--aero-border-radius-strong`), then 2px (40 uses, `--aero-border-radius-subtle`) for header buttons and tabs, and 50% for circular icons. Split controls use half-rounded corners (`2px 0px 0px 2px` and `0px 2px 2px 0px`), which is how the Flights / Promo rewards switch is drawn. The tokens also hold 20px as `--aero-border-radius-flying-blue-strong`, reserved for Flying Blue elements, and larger radii (12, 40, 48, 80px) that do not appear on the home page.

## Components

- **Header button** ("United States - EN", "Log in"): white background, navy `#051039` text, 2px corners, 48px tall. On hover the background turns `#f9f9fa`; text and border stay navy.
- **Section link** ("Book a flight", "Check-in"): white, navy text, 2px corners, 50px tall, a `#0045b6` border that becomes `#023897` on hover.
- **Skip link**: `#0045b6` background with white text, revealed on keyboard focus (measured as focus-visible).
- **Hero card**: navy `#051039`, white text, 4px corners, 24px padding, Display 20px/28px bold title, a 16px/500 "Watch the film" link with an arrow.
- **Booking panel**: white panel with a "Round trip" dropdown, four input slots, two secondary slots and a blue `#0045b6` search button at the right (in the capture the slots are still loading, so field styling is not measured).
- **Segmented switch**: Flights / Promo rewards, active segment white with bold navy text, inactive segment grey.
- **Newsletter block**: white card on grey with a bold 24px heading, 14px copy and a pale blue "Sign up now" button, next to a navy illustration tile.
- **Footer**: navy `#051039` background, bold white column headings and pale link text, app-store badges in black.

## Design System Architecture

No public Air France design-system site or brand guideline was reached (the corporate site returned HTTP 403 and the press page timed out). The shipped page itself shows a token-driven system named Aero: 400 custom properties on `:root` with the `--aero-` prefix, organised as primitives (`--aero-color-blue-900`, `--aero-color-neutral-200`, `--aero-space-300`, `--aero-border-radius-400`), semantic aliases (`--aero-color-text-default`, `--aero-color-surface-action-secondary-hover`, `--aero-color-border-strong`), typography roles (`--aero-body-s-regular-font-size`, `--aero-headline-m-font-weight`, `--aero-display-s-font-size`) and product-specific sets for Flying Blue, La Première, seat maps and airports (`--aero-color-airport-ams-one`). It is layered on Angular Material (`--mat-*` variables, some re-pointed to Aero values such as `--mat-slide-toggle-selected-handle-color: #0045b6`), and page parts are Angular custom elements (`bw-homepage-link-card-skeleton`). When rebuilding, name tokens the Aero way: primitive scale first, then semantic role.

## Do's and Don'ts

**Do**
- Use navy `#051039` for text and brand panels and `#0045b6` for actions and links.
- Alternate white `#ffffff` and `#f6f6f7` bands to separate sections.
- Set headings in Excellence In Motion Display bold and body in Excellence In Motion Text.
- Keep corners at 2px for controls and 4px for cards and panels.
- Keep red to the logo flash and the active navigation underline.

**Don't**
- Don't use large radii outside Flying Blue elements.
- Don't add heavy drop shadows; Aero shadows only fall below the bottom edge.
- Don't treat the Open Sans "Feedback" tab as Air France typography; it is a feedback widget.
- Don't copy the grey skeleton blocks as a design pattern; they are a loading state.

## Responsive Behavior

The extractor's mobile pass recorded: the header shows one visible header link (five on desktop) and a visible toggle labelled "Search"; section headings shrink from 36px to 28px ("Destinations and deals") and from 24px to 22px (newsletter heading), while the hero card title stays 20px/700. Mobile font sizes by frequency are 16px, 12px, 14px, 18px, 22px, 28px and 20px. Mobile bands are single-column with content between roughly x=16 and x=374, and the footer ends in a 176px navy `#051039` band. The extraction counted up to four card columns on mobile.

The stylesheet declares its breakpoints mainly at `min-width 600px` (154 rules), `min-width 960px` (74), `max-width 599px` (57), `min-width 768px` (14) and `min-width 1280px` (13). The behaviour of the booking panel and deal grid between those breakpoints is not measured.

## Iteration Guide

1. Start with Aero primitives: navy `#051039`, blue `#0045b6`, white, `#f6f6f7` and the neutral greys.
2. Map semantic roles exactly as the site does: text-default navy, link-default blue, surface-default white, background-default grey.
3. Set type in Excellence In Motion (fallback Helvetica Neue): Display bold for headings, Text for 14–16px copy; confirm the family of the 24–36px section headings by measurement.
4. Use the Aero space scale (4, 8, 12, 16, 24, 32, 40, 48, 64, 80px).
5. Keep radii at 2px and 4px; reserve 20px for Flying Blue.
6. Re-measure the home page after it has fully loaded before adding tokens for deal cards, inputs or the primary button, since those were skeletons in this capture.
