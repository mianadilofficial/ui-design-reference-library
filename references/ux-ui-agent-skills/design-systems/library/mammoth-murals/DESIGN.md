---
version: alpha
name: Mammoth Murals
category: "Agencies & Studios"
description: "Mural agency in Birmingham, Alabama - saturated yellow #ffd900 canvas with near-black #120011 ink, cream #fff6e5 sections, oversized uppercase Obviously 800 headlines (149px hero) paired with Suisse Int'l 500 body at 15.5px, 4px radii and pill-bordered nav buttons."
colors:
  canvas: "#ffd900"
  page-body: "#fff6e5"
  ink: "#120011"
  primary: "#ffd900"
  on-primary: "#000000"
  accent-blue: "#47a0ff"
typography:
  display:
    fontFamily: Obviously, Arial, sans-serif
    fontSize: 149px
    fontWeight: 800
    lineHeight: 126.65px
    letterSpacing: "-0.745px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Obviously, Arial, sans-serif
    fontSize: 62.7812px
    fontWeight: 800
    lineHeight: 53.3641px
    letterSpacing: "-0.313906px"
    textTransform: uppercase
  heading:
    fontFamily: Obviously, Arial, sans-serif
    fontSize: 469px
    fontWeight: 800
    lineHeight: 398.65px
    letterSpacing: "-2.345px"
    textTransform: uppercase
  subheading:
    fontFamily: Obviously, Arial, sans-serif
    fontSize: 22.5px
    fontWeight: 800
    lineHeight: 29.25px
    letterSpacing: "-0.1125px"
    textTransform: uppercase
  body:
    fontFamily: Suisseintl, Arial, sans-serif
    fontSize: 15.5px
    fontWeight: 500
    lineHeight: 20.15px
    letterSpacing: "-0.0775px"
  button:
    fontFamily: Suisseintl, Arial, sans-serif
    fontSize: 13.5px
    fontWeight: 600
    lineHeight: 17.55px
    letterSpacing: "-0.0675px"
    textTransform: uppercase
  nav:
    fontFamily: Obviously, Arial, sans-serif
    fontSize: 31.1px
    fontWeight: 800
    lineHeight: 31.1px
    letterSpacing: "-0.1555px"
    textTransform: uppercase
rounded:
  xs: 2.4px
  sm: 4px
  pill: 9999px
spacing:
  s1: 0.1px
  s2: 2px
  s3: 7.5px
  s4: 11.5px
  s5: 15.5px
  s6: 16px
  s7: 23px
  s8: 24px
  s9: 29.71px
  s10: 31px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0.1px
    height: 44px
  nav:
    textColor: "{colors.page-body}"
    padding: 29.7143px 29.7143px 0px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 7.5px 11.5px 7.5px 7.5px
    borderColor: "{colors.on-primary}"
  footer:
    textColor: "{colors.ink}"
    padding: 29.7143px
---

## Overview

Mammoth Murals is a mural, sign and ghost-sign studio based in Irondale / Birmingham, Alabama (address in the page footer: 2816 Crestwood Blvd, Irondale, AL 35210). The page title is "Mammoth Murals | Mural agency based in Alabama, Birmingham". The home page was measured at `https://mammothmurals.com/` (1280px wide, 11355px tall) and it behaves like a poster: a flat sunflower-yellow field (`#ffd900`), a near-black plum ink (`#120011`), and giant uppercase condensed-looking type that spans the full width of the screen. The hero headline "MURALS THAT MAKE YOUR BUSINESS IMPOSSIBLE TO IGNORE." is set at 149px with a 126.65px line height, stacked three lines tall, with tight negative tracking.

Below the hero, a full-bleed photograph of a finished mural, a "Partners that trusted our work" row of client logos (Cheesecake Factory, Ghirardelli, Live Nation, North Italia are visible in the capture), and then a cream (`#fff6e5`) "OUR WORK" section whose headline is so large (469px) that it becomes a graphic backdrop, with a short blurb smudged on top of it in a spray-paint-like soft white blob. The page is image-led: murals are shown as large rounded-corner photographs in a two-column grid, each followed by a title, category (Murals, Signs, Ghost Signs) and year.

The voice is direct and confident: "We paint bold, hand-crafted walls for real estate developers, and design-driven brands that stop traffic, spark conversation, and turn every space into a landmark." Calls to action are "Book a discovery call" and "See our work"; a section stat reads "25+ years of turning clients' walls into landmarks".

## Colors

Colors are published as Webflow root variables (`--swatch--*`), and the measured computed values match them.

- **Canvas / primary `#ffd900`** (`--swatch--yellow`): the hero background and the fill of primary buttons.
- **Page-body `#fff6e5`** (`--swatch--light`): the cream section background; the theme variable `--_theme---background` points to it. It was the most area-weighted background in the extraction.
- **Ink `#120011`** (`--swatch--black`): all text, and the fill of dark buttons and the logo plate. It was the most-read text color by a wide margin.
- **On-primary `#000000`**: the measured text color on the yellow primary button.
- **Accent blue `#47a0ff`** (`--swatch--blue`): declared in the root variables and measured as a background color on a share of the page area; it is a secondary accent, not the brand color.

Other declared swatches (not tokenized): dark `#2f2b2d`, light-dim `#ebebeb`, and brand-500 `#c6fb50`, the last two marked deleted in the Webflow variable names. Text selection uses `#ffd900a6` (yellow at partial opacity). Link text is derived from the page text color, and secondary buttons are transparent. Hover states: the root variables set primary button hover background to the theme text color and hover text to the theme background, i.e. the button inverts to ink with cream text; no hover state was captured in the measured hover list, so that inversion is documented from the variables only.

## Typography

Two custom faces plus a handwritten accent are declared:
- **Obviously** (secondary family, weight 800 "black"): used uppercase for every headline and the navigation. Fallback `Arial, sans-serif`.
- **Suisse Int'l** (`Suisseintl`, primary family, weights 500 and 600): body copy, captions and buttons. Fallback `Arial, sans-serif`.
- **Delicious Handrawn** (`--_typography---font--tertiary-family`): declared in the variables as the tertiary family; it was not among the fonts measured loaded on the page, so it is not tokenized.

Scale: `display` 149px / 126.65px line height / letter-spacing -0.745px (the hero `h1`); `display-mobile` 62.7812px / 53.3641px in the mobile pass; `heading` 469px / 398.65px (the "OUR WORK" `h2`); `subheading` 22.5px / 29.25px (project names such as "OLIVIA (HARRIS) JENKS"); `body` 15.5px / 20.15px at weight 500; `button` 13.5px uppercase at weight 600; `nav` 31.1px (the full-screen menu). Line height is about 0.85 of font size on the large type and about 1.3 on small type, and all sizes carry slightly negative tracking. The root variables define fluid `clamp()` size steps between viewport minimum 20 and maximum 100, with text trim of 0.4em top and bottom for optical alignment.

If Obviously or Suisse Int'l are unavailable, the site's own fallback stack is Arial; a heavy condensed grotesque is the closest visual match for Obviously but that is a design suggestion, not a measured fact.

## Layout

The grid is a 12-column system (`--site--column-count: 12`) with a 1rem gutter and a fluid page margin `clamp(1rem, .714286rem + 1.42857vw, 2rem)`. Sections are full-bleed color bands (yellow, then cream) with content aligned to the margin; headings run edge to edge. The header is a three-part bar: a black logo plate "MAMMOTH MURALS" at left, three outlined buttons (Work, About, Services) at center, and a dark "Chat with us" button with a small portrait at right. The hero carries a text-and-buttons column at left and a "Showreel (2023-2025)" video thumbnail at right (the thumbnail reads "Coming soon" in the capture). The measured nav padding is 29.7143px and the footer padding is 29.7143px. Section spacing uses fluid tokens (`--_spacing---section-space--main` from 4rem to 7rem across the viewport range).

Smooth scrolling is provided by Lenis (classes `lenis`, `lenis-smooth` in the page CSS) and some pages use a horizontal-scroll page type (`data-page-type="horizontal"`).

## Elevation & Depth

No box shadows were measured (the shadow frequency list is empty). Depth is created by color blocking, by overlap of the giant "OUR WORK" lettering and its blurred blob text backing, and by photography. The only line work is 1px-style outlines on buttons (border color `#000000`, 45 measured uses, and `#120011`, 13 uses). A translucent magenta tint (`#c400c41a`) covers a large measured area share but its element was not identified, so it is not documented as a brand token.

## Shapes

Corners are tight. Measured radii: `4px` on 80 elements (buttons, photo frames, cards), `2.4px` on 10, and `50%` on 10 (avatar thumbnails like the portrait in the "Chat with us" button). Root variables also declare `--radius--x-small` .25rem, `--radius--small` .5rem, `--radius--main` 1rem and `--radius--round` 100vw; apart from the 4px values none of these were measured on rendered elements except the round one for circular avatars. The tokens keep `xs 2.4px`, `sm 4px` and `pill 9999px`.

## Components

- **Primary button**: yellow `#ffd900` fill, black text, Suisse Int'l 13.5px uppercase 600, 4px radius, 44px tall. On the yellow hero it reads as an outlined or black-plate button depending on its dark variant ("Book a discovery call" is the dark filled variant with a tiny portrait; "See our work" is the transparent outlined variant).
- **Nav buttons**: outlined 4px-radius boxes with uppercase text, centered in the header.
- **Card / project tile**: cream background, 4px radius, black-edged, with the mural photograph filling it, then a title, category and year line and a right arrow.
- **Section stat**: "25+ years" with a small descriptor, and numbered counters in parentheses "( 00 )" with arrows.
- **Video player**: a custom player with an Open Video control, mute, fullscreen and a timeline.
- **Footer**: ink on cream, listing Home, Work, About, Services, Contact, an email address and an Instagram link.

## Design System Architecture

No public design system or brand guideline was found. The pages opened (`/` only) link to none, and no search was run. The de-facto system is a Webflow build that exposes a thorough variable system in `:root`: swatches (`--swatch--*`), a theme layer (`--_theme---background`, `--_theme---text`, `--_theme---button-primary--background`, `--_theme---button-secondary--*`), a typography layer (`--_typography---font--*`, fluid `--_typography---font-size--h1..h5`, `text-main`, `text-large`), a spacing scale (`--_spacing---space--1..8`), radius, focus (`--focus--width: .125rem`, offsets `.1875rem` outer and -.125rem inner) and animation easings (`--animation-primary: cubic-bezier(0.83, 0, 0.17, 1)`, `--animation-secondary: cubic-bezier(0.31,0.75,0.22,1)`, `--animation-expo-out: cubic-bezier(0.16, 1, 0.3, 1)`). Utility classes such as `u-margin-trim`, `u-rich-text` and `data-underline-hover` appear in the shipped CSS. The extraction found 186 root variables.

## Do's and Don'ts

Do:
- Keep the yellow `#ffd900` / ink `#120011` pairing as the default color pairing, with cream `#fff6e5` for work-showcase sections.
- Set headlines uppercase in Obviously 800 with negative tracking, and let them be huge.
- Use 4px corner radii on photographs and buttons.
- Let photography of finished murals carry most pages.

Don't:
- Don't add drop shadows; none were measured.
- Don't set body copy in Obviously; body and buttons use Suisse Int'l.
- Don't use the blue `#47a0ff` as a button fill; it is a secondary accent.
- Don't use rounded 16px cards; the measured card radius is 4px.

## Responsive Behavior

The mobile pass recorded only roles and font sizes. It measured the `h1` at 62.7812px with a 53.3641px line height and -0.313906px letter-spacing, versus 149px on desktop; the headline wraps to four lines ("MURALS THAT MAKE / YOUR BUSINESS / IMPOSSIBLE TO / IGNORE."). The page ships a "Menu +" / "Close -" control in its markup, which implies a menu toggle, but whether and where it appears was not measured. Breakpoints, mobile grid columns and mobile paddings: not measured.

## Iteration Guide

1. Start with `canvas #ffd900` and ink `#120011`; add cream `#fff6e5` for secondary sections.
2. Set the hero in Obviously 800 uppercase at 149px / 126.65px with -0.745px tracking.
3. Set body in Suisse Int'l 500 at 15.5px / 20.15px with -0.0775px tracking.
4. Build buttons at 44px height, 4px radius, uppercase 13.5px 600 labels.
5. Show work as 4px-radius photograph tiles with a title, category and year.
6. Unmeasured states (hover, focus appearance, dark mode, breakpoints) should be measured before documenting.
