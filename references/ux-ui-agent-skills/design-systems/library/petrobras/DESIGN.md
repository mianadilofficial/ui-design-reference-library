---
version: alpha
name: Petrobras
category: "Energy & Climate"
description: "Petrobras corporate portal (Brazil): white canvas, #373737 text, brand green #008542 with a #fdc82f yellow accent, link blue #0b5fff, Petrobras Sans at weight 700 with a 38px hero title, 8px cards with a #d7d7d7 border, 4px inputs and fully rounded green buttons."
colors:
  canvas: "#ffffff"
  ink: "#373737"
  primary: "#008542"
  on-primary: "#ffffff"
  accent-yellow: "#fdc82f"
  link-blue: "#0b5fff"
  surface-2: "#f8f8f8"
  surface-3: "#f1f2f5"
  hairline: "#e1e1e1"
  text-input-text: "#272833"
  text-input-border: "#e7e7ed"
  card-border: "#d7d7d7"
typography:
  display:
    fontFamily: "\"Petrobras Sans\""
    fontSize: 38px
    fontWeight: 700
    lineHeight: 45.6px
  display-mobile:
    fontFamily: "\"Petrobras Sans\""
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  subheading:
    fontFamily: "\"Petrobras Sans\""
    fontSize: 22px
    fontWeight: 700
    lineHeight: 29.04px
  body:
    fontFamily: "\"Petrobras Sans\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 18px
  link:
    fontFamily: "\"Petrobras Sans\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 14.4px
  input:
    fontFamily: "\"Petrobras Sans\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 100px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 18px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.pill}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    height: 40px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
---

## Overview

The measured page is the Portuguese home page of Petrobras at https://petrobras.com.br/ (title "O Brasil é a nossa Energia | Petrobras", lang pt-BR, 3065px tall at 1280px wide). It is a corporate and news portal. At the top is a dark utility strip ("Você está em: SITE PETROBRAS", "Acesse também:", "ACESSO À INFORMAÇÃO", INVESTIDORES, IMPRENSA, FORNECEDORES, CLIENTES), accessibility controls (A-, 100%, A+, contrast toggle, PT/EN switch), and a white main navigation bar carrying the green and yellow BR/Petrobras logo and the items Transição Energética, Sustentabilidade, Inovação e Tecnologia, Negócios, Quem Somos, Carreiras and a search icon.

The hero is a dark nautical map of the Amapá coast with the title "Novas fronteiras exploratórias", a short yellow rule, an explanatory sentence, and a green pill button "Leia mais" with a chevron; a right-hand rail of four headlines on translucent dark panels sits beside it. The next section, "Fique por dentro das últimas notícias", places a large photo card ("Petrobras makes new oil discovery in Ultra-Deep Waters off the Coast of Amapá" with a translucent "Ler notícia" button) beside three horizontal news cards tagged Institutional or Business. Below it, "Produtos mais sustentáveis" is a card carousel (Bunker VLS B24, Diesel R, SAF Petrobras) with green underlined text links and green arrow controls, followed by a "Pausa em alguns de nossos conteúdos" panel. Every section title carries a short yellow bar beneath it.

A cookie banner is present in the markup; the extractor hid it and it is not documented as brand UI. A round blue sign-language widget (hand icon) at the right edge of the hero and a green round back-to-top button are accessibility and utility controls rather than brand components.

## Colors

`canvas` is `#ffffff` (6475 area weight). Text is `ink` `#373737` (1679 characters), with white on photographic and dark areas (675 characters). The brand colour is green: `primary` `#008542` (the site's `--color-primary-medium`, measured as a background, as text on light cards (162 characters) and as a border) is used for the Leia mais button, the news badge block "COMUNICADO", links such as "Conheça o Bunker VLS B24", and arrow buttons. `accent-yellow` `#fdc82f` (the `--color-secondary-medium` variable) is the short rule under every heading. `link-blue` `#0b5fff` is measured on 304 characters of text; it is the framework's default link and outline colour (`--primary` and `--btn-outline-primary-color`) and appears in the markup rather than the visual hero.

Neutral surfaces: `surface-2` `#f8f8f8` and `surface-3` `#f1f2f5` (search input fill), `hairline` `#e1e1e1`, `card-border` `#d7d7d7`, and translucent black overlays (`#00000052`, `#00000047`) over photographs. Input text is `#272833` with a `#e7e7ed` border. The CSS also defines a larger palette: `--color-primary-dark: #00552A`, `--color-secondary-dark: #E8AD02`, `--color-secondary-light: #FEF1C7`, `--color-sup-dark-blue: #006298`, `--color-sup-green-water: #00b2a9`, `--color-sup-orange: #ed8b00`, a neutral ramp (`--color-neutral-100` `#ffffff` to `--color-neutral-900` `#010101`) and status colours (`--success: #287d3c`, `--warning: #b95000`, `--danger: #da1414`). These were not measured in rendered output and are not tokens.

## Typography

One typeface, Petrobras Sans, is used for every measured character (2906), in regular and bold files only. The hero title is 38px/45.6px at weight 700; section headings are 32px/38.4px at 700 (the `display-mobile` token); card titles are 22px/29.04px at 700; 16px bold sets lead text over the hero (line height 18px); the utility strip uses 12px bold uppercase; inputs use 16px/24px at weight 400. The most frequent size is 16px (1119 characters), then 14px (703), 18px (290), 22px, 38px and 12px. Petrobras Sans is the company's proprietary face; no fallback stack is declared in the measured family value.

Tracking was not measured as a custom value on these roles. Headings are sentence case and bold; the utility strip and some labels are uppercase.

## Layout

The page uses a centred container with a two-column news block (a wide card of about two thirds and a stack of three cards at one third), then a full-width carousel of equal cards. The hero extends edge to edge, with a headline rail occupying roughly the right third. Spacing measured: 2, 5, 6, 8, 10, 12, 16, 18, 24 and 32px. A yellow rule under each section title anchors the left edge of every section. Carousel pagination arrows sit at the lower right of the carousel, green when active and grey when disabled.

## Elevation & Depth

Two shadows are measured: `rgba(145, 147, 149, 0.12) 0px 12px 60px -10px` (four elements, a wide soft lift for cards) and `rgba(0, 0, 0, 0.16) 0px 4px 16px 0px` (one element). The CSS also defines a green accent shadow, `--box-shadow-accent: 0px 4px 16px rgba(0, 133, 66, 0.16)`. Cards otherwise rely on a 1px `#d7d7d7` border and photography. Dark translucent panels (`#00000052`) over the hero map separate headline rails from the image.

## Shapes

Radii measured: 8px (12 elements: cards and news tiles), 50% (10: round icon buttons), 500px (6: pill buttons and toggles), 100px (5), 16px (5), and split radii `8px 0px 0px 8px` and `0px 8px 8px 0px` (3 each: segmented controls and the search field joined to its button). The input measured radius is `4px 0px 0px 4px`. The CSS defines `--rounded-pill: 50rem`. Buttons are full pills; cards are 8px; the search field is 4px on its left side.

## Components

**Primary button.** Green `#008542` pill with white text and a chevron ("Leia mais", "Ler notícia" in a translucent variant). Padding and height were not captured by the extractor for this button, so none are declared.

**Search input.** 40px tall, `#f1f2f5` fill, `#272833` 16px text, 1px `#e7e7ed` border, 4px left corners, joined to a button on the right.

**News card.** White, 8px radius, 1px `#d7d7d7` border, a square image at left, a small tag line (Institutional, Business) and a 16px bold title.

**Product card.** White card with a 1px border, a photo with rounded corners, a 22px bold title with a short yellow rule, a 14px description and a green underlined text link with a chevron.

**Utility strip.** Dark, 12px white uppercase links and a pill-shaped font-size control (A-, 100%, A+) with split-radius ends.

**Navigation.** White bar, green 16px items with chevrons on menus, search icon at right.

## Design System Architecture

No public Petrobras design-system or brand-guideline page was opened for this document, so there is no official token source to cite. The shipped CSS shows a Liferay-style front end with Bootstrap-like variables (`--primary: #0b5fff`, `--body-color: #272833`, `--body-bg: #fff`, `--box-shadow`, `--rounded-pill: 50rem`) overlaid with a Petrobras token layer: semantic colour names (`--color-primary-medium`, `--color-primary-dark`, `--color-secondary-medium`, `--color-neutral-100` to `-900`, `--color-sup-*` supplementary colours), opacity ramps (`--color-opacity-light-level-01` to `-06`, `--color-opacity-dark-level-01` to `-06`), button variables (`--btn-secondary-background-color`, `--btn-outline-primary-color`) and cookie-banner variables. Blue is therefore a framework default, while green and yellow are the brand tokens.

## Do's and Don'ts

- Do use white cards on a white page with 1px `#d7d7d7` borders and 8px radii.
- Do use `#008542` green for primary actions and links, and a short `#fdc82f` rule under headings.
- Do set headings in Petrobras Sans bold, sentence case, near-black `#373737`.
- Do use full pills for buttons and 50 percent circles for icon buttons.
- Do overlay translucent black panels on map and photo heroes.
- Don't use the framework blue `#0b5fff` for primary buttons.
- Don't document cookie banners, the blue accessibility widget or back-to-top button as brand UI.
- Don't add dark fills to content cards; they are white.

## Responsive Behavior

The 390px mobile pass measured type only: the h1 is 32px/38.4px at weight 700 and the lead text is 12px/18px bold. Navigation, column behaviour and carousel changes at mobile width are not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff`, `ink` `#373737` and a dark utility strip above a white nav bar.
2. Open with a full-width map or photo hero, a 38px bold title, a short `#fdc82f` rule and a green pill CTA.
3. Place section titles at 32px bold, each with the yellow rule below.
4. Build cards at 8px radius with 1px `#d7d7d7` borders and a soft 60px shadow.
5. Use green chevron text links for secondary actions and green arrows for carousels.
6. Verify with `node web/scripts/verify-designs.mjs --slug=petrobras`.
