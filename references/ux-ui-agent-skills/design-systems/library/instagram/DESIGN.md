---
version: alpha
name: Instagram
category: "Product & SaaS"
description: "Instagram's logged-out web entry page: white #ffffff canvas, #111112 headline in Instagram Sans Regular at 35.84px, #737373 footer text at 12px, a #0064e0 blue for the login button and outlined create-account pill, Optimistic for form text, and 16px to 40px radii around a login panel next to a collage illustration."
colors:
  canvas: "#ffffff"
  ink-muted: "#737373"
  primary: "#0064e0"
  surface-3: "#f3f4f5"
  ink: "#111112"
  ink-3: "#686a6e"
  ink-4: "#28292b"
typography:
  display:
    fontFamily: "\"Instagram Sans Regular\""
    fontSize: 35.84px
    fontWeight: 400
    lineHeight: 64.8px
  display-mobile:
    fontFamily: Optimistic, system-ui, -apple-system, "system-ui", ".SFNSText-Regular", sans-serif
    fontSize: 17px
    fontWeight: 600
    lineHeight: 21.9997px
  body-dominant:
    fontFamily: "-apple-system"
    fontSize: 12px
    fontWeight: 400
  input:
    fontFamily: Optimistic, system-ui, sans-serif
    fontSize: 15px
    fontWeight: 500
    lineHeight: 19.0005px
rounded:
  xs: 16px
  sm: 22px
  md: 40px
spacing:
  s1: 1px
  s2: 2px
  s3: 6px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 18px
  s8: 20px
  s9: 40px
  s10: 52px
components:
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 18px 2px 1px
    height: 38px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    padding: 0px 16px
---

# Instagram

## Overview

What the extractor measured at https://www.instagram.com/ (title "Instagram") is not a feed but the logged-out entry page, a two-column composition: at the left the colour glyph logo, the headline "See everyday moments from your close friends." and a collage illustration of stacked phone-shaped photo cards; at the right a "Log into Instagram" panel with two floating-label fields, a "Log in" button, a "Forgot password?" link, a grey "Log in with Facebook" button, an outlined "Create new account" pill and a Meta lockup. A thin vertical hairline divides the columns and a footer of small grey links closes the page (Meta, About, Blog, Jobs, Help, API, Privacy, Terms, Locations, Instagram Lite, Meta AI, Threads, Meta Verified, a language selector and "© 2026 Instagram from Meta"). The opened page content matches this structure.

Colour is nearly absent from the interface. The page is white (#ffffff), text is near-black (#111112) or grey (#737373, #686a6e, #28292b), and a single blue (#0064e0) marks the actions. The only chromatic exuberance is in the logo glyph and in the pink-to-orange gradient emphasis on the words "close friends" in the headline; gradient values for those were not measured, so they are described, not tokenised. In the capture the Log in button appears in a pale blue tint; its measured fill is #0064e0, and the reason for the paler rendering was not determined.

## Colors

- **Canvas (#ffffff):** the page; the measurement also records translucent white (#ffffff33) overlays.
- **Ink (#111112):** headline and input text; `ink-4` (#28292b) is a darker secondary text; `ink-3` (#686a6e) is a mid grey and also appears as a border; `ink-muted` (#737373) is the most-read grey, used for 12px footer and helper text.
- **Primary (#0064e0):** the measured button fill and the colour of the outlined "Create new account" text and border.
- **Surface (#f3f4f5):** a measured light grey background fill; in the capture the "Log in with Facebook" button shows a pale grey fill like it.
- **Focus ring:** the shipped CSS shows a focus shadow of white 2px then #1877f2 4px on the active field, the older Meta blue shown in the capture as the outline on the first input.

The browser default link colours are not used. The Instagram gradient colours are brand artwork in the logo and are not tokenised.

## Typography

Two families are loaded: **Optimistic** (weights 300 to 800) and **Instagram Sans Regular** (400). The headline uses Instagram Sans Regular at 35.84px, weight 400, line height 64.8px (very open, about 1.8), so the two-line headline in the capture has generous air between lines. Form fields and mobile type use Optimistic with system-ui fallbacks: inputs are 15px, weight 500, line height 19.0005px; the mobile h1 is 17px, weight 600, line height 21.9997px. Footer text is set at 12px in the -apple-system stack. The base default declared in the CSS custom properties is Helvetica, Arial.

Instagram Sans and Optimistic are proprietary to Meta. For substitutes, use a geometric-humanist sans such as system-ui or Helvetica for fields and a light-weight grotesque for the display line.

## Layout

The desktop page is split into a left marketing column and a right form column, with generous empty space around it. The left column's content is centred around the headline and collage; the right column stacks controls with 10px to 20px gaps. The measured spacing ladder is 1px, 2px, 6px, 10px, 12px, 16px, 18px, 20px, 40px, 52px. Field height is 38px with 18px of top padding to host the floating label. The footer is a horizontally centred wrap of links with 16px horizontal padding.

## Elevation & Depth

The panel uses no shadow except the focus ring. The collage illustration introduces depth through overlapping cards and soft drop shadows inside the artwork, not in the interface. The login panel is flat on white, delineated by the column hairline.

## Shapes

The radius ladder is 16px, 22px and 40px. Which radius belongs to which element was not measured per role, so they are listed without assignment. In the capture, buttons and outlined pills are fully rounded, inputs are rounded rectangles, and the logo glyph is a rounded square.

## Components

- **text-input:** #111112 text, Optimistic 15px weight 500, 38px high, padding 18px 2px 1px for a floating label, with a grey placeholder label above the typed value.
- **Primary action (capture):** blue #0064e0 fill pill labelled "Log in".
- **Secondary:** grey (#f3f4f5) pill with Facebook icon.
- **Outlined pill:** white fill, #0064e0 border and label for "Create new account".
- **footer:** canvas background, #737373 text, padding 0px 16px.

## Design System Architecture

No public Instagram design system was found. The Brand Resource Center page (https://www.meta.com/brand/resources/instagram/instagram-brand/) was opened; it governs logo and screenshot use and says detailed guidance sits in a Brand Elements section, but it gives no colour or type specifications, so it supplies no values here. The de-facto system in the shipped CSS combines Meta/Facebook-style tokens (for example `--fds-blue-60` #1877F2, `--always-gray-40` #65676B) with Instagram-prefixed ones (`--ig-colors-button-primary-background--pressed`), atomic generated names (`--x1pbyom4`), and component variables such as `--card-corner-radius` (4px) and `--tab-underline-height` (3px). That layering reflects a shared Meta base with an Instagram layer on top.

## Do's and Don'ts

- Do keep the interface white, black and grey with a single blue for actions.
- Do give the headline an open 64.8px line height.
- Do keep the gradient inside the logo and one emphasised phrase.
- Do use floating labels in 38px fields.
- Don't add gradients to buttons.
- Don't use the older #1877f2 blue except for focus rings seen in the CSS.
- Don't alter the word "Instagram" or the logo, per the Brand Resource Center page.
- Don't use grey #737373 for headlines.

## Responsive Behavior

On mobile the measured h1 collapses to a 17px Optimistic 600 style, which is a utility heading rather than the desktop headline, a different, much smaller heading style from the desktop headline. Other breakpoint behaviour was not measured.

## Iteration Guide

1. White canvas, #111112 headline in a light sans at 35.84px / 64.8px.
2. Single blue #0064e0 for the main pill and outlined secondary.
3. Fields 38px high with floating labels at 15px.
4. Footer in 12px #737373 text.
5. Illustration, not interface, provides colour and depth.

## Imagery and Voice Notes

The hero collage is a fan of three vertical photo cards with rounded corners: a saturated green-pink abstract image at the left, a central portrait of two smiling people with small interface chrome (a progress bar, a reaction bubble, a heart, a pill-shaped reply field) and a third card partly hidden at the right with a green badge and a circular story avatar. The composition shows the product's own vocabulary (stories, reactions, close-friends green) rather than stock photography, and it floats on pure white with soft shadows inside the artwork only. The logo glyph, a colourful rounded-square camera outline, sits at the top left of the page.

Voice is warm and plain: the headline is a promise about closeness, the form title is a simple "Log into Instagram", and every control label is two to four words (Log in, Forgot password?, Log in with Facebook, Create new account). The footer is one long run of small links without headings. Floating labels sit inside each field and shrink above the typed value, which is why the input has 18px of top padding but only 1px at the bottom. Hover, pressed and error states were not measured except for the focus shadow noted above.
