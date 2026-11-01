---
version: alpha
name: Bugatti
category: "Automotive"
description: "Bugatti homepage: pure black #000000 canvas with white ink, full-bleed car photography, three proprietary faces (Bugatti Display 60px, Bugatti Monospace 12px uppercase labels, Bugatti Text 16px), and outline controls: a 42px pill button and a 4px-radius compact button that invert to white on hover."

colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  accent-blue: "#004bfa"
  ink-muted: "#999999"
  surface-card: "#000000cc"
  hairline: "#ffffff33"
  surface-footer: "#3f3f3f4d"
  on-primary: "#000000"
typography:
  label:
    fontFamily: "\"Bugatti Monospace\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
    letterSpacing: 1.2px
    textTransform: uppercase
  display:
    fontFamily: "\"Bugatti Display\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
  body:
    fontFamily: "\"Bugatti Text Regular\", ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 12px
  s5: 24px
  s6: 36px
  s7: 48px
  s8: 64px
components:
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.xs}"
    padding: 6px 12px
    height: 30px
    borderColor: "{colors.ink-muted}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink}"
    padding: 36px 48px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 12px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink}"


  button-outline-pill:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.pill}"
    height: 42px
    borderColor: "{colors.ink}"
  button-outline-pill-hover:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  menu-button:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.xs}"
    height: 32px
---

## Overview

Bugatti's homepage is a black stage for one photograph at a time. The canvas is pure black `{colors.canvas}` (#000000), type is white `{colors.ink}` (#ffffff) with one quiet grey `{colors.ink-muted}` (#999999), and there is no accent color in the interface: the only chroma comes from the car photography. Every control is an outline, every label is a small uppercase monospaced string, and the single large typographic gesture is a 60px display face.

The brand context, from sources opened for this document: Bugatti worked with the consultancy Interbrand on a 2022 identity that Interbrand describes as a "bespoke typeface inspired by elements of BUGATTI's heritage and engineering spirit", an "optimized wordmark", a "simplified EB monogram", a "new luminous Bugatti Blue" and a "new and central role" for the macaron. The site's three custom families (Bugatti Display, Bugatti Monospace, Bugatti Text) are consistent with that direction; this file only records what was measured on them.

What the capture shows (only the first viewport rendered; the rest of the 7,052px page appears as black in the capture because below-the-fold content had not loaded):

1. **Full-bleed hero image.** A moody, motion-blurred close-up of a dark blue Bugatti (the Destrier, per the headline lettering) at the wheel arch and tail: teal-grey sky reflecting on the bodywork at the top left, a thin orange-red tail light on the right, shadows falling to black at the bottom of the frame, so the image melts into the black page.
2. **Transparent nav** over the image: a hamburger icon with "MENU" at left, the condensed BUGATTI wordmark centered, "STORE" with a bag icon at right. The measured nav is 104px tall with `36px 48px` padding and a scrim gradient from 50% black at the top to transparent.
3. **Headline lettering**: "Destrier" in a large calligraphic italic script, white-grey, centered; it is not detected as a text heading (no `h1` was found), so it appears to be a graphic asset.
4. **Tagline and button**: "A STORY OF PROPORTION AND CRAFTSMANSHIP." in monospaced uppercase, then a pill-shaped outline button "DISCOVER PURE BEAUTY".
5. **Floating promo card** at the lower right (320px wide, 128px tall): a small photo thumbnail, "Are you ready for a new adventure?" in white, "We are hiring." in grey, a CLOSE control, and a full-width outlined button "EXPLORE OUR OPPORTUNITIES".
6. **Footer** (measured, not visible in capture): a translucent grey panel 926px tall listing the car lines in uppercase: HYPER SPORTS CARS, TOURBILLON, W16 MISTRAL, BOLIDE, CHIRON, LA VO (the extraction truncates the entry).

Mood: nocturnal, couture-like, and unhurried. Copy is minimal, declarative and a little poetic ("A story of proportion and craftsmanship", "Discover pure beauty"). Headlines name things ("La Maison BUGATTI", "Destrier"), they don't explain.

## Colors

The palette is effectively two values plus transparency.

- `{colors.canvas}` (#000000): page background; the largest measured area color by far.
- `{colors.ink}` (#ffffff): all primary text, icons and outline strokes. `{colors.primary}` (#ffffff) is the same value, since the primary action is a white-outlined control that fills white on hover.
- `{colors.on-primary}` (#000000): label color when a control fills white on hover.
- `{colors.ink-muted}` (#999999): secondary text ("We are hiring.") and the border of the compact outlined button.
- `{colors.surface-card}` (#000000cc): the floating promo card, 80% black over the photograph, with a faint top highlight gradient (`rgba(255,255,255,0.1)` to transparent).
- `{colors.hairline}` (#ffffff33): the card's 1px border, and the hover wash on the MENU button.
- `{colors.surface-footer}` (#3f3f3f4d): a 30% charcoal panel over black, measured as the second-largest background area.
- `{colors.accent-blue}` (#004bfa): measured on a very small area of the page (two area-weight points), role not identified in the capture; Interbrand's write-up names a "luminous Bugatti Blue", but this hex was not confirmed to be that color, so treat it as a measured accent with unknown use.

Color rules observed:
- No accent color is used in UI chrome; interactive states are expressed as invert (black text on white fill), not hue.
- Photography supplies the only saturation: deep blue paint, orange-red lights, teal sky.
- Greys are limited to one text grey and translucent overlays.
- The shipped CSS also carries default shadcn/Tailwind variables (`--background: 0 0% 100%`, `--primary`, `--border`...) that describe a light theme; they are scaffold defaults and are not what the page renders, so they are not used here.

## Typography

Three custom families are loaded, each at weight 400 only (the CSS also references a Bugatti Text Bold):

- **Bugatti Monospace**: all labels, buttons, captions and metadata.
- **Bugatti Display**: large headings (measured "La Maison BUGATTI" at 60px).
- **Bugatti Text Regular**: navigation and link text at 16px.

Fallback chain on all three: `ui-sans-serif, system-ui, sans-serif` plus emoji fonts. All three are proprietary; no public download was found.

| Role | Token | Size / line | Weight | Case and tracking |
| --- | --- | --- | --- | --- |
| Display heading | `{typography.display}` | 60px / 60px | 400 | mixed case, tracking 1.4px (measured at 60px) |
| Label / button | `{typography.label}` | 12px / 16px | 400 | uppercase, tracking 1.2px |
| Nav / link / body | `{typography.body}` | 16px / 24px | 400 | normal case, normal tracking |

Other measured sizes: 14px (the most-used size by character count, with 1.4px tracking), 36px and 24px (the mobile heading sizes reported). Tracking is expressed as 10% of the font size for the monospace labels (12px with 1.2px, 14px with 1.4px).

Principles:
- One weight (400) everywhere; hierarchy comes from face, size and case, not boldness.
- Monospace plus uppercase plus open tracking signals "UI and technical"; the display face carries the heritage voice.
- Large type is rare: the page's visual weight is the image, with a single big headline moment.
- Never set long copy in uppercase; the uppercase monospace is limited to a line or two.

### Font substitutes

Without the proprietary faces: `JetBrains Mono` or `IBM Plex Mono` for the label style (12px, uppercase, 10% tracking), a condensed grotesque such as `Barlow Condensed` or a light serif display for headlines, and `Inter` for 16px text. Keep weight 400.

## Layout

- **Full-bleed, image-led.** The hero is a full-width image with centered content; there is no container grid visible in the first viewport.
- **Spacing scale.** Measured paddings and gaps: 4px, 6px, 8px, 12px, 24px, 36px, 48px and 64px (`{spacing.s1}` to `{spacing.s8}`). The nav uses `36px 48px`; footer or section padding uses 48px and 64px.
- **Hero composition.** Headline lettering, tagline and button are stacked on the vertical axis at the center of the viewport, a little above the middle, with generous empty space below to let the photograph show.
- **Nav.** Three-part bar: menu control left, wordmark center, store right; 104px high.
- **Promo card.** Anchored bottom-right with a margin from the viewport edges, 320 x 128px.
- **Footer.** A tall panel (926px) of uppercase model lists, set on the translucent charcoal.
- Responsive units were not published as tokens; the shipped CSS includes `--gap: .5rem` and `--radius: .5rem` scaffold values.

## Elevation & Depth

The page measures no box shadows at all. Depth is built from:

- **Scrim gradients**: a top gradient on the nav (50% black fading out) keeps white nav text legible over the photograph.
- **Translucent surfaces**: the promo card is 80% black with a hairline border and a subtle highlight gradient, which makes it read as a glass layer over the image.
- **Invert hover**: pill and compact buttons fill white with black text on hover (a hard, flat state change).
- **Image depth**: photographic shadows and blur do the rest; the bottom of the hero fades into the page black.

Do not add drop shadows; on a black canvas they are invisible and would fight the photography.

## Shapes

Three radii were measured: `{rounded.xs}` (4px) on compact buttons and the MENU control, `{rounded.sm}` (6px) on the promo card, and `{rounded.pill}` (9999px) on the primary outline button and the CLOSE control. A 0px radius also appears on one CLOSE variant. The wordmark, hero lettering and imagery are shape-free. The pill/4px/6px mix is small-scale: the large shapes of the page are rectangles of photography.

## Components

### Button, pill outline (primary)

`{components.button-outline-pill}`: transparent fill, 1px white border, white label in `{typography.label}` (12px monospace uppercase), fully rounded, 42px tall. Hover inverts to a white fill with black text (`{components.button-outline-pill-hover}`). Example: "DISCOVER PURE BEAUTY".

### Button, outline

`{components.button-outline}`: transparent fill, 1px `{colors.ink-muted}` border, white label, 4px radius, `6px 12px` padding, 30px tall. Hover fills white with black text. Example: "EXPLORE OUR OPPORTUNITIES" (294px wide inside the promo card).

### Menu button

`{components.menu-button}`: the MENU control in the nav, 32px tall, 4px radius, transparent at rest and a 20% white wash on hover.

### Navigation

`{components.nav}`: 104px bar with `36px 48px` padding, white text, the scrim gradient, a hamburger glyph and a bag icon. `{components.nav-link}` is white `{typography.body}` text; the wordmark is a link measuring 128px wide.

### Promo card

`{components.card}`: `{colors.surface-card}` fill, 1px `{colors.hairline}` border, 6px radius, 12px padding, 12px monospace copy, a small rounded thumbnail on the left and a CLOSE control at the top right.

### Link

`{components.link}`: white `{typography.body}` text; no underline was measured in the hero.

### Footer

`{components.footer}`: `{colors.surface-footer}` fill, white `{typography.body}` text for model names and grey for secondary items.

## Campaign Context

The homepage hero promotes the Destrier. Bugatti's own newsroom release (opened for this document) describes it as the third one-of-one creation of the Programme Solitaire, built on the Bolide platform with its aerodynamic bodywork removed to show "pure proportion", standing one meter tall, in a bespoke "Sapphire Celeste" multi-layered paint, with an interior of "Ambre Voyageur" leather and nubuck. Its tagline in the release is "A Sculpture of Speed". The site's hero line, "A story of proportion and craftsmanship.", paraphrases that release, and the dark blue bodywork in the capture matches the named paint. Design consequence: the page adopts the car's colors (deep blue, copper light) as its only palette and does not introduce any UI color that could compete with it.

## Imagery & Art Direction

- **Crop**: extreme close-up, car cropped by the frame, no full-vehicle profile; the viewer sees surface, reflection and a wheel, not a spec sheet.
- **Motion**: long exposure or camera-motion blur sweeps the body, giving the sense of speed without showing the road.
- **Light**: chiaroscuro. The top of the image carries a cool teal-grey highlight, the middle is deep blue, the bottom falls to black, and one thin warm light (orange-red tail lamp) crosses the right side. This is consistent with the "chiaroscuro and abstraction" Interbrand lists among the identity's visual concepts.
- **Transition to canvas**: the lower hero fades to black so the following black page continues the image without a seam.
- **Lettering**: the model name is rendered as a flowing script, a handwritten, couture-like counterpoint to the technical monospace of the UI; it is the only script on the page.
- **Thumbnails**: the promo card's thumbnail is a tiny rounded photograph of people, a warmer human image than the hero.
- **Logo**: the BUGATTI wordmark is a condensed, uppercase, single-color white sans mark, centered and unframed.

## Interaction States

Measured by hovering each control:

| Control | Rest | Hover |
| --- | --- | --- |
| MENU | transparent, white text, 4px radius, 32px tall | background white at 20%, text stays white |
| DISCOVER PURE BEAUTY | transparent, 1px white border, pill, 42px tall | white fill, black text |
| EXPLORE OUR OPPORTUNITIES | transparent, 1px #999999 border, 4px radius, 30px tall | white fill, black text |
| CLOSE (two variants) | transparent, light border color | no visible fill change |

Rules: hover never changes hue; the only transitions are a translucent wash (for ghost controls) and a full invert (for outlined buttons). There is no underline or color shift on links in the measured hero.

## Microcopy

- Labels are uppercase and short: MENU, STORE, CLOSE.
- Calls to action are noun phrases with an aesthetic verb: "DISCOVER PURE BEAUTY", "EXPLORE OUR OPPORTUNITIES".
- Taglines end with a full stop and are set in uppercase monospace: "A STORY OF PROPORTION AND CRAFTSMANSHIP."
- Recruitment card copy is conversational sentence case ("Are you ready for a new adventure?", "We are hiring.").
- Model names are uppercase in lists (TOURBILLON, W16 MISTRAL, BOLIDE, CHIRON) and the house is referred to as "La Maison BUGATTI".

## Accessibility Notes

- White on black is the maximum-contrast pairing; keep body-sized text white and reserve #999999 for secondary lines of at least 12px.
- Over photography, the nav relies on its top scrim; any new overlay text should sit on a scrim or on the translucent card rather than directly on a bright part of an image.
- Controls are real buttons with visible 1px outlines, which keeps them discoverable without color.
- Uppercase monospace at 12px with 10% tracking is legible but small; avoid shrinking labels below 12px.

## Design System Architecture

No public Bugatti design system, token package or brand-guideline site was found (see SOURCES.json). Bugatti's newsroom (newsroom.bugatti.com) offers press releases and downloads, not UI specifications, and Interbrand's case study describes the identity in prose.

The site itself is built on Tailwind CSS: the `:root` declares `--tw-*` utility variables and a font variable named `--tw-font-BUGATTI_Text`, plus shadcn-style default variables (`--background`, `--foreground`, `--card`, `--primary`, `--border`, `--ring`) holding HSL triples for a light theme. Those defaults are not applied to the rendered page (the page is black and white), which indicates a starter scaffold with a custom skin overlaid through utility classes and the three Bugatti font families. The de-facto system is therefore:

- Three typefaces with strict roles (monospace for UI, display for headings, text for navigation and body).
- Black canvas, white ink, one grey.
- Two outline button shapes (pill and 4px) and one translucent card.
- Spacing in multiples of 4 and 12 (4, 6, 8, 12, 24, 36, 48, 64).
- Interaction by invert (fill white, text black).

## Do's and Don'ts

Do:
- Keep the canvas pure black and the text white; use #999999 only for secondary lines.
- Let one full-bleed photograph lead each screen and fade it into black at the bottom.
- Set every label and button in uppercase monospace at 12px with 10% tracking.
- Make primary actions outline pills that invert on hover.
- Keep type at weight 400.
- Use translucent black for floating cards and keep them small.

Don't:
- Don't add an accent color to UI controls.
- Don't use shadows, gradients as decoration, or filled colored buttons.
- Don't set body copy in the monospace.
- Don't use bold for emphasis; change face or size instead.
- Don't crowd the hero: one headline, one tagline, one action.
- Don't take the scaffold's light-theme variables as brand values.

## Responsive Behavior

Measured at 390px: the section label (the h2-level "TIMELESS ELEGANCE AND SPEED" line) stays at 12px, and the extractor reports 14px, 12px, 36px, 24px and 16px as the most frequent mobile sizes; the 60px display size measured on desktop appears with the same character count as 36px in the mobile list, but the mapping of that size to the large heading was not confirmed. Breakpoint widths and column behavior were not published or measured. Practical guidance consistent with measurement: keep the nav's three-part structure, keep the label type size unchanged, scale the display heading to 36px, and keep the hero image full-bleed.

## Iteration Guide

1. Start from `{colors.canvas}` with `{colors.ink}` text and a single full-bleed photograph.
2. Place the nav (menu left, wordmark center, store right) over a top scrim.
3. Add at most one display headline (60px, Bugatti Display), one monospace tagline and one pill outline button.
4. Use the compact 4px outline button inside cards; use the translucent card for promos.
5. State change is always an invert: white fill, black text.
6. Re-measure on bugatti.com before changing any token; below-the-fold sections were not visible in the capture and should be re-captured if they matter.
