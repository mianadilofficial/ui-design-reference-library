---
version: alpha
name: Consumer Financial Protection Bureau
category: "Design Systems"
description: "The CFPB site (consumerfinance.gov) is built on the bureau's open-source CFPB Design System: a white canvas (#ffffff) with pale gray bands (#f7f8f9), near-black ink (#101820), Pacific blue (#0072ce) for links and the standard button, and the CFPB green (#20aa3f) reserved for the thick rules under the header and above the footer. Type is Source Sans 3 Variable at 16px/22px body and 34px/42.5px semibold display, with a restrained 4px radius."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f8f9"
  ink: "#101820"
  primary: "#0072ce"
  on-primary: "#ffffff"
  ink-gray-dark: "#43484e"
  ink-black: "#000000"
  hairline: "#b4b5b6"
  footer-border: "#20aa3f"
typography:
  display:
    fontFamily: "\"Source Sans 3 Variable\", arial, sans-serif"
    fontSize: 34px
    fontWeight: 600
    lineHeight: 42.5px
  display-mobile:
    fontFamily: "\"Source Sans 3 Variable\", arial, sans-serif"
    fontSize: 26px
    fontWeight: 600
    lineHeight: 32.5px
  heading:
    fontFamily: "\"Source Sans 3 Variable\", arial, sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 27.5px
  body:
    fontFamily: "\"Source Sans 3 Variable\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  nav:
    fontFamily: "\"Source Sans 3 Variable\", arial, sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.5px
  link:
    fontFamily: "\"Source Sans 3 Variable\", arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22px
rounded:
  xs: 4px
spacing:
  s1: 5px
  s2: 6px
  s3: 7.5px
  s4: 8px
  s5: 10px
  s6: 11.25px
  s7: 13px
  s8: 14px
  s9: 15px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 15px 26px 15px 15px
    height: 53px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 45px 0px 60px
    borderColor: "{colors.footer-border}"
---

## Overview

The captured page is the home page of the Consumer Financial Protection Bureau (consumerfinance.gov). It looks like a modern federal-government site, plain, dense with text, and strongly structured. A thin gray strip at the top carries the US flag and "An official website of the United States government" at left and a phone number at right. The header below shows the green-and-white "cfpb" logo with "Consumer Financial Protection Bureau", a Search link and a "Submit a Complaint" link, then a row of dropdown topics (Consumer Education, Rules & Policy, Enforcement, Supervision, Data & Research, About Us) closed by a thick green rule.

The first screen is a bordered two-part hero. On the left a 34px semibold mission statement ("The CFPB works to create and support innovative and resilient consumer financial markets...") sits on white; on the right a photograph of an American flag against sunlight and trees. Beneath it a pale gray strip carries two short link prompts. The page then moves to three text columns (Our deregulatory agenda, Supervision, Enforcement), a centred "Help when you need it" heading over three bordered tiles with photographs (servicemembers, older Americans, a dollar bill), and a gray footer with a green top rule, link groups, social icons, and legal links.

The tone is institutional and literal. Headings state the topic ("Supervision", "Enforcement"), links read like sentences ("Read the 2025 report", "Learn about CFPB supervision"), and every link is underlined in blue, with small icons marking external links and documents.

## Colors

- **Canvas (#ffffff)** is the page background and the card and hero fill.
- **Gray band (#f7f8f9)** is the largest measured surface after white: the accomplishments strip, the audience tiles and the footer. In the design system it is the lightest gray.
- **Ink (#101820)** is the near-black for type and icons and the most-read text colour. The design system lists this value as "Black", for type and icons.
- **Primary Pacific blue (#0072ce)** colours links, the phone number, the Search and complaint links, and the standard button fill (the stylesheet sets `--btn-bg` to Pacific and `--btn-text` to white).
- **CFPB green (#20aa3f)** is the core brand colour in the design system and appears here only as the rules under the header and above the footer, and in the logo. It is deliberately not used for text or actions.
- **Dark gray (#43484e)** and **pure black (#000000)** appear in small amounts (social icon backgrounds and some text).
- **Hairline gray (#b4b5b6)** draws tile outlines and dividers.

The design-system colour page documents the same hexes: CFPB Green #20aa3f, Black #101820, Pacific #0072ce, plus Navy, Teal, Purple, Red, Gold and Neutral secondaries and graded tints. It advises against relying on colour alone for meaning and reserves green for branding because of red-green colour blindness.

## Typography

One family throughout: **Source Sans 3 Variable** (loaded as a 200 to 900 variable font) with arial and sans-serif fallbacks. The home page measures the H1 at 34px/42.5px, weight 600 (26px/32.5px on mobile); section headings at 22px/27.5px weight 400 (the accomplishments strip) and larger bold section titles in the columns; body at 16px/22px weight 400; links at 16px weight 500; and the phone number and small utility text at 12px/16.5px. The stylesheet's stack variable is `--font-stack-branded`, which falls back to `system-ui, sans-serif` when the branded font is not set. The mix of weights 400, 500 and 600 does the hierarchy work rather than size jumps.

## Layout

A centred container with generous side margins, wide enough for a three-column text row and three equal tiles. The hero is a two-up split with the headline on the left and the image flush right inside a 1px outline. Section spacing is large (measured paddings of 30px and 60px, with 45px inside the footer) while component spacing is tight, built from 5px, 7.5px, 8px, 10px, 11.25px, 13px, 14px, 15px and 20px steps. Rules (a thin gray divider and the thick green bar) separate regions: header from content, content from footer.

## Elevation & Depth

The design is flat. Tiles are marked by a light outline and a gray fill, not shadows; the capture shows a slightly heavier bottom edge on the audience tiles but no measured box shadow. Dividers and the green rules carry the structure. Do not add drop shadows or blur.

## Shapes

Corners are barely rounded: 4px, matching the `.25em` radius in the shipped button rule. The hero frame, tiles and photographs are square-cornered rectangles, and icons (flag, search, social, external-link marks) are small and geometric. Photographs are cropped to simple rectangles.

## Components

- **Header and mega-menu.** White bar with logo left, Search and "Submit a Complaint" at right, a six-item navigation row with chevron dropdowns (class family `o-mega-menu__content-*`), closed by the green rule.
- **Link.** Pacific blue, weight 500, underlined, optional icon (`a-link--jump`, external and document icons).
- **Button.** The design system's `a-btn` is Pacific fill, white text, 16px weight 500, 4px radius. The home page measured a secondary text-style button (53px tall, ink text, padding 15px 26px 15px 15px).
- **Hero.** Bordered split with 34px semibold headline and a photograph.
- **Callout strip.** Gray band with a 22px heading and one link under each.
- **Audience tile.** White-on-gray bordered card with a photograph and a centred 22px blue link.
- **Footer.** Gray, green top rule, link row at 16px, round-square social icons in dark gray, legal links in two columns, repeated official-site banner.

## Design System Architecture

The site is built on the bureau's own open-source system, the [CFPB Design System](https://cfpb.github.io/design-system), whose page describes it as an open-source resource for CFPB teams with Foundation (colour, grid, typography), Components, Patterns, Pages, development utilities and guidelines, released under CC0 1.0. Source is in [github.com/cfpb/design-system](https://github.com/cfpb/design-system) (npm package `@cfpb/cfpb-design-system`, tokens generated with Style Dictionary).

consumerfinance.gov demonstrably uses it: the home page loads `/static/css/main.*.css` whose markup carries the system's atomic/molecule/organism class prefixes (`a-link`, `a-btn`, `m-list__item`, `o-mega-menu__content-*`) and custom properties that match the documented palette, `--pacific: #0072ce`, `--green: #20aa3f`, `--black: #101820`, `--gray-5: #f7f8f9`, along with `--btn-bg`, `--link-text` and `--font-stack-branded`. The slug name mentions USWDS, but no USWDS values are taken here.

## Do's and Don'ts

- Do use ink #101820 on white or #f7f8f9, and Pacific #0072ce for every link and the standard button.
- Do underline links and keep link text descriptive.
- Do reserve CFPB green (#20aa3f) for rules and the logo.
- Do keep corners to 4px and surfaces flat.
- Don't use green for actions, text, or status.
- Don't rely on colour alone to convey meaning.
- Don't add shadows, gradients or large radii.
- Don't introduce a second typeface.

## Responsive Behavior

The system is documented as mobile-first. On the 390px capture the H1 reduces from 34px/42.5px to 26px/32.5px. Only the type reduction was measured at 390px. Touch targets stay large: the measured secondary button is 53px tall.

## Iteration Guide

1. Start with white (#ffffff), pale gray (#f7f8f9) bands, and ink #101820.
2. Set everything in Source Sans 3 Variable: 34px/42.5px at 600, 22px/27.5px at 400, body 16px/22px, links 16px at 500.
3. Make links and the primary button Pacific #0072ce; underline links.
4. Use a 4px radius, hairline #b4b5b6 outlines, and no shadows.
5. Add the green (#20aa3f) rule only to separate header and footer.
6. Space with the 5px to 20px step list and larger 30px to 60px section gaps.
