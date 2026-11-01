---
version: alpha
name: Preact
category: "Frontend Frameworks"
description: "Preact (preactjs.com) is a white #ffffff docs-style site under a full-width Preact purple #673ab8 hero, system-ui type (64px/100 thin section headings, 16px/26.4px body in #444444), uppercase letter-spaced 4px-radius buttons with 3px #eeeeee borders, and dark #101725 code blocks with Material-style syntax colours (#ff696d, #ffcb6b, #c792ea)."
colors:
  canvas: "#ffffff"
  ink: "#444444"
  primary: "#673ab8"
  on-primary: "#ffffff"
  brand-dark: "#38235c"
  search-bg: "#58319d"
  search-text: "#cccccc"
  search-border: "#7447c5"
  code-bg: "#101725"
  code-text: "#dddddd"
  heading: "#000000"
  code-tag: "#ff696d"
  code-function: "#ffcb6b"
  code-keyword: "#c792ea"
  button-bg: "#eeeeee"
  footer-bg: "#f2f2f2"
  footer-text: "#555555"
typography:
  display:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
    textTransform: uppercase
  display-mobile:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    textTransform: uppercase
  heading:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 64px
    fontWeight: 100
    lineHeight: 105.6px
    letterSpacing: 1.28px
  subheading:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 35.2px
    fontWeight: 300
    lineHeight: 42.24px
    letterSpacing: 0.352px
  body:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
  button:
    fontFamily: system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 26.4px
    letterSpacing: 1.2px
    textTransform: uppercase
  code:
    fontFamily: source-code-pro, Menlo, Consolas, Monaco, "Andale Mono", "Courier New", monospace
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 21.6px
  search:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 500
  input:
    fontFamily: Arial
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4px
  md: 5px
  lg: 7px
spacing:
  s1: 2px
  s2: 3px
  s3: 3.2px
  s4: 5px
  s5: 6px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 12px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.button-bg}"
    textColor: "{colors.heading}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 32px
    height: 56px
    border: "3px solid #eeeeee"
  button-secondary:
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 32px
    height: 56px
    border: "3px solid #eeeeee"
  search:
    backgroundColor: "{colors.search-bg}"
    textColor: "{colors.search-text}"
    typography: "{typography.search}"
    rounded: "{rounded.md}"
    padding: 8px 4px 8px 32px
    height: 36px
    borderColor: "{colors.search-border}"
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 5px 0px inset
  search-hover:
    textColor: "{colors.on-primary}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.heading}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 5px 10px
    height: 30px
    borderColor: "{colors.primary}"
  code-block:
    backgroundColor: "{colors.code-bg}"
    textColor: "{colors.code-text}"
    typography: "{typography.code}"
    rounded: "{rounded.xs}"
    padding: 20px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.footer-text}"
    padding: 20px
    border: "1px solid #dddddd"
---

# Preact

## Overview

Preact is the "Fast 3kB alternative to React with the same modern API", and preactjs.com is both its home page and documentation site. The page measured at 1280px is 5882px tall. It begins with a thin dark-purple support banner ("We stand with Ukraine. Show your support"), then a purple header with nav links (Tutorial, Guide, About, Blog, REPL), a search field, the version ("v11.0.1"), social icons and a language switcher. The hero continues on the same Preact purple: the white hexagonal atom logo and the "PREACT" wordmark, the tagline, and two buttons — outlined "SWITCH TO PREACT" and solid light-grey "GET STARTED". A dark code card showing a `Counter` component sits on the edge where the purple band ends with a diagonal cut into white.

Below, "Proudly sponsored by" shows sponsor logos, and "A different kind of library" introduces six feature rows — Closer to the DOM, Small Size, Big Performance, Portable & Embeddable, Instantly Productive, Ecosystem Compatible — each paired with a black line illustration (a DOM tree, a magnifying glass, a stopwatch, documents and gears, a laptop, gear clusters), alternating left and right. "See it in action!" presents two live examples (a Todo List and a GitHub repositories list) as dark code blocks with running results beside them. "Ready to dive in?" repeats the two buttons, and a light grey footer offers a language selector and credits ("Built by a bunch of lovely people like @lwakefield").

The style is plain and documentary: line art, system fonts, a single brand colour.

## Colors

The shipped CSS variables come from the site's own `variables.css`:

- **primary #673ab8** — `--color-brand`, also `--color-link`, `--color-btn` and the DocSearch primary colour. It fills the header and hero band and colours links and the "sponsored by" label.
- **brand-dark #38235c** — the darker purple of the top support banner.
- **search-bg #58319d** with **search-border #7447c5** and **search-text #cccccc** — the search field set into the purple header.
- **canvas #ffffff** — `--color-page-bg: white`, the main page.
- **ink #444444** — `--color-text`, the most-read text colour; **heading #000000** — `--color-heading`.
- **button-bg #eeeeee** — `--color-btn-background`, the fill and border of buttons.
- **code-bg #101725** with **code-text #dddddd** — `--color-code-bg` and `--color-code-text` for code blocks.
- Syntax colours: **code-tag #ff696d**, **code-function #ffcb6b**, **code-keyword #c792ea**; also measured #c6f4a7 (strings), #f8c555 (symbols) and #67cdcc (operators).
- **footer-bg #f2f2f2** and **footer-text #555555** with a #dddddd top border.

The variables also define `--color-brand-light: #8f61e1`, `--color-link-hover: #ff89ff` and quote colours (`--color-quote-bg: #ebf6ff`, `--color-quote-border: #5aa8ff`) for docs pages; those were not measured on the home page.

## Typography

No web font is loaded for text (the loaded-font list is empty); Preact uses the operating system's UI font via `system-ui, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif`. Code uses `source-code-pro` at 14.4px / 21.6px; the search field and input fall back to Arial.

- **display** — 48px / 700 / 57.6px uppercase, the h1 (the logo wordmark container; its text content is empty because the wordmark is an image). Mobile: 32px / 700 / 38.4px.
- **heading** — 64px / 100 / 105.6px, letter-spacing 1.28px: "A different kind of library", "See it in action!" and "Ready to dive in?" in hairline-thin weight, centred.
- **subheading** — 35.2px / 300 / 42.24px, 0.352px: feature titles like "Closer to the DOM".
- **body** — 16px / 400 / 26.4px in #444444.
- **button** — 16px / 400 / 26.4px uppercase with 1.2px tracking.

Extremes of weight — 100 for big headings, 700 for the h1 — are the typographic signature. Because the stack is system fonts, the rendering differs by platform; there is no proprietary face to substitute.

## Layout

The main content column runs from x=160 to x=1120 (960px wide), centred; `--content-width: 50rem` governs docs pages. The purple hero band is 551px tall with content centred between x=260 and x=892. Feature rows alternate illustration and text sides inside the column. The live-example section uses a two-column layout: a wide code block (546px) on the left and the running result on the right; the extractor recorded up to five items in a row. The footer is full-width with 20px padding.

Paddings cluster at 20px (most common), 16px, 10px, 8px and 7px; buttons use 12px 32px. CSS variables set `--header-height: 3.5rem` and `--banner-height: 2.5rem`. Spacing tokens run 2px to 16px. The page has generous vertical space between features and keeps each feature to two short paragraphs.

## Elevation & Depth

The page is mostly flat. Measured shadows: an inset `rgba(0, 0, 0, 0.2) 0px 2px 5px 0px` on the search field, `rgba(0, 0, 0, 0.4) 1px 0px 9px 1px` and `rgba(0, 0, 0, 0.5) 0px 5px 25px 0px` on two raised elements (the elements were not identified). Depth otherwise comes from the dark code blocks against white and from the diagonal edge of the purple hero. The "Help Support Us" corner ribbon in the top-right is a rotated band.

## Shapes

Corners are small and squarish. Buttons use **sm 4px** (15 measured, the most common); code blocks and inputs **xs 3px**; the search field **md 5px**; a few elements **lg 7px**. Code-block tabs have a one-sided radius (0px 3px). There are no pills or large radii. The hexagonal atom logo and the diagonal hero edge supply the only angular, graphic shapes.

## Components

- **Primary button** ("GET STARTED", `.btn.primary`) — #eeeeee fill, black text, 3px #eeeeee border, 4px radius, 12px 32px padding, 56px tall, uppercase 16px with 1.2px tracking. The repo's `buttons.css` sets hover and focus to `filter: brightness(0.8)`.
- **Secondary button** ("SWITCH TO PREACT", `.btn.secondary`) — transparent fill, white text in the hero, same 3px #eeeeee border and metrics.
- **Search field** — #58319d fill, #cccccc text, 1px #7447c5 border, 5px radius, 8px 4px 8px 32px padding (room for a magnifier icon), inset shadow, 36px tall. On hover the text turns white with a `rgb(103, 58, 184) 0px 0px 0px 2px inset` ring.
- **Header nav links** — #eeeeee text; hover adds a `rgba(255, 255, 255, 0.3)` background.
- **Code block** — #101725, #dddddd text, source-code-pro 14.4px/21.6px, 3px radius, 20px padding, "Run in REPL" tag at the top right.
- **Text input** — the "Add Todo" example field: white, black text, 1px #673ab8 border, 3px radius, 5px 10px padding, 30px tall.
- **Repository card** — in the GitHub example, a light card with a linked repo name, star count and description.
- **Footer** — #f2f2f2, #555555 text, 1px #dddddd border, 20px padding, language select.

## Design System Architecture

Preact has no separate design-system package. The website source is public at https://github.com/preactjs/preact-www ("Preact documentation website"), and its styles are plain CSS files under `src/style/`: `variables.css` (https://raw.githubusercontent.com/preactjs/preact-www/master/src/style/variables.css) defines the colour tokens (`--color-brand`, `--color-text`, `--color-btn-background`, the code palette, sidebar, table and footer colours) and layout constants; `buttons.css` (https://raw.githubusercontent.com/preactjs/preact-www/master/src/style/buttons.css) defines `.btn`, `.btn.primary`, `.btn.secondary`, the 0.25rem radius, 0.2rem border, uppercase 0.075em tracking and the brightness hover. Other files cover home, markdown, Prism syntax highlighting, list views and DocSearch. The branding page (https://preactjs.com/branding/) offers the full logo and the symbol, each with an inverted-colour version, in SVG and PNG; it lists no colours or rules.

## Do's and Don'ts

**Do**
- Use #673ab8 as the one brand colour: hero band, header, links.
- Keep the page white with #444444 text and black headings.
- Set big headings in the system font at weight 100, feature titles at 300.
- Use uppercase, letter-spaced, 4px-radius buttons with the 3px #eeeeee border.
- Show code on #101725 with the measured syntax palette.
- Use black line illustrations for features.

**Don't**
- Don't load a custom text font; the site relies on system-ui.
- Don't add large radii, pills or heavy shadows.
- Don't introduce extra accent colours outside the code palette.
- Don't recolour the logo; use the provided normal or inverted files from the branding page.
- Don't make buttons purple-filled; the measured primary is light grey on purple.

## Responsive Behavior

Measured at 390px: the h1 is 32px / 700 / 38.4px uppercase with 8px 16px 4px padding (desktop 48px with 24px 0px 0px), the main heading 28.47px / 100 / 46.9755px with 0.5694px tracking (desktop 64px), and body text stays 16px / 26.4px. The search field keeps its 5px radius and padding at 164px wide. One header link is visible and no menu toggle was detected; the repo declares `--header-mobile-breakpoint: 50rem` and `--sidebar-break: 900px`. The support banner band measured #38235c at the top, then the #673ab8 hero, and the content band measured #fbfbfb from x=20 to x=389. Maximum card columns: two. Other intermediate behaviour was not measured.

## Iteration Guide

1. Copy `variables.css` values: brand #673ab8, text #444, headings black, page white.
2. Use the system-ui stack; 64px/100 headings, 35.2px/300 subheads, 16px/26.4px body.
3. Buttons: `.btn` recipe — 4px radius, 3px #eeeeee border, 12px 32px, uppercase 1.2px; primary #eeeeee fill with black text.
4. Code: #101725, source-code-pro 14.4px, 3px radius, 20px padding.
5. Keep shapes square-ish (3–5px) and decoration to line art.
6. Use the branding page assets for any logo placement.
