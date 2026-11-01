---
version: alpha
name: Fluent UI React
category: "Design Systems"
description: "Microsoft's Fluent 2 as shipped in Fluent UI React v9: Segoe UI at 14px/20px body and a 10-step semibold ramp up to 68px, neutral #242424 ink on white, a #0f6cbd brand-80 primary with 4px-radius, 32px-high buttons, #d1d1d1 strokes and a documented 2-to-40px radius and 2-to-32px spacing scale."
colors:
  canvas: "#ffffff"
  ink: "#242424"
  ink-docs: "#11100f"
  ink-secondary: "#424242"
  ink-docs-muted: "#73828c"
  primary: "#0f6cbd"
  on-primary: "#ffffff"
  primary-hover: "#115ea3"
  brand-60: "#0f548c"
  brand-90: "#2886de"
  brand-160: "#ebf3fc"
  surface-subtle: "#fafafa"
  surface-hover: "#f5f5f5"
  stroke: "#d1d1d1"
  stroke-hover: "#c7c7c7"
  hairline: "#e0e0e0"
  docs-selected: "#0078d4"
typography:
  display:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 68px
    fontWeight: 600
    lineHeight: 92px
  large-title:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 40px
    fontWeight: 600
    lineHeight: 52px
  title-1:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 32px
    fontWeight: 600
    lineHeight: 40px
  title-3:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 24px
    fontWeight: 600
    lineHeight: 32px
  subtitle-1:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 20px
    fontWeight: 600
    lineHeight: 28px
  subtitle-2:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 16px
    fontWeight: 600
    lineHeight: 22px
  body:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  caption-1:
    fontFamily: '"Segoe UI", "Segoe UI Web (West European)", -apple-system, "system-ui", Roboto, "Helvetica Neue", sans-serif'
    fontSize: 12px
    fontWeight: 400
    lineHeight: 16px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 6px
  xl: 8px
  2xl: 12px
  3xl: 16px
  4xl: 24px
  5xl: 32px
  6xl: 40px
  circular: 10000px
spacing:
  xxs: 2px
  xs: 4px
  s-nudge: 6px
  s: 8px
  m-nudge: 10px
  m: 12px
  l: 16px
  xl: 20px
  xxl: 24px
  xxxl: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 5px 12px
    height: 32px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-default:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 5px 12px
    height: 32px
    borderColor: "{colors.stroke}"
  button-default-hover:
    backgroundColor: "{colors.surface-hover}"
    textColor: "{colors.ink}"
    borderColor: "{colors.stroke-hover}"
  button-subtle:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 5px 12px
    height: 32px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px 12px
    height: 30px
    borderColor: "{colors.stroke}"
  docs-nav-item:
    backgroundColor: "{colors.docs-selected}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
---

## Overview

Fluent UI React (https://react.fluentui.dev, redirected to https://storybooks.fluentui.dev/react/) is Microsoft's open-source implementation of the Fluent 2 design system for the web. The product here is the component library and its tokens, not a marketing page. The homepage the extractor captured is the Storybook "Concepts / Introduction" page: a 224px-wide left sidebar (logo, "Fluent UI React v9", a "Find components" search field, a tree of Concepts / Theme / Components) and a content column headed "Fluent UI React Components v9.74.9", a wide rounded hero artwork with a large "9" in translucent purple and blue glass shapes, a hairline rule, then "What's new".

The hero image is the only expressive element; everything else is functional and neutral: white background, near-black #11100f text in the docs shell, Segoe UI at 14px, and one blue. The selected sidebar item ("Introduction") is filled with #0078d4 and white text, a 4px-radius rounded bar. Sidebar groups (Concepts, Theme, Components) are bold 14px labels with chevrons; items have page icons.

Because the shell is Storybook, this file separates three layers:
- **Docs shell** (measured on the captured page): canvas #ffffff, ink #11100f, muted #73828c, selected row #0078d4, hairline #e0e0e0.
- **Component layer** (measured in Storybook story frames for Button and Input, and read from the official token source): neutral #242424 ink, #d1d1d1 stroke, brand #0f6cbd, radius 4px, 32px control height.
- **Official token source** (https://github.com/microsoft/fluentui/tree/master/packages/tokens/src): global colors, brand ramp, radii, spacings, typography.

Key characteristics:
- Neutral first: surfaces are white and #fafafa; brand blue appears on primary actions, selection and links only.
- Segoe UI with a system-font fallback chain; semibold (600) for every title style, regular (400) for body.
- Small radius (4px) for controls, with a scale up to 40px and a circular value.
- Strokes are 1px #d1d1d1; focus uses thicker strokes (2px to 4px strokeWidth tokens).
- Controls are compact: 32px buttons, 30px inputs, 14px text.
- Designed for theming: every value is a token (colorNeutralForeground1, colorBrandBackground, borderRadiusMedium, spacingHorizontalM) and themes are generated from a 16-step brand ramp.

## Colors

### Neutrals
- **Canvas** (`{colors.canvas}` = #ffffff): page and control background (colorNeutralBackground1).
- **Surface subtle** (`{colors.surface-subtle}` = #fafafa): story canvas band and secondary surface (colorNeutralBackground2; measured in the story frames).
- **Surface hover** (`{colors.surface-hover}` = #f5f5f5): hover fill for default and subtle buttons (colorNeutralBackground1Hover; measured).
- **Ink** (`{colors.ink}` = #242424): primary text in components (colorNeutralForeground1; measured as button and input text).
- **Ink secondary** (`{colors.ink-secondary}` = #424242): secondary text (colorNeutralForeground2).
- **Stroke** (`{colors.stroke}` = #d1d1d1): control borders (colorNeutralStroke1); hover #c7c7c7 (`{colors.stroke-hover}`, measured).
- **Hairline** (`{colors.hairline}` = #e0e0e0): divider lines in the docs shell and colorNeutralStroke2.

### Brand
The default web brand is the "brandWeb" ramp in packages/tokens/src/global/brandColors.ts: 10 #061724, 20 #082338, 30 #0a2e4a, 40 #0c3b5e, 50 #0e4775, 60 #0f548c, 70 #115ea3, 80 #0f6cbd, 90 #2886de, 100 #479ef5, 110 #62abf5, 120 #77b7f7, 130 #96c6fa, 140 #b4d6fa, 150 #cfe4fa, 160 #ebf3fc.
- **Primary** (`{colors.primary}` = #0f6cbd, brand 80): fill of the primary button. The Storybook Button page measures it as the background of the "Primary" demo.
- **Primary hover** (`{colors.primary-hover}` = #115ea3, brand 70): measured hover fill of the primary button.
- **Brand 60** (`{colors.brand-60}` = #0f548c): pressed state in the ramp. **Brand 90** (`{colors.brand-90}` = #2886de), **Brand 160** (`{colors.brand-160}` = #ebf3fc): ramp ends used for tints.
- **On primary** (`{colors.on-primary}` = #ffffff): colorNeutralForegroundOnBrand.

### Docs shell colors (Storybook theme)
- **Ink docs** `{colors.ink-docs}` #11100f: headings and body in the docs shell (843 characters).
- **Ink docs muted** `{colors.ink-docs-muted}` #73828c: sidebar secondary text and the version number.
- **Docs selected** `{colors.docs-selected}` #0078d4: the selected sidebar row. This is the Storybook theme's brand color and not the same blue as the component primary (#0f6cbd); the two blues coexist on the page.

### Notes
- The lightColor.ts source comments mention #0078d4 for brand 80, but the actual ramp values (and the measured button) are #0f6cbd. The measured value wins.
- Fluent also ships shared palettes (red, green, orange and others) for status and avatar colors; they are not part of this homepage and are not tokens here.
- Shadows use black alphas: ambient rgba(0,0,0,0.12), key rgba(0,0,0,0.14), lighter variants 0.06 and 0.07, darker variants 0.20 and 0.24.

## Typography

### Family
`fontFamilyBase`: 'Segoe UI', 'Segoe UI Web (West European)', -apple-system, BlinkMacSystemFont, Roboto, 'Helvetica Neue', sans-serif. Monospace: Consolas, 'Courier New', Courier, monospace (Storybook code samples measured in Cascadia Code). Numeric: Bahnschrift with Segoe fallbacks.

### Substitutes
Segoe UI is a Microsoft system font and is not redistributable on non-Windows platforms; the chain falls through to the platform UI font (San Francisco on Apple, Roboto on Android and ChromeOS). Use those, or Inter, to approximate it.

### Type ramp (official, packages/tokens/src/global/typographyStyles.ts and fonts.ts)
| Style | Size / line | Weight |
|---|---|---|
| display | 68px / 92px | 600 |
| largeTitle | 40px / 52px | 600 |
| title1 | 32px / 40px | 600 |
| title2 | 28px / 36px | 600 |
| title3 | 24px / 32px | 600 |
| subtitle1 | 20px / 28px | 600 |
| subtitle2 | 16px / 22px | 600 |
| body2 | 16px / 22px | 400 |
| body1 | 14px / 20px | 400 |
| caption1 | 12px / 16px | 400 |
| caption2 | 10px / 14px | 400 |

Note: the Fluent 2 typography page lists subtitle1 with a 26px line height, while the token source uses 28px (lineHeightBase500); this file follows the token source.

Weights available: regular 400, medium 500, semibold 600, bold 700. Strong variants (body1Strong 600, body1Stronger 700) exist for each text size.

### Measured usage
- Docs shell: Segoe UI 14px/600 for sidebar group labels; 13px/700 labels; the page title is large and semibold.
- Button: 14px / 20px, weight 600 (measured on all four appearances).
- Input: 14px / 20px, weight 400.
- Docs shell tracking is -0.14px on some 14px text.

### Principles (Fluent 2)
- "Clear typographical hierarchy organizes and structures content" (https://fluent2.microsoft.design/typography).
- Semibold is the only emphasis weight for titles; body stays regular.
- Use the base font, Segoe UI, for most scenarios.

## Layout

- Docs shell: fixed 224px sidebar at the left, content column starting at about 260px, content width up to about 663px in the 960px capture; 1280px desktop measurement.
- The hero artwork spans the content column at a 2.5:1 ratio with rounded corners.
- A one-pixel hairline (#e0e0e0) separates the hero from "What's new".
- Sidebar rows: 14px text, about 25px tall, 4px-radius selection, 22px left padding for nested items (measured padding 5px 0 4px 22px on the page title element).
- Component spacing follows the documented scale: none 0, XXS 2px, XS 4px, sNudge 6px, S 8px, mNudge 10px, M 12px, L 16px, XL 20px, XXL 24px, XXXL 32px.
- Horizontal and vertical variants exist (spacingHorizontalM, spacingVerticalM).
- Controls: button padding 5px 12px (measured), input padding 0 12px.

## Elevation & Depth

Fluent v9 defines a shadow ladder, each a pair of an ambient and a key shadow (packages/tokens/src/utils/shadows.ts):
- shadow2: `0 0 2px ambient, 0 1px 2px key`
- shadow4: `0 0 2px ambient, 0 2px 4px key`
- shadow8: `0 0 2px ambient, 0 4px 8px key`
- shadow16: `0 0 2px ambient, 0 8px 16px key`
- shadow28: `0 0 8px ambient, 0 14px 28px key`
- shadow64 follows the same pattern for the largest surfaces.
Ambient is rgba(0,0,0,0.12) and key rgba(0,0,0,0.14) in the light theme (colorNeutralShadowAmbient, colorNeutralShadowKey); darker variants for emphasis are 0.20 and 0.24.

In the measured pages the default and primary buttons have no shadow at all; elevation appears on popovers, menus, dialogs and cards. Docs shell elements are flat, with an inset 1px #d9e8f2 ring on the skip link and a 1px inset hairline under the header. A modal scrim measured as a huge 1280px spread of rgba(0,0,0,0.5).

## Shapes

Official border-radius tokens: none 0, small 2px, medium 4px, large 6px, xLarge 8px, 2xLarge 12px, 3xLarge 16px, 4xLarge 24px, 5xLarge 32px, 6xLarge 40px, circular 10000px.
- 4px (`{rounded.md}`, borderRadiusMedium): all measured buttons, inputs and docs rows (130 uses on the docs page; every button measured).
- 2px (`{rounded.xs}`): small elements such as checkboxes.
- 3px: a one-off measured on the docs page.
- 6px (`{rounded.lg}`): larger controls.
- 8px to 16px: cards, dialogs and surfaces.
- circular: avatars, badges, pills and toggles ("100%" measured on 3 elements).
- Stroke widths: thin 1px, thick 2px, thicker 3px, thickest 4px.

## Components

### Button (Storybook "Appearance" story)
All appearances share height 32px, padding 5px 12px, radius 4px, 14px/20px weight 600.
- **Primary**: fill `{colors.primary}`, white text; hover fill `{colors.primary-hover}`; no border.
- **Default (secondary)**: fill #ffffff, text `{colors.ink}`, 1px `{colors.stroke}` border; hover fill `{colors.surface-hover}` and border `{colors.stroke-hover}`.
- **Outline**: transparent fill, 1px #d1d1d1 border; hover border #c7c7c7.
- **Subtle**: transparent fill, no border; hover fill #f5f5f5.
- Other documented stories: shape, icon, size, disabled, loading, with-long-text.

### Measured hover pairs (Button story)
- Default: fill #ffffff to #f5f5f5; border #d1d1d1 to #c7c7c7; text stays #242424.
- Primary: fill #0f6cbd to #115ea3; text stays #ffffff; border stays transparent.
- Outline: fill stays transparent; border #d1d1d1 to #c7c7c7.
- Subtle: fill transparent to #f5f5f5; text stays #242424.
- Hover changes only fill and border; no shadow, size or weight change.
- Pressed and focus states are defined in the token source (brand 60 for pressed brand fills; thick strokes for focus) but were not measured in the story frames.

### Input (Storybook "Appearance" story)
- 14px/400, text #242424, 30px high control, 12px horizontal padding, 4px radius, 1px #d1d1d1 border, white fill. The story page also measures #f5f5f5 and #292929 backgrounds (their elements were not identified).
- Field wraps Input with label, hint, validation message, required and size stories.

### Docs navigation item
- Selected: #0078d4 fill, white text, 4px radius, page icon at left. Unselected: transparent with #11100f text.
- Group headers with chevrons (Concepts, Theme, Components) toggle expansion.

### Skip link
- "Skip to sidebar": #f6f9fc fill, #2e3438 text, 12px/700, 4px radius, padding 10px 15px with a 1px inset #d9e8f2 ring; moved off-screen until focused.

### Hero artwork
- A rounded, soft-gradient glass illustration of the number 9 in lilac, pink and teal, used for the v9 release; it is content, not a component.

### Search field
- Rounded rectangle with a magnifier icon and the placeholder "Find components".

## Design System Architecture

Fluent is a published design system, and this site documents its React implementation:
- Repository and token source: https://github.com/microsoft/fluentui. Tokens live in packages/tokens/src: global/colors.ts (grey, white, black and alpha ramps), global/brandColors.ts (brandWeb and brandTeams ramps), alias/lightColor.ts and darkColor.ts (semantic aliases generated by the token pipeline), global/borderRadius.ts, spacings.ts, strokeWidths.ts, fonts.ts and typographyStyles.ts, utils/shadows.ts.
- Theme: webLightTheme is created by createLightTheme(brandWeb) from a 16-step brand ramp (https://github.com/microsoft/fluentui/blob/master/packages/tokens/src/themes/web/lightTheme.ts). A Teams brand ramp (brandTeams, base #5b5fc7 at step 80) shows how re-theming works; the web ramp's step 80 is #0f6cbd.
- Usage: wrap an app in FluentProvider with the theme and consume `tokens.colorNeutralForeground1` style variables, as described in the package documentation (search result: @fluentui/react-theme usage; the package README itself was not opened).
- Design guidance: Fluent 2 at https://fluent2.microsoft.design lists four principles: "Natural on every platform", "Built for focus", "One for all, all for one" and "Unmistakably Microsoft" (https://fluent2.microsoft.design/design-principles). Color tokens are grouped as neutral, brand, status and generic (https://fluent2.microsoft.design/color-tokens).
- Documentation: Storybook at https://storybooks.fluentui.dev/react/, with Concepts (Developer, Migration, Recipes, Package Maturity Levels), Theme (Border Radii, Colors, Fonts, Shadows, Spacing, Stroke Widths, Typography, Theme Designer) and Components sections.
- Token naming: colorNeutralForeground1, colorNeutralBackground1, colorBrandBackground, colorNeutralStroke1, borderRadiusMedium, spacingHorizontalM, fontSizeBase300, lineHeightBase300, fontWeightSemibold, strokeWidthThin.

## Do's and Don'ts

Do:
- Reference semantic tokens, not raw hex values, so themes (dark, high contrast, Teams) work.
- Use the brand color for the single most important action in a view.
- Keep controls 32px high with 4px radii and 14px text.
- Use semibold for titles and regular for body.
- Use #d1d1d1 strokes on controls and #e0e0e0 hairlines for dividers.
- Prefer native platform fonts when Segoe UI is unavailable.
- Use the documented spacing ladder (2, 4, 6, 8, 10, 12, 16, 20, 24, 32).

Don't:
- Don't use the Storybook selection blue (#0078d4) as a component color; the component brand is #0f6cbd.
- Don't invent radii outside the scale; use 4px by default.
- Don't use bold for titles; semibold (600) is the title weight.
- Don't add drop shadows to flat buttons.
- Don't place brand-filled buttons side by side; use one primary and defaults.
- Don't copy colors from the lightColor.ts comments; read the ramp.

## Responsive Behavior

- The Storybook shell is a persistent sidebar plus content, measured at 1280px width; narrower widths collapse the sidebar in Storybook (not captured).
- Components are density-fixed at 32px for buttons and 30px for inputs; sizes small, medium and large are documented stories for Button, Input and Field.
- Type does not scale by breakpoint inside components; titles stay on the ramp.
- Fluent 2 states that experiences "should adapt to the device you're on" (https://fluent2.microsoft.design/design-principles).
- Spacing and radii are fixed tokens at every width.
- The hero artwork scales with the column width and keeps its aspect ratio.

## Iteration Guide

1. Wrap the UI in the theme; use `{colors.canvas}` and `{colors.ink}` for base surfaces and text.
2. Set body at 14px/20px weight 400, titles in the semibold ramp.
3. Make one primary button: `{colors.primary}`, white 14px/600 text, 32px high, 5px 12px padding, 4px radius; hover `{colors.primary-hover}`.
4. Make secondary actions default buttons with a 1px `{colors.stroke}` border.
5. Use inputs 30px high with 12px padding and a 1px `{colors.stroke}` border.
6. Separate regions with `{colors.hairline}` and `{colors.surface-subtle}`.
7. Add elevation only to overlays, using the shadow ladder.
8. To rebrand, generate a new 16-step ramp and pass it to createLightTheme rather than editing component colors.
9. Verify every token name against packages/tokens/src before publishing.
