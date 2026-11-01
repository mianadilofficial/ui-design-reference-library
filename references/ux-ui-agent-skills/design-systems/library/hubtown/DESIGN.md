---
version: alpha
name: Hubtown
category: "Architecture & Interiors"
description: "Hubtown Limited (hubtown.co.in), an Indian real estate developer, measured live: near-black navy #020a18 canvas with pale periwinkle #d5e0ff ink, Commit Mono uppercase micro-labels at 9px with 1.44px tracking, Grotesk Bold buttons, 5 percent tinted #d5e0ff0d button fills and a glowing blue 3D cube hero."
colors:
  canvas: "#020a18"
  ink: "#d5e0ff"
  primary: "#d5e0ff"
  on-primary: "#d5e0ff"
  surface-2: "#000000"
  surface-3: "#020a19"
  button-primary-bg: "#d5e0ff0d"
typography:
  display:
    fontFamily: "\"Commit Mono\", monospace"
    fontSize: 9px
    fontWeight: 400
    lineHeight: 13.5px
    letterSpacing: 1.44px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Grotesk Bold\", sans-serif"
    fontSize: 10.3623px
    fontWeight: 400
    lineHeight: 12.4348px
    letterSpacing: 1.65797px
    textTransform: uppercase
  button:
    fontFamily: "\"Grotesk Bold\", sans-serif"
    fontSize: 9px
    fontWeight: 400
    lineHeight: 10.8px
    letterSpacing: 1.44px
    textTransform: uppercase
  body-dominant:
    fontFamily: Grotesk Light
    fontSize: 12px
    fontWeight: 400
rounded:
  xs: 10px
  none: 0px
spacing:
  s1: 3px
  s2: 4.5px
  s3: 6px
  s4: 7.5px
  s5: 9px
  s6: 10.5px
  s7: 12px
  s8: 15px
  s9: 16.5px
  s10: 21px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 41px
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 41px
---

## Overview
The measured page is https://hubtown.co.in/ (title "Hubtown Limited | Leading Real Estate Developer in India", lang `en`), the home page of Hubtown, an Indian real estate developer. It is an immersive single-scene site rather than a conventional property portal. The capture shows an almost black navy field framed by a thin outlined rectangle with chamfered corners, a monospaced "HUBTOWN" logotype at the top left, a row of five tiny uppercase links (ABOUT, PROJECTS, CAREERS, CONTACT, NEWS), a dark "LOGIN" button and a pale "MENU" button at the right. Below, a glowing blue 3D cube hovers above rippling water between two snow-lit blue hills; a vertical stepper at the left lists FUTURE, INNOVATION, COLLABORATION, EXCELLENCE, PURPOSE and LEGACY with the first item highlighted.

At the bottom of the first screen the headline "WE BUILD THE FUTURE OF REAL ESTATE" is set in bold uppercase with a short grey paragraph ("For over 40 years, Hubtown has created some of India's most innovative real estate developments, spanning across Residential, Commercial and Industrial projects...") and an "EXPLORE OUR PROJECTS" button with chamfered corners. A status bar along the bottom carries "SOUND OFF", "SCROLL TO EXPLORE" and "CHAT WITH US" with a messaging icon; a "CLICK TO ENABLE AUDIO" note sits at the top left. The tone is futuristic, technical and sparse; there is almost no ordinary copy on the first screen.

## Colors
- **Canvas** `#020a18` (near black blue; the extraction also records `#020a19` as a surface with area weight 0 in its list, and `#000000` as the darkest surface).
- **Ink / primary** `#d5e0ff`: a pale periwinkle that is the text colour for 434 measured characters and the fill of the MENU button.
- **Button fill** `#d5e0ff0d`: the same periwinkle at 5% opacity, the fill of the LOGIN button (11 area weight). In the tokens it is `button-primary-bg`.
- **On-dark text** inside the light MENU button is the dark navy `#020a19` (measured hover text colour rgb(2, 10, 25)).
- **Black** `#000000`: 56 characters of text, used on light buttons.
- The scene itself uses a saturated electric blue gradient (cube and hills) that is artwork, not measured as UI colour. The Tailwind ring colour `#3b82f680` in the root variables is a framework default and is not a brand colour.

## Typography
Four fonts are loaded: "Commit Mono" (monospace, 106 characters), "Grotesk Light" (223), "Grotesk Regular" (52) and "Grotesk Bold" (57), plus a `ui-sans-serif` fallback (56). Every measured weight is 400, since each weight is a separate face.

- **display** (navigation labels): Commit Mono 9px, line-height 13.5px, letter-spacing 1.44px, uppercase.
- **display-mobile**: Grotesk Bold 10.3623px, line-height 12.4348px, letter-spacing 1.65797px, uppercase.
- **button**: Grotesk Bold 9px, line-height 10.8px, letter-spacing 1.44px, uppercase.
- **body-dominant**: Grotesk Light 12px (the dominant size, 279 characters), used for the paragraph.
The larger headline is 30px (28 characters), also in Grotesk Bold. Other sizes: 9px (149 characters) and 8.25px (38). Letter-spacing is 0.16em on the 9px labels. These are self-hosted display fonts; no substitute was measured.

## Layout
Desktop pass: 1280px wide, 2400px tall for the document, with an inner scroller of 22460px, so the real content is a long scroll-driven experience inside a fixed frame. The frame is a thin outline inset from the viewport, with the nav row inside it. Content is centred: the headline and paragraph sit in a narrow centred column near the bottom of the first screen, the cube is centred, and the section stepper is pinned to the left edge. Spacing tokens: 3, 4.5, 6, 7.5, 9, 10.5, 12, 15, 16.5 and 21px (multiples of 1.5px).

## Elevation & Depth
No box shadows were measured. Depth is created by the 3D scene: layered hills, a reflective water plane, floating particles and glow. UI elements are flat, outlined or very faintly tinted (5% periwinkle) on the dark background.

## Shapes
One element measured a 10px radius; every other element computes 0px, so the tokens give the buttons `rounded.none`. Visually, the controls and frame are chamfered (an angled cut at one corner) rather than rounded: the MENU button, LOGIN button and the "EXPLORE OUR PROJECTS" button each have a diagonal cut. The cube and mountains are geometric forms.

## Components
- **button-primary** (LOGIN): `#d5e0ff0d` fill, `#d5e0ff` Grotesk Bold 9px uppercase text with 1.44px tracking, 0px radius, 41px tall (50px at mobile width).
- **MENU button**: pale `#d5e0ff` fill with dark text and a grid icon, chamfered corner.
- **nav links**: Commit Mono 9px uppercase, periwinkle. The measured hover on "MENU" scrambles the label ("MENR") in a text-glitch effect.
- **explore button**: dark translucent fill, periwinkle text, chamfered.
- **status bar**: three cells (sound, scroll prompt, chat) separated by 1px vertical rules.
- **section stepper**: small square marker plus uppercase labels, inactive ones dimmed.

## Design System Architecture
No public design system or brand guideline was found. The extraction recorded 10 root variables, all Tailwind plumbing (`--tw-ring-offset-shadow`, `--tw-shadow`, `--tw-ring-color: #3b82f680` and similar), so the site is a Tailwind build with no custom token layer in the root. The visible system is a closed palette of two colours (near-black navy and periwinkle at different opacities), two type roles (mono for navigation and labels, Grotesk for buttons and headlines) and a uniform uppercase, wide-tracked treatment.

## Do's and Don'ts
- Do keep the canvas near-black navy (`#020a18`) and use `#d5e0ff` for text and fills.
- Do set labels in uppercase with 1.44px tracking in Commit Mono or Grotesk Bold.
- Do use the 5% periwinkle fill (`#d5e0ff0d`) for secondary buttons.
- Do cut button corners at an angle instead of rounding them.
- Don't add drop shadows; depth belongs to the 3D scene.
- Don't use the Tailwind default blue ring as a brand colour.
- Don't enlarge the micro-labels; the scale is intentionally tiny.

## Responsive Behavior
At 390px the mobile pass measured: the LOGIN label 10.3623px (9px on desktop) in Grotesk Bold with 1.65797px tracking, the LOGIN button 106px wide by 50px tall, and frequent sizes 13.1884px (222 characters), 15.0725px, 10.3623px and 30.1449px. Other mobile layout behaviour is not measured.

## Iteration Guide
1. Start with a `#020a18` field inside a thin chamfered outline.
2. Add a 3D hero scene in electric blue and a centred uppercase headline in Grotesk Bold 30px.
3. Set the nav in Commit Mono 9px uppercase with 1.44px letter spacing in `#d5e0ff`.
4. Build buttons with a 5% tinted `#d5e0ff0d` fill, chamfered corners and 41px height.
5. Add a bottom status bar with sound, scroll and chat controls.

## Notes for Rebuilding
Everything on the first screen is built from tiny type and flat shapes laid over one dominant image, so the proportions matter. The nav labels are 9px with 1.44px tracking and 13.5px line height, which makes them read as technical annotations rather than links. The headline, at 30px, is only about three times that size. The 5% periwinkle tint on the LOGIN button keeps it visible without creating a second colour, while the MENU button inverts to the full-strength periwinkle with dark text, which makes it the only solid light shape in the interface. The hover recorded for MENU shows the letters briefly rearranging ("MENU" to "MENR") while colours, border, shadow and opacity stay unchanged, so the interaction is typographic rather than chromatic.

The extractor found only two headings-like roles (ABOUT and LOGIN) and no body paragraph in its role detection, because the visible copy is set in a light grotesk at 12px inside an animated scene. The page also holds an inner scroller of 22460px, meaning most of the experience (the stepper entries beyond FUTURE) lives below the captured screen and was not measured.
