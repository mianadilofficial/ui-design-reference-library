---
version: alpha
name: Foundation
category: "Frontend Frameworks"
description: "Foundation for Sites by ZURB, a responsive front-end framework: its docs and marketing use #fefefe and #0a0a0a with the default $foundation-palette (primary #1779ba, secondary #767676, success #3adb76, warning #ffae00, alert #cc4b37), square 0-radius framework buttons, Helvetica Neue docs type, and a 200-weight Proxima Nova homepage."
colors:
  canvas: "#fefefe"
  ink: "#0a0a0a"
  ink-body: "#333333"
  ink-soft: "#222222"
  ink-muted: "#767676"
  ink-gray: "#8a8a8a"
  primary: "#1779ba"
  on-primary: "#ffffff"
  primary-hover: "#126fad"
  cta-hero: "#1583cc"
  secondary: "#767676"
  success: "#3adb76"
  warning: "#ffae00"
  alert: "#cc4b37"
  light-gray: "#e6e6e6"
  medium-gray: "#cacaca"
  surface-dark: "#2c3840"
typography:
  display:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 46px
    fontWeight: 200
    lineHeight: 46px
  display-mobile:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 30px
    fontWeight: 200
    lineHeight: 30px
  heading:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 21px
    fontWeight: 200
    lineHeight: 29.4px
  subheading:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 28px
    fontWeight: 200
    lineHeight: 39.2px
  body:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 15px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 20px
    fontWeight: 700
    lineHeight: 20px
  link:
    fontFamily: '"Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 13px
    fontWeight: 200
    lineHeight: 19.5px
  docs-h1:
    fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 48px
    fontWeight: 400
    lineHeight: 67.2px
  docs-h2:
    fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 40px
    fontWeight: 400
    lineHeight: 56px
  docs-lead:
    fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button-docs:
    fontFamily: '"Helvetica Neue", Helvetica, Arial, sans-serif'
    fontSize: 14.4px
    fontWeight: 400
    lineHeight: 14.4px
rounded:
  flat: 0px
  xs: 3px
spacing:
  s1: 6.4px
  s2: 12.24px
  s3: 14.4px
  s4: 15px
  s5: 16px
  s6: 17px
  s7: 20px
  s8: 22px
  s9: 24px
  s10: 32px
components:
  button-hero:
    backgroundColor: "{colors.cta-hero}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 17px 20px
    height: 54px
    boxShadow: rgba(0, 0, 0, 0.2) 0px -2px 0px 0px inset
  button-hero-hover:
    backgroundColor: "{colors.primary-hover}"
  button-docs-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.flat}"
    padding: 12.24px 14.4px
  button-docs-warning:
    backgroundColor: "{colors.warning}"
    textColor: "{colors.ink}"
    typography: "{typography.button-docs}"
    rounded: "{rounded.flat}"
    padding: 12.24px 14.4px
    height: 41px
  button-docs-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.flat}"
    padding: 17px 20px
    height: 56px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.flat}"
    padding: 8px 8px 8px 48px
    height: 56px
    borderColor: "{colors.medium-gray}"
  footer:
    backgroundColor: "{colors.surface-dark}"
    textColor: "{colors.light-gray}"
    padding: 32px
---

## Overview

Foundation (https://get.foundation) is ZURB's open-source family of responsive front-end frameworks: Foundation for Sites, Foundation for Emails and the newer component set. The marketing homepage sells all of that with illustration rather than screenshots, and the documentation (https://get.foundation/sites/docs/) shows the framework's own default styling, which is the real design system here.

The captured homepage (1280px wide, 4078px tall) has three bands. First, a dark top navigation bar (#2c3840) reading "Foundation Framework" at left and Showcase / Develop / Tutorials / Get Started... at right ("Getting Started" is a filled blue tab). Then a full-width illustrated hero: a night sky and mountains in teal-to-orange gradient with the Yeti mascot in an orange-visored space helmet marked "6". On the left sit a 46px, weight-200 "Foundation" heading, a light tagline "The most advanced responsive front-end framework in the world.", a square-ish blue "Download Foundation 6" button, and small star-count and Twitter lines. Below, white sections: "Responsive design gets a whole lot faster" (large thin heading, gray centered paragraph), a dotted rule, two columns "Foundation for Sites" and "Foundation for Emails" with mascot illustrations, uppercase letter-spaced "FOUNDATION FOR" captions, thin 28px titles and blue "Learn more" links, a second dotted rule, then four feature columns (Semantic, Mobile First, Customizable, Professional) each with a line-art icon.

Key characteristics:
- The default Foundation look: neutral near-black (#0a0a0a) on near-white (#fefefe), one strong blue (#1779ba) and four status colors.
- Thin headings: the homepage uses Proxima Nova at weight 200 for display text and 400 for body, a deliberately light, airy contrast to the heavy blue buttons.
- Buttons are bold, solid and slightly raised with an inset bottom shadow (homepage) or flat and square (framework docs, global radius 0).
- Mascot-led illustration in a flat vector style with teal, orange, pink and navy.
- Dotted separators between sections.
- Copy is plain and benefit-led: "Responsive design gets a whole lot faster", "Build products, apps and services".

## Colors

### Framework palette (official)
From the Foundation 6 settings file (`$foundation-palette` in https://raw.githubusercontent.com/foundation/foundation-sites/v6.9.0/scss/settings/_settings.scss), also verified on the live docs button and callout pages:
- **Primary** (`{colors.primary}` = #1779ba): interactive elements, links and default buttons; `$anchor-color` is primary.
- **Secondary** (`{colors.secondary}` = #767676).
- **Success** (`{colors.success}` = #3adb76), **Warning** (`{colors.warning}` = #ffae00), **Alert** (`{colors.alert}` = #cc4b37): status colors; the docs measure 2 uses of each as borders and buttons.
- Grays: `{colors.light-gray}` #e6e6e6, `{colors.medium-gray}` #cacaca (63 border uses on the docs page), `{colors.ink-gray}` (dark gray) #8a8a8a.
- Black `{colors.ink}` #0a0a0a is `$body-font-color`; white `{colors.canvas}` #fefefe is `$body-background`.

### Homepage-specific
- **CTA hero** (`{colors.cta-hero}` = #1583cc): fill of the hero "Download Foundation 6" button, slightly brighter than the framework primary; hover #126fad (`{colors.primary-hover}`).
- **Surface dark** (`{colors.surface-dark}` = #2c3840): top bar, footer and hero base.
- **Ink body** (`{colors.ink-body}` = #333333): most-read text color of the homepage (749 characters); **ink soft** #222222 for paragraph text in cards; **ink muted** #767676 for captions and the star-count line (407 characters).
- The hero artwork's own colors (teal sky, orange helmet visor, pink mountains) are illustration, not tokens.

### Docs-only colors
- Code samples use syntax colors #dd1144, #000080, #008080 and #999988; callouts use light fills such as #d7ecfa and #f1f1f1; neither is a UI token.

### Rules observed
- Use primary blue for every default action and link; use the other palette entries only to signal meaning.
- Text on blue is #fefefe or #ffffff; text on the yellow warning button is #0a0a0a.
- Background neutrals alternate #fefefe, #f9f9f9 and #f1f1f1 on docs pages.

## Typography

### Families
- **Homepage:** Proxima Nova (and Proxima Nova Condensed, 79 characters) with the stack "Proxima Nova", proxima-nova, "Helvetica Neue", Helvetica, Arial, sans-serif. Proxima Nova is a licensed commercial typeface.
- **Framework default:** `$body-font-family` is 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif; the docs measure Helvetica Neue for 8404 characters and Consolas for 5845 (code samples).
- Monospace documented as "Consolas, 'Liberation Mono', Courier, monospace" (https://get.foundation/sites/docs/typography-base.html).

### Substitutes
Use Helvetica Neue, Arial or a neutral grotesque with a thin weight (200 to 300) for homepage-style display text. The framework itself needs no web font.

### Scale
Homepage (measured):
| Token | Size / line | Weight | Use |
|---|---|---|---|
| `display` | 46px / 46px | 200 | hero heading |
| `display-mobile` | 30px / 30px | 200 | hero heading at 390px |
| `subheading` | 28px / 39.2px | 200 | "Sites", "Emails", feature titles |
| `heading` | 21px / 29.4px | 200 | hero tagline |
| `body` | 15px / 24px | 400 | paragraph text |
| `link` | 13px / 19.5px | 200 | footer and meta links |
| `button` | 20px / 20px | 700 | hero button |

Docs (measured on /sites/docs/button.html and forms.html):
| Token | Size / line | Weight | Use |
|---|---|---|---|
| `docs-h1` | 48px / 67.2px | 400 | page title |
| `docs-h2` | 40px / 56px | 400 | section title |
| `docs-lead` | 20px / 32px | 400 | intro paragraphs |
| `button-docs` | 14.4px / 14.4px | 400 | default button |

Documented framework header sizes (https://get.foundation/sites/docs/typography-base.html): small screens 24, 20, 19, 18, 17, 16px for h1 to h6; medium and up 48, 40, 31, 25, 20, 16px. Header weight is normal, header line height 1.4, paragraph line height 1.6, header bottom margin 0.5rem, paragraph bottom margin 1rem. Root font size 100% with line height 1.5 (settings file).

### Principles
- Headings are never bold in the framework; weight is normal (docs) or extra light (homepage).
- Hierarchy comes from size and gray value: black heading, gray paragraph.
- Uppercase appears only on small letter-spaced captions ("FOUNDATION FOR").
- Buttons are the only bold text.

## Layout

- Grid: Foundation's 12-column grid; breakpoints small 0, medium 640px, large 1024px, xlarge 1200px, xxlarge 1440px (settings file). Column gutters are configured per breakpoint (`$grid-column-gutter`).
- Global margin and padding are 1rem.
- Homepage: sections center a content column of about 640px for paragraphs and about 1200px for the four-up feature row.
- Hero text is aligned to a column starting at about 190px of the 960px capture, with the mascot filling the right half.
- Sections separate by dotted horizontal rules and about 60px of vertical air.
- Measured spacing: 6.4, 12.24, 14.4, 15, 16, 17, 20, 22, 24, 32px (derived from em-based padding such as 0.85em 1em).
- Footer padding 32px on the dark surface.

## Elevation & Depth

- Flat design with one tactile cue: filled buttons carry `rgba(0,0,0,0.2) 0 -2px 0 0 inset`, a darker bottom edge (4 measured uses on the homepage and docs).
- Form fields use an inset shadow `rgba(10,10,10,0.1) 0 1px 2px 0 inset` (8 uses on the forms page).
- A floating element (dropdown or dialog) measures `rgba(0,0,0,0.17) 0 2px 10px 0`.
- Borders (1px #cacaca) separate form controls and tables more often than shadows do.
- The hero depth is illustrative: layered mountains and starfield.

## Shapes

- Framework: `$global-radius` is 0, so buttons, inputs and callouts are square (`{rounded.flat}`), confirmed on the docs buttons (border radius 0px).
- Homepage and nav buttons: 3px (`{rounded.xs}`), the only radius measured on the home page (9 uses).
- Illustrations use soft vector shapes; UI is rectilinear.
- Icons are line-art in navy and blue with faint network lines in the background.

## Components

### Hero button (homepage)
- Fill `{colors.cta-hero}`, text white, 20px bold, padding 17px 20px, height 54px, radius 3px, inset bottom shadow; hover `{colors.primary-hover}`.
- The nav "Getting Started" tab is a filled #1779ba block, 45px high, 14.4px bold text in a light gray.

### Docs button (framework default)
- Primary: fill `{colors.primary}`, text #fefefe, 14.4px, padding 12.24px 14.4px (0.85em 1em), radius 0; "Learn More" variant on the site carries a 3px radius and bold weight.
- Warning: fill `{colors.warning}`, text `{colors.ink}`, height 41px.
- Large (`button large`): font 20px, padding 17px 20px, height 56px (the "Dropdown Button" demo).
- Settings: `$button-padding` 0.85em 1em, `$button-background` primary, `$button-color` white, hover scaled 15 percent darker, `$button-radius` equals the global radius.

### Text input
- Measured search input: 56px high, 20.8px text, padding 8px 8px 8px 48px (room for an icon), white fill, #0a0a0a text.
- Labels are 14px, weight 400, line height 25.2px, #0a0a0a.
- Standard fields use 1px #cacaca borders and the inset shadow above.

### Navigation bar
- #2c3840 bar; brand text left in bold white; links in white with 1px separators; the last item is a blue filled tab.

### Navigation states (measured on the docs top bar)
- Items are 45px high with #e6e6e6 text on the #2c3840 bar.
- Hover: text turns #fefefe and the item fill lightens to #41525e (rgb 65, 82, 94).
- "Getting Started": #1779ba fill with #e6e6e6 text; hover darkens the fill to #115b8d (rgb 17, 91, 141) and keeps the text color.
- The change is color only; there is no underline, movement or shadow.
- The brand name "Foundation Framework" is bold white text at the left edge of the bar.

### Illustrated feature
- Centered line-art icon, thin 28px title, 15px body, centered; used four-up.

### Link
- Blue (#1779ba) 13px to 15px text with no underline; hover darkens by about 14 percent (`$anchor-color-hover` scale-color lightness -14%).

### Footer
- Dark #2c3840 with light text and 32px padding.

### Imagery and art direction (from the capture)
- The hero is a single full-bleed illustration: a starry blue-teal night sky fading to orange and pink at the horizon, jagged mountains, and the Yeti in a white-and-orange space suit with glasses and a headset, numbered "6".
- Section illustrations repeat the mascot in new roles: a white Yeti with a tablet for Sites, a pink octopus holding a page for Emails.
- Feature icons are line-art in navy with blue accents (code brackets, devices, tools, notebook) floating inside faint node-and-edge networks.
- Illustrations sit on white with a soft elliptical ground shadow; there is no photography.
- Density is low: one idea per band, 60px or more of vertical padding, dotted rules between bands.
- Copy voice is friendly and plain: second-person, active ("Foundation is the professional choice for designers, developers and teams.").
- Meta lines under the hero button are small and light: "29.3k GitHub stars" and "@FoundationCSS" with icons, in 13px weight-200 text.
- Caption pattern: small uppercase letter-spaced label ("FOUNDATION FOR") above a thin 28px title.
- Link pattern: centered blue sentence-case link with an arrow on the closing call to action ("Learn more about why Foundation fits in your company").

## Design System Architecture

Foundation is a framework; the sources are:
- Settings and variables: https://github.com/foundation/foundation-sites (tag v6.9.0), file scss/settings/_settings.scss. Semantic palette map `$foundation-palette`; neutrals `$light-gray` #e6e6e6, `$medium-gray` #cacaca, `$dark-gray` #8a8a8a, `$black` #0a0a0a, `$white` #fefefe; `$global-font-size` 100%, `$global-lineheight` 1.5, `$global-margin` 1rem, `$global-radius` 0, `$breakpoints` (small 0, medium 640px, large 1024px, xlarge 1200px, xxlarge 1440px).
- Sass docs: https://get.foundation/sites/docs/sass.html describes the settings file (import before the framework), component variables for buttons, and selective export mixins instead of `foundation-everything`.
- Palette docs: https://get.foundation/sites/docs/global.html (semantic colors editable in the palette map).
- Typography docs: https://get.foundation/sites/docs/typography-base.html (header sizes by breakpoint).
- Class naming follows the settings keys: `.button`, `.button.secondary`, `.button.success`, `.button.warning`, `.button.alert`, `.callout`, with size modifiers (`.tiny`, `.small`, `.large`).
- The homepage layers a branded theme on top (Proxima Nova, brighter #1583cc CTA, dark #2c3840 surface, illustrated hero), so framework defaults and site styling differ and this document keeps them in separate tokens.

## Do's and Don'ts

Do:
- Start from `$foundation-palette` and change colors there, not in component CSS.
- Use #1779ba for all default actions and links.
- Use status colors only to carry meaning (success, warning, alert).
- Keep framework buttons square (radius 0) unless you intentionally set `$button-radius`.
- Use light heading weights on illustrated marketing pages and normal weights in docs.
- Separate sections with dotted rules and generous vertical space.
- Pair every mascot illustration with a short, centered caption and a blue "Learn more" link.

Don't:
- Don't use pure #000000 text; the base color is #0a0a0a.
- Don't mix the homepage's #1583cc with #1779ba on the same screen.
- Don't use bold for headings.
- Don't round framework buttons unless you set the radius variable.
- Don't add heavy drop shadows; depth is an inset bottom edge.
- Don't put dark-gray (#8a8a8a) text on #f1f1f1 backgrounds; it is for secondary captions on white.

## Responsive Behavior

- Mobile first: the framework's default small breakpoint starts at 0, and styles layer up at 640, 1024, 1200 and 1440px.
- Header sizes step from 24px (h1) on small screens to 48px on medium and up.
- The homepage hero heading drops from 46px to 30px (both weight 200, line height equal to size).
- Two-column sections (Sites and Emails) and the four-up features reflow to stacked columns on small screens (Foundation grid behavior; the stacked layout itself was not captured).
- Large illustrations scale with their container; the hero crops the mascot at narrow widths.
- Touch targets: framework buttons are at least 41px high; the large variant is 56px.
- Nav items collapse into a menu at small widths (framework top bar pattern; not captured).

## Iteration Guide

1. Set `$body-background` #fefefe, `$body-font-color` #0a0a0a, primary #1779ba in the palette map.
2. Set headings at weight normal for docs or 200 for marketing, with sizes 24/20/19 on small and 48/40/31 on medium.
3. Build buttons with padding 0.85em 1em, 14.4px text, and radius 0; use warning #ffae00 with #0a0a0a text.
4. For hero CTAs, use #1583cc, 20px bold, padding 17px 20px, radius 3px and the inset bottom shadow.
5. Inputs: 1px #cacaca border with inset `rgba(10,10,10,0.1) 0 1px 2px`.
6. Use #2c3840 for the nav and footer, and #e6e6e6 for light dividers.
7. Add mascot-style flat illustration for hero art; avoid photography.
8. Verify each value against the frontmatter and the settings file before shipping.
