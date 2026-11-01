---
version: alpha
name: Lamborghini
category: "Automotive"
description: "Automobili Lamborghini's website as measured on lamborghini.com — a square-cornered, uppercase-display system set in the proprietary LamboType (fallbacks Roboto, Helvetica Neue, Arial), with a 120px / 110px display headline, 72px-tall zero-radius buttons, a white canvas alternating with full-bleed near-black photographic bands (#181818, #000000), and a muted gold (#917300) filled button."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#917300"
  on-primary: "#ffffff"
  accent-yellow: "#ffc000"
  surface-dark: "#181818"
  ink-secondary: "#f5f5f5"
  ink-muted: "#494949"
  ink-faint: "#dcdcdc"
  ink-subtle: "#969696"
  nav-text: "#202020"
  canvas-hover: "#c4c4c4"
typography:
  display:
    fontFamily: LamboType, Roboto, "Helvetica Neue", Arial
    fontSize: 120px
    fontWeight: 400
    lineHeight: 110px
    textTransform: uppercase
  display-mobile:
    fontFamily: LamboType, Roboto, "Helvetica Neue", Arial
    fontSize: 80px
    fontWeight: 400
    lineHeight: 70px
    textTransform: uppercase
  heading:
    fontFamily: LamboType, Roboto, "Helvetica Neue", Arial
    fontSize: 27px
    fontWeight: 400
    lineHeight: 37px
    textTransform: uppercase
  body:
    fontFamily: LamboType, Roboto, "Helvetica Neue", Arial
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 56px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 72px
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 72px
  button-secondary-hover:
    backgroundColor: "{colors.canvas-hover}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 72px
  button-outlined-on-dark:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 72px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 24px 0px
  nav:
    textColor: "{colors.nav-text}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 8px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-secondary}"
    rounded: "{rounded.none}"
---

## Overview

Lamborghini's homepage is built from two kinds of surface: **full-bleed photographic bands** that run edge to edge (the capture opens on a dark, blurred track shot with the headline `REVUELTO SV` in white), and **plain white bands** that carry the model carousel. The two are separated by a hard edge, not a rounded card or a shadow. Everything with a box — buttons, nav, footer — has a radius of `{rounded.none}` (0px). The only soft shapes in the capture are inside imagery.

The interface is almost entirely typographic. One family, LamboType (declared as `LamboType, Roboto, "Helvetica Neue", Arial`), is the only font family measured on the page; it is used at a single weight, 400. All hierarchy comes from size, case and the width of the face rather than from weight changes. In the capture the headlines render in a visibly condensed cut, while the body copy and tab labels render in a normal-width cut; the site's CSS variables name several variable-font cuts (see Typography), but which exact cut each heading uses was not measured, so this document does not assign them.

Colour is restrained: white (`{colors.canvas}`), black (`{colors.ink}`), a near-black `{colors.surface-dark}`, and greys. The accents measured in the site's own CSS are two yellows. `{colors.primary}` (#917300), a dark muted gold, is the fill of the `EXPLORE THE MODEL` button with a white label. `{colors.accent-yellow}` (#ffc000) was measured as the fill of an anchor labelled `START CONFIGURATION`; in the capture that label shows as an underlined text link with no visible yellow fill, so where the bright yellow appears on screen is not confirmed here.

**Key Characteristics:**
- Zero radius everywhere (`{rounded.none}`); no box-shadows were recorded on the homepage, and the border-radius frequency list is empty.
- Uppercase display type: the h1 is 120px on a 110px line, uppercase; the h2 is 27px on 37px, uppercase.
- Buttons are 72px tall with 24px padding, in 16px type — large, rectangular, easy targets.
- Hover on a white button swaps the fill to `{colors.canvas-hover}`; the interface does not animate shape.
- Hexagonal carousel arrows in the capture; the hexagon is the one recurring non-rectangular shape.
- Legal consumption and emissions copy sits under the model carousel in small body text, not hidden.

## Colors

> **Source pages:** home (`/en-en`), desktop 1280px and mobile 390px extractions.

### Brand & Accent
- **Gold** (`{colors.primary}` — `#917300`): Fill of the `EXPLORE THE MODEL` button, white label (`{colors.on-primary}`). Also the underline under the active model tab in the capture (colour of the underline matches the gold button visually; the exact value of the underline was not separately measured).
- **Yellow** (`{colors.accent-yellow}` — `#ffc000`): Measured fill of the `START CONFIGURATION` anchor (text `{colors.ink}`). The site's CSS also defines a `--yellow` and `--warning` variable as `#dfb400`, a different value; both are in the CSS but this document uses only `#ffc000`.

### Surface
- **Canvas** (`{colors.canvas}` — `#ffffff`): Model carousel band and the `DISCOVER MORE` / `FIND YOUR DEALER` button fills.
- **Surface dark** (`{colors.surface-dark}` — `#181818`): Colour of the header's top-to-transparent gradient (`linear-gradient(rgb(24, 24, 24), rgba(24, 24, 24, 0))` on the nav) and a large share of measured background area.
- **Ink black** (`{colors.ink}` — `#000000`): The footer fill and the largest measured background area on the page.

### Text
- **Ink** (`{colors.ink}` — `#000000`): Text on white bands and on the white and yellow buttons.
- **Nav text** (`{colors.nav-text}` — `#202020`): The measured colour of the header and body element.
- **Ink secondary** (`{colors.ink-secondary}` — `#f5f5f5`): Measured as the most-read text colour by character count, used on dark bands and in the footer.
- **Ink muted** (`{colors.ink-muted}` — `#494949`): Hover text and border colour of the `DISCOVER ALL MODELS` link (on a `#f5f5f5` hover fill).
- **Ink faint** (`{colors.ink-faint}` — `#dcdcdc`) and **Ink subtle** (`{colors.ink-subtle}` — `#969696`): Secondary text greys measured by character count. The capture shows inactive carousel tabs in a lighter grey than the active tab; the exact colour of those tab labels was not confirmed against these two values.
- **Canvas hover** (`{colors.canvas-hover}` — `#c4c4c4`): Fill of the `DISCOVER MORE` button on hover, and text colour of the `MENU` button on hover.

### Colours present in CSS but not used here
The site ships a Bootstrap-style palette in its root variables (`--blue #007bff`, `--red #dc3545`, `--success #28a745`, `--info #17a2b8`, `--purple #6f42c1`, `--pink #e83e8c`, `--teal #20c997`, `--orange #fd7e14`, and a `--primary` of `#007bff`). These are generic framework defaults sitting in the stylesheet; none of them was measured on a visible homepage element, so none is a brand colour in this file. `--swiper-theme-color #007aff` is the carousel library's default.

### Gradients
Root variables define `--gradient-1` through `--gradient-4`, `--gradient-header`, `--gradient-top` and `--gradient-bottom`. They are all vertical (180deg) fades between `#181818` / `#000000` / `#f5f5f5` / `#ffffff` and transparent, used to let photography fade into a solid band. The capture shows exactly this at the hero's bottom edge and at the top of the dealer locator band.

## Typography

### Family
- **LamboType** — declared first in `LamboType, Roboto, "Helvetica Neue", Arial`. The page loads `LamboType normal normal` and `Open Sans 700 normal`; every measured character (by count) is LamboType, and the Open Sans load was not found on any measured text.
- Root variables name these cuts: `Lambotype Variable`, `Lambotype Variable Regular`, `Lambotype Variable Bold`, `Lambotype Variable UltraCnd Bold`, `Lambotype Variable UltraCnd Black`, `Lambotype Variable Cnd Bold`, `Lambotype Variable Italic`. The names show the family spans normal, condensed and ultra-condensed widths. Which cut sits on which element is not recorded by the extractor.
- Every measured weight is 400. The cuts are chosen by width and style, so `fontWeight` is 400 in all tokens.

### Hierarchy
| Token | Size | Line height | Case | Role |
|---|---|---|---|---|
| `{typography.display}` | 120px | 110px | uppercase | Hero h1 (`REVUELTO SV`) on desktop |
| `{typography.display-mobile}` | 80px | 70px | uppercase | Same h1 at 390px width |
| `{typography.heading}` | 27px | 37px | uppercase | Hero h2 (`THE QUANTUM OF DRIVING`) on desktop |
| `{typography.body}` | 16px | 26px | none | Paragraphs, buttons, tab labels |

Other sizes measured by character count on the desktop page: 18px (280 characters), 12px (109), 80px (78), 40px (6). The 18px size is the mobile h2 and a frequent secondary size. The 12px size is the smallest in use. The `MODELS` section heading in the capture is a mid-size uppercase heading; its exact size was not recorded as a role, so it is not tokenised.

### Principles
- **Uppercase carries the brand voice.** Headlines, nav labels and button labels read in capitals in the capture (`DISCOVER MORE`, `START CONFIGURATION`, `ENQUIRE`, `FIND YOUR DEALER`). The extractor's recorded `textTransform` for the button anchors is `none`, which means the capitals come from the source text itself, not a CSS transform, while the headings use `text-transform: uppercase`.
- **Tight leading on display, open leading on body.** The h1 line height (110px) is below its font size (120px); body uses 26px on 16px.
- **No letter-spacing** is recorded (`normal`) on any measured role. Root variables define `--letter-spacing-2: 0.36px`, but no measured role uses it.
- **Single weight.** Do not introduce a bold weight to create emphasis.

### Font substitutes
LamboType is proprietary and is not published for download on the pages that were opened. The site's own fallback stack is `Roboto, "Helvetica Neue", Arial`. For an implementation outside lamborghini.com use that stack, and for the condensed headline look use a condensed grotesque with uppercase text at the same size and line height. This is a pragmatic suggestion, not something the site specifies.

## Layout

- **Page width:** the extraction viewport is 1280px; the root variables define breakpoints `--breakpoint-xs 0`, `sm 576px`, `md 768px`, `lg 992px`, `xl 1200px`, `xxl 1440px` (Bootstrap-style names).
- **Spacing scale:** the root variables expose a rem scale, `--scale-spacing-0` 0.25rem (4px) through `--scale-spacing-11` 5.5rem (88px), plus `--scale-spacing-grid` 3.75rem (60px). The tokens `{spacing.s1}` to `{spacing.s10}` are the subset measured on the page (4, 8, 12, 16, 24, 32, 40, 48, 56, 64px).
- **Most used gaps:** 24px (57 occurrences), then 8px, 16px and 48px. **Most used paddings:** 24px, 8px, 12px, 16px, 4px.
- **Left-aligned hero:** in the capture the eyebrow, headline and button align to one left margin; the white `DISCOVER MORE` button sits at the right edge of the same row, on the baseline of the headline block.
- **Centred carousel:** the models band centres the model logo lettering, the tagline, the car image, the tab row and the three actions on one axis; the previous / next hexagon controls sit at the far left and far right.
- **Section rhythm:** hero (full viewport photograph), white models band, dealer locator photographic band with its own headline and a white button, then the dark footer. Each band is a full-width rectangle.
- **Page length:** about 4217px tall at desktop width.

## Elevation & Depth

There is no measured elevation. The border-radius and box-shadow frequency lists on the desktop extraction are empty, and every role records `boxShadow: null`. Depth in the capture comes from:

1. **Photography** — the hero and dealer locator bands are full-bleed images, darkened toward the bottom with the vertical gradients above.
2. **Tonal change** — white to `{colors.surface-dark}` to `{colors.ink}` between bands.
3. **The car cut-out** — the model image in the carousel carries its own soft ground shadow inside the picture; that is photography, not a CSS shadow.
4. **Borders on dark** — a `1px solid #ffffff` border (the only border colour measured) on the `ENQUIRE` outlined button over dark bands.

Hover states change fill and border colour only; no lift or shadow was recorded.

## Shapes

- **Radius:** `{rounded.none}` (0px) on every measured role, including buttons, nav, links and footer.
- **Border radius variables** exist in the CSS (`--border-radius-radius-0` 0px, `-1` 4px, `-2` 8px, `-4` 16px) but none is used by a measured visible element. Treat 0px as the rule.
- **Stroke variables:** `--border-stroke-stroke-0` 0px, `-1` 1px, `-2` 2px, `-3` 4px, `-4` 8px. The measured border is 1px.
- **Hexagon:** the carousel arrows in the capture are outlined hexagons with a thin chevron inside. The configure action also shows a small hexagonal icon in the capture. This is the only non-rectangular UI shape visible.
- **Underlines as shape:** the `DISCOVER ALL MODELS` link and the `START CONFIGURATION` label in the capture are rules under text, not boxes; the active model tab has a coloured underline and inactive tabs have a thin grey one.

## Components

### Buttons
- **`button-primary`** — fill `{colors.primary}`, label `{colors.on-primary}`, `{typography.body}`, 72px high, 24px padding, no radius. Instance: `EXPLORE THE MODEL`, with a right arrow in the capture.
- **`button-secondary`** — fill `{colors.canvas}`, label `{colors.ink}`, same size. Instances: `DISCOVER MORE` (over the hero photograph) and `FIND YOUR DEALER` (over the dealer photograph). Hover fill `{colors.canvas-hover}` (`button-secondary-hover`).
- **`button-outlined-on-dark`** — transparent fill, `{colors.canvas}` label, 1px white border. Instance: `ENQUIRE` (a `button` element) as measured on the dark variant. In the capture's white band the same action appears with dark text and an envelope icon and no box, so the outlined form is specific to dark bands.
- **Accent anchor** — `START CONFIGURATION`, measured fill `{colors.accent-yellow}`, text `{colors.ink}`, 72px high, 24px padding, 253px wide. See Colors for the visibility caveat.
- **`MENU`** — a button with a white label and white border on transparent; on hover the text becomes `{colors.canvas-hover}`, the fill `{colors.surface-dark}` and the border `{colors.canvas-hover}`. Height 44px.

### Links
- **`link`** — `{colors.ink}`, `{typography.body}`, padding `24px 0px`, with an underline rule and a trailing arrow in the capture (`DISCOVER ALL MODELS`). Hover: fill `{colors.ink-secondary}`, text and border `{colors.ink-muted}`.

### Navigation
- **`nav`** — a `header` 104px tall at desktop and 80px at 390px width, with a top-to-transparent gradient from `{colors.surface-dark}`. At 390px the capture shows a hamburger icon on the left, the bull emblem centred and a search icon on the right.
- **`nav-link`** — `{colors.canvas}` on the dark header, `{typography.body}`, 8px padding.
- **Menu items** (from the homepage text): Models, Ownership, Dealerships, Beyond, Company, Motorsport, Museum, Store; secondary list: Design, History, Financial services, Warranty extension, Driving Programs, Lounge, Club.

### Model carousel
In the capture the carousel stacks: model name lettering, the tagline in a condensed grey uppercase, the car image, then three text tabs (`REVUELTO SV`, `REVUELTO MIURA 60° HOMAGE`, `REVUELTO`), then `EXPLORE THE MODEL`, `START CONFIGURATION` and `ENQUIRE`. A partial next slide (a yellow car) peeks at the right edge to signal swiping. The component is built with the Swiper library (`--swiper-theme-color` and `--swiper-navigation-size: 44px` appear in the CSS).

### Dealer locator band
A photograph (the capture shows an orange car beside a showroom interior) with the headline `DEALER LOCATOR` in large white uppercase over the image, and a white `FIND YOUR DEALER` button below it.

### Footer
- **`footer`** — fill `{colors.ink}`, text `{colors.ink-secondary}`, about 962px tall at desktop. Links in uppercase: Company, Cookie settings, Financials, Media Center, Sitemap, Careers, Recall Campaign, Privacy & Legal, Newsletter, Contact us, Accessibility. Social platforms listed: Instagram, Threads, Facebook, YouTube, Twitter, TikTok, LinkedIn, Weibo, Youku, WeChat, Discord. Legal notices follow, including an emissions-values notice and a warning about illegal offers of shares.

### Inputs and cards
No input and no card were detected on the homepage (`input: null`, `cards: []`), so this file defines none.

## Imagery & Voice

- **Hero:** a dark, motion-blurred shot of the Revuelto SV on a track in the capture, with the eyebrow `THE QUANTUM OF DRIVING` above the model name and a single white button.
- **Model images:** side-on studio cut-outs on a white ground, one car per slide, with a faint ground shadow in the image itself.
- **Dealer band:** an orange Urus-style car shown from behind next to a showroom interior (fabric swatches on a wall, white sofas). The model name printed on the car in the image is not legible enough in the capture to state.
- **Slide captions in the page text:** `The quantum of driving` (Revuelto SV), `Urus at its peak` (Urus SE Performante) and `You can't hide who you are` (Urus SE). They are short declarative phrases, sentence-case in the source and rendered uppercase in headings.
- **Calls to action** are verbs plus the object: `Explore the model`, `Start configuration`, `Enquire`, `Discover more`, `Discover all models`, `Find your dealer`. No exclamation marks, no emoji, no second-person chatter in the copy that was read.
- **Legal copy** (consumption and emissions values, a legal guarantee notice, an EU label reference) is printed in plain body type directly under the carousel rather than hidden in a modal.
- **Models listed on the homepage:** Revuelto SV, Urus SE Performante, Temerario, Revuelto, Urus SE. Each carries the same two actions, `Start configuration` and `Enquire`, so the page repeats one pattern per model instead of varying it.
- **Density:** low. The capture shows large empty areas around the carousel; each screen holds one headline, one image and one action row.
- **Contrast:** white type over darkened photography in the hero and dealer bands; black type on white in the carousel band. No grey-on-grey body text was seen at body size.
- **Iconography:** thin-stroke line icons (hamburger, search, arrows, envelope, a small hexagonal configure icon) in the colour of the adjacent text.
- **Emblem:** the bull emblem is centred in the mobile header in the capture; its exact colours were not measured.
- **Accessibility affordances in the page text:** a `Skip to main content` link, a `Text size` control and an `Allow animations` toggle appear in the header text, so motion and size are user-controllable.
- **Tone:** the page does not use marketing superlatives in the headings that were read; it names the model and states a short line.

## Design System Architecture

**No public Lamborghini design system, token package or brand-guidelines site was found.** Searches turned up secondary articles and aggregator pages, and the official news page rendered no article text, so none of that is used here. What can be stated comes from the site's shipped CSS and DOM:

- **Variable naming:** the root variables mix two layers. One is a Bootstrap 4 palette and breakpoints (`--blue`, `--indigo`, `--gray-dark`, `--breakpoint-xl`, `--font-family-sans-serif`). The other is a design-tool token export with numbered scales: `--font-size-0` to `--font-size-18` (0.625rem to 8.5rem), `--line-heights-0` to `--line-heights-17`, `--scale-spacing-*`, `--border-radius-radius-*`, `--border-stroke-stroke-*`, `--letter-spacing-*`, `--opacity-alpha-*`, `--text-case-*`, `--paragraph-*`. The second layer looks like an export from a design token tool; the tool itself is not named anywhere that was opened.
- **Type scale:** the numbered font sizes include 1rem (`-2`), 1.125rem (`-3`), 1.5rem (`-4`), 1.6875rem (`-5`, the 27px heading), 1.75rem, 2.125rem, 2.25rem, 2.5rem, 3rem, 3.125rem, 3.375rem, 3.75rem, 4.375rem, 5rem, 5.625rem, 7.5rem (`-17`, 120px, the display) and 8.5rem (`-18`). The matching line-height variables include 4.375rem (70px) and 6.875rem (110px), the mobile and desktop display line heights.
- **Opacity scale:** 0 to 1 in steps of 0.1.
- **Frameworks:** Bootstrap-style grid variables and the Swiper carousel library show in the CSS. The site loads `Open Sans 700` as well as LamboType; its use was not found.
- **Colour tokens are not exported as brand names.** Only the Bootstrap palette and the gradient variables appear as named colours; the gold and the near-black are referenced as literals in rules.
- **Implication:** to reuse this system, take the type scale and spacing scale from the variables, hold radius at 0, and use literal hex values from the Colors section.

## Do's and Don'ts

### Do
- Keep every box square: `{rounded.none}` on buttons, nav and footer.
- Set headlines in uppercase at the display and heading sizes with the tight line heights (110px on 120px, 37px on 27px).
- Use one weight (400) and let width, size and case do the hierarchy work.
- Make buttons 72px tall with 24px padding, and give them a white or dark fill with a clear label, plus a trailing arrow where the capture shows one.
- Let photography run full bleed and fade to `{colors.surface-dark}` or `{colors.ink}` with a vertical gradient.
- Reserve the filled gold `{colors.primary}` button for the single most important model action.
- Keep legal and consumption copy visible under the carousel in `{typography.body}`.

### Don't
- Don't round corners, add drop shadows or use pill shapes; none were measured.
- Don't use the Bootstrap palette from the stylesheet (blue, teal, purple) as brand colour.
- Don't add bold weights or letter-spacing to headlines; every measured weight is 400 and spacing is normal.
- Don't put the white button on a white band; the white fills sit on photography and the carousel uses text links and the gold fill.
- Don't stack more than one filled button in a group; the capture shows one filled button flanked by text actions.
- Don't assert that the yellow `#ffc000` appears as a visible fill on the homepage; it was measured on an anchor but not located in the capture.

## Responsive Behavior

- **Display scales down:** the h1 goes from 120px / 110px (`{typography.display}`) to 80px / 70px (`{typography.display-mobile}`) at the 390px mobile extraction. The h2 drops from 27px to 18px (line height 28px) at that width.
- **Body stays 16px** with a 26px line height at both widths.
- **Buttons:** the mobile extraction records `START CONFIGURATION` at 16px type, 16px padding and 56px height, full-width (342px in a 390px viewport), against 72px height and 24px padding on desktop. So buttons shrink in height and padding, and can stretch to the column width.
- **Mobile text colour:** the h1 and h2 are `#ffffff` over the hero photograph; body is `{colors.ink-secondary}`.
- **Breakpoints** come from the CSS variables: 576px, 768px, 992px, 1200px and 1440px. Which of them the layout actually changes at was not tested; only the 1280px and 390px widths were measured.

## Iteration Guide

1. Start from the white canvas and the dark band pair: `{colors.canvas}` and `{colors.surface-dark}` / `{colors.ink}`.
2. Set all type in the LamboType stack at weight 400. Use `{typography.display}` for one hero headline per page, `{typography.heading}` for secondary lines, `{typography.body}` for everything else.
3. Build buttons first: 72px height, 24px padding, 0px radius. Pick one filled button (gold) and make the rest white-filled or text links.
4. Add hover states by swapping the fill to `{colors.canvas-hover}` for white buttons and to `{colors.ink-secondary}` with `{colors.ink-muted}` text for text links.
5. Introduce photography as full-bleed bands, then fade the edges with a 180deg gradient to the band colour.
6. Draw carousel controls as outlined hexagons and underline the active tab.
7. When a value is not in the Colors section, measure it from the live page before using it; do not borrow from the Bootstrap defaults in the stylesheet.
8. Validate: `node web/scripts/verify-designs.mjs --slug=lamborghini`.

### Open questions
- Which LamboType cut (normal, condensed, ultra-condensed) each heading uses was not measured.
- Where the `#ffc000` yellow fill appears visibly on the site was not confirmed.
- The tab underline colours and inactive-tab text colours were seen in the capture but not individually measured.
