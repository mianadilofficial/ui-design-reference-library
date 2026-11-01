---
version: alpha
name: Opal Electronics
category: "Retail & E-commerce"
description: "Opal Electronics (op.al, queued as Opal Tadpole): a black #000000 page with white #ffffff Die Grotesk C text at 18.64px regular and a 43.5px bold lowercase headline, +2% letter spacing, a single yellow #ffdb00 accent, full-bleed product photography and 0px radius everywhere."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffdb00"
  ink-muted: "#818181"
typography:
  display:
    fontFamily: "\"Die Grotesk C\", system-ui, sans-serif"
    fontSize: 18.6408px
    fontWeight: 400
    lineHeight: 20.5049px
    letterSpacing: 0.372816px
  display-mobile:
    fontFamily: "\"Die Grotesk C\", system-ui, sans-serif"
    fontSize: 14.625px
    fontWeight: 400
    lineHeight: 16.0875px
  heading:
    fontFamily: "\"Die Grotesk C\", system-ui, sans-serif"
    fontSize: 43.4951px
    fontWeight: 700
    lineHeight: 47.8447px
    letterSpacing: 0.869903px
  nav:
    fontFamily: "\"Die Grotesk C\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  s1: 20px
  s2: 24px
  s3: 40px
  s4: 64px
  s5: 160px
components:
  nav:
    textColor: "{colors.ink}"
    padding: 0px 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 24px 20px
---

## Overview

The queued entry was "Opal Tadpole" at https://www.opalcamera.com/opal-tadpole. That address resolves to https://op.al/, the site of Opal Electronics (title "Opal Electronics"), so this file documents the measured site under the name Opal Electronics. The page that loads is not a product page: it is a founder's essay dated June 1, 2026, titled "the table", announcing that the company can now be called Opal Electronics Inc. WebFetch of https://op.al/ confirms there is no main navigation, only a logo and the footer links Support, Terms, Privacy, Jobs and Contact (a mailto link to hello@op.al), and that the tone is "more like a founder's essay than a product pitch".

The capture is a full-bleed photograph taken from above of a transparent table covered with the company's past products and prototypes (yellow cameras, circuit boards, translucent objects, hands and a face at the edges), with the white wordmark "opal electronics" at the top left, the lowercase headline "the table" and a date at the top center, and a single narrow column of white text over the image. The essay begins "In our office, there is a table." and sets out three wishes: to work with the fewest and best people, to empty the table, and to surprise. It closes with a yellow "See you soon." The page then ends in a black footer. The voice is short declarative sentences, plain and warm.

The essay's own words describe the brand position. It says the first items on the table were cameras, that the company built webcams with a small team and a factory and sold many of them, and that its customer "occupy the golden decile", the ten percent of people who want something of extreme difference. It states that shares were sold to an AI lab, a multinational electronics company and storied capital institutions, with full creative control retained. Those statements come from the page text opened with WebFetch and visible in the capture; the site shows no product grid, pricing or purchase flow on this page, so no commerce components are documented.

## Colors

The palette is three measured colors on a black page.

- **Canvas `#000000`**: the only background measured (7131 area units); the page below the image and the footer are black.
- **Ink `#ffffff`**: 2597 of the 2629 text characters. All essay copy, the headline and the nav text are white.
- **Ink-muted `#818181`**: 19 characters, the grey footer text.
- **Primary `#ffdb00`**: 13 characters, the yellow "See you soon." line. It is the root variable `--yellow: #ffdb00`, which makes it the one accent of the site. There is no button or fill in the measured data.
- The stylesheet also declares `--legal-pages-text: #767676`, `--legal-pages-title: #342e2f` and `--job-listing-apply-text: #000`; these belong to legal and jobs pages and were not found on this page. The Tailwind ring and shadow variables (`--tw-ring-shadow: 0 0 #0000`) are framework defaults with no visible effect.

All color beyond these three comes from the photograph, which is content.

## Typography

One typeface, **Die Grotesk C** (weights 400 and 700), with `system-ui, sans-serif` as the fallback; it carries all 2629 characters. The root declares `--font-apple` (`-apple-system, BlinkMacSystemFont, "SF Pro Display", system-ui, sans-serif`) as a second stack, which was not seen in use.

- **Display role (the first paragraph "In our office, there is a table."):** 18.6408px, weight 400, line-height 20.5049px, letter spacing 0.372816px. At 390px the same text is 14.625px with a 16.0875px line-height and normal letter spacing.
- **Heading (H2 "the table"):** 43.4951px, weight 700, line-height 47.8447px, letter spacing 0.869903px, lowercase. At 390px it is 46.8px with a 44.46px line-height.
- **Nav:** 16px, weight 400, line-height 24px (letter spacing 0.32px on 49 characters).
- **Body copy:** the same 18.6408px, weight 400 as the first paragraph; it accounts for 2572 characters.

Tracking is a constant +2 percent of size (0.372816 / 18.6408 and 0.869903 / 43.4951 both equal 0.02), so the face is set slightly open at every size. There are only three font sizes on the page (18.6408px, 16px and 43.4951px) and two weights.

## Layout

The page is 3296px tall at 1280px. The text is one centered narrow column over the photograph. A header height variable is declared (`--header-height: 80px`) and the nav has 0px 20px padding. Measured spacings: gaps of 40px (4 occurrences) and 64px (2), paddings of 20px (2), 160px, 24px and 171px; the footer padding is 24px 20px. The spacing scale in the tokens is 20, 24, 40, 64 and 160px. Paragraph spacing in the essay is an empty line between short paragraphs, as the DOM text shows.

## Elevation & Depth

No shadows and no borders were measured. Depth is photographic: the table image is full bleed and the text sits on it without a panel. The footer is plain black below the image.

## Shapes

`borderRadii` is empty in the extraction: every rendered element has a computed radius of 0px, so the token is `none: 0px`. There are no buttons, inputs or cards to round. The dashed underline under the headline noted by WebFetch is a line style, not a shape.

## Components

- **Nav:** a transparent header with 0px 20px padding holding the logo wordmark; nav links are Die Grotesk C 16px weight 400 in white. The home link is the logo.
- **Essay column:** 18.6408px white text, paragraphs separated by a blank line, headline "the table" 43.4951px bold lowercase, date below it in the body size.
- **Accent line:** the closing "See you soon." in `#ffdb00`.
- **Footer:** black, text `#818181`, padding 24px 20px; links Support, Terms, Privacy, Jobs and Contact.

## Design System Architecture

No public brand guidelines or design system exist or are linked: WebFetch of https://op.al/ found none. The de-facto system is minimal: a Tailwind-based stylesheet (the `--tw-*` variables), `--yellow: #ffdb00`, `--header-height: 80px`, two font stacks and the page-specific legal and job-listing colors. The design is carried by the photography and by one typeface rather than by tokens.

## Do's and Don'ts

- Do keep the page black with white text and use `#ffdb00` only for the closing accent.
- Do set everything in Die Grotesk C with +2 percent letter spacing; headline in 700, copy in 400.
- Do let full-bleed object photography carry the identity.
- Do keep every corner square.
- Don't add buttons, cards or shadows; none were measured on this page.
- Don't use the legal-page greys `#767676` or `#342e2f` on the black page without measuring them in use.

## Responsive Behavior

Measured at 390px: the headline becomes 46.8px bold with a 44.46px line-height (it is slightly larger than at 1280px), the essay text becomes 14.625px with a 16.0875px line-height, and the 16px nav text becomes 14px on 49 characters. The nav keeps its 0px 20px padding. The mobile text sizes by characters are 14.625px (2572), 14px (49) and 46.8px (8). The photograph's crop at that width and the footer layout were not measured, and no breakpoint values were read.

## Iteration Guide

1. Start with a black field and white Die Grotesk C text.
2. Use 18.6408px regular body and a 43.4951px bold lowercase headline, tracking at +2 percent.
3. Keep the single yellow `#ffdb00` accent for one closing line or link.
4. Use full-bleed photography for the section background and keep corners square.
5. Record any new measurement in SOURCES.json before adding tokens.
