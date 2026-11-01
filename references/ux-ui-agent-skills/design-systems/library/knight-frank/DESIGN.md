---
version: alpha
name: Knight Frank
category: "Real Estate & PropTech"
description: "Knight Frank (knightfrank.com) is an independent global real-estate consultancy site in Tiempos Headline serif and Suisse Intl sans, using signal red #d0103a on near-black #202320 and white, with square 0px buttons, clay #efefeb cards and a dark red #9b1632 hover."
colors:
  canvas: "#ffffff"
  ink: "#202320"
  primary: "#d0103a"
  on-primary: "#ffffff"
  surface-clay: "#efefeb"
  surface-pink: "#fae7eb"
  ink-grey: "#5e615e"
  ink-black: "#000000"
  grey-disabled: "#a8a8a7"
  primary-hover: "#9b1632"
  text-input-border: "#d3d3d3"
typography:
  display:
    fontFamily: "\"Tiempos Headline\", serif"
    fontSize: 68px
    fontWeight: 400
    lineHeight: 73.44px
    letterSpacing: 1.36px
  display-mobile:
    fontFamily: "\"Tiempos Headline\", serif"
    fontSize: 38px
    fontWeight: 400
    lineHeight: 41.04px
    letterSpacing: 0.76px
  heading:
    fontFamily: "\"Tiempos Headline\", serif"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 40.8px
    letterSpacing: 0.68px
  subheading:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 28px
    fontWeight: 500
    lineHeight: 30.24px
    letterSpacing: 0.68px
  body:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 30.24px
  button:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  nav:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
  link:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  button-secondary:
    fontFamily: "\"Suisse Intl\", sans-serif"
    fontSize: 12px
    fontWeight: 600
    lineHeight: 12px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 40px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.none}"
    padding: 11px 32px
    height: 34px
  link:
    textColor: "{colors.grey-disabled}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 21px 68px
    borderColor: "{colors.grey-disabled}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 60px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-grey}"
    rounded: "{rounded.none}"
    padding: 48px 0px 80px
    borderColor: "{colors.text-input-border}"
---

## Overview

The Knight Frank global home page (https://www.knightfrank.com/, title "Independent Global Real Estate Consultants | Knight Frank") is an editorial corporate site. A utility row at the top holds a "Global" region selector, Newsroom, Careers, About us, Sign in and a red "Book a consultation" button. Beneath it a near-black navigation bar carries the white Knight Frank logo and the links Global solutions, Properties, Insights and Contact us. The hero is split: at the left a colorful flat illustration (people drinking wine under a lemon tree) with the eyebrow "THE RESIDENCE REPORT", a serif white headline "The global perspective on luxury residential development." and a red "Explore the report" button; at the right a dark panel titled "Find us where you are" with a country select and a "Go to site" outlined button.

Next is a centered "Our global reach" block with three large serif figures (130 Years of experience, 600+ Offices globally, 20,000+ Experts worldwide) over short grey paragraphs, an "Our property solutions" carousel of clay-colored cards (Capital markets, The Private Office, Occupier strategy and solutions) with a "View all" outlined button, a two-column section "With us, property is personal." pairing a silhouette photograph with copy and an "Explore solutions" outlined red button, and "Access dream homes around the world" below. The voice is confident, plain and service-oriented.

## Colors

The shipped CSS publishes the palette as root variables, which match the measured values: --black #202320 (ink and the navigation bar), --red and --btn-primary-bg #d0103a (the signal red), --dark-red #9b1632 (hover fill and text), --grey-01 #5e615e (paragraph grey), --grey-02 #a8a8a7 (disabled and outlined "Go to site"), --grey-03 #d3d3d3 (input border), --grey-04 #f5f5f5, --clay-03 #efefeb (the card surface) and --pink-03 #fae7eb (a pale pink band, measured among the background areas). The same stylesheet also defines supporting groups that are not prominent on the home page: laurel (#a3b5a3, #d1dad1, #e8ede8), teal (#75a3a9, #bad1d4, #e3edee), clay (#cbc9bd, #e0dfd7), apricot (#f9bc6e, #fcddb6, #fdeedb), purple (#7a498a, #cab6d0, #e4dbe8), pink (#ec9fb0, #f6cfd8) and status colors (--success #1dad65, --error #ff6e64, --warning #ffa564, --information #025150).

On the page itself red is used sparingly, for the main buttons, the outlined button borders, the carousel dot and arrow, and measured on 43 area units, while white (#ffffff, the highest-weight background), near-black #202320 and clay #efefeb carry the layout.

## Typography

Two licensed families are loaded: Tiempos Headline (400, regular and italic) for display and Suisse Intl (400, 500, 600) for UI and body. The hero statistic "130" is Tiempos Headline 400 at 68px/73.44px with 1.36px letter-spacing; the mobile pass shows the hero headline at 38px/41.04px with 0.76px. Section headings (for example "Find us where you are") are Tiempos 34px/40.8px with 0.68px tracking. Card titles such as "Capital markets" are Suisse Intl 500 at 28px/30.24px (0.68px tracking). Body copy is Suisse Intl 400 at 18px/30.24px in #5e615e (16px/25.6px on mobile). Navigation is Suisse 500 at 14px/18.2px, buttons are Suisse 600 at 14px (or 12px for the small red button), and the "Go to site" link is 600 at 16px.

## Layout

The page is 1280px wide and 5325px tall. The structure alternates full-bleed bands and a container with a left margin visible at the logo. The hero is a two-thirds image and one-third dark panel split. Statistics are a three-column centered row; the solutions carousel shows three cards at a time with pagination dots at the left and round arrow buttons at the right; split sections place a large image and text in equal halves. The shipped CSS defines layout variables such as --foundations-grid-space: 4rem, --foundations-grid-margin-bottom: 3.2rem, --foundations-space-4-point-40: 2.4rem and --block-space--s: 4rem. Measured spacing steps: 2px, 4px, 6px, 8px, 10px, 11px, 12px, 14px, 16px and 18px.

## Elevation & Depth

No shadows were measured. Depth is flat: tonal clay cards on white, a near-black header against a white utility row, and full-bleed imagery. Hover on the primary button changes its fill from #d0103a to #9b1632 (measured on "Book a consultation").

## Shapes

All buttons, cards, inputs and carousel tiles are square: computed radius 0px. The only rounded elements are round carousel arrow buttons and dots (50%, four elements). Inputs use a 1px solid #d3d3d3 border and are 60px tall with 16px padding.

## Components

- Primary button: #d0103a fill, white Suisse Intl 600 14px text, 1px solid #d0103a border, 0px radius, padding 14px 40px, height 44px ("Explore the report"); hover #9b1632.
- Small button: same red, Suisse 600 12px, padding 11px 32px, height 34px ("Book a consultation").
- Outlined button: transparent, red text and 1px red border, square ("View all", "Explore solutions"); the "Go to site" variant uses #a8a8a7 text and border at 16px/600 with padding 21px 68px.
- Navigation: near-black bar, white Suisse 500 14px links; utility links in #202320 on white.
- Card: #efefeb clay surface, serif or Suisse title at 28px, grey body, no border or radius.
- Statistic: large Tiempos figure, Suisse 500 label, short grey paragraph.
- Text input and select: white, black text at 18px/26.64px, 1px #d3d3d3 border, 0px radius, height 60px.
- Footer: white, grey #5e615e text at 14px, padding 48px 0px 80px.

## Design System Architecture

No public design-system page was opened, but the shipped CSS documents the system in root variables: a named palette (--black, --red, --dark-red, grey-01 to grey-05, laurel, teal, clay, apricot, purple, pink families with 01 to 03 steps), button tokens in a --btn-{primary|secondary|tertiary|transparent}-{bg|color|border|hover-bg|hover-color|hover-border|disabled-*} pattern, font tokens such as --kf-font-body: Suisse Intl, and layout tokens prefixed --foundations-. That is a real tokenized system, exposed only via CSS.

## Do's and Don'ts

Do use #d0103a for the one primary action in a view, #9b1632 for hover, serif Tiempos for headlines and figures, and Suisse for everything functional. Do keep corners square and use clay #efefeb for cards.

Don't round buttons or cards. Don't use red for large fills other than buttons; the pale pink #fae7eb and clay are the section tints. Don't use the --swiper-theme-color (#007aff) carousel default; the carousel controls are red. Don't use serif for buttons or body text.

## Responsive Behavior

The mobile pass (390px) measured the hero headline in Tiempos Headline at 38px/41.04px (0.76px tracking), body at Suisse Intl 16px/25.6px in #5e615e, and the "Explore the report" button at 12px/600 with 0px radius, red fill and 1px #d0103a border. Most-used mobile sizes are 14px and 16px. Navigation behavior, column collapse and breakpoints were not measured.

## Iteration Guide

1. White canvas, near-black #202320 for text and the nav bar, clay #efefeb for cards.
2. Tiempos Headline for headings and statistics (68px for hero figures, 34px for section titles), Suisse Intl for the rest.
3. One red #d0103a square button per section; outlined red buttons for secondary actions; hover #9b1632.
4. Use illustration or documentary photography at half-width beside text.
5. Reuse the published CSS variables (--red, --dark-red, --clay-03) rather than new colors.

## Additional Notes

Imagery is a deliberate mix: a hand-drawn, flat-color illustration with oversized figures and botanical shapes opens the page for the annual Residence Report, while the rest of the page uses documentary photography, such as two silhouetted professionals against a large glazed window overlooking a city. The illustration is the only strongly colored area on the page, so it carries the brand's warmth against an otherwise restrained red, black, white and clay system. Microcopy is direct and second-person ("Find us where you are", "With us, property is personal.", "Access dream homes around the world"). Hover on the primary button was measured as a fill change only (no border-radius, shadow or motion change). The country selector in the dark hero panel is the single piece of form UI on the home page and shows a small red caret at the right edge of a white field.
