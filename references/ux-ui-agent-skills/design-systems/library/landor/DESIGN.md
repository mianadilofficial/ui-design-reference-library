---
version: alpha
name: Landor
category: "Agencies & Studios"
description: 'Landor brand-consultancy home page measured from landor.com: white canvas with Landor Blue #0e1adf text and panels, a single lime-yellow #ecfd01 pill CTA with black text and 300px radius, and the Landor Sans Beta family at weights 400 and 700.'
colors:
  canvas: '#ffffff'
  page-body: '#0e1adf'
  ink: '#000000'
  primary: '#ecfd01'
  on-primary: '#000000'
typography:
  display:
    fontFamily: '"Landor Sans Beta", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", "Liberation Sans"'
    fontSize: 48px
    fontWeight: 400
    lineHeight: 50.4px
  display-mobile:
    fontFamily: '"Landor Sans Beta", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", "Liberation Sans"'
    fontSize: 24px
    fontWeight: 400
    lineHeight: 25.2px
  subheading:
    fontFamily: '"Landor Sans Beta", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
    fontSize: 18px
    fontWeight: 400
    lineHeight: 29.9988px
  body:
    fontFamily: '"Landor Sans Beta", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", "Liberation Sans"'
    fontSize: 30px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: '"Landor Sans Beta", ui-sans-serif, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji", "Liberation Sans"'
    fontSize: 32px
    fontWeight: 400
    lineHeight: 38.4px
rounded:
  xs: 12px
  sm: 300px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 9.33px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 24px
  s9: 28px
  s10: 30px
components:
  button-primary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.ink}'
    typography: '{typography.body}'
    rounded: '{rounded.sm}'
    padding: 14px 36px 11px
    height: 55px
  button-secondary:
    backgroundColor: '{colors.primary}'
    textColor: '{colors.ink}'
    typography: '{typography.body}'
    rounded: '{rounded.sm}'
    padding: 14px 36px 11px
    height: 55px
  link:
    typography: '{typography.link}'
  nav:
    backgroundColor: '{colors.canvas}'
    textColor: '{colors.page-body}'
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: '{colors.page-body}'
    typography: '{typography.display-mobile}'
    padding: 8px 0px
  footer:
    textColor: '{colors.ink}'
---

## Overview

Landor is a global brand consultancy owned by WPP, and its home page presents itself the way a brand-identity studio would: as a confident, almost poster-like surface rather than a product UI. The measured page opens on a white strip carrying three nav labels ("Our work", "Contact us", "Join us") set in Landor Blue `#0e1adf`, then a full-bleed blue hero with the oversized serif LANDOR wordmark, then the line "World-leading brand specialists. Consulting. Design. Experience." in the same blue on white. Further down, a solid blue panel carries the animated statement "Brands designed to transform", and a portfolio carousel of project imagery (Nike Kids, Milan Symphony Orchestra, Imperia and others) follows under an "Our work" pill.

The personality is saturated and graphic. Two colors do almost all the work: a single electric blue and white. The only other chromatic accent measured is a lime-yellow `#ecfd01`, used for the "Contact us" call to action. Everything else lives in the project imagery, which is colorful and three-dimensional (plastic sneakers, googly-eyed markers, an orange basketball hoop in the capture) and sits inside rounded cards. Copy is short and fragmentary, often in capitals: the Milan Symphony Orchestra case is captioned "EXPLOSIVE. EMOTIVE. EVOCATIVE." and project titles such as "Enter the bubbleverse" and "Kneading innovation" are playful.

The measured entry URL resolved to `https://landor.com/`. The page text states the firm has 1300 minds in 30 locations and groups AMP, BDG and MVM under Landor Group.

## Colors

The palette is deliberately tiny. All values below come from `web/data/extracted/landor.json`.

- **Canvas `#ffffff`**: the dominant background by area (weight 10261 in the background frequency table), and the color behind the nav and the intro statement.
- **Landor Blue `#0e1adf`** (token `page-body`): the second-largest background area (weight 8638) and the color of the nav links, the hero statement and the "Our work" pill. It is also the main-body background role the extractor reported. In running text on white, this blue is the color of the h1 and first paragraph.
- **Ink `#000000`**: the text color of the call to action and the footer. It is the second most-read text color by character count (185), after white (754), which is used on the blue panels.
- **Primary `#ecfd01`**: the lime-yellow fill of the "Contact us" button. Its measured background weight is only 21, so it is a sparing accent, not a surface.
- **On-primary `#000000`**: black text on the lime button.

The browser-default link color `#0000ee` appeared in the generated tokens as `link-text`; it is a user-agent default, not a brand color, and has been dropped. A third-party carousel library variable `--swiper-theme-color: #007aff` is present in the root variables and is likewise not part of the brand palette.

## Typography

One family carries everything: Landor Sans Beta, loaded at weight 400 and 700 (the loaded-font list also includes a family named `landor`, weight 400). It is the only family in the font-by-characters table (1056 characters). The stack falls back to ui-sans-serif, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial and Noto Sans. The serif wordmark in the hero is not part of the text-font measurement and is not tokenized.

Measured roles:

| Token | Size / line-height | Weight | Where |
|---|---|---|---|
| `display` | 48px / 50.4px | 400 | desktop h1 role |
| `display-mobile` | 24px / 25.2px | 400 | mobile h1 role at 390px |
| `subheading` | 18px / 29.9988px | 400 | desktop h3 role |
| `body` | 30px / 30px | 400 | desktop body-text role and the CTA label |
| `link` | 32px / 38.4px | 400 | desktop link role |

The most-used size by character count is 24px (573 characters), followed by 30px (155), 14px (102), 18px (80), 48px (63), 128px (56) and 60px (27). Weights are 400 (1000 characters) and 700 (56). Letter-spacing is measured in three pairs: 24px with 0.48px, 128px with -3.84px, and 14px with 0.28px, so small and mid sizes are opened slightly while the 128px display size is tightened. Headline copy is set sentence-case on the page ("World-leading brand specialists."), with all-caps used for emphasis lines.

The generated tokens name the family only; no proprietary-font substitute is documented by Landor, and none is claimed here. The fallback stack above is what the site itself declares.

## Layout

The page is a single vertical scroll of full-width bands: nav strip, blue hero, centered intro statement, blue statement panel, centered "Our work" pill, then a carousel card that runs almost edge to edge. The text blocks are centered; the nav is split with links at the left, the small LANDOR wordmark in the middle and a globe icon at the right edge.

Spacing tokens are measured values: 5px, 8px, 9.33px, 12px, 14px, 15px, 16px, 24px, 28px and 30px. The padding frequency table shows 32px as the most common padding (19 uses), then 12px (8), 720px (8), 9.33px (7) and 36px (4). The nav link role has padding 8px 0px and h1 padding 24px 8px on mobile. Gaps measured are 5px and 72px, two uses each. Density is low: large empty white bands separate the statement panel from the portfolio.

## Elevation & Depth

Depth is mostly carried by imagery and color blocking rather than by shadow. Three box shadows were measured, one each: `rgba(14, 26, 223, 0.4) 0px 8px 10px 8px` (a blue-tinted glow in the brand color), `rgba(0, 39, 215, 0.3) 0px 5px 7px 0px`, and `rgba(0, 0, 0, 0.6) 0px 76.8px 76.8px 0px`, a very large soft drop. No border colors were measured at all, so separation between regions is by background color and whitespace. The hero blue photograph and the portfolio images provide the visual layering.

## Shapes

Radii measured on the live page: 12px (10 elements), 50% (7), 300px (3), plus two bottom-only radii, `0px 0px 12px 12px` and `0px 0px 16px 16px` (one each). The tokens are `xs: 12px`, `sm: 300px` and `pill: 9999px`. The "Contact us" button uses the 300px radius, so its ends are fully round. The portfolio and statement cards use the smaller 12px corner. Circular elements (50%) are the icon buttons and carousel controls. Rectangles with square corners are the exception.

## Components

**Primary button (`button-primary`)**: lime `#ecfd01` fill, black text, `body` typography (30px/30px, weight 400), 300px radius, padding `14px 36px 11px`, height 55px. Its label in the capture is "Contact us", and it was 219px wide. A secondary button in the generated tokens is measured identically, so there is a single button style.

**Ghost showreel button**: the hover probe recorded a "Play Showreel" button with text white, background `rgba(117, 117, 117, 0.4)`, white border and 300px radius. On hover its height changed from 31px to 37px and its opacity from 0 to 1. Because it is a media control, it is documented as an interaction fact, not as a token.

**Nav (`nav`, `nav-link`)**: white background, Landor Blue text, nav links use the 24px `display-mobile` typography and padding 8px 0px. A globe icon sits at the right edge.

**"Our work" pill**: a blue pill with white text above the carousel, using the 300px radius.

**Project card**: a rounded 12px container holding a photograph and a progress bar of thin white segments across its top edge, as shown in the capture.

**Footer (`footer`)**: black text; its links are the legal set (Privacy policy, Cookie Policy, Cookie Settings, Modern Slavery Act, Terms of use) and social links (LinkedIn, Instagram, X, Facebook, Glassdoor), according to the opened page.

Cookie-consent controls are not documented as brand UI.

## Design System Architecture

No public design system, brand guideline or press kit is linked from landor.com: the opened home page links only to Our work, Contact us, Join us and the legal pages, so no official source exists to cite beyond the site itself (https://landor.com/). The de-facto system is visible in the shipped CSS: a single custom font, a two-color palette, and a pill-and-card shape vocabulary. The only root custom property measured is `--swiper-theme-color`, which belongs to the Swiper carousel library, so the site does not publish brand tokens as CSS variables. Class naming is not documented in the extraction. Token values in this file come from `web/data/extracted/landor.json`, measured on the live site.

## Do's and Don'ts

Do:
- Use `#0e1adf` for text and panels on a white canvas; the two colors are the brand.
- Keep the lime `#ecfd01` for the one call to action per view, with black `#000000` text.
- Use 300px radius for buttons and pills, 12px for cards.
- Write short fragments and capitalized punchy lines.
- Let colorful project imagery carry the saturation.

Don't:
- Do not add additional hues to the interface chrome; the measured palette has only blue, lime, black and white.
- Do not use `#0000ee` or `#007aff` as brand colors.
- Do not add borders; no border colors were measured.
- Do not apply the lime to large areas; it covers a tiny area share on the page.
- Do not mix in a second text family.

## Responsive Behavior

Only the mobile pass at 390px was measured, and it recorded the h1 and body roles, not layout. The h1 measured 24px with 25.2px line-height (against 48px on desktop), the first paragraph 18px with 24px line-height, and the h1 element was 333px wide with 24px 8px padding. Mobile navigation structure, breakpoints and carousel behavior are not measured.

## Iteration Guide

1. Start from `canvas` `#ffffff` and `page-body` `#0e1adf`; add `primary` `#ecfd01` only for the main action.
2. Set headlines in Landor Sans Beta weight 400 at 48px/50.4px on desktop; 24px/25.2px matches the measured mobile h1.
3. Build buttons with 300px radius, padding `14px 36px 11px`, 55px height.
4. Use the measured spacing steps (8px, 12px, 16px, 24px, 30px) rather than inventing new ones.
5. If the font is unavailable, the site's own declared fallbacks (ui-sans-serif, system-ui, Segoe UI, Roboto, Helvetica Neue, Arial) apply.
6. Re-measure with `node web/scripts/extract-tokens.mjs --slug=landor --url=https://landor.com/ --force --no-motion` before changing any value, then run `node web/scripts/verify-designs.mjs --slug=landor`.
