---
version: alpha
name: Just Eat Takeaway.com
category: "Design Systems"
description: "The corporate and investor site of Just Eat Takeaway.com, set in JET Sans Digital (800-weight 48px display, 16px body) on a warm #f5f3f1 canvas with white #ffffff panels, ink #242e30, a near-black #141c1f pill button with 50px radius, and the brand orange #ff8000 reserved for hero imagery, maps and the logo."
colors:
  canvas: "#f5f3f1"
  page-body: "#ffffff"
  ink: "#242e30"
  primary: "#141c1f"
  on-primary: "#ffffff"
  surface-warm: "#efedea"
  brand-orange: "#ff8000"
  surface-pale: "#f1f2f2"
  ink-soft: "#333333"
  orange-text: "#c05102"
  hairline: "#262626"
typography:
  display:
    fontFamily: JETSansDigital, monospace
    fontSize: 48px
    fontWeight: 800
    lineHeight: 56px
  heading:
    fontFamily: "\"Jet Sans\""
    fontSize: 36px
    fontWeight: 800
    lineHeight: 45.972px
  subheading:
    fontFamily: JETSansDigital, monospace
    fontSize: 28px
    fontWeight: 800
    lineHeight: 34px
  body:
    fontFamily: JETSansDigital, monospace
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"Jet Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
  link:
    fontFamily: "\"Jet Sans\""
    fontSize: 14px
    fontWeight: 700
    lineHeight: 18px
rounded:
  xs: 7px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 13px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 17px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 13px 23px
    height: 46px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 13px 23px
    height: 46px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.orange-text}"
  nav-link:
    textColor: "{colors.orange-text}"
    typography: "{typography.body}"
    padding: 15px 20px
  footer:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
---

## Overview

This entry documents justeattakeaway.com, the corporate and investor-relations site of Just Eat Takeaway.com (page title "Just Eat Takeaway.com - Investor Relations"). It is not the consumer ordering app; the capture shows a corporate home page whose hero reads "Empowering everyday convenience", a company description with bold facts ("342,000 partners in 14 countries"), a dark pill button "Our strategy", and a large rounded orange panel with a cut-out sushi photograph on stacked orange blocks. The top bar carries the orange Just Eat Takeaway.com logo, a menu (Home, About, News, Investors, Governance, People and planet, Contact) with an orange underline on the current item, and a pale rounded "Place an order" button that leads to the consumer product.

Below the hero a warm light-grey band shows a photograph of a smiling woman holding a paper bag of flowers and groceries beside a two-column list of audience links (food, groceries and more; business; couriers; partners; careers), each with a line icon and a small bold link with a chevron. "Our markets" uses a map-style illustration where covered countries are filled orange against pale grey globes, with a country panel listing quick actions. "Latest news" shows four photo cards with dates, bold titles and short summaries. The tone is warm, confident and plain: short headline, one fact-heavy sentence, one button.

A dark cookie banner covers the lower hero in the capture, with a "Manage preferences" link and two orange pill buttons ("Necessary only", "Accept all"). The extractor first picked these as the primary call to action; they are consent chrome and are not documented as brand buttons. The real primary action is the dark "Our strategy" pill.

## Colors

- **Canvas** `#f5f3f1` is the warm off-white page background; **page-body** `#ffffff` is the white used for content panels and header; **surface-warm** `#efedea` is a slightly darker warm panel and the footer fill; `#f1f2f2` is a pale grey surface.
- **Ink** `#242e30` is the main text colour (a very dark green-grey), `#333333` a soft secondary, and `#262626` a divider/border tone.
- **Primary** `#141c1f` is the fill of the main button ("Our strategy"), with white text; a second dark button ("Sign up") uses `#242e30`.
- **Brand orange** `#ff8000` is the hero panel, map fills and illustration colour (the stylesheet defines it as `--dt-color-orange-30`). The PIE design system documentation separates a Brand Orange for non-interactive elements such as logos, illustration and navigation bars from a Product Orange for interactive components, for contrast reasons.
- **Orange text** `#c05102` is the darker orange used for nav text on light backgrounds (the stylesheet also defines `--dt-color-orange-dark-hc` as `#a33100`).

The cookie buttons use a slightly different orange (`#f36805`); it is only measured on that banner here and is not part of this palette.

## Typography

The brand typeface is JET Sans Digital (the PIE typography page names JET Sans Digital as the primary typeface, Arial as fallback and PT Mono for code); the page loads "Jet Sans" and "JETSansDigital" in weights 400, 700 and 800. Arial is a safe substitute.

- **Display** 48px / 56px, weight 800 for hero headline.
- **Heading** 36px / 45.972px, weight 800 for section titles ("Our markets", "Latest news").
- **Subheading** 28px / 34px, weight 800.
- **Body** 16px / 24px, weight 400.
- **Button** and **link** 14px / 18px, weight 700.

PIE states that type sizes and line heights are multiples of 4 and that headings and buttons default to bold; the measured 800 weight on headings is heavier than a plain bold.

## Layout

A full-width white header with a centred nav is followed by a split hero: text on the left third, a rounded orange image panel filling the right two-thirds and bleeding to the page edge. The content bands alternate warm grey and white, with generous vertical rhythm. Lists use two columns; "Our markets" is a split of two globe maps and an action panel; "Latest news" is a four-column card row. The spacing scale in the capture runs 2, 4, 5, 6, 8, 13, 14, 15, 16, 17px, with larger gaps built from multiples of 16.

## Elevation & Depth

The site is mostly flat: panels are separated by background colour (white, `#f5f3f1`, `#efedea`), not shadows. Depth comes from photography and the hero's stacked orange blocks. The cookie banner is a near-black rounded sheet laid over the page. PIE documents an elevation foundation, but no shadow values were measured on this page.

## Shapes

The radius scale is 7px, 8px, 12px, 16px, 50px and a full pill (9999px). Buttons use 50px (pill), the radius scale also includes 16px, and the PIE radius page describes full rounding as reserved for high-priority elements such as buttons, chips and floating action buttons, with partial rounding (multiples of 4) for cards and standard components and 0px corners for full-width structural elements.

## Components

- **Primary button**: `#141c1f` fill, white 14px bold text, 13px 23px padding, 46px tall, 50px radius, 1px border in the same colour.
- **Secondary button**: canvas-coloured fill (`#f5f3f1`) with `#242e30` text, same size and radius ("View all news", "Place an order" in the header).
- **Dark button**: `#242e30` fill with white text ("Sign up").
- **Nav**: 16px links, orange underline on the active item, a chevron on items with sub-menus.
- **Audience link**: small bold 14px link with a trailing chevron beneath a line icon.
- **News card**: rounded photo, date in small text, 800-weight title, grey summary.
- **Footer**: `#efedea` background with ink text.
- **Cookie banner**: dark sheet with underlined text links and two orange pill buttons (consent chrome).

## Design System Architecture

Just Eat Takeaway.com publishes the **PIE design system** at https://pie.design, maintained by the PIE team ("global principles for interfaces and experiences"). It has Foundations (colour, typography, spacing, radius, elevation, blur, gradients, iconography, motion, design tokens), 70+ Components (button, card, chip, dropdown and others), Patterns, Accessibility guidance, web components for engineers and Figma libraries for designers. The tokens page describes a two-tier system: global tokens that name a value (such as `$color-orange-30`) and alias tokens that name a purpose (such as `$brand-support-01`); updates are tracked in the justeat/pie-design-tokens GitHub changelog. The colour page says the palette was generated in HSLuv to meet WCAG 2.1 contrast.

The corporate site ties to PIE by measurable evidence: its stylesheet defines CSS custom properties such as `--dt-color-orange-30` (`#ff8000`), `--dt-color-interactive-primary` (`#262626`), `--dt-radius-03` (8px) and `--dt-font-heading-xl-family`, and the pie.design pages define variables with the same `--dt-color-*` naming. Alongside these the page carries several hundred `--evg*` component variables (cookie banner, tabs, accordion, calendar, modules) that look like a separate investor-site platform layer, and the q4-icons font. The PIE button page measured at 40px tall, 14px/700 JETSansDigital, 8px radius with a pale `#f6f3ef` fill, shows PIE's own button is a smaller rounded-rectangle, whereas this site uses pill buttons.

## Do's and Don'ts

- Do use warm off-white `#f5f3f1` as the page canvas and white for raised panels.
- Do keep headlines in 800-weight JET Sans, one idea per headline.
- Do use `#ff8000` for brand moments (hero panels, maps, logo) and not for small text.
- Do use 50px pill buttons, and one dark primary button per hero.
- Do pair photography of real couriers, food and customers with flat orange panels.
- Don't use brand orange for body text on white; use the darker `#c05102` text tone.
- Don't document or reuse the cookie banner buttons as brand buttons.
- Don't add shadows to panels; separate with colour bands.

## Responsive Behavior

In the desktop capture the header menu wraps "People and planet" onto two lines, so the nav is already tight at 960px. Display type is the same family at smaller sizes; PIE states that only headings and subheadings change with screen width (for example heading L is 28px on wide screens and 24px on narrow ones) while body styles stay constant. Only the desktop capture was used for numbers here.

## Iteration Guide

1. Start with `#f5f3f1` canvas, `#242e30` ink, JET Sans Digital 16px/24px body and 800-weight headings at 48px and 36px.
2. Add one `#141c1f` pill (50px radius, 46px tall, 14px bold white text).
3. Add a rounded orange `#ff8000` hero panel with a cut-out product photo.
4. Alternate white and `#efedea` bands; use icon-plus-link lists for audiences.
5. Keep consent UI visually separate from brand buttons.
