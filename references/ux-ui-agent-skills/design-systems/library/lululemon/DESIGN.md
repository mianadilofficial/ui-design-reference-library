---
version: alpha
name: lululemon
category: "Fashion & Apparel"
description: "lululemon's US shop: Saans 400/500 on a #ffffff canvas with warm near-black #140f0f ink, 72px and 64px light-weight headlines with -4% tracking, fully rounded 44px pill buttons in #140f0f or the pale #f4f3f2 hero variant, #f9f9f8 subdued surfaces and the #c8102e accent red from the 'zest' design tokens."
colors:
  canvas: "#ffffff"
  page-body: "#fafafa"
  ink: "#140f0f"
  primary: "#140f0f"
  on-primary: "#ffffff"
  primary-hover: "#433f3f"
  hero-button: "#f4f3f2"
  hero-button-hover: "#efeeec"
  surface-subdued: "#f9f9f8"
  ink-disabled: "#919191"
  ink-subdued: "#757575"
  hairline: "#140f0f80"
  accent-red: "#c8102e"
typography:
  display:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 72px
    fontWeight: 400
    lineHeight: 79.2px
    letterSpacing: "-4%"
  heading:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 70.4px
    letterSpacing: "-4%"
  heading-medium:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-2%"
  subheading:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 31.2px
  body:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
  link:
    fontFamily: Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  xs: 8px
  sm: 36px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
  s11: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 44px
  button-hero:
    backgroundColor: "{colors.hero-button}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 20px
    height: 44px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 0px 12px
  footer:
    textColor: "{colors.canvas}"
---

# lululemon

## Overview

The measured site is lululemon's US e-commerce home at https://shop.lululemon.com/ (title "technical apparel + athletic shoes | lululemon"), captured at 1280px wide and 11,144px tall. The page is a sequence of large photographic hero modules, each with a short, conversational headline set in white over the image, alternating with white product rails and category strips. Headlines in the capture read "Emphasis on comfort.", "New and trending", "You missed your chance to dance.", "Shop by colour", "Covered for every occasion.", "What's new? So glad you asked.", "Fall 2026: Drop 02", "Gear built to take on more.", "Get a move on most-loved styles.", "Shop popular categories" and "Catch the highlights". The tone is friendly and a little playful, sentence case, punctuated with full stops and question marks. Body copy talks about fabric by name ("our world-famous Nulu™ fabric") and seasonal drops ("The latest fall drop is here: find fresh inspiration to move").

Photography is the colour source: athletes in studio and street settings, motion blur, warm sand and concrete tones, and product cut-outs on light grey. The interface around it is almost monochrome: a warm near-black #140f0f, white, and a family of warm off-whites (#fafafa, #f9f9f8, #f4f3f2). Buttons are fully rounded pills, the typeface is the grotesque Saans in only two weights, and headlines are large but light (400), which gives the page a calm, editorial rhythm rather than a loud sports-retail one.

## Colors

- **canvas #ffffff** — the dominant surface behind product rails; `--zest-color-surface-default` is #fff.
- **page-body #fafafa** — measured body background (`desktop.roles.canvas`); the legacy variable `--lll-color-surface-alternative` is #fafafa.
- **ink #140f0f** — the most-read text colour and `--zest-color-text-default`. It is a warm near-black, not pure black.
- **primary #140f0f** — the filled pill CTA ("Shop Women's New Styles", "Start Here") and `--zest-color-interactive-primary-default`. **on-primary #ffffff** is its label colour.
- **primary-hover #433f3f** — `--zest-color-interactive-primary-hover` from shipped CSS; hover was not exercised by the extractor.
- **hero-button #f4f3f2** — the pale pill used on top of photography ("Shop Women's What's New", "Shop Women's Coats & Jackets"); matches `--zest-color-interactive-hero-default`, with **hero-button-hover #efeeec**.
- **surface-subdued #f9f9f8** — measured background area and `--zest-color-surface-subdued`.
- **ink-subdued #757575** — secondary text, `--zest-color-text-subdued`; **ink-disabled #919191** is `--zest-color-text-disabled`.
- **hairline #140f0f80** — measured border colour (ink at 50% alpha), used for outlines and dividers.
- **accent-red #c8102e** — `--zest-color-text-accent` and `--zest-color-border-accent`; this is the red reserved for accent text and borders. It was not measured as a large rendered area on the home page.

The zest variables also define a secondary palette (daydream #c0ddff, espresso #2b1f1e, lemonade #f4ff8e, mossy #524a43, rosewood #dc6d85, sequoia #73273d, wilderness #142a0e, zest #f3fed7) and status colours (error text #d20014, success #0f752f, info #2966b0, warning #b15115). These are declared values not seen as rendered fills on the measured page, so they are context, not tokens.

## Typography

The whole page is set in **Saans** (`Saans, "Helvetica Neue", Helvetica, Roboto, sans-serif`), loaded at 400 and 500. The older **Calibre** face is also loaded (400/500) and referenced by `--lll-type-*` variables, and a serif **KH Giga** appears in the `--zest-type-heading-mobile-quote` variable; neither was measured on rendered home-page text.

- **display** — 72px / 400 / 79.2px, letter-spacing -4%. The hero headline ("Emphasis on comfort.") in white.
- **heading** — 64px / 400 / 70.4px, -4%, for section titles such as "New and trending" in #140f0f.
- **heading-medium** — 40px / 400 / -2% tracking, matching `--zest-type-heading-medium` (2.5rem/1.2, i.e. 48px line height).
- **subheading** — 24px / 400 / 31.2px, hero supporting copy.
- **body** — 18px / 400 / 25.2px.
- **button** — 14px / 500 / 14px, the `--zest-type-label-button` value (500 0.875rem/1). Navigation links use the same 14px/500.
- **link** — 12px / 400 / 16.8px, small text links like "Shop Fall 2026".

Headline weight stays at 400 even at 72px; emphasis comes from size and negative tracking, not boldness. Weight 500 is reserved for interactive labels.

**Substitute:** Saans is a commercial typeface. Its own CSS fallback stack is Helvetica Neue, Helvetica, Roboto; use that stack with the same weights and tracking.

## Layout

At 1280px the content runs between x 40 and x 1163, so the page uses 40px side margins. The header shows 9 visible top-level links ("New & Featured", "Women", "Men", "Accessories", "Outerwear", "Activity", "We Made Too Much" among them) with 12px horizontal padding, followed by a search field and account and bag icons. Product rails show up to 8 columns in a row (`maxCardColumns` 8), while category strips such as "Shop by colour" and "Shop popular activities" show six tiles with a small label under each. Hero modules are full-bleed photographs with the headline anchored bottom-left or centred and one or two pill buttons beneath.

Spacing follows the zest scale, defined in rem: 0.25rem (4px), 0.5rem (8px), 0.75rem (12px), 1rem (16px), 1.25rem (20px), 1.5rem (24px), 2rem (32px), 2.5rem (40px), up to 16rem. The measured gaps (4, 6, 8, 12, 16, 20, 24, 32, 40px) all sit on that scale except the 6px tile gap. Small "Women / Men" toggles sit at the right of category headings.

## Elevation & Depth

The page is flat. The only measured shadow is `rgba(20, 15, 15, 0.5) 0px 0px 0px 1px inset`, a 1px inset ring used as an outline instead of a border. Depth comes from photography and from translucent overlays measured as #00000066, #140f0fa8 and #efeeeccc backgrounds; zest also declares `--zest-color-surface-overlay-50` (rgba(20,15,15,.5)) and a blur effect `--zest-effect-blur-large: 30px` for frosted panels. Product tiles carry no shadow and no border.

## Shapes

Buttons are full pills: the measured CTA radius is 1000px (`--zest-radius-1000` 62.5rem), stored here as `pill`. Split pills appear too (measured `1000px 0px 0px 1000px` and `0px 1000px 1000px 0px`), which is how segmented controls are joined. Other measured radii are 8px (`--zest-radius-100`), 36px and 50% for circular carousel arrows. Images and product tiles are square-cornered. The zest radius scale runs 0, 0.13rem, 0.3rem, 0.5rem, 2rem, 2.5rem and 62.5rem.

## Components

- **button-primary** — #140f0f fill, #ffffff 14px/500 label, 1000px radius, 12px 20px padding, 44px tall; measured on "Shop Women's New Styles" (208px wide).
- **button-hero** — same geometry with a #f4f3f2 fill and #140f0f label, used on photographs; measured on "Shop Women's What's New".
- **link** — 12px/400 white text link over imagery.
- **nav-link** — 14px/500 #140f0f labels with 0 12px padding, 20px tall.
- **footer** — white 14px/500 link text in four columns ("My Account", "Membership Program", "Sign In", "Register", "Order Status"…); in the capture the footer is a near-black band with app-store badges and a newsletter prompt ("New to lululemon?"). The extractor recorded the footer wrapper's own background as #ffffff, so the dark fill is described here from the capture only.
- **segmented toggle** — the "Women / Men" switch beside section titles uses the split-pill radii.

## Design System Architecture

There is no public lululemon design-system site; the corporate site (https://corporate.lululemon.com/) links only to a newsroom, press releases and a media contact, with no brand guidelines or asset downloads. The shipped CSS on https://shop.lululemon.com/ does reveal the internal system. Two namespaces coexist on `:root`:

- **`--zest-*`** — the current system. It defines semantic colours (`--zest-color-text-default`, `--zest-color-surface-subdued`, `--zest-color-interactive-primary-default`, `-hero-`, `-outlined-`, `-tertiary-`, `-tertiary-tonal-` each with default/hover/disabled), a named secondary palette, a rem spacing scale named in hundreds (`--zest-spacing-100` = 0.5rem … `-3200` = 16rem), a radius scale (`--zest-radius-0` … `-1000`), layers and blur effects, and complete type shorthands (`--zest-type-heading-large: 400 4rem/1.1 "Saans"…`, `--zest-type-label-button: 500 0.875rem/1 "Saans"…`) including tablet and mobile heading variants.
- **`--lll-*`** — an older layer built on Calibre at weight 600 (`--lll-type-heading-large: 600 3rem/3rem "Calibre"…`) with its own interactive and text colours. Measured rendered text uses Saans, so zest is the active layer.

Class names are CSS-module hashes (`navbar_brandIcon__cB2a4`, `dialog-base_dialog__lIz8B`), so the variables, not the class names, are the stable contract.

## Do's and Don'ts

- Do use #140f0f instead of pure black for text and filled buttons.
- Do keep headlines at weight 400 with -4% tracking; let size do the work.
- Do use pill buttons at 44px with 12px 20px padding and 14px/500 labels.
- Do switch to the #f4f3f2 hero button when the button sits on a photograph.
- Do write headlines as short, friendly sentences with punctuation ("So glad you asked.").
- Don't use bold display type; weight 500 is the maximum measured.
- Don't put shadows on product tiles; use the 1px inset ring when an outline is needed.
- Don't spread the #c8102e accent across large areas; it is defined for accent text and borders.
- Don't introduce the secondary palette colours as UI chrome without measuring where the site uses them.

## Responsive Behavior

The extractor's 390px mobile pass did not record page content: it captured only a 93px #f0f0f0 band and an empty 751px #ffffff band, with 13px as the sole text size and no headings, buttons or navigation. Mobile layout is therefore not measured. The shipped stylesheets declare breakpoints at min-width 768px and 992px (over a thousand rules each) with matching max-width 767.01px and 991.01px queries, and the zest variables include tablet and mobile heading sizes such as `--zest-type-heading-tablet-extra-large: 400 4rem/1.1` and `--zest-type-heading-mobile-large: 400 2.25rem/1.1`. How those apply on the home page was not measured.

## Iteration Guide

1. Start from #ffffff with #140f0f ink in Saans 400; use #fafafa or #f9f9f8 for quiet sections.
2. Set hero headlines at 72px/79.2px and section titles at 64px/70.4px, both -4% tracking and weight 400.
3. Use `button-primary` on light surfaces and `button-hero` on photography; never square the corners.
4. Keep 40px page margins at 1280px and choose gaps from the zest scale (8, 12, 16, 24, 32, 40px).
5. Write short, sentence-case headlines with a light, conversational voice.
6. Use #757575 for secondary text and #140f0f80 for hairlines.
7. Reserve #c8102e for accents; add zest status colours only for actual status messages.
8. Re-measure on a working mobile pass before documenting phone layouts.
