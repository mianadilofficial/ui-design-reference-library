---
version: alpha
name: "Don Molinico"
category: "Food & Beverage"
description: "Don Molinico is a Navarra piquillo-pepper brand whose site uses a cream #fbf5e7 canvas, signal red #d70321 type, gold #cba058 button labels, one uppercase condensed face (super-med) with 192px and 166.4px headlines, 64px square buttons and no shadows."
colors:
  canvas: "#fbf5e7"
  ink: "#d70321"
  primary: "#d70321"
  on-primary: "#cba058"
  accent-yellow: "#ffb82e"
  accent-dark: "#9f0005"
  placeholder: "#363636"
typography:
  display:
    fontFamily: super-med, Helvetica, sans-serif
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 25.6px
    textTransform: uppercase
  display-mobile:
    fontFamily: super-med, Helvetica, sans-serif
    fontSize: 80px
    fontWeight: 400
    lineHeight: 68px
    textTransform: uppercase
  nav:
    fontFamily: super-med, Helvetica, sans-serif
    fontSize: 20.48px
    fontWeight: 400
    lineHeight: 20.48px
    textTransform: uppercase
  hero-xl:
    fontFamily: super-med, Helvetica, sans-serif
    fontSize: 192px
    fontWeight: 400
    textTransform: uppercase
  hero-l:
    fontFamily: super-med, Helvetica, sans-serif
    fontSize: 166.4px
    fontWeight: 400
    textTransform: uppercase
rounded:
  xs: 19.2px
  none: 0px
spacing:
  s1: 10px
  s2: 17.07px
  s3: 19.19px
  s4: 19.2px
  s5: 24.58px
  s6: 25.6px
  s7: 30px
  s8: 38.4px
  s9: 40px
  s10: 51.2px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 17.0667px 38.4px
    height: 64px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 17.0667px 38.4px
    height: 64px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 25.6px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 76.8px 0px 30.72px
---

# Don Molinico

## Overview

Don Molinico is a Navarra, Spain, producer of stuffed piquillo peppers and related preserves; the measured home page, `https://www.donmolinico.es/`, is titled "Don Molinico | Pimientos del piquillo rellenos" and is written in Spanish (the document language attribute in the extraction reads `en`). The delivered HTML is a small JavaScript shell ("Loading...", meta description "© FP [U+273A] V — 2.0"), so the page content below comes from the rendered extraction and its capture. Navigation is INICIO, PRODUCTOS, NUESTRA HISTORIA and CONTACTO, laid out on both sides of a red logo plaque; the footer repeats those links and adds Instagram, YouTube and Facebook.

The identity is bold, retro-modern and unmistakably Spanish: a cream canvas, a saturated signal red used for nearly all type, gold for the small navigation and button labels, and enormous condensed uppercase headlines. The hero is a top-down food photograph of a Navarra table (jars and red tins of peppers, cheese, cured meats, olives, painted ceramic plates) with the cream headline "DESDE NAVARRA A TODA ESPAÑA" set across it in huge condensed capitals, small flanking labels "DESDE 1987" and "NUEVA TRADICIÓN", and a hanging red plaque at top center carrying a gold DON MOLINICO logo. The page continues with a centered section "LA IMPORTANCIA DEL PIMIENTO", three tilted rounded-corner photographs of dishes, and a giant red statement "PRUEBA EL SABOR DE LA NUEVA TRADICIÓN".

The voice is warm, humorous and brand-confident: "EN DON MOLINICO HEMOS VUELTO. RENOVADOS." and "PORQUE NO TENEMOS ABUELA, PERO TENEMOS SU RECETA." Buttons say "PUNTOS DE VENTA" (where to buy) and "VEN A PROBAR" (come and try). Everything is uppercase. A consent banner (iubenda) was present and hidden before measurement; it is not brand UI.

## Colors

The site declares its palette as `--c-*` custom properties, which match the measured values.

- **Canvas `#fbf5e7`**: warm cream (`--c-bg`), the dominant background (2,680 area units); also the headline color over the photograph (`--c-text-alt`, 46 characters).
- **Ink `#d70321`** and **primary `#d70321`**: signal red (`--c-accent`); 923 of the measured characters, the button fill, the plaque and the giant statements. The page sets `--text-color` to this red.
- **On-primary `#cba058`**: gold (`--c-secondary`), the text color of the red buttons, the navigation labels and the footer (181 characters), over a 1,101-unit gold background area.
- **Accent yellow `#ffb82e`**: an orange-yellow background measured with a very large area weight (1,024 units); the extraction does not name its element, so its role is not assigned.
- **Accent dark `#9f0005`** (`--c-accent-dark`) and **placeholder `#363636`** (`--c-placeholder`) are declared but not recorded on screen.

The palette is therefore three colors plus a deep red: cream, red and gold, with food photography supplying all other color. No shadows, gradients or tints were measured.

## Typography

One condensed grotesque, declared as `super-med` (a second face, `super-reg`, is also loaded), carries all 1,150 measured characters at weight 400 with `text-transform: uppercase` throughout.

- **Display**: super-med 25.6px / 25.6px, uppercase: section headings, body statements and button labels share this size (body lines use 28.16px line height).
- **Display mobile**: super-med 80px / 68px, the hero headline on the 390px pass.
- **Nav**: super-med 20.48px / 20.48px, uppercase.
- **Hero XL and hero L**: the extraction's character-weighted sizes include 192px (23 characters) and 166.4px (31 characters), which are the oversized headline words ("DESDE", "NAVARRA", "PRUEBA EL SABOR") in the capture; line heights and the mapping of sizes to lines were not recorded.

The body role measured 25.6px; there is no small text size in the measured list below 20px except the mobile body at 20px / 22px. Because the whole page is one face and one weight, hierarchy comes from scale alone (192px, 166.4px, 25.6px, 20.48px) and from color (red on cream, cream on photo, gold on red).

## Layout

The desktop pass measured 1280px wide and a 6,503px page. The root variables define the grid: content width `--width: 90vw` centered with `--offset`, `--gutter: 2rem`, `--columns: 4` and a derived column set `--col-1` to `--col-12`, and a full-height unit `--height: 100svh`. The header measured 1280 × 74px with 25.6px padding, links left and right of a central plaque. Sections are tall and centered: the hero is a viewport-height photograph, text blocks are narrow (the intro paragraph measured 792px wide), the photo trio overlaps and tilts, and the closing statement occupies several lines of oversized type. The footer measured 1280 × 1024px with padding `76.8px 0px 30.72px`, on the cream canvas with gold links.

## Elevation & Depth

Flat. No box shadow was recorded. Depth comes from overlap and rotation: the three photographs are tilted and overlap one another, the logo plaque hangs over the hero photograph, and headline words sit directly on the image. There are no borders other than a single red border measured on one element.

## Shapes

Shapes are mostly rectangles with one soft rounded exception: the three dish photographs have rounded corners measured at 19.2px (3 elements). The root variable `--radius: 2rem` is declared, but the measured corners are 19.2px, so the declared value is not what was recorded on screen. Buttons measured 0px radius, 64px tall, and the logo plaque is a plain red rectangle. The extraction recorded a clip-path and a scale transform on the buttons, which are animation states and not shape tokens.

## Components

- **Primary button** (`button-primary`): red `#d70321` fill, gold `#cba058` text, super-med 25.6px uppercase, 0px radius, padding `17.0667px 38.4px`, 64px tall; "PUNTOS DE VENTA" measured 193px wide and "VEN A PROBAR" 167px wide. On mobile the button measured 20px text, 151 × 51px, with `13.3333px 30px` padding.
- **Nav link**: gold 20.48px uppercase, the current item underlined in the capture.
- **Logo plaque**: red rectangle with a gold DON MOLINICO wordmark, "DESDE 1987" and "NUEVA TRADICIÓN", at top center.
- **Photo card**: tilted image with 19.2px corners.
- **Footer**: cream fill, gold uppercase links.

## Design System Architecture

No public design system or brand guideline was found: the site is a JavaScript application whose delivered HTML exposes no links, and nothing on the rendered page points to guidelines. The de-facto system is a small set of root variables (30 recorded): `--c-bg`, `--c-accent`, `--c-accent-dark`, `--c-secondary`, `--c-text-alt`, `--c-placeholder`, `--radius`, `--columns`, `--gutter`, `--width`, `--offset` and the `--col-n` series. Fonts are the two custom faces `super-med` and `super-reg`. Source: `https://www.donmolinico.es/`.

## Do's and Don'ts

- Do set everything in uppercase condensed type, and let scale carry the hierarchy.
- Do use red `#d70321` on cream `#fbf5e7`, cream on photography and gold `#cba058` on red.
- Do use full-bleed, crowded food photography with bright color.
- Do write short, witty Spanish copy that mentions heritage ("DESDE 1987", "NUEVA TRADICIÓN").
- Don't add shadows, gradients or extra colors; none were measured.
- Don't round buttons; use rounded corners only on the tilted dish photographs.
- Don't document the consent banner as brand UI.

## Responsive Behavior

The 390px pass recorded: the h1 "DESDE NAVARRA A TODA ESPAÑA" at 80px / 68px (a 390 × 272px block), body text at 20px / 22px, and the "PUNTOS DE VENTA" button at 20px with 151 × 51px size. A navigation element was not found on the mobile pass. Breakpoints, the mobile menu and the grid column count at small widths were not measured.

## Iteration Guide

1. Set canvas `#fbf5e7`, ink and primary `#d70321`, accent text `#cba058`, and load the condensed face at weight 400, uppercase.
2. Build a hero photograph with a red plaque at top center and a huge cream headline.
3. Alternate centered red paragraphs at 25.6px with giant statements and tilted rounded photo cards.
4. Make buttons 64px tall, red, square, with gold labels.
5. End with the cream footer and gold links.
6. Run `node web/scripts/verify-designs.mjs --slug=don-molinico` after edits.
