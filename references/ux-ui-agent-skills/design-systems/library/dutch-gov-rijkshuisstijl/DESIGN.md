---
version: alpha
name: Rijksoverheid
category: "Design Systems"
description: "The Dutch national government portal rijksoverheid.nl sets RijksSans (600 headings, 400 body at 17.2739px) in #0f172a ink on white, with #007bc7 sky-blue links, a #154273 logo-blue header and card blocks, #f1f5f9 tint panels and #01689b dark-blue outlined buttons 56px high."
colors:
  canvas: "#ffffff"
  ink: "#0f172a"
  primary: "#007bc7"
  surface-tint: "#f1f5f9"
  logo-blue: "#154273"
  ink-black: "#000000"
  link-dark: "#01689b"
  ink-muted: "#64748b"
typography:
  display:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 45px
  display-mobile:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 37px
  subheading:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31px
  body:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 17.2739px
    fontWeight: 400
    lineHeight: 27.2739px
  nav:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25px
  link:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 23.2739px
    fontWeight: 400
    lineHeight: 30.2659px
  button-secondary:
    fontFamily: RijksSans, Calibri, Verdana, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
rounded:
  xs: 4px
  sm: 8px
  md: 48px
spacing:
  s1: 1.8px
  s2: 1.93px
  s3: 2px
  s4: 7.2px
  s5: 7.71px
  s6: 8px
  s7: 12px
  s8: 12.5px
  s9: 13.08px
  s10: 15.08px
components:
  button-secondary:
    textColor: "{colors.link-dark}"
    typography: "{typography.button-secondary}"
    padding: 0px 16px
    height: 56px
    borderColor: "{colors.link-dark}"
  link:
    backgroundColor: "{colors.logo-blue}"
    textColor: "{colors.surface-tint}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.logo-blue}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    backgroundColor: "{colors.link-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 12px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 0px 40px 0px 16px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.logo-blue}"
    rounded: "{rounded.xs}"
    padding: 36px
  footer:
    backgroundColor: "{colors.logo-blue}"
    textColor: "{colors.canvas}"
---

## Overview

rijksoverheid.nl is the central information site of the Dutch national government. The capture shows a calm, institutional page with very little decoration. A white strip at the top holds the government logo, a tall navy tab carrying the crowned coat of arms and the word "Rijksoverheid". Below it, a navy band with a rounded top-right corner holds the page title "Home" in white and a rounded search field with a magnifier button.

The hero is a large photograph of a hand turning a white radiator thermostat valve, with a white card laid over its left side titled "Veel bekeken" (most viewed), listing five links with chevrons: money back from an energy emergency fund, tackling false self-employment, a form for traveling with a minor, minimum wage amounts for 2026, and passport photo requirements. A small black credit tag sits at the photo's bottom left ("Beeld: © ANP / Richard Brocken").

Under the hero, a pale blue-gray area lays out fourteen topic links in four columns (taxes and benefits, building and housing, economy, family and care, international cooperation, climate and environment, migration and travel, education, government and democracy, law and safety, traffic and transport, work, subjects A-Z, life events), each with a blue chevron, a blue link title and a short gray-black list of sample subtopics. Then come three dark-navy cards (Actueel, Ministeries, Regering) with white text and a "Lees verder" link, and a "Direct naar" row of three photo cards (a vaccination, home insulation, a community garden) with blue titles and credits. Language is Dutch, plain and instructive; the voice addresses the reader directly ("Hoe ziet uw toekomst eruit?").

## Colors

`canvas` #ffffff is the page ground and `ink` #0f172a the principal text color (the site's default text variable is this slate-900). `ink-black` #000000 is used on descriptive text under topic titles, `ink-muted` #64748b for captions and credits. `primary` #007bc7 is the sky blue used for links, the chevron icons and link titles; on hover links shift to a darker blue. `link-dark` #01689b is the darker blue used for outlined buttons and the "Terug naar boven" (back to top) control.

`logo-blue` #154273 fills the footer, the three navy cards and, per the capture, the header band; it is also named `--logo-blue` in the site's root variables. `surface-tint` #f1f5f9 is the pale panel behind the topic grid (`--gray-100`).

The root variables list a large named palette: sky blue #007bc7, dark blue #01689b, dark yellow #ffb612, yellow #f9e11e, red #d52b1e, green #39870c, orange #e17000, a slate gray scale from `--gray-50` (#f8fafc) to `--gray-900` (#0f172a), and further tints. They are the site's editorial palette, but the core UI above uses only the blues and slate neutrals. Browser default link colors (#0000ee, #551a8b) do not appear.

## Typography

The typeface is RijksSans (loaded as a variable font covering weights 200 to 800), with Calibri, Verdana, Arial and generic sans-serif as fallbacks. The page also loads RO Serif in italic and an icon font named RO Icons. Headings use weight 600 (`--headings-font-weight` references a semi-bold variable).

Measured: `display` is 40px at weight 600 with 45px line height (the white "Home" title); `display-mobile` 32px with 37px line height. `subheading` is 24px at 400 with 31px line height. `body` is 17.2739px at 400 with 27.2739px line height. `nav` is 18px with 25px line height. `link` (topic titles) is 23.2739px at 400 with 30.2659px line height, and `button-secondary` is 20px with 27px line height. Fluid type steps are visible in the root variables, for example `--font-size-step-1` 18px and `--font-size-step-2` 20px.

Font substitutes: RijksSans is the government's own face; if it fails to load the stack falls to Calibri, Verdana or Arial, all of which have different widths and no 600 weight.

## Layout

Content sits within a centered container, set on a 16px grid padding and a 32px column gap (`--grid-padding`, `--column-gap`); a narrow content column is 768px. The topic grid uses four columns, the navy cards three equal columns, and the photo cards three equal columns below a bold "Direct naar" heading with a thin rule above. Measured spacing values are 1.8, 1.93, 2, 7.2, 7.71, 8, 12, 12.5, 13.08 and 15.08px, and cards use 36px padding.

## Elevation & Depth

The page is flat. Cards are distinguished by solid fills (navy) or a thin blue outline (photo cards), not shadows. The "Veel bekeken" panel overlays the hero photograph as a plain white box with no visible shadow, which separates it by contrast. No box shadow was measured.

## Shapes

The radii in the root variables are a numbered scale: `--rounded-1` 4px, `--rounded-2` 8px, `--rounded-3` 12px up to `--rounded-12` 48px. In use: `xs` 4px for cards, `sm` 8px for link blocks, and `md` 48px for the pill-shaped search input. The header band has one large rounded corner at the top right. Outlined buttons such as "Terug naar boven" are square (0px) with a 1px `link-dark` border.

## Components

**button-secondary**: transparent, `link-dark` text 20px, 1px `link-dark` border, 0px by 16px padding, 56px high, square corners, the only button measured (no filled primary button was detected). **link**: sky-blue text with a chevron; headings in the topic grid are links at the larger `link` size. **nav / nav-link**: 18px text in white on the navy header. **text-input**: white, 48px high, 48px radius, 16px left padding and 40px right padding, with an attached magnifier button. **card**: white with 4px radius and 36px padding, navy titles; the navy variants use `logo-blue` fill with white text. **footer**: `logo-blue` with white text.

## Design System Architecture

The Dutch government's component work is published through NL Design System (https://nldesignsystem.nl), described there as a collection of design systems that includes guidelines, components, patterns and templates, with participation from municipalities, agencies and a Rijkshuisstijl Community. The Rijkshuisstijl Community site (https://rijkshuisstijl-community.nl), which was opened, describes an open-source project of NL Design System components for projects that must comply with Rijkshuisstijl, publishing components in several frameworks, JSON design tokens, a Storybook and Figma libraries; it states no hex values or font names. The page at rijkshuisstijl.nl turned out to be a login portal and was not used.

The dsUrl is real, but the captured site does not use it: its root variables carry no NL Design System prefixes (none start with `--utrecht-`, `--nl-` or `--rhc-`) and instead follow the site's own naming (`--sky-blue`, `--dark-blue`, `--logo-blue`, `--gray-100`, `--rounded-2`, `--font-size-step-*`). So no values were taken from NL Design System, and the tokens above are the site's own measured values.

## Do's and Don'ts

Do use white and the slate ink for text, sky blue for links and logo blue for strong blocks. Do pair every topic link with a chevron and a short list of examples. Do use clear, instructive Dutch. Do credit photographs.

Don't add gradients, shadows or decorative color. Don't use the yellow or red palette entries as interface chrome without a need. Don't replace RijksSans with a decorative face. Don't use browser default link colors (#0000ee, #551a8b). Don't set light-gray text on white.

## Responsive Behavior

The measured h1 shrinks from 40px with 45px line height at desktop to 32px with 37px line height at 390px. The root variables define fluid size steps (up to 74px) and line-height steps, and a narrow column width of 768px. Other mobile layout details were not measured, so they are not described here.

## Iteration Guide

1. White canvas, slate #0f172a text, RijksSans 17.27px/27.27px body.
2. Links in #007bc7 with a leading chevron; hover darkens.
3. Use #154273 for header, footer and highlighted cards with white text.
4. Use #f1f5f9 for grouped topic areas.
5. Outlined buttons: 56px high, 1px #01689b border, square corners.
6. Keep every element flat; separate with fills and 1px outlines.
