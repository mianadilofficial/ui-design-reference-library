---
version: alpha
name: Contentful
category: "Design Systems"
description: "Contentful's homepage pairs a deep navy hero panel (#0c2659) and a bright blue announcement bar (#1770e5) with white and charcoal (#2b2d31) pill buttons, set in a self-hosted face registered as avenirNextFont at weight 600 with tight tracking, 48px-radius pills and 20-48px rounded media. Its Forma 36 docs use Geist Sans and 6px blue buttons."

colors:
  canvas: "#ffffff"
  page-largest: "#eff2f6"
  ink: "#2b2d31"
  primary: "#0c2659"
  ink-muted: "#6d7682"
  ink-soft: "#55575b"
  ink-link: "#2a3039"
  ink-hover: "#696a6d"
  banner-blue: "#1770e5"
  on-primary: "#ffffff"
  forma-blue-500: "#036fe3"
  forma-primary: "#0059c8"
typography:
  display:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 72px
    fontWeight: 600
    lineHeight: 76.32px
    letterSpacing: "-2.16px"
  display-mobile:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 40px
    fontWeight: 600
    lineHeight: 44px
    letterSpacing: "-0.4px"
  heading:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 56px
    fontWeight: 600
    lineHeight: 63.84px
    letterSpacing: "-1.12px"
  subheading:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
    letterSpacing: "-0.32px"
  body:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.08px
  button:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  nav:
    fontFamily: avenirNextFont, "avenirNextFont Fallback", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
rounded:
  xs: 6px
  sm: 12px
  md: 20px
  lg: 32px
  xl: 40px
  2xl: 48px
  none: 0px
  pill: 9999px
spacing:
  s1: 6px
  s2: 7px
  s3: 8px
  s4: 10px
  s5: 13px
  s6: 14px
  s7: 15px
  s8: 16px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 14px 22px
    height: 48px
  button-primary-hover:
    textColor: "{colors.ink-hover}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 14px 22px
    height: 48px
  announcement-bar:
    backgroundColor: "{colors.banner-blue}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 16px 40px
  nav-link:
    textColor: "{colors.ink-link}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  announcement-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 32px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

The Contentful homepage is built from large rounded panels on a white page. A bright blue announcement bar (`{colors.banner-blue}`) runs across the very top ("Contentful is now officially part of Salesforce! Read more"), a thin white navigation bar sits beneath it, and then the hero: an inset panel in deep navy (`{colors.primary}`) with a left-aligned two-line headline "Built for humans. Ready for agents.", a short paragraph, a white pill button, and a portrait photograph of a woman holding a laptop, cropped in an arch shape on a blue backing. A small outlined chip ("Discover Contentful AI") with a sparkle icon sits above the headline.

Below the hero the page settles into a calm editorial rhythm: a four-column strip of customer logos with one metric each ("78% increased CVR via personalization", "20+ languages supported", "10x increase in content production", "5 min release cycles down from 2 weeks"), a hairline rule, a dark charcoal band for a partner promotion with an outlined pill button, a large two-line section heading, then a case-study block with a big photograph at rounded corners and oversized figures ("25%", "7x"). The photography is warm, candid and lifestyle-led (a couple on a rug with a dog, a fast-food counter, a lab), and customer logos appear in white over image cards.

**Key Characteristics:**
- Pill-shaped buttons (48px radius) in only two fills: white on dark surfaces, charcoal (`{colors.ink}`) on white, plus a charcoal-outline twin.
- A navy hero (`{colors.primary}`) and a saturated blue banner (`{colors.banner-blue}`) as the only chromatic fields; everything else is neutral.
- Headlines at weight 600 in a self-hosted grotesque registered as `avenirNextFont`, with strongly negative tracking at large sizes.
- Big numbers as proof points under logos and beside case studies.
- Rounded media: images and cards sit at the 20px and larger radius steps.

## Colors

The page is white (`{colors.canvas}`) with a pale blue-grey (`{colors.page-largest}`) as the largest measured area background. `{colors.primary}` is the navy of the hero panel, with `{colors.on-primary}` white text on it; it is chosen as primary because the generated CTA fill is white, which on this site is just the button on dark, not a brand colour. `{colors.banner-blue}` is the announcement bar.

Text is `{colors.ink}`, a charcoal, with `{colors.ink-soft}` and `{colors.ink-muted}` for secondary copy and `{colors.ink-link}` for header links and the "Contact sales" label. The white pill's label dims to `{colors.ink-hover}` on hover (measured as the hover text colour).

Contentful's own design system docs (Forma 36) publish a separate semantic palette: `{colors.forma-primary}` is its documented `colorPrimary` ([f36.contentful.com/tokens/color-system](https://f36.contentful.com/tokens/color-system)), and the docs' button measured `{colors.forma-blue-500}` (the blue 500 step) as its primary fill. These are product-UI colours; the marketing page uses the navy and the banner blue instead.

## Typography

The marketing page loads one family, registered as `avenirNextFont` (weights 400 and 600) with `Arial, Helvetica, sans-serif` fallbacks. The name is the font-face name served by the site; I did not confirm its provenance or licence. Use Arial/Helvetica as the stand-in.

- **Display (`{typography.display}`)**: 72px, weight 600, line-height 76.32px, tracking -2.16px; the hero headline.
- **Display mobile (`{typography.display-mobile}`)**: 40px, weight 600, line-height 44px.
- **Heading (`{typography.heading}`)**: 56px, weight 600, tracking -1.12px; section titles.
- **Subheading (`{typography.subheading}`)**: 32px, weight 600.
- **Body (`{typography.body}`)**: 16px, weight 400, line-height 26.08px (generous, about 1.6).
- **Button (`{typography.button}`)**: 16px, weight 600; **nav (`{typography.nav}`)**: 14px, weight 600.

Tracking tightens in proportion to size (about -3% at 72px, -2% at 56px, -1% at 32px), while body copy stays untracked. Weight 600 is the only emphasis; there is no light display setting.

## Layout

A full-width layout with an outer gutter of about 24px: the hero, the charcoal band and the case-study image all align to the same left and right edges. The header is a two-tier stack (banner, then navigation with logo left, centred menu — Products, Solutions, Resources, Developers, Partners, Pricing — and a right cluster of search, Log in and a "Contact sales" pill). The hero is a two-column composition with copy left and portrait right. Customer metrics use four equal columns; the case study uses a text column and a wide image column. Section dividers are 1px hairlines.

Spacing steps from the tokens range from `{spacing.s1}` 6px through `{spacing.s8}` 16px and `{spacing.s10}` 24px; card padding is 32px and the pill buttons use 14px 22px.

## Elevation & Depth

The page is flat. The only measured shadows are 1px inset rings, with no drop shadows on cards or buttons. Separation comes from fill contrast (navy and charcoal panels on white), photography and hairline rules.

## Shapes

The radius ladder is `{rounded.xs}` 6px, `{rounded.sm}` 12px, `{rounded.md}` 20px, `{rounded.lg}` 32px, `{rounded.xl}` 40px, `{rounded.2xl}` 48px, `{rounded.pill}` and `{rounded.none}` 0px. The 48px step is the button pill (a 48px-tall button, so it is fully round). The generated extraction read buttons as 0px because the radius sits on an inner wrapper element; a direct probe of the live page found the wrapper at 48px, which is what this file uses. The large panels and photographs use the 20px and larger steps.

## Components

**button-primary** — white pill used on dark panels: `{colors.canvas}` fill, `{colors.ink}` label, `{typography.button}`, `{rounded.2xl}`, padding 14px 22px, height 48px, a 2px border that is transparent on the white fill; hover dims the text to `{colors.ink-hover}`.

**button-secondary** — the charcoal pill ("View case study"): `{colors.ink}` fill, white label, same geometry. Its outline twin ("Browse all") is transparent with a 2px `{colors.ink}` border.

**announcement-bar** — `{colors.banner-blue}` background, white text, padding 16px 40px, containing a small outlined "New" tag, the message and a chevron.

**nav-link** — 14px weight 600 `{colors.ink-link}` labels; the "Contact sales" pill is an outlined 48px-radius button 34px tall with 8px 14px padding.

**card** — white, `{rounded.md}`, padding 32px, with photography above or beside text. **footer** — `{colors.ink}` text on white.

## Design System Architecture

Contentful's public system is **Forma 36**, documented at [f36.contentful.com](https://f36.contentful.com). It describes itself through sections for Getting started, Guidelines, Tokens, Components, a Playground and a Changelog, and links to a Figma community library and to [github.com/contentful/forma-36](https://github.com/contentful/forma-36), a MIT-licensed monorepo (React, TypeScript, Emotion for styling, packages such as f36-components and f36-tokens). The token pages publish a semantic palette (for example `colorPrimary` #0059C8, `colorPositive` #006D23, `colorNegative` #BD002A, `colorWarning` #CC4500) and nine-step gray, blue, green, red, purple, orange and yellow ramps, a typography scale (Geist Sans, Geist Mono, sizes from 0.625rem to 3rem, weights 400, 500 and 600) and line-heights of 1.5 and 1.25.

The Button page lists five variants (primary, secondary, positive, negative, transparent) and four sizes (large, medium, small, tiny). I measured that page: the buttons are 40px tall, 14px at weight 500, 6px radius, padded 8px 16px, with a blue primary (#036fe3) and a green positive (#008539).

Forma 36 is therefore a product/app system (Geist, 6px rectangles, blue action colour), distinct from the marketing site (avenirNextFont, 48px pills, navy and white). Treat Forma 36 as the reference for dashboards and forms, and this file's tokens for marketing surfaces. The two sets share neutral greys and a blue family but not typeface, radius or button shape.

## Do's and Don'ts

- Do keep buttons as 48px-radius pills with 14px 22px padding; do not use square buttons on the marketing site.
- Do put proof points (numbers) beside or beneath logos in large type.
- Do set headlines at weight 600 with tightened tracking.
- Do use warm, real photography; don't use abstract gradients.
- Don't add drop shadows; use panel fills and hairlines.
- Don't use blue as a button fill on marketing pages (blue is the announcement bar); don't mix in Geist.
- Don't claim the headline face is Avenir Next without confirming; the file only knows its served name.

## Responsive Behavior

At the 390px viewport the headline steps from `{typography.display}` to `{typography.display-mobile}` (40px, line-height 44px, tracking -0.4px), keeping weight 600. Column layouts (the hero two-up, the four metrics, the case-study image) were not captured at phone width, so their stacking is not described here.

## Iteration Guide

1. Start with a white page; introduce the navy `{colors.primary}` panel for the hero only.
2. Use `{rounded.2xl}` for every button, white on dark and `{colors.ink}` on light.
3. Keep headings at 600 with the tracking ratios above.
4. Add numbers and a customer logo before adding decoration.
5. For app UI, switch to the Forma 36 tokens at f36.contentful.com.
