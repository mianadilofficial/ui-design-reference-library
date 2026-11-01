---
version: alpha
name: "MIUX Studio"
category: "Agencies & Studios"
description: "Seattle brand and digital design studio site in warm neutrals: tan #d5c8b0 hero, cream #f7f3ed canvas, sage #b9bdab panels, #333335 ink, one self-hosted sans at weight 400-500 with negative tracking, 42.6667px display and 12px radii."
colors:
  canvas: "#f7f3ed"
  page-largest: "#d5c8b0"
  ink: "#333335"
  primary: "#9e8f7b"
  surface-3: "#b9bdab"
  ink-secondary: "#00000080"
  ink-5: "#00000066"
  hairline: "#00000012"
  nav-link-text: "#000000"
typography:
  display:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 42.6667px
    fontWeight: 400
    lineHeight: 53.3333px
    letterSpacing: "-0.426667px"
  display-mobile:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 32.6512px
    fontWeight: 400
    lineHeight: 40.814px
    letterSpacing: "-0.326512px"
  subheading:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 272px
    fontWeight: 400
    lineHeight: 272px
    letterSpacing: "-8.16px"
  body:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 13.3333px
    fontWeight: 500
    lineHeight: 20.6667px
  nav:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 6.66667px
    fontWeight: 400
  link:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 8px
    fontWeight: 400
    lineHeight: 9.2px
  input:
    fontFamily: __SSS_7de170, __SSS_Fallback_7de170
    fontSize: 17.3333px
    fontWeight: 500
    lineHeight: 17.3333px
rounded:
  xs: 8px
  sm: 12px
  pill: 9999px
spacing:
  s1: 5.33px
  s2: 7.33px
  s3: 8px
  s4: 10.67px
  s5: 13.33px
  s6: 16px
  s7: 21.33px
  s8: 26.67px
  s9: 32.67px
  s10: 34.67px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 5.33333px 26.6667px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 21px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    textColor: "{colors.ink-5}"
---

# MIUX Studio

## Overview
The measured site is madeinuxstudio.com (page title "Home | MIUX"). The copy on the capture describes MiUX Studio as "an award-winning brand and digital design studio based in Seattle, creating strategy-led websites, UX/UI experiences, brand identities, and packaging for founders and growing businesses", and the header tagline reads "A studio crafting captivating digital experiences." A badge line near the hero says "Limited Project Availability For Q2-Q3". The site is a portfolio and sales page for the studio itself, so it behaves like a piece of brand work: calm, editorial, warm and photographic.

The first screen splits vertically. The left half is a flat tan field (`{colors.page-largest}`, #d5c8b0) with a very large two-tone headline, "Premium design for brands ready to be trusted, chosen, and remembered", a small rounded photo of a studio sign, and a short paragraph in muted ink. The right half is a full-bleed warm photograph of a woman working at a laptop beside a window, with the section navigation (Projects / Work, Services, About MIUX, Contact) overlaid at the top. Further down the page the canvas turns to cream. The overall effect is soft, low-contrast and tactile, with no saturated color anywhere.

## Colors
By painted area the page is `{colors.page-largest}` tan (#d5c8b0) first, then `{colors.canvas}` cream (#f7f3ed), then `{colors.surface-3}` sage grey-green (#b9bdab). The site's own :root variables name these `--brand-ac-3`, `--brand-ac-1` and `--brand-dark` (#333335); `--brand-ac-2` is #9e8f7b, which is `{colors.primary}` here, a muted taupe used for small accent text (106 weighted characters). The rootVars also hold a fourth accent, `--brand-ac-4` #986c32, which was not seen on measured surfaces and is not a token.

Text uses `{colors.ink}` (#333335) for headlines and `{colors.ink-secondary}` (#00000080, 50% black) for most paragraph copy, the single most-read color (2161 weighted characters). `{colors.ink-5}` (#00000066) is used for footer text and `{colors.nav-link-text}` (#000000) for navigation labels. Cream (#f7f3ed) also appears as text color on dark areas. Borders are near-invisible: `{colors.hairline}` (#00000012, 7% black). The rootVars define a full alpha ladder of black (`--dark-7` through `--dark-70`) and white (`--light-15`, `--light-30`, `--light-50`), which is the mechanism for muted text and dividers. No button fill color was detected, so `primary` is a text accent rather than a CTA fill.

## Typography
One typeface carries the whole site. It is a self-hosted font whose family name is obfuscated by the build as `__SSS_7de170` with `__SSS_Fallback_7de170` as fallback (the CSS variable is `--font-SSS`). The real foundry name was not found in the measured data and no source was opened to confirm it, so it is not named here; for substitution use a neutral grotesque sans at weights 400 to 550. Weights measured by characters are 500 (2776), 550 (252) and 400 (688).

Scale: `{typography.display}` is 42.6667px weight 400, line-height 53.3333px, letter-spacing -0.426667px (the "Work" section heading); the home hero headline is larger, and the CSS corpus-weighted sizes include 64px and 98.6667px, each with -0.01em tracking (-0.64px, -0.986667px). `{typography.display-mobile}` is 32.6512px with -0.326512px tracking. `{typography.subheading}` is the enormous 272px numeral (weight 400, line-height 272px, -8.16px tracking) used for step numbers like "1". `{typography.body}` is 13.3333px weight 500 with 20.6667px line-height; `{typography.input}` is 17.3333px weight 500; `{typography.nav}` measures 6.66667px and `{typography.link}` 8px. These small sizes are what the computed styles reported, as the site sets a very small root size (a `--vh` variable of 8px), so rem-based values compute small; reproduce the computed values, not assumed ones. Tracking is tight on every large size (-0.01em) and normal on body.

## Layout
The desktop page measures 1280px wide and 12415px tall, a long single-page scroll. The header is a thin row with the script logo, a divider, the tagline and the nav items; the header height variable is 9rem. The hero is a 50/50 split of text field and photograph. Testimonial cards appear in columns 347px wide and 480px tall. The measured gaps are 8px (most common), 16px, 13.3333px, 21.3333px and 10.6667px, with larger section gaps of 84px and 106.667px; the most common padding is 26.6667px, then 13.3333px, 5.33333px, 8px and 40px. The spacing tokens `{spacing.s1}` to `{spacing.s10}` list these values. The footer is 686px tall, with numbered index links 01. Home, 02. Service, 03. About, 04. Work, 05. Contact.

## Elevation & Depth
No box-shadows were measured. Depth is created with flat color fields (tan, cream, sage), photographs, and 1px lines at 7% to 10% black (`#00000012`, `#0000001a`). Do not add shadows.

## Shapes
Measured radii: 8px on 18 elements (`{rounded.xs}`), 12px on 3 (`{rounded.sm}`, the testimonial cards and photos), 800px and 100% on four elements each (the pill/circle family, `{rounded.pill}`). The hero thumbnail visible in the capture has softly rounded corners. Section containers and the hero fields are square.

## Components
**Navigation.** `{components.nav-link}`: black (#000000) 6.66667px label with padding 5.33333px 26.6667px, a small caption above each label (Projects, Services, About MIUX) and an arrow glyph after; 59px tall items on the 1280px header. **Links** (`{components.link}`) use ink #333335 at 8px (the email address info@madeinuxstudio.com).

**Testimonial card** (`{components.card}`): cream (#f7f3ed) background, ink text, 12px radius, 347px by 480px, holding name, role, company and a quote ("MIUX transformed..."). **Text input** (`{components.text-input}`): 17.3333px weight 500 ink text, 21px tall, no border or fill measured, 0px radius. **Footer** (`{components.footer}`): text in #00000066, numbered link list. No filled primary button was detected on the page.

## Design System Architecture
No public design system or brand guideline page was opened for this brief. The de-facto system is visible in the shipped CSS: custom properties on :root for color (`--brand-ac-1` to `--brand-ac-4`, `--brand-dark`), an alpha ladder (`--dark-7` to `--dark-70`, `--light-15` to `--light-50`), a font variable (`--font-SSS`), a layout variable (`--headerHeight`) and one easing (`--primary-ease`: cubic-bezier(0.215,0.61,0.355,1)). The build tool and framework were not confirmed from an opened source, so none is asserted.

Microcopy voice is confident and short: "Premium design for brands ready to be trusted, chosen, and remembered", "Limited Project Availability For Q2-Q3", and testimonial attributions that give name, role and company on separate lines. Imagery is natural-light lifestyle photography in the same warm range as the palette, plus a close crop of the studio's script-mark signage on a stone wall. The recurring layout idea is a quiet text column against a single strong photograph, with numerals set at a huge scale as section markers.

## Do's and Don'ts
- Do use tan #d5c8b0, cream #f7f3ed and sage #b9bdab as large flat fields.
- Do set paragraphs in 50%-black ink and headlines in #333335.
- Do track display type tightly (-0.01em) at weight 400.
- Do pair a large photograph with a plain color field.
- Don't add saturated colors; the palette is entirely warm neutral.
- Don't use drop shadows or heavy borders; lines are 7% to 10% black.
- Don't treat #986c32 as an established color; it is in the CSS variables only.

## Responsive Behavior
The mobile pass measured the "Work" heading at 32.6512px (line-height 40.814px, -0.326512px tracking) and the body paragraph at 14.5116px weight 500 with 22.493px line-height, 361px wide. Menu behavior, column collapse and breakpoints were not measured.

## Iteration Guide
1. Choose a flat warm field first (#d5c8b0 or #f7f3ed), then add one photograph.
2. Set headings at weight 400 with -0.01em tracking and body at weight 500 in 50% black.
3. Keep radii at 8px to 12px for images and cards.
4. Add dividers only at 7% black.
5. Re-run `node web/scripts/verify-designs.mjs --slug=miux-studio` after token edits.
