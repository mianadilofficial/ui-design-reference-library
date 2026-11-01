---
version: alpha
name: Emele Collab
category: "Portfolio"
description: "Emele Collab (emelecollab.com), a creative studio home page that is a typographic index: names in a heavy condensed uppercase face at 92.8px over 74.24px line-height, black #000000 on white #ffffff, with 15px edge navigation and no shapes."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  surface: "#ff0000"
typography:
  display:
    fontFamily: pr, sans-serif
    fontSize: 92.8px
    fontWeight: 400
    lineHeight: 74.24px
    textTransform: uppercase
  display-mobile:
    fontFamily: pr, sans-serif
    fontSize: 39.4px
    fontWeight: 400
    lineHeight: 35.46px
    textTransform: uppercase
  link:
    fontFamily: sc, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
rounded:
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 28px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
---

## Overview

emelecollab.com is the home page of Emele Collab, titled "Home — Emele Collab" and labeled in its own corner text as a "Creative Studio". The home view is a pure typographic index: a centered stack of project and client names, one per line, set in a heavy condensed uppercase grotesque, black on white, repeating in a loop (the capture shows the list running twice). The first line is the numeric string "13.1.13.4", followed by names such as Xanvier Allison, Hilary Eden, Jump Factory, Adcker, Jochi Labs, Sonder, Marianna Von Fedak, Farah Gorayeb, Newol, The Cortège, Future Agency, Salmara Swimwear, Matt Jones Orchestra, Selina Miles, Built By Ross, Hybrid Creative Lab, Moxey, Into The Swell, Nate Walker, Arkitektkontoret Vest, Bruno Suraski, Golf Fit, Iiwi Pizzeria, Lidia Conde, Sotogrande Life Experience and Barbara Skrodzka.

The page measures 3,618px tall at a 1280px viewport with 312 visible elements. There is no hero image, no paragraph copy and no button in the measured view. The microcopy is limited to navigation: a wordmark "Emele Collab" at top left, a view switcher "List / Grid / Gallery" at top center, "Studio" and "Lab" at top right, and two edge labels in the middle of the viewport, "Creative Studio" on the left and "Email Us" on the right.

## Content Model

The index mixes several kinds of entry without visually distinguishing them. Personal names (Xanvier Allison, Hilary Eden, Marianna Von Fedak, Farah Gorayeb, Nate Walker, Bruno Suraski, Lidia Conde, Barbara Skrodzka), businesses and studios (Jump Factory, Sonder, Future Agency, Hybrid Creative Lab, Moxey), a swimwear label (Salmara Swimwear), a pizzeria (Iiwi Pizzeria), a music act (Matt Jones Orchestra), an architecture office (Arkitektkontoret Vest) and a real-estate lifestyle brand (Sotogrande Life Experience) all share one style and one size. The numeric opener "13.1.13.4" is set identically to the names, so it reads as the first row of the list rather than as a heading. This flat treatment is the content strategy visible in the capture: the studio's range is communicated by the sheer length of a uniform list, not by case-study hierarchy. The switcher offers three presentations of the same material (List, Grid, Gallery); only the list was measured, so the other two are known by label only.

## Colors

The measured palette has two colors: white canvas (#ffffff) and black ink (#000000). "Primary" resolves to black because the only interactive text is black. The extraction also recorded a pure red (#ff0000) as a background value, and it is the only background color in the frequency list besides the white canvas, but no red area is visible in the full-page capture, so its use (for example a state of the view switcher) was not observed and is not documented as a behavior. It is kept as `surface` because it is a measured value.

All emphasis comes from scale and weight, never from hue. This makes the page a high-contrast black-and-white system, with 21:1 contrast between ink and canvas (a property of #000000 on #ffffff).

## Typography

Two families are declared with the short names `pr` and `sc`, both with a sans-serif fallback. `pr` is the display face (92.8px, weight 400, line-height 74.24px, uppercase) and `sc` is the small interface face (15px, weight 400, line-height 22.5px). These are the names used in the page's @font-face rules; the underlying commercial typeface names were not identified from a source, so none is claimed here. In the capture the display face is a tight, heavy, condensed grotesque.

By character count, 92.8px accounts for 694 characters and 15px for 61, so the entire page is just two sizes. The line-height of the display (74.24px) is 80 percent of its size, which stacks the names with almost no air between lines. On mobile the display measures 39.4px with a 35.46px line-height, still uppercase. A substitute for the display role would be any heavy condensed grotesque set uppercase with leading near 0.8.

## Layout

The layout is one centered column of lines that span the full width, with each line's length determined by the name, producing a ragged symmetrical silhouette. Fixed navigation labels sit at the extreme edges of the viewport at 15px. The vertical list is the content; scrolling is the interaction, and the list repeats to give the impression of an endless loop. Measured gaps are 4px and 10px, and the spacing tokens are 4px, 8px, 10px, 12px and 28px.

## Elevation & Depth

None measured. The root custom properties are all Tailwind defaults (`--tw-shadow`, `--tw-ring-shadow` set to "0 0 #0000"), meaning no shadow is applied. The page is flat black type on white.

## Shapes

No border radius, border, card or button shape was measured on the home page. The only shapes are letterforms. The rounded object is absent entirely, so the token set has no `rounded` values.

## Components

Link: the 15px `sc` face in black, line-height 22.5px, used for the wordmark, the view switcher (List, Grid, Gallery), Studio, Lab, Creative Studio and Email Us. In the capture the "List" label appears blurred, and the reason for that rendering was not measured. Display list item: a single uppercase name in the 92.8px style, centered, with no decoration, link underline or marker visible in the capture. There are no buttons, inputs, cards or footers measured.

## Design System Architecture

No public design system was found. The root variables include Tailwind-style `--tw-*` defaults and a WordPress-generated placeholder (`--wp-internal-comment` is present among the root variables) and `--tw-*` defaults such as `--tw-ring-color: rgba(59,130,246,.5)`, which is the framework default and not a brand color. There are no brand-level custom properties (no named colors, spacing or font tokens), so the de-facto system is: two font families, two sizes, black on white. No official source beyond the home page was opened for this entry.

## Do's and Don'ts

Do set names as large uppercase condensed type with tight leading and center them. Do keep the interface text at one small size (15px) at the edges. Do keep the palette to black and white and let the list itself be the visual.

Don't add images, color, rounded corners or shadows to the index view. Don't use more than the two measured sizes. Don't add explanatory paragraphs; the page lets the names speak. Don't treat the blue Tailwind ring color as part of the brand.

## Responsive Behavior

Measured at 390px mobile: the display size drops from 92.8px to 39.4px (line-height 35.46px). Other roles (body, button, nav) were not measured on mobile, and the way the edge labels and view switcher reflow is not measured.

## Iteration Guide

To add an entry, append another uppercase name in the display style, 92.8px over 74.24px, weight 400, black on white, centered. Keep new interface labels in the 15px `sc` face. If a view other than List is needed (Grid, Gallery), those views were not measured here and need their own measurement before any values are specified. Introduce no new colors unless a red state is observed and measured: the only non-neutral measured value is #ff0000.

## Measurement Notes

The extraction recorded 312 visible elements and a 3,618px page at 1280px width. The h1 role resolved to the first list line ("13.1.13.4"), which is why the display style is attributed to that string; no semantic heading separate from the list was measured. Frequency data show only two font sizes (92.8px and 15px), one text color (#000000) and the background colors #ff0000 and #ffffff. No hover, focus, motion or dark-mode state was captured, so none is specified. The token set deliberately has an empty radius scale because no border radius was measured on this page.
