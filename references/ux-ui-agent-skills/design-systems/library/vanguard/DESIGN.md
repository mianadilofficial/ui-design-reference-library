---
version: alpha
name: Vanguard
category: "Banking & Insurance"
description: 'Vanguard''s corporate portal page (investor.vanguard.com/corporate-portal): FF Mark in 400-900 weights, a single crimson #c20029 hero panel on white #ffffff, near-black #000000 text, dark red #96151d hover accent, square corners, no shadows, 17px/24px body and 34px/900 headings.'
colors:
  canvas: '#ffffff'
  page-largest: '#c20029'
  ink: '#000000'
  link-blue: '#145bff'
  surface-card: '#f5f6f6'
  ink-soft: '#333333'
  ink-utility: '#232323'
  ink-deep: '#1a1a1a'
  hairline: '#eaeaea'
  primary: '#96151d'
typography:
  display:
    fontFamily: '"FF Mark"'
    fontSize: 46px
    fontWeight: 800
    lineHeight: 57px
  heading:
    fontFamily: '"FF Mark"'
    fontSize: 34px
    fontWeight: 900
    lineHeight: 40px
    letterSpacing: '-0.5px'
  body:
    fontFamily: '"FF Mark"'
    fontSize: 17px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: '"FF Mark"'
    fontSize: 19.1341px
    fontWeight: 600
    lineHeight: 28.7012px
    letterSpacing: '-0.5px'
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 13px
  s6: 14px
  s7: 15px
  s8: 23px
  s9: 28px
  s10: 44px
components:
  link:
    textColor: '{colors.ink-soft}'
    typography: '{typography.link}'
    padding: 8px 0px
  footer:
    textColor: '{colors.ink-soft}'
---

# Vanguard

## Overview
This design system describes the page the extractor measured at `https://www.vanguard.com`, which resolves to `https://investor.vanguard.com/corporate-portal`: Vanguard's own corporate portal page titled "Mutual funds, IRAs, ETFs, 401(k) plans, and more | Vanguard". It is a short, text-led page: a top utility bar ("OUR SITES", "CONTACT US"), the Vanguard wordmark, a split hero with a solid crimson panel on the left and a documentary-style photograph of two people in conversation on the right, three short mission statements, an "OUR COMPANY" link list, and a long legal footnote block headed "Important Information". The measured extraction found 147 visible elements and a 1280px-wide, 2677px-tall page.

The personality is institutional and plain-spoken. A financial company with a 50-year history leads with a claim ("50 years of investor success doesn't happen by chance.") and then proves it with numbers in ordinary sentences ("77% of Vanguard funds outperformed their peers over the past 10 years"). There are no cards, no drop shadows, no gradients and no decorative illustration on this page; every measured box shadow list is empty and the only measured border radius is a 50% circle on the hero's pause control. Color is spent in one place, the crimson hero panel, and everything else is white or a very light gray with near-black text.

## Colors
The palette is small. `canvas` is #ffffff, the measured page background. The largest single painted area on the page is the hero panel, #c20029, kept as `page-largest`; it covers a measurably larger area than any other background on the page. `surface-card` is #f5f6f6, a cool off-white used for the second-largest background area. `ink` is #000000, the most-read text color by character count, with body copy in it; `ink-soft` #333333 carries headings, links and the footer; #232323 (`ink-utility`) is the top-bar "CONTACT US" link color and #1a1a1a (`ink-deep`) is also measured among text colors.

The color that does the brand's accenting is the dark red #96151d. It is not in the generated token list as a text color, but the hover probe recorded it: on hover, the "Personal investors" link changes its color from #333333 to rgb(150, 21, 29), which is #96151d, and its border color is that same value. It is also the most frequent saturated color in the site's CSS corpus (34 occurrences), so it is declared as `primary`. The generated blue #145bff (`link-blue`) was measured as a link-like color twice in the CSS and 26 characters of text; it is kept as measured but not used as the action color. `hairline` #eaeaea is the one measured border color besides white, used for the thin rule above "Important Information".

Colors measured in the CSS corpus but not on this page, such as #0072ce (a focus-ring shadow `0 0 0 0.25rem #0072ce`) and #68b631, belong to other parts of the site and are not part of the page described here.

## Typography
One family carries the entire page: FF Mark. The extractor's loaded-fonts list records FF Mark at weights 400, 700 and 800 plus an icon font named icomoon. FF Mark accounts for all 3286 weighted characters measured. The corpus also references Univers LT Std Condensed and FF Mark Narrow in CSS, but neither is used on this page.

The scale is short:
- `display` is the hero headline: 46px, weight 800, line-height 57px, white on the crimson panel.
- `heading` is the section heading ("On a Mission", "Investor-Focused", "Important Information"): 34px, weight 900, line-height 40px, letter-spacing -0.5px.
- `body` is 17px, weight 400, line-height 24px, and is the dominant size on the page (2448 weighted characters).
- `link` is the large list link ("Personal investors", "Pressroom"): 19.1341px, weight 600, line-height 28.7012px, letter-spacing -0.5px.
- The utility-bar labels are 11px, weight 900, uppercase, letter-spacing 0.79px; eyebrow labels such as "OUR SITES" use 17px with 2px tracking.

FF Mark is a commercial typeface. A system sans-serif such as Arial is the fallback named in the site's CSS (the corpus lists `arial`); Mark's geometric round shapes will not be matched exactly.

## Layout
The page is a single column on a 1280px desktop viewport, with a measured content gutter: headings are 1152px wide, which leaves 64px at each side. The hero is split into two equal halves at the viewport midpoint, crimson text panel left and photograph right. A white "OUR SITES" panel floats over the lower part of the photograph and holds six links with small diagonal-arrow glyphs. Beneath it, the three mission blocks are left-aligned in a narrow text column, leaving the right half of the page empty; the "OUR COMPANY" link list sits in a lighter gray (it was captured mid-fade-in) and is indented to about the page center.

Spacing values measured on the page: gaps of 46px and 28px, and paddings of 8px (most frequent, ten uses), 13px, 4px, 14px, 6px, 23px, 10px, 50px, 80px, 15px and 44px. They are recorded as `s1`-`s10` in the frontmatter exactly as the extractor produced them; they are not a regular scale. Vertical rhythm is generous: the three mission blocks are separated by whitespace larger than the text they separate.

## Elevation & Depth
There is no elevation. Measured `boxShadows` is empty on the page, and the extraction found no cards. Separation comes from color planes (crimson against white, white panel over photograph) and from one 1px #eaeaea rule. The CSS corpus does define shadows elsewhere on the site (for example `0 1px 12px 1px rgba(0,0,0,.2)` and `0 0 18px rgba(0,0,0,.2)`), but these were not measured on rendered elements of this page and are not part of its visual language.

## Shapes
Corners are square. The extraction's `borderRadii` frequency list has a single entry, `50%`, weight 1: the circular outlined pause button at the top right of the hero. The generated token `rounded.pill` (9999px) is retained from the generated tokens for circular and pill shapes. Every other rendered element, including the hero panel, the "OUR SITES" panel and all links, computes a 0px radius. Images are full-bleed rectangles.

## Components
- **Utility bar**: a white strip with "OUR SITES" (with a chevron) at left and "CONTACT US" at right, both 11px, 900 weight, uppercase. On hover the "CONTACT US" link gains an underline; its color stays #232323.
- **Wordmark row**: the Vanguard logotype in dark red on white, beneath a hairline.
- **Hero**: crimson #c20029 panel with white 46px/800 headline and a white 17px-class paragraph; the photograph fills the right half.
- **Site-link panel** (`link`): a white box over the photograph listing audiences ("Personal investors", "Retirement plan participants", "Plan sponsors & consultants", "Financial professionals", "Company information and insights", "Global sites"). Links are 19.1341px/600, color #333333, with 8px vertical padding and a trailing arrow glyph. Hover changes the text color to #96151d.
- **Mission blocks**: a 34px/900 heading above a 17px paragraph.
- **Footer** (`footer`): the "Important Information" disclosure block, text color #333333, with footnote superscripts and one bold sentence for the performance disclaimer. A measured 1px #eaeaea rule opens it.
- **Pause control**: a circular outlined button over the hero photograph. It is a media control, not a brand call-to-action.

No primary button was detected (`ctaCandidates` is empty), so no `button` typography or component token is declared.

## Design System Architecture
No public design system or brand guidelines were found for Vanguard's web properties on the pages opened for this document, and none is cited here; this is the de-facto system recovered from the shipped page. The root custom-properties list (`rootVars`) is empty, so there are no published CSS variables. The CSS corpus names three font families (FF Mark, FF Mark Narrow, Univers LT Std Condensed), one icon font (icomoon, used for the diagonal arrows) and a legacy palette that includes blues (#0072ce, #0f62c5, #3860be) and a green (#68b631) belonging to other Vanguard surfaces. Source: the measured page https://investor.vanguard.com/corporate-portal, extracted from https://www.vanguard.com.

## Do's and Don'ts
Do
- Use one saturated plane per screen: the crimson #c20029 hero, with white and #f5f6f6 everywhere else.
- Set headings in FF Mark 900 at 34px with -0.5px tracking and body at 17px/24px.
- Write claims in full sentences with figures and attach footnotes.
- Keep corners square and shadows off.
- Turn links #96151d on hover.

Don't
- Don't document the pause button as a CTA style.
- Don't add drop shadows or card chrome; none were measured.
- Don't use the browser-default link blue #0000ee, which the extractor saw on a footnote link; it is a default, not a brand color.
- Don't mix in blues from the CSS corpus that were not measured on this page.

## Responsive Behavior
Mobile data was recorded by the extractor's mobile pass and is limited to text roles. At the mobile viewport the hero headline h1 stays 46px/800 but its line-height is 48px (57px on desktop) and its box is 336px wide and 288px tall; the h2 drops from 34px/40px to 28px/32px; body text stays 17px/24px. The mobile character-size ranking adds a 22px size (284 weighted characters, where desktop has 20px) and keeps 11px. Breakpoint values, navigation behavior and image behavior were not measured.

## Iteration Guide
1. Start from the frontmatter: canvas #ffffff, ink #000000, primary #96151d, page-largest #c20029.
2. Build the hero as a half-width crimson panel with the 46px headline; keep the photograph full-bleed beside it.
3. Add headings at 34px/900 and body at 17px/24px, all FF Mark (fallback Arial).
4. Add link lists at 19.1341px/600 with 8px vertical padding and hover to #96151d.
5. Finish with the long disclosure block under a 1px #eaeaea rule.
6. Run `node web/scripts/verify-designs.mjs --slug=vanguard` and keep every number identical to the frontmatter.
