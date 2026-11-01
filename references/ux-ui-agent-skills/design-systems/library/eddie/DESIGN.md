---
version: alpha
name: Eddie
category: "Tech & AI"
description: "Eddie (eddie.eco), a Québec EV-charging assistant: warm #f7f4f2 pages with black Founders Grotesk type (107.462px display, 61.3889px bold headings), lavender #d8d1ff cards with 40px corners, black 25px-rounded pill buttons 60px high that turn #b7b2ff on hover, a lime #d2e534 promo card and soft lavender shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f7f4f2"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-stone: "#e5e3df"
  surface-lavender: "#d8d1ff"
  surface-lime: "#d2e534"
  primary-hover: "#b7b2ff"
  ink-muted: "#767481"
  ink-mid: "#4d4c51"
  ink-faint: "#9a98a1"
  accent-purple: "#9891ff"
  accent-orange: "#fe7324"
  tint-sky: "#d4edf9"
  tint-beige: "#f1eae4"
typography:
  display:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 107.462px
    fontWeight: 400
    lineHeight: 85.9694px
  display-mobile:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 42.8211px
    fontWeight: 400
    lineHeight: 34.2569px
  heading:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 61.3889px
    fontWeight: 700
    lineHeight: 49.1111px
  heading-mobile:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 32px
  body:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24.2px
  button:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 17.6px
  nav:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 19.8px
  link:
    fontFamily: "\"Founders Grotesk\", sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 19.8px
rounded:
  xs: 2px
  sm: 15px
  md: 20px
  lg: 25px
  xl: 30px
  2xl: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6.5px
  s4: 7.5px
  s5: 10px
  s6: 13px
  s7: 15px
  s8: 18px
  s9: 20px
  s10: 25px
  s11: 30px
  s12: 60px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 20px
    height: 60px
    borderColor: "{colors.ink-mid}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-faint}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Eddie (https://eddie.eco/, title "Accueil - Eddie", language fr-CA) is the Québec EV-charging assistant that the page's top banner says is now part of Hypercharge: "Eddie fait maintenant partie d'Hypercharge, afin d'accroître la recharge au Québec et au Canada." The site is playful and tactile: a pale warm page, huge black grotesk headlines with a purple robot-face icon inline with the words, soft 3D renders of chargers and cars in lavender, and rounded cards everywhere.

The capture shows, from the top: the banner with a "Lire le communiqué de presse" link; a floating rounded header with an "Accueil" pill (the robot icon on a lavender square) at the left and a menu button plus a black "Ça m'intéresse" pill at the right; a centred hero "eddie [icon] votre assistant de recharge" at 107.462px; three small chips (Multilogement, Publique, Entreprise) with coloured icons; a wide rounded hero render of lavender chargers and cars; a lavender card with a 61.3889px bold title "Simplifions la mobilité électrique", a 3D car-and-tree render and the line "Soutenir l'avenir de la mobilité avec innovation."; and a map of North America with numbered lavender cluster pins and a floating white "Applications" card with App Store and Google Play badges. Further down (re-measured full-page capture) are "Nos solutions" with three alternating sections (Multilogement, Publique, Entreprise) each with a black pill button; a beige "Applications disponibles" card beside a lime card "Préparez-vous à découvrir la recharge électrique de demain." with a testimonial; and a giant footer line "L'avenir est [icon] électrique" over footer columns Solutions, Informations and Nous suivre, a QR code and the "Par Hypercharge" credit.

A cookie dialog ("Nous respectons votre vie privée", with "I understood" and "Read More") is visible in the capture; it is a consent popup and not part of the brand UI or tokens.

## Colors

Surfaces: `page-largest` #f7f4f2 (a warm "Pampas" off-white, the largest background at 3161 area units in the re-measured page), white `canvas` #ffffff (458), stone #e5e3df (840), lavender `surface-lavender` #d8d1ff ("Biloba Flower", 721), lime `surface-lime` #d2e534 ("Sulu", 359), a deeper lavender #b7b2ff ("Dull Lavender", 13, also the hover fill) and sky #89cdf3 (3, part of the map). Text is black #000000 (2665 characters), with #767481 (66), #4d4c51 (46) and #9a98a1 (21) for secondary text and navigation. `primary` #000000 is the fill of every pill button; its hover fill is #b7b2ff with black text.

The stylesheet names its palette after colours: `--color-Pampas` #f7f4f2, `--color-Beige` #f1eae4, `--color-Dawn-Pink` #ddcdbf, `--color-Iceberg` #d4edf9, `--color-Jagged-Ice` #bbe2f7, `--color-Aqua-Island` #89cdf3, `--color-Biloba-Flower` #d8d1ff, `--color-Snuff` #e5e3ff, `--color-Dull-Lavender` #b7b2ff, `--color-Medium-Purple` #9891ff, `--color-Sulu` #d2e534, `--color-Corn-Field` #eef69f, `--color-Orange` #fe7324, `--color-Manatee` #9a98a1 and `--color-Scarpa-Flow` #4d4c51. Borders are #cdcbd0 (18 elements) and #4d4c51 (9). Shadows carry a lavender tint (see Elevation).

## Typography

One family: Founders Grotesk (400 and 700, 4028 characters). Display is large and tight: the h1 is 107.462px with an 85.9694px line-height (a 0.8 ratio), weight 400, with 21.4924px bottom padding; headings are 61.3889px weight 700 on 49.1111px; at 390px the h1 is 42.8211px/34.2569px and the h2 40px/32px weight 700. Body copy is 22px/24.2px weight 400; navigation labels and small buttons are 18px weight 600 on 19.8px; links 18px weight 700; the mobile CTA is 16px weight 600 on 17.6px; inputs 16px/17.6px. No letter-spacing is applied.

Sizes by characters: 18px (1540), 22px (581), 61.3889px (181), 30px (137), 16px (120), 14px (102), 24.4px (88), 107.462px (60). Weights: 400 (3205), 600 (414), 700 (409). The stylesheet also declares Google Sans Text, Google Sans and Roboto, used by the map widget. Founders Grotesk is a commercial face; if unavailable keep the 0.8 line-height ratio on display and the 400/600/700 weights; the substitute is not measured. The variables `--fs-reg` 1.6rem, `--fs-sm` 1.4rem, `--fs-md` 1.8rem and `--fs-2xl` 3.5rem are declared.

## Layout

The page is 1280px wide and 6054px tall in the first capture. Layout is centred and generous: a 1120px-wide hero headline, a full-width rounded render, a 598px-wide text column inside the lavender card, and alternating two-column solution sections. The stylesheet declares `--grid-gap` 2rem and spacers `--spacer-xs` .5rem, `--spacer-sm` 1rem, `--spacer-smd` 1.5rem, `--spacer` 2rem, `--spacer-md` 3rem, `--spacer-xl` 6rem, `--spacer-2xl` 7rem and `--spacer-3xl` 10rem. Measured gaps: 10px (90 uses), 20px (44), 30px (16), 5px (14), 15px (8), 60px (8); paddings: 10px (29), 5px (13), 15px (11), 30px (10), 20px (9). The nav block is 80px high and 240px wide; the footer block is 923px tall with a 107.462px sign-off line.

## Elevation & Depth

Depth is soft and tinted. Eight elements carry `rgba(198, 185, 237, 0.3) 5px 5px 20px 0px` (a lavender glow offset down and right), one `rgba(198, 185, 237, 0.4) 3px 3px 5px 0px` and one `rgba(0, 0, 0, 0.3) 0px 1px 4px -1px`. The stylesheet writes these as `.5rem .5rem 2rem #c6b9ed4d`, `.3rem .3rem .5rem #c6b9ed66` and `.4rem .4rem 2rem #00000014`. The 3D renders add their own depth, and cards sit on the warm page with large radii instead of borders. Modals use `--z-modal` 300 and dropdowns `--z-dropdown` 100.

## Shapes

Everything is rounded, in tiers. Measured radii: 15px (19 elements: chips, small cards), 25px (12: pill buttons), 30px (12), 40px (10: large cards and hero panels), 20px (3), 2px (3) and 50% (1). Pill buttons are 60px high with a 25px radius. The stylesheet also declares `--radius-xxxs` .6rem, `--radius-2xs` .8rem and `--radius-sm` 2rem. Icons are rounded squares in lavender with a robot-face glyph; map pins are circles with numbers.

## Components

**Primary button** (`button-primary`): black fill, white 16px weight-600 text, 25px radius, padding 10px 20px, 60px high (155px wide on mobile, 193px for "Envoyer la demande"), 1px #4d4c51 border. Hover: fill #b7b2ff, text black, border #b7b2ff.

**Menu / secondary pill**: "Ouvrir la navigation", white fill with black border and 25px radius; hover fill #b7b2ff.

**Header** (`nav`): floating rounded capsules on #f7f4f2, with 22px/24.2px grey text (#9a98a1) and an 18px weight-600 black active label ("Multilogement").

**Chip**: small rounded pill with a coloured icon and an 18px weight-600 label (Multilogement, Publique, Entreprise).

**Card** (`card`): #f7f4f2, lavender #d8d1ff or lime #d2e534 fill, 40px radius, large type and a rendered image.

**Link** (`link`): 18px weight-700 black text such as "Lire le communiqué de presse" with a diagonal arrow.

**Input**: 48px high, 278px wide, padding 0px 15px, 16px text.

**Store badges and QR code**: black App Store and Google Play badges, and a QR code beside "Scanner pour télécharger l'application".

## Design System Architecture

No public design system or brand-guidelines page was found: the home page (https://eddie.eco/) is a JavaScript application whose static HTML only holds the title and a theme colour (#ffffff), and no navigation link to guidelines was visible in the capture. The de-facto system is the set of root variables: colour names after the palette (`--color-Pampas`, `--color-Biloba-Flower`, `--color-Sulu`), type scale (`--fs-*`, `--ff-paragraph` "Founders Grotesk, sans-serif"), spacers (`--spacer-*`), radii (`--radius-*`), grid gap and z-index layers. The consent dialog is built with classes `queso-modal c-modal`, a third-party component excluded from the tokens.

## Do's and Don'ts

Do set display text huge, black and tight (0.8 line-height) with the robot icon inline between words. Do round everything: 25px pills, 40px cards, 15px chips. Do use lavender (#d8d1ff and #b7b2ff) as the interaction and card accent, and lime #d2e534 for one promotional card. Do give cards a soft lavender-tinted shadow rather than a grey one.

Don't use hard black shadows or square corners. Don't use purple for body text; text is black or grey. Don't treat the cookie dialog as a component. Don't add more than one saturated card colour per screen section. Don't set the lavender hover on large cards: hover was measured on buttons.

## Responsive Behavior

At 390px: the h1 is 42.8211px/34.2569px (330px wide, 131px tall), the h2 40px/32px weight 700 (360px wide), body 22px/24.2px (360px wide, 145px tall) and the CTA is 16px with padding 10px 20px, 155px by 60px. Mobile sizes by characters: 18px (1115), 22px (630), 35px (123), 16px (119), 14px (102), 42.8211px (60), 39.1972px (59), 40px (58). The nav block keeps 22px text, 240px by 80px. Grid reflow of cards and the map is not measured.

## Iteration Guide

Start from page-largest #f7f4f2, canvas #ffffff, ink #000000, lavender #d8d1ff and hover #b7b2ff. Compose a huge tight headline with an inline icon, rounded capsule header, a lavender 40px card with a 3D render, black pill buttons (25px radius, 60px high), and a lime promo card. Verify shadows use the lavender rgba(198, 185, 237, 0.3) glow, and keep cookie UI out of the system.
