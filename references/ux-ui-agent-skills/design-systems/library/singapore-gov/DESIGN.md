---
version: alpha
name: Singapore Government (gov.sg)
category: "Design Systems"
description: "The gov.sg portal pairs a single typeface, Inter at weights 400 to 600 with tight negative tracking on display sizes, with a flat Singapore red (#c30000) for its hero band and filled \"Find out more\" buttons, white and #f3f4f6 content bands, and a near-black #18181b footer. Buttons have 4px corners, cards 8px, and the page is photographic and editorial rather than form-driven."

colors:
  canvas: "#ffffff"
  page-largest: "#f3f4f6"
  ink: "#374151"
  ink-strong: "#111827"
  ink-muted: "#474747"
  ink-black: "#000000"
  ink-on-dark-muted: "#a1a1aa"
  link: "#1a56e5"
  surface-info: "#eaf2ff"
  surface-footer: "#18181b"
  hairline: "#e2e8f0"
  primary: "#c30000"
  on-primary: "#ffffff"
  brand-interaction: "#D90000"
  brand-interaction-hover: "#6D0000"
  brand-interaction-pressed: "#410000"
  brand-tint: "#FBE6E6"

typography:
  display:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 68px
    fontWeight: 600
    lineHeight: 74.8px
    letterSpacing: "-1.496px"
  display-mobile:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 57.6px
    letterSpacing: "-1.056px"
  heading:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 31.008px
    fontWeight: 600
    lineHeight: 37.2096px
    letterSpacing: "-0.682176px"
  subheading:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 23.4px
  body:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 22.4px
  button-large:
    fontFamily: >-
      Inter, "Inter Fallback", ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, Ubuntu, Cantarell, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto
      Color Emoji"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 23.4px

rounded:
  sm: 4px
  md: 8px

spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 48px
  button-on-hero:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-large}"
    rounded: "{rounded.sm}"
    padding: 14px 24px
    height: 52px
  link:
    textColor: "{colors.ink-strong}"
    typography: "{typography.subheading}"
  nav-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
    padding: 8px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
---

## Overview

The gov.sg home page, as captured, is an editorial news-and-features front door rather than a transactional dashboard. It opens with a slim agency-identification strip, a pale blue (`{colors.surface-info}`) scam-warning banner, and a white navigation bar, then drops into a two-column hero: the left half is a flat red field (`{colors.primary}`) carrying a 68px white headline ("National Day Rally 2026"), a one-line subtitle and a single white button; the right half is a collage of tilted, white-bordered photographs on an orange gradient. Below sit a "Features" row of three image cards, then alternating full-bleed bands (illustration beside text, text beside photograph) on `{colors.page-largest}` and white, and finally a near-black footer (`{colors.surface-footer}`).

The personality is calm, civic and image-led. Red appears at the top of the page and on filled buttons inside the content bands; everything else is neutral grey text on white or light grey. There are no gradients on controls, no decorative shadows on the page, and almost no ornament beyond photography and illustration. Copy is plain and second-person ("Find out more", "Stay informed with updates and insights on key government policies and initiatives"), with a safety message in the banner that tells readers the 24/7 helpline number.

**Key Characteristics:**
- One typeface, Inter, at 400, 500 and 600, with display tracking pulled tight (-1.496px at 68px).
- One action color: `{colors.primary}` (#c30000) fills the hero and the "Find out more" buttons; white text sits on it.
- Content alternates between `{colors.canvas}` and `{colors.page-largest}` full-bleed bands instead of boxed sections.
- Buttons are modestly rounded (`{rounded.sm}`), cards a little more (`{rounded.md}`).
- Photography and spot illustration carry the visual weight; links that leave the site show a small arrow or "opens in new tab" icon.

## Colors

> **Source pages:** home page (`https://www.gov.sg`), measured by the extractor on desktop 1280px and mobile 390px; design-system pages listed under Design System Architecture.

- **Primary red** (`{colors.primary}` #c30000): the hero background and the fill of the "Find out more" buttons. The page's own CSS variables name a family around it: `{colors.brand-interaction}` #D90000 (default interaction), `{colors.brand-interaction-hover}` #6D0000 and `{colors.brand-interaction-pressed}` #410000 for states, and `{colors.brand-tint}` #FBE6E6 for a light red canvas. The variable names (`--color-brand-interaction-default`, `--color-brand-canvas-inverse`) are read from the page's root CSS; the capture shows #c30000 on screen.
- **Ink** (`{colors.ink}` #374151) is the most-read text color; headlines and card titles use `{colors.ink-strong}` #111827; navigation and card text measure `{colors.ink-black}` #000000; secondary copy uses `{colors.ink-muted}` #474747. On the dark footer, quiet text uses `{colors.ink-on-dark-muted}` #a1a1aa.
- **Surfaces:** `{colors.canvas}` white, `{colors.page-largest}` #f3f4f6 for the largest band area, `{colors.surface-info}` #eaf2ff for the information banner, `{colors.surface-footer}` #18181b for the footer.
- **Link blue** `{colors.link}` #1a56e5 is used for the inline "How to identify" link in the top strip. A bright blue (#056be7) also appears on the "Help us improve" feedback tab pinned to the left edge; it is a floating widget, not part of the page's action language, and is deliberately left out of the tokens.
- **Hairline** `{colors.hairline}` #e2e8f0 is the card border color.

## Typography

Inter (variable, 100 to 900 loaded) is the only family used for page copy. Display and heading sizes use negative letter-spacing; body and button text do not.

| Role | Size / line | Weight | Tracking |
|---|---|---|---|
| Display (`{typography.display}`) | 68px / 74.8px | 600 | -1.496px |
| Display, mobile (`{typography.display-mobile}`) | 48px / 57.6px | 600 | -1.056px |
| Heading (`{typography.heading}`) | 31.008px / 37.2096px | 600 | -0.682176px |
| Subheading (`{typography.subheading}`) | 18px / 23.4px | 600 | normal |
| Body (`{typography.body}`) | 16px / 24px | 400 | normal |
| Button (`{typography.button}`) | 16px / 22.4px | 500 | normal |
| Hero button (`{typography.button-large}`) | 18px / 23.4px | 500 | normal |

Inter is a free typeface, so no substitute is needed. The stack falls back through `ui-sans-serif`, `system-ui` and Segoe UI/Roboto. The feedback widget draws in Libre Franklin 14px 700 and sits outside the system. Headings are sentence case. Body line length stays comfortable because the feature paragraphs are set in narrow columns.

## Layout

The page is measured at a 1280px desktop width. Hero and band sections use a two-column split with exactly half the width each, text on one side and imagery full-bleed on the other, alternating left and right down the page. The "Features" row is a three-up card grid with a generous gap (the page uses gaps of 16px, 24px and 40px at frequency; paddings of 40px and 96px for sections). Spacing steps measured: 1, 2, 4, 8, 10, 12, 14, 16, 20 and 24px (`{spacing.s1}` to `{spacing.s10}`). Vertical rhythm between bands is large; inside cards, a 4px or 8px gap separates title and summary.

## Elevation & Depth

The page is essentially flat. The only measured shadow is `rgba(0, 0, 0, 0.2) 0px 0px 5px 0px` on the floating feedback tab, not on content. Depth comes from color blocking (red hero, grey bands, dark footer) and from photography that overlaps with white frames in the hero collage. Cards use a 1px `{colors.hairline}` border rather than a shadow.

## Shapes

Radii measured: 4px (`{rounded.sm}`) on buttons, 8px (`{rounded.md}`) on cards and image tiles. Hero photographs in the collage are tilted with white borders, which reads as playful against the otherwise square layout; the red and grey bands are full-bleed rectangles with no rounding.

## Components

- **Primary button** (`{components.button-primary}`): fill `{colors.primary}`, white Inter 16px/500 text, `{rounded.sm}` corners, padding 12px 20px, 48px tall; ends with a small external-link icon when it opens a new tab ("Find out more").
- **Hero button** (`{components.button-on-hero}`): white fill on the red hero, `{colors.ink}` text at 18px/500, 4px corners, padding 14px 24px, 52px tall.
- **Card:** white background, 8px radius, hairline border; image on top, an 18px/600 title with a diagonal-arrow glyph for external links, then a grey 16px description.
- **Navigation:** white bar with the gov.sg logo, text links in black with chevrons for menus, and a search icon at the right edge.
- **Information banner:** pale blue strip with an info icon, a dismiss "x" at the right, and the helpline message.
- **Footer:** `{colors.surface-footer}` with white link columns and a row of social icons headed "Reach us".

## Design System Architecture

The Singapore Government publishes an official Singapore Government Design System (SGDS) at [designsystem.tech.gov.sg](https://designsystem.tech.gov.sg); its tagline on the home page reads "Unifying Government through Design and Code" and its footer says it "was developed to empower teams in creating fast, accessible and mobile-friendly digital services." The site has Get started, Foundations, Components, Templates, Blocks, AI and Stories sections. Foundations covers Design tokens, Border, Colour, Elevation, Iconography, Layer, Layout, Motion, Spacing and Typography ([foundations](https://designsystem.tech.gov.sg/foundations/)).

What the docs say:
- **Tokens:** shared names for colors, text sizes, spacing, radius and motion, with semantic tokens (e.g. `sgds-primary-surface-default`) feeding component tokens (e.g. a button's `btn-bg`) ([design tokens](https://designsystem.tech.gov.sg/foundations/design-tokens)).
- **Typeface:** the Typography page names Inter ([typography](https://designsystem.tech.gov.sg/foundations/typography)), the same family gov.sg renders.
- **Radius scale:** none 0, xs 2, sm 4 (default), md 8, lg 12, xl 16, 2xl 24, 3xl 32, full 999px ([radius](https://designsystem.tech.gov.sg/foundations/border/radius)); gov.sg's measured 4px and 8px sit on this scale.
- **Brand palette:** the GovTech palette lists Red #F4333D, Magenta #BA2FA2 and Cyan #00C0F3 ([brand colour](https://designsystem.tech.gov.sg/foundations/colour/brand-colour)). gov.sg's measured red (#c30000) is not that value, so the gov.sg page is not shown to be using the SGDS palette.
- **Button:** variants Primary, Outline, Ghost; tones Brand, Neutral, Danger, Fixed light; sizes Extra small to Large ([button](https://designsystem.tech.gov.sg/components/button)). Measured on that docs page, the demo button is `#6b4feb` with 8px radius, 16px text and 48px height, which is the docs site's own demo theme and not gov.sg's.
- **Components are web components,** documented from the [GovTechSG/sgds](https://github.com/GovTechSG/sgds) repository, whose README calls SGDS "a frontend framework" for Singapore Government websites and says the repo holds the VitePress documentation portal.

No source opened ties the www.gov.sg page's CSS to SGDS (no `sgds` token string appears in the captured CSS), so the tokens above are the page's own measured values. The de-facto system on gov.sg is a Tailwind-style utility stack (`--tw-*` variables) plus a small set of `--color-brand-*` variables and `--font-inter`.

## Do's and Don'ts

**Do**
- Reserve `{colors.primary}` for one band-level action at a time, with white text.
- Use Inter 600 with negative tracking for headings and 400 for body.
- Alternate white and `{colors.page-largest}` bands, and put imagery edge-to-edge beside the text.
- Add an external-link icon whenever a button opens a new tab.

**Don't**
- Don't put shadows on content cards; use the hairline border.
- Don't round beyond 8px on page components.
- Don't use the bright blue of the feedback tab as an action color.
- Don't set long body copy wider than the narrow feature columns.

## Responsive Behavior

On mobile (390px) the H1 drops to 48px/57.6px with -1.056px tracking (`{typography.display-mobile}`). Buttons keep their 48px height and 12px 20px padding. Because sizes and tracking are tokenized, only the display size changes between desktop and mobile in the measurements.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.page-largest}` bands; add one red block only where the page needs a hero.
2. Build buttons from `{components.button-primary}` before inventing new variants; keep 4px corners.
3. Check any new text color against the measured inks (`{colors.ink}`, `{colors.ink-strong}`, `{colors.ink-black}`).
4. If a project must follow the official design system instead of gov.sg's page, use SGDS tokens from the docs above and re-measure.
5. Re-run `node web/scripts/verify-designs.mjs --slug=singapore-gov` after any change to values.
