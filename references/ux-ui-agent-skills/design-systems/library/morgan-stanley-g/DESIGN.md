---
version: alpha
name: Morgan Stanley
category: "Banking & Insurance"
description: "Morgan Stanley corporate site: proprietary MS Gloriola II semibold headlines (40px, -1.45px tracking) in #333330 over Karla body text, square #187aba buttons with 14px uppercase karlabold labels tracked 1.1px, outlined #187aba variants, #f7f7f7 and #f2f2f2 bands, 10px-radius inputs with a 2px #bdbdbd border and coloured left-edge section rules."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#4c4c4c"
  primary: "#187aba"
  on-primary: "#ffffff"
  surface-footer: "#f2f2f2"
  surface-dark: "#333333"
  ink-heading: "#333330"
  ink-strong: "#222222"
  ink-black: "#000000"
  ink-muted: "#767676"
  hairline: "#cccccc"
  text-input-border: "#bdbdbd"
  rule-blue: "#0f8ec7"
  rule-purple: "#672cb4"
typography:
  display:
    fontFamily: ms_gloriola_ii_std_semibold, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 44px
    letterSpacing: "-1.45px"
  display-mobile:
    fontFamily: ms_gloriola_ii_std_semibold, sans-serif
    fontSize: 26px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: "-0.91px"
  heading:
    fontFamily: ms_gloriola_ii_std_semibold, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
    letterSpacing: "-0.45px"
  quote:
    fontFamily: ms_gloriola_ii_stdlight, sans-serif
    fontSize: 30px
    fontWeight: 300
  body:
    fontFamily: karlaregular, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: "-0.2px"
  button:
    fontFamily: karlabold, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 1.1px
    textTransform: uppercase
  input:
    fontFamily: karlaregular, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 10px
  none: 0px
spacing:
  s1: 1px
  s2: 5px
  s3: 5.6px
  s4: 7px
  s5: 10px
  s6: 11px
  s7: 14px
  s8: 15px
  s9: 18px
  s10: 20px
  s11: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px
    height: 72px
    borderColor: "{colors.primary}"
  button-subscribe:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 22px 24px
    height: 64px
    borderColor: "{colors.primary}"
  button-outlined:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 20px
    height: 72px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
  side-menu:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.on-primary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 0px 20px
    height: 64px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.surface-dark}"
    rounded: "{rounded.none}"
---

# Morgan Stanley

## Overview

The measured site is the Morgan Stanley global corporate home page at https://www.morganstanley.com/ (title "Morgan Stanley | Global Leader in Financial Services"), 5,063px tall at 1280px. It is an institutional, content-led page rather than a product funnel: the header carries a small uppercase utility row (INVESTOR RELATIONS, MEDIA RELATIONS, ALUMNI, CLIENT LOGIN) above the wordmark and four main sections (Our Insights, What We Do, About Us, Careers). The hero is a wide photograph of the firm's glass headquarters with its name on the facade and a row of story teasers overlaid at the bottom ("Morgan Stanley Reports Third Quarter 2026", "The Missing Piece in Latin America's Bull Case", "Thermo Fisher: The Company Behind the Science"), each with a small uppercase eyebrow such as THOUGHTS ON THE MARKET or EXCEPTIONAL LEADERS.

The rest of the page is a stack of editorial modules: "What We Do" with a dark #333333 business-line menu beside a feature image, "The Morgan Stanley Blueprint" on a #f7f7f7 band with two square buttons, a "Recent Insights" carousel, a newsletter sign-up for the Morgan Stanley Institute, "Discover Who We Are & Join Us" with a large employee quote, "More Insights" in a four-column grid, and a #f2f2f2 footer. The art direction is corporate and clean: business photography, a navy abstract graphic, white space, and thin coloured vertical rules on the left edge of each section (blue, green and purple in the capture). The voice is measured and declarative ("At Morgan Stanley, clients come first.", "we lead with exceptional ideas").

## Colors

- **canvas #ffffff** — the main page background.
- **page-largest #f7f7f7** — the largest measured background area, used for the Blueprint and newsletter bands.
- **ink #4c4c4c** — the most-read text colour (body and form text).
- **ink-heading #333330** — section headlines ("What We Do", "Recent Insights"); **surface-dark #333333** is the business-line side menu and footer text colour, and also appears on some headlines.
- **ink-strong #222222** — the large employee quote; **ink-black #000000** the header text; **ink-muted #767676** small meta text.
- **primary #187aba** — the single action colour: filled buttons, button borders, eyebrow labels and inline links. **on-primary #ffffff** for labels on it.
- **surface-footer #f2f2f2** — the footer.
- **hairline #cccccc** and **text-input-border #bdbdbd** — dividers and the 2px input border.
- **rule-blue #0f8ec7** — measured as an inset box-shadow `rgb(15, 142, 199) 10px 0px 0px 0px inset`, the coloured left-edge rule on a section. **rule-purple #672cb4** — a measured border colour, the frame around the employee quote and its section rule.

No other accent colours were measured. Green section rules are visible in the capture but their value was not isolated in the extraction, so no green token is listed.

## Typography

Two proprietary families, loaded under internal names:

- **MS Gloriola II** (`ms_gloriola_ii_std_semibold`, `ms_gloriola_ii_stdregular`, `ms_gloriola_ii_stdlight`; the CSS corpus also declares display-thin and bold cuts) for headings. **display** 40px / 500 / 44px with -1.45px tracking; **heading** 20px / 500 / 24px with -0.45px for overlay teasers; 30px / 500 for secondary titles ("Shake Shack: Hospitality at Scale"); **quote** 30px / 300 in the light cut for pull quotes.
- **Karla** (`karlaregular`, `karlabold`, `karlaitalic`) for body, UI and buttons. **body** as measured is the 12px / 400 / 16px, -0.2px small print under the newsletter form; running copy is set at 16px and 18px (the two most frequent sizes). **button** 14px / 700 uppercase with 1.1px tracking (`--letter-spacing-cta: 1.1px`). **input** 18px / 400.

Headlines use tight negative tracking at every size (‑1.45px at 40px, ‑0.73px at 30px and 20px). Uppercase is reserved for eyebrows, the utility nav, the side menu and buttons. The site variables define a heading scale `--font-size-heading-xs` 17px, `-s` 18px, `-l` 24px, `-xl` 30px, `-xxxl` 54px and `--font-weight-heading: 500`, with separate `-zh` variants and Source Han Sans families for Chinese and Japanese pages.

**Substitutes:** Gloriola is a commercial typeface (licensed here in a custom "MS" build). Karla is an open-source Google Font, so the body family can be used as-is.

## Layout

Content sits within x 40 to x 1240 at 1280px, a 1200px column with 40px margins (`header` width 1200). The header is 103px tall with two rows. Section headings are left-aligned at x 40, followed by a one- or two-line intro paragraph and an inline "See All Insights" or "Explore Morgan Stanley" link in #187aba. Modules use asymmetrical two-column layouts (text left, image right) and a four-column card grid for insights, with up to 6 columns detected in the header area. Insight cards are image, uppercase blue eyebrow, then a 16–20px bold title with no card container. The section rhythm is a white band, a full-width module, then a light grey band; measured paddings include 20, 30, 40 and 60px, and the only measured gap is 15px.

## Elevation & Depth

The page is flat. No drop shadows were measured; the only box-shadow is the 10px blue inset used as a section rule. Depth comes from contrast between white, #f7f7f7 and #f2f2f2 bands, the dark #333333 side menu, and photography. The pull-quote card uses a thin #672cb4 border instead of a shadow. The hero teasers use a dark translucent panel over the photograph.

## Shapes

Square by default: buttons, side menu, cards and images are all 0px. The only measured radius is 10px, on the newsletter email and country fields. Rules and borders are the main shape language: 2px #187aba button outlines, 2px #bdbdbd input borders, thick coloured left-edge rules on sections and a thin purple frame around quotes.

## Components

- **button-primary** — #187aba fill, 2px #187aba border, white 14px karlabold uppercase with 1.1px tracking, 0px radius, 20px padding, 72px tall ("WATCH CLIENT SUCCESS STORIES").
- **button-outlined** — transparent with a 2px #187aba border and #187aba label, same metrics ("EXPLORE FOUNDER SOLUTIONS").
- **button-subscribe** — #187aba fill, 1px border, 22px 24px padding, 64px tall, aligned with the form fields.
- **text-input** — white, 2px solid #bdbdbd, 10px radius, 64px tall, 0 20px padding, 18px #4c4c4c text with "(Required)" in the placeholder.
- **side-menu** — the What We Do business list: #333333 panel with white uppercase entries; hover keeps the same rgb(51, 51, 51) background (measured).
- **nav** — #000000 header text; utility links underline on hover (measured).
- **footer** — #f2f2f2 background, #333333 text, social icons centred above a row of links (Disclosures, Investor Relations, Corporate Governance, Newsroom, Careers).

## Design System Architecture

No public Morgan Stanley design system or brand guideline site is cited here: the about page could not be opened (connection timeout, recorded in SOURCES.json) and no design-system link is visible in the captured header or footer. The de-facto system is visible in the shipped CSS of https://www.morganstanley.com/ as a small set of custom properties: font families (`--font-family-base: karlaregular`, `--font-family-bold: karlabold`, `--font-family-italics`, `--font-family-light: ms_gloriola_ii_stdlight`, `--font-family-heading-regular`), a named size scale (`--font-size-s` 14px, `--font-size-heading-xs` through `-xxxl`) that headings map onto (`--font-size-h1: var(--font-size-heading-xl)`, `--font-size-h2: var(--font-size-heading-l)`), CTA tokens (`--font-size-cta`, `--letter-spacing-cta`), and parallel `-zh` tokens with Source Han Sans for Chinese and Japanese locales. Colours are not tokenised in root variables; they are hard-coded in component CSS.

## Do's and Don'ts

- Do use #187aba as the only action colour, for filled buttons, outlines, eyebrows and links.
- Do keep buttons square and tall (64–72px) with uppercase, tracked karlabold labels.
- Do set headlines in Gloriola semibold with negative tracking in #333330.
- Do mark sections with a coloured left-edge rule.
- Do pair each insight with a blue uppercase eyebrow naming its category.
- Don't round buttons or cards; only form fields take the 10px radius.
- Don't add drop shadows.
- Don't use the light Gloriola cut for anything but pull quotes.
- Don't introduce additional brand accents beyond the measured blue and purple rules.

## Responsive Behavior

The 390px mobile pass measured the section headline at 26px / 500 / 30px with -0.91px tracking (from 40px); the primary button stays #187aba with white 14px uppercase text but measures 58px tall (from 72px) with 20px padding; small print stays 12px / 16px. The mobile header is 60px tall with 3 header links visible and a menu toggle. Mobile font sizes include 22px and 11px, which do not appear on desktop. The mobile page keeps the #f7f7f7 newsletter band and ends in a #f2f2f2 footer band 587px tall. Stylesheet breakpoints are max-width 767px, max-width 1024px / 1023px and min-width 768px / 1024px. The open state of the mobile menu was not measured.

## Iteration Guide

1. Lay out a 1200px column with 40px margins on #ffffff, alternating with #f7f7f7 bands.
2. Start each section with a 40px Gloriola semibold headline (26px on phones) and a short intro in Karla.
3. Use `button-primary` for the main action and `button-outlined` beside it for the secondary.
4. Label every story with a 14px uppercase #187aba eyebrow.
5. Build forms with 64px fields, 2px #bdbdbd borders and 10px radius, and a square `button-subscribe`.
6. Use #333333 panels for dense navigational lists inside content.
7. Keep everything flat; use left-edge colour rules for section emphasis.
8. Re-measure before adding new colours; colours are hard-coded rather than tokenised.
