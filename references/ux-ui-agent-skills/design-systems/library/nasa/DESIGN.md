---
version: alpha
name: NASA
category: "Design Systems"
description: "NASA's public website (nasa.gov) in October 2026: a carbon-black #000000 shell with white Inter 700 headlines (72px/75.6px hero), Public Sans Web 16px body on #1b1b1b ink, DM Mono eyebrow labels at 11.2px with 3.5px tracking, a single red #d83933 4px-radius button, and full-bleed mission and deep-space imagery under dark card overlays."

colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#1b1b1b"
  primary: "#d83933"
  primary-hover: "#b50909"
  on-primary: "#ffffff"
  surface-gray: "#f6f6f6"
  surface-card-dark: "#17171b"
  surface-charcoal: "#2e2e32"
  ink-light-gray: "#b9b9bb"
  ink-gray: "#959599"
  ink-dim: "#58585b"
  hairline: "#ffffff33"
  text-input-border: "#565c65"

typography:
  display:
    fontFamily: inter, sans-serif
    fontSize: 72px
    fontWeight: 700
    lineHeight: 75.6px
  display-mobile:
    fontFamily: inter, sans-serif
    fontSize: 35.2px
    fontWeight: 700
    lineHeight: 36.96px
  eyebrow:
    fontFamily: dm-mono
    fontSize: 11.2px
    fontWeight: 500
    lineHeight: 11.2px
    letterSpacing: 3.5px
    textTransform: uppercase
  body:
    fontFamily: "\"Public Sans Web\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: inter
    fontSize: 22.08px
    fontWeight: 700
    lineHeight: 22.08px
  nav:
    fontFamily: inter, sans-serif
    fontSize: 17.6px
    fontWeight: 600
    lineHeight: 21.12px
  link:
    fontFamily: inter
    fontSize: 16px
    fontWeight: 600
    lineHeight: 16px
  input:
    fontFamily: "\"Public Sans Web\", -apple-system, \"system-ui\", \"Segoe UI\", Roboto, Helvetica, Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 15.04px
    fontWeight: 400
    lineHeight: 21.056px

rounded:
  xs: 4px
  pill: 9999px

spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 30px
  s8: 32px
  s9: 40px
  s10: 48px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 20px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    padding: 12px 0px 0px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 16px
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    padding: 0px 8px
    height: 32px
    borderColor: "{colors.text-input-border}"
  card-dark:
    backgroundColor: "{colors.surface-card-dark}"
    textColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.canvas}"
    padding: 56px 24px
---

## Overview

The captured nasa.gov homepage is a dark, image-led news front page. A black header carries, from the left, a bold white "Explore" menu with a circled chevron, a dark outlined search field with a "Search" placeholder, the centered blue NASA "meatball" insignia, and at right "News & Events" and "Multimedia" with chevrons and "NASA+" followed by a small outlined "LIVE" tag. Directly below, a full-width hero shows a splashdown photograph (capsule parachutes on dark ocean) with the headline "NASA's SpaceX Crew-12 Returns" at 72px in white bold Inter, a three-line summary in Public Sans, and a red "Learn More" button. Along the hero's bottom runs a strip of three mission links separated by thin hairlines, each topped by a spaced, uppercase mono eyebrow ("ACTIVE MISSION", "FUTURE MISSION") with a bold white title and a small red circular arrow icon; at the right, a round thumbnail control and a black round pause button.

Below the hero a white band holds "Featured News" in bold black Inter, a "Recently Published" link with a red arrow icon at right, and a grid of image tiles: one large black tile (a spacecraft on black, with a "NEWS RELEASE" eyebrow and the headline "NASA Sets Coverage for SpaceX 35th Station Resupply Launch, Arrival"), a tall image tile, two smaller dark tiles with eyebrow, reading time ("2 MIN READ") and headline in white, then a row of four round-thumbnail list items with eyebrow, time and title. The page then returns to a full-bleed black feature, "Dark Wanderers", over a dotted star-field image with white body copy and a bold "Spotting Brown Dwarfs" link with another red arrow icon. Copy is plain and mission-factual ("At 11:34 a.m. EDT on Thursday... safely splashed down...").

**Key Characteristics:**
- Black-dominant: the largest background by area is `{colors.page-largest}` (#000000, 4459), with a dark card tone `{colors.surface-card-dark}` (#17171b) and a white band between.
- Three type voices: Inter 700 for headlines and UI, Public Sans Web for reading text, DM Mono for spaced uppercase eyebrow labels.
- One saturated accent, red `{colors.primary}` (#d83933), reserved for the main button and the small circular arrow icons.
- Imagery does the work: mission photography, spacecraft on black, and astronomy data images under dark overlays.
- Small 4px radius on buttons; circles (50%) for thumbnails and control buttons.
- Dense metadata around news: type, reading time and mission status labels in mono.

## Colors

> **Source pages:** `https://www.nasa.gov/` (extracted at 1280px and 390px) and the page's shipped CSS color list.

### Brand & Accent
- **Red** (`{colors.primary}` — #d83933): the "Learn More" button fill; hover moves to `{colors.primary-hover}` (#b50909), measured by the hover probe.

### Surface
- **Page black** (`{colors.page-largest}` — #000000): header, hero base, footer, search field fill and large feature sections.
- **Canvas** (`{colors.canvas}` — #ffffff): the news band (1000 area weight).
- **Gray** (`{colors.surface-gray}` — #f6f6f6): a light surface measured at 2296 area weight, mostly beneath the news band content.
- **Dark card** (`{colors.surface-card-dark}` — #17171b): measured at 919 area weight; dark tile backgrounds.
- **Charcoal** (`{colors.surface-charcoal}` — #2e2e32): minor dark surface.
- **Hairline** (`{colors.hairline}` — #ffffff33): 20% white rules on dark (mission strip dividers).

### Text
- **White** (`{colors.on-primary}` / `{colors.canvas}` — #ffffff): the most-read text color (1821 character weight) on black and imagery.
- **Ink** (`{colors.ink}` — #1b1b1b): body copy on white (1000 character weight).
- **Ink light gray** (`{colors.ink-light-gray}` — #b9b9bb), **ink gray** (`{colors.ink-gray}` — #959599) and **ink dim** (`{colors.ink-dim}` — #58585b): secondary labels and the search-field outline.
- **Input border** (`{colors.text-input-border}` — #565c65): the search input border; in the hover probe, the border of the "News & Events" menu button turned #005ea2 on hover.

### Semantic
No separate semantic palette appears on the homepage. The shipped CSS includes blues (#1c67e3, #288bff, #2491ff, #005ea2, #1a4480, #162e51) whose uses on this page were not matched to elements, so none is claimed.

## Typography

### Font Family
Three families are loaded: **Inter** (400 and 700) for headlines, buttons and navigation, **Public Sans Web** (400 and 700) for body text and inputs, and **dm-mono** (400, used at 500) for eyebrow labels. The 2,517 character-weight share of Public Sans Web and 1,229 of Inter show a body-in-Public-Sans, display-in-Inter split.

### Hierarchy

| Token | Size | Weight | Line Height | Letter Spacing | Use |
|---|---|---|---|---|---|
| `{typography.display}` | 72px | 700 | 75.6px | normal | Hero headline |
| `{typography.display-mobile}` | 35.2px | 700 | 36.96px | normal | Hero headline at 390px |
| `{typography.body}` | 16px | 400 | 26.4px | normal | Body copy (Public Sans Web) |
| `{typography.button}` | 22.08px | 700 | 22.08px | normal | "Learn More" button |
| `{typography.nav}` | 17.6px | 600 | 21.12px | normal | Header menu |
| `{typography.link}` | 16px | 600 | 16px | normal | Mission links |
| `{typography.input}` | 15.04px | 400 | 21.056px | normal | Search field |
| `{typography.eyebrow}` | 11.2px | 500 | 11.2px | 3.5px | DM Mono labels, uppercase |

### Principles
- **Eyebrows carry the system voice.** The DM Mono labels are uppercase, 11.2px with 3.5px tracking; on cards they say "NEWS RELEASE", "ARTICLE" or "BLOG", with reading time in the same style.
- **Bold, tight display.** The 72px headline has a 1.05 line-height (75.6px) and weight 700.
- **Other measured sizes**: 14.4px, 17.6px, 14px, 22px, 12px, 29.008px, 18px, 22.4px, 40px, 48px, 56px, 19.2px and 40.992px appear in the extraction, but only the sizes in the table are mapped to roles here.

## Layout

### Spacing System
Measured paddings are 24px (66 uses), 8px, 12px, 16px, 72px, 20px, 32px and 30px; the footer pads `56px 24px` and the header 16px. Gaps are 4px.

### Grid & Container
The markup uses grid utilities named `grid-container`, `grid-container-extrawide`, `grid-row` and `grid-col-*` with `padding-x-3` and `padding-y-2`. In the capture the news content sits in a column with margins of about 56px at 1280px, while the hero and dark features run edge to edge.

### Whitespace Philosophy
Dark sections are tall and nearly empty around a single block of text; the white news band is denser.

## Elevation & Depth

No box shadow is used on the homepage. The only measured shadow is `rgb(88, 88, 91) 0px 0px 0px 1px inset`, a 1px inset outline on the search input. Depth comes from photography, dark overlays and the black-to-white band change.

## Shapes

### Border Radius Scale

| Token | Value | Use |
|---|---|---|
| `{rounded.xs}` | 4px | Primary button |
| `{rounded.pill}` | 9999px | Circles (50% and 100% on thumbnails, pause control) |

Only two shapes appear: a 4px rounded rectangle for the red button and full circles for the round thumbnails, the pause control and the small arrow icons. Everything else, including the news tiles, the hero and the header, has square corners (0px radius appears eight times in the shipped CSS and 2px seven times).

## Components

### Buttons
**`button-primary`**: `{colors.primary}` fill, `{colors.canvas}` text, `{typography.button}` 22.08px/700, padding `12px 20px`, 46px tall, `{rounded.xs}` radius. Hover is `{colors.primary-hover}`. It is the only filled button on the page; the pause and carousel controls are round black or outlined icons.

### Links
**`link`**: white Inter 16px/600 mission titles with a small red circular arrow; 12px top padding under the eyebrow.

### Inputs
**`text-input`**: the header search field is `{colors.page-largest}` with white 15.04px Public Sans Web text, 32px tall, 8px side padding and a 1px `{colors.text-input-border}` outline.

### Cards
**`card-dark`**: near-black `{colors.surface-card-dark}` tiles with a mono eyebrow at the top, headline at the bottom in white and no radius.

### Navigation and footer
**`nav`**: `{colors.page-largest}`, 16px padding, white `{typography.nav}` labels. **`footer`**: black with white text, padding `56px 24px`, opening with "National Aeronautics and Space Administration".

## Design System Architecture

nasa.gov is a WordPress site with a custom theme (`wp-theme-nasa`) and a block plugin (`nasa-blocks`, which ships stylesheets for callout, card-grid, image-of-the-day and news blocks). Its markup combines two class vocabularies: component names with a `usa-` prefix (`usa-header`, `usa-nav`, `usa-nav__link`, `usa-button`, `usa-search`, `usa-input`, `usa-accordion`) plus utility classes in the same style (`grid-row`, `grid-col-5`, `padding-x-3`, `display-flex`, responsive prefixes such as `desktop:display-none` and `tablet:display-block`), and site-specific `hds-*` components (`hds-nasa-header`, `hds-card`, `hds-content-card`, `hds-media-background`, `hds-search-input-dark`). Color utilities are named for NASA's palette: `color-spacesuit-white`, `bg-carbon-black`, `color-carbon-20`, `border-color-carbon-70-important`.

The listed design-system URL, https://nasa.github.io/nasawds-site, was opened. It is the "NASA Web Design System", described as based on the U.S. Web Design System, and it carries a banner: "No longer maintained," pointing to a repository at https://github.com/nasa/nasawds that now redirects to a personal GitHub account (bruffridge/nasawds). Its Colors page lists a blue palette ($color-primary #105bd8, $color-primary-darker #0b3d91, $color-primary-darkest #061f4a, $color-base #212121) that does not match the red `{colors.primary}` and carbon-black shell measured on nasa.gov, and nothing in the nasa.gov HTML references "nasawds". The `usa-` names in the shipped markup resemble the U.S. Web Design System components that NASAWDS is based on, but the site does not state that it uses either, so no values were taken from NASAWDS and no component pages were measured.

Brand-level rules are published in the NASA Brand Center at https://www.nasa.gov/nasa-brand-center/, which covers the NASA Graphic Standards for the Insignia, Seal and Logotype ("Worm"), media usage, merchandise and partnerships. It was opened; it does not specify colors or typefaces, so none are attributed to it. The `{colors.primary}` red, white and black here are measured values only.

## Do's and Don'ts

### Do
- Set headlines in Inter 700 over photography or black; body in Public Sans Web 16px/26.4px.
- Label every content item with a DM Mono eyebrow (type, reading time, mission status) in uppercase with 3.5px tracking.
- Use the red `{colors.primary}` button once per hero and the small red circular arrow as the "more" signal.
- Keep corners square on image tiles; reserve 4px for buttons and circles for thumbnails and controls.
- Overlay dark gradients on photography so white text keeps contrast.

### Don't
- Don't use the legacy NASAWDS blue palette as the nasa.gov brand; it differs from the live site.
- Don't add shadows; the site uses none on cards.
- Don't use more than one filled red button per view.
- Don't set eyebrows in sentence case or without tracking.
- Don't use the NASA insignia or worm outside the Graphic Standards.

## Responsive Behavior

At 390px the hero headline drops from 72px/75.6px to 35.2px/36.96px (weight 700). The measured mobile text sizes are 14.4px (most used), 16px, 12px, 14px, 18px, 11.2px, 22px, 22.4px and 24px, with headings at 36px, 35.2px and 48px; the eyebrow size stays 11.2px. The markup contains separate mobile and desktop header elements (`usa-header-mobile`, `desktop:display-none`, a menu toggle and a mobile search trigger), which indicates a separate small-screen header; its layout was not captured. Other layout reflow was not captured in detail.

## Iteration Guide

1. Start from `{colors.page-largest}` black with white Inter 700 headlines and Public Sans Web body.
2. Add DM Mono eyebrows (11.2px, 3.5px tracking, uppercase) above every headline.
3. Place a single red `{colors.primary}` 4px-radius button in the hero.
4. Use `{colors.surface-card-dark}` tiles over imagery and a white band for news.
5. Re-run `node web/scripts/verify-designs.mjs --slug=nasa` after edits.
