---
version: alpha
name: Duroc
category: "Food & Beverage"
description: "Duroc (duroc.ma), Moroccan cherry-tomato grower: a saturated tomato-red #d23b37 site with white Okomito type in weight 900 uppercase (42px intro, 80px page titles), #d64119 orange-red CONTINUER and CTA buttons, darker #ae2521 pill chips with 26px radius, and a blue #2d78b2 impact section."
colors:
  canvas: "#d23b37"
  ink: "#ffffff"
  primary: "#d64119"
  on-primary: "#ffffff"
  surface-dark: "#ae2521"
  surface-deep: "#8d1d1a"
  surface-push: "#df4a46"
  accent-orange: "#ff8736"
  accent-orange-dark: "#b32d09"
  impact-blue: "#2d78b2"
  impact-blue-dark: "#1864a0"
  impact-blue-light: "#66a2cc"
  impact-navy: "#03223e"
  ink-3: "#575757"
  grey: "#e5e5e5"
  grey-light: "#dadada"
typography:
  display:
    fontFamily: Okomito, serif
    fontSize: 42px
    fontWeight: 900
    lineHeight: 57px
    textTransform: uppercase
  display-xl:
    fontFamily: Okomito, serif
    fontSize: 80px
    fontWeight: 900
    lineHeight: 80px
    textTransform: uppercase
  display-mobile:
    fontFamily: Okomito, serif
    fontSize: 30px
    fontWeight: 900
    lineHeight: 38px
    textTransform: uppercase
  body:
    fontFamily: Okomito, serif
    fontSize: 16px
    fontWeight: 900
    textTransform: uppercase
  body-long:
    fontFamily: Okomito, serif
    fontSize: 22px
    fontWeight: 500
  button:
    fontFamily: Okomito, serif
    fontSize: 25px
    fontWeight: 900
    lineHeight: 25px
    textTransform: uppercase
  chip:
    fontFamily: Okomito, serif
    fontSize: 16px
    fontWeight: 900
    lineHeight: 11px
    textTransform: uppercase
rounded:
  none: 0px
  xs: 2px
  chip: 26px
  sm: 44px
  md: 48px
  lg: 60px
  pill: 9999px
spacing:
  s1: 10px
  s2: 14px
  s3: 15px
  s4: 16px
  s5: 20px
  s6: 21px
  s7: 25px
  s8: 35px
  s9: 40px
  s10: 69px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 60px
  chip:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.ink}"
    typography: "{typography.chip}"
    rounded: "{rounded.chip}"
    padding: 14px 21px
    height: 47px
---

## Overview

Duroc's site (https://duroc.ma/, title "Duroc", meta description "Nous produisons les meilleures tomates cerises depuis 1989.", language fr with an EN switch) presents a Moroccan cherry-tomato producer as a playful, almost toy-like paper-craft world. The entire UI is tomato red with white text, and every surface is a flat colour from a section-named palette: about (red), product (orange-red), impact (blue), video, contact and legals.

The home page opens as a full-screen intro video. In the capture a soft pink paper scene shows three low-poly paper tomatoes rolling along a dark red ribbon, with a clipped white title "ERRY TOMATOES" (the video's own lettering), a pill-shaped "CONTINUER" button with a chevron in a darker circle, and two round white buttons (mute and pause) at bottom right. The extractor measured this intro state: the scroll height is 800px, the page's `h1` text is "À PROPOS" and the hint line reads "SCROLLER VERS LE BAS POUR DÉCOUVRIR L'UNIVERS DUROC". To see the content pages one more page was measured, https://duroc.ma/a-propos (slug duroc-1--about, title "Duroc, Expert de la tomate marocaine"): a dark red header with a close button, the label "GRANDISSONS ENSEMBLE", an 80px white title "À PROPOS", a floating ribbon-and-tomatoes illustration, three pill tabs (HÉRITAGE, CUSTOMER INTIMACY, LÀ OU ON GRANDIT), centred white paragraphs, curved section edges, and two image cards with pill labels NOS TOMATES (orange) and NOTRE IMPACT (blue).

Voice is warm and plain French: "40 ANS DE PRODUCTION DE TOMATES", "2010: DUROC DEVIENT 100% MAROCAIN". A cookie dialog (buttons "Je refuse" and "J'accepte") exists in the source and is not brand UI.

## Colors

The page background `canvas` #d23b37 is the largest area (1279 units on the home page and 7819 on /a-propos); text is `ink` white #ffffff (3486 characters on the content page). `primary` #d64119 fills the CONTINUER and NOS TOMATES buttons (stylesheet `--c-product`, `--c-video-skip`). Each site section has a base colour plus dark and "push" variants, all declared as variables: about `--c-about` #d23b37, `--c-about-dark` #ae2521, `--c-about-push` #df4a46, `--c-about-2` #8d1d1a; product `--c-product` #d64119, `--c-product-dark` #b32d09, `--c-product-push` #ff8736, `--c-product-2` #a5130d; impact `--c-impact` #2d78b2, `--c-impact-dark` #1864a0, `--c-impact-push` #66a2cc, `--c-impact-2` #03223e; video `--c-video` #a0201e and `--c-video-dark` #7f1816; contact and legals `--c-contact`/`--c-legals` #a0211d; neutral greys `--grey` #e5e5e5, `--grey-light` #dadada and `--grey-dark` #575757.

Dark red #ae2521 is also the colour of the HÉRITAGE chip fill (500 area units) and of the home page's h1 text. A translucent black #0000004d covers 1024 area units on both pages; it is a scrim over the video and is not a brand colour. Text #575757 was measured on 37 characters (the cookie dialog text).

## Typography

One family, Okomito (fallback serif), loaded in weights 400, 500, 700 and 900 (the content page measures 500, 700 and 900). Headings, labels and buttons are uppercase weight 900: the intro h1 at 42px/57px, the content-page h1 at 80px/80px (mobile 40px/40px), button labels at 25px/25px, the hint line at 16px, chips at 16px with an 11px line-height. Long paragraphs are weight 500 at 22px (3118 characters on /a-propos), mixed-case, white, centred, with a normal line-height. No letter-spacing is applied anywhere (the extractor recorded none).

Sizes by characters: home page 16px (83), 25px (40), 42px (40), 12px (3); /a-propos 22px (3118), 25px (250), 16px (144), 42px (40), 80px (8), 12px (3). Okomito is a custom face; if unavailable, keep the weight-900 uppercase for display and labels, weight 500 for paragraphs; the exact substitute is not measured.

## Layout

At 1280px the home page is a single 800px-high intro screen, while /a-propos is 2587px tall. Content is a centred single column: label, title, tab pills, then paragraphs about 640px wide (the body block measured 640px by 312px). Two image cards sit side by side at the foot of the page, each with a pill label overlapping its lower edge, followed by a B Corp badge. Section edges are curved bands in alternating red tones, as the capture shows, and the persistent navigation is a floating white pill containing a menu icon, the Duroc logo and a round indicator, centred near the top of the viewport.

Measured spacing: paddings 40px (7 uses), 16px (6), 69px (5), 14px (4), 21px (4), 20px (3), 10px (3); gaps 35px (2), 25px (2), 80px, 20px. Footer links are 25px/900 uppercase (NOS TOMATES, NOTRE IMPACT) with 160px bottom padding.

## Elevation & Depth

No shadow was measured on any element. Depth is illustrated, not CSS: the paper-craft 3D renders (tomatoes, ribbon loops, a ferris wheel) cast soft shadows inside the artwork, and sections are separated by tone steps (#d23b37, #ae2521, #8d1d1a) and curved edges. The floating navigation pill is white against the red page.

## Shapes

The shape language is pills and circles. Radii measured: 60px (4 elements on the home page, 5 on /a-propos), 100% (3 and 5 circles: close, mute, pause buttons and chevron discs), 48px and 44px (single elements), 26px for the HÉRITAGE tab chip and other chips (3 elements), 2px (3). Image cards have small rounded corners. The anchor boxes of CONTINUER (242px by 60px) and NOS TOMATES (271px by 60px) report radius 0px; the visible pill shape in the capture comes from their inner element, whose 60px radius appears in the radius table.

## Components

**Primary button** (`button-primary`): #d64119 fill, white Okomito 900 at 25px/25px, 60px high (242px wide for CONTINUER, 271px for NOS TOMATES), with a darker round chevron disc at the left; at 390px the CONTINUER button is 16px text, 48px high and 164px wide.

**Chip / tab** (`chip`): #ae2521 active fill, white 16px/900 uppercase text, 26px radius, padding 14px 21px, 47px high, 121px wide for HÉRITAGE; inactive chips are transparent with a white border and fill #ae2521 on hover.

**Round controls**: close (×) on a darker red circle at top left, and white mute and pause circles on the intro.

**Image cards**: photographic tiles with a coloured pill label overlapping the bottom edge: orange for NOS TOMATES, blue (#2d78b2 with a dark navy chevron disc) for NOTRE IMPACT.

**Navigation**: white floating pill with a hamburger icon, the Duroc wordmark and a round progress indicator; the page source also lists the anchors notre impact, à propos, nos tomates, and footer links catalogue, le film, contact, mentions légales and FR / EN.

**B Corp badge**: a white "Certified B Corporation" mark below the cards, linking to bcorporation.net.

## Design System Architecture

No public design system, brand guidelines or press kit is linked on the pages opened (https://duroc.ma/ and https://duroc.ma/a-propos). The site is built with Astro (the markup uses `data-astro-cid` attributes and `/_astro/*.css` bundles). The de-facto system is a set of section-colour custom properties on the root: `--c-about`, `--c-product`, `--c-impact`, `--c-video`, `--c-contact`, `--c-legals`, `--c-more`, each with `-dark`, `-2` and `-push` variants, plus `--c-primary` (resolving to `--c-about-dark`), `--c-background` (resolving to `--c-about`), `--c-ui` #d23b37 and greys. Interactive controls share a `button-color` class and an `anchors__button` class, and carry a `touched` attribute reset after 400 ms for touch feedback.

## Do's and Don'ts

Do build each section from one flat colour and its dark variant, with curved edges between them. Do set headings and labels in Okomito 900 uppercase, paragraphs in Okomito 500 at 22px. Do use pill chips (26px) and round discs for controls. Do let paper-craft illustration carry depth.

Don't add CSS shadows. Don't use pure black or grey for text on the red pages (white only). Don't use the translucent video scrim as a design colour. Don't document the cookie dialog as part of the system. Don't place the blue impact palette in the red sections: it belongs to the impact section.

## Responsive Behavior

Measured at 390px: the intro heading is 30px with a 38px line-height (42px/57px desktop); the content-page h1 is 40px/40px (80px desktop); the 22px paragraph stays 22px and measures 358px wide by 572px tall; the CONTINUER button is 16px text in a 48px by 164px box (60px by 242px at 1280px); the chips keep their 47px height and 14px 21px padding; the nav block is 99px tall. Mobile text sizes by characters: 16px (89), 30px (40), 12px (37) on the home page and 22px (3118), 25px (196), 16px (144), 12px (57), 30px (40), 40px (8) on /a-propos. Whether the tabs and cards stack is not measured.

## Iteration Guide

Start from canvas #d23b37, ink #ffffff, primary #d64119 and use #ae2521 for chips and darker bands. Set titles in Okomito 900 uppercase (42px intro, 80px page titles) and paragraphs at 22px weight 500. Build buttons 60px tall with a chevron disc and chips at 47px tall with 26px radius. For the impact section switch the palette to #2d78b2 with #1864a0 and #66a2cc. Keep the cookie and video-scrim layers out of the tokens.
