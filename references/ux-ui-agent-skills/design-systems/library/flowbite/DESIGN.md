---
version: alpha
name: Flowbite
category: "Frontend Frameworks"
description: "Flowbite, the open-source Tailwind CSS component library, presents a white marketing page set in Inter with 800-weight 60px headlines, gray-900 ink (#111827) over gray-500 body (#6b7280), a royal-blue #1a56db primary with 8px-radius buttons, and docs demos whose brand blue is #1447e6 with 12px radii."
colors:
  canvas: "#ffffff"
  ink: "#111827"
  ink-body: "#6b7280"
  primary: "#1a56db"
  on-primary: "#ffffff"
  primary-hover: "#1e429f"
  link: "#1c64f2"
  surface-subtle: "#f9fafb"
  surface-muted: "#f3f4f6"
  ink-secondary: "#4b5563"
  border: "#e5e7eb"
  brand-docs: "#1447e6"
  brand-docs-hover: "#193cb8"
  ink-docs: "#101828"
  ink-docs-muted: "#4a5565"
typography:
  display:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 60px
    fontWeight: 800
    lineHeight: 60px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-0.9px"
  heading:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 36px
    fontWeight: 800
    lineHeight: 40px
    letterSpacing: "-0.9px"
  subheading:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  body:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 12px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 24px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-docs-brand:
    backgroundColor: "{colors.brand-docs}"
    textColor: "{colors.on-primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 10px 16px
  button-docs-secondary:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-docs-muted}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 10px 16px
    borderColor: "{colors.border}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink-docs}"
    typography: "{typography.nav}"
    rounded: "{rounded.xl}"
    padding: 10px 12px
    borderColor: "{colors.border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 24px
    borderColor: "{colors.border}"
---

## Overview

Flowbite (https://flowbite.com) markets itself as "an open-source library of over 600+ UI components, sections, and pages built with the utility classes from Tailwind CSS and designed in Figma", and the page is its own best specimen: it is assembled from Flowbite components on Tailwind defaults. The measured homepage (1280px desktop, 390px mobile) has a white canvas with a pale gray band (#f9fafb) for alternate sections, Inter throughout (7558 measured characters), and a single blue for every action.

The capture reads in this order: a thin announcement bar ("New - We have launched the new Flowbite Dashboard featuring over 60+ pages! Check it out"), a navigation bar with the Flowbite logo, a search field with a keyboard hint, Docs / Blocks / Figma / Icons / Illustrations / Blog / Pro version / Pricing & FAQ, social icons, a dark-mode toggle and a solid blue "Sign in" button. Below, a centered eyebrow pill ("New - We have launched over 100+ blocks in E-commerce UI! See what's new"), a centered 60px, weight-800 headline "Build websites even faster with components on top of Tailwind CSS", a gray subhead, a blue "Get started" button and a white "Explore components" outline button with an icon. A large rounded video thumbnail (the Flowbite Crash Course) is the main visual, then a "Featured in" row of grayscale logos (DEV, Y Combinator, reddit, Product Hunt, YouTube), then a pale-gray section "Flowbite in other technologies" with a four-column grid of white bordered cards (React, Vue, Svelte, Angular, MCP Apps, TypeScript, Next.js, Nuxt.js, Astro, Remix, Meteor.js, Gatsby).

Key characteristics:
- Type does the heavy lifting: heavy Inter (800) at 60px and 36px with negative tracking, gray body at 16px.
- One accent: blue. Primary fill `{colors.primary}` on the homepage; a Tailwind-v4-era blue `{colors.brand-docs}` in the docs demos.
- Everything is centered in the hero and left-aligned in cards and docs.
- Corners are consistently soft: 8px on homepage buttons, 12px on docs components and cards.
- Elevation is minimal: a 1px/2px 5 percent shadow (`shadow-xs`) on controls and cards.
- Copy is utilitarian and numeric: "600+ UI components", "60+ pages", "100+ blocks".

## Colors

### Homepage palette (measured)
- **Canvas** (`{colors.canvas}` = #ffffff): page background (area weight 27682).
- **Surface subtle** (`{colors.surface-subtle}` = #f9fafb): alternate section band and card ground (7060).
- **Surface muted** (`{colors.surface-muted}` = #f3f4f6): subtle fills (114).
- **Ink** (`{colors.ink}` = #111827): headings and strong text (2840 characters).
- **Ink body** (`{colors.ink-body}` = #6b7280): subheads and paragraphs; the single most-read text color on the page (3912 characters).
- **Ink secondary** (`{colors.ink-secondary}` = #4b5563): captions and secondary links (426).
- **Primary** (`{colors.primary}` = #1a56db): fill of "Get started", "Sign in" and the other detected calls to action; text on it is `{colors.on-primary}` (#ffffff).
- **Primary hover** (`{colors.primary-hover}` = #1e429f).
- **Link** (`{colors.link}` = #1c64f2): inline links such as "Check it out" in the announcement bar.
- **Border** (`{colors.border}` = #e5e7eb): input and card hairlines.
- Status colors seen in smaller amounts: light-blue fill #e1effe (eyebrow pill), green #0e9f6e with light green #def7ec and dark green text #03543f (success badges). These are not tokens here.

### Docs demo palette (measured on /docs pages)
The component documentation pages render with computed colors in the OKLCH color space; converted to sRGB they are:
- `{colors.brand-docs}` #1447e6 (oklch 0.488 0.243 264.376): background of the default button demo, border and text of the outline "Brand" demo.
- `{colors.brand-docs-hover}` #193cb8 (oklch 0.424 0.199 265.638): hover of the brand button.
- `{colors.ink-docs}` #101828 (oklch 0.21 0.034 264.665): input text, labels.
- `{colors.ink-docs-muted}` #4a5565 (oklch 0.446 0.03 256.802): text of the secondary button demo.
- The same #f9fafb fill and #e5e7eb border appear on inputs, secondary buttons and cards.

### Official palette
Flowbite's color documentation (https://flowbite.com/docs/customize/colors/) lists eight families with 10 shades (50 to 900): Gray (#F9FAFB to #111827), Red (#FDF2F2 to #771D1D), Yellow (#FDFDEA to #633112), Green (#F3FAF7 to #014737), Blue (#EBF5FF to #233876), Indigo (#F0F5FF to #362F78), Purple (#F6F5FF to #4A1D96) and Pink (#FDF2F8 to #751A3D). The homepage ink #111827 and surface #f9fafb are the ends of the documented Gray scale.

### Rules observed
- Keep action color to one blue; success status uses green, never blue.
- Body copy is gray-500 and headings gray-900; never pure black on the homepage.
- Alternate white and #f9fafb section backgrounds instead of using borders between sections.

## Typography

### Family
Inter (variable weights 400 to 800) with the Tailwind system stack as fallback: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans and emoji fonts. Monospace appears only in code blocks (ui-monospace, 2 characters measured on the homepage; docs code blocks use a syntax-highlighted theme).

### Substitutes
Inter is open source (rsms.me/inter), so no substitute is required; if it cannot load, the system stack above is the specified fallback.

### Scale (measured)
| Token | Size / line | Weight | Tracking | Use |
|---|---|---|---|---|
| `display` | 60px / 60px | 800 | -1.5px | homepage h1 |
| `display-mobile` | 36px / 40px | 700 | -0.9px | h1 at 390px |
| `heading` | 36px / 40px | 800 | -0.9px | section h2 |
| `subheading` | 20px / 28px | 600 | normal | h3 and lead text |
| `body` | 16px / 24px | 400 | normal | paragraphs |
| `button` | 16px / 24px | 500 | normal | homepage buttons |
| `nav` | 14px / 20px | 500 | normal | nav links, docs buttons, inputs, labels |

Tracking is -2.5 percent of size on 60px (1.5) and 36px (0.9). Docs components use 14px/20px: button text weight 500, input text weight 400, field labels weight 500.

### Principles
- Heavy weight (800) is for display only; UI text uses 400 and 500.
- Headings use gray-900, supporting copy gray-500: hierarchy by color as well as size.
- Small caps-like eyebrow text ("FEATURED IN") is gray and 12px to 14px.
- Sentence case everywhere: "Explore components", "Sign in".

## Layout

- Max content width follows Tailwind containers: the hero text block is about 700px wide and centered; the card grid spans nearly the full viewport in four columns (cards of about 215px wide in the 960px-wide capture).
- Vertical rhythm is generous: sections have roughly 96px of top and bottom padding (the footer is measured at 96px 0 40px).
- The navigation is a single flex row with a search field, nine items and a primary button; "Pricing & FAQ" and "Sign in" wrap to two lines at the captured width.
- The announcement bar spans the page above the nav.
- The video thumbnail is centered at about 700px wide with a large radius and a soft shadow.
- Card grid: 4 columns on desktop with about 24px gutters.

### Spacing scale
2, 4, 6, 8, 10, 12, 14, 16, 20, 24px measured, following Tailwind's 4px-based scale. Docs components use 10px vertical and 12 to 16px horizontal padding; docs cards use 24px.

### Page anatomy summary
1. Announcement bar (full width, light, badge plus link).
2. Navigation bar (white, 14px/500 links, blue action at right).
3. Hero (centered: eyebrow pill, 60px headline, gray subhead, two buttons).
4. Video thumbnail (rounded, shadowed, about 700px wide).
5. "Featured in" logo row (gray, centered).
6. Pale-gray band with a centered 36px heading and a four-column grid of white bordered cards.
7. Further sections continue the alternation of white and #f9fafb down to the footer.

## Elevation & Depth

- Flat by default. Controls and cards carry Tailwind's `shadow-xs`: `rgba(0,0,0,0.05) 0 1px 2px 0` (8 measured uses).
- A slightly larger two-layer shadow `rgba(0,0,0,0.1) 0 1px 3px, rgba(0,0,0,0.1) 0 1px 2px -1px` appears once (Tailwind `shadow-sm`).
- Another one-off `rgba(0,0,0,0.1) 0 1px 4px 1px`.
- The video thumbnail is lifted with a diffuse shadow in the capture.
- Section separation uses the #f9fafb band, not shadow.
- Interactive depth is via color: hover darkens the primary (`{colors.primary-hover}`) or fills secondary controls with #f3f4f6.

## Shapes

- 8px (`{rounded.lg}`): homepage buttons (measured on the detected CTA) and cards in the homepage grid.
- 12px (`{rounded.xl}`): docs buttons, inputs, cards and the code-block frame (118 uses on the sampled docs page; 83 more on bottom corners).
- 6px (`{rounded.md}`) and 3px/4px: tags, tabs and small chips.
- 24px (`{rounded.2xl}`): large media.
- 9999px (`{rounded.pill}`): eyebrow pills, toggles and avatars.
- Segmented controls use partial radii: 12px 0 0 12px and 0 12px 12px 0 on the GitHub / star-count pair.

## Components

### Primary button (homepage)
- Fill `{colors.primary}`, white label, `{typography.button}` (16px/500), radius 8px, padding 10px 24px, height 46px ("Get started"). The nav "Sign in" variant is 60px high at the measured width because its label wraps.
- Hover: fill `{colors.primary-hover}`.

### Docs brand button
- Fill `{colors.brand-docs}`, white 14px/500 label, radius 12px, padding 10px 16px, 1px transparent border, `shadow-xs`.
- Outline "Brand": white fill, 1px border and text in `{colors.brand-docs}`.
- Secondary: fill `{colors.surface-subtle}`, 1px `{colors.border}` border, text `{colors.ink-docs-muted}`; hover fills #f3f4f6 and darkens text to #1c1e21.

### Text input
- Fill `{colors.surface-subtle}`, 1px `{colors.border}` border, 12px radius, 10px 12px padding, 14px/400 text in `{colors.ink-docs}`, full width; labels are 14px/500 `{colors.ink-docs}`. The homepage search field is a button-styled input with a leading search icon and a "K" shortcut hint.

### Card
- White ground, 1px `{colors.border}`, 12px radius, 24px padding, `shadow-xs`. The homepage technology cards are centered icon-over-label tiles with 48px/32px vertical/horizontal padding.

### Navigation
- White bar with logo, search, links in 14px/500, social icon buttons (GitHub, Discord, YouTube), theme toggle and blue "Sign in" with an arrow.

### Announcement bar and eyebrow pill
- Light bar with a small blue "New" badge (blue-100 fill #e1effe, blue text) and a blue text link.

### Code block
- Docs demos sit above a code panel whose bottom corners are rounded 12px with a 1px #e5e7eb border and a dark syntax theme (text colors #e1e4e8, #79b8ff, #b392f0 measured inside).

### Interaction states (measured hover pairs)
- Nav "Pricing & FAQ" primary button: fill from `{colors.brand-docs}` (oklch 0.488 0.243 264.376) to `{colors.brand-docs-hover}` (oklch 0.424 0.199 265.638); text stays white; radius 12px; height 58px; shadow-xs unchanged.
- Search button: text from #969faf placeholder gray (rgb 150, 159, 175) to #1c1e21, fill from #f9fafb to #f3f4f6, border stays #e5e7eb, radius 12px, height 36px.
- GitHub / star-count segmented pair: text from #4a5565 to #101828, fill from white to #f9fafb, border #e5e7eb, height 30px.
- Hover transitions change color only; there is no translation, scale or shadow change.
- Focus rings and disabled styles were not captured and are not specified here.

### Imagery and content notes (from the capture)
- The hero visual is a YouTube thumbnail of the "Flowbite Crash Course in 20 mins" with a presenter in a blue shirt on a blue background; blue in the image echoes the brand blue.
- Logos in the "Featured in" row are shown in muted gray tones at equal height, centered, with a small uppercase gray label above.
- Technology tiles use each framework's own colored mark (React blue, Vue green, Svelte orange, Angular red) on white, so color in the page body comes from third-party logos.
- A circular blue chat launcher floats at the right edge, the only floating element.
- The banner and eyebrow both use the pattern "badge + sentence + link", a repeatable announcement component.
- Copy style: short imperative buttons ("Get started", "Explore components", "Sign in"), counts in headlines and subheads ("600+", "100+", "60+").
- Section intros are two-part: a bold 36px heading and a 16px gray paragraph of two lines, both centered with about 560px measure.
- Footer: 96px top padding and 40px bottom padding, links in gray-500 at 14px.
- The documentation pages place each component demo above a copy-able code panel with a language tab and a "Copy" button; the demo and panel share the 12px radius and border.

## Design System Architecture

Flowbite is the component library itself. Sources:
- Theming docs, https://flowbite.com/docs/customize/theming/: "theming customization has been moved from the tailwind.config.js file to native CSS theme variables"; variables live in the Tailwind `@theme` block under namespaces `--color-{name}`, `--font-sans`, `--font-body`, `--font-mono`, `--spacing-{name}` and `--breakpoint-{size}`. A brand set is defined as `--color-fg-brand-subtle`, `--color-fg-brand`, `--color-fg-brand-strong`, `--color-brand-softer`, `--color-brand-soft`, `--color-brand`, `--color-brand-medium`, `--color-brand-strong`, mapped to blue 50 to 900. The plugin is enabled with `@plugin "flowbite/plugin"` and `@source "../node_modules/flowbite"`.
- Colors docs, https://flowbite.com/docs/customize/colors/: eight color families of ten shades; custom colors are added as `--color-{name}`.
- Source repository: https://github.com/themesberg/flowbite (MIT-licensed; official React, Vue, Svelte and Angular libraries and a Figma kit are listed on the homepage).
- Docs demo HTML uses semantic utility class names such as `bg-brand`, `bg-neutral-primary`, `bg-neutral-secondary-medium` and `rounded-base`, which resolve to the colors and radii in the Colors and Shapes sections above (measured with a browser probe on https://flowbite.com/docs/components/buttons/, /docs/forms/input-field/ and /docs/components/card/).

## Do's and Don'ts

Do:
- Use Inter, weight 800 for display, 400/500 for UI.
- Use one blue for actions; reserve green, red and yellow for status.
- Use 8px radii for homepage-style buttons and 12px for docs-style components; stay consistent within a surface.
- Alternate #ffffff and #f9fafb sections.
- Set secondary copy in #6b7280 and headings in #111827.
- Use 1px #e5e7eb borders with the faint 1px/2px shadow.
- Pair a solid blue button with a white outline button for the dual CTA.

Don't:
- Don't use pure black for text; use #111827 or #101828.
- Don't mix 8px and 12px radii in one component group.
- Don't add heavy shadows; Flowbite's depth is a 5 percent hairline shadow.
- Don't use weight 800 for body or buttons.
- Don't introduce a second brand hue.
- Don't center-align body copy in cards or docs; centering is for the hero and section intros.

## Responsive Behavior

- Measured at 1280px and 390px. The h1 falls from 60px/800 to 36px/700 with line-height 40px.
- The navigation compresses: at the narrower captured width the "Pricing & FAQ" and "Sign in" labels wrap to two lines; the mobile bar was not captured.
- The technology card grid is four columns at the captured width and reflows to fewer columns on smaller screens by Tailwind breakpoints (breakpoints are exposed as `--breakpoint-{size}` variables).
- Buttons keep their padding; small-screen hero pair layout was not measured.
- The video thumbnail scales with its container and keeps its aspect ratio.
- A fixed round chat button sits at the right edge of the viewport.

## Iteration Guide

1. White canvas, #111827 headings, #6b7280 body, Inter.
2. Headline 60px/800/-1.5px at desktop, 36px/700 on mobile.
3. Primary button: #1a56db fill, white 16px/500 label, 8px radius, 10px 24px padding; hover #1e429f.
4. For docs-style UI, use #1447e6 with 14px/500 text and 12px radii.
5. Surfaces: white and #f9fafb with #e5e7eb borders and `rgba(0,0,0,0.05) 0 1px 2px`.
6. Use a blue-100 pill for announcements and a green badge for success only.
7. Customize by overriding `--color-brand` and its related variables in the `@theme` block.
8. Recheck each value against the frontmatter before shipping.
