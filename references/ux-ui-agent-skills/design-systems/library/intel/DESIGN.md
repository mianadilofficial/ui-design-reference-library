---
version: alpha
name: Intel
category: "Consumer Electronics"
description: "Intel homepage: a navy #000f28 hero and header over a white #ffffff body, intel-one-display-medium type at 218px with tight tracking, 20px/30px intel-one-body-text, Intel blue #0046c8 accent with cyan #00c7fd brand highlight, and small outlined 100px pill buttons."
colors:
  canvas: "#000f28"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#0046c8"
  surface-subtle: "#eef4fe"
  brand-cyan: "#00c7fd"
  ink-secondary: "#637085"
  hero-wordmark: "#00285a"
  hairline: "#cdd8ea99"
typography:
  display:
    fontFamily: intel-one-display-medium, Helvetica, Arial, sans-serif
    fontSize: 218.419px
    fontWeight: 500
    lineHeight: 262.102px
    letterSpacing: "-4.36837px"
  display-mobile:
    fontFamily: intel-one-display-medium, Helvetica, Arial, sans-serif
    fontSize: 64.7442px
    fontWeight: 500
    lineHeight: 45.3209px
    letterSpacing: "-1.29488px"
  heading:
    fontFamily: intel-one-body-text, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 25px
    letterSpacing: "-0.2px"
  subheading:
    fontFamily: intel-one-display-medium, Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
    letterSpacing: "-0.2px"
  body:
    fontFamily: intel-one-body-text, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  nav:
    fontFamily: intel-one-body-text, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
  button-secondary:
    fontFamily: intel-one-body-text, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 21px
rounded:
  xs: 2px
  sm: 5px
  md: 100px
spacing:
  s1: 3px
  s2: 3.01px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11.5px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 20px
components:
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.md}"
    padding: 8px 20px
    height: 39px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.page-body}"
    padding: 22px 53.248px
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 10px 12px 14px
    transform: matrix(1, 0, 0, 1, -12, 0)
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    borderColor: "{colors.hairline}"

---

# Intel — Design System

## Overview
The measured page is https://www.intel.com/content/www/us/en/homepage.html, titled "Intel Inside - Built for AI". At capture time the visible screen is only the opening hero: a near-black navy field (`{colors.canvas}`, #000f28) with a thin top navigation bar and, in the middle, the word "Googlebook" set enormously in a dark blue only slightly lighter than the background. A column of four small dots on the left edge marks a slide indicator with a down chevron beneath it. The slide's photography or video had not rendered in the capture, so the hero reads as a bold typographic placeholder; the rest of the extraction (white and pale-blue content areas, news headlines, buttons) comes from the page below the hero and is not visible in the capture image. The navigation shows the lower-case "intel." wordmark in white, the items Products, Support, Solutions, Developers, Partners and Foundry, then an account icon, a globe icon and an "Ask Intel" assistant link. The voice of the visible text is short and corporate: "See the latest news", "As America turns 250, Intel is investing in U.S. manufacturing".

## Colors
Intel's page runs on a navy-to-white system with one strong blue. `{colors.canvas}` (#000f28) is the dark hero and header color; `{colors.page-body}` (#ffffff) is the white body background below; `{colors.surface-subtle}` (#eef4fe) is a pale blue panel. `{colors.primary}` (#0046c8) is the accent blue; the site's own variables confirm it as `--text-accent`, `--background-accent` and `--border-accent`. `{colors.brand-cyan}` (#00c7fd) is the site's `--text-brand` and `--background-brand` value, a bright cyan declared as the brand color. Text on white uses `{colors.canvas}` navy for headings and `{colors.ink-secondary}` (#637085) for body paragraphs. `{colors.ink}` (#ffffff) is the text on the dark hero and header, `{colors.hero-wordmark}` (#00285a) is the dark blue of the oversized hero word, and `{colors.hairline}` (#cdd8ea99) is a pale blue-grey divider at 60 percent opacity. The primary action color is the blue accent; no filled primary button was captured, so no on-primary color is declared.

## Typography
Two families: intel-one-display-medium for large display text and intel-one-body-text (400, 500 and a 400 italic) for everything else, each falling back to Helvetica and Arial. The hero word is `{typography.display}` at 218.419px weight 500 with a 262.102px line height and -4.36837px tracking; the mobile form `{typography.display-mobile}` is 64.7442px (line height 45.3209px). Sub-display `{typography.subheading}` is 32px/500 and tracks -0.2px; headings `{typography.heading}` are 20px/500 in the body family; running text `{typography.body}` is 20px/400 with 30px leading; navigation `{typography.nav}` is 16px/400; and the compact button label `{typography.button-secondary}` is 14px/500. Other measured sizes are 12, 56, 167.316 and 240px. Display type tracks tightly, which makes the giant hero word feel dense.

### Font substitutes
intel-one-display-medium and intel-one-body-text are Intel's proprietary families. The site's own declared fallbacks, Helvetica and Arial, are the honest substitutes.

## Layout
The header is a single bar of 4.375rem height on desktop (the site's `--ighf-h-navbar-height`) and 3.5rem on small screens (`--ighf-h-navbar-height-xs`), with the logo at the left, navigation next to it and utilities on the right. The hero is full-bleed, with the display word spanning nearly the entire viewport width. Gaps measured are 3, 8, 12, 14, 16, 20, 32 and 120px; paddings include 6, 12, 24, 32, 53.248 and 120px, the 120px values indicating very large vertical section spacing. Spacing tokens `{spacing.s1}` to `{spacing.s10}` list the steps from 3px to 20px.

## Elevation & Depth
Almost flat. The only box shadow measured is `rgb(255, 255, 255) 0px 0px 0px 1px`, a 1px white ring used as a focus or outline effect, not as depth. Separation comes from contrast between the navy hero and white sections and from pale hairlines. Hover on navigation items changes color to a lighter blue (#2d76ff) rather than adding any lift.

## Shapes
Radii are small and few: 2px (`{rounded.xs}`), 5px (`{rounded.sm}`) and 100px (`{rounded.md}`, pill). The site's variables define `--border-radius-sm` (.125rem), `--border-radius` (.25rem), `--border-radius-md` (.375rem), `--border-radius-lg` (.5rem) and `--border-radius-xl` (.75rem). Pills are used for small outlined buttons; most structure is square-cornered.

## Components
`button-secondary` is a 39px-tall outlined pill: label and border in `{colors.canvas}` navy, 14px/500 type, padding 8px 20px, radius `{rounded.md}`, designed for white sections. Navigation buttons are 16px/400 white labels on the dark header, 44px high, that turn light blue on hover. `link` text uses the 20px heading style in navy. The `footer` is a white band with navy text and a `{colors.hairline}` top divider. The navigation shows icon-only utilities (account, language) and an "Ask Intel" text-plus-icon link.

## Design System Architecture
No public Intel design-system documentation was opened for this write-up; this describes the system visible in the page at https://www.intel.com/content/www/us/en/homepage.html. The page exposes 165 root variables with a clear semantic layer: `--text-primary`, `--text-secondary`, `--text-tertiary`, `--text-accent`, `--text-brand`, `--text-error`; `--background-default`, `--background-subtle`, `--background-inverse`, `--background-accent`, `--background-brand`; `--border-primary`, `--border-subtle`, `--border-accent`, `--border-focus`; and `--border-radius-*`. Separately, about 55 names begin with `--ighf-h-` (header and footer component variables such as navbar height and form input height), plus `--footer-*` and `--intc-*` groups. That layering of semantic tokens plus component-scoped header/footer tokens suggests a shared global chrome; the documentation behind it was not read.

## Do's and Don'ts
Do use navy `{colors.canvas}` for dark sections and white for content, with `{colors.primary}` for accents and links. Do set display type in the display family with tight negative tracking. Do keep 16px nav and 20px body. Do use pale `{colors.surface-subtle}` blocks to separate content on white. Don't use the browser default purple for visited links; the site defines its own `--text-visited`. Don't put long copy over the dark hero; its type is oversized and sparse. Don't round corners beyond the 100px pill. Don't add shadows.

## Responsive Behavior
A 390px mobile pass was measured: the hero display falls to 64.7442px from 218.419px and the header height to 3.5rem. The capture shows a slide indicator of four dots at the left. Exact breakpoint widths were not recorded, so none are stated.

## Iteration Guide
Start with a navy `{colors.canvas}` header and hero and a white body. Set the hero word in the display family at 218.419px/500 with -4.36837px tracking, headings at 20px/500 and body at 20px/400 over 30px leading. Use `{colors.primary}` for accent and links, `{colors.brand-cyan}` sparingly for brand highlights, and 100px pill outlines for secondary actions. Verify new colors against the semantic variables above, and confirm hero imagery loads before capturing, since the measured capture shows only the placeholder word.

### What the capture does and does not show
The screenshot is dominated by one hero slide at the moment of capture, with its media absent. Three consequences follow for anyone using this document. First, every number above comes from the extractor's measurements of live elements, not from the picture, so the white-section values (20px body, 20px headings, #637085 paragraphs, the 39px outlined pill) are real even though the image cannot show them. Second, the hero word's near-invisible contrast against the navy is a measured pairing of two dark blues (#00285a on #000f28), and is a loading-state look that should not be copied as a readable text style; readable text on the navy is white. Third, the slide indicator (one elongated white dot over three small grey ones) is the only interactive hero chrome visible besides the navigation, and no cookie banner or modal covers the page.
