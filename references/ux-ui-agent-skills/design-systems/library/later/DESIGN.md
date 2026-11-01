---
version: alpha
name: Later
category: "Product & SaaS"
description: "Later's influencer-marketing site: heavy Super X sans Display 900 headlines (74.8279px hero) with Inter Tight body, black #000000 ink on a cream Grid Glow #f8f2ea canvas, Hot Take orange #fe3f00 buttons with square corners and a clipped bottom-right corner, and Viral Crush purple #5124c1 bands."
colors:
  canvas: "#f8f2ea"
  page-largest: "#f8f2ea"
  white: "#ffffff"
  ink: "#000000"
  primary: "#fe3f00"
  on-primary: "#f8f2ea"
  surface-light: "#fefcfb"
  ink-on-dark: "#fefefd"
  ink-on-dark-muted: "#f9f3eccc"
  viral-crush: "#5124c1"
typography:
  display:
    fontFamily: "\"Super X sans Display\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 74.8279px
    fontWeight: 900
    lineHeight: 74.8279px
    letterSpacing: 0.37414px
  display-mobile:
    fontFamily: "\"Super X sans Display\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 32px
    fontWeight: 900
    lineHeight: 32px
    letterSpacing: 0.16px
  stat:
    fontFamily: "\"Super X sans Display\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 70px
    fontWeight: 900
    lineHeight: 87.5px
    letterSpacing: 0.35px
  label:
    fontFamily: "\"Inter Tight\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 27px
    letterSpacing: 0.09px
  body:
    fontFamily: "\"Inter Tight\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  nav:
    fontFamily: "\"Inter Tight\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
  input:
    fontFamily: "\"Inter Tight\", \"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.32px
rounded:
  xs: 4px
  sm: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 12px 40px 12px 24px
    height: 55px
    border: "2px solid #fe3f00"
    clipPath: polygon(0px 0px, 100% 0px, 100% calc(100% - 14px), calc(100% - 14px) 100%, 0px 100%)
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.label}"
    rounded: "{rounded.none}"
    padding: 12px 40px 12px 24px
    border: "2px solid #000000"
    clipPath: polygon(0px 0px, 100% 0px, 100% calc(100% - 14px), calc(100% - 14px) 100%, 0px 100%)
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 20px 40px
  nav-link:
    textColor: "{colors.viral-crush}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  text-input:
    textColor: "{colors.surface-light}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 8px 16px
    height: 51px
    border: "1px solid #fefcfb"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
---

## Overview

Later (https://later.com/) positions itself as an influencer marketing platform "built for creators, trusted by brands, and designed for results". The home page is loud and graphic: ultra-heavy Super X sans Display headlines, a cream background, hard black, a blazing orange-red for actions and saturated violet bands. Photography is cut into angled hexagon-like shapes — the hero portrait of a person applying makeup is framed by a polygon with chamfered corners — and the same chamfer appears on every button as a clipped bottom-right corner.

The page runs: a cream hero with the headline "Unforgettable campaigns start with insight.", an orange "Start your campaign →" button and an outlined "Earn as a creator →"; a white "Trusted by industry leaders" logo wall (Nike, Wayfair, Southwest, Unilever, Crumbl, KiwiCo, Chewy…); a big centered statement with 3D purple illustrations ("The only influencer marketing platform powered by real campaign intelligence", with "campaign" in a purple gradient); a pink-to-orange gradient band with four white stat cards (20M+, 136B, 1B+, $2B+) that carry a solid black offset block behind them; a violet "Go big. We've got you." tabbed panel; a creator card row; a dark case-study section; a purple "The latest from Later." resource grid; a grey closing statement ("When you get it right, it's impossible to ignore."); and a black footer that ends with a giant cream Later wordmark.

Microcopy is punchy and confident, set in sentence case with full stops on headlines. The capture shows a cookie notice over the hero; it is not part of the design. The extractor also hid a "later-influence-popup" dialog.

## Colors

The CSS uses Later's own colour names, which map directly to what was measured:

- **canvas #f8f2ea** — `--color-grid-glow` (also `--primary` in the CSS), the warm cream behind the hero and most bands; it is the largest background by area. Pure **white #ffffff** sits behind the logo wall and some sections.
- **ink #000000** — `--color-offline`, used for type, the "Get Later" header button and the footer.
- **primary #fe3f00** — `--color-hot-take`, the orange-red of "Start your campaign" with **on-primary #f8f2ea** cream text (not white).
- **viral-crush #5124c1** — `--color-viral-crush` / `--purple-deep`, the deep violet of resource bands and nav dropdown links; it is also the 3px focus outline colour on the header button.
- **surface-light #fefcfb** — `--color-gridglow-20`, a near-white used for the footer email input text and border.
- **ink-on-dark #fefefd** and **ink-on-dark-muted #f9f3eccc** — text on purple and black areas.

The CSS also declares a broader palette — `--purple-mid` #7b4de6, `--purple-soft` #b07aff, `--viralcrush-60` #977cda, `--pink` #ff9cf7, `--orange` #ffae73, `--yellow-secondary` #ffe880, `--green` #4dbc77, `--sapphire` #0057ff, `--color-sand` #ede7e4 and charcoal greys — used in illustrations and gradients.

## Typography

Two families. **Super X sans Display** (`--font-heading`, loaded at 700 and 900) is the display face: very heavy, wide, with slight positive tracking (0.005em). **Inter Tight** (`--font-body`, loaded at 400, 600, 700, 800, 900) handles everything else.

- **display** — Super X sans Display 74.8279px / 900 / 74.8279px (line height equals size), 0.37414px tracking.
- **stat** — 70px / 900 / 87.5px for the stat numbers ("20M+"). Other display sizes measured on the page: 96px, 56px, 45px, 44px, 38px and 30px, each with tracking at 0.005em.
- **label** — Inter Tight 18px / 700 / 27px for button labels and small section titles ("Trusted by industry leaders").
- **body** — Inter Tight 24px / 400 / 36px for lead paragraphs and testimonial quotes; 16px is the most frequent text size overall.
- **nav** — Inter Tight 16px / 700 / 20px; header items are 14px / 600 with 0.42px tracking.
- **input** — 16px / 400 / 24px, 0.32px tracking.

No public source for Super X sans Display was opened in this research; if it is unavailable, substitute an extended, black-weight grotesque and declare the substitution. Inter Tight is free on Google Fonts.

## Layout

Measured at 1280px, the page is 12,294px tall. The header is 70px tall with 20px 40px padding: logo at left, a pill of four dropdown menus (For enterprise brands, For creators, For social media managers, Resources), then "Sign in" and a black "Get Later →" button. The CSS sets `--container-padding: 2.5rem` (40px). The hero is a two-column split (copy left, angled portrait right). Stat cards sit four across; the resource grid is a two-column mosaic; the footer has six link columns plus a newsletter field.

Gaps cluster at 8px, 32px, 16px and 64px; paddings at 4px, 40px, 24px, 12px and 20px. The CSS spacing scale uses `--space-3` 1.5rem, `--space-5` 2.5rem and `--space-15` 7.5rem among others.

## Elevation & Depth

Depth is graphic rather than soft. The stat cards sit on a solid black block offset down and to the right, a flat "3D" effect drawn in the art direction. Measured box-shadows are few: `rgba(0, 0, 0, 0.2) 10px 10px 30px 0px` on four elements and `rgba(0, 0, 0, 0.1) 0px 0px 24px 0px` on one. Overlays use black at 40% (#00000066) and 50% (#00000080). Gradients (pink to orange, violet to lilac) and 3D-rendered purple objects add volume to otherwise flat bands.

## Shapes

Square corners are the rule: the main buttons, header, inputs and footer all compute a 0px radius. Instead of rounding, Later chamfers: buttons use `clip-path: polygon(0px 0px, 100% 0px, 100% calc(100% - 14px), calc(100% - 14px) 100%, 0px 100%)`, cutting a 14px diagonal off the bottom-right corner, and the hero photo uses a larger angled crop. Rounded values do exist — 100% for circular icons (13 elements), 20px on five elements and 4px on one — and the CSS declares `--radius-xs` 5px through `--radius-xl` 50px, but they are secondary.

## Components

- **Primary button** — #fe3f00 fill and 2px #fe3f00 border, cream #f8f2ea Inter Tight 18px/700 label with a trailing arrow, 12px 40px 12px 24px padding, 55px tall, square with the 14px clipped corner.
- **Outline button** — transparent with a 2px solid black border, black label, same padding and clip ("Earn as a creator →").
- **Header button** — black fill with cream text ("Get Later →"); on keyboard focus it shows a 3px solid #5124c1 outline with 3px offset.
- **Stat card** — white card with an icon, a 70px/900 number and a two-line caption, on a black offset block.
- **Tabbed panel** — a violet band containing a row of tabs and a cream content card with check-marked feature lists and a "Learn more →" link.
- **Creator card** — portrait photo with name, in a fanned row of slightly overlapping cards with purple frames.
- **Footer** — black, cream text, six link columns, social icons, an "Email Address" input with a 1px #fefcfb border (51px tall, 8px 16px padding) and a cream "Subscribe →" button, then the giant wordmark.

## Design System Architecture

No public design system or brand guidelines page was found: https://later.com/brand/ and https://later.com/press/ both returned 404, and the home page links no brand or press kit. The de-facto system is visible in the shipped CSS custom properties, which use Later-specific colour names (`--color-grid-glow`, `--color-hot-take`, `--color-viral-crush`, `--color-offline`, `--color-gridglow-20`, `--viralcrush-60`), a heading/body font pair (`--font-heading`, `--font-body`), a named weight scale (`--font-weight-light` 350 to `--font-weight-heavy` 900), heading sizes (`--h1` 2.5rem, `--h1-2xl` 3.5rem, `--h2` 2.125rem, `--h3` 1.625rem, `--h4` 1.125rem), text sizes (`--text-xs` … `--text-2xl`), radii (`--radius-xs` … `--radius-xl`) and `--space-*` steps.

## Do's and Don'ts

**Do**
- Set headlines in a black-weight display face with tight line height (1.0) and slight positive tracking.
- Use Hot Take #fe3f00 with cream #f8f2ea text for the main action.
- Clip the bottom-right corner of buttons by 14px instead of rounding.
- Alternate cream, white, violet #5124c1, gradient and black bands to keep the rhythm loud.
- Use angled crops for photography.

**Don't**
- Don't round buttons or inputs; they are square with a chamfer.
- Don't use white text on the orange button; the label is cream.
- Don't use soft drop shadows as the main depth cue; use solid offset blocks and colour.
- Don't treat the cookie notice or the influence popup as brand UI.

## Responsive Behavior

The extractor's mobile pass at 390px recorded: the hero h1 at 32px / 900 / 32px with 0.16px tracking (74.8279px on desktop), "Trusted by industry leaders" at 16px / 700 / 24px, and the most frequent text size 16px. Only 1 header link stays visible and a menu toggle labelled "Open menu" appears (5 header links on desktop, no toggle). The widest card row measured 2 columns on mobile versus 4 on desktop. Other mobile behaviour was not measured.

## Iteration Guide

1. Set the canvas to #f8f2ea, ink #000000, and load Inter Tight plus a black-weight display face.
2. Build the hero headline at 74.8279px/900 with line height equal to size.
3. Make the primary button: #fe3f00 fill, 2px #fe3f00 border, cream 18px/700 label, 12px 40px 12px 24px padding, 0 radius, and the 14px bottom-right clip-path.
4. Add an outline twin with a 2px black border.
5. Compose bands: white logo wall, gradient stat band with offset-block cards, violet #5124c1 panels, black case studies.
6. End with a black footer and a cream oversize wordmark.
7. Check at 1280px and 390px against https://later.com/.
