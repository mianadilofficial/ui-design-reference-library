---
version: alpha
name: Vaulk
category: "Architecture & Interiors"
description: 'Vaulk (vaulk.com/en-GB): modular CBRN shelters in UHPC, shown through a dark #0c0c0c ground, Telegraf 500 white type at 48px/57.6px, thin white wireframe drawings, one alert-orange #f4682b accent, light #eceeed form surfaces and nearly square 1.78px corners.'
colors:
  canvas: '#0c0c0c'
  page-body: '#0e0f0f'
  ink: '#ffffff'
  primary: '#f4682b'
  grey-background: '#eceeed'
  ink-secondary: '#585b5d'
  ink-black: '#000000'
  grey-3: '#8b8e8f'
  grey-1: '#c8cdc9'
  hairline: '#414141'
  grey-2: '#bababa'
typography:
  display:
    fontFamily: Telegraf, monospace
    fontSize: 48px
    fontWeight: 500
    lineHeight: 57.6px
  display-mobile:
    fontFamily: Telegraf, monospace
    fontSize: 27.1642px
    fontWeight: 500
    lineHeight: 31.2388px
  heading:
    fontFamily: Telegraf, monospace
    fontSize: 30.2222px
    fontWeight: 500
    lineHeight: 39.2889px
  body:
    fontFamily: Telegraf, monospace
    fontSize: 14.2222px
    fontWeight: 500
    lineHeight: 21.3333px
  input:
    fontFamily: Telegraf, monospace
    fontSize: 12.4444px
    fontWeight: 500
    lineHeight: 18.6667px
rounded:
  xs: 1.78px
  sm: 8.89px
spacing:
  s1: 1px
  s2: 2.67px
  s3: 3.56px
  s4: 5.33px
  s5: 6.4px
  s6: 7.11px
  s7: 8px
  s8: 8.89px
  s9: 11.2px
  s10: 11.56px
components:
  text-input:
    backgroundColor: '{colors.grey-background}'
    textColor: '{colors.ink-black}'
    typography: '{typography.input}'
    padding: 1px 2px 1px 13.3333px
    height: 36px
    borderColor: '{colors.grey-1}'
---

# Vaulk

## Overview
Vaulk (vaulk.com, measured at `https://vaulk.com/en-GB`, page title "CRBN - Ready modular Shelters in UHPC, Made in France I Vaulk") sells modular CBRN (chemical, biological, radiological, nuclear) shelters built in ultra-high-performance concrete. The footer reads "Vaulk© 2026 - A project initiated by Agorespace". The extraction found 1834 visible elements on a 1280px-wide, 12064px-tall page, so this is a long, scroll-driven page.

The capture shows an unusual art direction for a defense-grade product: it opens on a calm, photographic rendering of a garden with a low concrete house behind grasses and trees, under a centered white headline, "Modular CBRN shelters designed and manufactured in France, commissioned within 7 days." The image fades down into near-black earth and roots; the page then continues on a dark ground (#0c0c0c) with a thin white wireframe drawing of a buried shelter, annotated with boxed callouts ("ANTI-BLAST DOOR", "UHPC STRUCTURAL SHELL", "VENTILATION & FILTRATION", "MODULAR SHELTER SYSTEM") and a left-hand progress index ("CORE CONCEPT", "ARMORED PROTECTION", "MODULAR DEPLOYMENT", "SYSTEM CAPABILITIES") whose active item is marked by an orange square. Corner brackets frame the hero. The register is calm, technical and understated: the shelter is hidden in a landscape rather than shown as a bunker. The top bar is a dark floating tab with a slanted right edge holding the VAULK wordmark, "Our shelter", "Shelter products", "About Vaulk" and a light "Contact us" button with an orange dot.

## Colors
The site declares its own variables, read from `:root`: `--c-premium-black` #0e0f0f, `--c-black` #1e1e1e, `--c-white` #fff, `--c-grey-1` #c8cdc9, `--c-grey-2` #bababa, `--c-grey-3` #8b8e8f, `--c-grey-background` #eceeed and `--c-alert-orange` #f4682b.
- `canvas` #0c0c0c: the measured page background; `page-body` #0e0f0f ("premium black") is the body-level dark.
- `ink` #ffffff: text on dark (headline and nav).
- `primary` #f4682b ("alert orange"): the single accent, used for the nav dot, arrow glyphs, the active index square and the focus line; it covers a negligible area but is the color of every call-out signal.
- `surface` #eceeed ("grey-background"): the light section ground (it is the largest measured background area, 7104 weighted) and the form field fill.
- `ink-secondary` #585b5d: the most-read text color on the light sections (3137 weighted characters).
- `ink-black` #000000, `grey-3` #8b8e8f and `grey-1` #c8cdc9: text and border grays; `grey-2` #bababa is a measured background and nav text color (hover on "Shelter products" moves from rgb(186, 186, 186) to rgb(254, 254, 254)).
- `hairline` #414141: the most-used border color on dark, alongside #c8cdc9 on light.

The page alternates between dark and light bands; the capture shows the dark opening and the light sections follow below it.

## Typography
The measured font stack is Telegraf at weight 500 for nearly everything (6044 weighted characters), plus Chivo Mono 400 (256) for the technical labels. The declared fallback is `monospace`. Sizes are fractional in the measurements: display 48px/57.6px, heading 30.2222px/39.2889px, body 14.2222px/21.3333px, input and nav 12.4444px (4108 weighted characters, the dominant size), plus 10.6667px, 8.88889px (0.533333px tracking) and 7.11111px (0.426667px tracking) micro-labels, 23.1111px and 17.7778px intermediate sizes. All headings are weight 500 with no bold weight present (weights measured: 500 and 400 only).

`display-mobile` is 27.1642px/31.2388px, the h1 measured at the mobile viewport. The measured empty nav link inherits `Times`, a browser default; the generated `nav` typography token for it is dropped here as not a brand choice. Telegraf is a commercial face; the declared stack falls back to monospace.

## Layout
The hero is centered: the headline box is 738px wide and the text is center-aligned over the photograph; the h2 and the shelter drawing are centered too, with the section index pinned at the left edge. Content sections use measured padding of 21.3333px (36 uses), 14.2222px, 7.11111px, 13.3333px and 35.5556px, and gaps of 7.11111px, 5.33333px, 8.88889px, 13.3333px, 21.3333px and up to 128.889px between large blocks. The spacing tokens `s1`-`s10` record the smallest measured values. Large dark expanses with only a headline or a drawing give the page a slow vertical pace.

## Elevation & Depth
No box shadows were measured. Depth is created by the photograph fading into black, a gradient glow of dark red at the bottom left of the second screen in the capture, and thin white line drawings. Translucent overlays appear as `#0e0f0fb3` and `#040404b3` background areas (70% alpha dark) under text. A `#ffffff1a` border (10% white) is measured on dark components.

## Shapes
Corners are nearly square. The extraction measured two radii: 1.77778px (5 elements) and 8.88889px (2 elements); they are `xs` 1.78px and `sm` 8.89px in the frontmatter. The nav tab has a slanted right edge, and the hero is framed by L-shaped corner brackets; callout labels in the drawing are thin-bordered rectangles.

## Components
- **Floating nav**: a dark tab, 651px wide and 48px tall in the measurement, with the white wordmark and 12.4444px/500 links; the active item has an orange arrow glyph, and links brighten from #bababa to #fefefe on hover.
- **Contact button**: a light gray rectangle with an orange dot, in the nav.
- **Text input** (`text-input`): #eceeed fill, #000000 text, Telegraf 12.4444px, 36px high, padding 1px 2px 1px 13.3333px, 1px border #c8cdc9. The site's own spam-check widget variables (`--altcha-border-radius` 0px) match its square fields.
- **Annotation callouts**: boxed uppercase labels in Chivo Mono-sized small caps with an orange icon, linked to parts of the drawing by thin leader lines.
- **Section index**: a vertical list at the left of the dark section, the active item marked by an orange square.
- **Footer**: "Vaulk© 2026 - A project initiated by Agorespace", with "Privacy policy" and "Terms & conditions" links in 12.4444px.

No primary CTA button was detected (`ctaCandidates` is empty), so no `button` token is declared. The extractor's `nav` transform value (a translateX matrix) and its footer color pairing (white on white) were measurement artifacts and are not carried into components.

## Design System Architecture
No public Vaulk design system or brand guidelines were found among the pages opened here; none is cited. The de-facto system is a small set of `--c-*` color variables (black, premium-black, white, grey-1 to grey-3, grey-background, alert-orange), one orange accent and a form widget (Altcha) themed through `--altcha-*` variables that reference those colors. Fonts loaded: Telegraf 500, Chivo Mono 400 (with a Helvetica Neue metric fallback). Source: measured page https://vaulk.com/en-GB through `web/data/extracted/vaulk.json`.

## Do's and Don'ts
Do
- Pair a dark #0c0c0c ground with white Telegraf 500 text and one orange (#f4682b) signal color.
- Show product as thin white wireframe drawing with boxed callouts.
- Use a calm landscape photograph with a centered headline for the opener.
- Keep corners at 1.78px or square.

Don't
- Don't add drop shadows; none were measured.
- Don't use the orange for large fills.
- Don't use Times for UI text; it is the browser default on the measured empty link.
- Don't use a bold weight; only 500 and 400 were measured.

## Responsive Behavior
The extractor's mobile pass recorded: h1 27.1642px/500 with line-height 31.2388px in a 312px-wide, 187px-tall box (desktop 48px/57.6px); the h2 19.403px/25.2239px (desktop 30.2222px/39.2889px); body 14.5522px/18.9179px (desktop 14.2222px/21.3333px); footer nav text 13.5821px/17.6567px. The mobile size ranking is led by 13.5821px, then 14.5522px, 17.4627px, 9.70149px and 25.2239px. Layout, menu behavior and breakpoints were not measured.

## Iteration Guide
1. Set canvas #0c0c0c, ink #ffffff, primary #f4682b, light surface #eceeed.
2. Open with a landscape photograph, a centered 48px/500 white headline and corner brackets.
3. Fade to black; show the product as white line art with orange-icon callouts.
4. Use fields at 36px high, #eceeed fill, 1px #c8cdc9 border, 12.4444px text.
5. Keep text in Telegraf 500 (fallback monospace) and radii at 1.78px or 8.89px.
6. Run `node web/scripts/verify-designs.mjs --slug=vaulk`.
