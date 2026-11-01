---
version: alpha
name: Telefónica
category: "Design Systems"
description: "Telefónica's corporate site (telefonica.com/es) pairs a vivid electric blue #0066ff with deep navy ink #031a34 on white, using the Telefonica Sans family in light, regular, medium and demibold cuts, 20px to 40px rounded cards on pale #f2f4ff tint, 100px pill outline buttons with 0.55px-tracked 11px uppercase labels, and full-bleed blue photographic heroes."
colors:
  canvas: "#ffffff"
  ink: "#031a34"
  primary: "#0066ff"
  surface-tint: "#f2f4ff"
  ink-secondary: "#414b61"
  ink-muted: "#58617a"
  hairline: "#b0b6ca"
  primary-hover: "#0048b4"
  surface-navy: "#022559"
  surface-blue-soft: "#e0edff"
typography:
  display:
    fontFamily: Telefonica-sans-light
    fontSize: 30px
    fontWeight: 400
    lineHeight: 38px
    letterSpacing: 0.3px
  display-mobile:
    fontFamily: Telefonica-sans-light
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.2px
  heading:
    fontFamily: Telefonica-sans-regular
    fontSize: 28px
    fontWeight: 400
    lineHeight: 35px
  subheading:
    fontFamily: Telefonica-sans-medium
    fontSize: 18px
    fontWeight: 400
    lineHeight: 22.4px
  body:
    fontFamily: Telefonica-sans-regular
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 20.16px
    letterSpacing: 0.128px
  nav:
    fontFamily: Telefonica-sans-regular
    fontSize: 12px
    fontWeight: 400
  link:
    fontFamily: Telefonica-sans-medium
    fontSize: 17px
    fontWeight: 400
    lineHeight: 17px
  button-secondary:
    fontFamily: Telefonica-sans-demibold
    fontSize: 11px
    fontWeight: 400
    lineHeight: 13px
    letterSpacing: 0.55px
    textTransform: uppercase
  input:
    fontFamily: Telefonica-sans-regular
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 20px
  sm: 26px
  md: 40px
  lg: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    padding: 12px 25px
    height: 39px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    padding: 12px 20px 12px 16px
    height: 50px
  card:
    backgroundColor: "{colors.surface-tint}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 22px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

## Overview

The Telefónica corporate homepage (telefonica.com/es) reads as a confident, photographic, blue-dominant telecom brand. The capture opens on a full-bleed hero: a deep-blue image of a hand touching a glowing screen, with a white statement in light weight — "Telefónica asume el reto indiscutible de convertirse en la mejor vía de acceso de los ciudadanos a las tecnologías digitales" — where the key phrase is set in a bolder cut. Under it sit country links (España, Alemania, Reino Unido, Brasil, each with a small diagonal arrow), the Movistar, Vivo and O2 marks, and two uppercase arrow links, "MARCAS TELEFÓNICA" and "PRINCIPALES DATOS".

Below the hero the page alternates pale `{colors.surface-tint}` rounded cards with copy, a photo of colleagues at laptops, a dark navy shareholder-meeting banner ("Junta General de Accionistas 2026") with a blue square link button at the corner, and a news section called "Sala de comunicación" whose cards carry a small category label, a date, a rounded hashtag chip and an author avatar. A further blue-and-navy banner introduces "Creators". Copy is in Spanish, direct and corporate, with uppercase micro-labels for navigation and links.

**Key Characteristics:**
- One saturated brand blue, `{colors.primary}`, used for the footer, link arrows, icon buttons and the hero atmosphere, set against deep navy ink `{colors.ink}`.
- Telefonica Sans in six cuts (extralight, light, regular, medium, demibold, bold); weight contrast inside one sentence is the main emphasis device.
- Very rounded containers (20px and 40px) with the bottom-right corner treated differently on some cards.
- Photography-led: people, hands, devices and abstract blue 3D shapes, often with an "AI generated" tag on synthetic images.
- Compact uppercase navigation and link labels with wide tracking.

## Colors

`{colors.canvas}` (#ffffff) is the page and the most-used background. `{colors.surface-tint}` (#f2f4ff) is the second most common background and fills the cards. `{colors.primary}` (#0066ff) is the third and is the footer fill. Two darker backgrounds are used for editorial banners: `{colors.surface-navy}` (#022559) and a near-black (#1d2433 appears in the measurement). `{colors.surface-blue-soft}` (#e0edff) is a lighter blue tint.

Text is `{colors.ink}` (#031a34) for most characters, `{colors.ink-secondary}` (#414b61) and `{colors.ink-muted}` (#58617a) for supporting copy, white on dark photography, and `{colors.primary}` for links. `{colors.hairline}` (#b0b6ca) draws borders. The shipped stylesheet makes interaction states explicit: the filled "main" button turns from #06f (the same colour as `{colors.primary}`) to `{colors.primary-hover}` (#0048b4) on hover, and its disabled state is #f2f4ff with #b0b6ca text.

## Typography

The family is Telefonica Sans, loaded as separate font files named `Telefonica-sans-extralight`, `-light`, `-regular`, `-medium`, `-demibold` and `-bold`. Telefónica's own blog says the typeface was acquired just before the 2021 launch and adapted from TypeType's font by Lambie Nairn to fit the circular design language. The site does not offer the font for download, so a clean geometric sans such as Inter or Figtree is a reasonable stand-in; this is a suggestion, not something the brand specifies.

- **Display** (`{typography.display}`): Telefonica-sans-light, 30px / 38px, +0.3px tracking; 20px / 24px on a 390px viewport.
- **Heading** (`{typography.heading}`): regular cut, 28px / 35px, for section titles such as "Sala de comunicación".
- **Subheading** (`{typography.subheading}`): medium cut, 18px / 22.4px.
- **Body** (`{typography.body}`): regular, 12.8px / 20.16px with 0.128px tracking; the most-read character size in the capture is 18px, with 15px and 16px next.
- **Nav** (`{typography.nav}`): regular, 12px, upper-case.
- **Link** (`{typography.link}`): medium, 17px.
- **Button** (`{typography.button-secondary}`): demibold, 11px / 13px, uppercase, 0.55px tracking.
- **Input** (`{typography.input}`): regular, 22px / 30px, for the search field.

Tracking is slightly positive across body sizes, roughly 1% of the font size, and wider (up to 1.3px) for 13px uppercase labels.

## Layout

Content sits in a wide container inset from the viewport edges, and the hero image runs full bleed. Feature cards sit in a four-up row with mixed content (text card, text card, photo, text card), then a three-block news grid: a large vertical card on the left and two horizontal cards stacked on the right. Spacing values in the tokens (`{spacing.s5}` 8px, `{spacing.s6}` 10px, `{spacing.s7}` 12px, `{spacing.s9}` 16px, `{spacing.s10}` 18px) are small and tight; section separation comes from large vertical gaps and image banners rather than rules. The header is a white two-row bar: the logo and share price and language switch on top, uppercase section links (NOSOTROS, SOSTENIBILIDAD E INNOVACIÓN, SERVICIOS, SALA DE COMUNICACIÓN, ACCIONISTAS E INVERSORES, EMPLEO) below, plus search and menu.

## Elevation & Depth

Depth is mostly flat. Cards separate from the canvas by tint (`{colors.surface-tint}` on white) and a hairline; news cards use a thin outline. The site uses very light shadows such as `rgba(0, 0, 0, 0.2) 0px 1px 1px 0px`, and the stylesheet applies a `backdrop-filter: blur(50px)` to card images on hover. Hero and banner imagery provides the real sense of depth, with glowing blue gradients and 3D shapes.

## Shapes

Radii are large. `{rounded.xs}` (20px) rounds feature cards; `{rounded.sm}` (26px) and `{rounded.md}` (40px) rounds bigger containers and photos; `{rounded.lg}` (100px) and `{rounded.pill}` (9999px) make buttons and chips pills. In the shipped stylesheet the base `.card` has the unusual `border-radius: 0 0 12px 0` (only the bottom-right corner rounded), while checkbox controls use 4px.

## Components

**Buttons.** The stylesheet defines `button--main` (solid blue), `button--second` (blue outline that fills on hover), `button--third` (white outline for dark backgrounds), `button--flat`, `button--icon` and `button--round`. The measured control is the white outline variant on the hero: `{components.button-secondary}`, white text, `{rounded.lg}`, 12px 25px padding, 39px tall, with a `{colors.canvas}` border. The base `.button` rule sets a 52px height and 13px 25px padding.

**Navigation.** `{components.nav}` and `{components.nav-link}`: 12px uppercase links in `{colors.ink}` on white.

**Text input.** `{components.text-input}`: 50px tall, 12px 20px 12px 16px padding, 22px type, in the search panel with a blue magnifier glyph and a "CERRAR" close control.

**Card.** `{components.card}`: `{colors.surface-tint}`, `{rounded.xs}`, 22px padding, `{colors.ink}` text, a bold-emphasis sentence, and an uppercase blue link with an arrow ("REDES Y TECNOLOGÍA →").

**Footer.** `{components.footer}`: `{colors.primary}` background with white text.

## Design System Architecture

No public component documentation for this website was found, and Telefónica's Brand Factory (brandfactory.telefonica.com, the supplied dsUrl) is gated: the page opened at https://brandfactory.telefonica.com redirects to a login at `/auth/`, though its meta description calls it the group's platform for "guidelines, recursos, proyectos". A Telefónica blog post describes Brand Factory as the company's brand-management tool. Its contents could not be read, so nothing here is taken from it.

The website itself is a WordPress build with a custom theme (`telefonica-theme`) and a `telefonica-blocks` plugin, as seen in the [homepage's stylesheet links](https://www.telefonica.com/es/). The de-facto system lives in the theme's [style.min.css](https://www.telefonica.com/es/wp-content/themes/telefonica-theme/style.min.css): BEM-named components (`.button--main`, `.button--second`, `.button--third`, `.card--vertical`, `.card--horizontal`, `.card__title`, `.field__control`) with hard-coded hex values rather than custom properties. Telefónica also maintains a separate open-source design system, [Mística](https://github.com/Telefonica/mistica-web), described in its README as the React component library for the Telefonica Design System; this website's CSS does not show use of it, so the two are not equated here.

## Do's and Don'ts

### Do
- Anchor pages on `{colors.primary}` and `{colors.ink}` over white, with `{colors.surface-tint}` for card fills.
- Use Telefonica Sans light for large statements and bold or medium for the key phrase inside them.
- Round cards generously (`{rounded.xs}`) and make buttons pills (`{rounded.lg}`).
- Use white outline buttons on dark photography and blue outline or solid buttons on white.
- Mark uppercase labels with wide tracking for navigation and link rows.

### Don't
- Don't introduce new accent hues; the blue and navy family carries the brand.
- Don't set long paragraphs in light weight at small sizes.
- Don't drop body text below `{typography.body}` size or contrast below `{colors.ink-muted}` on white.
- Don't put a white outline button on a white or tint background.
- Don't replace the photographic heroes with flat colour blocks.

## Responsive Behavior

The hero statement drops from 30px to 20px (line height 38px to 24px, tracking 0.3px to 0.2px) at 390px. The stylesheet contains a `min-width: 768px` breakpoint for card layout, where vertical cards gain a fixed height and grid rows, and below it cards flow naturally. The header's two rows compress to the logo, search and a menu icon, as the "MENÚ" control in the capture already suggests. Buttons keep their 39px or taller pill shape so touch targets stay generous.

## Iteration Guide

1. Edit one component at a time and refer to tokens by name (`{colors.primary}`, `{rounded.xs}`, `{typography.display}`).
2. Start with a white or `{colors.surface-tint}` background and add blue only to actions and banners.
3. For dark photography, use `{components.button-secondary}`; for light backgrounds use a blue outline that fills with `{colors.primary}` on hover.
4. Keep one statement-sized light-weight line per section, with its key phrase in a heavier cut.
5. Re-run `node web/scripts/verify-designs.mjs --slug=telefonica` after each change.
