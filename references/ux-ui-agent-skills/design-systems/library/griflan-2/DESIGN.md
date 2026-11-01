---
version: alpha
name: "Griflan"
category: "Portfolio"
description: "Griflan brand studio home page measured live: warm near-black #181616 canvas, cream #fffddb text, a single red #ff3831 button with 3.56px radius, a tall condensed serif at 67.5556px for headlines and a small sans for navigation, all sized by a fluid viewport unit."
colors:
  canvas: "#181616"
  ink: "#fffddb"
  primary: "#ff3831"
  on-primary: "#fffddb"
typography:
  display:
    fontFamily: tan
    fontSize: 67.5556px
    fontWeight: 400
    lineHeight: 87.8222px
  display-mobile:
    fontFamily: tan
    fontSize: 43.16px
    fontWeight: 400
    lineHeight: 56.108px
  heading:
    fontFamily: sans
    fontSize: 15.6444px
    fontWeight: 400
    lineHeight: 19.5556px
  body:
    fontFamily: tan
    fontSize: 28.4444px
    fontWeight: 400
    lineHeight: 39.1111px
  button:
    fontFamily: tan
    fontSize: 18.4889px
    fontWeight: 400
    lineHeight: 18.4889px
  nav:
    fontFamily: sans
    fontSize: 12.8px
    fontWeight: 400
    lineHeight: 12.8px
rounded:
  xs: 3.56px
  sm: 4.44px
  md: 7.11px
  cta: 3.56px
  pill: 9999px
spacing:
  s1: 1.42px
  s2: 3.56px
  s3: 5.69px
  s4: 7.11px
  s5: 10.67px
  s6: 11.38px
  s7: 12.8px
  s8: 14.22px
  s9: 17.07px
  s10: 17.78px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    height: 46px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    height: 46px
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.pill}"
    borderColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink}"
---

# Griflan

## Overview

Griflan (griflan.com) is a brand and digital studio for technology companies. Its home page is dark, warm and typographic: a near-black warm canvas (`canvas`, #181616), cream text (`ink`, #fffddb) and a single hot red (`primary`, #ff3831) used for the call-to-action fill, tiny ornaments and client logos. The hero headline, "Helping our partners build original brands that shine.", is set in a tall condensed serif at 67.5556px and centered; below it a red "Start a Project" button and the line "For ambitious brands ready to scale." with small red squiggle ornaments on either side. The extracted page height is 8435px at a 1280px viewport.

The remainder of the home page is a sequence of editorial blocks: a left-aligned statement ("A strategy-led brand studio specializing in laying down the awesome sauce for Technology brands.", with the word "for" in italic) beside a montage of case-study screens and an outlined "Our Work" button; a bordered, table-like row of client outcomes with red logos above huge numerals ("$250m", "$140m", "65k", "2X", "7%") and a small caption each; and a section opening with a purple unicorn illustration above the headline "Crafting brands". The capture shows a long stretch of empty dark canvas below the first fold, which is the page's scroll-reveal state and not a design element.

The voice is playful and confident. The fetched page copy includes phrases such as "awesome sauce", "hit hard" and "You win. We grin." and offers Branding, Digital and Motion services. Case-study captions are plain and numeric ("Cognito acquired by Plaid for $250 million", "65,000 users on Values Bridge within five months of launch").

Imagery is a deliberate mix. Client logos are recolored to the brand red so that they read as part of the page rather than as third-party marks; case-study screens are shown as a small tilted montage on a deep-blue field; and a hand-drawn purple unicorn mascot signals the studio's irreverent side. The wordmark "Griflan" is set in a rounded geometric sans in cream at the top center. Together these keep a very strict three-color interface lively without introducing any additional interface colors, which is the central design decision to preserve in any rebuild.

## Colors

The palette has three colors only, which is the whole of the measured background and text set:

- `canvas` #181616, the page background and by far the largest background area (5764 weight versus 785 for red).
- `ink` #fffddb, a pale yellow-cream used for virtually all text (4971 weight) and for borders (1px #fffddb and a 10%-alpha variant #fffddb1a).
- `primary` #ff3831, the red of the primary button, the "Let's Connect" button, red text accents (1638 weight as text color) and client logos. `on-primary` is #fffddb, the cream label on the red button.

The capture also contains illustration colors (purple mascot, blue case-study screens) which are image content and are not tokens. There are no greys; secondary emphasis comes from size and from the red.

## Typography

Two web fonts are loaded under the family names `sans` (weights 400 and 700) and `tan` (400 and 400 italic). `tan` is the tall condensed serif of the headlines, statements and buttons; `sans` is a small neutral grotesque used for navigation and captions. The font files' commercial names are not exposed in the CSS, so they are referred to here only by their declared family names.

- `display` is tan at 67.5556px, weight 400, line height 87.8222px; `display-mobile` is 43.16px with line height 56.108px.
- `heading` is sans at 15.6444px, weight 400, line height 19.5556px (small labels and captions).
- `body` is tan at 28.4444px, weight 400, line height 39.1111px (statement paragraphs).
- `button` is tan at 18.4889px, weight 400, line height 18.4889px.
- `nav` is sans at 12.8px, weight 400, line height 12.8px.

Other measured sizes are 10.6667px (the most common caption size after 15.6444px), 52.2667px, 88.8889px (the largest, used for the big numerals) and 14.9333px. Only weights 400 and 700 occur. All sizes come from a fluid scale: the root declares `--global-font-size` as `clamp(1px,calc((100vw/var(--size))*10),var(--clamp))` with `--size` 375 and `--clamp` 11px, which is why sizes are fractional pixels.

## Layout

The layout scales with the viewport rather than using fixed breakpoints, according to the fluid font variable above. Content is left-aligned in a wide container with a centered hero. The client-outcomes block is a bordered horizontal strip: each cell holds a logo on top, a big numeral and a caption, separated by 1px cream rules, and the strip extends past the right edge as a scroller. The header places a small stacked navigation at the left (Services with a chevron, Brand Guide, Labs), a centered wordmark and, at the right, an underlined red "Join our workshop" link and the red "Let's Connect" button.

Measured spacing values: 1.42, 3.56, 5.69, 7.11, 10.67, 11.38, 12.8, 14.22, 17.07 and 17.78px (`s1`-`s10`), i.e. multiples of the fluid unit.

## Elevation & Depth

Flat. No box shadows were measured. Depth comes from 1px cream borders (#fffddb), a 10%-alpha cream rule, the dark-canvas-versus-screenshot contrast of the case-study images and the red fill of the button.

## Shapes

Radii are small and fluid: `xs` 3.56px, `sm` 4.44px, `md` 7.11px, `cta` 3.56px (the button radius) and `pill` 9999px. The primary button therefore has softly squared 3.56px corners; the outlined "Our Work" button is a cream 1px outline on the same canvas. A pill radius is used by the measured card-class element, which has a 1px cream border on the canvas fill. A 100% radius appears eight times (circles).

## Components

- **button-primary**: fill `primary` (#ff3831), text `ink` (#fffddb), tan 18.4889px, height 46px, radius 3.56px ("Start a Project", "Let's Connect").
- **button-secondary**: same fill, text and height; measured with an identity transform (an animated duplicate label inside the button).
- **nav / nav-link**: text `ink`, sans 12.8px.
- **card**: fill `canvas`, text `ink`, 1px `ink` border, pill radius.
- **footer**: text `ink`.
- **Outcome cell**: cream border, red logo, large tan numeral, 10.6667px sans caption.

## Design System Architecture

No public design-system or brand-guidelines page was opened for this entry. The home page fetch listed only the main sections, services and social profiles. The de-facto system has very few tokens: the root exposes only fluid-unit and clip variables (`--global-font-size`, `--size`, `--clamp`, `--clip`, `--clip-t`, `--clip-r`, `--clip-b`, `--clip-l`), so colors, sizes and radii are applied in component CSS. Everything is expressed in the fluid unit, so a faithful rebuild should scale all sizes with the viewport rather than hard-code pixels.

## Do's and Don'ts

Do:
- Keep to three colors: `canvas`, `ink` and `primary`.
- Set headlines and statements in the tall condensed serif and use the small sans for captions and navigation.
- Use big numerals with tiny captions for results.
- Keep corners at 3.56px on buttons.

Don't:
- Add grey tints or extra accents.
- Use bold weights on the serif.
- Add shadows or gradients to UI.
- Treat the hero's empty space as content; it belongs to scroll-reveal animation.

## Responsive Behavior

Measured at the mobile viewport: the h1 is 43.16px with line height 56.108px (versus 67.5556px desktop) and body text is 23.92px (versus 28.4444px desktop). The fluid unit scales with viewport width. Other mobile behavior (navigation collapse, strip scrolling) was not measured.

## Iteration Guide

1. Start on `canvas` with `ink` text.
2. Write a centered serif headline and a red `button-primary`.
3. Add proof as bordered cells with big numerals.
4. Keep the three-color rule and the 3.56px button radius.
5. Express sizes in the fluid unit so layouts scale with width.
