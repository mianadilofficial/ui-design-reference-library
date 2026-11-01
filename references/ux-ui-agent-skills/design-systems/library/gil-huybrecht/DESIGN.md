---
version: alpha
name: "Gil Huybrecht — Freelance designer & art director"
category: "Portfolio"
description: "Black portfolio page for freelance designer and art director Gil Huybrecht: #000000 canvas, #ffffff text, a single sans typeface at 14.5067px weight 500, a six-column header row, project rows of numbered thumbnails and a 4.27px radius on tags, with no buttons, shadows or accent colors."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  ink-dim: "#ffffff66"
typography:
  display:
    fontFamily: sans, sans-serif
    fontSize: 14.5067px
    fontWeight: 500
    lineHeight: 16.1024px
  display-mobile:
    fontFamily: sans, sans-serif
    fontSize: 17px
    fontWeight: 500
    lineHeight: 18.87px
rounded:
  xs: 4.27px
spacing:
  s1: 1.09px
  s2: 4.27px
  s3: 6.83px
  s4: 11.95px
  s5: 17.07px
  s6: 64px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
    padding: 17.0667px 0px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 10.24px
---

## Overview

Gil Huybrecht's site (gilhuybrecht.com, page title "Gil Huybrecht — Freelance designer & art director") is an index-style portfolio set entirely in white text on a black screen. There is no hero image, no logo graphic and no decorative element. The first row is a six-column header strip: the name "Gil Huybrecht" at the left, the availability note "Available September 2026", a Services column listing Information Architecture, Web Design & Art Direction and Interaction design, a Recognition column listing awards (Awwwards SOTD 15x, FWA Site of the day 13x, Independent of the year Nominee 4x, Site of the Year Nominee 3x, Webby awards 3x, Lovie awards 2x, SiteInspire feature 6x), a Profile link and an "Email me" button at the far right.

Below the header the page becomes a long list of client projects (for example Studio DADO, The Lookback, DoThings, 53 West 53, Ray, Ross Mason, Vucko, Ingrao, Custo, Sunny Bonnell and 111 West 57th Street). Each project has a small caption row with its name on the left, then a numbered row of thumbnail screens of the finished websites, with the index number sitting at the right of each cell. The page is a catalogue: the work is the only imagery, and the interface keeps out of its way. The voice is factual and terse; labels are nouns, counts and dates, with no marketing copy.

## Colors

The measured palette has just two real values.

- **Canvas** `#000000`, the page background of the whole site.
- **Ink** `#ffffff`, which carries 643 of the 659 measured text characters and is also the primary color because no other action color exists.
- **Ink dim** `#ffffff66`, white at 40 percent alpha, used for 16 characters of secondary text such as the inactive label in the thumbnail view toggle.
- A translucent grey `#2c2c2f99` is the only measured background area besides black; it is the pill behind the "Grid / Gallery" and "Normal / Star Wars" view switches that appear over the thumbnails.

The thumbnails themselves bring all the visible colour: pale paper whites, warm beige and product photography, which look vivid because the surround is pure black. No border colors and no box shadows were measured. The Tailwind ring color `rgba(59,130,246,.5)` and ring offset `#fff` in the CSS variables are framework defaults, not brand colors, and are not used.

## Typography

A single family named `sans` is measured, with every one of the 659 characters at 14.5067px and weight 500. Line height is 16.1024px. This is the display token and also the body and link style, so the site has no heading scale at all: hierarchy is created by position, columns and spacing, not by size or weight. On the 390px mobile pass the same family steps up to 17px weight 500 with an 18.87px line height. The only loaded font entry is "sans 500 normal"; the rendered shapes in the capture are a neutral grotesque. The name of the typeface is not published in the measured data, so no substitute is claimed beyond using a neutral grotesque at medium weight.

## Layout

The desktop capture is 1280px wide and 3946px tall. The header is a grid of six equal-width columns whose items hang from the top edge. Services and Recognition lists are indented slightly under their headings. The project list repeats a seven-column grid: a project name in the first cell and numbered thumbnails in the following cells, each thumbnail a small landscape or portrait screenshot of the site. Long runs of black, empty cells appear between rows in the full-page capture because the thumbnails load as the page is scrolled; the numbering (1, 2, 3 ...) remains visible on every cell. A CSS variable `--size` is 390 in the root, and measured spacing steps are 1.09px, 4.27px, 6.83px, 11.95px, 17.07px and 64px. The header nav uses 17.0667px of top padding and the footer 10.24px of bottom padding.

## Elevation & Depth

None measured. The `boxShadows` list is empty, there are no borders and no gradients on interface elements. All depth comes from the thumbnails: bright screenshots floating on pure black. The only layered UI is the translucent `#2c2c2f99` pill over thumbnails for view switches.

## Shapes

The single measured radius is 4.26667px, used twice, on the view-switch pill. Every other element computes to a square corner. Thumbnails are rectangles with sharp corners. The token scale therefore has one rounded step, `xs`, at 4.27px.

## Components

- **Header link row**: white 14.5067px medium text, no underline, laid out in six columns; the Email me item is a transparent button with a white border color and no fill.
- **Email button behaviour**: on hover the label changes from "Email me" to "Copy email"; the background stays transparent, the 16px-high text remains white. This is the only recorded hover state.
- **Project caption**: name at left, index number at right, both in the same type size.
- **Thumbnail cell**: a screenshot of a client site with a numeric index; no border, no radius.
- **View switch**: a small translucent pill with two labels (Grid and Gallery; Normal and Star Wars) where the inactive label is the dim `#ffffff66`.
- **Footer**: white text with 10.24px bottom padding and no background fill.

There is no card, no form input, no primary filled button and no badge in the measured page.

## Design System Architecture

No public design system, brand guideline page or public repository was found in the measured page or linked from it, so no public system exists to cite. The root CSS variables are Tailwind's (`--tw-ring-shadow`, `--tw-shadow`, `--tw-ring-color` and similar), which shows a Tailwind-based build whose defaults are overridden by a minimal custom theme: one font, one size, one weight, two colors and one radius. A site-specific variable `--size` carries the number 390. The de-facto system is therefore a restraint system: its rules are the absence of scale, color, shadow and radius.

## Do's and Don'ts

- Do keep the canvas `#000000` and all text `#ffffff`, using `#ffffff66` for secondary labels.
- Do set everything in one size and weight (14.5067px, 500) and organize with columns and spacing.
- Do let project screenshots supply all colour and imagery.
- Do number items; the running index is part of the voice.
- Don't add accent colors, gradients, shadows or borders; none are measured.
- Don't introduce heading sizes, bold weights or italics.
- Don't round thumbnails; only the small view-switch pill has a 4.27px radius.
- Don't treat the Tailwind ring blue as a brand color.

## Responsive Behavior

The mobile pass at 390px recorded the h1 role "Gil Huybrecht" at 17px, weight 500, line height 18.87px, in the same sans family. The mobile extraction recorded no other roles. Column counts, whether the header collapses, and thumbnail sizing at narrow widths are not measured.

## Iteration Guide

1. Begin with a `{colors.canvas}` black page and `{colors.ink}` white text in `{typography.display}`.
2. Build hierarchy only with a column grid, whitespace and the 64px spacing step.
3. Use `{rounded.xs}` solely on small translucent controls.
4. Add new work as numbered thumbnail rows following the same caption-and-index pattern.
5. Re-measure before adding anything the site does not already have: buttons, forms, dark or light themes, or further hover states.

Reading notes for implementers: the page contains very little text, so every string matters. Header columns pair a label with a short list, the availability line states a month and year, and award counts are written as a number followed by "x". Project names keep their original typography marks, such as the registered mark after Ray and Ross Mason and the trademark sign after Vucko. Keep that literal, understated style when adding entries.
