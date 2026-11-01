---
version: alpha
name: Schneider Electric
category: "Energy & Climate"
description: "Schneider Electric global corporate site: Arial Rounded MT for SE type, green #3dcd58 primary from --se-primary, grey #f0f1f2 page body on #fcfcfc canvas, white cards with 8px radius and #e6e6e6 border, dark product-render panels at 16px radius."
colors:
  canvas: "#fcfcfc"
  page-body: "#f0f1f2"
  ink: "#000000"
  primary: "#3dcd58"
  on-primary: "#ffffff"
  action-blue: "#00a1e0"
  surface-2: "#ffffff"
  surface-3: "#e6f1f6"
  ink-2: "#5c6466"
  ink-3: "#eeeeee"
  ink-4: "#004d78"
  ink-5: "#626469"
  hairline: "#e6e6e6"
typography:
  display:
    fontFamily: "\"Arial Rounded MT for SE\", \"Arial Rounded MT Fallback\", \"Arial Fallback\", Arial, system-ui, -apple-system, sans-serif"
    fontSize: 25px
    fontWeight: 400
    lineHeight: 35px
  display-mobile:
    fontFamily: "\"Arial Rounded MT for SE\", \"Arial Rounded MT Fallback\", \"Arial Fallback\", Arial, system-ui, -apple-system, sans-serif"
    fontSize: 18px
    fontWeight: 700
  body:
    fontFamily: "\"Arial Rounded MT for SE\", Arial, system-ui, -apple-system, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 56px
components:
  link:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    typography: "{typography.display-mobile}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline}"
---

# Schneider Electric

## Overview
The measured page is the global corporate site of Schneider Electric (se.com/ww/en/, 1280px wide, 3354px scroll height). It is a quiet, grey-and-white editorial layout with large dark product-imagery panels. At the top a light grey band (#f0f1f2) carries the welcome line "Welcome to our corporate site. Looking for products? Select your location." in 25px regular grey (#626469) with the language links "ENGLISH | FRENCH" in blue. Four news cards follow (2026 Q3 revenues, NVIDIA GTC Berlin, New Energy Landscape, and a TIME / Statista "Ranked #1" sustainability recognition), each with a 16:9 image on top, a bold 18px title and a 14px description. Three tall dark panels with 3D-rendered electrical equipment (software-defined medium-voltage switchgear, NetShelter Power Rack 800VDC, software-defined LV power distribution) glow with the brand's green, followed by text-only article teasers with small pale-blue category chips (From our CEO, Building Decarbonization, Energy Resilience, Energy & Industrial Intelligence), and a charcoal "Recognized for innovation" band with Fast Company, TIME and Gartner marks. In the capture, text on the dark panels overlaps (a rendering artifact of the capture, not a design intent) and the global header is not visible.

Imagery and voice: the news thumbnails mix a green gradient title card ("Advancing Energy Tech, Third Quarter 2026 Revenues"), a blue AI-themed render, an isometric green-grid illustration of a data-center and wind-turbine landscape, and an amber-toned architectural photograph with a TIME badge. The product panels are dark studio renders on near-black with soft green rim light, which ties the imagery to the green primary without using it as a fill. Copy is plain and corporate: factual titles such as "Release on October 16, 2026 at 7.30 am CET", and article teasers framed as insights ("Why 75% of retrofit obstacles never show up in a cost-benefit model"). Density is moderate, with generous gutters and a clear separation between news (cards), products (panels) and thought leadership (text list).

## Colors
- Canvas: #fcfcfc, the largest background (weight 1523); cards and panels use #ffffff; the page-body wash is #f0f1f2; pale sky blue #e6f1f6 is used for chips.
- Primary: #3dcd58, Schneider's green, published in the site's own root variables as `--se-primary` (with `--se-primary-hover: #32ad3c`, `--se-primary-selected: #0a9a25`, `--se-primary-contrast: #fff`). The generator selected the blue #00a1e0 (14 characters of link text) as primary; it is kept as action-blue, since the green is the declared brand primary and appears in the equipment imagery.
- Ink: #000000 headings and body (1485 characters); #5c6466 secondary text (675); #626469 for the welcome line (`--se-standard`); #004d78 deep blue for category chip text; #eeeeee text on dark panels.
- Hairline: #e6e6e6 (`--se-divider`) card borders.
- Other root-published roles (not all seen rendered): secondary #42b4e6, link #0087cd, information #0087cd, warning #e47f00, error #dc0a0a, success #3dcd58.

## Typography
One family is used on all 2897 counted characters: "Arial Rounded MT for SE" (a licensed webfont), with fallbacks "Arial Rounded MT Fallback", Arial and the system stack. The loaded-font list was empty in the extraction, so face loading is not itemized.
- Display: 25px, weight 400, line height 35px (the welcome sentence); on the 390px mobile pass the first heading is 18px, weight 700.
- Body: 16px, weight 400 (1848 characters at 16px); card titles 18px bold (677 characters); descriptions 14px (292); chips 12px (6).
Headings are sentence case, never uppercase, except the "ENGLISH | FRENCH" links.

## Layout
A grey page body holds white content bands inset from the viewport edges; the card row is a four-up grid (cards 274px wide, 366px tall in the measurement) and the dark feature panels are full-content-width rounded blocks stacked with small gaps. Spacing values: 4px, 8px, 12px, 16px, 24px, 32px and 56px. The text-only article list sits on the #fcfcfc canvas with one-line titles; the recognition band is a dark rounded block with three columns separated by vertical rules.

## Elevation & Depth
Two shadows recorded: `rgba(9,11,12,0.12) 0 8px 16px 0` (a floating panel) and `rgba(33,33,33,0.15) 0 2px 5px 0`. Cards are mostly flat with a 1px #e6e6e6 border; the sticky header region at the top edge shows a soft shadow in the capture. Root variables define `--se-shadow: #0f0f0f33` and `--se-overlay: #0f0f0f66` for overlays.

## Shapes
Measured radii: 8px (weight 14), 9999px (5, pills/chips), 16px (4) and 4px (1). Cards use 8px with a #e6e6e6 border; large dark feature panels use the 16px step; category chips are fully rounded.

## Components
- **Card**: white (#ffffff), 8px radius, 1px solid #e6e6e6, 18px bold title in #000000, 14px description.
- **Chip**: pill (9999px), pale blue (#e6f1f6) background with #004d78 12px text.
- **Language links**: #0075a3, 16px, underline on hover (measured hover: text-decoration none to underline).
- **Feature panel**: dark, rounded, with product render and white 16px caption with bold title.
- **Recognition band**: charcoal (#333333 background area) with white centered captions.
- **Link component (token)**: white surface, black bold 18px text.
No primary button was detected on this page, so button tokens are not declared.

## Design System Architecture
The site exposes a named token layer in the page root: `--se-primary`, `--se-secondary`, `--se-standard`, `--se-alternative`, each with `-hover`, `-selected` and `-contrast` variants, plus semantic roles (`--se-success`, `--se-warning`, `--se-error`, `--se-information`), `--se-border`, `--se-divider`, `--se-disabled`, `--se-link-color`, backgrounds (`--se-background-standard: #f7f7f7`, `--se-background-footer: #e7e6e6`) and RGB triplets for each. A parallel `--quartz-color-*` and `--color-*-qds` set indicates a design system called Quartz (QDS in variable names); no public documentation for it was opened. The theme also carries Tailwind-style variables (`--tw-ring-color`). No brand-guidelines link was found on the home page when it was scanned.

## Do's and Don'ts
Each rule here is derived from measured values or published root variables, not from outside guidance. Rendered-pixel measurements and the root-variable table agree on neutrals, which is why the neutral rules are stated firmly.
- Do take roles from the `--se-*` variables: green for primary, blue #0087cd for links and information.
- Do keep surfaces neutral (#fcfcfc, #ffffff, #f0f1f2) and let imagery carry the green glow.
- Do set type in Arial Rounded MT for SE with sentence-case headings.
- Don't present the capture's overlapping caption text as design.
- Don't use hex greys outside the measured set.
- Don't give cards radii other than 8px or 16px.

## Responsive Behavior
Scope note: the extraction ran a desktop pass at 1280px and a mobile pass at 390px; nothing else was captured for this page.
Only the 390px mobile pass was measured: its first heading is the card title "2026 Q3 Revenues" at 18px weight 700 (21px high). Nav, grid and breakpoint behavior were not measured.

## Iteration Guide
Order of work: set the root variables first (primary, secondary, standard, alternative with hover/selected/contrast), then the neutral surfaces, then the type scale, then the card, chip and panel components, and last the imagery. When in doubt about a role, read the published `--se-*` variable instead of sampling a rendered pixel, because several roles (secondary, warning, error) are defined but not visible on this page.
1. Tokens: canvas #fcfcfc, ink #000000, primary #3dcd58, page-body #f0f1f2, hairline #e6e6e6.
2. Type: Arial Rounded (or Arial) 16px body, 18px bold card titles, 25px intro.
3. Cards: white, 8px radius, 1px #e6e6e6.
4. Add dark rounded feature panels with product renders and green glow.
5. Run `node web/scripts/verify-designs.mjs --slug=schneider-electric`.
Not measured: header/nav, dark mode, motion, breakpoints other than 390px.
