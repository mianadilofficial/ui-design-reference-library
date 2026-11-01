---
version: alpha
name: AVATR Vision Xpectra
category: "Tech & AI"
description: "AVATR Vision Xpectra (vision.avatr.com), the concept-car microsite 'The Rise of Emotive Luxury': a black #010101 preloader and film hero that opens onto white #ffffff and deep-navy #001133 feature sections, one custom light-weight face named base at 300 and 400, 12px captions, 28px card titles, and 3.78px-radius black and outlined buttons."
colors:
  canvas: "#ffffff"
  page-body: "#242428"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-navy: "#001133"
  surface-black: "#010101"
  ink-muted-on-dark: "#ffffff33"
  hairline: "#24242833"
  button-border: "#ffffff66"
typography:
  display:
    fontFamily: base
    fontSize: 40px
    fontWeight: 300
    lineHeight: 48px
  display-mobile:
    fontFamily: base
    fontSize: 32.1215px
    fontWeight: 300
    lineHeight: 38.5458px
  card-title:
    fontFamily: base
    fontSize: 28px
    fontWeight: 400
    lineHeight: 33.012px
  body:
    fontFamily: base
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  button:
    fontFamily: base
    fontSize: 12px
    fontWeight: 400
    lineHeight: 12px
rounded:
  xs: 3.78px
  sm: 4px
  md: 15.11px
spacing:
  s1: 7.56px
  s2: 9.44px
  s3: 15.11px
  s4: 18.89px
  s5: 22.67px
  s6: 30.22px
  s7: 37.78px
  s8: 52.89px
  s9: 141.67px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 47px
  button-secondary:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15.1111px 22.6667px
    height: 47px
    borderColor: "{colors.button-border}"
  step-link:
    textColor: "{colors.ink-muted-on-dark}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.md}"
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    padding: 22.6667px 30.2222px 30.2222px
---

## Overview

AVATR Vision Xpectra is a single-page launch site for a concept car (page title "AVATR Vision | The Rise of Emotive Luxury"; header wordmark "AVATR" at the left and "VISION XPECTRA" in the centre). The extraction measured 1280px wide and 26853px tall with 1165 visible elements. The experience opens black: a preloader shows "VISION XPECTRA", the headline "The Rise of Emotive Luxury." at 40px weight 300, a thin white progress line with a percentage counter, and after loading an "Enter the Experience" button outlined in a hairline. The shipped capture caught the page at the preloader ("99%") with the rest of the page unpainted white, so the visual description below is taken from a live render opened during writing; every number stays tied to the extraction.

After entry, a full-viewport film of the car appears: a dusk-blue and violet studio, a long dark body with columns of white light bars glowing through the door surfaces, the headline "It's Time. For the Rise of Emotive Luxury." at the left, a "Watch the Film" outlined button bottom-left and "Scroll to Discover" bottom-right. The header shows "About", a sound-wave toggle and a language selector ("English" and a link to a Chinese version). Scrolling moves to white sections where very large black statements ("More than a vehicle — a reflection of your inner self...") appear as the page scrolls, then numbered progress links (01 Inspiration, 02 Solid, 03 Soft, 04 Particles) and a feature area ("Features", "360º vision") with white cards titled "01 The Exterior / Bold and Luxurious Proportions", "Prismatic Glass Cabin", "Wakeup & Recognition". The voice is aspirational and short-sentenced: "We feel.", "It sees you. Feels with you. Moves with you.", phrases such as "Emotive Luxury", "Bold Confidence", "Vibrant Individuality" and "Harmony with a Twist". The copy names the design idea "The Energy Force" and splits it into Solid, Soft and Particles.

## Colors

The palette is achromatic with one deep navy. No saturated brand color was measured; color comes from the car imagery.

- **Canvas `#ffffff`** is the white of the feature sections: the largest measured background area (12625) and 67% of the capture's pixels. **Surface navy `#001133`** (9421 area units) is the deep midnight blue of the dark feature sections. **Surface black `#010101`** (1702) is the preloader, hero and footer field; `#000000` also appears as a background area (1044). **Page body `#242428`** is the root fill reported behind the sections.
- **Ink `#000000`** is the most-read text color (5174 characters), used on white; **on-primary `#ffffff`** (1653 characters) is text on the dark fields and on black buttons. **Ink muted on dark `#ffffff33`** (41 characters) is the 20% white of the inactive step links ("01 Inspiration").
- **Primary `#000000`** is the fill of the "Next Feature" button (47px tall, 202px wide, radius 3.78px) and the only measured button fill. The secondary button has no fill and a `1px solid #ffffff66` border (white at 40%).
- **Hairline `#24242833`** (7 elements) is the divider on white; **button border `#ffffff66`** (4 elements) is the outline on dark.

## Typography

A single custom family declared as `base` carries 6867 of the page's 6868 characters (Arial 1): the stylesheet loads it at weights 300 and 400 only, so the whole page is light or regular. The real typeface name is not exposed in the page data; in the capture it is a light, slightly wide geometric sans. Sizes by character count: 12px (6241), 28px (477), 40px (150). Weights: 400 (6807), 300 (61). Letter-spacing measured as `normal` everywhere.

- **Display**: 40px / 48px, weight 300 ("The Rise of Emotive Luxury."). Mobile pass: 32.1215px / 38.5458px.
- **Card title**: 28px / 33.012px, weight 400 ("Bold and Luxurious Proportions"). Mobile pass: 24.1215px (496 characters).
- **Body and captions**: 12px / 18px, weight 400, on both light and dark fields; section labels such as "/ The Exterior" use the same size.
- **Button and step links**: 12px with 12px line-height, weight 400.

The page's scale is therefore extremely compressed: three sizes only (12, 28, 40px), a ratio of more than 3 between caption and headline. If the face is unavailable, any light geometric sans at weights 300 and 400 reproduces the hierarchy.

## Layout

The grid is declared in `:root`: `--padgrid: 2.4rem`, `--gutgrid: .8rem`, `--sizegrid: calc(100vw - ((var(--padgrid)) * 2))`, `--padgut: calc(var(--gutgrid) + var(--padgrid))`, `--headH: 62px`, `--mobileMax: 540` and `--touch: 1194`. The header is 62px high and floats over the film. In the capture the preloader copy sits in a centred column; the later sections alternate full-bleed black or navy film panels with white text panels; cards are 310px wide and 380px tall.

Measured paddings are 30.2222px (15 uses), 37.7778px (11), 18.8889px (10), 15.1111px (10), 9.44444px (8), 22.6667px (6), 52.8889px (4) and 141.667px (4); gaps are 15.1111px (8), 22.6667px (8), 7.55556px (3), 30.2222px (2). The footer is 1280px wide, 274px tall, on `#010101`, padding `22.6667px 30.2222px 30.2222px`, with "Join Us", e-mail contact lines, "Discover AVATR Brand", "Cooperation and joining", "Legal Terms" and "Policies". Density is low: large empty fields, one statement per screen.

## Elevation & Depth

No box-shadow was measured. Depth comes from the photography and film (lit surfaces against a dark studio), from the switch between black, navy and white fields, and from hairlines (`#24242833` on white, `#ffffff66` on dark). The white cards are separated from their navy or white backgrounds by their 15.1111px radius and the contrast of the field behind them, not by shadow.

## Shapes

Corners are small and consistent. Buttons measure `3.78px` (9 elements; the primary CTA reads 3.77778px) and `4px` (4 elements, the outlined "Watch the Film" button); the feature card measures `15.1111px`; one element measures `50%` (a round control, not identified in the extraction). The "Enter the Experience" button in the preloader is a hairline rectangle. Imagery is full-bleed and rectangular.

## Components

- **Button primary ("Next Feature")**: `#000000` fill, `#ffffff` text, `base` 12px, radius 3.78px, 47px tall and 202px wide.
- **Button secondary ("Watch the Film")**: transparent, white text, `1px solid #ffffff66`, radius 4px, padding `15.1111px 22.6667px`, 47px tall and 164px wide, with a circular play icon at the left.
- **Preloader button ("Enter the Experience")**: hairline-outlined rectangle under the progress bar; the preloader is part of the first impression but is a transient state.
- **Step link**: "01 Inspiration", "02 Solid", "03 Soft", "04 Particles" at 12px in `#ffffff33`; link targets are in-page anchors (`#inspiration`, `#solid`, `#soft`, `#particles`) with further anchors for "Responsive Capsule", "Vortex", "Cortex", "Transparent Display", "CMF", "Lamella Sculpture" and "VPA x Reflex Sound".
- **Feature card**: white `#ffffff`, black text, 28px / 33.012px title, 310px by 380px, radius 15.1111px, numbered label ("01 The Exterior") above the title and a short description below.
- **Header**: 62px, wordmark left, "VISION XPECTRA" centre, "About", sound toggle and language menu right, with a thin progress line along the top edge.
- **Footer**: `#010101`, white 12px text.

## Design System Architecture

There is no public design system for this microsite. Neither the page at https://vision.avatr.com/ nor its "Discover AVATR Brand" link (https://vision.avatr.com/about) exposes brand guidelines or a design system; the footer links to legal terms and policies on https://www.avatr.com/en. The page is a JavaScript-rendered experience (a plain fetch of the URL returned only the title). Its de-facto system is eight `:root` custom properties (the grid and breakpoint values listed under Layout), one font face named `base` (weights 300 and 400), and per-section styling. The `:root` values declare `--mobileMax: 540` and `--touch: 1194` as breakpoints; the feature list in the nav (Responsive Capsule, Vortex, Cortex, Transparent Display, CMF, Lamella Sculpture, VPA x Reflex Sound) is content, not a component inventory.

## Do's and Don'ts

- Do keep the page achromatic: white `#ffffff`, deep navy `#001133`, black `#010101`, with the car imagery supplying color.
- Do use one light face at 300 and 400, and only three sizes: 12px, 28px and 40px on desktop.
- Do use black `#000000` buttons and hairline-outlined buttons (`#ffffff66`) with a radius of 3.78px or 4px.
- Do open with a quiet black preloader and one headline; give each later screen one statement.
- Don't add drop shadows; none were measured.
- Don't add a saturated accent color; none was measured.
- Don't use heavy weights; 300 and 400 are the only loaded weights.
- Don't document the sound toggle or preloader percentage as brand components.

## Responsive Behavior

Measured in the 390px mobile pass: the display headline is 32.1215px / 38.5458px at weight 300 (40px / 48px on desktop) and its box is 350px wide; the character-size histogram is 12px (6113), 24.1215px (496) and 32.1215px (150), against 12px, 28px and 40px on desktop; mobile body text stays 12px / 18px. The stylesheet declares `--mobileMax: 540` and `--touch: 1194`. How the film, the cards, the step navigation and the header behave at narrow widths was not measured.

## Iteration Guide

1. Set fields first: `#010101` for film, preloader and footer, `#001133` for dark feature panels, `#ffffff` for text panels.
2. Use `base` at 300 for display (40px) and 400 for 28px card titles and 12px copy.
3. Build buttons as 47px-tall rectangles: black `#000000` with white text, or transparent with a `1px solid #ffffff66` border; radius 3.78px or 4px.
4. Keep the grid variables: `--padgrid` 2.4rem, `--gutgrid` .8rem, `--headH` 62px.
5. To add detail, measure the post-load state with a longer wait, then run `node web/scripts/verify-designs.mjs --slug=avatr-vision-xpectra`.
