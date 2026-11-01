---
version: alpha
name: COS
category: "Fashion & Apparel"
description: "COS US womenswear landing page: SuisseIntl (400/500/600/700) set in uppercase, a white 48px header over full-bleed two-column fashion photography, a #080808 near-black footer with #ffffff 13px text, #757575 inactive links, 32px bold uppercase headlines, and square 0px corners on every element."
colors:
  canvas: "#080808"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#080808"
  ink-muted: "#757575"
  signal-red: "#c80000"
typography:
  display:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 35.2px
    textTransform: uppercase
  display-mobile:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 20px
    fontWeight: 700
    lineHeight: 22px
    letterSpacing: 0.2px
    textTransform: uppercase
  body:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18.2px
    letterSpacing: 0.13px
  nav:
    fontFamily: SuisseIntl, sans-serif
    fontSize: 13px
    fontWeight: 600
    lineHeight: 14.3px
    letterSpacing: 0.52px
    textTransform: uppercase
rounded:
  none: 0px
spacing:
  s1: 12px
  s2: 14px
  s3: 16px
  s4: 20px
  s5: 24px
  s6: 40px
components:
  category-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 12px 0px
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    padding: 0px 24px
    height: 48px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 12px 0px
  nav-link-inactive:
    textColor: "{colors.ink-muted}"
    typography: "{typography.nav}"
    padding: 12px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
---

# COS

## Overview

The queued URL, https://www.cos.com, resolves to https://www.cos.com/en-us, which is a gender-selection splash: two full-height photographs labelled "SHOP WOMEN" and "SHOP MEN" above the footer, with no other content. Per the queue rules the real home page was re-measured at https://www.cos.com/en-us/women (title "Womenswear Collection | COS US"), and this document describes that page. It is 3,975px tall at 1280px and is almost entirely photography: a white 48px header, then a grid of large editorial images (two columns, then one full-width, then two columns again), then a near-black footer.

The art direction is quiet and fashion-editorial. The capture shows models in black and charcoal tailoring photographed against white panelled walls and an oxblood leather sofa and armchair; the strongest colour on the page comes from that red leather and a red knit tied at the waist. The interface itself has no colour at all: white header, white uppercase labels over the photographs, and black footer. Typography is a single grotesque, SuisseIntl, set in uppercase almost everywhere ("BOLD ELEGANCE", "NEW ARRIVALS", "CASHMERE", "COATS & JACKETS", "ALL WOMENSWEAR", "PANTS"). Microcopy is terse and noun-based: category names, not slogans. The one sentence of running copy is the newsletter prompt: "Sign up to receive 10% off your first order and stay up to date on new collections, events and exclusive offers."

## Colors

- **canvas #080808** — the measured canvas token. The capture is dominated by near-black (26.5% of the screen sampled as #090909, plus 10.4% #050505), which comes from the 717px footer and the dark garments; `--color-base-black` is #080808. The `primary` token carries the same value because the site has no filled call-to-action; #080808 is the system's "inverted" button and active colour (`--background-color-main-button-inverted`, `--background-color-main-button-active`).
- **page-body #ffffff** — the body and header background. Treat it as the surface for any content area; the header nav is white.
- **ink #ffffff** — the most-read text colour on the page, because nearly all text is white: labels over photographs and the whole footer.
- **ink-muted #757575** — the inactive gender tab ("MEN" while on women). Hover was measured on it: the colour changes from #757575 to #080808 with no underline.
- **signal-red #c80000** — a measured background area; in shipped CSS it is `--color-base-red` and `--color-base-semantic-error`, so it belongs to error and sale signalling rather than to brand decoration.

Shipped CSS also defines a grey ramp (`--color-base-grey-1` #fafafa through `--color-base-grey-6` #212121, `--color-base-grey-8` #e6e6e6), warm neutrals (`--color-base-neutral-200` #f8f7f6, `-300` #efedeb, `-400` #e0dfde) and semantic success #497a52, information #1d4674 and warning #dd9335. They were not measured as rendered fills on the women page.

## Typography

Everything is set in **SuisseIntl**, with the shipped fallback chain `"SuisseIntl","SuisseIntl Fallback",Helvetica,Arial,sans-serif`. Four weights are loaded (400, 500, 600, 700), mapped to `--font-weight-normal`, `-medium`, `-semibold` and `-bold`.

- **display** — 32px / 700 / 35.2px, uppercase, white. The hero label "BOLD ELEGANCE" centred over the opening image pair.
- **nav** — 13px / 600 / 14.3px, uppercase, letter-spacing 0.52px. Used for the WOMEN / MEN tabs and for the category labels on each image.
- **body** — 13px / 400 / 18.2px, letter-spacing 0.13px. The newsletter paragraph.
- Footer headings and links are 13px / 400 uppercase with 0.52px tracking (measured on the footer element).

Only two font sizes were measured on the desktop page: 13px and 32px. The scale is therefore extremely flat; hierarchy comes from weight (400 vs 600 vs 700), uppercase and the placement of text over images, not from size.

**Substitute:** SuisseIntl is a commercial Swiss Typefaces family. The site's own fallback is Helvetica, then Arial; keep uppercase and the 0.52px tracking when substituting.

## Layout

The header is a 48px white bar with 24px side padding: WOMEN / MEN tabs at the left, the COS wordmark centred, and search, account, wishlist and bag icons at the right. Below it the page is a photo grid that bleeds to the viewport edges with a hairline gap between images. The opening pair is two equal columns with the headline and a "NEW ARRIVALS" link centred across them; then two equal columns labelled CASHMERE and COATS & JACKETS; then a single full-width image labelled ALL WOMENSWEAR; then two more columns. Category labels sit in the top-left corner of each image in 13px uppercase white.

The footer is 717px tall on #080808, with the newsletter block in the left column and three link columns (THE COMPANY, ASSISTANCE, LEGAL) on the right, all uppercase, and the COS wordmark at the bottom left. Measured spacing values are 12, 14, 16, 20, 24 and 40px; the Tailwind base unit is `--spacing: .25rem`.

## Elevation & Depth

There is no elevation. No box-shadows and no border colours were measured on the page. Separation comes only from the white header against photography and from the hard edge between the image grid and the black footer. Translucent white tokens (`--color-base-white-15` to `-70`) and black tokens (`--color-base-black-10` to `-60`) exist in the CSS for overlays, but none was measured as a rendered overlay on this page.

## Shapes

Every element computes a 0px radius: `borderRadii` in the extraction is empty. Images, header, links and footer are all hard-edged rectangles. Tailwind radius variables (`--radius-md` .375rem, `--radius-lg` .5rem, `--radius-xl` .75rem, `--radius-3xl` 1.5rem) are defined in the stylesheet but not used by anything rendered on the measured page. Keep every new component square.

## Components

- **nav** — #ffffff background, 48px tall, 0 24px padding.
- **nav-link** — 13px/600 uppercase, 0.52px tracking, #080808 for the active tab with 12px 0 padding (41px tall).
- **nav-link-inactive** — the same style in #757575; on hover it turns #080808 (measured).
- **category-link** — the 13px/600 uppercase label link pattern, here documented with the measured 12px 0 padding.
- **image tile** — full-bleed photograph with a white uppercase label at top left; the hero version adds a 32px/700 headline and a small "NEW ARRIVALS ›" link.
- **footer** — #080808 background, #ffffff 13px uppercase text, newsletter "SIGN UP ›" text link, three link columns.
- **buttons** — no filled button appears on the page. Shipped CSS defines the main button as white (`--background-color-main-button: #fff`) with a #dadada border (`--border-color-main-button`) that darkens to #080808 on hover, and an inverted #080808 version; these were not measured as rendered.

## Design System Architecture

No public COS design system or brand guideline site was found: the brand's own pages could not be read with WebFetch (HTTP 403, recorded in SOURCES.json), and no design-system link is visible in the captured footer (About, Careers, Press, Store Locator, Design & Craft, Features, social links). The de-facto system lives in the shipped CSS on https://www.cos.com/en-us/women, which is a Next.js build (`/_next/static/media/` font files) styled with Tailwind (`--tw-*` and `--spacing: .25rem` variables). On top of Tailwind sits a two-tier custom-property layer:

- **base tokens** — `--color-base-*` (black, white, greys 1–8, neutrals 200–400, red, green, blue, orange, yellow, alpha steps of black and white);
- **semantic/component tokens** — `--text-color-*` (`-black`, `-block`, `-block-inverted`, `-btn-outline`, `-btn-disabled`, `-footer`), `--background-color-main-button*`, `--border-color-main-button*`, `--background-color-icon-button-round*` and `--border-color-divider`.

Fonts are exposed as `--font-suisse-intl`, `--font-sans-with-fallback` and four `--font-weight-*` values. New components should map to these semantic names.

## Do's and Don'ts

- Do set all labels in uppercase SuisseIntl at 13px with 0.52px tracking.
- Do let full-bleed photography carry the page; keep UI chrome to white, #080808 and #757575.
- Do keep all corners at 0px.
- Do use weight, not size, for hierarchy; the desktop page uses only 13px and 32px.
- Do place category labels in the top-left of image tiles in white.
- Don't add drop shadows, rounded cards or coloured buttons.
- Don't use #c80000 decoratively; it is the error/sale red in the base tokens.
- Don't write promotional slogans; COS labels are plain category nouns.
- Don't document the en-us splash (SHOP WOMEN / SHOP MEN) as the home layout; it is an entry gate.

## Responsive Behavior

The 390px mobile pass measured the hero headline at 20px / 700 / 22px with 0.2px tracking (from 32px on desktop), body text staying at 13px / 18.2px, 3 header links visible and a white 131px header band. Cards were measured in up to 2 columns on mobile (`maxCardColumns` 2, versus 5 on desktop). The mobile page alternates photo bands with near-black bands (#030303, #0a0a0a, #080808), and its nav element is #ffffff. The stylesheet declares breakpoints at min-width 1024px (most used), 666px, 1366px and 2100px. Menu behaviour on mobile was not measured.

## Iteration Guide

1. Begin with a 48px white header (0 24px padding) and a black #080808 footer.
2. Fill the middle with edge-to-edge photography in one- or two-column rows.
3. Label every tile with 13px/600 uppercase SuisseIntl in white at the top left.
4. Use 32px/700 uppercase for the single hero headline; drop to 20px at 390px.
5. Use #757575 for inactive navigation and switch to #080808 on hover.
6. Keep every radius at 0px and add no shadows.
7. For buttons, follow the shipped tokens: white fill with #dadada border, #080808 on hover; measure before publishing new values.
8. Re-measure if COS changes the en-us entry page; the women page is the measured reference.
