---
version: alpha
name: Sculpting Harmony
category: "Architecture & Interiors"
description: "Sculpting Harmony, a Getty interactive story on Frank Gehry and the Walt Disney Concert Hall: orange #ffa441 opening field, black #000000 ink, Reckless serif and Roboto Mono uppercase labels, bracketed buttons with 32px radius, chapter colors #4596ff, #16a147, #ff6359."
colors:
  canvas: "#ffa441"
  page-body: "#ffffff"
  page-largest: "#000000"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  chapter-blue: "#4596ff"
  chapter-green: "#16a147"
  chapter-coral: "#ff6359"
typography:
  display:
    fontFamily: Reckless, Roboto, "Helvetica Neue", sans-serif
    fontSize: 20.8px
    fontWeight: 400
    lineHeight: 22.88px
    letterSpacing: "-0.416px"
  display-mobile:
    fontFamily: Reckless, Roboto, "Helvetica Neue", sans-serif
    fontSize: 18.72px
    fontWeight: 400
    lineHeight: 20.592px
    letterSpacing: "-0.4576px"
  heading:
    fontFamily: Reckless, Roboto, "Helvetica Neue", sans-serif
    fontSize: 25.6px
    fontWeight: 400
    lineHeight: 28.16px
    letterSpacing: "-0.768px"
  subheading:
    fontFamily: "\"Roboto Mono\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    textTransform: uppercase
  body:
    fontFamily: "\"Roboto Mono\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    textTransform: uppercase
  button:
    fontFamily: "\"Roboto Mono\", Roboto, \"Helvetica Neue\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    textTransform: uppercase
rounded:
  xs: 16px
  sm: 32px
  md: 80px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 11.2px
  s5: 12px
  s6: 16px
  s7: 17.6px
  s8: 20px
  s9: 20.8px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px
    height: 35px
  link:
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
  nav:
    textColor: "{colors.page-largest}"
    padding: 0px 16px 32px
  footer:
    textColor: "{colors.page-largest}"
    padding: 0px 16px
---

# Sculpting Harmony

## Overview
Sculpting Harmony (gehry.getty.edu) is a scrolling interactive story from the J. Paul Getty Trust about how Frank Gehry and his team designed the Walt Disney Concert Hall; the page title is "Frank Gehry and the Walt Disney Concert Hall | Sculpting Harmony". The measured page is 45372px tall at 1280px wide, one of the longest in this set. The opening screen is a flat saturated orange (#ffa441) field with Gehry's black pen sketches of the hall drawn across the top, the small "Getty" wordmark at upper left, "SOUND • ON" and "[MENU]" at upper right, a serif standfirst ("How Frank Gehry and his team designed a monument to music — the story of the Walt Disney Concert Hall"), a monospaced "[SCROLL FOR STORY]" label, and a gigantic black display title "SCULPTING HARMONY" in a stretched, ultra-heavy, partly overlapping letterform set that fills two lines edge to edge. A full-bleed aerial video of the hall's stainless-steel volumes follows, then black fields. Later chapters switch the field color between orange, blue (#4596ff), green (#16a147), coral (#ff6359), white and black. The voice is editorial and museum-grade, with bracketed monospace UI labels.

Art direction in detail: the opening composition lays hand-drawn architectural sketch lines over a hot orange ground, so the first impression is a drafting table rather than a web template. The title lettering is enormous black display type whose letters collide and nest (the "W" and "M" are widened, the "Y" is cut by the lower edge of the band), which turns the title into an architectural object in its own right. After it, the page changes register entirely: a cool, muted aerial video of downtown Los Angeles with the stainless-steel hall at its center. The contrast between warm flat color and cool documentary footage is the main visual device. Text is sparse in the capture, so the story is carried by imagery, scale and scrolling pace rather than by copy blocks. Microcopy is bracketed and uppercase ("[SCROLL FOR STORY]", "[READ MORE]", "[BACK TO TOP]", "[MENU]"), a consistent, slightly technical voice that echoes drawing annotations.

## Colors
- Canvas: #ffa441, the opening orange; page-body #ffffff; the largest measured background by area is #000000 (14352), then #ffa441 (10729), #ffffff (9953), #4596ff (6009), #16a147 (5855) and #ff6359 (1055).
- Primary: #000000 (button fill and link color), on-primary #ffffff.
- Ink: #000000 on 11721 characters; white (#ffffff) on 363, used on black and photographic sections.
- Chapter fields: blue #4596ff, green #16a147, coral #ff6359, kept from the measured background areas. Their use per chapter was not itemized in the extraction.
No gradients or shadows were recorded.

## Typography
Two families carry the page. Reckless (weights 200 and 400 loaded, a serif display/text face) is on 6622 characters; Roboto Mono (400 and 500) is on 5462. The stacks fall back to Roboto, "Helvetica Neue", sans-serif. The huge hero title is not part of the measured text scale; it renders as stylized lettering and is documented only qualitatively.
- Display: Reckless 20.8px / 22.88px, weight 400, letter-spacing -0.416px (mobile pass: 18.72px / 20.592px, -0.4576px).
- Heading: Reckless 25.6px / 28.16px, -0.768px.
- Subheading: Roboto Mono 12px, weight 500, uppercase.
- Body labels: Roboto Mono 12px / 15.6px, weight 400, uppercase.
- Button: Roboto Mono 14px, weight 500, uppercase.
Frequent sizes by characters: 12px (5065), 20px (4188), 30.4px (2030), 14px (397), 25.6px (234), 20.8px (99), 18px (71). The 30.4px size is the long-form story statement size (e.g. "Gehry's design approach aimed at once to...").

## Layout
Layout is a long vertical narrative: each chapter is a full-width band of one flat color or one photograph/video, with a single text column or a two-column offset (the opening standfirst sits right of center, the scroll label at left). Spacing values: 4px, 6px, 8px, 11.2px, 12px, 16px, 17.6px, 20px, 20.8px and 24px. The nav container has 0 16px 32px padding and the footer 0 16px; the footer is 180px tall with "[BACK TO TOP]" and "© J. PAUL GETTY TRUST".

## Elevation & Depth
Depth in this design is narrative, not physical. There are no cards, no layered surfaces and no recorded shadow values, so a rebuild should not add them. The strongest depth cue is the shift between a flat color field and a photographic or video field at a chapter boundary, which the page uses as a full-bleed hard edge rather than a fade.
No box shadows were recorded. Depth is created by cinematography (aerial drone video, architectural photography), by color field changes, and by the black/ orange overlap of the display lettering. UI controls are flat.

## Shapes
Shape language splits in two: the content is square-edged and full-bleed, while controls are softly rounded. Three radius steps were measured (16px, 32px, 80px), each on a handful of elements. Only 32px is on the primary button, so it is the value to use for the read-more action; the 16px and 80px values were not tied to a named component in the extraction and should be applied only after checking the live page.
Radii measured: 16px (3), 32px (3) and 80px (1). The only primary button uses 32px. Imagery and bands are otherwise rectangular and full-bleed.

## Components
Components are few and text-driven because the page is a story rather than an app.
- **Read-more button**: black fill, white text, Roboto Mono 14px weight 500 uppercase, bracket-wrapped label "[ READ MORE ]", 32px radius, 8px 12px padding, 35px high.
- **Top bar**: "Getty" wordmark, "SOUND • ON" toggle, "[MENU]" in mono caps.
- **Scroll cue**: "[SCROLL FOR STORY]" in 12px mono caps.
- **Chapter exit prompt**: "You're leaving the Chapter I interactive" in white Reckless 25.6px on a dark field.
- **Footer**: "[BACK TO TOP]" in 14px mono, copyright line.

## Design System Architecture
No public design-system or guideline link was found on the home page; the scan for brand, press, design-system and guideline links returned nothing. The root variable list is empty, so the de-facto system is the pairing of Reckless and Roboto Mono, bracketed uppercase mono labels, one flat color per chapter, and a black/white base.

## Do's and Don'ts
The rules below are drawn from measured values and what the capture shows on the first screens; later chapters were measured only as color and size frequencies.
- Do pair Reckless for readable narrative with Roboto Mono caps for UI.
- Do wrap interactive labels in square brackets.
- Do give each chapter one flat color field and let photography run full-bleed.
- Don't add shadows or gradients.
- Don't use mixed-case mono labels; the measured mono text is uppercase.
- Don't use the button radius (32px) on photos; images are square-edged.

## Responsive Behavior
The 390px pass recorded the first heading at 18.72px with 20.592px line height and -0.4576px tracking. Layout reflow, menu behavior and chapter-level adaptations were not measured.

## Iteration Guide
When extending this style, keep the number of distinct elements low: one color field, one type pairing, one button style per screen. Use Reckless for anything a reader is meant to read at length and Roboto Mono for anything the reader is meant to click or scan. Keep letter-spacing negative on Reckless (about -2% of size at the measured sizes) and uppercase on all monospace. Before shipping a chapter, check text contrast: black on #ffa441, #4596ff, #16a147 and #ff6359 and white on #000000 are the only pairings that were measured.
1. Set canvas #ffa441, ink #000000, primary #000000, on-primary #ffffff.
2. Load Reckless 200/400 and Roboto Mono 400/500.
3. Build bracketed mono buttons with 32px radius.
4. Alternate chapter fields using the measured blue, green, coral, white and black.
5. Run `node web/scripts/verify-designs.mjs --slug=sculpting-harmony`.
Not measured: hover, dark mode, motion, sound UI behavior.
