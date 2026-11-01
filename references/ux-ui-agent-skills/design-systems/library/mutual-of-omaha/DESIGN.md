---
version: alpha
name: Mutual of Omaha
category: "Design Systems"
description: "Mutual of Omaha's website sets Source Sans Pro at 18px body with a 0.36px tracking, one action blue (#105fa8) on white and #f7f7f7 surfaces, a dark teal (#03746e) accent, 6px buttons and 8px cards. Hero photography of real older couples sits under a translucent black nav, and cards are white with a 1px #e5e5e5 border."

colors:
  canvas: "#ffffff"
  page-largest: "#f7f7f7"
  ink: "#444444"
  ink-muted: "#5d5d5d"
  ink-faint: "#838383"
  primary: "#105fa8"
  on-primary: "#ffffff"
  blue-dark: "#003a70"
  teal-dark: "#03746e"
  sand: "#fffbf2"
  gold: "#f5b93c"
  critical: "#c12506"
  hairline: "#e5e5e5"
  border-input: "#bababa"
  nav-overlay: "#00000080"

typography:
  display:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 52px
    letterSpacing: 0.36px
  display-mobile:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: 0.32px
  heading:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 27px
    letterSpacing: 0.36px
  subheading:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
    letterSpacing: 0.36px
  body:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
    letterSpacing: 0.36px
  button:
    fontFamily: "\"Source Sans Pro\", sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 20px
    letterSpacing: 0.36px

rounded:
  button: 6px
  card: 8px
  pill: 9999px

spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 23px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 11px 23px
    height: 44px
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 11px 23px
    height: 44px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-overlay}"
    textColor: "{colors.canvas}"
  text-input:
    textColor: "{colors.blue-dark}"
    typography: "{typography.button}"
    padding: 4px
    height: 44px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.card}"
    padding: 12px 16px 40px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.primary}"
    borderColor: "{colors.hairline}"
---

## Overview

Mutual of Omaha's home page, as captured, is a calm, reassuring insurance front door. A dark blue utility strip ("You are viewing content for Nebraska (Douglas County). Change Location") sits above a translucent black navigation bar with the white script-style wordmark, four menu items (Products, Employers, Planning & Advice, About Us) and Search, Support and Sign In on the right. Beneath it a full-bleed autumn photograph of a smiling older couple carries a white 48px headline ("Compare our Medicare Supplement Plans"), a short sentence and two buttons: a white "Get a Quote" and a ghost "Learn the Basics". Four white cards overlap the lower edge of the photo, each with a round grey icon medallion, a centered title, a short description and a blue underlined link. Further down, a bordered "How can we help?" panel splits visitors into "Individual customers" and "Covered by employers", with a solid blue "Sign in to Customer Access" button and outlined secondary buttons.

The voice is plain and second-person: "We can help", "Use our self-service portal for billing & payments". The brand's own voice page calls it a "Trusted Friend": conversational and warm but not chatty, with short words and contractions ([voice and tone](https://design.mutualofomaha.com/brand-standards/voice-and-tone)).

**Key Characteristics:**
- One action color, blue `{colors.primary}` (#105fa8), used for filled buttons, links and outlines; white is the default background.
- Source Sans Pro everywhere, with 0.36px letter-spacing applied to nearly every size, which gives body copy an open, easy-to-read texture.
- Large 18px body and 18px buttons: the density is low and aimed at readers who are often older.
- Photography of real people, candid and unfiltered, dominates the hero; spot illustration in round grey medallions marks the cards.
- Cards and panels are boxed with a 1px `{colors.hairline}` border rather than shadows.
- A dark teal (`{colors.teal-dark}`) accent colors section headings such as "Individual customers" and as a large background area further down the page.

## Colors

> **Source pages:** home (`https://www.mutualofomaha.com`) measured at 1280px and 390px; component page `https://design.mutualofomaha.com/digital/elements-components` measured with the extractor as `mutual-of-omaha--components`.

- **Primary blue** `{colors.primary}` #105fa8: the brand's "Mutual of Omaha blue (#105FA8/PMS 300)" per the brand color page ([color](https://design.mutualofomaha.com/brand-standards/color)); the digital style guide calls it the "call to action color (links, buttons)" ([core styles](https://design.mutualofomaha.com/digital/core-styles)). Measured as the fill of "Sign in to Customer Access" and "Get Started".
- **Blue dark** `{colors.blue-dark}` #003a70: the corporate blue; measured as the utility-strip background and as text-input text color.
- **Teal dark** `{colors.teal-dark}` #03746e: accent; measured on section headings and as a background area. The docs state not to flood large backgrounds with Blue, and allow TealDark only in rare cases.
- **Ink** `{colors.ink}` #444444 is the most-read text color; `{colors.ink-muted}` #5d5d5d is the secondary paragraph grey; `{colors.ink-faint}` #838383 appears on the component docs page.
- **Surfaces:** `{colors.canvas}` white is the default; `{colors.page-largest}` #f7f7f7 holds panels and the footer; `{colors.sand}` #fffbf2 is a documented warm alternative (read from the page's CSS variable `--color-sand`).
- **Status/supporting:** `{colors.critical}` #c12506 (error text on the components page) and `{colors.gold}` #f5b93c (a measured supporting tint).
- **Lines:** `{colors.hairline}` #e5e5e5 for card borders and `{colors.border-input}` #bababa for inputs and outline controls on the components page.
- **Overlay:** `{colors.nav-overlay}` (#00000080, black at 50%) tints the nav over the hero photo.

## Typography

The measured family is Source Sans Pro (400, 600 and 700 loaded, plus 400 italic). The design guide's brand page says Whitney (Hoefler & Co.) is the print corporate typeface, with Source Sans Pro as the stand-in, and that "websites, emails and applications use Source Sans Pro with a fallback of Helvetica" ([typography](https://design.mutualofomaha.com/brand-standards/typography)). The newer digital core-styles page names "Source Sans 3" with weights 300 (h1 only), 400, 600 and 700, and a 4px baseline grid; the extractor measured "Source Sans 3" on that docs page and "Source Sans Pro" on the live home page. Whitney is proprietary; use Source Sans Pro or Source Sans 3 as the web substitute.

| Role | Size / line | Weight |
|---|---|---|
| Display (`{typography.display}`) | 48px / 52px | 700 |
| Display, mobile (`{typography.display-mobile}`) | 32px / 40px | 700 (0.32px tracking) |
| Subheading (`{typography.subheading}`) | 24px / 32px | 400 |
| Heading (`{typography.heading}`) | 20px / 27px | 600 |
| Body (`{typography.body}`) | 18px / 28px | 400 |
| Button (`{typography.button}`) | 18px / 20px | 600 |

Headline style: the voice and digital pages say H1s are written in title case and H2 to H6 in sentence case; the hero shows a title-case H1. Letter-spacing is 0.36px across the scale. The digital guide recommends paragraph lines of 55 to 85 characters, max 675px wide.

## Layout

The digital guide defines a `.Container` with max-width 1600px and a 12-column responsive `.Grid`, with 16px (1.6rem) gutters on `.Grid-cell`s ([core styles](https://design.mutualofomaha.com/digital/core-styles)). Breakpoints are default up to 535px, small 536 to 765px, medium 766 to 980px, large 981 to 1300px and extra large 1301 to 1600px. On the home page, four equal cards sit in a row overlapping the hero, then a centered bordered panel with two columns. Sections are separated by generous white space, which the brand page says conveys "approachability and straightforwardness". Measured gaps in the stylesheet include 8px between grouped buttons (the docs require 8px) and 12 to 23px paddings; see `{spacing.s1}` to `{spacing.s10}`.

## Elevation & Depth

The page is mostly flat. Cards and panels use borders (`{colors.hairline}`), and the nav floats on a 50% black overlay over the hero photograph. The digital guide's Depth & Shadow page says depth is "used for micro interactions to show context or relationship between UI elements" and warns to keep z-index small ([depth and shadow](https://design.mutualofomaha.com/digital/guidelines/depth-shadow)). The root CSS defines a definition-box shadow (`0 6px 9px 5px rgba(0,0,0,0.1), 0 3px 4px 0 rgba(0,0,0,0.15)`), but no content element on the captured home page carries a shadow.

## Shapes

Buttons use 6px corners (`{rounded.button}`), cards and panels 8px (`{rounded.card}`; the root variable `--border-radius-base` is 8px). Icon medallions in cards are fully round (50% and 100% radii were measured). Inputs on the component page are 6px with a 1px `{colors.border-input}` border and 44px height.

## Components

- **Primary button** (`{components.button-primary}`): `{colors.primary}` fill, white 18px/600 text, 6px radius, padding 11px 23px (12px 24px on the docs page), 44px high. Title case labels such as "Get Started"; the docs ask for about three words or 20 characters.
- **Outline button** (`{components.button-outline}`): white fill, blue text and a blue border, same size ("Get a Quote" measured as outlined; on the hero it appears white on the photograph).
- **Button hierarchy:** the docs define primary (solid), secondary (outline, "the default button that should be used in most cases") and tertiary (flat); one primary per group; the most important button is on the right of an inline group; 8px between buttons ([elements and components](https://design.mutualofomaha.com/digital/elements-components)).
- **Cards:** white, 8px radius, 1px hairline border, padding 12px 16px 40px; title, description and a blue link with a small round chevron icon. The docs require a title, description and an interactive element.
- **Text links:** blue 18px, underlined, with a small circled arrow or an external-link icon.
- **Navigation:** translucent black bar, white 16px/600 text, 80px high.
- **Footer:** `{colors.page-largest}` with blue links, bordered above.
- **Inputs:** 44px high, 18px text, 6px radius.

## Design System Architecture

Mutual of Omaha publishes an official Design Guide at [design.mutualofomaha.com](https://design.mutualofomaha.com), which says it "was created to allow you to develop materials that portray our company and our brand appropriately and consistently." Its areas are Brand Standards (Logo, Color, Typography, Photography, Illustrations, Voice and Tone), Print, Email, Digital, Writing, Promotional Items and Dynamic Landing Pages. The Digital Design System "is a central repository where we house reusable UI elements, high-quality tested code, guidelines and UX patterns", and it is versioned (v2, v3, v3.1 and v4 CDN folders under `cdn.mutualofomaha.com/design-guide/`). Docs contain Guidelines (design principles, photography, depth and shadow, ADA principles), Core Styles (color, typography, spacing, grid, container), Elements and Components (accordion, buttons, cards and others), Patterns (navigation), Templates (hero, footer) and Assets.

The system's code conventions are visible in its docs: BEM-like capitalized classes (`.Container`, `.Grid-cell`, `.Button--white`, `.Button--full`, `.is-disabled`), utility classes such as `.u-size4of10`, `.u-fontWeight600` and `.u-[sm/md/lg/xl-][m/p]...` spacing classes, rem sizing where 1rem equals 10px, and a 4px baseline grid. The root CSS on the home page exposes component-scoped variables (`--Field-*`, `--InlineMessage-*`) and a `--color-*` palette (e.g. `--color-blue-dark` #003a70). The measured buttons on the docs components page (blue fill, 6px radius, 18px/600, 12px 24px) match the home page's.

## Do's and Don'ts

**Do**
- Use white as the page background; use `{colors.page-largest}` or `{colors.sand}` to break up content.
- Use one primary button per group, title-case labels of about three words.
- Keep white space generous and let photography of real, unposed people carry emotion.
- Use ink colors that pass WCAG AA on white; the guide marks #bababa, #e5e5e5 and #f7f7f7 as failing for text.

**Don't**
- Don't flood large backgrounds with the primary blue.
- Don't use colors outside the documented palette for buttons.
- Don't use caps for headings or underline text that is not a link.
- Don't left-align or center a form button group at tablet and desktop; align it right.

## Responsive Behavior

On mobile (390px) the display size drops from 48px to 32px with 40px line height (`{typography.display-mobile}`). The digital guide recommends full-width buttons at the default breakpoint (below 536px) and stacked button groups with 8px gaps and the most important button at the bottom; the captured page does not show the stacked layout, so card behavior below 536px is not described here. Max button width is 600px per the docs.

## Iteration Guide

1. Start on white, add a hero photograph with the headline in white and the nav as a 50% black overlay.
2. Use `{components.button-primary}` for the single main action and an outline button for the rest.
3. Put cards on a row with 8px radius, a hairline border and a blue link.
4. Add `{colors.teal-dark}` only as an accent for headings or a rare band.
5. Verify new text colors against the measured inks, then run `node web/scripts/verify-designs.mjs --slug=mutual-of-omaha`.
