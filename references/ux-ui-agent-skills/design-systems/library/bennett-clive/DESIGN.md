---
version: alpha
name: Bennett & Clive
category: "Fashion & Apparel"
description: "Monochrome production-company portfolio for Bennett & Clive: pure white #ffffff canvas with #000000 ink, full-bleed imagery under giant uppercase InterWeb type (133.333px display at -9.33334px tracking, 26.6666px body), a single outlined 500px-radius pill button, no shadows, and fluid vw-based sizing from a 4-column grid that starts at 1024px."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffffff"
typography:
  display:
    fontFamily: InterWeb, sans-serif
    fontSize: 133.333px
    fontWeight: 400
    lineHeight: 102.667px
    letterSpacing: "-9.33334px"
    textTransform: uppercase
  display-mobile:
    fontFamily: InterWeb, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 51px
    letterSpacing: "-4.2px"
    textTransform: uppercase
  body:
    fontFamily: InterWeb, sans-serif
    fontSize: 26.6666px
    fontWeight: 400
    lineHeight: 26.6666px
    letterSpacing: "-1.33333px"
    textTransform: uppercase
  nav:
    fontFamily: InterWeb, sans-serif
    fontSize: 19.3334px
    fontWeight: 700
    lineHeight: 19.3334px
    letterSpacing: "-0.580001px"
    textTransform: uppercase
  button-label:
    fontFamily: InterWeb, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  pill: 9999px
spacing:
  s1: 5.33px
  s2: 6.67px
  s3: 10px
  s4: 15px
  s5: 18.67px
  s6: 100px
components:
  button-outlined:
    textColor: "{colors.ink}"
    typography: "{typography.button-label}"
    rounded: "{rounded.pill}"
    padding: 0px 15px
    height: 30px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
    padding: 0px 0px 6.66662px
---

## Overview

Bennett & Clive is a woman-led creative production company (founded in 2018 by Sara Mouzayanni, according to its About page) that runs video and photo productions for global brands and agencies from offices in New York, Los Angeles and Miami. Its home page (`https://bennettandclive.com/`) behaves like a poster rather than a brochure: the first screen is a full-bleed image (a skier on snow in the capture) with the current client name set enormous in white at the top left, a right-aligned stack of other client names in the same size (Calvin Klein, Hourglass, Nike, Eilish ...), a tiny "BENNETT & CLIVE" label split across the screen, and a four-item navigation in the top right corner (HOME, WORK, ABOUT, CONTACT) with an underline under the current page.

Everything is uppercase, tightly tracked and one weight of one family. There is no color beyond black and white: the canvas is `#ffffff`, text is `#000000` on it and `#ffffff` over imagery. The only chrome is the nav, a pill-shaped outlined button, and a footer with the three city names. The page title is "Bennett & Clive | Creative Production Company", and the meta description reads "Bennett & Clive is a creative production company helping global brands and agencies bring ambitious creative to life through exceptional production."

Copy is calm and confident: "Let's raise your idea." "GLOBAL PRODUCTION FOR BRANDS AND AGENCIES. THOUGHTFUL. PRECISE. THE OPPOSITE OF CHAOTIC." The About page continues in the same voice ("Calm, considered, structured and somehow still on time."). The home page lists services in plain groups (Global Production, Post Production, with Line Production, Shoot Architecture, Casting & Talent Management, Art Buying, Motion Photography, Content Systems, Next-Gen Solutions, Editorial & Finishing) and a long client roll that includes Sephora, Hourglass, Stella McCartney, Givenchy, Hugo Boss, Amazon, Uniqlo and Gap.

Capture caveat: the full-page capture shows imagery only for the first viewport and plain white below it, so the lower sections are described from the page's HTML text and stylesheet, not from pixels.

## Colors

The palette is two values, both measured and both declared in the page's own CSS (`body{background-color:#fff;color:#000}`).

- **Canvas `#ffffff`** is the body background and the page color behind every text section. The same value is the page's `theme-color` meta tag.
- **Ink `#000000`** is the most-read text color (460 weighted characters). It also fills the text selection highlight, with white text, and it is the background the stylesheet gives the full-screen mobile navigation.
- **Primary `#ffffff`** is the foreground over imagery: the giant client names, the small BENNETT / CLIVE labels, and the nav links (243 weighted characters of white text). The generator reported no chromatic CTA fill, so the primary token resolves to white rather than to an accent hue. There is no brand color besides black and white on the measured page.

The extraction reports a single background by area, `#000000`, and a single border color, `#000000`, which belongs to the About pill. No gradients, tints or greys were measured.

## Typography

One family, `InterWeb`, loaded from the site's own files. The inline stylesheet declares exactly one `@font-face`: `font-family: InterWeb; font-weight: 700` with sources `/_nuxt/fonts/Inter-Bold.db4fc67.woff` and `Inter-Bold.15f1c0b.woff2`. Because only the bold face is declared, text whose declared weight is 400 is drawn from that same bold file, which is why even the "regular" hero type in the capture has heavy strokes. A generic `sans-serif` is the only fallback.

Sizing is fluid. The stylesheet sets `html{font-size:62.5%}` and gives the headline classes viewport-width units from 1024px upward (for example `h1` at `10.41667vw` with `letter-spacing:-.07em`). At the 1280px desktop measurement those resolve to the values in the front matter:

| Token | Size / line | Letter spacing | Where |
|---|---|---|---|
| display | 133.333px / 102.667px | -9.33334px | client name h1 ("ADIDAS") |
| display-mobile | 60px / 51px | -4.2px | the same h1 at 390px |
| body | 26.6666px / 26.6666px | -1.33333px | the "GLOBAL PRODUCTION..." statement |
| nav | 19.3334px / 19.3334px, weight 700 | -0.580001px | HOME / WORK / ABOUT / CONTACT |
| button-label | 16px / 16px | normal | the About pill |

Other measured sizes, by weighted characters: 40px (204, letter spacing -2px), 66.6666px (173, -3.33333px) and 13.3334px (144, -0.666669px, the footer labels). All text is `text-transform: uppercase` except the pill label and the footer's small labels. The ratio between letter spacing and size is about -0.07em for the display, -0.05em for the statement text and -0.03em for the nav, all declared in the stylesheet (`.h1`, `.h4`, `.nav-label`). Weight is 400 for headings and body and 700 for the nav and the project labels.

Font substitutes: the stylesheet's file names identify the face as Inter Bold. If the self-hosted files are unavailable, a bold neo-grotesque with very tight tracking is the closest match to the capture, applied at the sizes above; no substitute was measured or cited.

## Layout

The page is built on a CSS grid declared in the stylesheet: `.grid` has two equal columns by default, four equal columns from 1024px, a column gap that grows from 3rem to 6rem to `5.20833vw` to `7.8125vw`, and side padding of 3rem, then 6rem, then `7.8125vw`. At the 1280px measurement that `7.8125vw` equals 100px, which matches the measured 100px padding (3 occurrences) and the `s6` spacing token. The same side padding is reused by the `.gutters` helper.

Measured gaps are small and exact: 6.66662px (17 occurrences), 5.33335px (6), 100px (3), 10px (1) and 18.6666px (1). These are the `s1` to `s6` tokens. Paddings are 100px (3), 15px (1), 266.667px (1) and 6.66662px (1). The measured page height was 6490px.

Composition seen in the capture: the large client name is pinned to the top left and the right-aligned list of names fills the right half from the middle of the first screen down; the nav is fixed to the top right (`.nav{position:fixed}` with `right` and `top` of `.52083vw` from 1024px). Below the hero, the HTML shows an intro statement, an About link, a two-group services list, a client roll and the footer with New York, Los Angeles and Miami, each followed by a time reading (the footer text contains values such as "00:41"), the "Work with us" email, the founder line, social links and legal links.

## Elevation & Depth

There are no shadows. The measured `boxShadows` list is empty and the only `box-shadow` rule in the shipped CSS is `none !important` inside `@media print`. Depth is made by scale and by image: the enormous type sits directly on the photograph, and the stylesheet declares a `.nav--blended` modifier with `mix-blend-mode: difference` from 1024px as a declared option for sitting over varied imagery.

The page-transition overlay declares `backdrop-filter: blur(6rem)` at `z-index: 500`, fading in over `.6s` with the easing `cubic-bezier(.32,.94,.6,1)`; the nav sits at `z-index: 800`. These are transition effects, not resting elevation. Rows of text reveal with a translate-and-fade (`.anim-line`, `translateY(2rem)` to `0`, `.6s`) and a scale-from-bottom-left effect (`.anim-line-scale`, `.8s`), declared in the same stylesheet.

## Shapes

Shape language is almost entirely rectangular because the content is type and photography with no boxes. The only measured radius is `500px` on the About button, a fully rounded pill (the front matter keeps `pill: 9999px` for it); the CSS corpus also contains one `800px` radius. No other radius was measured.

The nav underline is a flat bar declared as a 3px-tall pseudo-element (`height: .3rem` at the 62.5% root size) that scales in from the right with `transform: scaleX`. Line weight elsewhere is a single 1px solid `#000000` border on the pill. Social links appear in the page text as the labels Instagram and LinkedIn.

## Components

**Navigation.** Four links in `InterWeb` 700, 19.3334px, uppercase, `#ffffff` over imagery, fixed to the top right and spaced by a `.78125vw` column gap on desktop. The current page gets a bar underline (`nuxt-link-exact-active`) that draws left to right; the bar is a `:before` pseudo-element on `.nav-item__link`.

**Client title (h1 link).** The giant name ("ADIDAS") is a link in 133.333px / 102.667px uppercase white with -9.33334px letter spacing; the right-aligned stack of other clients uses the same style.

**Outlined pill button (`button-outlined`).** The "About" link: transparent fill, 1px solid `#000000` border, `#000000` text at 16px / 16px weight 400, 30px high, 80px wide, padding `0px 15px`, radius 500px. It is the only button on the page.

**Footer.** Three city blocks (New York, Los Angeles, Miami) with local times in 13.3334px labels, a "Work with us: info@bennettandclive.com" line, founder credit, Instagram and LinkedIn links, and Privacy Policy and Terms of Use. Footer text is `#000000` and the footer has bottom padding of 6.66662px.

**Marquee and loader.** The stylesheet declares a horizontal marquee (`.marquee__wrapper`, `translate3d(-25%,0,0)`) and an intro loader that fills `100svh` on `#ffffff`. A hubspot script (`hs-script-loader`) is loaded; any chat or consent widget it adds is not part of the brand design and is not recorded.

## Design System Architecture

Bennett & Clive publishes no public design system, brand guidelines or press kit: the home page and About page link to Work, About, Contact, social profiles and legal pages and neither links to a design system, `/brand` and `/press` return 404, and no design-system link appears in the HTML opened. The de-facto system is a hand-written Nuxt 2 stylesheet shipped inline in the page (`https://bennettandclive.com/`), with class names such as `.h1` to `.h4`, `.nav-label`, `.footer-label`, `.copy`, `.grid`, `.gutters`, `.anim-line` and `.ttu`.

Its rules are:
- A reset block followed by `html{font-size:62.5%}` so that 1rem is 10px.
- Mobile sizes in rem (for example `h1{font-size:6rem}`), then viewport-width units from the breakpoints declared below, so type and gaps scale continuously with the window.
- A shared easing, `cubic-bezier(.32,.94,.6,1)`, used for page, nav, overlay and text transitions with durations of `.2s`, `.3s`, `.6s` and `.8s`.
- One font file declaration (InterWeb bold) and no CSS custom properties; every color is the literal `#fff` or `#000`.

Because there are no tokens in the source, the front matter is built from computed styles measured on the live page (`web/data/extracted/bennett-clive.json`), not from a published token file.

## Do's and Don'ts

Do
- Set display type in white, uppercase, with negative tracking of about -0.07em directly on full-bleed imagery, and let the type be larger than the layout feels it should be.
- Keep the palette to `#ffffff` and `#000000` and switch between them by section, not by tint.
- Size type and spacing with viewport-width units above 1024px so the composition scales as one piece.
- Use the shared easing for every reveal and keep durations between `.2s` and `.8s`.
- Use a 1px solid black outline pill (30px high, 15px side padding) for the single secondary action.

Don't
- Do not add accent colors, gradients, shadows or rounded cards; none are measured or declared outside `@media print`.
- Do not use lowercase or title case in headlines, nav items or the statement text.
- Do not add a regular-weight font file: the site declares only the bold face and relies on it for all text.
- Do not copy any hubspot widget, consent banner or chat control into the design; they are third-party layers.
- Do not introduce decorative icon sets; none was measured on the page.

## Responsive Behavior

The stylesheet declares these breakpoints: `min-width: 768px`, `min-width: 1024px`, `min-width: 1240px`, `min-width: 1680px`, `min-width: 1920px`, `max-width: 767px`, `max-width: 1023px`, and `(hover: hover)`.

Measured at 390px: the h1 is 60px / 51px with -4.2px letter spacing (the `display-mobile` token), the statement text is 20px / 20px, and the other sizes by weighted characters are 14px (291), 30px (204), 36px (173), 20px (88), 60px (69) and 16px (5).

Declared in the CSS for `max-width: 1023px`: the nav becomes a full-height overlay (`.nav` gets `background-color:#000`, `height:100dvh` and `opacity:0` until `.nav--open`), the nav links are set at 6rem with `-.07em` tracking and scale in from the bottom left, and the last nav item (Contact) is hidden (`.nav-item:last-child{display:none}`). From `min-width: 1024px` the grid is four columns and the nav is a fixed top-right row. How each content section of the home page reflows at 390px is not measured because the full-page capture is the desktop view only.

## Iteration Guide

1. Start with two colors: `#ffffff` canvas and `#000000` ink. White type goes only over media.
2. Load one bold sans (InterWeb / Inter Bold) and use it for everything, uppercase, with tracking proportional to size (-0.07em display, -0.05em statement, -0.03em nav).
3. Express the type scale in vw from 1024px up and in rem below: `h1` 10.41667vw (133.333px at 1280), `h4` 2.08333vw (26.6666px), nav 1.51042vw (19.3334px), footer labels 1.04167vw (13.3334px).
4. Lay content out on a 4-column grid with `7.8125vw` side padding (100px at 1280) and put the nav in the top right corner, fixed.
5. Add motion last: a `cubic-bezier(.32,.94,.6,1)` translate-and-fade of 2rem over `.6s` for text lines, a `.8s` scale for underline marks, and a blurred overlay for page changes.
6. Check any new value against `web/data/extracted/bennett-clive.json` or the inline CSS of the page before adding it as a token.
