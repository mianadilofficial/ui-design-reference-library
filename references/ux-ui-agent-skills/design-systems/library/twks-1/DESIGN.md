---
version: alpha
name: "twks"
category: "Portfolio"
description: "twks, an independent creative agency in Geneva: a stark black-on-white page (#ffffff, #000000, grey #8c8c8c) set entirely in GT Standard, with a 52.8px weight-600 statement headline at -0.528px tracking, 20px body, hairline rules, and every element rendering with square corners (0px)."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-3: "#8c8c8c"
typography:
  display:
    fontFamily: "\"GT Standard\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 52.8px
    fontWeight: 600
    lineHeight: 52.8px
    letterSpacing: "-0.528px"
  heading:
    fontFamily: "\"GT Standard\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.2px
rounded:
  none: 0px
spacing:
  s1: 9px
  s2: 10px
  s3: 15px
  s4: 60px
  s5: 90px
  s6: 100px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    padding: 10px 0px
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 100px 10px 10px
    transform: matrix(1, 0, 0, 1, 0, 640)
---

## Overview

The twks English home page (https://twks.ch/en, title "Creative communications agency in Geneva | twks", document language attribute `fr`) presents "Independent creative agency based in Geneva since 2011", a Swiss agency that builds "brand, digital presence and campaigns" for local and international brands and institutions. The first screen is a full-width colored hero panel (a mauve field holding a rendered, inflated-looking poster object for an electronic-music festival) with a minimal navigation laid across its middle: "twks" at far left, "projects", "agency", "services", "insights" in a small group, the tagline "swiss creative agency" in the center, and "contact" at far right. The statement paragraph follows on white in very large type: "Independent creative agency based in Geneva since 2011. We partner with local and international brands and institutions to build their brand, digital presence and campaigns."

Below come a "What we do" row with a hairline rule above it and a right-aligned paragraph beginning "When every brand follows the same codes, they all end up looking alike. The strongest ones are built from what is fundamentally true to them, not from what is expected of them." Two ruled list rows, "Agency" and "Career", end in arrows. A "Case studies" block follows (an EPFL mental-health project and a bold yellow typographic poster for a library), then "Latest publications" and "Engage us". The footer is black and reads "Contact us", "Tell us about your project", "Social media", "Address" ("Rue de Berne 63 1201 Genève, Suisse"), "Subscribe to the newsletter" and "© 2026".

The page measured 5,404px tall at 1,280px width. It is a typographic, almost interface-free site: no buttons, cards or shadows, one typeface, one body size, and all color delivered by project imagery.

## Colors

The interface uses three values only:

- **canvas `#ffffff`**: page background, largest area.
- **ink `#000000`** (and **primary `#000000`**, since the site has no separate action color): all text on white, rules and arrows, and the footer fill.
- **ink-3 `#8c8c8c`**: grey text, used for the "All projects" link and the secondary line under case-study titles ("Making space for mental health").

A fourth measured value, `#0000004d` (30% black), appears among background areas as an image overlay. White text (#ffffff) is used on the black footer and over the hero panel. The stylesheet's root variables (325 of them) come from Tailwind's default palette (`--color-purple-200`, `--color-zinc-100`, `--color-rose-200`, `--color-slate-200`, `--color-sky-500`, `--color-pink-500`, `--color-violet-600`, `--color-orange-600`, all in oklch); these are framework defaults and are not brand colors, and none is tokenized.

Color on this site lives only in the project imagery (the mauve hero, the coral, pink, mint and yellow cards of the case studies); none of those image colors was measured as interface color.

## Typography

One family: **GT Standard**, loaded at 400, 500 and 600. The stack ends in `ui-sans-serif, system-ui, sans-serif` plus emoji fallbacks.

| Token | Size / line height | Weight | Letter spacing |
|---|---|---|---|
| display | 52.8px / 52.8px | 600 | -0.528px |
| heading | 20px / 24px | 400 | 0.2px |

The 52.8px statement paragraph is measured as the "h1" role although it is a `p` element, 1,260px wide and 211px high (four lines at a line height equal to the font size, a 1.0 ratio). All other text is 20px / 24px at weight 400 with 0.2px letter spacing: the nav, the h2 "Case studies", the h3 "EPFL", the body paragraph (413px wide) and the footer. A 16px size also appears (grey captions). By characters the sizes rank 20px, 52.8px and 16px; the weights are 400, 500 and 600.

At 390px the extractor measured the tagline "swiss creative agency" at 18px / 21.6px (letter spacing 0.18px) and the body paragraph at 22px / 26.4px; the mobile by-character sizes are 18px, 22px and 36px. Because the measured mobile "h1" is the tagline and not the statement paragraph, no display-mobile token is declared.

No font substitute is documented because GT Standard is loaded by the site.

## Layout

The layout is a strict two-part grid on a 1,280px viewport. Labels sit in the left column ("What we do", "Case studies") and prose in the right. The nav is 42px tall and 1,280px wide and sits on top of the hero panel. The statement paragraph spans nearly the full width (1,260px). The right-aligned body copy is 413px wide. Case-study tiles fill the full width in two columns with a caption under each tile. The footer is 800px tall on black with 100px top padding and 10px side and bottom padding.

Measured paddings are 10px, 9px, 90px and 100px; gaps are 10px, 100px, 15px and 60px. The spacing tokens are 9, 10, 15, 60, 90 and 100px. Thin rules separate "What we do" and the list rows; the rule color was not recorded in the extraction.

## Elevation & Depth

Nothing is elevated: no box shadows were measured. Depth is photographic (the inflated poster object in the hero, 3D renderings in case studies). The only layer effect is a 30% black overlay (#0000004d) on imagery.

## Shapes

`desktop.frequencies.borderRadii` in the extraction is empty: every rendered element has a computed radius of 0px. Image tiles, rules, the footer and the hero panel are square-cornered; the rounded token is `none: 0px`. The small inflated-object artwork has rounded forms inside the image itself, but that is raster artwork, not interface.

## Components

**Navigation**: transparent text-only row, 20px / 24px white (over the hero), with "contact" aligned right.

**Link row** (`link`): black 20px text, 10px vertical padding, 413px wide, ruled above and below, with a trailing arrow glyph ("Agency →", "Career →").

**Footer**: black (#000000) with white 20px text, 100px top padding.

**Case-study tile**: full-column image with a title in 20px black and a grey subtitle (#8c8c8c). Radius and padding were not detected.

There are no buttons, inputs or cards in the extraction.

## Design System Architecture

No public design system or brand guideline exists for twks: the home page https://twks.ch/en, opened with WebFetch, contains no link to brand guidelines. The CSS is Tailwind-based: the 325 root variables are Tailwind v4 theme variables (`--color-*` in oklch, `--container-md: 28rem`, `--blur-lg: 16px`, `--tw-inset-shadow-alpha: 100%`), so the shipped CSS declares no brand token layer among the measured root variables. The de-facto system is therefore one typeface, two text sizes plus a display size, and black and white.

## Do's and Don'ts

- Do use GT Standard for everything, 20px / 24px for text and 52.8px / 52.8px at 600 for statements.
- Do keep the interface black on white with grey #8c8c8c for secondary lines.
- Do use hairline rules and arrow glyphs for list rows.
- Do let project imagery supply all color.
- Don't add buttons, shadows, rounded corners or accent colors.
- Don't use Tailwind's default palette variables as brand colors.
- Don't use more than the measured text sizes.

## Responsive Behavior

Measured at 390px: the tagline is 18px / 21.6px with 0.18px tracking, the body paragraph is 22px / 26.4px, and 36px appears among the by-character sizes (18px, 22px and 36px are the full list). The body paragraph block is 307px wide and 343px high at that width. Nav arrangement and column changes at mobile width were not measured.

## Iteration Guide

1. Build on #ffffff and #000000 with #8c8c8c for captions.
2. Set a 52.8px / 52.8px weight-600 statement at -0.528px tracking, then everything else at 20px / 24px.
3. Use ruled link rows with arrows instead of buttons.
4. Keep all corners at 0px and avoid shadows.
5. Re-gate with `node web/scripts/verify-designs.mjs --slug=twks-1`.
