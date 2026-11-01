---
version: alpha
name: GOV.BR
category: "Design Systems"
description: "The Brazilian federal government portal gov.br (Serviços e Informações do Brasil), built on the Padrão Digital de Governo design system: Rawline type, government blue #1351b4 with navy #0c326f and #071d41, near-white canvas #fcfcfc, 4px to 25.2px radii and soft 0 3px 6px shadows on white service tiles."
colors:
  canvas: "#fcfcfc"
  page-body: "#ffffff"
  page-largest: "#f8f8f8"
  ink: "#000000"
  primary: "#1351b4"
  primary-darken-01: "#0c326f"
  surface-footer: "#071d41"
  ink-strong: "#333333"
  ink-muted: "#555555"
  ink-muted-2: "#505051"
  hairline: "#7bb1ed"
  action-bright: "#007aff"
  text-input-text: "#262627"
typography:
  display:
    fontFamily: rawline, helvetica, arial, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 26px
  display-mobile:
    fontFamily: rawline, helvetica, arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16px
  heading:
    fontFamily: rawline, helvetica, arial, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 54px
  subheading:
    fontFamily: rawline, helvetica, arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 44px
    textTransform: uppercase
  nav:
    fontFamily: rawline, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 28px
  button-secondary:
    fontFamily: rawline, sans-serif
    fontSize: 16.8px
    fontWeight: 600
    lineHeight: 24.36px
  input:
    fontFamily: rawline, helvetica, arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 25.2px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-secondary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 0px 16px
    height: 32px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 0px 32px
    height: 62px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.page-body}"
    padding: 64px 0px 0px
---

## Overview

GOV.BR is the Brazilian federal government's single portal ("Serviços e Informações do Brasil"). The measured page is the Portuguese home (`https://www.gov.br/pt-br`, document title "GOV.BR"). It is a service directory with a very clear information order: a white header with the gov.br wordmark, language selector, contrast and theme icons and links (Institucional, Acessibilidade, Participe), an outlined "Atalhos gov.br" pill and a solid blue "Entrar com gov.br" sign-in button; a page title line "Serviços e Informações do Brasil" with a hamburger; a wide search field ("O que você procura?"); the h2 "Serviços para você" with two cards ("Mais acessados" ranked list and "Destaque" featured services); a carousel of illustrated personas ("Serviços digitais por perfil": Agricultor, Turista, Aposentado) with a "Todos os Perfis" outline button; and a grid of white category tiles on a light-grey band under "Navegue por categoria", each tile a blue icon over an uppercase bold label (Agricultura e Pecuária, Assistência Social, Ciência e Tecnologia and so on). A navy footer closes the page.

The capture is partly dimmed: a translucent black scrim (`#00000099` in the measurement) covers the top of the screenshot together with a small first-visit tooltip near the sign-in button ("Para começar"). That tooltip and scrim are an onboarding overlay, not brand UI, so they are not documented as components. Tokens come from computed styles, not capture pixels.

Tone is institutional and friendly: Portuguese second-person ("Serviços para você", "O que você procura?"), flat icons, round-faced persona illustrations in warm colors, and uppercase labels for categories. The visual system is blue on white with gray neutrals; accent colors appear only in small status badges (green "Novo") and illustration.

## Colors

All values below are measured or appear in the site's own custom properties (`--color-*`).

- **Canvas `#fcfcfc`**, **page body `#ffffff`** and **page largest area `#f8f8f8`** are the three light surfaces: header/body white, the grey band behind the category grid, and the near-white canvas. The site's `--color-secondary-02` is `#f8f8f8` and `--color-secondary-01` is white.
- **Primary `#1351b4`** is `--color-primary-default`, the government blue used on the sign-in button, outline buttons' borders and text, nav icons and links. The generator had picked `#007aff` (a saturated blue measured on only a few characters); that value is kept as `action-bright` and the brand role goes to `#1351b4`, which is measured as an outline button border and text color, a background fill and the root primary variable.
- **Primary darken 01 `#0c326f`** (`--color-primary-darken-01`) is the main readable text blue in the page body (about 1,051 weighted characters) and a dark fill.
- **Surface footer `#071d41`** (`--color-primary-darken-02`) is the footer background and a large dark area.
- **Ink `#000000`** is the most-read text color overall (about 1,770 weighted characters), with **ink-strong `#333333`** for the h1 and h2, **ink-muted `#555555`** and **ink-muted-2 `#505051`** for secondary text.
- **Hairline `#7bb1ed`** is the most frequent border color (six borders), a light blue.
- **Text-input text `#262627`** is the search input color (matching `--aa-text-color-rgb` 38, 38, 39 in the autocomplete component).

The stylesheet also defines pastel blues (`#c5d4eb`, `#dbe8fb`), success `#168821`, danger `#e60000`, info `#155bcb`, warning `#ffcd07`, and a support palette; these are not exercised enough on the home page to become tokens. Social-network brand colors in the CSS (YouTube, Twitter and others) are third-party and excluded.

## Typography

The family is **Rawline**, loaded at 400 (normal and italic), 500, 600, 700 and 900, with `helvetica, arial, sans-serif` fallbacks in measured stacks. The site's base variable is `--font-family-base` (Rawline, Raleway, sans-serif), the base size is 14px and the scale is multiplicative (`--font-size-scale-up-01` is 16.8px, up to 50.162px). Weight 500 carries the most characters (about 3,396), then 700 and 600.

- **Display** (h1 "Serviços e Informações do Brasil"): 24px, weight 400, line height 26px; on the 390px mobile measurement it is 14px on 16px.
- **Heading** (h2 "Serviços para você"): 36px, 600, line height 54px.
- **Subheading** (h3 role): 12px, 700, uppercase, line height 44px.
- **Nav**: 16px, 500, line height 28px.
- **Button secondary**: 16.8px, 600, line height 24.36px.
- **Input**: 16px, 400, line height 16px.

The most used sizes are 16px, 14px, 20px, 12px and 36px. Raleway is the declared fallback in the site's own variable; the measured stacks fall back to helvetica and arial.

## Layout

The page is a centered column with generous gutters (`--grid-desktop-margin` 40px, `--grid-portrait-margin` 8px) and breakpoints at 575px (`--grid-breakpoint-sm`), 992px (`--grid-breakpoint-md`) and 1600px (`--grid-breakpoint-xlarge`). The home measures 1280px wide. Top to bottom: header, search, a two-column row of cards, a persona carousel, a four-column grid of category tiles on the grey band, then app-download tiles and a large navy footer (1,637px tall with 64px top padding).

Spacing follows a base-8 scale (`--spacing-scale-base` 8px, half 4px, then 16px, 24px, 32px up to 80px). The measured paddings on the page include 20px, 30px, 16px, 12px, 25px and 24px.

## Elevation & Depth

Depth is soft and uniform: `rgba(0, 0, 0, 0.16) 0px 3px 6px 0px` is measured on 23 elements (the card surfaces and tiles) and equals the site's `--surface-shadow-sm`; a second heavier offset shadow `rgba(0, 0, 0, 0.11) 10px 10px 5px 0px` appears once. The CSS defines three steps, `--surface-shadow-sm`, `-md` (3px 6px 6px) and `-lg` (6px 9px 6px), all at 0.16 black alpha. A scrim `--surface-overlay-scrim` (`rgba(0, 0, 0, 0.45)`) exists for overlays. Focus rings use a 4px `--focus-width`.

## Shapes

Radii are token-driven: `--surface-rounder-sm` 4px, `--surface-rounder-md` 8px, `--surface-rounder-lg` 16px and `--surface-rounder-pill` (999em). On the page the outline button "Atalhos gov.br" measures 25.2px, icon buttons are circles (50% radius), persona avatars are circles, and the carousel arrows are circular. The category tiles read as square-cornered white cards with the 3px 6px shadow. Borders are 1px, usually blue `#1351b4`, or `#7bb1ed` for lighter hairlines.

## Components

- **Outline pill button (button-secondary).** "Atalhos gov.br": white fill, 1px `#1351b4` border, `#1351b4` text, Rawline 16.8px weight 600, 32px high, padding 0px 16px, radius 25.2px. "Todos os Perfis" follows the same outline pattern in the capture.
- **Sign-in button.** "Entrar com gov.br" is a solid blue button with a white label and a person icon; the extractor did not capture it as a CTA, so no numbers are claimed for it beyond its color family.
- **Nav.** White bar with `#1351b4` links and a hamburger icon button; nav links use Rawline 16px weight 500.
- **Search field (text-input).** 62px tall, padding 0px 32px, text `#262627`, placeholder "O que você procura?" in italic, trailing blue magnifier.
- **Category tile.** White card with soft shadow, a blue glyph, an uppercase 700-weight label.
- **Badges.** Small green "Novo" labels on newly added services.
- **Footer.** `#071d41` background, white text, 64px top padding, column lists headed by uppercase labels such as "SERVIÇOS" and "TEMAS".

## Design System Architecture

GOV.BR is built on the federal government's **Padrão Digital de Governo (Design System gov.br)**, documented at https://www.gov.br/ds. That site is a client-rendered application: when I opened it, only its title "Padrão Digital de Governo - Design System" was readable, so the colour and typography pages could not be quoted. The package source is the GOVBR-DS Core repository at https://gitlab.com/govbr-ds/dev/govbr-ds-dev-core, which I opened: it describes a JavaScript library of agnostic components for the Padrão Digital de Governo, published on npm as `@govbr-ds/core`, MIT licensed. The live site uses this system: its root stylesheet carries the design system's token names (`--color-primary-default`, `--color-primary-darken-01`, `--spacing-scale-*`, `--surface-rounder-*`, `--surface-shadow-*`, `--font-size-scale-up-*`, `--grid-breakpoint-*`), and the token values here came from those computed variables and measurements, not from the docs.

The token architecture is explicit: color ramps (primary default, darken 01 and 02, lighten 01 and 02, pastels; secondary neutrals 01 to 12; support 01 to 11; semantic danger, success, warning, info), a 14px base type scale, an 8px spacing scale with half steps, surface tokens for radius, shadow, width, blur and offset, and component state tokens (`--status-*`).

## Do's and Don'ts

- Do use `#1351b4` for actions and links, `#0c326f` for dark text and `#071d41` for the footer.
- Do keep tiles white on the `#f8f8f8` band with the 0 3px 6px 0.16 shadow.
- Do set type in Rawline with weights 400 to 700 and uppercase for category and section labels.
- Do keep outline buttons at 1px borders with a pill radius.
- Don't use the social-network colors from the CSS as brand colors.
- Don't treat the first-visit tooltip or dimming scrim as part of the system.
- Don't use heavy shadows; the system only defines three soft steps.
- Don't use the unrelated bright blue `#007aff` as the main action color.

## Responsive Behavior

Breakpoints are 575px, 992px and 1600px; at 390px the h1 shrinks from 24px to 14px with a 16px line height. The category grid is four columns in the 1280px desktop capture and its narrower-breakpoint behaviour was not measured; only the h1 change was. Margins reduce from 40px to 8px between desktop and portrait grid variables. The persona carousel shows arrows and pagination dots in the capture.

## Iteration Guide

1. Begin with tokens: canvas `#fcfcfc`, white tiles `#ffffff`, band `#f8f8f8`, primary `#1351b4`, footer `#071d41`.
2. Type in Rawline: h2 36/54 at 600, nav 16/28 at 500, buttons 16.8/24.36 at 600.
3. Build outline buttons as 32px high, 0px 16px padding, 25.2px radius, 1px primary border.
4. Use a 4px, 8px or 16px radius for cards and a 3px 6px 6px-class soft shadow only.
5. Check against the live `--color-*`, `--spacing-scale-*` and `--surface-*` variables before adding any value.
