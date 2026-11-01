---
version: alpha
name: Alethia
category: "Product & SaaS"
description: "Alethia home page: dark forest green #0f1f10 canvas, pale lime #c6f19d call-to-action with 8px radius, Geist headlines at 72px with -3.6px tracking, Geist Mono uppercase labels, cream and indigo bands."
colors:
  canvas: "#0f1f10"
  ink: "#ffffff"
  primary: "#c6f19d"
  on-primary: "#0f1f10"
  surface-cream: "#f5f4f2"
  surface-indigo: "#200f85"
  ink-lime-soft: "#d5eebc"
  ink-offwhite: "#f3f3f3"
  on-primary-hover: "#0e1f0f"
typography:
  display:
    fontFamily: "\"Geist Medium\", \"Geist Medium Placeholder\", sans-serif"
    fontSize: 72px
    fontWeight: 500
    lineHeight: 68.4px
    letterSpacing: "-3.6px"
  display-mobile:
    fontFamily: "\"Geist Medium\", \"Geist Medium Placeholder\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 30.4px
    letterSpacing: "-1.6px"
  heading:
    fontFamily: "\"Geist SemiBold\", \"Geist SemiBold Placeholder\", sans-serif"
    fontSize: 64px
    fontWeight: 600
    lineHeight: 60.8px
    letterSpacing: "-3.2px"
  subheading:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 12.6px
    textTransform: uppercase
  body:
    fontFamily: Geist, "Geist Placeholder", sans-serif
    fontSize: 44px
    fontWeight: 500
    lineHeight: 41.8px
    letterSpacing: "-2.2px"
  button:
    fontFamily: "\"Geist Mono\", monospace"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 13.5px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 6px
  xl: 8px
  2xl: 12px
  3xl: 14px
  4xl: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    padding: 16px
    height: 58px
  button-primary-hover:
    textColor: "{colors.on-primary-hover}"
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
    padding: 20px
---

# Alethia

## Overview
Alethia presents "end-to-end environmental intelligence powered by science, blockchain, and transparent data you can trust" (the site's own meta description). The measured page is the home page at alethia.earth, built in Framer (root variables are Framer tokens and `--framer-will-change-override`). The identity is a very dark forest green canvas (#0f1f10) with a single pale lime accent (#c6f19d) used for the call to action, large tight-tracked Geist headlines in white or warm off-white, and uppercase Geist Mono labels.

Content structure, taken from the page text: a hero ("Where Ecosystem Science and Enterprise Strategy Meet" with a "Let's Talk" button and "Scroll to discover"), a carbon-flux data readout ("-8.3 CO₂e", "Verified Removal", "Verified Emission"), a numbered list of five capabilities (01 Gold-Standard Observation Systems, 02 World-Class Atmospheric Monitoring (aMRV), 03 Integrated Algorithmic Processing, 04 Blockchain-Secured Traceability, 05 Built for Scale and Complexity), a vision section, "From Data Chaos to Science-Backed, Actionable Insights", and a media and press area.

Note on the capture: the stored screenshot shows only a near-black loading state with a small hexagon mark at the top and a flat dark green field below, so imagery and art direction could not be read from it. Everything here comes from the DOM measurement and page text.

## Colors
- **canvas** `#0f1f10`: dark forest green; the largest background (7167 area weight) and the text color on light surfaces.
- **ink** `#ffffff`: white text on dark (957 characters).
- **primary** `#c6f19d`: pale lime, the fill of the "LET'S TALK" button; it is the site's `--token-29b0dbc5...` variable and also appears as text (100 characters).
- **on-primary** `#0f1f10` and **on-primary-hover** `#0e1f0f`: text on the lime button, with the measured hover value.
- **surface-cream** `#f5f4f2`: warm off-white; a full-width light section (6605 area weight) and the hero heading color.
- **surface-indigo** `#200f85`: a deep indigo section background (4096 area weight).
- **ink-lime-soft** `#d5eebc`: pale green text (278 characters).
- **ink-offwhite** `#f3f3f3`: a light text color.
Other measured but untokenised backgrounds: `#000000`, `#828282`, `#0f0f0f` (also a root variable), `#cc8343` and `#e8ab41`; `#e0e0e0` is a root variable.

## Typography
Two families: Geist (in static Regular 400, Medium 500 and SemiBold 600 cuts, each with a Framer placeholder fallback) and Geist Mono (400, 500, 600). Headlines use heavy negative tracking, about -5% of the size.
- **display** Geist Medium 72px / 500 / 68.4px, letter spacing -3.6px (the hero h1); on mobile **display-mobile** 32px / 500 / 30.4px, -1.6px.
- **heading** Geist SemiBold 64px / 600 / 60.8px, -3.2px ("From Data Chaos to Science-Backed...").
- **body** Geist 44px / 500 / 41.8px, -2.2px; the lead paragraph is set at a very large size.
- **subheading** Geist Mono 14px / 500 / 12.6px, uppercase ("OUR VISION").
- **button** Geist Mono 15px / 600 / 13.5px, uppercase.
By character count, 24px (665), 14px (428), 32px (331), 40px (308) and 64px (216) lead. Line heights are about 0.95 of the font size throughout.

## Layout
The page is a stack of full-width bands that alternate dark green, cream and indigo. The hero h1 box measures 731px wide by 205px high and the lead paragraph 634px by 251px, so text blocks are held to a narrow measure on a wide canvas. The spacing tokens come from measured paddings and gaps: 4, 6, 7, 8, 10, 11, 12, 16, 18 and 20px. Button padding is 16px; card padding is 20px.

## Elevation & Depth
Depth is minimal. One shadow stack is measured: `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px, rgba(0, 0, 0, 0.05) 0px 1px 0px 0px, rgba(255, 255, 255, 0.15) 0px 0px 0px 1px`, a soft drop plus a faint white ring. Layers are separated mainly by background-band changes.

## Shapes
Radii measured: 3px (14 uses), 24px (13), 99px (8), 12px (5), 5px, 8px and 6px, 999px and 100% (circular), and 36px. The primary button uses 8px (rounded xl); the media card measures 24px (a value above the token ladder's 16px top step, so it is recorded here rather than as a token).

## Components
- **button-primary**: lime `#c6f19d` fill, `#0f1f10` text, Geist Mono 15px / 600 uppercase, radius 8px, padding 16px, height 58px ("LET'S TALK"). Hover text color `#0e1f0f` was measured.
- **card**: a 395px by 678px media and press card with 20px padding, 24px radius, a Geist Mono 14px uppercase category and date line ("MEDIA & PRESS APR 2025").
- Numbered capability rows ("01." through "05.") with a short title and description.
No navigation link styles were captured by the extractor; the header text reads "Solutions", "our tech", "Company", "Resources" and "Let's Talk".

## Design System Architecture
No public design system or brand guidelines were found; the home page links to none and no brand, press or design link was present in its markup. The de-facto system is a Framer project: colors live in six `--token-*` variables (`#0f1f10`, `#c6f19d`, `#f5f4f2`, `#fff`, `#0f0f0f`, `#e0e0e0`) and type is set per text style using Geist cuts named Medium, SemiBold and Regular.

## Do's and Don'ts
- Do keep the canvas `#0f1f10` and use lime `#c6f19d` only for the primary action.
- Do set headlines in Geist with negative tracking and lines at about 0.95.
- Do use Geist Mono uppercase for labels and buttons.
- Do alternate dark, cream and indigo bands.
- Don't add extra accent hues beyond the measured set.
- Don't use heavy shadows.
- Don't copy the capture's loading state as a design.

## Responsive Behavior
A 390px mobile pass was measured: the h1 is 32px / 500 / 30.4px with -1.6px tracking in white, the lead paragraph is 36px / 500 / 34.2px, and the "LET'S TALK" button is unchanged (166px by 58px, 8px radius). Navigation behavior and breakpoints were not measured.

## Iteration Guide
1. Start from canvas `#0f1f10`, ink `#ffffff`, primary `#c6f19d`.
2. Use cream and indigo bands for rhythm.
3. Keep Geist headlines at about -5% tracking; use Geist Mono caps for labels.
4. One lime button per view.
5. Verify new values against `web/data/extracted/alethia.json`.

## Content and Voice
The microcopy is scientific and confident, with short claims followed by one explanatory sentence. The hero line "Know your impact—precisely." is followed by "End-to-end environmental intelligence powered by science, blockchain, and transparent data you can trust." Capability titles name methods rather than benefits: "Gold-Standard Observation Systems" is described as "Sensor towers, flux methods, & satellites track full carbon flux"; "World-Class Atmospheric Monitoring (aMRV)" refers to "the same methods used in the WMO's Annual State of the Global Climate Report"; "Blockchain-Secured Traceability" promises that "Every metric is verifiable, audit-ready, and tamper-proof". The closing capability reads "From a single farm to global operations, Alethia adapts to your data infrastructure and ecosystem environment."

A live-looking data block shows signed carbon values (-8.3 CO₂e, Verified Removal -1.2, CO₂ -2.01, 0.57, Verified Emission 1.87), which establishes numerals with subscript units as a recurring graphic device. Section labels such as "our vision" and "real-time, blockchain-backed carbon intelligence" are set in the mono face. A news-style card cites "CO₂ emissions Reach Record High in 2024". The only action label on the page is "Let's Talk", repeated in the header and hero. Lowercase appears in some navigation items ("our tech") while buttons are uppercase through text transform, so label case is controlled by style rather than by the copy.

The numbered list pairs a two-digit index with a bold title and a one-sentence description, so the page teaches its method in sequence, from observation through processing to verification.
