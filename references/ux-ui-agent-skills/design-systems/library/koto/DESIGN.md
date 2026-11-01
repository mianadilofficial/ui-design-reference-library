---
version: alpha
name: Koto
category: "Agencies & Studios"
description: "Koto (koto.com) is a near-black creative-agency site — canvas #060606, grey #989898 body copy, white #ffffff headlines and links, a #ffe800 yellow wordmark — set entirely in the studio's own gtKotoheim, gtKotoheimCondensed (300) and gtKotoheimMono families, with 6px-radius translucent cards and no buttons."
colors:
  canvas: "#060606"
  ink: "#989898"
  primary: "#ffffff"
  surface-card: "#141414"
  ink-soft: "#ffffffb2"
  ink-faint: "#595959"
  hairline: "#ffffff1a"
  hairline-solid: "#202020"
  accent-yellow: "#ffe800"
typography:
  display:
    fontFamily: gtKotoheimCondensed, "gtKotoheimCondensed Fallback", sans-serif
    fontSize: 48px
    fontWeight: 300
    lineHeight: 48px
    letterSpacing: "-0.48px"
  display-mobile:
    fontFamily: gtKotoheimCondensed, "gtKotoheimCondensed Fallback", sans-serif
    fontSize: 36px
    fontWeight: 300
    lineHeight: 36px
  label-mono:
    fontFamily: gtKotoheimMono, "gtKotoheimMono Fallback", sans-serif
    fontSize: 9px
    fontWeight: 400
    lineHeight: 9px
    letterSpacing: "-0.18px"
    textTransform: uppercase
  subheading:
    fontFamily: gtKotoheimCondensed, "gtKotoheimCondensed Fallback", sans-serif
    fontSize: 38px
    fontWeight: 300
    lineHeight: 41.8px
    letterSpacing: "-0.38px"
  body:
    fontFamily: gtKotoheim, "gtKotoheim Fallback", sans-serif
    fontSize: 16px
    fontWeight: 350
    lineHeight: 20px
  link:
    fontFamily: gtKotoheim, "gtKotoheim Fallback", sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 10px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 24px
  s9: 36px
  s10: 40px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.hairline}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    padding: 36px
  footer:
    textColor: "{colors.ink-faint}"
    padding: 0px 0px 16px
---

# Koto

## Overview

Koto describes itself on its home page as "an international creative agency building impactful brands", and the about page lists five offices: Los Angeles, New York, London, Berlin and Sydney. The queued URL koto.studio resolves to koto.com, which is the page measured here. The site is a dark, almost cinematic portfolio: the first viewport is a full-bleed black field with a video-style hero and a small "PLAY" control in the lower right, and the only type on it is a two-line lockup in the lower left — "We're Koto" in white and "The Creative Company" in grey — set in the condensed light cut of the studio's own typeface.

Below the hero the page is a long scroll of case-study tiles stacked in the right half of the layout (Instagram, Amazon, Copilot+PC, Tripadvisor and others in the capture), followed by a "Studio news" row of three press cards, a closing statement ("We make ambitious ideas for ambitious brands. Five offices, one studio, united by optimism, collaboration, and craft.") and a "Contact / Press and careers" sign-off. There is no conventional call-to-action button anywhere on the measured page: navigation is a row of tiny uppercase mono links (WORK, ABOUT, SERVICES, LATEST, CAREERS, CONTACT) and a local clock at the top right. The brand personality is carried by restraint — black, two greys, white and one flash of yellow in the wordmark — and by the work imagery, which supplies all the colour.

## Colors

The palette is measured from the live page and its Tailwind theme variables (`--color-*` on `:root`).

- **Canvas `#060606`** — the body background and the `--color-black` variable. It covers the largest area of the page and is what the viewer sees behind every section.
- **Surface card `#141414`** — `--color-off-black`, the second most common background by area, used for raised panels slightly lighter than the canvas.
- **Ink `#989898`** — `--color-grey`, the most-read text color on the page (body paragraphs, the h2 labels, the grey second line of each heading pair). It is deliberately mid-grey rather than white, which keeps long copy quiet against the black.
- **Primary `#ffffff`** — white headlines, the "We're Koto" h1, active nav links and inline links. Koto has no saturated action color; white *is* the emphasis color.
- **Ink soft `#ffffffb2`** — white at about 70% alpha, measured on the nav links in their resting state; on hover they go to solid white.
- **Ink faint `#595959`** — `--color-mid-grey`, used for the footer row (copyright, Privacy Policy, Terms of Use, Cookies).
- **Hairline `#ffffff1a`** — white at 10% alpha, used both as border color and as the translucent fill of the "View all projects" card.
- **Hairline solid `#202020`** — `--color-darkest-grey`, a measured border color.
- **Accent yellow `#ffe800`** — `--color-yellow`, the color of the Koto wordmark in the top left corner. It is the only chromatic brand color in the theme and is used sparingly.

The theme also declares `--color-dark-grey #2d2d2d` and `--color-light-grey #ccc`; they were not observed on visible elements of the home page and are not included as tokens.

## Typography

Every character on the page is set in one of three self-hosted families the site loads under the names `gtKotoheim`, `gtKotoheimCondensed` and `gtKotoheimMono` (each with a generated "Fallback" metric-matched face from Next.js font loading). The foundry and licensing of these faces are not stated on the pages opened.

- **Display** — gtKotoheimCondensed 300, 48px on a 48px line, letter-spacing -0.48px. Used for the h1 "We're Koto". On the 390px mobile pass the same h1 measured 36px/36px.
- **Subheading** — gtKotoheimCondensed 300, 38px on 41.8px, letter-spacing -0.38px. Used for case-study titles and the large closing statement. It is the third most-used size on the page by characters.
- **Body** — gtKotoheim at weight 350, 16px on 20px. This is the dominant style (16px is the most-read size, weight 350 the most-read weight).
- **Link** — gtKotoheim 400, 12px on 18px.
- **Label mono** — gtKotoheimMono 400, 9px on 9px, letter-spacing -0.18px, uppercase. Used for small section labels such as "CHANNELS". The navigation and the body element default to the same mono at 11px uppercase.

The system pairs one condensed light display face with one text face and one monospace for metadata. Headings are always paired: a white first line and a grey (#989898) second line in the same size and weight, rather than a size contrast.

**Substitutes** (the gtKotoheim families are proprietary): a neutral grotesk with a condensed light width for display (e.g. Inter Tight Light or Barlow Condensed Light) plus a monospace such as JetBrains Mono for labels. Keep the 350 text weight if the substitute is variable.

## Layout

The desktop page is 1280px wide with content running from x=28 to x=1205, so the outer gutter is 28px on the measured viewport. The extraction recorded a single long band of 5,398px, filled black, with one column structure. Case-study tiles occupy roughly the right 60% of the width in the capture, leaving the left side as empty black space; the news section switches to a three-card row with one larger lead card. Up to five card columns were detected on the page.

Spacing is a Tailwind scale with `--spacing: 0.25rem`. Measured gaps are mostly 12px, 8px and 6px, with 16px, 36px, 48px and 80px for larger separations; paddings concentrate on 8px, with 36px inside cards and one 240px vertical padding for the large statement block. Density is low: very small type, generous black space, and big imagery doing the work.

## Elevation & Depth

No box-shadows were measured on the page. Depth comes from three things only: the lightness steps of the backgrounds (#060606 canvas, #141414 off-black panels, white-10% translucent fills), 1px hairlines in white-10% or #202020, and the photography and video inside tiles. The theme declares backdrop blur variables (`--blur-glass-medium 1.25rem`, `--blur-glass-strong 2.5rem`), so glass-blur surfaces are part of the vocabulary, but no blurred surface was isolated on the measured home page.

## Shapes

Corners are small and consistent. Measured radii are 10px (case-study tiles), 6px (the "View all projects" card), 2px, 4px and a full pill (computed 3.35544e+07px). The theme variables declare `--radius-xs .125rem` (2px), `--radius-sm .25rem` (4px), `--radius-md .375rem` (6px) and `--radius-xl .75rem`. Small tags such as "PRESS" on the news cards sit on dark rectangles with tight corners. Nothing on the page is sharply square except text and full-bleed media, and nothing is heavily rounded except pill-shaped toggles.

## Components

- **Navigation** — top-left yellow Koto wordmark, then a row of uppercase gtKotoheimMono links at about 70% white; hover recorded the color changing to solid #ffffff with no background or underline. A clock/time-zone readout sits top right.
- **Hero** — full-bleed black media area; the h1 pair sits bottom-left, a small "PLAY" control bottom-right.
- **Case-study tile** — image or video filling a 10px-radius tile, with the client wordmark rendered inside the artwork. No caption chrome is visible on the tile itself.
- **Card** — the "[ VIEW ALL PROJECTS ]" card: background #ffffff1a, text #989898 in 11px uppercase mono, radius 6px, padding 36px. Square-bracket framing ("[ VIEW ALL ]") is the site's link idiom for secondary actions.
- **News card** — image on top, white title in gtKotoheim, grey excerpt, then a small dark "PRESS" tag and a mono date.
- **Footer** — #595959 text in gtKotoheim 14px/350 with 16px bottom padding: copyright "© 2015—2026", Privacy Policy, Terms of Use, Cookies.

There are no filled buttons; a design that adds one departs from the measured site.

## Design System Architecture

No public design system or brand-guidelines page exists for Koto: the about page (https://koto.com/about) and home page (https://koto.com/) link to no design system, press kit or brand guidelines. The de-facto system is visible in the shipped CSS. The site is a Next.js build (`/_next/static/media/` font files) styled with Tailwind v4, whose theme is exposed as custom properties on `:root`: a named color set (`--color-black`, `--color-off-black`, `--color-darkest-grey`, `--color-dark-grey`, `--color-mid-grey`, `--color-grey`, `--color-light-grey`, `--color-white`, `--color-yellow`), a numeric type scale (`--text-3` 0.75rem, `--text-4` 1rem, `--text-6` 1.5rem, `--text-8` 2rem, `--text-11` 2.75rem, `--text-16` 4rem), named line-heights (`--leading-100` to `--leading-125`), tracking steps (`--tracking-0/1/2`), three font roles (`--font-sans`, `--font-sans-condensed`, `--font-mono`), radius steps, sidebar widths (`--spacing-sidebar 20rem`, `--spacing-sidebar-wide 22.875rem`) and named animations (`feed-in-transform`, `widget-wrapper-in/out`) with custom cubic-bezier curves. Build new screens from these variables rather than raw values.

## Do's and Don'ts

**Do**
- Keep the page on #060606 and let imagery provide colour.
- Pair headings as a white line plus a #989898 grey line at the same size and weight.
- Use gtKotoheimCondensed 300 for anything large, gtKotoheim 350 for reading text, and the mono for labels, nav and metadata in uppercase.
- Frame secondary actions as bracketed mono text ("[ VIEW ALL ]").
- Reserve #ffe800 for the wordmark or a single highlight.

**Don't**
- Don't introduce filled CTA buttons or saturated UI colors; the measured page has none.
- Don't add drop shadows — depth is tonal only.
- Don't set body copy in pure white; the measured reading color is #989898.
- Don't use large radii on media; tiles stop at 10px.
- Don't bold the display face; it is used only at weight 300.

## Responsive Behavior

Measured on the 390px mobile pass: the h1 drops from 48px to 36px (line-height 36px, letter-spacing normal); the h2 becomes "Our work" in gtKotoheimCondensed 300 at 26px/31.2px; body paragraphs measured 13px/16.25px at weight 350; the most-read mobile sizes are 15px, 13px and 26px. The content area runs from x=16 to x=346, so the side gutter is 16px. The header showed no visible text links and a visible menu toggle labelled "Menu" on mobile, while on desktop the toggle was not visible. Card column counts, tile ordering and breakpoints on mobile were not measured.

## Iteration Guide

1. Start from the canvas (#060606), ink (#989898) and white primary; add #141414 panels and white-10% hairlines before reaching for anything else.
2. Set a type ramp of three families: condensed 300 for 48/38px headings, text 350 for 16px body, mono 9–11px uppercase for labels.
3. Lay out with a 28px desktop / 16px mobile outer gutter and the 0.25rem Tailwind spacing step; prefer 6–12px gaps inside components and 36px card padding.
4. Use 10px radii for media tiles and 6px for text cards.
5. Express interactive state through text color only (70% white to 100% white), not backgrounds.
6. Check every new color against the theme variables; if it is not in `--color-*`, it does not belong.
