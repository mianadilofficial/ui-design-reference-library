---
version: alpha
name: Renault Group
category: "Automotive"
description: The Renault Group corporate site (renaultgroup.com) is a dark editorial magazine, a black canvas (#000000) with white RenaultGroup-Variable headlines at weight 700, full-bleed photographic cards at 16px radius, 100px-pill buttons in white or black, warm taupe (#978b7f) chrome and a rare signal red (#e60000) for "new" chips.

colors:
  canvas: "#000000"
  surface-white: "#ffffff"
  ink: "#ffffff"
  ink-on-light: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-alpha-50: "#ffffff80"
  surface-grey: "#9e9e9e"
  surface-taupe: "#978b7f"
  accent-orange: "#ff8d5c"
  alert-red: "#e60000"
typography:
  display:
    fontFamily: RenaultGroup-Variable, system-ui, -apple-system, "system-ui", sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 20.1px
    letterSpacing: "-1.8px"
  heading:
    fontFamily: RenaultGroup-Variable, system-ui, -apple-system, "system-ui", sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 38px
  body:
    fontFamily: RenaultGroupAH-Variable, system-ui, -apple-system, "system-ui", sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.6px
  button:
    fontFamily: RenaultGroup-Variable, system-ui, -apple-system, "system-ui", sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: RenaultGroupAH-Variable, system-ui, -apple-system, "system-ui", sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  link:
    fontFamily: RenaultGroupAH-Variable, system-ui, -apple-system, "system-ui", sans-serif, "Apple Color Emoji", "Segoe UI Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22.4px
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 12.8px
  s8: 16px
  s9: 19px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-on-light}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 19px 24px
    height: 64px
  button-dark:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 19px 24px
    height: 64px
  link:
    textColor: "{colors.ink-on-light}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 12.8px
  card:
    backgroundColor: "{colors.surface-grey}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 32px
  footer:
    textColor: "{colors.ink-on-light}"
    padding: 32px
---

## Overview

The site measured here redirects from renault.com to renaultgroup.com, the corporate home of the group rather than the car showroom, and the design is that of a news magazine. The full-page capture opens on a taupe utility bar (a share price, a language selector, an accessibility toggle), then a dark navigation bar with the Renault Group wordmark and links Groupe, Marques, Responsabilité, Magazine, Évènement, then Carrières, Investisseurs, Presse and a round search button. Under it a wide carousel shows a pink-magenta key visual with the three brand marks (Renault, Alpine, Dacia) and a red-edged countdown box in days, hours, minutes and seconds, labelled "À venir", with the headline "Renault Group au Mondial de l'Auto 2026". Round arrow buttons sit at both sides and four small dots below.

Underneath is a row of four news teasers, each with a grey category tag ("Technologies", "Développement durable", "Actualités du Groupe"), a two- to three-line bold title, a date and a round arrow button. The page then goes fully black: the heading "Toutes nos actualités par thématiques" is followed by a grid of photographic cards (a woman smiling in a car interior, an engine bay, a teal body panel, a headlamp, a woman at a car window), each titled in white at the bottom and topped with small chips such as "303 articles" and a red "Nouveaux articles". The copy is in French on this capture, short and noun-led.

Imagery does the work: all photographs are real, warm and human, and colour comes from the pictures, not the interface. The UI itself is black, white and taupe.

## Colors

Hex values were measured on the page; names come from the site's own `--color--*` variables where they exist.

- **Canvas.** `{colors.canvas}` black is the dominant surface from the news section downward, and the carousel hero fades from a taupe-and-magenta wash into it. `{colors.surface-white}` is the measured document body colour and fills the pale buttons.
- **Ink.** `{colors.ink}` white is the main text on the dark canvas; `{colors.ink-alpha-50}` (white at 50%) dims dates and secondary labels; `{colors.ink-on-light}` is black text on white pills.
- **Primary.** Calls to action ("Découvrez notre magazine", "Découvrez le Groupe") are white pills with black text, hence `primary` `{colors.primary}` with `{colors.on-primary}`. The measured "En savoir plus" buttons are the inverse, black with white text (`{components.button-dark}`).
- **Taupe.** `{colors.surface-taupe}` is the site's `--color--primary` (30deg 10% 54%); it is the utility bar and the hover state of the round carousel buttons, which flip from white to taupe with white text.
- **Grey.** `{colors.surface-grey}` (`--color--neutral--400`) is a mid grey used for tags and chips.
- **Accent.** `{colors.accent-orange}` is `--color--yellow` as defined by this site (an orange-coral), part of an "upcoming" gradient from red through orange to that colour, and `{colors.alert-red}` is `--color--red` for the "Nouveau" chips and the countdown outline.

The root variables also define a lighter neutral ladder (`#1e1e1e` to `#f0f0f0`), a blue `#427ce1`, success, warning and error states, which were not visible in the capture and are not used here.

## Typography

Two variable fonts, both declared with weight axis 300-1000: RenaultGroup-Variable (headings and buttons) and RenaultGroupAH-Variable (navigation, links and body). Both are brand fonts loaded by the site, and I found no public licensing or foundry page I could open for them, so I make no claim about their origin. The declared fallback is the system UI stack (`system-ui, -apple-system, sans-serif`), which is the practical substitute.

The site's variables give the heading ladder: 24px (`--heading-xs`), 30px (`--heading-s`), 40px (`--heading-m`), 64px, 80px and a mobile heading of 36px, with 16px as the body base. The measured roles: `{typography.heading}` (40px, 700, line-height 38px) for section titles, `{typography.display}` (30px, 700, tracking -1.8px) for the wordmark-level heading in the header, `{typography.body}` and `{typography.link}` for teaser titles (bold), `{typography.nav}` (16px, 400) for navigation and `{typography.button}` (14px, 700) for buttons. Weight 700 is used for nearly everything that is not navigation, so the page reads dense and confident, and headings are set with tight leading and no uppercase.

## Layout

The layout is a full-width magazine grid. The variables define a `--grid-unit-*` ladder (16, 30, 42, 84, 96, 116, 132, 144, 180px) and `--section--padding-y: 3rem`. The carousel is wider than the viewport, with previous and next slides cropped at the edges; teasers are four columns separated by hairline vertical rules; the thematic grid is three columns in the first row and two in the second, and cards are tall portraits in row one and landscape in row two. Spacing steps in the frontmatter (`{spacing.s2}` 4px up to `{spacing.s10}` 20px) are for small gaps inside chips and buttons.

## Elevation & Depth

There are no drop shadows in the measured roles. Depth is created by photography and gradient: darkening overlays at the bottom of each image card carry the white titles, the hero fades into black, and surfaces separate by value (taupe bar, black canvas, white pill) rather than by shadow. The only outline is the 1px border measured on the white buttons and the red outline of the countdown box.

## Shapes

The shape language pairs two sizes. The site's border-radius variables are `--border-radius--soft` 4px, `--border-radius--medium` 16px, `--border-radius--large` 24px, `--border-radius--rounded` 100px and `--border-radius--circle` 100%. Buttons use `{rounded.xl}` (100px, effectively a pill); cards and the carousel use `{rounded.md}` (16px) and `{rounded.lg}` (24px); `{rounded.xs}` (4px) and `{rounded.sm}` (8px) are also measured on the page, though I did not confirm which element carries which; round icon buttons are circles at 40px tall. The contrast between sharp 4px chips on soft 16px photos is deliberate.

## Components

- **Pill button, light.** `{components.button-primary}`: white, black 14px/700 label, 64px tall, `19px 24px` padding, 100px radius.
- **Pill button, dark.** `{components.button-dark}`: black with a white label, same size, used on cards ("En savoir plus").
- **Round arrow buttons.** White circles, 40px tall, turning taupe on hover; used for the carousel and each teaser.
- **Tags and chips.** Small grey or red rectangles with a bold label, placed on top of images.
- **Cards.** `{components.card}`: 16px radius, 32px padding; the news cards are full-bleed photographs with bottom-aligned white titles.
- **Navigation.** `{components.nav}` and `{components.nav-link}`: black bar, white 16px links; a skip link "Accéder au contenu principal" is the measured nav-link element.
- **Countdown.** Red-outlined box with large numerals and small labels.

## Design System Architecture

No public design-system documentation for renaultgroup.com was found; the searches I ran returned only press coverage of an older rebrand and the site's accessibility statement. The article I opened on Design Week (https://www.designweek.co.uk/renault-updates-identity/) concerns the 2015 identity refresh (a redrawn diamond, a brighter yellow, an in-house design department and "a specially developed new typeface") and does not describe this website, so none of its details are used as tokens. The accessibility statement (https://www.renaultgroup.com/en/accessibility) says the site is partially compliant with the French RGAA 4.1 standard (69.49%, declared 21 January 2025) and lists "some texts contrast poorly with their background" among issues. The de-facto system is a set of CSS variables (the root also carries `--wp-*` WordPress variables), namely `--color--*` (with `hsl(var(--color--black)/0.x)` alpha ladders), `--border-radius--*`, `--heading-*`, `--grid-unit-*` and `--section--padding-y`, which this file follows.

## Do's and Don'ts

Do let photography carry colour and keep the interface black, white and taupe. Do use 100px pills for actions and 16px for cards. Do set titles in bold with tight leading. Do overlay white titles on darkened images. Do keep red for "new" and urgency.

Don't use red or orange as button fills. Don't add shadows. Don't mix square buttons with pills. Don't use light-weight display type. And given the published accessibility note, don't put dim text on busy images without a darkening overlay.

## Responsive Behavior

The variables include a mobile heading size of 36px against 40px for the medium desktop heading, which shows the headline scale steps down on small screens. The extraction records a 390px mobile view, but this pass did not inspect how the carousel, teaser row and card grid collapse, so those behaviours are not described. Button heights of 64px and 40px round arrows are comfortable touch targets at any width.

## Iteration Guide

Start from black, white and taupe, then choose imagery. Use the pill spec for any new action and the 16px radius for any new media card, with bottom-aligned white titles over a gradient. Add accents only from the red or orange variables, and only for status. Re-measure a page before adding any new value, and keep contrast in mind given the stated accessibility findings.
