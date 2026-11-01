---
version: alpha
name: Enel X
category: "Design Systems"
description: "Design language of the Enel X Italia web presence as captured in October 2026: the Roobert ENEL typeface at weights 300 to 900 (70px/900 display headline, 20px body), a deep purple #461e7d hero wash over night photography, a #3a16ff electric-blue action color declared as the site's --primary, and near-white #f7f7f7 and #fbfbfb chrome with hairline 1px shadows. Radii are small (4px to 16px) with a 50px pill."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#3a16ff"
  primary-hover: "#1f00c9"
  focus-ring: "#8973ff"
  ink-on-dark: "#ffffff"
  surface-brand: "#461e7d"
  surface-topbar: "#131416"
  surface-footer: "#f7f7f7"
  surface-nav: "#fbfbfb"
  ink-muted: "#828282"
  ink-faint: "#cecece"
  danger: "#ff006e"
  success: "#2afd95"
  info: "#2cfef9"
  warning: "#fef367"

typography:
  display:
    fontFamily: "\"Roobert ENEL\", Avenir, Arial, sans-serif"
    fontSize: 70px
    fontWeight: 900
    lineHeight: 65px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: "\"Roobert ENEL\", Avenir, Arial, sans-serif"
    fontSize: 30px
    fontWeight: 900
    lineHeight: 35px
    letterSpacing: 0.5px
  body:
    fontFamily: "\"Roobert ENEL\", Avenir, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: "\"Roobert ENEL\", Avenir, Arial, sans-serif"
    fontSize: 15px
    fontWeight: 300
    lineHeight: 20px

rounded:
  xs: 4px
  sm: 5px
  md: 10px
  lg: 16px
  pill: 50px

spacing:
  s1: 1px
  s2: 10px
  s3: 15px
  s4: 20px
  s5: 21px
  s6: 25px
  s7: 40px
  s8: 82px
  s9: 110px

components:
  link-on-dark:
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.surface-nav}"
    textColor: "{colors.ink}"
    boxShadow: rgba(189, 189, 189, 0.5) 0px 1px 1px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-muted}"
    padding: 25px 0px 45px
---

## Overview

The captured enelx.com page is not a full product site. On the day it was measured it was a single migration notice: a night-time aerial photograph of Rome fills the hero, a two-line headline reads "Cambia il sito, non la nostra energia" ("Change the site, not our energy"), and a sub-line says that all Enel X solutions for businesses and public administration now live on www.enel.it. Above the hero sits a thin near-black utility bar (`{colors.surface-topbar}` #131416) with "Corporate", an "Italia" country selector and an "IT" language switch. Under the header bar sits a white band with the multicolor Enel wordmark at left and a user icon at right. Below the hero, a short white gap leads to a light-gray footer (`{colors.surface-footer}` #f7f7f7) with the legal line "© Enel X Italia S.r.l. Tutti i Diritti Riservati", links to Credits, Legal, Privacy and Cookie Policy, and five social icons.

Because the page is a notice, this document describes what was measured there plus the values the site's shipped stylesheet declares, and says so wherever a value comes from the stylesheet rather than from a rendered element. Anything that the page did not show (product cards, forms, a real primary button) is left out rather than inferred.

**Key Characteristics:**
- One typeface, **Roobert ENEL**, carrying every measured character; weight does the hierarchy work (900 for the headline, 400 for body, 300 for navigation).
- A photographic hero washed with deep purple `{colors.surface-brand}` (#461e7d), with white type on top.
- A white canvas `{colors.canvas}` and pure black ink `{colors.ink}` for reading text, with two quiet grays for secondary text.
- An electric blue `{colors.primary}` (#3a16ff) that the stylesheet declares as the site's `--primary`, plus a darker #1f00c9 that links turn to on hover.
- A bright semantic set declared in the stylesheet: pink-red `{colors.danger}`, mint `{colors.success}`, cyan `{colors.info}` and yellow `{colors.warning}`.
- Almost no ornament: one 1px hairline shadow under the header and no card shadows on the measured page.

## Colors

> **Source pages:** the homepage `https://www.enelx.com/` (a migration notice), measured at 1280px and 390px. Stylesheet values come from the CSS corpus extracted from the same page.

### Brand & Accent
- **Electric blue** (`{colors.primary}` — #3a16ff): the value of the stylesheet variable `--primary` (also `--blue`). The measured page shows no filled button, so this is the declared action color rather than one observed on a rendered control. It appears 34 times in the stylesheet color list, plus tinted variants such as the focus glow `0 0 0 .2rem rgba(58,22,255,.25)`.
- **Hover blue** (`{colors.primary-hover}` — #1f00c9): the border and text color that the "www.enel.it" link and the "Apro in una nuova pagina" (opens in a new page) links take on hover, measured by the hover probe.
- **Focus ring** (`{colors.focus-ring}` — #8973ff): used by the stylesheet as `inset 0 0 0 3px #8973ff` focus treatment.
- **Brand purple** (`{colors.surface-brand}` — #461e7d): the dominant background-by-area measurement on the page (812 area-weight against 303 for the next color). It is the base of the hero wash; the photograph shows through it, darker at the top and more violet toward the bottom.

### Surface
- **Canvas** (`{colors.canvas}` — #ffffff): the body background and the white band beneath the hero.
- **Nav surface** (`{colors.surface-nav}` — #fbfbfb): the header background, with a 1px shadow `rgba(189, 189, 189, 0.5) 0px 1px 1px 0px`.
- **Footer surface** (`{colors.surface-footer}` — #f7f7f7): the footer fill, about a fifth of the screen in the capture.
- **Utility bar** (`{colors.surface-topbar}` — #131416): the thin top bar.

### Text
- **Ink** (`{colors.ink}` — #000000): the most-read text color (155 character-weight), used for navigation and footer links.
- **Ink on dark** (`{colors.ink-on-dark}` — #ffffff): headline, sub-line and the "www.enel.it" link over the hero.
- **Ink muted** (`{colors.ink-muted}` — #828282): the footer legal line.
- **Ink faint** (`{colors.ink-faint}` — #cecece): the computed body color, used on small 13px utility text.

### Semantic
The stylesheet declares `{colors.danger}` #ff006e, `{colors.success}` #2afd95, `{colors.info}` #2cfef9 and `{colors.warning}` #fef367. None of them is visible on the migration page, so their use in product screens is not described here.

## Typography

### Font Family
Every measured character is set in **Roobert ENEL** with the stack `"Roobert ENEL", Avenir, Arial, sans-serif`. The page loads Roobert ENEL at weights 300, 400, 700 and 900 (normal style) and declares two further faces, `roobertenel` and `digitalecosystem`; this document does not claim what the latter is used for. Where Roobert ENEL is unavailable, substitute **Avenir** (already in the stack) or **Inter** at the same weights, adjusting the 70px headline tracking by eye.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 70px | 900 | 65px | 0.5px | Hero headline (desktop) |
| `{typography.display-mobile}` | 30px | 900 | 35px | 0.5px | Hero headline at 390px |
| `{typography.body}` | 20px | 400 | 30px | normal | Hero sub-line and links |
| `{typography.nav}` | 15px | 300 | 20px | normal | Navigation links, footer text |

### Principles
- **Tight display leading.** The headline's line-height (65px) is smaller than its font size (70px), so the two lines of "Cambia il sito, non la nostra energia" stack as a compact block.
- **Light navigation, heavy headline.** Navigation at 300 and the headline at 900 give the page its two voices; body at 400 sits between.
- **Sentence case, no uppercase transform.** All measured roles report `text-transform: none`.
- Font sizes are in whole pixels: 15px carries 230 of the page's character weight, 20px carries 74, 70px carries 36 and 13px carries 17.

## Layout

### Spacing System
The measured paddings are `{spacing.s1}` 1px, `{spacing.s2}` 10px, `{spacing.s3}` 15px, `{spacing.s4}` 20px, `{spacing.s5}` 21px, `{spacing.s6}` 25px, `{spacing.s7}` 40px, `{spacing.s8}` 82px and `{spacing.s9}` 110px. The footer pads 25px at the top and 45px at the bottom. There is no single base unit; 5px multiples dominate.

### Grid & Container
The header is 70px tall and 1280px wide at desktop. The hero headline block is 934px wide and centered, so the text column is much narrower than the viewport. In the footer, legal text is left-aligned and the social icons sit near the center of the page.

### Whitespace Philosophy
Generous: the hero is a large field with one headline and one sentence, and the rest of the page is a short white gap and a light footer.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | Flat | Default |
| 1 | `rgba(189, 189, 189, 0.5) 0px 1px 1px 0px` | Header hairline |

Depth otherwise comes from the photograph and the purple wash rather than from shadows. The stylesheet also declares softer glows (`0 0 20px rgba(0,0,0,.1)`) that did not appear on the measured page.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Most frequent stylesheet radius (25 uses) |
| `{rounded.sm}` | 5px | Stylesheet radius (12 uses) |
| `{rounded.md}` | 10px | Stylesheet radius (7 uses) |
| `{rounded.lg}` | 16px | Stylesheet radius (6 uses) |
| `{rounded.pill}` | 50px | Stylesheet radius (5 uses) |

These radii are taken from the shipped CSS; every rendered element on the migration page measured 0px. The cookie-preferences control in the footer is a rounded outline pill in the capture, but it is a consent control, not part of the measured system; its styling was not measured.

## Components

### Link on dark
**`link-on-dark`**: white text, `{typography.body}` 20px, with an underline in the capture. On hover the border color becomes `{colors.primary-hover}`.

### Navigation
**`nav`**: a 70px header on `{colors.surface-nav}` with black text and a 1px hairline shadow. **`nav-link`**: black, `{typography.nav}` 15px weight 300.

### Footer
**`footer`**: `{colors.surface-footer}` background, `{colors.ink-muted}` text, padding `25px 0px 45px`, with legal links in black.

### Buttons and forms
The measured page contains no button or input, so none is declared. The stylesheet's `--primary` blue and its 50px radius are the best evidence of the intended action style, but that is an observation about declared values, not a measured component.

## Design System Architecture

No public design-system documentation was found for the site that the page itself uses. The enelx.com page loads a stylesheet whose root variables follow Bootstrap-style names (`--primary`, `--danger`, `--breakpoint-md`, `--font-family-sans-serif`) with brand values substituted: `--primary: #3a16ff`, `--danger: #ff006e`, `--success: #2afd95`, `--info: #2cfef9`, `--warning: #fef367`, and breakpoints at 375px (`--breakpoint-sm`), 768px (`--breakpoint-md`) and 1025px (`--breakpoint-lg`). Asset paths in the HTML include `clientlibs/enel-x-digital-ecosystem/`; that names a bundle, and is not a documented design system.

Enel does publish a separate component Storybook at https://dsyui.enelx.com (titled "DSYUI: Our Internal Design System", package names `@dsy/dsyui`, `@dsy/enel`, `@dsy/enelx`). It was opened and it does ship the Roobert ENEL font files, but the enelx.com markup contains no `dsy-` elements or DSYUI references, so this document does not treat it as the system behind the measured page and no values were taken from it.

Brand-level rules are published by Enel: the logo guideline PDF at https://www.enelnorthamerica.com/content/dam/enel-na/media-resources/Enel%20Logo%20-%20How%20to%20use%20it.pdf states that the multicolor logo is the primary version, to be used on white or light backgrounds, with a mandatory exclusion zone of two "Cursor" spaces and a minimum size of 7.5mm in print or 10px on screen. The Enel Group brand page https://enel.com/live-our-brand lists downloadable logo packs for Enel, Enel Green Power and Enel X and a visual-identity guideline PDF. A case study at https://cba-design.com/italy/en/work/the-new-e-mobility-way/ about the Enel X Way sub-brand says purple represents Enel X's core and pink expresses its positive message.

## Do's and Don'ts

### Do
- Set headlines in Roobert ENEL 900 with 0.5px tracking and a line-height slightly under the font size.
- Keep body copy at 20px/30px and navigation at 15px/20px weight 300.
- Put white text on the purple photographic wash and black text on white or light gray.
- Use the multicolor Enel logo on white or light backgrounds, keeping the two-Cursor exclusion zone.
- Use `{colors.primary}` for actions and `{colors.primary-hover}` for hover.

### Don't
- Don't invent a button style from the radii list; no filled button was measured.
- Don't place the multicolor wordmark on the purple hero; the logo guideline reserves it for light backgrounds.
- Don't use the semantic colors as brand fills; they are declared as status colors.
- Don't add uppercase transforms to headings.

## Responsive Behavior

At 390px the hero headline drops from `{typography.display}` (70px/65px) to `{typography.display-mobile}` (30px/35px) while keeping weight 900 and 0.5px tracking; the only other measured size at mobile is the 15px text. The stylesheet declares breakpoints at 375px, 768px and 1025px. The country selector in the utility bar, the header user icon and the footer social icons are the elements the page relies on at every width.

## Iteration Guide

1. Start from the headline: Roobert ENEL 900 at 70px/65px, white, centered over a purple-washed photograph.
2. Pick colors from the list above only; use `{colors.primary}` for the one action per view.
3. For mobile, scale the headline to 30px/35px and keep the 15px navigation text.
4. If a button is needed, measure a live Enel X product page first; none was available in this capture.
5. Re-run `node web/scripts/verify-designs.mjs --slug=enel-x` after any edit.
