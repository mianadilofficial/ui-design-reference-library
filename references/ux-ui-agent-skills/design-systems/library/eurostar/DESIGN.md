---
version: alpha
name: Eurostar
category: "Logistics & Mobility"
description: "Eurostar booking site (Rwanda market, English): La Pontaise headlines and ABC Social 16px body, navy #00286a chrome, brand blue #106dff with #0a4199 hover, yellow #ffc305 search button, plum #7d0552 and teal #086264 promo blocks, 4px and 8px radii."
colors:
  on-primary: "#ffffff"
  accent-green: "#00cd79"
  primary-dark: "#0a4199"
  plum: "#7d0552"
  canvas: "#ffffff"
  ink: "#00286a"
  primary: "#106dff"
  ink-dark: "#1c1c1a"
  surface-3: "#086264"
  ink-secondary: "#fcf5d8"
  ink-4: "#0d57cc"
  hairline: "#949492"
  button-secondary-bg: "#ffc305"
  card-border: "#00000033"
typography:
  display:
    fontFamily: "\"La Pontaise Semi Bold\", Arial, \"sans-serif\""
    fontSize: 28px
    fontWeight: 400
    lineHeight: 32px
  display-mobile:
    fontFamily: "\"La Pontaise Semi Bold\", Arial, \"sans-serif\""
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  heading:
    fontFamily: "\"La Pontaise Semi Bold\", Arial, \"sans-serif\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 24px
  body:
    fontFamily: "\"ABC Social Regular\", Arial, \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: "\"ABC Social Bold\", Arial, \"sans-serif\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Times
    fontSize: 16px
    fontWeight: 400
    lineHeight: 18.4px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 36px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 7px
  s5: 8px
  s6: 10px
  s7: 11px
  s8: 12px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 2px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-dark}"
  button-search:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 2px
    height: 52px
  button-status:
    backgroundColor: "{colors.accent-green}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 2px
    height: 48px
    borderColor: "{colors.accent-green}"
  link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-secondary}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-dark}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 16px
    height: 52px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.plum}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.xl}"
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.canvas}"
---

# Eurostar

## Overview
The measured page is https://www.eurostar.com/rw-en, the English-language Eurostar site in its Rwanda market version (title "Eurostar.com: Book Europe Train Tickets and Holidays"), a 6,960px page at 1280px width. This is Eurostar's own booking site with full content; the market code changes the prices, shown in euros. A deep navy header (`colors.ink`, #00286a) carries the italic "eurostar" logotype with its star mark, and a rounded utility pill with "Ask AI", "Get the app", "Help", "Global" and "Login / Register". Beneath it sit three booking tabs (Trains, Train + Hotel, Hotels) in blue and a secondary link row (Destinations, Travelling with Eurostar, Frequent travellers, Manage your booking), then a light-grey search bar: origin "London St Pancras Int'l", destination "To", date "Fri 9 Oct", "Add return", "1 adult" and a yellow "Search" button, with the helper links "Explore all trains", "Find lowest fares" and "Groups 16+".

The hero is a diagonally cut photograph of the Eiffel Tower against a deep teal field with a green star burst, headlined "London to Paris from €44¹" and a cream "Book now" button, with a green "Train status & timetables" tab at the top right. Under it come three plum promo cards (Paris to Amsterdam at €35¹; Discover the best Christmas markets in Europe; Best in snow), a green "Snap" banner ("Get up to 50% off²"), a carousel "Ideas for your next trip" and a map band "Book to 100 + destinations". Prices carry superscript footnote markers; the voice is warm and inviting, with value cues and travel imagery.

## Colors
- **Canvas `#ffffff`**; **Ink `#00286a`** is the deep Eurostar navy for headings and the header (592 characters of text, 2,915 area); **`colors.ink-dark` `#1c1c1a`** is the near-black used for button labels and body text on light; **`colors.ink-secondary` `#fcf5d8`** is a warm cream used for text on dark and plum surfaces (2,426 characters) and for the "Book now" button fill.
- **Primary `#106dff`** is the bright blue declared as `--color-primary` in the root variables and used by the "Manage your booking" and "Check train status" buttons; **`colors.primary-dark` `#0a4199`** is `--color-primary-dark`, the root hover colour; **`colors.ink-4` `#0d57cc`** is the tab and link blue; **`colors.on-primary` `#ffffff`** is the label on blue.
- **`colors.button-secondary-bg` `#ffc305`** is the yellow Search button; **`colors.accent-green` `#00cd79`** is the green of the status tab and the Snap banner; **`colors.surface-3` `#086264`** is the deep teal hero field; **`colors.plum` `#7d0552`** is the card and headline plum ("Ideas for your next trip" is set in it).
- **`colors.hairline` `#949492`** and **`colors.card-border` `#00000033`** are border greys.

The generator had assigned the green status tab as primary because it was the first detected CTA; the root variables define the brand primary as #106dff, so the roles were reassigned and the green kept as an accent.

## Typography
**ABC Social** (Regular and Bold) is the text family and **La Pontaise Semi Bold** is the display serif-like face for headlines. `typography.display` is La Pontaise 28px / 400 / 32px; `typography.display-mobile` is 24px / 400 / 32px; `typography.heading` is 22px / 400 / 24px; `typography.body` is ABC Social Regular 16px / 400 / 24px; `typography.button` is ABC Social Bold 16px / 400 / 24px (weight comes from the bold face file). `typography.nav` records Times at 16px / 18.4px, a browser fallback on an unstyled element, and is kept only as measured. Other sizes: 14px (854 characters), 36px and 18px. Fonts are licensed foundry families; Arial is the declared fallback.

## Layout
A centred container holds the booking widget and cards: the promo cards form a three-column grid and the ideas row is a horizontal carousel with previous and next arrows. The hero is a two-tone split with a diagonal cut. Measured gaps are 24px (8 uses), 8px, 4px and 32px; paddings are 16px (39 uses), 8px and 24px. Large banners alternate colour fields: teal, plum, green and pale blue (#ddf5ff for the map band). Density is moderate and image-led.

## Elevation & Depth
Elevation is nearly absent: a single soft shadow `rgba(0, 0, 0, 0.1) 0px 4px 8px 0px` was measured once. Depth comes from colour blocks, diagonal cuts that overlap photographs on the teal field, and rounded cards with a translucent 1px border.

## Shapes
Corners are small and varied: `rounded.md` (4px, 35 uses) for buttons and inputs, `rounded.xl` (8px) for cards, `rounded.xs` 2px, `rounded.sm` 3px, `rounded.lg` 6px, `rounded.2xl` 36px, 50% for circular icon buttons, and `rounded.none` for the booking tabs, which use one-sided radii such as 8px 0px 0px and 0px 8px 0px 0px so that the tabs join. The root variables name `--border-radius` 0.25rem and `--border-radius-lg` 0.5rem.

## Components
- **Button primary** (`components.button-primary`): `#106dff` fill, white ABC Social Bold 16px, 4px radius, 48px tall; hover goes to `#0a4199`.
- **Search button** (`components.button-search`): `#ffc305` fill, `#1c1c1a` label, 4px radius, 52px tall.
- **Status tab** (`components.button-status`): `#00cd79` fill, dark label, square top and 4px bottom corners.
- **Booking tabs**: blue (`#0d57cc`) tabs, 64px tall, cream 14px labels; the active tab is white with blue text. Hover turns the pale-grey tab to #cfe2ff.
- **Text input** (`components.text-input`): white, 4px radius, 52px tall, `#949492` border.
- **Promo card** (`components.card`): plum `#7d0552` with cream text, 8px radius, a photograph on top cut diagonally, a Book now or Find out more link with a circled arrow.
- **Cream "Book now" button**: cream fill, navy label, on the hero and the Snap banner.
- **Navigation** (`components.nav`): navy bar with cream labels.

## Design System Architecture
No public design-system documentation or brand-guideline site was located from the pages opened; the only page read was the home page, https://www.eurostar.com/rw-en, measured by the extractor. The shipped CSS is token-driven: `--color-primary` (#106DFF), `--color-primary-dark` (#0a4199), `--color-secondary` (#00286A), `--color-light` (#fff), `--color-muted` (#646463), `--color-subtle` (#e7e2d6), button variables (`--button-primary-background`, `--button-primary-background-hover`, `--button-secondary-background`, `--button-text-font-color`), `--font-base-family` ('ABC Social Regular'), `--font-base-size` (1rem), `--font-heading-size` (1.375rem), `--font-title-size` (1.125rem), `--border-radius`, `--border-radius-lg` and `--transition` (0.2s ease).

## Do's and Don'ts
- Do use navy `#00286a` for chrome and headings and `#106dff` for primary actions.
- Do reserve yellow `#ffc305` for the single Search action.
- Do set promo headlines in La Pontaise and body in ABC Social.
- Do pair plum, teal and green colour blocks with diagonal-cut photography.
- Don't mix more than one accent colour inside a single button group.
- Don't use pill radii on buttons; corners are 4px.
- Don't add heavy shadows; one 10% shadow is the whole system.
- Don't drop the footnote markers on prices.

## Responsive Behavior
The 390px mobile pass recorded the H1 at 24px in La Pontaise (`typography.display-mobile`), body at 16px (2,384 characters), and 14px, 20px, 24px, 28px and 18px type. Navigation, booking widget layout and breakpoints were not measured on mobile, so none are described.

## Iteration Guide
1. Start from navy `colors.ink` chrome, white canvas and `colors.primary`.
2. Use `typography.display` for promo headlines and `typography.body` for copy.
3. Use `components.button-search` once per page and `components.button-primary` for secondary booking actions.
4. Alternate full-width colour bands (teal, plum, green) with diagonal photo cuts.
5. Verify with `node web/scripts/verify-designs.mjs --slug=eurostar`.
6. Because the measured page is the Rwanda market, measure the main UK or French market page before adding market-specific tokens.
7. Follow the measured copy voice: short value statements with a price and a footnote marker ("from €44¹", "Get up to 50% off²"), imperative verbs on buttons (Book now, Find out more, Search), and destination names in headlines.
8. Imagery direction: bright seasonal photography of landmarks and people on trips, cropped by diagonal cuts into coloured fields, with a green star-burst graphic as the recurring brand mark on the teal hero.
