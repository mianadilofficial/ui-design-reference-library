---
version: alpha
name: "Maxima Therapy"
category: "Culture & Events"
description: "Maxima Therapy, a neurodivergent-support provider, measured live: butter #fff2b7 canvas, orange-red #fd4401 primary, yellow #fdcb40 header, green #00b351 footer, Robuck Rounded 48.1482px headings and ABC Diatype Rounded Plus text."
colors:
  canvas: "#fff2b7"
  page-body: "#ffffff"
  ink: "#000000"
  primary: "#fd4401"
  surface-2: "#f3efe0"
  surface-3: "#00b351"
  ink-4: "#2668fd"
  nav-bg: "#fdcb40"
typography:
  display:
    fontFamily: "\"Robuck Rounded\""
    fontSize: 48.1482px
    fontWeight: 400
    lineHeight: 38.5185px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Robuck Rounded\""
    fontSize: 46.8px
    fontWeight: 400
    lineHeight: 37.44px
    textTransform: uppercase
  heading:
    fontFamily: "\"ABC Diatype Rounded Plus\""
    fontSize: 25.9259px
    fontWeight: 700
    lineHeight: 27.2222px
    letterSpacing: "-0.518519px"
  body:
    fontFamily: "\"ABC Diatype Rounded Plus\""
    fontSize: 14.8148px
    fontWeight: 500
    lineHeight: 17.7778px
    letterSpacing: "-0.296296px"
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 11.8519px
    fontWeight: 400
    lineHeight: 17.7778px
rounded:
  xs: 3.7px
  sm: 7.41px
  md: 18.52px
  lg: 25.93px
  xl: 37.04px
  pill: 9999px
spacing:
  s1: 5.19px
  s2: 10.37px
  s3: 14.81px
  s4: 18.96px
  s5: 20.74px
  s6: 22.22px
  s7: 33.19px
  s8: 37.04px
  s9: 92.59px
  s10: 151.85px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.primary}"
    padding: 0px 37.037px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    padding: 37.037px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    padding: 0px 37.037px 37.037px
---

# Maxima Therapy

## Overview
Maxima Therapy (maximatherapy.com, page title "Maxima Therapy | Personalized Support for Neurodivergent Individuals") is a therapy provider's site, and its design is a playful illustrated world. The measured home page is 1280px wide and 9315px tall. The first screen is a golden-yellow sky above a pale-butter ground, with a flat geometric illustration: a smiling blue hill, a castle of a purple triangle, red block and pink tower, a flower, a toy train, clouds, birds and a purple figure with outstretched arms. In front of it sits an orange-red program card for "EARLY INTERVENTION, AGES 0-3 — Nurturing growth through play, therapy, and parent support." with previous and next arrow buttons at either side, which makes the hero a program carousel. The header holds the "maxima" wordmark at left and a white pill containing Programs, About and Service Areas links, then an orange "Donate" pill and a round white mail icon button.

The page speaks in a children's picture-book language: saturated primaries, rounded shapes, condensed heavy capitals for headings and a friendly rounded sans for text. The design is warm and optimistic, and the colour system is organised per program (each program has a primary and secondary colour), so colour acts as wayfinding.

## Colors
Brand colours are published as CSS custom properties in the stylesheet, so each is measured and named by the site itself.
- `canvas` #fff2b7 (`--color-yellow-pale`) is the dominant page background (6087 area weight); `surface-2` #f3efe0 (`--color-beige`) is the second-largest (5129); `page-body` #ffffff is the body background.
- `ink` #000000 is the main text colour (1007 characters weight).
- `primary` #fd4401 (`--color-red`) is the orange-red used for the hero card, heading text and the Donate pill (a 106 area weight background and 138 characters weight text).
- `nav-bg` #fdcb40 (`--color-yellow`, also `--color-program1-primary`) is the golden yellow of the header and sky.
- `surface-3` #00b351 (`--color-green`) is the green footer background (2482 area weight). `ink-4` #2668fd (`--color-blue`) is the blue used for icons, links and the hill.
- Program colour pairs from the root properties: program 1 #fdcb40 and #fff2b7; program 2 #00b351 and #a7eb98; program 3 #f780d4 and #f5cbff; program 4 #2cd1d0 and #b9ecea.
- Other named values: `--color-mauve` #503fd0, `--color-salmon` #ffcccd, `--color-salmon-pale` #ffa8e5, `--color-purple` #6b3088, `--color-turquoise-dark` #2b93a1, `--color-blue-dark` #314c95, `--color-red-dark` #ae0c36, `--color-green-dark` #005c00, `--color-blue-sky` #cff2f1, `--color-blue-moss` #eef9f8, `--color-light-gray` #f1f1f1 and `--color-orange` #ff8800.
The root properties also include Tailwind default values and cookie-consent variables (`--cc-*`); those are framework and third-party styles, not brand colours.

## Typography
Three loaded families are used.
- **Robuck Rounded** (400, with Robuck 400) is the condensed, heavy display face for headings such as "EARLY INTERVENTION": `display` is 48.1482px, weight 400, line height 38.5185px, uppercase, and `display-mobile` is 46.8px with 37.44px line height.
- **ABC Diatype Rounded Plus** (variable 300 to 900) is the text face and covers the most characters (1192 weight). `heading` is 25.9259px at weight 700 with -0.518519px letter spacing; `body` is 14.8148px at weight 500 with a 17.7778px line height and -0.296296px letter spacing.
- **ABC Diatype Rounded Mono** (500) is loaded.
- `nav` uses the system sans stack (ui-sans-serif, system-ui, sans-serif, plus emoji fonts) at 11.8519px weight 400.
Other measured sizes are 18.5185px, 16.2963px, 10.6667px and a 166.667px display size. Sizes are fractional because the stylesheet scales them with the viewport.

Font substitutes: Robuck and the ABC Diatype family are loaded as web fonts by the site; this measurement did not check their licensing, and the declared fallback for navigation is the system sans stack above.

## Layout
The page is built from full-width colour blocks that alternate sky yellow, butter, beige and green, with illustrations floating in them. The header region has 37.037px horizontal padding. The hero centres a narrow orange card in front of the illustration; below it the page is largely the butter canvas with clouds. The footer is green with 37.037px horizontal padding and bottom padding, listing links such as Programs, Careers, Shop and Service Areas.

Spacing measured: 5.19px, 10.37px, 14.81px, 18.96px, 20.74px, 22.22px, 33.19px, 37.04px, 92.59px and 151.85px (`spacing` s1 to s10). The Tailwind base unit `--spacing` is .25rem, so the stylesheet is built on Tailwind CSS v4 variables.

## Elevation & Depth
No box shadows were measured. Depth comes from layering flat illustrated shapes and from large colour fields; the orange program card sits above the illustration without a shadow. Cloud shapes and overlapping block shapes provide the sense of space.

## Shapes
Shapes are soft. Measured radii: 50% (circles; the round mail and arrow buttons), 3.7037px, 37.037px, 25.9259px, 7.40741px and 18.5185px, plus pill (9999px) used for the navigation capsule and Donate. Tokens: `xs` 3.7px, `sm` 7.41px, `md` 18.52px, `lg` 25.93px, `xl` 37.04px and `pill` 9999px. The program card uses a large corner radius as seen in the capture.

## Components
- **nav**: yellow `{colors.nav-bg}` header region, padding 0px 37.037px, containing a white pill of links in the `nav` typography with black text.
- **nav-link**: `{typography.nav}` in `{colors.ink}`.
- **link**: `{typography.body}` in `{colors.ink}`.
- **card**: white `{colors.page-body}` background with 37.037px padding as measured on a content card.
- **footer**: green `{colors.surface-3}` background, black text, padding 0px 37.037px 37.037px.
- **Donate button, program card and round icon buttons**: visible in the capture and styled with the orange-red `{colors.primary}` and white; the extractor did not detect a primary button role, so no fill, padding or height values are recorded and no `button-primary` token is declared.
No hover states were recorded (hover list empty).

## Design System Architecture
No public design system was found, and no search was run; the page opened was https://maximatherapy.com/. The site ships its own tokens as CSS custom properties built on Tailwind CSS v4: 115 root variables include named brand colours (`--color-red`, `--color-yellow`, `--color-green`, `--color-blue`, `--color-beige`, program pairs such as `--color-program1-primary` and `--color-program1-secondary`), radii (`--radius-lg` .5rem, `--radius-3xl` 1.5rem), type (`--font-sans`, `--font-weight-bold` 700, `--font-weight-medium` 500, `--text-sm` .875rem, `--text-base` 1rem) and Tailwind state variables. A cookie-consent library contributes `--cc-*` variables. The brand layer is therefore a Tailwind theme with named colours and per-program colour pairs.

## Do's and Don'ts
Do:
- Use `{colors.primary}` for the Donate action and program cards, and pair each program with its own primary and secondary colours.
- Set headings in Robuck Rounded uppercase and text in ABC Diatype Rounded Plus.
- Use round and pill shapes for controls (`{rounded.pill}`).
- Keep illustration flat and geometric on the colour fields.

Don't:
- Do not use Tailwind's grey or oklch blue values or the cookie-consent colours as brand colours.
- Do not add drop shadows; none were measured.
- Do not use the system sans stack outside navigation, where it was measured.

## Responsive Behavior
At 390px the extraction measured: h1 46.8px (Robuck Rounded, weight 400, line height 37.44px), h2 26px (ABC Diatype Rounded Plus, weight 700, 27.3px line height), body text 17.68px weight 500 with a 21.216px line height, and navigation 41.6px Robuck Rounded with a 33.28px line height. Layout behaviour such as stacking and the carousel at mobile width was not measured.

## Iteration Guide
1. Start with a `{colors.canvas}` page and a golden `{colors.nav-bg}` header region with illustration.
2. Use the program colour pairs for wayfinding.
3. Set headings with `{typography.display}` and body with `{typography.body}`.
4. Use round buttons (50%) and a pill link capsule.
5. Measure the Donate button on its own before adding a button token: `node web/scripts/extract-tokens.mjs --slug=maxima-therapy--donate --url=https://maximatherapy.com/ --force --no-motion`, then re-run `node web/scripts/verify-designs.mjs --slug=maxima-therapy`.
