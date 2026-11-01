---
version: alpha
name: Medium
category: "News & Publishing"
description: "Medium's logged-out home is a one-screen editorial poster: a warm off-white #f7f4ed canvas, a gt-super serif headline at 120px/400 with -6.6px tracking, sohne sans text in #242424, near-black #191919 pill buttons, thin black rules and a green ink-print illustration; accent green #1a8917 is declared in its tokens."
colors:
  canvas: "#f7f4ed"
  page-body: "#ffffff"
  ink: "#242424"
  primary: "#191919"
  on-primary: "#ffffff"
  primary-hover: "#080808"
  ink-muted: "#6b6b6b"
  ink-headline: "#000000"
  accent: "#1a8917"
typography:
  display:
    fontFamily: gt-super, Georgia, Cambria, "Times New Roman", Times, serif
    fontSize: 120px
    fontWeight: 400
    lineHeight: 100px
    letterSpacing: "-6.6px"
  subheading:
    fontFamily: sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: sohne, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  pill: 9999px
spacing:
  s1: 8px
  s2: 16px
  s3: 20px
  s4: 24px
  s5: 25px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 46px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.pill}"
    padding: 8px 16px
    height: 38px
    borderColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  footer-link:
    textColor: "{colors.ink-muted}"
    typography: "{typography.body}"
---

# Medium

## Overview

Medium's logged-out home page (https://medium.com/, title "Medium: Read and write stories.") is a single 800px screen designed like a book cover or poster. The canvas is a warm paper tone, `#f7f4ed`. At the top left sits the black serif "Medium" wordmark; at the right, four quiet text links (Our story, Membership, Write, Sign in) and a black "Get started" pill. Below a hairline rule, the giant serif headline "Human stories & ideas" fills the left half at 120px with tight negative tracking. It is followed by one sans-serif line, "A place to read, write, and deepen your understanding", and a black "Start reading" pill.

The right half carries the only colour: a bright green, hand-printed illustration. A five-petal flower, a hand writing with a quill on a green block, scattered black stars and a geometric diagram with lettered points form a collage that reads as old engraving meeting risograph print. A second rule separates the centred footer links (Help, Status, About, Careers, Press, Blog, Store, Privacy, Rules, Terms, Text to speech).

Everything is restrained: no cards, no images of people, no feeds, no gradients. The page is typographic, with one illustration and one action. The voice matches: four words of headline, nine words of subline.

## Colors

- **Canvas `#f7f4ed`.** Warm off-white paper, the largest measured background (1,121 units) and 68% of the capture's pixels.
- **Page body `#ffffff`.** The `<body>` element's own computed background, covered by the cream sections.
- **Ink `#242424`.** Nav links and the subline (84 characters). The wordmark SVG is filled with the same `#242424`.
- **Ink headline `#000000`.** The 120px serif headline is pure black.
- **Primary `#191919`.** Near-black fill and border of both pill buttons. The design tokens name it `--color-bg-brand-primary: light-dark(#191919, #ffffff)`.
- **On-primary `#ffffff`.** Button text.
- **Primary hover `#080808`.** The measured hover fill (`--color-bg-brand-primary-hover`).
- **Ink muted `#6b6b6b`.** Footer links (67 characters).
- **Accent `#1a8917`.** Medium green, declared as `--color-fg-accent-primary` and `--color-border-accent-primary`, with a hover of `#156d12` and tints `#bbdbba`, `#d2e7d1` and `#e8f3e8`. No rendered UI element on this screen uses it; the illustration's green is part of the image.

Every colour token is declared with `light-dark()`, so the CSS defines a dark theme as well. Only the light scheme was measured.

## Typography

Two proprietary families are loaded:

- **gt-super**, a serif, at weight 400 only: **display** is 120px with a 100px line height (tighter than the size) and -6.6px tracking (-5.5%). The headline breaks over two lines and dominates the screen.
- **sohne**, a sans-serif, at 400 for all UI text. **Subheading** is 22px/28px (the subline). **Button** is 20px/28px ("Start reading"). **Link** is 14px/20px (nav and "Get started"). **Body** is 13px/20px (the footer links, the most frequent size on this sparse screen).

Only weight 400 was measured anywhere on the page; hierarchy comes from size and from the serif-versus-sans contrast, never from bold. The page also declares `charter`, `source-serif-pro`, `source-code-pro`, `noe`, `fell` and `opendyslexic` font faces for other views. Fallbacks are declared in the stack: Georgia/Cambria/Times for the serif, and Helvetica Neue/Helvetica/Arial for the sans.

## Layout

Measured at 1280px wide; the entire page is 800px tall, with no scroll. There are three bands: the header and hero (0–417, cream), the subline and button band (417–587), and the lower cream band with the footer (587–800). The headline block is left-aligned on a wide left margin, and the illustration occupies the right third, bleeding off the right edge. Two thin full-width black rules frame the hero, one under the header and one above the footer, like a printed page. The footer links are centred in a single row. The measured paddings are 8px, 16px, 20px, 24px and 25px.

## Elevation & Depth

There is none: no box shadows were measured, and there are only three background colours. The page is entirely flat, like print. Depth comes only from the illustration's overlapping shapes and the contrast between huge serif type and empty paper. The CSS carries shadows for other views (for example `0 0 4px 1px rgba(0,0,0,.08)`), but nothing on this screen uses them.

## Shapes

There are only two shapes: rectangles and pills. Both buttons are full pills; their computed radii (1980px and 1386px) are effectively infinite. Everything else is square: no cards, no rounded images. The CSS declares small radii (2px, 3px, 4px) and 36–38px for elements in other views. The thin horizontal rules are the main structural shape on the page.

## Components

- **Primary pill.** "Start reading": `#191919` fill and a `1px solid #191919` border, white sohne 20px/400, 8px 20px padding, 46px tall. Hover deepens the fill to `#080808` and sets the border to `rgb(36, 36, 36)`.
- **Nav pill.** "Get started": the same colours at 14px/20px, 8px 16px padding, 38px tall.
- **Nav link.** `#242424` sohne 14px, no underline: Our story, Membership, Write, Sign in.
- **Headline.** gt-super 120px/100px, -6.6px tracking, pure black.
- **Footer link.** `#6b6b6b` sohne 13px/20px in a centred row.
- **Rules.** Full-width thin black lines under the header and above the footer.

## Design System Architecture

No public design-system or brand page could be read for this file. https://medium.com/about and https://press.medium.com/ both returned HTTP 403 to the fetch tool (errors recorded in SOURCES.json). The de facto system is visible in the shipped CSS. `:root` declares 82 semantic tokens, each written as `light-dark(light, dark)` and named by role: `--color-bg-brand-primary`, `--color-bg-brand-primary-hover`, `--color-fg-accent-primary`, `--color-border-brand-primary`, `--color-bg-neutral-tertiary`, `--color-bg-error-primary`, plus syntax-highlighting (`--color-syntax-heading`) and social (`--color-fg-social-linkedin`) tokens. Class names are short generated atoms (`bu bv bw` on the logo SVG). Fonts are served from `glyph.medium.com` as subset files.

## Do's and Don'ts

**Do**
- Use the warm paper canvas `#f7f4ed`, not pure white, for brand pages.
- Pair an enormous gt-super serif headline (400 weight, tight negative tracking) with small sohne sans text.
- Keep actions as near-black `#191919` pills with white text.
- Frame the page with thin black rules instead of boxes or shadows.
- Use one bold, flat illustration in green for colour.

**Don't**
- Don't bold anything; the measured weight is 400 throughout.
- Don't add cards, shadows or rounded containers.
- Don't use the accent green for buttons; the brand action colour is near-black.
- Don't crowd the screen; one headline, one subline and one button is the whole composition.

## Responsive Behavior

Not measured. The 390px mobile pass reached a bot-protection page ("Sorry, you have been blocked") instead of Medium, so no mobile values are recorded and no display-mobile token is given. No media queries were captured in the stylesheet corpus (`cssExtras.mediaQueries` is empty). Desktop values above come from the 1280px pass.

## Iteration Guide

1. Start with `#f7f4ed`, a black serif wordmark at the top left, and quiet `#242424` sohne 14px nav.
2. Set the headline in gt-super (or Georgia, its first declared fallback) at 120px/100px, -6.6px tracking, black, weight 400.
3. Add one 22px sans subline and a `#191919` pill (8px 20px, 46px tall).
4. Place one flat green illustration at the right, bleeding off the edge.
5. Draw thin full-width rules under the header and above the footer; centre the footer links in `#6b6b6b` 13px.
6. Remove anything else: no cards, no shadows, no bold.
