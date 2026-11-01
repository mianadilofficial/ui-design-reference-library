---
version: alpha
name: Government of Alberta
category: "Design Systems"
description: "Government of Alberta (www.alberta.ca) is a civic services portal in Acumin Pro Semi Condensed with a single #006dcc blue for links, search and the Menu tab, #333333 text, a full-bleed photographic hero with white 48px bold headline, #f2f2f2 and #ffffff content bands, and square-edged cards."

colors:
  canvas: "#ffffff"
  page-largest: "#f2f2f2"
  ink: "#333333"
  primary: "#006dcc"
  on-primary: "#ffffff"
  surface-muted: "#e5e5e5"
  ink-body: "#36424a"
  blue-link-alt: "#0070c4"
  hairline: "#919191"
  text-input-text: "#000000"
  text-input-border: "#dcdcdc"
typography:
  display:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 56px
  display-mobile:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 56px
  heading:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 44px
  subheading:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 18px
  input:
    fontFamily: acumin-pro-semi-condensed, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 42px
rounded:
  xs: 4px
  sm: 40px
  pill: 9999px
spacing:
  s1: 8px
  s2: 9px
  s3: 12px
  s4: 14px
  s5: 20px
  s6: 23px
  s7: 24px
  s8: 28px
  s9: 32px
  s10: 44px
components:
  back-to-top:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 16px 16px 44px
    height: 50px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 36px 12px 12px
    height: 43px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 36px 12px 12px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
  nav-link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    padding: 0px 20px 4px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 12px 12px 14px
    height: 42px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
---

# Government of Alberta

## Overview

The page measured is the homepage of www.alberta.ca, titled "Government of Alberta | Alberta.ca". It is the main entry point to provincial services and information. At the top, a slim white header carries the handwritten-style "Alberta" wordmark with a small teal square on the left, a search field with a blue magnifier button, an account icon and a tall blue "Menu" tab at the far right. Beneath it is a large full-bleed photograph of a logging truck on a forest road, overlaid with a white bold headline ("Tariff-related resources for Alberta businesses"), a one-line white subheading and an outlined "Share your input" button. A thin pale-blue line closes the hero.

The body then switches to a white band with the heading "Find the Alberta government services and information you need" over a three-column index of services, each prefixed by a black line icon and set as an underlined blue link (About government, Agriculture, Health, Housing, Justice, Tax information and so on). A grey "Initiatives" band follows with image-topped cards: a large landscape card, a red app icon card, and cards with photographs of people, hospitals and weather. The voice is plain, direct English: service names as links, short descriptive sentences on cards, and calls to action like "Share your input" and "Download the app".

## Colors

The canvas is #ffffff, white, used for the service index band. The largest measured background area is #f2f2f2, a light grey used for the "Initiatives" band, the footer and the skip link. Text is #333333 at its most frequent, with #36424a for card copy; the measured card copy colour is a slightly blue-leaning dark grey.

The only saturated brand color is #006dcc, a clear blue. It colours every link and card title, the search button, the "Menu" tab (a measured 90px tall block with white text, which turns #333333 on hover), outlined buttons and nav items. A second, nearly identical blue, #0070c4, appears in a small amount of link text. The hero's headline is #ffffff white because it sits on a photograph. Borders and field outlines use #919191 for strong strokes, #dcdcdc for the search input, and #e5e5e5 appears as a muted surface tone.

The page's root custom properties (`--color-yellow`, `--color-green`, `--color-purple`, `--color-red` and similar) describe a different palette from what is rendered on this page, so no values were taken from them.

## Typography

The family is Acumin Pro Semi Condensed, a webfont loaded in regular (400) and bold (700), with a generic sans-serif fallback. Acumin is a commercial typeface, so if it is not available use a narrow grotesque with similar proportions, such as Arial Narrow or Roboto Condensed, for the whole system, and keep sizes and weights unchanged.

Measured steps: `display` is the hero h1 at 48px bold on a 56px line (on mobile `display-mobile` is 38px bold on a 56px line). `heading` is 36px bold on a 44px line, used for section titles such as "Initiatives". `subheading` is 24px regular on a 32px line, which styles card titles in blue. `body` is 18px regular on a 28px line. `button` is 18px bold on an 18px line, and `input` is the 16px style of the search field.

Weight is used sparingly: bold only for page and section headlines and buttons, regular for everything else. The narrow letterforms keep long service names compact.

## Layout

The page is 3739px tall at a 1280px viewport. Content aligns to a single left edge: the hero headline, the services heading, the index icons and the first card all start at the same margin. The services index is three equal columns; below, the "Initiatives" cards form a grid with a wide first card and two tall narrow cards in the first row, then three equal cards in the second.

Spacing steps in the tokens run from 8px to 44px. The primary measured button uses a 44px left padding to make room for an icon, and the outlined link button uses 9px 36px 12px 12px padding with a trailing arrow. Text inputs are 42px high with 12px 12px 14px padding.

## Elevation & Depth

Depth is limited. Cards have a thin border and sit flat on the grey band; the measured CSS contains a soft diffuse shadow `0px 3px 13px rgba(51,51,51,.11)` and an inset focus ring `inset 0 0 0 1px #333`. Most elements measure no shadow.

The main layering device is the photographic hero, with text placed directly on it, and the alternating white and grey bands. Do not add heavy shadows or glassy overlays.

## Shapes

The core shape is a square rectangle with a 4px radius. 4px is 4px and is used for the outlined button, the link button, and the text input. 40px is 40px and belongs to the pill-shaped back-to-top control. 9999px is the fully rounded form used for circular icon controls. The "Menu" tab and the search button measure square (the Menu tab is measured at 0px radius).

Icons are thin black line pictograms set in a uniform square, and the logo is a script wordmark. Cards are rectangles with a thin grey border and an image at the top edge.

## Components

**Menu tab.** A 90px high block at the right of the header, #006dcc background with white bold text and a hamburger glyph; on hover it becomes #333333 with the same white text. Square corners.

**Back-to-top button.** The extractor's primary call to action: #006dcc fill, #ffffff text, 18px bold, 50px high, 40px radius, padding 12px 16px 16px 44px, border in the same blue. Its label is "Back to top", so it is a utility control rather than a main action.

**Outlined button ("Share your input").** White fill, #006dcc text and border, 18px bold, 43px high, 4px radius, trailing arrow; on hover the text and border turn #333333.

**Search field.** White, 42px high, 4px radius, with a #dcdcdc border and a joined blue square magnifier button.

**Service link.** Blue underlined 18px text with a left icon.

**Initiative card.** Image on top, a 24px blue title, 18px dark body copy, and a thin grey border.

**Footer.** Grey (#f2f2f2) with blue links.

## Design System Architecture

The Government of Alberta publishes the GoA Design System at https://design.alberta.ca, which I opened. It describes itself as a resource for Alberta government digital services that enables teams to build faster using shared components, templates, tokens and examples while maintaining accessibility and brand compliance, with service patterns, design tokens and an experimental dark mode. The page I read does not name a maintainer, a typeface or hex colors, and I opened no other page of it.

I could not confirm that alberta.ca uses it. The site's markup carries many class names with a `goa-` prefix (for example `goa-background--blue`, `goa-background--grey`, `goa-card`, `goa-aboutlinks`) and an element id of `goa-main-nav`, but a shared prefix is not proof that the design-system library produced them, and the extracted root variables are an unrelated eleven-color `--color-*` set. For that reason no values were taken from the design-system site: all tokens in the frontmatter were measured on the rendered page, and the de-facto system here is a set of `goa-*` utility and component classes with one blue and a grey band palette.

## Do's and Don'ts

Do use #006dcc for all interactive text, icons buttons and the Menu tab. Do keep headings bold and body regular in Acumin Pro Semi Condensed. Do pair a hero photograph with white bold text and a single outlined button. Do present services as an index of underlined blue links with line icons. Do use alternating white and grey bands.

Don't introduce other accent hues; the red, yellow and purple custom properties are not visible in the measured design. Don't use blue for large fills other than the Menu tab and small buttons. Don't round cards or inputs beyond 4px. Don't put text on the photograph without checking its contrast. Don't treat the back-to-top control as the main call to action.

## Responsive Behavior

The extraction recorded 1280px and 390px widths. At mobile the hero headline drops from 48px to 38px with an unchanged 56px line height. No breakpoints were measured, so none are stated. The index of service links is three columns on desktop and the Initiatives grid mixes wide and narrow cards, so both are expected to stack; this has not been measured.

Controls keep generous touch sizes: the Menu tab is 90px high, buttons are 43px to 50px high, and the search input is 42px high. Preserve those heights on small screens.

## Iteration Guide

Start from a white canvas and a grey band, Acumin Pro Semi Condensed at 18px body, and one blue, #006dcc. Build a hero with a photograph, a 48px bold white headline and one outlined button. Follow with an icon-led service index in blue underlined links, then a grey band of bordered image cards with 24px blue titles.

Check each addition against these points: one blue only, 4px corners, bold weight limited to headings and buttons, links underlined, and photography that shows real places and people from the province. Consult the Alberta design system site above before adding new components, and re-measure the live site.
