---
version: alpha
name: Culture Amp
category: "Design Systems"
description: "Culture Amp pairs a warm off-white canvas (#fefbf9) and near-black ink (#171a1b) with Tiempos serif headlines at 56px/500, Inter body at 20px/400, black pill buttons (9999px radius, 54px tall) and soft 24px-radius cards on a #f6efea cream band. Its public Kaizen design system uses a separate Inter-led product palette with a #0168b3 action blue and 7px-radius buttons."
colors:
  canvas: "#fefbf9"
  page-largest: "#ffffff"
  ink: "#171a1b"
  primary: "#171a1b"
  on-primary: "#ffffff"
  surface-warm: "#f6efea"
  ink-muted: "#524f4c"
  primary-hover: "#171a1bb3"
  action-blue: "#0168b3"
  ink-plum: "#2f2438"
  border-gray: "#878792"
typography:
  display:
    fontFamily: tiempos, serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 68px
  heading:
    fontFamily: tiempos, serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  subheading:
    fontFamily: tiempos, serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 34px
  body:
    fontFamily: inter, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: inter, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: inter, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 6px
  kaizen: 7px
  xl: 24px
  2xl: 32px
  pill: 9999px
spacing:
  s1: 2px
  s3: 6px
  s4: 8px
  s5: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 14px 20px
    height: 54px
    borderColor: "{colors.ink}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
    padding: 14px 60px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 8px 10px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(23, 26, 27, 0.05) 0px 2px 20px 0px
  footer:
    textColor: "{colors.ink}"
  kaizen-button-primary:
    backgroundColor: "{colors.action-blue}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.kaizen}"
    padding: 6px 18px
    height: 40px
    borderColor: "{colors.action-blue}"
  kaizen-button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-plum}"
    typography: "{typography.button}"
    rounded: "{rounded.kaizen}"
    padding: 6px 18px
    height: 40px
    borderColor: "{colors.border-gray}"
---

## Overview

Culture Amp's marketing site reads as an editorial magazine for people-and-performance data. The first screen of the capture is a calm, warm-white page (#fefbf9) with a large four-line Tiempos headline, "Culture Intelligence built on how humans actually work", at 56px weight 500 with a 68px line-height. Beside it sits a rounded product screenshot of an "AI Coach" panel framed against a purple field, and a single black pill button, "Book a demo", anchors the left column. A black announcement bar and a sticky white nav sit above, but the visual weight is typographic rather than chromatic: almost every character on the page is #171a1b ink, measured at 5,493 weighted characters, against only 521 for the secondary grey #524f4c.

The brand voice is conversational and human. A hand-written script line, "Trusted by 6,000+ companies" with a curved arrow, interrupts the logo row, and the page loads a face named camper alongside Tiempos and Inter. An independent trade write-up of the 2021 rebrand (https://www.transformmagazine.net/articles/2021/for-the-people-launches-new-brand-identity-for-culture-amp/) describes Camper as a bespoke typeface meant to capture human "messiness" and imperfection, and says the palette deliberately avoids the pastels common in the category. The capture confirms warm human photography (a tennis coach in a green polo, a woman against an orange backdrop) and product UI cards rather than abstract illustration.

Two visual languages coexist and this file documents both. The marketing site is serif-headline, black-pill, cream-band. The product design system, Kaizen, published at https://cultureamp.design, is Inter-led with a blue action button and 7px corners. The first is what a visitor sees at cultureamp.com; the second is what product engineers consume through the open-source packages.

## Colors

The marketing palette is deliberately small. Canvas is #fefbf9, a barely warm white that is the page background in the capture; #ffffff (page-largest) is the pure white used for cards, the nav bar and button text. The cream band #f6efea (surface-warm) fills the large rounded feature sections, the tabbed "Leaders / Managers / Employees / HR teams" block and the podcast promo strip. Ink is #171a1b, a soft black with a faint green-blue cast, used for all headlines, body copy and the primary button fill. #524f4c (ink-muted) is the secondary text grey.

The primary action colour on the marketing site is the ink itself. The detected primary button has a #171a1b fill with white text and a #171a1b border; hover is the same ink at 70% alpha (#171a1bb3, measured in the hover state). Colour is saved for imagery: the purple field behind the hero screenshot and the orange photo backdrop carry the brand's saturated accents, which are photography and not tokens.

The Kaizen design system adds a product palette. In an official Kaizen Button story, measured with the extractor, the primary button fill is #0168b3 (action-blue) with white text, and the secondary button has #2f2438 (ink-plum) text on white with a #878792 (border-gray) 2px border. The Kaizen colour token file in the public repository (https://github.com/cultureamp/kaizen-design-system, packages/design-tokens/tokens/color.json) defines scales for purple, blue, green, yellow, red, orange and gray, where blue 500 is #0168b3, purple 800 is #2f2438 and gray 500 is #878792; those three values are the ones adopted here.

## Typography

Headlines use Tiempos, a serif, at weight 500: display 56px/68px, heading 32px/40px and subheading 24px/34px. The italic cut is also loaded and appears as emphasis inside headlines, for example "data-informed" in the feature section, underlined by hand. Body copy is Inter at 20px/30px weight 400, which is large for a marketing page and the most-used size on the page (2,365 weighted characters). Buttons use Inter 16px weight 500 on a 24px line, and navigation links use Inter 16px weight 400 on a 22px line.

Tiempos and Camper are licensed or bespoke faces; Inter is open source. If Tiempos is unavailable, any transitional or old-style serif with a similar contrast, such as Georgia (the Kaizen typography tokens themselves fall back to Georgia, serif for their Tiempos Headline display style), keeps the editorial tone. Camper is only used for the handwritten flourishes and should not be approximated with a generic script at body size.

The Kaizen typography token file (https://github.com/cultureamp/kaizen-design-system/blob/main/packages/design-tokens/tokens/typography.json) specifies Inter with Noto Sans, Helvetica and Arial fallbacks, paragraph body at 1rem/1.5rem and intro lede at 1.25rem/1.875rem, which matches the 20px/30px body measured on the marketing site.

## Layout

The page is a single centred column of full-width bands separated by generous vertical rhythm. The nav bar uses 14px vertical and 60px horizontal padding; nav links carry 8px 10px padding. Section content aligns to a left gutter of roughly 45px in the 960px-wide capture, and hero content is a two-column split: text left, a rounded product card right. The measured gap scale is dominated by 24px (48 occurrences), 16px (33), 6px (32) and 8px (28), with 60px for large section padding.

Feature sections alternate between plain canvas and large rounded cream panels. Inside a panel, a tab row sits on top, then a two-column body with copy on the left and an image-plus-floating-UI-card on the right, and finally a pair of circular arrow controls. Logo rows are evenly spaced in a single line with no borders. The chat widget "Ask Alix a question" floats at the bottom right and overlaps content, which is a floating overlay and not part of the layout grid.

## Elevation & Depth

Depth is almost flat. The measured card shadow is a single soft layer, rgba(23, 26, 27, 0.05) 0px 2px 20px 0px, with a larger 4px 40px variant at the same 5% ink, and a hairline rgba(0, 0, 0, 0.1) 0px 0px 2px 0px for small chips. Separation between regions is done mainly by background change, from #fefbf9 to #f6efea, not by borders or heavy shadows. Measured border colours are #ede7e3, a warm hairline, besides the ink-coloured outlines of the circular carousel buttons (#171a1b and its 30% alpha version #171a1b4d).

## Shapes

Shape language is round. Primary buttons are full pills (9999px radius), 54px tall with 14px 20px padding. Cards and cream panels use 24px radius; the measured radii on the page also include 32px (one element) and 6px (nine elements), without a verified mapping to specific components. The Kaizen product buttons use a 7px radius with a 2px border, 40px height and 6px 18px padding, so the product UI feels squarer than the marketing site. Photography is clipped into the same rounded rectangles as the cards, so imagery and UI share one corner logic.

## Components

Primary button: ink fill (#171a1b), white Inter 16px/500 label, pill radius, 54px tall; hover drops to 70% ink. The same button shrinks in the nav to a "Book a demo" pill. Link and nav items are plain Inter 16px text with no underline until hover, apart from inline text links such as "See what's new" and "Explore the series", which are underlined.

Cards: 24px-radius containers on cream or white with the 5% ink shadow, holding either a photograph with a headline or a product screenshot. Tabs are text-only with an ink underline on the active item. Carousel controls in the capture are two circles outlined in ink, one filled.

Kaizen buttons (from the official Button story, measured): primary is #0168b3 with white text, secondary is white with #2f2438 text and a #878792 border; both use 7px radius, 40px height and Inter 16px/500. Kaizen documents separate Button usage guidelines and API pages in its Storybook index.

## Design System Architecture

Culture Amp has a public design system called Kaizen. Its documentation is a Storybook site at https://cultureamp.design, whose story index lists Introduction, Releases, Guides (Layout and spacing, Tailwind, Tokens) and Components (Avatar, Badge, Button, Card, Checkboxes and many more) sections. The source is the MIT-licensed monorepo https://github.com/cultureamp/kaizen-design-system, whose repository description says it is Culture Amp's public design system documented at cultureamp.design; it contains a packages directory with a design-tokens package.

Tokens are platform-agnostic JSON (animation, border, color, layout, shadow, spacing, typography) published as @kaizen/design-tokens and consumed as CSS custom properties with literal fallbacks, for example var(--color-blue-500, #0168b3). The README at https://github.com/cultureamp/kaizen-design-system/tree/main/packages/design-tokens recommends using the CSS variables directly. Components are React, wrapped in a KaizenProvider, with a Tailwind package for utility classes.

The marketing site at cultureamp.com is a separate surface that does not consume Kaizen's visual defaults: it uses Tiempos plus Inter, black pills and cream panels. Treat Kaizen as the product-side system and the homepage tokens in this file's frontmatter as the marketing-side system.

## Do's and Don'ts

Do set headlines in Tiempos 500 and keep them to three or four lines with a generous 68px line-height at display size. Do use #171a1b rather than pure black for text and primary buttons. Do alternate #fefbf9 and #f6efea bands and round large containers to 24px. Do pair headlines with real human photography and product UI.

Do use the blue #0168b3 only for product-UI actions modelled on Kaizen, not on marketing pages.

Don't introduce a coloured marketing CTA; the primary button is black. Don't use sharp corners on cards. Don't add heavy drop shadows; the system tops out at 5% ink. Don't set the Camper script face in running text. Don't mix 7px Kaizen buttons into pill-button marketing layouts.

## Responsive Behavior

The extractor captured the site at 1280px desktop and 390px mobile widths. At desktop the hero is a two-column split; the announcement bar, nav and Book a demo pill sit in a single row. Nav horizontal padding is 60px on desktop and body copy remains 20px. No breakpoints are published in the sources opened for this file, and the behaviour of the two-column panels on mobile was not measured. Measure the 390px layout before specifying it. The primary button is 54px tall at desktop.

## Iteration Guide

When adding a page, start from canvas #fefbf9 and ink #171a1b. Write the headline in Tiempos 500 at 56px/68px, body in Inter 20px/30px, then place one black pill button with 14px 20px padding. Use #f6efea panels with 24px radius for secondary sections. Add imagery before adding colour. For product-style screens, switch to Kaizen: Inter, #0168b3 primary, #2f2438 and #878792 for secondary buttons, 7px radius. Re-measure with the extractor before adding any new value, and cite the Kaizen token file when you do.
