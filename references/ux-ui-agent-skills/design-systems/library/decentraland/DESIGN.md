---
version: alpha
name: Decentraland
category: "Design Systems"
description: "Decentraland.org home page — a near-black (#161518) body under saturated purple bands (#570f88, #39055c), white Inter headlines at 60px/600, and uppercase Inter buttons in a hot pink-red (#ff2d55) with 16px corners, built on the MUI-based decentraland-ui2 theme with a 6px base radius."
colors:
  canvas: "#161518"
  ink: "#ffffff"
  ink-muted: "#a09ba8"
  ink-soft: "#f0f0f0"
  ink-on-light: "#242129"
  primary: "#ff2d55"
  on-primary: "#fcfcfc"
  surface-purple: "#570f88"
  surface-purple-deep: "#39055c"
  surface-gray: "#3a3a3a"
typography:
  display:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 60px
    fontWeight: 600
    lineHeight: 72px
    letterSpacing: "-0.5px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 40px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: 0.3752px
  heading:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 57.6px
    letterSpacing: "-0.5px"
  body:
    fontFamily: Inter, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: 0.15008px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 19.89px
    fontWeight: 600
    lineHeight: 29.835px
    letterSpacing: 0.61px
    textTransform: uppercase
  nav:
    fontFamily: Inter, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.15008px
rounded:
  xs: 2px
  sm: 6px
  md: 8px
  lg: 10px
  xl: 16px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5.5px
  s3: 6px
  s4: 8px
  s5: 9px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 64px
  button-light:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-on-light}"
    typography: "{typography.button}"
    rounded: "{rounded.xl}"
    height: 64px
  nav:
    textColor: "{colors.on-primary}"
    padding: 16px 54px
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 1px -1px, rgba(0, 0, 0, 0.14) 0px 1px 1px 0px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px
---

## Overview

The Decentraland home page is a poster for a virtual world, selling a social experience rather than a technology. The top of the captured page is a full-bleed 3D-rendered scene of neon-lit avatars outside a theatre; a dark purple scrim sits over it, and the headline "Close the Feed. Come Hang Out." is set centered in white. Under it are two large download buttons, one pink-red ("DOWNLOAD FOR" with an Apple logo) and one white ("DOWNLOAD ON" with the Epic Games logo), a line "Total Downloads: +438K" with platform icons (Windows, iOS, Android), and a "SIGN IN" outlined button at the top right next to a round logo and the wordmark "Decentraland".

Below the hero the page alternates between two saturated purple bands. "Jump Into What's Happening" shows three live-event cards with a red "LIVE" badge and a player count over a game-style cover, a title and a "by" creator line with an avatar; a "VIEW ALL" outlined pill follows. "Catch the Vibe" shows two wide cards with clips from the world (a duration tag in the corner) and a pink "HANG OUT NOW" button with an arrow icon.

Tone is social, informal and a little cheeky: "Close the Feed", "Come Hang Out", "Catch the Vibe", "Jump Into What's Happening". Everything is shouted in uppercase on buttons and calm in sentence case in headlines. The look combines a dark interface shell with the vivid colors of user-generated 3D content.

## Colors

- **Canvas** `{colors.canvas}` is the body color (a warm near-black, called Soft Black in the official theme). The visible bands are purple: `{colors.surface-purple}` is the largest background area on the page and `{colors.surface-purple-deep}` is the second.
- **Primary** `{colors.primary}` is a vivid pink-red used for the main download button, "HANG OUT NOW", the "LIVE" badge and creator links; text on it is `{colors.on-primary}`.
- **Ink** `{colors.ink}` is pure white for headlines and card text; `{colors.ink-muted}` (a purple-grey) is secondary text; `{colors.ink-soft}` is a near-white used for lighter surfaces.
- **Light button** — the white "DOWNLOAD ON" button uses `{colors.ink}` fill with `{colors.ink-on-light}` text.
- **Surface gray** `{colors.surface-gray}` is a neutral panel grey measured as a large background area.

The decentraland-ui2 package defines this palette as neutral steps (Soft Black 1 `#161518`, Soft Black 2 `#242129`, grays from `#43404A` to `#ECEBED`, Soft White `#FCFCFC`) plus a pink-red primary with darker and lighter steps and a set of eight rarity colors for items (common through unique). The rarity colors are in the CSS but are not part of the home page chrome.

## Typography

The family is Inter with Helvetica and Arial fallbacks. Headlines are semi-bold: the hero `{typography.display}` is 60px on a 72px line at -0.5px tracking, and section titles use `{typography.heading}` (48px/600). The mobile display token is 40px at weight 700. Body copy is 20px at weight 500 with a 32px line and slight positive tracking (`{typography.body}`); navigation is 16px regular. Buttons use `{typography.button}`: about 20px (19.89px), weight 600, uppercase, with 0.61px of letter-spacing.

The theme package also references a display face named DecentralandHero (Roobert PRO Bold files ship in the package's fonts folder) for a heading component, but it is not among the fonts measured on the home page, so it is not tokenised here. Inter is open source and can be used as-is.

## Layout

The captured page is 1280px wide and uses full-bleed bands stacked vertically, with content centered. Cards sit in a row of three with equal widths in the first band; the second band uses a two-up layout with wider cards. Headings are centered above their modules, and each band ends with a single centered button. The header is a transparent bar over the hero: logo and wordmark at left, "SIGN IN" at right with 54px horizontal padding.

## Elevation & Depth

Shadows are small and mostly invisible against the dark ground. The measured card shadow is the standard MUI level-1 stack, a 2px, 1px and 1px stack of black at 20%, 14% and 12% alpha. A separate faint white glow of 15% alpha appears once. Depth in the page comes from layering: a darkening scrim over the 3D hero, a translucent black overlay (`#00000099`) on media, and card images that bleed to the card edges.

## Shapes

The base theme radius is 6px (`--mui-shape-borderRadius`). Large controls and cards are 16px (`{rounded.xl}`): the big download buttons and event cards use it. Other measured radii are 8px, 24px, 6px, 50% for avatars and a top-only 16px on card media. "SIGN IN" and "VIEW ALL" are outlined with a 1px white border. The theme package also defines a 100px radius for pill-shaped chips.

## Components

- **Primary button** — `{colors.primary}` fill, `{colors.on-primary}` uppercase text at 19.89px/600, 64px tall, `{rounded.xl}`, with a platform icon (Apple logo) after the label.
- **Light button** — white fill, near-black text, same size and radius, with the Epic Games logo.
- **Small action** — pink "HANG OUT NOW" at 14px/600 with 6px 16px padding, 60px height as measured and an arrow glyph in a white rounded square.
- **Outlined button** — transparent with a white 1px border ("SIGN IN", "VIEW ALL" with a chevron).
- **Event card** — dark purple card, 16px radius, cover image with a red "LIVE" tag and a green dot with player count, title in white, creator in pink.
- **Video card** — wide clip thumbnail with a play and duration label and a creator avatar below.

## Design System Architecture

The dsUrl, ui.decentraland.org, is a Storybook titled "UI | Decentraland" whose component list (AddressField, Atlas, AuthorizationModal, Blockie and others) comes from the `decentraland-ui` repository (github.com/decentraland/ui, package version 7.2.1 in the npm registry). That is the older library. The live home page does not use it: its root CSS carries MUI custom properties (`--mui-palette-*`, `--mui-shape-borderRadius`, `--mui-shadows-*`), and the values match the theme in the newer package `decentraland-ui2` (3.23.6), which I downloaded and read: its README describes it as "Material UI themed with Decentraland's look & feel" and points to [ui2.decentraland.org](https://ui2.decentraland.org), a Storybook with about 400 stories. The theme's colors file has Soft Black 1 `#161518`, primary `#FF2D55`, gray 3 `#A09BA8`, Soft Black 2 `#242129` and Soft White `#FCFCFC`; the typography file sets Inter as the family; the theme index sets the base shape radius to 6px; the exported ThemeProvider takes a dark theme.

I measured a Button story on ui2 with the extractor (Contained: `#ff2d55` fill, white text, Inter 14px/600 uppercase, 6px radius, 36px tall, 0.4px letter-spacing), which confirms that the same primary and type appear in the library at its default small size, while the marketing site scales the button up to 64px tall with a 16px radius. So the architecture is: an MUI theme package (colors, typography, shape, component overrides, dark and light color schemes), a Storybook for the components, and a site that sets its own larger sizes on top.

## Do's and Don'ts

- Do use the pink-red for the single main action in each band.
- Do set buttons in uppercase with generous tracking.
- Do use purple bands to separate sections and keep the canvas near-black.
- Do show real world content (avatars, event covers) in rounded cards.
- Don't put pink text on the pink primary or on busy imagery without a scrim.
- Don't use sharp corners on buttons; 16px is the marketing standard (6px in the base library).
- Don't use rarity colors for general interface decoration.
- Don't set headlines in uppercase; they are sentence or title case.

## Responsive Behavior

The home page measures a 60px display on desktop and a 40px, 700-weight display token for mobile, with a mobile body that keeps the same tracking pattern. The hero scene is a cropped, full-bleed background; narrow-screen layout of the three-card event row was not measured. Only the 1280px capture was reviewed visually, so the exact breakpoints are not stated; MUI's standard breakpoint system is used by the theme package but the values were not read here.

## Iteration Guide

1. Start from `{colors.canvas}` and add purple bands `{colors.surface-purple}` and `{colors.surface-purple-deep}`.
2. Use `{colors.primary}` for one main button per band at 64px tall, 16px radius, uppercase 19.89px/600.
3. Set headings in Inter 600 at 60px and 48px with -0.5px tracking.
4. Build cards at 16px radius with the 3-layer low shadow.
5. Keep voice casual: short imperatives with a social tone.
6. When in doubt, check values against the decentraland-ui2 theme.
