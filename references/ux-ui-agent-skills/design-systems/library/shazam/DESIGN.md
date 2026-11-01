---
version: alpha
name: Shazam
category: "Music & Audio"
description: "Shazam's web home is a white (#ffffff) Apple-style chart catalogue opened by a dark, blurred-artwork hero; NeueMontreal Bold headlines at 60px/700 with -0.6px tracking, #1c1c1e ink, Shazam blue #066bff for links and arrows, 16px-radius song cards and 50px pill buttons."
colors:
  canvas: "#ffffff"
  page-largest: "#000000"
  ink: "#1c1c1e"
  primary: "#066bff"
  ink-strong: "#000000"
  ink-secondary: "#3a3a3c"
  ink-muted: "#949494"
  ink-on-dark-muted: "#ebebf599"
  surface-light: "#f2f2f7"
  surface-dark: "#141414"
  surface-card: "#1e2022"
  surface-tint: "#68797d"
  hairline-on-dark: "#ffffff1a"
  pill-border: "#ffffff33"
typography:
  display:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 60px
    fontWeight: 700
    lineHeight: 63px
    letterSpacing: "-0.6px"
  display-mobile:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 30px
    fontWeight: 700
    lineHeight: 31.5px
    letterSpacing: "-0.3px"
  heading:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    letterSpacing: 0.5px
  subheading:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: 0.5px
  body:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    letterSpacing: 0.5px
  label:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 12px
    fontWeight: 700
    letterSpacing: 0.5px
  button:
    fontFamily: NeueMontreal, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    letterSpacing: 0.5px
  input:
    fontFamily: Arial
    fontSize: 18px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4px
  md: 4.5px
  lg: 5px
  xl: 8px
  2xl: 10px
  3xl: 15px
  4xl: 16px
  connect: 50px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 12px
  s10: 14px
components:
  button-connect:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.connect}"
    padding: 10px 20px
    height: 42px
    borderColor: "{colors.pill-border}"
  link-see-all:
    textColor: "{colors.primary}"
    typography: "{typography.label}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  select:
    textColor: "{colors.ink-muted}"
    typography: "{typography.input}"
    padding: 10px 32px 10px 15px
    height: 42px
    borderColor: "{colors.ink-muted}"
  song-card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.4xl}"
    boxShadow: "rgba(0, 0, 0, 0.3) 0px 8px 30px 0px, rgba(255, 255, 255, 0.1) 0px 0px 5px 0px inset"
---

# Shazam

## Overview

Shazam's website (measured at https://www.shazam.com/, title "Shazam - Music Discovery, Charts & Song Lyrics") presents the music-recognition app as a live chart publication. The page body is white `#ffffff`, but the top band is dark. A 750px hero shows the blurred, colour-washed artwork of the currently featured songs, and over it sits the white headline "What people are finding with Shazam right now" with the eyebrow "UPDATED WEEKLY". To the right, a carousel of tilted song cards ("Going Viral", "Radio Reaction", "Artist on the Move") fans out in 3D, and a tooltip "Click to Shazam – Identify songs playing around you" points at the round blue Shazam button.

Below the hero comes a 700px media section headed "Name songs in seconds", which renders as solid black in the capture. Then the white chart catalogue begins: "Top songs being discovered around the world right now" at 50px, a large editorial video tile for the Global Top 200, a three-column "Global Top 200 Chart" list, a row of "Featured Top Artists" portraits, and "More Charts" cards for local charts (Top 200 Thailand, Top 50 Bangkok, matched to the visitor's location). The footer is dark, with a language select, app-store badges and Company and Legal link lists.

The voice is plain and informative: "See who made it on the list of the top songs worldwide on Shazam", "SEE ALL >", "VIEW". The copyright line reads "© Copyright 2026 Apple Inc. and its affiliates". A slim cookie notice ("We use cookies - by using this site you agree to our Apple Privacy Policy") spans the bottom of the capture; it is consent UI, not a component.

## Colors

The site's `:root` declares an Apple-style named palette (`--color-blue-500`, `--color-gray-100` … `--color-gray-900`, `--color-black-200`). The measured page uses these:

- **Canvas `#ffffff`.** The body background and the chart catalogue's band.
- **Page largest `#000000`.** The largest measured background area: the black "Name songs in seconds" media block and dark overlays.
- **Ink `#1c1c1e`.** Chart headings and song titles on white (`--color-black-200`).
- **Primary `#066bff`.** Shazam blue (`--color-blue-500`). It colours "SEE ALL" and the round carousel arrows, and it is the measured focus border colour. The page has no filled primary CTA, so no on-primary colour was measured.
- **Ink strong `#000000`** and **ink secondary `#3a3a3c`** (`--color-gray-900`) for artist names and secondary lines.
- **Ink muted `#949494`.** Footer column headings ("Company") and the language select border.
- **Ink on dark muted `#ebebf599`.** Translucent light text over the hero artwork.
- **Surface light `#f2f2f7`** (`--color-gray-100`). The pale strip between the hero and the black media block.
- **Surface dark `#141414`.** A measured near-black background area.
- **Surface card `#1e2022`.** The fill of the hero song cards. It differed between two extractions (`#160604` first, `#1e2022` on the re-run), so it follows the featured artwork rather than being a fixed brand colour.
- **Surface tint `#68797d`.** A large measured background area (1,029 area units); the element it belongs to was not identified.
- **Hairline on dark `#ffffff1a`** (the most frequent border) and **pill border `#ffffff33`** (the Connect button).

## Typography

One family carries the whole site: **NeueMontreal**, loaded from assets.shazam.com in Regular (400), Medium (500) and Bold (700). It is a commercial grotesk; if it is unavailable, Arial is the site's own declared fallback. The text uses positive tracking throughout (0.5px at most sizes, 0.44px on part of the 16px text). The display sizes are the exception: their tracking is negative.

- **Display.** 60px/700, 63px line height, -0.6px tracking: the hero headline.
- **Heading.** 32px/700, 0.5px tracking ("Name songs in seconds"). The chart intro uses 50px, and section titles ("Global Top 200 Chart", "Featured Top Artists", "More Charts") are 24px/700 in `#1c1c1e`.
- **Subheading.** 18px/400 with a 40px line height, used for footer column headings.
- **Body.** 14px/400, 0.5px tracking. 16px is the most-used size by character count (2,329 characters).
- **Label.** 12px/700, 0.5px tracking: card labels and "SEE ALL".
- **Button.** 16px/500 for the "Connect Music" pill.
- **Input.** The language `<select>` renders in Arial 18px.

The measured weights are 400, 500, 700, 900 and 800, and the sizes are 8, 11, 12, 14, 16, 18, 20, 24, 32, 50 and 60px.

## Layout

The desktop page was measured at 1280px wide and 4,731px tall. The site declares `--page-max-width: 1340px` and `--artist-page-max-width: 1920px`. The chart catalogue's content runs from about x 76 to x 1186. There are three measured bands: the hero (0–750, content x 32–1200), the media block (750–1450), and the white catalogue (1450 to the end). The hero is split: the headline is left-aligned in the left third, and the 3D card carousel sits to the right.

The chart list uses a grid of three visible columns, each row holding a rank number, square artwork with a play button, the title and the artist. Rows are separated by thin rules, and the list scrolls horizontally with round previous/next arrows. The artist row shows square portraits with captions. "More Charts" shows two wide dark cards per view. Frequent paddings are 15px, 20px, 30px and 40px, and frequent gaps are 4px, 8px and 15px.

## Elevation & Depth

Shazam uses soft shadows more than the other music services. The most frequent shadow is `rgba(0, 0, 0, 0.1) 0px 2px 12px 0px` (35 elements: chart artwork and small tiles). The hero song cards pair a deep drop shadow with an inner glow, `rgba(0, 0, 0, 0.3) 0px 8px 30px 0px, rgba(255, 255, 255, 0.1) 0px 0px 5px 0px inset`, which makes them read as glass slabs over the artwork. A wide halo, `rgba(0, 0, 0, 0.1) 0px 4px 14px 0px, rgba(0, 0, 0, 0.35) 0px 0px 102px 0px`, sits on the translucent `#ffffff0a` artwork tiles. The carousel also adds perspective: the side cards are rotated in 3D.

## Shapes

Rounding is consistent and moderate. 8px is the most frequent radius (149 elements: artwork thumbnails and chart tiles), then 16px for the hero song cards, 10px for chart cards, and 50% for circular controls (play buttons, carousel arrows, share buttons, the Shazam button). The "Connect Music" button in the header is a 50px-radius pill. Small radii (3px, 4px, 4.5px, 5px, 15px) appear on badges and the explicit-content marker. Nothing on the page is square except full-bleed bands.

## Components

- **Connect button.** A header pill: transparent fill, white NeueMontreal 16px/500 text "Connect" with the Apple Music mark, `1px solid #ffffff33` border, 50px radius, 10px 20px padding, 42px tall, 173px wide.
- **Header.** Logo at the left; centred links "Get The App", "Concerts", "Charts", "Radio Spins", "Fast Forward '26" in white; a circular search button and the Connect pill at the right. It sits transparently over the hero.
- **Hero song card.** A 270×338px card, 16px radius, artwork-tinted fill (`#1e2022` measured), white title, artist and a Shazam count ("34,170"), plus a round share button. Hovering the share button raises its fill from `rgba(255, 255, 255, 0.1)` to `rgba(255, 255, 255, 0.25)`.
- **Chart row.** Rank number, 8px-radius artwork with a circular play overlay, the title in `#1c1c1e` and the artist in `#3a3a3c`; an explicit badge where needed.
- **See all link.** Blue `#066bff`, 12px bold, uppercase, followed by a chevron.
- **Carousel arrows.** Paired circles: grey for disabled, blue for active.
- **Language select.** Arial 18px in `#949494`, `1px solid #949494`, 10px 32px 10px 15px padding, 42px tall.
- **Footer.** Dark; the logo, a language select, Google Play, App Store, Chrome Web Store and Galaxy Store badges, Company and Legal lists, and "Follow Us" social icons.

## Design System Architecture

Shazam publishes no public design system or brand guidelines on its site. The Company page (https://www.shazam.com/company) links only to apps, careers, help, legal pages and "ShazamKit for Developers". The de facto system is visible in the shipped CSS. The `:root` palette uses numbered scales (`--color-gray-100: #f2f2f7` through `--color-gray-900: #3a3a3c`, `--color-blue-100` to `--color-blue-500: #066bff`, `--color-red-100` to `--color-red-400`), plus single colours (`--color-sapphire: #0324c8`, `--color-indigo: #36238a`, `--color-yellow-100: #e9df2d`) and layout widths (`--page-max-width: 1340px`). Class names are CSS-module hashes (for example `transparentLightCenterAnimated_headerLogoSvg__E6RLe`), which shows component-scoped styling. The logo is an SVG `<use>` reference to a `#ShazamTitleLogo` symbol.

## Do's and Don'ts

**Do**
- Keep the catalogue white with `#1c1c1e` headings, and save the dark, artwork-tinted treatment for the hero and the media cards.
- Use Shazam blue `#066bff` for navigation affordances: "SEE ALL", arrows, focus.
- Set everything in NeueMontreal with slight positive tracking (0.5px), except the large display headline (-0.6px).
- Give artwork 8px corners and soft `0px 2px 12px` shadows; use circles for every media control.
- Let the featured artwork set the hero's colour.

**Don't**
- Don't introduce a filled, coloured CTA button; the measured home page has none.
- Don't hard-code `#1e2022` as a brand surface; the card fill changed between two extractions with the featured artwork.
- Don't use square artwork tiles or hard-edged cards.
- Don't treat the cookie strip as a footer component.

## Responsive Behavior

Measured at 390px wide. The hero headline drops from 60px to **30px/31.5px** with -0.3px tracking and becomes centre-aligned (`align: center` in the mobile band data). The h2 "Name songs in seconds" drops from 32px to 24px. The "More Charts" card titles measure 32px. On mobile only one header link was measured as visible (`headerLinksVisible: 1`), and a menu toggle labelled "Expand Menu" was measured as visible. The mobile capture shows the logo, search and a menu icon in the header; the hero card carousel below the headline with dot pagination; a chart list with one full column visible (the next column cut off at the right edge), Apple Music badges and overflow (⋮) buttons; and the footer content centred. The mobile body text was measured at 14px with 0.5px tracking, unchanged from desktop. Breakpoint widths were not measured.

## Iteration Guide

1. Start with a white canvas, NeueMontreal throughout, `#1c1c1e` headings and 0.5px tracking.
2. Open with a dark hero whose colour comes from the featured artwork; set the headline at 60px/700 with -0.6px tracking (30px on mobile).
3. Show content as charts: ranked rows with 8px-radius artwork, circular play overlays and blue "SEE ALL" links.
4. Use 16px-radius glassy cards with deep shadows and an inset glow only over imagery.
5. Keep actions as outline pills (50px radius) or circles; reserve `#066bff` for links, arrows and focus.
6. Check the result against the capture: the page should read as a white Apple-style catalogue with one dark, artwork-tinted hero.
