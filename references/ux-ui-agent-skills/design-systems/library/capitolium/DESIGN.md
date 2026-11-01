---
version: alpha
name: Capitolium
category: "Fashion & Apparel"
description: "Capitolium (collabcapitolium.fr) is the capsule-collection site of TéFéCé x Stade Toulousain: a cinematic chaptered story in warm cream #f0e3cf and slate #58595b with gold #c3a677 accents, a condensed all-caps display face called gin at 93.1315px, Times body copy, square 0px-radius buttons and a gold script tagline."
colors:
  canvas: "#58595b"
  page-body: "#f0e3cf"
  ink: "#f0e3cf"
  primary: "#58595b"
  on-primary: "#f0e3cf"
  surface-cta: "#3a3a3a"
  gold: "#c3a677"
  white: "#ffffff"
  gray-light: "#a7a0a1"
  ink-dim: "#8b8882"
typography:
  display:
    fontFamily: gin, serif
    fontSize: 93.1315px
    fontWeight: 400
    lineHeight: 102.445px
    letterSpacing: "-1.86263px"
    textTransform: uppercase
  display-mobile:
    fontFamily: gin, serif
    fontSize: 52px
    fontWeight: 400
    lineHeight: 57.2px
  heading:
    fontFamily: gin, serif
    fontSize: 23.164px
    fontWeight: 400
    lineHeight: 25.4804px
    letterSpacing: "-0.463279px"
    textTransform: uppercase
  label:
    fontFamily: gin, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 17.6px
    letterSpacing: 2.56px
  body:
    fontFamily: Times, serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: gin, serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 13.2px
    letterSpacing: 1.92px
  legal:
    fontFamily: Times, serif
    fontSize: 11.4984px
    fontWeight: 400
    lineHeight: 11.4984px
rounded:
  xs: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.92px
  s2: 2.56px
  s3: 3px
  s4: 3.83px
  s5: 4px
  s6: 7.67px
  s7: 8px
  s8: 10px
  s9: 11.16px
  s10: 11.5px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 3.83279px
    height: 51px
  button-secondary:
    backgroundColor: "{colors.surface-cta}"
    textColor: "{colors.page-body}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 18px 16px
    height: 56px
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 18px 16px
    height: 58px
    borderColor: "{colors.gold}"
  button-outlined-hover:
    textColor: "{colors.ink-dim}"
  chapter-heading:
    textColor: "{colors.primary}"
    typography: "{typography.heading}"
    rounded: "{rounded.none}"
    padding: 12px 0px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.page-body}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.gray-light}"
    typography: "{typography.legal}"
    rounded: "{rounded.none}"
    padding: 8px
---

## Overview

Capitolium (https://www.collabcapitolium.fr/, title "Capitolium | TéFéCé x Stade Toulousain") is a capsule-collection microsite that joins two Toulouse clubs, TéFéCé (Toulouse Football Club) and the Stade Toulousain, around the Capitole building in the city. The page text frames it as a first: "Pour la première fois au monde, l'âme d'une ville unit deux de ses légendes…". The site is French (`lang` fr) and is built as a long story, 71851px of scroll height, rather than a shop. Its voice is noble, civic and proud, with long headings about the Capitouls, the arcades and the people of a square; purchase calls to action stay discreet and point to two shop links, "Boutique Toulouse FC" and "Boutique Stade Toulousain".

The first screen is an intro. A dark aerial photograph of the brick rooftops around the Capitole square fills the viewport. Centred over it are the two club crests (a round Toulouse FC badge and a shield-shaped Stade Toulousain badge), the title "CAPITOLIUM" in widely tracked gold serif capitals, the tagline "Qui se Ressemble, Rassemble" in a gold script, and a gold swoosh mark below it. At the bottom an "ENTRER" button sits between two thin gold rules with an ornament on each side. Below the intro, a boxed "CHAPITRE I" chapter control floats above a wide cream field. In the capture that field is empty, and the next visible band is a slate field with a marble-like texture holding the headline "PLUS QU'UN MAILLOT, LE SYMBOLE DE NOTRE CITÉ." in huge cream condensed capitals, with a crest on each side.

The opened page text lists the rest of the structure: three chapters ("Chapitre I : Les arcades", "Chapitre II : Salle du conseil", "Chapitre III : Salle des Illustres") each with short titles such as "Le lieu des commencements" and "Au coeur du Capitole", a chapter index, the collection ("Découvrez toute la collection", with "Maillot Toulouse Football Club" and "Maillot Stade Toulousain"), and fixtures ("Le week-end toulousain au stadium"). Imagery is marble textures, Capitole columns and pink-brick arcades, product photographs of the two shirts, interiors of the Capitole, celebrations on its balcony and portraits of players from both clubs. A consent overlay was detected and hidden by the extractor and is not part of the UI described here.

## Colors

The palette is stone and gold: two alternating grounds, a warm gold and a few supporting greys.

- `{colors.page-body}` #f0e3cf is the cream ground (`--color-light-gold`), the largest measured area (weight 35024), and the body text color on slate sections. `{colors.canvas}` #58595b (`--color-dark-gray`) is the slate ground (weight 14751) and the reading color on cream; `{colors.primary}` is the same slate, used as the fill of the "Chapitre I" button.
- `{colors.ink}` #f0e3cf is the cream text color measured on the slate sections (2503 characters); on the cream sections the text is `{colors.primary}` slate (3147 characters, the most-read color). The two are used as a pair: cream on slate, slate on cream.
- `{colors.on-primary}` #f0e3cf is the label color on filled buttons.
- `{colors.gold}` #c3a677 (`--color-dark-gold`) is the accent (in the capture the title lettering, crests and tagline are gold) and the 1px border of the "Entrer" button (398 characters).
- `{colors.surface-cta}` #3a3a3a (`--color-cta-gray`) is the fill of the large shop buttons ("Boutique Toulouse FC", "Boutique Stade Toulousain", "Découvrir la boutique").
- `{colors.gray-light}` #a7a0a1 (`--color-light-gray`) is the legal footer text, and `{colors.white}` #ffffff is used on 114 characters.
- `{colors.ink-dim}` #8b8882 is the label color of the "Entrer" button on hover.

The root also declares `--color-dark` #0b090a, which was not measured on a visible element. The navigation role measures 1280px by 800px with a 64% black fill (#000000a3); that overlay fill is not used as a palette color here. The default link blue #0000ee measured in the navigation role is a browser default, not a brand color.

## Typography

Three families carry the voice. gin is a condensed, uppercase display face, loaded at weight 400 (1097 characters), used for headlines, chapter titles, nav labels and buttons. Times is loaded as a face at weight 400 and covers most characters (4939); it sets paragraphs. Edwardian Script is loaded at 400 (214 characters); the capture shows the tagline "Qui se Ressemble, Rassemble" as a gold script. Every weight measured is 400; hierarchy is made with size, tracking and case.

- `{typography.display}`: gin 93.1315px, line height 102.445px, letter spacing -1.86263px, uppercase; the slate section's headline. Related display sizes measured by characters are 71.6396px (-1.43279px tracking, 144 characters), 38.3279px (-0.766559px, 54 characters) and a very large 358.198px decorative size (190 characters).
- `{typography.heading}`: gin 23.164px, line height 25.4804px, -0.463279px, uppercase; chapter titles such as "LE LIEU DES COMMENCEMENTS", set in slate inside a 1px slate border with 12px vertical padding.
- `{typography.label}`: gin 16px, line height 17.6px, letter spacing 2.56px; navigation, links ("Billetterie") and the large buttons.
- `{typography.body}`: Times 16px, line height 19.2px; paragraphs in `{colors.primary}` or cream.
- `{typography.button}`: gin 12px, line height 13.2px, 1.92px tracking; the "CHAPITRE I" control. `{typography.legal}`: Times 11.4984px for "Mentions légales".

Font sizes are fractional because the stylesheet scales them with the viewport width (`--vw` is 12.8px at the measured 1280px frame, `--max-width` 2560px). No font substitute is measured; if gin and Edwardian Script are unavailable, any condensed grotesque and any formal script would be editorial replacements, not measured equivalents.

## Layout

The page is a vertical narrative of full-width bands that alternate between cream and slate, with a boxed chapter control under the intro. The measured gaps are 24px (66 uses), 16px, 38.3279px, 8px, 45.9935px, 77.9676px, 3px and 40px, and paddings of 1.92px (88 uses), 8px, 16px, 7.66559px, 12px and 107.459px; `--gutter` is 10px. Text columns are narrow: the body paragraph box measures 359px wide, and the chapter title box 359px by 51px. Headlines are centred and large, with a crest on each side.

Density is low and cinematic. Long stretches of cream hold a single text block, a marble-textured slate band holds one headline and two crests, and product and architectural photographs fill the rest. The extraction recorded 2090 visible elements across the long page.

## Elevation & Depth

No box shadow was measured on a visible element (the shadow frequency table is empty). Depth comes from photography, texture and layering: a dark overlay on the aerial hero photograph, a marble texture on the slate bands, and thin gold rules around the "ENTRER" button. The `box-shadow` rules in the stylesheet corpus (for example `0px 8px 20px 0px rgba(0,0,0,.2), 0px 2px 4px 0px rgba(0,0,0,.1)` in 36 rules) were not measured on any visible element and are not documented as brand elevation.

## Shapes

Buttons, links, the chapter title and the navigation are square (0px radius, `{rounded.none}`). A 20px radius (`{rounded.xs}`) was measured on 6 elements and a 50% radius on 10 (`{rounded.pill}` is the circle token); the capture shows round club crests and a round badge. Ornamental shapes are heraldic: a round crest, a shield-shaped crest, a swoosh and small cross-like ornaments flanking "ENTRER" and "CHAPITRE I".

## Components

- Intro title lockup: two crests, "CAPITOLIUM" in gold tracked serif capitals, gold script tagline, a swoosh mark.
- Outlined button ("Entrer", `{components.button-outlined}`): transparent fill, cream gin 16px label with 2.56px tracking, 1px `{colors.gold}` border, 58px high, 276px wide, padding 18px 16px; hover dims the label to `{colors.ink-dim}`.
- Chapter control ("Chapitre I", `{components.button-primary}`): `{colors.primary}` fill, cream 12px gin label, 51px high, 206px wide, 3.83279px padding, with a three-line icon on each side.
- Shop button (`{components.button-secondary}`): `{colors.surface-cta}` fill, cream 16px label, 56px high, 400px wide, padding 18px 16px.
- Chapter heading (`{components.chapter-heading}`): uppercase gin 23.164px in slate with a 1px slate border.
- Link ("Billetterie"): slate gin 16px with wide tracking, 24px high.
- Menu: a navigation block 1280px by 800px on desktop listing "Genèse", "Collection", "Médias", "Boutiques", "Boutique Toulouse FC" and more, in cream gin 16px.
- Footer: cream background, `{colors.gray-light}` Times 11.4984px text ("Mentions légales"), 8px padding, 367px high.

## Design System Architecture

No public or official Capitolium design system, brand guideline or press kit was found; the page https://www.collabcapitolium.fr/ links none (its visible links are to the two shops). The de-facto system is a short list of root variables: `--color-dark-gray` #58595b, `--color-light-gray` #a7a0a1, `--color-dark-gold` #c3a677, `--color-light-gold` #f0e3cf, `--color-cta-gray` #3a3a3a, `--color-dark` #0b090a, `--color-white` #fff, plus layout variables `--vw` (12.8px), `--vh`, `--max-width` (2560px), `--gutter` (10px) and `--scrollbar-width` (4px). Fonts are three loaded faces (gin, Times, Edwardian Script) plus a cookie-consent fallback face. Color variable names follow a gray-and-gold scheme.

## Do's and Don'ts

- Do alternate cream `{colors.page-body}` and slate `{colors.canvas}` bands, with cream text on slate and slate text on cream.
- Do set headlines in gin uppercase with negative tracking, and small labels with wide positive tracking.
- Do keep every weight at 400 and make hierarchy by size and tracking.
- Do use gold `{colors.gold}` only for crests, the title, script and fine rules.
- Don't round buttons or add shadows; the measured buttons are square and flat.
- Don't treat the browser-default blue link color or the black menu overlay as brand colors.
- Don't turn the story into a shop grid: calls to action stay discreet.
- Don't bold gin or Times; weight 700 is not measured.

## Responsive Behavior

Measured at the 390px mobile pass. The h2 is `{typography.display-mobile}` (gin 52px, line height 57.2px, 358px wide, 229px high); body text stays Times 16px with 19.2px line height in a 280px column; the "Chapitre I" button is 206px by 42px with 3.2px padding. The h1-role label is 16px gin. The navigation block measures 390px by 844px with the same 64% black fill. Mobile character-weighted sizes are 16px (4924), 20px (341), 12px (277), 200px (190), 32px (149), 40px (93), 52px (83) and 28px (24). Tracking and line height of the mobile display text, the chapter layout and the shop button at mobile width are not measured.

## Iteration Guide

1. Open with a full-viewport photograph, two crests, the gold wordmark and an "ENTRER" outlined button.
2. Alternate cream and slate bands; set slate headlines in `{typography.display}` with a crest on each side.
3. Title each chapter with `{components.chapter-heading}` and run Times body copy beneath it.
4. Keep one discreet shop button style, `{components.button-secondary}`, near the end.
5. Finish on a cream footer with `{typography.legal}` links.
6. Re-measure the chapter pages below the intro for any additional tokens before declaring them.
