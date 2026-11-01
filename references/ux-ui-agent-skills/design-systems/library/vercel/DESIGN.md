---
version: alpha
name: Vercel
category: "Developer Tools & IDEs"
description: "Vercel marketing homepage: a #fafafa near-white canvas with near-black #171717 headlines and pill buttons, set entirely in Geist Sans (400-500 weight, tight negative tracking from -0.96px to -3.84px) with Geist Mono for code. Cards are 6px-radius surfaces outlined by a hairline shadow ring rather than a fill or a drop shadow."
colors:
  canvas: "#fafafa"
  ink: "#4d4d4d"
  primary: "#171717"
  on-primary: "#ffffff"
  ink-faint: "#c9c9c9"
  ink-muted: "#666666"
  ink-subtle: "#8f8f8f"
  primary-hover: "#383838"
typography:
  display:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 64px
    letterSpacing: "-3.84px"
  display-mobile:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-2.88px"
  heading:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 56px
    fontWeight: 450
    lineHeight: 56px
    letterSpacing: "-3.36px"
  body:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 24px
    fontWeight: 450
    lineHeight: 32px
    letterSpacing: "-0.96px"
  button:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: GeistSans, "GeistSans Fallback"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 4px
  sm: 6px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 4px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 0px 6px
    height: 32px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 0px 12px
  nav:
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 8px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
    padding: 20px
    boxShadow: >-
      rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.08) 0px 0px 0px 1px, rgb(250, 250, 250)
      0px 0px 0px 1px
  footer:
    textColor: "{colors.primary}"
    padding: 40px 24px
---

## Overview

The captured Vercel homepage is an exercise in subtraction. The page sits on a near-white canvas (`{colors.canvas}`, `#fafafa`) and almost everything on it is either near-black (`{colors.primary}`, `#171717`) or a mid grey (`{colors.ink}`, `#4d4d4d`). There is no decorative accent colour in the capture: the only chroma comes from third-party customer logos and the product screenshots of customers (Notion, Zapier) that are shown inside framed windows. The hero reads "Agentic Infrastructure" in a 64px Geist Sans display line, a large solid black triangle (the Vercel mark) sits centred in the hero, and three short capability lines sit to the right. Two pills sit under the headline: a filled black "Deploy now" and a white "Talk to sales".

The overall impression is engineered rather than expressive. Large areas of empty canvas separate each band; headlines are set tight and large; supporting copy is set in grey; evidence is a row of customer wordmarks followed by two case-study blocks that each pair a headline, a product screenshot and a short feature list.

**Key Characteristics:**
- One typeface family, Geist Sans, in three measured weights (400, 450, 500), with Geist Mono available for technical text.
- Strongly negative letter-spacing on every display size: `-3.84px` at 64px, `-3.36px` at 56px, `-0.96px` at 24px.
- A black-and-white button language: filled `{colors.primary}` pill plus a white outlined pill.
- Hairline, shadow-based borders (`rgba(0, 0, 0, 0.08)` one-pixel ring) instead of solid border colours.
- Customer proof presented as monochrome logos and framed product windows.
- Lots of vertical whitespace; content hugs the left edge on a wide, loose grid.

## Colors

The palette that was measured on the live page is deliberately tiny.

- **Canvas** `{colors.canvas}` (`#fafafa`) is the page background and covers most of the capture. White (`#ffffff`, used as `{colors.on-primary}` and as the fill of the secondary pill and screenshot windows) is a second, slightly brighter surface.
- **Primary** `{colors.primary}` (`#171717`) fills the "Deploy now" and "Sign Up" buttons and is the headline and nav colour. Its hover state is `{colors.primary-hover}` (`#383838`), measured by hovering the primary button.
- **Ink** `{colors.ink}` (`#4d4d4d`) is the most-read text colour by character count: it carries the 24px supporting paragraphs and secondary descriptions.
- **Greys for hierarchy**: `{colors.ink-muted}` (`#666666`), `{colors.ink-subtle}` (`#8f8f8f`) and `{colors.ink-faint}` (`#c9c9c9`) show up in smaller amounts, for small labels like "Features", disabled-looking text inside screenshots and placeholder text.

Reassignment note: the generator proposed `#4d4d4d` as `ink` because it is the single most-read colour; the headings, however, are `#171717`, which is also the CTA fill, so that value is both `primary` and the headline colour. This is kept as measured; nothing was recoloured.

Vercel's own Geist documentation describes its colour system as ten scales (backgrounds, gray, gray-alpha, blue, red, amber, green, teal, purple, pink), each with ten steps, where steps 1-3 are component backgrounds, 4-6 borders, 7-8 high-contrast backgrounds and 9-10 secondary and primary text. The same page recommends `gray` for text, icons, fills, borders and dividers by default and `gray-alpha` only when the background should show through. The page does not publish hex values, so the semantic colours of those scales (blue, red, amber and so on) are not added here; the homepage capture does not use them.

## Typography

Every measured text run is in **Geist Sans** (loaded as a variable font covering weights 100-900) with **Geist Mono** loaded alongside it. The Geist documentation says the design system is "typeset with Geist Sans and Geist Mono". Licensing and distribution terms were not on the pages that were read, so none are stated here; the font stack in the tokens falls back to the site's own "GeistSans Fallback".

| Role | Size / line-height | Weight | Tracking |
|---|---|---|---|
| `{typography.display}` (h1) | 64px / 64px | 400 | -3.84px |
| `{typography.display-mobile}` (390px viewport h1) | 48px / 56px | 400 | -2.88px |
| `{typography.heading}` (h2) | 56px / 56px | 450 | -3.36px |
| `{typography.body}` | 24px / 32px | 450 | -0.96px |
| `{typography.button}` | 16px / 24px | 500 | normal |
| `{typography.nav}` | 16px / 24px | 400 | normal |
| `{typography.link}` | 14px / 21px | 500 | normal |

The headline tier uses a line-height equal to the font-size (1.0), which makes multi-line headings such as "Build agents on infrastructure that thinks like them" read as a dense block. The 450 weight is a variable-font in-between value, slightly heavier than regular, that gives headings presence without a bold look.

## Layout

The page is a single column of full-width bands. The capture shows content aligned to the left edge, with the hero split into three zones: headline and buttons on the left, the triangle mark in the centre and a three-line list on the right. Below that, a logo row spans the full width, and the two case-study bands alternate sides: the first puts the headline on the left and the screenshot to its right, the second flips the screenshot to the right of the copy with the feature list on the left. Spacing tokens measured on the page run from `{spacing.s1}` to `{spacing.s10}` (1px up to 20px), with footer padding of 40px vertical and 24px horizontal and large unmarked gaps between bands. Vercel's own design.md for reports describes a 12-column desktop, 6-column tablet and 4-column mobile grid; that document is for Vercel-authored report sites rather than the homepage, so it is cited as context only.

## Elevation & Depth

Depth is almost absent. Cards and screenshot windows use a one-pixel ring made from a shadow (`rgba(0, 0, 0, 0.08) 0px 0px 0px 1px`) followed by a canvas-coloured ring, so the border looks like a soft hairline that adapts to whatever sits behind it. The site's CSS variables also include a larger border-shadow token with a two-layer soft drop (a 2px and a 16px blur, both very low opacity) used for floating surfaces, and a very faint dropdown shadow. On the homepage capture the dominant effect is flat: the product screenshots look pasted onto the canvas with a ring and no heavy shadow, and the lower part of the Notion window fades into the page.

## Shapes

Three radii are declared in the tokens: `{rounded.xs}` (4px), `{rounded.sm}` (6px) and `{rounded.pill}` (9999px). Primary buttons, the secondary pill and the "link" style use the full pill. Smaller controls and cards use 6px; 4px appears in a few small elements. The triangle logo is the one hard-edged geometric shape and acts as the visual anchor of the hero. Customer screenshots keep square-to-slightly-rounded window corners so they read as software, not as photography.

## Components

- **button-primary**: filled `{colors.primary}`, white text, 16px weight 500, 40px high with 12px horizontal padding, pill radius. Hover goes to `{colors.primary-hover}`. In the capture it is "Deploy now" and "Sign Up".
- **button-secondary**: in the extraction the 32px-high nav variant uses the same fill with 14px text, 6px radius and 6px padding. In the capture the "Get a Demo" and "Log In" buttons in the top bar are white, bordered by a hairline ring.
- **nav**: a slim top bar with the triangle mark, links "Products", "Resources", "Enterprise" and "Pricing" in 16px weight 400, then "Get a Demo", "Log In" and "Sign Up" aligned right. Nav links carry 8px padding.
- **link**: 14px weight 500 text in `{colors.primary}`, in pill-shaped hit areas with 12px horizontal padding.
- **card**: `{colors.canvas}` surface, 6px radius, 20px padding and the hairline shadow ring described above.
- **announcement strip**: a centred one-line banner ("Ship 26 is coming to SF" with "Get your ticket") sits between nav and hero.
- **footer**: `{colors.primary}` text on canvas with 40px 24px padding.

Vercel's Geist button documentation lists five variants (default, secondary, tertiary, error, warning), three sizes (small, medium as the default, large) plus a tiny size for icon-only buttons, and three shapes (rounded, square, circle). The homepage uses only the default and secondary looks.

## Design System Architecture

Vercel publishes its system as **Geist**. The introduction page at https://vercel.com/geist/introduction states that Geist is "Vercel's design system for building consistent web experiences", with four foundations (colors, typography, materials, grid), React components, an icon set, brand assets and custom typefaces. The same page names the packages `@vercel/geistcn` for components and `@vercel/geistcn-assets` for icons and assets, and notes that every docs page is available as Markdown. Colour documentation is at https://vercel.com/geist/colors and typography at https://vercel.com/geist/typography, where text styles follow a `text-heading-72` ... `text-heading-14`, `text-button-16/14/12`, `text-label-20...12` and `text-copy-24...13` pattern consumed as Tailwind classes, each preset bundling size, line-height, letter-spacing and weight. Button behaviour is documented at https://vercel.com/geist/button, and the typeface page is https://vercel.com/geist/font. The shipped CSS confirms this: the page exposes many custom properties named `--ds-*`, `--geist-*` and Tailwind `--tw-*`, such as `--ds-background-200` and `--geist-space-16x`, so the site mixes a Geist token layer with Tailwind utilities.

## Do's and Don'ts

**Do**
- Keep the canvas at `{colors.canvas}` and reserve `{colors.primary}` for the one action per band.
- Set headings in Geist Sans with the measured negative tracking; keep line-height tight.
- Express borders as low-alpha shadow rings.
- Use customer logos in monochrome and let product screenshots carry the colour.

**Don't**
- Add decorative gradients or accent colours to the marketing surface; the capture has none.
- Use heavy weights: the measured range is 400-500.
- Round cards beyond 6px or use pill shapes outside buttons and links.
- Use grey below `{colors.ink-subtle}` for text that must be read.

## Responsive Behavior

A separate 390px-wide measurement shows the h1 dropping from 64px to 48px (line-height 56px) and tracking from -3.84px to -2.88px, keeping the same proportion of tracking to size. The hero's three-column arrangement is a desktop layout; the capture used here is a narrow rendering in which the nav already shows the full link set, so exact breakpoints were not measured and are not asserted. Vercel's report guide specifies the 12/6/4 column progression for its own report pages.

## Iteration Guide

1. Start from `{colors.canvas}`, `{colors.primary}` and `{colors.ink}`; add greys from `{colors.ink-muted}`, `{colors.ink-subtle}` and `{colors.ink-faint}` only for hierarchy.
2. Use `{typography.display}` for the page headline and `{typography.heading}` for band headlines, and keep `{typography.body}` at 24px for lead paragraphs.
3. Build primary actions with `button-primary`: 40px high, pill, 12px padding, hover `{colors.primary-hover}`.
4. Draw containers with the hairline ring and 6px radius rather than fills.
5. When introducing semantic colours (error, success), source them from the official Geist colour scales in the CSS, and record the source URL per token in SOURCES.json.
6. Re-measure rather than guess: run the extractor on a new page before adding any value.
