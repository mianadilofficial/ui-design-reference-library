---
version: alpha
name: Stitches
category: "CSS-in-JS"
description: "Marketing site of Stitches, the CSS-in-JS library, now marked as no longer maintained. White canvas (#ffffff), near-black ink (#11181c), a pale lavender pill button (#ede9fe with #5746af text), tight negative tracking on a 59px Untitled Sans headline, dark code panels (#1a1523) and 8px radii."
colors:
  canvas: "#ffffff"
  ink: "#11181c"
  primary: "#ede9fe"
  on-primary: "#5746af"
  primary-hover: "#e4defc"
  ink-muted: "#687076"
  nav-text: "#000000"
  surface-code: "#1a1523"
  code-text: "#e8e8e8"
  syntax-blue: "#006adc"
  syntax-teal: "#84cdda"
  syntax-yellow: "#efd36c"
typography:
  display:
    fontFamily: "\"Untitled Sans\", -apple-system, system-ui, sans-serif"
    fontSize: 59px
    fontWeight: 500
    lineHeight: 55px
    letterSpacing: "-3.245px"
  display-mobile:
    fontFamily: "\"Untitled Sans\", -apple-system, system-ui, sans-serif"
    fontSize: 35px
    fontWeight: 500
    lineHeight: 35px
    letterSpacing: "-1.19px"
  body:
    fontFamily: "\"Untitled Sans\", -apple-system, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 25px
  button:
    fontFamily: "\"Untitled Sans\", -apple-system, system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 500
    lineHeight: 15px
  nav:
    fontFamily: "\"Untitled Sans\", -apple-system, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
  link:
    fontFamily: "\"Untitled Sans\", -apple-system, system-ui, sans-serif"
    fontSize: 13px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 8px
  md: 12px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 10px
  s4: 15px
  s5: 20px
  s6: 25px
  s7: 35px
  s8: 45px
  s9: 65px
  s10: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 15px
    height: 35px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.nav-text}"
    padding: 20px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  code-panel:
    backgroundColor: "{colors.surface-code}"
    textColor: "{colors.code-text}"
    rounded: "{rounded.sm}"
    padding: 15px
  footer:
    textColor: "{colors.nav-text}"
    padding: 80px 0px
---

## Overview

Stitches is a CSS-in-JS library, and its homepage at stitches.dev is a single long page that explains the library the way a library would want to be read: a headline, a one-line promise, an install command, four short feature columns, a row of numbers, and then alternating text and code sections. The page opens with a small notice pill reading "Stitches is no longer maintained" with a "Read more" link; the site itself, which I opened, says the project is no longer maintained and points to a GitHub discussion. That discussion states the repository was archived by its owner, so the design described here is the look of a finished, frozen product rather than a live one.

The mood is calm and technical. The canvas is white (#ffffff) with a very faint blue-teal and lilac wash in the top-left and top-right of the hero, visible in the capture as soft blurred glows rather than a hard gradient. Text is a cool near-black (#11181c) with grey (#687076) for secondary copy. The single accent is a pale violet: the "Documentation" button is a lavender pill (#ede9fe) with deep violet text (#5746af). Everything else that carries colour is code, shown in dark panels with syntax highlighting.

The tone of the microcopy is plain and confident: "Style your components with confidence", "Stats at a glance", "Design composable component APIs with variants", "Dark mode is effortless with built-in theming." Sentences are short, the feature columns use a bold three-word label followed by one grey paragraph, and technical terms such as variants, compound variants and `css` prop are set in monospace chips inside the prose.

## Colors

The palette is deliberately narrow: two neutrals, one tinted accent, and a small syntax-highlight set that only appears inside code panels. All values below were measured from the live page, not taken from documentation.

- **Canvas (#ffffff)** is the page background and covers most of the capture.
- **Ink (#11181c)** is the most-read text color: headlines, feature labels, navigation links and body copy where it needs to be strong.
- **Ink muted (#687076)** is used for paragraph text under feature labels, stat captions and list descriptions. It is the second most-read color on the page.
- **Primary (#ede9fe)** is the button fill. It is a tint, not a saturated brand color, which keeps the button quiet next to the large headline. **On-primary (#5746af)** is the text on that button and also the color of inline links such as "Read more". **Primary hover (#e4defc)** is the measured fill after hovering the button.
- **Nav text (#000000)** is the computed color of the header and footer containers, although the links themselves use ink.
- **Surface code (#1a1523)** is the dark panel behind code samples. A second, slightly different near-black (#11181c, the same as ink) is also used for a code panel further down the page. **Code text (#e8e8e8)** is the default text on those panels, with **syntax blue (#006adc)**, **syntax teal (#84cdda)** and **syntax yellow (#efd36c)** as the highlight colors seen in the sample code.

Hover on plain navigation links does not change color; the measurement shows the text decoration changing to underline instead. On the secondary "GitHub" pill, hover adds a light grey fill (#e6e8eb).

## Typography

Every piece of prose is set in a family loaded as "Untitled Sans" in two weights, 400 and 500, with a system fallback stack (-apple-system, system-ui, sans-serif). Code is set in "Söhne Mono"; the Stitches token documentation I read lists a mono font token with the stack Söhne Mono, menlo, monospace.

- **Display** is 59px, weight 500, line-height 55px and letter-spacing -3.245px. The line-height is tighter than the size, so the two-line headline sits as a dense block. On a 390px viewport the same role drops to **display-mobile**, 35px/35px with -1.19px tracking.
- **Body** is 15px at weight 400 with a generous 25px line-height; this is the dominant text size on the page by character count.
- **Button** is 15px, weight 500, with a 15px line-height, so the label is optically centered in a fixed-height pill.
- **Nav** is 16px regular; **link** is 13px regular, used for the "Read more" link inside the notice pill.
- Intermediate headings (the "Stats at a glance" heading is 35px with -1.19px tracking) use the same family at weight 500, with negative tracking that scales with size: the page also shows 21px with -0.336px and 19px with -0.285px.

Weight is used sparingly: 400 for reading, 500 for anything that should feel like a label. There is no bold above 500 and no italics in the capture.

## Layout

The page is a single column with a header of about 75px containing a logo mark on the left and Docs, Blog, GitHub and Discord links plus a theme toggle on the right. The hero is centered: notice pill, headline, a two-line grey subtitle, two pills ("Documentation" with an arrow and "GitHub" with an external-link icon), and a pill-shaped install command box containing `npm install @stitches/react` and a copy icon.

Below it, four feature columns (Performant, Feature-rich, Best-in-class DX, Framework-agnostic) each pair a small lavender circle icon with a bold label and a grey paragraph. Thin short horizontal rules separate sections. "Stats at a glance" is a four-column row of caption plus large number. The feature sections after that use a two-column split: text and a tabbed list on the left, a tall dark code panel on the right.

Spacing follows the library's own scale: the root variables on the page expose space steps of 5px, 10px, 15px, 20px, 25px, 35px, 45px and 65px, and the measured gaps in the layout are 5px, 10px, 15px, 20px, 45px, 65px and 80px. The footer uses 80px vertical padding. Whitespace is large relative to the type: sections are separated by roughly the 80px step, which gives the page its airy documentation-site feel.

## Elevation & Depth

Depth is minimal and mostly structural. Most surfaces are flat. Three box shadows were measured on the page: a 1px ring in a translucent blue-violet (rgba(46, 2, 244, 0.086)), a 1px inset hairline (rgba(0, 0, 0, 0.08)), and a soft two-layer lift (rgba(14, 18, 22, 0.35) 0 5px 25px -5px plus rgba(14, 18, 22, 0.2) 0 5px 15px -10px). The lift is visible on the selected "Variants" row in the capture, which appears as a white card hovering slightly above the list.

The hero background glow is the only decorative depth: blurred pale cyan and lilac areas fade into the white canvas. The dark code panels create contrast by luminance rather than by shadow. Do not add heavy drop shadows; the existing look relies on hairlines and one soft lift.

## Shapes

Radii come in four steps measured on the page: 4px (xs, used by small chips such as inline code), 8px (sm, the most frequent: code panels, cards, list rows), 12px (md, rare) and a full pill (9999px) for buttons and the install command box. A 50% radius is also measured, used for the circular icon backgrounds in the feature columns.

Buttons are always pills; containers are always gently rounded rectangles. There are no sharp 0px corners on interactive surfaces and no radii between 12px and the pill. Icons sit inside circles filled with the same lavender family as the primary button, so the accent color is repeated as a shape language, not only as a button fill.

## Components

**Primary button.** A 35px-tall pill, fill #ede9fe, text #5746af, 15px weight 500, padding 0 15px, trailing arrow icon. Hover darkens the fill to #e4defc without changing text color. The "GitHub" button next to it is a ghost pill: transparent with grey text, gaining a light grey fill on hover.

**Notice pill.** A small pill above the headline with the maintenance notice and a "Read more" link in on-primary violet at 13px.

**Install box.** A pill with a monospace command and a copy icon; light fill.

**Navigation.** Text links at 16px in ink with no background, underlined on hover; a theme toggle icon at the far right.

**Feature column.** Circle icon in lavender, 500-weight label, 15px muted paragraph with inline monospace chips.

**Code panel.** Dark (#1a1523) rounded rectangle (8px), 15px padding in the token set, text #e8e8e8 and highlight colors blue, teal and yellow. The page also uses a #11181c panel for a second sample.

**Footer.** Text on a white background with 80px vertical padding and the line "Stitches is a project by WorkOS."

## Design System Architecture

Stitches is itself a design-system tool, and its documentation describes the system the site is built with. The token page (https://stitches.dev/docs/tokens) lists 14 token scales: colors, space, fontSizes, fonts, fontWeights, lineHeights, letterSpacings, sizes, borderWidths, borderStyles, radii, shadows, zIndices and transitions, and says each is automatically mapped to relevant CSS properties (colors to color and background, space to margin, padding and gap, radii to border-radius, and so on). Its sample theme defines space steps 1 (5px), 2 (10px) and 3 (15px) and font sizes 1 (12px), 2 (13px) and 3 (15px).

The theming page (https://stitches.dev/docs/theming) explains that tokens become CSS custom properties named after the scale and key, for example `--colors-primary`, and that `createTheme` generates a class that overrides them, which is how dark mode is done. The variants page (https://stitches.dev/docs/variants) documents variants, compound variants, default variants and responsive variants as the way to express component APIs.

The shipped site follows this: its root variables include `--space-*`, `--sizes-*`, `--fontSizes-*`, `--radii-*`, `--zIndices-*` and `--fonts-mono`, plus a large set of `--colors-{scale}{step}` variables with names such as violet1 through violet12, mauve, slate and alpha variants. The 12-step structure matches the step roles documented by Radix Colors (https://www.radix-ui.com/colors/docs/palette-composition/understanding-the-scale: steps 1-2 backgrounds, 3-5 component backgrounds, 6-8 borders, 9-10 solid fills, 11-12 text), but I did not verify that the site imports that package. The project status is documented at https://github.com/stitchesjs/stitches/discussions/1149.

## Do's and Don'ts

Do keep the canvas white and let a single pale-violet pill be the only filled action; the quiet button is the identity.
Do use tight negative tracking on large headings and keep the line-height at or below the font size for the display style.
Do show code in dark rounded panels with the three measured highlight colors, and set inline code in the monospace family.
Do use the pill shape for buttons and the 8px radius for containers.
Do separate sections with generous space and thin short rules rather than boxes.

Don't add a saturated brand color to buttons; the accent is a tint with dark violet text.
Don't use weights above 500 or introduce a second sans family.
Don't add heavy shadows; keep to hairline rings and the one soft lift.
Don't set muted text darker than the grey (#687076) or lighter than it, or paragraph hierarchy under the labels will collapse.
Don't present the product as maintained: the real site carries a notice saying it is not.

## Responsive Behavior

The extraction measured the page at 1280px wide and again at 390px. At the narrow width the display headline falls from 59px to 35px with proportionally looser tracking (-1.19px instead of -3.245px), and the line-height equals the size. I measured only the headline roles at mobile width, so how the four-column feature row and the stats row reflow, and the breakpoints, are not recorded here.

The button height measured on desktop is 35px. Keep the header links short (Docs, Blog, GitHub, Discord) and the install box a single line.

## Iteration Guide

1. Start from the tokens: canvas, ink, ink-muted, primary and on-primary cover nearly every non-code surface.
2. Build the hero first: notice pill, 59px display headline with its negative tracking, a 15px grey subtitle, then the lavender pill and a ghost pill.
3. Add the feature row with circle icons in the lavender family and 500-weight labels.
4. Add code panels last, using surface-code with code-text and the three syntax colors; check contrast on each.
5. Verify radii: 4px chips, 8px containers, 12px rarely, pill for buttons.
6. When extending, add colors only from the measured palette or the Radix-style step variables the site exposes, and keep text on lavender at #5746af.
