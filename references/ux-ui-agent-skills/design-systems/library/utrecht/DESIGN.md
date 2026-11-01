---
version: alpha
name: Gemeente Utrecht
category: "Design Systems"
description: "Gemeente Utrecht's municipal site (www.utrecht.nl) is a civic service portal in Noto Sans Variable: a flat #cc0000 Utrecht red for the search button and footer, a #24578f blue for service tiles, square 0px buttons, 24px/600 panel headings, a #262626 main navigation bar, and brick-street photography."

colors:
  nav-bar: "#262626"
  canvas: "#ffffff"
  page-body: "#f2f2f2"
  ink: "#000000"
  primary: "#cc0000"
  on-primary: "#ffffff"
  tile-blue: "#24578f"
  link-blue: "#2a5587"
  ink-muted: "#727272"
  ink-soft: "#1d1d1c"
  primary-hover: "#da4e51"
typography:
  display:
    fontFamily: "\"Noto Sans Variable\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 600
    lineHeight: 28.8px
  display-mobile:
    fontFamily: "\"Noto Sans Variable\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  subheading:
    fontFamily: "\"Noto Sans Variable\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 25px
  button:
    fontFamily: "\"Noto Sans Variable\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22.4px
  link:
    fontFamily: "\"Noto Sans Variable\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 33.6px
  input:
    fontFamily: sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
rounded:
  xs: 8px
  sm: 16px
  none: 0px
  pill: 9999px
spacing:
  s1: 4.58px
  s2: 8px
  s3: 8.8px
  s4: 12.8px
  s5: 13.5px
  s6: 16px
  s7: 18px
  s8: 19.2px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 44px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.ink-soft}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.link-blue}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-soft}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8.8px 16px 9.28px 32px
    height: 44px
    borderColor: "{colors.primary}"
  card:
    backgroundColor: "{colors.tile-blue}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xs}"
    padding: 24px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Gemeente Utrecht

## Overview

The page measured is the homepage of www.utrecht.nl, titled "www.utrecht.nl | gemeente Utrecht". It is a municipal service portal: its job is to get a resident to a task quickly. From top to bottom the capture shows a header with the municipal coat-of-arms logo, a utility row (English, a read-aloud link) and a search field with a red "Zoeken" button; a dark main navigation bar with five life-area links (Wonen en leven, Zorg en onderwijs, Werk en inkomen, Ondernemen, Bestuur en organisatie); a block of blue "top task" tiles next to a Contact panel with the telephone number 14 030 and an appointment button; a wide full-width photograph of a brick street scene with a yellow "Ontdek Utrecht" callout; a three-column "Uitgelicht" (featured) news list; and a large red footer carrying the address and social links.

The voice is plain Dutch, written as direct task labels ("Afval", "Verhuizing doorgeven", "Maak een afspraak") rather than slogans. Colour is functional and civic: Utrecht red for the primary action and the footer, a steady mid-blue for tiles and links, a yellow accent in the logo stripe and the discovery callout, and a lot of white. Photography is documentary and local.

## Colors

The canvas is #ffffff white, and the page body behind it measures #f2f2f2, a light grey that frames the white content column on wide screens. Text is #000000 black, with #1d1d1c for link text and form values and #727272 for photo credits and secondary lines.

The primary action color is #cc0000, a pure red. It fills the "Zoeken" search button, outlines the search field and fills the footer. Text on it is #ffffff. The measured hover state of the search button is #da4e51, a lighter red. The site's own CSS exposes this red as a custom property named `--utrecht-color-red-40`.

Blue carries wayfinding: #24578f fills the service tiles (white text on top), and #2a5587 is the link and navigation text color, also the fill of the "Maak een afspraak" button in the Contact panel. The main navigation bar measures #262626, a near-black grey. The yellow of the logo stripe and callout was seen in the capture but is not part of the measured token set here, so no hex is given for it.

## Typography

The family is Noto Sans Variable, loaded as a variable font covering weights from 100 to 900, with Arial as the fallback; the site's `--utrecht-document-font-family` custom property is set to exactly that stack. All text on the page uses it.

The scale measured from the page: `display` (the "Contact" panel title, extracted as the largest hero text) is 24px at weight 600 on a 28.8px line; `subheading` is 20px bold on a 25px line; `button` is 16px at weight 600 on a 22.4px line; `display-mobile` is the 16px regular text used for navigation links and body copy on a 22.4px line; `input` is 16px regular on a 19.2px line for the search field; and `link` is the large 24px regular link used for the telephone number, on a 33.6px line.

Headlines in the featured list are underlined blue links in bold, which gives the news block a distinctly document-like feel. Underlines on links are a deliberate part of the style: they appear in the footer and under photo credits as well, not only on hover. The measured main-navigation links also underline on hover.

## Layout

The layout is a centred white content column on a #f2f2f2 grey page background, with a full-width coloured footer. The tile grid pairs three service tiles per row with a fourth, taller Contact panel at the right; the featured news list is three equal columns of a link plus one short paragraph. The photograph runs the full width of the column and is followed by a caption line.

Spacing tokens in the generated set are small control-level steps (about 4px up to 24px): the button uses 8px 16px padding and the tile card uses 24px padding. The site's CSS also defines a long scale of `--utrecht-space-*` custom properties, for example 8px for the extra-small column gap, which is the same family of values.

## Elevation & Depth

Almost nothing floats. The measured primary button, search field, tiles and navigation use flat fills and no shadow; separation comes from colour blocks (blue tiles on white, the dark nav bar, the red footer) rather than from elevation. The footer adds a diagonal two-tone red shape, which is a flat graphic device and not a shadow.

The one floating element in the capture is a rounded dark-blue chat launcher ("Kan ik je helpen?") at the right edge; it carries a soft shadow in the measurements but it is an overlaid assistant widget and not part of the site's component language, so it is not documented here as brand UI.

## Shapes

The core shape is square: the primary button, the search field, the navigation links and the footer all measure 0px. A modest 8px corner is used on the service tiles, and 16px and 9999px also appear in the generated radii, but the core button does not use them.

The Contact panel has a pale-blue illustrated backdrop of vertical bars, and the logo is a red coat-of-arms with a vertical yellow stripe. Pictograms inside tiles are white line icons at the top left of each tile.

## Components

**Primary button.** Background #cc0000, white text, 16px weight 600, 44px tall, padding 8px 16px, square corners; hover lightens to #da4e51. The "Zoeken" button is the instance measured.

**Search field.** White fill, 16px text, 44px tall, a #cc0000 border and a left padding of 32px to make room for a magnifier glyph.

**Service tile.** #24578f background, white text and icon, 8px corners, 24px padding, the label placed at the bottom of the tile.

**Main navigation.** A dark #262626 bar of five equal-width links in white, which darken further and underline on hover.

**Contact panel.** A pale-blue panel with a large telephone number link and a #2a5587 button with a chevron.

**Footer.** #cc0000 background and white text, the municipality's name as a large heading, contact details in two columns and social links in a column on the right.

## Design System Architecture

Gemeente Utrecht publishes its own design system at https://nl-design-system.github.io/utrecht, which I opened: it describes itself as maintained by the municipality and as containing principles, interaction patterns, basic elements, components and design tokens, with Storybook instances for several frameworks. The repository at https://github.com/nl-design-system/utrecht, also opened, describes an implementation built on the NL Design System architecture, with packages under the `@utrecht/` npm namespace and a token stylesheet at unpkg.com/@utrecht/design-tokens/dist/index.css.

The site visibly uses it: the extracted CSS defines hundreds of custom properties with the `utrecht-` prefix (for example `--utrecht-button-border-radius: 0`, `--utrecht-document-font-family`, `--utrecht-color-red-40`, `--utrecht-link-color`), plus `--nl-*` properties of the NL Design System family and an `--of-*` layer. Frontmatter values here were measured on the page itself rather than copied from the system's token files.

The repository README states that applying design elements from the project is prohibited for organisations that are not part of the Municipality of Utrecht; treat this file as a description of a municipal brand, not as a licence to reuse its identity.

## Do's and Don'ts

Do use #cc0000 sparingly for the primary action and the footer, with white text. Do keep corners square on buttons and fields. Do write task-first labels in plain language. Do set links in blue and keep them underlined. Do pair photography of real streets with a single caption line.

Don't use red as a text color for long copy, and don't swap the tile blue for the red. Don't round the primary button. Don't use the chat launcher, the read-aloud control or the yellow callout as a template for core components. Don't reuse the Utrecht coat of arms or the municipality's identity for another organisation.

## Responsive Behavior

The extraction recorded the page at desktop width and at a 390px mobile width, where the heading step of the page drops to the `display-mobile` 16px style at weight 400. No other mobile-specific measurements are included in the tokens and no breakpoint values were recorded, so none are claimed here. The system's own CSS carries many custom properties for spacing and typography scales, which implies a token-driven responsive setup, but this file does not rely on that.


## Iteration Guide

Start with a white canvas on a #f2f2f2 page, a dark #262626 navigation bar and one #cc0000 button. Build task tiles in #24578f with white pictograms and short labels. Use Noto Sans Variable throughout, 24px at weight 600 for panel headings, 16px for body and controls. Underline links.

Check each new view against the rule set above: one red action, square corners, blue for wayfinding, no shadows on core components, and Dutch plain-language labels. When a component is missing, consult the Utrecht design system documentation linked above before inventing one.
