---
version: alpha
name: Aardvark Book Club
category: "Retail & E-commerce"
description: "Subscription book club for the USA and Canada, measured at aardvarkbookclub.com: white page, saturated yellow hero #ffd24a, magenta #ff008c membership button, black Champ 700 display headlines at 106.667px, Degular 600 body, tilted multicolour book cards and a handwritten script accent face."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff008c"
  on-primary: "#ffffff"
  pill-yellow: "#faed8f"
  hero-yellow: "#ffd24a"
  bright-pink: "#fd48f2"
  violet: "#3b308f"
  wine: "#670a2e"
  text-input-text: "#333333"
  card-slate: "#787b91"
typography:
  display:
    fontFamily: Champ, Arial, sans-serif
    fontSize: 106.667px
    fontWeight: 700
    lineHeight: 85.3333px
    letterSpacing: "-1.06667px"
  display-mobile:
    fontFamily: Champ, Arial, sans-serif
    fontSize: 50.4478px
    fontWeight: 700
    lineHeight: 40.3582px
    letterSpacing: "-0.504478px"
  heading:
    fontFamily: Champ, Arial, sans-serif
    fontSize: 69.3333px
    fontWeight: 700
    lineHeight: 55.4667px
    letterSpacing: "-0.693333px"
  subheading:
    fontFamily: Champ, Arial, sans-serif
    fontSize: 26.6667px
    fontWeight: 700
    lineHeight: 23.4667px
  body:
    fontFamily: Degular, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 600
    lineHeight: 16px
    letterSpacing: "-0.266667px"
  button:
    fontFamily: Degular, Arial, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
    letterSpacing: "-0.106667px"
  nav:
    fontFamily: Degular, Arial, sans-serif
    fontSize: 10.6667px
    fontWeight: 600
    lineHeight: 20px
  link:
    fontFamily: Degular, Arial, sans-serif
    fontSize: 13.3333px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: "-0.32px"
  input:
    fontFamily: Degular, Arial, sans-serif
    fontSize: 16.6667px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: "-0.333333px"
rounded:
  xs: 5.33px
  sm: 10.67px
  md: 16px
  lg: 16.67px
  xl: 17.33px
  2xl: 21.33px
  3xl: 48px
  4xl: 53.33px
  none: 0px
  pill: 9999px
spacing:
  s1: 1.33px
  s2: 2.67px
  s3: 4.67px
  s4: 5.33px
  s5: 8px
  s6: 8.67px
  s7: 9.33px
  s8: 10.67px
  s9: 12px
  s10: 13.33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  button-secondary:
    backgroundColor: "{colors.pill-yellow}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 37px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 16.6667px 17.7083px
    height: 53px
  card:
    backgroundColor: "{colors.card-slate}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.violet}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 106.667px 0px 0px
---

## Overview
Aardvark Book Club is a subscription book club that ships to the USA and Canada (homepage title: "Aardvark Book Club - Unbox stories worth talking about"). Members choose up to 3 new hardcover books a month; the site also sells gift subscriptions, merch and an "Aardvark Exclusive" horror anthology. Navigation is All Books, Gifting, Merch, FAQ and Log-in / Sign-up, with Instagram and TikTok icon links and a link to a UK store.

The capture is loud and colourful by design. A saturated yellow hero (`{colors.hero-yellow}`) with layered organic wave shapes in paler yellow and orange fills the first screen under a gigantic black headline "Unbox stories worth talking about". Below it, a white section titled "Our Oct books" carries a horizontal carousel of tilted book cards, each in its own colour (slate, lime, forest green, yellow, blue), and a pink rounded panel titled "How it works" holds four coloured step cards ("Step #1" to "Step #4") with line illustrations. Small handwritten annotations in a script face float beside headings ("Discover hidden gems and buzzy new releases", "Consider us your professional book curator"). The voice is playful: "Call us creatures of habit.", "We drop new books on the 1st of every month."

## Colors
White `{colors.canvas}` (#ffffff) is the largest background area (13697 units), followed by `{colors.hero-yellow}` (#ffd24a), `{colors.bright-pink}` (#fd48f2), `{colors.pill-yellow}` (#faed8f), `{colors.violet}` (#3b308f), and pale cyan (#a4f6f8). Text is overwhelmingly `{colors.ink}` (#000000), then white on dark tiles, `{colors.violet}` (also the footer fill and handwritten annotation colour) and `{colors.wine}` (#670a2e).

`{colors.primary}` (#ff008c) is the site's own "magenta" variable and the background of the Log-in / Sign-up button (measured on the mobile pass: white text on #ff008c). It is declared in the stylesheet as `--button-alt-color-background` and `--magenta`. The generator had picked the yellow nav pill (#faed8f, a region-switch and nav link button) as primary; that colour is kept as `{colors.pill-yellow}` and used for `button-secondary`. `{colors.card-slate}` (#787b91) is the Venus, Vanishing card colour from the capture. The root variables name a larger palette (periwinkle #9982de, orange #f9a220, green #2de124, cyan #1ce8ed, soft-pink #ffdbfd, wine #670a2e, olive #857521, soft-grey #f2f2f2 and more); they are listed in the extraction but only the tokens above are declared.

## Typography
Three faces are loaded: Champ 700 (display and headings), Degular 600 and 700 (body, buttons, nav), and "Hello Organichand Webfont" 400 (handwritten annotations). Fallback is Arial / sans-serif.

- `{typography.display}`: Champ 700 at 106.667px, line-height 85.3333px (0.8), letter-spacing -1.06667px. Mobile: 50.4478px / 40.3582px / -0.504478px.
- `{typography.heading}`: Champ 700 at 69.3333px / 55.4667px, -0.693333px.
- `{typography.subheading}`: Champ 700 at 26.6667px / 23.4667px, used for book titles.
- `{typography.body}`: Degular 600 at 13.3333px / 16px, -0.266667px. Mobile body is 15.5224px / 18.6269px.
- `{typography.button}`: Degular 600 at 16px / 19.2px, measured on the yellow nav pills. The pink mobile CTA is 19.403px at weight 700, line-height 29.1045px, -0.465672px tracking.
- `{typography.nav}`, `{typography.link}`, `{typography.input}`: Degular 600/700 at 10.6667px, 13.3333px and 16.6667px.

All headings are tightly leaded and tightly tracked: the line-height is 0.8 of font size on display and heading. Font substitutes: Champ and Degular are commercial faces; use a heavy grotesque with tight tracking for headlines and a medium humanist sans for body, plus any casual script for annotations. This is a design suggestion, not a measurement.

## Layout
Desktop width is 1280px with a page height of 11272px. The hero panel has large rounded lower corners (the radius table lists "0px 0px 21.3333px 21.3333px" seven times) and the headline is left-aligned in a 821px wide block while a handwritten note floats on the right. Sections are stacked full-width panels with generous vertical gaps. Spacing tokens are small (1.33px to 13.33px in the measured gap/padding set), reflecting an em-based system: the header height variable is 6.625em. The book carousel runs past the right edge, with round arrow buttons above it.

## Elevation & Depth
Measured shadows are focus rings rather than elevation: `0 0 0 0.125em var(--button-color-focus)`, with a 0.25em white variant. There are no soft drop shadows. Depth comes from colour blocking, overlapping tilted cards and layered wave shapes in the hero.

## Shapes
Radii are generous and varied: 5.33px (26 uses), 16px (24), 21.3333px (22), 10.6667px (13), 50% (8) for round icon buttons, 17.3333px, 48px and 53.3333px for large panels, and 9999px pill. The button-primary radius measured on the CTA wrapper is 0px; the capture shows an attached arrow segment. Book cards have rounded corners at the 16 to 21px scale.

## Components
**Primary button** (`button-primary`): magenta `{colors.primary}` with white text. In the capture it is a two-part button: a label segment and a small arrow segment. Used for "Log-in / Sign-up now" and "Become a member". The mobile instance is 246px wide and 47px tall.

**Secondary pill** (`button-secondary`): `{colors.pill-yellow}` fill, black text, 37px tall, used for nav items All Books, Gifting, Merch, FAQ and the "Shopping from the UK?" switch.

**Text input**: white, #333333 text, 53px high, padding 16.6667px 17.7083px.

**Book card**: tilted portrait card with a coloured background, a tag row (e.g. "Debut Novel", "Historical", "LGBTQIA+"), a title in Champ and a two-line blurb.

**Footer**: `{colors.violet}` background, white text, top padding 106.667px.

## Design System Architecture
Source: https://www.aardvarkbookclub.com/ (opened for this document). No brand guideline or design system is linked; the homepage footer links only Terms of Service and Privacy Policy plus designer and developer credits. The site is built on Webflow (the stylesheet references the webflow-icons font). The de-facto system is a set of CSS custom properties: named colours (`--yellow`, `--magenta`, `--violet`, `--wine`, `--cyan`, `--pale-pink`...), component variables (`--button-color`, `--button-alt-color-background`, `--button-social-color`, `--button-alt-height: 3.5em`), eased motion curves (`--ease-soft-bounce: cubic-bezier(0.34, 1.17, 0.64, 1)`, `--pop-up-ease-smooth`) and heading sizes in em (`--font-size-heading-xs: 1.875em`, `--font-size-handwritten-big: 2.5em`). Palette pairs exist as hard and soft versions for FAQ colour coding (`--faq-color-yellow` and `--faq-color-yellow-soft`).

The practical consequence of this architecture is that a section's colour is a pairing of one named variable with its soft counterpart, so a new section can be built by choosing a pair (for example yellow with soft yellow, or cyan with soft cyan) rather than inventing a hex. Handwritten annotations use a dedicated size variable, which keeps them visually distinct from Degular body text. Because every button variable has a matching focus variable, the focus variables --button-color-focus, --button-alt-color-focus and --button-social-color-focus are all measured as #000.

## Do's and Don'ts
- Do pair colour blocks: each section or card gets one saturated fill with black or violet text.
- Do set headlines very large, in Champ 700, with 0.8 line-height.
- Do use handwritten script annotations as margin notes, tilted slightly.
- Do use magenta `{colors.primary}` for the main membership action.
- Don't use soft shadows; use colour and overlap.
- Don't use the browser-default link blue #0000ee; it is a UA default, not a brand colour.
- Don't set body text in a light weight; Degular is measured at 600 and 700.

## Responsive Behavior
Measured at 390px: h1 falls to 50.4478px, h2 to 38.806px, body text increases to 15.5224px, and the Log-in / Sign-up CTA is a 246px by 47px magenta button with 19.403px type. The h1 box is 359px wide. Breakpoint widths, carousel behaviour and menu collapse were not measured.

## Iteration Guide
1. Set the page white and ink black; give each section one saturated fill from the palette above.
2. Headline: Champ 700, 106.667px desktop, 0.8 line-height, -1px tracking.
3. Primary action in `{colors.primary}` with white text; secondary pills in `{colors.pill-yellow}`.
4. Round big panels with the 21.3333px or larger radii and tilt cards.
5. Add script notes in violet with the handwritten face.
6. Dark mode, hover states and tablet widths are not measured.
