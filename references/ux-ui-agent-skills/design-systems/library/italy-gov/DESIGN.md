---
version: alpha
name: Governo Italiano
category: "Design Systems"
description: "Governo Italiano (www.governo.it), the Italian government's institutional site, is set entirely in Titillium Web with #0066cc institutional blue for links and navigation, a #444e57 slate Focus band, #eeeeee and #ffffff content areas, 4px-cornered cards, and a green-white-red stripe under the header."

colors:
  flag-red: "#ce2b37"
  flag-green: "#009246"
  canvas: "#eeeeee"
  page-body: "#ffffff"
  ink: "#5a6772"
  primary: "#0066cc"
  surface-slate: "#444e57"
  ink-strong: "#000000"
  ink-faint: "#a5abb0"
  ink-dark: "#414853"
  hairline: "#dddddd"
  text-input-text: "#555555"
typography:
  display:
    fontFamily: "\"Titillium Web\", Helvetica, Arial, sans-serif"
    fontSize: 21.6px
    fontWeight: 600
    lineHeight: 30.8571px
  heading:
    fontFamily: "\"Titillium Web\", Helvetica, Arial, sans-serif"
    fontSize: 32.004px
    fontWeight: 700
    lineHeight: 38.4048px
  subheading:
    fontFamily: "\"Titillium Web\", Helvetica, Arial, sans-serif"
    fontSize: 20.88px
    fontWeight: 400
    lineHeight: 27.144px
  body:
    fontFamily: "\"Titillium Web\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: 0.18px
  link:
    fontFamily: "\"Titillium Web\", Helvetica, Arial, sans-serif"
    fontSize: 12px
    fontWeight: 700
    lineHeight: 16.8px
    letterSpacing: 0.12px
rounded:
  xs: 4px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 15px
  s7: 18px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-strong}"
  nav-link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.body}"
    padding: 20px 18px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.body}"
    padding: 0px 64px 0px 12px
    height: 55px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(50, 50, 50, 0.35) 0px 1px 2px 0px
  footer:
    textColor: "{colors.page-body}"
    padding: 0px 24px
---

# Governo Italiano

## Overview

The page measured is the Italian-language homepage of www.governo.it, titled "Governo Italiano Presidenza del Consiglio dei Ministri". It is the institutional news site of the Presidency of the Council of Ministers. The capture shows a header with a language switch (IT / EN) and a blue navigation bar carrying three links (Il Presidente, Il Governo, Presidenza del Consiglio dei Ministri), above which a thin green, white and red stripe marks the Italian flag. Below that sit a news carousel with a vertical list of headlines on the left and a photograph with date and summary on the right; a dark slate "Focus" band with four banner images for government initiatives; and a "Da Palazzo Chigi" section of three news cards, each with a photograph, a blue "Notizie" label, a headline and an excerpt.

The tone is institutional and document-like: dates are written in full ("8 Ottobre 2026"), headlines are the actual news titles, and every item is a link. Photography is press-office documentary, showing ministers, ceremonies and meetings. The top of the capture is covered by a dark cookie-consent banner; its buttons and text are an overlay and are not documented as brand UI. A stealth re-extraction was run once and the banner remained, so the measurements below describe the page beneath it.

## Colors

The measured page background areas are #eeeeee, a light grey used for the carousel panel and the news section background, and #ffffff, white, used for the cards and the navigation. Dark text on these is #000000 black for headlines and navigation, while running body copy measures #5a6772, a blue-grey; secondary text uses #414853, and #a5abb0 appears for light meta text.

The institutional action color is #0066cc, a mid blue. It is the color of the headline links in the carousel, the "Vedi Tutto" link, the "Notizie" labels on the cards and the navigation bar fill (a measured background of the same blue). The "Focus" band uses #444e57, a dark slate with white headings. A flag stripe uses #009246 and #ce2b37, both measured as small background areas, with white between them.

There is no filled call-to-action button in the measured page: the extractor found no button candidates, and actions are expressed as blue text links with icons.

## Typography

The page uses Titillium Web throughout, loaded in weights 200, 400, 600 and 700, with Helvetica and Arial as fallbacks. A separate icon font named "governo" is loaded for pictograms.

Measured steps: `display` is the carousel headline, 21.6px at weight 600 on a 30.8571px line; `heading` is the section title ("Focus", "Da Palazzo Chigi") at 32.004px, weight 700, on a 38.4048px line; `subheading` is the news-card headline at 20.88px, regular, on a 27.144px line; `body` is 18px regular on a 27px line with 0.18px letter-spacing; and `link` is the small 12px bold link style with 0.12px spacing, used for cookie-banner links.

The measured sizes include fractional values (21.6px, 20.88px, 32.004px). Section titles are bold and large, news headlines are regular and large, and excerpts are lighter in colour than headlines.

## Layout

The page is a single scrolling column, 5222px tall at a 1280px viewport. Full-width bands alternate: the white header, the grey carousel area, the slate Focus band, and the grey news section. The carousel splits into a narrow left list of headlines (the active one marked with a blue left rule and a white background, inactive ones with a grey left rule) and a wide panel with a photograph. News cards are laid out three across with a shared gutter.

The generated spacing values range from 2px to 32px: navigation links have 20px 18px padding, the search-style text input is 55px high with 12px left and 64px right padding, and the footer uses 24px horizontal padding. The Focus band places banners in a row of three and a single fourth banner centred below, which is a deliberate asymmetry in the capture.

## Elevation & Depth

Depth is slight. Cards carry a soft single-layer shadow, `rgba(50, 50, 50, 0.35) 0px 1px 2px 0px`, which is the most frequent shadow in the measured CSS; it lifts the white news cards just off the grey background. The CSS also contains inset shadows (on form controls and pressed states) and many `none` values.

Colour blocking does most of the separating work: the white cards on #eeeeee, the #444e57 band with white text, and the saturated blue navigation. Hairlines measure #dddddd.

## Shapes

Cards use 4px corners, 4px, which is also the most frequent radius in the site's CSS. 9999px is present in the generated radii for round controls: the circular blue arrow icon on the carousel is the visible example. The navigation bar, the carousel panel and the banners are rectangular with square corners.

Icons are outline pictograms in blue (a camera for photo galleries and a video camera for video content) placed under cards and in the carousel; the arrow button is a filled blue circle with a white arrow.

## Components

**News card.** White background (#ffffff), 4px corners, the soft shadow above, a full-width photograph on top, a blue bold "Notizie" label, a 20.88px headline in black and an excerpt in grey.

**Carousel list item.** A blue link headline with a thick left rule; the active item sits on a white background and the rest on the grey canvas.

**Navigation.** A blue bar with three light-weight white links, preceded by the language switch in bordered boxes and the flag stripe. The generated nav-link token (18px, padding 20px 18px) comes from the lower navigation measured on the page and uses black text on white.

**Text input.** White, 55px high, text color #555555, padding 0px 64px 0px 12px to leave room for a trailing search icon.

**Link.** #0066cc text, underlined on the "Vedi Tutto" section link.

**Focus banner.** A white image tile with a bold white caption underneath on the slate band.

## Design System Architecture

Italy publishes a national design system for public-administration websites through Designers Italia, https://designers.italia.it, which I opened. The page describes Designers Italia as the reference point for the design of public digital services, run by the Department for Digital Transformation and the Italian Digital Agency (AgID), and lists a Design system .italia, design models, guidelines and training. I did not open the component or token pages of that system.

I found no evidence in the extraction that governo.it is built on it: the page loads its scripts from a custom theme path of its own (a Drupal-style theme named "governo" under /sites/governo.it/themes/governo/), the icon font is named "governo", and the extracted root custom properties are only nine `--Button-*` variables for default, info and danger button variants. Therefore no values were taken from Designers Italia; the frontmatter is entirely measured on the page, and the de-facto system is a bespoke theme with a Titillium Web type scale, one institutional blue and a small set of grey surfaces.

## Do's and Don'ts

Do use #0066cc for links and wayfinding, and write link text as the actual news headline. Do set everything in Titillium Web, bold for section titles and regular for headlines. Do use the 4px corner and the single soft shadow on cards. Do use the slate band for featured initiatives with white headings. Do keep the flag stripe thin.

Don't introduce a filled call-to-action button: the measured system relies on text links and icon buttons. Don't use red or green outside the flag stripe. Don't document the cookie-consent banner or its buttons as part of the brand. Don't round cards beyond 4px or add heavy shadows. Don't place body text on the blue.

## Responsive Behavior

The extraction recorded desktop and 390px mobile widths; the carousel headline measured 21.6px at both widths, so no type-size change was captured for that step. No breakpoint values were recorded, so none are stated. From the desktop layout, the three-across card grid and the list-plus-photo carousel are the elements that must reflow on narrow screens; this file does not claim how.

Touch sizing can be inferred only from the measured 55px input height and 20px by 18px navigation padding. Keep text at the 18px body size or larger for reading comfort, matching the measured body style.

## Iteration Guide

Begin with a grey #eeeeee page, white cards and a #0066cc blue navigation bar. Use Titillium Web: 32.004px bold section titles, 20.88px regular headlines, 18px body. Put news in three-across cards with 4px corners and the soft shadow, photo first, then the blue category label.

Add a slate #444e57 band for highlighted initiatives. Check that all clickable text is blue, that no filled button was invented, and that red and green appear only in the flag stripe. For anything not described here, consult the national design system at Designers Italia before extending the system, and re-measure on the live site.
