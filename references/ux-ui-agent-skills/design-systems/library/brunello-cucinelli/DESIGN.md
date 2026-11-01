---
version: alpha
name: Brunello Cucinelli
category: "Luxury"
description: "Brunello Cucinelli's homepage is a white (#ffffff), near-monochrome editorial gateway: light IvyPresto serif headlines at 40px, GTEesti sans at 18px, charcoal ink #262626, no filled buttons or radii, tiny tracked underlined links, and warm photography as the only colour."

colors:
  canvas: "#ffffff"
  ink: "#262626"
  primary: "#262626"
  ink-muted: "#989898"
  hairline: "#f2f2f2"
typography:
  display:
    fontFamily: IvyPresto
    fontSize: 40px
    fontWeight: 300
    lineHeight: 50px
  display-mobile:
    fontFamily: IvyPresto
    fontSize: 30px
    fontWeight: 300
    lineHeight: 40px
  nav:
    fontFamily: GTEesti
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 2.4px
    textTransform: uppercase
  body:
    fontFamily: GTEesti
    fontSize: 18px
    fontWeight: 300
    lineHeight: 28px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 10px
  s3: 16px
  s4: 20px
  s5: 25px
  s6: 26px
  s7: 30px
  s8: 54px
  s9: 70px
  s10: 80px
components:
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    borderColor: "{colors.hairline}"
---

# Brunello Cucinelli

## Overview

The measured page is brunellocucinelli.com/en/, and it is not a shop front. It is a short, editorial gateway of five full-width panels in a two-column grid, each a portal to a different part of the company: philosophy ("Beauty is the symbol of the morally good", attributed to I. Kant, with an EXPLORE link), the company's AI initiative ("Where Human and Artificial Intelligence meet", DISCOVER MORE), the online boutique ("Our Taste, our Collections", ONLINE BOUTIQUE), the AI-assisted boutique ("A personalised journey into the style of Brunello Cucinelli", DISCOVER THE NEW WEBSITE) and investor relations ("The company and the value of human dignity", VISIT THE WEBSITE). The page text was confirmed by opening the official homepage.

Visually it is pale and warm: a white canvas (`#ffffff`), a single dark ink (`#262626`) and one mid-grey (`#989898`), with a very light grey (`#f2f2f2`) used for the hairline and for one panel. Colour comes from the photography (a plaster bust on a peach wall, two models in a sand-coloured quarry, a monochrome memorial with arches and trees) and from pen-style line illustrations on the AI panels. There is no brand colour in the interface at all; every link is a tiny uppercase label with an underline.

Headlines are set in a light, high-contrast serif at large sizes and centred over the images, with a small sans eyebrow line above (for example "Philosophy, History, Company & Solomeo"). The voice is humanist and philosophical rather than promotional: quotations, dignity, taste. The brand's own site presents the company as a philosophy-driven enterprise rather than a retailer.

## Colors

- **Canvas** `#ffffff`: the page background, header and footer.
- **Ink** `#262626`: text colour for the nav, footer and light-panel headings. It is also the `primary` role: the site has no filled button, so the closest "action" colour is the same dark ink used for underlined text links.
- **Ink muted** `#989898`: secondary text, such as the copyright line and some footer links.
- **Hairline** `#f2f2f2`: a 2px border under the header area and above the legal footer, and the soft grey background of a panel.
- White (`#ffffff`) is also the headline colour on photographic panels, so it appears as text where the canvas would be invisible; the extractor also found a translucent black (`#00000054`) overlay that darkens the image panels for legibility.
No semantic (error, success) colours are used on this page. The page's Bootstrap-style variables define a conventional set of yellow, green, red and so on, which are framework defaults not seen in the interface and are not declared here.

## Typography

Three families are loaded: `GTEesti` (300, 400, 600) for UI and body, `IvyPresto` (300) for headlines, and `TTLivretText` (300), loaded but little used.

- **Display**: IvyPresto 300, 40px / 50px, sentence case. This is the headline on every panel. At a 390px viewport it is 30px / 40px.
- **Body**: GTEesti 300, 18px / 28px (the quotation attribution and descriptive lines); footer links are GTEesti 300 at 14px.
- **Nav and labels**: GTEesti 400, 12px / 18px, uppercase with 2.4px letter-spacing ("MENU", "EXPLORE", "ONLINE BOUTIQUE").
A hidden 100px IvyPresto h1 exists in the DOM with no text; it is a measurement artefact and is overridden (see Design System Architecture). Both are named in the page's own font declarations and are not freely available web fonts as far as the page shows; reasonable substitutes are Jost or Inter for the sans and Cormorant Garamond (weight 300) for the headline serif.

## Layout

The page is only 2176px tall at 1280px. The header is a thin white bar (about 94px) with MENU at left and the crest and BRUNELLO CUCINELLI wordmark centred. Below it, panels are half-width squares-ish blocks, alternating image and illustration, edge to edge with no gutters. Panel content is centred in each half. The footer sits on white with two columns of links at left, social icons and the language label at right, and a legal line below a hairline. Spacing values measured: 4, 10, 16, 20, 25, 26, 30, 54, 70 and 80px. The page declares `--headerHeight` 7.3rem and `--footerHeight` 5.15rem, and breakpoints at 1024px and 2100px.

## Elevation & Depth

Flat and photographic. No shadows were measured; the only depth device is the translucent dark overlay on photographic panels so white serif text reads. Panels abut each other with no borders; the one hairline is the 2px `#f2f2f2` rule in the footer.

## Shapes

No rounded corners are defined (`none`, 0px): the measured border radius is 0px on every element sampled, and every element, including images and underlined links, is square. Do not round anything. The visual shapes that do exist are the crest and the architectural motifs in the photography.

## Components

- **Header**: white background, `#262626` text, MENU label in GTEesti 12px uppercase with 2.4px tracking at left; crest and wordmark centred; 94px high.
- **Text link CTA**: tiny uppercase label (12px, 2.4px tracking) with an underline, centred below each headline; white on photographs, ink on light panels. It is the only call-to-action style; there is no filled or outlined button.
- **Panel**: half-width block with a centred stack of eyebrow (sans, 18px), headline (serif, 40px) and link.
- **Footer**: link columns in GTEesti 14px `#262626`, copyright line in `#989898`, social icons, language label, 2px hairline border `#f2f2f2`.

## Design System Architecture

No public Brunello Cucinelli design system or token package was found. The page is built on a Bootstrap-derived stylesheet, evidenced by its root variables (`--light`, `--dark`, `--gray-dark`, `--breakpoint-md`, `--font-family-sans-serif`) with the framework's stock colours left in place, plus site-specific `--headerHeight` and `--footerHeight`. Brand styling therefore lives in compiled classes for the two custom families and the near-monochrome palette, not in tokens. Role-override note: the extractor's h1 was an empty 100px element, so the h1 role was reassigned to the visible h2 (40px IvyPresto) per `SOURCES.json`. Source of record: https://www.brunellocucinelli.com/en/ (opened).

## Do's and Don'ts

Do:
- Leave generous vertical space around each headline and keep copy lines short.
- Let large light serif headlines carry the page, centred on photography.
- Use tiny, widely tracked uppercase underlined links as the only call to action.
- Keep the interface white, charcoal and one grey; let images supply colour.
- Use quotations and calm declarative copy.

Don't:
- Do not add filled buttons, brand colours or icons as decoration.
- Do not round corners or add shadows.
- Do not use bold serif; the measured serif weight is 300.
- Do not use the framework's default yellow, green or red in the interface.

## Responsive Behavior

At 390px the headline drops from 40px to 30px (line height 50px to 40px) and the hidden h1 from 100px to 50px, both IvyPresto 300. Mobile panel grid and header layout were not measured. The system's breakpoints are 1024px and 2100px, so large screens above 2100px get their own scaling; verify at 390, 768, 1024 and 1280.

## Iteration Guide

1. Set white canvas, `#262626` ink, IvyPresto 300 at 40px and GTEesti 300 at 18px.
2. Compose panels as image or illustration with an eyebrow, a centred serif headline and one tiny underlined link.
3. Keep the header minimal: MENU at left, crest and wordmark centred.
4. Use `#989898` only for secondary or legal text and `#f2f2f2` for hairlines and soft panels.
5. Run `node web/scripts/verify-designs.mjs --slug=brunello-cucinelli` after each edit.
