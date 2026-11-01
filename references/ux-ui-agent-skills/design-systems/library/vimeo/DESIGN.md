---
version: alpha
name: Vimeo
category: "Media & Consumer Tech"
description: "Vimeo's home page alternates Vimeo White (#fafcfd) and Vimeo Black (#141a20) bands, with Vimeo Blue #17d5ff on 12px-radius 48px buttons with dark text, ABC Repro 500 headlines at 72px with -3.6px tracking, #4c5864 body text, 16px-radius video cards and a lime #d6e96d announcement bar."
colors:
  canvas: "#fafcfd"
  ink: "#4c5864"
  primary: "#17d5ff"
  on-primary: "#141a20"
  surface-dark: "#141a20"
  surface-subtle: "#f1f5f9"
  ink-strong: "#0a0e12"
  ink-secondary: "#3d4751"
  ink-on-dark-muted: "#a9b2bc"
  lime: "#d6e96d"
typography:
  display:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 72px
    fontWeight: 500
    lineHeight: 72px
    letterSpacing: "-3.6px"
  display-mobile:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-2px"
  heading:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-1.6px"
  subheading:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 26.4px
    letterSpacing: "-0.96px"
  quote:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 24.2px
    letterSpacing: "-0.86px"
  body:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: "-0.6px"
  button:
    fontFamily: ABCRepro, "ABCRepro Fallback", InterTight, "InterTight Fallback", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 17.6px
    letterSpacing: "-0.48px"
rounded:
  xs: 4px
  sm: 6px
  md: 6.4px
  lg: 8px
  xl: 12px
  2xl: 16px
  pill: 9999px
spacing:
  s1: 1px
  s2: 1.5px
  s3: 3px
  s4: 4px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 12.26px
  s9: 14px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 16px
    height: 48px
  button-dark:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 12px 16px
    height: 48px
  feature-link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    height: 84px
  testimonial-card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.quote}"
    rounded: "{rounded.2xl}"
    padding: 20px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
---

# Vimeo

## Overview

Vimeo's home page (https://vimeo.com/, title "Vimeo - All-in-One Video Platform") is a long product page, 8,999px at desktop width, that alternates light and dark bands like a film strip. The three brand colours are exactly the ones Vimeo's brand guidelines publish: **Vimeo White #FAFCFD** (the canvas), **Vimeo Black #141A20** (the dark bands, button text and the secondary button), and **Vimeo Blue #17D5FF** (every primary button).

The hero is a rounded, full-width video frame of a cosy workspace, overlaid with the white headline "Your videos, your way", the eyebrow "YOUR COMPLETE VIDEO PLATFORM", a short intro and a blue "Join free" button. A translucent "See why millions love Vimeo" play card sits at the lower right. A lime (`#d6e96d`) announcement bar follows ("Anyone can now stream unlimited public videos on Vimeo for free." with a dark "Discover more" button), then a logo strip ("Trusted by 287+ million creatives, marketers, and businesses": WPP, Dropout, Coca-Cola…), then "Built for how you work".

The rest of the page: a dark "The platform that powers your video strategy" grid of six video-thumbnail features; "A video solution perfect for everyone" (a portrait plus a list of use cases); testimonials; a dark "AI that takes your videos to the next level" block; "Enterprise security and scale" with compliance badges (SOC 2, GDPR, HIPAA, ISO 27001, AES-256); a dark "Join a thriving community of the world's greatest storytellers" carousel of Staff Pick films; "Discover the latest from Vimeo"; and a large light footer. The voice is direct and benefit-led ("Host in high quality, ad-free", "Collaborate with anyone").

## Colors

- **Canvas `#fafcfd`.** Vimeo White: the body and the largest measured area (14,107 units).
- **Surface dark `#141a20`.** Vimeo Black: dark bands (3,952 units), the dark button fill, and the text on blue buttons (**on-primary**).
- **Primary `#17d5ff`.** Vimeo Blue: the fill of "Join free", "Join" and "Request a demo".
- **Ink `#4c5864`.** The most-read text colour (2,454 characters): body paragraphs on light bands.
- **Ink strong `#0a0e12`.** Light-band headlines ("A video solution perfect for everyone", "Get started for free") and the footer.
- **Ink secondary `#3d4751`.** Secondary copy (736 characters).
- **Ink on dark muted `#a9b2bc`.** Body text on dark bands and the hero intro (1,432 characters).
- **Surface subtle `#f1f5f9`.** The light grey testimonial band.
- **Lime `#d6e96d`.** The announcement bar.

Other measured backgrounds are `#192028` and `#28313a` (dark card tints), `#dfe4ea`, and blue variants `#00b8e0` and `#13b1d4`. `:root` exposes a large token set (`--colors-chroma-neutral-800`, `--colors-chroma-blue-200`, `--colors-bokeh-grey-600`, `--colors-purple-55`, `--colors-footer-content: rgba(250,252,253)`).

## Typography

Vimeo uses **ABC Repro** (`ABCRepro`, weights 400, 500 and 700, plus `ABCReproMono`), with InterTight declared as the first fallback. Every size has negative tracking that scales with it (-3% of the size for body and buttons, about -5% at display size):

- **Display.** 72px/500, 72px line height, -3.6px: "Your videos, your way".
- **Heading.** 40px/500, 40px line height, -1.6px: section titles such as "The platform that powers your video strategy".
- **Subheading.** 24px/500, 26.4px, -0.96px: feature titles ("Host in high quality, ad‑free").
- **Quote.** 22px/500, 24.2px, -0.86px: testimonial text.
- **Body.** 20px/400, 28px, -0.6px for intros. 16px (-0.48px) and 18px (-0.54px) are the most frequent sizes by character count.
- **Button.** 16px/500, 17.6px line height, -0.48px.

Small text runs at 12px/-0.36px and 14px/-0.42px. If ABC Repro is unavailable, InterTight (the declared fallback), then Helvetica and Arial, take over.

## Layout

Measured at 1280px wide. The 84px header is light: the "vimeo" wordmark, mega-menus (Features, Use cases, Enterprise, Learn), Pricing and What's new at the left; Contact sales, a blue "Join" button, search and account at the right. The page runs in 12 bands, alternating `#fafcfd` and `#141a20`, with one `#f1f5f9` band and the lime announcement bar. Grids are 3-column for feature tiles (each a video thumbnail, title, description and a "Learn about…" button), 2-column for text-plus-media blocks, and a horizontal carousel for Staff Picks. The footer has a large "Get started for free" block, a "24/7 customer support" block, and six link columns (Product, Features, Video for, Solutions, Resources, Company).

Gaps are dominated by 8px (228 instances), then 4px, 16px and 20px; paddings by 8px, 20px and 32px. The rhythm is dense and componentised.

## Elevation & Depth

Vimeo is mostly flat. The measured shadows are 10,000px solid spreads (`rgb(85, 85, 85) 0px 0px 0px 10000px` and similar), solid colour spreads rather than soft elevation shadows. The CSS defines one soft card shadow, `0 4px 32px rgba(11,26,41,.12), 0 0 0 .5px rgba(26,70,128,.12)`. Depth comes instead from the light/dark band rhythm, rounded video frames, and translucent overlays: the hero's "See why millions love Vimeo" card is `rgba(255, 255, 255, 0.6)` and turns `rgba(20, 26, 32, 0.6)` with white text on hover.

## Shapes

Radii are moderate and layered. **16px** is the most frequent (100 elements: video frames, cards, the hero), then 8px (97: thumbnails, small cards), **12px** (49: every button), pills at 9999px (25: tags and toggles), 6px (23) and 4px (4). Video thumbnails are always rounded and never full-bleed except the hero. Icons are simple line glyphs; the compliance badges use small outlined symbols.

## Components

- **Primary button.** Vimeo Blue `#17d5ff`, `#141a20` ABC Repro 16px/500 text with -0.48px tracking, 12px radius, 12px 16px padding, 48px tall: "Join free", "Join", "Request a demo".
- **Dark button.** `#141a20` fill with `#fafcfd` text, same metrics: "Discover more". The capture shows the "Learn about…" buttons on the dark feature tiles as dark-grey buttons as well.
- **Hero video card.** A 16px-radius media frame with a centred headline, an eyebrow, an intro and a blue button. A translucent play card sits in the corner and darkens on hover.
- **Announcement bar.** Lime `#d6e96d`, a single line, a dark button and a close icon.
- **Feature tile.** A video thumbnail (8–16px radius), a 24px/500 title, a muted description and a dark button.
- **Testimonial card.** `#fafcfd`, 16px radius, 20px padding, 22px/500 quote, a star rating and a customer logo, on a `#f1f5f9` band.
- **Use-case list.** Icon + bold title with arrow + description rows beside a large portrait.
- **Footer.** Light: a 40px/500 "Get started for free" heading, link columns in `#0a0e12`, social icons and a language select.

## Design System Architecture

Vimeo publishes brand guidelines at https://vimeo.com/about/brand_guidelines. They define the three brand colours (Vimeo Black #141A20, Vimeo Blue #17D5FF, Vimeo White #FAFCFD), logo, icon, logo-in-motion and Staff Pick laurel downloads, and usage rules ("Modification, transformation, distortion, and derivative works of Vimeo Brand Assets is strictly prohibited"; use "Vimeo" as an adjective, not a verb). The website implements these through a large token layer on `:root`. Variables are named by system and role: `--colors-chroma-*` (UI palette as RGB triplets, e.g. `--colors-chroma-neutral-800: 25,32,40`), `--colors-bokeh-*` (another named palette), and component-specific tokens (`--colors-global-nav-hover-background-accent`, `--colors-chroma-button-play-overlay-hover`, `--colors-footer-content`). The CSS also contains utility-class variables (`--tw-ring-shadow`, `--tw-shadow`) and loads ABCRepro, ABCReproMono and ABCReproScreen font faces.

## Do's and Don'ts

**Do**
- Use only the three brand colours for structure: White `#fafcfd` canvas, Black `#141a20` bands and text, Blue `#17d5ff` for primary actions.
- Put dark `#141a20` text on Blue buttons, never white.
- Set all type in ABC Repro with negative tracking proportional to size; use 500 for headings and buttons.
- Alternate light and dark bands, and frame every video in a rounded 8–16px container.
- Keep buttons at a 12px radius and 48px height.

**Don't**
- Don't alter, recolour or abbreviate the Vimeo marks (brand guidelines).
- Don't use pure black or pure white; the brand's black and white are tinted (#141A20, #FAFCFD).
- Don't add heavy drop shadows; depth comes from the band contrast.
- Don't use Vimeo Blue for large surfaces; it is for actions.

## Responsive Behavior

Measured at 390px wide. The hero headline drops from 72px to **40px/40px** with -2px tracking. Section headings drop to 32px or 22px (for example "Built for how you work" at 32px, "The platform that powers your video strategy" at 22px). Body text becomes 16px/20.8px with -0.48px tracking. The blue "Join free" button keeps its desktop spec (48px, 12px radius, 12px 16px padding). The mobile header showed "Contact Sales" and "Login" at 10px/500, with two header links measured as visible. In the mobile capture the page runs as one long column (16,000px capture height). The feature tiles, use cases and Staff Pick films each appear one per row, and most bands use a 16px side inset (x 16–374). The stylesheet's most frequent media queries are `min-width: 768px` (86) and `min-width: 1024px` (35).

## Iteration Guide

1. Start with `#fafcfd`, `#4c5864` ABC Repro body text with -3% tracking, and `#0a0e12` headings at weight 500.
2. Add one Vimeo Blue `#17d5ff` button (12px radius, 48px tall) with `#141a20` text.
3. Alternate sections between `#fafcfd` and `#141a20`; on dark bands use `#fafcfd` headings and `#a9b2bc` body text.
4. Present features as rounded video tiles in a 3-column grid with dark "Learn about…" buttons.
5. Use the lime `#d6e96d` bar only for announcements.
6. Check marks and colours against the brand guidelines page before release.
