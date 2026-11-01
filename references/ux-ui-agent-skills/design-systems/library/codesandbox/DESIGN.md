---
version: alpha
name: CodeSandbox
category: "Developer Tools & IDEs"
description: "CodeSandbox's home page is near-black #0e0e0e with #161616 bands, a 120px/500 display headline (-6px tracking) in electric lime #d6fb41, Inter body text in #a3a3a3 and #f0f0f0, pale-lime #eaff96 buttons with #343434 text at 6px radius, and full-bleed lime sections with 10px-radius testimonial cards."
colors:
  canvas: "#0e0e0e"
  ink: "#a3a3a3"
  ink-strong: "#f0f0f0"
  ink-muted: "#858585"
  primary: "#eaff96"
  on-primary: "#343434"
  primary-hover: "#f5ffcb"
  accent-lime: "#d6fb41"
  lime-band: "#e3ff73"
  banner-lime: "#dcff50"
  ink-on-lime: "#0e0e0e"
  ink-on-lime-body: "#1d1d1d"
  surface-header: "#161616"
  surface-raised: "#1d1d1d"
  hairline: "#252525"
  accent-purple: "#b0a0ff"
typography:
  display:
    fontFamily: "\"TWK Everett\", Inter, \"Hevetica Neue\", Helvetica, apple-system, sans-serif"
    fontSize: 120px
    fontWeight: 500
    lineHeight: 120px
    letterSpacing: "-6px"
  display-mobile:
    fontFamily: "\"TWK Everett\", Inter, \"Hevetica Neue\", Helvetica, apple-system, sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 52.8px
    letterSpacing: "-2.4px"
  hero-subhead:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 24px
    fontWeight: 400
  banner:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 14px
    fontWeight: 400
    lineHeight: 14px
    letterSpacing: "-0.175px"
  body:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 18px
    fontWeight: 400
    lineHeight: 25.2px
    letterSpacing: "-0.45px"
  button:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 16px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 12px
    fontWeight: 400
  button-small:
    fontFamily: __Inter_f367f3, __Inter_Fallback_f367f3
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
rounded:
  xs: 4px
  sm: 6px
  md: 10px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 13px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 32px
  s9: 48px
  s10: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 13px 16px
    height: 42px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 28px
  button-small-dark:
    backgroundColor: "{colors.surface-raised}"
    textColor: "{colors.lime-band}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
    height: 28px
  link:
    textColor: "{colors.ink-on-lime}"
    typography: "{typography.banner}"
  nav:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.accent-lime}"
    textColor: "{colors.ink-on-lime}"
    rounded: "{rounded.md}"
    padding: 48px
  footer:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.ink}"
---

# CodeSandbox

## Overview

CodeSandbox (codesandbox.io) provides cloud development environments and an SDK for running code in isolated microVM sandboxes. The measured home page is titled "CodeSandbox: Instant Cloud Development Environments", and a full-width lime banner at the top announces "CodeSandbox is now part of Together AI! We have joined forces to launch CodeSandbox SDK and bring code interpretation to generative AI", with a dark "Learn more" button; the logo lockup reads "CodeSandbox — a Together AI company".

The page is a high-contrast, two-colour design: near-black surfaces and a single electric lime. The hero sets "Sandboxes built for scale" in enormous lime type over two lines, with the subhead "Programmatically spin up isolated sandboxes for instant code execution in your AI agents and code playgrounds", a pale-lime "Start for free" button and a lime text link "Try CodeSandbox SDK ›". A white strip of customer logos (Microsoft, Intel, NVIDIA, Atlassian, Uber, Stripe) follows. Then "Secure code generation at scale" with a six-item icon grid (Powerful APIs, Secure & isolated, Ready for scale, Continuous context, Quick start & auto resume, Customizable hibernation), a full-bleed lime section "Built for AI agents and more" with four use cases in dark text, a "Template universe — Start with your favorite stack." section, a row of lime testimonial cards with avatars, a stats row (users, repositories, organizations, lines of code), a closing "Join the future of building" with a tilted product screenshot, and a dark four-column footer.

Copy is short and technical ("Our microVM infrastructure allows us to spin up entire VMs, clone them and restore snapshots within 2 seconds"). There is no photography beyond small avatar portraits; icons are Material Symbols in round dark wells.

## Colors

The page uses the site's own `--colors-*` tokens, and every color below matches one of them.

- **Canvas `#0e0e0e`** (`--colors-background`, `--colors-black800`) — the body background and largest measured area.
- **Surface-header `#161616`** (`--colors-black700`) — the header, the long main band and the footer.
- **Surface-raised `#1d1d1d`** (`--colors-black600`) — dark buttons and raised chips; also the paragraph color inside lime sections (`ink-on-lime-body`).
- **Hairline `#252525`** (`--colors-black500`) — the only measured border color.
- **Ink `#a3a3a3`** (`--colors-foreground600`) — nav links, footer links and descriptions on dark. **Ink-strong `#f0f0f0`** (`--colors-text`) — headings and subheads on dark. **Ink-muted `#858585`** (`--colors-foreground700`) — secondary captions.
- **Primary `#eaff96`** (`--colors-lime500`) with **on-primary `#343434`** (`--colors-black100`) — every action button. Hover lightens the fill to **`#f5ffcb`** (`--colors-lime300`).
- **Accent-lime `#d6fb41`** (`--colors-lime800`) — the hero headline color and the testimonial card fill; the second-largest background by area.
- **Lime-band `#e3ff73`** (`--colors-lime600`) — the "Built for AI agents" section fill and the text of the dark "Learn more" button and SDK link. **Banner-lime `#dcff50`** (`--colors-lime700`) — the Together AI announcement bar.
- **Ink-on-lime `#0e0e0e`** — headings and quotes on lime surfaces; it is the most-read text color by character count because of the lime sections.
- **Accent-purple `#b0a0ff`** (`--colors-purple500`) — a small amount of text; the token file declares a full purple ramp (`#f2efff` to `#644ed7`) that the home page barely uses.

## Typography

- **TWK Everett** is named first in the display stack (`--fonts-display: TWK Everett, Inter, 'Hevetica Neue', Helvetica, apple-system, sans-serif`). The hero `display` is 120px/120px at weight 500 with -6px tracking (-5%). The measured TWK Everett character count (163) equals the combined count of the 120px, 96px, 88px and 56px headlines, all of which carry the same -5% tracking (-4.8px at 96px, -4.4px at 88px, -2.8px at 56px). The extractor's loaded-font list recorded only Inter and Material Symbols, so whether the Everett file rendered in the measured session was not confirmed.
- **Inter** (Next.js-hashed as `__Inter_f367f3`, variable 100–900) sets everything else: `body` at 18px/25.2px with -0.45px tracking (the dominant size), 22.4px descriptive text with -0.56px, the hero subhead at 24px, buttons at 16px/500, nav and small buttons at 12px, and the banner at 14px/14px with -0.175px.
- Tracking is negative on almost every size, following the token scale `--letterSpacings-1` to `-4` (-0.0125em to -0.075em).
- **Material Symbols Outlined** supplies icons.

Weights are 400 and 500 only for text. If TWK Everett is unavailable, use Inter Display or another neo-grotesk at weight 500 with -5% tracking.

## Layout

At 1280px the page is 5,429px tall. The header is 48px tall (`--sizes-navHeight: 48px`) on `#161616`, with the logo at left, seven 12px links (Features, Use Cases, SDK, Resources, Docs, Support, Pricing) and "Sign In" plus a small lime "Try for free" at right; ten header links/buttons were counted. The banner below is a 48px lime band. Main content spans 64px to 1216px.

Section rhythm is large: gaps of 16px, 24px and 4px inside components, 48px and 80px between groups; paddings of 16px and 48px dominate, with 80px and 128px for section tops. The token file defines a space scale (`--space-3: 16px`, `--space-4: 24px`, `--space-5: 32px`, `--space-7: 64px`, `--space-8: 80px`, `--space-9: 104px`). Headlines are centred over three-column icon grids or two-column text grids; testimonial cards run as a horizontal row wider than the viewport.

## Elevation & Depth

No box-shadows were measured on the page. Depth comes from surface contrast — `#0e0e0e` canvas, `#161616` bands, `#1d1d1d` raised controls — and from the jump between dark sections and full-bleed lime sections. The closing product screenshot is tilted in perspective to add dimension. Borders are rare: four elements use the `#252525` hairline.

## Shapes

- **Pill (9999px)** — the most frequent radius (21 elements): avatars, icon wells and small round controls.
- **10px** — testimonial cards and larger panels (14 elements).
- **6px** — primary buttons.
- **4px** — small header and banner buttons.

The token file also declares `--radii-0: 0px`. Shapes are simple rectangles with small radii; the visual weight is carried by colour blocks, not by rounded containers.

## Components

- **button-primary** — "Start for free": `#eaff96` fill, `#343434` Inter 16px/16px weight 500, 6px radius, `13px 16px` padding, 42px tall; "Explore templates" uses 16px padding and 48px height. Hover lightens the fill to `#f5ffcb`.
- **button-small** — header "Try for free": same colours, 12px/500 text, 4px radius, `8px 12px` padding, 28px tall.
- **button-small-dark** — banner "Learn more": `#1d1d1d` fill with `#e3ff73` text and border; on hover the text and border turn white and the fill `#292929`.
- **Text link with chevron** — "Try CodeSandbox SDK ›" in `#e3ff73`, lightening to `#f0ffb4` on hover.
- **nav / nav-link** — `#161616` bar; `#a3a3a3` 12px links that brighten to `#e0e0e0` on hover.
- **card** — testimonial: `#d6fb41` fill, 10px radius, 48px padding, 500×318px, dark quote text, round avatar, name and role.
- **Feature item** — centred icon in a round dark well, 16px–18px `#f0f0f0` title, `#a3a3a3` description.
- **footer** — `#161616`, 12px/19.2px weight-500 links in `#a3a3a3` with -0.15px tracking, four columns (Use Cases, Ecosystem, Explore, Company).

## Design System Architecture

The site ships a token set as CSS variables named by category: `--colors-*` (a black/neutral ramp 100–800 from `#343434` to `#0e0e0e`, foreground 100–800 from `#ffffff` to `#666666`, lime 100–800 from `#fcffee` to `#d6fb41`, plus purple, blue, orange, red, yellow and `vscode` ramps), `--space-*`, `--sizes-*`, `--fontSizes-8` to `--fontSizes-288`, `--lineHeights-90` to `-160`, `--letterSpacings-0` to `-4`, `--radii-*` and `--fonts-display`. CodeSandbox's public GitHub organisation https://github.com/codesandbox publishes `sandpack` (an embeddable code-editor component toolkit) and an official `vscode-theme`, but no general marketing design-system or token repository. The footer links a "Brand kit"; https://codesandbox.io/brand returned HTTP 403 to both WebFetch and curl, so its content is not used here.

## Do's and Don'ts

**Do**
- Keep the page near-black (`#0e0e0e` / `#161616`) and use lime as the only colour.
- Set hero headlines very large with -5% tracking, in lime `#d6fb41` on dark.
- Use pale lime `#eaff96` with dark `#343434` text for every action button.
- Alternate dark sections with full-bleed lime sections that use dark text.
- Use negative tracking on body text too, as the token scale does.
- Keep icons as outlined Material Symbols in round dark wells.

**Don't**
- Don't use white text on lime; text on lime is `#0e0e0e`/`#1d1d1d`.
- Don't add drop shadows; none were measured.
- Don't introduce rounded pill buttons; buttons are 4px–6px.
- Don't spread the purple ramp across the page — it appears only in a few words.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero `display` shrinks from 120px/120px to 48px/52.8px with -2.4px tracking; the hero subhead from 24px to 21px; body copy in the lime section from 18px/25.2px to 16px/25.6px with -0.2px tracking; the "Start for free" button keeps 16px text and `13px 16px` padding but measures 58px tall. The mobile header measured 112px tall on `#1d1d1d` with 14px link text, and 10 header links were still counted as visible with no menu toggle detected. Mobile content spans 16px to 374px. Mobile font sizes recorded: 16px, 14px, 22.4px, 20px, 18px, 48px, 21px, 12px, 24px, 32px. Breakpoint widths and the testimonial row's mobile behaviour were not measured.

## Iteration Guide

1. Set the canvas to `#0e0e0e` with a `#161616` 48px header.
2. Add the hero headline at 120px, weight 500, -6px tracking, in `#d6fb41`.
3. Place one `button-primary` (`#eaff96`, 6px radius) and a lime chevron link beside it.
4. Insert a full-bleed `#e3ff73` section with dark text to break the dark page.
5. Build testimonials as `#d6fb41` cards with 10px radius and 48px padding.
6. Check every colour against the `--colors-*` ramps; compare with https://codesandbox.io before shipping.
