---
version: alpha
name: Seyed Mohammad Javad Bathaei Portfolio
category: "Design Systems"
description: A one-person developer portfolio at javadbat.github.io, built on a pale blue gradient canvas with a single deep-blue brand ink (#00448c), a high-contrast display serif ("title-font", 700, 40px, 1.6px tracking) for the name, a rounded text face for everything else, 24px-radius grey-blue project cards and one soft, inset-shadowed pill button.

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#0849a2"
  surface-card: "#cdd8e3"
  brand-blue: "#00448c"
  ink-grey: "#888888"
  ink-navy: "#020f22"
  ink-muted: "#929292"
  hairline: "#6f7988"

typography:
  display:
    fontFamily: title-font
    fontSize: 40px
    fontWeight: 700
    letterSpacing: 1.6px
  display-mobile:
    fontFamily: title-font
    fontSize: 22.4px
    fontWeight: 700
    letterSpacing: 1.6px
  heading:
    fontFamily: text-font, fa-font, sans-serif
    fontSize: 24px
    fontWeight: 400
  subheading:
    fontFamily: text-font, fa-font, sans-serif
    fontSize: 24px
    fontWeight: 600
  link:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px

rounded:
  xs: 16px
  sm: 24px
  pill: 9999px

spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 24px
  s9: 32px
  s10: 64px

components:
  button-secondary:
    textColor: "{colors.brand-blue}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
    height: 48px
    boxShadow: oklch(0.99 0.02 257) -5.6px -5.6px 4px -4px inset, oklch(0.99 0.01 257) -5.28px -16px 12px -12px inset
  link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 0px 0px 32px
---

## Overview

The measured site is the personal portfolio of Seyed Mohammad Javad Bathaei, published at javadbat.github.io. It is not the JB Design System documentation: the page presents the designer-developer himself (his name, the line "Creative Front-end Web Developer", a "Contact Me" button), then a "Products I've worked on" block that lists three items (the JB Design System, Agileverse and a Form Builder), a work-experience list, a skills list and an invitation to leave feedback. The first screen is nearly empty by design. A large two-line name sits in the centre of a vertical gradient that runs from a pale sky blue at the top to white at the bottom, over a faint grid of dots, with a small "Scroll for More" cue at the very bottom.

The personality is calm, confident and monochrome. Almost everything that carries meaning is one deep blue (#00448c, with #0849a2 as the lighter variant the site itself names `--p-color-light`). Black (#000000) is reserved for body copy on the grey-blue project cards. There is no second accent colour on the page; hierarchy comes from size, weight and the contrast between a heavy serif for the name and a light rounded sans for the supporting lines.

Voice is first-person and plain. The feedback paragraph speaks directly to the reader ("by giving me a Feedback you help me..."), and the section titles read like sentences ("Products I've worked on:") rather than labels.

## Colors

The canvas token is #ffffff, the page's measured background; on screen the first viewport is a gradient whose dominant tones are near-white (#fefeff) and pale blue (#ebf4ff), so treat the canvas as "white fading up into sky blue", never as a flat fill.

- **primary (#0849a2)** is the colour of the subtitle "Creative Front-end Web Developer" and is the site's own `--p-color-light` custom property.
- **brand-blue (#00448c)** is the site's `--p-color`; it colours the name, the section headings, the button label and links. It is the darkest saturated blue and carries most of the identity.
- **surface-card (#cdd8e3)** is the fill of the project cards, declared by the site as `--light-grey`.
- **ink (#000000)** is the most-read text colour, used on card copy and the feedback paragraph.
- **ink-navy (#020f22)**, **ink-grey (#888888)** and **ink-muted (#929292)** are secondary text tones measured on the page; #888888 is the site's `--mid-grey`.
- **hairline (#6f7988)** is the measured border colour.

The page also defines a large set of `--jb-*` custom properties in OKLCH (primary, secondary, red, yellow, green, neutral ramps). Those belong to the JB Design System's token vocabulary and are not what the portfolio visibly paints, so no values are taken from them here.

## Typography

Two families are loaded through `@font-face`: "title-font" (a variable face spanning weights 401 to 900) and "text-font", plus "fa-font" (100 to 900), which appears as a fallback in the text stack. The page language is English.

- **display**: title-font, 40px, weight 700, letter-spacing 1.6px, used for the two-line name. On a 390px mobile viewport the same role shrinks to 22.4px (display-mobile) with the same tracking.
- **heading**: text-font stack, 24px, weight 400, used for the subtitle line.
- **subheading**: same stack, 24px, weight 600, used for section titles.
- **link / button**: Arial, 16px, weight 600, line-height 16px, used for "Contact Me". Arial here is a browser fallback on a button, not a brand face.

Body paragraphs are also 24px, which is unusually large; the page reads as a poster rather than a document. The name in the capture is rendered much larger than 40px in a hero lockup, but only the measured h1 value is tokenised.

## Layout

The page is a single centred column on a wide desktop canvas. The hero stacks name, subtitle and button vertically on the centre axis, then leaves a long empty stretch before the scroll cue. Below it, project cards sit in a row inside a content block, with section headings left-aligned to the block. Spacing tokens follow a small ladder: 1px, 2px, 4px, 6px, 8px, 12px, 16px, 24px, 32px and 64px. Card bottom padding is 32px; the button uses 8px by 24px.

Density is low: generous white space, one idea per band, no sidebar and no persistent navigation (no nav element was detected).

## Elevation & Depth

Depth is soft and tactile instead of hard-edged. The Contact Me button uses two inset shadows in a pale blue-white (oklch 0.99 at hue 257) offset to the lower-right inside the pill, over a layered light-blue gradient, so it reads like a glassy pebble. Cards have no shadow; they separate from the background by fill alone (#cdd8e3 on the pale canvas). The only other depth cue is the vertical background gradient and the dot grid.

## Shapes

Three radii are used: 16px (xs; the site's `--jb-radius`), 24px (sm; the card radius and `--jb-radius-xl`) and a full pill (9999px) for the button. Corners are always generous; there are no square containers. The pill button's measured radius is far larger than its height, so it renders as a complete capsule.

## Components

- **Button (secondary, "Contact Me")**: text brand-blue, Arial 16px weight 600, pill radius, padding 8px 24px, height 48px, layered light-blue gradient background with inset highlights. It is the only button in the first view and acts as the page's call to action even though the extractor classified it as secondary because it has no solid fill.
- **Link**: brand-blue, same Arial 16px weight 600 style.
- **Card**: surface-card fill, black text, 24px radius, padding 0px 0px 32px, containing a bold 24px title, a one-line description and an image area. Three cards represent the JB Design System, Agileverse and the Form Builder.

## Design System Architecture

No public design system documents this portfolio itself. The author does publish a separate project, the JB Design System, a monorepo of web-component UI packages with CSS custom-property theming (https://github.com/javadbat/design-system). Its Storybook at https://javadbat.github.io/design-system was opened, but only returned the title "storybook", so nothing is taken from it. The portfolio's stylesheet exposes `--jb-*` variables (breakpoints at 640px, 768px, 1024px and 1280px, control heights, radii) alongside its own `--p-color`, `--p-color-light`, `--light-grey` and `--mid-grey`. The visible brand colours come from the latter group. The de-facto system is therefore a small set of hand-named custom properties on top of a shared component vocabulary, not a documented token package.

## Do's and Don'ts

- Do keep one dominant blue (#00448c) for identity text and use #0849a2 only for the subtitle tier.
- Do let the gradient and dot grid carry the hero; keep the name as the sole heavy element.
- Do round everything: 16px, 24px or pill.
- Don't introduce a second accent hue; the page has none.
- Don't use the JB Design System's OKLCH palette (red, yellow, green) as portfolio colours; they are not painted on this page.
- Don't treat Arial as brand type; it is the button's fallback.
- Don't add hard shadows to cards; depth is inset and soft.

## Responsive Behavior

The display size drops from 40px to 22.4px at a 390px viewport while keeping 1.6px tracking, so the name stays on two lines and remains the largest element. The stylesheet declares breakpoints at 640px, 768px, 1024px and 1280px as custom properties. No mobile card measurement was taken, so card behaviour at narrow widths is not specified here. Touch targets: the button height of 48px is comfortably tappable.

## Iteration Guide

1. Start from the canvas gradient (white to pale blue) and the dot grid before adding content.
2. Set the name in title-font 700 with 1.6px tracking in #00448c.
3. Use the text-font stack at 24px for every supporting line; vary weight (400 versus 600) rather than size.
4. Build cards at 24px radius on #cdd8e3 with black copy.
5. Add the pill button last, with inset pale-blue highlights and no border colour.
6. Check any new colour against the measured set above; if it is not there, describe it qualitatively instead of inventing a hex.
