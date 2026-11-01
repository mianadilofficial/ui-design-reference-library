---
version: alpha
name: Asiatique The Riverfront
category: "Thai Brands"
description: "Asiatique The Riverfront (asiatiquethailand.com) is Bangkok's riverside night-market mall: a white canvas with Prompt at 16px for text and Taviraj 600 serif headlines at 32px to 48px, black ink, crimson #c60c46 as the single accent for the logo, active and hover navigation, and four tall cinematic photo columns at the top of the page."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#c60c46"
  ink-grey: "#787878"
  ink-mid: "#525252"
  ink-deep: "#151515"

typography:
  display:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  display-mobile:
    fontFamily: Taviraj
    fontSize: 20px
    fontWeight: 600
    lineHeight: 30px
  headline-xl:
    fontFamily: Taviraj
    fontSize: 48px
    fontWeight: 600
  headline-lg:
    fontFamily: Taviraj
    fontSize: 32px
    fontWeight: 600

rounded:
  pill: 9999px

spacing:
  s1: 4px
  s2: 5px
  s3: 5.6px
  s4: 8px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 36px
  s10: 40px

components:
  hero-link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav-link:
    textColor: "{colors.ink}"
    hoverTextColor: "{colors.primary}"
---

## Overview

Asiatique describes itself as "Asiatique The Riverfront Destination" and "the Largest Riverside Lifestyle Tourist Landmark in Thailand" (homepage opened at https://www.asiatiquethailand.com/). The address shown is 2194 Charoenkrung Road, Bangkok, and the opening hours are "Every day from 11:00 - 00:00 hrs." The English page is the one measured; Thai appears in the cookie notice and the page is bilingual in practice.

The homepage is a tourist-destination brochure translated to the web. The top of the page has a centred logotype in crimson and teal, a single row of five navigation items (HOME, EXPLORE ASIATIQUE, EVENTS & PROMOTIONS, DINING RESTAURANTS, CONTACT US) and a vertical ONLINE ENQUIRY tab at the right edge. Directly beneath is a four-column photographic strip, each column a different night scene (fireworks over a Ferris wheel, a glasshouse restaurant interior, the wheel by day, a dinosaur), darkened by an overlay so the page opens like a film poster. Then the page snaps to white: a large centred serif headline "ALL DAY EVERYDAY HAPPINESS", a one-line grey subtitle, and a fan of five photographs (a wine-shop front, a sailing-ship restaurant, a glass dining room, a plated dish, a convenience-store corner) cropped to a curved shape that arcs like a stage.

The content blocks that follow are named FESTIVAL VILLAGE (with a copy block about Asiatique Sky, "Thailand's largest Ferris wheel (with a height of 60 meters)", a merry-go-round, the Haunted House of Mystery Mansion and the Calypso Show), LARGEST FOOD AND BEVERAGE SELECTION, LIFESTYLE MARKET, JURASSIC WORLD: The Experience, HIGHLIGHT and EVENTS. The calls to action are plain text: VIEW ALL and SEE MORE. The interface stays minimal so photography of food, rides and the river does the persuading.

## Colors

The canvas is #ffffff and ink is #000000. Body copy under headlines is a mid grey, #787878 (the paragraph under FESTIVAL VILLAGE and the subtitles), with #525252 and #151515 as the two other measured text greys. The brand accent is crimson, #c60c46: the logotype's lettering in the capture, the active HOME item, the measured hover colour of every navigation link (black text turns #c60c46 on hover), and a background fill that covers a large area in the extraction (I did not isolate which element carries that fill).

Photographs are the only other colour. The hero columns are intentionally dimmed, so the white page seems to brighten by comparison. Overlay colours on the photographs are part of the imagery, not tokens.

## Typography

Two families, each with a clear job. Prompt (loaded at 300, 400 and 500) is the Thai-and-Latin sans for interface text and paragraphs: 16px at weight 400 on a 24px line height is the measured body style, and the extraction shows 14px and 10px Prompt for small text. Taviraj, a serif, is loaded only at weight 600 and used for headlines: the sizes measured for these 182 characters are 32px and 48px on desktop (the two sizes, 97 and 85 characters, add up exactly to the serif total; I did not verify which headline uses which size), and 20px on a 390px mobile viewport, where the "ALL DAY EVERYDAY HAPPINESS" line sets in 20px Taviraj 600 with a 30px line height.

The headline is uppercase and black; the sentence under it is small, grey and centred, which gives the section an editorial, hospitality-brand tone. I did not open a foundry page for either family and make no licence statement; the site loads both itself.

## Layout

The page is a white vertical stack of full-width bands. The hero is a four-column strip of equal-width tall photographs flush to the edges. Below it, headline blocks are centred, while FESTIVAL VILLAGE uses a two-column row: a left serif title in two lines, a thin vertical rule, and a right-hand paragraph in grey. Photo groups use arched crops rather than rectangles. The long lower portion of the capture is blank white; I do not know why, so do not copy that emptiness as a design choice. Measured spacing steps are 4px, 5px, 5.6px, 8px, 12px, 14px, 16px, 20px, 36px and 40px.

A cookie notice in Thai and a campaign popup (a "Tourist Privilege Card" artwork) opened over the page at times during capture. Popup and cookie controls are not brand UI and are not documented as components.

## Elevation & Depth

The page is mostly flat and relies on photographic depth and the darkened hero for atmosphere. Measured shadows are the standard Tailwind utility shadows (rgba(0, 0, 0, 0.1) 0px 4px 6px -1px with 0px 2px 4px -2px on four elements, and a larger 0px 10px 15px -3px form), which is how Tailwind's `shadow-md` and `shadow-lg` are written, so use them sparingly on floating elements such as the cookie notice. No decorative shadows are required.

## Shapes

Interface geometry is nearly all unrounded: the measured radius set contains only one pill (9999px) element, and I did not attribute it to a component. Imagery supplies the shape: the five-photo band is clipped to a curved arch (concave top and bottom edges), and the hero columns are straight-edged rectangles. Buttons are not boxed at all; calls to action are plain text links.

## Components

**Navigation.** Five uppercase Prompt labels centred under the logotype, black by default and crimson (#c60c46) on hover and for the current page (HOME). No background, border or radius.

**Hero strip.** Four full-height photographic columns, darkened, with white text over them (the extractor measured a white 16px Prompt link style on this layer).

**Serif section heading.** Taviraj 600, uppercase, black, either centred over a grey subtitle or left-aligned beside a vertical rule and paragraph.

**Arched photo band.** Five equal images in one curved frame.

**Text calls to action.** VIEW ALL and SEE MORE as plain labels; no filled button was detected, so none is defined.

**Online enquiry tab.** An "ONLINE ENQUIRY" label fixed at the right edge of the page; I did not open it, so its behaviour is not documented.

## Design System Architecture

No public design system, brand guideline or token package for Asiatique was found. The /brand, /press, /about-us and /design paths all returned HTTP 404 on the official site, and the homepage names no design documentation. The de-facto system is a Tailwind CSS build: the root carries Tailwind variables (`--tw-ring-offset-shadow`, `--tw-shadow`, `--tw-drop-shadow`), a Swiper carousel variable (`--swiper-navigation-size: 44px`) and Font Awesome 6 Free and Brands variables, with Prompt and Taviraj as the two text families. Primary source: https://www.asiatiquethailand.com/ . In practice the rules are "white page, black type, one crimson accent, serif headlines, photographs in charge".

## Do's and Don'ts

Do keep the page white and the type black, and use #c60c46 only for the logotype, active state and hover. Do set headlines in Taviraj 600 uppercase and everything else in Prompt. Do open with dark cinematic photography and follow with a bright white band. Do crop photo groups to arcs.

Don't box call-to-action links into buttons without measuring a button on the live site. Don't add rounded cards or heavy shadows. Don't use the grey #787878 for primary text; it is for subtitles and paragraphs. Don't copy the empty white area at the foot of the capture.

## Responsive Behavior

The mobile pass at 390px measured the serif headline at 20px with a 30px line height, against 32px and 48px headline sizes on desktop. Swiper's navigation variable (44px) shows that carousels are in use on the page. I did not inspect mobile layouts or breakpoints, so I make no claims about how the four-column hero, the arched photo band or the two-column FESTIVAL VILLAGE block collapse.

## Iteration Guide

For a new section, centre a Taviraj 600 uppercase title, add a Prompt 16px grey subtitle (#787878), and follow with photography cropped to the arch or to full-height columns. Keep navigation labels black with crimson on hover. Check changes against https://www.asiatiquethailand.com/ with the cookie notice and campaign popup closed, then re-run the verification script for this slug.
