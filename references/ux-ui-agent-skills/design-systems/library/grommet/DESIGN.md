---
version: alpha
name: Grommet
category: "Frontend Frameworks"
description: "Grommet is a React component library whose own site uses the system UI font stack at 18px, #444444 ink on white and #ededed bands, a #7d4cdb brand-purple primary on 18px-radius pill buttons, accents #6fffb0 and #81fced, 600-weight lowercase headlines up to 82px, and a base theme defined by a 24px spacing unit."
colors:
  canvas: "#ffffff"
  ink: "#444444"
  ink-strong: "#000000"
  ink-weak: "#777777"
  primary: "#7d4cdb"
  on-primary: "#f8f8f8"
  hover-fill: "#dddddd66"
  surface-page: "#fffffe"
  surface-back: "#ededed"
  surface-tint: "#7d4cdb1a"
  accent-1: "#6fffb0"
  accent-3: "#81fced"
  neutral-2: "#3d138d"
  border-control: "#00000054"
  light-border: "#eeeeee"
  syntax-string: "#a31515"
  syntax-teal: "#008080"
typography:
  display:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 82px
    fontWeight: 600
    lineHeight: 88px
  display-mobile:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 50px
    fontWeight: 600
    lineHeight: 56px
  subheading:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 42px
    fontWeight: 600
    lineHeight: 48px
  body:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 34px
    fontWeight: 400
    lineHeight: 40px
  text-base:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 24px
  button-secondary:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: >-
      -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 18px
    fontWeight: 600
rounded:
  control: 4px
  xs: 8px
  sm: 12px
  md: 18px
  lg: 24px
  xl: 96px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 12px
  s4: 22px
  s5: 24px
  s6: 36px
  s7: 48px
  s8: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 4px 22px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.hover-fill}"
    textColor: "{colors.ink-strong}"
  button-secondary:
    backgroundColor: "{colors.accent-1}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 4px 22px
    height: 36px
    borderColor: "{colors.accent-1}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.control}"
    padding: 11px
    height: 45px
    borderColor: "{colors.border-control}"
  card:
    backgroundColor: "{colors.accent-3}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 24px
---

## Overview

Grommet (https://v2.grommet.io, source https://github.com/grommet/grommet) is described on its homepage as "part design system, part framework, and all awesome": "a react-based framework that provides accessibility, modularity, responsiveness, and theming in a tidy package". It is maintained by Hewlett Packard Enterprise (its source files carry the HPE copyright). The site is built with Grommet itself, so the homepage doubles as the library's showcase.

The captured page (1280px desktop; 7965px tall) is a calm, friendly, lowercase layout. The top bar has a purple ring logo and the lowercase word "grommet" at left; at right two pill buttons, an outlined "docs" and a filled purple "components", and a search icon. A white card with a soft shadow holds an animated purple block (the hero demo). Below it the headline "streamline the way you develop apps" in 82px weight 600, a centered subhead "build responsive and accessible mobile-first projects for the web with an easy to use component library" and three purple icon-links ("Follow us on Twitter", "Share feedback on GitHub", "Chat with us on Slack").

A full-bleed #ededed band follows: "part design system, part framework, and all awesome", then paired feature blocks showing real Grommet components: a Menu drop with Edit / Connect (busy) / Delete, a Venn of three translucent circles (green, purple, yellow) labelled "Aa" for "accessible is being inclusive", a stack of buttons ("Log in" with a purple focus box, "GET STARTED" outlined, "click me" in a mint rounded outline) and an overlapping grid of green, teal, purple and ochre boxes. Each is captioned with a 42px lowercase title and a short centered paragraph; "react" and "WCAG 2.1 spec" are purple inline links.

Key characteristics:
- Lowercase, friendly copy; short phrases and playful verbs ("mix, match, and make stuff").
- One brand purple (#7d4cdb) plus a bright mint accent (#6fffb0) taken from the library's own palette.
- Very large type with generous line height: headings at 82px, 50px, 42px; body copy at 34px on the homepage; 18px in the docs.
- Pill-shaped buttons at 18px radius, outlined or filled with a 2px border.
- The system font stack, so the page renders in the visitor's platform UI font.
- Everything is made of Grommet components: the page is a live example of the theme.

## Colors

### Brand and accents (official)
From the base theme (https://raw.githubusercontent.com/grommet/grommet/master/src/js/themes/base.js) and the documentation color page (https://v2.grommet.io/color):
- **Brand** `{colors.primary}` = #7d4cdb: primary actions, links, selection, controls (light mode). Measured as the fill and 2px border of the "components" pill.
- **Accent 1** `{colors.accent-1}` = #6fffb0 (also the focus color and the fill of the secondary button).
- Accent 2 #fd6fff, **Accent 3** `{colors.accent-3}` = #81fced, Accent 4 #ffca58.
- Neutrals: neutral-1 #00873d, **neutral-2** `{colors.neutral-2}` = #3d138d (the deep violet of the hero block; measured), neutral-3 #00739d, neutral-4 #a2423d.
- Status: critical #eb0000, error #b30000, warning #c27b00, ok #009e67, unknown #919191, disabled #cccccc.

### Text and surfaces (light mode)
- **Ink** `{colors.ink}` = #444444 (theme "text" light): most-read text color on the page (2029 characters on the homepage; 18716 on the button docs).
- **Ink strong** `{colors.ink-strong}` = #000000 ("text-strong"); **ink weak** `{colors.ink-weak}` = #777777 as measured on docs captions (the theme's text-weak is #555555 and text-xweak is #666666).
- **On primary** `{colors.on-primary}` = #f8f8f8 (the theme's dark-mode text color and light-1), used on purple.
- **Canvas** `{colors.canvas}` = #ffffff (background-front light) and **surface page** `{colors.surface-page}` = #fffffe, the near-white fill of the app root.
- **Surface back** `{colors.surface-back}` = #ededed ("background-back" light): the gray sections.
- **Surface tint** `{colors.surface-tint}` = #7d4cdb1a: a purple wash at 10 percent used for highlights.
- **Border control** `{colors.border-control}` = #00000054, black at 33 percent ("border" light), the 1px border of inputs; **light border** #eeeeee for rules.
- **Hover fill** `{colors.hover-fill}` = #dddddd66: the theme's "active" gray at 40 percent opacity, the measured hover background of pill buttons.
- Light tones: light-1 #f8f8f8, light-2 #f2f2f2, light-3 #ededed, light-4 to 6 #dadada. Dark tones: dark-1 #333333, dark-2 #555555, dark-3 #777777, dark-4 to 6 #999999.

### Code colors
Syntax highlighting in the docs uses #a31515 (strings) and #008080; these are code theme colors, not UI tokens (`{colors.syntax-string}`, `{colors.syntax-teal}`).

### Rules observed
- Use named theme colors (brand, text, accent-1) in code, not hex; the docs state intent over appearance.
- Purple is both action and link; mint is a focus and secondary-action color.
- Dark mode flips text to #f8f8f8, backgrounds to #444444 (background-front) and control to accent-1.

## Typography

### Family
The base theme does not set a font family, so Grommet inherits the platform stack, measured here as: -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", Arial, sans-serif, and emoji faces. Code uses Menlo (202 characters measured) and Courier.

### Substitutes
None needed; any system UI font renders the design. For consistency pick Inter or Roboto.

### Scale
The base theme computes font sizes from a 24px spacing unit: base font size 18px (0.75 x 24), step of 4px per size, line height 24px + 4px per step (https://raw.githubusercontent.com/grommet/grommet/master/src/js/themes/base.js, function generate). Resulting sizes seen on the site: 14, 18, 22, 26, 34, 42, 50 (also 54, 70, 90 documented in avatar text sizes) and 82px for the hero.

| Token | Size / line | Weight | Use |
|---|---|---|---|
| `display` | 82px / 88px | 600 | h1 |
| `display-mobile` | 50px / 56px | 600 | h1 at 390px, and the h2 on desktop |
| `subheading` | 42px / 48px | 600 | feature titles |
| `body` | 34px / 40px | 400 | homepage lead paragraphs |
| `text-base` | 18px / 24px | 400 | default text in docs and components |
| `button` | 18px / 24px | 700 | primary button label |
| `button-secondary` | 18px / 24px | 400 | secondary button label |
| `input` | 18px / 24px | 600 | text input value |

Anchor weight is 600 with no underline (underline on hover); input font weight is 600 (theme). Headings are lowercase in content, weight 600.

### Principles
- Sizes come from one formula (base 18px plus 4px steps) so every size is derivable from the spacing unit.
- Headings are semibold and lowercase; body is regular.
- Line height is baseSpacing plus 4px per size step (24, 28, 32, 40, 48, 56).

## Layout

- Spacing unit 24px (baseSpacing in the theme). Edge sizes: none 0, hair 1px, xxsmall 3px, xsmall 6px, small 12px, medium 24px, large 48px, xlarge 96px.
- Measured spacing on the site: 4, 6, 12, 22, 24, 36, 48, 96px.
- Breakpoints from the theme: small up to 768px (32 x 24), medium to 1536px (64 x 24), then large.
- The homepage is a single centered column, with full-bleed gray bands that alternate with white.
- Feature blocks are two-up and centered, with centered captions.
- The hero card is centered, white, with a 24px radius and a soft shadow, and holds the animated purple block.
- Docs pages put a 82px page title above content measured at an 18px base.
- Maximum text width is about 50 characters (the theme sets maxWidth to roughly 50 characters per size).

## Elevation & Depth

Official elevation scale (light mode): xsmall `0 1px 2px rgba(0,0,0,0.20)`, small `0 2px 4px`, medium `0 4px 8px`, large `0 8px 16px`, xlarge `0 12px 24px`, all at 20 percent black. Dark mode uses white at 40 percent with larger offsets.

Measured on the homepage: `rgba(0,0,0,0.2) 0 2px 4px` and `0 4px 8px` (the hero card and the menu drop), and `rgb(211,211,211) 1px 0 0 0 inset` (24 uses) for the divider along tab and table edges. Cards use "small" elevation by default in the theme.

Focus: a 2px shadow and border in the focus color (#6fffb0). The measured "Log in" example shows a purple box focus ring around a button.

Overlays (drops, layers) use white backgrounds in light mode with a 0px radius for drops by default and elevation small.

## Shapes

- Buttons: radius 18px (0.75 x 24) for small and medium sizes and 24px for large, per the theme; the measured nav pills and label button are 18px.
- Controls (inputs, selects): 4px radius with a 1px border (`{rounded.control}`).
- Cards: "round: small", measured 24px on the hero card and its top or bottom corners (24px 24px 0 0 and 0 0 24px 24px on stacked sections).
- Other measured radii: 12px (3 elements), 8px (1), 96px (2) and 100% (8 uses, circles such as the logo ring); their exact roles were not isolated.
- Border width: buttons 2px, controls 1px.

## Components

### Primary button
- Fill `{colors.primary}`, label `{colors.on-primary}`, 18px bold, 2px border in the same purple, radius 18px, padding 4px 22px, height 36px. Examples: "components", "label".
- Hover: background becomes #dddddd at 40 percent (`{colors.hover-fill}`) with black text.
- Sizes: small padding 4px 20px; medium 4px 22px; large padding 8px 32px with 24px radius.

### Interaction states (measured hover pairs, Button docs page)
- Nav pill "components" (primary): label #f8f8f8 to #000000, background #7d4cdb to rgba(221,221,221,0.4), border stays #7d4cdb, and a 2px ring `0 0 0 2px #7d4cdb` appears.
- Demo "label" button (primary): colors stay, and the same 2px purple ring appears.
- Outlined "docs" pill: label #444444 to #000000, background transparent to rgba(221,221,221,0.4), border stays #7d4cdb, 2px purple ring appears.
- Text-only pills ("grommet", "Storybook", "CodeSandbox"): purple text on transparent, no change on hover.
- Hover is therefore a gray wash plus a ring, not a darker purple.
- Focus uses the focus color #6fffb0 at 2px per the theme.

### Secondary button
- Fill `{colors.accent-1}` (#6fffb0), `{colors.ink}` label, 18px regular, same 36px height and 18px radius (the "hello world" example).
- A default button is outlined: 2px border in the brand color, transparent fill, brand-colored label ("docs").

### Link
- Brand purple, weight 600, 18px, no underline; underline on hover. Icon links ("Follow us on Twitter") put a purple icon at 24px before the text.

### Text input
- 18px/600 text in #444444, white fill, 1px border `{colors.border-control}`, 4px radius, padding 11px, height 45px.

### Card
- Rounded 24px, small elevation, 24px padding; the measured card on the home page is filled with accent-3 mint (#81fced).

### Menu drop
- White surface, small shadow, rows with an icon and 14px label ("Edit", "Connect" with a red "busy" status, "Delete"); hover uses the active gray.

### Header
- The header "docs" pill and "components" pill form a pair: outline for reference material, fill for the main destination.
- Search is an icon-only control at the right edge of the header.
- Buttons in the demos use lowercase labels ("label", "components"), with uppercase only for the sample "GET STARTED".
- Logo ring (purple, 100% radius) with the lowercase wordmark, pill buttons, search icon.

### Imagery and art direction (from the capture)
- The hero card holds a tall deep-violet block (#3d138d family) inside a white card: an abstract demo of layout and motion rather than a screenshot.
- Feature illustrations are made from real components: a menu drop, a Venn diagram of translucent green, purple and yellow circles with "Aa", button samples, and a grid of overlapping colored boxes in green, teal, violet and ochre.
- All illustrations sit on the #ededed band with no borders; their own soft shadows give separation.
- Social links pair a purple glyph (Twitter, GitHub, Slack) with a purple semibold label in a single centered row.
- The page uses almost no photography; color comes from the theme's accent and neutral palettes.
- The voice is lowercase and conversational, addressing "you" ("streamline the way you develop apps").
- Density is low; each band carries one headline, one paragraph and one illustration pair.

## Design System Architecture

Grommet is itself the design system. Facts from its sources:
- Source: https://github.com/grommet/grommet. The base theme at src/js/themes/base.js defines a `generate(baseSpacing = 24, scale = 6)` function that derives sizes, edge sizes, breakpoints, button sizes and font sizing from one spacing number; colors are declared once as brand #7D4CDB, accent colors, neutral colors, status colors, light and dark ramps, and semantic aliases (text, text-strong, text-weak, background-back, background-front, border, control, focus, selected, active).
- Theme API: pass a theme object to the Grommet component; documentation at https://v2.grommet.io/grommet lists the theme prop and themeMode (dark, light, auto).
- Color docs: https://v2.grommet.io/color publishes the palette in this file.
- HPE's themed edition: grommet-theme-hpe ("the Hewlett Packard Enterprise theme for grommet", from the package README at https://cdn.jsdelivr.net/npm/grommet-theme-hpe@8.1.4/README.md, found in search and not opened in full), part of the HPE Design System.
- Component docs pages (for example https://v2.grommet.io/button and https://v2.grommet.io/textinput) render live components, which were measured for this file.
- Naming: components accept props such as `primary`, `secondary`, `size="small|medium|large"`, `kind`, and color props take theme names.
- The base theme keeps many optional keys commented out (for example button default, primary and secondary blocks), so the defaults documented here are the ones actually active.

## Do's and Don'ts

Do:
- Use theme color names (brand, accent-1, text) instead of hex values.
- Keep primary buttons purple with a 2px same-color border and 18px radius.
- Use #6fffb0 for focus and for a secondary action on white.
- Alternate white and #ededed sections.
- Write headings in lowercase, semibold.
- Give inputs a 1px #00000054 border and a 4px radius.
- Derive sizes from the 24px base spacing and 18px base font.

Don't:
- Don't use hex literals for status; use status-critical, status-ok and similar.
- Don't mix 4px control radii with 18px pill radii in the same input group.
- Don't use pure black body text; the default ink is #444444.
- Don't put mint (#6fffb0) text on white; contrast is too low, use it as a fill with dark text.
- Don't invent type sizes; stay on the 14, 18, 22, 26, 34, 42, 54, 70, 90 ladder (82 is the homepage hero only).
- Don't remove focus rings; accessibility (WCAG 2.1) is a stated goal of the library.

## Responsive Behavior

- Breakpoints are theme-defined: small to 768px, medium to 1536px, large beyond (from `global.breakpoints`).
- Edge sizes can scale by breakpoint; the theme's `responsiveBreakpoint` for edgeSize is "small".
- The h1 drops from 82px to 50px in the mobile extraction (line height 88px to 56px).
- Small-screen layout of two-up feature blocks was not measured.
- Hit areas: buttons are 36px high by default and 24px-plus padded variants exist for large.
- Mobile-first is stated on the homepage ("responsive and accessible mobile-first projects").
- Components adapt via responsive props rather than media queries in user code.

## Iteration Guide

1. Wrap the app in the Grommet component with a theme; set brand #7d4cdb.
2. Use ink #444444 on #ffffff, with #ededed bands for contrast.
3. Make primary buttons purple, 18px bold, 4px 22px padding, 18px radius, 2px border.
4. Use #6fffb0 for the focus ring and for a lighter secondary button.
5. Set headings at weight 600 in lowercase; start from 82, 50, 42px.
6. For forms use 18px/600 inputs, 4px radius and a 1px #00000054 border.
7. Add depth only with the elevation ladder (xsmall to xlarge, 20 percent black).
8. Recheck colors against the theme file before shipping.
