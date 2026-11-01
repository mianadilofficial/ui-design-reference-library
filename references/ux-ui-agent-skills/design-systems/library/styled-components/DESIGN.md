---
version: alpha
name: styled-components
category: "CSS-in-JS"
description: "Documentation-first homepage of styled-components, the React CSS-in-JS library. Off-white canvas (#fcfcfc) over a #f5f5f5 panel, ink #14161b, a periwinkle-blue primary (#628eff) on 3px-radius buttons, Figtree 700 display at 40px, Inter body at 16px and Google Sans Code at 14px for code."
colors:
  canvas: "#fcfcfc"
  page-largest: "#f5f5f5"
  ink: "#14161b"
  primary: "#628eff"
  on-primary: "#ffffff"
  ink-muted: "#7a7a7a"
  footer-text: "#555555"
  code-text: "#221812"
  code-comment: "#8f7c70"
  code-blue: "#007cff"
  code-red: "#ff0024"
  hairline: "#0000001a"
  hairline-strong: "#00000033"
  nav-bg: "#ffffffd9"
typography:
  display:
    fontFamily: Figtree, "Figtree Fallback"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 46px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: "-0.16px"
  subheading:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 32px
    letterSpacing: "-0.16px"
  body:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: "-0.16px"
  button:
    fontFamily: Inter, "Inter Fallback"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 25.6px
    letterSpacing: "-0.16px"
  code:
    fontFamily: Google Sans Code
    fontSize: 14px
    fontWeight: 500
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 8px
  pill: 9999px
spacing:
  space-1: 4px
  space-2: 8px
  space-3: 12px
  space-4: 16px
  space-5: 20px
  space-6: 24px
  space-8: 32px
  space-10: 40px
  space-12: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 44px
    borderColor: "{colors.primary}"
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.hairline-strong}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  code-block:
    textColor: "{colors.code-text}"
    typography: "{typography.code}"
    backgroundColor: "{colors.page-largest}"
    rounded: "{rounded.lg}"
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 16px 20px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.footer-text}"
    borderColor: "{colors.hairline}"
---

## Overview

The styled-components homepage is a documentation site that doubles as a landing page. A persistent left sidebar (Home, Agents, Documentation, Native CanIUse with a "New" tag, Blog, Ecosystem, Releases, Donate with a "Help Needed" tag) sits beside a single long content column. A slim top bar carries the wordmark "styled-components", a GitHub icon and a theme toggle. The first screen shows a green-and-orange diamond logo, the headline "CSS for the <Component> Age" with the component name in a grey inline-code chip, the sub-line "Fast, expressive styling for React. Server components, client components, streaming SSR, React Native, all one API.", three badges (GitHub stars, npm version, monthly downloads), and three buttons: "Getting Started", "API Docs" and "GitHub".

To the right of the hero sits a "Latest post" card for "Celebrating a Decade of styled-components" and a live code editor whose sample renders real buttons. Below are a strip of customer logos under "Used by folks at", a carousel of screenshots of real sites under "To create beautiful websites like these", and then the getting-started tutorial: install command, a note box about the Babel plugin, and the first styled button, with live pink demo buttons.

The mood is a quiet developer-docs page: off-white, lots of mono text, small controls, and one soft periwinkle accent. The microcopy is friendly and informal ("That's all you need to do, you are now ready to use it in your app! (yep, no build step needed)", "We're so back!"). The product's own colour (the pink in the demo buttons) is used only inside the examples, not as the site's chrome.

## Colors

All values were measured from the live page.

- **Canvas (#fcfcfc)** is the page background and covers the largest part of the capture. **Page-largest (#f5f5f5)** is the surface behind the sidebar-adjacent content area and panels; it has the largest DOM area and is the code-block and card background.
- **Ink (#14161b)** is the most-read text color. **Ink muted (#7a7a7a)** is used for the search placeholder and secondary labels, and **footer text (#555555)** for the footer line.
- **Primary (#628eff)** is the fill of the Getting Started and API Docs buttons and of the active "Home" sidebar item's text. **On-primary (#ffffff)** is the label on it. The site's own CSS exposes this as an accent variable and a darker accent variant used for hover text.
- **Code colors:** code text is a warm near-black (#221812) and comments are warm grey-brown (#8f7c70), with blue (#007cff) for declarations and red (#ff0024) for interpolations and errors. Other palette hues exist in the site's variables, but only these appear among the most-read text colors.
- **Hairline (#0000001a)** is a 10 percent black border, and **hairline strong (#00000033)** a 20 percent black border used on the outlined GitHub button. **Nav background (#ffffffd9)** is a translucent white used for the top bar.

Measured hover behaviour: sidebar and card hovers tint the row with the accent at a very low alpha rather than changing text weight. The primary button hover reading in the extraction also moves the fill toward that low-alpha accent while the text stays white; I treat that single reading with caution because a white label on a near-white fill would be unreadable.

## Typography

Three families carry the page. **Figtree** at weight 700 is the display face, used only for the hero headline: 40px, line-height 46px, letter-spacing -0.8px. **Inter** is the interface and prose face: body at 16px/25.6px weight 400, headings at 18px (weight 400, 28.8px line-height) and 20px (weight 600, 32px line-height), all with -0.16px tracking. Buttons are Inter 16px weight 600. **Google Sans Code** at 14px, weight 500 is the dominant face by character count, since the page is mostly code samples, and it is also used in the search box and editor. The page's CSS also defines a generic mono variable pointing at the same family.

The headline's inline code chip uses the code family at heading size. Weights in use: 400 for reading, 500 for code, 600 for buttons and subheads, 700 for display. Tracking is slightly negative everywhere, from -0.16px on 16px text to -0.8px on the headline, which gives the Inter text a snug, modern feel.

## Layout

The site's CSS variables define the structure: a sidebar width of 18.75rem, a navbar height of 3.125rem (the measured nav is 50px tall), a content width of 120ch and a fluid gutter of clamp(2rem, 5vw, 5rem). The measured nav and footer containers are 1280px and 980px wide respectively at desktop.

Spacing tokens in the CSS are rem-based and convert at a 16px root to 4px, 8px, 12px, 16px, 20px, 24px, 32px, 40px and 48px (space-1, 2, 3, 4, 5, 6, 8, 10, 12 in the frontmatter), with larger steps up to 6rem. Measured layout gaps include 8px (most common), 12px, 16px, 24px, 32px and 48px.

The hero is a two-column composition: text and buttons left, a stack of the latest-post card and the code editor right. Below it the content is a single centered column with headings, short paragraphs, code boxes and centered live demos. Sections are separated by whitespace rather than rules; callouts such as the Babel note use a left border and a tinted background.

## Elevation & Depth

Depth is restrained. Two shadow recipes were measured, both black at 12 percent opacity: a small one (0 1px 3px) and a larger two-layer one (0 10px 20px plus 0 5px 12px). The larger shadow lifts the centered screenshot in the showcase carousel, where it is the only strongly elevated object on the page. Cards, code blocks and the editor rely on a #f5f5f5 fill and a hairline (#0000001a) border rather than shadows. The top bar is slightly translucent white (#ffffffd9), which gives a light glassy separation from scrolling content.

Do not add shadows to buttons or cards; keep elevation for the carousel and for overlays such as the search modal, which in the site's variables uses the same 12 percent shadow colour.

## Shapes

Radii measured on the page: 2px (xs), 3px (sm, the primary button and the code-chip buttons), 4px (md, the search box), 8px (lg, cards and code blocks) and a pill (9999px) plus 50 percent for round elements. The site's own variables name the scale sm 2px, md 4px, lg 8px, xl 12px and full 9999px; the 3px button radius is a measured exception between sm and md.

The overall shape language is rectangular and tight: small radii on controls, a larger 8px on containers, no big pill buttons. The logo is a rotated square (diamond) split into green and orange facets, echoing this geometric, angular feel.

## Components

**Primary button.** 44px tall, padding 8px 16px, radius 3px, fill #628eff with a 1px border of the same colour, white Inter label at 16px/600 with a small leading icon. "Getting Started" and "API Docs" share this style.

**Outline button.** The GitHub button is transparent with a 1px #00000033 border, ink text and a GitHub icon, same radius and height family.

**Search field.** A 36px-tall box with a 4px radius, #fcfcfc fill, a 1px light grey border and "⌘ K" key hints, muted text that turns to ink on hover.

**Sidebar item.** Icon plus label, Inter 16px, ink-secondary colour; the active item is accent-coloured, hover adds a very light accent tint behind the row. Small status tags ("New" in green, "Help Needed" in pink) sit at the right.

**Cards.** The latest-post card has a #f5f5f5 fill, hairline border, 8px radius, an orange uppercase "LATEST POST" label, the date, a 16px title and a muted description.

**Code blocks.** Inline editor and install blocks use Google Sans Code 14px on #f5f5f5, 8px radius, hairline border, with warm-brown comments and blue/red tokens.

**Footer.** Muted #555555 text, "Hosted on Vercel. For outreach, please contact @quantizor.", separated by a hairline border.

## Design System Architecture

styled-components documents how a theme works in its own docs (https://styled-components.com/docs/advanced): a `ThemeProvider` passes a theme object through React context to every styled component beneath it, themes can be functions of the parent theme, and `useTheme` / `withTheme` read it outside styled components. The API reference (https://styled-components.com/docs/api) lists `styled`, `css`, `createGlobalStyle`, `keyframes`, `ThemeProvider`, `createTheme`, `StyleSheetManager`, `useTheme`, `withTheme` and `isStyledComponent`; it describes `createTheme` as turning a plain theme object into CSS custom property references for React Server Components compatibility. The repository (https://github.com/styled-components/styled-components) describes the project as MIT licensed and largely maintained by one person.

The site itself uses a CSS custom property system prefixed `--sc-`: colour tokens (accent, accentDark, surface, surfaceRaised, border, borderStrong, text, textSecondary, textMuted, navBg, code* tokens), a numbered palette, `--sc-space-*` rem steps, `--sc-text-*` sizes, `--sc-radius-*`, `--sc-fontWeight-*`, `--sc-leading-*`, `--sc-duration-*` (100ms, 200ms, 300ms), an easing curve and `--sc-layout-*` dimensions, plus font variables `--font-sans`, `--font-display` and `--font-mono`. The colour values are expressed in oklch. A logo repository is referenced from the GitHub page but I did not open it, so no official logo or brand-colour guidance is cited here.

## Do's and Don'ts

Do keep the canvas off-white (#fcfcfc) and use #f5f5f5 for panels, cards and code.
Do use #628eff only for primary actions and the active navigation item, with white labels.
Do set code in the monospace face at 14px and keep prose in Inter at 16px with slightly negative tracking.
Do keep controls at 3px to 4px radii and containers at 8px.
Do use hairlines (#0000001a) to separate surfaces instead of shadows.

Don't use the pink from the demo buttons as chrome; it belongs to the examples.
Don't use Figtree outside the hero display, or Inter at weight 700.
Don't add large pill buttons or heavy shadows.
Don't set muted text lighter than #7a7a7a on the off-white canvas.
Don't hide the sidebar structure; the docs navigation is part of the identity.

## Responsive Behavior

The measured mobile capture at 390px keeps the same display style for the headline (Figtree 40px/46px, -0.8px tracking, weight 700). The site's layout variables suggest a fluid gutter that scales with the viewport width (clamp between 2rem and 5rem), but I did not measure the layout at mobile width, so sidebar collapse and column stacking behaviour are not documented here.

For implementation, keep touch targets at the 44px button height measured on desktop, let code boxes keep their monospace size, and preserve the translucent top bar.

## Iteration Guide

1. Start with canvas, page-largest, ink, primary and on-primary; add the hairline and code colours second.
2. Set the type stack: Figtree 700 for the hero only, Inter for everything else, Google Sans Code 14px for code.
3. Build the sidebar plus content column using the rem-based spacing steps (4px to 48px).
4. Add the primary and outline buttons at 44px with 3px radius.
5. Add cards and code blocks with 8px radius and hairline borders.
6. Keep any new colour traceable to the site's own variables; avoid introducing new hues in the chrome.
