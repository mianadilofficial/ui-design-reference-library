---
version: alpha
name: Nulogy
category: "Design Systems"
description: "Nulogy marketing site (nulogy.com): white canvas with navy #0f1f3d headings, a gold #ffc704 primary button and statistics, Blender uppercase 54px headlines over IBM Plex Sans body, 5px and 8px button radii and soft navy-tinted card shadows on 14px rounded cards."
colors:
  canvas: "#ffffff"
  page-body: "#e7ecfe"
  ink-muted: "#6c7784"
  primary: "#ffc704"
  on-primary: "#ffffff"
  surface-navy: "#102c46"
  surface-soft: "#fafbf9"
  ink: "#0f1f3d"
  ink-deep: "#1a1a2e"
  ink-slate: "#6b6b80"
  hairline: "#ffc7048c"
  button-primary-border: "#216bea9c"
  button-secondary-bg: "#efbe41"
  button-secondary-text: "#122b47"
  link-border: "#eabb3c"
  nav-text: "#004494"
  card-text: "#8a93a8"
  card-border: "#dce0eab3"
  footer-text: "#ffffffb8"
typography:
  display:
    fontFamily: Blender, "Blender Pro", "IBM Plex Sans", system-ui, sans-serif
    fontSize: 54px
    fontWeight: 800
    lineHeight: 54px
    letterSpacing: "-1px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Blender, "Blender Pro", "IBM Plex Sans", system-ui, sans-serif
    fontSize: 38px
    fontWeight: 800
    lineHeight: 38px
    letterSpacing: "-1px"
    textTransform: uppercase
  heading:
    fontFamily: "\"IBM Plex Sans Arabic\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
  subheading:
    fontFamily: "\"IBM Plex Sans\", system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: "\"IBM Plex Sans\", sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 28.9px
  button:
    fontFamily: "\"IBM Plex Sans\", sans-serif"
    fontSize: 19px
    fontWeight: 700
    lineHeight: 19px
    textTransform: capitalize
  nav:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 28px
  button-secondary:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 28px
  input:
    fontFamily: "\"IBM Plex Sans\", system-ui, -apple-system, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 10px
  3xl: 12px
  4xl: 14px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    height: 45px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xl}"
    padding: 11px 22px
    height: 50px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 24px
    borderColor: "{colors.link-border}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 8px 16px
    height: 36px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.4xl}"
    padding: 20px 18px 16px
    borderColor: "{colors.card-border}"
    boxShadow: rgba(15, 31, 61, 0.09) 0px 4px 20px 0px, rgba(15, 31, 61, 0.05) 0px 1px 4px 0px
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.footer-text}"
---

## Overview

The measured page is https://nulogy.com/ (page title "Nulogy - Making Life Better for Food & Beverage Teams"), the marketing site of Nulogy, a manufacturing operating-system software company. The header tagline under the logo reads "For the people behind every product". The page opens with a slim utility row (Services, News, Contact, search), then a pale blue-grey rounded navigation bar holding the gold-and-navy logo, four dropdown menus (MOS Platform, Industries, Customers, Resources), a white "Pricing" button and a gold "Request a Demo" button. Under it a deep-blue hero carries an outlined eyebrow pill ("Nulogy OS for food & beverage"), a stacked uppercase headline, three large gold statistics, a gold "Request Demo" button, an outlined "2-Minute Demo" button, and a laptop-plus-phone product screenshot with review badges above.

The lower page is white: a "Trusted by global leaders" strip of grey customer logos, a centred headline "Everything Food & Beverage Demands, Delivered in One Place", four feature cards with gold icon tiles, a hub-and-spoke diagram with the logo in a white circle and dashed multi-coloured connector lines, two supplier cards, and a gold chevron band at the bottom. Voice is plain and benefit-driven: product areas are named in small uppercase eyebrows ("Production operations", "Quality and compliance") over a bold title, a one-line promise and a "Learn more" link.

## Colors

Gold is the action colour: `{colors.primary}` fills the primary button, colours the hero statistics and third headline line, the icon tiles and the footer chevron band. Ink is a deep navy `{colors.ink}` for headings; `{colors.ink-muted}` is a blue-grey for secondary text, `{colors.ink-deep}` and `{colors.ink-slate}` are further dark neutrals in the type ladder, and `{colors.card-text}` is the paler grey used for card descriptions. Surfaces: `{colors.canvas}` white for most of the page, `{colors.page-body}` as the body background, `{colors.surface-navy}` for the footer fill, and `{colors.surface-soft}` as a warm off-white. Links and navigation text use `{colors.nav-text}`, a strong blue. Borders: `{colors.card-border}` on cards, `{colors.hairline}` (gold, semi-transparent), `{colors.link-border}` around outline buttons and `{colors.button-primary-border}` on the primary button.

The secondary button uses `{colors.button-secondary-bg}`, a slightly darker gold with `{colors.button-secondary-text}` navy text. The primary button text `{colors.on-primary}` is white on gold, as measured; the contrast between white and this gold is low, so new work should consider navy text on gold, as the secondary button does.

## Typography

Display headings use Blender (700 loaded, rendered at weight 800) uppercase: `{typography.display}` is 54px, letter-spacing -1px, falling to 38px on a 390px viewport (`{typography.display-mobile}`). Section headings are `{typography.heading}` at 32px, IBM Plex Sans Arabic at 500. Everything else is IBM Plex Sans: subheading 24px bold, body 17px with a 28.9px line height, buttons 19px bold capitalised, nav 13px at 500, secondary button 15px at 600, inputs 13px. DM Sans, Manrope and Plus Jakarta Sans also appear in measured text but only on a small share of characters, so they are not declared as tokens.

### Font substitutes

Blender is a proprietary face; Blender Pro is the declared fallback, then IBM Plex Sans and system-ui. IBM Plex Sans is open source.

## Layout

The page content width appears as `--wp--style--global--content-size` 800px and wide size 1200px in the WordPress variables found on the page, so long copy sits in a narrower column than card grids. The hero is full width with copy left and product imagery right. Feature cards form a four-up row, supplier cards a two-up row beneath a diagram. Spacing steps measured include `{spacing.s1}` through `{spacing.s10}` (2px to 14px) for component internals; the large vertical rhythm between sections comes from WordPress spacing presets.

## Elevation & Depth

Cards use a soft navy-tinted shadow: `rgba(15, 31, 61, 0.09) 0px 4px 20px 0px, rgba(15, 31, 61, 0.05) 0px 1px 4px 0px`, matching a CSS variable `--shadow-md` on the page, with a larger `--shadow-lg` variable also defined. Cards also have a pale border `{colors.card-border}`. The hero's blue background and the bottom gold chevron band supply large colour fields; the white hub circle floats above the page with the same soft shadow style.

## Shapes

Radii: `{rounded.xs}` 3px on inputs, `{rounded.sm}` 4px, `{rounded.md}` 5px on the primary button, `{rounded.lg}` 6px, `{rounded.xl}` 8px on the secondary button, `{rounded.2xl}` 10px, `{rounded.3xl}` 12px, `{rounded.4xl}` 14px on cards, and `{rounded.pill}` for eyebrow pills. Circles (50%) are used on the hub and some icons.

## Components

- **Primary button** (`button-primary`): gold `{colors.primary}` fill, white label `{typography.button}`, 45px high, padding 12px 24px, `{rounded.md}`, 1px translucent blue border.
- **Secondary button** (`button-secondary`): darker gold fill, navy label, 50px high, `{rounded.xl}`.
- **Outline link button** (`link`): gold text on transparent, gold border, same padding as primary.
- **Navigation** (`nav`, `nav-link`): the visible bar in the capture is pale blue-grey (its fill is not declared as a token); links 13px at weight 500 in `{colors.nav-text}`.
- **Text input** (`text-input`): 36px high, `{rounded.xs}`, search field in the utility row.
- **Card** (`card`): white, `{rounded.4xl}`, pale border, soft shadow, gold icon tile, eyebrow, title, description, divider and a blue "Learn more" link with arrow.
- **Footer** (`footer`): `{colors.surface-navy}` with translucent-white text `{colors.footer-text}`.

## Design System Architecture

Nulogy has a real, public-facing design system: https://nulogy.design is the Nulogy Design System (NDS) documentation, which I opened. It lists foundations (principles, colour, typography, spacing, shadows), 50+ components, patterns and resources, with links to GitHub, a Figma kit and Storybook, and describes itself as used internally at Nulogy to help teams build better interfaces faster. The npm packages named in its ecosystem are `@nulogy/components`, `@nulogy/tokens` and `@nulogy/css`. The page I fetched displays no hex codes or font names, and the marketing site at nulogy.com is a WordPress build (the extracted CSS variables include `--wp--preset--*` and `--wp--style--*` names alongside site-specific `--nu-gold`, `--nu-blue`, `--accent`, `--navy-mid`, `--grey-500` and `--shadow-md`). I could not confirm that nulogy.com consumes NDS, so no values were taken from NDS and every value here is measured from the live marketing page.

## Do's and Don'ts

- Do use `{colors.primary}` gold for the one primary action per view and for key statistics.
- Do set hero headlines in Blender uppercase and body copy in IBM Plex Sans.
- Do use soft navy-tinted shadows and pale borders on cards.
- Do pair a small uppercase eyebrow with a bold card title and a short promise.
- Don't set white text on gold at small sizes without checking contrast; the measured primary button does this.
- Don't introduce other bright hues on page chrome; the multi-coloured connector lines belong to the diagram.
- Don't use sharp corners; the smallest radius is 3px.
- Don't copy NDS values into this system without measuring them on the site.

## Responsive Behavior

On a 390px viewport the display headline drops from 54px to 38px (`{typography.display-mobile}`) at the same line height and letter-spacing. WordPress content-size and wide-size variables imply narrow and wide containers, but the mobile navigation and card reflow were not measured and are not described.

## Iteration Guide

1. Start with white `{colors.canvas}` and navy `{colors.ink}` text; add gold for the single main action.
2. Use IBM Plex Sans for UI text, Blender uppercase for hero headlines.
3. Build feature cards at `{rounded.4xl}` with the soft shadow and an eyebrow label.
4. Provide a secondary action as darker-gold button or outline.
5. Show product screenshots on a deep-blue hero.
6. Re-run the gate after any rename.
7. Keep eyebrow labels small and uppercase, titles bold and short, descriptions in the paler card grey, and always close a card with a divider and a blue Learn more link.
