---
version: alpha
name: Ducati
category: "Automotive"
description: "Ducati's Thailand-market home page (ducati.com/th/th, English content): off-white #fafafa canvas, #0f0f0f ink and footer, Ducati red #cc0000/#cb1517 for actions and links, and three custom families — ducati-extended 48px/700 headlines, ducati-condensed 14px uppercase links tracked 1px, ducati 12px/18px body — with 2px corners."
colors:
  canvas: "#fafafa"
  page-body: "#ebebeb"
  surface: "#ffffff"
  ink: "#0f0f0f"
  ink-secondary: "#666666"
  ink-muted: "#bbbcbc"
  primary: "#cc0000"
  red-link: "#cb1517"
  on-dark: "#fafafa"
  footer: "#0f0f0f"
  input-text: "#000000"
  hairline: "#bbbcbc80"
typography:
  display:
    fontFamily: ducati-extended, Arial, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    letterSpacing: 0.8px
  display-mobile:
    fontFamily: ducati-extended, Arial, sans-serif
    fontSize: 27px
    fontWeight: 700
    lineHeight: 27px
    letterSpacing: 0.8px
  heading:
    fontFamily: ducati-extended, Arial, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 33.6px
    letterSpacing: 0.8px
  body:
    fontFamily: ducati, Arial, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
    letterSpacing: 0.8px
  link:
    fontFamily: ducati-condensed, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
    letterSpacing: 1px
    textTransform: uppercase
  input:
    fontFamily: sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 16.1px
    textTransform: uppercase
rounded:
  none: 0px
  xs: 2px
  sm: 5px
  pill: 9999px
spacing:
  s1: 10px
  s2: 12px
  s3: 15px
  s4: 20px
  s5: 21px
  s6: 22px
  s7: 25px
  s8: 30px
  s9: 34px
  s10: 35px
components:
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 0px 20px
    height: 60px
    border: "1px solid #ebebeb"
  footer:
    backgroundColor: "{colors.footer}"
    textColor: "{colors.ink-muted}"
---

## Overview

The measured page is Ducati's Thailand market home page (finalUrl `https://www.ducati.com/th/th/home`, title "Ducati: Moto, MotoGP & Superbike", document language th-TH, with the page content in English). The extractor reached this market page from the queued ducati.com root; it is the brand's own full home page for that market, not a language splash.

A thin top strip carries the Scrambler Ducati "The Land of Joy" logo at left and the market selector (THAILAND) and MYDUCATI at right. Below it floats a white header bar over the hero: a hamburger icon with MODELS and EXPERIENCE menus at left, the red Ducati shield centred, and PRICE LIST, TEST RIDE and DEALER LOCATOR at right, all in condensed uppercase.

The hero is a full-bleed carousel in deep reds. In the capture it shows a rider in red leathers wheeling a red superbike in front of a packed grandstand, the slogan "LIVE THE LEGEND / CELEBRATE 100 YEARS TOGETHER" in heavy extended capitals, a small date "JULY 3-5, 2026" and the h1 "World Ducati Week - Centenary Edition" in white at 48px, with a red "DISCOVER MORE" button at bottom right and carousel dots at bottom left.

Under the hero, nine studio photographs of motorcycles on off-white sit in a three-by-three grid, each with a small grey model name (Monster+, Multistrada V4 S, XDiavel V4, Panigale V2 S, Panigale V4 S, Streetfighter V2 S, Streetfighter V4 S, Multistrada V2 S, Diavel V4) and a short black tagline ("I M Legend", "Wonder. Engineered.", "Dare to be Bold."). Then a grey "Highlights" divider heading, a white contest card with a red left rule ("Multistrada V4 Voyagers 2026" with a red "DISCOVER MORE" link) beside a photo collage, an "Enjoy Ducati to the fullest" divider, three dark image tiles (Ducati Configurator, Scrambler Configurator, Ducati Shop), a newsletter signup, and a black footer ("DUCATI | Member of the Audi Group").

## Colors

- **canvas `#fafafa`**: the off-white page surface, the largest measured background.
- **page-body `#ebebeb`**: the CSS body background, also the border colour of the email input.
- **surface `#ffffff`**: the header bar, contest card and input fill.
- **ink `#0f0f0f`**: near-black text (the most-read colour) and the footer background.
- **ink-secondary `#666666`**: body copy and small print.
- **ink-muted `#bbbcbc`**: the light grey of divider headings ("Highlights", "Enjoy Ducati to the fullest") and footer links; with 50% alpha (**hairline `#bbbcbc80`**) it draws rules.
- **primary `#cc0000`**: Ducati red, measured as text colour on red action labels. **red-link `#cb1517`**: the red of text links such as "DISCOVER MORE" in the contest card.
- **on-dark `#fafafa`**: hero headline colour.
- **input-text `#000000`**: text in the email field.

The red fill of the "DISCOVER MORE" and "SUBSCRIBE NOW" buttons is visible in the capture but was not recorded as a CSS background colour, so it is not a separate token here.

## Typography

Ducati uses three custom families, all loaded at 400 and 700: **ducati-extended** for headlines, **ducati-condensed** for navigation, links and model names, and **ducati** for running text. By characters, condensed leads (3435), then ducati (1250), then extended (976). Almost everything is tracked.

- **display**: ducati-extended 48px/57.6px, weight 700, 0.8px tracking, the hero h1.
- **Divider headings** ("Highlights") measure 32px, weight 700, 0.8px tracking, and the newsletter heading 25px, weight 700; their family was not recorded.
- **heading**: ducati-extended 24px/33.6px, weight 700, 0.8px tracking, card headlines.
- **body**: ducati 12px/18px, weight 400, 0.8px tracking.
- **link**: ducati-condensed 14px/16.1px, weight 400, uppercase, 1px tracking, the header menu items.
- **input**: 14px uppercase in the email field.

The most common sizes are 14px (2458 characters), 15px (1474, with 0.3px tracking) and 12px; 14px text appears with 1.1px, 1px and 0.8px tracking. Weights are 400 and 700 with a few characters at 800. The families are proprietary; the declared fallback is Arial.

## Layout

At 1280px the page is 3817px tall. The hero band is 768px of imagery with content from x=30 to x=1199. The main `#fafafa` band runs 1714px with content between x=62 and x=1218 in three columns (the model grid). The configurator tiles form a 195px media band, the newsletter band is 563px, and the black footer is 345px with two columns between x=140 and x=1140.

Paddings are mostly 10px (78 uses) and 12px (71), then 15px and 30px; larger values (44px, 60px, 70px, 80px) separate sections. The extraction counted up to seven card columns (recorded in the hero band). Divider headings sit centred between two thin rules.

## Elevation & Depth

Elevation is light. Two shadows are measured: `rgba(0, 0, 0, 0.2) 0px 6px 24px 0px` and `rgba(0, 0, 0, 0.1) 0px 0px 17px 0px`, one use each; in the capture the floating white header bar and the white contest card are the raised elements. Motorcycles are photographed with soft floor shadows on the off-white canvas, which gives the grid a studio feel. Configurator tiles darken their photographs to hold white text.

## Shapes

Corners are nearly square. 2px is the dominant radius (73 uses), circles (`100%`, 22 uses) are used for carousel dots and round icons, and 5px appears once. The header bar, contest card, input and buttons are rectangular in the capture. The contest card is marked with a red vertical rule on its left edge.

## Components

- **Header bar**: white floating bar inside the hero, hamburger and condensed uppercase menus (MODELS, EXPERIENCE) with chevrons, centred red shield, utility links at right.
- **Navigation link**: ducati-condensed 14px uppercase, `#0f0f0f`, 1px tracking.
- **Hero CTA** ("DISCOVER MORE"): a red rectangular button with white condensed uppercase label in the capture; its fill colour is not measured.
- **Model tile**: studio photo on off-white, small grey model name, black tagline below, centred.
- **Contest card**: white, red left rule, small "CONTEST" eyebrow, 24px extended headline, 12–15px grey copy, red uppercase "DISCOVER MORE" link.
- **Configurator tile**: full-height dark photo with a white centred title.
- **Email input**: white, 1px `#ebebeb` border, square, 60px tall, `0px 20px` padding, uppercase placeholder "YOUR EMAIL ADDRESS", next to a red "SUBSCRIBE NOW" button.
- **Footer**: `#0f0f0f`, "DUCATI | Member of the Audi Group", small grey uppercase links, social icons, market selector.

## Design System Architecture

No public Ducati design system or brand guideline was reached; the company page on ducati.com returned HTTP 403. The page exposes no CSS custom properties on `:root` (zero root variables), so its system is visible only through its values: three purpose-split custom families (extended for headlines, condensed for navigation, regular for text), consistent tracking on every size, a neutral off-white/near-black palette with one red, and 2px corners. Most of the stylesheet's breakpoint rules are `min-width` queries (see Responsive Behavior). To rebuild, define the three families as roles and keep a single red accent.

## Do's and Don'ts

**Do**
- Use ducati-extended bold for headlines and ducati-condensed uppercase for navigation and labels.
- Track text: 0.8px on headlines and body, 1px on condensed uppercase links.
- Keep the canvas off-white `#fafafa` and photograph bikes as studio cut-outs on it.
- Use red (`#cc0000` / `#cb1517`) only for actions and accents.
- Close the page in near-black `#0f0f0f`.

**Don't**
- Don't round corners beyond 2px on rectangular elements.
- Don't introduce extra accent colours; the palette is red, near-black, greys and off-white.
- Don't set long text in the extended family.

## Responsive Behavior

The extractor's mobile pass recorded: the hero h1 shrinks from 48px/57.6px to 27px/27px (still ducati-extended 700, 0.8px tracking); the card heading stays 24px/33.6px; body stays 12px/18px. No header links and no menu toggle were counted visible in either pass. The extraction counted up to two card columns on mobile (seven on desktop). Mobile bands are a 433px hero, a 3131px `#fafafa` band with content between x=20 and x=370, further media and off-white bands, and a 709px black footer. Mobile font sizes by frequency are 12, 18, 14, 15, 27, 23, 25 and 24px.

The stylesheet's breakpoints are mostly `min-width 740px` (1350 rules), `min-width 980px` (1084), `min-width 1100px` (218), `max-width 979.84px` (188) and `max-width 739.84px` (178). Grid behaviour at each breakpoint is not measured.

## Iteration Guide

1. Start with `#fafafa` canvas, `#0f0f0f` ink and `#666666` copy.
2. Assign the three Ducati families by role: extended for headlines, condensed for navigation, regular for text.
3. Apply tracking on every size (0.8px default, 1px on uppercase condensed).
4. Use red only for CTAs and links; measure the button fill before adding a token for it.
5. Keep shapes square (2px) and present motorcycles as studio photographs in a three-column grid.
6. Measure the model pages and configurator before adding tokens for specs, price lists or forms.
