---
version: alpha
name: Real Madrid
category: "Sports & Fitness"
description: "Real Madrid CF (realmadrid.com/es-ES) is a white #ffffff club site set in the custom RMNeue typeface with navy #0f2145 ink, an electric-violet #3e31fa primary with a #3e31fa→#8760f6 gradient on 16px-radius 64px 'Comprar ahora' buttons, pale #eef2fd panels, 16px-radius cards and violet-tinted soft shadows."
colors:
  canvas: "#ffffff"
  ink: "#0f2145"
  primary: "#3e31fa"
  on-primary: "#ffffff"
  secondary: "#8760f6"
  surface-primary-bg: "#eef2fd"
  primary-light: "#dee5fd"
  surface-grey: "#f3f5f8"
  surface-divider: "#e1e5ea"
  ink-secondary: "#43526e"
  ink-muted: "#5e6a83"
  ink-on-dark: "#fbfdff"
  accent-crimson: "#ca024f"
typography:
  display:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26.4px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
  heading:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 40px
    fontWeight: 700
    lineHeight: 44px
    letterSpacing: "-1px"
  subheading:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.5px"
  button:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
    letterSpacing: 0.7504px
  nav:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-small:
    fontFamily: RMNeue, arial, helvetica
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    letterSpacing: 0.2496px
rounded:
  xs: 4px
  sm: 7.99px
  md: 9.14px
  lg: 12px
  xl: 12.01px
  2xl: 16px
  4xl: 22px
  cta: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4.37px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 9.01px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 0px 32.004px
    height: 64px
    backgroundImage: "linear-gradient(8deg, rgb(62, 49, 250) 15.1%, rgb(135, 96, 246) 100%)"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.sm}"
    padding: 0px 9.002px
    height: 40px
    border: "2px solid #3e31fa"
  feature-card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-secondary}"
    padding: 0px 32px 0px 31px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card-media:
    backgroundColor: "{colors.primary-light}"
    borderColor: "{colors.surface-grey}"
  footer:
    textColor: "{colors.primary}"
---

# Real Madrid

## Overview

The measured site is Real Madrid CF's official web, served at https://www.realmadrid.com/es-ES (title "Real Madrid CF | Web Oficial") after the request to https://www.realmadrid.com was redirected to the Spanish locale. It was captured at 1280px wide with an 8677px scroll height and at 390px for the mobile pass.

The page is bright, airy and product-like rather than stadium-dark. A 72px white header carries the crest on the left, the menus Socios, Madridistas, Entradas, Área VIP, Tour, Tienda and RM Play in slate text, and on the right the sponsor mark and an "Acceder" button outlined in violet. The hero is a wide rounded card pairing the large club crest on a white panel with an "Comunicado Oficial" headline panel in pale grey. Below come rows of four news thumbnails with bold two- or three-line headlines, a "Próximos eventos" carousel of fixture cards (the first one filled with the violet gradient), more news rows, an RM Play banner, the "Comunidad Madridista" membership card on a navy panel ("Forma parte de la comunidad", "Hazte Madridista"), "Noticias Madridistas", "Tienda Oficial — Colecciones Destacadas" with 1ª, 2ª and 3ª Equipación kit cards and violet "Comprar ahora" buttons, "Un palmarés de leyenda" (trophy photograph beside a tabbed count of titles), an aerial stadium tour map with hotspot labels, "Especiales Real Madrid" and a white footer with link columns and app-store badges.

The voice is institutional and proud ("Un palmarés de leyenda", "Comunicado Oficial"), and the photography is players, trophies and the Bernabéu.

## Colors

- **Canvas `#ffffff`** — the page background and the largest area (10403 area weight); declared as `--rm-color-primary-white`.
- **Ink `#0f2145`** — navy, the most-read text (2919 chars) and the fill of dark panels (1038 area weight).
- **Primary `#3e31fa`** — `--rm-color-primary-default`, an electric violet-blue: button fills, the "Acceder" outline, hover colour of the header links and footer link text. **On-primary `#ffffff`**.
- **Secondary `#8760f6`** — `--rm-color-secondary-default`; the end stop of the CTA gradient `linear-gradient(8deg, rgb(62, 49, 250) 15.1%, rgb(135, 96, 246) 100%)`.
- The "Acceder" button's border was measured as `rgb(42, 30, 197)` when focused.
- **Surface primary bg `#eef2fd`** — `--rm-color-primary-bg`, pale lavender panels (1198 area weight).
- **Primary light `#dee5fd`** — `--rm-color-primary-light`, card image backgrounds and hairline borders.
- **Surface grey `#f3f5f8`** — the hero headline panel and card borders.
- **Surface divider `#e1e5ea`** — light dividers and inactive tracks.
- **Ink secondary `#43526e`** — header menu text and secondary copy (1169 chars).
- **Ink muted `#5e6a83`** — metadata such as dates and venues.
- **Ink on dark `#fbfdff`** — text on navy and gradient panels.
- **Accent crimson `#ca024f`** — 243 chars of headline text in the news grid.

The token set also declares `--rm-color-primary-dark` `#2115AB`, `--rm-color-primary-medium` `#8FA0F5`, `--rm-color-secondary-dark` `#3F18B0`, `--rm-color-secondary-light` `#E6DDFF`, `--rm-color-secondary-bg` `#EDEBFA` and an error background `#FCE3EC`.

## Typography

The entire site is set in **RMNeue**, the club's own typeface, served as RMNeue-Regular, RMNeue-SemiBold and RMNeue-Bold woff2 files from realmadrid.com/media, with `arial, helvetica` as fallbacks (`--rm-font-family-default`). Three icon fonts (rm-icons-16, -24, -40) supply pictograms.

- **Heading** — 40px/44px, weight 700, −1px: section titles ("Próximos eventos", "Comunidad Madridista", "Tienda Oficial").
- **Display** — 24px/26.4px, weight 700, −0.5px: the hero headline "Comunicado Oficial".
- **Subheading** — 20px/24px, weight 700, −0.5px: news and card headlines — the most-used size (1962 chars).
- **Body / nav** — 16px/24px, weight 400.
- **Button** — 18px/27px, weight 600, +0.7504px for "Comprar ahora"; the small button is 14px/21px weight 600, +0.2496px.
- Other measured sizes: 32px (sub-section titles, −0.5px), 30px (trophy counts, −1px), 12px and 10px for metadata.

Weights: 700 (3121 chars), 400 (2002), 600 (287). Headlines are bold with negative tracking; buttons are semibold with positive tracking. Without RMNeue, a geometric grotesque such as Manrope or Plus Jakarta Sans gives a comparable round, modern feel.

## Layout

Content runs from x=89 to x=1237 on the 1280px viewport, so the page has about 89px side margins (the measured 89px padding appears 12 times). The header has `0px 32px 0px 31px` padding. Bands: a 1405px white opening (header, hero card, two rows of news, events heading), a 375px media/events carousel, a 3468px white section in up to three columns (community, news, shop), media strips, a 983px two-column trophy section, a 608px stadium map and a 2103px four-column "Especiales" and footer block. News rows are four across; the shop shows three kit cards and a peek of a fourth.

Spacing is on an 8px rhythm with 4px fine steps: gaps of 8px (162), 10px (88), 12px, 32px and 16px; paddings of 8px, 24px, 16px and 40px. The hero headline panel uses `40px 40px 40px 8px` padding. Desktop showed 13 header links.

## Elevation & Depth

Shadows are soft and tinted violet rather than black: `rgba(84, 77, 183, 0.08) 0px 4px 16px 0px` on 16 elements and `rgba(84, 77, 183, 0.2) 0px 8px 32px -8px` on 11. The token `--rm-color-primary-shadow` is `rgb(84 77 183 / 78%)`. Depth also comes from layering pale lavender panels (`#eef2fd`) on white and from the navy community panel.

## Shapes

Rounded, friendly geometry. Measured radii: 16px (114 elements), 7.994px (22 — small buttons such as "Acceder"), `16px 16px 0px 0px` (16), 9.136px (16), 22px (12), 16.002px (11, including the "Comprar ahora" buttons), 12px (10), 4px (9), 24px (4 — the hero card), 50% (4), plus 68px and 112px on a few large elements. The hero card combines `24px 0px 0px 24px` on its image half with a 24px outer radius.

## Components

**Primary button ("Comprar ahora")** — `#3e31fa` fill overlaid with `linear-gradient(8deg, rgb(62, 49, 250) 15.1%, rgb(135, 96, 246) 100%)`, white RMNeue 18px/27px weight 600 with +0.7504px tracking, 16px radius, `0px 32.004px` padding, 64px tall (282px wide in the shop cards).

**Outlined button ("Acceder")** — white fill, `2px solid #3e31fa` border, violet 14px/21px weight 600 text, 7.994px radius, `0px 9.002px` padding, 40px tall; the border darkens on keyboard focus.

**Header links** — RMNeue 16px slate `#43526e`, turning `#3e31fa` on hover; 48px tall hit areas with a 12px radius.

**Hero card** — 24px-radius card split into a `#dee5fd`-backed image half and a `#f3f5f8` headline half with a 24px/700 headline.

**News card** — 16px-radius image, 20px/24px bold headline, sometimes in crimson `#ca024f`.

**Event card** — fixture card with competition, matchday, crests, date, venue and broadcaster icons; the featured card uses the violet gradient with `#fbfdff` text.

**Kit card** — product image on white with a soft violet shadow, "1ª Equipación 26/27" title and a full-width gradient "Comprar ahora" button.

**Trophy counter** — tab pills (Fútbol / Baloncesto) above a grid of trophy icons with 30px counts.

**Footer** — white, link columns in violet 14px/21px weight 600, app-store badges.

## Design System Architecture

No public Real Madrid design system site was reached; https://www.realmadrid.com/en-US/the-club returned an error page ("Sorry, an error has occurred").

The shipped CSS shows a complete token system under the `--rm-` prefix. Colours are grouped by role and step: `--rm-color-primary-{default, dark, medium, light, bg, white, shadow, active-outline}`, `--rm-color-secondary-{default, dark, light, bg, background-hover}`, plus error and warning sets with dedicated dark-mode values (e.g. `--rm-color-error-darkmode` `#FA9ABC`). Typography tokens follow `--rm-typo-{category}-{level}-{size}-{property}` — for example `--rm-typo-display-d1-huge-letter-spacing` −1px, `--rm-typo-heading-h5-x-small-letter-spacing` −.5px and `--rm-typo-link-xs-small-font-size` .75rem. Components have their own tokens that point back to the typography layer, such as `--rm-button-font-size-medium: var(--rm-typo-link-medium-font-size)`, `--rm-button-padding-inline-xxl` 2.5rem and `--rm-pill-letter-spacing-x-small`. Font files are served from `https://www.realmadrid.com/media/`.

## Do's and Don'ts

**Do**
- Use RMNeue everywhere; bold with negative tracking for headlines, semibold with positive tracking for buttons.
- Use the violet `#3e31fa` → `#8760f6` gradient for purchase and primary actions, at 16px radius and 64px height.
- Keep text navy `#0f2145`, not black.
- Round cards at 16px and tint shadows with `rgba(84, 77, 183, …)`.
- Use pale lavender `#eef2fd` and grey `#f3f5f8` panels to group content on white.

**Don't**
- Don't use square corners or hard black shadows.
- Don't use the gradient for body text or long panels; keep it to buttons and the featured event card.
- Don't treat `#0000ee` (a browser default link colour on picture elements) as a brand colour.
- Don't flatten the page into dark mode; the measured home page is white with navy text.

## Responsive Behavior

Measured at 390px wide:

- Content runs from x=24 to x=366 (24px side margins, against 89px on desktop).
- The hero headline "Comunicado Oficial" drops from 24px/26.4px to 16px/19.2px with normal tracking.
- Section titles ("Próximos eventos") drop from 40px/44px to 32px/35.2px.
- The most common mobile size is 16px (3621 chars); 40px appears on only 10 chars.
- Three header links were visible with a menu toggle (desktop: 13 links).
- The first mobile band (348px) is a carousel.

Behaviour between 390px and 1280px was not measured.

## Iteration Guide

1. Start with a white canvas, navy `#0f2145` text and RMNeue (Regular, SemiBold, Bold).
2. Build a 72px white header: crest, slate 16px links that turn violet on hover, a 40px "Acceder" button with a 2px violet border and 7.994px radius.
3. Lead with a 24px-radius split hero card.
4. Add four-up news rows with 16px-radius images and 20px/24px bold headlines at −0.5px.
5. Title sections at 40px/44px bold, −1px.
6. Use the violet gradient, 16px radius and 64px height for "Comprar ahora"; give cards the soft violet shadow `rgba(84, 77, 183, 0.08) 0px 4px 16px 0px`.
7. Close with a white footer of violet 14px semibold links.
