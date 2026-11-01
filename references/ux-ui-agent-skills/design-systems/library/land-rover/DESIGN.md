---
version: alpha
name: Land Rover (UK site)
category: "Automotive"
description: "Land Rover UK home (landrover.co.uk): a three-panel full-height model selector (Range Rover, Defender, Discovery) with white square EXPLORE buttons, AvenirNext 10px uppercase labels at 3px tracking, ink #0c121c and slate #4a4f54 text, 0px radius and a dense legal footer."
colors:
  canvas: "#ffffff"
  ink: "#4a4f54"
  primary: "#ffffff"
  on-primary: "#0c121c"
  ink-input: "#4a4f54cc"
  primary-hover: "#595d64"
  on-primary-hover: "#b2b4b7"
typography:
  display:
    fontFamily: AvenirNext, Arial, Helvetica, sans-serif
    fontSize: 10px
    fontWeight: 700
    lineHeight: 14px
    letterSpacing: 3px
  body:
    fontFamily: AvenirNext, Arial, Helvetica, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 13px
    letterSpacing: 0.5px
  input:
    fontFamily: AvenirNext, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19px
    letterSpacing: 0.2px
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 10px
  s3: 13px
  s4: 15px
  s5: 16px
  s6: 18.5px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
    padding: 13px 20px
    height: 45px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 18.5px 0px
    height: 55px
    boxShadow: rgba(74, 79, 84, 0.3) 0px 1px 0px 0px
  footer:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
---

## Overview

The queued URL, https://www.landrover.com, resolves to a market selector (https://www.landrover.com/market-selector/index.html) that lists regional sites, and the language-style path `/en` returned a "Page Not Found" page. The real home page was therefore measured at the United Kingdom site, https://www.landrover.co.uk/ (final URL `https://www.landrover.co.uk/index.html`, title "Land Rover | Explore Luxury SUVs and 4x4 Vehicles"), and this file is named after that measured site. The page is 1280px wide and 1740px tall.

The top of the page is three full-height vertical panels, each a looping video or photograph behind a white vehicle name in Land Rover's wide extended wordmark lettering: RANGE ROVER (dark interior close-up), DEFENDER (a Defender on sand) and DISCOVERY (an aerial view of a car on a winding forest road). Under each name are two stacked white rectangular buttons, "EXPLORE" and "SEARCH IN STOCK VEHICLES". Below the panels, a white footer carries four columns: VEHICLES (Range Rover, Discovery, Defender, SV, Fleet & Business, Diplomatic Sales, Build Your Own, Approved Used, Get a Finance Quote, Going Electric, Request a Test Drive), OWNERSHIP and ACCESSORIES, EXPERIENCE and ABOUT US, and JOIN THE CONVERSATION with five square social buttons (Instagram, TikTok, YouTube, Facebook, X) as dark navy tiles with white glyphs. A search field ("Search our site"), a link row (Change Market, Contact Us, Careers, Terms and Conditions, Privacy Policy, Cookie Policy, Accessibility Statement, EU Data Act, Other Variants, Cookies Settings), the oval Land Rover logo and several paragraphs of small-print disclaimers close the page.

The voice is restrained and premium: short uppercase labels, no marketing sentences on the first screen, and long regulatory text in the footer ("Jaguar Land Rover Limited is constantly seeking ways to improve the specification, design and production of its vehicles…").

The legal block deserves note because it is a large share of the page's text: it states the registered office ("Abbey Road, Whitley, Coventry CV3 4LF. Registered in England No: 1672070"), a link labelled "VIEW REGULATION (EU) 2020/740 PDF", and paragraphs on specification changes, payload weights, WLTP test figures, and real-world fuel economy and range, plus a note that mapping on the website is provided by external providers. All of it is set in the same 10px slate body style, which is why the measurement finds only one font size.

## Colors

The palette is almost neutral.

- **White #ffffff** is the footer canvas (490 area-weight) and the fill of the EXPLORE and SEARCH buttons.
- **Ink #0c121c** is a near-black navy: button text, footer headings and the dark social tiles (1047 area-weight, the largest background in the measurement, because the dark video panels and social tiles count here). 
- **Slate #4a4f54** is the body and link color (2866 characters). **#4a4f54cc** (80% alpha) is the search input text and placeholder.
- **Hover:** the white buttons turn #595d64 with #b2b4b7 text and a translucent white border (measured on EXPLORE).

No accent hue, status colors or brand green were measured on this page: the logo's green is inside an image and was not extracted. Color comes from the photography behind the type.

## Typography

One family, **AvenirNext** (400, 500, 600, 700 loaded), with an Arial/Helvetica fallback. The extraction found a single text size on this page: **10px**, for all 3061 measured characters. Hierarchy is created by weight and letter-spacing, not size.

- Display / button label: 10px on 14px, weight 700, letter-spacing 3px, uppercase in the markup.
- Body / links: 10px on 13px, weight 400, letter-spacing 0.5px (2297 characters).
- Footer headings: weight 600, 1.2px tracking on a 19px line.
- Nav-style links: weight 500 with 1px tracking (584 characters).
- Input: 14px on 19px, 0.2px tracking.

The vehicle names are not text in these measurements: they appear as the wordmark lettering of Land Rover's model badges, which is artwork in the capture. The same site's error page (not this one) loads a second face, `LandRoverWeb-Bold` (700) for headlines, listed in its fonts; that face was not measured in use on the home page.

## Layout

The first screen is a three-column split of equal width (each panel is a third of the 1280px viewport in the capture), with centered content: model name, then two buttons stacked at about the vertical center. The footer is a four-column grid with large gaps (48px and 24px are the most frequent gaps after 10px) and paddings of 13px, 20px and 40px. Sections are separated by white space; no cards or borders were measured (the border color list is empty).

## Elevation & Depth

There are no card shadows. The only measured shadow is a 1px underline-style shadow `rgba(74, 79, 84, 0.3) 0px 1px 0px 0px` on the search input. Depth is carried entirely by the full-bleed photography and video.

## Shapes

`borderRadii` is empty in the extraction: every element computes a 0px radius, so the white buttons, social tiles and input are sharp rectangles. (The root variable `--_rounded-corners-radius` is 10px but no measured element uses it.)

## Components

- **Primary button (EXPLORE, SEARCH IN STOCK VEHICLES)**: white fill, #0c121c text, 10px bold uppercase with 3px tracking, 13px 20px padding, 45px tall, 0px radius. Hover: #595d64 fill, #b2b4b7 text.
- **Search input**: transparent, 14px text at 80% ink, 55px tall, 18.5px vertical padding, a 1px bottom line as a shadow, with a magnifier icon.
- **Footer link**: 10px slate uppercase, 0.5px tracking.
- **Social tile**: square dark #0c121c block with a white brand glyph and a bold label.
- **Footer heading**: 10px, weight 600, uppercase, #0c121c.

## Design System Architecture

No public design system for Land Rover's web interface was found. Pages opened: https://www.landrover.com/market-selector/index.html (market list), https://www.landrover.co.uk/ (this page) and https://www.landrover.com/en (a 404 page). The shipped CSS exposes only five root variables (`--eswIconFontSize`, `--_rounded-corners-radius`, `--eswButtonRight`, `--eswIconFillColor`, `--eswButtonBottom`), so the de-facto system is class-based CSS built on one typeface, three colors (#ffffff, #0c121c, #4a4f54) and a tracking-based hierarchy. Icon fonts `icons-dx` and `icons-2022` are loaded for glyphs.

## Content Patterns

Every label is an imperative or a noun in capitals: EXPLORE, SEARCH IN STOCK VEHICLES, VEHICLES, OWNERSHIP, ACCESSORIES. Footer groups are short and parallel, three or four items per model family (a Range Rover accessories link, a Defender accessories link and a Discovery accessories link), which keeps the page scannable despite its small type.

## Do's and Don'ts

- Do let photography and video fill the viewport and keep UI to white rectangles with dark text.
- Do set all UI text in AvenirNext at 10px, using weight and tracking (3px for actions, 0.5px for reading text) for hierarchy.
- Do keep corners at 0px.
- Do use #4a4f54 for running text and #0c121c for emphasis.
- Don't add accent colors, gradients on UI or card shadows.
- Don't round buttons.
- Don't use size jumps to create hierarchy on this layout; none were measured.
- Don't treat the market selector or 404 pages as the home design.

## Responsive Behavior

The 390px pass measured the same text scale: 10px for 2496 characters and 13px for 9, with the h1-role label at 10px bold with 3px tracking, body 10px on 13px, and the primary button unchanged (white fill, #0c121c text, 0px radius, 3px tracking). Panel stacking and footer column collapse on mobile were not measured.

## Iteration Guide

1. Build on the frontmatter: white button, dark text, 10px AvenirNext.
2. Hierarchy comes from weight and letter-spacing; keep sizes at 10px unless a new measurement says otherwise.
3. Keep every radius at 0px.
4. Put any new color through `web/data/extracted/land-rover.json` first.
5. Run `node web/scripts/verify-designs.mjs --slug=land-rover`.
