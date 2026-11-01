---
version: alpha
name: Buzzvil
category: "Design Systems"
description: "Buzzvil's marketing site is a Korean-language, Pretendard-set ad-tech page: a near-black slate hero (#0e171f) under a white navigation bar, an 800-weight 78px headline filled with a salmon-to-white gradient, a single red (#f44336) inquiry button with 4px corners, glass-effect stat cards at 32px radius and pill-shaped filter chips on a mostly dark canvas."

colors:
  canvas: "#ffffff"
  page-largest: "#0e171f"
  ink: "#000000"
  primary: "#f44336"
  on-primary: "#ffffff"
  surface-slate: "#2a3f4d"
  surface-mist: "#dce3e8"
  ink-muted: "#3e5463"
  ink-faint: "#9fb1bd"
  surface-pale: "#f2f5f7"
  nav-text: "#5b7282"
  card-bg: "#fabbb41a"
  accent-red-50: "#ef4444"
  accent-orange-50: "#fb923c"
  gray-50: "#737373"
typography:
  display:
    fontFamily: Pretendard, sans-serif
    fontSize: 78px
    fontWeight: 800
    lineHeight: 109.2px
    letterSpacing: "-0.78px"
  display-mobile:
    fontFamily: Pretendard, sans-serif
    fontSize: 44px
    fontWeight: 800
    lineHeight: 61.6px
    letterSpacing: "-0.44px"
  heading:
    fontFamily: Pretendard, sans-serif
    fontSize: 32px
    fontWeight: 700
    letterSpacing: "-0.16px"
  body:
    fontFamily: Pretendard, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29.52px
    letterSpacing: "-0.18px"
  button:
    fontFamily: Pretendard, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: "-0.16px"
  link:
    fontFamily: Pretendard, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.2px"
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.surface-pale}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
    padding: 16px 32px
    height: 55px
    borderColor: "{colors.surface-pale}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 16px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.lg}"
    padding: 80px 40px 40px
    boxShadow: rgba(255, 255, 255, 0.25) 2px 2px 4px 0px inset
  footer:
    backgroundColor: "{colors.surface-pale}"
    textColor: "{colors.ink}"
---

## Overview

The Buzzvil marketing site (www.buzzvil.com, captured in its Korean-language form) is an ad-tech company page that presents itself as a dark, product-forward stage rather than a bright corporate brochure. A white navigation bar sits across the top, and under it the page falls into a deep blue-slate field (`{colors.page-largest}`) that carries most of the first screen: a large gradient headline, two buttons, three translucent stat cards, a row of pill-shaped filter chips, and then a carousel of white product cards that each hold a phone mockup. The white `{colors.canvas}` is therefore the canvas of the navigation, the product cards and the footer, while the slate field is where the page spends most of its pixels.

The voice is confident and numeric. The hero headline is a short Korean sentence, the sub-line explains the offer in one clause, and the stat cards lead with a big percentage or multiplier ("39%", "x4", "82%") above a one-line caption. Nothing is decorative copy; every block ends in either a figure or an arrow link ("→") that names an ad format.

**Key Characteristics:**
- One typeface family, Pretendard, at weights from regular to extra-bold; headlines are heavy (800) and tightened with negative tracking.
- A single saturated accent, `{colors.primary}` (red), reserved for the inquiry button and for small red kicker labels above card titles.
- Glass cards on the dark field: `{colors.card-bg}` with an inset highlight shadow and `{rounded.lg}` corners.
- Pill-shaped chips (`{rounded.pill}`) for category filters, outlined in light on dark in the capture.
- Real product imagery: phone screenshots of actual ad formats, not stock photography or illustration.

## Colors

The palette is a cool blue-grey ramp with one red. `{colors.page-largest}` is the darkest and largest field; `{colors.surface-slate}` is the slightly lighter slate used for body copy on light surfaces and for panels; `{colors.surface-mist}` and `{colors.surface-pale}` are the light neutrals used for chips, the secondary button and the footer. Text neutrals step down from `{colors.ink}` (pure black on white surfaces) through `{colors.ink-muted}` to `{colors.ink-faint}`, and `{colors.nav-text}` is the muted blue-grey of inactive navigation labels, which turns black on hover.

- **Primary (`{colors.primary}`)**: the red of the "문의하기" (inquiry) button, with `{colors.on-primary}` text. It is also the colour of the small kicker lines above the white product-card titles.
- **Canvas (`{colors.canvas}`)**: white, used for the nav bar and product cards.
- **Card glass (`{colors.card-bg}`)**: an 8-digit hex, i.e. a faint salmon tint at low alpha, which lets the dark field show through.

Buzzvil's own design portal documents a separate, more neutral brand palette: a grayscale primary (white, `{colors.gray-50}` mid-grey, black) and a sparingly used accent red (`{colors.accent-red-50}`) with an orange secondary (`{colors.accent-orange-50}`), described as "used sparingly, <10% composition". These are the portal's published tokens (cited in SOURCES.json); the marketing site itself ships the red `{colors.primary}`, not `{colors.accent-red-50}`.

## Typography

Pretendard is the only family loaded on the marketing site (weights 400, 500, 600, 700 and 800). The portal's brand page names Inter, Noto Sans KR and Anonymous Pro / Nanum Gothic Coding instead; the marketing page and the portal are therefore two different type stacks, and this document follows what the marketing page measures.

- **Display (`{typography.display}`)**: 78px, weight 800, line-height 109.2px, letter-spacing -0.78px. The headline is filled with a horizontal gradient from salmon through white to slate, so the text reads as lit from the left.
- **Display mobile (`{typography.display-mobile}`)**: 44px, weight 800 at the phone breakpoint, tracking -0.44px.
- **Heading (`{typography.heading}`)**: 32px, weight 700, used for section questions such as the goals heading and for the card titles.
- **Body (`{typography.body}`)**: 18px, weight 400, line-height 29.52px, tracking -0.18px.
- **Button (`{typography.button}`)**: 16px, weight 400.
- **Link (`{typography.link}`)**: 20px, weight 400, used on the large secondary buttons.

Every size carries negative letter-spacing of roughly one percent of its size; this is the signature of the page's Korean setting, which looks dense but stays legible. The stack declares `sans-serif` as its fallback.

## Layout

The page is a single long column (about 7,900px tall at desktop width in the capture) built from full-width bands. The hero band is left-aligned: headline, one-line sub-copy and two buttons stack from the left edge inside a wide container. Below it a row of three stat cards runs wider than the viewport with the first card cropped by the left edge of the capture. A heading and a wrapping row of chips introduce the second band, then four white product cards sit in another cropped carousel with previous/next buttons beneath.

Spacing runs on a 4px base: `{spacing.s1}` 4px, `{spacing.s2}` 8px, `{spacing.s3}` 12px, `{spacing.s5}` 16px, `{spacing.s7}` 24px, `{spacing.s9}` 32px and `{spacing.s10}` 40px. Cards use deep top padding (80px 40px 40px) to leave room for the isometric illustration at the top, and the large secondary buttons use 16px 32px.

## Elevation & Depth

Depth on the dark field comes from translucency rather than drop shadows. The stat cards combine `{colors.card-bg}` with an inset white highlight (`rgba(255, 255, 255, 0.25) 2px 2px 4px 0px inset`) that reads as a glass edge. White product cards on the lower band use a soft outer shadow (`rgba(22, 34, 51, 0.12) 0px 4px 12px -4px`, with a larger `0px 8px 26px` variant), tinted with the slate colour rather than black. There are no hard borders on cards; outlines appear only on chips and the outlined secondary button.

## Shapes

The radius scale is `{rounded.xs}` 4px, `{rounded.sm}` 8px, `{rounded.md}` 16px, `{rounded.lg}` 32px and `{rounded.pill}`. The small 4px radius belongs to the navigation buttons and the red CTA; 8px to the large secondary buttons; 32px to the glass cards and product cards; the pill shape to the filter chips and the round carousel affordances. The contrast between sharp-cornered buttons and very round cards is deliberate: the buttons feel like tools, the cards like objects.

## Components

**button-primary** — the red inquiry link: `{colors.primary}` fill, `{colors.on-primary}` text, `{typography.button}`, `{rounded.xs}`, padding 12px 16px, height 44px. It sits in the nav bar beside a black button and an outlined language toggle.

**button-secondary** — the large "광고 상품 둘러보기" button: `{colors.surface-pale}` fill and border, `{colors.ink-muted}` text, `{typography.link}`, `{rounded.sm}`, padding 16px 32px, height 55px. Beside it sits an outlined twin with a light border on the dark field.

**nav / nav-link** — the white bar with `{colors.nav-text}` labels (Products, Technologies, Resources, Company, Career); the black "광고센터 바로가기" button uses `{colors.ink}` fill, white text and `{rounded.xs}`.

**card** — the glass stat card: `{colors.card-bg}`, `{rounded.lg}`, padding 80px 40px 40px, inset highlight shadow. **footer** — `{colors.surface-pale}` with `{colors.ink}` text.

Chips are pill-shaped, transparent with a light outline, and the active one is filled white.

## Design System Architecture

Buzzvil documents its system at [design.buzzvil.com](https://design.buzzvil.com), a design portal. The home page is a team manifesto and workflow hub, and states that its Design Library and the library repository are "Buzzvil internal · access required". The Craft section ([design.buzzvil.com/craft](https://design.buzzvil.com/craft/)) describes five principles (simple, iconic, delightful, purposeful, trustworthy), the visual language, and a three-layer token cascade: primitives, then semantic intent, then component-specific tokens, with the example names `--bzv-color-primary-500`, `--bzv-color-action-primary` and `--button-bg-default`. It names three component ecosystems: brand surfaces (`@buzzvil/components`), a mobile library (`@buzzvil/design-library`) and a self-serve library for the ads-center dashboards. The component index at [design.buzzvil.com/lib/components](https://design.buzzvil.com/lib/components/) lists Button, Input, Card and CTA plus layouts (Container, Section, Grid, Stack).

An older engineering post, [Design System at Buzzvil](https://tech.buzzvil.com/blog/design-system-at-buzzvil), describes the origin: built on Google Material Design and organised in pattern, expression and concept layers.

I measured the portal's Button component page; the demo button is Inter 14px, weight 500, a red fill (#ef4343), 6px radius and 38px tall. That does not match the marketing site's 4px, Pretendard CTA, so the portal's component styles are a related but separate surface. The marketing tokens in this file come from the live site; the portal's palette is added only where cited.

## Do's and Don'ts

- Do keep red to one action per band: the inquiry button and small kicker labels.
- Do set headlines in Pretendard 800 with negative tracking; do not use light weights for display.
- Do put numbers first on stat cards and keep captions to a line.
- Do show real product screens in white cards; don't substitute stock photography.
- Don't round buttons beyond `{rounded.sm}`; reserve `{rounded.lg}` and the pill for containers and chips.
- Don't add drop shadows to glass cards; use the inset highlight.
- Don't use the portal's Inter stack on marketing pages.

## Responsive Behavior

The extractor measured a 390px phone viewport: the headline drops from 78px to `{typography.display-mobile}` 44px and wraps to two lines, keeping weight 800 and the tight tracking, while the heading stays at 32px. Carousel behaviour at phone width was not separately measured. The navigation at phone width was not measured, so it is left unspecified.

## Iteration Guide

1. Start from the dark field `{colors.page-largest}` and white nav; add content bands before adding colour.
2. Introduce `{colors.primary}` once per screen, on a `{rounded.xs}` button.
3. Build cards at `{rounded.lg}` with `{colors.card-bg}` and the inset highlight.
4. Keep the type to the six Pretendard roles above; widen only with measured sizes.
5. When a portal token disagrees with the live site, trust the live site for marketing and the portal for product UI.
