---
version: alpha
name: Cohere
category: "AI & LLM Platforms"
description: "Cohere's marketing site pairs a white canvas (#ffffff) and volcanic ink (#212121) with warm stone bands (#f0eee9), forest-green panels and photography; CohereText headlines at 96px/400 with -1.92px tracking, Unica77 Cohere Web body, and near-black pill buttons (#17171c)."
colors:
  canvas: "#ffffff"
  ink: "#212121"
  primary: "#17171c"
  on-primary: "#ffffff"
  surface-stone: "#f0eee9"
  ink-muted: "#73738a"
  ink-black: "#000000"
  ink-marble: "#fafafa"
  coral: "#ff7759"
  green: "#39594d"
  forest-deep: "#062c22"
  forest-mid: "#355146"
typography:
  display:
    fontFamily: CohereText, "Space Grotesk", Inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 96px
    fontWeight: 400
    lineHeight: 96px
    letterSpacing: "-1.92px"
  display-mobile:
    fontFamily: CohereText, "Space Grotesk", Inter, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-1.2px"
  subheading:
    fontFamily: "\"Unica77 Cohere Web\", Inter, Arial, ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 60px
    fontWeight: 400
    lineHeight: 60px
    letterSpacing: "-1.2px"
  body:
    fontFamily: "\"Unica77 Cohere Web\", Inter, Arial, ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: "\"Unica77 Cohere Web\", Inter, Arial, ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: "\"Unica77 Cohere Web\", Inter, Arial, ui-sans-serif, system-ui, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\""
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16.8px
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 20px
  3xl: 22px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.ink-black}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 24px
    height: 53px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink-black}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.lg}"
    padding: 24px
    boxShadow: rgba(172, 171, 171, 0.3) 0px -1px 10px 0px
  footer:
    textColor: "{colors.ink-black}"
---

## Overview

Cohere's marketing site (measured at `https://cohere.com/`, desktop 1280px and mobile 390px) is a calm, editorial enterprise-AI page: white canvas (`{colors.canvas}`), a near-black ink (`{colors.ink}` and `{colors.primary}`), warm grey "stone" bands (`{colors.surface-stone}`), and large photographic or illustrated moments in deep forest greens. There is almost no chroma in the UI itself; the colour lives in photography and 3D/organic imagery, and a single coral appears only as a brand variable.

The first screen of the capture shows: a thin black announcement bar ("Introducing North 2: AI without compromises" with an underlined "Learn more about the updates" link), a white nav with the cell-built "C" symbol and lowercase "cohere" wordmark, six menu items (Products, Solutions, Resources, Blog, Research, Company), a "Sign in" text link and a dark pill "Request a demo". Below, centered, a very large two-line headline "Your AI. Your rules." in CohereText, one grey-black sentence about North, and a wide rounded screenshot of the North product UI floating over an organic grass-and-light background. A cookie notice overlays the right of the page in the capture.

**Key Characteristics:**
- Display type in a custom face, CohereText, at `{typography.display}` size 96px with line-height equal to size and tight tracking of -1.92px; the same face drops to 60px on mobile (`{typography.display-mobile}`).
- UI and body type in "Unica77 Cohere Web" (a custom web build of a neo-grotesque), 18px body, 16px buttons, 12px for legal links.
- Pill buttons (`{rounded.pill}`): a filled near-black pill (`{colors.primary}`) for the main action and a white or outlined pill for secondary actions.
- Alternating bands: white, stone (`{colors.surface-stone}`), full-bleed photography, and dark forest panels (`{colors.forest-deep}`, `{colors.forest-mid}`).
- Product screenshots inside generously rounded frames (the measured radii include 20px and 22px at the top corners), shown on top of nature imagery.
- Monochrome grey customer-logo row under "Trusted by industry leaders and developers worldwide" (Oracle, Dell Technologies, RBC, LG CNS, Fujitsu).
- Mono uppercase labels (CohereMono is loaded) such as "NORTH PLATFORM" over dark cards.

## Colors

All hexes below are measured from the live page (`web/data/extracted/cohere.json`) including the CSS custom properties `--volcanic`, `--marble`, `--coral` and `--green` found in the page's root variables. Pentagram's identity write-up for Cohere (Creative Boom, 4 April 2023) describes the original palette in words: "coniferous green, mushroom grey and volcanic black", combined with "simulated coral, synthetic quartz and acrylic blue". The names of the root variables on the site (volcanic, marble, coral) match that language.

### Core
- **Canvas** (`{colors.canvas}`): page background and white pill fill.
- **Ink / Volcanic** (`{colors.ink}`): the `--volcanic` variable; primary reading color for headings such as the hero.
- **Primary** (`{colors.primary}`): a blue-tinged near-black used for the "Request a demo" button fill, for body paragraph color and for outlines. On hover the button fill goes to `{colors.ink-black}` (measured).
- **On-primary** (`{colors.on-primary}`): white text on the dark pill.
- **Ink black** (`{colors.ink-black}`): pure black for navigation text and the top announcement bar, and the hover fill.
- **Marble** (`{colors.ink-marble}`): the `--marble` variable, a near-white used for text on dark photographic panels.
- **Ink muted** (`{colors.ink-muted}`): a violet-grey for secondary text.

### Surfaces
- **Stone** (`{colors.surface-stone}`): the warm mushroom-grey band behind "Purpose-built AI solutions"; the second-largest background by area.
- **Forest deep** (`{colors.forest-deep}`), **forest mid** (`{colors.forest-mid}`) and **green** (`{colors.green}`, the `--green` variable): dark-green fills measured in the dark product and photographic sections.

### Accent
- **Coral** (`{colors.coral}`): the `--coral` variable. It is declared in the CSS but does not appear as a large filled area in the first screens of the capture; use it sparingly as an accent rather than a UI color.

### Usage rules
- The main action is always dark (`{colors.primary}`) on light and white on dark; never coloured.
- Do not tint text with green on white; green is a surface color for panels behind white or marble type.
- Cards are white with a barely visible grey shadow, not borders.

## Typography

### Families (loaded on the page)
- **CohereText** (400): display only. Pentagram describes a custom typeface family "which includes headline, outline, text and mono versions", with a variable headline version whose cell cuts can be set; the web build measured here is loaded at weight 400 only.
- **Unica77 Cohere Web** (400, 500, 700): everything else. Fallbacks in the stack: Inter, Arial, ui-sans-serif, system-ui.
- **CohereMono** (400): small technical labels.
- Cohere icon fonts (`CohereIconDefault`, `CohereIconOutline`) are also loaded for UI icons.

### Scale (measured)
| Role | Token | Size / line-height | Weight | Tracking |
|---|---|---|---|---|
| Hero h1 | `display` | 96px / 96px | 400 | -1.92px |
| Hero h1, mobile | `display-mobile` | 60px / 60px | 400 | -1.2px |
| Section heading (h3, e.g. "AI for Empowerment") | `subheading` | 60px / 60px | 400 | -1.2px |
| Body paragraph | `body` | 18px / 25.2px | 400 | normal |
| Button, nav | `button` | 16px / 24px | 400 | normal |
| Legal links | `link` | 12px / 16.8px | 400 | normal |

### Principles
- Only one weight (400) is used for headlines and buttons; hierarchy comes from size and tracking, not boldness.
- Headline tracking is -0.02em of the font size (-1.92px at 96px, -1.2px at 60px).
- Headlines are set on 1.0 line-height and wrap into two or three short lines ("Your AI. / Your rules.").
- Body copy is 1.4 line-height (25.2px over 18px).

### Font substitutes
Both CohereText and Unica77 Cohere Web are custom/proprietary. Use Inter (already in the site's own fallback stack) for UI and body, and a similar neo-grotesque with slightly soft terminals, such as Space Grotesk (also listed in CohereText's fallback stack), for display. Keep weight at 400 and apply the same negative tracking.

## Layout

- Full-bleed bands are the primary structure; content sits in a centered container and the screenshot frame spans nearly the whole container width.
- Hero: centered headline, centered 18px paragraph (maximum measured width about 512px for body paragraphs), then a wide media frame.
- Customer logos: one row, evenly spaced, monochrome, edge-bleeding.
- Split feature band: left half dark forest panel with white headline, copy, and a white pill "Explore now"; right half a full-height portrait photograph.
- Stone band with a centered 'Purpose-built AI solutions' heading, then a large dark card with a mono eyebrow ("NORTH PLATFORM"), a white heading and a product mock-up at right.
- Closing band: "Ready to put AI to work?" in white on a dark ground with a "Request a demo" action; the footer is tall (measured about 1330px at desktop) with link columns for Platforms and North.
- Spacing tokens run from 4px to 48px (`spacing.s1` to `spacing.s10`); common inner paddings are 16px, 24px, and 40px.

## Elevation & Depth

Depth is flat. The only measured shadow is `rgba(172, 171, 171, 0.3) 0px -1px 10px 0px` on white cards, a soft grey glow that is slightly stronger above the card than below it. Layering comes from color (white to stone to forest) and from product screenshots overlapping photography. There are no hard drop shadows and no borders on cards. Overlays (cookie notice) use a white card with the same soft shadow.

## Shapes

- `{rounded.pill}`: all buttons, including 36px-tall nav button and 51px-tall outlined button.
- `{rounded.lg}` 8px: cards.
- `{rounded.xl}` 12px: nested surfaces.
- `{rounded.2xl}` 20px and `{rounded.3xl}` 22px: large media frames and panels, sometimes only on the top corners (22px 22px 0px 0px and 20px 20px 0px 0px were measured).
- `{rounded.xs}`, `{rounded.sm}`, `{rounded.md}` (2px, 4px, 6px): small controls and chips.
- The brand mark itself is built from three organic cell-like blobs forming a "C" (Pentagram), so soft, non-geometric shapes are on-brand in imagery while UI shapes stay clean.

## Components

### Buttons
- **Primary** (`button-primary`): `{colors.primary}` fill, white label, 16px Unica 400, pill radius, 36px tall, `0px 16px` padding. Hover: fill becomes `{colors.ink-black}`.
- **Secondary** (`button-secondary`): `{colors.canvas}` fill with `{colors.primary}` text, pill radius, `12px 24px` padding, about 53px tall in the measurement. Used on dark photographic panels ("Explore now", "Explore models").
- **Outlined**: transparent, 1px solid `{colors.primary}` border, `12px 24px` padding, about 51px tall ("See all industries").
- Some CTAs carry a decorative offset layer (a shape translated -6px/6px behind the pill, measured as a pseudo-element).

### Navigation
- White bar, black Unica 16px text, no underline. The right cluster is "Sign in" (text) plus the dark pill. The announcement bar above is black with white text and an underlined link.

### Cards
- White, 8px radius, 24px padding, soft grey shadow (see Elevation). Product cards in the North mock-up are small white cards with initials avatars, star icons, version tags and tiny metadata, which are screenshot content rather than site chrome.

### Media frames
- Product screenshot in a large rounded frame over nature-toned imagery (grasses, warm light). Portrait photography is unretouched, outdoors, in saturated yellows and greens.

### Footer
- Dark, with a final CTA heading in white at `{typography.subheading}` size and a "Request a demo" button, followed by link columns.

### Cookie notice
- White card, 8px radius, small 14px copy with the shadow above, a "Cookie settings" underlined link and a close icon.

## Imagery & Art Direction

- **Nature as the second palette.** The hero frame sits on a macro landscape of grasses and warm light; the "AI for Empowerment" band uses dark, rain-lit grass with a faint grid of thin white lines over it; the stone band's dark card has glassy, translucent vertical forms. All of it is organic or material, never circuit-board or neon.
- **Human photography** is a single close portrait of a person outdoors (a hat, goggles and a yellow-trimmed vest), shot with shallow depth of field and natural colour. It sits on the right half of a split band, full-bleed to the edge.
- **Product UI** is shown as realistic, legible screenshots of North (an Agents page with a sidebar, tabs, search, and cards for agents such as "SEO content optimizer" and "Code translator"). The screenshot carries its own tiny type, so it must be shown large.
- **Logos** are shown flat, in grey-black, no cards around them.
- **Cell language.** Per Pentagram, the identity is built from cell-like blobs and Voronoi partitions; on the site that shows up as the three-cell "C" symbol, the `--cellWidth`/`--cellHeight` CSS variables, and large rounded frames rather than literal cell patterns in the first screens.

## Microcopy Voice

- Short declaratives with a possessive: "Your AI. Your rules.", "Your freedom. Your focus."
- Plain, enterprise-credible promise language: "Maximize uptime, cut operating costs, and modernize critical..." (body paragraph, measured).
- Buttons are two to three words: "Request a demo", "Explore now", "Explore models", "See all industries".
- Announcement copy is a title plus an underlined link: "Introducing North 2: AI without compromises", "Learn more about the updates".
- Eyebrows are uppercase mono: "NORTH PLATFORM".
- Closing question as final CTA: "Ready to put AI to work?"

## Interaction States

- Primary pill hover: background changes from `{colors.primary}` to `{colors.ink-black}` (measured on "Request a demo"; text stays white, height stays 36px).
- Links in nav are plain black with no underline at rest; the announcement-bar link is underlined at rest.
- Overlays dismiss through a small close icon at top right (announcement bar and cookie notice both show it).
- Focus ring: the shipped CSS defines `--tw-ring-color` as a translucent blue (`#4c6ee680`); it is the default ring variable of the utility layer and is the only focus colour found.

## Density & Rhythm

- Sections are tall and carry one idea each (see the inventory below).
- Text blocks are narrow (paragraphs around 512px wide at desktop) and centered or left-aligned inside a panel, never full container width.
- Vertical gaps between bands are large relative to inner padding (inner card padding is 24px; band padding is far greater), which is what makes the page read as editorial rather than as a dashboard.
- The page's small text is 12px to 14px; the next steps are 16px, 18px, 24px, then 60px and 96px: a wide gap between body and display with few mid-sizes.

## Page Section Inventory (first screens of the capture)

1. **Announcement bar**: black, centered white copy plus underlined link, close icon at right.
2. **Header**: white; logo left, menu, then Sign in and the dark pill at right.
3. **Hero**: white; two-line display headline, one 18px paragraph, no buttons directly under the paragraph in the capture.
4. **Product frame**: wide rounded media frame, black top-left corner area blending into grasses, North UI overlaid.
5. **Trust row**: centered 18px sentence, then a single row of five grey logos.
6. **Split feature band**: left forest-dark panel (headline at 60px, short paragraph, white pill), right portrait photograph. Each half is exactly half the width.
7. **Stone band**: `{colors.surface-stone}` background, centered section heading, large dark rounded card with a mono eyebrow, headline in a light grotesque and an agent-card mock-up on the right.
8. **Closing CTA** (further down the page, measured in the footer text): "Ready to put AI to work?" with "Request a demo".

## Colour Pairings

| Foreground | Background | Where |
|---|---|---|
| `{colors.ink}` | `{colors.canvas}` | hero headline, section copy |
| `{colors.primary}` | `{colors.canvas}` | body paragraphs, outlined button text |
| `{colors.on-primary}` | `{colors.primary}` | filled pill label |
| `{colors.ink-marble}` | dark forest panels | headings and copy on photography |
| `{colors.on-primary}` | `{colors.forest-deep}` | white heading on dark green |
| `{colors.ink-muted}` | `{colors.canvas}` | secondary text, mock-up metadata |
| `{colors.primary}` | `{colors.canvas}` | white pill with dark label on dark photography |

## Design System Architecture

Cohere runs a documented internal design system called **Waypoint** at https://waypoint.cohere.com (the page title reads "Waypoint Design System", with a Typography route); its content is rendered client-side and loaded as "Loading..." when fetched without JavaScript, so its token values could not be read and none are claimed from it here.

The identity itself was designed by Pentagram in 2021 to 2023 and described by Creative Boom (https://www.creativeboom.com/inspiration/pentagram-cohere/): biology-inspired "cells" and Voronoi diagrams, a three-cell "C" symbol, a custom typeface with headline, outline, text and mono versions, 24-pixel-square line icons, "gradient atmospheres", a Figma plug-in for generating Voronoi patterns, two layout component libraries and a Cinema 4D tool for 3D pebble visuals. No source on later campaign refreshes was opened, so only the shipped CSS is used for the current look.

From the shipped CSS the de-facto system is Tailwind-style utilities (`--tw-*` variables) plus a small set of brand variables: `--volcanic`, `--marble`, `--coral`, `--coral-light`, `--green`, `--cellHeight` and `--cellWidth`. The cell variables indicate the cell-based layout component that clips panels into the signature cell shapes. The newsroom at https://cohere.com/news offers a "Download press kit" with logos and media assets and a press contact; the kit was not downloaded.

## Do's and Don'ts

### Do
- Use `{colors.canvas}`, `{colors.surface-stone}` and photography as the main surfaces and let type carry the page.
- Keep headlines at weight 400 with negative tracking and 1.0 line-height.
- Use pill buttons only; one dark filled primary per view, white pills on dark panels.
- Place product screenshots in large rounded frames over organic, natural imagery.
- Show customer logos in grey monochrome.
- Write in short, confident, second-person statements ("Your AI. Your rules.").

### Don't
- Don't bold headlines; the brand is thin and tracked, not heavy.
- Don't use coral or green as button fills.
- Don't add borders to cards; use the soft grey shadow or a color change.
- Don't use sharp rectangles for primary actions.
- Don't use stock sci-fi imagery; Pentagram's stated intent was to avoid "overly austere branding laden with sci-fi tropes".
- Don't crowd the hero: one headline, one paragraph, one media frame.

## Responsive Behavior

- Measured at 1280px and 390px. The hero headline changes from 96px to 60px (`{typography.display}` to `{typography.display-mobile}`) with the same 1.0 line-height and tracking scaled to -1.2px.
- Section headings (`{typography.subheading}`) are 60px at desktop; mobile values were not measured.
- Pill buttons stay pills at all widths; padding stays `12px 24px` on larger variants.
- The split band (dark panel plus portrait) is a two-column layout at desktop; its mobile stacking was not captured and is left unspecified.
- The announcement bar spans the full width at every size and can be dismissed.

## Iteration Guide

1. Start with white canvas and `{colors.ink}` text; set the headline in a tight-tracked 400-weight display face.
2. Add one dark pill primary and, only if needed, one outlined pill secondary.
3. Alternate white and `{colors.surface-stone}` bands; use one full-bleed dark-green photographic panel per page for emphasis.
4. Put product UI in a large rounded frame; keep inner cards at 8px radius with the soft grey shadow.
5. Keep all UI text at weight 400; use size and spacing for hierarchy.
6. Introduce coral only as a small detail, never as a fill for a control.
7. Check against the capture: white-dominant, restrained, photographic.
