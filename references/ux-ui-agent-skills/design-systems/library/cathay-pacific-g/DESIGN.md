---
version: alpha
name: Cathay Pacific
category: "Airlines"
description: "Cathay's US site (cathaypacific.com/cx/en_US): white #ffffff and #f9f9f9 canvases, #2d2d2d ink, deep Cathay green #2c4036 buttons and footer (hover #042728), jade #367878 links, GT Walsheim 28px/36px headlines over Cathay Sans EN 16px/24px body, 8px button corners and 16px cards with a soft #bcbeb0 glow."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9f9"
  ink: "#2d2d2d"
  ink-secondary: "#4c4c4c"
  ink-warm: "#736c5b"
  on-footer: "#d8d8d8"
  primary: "#2c4036"
  primary-hover: "#042728"
  green-active: "#002527"
  on-primary: "#ffffff"
  jade: "#367878"
  jade-tint: "#f3f8f7"
  surface-tab: "#f1f4f1"
  cream: "#fcf9f4"
  hairline: "#e6e7e8"
  divider: "#bcbec0"
  promotion: "#af4b06"
  gold: "#8f7000"
typography:
  display:
    fontFamily: "\"GT Walsheim\", \"Cathay Sans EN\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  display-mobile:
    fontFamily: "\"GT Walsheim\", \"Cathay Sans EN\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  section-title:
    fontFamily: "\"GT Walsheim\", \"Cathay Sans EN\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 40px
  subheading:
    fontFamily: "\"GT Walsheim\", \"Cathay Sans EN\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  card-title:
    fontFamily: "\"GT Walsheim\", sans-serif, serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: "\"Cathay Sans EN\", sans-serif, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"GT Walsheim\", sans-serif, serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  tab:
    fontFamily: "\"GT Walsheim\", \"Cathay Sans EN\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"GT Walsheim\", \"Cathay Sans EN\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22px
  link:
    fontFamily: "\"Cathay Sans EN\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  xs: 4px
  sm: 8px
  md: 15px
  lg: 16px
  xl: 48px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  search-button:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 68px
  booking-tab:
    backgroundColor: "{colors.surface-tab}"
    textColor: "{colors.primary}"
    typography: "{typography.tab}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 56px
  sign-in-pill:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    border: "1px solid #2d2d2d"
    padding: 5px 15px
    height: 30px
  link:
    textColor: "{colors.jade}"
    typography: "{typography.link}"
  nav-link:
    textColor: "{colors.jade}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.tab}"
    height: 26px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.lg}"
    border: "1px solid #e6e7e8"
    boxShadow: rgba(188, 190, 176, 0.3) 0px 0px 18px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
---

## Overview

The measured page is Cathay's United States home page (finalUrl `https://www.cathaypacific.com/cx/en_US.html`, title "Book flights & elevate your life | Cathay US"). The header logo reads "Cathay" beside its brand mark, and the site runs on the cathaypacific.com domain. A cream utility bar ("Cathay for Business", search, help and support) sits above a white header with the logo and section links (Flights, Holidays, Shopping, Wellness, Dining, Payment, Membership), plus a white "Sign in / up" pill.

The page is long (9309px at desktop) and editorial. A hero banner with a GT Walsheim headline ("Flash Deals: 40% off or more on selected hotels") and a dark green "Book now" button is followed by the booking widget: tabs for Book a trip, Manage booking, Check in and Check flight status; sub-tabs for Book flights, Stopover in Hong Kong, Multi city, Packages and Stays; From / To, trip-type and passenger selectors, departure and return dates, "Latest offers" chips, and a square green "Search flights" button. Then come "Our latest offers" (destination photo cards with fares such as "from USD905"), and a sequence of lifestyle "pillars" each introduced by a small coloured eyebrow (Flights, Holidays, Shopping, Dining, Payment, Membership) with a 28px headline, photography and 24px card headlines. A deep green footer closes the page.

The art direction is calm and photographic: the Hong Kong harbour skyline with a ferry, shared dining tables, a lounge interior, an over-water jetty. Backgrounds shift subtly between white and very light tinted neutrals (`#f7f9f7`, `#f7f4ec`, `#eff2f4`, `#fbfaf7`) to separate pillars. The voice is aspirational and short: "Your next adventure is waiting", "Earn miles with every bite", "An elevated experience awaits".

## Colors

Cathay ships a full semantic token layer on `:root`; the names in brackets are its own.

- **canvas `#ffffff`** (`--background-neutral-white`): header, offers band, cards.
- **page-largest `#f9f9f9`** (`--content-neutral-lightgray`): the largest measured background area.
- **ink `#2d2d2d`**: the dominant text color for headlines and copy (3405 characters).
- **ink-secondary `#4c4c4c`** and **ink-warm `#736c5b`**: secondary and warm-grey supporting text.
- **on-footer `#d8d8d8`**: a light grey recorded on 418 characters.
- **primary `#2c4036`** (`--content-brand-green-default`): Cathay's deep green for primary buttons, the search button and the footer.
- **primary-hover `#042728`**: the measured hover fill of "Book now"; **green-active `#002527`** (`--background-brand-green-active`) is the measured focus fill of the skip button.
- **on-primary `#ffffff`**: text on green.
- **jade `#367878`** (`--content-brand-jade-default`, `--border-brand-primary-default`): links, navigation links and focus borders; also the Green membership tier color.
- **jade-tint `#f3f8f7`** (`--c-color-medium-jade-98`) and **surface-tab `#f1f4f1`**: tinted backgrounds for sub-bands and the booking tabs.
- **cream `#fcf9f4`** (`--c-color-gold-98`): the utility bar.
- **hairline `#e6e7e8`** (`--divider-secondary`) and **divider `#bcbec0`** (`--divider-primary`): borders and rules.
- **promotion `#af4b06`** (`--content-brand-promotion`) and **gold `#8f7000`** (`--membership-gold`): promotional and Gold-tier accents.

The primitive palette behind these roles is a tonal scale per hue (`--c-color-cathay-jade-10` … `-99`, `--c-color-medium-jade-*`, `--c-color-sand-*`, `--c-color-horizons-blue-*`, `--c-color-claret-*`), with cabin colors such as `--cabin-business-default: #1b3668` and `--cabin-first-default: #822c42`.

## Typography

Two families: **GT Walsheim** (loaded at 200 and 400) for headlines, buttons and navigation, and **Cathay Sans EN** (300, 400 and bold) for body text. By characters, Cathay Sans EN leads (3116) and GT Walsheim follows (2089). Weights are almost all 400 (4813 characters), with 300 on 418.

- **display**: GT Walsheim 28px/36px, the hero h1 (matches `--c-h1-font-size: 1.75rem`, `--c-h1-leading: 2.25rem`).
- **section-title**: GT Walsheim 28px/40px for section h2s such as "Our latest offers".
- **subheading**: GT Walsheim 24px/36px for card h3s ("The best October events in Hong Kong").
- **card-title**: GT Walsheim 20px/26px, the membership card title.
- **body**: Cathay Sans EN 16px/24px (`--c-p1-font-size: 1rem`, `--c-p1-leading: 1.5rem`); 16px is the most common size.
- **button**: GT Walsheim 16px/24px; **tab**: GT Walsheim 18px/24px; **nav**: GT Walsheim 14px/22px.

An 18px size carries -0.28px letter-spacing on 85 characters. Headlines are never bold; hierarchy comes from size and the GT Walsheim / Cathay Sans pairing. Both are proprietary or commercial faces; the shipped fallback is plain sans-serif (`--font-sans-serif: "Cathay Sans EN",sans-serif`).

## Layout

At 1280px the page runs edge to edge with content generally between x=36 and x=1244 (the offers band uses x=36–1220, the inspiration band x=60–1220). Bands are recorded in sequence: a 32px cream utility bar, a 74px white header, a 338px hero, a 1297px white offers band with four columns, then alternating tinted pillar bands, and an 738px green footer with four columns. Offer and inspiration rows show four cards across in the capture; pillar sections pair a large photo with an offset text card.

The spacing scale is published as `--c-space-*`: 2, 4, 6, 8, 10, 12, 16, 24, 28, 32, 36, 40, 56, 64, 72px. On the page the most frequent paddings are 12px, 16px, 24px, 8px and 36px, and the most frequent gap is 2px (78 uses, between booking-widget cells), then 24px and 8px.

## Elevation & Depth

Shadows are soft, warm and centred rather than dropped. The token set defines `--c-shadow-xs: 2px 2px 8px 0px #bcbeb026`, `--c-shadow-s: 2px 2px 12px 0px #bcbeb040`, `--c-shadow-m: 0px 0px 12px 0px #bcbeb04d`, `--c-shadow-l: 0px 0px 18px 0px #bcbeb04d`, plus `--c-shadow-lower` and `--c-shadow-upper` (±8px, 24px blur). The membership card uses the large one, measured as `rgba(188, 190, 176, 0.3) 0px 0px 18px 0px`, together with a 1px `#e6e7e8` border. The other measured shadow is `rgba(0, 0, 0, 0.23) 0px 2px 4px 0px` (three uses). Most separation is done with tinted band backgrounds instead of shadow.

## Shapes

Radii are tokenised as `--c-radius-none` 0, `-4` 4px, `-8` 8px, `-16` 16px, `-24` 24px, `-48` 48px and `-full` 9999px. Measured on the page: tab and panel pieces rounded on one side only (`0px 0px 4px 4px` and `4px 4px 0px 0px`, eight uses each), 16px on cards, 4px and 8px on buttons ("Book now" is 8px), 15px on the "Sign in / up" pill, 48px once, circles (`50%`, `100%`) for icons, and `0px 0px 0px 40px` on hero media, a single rounded bottom-left corner. The booking tabs and the "Search flights" button are square (0px).

## Components

- **Primary button** ("Book now"): `#2c4036` fill, white GT Walsheim 16px/24px label, 8px corners, 12px 16px padding, 48px tall. Hover darkens the fill to `#042728` and underlines the label.
- **Search button** ("Search flights"): `#2c4036`, square corners, 16px padding, 68px tall, at the bottom-right of the booking widget.
- **Booking tab** (Manage booking, Check in, Check flight status): `#f1f4f1` fill, `#2c4036` GT Walsheim 18px text, 16px padding, 56px tall, square. Hover inverts it to a green fill with white underlined text.
- **Sign in / up pill**: white, 1px `#2d2d2d` border, 15px corners, 5px 15px padding, 30px tall; hover underlines.
- **Links**: jade `#367878` Cathay Sans EN 16px; header links GT Walsheim 14px/22px.
- **Booking field**: borderless GT Walsheim 18px/26px value text in `#2d2d2d`, 26px line, with small labels above.
- **Card**: white, 16px corners, 1px `#e6e7e8` border, soft 18px glow shadow.
- **Footer**: `#2c4036` with four link columns and social icons.

## Design System Architecture

No public Cathay design-system site or brand guideline was found; the newsroom (https://news.cathaypacific.com/) links to no media library or brand guide. The shipped CSS exposes a mature token architecture on `:root`: primitive tonal scales (`--c-color-cathay-jade-10` … `-99`, sand, horizons blue, claret, mono), semantic aliases split by purpose (`--content-*`, `--background-*`, `--border-*`, `--divider-*`), domain tokens for membership tiers (`--membership-gold`, `--membership-diamond`) and cabins (`--cabin-business-default`), plus type tokens per platform (`--c-h1-font-size`, `--c-pc-h2-font-size` for desktop, `--c-app-p1-leading` for app), radius (`--c-radius-*`), space (`--c-space-*`, with negatives `--c-n-space-*`), shadows and layers (`--c-layer-toast: 800`). Tailwind variables (`--tw-*`, `--container-md`) show that utilities are generated on top. Rebuild with the same separation: primitives, then content/background/border semantics, then component styles.

## Do's and Don'ts

**Do**
- Use deep green `#2c4036` for primary actions and the footer, and jade `#367878` for links.
- Set headlines in GT Walsheim at weight 400; set copy in Cathay Sans EN 16px/24px.
- Separate long pages with very light tinted bands rather than borders.
- Use the warm, centred `#bcbeb0` shadows on cards.
- Keep the booking widget square-edged and dense (2px gaps).

**Don't**
- Don't make headlines bold; the page has no bold display type.
- Don't use pure black for text; ink is `#2d2d2d`.
- Don't use grey drop shadows with large offsets.
- Don't treat the cookie preference centre as brand UI.

## Responsive Behavior

The extractor's mobile pass recorded: the h1 shrinks from 28px/36px to 20px/26px and the "Our latest offers" h2 from 28px/40px to 24px/36px; body copy stays Cathay Sans EN 16px/24px; the measured primary CTA becomes the square green "Search flights" button; one header link is visible with a toggle labelled "open navigation menu"; the extraction counted up to eight card columns in carousels (twelve on desktop). Mobile bands are single-column with content between x=16 and x=374, ending in a 769px `#2c4036` footer.

The stylesheet's breakpoints are `min-width 600px` (704 rules), `min-width 905px` (671), `max-width 599.98px` (250) and `max-width 904.98px` (248), with fewer rules at 1200px and 1440px. Booking-widget behaviour between breakpoints is not measured.

## Iteration Guide

1. Start from the semantic tokens: `#ffffff` / `#f9f9f9` backgrounds, `#2d2d2d` ink, `#2c4036` primary, `#367878` jade links.
2. Pair GT Walsheim (headlines, buttons, nav) with Cathay Sans EN (body), all at weight 400.
3. Use the `--c-space-*` scale and `--c-radius-*` values; 8px for buttons, 16px for cards, 0 for booking controls.
4. Use the warm `--c-shadow-*` glows sparingly.
5. Alternate pillar bands with the light tinted neutrals and lead each with a coloured eyebrow.
6. Measure the booking flow and Asia Miles pages before adding tokens for forms, errors or tier badges.
