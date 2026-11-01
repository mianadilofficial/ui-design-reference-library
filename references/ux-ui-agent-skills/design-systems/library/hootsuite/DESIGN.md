---
version: alpha
name: Hootsuite
category: "Product & SaaS"
description: "Hootsuite's social-media-management site: Montserrat throughout (35.84px/600 hero, 36px/700 section heads, 16px/500 body), Nocturn #012b3a ink on white and #f2f4f5 bands, hyperlink-blue #1f60c9 buttons with 4.736px and 8px corners, Saffron #e03035 accents and soft navy-tinted shadows."
colors:
  canvas: "#ffffff"
  page-largest: "#f2f4f5"
  ink: "#012b3a"
  primary: "#1f60c9"
  on-primary: "#ffffff"
  text-black: "#000000"
  ink-deep: "#0b2735"
  saffron: "#e03035"
  ink-muted: "#012b3ac7"
  hairline: "#bfcace"
  primary-hover: "#759cdb"
typography:
  display:
    fontFamily: Montserrat, -apple-system, "system-ui", sans-serif
    fontSize: 35.84px
    fontWeight: 600
    lineHeight: 39.639px
  hero-eyebrow:
    fontFamily: Montserrat, -apple-system, "system-ui", sans-serif
    fontSize: 12.9024px
    fontWeight: 500
    lineHeight: 15.4829px
    letterSpacing: 0.387072px
    textTransform: uppercase
  heading-mobile:
    fontFamily: Montserrat, "Montserrat Fallback", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 30px
    letterSpacing: "-0.36px"
  heading:
    fontFamily: Montserrat, "Montserrat Fallback", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 41.4px
  subheading:
    fontFamily: Montserrat, "Montserrat Fallback", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 32.2px
  body:
    fontFamily: Montserrat, "Montserrat Fallback", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 25.6px
  button:
    fontFamily: Montserrat, -apple-system, "system-ui", sans-serif
    fontSize: 13.696px
    fontWeight: 600
    lineHeight: 21.9136px
    letterSpacing: 0.27392px
  button-nav:
    fontFamily: Montserrat, "Montserrat Fallback", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 700
    lineHeight: 17.5px
    letterSpacing: 0.035px
  link:
    fontFamily: Montserrat, "Montserrat Fallback", "Helvetica Neue", Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 17.5px
    letterSpacing: 0.035px
rounded:
  xs: 2px
  sm: 2.5px
  md: 4.74px
  lg: 6px
  xl: 8px
  cta: 4.74px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.79px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 9.6px
  s7: 10px
  s8: 12px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    height: 64px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-nav}"
    rounded: "{rounded.xl}"
    padding: 12px 16px
    height: 42px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.xl}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
---

## Overview

Hootsuite (https://www.hootsuite.com/) sells a social media management suite to marketing teams and enterprises, and its home page reads as a confident, data-forward B2B site. The hero is a full-bleed photograph of a smiling person holding a phone, overlaid with floating product chips ("What's trending in footwear right now?") and a left-aligned white headline: an uppercase eyebrow "RATED #1 IN SOCIAL MEDIA MANAGEMENT" over "Social can be chaotic. Hootsuite keeps you calm.", where the second word cycles through "chaotic / complicated / risky / sloppy / noisy" in bold. Two buttons follow: a solid blue "Start your free trial" and a white "Request a demo".

Below the hero comes a greyscale customer logo strip (Adobe, Clorox, adidas, Longchamp, Nestlé), a three-column value row with line icons, a light grey promotional band for a virtual event, a stats row with large red numbers (46%, $1.5m, 31%), then alternating image-and-text feature rows ("Plan, schedule, and publish — all in one place", "Respond to social media messages and comments from one inbox"). The right half of the page continues with competitor analysis, AI automation, a G2 award band, a "Why Hootsuite?" three-up, a review carousel, a closing CTA band with a photo, and a light grey footer.

The voice is direct marketing copy in sentence case with outcome claims ("Make better decisions, faster", "One suite. Every social workflow."). The capture also shows a cookie notice and a chat assistant window over the hero; both are third-party overlays and are not part of the design described here.

## Colors

The shipped CSS names Hootsuite's palette, and the measured colours match it.

- **canvas #ffffff** — the main page background, about 60% of the capture.
- **page-largest #f2f4f5** — `--color-nocturn5`, the light grey of promotional bands, the G2 band, the closing CTA band and the footer. By DOM area it is the largest background.
- **ink #012b3a** — `--color-nocturn`, a very dark teal-navy used for nearly all text. Hootsuite does not use black for body copy.
- **ink-muted #012b3ac7** — Nocturn at about 78% alpha for secondary text.
- **ink-deep #0b2735** — a darker text value measured on a few elements.
- **text-black #000000** — measured on 664 characters; it is a minor text colour next to Nocturn's 8,573.
- **primary #1f60c9** — `--color-blue-hyperlink`, the fill of every "Start your free trial" button, with **on-primary #ffffff**. On hover it lightens to **primary-hover #759cdb** (`--color-blue-hyperlink-hover`).
- **saffron #e03035** — `--color-saffron`, the red of the owl logo, the "#1" in the G2 headline and the large stat numbers.
- **hairline #bfcace** — `--color-nocturn25`, the most common border colour.

The CSS also carries a wider palette not prominent on the home page: Spruce #007978, Navy #213977, Lumen dark #7E48EC, a Nocturn ramp (#41606B, #687F87, #80959C, #D9DFE1, #F7F9F9), and gradients such as `--color-innovation-gradient` (Saffron → #7600B8 → Nocturn) and `--color-owlygpt-gradient`.

## Typography

One family carries the whole site: **Montserrat**, loaded as a variable font (100–900) with a `Montserrat Fallback` metric face; `--font-montserrat` declares it. Weights are named in CSS: `--font-weight-light` 400, `--font-weight-normal` 500, `--font-weight-heavy` 600, `--font-weight-bold` 700. Note that "normal" body text is 500, not 400.

- **display** — the hero headline, probed at 35.84px / 600 / 39.639px in white; the cycling words inside it compute at weight 700.
- **hero-eyebrow** — the h1 element's own uppercase eyebrow line: 12.9024px / 500 / 15.4829px with 0.387072px tracking. The extractor records this as the h1 role because the h1 element starts with it.
- **heading** — 36px / 700 / 41.4px for section titles ("Strategize, organize, and simplify social media marketing").
- **subheading** — 28px / 700 / 32.2px for h3s ("18 years and 25 million users").
- **body** — 16px / 500 / 25.6px, the dominant size on the page.
- **button** — 13.696px / 600 / 21.9136px, 0.27392px tracking, for the hero buttons; **button-nav** — 14px / 700 / 17.5px for the nav button; **link** — 14px / 600 / 17.5px for text links.

Stat numbers measure 64px. An `Intel One Mono` family is declared in `--font-intel-one-mono`. Montserrat is a free Google Font, so no substitute is needed.

## Layout

At a 1280px viewport the page is 7,986px tall. The header is 75px tall and white, with the Hootsuite logo at left, Products, Integrations, Industries, Resources (with chevrons), Pricing and Enterprise, and "Sign in" plus a blue "Start your free trial" at right; six header links are visible. Sections are centered with generous white space. Feature rows alternate image-left and image-right in two columns; the value row and "Why Hootsuite?" use three columns; stats use three columns.

The most frequent gap is 16px, followed by 8px and 12px, with a large 65px gap between some row items. Paddings cluster at 16px, 18px, 24px, 20px and 40px. The CSS defines a `--spacing-*` scale in 0.25rem steps (`--spacing-1` 0.25rem, `--spacing-4` 1rem, `--spacing-6` 1.5rem, `--spacing-12` 3rem, `--spacing-15` 3.75rem).

## Elevation & Depth

Shadows are navy-tinted rather than black. The CSS defines five: `--shadow-10` (2px 3px 10px rgba(1,43,58,0.1)), `--shadow-20` (0px 5px 18px rgba(1,43,58,0.14)), `--shadow-30` (5px 5px 20px rgba(1,43,58,0.12)), `--shadow-40` (5px 5px 25px rgba(1,43,58,0.15)) and `--shadow-50` (2px 5px 40px rgba(1,43,58,0.15)). On the home page the measured shadows are `rgba(0, 0, 0, 0.15) 2px 2px 10px 0px` on five elements and a 1px Nocturn inset ring (`rgb(1, 43, 58) 0px 0px 0px 1px inset`) on five elements. The product illustrations sit on white cards over light grey, which gives most of the depth.

## Shapes

Corners are small. 8px is by far the most common radius (31 elements) and is used on nav buttons, text-link buttons and cards; the hero CTA uses 4.736px (`rounded.cta`); 6px, 2.5px and 2px appear on smaller UI. Round elements (50%) are avatars and carousel controls. There are no pill-shaped buttons.

## Components

- **Primary button (hero)** — #1f60c9 fill, white Montserrat 13.696px/600 label, 4.736px radius, 64px tall. Hover lightens the fill to #759cdb.
- **Nav button** — #1f60c9, white 14px/700 label, 8px radius, 12px 16px padding, 42px tall; it also lightens to #759cdb on hover.
- **Secondary button on photo** — white button with Nocturn text ("Request a demo").
- **Outlined button** — white with a thin Nocturn outline and Nocturn text ("More about us", "Learn more", "Explore integrations").
- **Text link** — Nocturn 14px/600 "Learn more" under each feature row.
- **Stat block** — a Saffron number at 64px, a short Nocturn description and a greyscale customer logo.
- **Review card** — white card with portrait, five red stars, a bold quote title and body text, inside a carousel with dot pagination.
- **Footer** — #f2f4f5 background, Nocturn text, six link columns (About, Plans, Guides, Free tools, Resources, Support), app store badges and social icons.

## Design System Architecture

Hootsuite publishes a logo page, "Hootsuite Logo Essentials" at https://www.hootsuite.com/brand, which links a brand-logo download on its Widen asset portal (https://hootsuite.widen.net/s/kwxqgtnvjc/hootsuitebrandlogos). The page text lists no colours or typefaces; its guidelines table is an image. No public component library was found on the pages opened.

The de-facto system is in the site's CSS custom properties, which use Hootsuite's own colour names: `--color-nocturn` with tint steps (`--color-nocturn3` … `--color-nocturn75`), `--color-saffron` and `--color-saffron10`, `--color-blue-hyperlink` with hover and 70% variants, `--color-spruce`, `--color-navy`, `--color-lumen-*`, `--color-wisdom-*` (the Wisdom AI product), `--color-vigil-light`, plus named shadows (`--shadow-10` … `--shadow-50`), weights and a `--spacing-*` scale.

## Do's and Don'ts

**Do**
- Set everything in Montserrat, with body text at weight 500 and headings at 600–700.
- Use Nocturn #012b3a for text and the blue #1f60c9 for primary actions, lightening to #759cdb on hover.
- Keep Saffron #e03035 for emphasis: stat numbers, "#1", the logo.
- Use small corners — 8px for buttons and cards, 4.736px on the hero CTA.
- Tint shadows with Nocturn (rgba(1,43,58,…)) when you add elevation.

**Don't**
- Don't use pill buttons.
- Don't use black as the main text colour.
- Don't document the cookie notice or the chat assistant as Hootsuite UI.
- Don't spread Saffron across large backgrounds; it is an accent.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the section heading "Strategize, organize, and simplify social media marketing" at 24px / 700 / 30px with −0.36px tracking (36px on desktop), body text still at 16px, and frequent sizes of 16px, 14px, 12px, 24px and 20px. Two header links remain visible and a menu toggle labelled "open navigation menu" appears (no toggle on desktop). The mobile size of the hero headline and how the feature rows reflow were not measured.

## Iteration Guide

1. Load Montserrat (variable) and set body to 16px/500/25.6px in #012b3a on #ffffff.
2. Add #f2f4f5 bands for promotions, awards and the footer.
3. Build the hero: full-bleed photo, white 12.9024px uppercase eyebrow, 35.84px/600 headline with 700 cycling words, blue and white buttons.
4. Primary button: #1f60c9, white 13.696px/600, 4.736px radius, 64px tall; hover #759cdb. Nav button: 8px radius, 42px tall.
5. Section headings at 36px/700, h3 at 28px/700; stats in Saffron at 64px.
6. Use Nocturn-tinted shadows and thin Nocturn outlines for secondary buttons.
7. Compare with https://www.hootsuite.com/ at 1280px and 390px, ignoring the cookie and chat overlays.
