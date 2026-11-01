---
version: alpha
name: Figma
category: "Design & Creative Tools"
description: "Figma's marketing site is a strict black-and-white frame (#ffffff canvas, #000000 ink and primary) set entirely in the custom figmaSans variable grotesque by Grilli Type at regular weight with tight negative tracking, with 8px-radius buttons, 24px cards and a 9999px pill, and all colour supplied by product imagery rather than chrome."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  ink-muted: "#0000008a"
  ink-muted-on-dark: "#ffffff99"
  hairline-on-dark: "#ffffff29"
typography:
  display:
    fontFamily: figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif
    fontSize: 56px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: "-1.25px"
  display-mobile:
    fontFamily: figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-1.25px"
  heading:
    fontFamily: figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif
    fontSize: 30px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.66px"
  subheading:
    fontFamily: figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
  body:
    fontFamily: figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif
    fontSize: 44px
    fontWeight: 400
    lineHeight: 48.4px
    letterSpacing: "-0.66px"
  button:
    fontFamily: figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif
    fontSize: 18px
    fontWeight: 330
    lineHeight: 25.2px
    letterSpacing: "-0.14px"
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 4.5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 22px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 12px 22px
    height: 46px
  link-on-dark:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
  notice-card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 24px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    padding: 120px 0px
    borderColor: "{colors.hairline-on-dark}"
---

## Overview

Figma's homepage (measured at 1280px desktop and 390px mobile, scroll height 8340px) is built as a monochrome stage. The page background is white (`#ffffff`), covering by far the largest share of the area, and the text is black (`#000000`). There is one action color, and it is also black. The measured primary call to action, "Get started for free", is a black fill with white text. Every bit of chromatic color on the page comes from the product imagery and illustrations that the page showcases, never from interface chrome.

The capture shows the hero as the clearest statement of this approach. A left-aligned headline, "The full-stack creative canvas", sits at 56px in regular weight. To its right a layered collage of product UI, photography and an orange card is the only colorful thing in view, and a black "Get started" button floats on the right at the same height as the collage. The rest of the first screen is white space.

Below the hero a sticky white navigation bar (measured 78px tall) carries the Figma logo mark, five labelled items (Products, Solutions, Community, Resources, Pricing), "Log in", a ghost "Contact sales" button and the solid black "Get started for free" button. A lead statement follows, "Move fast in the right direction on an AI-native canvas.", in black with the second sentence set in a 54% black tint (`#0000008a`).

Key characteristics:
- A single typeface family, figmaSans, is used for 2989 measured characters; figmaMono appears for only 51. The font is Figma's own commissioned typeface (see Typography).
- Headlines are set at regular weight (400) with negative letter-spacing, so hierarchy comes from size and gray-tinting rather than boldness.
- Black on white is the whole palette of the interface. Footer and the cookie notice invert it to white on black.
- Radii are small and a few: 2px, 4px, 8px, 16px, 24px and a pill. The button is 8px, not a pill.
- Elevation is rare and extremely soft; most separation comes from white space and 1px inset rings at 16 percent black.
- Voice is short, declarative, product-forward: "Design anything you can imagine", "Made so your whole team can go from WIP to ship, together."

Figma's own write-up of its web system says the previous system dated from 2020 and was rebuilt for a broader product platform, with a palette of 29 colors of which 25 are in use as backgrounds on web (source: https://www.figma.com/blog/updating-our-web-system-for-a-new-era/). The home page captured here uses only black and white as backgrounds, which means the wider palette is reserved for other pages, imagery and campaign panels. This file describes only what was measured on the homepage.

## Colors

All color values below are measured from the live homepage (computed styles and the `--fig-theme-*` custom properties on the root element) and not taken from third-party palette sites.

### Core
- **Canvas** (`{colors.canvas}` = `#ffffff`): page background, the navigation bar background, the dominant fill in the screenshot.
- **Ink** (`{colors.ink}` = `#000000`): body copy, headlines, nav links. Root variable `--fig-theme-fg` is `#000000`.
- **Primary** (`{colors.primary}` = `#000000`): background of the primary button; root variable `--fig-theme-btn-primary-bg` is `#000000`. Primary and ink are the same value; the role is distinct, so they are two tokens.
- **On primary** (`{colors.on-primary}` = `#ffffff`): text on the primary button, footer and cookie notice (`--fig-theme-btn-primary-fg`).

### Tints and structure
- **Ink muted** (`{colors.ink-muted}` = `#0000008a`): secondary lines such as the second sentence of the lead statement and form placeholder text. The page defines it as black mixed to 46 percent transparency (`--fig-theme-fg-muted`).
- **Ink muted on dark** (`{colors.ink-muted-on-dark}` = `#ffffff99`): secondary text on the black footer.
- **Hairline on dark** (`{colors.hairline-on-dark}` = `#ffffff29`): the single measured border color, used on the footer's 1px border.

### Other values defined in the page's CSS, not promoted to tokens
The root declares tint variables, all derived from black through `color-mix(in oklch, #000000, transparent N%)`:
- card background: 96% transparent (`--fig-theme-card-bg`)
- transparent-button background: 96% and hover 92% transparent
- ghost-button hover: 96% transparent
- form input background: 92% transparent
- border: 84% transparent; border hover: 60% transparent
- badge background: 92% transparent
- primary button hover: 15% transparent, which is the 0.85 alpha black measured on hover
- form error: foreground `#FFFFFF` on background `#972121` (`--fig-theme-form-error-bg`). This red is only declared in CSS, not seen in the capture, and is not a token here.

Figma's own blog says the system includes "black or white for body text, and three distinct red shades for form errors" (https://www.figma.com/blog/updating-our-web-system-for-a-new-era/), consistent with the above.

### Color usage rules observed
- Never fill a button with a hue; the page has none. The primary action is black and its hover is the same black at 85 percent opacity.
- Use gray only as a transparency of black or white, never as an opaque mid-gray.
- Let imagery carry color. In the capture the orange card, green photography and lime waveform appear only inside product mockups.
- On black surfaces (cookie notice, footer) use white text and white tints at 60 percent.

## Typography

### Typeface
figmaSans is Figma's custom typeface, designed by the Swiss-American type foundry Grilli Type; Figma's own article describes it as a contemporary grotesque and a variable font with weight, width and optical-size axes, in five families (Text, Display, Condensed Text, Condensed Display and Mono) (https://figma.com/blog/the-story-of-creating-figma-sans/). The page loads `figmaSans` at 320 and `figmaMono` at 400, and the computed weights seen on the page are 320, 330, 400 and 540, i.e. variable-font values rather than only the usual 400/500/700 stops.

The full stack declared on the page is `figmaSans, "figmaSans Fallback", "SF Pro Display", system-ui, helvetica, sans-serif`. The monospace stack is `figmaMono, "figmaMono Fallback", SF Mono, menlo, monospace`.

### Substitutes
figmaSans is proprietary and is not licensed for download from the page. When it cannot be loaded, the site falls back to a metric-adjusted fallback face and then to "SF Pro Display" and the system UI font. For any rebuild, use a neutral grotesque such as the system UI stack, keep weight at 400, and apply the same negative tracking to preserve the density.

### Scale (measured)
| Token | Size / line | Weight | Tracking | Role |
|---|---|---|---|---|
| `display` | 56px / 56px | 400 | -1.25px | Hero h1 (desktop) |
| `display-mobile` | 36px / 36px | 400 | -1.25px | Hero h1 at 390px |
| `body` | 44px / 48.4px | 400 | -0.66px | Large statement paragraphs |
| `heading` | 30px / 36px | 400 | -0.66px | Section lead h2 |
| `button` | 18px / 25.2px | 330 | -0.14px | Buttons and links |
| `subheading` | 16px / 22.4px | 400 | normal | h3, nav, UI labels |

Caution on naming: `body` here is the extractor's measured paragraph role. The paragraph with the largest read text on the home page is a 44px statement, so in this file `body` is a display-scale paragraph, not running text. The default root text is 16px / 23.2px weight 400, which equals the `subheading` token.

Other sizes measured by character count: 16px (1523), 30px (533), 18px (441), 44px (432), 14px (50), 56px (41), 12px (14), 88px (6). The root also declares named sizes such as display1 4.5rem, display2 2.75rem, title1 2.25rem, title2 2rem, title3 1.5rem, title4 1.375rem, bodyXL 1.125rem, bodyL 1rem, body 0.875rem, caption 0.875rem, badge 0.75rem and formLabel 0.6875rem.

### Principles
- Regular weight everywhere; 540 appears on only 21 characters, so bold is an emphasis exception.
- Tracking tightens as size increases: -1.25px at 56px, -0.66px at 30px and 44px, -0.14px at 18px, normal at 16px.
- Line height is close to 1.0 for display (56px on 56px) and about 1.1 for the 30px and 44px statements.
- The root defines line-height steps: none 1, tight 1.1, snug 1.2, normal 1.3, relaxed 1.4, loose 1.45.
- Hierarchy within a block is made by tinting: the first sentence in ink, the second in `{colors.ink-muted}`.
- Never use uppercase for headings; the measured text-transform is none on every sampled role.

## Layout

- Desktop capture width is 1280px. Root variables: `--fig-grid-max-content-width` 95rem (1520px), `--f-max-content-width` 1440px, `--fig-grid-gutter` and `--fig-grid-margin` 1rem, `--f-gutter` 24px, and a base of 4 columns (`--fig-grid-columns` 4) that expands at larger breakpoints.
- Section padding is 5rem (`--f-lego-block-padding`) and `--fig-section-block-padding` is 2.5rem.
- The hero is a three-part row: headline left (288px wide measured), collage centre, button right.
- Lead statements sit in a left column with a narrow measure, 795px wide for the h2 and the 44px paragraph.
- The navigation bar spans the full 1280px at 78px high.
- The footer has 120px vertical padding and spans the full width.

### Spacing scale
Spacing tokens measured in the capture: 2, 4, 4.5, 6, 8, 12, 16, 22, 24 and 30px. The root declares a 4px-based scale: 4, 6, 8, 12, 16, 24, 32, 40, 56, 64, 80, 120px (`--fig-space-*`). Common gaps measured: 2px (40 uses), 24px (35), 12px (14), 16px (13), 70px (8). Common paddings: 6px, 8px, 16px, 80px, 40px.

### Whitespace
The capture leaves large empty white areas between sections: the page is 8340px tall for only a handful of statements, because later sections hold lazy-loaded media that did not render in the screenshot. Do not read the empty areas as design intent beyond "generous".

## Elevation & Depth

The page is flat. Measured box shadows:
- `0 0 0 1px inset` at 16 percent black: the outline of the secondary ("Contact sales") button.
- Same inset ring at 40 percent black on hover.
- `0 1px 0 0` at 16 percent black: a one-pixel underline-style separator.

Declared but rare elevation tokens:
- `--fig-elevation-1`: `0 0.25rem 2rem` at 10 percent black.
- `--fig-elevation-2`: `0 1.5rem 4.375rem` at 10 percent black.

Both are very large blur and very low opacity, giving a diffuse lift rather than a defined edge. The cookie notice at bottom right is distinguished by being black on white, not by a shadow.

Depth is otherwise produced by layering imagery: in the hero, product screens overlap one another and photographs, which is the brand's "overlap, reveal, clustering" compositional idea that Figma describes in its rebrand coverage (https://type-01.com/figma-rebrands-with-a-fresh-custom-font-by-grilli-type/).

## Shapes

Measured border-radius values by use count: 2px (17), 9999px (15), 24px (11), 50% (4), 4px (4), 8px (3), 16px (1).

- `{rounded.xs}` 2px: small marks and tiny chips.
- `{rounded.sm}` 4px: inputs and small controls.
- `{rounded.md}` 8px: buttons (primary and secondary measured at 8px) and the cookie notice.
- `{rounded.lg}` 16px: single use on page.
- `{rounded.xl}` 24px: media panels and large cards; root `--fig-radius-24`.
- `{rounded.pill}` 9999px: pill chips and tags, and `--fig-radius-full`.
- 50%: circular icon buttons, such as the round black play button under the hero collage.

The root also declares radius 12 and 28 (`--fig-radius-12`, `--fig-radius-28`) which are not used on the measured page and are not tokens here.

## Components

### Primary button
- Fill `{colors.primary}` (#000000), text `{colors.on-primary}` (#ffffff).
- Typography `{typography.button}`: 18px at weight 330, tracking -0.14px.
- Radius `{rounded.md}` (8px), padding 12px 22px, height 46px, example width 193px ("Get started for free").
- Hover: background becomes black at 85 percent opacity; no color shift, no lift.
- The hero has a larger variant ("Get started") in the same black.

### Secondary button
- Transparent fill, black text, 1px inset ring at 16 percent black, height 46px, radius 8px ("Contact sales").
- Hover raises the ring to 40 percent black.
- Root variables also define transparent (4 percent) and ghost button backgrounds.

### Navigation
- White bar, 78px high, black text in the 16px `{typography.subheading}` style, tracking -0.14px.
- Dropdown items (Products, Solutions, Community, Resources) carry a small chevron; Pricing has none.
- Actions on the right: text link "Log in", outlined "Contact sales", solid "Get started for free".

### Link on dark
- White text in `{typography.button}` style, underlined in the cookie notice ("privacy policy."). The underline is the affordance.

### Notice card (cookie banner)
- Black (`{colors.ink}`) fill, white text, 16px/23.2px body, radius 8px, padding 24px, 440px wide, 340px tall as measured.
- Close icon top right, "Opt-Out" link with an arrow at the bottom.
- It is the only card the extractor found; it is a consent notice, not a content card.

### Footer
- Black background, white text, 120px vertical padding, 1px border `{colors.hairline-on-dark}`.
- Organised in labelled columns (the sampled text begins "Figma Socials", then "PRODUCT" with Figma Design, Figma Make and a "NEW" tag on Figma Weave). Product names are the brand's own at time of capture.

### Badges and forms (declared in CSS)
- Badge: foreground black, background black at 8 percent (`--fig-theme-badge-*`), 12px text (`badge` size 0.75rem).
- Form input: background black at 8 percent, placeholder at 46 percent, input text 0.875rem, label 0.6875rem; errors in white on `#972121`.

### Media and hero collage
- Product UI is shown in rounded device frames on top of photography; a black circular play button controls the loop. This is the one place where color and photography take over from the monochrome interface.

## Design System Architecture

Figma publishes the story of its own web design system: https://www.figma.com/blog/updating-our-web-system-for-a-new-era/. Facts taken from that page:
- The original system was built in 2020 and was rebuilt as the product expanded beyond design tools.
- A heavy "Flex" component that had ballooned to 48 variants was reduced to 24.
- The previous LEGO-inspired approach was replaced with an integrated one using Figma variables and nested components.
- Color themes are expressed as variable modes, so dark and light do not require separate component variants.
- Type is organised by headline and body sizes, not by device (no separate mobile, tablet and desktop stacks).
- Breakpoints are named XS to XXL.
- Names are kept identical in Figma and in code, down to variables and colors.

What the shipped CSS shows, consistent with that account:
- Custom properties are namespaced `--fig-*`: `--fig-theme-*` for semantic color roles (`bg`, `fg`, `fg-muted`, `border`, `btn-primary-bg`, `btn-secondary-fg`, `form-error-bg`, `badge-bg`), `--fig-space-*`, `--fig-radius-*`, `--fig-typography-size-*`, `--fig-typography-ls-*`, `--fig-typography-lh-*`, `--fig-typography-variation-*` for variable-font axes, `--fig-elevation-*`, `--fig-animation-*` (180ms, 250ms, 400ms) and `--fig-grid-*`.
- The font axes are exposed as variables: weight regular 400, bold 600, bolder 700, width normal 100, narrow 98, condensed 96, slant italic -6.
- Older `--f-*` and `--global-*` variables (grid columns, cursors, fonts) coexist with the newer `--fig-*` set.
- Letter-spacing tokens: none 0, slight 0, standard -0.04125rem, tight -0.078125rem, wide 0.03125rem.

Figma Sans itself is documented at https://figma.com/blog/the-story-of-creating-figma-sans/. Trademark and logo usage rules are on https://www.figma.com/using-the-figma-brand/ (a search result only; that page was not opened for this file, so no rule from it is used here).

## Do's and Don'ts

Do:
- Use black on white as the entire interface palette and let screenshots, photography and illustration supply the color.
- Set headlines at weight 400 with negative tracking (-1.25px at 56px, -0.66px at 30px).
- Keep buttons 46px tall with 8px radius and 12px 22px padding.
- Pair a black sentence with a 46-percent-black continuation to build hierarchy without a second typeface.
- Use white-on-black for consent notices and the footer.
- Use 1px inset rings at 16 percent black for outlined buttons.
- Keep copy short and concrete, naming the thing a user will make or do.

Don't:
- Don't add a brand hue to buttons or links; the measured primary is black.
- Don't use bold headlines; the page uses weight 400 and 320-330 for UI.
- Don't use pill-shaped primary buttons; the measured radius is 8px.
- Don't add drop shadows to cards; the page is flat and the declared shadows are at 10 percent opacity with wide blur.
- Don't use opaque mid-grays; derive all grays from alpha.
- Don't round everything equally; use 8px for controls and 24px for large media panels.
- Don't reproduce the Figma logo or product names for other brands (see the trademark page).

## Responsive Behavior

- Measured at 1280px (desktop) and 390px (mobile). The h1 steps from 56px to 36px with the same -1.25px tracking and line height equal to size.
- The root grid starts at 4 columns with a 1rem margin and gutter and `--f-gutter` of 24px with `--f-columns` 1 at small widths, and a maximum content width of 95rem (1520px) on large screens.
- Breakpoints are named XS through XXL according to Figma's own account of its system; the pixel values were not measured here.
- The desktop navigation (five dropdowns plus three actions) was captured at desktop width only; the mobile state was not captured, so this file makes no claim about its design.
- Type steps down rather than scaling fluidly: 56 to 36 for the h1, and the root exposes display1 4.5rem and display2 2.75rem for larger statement sizes.
- Touch target: buttons are 46px high on desktop.
- Section padding is 5rem on large layouts and 2.5rem for the section block variable.
- Images: hero collage is a fixed-aspect layered composition that sits between the headline and the button on desktop.

## Iteration Guide

1. Start with canvas `#ffffff`, ink `#000000`; add no accent.
2. Choose a headline size from the measured scale (56, 44, 30, 18, 16) and apply the matching tracking.
3. For an action, use `button-primary`: black, 8px radius, 46px high, 12px 22px padding, 18px at weight 330.
4. For a secondary action, use a transparent button with a 1px inset ring at 16 percent black.
5. For secondary text, use `{colors.ink-muted}` (black at 54 percent) rather than a gray hex.
6. Build dark regions from `{colors.ink}` fill, `{colors.on-primary}` text and `{colors.hairline-on-dark}` borders.
7. Add color only through imagery: product screens, photography, illustrations.
8. If you must add a new color, measure it on figma.com or cite Figma's own source first; the brand has a wider 29-color palette that this homepage does not expose.
9. Keep radii to the six measured steps (2, 4, 8, 16, 24, pill).
10. Check that every number in your output equals a number in the frontmatter.

Open questions for a future pass: the collapsed mobile navigation, the colored campaign panels referenced in Figma's blog, and hover and focus states beyond the two buttons measured.
