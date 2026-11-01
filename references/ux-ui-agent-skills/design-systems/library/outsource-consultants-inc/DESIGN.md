---
version: alpha
name: "Outsource Consultants, Inc."
category: "Architecture & Interiors"
description: "Outsource Consultants, Inc., a New York building-code and permit consultancy, as built at oci.madebybuzzworthy.com: cobalt #1925aa blocks against a #e8e6e0 paper page, PP Neue Montreal at 142.222px, GT America Mono labels at 10.6667px, and strictly square corners."
colors:
  canvas: "#1925aa"
  page-body: "#e8e6e0"
  ink: "#e8e6e0"
  primary: "#1925aa"
  on-primary: "#e8e6e0"
  surface-white: "#ffffff"
  ink-black: "#000000"
typography:
  display:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 142.222px
    fontWeight: 500
    lineHeight: 133.333px
  display-mobile:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 49.2234px
    fontWeight: 500
    lineHeight: 59.068px
  subheading:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 26.6666px
    fontWeight: 400
    lineHeight: 26.6666px
  body:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 40.8888px
    fontWeight: 400
    lineHeight: 40.8888px
  button:
    fontFamily: >-
      ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color
      Emoji"
    fontSize: 14.2222px
    fontWeight: 400
    lineHeight: 21.3333px
  link:
    fontFamily: "\"GT America Mono\", sans-serif"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 10.6667px
    textTransform: uppercase
  button-secondary:
    fontFamily: "\"GT America Mono\", sans-serif"
    fontSize: 12.4444px
    fontWeight: 400
    lineHeight: 12.4444px
    letterSpacing: 0.248889px
    textTransform: uppercase
  input:
    fontFamily: "\"PP Neue Montreal\", sans-serif"
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 10.6667px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 8.4px
  s3: 8.89px
  s4: 10.67px
  s5: 13.33px
  s6: 15.11px
  s7: 16px
  s8: 16.89px
  s9: 17.78px
  s10: 19.56px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8.39999px 0px 8.39999px 16.8889px
    height: 43px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    height: 59px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.page-body}"
    rounded: "{rounded.none}"
    padding: 0px 13.3333px
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8.39999px 0px 8.39999px 16.8889px
  text-input:
    textColor: "{colors.page-body}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 12px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.none}"
    padding: 17.7778px 13.3333px 23.1111px
---

## Overview

This is the page at https://oci.madebybuzzworthy.com/ (title "Outsource Consultants | Experts in Municipal Building Codes, Zoning & Permits - Outsource Consultants, Inc."), a build of the Outsource Consultants, Inc. website hosted on the design studio Buzzworthy's domain; the footer credit reads "Made by buzzworthy" with a link to https://buzzworthystudio.com/. The content is the consultancy's own: a New York City firm with "over 50 in-house consultants" and "33 years of experience" that helps clients with building codes, zoning and permits, partnered with Outsource Special Inspections, Inc. The page is 1280px wide and 6924px tall.

The nav lists About, Services, Projects, Clients, then Culture & Careers, Blog and Contact. The sections run: a hero ("Answering all of your building codes needs." under the huge name), an intro paragraph about feasibility reviews, CCD1s, amendments, fire safety, land use, landmark coordination and violation resolution, "Our Services" (an accordion of Construction Expediting, Sign-Offs & Project Closeouts, Class 1 Special Inspections, Violation Resolution & Building Compliance, Job Approvals, Code & Zoning Consultation), a process block ("Here at every step": Strategy, Communication, Navigation, Results), "Most Recent Projects" (Dolce & Gabbana Boutique, Tiffany Flagship, Dream Hotel), Testimonials, "Latest News" and "Stay in touch". The voice is plain, reassuring and procedural, with uppercase monospace micro-copy for secondary statements ("FROM THE FIRST IDEA TO SIGN-OFF, OUTSOURCE IS BY YOUR SIDE...").

The capture shows a halftone/dithered architectural photograph in cobalt and lavender behind a white wordmark-size title "Outsource Consultants, Inc.", a small logo chip and a pen-icon square at the top corners, thin vertical hairlines dividing the nav columns, then a solid cobalt block with large white paragraph text, then a paper-coloured section with the heading "Our Services" in cobalt and a ruled accordion.

## Colors

Measured background areas: #1925aa (weight 1970), #ffffff (1464), #e8e6e0 (331) and #0d1355 (1). Text colours by characters: #1925aa (1871), #e8e6e0 (1007), #000000 (378), #ffffff (101). Border colours: #1925aa (19 uses) and #e8e6e0 (1).

- **Canvas / primary #1925aa**: cobalt, the site's `--colors-blue`. Used for the large blocks, accordion text, rules and button fills.
- **Page-body / ink #e8e6e0**: warm paper; it is both the lower-page ground and the text colour on cobalt.
- **On-primary #e8e6e0**: text on cobalt buttons.
- **Surface-white #ffffff**: the hero title colour and some panels.
- **Ink-black #000000**: the footer text and the body role colour.

The CSS also defines `--colors-error` #c41230 and red oklch ramps (`--colors-red-300`, `--colors-red-800`); they were not measured on rendered content. The palette is effectively two colours plus white: cobalt and paper, used in inverse pairs.

## Typography

Three families: GT America Mono (1925 characters; labels and micro-copy), PP Neue Montreal (976; display and body, weights 400 and 500) and the system sans stack (456; the nav and button text). Weight 400 covers 3276 characters; 500 covers 81.

- **Display** PP Neue Montreal 142.222px / 133.333px, weight 500: "Outsource" in the hero (mobile 49.2234px / 59.068px).
- **Body** 40.8888px / 40.8888px, weight 400: the large intro paragraph (396 characters).
- **Subheading** 26.6666px / 26.6666px, weight 400: accordion titles.
- **Button / nav** system sans 14.2222px / 21.3333px, weight 400.
- **Link** GT America Mono 10.6667px / 10.6667px uppercase (1591 characters, the dominant size); **button-secondary** GT America Mono 12.4444px with +0.248889px tracking.
- **Input** PP Neue Montreal 10.6667px.

Mobile measured an h2 "Here at every step" at 75.7282px / 70.9952px, weight 500. Other sizes: 16px (278), 26.6666px (206), 8.88888px (81), 21.3333px (41). Large text is untracked and tight in leading (133.333px on 142.222px); mono text is uppercase with small positive tracking.

## Layout

The layout is built on a visible column grid: in the capture, vertical hairlines at about the half-width divide a left title column from a right content column ("Our" at left, "Services" and the accordion at right). The hero stacks the title at the lower left over the photograph; small captions sit in narrow mono columns. Measured gaps: 13.3333px (15 uses), 17.7778px, 53.3333px and 58.3111px. Measured paddings: 13.3333px (21 uses), 15.1111px, 31.1111px, 16px, 10.6667px, 22.2222px, 40.8888px, 44.4444px. The nav has padding 0px 13.3333px and the footer 17.7778px 13.3333px 23.1111px. The CSS defines `--spacing` as .0625rem.

## Elevation & Depth

No box shadows were measured (`boxShadows` is empty). Depth comes from solid colour planes (cobalt versus paper), the halftone photograph and 1px rules in cobalt. The design is flat, graphic and print-like.

## Shapes

All corners are square: the only measured radius is 50% (4 uses, circular marks such as the logo glyph). Tokens: none 0px and pill 9999px. Buttons (43px and 59px high) and the nav have 0px radius. The CSS declares `--radius-DEFAULT` .25rem, which was not used on the measured components.

## Components

- **button-primary / nav-link**: cobalt #1925aa fill, #e8e6e0 text, system sans 14.2222px, padding 8.39999px 0px 8.39999px 16.8889px, height 43px, radius 0.
- **button-secondary**: cobalt fill with a #1925aa border, mono uppercase 12.4444px, height 59px; bracketed labels such as "[ LEARN MORE → ]" in the capture.
- **link**: cobalt mono uppercase 10.6667px.
- **nav**: hairline-separated link columns in paper-coloured mono text over the hero (padding 0px 13.3333px).
- **Accordion**: service rows with a cobalt hairline above each, a 26.6666px title and a plus or close icon at right; the open row shows a mono description and a Learn More link.
- **text-input**: paper text, 10.6667px, the newsletter field.
- **footer**: cobalt background, black text, padding 17.7778px 13.3333px 23.1111px; Privacy Policy and Terms and Conditions links, Facebook, Instagram, LinkedIn and X.

Content blocks on the page follow a repeated pattern of a large heading and a ruled list. The service accordion has six rows, the process block has four named steps (Strategy, Communication, Navigation, Results), the project list shows three projects, and the news block shows four headlines. Contact details sit in the footer region: a New York address at 237 West 35th Street, Suite 12A, a telephone number and an email address, all in the same mono label style as the rest of the secondary text. Each list ends with a "View All" link (services, projects, news), which is the only repeated call to action besides the per-service Learn More.

## Design System Architecture

No public design system or brand-guideline page is linked; the page credits Buzzworthy (https://buzzworthystudio.com/). The CSS variables follow an atomic-utility stack (`--un-text-opacity`, `--un-bg-opacity`, `--un-border-opacity`, `--colors-blue`, `--colors-error`, `--font-pp-neue` "PP Neue Montreal,sans-serif", `--font-sans`, `--font-mono`, `--tracking-normal`, `--spacing`, `--radius-DEFAULT`, `--ease-DEFAULT` cubic-bezier(.4,0,.2,1)). The brand blue is stored as a single `--colors-blue` variable, and the type system pairs a neo-grotesque with a mono. No component library name was confirmed from the page.

## Do's and Don'ts

- Do use cobalt #1925aa and paper #e8e6e0 as inverse pairs.
- Do set display at 142.222px weight 500 and labels in uppercase GT America Mono.
- Do divide space with 1px cobalt rules and a visible column grid.
- Do keep every control square-cornered.
- Don't add shadows or gradients; none were measured.
- Don't use red from the CSS ramps for decoration; it was not measured on screen.
- Don't use more than two colours plus white.
- Don't put body copy in mono; mono is for labels and captions.

## Responsive Behavior

The 390px pass measured the h1 "Outsource Consultants, Inc." at 49.2234px / 59.068px (362px wide), an h2 "Here at every step" at 75.7282px / 70.9952px in #1925aa, and body text in #e8e6e0 PP Neue Montreal. Column, nav and accordion behaviour at mobile width were not measured.

## Iteration Guide

1. Start with #1925aa, #e8e6e0 and white.
2. Set hero titles in PP Neue Montreal 500 at 142.222px with leading below the font size; put captions in uppercase GT America Mono at 10.6667px.
3. Use a two-column split with a 1px rule; build lists as ruled accordions.
4. Keep radius at 0px and avoid shadows.
5. Measure other pages with the extractor (`--slug=outsource-consultants-inc--page --url=<url> --force --no-motion`) before adding tokens; hover styles other than the nav links were not measured.
