---
version: alpha
name: Design by Dylan
category: "Portfolio"
description: "©Design by Dylan (dylanbrouwer.design) is the Webflow portfolio of Dutch designer Dylan Brouwer: a near-black to grey scrolling backdrop, a 243px uppercase ABC Gravity Variable headline, Die Grotesk B at 53px/500 with -0.03em tracking, IBM Plex Mono 12px uppercase labels, an #ff6436 orange accent and 12.8px-radius project imagery."
colors:
  canvas: "#f1f1f1"
  surface: "#ffffff"
  surface-dark: "#201d1d"
  ink: "#3c3a3e"
  ink-secondary: "#7b7a7c"
  ink-muted: "#a2a2a2"
  display-ink: "#c9c7cc"
  primary: "#161616"
  on-primary: "#f1f1f1"
  accent-orange: "#ff6436"
  ink-on-dark: "#ffffffb3"
  hairline-on-dark: "#ffffff26"
  tag-fill: "#ffffff0d"
  nav-button-fill: "#3c3a3e0d"
  nav-button-border: "#3c3a3e26"
typography:
  display:
    fontFamily: "\"ABC Gravity Variable\", Impact, sans-serif"
    fontSize: 243.333px
    fontWeight: 400
    lineHeight: 180.067px
    letterSpacing: "-4.86667px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"ABC Gravity Variable\", Impact, sans-serif"
    fontSize: 84.6764px
    fontWeight: 400
    lineHeight: 62.6605px
    letterSpacing: "-1.69353px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Die Grotesk B\", Arial, sans-serif"
    fontSize: 53.3333px
    fontWeight: 500
    lineHeight: 53.3333px
    letterSpacing: "-1.6px"
  heading-mobile:
    fontFamily: "\"Die Grotesk B\", Arial, sans-serif"
    fontSize: 26.0543px
    fontWeight: 500
    lineHeight: 28.6597px
    letterSpacing: "-0.781628px"
  subheading:
    fontFamily: "\"Die Grotesk B\", Arial, sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.96px"
  body:
    fontFamily: "\"Die Grotesk B\", Arial, sans-serif"
    fontSize: 14.6667px
    fontWeight: 500
    lineHeight: 19.0667px
    letterSpacing: "-0.146667px"
  footer-text:
    fontFamily: "\"Die Grotesk B\", Arial, sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    letterSpacing: "-0.32px"
  eyebrow:
    fontFamily: "\"IBM Plex Mono\", sans-serif"
    fontSize: 10.6667px
    fontWeight: 600
    lineHeight: 13.8667px
    letterSpacing: "-0.213333px"
    textTransform: uppercase
  link:
    fontFamily: "\"IBM Plex Mono\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    letterSpacing: "-0.12px"
    textTransform: uppercase
rounded:
  xs: 12.8px
  pill: 9999px
spacing:
  s1: 2.67px
  s2: 4px
  s3: 5.33px
  s4: 6px
  s5: 8px
  s6: 9px
  s7: 10.67px
  s8: 18px
  s9: 21.33px
  s10: 42.67px
components:
  button-tag:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    height: 24px
  nav:
    textColor: "{colors.ink-muted}"
    typography: "{typography.eyebrow}"
  nav-button:
    backgroundColor: "{colors.nav-button-fill}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    borderColor: "{colors.nav-button-border}"
  project-tag:
    backgroundColor: "{colors.tag-fill}"
    textColor: "{colors.ink-on-dark}"
    typography: "{typography.link}"
    borderColor: "{colors.hairline-on-dark}"
  card-image:
    rounded: "{rounded.xs}"
  footer:
    textColor: "{colors.ink}"
    typography: "{typography.footer-text}"
    padding: 42.6667px 21.3333px 21.3333px
---

## Overview

©Design by Dylan is the personal portfolio of Dylan Brouwer, a Dutch digital designer and Webflow developer based in Enschede, the Netherlands; the measured page is https://www.dylanbrouwer.design/ (title "©Design by Dylan [U+2726] Digital Designer & Webflow Developer"). It sells design-and-build services to brands and agencies, so the site is itself a demonstration: heavy type, 3D-rendered device mock-ups, smooth scrolling (it loads Lenis) and a vertical backdrop that runs from near-black at the top to grey lower down in the capture. The desktop page is 1,280px wide and 5,951px tall; only its upper part is visible in the capture image, and the canvas token (`#f1f1f1`) is the value declared as the page's theme background (`--_theme---background`), not the dark top of the backdrop.

The look is monochrome and cinematic. The hero is a huge uppercase headline, "SITES THAT MOVE", set in ABC Gravity Variable across almost the full width, filled with a silver-to-dark gradient and slanted, in front of a 3D render of a monitor on a plinth showing a client project. Small monospaced labels frame it: a live clock caption at the left ("DESIGN BY DYLAN, NL, 06:37 CET") and a tagline at the right ("I craft experience-driven websites for brands & agencies that move with purpose"). The top bar carries a slanted "B" mark at the left, three monospaced links with plus marks ("+ ABOUT", "+ SERVICES", "+ WORK") and a bordered "● CONTACT" button at the right.

Below the hero is a large statement in Die Grotesk B at 53.3333px, in grey, with an indented first line: "I'm a Dutch digital designer & Webflow developer working at the intersection of visual design, UX, and motion. I help brands and creative teams craft expressive websites that feel bold, intuitive, and built to stand out." Then an asymmetrical scatter of imagery: a small portrait with a "● MORE ABOUT ME" label and a mono caption ("DYLAN BROUWER [33] ENSCHEDE, NETHERLANDS"), a large dark monitor render with an orange "NEW" badge and tags ("EVERWONDER STUDIO", "DESIGN", "DEVELOPMENT"), and a laptop photographed on a wooden table. Further down the page there is a client list ("Brands & creative teams I've collaborated with:") and a footer with About, Services, Work, Contact, FAQ and Awwwards links and a "Ready to start…" call to action.

The voice is first-person and plain ("I craft…", "I help…") against very loud typography; microcopy is terse and mono-set.

## Colors

The colours come from the site's Webflow variables (`--_colors---swatch--*` and `--_theme---*`) and the rendered page.

- **Silver `#f1f1f1` (canvas).** `--_colors---swatch--silver`, the theme background and the text colour on dark buttons.
- **White `#ffffff` (surface).** The largest background area (1,831 units); `#ffffff80` appears on 538 units.
- **Dark `#201d1d` (surface-dark).** Dark panels (922 units).
- **Near-black `#161616` (primary).** `--_colors---swatch--black`; the fill of "MORE ABOUT ME" and of the "PLAY SHOWREEL" button on mobile, with `#f1f1f1` text (the site's `--_theme---button-bg` and `--_theme---button-text`).
- **Greys.** `#3c3a3e` (`grey-dark`, ink and body text, also the theme's nav-text), `#7b7a7c` (`grey-medium`, 349 characters, paragraph colour), `#a2a2a2` (`grey`, 246 characters, the hero statement and the nav links; nav hover goes to `#eeeeee` or `#f1f1f1`), and `#c9c7cc` (the headline's light end of the gradient, 13 characters).
- **Orange `#ff6436`.** `--_colors---swatch--orange`; the "NEW" badge (22 units of background area) and the small dot markers in labels. `#ff4c24` appears 7 times in the stylesheet.
- **Tag and nav-button translucencies.** Over dark imagery, tags are `#ffffff0d` with a `1px` `#ffffff26` border and `#ffffffb3` text (`--_theme---tag-*`); the top-right "CONTACT" button is `#3c3a3e0d` with a `#3c3a3e26` border (`--_theme---nav-button-*`).

The stylesheet also carries leftover template variables (`--swatch--ash-grey` `#acb7c1`, `--swatch--gunmetal` `#31383b`, `--swatch--honeydew` `#e1f7e1`, `--swatch--anti-flash-white` `#eef0f2`) whose names are marked `<deleted|variable-…>`; they are not tokens here. Webflow's default `#3898ec` focus blue (7 occurrences) is likewise a platform default.

## Typography

Three families: **ABC Gravity Variable** (weight 400) for the hero and big display words, **Die Grotesk B** (weight 500) for headings and paragraphs (717 characters), and **IBM Plex Mono** (500 and 600) for labels, navigation, tags and buttons (257 characters); the page loaded exactly these (`ABC Gravity Variable 400`, `Die Grotesk B 500`, `IBM Plex Mono 500` and `600`) plus Webflow's icon font. Fallbacks: `Impact, sans-serif` for the display face, `Arial, sans-serif` for Die Grotesk B and `sans-serif` for the mono. No foundry or licence page was opened for ABC Gravity Variable or Die Grotesk B, so no substitutes beyond the declared fallbacks are recorded.

Scale (desktop at 1280px): h1 243.333px/180.067px, uppercase, -4.86667px tracking (-0.02em); statement 53.3333px/53.3333px at 500 with -1.6px (-0.03em); sub-heading 32px/32px at 500 with -0.96px; body 14.6667px/19.0667px at 500 with -0.146667px; footer links 16px/20px at 500 with -0.32px; the `body` element itself is IBM Plex Mono 10.6667px/13.8667px at 600, uppercase, -0.213333px; buttons and tags 12px/12px at 500 with -0.12px, uppercase. By characters: 14.6667px 330, 53.3333px 186, 10.6667px 153, 18.6667px 106 (-0.373333px), 12px 104, 32px 41, 16px 35, 48px 19, 85.3333px 14. Tracking is negative at every size on the page.

All desktop sizes are fractions of a 16px unit: the root variables declare `--size-unit: 16`, `--size-container-min: 992px`, `--size-container-ideal: 1920` and `--size-container-max: 5200px`, and the measured 10.6667px body equals 16 × 1280 / 1920, so type and spacing scale with the viewport width in this range.

## Layout

An edge-to-edge canvas with 2em page padding (`--_layout---padding-global--page-padding: 2em`, 21.3333px at the measured scale) and a 2em grid gap (`--_layout---grid--gap`). Content is placed, not gridded: the portrait sits at the left margin, the large monitor render is offset to the right half, the laptop photograph is at the left again, so the rhythm is diagonal. Measured gaps: 5.33333px (28 elements), 8px (18), 10.6667px (14), 4px (10), 6px (8), 2.66667px, 42.6667px, 21.3333px (4 each), 106.667px (2); paddings: 5.33333px (11), 6px (8), 10.6667px (8), 21.3333px (7), 18px (4), 85.3333px (4), 9px (4), 243.333px (3), 64px (2). The footer measured 720px tall with `42.6667px 21.3333px 21.3333px` padding.

## Elevation & Depth

No box shadows were measured on screen. Depth comes entirely from imagery and gradients: the vertical near-black-to-grey backdrop, the gradient-filled headline overlapping the monitor render, translucent tags over dark photographs (`#ffffff0d` fill and `#ffffff26` hairline), and 3D-rendered devices casting their own photographic shadows. The stylesheet declares Webflow's focus shadow `0 0 3px 1px #3898ec` (2 declarations); it is a platform default.

## Shapes

Hard edges, with one soft exception. Project and portrait imagery use a 12.8px radius (36 elements); one element is a circle (50%); buttons and tags are rectangular (the mobile "PLAY SHOWREEL" button measured a 0% radius). The slanted, italic headline and the angled monitor render give the page its dynamic edge instead of rounded shapes.

## Components

- **"MORE ABOUT ME" label button.** `#161616` fill, `#f1f1f1` IBM Plex Mono 12px/500 uppercase text, 24px tall and 116px wide, with an orange dot before the label.
- **Mobile showreel button.** "PLAY SHOWREEL": `#161616` fill, `#f1f1f1` text at 13.0271px/600, `1px solid #3c3a3e`, 0% radius, `0px 6.51357px` padding, 35px tall and 141px wide (recorded at 390px).
- **Nav button.** "● CONTACT": `#3c3a3e0d` fill, `#3c3a3e26` border, mono uppercase label.
- **Navigation links.** `+ ABOUT`, `+ SERVICES`, `+ WORK` in IBM Plex Mono, `#a2a2a2`, turning `#eeeeee` / `#f1f1f1` on hover.
- **Project tag.** `#ffffff0d` fill, `1px #ffffff26` border, `#ffffffb3` mono text; sits over project imagery ("DESIGN", "DEVELOPMENT"); an orange "NEW" badge (`#ff6436`) marks recent work.
- **Project and portrait imagery.** 12.8px radius, mono captions beneath in grey.
- **Footer.** Die Grotesk B 16px/20px at 500 in `#3c3a3e` with the link list and an invitation to start a project.

## Design System Architecture

The site publishes no design-system or brand-guideline page that was found: https://www.dylanbrouwer.design/ links to its own pages (about, services, work, contact, privacy), client sites, an Awwwards profile (https://www.awwwards.com/dylanbrouwer/) and a Webflow profile, not to a token source. The page is a Webflow build (`<meta content="Webflow" name="generator"/>`, stylesheet `db-portfolio-26.webflow.shared.….min.css` on cdn.prod.website-files.com) with Lenis smooth-scroll CSS from jsDelivr (`lenis@1.2.3`).

The design system lives in Webflow variables, 207 on `:root`, named in layers: `--_colors---swatch--*` (black `#161616`, white, silver `#f1f1f1`, grey `#a2a2a2`, grey-medium `#7b7a7c`, grey-dark `#3c3a3e`, orange `#ff6436`); `--_theme---*` aliases mapping roles to swatches (`background` to silver, `heading` to black, `body-text` and `nav-text` to grey-dark, `button-bg` to black, `button-text` to silver, `border` to grey, `tag-bg` `#ffffff0d`, `tag-border` `#ffffff26`, `tag-text` `#ffffffb3`, `nav-button-bg` `#3c3a3e0d`, `nav-button-border` `#3c3a3e26`); `--_fonts---*` (families and weights 200 to 900); `--_headings---heading-xxl|xl|l|m|s|xs--*` and `--_paragraphs---paragraph-xxl|regular|m|s|xs--*` for size, line height (for example `--_headings---heading-xxl--line-height: .74em`), weight and letter spacing (for example `--_paragraphs---paragraph-m--letter-spacing: -.02em`); `--_sizes---size--2px … 192px` in em; `--_layout---*`; and `--element-*` button, field, label and card variables. Breakpoints in the shared stylesheet are Webflow's `max-width` 991px, 767px and 479px.

## Do's and Don'ts

Do:
- Keep the palette monochrome: silver, white, near-black and three greys, with `#ff6436` only for small signals such as "NEW" and dots.
- Set the hero in ABC Gravity Variable, uppercase, with negative tracking at the largest size the viewport allows.
- Set statements in Die Grotesk B at 500 with -0.03em tracking, and every label in IBM Plex Mono uppercase.
- Round imagery at 12.8px and keep buttons and tags rectangular.
- Use 3D device mock-ups and photographs as the main content; scatter them off-grid.

Don't:
- Don't use Webflow's `#3898ec` focus blue or the leftover template swatches as brand colours.
- Don't add drop shadows; none were measured.
- Don't use positive letter spacing; every measured size is negative.
- Don't treat the `0% radius` mobile button as a pill.

## Responsive Behavior

Measured at 390px: the h1 is 84.6764px/62.6605px (from 243.333px/180.067px), the statement is 26.0543px/28.6597px at 500 in a 361px-wide box, body copy is 14.6555px/19.0522px in a 323px-wide box, and a "PLAY SHOWREEL" button (141px by 35px) appears in the header block, which measured 732px tall. Character counts by size on mobile: 14.6555px 330, 26.0543px 205, 13.0271px 170, 11.3987px 127, 22.7975px 79, 17.0981px 35, 45.595px 14, 84.6764px 13. The shared stylesheet declares media queries at `max-width: 991px`, `767px` and `479px` (and one at `min-width: 768px`); what each rule changes on screen was not measured.

## Iteration Guide

1. Set tokens: canvas `#f1f1f1`, surface `#ffffff`, dark `#201d1d`, ink `#3c3a3e`, secondary `#7b7a7c`, muted `#a2a2a2`, primary `#161616`, accent `#ff6436`.
2. Load ABC Gravity Variable, Die Grotesk B (500) and IBM Plex Mono (500, 600); set negative tracking everywhere.
3. Build the hero: a vertical near-black-to-grey backdrop, a 243.333px uppercase gradient headline over a 3D monitor render, mono captions left and right, and the top bar with plus-marked links and a bordered CONTACT button.
4. Add the 53.3333px statement, then off-grid images with 12.8px corners and mono captions, tags and an orange NEW badge.
5. Finish with the `#3c3a3e` footer links at 16px/20px.
6. Run `node web/scripts/verify-designs.mjs --slug=c-design-by-dylan` and compare with `web/data/captures/c-design-by-dylan.jpg`.
