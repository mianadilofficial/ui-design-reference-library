---
version: alpha
name: Kononenko Architectural Bureau
category: "Architecture & Interiors"
description: "Kononenko Architectural Bureau (kononenkogroup.com) is a monochrome portfolio site: pure black #000000 on white with grey #929292 captions, a tightly tracked grotesque at 116.667px for headlines, a serif at 26.6667px for statements, and full-bleed architectural renders."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  ink-grey: "#929292"
typography:
  display:
    fontFamily: n, sans-serif
    fontSize: 53.3333px
    fontWeight: 400
    lineHeight: 42.6667px
    letterSpacing: "-1.6px"
  display-mobile:
    fontFamily: n, sans-serif
    fontSize: 31.2px
    fontWeight: 400
    lineHeight: 24.96px
    letterSpacing: "-0.936px"
  heading:
    fontFamily: n, sans-serif
    fontSize: 116.667px
    fontWeight: 400
    lineHeight: 81.6667px
    letterSpacing: "-3.5px"
  subheading:
    fontFamily: h, serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 12.8px
    letterSpacing: "-0.213333px"
  body:
    fontFamily: h, serif
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 29.3333px
    letterSpacing: "-0.8px"
  nav:
    fontFamily: n, sans-serif
    fontSize: 12.6667px
    fontWeight: 400
    lineHeight: 12.6667px
    letterSpacing: "-0.253333px"
  link:
    fontFamily: n, sans-serif
    fontSize: 10.6667px
    fontWeight: 400
    lineHeight: 12.8px
    letterSpacing: "-0.213333px"
rounded:
  none: 0px
spacing:
  s1: 3.17px
  s2: 3.33px
  s3: 5.33px
  s4: 6.67px
  s5: 9.33px
  s6: 12px
  s7: 13.33px
  s8: 19.67px
  s9: 20px
  s10: 25.33px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    transform: matrix(1, 0, 0, 1, 0, 192.398)
  nav:
    textColor: "{colors.canvas}"
    padding: 13.3333px 0px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 106.667px 0px 8px
---

## Overview

Kononenko Architectural Bureau (https://kononenkogroup.com/, title "Kononenko Architectural Bureau") is a one-page studio portfolio whose scroll is 16,918px tall. The first view is a full-bleed architectural render (a faceted metal-clad building in a meadow under cloud) with the studio name stacked in white at the top left ("Kononenko Architectural Bureau") and an index menu at the top right (Index, Work, About, Contact). The studio name reappears large at the bottom left of the hero. There is no button, no color, no card and no ornament: the interface is type and photography only.

Below the hero, a white band presents the statement "Systematic Clarity & Creativity" at 116.667px, centered, with two small grey two-line captions below it (sustainability strategy and material efficiency at left; concept, facade and planning solutions at right). A second full-width render (a curved-roof villa among pines with a car in the drive) follows, then an About block: a left column of small serif labels and values (Founded 2011, Founder Anton Kononenko, Services) and a right column with a large serif paragraph that begins "An architecture bureau rooted in precision and emotion." An index of achievements follows, in a three-column list of Awards, Publications and similar entries, followed by project links with names and areas (for example "Pokrovskoe Private House 611 m²" with a "Visit" link) and a black footer.

## Colors

The page uses only black and white with greys. Black #000000 is ink, the primary color and the footer fill; white #ffffff is the canvas and the text color over imagery and in the footer; grey #929292 is used for secondary captions and award details. There is no brand accent, no link color and no state color. All color beyond this comes from the architectural renders: cool overcast greys, warm timber and amber glass, dark green foliage. The only root variable in the page is --vhmobilebar: 8px.

## Typography

Two custom families with single-letter names are loaded, "n" (a sans-serif, used for the studio name, navigation, display lines and links) and "h" (a serif, used for statements, labels and captions). The names are the font-face names exposed in the page; the underlying font identities were not published in the CSS, so they are not named here. Everything is weight 400 and everything has negative letter-spacing proportional to size.

Measured roles: the headline "Systematic Clarity & Creativity" is the sans at 116.667px with 81.6667px line height and -3.5px letter-spacing; the hero studio name is the sans at 53.3333px/42.6667px with -1.6px; the About paragraph is the serif at 26.6667px/29.3333px with -0.8px; navigation is the sans at 12.6667px/12.6667px with -0.253333px; small labels (the h3 "Founded") are the serif at 10.6667px/12.8px with -0.213333px, and project links are the sans at 10.6667px/12.8px. The mobile pass shows the hero name at 31.2px/24.96px (-0.936px) and the statement paragraph at 27.04px/29.744px (-0.8112px). Line heights are tighter than the font size for display lines (about 0.7 to 0.8 of the size), which makes headline lines nearly touch.

## Layout

The page is 1280px wide. Hero and gallery renders are full-bleed (edge to edge). The headline is centered with wide white margins; the About section is a two-column layout with a narrow label column at the left and a wide text column to its right; the achievements list uses three columns. Spacing values measured: 3.17px, 3.33px, 5.33px, 6.67px, 9.33px, 12px, 13.33px, 19.67px, 20px and 25.33px. The navigation has 13.3333px vertical padding, and the footer has padding 106.667px 0px 8px (a tall top, a thin bottom). Small type and large type coexist with a lot of white space.

## Elevation & Depth

None. No shadows, no borders and no overlays were measured (the extraction lists no box shadows and no border colors). The hero name sits directly on the photograph in white, and depth is entirely the depth within each render.

## Shapes

The extraction's border-radius list is empty: every element computes a 0px radius. Images are plain rectangles, links are plain text and nothing has a container.

## Components

- Navigation: white text over the hero (13.3333px vertical padding), 12.6667px sans with the first item (Index) underlined in the capture, items separated by commas.
- Studio name: stacked three-line white text at the top left in the same 12.6667px sans, and the large 53.3333px version in the hero.
- Statement headline: 116.667px sans, black, centered, two lines.
- Info table: serif 10.6667px labels at left, serif or sans values at right; entries such as Founded, Founder, Services.
- Project link: sans 10.6667px, black text with project name, area in square meters and a "Visit" word; the link component moves with scroll (a transform of translateY 192.398px was recorded).
- Footer: black #000000 background, white 12.6667px text, columns headed Navigation, with padding 106.667px 0px 8px.

## Design System Architecture

No public design system, token package or brand-guideline page was opened. The page ships no custom properties other than --vhmobilebar: 8px, and its two font families are named with single letters, which indicates an obfuscated production build. The de-facto system is: black, white and one grey; two type families; one large display size; full-bleed renders.

## Do's and Don'ts

Do use only black, white and #929292; use the sans at 116.667px with -3.5px tracking for the single big statement; set body statements in the serif at 26.6667px; let full-bleed renders separate sections. Do keep labels at 10.6667px and navigation at 12.6667px.

Don't add buttons, cards, rounded corners or shadows. Don't add an accent color or link color. Don't use positive letter-spacing. Don't set long text in the sans display size.

## Responsive Behavior

The mobile pass (390px) measured the h1 at 31.2px/24.96px with -0.936px tracking (from 53.3333px) and the statement paragraph at 27.04px/29.744px with -0.8112px tracking, which is slightly larger than the desktop paragraph. The mobile pass found no CTA. Navigation behavior, column collapse and breakpoints were not measured.

## Iteration Guide

1. White canvas, black ink, #929292 for secondary text; no other colors.
2. Headline: sans 116.667px/81.6667px at -3.5px; hero name 53.3333px at -1.6px; serif 26.6667px for statements.
3. Full-bleed architectural renders between text blocks; no containers.
4. Keep corners at 0px and avoid shadows and buttons; links are plain text with "Visit".
5. Use a black footer with 106.667px top padding and white 12.6667px text.

## Additional Notes

The renders are presented without captions on the page itself: the first shows an industrial or commercial building with large perforated metal panels and a vertical lettering sign, and the second a residential villa with an undulating roof, glazed living areas and an electric car in the drive. Both are atmospheric visualizations (overcast sky, wet paving, soft interior glow) rather than site photographs, consistent with the bureau's listed services of concept design, facade and planning solutions, working documentation and visualizations. The copy is in a measured, professional tone: "Systematic Clarity & Creativity", "rooted in precision and emotion", "tailored with vision and care". Credits for awards and publications are written as plain lists with the year in the entry, for example "Kukha Design Award 2025" and "Addawards 2023", with category lines in grey beneath each name. The whole page relies on scale contrast (116.667px headline against 10.6667px labels) as its only hierarchy device.
