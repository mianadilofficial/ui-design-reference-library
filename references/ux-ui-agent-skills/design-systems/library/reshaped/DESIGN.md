---
version: alpha
name: Reshaped
category: "Design Systems"
description: "Reshaped is a React and Figma design system whose own site is a white canvas set in Inter (48px semibold display, 16px body), near-black ink #1f1f1f, a single electric blue #1760fa for primary actions, 6px-radius buttons, hairline outlines on faded neutral #ebebeb surfaces, and live component demos on a dotted grid."
colors:
  canvas: "#ffffff"
  ink: "#1f1f1f"
  primary: "#1760fa"
  on-primary: "#ffffff"
  surface-neutral: "#ebebeb"
  ink-muted: "#6e6f6f"
  ink-secondary: "#474747"
  link: "#0c55ef"
  ink-strong: "#191919"
  on-neutral: "#000000"
  critical: "#dc3246"
  positive: "#238649"
typography:
  display:
    fontFamily: Inter, "system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52px
  display-mobile:
    fontFamily: Inter, "system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 32px
  body:
    fontFamily: Inter, "system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Inter, "system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  input:
    fontFamily: Inter, "system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 16px
    height: 48px
  button-neutral:
    backgroundColor: "{colors.surface-neutral}"
    textColor: "{colors.on-neutral}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 4px 16px
    height: 48px
  button-critical:
    backgroundColor: "{colors.critical}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    height: 36px
  button-positive:
    backgroundColor: "{colors.positive}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    height: 36px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 0px 8px
    height: 36px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 24px 16px
---

## Overview

Reshaped's homepage is a documentation-brand hybrid: a white, almost chrome-free page that sells the library by showing it. A centred announcement pill ("v4.2: Content animation utilities and more") sits above a 48px semibold headline, "Modern design system for you and your agents", followed by a muted two-line description — "Reshaped provides accessible React and Figma components for building beautiful products or starting your own design system" — and a single action row: a monospace `npm install reshaped` box with a copy icon next to a solid blue "Learn more" button with an arrow.

Directly under the hero is a bordered, dotted-grid stage with tabs (React library, Figma library, Figma plugin, Agents) containing six live component demos: an auction card with a "Place a bid" button, a calendar with a blue-highlighted date range, a price range slider, an "Open menu" dropdown, a username and password form with a "Remember me" checkbox, and a toggle with a "Discount" badge and an avatar. Beneath it a three-column grid of feature statements (Design equals code, Responsive styles, Accessibility, Semantic design tokens, TailwindCSS integration, Internationalization, AI workflows, TypeScript, Framework support) runs over faint concentric-circle line art, then a "Trusted by teams and individuals around the world" logo row (Diagram, supernova, Razorpay, Restream, The Washington Post) and long customer quotes.

**Key Characteristics:**
- Inter at every level; hierarchy is size and weight 400, 500 and 600 only.
- One chromatic colour, `{colors.primary}`, reserved for the main button, selected states and links; everything else is neutral grey.
- Product demos instead of illustrations: the components on the page are the real components.
- Thin outlines and tiny low-opacity shadows rather than heavy elevation.
- Terse, technical microcopy, with a monospace snippet in the hero.

## Colors

`{colors.canvas}` (#ffffff) is the page. `{colors.ink}` (#1f1f1f) is the heading and body colour, `{colors.ink-strong}` (#191919) is the deepest text, `{colors.ink-secondary}` (#474747) and `{colors.ink-muted}` (#6e6f6f) step down for descriptions and captions, and `{colors.link}` (#0c55ef) is the darker blue used for text links such as "Learn more →" in the demo. `{colors.surface-neutral}` (#ebebeb) is the fill of neutral buttons such as "Open menu".

`{colors.primary}` (#1760fa) is the signature blue of the main call to action and of selected calendar cells and slider handles. Semantic colours appear on the Button docs page, measured as filled buttons: `{colors.critical}` (#dc3246) and `{colors.positive}` (#238649). The docs state that the colour options for Button are Neutral, Primary, Critical, Positive, Media and Inherit, which matches.

Reshaped's tokens are published as CSS variables with an `--rs` prefix, for example `--rs-color-background-primary`, and its documentation says "Reshaped color tokens automatically support dark mode". The header has a moon-icon theme toggle; a dark-mode palette is not documented here because only the light render was measured.

## Typography

Inter (variable, weights 100 to 900 loaded) is used everywhere, with the fallback stack `"system-ui", -apple-system, Roboto, Helvetica, Arial, sans-serif`. The site loads Inter itself, so no substitute is needed.

- **Display** (`{typography.display}`): 48px / 52px, weight 600; 28px / 32px on a 390px viewport. The hero headline wraps in two centred lines.
- **Body** (`{typography.body}`): 16px / 24px, weight 400, in grey for descriptions.
- **Button** (`{typography.button}`): 16px / 24px, weight 500 on the hero button; docs buttons measured 14px / weight 500.
- **Input** (`{typography.input}`): 14px / 20px, weight 400.

The CSS variables in the page expose a named type scale ("featured", "headline", "caption") from which sizes such as `--rs-font-size-featured-1: 2.5rem` and `--rs-font-size-headline-1: 5rem` come. Feature headings in the three-column grid are semibold and small; their descriptions are small grey regular text.

## Layout

The page is a centred column with a wide container. Header: logo and wordmark at the left, then Documentation, Examples, Changelog, plus Figma, GitHub and theme-toggle icons at the right. The hero is centred; the demo stage spans the full container in a 3 by 2 grid separated by hairlines; the feature list is a 3-column grid; the quotes sit in two text columns. Spacing derives from the token scale in `{spacing.s2}` (4px) steps: 4, 8, 12, 16, 20, 24 and 32px (`{spacing.s10}`). The documentation says the `unit` tokens such as `unit-x4` define this scale, and the site's variables include `--rs-unit-x5: 20px`, `--rs-unit-x6: 24px` and `--rs-unit-x10: 40px`.

## Elevation & Depth

Elevation is barely used. The site's variables define `--rs-shadow-outline: 0px 1px 2px -.5px #0000000f, 0px 2px 3px -1px #0000000f`, a nearly invisible two-layer shadow used to give bordered controls and cards a slight lift. The demo stage and cards rely on a 1px light outline instead, and the hero's background pattern is a faint dotted grid plus thin concentric circles. Button hover is expressed through opacity: a measured docs link dropped from opacity 1 to 0.8 on hover.

## Shapes

`{rounded.sm}` (6px) is the workhorse: it rounds buttons and cards. `{rounded.xs}` (4px) rounds small controls, tags and links; `{rounded.md}` (10px) rounds larger surfaces such as the demo stage; `{rounded.pill}` (9999px) is used for the version pill, badges and rounded buttons. The docs describe a `rounded` flag that makes Button radius circular.

## Components

**Primary button.** `{components.button-primary}`: `{colors.primary}`, white 16px / weight 500 label, 4px 16px padding, 48px tall, `{rounded.sm}`, trailing arrow icon. Measured on the docs page the standard solid button is 36px tall with a 14px label.

**Neutral button.** `{components.button-neutral}`: `{colors.surface-neutral}` fill with black text, 48px tall in the measured "Get started" instance.

**Critical and positive buttons.** `{components.button-critical}` and `{components.button-positive}`: same shape, 36px tall.

**Text input.** `{components.text-input}`: 14px text, 8px horizontal padding, light outline, label above ("Username", "Password"); the demo form also shows a password reveal icon and a blue checked checkbox.

**Card.** `{components.card}`: white, `{rounded.sm}`, 24px 16px padding and a 1px outline.

The Button docs list variants solid, outline and ghost for neutral buttons plus faded for coloured ones, and four sizes: small, medium (default), large (mobile) and xlarge (marketing pages).

## Design System Architecture

Reshaped is itself a design system, and its homepage is built with it; the supplied dsUrl is the brand's own site, not a separate documentation host. The [overview documentation](https://reshaped.so/docs/getting-started/overview) calls it "a professionally crafted design system, providing core components you would need in every project", with over 40 components, token categories (Color, Typography, Unit, Radius, Shadow, Animation, Viewport, Stacking order), theming (creating themes, scoped theming, runtime theming, generated themes) and integrations with Next.js, Tailwind CSS, Vite and Webpack. The [tokens overview](https://reshaped.so/docs/tokens/overview) says tokens are CSS variables prefixed `--rs`.

The [GitHub repository](https://github.com/reshaped-ui/reshaped) is an MIT-licensed pnpm monorepo with packages `reshaped` (components, hooks, tokens, synced to the Figma library), `@reshaped/headless` (unstyled components) and `@reshaped/utilities`. Built-in themes live as `theme.json` files under `packages/reshaped/src/themes/` (for example `figma` and `slate`), each defining tokens such as `backgroundPrimary` with a light `hex` and a dark `hexDark`. The site's measured primary (#1760fa) is within a rounding step of the `slate` theme's published `backgroundPrimary` (#1860fa), but this was not confirmed to be the theme the site uses, so the token here stays the measured value. Component CSS was measured on the [Button docs page](https://reshaped.so/docs/components/button).

## Do's and Don'ts

### Do
- Keep surfaces white and neutral and spend `{colors.primary}` only on the main action and selected states.
- Use Inter at weights 400, 500 and 600, with 48px semibold for hero headlines.
- Round controls with `{rounded.sm}` and keep paddings on the 4px scale.
- Show real components in live demos instead of mock illustrations.
- Prefer a 1px outline and a faint outline shadow to heavy drop shadows.

### Don't
- Don't use more than one saturated hue in a view; critical and positive are for states only.
- Don't use weights above 600 or uppercase button labels.
- Don't give cards large radii or deep shadows.
- Don't set descriptions in `{colors.ink}` at the same weight as headings; use `{colors.ink-muted}`.
- Don't hard-code colours when a semantic token exists.

## Responsive Behavior

Components accept responsive props, per the homepage feature "Components props support responsive responsive syntax to adjust their behavior based on the viewport size". The hero headline drops from 48px / 52px to 28px / 32px at 390px. Only the desktop and 390px renders were measured, so the exact column collapse is not documented here. The docs recommend the large button size for mobile layouts, and inputs keep a 36px to 44px height, so touch targets stay comfortable. Spacing tokens and radii stay constant across breakpoints.

## Iteration Guide

1. Change one component at a time and refer to tokens by name (`{colors.primary}`, `{rounded.sm}`, `{typography.button}`).
2. Start neutral: white canvas, `{colors.ink}` text, `{colors.surface-neutral}` buttons.
3. Add the blue only for the primary action; use `{colors.critical}` and `{colors.positive}` for status.
4. Keep 4px-based spacing and the 6px radius.
5. Re-run `node web/scripts/verify-designs.mjs --slug=reshaped` after each edit.
