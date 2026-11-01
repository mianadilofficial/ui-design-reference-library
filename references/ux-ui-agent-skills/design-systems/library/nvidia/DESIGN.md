---
version: alpha
name: NVIDIA
category: "Media & Consumer Tech"
description: "NVIDIA homepage: white surfaces with #1a1a1a text, square 0px-radius #76b900 green buttons with black 700-weight labels at 16px, 2px-radius white cards with a 5px soft glow, NVIDIA-NALA at 36px bold headlines and 15px body."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#76b900"
  on-primary: "#000000"
  ink-muted: "#00000099"
  ink-subtle: "#666666"
  ink-dark: "#333333"
  primary-hover: "#91c733"
  primary-dark: "#5a8c00"
  primary-tint: "#eef7e0"
typography:
  display:
    fontFamily: NVIDIA-NALA, Arial, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 45px
  display-mobile:
    fontFamily: NVIDIA-NALA, Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  subheading:
    fontFamily: NVIDIA-NALA, Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 35px
  body:
    fontFamily: NVIDIA-NALA, Arial, Helvetica, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24.99px
  button:
    fontFamily: NVIDIA-NALA, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  link:
    fontFamily: NVIDIA-NALA, Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 35px
rounded:
  xs: 2px
  none: 0px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 13px
  s8: 15px
  s9: 15.12px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 13px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 11px 13px
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  card:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 0px 5px 0px
---

## Overview

This file describes `https://www.nvidia.com/en-us/` (page title "World Leader in Artificial Intelligence Computing | NVIDIA", measured at 1280px width, page height 8632px). The page is a bright, utilitarian corporate site: white (`{colors.canvas}`) and light-gray surfaces, near-black text (`{colors.ink}`, `#1a1a1a`), and a single saturated colour, NVIDIA green (`{colors.primary}`, `#76b900`), used on the logo, buttons, carousel arrows, the active hero tab, link underlines and the diagonal line art in the event banner. Everything is set in one family, NVIDIA-NALA, which accounted for all 16605 measured characters.

Top to bottom the capture shows: a white navigation bar with the green-eye NVIDIA logo, Products, Solutions, Industries on the left, Shop, Drivers, Support, search, a region globe ("US") and Sign In on the right; a light-gray gradient hero with a 36px bold headline ("A New Beginning for Windows PCs"), a short paragraph, a square-cornered green "Learn More" button and a product render of an unfolded laptop; under the hero a six-item tab strip (each with a small category label and a title, the active one marked by a green top rule); an event banner ("GTC Washington, D.C. Registration Is Now Open") with a green underlined "Get Your Pass Now" link and a large NVIDIA GTC logo over faint triangular line art; then content sections ("Artificial Intelligence", "Design and Simulation") each with a short description on the left and a horizontally scrolling row of white cards on the right, steered by two square green arrow buttons.

**Key Characteristics:**
- Square-cornered green buttons: `{colors.primary}` fill with **black** text (`{colors.on-primary}`), radius `{rounded.none}` (0px), padding 11px 13px, height 42px; hover lightens to `{colors.primary-hover}` (`#91c733`).
- Cards are white with a 2px radius (`{rounded.xs}`) and one soft shadow, `rgba(0,0,0,0.3) 0 0 5px`.
- Bold sans (700) for headings and buttons; 15px regular for body copy.
- Content is organised in horizontally scrolling card rows with a text column on the left.
- Photography and 3D product renders carry the imagery; the UI itself stays white, gray and black plus the green accent.
- Underlined green links ("Get Your Pass Now") signal in-text actions.

## Colors

> **Source pages:** `/en-us/` homepage, desktop (and mobile for the h1). Two extra values (`primary-dark`, `primary-tint`) are cited from the NVIDIA research brand page, see SOURCES.json.

### Brand & Accent
- **Primary** (`{colors.primary}` - `#76b900`): NVIDIA green; button fill, logo, arrows, active tab rule.
- **On Primary** (`{colors.on-primary}` - `#000000`): label colour on the green button.
- **Primary Hover** (`{colors.primary-hover}` - `#91c733`): measured hover fill of the "Learn More" button.
- **Primary Dark** (`{colors.primary-dark}` - `#5a8c00`): listed as the dark green hover variant on the [NVIDIA Research brand page](https://research.nvidia.com/labs/sil/brand/main.html) (opened). It is not what the homepage button measured on hover (`#91c733`), so treat it as a published brand variant, not the site's hover.
- **Primary Tint** (`{colors.primary-tint}` - `#eef7e0`): "light green hover tint" on the same page; not measured on the homepage.

### Surface
- **Canvas** (`{colors.canvas}` - `#ffffff`): page background, 95% of the sampled screen pixels; cards and nav are white.
- Black (`#000000`) covers a measurable background area (727 area-weight; which elements was not isolated); gray `#a7a7a7` and a 20% black overlay `#00000033` appear in tiny amounts.

### Text
- **Ink** (`{colors.ink}` - `#1a1a1a`): the most-read text colour (10093 characters), used for body copy and links.
- **Ink Dark** (`{colors.ink-dark}` - `#333333`): a darker secondary text (56 characters).
- **Ink Subtle** (`{colors.ink-subtle}` - `#666666`): caption/secondary text (175 characters).
- **Ink Muted** (`{colors.ink-muted}` - `#00000099`): 60% black text (330 characters).
- Pure `#000000` also appears as a text colour (5488 characters), for example headings and card titles.

## Typography

### Font Family
One family, **NVIDIA-NALA**, with fallbacks Arial, Helvetica, sans-serif. The loaded fonts reported are NVIDIA-NALA in a variable form (weight range 100 to 1000) with an italic, plus Font Awesome 6 (Brands, Pro, Sharp) for icons. NVIDIA's own font stylesheet (opened: `clientlibs_global_fonts…css` on nvidia.com) declares NVIDIA-NALA from files named `NVIDIASansVF_NALA_W_Wght.woff2` (light, variable) and legacy `NVIDIASans_NALA_W_Rg/Md/Bd.woff` for 400, 500 and 700. The NVIDIA Research brand page states "The NVIDIA brand typeface is NVIDIA Sans" and names a system sans stack as an acceptable digital substitute.

### Hierarchy

| Token | Size | Weight | Line Height | Use |
|---|---|---|---|---|
| `{typography.display}` | 36px | 700 | 45px | Hero headline (h1) |
| `{typography.display-mobile}` | 24px | 700 | 30px | Hero headline at the mobile viewport |
| `{typography.subheading}` | 28px | 700 | 35px | Section titles ("Artificial Intelligence") |
| `{typography.body}` | 15px | 400 | 24.99px | Paragraphs (the most-used size by characters) |
| `{typography.button}` | 16px | 700 | 20px | Button labels |
| `{typography.link}` | 20px | 400 | 35px | Inline text links |

Other sizes by character count: 18px (second most used), 20px, 16px, 11px, 24px, 12px, 14px.

### Principles
- Hierarchy comes from weight contrast (700 against 400) and size, not from colour.
- Body copy is relatively open: 15px on a roughly 25px line.

### Note on Font Substitutes
NVIDIA-NALA is a web font served by nvidia.com. The site's declared fallbacks are Arial and Helvetica; the brand page's suggested digital substitute is a system sans stack (`-apple-system, "Segoe UI", Roboto, Helvetica, Arial, sans-serif`).

## Layout

- Desktop width 1280px; the nav content and hero text share a left edge, with the section headings of the card rows starting further left than the hero in the capture.
- Hero: left text column, right product image, tab strip along the bottom.
- Content rows: a text column (about a third of the width) and a card carousel (the rest). Card measured 410px wide and 716px tall for the first card.
- Most frequent paddings: 20px (74 elements), 10px, 15px, 30px. Gaps: 10px, 15px, 30px.

### Spacing System
Tokens are measured values: 2px, 4px, 5px, 8px, 10px, 11px, 13px, 15px, 15.12px, 20px.

## Elevation & Depth

One shadow style: `rgba(0, 0, 0, 0.3) 0px 0px 5px 0px`, measured on 74 elements (the cards). It is a small, even glow with no vertical offset. Everything else is flat; the hero uses a soft gray gradient image rather than elevation.

## Shapes

- `{rounded.none}` 0px: buttons and links, deliberately square.
- `{rounded.xs}` 2px: cards (the only non-zero radius measured, on 74 elements).
- Carousel arrow buttons are square in the capture.

## Components

### Buttons
- **button-primary**: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.none}`, padding 11px 13px, height 42px; hover `{colors.primary-hover}`.
- **button-secondary**: the "Subscribe" button measured with identical values.
- Carousel arrows: small green squares with a dark chevron.

### Links
**link**: `{colors.ink}` text, 20px regular, with a green underline and a trailing chevron in the banner.

### Cards
**card**: 2px radius, soft 5px glow, white; an image on top, a small category line ("Artificial Intelligence | Blog") in bold, a bold title and a short description in regular weight.

### Navigation
**nav**: white bar, 45px high at the measurement, dark text, items in 16px regular. The hidden "Skip to main content" link that the extractor picked up as the first nav link is an accessibility control (white, 1px high), so no nav-link typography is declared here.

## Design System Architecture

- NVIDIA publishes an open-source design system, **NVIDIA Elements** ([github.com/NVIDIA/elements](https://github.com/NVIDIA/elements), opened): Apache 2.0, with `core` (components), `themes`, `styles` (CSS utilities for layout and typography), `starters` and `cli` projects, described as for AI/ML infrastructure, robotics and autonomous vehicle applications. Its [docs catalog](https://nvidia.github.io/elements/docs/elements/) (opened) lists foundations for design tokens and themes (size and space, objects, interactions, status, color, animation, fonts, layers) but shows no hex values or type metrics. This file does not claim the nvidia.com homepage is built with Elements.
- The marketing site's own CSS exposes about 180 root variables, including colour ramps (`--color-fuchsia-700` `#8c1c55`, `--color-blue-700` `#0046a4`, `--color-purple-800` `#4d1368`, `--color-green-100`), a font-size scale (`--font-size-22`, `-44`, `-50`, `-64`) and a spacing scale (`--size-150` is `6px`, `--size-1400` is `56px`).
- Brand sources: the [NVIDIA Research brand page](https://research.nvidia.com/labs/sil/brand/main.html) lists green `#76B900`, dark green `#5A8C00` (hover) and light green `#EEF7E0` (hover tint), names NVIDIA Sans as the brand typeface and asks for clear space and no recolouring of the logo.
- Typeface delivery: NVIDIA's font stylesheet defines region-named families; NVIDIA-NALA is the one this page loads.

## Do's and Don'ts

### Do
- Put black text on green buttons; never white.
- Keep buttons square and cards at 2px radius.
- Use weight 700 for headings and button labels, 400 for body.
- Let imagery and renders supply richness; keep surfaces white or light gray.

### Don't
- Do not round buttons.
- Do not tint text with the green; green is for buttons, arrows, active indicators and link underlines.
- Do not stack heavy shadows; one 5px soft glow is the whole elevation system.
- Do not recolour or stretch the logo (per the brand page).

## Responsive Behavior

A mobile viewport (390px) was measured: the hero headline drops from 36px to 24px (`{typography.display-mobile}`) with a 30px line height. Other mobile adaptations were not measured in this pass; the capture shows desktop only.

## Iteration Guide

1. Start from a white page, `{colors.ink}` text and a square green button with black label.
2. Build content as a text column plus a card row; give cards a 2px radius and the 5px glow.
3. Use `{colors.primary-hover}` for hover on green fills.
4. Measure before adding new type sizes; the site uses 15px for body and 20px for links.
5. Re-run `node web/scripts/verify-designs.mjs --slug=nvidia`.
