---
version: alpha
name: YouTube
category: "Music & Audio"
description: "YouTube logged-out homepage in Thailand: a white #ffffff canvas with near-black #0f0f0f Roboto type (24px/900 heading, 14px/500 controls), an outlined 20px-radius Sign in pill in action blue #065fd4, a capsule search bar and brand red #ff0033 only in the logo."
colors:
  canvas: "#ffffff"
  ink: "#0f0f0f"
  ink-muted: "#606060"
  primary: "#065fd4"
  primary-hover: "#def1ff"
  brand-red: "#ff0033"
  surface-soft: "#f8f8f8"
  hairline: "#c6c6c6"
  button-border: "#00000033"
typography:
  display:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 40px
  heading:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 24px
    fontWeight: 900
    lineHeight: 32px
  input:
    fontFamily: Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 10px
  sm: 12px
  md: 18px
  lg: 20px
  xl: 40px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 15px
  s5: 16px
  s6: 18px
  s7: 24px
  s8: 42px
components:
  button-primary:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.lg}"
    padding: 0px 15px
    height: 40px
    borderColor: "{colors.button-border}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 1px 0px
    height: 24px
---

# YouTube — Design System

## Overview
The measured page is https://www.youtube.com/ opened logged out in Thailand: the logo carries a small "TH" superscript and the browser title is simply "YouTube". Instead of a populated feed, the capture shows an empty state: a white page with a left icon rail (Home, Shorts, Subscriptions, You), a centered search bar with a round microphone button, a three-dot menu and an outlined "Sign in" pill at the top right, and a single raised white card in the upper middle reading "Try searching to get started" with the sub-line "Start watching videos to help us build a feed of videos you'll love." Everything below is white space. Because no thumbnails loaded, this document describes the interface shell and its token system and says nothing about video-card styling, which was not measured. The look is neutral, utilitarian and icon-led; the only brand color in view is the red play-button logo mark. The mood is calm and generic so that video content can supply all the color on a populated page.

## Colors
`{colors.canvas}` is white (#ffffff). The primary reading color is `{colors.ink}` (#0f0f0f), used for the page heading and navigation labels, with `{colors.ink-muted}` (#606060) for secondary copy such as the card's sub-line. `{colors.primary}` (#065fd4) is the action blue, measured as the "Sign in" label and icon color; its hover state fills the pill with `{colors.primary-hover}` (#def1ff) and removes the border. `{colors.brand-red}` (#ff0033) is the logo red, taken from the site's `--yt-sys-color-baseline--static-brand-red` variable (value #f03). `{colors.surface-soft}` (#f8f8f8) is a light grey fill used in the search area, `{colors.hairline}` (#c6c6c6) borders the search field and `{colors.button-border}` (#00000033, black at 20 percent) borders the Sign in pill. The extractor's recorded button background of #000000 was a transparent value read as black, so no black fill is used.

## Typography
Everything measured is Roboto with Arial as fallback. The page heading `{typography.heading}` is 24px at weight 900 with 32px line height ("Try searching to get started"). Controls and nav use `{typography.display}` at 14px/500 with a 40px line height, which matches the 40px button height, and the search input uses `{typography.input}` at 16px/400 with a 22px line height. Icon-rail captions are 10px. The site's variables also reference "YouTube Sans" in display typestacks (for example `--yt-sys-typography-typestack--display-l-heavy-tall--font-names` is "YouTube Sans",Roboto,sans-serif), but only Roboto text was measured on this page.

### Font substitutes
Roboto is an open-source family; no substitute is needed. Arial is the declared fallback. YouTube Sans is referenced in variables but was not seen rendering here.

## Layout
A fixed top bar holds the hamburger, logo, a wide centered search group and the account area; below it a narrow left rail of four icon-over-label destinations stacks vertically with generous spacing, and the main content area starts to the right. The empty-state card is horizontally centered in the content column with generous white margin on both sides. Measured paddings are 1, 4, 8, 15, 16, 18, 24 and 42px, listed in `{spacing.s1}` to `{spacing.s8}`. The rail items rely on vertical rhythm, not borders, to separate.

## Elevation & Depth
The only elevated element is the empty-state card, which uses `rgba(0, 0, 0, 0.2) 0px 8px 23px 0px`, a broad soft shadow that lifts it off the white page. The search field has a subtle inset shadow `rgb(238, 238, 238) 0px 1px 2px 0px inset`. Buttons are flat. Overlays in the variable set use `rgba(0,0,0,0.3)` backgrounds, but none are open in the capture.

## Shapes
Radii measured: 10px (`{rounded.xs}`), 12px, 18px, 20px (`{rounded.lg}`, the Sign in pill at its 40px height), 40px, 100px, 50 percent for circular icon buttons, and split radii of 40px on the left or right of the search field and its search button (`40px 0px 0px 40px` and `0px 40px 40px 0px`). The search group therefore reads as one long capsule. The site's own variables define `--yt-sys-measurement--radius-condensed` 4px, `radius-comfortable` 16px, `radius-expanded` 18px and `radius-huge` 32px.

## Components
`button-primary` here is the outlined "Sign in" pill: transparent fill, label `{colors.primary}`, 14px/500, padding 0px 15px, height 40px, radius `{rounded.lg}`, border `{colors.button-border}`; hover gives it the `{colors.primary-hover}` fill. A person-in-circle icon precedes the label. The `text-input` is the search field: 16px text, 22px line height, with a grey outline and a capsule shape joined to a magnifier button. The microphone is a separate light-grey circular icon button. The icon rail uses filled glyphs with 10px labels, and the empty-state card is a softly rounded white panel with a centered bold heading.

## Design System Architecture
No public YouTube design-system documentation was opened for this write-up; this describes the system visible in the page at https://www.youtube.com/. The page exposes about 400 CSS custom properties, led by roughly 198 `--yt-sys-*` system tokens, 32 `--yt-ref-*` reference tokens, 34 `--yt-deprecated-*` legacy tokens, 31 `--yt-live-*` live-chat tokens, and component-scoped names such as `--ytd-searchbox-*`, `--ytd-margin-*` and `--paper-*` (Polymer paper element variables). The naming (reference tokens feeding system tokens, with deprecated tokens retained) implies a layered token architecture. System tokens cover color (baseline text, overlay and add-on color families), type (typestacks such as `headline-m-heavy-tall` and `body-l-default`, with sizes given in rem) and measurement (the four radius steps above).

## Do's and Don'ts
Do keep the interface neutral, white and icon-led so content carries the color. Do use Roboto at 14px/500 for controls and 24px/900 for page headings. Do build search as a single capsule with a joined search button. Do keep the Sign in action as an outlined pill with the blue label. Don't fill the Sign in pill with black. Don't use the brand red for buttons; here it appears in the logo mark only. Don't add heavy shadows; one broad soft shadow is the maximum. Don't reuse the browser default link colors.

## Responsive Behavior
A mobile pass was captured, but the measured values are shared with desktop for this empty state. The left rail of four destinations is the compact form of the navigation (a full guide drawer opens from the hamburger on wider layouts), and the variables include `--yt-sys-measurement--feed-margin-small`, which hints at a smaller feed margin on narrow screens. Breakpoint widths were not recorded, so none are stated.

## Iteration Guide
Start from a white canvas and a top bar built from the hamburger, logo, capsule search and outlined Sign in pill. Set headings in Roboto 24px/900, controls in 14px/500, input text in 16px/400. Use `{colors.ink}` for primary text and `{colors.ink-muted}` for helper copy. Round action pills at 20px, search ends at 40px, and use one broad shadow for raised cards. Before adding a new color, check the root-variable families above; take values from them and not from memory or from the capture image.

### What the empty state tells us
Because this is a signed-out, empty-feed page, the measurement captures the product's scaffolding in its quietest form. The copy is instructional and friendly rather than promotional: a bold imperative heading and one gentle sentence explaining why watching videos builds a feed. There is no hero imagery, no banner and no marketing call to action beyond the Sign in pill, so designers using this document should treat video thumbnails, channel avatars and watch-page controls as unmeasured territory and measure them separately before documenting them. The shell's restraint, large white areas and rounded capsules are the reliable takeaways.
