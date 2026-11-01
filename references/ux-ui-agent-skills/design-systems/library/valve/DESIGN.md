---
version: alpha
name: Valve Corporation
category: "Gaming"
description: "Valve Corporation (valvesoftware.com) presents its careers-style home in pure #000000 black with #f74843 red apercu 900 headings (70px department links, 38px intro) over ultra-light 200-weight white 22px body copy, a red footer panel and zero rounded corners."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#f74843"
  ink-secondary: "#585758"
typography:
  display:
    fontFamily: apercu, -apple-system, system, sans-serif
    fontSize: 70px
    fontWeight: 900
    lineHeight: 84px
  display-mobile:
    fontFamily: apercu, -apple-system, system, sans-serif
    fontSize: 46.8px
    fontWeight: 900
    lineHeight: 46.8px
  subheading:
    fontFamily: apercu, -apple-system, system, sans-serif
    fontSize: 38px
    fontWeight: 900
    lineHeight: 49.4px
  body:
    fontFamily: apercu, -apple-system, system, sans-serif
    fontSize: 22px
    fontWeight: 200
    lineHeight: 35.2px
  input:
    fontFamily: apercu, -apple-system, system, sans-serif
    fontSize: 20px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 10px
  s2: 64px
  s3: 80px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.primary}"
    typography: "{typography.input}"
    padding: 10px 0px
    height: 42px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
---

## Overview

The page measured at `https://www.valvesoftware.com/en/` (title "Valve Corporation") is Valve's English home and, at capture time, a jobs-led landing page. A blurred, darkened photograph sits behind the top of the page with the Valve logo, a red block with the letters of the name, at top left. The first message is a red 38px heading, "We make games, Steam, and hardware. Join us.", followed by a white, light-weight paragraph: "We aren't a typical company—which is why you're here, right? As a flat company without hierarchy and job titles, we don't usually hire for specific roles. (Though we sometimes do!) Opportunities at Valve run broad and deep. We're always hiring highly experienced collaborators who are the best at what they do, across the following areas:".

A "Search Jobs" text field with a bottom rule and a magnifier icon sits to the right. Below, the list of areas is set as giant red links in a single column: Art, Audio, Business Development, Customer Support, Finance, Game Design, Hardware, Legal, Product Design, Software Engineering, Technical Infrastructure and "Did we miss something?". The page ends in a full-width red footer with Valve Corporation, Contact (People, Press Inquiries), Stuff (About Us, Jobs, Steam Partners, Publications), More Stuff (Site Terms of Use, Privacy Policy, Security, Legal) and white Steam and Steamworks marks.

The design is as reduced as it gets: black, red, white, one typeface family in different weights. Typography is the only layout device; nothing is boxed, outlined or rounded.

## Colors

The canvas is `#000000` (body background). The single brand color is red `#f74843`, measured as the only area fill (the footer, 243 area weight), as the color of the headline, the department links, the input text and 199 characters in total, and as the footer background. Body text is white `#ffffff` (377 characters; the paragraph and footer text). A dark grey `#585758` was measured on 2,112 characters of text at a size of 5.85px in the mobile pass, so it is text that is not visible on the pages shown; it is kept only as `ink-secondary` and its rendered use was not identified.

Hover recorded on the main link flips its text and border from `rgb(247, 72, 67)` (`#f74843`) to `rgb(255, 255, 255)` (`#ffffff`), so the interaction color pair is red to white. There are no other colors, no gradients and no shadows (`boxShadows` is empty), and the root custom-property set is empty.

The contrast pairing is red on black for headings and white on black for reading text, and white on red in the footer.

## Typography

One family, **apercu**, loaded in four variants: normal, bold, 900 and 200. It carries all 3,518 measured characters and the stack is `apercu, -apple-system, system, sans-serif`.

- Display (department links): apercu 900, 70px / 84px, red `#f74843`, one link per line; 46.8px on the mobile pass.
- Subheading: apercu 900, 38px / 49.4px (the intro heading, which is also a link).
- Body: apercu 200, 22px / 35.2px, white (the intro paragraph; 2,450 characters at 22px).
- Input: apercu 400, 20px (721 characters at 20px) for the Search Jobs field.
- Footer: apercu 700, 16px / 25.6px, white on red.
- Small: 12px (125 characters) and 13.3333px (6).

Weights are extreme and paired: 900 (1,086 characters) for red headings against 200 (2,284) for white reading text, with 300 (103), 700 (39) and 400 (6). Letter-spacing was not recorded (the table is empty), so tracking is the font default.

## Layout

A single left-aligned column holds everything; the heading and paragraph box is 528px wide and the department links are 1,120px wide boxes, each 84px tall. The header band is 150px tall across the 1280px width. Padding is minimal: 10px (29 occurrences, mostly on the input), 80px (2) and 64px (1); the body has a large bottom padding (`0px 0px 170px...`). No gaps, grids or card columns were recorded.

In the capture the Search Jobs input sits at the right at the same height as the paragraph's last lines, and the department list begins immediately under the hero image boundary with no separators between items. The footer is a four-column text grid on red.

Reading order follows the type scale: the red 38px heading first, the thin white paragraph second, the job search field third and the 70px area names last, so the largest type on the page is the navigation itself rather than a marketing headline. In the capture the area list begins directly below the introductory block.

## Elevation & Depth

Nothing is elevated. There are no box-shadows, borders or outlines (the border-color table is empty). The only layering is the blurred photograph behind the introductory text, where the text and logo sit directly on the image without a panel. Depth is replaced by scale contrast between 70px black-weight words and 22px thin words.

## Shapes

No border radius was measured (`borderRadii` is empty), so every element computes to 0px, including the logo block, input and footer. The only geometric shapes are the rectangular red logo and footer, and the magnifier icon.

## Components

- **Department link**: apercu 900, 70px / 84px, red, hover to white; 1,120px wide boxes in a vertical list.
- **Intro heading link**: apercu 900, 38px / 49.4px, red, 87px tall; hover swaps color and border color to white.
- **Search input**: apercu 400, 20px, red text, `10px 0px` padding, 42px high, 379px wide, no border radius; a single underline in the capture and a magnifier at the right.
- **Navigation**: header 150px tall; links apercu 200, 22px, red `#f74843` (112px wide, 22px tall).
- **Footer**: `#f74843` background, white apercu 700 16px / 25.6px text.
- **Buttons and cards**: none detected.

## Design System Architecture

No public or official Valve design system was found for this page, and none was searched for. The root custom-property set is empty, so no tokens are declared in CSS; the system is expressed directly in rendered values: black canvas, one red, one family (`apercu`) in weights 200, 400, 700 and 900, a 70px / 38px / 22px size ladder and 0px corners. Source: `https://www.valvesoftware.com/en/`, measured into `web/data/extracted/valve.json`.

## Do's and Don'ts

Do:
- Keep the page black with red headings and white reading text.
- Use apercu 900 for headings and apercu 200 for paragraphs; the weight contrast is the hierarchy.
- Set lists of destinations as large stacked red links that turn white on hover.
- Finish with a full-width red footer.

Don't:
- Don't add cards, borders, shadows or rounded corners; none were measured.
- Don't introduce a second brand color.
- Don't use mid weights for headings; the measured weights are 900 and 200.
- Don't set white text on red for large headings; headings are red on black.

## Responsive Behavior

Measured at the 390px mobile pass: the h1-role link measures 46.8px (from 70px), body text 19.5px (from 22px), the nav text 19.5px, and the mobile font table lists 23.4px (890 characters), 5.85px (2,112 characters), 16px and 13.3333px. Colors stay the same (red links, white body, black canvas). Layout, menu and column behavior on mobile were not measured.

## Iteration Guide

1. Black canvas, white `#ffffff` text.
2. Intro heading in apercu 900, 38px, red; paragraph in apercu 200, 22px, white.
3. A vertical list of 70px red links with hover to white.
4. Underlined text input with red text.
5. Red `#f74843` footer with white 16px links.
6. Re-run `node web/scripts/verify-designs.mjs --slug=valve` after any rename.
