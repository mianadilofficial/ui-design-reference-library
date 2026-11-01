---
version: alpha
name: Ramotion
category: "Agencies & Studios"
description: "Ramotion's agency site is a light #fafafa page in Graphik (Graphik Web) with a centred 92px/600 headline (-3.2px tracking), #262626 text and filled #262626 pill-like buttons (20px radius 'Contact', 40px radius 'Let's talk'), #6f7984 secondary text, #cccccc hairlines, 8px-radius project images in a staggered grid and no shadows."
colors:
  canvas: "#fafafa"
  ink: "#262626"
  primary: "#262626"
  on-primary: "#ffffff"
  surface-subtle: "#f2f2f2"
  ink-muted: "#6f7984"
  hairline: "#cccccc"
  text-blue: "#2f77eb"
  text-dark-blue: "#0049ca"
typography:
  display:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 92px
    fontWeight: 600
    lineHeight: 101.2px
    letterSpacing: "-3.2px"
  display-mobile:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
    letterSpacing: "-3.2px"
  heading:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 57.6px
  heading-mobile:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38.4px
  subheading:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 500
    lineHeight: 33.6px
  body-large:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 37.2px
  body:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.4px"
  button-medium:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button-large:
    fontFamily: "\"Graphik Web\", system-ui, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
rounded:
  xs: 8px
  sm: 10px
  md: 20px
  lg: 40px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 9px
  s4: 10px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    height: 38px
    borderColor: "{colors.primary}"
  button-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.lg}"
    height: 75px
    borderColor: "{colors.primary}"
  button-outlined:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    typography: "{typography.button-medium}"
    rounded: "{rounded.lg}"
    padding: 0px 32px
    height: 60px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  footer:
    textColor: "{colors.ink}"
    padding: 56px 0px 32px
---

# Ramotion

## Overview

Ramotion (ramotion.com, page title "Digital Product Firm - Design Agency | Ramotion") calls itself, on its About page, "an agency that combines expertise in design, technology, and psychology" to deliver "measurable business outcomes". The About page says it has been "In the industry since" 2009, lists 70 team experts and 350+ projects, offices in San Francisco, Los Angeles and New York, and services including branding, web design, UX design, design systems and web app development. Its GitHub organisation ("UI Engineering, UI/UX Design and Front-End Development Agency") publishes iOS and Android animation components such as FoldingCell, PaperOnboarding and animated-tab-bar.

The home page is clean, light and product-focused. The capture shows a thin header — "RAMOTION" wordmark at left, "Work", "Programs ▾", "About", "Blog" centred, and a dark "Contact →" button at right — then the centred H1 "Product & brand design agency" at 92px with the subline "We help marketing & product executives build impactful brands, engage users, and drive growth." A large white showcase panel with the Volusion logo follows. "For companies with tech leverage" introduces a client logo wall (CBRE, NBCUniversal, Universal Music, Crunchbase, Redis, Cellebrite, Forward, Cypress, Flatfile, Streamlit, Filecoin, HealthTap, KinderCare, Iterable, Xsolla). The work section is a staggered two-column grid of project images with titles beneath (Upstream, Rizzle, Firefox, Clearbit, Turo, Island, Puzzle, Holidu). Then "At the intersection of product and brand" with a black Venn diagram (Brand / Mastery Area / Product), a testimonial slider ("What our partners say", Brian Beaver of Turo), a large dark "Let's talk →" button, a newsletter row with a "Subscribe" button, and a five-column footer.

## Colors

- **Canvas `#fafafa`** — the page background (5,179 of 5,401 measured background area).
- **Ink `#262626`** (`--text-black`) — headings, body and links; also the fill of every primary button. **Primary `#262626`** with **on-primary `#ffffff`** (`--text-white`).
- **Surface-subtle `#f2f2f2`** — the fill of the outlined "Subscribe" button (168 measured area units).
- **Ink-muted `#6f7984`** — a cool grey for secondary text (314 characters), measured in the footer.
- **Hairline `#cccccc`** — the main border colour (9 elements) and a light text colour (123 characters).
- **Text-blue `#2f77eb`** and **text-dark-blue `#0049ca`** — declared text colours (`--text-blue`, `--text-dark-blue`); not measured as rendered on the home page.

The CSS also declares alpha ladders on a near-black base: `--text-black-56` / `--text-gray` rgba(20, 20, 20, .56), `--text-black-32`, `--text-black-16`, `--text-black-02`, plus `--white-56`, `--white-24` and `--gray-50` rgba(219, 219, 219, .5). Colour on the page otherwise comes only from client logos and project imagery.

## Typography

One family, **Graphik** (`"Graphik Web"`), self-hosted as `Graphik-Regular-Web`, `Graphik-Medium-Web`, `Graphik-Semibold-Web` and `Graphik-Bold-Web`; measured weights are 400 (1,900 characters), 500 (184) and 600 (169). The fallback stack is `system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif`.

- **Display** — H1 92px/600, line-height 101.2px, letter-spacing -3.2px.
- **Heading** — section titles ("For companies with tech leverage") 48px/600/57.6px. Project names in the grid are 32px/600.
- **Subheading** — 24px/500/33.6px (testimonial name "Brian Beaver").
- **Body-large** — 24px/400/37.2px (the testimonial quote).
- **Body** — 16px/400/24px, the most-read size (1,412 characters).
- **Button** — 16px/400/24px with -0.4px tracking ("Contact"); 24px/400/31.2px on the large "Let's talk"; 18px/400/27px on "Subscribe".

Other measured sizes are 18px, 20px and 40px. Only the 92px display and the 16px button text carry negative tracking.

## Layout

Content spans x = 16 to 1264 at 1280px — a 16px side margin. The H1 is centred; below it, sections use a left-aligned title with a short paragraph pushed to the right half. The client logo wall is a five-column grid (`maxCardColumns` 5). The work grid is two staggered columns with images of different sizes and alignments, each followed by a 32px/600 title.

Measured gaps are 16px, 30px, 24px, 60px, 78px, 10px, 75px and 48px; paddings are 16px (14 elements), 9px, 6px, 24px, 32px, 56px (the footer top), 140px, 20px, 10px, 48px and 4px. The footer is five columns (Social, Company, Learn, Locations, Get in touch) above a bottom bar of legal links.

## Elevation & Depth

None. No box-shadow is measured. Depth comes from the dark filled buttons and the black Venn diagram against the light canvas, and from the white showcase panels on the #fafafa page. Borders are #cccccc (9 elements) or #262626 (3).

## Shapes

Measured radii: 20px (11 elements, including the "Contact" button), 8px (9), 40px (5, including "Let's talk" and "Subscribe"), 10px (3, including a project link) and 50% (1). Buttons are therefore fully rounded capsules at their heights (38px with 20px radius; 75px and 60px with 40px radius), and the smaller 8px and 10px radii sit on other elements (one 10px radius is on a project link). The Venn diagram is built from two overlapping black circles.

## Components

- **Header** — wordmark, centred nav ("Work", "Programs ▾", "About", "Blog") at 16px/400 with -0.4px tracking, and the "Contact" button.
- **Primary button** — "Contact": #262626 fill, 1px #262626 border, white 16px/400 text with -0.4px tracking, 20px radius, 38px tall, with an arrow. On hover the measured label text reads "Contact Contact" (the label is duplicated in the DOM); colours do not change.
- **Large button** — "Let's talk": #262626 fill, 2px #262626 border, white 24px/400/31.2px text, 40px radius, 75px tall, 340px wide, centred with an arrow.
- **Outlined button** — "Subscribe": #f2f2f2 fill, 1px #262626 border, #262626 18px/400/27px text, 40px radius, 0px 32px padding, 60px tall.
- **Logo wall** — client logos in their own colours in a five-column grid.
- **Project tile** — image with a 32px/600 title beneath.
- **Testimonial** — client logo in an outlined box, 24px quote, avatar, name (24px/500) and role, with "← 1/11 →" pagination.
- **Footer** — newsletter row, five link columns in 16px, legal bar.

## Design System Architecture

No public Ramotion design system for its own site or brand guideline was found. The About page (https://www.ramotion.com/about/) links to a design-systems service page but no brand or press resources; the GitHub organisation https://github.com/Ramotion hosts iOS and Android animation components (`folding-cell`, `paper-onboarding`, `animated-tab-bar`, `circle-menu`, `fluid-slider`) rather than a token package.

The de-facto system is in the site's CSS: one font family in four weights, a small set of text-colour variables (`--text-black`, `--text-white`, `--text-blue`, `--text-dark-blue`) with alpha ladders built on rgba(20, 20, 20, …), and the measured radius set (8/10/20/40px). Font assets carry hashed file names (`Graphik-Regular-Web.DWJkR4O-.woff`). Breakpoints are mostly desktop-first: `(max-width:1024px)` (139 rules), `(max-width:767px)` (66), `(max-width:1600px)`, `(max-width:1580px)`, plus `min-width` 768, 1024, 1280 and 1600px.

## Do's and Don'ts

**Do**
- Use a #fafafa canvas, #262626 text and Graphik at 400/500/600.
- Centre one big 92px/600 headline with -3.2px tracking.
- Make buttons dark #262626 capsules with white text and an arrow; scale the radius with the height (20px at 38px, 40px at 60–75px).
- Use #6f7984 for secondary text and #cccccc for hairlines.
- Show work as a staggered two-column grid with titles below images.

**Don't**
- Don't add colour accents to chrome; colour comes from client work.
- Don't add drop shadows.
- Don't use the declared blues as primary actions; they did not render on the home page.
- Don't track body text; only the display and button text are tightened.

## Responsive Behavior

Measured at 390px wide:

- The H1 becomes 48px/600/52.8px, keeping -3.2px tracking.
- Section titles become 32px/600/38.4px.
- The testimonial body becomes 16px/24px; the most-read mobile sizes are 16px and 14px.
- The primary CTA shown is "Let's talk" (#262626 fill, white text).
- 1 header link is visible and no menu toggle was detected.
- Content spans x = 16 to 374; `maxCardColumns` is 2.

The main breakpoints are 1024px and 767/768px. Tablet layouts were not measured.

## Iteration Guide

1. Set #fafafa background, #262626 text and Graphik with a system fallback.
2. Centre a 92px/600/101.2px headline with -3.2px tracking and a 16px subline.
3. Use #262626 capsule buttons: 38px/20px radius in the header, 75px/40px radius for the closing CTA.
4. Lay out sections with a left title and a right-hand paragraph; keep 16px side margins.
5. Show clients in a five-column logo grid and work in a staggered two-column grid with 32px/600 titles.
6. Use #f2f2f2 + 1px #262626 border for secondary actions like "Subscribe".
7. On mobile, drop the headline to 48px and section titles to 32px.
