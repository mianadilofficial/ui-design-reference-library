---
version: alpha
name: Rambler
category: "Design Systems"
description: Rambler.ru portal design language — a pale periwinkle canvas (#f5f7ff) under a sky-blue gradient header, near-navy ink (#1e2332), SB Sans Text at 15px/500 for UI and 600 for headlines, pastel-blue (#4b7dff) 10px-radius buttons beside the brand's Rambler Blue (#315efb), and 20px-radius white cards with photo-led news tiles.
colors:
  canvas: "#f5f7ff"
  page-largest: "#ffffff"
  ink: "#1e2332"
  ink-secondary: "#2d3750"
  ink-muted: "#2d375099"
  on-media-muted: "#ffffff99"
  primary: "#4b7dff"
  on-primary: "#ffffff"
  primary-hover: "#4673e6"
  primary-active: "#3c64cd"
  brand-blue: "#315efb"
  tint-blue: "#4b7dff1a"
  hairline: "#2d37501a"
typography:
  display:
    fontFamily: "\"SB Sans Text\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 25px
  body:
    fontFamily: "\"SB Sans Text\", sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 20px
  button:
    fontFamily: "\"SB Sans Text\", sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 20px
  input:
    fontFamily: "\"SB Sans Text\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30px
rounded:
  xs: 5px
  sm: 10px
  md: 12px
  lg: 15px
  xl: 20px
  2xl: 48px
  3xl: 60px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 20px
  s9: 25px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 15px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-active:
    backgroundColor: "{colors.primary-active}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  text-input:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.input}"
    height: 30px
  card:
    backgroundColor: "{colors.tint-blue}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
  footer:
    textColor: "{colors.ink-muted}"
    padding: 40px 0px 0px
---

## Overview

Rambler.ru is a Russian news-and-services portal, and its interface reads like a friendly magazine rather than a dashboard. The captured home page opens on a pale periwinkle canvas (`{colors.canvas}`) with a sky-blue gradient washing across the top, the blue "Рамблер/" wordmark at the upper left, and a three-column layout: a left rail of service links, a wide central column of news, and a right rail of small white widgets (weather, exchange rates, popular posts, a calendar). Photography does most of the visual work; chrome stays quiet so headlines and images lead.

The brand's own guidelines at brand.rambler.ru describe the character as friendly, competent and modern, and list communication traits such as short, human, clear and light. That voice shows in the microcopy on the page: "Всё по теме" ("everything on the topic") on small pastel chips, "Ещё новости" ("more news"), and a search field with the placeholder "Умный поиск отвечает, а не ищет" ("smart search answers rather than searches"). The guidelines also name the slash, borrowed from the URL, as the brand's graphic symbol, which is why the wordmark ends in "/".

The blue family does all the work. The measured primary button fill is pastel blue `{colors.primary}`; the brand guidelines name Rambler Blue as the core brand color, `{colors.brand-blue}`, which also shows on the page as the cookie-notice button and as a soft glow under some cards. Text is a deep navy-black `{colors.ink}`, never pure black, and secondary copy is the same navy at reduced alpha (`{colors.ink-muted}`).

## Colors

The palette is a single hue family on a cool, slightly lavender neutral base.

- **Canvas** `{colors.canvas}` is the page background; `{colors.page-largest}` (white) is the surface of widgets and the footer-level panels.
- **Ink** `{colors.ink}` is the dominant text color; `{colors.ink-secondary}` and `{colors.ink-muted}` (navy at 60% alpha) carry meta text such as "4 часа назад" timestamps and category labels under photo cards.
- **Primary** `{colors.primary}` fills the main call-to-action buttons ("Дайджест про Главное", the small blue badge pills on article photos). Hover moves to `{colors.primary-hover}` and the pressed state to `{colors.primary-active}`; both values are published in the site's own CSS custom properties (`--rc-button-primary-hover-bg`, `--rc-button-primary-active-bg`).
- **Brand blue** `{colors.brand-blue}` is the guideline's Rambler Blue. Treat it as the logo and identity color, and `{colors.primary}` as the interface action color.
- **Tint blue** `{colors.tint-blue}` (primary at 10% alpha) is the background of "Всё по теме" chips and of the secondary-blue button variant; text on it is a deeper blue.
- **Hairline** `{colors.hairline}` is a navy-at-10% border for outlined tags and dividers.

The brand guidelines list further palette colors (an emerald, a cyan "Wave", a dark carbone, fuchsia for horoscopes and lime for illustrations). Only the blue family and navy ink are measured on the home page, so they are the only ones tokenised here. Small accent colors do appear in the site's CSS variables (green, orange, red for status), but they are not used as brand color on the captured page.

## Typography

The page loads SB Sans Text in 400, 500 and 600, SB Sans Display in 500 and 600, and Manrope in 400, 500 and 700. The site's CSS exposes the two SB Sans families as `--font-SB-Sans-Text` and `--font-SB-Sans-Display`. SB Sans Text is the working face: the body default is `{typography.body}` (15px, weight 500, 20px line height), and news headlines use `{typography.display}` (18px, weight 600, 25px). The search input is larger at `{typography.input}` (18px, weight 400). Buttons use the same 15px/500 as body copy.

The brand guidelines state that the brand typography rests on two families, the proprietary Rambler Force for key messages and headlines, and Manrope for main messages, with Regular through Extra Bold chosen case by case. On the captured page, Manrope appears only on the cookie notice button, and SB Sans carries the news content; the guideline typefaces are therefore documented here as brand intent, not as what the portal body uses.

Hierarchy is made by weight and size rather than by a big scale: 13px for meta lines, 15px for body, 18px for card headlines, 28px for large headings (the page also measures 11px, 16px, 35px and 39px in smaller amounts). Headlines inside photo cards are set in white over a dark gradient scrim.

Font substitutes: SB Sans and Rambler Force are not freely available from the sources opened; Manrope is downloadable from brand.rambler.ru. A sans-serif such as Manrope or Inter at the same weights is the closest stand-in for SB Sans Text.

## Layout

The desktop capture is 1280px wide. The shell is a left navigation rail, a central content column and a right rail of widgets, with the page background gradient bleeding behind all three. The site's CSS publishes content-width variables of 1010px (small desktop), 1500px (large), 1620px (extra large) and a 700px mobile maximum, so the layout widens in steps rather than fluidly.

The central column stacks: a search block with suggestion chips, topic tabs ("Главное", "СВО", "Политика", "Шоу-бизнес", "Ещё"), a lead story with photo, a list of one-line headlines each ending in a chip, a pair of buttons, then a magazine block of large photo cards. Spacing follows a small scale of 2, 4, 5, 8, 10, 12, 15, 20, 25 and 30px (`spacing.s1` to `spacing.s10`); gaps inside a tag row are 5px. Density is high but airy: list rows are about one line tall with generous side padding, while article cards are tall and image-dominant.

## Elevation & Depth

Depth is soft and colored. Widgets sit as white or translucent-white panels on the gradient; the site's card variables define a translucent white surface and a 1px white outline (`--rc-color-card-surface`, `--rc-color-card-outline`). The only measured shadows are blue-tinted: a glow of blue at 30% opacity, offset 5px down with a 30px blur and negative spread, and a similar one at 25% opacity. There are no hard black drop shadows. Tooltips invert the scheme: the site's tooltip background is the ink color `{colors.ink}` with white text.

## Shapes

Radius is generous and varied by element size. Measured radii are 5px for small items, 10px for buttons and dropdowns (the site's dropdown radius variable is 10px), 12px and 15px for small tags (the small tag radius variable is 15px), 20px for cards and medium tags, and 48px, 60px and full pill for round and badge shapes. The primary button uses `{rounded.sm}` (10px) and cards use `{rounded.xl}` (20px). News photos are cropped to rounded rectangles, never to hard rectangles, and avatar-like icons are circles.

## Components

- **Primary button** — fill `{colors.primary}`, white text, 40px tall, 15px side padding, radius `{rounded.sm}`, SB Sans Text 15px/500. Example: "Дайджест про Главное" with a small round icon at left.
- **Secondary and tag chips** — `{colors.tint-blue}` background with blue text, used for "Всё по теме" and "Ещё новости"; the site's CSS defines blue, white and empty (outlined) tag variants in small (30px tall) and medium sizes.
- **Search** — a rounded white field with an 18px input, a "Поиск с" selector with GigaChat, and a blue square-ish icon button; suggestion chips sit below it.
- **Cards** — photo cards with a blue pill badge at the top-left ("Что это значит для меня?", "Разобраться", "Коротко"), headline in white over a dark scrim, and a muted category label.
- **Cookie notice** — a white floating panel with a rounded blue "ОК" button. It is a consent control and not part of the brand's button system.
- **Navigation** — left rail of text links each preceded by a small glossy, gradient-filled icon; the brand guidelines say accent icons are built with gradient volume, while standard interface icons are linear.

## Design System Architecture

Rambler publishes a design system called Ratio at [ui-kit.rambler.ru](https://ui-kit.rambler.ru/), with a public GitHub repository ([rambler-digital-solutions/rambler-ui](https://github.com/rambler-digital-solutions/rambler-ui), MIT) and a brand site at [brand.rambler.ru](https://brand.rambler.ru/). Opening the Ratio docs showed a version of 5.15.5, more than 30 React components, and sections for brand, guidelines and components. However, the published rambler-ui package uses the CorsicaRambler typeface and contains no `--rc-` custom properties, whereas the live rambler.ru loads SB Sans and ships `--rc-*` variables. Because the live site's styles do not show Ratio markers, this document does not attribute the home page to Ratio and does not use Ratio values.

What the live site does expose is its own tokenised system. Hundreds of CSS custom properties sit on the root: colors named `--color-Electric-Blue`, `--color-Pastel-Blue-10`, `--color-Black-Blue-40`, and so on, plus component variables with the `--rc-` prefix per component and variant, for example `--rc-button-primary-hover-bg`, `--rc-tag-blue-bg`, `--rc-input-polar-focus-outlineColor`, `--rc-tooltip-bgColor`. Components covered by those variables include button, icon box, input, textarea, tabs, tag, switcher, radio, select, dropdown, snackbar, slider, hint and tooltip. Easing curves are also variables (`--ease-default`, `--ease-enter`). Naming follows a pattern of component, variant, state and property, which makes theming mechanical.

## Do's and Don'ts

- Do use pastel blue for actions and keep the blue family dominant; use Rambler Blue for identity.
- Do use navy ink with alpha steps for hierarchy instead of grey.
- Do round everything: 10px for controls, 20px for cards.
- Do let photography lead and place white headlines over a dark gradient scrim.
- Don't use pure black text or hard black shadows; shadows are blue-tinted.
- Don't treat the cookie notice button as brand UI.
- Don't mix more than the blue family with status colors on one screen; the guideline accents are for illustration and specific products.
- Don't set long body text in 400 weight at 15px where the portal uses 500.

## Responsive Behavior

The site publishes distinct content widths for small, large and extra-large desktops and a separate 700px maximum for mobile, so breakpoints are width-capped containers rather than fluid grids. Only the 1280px desktop capture was reviewed visually. A mobile capture was also extracted by the pipeline, but it was not examined in detail, so rail behaviour on mobile is not measured.

## Iteration Guide

1. Start from the canvas `{colors.canvas}`, ink `{colors.ink}` and primary `{colors.primary}`; add brand blue `{colors.brand-blue}` only for identity moments.
2. Build buttons at 40px height, 15px horizontal padding and `{rounded.sm}`; give hover and pressed states the two published darker blues.
3. Build cards at `{rounded.xl}` with a translucent white or `{colors.tint-blue}` fill and blue-tinted glow shadows.
4. Set type in SB Sans Text or a close sans at 15px/500 body and 18px/600 headlines.
5. Write microcopy short and friendly, and mark advertising clearly as the page does with "Реклама".
6. Validate any new color against the measured set before adding it.
