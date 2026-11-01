---
version: alpha
name: Vestas
category: "Energy & Climate"
description: 'Vestas (vestas.com/en): wind-energy manufacturer styled in VestasSans weight 200 headlines (56px/50px) in Vestas blue #005aff on white and #e3e5e8 gray bands, navy #1f3144 text and footer, full-bleed turbine photography, circled-arrow links and 50% circles, no shadows.'
colors:
  canvas: '#ffffff'
  page-largest: '#f7f7f7'
  ink: '#1f3144'
  primary: '#005aff'
  teal: '#19736e'
  ink-muted: '#606d7b'
  ink-dark: '#37424a'
  surface-band: '#e3e5e8'
typography:
  display:
    fontFamily: VestasSans, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, 游ゴシック, YuGothic, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif
    fontSize: 56px
    fontWeight: 200
    lineHeight: 58.8px
  display-mobile:
    fontFamily: VestasSans, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, 游ゴシック, YuGothic, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif
    fontSize: 34.13px
    fontWeight: 200
    lineHeight: 35.8365px
  heading:
    fontFamily: VestasSans, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, 游ゴシック, YuGothic, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif
    fontSize: 50px
    fontWeight: 200
    lineHeight: 52.5px
  body:
    fontFamily: VestasSans, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, 游ゴシック, YuGothic, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: VestasSans, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, 游ゴシック, YuGothic, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 27px
  link:
    fontFamily: VestasSans, "ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", メイリオ, Meiryo, 游ゴシック, YuGothic, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 16px
  pill: 9999px
spacing:
  s1: 6.5px
  s2: 8px
  s3: 12px
  s4: 20px
  s5: 24px
  s6: 48px
  s7: 112px
components:
  link:
    textColor: '{colors.canvas}'
    typography: '{typography.link}'
  nav-link:
    textColor: '{colors.canvas}'
    typography: '{typography.nav}'
    padding: 6.5px 0px
  footer:
    backgroundColor: '{colors.ink}'
    textColor: '{colors.page-largest}'
---

# Vestas

## Overview
Vestas (`https://www.vestas.com`, measured at `https://www.vestas.com/en`, title "Global Leader in Sustainable Energy | Vestas") is the Danish wind-turbine manufacturer; the footer gives "Vestas Wind Systems A/S, Hedeager 42, 8200 Aarhus N, Denmark". The extractor found 627 visible elements on a 1280px-wide, 9598px-tall page. The capture shows a corporate, engineering-led site in cool blue-gray tones: a transparent top bar over a full-bleed hero (italic Vestas wordmark at left; "Energy Solutions", "Investor", "Media", "Careers", "About", "Sustainability"; globe, account and search icons at right), a slate-gray text panel over a photograph of a technician rope-working inside a turbine blade, with the headline "Vestas becomes the first company to install 200 GW of wind turbines globally" and an outlined circular arrow link, and numbered slide dots at the lower right.

Below, the page uses a white section with a light-weight blue heading ("The global leader in sustainable energy solutions") beside a large pale gray media placeholder, then a #e3e5e8 gray band with four columns, each a cool-toned render of a turbine (onshore, offshore, service, development) with a blue light-weight title, a short paragraph and a circled-arrow link ("Explore our onshore wind turbine solutions"). The tone is calm, confident and factual; copy cites figures (over 40 years, +35,000 employees, over 56,000 turbines across 71 countries). The light type weight and blue color on white and gray give the page a thin, technical, airy feel.

## Colors
- `canvas` #ffffff: the page ground (measured background 1505 weighted area). `page-largest` #f7f7f7 is the largest measured background area (3835 weighted), the pale panel next to the mission text.
- `surface-band` #e3e5e8: the cool gray band behind the solutions cards (998 weighted area).
- `ink` #1f3144: a deep navy slate, the most-read text color (2163 weighted characters), and the footer background.
- `primary` #005aff: Vestas blue, used for light-weight headings (h2 "The global leader...", 305 weighted characters), the arrow-link circles and their outlines (9 border uses). The site's stylesheet also sets `--bs-primary` and `--inderes-widgets-primary-color` to #005aff.
- `teal` #19736e: a deep teal fill (1194 weighted area), measured as a background below the part of the page shown in the capture.
- `ink-muted` #606d7b and `ink-dark` #37424a: secondary text colors; `#d5d6d2` is a measured border color.
- White (#ffffff) carries text over photography (723 weighted characters); the hero overlay panel is the navy #1f3144 at 50% alpha (#1f314480).

Palette logic: navy slate for reading, one saturated blue for emphasis and interaction, neutrals for structure, imagery supplying the color of sky and steel.

## Typography
A single proprietary family, VestasSans, loaded at weights 200, 300, 400, 500, 600 and 700 (3588 weighted characters). The declared stack adds Japanese fallbacks (Hiragino Kaku Gothic Pro, Meiryo, YuGothic, MS PGothic) and `sans-serif`. The weight ladder is the page's signature:
- `display` 56px, weight 200, line-height 58.8px: the hero headline in white.
- `heading` 50px, weight 200, line-height 52.5px: section titles in blue (301 weighted characters at 50px).
- `body` 16px, weight 300, line-height 24px (1899 weighted characters, the dominant size).
- `nav` 18px/300 with 27px line-height; the nav container measures 16px/500.
- `link` 14px/500 with 21px line-height: the circled-arrow link labels.
Letter-spacing is not set (the frequency list is empty). `display-mobile` is 34.13px/200 with 35.8365px line-height, the hero h1 measured at the mobile viewport. Sizes also measured: 20px, 26px, 32px, 12px and 18px.

## Layout
The grid is not declared in the measurements; the capture shows content inset from both edges, with a four-column row for solutions. The page width is 1280px and sections are separated by color bands (white, #f7f7f7, #e3e5e8, navy footer) rather than rules. Measured paddings: 12px (36 uses), 24px (31), 48px (23), 8px, 6.5px, 112px; gaps: 12px (6), 48px (6), 20px (2). The nav bar is 70px tall. The mission paragraph sits in a narrow column indented from the heading. The footer is 434px tall.

## Elevation & Depth
Flat. The only measured shadows are 2px white offset lines (`rgb(255, 255, 255) 2px 0px 0px 0px`, 4 uses; with a 1px vertical offset, 3 uses), used as separators, not as elevation. Depth is given by the photographic hero and the semi-transparent slate panel over it. Cards and bands rely on background color change.

## Shapes
Shapes are circles and soft rectangles. Measured radii: 50% (17 elements: the arrow-link circles, slide dots and icon buttons), 16px (3 elements), 100% (1) and a half-round `100% 0px 0px 100% / 50% 0px 0px 50%` (1, a side tab). The frontmatter records `xs` 16px and `pill` 9999px. Images and the content panels are rectangular with square corners.

## Components
- **Top nav**: transparent over the hero, white text, VestasSans 18px/300 links, 70px tall; icon buttons for language, account and search.
- **Hero panel**: slate #1f3144 at 50% alpha, white 56px/200 headline, outlined circular arrow plus a 14px/500 label.
- **Slide dots**: numbered circles at the lower right of the hero (50% radius, white outlines).
- **Solution card**: an image on top, a blue 26px light-weight title, a 16px/300 paragraph and a link made of a blue outlined circle with an arrow and a 14px/500 label.
- **Circled-arrow link** (`link`): white text over the hero panel, blue on light grounds.
- **Footer**: navy #1f3144 with #f7f7f7 text, 14px/300 (434px tall), the company address block.
- Not brand UI: the "Cookies" tab at the lower left of the screenshot.

No filled primary button was detected (`ctaCandidates` is empty), so no `button` token is declared; the call to action is the circled-arrow text link.

## Design System Architecture
No public Vestas design system or brand guidelines were found among the pages opened for this document, and none is cited. The shipped CSS is built on Bootstrap, shown by `--bs-*` variables in `rootVars` (including `--bs-primary` #005aff, `--bs-gray` #a2a9b1, `--bs-orange` #e17d28), with `--bs-primary` remapped to the brand blue; a third-party investor widget (`--inderes-widgets-primary-color`) uses the same blue. The type system is the single custom family VestasSans. Source: measured page https://www.vestas.com/en via `web/data/extracted/vestas.json`.

## Do's and Don'ts
Do
- Set headings in VestasSans weight 200 in #005aff on white or gray.
- Use VestasSans 300 at 16px/24px for body copy in #1f3144.
- Place white text on a 50% navy panel over full-bleed photography.
- Link with a blue outlined circle and arrow plus a 14px/500 label.
- Separate sections with background bands.

Don't
- Don't use heavy weights for headings; the display and heading tokens are weight 200.
- Don't add drop shadows; the measured ones are 2px white separator lines.
- Don't document the cookie tab as a brand component.
- Don't use the Bootstrap defaults (#ffc107, #6610f2, #20c997) that sit in `rootVars`; they are framework palette entries, not brand colors.

## Responsive Behavior
The mobile pass recorded: h1 34.13px/200 with 35.8365px line-height in a 246px-wide box (desktop 56px/58.8px); the h2 31.775px/200 with 33.3638px line-height in a 342px-wide box (desktop 50px); body 16px/300 and 24px line-height in a 342px-wide box; and a 65px-high nav, 390px wide. The mobile size ranking is led by 16px (1844 weighted), then 12px, 14px, 31.775px, 20px, 22.355px, 34.13px, 24.71px and 18px. Breakpoints and menu behavior are not measured.

## Iteration Guide
1. Set canvas #ffffff, ink #1f3144, primary #005aff, band #e3e5e8.
2. Build the hero as full-bleed photography with a 50% #1f3144 panel and a white 56px/200 headline.
3. Set section titles in VestasSans 200 at 50px/52.5px in blue.
4. Make four-up cards on the gray band with a 26px blue title and circled-arrow links.
5. Close with a #1f3144 footer in #f7f7f7 14px/300 text.
6. Run `node web/scripts/verify-designs.mjs --slug=vestas`.
