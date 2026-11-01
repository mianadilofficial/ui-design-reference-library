---
version: alpha
name: centralwOrld
category: "Thai Brands"
description: "centralwOrld, Bangkok's large lifestyle shopping complex, is a black-and-white editorial site in the custom cpn typeface (700 weight, 48.0004px section headings, 126px display words) with a white DISCOVER button, uppercase 12.25px tracked labels, and three rootVar accents: red #ed2939, lime #dfff0d and blue #0f4dbc."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
  on-primary: "#000000"
  ink-muted: "#9c9c9c"
  accent-red: "#ed2939"
  accent-lime: "#dfff0d"
  accent-blue: "#0f4dbc"
  surface-light: "#f5f5f5"
typography:
  heading:
    fontFamily: cpn, "cpn Fallback", Arial, sans-serif
    fontSize: 48.0004px
    fontWeight: 700
    lineHeight: 57.9845px
  body:
    fontFamily: cpn, "cpn Fallback", Arial, sans-serif
    fontSize: 17.9998px
    fontWeight: 700
    lineHeight: 21.9598px
  button:
    fontFamily: cpn, "cpn Fallback", Arial, sans-serif
    fontSize: 12.25px
    fontWeight: 700
    lineHeight: 17.5px
    letterSpacing: 0.98px
    textTransform: uppercase
  nav:
    fontFamily: cpn, "cpn Fallback", Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 23.996px
rounded:
  none: 0px
  pill: 9999px
spacing:
  s1: 7px
  s2: 8px
  s3: 10.5px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 21px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 39px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10.5px 21px
    height: 41px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 64px 0px 0px
---

## Overview

The page title of the site reads "centralwOrld - Bangkok's Largest Shopping Complex", and the wordmark itself is written with a capital O inside the word: "centralwOrld". On the homepage a lifestyle video fills the first screen, overlaid with the line "The largest lifestyle shopping destination in Bangkok". The wordmark is centred in white at the top, with a row of navigation labels beneath it: What's Happening, Shop & Dine, Deals & Promotions, Tourist Guide, Our Services and About Us, and a language switcher (EN, TH, CN, KR, AR) at the right edge.

Below the hero the page changes tempo. A white section shows a fan of tilted, portrait-format photographs under the heading "Global Events" and the line "Bringing world-class events and global experiences to the heart of the city". Large open circles, rings in red and lime, intrude from the page edges; the capital O of the wordmark is echoed by these rings, which is the recurring graphic device. Two bordered cards follow, titled "Tourist Best Offers!" and "Tourist Checklists!", each with a lime badge whose circular text reads "own your movement" and a photograph with an "Explore" label and arrow. Further down an enormous headline, "The wOrld's favorite", runs across the full width.

The tone is energetic and tourist-facing, with exclamation marks in card titles and short imperative labels. The system is black, white and photography, with three accent colors used sparingly as shapes.

## Colors

The page is measured as black and white. Black (`ink`, #000000) is both the main text color and the dominant background area on the full measurement (the video hero and footer count as black), and white (`canvas`, #ffffff) is the section background. The only neutral between them is `ink-muted` (#9c9c9c), used for secondary text such as the language list.

`primary` is #ffffff because the one detected call to action, DISCOVER, is a white-filled rectangle with black text (`on-primary`, #000000). That is a deliberate high-contrast choice: on dark photographic panels the button reads as a white bar. A secondary "GET DIRECTION" button is transparent with a white 1px border and white text.

The site's stylesheet publishes three brand accent colors as root variables: `--color-theme-red` #ed2939 (`accent-red`), `--color-theme-yellow` #dfff0d (`accent-lime`, a very bright acid yellow-green) and `--color-theme-blue` #0f4dbc (`accent-blue`), plus a light grey `--color-gray-light` #f5f5f5 (`surface-light`). The red and lime appear in the capture as large rings and a badge. The blue is defined but is not visible in the captured area. Accents are decorative shapes, not text or button colors.

## Typography

The family is a custom face named "cpn", loaded in weights 400 and 700, with a generated fallback and Arial then sans-serif behind it. The site also loads an icon font called "iconfont". No public source for the cpn face was found. Where cpn fails to load the site itself falls back to Arial, so Arial is the documented substitute.

Measured styles: the section heading is 48.0004px, weight 700, line height 57.9845px (`heading`); body-weight text is 17.9998px at weight 700 (`body`), a bold reading size; the button label is 12.25px, weight 700, uppercase with 0.98px letter spacing (`button`); and navigation is 14px at weight 400 (`nav`). Other sizes in use are 30.0006px, 24.0002px, 35.5556px, 59.52px and an oversized 126px for the full-width statement line. Weight 700 covers most characters, which gives the page a confident poster voice.

## Layout

The stylesheet is built on Tailwind CSS (its `--tw-*` variables and `--spacing` base of .25rem are present) with a named spacing scale: 4px, 8px, 12px, 16px, 20px, 24px, 30px, 36px, 40px, 48px, 64px, 72px, 100px, 120px and 150px. The header height variable is 80px, button and input heights are 42px, and the container padding is clamp(20px, 1.39vw, 40px), so content runs nearly edge to edge. Breakpoints include xl at 80rem and 2xl at 96rem.

The page is 8329px tall at 1280px. Sections alternate between full-bleed video, white fields with tilted photographs, two-up bordered cards and the oversized statement. The measured spacing tokens here (7px to 28px) come from paddings and gaps used inside components; larger section gaps use the named scale above.

## Elevation & Depth

No box shadows were measured. Depth comes from photography, overlay darkening on the video hero, 1px borders (#d4d4d4 and a translucent black 1A) on cards, and the overlap of ring shapes over image edges. The footer is a solid black block with white text and 64px of top padding. Keep surfaces flat and rely on contrast and imagery.

## Shapes

Corners are square: `rounded.none` is 0px for the primary button, links, nav and footer. The only round shapes are the 9999px pill used by the outlined secondary button and 50% circles, which appear on the language switch and badges. Rings and circles are the brand's graphic motif; rectangles stay sharp so that circles contrast against them.

## Components

**Primary button (`button-primary`).** White fill, black text, 12.25px bold uppercase label with 0.98px tracking, 0px radius, 39px tall. Seen as "DISCOVER" over dark panels.

**Secondary button (`button-secondary`).** Transparent, white text, 1px white border, pill radius, padding 10.5px 21px, 41px tall. Seen as "GET DIRECTION".

**Navigation (`nav`, `nav-link`).** White text at 14px weight 400 over the hero video; 0px radius, no backgrounds.

**Cards.** Bordered white rectangles, square corners, with a bold two-line title at the top left, a circular lime badge at the top right, then a full-width photo with a white "Explore" label and small arrow.

**Footer (`footer`).** Black background, white text, 64px top padding, no radius.

## Design System Architecture

No public brand guideline, design system or token package was found for centralwOrld; the homepage fetched for research contained only the brand name and the tagline. The de-facto system is a Tailwind-based stylesheet with named custom properties: `--color-theme-red`, `--color-theme-yellow`, `--color-theme-blue`, `--color-gray`, `--color-gray-light`, `--font-size-h1` (4.5714rem), `--font-size-h2` (3.4286rem), `--font-size-h3` (2.8571rem), `--font-size-btn` (.7143rem), `--font-size-tagline` (.8571rem), `--button-height` and `--input-height` (both 42px), plus transition timing variables (.4s and .8s with ease-in-out). A Swiper carousel is also included (its theme color variable is #007aff, a library default). Treat these variables as the authoritative system, and ignore library defaults.

## Do's and Don'ts

- Do keep surfaces strictly black or white and let photography bring color.
- Do use the white rectangular button with black uppercase text for primary actions.
- Do use accent red and lime only as rings, badges and other shapes.
- Do set headings in cpn bold at 48.0004px and keep exclamation-style, short copy.
- Don't round the primary button; keep corners at 0px.
- Don't add shadows or gradients.
- Don't use #007aff or other library defaults as brand colors.
- Don't use the accent colors for body text.

## Responsive Behavior

The mobile pass was measured at 390px. The spacing scale and the clamp-based container padding adapt automatically, and the breakpoints are expressed in rem (80rem and 96rem for xl and 2xl). Display words measure 126px on desktop; their mobile behaviour was not measured. The capture shows a circular EN language selector. Buttons keep 39px to 42px heights for touch.

## Iteration Guide

1. Start with white canvas, black ink and a photographic hero.
2. Build headings in cpn 700 at 48.0004px, body at 17.9998px, labels at 12.25px uppercase with 0.98px tracking.
3. Make the primary action a white 0px-radius button with black text; the secondary an outlined pill.
4. Introduce #ed2939 and #dfff0d only as rings or badges, one per section.
5. Re-measure with the extractor before adding any new size or color.
