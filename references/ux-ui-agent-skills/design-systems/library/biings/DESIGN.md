---
version: alpha
name: Biings
category: "Design Systems"
description: "Biings marketing site (biings.com, in French): a warm #faf7f5 canvas with aubergine #46285d text, a #8c50b9 violet pill primary button, Plush 76px display headlines over Averta body text, 28px rounded translucent cards and soft plum-tinted shadows."
colors:
  canvas: "#faf7f5"
  ink: "#46285d"
  primary: "#8c50b9"
  on-primary: "#ffffff"
  surface-soft: "#efebe9"
  ink-secondary: "#5b3478"
  ink-faint: "#46285d80"
  hairline: "#dfdad7"
  primary-hover: "#8648b4"
  card-bg: "#ffffff66"
typography:
  display:
    fontFamily: Plush, serif
    fontSize: 76px
    fontWeight: 400
    lineHeight: 72.2px
    letterSpacing: "-3.8px"
  display-mobile:
    fontFamily: Plush, serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 45.6px
    letterSpacing: "-2.4px"
  subheading:
    fontFamily: Averta, "Helvetica Neue", Arial, sans-serif
    fontSize: 24.5px
    fontWeight: 800
    lineHeight: 24.5px
    letterSpacing: "-1.4px"
  body:
    fontFamily: Averta, "Helvetica Neue", Arial, sans-serif
    fontSize: 17.5px
    fontWeight: 400
    lineHeight: 24.0625px
    letterSpacing: "-0.25px"
  button:
    fontFamily: Averta, "Helvetica Neue", Arial, sans-serif
    fontSize: 20px
    fontWeight: 900
    lineHeight: 30px
  nav:
    fontFamily: Averta, "Helvetica Neue", Arial, sans-serif
    fontSize: 16px
    fontWeight: 800
    lineHeight: 24px
    letterSpacing: "-0.25px"
rounded:
  xs: 5px
  sm: 7px
  md: 12px
  lg: 28px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 18px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 26.5px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 26.5px 35px
    height: 55px
    boxShadow: rgba(19, 10, 26, 0.3) 0px 1px 3px -2px, rgba(19, 10, 26, 0.2) 0px 5px 4px -4px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 16px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(109, 95, 100, 0.04) 0px 1px 2px -16px, rgba(109, 95, 100, 0.05) 0px 24px 60px 0px, rgba(109, 95, 100, 0.075) 0px 4px 8px 0px, rgba(109, 95, 100, 0.024) 0px 0px 0px 1px
  footer:
    textColor: "{colors.primary}"
---

## Overview

The measured page is https://biings.com/ (title "Biings – Logiciel de Prévention & Gestion des Absences"), the French-language marketing site for Biings, an absence-prevention and absence-management software for HR teams. The visual identity is warm, soft and purple: a pale warm-white canvas, a lavender-to-pink gradient wash at the top of the hero that ends in a curved white edge, deep aubergine text, and a single saturated purple for the call to action. The hero headline, "Tout pour réduire et gérer les absences au travail.", is set in a large light serif (Plush) with the key words ("réduire", "absences") in the bold italic cut, which gives the page its editorial, human tone. A small underlined text navigation (Philosophie, Comment ça marche, Prix) sits top left, "Se connecter" and a language globe top right, and the logo is centred above the headline.

Beneath the headline a sans-serif lead paragraph, a white secondary pill button ("Voir comment ça marche"), the word "ou" and a purple primary pill ("Demander une démo") sit in a row. An illustrated product mock-up in purple with floating pastel notification chips (teal, orange and blue) follows, then a grey line of client logos ("Soutient les RH et renforce les managers chez"), a second serif headline and four centred columns, each with a rounded icon tile, a bold title, a paragraph and an underlined "En savoir plus" link. Copy is warm and reassuring, written for HR readers.

## Colors

The canvas is `{colors.canvas}`, a warm off-white. Text is `{colors.ink}`, a deep aubergine purple, with `{colors.ink-secondary}` a lighter aubergine and `{colors.ink-faint}` the same aubergine at half opacity for captions. The accent and action colour is `{colors.primary}`, a medium violet that fills the primary button (hover `{colors.primary-hover}`), colours a highlighted word in the hero lead and the footer text. White `{colors.on-primary}` is the label colour on the primary button. Cards are translucent white `{colors.card-bg}` over the canvas; `{colors.surface-soft}` is a warm light grey surface and `{colors.hairline}` the warm grey divider.

Beyond those, the page defines a wide set of CSS colour variables (greens, oranges, cyans, pinks, yellows, reds) that appear only in small illustrative chips and icons, not in page chrome.

## Typography

Two typefaces: Averta for interface and body text, Plush for display. `{typography.display}` is Plush at 76px, weight 400, line height 72.2px and letter-spacing -3.8px, dropping to 48px on a 390px viewport (`{typography.display-mobile}`). `{typography.subheading}` is Averta at 24.5px, weight 800, tight tracking of -1.4px; `{typography.body}` is Averta 17.5px / 24.0625px with -0.25px tracking; `{typography.button}` is 20px at weight 900; `{typography.nav}` is 16px at 800.

### Font substitutes

Both typefaces are licensed. The Biings Design System typography page states Averta is the primary family and Plush the secondary one "with purchased licences", and that fonts must be purchased if used outside the Biings context; it also names Roboto, Caveat and Roboto Mono as companions (https://biings.design/typo.md). As open substitutes, use a humanist sans such as Nunito Sans for Averta and a soft transitional serif for Plush; these are suggestions, not measurements.

## Layout

A single centred column dominates: logo, headline, lead and buttons are all centred, with generous space. The product illustration is centred and wider than the text column. Features sit in a four-column row of centred text, each with a rounded icon tile above. Spacing tokens are `{spacing.s1}` to `{spacing.s10}`, from 4px to 26.5px, which are the small steps used inside components; the vertical rhythm between sections is large and not captured as discrete tokens. The page's hero ends with a curved edge where the lavender gradient meets the warm-white canvas.

## Elevation & Depth

Depth is soft and plum-tinted. The primary button carries `rgba(19, 10, 26, 0.3) 0px 1px 3px -2px, rgba(19, 10, 26, 0.2) 0px 5px 4px -4px`. Cards use a layered, very diffuse warm-grey shadow: `rgba(109, 95, 100, 0.04) 0px 1px 2px -16px, rgba(109, 95, 100, 0.05) 0px 24px 60px 0px, rgba(109, 95, 100, 0.075) 0px 4px 8px 0px, rgba(109, 95, 100, 0.024) 0px 0px 0px 1px`. The illustration floats with a blurred ellipse shadow beneath it and its chips overlap the window edge.

## Shapes

Radii: `{rounded.xs}` 5px, `{rounded.sm}` 7px, `{rounded.md}` 12px, `{rounded.lg}` 28px (cards, nav container) and `{rounded.pill}` for buttons and tags. Buttons are full pills; icon tiles and cards are generously rounded squares.

## Components

- **Primary button** (`button-primary`): `{colors.primary}` fill, white `{typography.button}` label, full pill, 55px high with 26.5px by 35px padding, hover `{colors.primary-hover}`.
- **Secondary button**: white pill with aubergine bold label (visible in the capture; its numeric properties were not extracted).
- **Navigation** (`nav`, `nav-link`): underlined aubergine links at 16px / 800; container radius `{rounded.lg}`.
- **Card** (`card`): translucent white, `{rounded.lg}`, layered soft shadow.
- **Icon tile**: a small rounded white square with a coloured line icon.
- **Text link**: underlined "En savoir plus".
- **Footer** (`footer`): text in `{colors.primary}`.

## Design System Architecture

Biings has a real, public design system and the site is built from it. https://biings.design is the Biings Design System (BDS): a docsify site whose description reads "A series of assets and guidelines for building consistent user experiences across Biings products", with Foundation pages (Brand, Colors, Typography, Iconography, Content, Layout, Modifiers) and 17 component pages (Avatar through Tooltip), an npm package `biings-ds`, a CC BY 4.0 licence badge and a GitHub repository (https://github.com/biings/biings-ds) that publishes `build/bds.css`. I opened the README, sidebar, typography, colour and brand pages and the raw stylesheet. The brand page states the primary colour is #8C50B9, matching the measured `{colors.primary}`. I also compared the page's 72 measured CSS custom properties, all of them `--color-*`, with the published bds.css: 71 share a name with it, 62 of those have the identical value and 9 (certain oranges, greens and a light grey) differ. The site's variables are therefore largely the same as the design system's, with some differences, and I cannot say which is newer. Frontmatter values here still come from live-page measurements, not from bds.css.

## Do's and Don'ts

- Do keep a warm off-white canvas and aubergine text; avoid pure black.
- Do use Plush for the one big headline per page and mix regular with bold italic for emphasis.
- Do use full-pill buttons with one saturated violet primary per view.
- Do keep shadows soft, warm-grey or plum-tinted and very diffuse.
- Do let a pastel gradient wash sit behind the hero only.
- Don't use the extra palette colours (orange, teal, blue, pink) for chrome; they are for illustrative chips and status.
- Don't use Plush for small text.
- Don't separate the logo mark from the logotype (the brand page says the logotype should never appear without the mark).

## Responsive Behavior

On a 390px viewport the Plush display headline shrinks from 76px to 48px with line height 45.6px and letter-spacing -2.4px, keeping the tight proportions. The Biings design system documents modifiers and layout foundations (class names such as is-size-2-mobile and is-hidden-mobile appear in its own markup), but the mobile navigation and column reflow of biings.com were not measured and are not described.

## Iteration Guide

1. Start with `{colors.canvas}` and `{colors.ink}`; add the violet only for the primary action.
2. Pair Plush headlines with Averta body text.
3. Build buttons as full pills, 55px high, with the soft plum shadow.
4. Build cards at `{rounded.lg}` with translucent white and the layered warm shadow.
5. Follow the Biings Design System's own pages for anything not measured here.
6. Re-run the gate after any rename.
