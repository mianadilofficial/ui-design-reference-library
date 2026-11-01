---
version: alpha
name: State of California (CA.gov)
category: "Design Systems"
description: "The State of California's portal at www.ca.gov: Public Sans in bold white-on-blue headlines, a single civic blue (#046b99) for buttons, links and the hero, dark slate-ink body text (#3b3a48) on white, 5px-radius buttons and sharp 3px-radius topic cards with a blue bottom rule, built on Bootstrap 5 variables plus a custom cagov stylesheet."

colors:
  canvas: "#ffffff"
  ink: "#3b3a48"
  ink-strong: "#000000"
  primary: "#046b99"
  on-primary: "#ffffff"
  surface-tint: "#eef8fb"
  band-deep: "#023a53"
  hairline: "#d4d4d7"
  footer-bg: "#fafafa"
typography:
  display:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 38.36px
    fontWeight: 700
    lineHeight: 52.745px
  display-mobile:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 37.08px
    fontWeight: 700
    lineHeight: 50.985px
  heading:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 30.28px
    fontWeight: 700
    lineHeight: 45.42px
  subheading:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 24.28px
    fontWeight: 700
    lineHeight: 39.455px
  body:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 19.28px
    fontWeight: 400
    lineHeight: 28.92px
  button:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 19.28px
    fontWeight: 600
    lineHeight: 28.92px
  nav:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 15.2px
    fontWeight: 400
    lineHeight: 27.648px
  link:
    fontFamily: "\"Public Sans\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", \"Noto Sans\", sans-serif"
    fontSize: 17.28px
    fontWeight: 600
    lineHeight: 25.92px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 10px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 13.6px
  s7: 16px
  s8: 24px
  s9: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 24px
    height: 47px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 1px 2px 1px 16px
    height: 50px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-strong}"
    padding: 16px 0px 0px
    borderColor: "{colors.hairline}"
---

## Overview

CA.gov is a public-service portal, and the capture reads that way: a white page with one civic blue, large bold sans-serif headings, and almost no ornament beyond a few circular photographs and a faint line drawing of mountains and a sun in the hero. The first screen is a full-width blue hero band carrying a white h1, "Find government services and information", a search field, and an outlined "Beta" callout that invites the visitor to try a service finder. Below it a darker band lists popular services as outlined chips, then the page returns to white for "Popular topics" (six link cards), "California highlights" (three cards with circular photos) and a blue "California by the numbers" band.

The voice is plain and task-led: "Real ID/license", "Check your refund", "Get help", "Learn more about California". Everything is sentence case. The interface prioritises findability over brand expression, and the single blue (`primary`, #046b99) does all of the work: it fills primary buttons, colours link and card-title text, forms the hero, and underlines each topic card.

## Colors

The palette is tight. `canvas` is #ffffff and covers roughly half of the first screen. `primary` is #046b99, the fill of every filled button ("View all topics", "Learn more about California") and of the hero. `on-primary` is #ffffff. Running text is `ink` #3b3a48, a slightly violet charcoal used for body copy and for the nav container, while `ink-strong` #000000 is used for nav links and the footer. The extractor first rated the brand blue as the most-read text colour because link text and card titles use it; for this document `ink` means the body-copy colour and the blue is reserved as the action colour.

Supporting tones: `surface-tint` #eef8fb is a pale blue wash for panels, `band-deep` #023a53 is the near-navy band behind the popular-service chips, `hairline` #d4d4d7 is the 1px border on cards and inputs, and `footer-bg` #fafafa tints the footer. The site's own custom properties name the same blue `--brand-primary` and the same grey `--input-border`, which is a useful cross-check that these values are intentional rather than incidental. Browser-default link colours do not appear in this system.

## Typography

One family carries the interface: Public Sans, loaded as a variable font with weights from 100 to 900, followed by a system-ui stack (-apple-system, Segoe UI, Roboto, Helvetica Neue, Noto Sans, sans-serif). A second font face named CaGov is also declared in the stylesheet; the capture does not show it in running text, so nothing is documented about it here. The headings are bold (700): `display` is 38.36px on desktop and 37.08px at the 390px mobile width (`display-mobile`), `heading` is 30.28px, and `subheading` is 24.28px. `body` is 19.28px at regular weight with a 28.92px line height, which is large for a web page and gives the portal an easy, public-notice legibility. Buttons use 19.28px at weight 600; the `nav` face is 15.2px regular and in-card links use 17.28px at weight 600.

Substitutes: Public Sans is an open-source typeface, so no substitute is needed; if it fails to load, the declared stack falls through to system-ui.

## Layout

The page is a fixed-width centred column on a 12-column-style grid inherited from Bootstrap, with 48px side gutters visible on the hero heading. The pattern is alternating full-width bands: white utility strip, white header and nav row, blue hero, deep-blue chips band, white content, and a blue statistics band. Cards sit in a three-up row at desktop width with generous gaps. Spacing tokens run from 1px through 5, 6, 8, 12, 13.6, 16, 24 and 48px; large section rhythm uses the 48px step while components use 8 to 24px. Text blocks are left-aligned and ragged-right, and there is no centred hero copy.

## Elevation & Depth

Depth is almost flat. Cards are separated from the page by a 1px `hairline` border rather than by shadow, and the topic cards add a thicker blue bottom rule in `primary` as their only emphasis. The site's stylesheet does declare box shadows (a 0 2px 4px shadow at 50% black on a few controls and Bootstrap's focus ring), but at rest the layout relies on colour bands and borders. Layering happens only in the hero, where a pale line illustration and a circular photograph overlap the blue field.

## Shapes

Corners are small and civic. `button-primary` uses `rounded.md` 5px; text inputs use `rounded.sm` 4px; cards and chips use `rounded.xs` 3px; and `rounded.lg` 10px, which equals the site's `--bs-border-radius`, appears on pill-like links such as the "Get started" button inside the Beta callout. Photographs are cropped into circles, which is the only strongly round shape on the page and the main piece of art direction: landscape and people photography is masked into discs of the same diameter inside the highlight cards.

## Components

- **Primary button.** `button-primary` is a #046b99 fill, white 19.28px weight-600 label, 5px radius, 8px by 24px padding, 47px tall, with a border in the same blue. Used for "View all topics" and "Learn more about California".
- **Outlined chip / secondary action.** On blue bands the control inverts to a white outline with white text and the 10px radius, as seen in the "Get started" button and in the popular-service chips.
- **Topic card.** `card` is a white card with a 1px `hairline` border, 3px radius, blue bold title in the `subheading` style, a chevron on the right, and a thick blue underline.
- **Search field.** `text-input` is a white field 50px tall with 4px radius and 16px left padding, with a magnifier button inside it.
- **Navigation.** `nav` is a white row with sentence-case blue links (Services, Departments, About California, Get help), in the 15.2px `nav` face.
- **Footer.** A `footer-bg` #fafafa block with `hairline` top border and black links.

## Design System Architecture

The California state government publishes a design system at [designsystem.ca.gov](https://designsystem.ca.gov/). The homepage I opened describes it as a framework for state agency teams to build websites and apps more efficiently, says California is "working toward" it, and states it is at version 0; it lists no tokens, packages or fonts on that landing page. A token page at designsystem.ca.gov/style/tokens returned 404 when requested, so no values are taken from it. I did not find evidence that CA.gov itself ships that system: the page's own CSS (`cagov-custom.min.css`) is a Bootstrap 5 build, declaring `--bs-*` variables, with site variables such as `--brand-primary`, `--color-p2`, `--main-nav-bg`, `--input-border` and a `--gray-*` scale layered on top. This document therefore describes the de-facto system from the shipped CSS and takes no values from the design-system site.

The older State Web Template V6 site ([template.webstandards.ca.gov](https://template.webstandards.ca.gov/about.html)) describes itself as an open-source template maintained by the Office of Digital Services, and its typography page names Public Sans, the same family the portal loads. Sources are linked in SOURCES.json.

## Do's and Don'ts

- Do use #046b99 for every filled action and keep one filled button per section.
- Do pair white text only with `primary` or `band-deep` backgrounds, never with the pale `surface-tint`.
- Do keep headings bold Public Sans and sentence case.
- Do crop photography into circles to match the highlight cards.
- Don't introduce a second accent colour; status colours in the stylesheet are Bootstrap defaults and are not part of the brand look.
- Don't use shadows to separate cards; use the hairline border and the blue underline.
- Don't set body copy below the 19.28px `body` size on desktop.
- Don't use browser-default link colours.

## Responsive Behavior

The stylesheet declares breakpoints including 540px (`--breakpoint-xm`). At the measured 390px mobile width the h1 shrinks slightly to 37.08px, so the display scale is nearly constant; mobile layout changes were not measured. Touch targets stay at 47px or taller for buttons and 50px for the search input.

## Iteration Guide

1. Start from `canvas` white and `ink` for copy; add the blue only for actions, links and hero bands.
2. Build headings in `display`, `heading` and `subheading` at weight 700, body in `body`.
3. Use `button-primary` for the main action and the white outline variant on blue bands.
4. Cards: white, hairline border, 3px radius, blue title, blue bottom rule.
5. Before adding any value, check it against the CSS variables the site declares; if it is not there, leave it out.
