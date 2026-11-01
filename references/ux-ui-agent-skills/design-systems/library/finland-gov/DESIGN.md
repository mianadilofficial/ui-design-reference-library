---
version: alpha
name: Suomi.fi
category: "Design Systems"
description: "Suomi.fi (suomi.fi/etusivu), Finland's public-services portal, is set in Source Sans 3 with a #235a9a blue for buttons, #2a6ebb link blue, a blue hero band, #f0f6ff and #d5e4f6 section tints, 2px-cornered buttons and white 4px cards with a soft shadow."

colors:
  canvas: "#ffffff"
  page-body: "#f7f7f8"
  ink: "#212121"
  primary: "#235a9a"
  on-primary: "#ffffff"
  surface-tint: "#f0f6ff"
  surface-service: "#d5e4f6"
  link-blue: "#2a6ebb"
  hairline: "#c8cdd0"
  navy: "#00357a"
typography:
  display:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 40px
    fontWeight: 600
    lineHeight: 48px
  display-mobile:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 38px
  heading:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 22px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, \"sans-serif\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 0px
  link:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  input:
    fontFamily: "\"Source Sans 3\", \"Helvetica Neue\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 4px
  md: 5px
  lg: 14px
  pill: 9999px
spacing:
  s1: 3.6px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 15px
  s9: 17px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 9px 20px
    height: 40px
    borderColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 9px 10px
    height: 44px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
    borderColor: "{colors.navy}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6px 16px 6px 10px
    height: 36px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    boxShadow: rgba(41, 41, 41, 0.2) 0px 2px 4px 1px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    borderColor: "{colors.navy}"
---

# Suomi.fi

## Overview

The page measured is the Finnish-language homepage of Suomi.fi, titled "Etusivu - Suomi.fi", the national portal that gathers information and services for life situations. The h1 reads "Suomi.fi – tietoa ja palveluja elämäsi tilanteisiin" (information and services for your life situations). From the top the capture shows a thin dark-navy top rule, a white header with the logo, a search field with a blue "Hae" button, a language selector ("Suomeksi (FI)") and a blue "Tunnistaudu" (sign in) button; a white sub-navigation (Etusivu, Tiedot ja palvelut, Viestit, Valtuudet, Omat tiedot, Ohjeet ja tuki); a full-width blue hero band with the h1 and three white photo cards; then alternating pale-blue bands titled "Suomi.fi-palvelut", "Oikopolut", "Ajankohtaista" and "Suomi.fi lyhyesti", and a promotional panel for developers ("Suomi.fi kehittäjille").

The voice is plain, direct Finnish: headings name the destination ("Viestit", "Valtuudet", "Rekisteritiedot"), links start with a verb ("Siirry viesteihin", "Katso tiedot ja palvelut"), and article cards carry a small purple "Opas" (guide) tag. Photography shows ordinary people using devices; icons are line pictograms with an orange accent inside pale circles.

## Colors

The canvas is #ffffff white, with #f7f7f8 as the measured page body behind it. Text is #212121, a near-black, and links and navigation items are #2a6ebb.

The primary color is #235a9a, the deep blue fill of the "Näytä lisää" button with #ffffff text; the other solid buttons in the capture (the search "Hae" button and the "Tunnistaudu" sign-in buttons) share the same blue family. Section backgrounds step through two tints: #f0f6ff, a very pale blue, and #d5e4f6, a light blue used behind the service cards. #00357a measures as a dark navy used for the top rule, nav border and footer border, and #c8cdd0 is the grey of hairlines and field borders.

The hero band is a blue gradient; it is a background image and is not reduced to a single token. White text sits on it, so for that band the headline color is #ffffff rather than #212121.

## Typography

The family is Source Sans 3, loaded in regular (400), italic and semibold (600). All headings, buttons and navigation use it; there are no other loaded families.

Measured steps: `display` is the hero h1 at 40px, weight 600, 48px line; on a 390px viewport it becomes `display-mobile` at 32px on a 38px line. `heading` is 22px at weight 600 on a 28px line, used for section titles and card headlines. `body` is 18px regular on a 27px line. `button` is 14px semibold on a 20px line, and `link` is 16px semibold on a 24px line, also used for the language selector. `nav` is 18px regular, and `input` is the 16px style of the search field.

Weights are only 400 and 600, so the page reads as clean and moderate rather than bold. Section titles are centred; card titles are left aligned.

## Layout

The layout is a centred column on a white page, divided into full-width horizontal bands in alternating tints. Inside each band content aligns to the same container: three white photo cards in the hero, three service cards in a row, a two-by-two grid of "Oikopolut" cards with circular icon tiles on the left, four news items separated by thin vertical rules, and a two-column text-and-photo block.

Spacing steps in the tokens run from about 4px to 20px; button padding is 9px 20px, the secondary language button 9px 10px, and the search input 6px 16px 6px 10px at 36px height. Cards in the same row share equal widths and gutters, and bands have generous vertical space, creating a calm, document-like rhythm.

## Elevation & Depth

Depth is soft and consistent: white cards over blue or tinted bands carry a light shadow, `rgba(41, 41, 41, 0.2) 0px 2px 4px 1px`, which lifts them just off the background. Buttons are flat. Beyond the cards there is a toast-notification library whose variables appear in the page CSS, but toasts are not visible in the capture and are not part of the documented look.

Layering is also done by color: a pale-blue band under white cards, a darker blue hero above them, and a thin navy rule at the very top of the page. A teal accent line appears above the developer panel.

## Shapes

The shape language is nearly square. Buttons and the search field use 2px, 2px, and cards use 4px, 4px. The generated set also holds 5px (5px) and 14px (14px), and 9999px (fully rounded) for tags such as the small "Opas" label on card images and the icon circles.

Icons are line illustrations in dark ink with orange accents, placed inside pale circular tiles; the logo is a navy square with a white stylised flag motif.

## Components

**Primary button.** #235a9a fill, #ffffff text, 14px semibold, 40px high, padding 9px 20px, 2px corners, with a white border. On hover the fill becomes transparent while the white border and text remain, which reads as an outlined button on the blue hero band.

**Secondary button.** White fill, #212121 text, 16px semibold, 44px high, padding 9px 10px, 2px corners; this is the language selector. On hover its border appears in #c8cdd0.

**Search field.** White, 2px corners, 36px high, 16px text, joined to a blue "Hae" button.

**Card.** White, 4px corners, soft shadow, with a photograph on top for articles or an icon tile on the left for services; a chevron-led blue link line closes the card.

**Navigation.** A white bar with 18px links in #2a6ebb; the active item has a blue underline, and items with children carry a small chevron.

**Footer.** The generated footer token is white with #212121 text and a #00357a border; it lies below the captured area and was not inspected visually.

## Design System Architecture

Finland publishes the Suomi.fi Design System at https://designsystem.suomi.fi, which I opened: it describes itself as a collection of reusable, documented UI components and design patterns for Finnish digital services, maintained by the Digital and Population Data Services Agency, with a component library on GitHub (vrk-kpa/suomifi-ui-components) and WCAG 2.2 A and AA accessibility compliance. The page I read does not state a typeface or hex color codes, and I opened no other page of it.

I could not confirm that suomi.fi itself is built with that library. The extraction shows no variables or class names belonging to it: the root custom properties are Bootstrap breakpoint variables (`--bs-breakpoint-*`) and a long list of `--toastify-*` toast variables. The page's markup does reference assets named after the portal (a logo sprite and a "style-guide" favicon path) but that does not establish use of the design-system library. Consequently no values were taken from the design-system site; every token here was measured on the rendered page.

## Do's and Don'ts

Do use #235a9a for solid buttons with white text and keep corners at 2px. Do use #2a6ebb for links and start link text with a verb. Do alternate white and pale-blue bands and let white cards carry content. Do keep type to Source Sans 3 in weights 400 and 600. Do use line icons with an orange accent in pale circles.

Don't round buttons or fields beyond a few pixels. Don't add bold 700 weights; the page uses semibold. Don't use dark text on the hero band or white text on pale tints. Don't treat toast notifications or the toast library variables as brand components. Don't introduce a second typeface.

## Responsive Behavior

The extraction recorded 1280px desktop and 390px mobile widths. Measured at mobile, the hero h1 drops from 40px to 32px. The site's CSS also defines Bootstrap-style breakpoint variables with these values: 576px, 768px, 992px, 1200px and 1400px, which indicates the breakpoint scale the page is built on, though the specific layout changes at each were not captured.

The card rows (three across) and the two-by-two route grid are the elements to reflow on narrow viewports. Keep touch controls at or above the measured 36px field height, with buttons at 40px and 44px.

## Iteration Guide

Start with the white canvas, a navy top rule and a white header with a blue sign-in button. Open the page with a blue hero band holding a 40px semibold white heading and white cards. Follow with alternating #f0f6ff and #d5e4f6 bands. Use 2px-cornered #235a9a buttons, 4px cards with the soft shadow, and verb-led blue links.

Check each new view for: Source Sans 3 only, 400 and 600 weights, blue as the sole interactive hue, orange limited to icon accents, and no decorative shadows beyond the card shadow. If official components are required, consult the design-system site above and re-measure the live page.
