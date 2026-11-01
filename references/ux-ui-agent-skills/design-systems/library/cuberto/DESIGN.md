---
version: alpha
name: Cuberto
category: "Agencies & Studios"
description: "Cuberto's agency site alternates white #ffffff and black #000000 sections, all set in Suisse Intl (72px/500 headline with -0.72px tracking, 14.4px/400 body), with black and white 46px pill buttons (9999px), 16px-radius service rows on #eeeeee, mint #e3f5f3 and pale #f1f3fa testimonial cards, 64px top-rounded section edges and 70%-white #ffffffb3 copy on black."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-on-dark-muted: "#ffffffb3"
  surface-row: "#eeeeee"
  surface-mint: "#e3f5f3"
  card-bg: "#f1f3fa"
typography:
  display:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-0.72px"
  display-mobile:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 46.8001px
    fontWeight: 500
    lineHeight: 46.8001px
    letterSpacing: "-0.468001px"
  eyebrow:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 14.08px
    textTransform: uppercase
  service-title:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 33.6px
    fontWeight: 400
    lineHeight: 36.96px
  body:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
  body-mobile:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 18.72px
    fontWeight: 400
    lineHeight: 28.08px
  button:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
rounded:
  xs: 6.4px
  sm: 16px
  md: 64px
  pill: 9999px
spacing:
  s1: 2.56px
  s2: 3.2px
  s3: 3.84px
  s4: 4.1px
  s5: 4.8px
  s6: 5.12px
  s7: 6.4px
  s8: 8px
  s9: 9.6px
  s10: 12.8px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 22.4px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 22.4px
    height: 46px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 4.8px 16px
  service-row:
    backgroundColor: "{colors.surface-row}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  testimonial-card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 40px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.on-primary}"
    padding: 96px 0px
---

# Cuberto

## Overview

Cuberto (cuberto.com, page title "Cuberto | Digital Design & Development Agency") is a digital design and development agency. Its About page says two brothers, Roman and Dmitri, founded it in 2010 "as a small boutique studio for website and mobile app designs", that it has grown into a "full-cycle agency with attested design expertise", and lists a main office at 901 N Pitt Street, Alexandria, VA, a second office in Prague, 40+ team members and 300+ projects. It cites the Awwwards "Agency of the Year" trophy and the Dribbble 100K Club award.

The home page is built as a stack of alternating white and black sections with soft rounded edges. The capture opens on white: a small wordmark and a centred header row (Services, Projects, About, Blog, and a black "Contacts" pill at the far right), then the centred two-line H1 "Digital design & development agency" in Suisse Intl Medium at 72px, a short subline, and a wide showreel image of a 3D product scene. A "WHAT WE DO" eyebrow introduces a paragraph ("Since 2010, we've partnered with startups, scale-ups and global companies…") and a list of services shown as grey rounded rows — the first, "Digital Product Design", opened as a black panel with a description and an "Explore" link. A row of client logos ("Trusted by remarkable global brands") follows.

Then the page turns black: "Selected work" with a staggered two-column grid of project images and short captions, and a white "View all projects" pill. A white section "Trusted by our clients" shows tilted testimonial cards in pale blue and mint, followed by stat tiles ("15+", "300+") in mint and pale grey. The page turns black again for "Insights" (blog cards), an FAQ accordion, and a closing "Have a product to build or rethink?" with a white pill CTA, ending in a black footer with contact details and office addresses.

## Colors

- **Canvas `#ffffff`** — the body and the white sections.
- **Page-largest `#000000`** — the largest background area (8,402 units): the "Selected work", "Insights", FAQ and footer sections.
- **Ink `#000000`** — text on white. **Primary `#000000`** with **on-primary `#ffffff`** — the "Contacts" pill button. On black sections the roles invert: the "View all projects" and "Get in touch" pills are white with black text.
- **Ink-on-dark-muted `#ffffffb3`** — white at 70% alpha, the most-read text colour on the page (4,185 characters): descriptions and FAQ text on black.
- **Surface-row `#eeeeee`** — the grey of the service rows ("Web Design & Development", "UX Research & UI Design"…).
- **Surface-mint `#e3f5f3`** — the mint of testimonial cards and stat tiles.
- **Card-bg `#f1f3fa`** — the pale blue-grey of testimonial cards, which carry a 4px solid #ffffff border.

There is no saturated brand colour. Contrast is achieved by switching whole sections between black and white and by pale tinted cards.

## Typography

One family: **Suisse Intl**, self-hosted from `/assets/fonts/suisseintl/` in Light 300, Regular 400, Medium 500, SemiBold 600 and Bold 700 files; the measured page uses 400 (8,590 characters) and 500 (186). A Manrope variable font is also declared from Google Fonts but no measured element uses it.

- **Display** — H1 72px/500, line-height 72px, letter-spacing -0.72px. Section titles at 64px measure -1.28px and -1.92px tracking.
- **Service-title** — 33.6px/400/36.96px ("Digital Product Design" in the open service panel).
- **Eyebrow** — 12.8px/400/14.08px uppercase ("WHAT WE DO").
- **Body** — 14.4px/400/21.6px, the most-read size (5,305 characters), with -0.144px tracking in cards.
- **Nav** — 16px/400/19.2px; links in dark sections measure 16px with +0.32px tracking.
- **Button** — 16px/500/16px.

Other measured sizes are 19.2px (+0.384px), 20.48px (+0.2048px), 25.6px and 64px. Small text is tracked slightly open and large text slightly tight. The sizes are fractional computed values (12.8, 14.4, 19.2, 20.48, 25.6, 33.6px); the mobile pass records a different, larger set (18.72, 20.8, 46.8001px).

## Layout

At 1280px the first white band's content spans x = 189 to 1151, centred. The H1 is centred; the "WHAT WE DO" section switches to an asymmetric layout with the eyebrow at left and copy and service rows in a wider right column. Work and blog grids use two to four columns (`maxCardColumns` 4). The most common gap is 12.8px (34 elements, the spacing between service rows and grid items), then 4.8px and 80px; large section paddings are 192px, 120px and 96px (the footer's vertical padding).

The spacing scale is fine-grained: 2.56, 3.2, 3.84, 4.096, 4.8, 5.12, 6.4, 8, 9.6 and 12.8px, with 4.096px the most frequent padding (130 elements).

## Elevation & Depth

No box-shadow is measured anywhere (`boxShadows` is empty). Depth comes from section colour changes and from shape: in the capture the black sections have large rounded top corners, and the extractor measured a `64px 64px 0px 0px` radius on 3 elements, so each section reads as a sheet laid over the previous one. The testimonial cards are rotated slightly — the measured card transform is `matrix(0.987688, -0.156434, 0.156434, 0.987688, 89.6, 80)`, a 9° tilt — and overlap one another with 4px white borders, creating a scattered-paper effect without shadows.

## Shapes

Measured radii: 16px (24 elements), 99999px (12, including the pill buttons), 50% (7), `50% 50% 0px 0px` (6), 6.4px (5, including the testimonial card), 1000px (4), `64px 64px 0px 0px` (3) and 64px (1). In the capture the vocabulary reads as pill buttons, rounded service rows, circles and big rounded section edges.

## Components

- **Header** — wordmark left; centred nav "Services, Projects, About, Blog" at 16px/400 with 4.8px 16px padding; black "Contacts" pill right (46px tall, 0px 22.4px padding, 16px/500).
- **Pill button** — primary black/white (`button-primary`) or inverted white/black (`button-secondary`, "Get in touch", "View all projects"), 46px tall, fully rounded.
- **Service row** — #eeeeee row with 16px radius and a service name; the active row expands into a black panel with a 33.6px title, a 70%-white description and an "Explore" link.
- **Client logo strip** — monochrome logos in a centred grid under "Trusted by remarkable global brands".
- **Work card** — image with a two-line caption, in a staggered two-column grid on black.
- **Testimonial card** — #f1f3fa or #e3f5f3, 6.4px radius, 40px padding, 4px white border, 9° rotation, quote text at 14.4px/20.16px with -0.144px tracking.
- **Stat tile** — mint or pale tile with a large number ("15+", "300+") and a short label.
- **FAQ row** — question on a dark row with a "+" toggle.
- **Footer** — black, 96px vertical padding, email "info@cuberto.com", office addresses at 19.2px, and nav and social links.

## Design System Architecture

No public Cuberto design system or brand guideline was found. The About page (https://cuberto.com/about/) has no brand or press links; its footer links to the GitHub organisation https://github.com/Cuberto, whose repositories are interaction libraries (`mouse-follower`, `reeller`, `liquid-swipe`, `flashy-tabbar`, `gooey-cell`, `rubber-range-picker`, `smooth-scroll`) rather than a design system or token package.

The de-facto system: the site is built with Astro (component markup carries `data-astro-cid-*` attributes), declares no CSS custom properties, and uses one typeface family, a black/white section alternation, a 0.64px-based size and spacing grid, and a small set of shapes (pills, 16px rows, 64px section tops). The extractor recorded no CSS media queries or breakpoints in the stylesheets it read.

## Do's and Don'ts

**Do**
- Alternate full white and full black sections, with large rounded tops on the dark ones.
- Use Suisse Intl only: 500 for the headline, 400 for everything else.
- Use 46px pill buttons, black on white sections and white on black sections.
- Put secondary text on black at 70% white (#ffffffb3).
- Use pale tints (#eeeeee, #e3f5f3, #f1f3fa) for rows, cards and stat tiles.
- Track large type slightly negative and small type slightly positive.

**Don't**
- Don't add a saturated accent colour to the interface.
- Don't use shadows; use colour planes, rotation and borders.
- Don't use square buttons; every button is a pill.
- Don't set body copy larger than 14.4px on desktop.
- Don't use Manrope; it is declared but unused.

## Responsive Behavior

Measured at 390px wide:

- The H1 becomes 46.8001px/500 with -0.468001px tracking (desktop 72px/-0.72px) and is left-aligned.
- Body text becomes 18.72px/400/28.08px (desktop 14.4px/21.6px); the most-read sizes are 18.72px, 20.8px and 17.68px — mobile text is larger than desktop text.
- The eyebrow becomes 14.56px/16.016px.
- The "Contacts" pill stays, at 16.64px/500.
- 2 header links stay visible and a menu toggle ("Toggle menu") appears.
- Grids show 1 column (`maxCardColumns` 1); content spans x = 6 to 358.

No CSS breakpoints were recorded, so the switch width between the desktop and mobile layouts was not measured.

## Iteration Guide

1. White canvas, black ink, Suisse Intl 400/500 only.
2. Centre a 72px/500 headline with -0.72px tracking and a short subline.
3. Use 46px pill buttons with 22.4px side padding and 16px/500 labels.
4. Present services as #eeeeee rounded rows (16px is the most-used measured radius) with 12.8px gaps; open the active one as a black panel.
5. Switch to black sections with large rounded tops for work, insights and FAQ; use #ffffffb3 for secondary text.
6. Show testimonials as tilted pale cards with 4px white borders and no shadows.
7. On mobile, enlarge body text to 18.72px and drop the headline to 46.8px, single column.
