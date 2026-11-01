---
version: alpha
name: "MoMoney, the Museum of Money"
category: "Culture & Events"
description: "Dallas interactive money museum site (museumofmoney.com) in neo-brutalist style: cream #fff5dd canvas, #111111 ink, magenta #b82297 and yellow #f4f242 buttons with hard 4px offset shadows and 0px radius, Archivo Black uppercase headings over Manrope body."
colors:
  canvas: "#fff5dd"
  ink: "#111111"
  primary: "#b82297"
  on-primary: "#ffffff"
  surface-3: "#0000f4"
  ink-3: "#181818b3"
  ink-5: "#1c1c1c99"
  ink-6: "#ffffffb2"
  button-secondary-bg: "#f4f242"
typography:
  display:
    fontFamily: "\"Archivo Black\", \"Archivo Black Fallback\", system-ui, sans-serif"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 57px
    letterSpacing: "-1.5px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Archivo Black\", \"Archivo Black Fallback\", system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 22.8px
    letterSpacing: "-0.6px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Archivo Black\", \"Archivo Black Fallback\", system-ui, sans-serif"
    fontSize: 96px
    fontWeight: 400
    lineHeight: 96px
    textTransform: uppercase
  body:
    fontFamily: Manrope, "Manrope Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.25px
  button:
    fontFamily: "\"Archivo Black\", \"Archivo Black Fallback\", system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
    letterSpacing: 1.4px
    textTransform: uppercase
  nav:
    fontFamily: Manrope, "Manrope Fallback", system-ui, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Archivo Black\", \"Archivo Black Fallback\", system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 25px
    letterSpacing: "-0.5px"
  input:
    fontFamily: Manrope, "Manrope Fallback", system-ui, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  none: 0px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12px 20px
    height: 50px
    borderColor: "{colors.ink}"
    boxShadow: rgb(17, 17, 17) 4px 4px 0px 0px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 10px 16px
    height: 48px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 20px 24px
  nav-link:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    borderColor: "{colors.ink}"
    boxShadow: rgb(17, 17, 17) 4px 4px 0px 0px
  text-input:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 10px 16px
    height: 51px
    borderColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-5}"
    rounded: "{rounded.none}"
---

# MoMoney, the Museum of Money

## Overview
The measured site is museumofmoney.com (final URL museumofmoney.com, page title "Interactive Money Museum in Dallas | MoMoney", language en). It sells tickets and events for MoMoney, which the page describes as "Dallas's only interactive money museum", with "Two floors of hands-on exhibits, photo ops, and interactives". The footer gives the address 501 Elm Street, Suite 100, Dealey Plaza, Downtown Dallas. Navigation is EXHIBITS, VISIT, EVENTS, ABOUT, CONTACT and a magenta TICKETS button; the logo is a yellow tilted sticker with the "MoMoney" wordmark and "MUSEUM OF MONEY" caption.

The design language is neo-brutalist and playful. Headlines are giant, uppercase, ultra-heavy lettering; key phrases sit on tilted flat-yellow or flat-blue labels with a thick black outline and a hard offset shadow, as if stuck on with tape. Section markers are tiny monospaced captions with a down-pointing triangle ("01 · WHAT IT IS", "02 · PLAN YOUR VISIT"). Photography is saturated and candid: a full-bleed hero of scattered US banknotes, then three tilted photos of visitors at exhibits, each framed with a thick colored border and a hard black shadow. A black "AS SEEN IN" press strip (The Dallas Morning News, CultureMap Dallas, Dallas Innovates, KRLD News Radio) runs between the hero and the cream content. Copy is conversational and joking: "MONEY, DECODED.", "Bring friends. Bring kids. Bring everyone.", "Y'ALL STREET.", "BIRTHDAYS. OFFSITES. FIELD TRIPS."

## Colors
By painted area: `{colors.canvas}` cream (#fff5dd, 4789 weighted area), near-black #111111 (2022, the press strip, footer and outlines; also `{colors.ink}`), `{colors.surface-3}` electric blue (#0000f4, 934, the "Y'ALL STREET." label), white (931), yellow `{colors.button-secondary-bg}` (#f4f242, 543, the hero label, "DECODED." highlight and secondary buttons), `{colors.primary}` magenta (#b82297, 392, the TICKETS button), and smaller areas of green #64a852, orange #d35b2b and purple #451ab0, which are the photo frame colors. Rooted variables include a star gold (#ffb800) and a live-green (#5dff7a), small accent values that appear on few characters.

Text is #111111 (1538 weighted characters), cream (#fff5dd, 404) on dark, `{colors.ink-3}` (#181818b3) for secondary copy, white, `{colors.ink-5}` (#1c1c1c99) for footer text and `{colors.ink-6}` (#ffffffb2) for translucent white text. `{colors.on-primary}` is white on magenta. The main borders are all #111111 (28 weighted occurrences).

## Typography
Three faces are loaded: Archivo Black (headings, buttons and links, 472 weighted characters), Manrope at 400, 500 and 600 (body and navigation, 1927) and JetBrains Mono at 400 and 500 (the monospace captions and footer, 338). Permanent Marker is declared in the CSS faces but was not measured on rendered text. Each face has a matching fallback face declared in the CSS.

`{typography.display}`: Archivo Black 60px, line-height 57px, letter-spacing -1.5px, uppercase (the h1 on the yellow hero label). `{typography.display-mobile}`: 24px, 22.8px line-height, -0.6px. `{typography.heading}`: 96px, line-height 96px, uppercase ("MONEY, DECODED."). `{typography.body}`: Manrope 14px, line-height 19.25px; larger intro paragraphs read at 18px. `{typography.button}`: Archivo Black 14px, 20px line-height, +1.4px tracking, uppercase. `{typography.nav}`: Manrope 16px, 24px line-height (the header itself measures 15px weight 600 with 0.75px tracking, uppercase). `{typography.link}`: Archivo Black 20px, 25px line-height, -0.5px tracking. `{typography.input}`: Manrope 14px weight 500. The footer is JetBrains Mono at 10px with 2.5px tracking, uppercase. Tracking is deliberately tight on large display and wide on small uppercase labels.

## Layout
The desktop page is 1280px wide and 5492px tall. Content alternates between full-width bands (photo hero, black press strip, cream sections divided by a thick black line, dark footer 801px tall) and left-aligned text columns with 96px-class section padding. The header is 109px tall with 20px 24px padding. Photos are placed in a three-up row with slight rotations. Gaps measured: 12px (17 uses), 8px, 6px, 20px, 32px, 40px, 36px, 24px and 64px; paddings: 16px, 8px, 20px, 48px, 12px, 10px, 96px. The tokens `{spacing.s1}` to `{spacing.s10}` list 2px to 18px steps.

## Elevation & Depth
Depth is made only with hard, zero-blur offset shadows: `rgb(17, 17, 17) 6px 6px 0px 0px` (14 elements, the hero label and photo frames), `rgb(17, 17, 17) 4px 4px 0px 0px` (7, buttons and the nav link), one `rgb(184, 34, 151) 6px 6px 0px 0px` in magenta and one at 5px. No blur shadows were measured. Borders are 2px or 3px solid #111111.

## Shapes
No border radius was measured on any element: `borderRadii` is empty, so every rendered element computes to 0px (`{rounded.none}`). The only deviation from right angles is the slight rotation of labels and photo frames, which is not a radius. Borders are thick (2px on the primary button, 3px on the h1 label, secondary button and input).

## Components
**Primary button** (`{components.button-primary}`): magenta #b82297 fill, white Archivo Black 14px uppercase text with 1.4px tracking, 2px solid #111111 border, 4px 4px hard shadow, padding 12px 20px, 50px tall, 0px radius ("TICKETS"). **Secondary button** (`{components.button-secondary}`): yellow #f4f242 fill, #111111 text, 3px solid #111111 border, padding 10px 16px, 48px tall ("SIGN UP", "SEE ALL 28 EXHIBITS" with an arrow). **Nav link** (`{components.nav-link}`): yellow fill, Manrope 16px, 2px border, 4px hard shadow, padding 8px 16px. **Navigation bar** (`{components.nav}`): transparent over the hero with white uppercase text, padding 20px 24px. **Text input** (`{components.text-input}`): white fill, 3px #111111 border, Manrope 14px weight 500, 10px 16px padding, 51px tall. **Link** (`{components.link}`): Archivo Black 20px #111111. **Footer** (`{components.footer}`): #111111 background, 10px monospaced uppercase text in #1c1c1c99, with "FIND US" and hours blocks.

## Design System Architecture
No public design system or brand-guideline page was opened. The shipped CSS shows a Tailwind-style utility build (variables such as --text-2xl, --text-7xl, --container-md, --tw-ring-shadow) alongside shadcn-style tokens (--card #fff, --border #e5e5e5, --primary-foreground #fafafa, --sidebar-primary-foreground) and project variables for brand values: --font-archivo-black, --font-manrope, --font-jetbrains-mono, --star-gold and --live-green. The visible brand system is in the compiled component styles, not in those default variables: thick black outlines, hard shadows, flat saturated label colors and uppercase display type.

## Imagery and Voice
Imagery is the main source of warmth against the hard graphic frame. The hero photograph is a close, slightly dark view of loose hundred-dollar bills; the content photographs are bright, candid and colorful, with visitors laughing, taking selfies in front of a MoMoney wall and reaching toward a comic speech-bubble exhibit. Each photo sits inside a thick frame in green, orange or purple (the measured painted areas #64a852, #d35b2b and #451ab0) with the black offset shadow beneath it and a different small rotation, so the row feels hand-placed rather than gridded. Microcopy is short, uppercase for labels and sentence case for body, with plain section captions such as "WHAT IT IS" and "PLAN YOUR VISIT" that tell the visitor what each block is for.

## Do's and Don'ts
- Do outline every label, button and photo with 2px to 3px solid #111111 and a hard offset shadow.
- Do set display type in Archivo Black, uppercase, with negative tracking, and highlight a phrase on a flat yellow or blue label.
- Do use magenta #b82297 only for the main ticket action and yellow #f4f242 for secondary actions.
- Do use JetBrains Mono uppercase for small section captions.
- Don't round corners or blur shadows; none were measured.
- Don't use shadcn default grays (#e5e5e5 border) as the brand border.
- Don't tilt body text; only labels and photo frames rotate.

## Responsive Behavior
The mobile pass measured the h1 at 24px with 22.8px line-height and -0.6px tracking on a 322px wide label with 8px 12px padding and the same 3px border and 6px hard shadow. Other mobile layout changes, menu behavior and breakpoints were not measured.

## Iteration Guide
1. Start from cream #fff5dd with #111111 text and 0px corners.
2. Add a flat colored label with a 3px black border and a 6px hard shadow for each headline phrase.
3. Make the ticket button magenta and everything else yellow.
4. Frame photos with thick colored borders and black shadows, lightly rotated.
5. Re-run `node web/scripts/verify-designs.mjs --slug=momoney` after edits.
