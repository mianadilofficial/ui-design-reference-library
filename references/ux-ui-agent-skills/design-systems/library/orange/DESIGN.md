---
version: alpha
name: Orange
category: "Design Systems"
description: "Orange's corporate group site (orange.com/en) is a black, white and orange system: HelvNeueOrange bold headlines up to 100px, a square-cornered #ff7900 button with black text that flips to black on hover, hairline #cccccc rules, #eeeeee panels, and large editorial photography of people."

colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ff7900"
  on-primary: "#000000"
  surface-panel: "#eeeeee"
  ink-muted: "#666666"
  orange-accessible: "#f16e00"
  ink-faint: "#999999"
  danger: "#cd3c14"
  hairline: "#cccccc"
typography:
  display:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 100px
    fontWeight: 700
    lineHeight: 112.5px
    letterSpacing: "-0.1px"
  display-mobile:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 45px
    letterSpacing: "-0.1px"
  heading:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 31.5px
    letterSpacing: "-0.1px"
  subheading:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 26px
    letterSpacing: "-0.5px"
  body:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
    letterSpacing: "-0.1px"
  button:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: "-0.1px"
  nav:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: "-0.1px"
  link:
    fontFamily: HelvNeueOrange, "Helvetica Neue", Helvetica, "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 18px
    fontWeight: 700
    lineHeight: 16px
    letterSpacing: "-0.1px"
rounded:
  xs: 20px
  none: 0px
  pill: 9999px
spacing:
  s1: 2.08px
  s2: 4.99px
  s3: 5px
  s4: 6px
  s5: 7px
  s6: 7.5px
  s7: 8px
  s8: 10px
  s9: 13px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 18px 9px
    height: 40px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 7px 18px 9px
    height: 40px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 6px 7.5px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Orange

## Overview

The page measured here is the English homepage of Orange's group site, orange.com/en. It is a corporate communications site rather than a shop or a service portal: a carousel hero with a photograph of employees, a very large statement headline ("Orange is here..."), a world map in solid orange against light grey, a column of headline figures, and further photo-led story blocks. Navigation is a slim two-tier header with a utility strip above the main bar.

The visual character is blunt and graphic. The palette is essentially black, white and orange, and orange is used as a highlight rather than a surface for long text: the first word of the main headline, the primary call to action, the square logo block, the map fill and the active language marker. Everything else is black type on white, with greys for secondary copy and rules. Corners are square on the buttons the extractor measured. The tone of the microcopy is short and declarative ("Discover", "Subscribe", "See agenda", "Orange worldwide"), and headline copy is written as confident claims.

## Colors

The canvas is #ffffff white and the main ink is #000000 black, both measured as the body background and the most-read text color. The primary action color is #ff7900, the fill of the "Discover" button, with #000000 text on it. The same orange also fills the world map in the capture.

A second, slightly deeper orange, #f16e00, appears among the measured text colors and is also what the site's own CSS variables call `--bs-primary`, `--bs-orange` and `--bs-link-hover-color`. It is the orange used for orange-colored text on white, such as the word "Orange" in the hero headline. Greys are #666666 for secondary copy and #999999 for captions; #eeeeee is the light panel behind the hero caption and the carousel controls; #cccccc is the border/rule color. #cd3c14 is the one non-orange accent in the measured text colors and is defined in the CSS as the danger text-emphasis color; it is a status color, not a brand accent.

Rule of thumb from the measurements: orange never carries body text. Black on #ff7900 is the pairing used for the button label, and the hover state swaps to a #000000 fill with #ffffff text.

## Typography

One family does everything: HelvNeueOrange, a webfont loaded by the site in regular and bold, with Helvetica Neue, Helvetica, Noto Sans, Liberation Sans and Arial as fallbacks. The extractor reports only two loaded weights for it, 400 and 700, and the type scale uses only those.

The hero statement ("Orange is here...") is `display` at 100px, weight 700, line-height 112.5px, letter-spacing -0.1px; on a 390px viewport it drops to the `display-mobile` step at 40px. Card and carousel headlines use `heading` at 28px; sub-headlines such as the figures block use `subheading` at 24px with -0.5px tracking. Body copy is `body` at 18px on a 27px line height, weight 400. Buttons use 16px bold on a 20px line, navigation links 14px bold, and inline links 18px bold.

Bold is the default voice: headings, buttons and navigation are all 700, and regular weight is reserved for running text. Tracking is a constant -0.1px on nearly every style, a tight but not display-tight setting.

No substitute is required for rendering: the fallback stack already includes Helvetica Neue, Helvetica and Arial, and the Boosted typography page states that default element styles follow the brand guidelines with weights primarily 400 and 700, consistent with what was measured.

## Layout

The page is a single long scroll, 8253px tall at a 1280px viewport. Content sits in a wide container with generous left and right margins; the hero image is full-bleed under the header, with a grey caption panel overlapping its lower right corner. Below it, the large headline spans most of the container width and is followed by a row of columns that pair a subheading with a thin vertical rule, a pattern repeated for the figures ("123,500 employees worldwide", "340 million individual and corporate customers").

Spacing values in the generated tokens run from about 2px to 18px and are small increments used inside controls and links: button padding is 7px 18px 9px and nav links use 6px 7.5px. Larger vertical rhythm between sections comes from the sections themselves and the site's own default padding variable of 3rem on the root. Alternating image-left and text-right story blocks follow the map, each ending in a stack of figure rows separated by hairlines.

## Elevation & Depth

The site is essentially flat. The measured CSS shows `box-shadow: none` far more often than any other value, and the shadows that exist belong to focus rings (a two-pixel ring drawn from a focus-visible variable) and to a calendar-widget modal that is not part of the brand surface. Depth is created by color blocking instead: a grey panel against the photograph, a solid black button against white, and a black footer.

Do not add drop shadows to cards or buttons to imitate depth. Where separation is needed, the system uses either a #cccccc rule or a change of background to #eeeeee. Focus states are the one place where outlines are visible and are deliberately strong.

## Shapes

Corners are square. The primary button's measured radius is 0px, and so are the links, navigation and footer. Two other radii exist in the generated tokens: 20px is a 20px radius found in the site's CSS, and 9999px is the fully rounded form; in the capture the carousel pause and slide controls form a rounded capsule, which is the visible use of the rounded shape. The Bootstrap-style root variables also carry a small radius scale, but the buttons ignore it.

The world map is the main illustrative shape: country polygons in #ff7900 where Orange operates and light grey where it does not, outlined by thin dark borders. The logo is a solid orange square with a short white bar, and it is the largest single shape in the header.

## Components

**Primary button.** Background #ff7900, text #000000, 16px bold, 40px tall, padding 7px 18px 9px, a 2px border in the same orange, square corners. Hover inverts it: #000000 background, #ffffff text and a black border. The "Discover", "Subscribe" and "See agenda" buttons share this style.

**Secondary (dark) button.** Black fill with white text and a 2px black border, same padding and square shape, used for "See the publication", "Our innovation approach" and "Orange worldwide". On this site the dark button acts as the standard secondary action.

**Navigation.** A utility strip carries Orange Business, All our sites, Media library, the stock ticker, an accessibility toggle and FR/EN switches, with EN underlined in orange. The main bar holds the square logo, the section links Our Group, Our impact, Our expertise and Our news on the left and Finance, Press, Careers and a search icon on the right, all at 14px bold in black.

**Carousel controls.** A pause button and three dots sit in a light grey capsule below the hero. They are interface chrome and use the #eeeeee fill.

**Figure rows.** Large bold numerals (for example "65.5 million") over a regular-weight caption, separated by #cccccc rules.

**Footer.** Black background, white text.

## Design System Architecture

Orange publishes an open-source, Bootstrap-based component library, Boosted, whose documentation is at https://boosted.orange.com (opened for this write-up). Its home page describes it as a Bootstrap-based, Orange-branded accessible and ergonomic component library, maintained by Orange on GitHub at https://github.com/Orange-OpenSource/Orange-Boosted-Bootstrap, and says it connects to the wider Orange Design System. Its color palette page, https://boosted.orange.com/docs/5.3/customize/color-palette, lists two oranges, #ff7900 and #f16e00, plus white, black and grays, and says the library maps Orange color tokens onto Bootstrap's own token system. Its typography page, https://boosted.orange.com/docs/5.1/guidelines/typography, says element defaults match the brand guidelines.

What was measured on orange.com itself: its CSS defines a large set of Bootstrap-style custom properties (`--bs-primary`, `--bs-orange`, `--bs-gray-*`, `--bs-body-font-family` and so on) and the two oranges above appear as the CTA fill and as `--bs-primary`. I found no class name or file name in the extracted CSS that names Boosted, so this write-up does not claim the site is built on Boosted; every value in the frontmatter comes from the site's own measurements, and the Boosted pages are cited only as context for the same palette. The de-facto system on the site is a Bootstrap 5 variable layer with Orange tokens: custom properties for color, gray steps, body font and radii; a bold-by-default type scale; and 2px-bordered square buttons.

## Do's and Don'ts

Do keep #ff7900 for the single primary action in a view, with #000000 text on it. Do use bold HelvNeueOrange for every heading and button. Do let photography of people and the orange world map carry the page, with black and white around them. Do keep corners square on buttons.

Don't set paragraphs in orange or put white text on #ff7900; the measured pairing is black on orange. Don't round buttons or add shadows. Don't use #cd3c14 as a decorative accent. Don't treat the carousel capsule, the cookie or accessibility widgets, or the stock ticker as brand components. Don't introduce a second typeface; the site relies on one family in two weights.

## Responsive Behavior

The extractor measured the page at 1280px and at a 390px mobile width. The only mobile difference captured in the tokens is the hero headline stepping from 100px to `display-mobile`'s 40px size with a 45px line height; the other sizes were not re-recorded at mobile and are not claimed to change. Narrow-screen column behaviour was not measured, and the measurements do not describe the breakpoints, so none are stated here.

Touch targets are carried by the button height of 40px and the generous horizontal padding of 18px. Keep the bold weights and square corners at every width; the brand character depends on them.

## Iteration Guide

Start from the frontmatter tokens and change one thing at a time. For a new section, pick a white canvas, a bold `heading` headline, and at most one #ff7900 button. For emphasis inside a headline, color a single word in #f16e00 as the hero does. For a secondary action, use the black button. For dense data, follow the figure-row pattern: bold numeral, regular caption, #cccccc rule.

Before shipping, check that every text color is black or a measured grey on white, that no corner is rounded except the capsule-style controls, and that no shadow beyond a focus ring has crept in. When in doubt, remove decoration; the original is mostly type, photographs and one color.
