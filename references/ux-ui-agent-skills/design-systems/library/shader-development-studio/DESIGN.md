---
version: alpha
name: Shader Development Studio
category: "Portfolio"
description: "Shader (shader.se), a Norrköping creative development studio for WebGL, 3D and AI experiences. Pure black canvas #000000, a single warm off-white #fcf9f3 for all text, one typeface (STIX Two Text serif, 16px/24px, weight 400), and square corners everywhere: no rendered border radius."
colors:
  canvas: "#000000"
  ink: "#fcf9f3"
  primary: "#fcf9f3"
typography:
  display:
    fontFamily: "\"STIX Two Text\", \"STIX Two Text Fallback\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
spacing:
  none: 0px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
---

## Overview

Shader is a creative development studio based in Norrköping, Sweden, whose home page (https://www.shader.se/) describes it as "A Creative Development Studio, Plugged into the Future". It builds interactive 3D and AI experiences for the web: WebGL experiments, interactive product visualisation, mobile and augmented-reality apps, UI and motion design. The site is the studio's own showreel, so the interface is deliberately quiet and lets a rendered 3D scene carry the personality.

The measured page is a black canvas (#000000) with a single warm off-white (#fcf9f3) used for every character of text: the extraction recorded 3,454 characters, all #fcf9f3, all STIX Two Text, all 16px, all weight 400. There is no second color, no accent hue and no second type size in the visible DOM. The hierarchy is made by position, scene imagery and copy rather than by typographic scale.

The capture shows a full-bleed, dark, grainy 3D render: a retro beige personal computer with a keyboard and a monitor sits on a misty, violet-grey floor in the right of the frame, with fog and fine noise over a near-black backdrop. The text layer floats over that scene. The result reads as nostalgic computing seen through modern shader work, which suits a studio named after GPU programs.

Copy voice, from the page text the fetch returned: playful and confident ("Let's interface, call us today!", "We're not your regular IT department. We don't troubleshoot printers."), with one section that deliberately switches to corporate jargon about strategic alliances and turnkey solutions as a joke on enterprise language. The repeated call to action is "Book a call".

## Colors

The palette is two measured values.

- **Canvas, #000000.** The body background and the measured canvas role. The screen pixels of the capture sample darker greys (#141414 and #1b1b1a) because the 3D render and film grain sit on top of the black.
- **Ink, #fcf9f3.** A warm, slightly yellow white. It is the body color, the link color, the nav color, and the `--foreground` custom property on the root element.
- **Primary, #fcf9f3.** The extractor found no filled button (`ctaPrimary` is null), so the action color is the same ink. "Book a call" is a text link in the nav, not a filled button. Primary is therefore documented as the ink color, not as a separate hue.

The root also declares `--background: #fff`, a Tailwind default that the rendered body overrides with black; it is not the brand canvas. The shipped CSS contains Tailwind defaults (`#3b82f6`-family ring colors, `#e5e7eb`, `#9ca3af`, `#ef4444`, `#60a5fa`) that come from the framework utility layer and are not rendered on the visible page, so they are not brand colors.

## Typography

One family only: **STIX Two Text**, loaded at weights 400 and 700 (normal style), with the generated "STIX Two Text Fallback" metric-matched face. STIX Two Text is an open-source serif family derived from the Times lineage, released by the STI Pub consortium; it is available from Google Fonts for substitution if a local copy is not at hand.

Every measured text node is 16px with a 24px line height and weight 400, letter spacing normal, no text transform. The mobile pass measured the same single size (16px, 3,454 characters). Link, nav link, body paragraph and the "Book a call" label are indistinguishable typographically. Choosing a serif at body size for everything gives the page an editorial, slightly bookish tone against the high-tech subject.

Fallback stack: use the declared family then "STIX Two Text Fallback". No other families are rendered; `ui-sans-serif`, `ui-monospace`, Arial and `inherit` appear only in the shipped stylesheet as framework defaults.

## Layout

The page is 1,280px wide in the desktop pass and 2,400px tall, built as a scroll-driven showcase: hero scene, a project carousel with previous/next controls, a studio intro, client partners, an enterprise pitch and a contact block with a visiting address, social links and a separate CEO email for new business. Navigation is a short list: Home, Selected Work, About Us, Contact, plus "Book a call". A footer link points to an Accessibility Statement.

Spacing tokens were not measured: `gaps` and `paddings` frequencies are empty and the measured text elements have 0px padding. Spacing is therefore described qualitatively: text blocks are placed on the render with generous empty space, not in boxed containers. The root exposes `--vh: 1svh`, `--vw: 1svw`, `--page-height: 3` and `--page-width: 1`, which show that the page is sized in small-viewport units and in a three-screen-high scroll.

## Elevation & Depth

No box shadows were measured on rendered elements (`boxShadows` is empty). Depth comes entirely from the 3D scene: fog, a lit beige object, a glowing monitor, chromatic fringing and grain. Interface text has no panels, cards or drop shadows. The only shadow strings in the stylesheet are Tailwind `--tw-shadow` variables set to `0 0 #0000`, i.e. no shadow.

## Shapes

`desktop.frequencies.borderRadii` is empty: every rendered element computes a 0px radius, so the interface is square-cornered. This is recorded as `rounded.none: 0px`. The stylesheet contains 4px and 6px radii in its corpus, but no visible element uses them, so they are not part of the design. There are no pill buttons, no rounded cards and no circular avatars measured.

## Components

Only text-level components exist in the measurement.

- **Link.** #fcf9f3, STIX Two Text 16px/24px weight 400; for example "Book a Call Today" in the page body.
- **Nav.** Text color #fcf9f3 on the transparent area above the black canvas; entries Home, Selected Work, About Us, Contact and "Book a call".
- **Nav link.** Same typography as the body; no underline, border or fill was recorded for the nav link ("Book a call" is 74px wide and 16px tall, no padding).
- **Carousel.** Previous and next controls exist in the page text; their styling was not measured.

No input, card or filled button was found in the measurement (`input` and `cards` are empty, `ctaPrimary` is null). Hover states were not captured (`hover` is empty).

## Design System Architecture

No public design system or brand guideline was found: the pages opened (the home page) link to none. The de-facto system is a Next.js-style Tailwind build: the root carries Tailwind variables (`--tw-ring-offset-width`, `--tw-shadow`, `--tw-ring-color` and friends), a `--font-stix` font variable, and the project-specific variables `--background`, `--foreground`, `--vh`, `--vw`, `--page-height` and `--page-width`. The font is loaded through a variable named `--font-stix`, which indicates a framework font loader. Design decisions live mostly in the 3D scene code, not in tokens: the token layer is tiny (one background, one foreground, one font).

## Do's and Don'ts

- Do keep the canvas at #000000 and set all text in #fcf9f3.
- Do use STIX Two Text at 16px/24px weight 400 for everything, and let the 3D imagery carry the visual weight.
- Do keep corners square: the measured radius is 0px.
- Do keep copy playful and short, with "Book a call" as the repeated action.
- Don't add accent colors, filled buttons or colored badges; none were measured.
- Don't introduce a sans-serif or a display face; one family only was rendered.
- Don't use Tailwind default blues or the `#fff` `--background` variable as brand colors.
- Don't add drop shadows or cards; depth is from the render.

## Responsive Behavior

The mobile pass measured the same body role (16px/24px, STIX Two Text, #fcf9f3) with 3,454 characters at 16px, so the type size did not change at the measured mobile width. Nav collapse, carousel behavior, breakpoints and touch target sizes were not measured. Mobile layout beyond type size: not measured.

## Iteration Guide

1. Start from a black full-bleed scene; put text on top in #fcf9f3 STIX Two Text 16px/24px.
2. Express actions as text links ("Book a call"), not filled buttons.
3. Keep every radius at 0px.
4. If you need hierarchy, change copy and position first; no second size or weight was measured, so any extra size is a new decision to be recorded, not a brand value.
5. Verify with `node web/scripts/verify-designs.mjs --slug=shader-development-studio` after edits.
6. Re-measure with the extractor before adding any new token (hover colors, carousel controls, mobile nav).
