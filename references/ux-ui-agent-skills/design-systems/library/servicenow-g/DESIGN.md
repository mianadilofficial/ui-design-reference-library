---
version: alpha
name: ServiceNow
category: "Product & SaaS"
description: "ServiceNow's marketing site pairs a deep Infinite Blue (#032d42) chrome with Wasabi Green (#62d84e / #63df4e) capsule CTAs, set in the proprietary ServiceNow Sans family (Light for body, Bold 48px for the hero h1). Radii are capsule 500px buttons, 24px and 32px cards, 8px inputs; focus is a 2px #3eaa2b outline."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#62d84e"
  on-primary: "#032d42"
  infinite-blue: "#032d42"
  wasabi-green: "#63df4e"
  primary-hover: "#9fe793"
  focus-ring: "#3eaa2b"
  link: "#00718f"
  ink-neutral: "#1d1d1d"
  nav-ink: "#d7e0e6"
  on-dark: "#ffffff"
  card-glass: "#ffffff0d"
typography:
  display:
    fontFamily: ServiceNowSansBold, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 48px
    fontWeight: 400
    lineHeight: 52.8px
    letterSpacing: -0.48px
  heading:
    fontFamily: ServiceNowSansBold, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: -0.4px
  lead:
    fontFamily: ServiceNowSansLight, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: ServiceNowSansMedium, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: ServiceNowSansLight
    fontSize: 16px
    fontWeight: 400
  button:
    fontFamily: ServiceNowSansBook, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
  button-large:
    fontFamily: ServiceNowSansBook, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  input:
    fontFamily: ServiceNowSansLight, "Arial Nova", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  input: 8px
  card: 24px
  md: 30px
  card-xl: 32px
  xl: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 9.5px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 19px
  s9: 20px
  s10: 22px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 20px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.wasabi-green}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 0px 22px
    height: 48px
    borderColor: "{colors.wasabi-green}"
  button-outline-on-dark:
    textColor: "{colors.on-dark}"
    typography: "{typography.button-large}"
    rounded: "{rounded.pill}"
    padding: 0px 22px
    height: 48px
    border: "2px solid #63df4e"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.input}"
    padding: 22.5px 16px 0px
    height: 56px
    boxShadow: rgb(132, 132, 132) 0px 0px 0px 1px
  card:
    backgroundColor: "{colors.card-glass}"
    textColor: "{colors.on-dark}"
    rounded: "{rounded.card}"
    boxShadow: rgba(0, 0, 0, 0.03) 10px 10px 10px 0px inset, rgba(255, 255, 255, 0.01) -10px -10px 10px 0px inset
  footer:
    textColor: "{colors.ink-neutral}"
---

# ServiceNow

## Overview

ServiceNow (servicenow.com, measured 2026-10 at a 1280px desktop viewport, page title "ServiceNow - Put AI to Work") presents an enterprise AI platform with a two-tone personality: a deep teal-navy called Infinite Blue (`#032d42`) carries the header and most of the long homepage, and a bright Wasabi Green (`#62d84e` on the header button, `#63df4e` everywhere else) marks every action and the first words of the hero. The hero headline reads "AI without workflows / is just expensive advice", with "AI without workflows" set in green and the rest in white, followed by a 20px light-weight lead paragraph and a pair of 48px capsule buttons: "Explore Control Tower" (filled green) and "Request Demo" (green outline on dark).

The capture shows the rest of the page as a sequence of product moments: a large screenshot of an "autonomous workforce" console floating over a purple-to-blue gradient, the "flow by servicenow" event promo, a row of three statistic cards (85%, 98%, 95B), a "Meet ServiceNow Otto" spotlight with a green blob mark, a "Welcome back" agentic dashboard mock, a tabbed band (CRM, Employee Experience, Risk and Security, App Development), and a light footer with an email "Get the latest ServiceNow updates" sign-up and a "Request info or schedule a demo" closing call. Imagery is product UI rather than photography; the only portrait is a small circular avatar beside an incident card.

The voice is short and declarative ("Put AI to Work", "Meet ServiceNow Otto", "Learn More"), with trademark marks kept in microcopy ("The world works with ServiceNow™", "of the Fortune 500®").

## Colors

- **Infinite Blue `#032d42`** is the structural color. It fills the 65px header band and the largest measured page band (y 421 to 6123), and it is also the label color on every green button (`on-primary`). The site's own variable `--arc-color-brandblue-900` holds the same value.
- **Wasabi Green** comes in two measured values: `#62d84e` is the fill of the header "Get Started" button (the detected primary CTA), and `#63df4e` (`--arc-color-wasabigreen`) is the fill and 2px border of the larger hero buttons and the color of green headline words. On hover the header button fills to `#9fe793` (`--arc-color-brandgreen-300`).
- **Canvas `#ffffff`** is the body background and the dominant color of the capture: the lower content, footer and sign-up area sit on white.
- **Ink `#000000`** is the most-read dark text on white; the footer and light-surface headings use `#1d1d1d` (`--arc-color-text-primary-on-light`). Inline links on light surfaces are `#00718f` (`--arc-color-link-default-on-light`).
- **On-dark text** is `#ffffff`, the most-read text color on the page overall (2,568 weighted characters). Header navigation items sit at `#d7e0e6` (`--arc-color-brandblue-100`) and brighten to `#ffffff` on hover.
- **Card glass `#ffffff0d`** is a 5% white wash used on the dark statistic and promo cards.
- **Focus ring `#3eaa2b`** (`--arc-color-ui-focus`) appears as a 2px solid outline with a 2px offset on focused links and buttons.

The root variables also define a wider campaign palette (for example `--arc-color-brightindigo #7661ff`, `--arc-color-snu-blue #52b8ff`, `--arc-color-ui-featured #ffde1d`), but the measured homepage surfaces use only the colors listed above plus gradient art.

## Typography

ServiceNow uses its proprietary **ServiceNow Sans** family, loaded as separate font files per weight: ServiceNowSansLight, Regular, Book, Medium, Bold and MonoRegular, all with the fallback stack `"Arial Nova", Arial, Helvetica, sans-serif`. Weight is chosen by switching family name, not by `font-weight`: the hero h1 is ServiceNowSansBold at a computed weight of 400.

- **Display**: the h1 is ServiceNowSansBold 48px / 52.8px, letter-spacing -0.48px (recorded probe; the h1 lives inside a shadow root the extractor did not read).
- **Heading**: section h2s are ServiceNowSansBold 40px / 44px, letter-spacing -0.4px.
- **Lead**: the hero paragraph is ServiceNowSansLight 20px / 30px.
- **Body**: ServiceNowSansLight is the most-read family (3,290 weighted characters) and 16px the most-read size.
- **Subheading**: ServiceNowSansMedium 16px / 24px at weight 700 ("The world works with ServiceNow™").
- **Buttons**: ServiceNowSansBook 14px for the header button, 16px for the 48px hero buttons.

Measured letter-spacing is consistently negative at about -1% of size (14px/-0.14px, 22px/-0.33px, 28px/-0.28px, 48px/-0.48px). Font Awesome 7 Pro supplies icons. Substitute: Arial Nova, then Arial, exactly as the site's own stack declares.

## Layout

The desktop page is 1280px wide and 9,713px tall. Header content runs from x 225 to 1255; the hero and later bands use a content box from x 32 to about 1248, wider than most enterprise sites. The dark main band reaches three columns for the statistic cards; the extractor recorded at most two card columns elsewhere. Measured gaps cluster at 16px, 8px and 32px, and paddings at 16px, 32px and 24px, with 80px used for large section padding. The spacing tokens keep the generated values (4px through 22px). The site's own spacing variables are multiples of 16px (`--arc-space-size-150: calc(16px * 1.5)`, `--arc-space-size-250: calc(16px * 2.5)`).

Density is moderate: big screenshot panels and large type alternate with tight card rows.

## Elevation & Depth

Depth comes from color and gradient rather than drop shadows. The dark cards carry a faint inset bevel, `rgba(0, 0, 0, 0.03) 10px 10px 10px 0px inset, rgba(255, 255, 255, 0.01) -10px -10px 10px 0px inset`, on top of the 5% white wash; that shadow appears on 19 elements. One glow, `rgba(82, 184, 255, 0.25) 0px 0px 7.36475px 5.20593px`, surrounds a blue accent element. Product screenshots float over purple and blue radial gradients defined as `--arc-color-gradient-brand-*` variables. The email input uses a 1px ring `rgb(132, 132, 132) 0px 0px 0px 1px` instead of a border.

## Shapes

Buttons are capsules: 500px radius (`--arc-border-radius-capsule`) on 32 elements, recorded as `pill`. Cards use 24px (`--arc-border-radius-large`) and 32px (`--arc-border-radius-xlarge`). Other measured radii are 30px, 100px, 50% for circular avatars and icon buttons, and 8px for the text input. The variable set also declares a 4px `xsmall` radius, not observed on a homepage element.

## Components

- **Primary button (header)**: `#62d84e` fill, `#032d42` ServiceNowSansBook 14px label, 36px tall, padding 0 20px, capsule. Hover fills `#9fe793`.
- **Hero filled button**: `#63df4e` fill with a 2px `#63df4e` border, 16px label, 48px tall, padding 0 22px. A `::before` circle (clip-path from 0px) with `#9fe793` sits inside the button for the hover fill.
- **Outline button on dark**: transparent fill, white 16px label, 2px solid `#63df4e` border, 48px tall, capsule; its `::before` layer is a 10% green tint `#63df4e1a`.
- **Text input**: white field, 56px tall, 8px radius, padding 22.5px 16px 0 (room for a floating "Email" label), ServiceNowSansLight 16px / 24px.
- **Dark glass card**: `#ffffff0d` fill, 24px or 32px radius, inset bevel shadow, 32px padding on the statistic cards.
- **Tab bar**: the capture shows a dark capsule track with a white active segment and white labels for CRM, Employee Experience, Risk and Security, App Development.
- **Header**: Infinite Blue, white ServiceNow logo (144 × 24), `#d7e0e6` nav items, search, "Sign In" and the green "Get Started".
- **Footer**: `#1d1d1d` headings at ServiceNowSansMedium 24px, four link columns (Company, Services and Support, Resources, My Account), social icons and a region selector.

## Design System Architecture

No public design-system documentation could be opened: https://www.servicenow.com/brand.html and https://horizon.servicenow.com/ both returned HTTP 403 to the fetcher. The shipped site exposes a de-facto system named **Arc**: 400 `--arc-*` custom properties on the root, web components such as `<arc-button>`, and stylesheets served from `etc.clientlibs/ds/clientlibs/clientlib-arc-commons-lts/` (an Adobe Experience Manager client library). The variable naming is semantic and mode-aware: colors are named by palette (`--arc-color-brandblue-900`, `--arc-color-brandgreen-300`, `--arc-color-wasabigreen`) and by role and background (`--arc-color-text-primary-on-light`, `--arc-color-link-default-on-dark`, `--arc-button-solid-border-color-hover-on-light`). Type sizes are declared per breakpoint (`--arc-font-size-heading-level-1-at-sm: 3.6rem`, `--arc-font-size-heading-level-2-at-xxl: 5.2rem`), and each font weight is its own family variable (`--arc-font-family-bold`, `--arc-font-family-book`, `--arc-font-family-light`).

## Do's and Don'ts

- Do pair Infinite Blue `#032d42` surfaces with Wasabi Green actions; green buttons always take an Infinite Blue label, never white.
- Do keep buttons as capsules (500px) and cards at 24px or 32px.
- Do switch ServiceNow Sans family names to change weight (Light for reading, Book for buttons, Bold for display) and keep the slight negative tracking.
- Do color only the opening phrase of a hero headline green and keep the rest white.
- Don't introduce drop shadows on cards; use the 5% white wash and the inset bevel.
- Don't use the campaign colors (indigo, magenta, yellow) as primary actions.
- Don't replace the 2px `#3eaa2b` focus outline with a glow.

## Responsive Behavior

Measured at a 390px mobile viewport: the header band is 49px tall and the extractor recorded a visible menu toggle labelled "Open navigation menu" with no header links visible. The hero headline measures 30px (48px on desktop) and the "Meet ServiceNow Otto" heading 28px (40px on desktop). The first mobile button is "Explore Control Tower", 48px tall and 358px wide, with content edges at x 16 and 374. The most-read mobile text size is 14px, then 10px and 18px. The extractor recorded up to three card columns on mobile. Breakpoint widths, navigation panel behavior and tablet layouts were not measured.

## Iteration Guide

1. Start with the Infinite Blue header and hero, the 48px ServiceNowSansBold headline with a green first line, and the 20px Light lead.
2. Add the capsule button pair: filled `#63df4e` and outlined green on dark, both 48px tall.
3. Keep the 1280px layout wide (content from x 32) and use 16px-based gaps.
4. Use dark glass cards (`#ffffff0d`, 24px/32px radius) for statistics and promos; switch to white canvas with `#1d1d1d` text for the sign-up and footer.
5. Check focus states with the 2px `#3eaa2b` outline and hover with `#9fe793`.
6. Re-measure after any campaign change: the hero copy, gradients and promo cards rotate.
