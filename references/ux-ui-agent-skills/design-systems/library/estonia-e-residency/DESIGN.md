---
version: alpha
name: e-Residency of Estonia
category: "Government & Nonprofit"
description: "The official e-Residency of Estonia site: Aino and Aino Headline type with a 72px light-weight blue headline (#005eeb), ink #0f172a on white, #0062f5 pill buttons with #0030de hover, 16px-rounded photography and pale #f1f5f9 cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f1f5f9"
  ink: "#0f172a"
  primary: "#0062f5"
  on-primary: "#ffffff"
  ink-2: "#005eeb"
  ink-5: "#3d4b5e"
  primary-hover: "#0030de"
typography:
  display:
    fontFamily: "\"Aino Headline\", Aino, \"Noto Sans\", arial, helvetica, sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 82px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: "\"Aino Headline\", Aino, \"Noto Sans\", arial, helvetica, sans-serif"
    fontSize: 46px
    fontWeight: 500
    lineHeight: 56px
    letterSpacing: "-0.2px"
  heading:
    fontFamily: Aino, "Noto Sans", arial, helvetica, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  subheading:
    fontFamily: Aino, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  body:
    fontFamily: Aino, Arial, Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: Aino, "Noto Sans", arial, helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: Aino, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Aino, "Noto Sans", arial, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 10px
  md: 16px
  lg: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 14px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 44px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 0px
    height: 40px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    padding: 32px 32px 88px
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

# e-Residency of Estonia

## Overview
The measured site, https://www.e-resident.gov.ee/, is the official programme site of "e-Residency of Estonia" (page title: "e-Residency of Estonia | Apply and start an EU company online"). It is a government service marketing page: a white header with the "REPUBLIC OF ESTONIA E-RESIDENCY" lockup, a navigation row (Why e-Residency?, How it works, Resources, Service Providers, Blog, Events), globe, search and account icons, and a blue pill "Apply now" button. The hero sets the lowercase three-line promise "your digital id / your company / your freedom" in a large blue light-weight headline beside a rounded photograph of the e-Residency card and kit resting on stone.

Below it come four feature columns (Do business easily, Feel digitally secure, Unrivalled growth opportunities, Join an active community), a "What is e-Residency?" text-and-image band, and a "How it works" row of three pale-blue cards with flat illustrations and duration chips (3-8 weeks, 1-2 days, as long as it takes). The voice is plain, confident and second-person; links end in arrows or chevrons ("See how easy it is", "Read more about the programme"). The page is 4,301px tall at 1280px.

## Colors
- **Canvas `#ffffff`** is the body background; **`colors.page-largest` `#f1f5f9`** is the pale slate band that covers the largest area (cards and footer).
- **Ink `#0f172a`** is the near-black navy used for nearly all body copy (measured as the most-read text color).
- **Primary `#0062f5`** is the fill of the "Apply now" and "Subscribe" pills; **on-primary `#ffffff`** is the label; **`colors.primary-hover` `#0030de`** is the measured hover fill of "Apply now".
- **`colors.ink-2` `#005eeb`** is the electric blue of the hero headline and text links; **`colors.ink-5` `#3d4b5e`** is the secondary grey-blue text.

The root custom properties show a far larger palette than the page uses on its home screen: 400 root variables were recorded, including named families such as `--color-brand-bogs-parika` (#194f76), `--color-brand-bays-estonian-blue-a-800` (#0030decc), `--color-brand-islands-abruka` (#9b53bd), `--color-brand-parks-matsalu` (#12251c), `--color-brand-beaches-narva-joesuu` (#ff754b) and `--color-brand-bays-parnu` (#cee2fd). Their names refer to Estonian bays, bogs, islands, parks and beaches. They are defined in CSS but were not promoted to tokens because the measured home page does not use them as fills.

## Typography
Everything is set in **Aino**, with **Aino Headline** for display. `typography.display` is 72px / weight 500 / line-height 82px / letter-spacing -1px; its mobile counterpart `typography.display-mobile` is 46px / 500 / 56px / -0.2px (measured at 390px). `typography.subheading` is 32px / 400 / 40px and `typography.heading` is 24px / 400 / 32px (card and section titles such as "How it works"). `typography.body` is 18px / 400 / 28px. `typography.nav` is 16px / 400 / 24px. Buttons use bold: `typography.button` is 14px / 700 / 20px for the small header pill and `typography.button-secondary` is 16px / 700 / 24px.

Fallbacks are declared as "Noto Sans", Arial, Helvetica, sans-serif. The root variables define a type scale with rem sizes and per-step line heights and letter spacing (for example `--text-heading-lg` 2.25rem, `--text-display-md` 3rem, `--text-display-max` 12rem, with tracking down to -2.5px at the largest size), so the scale is token-driven. Aino is the custom face; where it cannot be loaded, a geometric grotesque such as Noto Sans is the declared fallback.

## Layout
A single centred container holds a 12-column-style layout: the hero is two columns (text left, image right), the feature row is four equal columns, the explanatory band is text and image side by side, and "How it works" is three equal cards. The most frequent gaps are 24px (39 uses), 4px, 8px and 32px; larger vertical gaps of 104px appear between bands. Cards have 32px padding with 88px at the bottom (`components.card`) so that an arrow glyph sits at the foot. Whitespace is generous; the page is calm and low-density.

## Elevation & Depth
No box shadows were measured on the home page (the box-shadow frequency list is empty). Depth is expressed with tinted surfaces: the `#f1f5f9` card and footer fill, pale-blue illustration panels, and translucent blue overlays (#0062f529 is among the measured background areas). Hover feedback is a colour change, not a lift: the primary button goes from `#0062f5` to `#0030de`.

## Shapes
Shape language is soft and rounded. `rounded.pill` (9999px) is the button shape (16 uses), `rounded.xs` is 4px, `rounded.sm` is 10px, `rounded.md` is 16px (used for photographs and cards) and `rounded.lg` is 24px. The corpus also holds one-sided radii such as 10px 10px 0px 0px for card tops with images. Photographs are cut to rounded rectangles; duration chips are small dark pills.

## Components
- **Button primary** (`components.button-primary`): `#0062f5` fill, white 14px bold text, pill radius, 36px tall, padding 0px 14px. It is the "Apply now" pill in the header.
- **Button secondary** (`components.button-secondary`): the same fill and radius, 16px bold, 44px tall, padding 0px 16px (the "Subscribe" button). The capture also shows a pale grey "How it works" pill beside the hero text whose measured fill is `#002d7214`.
- **Nav / nav-link**: white bar, ink `#0f172a` labels with chevrons for menus; `components.nav-link` text is `#0062f5` with a 4px radius.
- **Text input**: 40px tall, 8px 0px padding, ink text, 16px type.
- **Card**: `#f1f5f9` surface, 32px padding, photo or illustration on top, heading, chip, body text and an arrow.
- **Footer**: `#f1f5f9` surface with ink text.
- **Text link**: blue with a leading chevron or trailing arrow.

## Design System Architecture
No public design-system documentation site was located from the pages opened; the page read was the home page, https://www.e-resident.gov.ee/, measured by the extractor. The shipped CSS is nevertheless systematic: 400 root custom properties in a Tailwind-style naming scheme (`--color-*`, `--text-*`, `--font-headline`, `--font-weight-bold`, `--container-md`, `--tw-inset-shadow-alpha`), with brand colors named after Estonian landscapes (bays, bogs, islands, parks, beaches), semantic groups such as `--color-ui-neutral-main-pressed`, `--color-ui-inverted-alpha-main`, `--color-accessibility-focus-inverted`, `--color-error-a-25` and alpha ramps ("-a-400", "-a-800"). A Toastify notification library's variables are also present. This is the de-facto system: tokens on `:root`, utility-class composition.

## Do's and Don'ts
- Do set hero statements in Aino Headline, lowercase, in `colors.ink-2` blue at 72px.
- Do use the pill shape for every button and the `#0062f5` fill with white bold text.
- Do pair photography of real cards and kits on stone with soft rounded corners.
- Do end links with a chevron or arrow and write in plain second person.
- Don't add shadows; the measured page uses tinted surfaces instead.
- Don't use square buttons; 4px radius belongs to small link elements.
- Don't use the landscape-named palette colors as primary actions.
- Don't use bold for body copy; weight 400 is the body weight.

## Responsive Behavior
The 390px mobile pass recorded the hero heading at 46px (`typography.display-mobile`) and a mobile character distribution led by 18px, 16px and 20px type, with 14px, 22px and 24px also present. Column counts, menu behaviour and breakpoints were not measured on mobile, so none are described. The desktop measurement is at 1280px.

## Iteration Guide
1. Begin with `colors.canvas`, `colors.ink` and `colors.primary`; add `colors.page-largest` for cards and footers.
2. Use `typography.display` once per page; use `typography.heading` for card titles.
3. Use `components.button-primary` for the single header action and `components.button-secondary` for in-page actions.
4. Round photographs at `rounded.md` and buttons at `rounded.pill`.
5. Verify with `node web/scripts/verify-designs.mjs --slug=estonia-e-residency`.
6. Measure an inner page with the extractor before adding any new token.
7. When writing new copy, follow the measured voice: short plain sentences, lowercase hero statements, verbs such as "start", "run" and "join", and duration chips that state real time ranges as the page does (3-8 weeks, 1-2 days).
8. When adding imagery, choose either real product photography on stone with blue light, or flat blue illustrations on a pale-blue panel; the two treatments are the only ones visible in the capture.
